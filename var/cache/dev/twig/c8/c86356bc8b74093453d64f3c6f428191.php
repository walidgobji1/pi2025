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
class __TwigTemplate_9395a01620ad7fc1c64775f14e76c66e extends Template
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
        yield "<style>
   /* Style global pour la boîte de chat */
.chat-box {
    max-height: 450px;
    overflow-y: auto;
    background: #f9f9f9;
    border-radius: 15px;
    padding: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
}

/* Liste des messages */
.chat-messages {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    overflow-y: auto;
    flex-grow: 1;
}

/* Message standard */
.message {
    max-width: 70%;
    padding: 12px 16px;
    border-radius: 18px;
    font-size: 15px;
    display: flex;
    align-items: center;
    word-wrap: break-word;
    white-space: pre-wrap;
    margin-bottom: 12px;
    transition: all 0.3s ease;
}

/* Message envoyé */
.message.sent {
    background: #007bff;
    color: white;
    align-self: flex-end;
    border-bottom-right-radius: 0;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Message reçu */
.message.received {
    background: #e0e0e0;
    align-self: flex-start;
    border-bottom-left-radius: 0;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Formulaire d'entrée */
.chat-input {
    display: flex;
    align-items: center;
    padding: 15px;
    background: #ffffff;
    border-top: 2px solid #e1e1e1;
    border-radius: 10px;
}

/* Zone de texte */
.chat-input textarea {
    flex: 1;
    border-radius: 10px;
    padding: 12px 15px;
    font-size: 14px;
    resize: none;
    border: 1px solid #ccc;
    height: 50px;
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

/* Effet de focus sur la zone de texte */
.chat-input textarea:focus {
    border-color: #007bff;
    outline: none;
}

/* Bouton envoyer */
.chat-input button {
    padding: 10px 20px;
    border-radius: 15px;
    font-size: 14px;
    background: #007bff;
    color: white;
    border: none;
    margin-left: 10px;
    cursor: pointer;
    transition: all 0.3s ease;
}

/* Effet de hover pour le bouton envoyer */
.chat-input button:hover {
    background: #0056b3;
}

/* Timestamps des messages */
.timestamp {
    font-size: 12px;
    color: rgba(0, 0, 0, 0.6);
    margin-left: 10px;
}

/* Style de la liste des discussions */
.scrollable-list {
    max-height: 450px; 
    overflow-y: auto;
    margin-bottom: 20px;
}

/* Style de la discussion dans la liste */
.list-unstyled li {
    padding: 12px;
    border-bottom: 1px solid #ddd;
    background-color: #f9f9f9;
    border-radius: 10px;
    margin-bottom: 10px;
    transition: background-color 0.3s ease;
    display: flex;
    justify-content: space-between;  
    align-items: center;
}

/* Effet au survol des discussions */
.list-unstyled li:hover {
    background-color: #f0f0f0;
}

/* Avatar de l'utilisateur dans la discussion */
.rounded-circle {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

/* Formulaire de suppression de la discussion */
.btn-danger {
    background-color: #e74c3c;
    border-color: #e74c3c;
    border-radius: 12px;
    transition: all 0.3s ease;
}

/* Effet hover pour le bouton supprimer */
.btn-danger:hover {
    background-color: #c0392b;
    border-color: #c0392b;
    text-align: center;
}

/* Formatage des boutons de suppression de message */
.dropdown-menu li button {
    background: transparent;
    border: none;
    font-size: 14px;
    color: #c0392b;
}

/* Ajouter un style au bouton modifier */
.dropdown-item {
    background-color: #f1f1f1;
}

/* Ajouter un fond pour la card contenant les discussions */
.card-body {
    padding: 20px;
    background: #f9f9f9;
    border-radius: 10px;
}

/* Réduire la taille du dropdown */
.dropdown-menu {
    min-width: 150px;
    font-size: 14px;  
    padding: 8px 0;    
    border-radius: 8px; 
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    border: 1px solid #ddd;
    opacity: 0;
    visibility: hidden;
    transform: translateY(-10px);
    transition: all 0.3s ease;
}

/* Effet de survol sur le menu dropdown */
.dropdown-menu.show {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

/* Style des éléments du dropdown */
.dropdown-item {
    padding: 10px 15px;
    color: #333;
    background-color: transparent;
    border: none;
    font-size: 14px;
    border-radius: 6px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

/* Effet de survol des éléments du dropdown */
.dropdown-item:hover {
    background-color: #f1f1f1;
    color: #007bff;
}

/* Bouton du dropdown */
.dropdown-toggle {
    background-color: transparent;
    border: none;
    padding: 6px 12px;
    font-size: 14px;
    color: #555;
    border-radius: 6px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

/* Effet de survol sur le bouton dropdown */
.dropdown-toggle:hover {
    background-color: #f0f0f0;
    color: #007bff;
}

/* Ajout d'une icône sur le bouton dropdown */
.dropdown-toggle::after {
    content: ' ▼';
    font-size: 10px;
    margin-left: 5px;
}

/* Modifier le bouton supprimer */
.dropdown-item.text-danger {
    color: #e74c3c;
}

/* Effet de survol du bouton supprimer */
.dropdown-item.text-danger:hover {
    background-color: #e74c3c;
    color: white;
}
</style>

<section>
<div class=\"container mt-4\">
    <div class=\"border rounded p-3 shadow bg-white\">

    <div class=\"container py-5\">
        <div class=\"row\">
            <!-- Sidebar des discussions -->
            <div class=\"col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0\">
                <h5 class=\"font-weight-bold mb-3 text-center text-lg-start\">Discussions</h5>
                <div class=\"card\">
                    <div class=\"card-body\">
                        <ul class=\"list-unstyled mb-0 scrollable-list\">
    ";
        // line 265
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["discussions"]) || array_key_exists("discussions", $context) ? $context["discussions"] : (function () { throw new RuntimeError('Variable "discussions" does not exist.', 265, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["discussion"]) {
            // line 266
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["discussion"], "sender", [], "any", false, false, false, 266), "id", [], "any", false, false, false, 266) == 1)) {
                // line 267
                yield "            <li class=\"p-2 border-bottom bg-body-tertiary d-flex justify-content-between\">
                <a href=\"";
                // line 268
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_discussion", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["discussion"], "id", [], "any", false, false, false, 268)]), "html", null, true);
                yield "\" class=\"d-flex justify-content-between text-decoration-none w-100\">
                    <div class=\"d-flex flex-row w-100\">
                        <img src=\"https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-8.webp\" alt=\"avatar\"
                             class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"50\">
                        <div class=\"pt-1\">
                            <span>
                                ";
                // line 274
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["discussion"], "receiver", [], "any", false, false, false, 274), "username", [], "any", false, false, false, 274), "html", null, true);
                yield "
                            </span>
                        </div>
                    </div>
                </a>
                <form action=\"";
                // line 279
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_discussion", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["discussion"], "id", [], "any", false, false, false, 279)]), "html", null, true);
                yield "\" method=\"POST\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cette discussion ?');\">
                    <button type=\"submit\" class=\"btn btn-danger btn-sm delete-btn\">🗑</button>
                </form>
            </li>
        ";
            }
            // line 284
            yield "    ";
            $context['_iterated'] = true;
        }
        // line 286
        if (!$context['_iterated']) {
            // line 285
            yield "        <li class=\"list-group-item text-muted\">Aucune discussion disponible.</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['discussion'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 287
        yield "</ul>

                        <a href=\"";
        // line 289
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_discussion");
        yield "\" class=\"btn btn-success mt-3\">Nouvelle discussion</a>
                    </div>
                </div>
            </div>

            <!-- Chatbox principale -->
            <div class=\"col-md-6 col-lg-7 col-xl-8\">
                <h5 class=\"font-weight-bold mb-3 text-center text-lg-start\">Message</h5>

                ";
        // line 298
        if ((array_key_exists("discussion", $context) && (isset($context["discussion"]) || array_key_exists("discussion", $context) ? $context["discussion"] : (function () { throw new RuntimeError('Variable "discussion" does not exist.', 298, $this->source); })()))) {
            // line 299
            yield "                    <div class=\"chat-box p-3\">
                        <ul class=\"list-unstyled chat-messages\" id=\"chat-messages\">
                            ";
            // line 301
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 301, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 302
                yield "                                <li class=\"d-flex ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 302), "id", [], "any", false, false, false, 302) == 1)) {
                    yield "justify-content-end";
                } else {
                    yield "justify-content-start";
                }
                yield " mb-3 align-items-center\">
                                    ";
                // line 303
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 303), "id", [], "any", false, false, false, 303) != 1)) {
                    // line 304
                    yield "                                        <img src=\"https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp\" alt=\"avatar\"
                                             class=\"rounded-circle me-2 shadow-1-strong\" width=\"40\">
                                    ";
                }
                // line 307
                yield "                                    <div class=\"dropdown\">
                                        <button class=\"btn btn-light btn-sm dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton";
                // line 308
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 308), "html", null, true);
                yield "\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                            ...
                                        </button>
                                        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton";
                // line 311
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 311), "html", null, true);
                yield "\">
                                            <li>
                                                <form action=\"";
                // line 313
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_message", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 313)]), "html", null, true);
                yield "\" method=\"POST\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer ce message ?');\">
                                                    <button type=\"submit\" class=\"dropdown-item text-danger\">🗑 Supprimer</button>
                                                </form>
                                            </li>
                                            <li>
                                                <a href=\"";
                // line 318
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_message", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 318)]), "html", null, true);
                yield "\" class=\"dropdown-item\">✏ Modifier</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"message ";
                // line 322
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 322), "id", [], "any", false, false, false, 322) == 1)) {
                    yield "sent";
                } else {
                    yield "received";
                }
                yield "\">
                                        <p class=\"mb-0\">";
                // line 323
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 323), "html", null, true);
                yield "</p>
                                        <span class=\"timestamp\">";
                // line 324
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "createdAt", [], "any", false, false, false, 324), "d/m/Y H:i"), "html", null, true);
                yield "</span>
                                    </div>
                                </li>
                            ";
                $context['_iterated'] = true;
            }
            // line 329
            if (!$context['_iterated']) {
                // line 328
                yield "                                <li class=\"text-muted text-center\">Aucun message dans cette discussion.</li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 330
            yield "                        </ul>
                    </div>

                    <!-- Formulaire d'envoi -->
                    <form action=\"";
            // line 334
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("send_message");
            yield "\" method=\"POST\" class=\"chat-input p-3\" id=\"chat-form\">
                        <input type=\"hidden\" name=\"discussion_id\" value=\"";
            // line 335
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["discussion"]) || array_key_exists("discussion", $context) ? $context["discussion"] : (function () { throw new RuntimeError('Variable "discussion" does not exist.', 335, $this->source); })()), "id", [], "any", false, false, false, 335), "html", null, true);
            yield "\">
                        <input type=\"hidden\" name=\"sender_id\" value=\"1\">
                        <textarea name=\"content\" id=\"content\" class=\"form-control\" placeholder=\"Votre message...\"></textarea>
                        <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
                    </form>

                    <!-- Affichage des erreurs -->
                    ";
            // line 342
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 342, $this->source); })()), "flashes", ["error"], "method", false, false, false, 342));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 343
                yield "                        <p class=\"text-danger mt-1\" style=\"font-size: 14px;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</p>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 345
            yield "                    <!-- Bouton supprimer la discussion -->
                    <form action=\"";
            // line 346
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_discussion", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["discussion"]) || array_key_exists("discussion", $context) ? $context["discussion"] : (function () { throw new RuntimeError('Variable "discussion" does not exist.', 346, $this->source); })()), "id", [], "any", false, false, false, 346)]), "html", null, true);
            yield "\" method=\"POST\" class=\"mt-3\">
                        <button type=\"submit\" class=\"btn btn-danger\">Supprimer cette discussion</button>
                    </form>

                ";
        } else {
            // line 351
            yield "                    <p class=\"text-center\">Sélectionnez une discussion pour commencer à discuter.</p>
                ";
        }
        // line 353
        yield "            </div>
        </div>
    </div>
    </div>
