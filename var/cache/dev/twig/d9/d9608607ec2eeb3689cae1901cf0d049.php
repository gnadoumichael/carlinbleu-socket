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

/* content/reception.html.twig */
class __TwigTemplate_b035345b8923b28af7f3943110f30f96 extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/reception.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/reception.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "Hello ReceptionController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <div class=\"col-lg-12 mb-4\">
        <!-- Color System -->
        <div class=\"card shadow mb-4\" style=\"border-top: 2px solid #4e73df\" id=\"commander\">

            <div class=\"card-header py-3 bg-pri\">
                <h6 class=\"m-0 font-weight-bold\" style=\"color:white\">BOITE DE RÉCEPTION</h6>
            </div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">

                    <table class=\"d table-bordered\" cellpadding=\"2\" width=\"100%\">
                        <thead>
                        <tr class=\"btn-light text-center\">
                            <td width=\"20\"></td>
                            <td width=\"130\">DATE</td>
                            <td width=\"200\">DOCUMENTS</td>
                            <td width=\"130\">OBJET</td>
                            <td width=\"130\">ENVOYÉ PAR</td>
                         </tr>
                        </thead>
                        <tbody>
                        ";
        // line 27
        $context["d"] = 0;
        // line 28
        yield "                        <tr class=\"clickable\" data-toggle=\"collapse\" data-target=\"#group-of-rows-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new RuntimeError('Variable "d" does not exist.', 28, $this->source); })()), "html", null, true);
        yield "\"
                            aria-expanded=\"false\" aria-controls=\"group-of-rows-";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new RuntimeError('Variable "d" does not exist.', 29, $this->source); })()), "html", null, true);
        yield "\">
                            <td align=\"center\"><i class=\"fa fa-plus text-pri\" aria-hidden=\"true\"></i></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                        </tbody>
                        <tbody id=\"group-of-rows-";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new RuntimeError('Variable "d" does not exist.', 38, $this->source); })()), "html", null, true);
        yield "\" class=\"collapse\">
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

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
        return "content/reception.html.twig";
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
        return array (  142 => 38,  130 => 29,  125 => 28,  123 => 27,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ReceptionController!{% endblock %}

{% block body %}
    <div class=\"col-lg-12 mb-4\">
        <!-- Color System -->
        <div class=\"card shadow mb-4\" style=\"border-top: 2px solid #4e73df\" id=\"commander\">

            <div class=\"card-header py-3 bg-pri\">
                <h6 class=\"m-0 font-weight-bold\" style=\"color:white\">BOITE DE RÉCEPTION</h6>
            </div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">

                    <table class=\"d table-bordered\" cellpadding=\"2\" width=\"100%\">
                        <thead>
                        <tr class=\"btn-light text-center\">
                            <td width=\"20\"></td>
                            <td width=\"130\">DATE</td>
                            <td width=\"200\">DOCUMENTS</td>
                            <td width=\"130\">OBJET</td>
                            <td width=\"130\">ENVOYÉ PAR</td>
                         </tr>
                        </thead>
                        <tbody>
                        {% set d = 0 %}
                        <tr class=\"clickable\" data-toggle=\"collapse\" data-target=\"#group-of-rows-{{ d }}\"
                            aria-expanded=\"false\" aria-controls=\"group-of-rows-{{ d }}\">
                            <td align=\"center\"><i class=\"fa fa-plus text-pri\" aria-hidden=\"true\"></i></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                        </tbody>
                        <tbody id=\"group-of-rows-{{ d }}\" class=\"collapse\">
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

{% endblock %}
", "content/reception.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\reception.html.twig");
    }
}
