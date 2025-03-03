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

/* message/conversation.html.twig */
class __TwigTemplate_a066a1dc7c04765b1ccc9bb1142144f6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "message/conversation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "message/conversation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "message/conversation.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "\t<section>
\t\t<div class=\"container mt-4\">
\t\t\t<div class=\"border rounded p-3 shadow bg-white\">

\t\t\t\t<div class=\"container py-5\">
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"row\">
\t\t\t\t\t\t<!-- Sidebar des discussions -->
\t\t\t\t\t\t<div class=\"col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0\">
\t\t\t\t\t\t\t<h5 class=\"font-weight-bold mb-3 text-center text-lg-start\">Discussions</h5>
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled mb-0 scrollable-list\">
\t\t\t\t\t\t\t\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["discussions"]) || array_key_exists("discussions", $context) ? $context["discussions"] : (function () { throw new RuntimeError('Variable "discussions" does not exist.', 17, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["discussion"]) {
            // line 18
            yield "\t\t\t\t\t\t\t\t\t\t\t";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["discussion"], "receiver", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18))) {
                // line 19
                yield "\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"p-2 border-bottom bg-body-tertiary d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_discussion", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["discussion"], "id", [], "any", false, false, false, 20)]), "html", null, true);
                yield "\" class=\"d-flex justify-content-between text-decoration-none w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-row w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 22
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "image", [], "any", false, false, false, 22)) {
                    // line 23
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["discussion"], "sender", [], "any", false, false, false, 23), "image", [], "any", false, false, false, 23))), "html", null, true);
                    yield "\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 25
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontOffice/images/user.jpg"), "html", null, true);
                    yield "\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 27
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"font-size:1.2rem;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["discussion"], "sender", [], "any", false, false, false, 29), "nom", [], "any", false, false, false, 29), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["discussion"], "sender", [], "any", false, false, false, 30), "prenom", [], "any", false, false, false, 30), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_discussion", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["discussion"], "id", [], "any", false, false, false, 35)]), "html", null, true);
                yield "\" method=\"POST\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cette discussion ?');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger btn-sm delete-btn\">🗑</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 39
$context["discussion"], "sender", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39))) {
                // line 40
                yield "\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"p-2 border-bottom bg-body-tertiary d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_discussion", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["discussion"], "id", [], "any", false, false, false, 41)]), "html", null, true);
                yield "\" class=\"d-flex justify-content-between text-decoration-none w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-row w-100\">
";
                // line 43
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), "image", [], "any", false, false, false, 43)) {
                    // line 44
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["discussion"], "receiver", [], "any", false, false, false, 44), "image", [], "any", false, false, false, 44))), "html", null, true);
                    yield "\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 46
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontOffice/images/user.jpg"), "html", null, true);
                    yield "\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 47
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"font-size: 1.2rem;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["discussion"], "receiver", [], "any", false, false, false, 49), "nom", [], "any", false, false, false, 49), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["discussion"], "receiver", [], "any", false, false, false, 50), "prenom", [], "any", false, false, false, 50), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_discussion", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["discussion"], "id", [], "any", false, false, false, 55)]), "html", null, true);
                yield "\" method=\"POST\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cette discussion ?');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger btn-sm delete-btn\">🗑</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 60
            yield "\t\t\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 61
            yield "\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item text-muted\">Aucune discussion disponible.</li>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['discussion'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "\t\t\t\t\t\t\t\t\t</ul>


\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_discussion");
        yield "\" class=\"btn btn-success mt-3\">Nouvelle discussion</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Chatbox principale -->
\t\t\t\t\t\t<div class=\"col-md-6 col-lg-7 col-xl-8\">
\t\t\t\t\t\t\t<h5 class=\"font-weight-bold mb-3 text-center text-lg-start\">Message avec</h5>

