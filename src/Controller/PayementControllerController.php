<?php

namespace App\Controller;

use Stripe\Stripe;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Doctrine\ORM\EntityManagerInterface;  
use App\Entity\InscriptionCours;  
use App\Entity\Formation;  

final class PayementControllerController extends AbstractController
{
    #[Route('/create-payment-intent', name: 'create_payment_intent', methods: ['POST'])]
public function createPaymentIntent(Request $request): JsonResponse
{
    Stripe::setApiKey($this->getParameter('stripe_secret_key'));

    // Récupérer les données de la requête
    $data = json_decode($request->getContent(), true);

    // Vérifier que les données nécessaires sont présentes
    if (!isset($data['inscriptionId']) || !isset($data['amount'])) {
        return new JsonResponse(['error' => 'Inscription ID ou Montant manquants'], 400);
    }

    $inscriptionId = $data['inscriptionId'];
    $amount = $data['amount'];

    try {
        // Créer l'intention de paiement
        $paymentIntent = \Stripe\PaymentIntent::create([
            'amount' => $amount,
            'currency' => 'eur',  // Assurez-vous que la devise correspond à ce que vous souhaitez
            'payment_method_types' => ['card'],
            'metadata' => ['inscriptionId' => $inscriptionId], // Ajouter des informations utiles pour la gestion
        ]);

        // Renvoyer le clientSecret nécessaire pour le paiement
        return new JsonResponse(['clientSecret' => $paymentIntent->client_secret]);

    } catch (\Stripe\Exception\ApiErrorException $e) {
        // Capturer les erreurs de l'API Stripe et les renvoyer
        return new JsonResponse(['error' => 'Erreur Stripe : ' . $e->getMessage()], 500);
    } catch (\Exception $e) {
        // Capturer d'autres erreurs non liées à Stripe
        return new JsonResponse(['error' => 'Erreur générale : ' . $e->getMessage()], 500);
    }
}


    #[Route('/save-payment-data', name: 'save_payment_data', methods: ['POST'])]
    public function savePaymentData(Request $request, EntityManagerInterface $entityManager): JsonResponse
{
    $data = json_decode($request->getContent(), true);

    if (!isset($data['inscriptionId']) || !isset($data['amount'])) {
        return new JsonResponse(['error' => 'Inscription ID ou Montant manquants'], 400);
    }

    try {
        $inscription = $entityManager->getRepository(InscriptionCours::class)->find($data['inscriptionId']);
        if (!$inscription) {
            return new JsonResponse(['error' => 'Inscription non trouvée'], 404);
        }

        // Mise à jour du statut dès que les données sont sauvegardées
        $inscription->setMontant($data['amount']);
        $inscription->setStatus('payé');
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
   public function paymentSuccess($id, EntityManagerInterface $entityManager)
   {
       try {
           // Récupérer l'inscription par son ID
           $inscription = $entityManager->getRepository(InscriptionCours::class)->find($id);
           
           if (!$inscription) {
               throw new \Exception("Inscription non trouvée.");
           }
   
           // Mettre à jour le statut et le montant de l'inscription
           $inscription->setStatus('paid'); // Modifie le statut en "paid"
           $inscription->setMontant($inscription->getFormation()->getPrix()); // Le montant de l'inscription, tu peux le personnaliser
           $entityManager->flush(); // Sauvegarder les modifications dans la base de données
           $formation = $inscription->getFormation();
           if (!$formation) {
          return new JsonResponse(['error' => 'Formation non trouvée'], 500);
        }

        return new JsonResponse([
            'success' => true,
            'redirectUrl' => $this->generateUrl('payment_success_page', ['formation' => $formation,
            'inscription' => $inscription,'id' => $id])
        ]);


           } catch (\Exception $e) {
           // Si une erreur se produit, renvoyer un message d'erreur
           return new JsonResponse(['error' => 'Erreur lors du traitement du paiement : ' . $e->getMessage()], 500);
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

}
