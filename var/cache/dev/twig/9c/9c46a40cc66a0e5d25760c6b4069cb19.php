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

/* avis/_avis_list.html.twig */
class __TwigTemplate_1349b73f1cbb2adc84364b513c699595 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/_avis_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/_avis_list.html.twig"));

        // line 1
        yield "<table class=\"table\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Note</th>
            <th>Commentaire</th>
            <th>DateCreation</th>
            <th>UpdateDate</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 13, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["avi"]) {
            // line 14
            yield "        <tr>
            <td>";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "id", [], "any", false, false, false, 15), "html", null, true);
            yield "</td>
            <td>";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "note", [], "any", false, false, false, 16), "html", null, true);
            yield "</td>
            <td>";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "commentaire", [], "any", false, false, false, 17), "html", null, true);
            yield "</td>
            <td>";
            // line 18
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "dateCreation", [], "any", false, false, false, 18)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "dateCreation", [], "any", false, false, false, 18), "Y-m-d H:i:s"), "html", null, true)) : ("N/A"));
            yield "</td>
            <td>";
            // line 19
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "updateDate", [], "any", false, false, false, 19)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "updateDate", [], "any", false, false, false, 19), "Y-m-d H:i:s"), "html", null, true)) : ("N/A"));
            yield "</td>
            <td>
                <a href=\"";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_index", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "id", [], "any", false, false, false, 21)]), "html", null, true);
            yield "\">Show</a>
                <a href=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "id", [], "any", false, false, false, 22)]), "html", null, true);
            yield "\">Edit</a>
            </td>
        </tr>
    ";
            $context['_iterated'] = true;
        }
        // line 29
        if (!$context['_iterated']) {
            // line 26
            yield "        <tr>
            <td colspan=\"6\">No records found</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['avi'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "    </tbody>
</table>
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
        return "avis/_avis_list.html.twig";
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
        return array (  114 => 30,  105 => 26,  103 => 29,  95 => 22,  91 => 21,  86 => 19,  82 => 18,  78 => 17,  74 => 16,  70 => 15,  67 => 14,  62 => 13,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<table class=\"table\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Note</th>
            <th>Commentaire</th>
            <th>DateCreation</th>
            <th>UpdateDate</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    {% for avi in avis %}
        <tr>
            <td>{{ avi.id }}</td>
            <td>{{ avi.note }}</td>
            <td>{{ avi.commentaire }}</td>
            <td>{{ avi.dateCreation ? avi.dateCreation|date('Y-m-d H:i:s') : 'N/A' }}</td>
            <td>{{ avi.updateDate ? avi.updateDate|date('Y-m-d H:i:s') : 'N/A' }}</td>
            <td>
                <a href=\"{{ path('app_avis_index', {'id': avi.id}) }}\">Show</a>
                <a href=\"{{ path('app_avis_edit', {'id': avi.id}) }}\">Edit</a>
            </td>
        </tr>
    {% else %}
        <tr>
            <td colspan=\"6\">No records found</td>
        </tr>
    {% endfor %}
    </tbody>
</table>
", "avis/_avis_list.html.twig", "C:\\Users\\Yassm\\Desktop\\newpi\\pi2025\\templates\\avis\\_avis_list.html.twig");
    }
}
