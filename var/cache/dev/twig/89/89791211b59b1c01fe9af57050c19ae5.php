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

/* baseAdmin.html.twig */
class __TwigTemplate_a81366df3d907026ab0322b1e7cd6a6d extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseAdmin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseAdmin.html.twig"));

        // line 190
        yield "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t";
        // line 195
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 197
        yield "\t\t</title>
\t\t<link
\t\thref=\"";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/img/formini.jpeg"), "html", null, true);
        yield "\" rel=\"icon\">
\t\t<!-- Favicons -->
\t\t<link href=\"";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/img/formini.jpeg"), "html", null, true);
        yield "\" rel=\"icon\">
\t\t<link
\t\thref=\"";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/img/formini.jpeg"), "html", null, true);
        yield "\" rel=\"apple-touch-icon\">

\t\t<!-- Google Fonts -->
\t\t<link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

\t\t<!-- Vendor CSS Files -->
\t\t<link href=\"";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/vendor/quill/quill.snow.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/vendor/quill/quill.bubble.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/vendor/remixicon/remixicon.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
\t\t<link
\t\thref=\"";
        // line 218
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/vendor/simple-datatables/style.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

\t\t<!-- Template Main CSS File -->
\t\t<link href=\"";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/css/style.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"> ";
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 222
        yield "\t\t</head>
\t\t<body>
\t\t\t<header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

\t\t\t\t<div class=\"d-flex align-items-center justify-content-between\">
\t\t\t\t\t<a href=\"index.html\" class=\"logo d-flex align-items-center\">
\t\t\t\t\t\t<img src=\"";
        // line 228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/img/formini.jpeg"), "html", null, true);
        yield "\" alt=\"\" style=\"max-height: 60px;\">
\t\t\t\t\t\t<span class=\"d-none d-lg-block\">FORMINI</span>
\t\t\t\t\t</a>
\t\t\t\t\t<i class=\"bi bi-list toggle-sidebar-btn\"></i>
\t\t\t\t</div>
\t\t\t\t<!-- End Logo -->

\t\t\t\t<div class=\"search-bar\">
\t\t\t\t\t<form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
\t\t\t\t\t\t<input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
\t\t\t\t\t\t<button type=\"submit\" title=\"Search\">
\t\t\t\t\t\t\t<i class=\"bi bi-search\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<!-- End Search Bar -->
\t\t\t\t<!-- End Search Bar -->
\t\t\t\t<!-- End Search Bar -->
\t\t\t\t<!-- End Search Bar -->

\t\t\t\t\t<nav class=\"header-nav ms-auto\"> <ul class=\"d-flex align-items-center\">

\t\t\t\t\t\t<li class=\"nav-item d-block d-lg-none\">
\t\t\t\t\t\t\t<a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-search\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- End Search Icon-->
\t\t\t\t\t\t<!-- End Search Icon-->
\t\t\t\t\t\t<!-- End Search Icon-->
\t\t\t\t\t\t<!-- End Search Icon-->

\t\t\t\t\t\t\t<li class=\"nav-item dropdown\"> <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-bell\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge bg-primary badge-number\">4</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<!-- End Notification Icon -->

\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\">
\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\tYou have 4 new notifications
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"notification-item\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-exclamation-circle text-warning\"></i>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h4>Lorem Ipsum</h4>
\t\t\t\t\t\t\t\t\t\t<p>Quae dolorem earum veritatis oditseno</p>
\t\t\t\t\t\t\t\t\t\t<p>30 min. ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"notification-item\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-x-circle text-danger\"></i>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h4>Atque rerum nesciunt</h4>
\t\t\t\t\t\t\t\t\t\t<p>Quae dolorem earum veritatis oditseno</p>
\t\t\t\t\t\t\t\t\t\t<p>1 hr. ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"notification-item\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-check-circle text-success\"></i>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h4>Sit rerum fuga</h4>
\t\t\t\t\t\t\t\t\t\t<p>Quae dolorem earum veritatis oditseno</p>
\t\t\t\t\t\t\t\t\t\t<p>2 hrs. ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"notification-item\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-info-circle text-primary\"></i>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h4>Dicta reprehenderit</h4>
\t\t\t\t\t\t\t\t\t\t<p>Quae dolorem earum veritatis oditseno</p>
\t\t\t\t\t\t\t\t\t\t<p>4 hrs. ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"dropdown-footer\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Show all notifications</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<!-- End Notification Dropdown Items -->

\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- End Notification Nav -->

\t\t\t\t\t\t<li class=\"nav-item dropdown\">

\t\t\t\t\t\t\t<a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-chat-left-text\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge bg-success badge-number\">3</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<!-- End Messages Icon -->

