<?php

namespace App\Controller;

use Stripe\Stripe;
use Stripe\PaymentIntent;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;  // Importer EntityManagerInterface
use App\Entity\InscriptionCours;  // Importer InscriptionCours

final class PayementControllerController extends AbstractController
{
    #[Route('/create-payment-intent', name: 'create_payment_intent', methods: ['POST'])]
    public function createPaymentIntent(Request $request): JsonResponse
    {
        Stripe::setApiKey($this->getParameter('stripe_secret_key'));

        $data = json_decode($request->getContent(), true);

        if (!isset($data['inscriptionId']) || !isset($data['amount'])) {
            return new JsonResponse(['error' => 'Inscription ID ou Montant manquants'], 400);
        }

        $inscriptionId = $data['inscriptionId'];
        $amount = $data['amount'];

        try {
            // Créer l'intention de paiement
            $paymentIntent = PaymentIntent::create([
                'amount' => $amount,
                'currency' => 'eur',
                'payment_method_types' => ['card'],
                'metadata' => ['inscriptionId' => $inscriptionId],
            ]);

            return new JsonResponse(['clientSecret' => $paymentIntent->client_secret]);
        } catch (\Exception $e) {
            return new JsonResponse(['error' => $e->getMessage()], 500);
        }
    }

    #[Route('/save-payment-data', name: 'save_payment_data', methods: ['POST'])]
    public function savePaymentData(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
    
        if (!isset($data['inscriptionId']) || !isset($data['amount'])) {
            return new JsonResponse(['error' => 'Inscription ID ou Montant manquants'], 400);
        }
    
        // Ici, vous pouvez sauvegarder les données dans la base de données si nécessaire.
        try {
            $inscription = $entityManager->getRepository(InscriptionCours::class)->find($data['inscriptionId']);
            if (!$inscription) {
                return new JsonResponse(['error' => 'Inscription non trouvée'], 404);
            }
    
            // Sauvegarder les données ou effectuer une logique métier ici
            // Exemple :
            $inscription->setMontant($data['amount']);
            $entityManager->flush();
    
            return new JsonResponse(['success' => true]);
        } catch (\Exception $e) {
            return new JsonResponse(['error' => 'Erreur lors de l\'enregistrement des données: ' . $e->getMessage()], 500);
        }
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
        $amount = $formation->getPrix(); // Convertir en centimes

        return $this->render('payment/payment.html.twig', [
            'stripe_public_key' => $this->getParameter('stripe_public_key'),
            'amount' => $amount,
            'inscription_id' => $inscription->getId(),
            'inscription_cour' => $inscription, // Assurez-vous de passer l'inscription ici
        ]);
    }

    #[Route('/success/{id}', name: 'payment_success')]
    public function success($id, EntityManagerInterface $entityManager): Response
    {
        $inscription = $entityManager->getRepository(InscriptionCours::class)->find($id);

        if (!$inscription) {
            return new JsonResponse(['error' => 'Inscription non trouvée'], 404); // Afficher une erreur si l'inscription n'est pas trouvée
        }

        try {
            $inscription->setStatus('payé');
            $inscription->setMontant($inscription->getFormation()->getPrix());
            $inscription->setDatePaiement(new \DateTimeImmutable());
            $entityManager->flush();
        } catch (\Exception $e) {
            return new JsonResponse(['error' => $e->getMessage()], 500); // Retourner l'erreur dans la réponse
        }

        return $this->render('payment/success.html.twig');
    }

    #[Route('/cancel', name: 'payment_cancel')]
    public function cancel(): Response
    {
        return $this->render('payment/cancel.html.twig');
    }
}
