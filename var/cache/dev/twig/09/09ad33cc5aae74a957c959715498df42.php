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
class __TwigTemplate_0c86d7040baddf3c9766edc4ed8705a5 extends Template
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
              Who We Are
            </h2>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti dolorem eum consequuntur ipsam repellat dolor soluta aliquid laborum, eius odit consectetur vel quasi in quidem, eveniet ab est corporis tempore.
          </p>
          <a href=\"\">
            Read More
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Info Section -->
<section class=\"info_section \">
  <div class=\"container\">
    <div class=\"info_top \">
      <div class=\"row \">
        <div class=\"col-sm-6 col-md-4 col-lg-3\">
          <div class=\"info_detail\">
            <a href=\"index.html\">
              <h4>
                Natone
              </h4>
            </a>
            <p>
              Soluta odit exercitationem rerum aperiam eos consectetur impedit delectus qui reiciendis, distinctio, asperiores fuga labore a? Magni natus.
            </p>
            <div class=\"social_box\">
              <a href=\"\">
                <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
              </a>
              <a href=\"\">
                <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
              </a>
              <a href=\"\">
                <i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i>
              </a>
              <a href=\"\">
                <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
              </a>
            </div>
          </div>
        </div>
        <div class=\"col-sm-6 col-md-4 col-lg-3 mx-auto\">
          <h4>
            Contact us
          </h4>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit
          </p>
          <div class=\"contact_nav\">
            <a href=\"\">
              <i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
              <span>
                Location
              </span>
            </a>
            <a href=\"\">
              <i class=\"fa fa-phone\" aria-hidden=\"true\"></i>
              <span>
                Call : +01 123455678990
              </span>
            </a>
            <a href=\"\">
              <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
              <span>
                Email : demo@gmail.com
              </span>
            </a>
          </div>
        </div>
        <div class=\"col-md-4\">
          <div class=\"info_form\">
            <h4>
              SIGN UP TO OUR NEWSLETTER
            </h4>
            <form action=\"\">
              <input type=\"text\" placeholder=\"Enter Your Email\" />
              <button type=\"submit\">
                Subscribe
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
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
              Who We Are
            </h2>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti dolorem eum consequuntur ipsam repellat dolor soluta aliquid laborum, eius odit consectetur vel quasi in quidem, eveniet ab est corporis tempore.
          </p>
          <a href=\"\">
            Read More
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Info Section -->
<section class=\"info_section \">
  <div class=\"container\">
    <div class=\"info_top \">
      <div class=\"row \">
        <div class=\"col-sm-6 col-md-4 col-lg-3\">
          <div class=\"info_detail\">
            <a href=\"index.html\">
              <h4>
                Natone
              </h4>
            </a>
            <p>
              Soluta odit exercitationem rerum aperiam eos consectetur impedit delectus qui reiciendis, distinctio, asperiores fuga labore a? Magni natus.
            </p>
            <div class=\"social_box\">
              <a href=\"\">
                <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
              </a>
              <a href=\"\">
                <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
              </a>
              <a href=\"\">
                <i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i>
              </a>
              <a href=\"\">
                <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
              </a>
            </div>
          </div>
        </div>
        <div class=\"col-sm-6 col-md-4 col-lg-3 mx-auto\">
          <h4>
            Contact us
          </h4>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit
          </p>
          <div class=\"contact_nav\">
            <a href=\"\">
              <i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
              <span>
                Location
              </span>
            </a>
            <a href=\"\">
              <i class=\"fa fa-phone\" aria-hidden=\"true\"></i>
              <span>
                Call : +01 123455678990
              </span>
            </a>
            <a href=\"\">
              <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
              <span>
                Email : demo@gmail.com
              </span>
            </a>
          </div>
        </div>
        <div class=\"col-md-4\">
          <div class=\"info_form\">
            <h4>
              SIGN UP TO OUR NEWSLETTER
            </h4>
            <form action=\"\">
              <input type=\"text\" placeholder=\"Enter Your Email\" />
              <button type=\"submit\">
                Subscribe
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end info_section -->
{% endblock %}
", "About/index.html.twig", "C:\\Users\\walid\\Desktop\\finalPI\\pi2025\\templates\\About\\index.html.twig");
    }
}
