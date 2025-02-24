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

/* avis/new.html.twig */
class __TwigTemplate_f7a515d53b931cf240fa55c5a1303bba extends Template
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
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 74
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "avis/new.html.twig", 74);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 76
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

        // line 77
        yield "<div class=\"container mt-5 d-flex justify-content-center\">
    <div class=\"card p-4 shadow-lg\" style=\"max-width: 500px; width: 100%; margin-bottom: 30px;\">
        <h2 class=\"text-center mb-4\">Laisser un avis</h2>

        ";
        // line 81
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

        <div class=\"mb-3\">
            <label class=\"form-label\">Note</label>
            
            <div class=\"rating\">
                ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "note", [], "any", false, false, false, 87), 'widget');
        yield "  <!-- Render the star rating from the form directly -->
                <div class=\"form-errors\">
                    ";
        // line 89
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "note", [], "any", false, false, false, 89), "vars", [], "any", false, false, false, 89), "errors", [], "any", false, false, false, 89)) > 0)) {
            // line 90
            yield "                        <div class=\"error-icon\">⚠️</div>
                        ";
            // line 91
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "note", [], "any", false, false, false, 91), 'errors');
            yield "
                    ";
        }
        // line 93
        yield "                </div>
            </div>
        </div>

        <div class=\"mb-3\">
            ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "commentaire", [], "any", false, false, false, 98), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Votre commentaire"]);
        yield "
            ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "commentaire", [], "any", false, false, false, 99), 'widget', ["attr" => ["id" => "commentaire", "class" => "form-control", "placeholder" => "Écrivez votre avis...", "rows" => 4]]);
        yield "
            <div class=\"form-errors\">
                ";
        // line 101
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "commentaire", [], "any", false, false, false, 101), "vars", [], "any", false, false, false, 101), "errors", [], "any", false, false, false, 101)) > 0)) {
            // line 102
            yield "                    <div class=\"error-icon\">⚠️</div>
                    ";
            // line 103
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "commentaire", [], "any", false, false, false, 103), 'errors');
            yield "
                ";
        }
        // line 105
        yield "            </div>
        </div>

  
<div class=\"d-flex flex-column align-items-center\">
    <button type=\"submit\" class=\"btn custom-red w-50 py-2 mb-3\">Envoyer</button>
<a href=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_index", ["formationId" => (isset($context["formationId"]) || array_key_exists("formationId", $context) ? $context["formationId"] : (function () { throw new RuntimeError('Variable "formationId" does not exist.', 111, $this->source); })())]), "html", null, true);
        yield "\" class=\"btn btn-secondary w-50\">
    Liste Avis
</a>
</div>



        ";
        // line 118
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), 'form_end');
        yield "
    </div>
</div>

";
        // line 122
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

        // line 123
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
        return "avis/new.html.twig";
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
        return array (  181 => 123,  158 => 122,  151 => 118,  141 => 111,  133 => 105,  128 => 103,  125 => 102,  123 => 101,  118 => 99,  114 => 98,  107 => 93,  102 => 91,  99 => 90,  97 => 89,  92 => 87,  83 => 81,  77 => 77,  64 => 76,  41 => 74,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# {% extends 'base.html.twig' %}

{% block title %}Ajouter un Avis{% endblock %}

{% block body %}
    <h1>Donnez votre avis sur la formation</h1>

    {{ form_start(form) }}
    
    <div>
        {{ form_label(form.note) }}
        {{ form_widget(form.note) }}
        <div>
            {{ form_errors(form.note) }}
        </div>
    </div>

    <div>
        {{ form_label(form.commentaire) }}
        {{ form_widget(form.commentaire) }}
        <div>
            {{ form_errors(form.commentaire) }}
        </div>
    </div>

    <button type=\"submit\">Envoyer</button>
    
    {{ form_end(form) }}
{% endblock %}

{% block javascripts %}
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script>
\$(document).ready(function() {
    // Handle form submission
    \$(\"#avisForm\").submit(function(event) {
        event.preventDefault();  // Prevent the default form submission (page reload)

        // Get the CSRF token and form data
        const csrfToken = \$(\"input[name='_token']\").val();
        const formData = \$(this).serialize();

        // Send AJAX request to submit the form
        \$.ajax({
            type: \"POST\",
            url: \$(this).attr('action'),  // Get the form action URL
            data: formData + \"&_token=\" + csrfToken,  // Add CSRF token to the data
            success: function(response) {
                // Update the reviews list without reloading the page
                if (response.status === 'success') {
                    // Display success message
                    \$(\"#avisMessage\").html(\"<p style='color: green;'>\" + response.message + \"</p>\");

                    // Update the reviews list with the new review
                    \$(\"#avisList\").html(response.html);  // Assuming you return the updated reviews HTML in response
                } else {
                    // Display error message
                    \$(\"#avisMessage\").html(\"<p style='color: red;'>\" + response.message + \"</p>\");
                }
            },
            error: function(xhr, status, error) {
                // Handle any errors
                console.log(\"Error:\", error);
                \$(\"#avisMessage\").html(\"<p style='color: red;'>Erreur lors de l'envoi de l'avis. Veuillez réessayer.</p>\");
            }
        });
    });
});


    </script>
{% endblock %} #}

{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container mt-5 d-flex justify-content-center\">
    <div class=\"card p-4 shadow-lg\" style=\"max-width: 500px; width: 100%; margin-bottom: 30px;\">
        <h2 class=\"text-center mb-4\">Laisser un avis</h2>

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
            {{ form_label(form.commentaire, 'Votre commentaire', {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.commentaire, {'attr': {'id': 'commentaire', 'class': 'form-control' ,'placeholder': 'Écrivez votre avis...', 'rows': 4}}) }}
            <div class=\"form-errors\">
                {% if form.commentaire.vars.errors|length > 0 %}
                    <div class=\"error-icon\">⚠️</div>
                    {{ form_errors(form.commentaire) }}
                {% endif %}
            </div>
        </div>

  
<div class=\"d-flex flex-column align-items-center\">
    <button type=\"submit\" class=\"btn custom-red w-50 py-2 mb-3\">Envoyer</button>
<a href=\"{{ path('app_avis_index', {'formationId': formationId}) }}\" class=\"btn btn-secondary w-50\">
    Liste Avis
</a>
</div>



        {{ form_end(form) }}
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
    </style>
{% endblock %}
{% endblock %}





", "avis/new.html.twig", "C:\\Users\\walid\\Desktop\\Nouveau dossier\\pi2025\\templates\\avis\\new.html.twig");
    }
}
