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
        yield "
    <div class=\"container mt-5\">
        <!-- Dynamic Search Form -->
        <form method=\"get\" action=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation_index");
        yield "\" class=\"input-group\" style=\"width: 40%;\">
            <input class=\"form-control border-end-0 border rounded-pill py-2\" type=\"search\" name=\"search\" id=\"example-search-input\" style=\"font-size: 0.875rem;\" placeholder=\"Search...\" value=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "request", [], "any", false, false, false, 10), "query", [], "any", false, false, false, 10), "get", ["search"], "method", false, false, false, 10), "html", null, true);
        yield "\" oninput=\"this.form.submit()\">
            <span class=\"input-group-append\">
            </span>
        </form>

        <div class=\"row\">
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new RuntimeError('Variable "formations" does not exist.', 16, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 17
            yield "                <div class=\"col-md-4 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h5 class=\"card-title\">";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "titre", [], "any", false, false, false, 20), "html", null, true);
            yield "</h5>
                        </div>
                        <div class=\"text-center\">
                            <img src=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "imageName", [], "any", false, false, false, 23))), "html", null, true);
            yield "\" class=\"img-fluid mb-3\" style=\"height: 150px;width: 70%;\" />
                        </div>

                        <div class=\"card-body\">
                            <p class=\"card-text\">";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "description", [], "any", false, false, false, 27), "html", null, true);
            yield "</p>
                            <ul class=\"list-unstyled\">
                                <li><strong>Durée:</strong> ";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "duree", [], "any", false, false, false, 29), "html", null, true);
            yield "</li>
                                <li><strong>Niveau:</strong> ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "niveau", [], "any", false, false, false, 30), "html", null, true);
            yield "</li>
                                <li><strong>Date de création:</strong> ";
            // line 31
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "dateCreation", [], "any", false, false, false, 31)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "dateCreation", [], "any", false, false, false, 31), "Y-m-d"), "html", null, true)) : (""));
            yield "</li>
                                <li><strong>Prix:</strong> ";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "prix", [], "any", false, false, false, 32), "html", null, true);
            yield " DT</li>
                                <li><strong>Catégorie:</strong> ";
            // line 33
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "categorie", [], "any", false, false, false, 33)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "categorie", [], "any", false, false, false, 33), "nom", [], "any", false, false, false, 33), "html", null, true)) : (""));
            yield "</li>
                            </ul>
                        </div>
                        <div class=\"card-footer text-center\">
                            <a href=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation_show_admin", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\">Afficher</a>
                            <a href=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">Modifier</a>
                            <a href=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lecon_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            yield "\" class=\"btn btn-secondary btn-sm\">Ajouter leçon</a>
                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 49
        if (!$context['_iterated']) {
            // line 44
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
        // line 50
        yield "        </div>
    </div>

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
        return array (  199 => 50,  188 => 44,  186 => 49,  177 => 39,  173 => 38,  169 => 37,  162 => 33,  158 => 32,  154 => 31,  150 => 30,  146 => 29,  141 => 27,  134 => 23,  128 => 20,  123 => 17,  118 => 16,  109 => 10,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Formation index{% endblock %}

{% block body %}

    <div class=\"container mt-5\">
        <!-- Dynamic Search Form -->
        <form method=\"get\" action=\"{{ path('app_formation_index') }}\" class=\"input-group\" style=\"width: 40%;\">
            <input class=\"form-control border-end-0 border rounded-pill py-2\" type=\"search\" name=\"search\" id=\"example-search-input\" style=\"font-size: 0.875rem;\" placeholder=\"Search...\" value=\"{{ app.request.query.get('search') }}\" oninput=\"this.form.submit()\">
            <span class=\"input-group-append\">
            </span>
        </form>

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

{% endblock %}
", "formation/index.html.twig", "C:\\Users\\walid\\Desktop\\finalPI\\pi2025\\templates\\formation\\index.html.twig");
    }
}
