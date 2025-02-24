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

/* home/login.html.twig */
class __TwigTemplate_2372ba3185deb4aa8debb39d268c8c11 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/login.html.twig", 1);
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

        yield "Connexion
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
        yield "\t<div
\t\tclass=\"hero_area\">
\t\t<!-- Login Section -->
\t\t<section class=\"slider_section\">
\t\t\t<div class=\"slider_bg_box\">
\t\t\t\t<div class=\"bg_img_box\">
\t\t\t\t\t<img src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontOffice/images/slider-bg.jpg"), "html", null, true);
        yield "\" alt=\"\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"detail-box text-center\">
\t\t\t\t\t\t\t<h1 class=\"text-white\">
\t\t\t\t\t\t\t\tConnectez-vous à
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\tFormini
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t<p class=\"text-white\">
\t\t\t\t\t\t\t\tAccédez à votre espace et continuez votre apprentissage en ligne.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</div>

\t<!-- Login Form Section -->
\t<section class=\"contact_section layout_padding\">
\t\t<div class=\"container\">
\t\t\t<div class=\"heading_container text-center\">
\t\t\t\t<h2>Connexion</h2>
\t\t\t\t<p>Entrez vos identifiants pour accéder à votre compte.</p>
\t\t\t</div>

\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"form_container\">
\t\t\t\t\t\t";
        // line 46
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 46, $this->source); })())) {
            // line 47
            yield "\t\t\t\t\t\t\t<div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 47, $this->source); })()), "messageKey", [], "any", false, false, false, 47), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 47, $this->source); })()), "messageData", [], "any", false, false, false, 47), "security"), "html", null, true);
            yield "</div>
\t\t\t\t\t\t";
        }
        // line 49
        yield "
\t\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t\t\t\t<input type=\"email\" name=\"_username\" id=\"email\" placeholder=\"Votre email\" class=\"form-control\" required>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-group mt-3\">
\t\t\t\t\t\t\t\t<label for=\"password\">Mot de passe</label>
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"_password\" id=\"password\" placeholder=\"Votre mot de passe\" class=\"form-control\" required>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

\t\t\t\t\t\t\t<div class=\"btn_box text-center mt-4\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Se connecter</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>

\t\t\t\t\t\t<div class=\"text-center mt-3\">
\t\t\t\t\t\t\t<p>Vous n'avez pas de compte ?</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"btn btn-primary btn-sm\">S'inscrire en tant qu'Apprenant</a>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register_instructeur");
        yield "\" class=\"btn btn-secondary btn-sm\">S'inscrire en tant qu'Instructeur</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>

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
        return "home/login.html.twig";
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
        return array (  183 => 71,  179 => 70,  166 => 60,  153 => 49,  147 => 47,  145 => 46,  109 => 13,  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Connexion
{% endblock %}

{% block body %}
\t<div
\t\tclass=\"hero_area\">
\t\t<!-- Login Section -->
\t\t<section class=\"slider_section\">
\t\t\t<div class=\"slider_bg_box\">
\t\t\t\t<div class=\"bg_img_box\">
\t\t\t\t\t<img src=\"{{ asset('frontOffice/images/slider-bg.jpg') }}\" alt=\"\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"detail-box text-center\">
\t\t\t\t\t\t\t<h1 class=\"text-white\">
\t\t\t\t\t\t\t\tConnectez-vous à
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\tFormini
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t<p class=\"text-white\">
\t\t\t\t\t\t\t\tAccédez à votre espace et continuez votre apprentissage en ligne.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</div>

\t<!-- Login Form Section -->
\t<section class=\"contact_section layout_padding\">
\t\t<div class=\"container\">
\t\t\t<div class=\"heading_container text-center\">
\t\t\t\t<h2>Connexion</h2>
\t\t\t\t<p>Entrez vos identifiants pour accéder à votre compte.</p>
\t\t\t</div>

\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"form_container\">
\t\t\t\t\t\t{% if error %}
\t\t\t\t\t\t\t<div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t\t\t\t<input type=\"email\" name=\"_username\" id=\"email\" placeholder=\"Votre email\" class=\"form-control\" required>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-group mt-3\">
\t\t\t\t\t\t\t\t<label for=\"password\">Mot de passe</label>
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"_password\" id=\"password\" placeholder=\"Votre mot de passe\" class=\"form-control\" required>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

\t\t\t\t\t\t\t<div class=\"btn_box text-center mt-4\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Se connecter</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>

\t\t\t\t\t\t<div class=\"text-center mt-3\">
\t\t\t\t\t\t\t<p>Vous n'avez pas de compte ?</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_register') }}\" class=\"btn btn-primary btn-sm\">S'inscrire en tant qu'Apprenant</a>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_register_instructeur') }}\" class=\"btn btn-secondary btn-sm\">S'inscrire en tant qu'Instructeur</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

{% endblock %}
", "home/login.html.twig", "C:\\Users\\walid\\Desktop\\Nouveau dossier\\pi2025\\templates\\home\\login.html.twig");
    }
}
