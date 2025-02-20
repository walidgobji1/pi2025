<?php

namespace App\Controller;

use App\Entity\Formation;
use App\Form\FormationType;
use App\Repository\FormationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Service\FormationScoreService; // Import du service

#[Route('/formation')]
final class FormationController extends AbstractController
{
    private $formationScoreService;

    // Injection du service FormationScoreService dans le contrôleur
    public function __construct(FormationScoreService $formationScoreService)
    {
        $this->formationScoreService = $formationScoreService;
    }

    #[Route('/formations', name: 'app_formations')]
    public function indextemp(FormationRepository $formationRepository): Response
    {
        $formations = $formationRepository->findAll(); // Récupération des formations
        $formationScores = $this->formationScoreService->getAllScores(); // Récupération des scores

        return $this->render('/formation/formations.html.twig', [
            'formations' => $formations,
            'formationScores' => $formationScores,
        ]);
    }

    #[Route(name: 'app_formation_index', methods: ['GET'])]
    public function index(FormationRepository $formationRepository): Response
    {
        return $this->render('formation/index.html.twig', [
            'formations' => $formationRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_formation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $formation = new Formation();
        $form = $this->createForm(FormationType::class, $formation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($formation);
            $entityManager->flush();

            return $this->redirectToRoute('app_formation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('formation/new.html.twig', [
            'formation' => $formation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_formation_show', methods: ['GET'])]
    public function showForClient(Formation $formation): Response
    {
        return $this->render('formation/showClient.html.twig', [
            'formation' => $formation,
        ]);
    }

    #[Route('/ad/{id}', name: 'app_formation_show_admin', methods: ['GET'])]
    public function showAdmin(Formation $formation): Response
    {
        return $this->render('formation/show.html.twig', [
            'formation' => $formation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_formation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Formation $formation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(FormationType::class, $formation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_formation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('formation/edit.html.twig', [
            'formation' => $formation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_formation_delete', methods: ['POST'])]
    public function delete(Request $request, Formation $formation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $formation->getId(), $request->getPayload()->getString('_token'))) {
            $hasLessons = !$formation->getLecons()->isEmpty();

            $entityManager->remove($formation);
            $entityManager->flush();

            $this->addFlash('success', $hasLessons
                ? 'La formation et ses leçons associées ont été supprimées avec succès.'
                : 'La formation a été supprimée avec succès.');
        }

        return $this->redirectToRoute('app_formation_index', [], Response::HTTP_SEE_OTHER);
    }
}
