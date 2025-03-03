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

/* lecon/lecons.html.twig */
class __TwigTemplate_8e191b8ae9263d02079d32e00fa70eaf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lecon/lecons.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lecon/lecons.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "lecon/lecons.html.twig", 1);
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

        yield "Leçons de ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), "html", null, true);
        
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
        <h1>Leçons de la formation \"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 7, $this->source); })()), "titre", [], "any", false, false, false, 7), "html", null, true);
        yield "\"</h1>

        ";
        // line 9
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["lessons"]) || array_key_exists("lessons", $context) ? $context["lessons"] : (function () { throw new RuntimeError('Variable "lessons" does not exist.', 9, $this->source); })()))) {
            // line 10
            yield "            <p>Aucune leçon disponible pour cette formation.</p>
        ";
        } else {
            // line 12
            yield "            <ul class=\"nav nav-tabs\" id=\"lessonTabs\" role=\"tablist\">
                ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["lessons"]) || array_key_exists("lessons", $context) ? $context["lessons"] : (function () { throw new RuntimeError('Variable "lessons" does not exist.', 13, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["lecon"]) {
                // line 14
                yield "                    <li class=\"nav-item\" role=\"presentation\">
                        <button class=\"nav-link ";
                // line 15
                if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 15)) {
                    yield "active";
                }
                yield "\" id=\"tab";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lecon"], "id", [], "any", false, false, false, 15), "html", null, true);
                yield "\" data-bs-toggle=\"tab\" data-bs-target=\"#content";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lecon"], "id", [], "any", false, false, false, 15), "html", null, true);
                yield "\" type=\"button\" role=\"tab\" aria-controls=\"content";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lecon"], "id", [], "any", false, false, false, 15), "html", null, true);
                yield "\" aria-selected=\"";
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 15)) ? ("true") : ("false"));
                yield "\">
                            ";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lecon"], "titre", [], "any", false, false, false, 16), "html", null, true);
                yield "
                        </button>
                    </li>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['lecon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            yield "            </ul>

            <div class=\"tab-content mt-3\" id=\"lessonTabsContent\">
                ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["lessons"]) || array_key_exists("lessons", $context) ? $context["lessons"] : (function () { throw new RuntimeError('Variable "lessons" does not exist.', 23, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["lecon"]) {
                // line 24
                yield "                    <div class=\"tab-pane fade ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 24)) {
                    yield "show active";
                }
                yield "\" id=\"content";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lecon"], "id", [], "any", false, false, false, 24), "html", null, true);
                yield "\" role=\"tabpanel\" aria-labelledby=\"tab";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lecon"], "id", [], "any", false, false, false, 24), "html", null, true);
                yield "\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lecon"], "titre", [], "any", false, false, false, 27), "html", null, true);
                yield "</h5>
                                <p class=\"card-text\">";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lecon"], "contenu", [], "any", false, false, false, 28), "html", null, true);
                yield "</p>
                                <p class=\"text-muted\">Créé le ";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["lecon"], "dateCreation", [], "any", false, false, false, 29), "d/m/Y"), "html", null, true);
                yield "</p>
                                
                                <div class=\"d-flex gap-2\">
                                    <button class=\"btn btn-primary\" disabled>Télécharger le cours</button>
                                    <a href=\"";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lecon_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["lecon"], "id", [], "any", false, false, false, 33)]), "html", null, true);
                yield "\" class=\"btn btn-warning\">Modifier</a>
                                    ";
                // line 34
                yield Twig\Extension\CoreExtension::include($this->env, $context, "lecon/_delete_form.html.twig");
                yield "
                                </div>
                            </div>
                        </div>
                    </div>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['lecon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            yield "            </div>
        ";
        }
        // line 42
        yield "
        <a href=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation_show_admin", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
        yield "\" class=\"btn btn-secondary mt-3\">Retour à la formation</a>
    </div>

    ";
        // line 47
        yield "    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
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
        return "lecon/lecons.html.twig";
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
        return array (  257 => 47,  251 => 43,  248 => 42,  244 => 40,  224 => 34,  220 => 33,  213 => 29,  209 => 28,  205 => 27,  192 => 24,  175 => 23,  170 => 20,  152 => 16,  138 => 15,  135 => 14,  118 => 13,  115 => 12,  111 => 10,  109 => 9,  104 => 7,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Leçons de {{ formation.titre }}{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <h1>Leçons de la formation \"{{ formation.titre }}\"</h1>

        {% if lessons is empty %}
            <p>Aucune leçon disponible pour cette formation.</p>
        {% else %}
            <ul class=\"nav nav-tabs\" id=\"lessonTabs\" role=\"tablist\">
                {% for lecon in lessons %}
                    <li class=\"nav-item\" role=\"presentation\">
                        <button class=\"nav-link {% if loop.first %}active{% endif %}\" id=\"tab{{ lecon.id }}\" data-bs-toggle=\"tab\" data-bs-target=\"#content{{ lecon.id }}\" type=\"button\" role=\"tab\" aria-controls=\"content{{ lecon.id }}\" aria-selected=\"{{ loop.first ? 'true' : 'false' }}\">
                            {{ lecon.titre }}
                        </button>
                    </li>
                {% endfor %}
            </ul>

            <div class=\"tab-content mt-3\" id=\"lessonTabsContent\">
                {% for lecon in lessons %}
                    <div class=\"tab-pane fade {% if loop.first %}show active{% endif %}\" id=\"content{{ lecon.id }}\" role=\"tabpanel\" aria-labelledby=\"tab{{ lecon.id }}\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">{{ lecon.titre }}</h5>
                                <p class=\"card-text\">{{ lecon.contenu }}</p>
                                <p class=\"text-muted\">Créé le {{ lecon.dateCreation|date('d/m/Y') }}</p>
                                
                                <div class=\"d-flex gap-2\">
                                    <button class=\"btn btn-primary\" disabled>Télécharger le cours</button>
                                    <a href=\"{{ path('app_lecon_edit', {'id': lecon.id}) }}\" class=\"btn btn-warning\">Modifier</a>
                                    {{ include('lecon/_delete_form.html.twig') }}
                                </div>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% endif %}

        <a href=\"{{ path('app_formation_show_admin', {'id': formation.id}) }}\" class=\"btn btn-secondary mt-3\">Retour à la formation</a>
    </div>

    {# Bootstrap JS for tabs functionality #}
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
{% endblock %}
", "lecon/lecons.html.twig", "D:\\esprit\\PI\\final\\pi2025\\templates\\lecon\\lecons.html.twig");
    }
}
