<?php

namespace App\Controller;

use App\Entity\InscriptionCours;
use App\Form\InscriptionCoursType;
use App\Repository\InscriptionCoursRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/inscription/cours')]
final class InscriptionCoursController extends AbstractController
{
    #[Route(name: 'app_inscription_cours_index', methods: ['GET'])]
    public function index(InscriptionCoursRepository $inscriptionCoursRepository): Response
    {
        return $this->render('inscription_cours/index.html.twig', [
            'inscription_cours' => $inscriptionCoursRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_inscription_cours_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $inscriptionCour = new InscriptionCours();
        $form = $this->createForm(InscriptionCoursType::class, $inscriptionCour);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($inscriptionCour);
            $entityManager->flush();

            return $this->redirectToRoute('app_inscription_cours_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('inscription_cours/new.html.twig', [
            'inscription_cour' => $inscriptionCour,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_inscription_cours_show', methods: ['GET'])]
    public function show(InscriptionCours $inscriptionCour): Response
    {
        return $this->render('inscription_cours/show.html.twig', [
            'inscription_cour' => $inscriptionCour,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_inscription_cours_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, InscriptionCours $inscriptionCour, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(InscriptionCoursType::class, $inscriptionCour);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_inscription_cours_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('inscription_cours/edit.html.twig', [
            'inscription_cour' => $inscriptionCour,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_inscription_cours_delete', methods: ['POST'])]
    public function delete(Request $request, InscriptionCours $inscriptionCour, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$inscriptionCour->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($inscriptionCour);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_inscription_cours_index', [], Response::HTTP_SEE_OTHER);
    }
}
