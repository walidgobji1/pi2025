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

/* /formation/formations.html.twig */
class __TwigTemplate_1095cfb24a61ec8d3fd5b46148067ff7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/formation/formations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/formation/formations.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "/formation/formations.html.twig", 1);
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
       <div class=\"input-group\" style=\"width: 40%;\">
                                <input class=\"form-control border-end-0 border rounded-pill py-2\" type=\"search\" id=\"example-search-input\" style=\"font-size: 0.875rem;\" placeholder=\"Search...\">
                                <span class=\"input-group-append\">
                                    <button class=\"btn btn-outline-secondary border-bottom-0 border rounded-pill py-2\" type=\"button\" id=\"searchButton\" style=\"font-size: 0.875rem;\">Search</button>
                                </span>
                            </div>
      <div class=\"course_container\">
        <div class=\"course_owl-carousel owl-carousel owl-theme\">
          ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new RuntimeError('Variable "formations" does not exist.', 25, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 26
            yield "            <div class=\"item\">
              <div class=\"box\">
                <div class=\"img-box\">
                                 <div class=\"text-center\">
                    <img src=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "imageName", [], "any", false, false, false, 30))), "html", null, true);
            yield "\"  class=\"img-fluid mb-3\" style=\"height: 150px;width: 100%;\" />
                </div>
      
                </div>
                <div class=\"detail-box\">
                  <h4>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "titre", [], "any", false, false, false, 35), "html", null, true);
            yield "</h4>
                  <p>";
            // line 36
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "description", [], "any", false, false, false, 36)) > 100)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "description", [], "any", false, false, false, 36), 0, 100) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "description", [], "any", false, false, false, 36), "html", null, true)));
            yield "</p>
                  

