<?php

namespace App\Controller;

use App\Entity\Discussion;
use App\Entity\Message;
use App\Entity\User;
use App\Repository\MessageRepository;
use App\Repository\DiscussionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use \Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MessageController extends AbstractController
{
    #[Route('/discussions', name: 'app_message')]
    public function listDiscussions(EntityManagerInterface $entityManager): Response
    {
        $discussions = $entityManager->getRepository(Discussion::class)->findAll();
        $users = $entityManager->getRepository(User::class)->findAll();

        return $this->render('message/conversation.html.twig', [
            'discussions' => $discussions,
            'users' => $users
        ]);
    }

    #[Route('/discussion/{id}', name: 'view_discussion', requirements: ['id' => '\d+'])]
    public function viewDiscussion(EntityManagerInterface $entityManager, int $id): Response
    {
        $discussion = $entityManager->getRepository(Discussion::class)->find($id);

        if (!$discussion) {
            throw $this->createNotFoundException("Discussion introuvable.");
        }

        $messages = $entityManager->getRepository(Message::class)->findBy(
            ['discussion' => $discussion],
            ['createdAt' => 'ASC']
        );

        $discussions = $entityManager->getRepository(Discussion::class)->findAll();
        $users = $entityManager->getRepository(User::class)->findAll();

        return $this->render('message/conversation.html.twig', [
            'discussions' => $discussions,
            'discussion' => $discussion,
            'messages' => $messages,
            'users' => $users
        ]);
    }

    #[Route('/message/send', name: 'send_message', methods: ['POST'])]
    public function sendMessage(Request $request, EntityManagerInterface $entityManager, ValidatorInterface $validator, Security $security): JsonResponse
    {
        $discussionId = (int) $request->request->get('discussion_id');
        $content = trim($request->request->get('content'));
    
        $discussion = $entityManager->getRepository(Discussion::class)->find($discussionId);
        if (!$discussion) {
            return new JsonResponse(["error" => "Discussion introuvable"], 400);
        }
    
        $sender = $security->getUser();
        if (!$sender instanceof User) {
            return new JsonResponse(["error" => "Utilisateur non authentifié"], 401);
        }
    
        $receiver = ($discussion->getSender()->getId() === $sender->getId()) ? $discussion->getReceiver() : $discussion->getSender();
    
        $message = new Message();
        $message->setContent($content);
        $message->setDiscussion($discussion);
        $message->setSender($sender);
        $message->setReceiver($receiver);
    
        $errors = $validator->validate($message);
        if (count($errors) > 0) {
            return new JsonResponse(["error" => "Erreur de validation"], 400);
        }
    
        $entityManager->persist($message);
        $entityManager->flush();
    
        return new JsonResponse([
            "id" => $message->getId(),
            "content" => $message->getContent(),
            "sender" => $sender->getNom(),
            "createdAt" => $message->getCreatedAt()->format('Y-m-d H:i:s'),
        ]);
    }
    #[Route('/messages/fetch/{discussion_id}', name: 'fetch_messages', methods: ['GET'])]
    public function fetchMessages(int $discussion_id, MessageRepository $messageRepository): JsonResponse
    {
        $messages = $messageRepository->findBy(
            ['discussion' => $discussion_id],
            ['createdAt' => 'ASC']
        );
    
        $data = [];
        foreach ($messages as $message) {
            $data[] = [
                'id' => $message->getId(),
                'content' => $message->getContent(),
                'createdAt' => $message->getCreatedAt()->format('d/m/Y H:i'),
                'sender_id' => $message->getSender()->getId(),
                'sender_image' => $message->getSender()->getImage(),
                'reaction' => $message->getReaction(),
            ];
        }
    
        return new JsonResponse($data);
    }
    
   #[Route('/discussion/new', name: 'create_discussion', methods: ['GET', 'POST'])]
public function createDiscussion(Request $request, EntityManagerInterface $entityManager, ValidatorInterface $validator, Security $security): Response
{
    $errors = [];

    $sender = $security->getUser(); // Utilisateur connecté

    
    // Obtenir tous les utilisateurs
    $utilisateurs = $entityManager->getRepository(User::class)->findAll();

    $excludeUsers = [];
    $discussions = $entityManager->getRepository(Discussion::class)->findBy([
        'sender' => $sender
    ]);
    $discussions += $entityManager->getRepository(Discussion::class)->findBy([
        'receiver' => $sender
    ]);

    foreach ($discussions as $discussion) {
        $excludeUsers[] = $discussion->getSender()->getId();
        $excludeUsers[] = $discussion->getReceiver()->getId();
    }

    $utilisateurs = array_filter($utilisateurs, function ($utilisateur) use ($sender, $excludeUsers) {
        return $utilisateur instanceof User && $utilisateur->getId() != $sender->getId() && !in_array($utilisateur->getId(), $excludeUsers);
    });

    if ($request->isMethod('POST')) {
        $receiverId = $request->request->get('receiver_id');

        if (!$receiverId) {
            $errors[] = 'Le destinataire est requis.';
        }

        // Rechercher le destinataire
        $receiver = $entityManager->getRepository(User::class)->find($receiverId);

        // Créer la discussion si tout est correct
        if (empty($errors)) {
            if (!$receiver) {
                $errors[] = 'Le destinataire sélectionné n\'existe pas.';
            } else {
                // Vérifier si une discussion existe déjà entre ces deux utilisateurs
                $existingDiscussion = $entityManager->getRepository(Discussion::class)
                    ->findOneBy([
                        'sender' => $sender,
                        'receiver' => $receiver
                    ]);

                // Si une discussion existe déjà, on l'affiche sinon on crée une nouvelle
                if ($existingDiscussion) {
                    return $this->redirectToRoute('view_discussion', ['id' => $existingDiscussion->getId()]);
                }

                // Créer la discussion
                $discussion = new Discussion();
                $discussion->setSender($sender);
                $discussion->setReceiver($receiver);

                // Persister et enregistrer la discussion
                try {
                    $entityManager->persist($discussion);
                    $entityManager->flush();

                    // Rediriger vers la page de la nouvelle discussion
                    return $this->redirectToRoute('view_discussion', ['id' => $discussion->getId()]);
                } catch (\Exception $e) {
                    $errors[] = 'Erreur lors de la création de la discussion.';
                }
            }
        }
    }

    // Afficher tous les utilisateurs dans la vue
    return $this->render('message/create.html.twig', [
        'utilisateurs' => $utilisateurs,
        'errors' => $errors,  // Passer les erreurs à Twig
    ]);
}


    
    #[Route('/message/delete/{id}', name: 'delete_message', methods: ['POST'])]
    public function deleteMessage(int $id, EntityManagerInterface $entityManager): Response
    {
        $message = $entityManager->getRepository(Message::class)->find($id);
        if (!$message) {
            throw $this->createNotFoundException("Message introuvable.");
        }

        $entityManager->remove($message);
        $entityManager->flush();

        return $this->redirectToRoute('view_discussion', ['id' => $message->getDiscussion()->getId()]);
    }

    #[Route('/discussion/delete/{id}', name: 'delete_discussion', methods: ['POST'])]
    public function deleteDiscussion(int $id, EntityManagerInterface $entityManager, DiscussionRepository $discussionRepository): Response
    {
        $discussion = $discussionRepository->find($id);
        if (!$discussion) {
            throw $this->createNotFoundException("Discussion introuvable.");
        }
    
        // Supprimer tous les messages liés à cette discussion
        foreach ($discussion->getMessages() as $message) {
            $entityManager->remove($message);
        }
    
        // Supprimer la discussion après avoir supprimé les messages
        $entityManager->remove($discussion);
        $entityManager->flush();
    
        $this->addFlash('success', 'Discussion supprimée avec succès.');
        return $this->redirectToRoute('app_message');
    }

    #[Route('/message/edit/{id}', name: 'edit_message', methods: ['GET', 'POST'])]
    public function editMessage(int $id, Request $request, EntityManagerInterface $entityManager, MessageRepository $messageRepository): Response
    {
        $message = $messageRepository->find($id);
        if (!$message) {
            throw $this->createNotFoundException("Message introuvable.");
        }

        // Création du formulaire
        $form = $this->createFormBuilder($message)
            ->add('content', TextareaType::class, [
                'label' => 'Modifier le message',
                'attr' => ['class' => 'form-control']
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Enregistrer',
                'attr' => ['class' => 'btn btn-primary mt-2']
            ])
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'Message modifié avec succès.');
            return $this->redirectToRoute('view_discussion', ['id' => $message->getDiscussion()->getId()]);
        }

        return $this->render('message/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/message/{id}/reaction', name: 'message_react', methods: ['POST'])]
    public function react(Message $message, Request $request, EntityManagerInterface $entityManager): Response
    {
        $emoji = $request->request->get('reaction');
    
        if ($emoji) {
            $message->setReaction($emoji);
            $entityManager->flush();
        }
    
        return $this->redirectToRoute('view_discussion', ['id' => $message->getDiscussion()->getId()]);
    }





    #[Route('/rechercher-discussion', name: 'rechercher_discussion', methods: ['GET'])]
    public function rechercherDiscussion(Request $request, DiscussionRepository $discussionRepository)
    {
        $query = $request->query->get('query');

        if (!$query) {
            return new JsonResponse([]);
        }

        // Recherche dans les discussions
        $discussions = $discussionRepository->createQueryBuilder('d')
        ->leftJoin('d.sender', 'sender')
        ->leftJoin('d.receiver', 'receiver')
        ->where('LOWER(sender.nom) LIKE LOWER(:query) OR LOWER(sender.prenom) LIKE LOWER(:query)')
        ->orWhere('LOWER(receiver.nom) LIKE LOWER(:query) OR LOWER(receiver.prenom) LIKE LOWER(:query)')
        ->setParameter('query', '%' . $query . '%')
        ->getQuery()
        ->getResult();

        $result = [];

        foreach ($discussions as $discussion) {
            // S'assurer que les informations nécessaires sont envoyées
            $result[] = [
                'id' => $discussion->getId(),
                'sender' => [
                    'id' => $discussion->getSender()->getId(),
                    'nom' => $discussion->getSender()->getNom(),
                    'prenom' => $discussion->getSender()->getPrenom(),
                    'image' => $discussion->getSender()->getImage() // Assurez-vous d'envoyer l'image aussi
                ],
                'receiver' => [
                    'id' => $discussion->getReceiver()->getId(),
                    'nom' => $discussion->getReceiver()->getNom(),
                    'prenom' => $discussion->getReceiver()->getPrenom(),
                    'image' => $discussion->getReceiver()->getImage()
                ]
            ];
        }
    

        return new JsonResponse($result);
    }
}
    


