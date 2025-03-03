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

/* promotion/edit.html.twig */
<<<<<<<< HEAD:var/cache/dev/twig/5f/5f2739fc49392ffe9d5dbb74f98a0d10.php
class __TwigTemplate_bfbb1e08943877356f65ea03a1ff3d38 extends Template
========
class __TwigTemplate_c3c5ddf29142ffc42a06a2f5c2e1ec78 extends Template
>>>>>>>> 8611b6e672bfc92a3280990b1971f5e769fb70aa:var/cache/dev/twig/13/13b2a3050c5224c8dda49d276e6adb4b.php
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "promotion/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "promotion/edit.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "promotion/edit.html.twig", 1);
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

        yield "Modifier la Promotion";
        
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
        yield "    <section class=\"section\">
        <div class=\"container mt-4\">
            <div class=\"row\">
                <div class=\"col-lg-8 offset-lg-2\">
                    <div class=\"card shadow-lg\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title text-center mb-4 text-uppercase\">Modifier la Promotion</h5>

                            ";
        // line 14
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start');
        yield "

                            <div class=\"mb-3\">
                                ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "codePromo", [], "any", false, false, false, 17), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Code Promo"]);
        yield "
                                <div class=\"input-group\">
                                    <span class=\"input-group-text\"><i class=\"fas fa-tag\"></i></span>
                                    ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "codePromo", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: SUMMER2025", "autocomplete" => "off"]]);
        yield "
                                </div>
                                <div class=\"text-danger\">";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "codePromo", [], "any", false, false, false, 22), 'errors');
        yield "</div>
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "description", [], "any", false, false, false, 26), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Description"]);
        yield "
                                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "description", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: Remise spéciale été"]]);
        yield "
                                <div class=\"text-danger\">";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "description", [], "any", false, false, false, 28), 'errors');
        yield "</div>
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "remise", [], "any", false, false, false, 32), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Remise (%)"]);
        yield "
                                <div class=\"input-group\">
                                    ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "remise", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control", "min" => "0", "max" => "100", "placeholder" => "Ex: 20"]]);
        yield "
                                    <span class=\"input-group-text\">%</span>
                                </div>
                                <div class=\"text-danger\">";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "remise", [], "any", false, false, false, 37), 'errors');
        yield "</div>
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "dateExpiration", [], "any", false, false, false, 41), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date d’expiration"]);
        yield "
                                ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "dateExpiration", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                <div class=\"text-danger\">";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "dateExpiration", [], "any", false, false, false, 43), 'errors');
        yield "</div>
                            </div>

                            <!-- InscriptionCours caché car enregistré automatiquement -->
                            ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "inscriptionCours", [], "any", false, false, false, 47), 'widget', ["attr" => ["type" => "hidden"]]);
        yield "

                            <div class=\"mb-3\">
                                ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "apprenant", [], "any", false, false, false, 50), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Apprenant (ayant deux inscriptions payées)"]);
        yield "
                                ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "apprenant", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-select", "required" => true]]);
        yield "
                                <div class=\"text-danger\">";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "apprenant", [], "any", false, false, false, 52), 'errors');
        yield "</div>
                            </div>

                            <button type=\"submit\" class=\"btn btn-warning w-100 mt-3\">
                                <i class=\"fas fa-save\"></i> Mettre à jour
                            </button>

                            ";
        // line 59
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), 'form_end');
        yield "

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
        return "promotion/edit.html.twig";
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
        return array (  206 => 59,  196 => 52,  192 => 51,  188 => 50,  182 => 47,  175 => 43,  171 => 42,  167 => 41,  160 => 37,  154 => 34,  149 => 32,  142 => 28,  138 => 27,  134 => 26,  127 => 22,  122 => 20,  116 => 17,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Modifier la Promotion{% endblock %}

{% block body %}
    <section class=\"section\">
        <div class=\"container mt-4\">
            <div class=\"row\">
                <div class=\"col-lg-8 offset-lg-2\">
                    <div class=\"card shadow-lg\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title text-center mb-4 text-uppercase\">Modifier la Promotion</h5>

                            {{ form_start(form) }}

                            <div class=\"mb-3\">
                                {{ form_label(form.codePromo, 'Code Promo', {'label_attr': {'class': 'form-label'}}) }}
                                <div class=\"input-group\">
                                    <span class=\"input-group-text\"><i class=\"fas fa-tag\"></i></span>
                                    {{ form_widget(form.codePromo, {'attr': {'class': 'form-control', 'placeholder': 'Ex: SUMMER2025', 'autocomplete': 'off'}}) }}
                                </div>
                                <div class=\"text-danger\">{{ form_errors(form.codePromo) }}</div>
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.description, 'Description', {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.description, {'attr': {'class': 'form-control', 'placeholder': 'Ex: Remise spéciale été'}}) }}
                                <div class=\"text-danger\">{{ form_errors(form.description) }}</div>
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.remise, 'Remise (%)', {'label_attr': {'class': 'form-label'}}) }}
                                <div class=\"input-group\">
                                    {{ form_widget(form.remise, {'attr': {'class': 'form-control', 'min': '0', 'max': '100', 'placeholder': 'Ex: 20'}}) }}
                                    <span class=\"input-group-text\">%</span>
                                </div>
                                <div class=\"text-danger\">{{ form_errors(form.remise) }}</div>
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.dateExpiration, 'Date d’expiration', {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.dateExpiration, {'attr': {'class': 'form-control'}}) }}
                                <div class=\"text-danger\">{{ form_errors(form.dateExpiration) }}</div>
                            </div>

                            <!-- InscriptionCours caché car enregistré automatiquement -->
                            {{ form_widget(form.inscriptionCours, {'attr': {'type': 'hidden'}}) }}

                            <div class=\"mb-3\">
                                {{ form_label(form.apprenant, 'Apprenant (ayant deux inscriptions payées)', {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.apprenant, {'attr': {'class': 'form-select', 'required': true}}) }}
                                <div class=\"text-danger\">{{ form_errors(form.apprenant) }}</div>
                            </div>

                            <button type=\"submit\" class=\"btn btn-warning w-100 mt-3\">
                                <i class=\"fas fa-save\"></i> Mettre à jour
                            </button>

                            {{ form_end(form) }}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
<<<<<<<< HEAD:var/cache/dev/twig/5f/5f2739fc49392ffe9d5dbb74f98a0d10.php
", "promotion/edit.html.twig", "C:\\Users\\walid\\Desktop\\Nouveau dossier (2)\\pi2025\\templates\\promotion\\edit.html.twig");
========
", "promotion/edit.html.twig", "C:\\Users\\Dell\\Desktop\\pi2\\pi2025\\templates\\promotion\\edit.html.twig");
>>>>>>>> 8611b6e672bfc92a3280990b1971f5e769fb70aa:var/cache/dev/twig/13/13b2a3050c5224c8dda49d276e6adb4b.php
    }
}
