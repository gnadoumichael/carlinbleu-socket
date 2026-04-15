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

/* content/eprojet.html.twig */
class __TwigTemplate_ec28759a885327724bd4f1bc3c1f3def extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/eprojet.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/eprojet.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 3, $this->source); })()), "html", null, true);
        
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
        yield "    <div class=\"container-fluid\">
        <div class=\"d-sm-flex align-items-center justify-content-between mb-4\" style=\"margin-left: 18px\">
            <h5 class=\"h5 mb-0 text-gray-800\">ÉTAT DES PROJETS</h5>
        </div>
        <div class=\"row\">
            <div class=\"col-xl-3 col-lg-3\">
                <div class=\"card shadow mb-4\">
                    <div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between bg-pri\"
                         id=\"info\">
                        <h6 class=\"m-0 text-white\">1- AJOUTER UN CLIENT</h6>
                    </div>
                    <div class=\"card-body bg-light\">
                        ";
        // line 18
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 18, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                        ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 19, $this->source); })()), "_token", [], "any", false, false, false, 19), 'row');
        yield "
                        <table style=\"width: 100%\">
                            <tbody>
                            <tr>
                                <td class=\"text-pri bolderr\" colspan=\"2\">
                                    &raquo; Client <span class=\"text-dangerr\">*</span><br>
                                    ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 25, $this->source); })()), "client", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
        yield "
                                    ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 26, $this->source); })()), "client", [], "any", false, false, false, 26), 'errors');
        yield "
                                </td>
                            </tr>
                            <tr>
                                <td class=\"text-pri bolderr\">
                                    &raquo; Code client<br>
                                    ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 32, $this->source); })()), "code", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
        yield "
                                    ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 33, $this->source); })()), "code", [], "any", false, false, false, 33), 'errors');
        yield "
                                </td>
                                <td class=\"text-pri bolderr\">
                                    &raquo; Adresse<br>
                                    ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 37, $this->source); })()), "adresse", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
        yield "
                                    ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 38, $this->source); })()), "adresse", [], "any", false, false, false, 38), 'errors');
        yield "
                                </td>
                            </tr>
                            <tr>
                                <td class=\"text-pri bolderr\">
                                    &raquo; Contact<br>
                                    ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 44, $this->source); })()), "contact", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
        yield "
                                    ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 45, $this->source); })()), "contact", [], "any", false, false, false, 45), 'errors');
        yield "
                                </td>
                                <td class=\"text-pri bolderr\">
                                    &raquo; Compte contribuable<br>
                                    ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 49, $this->source); })()), "compte", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
        yield "
                                    ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 50, $this->source); })()), "compte", [], "any", false, false, false, 50), 'errors');
        yield "
                                </td>
                            </tr>
                            <tr>
                                <td style=\"text-align: left;padding-top: 10px\">";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 54, $this->source); })()), "saveclient", [], "any", false, false, false, 54), 'widget', ["label" => "Enregistrer"]);
        yield "</td>
                            </tr>
                            </tbody>
                        </table>
                        ";
        // line 58
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 58, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
            <div class=\"col-xl-9 col-lg-9\">
                <div class=\"card shadow mb-4\" style=\"height:auto;\">
                    <div id='DivIdToPrint' style=\"background-color: white;padding-left: 5px; padding: 20px;\">
                        <div id=\"printRele\">
                            <table class=\"table-bordered\" width=\"100%\" cellpadding=\"3\" id=\"boner\"
                                   border=\"1\">
                                <thead>
                                <tr class=\"bg-light bolderrer\">
                                    <td>CLIENT / PROJET</td>
                                    <td>DESCRIPTION</td>
                                    <td style=\"width:11%\" align=\"center\">VALEUR</td>
                                    <td style=\"width:11%\" align=\"center\">RÈGLEMENT</td>
                                    <td style=\"width:11%\" align=\"center\">SOLDE</td>
                                    <td style=\"width:11%\" align=\"center\">DÉPENSES</td>
                                    <td style=\"width:11%\" align=\"center\">MARGES EST.</td>
                                </tr>
                                </thead>
                                <tbody>

                                ";
        // line 81
        $context["cout"] = 0;
        // line 82
        yield "                                ";
        $context["reglement"] = 0;
        // line 83
        yield "                                ";
        $context["depense"] = 0;
        // line 84
        yield "
                                ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($context["client"]);
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 86
            yield "                                    ";
            $context["vp"] = 0;
            // line 87
            yield "                                    ";
            $context["vr"] = 0;
            // line 88
            yield "                                    ";
            $context["dp"] = 0;
            // line 89
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 89));
            foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                // line 90
                yield "                                        ";
                $context["vp"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 90) + (isset($context["vp"]) || array_key_exists("vp", $context) ? $context["vp"] : (function () { throw new RuntimeError('Variable "vp" does not exist.', 90, $this->source); })()));
                // line 91
                yield "                                        ";
                $context["vr"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 91) + (isset($context["vr"]) || array_key_exists("vr", $context) ? $context["vr"] : (function () { throw new RuntimeError('Variable "vr" does not exist.', 91, $this->source); })()));
                // line 92
                yield "                                        ";
                $context["dp"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 92) + (isset($context["dp"]) || array_key_exists("dp", $context) ? $context["dp"] : (function () { throw new RuntimeError('Variable "dp" does not exist.', 92, $this->source); })()));
                // line 93
                yield "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            yield "                                    ";
            $context["cout"] = ((isset($context["vp"]) || array_key_exists("vp", $context) ? $context["vp"] : (function () { throw new RuntimeError('Variable "vp" does not exist.', 94, $this->source); })()) + (isset($context["cout"]) || array_key_exists("cout", $context) ? $context["cout"] : (function () { throw new RuntimeError('Variable "cout" does not exist.', 94, $this->source); })()));
            // line 95
            yield "                                    ";
            $context["reglement"] = ((isset($context["vr"]) || array_key_exists("vr", $context) ? $context["vr"] : (function () { throw new RuntimeError('Variable "vr" does not exist.', 95, $this->source); })()) + (isset($context["reglement"]) || array_key_exists("reglement", $context) ? $context["reglement"] : (function () { throw new RuntimeError('Variable "reglement" does not exist.', 95, $this->source); })()));
            // line 96
            yield "                                    ";
            $context["depense"] = ((isset($context["dp"]) || array_key_exists("dp", $context) ? $context["dp"] : (function () { throw new RuntimeError('Variable "dp" does not exist.', 96, $this->source); })()) + (isset($context["depense"]) || array_key_exists("depense", $context) ? $context["depense"] : (function () { throw new RuntimeError('Variable "depense" does not exist.', 96, $this->source); })()));
            // line 97
            yield "                                    <tr>
                                        <td colspan=\"2\" style=\"background-color:#4e73df\" >
                                            <a href=\"";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("echantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 99)]), "html", null, true);
            yield "\"
                                               class=\"text-white bolderrer\">";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "client", [], "any", false, false, false, 100), "html", null, true);
            yield "</a></td>
                                        <td align=\"right\"
                                            style=\"color: white;background-color: darkcyan\">";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["vp"]) || array_key_exists("vp", $context) ? $context["vp"] : (function () { throw new RuntimeError('Variable "vp" does not exist.', 102, $this->source); })()), 2, ".", " "), "html", null, true);
            yield "</td>
                                        <td align=\"right\"
                                            style=\"color: white;background-color: tan\">";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["vr"]) || array_key_exists("vr", $context) ? $context["vr"] : (function () { throw new RuntimeError('Variable "vr" does not exist.', 104, $this->source); })()), 2, ".", " "), "html", null, true);
            yield "</td>
                                        <td align=\"right\"
                                            style=\"color: white;background-color: slategrey\">";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["vp"]) || array_key_exists("vp", $context) ? $context["vp"] : (function () { throw new RuntimeError('Variable "vp" does not exist.', 106, $this->source); })()), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["vr"]) || array_key_exists("vr", $context) ? $context["vr"] : (function () { throw new RuntimeError('Variable "vr" does not exist.', 106, $this->source); })()), 2, ".", "")), 2, ".", " "), "html", null, true);
            yield "</td>
                                        <td align=\"right\"
                                            style=\"color: white;background-color: indianred\">";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["dp"]) || array_key_exists("dp", $context) ? $context["dp"] : (function () { throw new RuntimeError('Variable "dp" does not exist.', 108, $this->source); })()), 2, ".", " "), "html", null, true);
            yield "</td>
                                        <td align=\"right\"
                                            style=\"color: white;background-color:#4e73df\">";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["vp"]) || array_key_exists("vp", $context) ? $context["vp"] : (function () { throw new RuntimeError('Variable "vp" does not exist.', 110, $this->source); })()), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["dp"]) || array_key_exists("dp", $context) ? $context["dp"] : (function () { throw new RuntimeError('Variable "dp" does not exist.', 110, $this->source); })()), 2, ".", "")), 2, ".", " "), "html", null, true);
            yield "</td>
                                    </tr>

                                        ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 113));
            foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                // line 114
                yield "                                            <tr>
                                                <td title=\"";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "chantier", [], "any", false, false, false, 115), "html", null, true);
                yield "\">
                                                    &raquo; <a href=\"";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "chantier", [], "any", false, false, false, 116), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "chantier", [], "any", false, false, false, 116), "html", null, true);
                yield "</a></td>
                                                <td title=\"";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "description", [], "any", false, false, false, 117), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "description", [], "any", false, false, false, 117), "html", null, true);
                yield "</td>
                                                <td align=\"right\"
                                                    style=\"color: #4e73df;width:12%\">";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 119), 2, ".", " "), "html", null, true);
                yield "</td>
                                                <td align=\"right\"
                                                    style=\"color: #4e73df;\">";
                // line 121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 121), 2, ".", " "), "html", null, true);
                yield "</td>
                                                <td align=\"right\"
                                                    style=\"color: #4e73df;\">";
                // line 123
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 123), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 123), 2, ".", "")), 2, ".", " "), "html", null, true);
                yield "</td>
                                                <td align=\"right\"
                                                    style=\"color: #4e73df;\">";
                // line 125
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 125), 2, ".", " "), "html", null, true);
                yield "</td>
                                                <td align=\"right\"
                                                    style=\"color: #4e73df\">";
                // line 127
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 127), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 127), 2, ".", "")), 2, ".", " "), "html", null, true);
                yield "</td>

                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            yield "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        yield "
                                <tr class=\"bg-primary\">
                                    <td colspan=\"2\"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                </tr>
                                <tr>
                                    <td colspan=\"2\" align=\"right\"><strong>TOTAUX</strong></td>
                                    <td align=\"right\" style=\"color: #4e73df\">";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["cout"]) || array_key_exists("cout", $context) ? $context["cout"] : (function () { throw new RuntimeError('Variable "cout" does not exist.', 145, $this->source); })()), 2, ".", " "), "html", null, true);
        yield "</td>
                                    <td align=\"right\"
                                        style=\"color: #4e73df\">";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["reglement"]) || array_key_exists("reglement", $context) ? $context["reglement"] : (function () { throw new RuntimeError('Variable "reglement" does not exist.', 147, $this->source); })()), 2, ".", " "), "html", null, true);
        yield "</td>
                                    <td align=\"right\"
                                        style=\"color: #4e73df\">";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["cout"]) || array_key_exists("cout", $context) ? $context["cout"] : (function () { throw new RuntimeError('Variable "cout" does not exist.', 149, $this->source); })()), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["reglement"]) || array_key_exists("reglement", $context) ? $context["reglement"] : (function () { throw new RuntimeError('Variable "reglement" does not exist.', 149, $this->source); })()), 2, ".", "")), 2, ".", " "), "html", null, true);
        yield "</td>
                                    <td align=\"right\" style=\"color: #4e73df\">";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["depense"]) || array_key_exists("depense", $context) ? $context["depense"] : (function () { throw new RuntimeError('Variable "depense" does not exist.', 150, $this->source); })()), 2, ".", " "), "html", null, true);
        yield "</td>
                                    <td align=\"right\"
                                        style=\"color: #4e73df\">";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["cout"]) || array_key_exists("cout", $context) ? $context["cout"] : (function () { throw new RuntimeError('Variable "cout" does not exist.', 152, $this->source); })()), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["depense"]) || array_key_exists("depense", $context) ? $context["depense"] : (function () { throw new RuntimeError('Variable "depense" does not exist.', 152, $this->source); })()), 2, ".", "")), 2, ".", " "), "html", null, true);
        yield "</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <p align=\"center\">
                        <input type='button' id='btn' class=\"btn btn-primary\" value='Imprimer' onclick='printRelev();'>
                    </p>

                </div>


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
        return "content/eprojet.html.twig";
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
        return array (  405 => 152,  400 => 150,  396 => 149,  391 => 147,  386 => 145,  372 => 133,  365 => 131,  355 => 127,  350 => 125,  345 => 123,  340 => 121,  335 => 119,  328 => 117,  322 => 116,  318 => 115,  315 => 114,  311 => 113,  305 => 110,  300 => 108,  295 => 106,  290 => 104,  285 => 102,  280 => 100,  276 => 99,  272 => 97,  269 => 96,  266 => 95,  263 => 94,  257 => 93,  254 => 92,  251 => 91,  248 => 90,  243 => 89,  240 => 88,  237 => 87,  234 => 86,  230 => 85,  227 => 84,  224 => 83,  221 => 82,  219 => 81,  193 => 58,  186 => 54,  179 => 50,  175 => 49,  168 => 45,  164 => 44,  155 => 38,  151 => 37,  144 => 33,  140 => 32,  131 => 26,  127 => 25,  118 => 19,  114 => 18,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ title }}{% endblock %}

