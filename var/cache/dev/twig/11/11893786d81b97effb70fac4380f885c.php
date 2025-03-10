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

/* formation/formations.html.twig */
class __TwigTemplate_c7990cb211b431b2b50ae35a0edbcbb7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/formations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/formations.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "formation/formations.html.twig", 1);
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

        yield "Formations";
        
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
        yield "  <section class=\"course_section layout_padding\">
    <div class=\"course_bg_box\">
      <div class=\"bg_img_box\">
        <img src=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontOffice/images/course-bg.jpg"), "html", null, true);
        yield "\" alt=\"\">
      </div>
    </div>
    <div class=\"container-fluid pr-0\">
      <div class=\"heading_container\">
        <h2>Nos Formations</h2>
        <p>Découvrez nos formations pour enrichir vos compétences.</p>
      </div>
      <div class=\"course_container\">
        <div class=\"course_owl-carousel owl-carousel owl-theme\">
          ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new RuntimeError('Variable "formations" does not exist.', 19, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 20
            yield "            <div class=\"item\">
              <div class=\"box\">
                <div class=\"img-box\">
                 
                </div>
                <div class=\"detail-box\">
                  <h4>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "titre", [], "any", false, false, false, 26), "html", null, true);
            yield "</h4>
                  <p>";
            // line 27
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "description", [], "any", false, false, false, 27)) > 100)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "description", [], "any", false, false, false, 27), 0, 100) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "description", [], "any", false, false, false, 27), "html", null, true)));
            yield "</p>

