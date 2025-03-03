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

/* evenement/index.html.twig */
class __TwigTemplate_ae34ad33ed45c51eaed2951d2a1f274f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/index.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "evenement/index.html.twig", 1);
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

        yield "Liste des événements";
        
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
        yield "<div class=\"formbold-main-wrapper\">
    <div class=\"formbold-form-wrapper\">
        <h2 class=\"formbold-form-title text-center\">Liste des événements</h2>

        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 10, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 11
            yield "            <div class=\"formbold-mb-3\">
                <h3 class=\"text-xl font-semibold text-gray-800\">";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "titre", [], "any", false, false, false, 12), "html", null, true);
            yield "</h3>
                <p class=\"text-gray-600\">";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 13), "d M Y"), "html", null, true);
            yield "</p>
                <p class=\"text-gray-700 mt-2\">";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "description", [], "any", false, false, false, 14), "html", null, true);
            yield "</p>
               
                ";
            // line 16
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "notification", [], "any", false, false, false, 16))) {
                // line 17
                yield "                    <div>
                        <form action=\"";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notification_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 18)]), "html", null, true);
                yield "\" method=\"get\">
                            <button type=\"submit\" class=\"bg-blue-600 text-blue px-4 py-2 rounded\">Informer les apprenants</button>
                        </form>
                        <form action=\"";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 21)]), "html", null, true);
                yield "\" method=\"get\">
                            <button type=\"submit\" class=\"bg-blue-600 text-blue px-4 py-2 rounded\">Modifier</button>
                        </form>
                    </div>
                ";
            } else {
                // line 26
                yield "                    <button class=\"bg-green-500 text-black px-4 py-2 rounded cursor-not-allowed opacity-50\" disabled>
                        Notification déjà envoyée
                    </button>
                ";
            }
            // line 30
            yield "                
                <!-- Le bouton de suppression est toujours affiché -->
                ";
            // line 32
            yield Twig\Extension\CoreExtension::include($this->env, $context, "evenement/_delete_form.html.twig");
            yield "

            </div>
            <hr class=\"my-4\">
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 36
        if (!$context['_iterated']) {
            // line 37
            yield "            <p class=\"text-gray-600\">Aucun événement à afficher pour le moment.</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['evenement'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "
    </div>
</div>

<style>
  .formbold-main-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 48px;
  }

  .formbold-form-wrapper {
    margin: 0 auto;
    max-width: 570px;
    width: 100%;
    background: white;
    padding: 40px;
  }

  .formbold-form-title {
    font-weight: 600;
    font-size: 28px;
    line-height: 34px;
    color: #07074d;
    margin-bottom: 30px;
  }

  .formbold-mb-3 {
    margin-bottom: 20px;
  }

  .formbold-mb-3 h3 {
    font-size: 24px;
    color: #07074d;
  }

  .formbold-mb-3 p {
    font-size: 16px;
    color: #536387;
    line-height: 1.5;
  }

  .my-4 {
    margin-top: 20px;
    margin-bottom: 20px;
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
        return "evenement/index.html.twig";
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
        return array (  195 => 39,  188 => 37,  186 => 36,  169 => 32,  165 => 30,  159 => 26,  151 => 21,  145 => 18,  142 => 17,  140 => 16,  135 => 14,  131 => 13,  127 => 12,  124 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Liste des événements{% endblock %}

{% block body %}
<div class=\"formbold-main-wrapper\">
    <div class=\"formbold-form-wrapper\">
        <h2 class=\"formbold-form-title text-center\">Liste des événements</h2>

        {% for evenement in evenements %}
            <div class=\"formbold-mb-3\">
                <h3 class=\"text-xl font-semibold text-gray-800\">{{ evenement.titre }}</h3>
                <p class=\"text-gray-600\">{{ evenement.date|date('d M Y') }}</p>
                <p class=\"text-gray-700 mt-2\">{{ evenement.description }}</p>
               
                {% if evenement.notification is null %}
                    <div>
                        <form action=\"{{ path('app_notification_new', {'id': evenement.id}) }}\" method=\"get\">
                            <button type=\"submit\" class=\"bg-blue-600 text-blue px-4 py-2 rounded\">Informer les apprenants</button>
                        </form>
                        <form action=\"{{ path('app_evenement_edit', {'id': evenement.id}) }}\" method=\"get\">
                            <button type=\"submit\" class=\"bg-blue-600 text-blue px-4 py-2 rounded\">Modifier</button>
                        </form>
                    </div>
                {% else %}
                    <button class=\"bg-green-500 text-black px-4 py-2 rounded cursor-not-allowed opacity-50\" disabled>
                        Notification déjà envoyée
                    </button>
                {% endif %}
                
                <!-- Le bouton de suppression est toujours affiché -->
                {{ include('evenement/_delete_form.html.twig') }}

            </div>
            <hr class=\"my-4\">
        {% else %}
            <p class=\"text-gray-600\">Aucun événement à afficher pour le moment.</p>
        {% endfor %}

    </div>
</div>

<style>
  .formbold-main-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 48px;
  }

  .formbold-form-wrapper {
    margin: 0 auto;
    max-width: 570px;
    width: 100%;
    background: white;
    padding: 40px;
  }

  .formbold-form-title {
    font-weight: 600;
    font-size: 28px;
    line-height: 34px;
    color: #07074d;
    margin-bottom: 30px;
  }

  .formbold-mb-3 {
    margin-bottom: 20px;
  }

  .formbold-mb-3 h3 {
    font-size: 24px;
    color: #07074d;
  }

  .formbold-mb-3 p {
    font-size: 16px;
    color: #536387;
    line-height: 1.5;
  }

  .my-4 {
    margin-top: 20px;
    margin-bottom: 20px;
  }
</style>

{% endblock %}
", "evenement/index.html.twig", "C:\\Users\\walid\\Desktop\\finalPI\\pi2025\\templates\\evenement\\index.html.twig");
    }
}
