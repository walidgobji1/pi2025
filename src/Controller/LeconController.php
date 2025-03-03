<?php

namespace App\Controller;

use App\Entity\Lecon;
use App\Entity\Formation;
use App\Form\LeconType;
use App\Repository\LeconRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use App\Service\PdfService;



#[Route('/lecon')]
final class LeconController extends AbstractController
{
    #[Route(name: 'app_lecon_index', methods: ['GET'])]
    public function index(LeconRepository $leconRepository): Response
    {
        return $this->render('lecon/index.html.twig', [
            'lecons' => $leconRepository->findAll(),
        ]);
    }
    #[Route('/formation/{id}/lessons', name: 'app_formation_lessons', methods: ['GET'])]
public function showLessons(Formation $formation, LeconRepository $leconRepository): Response
{
    // Get the lessons related to the formation
    $lessons = $leconRepository->findBy(['formation' => $formation]);

    return $this->render('lecon/lecons.html.twig', [
        'formation' => $formation,
        'lessons' => $lessons,
    ]);
}
#[Route('/formation/c/{id}/lessons', name: 'app_formation_lessons_c', methods: ['GET'])]
public function showLessonsC(Formation $formation, LeconRepository $leconRepository): Response
{
    // Get the lessons related to the formation
    $lessons = $leconRepository->findBy(['formation' => $formation]);

    return $this->render('lecon/showClient.html.twig', [
        'formation' => $formation,
        'lessons' => $lessons,
    ]);
}


    // 🆕 Ajouter une leçon à une formation spécifique
    #[Route('/new/{id}', name: 'app_lecon_new', methods: ['GET', 'POST'])]
    public function new(Request $request, Formation $formation, EntityManagerInterface $entityManager): Response
    {
        $lecon = new Lecon();
        $lecon->setFormation($formation); // Lier la leçon à la formation

        $form = $this->createForm(LeconType::class, $lecon);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($lecon);
            $entityManager->flush();

            return $this->redirectToRoute('app_formation_lessons', ['id' => $formation->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->render('lecon/new.html.twig', [
            'lecon' => $lecon,
            'form' => $form,
            'formation' => $formation, // Passer la formation pour l'afficher si besoin
        ]);
    }

    #[Route('/{id}', name: 'app_lecon_show', methods: ['GET'])]
    public function show(Lecon $lecon): Response
    {
        return $this->render('lecon/show.html.twig', [
            'lecon' => $lecon,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_lecon_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Lecon $lecon, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(LeconType::class, $lecon);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_formation_lessons', ['id' => $lecon->getFormation()->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->render('lecon/edit.html.twig', [
            'lecon' => $lecon,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_lecon_delete', methods: ['POST'])]
    public function delete(Request $request, Lecon $lecon, EntityManagerInterface $entityManager): Response
    {
        $formationId = $lecon->getFormation()->getId();

        if ($this->isCsrfTokenValid('delete' . $lecon->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($lecon);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_formation_lessons', ['id' => $formationId], Response::HTTP_SEE_OTHER);
    }
    #[Route('/pdf/{id}', name: 'lecon.pdf', methods: ['GET'])]
    public function generatePdfPersonne(Lecon $lecon, PdfService $pdfService): Response 
    {
        $html = $this->renderView('lecon/showPdf.html.twig', ['lecon' => $lecon]);
        
        return $pdfService->showPdfFile($html);
    }
    
    
}
