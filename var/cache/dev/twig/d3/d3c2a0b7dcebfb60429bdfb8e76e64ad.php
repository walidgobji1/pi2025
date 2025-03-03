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

/* evenement/events.html.twig */
class __TwigTemplate_c07c1faa89fbd253da43f718d89dbd9d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/events.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/events.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "evenement/events.html.twig", 1);
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

        yield "Liste des événements";
        
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
        yield "<div class=\"container mt-5\">
  <h2 class=\"text-center font-bold text-2xl mb-4\">Liste des événements</h2>
  <div class=\"row\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 9, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 10
            yield "          <div class=\"col-md-4 mb-4\">
              <div class=\"card shadow-lg rounded-lg transform transition hover:scale-105 hover:shadow-xl\">
                <img src=\"";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "photo", [], "any", false, false, false, 12))), "html", null, true);
            yield "\" class=\"card-img-top object-cover\" alt=\"Image de l'événement\">
                  <div class=\"card-body\">
                      <h5 class=\"card-title font-bold\">";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "titre", [], "any", false, false, false, 14), "html", null, true);
            yield "</h5>
                      <p class=\"card-text text-gray-700\">";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "description", [], "any", false, false, false, 15), 0, 100), "html", null, true);
            yield "...</p>
                      <p class=\"text-sm text-gray-500\">Date : ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 16), "d/m/Y"), "html", null, true);
            yield "</p>
                      <a href=\"";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 17)]), "html", null, true);
            yield "\" class=\"btn btn-primary w-full\">Voir les détails</a>
                  </div>
              </div>
          </div>
      ";
            $context['_iterated'] = true;
        }
        // line 23
        if (!$context['_iterated']) {
            // line 22
            yield "          <p class=\"text-center text-gray-600 w-full\">Aucun événement à afficher pour le moment.</p>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['evenement'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "  </div>
</div>

<style>
    .container {
        max-width: 1200px;
    }

    .text-center {
        text-align: center;
    }

    .text-gray-800 {
        color: #333;
    }

    .bg-blue-600 {
        background-color: #1D4ED8;
    }

    .bg-blue-700 {
        background-color: #1E40AF;
    }

    .text-gray-600 {
        color: #6B7280;
    }

    .text-gray-700 {
        color: #4B5563;
    }

    .font-bold {
        font-weight: 700;
    }

    .font-semibold {
        font-weight: 600;
    }

    .rounded-lg {
        border-radius: 8px;
    }

    .p-6 {
        padding: 1.5rem;
    }

    .mb-2 {
        margin-bottom: 0.5rem;
    }

    .mb-4 {
        margin-bottom: 1rem;
    }

    .mb-6 {
        margin-bottom: 1.5rem;
    }

    .w-full {
        width: 100%;
    }

    .transform {
        transform: translate3d(0, 0, 0);
    }

    .hover\\:scale-105:hover {
        transform: scale(1.05);
    }

    .transition {
        transition: all 0.3s ease;
    }

    .hover\\:bg-blue-700:hover {
        background-color: #1E40AF;
    }

    .object-cover {
        object-fit: cover;
        height: 200px;
        width: 100%;
    }

    .text-sm {
        font-size: 0.875rem;
    }

    .text-base {
        font-size: 1rem;
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 1.5rem;
    }

    .bg-white {
        background-color: white;
    }

    .shadow-lg {
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .default-image {
        background-color: #f0f0f0;
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
        return "evenement/events.html.twig";
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
        return array (  149 => 24,  142 => 22,  140 => 23,  131 => 17,  127 => 16,  123 => 15,  119 => 14,  114 => 12,  110 => 10,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des événements{% endblock %}

{% block body %}
<div class=\"container mt-5\">
  <h2 class=\"text-center font-bold text-2xl mb-4\">Liste des événements</h2>
  <div class=\"row\">
    {% for evenement in evenements %}
          <div class=\"col-md-4 mb-4\">
              <div class=\"card shadow-lg rounded-lg transform transition hover:scale-105 hover:shadow-xl\">
                <img src=\"{{ asset('uploads/photos/' ~ evenement.photo) }}\" class=\"card-img-top object-cover\" alt=\"Image de l'événement\">
                  <div class=\"card-body\">
                      <h5 class=\"card-title font-bold\">{{ evenement.titre }}</h5>
                      <p class=\"card-text text-gray-700\">{{ evenement.description|slice(0, 100) }}...</p>
                      <p class=\"text-sm text-gray-500\">Date : {{ evenement.date|date('d/m/Y') }}</p>
                      <a href=\"{{ path('app_evenement_show', {'id': evenement.id}) }}\" class=\"btn btn-primary w-full\">Voir les détails</a>
                  </div>
              </div>
          </div>
      {% else %}
          <p class=\"text-center text-gray-600 w-full\">Aucun événement à afficher pour le moment.</p>
      {% endfor %}
  </div>
</div>

<style>
    .container {
        max-width: 1200px;
    }

    .text-center {
        text-align: center;
    }

    .text-gray-800 {
        color: #333;
    }

    .bg-blue-600 {
        background-color: #1D4ED8;
    }

    .bg-blue-700 {
        background-color: #1E40AF;
    }

    .text-gray-600 {
        color: #6B7280;
    }

    .text-gray-700 {
        color: #4B5563;
    }

    .font-bold {
        font-weight: 700;
    }

    .font-semibold {
        font-weight: 600;
    }

    .rounded-lg {
        border-radius: 8px;
    }

    .p-6 {
        padding: 1.5rem;
    }

    .mb-2 {
        margin-bottom: 0.5rem;
    }

    .mb-4 {
        margin-bottom: 1rem;
    }

    .mb-6 {
        margin-bottom: 1.5rem;
    }

    .w-full {
        width: 100%;
    }

    .transform {
        transform: translate3d(0, 0, 0);
    }

    .hover\\:scale-105:hover {
        transform: scale(1.05);
    }

    .transition {
        transition: all 0.3s ease;
    }

    .hover\\:bg-blue-700:hover {
        background-color: #1E40AF;
    }

    .object-cover {
        object-fit: cover;
        height: 200px;
        width: 100%;
    }

    .text-sm {
        font-size: 0.875rem;
    }

    .text-base {
        font-size: 1rem;
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 1.5rem;
    }

    .bg-white {
        background-color: white;
    }

    .shadow-lg {
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .default-image {
        background-color: #f0f0f0;
    }
</style>

{% endblock %}
", "evenement/events.html.twig", "D:\\esprit\\PI\\final\\pi2025\\templates\\evenement\\events.html.twig");
    }
}
