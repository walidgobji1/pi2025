<?php

namespace App\Controller;

use App\Entity\Avis;
use App\Entity\Formation;
use App\Entity\Apprenant;


use App\Form\AvisType;
use App\Repository\AvisRepository;
use Doctrine\ORM\EntityManager;


use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/avis')]
final class AvisController extends AbstractController
{
    #[Route(name: 'app_avis_index', methods: ['GET'])]
    public function index(AvisRepository $avisRepository, EntityManagerInterface $entityManager): Response
    {
        $avis = $entityManager->getRepository(Avis::class)->findAll();

        // Get formationId and userId dynamically, this is temporary for now
        $formationId = 1; // This will be dynamic later
        $userId = 1; // Get the user ID from authentication

        return $this->render('avis/index.html.twig', [
            'avis' => $avis,
            'formationId' => $formationId, // Temporary for now
            'userId' => $userId,           // Get dynamic user ID from the authentication system
        ]);
    }

    #[Route('/add/{formationId}/{userId}', name: 'app_avis_add', methods: ['GET', 'POST'])]
    public function addAvis(int $formationId, int $userId, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Fetch the user and formation from the database
        $userById = $entityManager->getRepository(Apprenant::class)->find($userId);
        $formation = $entityManager->getRepository(Formation::class)->find($formationId);
    
        if (!$userById || !$formation) {
            // If the formation or user doesn't exist, return an error page or redirect
            return $this->render('error.html.twig', [
                'message' => 'Utilisateur ou formation non trouvé !'
            ]);
        }
    
        // Create the Avis entity and set it up
        $avi = new Avis();
        $avi->setApprenant($userById);
        $avi->setFormation($formation);
    
        // Create and handle the form
        $form = $this->createForm(AvisType::class, $avi);
        $form->handleRequest($request);
    
        // If the form is submitted and valid
        if ($form->isSubmitted() && $form->isValid()) {
            try {
                // Persist the new review
                $entityManager->persist($avi);
                $entityManager->flush();
    
                // Fetch the updated list of reviews
                $avis = $entityManager->getRepository(Avis::class)->findBy(['formation' => $formation]);
    
                // Check if the request is AJAX
                if ($request->isXmlHttpRequest()) {
                    // Return the updated reviews list as HTML in the response
                    $html = $this->renderView('avis/_avis_list.html.twig', [
                        'avis' => $avis,
                        'formationId' => $formationId,
                        'userId' => $userId
                    ]);
    
                    return $this->json([
                        'status' => 'success',
                        'message' => 'Avis ajouté avec succès!',
                        'html' => $html
                    ]);
                }
    
                // Return the full page render if it's not an AJAX request
                return $this->render('avis/index.html.twig', [
                    'avis' => $avis,
                    'formationId' => $formationId,
                    'userId' => $userId
                ]);
    
            } catch (\Exception $e) {
                return $this->json([
                    'status' => 'error',
                    'message' => 'Une erreur est survenue lors de l\'ajout de l\'avis.'
                ]);
            }
        }
    
        // On GET request, render the form page
        return $this->render('avis/new.html.twig', [
            'form' => $form->createView(),
            'formationId' => $formationId,
            'userId' => $userId,
        ]);
    }
    

    


    #[Route('/{id}/edit', name: 'app_avis_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Avis $avi, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AvisType::class, $avi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_avis_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('avis/edit.html.twig', [
            'avi' => $avi,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_avis_delete', methods: ['POST'])]
    public function delete(Request $request, Avis $avi, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $avi->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($avi);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_avis_index', [], Response::HTTP_SEE_OTHER);
    }
}
