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

/* base.html.twig */
class __TwigTemplate_b1319f128010fe5525600c40bd592551 extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>
            ";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 7
        yield "        </title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontOffice/css/bootstrap.css"), "html", null, true);
        yield "\"/>
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap\" rel=\"stylesheet\" />
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css\" integrity=\"sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=\" crossorigin=\"anonymous\"/>
        <link href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontOffice/css/font-awesome.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontOffice/css/style.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontOffice/css/responsive.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>

        ";
        // line 20
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 21
        yield "    </head>
    <body>
        <header class=\"header_section\">
            <div class=\"container-fluid\">
                <nav class=\"navbar navbar-expand-lg custom_nav-container\">
                    <a class=\"navbar-brand\" href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                        <img src=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontOffice/images/formini.jpeg"), "html", null, true);
        yield "\" alt=\"Formini Logo\" style=\"max-height: 70px;\">
                    </a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"\"></span>
                    </button>

                    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                        <div class=\"d-flex mx-auto flex-column flex-lg-row align-items-center\">
                            <ul class=\"navbar-nav\">
                                <li class=\"nav-item active\">
                                    <a class=\"nav-link\" href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        yield "\">About</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formations");
        yield "\">Formation</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_instructeur");
        yield "\">Instructeurs</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_message");
        yield "\">Message</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_front");
        yield "\">Evenements</a>
                                </li>
                                </li>
                              </li>
                              <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                  <i class=\"fa fa-bell\"></i> Notifications
                                </a>
                                <div class=\"dropdown-menu scrollable-dropdown\" aria-labelledby=\"navbarDropdown\" id=\"notificationDropdown\">
                                  <!-- Notifications will be injected here dynamically -->
                                </div>
                              </li>
                              
                              <style>
                                .scrollable-dropdown {
                                    max-height: 300px; /* Limit height */
                                    overflow-y: auto; /* Enable scrolling */
                                    width: 350px; /* Adjust width */
                                }
                              
                                .notification-item {
                                    display: flex;
                                    align-items: center;
                                    padding: 10px;
                                    border-bottom: 1px solid #e0e0e0;
                                }
                              
                                .notification-item img {
                                    width: 40px; /* Small profile image */
                                    height: 40px;
                                    border-radius: 50%;
                                    margin-right: 10px;
                                }
                              
                                .notification-text {
                                    flex-grow: 1;
                                }
                              
                                .notification-text strong {
                                    display: block;
                                    font-size: 14px;
                                }
                              
                                .notification-text small {
                                    font-size: 12px;
                                    color: gray;
                                }
                              
                                .notification-text span {
                                    font-size: 13px;
                                    display: block;
                                    color: #333;
                                }
                              </style>
                              
                              <script>
                                // Fetch notifications when the page loads
                                window.onload = function () {
                                    loadNotifications();
                                    // Set interval to load notifications every 5 seconds
                                    setInterval(loadNotifications, 5000);
                                };
                            
                                function loadNotifications() {
                                    fetch(\"";
        // line 116
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notifications");
        yield "\")  // Fetch notifications from Symfony route
                                        .then(response => response.json())
                                        .then(data => {
                                            let notificationDropdown = document.getElementById(\"notificationDropdown\");
                                            notificationDropdown.innerHTML = '';  // Clear previous notifications
                            
                                            if (data.length === 0) {
                                                notificationDropdown.innerHTML = '<a class=\"dropdown-item text-muted\" href=\"#\">Aucune notification</a>';
                                            } else {
                                                data.forEach(notification => {
                                                    let notificationItem = document.createElement(\"a\");
                                                    notificationItem.classList.add(\"dropdown-item\", \"notification-item\");
                                                    notificationItem.href = \"";
        // line 128
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notification_show_cli", ["id" => "id_placeholder"]);
        yield "\".replace('id_placeholder', notification.id);
                            
                                                    // Sender image placeholder (replace with dynamic sender image if available)
                                                    let senderImage = notification.senderImage ? notification.senderImage : \"";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontOffice/images/formini.jpeg"), "html", null, true);
        yield "\";
                            
                                                    notificationItem.innerHTML = `
                                                        <img src=\"\${senderImage}\" alt=\"Sender\">
                                                        <div class=\"notification-text\">
                                                            <strong>\${notification.titre}</strong>
                                                            <small>\${notification.sentAt}</small>
                                                            <span>\${notification.contenu.slice(0, 50)}...</span>
                                                        </div>
                                                    `;
                            
                                                    notificationDropdown.appendChild(notificationItem);
                                                });
                                            }
                                        })
                                        .catch(error => console.log(\"Error fetching notifications:\", error));
                                }
                            </script>
                            

                                ";
        // line 151
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 151, $this->source); })()), "user", [], "any", false, false, false, 151)) {
            // line 152
            yield "                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                            <i class=\"bi bi-person-circle\"></i> ";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 154, $this->source); })()), "user", [], "any", false, false, false, 154), "nom", [], "any", false, false, false, 154), "html", null, true);
            yield "
                                        </a>
                                        <ul class=\"dropdown-menu\" aria-labelledby=\"userDropdown\">
                                            ";
            // line 157
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 157, $this->source); })()), "user", [], "any", false, false, false, 157), "roles", [], "any", false, false, false, 157))) {
                // line 158
                yield "                                                <li>
                                                    <a class=\"dropdown-item\" href=\"";
                // line 159
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
                yield "\">
                                                        <i class=\"bi bi-speedometer2\"></i> Dashboard
                                                    </a>
                                                </li>
                                            ";
            }
            // line 164
            yield "                                            <li>
                                                <a class=\"dropdown-item\" href=\"";
            // line 165
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">
                                                    <i class=\"bi bi-box-arrow-right\"></i> Déconnexion
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                ";
        } else {
            // line 172
            yield "                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"registerDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                            <i class=\"bi bi-person\"></i> S'inscrire
                                        </a>
                                        <ul class=\"dropdown-menu\" aria-labelledby=\"registerDropdown\">
                                            <li>
                                                <a class=\"dropdown-item\" href=\"";
            // line 178
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register", ["role" => "apprenant"]);
            yield "\">
                                                    <i class=\"bi bi-person\"></i> Apprenant
                                                </a>
                                            </li>
                                            <li>
                                                <a class=\"dropdown-item\" href=\"";
            // line 183
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register_instructeur", ["role" => "instructeur"]);
            yield "\">
                                                    <i class=\"bi bi-mortarboard\"></i> Instructeur
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"";
            // line 190
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">
                                            <i class=\"bi bi-box-arrow-in-right\"></i> S'authentifier
                                        </a>
                                    </li>
                                ";
        }
        // line 195
        yield "                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        ";
        // line 202
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 203
        yield "
        <footer class=\"footer_section\">
            <div class=\"container\">
                <p>&copy; <span id=\"displayYear\"></span> All Rights Reserved By <a href=\"https://html.design/\">Free Html Templates</a></p>
            </div>
        </footer>

        <script src=\"";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontOffice/js/jquery-3.4.1.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontOffice/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js\"></script>
        <script src=\"";
        // line 213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontOffice/js/custom.js"), "html", null, true);
        yield "\"></script>
        <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>

        ";
        // line 217
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 218
        yield "    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

        yield "formini";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 20
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

    // line 202
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

    // line 217
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  445 => 217,  423 => 202,  401 => 20,  378 => 6,  365 => 218,  363 => 217,  356 => 213,  351 => 211,  347 => 210,  338 => 203,  336 => 202,  327 => 195,  319 => 190,  309 => 183,  301 => 178,  293 => 172,  283 => 165,  280 => 164,  272 => 159,  269 => 158,  267 => 157,  261 => 154,  257 => 152,  255 => 151,  232 => 131,  226 => 128,  211 => 116,  144 => 52,  138 => 49,  132 => 46,  126 => 43,  120 => 40,  114 => 37,  101 => 27,  97 => 26,  90 => 21,  88 => 20,  83 => 18,  79 => 17,  75 => 16,  68 => 12,  61 => 7,  59 => 6,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>
            {% block title %}formini{% endblock %}
        </title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('frontOffice/css/bootstrap.css') }}\"/>
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap\" rel=\"stylesheet\" />
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css\" integrity=\"sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=\" crossorigin=\"anonymous\"/>
        <link href=\"{{ asset('frontOffice/css/font-awesome.min.css') }}\" rel=\"stylesheet\"/>
        <link href=\"{{ asset('frontOffice/css/style.css') }}\" rel=\"stylesheet\"/>
        <link href=\"{{ asset('frontOffice/css/responsive.css') }}\" rel=\"stylesheet\"/>

        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        <header class=\"header_section\">
            <div class=\"container-fluid\">
                <nav class=\"navbar navbar-expand-lg custom_nav-container\">
                    <a class=\"navbar-brand\" href=\"{{ path('app_home') }}\">
                        <img src=\"{{ asset('frontOffice/images/formini.jpeg') }}\" alt=\"Formini Logo\" style=\"max-height: 70px;\">
                    </a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"\"></span>
                    </button>

                    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                        <div class=\"d-flex mx-auto flex-column flex-lg-row align-items-center\">
                            <ul class=\"navbar-nav\">
                                <li class=\"nav-item active\">
                                    <a class=\"nav-link\" href=\"{{ path('app_home') }}\">Home</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ path('app_about') }}\">About</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ path('app_formations') }}\">Formation</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ path('app_instructeur') }}\">Instructeurs</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ path('app_message') }}\">Message</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ path('app_evenement_front') }}\">Evenements</a>
                                </li>
                                </li>
                              </li>
                              <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                  <i class=\"fa fa-bell\"></i> Notifications
                                </a>
                                <div class=\"dropdown-menu scrollable-dropdown\" aria-labelledby=\"navbarDropdown\" id=\"notificationDropdown\">
                                  <!-- Notifications will be injected here dynamically -->
                                </div>
                              </li>
                              
                              <style>
                                .scrollable-dropdown {
                                    max-height: 300px; /* Limit height */
                                    overflow-y: auto; /* Enable scrolling */
                                    width: 350px; /* Adjust width */
                                }
                              
                                .notification-item {
                                    display: flex;
                                    align-items: center;
                                    padding: 10px;
                                    border-bottom: 1px solid #e0e0e0;
                                }
                              
                                .notification-item img {
                                    width: 40px; /* Small profile image */
                                    height: 40px;
                                    border-radius: 50%;
                                    margin-right: 10px;
                                }
                              
                                .notification-text {
                                    flex-grow: 1;
                                }
                              
                                .notification-text strong {
                                    display: block;
                                    font-size: 14px;
                                }
                              
                                .notification-text small {
                                    font-size: 12px;
                                    color: gray;
                                }
                              
                                .notification-text span {
                                    font-size: 13px;
                                    display: block;
                                    color: #333;
                                }
                              </style>
                              
                              <script>
                                // Fetch notifications when the page loads
                                window.onload = function () {
                                    loadNotifications();
                                    // Set interval to load notifications every 5 seconds
                                    setInterval(loadNotifications, 5000);
                                };
                            
                                function loadNotifications() {
                                    fetch(\"{{ path('app_notifications') }}\")  // Fetch notifications from Symfony route
                                        .then(response => response.json())
                                        .then(data => {
                                            let notificationDropdown = document.getElementById(\"notificationDropdown\");
                                            notificationDropdown.innerHTML = '';  // Clear previous notifications
                            
                                            if (data.length === 0) {
                                                notificationDropdown.innerHTML = '<a class=\"dropdown-item text-muted\" href=\"#\">Aucune notification</a>';
                                            } else {
                                                data.forEach(notification => {
                                                    let notificationItem = document.createElement(\"a\");
                                                    notificationItem.classList.add(\"dropdown-item\", \"notification-item\");
                                                    notificationItem.href = \"{{ path('app_notification_show_cli', {'id': 'id_placeholder'}) }}\".replace('id_placeholder', notification.id);
                            
                                                    // Sender image placeholder (replace with dynamic sender image if available)
                                                    let senderImage = notification.senderImage ? notification.senderImage : \"{{ asset('frontOffice/images/formini.jpeg') }}\";
                            
                                                    notificationItem.innerHTML = `
                                                        <img src=\"\${senderImage}\" alt=\"Sender\">
                                                        <div class=\"notification-text\">
                                                            <strong>\${notification.titre}</strong>
                                                            <small>\${notification.sentAt}</small>
                                                            <span>\${notification.contenu.slice(0, 50)}...</span>
                                                        </div>
                                                    `;
                            
                                                    notificationDropdown.appendChild(notificationItem);
                                                });
                                            }
                                        })
                                        .catch(error => console.log(\"Error fetching notifications:\", error));
                                }
                            </script>
                            

                                {% if app.user %}
                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                            <i class=\"bi bi-person-circle\"></i> {{ app.user.nom }}
                                        </a>
                                        <ul class=\"dropdown-menu\" aria-labelledby=\"userDropdown\">
                                            {% if 'ROLE_ADMIN' in app.user.roles %}
                                                <li>
                                                    <a class=\"dropdown-item\" href=\"{{ path('app_dashboard') }}\">
                                                        <i class=\"bi bi-speedometer2\"></i> Dashboard
                                                    </a>
                                                </li>
                                            {% endif %}
                                            <li>
                                                <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">
                                                    <i class=\"bi bi-box-arrow-right\"></i> Déconnexion
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                {% else %}
                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"registerDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                            <i class=\"bi bi-person\"></i> S'inscrire
                                        </a>
                                        <ul class=\"dropdown-menu\" aria-labelledby=\"registerDropdown\">
                                            <li>
                                                <a class=\"dropdown-item\" href=\"{{ path('app_register', {'role': 'apprenant'}) }}\">
                                                    <i class=\"bi bi-person\"></i> Apprenant
                                                </a>
                                            </li>
                                            <li>
                                                <a class=\"dropdown-item\" href=\"{{ path('app_register_instructeur', {'role': 'instructeur'}) }}\">
                                                    <i class=\"bi bi-mortarboard\"></i> Instructeur
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"{{ path('app_login') }}\">
                                            <i class=\"bi bi-box-arrow-in-right\"></i> S'authentifier
                                        </a>
                                    </li>
                                {% endif %}
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        {% block body %}{% endblock %}

        <footer class=\"footer_section\">
            <div class=\"container\">
                <p>&copy; <span id=\"displayYear\"></span> All Rights Reserved By <a href=\"https://html.design/\">Free Html Templates</a></p>
            </div>
        </footer>

        <script src=\"{{ asset('frontOffice/js/jquery-3.4.1.min.js') }}\"></script>
        <script src=\"{{ asset('frontOffice/js/bootstrap.js') }}\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js\"></script>
        <script src=\"{{ asset('frontOffice/js/custom.js') }}\"></script>
        <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>

        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Users\\Dell\\Desktop\\pi2\\pi2025\\templates\\base.html.twig");
    }
}