<div class=\"score-section\">
    ";
            // line 30
            if (array_key_exists("formationScores", $context)) {
                // line 31
                yield "        ";
                $context["foundScore"] = false;
                // line 32
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["formationScores"]) || array_key_exists("formationScores", $context) ? $context["formationScores"] : (function () { throw new RuntimeError('Variable "formationScores" does not exist.', 32, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["score"]) {
                    // line 33
                    yield "            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["score"], "formation", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33) == CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 33))) {
                        // line 34
                        yield "                <div class=\"d-flex flex-column mt-2\">
                    <div class=\"d-flex align-items-center\">
                        <!-- Thumbs up icon with red color to match the template -->
                        <i class=\"fas fa-thumbs-up\" style=\"color: #FF4C4C; margin-right: 8px;\"></i>
                        <strong style=\"color: black;\">";
                        // line 38
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["score"], "noteMoyenne", [], "any", false, false, false, 38), 1), "html", null, true);
                        yield " / 5</strong>
                    </div>
                    <div class=\"d-flex align-items-center mt-1\">
                        <!-- Comment icon in gray to match the template -->
                        <i class=\"fas fa-comment-alt\" style=\"color: #A9A9A9; margin-right: 8px;\"></i>
                        <span style=\"color: black;\">";
                        // line 43
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["score"], "nombreAvis", [], "any", false, false, false, 43), "html", null, true);
                        yield " Avis</span>
                    </div>
                </div>
                ";
                        // line 46
                        $context["foundScore"] = true;
                        // line 47
                        yield "            ";
                    }
                    // line 48
                    yield "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['score'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                yield "        ";
                if ( !(isset($context["foundScore"]) || array_key_exists("foundScore", $context) ? $context["foundScore"] : (function () { throw new RuntimeError('Variable "foundScore" does not exist.', 49, $this->source); })())) {
                    // line 50
                    yield "            <div class=\"d-flex align-items-center text-muted mt-2\">
                <i class=\"fas fa-ban\" style=\"color: #A9A9A9; margin-right: 8px;\"></i>
                <span style=\"color: #A9A9A9;\">Aucune note</span>
            </div>
        ";
                }
                // line 55
                yield "    ";
            } else {
                // line 56
                yield "        <div class=\"d-flex align-items-center text-muted mt-2\">
            <i class=\"fas fa-ban\" style=\"color: #A9A9A9; margin-right: 8px;\"></i>
            <span style=\"color: #A9A9A9;\">Aucune note</span>
        </div>
    ";
            }
            // line 61
            yield "</div>

      
                  <a href=\"";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            yield "\">
                    Voir Détail
                  </a>
                  <a href=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_index", ["formationId" => CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 67)]), "html", null, true);
            yield "\" class=\"btn btn-info\">
                  Avis
                </a>
                </div>
              </div>
            </div>

          ";
            $context['_iterated'] = true;
        }
        // line 81
        if (!$context['_iterated']) {
            // line 75
            yield "            <div class=\"col-12\">
              <div class=\"alert alert-warning text-center\">
                Aucune formation disponible pour le moment.

              </div>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['formation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        yield "        </div>
      </div>
    </div>
  </section>
  <style>
  .score-section {
    font-size: 0.9rem;
    color: #555;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
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
        return "formation/formations.html.twig";
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
        return array (  242 => 82,  230 => 75,  228 => 81,  216 => 67,  210 => 64,  205 => 61,  198 => 56,  195 => 55,  188 => 50,  185 => 49,  179 => 48,  176 => 47,  174 => 46,  168 => 43,  160 => 38,  154 => 34,  151 => 33,  146 => 32,  143 => 31,  141 => 30,  135 => 27,  131 => 26,  123 => 20,  118 => 19,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Formations{% endblock %}

{% block body %}
  <section class=\"course_section layout_padding\">
    <div class=\"course_bg_box\">
      <div class=\"bg_img_box\">
        <img src=\"{{ asset('frontOffice/images/course-bg.jpg') }}\" alt=\"\">
      </div>
    </div>
    <div class=\"container-fluid pr-0\">
      <div class=\"heading_container\">
        <h2>Nos Formations</h2>
        <p>Découvrez nos formations pour enrichir vos compétences.</p>
      </div>
      <div class=\"course_container\">
        <div class=\"course_owl-carousel owl-carousel owl-theme\">
          {% for formation in formations %}
            <div class=\"item\">
              <div class=\"box\">
                <div class=\"img-box\">
                 
                </div>
                <div class=\"detail-box\">
                  <h4>{{ formation.titre }}</h4>
                  <p>{{ formation.description|length > 100 ? formation.description|slice(0, 100) ~ '...' : formation.description }}</p>

<div class=\"score-section\">
    {% if formationScores is defined %}
        {% set foundScore = false %}
        {% for score in formationScores %}
            {% if score.formation.id == formation.id %}
                <div class=\"d-flex flex-column mt-2\">
                    <div class=\"d-flex align-items-center\">
                        <!-- Thumbs up icon with red color to match the template -->
                        <i class=\"fas fa-thumbs-up\" style=\"color: #FF4C4C; margin-right: 8px;\"></i>
                        <strong style=\"color: black;\">{{ score.noteMoyenne|number_format(1) }} / 5</strong>
                    </div>
                    <div class=\"d-flex align-items-center mt-1\">
                        <!-- Comment icon in gray to match the template -->
                        <i class=\"fas fa-comment-alt\" style=\"color: #A9A9A9; margin-right: 8px;\"></i>
                        <span style=\"color: black;\">{{ score.nombreAvis }} Avis</span>
                    </div>
                </div>
                {% set foundScore = true %}
            {% endif %}
        {% endfor %}
        {% if not foundScore %}
            <div class=\"d-flex align-items-center text-muted mt-2\">
                <i class=\"fas fa-ban\" style=\"color: #A9A9A9; margin-right: 8px;\"></i>
                <span style=\"color: #A9A9A9;\">Aucune note</span>
            </div>
        {% endif %}
    {% else %}
        <div class=\"d-flex align-items-center text-muted mt-2\">
            <i class=\"fas fa-ban\" style=\"color: #A9A9A9; margin-right: 8px;\"></i>
            <span style=\"color: #A9A9A9;\">Aucune note</span>
        </div>
    {% endif %}
</div>

      
                  <a href=\"{{ path('app_formation_show', {'id': formation.id}) }}\">
                    Voir Détail
                  </a>
                  <a href=\"{{ path('app_avis_index', {'formationId': formation.id}) }}\" class=\"btn btn-info\">
                  Avis
                </a>
                </div>
              </div>
            </div>

          {% else %}
            <div class=\"col-12\">
              <div class=\"alert alert-warning text-center\">
                Aucune formation disponible pour le moment.

              </div>
            </div>
          {% endfor %}
        </div>
      </div>
    </div>
  </section>
  <style>
  .score-section {
    font-size: 0.9rem;
    color: #555;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

  </style>
{% endblock %}", "formation/formations.html.twig", "C:\\Users\\walid\\Desktop\\Nouveau dossier\\pi2025\\templates\\formation\\formations.html.twig");
    }
}
