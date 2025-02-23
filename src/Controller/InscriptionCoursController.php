<?php

namespace App\Controller;

use App\Entity\InscriptionCours;
use App\Entity\Formation;
use App\Entity\Apprenant;

use App\Form\InscriptionCoursType;
use App\Repository\InscriptionCoursRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/inscription')]
   final class InscriptionCoursController extends AbstractController
    {
    #[Route('/',name: 'app_inscription_cours_index', methods: ['GET'])]
    public function index(InscriptionCoursRepository $inscriptionCoursRepository, EntityManagerInterface $entityManager): Response
 {
    $inscriptions = $inscriptionCoursRepository->findAll();

    // Vérifier et mettre à jour le statut en fonction du montant
    foreach ($inscriptions as $inscription) {
        if ($inscription->getMontant() > 0) {
            $inscription->setStatus('Payé');
        } else {
            $inscription->setStatus('En attente');
        }
        $entityManager->persist($inscription); // Met à jour l'objet en mémoire
    }
    $entityManager->flush(); // Sauvegarde les modifications dans la BDD

    return $this->render('inscription_cours/index.html.twig', [
        'inscription_cours' => $inscriptions,
    ]);
}


    // InscriptionCoursController.php
    #[Route('/new/{id}', name: 'app_inscription_cours_new', methods: ['GET', 'POST'])]
    public function new($id, Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        if (!$user) {
            throw $this->createAccessDeniedException("Vous devez être connecté pour vous inscrire.");
        }
    
        if (!in_array('ROLE_APPRENANT', $user->getRoles())) {
            throw $this->createAccessDeniedException("Seuls les apprenants peuvent s'inscrire.");
        }
    
        $formation = $entityManager->getRepository(Formation::class)->find($id);
        if (!$formation) {
            $this->addFlash('error', 'Formation non trouvée');
            return $this->redirectToRoute('app_formation_index');
        }
    
        $inscriptionCour = new InscriptionCours();
        $inscriptionCour->setFormation($formation);
        $inscriptionCour->setNomFormation($formation->getTitre());
        $inscriptionCour->setStatus('en attente');
        $inscriptionCour->setMontant(0.0);
        $inscriptionCour->setApprenant($user); // ✅ L'utilisateur connecté est enregistré automatiquement
    
        $form = $this->createForm(InscriptionCoursType::class, $inscriptionCour);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($inscriptionCour);
            $entityManager->flush();
    
            return $this->redirectToRoute('payment_page', ['id' => $inscriptionCour->getId()]);
        }
    
        return $this->render('inscription_cours/new.html.twig', [
            'form' => $form->createView(),
            'formation' => $formation,
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
        if ($this->isCsrfTokenValid('delete' . $inscriptionCour->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($inscriptionCour);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_inscription_cours_index', [], Response::HTTP_SEE_OTHER);
    }
}
