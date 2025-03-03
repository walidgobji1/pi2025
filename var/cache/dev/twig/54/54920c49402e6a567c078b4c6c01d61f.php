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

/* inscription_cours/index.html.twig */
class __TwigTemplate_a633361bc1a6c840eacfa11c0db0f8f6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription_cours/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription_cours/index.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "inscription_cours/index.html.twig", 1);
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
        yield " 

   

 <section class=\"section\">
    <div class=\"container mt-4\">
        <h5 class=\"card-title text-center\">Liste des Inscriptions</h5>
       <div class=\"row\">
        <div class=\"col-lg-12\">

          <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\"></h5>
                <!-- Table avec DataTables -->
                <table class=\"table datatable table-striped\">
                    <thead class=\"table-dark text-center\">
                        <tr>
                            <th>id</th>
                            <th>Nom Apprenant</th>
                            <th>Nom Formation</th>
                            <th>ID Formation</th>
                            <th>Email</th>
                            <th>CIN</th>
                            <th>Status</th>
                            <th>Montant</th>
                            <th>Date d'inscription</th>
                            <th>Actions</th> <!-- Ajout de la colonne actions -->
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["inscription_cours"]) || array_key_exists("inscription_cours", $context) ? $context["inscription_cours"] : (function () { throw new RuntimeError('Variable "inscription_cours" does not exist.', 36, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["inscription_cour"]) {
            // line 37
            yield "                            <tr>
                                 <td>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inscription_cour"], "id", [], "any", false, false, false, 38), "html", null, true);
            yield "</td>
                                <td>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inscription_cour"], "nomApprenant", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>

                                <td>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscription_cour"], "formation", [], "any", false, false, false, 41), "titre", [], "any", false, false, false, 41), "html", null, true);
            yield "</td>
                                <td>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscription_cour"], "formation", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42), "html", null, true);
            yield "</td> 

                                <td>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inscription_cour"], "email", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>
                                <td>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inscription_cour"], "cin", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 47
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["inscription_cour"], "status", [], "any", false, false, false, 47) == "payé")) {
                // line 48
                yield "                                        <span class=\"badge bg-success\">Payé</span>
                                    ";
            } else {
                // line 50
                yield "                                        <span class=\"badge bg-warning text-dark\">En attente</span>
                                    ";
            }
            // line 52
            yield "                                </td>
                                <td>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inscription_cour"], "montant", [], "any", false, false, false, 53), "html", null, true);
            yield " dt</td>
                                <td>";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["inscription_cour"], "dateInscreption", [], "any", false, false, false, 54), "Y-m-d"), "html", null, true);
            yield "</td>
                                <td class=\"d-flex\">
                         <!-- Bouton Détails -->
                              <a href=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscription_cours_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["inscription_cour"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm me-2\">
                              <i class=\"fas fa-eye\"></i> Détails
                                </a>
                           <!-- Bouton Modifier -->
                                 <a href=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscription_cours_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["inscription_cour"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm me-2\">
                                <i class=\"fas fa-edit\"></i> Modifier
                                 </a>

                          <!-- Bouton Supprimer -->
                               <form method=\"post\" action=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscription_cours_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["inscription_cour"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette inscription ?');\">
                              <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                              <input type=\"hidden\" name=\"_token\" value=\"";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["inscription_cour"], "id", [], "any", false, false, false, 68))), "html", null, true);
            yield "\">
                               <button type=\"submit\" class=\"btn btn-danger btn-sm\">
                               <i class=\"fas fa-trash-alt\"></i> Supprimer
                              </button>
                             </form>
                                </td>

                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 80
        if (!$context['_iterated']) {
            // line 77
            yield "                            <tr>
                                <td colspan=\"9\" class=\"text-center text-muted\">Aucune inscription trouvée</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['inscription_cour'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        yield "                    </tbody>
                </table>
                <!-- Fin de la table -->
            </div>
        </div>
    </div>

</section>

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
        return "inscription_cours/index.html.twig";
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
        return array (  234 => 81,  225 => 77,  223 => 80,  210 => 68,  205 => 66,  197 => 61,  190 => 57,  184 => 54,  180 => 53,  177 => 52,  173 => 50,  169 => 48,  167 => 47,  162 => 45,  158 => 44,  153 => 42,  149 => 41,  144 => 39,  140 => 38,  137 => 37,  132 => 36,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Gestion des Inscriptions{% endblock %}

{% block body %}
 

   

 <section class=\"section\">
    <div class=\"container mt-4\">
        <h5 class=\"card-title text-center\">Liste des Inscriptions</h5>
       <div class=\"row\">
        <div class=\"col-lg-12\">

          <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\"></h5>
                <!-- Table avec DataTables -->
                <table class=\"table datatable table-striped\">
                    <thead class=\"table-dark text-center\">
                        <tr>
                            <th>id</th>
                            <th>Nom Apprenant</th>
                            <th>Nom Formation</th>
                            <th>ID Formation</th>
                            <th>Email</th>
                            <th>CIN</th>
                            <th>Status</th>
                            <th>Montant</th>
                            <th>Date d'inscription</th>
                            <th>Actions</th> <!-- Ajout de la colonne actions -->
                        </tr>
                    </thead>
                    <tbody>
                        {% for inscription_cour in inscription_cours %}
                            <tr>
                                 <td>{{ inscription_cour.id }}</td>
                                <td>{{ inscription_cour.nomApprenant }}</td>

                                <td>{{ inscription_cour.formation.titre }}</td>
                                <td>{{ inscription_cour.formation.id }}</td> 

                                <td>{{ inscription_cour.email }}</td>
                                <td>{{ inscription_cour.cin }}</td>
                                <td>
                                    {% if inscription_cour.status == 'payé' %}
                                        <span class=\"badge bg-success\">Payé</span>
                                    {% else %}
                                        <span class=\"badge bg-warning text-dark\">En attente</span>
                                    {% endif %}
                                </td>
                                <td>{{ inscription_cour.montant }} dt</td>
                                <td>{{ inscription_cour.dateInscreption|date('Y-m-d') }}</td>
                                <td class=\"d-flex\">
                         <!-- Bouton Détails -->
                              <a href=\"{{ path('app_inscription_cours_show', {'id': inscription_cour.id}) }}\" class=\"btn btn-info btn-sm me-2\">
                              <i class=\"fas fa-eye\"></i> Détails
                                </a>
                           <!-- Bouton Modifier -->
                                 <a href=\"{{ path('app_inscription_cours_edit', {'id': inscription_cour.id}) }}\" class=\"btn btn-warning btn-sm me-2\">
                                <i class=\"fas fa-edit\"></i> Modifier
                                 </a>

                          <!-- Bouton Supprimer -->
                               <form method=\"post\" action=\"{{ path('app_inscription_cours_delete', {'id': inscription_cour.id}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette inscription ?');\">
                              <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                              <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ inscription_cour.id) }}\">
                               <button type=\"submit\" class=\"btn btn-danger btn-sm\">
                               <i class=\"fas fa-trash-alt\"></i> Supprimer
                              </button>
                             </form>
                                </td>

                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"9\" class=\"text-center text-muted\">Aucune inscription trouvée</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
                <!-- Fin de la table -->
            </div>
        </div>
    </div>

</section>

{% endblock %}
", "inscription_cours/index.html.twig", "C:\\Users\\walid\\Desktop\\Nouveau dossier\\pi2025\\templates\\inscription_cours\\index.html.twig");
    }
}
