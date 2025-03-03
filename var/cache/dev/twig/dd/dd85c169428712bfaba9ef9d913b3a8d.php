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

/* admin/AvisEtScore.html.twig */
class __TwigTemplate_74c51434418cd36369da4ed65c777f03 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/AvisEtScore.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/AvisEtScore.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/AvisEtScore.html.twig", 1);
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

        yield "Gestion des Formations";
        
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
        yield "    <div class=\"container mt-5\">
        <h1 class=\"mb-4 text-primary font-weight-bold\">Liste des Formations</h1>

        <div class=\"table-responsive\">
            <table class=\"table table-hover table-striped table-bordered rounded shadow-sm\">
                <thead class=\"bg-primary text-white\">
                    <tr>
                        <th>Titre</th>
                        <th>Score Moyenne</th>
                        <th>Nombre d'Avis</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["formationData"]) || array_key_exists("formationData", $context) ? $context["formationData"] : (function () { throw new RuntimeError('Variable "formationData" does not exist.', 20, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 21
            yield "                        <tr class=\"align-middle\">
                            <td class=\"font-weight-bold\">";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "formation", [], "any", false, false, false, 22), "titre", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
                            <td>";
            // line 23
            yield (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["data"], "score", [], "any", false, false, false, 23))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "score", [], "any", false, false, false, 23), 1) . " / 5"), "html", null, true)) : ("Aucune note"));
            yield "</td>
                            <td>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["data"], "avis", [], "any", false, false, false, 24)), "html", null, true);
            yield "</td>
                            <td>
                                <a href=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_formation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "formation", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26)]), "html", null, true);
            yield "\" class=\"btn btn-custom btn-sm rounded-pill px-3 py-2\">
                                    <i class=\"fas fa-comments\"></i> Avis
                                </a>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 35
        if (!$context['_iterated']) {
            // line 32
            yield "                        <tr>
                            <td colspan=\"4\" class=\"text-center text-muted\">Aucune formation disponible.</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['data'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 42
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 43
        yield "    <style>
        /* Custom Button Color (same as title color) */
        .btn-custom {
            background-color: #007bff; /* Primary color (same as title) */
            color: white;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        
        /* Hover Effect for Button */
        .btn-custom:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        /* Hover Effect for Rows */
        tbody tr:hover {
            background-color: #f1f1f1;
        }

        /* Table Styling */
        table {
            border-collapse: separate;
            border-spacing: 0 10px; /* Adds space between rows */
        }

        th, td {
            vertical-align: middle;
        }

        th {
            font-size: 1.1rem;
            font-weight: bold;
            padding: 1rem;
        }

        td {
            padding: 0.8rem;
        }

        /* Shadow Effect for the Table */
        .table-responsive {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        /* Styling for the Table Header */
        .table thead {
            border-radius: 8px;
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
        return "admin/AvisEtScore.html.twig";
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
        return array (  187 => 43,  174 => 42,  159 => 36,  150 => 32,  148 => 35,  138 => 26,  133 => 24,  129 => 23,  125 => 22,  122 => 21,  117 => 20,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Gestion des Formations{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"mb-4 text-primary font-weight-bold\">Liste des Formations</h1>

        <div class=\"table-responsive\">
            <table class=\"table table-hover table-striped table-bordered rounded shadow-sm\">
                <thead class=\"bg-primary text-white\">
                    <tr>
                        <th>Titre</th>
                        <th>Score Moyenne</th>
                        <th>Nombre d'Avis</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for data in formationData %}
                        <tr class=\"align-middle\">
                            <td class=\"font-weight-bold\">{{ data.formation.titre }}</td>
                            <td>{{ data.score is not null ? data.score|number_format(1) ~ ' / 5' : 'Aucune note' }}</td>
                            <td>{{ data.avis|length }}</td>
                            <td>
                                <a href=\"{{ path('admin_formation_show', { 'id': data.formation.id }) }}\" class=\"btn btn-custom btn-sm rounded-pill px-3 py-2\">
                                    <i class=\"fas fa-comments\"></i> Avis
                                </a>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"4\" class=\"text-center text-muted\">Aucune formation disponible.</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}

{% block stylesheets %}
    <style>
        /* Custom Button Color (same as title color) */
        .btn-custom {
            background-color: #007bff; /* Primary color (same as title) */
            color: white;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        
        /* Hover Effect for Button */
        .btn-custom:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        /* Hover Effect for Rows */
        tbody tr:hover {
            background-color: #f1f1f1;
        }

        /* Table Styling */
        table {
            border-collapse: separate;
            border-spacing: 0 10px; /* Adds space between rows */
        }

        th, td {
            vertical-align: middle;
        }

        th {
            font-size: 1.1rem;
            font-weight: bold;
            padding: 1rem;
        }

        td {
            padding: 0.8rem;
        }

        /* Shadow Effect for the Table */
        .table-responsive {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        /* Styling for the Table Header */
        .table thead {
            border-radius: 8px;
        }
        
    </style>
{% endblock %}
", "admin/AvisEtScore.html.twig", "C:\\Users\\walid\\Desktop\\Nouveau dossier\\pi2025\\templates\\admin\\AvisEtScore.html.twig");
    }
}
