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

/* home/home.html.twig */
class __TwigTemplate_d0c237bfe68670369c12ce2e5380d20d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/home.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Home";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset=\"utf-8\" />
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
  <!-- Mobile Metas -->
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
  <!-- Site Metas -->
  <link rel=\"icon\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontOffice/images/favicon.png"), "html", null, true);
        yield "\" type=\"image/gif\" />
  <meta name=\"keywords\" content=\"\" />
  <meta name=\"description\" content=\"\" />
  <meta name=\"author\" content=\"\" />

  <title>Natone</title>

  <!-- bootstrap core css -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontOffice/css/bootstrap.css"), "html", null, true);
        yield "\" />

  <!-- fonts style -->
  <link href=\"https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap\" rel=\"stylesheet\" />

  <!-- font awesome style -->
  <link href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontOffice/css/font-awesome.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
  <!-- owl carousel -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css\" integrity=\"sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=\" crossorigin=\"anonymous\" />
  <!-- Custom styles for this template -->
  <link href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontOffice/css/style.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
  <!-- responsive style -->
  <link href=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontOffice/css/responsive.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />

</head>

<body>
<div class=\"hero_area\">

    <section class=\"slider_section \">
      <div class=\"slider_bg_box\">
        <div class=\"bg_img_box\">
          <img src=\"frontOffice/images/slider-bg.jpg\" alt=\"\">
        </div>
      </div>
      <div id=\"customCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <div class=\"carousel-inner\">
          <div class=\"carousel-item active\">
            <div class=\"container \">
              <div class=\"row\">
                <div class=\"col-md-7 mx-auto\">
                  <div class=\"detail-box\">
                    <h1>
                      Bienvenu à <br>
                      Formini
                    </h1>
                    <p>
                      Formini offre un espace dédié à la création et au partage de formations pour tous.
                    </p>
                    <div class=\"btn-box\">
                      <a href=\"\" class=\"btn1\">
                        Contact Us
                      </a>
                      <a href=\"\" class=\"btn2\">
                        About Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"carousel-item\">
            <div class=\"container \">
              <div class=\"row\">
                <div class=\"col-md-7 mx-auto\">
                  <div class=\"detail-box\">
                    <h1>
                      Bienvenu à<br>
                      Formini
                    </h1>
                    <p>
                      Chaque formation est vérifiée avant publication pour garantir la qualité des contenus.
                    </p>
                    <div class=\"btn-box\">
                      
                     <a class=\"nav-link\" href=\"";
        // line 91
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        yield "\">About</a>
                        About Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"carousel-item\">
            <div class=\"container \">
              <div class=\"row\">
                <div class=\"col-md-7 mx-auto\">
                  <div class=\"detail-box\">
                    <h1>
                      Bienvenu à <br>
                      Formini
                    </h1>
                    <p>
                      Apprenez et enseignez dans un environnement collaboratif et motivant.
                    </p>
                    <div class=\"btn-box\">
                      <a href=\"\" class=\"btn1\">
                        Contact Us
                      </a>
                      <a href=\"\" class=\"btn2\">
                        About Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class=\"carousel-indicators\">
          <li data-target=\"#customCarousel\" data-slide-to=\"0\" class=\"active\"></li>
          <li data-target=\"#customCarousel\" data-slide-to=\"1\"></li>
          <li data-target=\"#customCarousel\" data-slide-to=\"2\"></li>
        </ol>
      </div>
    </section>
    <!-- end slider section -->
  </div>



  <!-- about section -->

  <section class=\"about_section layout_padding \">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-6\">
          <div class=\"img-box\">
            <img src=\"frontOffice/images/formini.jpeg\" alt=\"\">
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
              Nous sommes une équipe passionnée dédiée à offrir des solutions éducatives innovantes et accessibles. Notre mission est de connecter apprenants et formateurs pour favoriser le développement personnel et professionnel. Ensemble, nous croyons que l'éducation est la clé pour ouvrir des portes et transformer des vies.
            </p>
            <a href=\"\">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- course section start -->

  <section class=\"course_section layout_padding\">
    <div class=\"course_bg_box \">
      <div class=\"bg_img_box\">
        <img src=\"frontOffice/images/course-bg.jpg\" alt=\"\">
      </div>
    </div>
    <div class=\"container-fluid pr-0\">
      <div class=\"heading_container\">
        <h2>
          Popular courses
        </h2>
        <p>
          It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem
        </p>
      </div>
      <div class=\"course_container\">
        <div class=\" course_owl-carousel owl-carousel owl-theme \">
          <div class=\"item\">
            <div class=\"box\">
              <div class=\"img-box\">
                <img src=\"frontOffice/images/c1.jpg\" alt=\"\">
              </div>
              <div class=\"detail-box\">
                <h4>
                  Learn JavaScript
                </h4>
                <p>
                  Incidunt veritatis adipisci autem repellat possimus id eos praesentium, beatae repudiandae.
                </p>
                <a href=\"\">
                  View Detail
                </a>
              </div>
            </div>
          </div>
          <div class=\"item\">
            <div class=\"box\">
              <div class=\"img-box\">
                <img src=\"frontOffice/images/c2.jpg\" alt=\"\">
              </div>
              <div class=\"detail-box\">
                <h4>
                  Learn Python
                </h4>
                <p>
                  Incidunt veritatis adipisci autem repellat possimus id eos praesentium, beatae repudiandae.
                </p>
                <a href=\"\">
                  View Detail
                </a>
              </div>
            </div>
          </div>
          <div class=\"item\">
            <div class=\"box\">
              <div class=\"img-box\">
                <img src=\"frontOffice/images/c3.jpg\" alt=\"\">
              </div>
              <div class=\"detail-box\">
                <h4>
                  Learn Html
                </h4>
                <p>
                  Incidunt veritatis adipisci autem repellat possimus id eos praesentium, beatae repudiandae.
                </p>
                <a href=\"\">
                  View Detail
                </a>
              </div>
            </div>
          </div>
          <div class=\"item\">
            <div class=\"box\">
              <div class=\"img-box\">
                <img src=\"frontOffice/images/c4.jpg\" alt=\"\">
              </div>
              <div class=\"detail-box\">
                <h4>
                  Learn Java
                </h4>
                <p>
                  Incidunt veritatis adipisci autem repellat possimus id eos praesentium, beatae repudiandae.
                </p>
                <a href=\"\">
                  View Detail
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- course section ends -->

  <!-- teacher section -->

  <section class=\"teacher_section layout_padding\">
    <div class=\"container\">
      <div class=\"heading_container heading_center\">
        <h2>
          Our Teachers
        </h2>
      </div>
      <div class=\"row\">
        <div class=\"col-sm-6 col-lg-3\">
          <div class=\"box\">
            <div class=\"img-box\">
              <img src=\"frontOffice/images/t1.jpg\" alt=\"\">
            </div>
            <div class=\"detail-box\">
              <h5>
                Alice Stark
              </h5>
              <h6>
                Teacher
              </h6>
            </div>
          </div>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
          <div class=\"box\">
            <div class=\"img-box\">
              <img src=\"frontOffice/images/t2.jpg\" alt=\"\">
            </div>
            <div class=\"detail-box\">
              <h5>
                Martin Evans
              </h5>
              <h6>
                Teacher
              </h6>
            </div>
          </div>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
          <div class=\"box\">
            <div class=\"img-box\">
              <img src=\"frontOffice/images/t3.jpg\" alt=\"\">
            </div>
            <div class=\"detail-box\">
              <h5>
                Jane Dunn
              </h5>
              <h6>
                Teacher
              </h6>
            </div>
          </div>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
          <div class=\"box\">
            <div class=\"img-box\">
              <img src=\"frontOffice/images/t4.jpg\" alt=\"\">
            </div>
            <div class=\"detail-box\">
              <h5>
                Clara Mark
              </h5>
              <h6>
                Teacher
              </h6>
            </div>
          </div>
        </div>
      </div>
      <div class=\"btn-box\">
        <a href=\"\">
          View All
        </a>
      </div>
    </div>
  </section>

  <!-- end teacher section -->

  <!-- client section -->

  <section class=\"client_section \">
    <div class=\"container\">
      <div class=\"heading_container\">
        <h2>
          What Our Students Say
        </h2>
      </div>
      <div id=\"carouselExample2Controls\" class=\"carousel slide\" data-ride=\"carousel\">
        <div class=\"carousel-inner\">
          <div class=\"carousel-item active\">
            <div class=\"row\">
              <div class=\"col-md-11 col-lg-10 mx-auto\">
                <div class=\"box\">
                  <div class=\"img-box\">
                    <img src=\"frontOffice/images/client.jpg\" alt=\"\" />
                  </div>
                  <div class=\"detail-box\">
                    <div class=\"name\">
                      <i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>
                      <h6>
                        Siaalya
                      </h6>
                    </div>
                    <p>
                      It is a long established fact that a reader will be
                      distracted by the readable cIt is a long established fact
                      that a reader will be distracted by the readable c
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"carousel-item\">
            <div class=\"row\">
              <div class=\"col-md-11 col-lg-10 mx-auto\">
                <div class=\"box\">
                  <div class=\"img-box\">
                    <img src=\"frontOffice/images/client.jpg\" alt=\"\" />
                  </div>
                  <div class=\"detail-box\">
                    <div class=\"name\">
                      <i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>
                      <h6>
                        Siaalya
                      </h6>
                    </div>
                    <p>
                      It is a long established fact that a reader will be
                      distracted by the readable cIt is a long established fact
                      that a reader will be distracted by the readable c
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"carousel-item\">
            <div class=\"row\">
              <div class=\"col-md-11 col-lg-10 mx-auto\">
                <div class=\"box\">
                  <div class=\"img-box\">
                    <img src=\"frontOffice/images/client.jpg\" alt=\"\" />
                  </div>
                  <div class=\"detail-box\">
                    <div class=\"name\">
                      <i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>
                      <h6>
                        Siaalya
                      </h6>
                    </div>
                    <p>
                      It is a long established fact that a reader will be
                      distracted by the readable cIt is a long established fact
                      that a reader will be distracted by the readable c
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"carousel_btn-container\">
          <a class=\"carousel-control-prev\" href=\"#carouselExample2Controls\" role=\"button\" data-slide=\"prev\">
            <i class=\"fa fa-long-arrow-left\" aria-hidden=\"true\"></i>
            <span class=\"sr-only\">Previous</span>
          </a>
          <a class=\"carousel-control-next\" href=\"#carouselExample2Controls\" role=\"button\" data-slide=\"next\">
            <i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>
            <span class=\"sr-only\">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->

  <!-- contact section -->
  <section class=\"contact_section layout_padding \">
    <div class=\"container\">
      <div class=\"heading_container\">
        <h2>
          Contact Us
        </h2>
      </div>
      <div class=\"row\">
        <div class=\"col-md-6\">
          <div class=\"form_container\">
            <form action=\"\">
              <div>
                <input type=\"text\" placeholder=\"Your Name\" />
              </div>
              <div>
                <input type=\"text\" placeholder=\"Phone Number\" />
              </div>
              <div>
                <input type=\"email\" placeholder=\"Email\" />
              </div>
              <div>
                <input type=\"text\" class=\"message-box\" placeholder=\"Message\" />
              </div>
              <div class=\"btn_box\">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class=\"col-md-6\">
          <div class=\"map_container\">
            <div class=\"map\">
              <div id=\"googleMap\"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- info section -->
  <section class=\"info_section \">

    <div class=\"container\">
      <div class=\"info_top \">
        <div class=\"row \">
          <div class=\"col-sm-6 col-md-4 col-lg-3\">
            <div class=\"info_detail\">
              <a href=\"client/index.html.twig\">
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


  
</body>

