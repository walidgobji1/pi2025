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
class __TwigTemplate_71242609e530e553be02fecbe0a26c75 extends Template
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

    // line 4
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

        // line 5
        yield "

\t<style>
\t\t.chat-box {
\t\t\tmax-height: 450px;
\t\t\toverflow-y: auto;
\t\t\tbackground: #f9f9f9;
\t\t\tborder-radius: 15px;
\t\t\tpadding: 20px;
\t\t\tbox-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
\t\t\tdisplay: flex;
\t\t\tflex-direction: column;
\t\t}

\t\t/* Liste des messages */
\t\t.chat-messages {
\t\t\tlist-style: none;
\t\t\tpadding: 0;
\t\t\tmargin: 0;
\t\t\tdisplay: flex;
\t\t\tflex-direction: column;
\t\t\toverflow-y: auto;
\t\t\tflex-grow: 1;

\t\t}

\t\t/* Message standard */
\t\t.message {
\t\t\tmax-width: 70%;
\t\t\tpadding: 12px 16px;
\t\t\tborder-radius: 18px;
\t\t\tfont-size: 15px;
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tword-wrap: break-word;
\t\t\twhite-space: pre-wrap;
\t\t\tmargin-bottom: 12px;
\t\t\ttransition: all 0.3s ease;
\t\t}

\t\t/* Message envoyé */
\t\t.message.sent {
\t\t\tbackground: #007bff;
\t\t\tcolor: white;
\t\t\talign-self: flex-end;
\t\t\tborder-bottom-right-radius: 0;
\t\t\tbox-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
\t\t}

\t\t/* Message reçu */
\t\t.message.received {
\t\t\tbackground: #e0e0e0;
\t\t\talign-self: flex-start;
\t\t\tborder-bottom-left-radius: 0;
\t\t\tbox-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
\t\t}

\t\t/* Formulaire d'entrée */
\t\t.chat-input {
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tpadding: 15px;
\t\t\tbackground: #ffffff;
\t\t\tborder-top: 2px solid #e1e1e1;
\t\t\tborder-radius: 10px;
\t\t}

\t\t/* Zone de texte */
\t\t.chat-input textarea {
\t\t\tflex: 1;
\t\t\tborder-radius: 10px;
\t\t\tpadding: 12px 15px;
\t\t\tfont-size: 14px;
\t\t\tresize: none;
\t\t\tborder: 1px solid #ccc;
\t\t\theight: 50px;
\t\t\tbox-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
\t\t\ttransition: all 0.3s ease;
\t\t}

\t\t/* Effet de focus sur la zone de texte */
\t\t.chat-input textarea:focus {
\t\t\tborder-color: #007bff;
\t\t\toutline: none;
\t\t}

\t\t/* Bouton envoyer */
\t\t.chat-input button {
\t\t\tpadding: 10px 20px;
\t\t\tborder-radius: 15px;
\t\t\tfont-size: 14px;
\t\t\tbackground: #007bff;
\t\t\tcolor: white;
\t\t\tborder: none;
\t\t\tmargin-left: 10px;
\t\t\tcursor: pointer;
\t\t\ttransition: all 0.3s ease;
\t\t}

\t\t/* Effet de hover pour le bouton envoyer */
\t\t.chat-input button:hover {
\t\t\tbackground: #0056b3;
\t\t}

\t\t/* Timestamps des messages */
\t\t.timestamp {
\t\t\tfont-size: 12px;
\t\t\tcolor: rgba(0, 0, 0, 0.6);
\t\t\tmargin-left: 10px;
\t\t}

\t\t/* Style de la liste des discussions */
\t\t.scrollable-list {
\t\t\tmax-height: 450px;
\t\t\toverflow-y: auto;
\t\t\tmargin-bottom: 20px;
\t\t}

\t\t/* Style de la discussion dans la liste */
\t\t.list-unstyled li {
\t\t\tpadding: 12px;
\t\t\tborder-bottom: 1px solid #ddd;
\t\t\tbackground-color: #f9f9f9;
\t\t\tborder-radius: 10px;
\t\t\tmargin-bottom: 10px;
\t\t\ttransition: background-color 0.3s ease;
\t\t\tdisplay: flex;
\t\t\tjustify-content: space-between;
\t\t\talign-items: center;
\t\t}

\t\t/* Effet au survol des discussions */
\t\t.list-unstyled li:hover {
\t\t\tbackground-color: #f0f0f0;
\t\t}

\t\t/* Avatar de l'utilisateur dans la discussion */
\t\t.rounded-circle {
\t\t\tbox-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
\t\t}

\t\t/* Formulaire de suppression de la discussion */
\t\t.btn-danger {
\t\t\tbackground-color: #e74c3c;
\t\t\tborder-color: #e74c3c;
\t\t\tborder-radius: 12px;
\t\t\ttransition: all 0.3s ease;
\t\t}

\t\t/* Effet hover pour le bouton supprimer */
\t\t.btn-danger:hover {
\t\t\tbackground-color: #c0392b;
\t\t\tborder-color: #c0392b;
\t\t\ttext-align: center;
\t\t}

\t\t/* Formatage des boutons de suppression de message */
\t\t.dropdown-menu li button {
\t\t\tbackground: transparent;
\t\t\tborder: none;
\t\t\tfont-size: 14px;
\t\t\tcolor: #c0392b;
\t\t}

\t\t/* Ajouter un style au bouton modifier */
\t\t.dropdown-item {
\t\t\tbackground-color: #f1f1f1;
\t\t}

\t\t/* Ajouter un fond pour la card contenant les discussions */
\t\t.card-body {
\t\t\tpadding: 20px;
\t\t\tbackground: #f9f9f9;
\t\t\tborder-radius: 10px;
\t\t}

\t\t/* Réduire la taille du dropdown */
\t\t.dropdown-menu {
\t\t\tmin-width: 150px;
\t\t\tfont-size: 14px;
\t\t\tpadding: 8px 0;
\t\t\tborder-radius: 8px;
\t\t\tbox-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
\t\t\tbackground-color: #fff;
\t\t\tborder: 1px solid #ddd;
\t\t\topacity: 0;
\t\t\tvisibility: hidden;
\t\t\ttransform: translateY(-10px);
\t\t\ttransition: all 0.3s ease;
\t\t}

\t\t/* Effet de survol sur le menu dropdown */
\t\t.dropdown-menu.show {
\t\t\topacity: 1;
\t\t\tvisibility: visible;
\t\t\ttransform: translateY(0);
\t\t}

\t\t/* Style des éléments du dropdown */
\t\t.dropdown-item {
\t\t\tpadding: 10px 15px;
\t\t\tcolor: #333;
\t\t\tbackground-color: transparent;
\t\t\tborder: none;
\t\t\tfont-size: 14px;
\t\t\tborder-radius: 6px;
\t\t\ttransition: background-color 0.3s ease, color 0.3s ease;
\t\t}

\t\t/* Effet de survol des éléments du dropdown */
\t\t.dropdown-item:hover {
\t\t\tbackground-color: #f1f1f1;
\t\t\tcolor: #007bff;
\t\t}

\t\t/* Bouton du dropdown */
\t\t.dropdown-toggle {
\t\t\tbackground-color: transparent;
\t\t\tborder: none;
\t\t\tpadding: 6px 12px;
\t\t\tfont-size: 14px;
\t\t\tcolor: #555;
\t\t\tborder-radius: 6px;
\t\t\ttransition: background-color 0.3s ease, color 0.3s ease;
\t\t}

