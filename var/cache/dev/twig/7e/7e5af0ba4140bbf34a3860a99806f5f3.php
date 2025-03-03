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

/* home/instructeur_register.html.twig */
class __TwigTemplate_83f6247d110c587dc12450c0fe445531 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/instructeur_register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/instructeur_register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/instructeur_register.html.twig", 1);
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
        // line 26
        yield "                        ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 26, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "enctype" => "multipart/form-data"]]);
        yield "

                        ";
        // line 29
        yield "                        ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 29, $this->source); })()), "vars", [], "any", false, false, false, 29), "errors", [], "any", false, false, false, 29)) > 0)) {
            // line 30
            yield "                            <div class=\"alert alert-danger\">
                                ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 31, $this->source); })()), "vars", [], "any", false, false, false, 31), "errors", [], "any", false, false, false, 31));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 32
                yield "                                    <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 32), "html", null, true);
                yield "</p>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            yield "                            </div>
                        ";
        }
        // line 36
        yield "
                        <div class=\"form-group\">
                            ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 38, $this->source); })()), "nom", [], "any", false, false, false, 38), 'label', ["label" => "Nom"]);
        yield "
                            ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), "nom", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), "nom", [], "any", false, false, false, 40), 'errors');
        yield "
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), "prenom", [], "any", false, false, false, 44), 'label', ["label" => "Prénom"]);
        yield "
                            ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 45, $this->source); })()), "prenom", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 46, $this->source); })()), "prenom", [], "any", false, false, false, 46), 'errors');
        yield "
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 50, $this->source); })()), "email", [], "any", false, false, false, 50), 'label', ["label" => "Email"]);
        yield "
                            ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 51, $this->source); })()), "email", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 52, $this->source); })()), "email", [], "any", false, false, false, 52), 'errors');
        yield "
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 56, $this->source); })()), "password", [], "any", false, false, false, 56), 'label', ["label" => "Mot de passe"]);
        yield "
                            ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 57, $this->source); })()), "password", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 58, $this->source); })()), "password", [], "any", false, false, false, 58), 'errors');
        yield "
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 62, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 62), 'label', ["label" => "Date de naissance"]);
        yield "
                            ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 63, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 64, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 64), 'errors');
        yield "
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 68, $this->source); })()), "cv", [], "any", false, false, false, 68), 'label', ["label" => "CV (PDF)"]);
        yield "
                            <small class=\"text-muted d-block mb-2\">Formats acceptés: PDF (Max 1MB)</small>
                            ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 70, $this->source); })()), "cv", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-control", "accept" => "application/pdf"]]);
        yield "
                            ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 71, $this->source); })()), "cv", [], "any", false, false, false, 71), 'errors');
        yield "

                            ";
        // line 74
        yield "                            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "cv", [], "any", false, false, false, 74))) {
            // line 75
            yield "                                <p class=\"mt-2\"><strong>CV actuel:</strong> <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/cv/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "cv", [], "any", false, false, false, 75))), "html", null, true);
            yield "\" target=\"_blank\">Voir le CV</a></p>
                            ";
        }
        // line 77
        yield "                        </div>

                        <div class=\"form-group\">
                            ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 80, $this->source); })()), "image", [], "any", false, false, false, 80), 'label', ["label" => "Image de profil (JPG, PNG)"]);
        yield "
                            <small class=\"text-muted d-block mb-2\">Formats acceptés: JPG, PNG (Max 1MB)</small>
                            ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 82, $this->source); })()), "image", [], "any", false, false, false, 82), 'widget', ["attr" => ["class" => "form-control", "accept" => "image/png, image/jpeg"]]);
        yield "
                            ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 83, $this->source); })()), "image", [], "any", false, false, false, 83), 'errors');
        yield "

                            ";
        // line 86
        yield "                            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "user", [], "any", false, false, false, 86) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "user", [], "any", false, false, false, 86), "image", [], "any", false, false, false, 86))) {
            // line 87
            yield "                                <p class=\"mt-2\"><strong>Image actuelle:</strong></p>
                                <img src=\"";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "user", [], "any", false, false, false, 88), "image", [], "any", false, false, false, 88))), "html", null, true);
            yield "\" alt=\"Profile Image\" class=\"img-thumbnail\" width=\"100\">
                            ";
        }
        // line 90
        yield "                        </div>

                        <div class=\"btn_box text-center\">
                            <button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button>
                        </div>

                        ";
        // line 96
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 96, $this->source); })()), 'form_end');
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
        return "home/instructeur_register.html.twig";
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
        return array (  293 => 96,  285 => 90,  280 => 88,  277 => 87,  274 => 86,  269 => 83,  265 => 82,  260 => 80,  255 => 77,  249 => 75,  246 => 74,  241 => 71,  237 => 70,  232 => 68,  225 => 64,  221 => 63,  217 => 62,  210 => 58,  206 => 57,  202 => 56,  195 => 52,  191 => 51,  187 => 50,  180 => 46,  176 => 45,  172 => 44,  165 => 40,  161 => 39,  157 => 38,  153 => 36,  149 => 34,  140 => 32,  136 => 31,  133 => 30,  130 => 29,  124 => 26,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
                        {# ✅ Make sure to add enctype=\"multipart/form-data\" for file uploads #}
                        {{ form_start(registrationForm, {'attr': {'novalidate': 'novalidate', 'enctype': 'multipart/form-data'}}) }}

                        {# ✅ Display Global Form Errors #}
                        {% if registrationForm.vars.errors|length > 0 %}
                            <div class=\"alert alert-danger\">
                                {% for error in registrationForm.vars.errors %}
                                    <p>{{ error.message }}</p>
                                {% endfor %}
                            </div>
                        {% endif %}

                        <div class=\"form-group\">
                            {{ form_label(registrationForm.nom, 'Nom') }}
                            {{ form_widget(registrationForm.nom, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(registrationForm.nom) }}
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(registrationForm.prenom, 'Prénom') }}
                            {{ form_widget(registrationForm.prenom, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(registrationForm.prenom) }}
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(registrationForm.email, 'Email') }}
                            {{ form_widget(registrationForm.email, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(registrationForm.email) }}
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(registrationForm.password, 'Mot de passe') }}
                            {{ form_widget(registrationForm.password, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(registrationForm.password) }}
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(registrationForm.date_de_naissance, 'Date de naissance') }}
                            {{ form_widget(registrationForm.date_de_naissance, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(registrationForm.date_de_naissance) }}
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(registrationForm.cv, 'CV (PDF)') }}
                            <small class=\"text-muted d-block mb-2\">Formats acceptés: PDF (Max 1MB)</small>
                            {{ form_widget(registrationForm.cv, {'attr': {'class': 'form-control', 'accept': 'application/pdf'}}) }}
                            {{ form_errors(registrationForm.cv) }}

                            {# ✅ Show uploaded CV if available #}
                            {% if app.user and app.user.cv %}
                                <p class=\"mt-2\"><strong>CV actuel:</strong> <a href=\"{{ asset('uploads/cv/' ~ app.user.cv) }}\" target=\"_blank\">Voir le CV</a></p>
                            {% endif %}
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(registrationForm.image, 'Image de profil (JPG, PNG)') }}
                            <small class=\"text-muted d-block mb-2\">Formats acceptés: JPG, PNG (Max 1MB)</small>
                            {{ form_widget(registrationForm.image, {'attr': {'class': 'form-control', 'accept': 'image/png, image/jpeg'}}) }}
                            {{ form_errors(registrationForm.image) }}

                            {# ✅ Show uploaded profile image if available #}
                            {% if app.user and app.user.image %}
                                <p class=\"mt-2\"><strong>Image actuelle:</strong></p>
                                <img src=\"{{ asset('uploads/images/' ~ app.user.image) }}\" alt=\"Profile Image\" class=\"img-thumbnail\" width=\"100\">
                            {% endif %}
                        </div>

                        <div class=\"btn_box text-center\">
                            <button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button>
                        </div>

                        {{ form_end(registrationForm) }}
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "home/instructeur_register.html.twig", "C:\\Users\\walid\\Desktop\\Nouveau dossier\\pi2025\\templates\\home\\instructeur_register.html.twig");
    }
}
