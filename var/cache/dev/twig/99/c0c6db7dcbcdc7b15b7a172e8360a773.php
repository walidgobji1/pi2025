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

/* formation/_form.html.twig */
<<<<<<<< HEAD:var/cache/dev/twig/99/c0c6db7dcbcdc7b15b7a172e8360a773.php
class __TwigTemplate_432b5f40cb85fccd97104eeff676fc94 extends Template
========
class __TwigTemplate_66228ea780c066feb25f678de0645883 extends Template
>>>>>>>> 8611b6e672bfc92a3280990b1971f5e769fb70aa:var/cache/dev/twig/80/80428745d3610010cf60da9db2c99dfa.php
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

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/_form.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

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

        // line 2
        yield "<div class=\"form-container\">
    <h2 class=\"form-title\">📂 ";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 3, $this->source); })()), "Ajouter")) : ("Ajouter")), "html", null, true);
        yield " une formation</h2>

    <div class=\"form-card\">
        ";
        // line 6
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

        <!-- Gestion des erreurs globales -->
        ";
        // line 9
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "vars", [], "any", false, false, false, 9), "errors", [], "any", false, false, false, 9)) > 0)) {
            // line 10
            yield "            <div class=\"form-errors\">
                <ul>
                    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "vars", [], "any", false, false, false, 12), "errors", [], "any", false, false, false, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 13
                yield "                        <li>⚠️ ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 13), "html", null, true);
                yield "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            yield "                </ul>
            </div>
        ";
        }
        // line 18
        yield "
        <!-- Ajout des autres champs (avant l'image) -->
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 21
            yield "            ";
            if ( !($context["field"] === CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "imageFile", [], "any", false, false, false, 21))) {
                // line 22
                yield "                ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                yield "
            ";
            }
            // line 24
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "
        <!-- Ajout du champ image en dernier -->
        ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "imageFile", [], "any", false, false, false, 27), 'row');
        yield "

        <!-- Bouton de soumission à la fin -->
        <button type=\"submit\" class=\"submit-button\">💾 ";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 30, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "</button>

        ";
        // line 32
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'form_end');
        yield "
    </div>
</div>

<!-- Ajout du style -->
<style>
    .form-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        background-color: #f4f7fa;
        height: 100vh;
        justify-content: center;
    }

    .form-title {
        font-size: 20px;
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 15px;
        text-align: center;
    }

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

    .form-group {
        margin-bottom: 12px;
    }

    .form-label {
        font-size: 14px;
        font-weight: 500;
        color: #333;
        margin-bottom: 6px;
        display: block;
    }

    .form-control, .form-textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 13px;
        background: #fafafa;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        transition: border-color 0.3s ease;
    }

    .form-control:focus, .form-textarea:focus {
        border-color: #3498db;
        outline: none;
    }

    .form-textarea {
        height: 80px;
        resize: none;
    }

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

    .submit-button:hover {
        background: linear-gradient(135deg, #1f78a4, #5e3bb3);
    }

    .error-message {
        color: red;
        font-size: 12px;
        margin-top: 4px;
    }

    .form-errors ul {
        color: red;
        font-size: 12px;
        padding-left: 15px;
    }

    .form-errors li {
        list-style-type: disc;
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
        return "formation/_form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  149 => 32,  144 => 30,  138 => 27,  134 => 25,  128 => 24,  122 => 22,  119 => 21,  115 => 20,  111 => 18,  106 => 15,  97 => 13,  93 => 12,  89 => 10,  87 => 9,  81 => 6,  75 => 3,  72 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block body %}
<div class=\"form-container\">
    <h2 class=\"form-title\">📂 {{ button_label|default('Ajouter') }} une formation</h2>

    <div class=\"form-card\">
        {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

        <!-- Gestion des erreurs globales -->
        {% if form.vars.errors|length > 0 %}
            <div class=\"form-errors\">
                <ul>
                    {% for error in form.vars.errors %}
                        <li>⚠️ {{ error.message }}</li>
                    {% endfor %}
                </ul>
            </div>
        {% endif %}

        <!-- Ajout des autres champs (avant l'image) -->
        {% for field in form %}
            {% if field is not same as(form.imageFile) %}
                {{ form_row(field) }}
            {% endif %}
        {% endfor %}

        <!-- Ajout du champ image en dernier -->
        {{ form_row(form.imageFile) }}

        <!-- Bouton de soumission à la fin -->
        <button type=\"submit\" class=\"submit-button\">💾 {{ button_label|default('Enregistrer') }}</button>

        {{ form_end(form) }}
    </div>
</div>

<!-- Ajout du style -->
<style>
    .form-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        background-color: #f4f7fa;
        height: 100vh;
        justify-content: center;
    }

    .form-title {
        font-size: 20px;
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 15px;
        text-align: center;
    }

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

    .form-group {
        margin-bottom: 12px;
    }

    .form-label {
        font-size: 14px;
        font-weight: 500;
        color: #333;
        margin-bottom: 6px;
        display: block;
    }

    .form-control, .form-textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 13px;
        background: #fafafa;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        transition: border-color 0.3s ease;
    }

    .form-control:focus, .form-textarea:focus {
        border-color: #3498db;
        outline: none;
    }

    .form-textarea {
        height: 80px;
        resize: none;
    }

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

    .submit-button:hover {
        background: linear-gradient(135deg, #1f78a4, #5e3bb3);
    }

    .error-message {
        color: red;
        font-size: 12px;
        margin-top: 4px;
    }

    .form-errors ul {
        color: red;
        font-size: 12px;
        padding-left: 15px;
    }

    .form-errors li {
        list-style-type: disc;
    }
</style>
{% endblock %}
<<<<<<<< HEAD:var/cache/dev/twig/99/c0c6db7dcbcdc7b15b7a172e8360a773.php
", "formation/_form.html.twig", "C:\\Users\\walid\\Desktop\\Nouveau dossier (2)\\pi2025\\templates\\formation\\_form.html.twig");
========
", "formation/_form.html.twig", "C:\\Users\\Dell\\Desktop\\pi2\\pi2025\\templates\\formation\\_form.html.twig");
>>>>>>>> 8611b6e672bfc92a3280990b1971f5e769fb70aa:var/cache/dev/twig/80/80428745d3610010cf60da9db2c99dfa.php
    }
}
