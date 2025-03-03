<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* payment/payment.html.twig */
class __TwigTemplate_068ea842d6d8e365020d05534a4c1343 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/payment.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/payment.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "payment/payment.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Paiement";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

<style>
    .content-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 80vh;
        padding: 20px;
    }

    .payment-container {
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 100%;
        max-width: 400px;
    }

    h1 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .form-group {
        text-align: left;
        margin-bottom: 15px;
        width: 100%;
    }

    label {
        font-weight: bold;
    }

    input, select {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    button {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        width: 100%;
        margin-top: 10px;
    }

    button:disabled {
        background-color: #ccc;
        cursor: not-allowed;
    }

    #payment-message, #promo-message {
        margin-top: 10px;
        font-weight: bold;
        color: red;
        aria-live: polite;
    }

    .loading-spinner {
        display: none;
        width: 20px;
        height: 20px;
        border: 3px solid rgba(0, 0, 0, 0.1);
        border-left-color: #007bff;
        border-radius: 50%;
        animation: spin 1s linear infinite;
        margin: auto;
    }

    @keyframes spin {
        to { transform: rotate(360deg); }
    }
</style>

<div class=\"content-wrapper\">
    <div class=\"payment-container\">
        <h1>Page de Paiement</h1>
        <p>Veuillez entrer vos informations de paiement.</p>

        <form id=\"payment-form\">
            <div class=\"form-group\">
                <label for=\"card-element\">Informations de la carte</label>
                <div id=\"card-element\"></div> 
            </div>

            <div class=\"form-group\">
                <label for=\"promo-code\">Code promo (facultatif)</label>
                <input type=\"text\" id=\"promo-code\" placeholder=\"Entrez votre code promo\">
                <button type=\"button\" id=\"check-promo-button\">Vérifier</button>
                <div class=\"loading-spinner\" id=\"promo-loading-spinner\"></div>
                <p id=\"promo-message\"></p>
            </div>

            <button type=\"submit\" id=\"pay-button\">Payer ";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["inscription_cour"]) || array_key_exists("inscription_cour", $context) ? $context["inscription_cour"] : (function () { throw new RuntimeError('Variable "inscription_cour" does not exist.', 110, $this->source); })()), "formation", [], "any", false, false, false, 110), "prix", [], "any", false, false, false, 110), "js"), "html", null, true);
        yield " DT</button>
            <div class=\"loading-spinner\" id=\"loading-spinner\"></div>
            <p id=\"payment-message\"></p>
        </form>
    </div>
</div>

