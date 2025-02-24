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

/* formation/index.html.twig */
class __TwigTemplate_1642ee7f786e995105e9bfe784b3e0ce extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/index.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "formation/index.html.twig", 1);
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

        yield "Formation index";
        
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
        yield "    <div class=\"container mt-5\">
        <div class=\"input-group\" style=\"width: 40%;\">
            <input class=\"form-control border-end-0 border rounded-pill py-2\" type=\"search\" id=\"example-search-input\" style=\"font-size: 0.875rem;\" placeholder=\"Search...\">
            <span class=\"input-group-append\">
                <button class=\"btn btn-outline-secondary border-bottom-0 border rounded-pill py-2\" type=\"button\" id=\"searchButton\" style=\"font-size: 0.875rem;\">Search</button>
            </span>
        </div>

        <div class=\"row\">
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new RuntimeError('Variable "formations" does not exist.', 15, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 16
            yield "                <div class=\"col-md-4 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h5 class=\"card-title\">";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "titre", [], "any", false, false, false, 19), "html", null, true);
            yield "</h5>
                        </div>
                        <div class=\"text-center\">
                            <img src=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "imageName", [], "any", false, false, false, 22))), "html", null, true);
            yield "\" class=\"img-fluid mb-3\" style=\"height: 150px;width: 70%;\" />
                        </div>

                        <div class=\"card-body\">
                            <p class=\"card-text\">";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "description", [], "any", false, false, false, 26), "html", null, true);
            yield "</p>
                            <ul class=\"list-unstyled\">
                                <li><strong>Durée:</strong> ";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "duree", [], "any", false, false, false, 28), "html", null, true);
            yield "</li>
                                <li><strong>Niveau:</strong> ";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "niveau", [], "any", false, false, false, 29), "html", null, true);
            yield "</li>
                                <li><strong>Date de création:</strong> ";
            // line 30
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "dateCreation", [], "any", false, false, false, 30)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "dateCreation", [], "any", false, false, false, 30), "Y-m-d"), "html", null, true)) : (""));
            yield "</li>
                                <li><strong>Prix:</strong> ";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "prix", [], "any", false, false, false, 31), "html", null, true);
            yield " DT</li>
                                <li><strong>Catégorie:</strong> ";
            // line 32
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "categorie", [], "any", false, false, false, 32)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "categorie", [], "any", false, false, false, 32), "nom", [], "any", false, false, false, 32), "html", null, true)) : (""));
            yield "</li>
                            </ul>
                        </div>
                        <div class=\"card-footer text-center\">
                            <a href=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation_show_admin", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\">Afficher</a>
                            <a href=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">Modifier</a>
                            <a href=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lecon_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            yield "\" class=\"btn btn-secondary btn-sm\">Ajouter leçon</a>
                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 48
        if (!$context['_iterated']) {
            // line 43
            yield "                <div class=\"col-12\">
                    <div class=\"alert alert-warning\" role=\"alert\">
                        Aucun enregistrement trouvé.
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['formation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "        </div>
    </div>

    <script>
        \$(document).ready(function () {
            // Trigger search when the button is clicked
            \$('#searchButton').click(function () {
                var searchQuery = \$('#example-search-input').val().toLowerCase();

                // Redirect to the page with the search query as a parameter
                window.location.href = \"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation_index");
        yield "?search=\" + searchQuery;
            });

            // When the input is cleared, reload the page without the search query
            \$('#example-search-input').on('input', function () {
                var searchQuery = \$(this).val();

                // If the input is empty, reload the page without search query
                if (searchQuery === \"\") {
                    window.location.href = \"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation_index");
        yield "\";
                }
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
        return "formation/index.html.twig";
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
        return array (  216 => 68,  204 => 59,  192 => 49,  181 => 43,  179 => 48,  170 => 38,  166 => 37,  162 => 36,  155 => 32,  151 => 31,  147 => 30,  143 => 29,  139 => 28,  134 => 26,  127 => 22,  121 => 19,  116 => 16,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Formation index{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"input-group\" style=\"width: 40%;\">
            <input class=\"form-control border-end-0 border rounded-pill py-2\" type=\"search\" id=\"example-search-input\" style=\"font-size: 0.875rem;\" placeholder=\"Search...\">
            <span class=\"input-group-append\">
                <button class=\"btn btn-outline-secondary border-bottom-0 border rounded-pill py-2\" type=\"button\" id=\"searchButton\" style=\"font-size: 0.875rem;\">Search</button>
            </span>
        </div>

        <div class=\"row\">
            {% for formation in formations %}
                <div class=\"col-md-4 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h5 class=\"card-title\">{{ formation.titre }}</h5>
                        </div>
                        <div class=\"text-center\">
                            <img src=\"{{ asset('uploads/images/' ~ formation.imageName) }}\" class=\"img-fluid mb-3\" style=\"height: 150px;width: 70%;\" />
                        </div>

                        <div class=\"card-body\">
                            <p class=\"card-text\">{{ formation.description }}</p>
                            <ul class=\"list-unstyled\">
                                <li><strong>Durée:</strong> {{ formation.duree }}</li>
                                <li><strong>Niveau:</strong> {{ formation.niveau }}</li>
                                <li><strong>Date de création:</strong> {{ formation.dateCreation ? formation.dateCreation|date('Y-m-d') : '' }}</li>
                                <li><strong>Prix:</strong> {{ formation.prix }} DT</li>
                                <li><strong>Catégorie:</strong> {{ formation.categorie ? formation.categorie.nom }}</li>
                            </ul>
                        </div>
                        <div class=\"card-footer text-center\">
                            <a href=\"{{ path('app_formation_show_admin', {'id': formation.id}) }}\" class=\"btn btn-info btn-sm\">Afficher</a>
                            <a href=\"{{ path('app_formation_edit', {'id': formation.id}) }}\" class=\"btn btn-warning btn-sm\">Modifier</a>
                            <a href=\"{{ path('app_lecon_new', {'id': formation.id}) }}\" class=\"btn btn-secondary btn-sm\">Ajouter leçon</a>
                        </div>
                    </div>
                </div>
            {% else %}
                <div class=\"col-12\">
                    <div class=\"alert alert-warning\" role=\"alert\">
                        Aucun enregistrement trouvé.
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>

    <script>
        \$(document).ready(function () {
            // Trigger search when the button is clicked
            \$('#searchButton').click(function () {
                var searchQuery = \$('#example-search-input').val().toLowerCase();

                // Redirect to the page with the search query as a parameter
                window.location.href = \"{{ path('app_formation_index') }}?search=\" + searchQuery;
            });

            // When the input is cleared, reload the page without the search query
            \$('#example-search-input').on('input', function () {
                var searchQuery = \$(this).val();

                // If the input is empty, reload the page without search query
                if (searchQuery === \"\") {
                    window.location.href = \"{{ path('app_formation_index') }}\";
                }
            });
        });
    </script>
{% endblock %}
", "formation/index.html.twig", "C:\\Users\\walid\\Desktop\\Nouveau dossier\\pi2025\\templates\\formation\\index.html.twig");
    }
}