\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow messages\">
\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\tYou have 3 new messages
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"message-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 359
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/img/messages-1.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"rounded-circle\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<h4>Maria Hudson</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
\t\t\t\t\t\t\t\t\t\t\t<p>4 hrs. ago</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"message-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 373
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/img/messages-2.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"rounded-circle\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<h4>Anna Nelson</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
\t\t\t\t\t\t\t\t\t\t\t<p>6 hrs. ago</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"message-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 387
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/img/messages-3.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"rounded-circle\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<h4>David Muldon</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
\t\t\t\t\t\t\t\t\t\t\t<p>8 hrs. ago</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"dropdown-footer\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Show all messages</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<!-- End Messages Dropdown Items -->

\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- End Messages Nav -->

\t\t\t\t\t\t<li class=\"nav-item dropdown pe-3\">
\t\t\t\t\t\t\t<a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 411
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/img/profile-img.jpg"), "html", null, true);
        yield "\" alt=\"Profile\" class=\"rounded-circle\">
\t\t\t\t\t\t\t\t<span class=\"d-none d-md-block dropdown-toggle ps-2\">
\t\t\t\t\t\t\t\t\t";
        // line 413
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 413, $this->source); })()), "user", [], "any", false, false, false, 413)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 413, $this->source); })()), "user", [], "any", false, false, false, 413), "nom", [], "any", false, false, false, 413), "html", null, true)) : ("Utilisateur"));
        yield "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<!-- End Profile Image Icon -->

