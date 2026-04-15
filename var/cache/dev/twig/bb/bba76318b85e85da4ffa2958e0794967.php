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

/* content/prevision.html.twig */
class __TwigTemplate_4bb119a8246dd4510e87024558a5f633 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/prevision.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/prevision.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 2, $this->source); })()), "html", null, true);
        
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
        yield "    <script>
        function printFrame() {
            var frm = document.getElementById('frame').contentWindow;
            frm.focus();// focus on contentWindow is needed on some ie versions
            frm.print();
            return false;
        }
    </script>
    <style>
        .btn {
            text-align: left !important;
        }
        .floater {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #FF5722;
            color: #FFF;
            font-weight: 600;
            border-radius: 50px;
            text-align: center;
            box-shadow: 2px 2px 3px #999;
            z-index: 1000;
            animation: bot-to-top 2s ease-out;
        }

    </style>
    <input type=\"text\" class=\"hide\" id=\"idligne\" value=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["idligne"]) || array_key_exists("idligne", $context) ? $context["idligne"] : (function () { throw new RuntimeError('Variable "idligne" does not exist.', 33, $this->source); })()), "html", null, true);
        yield "\">
    <button type=\"button\"
            class=\"btn bg-pink btn-circle-lg waves-effect waves-circle waves-float floater fonter text-white\"
            data-toggle=\"modal\" data-target=\"#sideModalTR\">
        FAIRE
    </button>



<section class=\"content\" style=\"margin-top: 80px !important;\">
    <div class=\"container-fluid\">
        <div class=\"row clearfix\">
            <div class=\"col-sm-12\">
                <div class=\"mb-2 m-t--25 \"
                     style=\"padding:20px; background-color: #d1d3e2 !important;\">
                    <div class=\"ont tohidbut\">
                        <div class=\"row clearfix \" style=\" padding: 0.1cm;\">
                            <div class=\"col-sm-12 text-center\">
                                <h3 class=\"font-bold col-pink\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 51, $this->source); })()), "chantier", [], "any", false, false, false, 51), "html", null, true);
        yield "</h3>
                                <h3 class=\"font-bold m-t--10 pri\">PRÉVISION N°: ";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prevision"]) || array_key_exists("prevision", $context) ? $context["prevision"] : (function () { throw new RuntimeError('Variable "prevision" does not exist.', 52, $this->source); })()), "numprevision", [], "any", false, false, false, 52), "html", null, true);
        yield "</h3>
                                <a href=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 53, $this->source); })()), "chantier", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53)]), "html", null, true);
        yield "\" class=\"btn bg-green  align-left m-b-10 text-white waves-effect \">
                                    ACCÉDER AU PROJET</a>
                                <button type=\"button\"  class=\"btn bg-blue  align-left m-b-10 text-white waves-effect\"
                                        data-toggle=\"modal\" data-target=\"#mdModalBon\">CRÉER UN NOUVEAU BON
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
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
        return "content/prevision.html.twig";
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
        return array (  160 => 53,  156 => 52,  152 => 51,  131 => 33,  100 => 4,  87 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}{{ title }}{% endblock %}
{% block body %}
    <script>
        function printFrame() {
            var frm = document.getElementById('frame').contentWindow;
            frm.focus();// focus on contentWindow is needed on some ie versions
            frm.print();
            return false;
        }
    </script>
    <style>
        .btn {
            text-align: left !important;
        }
        .floater {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #FF5722;
            color: #FFF;
            font-weight: 600;
            border-radius: 50px;
            text-align: center;
            box-shadow: 2px 2px 3px #999;
            z-index: 1000;
            animation: bot-to-top 2s ease-out;
        }

    </style>
    <input type=\"text\" class=\"hide\" id=\"idligne\" value=\"{{ idligne }}\">
    <button type=\"button\"
            class=\"btn bg-pink btn-circle-lg waves-effect waves-circle waves-float floater fonter text-white\"
            data-toggle=\"modal\" data-target=\"#sideModalTR\">
        FAIRE
    </button>



<section class=\"content\" style=\"margin-top: 80px !important;\">
    <div class=\"container-fluid\">
        <div class=\"row clearfix\">
            <div class=\"col-sm-12\">
                <div class=\"mb-2 m-t--25 \"
                     style=\"padding:20px; background-color: #d1d3e2 !important;\">
                    <div class=\"ont tohidbut\">
                        <div class=\"row clearfix \" style=\" padding: 0.1cm;\">
                            <div class=\"col-sm-12 text-center\">
                                <h3 class=\"font-bold col-pink\">{{ chantier.chantier }}</h3>
                                <h3 class=\"font-bold m-t--10 pri\">PRÉVISION N°: {{ prevision.numprevision }}</h3>
                                <a href=\"{{ path('chantier', {'id': bon.chantier.id}) }}\" class=\"btn bg-green  align-left m-b-10 text-white waves-effect \">
                                    ACCÉDER AU PROJET</a>
                                <button type=\"button\"  class=\"btn bg-blue  align-left m-b-10 text-white waves-effect\"
                                        data-toggle=\"modal\" data-target=\"#mdModalBon\">CRÉER UN NOUVEAU BON
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{% endblock %}
", "content/prevision.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\prevision.html.twig");
    }
}
