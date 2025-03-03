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

/* notification/show.html.twig */
class __TwigTemplate_e34870351fda43b524e8314100dd3130 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "notification/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "notification/show.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "notification/show.html.twig", 1);
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

        yield "Détails de la Notification";
        
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
        yield "    <div class=\"notification-detail-container\">
        <h1 class=\"text-center mb-4\">Détails de la Notification</h1>

        <div class=\"notification-detail-card\">
            <table class=\"table\">
                <tbody>
                    <tr>
                        <th>Id</th>
                        <td>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Titre</th>
                        <td>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 18, $this->source); })()), "titre", [], "any", false, false, false, 18), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Contenu</th>
                        <td>";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 22, $this->source); })()), "contenu", [], "any", false, false, false, 22), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Envoyée le</th>
                        <td>";
        // line 26
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 26, $this->source); })()), "sentAt", [], "any", false, false, false, 26)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 26, $this->source); })()), "sentAt", [], "any", false, false, false, 26), "Y-m-d H:i:s"), "html", null, true)) : ("Non définie"));
        yield "</td>
                    </tr>
                    <tr>
                        <th>Événement Associé</th>
                        <td>
                            ";
        // line 31
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 31, $this->source); })()), "evenement", [], "any", false, false, false, 31)) {
            // line 32
            yield "                                <strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 32, $this->source); })()), "evenement", [], "any", false, false, false, 32), "titre", [], "any", false, false, false, 32), "html", null, true);
            yield "</strong>
                            ";
        } else {
            // line 34
            yield "                                <span>Aucun événement associé</span>
                            ";
        }
        // line 36
        yield "                        </td>
                    </tr>
                </tbody>
            </table>

            <div class=\"notification-actions\">
                <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notification_index");
        yield "\" class=\"btn\">Retour à la liste</a>
                <a href=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notification_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
        yield "\" class=\"btn\">Modifier</a>
            </div>
        </div>

        <div class=\"delete-form-container\">
            ";
        // line 48
        yield Twig\Extension\CoreExtension::include($this->env, $context, "notification/_delete_form.html.twig");
        yield "
        </div>
    </div>

    <style>
        .notification-detail-container {
            padding: 40px;
            max-width: 700px;
            margin: 0 auto;
        }

        .notification-detail-card {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border: 1px solid #e0e0e0;
        }

        .table th {
            background-color: #f8f8f8;
            color: #333;
        }

        .table td {
            background-color: #fafafa;
        }

        .notification-actions {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #e0e0e0;
            color: #333;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #d0d0d0;
        }

        .delete-form-container {
            margin-top: 20px;
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
        return "notification/show.html.twig";
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
        return array (  171 => 48,  163 => 43,  159 => 42,  151 => 36,  147 => 34,  141 => 32,  139 => 31,  131 => 26,  124 => 22,  117 => 18,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Détails de la Notification{% endblock %}

{% block body %}
    <div class=\"notification-detail-container\">
        <h1 class=\"text-center mb-4\">Détails de la Notification</h1>

        <div class=\"notification-detail-card\">
            <table class=\"table\">
                <tbody>
                    <tr>
                        <th>Id</th>
                        <td>{{ notification.id }}</td>
                    </tr>
                    <tr>
                        <th>Titre</th>
                        <td>{{ notification.titre }}</td>
                    </tr>
                    <tr>
                        <th>Contenu</th>
                        <td>{{ notification.contenu }}</td>
                    </tr>
                    <tr>
                        <th>Envoyée le</th>
                        <td>{{ notification.sentAt ? notification.sentAt|date('Y-m-d H:i:s') : 'Non définie' }}</td>
                    </tr>
                    <tr>
                        <th>Événement Associé</th>
                        <td>
                            {% if notification.evenement %}
                                <strong>{{ notification.evenement.titre }}</strong>
                            {% else %}
                                <span>Aucun événement associé</span>
                            {% endif %}
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class=\"notification-actions\">
                <a href=\"{{ path('app_notification_index') }}\" class=\"btn\">Retour à la liste</a>
                <a href=\"{{ path('app_notification_edit', {'id': notification.id}) }}\" class=\"btn\">Modifier</a>
            </div>
        </div>

        <div class=\"delete-form-container\">
            {{ include('notification/_delete_form.html.twig') }}
        </div>
    </div>

    <style>
        .notification-detail-container {
            padding: 40px;
            max-width: 700px;
            margin: 0 auto;
        }

        .notification-detail-card {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border: 1px solid #e0e0e0;
        }

        .table th {
            background-color: #f8f8f8;
            color: #333;
        }

        .table td {
            background-color: #fafafa;
        }

        .notification-actions {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #e0e0e0;
            color: #333;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #d0d0d0;
        }

        .delete-form-container {
            margin-top: 20px;
        }
    </style>

{% endblock %}
", "notification/show.html.twig", "C:\\Users\\walid\\Desktop\\finalPI\\pi2025\\templates\\notification\\show.html.twig");
    }
}
