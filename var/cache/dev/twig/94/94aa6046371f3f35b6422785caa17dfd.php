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
class __TwigTemplate_63ac20c87106fa659ecee8df7e9e9c80 extends Template
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

        yield "Connexion";
        
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
        <!-- Login Section -->
        <section class=\"slider_section\">
            <div class=\"slider_bg_box\">
                <div class=\"bg_img_box\">
                    <img src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontOffice/images/slider-bg.jpg"), "html", null, true);
        yield "\" alt=\"\">
                </div>
            </div>
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-md-8\">
                        <div class=\"detail-box text-center\">
                            <h1 class=\"text-white\">
                                Connectez-vous à
                                <br>
                                Formini
                            </h1>
                            <p class=\"text-white\">
                                Accédez à votre espace et continuez votre apprentissage en ligne.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Login Form Section -->
    <section class=\"contact_section layout_padding\" id=\"login-form-section\">
        <div class=\"container\">
            <div class=\"heading_container text-center\">
                <h2>Connexion</h2>
                <p>Entrez vos identifiants pour accéder à votre compte.</p>
            </div>

            <div class=\"row justify-content-center\">
                <div class=\"col-md-6\">
                    <div class=\"form_container\">
                        ";
        // line 44
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 44, $this->source); })())) {
            // line 45
            yield "                            <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 45, $this->source); })()), "messageKey", [], "any", false, false, false, 45), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 45, $this->source); })()), "messageData", [], "any", false, false, false, 45), "security"), "html", null, true);
            yield "</div>
                        ";
        }
        // line 47
        yield "
                        <form method=\"post\">
                            <div class=\"form-group\">
                                <label for=\"email\">Email</label>
                                <input type=\"email\" name=\"_username\" id=\"email\" placeholder=\"Votre email\" class=\"form-control\" required>
                            </div>

                            <div class=\"form-group mt-3\">
                                <label for=\"password\">Mot de passe</label>
                                <input type=\"password\" name=\"_password\" id=\"password\" placeholder=\"Votre mot de passe\" class=\"form-control\" required>
                            </div>
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

                            <div class=\"btn_box text-center mt-4\">
                                <button type=\"submit\" class=\"btn btn-primary\">Se connecter</button>
                            </div>
                        </form>

                        <div class=\"text-center mt-3\">
                            <p>Vous n'avez pas de compte ?</p>
                            <p>
                                <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"btn btn-primary btn-sm\">S'inscrire en tant qu'Apprenant</a>
                                <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register_instructeur");
        yield "\" class=\"btn btn-secondary btn-sm\">S'inscrire en tant qu'Instructeur</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Attendre que la page soit complètement chargée
        document.addEventListener(\"DOMContentLoaded\", function() {
            // Faire défiler la page jusqu'à la section de formulaire de connexion
            const loginFormSection = document.getElementById('login-form-section');
            if (loginFormSection) {
                loginFormSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
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
        return array (  181 => 69,  177 => 68,  164 => 58,  151 => 47,  145 => 45,  143 => 44,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Connexion{% endblock %}

{% block body %}
    <div class=\"hero_area\">
        <!-- Login Section -->
        <section class=\"slider_section\">
            <div class=\"slider_bg_box\">
                <div class=\"bg_img_box\">
                    <img src=\"{{ asset('frontOffice/images/slider-bg.jpg') }}\" alt=\"\">
                </div>
            </div>
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-md-8\">
                        <div class=\"detail-box text-center\">
                            <h1 class=\"text-white\">
                                Connectez-vous à
                                <br>
                                Formini
                            </h1>
                            <p class=\"text-white\">
                                Accédez à votre espace et continuez votre apprentissage en ligne.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Login Form Section -->
    <section class=\"contact_section layout_padding\" id=\"login-form-section\">
        <div class=\"container\">
            <div class=\"heading_container text-center\">
                <h2>Connexion</h2>
                <p>Entrez vos identifiants pour accéder à votre compte.</p>
            </div>

            <div class=\"row justify-content-center\">
                <div class=\"col-md-6\">
                    <div class=\"form_container\">
                        {% if error %}
                            <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                        {% endif %}

                        <form method=\"post\">
                            <div class=\"form-group\">
                                <label for=\"email\">Email</label>
                                <input type=\"email\" name=\"_username\" id=\"email\" placeholder=\"Votre email\" class=\"form-control\" required>
                            </div>

                            <div class=\"form-group mt-3\">
                                <label for=\"password\">Mot de passe</label>
                                <input type=\"password\" name=\"_password\" id=\"password\" placeholder=\"Votre mot de passe\" class=\"form-control\" required>
                            </div>
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                            <div class=\"btn_box text-center mt-4\">
                                <button type=\"submit\" class=\"btn btn-primary\">Se connecter</button>
                            </div>
                        </form>

                        <div class=\"text-center mt-3\">
                            <p>Vous n'avez pas de compte ?</p>
                            <p>
                                <a href=\"{{ path('app_register') }}\" class=\"btn btn-primary btn-sm\">S'inscrire en tant qu'Apprenant</a>
                                <a href=\"{{ path('app_register_instructeur') }}\" class=\"btn btn-secondary btn-sm\">S'inscrire en tant qu'Instructeur</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Attendre que la page soit complètement chargée
        document.addEventListener(\"DOMContentLoaded\", function() {
            // Faire défiler la page jusqu'à la section de formulaire de connexion
            const loginFormSection = document.getElementById('login-form-section');
            if (loginFormSection) {
                loginFormSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    </script>

{% endblock %}
", "home/login.html.twig", "C:\\Users\\walid\\Desktop\\Nouveau dossier (3)\\pi2025\\templates\\home\\login.html.twig");
    }
}