{% block body %}
    <div class=\"container-fluid\">
        <div class=\"d-sm-flex align-items-center justify-content-between mb-4\" style=\"margin-left: 18px\">
            <h5 class=\"h5 mb-0 text-gray-800\">ÉTAT DES PROJETS</h5>
        </div>
        <div class=\"row\">
            <div class=\"col-xl-3 col-lg-3\">
                <div class=\"card shadow mb-4\">
                    <div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between bg-pri\"
                         id=\"info\">
                        <h6 class=\"m-0 text-white\">1- AJOUTER UN CLIENT</h6>
                    </div>
                    <div class=\"card-body bg-light\">
                        {{ form_start(formClient, {'attr': {'novalidate': 'novalidate'}}) }}
                        {{ form_row(formClient._token) }}
                        <table style=\"width: 100%\">
                            <tbody>
                            <tr>
                                <td class=\"text-pri bolderr\" colspan=\"2\">
                                    &raquo; Client <span class=\"text-dangerr\">*</span><br>
                                    {{ form_widget(formClient.client,{'attr':{'class':'form-control form-control-user'}}) }}
                                    {{ form_errors(formClient.client) }}
                                </td>
                            </tr>
                            <tr>
                                <td class=\"text-pri bolderr\">
                                    &raquo; Code client<br>
                                    {{ form_widget(formClient.code,{'attr':{'class':'form-control form-control-user'}}) }}
                                    {{ form_errors(formClient.code) }}
                                </td>
                                <td class=\"text-pri bolderr\">
                                    &raquo; Adresse<br>
                                    {{ form_widget(formClient.adresse,{'attr':{'class':'form-control form-control-user'}}) }}
                                    {{ form_errors(formClient.adresse) }}
                                </td>
                            </tr>
                            <tr>
                                <td class=\"text-pri bolderr\">
                                    &raquo; Contact<br>
                                    {{ form_widget(formClient.contact,{'attr':{'class':'form-control form-control-user'}}) }}
                                    {{ form_errors(formClient.contact) }}
                                </td>
                                <td class=\"text-pri bolderr\">
                                    &raquo; Compte contribuable<br>
                                    {{ form_widget(formClient.compte,{'attr':{'class':'form-control form-control-user'}}) }}
                                    {{ form_errors(formClient.compte) }}
                                </td>
                            </tr>
                            <tr>
                                <td style=\"text-align: left;padding-top: 10px\">{{ form_widget(formClient.saveclient,{ 'label': 'Enregistrer' }) }}</td>
                            </tr>
                            </tbody>
                        </table>
                        {{ form_end(formClient) }}
                    </div>
                </div>
            </div>
            <div class=\"col-xl-9 col-lg-9\">
                <div class=\"card shadow mb-4\" style=\"height:auto;\">
                    <div id='DivIdToPrint' style=\"background-color: white;padding-left: 5px; padding: 20px;\">
                        <div id=\"printRele\">
                            <table class=\"table-bordered\" width=\"100%\" cellpadding=\"3\" id=\"boner\"
                                   border=\"1\">
                                <thead>
                                <tr class=\"bg-light bolderrer\">
                                    <td>CLIENT / PROJET</td>
                                    <td>DESCRIPTION</td>
                                    <td style=\"width:11%\" align=\"center\">VALEUR</td>
                                    <td style=\"width:11%\" align=\"center\">RÈGLEMENT</td>
                                    <td style=\"width:11%\" align=\"center\">SOLDE</td>
                                    <td style=\"width:11%\" align=\"center\">DÉPENSES</td>
                                    <td style=\"width:11%\" align=\"center\">MARGES EST.</td>
                                </tr>
                                </thead>
                                <tbody>

                                {% set cout = 0 %}
                                {% set reglement = 0 %}
                                {% set depense = 0 %}

                                {% for client in client %}
                                    {% set vp = 0 %}
                                    {% set vr = 0 %}
                                    {% set dp = 0 %}
                                    {% for chantier in client.chantiers %}
                                        {% set vp = chantier.cout + vp %}
                                        {% set vr = chantier.reglement + vr %}
                                        {% set dp = chantier.depense + dp %}
                                    {% endfor %}
                                    {% set cout = vp + cout %}
                                    {% set reglement = vr + reglement %}
                                    {% set depense = dp + depense %}
                                    <tr>
                                        <td colspan=\"2\" style=\"background-color:#4e73df\" >
                                            <a href=\"{{ path('echantier',{'id':client.id}) }}\"
                                               class=\"text-white bolderrer\">{{ client.client }}</a></td>
                                        <td align=\"right\"
                                            style=\"color: white;background-color: darkcyan\">{{ vp|number_format(2,'.',' ') }}</td>
                                        <td align=\"right\"
                                            style=\"color: white;background-color: tan\">{{ vr|number_format(2,'.',' ') }}</td>
                                        <td align=\"right\"
                                            style=\"color: white;background-color: slategrey\">{{ (vp|number_format(2,'.','') -  vr|number_format(2,'.',''))|number_format(2,'.',' ') }}</td>
                                        <td align=\"right\"
                                            style=\"color: white;background-color: indianred\">{{ dp|number_format(2,'.',' ') }}</td>
                                        <td align=\"right\"
                                            style=\"color: white;background-color:#4e73df\">{{ (vp|number_format(2,'.','') -  dp|number_format(2,'.',''))|number_format(2,'.',' ') }}</td>
                                    </tr>

                                        {% for chantier in client.chantiers %}
                                            <tr>
                                                <td title=\"{{ chantier.chantier }}\">
                                                    &raquo; <a href=\"{{ chantier.chantier }}\">{{ chantier.chantier }}</a></td>
                                                <td title=\"{{ chantier.description }}\">{{ chantier.description }}</td>
                                                <td align=\"right\"
                                                    style=\"color: #4e73df;width:12%\">{{ chantier.cout|number_format(2,'.',' ') }}</td>
                                                <td align=\"right\"
                                                    style=\"color: #4e73df;\">{{ chantier.reglement|number_format(2,'.',' ') }}</td>
                                                <td align=\"right\"
                                                    style=\"color: #4e73df;\">{{ (chantier.cout|number_format(2,'.','') -  chantier.reglement|number_format(2,'.',''))|number_format(2,'.',' ') }}</td>
                                                <td align=\"right\"
                                                    style=\"color: #4e73df;\">{{ chantier.depense|number_format(2,'.',' ') }}</td>
                                                <td align=\"right\"
                                                    style=\"color: #4e73df\">{{ (chantier.cout|number_format(2,'.','') -  chantier.depense|number_format(2,'.',''))|number_format(2,'.',' ') }}</td>

                                            </tr>
                                        {% endfor %}

                                {% endfor %}

                                <tr class=\"bg-primary\">
                                    <td colspan=\"2\"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                </tr>
                                <tr>
                                    <td colspan=\"2\" align=\"right\"><strong>TOTAUX</strong></td>
                                    <td align=\"right\" style=\"color: #4e73df\">{{ cout|number_format(2,'.',' ') }}</td>
                                    <td align=\"right\"
                                        style=\"color: #4e73df\">{{ reglement|number_format(2,'.',' ') }}</td>
                                    <td align=\"right\"
                                        style=\"color: #4e73df\">{{ (cout|number_format(2,'.','') - reglement|number_format(2,'.',''))|number_format(2,'.',' ') }}</td>
                                    <td align=\"right\" style=\"color: #4e73df\">{{ depense|number_format(2,'.',' ') }}</td>
                                    <td align=\"right\"
                                        style=\"color: #4e73df\">{{ (cout|number_format(2,'.','') -  depense|number_format(2,'.',''))|number_format(2,'.',' ') }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <p align=\"center\">
                        <input type='button' id='btn' class=\"btn btn-primary\" value='Imprimer' onclick='printRelev();'>
                    </p>

                </div>


            </div>
        </div>
    </div>
    </div>
{% endblock %}
", "content/eprojet.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\eprojet.html.twig");
    }
}
