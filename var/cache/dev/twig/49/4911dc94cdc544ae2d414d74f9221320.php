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

/* avis/index.html.twig */
class __TwigTemplate_c4b1b48a75f14a4f9d1f2aa2b7f3a00b extends Template
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
        // line 189
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "avis/index.html.twig", 189);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 191
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

        yield "Avis index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 193
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

        // line 194
        yield "    <div class=\"container\">
        <div class=\"row justify-content-between align-items-center mb-4\">
            <div class=\"col-auto\">
                <h1 class=\"mb-0\">Avis</h1>
            </div>
            <div class=\"col-auto\">
                ";
        // line 200
        if ((array_key_exists("formationId", $context) && array_key_exists("userId", $context))) {
            // line 201
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_add", ["formationId" => (isset($context["formationId"]) || array_key_exists("formationId", $context) ? $context["formationId"] : (function () { throw new RuntimeError('Variable "formationId" does not exist.', 201, $this->source); })()), "userId" => (isset($context["userId"]) || array_key_exists("userId", $context) ? $context["userId"] : (function () { throw new RuntimeError('Variable "userId" does not exist.', 201, $this->source); })())]), "html", null, true);
            yield "\" class=\"btn btn-danger large-btn\">Ajouter un avis</a>
                ";
        } else {
            // line 203
            yield "                    <p class=\"mt-4\">Formation ou utilisateur non spécifié, impossible de créer un nouvel avis.</p>
                ";
        }
        // line 205
        yield "            </div>
        </div>

        <div class=\"row justify-content-center\">
            ";
        // line 209
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 209, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["avi"]) {
            // line 210
            yield "                <div class=\"col-md-4 mb-4\">
                    <div class=\"card shadow-lg border-0 rounded-lg\" style=\"height: 100%;\">
                        <div class=\"card-body\">
                            <div class=\"d-flex justify-content-between align-items-start mb-3\">
                                <h5 class=\"card-title mb-0 d-flex align-items-center\">
                                    ";
            // line 215
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "note", [], "any", false, false, false, 215))) {
                // line 216
                yield "                                        ";
                $context["filled_stars"] = CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "note", [], "any", false, false, false, 216);
                // line 217
                yield "                                        ";
                $context["empty_stars"] = (5 - CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "note", [], "any", false, false, false, 217));
                // line 218
                yield "                                        <div class=\"star-rating\">
                                            ";
                // line 219
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["filled_stars"]) || array_key_exists("filled_stars", $context) ? $context["filled_stars"] : (function () { throw new RuntimeError('Variable "filled_stars" does not exist.', 219, $this->source); })())));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 220
                    yield "                                                <span class=\"fa fa-star checked\"></span>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 222
                yield "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["empty_stars"]) || array_key_exists("empty_stars", $context) ? $context["empty_stars"] : (function () { throw new RuntimeError('Variable "empty_stars" does not exist.', 222, $this->source); })())));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 223
                    yield "                                                <span class=\"fa fa-star empty\"></span>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 225
                yield "                                        </div>
                                    ";
            }
            // line 227
            yield "                                </h5>

                                <div class=\"text-muted mb-0\">
                                    <p class=\"mb-0\">
                                        ";
            // line 231
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "dateCreation", [], "any", false, false, false, 231)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "dateCreation", [], "any", false, false, false, 231), "Y-m-d"), "html", null, true)) : ("Non spécifiée"));
            yield "
                                    </p>
                                    ";
            // line 233
            if (CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "dateCreation", [], "any", false, false, false, 233)) {
                // line 234
                yield "                                        <p class=\"mb-0\" style=\"font-size: 0.9rem;\">
                                            <i class=\"fas fa-clock\" style=\"color: #6c757d;\"></i> ";
                // line 235
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "dateCreation", [], "any", false, false, false, 235), "H:i"), "html", null, true);
                yield "
                                        </p>
                                    ";
            }
            // line 238
            yield "                                </div>
                            </div>

                            <p class=\"card-text\">";
            // line 241
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "commentaire", [], "any", false, false, false, 241), "html", null, true);
            yield "</p>

                            <div class=\"d-flex justify-content-between align-items-center mt-3\">
                                ";
            // line 244
            if (CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "updateDate", [], "any", false, false, false, 244)) {
                // line 245
                yield "                                    <p class=\"text-muted mb-0\">
                                        Dernière mise à jour: ";
                // line 246
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "updateDate", [], "any", false, false, false, 246), "Y-m-d H:i:s"), "html", null, true);
                yield "
                                    </p>
                                ";
            }
            // line 249
            yield "
                             
                            </div>
                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 261
        if (!$context['_iterated']) {
            // line 256
            yield "                <div class=\"col-12\">
                    <div class=\"alert alert-warning\" role=\"alert\">
                        Aucun avis trouvé.
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['avi'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 262
        yield "        </div>
    </div>

    <style>
        .star-rating {
            display: flex;
            align-items: center;
        }

        .checked {
            color: gold;
        }

        .empty {
            color: #e0e0e0;
        }

        .fa-star {
            font-size: 1.25rem;
            margin-right: 2px;
        }

        .fa-clock {
            color: #6c757d;
            margin-right: 5px;
        }

        .card {
            border-radius: 12px;
            border: none;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            height: 100%;
        }

        .card-body {
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
        }

        .btn-primary, .btn-warning, .btn-danger {
            border-radius: 10px;
            padding: 8px 20px;
            font-size: 0.875rem;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .btn-danger {
            background-color: #dc3545;
            color: white;
        }

        .btn-danger:hover {
            background-color: #c82333;
            transform: translateY(-2px);
        }

        .btn-warning:hover {
            background-color: #ffc107;
            transform: translateY(-2px);
        }

        .btn-primary:hover {
            background-color: #0d6efd;
            transform: translateY(-2px);
        }

        .row {
            padding-left: 15px;
            padding-right: 15px;
        }

        .card-body p {
            font-size: 1rem;
        }

        .card-body {
            padding-bottom: 2rem;
        }

        /* New style for larger 'Ajouter un avis' button */
        .large-btn {
            padding: 12px 30px;
            font-size: 1rem;
        }

        /* Add margin to space out 'Modifier' and 'Supprimer' buttons */
        .ms-2 {
            margin-left: 10px;
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
        return "avis/index.html.twig";
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
        return array (  243 => 262,  232 => 256,  230 => 261,  220 => 249,  214 => 246,  211 => 245,  209 => 244,  203 => 241,  198 => 238,  192 => 235,  189 => 234,  187 => 233,  182 => 231,  176 => 227,  172 => 225,  165 => 223,  160 => 222,  153 => 220,  149 => 219,  146 => 218,  143 => 217,  140 => 216,  138 => 215,  131 => 210,  126 => 209,  120 => 205,  116 => 203,  110 => 201,  108 => 200,  100 => 194,  87 => 193,  64 => 191,  41 => 189,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# {% extends 'base.html.twig' %}

{% block title %}Avis index{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row justify-content-between align-items-center mb-4\">
            <div class=\"col-auto\">
                <h1 class=\"mb-0\">Avis</h1>
            </div>
            <div class=\"col-auto\">
                {% if formationId is defined and userId is defined %}
                    <a href=\"{{ path('app_avis_add', {'formationId': formationId, 'userId': userId}) }}\" class=\"btn btn-danger\">Ajouter un avis</a>
                {% else %}
                    <p class=\"mt-4\">Formation ou utilisateur non spécifié, impossible de créer un nouvel avis.</p>
                {% endif %}
            </div>
        </div>

        <div class=\"row justify-content-center\">
            {% for avi in avis %}
                <div class=\"col-md-4 mb-4\">
                    <div class=\"card shadow-sm\" style=\"height: 100%;\"> 
                        <div class=\"card-body\">
                            <div class=\"d-flex justify-content-between align-items-center\">
                                <h5 class=\"card-title mb-0\">
                                    {% if avi.note is not empty %}
                                        {% set filled_stars = avi.note %}
                                        {% set empty_stars = 5 - avi.note %}

                                        <div class=\"star-rating\">
                                            {% for i in 1..filled_stars %}
                                                <span class=\"fa fa-star checked\"></span>
                                            {% endfor %}
                                            {% for i in 1..empty_stars %}
                                                <span class=\"fa fa-star empty\"></span>
                                            {% endfor %}
                                        </div>
                                    {% endif %}
                                </h5>

                                <div class=\"text-muted mb-0\">
                                    <p class=\"mb-0\">
                                        {{ avi.dateCreation ? avi.dateCreation|date('Y-m-d') : 'Non spécifiée' }}
                                    </p>
                                    {% if avi.dateCreation %}
                                        <p class=\"mb-0\" style=\"font-size: 0.9rem;\">
                                            <i class=\"fas fa-clock\"></i> {{ avi.dateCreation|date('H:i:s') }}
                                        </p>
                                    {% endif %}
                                </div>
                            </div>

                            <p class=\"card-text\">{{ avi.commentaire }}</p>

                            <p class=\"text-muted\">
                                {% if avi.updateDate %}
                                    Dernière mise à jour: {{ avi.updateDate|date('Y-m-d H:i:s') }}
                                {% endif %}
                            </p>

                            {% if avi.apprenant.id == 2 %}
                                <div class=\"d-flex mt-3\">
                                    <a href=\"{{ path('app_avis_edit', {'id': avi.id}) }}\" class=\"btn btn-danger\">Modifier</a>
                                    
                                    <form method=\"post\" action=\"{{ path('app_avis_delete', {'id': avi.id}) }}\" style=\"display: inline;\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ avi.id) }}\">
                                        <button type=\"submit\" class=\"btn btn-secondary ms-2\" aria-label=\"Supprimer\">
                                            <i class=\"fas fa-trash-alt\"></i> 
                                        </button>
                                    </form>
                                </div>
                            {% endif %}
                        </div>
                    </div>
                </div>
            {% else %}
                <div class=\"col-12\">
                    <div class=\"alert alert-warning\" role=\"alert\">
                        Aucun avis trouvé.
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>

    <style>
        .star-rating {
            display: flex;
            align-items: center;
        }

        .checked {
            color: gold;
        }

        .empty {
            color: #e0e0e0;
        }

        .fa-star {
            font-size: 1.5rem;
            margin-right: 2px;
        }

        .fa-clock {
            color: #6c757d;
            margin-right: 5px;
        }

        .card {
            border-radius: 8px;
            height: 100%;
        }

        .btn {
            margin-top: 10px;
        }

        .card-body {
            text-align: left;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .row {
            margin-left: -15px;
            margin-right: -15px;
        }

        .col-md-4 {
            padding-left: 15px;
            padding-right: 15px;
        }

        .card-body {
            padding-bottom: 2rem;
        }

        .btn-danger {
            margin-right: 10px;
        }

        .btn-danger {
            padding: 8px 20px;
            font-size: 1rem;
            border-radius: 10px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .btn-danger:hover {
            background-color: #c82333;
            transform: translateY(-2px);
        }

        .right-btn {
            padding: 8px 20px;
            font-size: 1rem;
            border-radius: 30px;
            transition: background-color 0.3s ease;
        }

        .right-btn:hover {
            background-color: #c82333;
        }

        .row {
            padding-left: 25px;
            padding-right: 25px;
        }

        .card-body {
            padding-bottom: 2rem;
        }

        .container {
            max-width: 1200px;
        }

        .d-flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
    </style>
{% endblock %} #}
{% extends 'base.html.twig' %}

{% block title %}Avis index{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row justify-content-between align-items-center mb-4\">
            <div class=\"col-auto\">
                <h1 class=\"mb-0\">Avis</h1>
            </div>
            <div class=\"col-auto\">
                {% if formationId is defined and userId is defined %}
                    <a href=\"{{ path('app_avis_add', {'formationId': formationId, 'userId': userId}) }}\" class=\"btn btn-danger large-btn\">Ajouter un avis</a>
                {% else %}
                    <p class=\"mt-4\">Formation ou utilisateur non spécifié, impossible de créer un nouvel avis.</p>
                {% endif %}
            </div>
        </div>

        <div class=\"row justify-content-center\">
            {% for avi in avis %}
                <div class=\"col-md-4 mb-4\">
                    <div class=\"card shadow-lg border-0 rounded-lg\" style=\"height: 100%;\">
                        <div class=\"card-body\">
                            <div class=\"d-flex justify-content-between align-items-start mb-3\">
                                <h5 class=\"card-title mb-0 d-flex align-items-center\">
                                    {% if avi.note is not empty %}
                                        {% set filled_stars = avi.note %}
                                        {% set empty_stars = 5 - avi.note %}
                                        <div class=\"star-rating\">
                                            {% for i in 1..filled_stars %}
                                                <span class=\"fa fa-star checked\"></span>
                                            {% endfor %}
                                            {% for i in 1..empty_stars %}
                                                <span class=\"fa fa-star empty\"></span>
                                            {% endfor %}
                                        </div>
                                    {% endif %}
                                </h5>

                                <div class=\"text-muted mb-0\">
                                    <p class=\"mb-0\">
                                        {{ avi.dateCreation ? avi.dateCreation|date('Y-m-d') : 'Non spécifiée' }}
                                    </p>
                                    {% if avi.dateCreation %}
                                        <p class=\"mb-0\" style=\"font-size: 0.9rem;\">
                                            <i class=\"fas fa-clock\" style=\"color: #6c757d;\"></i> {{ avi.dateCreation|date('H:i') }}
                                        </p>
                                    {% endif %}
                                </div>
                            </div>

                            <p class=\"card-text\">{{ avi.commentaire }}</p>

                            <div class=\"d-flex justify-content-between align-items-center mt-3\">
                                {% if avi.updateDate %}
                                    <p class=\"text-muted mb-0\">
                                        Dernière mise à jour: {{ avi.updateDate|date('Y-m-d H:i:s') }}
                                    </p>
                                {% endif %}

                             
                            </div>
                        </div>
                    </div>
                </div>
            {% else %}
                <div class=\"col-12\">
                    <div class=\"alert alert-warning\" role=\"alert\">
                        Aucun avis trouvé.
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>

    <style>
        .star-rating {
            display: flex;
            align-items: center;
        }

        .checked {
            color: gold;
        }

        .empty {
            color: #e0e0e0;
        }

        .fa-star {
            font-size: 1.25rem;
            margin-right: 2px;
        }

        .fa-clock {
            color: #6c757d;
            margin-right: 5px;
        }

        .card {
            border-radius: 12px;
            border: none;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            height: 100%;
        }

        .card-body {
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
        }

        .btn-primary, .btn-warning, .btn-danger {
            border-radius: 10px;
            padding: 8px 20px;
            font-size: 0.875rem;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .btn-danger {
            background-color: #dc3545;
            color: white;
        }

        .btn-danger:hover {
            background-color: #c82333;
            transform: translateY(-2px);
        }

        .btn-warning:hover {
            background-color: #ffc107;
            transform: translateY(-2px);
        }

        .btn-primary:hover {
            background-color: #0d6efd;
            transform: translateY(-2px);
        }

        .row {
            padding-left: 15px;
            padding-right: 15px;
        }

        .card-body p {
            font-size: 1rem;
        }

        .card-body {
            padding-bottom: 2rem;
        }

        /* New style for larger 'Ajouter un avis' button */
        .large-btn {
            padding: 12px 30px;
            font-size: 1rem;
        }

        /* Add margin to space out 'Modifier' and 'Supprimer' buttons */
        .ms-2 {
            margin-left: 10px;
        }
    </style>
{% endblock %}

", "avis/index.html.twig", "C:\\Users\\Yassm\\Desktop\\newpi\\pi2025\\templates\\avis\\index.html.twig");
    }
}
