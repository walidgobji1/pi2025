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

/* avis/edit.html.twig */
class __TwigTemplate_9b2ec2ba701c75626ea4be39621f7843 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "avis/edit.html.twig", 1);
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

        yield "Edit Avis";
        
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
        yield "<div class=\"container mt-5 d-flex justify-content-center\">
    <div class=\"card p-4 shadow-lg\" style=\"max-width: 500px; width: 100%; margin-bottom: 30px;\">
        <h2 class=\"text-center mb-4\">Modifier l'avis</h2>

        ";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

        <div class=\"mb-3\">
            <label class=\"form-label\">Note</label>
            <div class=\"rating\">
                ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "note", [], "any", false, false, false, 15), 'widget');
        yield "  <!-- Render the star rating from the form directly -->
                <div class=\"form-errors\">
                    ";
        // line 17
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "note", [], "any", false, false, false, 17), "vars", [], "any", false, false, false, 17), "errors", [], "any", false, false, false, 17)) > 0)) {
            // line 18
            yield "                        <div class=\"error-icon\">⚠️</div>
                        ";
            // line 19
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "note", [], "any", false, false, false, 19), 'errors');
            yield "
                    ";
        }
        // line 21
        yield "                </div>
            </div>
        </div>

        <div class=\"mb-3\">
            <!-- Align label and input to the left -->
            ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "commentaire", [], "any", false, false, false, 27), 'label', ["label_attr" => ["class" => "form-label text-start"], "label" => "Votre commentaire"]);
        yield "
            ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "commentaire", [], "any", false, false, false, 28), 'widget', ["attr" => ["id" => "commentaire", "class" => "form-control", "placeholder" => "Écrivez votre avis...", "rows" => 4]]);
        yield "
            <div class=\"form-errors\">
                ";
        // line 30
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "commentaire", [], "any", false, false, false, 30), "vars", [], "any", false, false, false, 30), "errors", [], "any", false, false, false, 30)) > 0)) {
            // line 31
            yield "                    <div class=\"error-icon\">⚠️</div>
                    ";
            // line 32
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "commentaire", [], "any", false, false, false, 32), 'errors');
            yield "
                ";
        }
        // line 34
        yield "            </div>
        </div>

        <div class=\"d-flex flex-column align-items-center\">
            <button type=\"submit\" class=\"btn custom-red w-50 mb-2\">Mettre à jour</button>
            <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_index");
        yield "\" class=\"btn btn-secondary w-50\">Liste Avis</a>
        </div>

        ";
        // line 42
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_end');
        yield "

        <div class=\"d-flex justify-content-center mt-3\">
            <form method=\"post\" action=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["avi"]) || array_key_exists("avi", $context) ? $context["avi"] : (function () { throw new RuntimeError('Variable "avi" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45)]), "html", null, true);
        yield "\" style=\"display: inline;\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["avi"]) || array_key_exists("avi", $context) ? $context["avi"] : (function () { throw new RuntimeError('Variable "avi" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46))), "html", null, true);
        yield "\">
                <button type=\"submit\" class=\"btn btn-danger modern-delete\" aria-label=\"Supprimer\">
                    <i class=\"fas fa-trash-alt\"></i>
                </button>
            </form>
        </div>

    </div>
</div>

