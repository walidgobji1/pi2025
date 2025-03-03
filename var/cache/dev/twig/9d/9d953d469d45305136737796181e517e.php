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

/* message/ex.html.twig */
class __TwigTemplate_f240e34961ca6e9a494c5bd68ef5b8aa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "message/ex.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "message/ex.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "message/ex.html.twig", 1);
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
    .chat-box {
        max-height: 400px;
        overflow-y: auto;
        background: #fff;
        border-radius: 5px;
        padding: 10px;
    }

    .chat-messages {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        overflow-y: auto;
        max-height: 350px;
    }

    .message {
        max-width: 75%;
        padding: 10px 14px;
        border-radius: 20px;
        margin-bottom: 10px;
        font-size: 14px;
        display: flex;
        align-items: center;
    }

    .message.sent {
        background: #007bff;
        color: white;
        align-self: flex-end;
    }

    .message.received {
        background: #d1d1d1;
        align-self: flex-start;
    }

    .chat-input {
        display: flex;
        align-items: center;
        padding: 10px;
        background: white;
        border-top: 1px solid #ddd;
    }

    .chat-input textarea {
        flex: 1;
        margin-right: 10px;
        border-radius: 20px;
        padding: 10px;
        font-size: 14px;
        resize: none;
        border: 1px solid #ccc;
    }

    .chat-input button {
        padding: 8px 15px;
        border-radius: 20px;
        font-size: 14px;
    }
</style>

