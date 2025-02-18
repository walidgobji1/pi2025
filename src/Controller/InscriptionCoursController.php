<?php

namespace App\Controller;

use App\Entity\InscriptionCours;
use App\Entity\Formation; 
use App\Form\InscriptionCoursType;
use App\Repository\InscriptionCoursRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

 #[Route('/dashboard/inscription/cours')]
 final class InscriptionCoursController extends AbstractController
{
    #[Route(name: 'app_inscription_cours_index', methods: ['GET'])]
    public function index(InscriptionCoursRepository $inscriptionCoursRepository): Response
    {
        return $this->render('inscription_cours/index.html.twig', [
            'inscription_cours' => $inscriptionCoursRepository->findAll(),
        ]);
    }

   // InscriptionCoursController.php

   #[Route('/new/{id}', name: 'app_inscription_cours_new', methods: ['GET', 'POST'])]
   public function new($id, Request $request, EntityManagerInterface $entityManager): Response
   {
       // Récupérer la formation
       $formation = $entityManager->getRepository(Formation::class)->find($id);
   
       if (!$formation) {
           $this->addFlash('error', 'Formation non trouvée');
           return $this->redirectToRoute('app_formation_index');
       }
   
       // Créer une nouvelle inscription
       $inscriptionCour = new InscriptionCours();
       $form = $this->createForm(InscriptionCoursType::class, $inscriptionCour, [
           'formation' => $formation,
       ]);
   
       // Assigner la formation à l'inscription
       $inscriptionCour->setFormation($formation);
       $inscriptionCour->setNomFormation($formation->getTitre());
       $inscriptionCour->setStatus('en attente'); // Assigner 'en attente'
       $inscriptionCour->setMontant(0.0);
   
       // Traitement du formulaire
       $form->handleRequest($request);
   
       if ($form->isSubmitted() && $form->isValid()) {
           // Enregistrer l'inscription
           $entityManager->persist($inscriptionCour);
           $entityManager->flush();
   
           // Rediriger vers la page de paiement avec l'ID de l'inscription
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
        if ($this->isCsrfTokenValid('delete'.$inscriptionCour->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($inscriptionCour);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_inscription_cours_index', [], Response::HTTP_SEE_OTHER);
    }
}
