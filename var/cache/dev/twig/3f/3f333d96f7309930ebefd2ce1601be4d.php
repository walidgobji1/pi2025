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

        yield "Inscription";
        
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

    <section class=\"contact_section layout_padding\" id=\"registration-form-section\">
        <div class=\"container\">
            <div class=\"heading_container text-center\">
                <h2>Inscription</h2>
            </div>

            <div class=\"row justify-content-center\">
                <div class=\"col-md-6\">
                    <div class=\"form_container\">
                        ";
        // line 25
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 25, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

                        ";
        // line 28
        yield "                        ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 28, $this->source); })()), "vars", [], "any", false, false, false, 28), "errors", [], "any", false, false, false, 28)) > 0)) {
            // line 29
            yield "                            <div class=\"alert alert-danger\">
                                ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 30, $this->source); })()), "vars", [], "any", false, false, false, 30), "errors", [], "any", false, false, false, 30));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 31
                yield "                                    <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 31), "html", null, true);
                yield "</p>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            yield "                            </div>
                        ";
        }
        // line 35
        yield "
                        <div class=\"form-group\">
                            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "nom", [], "any", false, false, false, 37), 'label', ["label" => "Nom"]);
        yield "
                            ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 38, $this->source); })()), "nom", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), "nom", [], "any", false, false, false, 39), 'errors');
        yield "
                            ";
        // line 41
        yield "                        </div>

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
                            ";
        // line 48
        yield "                        </div>

                        <div class=\"form-group\">
                            ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 51, $this->source); })()), "email", [], "any", false, false, false, 51), 'label', ["label" => "Email"]);
        yield "
                            ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 52, $this->source); })()), "email", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 53, $this->source); })()), "email", [], "any", false, false, false, 53), 'errors');
        yield "
                            ";
        // line 55
        yield "                        </div>

                        <div class=\"form-group\">
                            ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 58, $this->source); })()), "password", [], "any", false, false, false, 58), 'label', ["label" => "Mot de passe"]);
        yield "
                            ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 59, $this->source); })()), "password", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 60, $this->source); })()), "password", [], "any", false, false, false, 60), 'errors');
        yield "
                            ";
        // line 62
        yield "                        </div>

                        <div class=\"form-group\">
                            ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 65, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 65), 'label', ["label" => "Date de naissance"]);
        yield "
                            ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 66, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 67, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 67), 'errors');
        yield "
                            ";
        // line 69
        yield "                        </div>

                        <div class=\"btn_box text-center\">
                            <button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button>
                        </div>

                        ";
        // line 75
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 75, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Attendre que la page soit complètement chargée
        document.addEventListener(\"DOMContentLoaded\", function() {
            // Faire défiler la page jusqu'à la section du formulaire d'inscription
            const registrationFormSection = document.getElementById('registration-form-section');
            if (registrationFormSection) {
                registrationFormSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    </script>

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
        return array (  244 => 75,  236 => 69,  232 => 67,  228 => 66,  224 => 65,  219 => 62,  215 => 60,  211 => 59,  207 => 58,  202 => 55,  198 => 53,  194 => 52,  190 => 51,  185 => 48,  181 => 46,  177 => 45,  173 => 44,  168 => 41,  164 => 39,  160 => 38,  156 => 37,  152 => 35,  148 => 33,  139 => 31,  135 => 30,  132 => 29,  129 => 28,  124 => 25,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription{% endblock %}

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

    <section class=\"contact_section layout_padding\" id=\"registration-form-section\">
        <div class=\"container\">
            <div class=\"heading_container text-center\">
                <h2>Inscription</h2>
            </div>

            <div class=\"row justify-content-center\">
                <div class=\"col-md-6\">
                    <div class=\"form_container\">
                        {{ form_start(registrationForm, {'attr': {'novalidate': 'novalidate'}}) }}

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
                            {# ✅ Show field errors #}
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(registrationForm.prenom, 'Prénom') }}
                            {{ form_widget(registrationForm.prenom, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(registrationForm.prenom) }}
                            {# ✅ Show field errors #}
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(registrationForm.email, 'Email') }}
                            {{ form_widget(registrationForm.email, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(registrationForm.email) }}
                            {# ✅ Show field errors #}
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(registrationForm.password, 'Mot de passe') }}
                            {{ form_widget(registrationForm.password, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(registrationForm.password) }}
                            {# ✅ Show validation errors #}
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(registrationForm.date_de_naissance, 'Date de naissance') }}
                            {{ form_widget(registrationForm.date_de_naissance, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(registrationForm.date_de_naissance) }}
                            {# ✅ Show field errors #}
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

    <script>
        // Attendre que la page soit complètement chargée
        document.addEventListener(\"DOMContentLoaded\", function() {
            // Faire défiler la page jusqu'à la section du formulaire d'inscription
            const registrationFormSection = document.getElementById('registration-form-section');
            if (registrationFormSection) {
                registrationFormSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    </script>

{% endblock %}
", "home/register.html.twig", "C:\\Users\\walid\\Desktop\\Nouveau dossier\\pi2025\\templates\\home\\register.html.twig");
    }
}
