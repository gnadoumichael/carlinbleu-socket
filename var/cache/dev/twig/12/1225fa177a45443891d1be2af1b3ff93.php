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

/* content/corbeille.html.twig */
class __TwigTemplate_95799946a94541873b95d4fa36f9c52f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/corbeille.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/corbeille.html.twig"));

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
        yield "
    <section class=\"content\" style=\"margin-top: 70px !important;\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"panel-group\" id=\"accordion_1\" role=\"tablist\" aria-multiselectable=\"true\">
                    <div class=\"panel-group\" id=\"accordion_1\" role=\"tablist\" aria-multiselectable=\"true\">
                        <div class=\"row clearfix m-t-40\">
                            <div class=\"col-sm-12\">
                                <h2 class=\"col-blue-grey font-bold\">Corbeille</h2><br>
                            </div>
                        </div>
                        ";
        // line 16
        yield "                        <div class=\"panel panel-pri shadow\">
                            <div class=\"panel-heading\" role=\"tab\" id=\"headingOne_CLI\">
                                <h5 class=\"panel-title\">
                                    <a class=\"collapsed fontes text-white\" role=\"button\" data-toggle=\"collapse\"
                                       data-parent=\"#accordion_0\" href=\"#collapseOne_CLI\" aria-expanded=\"false\"
                                       aria-controls=\"collapseOne_CLI\" style=\"font-size: 16px!important\">
                                        <i class=\"material-icons text-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Clients
                                    </a>
                                </h5>
                            </div>
                            <div id=\"collapseOne_CLI\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                 aria-labelledby=\"headingOne_CLI\">
                                <div class=\"panel-body\">
                                    <div class=\"table-responsive shadow\" style=\"padding: 20px\">
                                        <table class=\"table-bordered  display nowrape\" style=\"width: 100%\"
                                               id=\"dataLISTEDELCLIENTS\">
                                            <thead>
                                            <tr class=\"font-weight-normal\">
                                                <th class=\"text-center\" style=\"width: 10px !important;\"></th>
                                                <th class=\"text-center\">CLIENTS</th>
                                                <th class=\"text-center\">N° DE CLIENT</th>
                                                <th class=\"text-center\">ADRESSE</th>
                                                <th class=\"text-center\">CONTACTS</th>
                                                <th class=\"text-center\">COMPTE C.</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 43
        $context["tpc"] = 0;
        // line 44
        yield "                                            ";
        $context["tpa"] = 0;
        // line 45
        yield "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["master"]) || array_key_exists("master", $context) ? $context["master"] : (function () { throw new RuntimeError('Variable "master" does not exist.', 45, $this->source); })()), "clients", [], "any", false, false, false, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 46
            yield "                                                ";
            if (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 46)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 46), "etat", [], "any", false, false, false, 46) != "ultra"))) {
                // line 47
                yield "                                                    ";
                $context["pc"] = 0;
                // line 48
                yield "                                                    ";
                $context["pa"] = 0;
                // line 49
                yield "                                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 49));
                foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                    // line 50
                    yield "                                                        ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 50))) {
                        // line 51
                        yield "                                                            ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "archiver", [], "any", false, false, false, 51) != "oui")) {
                            // line 52
                            yield "                                                                ";
                            $context["pc"] = ((isset($context["pc"]) || array_key_exists("pc", $context) ? $context["pc"] : (function () { throw new RuntimeError('Variable "pc" does not exist.', 52, $this->source); })()) + 1);
                            // line 53
                            yield "                                                            ";
                        } else {
                            // line 54
                            yield "                                                                ";
                            $context["pa"] = ((isset($context["pa"]) || array_key_exists("pa", $context) ? $context["pa"] : (function () { throw new RuntimeError('Variable "pa" does not exist.', 54, $this->source); })()) + 1);
                            // line 55
                            yield "                                                            ";
                        }
                        // line 56
                        yield "                                                        ";
                    }
                    // line 57
                    yield "                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                yield "
                                                    <tr>
                                                        <td class=\"text-center\">
                                                            <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                   class=\"CLYEDEL\"
                                                                   value=\"";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 63), "html", null, true);
                yield "\"></td>
                                                        <td>
                                                            <a href=\"";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 65)]), "html", null, true);
                yield "\"
                                                               class=\"text-pri font-bold\"
                                                               title=\"";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 67)), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 67)), "html", null, true);
                yield "</a>
                                                        </td>
                                                        <td class=\"text-center\">";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "code", [], "any", false, false, false, 69), "html", null, true);
                yield "</td>
                                                        <td class=\"text-center\">";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "adresse", [], "any", false, false, false, 70), "html", null, true);
                yield "</td>
                                                        <td class=\"text-center\">";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "contact", [], "any", false, false, false, 71), "html", null, true);
                yield "</td>
                                                        <td class=\"text-center\">";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "contribuable", [], "any", false, false, false, 72), "html", null, true);
                yield "</td>
                                                    </tr>
                                                ";
            }
            // line 75
            yield "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "                                            </tbody>
                                        </table>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        // line 84
        yield "
                        ";
        // line 86
        yield "                        <div class=\"panel panel-pri shadow\">
                            <div class=\"panel-heading\" role=\"tab\" id=\"headingOne_PS\">
                                <h5 class=\"panel-title\">
                                    <a class=\"collapsed fontes text-white\" role=\"button\" data-toggle=\"collapse\"
                                       data-parent=\"#accordion_PS\" href=\"#collapseOne_PS\" aria-expanded=\"false\"
                                       aria-controls=\"collapseOne_PS\" style=\"font-size: 16px!important\">
                                        <i class=\"material-icons text-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Chantiers
                                    </a>
                                </h5>
                            </div>
                            <div id=\"collapseOne_PS\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                 aria-labelledby=\"headingOne_PS\">
                                <div class=\"panel-body\" style=\"overflow: scroll\">
                                    <div class=\"table-responsive shadow\" style=\"padding: 20px\">
                                        <table class=\"table-bordered shadow display nowrape\" id=\"dataCHANTIERSUP\" style=\"width: 100%\">
                                            ";
        // line 101
        $context["cout"] = 0;
        // line 102
        yield "                                            ";
        $context["check"] = 0;
        // line 103
        yield "                                            ";
        $context["ccheck"] = 0;
        // line 104
        yield "                                            ";
        $context["reglement"] = 0;
        // line 105
        yield "                                            ";
        $context["depense"] = 0;
        // line 106
        yield "                                            ";
        $context["tcout"] = 0;
        // line 107
        yield "                                            ";
        $context["treglement"] = 0;
        // line 108
        yield "                                            ";
        $context["tdepense"] = 0;
        // line 109
        yield "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["master"]) || array_key_exists("master", $context) ? $context["master"] : (function () { throw new RuntimeError('Variable "master" does not exist.', 109, $this->source); })()), "clients", [], "any", false, false, false, 109));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 110
            yield "                                                ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 110))) {
                // line 111
                yield "                                                    ";
                $context["vp"] = 0;
                // line 112
                yield "                                                    ";
                $context["vr"] = 0;
                // line 113
                yield "                                                    ";
                $context["dp"] = 0;
                // line 114
                yield "
                                                    ";
                // line 115
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 115));
                foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                    // line 116
                    yield "
                                                            ";
                    // line 117
                    if (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 117)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 117), "etat", [], "any", false, false, false, 117) != "ultra"))) {
                        // line 118
                        yield "                                                                ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "archiver", [], "any", false, false, false, 118) != "oui")) {
                            // line 119
                            yield "                                                                    ";
                            $context["vp"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 119) + (isset($context["vp"]) || array_key_exists("vp", $context) ? $context["vp"] : (function () { throw new RuntimeError('Variable "vp" does not exist.', 119, $this->source); })()));
                            // line 120
                            yield "                                                                    ";
                            $context["vr"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 120) + (isset($context["vr"]) || array_key_exists("vr", $context) ? $context["vr"] : (function () { throw new RuntimeError('Variable "vr" does not exist.', 120, $this->source); })()));
                            // line 121
                            yield "                                                                    ";
                            $context["dp"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 121) + (isset($context["dp"]) || array_key_exists("dp", $context) ? $context["dp"] : (function () { throw new RuntimeError('Variable "dp" does not exist.', 121, $this->source); })()));
                            // line 122
                            yield "                                                                ";
                        }
                        // line 123
                        yield "                                                            ";
                    }
                    // line 124
                    yield "                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 125
                yield "
                                                    ";
                // line 126
                $context["tcout"] = ((isset($context["vp"]) || array_key_exists("vp", $context) ? $context["vp"] : (function () { throw new RuntimeError('Variable "vp" does not exist.', 126, $this->source); })()) + (isset($context["tcout"]) || array_key_exists("tcout", $context) ? $context["tcout"] : (function () { throw new RuntimeError('Variable "tcout" does not exist.', 126, $this->source); })()));
                // line 127
                yield "                                                    ";
                $context["treglement"] = ((isset($context["vr"]) || array_key_exists("vr", $context) ? $context["vr"] : (function () { throw new RuntimeError('Variable "vr" does not exist.', 127, $this->source); })()) + (isset($context["treglement"]) || array_key_exists("treglement", $context) ? $context["treglement"] : (function () { throw new RuntimeError('Variable "treglement" does not exist.', 127, $this->source); })()));
                // line 128
                yield "                                                    ";
                $context["tdepense"] = ((isset($context["dp"]) || array_key_exists("dp", $context) ? $context["dp"] : (function () { throw new RuntimeError('Variable "dp" does not exist.', 128, $this->source); })()) + (isset($context["tdepense"]) || array_key_exists("tdepense", $context) ? $context["tdepense"] : (function () { throw new RuntimeError('Variable "tdepense" does not exist.', 128, $this->source); })()));
                // line 129
                yield "                                                ";
            }
            // line 130
            yield "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        yield "                                            <thead>
                                            <tr class=\"font-weight-normal\">
                                                <th style=\"width: 10px !important;\"></th>
                                                <th class=\"col-blue-grey\">CLIENT / CHANTIER</th>
                                                <th class=\"text-center col-blue-grey\">COÛT</th>
                                                <th class=\"text-center col-blue-grey\">CLIENT</th>
                                                <th class=\"text-center col-blue-grey\">RÈGLEMENT</th>
                                                <th class=\"text-center col-blue-grey\">SOLDE</th>
                                                <th class=\"text-center col-blue-grey\">DÉPENSES</th>
                                                <th class=\"text-center col-blue-grey\">MARGES EST.</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["master"]) || array_key_exists("master", $context) ? $context["master"] : (function () { throw new RuntimeError('Variable "master" does not exist.', 144, $this->source); })()), "clients", [], "any", false, false, false, 144));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 145
            yield "                                                ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 145))) {
                // line 146
                yield "                                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 146));
                foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                    // line 147
                    yield "                                                        ";
                    if (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 147)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 147), "etat", [], "any", false, false, false, 147) != "ultra"))) {
                        // line 148
                        yield "                                                            ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "archiver", [], "any", false, false, false, 148) != "oui")) {
                            // line 149
                            yield "                                                                <tr>
                                                                    <td class=\"text-center\">
                                                                        <input type=\"checkbox\"
                                                                               data-toggle=\"toggle\"
                                                                               class=\"PROJSUP\"
                                                                               value=\"";
                            // line 154
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 154), "html", null, true);
                            yield "\"></td>
                                                                    <td>
                                                                        <a href=\"";
                            // line 156
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 156)]), "html", null, true);
                            yield "\"
                                                                           title=\"";
                            // line 157
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 157), "html", null, true);
                            yield "\">";
                            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "sous", [], "any", false, false, false, 157))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 158
                                yield "                                                                                <span class=\"badge bg-orange\">SP</span>";
                            }
                            yield " ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 158)), "html", null, true);
                            yield "
                                                                        </a>
                                                                    </td>
                                                                    <td class=\"text-right\">";
                            // line 161
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 161), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                    <td>
                                                                        <a href=\"";
                            // line 163
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 163)]), "html", null, true);
                            yield "\"
                                                                           title=\"";
                            // line 164
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 164), "html", null, true);
                            yield "\"
                                                                           class=\"text-white\">
                                                                            ";
                            // line 166
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 166)), "html", null, true);
                            yield "</a>
                                                                    </td>
                                                                    <td class=\"text-right\">";
                            // line 168
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 168), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                    <td style=\"text-align: right\">";
                            // line 169
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 169), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 169), 2, ".", "")), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                    <td style=\"text-align: right\">";
                            // line 170
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 170), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                    <td style=\"text-align: right\">";
                            // line 171
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 171), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 171), 2, ".", "")), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                </tr>
                                                            ";
                        }
                        // line 174
                        yield "                                                        ";
                    }
                    // line 175
                    yield "                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 176
                yield "                                                ";
            }
            // line 177
            yield "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        yield "                                            </tbody>
                                            <tfoot>
                                            <tr class=\"font-weight-normal\">
                                                <th style=\"width: 10px !important;\"></th>
                                                <th class=\"col-blue-grey\"></th>
                                                <th class=\"text-center bg-blue text-white\">";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tcout"]) || array_key_exists("tcout", $context) ? $context["tcout"] : (function () { throw new RuntimeError('Variable "tcout" does not exist.', 183, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</th>
                                                <th class=\"text-center col-blue\"></th>
                                                <th class=\"text-center bg-blue text-white\">";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["treglement"]) || array_key_exists("treglement", $context) ? $context["treglement"] : (function () { throw new RuntimeError('Variable "treglement" does not exist.', 185, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</th>
                                                <th class=\"text-center bg-blue text-white\">";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tcout"]) || array_key_exists("tcout", $context) ? $context["tcout"] : (function () { throw new RuntimeError('Variable "tcout" does not exist.', 186, $this->source); })()), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["treglement"]) || array_key_exists("treglement", $context) ? $context["treglement"] : (function () { throw new RuntimeError('Variable "treglement" does not exist.', 186, $this->source); })()), 2, ".", "")), 2, ",", " "), "html", null, true);
        yield "</th>
                                                <th class=\"text-center bg-blue text-white\">";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tdepense"]) || array_key_exists("tdepense", $context) ? $context["tdepense"] : (function () { throw new RuntimeError('Variable "tdepense" does not exist.', 187, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</th>
                                                <th class=\"text-center bg-blue text-white\">";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tcout"]) || array_key_exists("tcout", $context) ? $context["tcout"] : (function () { throw new RuntimeError('Variable "tcout" does not exist.', 188, $this->source); })()), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tdepense"]) || array_key_exists("tdepense", $context) ? $context["tdepense"] : (function () { throw new RuntimeError('Variable "tdepense" does not exist.', 188, $this->source); })()), 2, ".", "")), 2, ",", " "), "html", null, true);
        yield "</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        // line 198
        yield "
                        ";
        // line 200
        yield "                        <div class=\"panel panel-pri shadow\">
                            <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingSdev\">
                                <h5 class=\"panel-title\">
                                    <a class=\"collapsed fontes text-white\" role=\"button\" data-toggle=\"collapse\"
                                       data-parent=\"#accordion_1\" href=\"#collapseSdev\" aria-expanded=\"false\"
                                       aria-controls=\"collapseSdev\" style=\"font-size: 16px!important\">
                                        <i class=\"material-icons text-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>
                                        Devis supprimés
                                    </a>
                                </h5>
                            </div>
                            <div id=\"collapseSdev\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                 aria-labelledby=\"headingSdev\">
                                <div class=\"panel-body\" style=\"overflow: scroll\">
                                    <div class=\"table-responsive shadow\" style=\"padding: 10px\">
                                        <table class=\"table-bordered display nowrape\" style=\"width: 100%\"
                                               id=\"dataCORDEVIS\">
                                            <thead>
                                            <tr class=\"text-center\">
                                                <th class=\"mw30\"></th>
                                                <th class=\"mw30\"></th>
                                                <th>DATE</th>
                                                <th>N° DEVIS</th>
                                                <th>TOTAL HT</th>
                                                <th>TOTAL TTC</th>
                                                <th>ETAT</th>
                                                <th>SUPPRIMÉ PAR</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 230
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["master"]) || array_key_exists("master", $context) ? $context["master"] : (function () { throw new RuntimeError('Variable "master" does not exist.', 230, $this->source); })()), "clients", [], "any", false, false, false, 230));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 231
            yield "                                                ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 231))) {
                // line 232
                yield "                                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "devis", [], "any", false, false, false, 232));
                foreach ($context['_seq'] as $context["_key"] => $context["devis"]) {
                    // line 233
                    yield "                                                        ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "chantier", [], "any", false, false, false, 233), "corbeille", [], "any", false, false, false, 233))) {
                        // line 234
                        yield "                                                            ";
                        if (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "corbeille", [], "any", false, false, false, 234)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "corbeille", [], "any", false, false, false, 234), "etat", [], "any", false, false, false, 234) != "ultra"))) {
                            // line 235
                            yield "                                                                <tr>
                                                                    <td class=\"text-center\">
                                                                        <input type=\"checkbox\" data-toggle=\"toggle\" class=\"CORBDEV\"
                                                                               value=\"";
                            // line 238
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "id", [], "any", false, false, false, 238), "html", null, true);
                            yield "\"></td>
                                                                    <td class=\"text-center\">
                                                                        <a href=\"#\" onclick=\"shasha(";
                            // line 240
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "id", [], "any", false, false, false, 240), "html", null, true);
                            yield ",'imprimdevis');\"><i
                                                                                    class=\"fa fa-eye col-green\"
                                                                                    aria-hidden=\"true\"></i></a>
                                                                    </td>
                                                                    <td>";
                            // line 244
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "date", [], "any", false, false, false, 244), "Y/m/d H:m"), "html", null, true);
                            yield "</td>
                                                                    <td>
                                                                        <a href=\"";
                            // line 246
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "id", [], "any", false, false, false, 246), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "chantier", [], "any", false, false, false, 246), "id", [], "any", false, false, false, 246)]), "html", null, true);
                            yield "\"
                                                                           style=\"color:dodgerblue\"
                                                                           title=\"";
                            // line 248
                            yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "devreference", [], "any", false, false, false, 248));
                            yield "\">
                                                                            ";
                            // line 249
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "etat", [], "any", false, false, false, 249) == "valide")) {
                                // line 250
                                yield "                                                                                <span class=\"badge badge-pill badge-primary\"
                                                                                      title=\"Validé par ";
                                // line 251
                                if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "vabyuser", [], "any", false, false, false, 251))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    // line 252
                                    yield "                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "vabyuser", [], "any", false, false, false, 252), "prenoms", [], "any", false, false, false, 252)), "html", null, true);
                                }
                                yield "\">V</span>
                                                                            ";
                            } else {
                                // line 254
                                yield "                                                                                <span class=\"badge badge-pill text-white\"
                                                                                      title=\"Dévalidé par ";
                                // line 255
                                if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "vabyuser", [], "any", false, false, false, 255))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    // line 256
                                    yield "                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "vabyuser", [], "any", false, false, false, 256), "prenoms", [], "any", false, false, false, 256)), "html", null, true);
                                }
                                yield "\">V</span>
                                                                            ";
                            }
                            // line 258
                            yield "                                                                            DEVIS
                                                                            N°
                                                                            ";
                            // line 260
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "iddevis", [], "any", false, false, false, 260), "html", null, true);
                            yield "
                                                                        </a>
                                                                    </td>
                                                                    <td class=\"text-right\">";
                            // line 263
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalht", [], "any", false, false, false, 263), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                    <td class=\"text-right\">";
                            // line 264
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalttc", [], "any", false, false, false, 264), 2, ",", " "), "html", null, true);
                            yield "</td>

                                                                    <td title=\"";
                            // line 266
                            yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "devreference", [], "any", false, false, false, 266));
                            yield "\"><a
                                                                                href=\"";
                            // line 267
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "chantier", [], "any", false, false, false, 267), "id", [], "any", false, false, false, 267)]), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "client", [], "any", false, false, false, 267), "nomclient", [], "any", false, false, false, 267), "html", null, true);
                            yield "
                                                                            |
                                                                            ";
                            // line 269
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "chantier", [], "any", false, false, false, 269), "nomchantier", [], "any", false, false, false, 269), "html", null, true);
                            yield "</a></td>

                                                                    <td class=\"text-left col-blue\">
                                                                        <i class=\"fa fa-user col-blue\"></i>";
                            // line 272
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "corbeille", [], "any", false, false, false, 272), "delby", [], "any", false, false, false, 272), "nom", [], "any", false, false, false, 272), "html", null, true);
                            yield " ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "corbeille", [], "any", false, false, false, 272), "delby", [], "any", false, false, false, 272), "prenoms", [], "any", false, false, false, 272), "html", null, true);
                            yield "</td>
                                                                </tr>
                                                            ";
                        }
                        // line 275
                        yield "                                                        ";
                    }
                    // line 276
                    yield "                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['devis'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 277
                yield "                                                ";
            }
            // line 278
            yield "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 279
        yield "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        // line 286
        yield "
                        ";
        // line 288
        yield "                        <div class=\"panel panel-pri\">
                            <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingCor\">
                                <h5 class=\"panel-title\">
                                    <a class=\"collapsed fontes text-white\" role=\"button\" data-toggle=\"collapse\"
                                       data-parent=\"#accordion_1\" href=\"#collapseCor\" aria-expanded=\"false\"
                                       aria-controls=\"collapseCor\" style=\"font-size: 16px!important\">
                                        <i class=\"material-icons text-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>
                                        Bons de commande supprimés
                                    </a>
                                </h5>
                            </div>
                            <div id=\"collapseCor\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                 aria-labelledby=\"headingCor\">
                                <div class=\"panel-body\" style=\"overflow: scroll\">
                                    <div class=\"table-responsive shadow\" style=\"padding: 10px\">
                                        <table class=\"table-bordered display nowrape\" style=\"width: 100%\"
                                               id=\"dataCORBBON\">
                                            <thead>
                                            <tr class=\"text-center\">
                                                <th style=\"width: 10px !important;\"></th>
                                                <th style=\"width: 80px\">SUPPRIMÉ LE</th>
                                                <th>N° DE BON</th>
                                                <th>CLIENTS/PROJETS</th>
                                                <th class=\"text-center\">TOTAL HT</th>
                                                <th class=\"text-center\">TOTAL TTC</th>
                                                <th>SUPPRIMÉ PAR</th>
                                                <th style=\"background-color: #E8E8E8 !important;\">TYPE</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 318
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["master"]) || array_key_exists("master", $context) ? $context["master"] : (function () { throw new RuntimeError('Variable "master" does not exist.', 318, $this->source); })()), "clients", [], "any", false, false, false, 318));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 319
            yield "                                                ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 319))) {
                // line 320
                yield "                                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "bons", [], "any", false, false, false, 320));
                foreach ($context['_seq'] as $context["_key"] => $context["bon"]) {
                    // line 321
                    yield "                                                        ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "chantier", [], "any", false, false, false, 321), "corbeille", [], "any", false, false, false, 321))) {
                        // line 322
                        yield "                                                            ";
                        if (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "corbeille", [], "any", false, false, false, 322)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "corbeille", [], "any", false, false, false, 322), "etat", [], "any", false, false, false, 322) != "ultra"))) {
                            // line 323
                            yield "                                                                <tr>
                                                                    <td class=\"text-center\"><input type=\"checkbox\"
                                                                                                   data-toggle=\"toggle\"
                                                                                                   class=\"CORBBON\"
                                                                                                   value=\"";
                            // line 327
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "id", [], "any", false, false, false, 327), "html", null, true);
                            yield "\">
                                                                    </td>
                                                                    <td class=\"text-center\"
                                                                        style=\"width: 140px !important;\">";
                            // line 330
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "corbeille", [], "any", false, false, false, 330), "date", [], "any", false, false, false, 330), "Y.m.d H.i.s"), "html", null, true);
                            yield "</td>
                                                                    <td>
                                                                        <a href=\"";
                            // line 332
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editbon", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "id", [], "any", false, false, false, 332), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "chantier", [], "any", false, false, false, 332), "id", [], "any", false, false, false, 332)]), "html", null, true);
                            yield "\">BON
                                                                            N° ";
                            // line 333
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "numbon", [], "any", false, false, false, 333), "html", null, true);
                            yield "</a></td>
                                                                    <td title=\"";
                            // line 334
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "client", [], "any", false, false, false, 334), "nomclient", [], "any", false, false, false, 334), "html", null, true);
                            yield " | ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "chantier", [], "any", false, false, false, 334), "nomchantier", [], "any", false, false, false, 334), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "client", [], "any", false, false, false, 334), "nomclient", [], "any", false, false, false, 334), "html", null, true);
                            yield "
                                                                        | ";
                            // line 335
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "chantier", [], "any", false, false, false, 335), "nomchantier", [], "any", false, false, false, 335), "html", null, true);
                            yield "</td>
                                                                    <td class=\"text-right\">";
                            // line 336
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalht", [], "any", false, false, false, 336), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                    <td class=\"text-right\">";
                            // line 337
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalttc", [], "any", false, false, false, 337), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                    <td>";
                            // line 338
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "corbeille", [], "any", false, false, false, 338), "delby", [], "any", false, false, false, 338), "nom", [], "any", false, false, false, 338), "html", null, true);
                            yield " ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "corbeille", [], "any", false, false, false, 338), "delby", [], "any", false, false, false, 338), "prenoms", [], "any", false, false, false, 338), "html", null, true);
                            yield "</td>
                                                                    <td>BONS SUPPRIMÉS</td>
                                                                </tr>
                                                            ";
                        }
                        // line 342
                        yield "                                                        ";
                    }
                    // line 343
                    yield "                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['bon'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 344
                yield "                                                ";
            }
            // line 345
            yield "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 346
        yield "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        // line 353
        yield "
                        ";
        // line 355
        yield "                        <div class=\"panel panel-pri\">
                            <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingCass\">
                                <h5 class=\"panel-title\">
                                    <a class=\"collapsed fontes text-white\" role=\"button\" data-toggle=\"collapse\"
                                       data-parent=\"#accordion_1\" href=\"#collapseCass\" aria-expanded=\"false\"
                                       aria-controls=\"collapseCass\" style=\"font-size: 16px!important\">
                                        <i class=\"material-icons text-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>
                                        Bons de caisse supprimés
                                    </a>
                                </h5>
                            </div>
                            <div id=\"collapseCass\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                 aria-labelledby=\"headingCass\">
                                <div class=\"panel-body\" style=\"overflow: scroll\">
                                    <div class=\"table-responsive shadow\" style=\"padding: 10px\">
                                        <table class=\"table-bordered display nowrape\" style=\"width: 100%\"
                                               id=\"dataCORBCAISSE\">
                                            <thead>
                                            <tr class=\"text-center\">
                                                <th style=\"width: 10px !important;\"></th>
                                                <th style=\"width: 80px\">SUPPRIMÉ LE</th>
                                                <th>N° DE BON</th>
                                                <th>CLIENTS/PROJETS</th>
                                                <th class=\"text-center\">FACTURÉ À</th>
                                                <th class=\"text-center\">MONTANT</th>
                                                <th>SUPPRIMÉ PAR</th>
                                                <th style=\"background-color: #E8E8E8 !important;\">TYPE</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 385
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["master"]) || array_key_exists("master", $context) ? $context["master"] : (function () { throw new RuntimeError('Variable "master" does not exist.', 385, $this->source); })()), "clients", [], "any", false, false, false, 385));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 386
            yield "                                                ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 386))) {
                // line 387
                yield "                                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "caisses", [], "any", false, false, false, 387));
                foreach ($context['_seq'] as $context["_key"] => $context["caiss"]) {
                    // line 388
                    yield "                                                        ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caiss"], "chantier", [], "any", false, false, false, 388), "corbeille", [], "any", false, false, false, 388))) {
                        // line 389
                        yield "                                                            ";
                        if (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["caiss"], "corbeille", [], "any", false, false, false, 389)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caiss"], "corbeille", [], "any", false, false, false, 389), "etat", [], "any", false, false, false, 389) != "ultra"))) {
                            // line 390
                            yield "                                                                <tr>
                                                                    <td class=\"text-center\"><input type=\"checkbox\"
                                                                                                   data-toggle=\"toggle\"
                                                                                                   class=\"CORBCAISSE\"
                                                                                                   value=\"";
                            // line 394
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["caiss"], "id", [], "any", false, false, false, 394), "html", null, true);
                            yield "\">
                                                                    </td>
                                                                    <td class=\"text-center\"
                                                                        style=\"width: 140px !important;\">";
                            // line 397
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caiss"], "corbeille", [], "any", false, false, false, 397), "date", [], "any", false, false, false, 397), "Y.m.d H.i.s"), "html", null, true);
                            yield "</td>
                                                                    <td>
                                                                        <a href=\"";
                            // line 399
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editcaisse", ["idcaisse" => CoreExtension::getAttribute($this->env, $this->source, $context["caiss"], "id", [], "any", false, false, false, 399), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caiss"], "chantier", [], "any", false, false, false, 399), "id", [], "any", false, false, false, 399)]), "html", null, true);
                            yield "\">BON
                                                                            DE CAISSE
                                                                            N° ";
                            // line 401
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["caiss"], "numcaisse", [], "any", false, false, false, 401), "html", null, true);
                            yield "</a></td>
                                                                    <td title=\"";
                            // line 402
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caiss"], "client", [], "any", false, false, false, 402), "nomclient", [], "any", false, false, false, 402), "html", null, true);
                            yield " | ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caiss"], "chantier", [], "any", false, false, false, 402), "nomchantier", [], "any", false, false, false, 402), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caiss"], "client", [], "any", false, false, false, 402), "nomclient", [], "any", false, false, false, 402), "html", null, true);
                            yield "
                                                                        | ";
                            // line 403
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caiss"], "chantier", [], "any", false, false, false, 403), "nomchantier", [], "any", false, false, false, 403), "html", null, true);
                            yield "</td>

                                                                    <td class=\"text-right\">";
                            // line 405
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["caiss"], "intervenant", [], "any", false, false, false, 405)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caiss"], "intervenant", [], "any", false, false, false, 405), "nom", [], "any", false, false, false, 405), "html", null, true);
                            }
                            yield "</td>
                                                                    <td class=\"text-right\">";
                            // line 406
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["caiss"], "montant", [], "any", false, false, false, 406), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                    <td>
                                                                ";
                            // line 408
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caiss"], "corbeille", [], "any", false, false, false, 408), "delby", [], "any", false, false, false, 408)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 409
                                yield "                                                                        ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caiss"], "corbeille", [], "any", false, false, false, 409), "delby", [], "any", false, false, false, 409), "nom", [], "any", false, false, false, 409), "html", null, true);
                                yield " ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caiss"], "corbeille", [], "any", false, false, false, 409), "delby", [], "any", false, false, false, 409), "prenoms", [], "any", false, false, false, 409), "html", null, true);
                                yield "
                                                                    ";
                            }
                            // line 411
                            yield "                                                                    </td>
                                                                    <td>BON DE CAISSE SUPPRIMÉS</td>
                                                                </tr>
                                                            ";
                        }
                        // line 415
                        yield "                                                        ";
                    }
                    // line 416
                    yield "                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['caiss'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 417
                yield "                                                ";
            }
            // line 418
            yield "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 419
        yield "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        // line 426
        yield "
                        ";
        // line 428
        yield "                        <div class=\"panel panel-pri\">
                            <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingTroi\">
                                <h5 class=\"panel-title \">
                                    <a class=\"collapsed text-white\" role=\"button\" data-toggle=\"collapse\"
                                       data-parent=\"#accordion_1\"
                                       href=\"#collapseTroi\" aria-expanded=\"false\"
                                       aria-controls=\"collapseTroi\" style=\"font-size: 16px!important\">
                                        <i class=\"material-icons text-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>
                                        Intervenants
                                    </a>
                                </h5>
                            </div>
                            <div id=\"collapseTroi\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                 aria-labelledby=\"headingTroi\">
                                <div class=\"panel-body\" style=\"overflow: scroll\">
                                    <div class=\"table-responsive shadow\" style=\"padding: 10px\">
                                        <table class=\"table-striped table-bordered display nowrape\"
                                               style=\"width: 100%\" id=\"dataCORBINTERVE\">
                                            <thead>
                                            <tr class=\"text-center\">
                                                <th style=\"width: 10px !important;\"></th>
                                                <th>INTERVENANT</th>
                                                <th>ETAT</th>
                                                <th>PROFESSION</th>
                                                <th>MONTANT FACTURÉ</th>
                                                <th>MONTANT REÇU</th>
                                                <th>RESTE À PAYER</th>
                                                <th>CREÉ PAR
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 460
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["master"]) || array_key_exists("master", $context) ? $context["master"] : (function () { throw new RuntimeError('Variable "master" does not exist.', 460, $this->source); })()), "clients", [], "any", false, false, false, 460));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 461
            yield "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "intervenants", [], "any", false, false, false, 461));
            foreach ($context['_seq'] as $context["_key"] => $context["inter"]) {
                // line 462
                yield "                                                    ";
                if (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["inter"], "corbeille", [], "any", false, false, false, 462)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inter"], "corbeille", [], "any", false, false, false, 462), "etat", [], "any", false, false, false, 462) != "ultra"))) {
                    // line 463
                    yield "                                                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["inter"], "payer", [], "any", false, false, false, 463) != CoreExtension::getAttribute($this->env, $this->source, $context["inter"], "recu", [], "any", false, false, false, 463))) {
                        // line 464
                        yield "                                                            <tr>
                                                                <td class=\"text-center\">
                                                                    <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                           class=\"CORBINTERVE\"
                                                                           value=\"";
                        // line 468
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inter"], "id", [], "any", false, false, false, 468), "html", null, true);
                        yield "\"></td>
                                                                <td class=\"text-pri text-left\">";
                        // line 469
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["inter"], "nom", [], "any", false, false, false, 469)), "html", null, true);
                        yield "</td>
                                                                <td class=\"text-right\">INTERVENANTS NON SOLDÉS</td>
                                                                <td class=\"text-left\">";
                        // line 471
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["inter"], "profession", [], "any", false, false, false, 471)), "html", null, true);
                        yield "</td>
                                                                <td class=\"text-right\">";
                        // line 472
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["inter"], "payer", [], "any", false, false, false, 472), 2, ",", " "), "html", null, true);
                        yield "</td>
                                                                <td class=\"text-right\">";
                        // line 473
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["inter"], "recu", [], "any", false, false, false, 473), 2, ",", " "), "html", null, true);
                        yield "</td>
                                                                <td class=\"text-right\">";
                        // line 474
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["inter"], "reste", [], "any", false, false, false, 474), 2, ",", " "), "html", null, true);
                        yield "</td>
                                                                <td class=\"text-left col-blue\"><i
                                                                            class=\"fa fa-user col-blue\"></i>&nbsp;
                                                                    ";
                        // line 477
                        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["inter"], "dobyuser", [], "any", false, false, false, 477))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 478
                            yield "                                                                        ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inter"], "dobyuser", [], "any", false, false, false, 478), "nom", [], "any", false, false, false, 478)), "html", null, true);
                            yield "
                                                                        &nbsp;";
                            // line 479
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inter"], "dobyuser", [], "any", false, false, false, 479), "prenoms", [], "any", false, false, false, 479)), "html", null, true);
                        }
                        // line 480
                        yield "                                                                </td>
                                                            </tr>
                                                        ";
                    }
                    // line 483
                    yield "                                                    ";
                }
                // line 484
                yield "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['inter'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 485
            yield "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 486
        yield "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        // line 493
        yield "
                        ";
        // line 495
        yield "                        <div class=\"panel panel-pri\">
                            <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingDeu\">
                                <h5 class=\"panel-title \">
                                    <a class=\"collapsed text-white\" role=\"button\" data-toggle=\"collapse\"
                                       data-parent=\"#accordion_1\"
                                       href=\"#collapseDeu\" aria-expanded=\"false\"
                                       aria-controls=\"collapseDeu\"
                                       style=\"font-size: 14px!important; font-weight: 500\">
                                        <i class=\"material-icons text-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>
                                        CARNET D'ADRESSE
                                    </a>
                                </h5>
                            </div>
                            <div id=\"collapseDeu\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                 aria-labelledby=\"headingDeu\">
                                <div class=\"panel-body\" style=\"overflow: scroll\">
                                    <div class=\"table-responsive shadow\" style=\"padding: 10px\">
                                        <table class=\"table-striped table-bordered display nowrape\"  style=\"width: 100%\" id=\"dataCORBCONTACT\">
                                            <thead>
                                            <tr class=\"text-center\">
                                                <th style=\"width: 10px !important;\"></th>
                                                <th>CONTACT</th>
                                                <th>FONCTION</th>
                                                <th>EMAIL</th>
                                                <th>TÉLÉPHONE</th>
                                                <th>BUREAU</th>
                                                <th>CREÉ PAR
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 526
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 526, $this->source); })()), "user", [], "any", false, false, false, 526), "clients", [], "any", false, false, false, 526));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 527
            yield "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "contacts", [], "any", false, false, false, 527));
            foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                // line 528
                yield "                                                    ";
                if (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "corbeille", [], "any", false, false, false, 528)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "corbeille", [], "any", false, false, false, 528), "etat", [], "any", false, false, false, 528) != "ultra"))) {
                    // line 529
                    yield "                                                        <tr class=\"text-center\">
                                                            <td class=\"text-center\">
                                                                <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                       class=\"CORBCONTACT\"
                                                                       value=\"";
                    // line 533
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 533), "html", null, true);
                    yield "\"></td>
                                                            <td class=\"text-pri text-left\">";
                    // line 534
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "contact", [], "any", false, false, false, 534)), "html", null, true);
                    yield "</td>
                                                            <td class=\"text-left\">";
                    // line 535
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "fonction", [], "any", false, false, false, 535), "html", null, true);
                    yield "</td>
                                                            <td class=\"text-left\">";
                    // line 536
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "mail", [], "any", false, false, false, 536)), "html", null, true);
                    yield "</td>
                                                            <td>";
                    // line 537
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "phone", [], "any", false, false, false, 537)), "html", null, true);
                    yield "</td>
                                                            <td>";
                    // line 538
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "bureau", [], "any", false, false, false, 538)), "html", null, true);
                    yield "</td>
                                                            <td class=\"text-left col-blue\"><i
                                                                        class=\"fa fa-user col-blue\"></i>&nbsp;
                                                                ";
                    // line 541
                    if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "dobyuser", [], "any", false, false, false, 541))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 542
                        yield "                                                                    ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "dobyuser", [], "any", false, false, false, 542), "nom", [], "any", false, false, false, 542)), "html", null, true);
                        yield "
                                                                    &nbsp;";
                        // line 543
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "dobyuser", [], "any", false, false, false, 543), "prenoms", [], "any", false, false, false, 543)), "html", null, true);
                        yield "
                                                                ";
                    }
                    // line 545
                    yield "                                                            </td>
                                                        </tr>
                                                    ";
                }
                // line 548
                yield "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['contact'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 549
            yield "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 550
        yield "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        // line 557
        yield "
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
        return "content/corbeille.html.twig";
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
        return array (  1217 => 557,  1209 => 550,  1203 => 549,  1197 => 548,  1192 => 545,  1187 => 543,  1182 => 542,  1180 => 541,  1174 => 538,  1170 => 537,  1166 => 536,  1162 => 535,  1158 => 534,  1154 => 533,  1148 => 529,  1145 => 528,  1140 => 527,  1136 => 526,  1103 => 495,  1100 => 493,  1092 => 486,  1086 => 485,  1080 => 484,  1077 => 483,  1072 => 480,  1069 => 479,  1064 => 478,  1062 => 477,  1056 => 474,  1052 => 473,  1048 => 472,  1044 => 471,  1039 => 469,  1035 => 468,  1029 => 464,  1026 => 463,  1023 => 462,  1018 => 461,  1014 => 460,  980 => 428,  977 => 426,  969 => 419,  963 => 418,  960 => 417,  954 => 416,  951 => 415,  945 => 411,  937 => 409,  935 => 408,  930 => 406,  924 => 405,  919 => 403,  911 => 402,  907 => 401,  902 => 399,  897 => 397,  891 => 394,  885 => 390,  882 => 389,  879 => 388,  874 => 387,  871 => 386,  867 => 385,  835 => 355,  832 => 353,  824 => 346,  818 => 345,  815 => 344,  809 => 343,  806 => 342,  797 => 338,  793 => 337,  789 => 336,  785 => 335,  777 => 334,  773 => 333,  769 => 332,  764 => 330,  758 => 327,  752 => 323,  749 => 322,  746 => 321,  741 => 320,  738 => 319,  734 => 318,  702 => 288,  699 => 286,  691 => 279,  685 => 278,  682 => 277,  676 => 276,  673 => 275,  665 => 272,  659 => 269,  652 => 267,  648 => 266,  643 => 264,  639 => 263,  633 => 260,  629 => 258,  622 => 256,  620 => 255,  617 => 254,  610 => 252,  608 => 251,  605 => 250,  603 => 249,  599 => 248,  594 => 246,  589 => 244,  582 => 240,  577 => 238,  572 => 235,  569 => 234,  566 => 233,  561 => 232,  558 => 231,  554 => 230,  522 => 200,  519 => 198,  507 => 188,  503 => 187,  499 => 186,  495 => 185,  490 => 183,  483 => 178,  477 => 177,  474 => 176,  468 => 175,  465 => 174,  459 => 171,  455 => 170,  451 => 169,  447 => 168,  442 => 166,  437 => 164,  433 => 163,  428 => 161,  419 => 158,  415 => 157,  411 => 156,  406 => 154,  399 => 149,  396 => 148,  393 => 147,  388 => 146,  385 => 145,  381 => 144,  366 => 131,  360 => 130,  357 => 129,  354 => 128,  351 => 127,  349 => 126,  346 => 125,  340 => 124,  337 => 123,  334 => 122,  331 => 121,  328 => 120,  325 => 119,  322 => 118,  320 => 117,  317 => 116,  313 => 115,  310 => 114,  307 => 113,  304 => 112,  301 => 111,  298 => 110,  293 => 109,  290 => 108,  287 => 107,  284 => 106,  281 => 105,  278 => 104,  275 => 103,  272 => 102,  270 => 101,  253 => 86,  250 => 84,  241 => 76,  235 => 75,  229 => 72,  225 => 71,  221 => 70,  217 => 69,  210 => 67,  205 => 65,  200 => 63,  193 => 58,  187 => 57,  184 => 56,  181 => 55,  178 => 54,  175 => 53,  172 => 52,  169 => 51,  166 => 50,  161 => 49,  158 => 48,  155 => 47,  152 => 46,  147 => 45,  144 => 44,  142 => 43,  113 => 16,  100 => 4,  87 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}{{ title }}{% endblock %}
{% block body %}

    <section class=\"content\" style=\"margin-top: 70px !important;\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"panel-group\" id=\"accordion_1\" role=\"tablist\" aria-multiselectable=\"true\">
                    <div class=\"panel-group\" id=\"accordion_1\" role=\"tablist\" aria-multiselectable=\"true\">
                        <div class=\"row clearfix m-t-40\">
                            <div class=\"col-sm-12\">
                                <h2 class=\"col-blue-grey font-bold\">Corbeille</h2><br>
                            </div>
                        </div>
                        {# CLIENT #}
                        <div class=\"panel panel-pri shadow\">
                            <div class=\"panel-heading\" role=\"tab\" id=\"headingOne_CLI\">
                                <h5 class=\"panel-title\">
                                    <a class=\"collapsed fontes text-white\" role=\"button\" data-toggle=\"collapse\"
                                       data-parent=\"#accordion_0\" href=\"#collapseOne_CLI\" aria-expanded=\"false\"
                                       aria-controls=\"collapseOne_CLI\" style=\"font-size: 16px!important\">
                                        <i class=\"material-icons text-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Clients
                                    </a>
                                </h5>
                            </div>
                            <div id=\"collapseOne_CLI\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                 aria-labelledby=\"headingOne_CLI\">
                                <div class=\"panel-body\">
                                    <div class=\"table-responsive shadow\" style=\"padding: 20px\">
                                        <table class=\"table-bordered  display nowrape\" style=\"width: 100%\"
                                               id=\"dataLISTEDELCLIENTS\">
                                            <thead>
                                            <tr class=\"font-weight-normal\">
                                                <th class=\"text-center\" style=\"width: 10px !important;\"></th>
                                                <th class=\"text-center\">CLIENTS</th>
                                                <th class=\"text-center\">N° DE CLIENT</th>
                                                <th class=\"text-center\">ADRESSE</th>
                                                <th class=\"text-center\">CONTACTS</th>
                                                <th class=\"text-center\">COMPTE C.</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {% set tpc = 0 %}
                                            {% set tpa = 0 %}
                                            {% for client in master.clients %}
                                                {% if client.corbeille is not null and client.corbeille.etat != 'ultra' %}
                                                    {% set pc = 0 %}
                                                    {% set pa = 0 %}
                                                    {% for chantier in client.chantiers %}
                                                        {% if chantier.corbeille is null %}
                                                            {% if chantier.archiver != 'oui' %}
                                                                {% set pc = pc + 1 %}
                                                            {% else %}
                                                                {% set pa = pa + 1 %}
                                                            {% endif %}
                                                        {% endif %}
                                                    {% endfor %}

                                                    <tr>
                                                        <td class=\"text-center\">
                                                            <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                   class=\"CLYEDEL\"
                                                                   value=\"{{ client.id }}\"></td>
                                                        <td>
                                                            <a href=\"{{ path('client', {'id': client.id}) }}\"
                                                               class=\"text-pri font-bold\"
                                                               title=\"{{ client.nomclient|upper }}\">{{ client.nomclient|upper }}</a>
                                                        </td>
                                                        <td class=\"text-center\">{{ client.code }}</td>
                                                        <td class=\"text-center\">{{ client.adresse }}</td>
                                                        <td class=\"text-center\">{{ client.contact }}</td>
                                                        <td class=\"text-center\">{{ client.contribuable }}</td>
                                                    </tr>
                                                {% endif %}
                                            {% endfor %}
                                            </tbody>
                                        </table>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {# FIN #}

                        {# CHANTIER #}
                        <div class=\"panel panel-pri shadow\">
                            <div class=\"panel-heading\" role=\"tab\" id=\"headingOne_PS\">
                                <h5 class=\"panel-title\">
                                    <a class=\"collapsed fontes text-white\" role=\"button\" data-toggle=\"collapse\"
                                       data-parent=\"#accordion_PS\" href=\"#collapseOne_PS\" aria-expanded=\"false\"
                                       aria-controls=\"collapseOne_PS\" style=\"font-size: 16px!important\">
                                        <i class=\"material-icons text-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Chantiers
                                    </a>
                                </h5>
                            </div>
                            <div id=\"collapseOne_PS\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                 aria-labelledby=\"headingOne_PS\">
                                <div class=\"panel-body\" style=\"overflow: scroll\">
                                    <div class=\"table-responsive shadow\" style=\"padding: 20px\">
                                        <table class=\"table-bordered shadow display nowrape\" id=\"dataCHANTIERSUP\" style=\"width: 100%\">
                                            {% set cout = 0 %}
                                            {% set check = 0 %}
                                            {% set ccheck = 0 %}
                                            {% set reglement = 0 %}
                                            {% set depense = 0 %}
                                            {% set tcout = 0 %}
                                            {% set treglement = 0 %}
                                            {% set tdepense = 0 %}
                                            {% for client in master.clients %}
                                                {% if client.corbeille is null %}
                                                    {% set vp = 0 %}
                                                    {% set vr = 0 %}
                                                    {% set dp = 0 %}

                                                    {% for chantier in client.chantiers %}

                                                            {% if chantier.corbeille is not null and chantier.corbeille.etat != 'ultra' %}
                                                                {% if chantier.archiver != 'oui' %}
                                                                    {% set vp = chantier.cout + vp %}
                                                                    {% set vr = chantier.reglement + vr %}
                                                                    {% set dp = chantier.depense + dp %}
                                                                {% endif %}
                                                            {% endif %}
                                                    {% endfor %}

                                                    {% set tcout = vp + tcout %}
                                                    {% set treglement = vr + treglement %}
                                                    {% set tdepense = dp + tdepense %}
                                                {% endif %}
                                            {% endfor %}
                                            <thead>
                                            <tr class=\"font-weight-normal\">
                                                <th style=\"width: 10px !important;\"></th>
                                                <th class=\"col-blue-grey\">CLIENT / CHANTIER</th>
                                                <th class=\"text-center col-blue-grey\">COÛT</th>
                                                <th class=\"text-center col-blue-grey\">CLIENT</th>
                                                <th class=\"text-center col-blue-grey\">RÈGLEMENT</th>
                                                <th class=\"text-center col-blue-grey\">SOLDE</th>
                                                <th class=\"text-center col-blue-grey\">DÉPENSES</th>
                                                <th class=\"text-center col-blue-grey\">MARGES EST.</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {% for client in master.clients %}
                                                {% if client.corbeille is null %}
                                                    {% for chantier in client.chantiers %}
                                                        {% if chantier.corbeille is not null and chantier.corbeille.etat != 'ultra' %}
                                                            {% if chantier.archiver != 'oui' %}
                                                                <tr>
                                                                    <td class=\"text-center\">
                                                                        <input type=\"checkbox\"
                                                                               data-toggle=\"toggle\"
                                                                               class=\"PROJSUP\"
                                                                               value=\"{{ chantier.id }}\"></td>
                                                                    <td>
                                                                        <a href=\"{{ path('chantier', {'id': chantier.id}) }}\"
                                                                           title=\"{{ chantier.nomchantier }}\">{% if chantier.sous is not null %}
                                                                                <span class=\"badge bg-orange\">SP</span>{% endif %} {{ chantier.nomchantier|upper }}
                                                                        </a>
                                                                    </td>
                                                                    <td class=\"text-right\">{{ chantier.cout|number_format(2,',',' ') }}</td>
                                                                    <td>
                                                                        <a href=\"{{ path('client',{'id':client.id}) }}\"
                                                                           title=\"{{ client.nomclient }}\"
                                                                           class=\"text-white\">
                                                                            {{ client.nomclient|upper }}</a>
                                                                    </td>
                                                                    <td class=\"text-right\">{{ chantier.reglement|number_format(2,',',' ') }}</td>
                                                                    <td style=\"text-align: right\">{{ (chantier.cout|number_format(2,'.','') -  chantier.reglement|number_format(2,'.',''))|number_format(2,',',' ') }}</td>
                                                                    <td style=\"text-align: right\">{{ chantier.depense|number_format(2,',',' ') }}</td>
                                                                    <td style=\"text-align: right\">{{ (chantier.cout|number_format(2,'.','') -  chantier.depense|number_format(2,'.',''))|number_format(2,',',' ') }}</td>
                                                                </tr>
                                                            {% endif %}
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endif %}
                                            {% endfor %}
                                            </tbody>
                                            <tfoot>
                                            <tr class=\"font-weight-normal\">
                                                <th style=\"width: 10px !important;\"></th>
                                                <th class=\"col-blue-grey\"></th>
                                                <th class=\"text-center bg-blue text-white\">{{ tcout|number_format(2,',',' ') }}</th>
                                                <th class=\"text-center col-blue\"></th>
                                                <th class=\"text-center bg-blue text-white\">{{ treglement|number_format(2,',',' ') }}</th>
                                                <th class=\"text-center bg-blue text-white\">{{ (tcout|number_format(2,'.','') -  treglement|number_format(2,'.',''))|number_format(2,',',' ') }}</th>
                                                <th class=\"text-center bg-blue text-white\">{{ tdepense|number_format(2,',',' ') }}</th>
                                                <th class=\"text-center bg-blue text-white\">{{ (tcout|number_format(2,'.','') -  tdepense|number_format(2,'.',''))|number_format(2,',',' ') }}</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        {# FIN #}

                        {# DEVIS #}
                        <div class=\"panel panel-pri shadow\">
                            <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingSdev\">
                                <h5 class=\"panel-title\">
                                    <a class=\"collapsed fontes text-white\" role=\"button\" data-toggle=\"collapse\"
                                       data-parent=\"#accordion_1\" href=\"#collapseSdev\" aria-expanded=\"false\"
                                       aria-controls=\"collapseSdev\" style=\"font-size: 16px!important\">
                                        <i class=\"material-icons text-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>
                                        Devis supprimés
                                    </a>
                                </h5>
                            </div>
                            <div id=\"collapseSdev\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                 aria-labelledby=\"headingSdev\">
                                <div class=\"panel-body\" style=\"overflow: scroll\">
                                    <div class=\"table-responsive shadow\" style=\"padding: 10px\">
                                        <table class=\"table-bordered display nowrape\" style=\"width: 100%\"
                                               id=\"dataCORDEVIS\">
                                            <thead>
                                            <tr class=\"text-center\">
                                                <th class=\"mw30\"></th>
                                                <th class=\"mw30\"></th>
                                                <th>DATE</th>
                                                <th>N° DEVIS</th>
                                                <th>TOTAL HT</th>
                                                <th>TOTAL TTC</th>
                                                <th>ETAT</th>
                                                <th>SUPPRIMÉ PAR</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {% for client in master.clients %}
                                                {% if client.corbeille is null %}
                                                    {% for devis in client.devis %}
                                                        {% if devis.chantier.corbeille is null %}
                                                            {% if devis.corbeille is not null and devis.corbeille.etat != 'ultra' %}
                                                                <tr>
                                                                    <td class=\"text-center\">
                                                                        <input type=\"checkbox\" data-toggle=\"toggle\" class=\"CORBDEV\"
                                                                               value=\"{{ devis.id }}\"></td>
                                                                    <td class=\"text-center\">
                                                                        <a href=\"#\" onclick=\"shasha({{ devis.id }},'imprimdevis');\"><i
                                                                                    class=\"fa fa-eye col-green\"
                                                                                    aria-hidden=\"true\"></i></a>
                                                                    </td>
                                                                    <td>{{ devis.date|date('Y/m/d H:m') }}</td>
                                                                    <td>
                                                                        <a href=\"{{ path('editdevis', {'id': devis.id, 'idchantier': devis.chantier.id}) }}\"
                                                                           style=\"color:dodgerblue\"
                                                                           title=\"{{ devis.devreference|striptags|raw }}\">
                                                                            {% if devis.etat == \"valide\" %}
                                                                                <span class=\"badge badge-pill badge-primary\"
                                                                                      title=\"Validé par {% if devis.vabyuser is not null %}
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            {{ devis.vabyuser.prenoms|upper }}{% endif %}\">V</span>
                                                                            {% else %}
                                                                                <span class=\"badge badge-pill text-white\"
                                                                                      title=\"Dévalidé par {% if devis.vabyuser is not null %}
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            {{ devis.vabyuser.prenoms|upper }}{% endif %}\">V</span>
                                                                            {% endif %}
                                                                            DEVIS
                                                                            N°
                                                                            {{ devis.iddevis }}
                                                                        </a>
                                                                    </td>
                                                                    <td class=\"text-right\">{{ devis.totalht|number_format(2,',',' ') }}</td>
                                                                    <td class=\"text-right\">{{ devis.totalttc|number_format(2,',',' ') }}</td>

                                                                    <td title=\"{{ devis.devreference|striptags|raw }}\"><a
                                                                                href=\"{{ path('chantier',{'id':devis.chantier.id}) }}\">{{ devis.client.nomclient }}
                                                                            |
                                                                            {{ devis.chantier.nomchantier }}</a></td>

                                                                    <td class=\"text-left col-blue\">
                                                                        <i class=\"fa fa-user col-blue\"></i>{{ devis.corbeille.delby.nom }} {{ devis.corbeille.delby.prenoms }}</td>
                                                                </tr>
                                                            {% endif %}
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endif %}
                                            {% endfor %}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {# FIN #}

                        {# COMMANDE #}
                        <div class=\"panel panel-pri\">
                            <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingCor\">
                                <h5 class=\"panel-title\">
                                    <a class=\"collapsed fontes text-white\" role=\"button\" data-toggle=\"collapse\"
                                       data-parent=\"#accordion_1\" href=\"#collapseCor\" aria-expanded=\"false\"
                                       aria-controls=\"collapseCor\" style=\"font-size: 16px!important\">
                                        <i class=\"material-icons text-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>
                                        Bons de commande supprimés
                                    </a>
                                </h5>
                            </div>
                            <div id=\"collapseCor\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                 aria-labelledby=\"headingCor\">
                                <div class=\"panel-body\" style=\"overflow: scroll\">
                                    <div class=\"table-responsive shadow\" style=\"padding: 10px\">
                                        <table class=\"table-bordered display nowrape\" style=\"width: 100%\"
                                               id=\"dataCORBBON\">
                                            <thead>
                                            <tr class=\"text-center\">
                                                <th style=\"width: 10px !important;\"></th>
                                                <th style=\"width: 80px\">SUPPRIMÉ LE</th>
                                                <th>N° DE BON</th>
                                                <th>CLIENTS/PROJETS</th>
                                                <th class=\"text-center\">TOTAL HT</th>
                                                <th class=\"text-center\">TOTAL TTC</th>
                                                <th>SUPPRIMÉ PAR</th>
                                                <th style=\"background-color: #E8E8E8 !important;\">TYPE</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {% for client in master.clients %}
                                                {% if client.corbeille is null %}
                                                    {% for bon in client.bons %}
                                                        {% if bon.chantier.corbeille is null %}
                                                            {% if bon.corbeille is not null and bon.corbeille.etat != 'ultra' %}
                                                                <tr>
                                                                    <td class=\"text-center\"><input type=\"checkbox\"
                                                                                                   data-toggle=\"toggle\"
                                                                                                   class=\"CORBBON\"
                                                                                                   value=\"{{ bon.id }}\">
                                                                    </td>
                                                                    <td class=\"text-center\"
                                                                        style=\"width: 140px !important;\">{{ bon.corbeille.date|date('Y.m.d H.i.s') }}</td>
                                                                    <td>
                                                                        <a href=\"{{ path('editbon', {'id': bon.id, 'idchantier': bon.chantier.id}) }}\">BON
                                                                            N° {{ bon.numbon }}</a></td>
                                                                    <td title=\"{{ bon.client.nomclient }} | {{ bon.chantier.nomchantier }}\">{{ bon.client.nomclient }}
                                                                        | {{ bon.chantier.nomchantier }}</td>
                                                                    <td class=\"text-right\">{{ bon.totalht|number_format(2,',',' ') }}</td>
                                                                    <td class=\"text-right\">{{ bon.totalttc|number_format(2,',',' ') }}</td>
                                                                    <td>{{ bon.corbeille.delby.nom }} {{ bon.corbeille.delby.prenoms }}</td>
                                                                    <td>BONS SUPPRIMÉS</td>
                                                                </tr>
                                                            {% endif %}
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endif %}
                                            {% endfor %}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {# FIN #}

                        {# CAISSE #}
                        <div class=\"panel panel-pri\">
                            <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingCass\">
                                <h5 class=\"panel-title\">
                                    <a class=\"collapsed fontes text-white\" role=\"button\" data-toggle=\"collapse\"
                                       data-parent=\"#accordion_1\" href=\"#collapseCass\" aria-expanded=\"false\"
                                       aria-controls=\"collapseCass\" style=\"font-size: 16px!important\">
                                        <i class=\"material-icons text-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>
                                        Bons de caisse supprimés
                                    </a>
                                </h5>
                            </div>
                            <div id=\"collapseCass\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                 aria-labelledby=\"headingCass\">
                                <div class=\"panel-body\" style=\"overflow: scroll\">
                                    <div class=\"table-responsive shadow\" style=\"padding: 10px\">
                                        <table class=\"table-bordered display nowrape\" style=\"width: 100%\"
                                               id=\"dataCORBCAISSE\">
                                            <thead>
                                            <tr class=\"text-center\">
                                                <th style=\"width: 10px !important;\"></th>
                                                <th style=\"width: 80px\">SUPPRIMÉ LE</th>
                                                <th>N° DE BON</th>
                                                <th>CLIENTS/PROJETS</th>
                                                <th class=\"text-center\">FACTURÉ À</th>
                                                <th class=\"text-center\">MONTANT</th>
                                                <th>SUPPRIMÉ PAR</th>
                                                <th style=\"background-color: #E8E8E8 !important;\">TYPE</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {% for client in master.clients %}
                                                {% if client.corbeille is null %}
                                                    {% for caiss in client.caisses %}
                                                        {% if caiss.chantier.corbeille is null %}
                                                            {% if caiss.corbeille is not null and caiss.corbeille.etat != 'ultra' %}
                                                                <tr>
                                                                    <td class=\"text-center\"><input type=\"checkbox\"
                                                                                                   data-toggle=\"toggle\"
                                                                                                   class=\"CORBCAISSE\"
                                                                                                   value=\"{{ caiss.id }}\">
                                                                    </td>
                                                                    <td class=\"text-center\"
                                                                        style=\"width: 140px !important;\">{{ caiss.corbeille.date|date('Y.m.d H.i.s') }}</td>
                                                                    <td>
                                                                        <a href=\"{{ path('editcaisse', {'idcaisse': caiss.id, 'idchantier': caiss.chantier.id}) }}\">BON
                                                                            DE CAISSE
                                                                            N° {{ caiss.numcaisse }}</a></td>
                                                                    <td title=\"{{ caiss.client.nomclient }} | {{ caiss.chantier.nomchantier }}\">{{ caiss.client.nomclient }}
                                                                        | {{ caiss.chantier.nomchantier }}</td>

                                                                    <td class=\"text-right\">{% if caiss.intervenant %}{{ caiss.intervenant.nom }}{% endif %}</td>
                                                                    <td class=\"text-right\">{{ caiss.montant|number_format(2,',',' ') }}</td>
                                                                    <td>
                                                                {% if caiss.corbeille.delby %}
                                                                        {{ caiss.corbeille.delby.nom }} {{ caiss.corbeille.delby.prenoms }}
                                                                    {% endif %}
                                                                    </td>
                                                                    <td>BON DE CAISSE SUPPRIMÉS</td>
                                                                </tr>
                                                            {% endif %}
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endif %}
                                            {% endfor %}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {# FIN #}

                        {# INTERVENANT #}
                        <div class=\"panel panel-pri\">
                            <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingTroi\">
                                <h5 class=\"panel-title \">
                                    <a class=\"collapsed text-white\" role=\"button\" data-toggle=\"collapse\"
                                       data-parent=\"#accordion_1\"
                                       href=\"#collapseTroi\" aria-expanded=\"false\"
                                       aria-controls=\"collapseTroi\" style=\"font-size: 16px!important\">
                                        <i class=\"material-icons text-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>
                                        Intervenants
                                    </a>
                                </h5>
                            </div>
                            <div id=\"collapseTroi\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                 aria-labelledby=\"headingTroi\">
                                <div class=\"panel-body\" style=\"overflow: scroll\">
                                    <div class=\"table-responsive shadow\" style=\"padding: 10px\">
                                        <table class=\"table-striped table-bordered display nowrape\"
                                               style=\"width: 100%\" id=\"dataCORBINTERVE\">
                                            <thead>
                                            <tr class=\"text-center\">
                                                <th style=\"width: 10px !important;\"></th>
                                                <th>INTERVENANT</th>
                                                <th>ETAT</th>
                                                <th>PROFESSION</th>
                                                <th>MONTANT FACTURÉ</th>
                                                <th>MONTANT REÇU</th>
                                                <th>RESTE À PAYER</th>
                                                <th>CREÉ PAR
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {% for client in master.clients %}
                                                {% for inter in client.intervenants %}
                                                    {% if inter.corbeille is not null and inter.corbeille.etat != 'ultra' %}
                                                        {% if inter.payer !=  inter.recu %}
                                                            <tr>
                                                                <td class=\"text-center\">
                                                                    <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                           class=\"CORBINTERVE\"
                                                                           value=\"{{ inter.id }}\"></td>
                                                                <td class=\"text-pri text-left\">{{ inter.nom|upper }}</td>
                                                                <td class=\"text-right\">INTERVENANTS NON SOLDÉS</td>
                                                                <td class=\"text-left\">{{ inter.profession|upper }}</td>
                                                                <td class=\"text-right\">{{ inter.payer|number_format(2,',',' ') }}</td>
                                                                <td class=\"text-right\">{{ inter.recu|number_format(2,',',' ') }}</td>
                                                                <td class=\"text-right\">{{ inter.reste|number_format(2,',',' ') }}</td>
                                                                <td class=\"text-left col-blue\"><i
                                                                            class=\"fa fa-user col-blue\"></i>&nbsp;
                                                                    {% if inter.dobyuser is not null %}
                                                                        {{ inter.dobyuser.nom|upper }}
                                                                        &nbsp;{{ inter.dobyuser.prenoms|upper }}{% endif %}
                                                                </td>
                                                            </tr>
                                                        {% endif %}
                                                    {% endif %}
                                                {% endfor %}
                                            {% endfor %}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {# FIN #}

                        {# CONTACTS #}
                        <div class=\"panel panel-pri\">
                            <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingDeu\">
                                <h5 class=\"panel-title \">
                                    <a class=\"collapsed text-white\" role=\"button\" data-toggle=\"collapse\"
                                       data-parent=\"#accordion_1\"
                                       href=\"#collapseDeu\" aria-expanded=\"false\"
                                       aria-controls=\"collapseDeu\"
                                       style=\"font-size: 14px!important; font-weight: 500\">
                                        <i class=\"material-icons text-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>
                                        CARNET D'ADRESSE
                                    </a>
                                </h5>
                            </div>
                            <div id=\"collapseDeu\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                 aria-labelledby=\"headingDeu\">
                                <div class=\"panel-body\" style=\"overflow: scroll\">
                                    <div class=\"table-responsive shadow\" style=\"padding: 10px\">
                                        <table class=\"table-striped table-bordered display nowrape\"  style=\"width: 100%\" id=\"dataCORBCONTACT\">
                                            <thead>
                                            <tr class=\"text-center\">
                                                <th style=\"width: 10px !important;\"></th>
                                                <th>CONTACT</th>
                                                <th>FONCTION</th>
                                                <th>EMAIL</th>
                                                <th>TÉLÉPHONE</th>
                                                <th>BUREAU</th>
                                                <th>CREÉ PAR
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {% for client in app.user.clients %}
                                                {% for contact in client.contacts %}
                                                    {% if contact.corbeille is not null and contact.corbeille.etat != 'ultra' %}
                                                        <tr class=\"text-center\">
                                                            <td class=\"text-center\">
                                                                <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                       class=\"CORBCONTACT\"
                                                                       value=\"{{ contact.id }}\"></td>
                                                            <td class=\"text-pri text-left\">{{ contact.contact|upper }}</td>
                                                            <td class=\"text-left\">{{ contact.fonction }}</td>
                                                            <td class=\"text-left\">{{ contact.mail|capitalize }}</td>
                                                            <td>{{ contact.phone|capitalize }}</td>
                                                            <td>{{ contact.bureau|capitalize }}</td>
                                                            <td class=\"text-left col-blue\"><i
                                                                        class=\"fa fa-user col-blue\"></i>&nbsp;
                                                                {% if contact.dobyuser is not null %}
                                                                    {{ contact.dobyuser.nom|upper }}
                                                                    &nbsp;{{ contact.dobyuser.prenoms|upper }}
                                                                {% endif %}
                                                            </td>
                                                        </tr>
                                                    {% endif %}
                                                {% endfor %}
                                            {% endfor %}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {# FIN CONTACT #}

                    </div>
                </div>
            </div>
        </div>
    </section>

{% endblock %}
", "content/corbeille.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\corbeille.html.twig");
    }
}
