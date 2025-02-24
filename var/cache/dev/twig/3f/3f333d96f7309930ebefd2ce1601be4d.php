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

/* home/register.html.twig */
class __TwigTemplate_7029ff5bb6395738e877a2e1e4e01c30 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/register.html.twig", 1);
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

        yield "Inscription
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
        yield "\t<div class=\"hero_area\">
\t\t<section class=\"slider_section\">
\t\t\t<div class=\"slider_bg_box\">
\t\t\t\t<div class=\"bg_img_box\">
\t\t\t\t\t<img src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontOffice/images/slider-bg.jpg"), "html", null, true);
        yield "\" alt=\"\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</div>

\t<section class=\"contact_section layout_padding\">
\t\t<div class=\"container\">
\t\t\t<div class=\"heading_container text-center\">
\t\t\t\t<h2>Inscription</h2>
\t\t\t</div>

\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"form_container\">
\t\t\t\t\t\t";
        // line 26
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 26, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

\t\t\t\t\t\t";
        // line 29
        yield "\t\t\t\t\t\t";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 29, $this->source); })()), "vars", [], "any", false, false, false, 29), "errors", [], "any", false, false, false, 29)) > 0)) {
            // line 30
            yield "\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 31, $this->source); })()), "vars", [], "any", false, false, false, 31), "errors", [], "any", false, false, false, 31));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 32
                yield "\t\t\t\t\t\t\t\t\t<p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 32), "html", null, true);
                yield "</p>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 36
        yield "
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 38, $this->source); })()), "nom", [], "any", false, false, false, 38), 'label', ["label" => "Nom"]);
        yield "
\t\t\t\t\t\t\t";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), "nom", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t\t\t";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), "nom", [], "any", false, false, false, 40), 'errors');
        yield "
\t\t\t\t\t\t\t";
        // line 42
        yield "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 45, $this->source); })()), "prenom", [], "any", false, false, false, 45), 'label', ["label" => "Prénom"]);
        yield "
\t\t\t\t\t\t\t";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 46, $this->source); })()), "prenom", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t\t\t";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 47, $this->source); })()), "prenom", [], "any", false, false, false, 47), 'errors');
        yield "
\t\t\t\t\t\t\t";
        // line 49
        yield "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 52, $this->source); })()), "email", [], "any", false, false, false, 52), 'label', ["label" => "Email"]);
        yield "
\t\t\t\t\t\t\t";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 53, $this->source); })()), "email", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t\t\t";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 54, $this->source); })()), "email", [], "any", false, false, false, 54), 'errors');
        yield "
\t\t\t\t\t\t\t";
        // line 56
        yield "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 59, $this->source); })()), "password", [], "any", false, false, false, 59), 'label', ["label" => "Mot de passe"]);
        yield "
\t\t\t\t\t\t\t";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 60, $this->source); })()), "password", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t\t\t";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 61, $this->source); })()), "password", [], "any", false, false, false, 61), 'errors');
        yield "
\t\t\t\t\t\t\t";
        // line 63
        yield "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 66, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 66), 'label', ["label" => "Date de naissance"]);
        yield "
\t\t\t\t\t\t\t";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 67, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t\t\t";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 68, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 68), 'errors');
        yield "
\t\t\t\t\t\t\t";
        // line 70
        yield "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 73, $this->source); })()), "image", [], "any", false, false, false, 73), 'label', ["label" => "Image de profil (JPG, PNG)"]);
        yield "
\t\t\t\t\t\t\t<small class=\"text-muted d-block mb-2\">Formats acceptés: JPG, PNG (Max 1MB)</small>
\t\t\t\t\t\t\t";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 75, $this->source); })()), "image", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => "form-control", "accept" => "image/png, image/jpeg"]]);
        yield "
\t\t\t\t\t\t\t";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 76, $this->source); })()), "image", [], "any", false, false, false, 76), 'errors');
        yield "

\t\t\t\t\t\t\t";
        // line 79
        yield "\t\t\t\t\t\t\t";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", [], "any", false, false, false, 79) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", [], "any", false, false, false, 79), "image", [], "any", false, false, false, 79))) {
            // line 80
            yield "\t\t\t\t\t\t\t\t<p class=\"mt-2\">
\t\t\t\t\t\t\t\t\t<strong>Image actuelle:</strong>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<img src=\"";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "user", [], "any", false, false, false, 83), "image", [], "any", false, false, false, 83))), "html", null, true);
            yield "\" alt=\"Profile Image\" class=\"img-thumbnail\" width=\"100\">