\t\t/* Effet de survol sur le bouton dropdown */
\t\t.dropdown-toggle:hover {
\t\t\tbackground-color: #f0f0f0;
\t\t\tcolor: #007bff;
\t\t}

\t\t/* Ajout d'une icône sur le bouton dropdown */
\t\t.dropdown-toggle::after {
\t\t\tcontent: ' ▼';
\t\t\tfont-size: 10px;
\t\t\tmargin-left: 5px;
\t\t}

\t\t/* Modifier le bouton supprimer */
\t\t.dropdown-item.text-danger {
\t\t\tcolor: #e74c3c;
\t\t}

\t\t/* Effet de survol du bouton supprimer */
\t\t.dropdown-item.text-danger:hover {
\t\t\tbackground-color: #e74c3c;
\t\t\tcolor: white;
\t\t}
\t\t/* Style de la liste des emojis dans le dropdown */
\t\t.emoji-list {
\t\t\tdisplay: flex;
\t\t\tflex-direction: column;
\t\t\tpadding: 0;
\t\t\tmargin: 0;
\t\t\tlist-style: none;
\t\t}

\t\t/* Style des éléments de la liste des emojis */
\t\t.emoji-list li {
\t\t\tdisplay: block; /* Assure l'affichage vertical */
\t\t\tmargin-bottom: 10px; /* Espacement entre les emojis */
\t\t}

\t\t/* Style pour les boutons emoji dans le dropdown */
\t\t.emoji-list .emoji {
\t\t\tfont-size: 20px;
\t\t\tpadding: 8px 15px;
\t\t\tbackground-color: transparent;
\t\t\tborder: none;
\t\t\tcolor: #555;
\t\t\twidth: 100%;
\t\t\ttext-align: left;
\t\t\ttransition: background-color 0.3s ease, color 0.3s ease;
\t\t\tborder-radius: 10px;
\t\t}

\t\t/* Effet de survol pour les boutons emoji */
\t\t.emoji-list .emoji:hover {
\t\t\tbackground-color: #f0f0f0;
\t\t\tcolor: #4c89f5;
\t\t}

\t\t/*# sourceMappingURL=style.css.map */
\t</style>
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
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"card-body\">
\t\t\t\t\t\t\t\t\t<!-- Champ de recherche -->
\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"searchDiscussion\" class=\"form-control\" placeholder=\"Rechercher une discussion...\">
\t\t\t\t\t\t\t\t\t\t<button id=\"searchButton\" class=\"btn btn-primary\">Rechercher</button>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- Liste des discussions -->
\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled mb-0 scrollable-list\" id=\"discussionList\">
\t\t\t\t\t\t\t\t\t\t";
        // line 311
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["discussions"]) || array_key_exists("discussions", $context) ? $context["discussions"] : (function () { throw new RuntimeError('Variable "discussions" does not exist.', 311, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["discussion"]) {
            // line 312
            yield "\t\t\t\t\t\t\t\t\t\t\t";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["discussion"], "receiver", [], "any", false, false, false, 312), "id", [], "any", false, false, false, 312) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 312, $this->source); })()), "user", [], "any", false, false, false, 312), "id", [], "any", false, false, false, 312))) {
                // line 313
                yield "\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"p-2 border-bottom bg-body-tertiary d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 314
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_discussion", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["discussion"], "id", [], "any", false, false, false, 314)]), "html", null, true);
                yield "\" class=\"d-flex justify-content-between text-decoration-none w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-row w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 316
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 316, $this->source); })()), "user", [], "any", false, false, false, 316), "image", [], "any", false, false, false, 316)) {
                    // line 317
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["discussion"], "sender", [], "any", false, false, false, 317), "image", [], "any", false, false, false, 317))), "html", null, true);
                    yield "\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 319
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontOffice/images/user.jpg"), "html", null, true);
                    yield "\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 321
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"font-size:1.2rem;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 323
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["discussion"], "sender", [], "any", false, false, false, 323), "nom", [], "any", false, false, false, 323), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 324
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["discussion"], "sender", [], "any", false, false, false, 324), "prenom", [], "any", false, false, false, 324), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
                // line 329
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_discussion", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["discussion"], "id", [], "any", false, false, false, 329)]), "html", null, true);
                yield "\" method=\"POST\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cette discussion ?');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger btn-sm delete-btn\">🗑</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 333
$context["discussion"], "sender", [], "any", false, false, false, 333), "id", [], "any", false, false, false, 333) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 333, $this->source); })()), "user", [], "any", false, false, false, 333), "id", [], "any", false, false, false, 333))) {
                // line 334
                yield "\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"p-2 border-bottom bg-body-tertiary d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 335
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_discussion", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["discussion"], "id", [], "any", false, false, false, 335)]), "html", null, true);
                yield "\" class=\"d-flex justify-content-between text-decoration-none w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-row w-100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 337
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 337, $this->source); })()), "user", [], "any", false, false, false, 337), "image", [], "any", false, false, false, 337)) {
                    // line 338
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["discussion"], "receiver", [], "any", false, false, false, 338), "image", [], "any", false, false, false, 338))), "html", null, true);
                    yield "\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 340
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontOffice/images/user.jpg"), "html", null, true);
                    yield "\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 342
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"font-size: 1.2rem;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 344
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["discussion"], "receiver", [], "any", false, false, false, 344), "nom", [], "any", false, false, false, 344), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 345
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["discussion"], "receiver", [], "any", false, false, false, 345), "prenom", [], "any", false, false, false, 345), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
                // line 350
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_discussion", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["discussion"], "id", [], "any", false, false, false, 350)]), "html", null, true);
                yield "\" method=\"POST\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cette discussion ?');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger btn-sm delete-btn\">🗑</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 355
            yield "\t\t\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        // line 357
        if (!$context['_iterated']) {
            // line 356
            yield "\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item text-muted\">Aucune discussion disponible.</li>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['discussion'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 358
        yield "\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t<!-- Bouton nouvelle discussion -->
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 361
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_discussion");
        yield "\" class=\"btn btn-success mt-3\">Nouvelle discussion</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<!-- Chatbox principale -->
\t\t\t\t\t\t<div class=\"col-md-6 col-lg-7 col-xl-8\">
\t\t\t\t\t\t\t<h5 class=\"font-weight-bold mb-3 text-center text-lg-start\">";
        // line 369
        if ((array_key_exists("discussion", $context) && (isset($context["discussion"]) || array_key_exists("discussion", $context) ? $context["discussion"] : (function () { throw new RuntimeError('Variable "discussion" does not exist.', 369, $this->source); })()))) {
            yield " Message avec  ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["discussion"]) || array_key_exists("discussion", $context) ? $context["discussion"] : (function () { throw new RuntimeError('Variable "discussion" does not exist.', 369, $this->source); })()), "receiver", [], "any", false, false, false, 369), "id", [], "any", false, false, false, 369) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 369, $this->source); })()), "user", [], "any", false, false, false, 369), "id", [], "any", false, false, false, 369))) {
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["discussion"]) || array_key_exists("discussion", $context) ? $context["discussion"] : (function () { throw new RuntimeError('Variable "discussion" does not exist.', 369, $this->source); })()), "sender", [], "any", false, false, false, 369), "nom", [], "any", false, false, false, 369), "html", null, true);
                yield "\t";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["discussion"]) || array_key_exists("discussion", $context) ? $context["discussion"] : (function () { throw new RuntimeError('Variable "discussion" does not exist.', 369, $this->source); })()), "sender", [], "any", false, false, false, 369), "prenom", [], "any", false, false, false, 369), "html", null, true);
                yield " 
