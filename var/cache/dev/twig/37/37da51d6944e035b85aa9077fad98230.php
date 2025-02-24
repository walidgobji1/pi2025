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

/* lecon/showPdf.html.twig */
class __TwigTemplate_4daebdf880cda78e8f40a9daf73b9367 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lecon/showPdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lecon/showPdf.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    <title>Leçon - ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lecon"]) || array_key_exists("lecon", $context) ? $context["lecon"] : (function () { throw new RuntimeError('Variable "lecon" does not exist.', 5, $this->source); })()), "titre", [], "any", false, false, false, 5), "html", null, true);
        yield "</title>
    <style>
        body {
            font-family: 'Garamond', serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }

        .container {
            width: 650px;
            margin: auto;
            background: #ffffff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 15px;
        }

        .section {
            margin-bottom: 15px;
            padding: 10px;
            background: #f2f2f2;
            border-radius: 5px;
        }

        .section-title {
            font-weight: bold;
            font-size: 16px;
            color: #333;
            margin-bottom: 5px;
        }

        .section-content {
            font-size: 14px;
            color: #555;
        }

        .quote {
            margin-top: 30px;
            padding: 15px;
            background: #2c3e50;
            color: #fff;
            font-style: italic;
            text-align: center;
            border-radius: 5px;
        }
    </style>
</head>
<body>
 <div class=\"container\">
    
        <img src=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontOffice/images/formini.jpeg"), "html", null, true);
        yield "\" alt=\"Formini\" style=\"max-height: 70px;\">
        
       
        <div class=\"slogan\">\"Apprenez, progressez, réussissez !\"</div>
    <div class=\"container\">
        <h2>Leçon : ";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lecon"]) || array_key_exists("lecon", $context) ? $context["lecon"] : (function () { throw new RuntimeError('Variable "lecon" does not exist.', 67, $this->source); })()), "titre", [], "any", false, false, false, 67), "html", null, true);
        yield "</h2>

        <div class=\"section\">
            <div class=\"section-title\">Titre</div>
            <div class=\"section-content\">";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lecon"]) || array_key_exists("lecon", $context) ? $context["lecon"] : (function () { throw new RuntimeError('Variable "lecon" does not exist.', 71, $this->source); })()), "titre", [], "any", false, false, false, 71), "html", null, true);
        yield "</div>
        </div>

        <div class=\"section\">
            <div class=\"section-title\">Contenu</div>
            <div class=\"section-content\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lecon"]) || array_key_exists("lecon", $context) ? $context["lecon"] : (function () { throw new RuntimeError('Variable "lecon" does not exist.', 76, $this->source); })()), "contenu", [], "any", false, false, false, 76), "html", null, true);
        yield "</div>
        </div>

        <div class=\"section\">
            <div class=\"section-title\">Date de Création</div>
            <div class=\"section-content\">";
        // line 81
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["lecon"]) || array_key_exists("lecon", $context) ? $context["lecon"] : (function () { throw new RuntimeError('Variable "lecon" does not exist.', 81, $this->source); })()), "dateCreation", [], "any", false, false, false, 81)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lecon"]) || array_key_exists("lecon", $context) ? $context["lecon"] : (function () { throw new RuntimeError('Variable "lecon" does not exist.', 81, $this->source); })()), "dateCreation", [], "any", false, false, false, 81), "Y-m-d"), "html", null, true)) : ("N/A"));
        yield "</div>
        </div>

        <div class=\"quote\">
            \"L'éducation est l'arme la plus puissante que vous puissiez utiliser pour changer le monde.\" - Nelson Mandela
        </div>
    </div>
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
        return "lecon/showPdf.html.twig";
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
        return array (  145 => 81,  137 => 76,  129 => 71,  122 => 67,  114 => 62,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    <title>Leçon - {{ lecon.titre }}</title>
    <style>
        body {
            font-family: 'Garamond', serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }

        .container {
            width: 650px;
            margin: auto;
            background: #ffffff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 15px;
        }

        .section {
            margin-bottom: 15px;
            padding: 10px;
            background: #f2f2f2;
            border-radius: 5px;
        }

        .section-title {
            font-weight: bold;
            font-size: 16px;
            color: #333;
            margin-bottom: 5px;
        }

        .section-content {
            font-size: 14px;
            color: #555;
        }

        .quote {
            margin-top: 30px;
            padding: 15px;
            background: #2c3e50;
            color: #fff;
            font-style: italic;
            text-align: center;
            border-radius: 5px;
        }
    </style>
</head>
<body>
 <div class=\"container\">
    
        <img src=\"{{ asset('frontOffice/images/formini.jpeg') }}\" alt=\"Formini\" style=\"max-height: 70px;\">
        
       
        <div class=\"slogan\">\"Apprenez, progressez, réussissez !\"</div>
    <div class=\"container\">
        <h2>Leçon : {{ lecon.titre }}</h2>

        <div class=\"section\">
            <div class=\"section-title\">Titre</div>
            <div class=\"section-content\">{{ lecon.titre }}</div>
        </div>

        <div class=\"section\">
            <div class=\"section-title\">Contenu</div>
            <div class=\"section-content\">{{ lecon.contenu }}</div>
        </div>

        <div class=\"section\">
            <div class=\"section-title\">Date de Création</div>
            <div class=\"section-content\">{{ lecon.dateCreation ? lecon.dateCreation|date('Y-m-d') : 'N/A' }}</div>
        </div>

        <div class=\"quote\">
            \"L'éducation est l'arme la plus puissante que vous puissiez utiliser pour changer le monde.\" - Nelson Mandela
        </div>
    </div>
</body>
</html>
", "lecon/showPdf.html.twig", "C:\\Users\\walid\\Desktop\\Nouveau dossier\\pi2025\\templates\\lecon\\showPdf.html.twig");
    }
}
