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

/* inscription_cours/index.html.twig */
<<<<<<<< HEAD:var/cache/dev/twig/5d/5d97de5385a9cf52e302b60512fdc9de.php
class __TwigTemplate_035207703871cb98bf581cc997fa06c4 extends Template
========
class __TwigTemplate_570d0a350846e49cbd645f3469156048 extends Template
>>>>>>>> 8611b6e672bfc92a3280990b1971f5e769fb70aa:var/cache/dev/twig/f2/f22605aaf7046cb8c0d19418e3acc0a0.php
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
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription_cours/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription_cours/index.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "inscription_cours/index.html.twig", 1);
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

        yield "Gestion des Inscriptions
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "

\t<section class=\"section\">
\t\t<div class=\"container mt-4\">
\t\t\t<h5 class=\"card-title text-center\">Liste des Inscriptions</h5>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">

\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\"></h5>
\t\t\t\t\t\t\t<!-- Table avec DataTables -->
\t\t\t\t\t\t\t<table class=\"table datatable table-striped\">
\t\t\t\t\t\t\t\t<thead class=\"table-dark text-center\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>id</th>
\t\t\t\t\t\t\t\t\t\t<th>Nom Apprenant</th>
\t\t\t\t\t\t\t\t\t\t<th>Nom Formation</th>
\t\t\t\t\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t\t\t\t\t<th>CIN</th>
\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t<th>Montant</th>
\t\t\t\t\t\t\t\t\t\t<th>Date d'inscription</th>
\t\t\t\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t\t\t\t\t\t<!-- Ajout de la colonne actions -->
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["inscription_cours"]) || array_key_exists("inscription_cours", $context) ? $context["inscription_cours"] : (function () { throw new RuntimeError('Variable "inscription_cours" does not exist.', 35, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["inscription_cour"]) {
            // line 36
            yield "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inscription_cour"], "id", [], "any", false, false, false, 37), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inscription_cour"], "nomApprenant", [], "any", false, false, false, 38), "html", null, true);
            yield "</td>

\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscription_cour"], "formation", [], "any", false, false, false, 40), "titre", [], "any", false, false, false, 40), "html", null, true);
            yield "</td>

\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inscription_cour"], "email", [], "any", false, false, false, 42), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inscription_cour"], "cin", [], "any", false, false, false, 43), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 45
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["inscription_cour"], "status", [], "any", false, false, false, 45) == "Payé")) {
                // line 46
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success\">Payé</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 48
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-warning text-dark\">En attente</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 50
            yield "\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inscription_cour"], "montant", [], "any", false, false, false, 51), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\tdt</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["inscription_cour"], "dateInscreption", [], "any", false, false, false, 53), "Y-m-d"), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Bouton Détails -->
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscription_cours_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["inscription_cour"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm me-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tDétails
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Bouton Modifier -->
\t\t\t\t\t\t\t\t\t\t\t\t<!--<a href=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscription_cours_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["inscription_cour"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm me-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tModifier
\t\t\t\t\t\t\t\t\t\t\t\t</a>-->

\t\t\t\t\t\t\t\t\t\t\t\t<!-- Bouton Supprimer 
\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscription_cours_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["inscription_cour"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette inscription ?');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_method\" value=\"DELETE\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["inscription_cour"], "id", [], "any", false, false, false, 70))), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tSupprimer
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</form>-->
\t\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        // line 79
        if (!$context['_iterated']) {
            // line 80
            yield "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"9\" class=\"text-center text-muted\">Aucune inscription trouvée</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['inscription_cour'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        yield "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t<!-- Fin de la table -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</section>

\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "inscription_cours/index.html.twig";
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
        return array (  234 => 84,  225 => 80,  223 => 79,  209 => 70,  204 => 68,  195 => 62,  187 => 57,  180 => 53,  175 => 51,  172 => 50,  168 => 48,  164 => 46,  162 => 45,  157 => 43,  153 => 42,  148 => 40,  143 => 38,  139 => 37,  136 => 36,  131 => 35,  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Gestion des Inscriptions
{% endblock %}

{% block body %}


\t<section class=\"section\">
\t\t<div class=\"container mt-4\">
\t\t\t<h5 class=\"card-title text-center\">Liste des Inscriptions</h5>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">

\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\"></h5>
\t\t\t\t\t\t\t<!-- Table avec DataTables -->
\t\t\t\t\t\t\t<table class=\"table datatable table-striped\">
\t\t\t\t\t\t\t\t<thead class=\"table-dark text-center\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>id</th>
\t\t\t\t\t\t\t\t\t\t<th>Nom Apprenant</th>
\t\t\t\t\t\t\t\t\t\t<th>Nom Formation</th>
\t\t\t\t\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t\t\t\t\t<th>CIN</th>
\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t<th>Montant</th>
\t\t\t\t\t\t\t\t\t\t<th>Date d'inscription</th>
\t\t\t\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t\t\t\t\t\t<!-- Ajout de la colonne actions -->
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t{% for inscription_cour in inscription_cours %}
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ inscription_cour.id }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ inscription_cour.nomApprenant }}</td>

\t\t\t\t\t\t\t\t\t\t\t<td>{{ inscription_cour.formation.titre }}</td>

\t\t\t\t\t\t\t\t\t\t\t<td>{{ inscription_cour.email }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ inscription_cour.cin }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t{% if inscription_cour.status == 'Payé' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success\">Payé</span>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-warning text-dark\">En attente</span>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ inscription_cour.montant }}
\t\t\t\t\t\t\t\t\t\t\t\tdt</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ inscription_cour.dateInscreption|date('Y-m-d') }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Bouton Détails -->
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_inscription_cours_show', {'id': inscription_cour.id}) }}\" class=\"btn btn-info btn-sm me-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tDétails
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Bouton Modifier -->
\t\t\t\t\t\t\t\t\t\t\t\t<!--<a href=\"{{ path('app_inscription_cours_edit', {'id': inscription_cour.id}) }}\" class=\"btn btn-warning btn-sm me-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tModifier
\t\t\t\t\t\t\t\t\t\t\t\t</a>-->

\t\t\t\t\t\t\t\t\t\t\t\t<!-- Bouton Supprimer 
\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_inscription_cours_delete', {'id': inscription_cour.id}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette inscription ?');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_method\" value=\"DELETE\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ inscription_cour.id) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tSupprimer
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</form>-->
\t\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"9\" class=\"text-center text-muted\">Aucune inscription trouvée</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t<!-- Fin de la table -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</section>

\t\t{% endblock %}
<<<<<<<< HEAD:var/cache/dev/twig/5d/5d97de5385a9cf52e302b60512fdc9de.php
", "inscription_cours/index.html.twig", "C:\\Users\\walid\\Desktop\\Nouveau dossier (2)\\pi2025\\templates\\inscription_cours\\index.html.twig");
========
", "inscription_cours/index.html.twig", "C:\\Users\\Dell\\Desktop\\pi2\\pi2025\\templates\\inscription_cours\\index.html.twig");
>>>>>>>> 8611b6e672bfc92a3280990b1971f5e769fb70aa:var/cache/dev/twig/f2/f22605aaf7046cb8c0d19418e3acc0a0.php
    }
}