\t\t\t\t\t\t\t";
        }
        // line 85
        yield "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"btn_box text-center\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 91
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 91, $this->source); })()), 'form_end');
        yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
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
        return "home/register.html.twig";
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
        return array (  277 => 91,  269 => 85,  264 => 83,  259 => 80,  256 => 79,  251 => 76,  247 => 75,  242 => 73,  237 => 70,  233 => 68,  229 => 67,  225 => 66,  220 => 63,  216 => 61,  212 => 60,  208 => 59,  203 => 56,  199 => 54,  195 => 53,  191 => 52,  186 => 49,  182 => 47,  178 => 46,  174 => 45,  169 => 42,  165 => 40,  161 => 39,  157 => 38,  153 => 36,  149 => 34,  140 => 32,  136 => 31,  133 => 30,  130 => 29,  125 => 26,  107 => 11,  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription
{% endblock %}

{% block body %}
\t<div class=\"hero_area\">
\t\t<section class=\"slider_section\">
\t\t\t<div class=\"slider_bg_box\">
\t\t\t\t<div class=\"bg_img_box\">
\t\t\t\t\t<img src=\"{{ asset('frontOffice/images/slider-bg.jpg') }}\" alt=\"\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</div>

\t<section class=\"contact_section layout_padding\">
\t\t<div class=\"container\">
\t\t\t<div class=\"heading_container text-center\">
\t\t\t\t<h2>Inscription</h2>
\t\t\t</div>

\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"form_container\">
\t\t\t\t\t\t{{ form_start(registrationForm, {'attr': {'novalidate': 'novalidate'}}) }}

\t\t\t\t\t\t{# ✅ Display Global Form Errors #}
\t\t\t\t\t\t{% if registrationForm.vars.errors|length > 0 %}
\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t{% for error in registrationForm.vars.errors %}
\t\t\t\t\t\t\t\t\t<p>{{ error.message }}</p>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t{{ form_label(registrationForm.nom, 'Nom') }}
\t\t\t\t\t\t\t{{ form_widget(registrationForm.nom, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t\t{{ form_errors(registrationForm.nom) }}
\t\t\t\t\t\t\t{# ✅ Show field errors #}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t{{ form_label(registrationForm.prenom, 'Prénom') }}
\t\t\t\t\t\t\t{{ form_widget(registrationForm.prenom, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t\t{{ form_errors(registrationForm.prenom) }}
\t\t\t\t\t\t\t{# ✅ Show field errors #}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t{{ form_label(registrationForm.email, 'Email') }}
\t\t\t\t\t\t\t{{ form_widget(registrationForm.email, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t\t{{ form_errors(registrationForm.email) }}
\t\t\t\t\t\t\t{# ✅ Show field errors #}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t{{ form_label(registrationForm.password, 'Mot de passe') }}
\t\t\t\t\t\t\t{{ form_widget(registrationForm.password, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t\t{{ form_errors(registrationForm.password) }}
\t\t\t\t\t\t\t{# ✅ Show validation errors #}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t{{ form_label(registrationForm.date_de_naissance, 'Date de naissance') }}
\t\t\t\t\t\t\t{{ form_widget(registrationForm.date_de_naissance, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t\t{{ form_errors(registrationForm.date_de_naissance) }}
\t\t\t\t\t\t\t{# ✅ Show field errors #}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t{{ form_label(registrationForm.image, 'Image de profil (JPG, PNG)') }}
\t\t\t\t\t\t\t<small class=\"text-muted d-block mb-2\">Formats acceptés: JPG, PNG (Max 1MB)</small>
\t\t\t\t\t\t\t{{ form_widget(registrationForm.image, {'attr': {'class': 'form-control', 'accept': 'image/png, image/jpeg'}}) }}
\t\t\t\t\t\t\t{{ form_errors(registrationForm.image) }}

\t\t\t\t\t\t\t{# ✅ Show uploaded profile image if available #}
\t\t\t\t\t\t\t{% if app.user and app.user.image %}
\t\t\t\t\t\t\t\t<p class=\"mt-2\">
\t\t\t\t\t\t\t\t\t<strong>Image actuelle:</strong>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<img src=\"{{ asset('uploads/images/' ~ app.user.image) }}\" alt=\"Profile Image\" class=\"img-thumbnail\" width=\"100\">
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"btn_box text-center\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t{{ form_end(registrationForm) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
{% endblock %}
", "home/register.html.twig", "C:\\Users\\walid\\Desktop\\Nouveau dossier\\pi2025\\templates\\home\\register.html.twig");
    }
}
