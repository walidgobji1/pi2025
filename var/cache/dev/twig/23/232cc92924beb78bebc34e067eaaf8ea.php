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

/* inscription_cours/_form.html.twig */
class __TwigTemplate_c282c7ee6112c83c0cf3f078e2049c51 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription_cours/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription_cours/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        yield "
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <!-- FontAwesome (Icônes) -->
    <script src=\"https://kit.fontawesome.com/a076d05399.js\" crossorigin=\"anonymous\"></script>

    <!-- Bootstrap (si nécessaire) -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\">

    <style>
        /* Centrage du formulaire */
        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            background-color: #f4f7fa;
            height: 100vh;
            justify-content: center;
        }

        /* Titre du formulaire */
        .form-title {
            font-size: 20px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
            text-align: center;
        }

        /* Carte du formulaire */
        .form-card {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
            display: flex;
            flex-direction: column;
        }

        /* Groupes de champs */
        .form-group {
            margin-bottom: 12px;
        }

        /* Labels */
        .form-label {
            font-size: 14px;
            font-weight: 500;
            color: #333;
            margin-bottom: 6px;
            display: block;
        }

        /* Champs de formulaire */
        .form-control,
        .form-textarea,
        .form-select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 13px;
            background: #fafafa;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            transition: border-color 0.3s ease;
        }

        /* Focus sur les champs */
        .form-control:focus,
        .form-textarea:focus,
        .form-select:focus {
            border-color: #3498db;
            outline: none;
        }

        /* Textarea spécifique */
        .form-textarea {
            height: 80px;
            resize: none;
        }

        /* Bouton de soumission */
        .submit-button {
            padding: 10px;
            font-size: 14px;
            font-weight: bold;
            color: white;
            background: linear-gradient(135deg, #2980b9, #6c5ce7);
            border: none;
            border-radius: 6px;
            width: 100%;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        /* Effet hover sur le bouton */
        .submit-button:hover {
            background: linear-gradient(135deg, #1f78a4, #5e3bb3);
        }

        /* Messages d'erreur */
        .error-message {
            color: red;
            font-size: 12px;
            margin-top: 4px;
        }

        /* Liste des erreurs */
        .form-errors ul {
            color: red;
            font-size: 12px;
            padding-left: 15px;
        }

        .form-errors li {
            list-style-type: disc;
        }
    </style>
</head>
<body>

<div class=\"form-container\">
    <div class=\"form-card\">
        <h2 class=\"form-title\">Formulaire d'Inscription</h2>

        <!-- Messages d'erreur -->
        ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 134, $this->source); })()), "flashes", ["error"], "method", false, false, false, 134));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 135
            yield "            <div class=\"alert alert-danger\">
                ";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        yield "
        ";
        // line 140
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), 'form_start', ["attr" => ["id" => "inscriptionForm", "novalidate" => "novalidate"]]);
        yield "

        <!-- Nom -->
        <div class=\"form-group\">
            <label class=\"form-label\">";
        // line 144
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), "nomApprenant", [], "any", false, false, false, 144), 'label');
        yield "</label>
            ";
        // line 145
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "nomApprenant", [], "any", false, false, false, 145), 'widget', ["attr" => ["placeholder" => "Votre Nom", "class" => "form-control"]]);
        yield "
            <div class=\"error-message\">";
        // line 146
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "nomApprenant", [], "any", false, false, false, 146), 'errors');
        yield "</div>
        </div>

        <!-- Email -->
        <div class=\"form-group\">
            <label class=\"form-label\">";
        // line 151
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "email", [], "any", false, false, false, 151), 'label', ["label" => "Email"]);
        yield "</label>
            ";
        // line 152
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "email", [], "any", false, false, false, 152), 'widget', ["attr" => ["placeholder" => "Votre Email", "class" => "form-control"]]);
        yield "
            <div class=\"error-message\">";
        // line 153
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "email", [], "any", false, false, false, 153), 'errors');
        yield "</div>
        </div>

        <!-- CIN -->
        <div class=\"form-group\">
            <label class=\"form-label\">";
        // line 158
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "cin", [], "any", false, false, false, 158), 'label', ["label" => "CIN"]);
        yield "</label>
            ";
        // line 159
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "cin", [], "any", false, false, false, 159), 'widget', ["attr" => ["placeholder" => "Votre CIN", "class" => "form-control"]]);
        yield "
            <div class=\"error-message\">";
        // line 160
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "cin", [], "any", false, false, false, 160), 'errors');
        yield "</div>
        </div>

        <!-- Type de paiement -->
        <div class=\"form-group\">
            <label class=\"form-label\">";
        // line 165
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "typePaiement", [], "any", false, false, false, 165), 'label', ["label" => "Type de paiement"]);
        yield "</label>
            ";
        // line 166
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "typePaiement", [], "any", false, false, false, 166), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
            <div class=\"error-message\">";
        // line 167
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), "typePaiement", [], "any", false, false, false, 167), 'errors');
        yield "</div>
        </div>

       

        <!-- Bouton de soumission -->
        <button type=\"submit\" class=\"submit-button\">
            <i class=\"fas fa-user-check\"></i> ";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 174, $this->source); })()), "S'inscrire")) : ("S'inscrire")), "html", null, true);
        yield "
        </button>

        ";
        // line 177
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), 'form_end');
        yield "
    </div>
</div>

<!-- JavaScript pour validation -->
<script>
document.addEventListener(\"DOMContentLoaded\", function() {
    const form = document.getElementById(\"inscriptionForm\");
    form.addEventListener(\"submit\", function(event) {
        let isValid = true;
        
        form.querySelectorAll(\".form-control, .form-select\").forEach(input => {
            if (!input.value.trim()) {
                input.classList.add(\"is-invalid\");
                isValid = false;
            } else {
                input.classList.remove(\"is-invalid\");
            }
        });

        if (!isValid) {
            event.preventDefault(); // Empêche l'envoi si des champs sont vides
        }
    });
});
</script>

