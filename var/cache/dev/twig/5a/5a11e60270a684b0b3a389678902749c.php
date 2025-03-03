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

/* home/login_admin.html.twig */
class __TwigTemplate_58d553a003a76d2e94d1d75d6c799ec4 extends Template
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
        return "base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/login_admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/login_admin.html.twig"));

        $this->parent = $this->loadTemplate("base_admin.html.twig", "home/login_admin.html.twig", 1);
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

        yield "Connexion Admin
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
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"detail-box text-center\">
\t\t\t\t\t\t\t<h1 class=\"text-white\">Connexion Administrateur</h1>
\t\t\t\t\t\t\t<p class=\"text-white\">Accédez à votre tableau de bord d'administration.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</div>

\t<section class=\"contact_section layout_padding\">
\t\t<div class=\"container\">


\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"form_container\">
\t\t\t\t\t\t";
        // line 34
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 34, $this->source); })())) {
            // line 35
            yield "\t\t\t\t\t\t\t<div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 35, $this->source); })()), "messageKey", [], "any", false, false, false, 35), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 35, $this->source); })()), "messageData", [], "any", false, false, false, 35), "security"), "html", null, true);
            yield "</div>
\t\t\t\t\t\t";
        }
        // line 37
        yield "\t\t\t\t\t\t<form method=\"post\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login_admin");
        yield "\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t\t\t\t<input type=\"email\" name=\"_username\" id=\"email\" placeholder=\"Votre email\" class=\"form-control\" required>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-group mt-3\">
\t\t\t\t\t\t\t\t<label for=\"password\">Mot de passe</label>
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"_password\" id=\"password\" placeholder=\"Votre mot de passe\" class=\"form-control\" required>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
        // line 49
        yield "\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

\t\t\t\t\t\t\t<div class=\"btn_box text-center mt-4\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">Se connecter</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>


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
        return "home/login_admin.html.twig";
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
        return array (  156 => 49,  141 => 37,  135 => 35,  133 => 34,  107 => 11,  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_admin.html.twig' %}

{% block title %}Connexion Admin
{% endblock %}

{% block body %}
\t<div class=\"hero_area\">
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
\t\t\t\t\t\t\t<h1 class=\"text-white\">Connexion Administrateur</h1>
\t\t\t\t\t\t\t<p class=\"text-white\">Accédez à votre tableau de bord d'administration.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</div>

\t<section class=\"contact_section layout_padding\">
\t\t<div class=\"container\">


\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"form_container\">
\t\t\t\t\t\t{% if error %}
\t\t\t\t\t\t\t<div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_login_admin') }}\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t\t\t\t<input type=\"email\" name=\"_username\" id=\"email\" placeholder=\"Votre email\" class=\"form-control\" required>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-group mt-3\">
\t\t\t\t\t\t\t\t<label for=\"password\">Mot de passe</label>
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"_password\" id=\"password\" placeholder=\"Votre mot de passe\" class=\"form-control\" required>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t{# ✅ CSRF Token (IMPORTANT) #}
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

\t\t\t\t\t\t\t<div class=\"btn_box text-center mt-4\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">Se connecter</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>


\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
{% endblock %}
", "home/login_admin.html.twig", "D:\\esprit\\PI\\final\\pi2025\\templates\\home\\login_admin.html.twig");
    }
}