</section>

<script>
    // Scroll automatique vers le bas
    document.addEventListener(\"DOMContentLoaded\", function () {
        var chatMessages = document.getElementById(\"chat-messages\");
        if (chatMessages) {
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }
    });

    // Scroll après envoi du message
    document.getElementById(\"chat-form\")?.addEventListener(\"submit\", function () {
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
            if (!event.target.closest('.dropdown') && !dropdown.contains(event.target)) {
                dropdown.classList.remove('show');
            }
        });
    });
</script>
<script>
    document.addEventListener(\"DOMContentLoaded\", function () {
        var dropdownElements = document.querySelectorAll('.dropdown-toggle');
        dropdownElements.forEach(function (dropdown) {
            dropdown.addEventListener('click', function (event) {
                event.stopPropagation();
                let menu = this.nextElementSibling;
                document.querySelectorAll('.dropdown-menu').forEach(m => {
                    if (m !== menu) m.classList.remove('show');
                });
                menu.classList.toggle('show');
            });
        });

        document.addEventListener('click', function () {
            document.querySelectorAll('.dropdown-menu').forEach(m => m.classList.remove('show'));
        });
    });
</script>

<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" />
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\"></script>

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
        return array (  537 => 353,  533 => 351,  525 => 346,  522 => 345,  513 => 343,  509 => 342,  499 => 335,  495 => 334,  489 => 330,  482 => 328,  480 => 329,  472 => 324,  468 => 323,  460 => 322,  453 => 318,  445 => 313,  440 => 311,  434 => 308,  431 => 307,  426 => 304,  424 => 303,  415 => 302,  410 => 301,  406 => 299,  404 => 298,  392 => 289,  388 => 287,  381 => 285,  379 => 286,  375 => 284,  367 => 279,  359 => 274,  350 => 268,  347 => 267,  344 => 266,  339 => 265,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<style>
   /* Style global pour la boîte de chat */
.chat-box {
    max-height: 450px;
    overflow-y: auto;
    background: #f9f9f9;
    border-radius: 15px;
    padding: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
}

/* Liste des messages */
.chat-messages {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    overflow-y: auto;
    flex-grow: 1;
}

/* Message standard */
.message {
    max-width: 70%;
    padding: 12px 16px;
    border-radius: 18px;
    font-size: 15px;
    display: flex;
    align-items: center;
    word-wrap: break-word;
    white-space: pre-wrap;
    margin-bottom: 12px;
    transition: all 0.3s ease;
}

/* Message envoyé */
.message.sent {
    background: #007bff;
    color: white;
    align-self: flex-end;
    border-bottom-right-radius: 0;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Message reçu */
.message.received {
    background: #e0e0e0;
    align-self: flex-start;
    border-bottom-left-radius: 0;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Formulaire d'entrée */
.chat-input {
    display: flex;
    align-items: center;
    padding: 15px;
    background: #ffffff;
    border-top: 2px solid #e1e1e1;
    border-radius: 10px;
}

/* Zone de texte */
.chat-input textarea {
    flex: 1;
    border-radius: 10px;
    padding: 12px 15px;
    font-size: 14px;
    resize: none;
    border: 1px solid #ccc;
    height: 50px;
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

/* Effet de focus sur la zone de texte */
.chat-input textarea:focus {
    border-color: #007bff;
    outline: none;
}

/* Bouton envoyer */
.chat-input button {
    padding: 10px 20px;
    border-radius: 15px;
    font-size: 14px;
    background: #007bff;
    color: white;
    border: none;
    margin-left: 10px;
    cursor: pointer;
    transition: all 0.3s ease;
}

/* Effet de hover pour le bouton envoyer */
.chat-input button:hover {
    background: #0056b3;
}

/* Timestamps des messages */
.timestamp {
    font-size: 12px;
    color: rgba(0, 0, 0, 0.6);
    margin-left: 10px;
}

/* Style de la liste des discussions */
.scrollable-list {
    max-height: 450px; 
    overflow-y: auto;
    margin-bottom: 20px;
}

/* Style de la discussion dans la liste */
.list-unstyled li {
    padding: 12px;
    border-bottom: 1px solid #ddd;
    background-color: #f9f9f9;
    border-radius: 10px;
    margin-bottom: 10px;
    transition: background-color 0.3s ease;
    display: flex;
    justify-content: space-between;  
    align-items: center;
}

/* Effet au survol des discussions */
.list-unstyled li:hover {
    background-color: #f0f0f0;
}

/* Avatar de l'utilisateur dans la discussion */
.rounded-circle {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

/* Formulaire de suppression de la discussion */
.btn-danger {
    background-color: #e74c3c;
    border-color: #e74c3c;
    border-radius: 12px;
    transition: all 0.3s ease;
}

/* Effet hover pour le bouton supprimer */
.btn-danger:hover {
    background-color: #c0392b;
    border-color: #c0392b;
    text-align: center;
}

/* Formatage des boutons de suppression de message */
.dropdown-menu li button {
    background: transparent;
    border: none;
    font-size: 14px;
    color: #c0392b;
}

/* Ajouter un style au bouton modifier */
.dropdown-item {
    background-color: #f1f1f1;
}

/* Ajouter un fond pour la card contenant les discussions */
.card-body {
    padding: 20px;
    background: #f9f9f9;
    border-radius: 10px;
}

/* Réduire la taille du dropdown */
.dropdown-menu {
    min-width: 150px;
    font-size: 14px;  
    padding: 8px 0;    
    border-radius: 8px; 
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    border: 1px solid #ddd;
    opacity: 0;
    visibility: hidden;
    transform: translateY(-10px);
    transition: all 0.3s ease;
}

/* Effet de survol sur le menu dropdown */
.dropdown-menu.show {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

/* Style des éléments du dropdown */
.dropdown-item {
    padding: 10px 15px;
    color: #333;
    background-color: transparent;
    border: none;
    font-size: 14px;
    border-radius: 6px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

/* Effet de survol des éléments du dropdown */
.dropdown-item:hover {
    background-color: #f1f1f1;
    color: #007bff;
}

/* Bouton du dropdown */
.dropdown-toggle {
    background-color: transparent;
    border: none;
    padding: 6px 12px;
    font-size: 14px;
    color: #555;
    border-radius: 6px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

/* Effet de survol sur le bouton dropdown */
.dropdown-toggle:hover {
    background-color: #f0f0f0;
    color: #007bff;
}

/* Ajout d'une icône sur le bouton dropdown */
.dropdown-toggle::after {
    content: ' ▼';
    font-size: 10px;
    margin-left: 5px;
}

/* Modifier le bouton supprimer */
.dropdown-item.text-danger {
    color: #e74c3c;
}

/* Effet de survol du bouton supprimer */
.dropdown-item.text-danger:hover {
    background-color: #e74c3c;
    color: white;
}
</style>

<section>
<div class=\"container mt-4\">
    <div class=\"border rounded p-3 shadow bg-white\">

    <div class=\"container py-5\">
        <div class=\"row\">
            <!-- Sidebar des discussions -->
            <div class=\"col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0\">
                <h5 class=\"font-weight-bold mb-3 text-center text-lg-start\">Discussions</h5>
                <div class=\"card\">
                    <div class=\"card-body\">
                        <ul class=\"list-unstyled mb-0 scrollable-list\">
    {% for discussion in discussions %}
        {% if discussion.sender.id == 1 %}
            <li class=\"p-2 border-bottom bg-body-tertiary d-flex justify-content-between\">
                <a href=\"{{ path('view_discussion', {id: discussion.id}) }}\" class=\"d-flex justify-content-between text-decoration-none w-100\">
                    <div class=\"d-flex flex-row w-100\">
                        <img src=\"https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-8.webp\" alt=\"avatar\"
                             class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"50\">
                        <div class=\"pt-1\">
                            <span>
                                {{ discussion.receiver.username }}
                            </span>
                        </div>
                    </div>
                </a>
                <form action=\"{{ path('delete_discussion', {id: discussion.id}) }}\" method=\"POST\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cette discussion ?');\">
                    <button type=\"submit\" class=\"btn btn-danger btn-sm delete-btn\">🗑</button>
                </form>
            </li>
        {% endif %}
    {% else %}
        <li class=\"list-group-item text-muted\">Aucune discussion disponible.</li>
    {% endfor %}
</ul>

                        <a href=\"{{ path('create_discussion') }}\" class=\"btn btn-success mt-3\">Nouvelle discussion</a>
                    </div>
                </div>
            </div>

            <!-- Chatbox principale -->
            <div class=\"col-md-6 col-lg-7 col-xl-8\">
                <h5 class=\"font-weight-bold mb-3 text-center text-lg-start\">Message</h5>

                {% if discussion is defined and discussion %}
                    <div class=\"chat-box p-3\">
                        <ul class=\"list-unstyled chat-messages\" id=\"chat-messages\">
                            {% for message in messages %}
                                <li class=\"d-flex {% if message.sender.id == 1 %}justify-content-end{% else %}justify-content-start{% endif %} mb-3 align-items-center\">
                                    {% if message.sender.id != 1 %}
                                        <img src=\"https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp\" alt=\"avatar\"
                                             class=\"rounded-circle me-2 shadow-1-strong\" width=\"40\">
                                    {% endif %}
                                    <div class=\"dropdown\">
                                        <button class=\"btn btn-light btn-sm dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton{{ message.id }}\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                            ...
                                        </button>
                                        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton{{ message.id }}\">
                                            <li>
                                                <form action=\"{{ path('delete_message', {id: message.id}) }}\" method=\"POST\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer ce message ?');\">
                                                    <button type=\"submit\" class=\"dropdown-item text-danger\">🗑 Supprimer</button>
                                                </form>
                                            </li>
                                            <li>
                                                <a href=\"{{ path('edit_message', {id: message.id}) }}\" class=\"dropdown-item\">✏ Modifier</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"message {% if message.sender.id == 1 %}sent{% else %}received{% endif %}\">
                                        <p class=\"mb-0\">{{ message.content }}</p>
                                        <span class=\"timestamp\">{{ message.createdAt|date('d/m/Y H:i') }}</span>
                                    </div>
                                </li>
                            {% else %}
                                <li class=\"text-muted text-center\">Aucun message dans cette discussion.</li>
                            {% endfor %}
                        </ul>
                    </div>

                    <!-- Formulaire d'envoi -->
                    <form action=\"{{ path('send_message') }}\" method=\"POST\" class=\"chat-input p-3\" id=\"chat-form\">
                        <input type=\"hidden\" name=\"discussion_id\" value=\"{{ discussion.id }}\">
                        <input type=\"hidden\" name=\"sender_id\" value=\"1\">
                        <textarea name=\"content\" id=\"content\" class=\"form-control\" placeholder=\"Votre message...\"></textarea>
                        <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
                    </form>

                    <!-- Affichage des erreurs -->
                    {% for message in app.flashes('error') %}
                        <p class=\"text-danger mt-1\" style=\"font-size: 14px;\">{{ message }}</p>
                    {% endfor %}
                    <!-- Bouton supprimer la discussion -->
                    <form action=\"{{ path('delete_discussion', {id: discussion.id}) }}\" method=\"POST\" class=\"mt-3\">
                        <button type=\"submit\" class=\"btn btn-danger\">Supprimer cette discussion</button>
                    </form>

                {% else %}
                    <p class=\"text-center\">Sélectionnez une discussion pour commencer à discuter.</p>
                {% endif %}
            </div>
        </div>
    </div>
    </div>
</section>

<script>
    // Scroll automatique vers le bas
    document.addEventListener(\"DOMContentLoaded\", function () {
        var chatMessages = document.getElementById(\"chat-messages\");
        if (chatMessages) {
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }
    });

    // Scroll après envoi du message
    document.getElementById(\"chat-form\")?.addEventListener(\"submit\", function () {
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
            if (!event.target.closest('.dropdown') && !dropdown.contains(event.target)) {
                dropdown.classList.remove('show');
            }
        });
    });
</script>
<script>
    document.addEventListener(\"DOMContentLoaded\", function () {
        var dropdownElements = document.querySelectorAll('.dropdown-toggle');
        dropdownElements.forEach(function (dropdown) {
            dropdown.addEventListener('click', function (event) {
                event.stopPropagation();
                let menu = this.nextElementSibling;
                document.querySelectorAll('.dropdown-menu').forEach(m => {
                    if (m !== menu) m.classList.remove('show');
                });
                menu.classList.toggle('show');
            });
        });

        document.addEventListener('click', function () {
            document.querySelectorAll('.dropdown-menu').forEach(m => m.classList.remove('show'));
        });
    });
</script>

<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" />
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\"></script>

{% endblock %}
", "message/conversation.html.twig", "C:\\Users\\walid\\Desktop\\Nouveau dossier\\pi2025\\templates\\message\\conversation.html.twig");
    }
}