</html>
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
        return "home/home.html.twig";
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
        return array (  201 => 91,  144 => 37,  139 => 35,  132 => 31,  123 => 25,  112 => 17,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %}Home{% endblock %}

{% block body %}
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset=\"utf-8\" />
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
  <!-- Mobile Metas -->
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
  <!-- Site Metas -->
  <link rel=\"icon\" href=\"{{asset('frontOffice/images/favicon.png')}}\" type=\"image/gif\" />
  <meta name=\"keywords\" content=\"\" />
  <meta name=\"description\" content=\"\" />
  <meta name=\"author\" content=\"\" />

  <title>Natone</title>

  <!-- bootstrap core css -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('frontOffice/css/bootstrap.css')}}\" />

  <!-- fonts style -->
  <link href=\"https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap\" rel=\"stylesheet\" />

  <!-- font awesome style -->
  <link href=\"{{asset('frontOffice/css/font-awesome.min.css')}}\" rel=\"stylesheet\" />
  <!-- owl carousel -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css\" integrity=\"sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=\" crossorigin=\"anonymous\" />
  <!-- Custom styles for this template -->
  <link href=\"{{asset('frontOffice/css/style.css')}}\" rel=\"stylesheet\" />
  <!-- responsive style -->
  <link href=\"{{asset('frontOffice/css/responsive.css')}}\" rel=\"stylesheet\" />

