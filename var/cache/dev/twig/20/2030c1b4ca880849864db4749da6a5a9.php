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

/* evenement/show.html.twig */
class __TwigTemplate_27e256c41db8c53125c857f072ce1947 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "evenement/show.html.twig", 1);
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

        yield "Détails de l'Événement";
        
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
        yield "<div class=\"container mx-auto my-10 p-5\">
    <div class=\"max-w-2xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden\">
        <!-- Event Header -->
        <div class=\"bg-blue-600 text-white p-4 text-center\">
            <h1 class=\"text-2xl font-semibold\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 10, $this->source); })()), "titre", [], "any", false, false, false, 10), "html", null, true);
        yield "</h1>
        </div>

        <!-- Event Details -->
        <div class=\"p-4\">
            <div class=\"card shadow-lg rounded-lg\">
                <!-- Photo de l'événement -->
                <img src=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 17, $this->source); })()), "photo", [], "any", false, false, false, 17))), "html", null, true);
        yield "\" class=\"card-img-top object-cover w-full h-48\" alt=\"Image de l'événement\">

                <!-- Date Section -->
                <div class=\"mb-4 mt-4\">
                    <p>Date: ";
        // line 21
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 21, $this->source); })()), "date", [], "any", false, false, false, 21)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 21, $this->source); })()), "date", [], "any", false, false, false, 21), "d M Y"), "html", null, true)) : ("Date non disponible"));
        yield "</p>
                    <p class=\"text-lg font-semibold text-gray-700\"><strong>Description: </strong></p>
                    <p class=\"text-base text-gray-600 mt-2\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 23, $this->source); })()), "description", [], "any", false, false, false, 23), "html", null, true);
        yield "</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .container {
        padding: 40px;
        max-width: 900px;
        margin: 0 auto;
    }

    .max-w-2xl {
        max-width: 700px; /* Réduit la largeur de la card */
    }

    .shadow-lg {
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .rounded-lg {
        border-radius: 8px;
    }

    .bg-blue-600 {
        background-color: rgba(209, 43, 43, 0.6);
    }

    .bg-gray-50 {
        background-color: #f9f9f9;
    }

    .text-white {
        color: white;
    }

    .p-4 {
        padding: 16px; /* Réduit la taille des paddings */
    }

    .text-center {
        text-align: center;
    }

    .font-semibold {
        font-weight: 600;
    }

    .text-lg {
        font-size: 1.125rem;
    }

    .text-xl {
        font-size: 1.25rem;
    }

    .text-gray-700 {
        color: #4a4a4a;
    }

    .text-gray-600 {
        color: #666;
    }

    .mt-2 {
        margin-top: 0.5rem;
    }

    .mb-4 {
        margin-bottom: 1rem; /* Réduit la marge du bas */
    }

    .object-cover {
        object-fit: cover;
    }

    .w-full {
        width: 100%;
    }

    .h-48 {
        height: 192px; /* Hauteur plus petite pour l'image */
    }
</style>
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
        return "evenement/show.html.twig";
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
        return array (  128 => 23,  123 => 21,  116 => 17,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de l'Événement{% endblock %}

{% block body %}
<div class=\"container mx-auto my-10 p-5\">
    <div class=\"max-w-2xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden\">
        <!-- Event Header -->
        <div class=\"bg-blue-600 text-white p-4 text-center\">
            <h1 class=\"text-2xl font-semibold\">{{ evenement.titre }}</h1>
        </div>

        <!-- Event Details -->
        <div class=\"p-4\">
            <div class=\"card shadow-lg rounded-lg\">
                <!-- Photo de l'événement -->
                <img src=\"{{ asset('uploads/photos/' ~ evenement.photo) }}\" class=\"card-img-top object-cover w-full h-48\" alt=\"Image de l'événement\">

                <!-- Date Section -->
                <div class=\"mb-4 mt-4\">
                    <p>Date: {{ evenement.date ? evenement.date|date('d M Y') : 'Date non disponible' }}</p>
                    <p class=\"text-lg font-semibold text-gray-700\"><strong>Description: </strong></p>
                    <p class=\"text-base text-gray-600 mt-2\">{{ evenement.description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .container {
        padding: 40px;
        max-width: 900px;
        margin: 0 auto;
    }

    .max-w-2xl {
        max-width: 700px; /* Réduit la largeur de la card */
    }

    .shadow-lg {
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .rounded-lg {
        border-radius: 8px;
    }

    .bg-blue-600 {
        background-color: rgba(209, 43, 43, 0.6);
    }

    .bg-gray-50 {
        background-color: #f9f9f9;
    }

    .text-white {
        color: white;
    }

    .p-4 {
        padding: 16px; /* Réduit la taille des paddings */
    }

    .text-center {
        text-align: center;
    }

    .font-semibold {
        font-weight: 600;
    }

    .text-lg {
        font-size: 1.125rem;
    }

    .text-xl {
        font-size: 1.25rem;
    }

    .text-gray-700 {
        color: #4a4a4a;
    }

    .text-gray-600 {
        color: #666;
    }

    .mt-2 {
        margin-top: 0.5rem;
    }

    .mb-4 {
        margin-bottom: 1rem; /* Réduit la marge du bas */
    }

    .object-cover {
        object-fit: cover;
    }

    .w-full {
        width: 100%;
    }

    .h-48 {
        height: 192px; /* Hauteur plus petite pour l'image */
    }
</style>
{% endblock %}
", "evenement/show.html.twig", "D:\\esprit\\PI\\final\\pi2025\\templates\\evenement\\show.html.twig");
    }
}