<div class=\"score-section\">
    ";
            // line 40
            if (array_key_exists("formationScores", $context)) {
                // line 41
                yield "        ";
                $context["foundScore"] = false;
                // line 42
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["formationScores"]) || array_key_exists("formationScores", $context) ? $context["formationScores"] : (function () { throw new RuntimeError('Variable "formationScores" does not exist.', 42, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["score"]) {
                    // line 43
                    yield "            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["score"], "formation", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43) == CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 43))) {
                        // line 44
                        yield "                <div class=\"d-flex flex-column mt-2\">
                    <div class=\"d-flex align-items-center\">
                        <!-- Thumbs up icon with red color to match the template -->
                        <i class=\"fas fa-thumbs-up\" style=\"color: #FF4C4C; margin-right: 8px;\"></i>
                        <strong style=\"color: black;\">";
                        // line 48
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["score"], "noteMoyenne", [], "any", false, false, false, 48), 1), "html", null, true);
                        yield " / 5</strong>
                    </div>
                    <div class=\"d-flex align-items-center mt-1\">
                        <!-- Comment icon in gray to match the template -->
                        <i class=\"fas fa-comment-alt\" style=\"color: #A9A9A9; margin-right: 8px;\"></i>
                        <span style=\"color: black;\">";
                        // line 53
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["score"], "nombreAvis", [], "any", false, false, false, 53), "html", null, true);
                        yield " Avis</span>
                    </div>
                </div>
                ";
                        // line 56
                        $context["foundScore"] = true;
                        // line 57
                        yield "            ";
                    }
                    // line 58
                    yield "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['score'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                yield "        ";
                if ( !(isset($context["foundScore"]) || array_key_exists("foundScore", $context) ? $context["foundScore"] : (function () { throw new RuntimeError('Variable "foundScore" does not exist.', 59, $this->source); })())) {
                    // line 60
                    yield "            <div class=\"d-flex align-items-center text-muted mt-2\">
                <i class=\"fas fa-ban\" style=\"color: #A9A9A9; margin-right: 8px;\"></i>
                <span style=\"color: #A9A9A9;\">Aucune note</span>
            </div>
        ";
                }
                // line 65
                yield "    ";
            } else {
                // line 66
                yield "        <div class=\"d-flex align-items-center text-muted mt-2\">
            <i class=\"fas fa-ban\" style=\"color: #A9A9A9; margin-right: 8px;\"></i>
            <span style=\"color: #A9A9A9;\">Aucune note</span>
        </div>
    ";
            }
            // line 71
            yield "</div>

      
                  <a href=\"";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            yield "\">
                    Voir Détail
                  </a>
                  <a href=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_index", ["formationId" => CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 77)]), "html", null, true);
            yield "\" class=\"btn btn-info\">
                  Avis
                </a>
                </div>
              </div>
            </div>

          ";
            $context['_iterated'] = true;
        }
        // line 91
        if (!$context['_iterated']) {
            // line 85
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
        // line 92
        yield "        </div>
      </div>
    </div>
  </section>
   <script>
\$(document).ready(function () {
    \$('#searchButton').click(function () {
        var searchQuery = \$('#example-search-input').val().toLowerCase(); // Get the search query

        // Loop through each formation item and show/hide based on search query
        \$('.course_owl-carousel .item').each(function () {
            var titre = \$(this).find('.detail-box h4').text().toLowerCase(); // Get the title text
            var description = \$(this).find('.detail-box p').text().toLowerCase(); // Get the description text

            // Check if either title or description contains the search query
            if (titre.includes(searchQuery) || description.includes(searchQuery)) {
                \$(this).show(); // Show item
            } else {
                \$(this).hide(); // Hide item
            }
        });

        // If no items are visible, hide the carousel container (optional)
        if (\$('.course_owl-carousel .item:visible').length === 0) {
            \$('.course_owl-carousel').hide();
        } else {
            \$('.course_owl-carousel').show();
        }
    });
});

        </script>
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
        return "/formation/formations.html.twig";
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
        return array (  255 => 92,  243 => 85,  241 => 91,  229 => 77,  223 => 74,  218 => 71,  211 => 66,  208 => 65,  201 => 60,  198 => 59,  192 => 58,  189 => 57,  187 => 56,  181 => 53,  173 => 48,  167 => 44,  164 => 43,  159 => 42,  156 => 41,  154 => 40,  147 => 36,  143 => 35,  135 => 30,  129 => 26,  124 => 25,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
       <div class=\"input-group\" style=\"width: 40%;\">
                                <input class=\"form-control border-end-0 border rounded-pill py-2\" type=\"search\" id=\"example-search-input\" style=\"font-size: 0.875rem;\" placeholder=\"Search...\">
                                <span class=\"input-group-append\">
                                    <button class=\"btn btn-outline-secondary border-bottom-0 border rounded-pill py-2\" type=\"button\" id=\"searchButton\" style=\"font-size: 0.875rem;\">Search</button>
                                </span>
                            </div>
      <div class=\"course_container\">
        <div class=\"course_owl-carousel owl-carousel owl-theme\">
          {% for formation in formations %}
            <div class=\"item\">
              <div class=\"box\">
                <div class=\"img-box\">
                                 <div class=\"text-center\">
                    <img src=\"{{ asset('uploads/images/' ~ formation.imageName) }}\"  class=\"img-fluid mb-3\" style=\"height: 150px;width: 100%;\" />
                </div>
      
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
   <script>
\$(document).ready(function () {
    \$('#searchButton').click(function () {
        var searchQuery = \$('#example-search-input').val().toLowerCase(); // Get the search query

        // Loop through each formation item and show/hide based on search query
        \$('.course_owl-carousel .item').each(function () {
            var titre = \$(this).find('.detail-box h4').text().toLowerCase(); // Get the title text
            var description = \$(this).find('.detail-box p').text().toLowerCase(); // Get the description text

            // Check if either title or description contains the search query
            if (titre.includes(searchQuery) || description.includes(searchQuery)) {
                \$(this).show(); // Show item
            } else {
                \$(this).hide(); // Hide item
            }
        });

        // If no items are visible, hide the carousel container (optional)
        if (\$('.course_owl-carousel .item:visible').length === 0) {
            \$('.course_owl-carousel').hide();
        } else {
            \$('.course_owl-carousel').show();
        }
    });
});

        </script>
  <style>
  .score-section {
    font-size: 0.9rem;
    color: #555;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

  </style>
{% endblock %}", "/formation/formations.html.twig", "C:\\Users\\walid\\Desktop\\Nouveau dossier\\pi2025\\templates\\formation\\formations.html.twig");
    }
}
