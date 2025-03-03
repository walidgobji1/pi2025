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

/* emails/promotion.html.twig */
class __TwigTemplate_5a8b477d081fc7c9c40eeb15173c5828 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/promotion.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/promotion.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Votre Code Promo</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { max-width: 600px; margin: auto; padding: 20px; border: 1px solid #ddd; }
        .code { font-size: 20px; font-weight: bold; color: #e63946; }
        .footer { margin-top: 20px; font-size: 12px; color: #555; }
    </style>
</head>
<body>
    <div class=\"container\">
        <h2>Bonjour ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["apprenant"]) || array_key_exists("apprenant", $context) ? $context["apprenant"] : (function () { throw new RuntimeError('Variable "apprenant" does not exist.', 15, $this->source); })()), "nom", [], "any", false, false, false, 15), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["apprenant"]) || array_key_exists("apprenant", $context) ? $context["apprenant"] : (function () { throw new RuntimeError('Variable "apprenant" does not exist.', 15, $this->source); })()), "prenom", [], "any", false, false, false, 15), "html", null, true);
        yield ",</h2>
        <p>Félicitations ! Vous avez droit à un code promo pour votre prochaine formation.</p>
        <p>Votre code promo est : <span class=\"code\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 17, $this->source); })()), "codePromo", [], "any", false, false, false, 17), "html", null, true);
        yield "</span></p>
        <p>Vous bénéficiez d'une réduction de <strong>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 18, $this->source); })()), "remise", [], "any", false, false, false, 18), "html", null, true);
        yield "%</strong>.</p>
        <p>Ce code est valable jusqu'au <strong>";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 19, $this->source); })()), "dateExpiration", [], "any", false, false, false, 19), "d/m/Y"), "html", null, true);
        yield "</strong>.</p>
        <p>Utilisez-le lors de votre inscription !</p>
        <hr>
        <p class=\"footer\">Ceci est un email automatique, merci de ne pas y répondre.</p>
    </div>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "emails/promotion.html.twig";
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
        return array (  79 => 19,  75 => 18,  71 => 17,  64 => 15,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Votre Code Promo</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { max-width: 600px; margin: auto; padding: 20px; border: 1px solid #ddd; }
        .code { font-size: 20px; font-weight: bold; color: #e63946; }
        .footer { margin-top: 20px; font-size: 12px; color: #555; }
    </style>
</head>
<body>
    <div class=\"container\">
        <h2>Bonjour {{ apprenant.nom }} {{ apprenant.prenom }},</h2>
        <p>Félicitations ! Vous avez droit à un code promo pour votre prochaine formation.</p>
        <p>Votre code promo est : <span class=\"code\">{{ promotion.codePromo }}</span></p>
        <p>Vous bénéficiez d'une réduction de <strong>{{ promotion.remise }}%</strong>.</p>
        <p>Ce code est valable jusqu'au <strong>{{ promotion.dateExpiration|date('d/m/Y') }}</strong>.</p>
        <p>Utilisez-le lors de votre inscription !</p>
        <hr>
        <p class=\"footer\">Ceci est un email automatique, merci de ne pas y répondre.</p>
    </div>
</body>
</html>
", "emails/promotion.html.twig", "C:\\Users\\walid\\Desktop\\Nouveau dossier (3)\\pi2025\\templates\\emails\\promotion.html.twig");
    }
}