\t\t\t\t\t\t\t";
        // line 75
        if ((array_key_exists("discussion", $context) && (isset($context["discussion"]) || array_key_exists("discussion", $context) ? $context["discussion"] : (function () { throw new RuntimeError('Variable "discussion" does not exist.', 75, $this->source); })()))) {
            // line 76
            yield "\t\t\t\t\t\t\t\t<div class=\"chat-box p-3\">
\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled chat-messages\" id=\"chat-messages\">
\t\t\t\t\t\t\t\t\t\t";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 78, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 79
                yield "\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 79), "id", [], "any", false, false, false, 79) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", [], "any", false, false, false, 79), "id", [], "any", false, false, false, 79))) {
                    yield "justify-content-end";
                } else {
                    yield "justify-content-start";
                }
                yield " mb-3 align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 80
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 80), "id", [], "any", false, false, false, 80) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "user", [], "any", false, false, false, 80), "id", [], "any", false, false, false, 80))) {
                    // line 81
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "user", [], "any", false, false, false, 81), "image", [], "any", false, false, false, 81)) {
                        // line 82
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 82), "image", [], "any", false, false, false, 82))), "html", null, true);
                        yield "\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 84
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontOffice/images/user.jpg"), "html", null, true);
                        yield "\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 85
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 86
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"message ";
                // line 87
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 87), "id", [], "any", false, false, false, 87) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87), "id", [], "any", false, false, false, 87))) {
                    yield "sent";
                } else {
                    yield "received";
                }
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 88), "html", null, true);
                yield "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"timestamp\">";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "createdAt", [], "any", false, false, false, 89), "d/m/Y H:i"), "html", null, true);
                yield "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 93
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 93), "id", [], "any", false, false, false, 93) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 93, $this->source); })()), "user", [], "any", false, false, false, 93), "id", [], "any", false, false, false, 93))) {
                    // line 94
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light btn-sm dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton";
                    // line 95
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 95), "html", null, true);
                    yield "\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t...
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton";
                    // line 98
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 98), "html", null, true);
                    yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
                    // line 100
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_message", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 100)]), "html", null, true);
                    yield "\" method=\"POST\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer ce message ?');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"dropdown-item text-danger\">🗑 Supprimer</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 105
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_message", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 105)]), "html", null, true);
                    yield "\" class=\"dropdown-item\">✏ Modifier</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 110
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light btn-sm dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton";
                    // line 111
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 111), "html", null, true);
                    yield "\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t...
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton";
                    // line 114
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 114), "html", null, true);
                    yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
                    // line 116
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_message", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 116)]), "html", null, true);
                    yield "\" method=\"POST\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer ce message ?');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"dropdown-item text-danger\">🗑 Supprimer</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 124
                yield "\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t";
                $context['_iterated'] = true;
            }
            // line 126
            if (!$context['_iterated']) {
                // line 127
                yield "\t\t\t\t\t\t\t\t\t\t\t<li class=\"text-muted text-center\">Aucun message dans cette discussion.</li>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            yield "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Formulaire d'envoi -->
\t\t\t\t\t\t\t\t<form action=\"";
            // line 133
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("send_message");
            yield "\" method=\"POST\" class=\"chat-input p-3\" id=\"chat-form\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"discussion_id\" value=\"";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["discussion"]) || array_key_exists("discussion", $context) ? $context["discussion"] : (function () { throw new RuntimeError('Variable "discussion" does not exist.', 134, $this->source); })()), "id", [], "any", false, false, false, 134), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"sender_id\" value=\"";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 135, $this->source); })()), "user", [], "any", false, false, false, 135), "id", [], "any", false, false, false, 135), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t\t<textarea name=\"content\" id=\"content\" class=\"form-control\" placeholder=\"Votre message...\"></textarea>
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
\t\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t\t<!-- Affichage des erreurs -->
\t\t\t\t\t\t\t\t";
            // line 141
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 141, $this->source); })()), "flashes", ["error"], "method", false, false, false, 141));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 142
                yield "\t\t\t\t\t\t\t\t\t<p class=\"text-danger mt-1\" style=\"font-size: 14px;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</p>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            yield "\t\t\t\t\t\t\t\t<!-- Bouton supprimer la discussion -->
