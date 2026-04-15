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

/* content/historique.html.twig */
class __TwigTemplate_bf49111f24340a34da4ac42c2bcc498f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/historique.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/historique.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        yield "Hello HistoriqueController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
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
        yield "

    <section class=\"content\" style=\"margin-top: 20px !important;\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row clearfix m-t-50\">
                    <div class=\"col-sm-12 \">
                        ";
        // line 12
        yield "                        <div class=\"panel panel-pri shadow hidere\" style=\"margin-top: 20px !important\">
                            <div class=\"panel-heading\" role=\"tab\" id=\"headingPaie\">
                                <h4 class=\"panel-title\">
                                    <a class=\"collapsed  col-white\" role=\"button\" data-toggle=\"collapse\"
                                       data-parent=\"#accordionPaie\" href=\"#collapsePaie\" aria-expanded=\"false\"
                                       aria-controls=\"collapsePaie\" style=\"font-size: 16px!important\">
                                        <i class=\"material-icons col-white\"
                                           style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Historique des
                                        actions
                                    </a>
                                </h4>
                            </div>
                            <div id=\"collapsePaie\" class=\"panel-collapse\" role=\"tabpanel\"
                                 aria-labelledby=\"headingPaie\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow-x: scroll\">
                                    <table class=\"table-bordered nowrape\" id=\"dataStory\"
                                           style=\" width: 100%\">
                                        <thead>
                                        <th>DATE</th>
                                        <th>DATE</th>
                                        <th>ACTION</th>
                                        <th>RÉALISÉE PAR</th>
                                        </thead>
                                        <tbody>
                                        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($context["history"]);
        foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
            // line 37
            yield "                                            <tr>
                                                <td>Activités du ";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["history"], "date", [], "any", false, false, false, 38), "Y.m.d"), "html", null, true);
            yield "</td>
                                                <td>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["history"], "date", [], "any", false, false, false, 39), "Y.m.d H.i.s"), "html", null, true);
            yield "</td>
                                                <td class=\"col-black\">";
            // line 40
            yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["history"], "action", [], "any", false, false, false, 40));
            yield "</td>
                                                <td class=\"col-blue bolo600\">";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["history"], "dobyuser", [], "any", false, false, false, 41), "nom", [], "any", false, false, false, 41)), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["history"], "dobyuser", [], "any", false, false, false, 41), "prenoms", [], "any", false, false, false, 41)), "html", null, true);
            yield "</td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['history'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "                                        </tbody>
                                    </table>
                                    <br/>
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 53
        yield "                </div>
            </div>
        </div>
        </div>
    </section>

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
        return "content/historique.html.twig";
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
        return array (  175 => 53,  165 => 44,  154 => 41,  150 => 40,  146 => 39,  142 => 38,  139 => 37,  135 => 36,  109 => 12,  100 => 4,  87 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Hello HistoriqueController!{% endblock %}
{% block body %}


    <section class=\"content\" style=\"margin-top: 20px !important;\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row clearfix m-t-50\">
                    <div class=\"col-sm-12 \">
                        {# POINT DE PAIE #}
                        <div class=\"panel panel-pri shadow hidere\" style=\"margin-top: 20px !important\">
                            <div class=\"panel-heading\" role=\"tab\" id=\"headingPaie\">
                                <h4 class=\"panel-title\">
                                    <a class=\"collapsed  col-white\" role=\"button\" data-toggle=\"collapse\"
                                       data-parent=\"#accordionPaie\" href=\"#collapsePaie\" aria-expanded=\"false\"
                                       aria-controls=\"collapsePaie\" style=\"font-size: 16px!important\">
                                        <i class=\"material-icons col-white\"
                                           style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Historique des
                                        actions
                                    </a>
                                </h4>
                            </div>
                            <div id=\"collapsePaie\" class=\"panel-collapse\" role=\"tabpanel\"
                                 aria-labelledby=\"headingPaie\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow-x: scroll\">
                                    <table class=\"table-bordered nowrape\" id=\"dataStory\"
                                           style=\" width: 100%\">
                                        <thead>
                                        <th>DATE</th>
                                        <th>DATE</th>
                                        <th>ACTION</th>
                                        <th>RÉALISÉE PAR</th>
                                        </thead>
                                        <tbody>
                                        {% for history in history %}
                                            <tr>
                                                <td>Activités du {{ history.date|date('Y.m.d') }}</td>
                                                <td>{{ history.date|date('Y.m.d H.i.s') }}</td>
                                                <td class=\"col-black\">{{ history.action|striptags|raw }}</td>
                                                <td class=\"col-blue bolo600\">{{ history.dobyuser.nom|upper }} {{ history.dobyuser.prenoms|upper }}</td>
                                            </tr>
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                    <br/>
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>
                    {# FIN #}
                </div>
            </div>
        </div>
        </div>
    </section>

{% endblock %}
", "content/historique.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\historique.html.twig");
    }
}
