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

        yield "Détails de l'Inscription";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <style>
        /* Global */
        body {
            background: linear-gradient(135deg, #f3f4f6, #dfe4ea);
            font-family: 'Poppins', sans-serif;
        }

        .container {
            max-width: 700px;
            margin: 50px auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.15);
        }

        /* Titre */
        h1 {
            font-size: 2rem;
            font-weight: 700;
            color: #2c3e50;
            text-align: center;
            margin-bottom: 25px;
            text-transform: uppercase;
        }

        /* Table */
        .table {
            width: 100%;
            border-radius: 10px;
            overflow: hidden;
            border-collapse: collapse;
        }

        .table th, .table td {
            padding: 15px;
            font-size: 1rem;
        }

        .table th {
            background-color: #007bff;
            color: white;
            text-align: left;
            font-weight: 600;
        }

        .table td {
            border-bottom: 1px solid #ddd;
            color: #444;
            font-weight: 500;
        }

        .table tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        /* Status badge */
        .badge {
            padding: 6px 12px;
            font-size: 0.9rem;
            font-weight: bold;
            border-radius: 6px;
            text-transform: uppercase;
        }

        .badge-payé {
            background-color: #28a745;
            color: white;
        }

        .badge-en-attente {
            background-color: #ffc107;
            color: white;
        }

        /* Bouton */
        .btn {
            display: inline-block;
            padding: 12px 24px;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 8px;
            text-decoration: none;
            text-align: center;
            transition: all 0.3s ease;
            margin-top: 20px;
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            transform: translateY(-2px);
        }

        /* Centrage */
        .text-center {
            text-align: center;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 112
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

        // line 113
        yield "    <div class=\"container\">
        <h1>Inscription Détails</h1>

        <table class=\"table\">
            <tbody>
                <tr>
                    <th>Id</th>
                    <td>";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inscription_cour"]) || array_key_exists("inscription_cour", $context) ? $context["inscription_cour"] : (function () { throw new RuntimeError('Variable "inscription_cour" does not exist.', 120, $this->source); })()), "id", [], "any", false, false, false, 120), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>
                        ";
        // line 125
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["inscription_cour"]) || array_key_exists("inscription_cour", $context) ? $context["inscription_cour"] : (function () { throw new RuntimeError('Variable "inscription_cour" does not exist.', 125, $this->source); })()), "status", [], "any", false, false, false, 125) == "Payé")) {
            // line 126
            yield "                            <span class=\"badge badge-payé\">Payé</span>
                        ";
        } else {
            // line 128
            yield "                            <span class=\"badge badge-en-attente\">En attente</span>
                        ";
        }
        // line 130
        yield "                    </td>
                </tr>
                <tr>
                    <th>Date d'Inscription</th>
                    <td>";
        // line 134
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["inscription_cour"]) || array_key_exists("inscription_cour", $context) ? $context["inscription_cour"] : (function () { throw new RuntimeError('Variable "inscription_cour" does not exist.', 134, $this->source); })()), "dateInscreption", [], "any", false, false, false, 134)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inscription_cour"]) || array_key_exists("inscription_cour", $context) ? $context["inscription_cour"] : (function () { throw new RuntimeError('Variable "inscription_cour" does not exist.', 134, $this->source); })()), "dateInscreption", [], "any", false, false, false, 134), "Y-m-d H:i:s"), "html", null, true)) : ("-"));
        yield "</td>
                </tr>
                <tr>
                    <th>Montant</th>
                    <td>";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inscription_cour"]) || array_key_exists("inscription_cour", $context) ? $context["inscription_cour"] : (function () { throw new RuntimeError('Variable "inscription_cour" does not exist.', 138, $this->source); })()), "montant", [], "any", false, false, false, 138), "html", null, true);
        yield " €</td>
                </tr>
                <tr>
                    <th>Type de Paiement</th>
                    <td>";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inscription_cour"]) || array_key_exists("inscription_cour", $context) ? $context["inscription_cour"] : (function () { throw new RuntimeError('Variable "inscription_cour" does not exist.', 142, $this->source); })()), "typePaiement", [], "any", false, false, false, 142), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Nom de l'Apprenant</th>
                    <td>";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inscription_cour"]) || array_key_exists("inscription_cour", $context) ? $context["inscription_cour"] : (function () { throw new RuntimeError('Variable "inscription_cour" does not exist.', 146, $this->source); })()), "nomApprenant", [], "any", false, false, false, 146), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Nom de la Formation</th>
                    <td>";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inscription_cour"]) || array_key_exists("inscription_cour", $context) ? $context["inscription_cour"] : (function () { throw new RuntimeError('Variable "inscription_cour" does not exist.', 150, $this->source); })()), "nomFormation", [], "any", false, false, false, 150), "html", null, true);
        yield "</td>
                </tr>
            </tbody>
        </table>

        <div class=\"text-center\">
            <a href=\"";
        // line 156
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscription_cours_index");
        yield "\" class=\"btn btn-primary\">Retour à la liste des inscriptions</a>
        </div>
    </div>
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
        return array (  299 => 156,  290 => 150,  283 => 146,  276 => 142,  269 => 138,  262 => 134,  256 => 130,  252 => 128,  248 => 126,  246 => 125,  238 => 120,  229 => 113,  216 => 112,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de l'Inscription{% endblock %}

{% block head %}
    <style>
        /* Global */
        body {
            background: linear-gradient(135deg, #f3f4f6, #dfe4ea);
            font-family: 'Poppins', sans-serif;
        }

        .container {
            max-width: 700px;
            margin: 50px auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.15);
        }

        /* Titre */
        h1 {
            font-size: 2rem;
            font-weight: 700;
            color: #2c3e50;
            text-align: center;
            margin-bottom: 25px;
            text-transform: uppercase;
        }

        /* Table */
        .table {
            width: 100%;
            border-radius: 10px;
            overflow: hidden;
            border-collapse: collapse;
        }

        .table th, .table td {
            padding: 15px;
            font-size: 1rem;
        }

        .table th {
            background-color: #007bff;
            color: white;
            text-align: left;
            font-weight: 600;
        }

        .table td {
            border-bottom: 1px solid #ddd;
            color: #444;
            font-weight: 500;
        }

        .table tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        /* Status badge */
        .badge {
            padding: 6px 12px;
            font-size: 0.9rem;
            font-weight: bold;
            border-radius: 6px;
            text-transform: uppercase;
        }

        .badge-payé {
            background-color: #28a745;
            color: white;
        }

        .badge-en-attente {
            background-color: #ffc107;
            color: white;
        }

        /* Bouton */
        .btn {
            display: inline-block;
            padding: 12px 24px;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 8px;
            text-decoration: none;
            text-align: center;
            transition: all 0.3s ease;
            margin-top: 20px;
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            transform: translateY(-2px);
        }

        /* Centrage */
        .text-center {
            text-align: center;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1>Inscription Détails</h1>

        <table class=\"table\">
            <tbody>
                <tr>
                    <th>Id</th>
                    <td>{{ inscription_cour.id }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>
                        {% if inscription_cour.status == 'Payé' %}
                            <span class=\"badge badge-payé\">Payé</span>
                        {% else %}
                            <span class=\"badge badge-en-attente\">En attente</span>
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <th>Date d'Inscription</th>
                    <td>{{ inscription_cour.dateInscreption ? inscription_cour.dateInscreption|date('Y-m-d H:i:s') : '-' }}</td>
                </tr>
                <tr>
                    <th>Montant</th>
                    <td>{{ inscription_cour.montant }} €</td>
                </tr>
                <tr>
                    <th>Type de Paiement</th>
                    <td>{{ inscription_cour.typePaiement }}</td>
                </tr>
                <tr>
                    <th>Nom de l'Apprenant</th>
                    <td>{{ inscription_cour.nomApprenant }}</td>
                </tr>
                <tr>
                    <th>Nom de la Formation</th>
                    <td>{{ inscription_cour.nomFormation }}</td>
                </tr>
            </tbody>
        </table>

        <div class=\"text-center\">
            <a href=\"{{ path('app_inscription_cours_index') }}\" class=\"btn btn-primary\">Retour à la liste des inscriptions</a>
        </div>
    </div>
{% endblock %}
", "inscription_cours/show.html.twig", "C:\\Users\\walid\\Desktop\\Nouveau dossier (3)\\pi2025\\templates\\inscription_cours\\show.html.twig");
    }
}
