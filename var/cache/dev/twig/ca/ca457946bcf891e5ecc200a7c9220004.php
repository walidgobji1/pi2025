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
class __TwigTemplate_a14683d22295a4fafba4bea5a6e931b7 extends Template
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
    <title>Formulaire d'Inscription</title>
    
    <script src=\"https://kit.fontawesome.com/a076d05399.js\" crossorigin=\"anonymous\"></script>

    <style>
        
        /* Style du header */
        header {
            background-color: #007bff;
            color: white;
            padding: 15px;
            text-align: center;
        }

        /* Style du footer */
        footer {
            background-color: #f8f9fa;
            color: #007bff;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .btn_box {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            border: none;
        }

        .form_container {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: auto;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            max-width: 100%;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .error {
            color: red;
            font-size: 14px;
        }

        body {
            margin: 0;
            background-color: #f0f2f5;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        section {
            flex: 1;
        }
    </style>
</head>
<body>

<section class=\"contact_section layout_padding\">
    <div class=\"container\">
        <div class=\"form_container\">
            ";
        // line 94
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), 'form_start');
        yield "

            <!-- Nom de l'apprenant -->
            <div class=\"form-group\">
                ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "nomApprenant", [], "any", false, false, false, 98), 'label', ["label" => "Nom de l'apprenant"]);
        yield "
                ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "nomApprenant", [], "any", false, false, false, 99), 'widget', ["attr" => ["placeholder" => "Votre Nom", "class" => "form-control"]]);
        yield "
                ";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "nomApprenant", [], "any", false, false, false, 100), 'errors');
        yield "
            </div>
            
            <!-- Nom de la formation -->
            

            <!-- Email -->
            <div class=\"form-group\">
                ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "email", [], "any", false, false, false, 108), 'label', ["label" => "Email"]);
        yield "
                ";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "email", [], "any", false, false, false, 109), 'widget', ["attr" => ["placeholder" => "Votre Email", "class" => "form-control"]]);
        yield "
                ";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "email", [], "any", false, false, false, 110), 'errors');
        yield "
            </div>

            <!-- CIN -->
            <div class=\"form-group\">
                ";
        // line 115
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "cin", [], "any", false, false, false, 115), 'label', ["label" => "CIN"]);
        yield "
                ";
        // line 116
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "cin", [], "any", false, false, false, 116), 'widget', ["attr" => ["placeholder" => "Votre CIN", "class" => "form-control"]]);
        yield "
                ";
        // line 117
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "cin", [], "any", false, false, false, 117), 'errors');
        yield "
            </div>

            <!-- Type de paiement -->
            <div class=\"form-group\">
                ";
        // line 122
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "typePaiement", [], "any", false, false, false, 122), 'label', ["label" => "Type de paiement"]);
        yield "
                ";
        // line 123
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "typePaiement", [], "any", false, false, false, 123), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 124
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "typePaiement", [], "any", false, false, false, 124), 'errors');
        yield "
            </div>

            <!-- Apprenant -->
            <div class=\"form-group\">
                ";
        // line 129
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "apprenant", [], "any", false, false, false, 129), 'label', ["label" => "Sélectionner un apprenant"]);
        yield "
                ";
        // line 130
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "apprenant", [], "any", false, false, false, 130), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 131
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "apprenant", [], "any", false, false, false, 131), 'errors');
        yield "
            </div>

            

            <!-- Bouton de soumission -->
            <div class=\"btn_box\">
                <button type=\"submit\" class=\"btn btn-primary\">
                    ";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 139, $this->source); })()), "S'inscrire")) : ("S'inscrire")), "html", null, true);
        yield "
                </button>
            </div>

            ";
        // line 143
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), 'form_end');
        yield "
        </div>
    </div>
</section>

</body>
</html>


";
        // line 152
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), 'form_end');
        yield "
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
        return array (  256 => 152,  244 => 143,  237 => 139,  226 => 131,  222 => 130,  218 => 129,  210 => 124,  206 => 123,  202 => 122,  194 => 117,  190 => 116,  186 => 115,  178 => 110,  174 => 109,  170 => 108,  159 => 100,  155 => 99,  151 => 98,  144 => 94,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form) }}
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Formulaire d'Inscription</title>
    
    <script src=\"https://kit.fontawesome.com/a076d05399.js\" crossorigin=\"anonymous\"></script>

    <style>
        
        /* Style du header */
        header {
            background-color: #007bff;
            color: white;
            padding: 15px;
            text-align: center;
        }

        /* Style du footer */
        footer {
            background-color: #f8f9fa;
            color: #007bff;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .btn_box {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            border: none;
        }

        .form_container {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: auto;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            max-width: 100%;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .error {
            color: red;
            font-size: 14px;
        }

        body {
            margin: 0;
            background-color: #f0f2f5;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        section {
            flex: 1;
        }
    </style>
</head>
<body>

<section class=\"contact_section layout_padding\">
    <div class=\"container\">
        <div class=\"form_container\">
            {{ form_start(form) }}

            <!-- Nom de l'apprenant -->
            <div class=\"form-group\">
                {{ form_label(form.nomApprenant, \"Nom de l'apprenant\") }}
                {{ form_widget(form.nomApprenant, {'attr': {'placeholder': 'Votre Nom', 'class': 'form-control'}}) }}
                {{ form_errors(form.nomApprenant) }}
            </div>
            
            <!-- Nom de la formation -->
            

            <!-- Email -->
            <div class=\"form-group\">
                {{ form_label(form.email, \"Email\") }}
                {{ form_widget(form.email, {'attr': {'placeholder': 'Votre Email', 'class': 'form-control'}}) }}
                {{ form_errors(form.email) }}
            </div>

            <!-- CIN -->
            <div class=\"form-group\">
                {{ form_label(form.cin, \"CIN\") }}
                {{ form_widget(form.cin, {'attr': {'placeholder': 'Votre CIN', 'class': 'form-control'}}) }}
                {{ form_errors(form.cin) }}
            </div>

            <!-- Type de paiement -->
            <div class=\"form-group\">
                {{ form_label(form.typePaiement, \"Type de paiement\") }}
                {{ form_widget(form.typePaiement, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.typePaiement) }}
            </div>

            <!-- Apprenant -->
            <div class=\"form-group\">
                {{ form_label(form.apprenant, \"Sélectionner un apprenant\") }}
                {{ form_widget(form.apprenant, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.apprenant) }}
            </div>

            

            <!-- Bouton de soumission -->
            <div class=\"btn_box\">
                <button type=\"submit\" class=\"btn btn-primary\">
                    {{ button_label|default(\"S'inscrire\") }}
                </button>
            </div>

            {{ form_end(form) }}
        </div>
    </div>
</section>

</body>
</html>


{{ form_end(form) }}
", "inscription_cours/_form.html.twig", "C:\\Users\\Yassm\\Desktop\\newpi\\pi2025\\templates\\inscription_cours\\_form.html.twig");
    }
}
