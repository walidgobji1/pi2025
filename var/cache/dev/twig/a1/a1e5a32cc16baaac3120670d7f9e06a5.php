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
class __TwigTemplate_99de2852dc33abd52e0b3894b81e4b7e extends Template
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
    <div class=\"max-w-3xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden\">
        <!-- Event Header -->
        <div class=\"bg-blue-600 text-white p-6 text-center\">
            <h1 class=\"text-3xl font-semibold\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 10, $this->source); })()), "titre", [], "any", false, false, false, 10), "html", null, true);
        yield "</h1>
        </div>

        <!-- Event Details -->
        <div class=\"p-6\">
            <!-- Date Section -->
            <div class=\"mb-6\">
             <p><strong>Date: </strong></p>
                <p>Date: ";
        // line 18
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 18, $this->source); })()), "date", [], "any", false, false, false, 18)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 18, $this->source); })()), "date", [], "any", false, false, false, 18), "d M Y"), "html", null, true)) : ("Date not available"));
        yield "</p>
                <p class=\"text-lg font-semibold text-gray-700\"><strong>Description: </strong></p>
                <p class=\"text-base text-gray-600 mt-2\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 20, $this->source); })()), "description", [], "any", false, false, false, 20), "html", null, true);
        yield "</p>
            </div>
        </div>

        <!-- Actions (Buttons) -->
    </div>
</div>

<style>
    .btn {
        display: inline-block;
        padding: 12px 20px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: bold;
        transition: all 0.3s ease;
    }

    .btn:hover {
        transform: translateY(-2px);
    }

    .btn-primary {
        background-color: rgba(255, 153, 0, 0.18);
        color: white;
    }

    .btn-warning {
        background-color: #f0ad4e;
        color: white;
    }

    .container {
        padding: 40px;
        max-width: 900px;
        margin: 0 auto;
    }

    .max-w-3xl {
        max-width: 100%;
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

    .p-6 {
        padding: 24px;
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

    .mb-6 {
        margin-bottom: 1.5rem;
    }

    .flex {
        display: flex;
    }

    .justify-between {
        justify-content: space-between;
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
        return array (  122 => 20,  117 => 18,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de l'Événement{% endblock %}

{% block body %}
<div class=\"container mx-auto my-10 p-5\">
    <div class=\"max-w-3xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden\">
        <!-- Event Header -->
        <div class=\"bg-blue-600 text-white p-6 text-center\">
            <h1 class=\"text-3xl font-semibold\">{{ evenement.titre }}</h1>
        </div>

        <!-- Event Details -->
        <div class=\"p-6\">
            <!-- Date Section -->
            <div class=\"mb-6\">
             <p><strong>Date: </strong></p>
                <p>Date: {{ evenement.date ? evenement.date|date('d M Y') : 'Date not available' }}</p>
                <p class=\"text-lg font-semibold text-gray-700\"><strong>Description: </strong></p>
                <p class=\"text-base text-gray-600 mt-2\">{{ evenement.description }}</p>
            </div>
        </div>

        <!-- Actions (Buttons) -->
    </div>
</div>

<style>
    .btn {
        display: inline-block;
        padding: 12px 20px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: bold;
        transition: all 0.3s ease;
    }

    .btn:hover {
        transform: translateY(-2px);
    }

    .btn-primary {
        background-color: rgba(255, 153, 0, 0.18);
        color: white;
    }

    .btn-warning {
        background-color: #f0ad4e;
        color: white;
    }

    .container {
        padding: 40px;
        max-width: 900px;
        margin: 0 auto;
    }

    .max-w-3xl {
        max-width: 100%;
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

    .p-6 {
        padding: 24px;
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

    .mb-6 {
        margin-bottom: 1.5rem;
    }

    .flex {
        display: flex;
    }

    .justify-between {
        justify-content: space-between;
    }
</style>
{% endblock %}
", "evenement/show.html.twig", "C:\\Users\\walid\\Desktop\\Nouveau dossier\\pi2025\\templates\\evenement\\show.html.twig");
    }
}