\t\t\t\t\t\t\t                                                                         ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 370
(isset($context["discussion"]) || array_key_exists("discussion", $context) ? $context["discussion"] : (function () { throw new RuntimeError('Variable "discussion" does not exist.', 370, $this->source); })()), "sender", [], "any", false, false, false, 370), "id", [], "any", false, false, false, 370) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 370, $this->source); })()), "user", [], "any", false, false, false, 370), "id", [], "any", false, false, false, 370))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["discussion"]) || array_key_exists("discussion", $context) ? $context["discussion"] : (function () { throw new RuntimeError('Variable "discussion" does not exist.', 370, $this->source); })()), "receiver", [], "any", false, false, false, 370), "nom", [], "any", false, false, false, 370), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 371
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["discussion"]) || array_key_exists("discussion", $context) ? $context["discussion"] : (function () { throw new RuntimeError('Variable "discussion" does not exist.', 371, $this->source); })()), "receiver", [], "any", false, false, false, 371), "prenom", [], "any", false, false, false, 371), "html", null, true);
                yield " ";
            } else {
                yield " Vos Messages  ";
            }
            yield " ";
        }
        // line 372
        yield " </h5>

\t\t\t\t\t\t\t";
        // line 374
        if ((array_key_exists("discussion", $context) && (isset($context["discussion"]) || array_key_exists("discussion", $context) ? $context["discussion"] : (function () { throw new RuntimeError('Variable "discussion" does not exist.', 374, $this->source); })()))) {
            // line 375
            yield "\t\t\t\t\t\t\t\t<div class=\"chat-box p-3\">
\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled chat-messages\" id=\"chat-messages\">
\t\t\t\t\t\t\t\t\t\t";
            // line 377
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 377, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 378
                yield "\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 378), "id", [], "any", false, false, false, 378) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 378, $this->source); })()), "user", [], "any", false, false, false, 378), "id", [], "any", false, false, false, 378))) {
                    yield "justify-content-end";
                } else {
                    yield "justify-content-start";
                }
                yield " mb-3 align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 379
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 379), "id", [], "any", false, false, false, 379) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 379, $this->source); })()), "user", [], "any", false, false, false, 379), "id", [], "any", false, false, false, 379))) {
                    // line 380
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 380, $this->source); })()), "user", [], "any", false, false, false, 380), "image", [], "any", false, false, false, 380)) {
                        // line 381
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 381), "image", [], "any", false, false, false, 381))), "html", null, true);
                        yield "\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 383
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontOffice/images/user.jpg"), "html", null, true);
                        yield "\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 385
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 386
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"message ";
                // line 387
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 387), "id", [], "any", false, false, false, 387) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 387, $this->source); })()), "user", [], "any", false, false, false, 387), "id", [], "any", false, false, false, 387))) {
                    yield "sent";
                } else {
                    yield "received";
                }
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">";
                // line 388
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 388), "html", null, true);
                yield "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"timestamp\">";
                // line 389
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "createdAt", [], "any", false, false, false, 389), "d/m/Y H:i"), "html", null, true);
                yield "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 390
                if (CoreExtension::getAttribute($this->env, $this->source, $context["message"], "reaction", [], "any", false, false, false, 390)) {
                    // line 391
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"selected-reaction\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "reaction", [], "any", false, false, false, 391), "html", null, true);
                    yield "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 393
                yield "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"reaction mt-1\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Bouton pour ouvrir la liste d'emojis -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light btn-sm reaction-button\" type=\"button\" id=\"reactionMenuButton";
                // line 399
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 399), "html", null, true);
                yield "\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t😊
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Liste d'emojis -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu emoji-list\" aria-labelledby=\"reactionMenuButton";
                // line 404
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 404), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
                // line 406
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_react", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 406)]), "html", null, true);
                yield "\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"reaction\" value=\"❤️\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"dropdown-item emoji\">❤️</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
                // line 412
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_react", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 412)]), "html", null, true);
                yield "\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"reaction\" value=\"😂\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"dropdown-item emoji\">😂</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
                // line 418
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_react", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 418)]), "html", null, true);
                yield "\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"reaction\" value=\"😮\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"dropdown-item emoji\">😮</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
                // line 424
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_react", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 424)]), "html", null, true);
                yield "\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"reaction\" value=\"😢\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"dropdown-item emoji\">😢</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
                // line 430
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_react", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 430)]), "html", null, true);
                yield "\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"reaction\" value=\"👍\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"dropdown-item emoji\">👍</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
                // line 436
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_react", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 436)]), "html", null, true);
                yield "\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"reaction\" value=\"👎\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"dropdown-item emoji\">👎</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 445
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 445), "id", [], "any", false, false, false, 445) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 445, $this->source); })()), "user", [], "any", false, false, false, 445), "id", [], "any", false, false, false, 445))) {
                    // line 446
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light btn-sm dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton";
                    // line 447
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 447), "html", null, true);
                    yield "\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t...
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton";
                    // line 450
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 450), "html", null, true);
                    yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
                    // line 452
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_message", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 452)]), "html", null, true);
                    yield "\" method=\"POST\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer ce message ?');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"dropdown-item text-danger\">🗑 Supprimer</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 457
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_message", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 457)]), "html", null, true);
                    yield "\" class=\"dropdown-item\">✏ Modifier</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 462
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light btn-sm dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton";
                    // line 463
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 463), "html", null, true);
                    yield "\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t...
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton";
                    // line 466
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 466), "html", null, true);
                    yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
                    // line 468
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_message", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 468)]), "html", null, true);
                    yield "\" method=\"POST\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer ce message ?');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"dropdown-item text-danger\">🗑 Supprimer</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 476
                yield "\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t";
                $context['_iterated'] = true;
            }
            // line 480
            if (!$context['_iterated']) {
                // line 479
                yield "\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"text-muted text-center\">Aucun message dans cette discussion.</li>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 481
            yield "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- Formulaire d'envoi -->
\t\t\t\t\t\t\t\t\t<form action=\"";
            // line 485
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("send_message");
            yield "\" method=\"POST\" class=\"chat-input p-3\" id=\"chat-form\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"discussion_id\" value=\"";
            // line 486
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["discussion"]) || array_key_exists("discussion", $context) ? $context["discussion"] : (function () { throw new RuntimeError('Variable "discussion" does not exist.', 486, $this->source); })()), "id", [], "any", false, false, false, 486), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"sender_id\" value=\"";
            // line 487
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 487, $this->source); })()), "user", [], "any", false, false, false, 487), "id", [], "any", false, false, false, 487), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t\t\t<textarea name=\"content\" id=\"content\" class=\"form-control\" placeholder=\"Votre message...\"></textarea>
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
\t\t\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t<!-- Affichage des erreurs -->
\t\t\t\t\t\t\t\t\t";
            // line 495
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 495, $this->source); })()), "flashes", ["error"], "method", false, false, false, 495));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 496
                yield "\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger mt-1\" style=\"font-size: 14px;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</p>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 498
            yield "\t\t\t\t\t\t\t\t\t<!-- Bouton supprimer la discussion -->
\t\t\t\t\t\t\t\t\t<form action=\"";
            // line 499
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_discussion", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["discussion"]) || array_key_exists("discussion", $context) ? $context["discussion"] : (function () { throw new RuntimeError('Variable "discussion" does not exist.', 499, $this->source); })()), "id", [], "any", false, false, false, 499)]), "html", null, true);
            yield "\" method=\"POST\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cette discussion ?');\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">Supprimer cette discussion</button>
\t\t\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t\t";
        } else {
            // line 504
            yield "\t\t\t\t\t\t\t\t\t<p class=\"text-center\">Sélectionnez une discussion pour commencer à discuter.</p>
\t\t\t\t\t\t\t\t";
        }
        // line 506
        yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<script>

