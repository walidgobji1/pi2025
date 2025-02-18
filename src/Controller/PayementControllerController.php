<?php

namespace App\Controller;

use Stripe\Stripe;
use Stripe\PaymentIntent;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

final class PayementControllerController extends AbstractController
{
    #[Route('/create-payment-intent', name: 'create_payment_intent', methods: ['GET','POST'])]
    public function createPaymentIntent(Request $request): JsonResponse
    {
        // Utilisation des paramètres Symfony pour les clés
        Stripe::setApiKey($this->getParameter('stripe_secret_key'));

        $data = json_decode($request->getContent(), true);
        // Validation du montant
        $amount = isset($data['amount']) && is_numeric($data['amount']) && $data['amount'] > 0
            ? $data['amount']
            : 1000; // Montant par défaut : 10€

        try {
            $paymentIntent = PaymentIntent::create([
                'amount' => $amount,
                'currency' => 'eur',
                'payment_method_types' => ['card'],
            ]);

            return new JsonResponse([
                'clientSecret' => $paymentIntent->client_secret
            ]);
        } catch (\Exception $e) {
            return new JsonResponse(['error' => $e->getMessage()], 500);
        }
    }

    #[Route('/payment', name: 'payment_page', methods: ['GET'])]
    public function paymentPage(): Response
    {
        // Retourne la page de paiement avec la clé publique Stripe
        return $this->render('payment/payment.html.twig', [
            'stripe_public_key' => $this->getParameter('stripe_public_key'),
        ]);
    }

    #[Route('/success', name: 'payment_success')]
    public function success()
    {
        return $this->render('payment/success.html.twig');
    }

    #[Route('/cancel', name: 'payment_cancel')]
    public function cancel()
    {
        return $this->render('payment/cancel.html.twig');
    }
}