\t\t\t\t\t\t\t\t<form action=\"";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_discussion", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["discussion"]) || array_key_exists("discussion", $context) ? $context["discussion"] : (function () { throw new RuntimeError('Variable "discussion" does not exist.', 145, $this->source); })()), "id", [], "any", false, false, false, 145)]), "html", null, true);
            yield "\" method=\"POST\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cette discussion ?');\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">Supprimer cette discussion</button>
\t\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t";
        } else {
            // line 150
            yield "\t\t\t\t\t\t\t\t<p class=\"text-center\">Sélectionnez une discussion pour commencer à discuter.</p>
\t\t\t\t\t\t\t";
        }
        // line 152
        yield "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<script>
\t\t\t// Scroll automatique vers le bas
document.addEventListener(\"DOMContentLoaded\", function () {
var chatMessages = document.getElementById(\"chat-messages\");
if (chatMessages) {
chatMessages.scrollTop = chatMessages.scrollHeight;
}
});

// Scroll après envoi du message
document.getElementById(\"chat-form\") ?. addEventListener(\"submit\", function () {
setTimeout(function () {
var chatMessages = document.getElementById(\"chat-messages\");
if (chatMessages) {
chatMessages.scrollTop = chatMessages.scrollHeight;
}
}, 100);
});

// Scroll automatique vers le bas
function scrollToBottom() {
window.scrollTo(0, document.body.scrollHeight);
}

// Appel initial au chargement
document.addEventListener(\"DOMContentLoaded\", scrollToBottom);

// Exemple : appel après l’envoi d’un message
document.getElementById(\"chat-form\").addEventListener(\"submit\", function () {
setTimeout(scrollToBottom, 100); // Petit délai pour laisser le message s'afficher
});
// Scroll automatique vers le bas
document.addEventListener(\"DOMContentLoaded\", function () {
var chatMessages = document.getElementById(\"chat-messages\");
if (chatMessages) {
chatMessages.scrollTop = chatMessages.scrollHeight;
}
});

// Scroll après envoi du message
document.getElementById(\"chat-form\") ?. addEventListener(\"submit\", function () {
setTimeout(function () {
var chatMessages = document.getElementById(\"chat-messages\");
if (chatMessages) {
chatMessages.scrollTop = chatMessages.scrollHeight;
}
}, 100);
});

// Réouverture du dropdown si nécessaire
document.addEventListener('click', function (event) {
var dropdowns = document.querySelectorAll('.dropdown-menu');
dropdowns.forEach(function (dropdown) {
if (! event.target.closest('.dropdown') && ! dropdown.contains(event.target)) {
dropdown.classList.remove('show');
}
});
});
\t\t</script>
\t\t<script>
\t\t\tdocument.addEventListener(\"DOMContentLoaded\", function () {
var dropdownElements = document.querySelectorAll('.dropdown-toggle');
dropdownElements.forEach(function (dropdown) {
dropdown.addEventListener('click', function (event) {
event.stopPropagation();
let menu = this.nextElementSibling;
document.querySelectorAll('.dropdown-menu').forEach(m => {
if (m !== menu) 
m.classList.remove('show');



});
menu.classList.toggle('show');
});
});

document.addEventListener('click', function () {
document.querySelectorAll('.dropdown-menu').forEach(m => m.classList.remove('show'));
});
});
\t\t</script>

\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\"/>
\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\"></script>