<section>
    <div class=\"container py-5\">
        <div class=\"row\">
            <!-- Sidebar des discussions -->
            <div class=\"col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0\">
                <h5 class=\"font-weight-bold mb-3 text-center text-lg-start\">Discussions</h5>
                <div class=\"card\">
                    <div class=\"card-body\">
                        <ul class=\"list-unstyled mb-0\">
                            ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["discussions"]) || array_key_exists("discussions", $context) ? $context["discussions"] : (function () { throw new RuntimeError('Variable "discussions" does not exist.', 78, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["discussion"]) {
            // line 79
            yield "                                <li class=\"p-2 border-bottom bg-body-tertiary\">
                                    <a href=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_discussion", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["discussion"], "id", [], "any", false, false, false, 80)]), "html", null, true);
            yield "\" class=\"d-flex justify-content-between text-decoration-none\">
                                        <div class=\"d-flex flex-row\">
                                            <img src=\"https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-8.webp\" alt=\"avatar\"
                                                 class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"60\">
                                            <div class=\"pt-1\">
                                                <span>";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["discussion"], "id", [], "any", false, false, false, 85), "html", null, true);
            yield "</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            ";
            $context['_iterated'] = true;
        }
        // line 90
        if (!$context['_iterated']) {
            // line 91
            yield "                                <li class=\"list-group-item text-muted\">Aucune discussion disponible.</li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['discussion'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        yield "                        </ul>
                    </div>
                </div>
            </div>

            <!-- Chatbox principale -->
            <div class=\"col-md-6 col-lg-7 col-xl-8\">
                <div class=\"chat-box p-3\">
                    <ul class=\"list-unstyled chat-messages\">
                        ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 102, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 103
            yield "                            <li class=\"d-flex ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 103), "id", [], "any", false, false, false, 103) == 1)) {
                yield "justify-content-end";
            } else {
                yield "justify-content-start";
            }
            yield " mb-3\">
                                ";
            // line 104
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 104), "id", [], "any", false, false, false, 104) != 1)) {
                // line 105
                yield "                                    <img src=\"https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp\" alt=\"avatar\"
                                         class=\"rounded-circle me-3 shadow-1-strong\" width=\"50\">
                                ";
            }
            // line 108
            yield "                                <div class=\"card w-75 ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 108), "id", [], "any", false, false, false, 108) == 1)) {
                yield "message sent";
            } else {
                yield "message received";
            }
            yield "\">
                                    <div class=\"card-header d-flex justify-content-between p-2\">
                                        <p class=\"fw-bold mb-0\">";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 110), "id", [], "any", false, false, false, 110), "html", null, true);
            yield "</p>
                                        <p class=\"text-muted small mb-0\">
                                            <i class=\"far fa-clock\"></i> ";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "createdAt", [], "any", false, false, false, 112), "d/m/Y H:i"), "html", null, true);
            yield "
                                        </p>
                                    </div>
                                    <div class=\"card-body p-2\">
                                        <p class=\"mb-0\">";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 116), "html", null, true);
            yield "</p>
                                    </div>
                                </div>
                            </li>
                        ";
            $context['_iterated'] = true;
        }
        // line 120
        if (!$context['_iterated']) {
            // line 121
            yield "                            <li class=\"text-muted text-center\">Commencez la discussion</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        yield "                    </ul>
                </div>

                <!-- Formulaire d'envoi -->
                <form action=\"";
        // line 127
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("send_message");
        yield "\" method=\"POST\" class=\"chat-input p-3\" onsubmit=\"return validateForm()\" novalidate>
                    <input type=\"hidden\" name=\"discussion_id\" value=\"";
        // line 128
        yield (((array_key_exists("discussion", $context) && (isset($context["discussion"]) || array_key_exists("discussion", $context) ? $context["discussion"] : (function () { throw new RuntimeError('Variable "discussion" does not exist.', 128, $this->source); })()))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["discussion"]) || array_key_exists("discussion", $context) ? $context["discussion"] : (function () { throw new RuntimeError('Variable "discussion" does not exist.', 128, $this->source); })()), "id", [], "any", false, false, false, 128), "html", null, true)) : (""));
        yield "\">
                    <input type=\"hidden\" name=\"sender_id\" value=\"1\"> <!-- ID actuel (fixé à 1) -->
                    <input type=\"number\" name=\"receiver_id\" class=\"form-control me-2\" placeholder=\"ID Destinataire\" style=\"width: 100px;\">
                    <textarea name=\"content\" id=\"content\" class=\"form-control\" placeholder=\"Votre message...\" required></textarea>
                    <button type=\"submit\" class=\"btn btn-primary mt-2\">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    // Scroll automatique vers le bas
    document.addEventListener(\"DOMContentLoaded\", function () {
        var chatBox = document.querySelector(\".chat-box\");
        chatBox.scrollTop = chatBox.scrollHeight;
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
        return "message/ex.html.twig";
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
        return array (  269 => 128,  265 => 127,  259 => 123,  252 => 121,  250 => 120,  241 => 116,  234 => 112,  229 => 110,  219 => 108,  214 => 105,  212 => 104,  203 => 103,  198 => 102,  187 => 93,  180 => 91,  178 => 90,  168 => 85,  160 => 80,  157 => 79,  152 => 78,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<style>
    .chat-box {
        max-height: 400px;
        overflow-y: auto;
        background: #fff;
        border-radius: 5px;
        padding: 10px;
    }

    .chat-messages {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        overflow-y: auto;
        max-height: 350px;
    }

    .message {
        max-width: 75%;
        padding: 10px 14px;
        border-radius: 20px;
        margin-bottom: 10px;
        font-size: 14px;
        display: flex;
        align-items: center;
    }

    .message.sent {
        background: #007bff;
        color: white;
        align-self: flex-end;
    }

    .message.received {
        background: #d1d1d1;
        align-self: flex-start;
    }

    .chat-input {
        display: flex;
        align-items: center;
        padding: 10px;
        background: white;
        border-top: 1px solid #ddd;
    }

    .chat-input textarea {
        flex: 1;
        margin-right: 10px;
        border-radius: 20px;
        padding: 10px;
        font-size: 14px;
        resize: none;
        border: 1px solid #ccc;
    }

    .chat-input button {
        padding: 8px 15px;
        border-radius: 20px;
        font-size: 14px;
    }
</style>

<section>
    <div class=\"container py-5\">
        <div class=\"row\">
            <!-- Sidebar des discussions -->
            <div class=\"col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0\">
                <h5 class=\"font-weight-bold mb-3 text-center text-lg-start\">Discussions</h5>
                <div class=\"card\">
                    <div class=\"card-body\">
                        <ul class=\"list-unstyled mb-0\">
                            {% for discussion in discussions %}
                                <li class=\"p-2 border-bottom bg-body-tertiary\">
                                    <a href=\"{{ path('view_discussion', {id: discussion.id}) }}\" class=\"d-flex justify-content-between text-decoration-none\">
                                        <div class=\"d-flex flex-row\">
                                            <img src=\"https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-8.webp\" alt=\"avatar\"
                                                 class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"60\">
                                            <div class=\"pt-1\">
                                                <span>{{ discussion.id }}</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            {% else %}
                                <li class=\"list-group-item text-muted\">Aucune discussion disponible.</li>
                            {% endfor %}
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Chatbox principale -->
            <div class=\"col-md-6 col-lg-7 col-xl-8\">
                <div class=\"chat-box p-3\">
                    <ul class=\"list-unstyled chat-messages\">
                        {% for message in messages %}
                            <li class=\"d-flex {% if message.sender.id == 1 %}justify-content-end{% else %}justify-content-start{% endif %} mb-3\">
                                {% if message.sender.id != 1 %}
                                    <img src=\"https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp\" alt=\"avatar\"
                                         class=\"rounded-circle me-3 shadow-1-strong\" width=\"50\">
                                {% endif %}
                                <div class=\"card w-75 {% if message.sender.id == 1 %}message sent{% else %}message received{% endif %}\">
                                    <div class=\"card-header d-flex justify-content-between p-2\">
                                        <p class=\"fw-bold mb-0\">{{ message.sender.id }}</p>
                                        <p class=\"text-muted small mb-0\">
                                            <i class=\"far fa-clock\"></i> {{ message.createdAt|date('d/m/Y H:i') }}
                                        </p>
                                    </div>
                                    <div class=\"card-body p-2\">
                                        <p class=\"mb-0\">{{ message.content }}</p>
                                    </div>
                                </div>
                            </li>
                        {% else %}
                            <li class=\"text-muted text-center\">Commencez la discussion</li>
                        {% endfor %}
                    </ul>
                </div>

                <!-- Formulaire d'envoi -->
                <form action=\"{{ path('send_message') }}\" method=\"POST\" class=\"chat-input p-3\" onsubmit=\"return validateForm()\" novalidate>
                    <input type=\"hidden\" name=\"discussion_id\" value=\"{{ discussion is defined and discussion ? discussion.id : '' }}\">
                    <input type=\"hidden\" name=\"sender_id\" value=\"1\"> <!-- ID actuel (fixé à 1) -->
                    <input type=\"number\" name=\"receiver_id\" class=\"form-control me-2\" placeholder=\"ID Destinataire\" style=\"width: 100px;\">
                    <textarea name=\"content\" id=\"content\" class=\"form-control\" placeholder=\"Votre message...\" required></textarea>
                    <button type=\"submit\" class=\"btn btn-primary mt-2\">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    // Scroll automatique vers le bas
    document.addEventListener(\"DOMContentLoaded\", function () {
        var chatBox = document.querySelector(\".chat-box\");
        chatBox.scrollTop = chatBox.scrollHeight;
    });
</script>

{% endblock %}
", "message/ex.html.twig", "C:\\Users\\walid\\Desktop\\finalPI\\pi2025\\templates\\message\\ex.html.twig");
    }
}