<script src=\"https://js.stripe.com/v3/\"></script>
   <script>
      document.addEventListener(\"DOMContentLoaded\", async function () {
    const stripe = Stripe(\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["stripe_public_key"]) || array_key_exists("stripe_public_key", $context) ? $context["stripe_public_key"] : (function () { throw new RuntimeError('Variable "stripe_public_key" does not exist.', 120, $this->source); })()), "js"), "html", null, true);
        yield "\");
    const elements = stripe.elements();
    const cardElement = elements.create(\"card\", { hidePostalCode: true });
    cardElement.mount(\"#card-element\");

    const payButton = document.getElementById(\"pay-button\");
    const checkPromoButton = document.getElementById(\"check-promo-button\");
    const promoMessage = document.getElementById(\"promo-message\");
    const paymentMessage = document.getElementById(\"payment-message\");
    const loadingSpinner = document.getElementById(\"loading-spinner\");
    const promoSpinner = document.getElementById(\"promo-loading-spinner\");
    let amount = parseFloat(\"";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["inscription_cour"]) || array_key_exists("inscription_cour", $context) ? $context["inscription_cour"] : (function () { throw new RuntimeError('Variable "inscription_cour" does not exist.', 131, $this->source); })()), "formation", [], "any", false, false, false, 131), "prix", [], "any", false, false, false, 131), "js"), "html", null, true);
        yield "\") * 100;

    async function checkPromoCode() {
        const promoCode = document.getElementById(\"promo-code\").value.trim();
        if (!promoCode) {
            promoMessage.textContent = \"Veuillez entrer un code promo.\";
            promoMessage.style.color = \"red\";
            return;
        }
        promoSpinner.style.display = \"inline-block\";
        checkPromoButton.disabled = true;

        try {
            const response = await fetch(\"";
        // line 144
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("check_promo");
        yield "\", {
                method: \"POST\",
                headers: { \"Content-Type\": \"application/json\" },
                body: JSON.stringify({ inscriptionId: ";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inscription_id"]) || array_key_exists("inscription_id", $context) ? $context["inscription_id"] : (function () { throw new RuntimeError('Variable "inscription_id" does not exist.', 147, $this->source); })()), "html", null, true);
        yield ", promoCode })
            });
            const data = await response.json();
            promoSpinner.style.display = \"none\";
            checkPromoButton.disabled = false;

            if (data.error) {
                promoMessage.textContent = \"❌ \" + data.error;
                promoMessage.style.color = \"red\";
            } else {
                promoMessage.textContent = \"✅ \" + data.message + \" - Nouveau montant : \" + data.montantApresRemise + \" DT\";
                promoMessage.style.color = \"green\";
                amount = parseFloat(data.montantApresRemise) * 100;
                payButton.textContent = \"Payer \" + data.montantApresRemise + \" DT\";
            }
        } catch (error) {
            promoSpinner.style.display = \"none\";
            checkPromoButton.disabled = false;
            promoMessage.textContent = \"Une erreur est survenue lors de la vérification.\";
            promoMessage.style.color = \"red\";
        }
    }

    async function handlePayment(event) {
    event.preventDefault();
    payButton.disabled = true;
    payButton.textContent = \"Paiement en cours...\";
    loadingSpinner.style.display = \"block\";

    try {
        const response = await fetch(\"";
        // line 177
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_payment_intent");
        yield "\", {
            method: \"POST\",
            headers: { \"Content-Type\": \"application/json\" },
            body: JSON.stringify({ inscriptionId: ";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inscription_id"]) || array_key_exists("inscription_id", $context) ? $context["inscription_id"] : (function () { throw new RuntimeError('Variable "inscription_id" does not exist.', 180, $this->source); })()), "html", null, true);
        yield ", amount })
        });
        const data = await response.json();

        if (!data.clientSecret) throw new Error(\"Problème avec l'API de paiement.\");

        const result = await stripe.confirmCardPayment(data.clientSecret, { 
            payment_method: { card: cardElement } 
        });

        if (result.error) throw new Error(result.error.message);

        // ✅ Mise à jour du statut de l'inscription après paiement
        await fetch(\"";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payment_success", ["id" => (isset($context["inscription_id"]) || array_key_exists("inscription_id", $context) ? $context["inscription_id"] : (function () { throw new RuntimeError('Variable "inscription_id" does not exist.', 193, $this->source); })())]), "html", null, true);
        yield "\", {
            method: \"GET\",
            headers: { \"Content-Type\": \"application/json\" }
        });

        setTimeout(() => {
            window.location.replace(\"";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payment_success_page", ["id" => (isset($context["inscription_id"]) || array_key_exists("inscription_id", $context) ? $context["inscription_id"] : (function () { throw new RuntimeError('Variable "inscription_id" does not exist.', 199, $this->source); })())]), "html", null, true);
        yield "\");
        }, 1000);
    } catch (error) {
        payButton.disabled = false;
        payButton.textContent = \"Payer \" + (amount / 100).toFixed(2) + \" DT\";
        loadingSpinner.style.display = \"none\";
        paymentMessage.textContent = \"❌ Erreur : \" + error.message;
        paymentMessage.style.color = \"red\";
    }
}


    checkPromoButton.addEventListener(\"click\", checkPromoCode);
    document.getElementById(\"payment-form\").addEventListener(\"submit\", handlePayment);
});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "payment/payment.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  319 => 199,  310 => 193,  294 => 180,  288 => 177,  255 => 147,  249 => 144,  233 => 131,  219 => 120,  206 => 110,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Paiement{% endblock %}

{% block body %}
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

<style>
    .content-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 80vh;
        padding: 20px;
    }

    .payment-container {
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 100%;
        max-width: 400px;
    }

    h1 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .form-group {
        text-align: left;
        margin-bottom: 15px;
        width: 100%;
    }

    label {
        font-weight: bold;
    }

    input, select {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    button {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        width: 100%;
        margin-top: 10px;
    }

    button:disabled {
        background-color: #ccc;
        cursor: not-allowed;
    }

    #payment-message, #promo-message {
        margin-top: 10px;
        font-weight: bold;
        color: red;
        aria-live: polite;
    }

    .loading-spinner {
        display: none;
        width: 20px;
        height: 20px;
        border: 3px solid rgba(0, 0, 0, 0.1);
        border-left-color: #007bff;
        border-radius: 50%;
        animation: spin 1s linear infinite;
        margin: auto;
    }

    @keyframes spin {
        to { transform: rotate(360deg); }
    }
</style>

<div class=\"content-wrapper\">
    <div class=\"payment-container\">
        <h1>Page de Paiement</h1>
        <p>Veuillez entrer vos informations de paiement.</p>

        <form id=\"payment-form\">
            <div class=\"form-group\">
                <label for=\"card-element\">Informations de la carte</label>
                <div id=\"card-element\"></div> 
            </div>

            <div class=\"form-group\">
                <label for=\"promo-code\">Code promo (facultatif)</label>
                <input type=\"text\" id=\"promo-code\" placeholder=\"Entrez votre code promo\">
                <button type=\"button\" id=\"check-promo-button\">Vérifier</button>
                <div class=\"loading-spinner\" id=\"promo-loading-spinner\"></div>
                <p id=\"promo-message\"></p>
            </div>

            <button type=\"submit\" id=\"pay-button\">Payer {{ inscription_cour.formation.prix|e('js') }} DT</button>
            <div class=\"loading-spinner\" id=\"loading-spinner\"></div>
            <p id=\"payment-message\"></p>
        </form>
    </div>
</div>

<script src=\"https://js.stripe.com/v3/\"></script>
   <script>
      document.addEventListener(\"DOMContentLoaded\", async function () {
    const stripe = Stripe(\"{{ stripe_public_key|e('js') }}\");
    const elements = stripe.elements();
    const cardElement = elements.create(\"card\", { hidePostalCode: true });
    cardElement.mount(\"#card-element\");

    const payButton = document.getElementById(\"pay-button\");
    const checkPromoButton = document.getElementById(\"check-promo-button\");
    const promoMessage = document.getElementById(\"promo-message\");
    const paymentMessage = document.getElementById(\"payment-message\");
    const loadingSpinner = document.getElementById(\"loading-spinner\");
    const promoSpinner = document.getElementById(\"promo-loading-spinner\");
    let amount = parseFloat(\"{{ inscription_cour.formation.prix|e('js') }}\") * 100;

    async function checkPromoCode() {
        const promoCode = document.getElementById(\"promo-code\").value.trim();
        if (!promoCode) {
            promoMessage.textContent = \"Veuillez entrer un code promo.\";
            promoMessage.style.color = \"red\";
            return;
        }
        promoSpinner.style.display = \"inline-block\";
        checkPromoButton.disabled = true;

        try {
            const response = await fetch(\"{{ path('check_promo') }}\", {
                method: \"POST\",
                headers: { \"Content-Type\": \"application/json\" },
                body: JSON.stringify({ inscriptionId: {{ inscription_id }}, promoCode })
            });
            const data = await response.json();
            promoSpinner.style.display = \"none\";
            checkPromoButton.disabled = false;

            if (data.error) {
                promoMessage.textContent = \"❌ \" + data.error;
                promoMessage.style.color = \"red\";
            } else {
                promoMessage.textContent = \"✅ \" + data.message + \" - Nouveau montant : \" + data.montantApresRemise + \" DT\";
                promoMessage.style.color = \"green\";
                amount = parseFloat(data.montantApresRemise) * 100;
                payButton.textContent = \"Payer \" + data.montantApresRemise + \" DT\";
            }
        } catch (error) {
            promoSpinner.style.display = \"none\";
            checkPromoButton.disabled = false;
            promoMessage.textContent = \"Une erreur est survenue lors de la vérification.\";
            promoMessage.style.color = \"red\";
        }
    }

    async function handlePayment(event) {
    event.preventDefault();
    payButton.disabled = true;
    payButton.textContent = \"Paiement en cours...\";
    loadingSpinner.style.display = \"block\";

    try {
        const response = await fetch(\"{{ path('create_payment_intent') }}\", {
            method: \"POST\",
            headers: { \"Content-Type\": \"application/json\" },
            body: JSON.stringify({ inscriptionId: {{ inscription_id }}, amount })
        });
        const data = await response.json();

        if (!data.clientSecret) throw new Error(\"Problème avec l'API de paiement.\");

        const result = await stripe.confirmCardPayment(data.clientSecret, { 
            payment_method: { card: cardElement } 
        });

        if (result.error) throw new Error(result.error.message);

        // ✅ Mise à jour du statut de l'inscription après paiement
        await fetch(\"{{ path('payment_success', {'id': inscription_id}) }}\", {
            method: \"GET\",
            headers: { \"Content-Type\": \"application/json\" }
        });

        setTimeout(() => {
            window.location.replace(\"{{ path('payment_success_page', {'id': inscription_id}) }}\");
        }, 1000);
    } catch (error) {
        payButton.disabled = false;
        payButton.textContent = \"Payer \" + (amount / 100).toFixed(2) + \" DT\";
        loadingSpinner.style.display = \"none\";
        paymentMessage.textContent = \"❌ Erreur : \" + error.message;
        paymentMessage.style.color = \"red\";
    }
}


    checkPromoButton.addEventListener(\"click\", checkPromoCode);
    document.getElementById(\"payment-form\").addEventListener(\"submit\", handlePayment);
});
</script>
{% endblock %}
", "payment/payment.html.twig", "C:\\Users\\walid\\Desktop\\finalPI\\pi2025\\templates\\payment\\payment.html.twig");
    }
}
