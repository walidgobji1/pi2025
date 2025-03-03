<?php

namespace App\Controller;

use App\Entity\Promotion;
use App\Entity\Apprenant;
use App\Entity\InscriptionCours;
use App\Form\PromotionType;
use App\Repository\PromotionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;


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

    // Récupérer les apprenants ayant au moins deux inscriptions payées
    $eligibleApprenants = $entityManager->getRepository(Apprenant::class)
        ->createQueryBuilder('a')
        ->join('App\Entity\InscriptionCours', 'i', 'WITH', 'i.apprenant = a.id')
        ->andWhere('i.status = :status')
        ->setParameter('status', 'payé')
        ->groupBy('a.id')
        ->having('COUNT(i.id) >= 2') // ✅ Correction : Prend aussi ceux qui ont 3+ inscriptions payées
        ->getQuery()
        ->getResult();

    if ($form->isSubmitted() && $form->isValid()) {
        $apprenant = $form->get('apprenant')->getData(); // ✅ Récupérer l'apprenant depuis le formulaire

        if ($apprenant) {
            // Récupérer la dernière inscription payée de l'apprenant
            $inscription = $entityManager->getRepository(InscriptionCours::class)
                ->createQueryBuilder('i')
                ->where('i.apprenant = :apprenant')
                ->andWhere('i.status = :status')
                ->setParameter('apprenant', $apprenant)
                ->setParameter('status', 'payé')
                ->orderBy('i.id', 'DESC')
                ->setMaxResults(1)
                ->getQuery()
                ->getOneOrNullResult();

            // Associer l'inscription à la promotion
            if ($inscription) {
                $promotion->setInscriptionCours($inscription);
            }

            $promotion->setApprenant($apprenant); // ✅ Lier l'apprenant à la promotion

            $entityManager->persist($promotion);
            $entityManager->flush();

            $this->addFlash('success', 'Code promo ajouté avec succès.');
            return $this->redirectToRoute('admin_promotion_index');
        } else {
            $this->addFlash('error', 'Veuillez sélectionner un apprenant éligible.');
        }
    }

    return $this->render('promotion/create.html.twig', [
        'form' => $form->createView(),
        'eligibleApprenants' => $eligibleApprenants,
    ]);
}


    // Modifier un code promo (UPDATE)
    #[Route('/{id}/edit', name: 'admin_promotion_edit', methods: ['GET', 'POST'])]
    public function edit(Promotion $promotion, Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PromotionType::class, $promotion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Vérifier si une inscription correspondante existe
            if ($promotion->getApprenant()) {
                $inscription = $entityManager->getRepository(InscriptionCours::class)
                    ->findOneBy(['apprenant' => $promotion->getApprenant()], ['id' => 'DESC']);

                if ($inscription) {
                    $promotion->setInscriptionCours($inscription);
                }
            }

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
