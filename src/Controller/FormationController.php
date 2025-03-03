<?php

namespace App\Controller;

use App\Entity\Formation;

use App\Entity\User;
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

    #[Route('/formations', name: 'app_formations')]
    public function indextemp(FormationRepository $formationRepository): Response
    {
        $formations = $formationRepository->findAll();
        $formationScores = $this->formationScoreService->getAllScores();

        return $this->render('/formation/formations.html.twig', [
            'formations' => $formations,
            'formationScores' => $formationScores,
        ]);
    }

    #[Route(name: 'app_formation_index', methods: ['GET'])]
    public function index(PaginatorInterface $paginator, Request $request, FormationRepository $formationRepository): Response
    {
        $pagination = $paginator->paginate(
            $formationRepository->findAll(),
            $request->query->getInt('page', 1), // Get the page number from the request
            3 // Number of items per page
        );
        // Get the search query from the request (if any)
        $searchQuery = $request->query->get('search', ''); // Default to empty if not set

        // Fetch formations, and if there's a search query, filter the formations
        if ($searchQuery) {
            $formations = $formationRepository->findBySearchQuery($searchQuery);  // Ensure this method exists in your repository
        } else {
            $formations = $formationRepository->findAll();
        }

        return $this->render('formation/index.html.twig', [
            'formations' => $pagination,
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
            
            // ✅ Envoyer l'email à l'utilisateur
            $emailMessage = (new Email())
                ->from('gobjiwalid1@gmail.com') // Expéditeur générique
                ->to('ahmedallaya@gmail.com') // Email du user connecté
                ->subject('Nouvelle formation ajoutée')
                ->text("Bonjour, une nouvelle formation vient d'être ajoutée sur la plateforme.")
                ->html("<p>Une nouvelle formation a été ajoutée sur notre plateforme. Connectez-vous pour la découvrir !</p>");
    
            $mailer->send($emailMessage);
    
            // ✅ Ajouter un message flash
          
    
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

    // Get the inscription of the user to the formation (using the custom repository method)
    $inscription = $user ? $inscriptionCoursRepository->findByFormationAndUser($formation, $user) : null;

    // Get the user's progression for the formation
    $progression = null;
    if ($user) {
        $progression = $progressionRepository->findOneBy([
            'apprenant' => $user,
            'formation' => $formation
        ]);
    }

    // Get total number of lessons in the formation
    $totalLecons = count($formation->getLecons());

    // Get the number of completed lessons (if progression exists)
    $completedLeconsCount = $progression ? count($progression->getLeconsTerminees()) : 0;

    return $this->render('formation/showClient.html.twig', [
        'formation' => $formation,
        'inscription' => $inscription,
        'progression' => $completedLeconsCount, // Number of lessons completed
        'total_lecons' => $totalLecons // Total number of lessons
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
