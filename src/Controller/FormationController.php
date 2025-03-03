<?php

namespace App\Controller;

use App\Entity\Formation;
use App\Form\FormationType;
use App\Repository\FormationRepository;
use App\Repository\ProgressionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\InscriptionCoursRepository;
use App\Service\FormationScoreService;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/formation')]
final class FormationController extends AbstractController
{
    private $formationScoreService;

    public function __construct(FormationScoreService $formationScoreService)
    {
        $this->formationScoreService = $formationScoreService;
    }

    #[Route(name: 'app_formation_index', methods: ['GET'])]
    public function index(PaginatorInterface $paginator, Request $request, FormationRepository $formationRepository): Response
    {
        $searchQuery = $request->query->get('search', ''); // Get search query

        // Create the query for search & pagination
        $queryBuilder = $formationRepository->createQueryBuilder('f');

        if ($searchQuery) {
            $queryBuilder->where('f.titre LIKE :search OR f.description LIKE :search')
                         ->setParameter('search', "%$searchQuery%");
        }

        // Paginate results
        $formations = $paginator->paginate(
            $queryBuilder->getQuery(),
            $request->query->getInt('page', 1), // Get page number
            3 // Number of items per page
        );

        return $this->render('formation/index.html.twig', [
            'formations' => $formations,
            'searchQuery' => $searchQuery,
        ]);
    }

    #[Route('/new', name: 'app_formation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        $formation = new Formation();
        $form = $this->createForm(FormationType::class, $formation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($formation);
            $entityManager->flush();

            // Send Email Notification
            $emailMessage = (new Email())
                ->from('gobjiwalid1@gmail.com')
                ->to('ahmedallaya@gmail.com')
                ->subject('Nouvelle formation ajoutée')
                ->html("<p>Une nouvelle formation a été ajoutée sur notre plateforme. Connectez-vous pour la découvrir !</p>");

            $mailer->send($emailMessage);

            return $this->redirectToRoute('app_formation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('formation/new.html.twig', [
            'formation' => $formation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_formation_show', methods: ['GET'])]
    public function showForClient(Formation $formation, InscriptionCoursRepository $inscriptionCoursRepository, ProgressionRepository $progressionRepository): Response
    {
        $user = $this->getUser();
        $inscription = $user ? $inscriptionCoursRepository->findByFormationAndUser($formation, $user) : null;
        $progression = $user ? $progressionRepository->findOneBy(['apprenant' => $user, 'formation' => $formation]) : null;

        $totalLecons = count($formation->getLecons());
        $completedLeconsCount = $progression ? count($progression->getLeconsTerminees()) : 0;

        return $this->render('formation/showClient.html.twig', [
            'formation' => $formation,
            'inscription' => $inscription,
            'progression' => $completedLeconsCount,
            'total_lecons' => $totalLecons
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
            $entityManager->remove($formation);
            $entityManager->flush();

            $this->addFlash('success', 'La formation a été supprimée avec succès.');
        }

        return $this->redirectToRoute('app_formation_index', [], Response::HTTP_SEE_OTHER);
    }
}
