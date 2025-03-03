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

/* promotion/index.html.twig */
class __TwigTemplate_9e630302ee1eb091f1cb9a06f75b157f extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "promotion/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "promotion/index.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "promotion/index.html.twig", 1);
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

        yield "Gestion des Promotions";
        
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
        yield "<section class=\"section\">
    <div class=\"container mt-4\">
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <h4 class=\"fw-bold text-primary\">Liste des Promotions</h4>
            <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_promotion_create");
        yield "\" class=\"btn btn-success\">
                <i class=\"fas fa-plus\"></i> Ajouter une promotion
            </a>
        </div>
         
        <!-- Barre de Recherche -->
        <div class=\"card p-2 shadow-sm mb-8\">
            <form class=\"search-form d-flex align-items-center\" method=\"GET\" action=\"#\">
                <input 
                    type=\"text\" 
                    id=\"search-input\"
                    name=\"q\" 
                    class=\"form-control me-2 w-50\" 
                    placeholder=\"Rechercher par nom d'apprenant...\" 
                    title=\"Entrez le nom de l'apprenant\"
                    value=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("query", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 25, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\">
                
            </form>
        </div>


        <div class=\"card shadow-lg\">
            <div class=\"card-body\">
                <table class=\"table table-hover table-striped align-middle\">
                    <thead class=\"table-dark text-center\">
                        <tr>
                            <th>ID</th>
                            <th>Apprenant</th>
                            <th>Code Promo</th>
                            <th>Description</th>
                            <th>Remise</th>
                            <th>Date d'expiration</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id=\"promotion-list\" class=\"text-center\">
                        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 46, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 47
            yield "                            <tr>
                                <td>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 48), "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "apprenant", [], "any", false, false, false, 50), "nom", [], "any", false, false, false, 50), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "apprenant", [], "any", false, false, false, 50), "prenom", [], "any", false, false, false, 50), "html", null, true);
            yield "
                                </td>
                                <td><span class=\"badge bg-info text-dark\">";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "codePromo", [], "any", false, false, false, 52), "html", null, true);
            yield "</span></td>
                                <td>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "description", [], "any", false, false, false, 53), "html", null, true);
            yield "</td>
                                <td class=\"fw-bold text-success\">";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "remise", [], "any", false, false, false, 54), "html", null, true);
            yield "%</td>
                                <td>";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "dateExpiration", [], "any", false, false, false, 55), "d/m/Y"), "html", null, true);
            yield "</td>
                                <td class=\"d-flex justify-content-center gap-2\">
                                    <a href=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_promotion_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">
                                        <i class=\"fas fa-edit\"></i> Modifier
                                        </a>
                                    <form action=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_promotion_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            yield "\" method=\"post\">
                                 <input type=\"hidden\" name=\"_token\" value=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 61))), "html", null, true);
            yield "\">
                                 <button type=\"submit\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette promotion ?');\">
                               <i class=\"fas fa-trash\"></i> Supprimer
                             </button>
                            </form>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 67
        if (!$context['_iterated']) {
            // line 68
            yield "                            <tr>
                                <td colspan=\"7\" class=\"text-center text-muted\">Aucune promotion trouvée.</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['promotion'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 80
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 81
        yield "<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
\$(document).ready(function () {
    \$(document).on(\"click\", \".delete-btn\", function () {
        let promotionId = \$(this).data(\"id\");
        let csrfToken = \$(this).data(\"token\");
        
        if (!confirm(\"Êtes-vous sûr de vouloir supprimer cette promotion ?\")) {
            return;
        }
        
        \$.ajax({
            url: \"/dashboard/promotion/\" + promotionId + \"/delete\",
            type: \"POST\",
            data: { _token: csrfToken },
            success: function (response) {
                alert(\"Promotion supprimée avec succès !\");
                location.reload();
            },
            error: function (xhr) {
                alert(\"Erreur lors de la suppression !\");
                console.error(xhr.responseText);
            }
        });
    });

    \$(\"#search-input\").on(\"keyup\", function () {
        let query = \$(this).val().trim();
        \$.ajax({
            url: \"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_promotion_search");
        yield "\",
            type: \"GET\",
            data: { q: query },
            dataType: \"json\",
            success: function (data) {
                let resultsTable = \$(\"#promotion-list\");
                resultsTable.empty();

                if (data.length === 0) {
                    resultsTable.append(`<tr><td colspan=\"7\" class=\"text-center text-muted\">Aucune promotion trouvée.</td></tr>`);
                    return;
                }
                data.forEach(function (promotion) {
                    resultsTable.append(`
                        <tr>
                            <td>\${promotion.id}</td>
                            <td>\${promotion.apprenant}</td>
                            <td><span class=\"badge bg-info text-dark\">\${promotion.codePromo}</span></td>
                            <td>\${promotion.description}</td>
                            <td class=\"fw-bold text-success\">\${promotion.remise}%</td>
                            <td>\${promotion.dateExpiration ? promotion.dateExpiration : 'N/A'}</td>
                            <td class=\"d-flex justify-content-center gap-2\">
                                <a href=\"/dashboard/promotion/\${promotion.id}/edit\" class=\"btn btn-warning btn-sm\">
                                    <i class=\"fas fa-edit\"></i> Modifier
                                </a>
                                <button class=\"btn btn-danger btn-sm delete-btn\" data-id=\"\${promotion.id}\" data-token=\"\${promotion.csrfToken}\">
                                    <i class=\"fas fa-trash\"></i> Supprimer
                                </button>
                            </td>
                        </tr>`);
                });
            },
            error: function (xhr, status, error) {
                console.error(\"Erreur AJAX :\", error);
            }
        });
    });
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
        return "promotion/index.html.twig";
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
        return array (  279 => 110,  248 => 81,  235 => 80,  218 => 72,  209 => 68,  207 => 67,  196 => 61,  192 => 60,  186 => 57,  181 => 55,  177 => 54,  173 => 53,  169 => 52,  162 => 50,  157 => 48,  154 => 47,  149 => 46,  125 => 25,  107 => 10,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Gestion des Promotions{% endblock %}

{% block body %}
<section class=\"section\">
    <div class=\"container mt-4\">
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <h4 class=\"fw-bold text-primary\">Liste des Promotions</h4>
            <a href=\"{{ path('admin_promotion_create') }}\" class=\"btn btn-success\">
                <i class=\"fas fa-plus\"></i> Ajouter une promotion
            </a>
        </div>
         
        <!-- Barre de Recherche -->
        <div class=\"card p-2 shadow-sm mb-8\">
            <form class=\"search-form d-flex align-items-center\" method=\"GET\" action=\"#\">
                <input 
                    type=\"text\" 
                    id=\"search-input\"
                    name=\"q\" 
                    class=\"form-control me-2 w-50\" 
                    placeholder=\"Rechercher par nom d'apprenant...\" 
                    title=\"Entrez le nom de l'apprenant\"
                    value=\"{{ query|default('') }}\">
                
            </form>
        </div>


        <div class=\"card shadow-lg\">
            <div class=\"card-body\">
                <table class=\"table table-hover table-striped align-middle\">
                    <thead class=\"table-dark text-center\">
                        <tr>
                            <th>ID</th>
                            <th>Apprenant</th>
                            <th>Code Promo</th>
                            <th>Description</th>
                            <th>Remise</th>
                            <th>Date d'expiration</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id=\"promotion-list\" class=\"text-center\">
                        {% for promotion in promotions %}
                            <tr>
                                <td>{{ promotion.id }}</td>
                                <td>
                                    {{ promotion.apprenant.nom }} {{ promotion.apprenant.prenom }}
                                </td>
                                <td><span class=\"badge bg-info text-dark\">{{ promotion.codePromo }}</span></td>
                                <td>{{ promotion.description }}</td>
                                <td class=\"fw-bold text-success\">{{ promotion.remise }}%</td>
                                <td>{{ promotion.dateExpiration|date('d/m/Y') }}</td>
                                <td class=\"d-flex justify-content-center gap-2\">
                                    <a href=\"{{ path('admin_promotion_edit', { id: promotion.id }) }}\" class=\"btn btn-warning btn-sm\">
                                        <i class=\"fas fa-edit\"></i> Modifier
                                        </a>
                                    <form action=\"{{ path('admin_promotion_delete', { id: promotion.id }) }}\" method=\"post\">
                                 <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ promotion.id) }}\">
                                 <button type=\"submit\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette promotion ?');\">
                               <i class=\"fas fa-trash\"></i> Supprimer
                             </button>
                            </form>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"7\" class=\"text-center text-muted\">Aucune promotion trouvée.</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
{% endblock %}

{% block javascripts %}
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
\$(document).ready(function () {
    \$(document).on(\"click\", \".delete-btn\", function () {
        let promotionId = \$(this).data(\"id\");
        let csrfToken = \$(this).data(\"token\");
        
        if (!confirm(\"Êtes-vous sûr de vouloir supprimer cette promotion ?\")) {
            return;
        }
        
        \$.ajax({
            url: \"/dashboard/promotion/\" + promotionId + \"/delete\",
            type: \"POST\",
            data: { _token: csrfToken },
            success: function (response) {
                alert(\"Promotion supprimée avec succès !\");
                location.reload();
            },
            error: function (xhr) {
                alert(\"Erreur lors de la suppression !\");
                console.error(xhr.responseText);
            }
        });
    });

    \$(\"#search-input\").on(\"keyup\", function () {
        let query = \$(this).val().trim();
        \$.ajax({
            url: \"{{ path('admin_promotion_search') }}\",
            type: \"GET\",
            data: { q: query },
            dataType: \"json\",
            success: function (data) {
                let resultsTable = \$(\"#promotion-list\");
                resultsTable.empty();

                if (data.length === 0) {
                    resultsTable.append(`<tr><td colspan=\"7\" class=\"text-center text-muted\">Aucune promotion trouvée.</td></tr>`);
                    return;
                }
                data.forEach(function (promotion) {
                    resultsTable.append(`
                        <tr>
                            <td>\${promotion.id}</td>
                            <td>\${promotion.apprenant}</td>
                            <td><span class=\"badge bg-info text-dark\">\${promotion.codePromo}</span></td>
                            <td>\${promotion.description}</td>
                            <td class=\"fw-bold text-success\">\${promotion.remise}%</td>
                            <td>\${promotion.dateExpiration ? promotion.dateExpiration : 'N/A'}</td>
                            <td class=\"d-flex justify-content-center gap-2\">
                                <a href=\"/dashboard/promotion/\${promotion.id}/edit\" class=\"btn btn-warning btn-sm\">
                                    <i class=\"fas fa-edit\"></i> Modifier
                                </a>
                                <button class=\"btn btn-danger btn-sm delete-btn\" data-id=\"\${promotion.id}\" data-token=\"\${promotion.csrfToken}\">
                                    <i class=\"fas fa-trash\"></i> Supprimer
                                </button>
                            </td>
                        </tr>`);
                });
            },
            error: function (xhr, status, error) {
                console.error(\"Erreur AJAX :\", error);
            }
        });
    });
});
</script>
{% endblock %}
", "promotion/index.html.twig", "C:\\Users\\walid\\Desktop\\Nouveau dossier (3)\\pi2025\\templates\\promotion\\index.html.twig");
    }
}
