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
class __TwigTemplate_8c145454c45146c5244ed3d46a8011ca extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "message/conversation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "message/conversation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "message/conversation.html.twig", 2);
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
        yield "<style>
    .chat-container {
        display: flex;
        height: 80vh;
        border: 1px solid #ccc;
        border-radius: 8px;
        overflow: hidden;
        background: #f5f5f5;
    }
    
    .chat-sidebar {
        width: 30%;
        background: #ffffff;
        border-right: 1px solid #ddd;
        overflow-y: auto;
        padding: 10px;
    }
    
    .chat-content {
        width: 70%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        background: #e8e8e8;
    }
    
    .chat-messages {
        flex-grow: 1;
        padding: 15px;
        overflow-y: auto;
        max-height: 65vh;
        background: #fafafa;
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
    
    .chat-sidebar h4 {
        font-size: 16px;
        margin-bottom: 10px;
    }
    
    .chat-sidebar input {
        border-radius: 20px;
        padding: 8px;
        font-size: 14px;
        border: 1px solid #ccc;
    }
</style>

<div class=\"container mt-4\">
    <div class=\"chat-container\">
        <!-- Liste des discussions -->
        <div class=\"chat-sidebar\">
            <h4>Mes Discussions</h4>
            <a href=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_discussion");
        yield "\" class=\"btn btn-primary w-100 mb-2\">+ Nouvelle discussion</a>
            
            <ul class=\"list-group\">
                ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["discussions"]) || array_key_exists("discussions", $context) ? $context["discussions"] : (function () { throw new RuntimeError('Variable "discussions" does not exist.', 105, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["discussion"]) {
            // line 106
            yield "                    <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                        <a href=\"";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_discussion", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["discussion"], "id", [], "any", false, false, false, 107)]), "html", null, true);
            yield "\" class=\"text-decoration-none\">
                            Discussion #";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["discussion"], "id", [], "any", false, false, false, 108), "html", null, true);
            yield "
                        </a>
                        <form action=\"";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_discussion", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["discussion"], "id", [], "any", false, false, false, 110)]), "html", null, true);
            yield "\" method=\"POST\">
                            <input type=\"hidden\" name=\"_method\" value=\"POST\">
                            <button type=\"submit\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette discussion ?')\">x</button>
                        </form>
                    </li>
                ";
            $context['_iterated'] = true;
        }
        // line 117
        if (!$context['_iterated']) {
            // line 116
            yield "                    <li class=\"list-group-item text-muted\">Aucune discussion disponible.</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['discussion'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        yield "            </ul>
        </div>

        <!-- Messages de la discussion -->
        <div class=\"chat-content\">
            <div class=\"chat-messages\">
                ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 124, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 125
            yield "                    <div class=\"message d-flex align-items-center\">
                        <form action=\"";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_message", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 126)]), "html", null, true);
            yield "\" method=\"POST\" class=\"me-2\">
                            <input type=\"hidden\" name=\"_method\" value=\"POST\">
                            <button type=\"submit\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer ce message ?')\">x</button>
                        </form>
                        <div>
                            <strong>";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 131), "id", [], "any", false, false, false, 131), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "receiver", [], "any", false, false, false, 131), "id", [], "any", false, false, false, 131), "html", null, true);
            yield "</strong>: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 131), "html", null, true);
            yield "
                            <small class=\"text-muted d-block\">";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "createdAt", [], "any", false, false, false, 132), "d/m/Y H:i"), "html", null, true);
            yield "</small>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        // line 137
        if (!$context['_iterated']) {
            // line 136
            yield "                    <p class=\"text-muted\">Aucun message dans cette discussion.</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        yield "            </div>
            
            <!-- Formulaire d'envoi de message -->
       <form action=\"";
        // line 141
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("send_message");
        yield "\" method=\"POST\" class=\"chat-input\" onsubmit=\"return validateForm()\" novalidate>
    <input type=\"hidden\" name=\"discussion_id\" value=\"";
        // line 142
        yield (((array_key_exists("discussion", $context) && (isset($context["discussion"]) || array_key_exists("discussion", $context) ? $context["discussion"] : (function () { throw new RuntimeError('Variable "discussion" does not exist.', 142, $this->source); })()))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["discussion"]) || array_key_exists("discussion", $context) ? $context["discussion"] : (function () { throw new RuntimeError('Variable "discussion" does not exist.', 142, $this->source); })()), "id", [], "any", false, false, false, 142), "html", null, true)) : (""));
        yield "\">
    <input type=\"number\" name=\"sender_id\" class=\"form-control me-2\" placeholder=\"ID Expéditeur\" style=\"width: 100px;\">
    <input type=\"number\" name=\"receiver_id\" class=\"form-control me-2\" placeholder=\"ID Destinataire\" style=\"width: 100px;\">
    <textarea name=\"content\" id=\"content\" class=\"form-control\" placeholder=\"Votre message...\" style=\"width: 100%;\" required></textarea>
    <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
</form>

<script>
    function validateForm() {
        const content = document.getElementById('content').value.trim();
        const senderId = document.querySelector('[name=\"sender_id\"]').value.trim();
        const receiverId = document.querySelector('[name=\"receiver_id\"]').value.trim();

        // Vérifier que le contenu du message, l'ID de l'expéditeur et de destinataire ne sont pas vides
        if (content === '') {
            alert('Le message ne peut pas être vide.');
            return false; // Empêche l'envoi du formulaire
        }
        if (senderId === '' || receiverId === '') {
            alert('Les champs ID Expéditeur et ID Destinataire doivent être remplis.');
            return false; // Empêche l'envoi du formulaire
        }

        return true; // Permet l'envoi du formulaire
    }
