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

/* lecon/showClient.html.twig */
class __TwigTemplate_3b71c4bd20be9a657ac9559db77bc0ab extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lecon/showClient.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lecon/showClient.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "lecon/showClient.html.twig", 1);
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
                yield "\" 
                                id=\"tab";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lecon"], "id", [], "any", false, false, false, 16), "html", null, true);
                yield "\" 
                                data-bs-toggle=\"tab\" 
                                data-bs-target=\"#content";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lecon"], "id", [], "any", false, false, false, 18), "html", null, true);
                yield "\" 
                                type=\"button\" role=\"tab\" 
                                aria-controls=\"content";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lecon"], "id", [], "any", false, false, false, 20), "html", null, true);
                yield "\" 
                                aria-selected=\"";
                // line 21
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 21)) ? ("true") : ("false"));
                yield "\">
                            ";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lecon"], "titre", [], "any", false, false, false, 22), "html", null, true);
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
            // line 26
            yield "            </ul>

            <div class=\"tab-content mt-3\" id=\"lessonTabsContent\">
                ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["lessons"]) || array_key_exists("lessons", $context) ? $context["lessons"] : (function () { throw new RuntimeError('Variable "lessons" does not exist.', 29, $this->source); })()));
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
                // line 30
                yield "                    <div class=\"tab-pane fade ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 30)) {
                    yield "show active";
                }
                yield "\" 
                         id=\"content";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lecon"], "id", [], "any", false, false, false, 31), "html", null, true);
                yield "\" role=\"tabpanel\" 
                         aria-labelledby=\"tab";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lecon"], "id", [], "any", false, false, false, 32), "html", null, true);
                yield "\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lecon"], "titre", [], "any", false, false, false, 35), "html", null, true);
                yield "</h5>
                                <p class=\"card-text\">";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lecon"], "contenu", [], "any", false, false, false, 36), "html", null, true);
                yield "</p>
                                <p class=\"text-muted\">Créé le ";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["lecon"], "dateCreation", [], "any", false, false, false, 37), "d/m/Y"), "html", null, true);
                yield "</p>

                                <!-- Bouton de téléchargement -->
                                <form action=\"";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lecon.pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["lecon"], "id", [], "any", false, false, false, 40)]), "html", null, true);
                yield "\" method=\"get\" style=\"display: inline;\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Télécharger le cours</button>
                                </form>

                                <!-- Bouton \"Marquer comme terminé\" -->
                                <button class=\"btn btn-success markCompleted mt-2\" data-lecon-id=\"";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lecon"], "id", [], "any", false, false, false, 45), "html", null, true);
                yield "\">Marquer comme terminé</button>
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
            // line 50
            yield "            </div>

            <!-- Barre de progression -->
            <div class=\"progress mt-3\">
                <div id=\"progressBar\" class=\"progress-bar bg-success\" role=\"progressbar\" 
                     style=\"width: ";
            // line 55
            yield ((((isset($context["total_lecons"]) || array_key_exists("total_lecons", $context) ? $context["total_lecons"] : (function () { throw new RuntimeError('Variable "total_lecons" does not exist.', 55, $this->source); })()) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((isset($context["progression"]) || array_key_exists("progression", $context) ? $context["progression"] : (function () { throw new RuntimeError('Variable "progression" does not exist.', 55, $this->source); })()) / (isset($context["total_lecons"]) || array_key_exists("total_lecons", $context) ? $context["total_lecons"] : (function () { throw new RuntimeError('Variable "total_lecons" does not exist.', 55, $this->source); })())) * 100), "html", null, true)) : (0));
            yield "%;\" 
                     aria-valuenow=\"";
            // line 56
            yield ((((isset($context["total_lecons"]) || array_key_exists("total_lecons", $context) ? $context["total_lecons"] : (function () { throw new RuntimeError('Variable "total_lecons" does not exist.', 56, $this->source); })()) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((isset($context["progression"]) || array_key_exists("progression", $context) ? $context["progression"] : (function () { throw new RuntimeError('Variable "progression" does not exist.', 56, $this->source); })()) / (isset($context["total_lecons"]) || array_key_exists("total_lecons", $context) ? $context["total_lecons"] : (function () { throw new RuntimeError('Variable "total_lecons" does not exist.', 56, $this->source); })())) * 100), "html", null, true)) : (0));
            yield "\" 
                     aria-valuemin=\"0\" aria-valuemax=\"100\">
                </div>
            </div>
            <p>";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["progression"]) || array_key_exists("progression", $context) ? $context["progression"] : (function () { throw new RuntimeError('Variable "progression" does not exist.', 60, $this->source); })()), "html", null, true);
            yield " / ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_lecons"]) || array_key_exists("total_lecons", $context) ? $context["total_lecons"] : (function () { throw new RuntimeError('Variable "total_lecons" does not exist.', 60, $this->source); })()), "html", null, true);
            yield " leçons terminées</p>

        ";
        }
        // line 63
        yield "
        <!-- Bouton retour -->
        <a href=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 65, $this->source); })()), "id", [], "any", false, false, false, 65)]), "html", null, true);
        yield "\" class=\"btn btn-secondary mt-3\">Retour à la formation</a>
    </div>

    <!-- Script pour marquer la leçon comme terminée -->
    <script>
        document.querySelectorAll('.markCompleted').forEach(button => {
            button.addEventListener('click', function() {
                let leconId = this.dataset.leconId;

                fetch('/lecon/marquer-termine/' + leconId, { 
                    method: 'POST', 
                    headers: { 'X-Requested-With': 'XMLHttpRequest' }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        location.reload();
                    } else {
                        alert('Une erreur est survenue.');
                    }
                })
                .catch(error => console.error('Erreur:', error));
            });
        });
    </script>

    <!-- Bootstrap JS for Tabs -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
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
        return "lecon/showClient.html.twig";
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
        return array (  290 => 65,  286 => 63,  278 => 60,  271 => 56,  267 => 55,  260 => 50,  241 => 45,  233 => 40,  227 => 37,  223 => 36,  219 => 35,  213 => 32,  209 => 31,  202 => 30,  185 => 29,  180 => 26,  162 => 22,  158 => 21,  154 => 20,  149 => 18,  144 => 16,  138 => 15,  135 => 14,  118 => 13,  115 => 12,  111 => 10,  109 => 9,  104 => 7,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

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
                        <button class=\"nav-link {% if loop.first %}active{% endif %}\" 
                                id=\"tab{{ lecon.id }}\" 
                                data-bs-toggle=\"tab\" 
                                data-bs-target=\"#content{{ lecon.id }}\" 
                                type=\"button\" role=\"tab\" 
                                aria-controls=\"content{{ lecon.id }}\" 
                                aria-selected=\"{{ loop.first ? 'true' : 'false' }}\">
                            {{ lecon.titre }}
                        </button>
                    </li>
                {% endfor %}
            </ul>

            <div class=\"tab-content mt-3\" id=\"lessonTabsContent\">
                {% for lecon in lessons %}
                    <div class=\"tab-pane fade {% if loop.first %}show active{% endif %}\" 
                         id=\"content{{ lecon.id }}\" role=\"tabpanel\" 
                         aria-labelledby=\"tab{{ lecon.id }}\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">{{ lecon.titre }}</h5>
                                <p class=\"card-text\">{{ lecon.contenu }}</p>
                                <p class=\"text-muted\">Créé le {{ lecon.dateCreation|date('d/m/Y') }}</p>

                                <!-- Bouton de téléchargement -->
                                <form action=\"{{ path('lecon.pdf', {'id': lecon.id}) }}\" method=\"get\" style=\"display: inline;\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Télécharger le cours</button>
                                </form>

                                <!-- Bouton \"Marquer comme terminé\" -->
                                <button class=\"btn btn-success markCompleted mt-2\" data-lecon-id=\"{{ lecon.id }}\">Marquer comme terminé</button>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>

            <!-- Barre de progression -->
            <div class=\"progress mt-3\">
                <div id=\"progressBar\" class=\"progress-bar bg-success\" role=\"progressbar\" 
                     style=\"width: {{ total_lecons > 0 ? (progression / total_lecons) * 100 : 0 }}%;\" 
                     aria-valuenow=\"{{ total_lecons > 0 ? (progression / total_lecons) * 100 : 0 }}\" 
                     aria-valuemin=\"0\" aria-valuemax=\"100\">
                </div>
            </div>
            <p>{{ progression }} / {{ total_lecons }} leçons terminées</p>

        {% endif %}

        <!-- Bouton retour -->
        <a href=\"{{ path('app_formation_show', {'id': formation.id}) }}\" class=\"btn btn-secondary mt-3\">Retour à la formation</a>
    </div>

    <!-- Script pour marquer la leçon comme terminée -->
    <script>
        document.querySelectorAll('.markCompleted').forEach(button => {
            button.addEventListener('click', function() {
                let leconId = this.dataset.leconId;

                fetch('/lecon/marquer-termine/' + leconId, { 
                    method: 'POST', 
                    headers: { 'X-Requested-With': 'XMLHttpRequest' }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        location.reload();
                    } else {
                        alert('Une erreur est survenue.');
                    }
                })
                .catch(error => console.error('Erreur:', error));
            });
        });
    </script>

    <!-- Bootstrap JS for Tabs -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
{% endblock %}
", "lecon/showClient.html.twig", "C:\\Users\\walid\\Desktop\\Nouveau dossier (2)\\pi2025\\templates\\lecon\\showClient.html.twig");
    }
}
