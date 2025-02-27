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
class __TwigTemplate_9bb56b066472651d984599be745effcc extends Template
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
        yield "<style>
    /* Permet au contenu de remplir l'espace entre header et footer */
    .content-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 80vh; /* S'assure que la section paiement prend de l'espace sans écraser le footer */
        padding: 20px;
    }

    .payment-container {
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 400px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
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

    /*#card-element {
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 5px;
        background: #fff;
    }*/

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

    button:hover {
        background-color: #0056b3;
    }

    #payment-message {
        margin-top: 10px;
        font-weight: bold;
    }
</style>

<div class=\"content-wrapper\">
    <div class=\"payment-container\">
        <h1>Page de Paiement</h1>
        <p>Veuillez entrer vos informations de paiement.</p>

        <form id=\"payment-form\">
            <div class=\"form-group\">
                <label for=\"card-element\">Informations de la carte</label>
                <div id=\"card-element\"><!-- Stripe Elements apparaîtra ici --></div>
            </div>

            <div class=\"form-group\">
                <label for=\"country\">Pays ou région</label>
                <select id=\"country\" required>
                    <option value=\"FR\">France</option>
                    <option value=\"US\">États-Unis</option>
                    <option value=\"CA\">Canada</option>
                    <option value=\"GB\">Royaume-Uni</option>
                    <option value=\"DE\">Allemagne</option>
                </select>
            </div>
               <div class=\"form-group\">
               <label for=\"cardholder-name\">Nom du titulaire</label>
              <input type=\"text\" id=\"cardholder-name\" placeholder=\"Nom du titulaire\" required>
                </div>

            <div class=\"form-group\">
                <label for=\"postal-code\">Code postal</label>
                <input type=\"text\" id=\"postal-code\" placeholder=\"Code postal\" required>
            </div>

            <button type=\"submit\" id=\"pay-button\">Payer</button>
            <p id=\"payment-message\"></p>
        </form>
    </div>
</div>

