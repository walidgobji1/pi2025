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
    public function sendMessage(Request $request, EntityManagerInterface $entityManager, ValidatorInterface $validator, Security $security): Response
    {
        // Récupérer l'ID de la discussion depuis le formulaire
        $discussionId = (int) $request->request->get('discussion_id');
        
        // Récupérer le contenu du message
        $content = trim($request->request->get('content'));

        // Récupérer la discussion depuis la base de données
        $discussion = $entityManager->getRepository(Discussion::class)->find($discussionId);

        // Vérifier si la discussion existe
        if (!$discussion) {
            return new Response("Discussion introuvable.", 400);
        }

        // Récupérer l'utilisateur connecté
        $sender = $security->getUser(); // Utilisateur connecté (vérifie qu'il est authentifié)

        // Vérifier que l'utilisateur est authentifié et est une instance de User
        if (!$sender instanceof User) {
            return new Response("Utilisateur non authentifié.", 401);
        }

        // Le destinataire est celui qui est dans la discussion (c'est l'autre utilisateur)
        $receiver = ($discussion->getSender()->getId() === $sender->getId()) ? $discussion->getReceiver() : $discussion->getSender();

        // Créer un nouveau message
        $message = new Message();
        $message->setContent($content);
        $message->setDiscussion($discussion);
        $message->setSender($sender);
        $message->setReceiver($receiver);

        // Validation de l'entité
        $errors = $validator->validate($message);
        if (count($errors) > 0) {
            foreach ($errors as $error) {
                $this->addFlash('error', $error->getMessage());
            }
            return $this->redirectToRoute('view_discussion', ['id' => $discussionId]);
        }

        // Sauvegarder le message
        $entityManager->persist($message);
        $entityManager->flush();

        // Rediriger vers la page de la discussion
        return $this->redirectToRoute('view_discussion', ['id' => $discussionId]);
    }

   #[Route('/discussion/new', name: 'create_discussion', methods: ['GET', 'POST'])]
public function createDiscussion(Request $request, EntityManagerInterface $entityManager, ValidatorInterface $validator, Security $security): Response
{
    // Variable pour les erreurs
    $errors = [];

    // Récupérer l'utilisateur connecté
    $sender = $security->getUser(); // Utilisateur connecté

    // Vérifier si l'utilisateur est connecté
    if (!$sender || !$sender instanceof User) {
        $errors[] = 'Vous devez être connecté pour créer une discussion.';
    }

    // Obtenir tous les utilisateurs
    $utilisateurs = $entityManager->getRepository(User::class)->findAll();

    // Filtrer les utilisateurs qui ont déjà une discussion avec l'utilisateur connecté
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

    // Filtrer la liste des utilisateurs pour exclure l'utilisateur connecté et ceux déjà dans une discussion
    $utilisateurs = array_filter($utilisateurs, function ($utilisateur) use ($sender, $excludeUsers) {
        return $utilisateur instanceof User && $utilisateur->getId() != $sender->getId() && !in_array($utilisateur->getId(), $excludeUsers);
    });

    if ($request->isMethod('POST')) {
        $receiverId = $request->request->get('receiver_id');

        // Valider si le champ 'receiver_id' est vide
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
}
