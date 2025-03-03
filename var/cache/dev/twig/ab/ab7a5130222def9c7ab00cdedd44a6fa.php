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

/* @email/default/notification/body.txt.twig */
<<<<<<<< HEAD:var/cache/dev/twig/ee/ee85c1c3f0eeddc64d0eb484f0bbe498.php
class __TwigTemplate_784d575ebff9aea3ea397049aba8e661 extends Template
========
class __TwigTemplate_eb22d476ce3bc8b6f6344cc4b50ffe25 extends Template
>>>>>>>> 8611b6e672bfc92a3280990b1971f5e769fb70aa:var/cache/dev/twig/ab/ab7a5130222def9c7ab00cdedd44a6fa.php
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
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@email/zurb_2/notification/body.txt.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@email/default/notification/body.txt.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@email/default/notification/body.txt.twig"));

        $this->parent = $this->loadTemplate("@email/zurb_2/notification/body.txt.twig", "@email/default/notification/body.txt.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@email/default/notification/body.txt.twig";
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
        return array (  39 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@email/zurb_2/notification/body.txt.twig\" %}
<<<<<<<< HEAD:var/cache/dev/twig/ee/ee85c1c3f0eeddc64d0eb484f0bbe498.php
", "@email/default/notification/body.txt.twig", "C:\\Users\\walid\\Desktop\\Nouveau dossier (2)\\pi2025\\vendor\\symfony\\twig-bridge\\Resources\\views\\Email\\default\\notification\\body.txt.twig");
========
", "@email/default/notification/body.txt.twig", "C:\\Users\\Dell\\Desktop\\pi2\\pi2025\\vendor\\symfony\\twig-bridge\\Resources\\views\\Email\\default\\notification\\body.txt.twig");
>>>>>>>> 8611b6e672bfc92a3280990b1971f5e769fb70aa:var/cache/dev/twig/ab/ab7a5130222def9c7ab00cdedd44a6fa.php
    }
}