\t\tdocument.addEventListener(\"DOMContentLoaded\", function () { // ////////////////////////////////// SCROLL ///////////////////////////////////////////

function scrollToLastMessage() {
var chatMessages = document.getElementById(\"chat-messages\");
if (chatMessages) {
let lastMessage = chatMessages.lastElementChild;
if (lastMessage) {
lastMessage.scrollIntoView({block: \"end\"}); // Scroll direct vers le dernier message
}
}
}

function scrollToBottomPage() {
window.scrollTo(0, document.body.scrollHeight); // Scroll pour toute la page
}

// Scroll automatique à l'ouverture
scrollToLastMessage();
scrollToBottomPage();

// Scroll après l'envoi d'un message
document.getElementById(\"chat-form\") ?. addEventListener(\"submit\", function () {
setTimeout(() => {
scrollToLastMessage();
scrollToBottomPage();
}, 100);
});

// ////////////////////////////////////////// DROPDOWN /////////////////////////////////////////////



// ////////////////////////////////////////// EMOJIS /////////////////////////////////////////////

// Gestion de l'ouverture des réactions emoji
document.querySelectorAll('.reaction-button').forEach(function (button) {
button.addEventListener('click', function (event) {
event.stopPropagation();
let menu = this.nextElementSibling;

closeAllDropdowns(); // Ferme tous les autres menus avant d'afficher celui-ci
menu.classList.toggle('show');
});
});
});
document.addEventListener('DOMContentLoaded', function () {
const searchButton = document.getElementById('searchButton');
const searchInput = document.getElementById('searchDiscussion');
const discussionList = document.getElementById('discussionList');

searchButton.addEventListener('click', function () {
const query = searchInput.value;

if (query.length > 0) {
fetch (`/rechercher-discussion?query=\${query}`, {method: 'GET'}).then(response => response.json()).then(data => { // Vider la liste des discussions existantes
discussionList.innerHTML = '';

if (data.length === 0) {
discussionList.innerHTML = '<li class=\"list-group-item text-muted\">Aucune discussion trouvée.</li>';
} else { // Remplir la liste avec les discussions trouvées
data.forEach(discussion => {
const listItem = document.createElement('li');
listItem.classList.add('p-2', 'border-bottom', 'bg-body-tertiary', 'd-flex', 'justify-content-between');

let discussionHTML = '';

// Ajouter les conditions comme dans le Twig

if (discussion.receiver.id == ";
        // line 583
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 583, $this->source); })()), "user", [], "any", false, false, false, 583), "id", [], "any", false, false, false, 583), "html", null, true);
        yield ") {
discussionHTML = `
                                <a href=\"/discussion/\${
discussion.id
}\" class=\"d-flex justify-content-between text-decoration-none w-100\">
                                    <div class=\"d-flex flex-row w-100\">
                                        <img src=\"/uploads/images/\${
discussion.sender.image
}\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"50\">
                                        <div class=\"pt-1\">
                                            <span style=\"font-size: 1.2rem;\">
                                                \${
discussion.sender.nom
} \${
discussion.sender.prenom
}
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            `;
} else if (discussion.sender.id == ";
        // line 604
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 604, $this->source); })()), "user", [], "any", false, false, false, 604), "id", [], "any", false, false, false, 604), "html", null, true);
        yield ") {
discussionHTML = `
                                <a href=\"/discussion/\${
discussion.id
}\" class=\"d-flex justify-content-between text-decoration-none w-100\">
                                    <div class=\"d-flex flex-row w-100\">
                                        <img src=\"/uploads/images/\${
discussion.receiver.image
}\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"50\">
                                        <div class=\"pt-1\">
                                            <span style=\"font-size: 1.2rem;\">
                                                \${
discussion.receiver.nom
} \${
discussion.receiver.prenom
}
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            `;
}

listItem.innerHTML = discussionHTML;

// Ajouter le bouton de suppression de discussion
listItem.innerHTML += `
                            <form action=\"/discussion/delete/\${
discussion.id
}\" method=\"POST\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cette discussion ?');\">
                                <button type=\"submit\" class=\"btn btn-danger btn-sm delete-btn\">🗑</button>
                            </form>
                        `;

discussionList.appendChild(listItem);
});
}
});
}
});
});
const dropdownElements = document.querySelectorAll('.dropdown-toggle');
dropdownElements.forEach(dropdown => {
    new bootstrap.Dropdown(dropdown); // Initialiser Bootstrap dropdown pour chaque bouton
});
\t</script>
\t
<script>
 document.getElementById(\"chat-form\").addEventListener(\"submit\", function(e) {
    e.preventDefault();

    let formData = new FormData(this);
    let content = document.getElementById(\"content\").value.trim();
    if (content === \"\") return;

    fetch(\"";
        // line 659
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("send_message");
        yield "\", {
        method: \"POST\",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.error) {
            alert(data.error);
            return;
        }

        document.getElementById(\"content\").value = \"\";
        // Laisse fetchMessages() gérer l'affichage
    })
    .catch(error => console.error(\"Erreur:\", error));
});
</script>
<script>
let lastMessageId = 0; // ID du dernier message chargé

function fetchMessages() {
    fetch(\"";
        // line 680
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fetch_messages", ["discussion_id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["discussion"]) || array_key_exists("discussion", $context) ? $context["discussion"] : (function () { throw new RuntimeError('Variable "discussion" does not exist.', 680, $this->source); })()), "id", [], "any", false, false, false, 680)]), "html", null, true);
        yield "\")
        .then(response => response.json())
        .then(data => {
            const chatMessages = document.getElementById(\"chat-messages\");
            let newMessages = \"\";

            data.forEach(message => {
                if (message.id > lastMessageId) { // Si c'est un nouveau message
                    lastMessageId = message.id;

                    const isSender = message.sender_id === ";
        // line 690
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 690, $this->source); })()), "user", [], "any", false, false, false, 690), "id", [], "any", false, false, false, 690), "html", null, true);
        yield ";
                    newMessages += `
                        <li class=\"d-flex \${isSender ? \"justify-content-end\" : \"justify-content-start\"} mb-3 align-items-center\">
                            \${!isSender ? `
                                <img src=\"\${message.sender_image ? \"";
        // line 694
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/"), "html", null, true);
        yield "\" + message.sender_image : \"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontOffice/images/user.jpg"), "html", null, true);
        yield "\"}\" 
                                     alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"50\">
                            ` : \"\"}
                            
                            <div class=\"message \${isSender ? \"sent\" : \"received\"}\">
                                <p class=\"mb-0\">\${message.content}</p>
                                <span class=\"timestamp\">\${message.createdAt}</span>
                                \${message.reaction ? `<span class=\"selected-reaction\">\${message.reaction}</span>` : \"\"}
                            </div>

                            <!-- Dropdown des réactions (Affiché uniquement en cliquant sur un bouton) -->
                            <div class=\"reaction mt-1\">
                                <div class=\"dropdown\">
                                    <button class=\"btn btn-light btn-sm reaction-button\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                        😊
                                    </button>
                                    <ul class=\"dropdown-menu emoji-list\">
                                        \${[\"❤️\", \"😂\", \"😮\", \"😢\", \"👍\", \"👎\"].map(emoji => `
                                            <li>
                                                <button class=\"dropdown-item emoji react-button\" data-message-id=\"\${message.id}\" data-emoji=\"\${emoji}\">
                                                    \${emoji}
                                                </button>
                                            </li>
                                        `).join(\"\")}
                                    </ul>
                                </div>
                            </div>

                            <!-- Options du message (modifier/supprimer) -->
                            <div class=\"dropdown\">
                                <button class=\"btn btn-light btn-sm dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                    ...
                                </button>
                                <ul class=\"dropdown-menu\">
                                    \${isSender ? `
                                        <li>
                                            <button class=\"dropdown-item text-danger delete-button\" data-message-id=\"\${message.id}\">🗑 Supprimer</button>
                                        </li>
                                        <li>
                                            <a href=\"";
        // line 733
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_message", ["id" => "MESSAGE_ID"]);
        yield "\".replace('MESSAGE_ID', message.id)\" class=\"dropdown-item\">✏ Modifier</a>
                                        </li>
                                    ` : `
                                        <li>
                                            <button class=\"dropdown-item text-danger delete-button\" data-message-id=\"\${message.id}\">🗑 Supprimer</button>
                                        </li>
                                    `}
                                </ul>
                            </div>
                        </li>
                    `;
                }
            });

   if (newMessages !== \"\") {
    chatMessages.innerHTML += newMessages;
    chatMessages.scrollTop = chatMessages.scrollHeight; // Scroll automatique vers le bas
    attachEventListeners();

    // Vérifier si les dropdowns existent
    console.log(\"Dropdowns détectés :\", document.querySelectorAll('.dropdown-toggle'));

    // Initialisation manuelle des dropdowns
    document.querySelectorAll('.dropdown-toggle').forEach(dropdown => {
        let dropdownInstance = new bootstrap.Dropdown(dropdown);
        dropdown.addEventListener(\"click\", function () {
            dropdownInstance.show();
        });
    });
}


            setTimeout(fetchMessages, 1000); // Rafraîchissement toutes les 1 seconde
        })