</head>

<body>
<div class=\"hero_area\">

    <section class=\"slider_section \">
      <div class=\"slider_bg_box\">
        <div class=\"bg_img_box\">
          <img src=\"frontOffice/images/slider-bg.jpg\" alt=\"\">
        </div>
      </div>
      <div id=\"customCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <div class=\"carousel-inner\">
          <div class=\"carousel-item active\">
            <div class=\"container \">
              <div class=\"row\">
                <div class=\"col-md-7 mx-auto\">
                  <div class=\"detail-box\">
                    <h1>
                      Bienvenu à <br>
                      Formini
                    </h1>
                    <p>
                      Formini offre un espace dédié à la création et au partage de formations pour tous.
                    </p>
                    <div class=\"btn-box\">
                      <a href=\"\" class=\"btn1\">
                        Contact Us
                      </a>
                      <a href=\"\" class=\"btn2\">
                        About Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"carousel-item\">
            <div class=\"container \">
              <div class=\"row\">
                <div class=\"col-md-7 mx-auto\">
                  <div class=\"detail-box\">
                    <h1>
                      Bienvenu à<br>
                      Formini
                    </h1>
                    <p>
                      Chaque formation est vérifiée avant publication pour garantir la qualité des contenus.
                    </p>
                    <div class=\"btn-box\">
                      
                     <a class=\"nav-link\" href=\"{{ path('app_about') }}\">About</a>
                        About Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"carousel-item\">
            <div class=\"container \">
              <div class=\"row\">
                <div class=\"col-md-7 mx-auto\">
                  <div class=\"detail-box\">
                    <h1>
                      Bienvenu à <br>
                      Formini
                    </h1>
                    <p>
                      Apprenez et enseignez dans un environnement collaboratif et motivant.
                    </p>
                    <div class=\"btn-box\">
                      <a href=\"\" class=\"btn1\">
                        Contact Us
                      </a>
                      <a href=\"\" class=\"btn2\">
                        About Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class=\"carousel-indicators\">
          <li data-target=\"#customCarousel\" data-slide-to=\"0\" class=\"active\"></li>
          <li data-target=\"#customCarousel\" data-slide-to=\"1\"></li>
          <li data-target=\"#customCarousel\" data-slide-to=\"2\"></li>
        </ol>
      </div>
    </section>
    <!-- end slider section -->
  </div>



  <!-- about section -->

  <section class=\"about_section layout_padding \">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-6\">
          <div class=\"img-box\">
            <img src=\"frontOffice/images/formini.jpeg\" alt=\"\">
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
              Nous sommes une équipe passionnée dédiée à offrir des solutions éducatives innovantes et accessibles. Notre mission est de connecter apprenants et formateurs pour favoriser le développement personnel et professionnel. Ensemble, nous croyons que l'éducation est la clé pour ouvrir des portes et transformer des vies.
            </p>
            <a href=\"\">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- course section start -->

  <section class=\"course_section layout_padding\">
    <div class=\"course_bg_box \">
      <div class=\"bg_img_box\">
        <img src=\"frontOffice/images/course-bg.jpg\" alt=\"\">
      </div>
    </div>
    <div class=\"container-fluid pr-0\">
      <div class=\"heading_container\">
        <h2>
          Popular courses
        </h2>
        <p>
          It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem
        </p>
      </div>
      <div class=\"course_container\">
        <div class=\" course_owl-carousel owl-carousel owl-theme \">
          <div class=\"item\">
            <div class=\"box\">
              <div class=\"img-box\">
                <img src=\"frontOffice/images/c1.jpg\" alt=\"\">
              </div>
              <div class=\"detail-box\">
                <h4>
                  Learn JavaScript
                </h4>
                <p>
                  Incidunt veritatis adipisci autem repellat possimus id eos praesentium, beatae repudiandae.
                </p>
                <a href=\"\">
                  View Detail
                </a>
              </div>
            </div>
          </div>
          <div class=\"item\">
            <div class=\"box\">
              <div class=\"img-box\">
                <img src=\"frontOffice/images/c2.jpg\" alt=\"\">
              </div>
              <div class=\"detail-box\">
                <h4>
                  Learn Python
                </h4>
                <p>
                  Incidunt veritatis adipisci autem repellat possimus id eos praesentium, beatae repudiandae.
                </p>
                <a href=\"\">
                  View Detail
                </a>
              </div>
            </div>
          </div>
          <div class=\"item\">
            <div class=\"box\">
              <div class=\"img-box\">
                <img src=\"frontOffice/images/c3.jpg\" alt=\"\">
              </div>
              <div class=\"detail-box\">
                <h4>
                  Learn Html
                </h4>
                <p>
                  Incidunt veritatis adipisci autem repellat possimus id eos praesentium, beatae repudiandae.
                </p>
                <a href=\"\">
                  View Detail
                </a>
              </div>
            </div>
          </div>
          <div class=\"item\">
            <div class=\"box\">
              <div class=\"img-box\">
                <img src=\"frontOffice/images/c4.jpg\" alt=\"\">
              </div>
              <div class=\"detail-box\">
                <h4>
                  Learn Java
                </h4>
                <p>
                  Incidunt veritatis adipisci autem repellat possimus id eos praesentium, beatae repudiandae.
                </p>
                <a href=\"\">
                  View Detail
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- course section ends -->

  <!-- teacher section -->

  <section class=\"teacher_section layout_padding\">
    <div class=\"container\">
      <div class=\"heading_container heading_center\">
        <h2>
          Our Teachers
        </h2>
      </div>
      <div class=\"row\">
        <div class=\"col-sm-6 col-lg-3\">
          <div class=\"box\">
            <div class=\"img-box\">
              <img src=\"frontOffice/images/t1.jpg\" alt=\"\">
            </div>
            <div class=\"detail-box\">
              <h5>
                Alice Stark
              </h5>
              <h6>
                Teacher
              </h6>
            </div>
          </div>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
          <div class=\"box\">
            <div class=\"img-box\">
              <img src=\"frontOffice/images/t2.jpg\" alt=\"\">
            </div>
            <div class=\"detail-box\">
              <h5>
                Martin Evans
              </h5>
              <h6>
                Teacher
              </h6>
            </div>
          </div>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
          <div class=\"box\">
            <div class=\"img-box\">
              <img src=\"frontOffice/images/t3.jpg\" alt=\"\">
            </div>
            <div class=\"detail-box\">
              <h5>
                Jane Dunn
              </h5>
              <h6>
                Teacher
              </h6>
            </div>
          </div>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
          <div class=\"box\">
            <div class=\"img-box\">
              <img src=\"frontOffice/images/t4.jpg\" alt=\"\">
            </div>
            <div class=\"detail-box\">
              <h5>
                Clara Mark
              </h5>
              <h6>
                Teacher
              </h6>
            </div>
          </div>
        </div>
      </div>
      <div class=\"btn-box\">
        <a href=\"\">
          View All
        </a>
      </div>
    </div>
  </section>

  <!-- end teacher section -->

  <!-- client section -->

  <section class=\"client_section \">
    <div class=\"container\">
      <div class=\"heading_container\">
        <h2>
          What Our Students Say
        </h2>
      </div>
      <div id=\"carouselExample2Controls\" class=\"carousel slide\" data-ride=\"carousel\">
        <div class=\"carousel-inner\">
          <div class=\"carousel-item active\">
            <div class=\"row\">
              <div class=\"col-md-11 col-lg-10 mx-auto\">
                <div class=\"box\">
                  <div class=\"img-box\">
                    <img src=\"frontOffice/images/client.jpg\" alt=\"\" />
                  </div>
                  <div class=\"detail-box\">
                    <div class=\"name\">
                      <i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>
                      <h6>
                        Siaalya
                      </h6>
                    </div>
                    <p>
                      It is a long established fact that a reader will be
                      distracted by the readable cIt is a long established fact
                      that a reader will be distracted by the readable c
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"carousel-item\">
            <div class=\"row\">
              <div class=\"col-md-11 col-lg-10 mx-auto\">
                <div class=\"box\">
                  <div class=\"img-box\">
                    <img src=\"frontOffice/images/client.jpg\" alt=\"\" />
                  </div>
                  <div class=\"detail-box\">
                    <div class=\"name\">
                      <i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>
                      <h6>
                        Siaalya
                      </h6>
                    </div>
                    <p>
                      It is a long established fact that a reader will be
                      distracted by the readable cIt is a long established fact
                      that a reader will be distracted by the readable c
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"carousel-item\">
            <div class=\"row\">
              <div class=\"col-md-11 col-lg-10 mx-auto\">
                <div class=\"box\">
                  <div class=\"img-box\">
                    <img src=\"frontOffice/images/client.jpg\" alt=\"\" />
                  </div>
                  <div class=\"detail-box\">
                    <div class=\"name\">
                      <i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>
                      <h6>
                        Siaalya
                      </h6>
                    </div>
                    <p>
                      It is a long established fact that a reader will be
                      distracted by the readable cIt is a long established fact
                      that a reader will be distracted by the readable c
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"carousel_btn-container\">
          <a class=\"carousel-control-prev\" href=\"#carouselExample2Controls\" role=\"button\" data-slide=\"prev\">
            <i class=\"fa fa-long-arrow-left\" aria-hidden=\"true\"></i>
            <span class=\"sr-only\">Previous</span>
          </a>
          <a class=\"carousel-control-next\" href=\"#carouselExample2Controls\" role=\"button\" data-slide=\"next\">
            <i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>
            <span class=\"sr-only\">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->

  <!-- contact section -->
  <section class=\"contact_section layout_padding \">
    <div class=\"container\">
      <div class=\"heading_container\">
        <h2>
          Contact Us
        </h2>
      </div>
      <div class=\"row\">
        <div class=\"col-md-6\">
          <div class=\"form_container\">
            <form action=\"\">
              <div>
                <input type=\"text\" placeholder=\"Your Name\" />
              </div>
              <div>
                <input type=\"text\" placeholder=\"Phone Number\" />
              </div>
              <div>
                <input type=\"email\" placeholder=\"Email\" />
              </div>
              <div>
                <input type=\"text\" class=\"message-box\" placeholder=\"Message\" />
              </div>
              <div class=\"btn_box\">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class=\"col-md-6\">
          <div class=\"map_container\">
            <div class=\"map\">
              <div id=\"googleMap\"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- info section -->
  <section class=\"info_section \">

    <div class=\"container\">
      <div class=\"info_top \">
        <div class=\"row \">
          <div class=\"col-sm-6 col-md-4 col-lg-3\">
            <div class=\"info_detail\">
              <a href=\"client/index.html.twig\">
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


  
</body>

</html>
{% endblock %}
", "home/home.html.twig", "C:\\Users\\Dell\\Desktop\\pi2\\pi2025\\templates\\home\\home.html.twig");
    }
}
