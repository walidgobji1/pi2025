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
class __TwigTemplate_09e5652b8f951fe7ad80674699f1b413 extends Template
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

    <!-- Formulaire de recherche -->
    <div class=\"mb-4 flex justify-center\">
        <input type=\"text\" id=\"searchInput\" placeholder=\"Rechercher par titre\"
            class=\"p-2 border rounded-lg w-1/3\">
    </div>

    <div class=\"row\" id=\"eventsContainer\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 16, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 17
            yield "            <div class=\"col-md-4 mb-4 event-item\">
                <div class=\"card shadow-lg rounded-lg transform transition hover:scale-105 hover:shadow-xl\">
                    <img src=\"";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "photo", [], "any", false, false, false, 19))), "html", null, true);
            yield "\" class=\"card-img-top object-cover\"
                        alt=\"Image de l'événement\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title font-bold\">";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "titre", [], "any", false, false, false, 22), "html", null, true);
            yield "</h5>
                        <p class=\"card-text text-gray-700\">";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "description", [], "any", false, false, false, 23), 0, 100), "html", null, true);
            yield "...</p>
                        <p class=\"text-sm text-gray-500\">Date : ";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 24), "d/m/Y"), "html", null, true);
            yield "</p>
                        <a href=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            yield "\" class=\"btn btn-primary w-full\">
                            Voir les détails
                        </a>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 31
        if (!$context['_iterated']) {
            // line 32
            yield "            <p class=\"text-center text-gray-600 w-full\">Aucun événement trouvé.</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['evenement'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "    </div>
</div>

<script>
    document.getElementById(\"searchInput\").addEventListener(\"input\", function () {
        let searchValue = this.value.toLowerCase();
        let events = document.querySelectorAll(\".event-item\");

        events.forEach(event => {
            let title = event.querySelector(\".card-title\").innerText.toLowerCase();
            if (title.includes(searchValue)) {
                event.style.display = \"block\";
            } else {
                event.style.display = \"none\";
            }
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
        return array (  159 => 34,  152 => 32,  150 => 31,  139 => 25,  135 => 24,  131 => 23,  127 => 22,  121 => 19,  117 => 17,  112 => 16,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des événements{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <h2 class=\"text-center font-bold text-2xl mb-4\">Liste des événements</h2>

    <!-- Formulaire de recherche -->
    <div class=\"mb-4 flex justify-center\">
        <input type=\"text\" id=\"searchInput\" placeholder=\"Rechercher par titre\"
            class=\"p-2 border rounded-lg w-1/3\">
    </div>

    <div class=\"row\" id=\"eventsContainer\">
        {% for evenement in evenements %}
            <div class=\"col-md-4 mb-4 event-item\">
                <div class=\"card shadow-lg rounded-lg transform transition hover:scale-105 hover:shadow-xl\">
                    <img src=\"{{ asset('uploads/photos/' ~ evenement.photo) }}\" class=\"card-img-top object-cover\"
                        alt=\"Image de l'événement\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title font-bold\">{{ evenement.titre }}</h5>
                        <p class=\"card-text text-gray-700\">{{ evenement.description|slice(0, 100) }}...</p>
                        <p class=\"text-sm text-gray-500\">Date : {{ evenement.date|date('d/m/Y') }}</p>
                        <a href=\"{{ path('app_evenement_show', {'id': evenement.id}) }}\" class=\"btn btn-primary w-full\">
                            Voir les détails
                        </a>
                    </div>
                </div>
            </div>
        {% else %}
            <p class=\"text-center text-gray-600 w-full\">Aucun événement trouvé.</p>
        {% endfor %}
    </div>
</div>

<script>
    document.getElementById(\"searchInput\").addEventListener(\"input\", function () {
        let searchValue = this.value.toLowerCase();
        let events = document.querySelectorAll(\".event-item\");

        events.forEach(event => {
            let title = event.querySelector(\".card-title\").innerText.toLowerCase();
            if (title.includes(searchValue)) {
                event.style.display = \"block\";
            } else {
                event.style.display = \"none\";
            }
        });
    });
</script>

{% endblock %}
", "evenement/events.html.twig", "C:\\Users\\Dell\\Desktop\\pi2\\pi2025\\templates\\evenement\\events.html.twig");
    }
}