\t\t

\t\t
        .catch(error => console.error(\"Erreur de chargement des messages:\", error));
}

// Attacher les événements pour les réactions et la suppression
function attachEventListeners() {
    document.querySelectorAll(\".react-button\").forEach(button => {
        button.addEventListener(\"click\", function() {
            const messageId = this.getAttribute(\"data-message-id\");
            const emoji = this.getAttribute(\"data-emoji\");
            reactToMessage(messageId, emoji);
        });
    });

    document.querySelectorAll(\".delete-button\").forEach(button => {
        button.addEventListener(\"click\", function() {
            const messageId = this.getAttribute(\"data-message-id\");
            if (confirm(\"Voulez-vous vraiment supprimer ce message ?\")) {
                deleteMessage(messageId);
            }
        });
    });
}

// Fonction pour ajouter une réaction à un message
function reactToMessage(messageId, emoji) {
    fetch(\"";
        // line 795
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_react", ["id" => "MESSAGE_ID"]);
        yield "\".replace('MESSAGE_ID', messageId), {
        method: \"POST\",
        headers: { \"Content-Type\": \"application/x-www-form-urlencoded\" },
        body: `reaction=\${emoji}`
    })
    .then(response => response.json())
    .then(data => {
        fetchMessages(); // Recharger les messages après ajout de réaction
    })
    .catch(error => console.error(\"Erreur d'ajout de réaction:\", error));
}

// Fonction pour supprimer un message
function deleteMessage(messageId) {
    fetch(\"";
        // line 809
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_message", ["id" => "MESSAGE_ID"]);
        yield "\".replace('MESSAGE_ID', messageId), {
        method: \"POST\"
    })
    .then(response => response.json())
    .then(data => {
        fetchMessages(); // Recharger les messages après suppression
    })
    .catch(error => console.error(\"Erreur de suppression:\", error));
}


// Lancer la fonction au chargement de la page
fetchMessages();



</script>






\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\"></script>
\t

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
        return array (  1142 => 809,  1125 => 795,  1060 => 733,  1016 => 694,  1009 => 690,  996 => 680,  972 => 659,  914 => 604,  890 => 583,  811 => 506,  807 => 504,  799 => 499,  796 => 498,  787 => 496,  783 => 495,  772 => 487,  768 => 486,  764 => 485,  758 => 481,  751 => 479,  749 => 480,  743 => 476,  732 => 468,  727 => 466,  721 => 463,  718 => 462,  710 => 457,  702 => 452,  697 => 450,  691 => 447,  688 => 446,  686 => 445,  674 => 436,  665 => 430,  656 => 424,  647 => 418,  638 => 412,  629 => 406,  624 => 404,  616 => 399,  608 => 393,  602 => 391,  600 => 390,  596 => 389,  592 => 388,  584 => 387,  581 => 386,  578 => 385,  572 => 383,  566 => 381,  563 => 380,  561 => 379,  552 => 378,  547 => 377,  543 => 375,  541 => 374,  537 => 372,  529 => 371,  524 => 370,  514 => 369,  503 => 361,  498 => 358,  491 => 356,  489 => 357,  485 => 355,  477 => 350,  469 => 345,  465 => 344,  461 => 342,  455 => 340,  449 => 338,  447 => 337,  442 => 335,  439 => 334,  437 => 333,  430 => 329,  422 => 324,  418 => 323,  414 => 321,  408 => 319,  402 => 317,  400 => 316,  395 => 314,  392 => 313,  389 => 312,  384 => 311,  76 => 5,  63 => 4,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}


\t<style>
\t\t.chat-box {
\t\t\tmax-height: 450px;
\t\t\toverflow-y: auto;
\t\t\tbackground: #f9f9f9;
\t\t\tborder-radius: 15px;
\t\t\tpadding: 20px;
\t\t\tbox-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
\t\t\tdisplay: flex;
\t\t\tflex-direction: column;
\t\t}

\t\t/* Liste des messages */
\t\t.chat-messages {
\t\t\tlist-style: none;
\t\t\tpadding: 0;
\t\t\tmargin: 0;
\t\t\tdisplay: flex;
\t\t\tflex-direction: column;
\t\t\toverflow-y: auto;
\t\t\tflex-grow: 1;

\t\t}

\t\t/* Message standard */
\t\t.message {
\t\t\tmax-width: 70%;
\t\t\tpadding: 12px 16px;
\t\t\tborder-radius: 18px;
\t\t\tfont-size: 15px;
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tword-wrap: break-word;
\t\t\twhite-space: pre-wrap;
\t\t\tmargin-bottom: 12px;
\t\t\ttransition: all 0.3s ease;
\t\t}

\t\t/* Message envoyé */
\t\t.message.sent {
\t\t\tbackground: #007bff;
\t\t\tcolor: white;
\t\t\talign-self: flex-end;
\t\t\tborder-bottom-right-radius: 0;
\t\t\tbox-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
\t\t}

\t\t/* Message reçu */
\t\t.message.received {
\t\t\tbackground: #e0e0e0;
\t\t\talign-self: flex-start;
\t\t\tborder-bottom-left-radius: 0;
\t\t\tbox-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
\t\t}

\t\t/* Formulaire d'entrée */
\t\t.chat-input {
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tpadding: 15px;
\t\t\tbackground: #ffffff;
\t\t\tborder-top: 2px solid #e1e1e1;
\t\t\tborder-radius: 10px;
\t\t}

\t\t/* Zone de texte */
\t\t.chat-input textarea {
\t\t\tflex: 1;
\t\t\tborder-radius: 10px;
\t\t\tpadding: 12px 15px;
\t\t\tfont-size: 14px;
\t\t\tresize: none;
\t\t\tborder: 1px solid #ccc;
\t\t\theight: 50px;
\t\t\tbox-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
\t\t\ttransition: all 0.3s ease;
\t\t}

\t\t/* Effet de focus sur la zone de texte */
\t\t.chat-input textarea:focus {
\t\t\tborder-color: #007bff;
\t\t\toutline: none;
\t\t}

\t\t/* Bouton envoyer */
\t\t.chat-input button {
\t\t\tpadding: 10px 20px;
\t\t\tborder-radius: 15px;
\t\t\tfont-size: 14px;
\t\t\tbackground: #007bff;
\t\t\tcolor: white;
\t\t\tborder: none;
\t\t\tmargin-left: 10px;
\t\t\tcursor: pointer;
\t\t\ttransition: all 0.3s ease;
\t\t}

\t\t/* Effet de hover pour le bouton envoyer */
\t\t.chat-input button:hover {
\t\t\tbackground: #0056b3;
\t\t}

\t\t/* Timestamps des messages */
\t\t.timestamp {
\t\t\tfont-size: 12px;
\t\t\tcolor: rgba(0, 0, 0, 0.6);
\t\t\tmargin-left: 10px;
\t\t}

\t\t/* Style de la liste des discussions */
\t\t.scrollable-list {
\t\t\tmax-height: 450px;
\t\t\toverflow-y: auto;
\t\t\tmargin-bottom: 20px;
\t\t}

\t\t/* Style de la discussion dans la liste */
\t\t.list-unstyled li {
\t\t\tpadding: 12px;
\t\t\tborder-bottom: 1px solid #ddd;
\t\t\tbackground-color: #f9f9f9;
\t\t\tborder-radius: 10px;
\t\t\tmargin-bottom: 10px;
\t\t\ttransition: background-color 0.3s ease;
\t\t\tdisplay: flex;
\t\t\tjustify-content: space-between;
\t\t\talign-items: center;
\t\t}

\t\t/* Effet au survol des discussions */
\t\t.list-unstyled li:hover {
\t\t\tbackground-color: #f0f0f0;
\t\t}

\t\t/* Avatar de l'utilisateur dans la discussion */
\t\t.rounded-circle {
\t\t\tbox-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
\t\t}

\t\t/* Formulaire de suppression de la discussion */
\t\t.btn-danger {
\t\t\tbackground-color: #e74c3c;
\t\t\tborder-color: #e74c3c;
\t\t\tborder-radius: 12px;
\t\t\ttransition: all 0.3s ease;
\t\t}

\t\t/* Effet hover pour le bouton supprimer */
\t\t.btn-danger:hover {
\t\t\tbackground-color: #c0392b;
\t\t\tborder-color: #c0392b;
\t\t\ttext-align: center;
\t\t}

\t\t/* Formatage des boutons de suppression de message */
\t\t.dropdown-menu li button {
\t\t\tbackground: transparent;
\t\t\tborder: none;
\t\t\tfont-size: 14px;
\t\t\tcolor: #c0392b;
\t\t}

\t\t/* Ajouter un style au bouton modifier */
\t\t.dropdown-item {
\t\t\tbackground-color: #f1f1f1;
\t\t}

\t\t/* Ajouter un fond pour la card contenant les discussions */
\t\t.card-body {
\t\t\tpadding: 20px;
\t\t\tbackground: #f9f9f9;
\t\t\tborder-radius: 10px;
\t\t}

\t\t/* Réduire la taille du dropdown */
\t\t.dropdown-menu {
\t\t\tmin-width: 150px;
\t\t\tfont-size: 14px;
\t\t\tpadding: 8px 0;
\t\t\tborder-radius: 8px;
\t\t\tbox-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
\t\t\tbackground-color: #fff;
\t\t\tborder: 1px solid #ddd;
\t\t\topacity: 0;
\t\t\tvisibility: hidden;
\t\t\ttransform: translateY(-10px);
\t\t\ttransition: all 0.3s ease;
\t\t}

\t\t/* Effet de survol sur le menu dropdown */
\t\t.dropdown-menu.show {
\t\t\topacity: 1;
\t\t\tvisibility: visible;
\t\t\ttransform: translateY(0);
\t\t}

\t\t/* Style des éléments du dropdown */
\t\t.dropdown-item {
\t\t\tpadding: 10px 15px;
\t\t\tcolor: #333;
\t\t\tbackground-color: transparent;
\t\t\tborder: none;
\t\t\tfont-size: 14px;
\t\t\tborder-radius: 6px;
\t\t\ttransition: background-color 0.3s ease, color 0.3s ease;
\t\t}

\t\t/* Effet de survol des éléments du dropdown */
\t\t.dropdown-item:hover {
\t\t\tbackground-color: #f1f1f1;
\t\t\tcolor: #007bff;
\t\t}

\t\t/* Bouton du dropdown */
\t\t.dropdown-toggle {
\t\t\tbackground-color: transparent;
\t\t\tborder: none;
\t\t\tpadding: 6px 12px;
\t\t\tfont-size: 14px;
\t\t\tcolor: #555;
\t\t\tborder-radius: 6px;
\t\t\ttransition: background-color 0.3s ease, color 0.3s ease;
\t\t}

\t\t/* Effet de survol sur le bouton dropdown */
\t\t.dropdown-toggle:hover {
\t\t\tbackground-color: #f0f0f0;
\t\t\tcolor: #007bff;
\t\t}

\t\t/* Ajout d'une icône sur le bouton dropdown */
\t\t.dropdown-toggle::after {
\t\t\tcontent: ' ▼';
\t\t\tfont-size: 10px;
\t\t\tmargin-left: 5px;
\t\t}

\t\t/* Modifier le bouton supprimer */
\t\t.dropdown-item.text-danger {
\t\t\tcolor: #e74c3c;
\t\t}

\t\t/* Effet de survol du bouton supprimer */
\t\t.dropdown-item.text-danger:hover {
\t\t\tbackground-color: #e74c3c;
\t\t\tcolor: white;
\t\t}
\t\t/* Style de la liste des emojis dans le dropdown */
\t\t.emoji-list {
\t\t\tdisplay: flex;
\t\t\tflex-direction: column;
\t\t\tpadding: 0;
\t\t\tmargin: 0;
\t\t\tlist-style: none;
\t\t}

\t\t/* Style des éléments de la liste des emojis */
\t\t.emoji-list li {
\t\t\tdisplay: block; /* Assure l'affichage vertical */
\t\t\tmargin-bottom: 10px; /* Espacement entre les emojis */
\t\t}

\t\t/* Style pour les boutons emoji dans le dropdown */
\t\t.emoji-list .emoji {
\t\t\tfont-size: 20px;
\t\t\tpadding: 8px 15px;
\t\t\tbackground-color: transparent;
\t\t\tborder: none;
\t\t\tcolor: #555;
\t\t\twidth: 100%;
\t\t\ttext-align: left;
\t\t\ttransition: background-color 0.3s ease, color 0.3s ease;
\t\t\tborder-radius: 10px;
\t\t}

\t\t/* Effet de survol pour les boutons emoji */
\t\t.emoji-list .emoji:hover {
\t\t\tbackground-color: #f0f0f0;
\t\t\tcolor: #4c89f5;
\t\t}

\t\t/*# sourceMappingURL=style.css.map */
\t</style>
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
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"card-body\">
\t\t\t\t\t\t\t\t\t<!-- Champ de recherche -->
\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"searchDiscussion\" class=\"form-control\" placeholder=\"Rechercher une discussion...\">
\t\t\t\t\t\t\t\t\t\t<button id=\"searchButton\" class=\"btn btn-primary\">Rechercher</button>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- Liste des discussions -->
\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled mb-0 scrollable-list\" id=\"discussionList\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if app.user.image %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('uploads/images/' ~ discussion.receiver.image) }}\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('frontOffice/images/user.jpg') }}\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1\">
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

\t\t\t\t\t\t\t\t\t<!-- Bouton nouvelle discussion -->
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('create_discussion') }}\" class=\"btn btn-success mt-3\">Nouvelle discussion</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<!-- Chatbox principale -->
\t\t\t\t\t\t<div class=\"col-md-6 col-lg-7 col-xl-8\">
\t\t\t\t\t\t\t<h5 class=\"font-weight-bold mb-3 text-center text-lg-start\">{% if discussion is defined and discussion %} Message avec  {% if discussion.receiver.id == app.user.id %} {{ discussion.sender.nom }}\t{{ discussion.sender.prenom }} 
\t\t\t\t\t\t\t                                                                         {% elseif discussion.sender.id == app.user.id %}{{ discussion.receiver.nom }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ discussion.receiver.prenom }} {% else %} Vos Messages  {% endif %} {% endif %}
 </h5>

\t\t\t\t\t\t\t{% if discussion is defined and discussion %}
\t\t\t\t\t\t\t\t<div class=\"chat-box p-3\">
\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled chat-messages\" id=\"chat-messages\">
\t\t\t\t\t\t\t\t\t\t{% for message in messages %}
\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex {% if message.sender.id == app.user.id %}justify-content-end{% else %}justify-content-start{% endif %} mb-3 align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t{% if message.sender.id != app.user.id %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if app.user.image %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('uploads/images/' ~ message.sender.image) }}\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('frontOffice/images/user.jpg') }}\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"message {% if message.sender.id == app.user.id %}sent{% else %}received{% endif %}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">{{ message.content }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"timestamp\">{{ message.createdAt|date('d/m/Y H:i') }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if message.reaction %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"selected-reaction\">{{ message.reaction }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"reaction mt-1\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Bouton pour ouvrir la liste d'emojis -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light btn-sm reaction-button\" type=\"button\" id=\"reactionMenuButton{{ message.id }}\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t😊
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Liste d'emojis -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu emoji-list\" aria-labelledby=\"reactionMenuButton{{ message.id }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"{{ path('message_react', {id: message.id}) }}\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"reaction\" value=\"❤️\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"dropdown-item emoji\">❤️</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"{{ path('message_react', {id: message.id}) }}\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"reaction\" value=\"😂\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"dropdown-item emoji\">😂</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"{{ path('message_react', {id: message.id}) }}\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"reaction\" value=\"😮\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"dropdown-item emoji\">😮</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"{{ path('message_react', {id: message.id}) }}\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"reaction\" value=\"😢\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"dropdown-item emoji\">😢</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"{{ path('message_react', {id: message.id}) }}\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"reaction\" value=\"👍\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"dropdown-item emoji\">👍</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"{{ path('message_react', {id: message.id}) }}\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"reaction\" value=\"👎\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"dropdown-item emoji\">👎</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t{% if message.sender.id == app.user.id %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light btn-sm dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton{{ message.id }}\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t...
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton{{ message.id }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"{{ path('delete_message', {id: message.id}) }}\" method=\"POST\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer ce message ?');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"dropdown-item text-danger\">🗑 Supprimer</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('edit_message', {id: message.id}) }}\" class=\"dropdown-item\">✏ Modifier</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-light btn-sm dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton{{ message.id }}\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t...
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton{{ message.id }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"{{ path('delete_message', {id: message.id}) }}\" method=\"POST\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer ce message ?');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"dropdown-item text-danger\">🗑 Supprimer</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"text-muted text-center\">Aucun message dans cette discussion.</li>
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- Formulaire d'envoi -->
\t\t\t\t\t\t\t\t\t<form action=\"{{ path('send_message') }}\" method=\"POST\" class=\"chat-input p-3\" id=\"chat-form\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"discussion_id\" value=\"{{ discussion.id }}\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"sender_id\" value=\"{{ app.user.id }}\">
\t\t\t\t\t\t\t\t\t\t<textarea name=\"content\" id=\"content\" class=\"form-control\" placeholder=\"Votre message...\"></textarea>
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
\t\t\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t<!-- Affichage des erreurs -->
\t\t\t\t\t\t\t\t\t{% for message in app.flashes('error') %}
\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger mt-1\" style=\"font-size: 14px;\">{{ message }}</p>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t<!-- Bouton supprimer la discussion -->
\t\t\t\t\t\t\t\t\t<form action=\"{{ path('delete_discussion', {id: discussion.id}) }}\" method=\"POST\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cette discussion ?');\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">Supprimer cette discussion</button>
\t\t\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<p class=\"text-center\">Sélectionnez une discussion pour commencer à discuter.</p>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<script>

\t\tdocument.addEventListener(\"DOMContentLoaded\", function () { // ////////////////////////////////// SCROLL ///////////////////////////////////////////

function scrollToLastMessage() {
var chatMessages = document.getElementById(\"chat-messages\");
if (chatMessages) {
let lastMessage = chatMessages.lastElementChild;
if (lastMessage) {
lastMessage.scrollIntoView({block: \"end\"}); // Scroll direct vers le dernier message
}
}
}

function scrollToBottomPage() {
window.scrollTo(0, document.body.scrollHeight); // Scroll pour toute la page
}

// Scroll automatique à l'ouverture
scrollToLastMessage();
scrollToBottomPage();

// Scroll après l'envoi d'un message
document.getElementById(\"chat-form\") ?. addEventListener(\"submit\", function () {
setTimeout(() => {
scrollToLastMessage();
scrollToBottomPage();
}, 100);
});

// ////////////////////////////////////////// DROPDOWN /////////////////////////////////////////////



// ////////////////////////////////////////// EMOJIS /////////////////////////////////////////////

// Gestion de l'ouverture des réactions emoji
document.querySelectorAll('.reaction-button').forEach(function (button) {
button.addEventListener('click', function (event) {
event.stopPropagation();
let menu = this.nextElementSibling;

closeAllDropdowns(); // Ferme tous les autres menus avant d'afficher celui-ci
menu.classList.toggle('show');
});
});
});
document.addEventListener('DOMContentLoaded', function () {
const searchButton = document.getElementById('searchButton');
const searchInput = document.getElementById('searchDiscussion');
const discussionList = document.getElementById('discussionList');

searchButton.addEventListener('click', function () {
const query = searchInput.value;

if (query.length > 0) {
fetch (`/rechercher-discussion?query=\${query}`, {method: 'GET'}).then(response => response.json()).then(data => { // Vider la liste des discussions existantes
discussionList.innerHTML = '';

if (data.length === 0) {
discussionList.innerHTML = '<li class=\"list-group-item text-muted\">Aucune discussion trouvée.</li>';
} else { // Remplir la liste avec les discussions trouvées
data.forEach(discussion => {
const listItem = document.createElement('li');
listItem.classList.add('p-2', 'border-bottom', 'bg-body-tertiary', 'd-flex', 'justify-content-between');

let discussionHTML = '';

// Ajouter les conditions comme dans le Twig

if (discussion.receiver.id == {{ app.user.id }}) {
discussionHTML = `
                                <a href=\"/discussion/\${
discussion.id
}\" class=\"d-flex justify-content-between text-decoration-none w-100\">
                                    <div class=\"d-flex flex-row w-100\">
                                        <img src=\"/uploads/images/\${
discussion.sender.image
}\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"50\">
                                        <div class=\"pt-1\">
                                            <span style=\"font-size: 1.2rem;\">
                                                \${
discussion.sender.nom
} \${
discussion.sender.prenom
}
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            `;
} else if (discussion.sender.id == {{ app.user.id }}) {
discussionHTML = `
                                <a href=\"/discussion/\${
discussion.id
}\" class=\"d-flex justify-content-between text-decoration-none w-100\">
                                    <div class=\"d-flex flex-row w-100\">
                                        <img src=\"/uploads/images/\${
discussion.receiver.image
}\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"50\">
                                        <div class=\"pt-1\">
                                            <span style=\"font-size: 1.2rem;\">
                                                \${
discussion.receiver.nom
} \${
discussion.receiver.prenom
}
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            `;
}

listItem.innerHTML = discussionHTML;

// Ajouter le bouton de suppression de discussion
listItem.innerHTML += `
                            <form action=\"/discussion/delete/\${
discussion.id
}\" method=\"POST\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cette discussion ?');\">
                                <button type=\"submit\" class=\"btn btn-danger btn-sm delete-btn\">🗑</button>
                            </form>
                        `;

discussionList.appendChild(listItem);
});
}
});
}
});
});
const dropdownElements = document.querySelectorAll('.dropdown-toggle');
dropdownElements.forEach(dropdown => {
    new bootstrap.Dropdown(dropdown); // Initialiser Bootstrap dropdown pour chaque bouton
});
\t</script>
\t
<script>
 document.getElementById(\"chat-form\").addEventListener(\"submit\", function(e) {
    e.preventDefault();

    let formData = new FormData(this);
    let content = document.getElementById(\"content\").value.trim();
    if (content === \"\") return;

    fetch(\"{{ path('send_message') }}\", {
        method: \"POST\",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.error) {
            alert(data.error);
            return;
        }

        document.getElementById(\"content\").value = \"\";
        // Laisse fetchMessages() gérer l'affichage
    })
    .catch(error => console.error(\"Erreur:\", error));
});
</script>
<script>
let lastMessageId = 0; // ID du dernier message chargé

function fetchMessages() {
    fetch(\"{{ path('fetch_messages', {discussion_id: discussion.id}) }}\")
        .then(response => response.json())
        .then(data => {
            const chatMessages = document.getElementById(\"chat-messages\");
            let newMessages = \"\";

            data.forEach(message => {
                if (message.id > lastMessageId) { // Si c'est un nouveau message
                    lastMessageId = message.id;

                    const isSender = message.sender_id === {{ app.user.id }};
                    newMessages += `
                        <li class=\"d-flex \${isSender ? \"justify-content-end\" : \"justify-content-start\"} mb-3 align-items-center\">
                            \${!isSender ? `
                                <img src=\"\${message.sender_image ? \"{{ asset('uploads/images/') }}\" + message.sender_image : \"{{ asset('frontOffice/images/user.jpg') }}\"}\" 
                                     alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"50\">
                            ` : \"\"}
                            
                            <div class=\"message \${isSender ? \"sent\" : \"received\"}\">
                                <p class=\"mb-0\">\${message.content}</p>
                                <span class=\"timestamp\">\${message.createdAt}</span>
                                \${message.reaction ? `<span class=\"selected-reaction\">\${message.reaction}</span>` : \"\"}
                            </div>

                            <!-- Dropdown des réactions (Affiché uniquement en cliquant sur un bouton) -->
                            <div class=\"reaction mt-1\">
                                <div class=\"dropdown\">
                                    <button class=\"btn btn-light btn-sm reaction-button\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                        😊
                                    </button>
                                    <ul class=\"dropdown-menu emoji-list\">
                                        \${[\"❤️\", \"😂\", \"😮\", \"😢\", \"👍\", \"👎\"].map(emoji => `
                                            <li>
                                                <button class=\"dropdown-item emoji react-button\" data-message-id=\"\${message.id}\" data-emoji=\"\${emoji}\">
                                                    \${emoji}
                                                </button>
                                            </li>
                                        `).join(\"\")}
                                    </ul>
                                </div>
                            </div>

                            <!-- Options du message (modifier/supprimer) -->
                            <div class=\"dropdown\">
                                <button class=\"btn btn-light btn-sm dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                    ...
                                </button>
                                <ul class=\"dropdown-menu\">
                                    \${isSender ? `
                                        <li>
                                            <button class=\"dropdown-item text-danger delete-button\" data-message-id=\"\${message.id}\">🗑 Supprimer</button>
                                        </li>
                                        <li>
                                            <a href=\"{{ path('edit_message', {id: 'MESSAGE_ID'}) }}\".replace('MESSAGE_ID', message.id)\" class=\"dropdown-item\">✏ Modifier</a>
                                        </li>
                                    ` : `
                                        <li>
                                            <button class=\"dropdown-item text-danger delete-button\" data-message-id=\"\${message.id}\">🗑 Supprimer</button>
                                        </li>
                                    `}
                                </ul>
                            </div>
                        </li>
                    `;
                }
            });

   if (newMessages !== \"\") {
    chatMessages.innerHTML += newMessages;
    chatMessages.scrollTop = chatMessages.scrollHeight; // Scroll automatique vers le bas
    attachEventListeners();

    // Vérifier si les dropdowns existent
    console.log(\"Dropdowns détectés :\", document.querySelectorAll('.dropdown-toggle'));

    // Initialisation manuelle des dropdowns
    document.querySelectorAll('.dropdown-toggle').forEach(dropdown => {
        let dropdownInstance = new bootstrap.Dropdown(dropdown);
        dropdown.addEventListener(\"click\", function () {
            dropdownInstance.show();
        });
    });
}


            setTimeout(fetchMessages, 1000); // Rafraîchissement toutes les 1 seconde
        })
\t\t

\t\t
        .catch(error => console.error(\"Erreur de chargement des messages:\", error));
}

// Attacher les événements pour les réactions et la suppression
function attachEventListeners() {
    document.querySelectorAll(\".react-button\").forEach(button => {
        button.addEventListener(\"click\", function() {
            const messageId = this.getAttribute(\"data-message-id\");
            const emoji = this.getAttribute(\"data-emoji\");
            reactToMessage(messageId, emoji);
        });
    });

    document.querySelectorAll(\".delete-button\").forEach(button => {
        button.addEventListener(\"click\", function() {
            const messageId = this.getAttribute(\"data-message-id\");
            if (confirm(\"Voulez-vous vraiment supprimer ce message ?\")) {
                deleteMessage(messageId);
            }
        });
    });
}

// Fonction pour ajouter une réaction à un message
function reactToMessage(messageId, emoji) {
    fetch(\"{{ path('message_react', {id: 'MESSAGE_ID'}) }}\".replace('MESSAGE_ID', messageId), {
        method: \"POST\",
        headers: { \"Content-Type\": \"application/x-www-form-urlencoded\" },
        body: `reaction=\${emoji}`
    })
    .then(response => response.json())
    .then(data => {
        fetchMessages(); // Recharger les messages après ajout de réaction
    })
    .catch(error => console.error(\"Erreur d'ajout de réaction:\", error));
}

// Fonction pour supprimer un message
function deleteMessage(messageId) {
    fetch(\"{{ path('delete_message', {id: 'MESSAGE_ID'}) }}\".replace('MESSAGE_ID', messageId), {
        method: \"POST\"
    })
    .then(response => response.json())
    .then(data => {
        fetchMessages(); // Recharger les messages après suppression
    })
    .catch(error => console.error(\"Erreur de suppression:\", error));
}


// Lancer la fonction au chargement de la page
fetchMessages();



</script>






\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\"></script>
\t

{% endblock %}
", "message/conversation.html.twig", "D:\\esprit\\PI\\final\\pi2025\\templates\\message\\conversation.html.twig");
    }
}
