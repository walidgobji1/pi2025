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

/* inscription_cours/show.html.twig */
class __TwigTemplate_504d33df98678ce90346f7740262134d extends Template
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
            'head' => [$this, 'block_head'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription_cours/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription_cours/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "inscription_cours/show.html.twig", 1);
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

        yield "InscriptionCours
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 7
        yield "\t<style>
\t\t/* Centrage global du contenu */
\t\t.container {
\t\t\tmax-width: 800px;
\t\t\tmargin-top: 30px;
\t\t\tmargin-bottom: 30px;
\t\t}

\t\t/* Centrer le titre */
\t\th1.text-center {
\t\t\tfont-family: 'Arial', sans-serif;
\t\t\tfont-size: 2rem;
\t\t\tcolor: #007bff;
\t\t\tmargin-bottom: 20px;
\t\t}

\t\t/* Espacement de la table */
\t\t.table {
\t\t\tmargin-bottom: 30px;
\t\t\tborder: 1px solid #ddd;
\t\t\tborder-radius: 5px;
\t\t\tbox-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
\t\t}

\t\t/* Ajouter des bordures arrondies aux cellules de la table */
\t\t.table th,
\t\t.table td {
\t\t\tpadding: 15px;
\t\t\ttext-align: left;
\t\t\tvertical-align: middle;
\t\t}

\t\t/* Boutons */
\t\t.btn {
\t\t\tmargin: 10px;
\t\t}

\t\t.btn-primary {
\t\t\tbackground-color: #007bff;
\t\t\tborder-color: #007bff;
\t\t}

\t\t.btn-warning {
\t\t\tbackground-color: #ffc107;
\t\t\tborder-color: #ffc107;
\t\t}

\t\t.btn-danger {
\t\t\tbackground-color: #dc3545;
\t\t\tborder-color: #dc3545;
\t\t}

\t\t/* Section des liens */
\t\t.text-center a {
\t\t\tmargin: 10px;
\t\t\ttext-decoration: none;
\t\t\tfont-weight: bold;
\t\t\tpadding: 10px 20px;
\t\t}

\t\t.text-center a:hover {
\t\t\topacity: 0.8;
\t\t}
\t</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 73
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

        // line 74
        yield "\t<div class=\"container\">
\t\t<h1 class=\"text-center\">InscriptionCours</h1>

\t\t<table class=\"table mx-auto\">
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<th>Id</th>
\t\t\t\t\t<td>";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inscription_cour"]) || array_key_exists("inscription_cour", $context) ? $context["inscription_cour"] : (function () { throw new RuntimeError('Variable "inscription_cour" does not exist.', 81, $this->source); })()), "id", [], "any", false, false, false, 81), "html", null, true);
        yield "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Status</th>
\t\t\t\t\t<td>";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inscription_cour"]) || array_key_exists("inscription_cour", $context) ? $context["inscription_cour"] : (function () { throw new RuntimeError('Variable "inscription_cour" does not exist.', 85, $this->source); })()), "status", [], "any", false, false, false, 85), "html", null, true);
        yield "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>DateInscreption</th>
\t\t\t\t\t<td>";
        // line 89
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["inscription_cour"]) || array_key_exists("inscription_cour", $context) ? $context["inscription_cour"] : (function () { throw new RuntimeError('Variable "inscription_cour" does not exist.', 89, $this->source); })()), "dateInscreption", [], "any", false, false, false, 89)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inscription_cour"]) || array_key_exists("inscription_cour", $context) ? $context["inscription_cour"] : (function () { throw new RuntimeError('Variable "inscription_cour" does not exist.', 89, $this->source); })()), "dateInscreption", [], "any", false, false, false, 89), "Y-m-d H:i:s"), "html", null, true)) : (""));
        yield "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Montant</th>
\t\t\t\t\t<td>";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inscription_cour"]) || array_key_exists("inscription_cour", $context) ? $context["inscription_cour"] : (function () { throw new RuntimeError('Variable "inscription_cour" does not exist.', 93, $this->source); })()), "montant", [], "any", false, false, false, 93), "html", null, true);
        yield "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>TypePaiement</th>
\t\t\t\t\t<td>";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inscription_cour"]) || array_key_exists("inscription_cour", $context) ? $context["inscription_cour"] : (function () { throw new RuntimeError('Variable "inscription_cour" does not exist.', 97, $this->source); })()), "typePaiement", [], "any", false, false, false, 97), "html", null, true);
        yield "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>NomApprenant</th>