</script>


        </div>
    </div>
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
        return array (  275 => 142,  271 => 141,  266 => 138,  259 => 136,  257 => 137,  249 => 132,  241 => 131,  233 => 126,  230 => 125,  225 => 124,  217 => 118,  210 => 116,  208 => 117,  198 => 110,  193 => 108,  189 => 107,  186 => 106,  181 => 105,  175 => 102,  76 => 5,  63 => 4,  40 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block body %}
<style>
    .chat-container {
        display: flex;
        height: 80vh;
        border: 1px solid #ccc;
        border-radius: 8px;
        overflow: hidden;
        background: #f5f5f5;
    }
    
    .chat-sidebar {
        width: 30%;
        background: #ffffff;
        border-right: 1px solid #ddd;
        overflow-y: auto;
        padding: 10px;
    }
    
    .chat-content {
        width: 70%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        background: #e8e8e8;
    }
    
    .chat-messages {
        flex-grow: 1;
        padding: 15px;
        overflow-y: auto;
        max-height: 65vh;
        background: #fafafa;
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
    
    .chat-sidebar h4 {
        font-size: 16px;
        margin-bottom: 10px;
    }
    
    .chat-sidebar input {
        border-radius: 20px;
        padding: 8px;
        font-size: 14px;
        border: 1px solid #ccc;
    }
</style>

<div class=\"container mt-4\">
    <div class=\"chat-container\">
        <!-- Liste des discussions -->
        <div class=\"chat-sidebar\">
            <h4>Mes Discussions</h4>
            <a href=\"{{ path('create_discussion') }}\" class=\"btn btn-primary w-100 mb-2\">+ Nouvelle discussion</a>
            
            <ul class=\"list-group\">
                {% for discussion in discussions %}
                    <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                        <a href=\"{{ path('view_discussion', {id: discussion.id}) }}\" class=\"text-decoration-none\">
                            Discussion #{{ discussion.id }}
                        </a>
                        <form action=\"{{ path('delete_discussion', {id: discussion.id}) }}\" method=\"POST\">
                            <input type=\"hidden\" name=\"_method\" value=\"POST\">
                            <button type=\"submit\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette discussion ?')\">x</button>
                        </form>
                    </li>
                {% else %}
                    <li class=\"list-group-item text-muted\">Aucune discussion disponible.</li>
                {% endfor %}
            </ul>
        </div>

        <!-- Messages de la discussion -->
        <div class=\"chat-content\">
            <div class=\"chat-messages\">
                {% for message in messages %}
                    <div class=\"message d-flex align-items-center\">
                        <form action=\"{{ path('delete_message', {id: message.id}) }}\" method=\"POST\" class=\"me-2\">
                            <input type=\"hidden\" name=\"_method\" value=\"POST\">
                            <button type=\"submit\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer ce message ?')\">x</button>
                        </form>
                        <div>
                            <strong>{{ message.sender.id }} à {{ message.receiver.id }}</strong>: {{ message.content }}
                            <small class=\"text-muted d-block\">{{ message.createdAt|date('d/m/Y H:i') }}</small>
                        </div>
                    </div>
                {% else %}
                    <p class=\"text-muted\">Aucun message dans cette discussion.</p>
                {% endfor %}
            </div>
            
            <!-- Formulaire d'envoi de message -->
       <form action=\"{{ path('send_message') }}\" method=\"POST\" class=\"chat-input\" onsubmit=\"return validateForm()\" novalidate>
    <input type=\"hidden\" name=\"discussion_id\" value=\"{{ discussion is defined and discussion ? discussion.id : '' }}\">
    <input type=\"number\" name=\"sender_id\" class=\"form-control me-2\" placeholder=\"ID Expéditeur\" style=\"width: 100px;\">
    <input type=\"number\" name=\"receiver_id\" class=\"form-control me-2\" placeholder=\"ID Destinataire\" style=\"width: 100px;\">
    <textarea name=\"content\" id=\"content\" class=\"form-control\" placeholder=\"Votre message...\" style=\"width: 100%;\" required></textarea>
    <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
</form>

<script>
    function validateForm() {
        const content = document.getElementById('content').value.trim();
        const senderId = document.querySelector('[name=\"sender_id\"]').value.trim();
        const receiverId = document.querySelector('[name=\"receiver_id\"]').value.trim();

        // Vérifier que le contenu du message, l'ID de l'expéditeur et de destinataire ne sont pas vides
        if (content === '') {
            alert('Le message ne peut pas être vide.');
            return false; // Empêche l'envoi du formulaire
        }
        if (senderId === '' || receiverId === '') {
            alert('Les champs ID Expéditeur et ID Destinataire doivent être remplis.');
            return false; // Empêche l'envoi du formulaire
        }

        return true; // Permet l'envoi du formulaire
    }
</script>


        </div>
    </div>
</div>
{% endblock %}", "message/conversation.html.twig", "C:\\Users\\Yassm\\Desktop\\newpi\\pi2025\\templates\\message\\conversation.html.twig");
    }
}
