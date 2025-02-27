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

/* formation/_form.html.twig */
class __TwigTemplate_ec0e86eafbc7a2002e83dc6261d1e818 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/_form.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

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

        // line 2
        yield "<div class=\"form-container\">
    <h2 class=\"form-title\">📂 ";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 3, $this->source); })()), "Ajouter")) : ("Ajouter")), "html", null, true);
        yield " une formation</h2>

    <div class=\"form-card\">
        ";
        // line 6
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

        <!-- Gestion des erreurs globales -->
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
                yield "                        <li>⚠️ ";
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
        <!-- Champ Titre -->
        <div class=\"form-group\">
            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "titre", [], "any", false, false, false, 21), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "titre", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Titre de la formation"]]);
        yield "
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "titre", [], "any", false, false, false, 23), "vars", [], "any", false, false, false, 23), "errors", [], "any", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 24
            yield "                <div class=\"error-message\">❌ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 24), "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "        </div>

        <!-- Champ Description -->
        <div class=\"form-group\">
            ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "description", [], "any", false, false, false, 30), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "description", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control form-textarea", "placeholder" => "Description de la formation"]]);
        yield "
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), "vars", [], "any", false, false, false, 32), "errors", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 33
            yield "                <div class=\"error-message\">❌ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 33), "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "        </div>

        <!-- Champ Durée -->
        <div class=\"form-group\">
            ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "duree", [], "any", false, false, false, 39), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "duree", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Durée"]]);
        yield "
            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "duree", [], "any", false, false, false, 41), "vars", [], "any", false, false, false, 41), "errors", [], "any", false, false, false, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 42
            yield "                <div class=\"error-message\">❌ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 42), "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "        </div>

        <!-- Champ Niveau -->
        <div class=\"form-group\">
            ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "niveau", [], "any", false, false, false, 48), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "niveau", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Niveau"]]);
        yield "
            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "niveau", [], "any", false, false, false, 50), "vars", [], "any", false, false, false, 50), "errors", [], "any", false, false, false, 50));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 51
            yield "                <div class=\"error-message\">❌ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 51), "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "        </div>

        <!-- Champ Date de Création -->
        <div class=\"form-group\">
            ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "dateCreation", [], "any", false, false, false, 57), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "dateCreation", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "AAAA/MM/JJ"]]);
        yield "
            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "dateCreation", [], "any", false, false, false, 59), "vars", [], "any", false, false, false, 59), "errors", [], "any", false, false, false, 59));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 60
            yield "                <div class=\"error-message\">❌ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 60), "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        yield "        </div>

        <!-- Champ Prix -->
        <div class=\"form-group\">
            ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "prix", [], "any", false, false, false, 66), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "prix", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Prix"]]);
        yield "
            ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "prix", [], "any", false, false, false, 68), "vars", [], "any", false, false, false, 68), "errors", [], "any", false, false, false, 68));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 69
            yield "                <div class=\"error-message\">❌ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 69), "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        yield "        </div>

        <!-- Sélection de la catégorie -->
        <div class=\"form-group\">
            ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "categorie", [], "any", false, false, false, 75), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "categorie", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
            ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "categorie", [], "any", false, false, false, 77), "vars", [], "any", false, false, false, 77), "errors", [], "any", false, false, false, 77));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 78
            yield "                <div class=\"error-message\">❌ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 78), "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        yield "        </div>

        <!-- Bouton de soumission -->
        <button type=\"submit\" class=\"submit-button\">💾 ";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 83, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "</button>

        ";
        // line 85
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), 'form_end');
        yield "
    </div>
</div>

