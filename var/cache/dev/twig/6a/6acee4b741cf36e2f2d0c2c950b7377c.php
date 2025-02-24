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

/* admin/formation_avis.html.twig */
class __TwigTemplate_7cfb65986dd9b79df30339c7312331f6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/formation_avis.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/formation_avis.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/formation_avis.html.twig", 1);
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

        yield "Reviews for ";
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
        yield "<div class=\"container mt-5\">
    <div class=\"card shadow-lg border-0\">
        <div class=\"card-header bg-primary text-white rounded-top\">
            <h3 class=\"mb-0\">Avis pour la formation  ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 9, $this->source); })()), "titre", [], "any", false, false, false, 9), "html", null, true);
        yield "</h3>
        </div>
        <div class=\"card-body pt-4\">
            ";
        // line 12
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["avisList"]) || array_key_exists("avisList", $context) ? $context["avisList"] : (function () { throw new RuntimeError('Variable "avisList" does not exist.', 12, $this->source); })()))) {
            // line 13
            yield "                <div class=\"row row-cols-1 row-cols-md-2 g-4\">
                    ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["avisList"]) || array_key_exists("avisList", $context) ? $context["avisList"] : (function () { throw new RuntimeError('Variable "avisList" does not exist.', 14, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["avis"]) {
                // line 15
                yield "                        <div class=\"col\">
                            <div class=\"card border-0 shadow-lg ";
                // line 16
                if (CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "isFlagged", [], "any", false, false, false, 16)) {
                    yield "border-danger";
                }
                yield "\">
                                <div class=\"card-body p-4\">
                                    <div class=\"d-flex align-items-center justify-content-between mb-3\">
                                        <div class=\"text-warning fs-5\">
                                            ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 21
                    yield "                                                ";
                    if (($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "note", [], "any", false, false, false, 21))) {
                        // line 22
                        yield "                                                    <i class=\"fas fa-star\"></i>
                                                ";
                    } else {
                        // line 24
                        yield "                                                    <i class=\"far fa-star\"></i>
                                                ";
                    }
                    // line 26
                    yield "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                yield "                                        </div>
                                        ";
                // line 28
                if (CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "isFlagged", [], "any", false, false, false, 28)) {
                    // line 29
                    yield "                                            <i class=\"fas fa-flag text-danger ms-2\" title=\"Flagged\"></i>
                                        ";
                }
                // line 31
                yield "                                    </div>
                                    <p class=\"card-text text-muted\">";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "commentaire", [], "any", false, false, false, 32), "html", null, true);
                yield "</p>
                                    <small class=\"text-secondary\">
                                        Submitted on ";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "dateCreation", [], "any", false, false, false, 34), "d M Y"), "html", null, true);
                yield "
                                    </small>

                                    ";
                // line 38
                yield "                                    <div class=\"mt-3 d-flex justify-content-end\">
                                        <form action=\"";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_avis_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "id", [], "any", false, false, false, 39)]), "html", null, true);
                yield "\" method=\"POST\" style=\"display:inline;\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "id", [], "any", false, false, false, 40))), "html", null, true);
                yield "\">
                                            <button type=\"submit\" class=\"btn btn-danger btn-sm ";
                // line 41
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "isFlagged", [], "any", false, false, false, 41)) {
                    yield "d-none";
                }
                yield "\">
                                                <i class=\"fas fa-trash-alt\"></i> Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['avis'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            yield "                </div>
            ";
        } else {
            // line 52
            yield "                <div class=\"alert alert-warning text-center\">
                    <i class=\"fas fa-info-circle\"></i> No reviews yet.
                </div>
            ";
        }
        // line 56
        yield "        </div>
    </div>
</div>

<!-- FontAwesome for stars and icons -->
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
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
        return "admin/formation_avis.html.twig";
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
        return array (  215 => 56,  209 => 52,  205 => 50,  188 => 41,  184 => 40,  180 => 39,  177 => 38,  171 => 34,  166 => 32,  163 => 31,  159 => 29,  157 => 28,  154 => 27,  148 => 26,  144 => 24,  140 => 22,  137 => 21,  133 => 20,  124 => 16,  121 => 15,  117 => 14,  114 => 13,  112 => 12,  106 => 9,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Reviews for {{ formation.titre }}{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <div class=\"card shadow-lg border-0\">
        <div class=\"card-header bg-primary text-white rounded-top\">
            <h3 class=\"mb-0\">Avis pour la formation  {{ formation.titre }}</h3>
        </div>
        <div class=\"card-body pt-4\">
            {% if avisList is not empty %}
                <div class=\"row row-cols-1 row-cols-md-2 g-4\">
                    {% for avis in avisList %}
                        <div class=\"col\">
                            <div class=\"card border-0 shadow-lg {% if avis.isFlagged %}border-danger{% endif %}\">
                                <div class=\"card-body p-4\">
                                    <div class=\"d-flex align-items-center justify-content-between mb-3\">
                                        <div class=\"text-warning fs-5\">
                                            {% for i in 1..5 %}
                                                {% if i <= avis.note %}
                                                    <i class=\"fas fa-star\"></i>
                                                {% else %}
                                                    <i class=\"far fa-star\"></i>
                                                {% endif %}
                                            {% endfor %}
                                        </div>
                                        {% if avis.isFlagged %}
                                            <i class=\"fas fa-flag text-danger ms-2\" title=\"Flagged\"></i>
                                        {% endif %}
                                    </div>
                                    <p class=\"card-text text-muted\">{{ avis.commentaire }}</p>
                                    <small class=\"text-secondary\">
                                        Submitted on {{ avis.dateCreation|date('d M Y') }}
                                    </small>

                                    {# Delete button under the review if flagged #}
                                    <div class=\"mt-3 d-flex justify-content-end\">
                                        <form action=\"{{ path('admin_avis_delete', {'id': avis.id}) }}\" method=\"POST\" style=\"display:inline;\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ avis.id) }}\">
                                            <button type=\"submit\" class=\"btn btn-danger btn-sm {% if not avis.isFlagged %}d-none{% endif %}\">
                                                <i class=\"fas fa-trash-alt\"></i> Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            {% else %}
                <div class=\"alert alert-warning text-center\">
                    <i class=\"fas fa-info-circle\"></i> No reviews yet.
                </div>
            {% endif %}
        </div>
    </div>
</div>

<!-- FontAwesome for stars and icons -->
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
{% endblock %}
", "admin/formation_avis.html.twig", "C:\\Users\\walid\\Desktop\\Nouveau dossier\\pi2025\\templates\\admin\\formation_avis.html.twig");
    }
}