\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "message/conversation.html.twig";
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
        return array (  405 => 152,  401 => 150,  393 => 145,  390 => 144,  381 => 142,  377 => 141,  368 => 135,  364 => 134,  360 => 133,  354 => 129,  347 => 127,  345 => 126,  339 => 124,  328 => 116,  323 => 114,  317 => 111,  314 => 110,  306 => 105,  298 => 100,  293 => 98,  287 => 95,  284 => 94,  282 => 93,  275 => 89,  271 => 88,  263 => 87,  260 => 86,  257 => 85,  251 => 84,  245 => 82,  243 => 81,  241 => 80,  232 => 79,  227 => 78,  223 => 76,  221 => 75,  209 => 66,  204 => 63,  197 => 61,  192 => 60,  184 => 55,  176 => 50,  172 => 49,  168 => 47,  162 => 46,  156 => 44,  154 => 43,  149 => 41,  146 => 40,  144 => 39,  137 => 35,  129 => 30,  125 => 29,  121 => 27,  115 => 25,  109 => 23,  107 => 22,  102 => 20,  99 => 19,  96 => 18,  91 => 17,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<section>
\t\t<div class=\"container mt-4\">
\t\t\t<div class=\"border rounded p-3 shadow bg-white\">

\t\t\t\t<div class=\"container py-5\">
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"row\">
\t\t\t\t\t\t<!-- Sidebar des discussions -->
\t\t\t\t\t\t<div class=\"col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0\">
\t\t\t\t\t\t\t<h5 class=\"font-weight-bold mb-3 text-center text-lg-start\">Discussions</h5>
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled mb-0 scrollable-list\">
\t\t\t\t\t\t\t\t\t\t{% for discussion in discussions %}
\t\t\t\t\t\t\t\t\t\t\t{% if discussion.receiver.id == app.user.id %}
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"p-2 border-bottom bg-body-tertiary d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('view_discussion', {id: discussion.id}) }}\" class=\"d-flex justify-content-between text-decoration-none w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-row w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if app.user.image %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('uploads/images/' ~ discussion.sender.image) }}\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('frontOffice/images/user.jpg') }}\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"font-size:1.2rem;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ discussion.sender.nom }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ discussion.sender.prenom }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"{{ path('delete_discussion', {id: discussion.id}) }}\" method=\"POST\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cette discussion ?');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger btn-sm delete-btn\">🗑</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t{% elseif discussion.sender.id == app.user.id %}
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"p-2 border-bottom bg-body-tertiary d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('view_discussion', {id: discussion.id}) }}\" class=\"d-flex justify-content-between text-decoration-none w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-row w-100\">
{% if app.user.image %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('uploads/images/' ~ discussion.receiver.image) }}\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('frontOffice/images/user.jpg') }}\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"font-size: 1.2rem;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ discussion.receiver.nom }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ discussion.receiver.prenom }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"{{ path('delete_discussion', {id: discussion.id}) }}\" method=\"POST\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cette discussion ?');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger btn-sm delete-btn\">🗑</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item text-muted\">Aucune discussion disponible.</li>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</ul>


\t\t\t\t\t\t\t\t\t<a href=\"{{ path('create_discussion') }}\" class=\"btn btn-success mt-3\">Nouvelle discussion</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Chatbox principale -->
\t\t\t\t\t\t<div class=\"col-md-6 col-lg-7 col-xl-8\">
\t\t\t\t\t\t\t<h5 class=\"font-weight-bold mb-3 text-center text-lg-start\">Message avec</h5>