\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
\t\t\t\t\t\t\t\t";
        // line 419
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 419, $this->source); })()), "user", [], "any", false, false, false, 419)) {
            // line 420
            yield "\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\t\t<h6>";
            // line 421
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 421, $this->source); })()), "user", [], "any", false, false, false, 421), "nom", [], "any", false, false, false, 421), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t";
            // line 422
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 422, $this->source); })()), "user", [], "any", false, false, false, 422), "prenom", [], "any", false, false, false, 422), "html", null, true);
            yield "</h6>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 424
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 424, $this->source); })()), "user", [], "any", false, false, false, 424), "roles", [], "any", false, false, false, 424))) {
                // line 425
                yield "\t\t\t\t\t\t\t\t\t\t\t\tAdministrateur
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (CoreExtension::inFilter("ROLE_INSTRUCTEUR", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 426
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 426, $this->source); })()), "user", [], "any", false, false, false, 426), "roles", [], "any", false, false, false, 426))) {
                // line 427
                yield "\t\t\t\t\t\t\t\t\t\t\t\tInstructeur
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (CoreExtension::inFilter("ROLE_APPRENANT", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 428
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 428, $this->source); })()), "user", [], "any", false, false, false, 428), "roles", [], "any", false, false, false, 428))) {
                // line 429
                yield "\t\t\t\t\t\t\t\t\t\t\t\tApprenant
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 431
            yield "\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" >
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-person\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Mon Profil</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" >
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-gear\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Paramètres</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"";
            // line 458
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-box-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Déconnexion</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        } else {
            // line 464
            yield "\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\t\t<h6>Utilisateur invité</h6>
\t\t\t\t\t\t\t\t\t\t<span>Veuillez vous connecter</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"";
            // line 472
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-box-arrow-in-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Se connecter</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        // line 478
        yield "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<!-- End Profile Dropdown Items -->
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- End Profile Nav -->

\t\t\t\t\t\t<!-- End Profile Nav -->

\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t\t<!-- End Icons Navigation -->

\t\t\t</header>
\t\t\t<!-- End Header -->
\t\t\t<aside id=\"sidebar\" class=\"sidebar\">

\t\t\t\t<ul class=\"sidebar-nav\" id=\"sidebar-nav\">

\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link \" href=\"index.html\">
\t\t\t\t\t\t\t<i class=\"bi bi-grid\"></i>
\t\t\t\t\t\t\t<span>Dashboard</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<!-- End Dashboard Nav -->

\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link collapsed\" data-bs-target=\"#components-nav\" data-bs-toggle=\"collapse\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"bi bi-menu-button-wide\"></i>
\t\t\t\t\t\t\t<span>Formations</span>
\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down ms-auto\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul id=\"components-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 511
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation_new");
        yield "\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t\t\t\t\t\t\t<span>Ajouter une formation</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 518
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation_index");
        yield "\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t\t\t\t\t\t\t<span>Voir les formations</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link collapsed\" data-bs-target=\"#components-nav-utilisaterus\" data-bs-toggle=\"collapse\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"bi bi-menu-button-wide\"></i>
\t\t\t\t\t\t\t<span>Utilisaterus</span>
\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down ms-auto\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul id=\"components-nav-utilisaterus\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 535
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_list");
        yield "\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t\t\t\t\t\t\t<span>Voir les utilisateurs</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link collapsed\" data-bs-target=\"#components-nav\" data-bs-toggle=\"collapse\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"bi bi-menu-button-wide\"></i>
\t\t\t\t\t\t\t<span>Evenements</span>
\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down ms-auto\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul id=\"components-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 550
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_new");
        yield "\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t\t\t\t\t\t\t<span>Ajouter un Evenement</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 556
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_index");
        yield "\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t\t\t\t\t\t\t<span>Voir les evenements</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link collapsed\" data-bs-target=\"#components-nav\" data-bs-toggle=\"collapse\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"bi bi-menu-button-wide\"></i>
\t\t\t\t\t\t\t<span>Notifications</span>
\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down ms-auto\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul id=\"components-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 572
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notification_index");
        yield "\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t\t\t\t\t\t\t<span>Voir les notifications</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link collapsed\" data-bs-target=\"#components-nav\" data-bs-toggle=\"collapse\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"bi bi-menu-button-wide\"></i>
\t\t\t\t\t\t\t<span>Categories</span>
\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down ms-auto\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul id=\"components-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 589
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_new");
        yield "\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t\t\t\t\t\t\t<span>Ajouter une categorie</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 595
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_index");
        yield "\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t\t\t\t\t\t\t<span>Voir les categories</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link collapsed\" href=\"";
        // line 605
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_formation_list");
        yield "\">
\t\t\t\t\t\t\t<i class=\"bi bi-bar-chart\"></i>
\t\t\t\t\t\t\t<span>Feedback</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>>
\t\t\t\t\t<!-- End Formations Nav -->

\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link \" data-bs-target=\"#tables-nav\" data-bs-toggle=\"collapse\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"bi bi-layout-text-window-reverse\"></i>
\t\t\t\t\t\t\t<span>Inscription de cours</span>
\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down ms-auto\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul id=\"tables-nav\" class=\"nav-content collapse show\" data-bs-parent=\"#sidebar-nav\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 620
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscription_cours_index");
        yield "\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t\t\t\t\t\t\t<span>liste d'inscription</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<!-- End Tables Nav -->
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link \" data-bs-target=\"#forms-nav\" data-bs-toggle=\"collapse\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"bi bi-journal-text\"></i>
\t\t\t\t\t\t\t<span>Promotions</span>
\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down ms-auto\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul id=\"forms-nav\" class=\"nav-content collapse show\" data-bs-parent=\"#sidebar-nav\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 637
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_promotion_create");
        yield "\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t\t\t\t\t\t\t<span>Ajouter Promotion</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 644
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_promotion_index");
        yield "\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t\t\t\t\t\t\t<span>Liste promotion</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<!-- End Forms Nav -->

\t\t\t\t\t<li class=\"nav-heading\">Pages</li>

\t\t\t\t\t<!-- End Profile Page Nav -->


\t\t\t\t\t<!-- End Blank Page Nav -->

\t\t\t\t</ul>

\t\t\t</aside>
\t\t\t<!-- End Sidebar-->


\t\t\t<li class=\"nav-item dropdown\">

\t\t\t\t<a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t<i class=\"bi bi-chat-left-text\"></i>
\t\t\t\t\t<span class=\"badge bg-success badge-number\">3</span>
\t\t\t\t</a>
\t\t\t\t<!-- End Messages Icon -->

\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow messages\">
\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\tYou have 3 new messages
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"message-item\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<img src=\"";
        // line 688
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/img/messages-1.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"rounded-circle\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<h4>Maria Hudson</h4>
\t\t\t\t\t\t\t\t<p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
\t\t\t\t\t\t\t\t<p>4 hrs. ago</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"message-item\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<img src=\"";
        // line 702
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/img/messages-2.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"rounded-circle\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<h4>Anna Nelson</h4>
\t\t\t\t\t\t\t\t<p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
\t\t\t\t\t\t\t\t<p>6 hrs. ago</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"message-item\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<img src=\"";
        // line 716
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/img/messages-3.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"rounded-circle\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<h4>David Muldon</h4>
\t\t\t\t\t\t\t\t<p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
\t\t\t\t\t\t\t\t<p>8 hrs. ago</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"dropdown-footer\">
\t\t\t\t\t\t<a href=\"#\">Show all messages</a>
\t\t\t\t\t</li>

\t\t\t\t</ul>
\t\t\t\t<!-- End Messages Dropdown Items -->

\t\t\t</li>
\t\t\t<!-- End Messages Nav -->

\t\t\t<main id=\"main\" class=\"main\"> ";
        // line 738
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 739
        yield "\t\t\t\t</main>

\t\t\t\t<footer id=\"footer\" class=\"footer\">
\t\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t\t&copy; Copyright
\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t<span>FORMINI</span>
\t\t\t\t\t\t</strong>. All Rights Reserved
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"credits\">

\t\t\t\t\t\tDesigned by
\t\t\t\t\t\t<a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
\t\t\t\t\t</div>
\t\t\t\t</footer>
\t\t\t\t<!-- End Footer -->
\t\t\t\t<!-- Vendor JS Files -->
\t\t\t\t<script src=\"";
        // line 756
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/vendor/apexcharts/apexcharts.min.js"), "html", null, true);
        yield "\"></script>
\t\t\t\t<script src=\"";
        // line 757
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
\t\t\t\t<script src=\"";
        // line 758
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/vendor/chart.js/chart.umd.js"), "html", null, true);
        yield "\"></script>
\t\t\t\t<script src=\"";
        // line 759
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/vendor/echarts/echarts.min.js"), "html", null, true);
        yield "\"></script>
\t\t\t\t<script src=\"";
        // line 760
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/vendor/quill/quill.js"), "html", null, true);
        yield "\"></script>
\t\t\t\t<script src=\"";
        // line 761
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/vendor/simple-datatables/simple-datatables.js"), "html", null, true);
        yield "\"></script>
\t\t\t\t<script src=\"";
        // line 762
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/vendor/tinymce/tinymce.min.js"), "html", null, true);
        yield "\"></script>
\t\t\t\t<script src=\"";
        // line 763
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/vendor/php-email-form/validate.js"), "html", null, true);
        yield "\"></script>

\t\t\t\t<!-- Template Main JS File -->
\t\t\t\t<script src=\"";
        // line 766
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/js/main.js"), "html", null, true);
        yield "\"></script>
\t\t\t</body>
\t\t</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 195
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

        yield "dashboard
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 221
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 738
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "baseAdmin.html.twig";
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
        return array (  870 => 738,  827 => 221,  803 => 195,  788 => 766,  782 => 763,  778 => 762,  774 => 761,  770 => 760,  766 => 759,  762 => 758,  758 => 757,  754 => 756,  735 => 739,  733 => 738,  708 => 716,  691 => 702,  674 => 688,  627 => 644,  617 => 637,  597 => 620,  579 => 605,  566 => 595,  557 => 589,  537 => 572,  518 => 556,  509 => 550,  491 => 535,  471 => 518,  461 => 511,  426 => 478,  417 => 472,  407 => 464,  398 => 458,  369 => 431,  365 => 429,  363 => 428,  360 => 427,  358 => 426,  355 => 425,  353 => 424,  348 => 422,  344 => 421,  341 => 420,  339 => 419,  330 => 413,  325 => 411,  298 => 387,  281 => 373,  264 => 359,  130 => 228,  122 => 222,  117 => 221,  111 => 218,  106 => 216,  102 => 215,  98 => 214,  94 => 213,  90 => 212,  86 => 211,  75 => 203,  70 => 201,  65 => 199,  61 => 197,  59 => 195,  52 => 190,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# <!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>
            {% block title %}dashboard{% endblock %}
        </title>
        <link href=\"{{ asset('backOffice/img/formini.jpeg') }}\" rel=\"icon\">
        <!-- Favicons -->
        <link href=\"{{ asset('backOffice/img/formini.jpeg') }}\" rel=\"icon\">
        <link href=\"{{ asset('backOffice/img/formini.jpeg') }}\" rel=\"apple-touch-icon\">

        <!-- Google Fonts -->
        <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

        <!-- Vendor CSS Files -->
        <link href=\"{{ asset('backOffice/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('backOffice/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('backOffice/vendor/boxicons/css/boxicons.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('backOffice/vendor/quill/quill.snow.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('backOffice/vendor/quill/quill.bubble.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('backOffice/vendor/remixicon/remixicon.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('backOffice/vendor/simple-datatables/style.css') }}\" rel=\"stylesheet\">

        <!-- Template Main CSS File -->
        <link href=\"{{ asset('backOffice/css/style.css') }}\" rel=\"stylesheet\">

        {% block stylesheets %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </head>
    <body>
        <header id=\"header\" class=\"header fixed-top d-flex align-items-center\">
            <div class=\"d-flex align-items-center justify-content-between\">
                <a href=\"index.html\" class=\"logo d-flex align-items-center\">
                    <img src=\"{{ asset('backOffice/img/formini.jpeg') }}\" alt=\"\" style=\"max-height: 60px;\">
                    <span class=\"d-none d-lg-block\">FORMINI</span>
                </a>
                <i class=\"bi bi-list toggle-sidebar-btn\"></i>
            </div>

            <div class=\"search-bar\">
                <form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
                    <input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
                    <button type=\"submit\" title=\"Search\">
                        <i class=\"bi bi-search\"></i>
                    </button>
                </form>
            </div>

            <nav class=\"header-nav ms-auto\">
                <ul class=\"d-flex align-items-center\">
                    <li class=\"nav-item d-block d-lg-none\">
                        <a class=\"nav-link nav-icon search-bar-toggle\" href=\"#\">
                            <i class=\"bi bi-search\"></i>
                        </a>
                    </li>

                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                            <i class=\"bi bi-bell\"></i>
                            <span class=\"badge bg-primary badge-number\">4</span>
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\">
                            <li class=\"dropdown-header\">
                                You have 4 new notifications
                                <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
                            </li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li class=\"notification-item\">
                                <i class=\"bi bi-exclamation-circle text-warning\"></i>
                                <div>
                                    <h4>Lorem Ipsum</h4>
                                    <p>Quae dolorem earum veritatis oditseno</p>
                                    <p>30 min. ago</p>
                                </div>
                            </li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li class=\"notification-item\">
                                <i class=\"bi bi-x-circle text-danger\"></i>
                                <div>
                                    <h4>Atque rerum nesciunt</h4>
                                    <p>Quae dolorem earum veritatis oditseno</p>
                                    <p>1 hr. ago</p>
                                </div>
                            </li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li class=\"notification-item\">
                                <i class=\"bi bi-check-circle text-success\"></i>
                                <div>
                                    <h4>Sit rerum fuga</h4>
                                    <p>Quae dolorem earum veritatis oditseno</p>
                                    <p>2 hrs. ago</p>
                                </div>
                            </li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li class=\"notification-item\">
                                <i class=\"bi bi-info-circle text-primary\"></i>
                                <div>
                                    <h4>Dicta reprehenderit</h4>
                                    <p>Quae dolorem earum veritatis oditseno</p>
                                    <p>4 hrs. ago</p>
                                </div>
                            </li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li class=\"dropdown-footer\">
                                <a href=\"#\">Show all notifications</a>
                            </li>
                        </ul>
                    </li>

                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                            <i class=\"bi bi-chat-left-text\"></i>
                            <span class=\"badge bg-success badge-number\">3</span>
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow messages\">
                            <li class=\"dropdown-header\">
                                You have 3 new messages
                                <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
                            </li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li class=\"message-item\">
                                <a href=\"#\">
                                    <img src=\"{{ asset('backOffice/img/messages-1.jpg') }}\" alt=\"\" class=\"rounded-circle\">
                                    <div>
                                        <h4>Maria Hudson</h4>
                                        <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                        <p>4 hrs. ago</p>
                                    </div>
                                </a>
                            </li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li class=\"message-item\">
                                <a href=\"#\">
                                    <img src=\"{{ asset('backOffice/img/messages-2.jpg') }}\" alt=\"\" class=\"rounded-circle\">
                                    <div>
                                        <h4>Anna Nelson</h4>
                                        <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                        <p>6 hrs. ago</p>
                                    </div>
                                </a>
                            </li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li class=\"message-item\">
                                <a href=\"#\">
                                    <img src=\"{{ asset('backOffice/img/messages-3.jpg') }}\" alt=\"\" class=\"rounded-circle\">
                                    <div>
                                        <h4>David Muldon</h4>
                                        <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                        <p>8 hrs. ago</p>
                                    </div>
                                </a>
                            </li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li class=\"dropdown-footer\">
                                <a href=\"#\">Show all messages</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>

        <main id=\"main\" class=\"main\">
            {% block body %}{% endblock %}
        </main>

        <footer id=\"footer\" class=\"footer\">
            <div class=\"copyright\">
                &copy; Copyright <strong><span>FORMINI</span></strong>. All Rights Reserved
            </div>
            <div class=\"credits\">
                Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
            </div>
        </footer>

        <!-- Vendor JS Files -->
        <script src=\"{{ asset('backOffice/vendor/apexcharts/apexcharts.min.js') }}\"></script>
        <script src=\"{{ asset('backOffice/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
        <script src=\"{{ asset('backOffice/vendor/chart.js/chart.umd.js') }}\"></script>
        <script src=\"{{ asset('backOffice/vendor/echarts/echarts.min.js') }}\"></script>
        <script src=\"{{ asset('backOffice/vendor/quill/quill.js') }}\"></script>
        <script src=\"{{ asset('backOffice/vendor/simple-datatables/simple-datatables.js') }}\"></script>
        <script src=\"{{ asset('backOffice/vendor/tinymce/tinymce.min.js') }}\"></script>
        <script src=\"{{ asset('backOffice/vendor/php-email-form/validate.js') }}\"></script>
        <script src=\"{{ asset('backOffice/js/main.js') }}\"></script>
    </body>
</html> #}
<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t{% block title %}dashboard
\t\t\t{% endblock %}
\t\t</title>
\t\t<link
\t\thref=\"{{asset('backOffice/img/formini.jpeg')}}\" rel=\"icon\">
\t\t<!-- Favicons -->
\t\t<link href=\"{{asset('backOffice/img/formini.jpeg')}}\" rel=\"icon\">
\t\t<link
\t\thref=\"{{asset('backOffice/img/formini.jpeg')}}\" rel=\"apple-touch-icon\">

\t\t<!-- Google Fonts -->
\t\t<link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

\t\t<!-- Vendor CSS Files -->
\t\t<link href=\"{{asset('backOffice/vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset('backOffice/vendor/bootstrap-icons/bootstrap-icons.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset('backOffice/vendor/boxicons/css/boxicons.min.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset('backOffice/vendor/quill/quill.snow.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset('backOffice/vendor/quill/quill.bubble.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset('backOffice/vendor/remixicon/remixicon.css')}}\" rel=\"stylesheet\">
\t\t<link
\t\thref=\"{{asset('backOffice/vendor/simple-datatables/style.css')}}\" rel=\"stylesheet\">

\t\t<!-- Template Main CSS File -->
\t\t<link href=\"{{asset('backOffice/css/style.css')}}\" rel=\"stylesheet\"> {% block stylesheets %}{% endblock %}{% block javascripts %}{% endblock %}
\t\t</head>
\t\t<body>
\t\t\t<header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

\t\t\t\t<div class=\"d-flex align-items-center justify-content-between\">
\t\t\t\t\t<a href=\"index.html\" class=\"logo d-flex align-items-center\">
\t\t\t\t\t\t<img src=\"{{asset('backOffice/img/formini.jpeg')}}\" alt=\"\" style=\"max-height: 60px;\">
\t\t\t\t\t\t<span class=\"d-none d-lg-block\">FORMINI</span>
\t\t\t\t\t</a>
\t\t\t\t\t<i class=\"bi bi-list toggle-sidebar-btn\"></i>
\t\t\t\t</div>
\t\t\t\t<!-- End Logo -->

\t\t\t\t<div class=\"search-bar\">
\t\t\t\t\t<form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
\t\t\t\t\t\t<input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
\t\t\t\t\t\t<button type=\"submit\" title=\"Search\">
\t\t\t\t\t\t\t<i class=\"bi bi-search\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<!-- End Search Bar -->
\t\t\t\t<!-- End Search Bar -->
\t\t\t\t<!-- End Search Bar -->
\t\t\t\t<!-- End Search Bar -->

\t\t\t\t\t<nav class=\"header-nav ms-auto\"> <ul class=\"d-flex align-items-center\">

\t\t\t\t\t\t<li class=\"nav-item d-block d-lg-none\">
\t\t\t\t\t\t\t<a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-search\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- End Search Icon-->
\t\t\t\t\t\t<!-- End Search Icon-->
\t\t\t\t\t\t<!-- End Search Icon-->
\t\t\t\t\t\t<!-- End Search Icon-->

\t\t\t\t\t\t\t<li class=\"nav-item dropdown\"> <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-bell\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge bg-primary badge-number\">4</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<!-- End Notification Icon -->

\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\">
\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\tYou have 4 new notifications
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"notification-item\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-exclamation-circle text-warning\"></i>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h4>Lorem Ipsum</h4>
\t\t\t\t\t\t\t\t\t\t<p>Quae dolorem earum veritatis oditseno</p>
\t\t\t\t\t\t\t\t\t\t<p>30 min. ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"notification-item\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-x-circle text-danger\"></i>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h4>Atque rerum nesciunt</h4>
\t\t\t\t\t\t\t\t\t\t<p>Quae dolorem earum veritatis oditseno</p>
\t\t\t\t\t\t\t\t\t\t<p>1 hr. ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"notification-item\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-check-circle text-success\"></i>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h4>Sit rerum fuga</h4>
\t\t\t\t\t\t\t\t\t\t<p>Quae dolorem earum veritatis oditseno</p>
\t\t\t\t\t\t\t\t\t\t<p>2 hrs. ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"notification-item\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-info-circle text-primary\"></i>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h4>Dicta reprehenderit</h4>
\t\t\t\t\t\t\t\t\t\t<p>Quae dolorem earum veritatis oditseno</p>
\t\t\t\t\t\t\t\t\t\t<p>4 hrs. ago</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"dropdown-footer\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Show all notifications</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<!-- End Notification Dropdown Items -->

\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- End Notification Nav -->

\t\t\t\t\t\t<li class=\"nav-item dropdown\">

\t\t\t\t\t\t\t<a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-chat-left-text\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge bg-success badge-number\">3</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<!-- End Messages Icon -->

\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow messages\">
\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\tYou have 3 new messages
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"message-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('backOffice/img/messages-1.jpg')}}\" alt=\"\" class=\"rounded-circle\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<h4>Maria Hudson</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
\t\t\t\t\t\t\t\t\t\t\t<p>4 hrs. ago</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"message-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('backOffice/img/messages-2.jpg')}}\" alt=\"\" class=\"rounded-circle\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<h4>Anna Nelson</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
\t\t\t\t\t\t\t\t\t\t\t<p>6 hrs. ago</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"message-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('backOffice/img/messages-3.jpg')}}\" alt=\"\" class=\"rounded-circle\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<h4>David Muldon</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
\t\t\t\t\t\t\t\t\t\t\t<p>8 hrs. ago</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"dropdown-footer\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Show all messages</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<!-- End Messages Dropdown Items -->

\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- End Messages Nav -->

\t\t\t\t\t\t<li class=\"nav-item dropdown pe-3\">
\t\t\t\t\t\t\t<a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<img src=\"{{asset('backOffice/img/profile-img.jpg')}}\" alt=\"Profile\" class=\"rounded-circle\">
\t\t\t\t\t\t\t\t<span class=\"d-none d-md-block dropdown-toggle ps-2\">
\t\t\t\t\t\t\t\t\t{{ app.user ? app.user.nom : 'Utilisateur' }}
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<!-- End Profile Image Icon -->

\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
\t\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\t\t<h6>{{ app.user.nom }}
\t\t\t\t\t\t\t\t\t\t\t{{ app.user.prenom }}</h6>
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t{% if 'ROLE_ADMIN' in app.user.roles %}
\t\t\t\t\t\t\t\t\t\t\t\tAdministrateur
\t\t\t\t\t\t\t\t\t\t\t{% elseif 'ROLE_INSTRUCTEUR' in app.user.roles %}
\t\t\t\t\t\t\t\t\t\t\t\tInstructeur
\t\t\t\t\t\t\t\t\t\t\t{% elseif 'ROLE_APPRENANT' in app.user.roles %}
\t\t\t\t\t\t\t\t\t\t\t\tApprenant
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" >
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-person\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Mon Profil</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" >
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-gear\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Paramètres</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"{{ path('app_logout') }}\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-box-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Déconnexion</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\t\t<h6>Utilisateur invité</h6>
\t\t\t\t\t\t\t\t\t\t<span>Veuillez vous connecter</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"{{ path('app_login') }}\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-box-arrow-in-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Se connecter</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<!-- End Profile Dropdown Items -->
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- End Profile Nav -->

\t\t\t\t\t\t<!-- End Profile Nav -->

\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t\t<!-- End Icons Navigation -->

\t\t\t</header>
\t\t\t<!-- End Header -->
\t\t\t<aside id=\"sidebar\" class=\"sidebar\">

\t\t\t\t<ul class=\"sidebar-nav\" id=\"sidebar-nav\">

\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link \" href=\"index.html\">
\t\t\t\t\t\t\t<i class=\"bi bi-grid\"></i>
\t\t\t\t\t\t\t<span>Dashboard</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<!-- End Dashboard Nav -->

\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link collapsed\" data-bs-target=\"#components-nav\" data-bs-toggle=\"collapse\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"bi bi-menu-button-wide\"></i>
\t\t\t\t\t\t\t<span>Formations</span>
\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down ms-auto\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul id=\"components-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_formation_new')}}\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t\t\t\t\t\t\t<span>Ajouter une formation</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path('app_formation_index')}}\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t\t\t\t\t\t\t<span>Voir les formations</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link collapsed\" data-bs-target=\"#components-nav-utilisaterus\" data-bs-toggle=\"collapse\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"bi bi-menu-button-wide\"></i>
\t\t\t\t\t\t\t<span>Utilisaterus</span>
\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down ms-auto\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul id=\"components-nav-utilisaterus\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path('app_users_list')}}\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t\t\t\t\t\t\t<span>Voir les utilisateurs</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link collapsed\" data-bs-target=\"#components-nav\" data-bs-toggle=\"collapse\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"bi bi-menu-button-wide\"></i>
\t\t\t\t\t\t\t<span>Evenements</span>
\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down ms-auto\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul id=\"components-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_evenement_new')}}\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t\t\t\t\t\t\t<span>Ajouter un Evenement</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path('app_evenement_index')}}\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t\t\t\t\t\t\t<span>Voir les evenements</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link collapsed\" data-bs-target=\"#components-nav\" data-bs-toggle=\"collapse\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"bi bi-menu-button-wide\"></i>
\t\t\t\t\t\t\t<span>Notifications</span>
\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down ms-auto\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul id=\"components-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path('app_notification_index')}}\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t\t\t\t\t\t\t<span>Voir les notifications</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link collapsed\" data-bs-target=\"#components-nav\" data-bs-toggle=\"collapse\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"bi bi-menu-button-wide\"></i>
\t\t\t\t\t\t\t<span>Categories</span>
\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down ms-auto\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul id=\"components-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_categorie_new')}}\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t\t\t\t\t\t\t<span>Ajouter une categorie</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path('app_categorie_index')}}\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t\t\t\t\t\t\t<span>Voir les categories</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link collapsed\" href=\"{{ path('admin_formation_list') }}\">
\t\t\t\t\t\t\t<i class=\"bi bi-bar-chart\"></i>
\t\t\t\t\t\t\t<span>Feedback</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>>
\t\t\t\t\t<!-- End Formations Nav -->

\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link \" data-bs-target=\"#tables-nav\" data-bs-toggle=\"collapse\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"bi bi-layout-text-window-reverse\"></i>
\t\t\t\t\t\t\t<span>Inscription de cours</span>
\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down ms-auto\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul id=\"tables-nav\" class=\"nav-content collapse show\" data-bs-parent=\"#sidebar-nav\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path('app_inscription_cours_index')}}\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t\t\t\t\t\t\t<span>liste d'inscription</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<!-- End Tables Nav -->
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link \" data-bs-target=\"#forms-nav\" data-bs-toggle=\"collapse\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"bi bi-journal-text\"></i>
\t\t\t\t\t\t\t<span>Promotions</span>
\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down ms-auto\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul id=\"forms-nav\" class=\"nav-content collapse show\" data-bs-parent=\"#sidebar-nav\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path('admin_promotion_create')}}\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t\t\t\t\t\t\t<span>Ajouter Promotion</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path('admin_promotion_index')}}\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t\t\t\t\t\t\t<span>Liste promotion</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<!-- End Forms Nav -->

\t\t\t\t\t<li class=\"nav-heading\">Pages</li>

\t\t\t\t\t<!-- End Profile Page Nav -->


\t\t\t\t\t<!-- End Blank Page Nav -->

\t\t\t\t</ul>

\t\t\t</aside>
\t\t\t<!-- End Sidebar-->


\t\t\t<li class=\"nav-item dropdown\">

\t\t\t\t<a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t<i class=\"bi bi-chat-left-text\"></i>
\t\t\t\t\t<span class=\"badge bg-success badge-number\">3</span>
\t\t\t\t</a>
\t\t\t\t<!-- End Messages Icon -->

\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow messages\">
\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\tYou have 3 new messages
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"message-item\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<img src=\"{{asset('backOffice/img/messages-1.jpg')}}\" alt=\"\" class=\"rounded-circle\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<h4>Maria Hudson</h4>
\t\t\t\t\t\t\t\t<p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
\t\t\t\t\t\t\t\t<p>4 hrs. ago</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"message-item\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<img src=\"{{asset('backOffice/img/messages-2.jpg')}}\" alt=\"\" class=\"rounded-circle\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<h4>Anna Nelson</h4>
\t\t\t\t\t\t\t\t<p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
\t\t\t\t\t\t\t\t<p>6 hrs. ago</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"message-item\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<img src=\"{{asset('backOffice/img/messages-3.jpg')}}\" alt=\"\" class=\"rounded-circle\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<h4>David Muldon</h4>
\t\t\t\t\t\t\t\t<p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
\t\t\t\t\t\t\t\t<p>8 hrs. ago</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"dropdown-footer\">
\t\t\t\t\t\t<a href=\"#\">Show all messages</a>
\t\t\t\t\t</li>

\t\t\t\t</ul>
\t\t\t\t<!-- End Messages Dropdown Items -->

\t\t\t</li>
\t\t\t<!-- End Messages Nav -->

\t\t\t<main id=\"main\" class=\"main\"> {% block body %}{% endblock %}
\t\t\t\t</main>

\t\t\t\t<footer id=\"footer\" class=\"footer\">
\t\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t\t&copy; Copyright
\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t<span>FORMINI</span>
\t\t\t\t\t\t</strong>. All Rights Reserved
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"credits\">

\t\t\t\t\t\tDesigned by
\t\t\t\t\t\t<a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
\t\t\t\t\t</div>
\t\t\t\t</footer>
\t\t\t\t<!-- End Footer -->
\t\t\t\t<!-- Vendor JS Files -->
\t\t\t\t<script src=\"{{asset('backOffice/vendor/apexcharts/apexcharts.min.js')}}\"></script>
\t\t\t\t<script src=\"{{asset('backOffice/vendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
\t\t\t\t<script src=\"{{asset('backOffice/vendor/chart.js/chart.umd.js')}}\"></script>
\t\t\t\t<script src=\"{{asset('backOffice/vendor/echarts/echarts.min.js')}}\"></script>
\t\t\t\t<script src=\"{{asset('backOffice/vendor/quill/quill.js')}}\"></script>
\t\t\t\t<script src=\"{{asset('backOffice/vendor/simple-datatables/simple-datatables.js')}}\"></script>
\t\t\t\t<script src=\"{{asset('backOffice/vendor/tinymce/tinymce.min.js')}}\"></script>
\t\t\t\t<script src=\"{{asset('backOffice/vendor/php-email-form/validate.js')}}\"></script>

\t\t\t\t<!-- Template Main JS File -->
\t\t\t\t<script src=\"{{asset('backOffice/js/main.js')}}\"></script>
\t\t\t</body>
\t\t</html>
", "baseAdmin.html.twig", "C:\\Users\\Yassm\\Desktop\\newpi\\pi2025\\templates\\baseAdmin.html.twig");
    }
}