<script src=\"https://js.stripe.com/v3/\"></script>
<script>
    var stripe = Stripe(\"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["stripe_public_key"]) || array_key_exists("stripe_public_key", $context) ? $context["stripe_public_key"] : (function () { throw new RuntimeError('Variable "stripe_public_key" does not exist.', 121, $this->source); })()), "html", null, true);
        yield "\");
    var elements = stripe.elements();
    var cardElement = elements.create(\"card\", {hidePostalCode: true});
    cardElement.mount(\"#card-element\");

    document.getElementById(\"payment-form\").addEventListener(\"submit\", function (event) {
        event.preventDefault();
        document.getElementById(\"payment-message\").textContent = \"Traitement du paiement...\";
        console.log(\"Début de la requête de paiement...\");

        fetch(\"";
        // line 131
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_payment_intent");
        yield "\", { 
            method: \"POST\",
            headers: { \"Content-Type\": \"application/json\" },
            body: JSON.stringify({
                amount: 1000,  // Exemple : 10€
                currency: \"eur\",
                cardholderName: document.getElementById(\"cardholder-name\").value,
                country: document.getElementById(\"country\").value,
                postalCode: document.getElementById(\"postal-code\").value
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.clientSecret) {
                stripe.confirmCardPayment(data.clientSecret, {
                    payment_method: {
                        card: cardElement,
                        billing_details: {
                            name: document.getElementById(\"cardholder-name\").value,
                            address: {
                                country: document.getElementById(\"country\").value,
                                postal_code: document.getElementById(\"postal-code\").value
                            }
                        }
                    }
                }).then(function (result) {
                    if (result.error) {
                        document.getElementById(\"payment-message\").textContent = \"Erreur : \" + result.error.message;
                    } else {
                        document.getElementById(\"payment-message\").textContent = \"Paiement réussi !\";
                    }
                });
            } else {
                document.getElementById(\"payment-message\").textContent = \"Erreur lors de la création du paiement.\";
            }
        })
        .catch(error => {
            document.getElementById(\"payment-message\").textContent = \"Erreur : \" + error.message;
        });
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
        return array (  230 => 131,  217 => 121,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Paiement{% endblock %}

{% block body %}
<style>
    /* Permet au contenu de remplir l'espace entre header et footer */
    .content-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 80vh; /* S'assure que la section paiement prend de l'espace sans écraser le footer */
        padding: 20px;
    }

    .payment-container {
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 400px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
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

    /*#card-element {
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 5px;
        background: #fff;
    }*/

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

    button:hover {
        background-color: #0056b3;
    }

    #payment-message {
        margin-top: 10px;
        font-weight: bold;
    }
</style>

<div class=\"content-wrapper\">
    <div class=\"payment-container\">
        <h1>Page de Paiement</h1>
        <p>Veuillez entrer vos informations de paiement.</p>

        <form id=\"payment-form\">
            <div class=\"form-group\">
                <label for=\"card-element\">Informations de la carte</label>
                <div id=\"card-element\"><!-- Stripe Elements apparaîtra ici --></div>
            </div>

            <div class=\"form-group\">
                <label for=\"country\">Pays ou région</label>
                <select id=\"country\" required>
                    <option value=\"FR\">France</option>
                    <option value=\"US\">États-Unis</option>
                    <option value=\"CA\">Canada</option>
                    <option value=\"GB\">Royaume-Uni</option>
                    <option value=\"DE\">Allemagne</option>
                </select>
            </div>
               <div class=\"form-group\">
               <label for=\"cardholder-name\">Nom du titulaire</label>
              <input type=\"text\" id=\"cardholder-name\" placeholder=\"Nom du titulaire\" required>
                </div>

            <div class=\"form-group\">
                <label for=\"postal-code\">Code postal</label>
                <input type=\"text\" id=\"postal-code\" placeholder=\"Code postal\" required>
            </div>

            <button type=\"submit\" id=\"pay-button\">Payer</button>
            <p id=\"payment-message\"></p>
        </form>
    </div>
</div>

<script src=\"https://js.stripe.com/v3/\"></script>
<script>
    var stripe = Stripe(\"{{ stripe_public_key }}\");
    var elements = stripe.elements();
    var cardElement = elements.create(\"card\", {hidePostalCode: true});
    cardElement.mount(\"#card-element\");

    document.getElementById(\"payment-form\").addEventListener(\"submit\", function (event) {
        event.preventDefault();
        document.getElementById(\"payment-message\").textContent = \"Traitement du paiement...\";
        console.log(\"Début de la requête de paiement...\");

        fetch(\"{{ path('create_payment_intent') }}\", { 
            method: \"POST\",
            headers: { \"Content-Type\": \"application/json\" },
            body: JSON.stringify({
                amount: 1000,  // Exemple : 10€
                currency: \"eur\",
                cardholderName: document.getElementById(\"cardholder-name\").value,
                country: document.getElementById(\"country\").value,
                postalCode: document.getElementById(\"postal-code\").value
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.clientSecret) {
                stripe.confirmCardPayment(data.clientSecret, {
                    payment_method: {
                        card: cardElement,
                        billing_details: {
                            name: document.getElementById(\"cardholder-name\").value,
                            address: {
                                country: document.getElementById(\"country\").value,
                                postal_code: document.getElementById(\"postal-code\").value
                            }
                        }
                    }
                }).then(function (result) {
                    if (result.error) {
                        document.getElementById(\"payment-message\").textContent = \"Erreur : \" + result.error.message;
                    } else {
                        document.getElementById(\"payment-message\").textContent = \"Paiement réussi !\";
                    }
                });
            } else {
                document.getElementById(\"payment-message\").textContent = \"Erreur lors de la création du paiement.\";
            }
        })
        .catch(error => {
            document.getElementById(\"payment-message\").textContent = \"Erreur : \" + error.message;
        });
    });
</script>
{% endblock %}
", "payment/payment.html.twig", "C:\\Users\\walid\\Desktop\\Nouveau dossier\\pi2025\\templates\\payment\\payment.html.twig");
    }
}