";
        // line 56
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

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

        // line 57
        yield "    <style>
        /* Rating Stars */
        .rating input {
            display: none;
        }
        .rating label {
            font-size: 30px;
            color: #ccc;
            cursor: pointer;
            transition: color 0.3s ease;
        }
        .rating input:checked ~ label {
            color: gold;
        }
        .rating label:hover,
        .rating label:hover ~ label {
            color: gold;
        }

        /* Custom Button Style */
        .custom-red {
            background-color: #d52a27;
            border-color: #d52a27;
            color: white;
            font-size: 16px;
            padding: 10px 20px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .custom-red:hover {
            background-color: #b2271f;
            transform: scale(1.05);
        }

        .custom-red:active {
            transform: scale(0.98);
        }

        /* Form Input Styles */
        .form-control {
            border-radius: 8px;
            border: 1px solid #ddd;
            padding: 12px 15px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            border-color: #d52a27;
            box-shadow: 0 0 5px rgba(213, 42, 39, 0.5);
        }

        /* Card Styling */
        .card {
            border-radius: 12px;
        }

        /* Modernized Error Messages */
        .form-errors {
            color: #d52a27;
            font-size: 14px;
            font-weight: 500;
            margin-top: 5px;
            padding-left: 10px;
            position: relative;
        }

        .error-icon {
            font-size: 18px;
            margin-right: 5px;
            vertical-align: middle;
        }

        /* Add margin to the top of the card */
        .container {
            margin-top: 60px;  /* Adjust the top margin of the form container */
        }

        /* Adjust margins for other sections if needed */
        .mb-3 {
            margin-bottom: 10px;  /* Adjust the bottom margin of each form group */
        }

        /* Modern Delete Button */
        .modern-delete {
            background-color: #ff4d4d;
            border: none;
            color: white;
            font-size: 16px;
            padding: 10px 20px;
            border-radius: 8px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px; /* Spacing between icon and text */
        }

        .modern-delete:hover {
            background-color: #cc0000;
            transform: scale(1.05);
        }

        .modern-delete:active {
            transform: scale(0.95);
        }

        /* Align text in the comment section to the left */
        .form-label.text-start {
            text-align: left;
        }

        /* Align comment textarea to the left */
        #commentaire {
            text-align: left;
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
        return "avis/edit.html.twig";
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
        return array (  216 => 57,  193 => 56,  180 => 46,  176 => 45,  170 => 42,  164 => 39,  157 => 34,  152 => 32,  149 => 31,  147 => 30,  142 => 28,  138 => 27,  130 => 21,  125 => 19,  122 => 18,  120 => 17,  115 => 15,  107 => 10,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit Avis{% endblock %}

{% block body %}
<div class=\"container mt-5 d-flex justify-content-center\">
    <div class=\"card p-4 shadow-lg\" style=\"max-width: 500px; width: 100%; margin-bottom: 30px;\">
        <h2 class=\"text-center mb-4\">Modifier l'avis</h2>

        {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

        <div class=\"mb-3\">
            <label class=\"form-label\">Note</label>
            <div class=\"rating\">
                {{ form_widget(form.note) }}  <!-- Render the star rating from the form directly -->
                <div class=\"form-errors\">
                    {% if form.note.vars.errors|length > 0 %}
                        <div class=\"error-icon\">⚠️</div>
                        {{ form_errors(form.note) }}
                    {% endif %}
                </div>
            </div>
        </div>

        <div class=\"mb-3\">
            <!-- Align label and input to the left -->
            {{ form_label(form.commentaire, 'Votre commentaire', {'label_attr': {'class': 'form-label text-start'}}) }}
            {{ form_widget(form.commentaire, {'attr': {'id': 'commentaire', 'class': 'form-control', 'placeholder': 'Écrivez votre avis...', 'rows': 4}}) }}
            <div class=\"form-errors\">
                {% if form.commentaire.vars.errors|length > 0 %}
                    <div class=\"error-icon\">⚠️</div>
                    {{ form_errors(form.commentaire) }}
                {% endif %}
            </div>
        </div>

        <div class=\"d-flex flex-column align-items-center\">
            <button type=\"submit\" class=\"btn custom-red w-50 mb-2\">Mettre à jour</button>
            <a href=\"{{ path('app_avis_index') }}\" class=\"btn btn-secondary w-50\">Liste Avis</a>
        </div>

        {{ form_end(form) }}

        <div class=\"d-flex justify-content-center mt-3\">
            <form method=\"post\" action=\"{{ path('app_avis_delete', {'id': avi.id}) }}\" style=\"display: inline;\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ avi.id) }}\">
                <button type=\"submit\" class=\"btn btn-danger modern-delete\" aria-label=\"Supprimer\">
                    <i class=\"fas fa-trash-alt\"></i>
                </button>
            </form>
        </div>

    </div>
</div>

{% block stylesheets %}
    <style>
        /* Rating Stars */
        .rating input {
            display: none;
        }
        .rating label {
            font-size: 30px;
            color: #ccc;
            cursor: pointer;
            transition: color 0.3s ease;
        }
        .rating input:checked ~ label {
            color: gold;
        }
        .rating label:hover,
        .rating label:hover ~ label {
            color: gold;
        }

        /* Custom Button Style */
        .custom-red {
            background-color: #d52a27;
            border-color: #d52a27;
            color: white;
            font-size: 16px;
            padding: 10px 20px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .custom-red:hover {
            background-color: #b2271f;
            transform: scale(1.05);
        }

        .custom-red:active {
            transform: scale(0.98);
        }

        /* Form Input Styles */
        .form-control {
            border-radius: 8px;
            border: 1px solid #ddd;
            padding: 12px 15px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            border-color: #d52a27;
            box-shadow: 0 0 5px rgba(213, 42, 39, 0.5);
        }

        /* Card Styling */
        .card {
            border-radius: 12px;
        }

        /* Modernized Error Messages */
        .form-errors {
            color: #d52a27;
            font-size: 14px;
            font-weight: 500;
            margin-top: 5px;
            padding-left: 10px;
            position: relative;
        }

        .error-icon {
            font-size: 18px;
            margin-right: 5px;
            vertical-align: middle;
        }

        /* Add margin to the top of the card */
        .container {
            margin-top: 60px;  /* Adjust the top margin of the form container */
        }

        /* Adjust margins for other sections if needed */
        .mb-3 {
            margin-bottom: 10px;  /* Adjust the bottom margin of each form group */
        }

        /* Modern Delete Button */
        .modern-delete {
            background-color: #ff4d4d;
            border: none;
            color: white;
            font-size: 16px;
            padding: 10px 20px;
            border-radius: 8px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px; /* Spacing between icon and text */
        }

        .modern-delete:hover {
            background-color: #cc0000;
            transform: scale(1.05);
        }

        .modern-delete:active {
            transform: scale(0.95);
        }

        /* Align text in the comment section to the left */
        .form-label.text-start {
            text-align: left;
        }

        /* Align comment textarea to the left */
        #commentaire {
            text-align: left;
        }
    </style>
{% endblock %}
{% endblock %}
", "avis/edit.html.twig", "C:\\Users\\walid\\Desktop\\Nouveau dossier\\pi2025\\templates\\avis\\edit.html.twig");
    }
}
