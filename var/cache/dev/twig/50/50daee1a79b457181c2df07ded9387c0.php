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

/* formation/showClient.html.twig */
class __TwigTemplate_e92d341fa7754a852226eb181a84ff8c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/showClient.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/showClient.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "formation/showClient.html.twig", 1);
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

        yield "Détails de la Formation";
        
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
        yield "    <div class=\"container mt-4\">
    
        <div class=\"card shadow-lg p-4\">
            <h1 class=\"text-center text-danger\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 9, $this->source); })()), "titre", [], "any", false, false, false, 9), "html", null, true);
        yield "</h1>
            <hr>
            
            <!-- Display the image if available -->
            
                <div class=\"text-center\">
                    <img src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 15, $this->source); })()), "imageName", [], "any", false, false, false, 15))), "html", null, true);
        yield "\"  class=\"img-fluid mb-3\" style=\"height: 150px;width: 70%;\" />
                </div>
      
  

            <div class=\"row\">
                <div class=\"col-md-6\">
                    <p><strong>Description :</strong> ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 22, $this->source); })()), "description", [], "any", false, false, false, 22), "html", null, true);
        yield "</p>
                    <p><strong>Durée :</strong> ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 23, $this->source); })()), "duree", [], "any", false, false, false, 23), "html", null, true);
        yield "</p>
                </div>
                <div class=\"col-md-6\">
                    <p><strong>Niveau :</strong> ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 26, $this->source); })()), "niveau", [], "any", false, false, false, 26), "html", null, true);
        yield "</p>
                    <p><strong>Date de Création :</strong> ";
        // line 27
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 27, $this->source); })()), "dateCreation", [], "any", false, false, false, 27)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 27, $this->source); })()), "dateCreation", [], "any", false, false, false, 27), "d/m/Y"), "html", null, true)) : ("N/A"));
        yield "</p>
                    <p><strong>Prix :</strong> ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 28, $this->source); })()), "prix", [], "any", false, false, false, 28), "html", null, true);
        yield " DT</p>
                </div>
            </div>
           
            ";
        // line 32
        if (( !(null === (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new RuntimeError('Variable "inscription" does not exist.', 32, $this->source); })())) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["inscription"]) || array_key_exists("inscription", $context) ? $context["inscription"] : (function () { throw new RuntimeError('Variable "inscription" does not exist.', 32, $this->source); })()), "formation", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32)))) {
            // line 33
            yield "                <div class=\"text-center mt-4\">
                    <a href=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation_lessons_c", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]), "html", null, true);
            yield "\" class=\"btn btn-danger\">Accéder à la formation</a>
                </div>
           ";
        } else {
            // line 37
            yield "                <div class=\"text-center mt-4\">
                    <a href=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscription_cours_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38)]), "html", null, true);
            yield "\" class=\"btn btn-success\">S'inscrire</a>
                </div>
                ";
            // line 40
            if (((isset($context["progression"]) || array_key_exists("progression", $context) ? $context["progression"] : (function () { throw new RuntimeError('Variable "progression" does not exist.', 40, $this->source); })()) == (isset($context["total_lecons"]) || array_key_exists("total_lecons", $context) ? $context["total_lecons"] : (function () { throw new RuntimeError('Variable "total_lecons" does not exist.', 40, $this->source); })()))) {
                // line 41
                yield "    <div class=\"text-center mt-4\">
        <a href=\"";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_examen", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42)]), "html", null, true);
                yield "\" class=\"btn btn-danger\">Passer l'examen</a>
    </div>
";
            }
            // line 45
            yield "
           ";
        }
        // line 47
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
        return "formation/showClient.html.twig";
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
        return array (  183 => 47,  179 => 45,  173 => 42,  170 => 41,  168 => 40,  163 => 38,  160 => 37,  154 => 34,  151 => 33,  149 => 32,  142 => 28,  138 => 27,  134 => 26,  128 => 23,  124 => 22,  114 => 15,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de la Formation{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
    
        <div class=\"card shadow-lg p-4\">
            <h1 class=\"text-center text-danger\">{{ formation.titre }}</h1>
            <hr>
            
            <!-- Display the image if available -->
            
                <div class=\"text-center\">
                    <img src=\"{{ asset('uploads/images/' ~ formation.imageName) }}\"  class=\"img-fluid mb-3\" style=\"height: 150px;width: 70%;\" />
                </div>
      
  

            <div class=\"row\">
                <div class=\"col-md-6\">
                    <p><strong>Description :</strong> {{ formation.description }}</p>
                    <p><strong>Durée :</strong> {{ formation.duree }}</p>
                </div>
                <div class=\"col-md-6\">
                    <p><strong>Niveau :</strong> {{ formation.niveau }}</p>
                    <p><strong>Date de Création :</strong> {{ formation.dateCreation ? formation.dateCreation|date('d/m/Y') : 'N/A' }}</p>
                    <p><strong>Prix :</strong> {{ formation.prix }} DT</p>
                </div>
            </div>
           
            {% if inscription is not null and inscription.formation.id == formation.id %}
                <div class=\"text-center mt-4\">
                    <a href=\"{{ path('app_formation_lessons_c', {'id': formation.id}) }}\" class=\"btn btn-danger\">Accéder à la formation</a>
                </div>
           {% else %}
                <div class=\"text-center mt-4\">
                    <a href=\"{{ path('app_inscription_cours_new', {'id': formation.id}) }}\" class=\"btn btn-success\">S'inscrire</a>
                </div>
                {% if progression == total_lecons %}
    <div class=\"text-center mt-4\">
        <a href=\"{{ path('app_examen', {'id': formation.id}) }}\" class=\"btn btn-danger\">Passer l'examen</a>
    </div>
{% endif %}

           {% endif %}

        </div>
    </div>
{% endblock %}
", "formation/showClient.html.twig", "C:\\Users\\walid\\Desktop\\finalPI\\pi2025\\templates\\formation\\showClient.html.twig");
    }
}