\t\t\t\t\t\t\t{% if discussion is defined and discussion %}
\t\t\t\t\t\t\t\t<div class=\"chat-box p-3\">
\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled chat-messages\" id=\"chat-messages\">
\t\t\t\t\t\t\t\t\t\t{% for message in messages %}
\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex {% if message.sender.id == app.user.id %}justify-content-end{% else %}justify-content-start{% endif %} mb-3 align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t{% if message.sender.id != app.user.id %}
{% if app.user.image %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('uploads/images/' ~ message.sender.image) }}\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('frontOffice/images/user.jpg') }}\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"message {% if message.sender.id == app.user.id %}sent{% else %}received{% endif %}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">{{ message.content }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"timestamp\">{{ message.createdAt|date('d/m/Y H:i') }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t{% if message.sender.id == app.user.id %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light btn-sm dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton{{ message.id }}\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t...
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton{{ message.id }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"{{ path('delete_message', {id: message.id}) }}\" method=\"POST\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer ce message ?');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"dropdown-item text-danger\">🗑 Supprimer</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('edit_message', {id: message.id}) }}\" class=\"dropdown-item\">✏ Modifier</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light btn-sm dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton{{ message.id }}\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t...
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton{{ message.id }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"{{ path('delete_message', {id: message.id}) }}\" method=\"POST\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer ce message ?');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"dropdown-item text-danger\">🗑 Supprimer</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<li class=\"text-muted text-center\">Aucun message dans cette discussion.</li>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Formulaire d'envoi -->
\t\t\t\t\t\t\t\t<form action=\"{{ path('send_message') }}\" method=\"POST\" class=\"chat-input p-3\" id=\"chat-form\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"discussion_id\" value=\"{{ discussion.id }}\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"sender_id\" value=\"{{ app.user.id }}\">
\t\t\t\t\t\t\t\t\t<textarea name=\"content\" id=\"content\" class=\"form-control\" placeholder=\"Votre message...\"></textarea>
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
\t\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t\t<!-- Affichage des erreurs -->
\t\t\t\t\t\t\t\t{% for message in app.flashes('error') %}
\t\t\t\t\t\t\t\t\t<p class=\"text-danger mt-1\" style=\"font-size: 14px;\">{{ message }}</p>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t<!-- Bouton supprimer la discussion -->
\t\t\t\t\t\t\t\t<form action=\"{{ path('delete_discussion', {id: discussion.id}) }}\" method=\"POST\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cette discussion ?');\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">Supprimer cette discussion</button>
\t\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<p class=\"text-center\">Sélectionnez une discussion pour commencer à discuter.</p>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<script>
\t\t\t// Scroll automatique vers le bas
document.addEventListener(\"DOMContentLoaded\", function () {
var chatMessages = document.getElementById(\"chat-messages\");
if (chatMessages) {
chatMessages.scrollTop = chatMessages.scrollHeight;
}
});

// Scroll après envoi du message
document.getElementById(\"chat-form\") ?. addEventListener(\"submit\", function () {
setTimeout(function () {
var chatMessages = document.getElementById(\"chat-messages\");
if (chatMessages) {
chatMessages.scrollTop = chatMessages.scrollHeight;
}
}, 100);
});

// Scroll automatique vers le bas
function scrollToBottom() {
window.scrollTo(0, document.body.scrollHeight);
}

// Appel initial au chargement
document.addEventListener(\"DOMContentLoaded\", scrollToBottom);

// Exemple : appel après l’envoi d’un message
document.getElementById(\"chat-form\").addEventListener(\"submit\", function () {
setTimeout(scrollToBottom, 100); // Petit délai pour laisser le message s'afficher
});
// Scroll automatique vers le bas
document.addEventListener(\"DOMContentLoaded\", function () {
var chatMessages = document.getElementById(\"chat-messages\");
if (chatMessages) {
chatMessages.scrollTop = chatMessages.scrollHeight;
}
});

// Scroll après envoi du message
document.getElementById(\"chat-form\") ?. addEventListener(\"submit\", function () {
setTimeout(function () {
var chatMessages = document.getElementById(\"chat-messages\");
if (chatMessages) {
chatMessages.scrollTop = chatMessages.scrollHeight;
}
}, 100);
});

// Réouverture du dropdown si nécessaire
document.addEventListener('click', function (event) {
var dropdowns = document.querySelectorAll('.dropdown-menu');
dropdowns.forEach(function (dropdown) {
if (! event.target.closest('.dropdown') && ! dropdown.contains(event.target)) {
dropdown.classList.remove('show');
}
});
});
\t\t</script>
\t\t<script>
\t\t\tdocument.addEventListener(\"DOMContentLoaded\", function () {
var dropdownElements = document.querySelectorAll('.dropdown-toggle');
dropdownElements.forEach(function (dropdown) {
dropdown.addEventListener('click', function (event) {
event.stopPropagation();
let menu = this.nextElementSibling;
document.querySelectorAll('.dropdown-menu').forEach(m => {
if (m !== menu) 
m.classList.remove('show');



});
menu.classList.toggle('show');
});
});

document.addEventListener('click', function () {
document.querySelectorAll('.dropdown-menu').forEach(m => m.classList.remove('show'));
});
});
\t\t</script>

\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\"/>
\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\"></script>

\t{% endblock %}
", "message/conversation.html.twig", "C:\\Users\\walid\\Desktop\\finalPI\\pi2025\\templates\\message\\conversation.html.twig");
    }
}
