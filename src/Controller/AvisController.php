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
#[Route('/{formationId<\d+>?1}', name: 'app_avis_index', methods: ['GET'])]
public function index(int $formationId = 1, AvisRepository $avisRepository, EntityManagerInterface $entityManager): Response
{
    $userId = 2;

    $avis = $entityManager->getRepository(Avis::class)->findBy(
        ['formation' => $formationId], 
        ['id' => 'DESC']
    );

    return $this->render('avis/index.html.twig', [
        'avis' => $avis,
        'formationId' => $formationId,
        'userId' => $userId,
    ]);
}

    #[Route('/add/{formationId}/{userId}', name: 'app_avis_add', methods: ['GET', 'POST'])]
    public function addAvis(int $formationId, int $userId, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Fetch the user and formation from the database
        $userById = $entityManager->getRepository(Apprenant::class)->find($userId);
        $formation = $entityManager->getRepository(Formation::class)->find($formationId);

        if (!$userById || !$formation) {
            $this->addFlash('error', 'Utilisateur ou formation non trouvé !');
            return $this->redirectToRoute('homepage'); // Redirect to homepage or another relevant page
        }

        // Create the Avis entity
        $avi = new Avis();
        $avi->setApprenant($userById);
        $avi->setFormation($formation);

        // Create and handle the form
        $form = $this->createForm(AvisType::class, $avi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                // Persist the new review
                $entityManager->persist($avi);
                $entityManager->flush();

                // Add success flash message
                $this->addFlash('success', 'Votre avis a été ajouté avec succès.');

                // Redirect to the list of reviews
                return $this->redirectToRoute('app_avis_index', ['formationId' => $formationId]);
            } catch (\Exception $e) {
                $this->addFlash('error', 'Une erreur est survenue lors de l\'ajout de l\'avis.');
            }
        }

        // Render the form page
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
    // CSRF validation
    if ($this->isCsrfTokenValid('delete' . $avi->getId(), $request->request->get('_token'))) {
        // Delete the Avis entity
        $entityManager->remove($avi);
        $entityManager->flush();
    }

    return $this->redirectToRoute('app_avis_index', [], Response::HTTP_SEE_OTHER);
}

}