\t\t\t\t\t<td>";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inscription_cour"]) || array_key_exists("inscription_cour", $context) ? $context["inscription_cour"] : (function () { throw new RuntimeError('Variable "inscription_cour" does not exist.', 101, $this->source); })()), "nomApprenant", [], "any", false, false, false, 101), "html", null, true);
        yield "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>NomFormation</th>
\t\t\t\t\t<td>";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inscription_cour"]) || array_key_exists("inscription_cour", $context) ? $context["inscription_cour"] : (function () { throw new RuntimeError('Variable "inscription_cour" does not exist.', 105, $this->source); })()), "nomFormation", [], "any", false, false, false, 105), "html", null, true);
        yield "</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>

\t\t<div class=\"text-center\">
\t\t\t<a href=\"";
        // line 111
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscription_cours_index");
        yield "\" class=\"btn btn-primary\">Retour à la liste des inscriptions</a>
\t\t</div>

\t</div>
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
        return "inscription_cours/show.html.twig";
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
        return array (  250 => 111,  241 => 105,  234 => 101,  227 => 97,  220 => 93,  213 => 89,  206 => 85,  199 => 81,  190 => 74,  177 => 73,  102 => 7,  89 => 6,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}InscriptionCours
{% endblock %}

{% block head %}
\t<style>
\t\t/* Centrage global du contenu */
\t\t.container {
\t\t\tmax-width: 800px;
\t\t\tmargin-top: 30px;
\t\t\tmargin-bottom: 30px;
\t\t}

\t\t/* Centrer le titre */
\t\th1.text-center {
\t\t\tfont-family: 'Arial', sans-serif;
\t\t\tfont-size: 2rem;
\t\t\tcolor: #007bff;
\t\t\tmargin-bottom: 20px;
\t\t}

\t\t/* Espacement de la table */
\t\t.table {
\t\t\tmargin-bottom: 30px;
\t\t\tborder: 1px solid #ddd;
\t\t\tborder-radius: 5px;
\t\t\tbox-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
\t\t}

\t\t/* Ajouter des bordures arrondies aux cellules de la table */
\t\t.table th,
\t\t.table td {
\t\t\tpadding: 15px;
\t\t\ttext-align: left;
\t\t\tvertical-align: middle;
\t\t}

\t\t/* Boutons */
\t\t.btn {
\t\t\tmargin: 10px;
\t\t}

\t\t.btn-primary {
\t\t\tbackground-color: #007bff;
\t\t\tborder-color: #007bff;
\t\t}

\t\t.btn-warning {
\t\t\tbackground-color: #ffc107;
\t\t\tborder-color: #ffc107;
\t\t}

\t\t.btn-danger {
\t\t\tbackground-color: #dc3545;
\t\t\tborder-color: #dc3545;
\t\t}

\t\t/* Section des liens */
\t\t.text-center a {
\t\t\tmargin: 10px;
\t\t\ttext-decoration: none;
\t\t\tfont-weight: bold;
\t\t\tpadding: 10px 20px;
\t\t}

\t\t.text-center a:hover {
\t\t\topacity: 0.8;
\t\t}
\t</style>
{% endblock %}

{% block body %}
\t<div class=\"container\">
\t\t<h1 class=\"text-center\">InscriptionCours</h1>

\t\t<table class=\"table mx-auto\">
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<th>Id</th>
\t\t\t\t\t<td>{{ inscription_cour.id }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Status</th>
\t\t\t\t\t<td>{{ inscription_cour.status }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>DateInscreption</th>
\t\t\t\t\t<td>{{ inscription_cour.dateInscreption ? inscription_cour.dateInscreption|date('Y-m-d H:i:s') : '' }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Montant</th>
\t\t\t\t\t<td>{{ inscription_cour.montant }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>TypePaiement</th>
\t\t\t\t\t<td>{{ inscription_cour.typePaiement }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>NomApprenant</th>
\t\t\t\t\t<td>{{ inscription_cour.nomApprenant }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>NomFormation</th>
\t\t\t\t\t<td>{{ inscription_cour.nomFormation }}</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>

\t\t<div class=\"text-center\">
\t\t\t<a href=\"{{ path('app_inscription_cours_index') }}\" class=\"btn btn-primary\">Retour à la liste des inscriptions</a>
\t\t</div>

\t</div>
{% endblock %}
", "inscription_cours/show.html.twig", "C:\\Users\\walid\\Desktop\\Nouveau dossier (2)\\pi2025\\templates\\inscription_cours\\show.html.twig");
    }
}
