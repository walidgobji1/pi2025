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

/* promotion/create.html.twig */
class __TwigTemplate_4f8151be264eea5a4ee1cab1cd25d85f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "promotion/create.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "promotion/create.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "promotion/create.html.twig", 1);
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

        yield "Créer une nouvelle promotion";
        
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
        yield "    <style>
        /* Centrage du formulaire */
        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            background-color: #f4f7fa;
            height: 100vh;
            justify-content: center;
        }

        /* Titre du formulaire */
        .form-title {
            font-size: 20px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
            text-align: center;
        }

        /* Carte du formulaire */
        .form-card {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
            display: flex;
            flex-direction: column;
        }

        /* Groupes de champs */
        .form-group {
            margin-bottom: 12px;
        }

        /* Labels */
        .form-label {
            font-size: 14px;
            font-weight: 500;
            color: #333;
            margin-bottom: 6px;
            display: block;
        }

        /* Champs de formulaire */
        .form-control,
        .form-textarea,
        .form-select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 13px;
            background: #fafafa;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            transition: border-color 0.3s ease;
        }

        /* Focus sur les champs */
        .form-control:focus,
        .form-textarea:focus,
        .form-select:focus {
            border-color: #3498db;
            outline: none;
        }

        /* Textarea spécifique */
        .form-textarea {
            height: 80px;
            resize: none;
        }

        /* Bouton de soumission */
        .submit-button {
            padding: 10px;
            font-size: 14px;
            font-weight: bold;
            color: white;
            background: linear-gradient(135deg, #2980b9, #6c5ce7);
            border: none;
            border-radius: 6px;
            width: 100%;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        /* Effet hover sur le bouton */
        .submit-button:hover {
            background: linear-gradient(135deg, #1f78a4, #5e3bb3);
        }

        /* Messages d'erreur */
        .error-message {
            color: red;
            font-size: 12px;
            margin-top: 4px;
        }

        /* Liste des erreurs */
        .form-errors ul {
            color: red;
            font-size: 12px;
            padding-left: 15px;
        }

        .form-errors li {
            list-style-type: disc;
        }
    </style>

   <div class=\"form-container\">
    <div class=\"form-card\">

        ";
        // line 122
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), 'form_start');
        yield "

        <!-- Messages d'erreur généraux -->
        ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 125, $this->source); })()), "flashes", ["error"], "method", false, false, false, 125));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 126
            yield "            <div class=\"alert alert-danger\">
                ";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        yield "
        <div class=\"card-body\">
            <h5 class=\"form-title\">Formulaire de Promotion</h5>

            <!-- Code Promo -->
            <div class=\"form-group\">
                ";
        // line 136
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "codePromo", [], "any", false, false, false, 136), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Code Promo"]);
        yield "
                ";
        // line 137
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "codePromo", [], "any", false, false, false, 137), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                <!-- Affichage des erreurs spécifiques -->
                <div class=\"form-errors\">
                    ";
        // line 140
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "codePromo", [], "any", false, false, false, 140), 'errors');
        yield "
                </div>
            </div>

            <!-- Description -->
            <div class=\"form-group\">
                ";
        // line 146
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "description", [], "any", false, false, false, 146), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Description"]);
        yield "
                ";
        // line 147
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "description", [], "any", false, false, false, 147), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                <!-- Affichage des erreurs spécifiques -->
                <div class=\"form-errors\">
                    ";
        // line 150
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "description", [], "any", false, false, false, 150), 'errors');
        yield "
                </div>
            </div>

            <!-- Remise -->
            <div class=\"form-group\">
                ";
        // line 156
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()), "remise", [], "any", false, false, false, 156), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Remise (%)"]);
        yield "
                ";
        // line 157
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), "remise", [], "any", false, false, false, 157), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                <!-- Affichage des erreurs spécifiques -->
                <div class=\"form-errors\">
                    ";
        // line 160
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "remise", [], "any", false, false, false, 160), 'errors');
        yield "
                </div>
            </div>

            <!-- Date d'Expiration -->
            <div class=\"form-group\">
                ";
        // line 166
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "dateExpiration", [], "any", false, false, false, 166), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date d’Expiration"]);
        yield "
                ";
        // line 167
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), "dateExpiration", [], "any", false, false, false, 167), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                <!-- Affichage des erreurs spécifiques -->
                <div class=\"form-errors\">
                    ";
        // line 170
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "dateExpiration", [], "any", false, false, false, 170), 'errors');
        yield "
                </div>
            </div>
            
            ";
        // line 174
        if ((array_key_exists("eligibleApprenants", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["eligibleApprenants"]) || array_key_exists("eligibleApprenants", $context) ? $context["eligibleApprenants"] : (function () { throw new RuntimeError('Variable "eligibleApprenants" does not exist.', 174, $this->source); })())) > 0))) {
            // line 175
            yield "         <div class=\"form-group\">
        ";
            // line 176
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "apprenant", [], "any", false, false, false, 176), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Apprenant (ayant deux inscriptions payées)"]);
            yield "
        ";
            // line 177
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), "apprenant", [], "any", false, false, false, 177), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
        <div class=\"form-errors\">
            ";
            // line 179
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), "apprenant", [], "any", false, false, false, 179), 'errors');
            yield "
        </div>
    </div>
       ";
        }
        // line 183
        yield "
            <!-- Bouton de soumission -->
            <div class=\"text-center form-group\">
                <button type=\"submit\" class=\"submit-button\">Créer</button>
            </div>

        ";
        // line 189
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 189, $this->source); })()), 'form_end');
        yield "

       

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
        return "promotion/create.html.twig";
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
        return array (  351 => 189,  343 => 183,  336 => 179,  331 => 177,  327 => 176,  324 => 175,  322 => 174,  315 => 170,  309 => 167,  305 => 166,  296 => 160,  290 => 157,  286 => 156,  277 => 150,  271 => 147,  267 => 146,  258 => 140,  252 => 137,  248 => 136,  240 => 130,  231 => 127,  228 => 126,  224 => 125,  218 => 122,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseAdmin.html.twig' %} 

{% block title %}Créer une nouvelle promotion{% endblock %}

{% block body %}
    <style>
        /* Centrage du formulaire */
        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            background-color: #f4f7fa;
            height: 100vh;
            justify-content: center;
        }

        /* Titre du formulaire */
        .form-title {
            font-size: 20px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
            text-align: center;
        }

        /* Carte du formulaire */
        .form-card {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
            display: flex;
            flex-direction: column;
        }

        /* Groupes de champs */
        .form-group {
            margin-bottom: 12px;
        }

        /* Labels */
        .form-label {
            font-size: 14px;
            font-weight: 500;
            color: #333;
            margin-bottom: 6px;
            display: block;
        }

        /* Champs de formulaire */
        .form-control,
        .form-textarea,
        .form-select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 13px;
            background: #fafafa;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            transition: border-color 0.3s ease;
        }

        /* Focus sur les champs */
        .form-control:focus,
        .form-textarea:focus,
        .form-select:focus {
            border-color: #3498db;
            outline: none;
        }

        /* Textarea spécifique */
        .form-textarea {
            height: 80px;
            resize: none;
        }

        /* Bouton de soumission */
        .submit-button {
            padding: 10px;
            font-size: 14px;
            font-weight: bold;
            color: white;
            background: linear-gradient(135deg, #2980b9, #6c5ce7);
            border: none;
            border-radius: 6px;
            width: 100%;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        /* Effet hover sur le bouton */
        .submit-button:hover {
            background: linear-gradient(135deg, #1f78a4, #5e3bb3);
        }

        /* Messages d'erreur */
        .error-message {
            color: red;
            font-size: 12px;
            margin-top: 4px;
        }

        /* Liste des erreurs */
        .form-errors ul {
            color: red;
            font-size: 12px;
            padding-left: 15px;
        }

        .form-errors li {
            list-style-type: disc;
        }
    </style>

   <div class=\"form-container\">
    <div class=\"form-card\">

        {{ form_start(form) }}

        <!-- Messages d'erreur généraux -->
        {% for message in app.flashes('error') %}
            <div class=\"alert alert-danger\">
                {{ message }}
            </div>
        {% endfor %}

        <div class=\"card-body\">
            <h5 class=\"form-title\">Formulaire de Promotion</h5>

            <!-- Code Promo -->
            <div class=\"form-group\">
                {{ form_label(form.codePromo, 'Code Promo', {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.codePromo, {'attr': {'class': 'form-control'}}) }}
                <!-- Affichage des erreurs spécifiques -->
                <div class=\"form-errors\">
                    {{ form_errors(form.codePromo) }}
                </div>
            </div>

            <!-- Description -->
            <div class=\"form-group\">
                {{ form_label(form.description, 'Description', {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.description, {'attr': {'class': 'form-control'}}) }}
                <!-- Affichage des erreurs spécifiques -->
                <div class=\"form-errors\">
                    {{ form_errors(form.description) }}
                </div>
            </div>

            <!-- Remise -->
            <div class=\"form-group\">
                {{ form_label(form.remise, 'Remise (%)', {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.remise, {'attr': {'class': 'form-control'}}) }}
                <!-- Affichage des erreurs spécifiques -->
                <div class=\"form-errors\">
                    {{ form_errors(form.remise) }}
                </div>
            </div>

            <!-- Date d'Expiration -->
            <div class=\"form-group\">
                {{ form_label(form.dateExpiration, 'Date d’Expiration', {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.dateExpiration, {'attr': {'class': 'form-control'}}) }}
                <!-- Affichage des erreurs spécifiques -->
                <div class=\"form-errors\">
                    {{ form_errors(form.dateExpiration) }}
                </div>
            </div>
            
            {% if eligibleApprenants is defined and eligibleApprenants|length > 0 %}
         <div class=\"form-group\">
        {{ form_label(form.apprenant, 'Apprenant (ayant deux inscriptions payées)', {'label_attr': {'class': 'form-label'}}) }}
        {{ form_widget(form.apprenant, {'attr': {'class': 'form-control'}}) }}
        <div class=\"form-errors\">
            {{ form_errors(form.apprenant) }}
        </div>
    </div>
       {% endif %}

            <!-- Bouton de soumission -->
            <div class=\"text-center form-group\">
                <button type=\"submit\" class=\"submit-button\">Créer</button>
            </div>

        {{ form_end(form) }}

       

    </div>
   </div>

{% endblock %}
", "promotion/create.html.twig", "C:\\Users\\walid\\Desktop\\finalPI\\pi2025\\templates\\promotion\\create.html.twig");
    }
}
