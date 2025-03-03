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

/* notification/index.html.twig */
class __TwigTemplate_d069bda185f750a7bcc41dc344f35225 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "notification/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "notification/index.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "notification/index.html.twig", 1);
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

        yield "Notification index";
        
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
<h2 class=\"text-center mb-4\">Liste des Notifications</h2>

<table class=\"table table-striped\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Titre</th>
            <th>Contenu</th>
            <th>Événement Associé</th>
            <th>SentAt</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 21, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 22
            yield "        <tr class=\"notification-row\">
            <td>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "id", [], "any", false, false, false, 23), "html", null, true);
            yield "</td>
            <td>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "titre", [], "any", false, false, false, 24), "html", null, true);
            yield "</td>
            <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "contenu", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
            <td>
                ";
            // line 27
            if (CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "evenement", [], "any", false, false, false, 27)) {
                // line 28
                yield "                    <span class=\"event-title\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "evenement", [], "any", false, false, false, 28), "titre", [], "any", false, false, false, 28), "html", null, true);
                yield "</span>
                ";
            } else {
                // line 30
                yield "                    <span class=\"text-muted\">Aucun événement</span>
                ";
            }
            // line 32
            yield "            </td>
            <td>";
            // line 33
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "sentAt", [], "any", false, false, false, 33)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "sentAt", [], "any", false, false, false, 33), "Y-m-d H:i:s"), "html", null, true)) : ("Non défini"));
            yield "</td>
            <td>
                <a href=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notification_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\">Voir</a>
                <a href=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notification_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">Modifier</a>
            </td>
        </tr>
    ";
            $context['_iterated'] = true;
        }
        // line 39
        if (!$context['_iterated']) {
            // line 40
            yield "        <tr>
            <td colspan=\"6\" class=\"text-center\">Aucune notification trouvée</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['notification'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "    </tbody>
</table>

<style>
    .notification-row {
        background-color: #f9f9f9;
        transition: background-color 0.3s ease;
    }

    .notification-row:hover {
        background-color: #f1f1f1;
    }

    .event-title {
        font-weight: bold;
        color: #007bff;
    }

    .btn-sm {
        margin: 0 5px;
    }
</style>

";
        // line 67
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 106
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 67
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

        // line 68
        yield "<script>
document.getElementById(\"notificationForm\").addEventListener(\"submit\", function(event) {
    event.preventDefault();

    let titre = document.getElementById(\"titre\").value;
    let contenu = document.getElementById(\"contenu\").value;

    fetch(\"/notification/new/1\", { // Replace 1 with the actual event ID
        method: \"POST\",
        headers: {
            \"Content-Type\": \"application/json\"
        },
        body: JSON.stringify({ titre: titre, contenu: contenu })
    })
    .then(response => response.json())
    .then(data => {
        if (data.error) {
            alert(data.error);
            return;
        }

        // Add the new notification to the list
        let notificationList = document.getElementById(\"notificationList\");
        let newNotif = document.createElement(\"div\");
        newNotif.classList.add(\"notification-item\");
        newNotif.innerHTML = `<strong>\${data.titre}</strong>
                              <p>\${data.contenu}</p>
                              <small>\${data.sentAt}</small>`;
        notificationList.prepend(newNotif); // Add to the beginning of the list

        // Clear the form fields
        document.getElementById(\"titre\").value = \"\";
        document.getElementById(\"contenu\").value = \"\";
    })
    .catch(error => console.error(\"Erreur :\", error));
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
        return "notification/index.html.twig";
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
        return array (  234 => 68,  221 => 67,  209 => 106,  207 => 67,  182 => 44,  173 => 40,  171 => 39,  163 => 36,  159 => 35,  154 => 33,  151 => 32,  147 => 30,  141 => 28,  139 => 27,  134 => 25,  130 => 24,  126 => 23,  123 => 22,  118 => 21,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Notification index{% endblock %}

{% block body %}

<h2 class=\"text-center mb-4\">Liste des Notifications</h2>

<table class=\"table table-striped\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Titre</th>
            <th>Contenu</th>
            <th>Événement Associé</th>
            <th>SentAt</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    {% for notification in notifications %}
        <tr class=\"notification-row\">
            <td>{{ notification.id }}</td>
            <td>{{ notification.titre }}</td>
            <td>{{ notification.contenu }}</td>
            <td>
                {% if notification.evenement %}
                    <span class=\"event-title\">{{ notification.evenement.titre }}</span>
                {% else %}
                    <span class=\"text-muted\">Aucun événement</span>
                {% endif %}
            </td>
            <td>{{ notification.sentAt ? notification.sentAt|date('Y-m-d H:i:s') : 'Non défini' }}</td>
            <td>
                <a href=\"{{ path('app_notification_show', {'id': notification.id}) }}\" class=\"btn btn-info btn-sm\">Voir</a>
                <a href=\"{{ path('app_notification_edit', {'id': notification.id}) }}\" class=\"btn btn-warning btn-sm\">Modifier</a>
            </td>
        </tr>
    {% else %}
        <tr>
            <td colspan=\"6\" class=\"text-center\">Aucune notification trouvée</td>
        </tr>
    {% endfor %}
    </tbody>
</table>

<style>
    .notification-row {
        background-color: #f9f9f9;
        transition: background-color 0.3s ease;
    }

    .notification-row:hover {
        background-color: #f1f1f1;
    }

    .event-title {
        font-weight: bold;
        color: #007bff;
    }

    .btn-sm {
        margin: 0 5px;
    }
</style>

{% block javascripts %}
<script>
document.getElementById(\"notificationForm\").addEventListener(\"submit\", function(event) {
    event.preventDefault();

    let titre = document.getElementById(\"titre\").value;
    let contenu = document.getElementById(\"contenu\").value;

    fetch(\"/notification/new/1\", { // Replace 1 with the actual event ID
        method: \"POST\",
        headers: {
            \"Content-Type\": \"application/json\"
        },
        body: JSON.stringify({ titre: titre, contenu: contenu })
    })
    .then(response => response.json())
    .then(data => {
        if (data.error) {
            alert(data.error);
            return;
        }

        // Add the new notification to the list
        let notificationList = document.getElementById(\"notificationList\");
        let newNotif = document.createElement(\"div\");
        newNotif.classList.add(\"notification-item\");
        newNotif.innerHTML = `<strong>\${data.titre}</strong>
                              <p>\${data.contenu}</p>
                              <small>\${data.sentAt}</small>`;
        notificationList.prepend(newNotif); // Add to the beginning of the list

        // Clear the form fields
        document.getElementById(\"titre\").value = \"\";
        document.getElementById(\"contenu\").value = \"\";
    })
    .catch(error => console.error(\"Erreur :\", error));
});
</script>
{% endblock %}

{% endblock %}
", "notification/index.html.twig", "C:\\Users\\Dell\\Desktop\\pi2\\pi2025\\templates\\notification\\index.html.twig");
    }
}
