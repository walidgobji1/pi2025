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
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;

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
        $lessons = $leconRepository->findBy(['formation' => $formation]);

        return $this->render('lecon/lecons.html.twig', [
            'formation' => $formation,
            'lessons' => $lessons,
        ]);
    }

    #[Route('/formation/c/{id}/lessons', name: 'app_formation_lessons_c', methods: ['GET'])]
    public function showLessonsC(Formation $formation, LeconRepository $leconRepository): Response
    {
        $lessons = $leconRepository->findBy(['formation' => $formation]);

        return $this->render('lecon/showClient.html.twig', [
            'formation' => $formation,
            'lessons' => $lessons,
        ]);
    }

    #[Route('/new/{id}', name: 'app_lecon_new', methods: ['GET', 'POST'])]
    public function new(Request $request, Formation $formation, EntityManagerInterface $entityManager): Response
    {
        $lecon = new Lecon();
        $lecon->setFormation($formation);

        $form = $this->createForm(LeconType::class, $lecon);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $pdfFile */
            $pdfFile = $form->get('pdfFile')->getData();

            if ($pdfFile) {
                $lecon->setPdfFile($pdfFile);
                $lecon->setUpdatedAt(new \DateTime()); // Update the updatedAt timestamp
            }

            $entityManager->persist($lecon);
            $entityManager->flush();

            return $this->redirectToRoute('app_formation_lessons', ['id' => $formation->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->render('lecon/new.html.twig', [
            'lecon' => $lecon,
            'form' => $form->createView(),
            'formation' => $formation,
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
            /** @var UploadedFile $pdfFile */
            $pdfFile = $form->get('pdfFile')->getData();

            if ($pdfFile) {
                $lecon->setPdfFile($pdfFile);
                $lecon->setUpdatedAt(new \DateTime()); // Update the updatedAt timestamp
            }

            $entityManager->flush();

            return $this->redirectToRoute('app_formation_lessons', ['id' => $lecon->getFormation()->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->render('lecon/edit.html.twig', [
            'lecon' => $lecon,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_lecon_delete', methods: ['POST'])]
    public function delete(Request $request, Lecon $lecon, EntityManagerInterface $entityManager): Response
    {
        $formationId = $lecon->getFormation()->getId();

        if ($this->isCsrfTokenValid('delete' . $lecon->getId(), $request->get('token'))) {
            $entityManager->remove($lecon);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_formation_lessons', ['id' => $formationId], Response::HTTP_SEE_OTHER);
    }
}
