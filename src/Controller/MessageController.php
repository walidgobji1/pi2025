<?php

namespace App\Controller;

use App\Entity\Message;
use App\Entity\Discussion;
use App\Entity\Utilisateur;
use App\Repository\DiscussionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MessageController extends AbstractController
{
    // Afficher la liste des discussions avec les participants
    #[Route('/discussions', name: 'app_message')]
    public function listDiscussions(EntityManagerInterface $entityManager): Response
    {
        $discussions = $entityManager->getRepository(Discussion::class)->findAll();
    
        return $this->render('message/conversation.html.twig', [
            'discussions' => $discussions, 
            'discussion' => null,          
            'messages' => []               
        ]);
    }

    //  Afficher une discussion et ses messages
    #[Route('/discussion/{id}', name: 'view_discussion', requirements: ['id' => '\d+'])]
public function viewDiscussion(EntityManagerInterface $entityManager, int $id): Response
{
    $discussion = $entityManager->getRepository(Discussion::class)->find($id);

    $messages = $entityManager->getRepository(Message::class)->findBy(
        ['discussion' => $discussion],
        ['createdAt' => 'ASC']
    );

    $discussions = $entityManager->getRepository(Discussion::class)->findAll();

    return $this->render('message/conversation.html.twig', [
        'discussion' => $discussion, 
        'messages' => $messages,     
        'discussions' => $discussions 
    ]);
}

    //  Envoyer un message dans une discussion
    #[Route('/message/send', name: 'send_message', methods: ['POST'])]
    public function sendMessage(Request $request, EntityManagerInterface $entityManager): Response
    {
        $discussionId = (int) $request->request->get('discussion_id');
        $senderId = (int) $request->request->get('sender_id');
        $receiverId = (int) $request->request->get('receiver_id');

        $content = $request->request->get('content');

        $discussion = $entityManager->getRepository(Discussion::class)->find($discussionId);
        $sender = $entityManager->getRepository(Utilisateur::class)->find($senderId);
        $receiver = $entityManager->getRepository(Utilisateur::class)->find($receiverId);


        if (!$discussion || !$sender) {
            return new Response("Discussion ou expéditeur introuvable", 400);
        }

        $message = new Message();
        $message->setSender($sender);
        $message->setReceiver($receiver);

        $message->setDiscussion($discussion);
        $message->setContent($content);

        $entityManager->persist($message);
        $entityManager->flush();

        return $this->redirectToRoute('view_discussion', ['id' => $discussionId]);
    }
    #[Route('/discussion/new', name: 'create_discussion')]
    public function createDiscussion(EntityManagerInterface $entityManager): Response
    {
        $discussion = new Discussion();
        $entityManager->persist($discussion);
        $entityManager->flush();
    
        return $this->redirectToRoute('view_discussion', ['id' => $discussion->getId()]);
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

   
    $entityManager->remove($discussion);
    $entityManager->flush();

    $this->addFlash('success', 'Discussion supprimée avec succès.');
    return $this->redirectToRoute('app_messages'); 
}
}