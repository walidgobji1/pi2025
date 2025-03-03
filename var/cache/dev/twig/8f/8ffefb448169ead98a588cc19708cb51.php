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

/* notification/_form.html.twig */
class __TwigTemplate_eb3e7f73a3f09745340850d95e063651 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "notification/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "notification/_form.html.twig"));

        // line 1
        yield "<div class=\"notification-container\">
    <h2 class=\"notification-title\">📢 Envoyer une Notification</h2>

    <div class=\"notification-card\">
   ";
        // line 5
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "


        <!-- Global Error Display -->
        ";
        // line 9
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "vars", [], "any", false, false, false, 9), "errors", [], "any", false, false, false, 9)) > 0)) {
            // line 10
            yield "            <div class=\"form-errors\">
                <ul>
                    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "vars", [], "any", false, false, false, 12), "errors", [], "any", false, false, false, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 13
                yield "                        <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 13), "html", null, true);
                yield "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            yield "                </ul>
            </div>
        ";
        }
        // line 18
        yield "
        <div class=\"form-group\">
            ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "titre", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-input", "placeholder" => "Titre de la notification"]]);
        yield "
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "titre", [], "any", false, false, false, 21), "vars", [], "any", false, false, false, 21), "errors", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 22
            yield "                <div class=\"error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 22), "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "        </div>

        <div class=\"form-group\">
            ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "contenu", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-textarea", "placeholder" => "Tapez votre message ici..."]]);
        yield "
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "contenu", [], "any", false, false, false, 28), "vars", [], "any", false, false, false, 28), "errors", [], "any", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 29
            yield "                <div class=\"error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 29), "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "        </div>

        <div class=\"form-group\">
            <label for=\"sentAt\">📅 Date d'envoi</label>
            ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "sentAt", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "sentAt", [], "any", false, false, false, 36), "vars", [], "any", false, false, false, 36), "errors", [], "any", false, false, false, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 37
            yield "                <div class=\"error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 37), "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "        </div>

        <div class=\"form-group\">
            <label for=\"evenement\">📌 Événement concerné</label>
            ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "evenement", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "evenement", [], "any", false, false, false, 44), "vars", [], "any", false, false, false, 44), "errors", [], "any", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 45
            yield "                <div class=\"error-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 45), "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "        </div>

        <button type=\"submit\" class=\"send-button\">📨 Envoyer Notification</button>

        ";
        // line 51
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'form_end');
        yield "
    </div>
</div>

<!-- Add Some Styles -->
<style>
    .notification-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 40px;
    }

    .notification-title {
        font-size: 24px;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
    }

    .notification-card {
        background: rgb(228, 239, 254);
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 480px;
        width: 100%;
        text-align: center;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-input, .form-textarea, .form-select {
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        background: white;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .form-textarea {
        height: 100px;
        resize: none;
    }

    .send-button {
        width: 100%;
        padding: 12px;
        font-size: 18px;
        font-weight: bold;
        color: white;
        background: rgba(25, 177, 223, 0.87);
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: background 0.3s;
    }

    .send-button:hover {
        background: rgba(15, 150, 200, 1);
    }

    .error-message {
        color: red;
        font-size: 14px;
        margin-top: 5px;
    }

    .form-errors ul {
        color: red;
        font-size: 14px;
        padding-left: 20px;
    }

    .form-errors li {
        list-style-type: disc;
    }
</style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "notification/_form.html.twig";
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
        return array (  180 => 51,  174 => 47,  165 => 45,  161 => 44,  157 => 43,  151 => 39,  142 => 37,  138 => 36,  134 => 35,  128 => 31,  119 => 29,  115 => 28,  111 => 27,  106 => 24,  97 => 22,  93 => 21,  89 => 20,  85 => 18,  80 => 15,  71 => 13,  67 => 12,  63 => 10,  61 => 9,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"notification-container\">
    <h2 class=\"notification-title\">📢 Envoyer une Notification</h2>

    <div class=\"notification-card\">
   {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}


        <!-- Global Error Display -->
        {% if form.vars.errors|length > 0 %}
            <div class=\"form-errors\">
                <ul>
                    {% for error in form.vars.errors %}
                        <li>{{ error.message }}</li>
                    {% endfor %}
                </ul>
            </div>
        {% endif %}

        <div class=\"form-group\">
            {{ form_widget(form.titre, {'attr': {'class': 'form-input', 'placeholder': 'Titre de la notification'}}) }}
            {% for error in form.titre.vars.errors %}
                <div class=\"error-message\">{{ error.message }}</div>
            {% endfor %}
        </div>

        <div class=\"form-group\">
            {{ form_widget(form.contenu, {'attr': {'class': 'form-textarea', 'placeholder': 'Tapez votre message ici...'}}) }}
            {% for error in form.contenu.vars.errors %}
                <div class=\"error-message\">{{ error.message }}</div>
            {% endfor %}
        </div>

        <div class=\"form-group\">
            <label for=\"sentAt\">📅 Date d'envoi</label>
            {{ form_widget(form.sentAt, {'attr': {'class': 'form-input'}}) }}
            {% for error in form.sentAt.vars.errors %}
                <div class=\"error-message\">{{ error.message }}</div>
            {% endfor %}
        </div>

        <div class=\"form-group\">
            <label for=\"evenement\">📌 Événement concerné</label>
            {{ form_widget(form.evenement, {'attr': {'class': 'form-select'}}) }}
            {% for error in form.evenement.vars.errors %}
                <div class=\"error-message\">{{ error.message }}</div>
            {% endfor %}
        </div>

        <button type=\"submit\" class=\"send-button\">📨 Envoyer Notification</button>

        {{ form_end(form) }}
    </div>
</div>

<!-- Add Some Styles -->
<style>
    .notification-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 40px;
    }

    .notification-title {
        font-size: 24px;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
    }

    .notification-card {
        background: rgb(228, 239, 254);
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 480px;
        width: 100%;
        text-align: center;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-input, .form-textarea, .form-select {
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        background: white;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .form-textarea {
        height: 100px;
        resize: none;
    }

    .send-button {
        width: 100%;
        padding: 12px;
        font-size: 18px;
        font-weight: bold;
        color: white;
        background: rgba(25, 177, 223, 0.87);
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: background 0.3s;
    }

    .send-button:hover {
        background: rgba(15, 150, 200, 1);
    }

    .error-message {
        color: red;
        font-size: 14px;
        margin-top: 5px;
    }

    .form-errors ul {
        color: red;
        font-size: 14px;
        padding-left: 20px;
    }

    .form-errors li {
        list-style-type: disc;
    }
</style>
", "notification/_form.html.twig", "C:\\Users\\Yassm\\Desktop\\newpi\\pi2025\\templates\\notification\\_form.html.twig");
    }
}
