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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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

        <meta charset=\"UTF-8\">
        <title>
            ";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 8
        yield "        </title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontOffice/css/bootstrap.css"), "html", null, true);
        yield "\"/>
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap\" rel=\"stylesheet\" />
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css\" integrity=\"sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=\" crossorigin=\"anonymous\"/>
        <link href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontOffice/css/font-awesome.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontOffice/css/style.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontOffice/css/responsive.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>

        ";
        // line 21
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 22
        yield "
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    <title>Leçon - ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lecon"]) || array_key_exists("lecon", $context) ? $context["lecon"] : (function () { throw new RuntimeError('Variable "lecon" does not exist.', 24, $this->source); })()), "titre", [], "any", false, false, false, 24), "html", null, true);
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
        <!-- Logo -->
        <img src=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontOffice/images/formini.jpeg"), "html", null, true);
        yield "\" alt=\"Formini Logo\" style=\"max-height: 70px;\">
        
        <!-- Slogan -->
        <div class=\"slogan\">\"Apprenez, progressez, réussissez !\"</div>
    <div class=\"container\">
        <h2>Leçon : ";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lecon"]) || array_key_exists("lecon", $context) ? $context["lecon"] : (function () { throw new RuntimeError('Variable "lecon" does not exist.', 86, $this->source); })()), "titre", [], "any", false, false, false, 86), "html", null, true);
        yield "</h2>

        <div class=\"section\">
            <div class=\"section-title\">Titre</div>
            <div class=\"section-content\">";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lecon"]) || array_key_exists("lecon", $context) ? $context["lecon"] : (function () { throw new RuntimeError('Variable "lecon" does not exist.', 90, $this->source); })()), "titre", [], "any", false, false, false, 90), "html", null, true);
        yield "</div>
        </div>

        <div class=\"section\">
            <div class=\"section-title\">Contenu</div>
            <div class=\"section-content\">";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lecon"]) || array_key_exists("lecon", $context) ? $context["lecon"] : (function () { throw new RuntimeError('Variable "lecon" does not exist.', 95, $this->source); })()), "contenu", [], "any", false, false, false, 95), "html", null, true);
        yield "</div>
        </div>

        <div class=\"section\">
            <div class=\"section-title\">Date de Création</div>
            <div class=\"section-content\">";
        // line 100
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["lecon"]) || array_key_exists("lecon", $context) ? $context["lecon"] : (function () { throw new RuntimeError('Variable "lecon" does not exist.', 100, $this->source); })()), "dateCreation", [], "any", false, false, false, 100)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lecon"]) || array_key_exists("lecon", $context) ? $context["lecon"] : (function () { throw new RuntimeError('Variable "lecon" does not exist.', 100, $this->source); })()), "dateCreation", [], "any", false, false, false, 100), "Y-m-d"), "html", null, true)) : ("N/A"));
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

    // line 7
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

    // line 21
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
        return array (  228 => 21,  205 => 7,  184 => 100,  176 => 95,  168 => 90,  161 => 86,  153 => 81,  93 => 24,  89 => 22,  87 => 21,  82 => 19,  78 => 18,  74 => 17,  67 => 13,  60 => 8,  58 => 7,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
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
        <!-- Logo -->
        <img src=\"{{ asset('frontOffice/images/formini.jpeg') }}\" alt=\"Formini Logo\" style=\"max-height: 70px;\">
        
        <!-- Slogan -->
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
