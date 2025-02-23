<?php

namespace App\Controller;

use Stripe\Stripe;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PromotionRepository;
use App\Repository\InscriptionCoursRepository;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Doctrine\ORM\EntityManagerInterface;  
use App\Entity\InscriptionCours;  
use App\Entity\Promotion;  
use Stripe\Webhook;
use Stripe\Event;
use App\Entity\Inscription;

final class PayementControllerController extends AbstractController
{
     
    #[Route('/create-payment-intent', name: 'create_payment_intent', methods: ['POST'])]
    public function createPaymentIntent(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        Stripe::setApiKey($this->getParameter('stripe_secret_key'));
        $data = json_decode($request->getContent(), true);
        
        if (!isset($data['inscriptionId'])) {
            return new JsonResponse(['error' => 'Inscription ID manquant'], 400);
        }
    
        $inscription = $entityManager->getRepository(InscriptionCours::class)->find($data['inscriptionId']);
        if (!$inscription) {
            return new JsonResponse(['error' => 'Inscription non trouvée'], 404);
        }
    
        // Récupération du prix initial de la formation
        $amount = $inscription->getMontant(); // 🔹 On récupère directement le montant mis à jour
    
        if (!$amount) {
            // Si le montant n'est pas encore mis à jour, on prend le prix de la formation
            $amount = $inscription->getFormation()->getPrix();
        }
    
        try {
            $paymentIntent = \Stripe\PaymentIntent::create([
                'amount' => $amount * 100, // 🔹 Stripe attend le montant en centimes
                'currency' => 'eur',
                'payment_method_types' => ['card'],
                'metadata' => ['inscriptionId' => $inscription->getId()]
            ]);
    
            return new JsonResponse([
                'clientSecret' => $paymentIntent->client_secret,
                'montantFinal' => $amount // 🔹 On renvoie aussi le montant final au frontend
            ]);
        } catch (\Exception $e) {
            return new JsonResponse(['error' => 'Erreur : ' . $e->getMessage()], 500);
        }
    }
    

    #[Route('/save-payment/{id}', name: 'save_payment', methods: ['POST'])]
    public function savePayment($id, Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
    //  Récupère l'inscription
    $inscription = $entityManager->getRepository(InscriptionCours::class)->find($id);
    if (!$inscription) {
        return new JsonResponse(['error' => 'Inscription non trouvée'], 404);
    }

    //  Récupère les données du paiement
    $data = json_decode($request->getContent(), true);
    if (!isset($data['amount'])) {
        return new JsonResponse(['error' => 'Montant non fourni'], 400);
    }

    //  Mise à jour du montant
    $inscription->setMontant($data['amount']);

    //  Mise à jour du statut en fonction du montant
    if ($data['amount'] > 0) {
        $inscription->setStatus('payé');
    } else {
        $inscription->setStatus('en attente');
    }

    //  Persiste et enregistre les changements
    $entityManager->persist($inscription);
    $entityManager->flush();

    return new JsonResponse([
        'message' => 'Paiement enregistré avec succès',
        'montant' => $inscription->getMontant(),
        'statut' => $inscription->getStatus()
    ]);
}



#[Route('/success/{id}', name: 'payment_success')]
public function paymentSuccess(int $id, EntityManagerInterface $entityManager): Response
{
    try {
        // Récupérer l'inscription en base de données
        $inscription = $entityManager->getRepository(InscriptionCours::class)->find($id);
        if (!$inscription) {
            return new JsonResponse(['error' => 'Inscription non trouvée.'], 404);
        }

        // Vérifier si la formation associée existe
        $formation = $inscription->getFormation();
        if (!$formation) {
            return new JsonResponse(['error' => 'Formation non trouvée.'], 404);
        }

        // Mise à jour du montant (si nécessaire)
        if ($inscription->getMontant() == 0) {
            $inscription->setMontant($formation->getPrix());
        }

        // Mise à jour du statut selon le montant
        if ($inscription->getMontant() > 0) {
            $inscription->setStatus('payé');
        } else {
            $inscription->setStatus('en attente');
        }

        // Persister les modifications
        $entityManager->flush();

        return $this->redirectToRoute('payment_success_page', ['id' => $id]);
    } catch (\Exception $e) {
        return new JsonResponse(['error' => 'Erreur : ' . $e->getMessage()], 500);
    }
}




    #[Route('/cancel', name: 'payment_cancel')]
    public function cancel(): Response
    {
        return $this->render('payment/cancel.html.twig');
    }


    #[Route('/payment/success-page/{id}', name: 'payment_success_page')]
      public function paymentSuccessPage($id, EntityManagerInterface $entityManager): Response
     {
    $inscription = $entityManager->getRepository(InscriptionCours::class)->find($id);

    if (!$inscription) {
        throw $this->createNotFoundException("Inscription non trouvée.");
    }

    return $this->render('payment/success.html.twig', [
        'inscription' => $inscription
    ]);
}


    #[Route('/check-promo', name: 'check_promo', methods: ['POST'])]
    public function checkPromo(Request $request, PromotionRepository $promoRepo, InscriptionCoursRepository $inscriptionRepo, EntityManagerInterface $entityManager): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $promoCodeValue = $data['promoCode'] ?? null;
        $inscriptionId = $data['inscriptionId'] ?? null;

        if (!$promoCodeValue || !$inscriptionId) {
            return new JsonResponse(['error' => 'Code promo ou ID inscription manquant'], 400);
        }

        $promoCode = $promoRepo->findOneBy(['codePromo' => $promoCodeValue]);

        if (!$promoCode || !$promoCode->isValid()) {
            return new JsonResponse(['error' => 'Code promo invalide ou expiré'], 400);
        }

        $inscription = $inscriptionRepo->find($inscriptionId);
        if (!$inscription) {
            return new JsonResponse(['error' => 'Inscription non trouvée'], 400);
        }

        $reduction = $promoCode->getRemise();
        $montantInitial = $inscription->getFormation()->getPrix();
        $montantApresRemise = max(0, $montantInitial - ($montantInitial * ($reduction / 100)));

        $inscription->setMontant($montantApresRemise);
        $entityManager->persist($inscription);
        $entityManager->flush();

        return new JsonResponse(['message' => 'Code promo appliqué avec succès !', 'montantApresRemise' => $montantApresRemise]);
    }

    #[Route('/payment/{id}', name: 'payment_page', methods: ['GET'])]
     public function paymentPage($id, EntityManagerInterface $entityManager): Response
    {
      $inscription = $entityManager->getRepository(InscriptionCours::class)->find($id);
     if (!$inscription) {
       $this->addFlash('error', 'Inscription non trouvée');
      return $this->redirectToRoute('app_inscription_cours_index');
    }
      $formation = $inscription->getFormation();
     $amount = $formation->getPrix(); // En euros
     return $this->render('payment/payment.html.twig', [
   'stripe_public_key' => $this->getParameter('stripe_public_key'),
     'amount' => $amount,
    'inscription_id' => $inscription->getId(),
     'inscription_cour' => $inscription,
     ]);
      }
}