<!-- Bootstrap JS -->
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>

</body>
</html>


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
        return "inscription_cours/_form.html.twig";
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
        return array (  282 => 177,  276 => 174,  266 => 167,  262 => 166,  258 => 165,  250 => 160,  246 => 159,  242 => 158,  234 => 153,  230 => 152,  226 => 151,  218 => 146,  214 => 145,  210 => 144,  203 => 140,  200 => 139,  191 => 136,  188 => 135,  184 => 134,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form) }}
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <!-- FontAwesome (Icônes) -->
    <script src=\"https://kit.fontawesome.com/a076d05399.js\" crossorigin=\"anonymous\"></script>

    <!-- Bootstrap (si nécessaire) -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\">

    <style>
        /* Centrage du formulaire */
        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            background-color: #f4f7fa;
            height: 100vh;
            justify-content: center;
        }

        /* Titre du formulaire */
        .form-title {
            font-size: 20px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
            text-align: center;
        }

        /* Carte du formulaire */
        .form-card {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
            display: flex;
            flex-direction: column;
        }

        /* Groupes de champs */
        .form-group {
            margin-bottom: 12px;
        }

        /* Labels */
        .form-label {
            font-size: 14px;
            font-weight: 500;
            color: #333;
            margin-bottom: 6px;
            display: block;
        }

        /* Champs de formulaire */
        .form-control,
        .form-textarea,
        .form-select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 13px;
            background: #fafafa;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            transition: border-color 0.3s ease;
        }

        /* Focus sur les champs */
        .form-control:focus,
        .form-textarea:focus,
        .form-select:focus {
            border-color: #3498db;
            outline: none;
        }

        /* Textarea spécifique */
        .form-textarea {
            height: 80px;
            resize: none;
        }

        /* Bouton de soumission */
        .submit-button {
            padding: 10px;
            font-size: 14px;
            font-weight: bold;
            color: white;
            background: linear-gradient(135deg, #2980b9, #6c5ce7);
            border: none;
            border-radius: 6px;
            width: 100%;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        /* Effet hover sur le bouton */
        .submit-button:hover {
            background: linear-gradient(135deg, #1f78a4, #5e3bb3);
        }

        /* Messages d'erreur */
        .error-message {
            color: red;
            font-size: 12px;
            margin-top: 4px;
        }

        /* Liste des erreurs */
        .form-errors ul {
            color: red;
            font-size: 12px;
            padding-left: 15px;
        }

        .form-errors li {
            list-style-type: disc;
        }
    </style>
</head>
<body>

<div class=\"form-container\">
    <div class=\"form-card\">
        <h2 class=\"form-title\">Formulaire d'Inscription</h2>

        <!-- Messages d'erreur -->
        {% for message in app.flashes('error') %}
            <div class=\"alert alert-danger\">
                {{ message }}
            </div>
        {% endfor %}

        {{ form_start(form, {'attr': {'id': 'inscriptionForm', 'novalidate': 'novalidate'}}) }}

        <!-- Nom -->
        <div class=\"form-group\">
            <label class=\"form-label\">{{ form_label(form.nomApprenant) }}</label>
            {{ form_widget(form.nomApprenant, {'attr': {'placeholder': 'Votre Nom', 'class': 'form-control'}}) }}
            <div class=\"error-message\">{{ form_errors(form.nomApprenant) }}</div>
        </div>

        <!-- Email -->
        <div class=\"form-group\">
            <label class=\"form-label\">{{ form_label(form.email, \"Email\") }}</label>
            {{ form_widget(form.email, {'attr': {'placeholder': 'Votre Email', 'class': 'form-control'}}) }}
            <div class=\"error-message\">{{ form_errors(form.email) }}</div>
        </div>

        <!-- CIN -->
        <div class=\"form-group\">
            <label class=\"form-label\">{{ form_label(form.cin, \"CIN\") }}</label>
            {{ form_widget(form.cin, {'attr': {'placeholder': 'Votre CIN', 'class': 'form-control'}}) }}
            <div class=\"error-message\">{{ form_errors(form.cin) }}</div>
        </div>

        <!-- Type de paiement -->
        <div class=\"form-group\">
            <label class=\"form-label\">{{ form_label(form.typePaiement, \"Type de paiement\") }}</label>
            {{ form_widget(form.typePaiement, {'attr': {'class': 'form-select'}}) }}
            <div class=\"error-message\">{{ form_errors(form.typePaiement) }}</div>
        </div>

       

        <!-- Bouton de soumission -->
        <button type=\"submit\" class=\"submit-button\">
            <i class=\"fas fa-user-check\"></i> {{ button_label|default(\"S'inscrire\") }}
        </button>

        {{ form_end(form) }}
    </div>
</div>

<!-- JavaScript pour validation -->
<script>
document.addEventListener(\"DOMContentLoaded\", function() {
    const form = document.getElementById(\"inscriptionForm\");
    form.addEventListener(\"submit\", function(event) {
        let isValid = true;
        
        form.querySelectorAll(\".form-control, .form-select\").forEach(input => {
            if (!input.value.trim()) {
                input.classList.add(\"is-invalid\");
                isValid = false;
            } else {
                input.classList.remove(\"is-invalid\");
            }
        });

        if (!isValid) {
            event.preventDefault(); // Empêche l'envoi si des champs sont vides
        }
    });
});
</script>

<!-- Bootstrap JS -->
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>

</body>
</html>


", "inscription_cours/_form.html.twig", "D:\\esprit\\PI\\final\\pi2025\\templates\\inscription_cours\\_form.html.twig");
    }
}
