<?php

namespace App\Controller;

use App\Entity\Promotion;
use App\Entity\Apprenant;
use function Symfony\Component\VarDumper\dump;
use Symfony\Component\Mime\Address;
use App\Entity\InscriptionCours;
use App\Form\PromotionType;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
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
    public function create(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        $promotion = new Promotion();

        // ✅ Récupérer les apprenants ayant au moins 2 inscriptions payées
        $eligibleApprenants = $entityManager->getRepository(Apprenant::class)
            ->createQueryBuilder('a')
            ->join('App\Entity\InscriptionCours', 'i', 'WITH', 'i.apprenant = a.id')
            ->andWhere('i.status = :status')
            ->setParameter('status', 'payé')
            ->groupBy('a.id')
            ->having('COUNT(i.id) >= 2')
            ->getQuery()
            ->getResult();

        // ✅ Créer le formulaire
        $form = $this->createForm(PromotionType::class, $promotion, [
            'eligible_apprenants' => $eligibleApprenants,
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $apprenant = $form->get('apprenant')->getData();

            if ($apprenant) {
                // ✅ Récupérer la dernière inscription payée
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

                if ($inscription) {
                    $promotion->setInscriptionCours($inscription);
                }

                $promotion->setApprenant($apprenant);
                $entityManager->persist($promotion);
                $entityManager->flush();

                // ✅ Envoi de l'email via Mailtrap
                $email = (new Email())
                    ->from(new Address('admin@exemple.com', 'Admin Formation'))
                    ->to($apprenant->getEmail()) 
                    ->subject('🎉 Votre Code Promo pour une Nouvelle Formation !')
                    ->html($this->renderView('emails/promotion.html.twig', [
                        'apprenant' => $apprenant,
                        'promotion' => $promotion
                    ]));

                try {
                    $mailer->send($email);
                    $this->addFlash('success', 'Code promo ajouté et email envoyé avec succès.');
                } catch (\Exception $e) {
                    $this->addFlash('error', 'L\'email n\'a pas pu être envoyé.');
                }

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
    public function edit(Request $request, Promotion $promotion, EntityManagerInterface $entityManager): Response
    {
        // ✅ Récupérer les apprenants ayant exactement deux inscriptions payées
        $eligibleApprenants = $entityManager->getRepository(Apprenant::class)
            ->createQueryBuilder('a')
            ->join('App\Entity\InscriptionCours', 'i', 'WITH', 'i.apprenant = a.id')
            ->andWhere('i.status = :status')
            ->setParameter('status', 'payé')
            ->groupBy('a.id')
            ->having('COUNT(i.id) >= 2') // ✅ On prend uniquement ceux avec exactement 2 inscriptions payées
            ->getQuery()
            ->getResult();
    
        // ✅ Passer les apprenants éligibles au formulaire
        $form = $this->createForm(PromotionType::class, $promotion, [
            'eligible_apprenants' => $eligibleApprenants,
        ]);
    
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
    
            $this->addFlash('success', 'La promotion a été mise à jour avec succès.');
    
            return $this->redirectToRoute('admin_promotion_index');
        }
    
        return $this->render('promotion/edit.html.twig', [
            'form' => $form->createView(),
            'promotion' => $promotion,
            'eligibleApprenants' => $eligibleApprenants, // ✅ Ajout pour s'assurer que la liste est accessible dans le Twig
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

    #[Route('/search', name: 'admin_promotion_search', methods: ['GET'])]
    public function search(Request $request, PromotionRepository $promotionRepository): JsonResponse
    {
        $query = $request->query->get('q', '');

        $promotions = $promotionRepository->searchByApprenantName($query);

        $data = array_map(fn($promotion) => [
            'id' => $promotion->getId(),
            'apprenant' => $promotion->getApprenant()->getNom() . ' ' . $promotion->getApprenant()->getPrenom(),
            'codePromo' => $promotion->getCodePromo(),
            'description' => $promotion->getDescription(),
            'remise' => $promotion->getRemise(),
            'dateExpiration' => $promotion->getDateExpiration()?->format('d/m/Y'),
        ], $promotions);

        return $this->json($data);
    }


    #[Route('/test-mail', name: 'test_mail')]
public function testEmail(MailerInterface $mailer)
{
    $email = (new Email())
        ->from('admin@example.com')
        ->to('test@example.com')
        ->subject('Test MailHog')
        ->text('Ceci est un test avec MailHog.');

    try {
        $mailer->send($email);
        dump('✅ Email envoyé avec succès');
    } catch (\Exception $e) {
        dump('❌ Erreur : ' . $e->getMessage());
    }

    return $this->json(['message' => 'Email envoyé !']);
}
}




    
    