<!-- Ajout du style -->
<style>
    .form-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        background-color: #f4f7fa;
        height: 100vh;
        justify-content: center;
    }

    .form-title {
        font-size: 20px;
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 15px;
        text-align: center;
    }

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

    .form-group {
        margin-bottom: 12px;
    }

    .form-label {
        font-size: 14px;
        font-weight: 500;
        color: #333;
        margin-bottom: 6px;
        display: block;
    }

    .form-control, .form-textarea, .form-select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 13px;
        background: #fafafa;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        transition: border-color 0.3s ease;
    }

    .form-control:focus, .form-textarea:focus, .form-select:focus {
        border-color: #3498db;
        outline: none;
    }

    .form-textarea {
        height: 80px;
        resize: none;
    }

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

    .submit-button:hover {
        background: linear-gradient(135deg, #1f78a4, #5e3bb3);
    }

    .error-message {
        color: red;
        font-size: 12px;
        margin-top: 4px;
    }

    .form-errors ul {
        color: red;
        font-size: 12px;
        padding-left: 15px;
    }

    .form-errors li {
        list-style-type: disc;
    }
    
</style>
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
        return "formation/_form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  309 => 85,  304 => 83,  299 => 80,  290 => 78,  286 => 77,  282 => 76,  278 => 75,  272 => 71,  263 => 69,  259 => 68,  255 => 67,  251 => 66,  245 => 62,  236 => 60,  232 => 59,  228 => 58,  224 => 57,  218 => 53,  209 => 51,  205 => 50,  201 => 49,  197 => 48,  191 => 44,  182 => 42,  178 => 41,  174 => 40,  170 => 39,  164 => 35,  155 => 33,  151 => 32,  147 => 31,  143 => 30,  137 => 26,  128 => 24,  124 => 23,  120 => 22,  116 => 21,  111 => 18,  106 => 15,  97 => 13,  93 => 12,  89 => 10,  87 => 9,  81 => 6,  75 => 3,  72 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block body %}
<div class=\"form-container\">
    <h2 class=\"form-title\">📂 {{ button_label|default('Ajouter') }} une formation</h2>

    <div class=\"form-card\">
        {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

        <!-- Gestion des erreurs globales -->
        {% if form.vars.errors|length > 0 %}
            <div class=\"form-errors\">
                <ul>
                    {% for error in form.vars.errors %}
                        <li>⚠️ {{ error.message }}</li>
                    {% endfor %}
                </ul>
            </div>
        {% endif %}

        <!-- Champ Titre -->
        <div class=\"form-group\">
            {{ form_label(form.titre, null, {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.titre, {'attr': {'class': 'form-control', 'placeholder': 'Titre de la formation'}}) }}
            {% for error in form.titre.vars.errors %}
                <div class=\"error-message\">❌ {{ error.message }}</div>
            {% endfor %}
        </div>

        <!-- Champ Description -->
        <div class=\"form-group\">
            {{ form_label(form.description, null, {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.description, {'attr': {'class': 'form-control form-textarea', 'placeholder': 'Description de la formation'}}) }}
            {% for error in form.description.vars.errors %}
                <div class=\"error-message\">❌ {{ error.message }}</div>
            {% endfor %}
        </div>

        <!-- Champ Durée -->
        <div class=\"form-group\">
            {{ form_label(form.duree, null, {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.duree, {'attr': {'class': 'form-control', 'placeholder': 'Durée'}}) }}
            {% for error in form.duree.vars.errors %}
                <div class=\"error-message\">❌ {{ error.message }}</div>
            {% endfor %}
        </div>

        <!-- Champ Niveau -->
        <div class=\"form-group\">
            {{ form_label(form.niveau, null, {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.niveau, {'attr': {'class': 'form-control', 'placeholder': 'Niveau'}}) }}
            {% for error in form.niveau.vars.errors %}
                <div class=\"error-message\">❌ {{ error.message }}</div>
            {% endfor %}
        </div>

        <!-- Champ Date de Création -->
        <div class=\"form-group\">
            {{ form_label(form.dateCreation, null, {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.dateCreation, {'attr': {'class': 'form-control', 'placeholder': 'AAAA/MM/JJ'}}) }}
            {% for error in form.dateCreation.vars.errors %}
                <div class=\"error-message\">❌ {{ error.message }}</div>
            {% endfor %}
        </div>

        <!-- Champ Prix -->
        <div class=\"form-group\">
            {{ form_label(form.prix, null, {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.prix, {'attr': {'class': 'form-control', 'placeholder': 'Prix'}}) }}
            {% for error in form.prix.vars.errors %}
                <div class=\"error-message\">❌ {{ error.message }}</div>
            {% endfor %}
        </div>

        <!-- Sélection de la catégorie -->
        <div class=\"form-group\">
            {{ form_label(form.categorie, null, {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.categorie, {'attr': {'class': 'form-select'}}) }}
            {% for error in form.categorie.vars.errors %}
                <div class=\"error-message\">❌ {{ error.message }}</div>
            {% endfor %}
        </div>

        <!-- Bouton de soumission -->
        <button type=\"submit\" class=\"submit-button\">💾 {{ button_label|default('Enregistrer') }}</button>

        {{ form_end(form) }}
    </div>
</div>

<!-- Ajout du style -->
<style>
    .form-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        background-color: #f4f7fa;
        height: 100vh;
        justify-content: center;
    }

    .form-title {
        font-size: 20px;
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 15px;
        text-align: center;
    }

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

    .form-group {
        margin-bottom: 12px;
    }

    .form-label {
        font-size: 14px;
        font-weight: 500;
        color: #333;
        margin-bottom: 6px;
        display: block;
    }

    .form-control, .form-textarea, .form-select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 13px;
        background: #fafafa;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        transition: border-color 0.3s ease;
    }

    .form-control:focus, .form-textarea:focus, .form-select:focus {
        border-color: #3498db;
        outline: none;
    }

    .form-textarea {
        height: 80px;
        resize: none;
    }

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

    .submit-button:hover {
        background: linear-gradient(135deg, #1f78a4, #5e3bb3);
    }

    .error-message {
        color: red;
        font-size: 12px;
        margin-top: 4px;
    }

    .form-errors ul {
        color: red;
        font-size: 12px;
        padding-left: 15px;
    }

    .form-errors li {
        list-style-type: disc;
    }
    
</style>
{% endblock %}
", "formation/_form.html.twig", "C:\\Users\\walid\\Desktop\\Nouveau dossier\\pi2025\\templates\\formation\\_form.html.twig");
    }
}
