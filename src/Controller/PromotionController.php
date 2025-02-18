<?php

namespace App\Controller;

use App\Entity\Promotion;
use App\Form\PromotionType;
use App\Repository\PromotionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/dashboard/promotion')]
final class PromotionController extends AbstractController
{
    // Afficher la liste des promotions (READ)
    #[Route('/', name: 'admin_promotion_index', methods: ['GET'])]
    public function index(PromotionRepository $promotionRepository): Response
    {
        return $this->render('promotion/index.html.twig', [
            'promotions' => $promotionRepository->findAll(),
        ]);
    }

    // Créer une nouvelle promotion (CREATE)
    #[Route('/create', name: 'admin_promotion_create', methods: ['GET', 'POST'])]
    public function create(Request $request, EntityManagerInterface $entityManager): Response
    {
        $promotion = new Promotion();
        $form = $this->createForm(PromotionType::class, $promotion);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($promotion);
            $entityManager->flush();

            $this->addFlash('success', 'Code promo ajouté avec succès.');
            return $this->redirectToRoute('admin_promotion_index');
        }

        return $this->render('promotion/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    // Modifier un code promo (UPDATE)
    #[Route('/{id}/edit', name: 'admin_promotion_edit', methods: ['GET', 'POST'])]
    public function edit(Promotion $promotion, Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PromotionType::class, $promotion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Code promo mis à jour.');
            return $this->redirectToRoute('admin_promotion_index');
        }

        return $this->render('promotion/edit.html.twig', [
            'form' => $form->createView(),
            'promotion' => $promotion,
        ]);
    }

    // Supprimer un code promo (DELETE)
    #[Route('/{id}/delete', name: 'admin_promotion_delete', methods: ['POST'])]
    public function delete(Request $request, Promotion $promotion, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $promotion->getId(), $request->request->get('_token'))) {
            $entityManager->remove($promotion);
            $entityManager->flush();
            $this->addFlash('success', 'Code promo supprimé.');
        }

        return $this->redirectToRoute('admin_promotion_index');
    }
}
