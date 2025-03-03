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

/* instructeur/instrform.html.twig */
<<<<<<<< HEAD:var/cache/dev/twig/b7/b77565e09a8818f5e0588125e0aa3f26.php
class __TwigTemplate_ed00a824dcea4d978cd690088a264e03 extends Template
========
class __TwigTemplate_436c845057c37e7fa049541cb7e95943 extends Template
>>>>>>>> 8611b6e672bfc92a3280990b1971f5e769fb70aa:var/cache/dev/twig/44/44792e4455a698e141e83602cfd10d7e.php
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructeur/instrform.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructeur/instrform.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "instructeur/instrform.html.twig", 1);
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

        yield "Inscription Instructeur";
        
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
        yield "    <div class=\"hero_area\">
        <section class=\"slider_section\">
            <div class=\"slider_bg_box\">
                <div class=\"bg_img_box\">
                    <img src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontOffice/images/slider-bg.jpg"), "html", null, true);
        yield "\" alt=\"\">
                </div>
            </div>
        </section>
    </div>

    <section class=\"contact_section layout_padding\">
        <div class=\"container\">
            <div class=\"heading_container text-center\">
                <h2>Inscription Instructeur</h2>
            </div>

            <div class=\"row justify-content-center\">
                <div class=\"col-md-6\">
                    <div class=\"form_container\">
                        ";
        // line 25
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new RuntimeError('Variable "Form" does not exist.', 25, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

                        ";
        // line 27
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new RuntimeError('Variable "Form" does not exist.', 27, $this->source); })()), "vars", [], "any", false, false, false, 27), "errors", [], "any", false, false, false, 27)) > 0)) {
            // line 28
            yield "                            <div class=\"alert alert-danger\">
                                ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new RuntimeError('Variable "Form" does not exist.', 29, $this->source); })()), "vars", [], "any", false, false, false, 29), "errors", [], "any", false, false, false, 29));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 30
                yield "                                    <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 30), "html", null, true);
                yield "</p>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            yield "                            </div>
                        ";
        }
        // line 34
        yield "
                        <div class=\"form-group\">
                            ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instrForm"]) || array_key_exists("instrForm", $context) ? $context["instrForm"] : (function () { throw new RuntimeError('Variable "instrForm" does not exist.', 36, $this->source); })()), "nom", [], "any", false, false, false, 36), 'label', ["label" => "Nom"]);
        yield "
                            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instrForm"]) || array_key_exists("instrForm", $context) ? $context["instrForm"] : (function () { throw new RuntimeError('Variable "instrForm" does not exist.', 37, $this->source); })()), "nom", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["instrForm"]) || array_key_exists("instrForm", $context) ? $context["instrForm"] : (function () { throw new RuntimeError('Variable "instrForm" does not exist.', 38, $this->source); })()), "nom", [], "any", false, false, false, 38), 'errors');
        yield "
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new RuntimeError('Variable "Form" does not exist.', 42, $this->source); })()), "prenom", [], "any", false, false, false, 42), 'label', ["label" => "Prénom"]);
        yield "
                            ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new RuntimeError('Variable "Form" does not exist.', 43, $this->source); })()), "prenom", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new RuntimeError('Variable "Form" does not exist.', 44, $this->source); })()), "prenom", [], "any", false, false, false, 44), 'errors');
        yield "
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new RuntimeError('Variable "Form" does not exist.', 48, $this->source); })()), "email", [], "any", false, false, false, 48), 'label', ["label" => "Email"]);
        yield "
                            ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new RuntimeError('Variable "Form" does not exist.', 49, $this->source); })()), "email", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new RuntimeError('Variable "Form" does not exist.', 50, $this->source); })()), "email", [], "any", false, false, false, 50), 'errors');
        yield "
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new RuntimeError('Variable "Form" does not exist.', 54, $this->source); })()), "password", [], "any", false, false, false, 54), 'label', ["label" => "Mot de passe"]);
        yield "
                            ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new RuntimeError('Variable "Form" does not exist.', 55, $this->source); })()), "password", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new RuntimeError('Variable "Form" does not exist.', 56, $this->source); })()), "password", [], "any", false, false, false, 56), 'errors');
        yield "
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new RuntimeError('Variable "Form" does not exist.', 60, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 60), 'label', ["label" => "Date de naissance"]);
        yield "
                            ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new RuntimeError('Variable "Form" does not exist.', 61, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new RuntimeError('Variable "Form" does not exist.', 62, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 62), 'errors');
        yield "
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new RuntimeError('Variable "Form" does not exist.', 66, $this->source); })()), "cv", [], "any", false, false, false, 66), 'label', ["label" => "CV"]);
        yield "
                            ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new RuntimeError('Variable "Form" does not exist.', 67, $this->source); })()), "cv", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new RuntimeError('Variable "Form" does not exist.', 68, $this->source); })()), "cv", [], "any", false, false, false, 68), 'errors');
        yield "
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new RuntimeError('Variable "Form" does not exist.', 72, $this->source); })()), "image", [], "any", false, false, false, 72), 'label', ["label" => "Photo de profil"]);
        yield "
                            ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new RuntimeError('Variable "Form" does not exist.', 73, $this->source); })()), "image", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new RuntimeError('Variable "Form" does not exist.', 74, $this->source); })()), "image", [], "any", false, false, false, 74), 'errors');
        yield "
                        </div>

                        <div class=\"btn_box text-center\">
                            <button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button>
                        </div>

                        ";
        // line 81
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new RuntimeError('Variable "Form" does not exist.', 81, $this->source); })()), 'form_end');
        yield "
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
        return "instructeur/instrform.html.twig";
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
        return array (  263 => 81,  253 => 74,  249 => 73,  245 => 72,  238 => 68,  234 => 67,  230 => 66,  223 => 62,  219 => 61,  215 => 60,  208 => 56,  204 => 55,  200 => 54,  193 => 50,  189 => 49,  185 => 48,  178 => 44,  174 => 43,  170 => 42,  163 => 38,  159 => 37,  155 => 36,  151 => 34,  147 => 32,  138 => 30,  134 => 29,  131 => 28,  129 => 27,  124 => 25,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription Instructeur{% endblock %}

{% block body %}
    <div class=\"hero_area\">
        <section class=\"slider_section\">
            <div class=\"slider_bg_box\">
                <div class=\"bg_img_box\">
                    <img src=\"{{ asset('frontOffice/images/slider-bg.jpg') }}\" alt=\"\">
                </div>
            </div>
        </section>
    </div>

    <section class=\"contact_section layout_padding\">
        <div class=\"container\">
            <div class=\"heading_container text-center\">
                <h2>Inscription Instructeur</h2>
            </div>

            <div class=\"row justify-content-center\">
                <div class=\"col-md-6\">
                    <div class=\"form_container\">
                        {{ form_start(Form, {'attr': {'novalidate': 'novalidate'}}) }}

                        {% if Form.vars.errors|length > 0 %}
                            <div class=\"alert alert-danger\">
                                {% for error in Form.vars.errors %}
                                    <p>{{ error.message }}</p>
                                {% endfor %}
                            </div>
                        {% endif %}

                        <div class=\"form-group\">
                            {{ form_label(instrForm.nom, 'Nom') }}
                            {{ form_widget(instrForm.nom, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(instrForm.nom) }}
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(Form.prenom, 'Prénom') }}
                            {{ form_widget(Form.prenom, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(Form.prenom) }}
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(Form.email, 'Email') }}
                            {{ form_widget(Form.email, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(Form.email) }}
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(Form.password, 'Mot de passe') }}
                            {{ form_widget(Form.password, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(Form.password) }}
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(Form.date_de_naissance, 'Date de naissance') }}
                            {{ form_widget(Form.date_de_naissance, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(Form.date_de_naissance) }}
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(Form.cv, 'CV') }}
                            {{ form_widget(Form.cv, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(Form.cv) }}
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(Form.image, 'Photo de profil') }}
                            {{ form_widget(Form.image, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(Form.image) }}
                        </div>

                        <div class=\"btn_box text-center\">
                            <button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button>
                        </div>

                        {{ form_end(Form) }}
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
<<<<<<<< HEAD:var/cache/dev/twig/b7/b77565e09a8818f5e0588125e0aa3f26.php
", "instructeur/instrform.html.twig", "C:\\Users\\walid\\Desktop\\Nouveau dossier (2)\\pi2025\\templates\\instructeur\\instrform.html.twig");
========
", "instructeur/instrform.html.twig", "C:\\Users\\Dell\\Desktop\\pi2\\pi2025\\templates\\instructeur\\instrform.html.twig");
>>>>>>>> 8611b6e672bfc92a3280990b1971f5e769fb70aa:var/cache/dev/twig/44/44792e4455a698e141e83602cfd10d7e.php
    }
}
