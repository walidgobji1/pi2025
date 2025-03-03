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

/* inscription_cours/mes_inscriptions.html.twig */
class __TwigTemplate_bf767380ade94a545fba2c9408f659e1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription_cours/mes_inscriptions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription_cours/mes_inscriptions.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "inscription_cours/mes_inscriptions.html.twig", 1);
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

        yield "Gestion des Inscriptions";
        
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
        <h5 class=\"card-title text-center\">Liste des Inscriptions</h5>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"card shadow p-3\">
                    <div class=\"card-body\">

                        

                        <!-- Table avec DataTables -->
                        <table id=\"inscriptionsTable\" class=\"table table-striped table-bordered\">
                            <thead class=\"table-dark text-center\">
                                <tr>
                                    <th>Formation</th>
                                    <th>Email</th>
                                    <th>CIN</th>
                                    <th>Status</th>
                                    <th>Montant</th>
                                    <th>Date d'inscription</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["inscriptions"]) || array_key_exists("inscriptions", $context) ? $context["inscriptions"] : (function () { throw new RuntimeError('Variable "inscriptions" does not exist.', 30, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["inscription"]) {
            // line 31
            yield "                                    <tr>
                                        <td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscription"], "formation", [], "any", false, false, false, 32), "titre", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                                        <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inscription"], "email", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                                        <td>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inscription"], "cin", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
                                        <td>
                                            <span class=\"badge ";
            // line 36
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["inscription"], "status", [], "any", false, false, false, 36) == "Payé")) {
                yield "bg-success";
            } else {
                yield "bg-warning text-dark";
            }
            yield "\">
                                                ";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inscription"], "status", [], "any", false, false, false, 37), "html", null, true);
            yield "
                                            </span>
                                        </td>
                                        <td>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inscription"], "montant", [], "any", false, false, false, 40), "html", null, true);
            yield " DT</td>
                                        <td>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["inscription"], "dateInscreption", [], "any", false, false, false, 41), "Y-m-d"), "html", null, true);
            yield "</td>
                                        <td class=\"d-flex\">
                                            <a href=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscription_cours_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["inscription"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm me-2\">
                                                 Détails
                                            </a>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        // line 48
        if (!$context['_iterated']) {
            // line 49
            yield "                                    <tr>
                                        <td colspan=\"7\" class=\"text-center text-muted\">Aucune inscription trouvée</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['inscription'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "                            </tbody>
                        </table>
                        <!-- Fin de la table -->
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>



 <script>
    \$(document).ready(function () {
        var table = \$('#inscriptionsTable').DataTable({
            \"language\": {
                \"url\": \"//cdn.datatables.net/plug-ins/1.13.4/i18n/fr-FR.json\"
            },
            \"paging\": true,
            \"ordering\": true,
            \"searching\": true,
            \"info\": true
        });

        // Vérifier si l'élément #search-input existe avant d'ajouter l'événement
        if (\$('#search-input').length) {
            \$('#search-input').on('keyup', function () {
                table.column(0).search(this.value).draw();
            });
        } else {
            console.error(\"L'élément #search-input n'a pas été trouvé.\");
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
        return "inscription_cours/mes_inscriptions.html.twig";
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
        return array (  191 => 53,  182 => 49,  180 => 48,  170 => 43,  165 => 41,  161 => 40,  155 => 37,  147 => 36,  142 => 34,  138 => 33,  134 => 32,  131 => 31,  126 => 30,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Inscriptions{% endblock %}

{% block body %}
<section class=\"section\">
    <div class=\"container mt-4\">
        <h5 class=\"card-title text-center\">Liste des Inscriptions</h5>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"card shadow p-3\">
                    <div class=\"card-body\">

                        

                        <!-- Table avec DataTables -->
                        <table id=\"inscriptionsTable\" class=\"table table-striped table-bordered\">
                            <thead class=\"table-dark text-center\">
                                <tr>
                                    <th>Formation</th>
                                    <th>Email</th>
                                    <th>CIN</th>
                                    <th>Status</th>
                                    <th>Montant</th>
                                    <th>Date d'inscription</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for inscription in inscriptions %}
                                    <tr>
                                        <td>{{ inscription.formation.titre }}</td>
                                        <td>{{ inscription.email }}</td>
                                        <td>{{ inscription.cin }}</td>
                                        <td>
                                            <span class=\"badge {% if inscription.status == 'Payé' %}bg-success{% else %}bg-warning text-dark{% endif %}\">
                                                {{ inscription.status }}
                                            </span>
                                        </td>
                                        <td>{{ inscription.montant }} DT</td>
                                        <td>{{ inscription.dateInscreption|date('Y-m-d') }}</td>
                                        <td class=\"d-flex\">
                                            <a href=\"{{ path('app_inscription_cours_show', {'id': inscription.id}) }}\" class=\"btn btn-info btn-sm me-2\">
                                                 Détails
                                            </a>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"7\" class=\"text-center text-muted\">Aucune inscription trouvée</td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                        <!-- Fin de la table -->
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>



 <script>
    \$(document).ready(function () {
        var table = \$('#inscriptionsTable').DataTable({
            \"language\": {
                \"url\": \"//cdn.datatables.net/plug-ins/1.13.4/i18n/fr-FR.json\"
            },
            \"paging\": true,
            \"ordering\": true,
            \"searching\": true,
            \"info\": true
        });

        // Vérifier si l'élément #search-input existe avant d'ajouter l'événement
        if (\$('#search-input').length) {
            \$('#search-input').on('keyup', function () {
                table.column(0).search(this.value).draw();
            });
        } else {
            console.error(\"L'élément #search-input n'a pas été trouvé.\");
        }
    });
 </script>

{% endblock %}
", "inscription_cours/mes_inscriptions.html.twig", "C:\\Users\\walid\\Desktop\\Nouveau dossier (3)\\pi2025\\templates\\inscription_cours\\mes_inscriptions.html.twig");
    }
}
