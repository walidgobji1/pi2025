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

/* About/index.html.twig */
class __TwigTemplate_8056d5b0e181e25db223f07ee0b69557 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "About/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "About/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "About/index.html.twig", 1);
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
        yield "<!-- About Section -->
<section class=\"about_section layout_padding \">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-6\">
        <div class=\"img-box\">
          <img src=\"frontOffice/images/about-img.jpg\" alt=\"\">
        </div>
      </div>
      <div class=\"col-md-6\">
        <div class=\"detail-box\">
          <div class=\"heading_container\">
            <h2>
              qui nous sommes
            </h2>
          </div>
          <p>
Formini est une plateforme innovante et inspirante, dédiée à l'apprentissage et au développement des compétences pour tous. Notre mission est de rendre l'éducation accessible, engageante et adaptée aux besoins de chacun, que ce soit pour progresser dans sa carrière ou pour explorer de nouvelles passions. Nous croyons en la puissance de l'apprentissage continu pour transformer les vies et ouvrir de nouvelles opportunités. Avec une équipe passionnée d'experts et de créatifs, nous avons conçu une plateforme intuitive, riche en ressources et en outils pratiques. Formini, c'est bien plus qu'une application : c'est une communauté bienveillante où l'entraide et la motivation sont au cœur de l'expérience. Rejoignez-nous et découvrez un espace où chaque pas compte, où chaque compétence acquise est une victoire. Ensemble, construisons un avenir où chacun peut réaliser son plein potentiel. Bienvenue chez Formini, votre partenaire pour apprendre, grandir et réussir !  </p>
          
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Info Section -->

<!-- end info_section -->
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
        return "About/index.html.twig";
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
        return array (  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<!-- About Section -->
<section class=\"about_section layout_padding \">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-6\">
        <div class=\"img-box\">
          <img src=\"frontOffice/images/about-img.jpg\" alt=\"\">
        </div>
      </div>
      <div class=\"col-md-6\">
        <div class=\"detail-box\">
          <div class=\"heading_container\">
            <h2>
              qui nous sommes
            </h2>
          </div>
          <p>
Formini est une plateforme innovante et inspirante, dédiée à l'apprentissage et au développement des compétences pour tous. Notre mission est de rendre l'éducation accessible, engageante et adaptée aux besoins de chacun, que ce soit pour progresser dans sa carrière ou pour explorer de nouvelles passions. Nous croyons en la puissance de l'apprentissage continu pour transformer les vies et ouvrir de nouvelles opportunités. Avec une équipe passionnée d'experts et de créatifs, nous avons conçu une plateforme intuitive, riche en ressources et en outils pratiques. Formini, c'est bien plus qu'une application : c'est une communauté bienveillante où l'entraide et la motivation sont au cœur de l'expérience. Rejoignez-nous et découvrez un espace où chaque pas compte, où chaque compétence acquise est une victoire. Ensemble, construisons un avenir où chacun peut réaliser son plein potentiel. Bienvenue chez Formini, votre partenaire pour apprendre, grandir et réussir !  </p>
          
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Info Section -->

<!-- end info_section -->
{% endblock %}
", "About/index.html.twig", "D:\\esprit\\PI\\final\\pi2025\\templates\\About\\index.html.twig");
    }
}
