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

/* content/attachedoc_excel.html.twig */
class __TwigTemplate_6ae726e29096e70732d020fbcf99e5aa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/attachedoc_excel.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/attachedoc_excel.html.twig"));

        // line 1
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 1, $this->source); })()) == "devis")) {
            // line 2
            yield "    <p style=\"clear: both\"></p>
    <div class=\"bood\">
        ";
            // line 4
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 4, $this->source); })()), "modele", [], "any", false, false, false, 4) == 1)) {
                // line 5
                yield "            <div>
                <table style=\"line-height: 1.5;float: right;\">
                    <tr>
                        <td style=\"border: none !important;text-align: center;  ;\">
                            <b>";
                // line 9
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 9, $this->source); })()), "client", [], "any", false, false, false, 9), "nomclient", [], "any", false, false, false, 9)), "html", null, true);
                yield "</b><br>
                            ";
                // line 10
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 10, $this->source); })()), "client", [], "any", false, false, false, 10), "adresse", [], "any", false, false, false, 10) == " ")) {
                    // line 11
                    yield "                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 11, $this->source); })()), "client", [], "any", false, false, false, 11), "adresse", [], "any", false, false, false, 11), "html", null, true);
                    yield "<br>
                            ";
                }
                // line 13
                yield "                            ";
                if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 13, $this->source); })()), "client", [], "any", false, false, false, 13), "code", [], "any", false, false, false, 13))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 14
                    yield "                                <b>N° DE CLIENTS:</b> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 14, $this->source); })()), "client", [], "any", false, false, false, 14), "code", [], "any", false, false, false, 14), "html", null, true);
                    yield "
                            ";
                }
                // line 16
                yield "                        </td>
                    </tr>
                </table>
                <p style=\"clear: both\"></p>
                ";
                // line 20
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 20, $this->source); })()), "type", [], "any", false, false, false, 20) == "esti")) {
                    // line 21
                    yield "                    <h3 class=\"font-bold m-t--10 col-blue\">DEVIS ESTIMATIF</h3>
                ";
                }
                // line 23
                yield "                <table>
                    <tr style=\"background-color: #f8f9fa !important; font-weight: 700;width: 45%\">
                        <td class=\"align-center\">DATE</td>
                        <td class=\"align-center\">N° DEVIS</td>
                        ";
                // line 27
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 27, $this->source); })()), "type", [], "any", false, false, false, 27) != "cps")) {
                    // line 28
                    yield "                            <td class=\"align-center\">AFFAIRE SUIVIE PAR</td>
                            <td class=\"align-center\">VALIDITÉ</td>
                        ";
                }
                // line 31
                yield "                    </tr>
                    <tr>
                        <td class=\"align-center\">";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 33, $this->source); })()), "date", [], "any", false, false, false, 33), "d/m/Y"), "html", null, true);
                yield "</td>
                        <td class=\"align-center\">";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 34, $this->source); })()), "iddevis", [], "any", false, false, false, 34), "html", null, true);
                yield "</td>
                        ";
                // line 35
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 35, $this->source); })()), "type", [], "any", false, false, false, 35) != "cps")) {
                    // line 36
                    yield "                            <td class=\"align-center\"></td>
                            <td class=\"align-center\">";
                    // line 37
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 37, $this->source); })()), "validit", [], "any", false, false, false, 37), "html", null, true);
                    yield "</td>
                        ";
                }
                // line 39
                yield "                    </tr>
                    <tr>
                        <td ";
                // line 41
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 41, $this->source); })()), "type", [], "any", false, false, false, 41) != "cps")) {
                    yield " colspan=\"4\" ";
                } else {
                    yield " colspan=\"2\" ";
                }
                yield ">
                            <span style=\"text-decoration: underline; line-height: 1.5; font-weight: bold\">RÉFÉRENCE</span><br>";
                // line 42
                yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 42, $this->source); })()), "devreference", [], "any", false, false, false, 42);
                yield "
                        </td>
                    </tr>
                </table>
            </div>
            <br>
            <table style=\"width: 100%;\">
                ";
                // line 49
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 49, $this->source); })()), "type", [], "any", false, false, false, 49) != "cps")) {
                    // line 50
                    yield "                    <tr class=\"printer\">
                        ";
                    // line 51
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 51, $this->source); })()), "aaref", [], "any", false, false, false, 51) == "oui")) {
                        // line 52
                        yield "                            <th style=\"text-align: center\">RÉF</th>
                        ";
                    }
                    // line 54
                    yield "                        <th style=\"max-width:500px !important; min-width: 250px !important; text-align: left\">
                            DÉSIGNATION
                        </th>
                        ";
                    // line 57
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 57, $this->source); })()), "zone", [], "any", false, false, false, 57) == "oui")) {
                        // line 58
                        yield "                            <th style=\"text-align: center\">SECTION</th>
                        ";
                    }
                    // line 60
                    yield "                        <th style=\"text-align: center\">UNITÉ</th>
                        <th style=\"text-align: center\">QTÉ</th>
                        <th style=\"text-align: center\">PRIX&nbsp;U.</th>
                        ";
                    // line 63
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 63, $this->source); })()), "aarem", [], "any", false, false, false, 63) == "oui")) {
                        // line 64
                        yield "                            <th style=\" text-align: center\">%REM</th>
                        ";
                    }
                    // line 66
                    yield "                        <th style=\"text-align: center\">MONTANT&nbsp;HT</th>
                    </tr>
                    ";
                    // line 68
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["listGroup"]) || array_key_exists("listGroup", $context) ? $context["listGroup"] : (function () { throw new RuntimeError('Variable "listGroup" does not exist.', 68, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                        // line 69
                        yield "                        <tr class=\"togo\">
                            ";
                        // line 70
                        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 70, $this->source); })()), "zone", [], "any", false, false, false, 70) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 70, $this->source); })()), "aarem", [], "any", false, false, false, 70) == "oui"))) {
                            // line 71
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 71, $this->source); })()), "aaref", [], "any", false, false, false, 71) == "oui")) {
                                // line 72
                                yield "                                    <td align=\"center\"><b>";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "reference", [], "any", false, false, false, 72), "html", null, true);
                                yield "</b></td>
                                ";
                            }
                            // line 74
                            yield "                                <td COLSPAN=\"7\"><b>";
                            yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "groupe", [], "any", false, false, false, 74));
                            yield "</b></td>

                            ";
                        } elseif (((CoreExtension::getAttribute($this->env, $this->source,                         // line 76
(isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 76, $this->source); })()), "zone", [], "any", false, false, false, 76) == "non") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 76, $this->source); })()), "aarem", [], "any", false, false, false, 76) == "non"))) {
                            // line 77
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 77, $this->source); })()), "aaref", [], "any", false, false, false, 77) == "oui")) {
                                // line 78
                                yield "                                    <td align=\"center\"><b>";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "reference", [], "any", false, false, false, 78), "html", null, true);
                                yield "</b></td>
                                ";
                            }
                            // line 80
                            yield "                                <td colspan=\"5\"><b>";
                            yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "groupe", [], "any", false, false, false, 80));
                            yield "</b></td>

                            ";
                        } elseif (((CoreExtension::getAttribute($this->env, $this->source,                         // line 82
(isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 82, $this->source); })()), "zone", [], "any", false, false, false, 82) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 82, $this->source); })()), "aarem", [], "any", false, false, false, 82) == "non"))) {
                            // line 83
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 83, $this->source); })()), "aaref", [], "any", false, false, false, 83) == "oui")) {
                                // line 84
                                yield "                                    <td align=\"center\"><b>";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "reference", [], "any", false, false, false, 84), "html", null, true);
                                yield "</b></td>
                                ";
                            }
                            // line 86
                            yield "                                <td colspan=\"6\"><b>";
                            yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "groupe", [], "any", false, false, false, 86));
                            yield "</b></td>

                            ";
                        } elseif (((CoreExtension::getAttribute($this->env, $this->source,                         // line 88
(isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 88, $this->source); })()), "aarem", [], "any", false, false, false, 88) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 88, $this->source); })()), "zone", [], "any", false, false, false, 88) == "non"))) {
                            // line 89
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 89, $this->source); })()), "aaref", [], "any", false, false, false, 89) == "oui")) {
                                // line 90
                                yield "                                    <td align=\"center\"><b>";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "reference", [], "any", false, false, false, 90), "html", null, true);
                                yield "</b></td>
                                ";
                            }
                            // line 92
                            yield "                                <td colspan=\"6\"><b>";
                            yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "groupe", [], "any", false, false, false, 92));
                            yield "</b></td>
                            ";
                        }
                        // line 94
                        yield "                        </tr>
                        ";
                        // line 95
                        $context["st"] = 0;
                        // line 96
                        yield "
                        ";
                        // line 97
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "lignes", [], "any", false, false, false, 97));
                        foreach ($context['_seq'] as $context["_key"] => $context["lign"]) {
                            // line 98
                            yield "                            <tr>
                                ";
                            // line 99
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 99, $this->source); })()), "aaref", [], "any", false, false, false, 99) == "oui")) {
                                // line 100
                                yield "                                    <td style=\"text-align: center\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "reference", [], "any", false, false, false, 100), "html", null, true);
                                yield "</td>
                                ";
                            }
                            // line 102
                            yield "                                <td align=\"left\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "designation", [], "any", false, false, false, 102);
                            yield "</td>
                                ";
                            // line 103
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 103, $this->source); })()), "zone", [], "any", false, false, false, 103) == "oui")) {
                                // line 104
                                yield "                                    <td style=\"text-align: center\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "zone", [], "any", false, false, false, 104), "html", null, true);
                                yield "</td>
                                ";
                            }
                            // line 106
                            yield "                                <td style=\"text-align: center\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "unite", [], "any", false, false, false, 106), "html", null, true);
                            yield "</td>
                                <td style=\"text-align: center\">";
                            // line 107
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 107), 2, ",", " "), "html", null, true);
                            yield "<br><span
                                            class=\"hider\">";
                            // line 108
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 108), 6, ",", "."), "html", null, true);
                            yield "</span></td>
                                <td style=\"text-align: right\">";
                            // line 109
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 109), 2, ",", " "), "html", null, true);
                            yield "<br><span
                                            class=\"hider\">";
                            // line 110
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 110), 5, ",", "."), "html", null, true);
                            yield "</span></td>
                                ";
                            // line 111
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 111, $this->source); })()), "aarem", [], "any", false, false, false, 111) == "oui")) {
                                // line 112
                                yield "                                    <td style=\"text-align: center\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "remise", [], "any", false, false, false, 112), "html", null, true);
                                yield "%</td>
                                ";
                            }
                            // line 114
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 114, $this->source); })()), "aarem", [], "any", false, false, false, 114) == "non")) {
                                // line 115
                                yield "                                    <td style=\"text-align: right\">";
                                $context["st"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 115) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 115)) + (isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 115, $this->source); })()));
                                yield " ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 115) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 115)), 2, ",", " "), "html", null, true);
                                yield "
                                        <br><span
                                                class=\"hider\">";
                                // line 117
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 117) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 117)), 4, ",", "."), "html", null, true);
                                yield "</span>
                                    </td>
                                ";
                            } else {
                                // line 120
                                yield "                                    <td style=\"text-align: right\">";
                                $context["st"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 120) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 120)) * ((100 - CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "remise", [], "any", false, false, false, 120)) / 100)) + (isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 120, $this->source); })()));
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 120) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 120)) * ((100 - CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "remise", [], "any", false, false, false, 120)) / 100)), 2, ",", " "), "html", null, true);
                                yield "</td>
                                ";
                            }
                            // line 122
                            yield "                                </td>
                            </tr>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['lign'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 125
                        yield "
                        <tr class=\"togo\">
                            ";
                        // line 127
                        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 127, $this->source); })()), "zone", [], "any", false, false, false, 127) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 127, $this->source); })()), "aarem", [], "any", false, false, false, 127) == "oui"))) {
                            // line 128
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 128, $this->source); })()), "aaref", [], "any", false, false, false, 128) == "oui")) {
                                // line 129
                                yield "                                    <td COLSPAN=\"8\" align=\"right\">
                                        <b>SOUS-TOTAL: ";
                                // line 130
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 130, $this->source); })()), 2, ",", " "), "html", null, true);
                                yield "</b></td>
                                ";
                            } else {
                                // line 132
                                yield "                                    <td COLSPAN=\"7\" align=\"right\">
                                        <b>SOUS-TOTAL: ";
                                // line 133
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 133, $this->source); })()), 2, ",", " "), "html", null, true);
                                yield "</b></td>
                                ";
                            }
                            // line 135
                            yield "                            ";
                        } elseif (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 135, $this->source); })()), "zone", [], "any", false, false, false, 135) == "non") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 135, $this->source); })()), "aarem", [], "any", false, false, false, 135) == "non"))) {
                            // line 136
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 136, $this->source); })()), "aaref", [], "any", false, false, false, 136) == "oui")) {
                                // line 137
                                yield "                                    <td COLSPAN=\"6\" align=\"right\">
                                        <b>SOUS-TOTAL: ";
                                // line 138
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 138, $this->source); })()), 2, ",", " "), "html", null, true);
                                yield "</b></td>
                                ";
                            } else {
                                // line 140
                                yield "                                    <td COLSPAN=\"5\" align=\"right\">
                                        <b>SOUS-TOTAL: ";
                                // line 141
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 141, $this->source); })()), 2, ",", " "), "html", null, true);
                                yield "</b></td>
                                ";
                            }
                            // line 143
                            yield "
                            ";
                        } elseif (((CoreExtension::getAttribute($this->env, $this->source,                         // line 144
(isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 144, $this->source); })()), "zone", [], "any", false, false, false, 144) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 144, $this->source); })()), "aarem", [], "any", false, false, false, 144) == "non"))) {
                            // line 145
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 145, $this->source); })()), "aaref", [], "any", false, false, false, 145) == "oui")) {
                                // line 146
                                yield "                                    <td COLSPAN=\"7\" align=\"right\">
                                        <b>SOUS-TOTAL: ";
                                // line 147
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 147, $this->source); })()), 2, ",", " "), "html", null, true);
                                yield "</b></td>
                                ";
                            } else {
                                // line 149
                                yield "                                    <td COLSPAN=\"6\" align=\"right\">
                                        <b>SOUS-TOTAL: ";
                                // line 150
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 150, $this->source); })()), 2, ",", " "), "html", null, true);
                                yield "</b></td>
                                ";
                            }
                            // line 152
                            yield "
                            ";
                        } elseif (((CoreExtension::getAttribute($this->env, $this->source,                         // line 153
(isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 153, $this->source); })()), "aarem", [], "any", false, false, false, 153) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 153, $this->source); })()), "zone", [], "any", false, false, false, 153) == "non"))) {
                            // line 154
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 154, $this->source); })()), "aaref", [], "any", false, false, false, 154) == "oui")) {
                                // line 155
                                yield "                                    <td COLSPAN=\"7\" align=\"right\">
                                        <b>SOUS-TOTAL: ";
                                // line 156
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 156, $this->source); })()), 2, ",", " "), "html", null, true);
                                yield "</b></td>
                                ";
                            } else {
                                // line 158
                                yield "                                    <td COLSPAN=\"6\" align=\"right\">
                                        <b>SOUS-TOTAL: ";
                                // line 159
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 159, $this->source); })()), 2, ",", " "), "html", null, true);
                                yield "</b></td>
                                ";
                            }
                            // line 161
                            yield "                            ";
                        }
                        // line 162
                        yield "
                        </tr>

                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['group'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 166
                    yield "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["lignes"]) || array_key_exists("lignes", $context) ? $context["lignes"] : (function () { throw new RuntimeError('Variable "lignes" does not exist.', 166, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["lign"]) {
                        // line 167
                        yield "                        ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "groupe", [], "any", false, false, false, 167) == null)) {
                            // line 168
                            yield "                            <tr>
                                ";
                            // line 169
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 169, $this->source); })()), "aaref", [], "any", false, false, false, 169) == "oui")) {
                                // line 170
                                yield "                                    <td style=\"text-align: center\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "reference", [], "any", false, false, false, 170), "html", null, true);
                                yield "</td>
                                ";
                            }
                            // line 172
                            yield "                                <td>";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "designation", [], "any", false, false, false, 172);
                            yield "</td>
                                ";
                            // line 173
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 173, $this->source); })()), "zone", [], "any", false, false, false, 173) == "oui")) {
                                // line 174
                                yield "                                    <td style=\"text-align: center\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "zone", [], "any", false, false, false, 174), "html", null, true);
                                yield "</td>
                                ";
                            }
                            // line 176
                            yield "                                <td style=\"text-align: center\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "unite", [], "any", false, false, false, 176), "html", null, true);
                            yield "</td>
                                <td style=\"text-align: center\">";
                            // line 177
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 177), 2, ",", " "), "html", null, true);
                            yield "<br><span
                                            class=\"hider\">";
                            // line 178
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 178), 6, ",", " "), "html", null, true);
                            yield "</span></td>
                                <td style=\"text-align: right\">";
                            // line 179
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 179), 2, ",", " "), "html", null, true);
                            yield "<br><span
                                            class=\"hider\">";
                            // line 180
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 180), 4, ",", "."), "html", null, true);
                            yield "</span></td>
                                ";
                            // line 181
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 181, $this->source); })()), "aarem", [], "any", false, false, false, 181) == "oui")) {
                                // line 182
                                yield "                                    <td style=\"text-align: center\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "remise", [], "any", false, false, false, 182), "html", null, true);
                                yield "%</td>
                                ";
                            }
                            // line 184
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 184, $this->source); })()), "aarem", [], "any", false, false, false, 184) == "non")) {
                                // line 185
                                yield "                                    <td style=\"text-align: right\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 185) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 185)), 2, ",", " "), "html", null, true);
                                yield "
                                        <br><span
                                                class=\"hider\">";
                                // line 187
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 187) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 187)), 4, ",", "."), "html", null, true);
                                yield "</span>
                                    </td>
                                ";
                            }
                            // line 190
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 190, $this->source); })()), "aarem", [], "any", false, false, false, 190) != "non")) {
                                // line 191
                                yield "                                    <td style=\"text-align: right\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 191) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 191)) * ((100 - CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "remise", [], "any", false, false, false, 191)) / 100)), 2, ",", " "), "html", null, true);
                                yield "</td>
                                ";
                            }
                            // line 193
                            yield "                            </tr>
                        ";
                        }
                        // line 195
                        yield "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['lign'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 196
                    yield "                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 196, $this->source); })()), "aarem", [], "any", false, false, false, 196) == "oui")) {
                        // line 197
                        yield "                        <tr>
                            ";
                        // line 198
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 198, $this->source); })()), "aaref", [], "any", false, false, false, 198) == "oui")) {
                            // line 199
                            yield "                                <td class=\"bord\"></td>
                            ";
                        }
                        // line 201
                        yield "                            <td class=\"bord\"></td>
                            ";
                        // line 202
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 202, $this->source); })()), "zone", [], "any", false, false, false, 202) == "oui")) {
                            // line 203
                            yield "                                <td class=\"bord\"></td>
                            ";
                        }
                        // line 205
                        yield "                            <td class=\"bord\"></td>
                            ";
                        // line 206
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 206, $this->source); })()), "aarem", [], "any", false, false, false, 206) == "oui")) {
                            // line 207
                            yield "                                ";
                            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 207, $this->source); })()), "ptva", [], "any", false, false, false, 207) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 207, $this->source); })()), "ptva", [], "any", false, false, false, 207) == "susp"))) {
                                // line 208
                                yield "                                    <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT SANS REMISE</b></td>
                                ";
                            } else {
                                // line 210
                                yield "                                    ";
                                if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 210, $this->source); })()), "ptva", [], "any", false, false, false, 210) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 210, $this->source); })()), "ptva", [], "any", false, false, false, 210) == "susp"))) {
                                    // line 211
                                    yield "                                        ";
                                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 211, $this->source); })()), "model", [], "any", false, false, false, 211) == 1)) {
                                        // line 212
                                        yield "                                            <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT SANS REMISE</b>
                                            </td>
                                        ";
                                    } else {
                                        // line 215
                                        yield "                                            <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT SANS REMISE</b>
                                            </td>
                                        ";
                                    }
                                    // line 218
                                    yield "                                    ";
                                }
                                // line 219
                                yield "                                ";
                            }
                            // line 220
                            yield "                            ";
                        } else {
                            // line 221
                            yield "                                ";
                            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 221, $this->source); })()), "ptva", [], "any", false, false, false, 221) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 221, $this->source); })()), "ptva", [], "any", false, false, false, 221) == "susp"))) {
                                // line 222
                                yield "                                    <td colspan=\"2\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT SANS REMISE</b></td>
                                ";
                            } else {
                                // line 224
                                yield "                                    ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 224, $this->source); })()), "model", [], "any", false, false, false, 224) == 1)) {
                                    // line 225
                                    yield "                                        <td colspan=\"2\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT SANS REMISE</b>
                                        </td>
                                    ";
                                } else {
                                    // line 228
                                    yield "                                        <td colspan=\"2\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT SANS REMISE</b>
                                        </td>
                                    ";
                                }
                                // line 231
                                yield "                                ";
                            }
                            // line 232
                            yield "                            ";
                        }
                        // line 233
                        yield "                            <td style=\"text-align: right\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 233, $this->source); })()), "totalht", [], "any", false, false, false, 233) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 233, $this->source); })()), "vremise", [], "any", false, false, false, 233)), 2, ",", " "), "html", null, true);
                        yield "</td>
                        </tr>
                        <tr>
                            ";
                        // line 236
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 236, $this->source); })()), "aaref", [], "any", false, false, false, 236) == "oui")) {
                            // line 237
                            yield "                                <td class=\"bord\"></td>
                            ";
                        }
                        // line 239
                        yield "                            <td class=\"bord\"></td>
                            ";
                        // line 240
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 240, $this->source); })()), "zone", [], "any", false, false, false, 240) == "oui")) {
                            // line 241
                            yield "                                <td class=\"bord\"></td>
                            ";
                        }
                        // line 243
                        yield "                            <td class=\"bord\"></td>
                            ";
                        // line 244
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 244, $this->source); })()), "aarem", [], "any", false, false, false, 244) == "oui")) {
                            // line 245
                            yield "                                <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>REMISE</b></td>
                            ";
                        } else {
                            // line 247
                            yield "                                <td class=\"bord\" colspan=\"2\" style=\"text-align: right;\"><b>REMISE</b></td>
                            ";
                        }
                        // line 249
                        yield "                            <td style=\"text-align: right\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 249, $this->source); })()), "vremise", [], "any", false, false, false, 249), 2, ",", " "), "html", null, true);
                        yield "</td>
                        </tr>
                    ";
                    }
                    // line 252
                    yield "                    <tr>
                        ";
                    // line 253
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 253, $this->source); })()), "aaref", [], "any", false, false, false, 253) == "oui")) {
                        // line 254
                        yield "                            <td class=\"bord\"></td>
                        ";
                    }
                    // line 256
                    yield "                        <td class=\"bord\"></td>
                        ";
                    // line 257
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 257, $this->source); })()), "zone", [], "any", false, false, false, 257) == "oui")) {
                        // line 258
                        yield "                            <td class=\"bord\"></td>
                        ";
                    }
                    // line 260
                    yield "                        <td class=\"bord\"></td>
                        ";
                    // line 261
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 261, $this->source); })()), "aarem", [], "any", false, false, false, 261) == "oui")) {
                        // line 262
                        yield "                            ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 262, $this->source); })()), "ptva", [], "any", false, false, false, 262) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 262, $this->source); })()), "ptva", [], "any", false, false, false, 262) == "susp"))) {
                            // line 263
                            yield "                                <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT</b></td>
                            ";
                        } else {
                            // line 265
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 265, $this->source); })()), "model", [], "any", false, false, false, 265) == 1)) {
                                // line 266
                                yield "                                    <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT</b></td>
                                ";
                            } else {
                                // line 268
                                yield "                                    <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL TTC</b></td>
                                ";
                            }
                            // line 270
                            yield "                            ";
                        }
                        // line 271
                        yield "                        ";
                    } else {
                        // line 272
                        yield "                            ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 272, $this->source); })()), "ptva", [], "any", false, false, false, 272) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 272, $this->source); })()), "ptva", [], "any", false, false, false, 272) == "susp"))) {
                            // line 273
                            yield "                                <td colspan=\"2\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT</b></td>
                            ";
                        } else {
                            // line 275
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 275, $this->source); })()), "model", [], "any", false, false, false, 275) == 1)) {
                                // line 276
                                yield "                                    <td colspan=\"2\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT</b></td>
                                ";
                            } else {
                                // line 278
                                yield "                                    <td colspan=\"2\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL TTC</b></td>
                                ";
                            }
                            // line 280
                            yield "                            ";
                        }
                        // line 281
                        yield "                        ";
                    }
                    // line 282
                    yield "                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 282, $this->source); })()), "aarem", [], "any", false, false, false, 282) == "tht")) {
                        // line 283
                        yield "                            <td style=\"text-align: right\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 283, $this->source); })()), "totalht", [], "any", false, false, false, 283) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 283, $this->source); })()), "vremise", [], "any", false, false, false, 283)), 2, ",", " "), "html", null, true);
                        yield "</td>
                        ";
                    } else {
                        // line 285
                        yield "                            <td style=\"text-align: right\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 285, $this->source); })()), "totalht", [], "any", false, false, false, 285), 2, ",", " "), "html", null, true);
                        yield "</td>
                        ";
                    }
                    // line 287
                    yield "                    </tr>
                    ";
                    // line 288
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 288, $this->source); })()), "aarem", [], "any", false, false, false, 288) == "tht")) {
                        // line 289
                        yield "                        <tr>
                            ";
                        // line 290
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 290, $this->source); })()), "aaref", [], "any", false, false, false, 290) == "oui")) {
                            // line 291
                            yield "                                <td class=\"bord\"></td>
                            ";
                        }
                        // line 293
                        yield "                            <td class=\"bord\"></td>
                            ";
                        // line 294
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 294, $this->source); })()), "zone", [], "any", false, false, false, 294) == "oui")) {
                            // line 295
                            yield "                                <td class=\"bord\"></td>
                            ";
                        }
                        // line 297
                        yield "                            <td class=\"bord\"></td>
                            ";
                        // line 298
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 298, $this->source); })()), "aarem", [], "any", false, false, false, 298) == "oui")) {
                            // line 299
                            yield "                                ";
                            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 299, $this->source); })()), "ptva", [], "any", false, false, false, 299) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 299, $this->source); })()), "ptva", [], "any", false, false, false, 299) == "susp"))) {
                                // line 300
                                yield "                                    <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT REMISÉ</b></td>
                                ";
                            } else {
                                // line 302
                                yield "                                    ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 302, $this->source); })()), "model", [], "any", false, false, false, 302) == 1)) {
                                    // line 303
                                    yield "                                        <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT REMISÉ</b>
                                        </td>
                                    ";
                                } else {
                                    // line 306
                                    yield "                                        <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL TTC REMISÉ</b>
                                        </td>
                                    ";
                                }
                                // line 309
                                yield "                                ";
                            }
                            // line 310
                            yield "                            ";
                        } else {
                            // line 311
                            yield "                                ";
                            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 311, $this->source); })()), "ptva", [], "any", false, false, false, 311) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 311, $this->source); })()), "ptva", [], "any", false, false, false, 311) == "susp"))) {
                                // line 312
                                yield "                                    <td colspan=\"2\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT REMISÉ</b></td>
                                ";
                            } else {
                                // line 314
                                yield "                                    ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 314, $this->source); })()), "model", [], "any", false, false, false, 314) == 1)) {
                                    // line 315
                                    yield "                                        <td colspan=\"2\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT REMISÉ</b>
                                        </td>
                                    ";
                                } else {
                                    // line 318
                                    yield "                                        <td colspan=\"2\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL TTC REMISÉ</b>
                                        </td>
                                    ";
                                }
                                // line 321
                                yield "                                ";
                            }
                            // line 322
                            yield "                            ";
                        }
                        // line 323
                        yield "                            <td style=\"text-align: right\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 323, $this->source); })()), "totalht", [], "any", false, false, false, 323), 2, ",", " "), "html", null, true);
                        yield "</td>
                        </tr>
                        <tr>
                            ";
                        // line 326
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 326, $this->source); })()), "aaref", [], "any", false, false, false, 326) == "oui")) {
                            // line 327
                            yield "                                <td class=\"bord\"></td>
                            ";
                        }
                        // line 329
                        yield "                            <td class=\"bord\"></td>
                            ";
                        // line 330
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 330, $this->source); })()), "zone", [], "any", false, false, false, 330) == "oui")) {
                            // line 331
                            yield "                                <td class=\"bord\"></td>
                            ";
                        }
                        // line 333
                        yield "                            <td class=\"bord\"></td>
                            ";
                        // line 334
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 334, $this->source); })()), "aarem", [], "any", false, false, false, 334) == "oui")) {
                            // line 335
                            yield "                                <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\">
                                    <b>REMISE ";
                            // line 336
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 336, $this->source); })()), "remtht", [], "any", false, false, false, 336), 0, ",", " "), "html", null, true);
                            yield "%</b></td>
                            ";
                        } else {
                            // line 338
                            yield "                                <td class=\"bord\" colspan=\"2\" style=\"text-align: right;\">
                                    <b>REMISE ";
                            // line 339
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 339, $this->source); })()), "remtht", [], "any", false, false, false, 339), 0, ",", " "), "html", null, true);
                            yield "% </b></td>
                            ";
                        }
                        // line 341
                        yield "                            <td align=\"right\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 341, $this->source); })()), "vremise", [], "any", false, false, false, 341), 2, ",", " "), "html", null, true);
                        yield "</td>
                        </tr>
                    ";
                    }
                    // line 344
                    yield "                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 344, $this->source); })()), "abasetva", [], "any", false, false, false, 344) == "oui")) {
                        // line 345
                        yield "                        <tr>
                            ";
                        // line 346
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 346, $this->source); })()), "aaref", [], "any", false, false, false, 346) == "oui")) {
                            // line 347
                            yield "                                <td class=\"bord\"></td>
                            ";
                        }
                        // line 349
                        yield "                            <td class=\"bord\"></td>
                            ";
                        // line 350
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 350, $this->source); })()), "zone", [], "any", false, false, false, 350) == "oui")) {
                            // line 351
                            yield "                                <td class=\"bord\"></td>
                            ";
                        }
                        // line 353
                        yield "                            <td class=\"bord\"></td>
                            ";
                        // line 354
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 354, $this->source); })()), "aarem", [], "any", false, false, false, 354) == "oui")) {
                            // line 355
                            yield "                                <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>BASE
                                        TVA";
                            // line 356
                            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 356, $this->source); })()), "code", [], "any", false, false, false, 356))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                yield "(";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 356, $this->source); })()), "code", [], "any", false, false, false, 356), "html", null, true);
                                yield ")";
                            }
                            yield "</b></td>
                            ";
                        } else {
                            // line 358
                            yield "                                <td class=\"bord\" colspan=\"2\" style=\"text-align: right;\"><b>BASE
                                        TVA";
                            // line 359
                            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 359, $this->source); })()), "code", [], "any", false, false, false, 359))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                yield "(";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 359, $this->source); })()), "code", [], "any", false, false, false, 359), "html", null, true);
                                yield ")";
                            }
                            yield "</b></td>
                            ";
                        }
                        // line 361
                        yield "                            <td align=\"right\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 361, $this->source); })()), "basetva", [], "any", false, false, false, 361), 2, ",", " "), "html", null, true);
                        yield "</td>
                        </tr>
                    ";
                    }
                    // line 364
                    yield "                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 364, $this->source); })()), "model", [], "any", false, false, false, 364) == 1)) {
                        // line 365
                        yield "                        <tr>
                            ";
                        // line 366
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 366, $this->source); })()), "aaref", [], "any", false, false, false, 366) == "oui")) {
                            // line 367
                            yield "                                <td class=\"bord\"></td>
                            ";
                        }
                        // line 369
                        yield "                            <td class=\"bord\"></td>
                            ";
                        // line 370
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 370, $this->source); })()), "zone", [], "any", false, false, false, 370) == "oui")) {
                            // line 371
                            yield "                                <td class=\"bord\"></td>
                            ";
                        }
                        // line 373
                        yield "                            <td class=\"bord\"></td>
                            ";
                        // line 374
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 374, $this->source); })()), "aarem", [], "any", false, false, false, 374) == "oui")) {
                            // line 375
                            yield "                                <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\">
                                    ";
                            // line 376
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 376, $this->source); })()), "ptva", [], "any", false, false, false, 376) == "oui")) {
                                // line 377
                                yield "                                        <b>TVA ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 377, $this->source); })()), "tva", [], "any", false, false, false, 377), "html", null, true);
                                yield "%</b>
                                    ";
                            }
                            // line 379
                            yield "                                    ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 379, $this->source); })()), "ptva", [], "any", false, false, false, 379) == "susp")) {
                                // line 380
                                yield "                                        <b>TVA SUSPENDUE ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 380, $this->source); })()), "tva", [], "any", false, false, false, 380), "html", null, true);
                                yield "%</b>
                                    ";
                            }
                            // line 382
                            yield "                                    ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 382, $this->source); })()), "ptva", [], "any", false, false, false, 382) == "non")) {
                                // line 383
                                yield "                                        <b>TVA NON FACTURÉE ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 383, $this->source); })()), "tva", [], "any", false, false, false, 383), "html", null, true);
                                yield "%</b>
                                    ";
                            }
                            // line 385
                            yield "                                </td>
                            ";
                        } else {
                            // line 387
                            yield "                                <td class=\"bord\" colspan=\"2\" style=\"text-align: right;\">
                                    ";
                            // line 388
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 388, $this->source); })()), "ptva", [], "any", false, false, false, 388) == "oui")) {
                                // line 389
                                yield "                                        <b>TVA ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 389, $this->source); })()), "tva", [], "any", false, false, false, 389), "html", null, true);
                                yield "%</b>
                                    ";
                            }
                            // line 391
                            yield "                                    ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 391, $this->source); })()), "ptva", [], "any", false, false, false, 391) == "susp")) {
                                // line 392
                                yield "                                        <b>TVA SUSPENDUE ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 392, $this->source); })()), "tva", [], "any", false, false, false, 392), "html", null, true);
                                yield "%</b>
                                    ";
                            }
                            // line 394
                            yield "                                    ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 394, $this->source); })()), "ptva", [], "any", false, false, false, 394) == "non")) {
                                // line 395
                                yield "                                        <b>TVA NON FACTURÉE ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 395, $this->source); })()), "tva", [], "any", false, false, false, 395), "html", null, true);
                                yield "%</b>
                                    ";
                            }
                            // line 397
                            yield "                                </td>
                            ";
                        }
                        // line 399
                        yield "                            <td align=\"right\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 399, $this->source); })()), "vtva", [], "any", false, false, false, 399), 2, ",", " "), "html", null, true);
                        yield "</td>
                        </tr>
                    ";
                    }
                    // line 402
                    yield "                    <tr>
                        ";
                    // line 403
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 403, $this->source); })()), "aaref", [], "any", false, false, false, 403) == "oui")) {
                        // line 404
                        yield "                            <td class=\"bord\"></td>
                        ";
                    }
                    // line 406
                    yield "                        <td class=\"bord\"></td>
                        ";
                    // line 407
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 407, $this->source); })()), "zone", [], "any", false, false, false, 407) == "oui")) {
                        // line 408
                        yield "                            <td class=\"bord\"></td>
                        ";
                    }
                    // line 410
                    yield "                        <td class=\"bord\"></td>
                        ";
                    // line 411
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 411, $this->source); })()), "aarem", [], "any", false, false, false, 411) == "oui")) {
                        // line 412
                        yield "                            <td colspan=\"3\" class=\"bord\"
                                style=\"color: #000;border-bottom: 1px solid #D3D3D3 !important;font-weight: 700\">
                                <b>TOTAL TTC</b></td>
                        ";
                    } else {
                        // line 416
                        yield "                            <td colspan=\"2\" class=\"bord\"
                                style=\"color: #000; border-bottom: 1px solid #D3D3D3 !important;font-weight: 700\">
                                <b>TOTAL TTC</b></td>
                        ";
                    }
                    // line 420
                    yield "                        <td style=\"text-align: right\"><b>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 420, $this->source); })()), "totalttc", [], "any", false, false, false, 420), 2, ",", " "), "html", null, true);
                    yield "</b><br><span
                                    class=\"hider\">";
                    // line 421
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 421, $this->source); })()), "totalttc", [], "any", false, false, false, 421), 4, ",", "."), "html", null, true);
                    yield "</span></td>
                    </tr>
                ";
                }
                // line 424
                yield "
                ";
                // line 425
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 425, $this->source); })()), "type", [], "any", false, false, false, 425) == "cps")) {
                    // line 426
                    yield "                    <tr class=\"printer\">
                        <th style=\"text-align: center\">Nº COMMANDE</th>
                        <th style=\"max-width:500px !important; min-width: 250px !important; text-align: left\"
                            colspan=\"2\">
                            DÉSIGNATION
                        </th>
                        }
                        <th style=\"text-align: center; min-width: 80px !important;\">RÉF</th>
                        <th style=\"text-align: center\">UNITÉ</th>
                        <th style=\"text-align: center; min-width: 120px !important;\">PRIX&nbsp;U.</th>
                    </tr>
                    ";
                    // line 437
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 437, $this->source); })()), "bons", [], "any", false, false, false, 437));
                    foreach ($context['_seq'] as $context["_key"] => $context["bon"]) {
                        // line 438
                        yield "                        <tr>
                            <td style=\"text-align: center; min-width: 120px !important;\">Bon Nº ";
                        // line 439
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "numbon", [], "any", false, false, false, 439), "html", null, true);
                        yield "</td>
                            <td style=\"max-width:500px !important; min-width: 250px !important; text-align: left\"
                                colspan=\"2\">";
                        // line 441
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "articlecomposer", [], "any", false, false, false, 441), "designation", [], "any", false, false, false, 441), "html", null, true);
                        yield "</td>
                            }
                            <td style=\"text-align: center; min-width: 80px !important;\">";
                        // line 443
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "articlecomposer", [], "any", false, false, false, 443), "reference", [], "any", false, false, false, 443), "html", null, true);
                        yield "</td>
                            <td style=\"text-align: center\">";
                        // line 444
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "articlecomposer", [], "any", false, false, false, 444), "unite", [], "any", false, false, false, 444), "html", null, true);
                        yield "</td>
                            <td style=\"text-align: center; min-width: 120px !important;\">";
                        // line 445
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "articlecomposer", [], "any", false, false, false, 445), "pu", [], "any", false, false, false, 445), 2, ",", " "), "html", null, true);
                        yield "</td>
                        </tr>
                        <tr style=\"background-color:#f8f9fa; font-weight: 700\">
                            <th style=\"text-align: center\">RÉF</th>
                            <th style=\"max-width:500px !important; min-width: 200px !important; text-align: left\">
                                DÉSIGNATION
                            </th>
                            }
                            <th style=\"text-align: center\">UNITÉ</th>
                            <th style=\"text-align: center\">QTÉ</th>
                            <th style=\"text-align: center; min-width: 120px !important;\">PRIX&nbsp;U.</th>
                            <th style=\"text-align: center; min-width: 120px !important;\">MONTANT HT</th>
                        </tr>
                        ";
                        // line 458
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "lignes", [], "any", false, false, false, 458));
                        foreach ($context['_seq'] as $context["_key"] => $context["lign"]) {
                            // line 459
                            yield "                            ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "groupe", [], "any", false, false, false, 459) == null)) {
                                // line 460
                                yield "                                <tr>
                                    <td style=\"text-align: center\">";
                                // line 461
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "reference", [], "any", false, false, false, 461), "html", null, true);
                                yield "</td>
                                    <td>";
                                // line 462
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "designation", [], "any", false, false, false, 462);
                                yield "</td>
                                    <td style=\"text-align: center\">";
                                // line 463
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "unite", [], "any", false, false, false, 463), "html", null, true);
                                yield "</td>
                                    <td style=\"text-align: center\">";
                                // line 464
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 464), 2, ",", " "), "html", null, true);
                                yield "</td>
                                    <td style=\"text-align: center\">";
                                // line 465
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 465), 2, ",", " "), "html", null, true);
                                yield "</td>
                                    <td style=\"text-align: center\">";
                                // line 466
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 466) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 466)), 2, ",", " "), "html", null, true);
                                yield "</td>
                                </tr>
                            ";
                            }
                            // line 469
                            yield "                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['lign'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 470
                        yield "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['bon'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 471
                    yield "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 471, $this->source); })()), "bons", [], "any", false, false, false, 471));
                    foreach ($context['_seq'] as $context["_key"] => $context["bon"]) {
                        // line 472
                        yield "                        <tr>
                            <td style=\"text-align: center; min-width: 120px !important;\">Bon Nº ";
                        // line 473
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "numbon", [], "any", false, false, false, 473), "html", null, true);
                        yield "</td>
                            <td style=\"max-width:500px !important; min-width: 250px !important; text-align: left\"
                                colspan=\"2\">";
                        // line 475
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "articlecomposer", [], "any", false, false, false, 475), "designation", [], "any", false, false, false, 475), "html", null, true);
                        yield "</td>
                            }
                            <td style=\"text-align: center; min-width: 80px !important;\">";
                        // line 477
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "articlecomposer", [], "any", false, false, false, 477), "reference", [], "any", false, false, false, 477), "html", null, true);
                        yield "</td>
                            <td style=\"text-align: center\">";
                        // line 478
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "articlecomposer", [], "any", false, false, false, 478), "unite", [], "any", false, false, false, 478), "html", null, true);
                        yield "</td>
                            <td style=\"text-align: center; min-width: 120px !important;\">";
                        // line 479
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "articlecomposer", [], "any", false, false, false, 479), "pu", [], "any", false, false, false, 479), 2, ",", " "), "html", null, true);
                        yield "</td>
                        </tr>
                        <tr style=\"background-color:#f8f9fa; font-weight: 700\">
                            <th style=\"text-align: center\">RÉF</th>
                            <th style=\"max-width:500px !important; min-width: 200px !important; text-align: left\">
                                DÉSIGNATION
                            </th>
                            }
                            <th style=\"text-align: center\">UNITÉ</th>
                            <th style=\"text-align: center\">QTÉ</th>
                            <th style=\"text-align: center; min-width: 120px !important;\">PRIX&nbsp;U.</th>
                            <th style=\"text-align: center; min-width: 120px !important;\">MONTANT HT</th>
                        </tr>
                        ";
                        // line 492
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "lignes", [], "any", false, false, false, 492));
                        foreach ($context['_seq'] as $context["_key"] => $context["lign"]) {
                            // line 493
                            yield "                            ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "groupe", [], "any", false, false, false, 493) == null)) {
                                // line 494
                                yield "                                <tr>
                                    <td style=\"text-align: center\">";
                                // line 495
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "reference", [], "any", false, false, false, 495), "html", null, true);
                                yield "</td>
                                    <td>";
                                // line 496
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "designation", [], "any", false, false, false, 496);
                                yield "</td>
                                    <td style=\"text-align: center\">";
                                // line 497
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "unite", [], "any", false, false, false, 497), "html", null, true);
                                yield "</td>
                                    <td style=\"text-align: center\">";
                                // line 498
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 498), 2, ",", " "), "html", null, true);
                                yield "</td>
                                    <td style=\"text-align: center\">";
                                // line 499
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 499), 2, ",", " "), "html", null, true);
                                yield "</td>
                                    <td style=\"text-align: center\">";
                                // line 500
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 500) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 500)), 2, ",", " "), "html", null, true);
                                yield "</td>
                                </tr>
                            ";
                            }
                            // line 503
                            yield "                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['lign'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 504
                        yield "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['bon'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 505
                    yield "                ";
                }
                // line 506
                yield "            </table>
        ";
            }
            // line 508
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 508, $this->source); })()), "modele", [], "any", false, false, false, 508) == 2)) {
                // line 509
                yield "            <p style=\"clear: both\"></p>
            <div>
                <table style=\"width: 100% ; margin-top: 20px; border: 1px solid #D3D3D3\">
                    <tr>
                        <td style=\"width: 60%;  border-style: none\">
                            <p style=\"padding-left:10px\">Titre du projet: <b>";
                // line 514
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 514, $this->source); })()), "chantier", [], "any", false, false, false, 514), "nomchantier", [], "any", false, false, false, 514), "html", null, true);
                yield "</b></p>
                            <p style=\"padding-left:10px\">Référence/Oblet:</p>
                            <p style=\"padding-left:20px;\"><b>";
                // line 516
                yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 516, $this->source); })()), "devreference", [], "any", false, false, false, 516);
                yield "</b></p>
                            </br>
                            <p style=\"padding-left:10px\">Date: <b>";
                // line 518
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 518, $this->source); })()), "date", [], "any", false, false, false, 518), "d/m/Y"), "html", null, true);
                yield "</b></p>
                            <p style=\"padding-left:10px\">Validité du devis: <b>";
                // line 519
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 519, $this->source); })()), "validit", [], "any", false, false, false, 519), "html", null, true);
                yield "</b></p>
                            <p style=\"padding-left:10px\">Affaire suivie par: ";
                // line 520
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 520, $this->source); })()), "contact", [], "any", false, false, false, 520), "contact", [], "any", false, false, false, 520), "html", null, true);
                yield "</p>
                        </td>
                        <td style=\"width: 40% ; border-style: none\">
                            <h3>DEVIS Nº: ";
                // line 523
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 523, $this->source); })()), "iddevis", [], "any", false, false, false, 523), "html", null, true);
                yield "</h3></br>
                            <p>Client: <b>";
                // line 524
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 524, $this->source); })()), "chantier", [], "any", false, false, false, 524), "client", [], "any", false, false, false, 524), "nomclient", [], "any", false, false, false, 524), "html", null, true);
                yield "</b></p>
                            <p>Nº Client: <b>";
                // line 525
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 525, $this->source); })()), "chantier", [], "any", false, false, false, 525), "client", [], "any", false, false, false, 525), "code", [], "any", false, false, false, 525), "html", null, true);
                yield "</b></p>
                            <p>Adresse: <b>";
                // line 526
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 526, $this->source); })()), "chantier", [], "any", false, false, false, 526), "client", [], "any", false, false, false, 526), "adresse", [], "any", false, false, false, 526), "html", null, true);
                yield "</b></p>
                            <p>Téléphone: <b>";
                // line 527
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 527, $this->source); })()), "chantier", [], "any", false, false, false, 527), "client", [], "any", false, false, false, 527), "contact", [], "any", false, false, false, 527), "html", null, true);
                yield "</b></p>
                        </td>
                    </tr>
                </table>
                <p style=\"clear: both\"></p>
            </div>
            <br>
            <table style=\"width: 100%;\">
                ";
                // line 535
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 535, $this->source); })()), "type", [], "any", false, false, false, 535) != "cps")) {
                    // line 536
                    yield "                    <tr class=\"printer\">
                        ";
                    // line 537
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 537, $this->source); })()), "aaref", [], "any", false, false, false, 537) == "oui")) {
                        // line 538
                        yield "                            <th style=\"text-align: center\">RÉF</th>
                        ";
                    }
                    // line 540
                    yield "                        <th style=\"max-width:500px !important; min-width: 250px !important; text-align: left\">
                            DÉSIGNATION
                        </th>
                        ";
                    // line 543
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 543, $this->source); })()), "zone", [], "any", false, false, false, 543) == "oui")) {
                        // line 544
                        yield "                            <th style=\"text-align: center\">SECTION</th>
                        ";
                    }
                    // line 546
                    yield "                        <th style=\"text-align: center\">UNITÉ</th>
                        <th style=\"text-align: center\">QTÉ</th>
                        <th style=\"text-align: center\">PRIX&nbsp;U.</th>
                        ";
                    // line 549
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 549, $this->source); })()), "aarem", [], "any", false, false, false, 549) == "oui")) {
                        // line 550
                        yield "                            <th style=\" text-align: center\">REMISE</th>
                        ";
                    }
                    // line 552
                    yield "                        <th style=\"text-align: center\">MONTANT&nbsp;HT</th>
                    </tr>
                    ";
                    // line 554
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["listGroup"]) || array_key_exists("listGroup", $context) ? $context["listGroup"] : (function () { throw new RuntimeError('Variable "listGroup" does not exist.', 554, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                        // line 555
                        yield "                        <tr class=\"togo\">
                            ";
                        // line 556
                        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 556, $this->source); })()), "zone", [], "any", false, false, false, 556) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 556, $this->source); })()), "aarem", [], "any", false, false, false, 556) == "oui"))) {
                            // line 557
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 557, $this->source); })()), "aaref", [], "any", false, false, false, 557) == "oui")) {
                                // line 558
                                yield "                                    <td align=\"center\"><b>";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "reference", [], "any", false, false, false, 558), "html", null, true);
                                yield "</b></td>
                                ";
                            }
                            // line 560
                            yield "                                <td COLSPAN=\"7\"><b>";
                            yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "groupe", [], "any", false, false, false, 560));
                            yield "</b></td>

                            ";
                        } elseif (((CoreExtension::getAttribute($this->env, $this->source,                         // line 562
(isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 562, $this->source); })()), "zone", [], "any", false, false, false, 562) == "non") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 562, $this->source); })()), "aarem", [], "any", false, false, false, 562) == "non"))) {
                            // line 563
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 563, $this->source); })()), "aaref", [], "any", false, false, false, 563) == "oui")) {
                                // line 564
                                yield "                                    <td align=\"center\"><b>";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "reference", [], "any", false, false, false, 564), "html", null, true);
                                yield "</b></td>
                                ";
                            }
                            // line 566
                            yield "                                <td colspan=\"5\"><b>";
                            yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "groupe", [], "any", false, false, false, 566));
                            yield "</b></td>

                            ";
                        } elseif (((CoreExtension::getAttribute($this->env, $this->source,                         // line 568
(isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 568, $this->source); })()), "zone", [], "any", false, false, false, 568) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 568, $this->source); })()), "aarem", [], "any", false, false, false, 568) == "non"))) {
                            // line 569
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 569, $this->source); })()), "aaref", [], "any", false, false, false, 569) == "oui")) {
                                // line 570
                                yield "                                    <td align=\"center\"><b>";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "reference", [], "any", false, false, false, 570), "html", null, true);
                                yield "</b></td>
                                ";
                            }
                            // line 572
                            yield "                                <td colspan=\"6\"><b>";
                            yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "groupe", [], "any", false, false, false, 572));
                            yield "</b></td>

                            ";
                        } elseif (((CoreExtension::getAttribute($this->env, $this->source,                         // line 574
(isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 574, $this->source); })()), "aarem", [], "any", false, false, false, 574) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 574, $this->source); })()), "zone", [], "any", false, false, false, 574) == "non"))) {
                            // line 575
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 575, $this->source); })()), "aaref", [], "any", false, false, false, 575) == "oui")) {
                                // line 576
                                yield "                                    <td align=\"center\"><b>";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "reference", [], "any", false, false, false, 576), "html", null, true);
                                yield "</b></td>
                                ";
                            }
                            // line 578
                            yield "                                <td colspan=\"6\"><b>";
                            yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "groupe", [], "any", false, false, false, 578));
                            yield "</b></td>
                            ";
                        }
                        // line 580
                        yield "                        </tr>
                        ";
                        // line 581
                        $context["st"] = 0;
                        // line 582
                        yield "
                        ";
                        // line 583
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "lignes", [], "any", false, false, false, 583));
                        foreach ($context['_seq'] as $context["_key"] => $context["lign"]) {
                            // line 584
                            yield "                            <tr>
                                ";
                            // line 585
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 585, $this->source); })()), "aaref", [], "any", false, false, false, 585) == "oui")) {
                                // line 586
                                yield "                                    <td style=\"text-align: center\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "reference", [], "any", false, false, false, 586), "html", null, true);
                                yield "</td>
                                ";
                            }
                            // line 588
                            yield "                                <td align=\"left\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "designation", [], "any", false, false, false, 588);
                            yield "</td>
                                ";
                            // line 589
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 589, $this->source); })()), "zone", [], "any", false, false, false, 589) == "oui")) {
                                // line 590
                                yield "                                    <td style=\"text-align: center\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "zone", [], "any", false, false, false, 590), "html", null, true);
                                yield "</td>
                                ";
                            }
                            // line 592
                            yield "                                <td style=\"text-align: center\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "unite", [], "any", false, false, false, 592), "html", null, true);
                            yield "</td>
                                <td style=\"text-align: center\">";
                            // line 593
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 593), 2, ",", " "), "html", null, true);
                            yield "<br><span
                                            class=\"hider\">";
                            // line 594
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 594), 6, ",", "."), "html", null, true);
                            yield "</span></td>
                                <td style=\"text-align: right\">";
                            // line 595
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 595), 2, ",", " "), "html", null, true);
                            yield "<br><span
                                            class=\"hider\">";
                            // line 596
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 596), 5, ",", "."), "html", null, true);
                            yield "</span></td>
                                ";
                            // line 597
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 597, $this->source); })()), "aarem", [], "any", false, false, false, 597) == "oui")) {
                                // line 598
                                yield "                                    <td style=\"text-align: center\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "remise", [], "any", false, false, false, 598), "html", null, true);
                                yield "%</td>
                                ";
                            }
                            // line 600
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 600, $this->source); })()), "aarem", [], "any", false, false, false, 600) == "non")) {
                                // line 601
                                yield "                                    <td style=\"text-align: right\">";
                                $context["st"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 601) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 601)) + (isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 601, $this->source); })()));
                                yield " ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 601) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 601)), 2, ",", " "), "html", null, true);
                                yield "
                                        <br><span
                                                class=\"hider\">";
                                // line 603
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 603) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 603)), 4, ",", "."), "html", null, true);
                                yield "</span>
                                    </td>
                                ";
                            } else {
                                // line 606
                                yield "                                    <td style=\"text-align: right\">";
                                $context["st"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 606) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 606)) * ((100 - CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "remise", [], "any", false, false, false, 606)) / 100)) + (isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 606, $this->source); })()));
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 606) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 606)) * ((100 - CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "remise", [], "any", false, false, false, 606)) / 100)), 2, ",", " "), "html", null, true);
                                yield "</td>
                                ";
                            }
                            // line 608
                            yield "                                </td>
                            </tr>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['lign'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 611
                        yield "
                        <tr class=\"togo\">
                            ";
                        // line 613
                        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 613, $this->source); })()), "zone", [], "any", false, false, false, 613) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 613, $this->source); })()), "aarem", [], "any", false, false, false, 613) == "oui"))) {
                            // line 614
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 614, $this->source); })()), "aaref", [], "any", false, false, false, 614) == "oui")) {
                                // line 615
                                yield "                                    <td COLSPAN=\"8\" align=\"right\">
                                        <b>SOUS-TOTAL: ";
                                // line 616
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 616, $this->source); })()), 2, ",", " "), "html", null, true);
                                yield "</b></td>
                                ";
                            } else {
                                // line 618
                                yield "                                    <td COLSPAN=\"7\" align=\"right\">
                                        <b>SOUS-TOTAL: ";
                                // line 619
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 619, $this->source); })()), 2, ",", " "), "html", null, true);
                                yield "</b></td>
                                ";
                            }
                            // line 621
                            yield "                            ";
                        } elseif (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 621, $this->source); })()), "zone", [], "any", false, false, false, 621) == "non") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 621, $this->source); })()), "aarem", [], "any", false, false, false, 621) == "non"))) {
                            // line 622
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 622, $this->source); })()), "aaref", [], "any", false, false, false, 622) == "oui")) {
                                // line 623
                                yield "                                    <td COLSPAN=\"6\" align=\"right\">
                                        <b>SOUS-TOTAL: ";
                                // line 624
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 624, $this->source); })()), 2, ",", " "), "html", null, true);
                                yield "</b></td>
                                ";
                            } else {
                                // line 626
                                yield "                                    <td COLSPAN=\"5\" align=\"right\">
                                        <b>SOUS-TOTAL: ";
                                // line 627
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 627, $this->source); })()), 2, ",", " "), "html", null, true);
                                yield "</b></td>
                                ";
                            }
                            // line 629
                            yield "
                            ";
                        } elseif (((CoreExtension::getAttribute($this->env, $this->source,                         // line 630
(isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 630, $this->source); })()), "zone", [], "any", false, false, false, 630) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 630, $this->source); })()), "aarem", [], "any", false, false, false, 630) == "non"))) {
                            // line 631
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 631, $this->source); })()), "aaref", [], "any", false, false, false, 631) == "oui")) {
                                // line 632
                                yield "                                    <td COLSPAN=\"7\" align=\"right\">
                                        <b>SOUS-TOTAL: ";
                                // line 633
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 633, $this->source); })()), 2, ",", " "), "html", null, true);
                                yield "</b></td>
                                ";
                            } else {
                                // line 635
                                yield "                                    <td COLSPAN=\"6\" align=\"right\">
                                        <b>SOUS-TOTAL: ";
                                // line 636
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 636, $this->source); })()), 2, ",", " "), "html", null, true);
                                yield "</b></td>
                                ";
                            }
                            // line 638
                            yield "
                            ";
                        } elseif (((CoreExtension::getAttribute($this->env, $this->source,                         // line 639
(isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 639, $this->source); })()), "aarem", [], "any", false, false, false, 639) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 639, $this->source); })()), "zone", [], "any", false, false, false, 639) == "non"))) {
                            // line 640
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 640, $this->source); })()), "aaref", [], "any", false, false, false, 640) == "oui")) {
                                // line 641
                                yield "                                    <td COLSPAN=\"7\" align=\"right\">
                                        <b>SOUS-TOTAL: ";
                                // line 642
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 642, $this->source); })()), 2, ",", " "), "html", null, true);
                                yield "</b></td>
                                ";
                            } else {
                                // line 644
                                yield "                                    <td COLSPAN=\"6\" align=\"right\">
                                        <b>SOUS-TOTAL: ";
                                // line 645
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 645, $this->source); })()), 2, ",", " "), "html", null, true);
                                yield "</b></td>
                                ";
                            }
                            // line 647
                            yield "                            ";
                        }
                        // line 648
                        yield "
                        </tr>

                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['group'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 652
                    yield "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["lignes"]) || array_key_exists("lignes", $context) ? $context["lignes"] : (function () { throw new RuntimeError('Variable "lignes" does not exist.', 652, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["lign"]) {
                        // line 653
                        yield "                        ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "groupe", [], "any", false, false, false, 653) == null)) {
                            // line 654
                            yield "                            <tr>
                                ";
                            // line 655
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 655, $this->source); })()), "aaref", [], "any", false, false, false, 655) == "oui")) {
                                // line 656
                                yield "                                    <td style=\"text-align: center\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "reference", [], "any", false, false, false, 656), "html", null, true);
                                yield "</td>
                                ";
                            }
                            // line 658
                            yield "                                <td>";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "designation", [], "any", false, false, false, 658);
                            yield "</td>
                                ";
                            // line 659
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 659, $this->source); })()), "zone", [], "any", false, false, false, 659) == "oui")) {
                                // line 660
                                yield "                                    <td style=\"text-align: center\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "zone", [], "any", false, false, false, 660), "html", null, true);
                                yield "</td>
                                ";
                            }
                            // line 662
                            yield "                                <td style=\"text-align: center\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "unite", [], "any", false, false, false, 662), "html", null, true);
                            yield "</td>
                                <td style=\"text-align: center\">";
                            // line 663
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 663), 2, ",", " "), "html", null, true);
                            yield "<br><span
                                            class=\"hider\">";
                            // line 664
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 664), 6, ",", " "), "html", null, true);
                            yield "</span></td>
                                <td style=\"text-align: right\">";
                            // line 665
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 665), 2, ",", " "), "html", null, true);
                            yield "<br><span
                                            class=\"hider\">";
                            // line 666
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 666), 4, ",", "."), "html", null, true);
                            yield "</span></td>
                                ";
                            // line 667
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 667, $this->source); })()), "aarem", [], "any", false, false, false, 667) == "oui")) {
                                // line 668
                                yield "                                    <td style=\"text-align: center\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "remise", [], "any", false, false, false, 668), "html", null, true);
                                yield "%</td>
                                ";
                            }
                            // line 670
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 670, $this->source); })()), "aarem", [], "any", false, false, false, 670) == "non")) {
                                // line 671
                                yield "                                    <td style=\"text-align: right\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 671) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 671)), 2, ",", " "), "html", null, true);
                                yield "
                                        <br><span
                                                class=\"hider\">";
                                // line 673
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 673) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 673)), 4, ",", "."), "html", null, true);
                                yield "</span>
                                    </td>
                                ";
                            }
                            // line 676
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 676, $this->source); })()), "aarem", [], "any", false, false, false, 676) != "non")) {
                                // line 677
                                yield "                                    <td style=\"text-align: right\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 677) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 677)) * ((100 - CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "remise", [], "any", false, false, false, 677)) / 100)), 2, ",", " "), "html", null, true);
                                yield "</td>
                                ";
                            }
                            // line 679
                            yield "                            </tr>
                        ";
                        }
                        // line 681
                        yield "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['lign'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 682
                    yield "                    <tr>
                        ";
                    // line 683
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 683, $this->source); })()), "aaref", [], "any", false, false, false, 683) == "oui")) {
                        // line 684
                        yield "                            <td class=\"bord\"></td>
                        ";
                    }
                    // line 686
                    yield "                        <td class=\"bord\"></td>
                        ";
                    // line 687
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 687, $this->source); })()), "zone", [], "any", false, false, false, 687) == "oui")) {
                        // line 688
                        yield "                            <td class=\"bord\"></td>
                        ";
                    }
                    // line 690
                    yield "                        <td class=\"bord\"></td>
                        ";
                    // line 691
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 691, $this->source); })()), "aarem", [], "any", false, false, false, 691) == "oui")) {
                        // line 692
                        yield "                            ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 692, $this->source); })()), "ptva", [], "any", false, false, false, 692) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 692, $this->source); })()), "ptva", [], "any", false, false, false, 692) == "susp"))) {
                            // line 693
                            yield "                                <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT</b></td>
                            ";
                        } else {
                            // line 695
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 695, $this->source); })()), "model", [], "any", false, false, false, 695) == 1)) {
                                // line 696
                                yield "                                    <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT</b></td>
                                ";
                            } else {
                                // line 698
                                yield "                                    <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL TTC</b></td>
                                ";
                            }
                            // line 700
                            yield "                            ";
                        }
                        // line 701
                        yield "                        ";
                    } else {
                        // line 702
                        yield "                            ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 702, $this->source); })()), "ptva", [], "any", false, false, false, 702) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 702, $this->source); })()), "ptva", [], "any", false, false, false, 702) == "susp"))) {
                            // line 703
                            yield "                                <td colspan=\"2\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT</b></td>
                            ";
                        } else {
                            // line 705
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 705, $this->source); })()), "model", [], "any", false, false, false, 705) == 1)) {
                                // line 706
                                yield "                                    <td colspan=\"2\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT</b></td>
                                ";
                            } else {
                                // line 708
                                yield "                                    <td colspan=\"2\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL TTC</b></td>
                                ";
                            }
                            // line 710
                            yield "                            ";
                        }
                        // line 711
                        yield "                        ";
                    }
                    // line 712
                    yield "                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 712, $this->source); })()), "aarem", [], "any", false, false, false, 712) == "tht")) {
                        // line 713
                        yield "                            <td style=\"text-align: right\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 713, $this->source); })()), "totalht", [], "any", false, false, false, 713) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 713, $this->source); })()), "vremise", [], "any", false, false, false, 713)), 2, ",", " "), "html", null, true);
                        yield "</td>
                        ";
                    } else {
                        // line 715
                        yield "                            <td style=\"text-align: right\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 715, $this->source); })()), "totalht", [], "any", false, false, false, 715), 2, ",", " "), "html", null, true);
                        yield "</td>
                        ";
                    }
                    // line 717
                    yield "                    </tr>
                    ";
                    // line 718
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 718, $this->source); })()), "aarem", [], "any", false, false, false, 718) == "oui")) {
                        // line 719
                        yield "                        <tr>
                            ";
                        // line 720
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 720, $this->source); })()), "aaref", [], "any", false, false, false, 720) == "oui")) {
                            // line 721
                            yield "                                <td class=\"bord\"></td>
                            ";
                        }
                        // line 723
                        yield "                            <td class=\"bord\"></td>
                            ";
                        // line 724
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 724, $this->source); })()), "zone", [], "any", false, false, false, 724) == "oui")) {
                            // line 725
                            yield "                                <td class=\"bord\"></td>
                            ";
                        }
                        // line 727
                        yield "                            <td class=\"bord\"></td>
                            ";
                        // line 728
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 728, $this->source); })()), "aarem", [], "any", false, false, false, 728) == "oui")) {
                            // line 729
                            yield "                                <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>REMISE</b></td>
                            ";
                        } else {
                            // line 731
                            yield "                                <td class=\"bord\" colspan=\"2\" style=\"text-align: right;\"><b>REMISE</b></td>
                            ";
                        }
                        // line 733
                        yield "                            <td style=\"text-align: right\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 733, $this->source); })()), "vremise", [], "any", false, false, false, 733), 2, ",", " "), "html", null, true);
                        yield "</td>
                        </tr>
                    ";
                    }
                    // line 736
                    yield "                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 736, $this->source); })()), "aarem", [], "any", false, false, false, 736) == "tht")) {
                        // line 737
                        yield "                        <tr>
                            ";
                        // line 738
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 738, $this->source); })()), "aaref", [], "any", false, false, false, 738) == "oui")) {
                            // line 739
                            yield "                                <td class=\"bord\"></td>
                            ";
                        }
                        // line 741
                        yield "                            <td class=\"bord\"></td>
                            ";
                        // line 742
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 742, $this->source); })()), "zone", [], "any", false, false, false, 742) == "oui")) {
                            // line 743
                            yield "                                <td class=\"bord\"></td>
                            ";
                        }
                        // line 745
                        yield "                            <td class=\"bord\"></td>
                            ";
                        // line 746
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 746, $this->source); })()), "aarem", [], "any", false, false, false, 746) == "oui")) {
                            // line 747
                            yield "                                ";
                            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 747, $this->source); })()), "ptva", [], "any", false, false, false, 747) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 747, $this->source); })()), "ptva", [], "any", false, false, false, 747) == "susp"))) {
                                // line 748
                                yield "                                    <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT REMISÉ</b></td>
                                ";
                            } else {
                                // line 750
                                yield "                                    ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 750, $this->source); })()), "model", [], "any", false, false, false, 750) == 1)) {
                                    // line 751
                                    yield "                                        <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT REMISÉ</b>
                                        </td>
                                    ";
                                } else {
                                    // line 754
                                    yield "                                        <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL TTC REMISÉ</b>
                                        </td>
                                    ";
                                }
                                // line 757
                                yield "                                ";
                            }
                            // line 758
                            yield "                            ";
                        } else {
                            // line 759
                            yield "                                ";
                            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 759, $this->source); })()), "ptva", [], "any", false, false, false, 759) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 759, $this->source); })()), "ptva", [], "any", false, false, false, 759) == "susp"))) {
                                // line 760
                                yield "                                    <td colspan=\"2\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT REMISÉ</b></td>
                                ";
                            } else {
                                // line 762
                                yield "                                    ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 762, $this->source); })()), "model", [], "any", false, false, false, 762) == 1)) {
                                    // line 763
                                    yield "                                        <td colspan=\"2\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT REMISÉ</b>
                                        </td>
                                    ";
                                } else {
                                    // line 766
                                    yield "                                        <td colspan=\"2\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL TTC REMISÉ</b>
                                        </td>
                                    ";
                                }
                                // line 769
                                yield "                                ";
                            }
                            // line 770
                            yield "                            ";
                        }
                        // line 771
                        yield "
                            <td style=\"text-align: right\">";
                        // line 772
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 772, $this->source); })()), "totalht", [], "any", false, false, false, 772), 2, ",", " "), "html", null, true);
                        yield "</td>
                        </tr>
                        <tr>
                            ";
                        // line 775
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 775, $this->source); })()), "aaref", [], "any", false, false, false, 775) == "oui")) {
                            // line 776
                            yield "                                <td class=\"bord\"></td>
                            ";
                        }
                        // line 778
                        yield "                            <td class=\"bord\"></td>
                            ";
                        // line 779
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 779, $this->source); })()), "zone", [], "any", false, false, false, 779) == "oui")) {
                            // line 780
                            yield "                                <td class=\"bord\"></td>
                            ";
                        }
                        // line 782
                        yield "                            <td class=\"bord\"></td>
                            ";
                        // line 783
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 783, $this->source); })()), "aarem", [], "any", false, false, false, 783) == "oui")) {
                            // line 784
                            yield "                                <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\">
                                    <b>REMISE ";
                            // line 785
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 785, $this->source); })()), "remtht", [], "any", false, false, false, 785), 0, ",", " "), "html", null, true);
                            yield "%</b></td>
                            ";
                        } else {
                            // line 787
                            yield "                                <td class=\"bord\" colspan=\"2\" style=\"text-align: right;\">
                                    <b>REMISE ";
                            // line 788
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 788, $this->source); })()), "remtht", [], "any", false, false, false, 788), 0, ",", " "), "html", null, true);
                            yield "% </b></td>
                            ";
                        }
                        // line 790
                        yield "                            <td align=\"right\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 790, $this->source); })()), "vremise", [], "any", false, false, false, 790), 2, ",", " "), "html", null, true);
                        yield "</td>
                        </tr>
                    ";
                    }
                    // line 793
                    yield "                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 793, $this->source); })()), "abasetva", [], "any", false, false, false, 793) == "oui")) {
                        // line 794
                        yield "                        <tr>
                            ";
                        // line 795
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 795, $this->source); })()), "aaref", [], "any", false, false, false, 795) == "oui")) {
                            // line 796
                            yield "                                <td class=\"bord\"></td>
                            ";
                        }
                        // line 798
                        yield "                            <td class=\"bord\"></td>
                            ";
                        // line 799
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 799, $this->source); })()), "zone", [], "any", false, false, false, 799) == "oui")) {
                            // line 800
                            yield "                                <td class=\"bord\"></td>
                            ";
                        }
                        // line 802
                        yield "                            <td class=\"bord\"></td>
                            ";
                        // line 803
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 803, $this->source); })()), "aarem", [], "any", false, false, false, 803) == "oui")) {
                            // line 804
                            yield "                                <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>BASE
                                        TVA";
                            // line 805
                            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 805, $this->source); })()), "code", [], "any", false, false, false, 805))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                yield "(";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 805, $this->source); })()), "code", [], "any", false, false, false, 805), "html", null, true);
                                yield ")";
                            }
                            yield "</b></td>
                            ";
                        } else {
                            // line 807
                            yield "                                <td class=\"bord\" colspan=\"2\" style=\"text-align: right;\"><b>BASE
                                        TVA";
                            // line 808
                            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 808, $this->source); })()), "code", [], "any", false, false, false, 808))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                yield "(";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 808, $this->source); })()), "code", [], "any", false, false, false, 808), "html", null, true);
                                yield ")";
                            }
                            yield "</b></td>
                            ";
                        }
                        // line 810
                        yield "                            <td align=\"right\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 810, $this->source); })()), "basetva", [], "any", false, false, false, 810), 2, ",", " "), "html", null, true);
                        yield "</td>
                        </tr>
                    ";
                    }
                    // line 813
                    yield "                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 813, $this->source); })()), "model", [], "any", false, false, false, 813) == 1)) {
                        // line 814
                        yield "                        <tr>
                            ";
                        // line 815
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 815, $this->source); })()), "aaref", [], "any", false, false, false, 815) == "oui")) {
                            // line 816
                            yield "                                <td class=\"bord\"></td>
                            ";
                        }
                        // line 818
                        yield "                            <td class=\"bord\"></td>
                            ";
                        // line 819
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 819, $this->source); })()), "zone", [], "any", false, false, false, 819) == "oui")) {
                            // line 820
                            yield "                                <td class=\"bord\"></td>
                            ";
                        }
                        // line 822
                        yield "                            <td class=\"bord\"></td>
                            ";
                        // line 823
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 823, $this->source); })()), "aarem", [], "any", false, false, false, 823) == "oui")) {
                            // line 824
                            yield "                                <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\">
                                    ";
                            // line 825
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 825, $this->source); })()), "ptva", [], "any", false, false, false, 825) == "oui")) {
                                // line 826
                                yield "                                        <b>TVA ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 826, $this->source); })()), "tva", [], "any", false, false, false, 826), "html", null, true);
                                yield "%</b>
                                    ";
                            }
                            // line 828
                            yield "                                    ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 828, $this->source); })()), "ptva", [], "any", false, false, false, 828) == "susp")) {
                                // line 829
                                yield "                                        <b>TVA SUSPENDUE ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 829, $this->source); })()), "tva", [], "any", false, false, false, 829), "html", null, true);
                                yield "%</b>
                                    ";
                            }
                            // line 831
                            yield "                                    ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 831, $this->source); })()), "ptva", [], "any", false, false, false, 831) == "non")) {
                                // line 832
                                yield "                                        <b>TVA NON FACTURÉE ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 832, $this->source); })()), "tva", [], "any", false, false, false, 832), "html", null, true);
                                yield "%</b>
                                    ";
                            }
                            // line 834
                            yield "                                </td>
                            ";
                        } else {
                            // line 836
                            yield "                                <td class=\"bord\" colspan=\"2\" style=\"text-align: right;\">
                                    ";
                            // line 837
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 837, $this->source); })()), "ptva", [], "any", false, false, false, 837) == "oui")) {
                                // line 838
                                yield "                                        <b>TVA ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 838, $this->source); })()), "tva", [], "any", false, false, false, 838), "html", null, true);
                                yield "%</b>
                                    ";
                            }
                            // line 840
                            yield "                                    ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 840, $this->source); })()), "ptva", [], "any", false, false, false, 840) == "susp")) {
                                // line 841
                                yield "                                        <b>TVA SUSPENDUE ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 841, $this->source); })()), "tva", [], "any", false, false, false, 841), "html", null, true);
                                yield "%</b>
                                    ";
                            }
                            // line 843
                            yield "                                    ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 843, $this->source); })()), "ptva", [], "any", false, false, false, 843) == "non")) {
                                // line 844
                                yield "                                        <b>TVA NON FACTURÉE ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 844, $this->source); })()), "tva", [], "any", false, false, false, 844), "html", null, true);
                                yield "%</b>
                                    ";
                            }
                            // line 846
                            yield "                                </td>
                            ";
                        }
                        // line 848
                        yield "                            <td align=\"right\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 848, $this->source); })()), "vtva", [], "any", false, false, false, 848), 2, ",", " "), "html", null, true);
                        yield "</td>
                        </tr>
                    ";
                    }
                    // line 851
                    yield "                    <tr>
                        ";
                    // line 852
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 852, $this->source); })()), "aaref", [], "any", false, false, false, 852) == "oui")) {
                        // line 853
                        yield "                            <td class=\"bord\"></td>
                        ";
                    }
                    // line 855
                    yield "                        <td class=\"bord\"></td>
                        ";
                    // line 856
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 856, $this->source); })()), "zone", [], "any", false, false, false, 856) == "oui")) {
                        // line 857
                        yield "                            <td class=\"bord\"></td>
                        ";
                    }
                    // line 859
                    yield "                        <td class=\"bord\"></td>
                        ";
                    // line 860
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 860, $this->source); })()), "aarem", [], "any", false, false, false, 860) == "oui")) {
                        // line 861
                        yield "                            <td colspan=\"3\" class=\"bord\"
                                style=\"color: #4e73df;border-bottom: 1px solid #D3D3D3 !important;\">
                                <b>TOTAL TTC</b></td>
                        ";
                    } else {
                        // line 865
                        yield "                            <td colspan=\"2\" class=\"bord\"
                                style=\"color: #4e73df; border-bottom: 1px solid #D3D3D3 !important;\">
                                <b>TOTAL TTC</b></td>
                        ";
                    }
                    // line 869
                    yield "                        <td align=\"right\"><b>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 869, $this->source); })()), "totalttc", [], "any", false, false, false, 869), 2, ",", " "), "html", null, true);
                    yield "</b><br><span
                                    class=\"hider\">";
                    // line 870
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 870, $this->source); })()), "totalttc", [], "any", false, false, false, 870), 4, ",", "."), "html", null, true);
                    yield "</span></td>
                    </tr>
                ";
                }
                // line 873
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 873, $this->source); })()), "type", [], "any", false, false, false, 873) == "cps")) {
                    // line 874
                    yield "                    <tr class=\"printer\">
                        <th style=\"text-align: center\">Nº COMMANDE</th>
                        <th style=\"max-width:500px !important; min-width: 250px !important; text-align: left\"
                            colspan=\"2\">
                            DÉSIGNATION
                        </th>
                        }
                        <th style=\"text-align: center; min-width: 80px !important;\">RÉF</th>
                        <th style=\"text-align: center\">UNITÉ</th>
                        <th style=\"text-align: center; min-width: 120px !important;\">PRIX&nbsp;U.</th>
                    </tr>
                    ";
                    // line 885
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 885, $this->source); })()), "bons", [], "any", false, false, false, 885));
                    foreach ($context['_seq'] as $context["_key"] => $context["bon"]) {
                        // line 886
                        yield "                        <tr>
                            <td style=\"text-align: center; min-width: 120px !important;\">Bon Nº ";
                        // line 887
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "numbon", [], "any", false, false, false, 887), "html", null, true);
                        yield "</td>
                            <td style=\"max-width:500px !important; min-width: 250px !important; text-align: left\"
                                colspan=\"2\">";
                        // line 889
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "articlecomposer", [], "any", false, false, false, 889), "designation", [], "any", false, false, false, 889), "html", null, true);
                        yield "</td>
                            }
                            <td style=\"text-align: center; min-width: 80px !important;\">";
                        // line 891
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "articlecomposer", [], "any", false, false, false, 891), "reference", [], "any", false, false, false, 891), "html", null, true);
                        yield "</td>
                            <td style=\"text-align: center\">";
                        // line 892
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "articlecomposer", [], "any", false, false, false, 892), "unite", [], "any", false, false, false, 892), "html", null, true);
                        yield "</td>
                            <td style=\"text-align: center; min-width: 120px !important;\">";
                        // line 893
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "articlecomposer", [], "any", false, false, false, 893), "pu", [], "any", false, false, false, 893), 2, ",", " "), "html", null, true);
                        yield "</td>
                        </tr>
                        <tr style=\"background-color:#f8f9fa; font-weight: 700\">
                            <th style=\"text-align: center\">RÉF</th>
                            <th style=\"max-width:500px !important; min-width: 200px !important; text-align: left\">
                                DÉSIGNATION
                            </th>
                            }
                            <th style=\"text-align: center\">UNITÉ</th>
                            <th style=\"text-align: center\">QTÉ</th>
                            <th style=\"text-align: center; min-width: 120px !important;\">PRIX&nbsp;U.</th>
                            <th style=\"text-align: center; min-width: 120px !important;\">MONTANT HT</th>
                        </tr>
                        ";
                        // line 906
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "lignes", [], "any", false, false, false, 906));
                        foreach ($context['_seq'] as $context["_key"] => $context["lign"]) {
                            // line 907
                            yield "                            ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "groupe", [], "any", false, false, false, 907) == null)) {
                                // line 908
                                yield "                                <tr>
                                    <td style=\"text-align: center\">";
                                // line 909
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "reference", [], "any", false, false, false, 909), "html", null, true);
                                yield "</td>
                                    <td>";
                                // line 910
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "designation", [], "any", false, false, false, 910);
                                yield "</td>
                                    <td style=\"text-align: center\">";
                                // line 911
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "unite", [], "any", false, false, false, 911), "html", null, true);
                                yield "</td>
                                    <td style=\"text-align: center\">";
                                // line 912
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 912), 2, ",", " "), "html", null, true);
                                yield "</td>
                                    <td style=\"text-align: center\">";
                                // line 913
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 913), 2, ",", " "), "html", null, true);
                                yield "</td>
                                    <td style=\"text-align: center\">";
                                // line 914
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 914) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 914)), 2, ",", " "), "html", null, true);
                                yield "</td>
                                </tr>
                            ";
                            }
                            // line 917
                            yield "                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['lign'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 918
                        yield "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['bon'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 919
                    yield "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 919, $this->source); })()), "bons", [], "any", false, false, false, 919));
                    foreach ($context['_seq'] as $context["_key"] => $context["bon"]) {
                        // line 920
                        yield "                        <tr>
                            <td style=\"text-align: center; min-width: 120px !important;\">Bon Nº ";
                        // line 921
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "numbon", [], "any", false, false, false, 921), "html", null, true);
                        yield "</td>
                            <td style=\"max-width:500px !important; min-width: 250px !important; text-align: left\"
                                colspan=\"2\">";
                        // line 923
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "articlecomposer", [], "any", false, false, false, 923), "designation", [], "any", false, false, false, 923), "html", null, true);
                        yield "</td>
                            }
                            <td style=\"text-align: center; min-width: 80px !important;\">";
                        // line 925
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "articlecomposer", [], "any", false, false, false, 925), "reference", [], "any", false, false, false, 925), "html", null, true);
                        yield "</td>
                            <td style=\"text-align: center\">";
                        // line 926
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "articlecomposer", [], "any", false, false, false, 926), "unite", [], "any", false, false, false, 926), "html", null, true);
                        yield "</td>
                            <td style=\"text-align: center; min-width: 120px !important;\">";
                        // line 927
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "articlecomposer", [], "any", false, false, false, 927), "pu", [], "any", false, false, false, 927), 2, ",", " "), "html", null, true);
                        yield "</td>
                        </tr>
                        <tr style=\"background-color:#f8f9fa; font-weight: 700\">
                            <th style=\"text-align: center\">RÉF</th>
                            <th style=\"max-width:500px !important; min-width: 200px !important; text-align: left\">
                                DÉSIGNATION
                            </th>
                            }
                            <th style=\"text-align: center\">UNITÉ</th>
                            <th style=\"text-align: center\">QTÉ</th>
                            <th style=\"text-align: center; min-width: 120px !important;\">PRIX&nbsp;U.</th>
                            <th style=\"text-align: center; min-width: 120px !important;\">MONTANT HT</th>
                        </tr>
                        ";
                        // line 940
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "lignes", [], "any", false, false, false, 940));
                        foreach ($context['_seq'] as $context["_key"] => $context["lign"]) {
                            // line 941
                            yield "                            ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "groupe", [], "any", false, false, false, 941) == null)) {
                                // line 942
                                yield "                                <tr>
                                    <td style=\"text-align: center\">";
                                // line 943
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "reference", [], "any", false, false, false, 943), "html", null, true);
                                yield "</td>
                                    <td>";
                                // line 944
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "designation", [], "any", false, false, false, 944);
                                yield "</td>
                                    <td style=\"text-align: center\">";
                                // line 945
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "unite", [], "any", false, false, false, 945), "html", null, true);
                                yield "</td>
                                    <td style=\"text-align: center\">";
                                // line 946
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 946), 2, ",", " "), "html", null, true);
                                yield "</td>
                                    <td style=\"text-align: center\">";
                                // line 947
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 947), 2, ",", " "), "html", null, true);
                                yield "</td>
                                    <td style=\"text-align: center\">";
                                // line 948
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 948) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 948)), 2, ",", " "), "html", null, true);
                                yield "</td>
                                </tr>
                            ";
                            }
                            // line 951
                            yield "                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['lign'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 952
                        yield "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['bon'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 953
                    yield "                ";
                }
                // line 954
                yield "            </table>
        ";
            }
            // line 956
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 956, $this->source); })()), "modele", [], "any", false, false, false, 956) == 3)) {
                // line 957
                yield "            <div>
                <table style=\"width: 19cm; margin-top: 50px\">
                    <tr>
                        <td style=\"width:70%; border-style: none !important;\">
                            <h1 style=\"font-weight: bold\">";
                // line 961
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["usa"]) || array_key_exists("usa", $context) ? $context["usa"] : (function () { throw new RuntimeError('Variable "usa" does not exist.', 961, $this->source); })()), "societe", [], "any", false, false, false, 961)), "html", null, true);
                yield "</h1>
                            <p style=\"text-align:left\" }>
                                Mail: <b>";
                // line 963
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["usa"]) || array_key_exists("usa", $context) ? $context["usa"] : (function () { throw new RuntimeError('Variable "usa" does not exist.', 963, $this->source); })()), "username", [], "any", false, false, false, 963), "html", null, true);
                yield "</b><br/>
                                Téléphone: <b>";
                // line 964
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["usa"]) || array_key_exists("usa", $context) ? $context["usa"] : (function () { throw new RuntimeError('Variable "usa" does not exist.', 964, $this->source); })()), "contact", [], "any", false, false, false, 964), "html", null, true);
                yield "</b><br/>
                                Adresse: <b>";
                // line 965
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["usa"]) || array_key_exists("usa", $context) ? $context["usa"] : (function () { throw new RuntimeError('Variable "usa" does not exist.', 965, $this->source); })()), "adresse", [], "any", false, false, false, 965), "html", null, true);
                yield "</b>
                            </p>
                            <p style=\"text-align:left\"><b><u>Référence/Objet:</u></b><br/>
                                <span>";
                // line 968
                yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 968, $this->source); })()), "devreference", [], "any", false, false, false, 968);
                yield "</span>
                            </p>
                        </td>
                        <td style=\"width: 30% ; text-align:right; border-style: none !important;\">
                            <p style=\"text-align:center ; float: right ; padding:10px ; border:1px solid #D3D3D3 ; border-radius:20px\">
                                Client: <b>";
                // line 973
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 973, $this->source); })()), "chantier", [], "any", false, false, false, 973), "client", [], "any", false, false, false, 973), "nomclient", [], "any", false, false, false, 973), "html", null, true);
                yield "</b><br/>
                                Nº Client: <b>";
                // line 974
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 974, $this->source); })()), "chantier", [], "any", false, false, false, 974), "client", [], "any", false, false, false, 974), "code", [], "any", false, false, false, 974), "html", null, true);
                yield "</b><br/>
                                Adresse: <b>";
                // line 975
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 975, $this->source); })()), "chantier", [], "any", false, false, false, 975), "client", [], "any", false, false, false, 975), "adresse", [], "any", false, false, false, 975), "html", null, true);
                yield "</b><br/>
                                Téléphone: <b>";
                // line 976
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 976, $this->source); })()), "chantier", [], "any", false, false, false, 976), "client", [], "any", false, false, false, 976), "contact", [], "any", false, false, false, 976), "html", null, true);
                yield "</b></p>
                        </td>
                    </tr>
                </table>
            </div>
            <br>
            <table style=\"width: 100%;\">
                ";
                // line 983
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 983, $this->source); })()), "type", [], "any", false, false, false, 983) != "cps")) {
                    // line 984
                    yield "                    <tr class=\"printer\">
                        ";
                    // line 985
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 985, $this->source); })()), "aaref", [], "any", false, false, false, 985) == "oui")) {
                        // line 986
                        yield "                            <th style=\"text-align: center\">RÉF</th>
                        ";
                    }
                    // line 988
                    yield "                        <th style=\"max-width:500px !important; min-width: 250px !important; text-align: left\">
                            DÉSIGNATION
                        </th>
                        ";
                    // line 991
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 991, $this->source); })()), "zone", [], "any", false, false, false, 991) == "oui")) {
                        // line 992
                        yield "                            <th style=\"text-align: center\">SECTION</th>
                        ";
                    }
                    // line 994
                    yield "                        <th style=\"text-align: center\">UNITÉ</th>
                        <th style=\"text-align: center\">QTÉ</th>
                        <th style=\"text-align: center\">PRIX&nbsp;U.</th>
                        ";
                    // line 997
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 997, $this->source); })()), "aarem", [], "any", false, false, false, 997) == "oui")) {
                        // line 998
                        yield "                            <th style=\" text-align: center\">REMISE</th>
                        ";
                    }
                    // line 1000
                    yield "                        <th style=\"text-align: center\">MONTANT&nbsp;HT</th>
                    </tr>
                    ";
                    // line 1002
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["listGroup"]) || array_key_exists("listGroup", $context) ? $context["listGroup"] : (function () { throw new RuntimeError('Variable "listGroup" does not exist.', 1002, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                        // line 1003
                        yield "                        <tr class=\"togo\">
                            ";
                        // line 1004
                        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1004, $this->source); })()), "zone", [], "any", false, false, false, 1004) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1004, $this->source); })()), "aarem", [], "any", false, false, false, 1004) == "oui"))) {
                            // line 1005
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1005, $this->source); })()), "aaref", [], "any", false, false, false, 1005) == "oui")) {
                                // line 1006
                                yield "                                    <td align=\"center\"><b>";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "reference", [], "any", false, false, false, 1006), "html", null, true);
                                yield "</b></td>
                                ";
                            }
                            // line 1008
                            yield "                                <td COLSPAN=\"7\"><b>";
                            yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "groupe", [], "any", false, false, false, 1008));
                            yield "</b></td>

                            ";
                        } elseif (((CoreExtension::getAttribute($this->env, $this->source,                         // line 1010
(isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1010, $this->source); })()), "zone", [], "any", false, false, false, 1010) == "non") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1010, $this->source); })()), "aarem", [], "any", false, false, false, 1010) == "non"))) {
                            // line 1011
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1011, $this->source); })()), "aaref", [], "any", false, false, false, 1011) == "oui")) {
                                // line 1012
                                yield "                                    <td align=\"center\"><b>";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "reference", [], "any", false, false, false, 1012), "html", null, true);
                                yield "</b></td>
                                ";
                            }
                            // line 1014
                            yield "                                <td colspan=\"5\"><b>";
                            yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "groupe", [], "any", false, false, false, 1014));
                            yield "</b></td>

                            ";
                        } elseif (((CoreExtension::getAttribute($this->env, $this->source,                         // line 1016
(isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1016, $this->source); })()), "zone", [], "any", false, false, false, 1016) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1016, $this->source); })()), "aarem", [], "any", false, false, false, 1016) == "non"))) {
                            // line 1017
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1017, $this->source); })()), "aaref", [], "any", false, false, false, 1017) == "oui")) {
                                // line 1018
                                yield "                                    <td align=\"center\"><b>";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "reference", [], "any", false, false, false, 1018), "html", null, true);
                                yield "</b></td>
                                ";
                            }
                            // line 1020
                            yield "                                <td colspan=\"6\"><b>";
                            yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "groupe", [], "any", false, false, false, 1020));
                            yield "</b></td>

                            ";
                        } elseif (((CoreExtension::getAttribute($this->env, $this->source,                         // line 1022
(isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1022, $this->source); })()), "aarem", [], "any", false, false, false, 1022) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1022, $this->source); })()), "zone", [], "any", false, false, false, 1022) == "non"))) {
                            // line 1023
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1023, $this->source); })()), "aaref", [], "any", false, false, false, 1023) == "oui")) {
                                // line 1024
                                yield "                                    <td align=\"center\"><b>";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "reference", [], "any", false, false, false, 1024), "html", null, true);
                                yield "</b></td>
                                ";
                            }
                            // line 1026
                            yield "                                <td colspan=\"6\"><b>";
                            yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "groupe", [], "any", false, false, false, 1026));
                            yield "</b></td>
                            ";
                        }
                        // line 1028
                        yield "                        </tr>
                        ";
                        // line 1029
                        $context["st"] = 0;
                        // line 1030
                        yield "
                        ";
                        // line 1031
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "lignes", [], "any", false, false, false, 1031));
                        foreach ($context['_seq'] as $context["_key"] => $context["lign"]) {
                            // line 1032
                            yield "                            <tr>
                                ";
                            // line 1033
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1033, $this->source); })()), "aaref", [], "any", false, false, false, 1033) == "oui")) {
                                // line 1034
                                yield "                                    <td style=\"text-align: center\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "reference", [], "any", false, false, false, 1034), "html", null, true);
                                yield "</td>
                                ";
                            }
                            // line 1036
                            yield "                                <td align=\"left\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "designation", [], "any", false, false, false, 1036);
                            yield "</td>
                                ";
                            // line 1037
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1037, $this->source); })()), "zone", [], "any", false, false, false, 1037) == "oui")) {
                                // line 1038
                                yield "                                    <td style=\"text-align: center\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "zone", [], "any", false, false, false, 1038), "html", null, true);
                                yield "</td>
                                ";
                            }
                            // line 1040
                            yield "                                <td style=\"text-align: center\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "unite", [], "any", false, false, false, 1040), "html", null, true);
                            yield "</td>
                                <td style=\"text-align: center\">";
                            // line 1041
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 1041), 2, ",", " "), "html", null, true);
                            yield "<br><span
                                            class=\"hider\">";
                            // line 1042
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 1042), 6, ",", "."), "html", null, true);
                            yield "</span></td>
                                <td style=\"text-align: right\">";
                            // line 1043
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 1043), 2, ",", " "), "html", null, true);
                            yield "<br><span
                                            class=\"hider\">";
                            // line 1044
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 1044), 5, ",", "."), "html", null, true);
                            yield "</span></td>
                                ";
                            // line 1045
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1045, $this->source); })()), "aarem", [], "any", false, false, false, 1045) == "oui")) {
                                // line 1046
                                yield "                                    <td style=\"text-align: center\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "remise", [], "any", false, false, false, 1046), "html", null, true);
                                yield "%</td>
                                ";
                            }
                            // line 1048
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1048, $this->source); })()), "aarem", [], "any", false, false, false, 1048) == "non")) {
                                // line 1049
                                yield "                                    <td style=\"text-align: right\">";
                                $context["st"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 1049) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 1049)) + (isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 1049, $this->source); })()));
                                yield " ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 1049) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 1049)), 2, ",", " "), "html", null, true);
                                yield "
                                        <br><span
                                                class=\"hider\">";
                                // line 1051
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 1051) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 1051)), 4, ",", "."), "html", null, true);
                                yield "</span>
                                    </td>
                                ";
                            } else {
                                // line 1054
                                yield "                                    <td style=\"text-align: right\">";
                                $context["st"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 1054) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 1054)) * ((100 - CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "remise", [], "any", false, false, false, 1054)) / 100)) + (isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 1054, $this->source); })()));
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 1054) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 1054)) * ((100 - CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "remise", [], "any", false, false, false, 1054)) / 100)), 2, ",", " "), "html", null, true);
                                yield "</td>
                                ";
                            }
                            // line 1056
                            yield "                                </td>
                            </tr>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['lign'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1059
                        yield "
                        <tr class=\"togo\">
                            ";
                        // line 1061
                        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1061, $this->source); })()), "zone", [], "any", false, false, false, 1061) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1061, $this->source); })()), "aarem", [], "any", false, false, false, 1061) == "oui"))) {
                            // line 1062
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1062, $this->source); })()), "aaref", [], "any", false, false, false, 1062) == "oui")) {
                                // line 1063
                                yield "                                    <td COLSPAN=\"8\" align=\"right\">
                                        <b>SOUS-TOTAL: ";
                                // line 1064
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 1064, $this->source); })()), 2, ",", " "), "html", null, true);
                                yield "</b></td>
                                ";
                            } else {
                                // line 1066
                                yield "                                    <td COLSPAN=\"7\" align=\"right\">
                                        <b>SOUS-TOTAL: ";
                                // line 1067
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 1067, $this->source); })()), 2, ",", " "), "html", null, true);
                                yield "</b></td>
                                ";
                            }
                            // line 1069
                            yield "                            ";
                        } elseif (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1069, $this->source); })()), "zone", [], "any", false, false, false, 1069) == "non") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1069, $this->source); })()), "aarem", [], "any", false, false, false, 1069) == "non"))) {
                            // line 1070
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1070, $this->source); })()), "aaref", [], "any", false, false, false, 1070) == "oui")) {
                                // line 1071
                                yield "                                    <td COLSPAN=\"6\" align=\"right\">
                                        <b>SOUS-TOTAL: ";
                                // line 1072
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 1072, $this->source); })()), 2, ",", " "), "html", null, true);
                                yield "</b></td>
                                ";
                            } else {
                                // line 1074
                                yield "                                    <td COLSPAN=\"5\" align=\"right\">
                                        <b>SOUS-TOTAL: ";
                                // line 1075
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 1075, $this->source); })()), 2, ",", " "), "html", null, true);
                                yield "</b></td>
                                ";
                            }
                            // line 1077
                            yield "
                            ";
                        } elseif (((CoreExtension::getAttribute($this->env, $this->source,                         // line 1078
(isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1078, $this->source); })()), "zone", [], "any", false, false, false, 1078) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1078, $this->source); })()), "aarem", [], "any", false, false, false, 1078) == "non"))) {
                            // line 1079
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1079, $this->source); })()), "aaref", [], "any", false, false, false, 1079) == "oui")) {
                                // line 1080
                                yield "                                    <td COLSPAN=\"7\" align=\"right\">
                                        <b>SOUS-TOTAL: ";
                                // line 1081
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 1081, $this->source); })()), 2, ",", " "), "html", null, true);
                                yield "</b></td>
                                ";
                            } else {
                                // line 1083
                                yield "                                    <td COLSPAN=\"6\" align=\"right\">
                                        <b>SOUS-TOTAL: ";
                                // line 1084
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 1084, $this->source); })()), 2, ",", " "), "html", null, true);
                                yield "</b></td>
                                ";
                            }
                            // line 1086
                            yield "
                            ";
                        } elseif (((CoreExtension::getAttribute($this->env, $this->source,                         // line 1087
(isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1087, $this->source); })()), "aarem", [], "any", false, false, false, 1087) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1087, $this->source); })()), "zone", [], "any", false, false, false, 1087) == "non"))) {
                            // line 1088
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1088, $this->source); })()), "aaref", [], "any", false, false, false, 1088) == "oui")) {
                                // line 1089
                                yield "                                    <td COLSPAN=\"7\" align=\"right\">
                                        <b>SOUS-TOTAL: ";
                                // line 1090
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 1090, $this->source); })()), 2, ",", " "), "html", null, true);
                                yield "</b></td>
                                ";
                            } else {
                                // line 1092
                                yield "                                    <td COLSPAN=\"6\" align=\"right\">
                                        <b>SOUS-TOTAL: ";
                                // line 1093
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 1093, $this->source); })()), 2, ",", " "), "html", null, true);
                                yield "</b></td>
                                ";
                            }
                            // line 1095
                            yield "                            ";
                        }
                        // line 1096
                        yield "
                        </tr>

                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['group'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1100
                    yield "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["lignes"]) || array_key_exists("lignes", $context) ? $context["lignes"] : (function () { throw new RuntimeError('Variable "lignes" does not exist.', 1100, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["lign"]) {
                        // line 1101
                        yield "                        ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "groupe", [], "any", false, false, false, 1101) == null)) {
                            // line 1102
                            yield "                            <tr>
                                ";
                            // line 1103
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1103, $this->source); })()), "aaref", [], "any", false, false, false, 1103) == "oui")) {
                                // line 1104
                                yield "                                    <td style=\"text-align: center\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "reference", [], "any", false, false, false, 1104), "html", null, true);
                                yield "</td>
                                ";
                            }
                            // line 1106
                            yield "                                <td>";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "designation", [], "any", false, false, false, 1106);
                            yield "</td>
                                ";
                            // line 1107
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1107, $this->source); })()), "zone", [], "any", false, false, false, 1107) == "oui")) {
                                // line 1108
                                yield "                                    <td style=\"text-align: center\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "zone", [], "any", false, false, false, 1108), "html", null, true);
                                yield "</td>
                                ";
                            }
                            // line 1110
                            yield "                                <td style=\"text-align: center\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "unite", [], "any", false, false, false, 1110), "html", null, true);
                            yield "</td>
                                <td style=\"text-align: center\">";
                            // line 1111
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 1111), 2, ",", " "), "html", null, true);
                            yield "<br><span
                                            class=\"hider\">";
                            // line 1112
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 1112), 6, ",", " "), "html", null, true);
                            yield "</span></td>
                                <td style=\"text-align: right\">";
                            // line 1113
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 1113), 2, ",", " "), "html", null, true);
                            yield "<br><span
                                            class=\"hider\">";
                            // line 1114
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 1114), 4, ",", "."), "html", null, true);
                            yield "</span></td>
                                ";
                            // line 1115
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1115, $this->source); })()), "aarem", [], "any", false, false, false, 1115) == "oui")) {
                                // line 1116
                                yield "                                    <td style=\"text-align: center\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "remise", [], "any", false, false, false, 1116), "html", null, true);
                                yield "%</td>
                                ";
                            }
                            // line 1118
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1118, $this->source); })()), "aarem", [], "any", false, false, false, 1118) == "non")) {
                                // line 1119
                                yield "                                    <td style=\"text-align: right\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 1119) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 1119)), 2, ",", " "), "html", null, true);
                                yield "
                                        <br><span
                                                class=\"hider\">";
                                // line 1121
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 1121) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 1121)), 4, ",", "."), "html", null, true);
                                yield "</span>
                                    </td>
                                ";
                            }
                            // line 1124
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1124, $this->source); })()), "aarem", [], "any", false, false, false, 1124) != "non")) {
                                // line 1125
                                yield "                                    <td style=\"text-align: right\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 1125) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 1125)) * ((100 - CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "remise", [], "any", false, false, false, 1125)) / 100)), 2, ",", " "), "html", null, true);
                                yield "</td>
                                ";
                            }
                            // line 1127
                            yield "                            </tr>
                        ";
                        }
                        // line 1129
                        yield "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['lign'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1130
                    yield "                    <tr>
                        ";
                    // line 1131
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1131, $this->source); })()), "aaref", [], "any", false, false, false, 1131) == "oui")) {
                        // line 1132
                        yield "                            <td class=\"bord\"></td>
                        ";
                    }
                    // line 1134
                    yield "                        <td class=\"bord\"></td>
                        ";
                    // line 1135
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1135, $this->source); })()), "zone", [], "any", false, false, false, 1135) == "oui")) {
                        // line 1136
                        yield "                            <td class=\"bord\"></td>
                        ";
                    }
                    // line 1138
                    yield "                        <td class=\"bord\"></td>
                        ";
                    // line 1139
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1139, $this->source); })()), "aarem", [], "any", false, false, false, 1139) == "oui")) {
                        // line 1140
                        yield "                            ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1140, $this->source); })()), "ptva", [], "any", false, false, false, 1140) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1140, $this->source); })()), "ptva", [], "any", false, false, false, 1140) == "susp"))) {
                            // line 1141
                            yield "                                <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT</b></td>
                            ";
                        } else {
                            // line 1143
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1143, $this->source); })()), "model", [], "any", false, false, false, 1143) == 1)) {
                                // line 1144
                                yield "                                    <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT</b></td>
                                ";
                            } else {
                                // line 1146
                                yield "                                    <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL TTC</b></td>
                                ";
                            }
                            // line 1148
                            yield "                            ";
                        }
                        // line 1149
                        yield "                        ";
                    } else {
                        // line 1150
                        yield "                            ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1150, $this->source); })()), "ptva", [], "any", false, false, false, 1150) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1150, $this->source); })()), "ptva", [], "any", false, false, false, 1150) == "susp"))) {
                            // line 1151
                            yield "                                <td colspan=\"2\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT</b></td>
                            ";
                        } else {
                            // line 1153
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1153, $this->source); })()), "model", [], "any", false, false, false, 1153) == 1)) {
                                // line 1154
                                yield "                                    <td colspan=\"2\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT</b></td>
                                ";
                            } else {
                                // line 1156
                                yield "                                    <td colspan=\"2\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL TTC</b></td>
                                ";
                            }
                            // line 1158
                            yield "                            ";
                        }
                        // line 1159
                        yield "                        ";
                    }
                    // line 1160
                    yield "                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1160, $this->source); })()), "aarem", [], "any", false, false, false, 1160) == "tht")) {
                        // line 1161
                        yield "                            <td style=\"text-align: right\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1161, $this->source); })()), "totalht", [], "any", false, false, false, 1161) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1161, $this->source); })()), "vremise", [], "any", false, false, false, 1161)), 2, ",", " "), "html", null, true);
                        yield "</td>
                        ";
                    } else {
                        // line 1163
                        yield "                            <td style=\"text-align: right\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1163, $this->source); })()), "totalht", [], "any", false, false, false, 1163), 2, ",", " "), "html", null, true);
                        yield "</td>
                        ";
                    }
                    // line 1165
                    yield "                    </tr>
                    ";
                    // line 1166
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1166, $this->source); })()), "aarem", [], "any", false, false, false, 1166) == "oui")) {
                        // line 1167
                        yield "                        <tr>
                            ";
                        // line 1168
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1168, $this->source); })()), "aaref", [], "any", false, false, false, 1168) == "oui")) {
                            // line 1169
                            yield "                                <td class=\"bord\"></td>
                            ";
                        }
                        // line 1171
                        yield "                            <td class=\"bord\"></td>
                            ";
                        // line 1172
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1172, $this->source); })()), "zone", [], "any", false, false, false, 1172) == "oui")) {
                            // line 1173
                            yield "                                <td class=\"bord\"></td>
                            ";
                        }
                        // line 1175
                        yield "                            <td class=\"bord\"></td>
                            ";
                        // line 1176
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1176, $this->source); })()), "aarem", [], "any", false, false, false, 1176) == "oui")) {
                            // line 1177
                            yield "                                <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>REMISE</b></td>
                            ";
                        } else {
                            // line 1179
                            yield "                                <td class=\"bord\" colspan=\"2\" style=\"text-align: right;\"><b>REMISE</b></td>
                            ";
                        }
                        // line 1181
                        yield "                            <td style=\"text-align: right\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1181, $this->source); })()), "vremise", [], "any", false, false, false, 1181), 2, ",", " "), "html", null, true);
                        yield "</td>
                        </tr>
                    ";
                    }
                    // line 1184
                    yield "                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1184, $this->source); })()), "aarem", [], "any", false, false, false, 1184) == "tht")) {
                        // line 1185
                        yield "                        <tr>
                            ";
                        // line 1186
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1186, $this->source); })()), "aaref", [], "any", false, false, false, 1186) == "oui")) {
                            // line 1187
                            yield "                                <td class=\"bord\"></td>
                            ";
                        }
                        // line 1189
                        yield "                            <td class=\"bord\"></td>
                            ";
                        // line 1190
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1190, $this->source); })()), "zone", [], "any", false, false, false, 1190) == "oui")) {
                            // line 1191
                            yield "                                <td class=\"bord\"></td>
                            ";
                        }
                        // line 1193
                        yield "                            <td class=\"bord\"></td>
                            ";
                        // line 1194
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1194, $this->source); })()), "aarem", [], "any", false, false, false, 1194) == "oui")) {
                            // line 1195
                            yield "                                ";
                            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1195, $this->source); })()), "ptva", [], "any", false, false, false, 1195) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1195, $this->source); })()), "ptva", [], "any", false, false, false, 1195) == "susp"))) {
                                // line 1196
                                yield "                                    <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT REMISÉ</b></td>
                                ";
                            } else {
                                // line 1198
                                yield "                                    ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1198, $this->source); })()), "model", [], "any", false, false, false, 1198) == 1)) {
                                    // line 1199
                                    yield "                                        <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT REMISÉ</b>
                                        </td>
                                    ";
                                } else {
                                    // line 1202
                                    yield "                                        <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL TTC REMISÉ</b>
                                        </td>
                                    ";
                                }
                                // line 1205
                                yield "                                ";
                            }
                            // line 1206
                            yield "                            ";
                        } else {
                            // line 1207
                            yield "                                ";
                            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1207, $this->source); })()), "ptva", [], "any", false, false, false, 1207) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1207, $this->source); })()), "ptva", [], "any", false, false, false, 1207) == "susp"))) {
                                // line 1208
                                yield "                                    <td colspan=\"2\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT REMISÉ</b></td>
                                ";
                            } else {
                                // line 1210
                                yield "                                    ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1210, $this->source); })()), "model", [], "any", false, false, false, 1210) == 1)) {
                                    // line 1211
                                    yield "                                        <td colspan=\"2\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT REMISÉ</b>
                                        </td>
                                    ";
                                } else {
                                    // line 1214
                                    yield "                                        <td colspan=\"2\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL TTC REMISÉ</b>
                                        </td>
                                    ";
                                }
                                // line 1217
                                yield "                                ";
                            }
                            // line 1218
                            yield "                            ";
                        }
                        // line 1219
                        yield "
                            <td style=\"text-align: right\">";
                        // line 1220
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1220, $this->source); })()), "totalht", [], "any", false, false, false, 1220), 2, ",", " "), "html", null, true);
                        yield "</td>
                        </tr>
                        <tr>
                            ";
                        // line 1223
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1223, $this->source); })()), "aaref", [], "any", false, false, false, 1223) == "oui")) {
                            // line 1224
                            yield "                                <td class=\"bord\"></td>
                            ";
                        }
                        // line 1226
                        yield "                            <td class=\"bord\"></td>
                            ";
                        // line 1227
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1227, $this->source); })()), "zone", [], "any", false, false, false, 1227) == "oui")) {
                            // line 1228
                            yield "                                <td class=\"bord\"></td>
                            ";
                        }
                        // line 1230
                        yield "                            <td class=\"bord\"></td>
                            ";
                        // line 1231
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1231, $this->source); })()), "aarem", [], "any", false, false, false, 1231) == "oui")) {
                            // line 1232
                            yield "                                <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\">
                                    <b>REMISE ";
                            // line 1233
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1233, $this->source); })()), "remtht", [], "any", false, false, false, 1233), 0, ",", " "), "html", null, true);
                            yield "%</b></td>
                            ";
                        } else {
                            // line 1235
                            yield "                                <td class=\"bord\" colspan=\"2\" style=\"text-align: right;\">
                                    <b>REMISE ";
                            // line 1236
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1236, $this->source); })()), "remtht", [], "any", false, false, false, 1236), 0, ",", " "), "html", null, true);
                            yield "% </b></td>
                            ";
                        }
                        // line 1238
                        yield "                            <td align=\"right\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1238, $this->source); })()), "vremise", [], "any", false, false, false, 1238), 2, ",", " "), "html", null, true);
                        yield "</td>
                        </tr>
                    ";
                    }
                    // line 1241
                    yield "                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1241, $this->source); })()), "abasetva", [], "any", false, false, false, 1241) == "oui")) {
                        // line 1242
                        yield "                        <tr>
                            ";
                        // line 1243
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1243, $this->source); })()), "aaref", [], "any", false, false, false, 1243) == "oui")) {
                            // line 1244
                            yield "                                <td class=\"bord\"></td>
                            ";
                        }
                        // line 1246
                        yield "                            <td class=\"bord\"></td>
                            ";
                        // line 1247
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1247, $this->source); })()), "zone", [], "any", false, false, false, 1247) == "oui")) {
                            // line 1248
                            yield "                                <td class=\"bord\"></td>
                            ";
                        }
                        // line 1250
                        yield "                            <td class=\"bord\"></td>
                            ";
                        // line 1251
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1251, $this->source); })()), "aarem", [], "any", false, false, false, 1251) == "oui")) {
                            // line 1252
                            yield "                                <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>BASE
                                        TVA";
                            // line 1253
                            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1253, $this->source); })()), "code", [], "any", false, false, false, 1253))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                yield "(";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1253, $this->source); })()), "code", [], "any", false, false, false, 1253), "html", null, true);
                                yield ")";
                            }
                            yield "</b></td>
                            ";
                        } else {
                            // line 1255
                            yield "                                <td class=\"bord\" colspan=\"2\" style=\"text-align: right;\"><b>BASE
                                        TVA";
                            // line 1256
                            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1256, $this->source); })()), "code", [], "any", false, false, false, 1256))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                yield "(";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1256, $this->source); })()), "code", [], "any", false, false, false, 1256), "html", null, true);
                                yield ")";
                            }
                            yield "</b></td>
                            ";
                        }
                        // line 1258
                        yield "                            <td align=\"right\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1258, $this->source); })()), "basetva", [], "any", false, false, false, 1258), 2, ",", " "), "html", null, true);
                        yield "</td>
                        </tr>
                    ";
                    }
                    // line 1261
                    yield "                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1261, $this->source); })()), "model", [], "any", false, false, false, 1261) == 1)) {
                        // line 1262
                        yield "                        <tr>
                            ";
                        // line 1263
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1263, $this->source); })()), "aaref", [], "any", false, false, false, 1263) == "oui")) {
                            // line 1264
                            yield "                                <td class=\"bord\"></td>
                            ";
                        }
                        // line 1266
                        yield "                            <td class=\"bord\"></td>
                            ";
                        // line 1267
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1267, $this->source); })()), "zone", [], "any", false, false, false, 1267) == "oui")) {
                            // line 1268
                            yield "                                <td class=\"bord\"></td>
                            ";
                        }
                        // line 1270
                        yield "                            <td class=\"bord\"></td>
                            ";
                        // line 1271
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1271, $this->source); })()), "aarem", [], "any", false, false, false, 1271) == "oui")) {
                            // line 1272
                            yield "                                <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\">
                                    ";
                            // line 1273
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1273, $this->source); })()), "ptva", [], "any", false, false, false, 1273) == "oui")) {
                                // line 1274
                                yield "                                        <b>TVA ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1274, $this->source); })()), "tva", [], "any", false, false, false, 1274), "html", null, true);
                                yield "%</b>
                                    ";
                            }
                            // line 1276
                            yield "                                    ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1276, $this->source); })()), "ptva", [], "any", false, false, false, 1276) == "susp")) {
                                // line 1277
                                yield "                                        <b>TVA SUSPENDUE ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1277, $this->source); })()), "tva", [], "any", false, false, false, 1277), "html", null, true);
                                yield "%</b>
                                    ";
                            }
                            // line 1279
                            yield "                                    ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1279, $this->source); })()), "ptva", [], "any", false, false, false, 1279) == "non")) {
                                // line 1280
                                yield "                                        <b>TVA NON FACTURÉE ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1280, $this->source); })()), "tva", [], "any", false, false, false, 1280), "html", null, true);
                                yield "%</b>
                                    ";
                            }
                            // line 1282
                            yield "                                </td>
                            ";
                        } else {
                            // line 1284
                            yield "                                <td class=\"bord\" colspan=\"2\" style=\"text-align: right;\">
                                    ";
                            // line 1285
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1285, $this->source); })()), "ptva", [], "any", false, false, false, 1285) == "oui")) {
                                // line 1286
                                yield "                                        <b>TVA ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1286, $this->source); })()), "tva", [], "any", false, false, false, 1286), "html", null, true);
                                yield "%</b>
                                    ";
                            }
                            // line 1288
                            yield "                                    ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1288, $this->source); })()), "ptva", [], "any", false, false, false, 1288) == "susp")) {
                                // line 1289
                                yield "                                        <b>TVA SUSPENDUE ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1289, $this->source); })()), "tva", [], "any", false, false, false, 1289), "html", null, true);
                                yield "%</b>
                                    ";
                            }
                            // line 1291
                            yield "                                    ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1291, $this->source); })()), "ptva", [], "any", false, false, false, 1291) == "non")) {
                                // line 1292
                                yield "                                        <b>TVA NON FACTURÉE ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1292, $this->source); })()), "tva", [], "any", false, false, false, 1292), "html", null, true);
                                yield "%</b>
                                    ";
                            }
                            // line 1294
                            yield "                                </td>
                            ";
                        }
                        // line 1296
                        yield "                            <td align=\"right\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1296, $this->source); })()), "vtva", [], "any", false, false, false, 1296), 2, ",", " "), "html", null, true);
                        yield "</td>
                        </tr>
                    ";
                    }
                    // line 1299
                    yield "                    <tr>
                        ";
                    // line 1300
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1300, $this->source); })()), "aaref", [], "any", false, false, false, 1300) == "oui")) {
                        // line 1301
                        yield "                            <td class=\"bord\"></td>
                        ";
                    }
                    // line 1303
                    yield "                        <td class=\"bord\"></td>
                        ";
                    // line 1304
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1304, $this->source); })()), "zone", [], "any", false, false, false, 1304) == "oui")) {
                        // line 1305
                        yield "                            <td class=\"bord\"></td>
                        ";
                    }
                    // line 1307
                    yield "                        <td class=\"bord\"></td>
                        ";
                    // line 1308
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1308, $this->source); })()), "aarem", [], "any", false, false, false, 1308) == "oui")) {
                        // line 1309
                        yield "                            <td colspan=\"3\" class=\"bord\"
                                style=\"color: #4e73df;border-bottom: 1px solid #D3D3D3 !important;\">
                                <b>TOTAL TTC</b></td>
                        ";
                    } else {
                        // line 1313
                        yield "                            <td colspan=\"2\" class=\"bord\"
                                style=\"color: #4e73df; border-bottom: 1px solid #D3D3D3 !important;\">
                                <b>TOTAL TTC</b></td>
                        ";
                    }
                    // line 1317
                    yield "                        <td align=\"right\"><b>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1317, $this->source); })()), "totalttc", [], "any", false, false, false, 1317), 2, ",", " "), "html", null, true);
                    yield "</b><br><span
                                    class=\"hider\">";
                    // line 1318
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1318, $this->source); })()), "totalttc", [], "any", false, false, false, 1318), 4, ",", "."), "html", null, true);
                    yield "</span></td>
                    </tr>
                ";
                }
                // line 1321
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1321, $this->source); })()), "type", [], "any", false, false, false, 1321) == "cps")) {
                    // line 1322
                    yield "                    <tr class=\"printer\">
                        <th style=\"text-align: center\">Nº COMMANDE</th>
                        <th style=\"max-width:500px !important; min-width: 250px !important; text-align: left\"
                            colspan=\"2\">
                            DÉSIGNATION
                        </th>
                        }}
                        <th style=\"text-align: center; min-width: 80px !important;\">RÉF</th>
                        <th style=\"text-align: center\">UNITÉ</th>
                        <th style=\"text-align: center; min-width: 120px !important;\">PRIX&nbsp;U.</th>
                    </tr>
                    ";
                    // line 1333
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1333, $this->source); })()), "bons", [], "any", false, false, false, 1333));
                    foreach ($context['_seq'] as $context["_key"] => $context["bon"]) {
                        // line 1334
                        yield "                        <tr>
                            <td style=\"text-align: center; min-width: 120px !important;\">Bon Nº ";
                        // line 1335
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "numbon", [], "any", false, false, false, 1335), "html", null, true);
                        yield "</td>
                            <td style=\"max-width:500px !important; min-width: 250px !important; text-align: left\"
                                colspan=\"2\">";
                        // line 1337
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "articlecomposer", [], "any", false, false, false, 1337), "designation", [], "any", false, false, false, 1337), "html", null, true);
                        yield "</td>
                            }
                            <td style=\"text-align: center; min-width: 80px !important;\">";
                        // line 1339
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "articlecomposer", [], "any", false, false, false, 1339), "reference", [], "any", false, false, false, 1339), "html", null, true);
                        yield "</td>
                            <td style=\"text-align: center\">";
                        // line 1340
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "articlecomposer", [], "any", false, false, false, 1340), "unite", [], "any", false, false, false, 1340), "html", null, true);
                        yield "</td>
                            <td style=\"text-align: center; min-width: 120px !important;\">";
                        // line 1341
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "articlecomposer", [], "any", false, false, false, 1341), "pu", [], "any", false, false, false, 1341), 2, ",", " "), "html", null, true);
                        yield "</td>
                        </tr>
                        <tr style=\"background-color:#f8f9fa; font-weight: 700\">
                            <th style=\"text-align: center\">RÉF</th>
                            <th style=\"max-width:500px !important; min-width: 200px !important; text-align: left\">
                                DÉSIGNATION
                            </th>
                            }
                            <th style=\"text-align: center\">UNITÉ</th>
                            <th style=\"text-align: center\">QTÉ</th>
                            <th style=\"text-align: center; min-width: 120px !important;\">PRIX&nbsp;U.</th>
                            <th style=\"text-align: center; min-width: 120px !important;\">MONTANT HT</th>
                        </tr>
                        ";
                        // line 1354
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "lignes", [], "any", false, false, false, 1354));
                        foreach ($context['_seq'] as $context["_key"] => $context["lign"]) {
                            // line 1355
                            yield "                            ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "groupe", [], "any", false, false, false, 1355) == null)) {
                                // line 1356
                                yield "                                <tr>
                                    <td style=\"text-align: center\">";
                                // line 1357
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "reference", [], "any", false, false, false, 1357), "html", null, true);
                                yield "</td>
                                    <td>";
                                // line 1358
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "designation", [], "any", false, false, false, 1358);
                                yield "</td>
                                    <td style=\"text-align: center\">";
                                // line 1359
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "unite", [], "any", false, false, false, 1359), "html", null, true);
                                yield "</td>
                                    <td style=\"text-align: center\">";
                                // line 1360
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 1360), 2, ",", " "), "html", null, true);
                                yield "</td>
                                    <td style=\"text-align: center\">";
                                // line 1361
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 1361), 2, ",", " "), "html", null, true);
                                yield "</td>
                                    <td style=\"text-align: center\">";
                                // line 1362
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 1362) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 1362)), 2, ",", " "), "html", null, true);
                                yield "</td>
                                </tr>
                            ";
                            }
                            // line 1365
                            yield "                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['lign'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1366
                        yield "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['bon'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1367
                    yield "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1367, $this->source); })()), "bons", [], "any", false, false, false, 1367));
                    foreach ($context['_seq'] as $context["_key"] => $context["bon"]) {
                        // line 1368
                        yield "                        <tr>
                            <td style=\"text-align: center; min-width: 120px !important;\">Bon Nº ";
                        // line 1369
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "numbon", [], "any", false, false, false, 1369), "html", null, true);
                        yield "</td>
                            <td style=\"max-width:500px !important; min-width: 250px !important; text-align: left\"
                                colspan=\"2\">";
                        // line 1371
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "articlecomposer", [], "any", false, false, false, 1371), "designation", [], "any", false, false, false, 1371), "html", null, true);
                        yield "</td>
                            }
                            <td style=\"text-align: center; min-width: 80px !important;\">";
                        // line 1373
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "articlecomposer", [], "any", false, false, false, 1373), "reference", [], "any", false, false, false, 1373), "html", null, true);
                        yield "</td>
                            <td style=\"text-align: center\">";
                        // line 1374
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "articlecomposer", [], "any", false, false, false, 1374), "unite", [], "any", false, false, false, 1374), "html", null, true);
                        yield "</td>
                            <td style=\"text-align: center; min-width: 120px !important;\">";
                        // line 1375
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "articlecomposer", [], "any", false, false, false, 1375), "pu", [], "any", false, false, false, 1375), 2, ",", " "), "html", null, true);
                        yield "</td>
                        </tr>
                        <tr style=\"background-color:#f8f9fa; font-weight: 700\">
                            <th style=\"text-align: center\">RÉF</th>
                            <th style=\"max-width:500px !important; min-width: 200px !important; text-align: left\">
                                DÉSIGNATION
                            </th>
                            }
                            <th style=\"text-align: center\">UNITÉ</th>
                            <th style=\"text-align: center\">QTÉ</th>
                            <th style=\"text-align: center; min-width: 120px !important;\">PRIX&nbsp;U.</th>
                            <th style=\"text-align: center; min-width: 120px !important;\">MONTANT HT</th>
                        </tr>
                        ";
                        // line 1388
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "lignes", [], "any", false, false, false, 1388));
                        foreach ($context['_seq'] as $context["_key"] => $context["lign"]) {
                            // line 1389
                            yield "                            ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "groupe", [], "any", false, false, false, 1389) == null)) {
                                // line 1390
                                yield "                                <tr>
                                    <td style=\"text-align: center\">";
                                // line 1391
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "reference", [], "any", false, false, false, 1391), "html", null, true);
                                yield "</td>
                                    <td>";
                                // line 1392
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "designation", [], "any", false, false, false, 1392);
                                yield "</td>
                                    <td style=\"text-align: center\">";
                                // line 1393
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "unite", [], "any", false, false, false, 1393), "html", null, true);
                                yield "</td>
                                    <td style=\"text-align: center\">";
                                // line 1394
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 1394), 2, ",", " "), "html", null, true);
                                yield "</td>
                                    <td style=\"text-align: center\">";
                                // line 1395
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 1395), 2, ",", " "), "html", null, true);
                                yield "</td>
                                    <td style=\"text-align: center\">";
                                // line 1396
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 1396) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 1396)), 2, ",", " "), "html", null, true);
                                yield "</td>
                                </tr>
                            ";
                            }
                            // line 1399
                            yield "                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['lign'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1400
                        yield "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['bon'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1401
                    yield "                ";
                }
                // line 1402
                yield "            </table>
        ";
            }
            // line 1404
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1404, $this->source); })()), "type", [], "any", false, false, false, 1404) != "cps")) {
                // line 1405
                yield "            <p style=\"clear: both\"></p>
            <br>
            <p style=\"text-align: left\">
                Arrêté le présent devis à la somme de:<br>
                <span><b>";
                // line 1409
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Craue\TwigExtensionsBundle\Twig\Extension\FormatNumberExtension']->formatSpelledOutNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1409, $this->source); })()), "totalttc", [], "any", false, false, false, 1409), "fr-FR"), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1409, $this->source); })()), "monnaie", [], "any", false, false, false, 1409), "code", [], "any", false, false, false, 1409), "html", null, true);
                yield "</b></span>
            </p><br>
            <p style=\"float: right; text-decoration: underline\">SIGNATURE AUTORISÉE</p><br><br><br>
            ";
                // line 1412
                if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1412, $this->source); })()), "conditions", [], "any", false, false, false, 1412))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 1413
                    yield "                <p style=\"float: left; color: #4e73df;\"><u>INFORMATIONS ADDITIONNELLES</u></p>
                <p style=\"clear: both\"></p>
                <p style=\"color: #000000;\">";
                    // line 1415
                    yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1415, $this->source); })()), "conditions", [], "any", false, false, false, 1415);
                    yield "</p>
            ";
                }
                // line 1417
                yield "        ";
            }
            // line 1418
            yield "    </div>
";
        }
        // line 1420
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 1420, $this->source); })()) == "bon")) {
            // line 1421
            yield "    <div class=\"bood\">

            <table style=\"margin-top: ";
            // line 1423
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1423, $this->source); })()), "teteDB", [], "any", false, false, false, 1423), "html", null, true);
            yield "px !important; float: right\">
                <tr>
                    <td style=\"border: none !important; text-align: center\">
                        <b>";
            // line 1426
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1426, $this->source); })()), "client", [], "any", false, false, false, 1426), "nomclient", [], "any", false, false, false, 1426)), "html", null, true);
            yield "</b> <br>
                        ";
            // line 1427
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1427, $this->source); })()), "client", [], "any", false, false, false, 1427), "adresse", [], "any", false, false, false, 1427), "html", null, true);
            yield " <br>
                    </td>
                </tr>
            </table>
            <table style=\"text-align: left\">
                <tr>
                    <td style=\"border: none !important; font-size: 25px\">
                        ";
            // line 1434
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1434, $this->source); })()), "type", [], "any", false, false, false, 1434) == "oui")) {
                // line 1435
                yield "                            <b>BON DE COMMANDE - FOURNISSEUR</b>
                        ";
            }
            // line 1437
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1437, $this->source); })()), "type", [], "any", false, false, false, 1437) == "non")) {
                // line 1438
                yield "                            <b>BON DE RETOUR DE COMMANDE - FOURNISSEUR</b>
                        ";
            }
            // line 1440
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1440, $this->source); })()), "type", [], "any", false, false, false, 1440) == "none")) {
                // line 1441
                yield "                            <b>BON DE LIVRAISON</b>
                        ";
            }
            // line 1443
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1443, $this->source); })()), "type", [], "any", false, false, false, 1443) == "pst")) {
                // line 1444
                yield "                            <b>BON DE COMMANDE - PRESTATAIRE</b>
                        ";
            }
            // line 1446
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1446, $this->source); })()), "type", [], "any", false, false, false, 1446) == "cps")) {
                // line 1447
                yield "                            <b>PRÉVISION ARTICLE COMPOSÉ</b>
                        ";
            }
            // line 1449
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1449, $this->source); })()), "type", [], "any", false, false, false, 1449) == "prepa")) {
                // line 1450
                yield "                            <b>BON DE SUIVI DE COMMANDE</b>
                        ";
            }
            // line 1452
            yield "                    </td>
                </tr>
            </table>
            <table>
                <tr style=\"background-color: #f8f9fa !important; font-weight: 700\">
                    <td class=\"text-center\">DATE</td>
                    ";
            // line 1458
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1458, $this->source); })()), "type", [], "any", false, false, false, 1458) == "prepa")) {
                // line 1459
                yield "                        <td class=\"text-center\">N° DE BON DE SUIVI</td>
                    ";
            } else {
                // line 1461
                yield "                        <td class=\"text-center\">N° DE BON</td>
                    ";
            }
            // line 1463
            yield "
                    ";
            // line 1464
            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1464, $this->source); })()), "type", [], "any", false, false, false, 1464) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1464, $this->source); })()), "type", [], "any", false, false, false, 1464) == "none"))) {
                // line 1465
                yield "                        <td class=\"text-center\">N° DE BON DE SUIVI</td>
                    ";
            }
            // line 1467
            yield "                    <td class=\"text-center\">SELON DEVIS N°</td>

                    ";
            // line 1469
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1469, $this->source); })()), "type", [], "any", false, false, false, 1469) == "pst")) {
                // line 1470
                yield "                        <td class=\"text-center\">PRESTATAIRE</td>
                    ";
            }
            // line 1472
            yield "
                    ";
            // line 1473
            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1473, $this->source); })()), "type", [], "any", false, false, false, 1473) == "none") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1473, $this->source); })()), "type", [], "any", false, false, false, 1473) == "oui"))) {
                // line 1474
                yield "                        <td class=\"text-center\">FOURNISSEUR</td>
                    ";
            }
            // line 1476
            yield "
                </tr>
                <tr>
                    <td class=\"text-center\">";
            // line 1479
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1479, $this->source); })()), "date", [], "any", false, false, false, 1479), "d/m/y"), "html", null, true);
            yield "</td>
                    <td class=\"text-center\">";
            // line 1480
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1480, $this->source); })()), "numbon", [], "any", false, false, false, 1480), "html", null, true);
            yield "</td>
                    ";
            // line 1481
            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1481, $this->source); })()), "type", [], "any", false, false, false, 1481) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1481, $this->source); })()), "type", [], "any", false, false, false, 1481) == "non"))) {
                // line 1482
                yield "                        <td class=\"text-center\">";
                if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1482, $this->source); })()), "preparation", [], "any", false, false, false, 1482))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1482, $this->source); })()), "preparation", [], "any", false, false, false, 1482), "numbon", [], "any", false, false, false, 1482), "html", null, true);
                }
                yield "</td>
                    ";
            }
            // line 1484
            yield "                    <td class=\"text-center\">
                        ";
            // line 1485
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1485, $this->source); })()), "devis", [], "any", false, false, false, 1485))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1486
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1486, $this->source); })()), "devis", [], "any", false, false, false, 1486), "iddevis", [], "any", false, false, false, 1486), "html", null, true);
                yield "
                        ";
            }
            // line 1488
            yield "                    </td>

                    ";
            // line 1490
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1490, $this->source); })()), "type", [], "any", false, false, false, 1490) != "prepa")) {
                // line 1491
                yield "                        ";
                if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1491, $this->source); })()), "type", [], "any", false, false, false, 1491) != "none") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1491, $this->source); })()), "type", [], "any", false, false, false, 1491) != "cps"))) {
                    // line 1492
                    yield "                            ";
                    if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1492, $this->source); })()), "fournisseur", [], "any", false, false, false, 1492))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 1493
                        yield "                                <td class=\"text-center\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1493, $this->source); })()), "fournisseur", [], "any", false, false, false, 1493), "fournisseur", [], "any", false, false, false, 1493)), "html", null, true);
                        yield "</td>
                            ";
                    } else {
                        // line 1495
                        yield "                                <td class=\"text-center\"></td>
                            ";
                    }
                    // line 1497
                    yield "                        ";
                }
                // line 1498
                yield "                    ";
            }
            // line 1499
            yield "
                </tr>
                <tr>
                    <td
                            ";
            // line 1503
            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1503, $this->source); })()), "type", [], "any", false, false, false, 1503) == "none") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1503, $this->source); })()), "type", [], "any", false, false, false, 1503) == "cps"))) {
                yield " colspan=\"3\" ";
            }
            // line 1504
            yield "                            ";
            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1504, $this->source); })()), "type", [], "any", false, false, false, 1504) == "prepa") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1504, $this->source); })()), "type", [], "any", false, false, false, 1504) == "pst"))) {
                yield " colspan=\"4\" ";
            }
            // line 1505
            yield "                            ";
            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1505, $this->source); })()), "type", [], "any", false, false, false, 1505) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1505, $this->source); })()), "type", [], "any", false, false, false, 1505) == "non"))) {
                yield " colspan=\"5\" ";
            }
            // line 1506
            yield "                    >
                        <span style=\"text-decoration: underline; font-weight: bold\">RÉFÉRENCE</span><br>";
            // line 1507
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1507, $this->source); })()), "bonreference", [], "any", false, false, false, 1507);
            yield "
                    </td>
                </tr>
            </table>

            <table style=\"width: 100%;\">
                <tr class=\"printer\">
                    ";
            // line 1514
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1514, $this->source); })()), "aaref", [], "any", false, false, false, 1514) == "oui")) {
                // line 1515
                yield "                        <th style=\"text-align: center\">RÉF</th>
                    ";
            }
            // line 1517
            yield "                    <th style=\"max-width:500px !important; min-width: 250px !important; text-align: left\">
                        DÉSIGNATION
                    </th>
                    <th style=\"text-align: center\">UNITÉ</th>

                    ";
            // line 1522
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1522, $this->source); })()), "type", [], "any", false, false, false, 1522) == "none")) {
                // line 1523
                yield "                        <th style=\"text-align: center\">QUANTITÉ LIVRÉE</th>
                    ";
            }
            // line 1525
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1525, $this->source); })()), "type", [], "any", false, false, false, 1525) == "prepa")) {
                // line 1526
                yield "                        <th style=\"text-align: center\">QTÉ<br>PRÉVUE</th>
                        <th style=\"text-align: center\">QTÉ<br>LIVRÉE</th>
                        <th style=\"text-align: center\">RESTE&nbsp;À <br>LIVRER</th>
                    ";
            }
            // line 1530
            yield "                    ";
            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1530, $this->source); })()), "type", [], "any", false, false, false, 1530) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1530, $this->source); })()), "type", [], "any", false, false, false, 1530) == "non"))) {
                // line 1531
                yield "                        ";
                if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1531, $this->source); })()), "preparation", [], "any", false, false, false, 1531))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 1532
                    yield "                            <th style=\"text-align: center\">QTÉ<br>PRÉVUE</th>
                            <th style=\"text-align: center\">QTÉ<br>LIVRÉE</th>
                            <th style=\"text-align: center\">RESTE&nbsp;À <br>LIVRER</th>
                            <th style=\"text-align: center\"> QTÉ<br>DEMANDÉE</th>
                        ";
                } else {
                    // line 1537
                    yield "                            <th style=\"text-align: center\"> QTÉ</th>
                        ";
                }
                // line 1539
                yield "                    ";
            }
            // line 1540
            yield "                    ";
            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1540, $this->source); })()), "type", [], "any", false, false, false, 1540) == "cps") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1540, $this->source); })()), "type", [], "any", false, false, false, 1540) == "pst"))) {
                // line 1541
                yield "                        <th style=\"text-align: center\"> QTÉ</th>
                    ";
            }
            // line 1543
            yield "                    <th style=\"text-align: center\">PRIX U.</th>
                    ";
            // line 1544
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1544, $this->source); })()), "aarem", [], "any", false, false, false, 1544) == "oui")) {
                // line 1545
                yield "                        <th style=\" text-align: center\">REMISE</th>
                    ";
            }
            // line 1547
            yield "                    <th style=\"text-align: center\">MONTANT&nbsp;HT</th>

                </tr>


                ";
            // line 1552
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["listGroup"]) || array_key_exists("listGroup", $context) ? $context["listGroup"] : (function () { throw new RuntimeError('Variable "listGroup" does not exist.', 1552, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 1553
                yield "                    <tr class=\"togo\">
                        ";
                // line 1554
                if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1554, $this->source); })()), "aaref", [], "any", false, false, false, 1554) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1554, $this->source); })()), "aarem", [], "any", false, false, false, 1554) == "oui"))) {
                    // line 1555
                    yield "                            <td class=\"text-center\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "reference", [], "any", false, false, false, 1555), "html", null, true);
                    yield "</td>
                            <td colspan=\"7\" style=\"font-weight: bold\">";
                    // line 1556
                    yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "groupe", [], "any", false, false, false, 1556));
                    yield "</td>
                        ";
                }
                // line 1558
                yield "                        ";
                if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1558, $this->source); })()), "aaref", [], "any", false, false, false, 1558) == "non") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1558, $this->source); })()), "aarem", [], "any", false, false, false, 1558) == "non"))) {
                    // line 1559
                    yield "                            <td colspan=\"5\" style=\"font-weight: bold\">";
                    yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "groupe", [], "any", false, false, false, 1559));
                    yield "</td>
                        ";
                }
                // line 1561
                yield "                        ";
                if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1561, $this->source); })()), "aaref", [], "any", false, false, false, 1561) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1561, $this->source); })()), "aarem", [], "any", false, false, false, 1561) == "non"))) {
                    // line 1562
                    yield "                            <td class=\"text-center\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "reference", [], "any", false, false, false, 1562), "html", null, true);
                    yield "</td>
                            <td colspan=\"6\" style=\"font-weight: bold\">";
                    // line 1563
                    yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "groupe", [], "any", false, false, false, 1563));
                    yield "</td>
                        ";
                }
                // line 1565
                yield "                        ";
                if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1565, $this->source); })()), "aaref", [], "any", false, false, false, 1565) == "non") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1565, $this->source); })()), "aarem", [], "any", false, false, false, 1565) == "oui"))) {
                    // line 1566
                    yield "                            <td colspan=\"6\" style=\"font-weight: bold\">";
                    yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "groupe", [], "any", false, false, false, 1566));
                    yield "</td>
                        ";
                }
                // line 1568
                yield "
                    </tr>

                    ";
                // line 1571
                $context["st"] = 0;
                // line 1572
                yield "
                    ";
                // line 1573
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "lignes", [], "any", false, false, false, 1573));
                foreach ($context['_seq'] as $context["_key"] => $context["lign"]) {
                    // line 1574
                    yield "                        <tr>
                            ";
                    // line 1575
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1575, $this->source); })()), "aaref", [], "any", false, false, false, 1575) == "oui")) {
                        // line 1576
                        yield "                                <td style=\"text-align: center\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "reference", [], "any", false, false, false, 1576), "html", null, true);
                        yield "</td>
                            ";
                    }
                    // line 1578
                    yield "                            <td class=\"text-left\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "designation", [], "any", false, false, false, 1578);
                    yield "</td>
                            <td style=\"text-align: center\">";
                    // line 1579
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "unite", [], "any", false, false, false, 1579), "html", null, true);
                    yield "</td>
                            <td style=\"text-align: center\">";
                    // line 1580
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 1580), 2, ",", " "), "html", null, true);
                    yield "<br><span
                                        class=\"hider\">";
                    // line 1581
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 1581), 5, "", ""), "html", null, true);
                    yield "</span></td>
                            ";
                    // line 1582
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1582, $this->source); })()), "type", [], "any", false, false, false, 1582) != "none")) {
                        // line 1583
                        yield "                                <td style=\"text-align: right\">
                                    ";
                        // line 1584
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 1584), 2, ",", " "), "html", null, true);
                        yield "<br>
                                    <span class=\"hider\">";
                        // line 1585
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 1585), 6, "", ""), "html", null, true);
                        yield "</span>
                                </td>
                                ";
                        // line 1587
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1587, $this->source); })()), "aarem", [], "any", false, false, false, 1587) == "oui")) {
                            // line 1588
                            yield "                                    <td style=\"text-align: center\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "remise", [], "any", false, false, false, 1588), "html", null, true);
                            yield "%</td>
                                ";
                        }
                        // line 1590
                        yield "                                ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1590, $this->source); })()), "aarem", [], "any", false, false, false, 1590) == "non")) {
                            // line 1591
                            yield "                                    <td style=\"text-align: right\">";
                            $context["st"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 1591) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 1591)) + (isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 1591, $this->source); })()));
                            yield " ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 1591) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 1591)), 2, ",", " "), "html", null, true);
                            yield "</td>
                                ";
                        } else {
                            // line 1593
                            yield "                                    <td style=\"text-align: right\">";
                            $context["st"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 1593) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 1593)) * ((100 - CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "remise", [], "any", false, false, false, 1593)) / 100)) + (isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 1593, $this->source); })()));
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 1593) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 1593)) * ((100 - CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "remise", [], "any", false, false, false, 1593)) / 100)), 2, ",", " "), "html", null, true);
                            yield "</td>
                                ";
                        }
                        // line 1595
                        yield "                            ";
                    }
                    // line 1596
                    yield "                            </td>
                        </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['lign'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1599
                yield "
                    <tr class=\"togo\">
                        ";
                // line 1601
                if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1601, $this->source); })()), "aaref", [], "any", false, false, false, 1601) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1601, $this->source); })()), "aarem", [], "any", false, false, false, 1601) == "oui"))) {
                    // line 1602
                    yield "                            <td colspan=\"7\" style=\"text-align: right\">
                                <b>SOUS-TOTAL: ";
                    // line 1603
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 1603, $this->source); })()), 2, ",", " "), "html", null, true);
                    yield "</b>
                            </td>
                        ";
                }
                // line 1606
                yield "                        ";
                if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1606, $this->source); })()), "aaref", [], "any", false, false, false, 1606) == "non") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1606, $this->source); })()), "aarem", [], "any", false, false, false, 1606) == "non"))) {
                    // line 1607
                    yield "                            <td colspan=\"5\" style=\"text-align: right\">
                                <b>SOUS-TOTAL: ";
                    // line 1608
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 1608, $this->source); })()), 2, ",", " "), "html", null, true);
                    yield "</b>
                            </td>
                        ";
                }
                // line 1611
                yield "                        ";
                if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1611, $this->source); })()), "aaref", [], "any", false, false, false, 1611) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1611, $this->source); })()), "aarem", [], "any", false, false, false, 1611) == "non"))) {
                    // line 1612
                    yield "                            <td colspan=\"6\" style=\"text-align: right\">
                                <b>SOUS-TOTAL: ";
                    // line 1613
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 1613, $this->source); })()), 2, ",", " "), "html", null, true);
                    yield "</b>
                            </td>
                        ";
                }
                // line 1616
                yield "                        ";
                if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1616, $this->source); })()), "aaref", [], "any", false, false, false, 1616) == "non") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1616, $this->source); })()), "aarem", [], "any", false, false, false, 1616) == "oui"))) {
                    // line 1617
                    yield "                            <td colspan=\"6\" style=\"text-align: right\">
                                <b>SOUS-TOTAL: ";
                    // line 1618
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 1618, $this->source); })()), 2, ",", " "), "html", null, true);
                    yield "</b>
                            </td>
                        ";
                }
                // line 1621
                yield "
                    </tr>

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1625
            yield "
                ";
            // line 1626
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["lignes"]) || array_key_exists("lignes", $context) ? $context["lignes"] : (function () { throw new RuntimeError('Variable "lignes" does not exist.', 1626, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["lign"]) {
                // line 1627
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "groupe", [], "any", false, false, false, 1627) == null)) {
                    // line 1628
                    yield "                        <tr>
                            ";
                    // line 1629
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1629, $this->source); })()), "aaref", [], "any", false, false, false, 1629) == "oui")) {
                        // line 1630
                        yield "                                <td style=\"text-align: center\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "reference", [], "any", false, false, false, 1630), "html", null, true);
                        yield "</td>
                            ";
                    }
                    // line 1632
                    yield "                            <td>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "designation", [], "any", false, false, false, 1632);
                    yield "</td>
                            <td style=\"text-align: center\">";
                    // line 1633
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "unite", [], "any", false, false, false, 1633), "html", null, true);
                    yield "</td>

                            ";
                    // line 1635
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1635, $this->source); })()), "type", [], "any", false, false, false, 1635) == "prepa")) {
                        // line 1636
                        yield "                                <td style=\"text-align: center\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 1636), 2, ",", " "), "html", null, true);
                        yield "
                                    <br><span
                                            class=\"hider\">";
                        // line 1638
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 1638), 5, "", ""), "html", null, true);
                        yield "</span></td>

                                <td style=\"text-align: center\">";
                        // line 1640
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "livrer", [], "any", false, false, false, 1640), 2, ",", " "), "html", null, true);
                        yield "
                                    <br><span
                                            class=\"hider\">";
                        // line 1642
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "livrer", [], "any", false, false, false, 1642), 5, "", ""), "html", null, true);
                        yield "</span></td>

                                <td style=\"text-align: center\">";
                        // line 1644
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "reste", [], "any", false, false, false, 1644), 2, ",", " "), "html", null, true);
                        yield "<br><span
                                            class=\"hider\">";
                        // line 1645
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "reste", [], "any", false, false, false, 1645), 5, "", ""), "html", null, true);
                        yield "</span></td>
                            ";
                    }
                    // line 1647
                    yield "                            ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1647, $this->source); })()), "type", [], "any", false, false, false, 1647) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1647, $this->source); })()), "type", [], "any", false, false, false, 1647) == "non"))) {
                        // line 1648
                        yield "                                ";
                        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1648, $this->source); })()), "preparation", [], "any", false, false, false, 1648))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 1649
                            yield "                                    <td style=\"text-align: center\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "livrer", [], "any", false, false, false, 1649) + CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "reste", [], "any", false, false, false, 1649)), 2, ",", " "), "html", null, true);
                            yield "
                                        <br><span
                                                class=\"hider\">";
                            // line 1651
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "livrer", [], "any", false, false, false, 1651) + CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "reste", [], "any", false, false, false, 1651)), 5, "", ""), "html", null, true);
                            yield "</span>
                                    </td>
                                    <td style=\"text-align: center\">";
                            // line 1653
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "livrer", [], "any", false, false, false, 1653), 2, ",", " "), "html", null, true);
                            yield "
                                        <br><span
                                                class=\"hider\">";
                            // line 1655
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "livrer", [], "any", false, false, false, 1655), 5, "", ""), "html", null, true);
                            yield "</span></td>
                                    <td style=\"text-align: center\">";
                            // line 1656
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "reste", [], "any", false, false, false, 1656), 2, ",", " "), "html", null, true);
                            yield "<br><span
                                                class=\"hider\">";
                            // line 1657
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "reste", [], "any", false, false, false, 1657), 5, "", ""), "html", null, true);
                            yield "</span></td>
                                    <td style=\"text-align: center\">";
                            // line 1658
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 1658), 2, ",", " "), "html", null, true);
                            yield "
                                        <br><span
                                                class=\"hider\">";
                            // line 1660
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 1660), 5, "", ""), "html", null, true);
                            yield "</span></td>
                                ";
                        } else {
                            // line 1662
                            yield "                                    <td style=\"text-align: center\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 1662), 2, ",", " "), "html", null, true);
                            yield "
                                        <br><span
                                                class=\"hider\">";
                            // line 1664
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 1664), 5, "", ""), "html", null, true);
                            yield "</span></td>
                                ";
                        }
                        // line 1666
                        yield "                            ";
                    }
                    // line 1667
                    yield "                            ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1667, $this->source); })()), "type", [], "any", false, false, false, 1667) == "cps") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1667, $this->source); })()), "type", [], "any", false, false, false, 1667) == "pst"))) {
                        // line 1668
                        yield "                                <td style=\"text-align: center\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 1668), 2, ",", " "), "html", null, true);
                        yield "
                                    <br><span
                                            class=\"hider\">";
                        // line 1670
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 1670), 5, "", ""), "html", null, true);
                        yield "</span></td>
                            ";
                    }
                    // line 1672
                    yield "                            ";
                    if ((($tmp =  !(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1672, $this->source); })()), "type", [], "any", false, false, false, 1672) === "none")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 1673
                        yield "                                <td style=\"text-align: right\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 1673), 2, ",", " "), "html", null, true);
                        yield "<br><span
                                            class=\"hider\">";
                        // line 1674
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 1674), 6, "", ""), "html", null, true);
                        yield "</span></td>
                                ";
                        // line 1675
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1675, $this->source); })()), "aarem", [], "any", false, false, false, 1675) == "oui")) {
                            // line 1676
                            yield "                                    <td style=\"text-align: center\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "remise", [], "any", false, false, false, 1676), "html", null, true);
                            yield "%</td>
                                ";
                        }
                        // line 1678
                        yield "                                ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1678, $this->source); })()), "aarem", [], "any", false, false, false, 1678) == "non")) {
                            // line 1679
                            yield "                                    <td style=\"text-align: right\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 1679) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 1679)), 2, ",", " "), "html", null, true);
                            yield "</td>
                                ";
                        }
                        // line 1681
                        yield "                                ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1681, $this->source); })()), "aarem", [], "any", false, false, false, 1681) != "non")) {
                            // line 1682
                            yield "                                    <td style=\"text-align: right\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 1682) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 1682)) * ((100 - CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "remise", [], "any", false, false, false, 1682)) / 100)), 2, ",", " "), "html", null, true);
                            yield "</td>
                                ";
                        }
                        // line 1684
                        yield "                            ";
                    }
                    // line 1685
                    yield "                        </tr>
                    ";
                }
                // line 1687
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['lign'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1688
            yield "
                ";
            // line 1689
            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1689, $this->source); })()), "type", [], "any", false, false, false, 1689) != "none") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1689, $this->source); })()), "type", [], "any", false, false, false, 1689) != "cps"))) {
                // line 1690
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1690, $this->source); })()), "type", [], "any", false, false, false, 1690) != "pst")) {
                    // line 1691
                    yield "                        ";
                    if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1691, $this->source); })()), "caisses", [], "any", false, false, false, 1691))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 1692
                        yield "                            ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1692, $this->source); })()), "aaref", [], "any", false, false, false, 1692) === "oui")) {
                            // line 1693
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1693, $this->source); })()), "aarem", [], "any", false, false, false, 1693) === "oui")) {
                                // line 1694
                                yield "                                    <tr>
                                        <td colSpan=\"10\" class=\"borde\" style=\"color: red\"><b>HISTORIQUE DES
                                                PAIEMENTS</b>
                                        </td>
                                    </tr>
                                    ";
                                // line 1699
                                $context["recu"] = 0;
                                // line 1700
                                yield "                                    ";
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1700, $this->source); })()), "caisses", [], "any", false, false, false, 1700));
                                foreach ($context['_seq'] as $context["_key"] => $context["caisse"]) {
                                    // line 1701
                                    yield "                                        ";
                                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "etat", [], "any", false, false, false, 1701) == "valide")) {
                                        // line 1702
                                        yield "                                            <tr>
                                                <td colSpan=\"9\">";
                                        // line 1703
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "date", [], "any", false, false, false, 1703), "d/m/y"), "html", null, true);
                                        yield " |
                                                    <span>N° Bon: ";
                                        // line 1704
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "numcaisse", [], "any", false, false, false, 1704), "html", null, true);
                                        yield "</span> |
                                                    Somme reçue
                                                </td>
                                                <td>
                                                    ";
                                        // line 1708
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "montant", [], "any", false, false, false, 1708), 2, ",", " "), "html", null, true);
                                        yield "
                                                    ";
                                        // line 1709
                                        $context["recu"] = (CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "montant", [], "any", false, false, false, 1709) + (isset($context["recu"]) || array_key_exists("recu", $context) ? $context["recu"] : (function () { throw new RuntimeError('Variable "recu" does not exist.', 1709, $this->source); })()));
                                        // line 1710
                                        yield "                                                </td>
                                            </tr>
                                        ";
                                    }
                                    // line 1713
                                    yield "                                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_key'], $context['caisse'], $context['_parent']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 1714
                                yield "                                ";
                            }
                            // line 1715
                            yield "                                ";
                            if ((($tmp =  !(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1715, $this->source); })()), "aarem", [], "any", false, false, false, 1715) === "oui")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 1716
                                yield "                                    <tr>
                                        <td colSpan=\"9\" class=\"borde\" style=\"color: red\"><b>HISTORIQUE DES PAIEMENTS</b>
                                        </td>
                                    </tr>
                                    ";
                                // line 1720
                                $context["recu"] = 0;
                                // line 1721
                                yield "                                    ";
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1721, $this->source); })()), "caisses", [], "any", false, false, false, 1721));
                                foreach ($context['_seq'] as $context["_key"] => $context["caisse"]) {
                                    // line 1722
                                    yield "                                        ";
                                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "etat", [], "any", false, false, false, 1722) == "valide")) {
                                        // line 1723
                                        yield "                                            <tr>
                                                <td colSpan=\"5\">";
                                        // line 1724
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "date", [], "any", false, false, false, 1724), "d/m/y"), "html", null, true);
                                        yield " |
                                                    <span>N° Bon: ";
                                        // line 1725
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "numcaisse", [], "any", false, false, false, 1725), "html", null, true);
                                        yield "</span> |
                                                    Somme reçue
                                                </td>
                                                <td>
                                                    ";
                                        // line 1729
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "montant", [], "any", false, false, false, 1729), 2, ",", " "), "html", null, true);
                                        yield "
                                                    ";
                                        // line 1730
                                        $context["recu"] = (CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "montant", [], "any", false, false, false, 1730) + (isset($context["recu"]) || array_key_exists("recu", $context) ? $context["recu"] : (function () { throw new RuntimeError('Variable "recu" does not exist.', 1730, $this->source); })()));
                                        // line 1731
                                        yield "                                                </td>
                                            </tr>
                                        ";
                                    }
                                    // line 1734
                                    yield "                                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_key'], $context['caisse'], $context['_parent']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 1735
                                yield "                                ";
                            }
                            // line 1736
                            yield "                            ";
                        }
                        // line 1737
                        yield "                            ";
                        if ((($tmp =  !(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1737, $this->source); })()), "aaref", [], "any", false, false, false, 1737) === "oui")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 1738
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1738, $this->source); })()), "aarem", [], "any", false, false, false, 1738) === "oui")) {
                                // line 1739
                                yield "                                    <tr>
                                        <td colSpan=\"9\" class=\"borde\" style=\"color: red\"><b>HISTORIQUE DES PAIEMENTS</b>
                                        </td>
                                    </tr>
                                    ";
                                // line 1743
                                $context["recu"] = 0;
                                // line 1744
                                yield "                                    ";
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1744, $this->source); })()), "caisses", [], "any", false, false, false, 1744));
                                foreach ($context['_seq'] as $context["_key"] => $context["caisse"]) {
                                    // line 1745
                                    yield "                                        ";
                                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "etat", [], "any", false, false, false, 1745) == "valide")) {
                                        // line 1746
                                        yield "                                            <tr>
                                                <td colSpan=\"6\">";
                                        // line 1747
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "date", [], "any", false, false, false, 1747), "d/m/y"), "html", null, true);
                                        yield " |
                                                    <span>N° Bon: ";
                                        // line 1748
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "numcaisse", [], "any", false, false, false, 1748), "html", null, true);
                                        yield "</span> |
                                                    Somme reçue
                                                </td>
                                                <td>
                                                    ";
                                        // line 1752
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "montant", [], "any", false, false, false, 1752), 2, ",", " "), "html", null, true);
                                        yield "
                                                    ";
                                        // line 1753
                                        $context["recu"] = (CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "montant", [], "any", false, false, false, 1753) + (isset($context["recu"]) || array_key_exists("recu", $context) ? $context["recu"] : (function () { throw new RuntimeError('Variable "recu" does not exist.', 1753, $this->source); })()));
                                        // line 1754
                                        yield "                                                </td>
                                            </tr>
                                        ";
                                    }
                                    // line 1757
                                    yield "                                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_key'], $context['caisse'], $context['_parent']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 1758
                                yield "                                ";
                            }
                            // line 1759
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1759, $this->source); })()), "aarem", [], "any", false, false, false, 1759) != "oui")) {
                                // line 1760
                                yield "                                    <tr>
                                        <td colSpan=\"8\" class=\"borde\" style=\"color: red\"><b>HISTORIQUE DES PAIEMENTS</b>
                                        </td>
                                    </tr>
                                    ";
                                // line 1764
                                $context["recu"] = 0;
                                // line 1765
                                yield "                                    ";
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1765, $this->source); })()), "caisses", [], "any", false, false, false, 1765));
                                foreach ($context['_seq'] as $context["_key"] => $context["caisse"]) {
                                    // line 1766
                                    yield "                                        ";
                                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "etat", [], "any", false, false, false, 1766) == "valide")) {
                                        // line 1767
                                        yield "                                            <tr>
                                                <td colSpan=\"4\">";
                                        // line 1768
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "date", [], "any", false, false, false, 1768), "d/m/y"), "html", null, true);
                                        yield " |
                                                    <span>N° Bon: ";
                                        // line 1769
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "numcaisse", [], "any", false, false, false, 1769), "html", null, true);
                                        yield "</span> |
                                                    Somme reçue
                                                </td>
                                                <td>
                                                    ";
                                        // line 1773
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "montant", [], "any", false, false, false, 1773), 2, ",", " "), "html", null, true);
                                        yield "
                                                    ";
                                        // line 1774
                                        $context["recu"] = (CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "montant", [], "any", false, false, false, 1774) + (isset($context["recu"]) || array_key_exists("recu", $context) ? $context["recu"] : (function () { throw new RuntimeError('Variable "recu" does not exist.', 1774, $this->source); })()));
                                        // line 1775
                                        yield "                                                </td>
                                            </tr>
                                        ";
                                    }
                                    // line 1778
                                    yield "                                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_key'], $context['caisse'], $context['_parent']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 1779
                                yield "                                ";
                            }
                            // line 1780
                            yield "                            ";
                        }
                        // line 1781
                        yield "                        ";
                    }
                    // line 1782
                    yield "                    ";
                }
                // line 1783
                yield "                ";
            }
            // line 1784
            yield "
            </table>
            ";
            // line 1786
            if (( !(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1786, $this->source); })()), "type", [], "any", false, false, false, 1786) === "pst") &&  !(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1786, $this->source); })()), "type", [], "any", false, false, false, 1786) === "none"))) {
                // line 1787
                yield "                ";
                if ((($tmp =  !(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1787, $this->source); })()), "type", [], "any", false, false, false, 1787) === "prepa")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 1788
                    yield "                    <table class=\"table-bordered\" style=\"float: right; width: 60% ; margin-top: 10px\">
                        <tr style=\"font-weight: 600\">
                            <td style=\"text-align: center ; background-color: #f8f9fa\"><b>SOMME PERÇUE</b></td>
                            <td style=\"text-align: center ; background-color: #f8f9fa\"><b>RESTE À PAYER</b></td>
                        </tr>
                        <tr>
                            <td style=\"text-align: center\">";
                    // line 1794
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1794, $this->source); })()), "recu", [], "any", false, false, false, 1794), 2, ",", " "), "html", null, true);
                    yield "</td>
                            <td style=\"text-align: center\">";
                    // line 1795
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1795, $this->source); })()), "reste", [], "any", false, false, false, 1795), 2, ",", " "), "html", null, true);
                    yield "</td>
                        </tr>
                    </table>
                ";
                }
                // line 1799
                yield "                <table class=\"table-bordered\" style=\"float: right; width: 60% ; margin-top: 10px\">
                    <tr style=\"font-weight: 600\">
                        <td style=\"text-align: center ; background-color: #f8f9fa\"><b>TOTAL
                                HT</b></td>
                        ";
                // line 1803
                if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1803, $this->source); })()), "aarem", [], "any", false, false, false, 1803) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1803, $this->source); })()), "type", [], "any", false, false, false, 1803) != "none"))) {
                    // line 1804
                    yield "                            <td style=\"text-align: center ; background-color: #f8f9fa\">
                                <b>REMISE</b></td>
                        ";
                }
                // line 1807
                yield "                        <td style=\"text-align: center ; background-color: #f8f9fa\">
                            <b>TVA ";
                // line 1808
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1808, $this->source); })()), "tva", [], "any", false, false, false, 1808), "html", null, true);
                yield "%</b></td>
                        <td style=\"text-align: center ; background-color: #f8f9fa\"><b>NET À
                                PAYER</b></td>
                    </tr>
                    <tr>
                        <td style=\"text-align: center\">";
                // line 1813
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1813, $this->source); })()), "totalht", [], "any", false, false, false, 1813), 2, ",", " "), "html", null, true);
                yield "</td>
                        ";
                // line 1814
                if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1814, $this->source); })()), "aarem", [], "any", false, false, false, 1814) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1814, $this->source); })()), "type", [], "any", false, false, false, 1814) != "none"))) {
                    // line 1815
                    yield "                            <td style=\"text-align: center\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1815, $this->source); })()), "vremise", [], "any", false, false, false, 1815), 2, ",", " "), "html", null, true);
                    yield "</td>
                        ";
                }
                // line 1817
                yield "                        <td style=\"text-align: center\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1817, $this->source); })()), "vtva", [], "any", false, false, false, 1817), 2, ",", " "), "html", null, true);
                yield "</td>
                        <td style=\"text-align: center\">";
                // line 1818
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1818, $this->source); })()), "totalttc", [], "any", false, false, false, 1818), 2, ",", " "), "html", null, true);
                yield "</td>
                    </tr>
                </table>
            ";
            }
            // line 1822
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1822, $this->source); })()), "type", [], "any", false, false, false, 1822) == "pst")) {
                // line 1823
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1823, $this->source); })()), "type", [], "any", false, false, false, 1823) == "none")) {
                    // line 1824
                    yield "                    <table class=\"table-bordered\" style=\"float: left; width: 60% ; margin-top: 10px\">
                        <tr style=\"font-weight: 600\">
                            <td style=\"text-align: center ; background-color: #f8f9fa\"><b>TOTAL
                                    HT</b></td>
                            ";
                    // line 1828
                    if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1828, $this->source); })()), "aarem", [], "any", false, false, false, 1828) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1828, $this->source); })()), "type", [], "any", false, false, false, 1828) != "none"))) {
                        // line 1829
                        yield "                                <td style=\"text-align: center ; background-color: #f8f9fa\">
                                    <b>REMISE</b></td>
                            ";
                    }
                    // line 1832
                    yield "                            <td style=\"text-align: center ; background-color: #f8f9fa\">
                                <b>TVA ";
                    // line 1833
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1833, $this->source); })()), "tva", [], "any", false, false, false, 1833), "html", null, true);
                    yield "%</b></td>
                            <td style=\"text-align: center ; background-color: #f8f9fa\"><b>NET À
                                    PAYER</b></td>
                        </tr>
                        <tr>
                            <td style=\"text-align: center\">";
                    // line 1838
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1838, $this->source); })()), "totalht", [], "any", false, false, false, 1838), 2, ",", " "), "html", null, true);
                    yield "</td>
                            ";
                    // line 1839
                    if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1839, $this->source); })()), "aarem", [], "any", false, false, false, 1839) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1839, $this->source); })()), "type", [], "any", false, false, false, 1839) != "none"))) {
                        // line 1840
                        yield "                                <td style=\"text-align: center\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1840, $this->source); })()), "vremise", [], "any", false, false, false, 1840), 2, ",", " "), "html", null, true);
                        yield "</td>
                            ";
                    }
                    // line 1842
                    yield "                            <td style=\"text-align: center\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1842, $this->source); })()), "vtva", [], "any", false, false, false, 1842), 2, ",", " "), "html", null, true);
                    yield "</td>
                            <td style=\"text-align: center\">";
                    // line 1843
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1843, $this->source); })()), "totalttc", [], "any", false, false, false, 1843), 2, ",", " "), "html", null, true);
                    yield "</td>
                        </tr>
                    </table>
                ";
                }
                // line 1847
                yield "                <table class=\"table-bordered\" style=\"float: left; width: 60% ; margin-top: 10px\">
                    <tr style=\"font-weight: 600\">
                        <td style=\"text-align: center ; background-color: #f8f9fa\"><b>TOTAL
                                HT</b></td>
                        ";
                // line 1851
                if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1851, $this->source); })()), "aarem", [], "any", false, false, false, 1851) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1851, $this->source); })()), "type", [], "any", false, false, false, 1851) != "none"))) {
                    // line 1852
                    yield "                            <td style=\"text-align: center ; background-color: #f8f9fa\">
                                <b>REMISE</b></td>
                        ";
                }
                // line 1855
                yield "                        <td style=\"text-align: center ; background-color: #f8f9fa\">
                            <b>TVA ";
                // line 1856
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1856, $this->source); })()), "tva", [], "any", false, false, false, 1856), "html", null, true);
                yield "%</b></td>
                        <td style=\"text-align: center ; background-color: #f8f9fa\"><b>NET À
                                PAYER</b></td>
                    </tr>
                    <tr>
                        <td style=\"text-align: center\">";
                // line 1861
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1861, $this->source); })()), "totalht", [], "any", false, false, false, 1861), 2, ",", " "), "html", null, true);
                yield "</td>
                        ";
                // line 1862
                if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1862, $this->source); })()), "aarem", [], "any", false, false, false, 1862) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1862, $this->source); })()), "type", [], "any", false, false, false, 1862) != "none"))) {
                    // line 1863
                    yield "                            <td style=\"text-align: center\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1863, $this->source); })()), "vremise", [], "any", false, false, false, 1863), 2, ",", " "), "html", null, true);
                    yield "</td>
                        ";
                }
                // line 1865
                yield "                        <td style=\"text-align: center\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1865, $this->source); })()), "vtva", [], "any", false, false, false, 1865), 2, ",", " "), "html", null, true);
                yield "</td>
                        <td style=\"text-align: center\">";
                // line 1866
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1866, $this->source); })()), "totalttc", [], "any", false, false, false, 1866), 2, ",", " "), "html", null, true);
                yield "</td>
                    </tr>
                </table>
                <table class=\"table-bordered\" style=\"float: right; width: 38% ; margin-top: 10px\">
                    <tr style=\"font-weight: 600\">
                        <td style=\"text-align: center ;  background-color: #f8f9fa; font-weight: 700\">SOMME
                            RECUE
                        </td>
                        <td style=\"text-align: center ; background-color: #f8f9fa; font-weight: 700\">RESTE À
                            PAYER
                        </td>
                    </tr>
                    <tr>
                        <td style=\"text-align: center\">";
                // line 1879
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1879, $this->source); })()), "recu", [], "any", false, false, false, 1879), 2, ",", " "), "html", null, true);
                yield "</td>
                        <td style=\"text-align: center\">";
                // line 1880
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1880, $this->source); })()), "reste", [], "any", false, false, false, 1880), 2, ",", " "), "html", null, true);
                yield "</td>
                    </tr>
                </table>
            ";
            }
            // line 1884
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1884, $this->source); })()), "type", [], "any", false, false, false, 1884) == "none")) {
                // line 1885
                yield "                <table style=\"width: 100%; margin-Top: 5px;\">
                    <tr>
                        <td style=\"text-align: left ; text-decoration: underline; border: none !important;\">VISA
                            CHEF CHANTIER
                        </td>
                        <td style=\"text-align: center ; text-decoration: underline; border: none !important;\">VISA
                            CHEF DÉPÔT
                        </td>
                        <td style=\"text-align: right ; text-decoration: underline; border: none !important;\">VISA
                            DIRECTION
                        </td>
                    </tr>
                </table>
            ";
            }
            // line 1899
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1899, $this->source); })()), "type", [], "any", false, false, false, 1899) != "none")) {
                // line 1900
                yield "                <p style=\"font-weight: 700; color: #111010; text-align: left\">
                    Arrêté le présent bon à la somme de: <br><span
                            style=\"color: dimgray\"> ";
                // line 1902
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Craue\TwigExtensionsBundle\Twig\Extension\FormatNumberExtension']->formatSpelledOutNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1902, $this->source); })()), "totalttc", [], "any", false, false, false, 1902)), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1902, $this->source); })()), "monnaie", [], "any", false, false, false, 1902), "code", [], "any", false, false, false, 1902), "html", null, true);
                yield "</span>
                </p><br>
                <p style=\"float: right\"><u>SIGNATURE AUTORISÉE</u></p><br><br><br>
            ";
            }
            // line 1906
            yield "            ";
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1906, $this->source); })()), "conditions", [], "any", false, false, false, 1906))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1907
                yield "                <p style=\"float: left; color: #4e73df;\"><u>INFORMATIONS ADDITIONNELLES</u></p>
                <p style=\"clear: both\"></p>
                <p style=\"color: #000000;\">";
                // line 1909
                yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1909, $this->source); })()), "conditions", [], "any", false, false, false, 1909);
                yield "</p>
            ";
            }
            // line 1911
            yield "

    </div>
";
        }
        // line 1915
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 1915, $this->source); })()) == "facture")) {
            // line 1916
            yield "    <div class=\"bood\">
        <div>
            <div>
                <table style=\"margin-top:";
            // line 1919
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1919, $this->source); })()), "teteDB", [], "any", false, false, false, 1919) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1919, $this->source); })()), "headerHeight", [], "any", false, false, false, 1919)), "html", null, true);
            yield "cm; float: right; width: 100%\">
                    <tr>
                        <td style=\"border: none !important; padding-left: 500px; text-align: center\">
                            <b style=\"font-size: 14px; text-align: center\">";
            // line 1922
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1922, $this->source); })()), "client", [], "any", false, false, false, 1922), "nomclient", [], "any", false, false, false, 1922)), "html", null, true);
            yield "</b><br>

                            ";
            // line 1924
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1924, $this->source); })()), "client", [], "any", false, false, false, 1924), "contribuable", [], "any", false, false, false, 1924))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1925
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1925, $this->source); })()), "client", [], "any", false, false, false, 1925), "contribuable", [], "any", false, false, false, 1925), "html", null, true);
                yield "<br>
                            ";
            }
            // line 1927
            yield "
                            ";
            // line 1928
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1928, $this->source); })()), "client", [], "any", false, false, false, 1928), "adresse", [], "any", false, false, false, 1928))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1929
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1929, $this->source); })()), "client", [], "any", false, false, false, 1929), "adresse", [], "any", false, false, false, 1929), "html", null, true);
                yield "<br>
                            ";
            }
            // line 1931
            yield "
                            ";
            // line 1932
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1932, $this->source); })()), "client", [], "any", false, false, false, 1932), "mail", [], "any", false, false, false, 1932))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1933
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1933, $this->source); })()), "client", [], "any", false, false, false, 1933), "mail", [], "any", false, false, false, 1933), "html", null, true);
                yield "<br>
                            ";
            }
            // line 1935
            yield "
                        </td>
                    </tr>
                </table>
                <p style=\"clear: both\"></p>
                <div>
                    <table style=\"width:80%;\">
                        <tr>
                            <td class=\"bordz\"><b><u>DATE:</u></b> ";
            // line 1943
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 1943, $this->source); })()), "date", [], "any", false, false, false, 1943), "d/m/y"), "html", null, true);
            yield "</td>
                        </tr>
                        <tr>
                            <td class=\"bordz\"><b><u>RÉFÉRENCE:</u></b><br/>
                                FACTURE DE SOLDE<br/>
                                ";
            // line 1948
            yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 1948, $this->source); })()), "factreference", [], "any", false, false, false, 1948));
            yield " selon
                                <span style=\"font-weight: bold\">Devis N° ";
            // line 1949
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1949, $this->source); })()), "iddevis", [], "any", false, false, false, 1949), "html", null, true);
            yield "</span></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div>
                <table style=\"width: 100%;\">
                    <tr class=\"printer\">
                        ";
            // line 1957
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1957, $this->source); })()), "aaref", [], "any", false, false, false, 1957) == "oui")) {
                // line 1958
                yield "                            <th style=\"text-align: center\">RÉF</th>
                        ";
            }
            // line 1960
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1960, $this->source); })()), "modele", [], "any", false, false, false, 1960) == 2)) {
                // line 1961
                yield "                            <th style=\"max-width:500px !important; min-width: 250px !important; text-align: left\">
                                DESCRIPTION
                            </th>
                        ";
            } else {
                // line 1965
                yield "                            <th style=\"max-width:500px !important; min-width: 250px !important; text-align: left\">
                                DÉSIGNATION
                            </th>
                        ";
            }
            // line 1969
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1969, $this->source); })()), "zone", [], "any", false, false, false, 1969) == "oui")) {
                // line 1970
                yield "                            <th style=\"text-align: center\">SECTION</th>
                        ";
            }
            // line 1972
            yield "                        <th style=\"text-align: center\">UNITÉ</th>
                        <th style=\"text-align: center\">QTÉ</th>
                        <th style=\"text-align: center\">PRIX&nbsp;U.</th>
                        ";
            // line 1975
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1975, $this->source); })()), "aarem", [], "any", false, false, false, 1975) == "oui")) {
                // line 1976
                yield "                            <th style=\" text-align: center\">REMISE</th>
                        ";
            }
            // line 1978
            yield "                        <th style=\"text-align: center\">MONTANT&nbsp;HT</th>
                    </tr>


                    ";
            // line 1982
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["listGroup"]) || array_key_exists("listGroup", $context) ? $context["listGroup"] : (function () { throw new RuntimeError('Variable "listGroup" does not exist.', 1982, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 1983
                yield "                        <tr class=\"togo\">
                            ";
                // line 1984
                if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1984, $this->source); })()), "zone", [], "any", false, false, false, 1984) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1984, $this->source); })()), "aarem", [], "any", false, false, false, 1984) == "oui"))) {
                    // line 1985
                    yield "                                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1985, $this->source); })()), "aaref", [], "any", false, false, false, 1985) == "oui")) {
                        // line 1986
                        yield "                                    <td class=\"text-center\"><b>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "reference", [], "any", false, false, false, 1986), "html", null, true);
                        yield "</b></td>
                                ";
                    }
                    // line 1988
                    yield "                                <td COLSPAN=\"7\"><b>";
                    yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "groupe", [], "any", false, false, false, 1988));
                    yield "</b></td>

                            ";
                } elseif (((CoreExtension::getAttribute($this->env, $this->source,                 // line 1990
(isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1990, $this->source); })()), "zone", [], "any", false, false, false, 1990) == "non") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1990, $this->source); })()), "aarem", [], "any", false, false, false, 1990) == "non"))) {
                    // line 1991
                    yield "                                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1991, $this->source); })()), "aaref", [], "any", false, false, false, 1991) == "oui")) {
                        // line 1992
                        yield "                                    <td class=\"text-center\"><b>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "reference", [], "any", false, false, false, 1992), "html", null, true);
                        yield "</b></td>
                                ";
                    }
                    // line 1994
                    yield "                                <td colspan=\"5\"><b>";
                    yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "groupe", [], "any", false, false, false, 1994));
                    yield "</b></td>

                            ";
                } elseif (((CoreExtension::getAttribute($this->env, $this->source,                 // line 1996
(isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1996, $this->source); })()), "zone", [], "any", false, false, false, 1996) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1996, $this->source); })()), "aarem", [], "any", false, false, false, 1996) == "non"))) {
                    // line 1997
                    yield "                                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1997, $this->source); })()), "aaref", [], "any", false, false, false, 1997) == "oui")) {
                        // line 1998
                        yield "                                    <td class=\"text-center\"><b>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "reference", [], "any", false, false, false, 1998), "html", null, true);
                        yield "</b></td>
                                ";
                    }
                    // line 2000
                    yield "                                <td colspan=\"6\"><b>";
                    yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "groupe", [], "any", false, false, false, 2000));
                    yield "</b></td>

                            ";
                } elseif (((CoreExtension::getAttribute($this->env, $this->source,                 // line 2002
(isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2002, $this->source); })()), "aarem", [], "any", false, false, false, 2002) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2002, $this->source); })()), "zone", [], "any", false, false, false, 2002) == "non"))) {
                    // line 2003
                    yield "                                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2003, $this->source); })()), "aaref", [], "any", false, false, false, 2003) == "oui")) {
                        // line 2004
                        yield "                                    <td class=\"text-center\"><b>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "reference", [], "any", false, false, false, 2004), "html", null, true);
                        yield "</b></td>
                                ";
                    }
                    // line 2006
                    yield "                                <td colspan=\"6\"><b>";
                    yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "groupe", [], "any", false, false, false, 2006));
                    yield "</b></td>
                            ";
                }
                // line 2008
                yield "                        </tr>
                        ";
                // line 2009
                $context["st"] = 0;
                // line 2010
                yield "
                        ";
                // line 2011
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "lignes", [], "any", false, false, false, 2011));
                foreach ($context['_seq'] as $context["_key"] => $context["lign"]) {
                    // line 2012
                    yield "                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "devis", [], "any", false, false, false, 2012) != null)) {
                        // line 2013
                        yield "                                <tr>
                                    ";
                        // line 2014
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2014, $this->source); })()), "aaref", [], "any", false, false, false, 2014) == "oui")) {
                            // line 2015
                            yield "                                        <td style=\"text-align: center\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "reference", [], "any", false, false, false, 2015), "html", null, true);
                            yield "</td>
                                    ";
                        }
                        // line 2017
                        yield "                                    <td align=\"left\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "designation", [], "any", false, false, false, 2017);
                        yield "</td>
                                    ";
                        // line 2018
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2018, $this->source); })()), "zone", [], "any", false, false, false, 2018) == "oui")) {
                            // line 2019
                            yield "                                        <td style=\"text-align: center\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "zone", [], "any", false, false, false, 2019), "html", null, true);
                            yield "</td>
                                    ";
                        }
                        // line 2021
                        yield "                                    <td style=\"text-align: center\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "unite", [], "any", false, false, false, 2021), "html", null, true);
                        yield "</td>
                                    <td style=\"text-align: center\">";
                        // line 2022
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 2022), 2, ",", " "), "html", null, true);
                        yield "
                                        <br><span
                                                class=\"hider\">";
                        // line 2024
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 2024), 6, ",", "."), "html", null, true);
                        yield "</span></td>
                                    <td style=\"text-align: right\">";
                        // line 2025
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 2025), 2, ",", " "), "html", null, true);
                        yield "<br><span
                                                class=\"hider\">";
                        // line 2026
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 2026), 5, ",", "."), "html", null, true);
                        yield "</span></td>
                                    ";
                        // line 2027
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2027, $this->source); })()), "aarem", [], "any", false, false, false, 2027) == "oui")) {
                            // line 2028
                            yield "                                        <td style=\"text-align: center\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "remise", [], "any", false, false, false, 2028), "html", null, true);
                            yield "%</td>
                                    ";
                        }
                        // line 2030
                        yield "                                    ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2030, $this->source); })()), "aarem", [], "any", false, false, false, 2030) == "non")) {
                            // line 2031
                            yield "                                        <td style=\"text-align: right\">";
                            $context["st"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 2031) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 2031)) + (isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 2031, $this->source); })()));
                            yield " ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 2031) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 2031)), 2, ",", " "), "html", null, true);
                            yield "
                                            <br><span
                                                    class=\"hider\">";
                            // line 2033
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 2033) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 2033)), 4, ",", "."), "html", null, true);
                            yield "</span>
                                        </td>
                                    ";
                        } else {
                            // line 2036
                            yield "                                        <td style=\"text-align: right\">";
                            $context["st"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 2036) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 2036)) * ((100 - CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "remise", [], "any", false, false, false, 2036)) / 100)) + (isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 2036, $this->source); })()));
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 2036) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 2036)) * ((100 - CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "remise", [], "any", false, false, false, 2036)) / 100)), 2, ",", " "), "html", null, true);
                            yield "</td>
                                    ";
                        }
                        // line 2038
                        yield "                                    </td>
                                </tr>
                            ";
                    }
                    // line 2041
                    yield "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['lign'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 2042
                yield "                        <tr class=\"togo\">
                            ";
                // line 2043
                if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2043, $this->source); })()), "zone", [], "any", false, false, false, 2043) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2043, $this->source); })()), "aarem", [], "any", false, false, false, 2043) == "oui"))) {
                    // line 2044
                    yield "                                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2044, $this->source); })()), "aaref", [], "any", false, false, false, 2044) == "oui")) {
                        // line 2045
                        yield "                                    <td COLSPAN=\"8\" align=\"right\">
                                        <b>SOUS-TOTAL: ";
                        // line 2046
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 2046, $this->source); })()), 2, ",", " "), "html", null, true);
                        yield "</b></td>
                                ";
                    } else {
                        // line 2048
                        yield "                                    <td COLSPAN=\"7\" align=\"right\">
                                        <b>SOUS-TOTAL: ";
                        // line 2049
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 2049, $this->source); })()), 2, ",", " "), "html", null, true);
                        yield "</b></td>
                                ";
                    }
                    // line 2051
                    yield "                            ";
                } elseif (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2051, $this->source); })()), "zone", [], "any", false, false, false, 2051) == "non") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2051, $this->source); })()), "aarem", [], "any", false, false, false, 2051) == "non"))) {
                    // line 2052
                    yield "                                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2052, $this->source); })()), "aaref", [], "any", false, false, false, 2052) == "oui")) {
                        // line 2053
                        yield "                                    <td COLSPAN=\"6\" align=\"right\">
                                        <b>SOUS-TOTAL: ";
                        // line 2054
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 2054, $this->source); })()), 2, ",", " "), "html", null, true);
                        yield "</b></td>
                                ";
                    } else {
                        // line 2056
                        yield "                                    <td COLSPAN=\"5\" align=\"right\">
                                        <b>SOUS-TOTAL: ";
                        // line 2057
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 2057, $this->source); })()), 2, ",", " "), "html", null, true);
                        yield "</b></td>
                                ";
                    }
                    // line 2059
                    yield "
                            ";
                } elseif (((CoreExtension::getAttribute($this->env, $this->source,                 // line 2060
(isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2060, $this->source); })()), "zone", [], "any", false, false, false, 2060) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2060, $this->source); })()), "aarem", [], "any", false, false, false, 2060) == "non"))) {
                    // line 2061
                    yield "                                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2061, $this->source); })()), "aaref", [], "any", false, false, false, 2061) == "oui")) {
                        // line 2062
                        yield "                                    <td COLSPAN=\"7\" align=\"right\">
                                        <b>SOUS-TOTAL: ";
                        // line 2063
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 2063, $this->source); })()), 2, ",", " "), "html", null, true);
                        yield "</b></td>
                                ";
                    } else {
                        // line 2065
                        yield "                                    <td COLSPAN=\"6\" align=\"right\">
                                        <b>SOUS-TOTAL: ";
                        // line 2066
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 2066, $this->source); })()), 2, ",", " "), "html", null, true);
                        yield "</b></td>
                                ";
                    }
                    // line 2068
                    yield "
                            ";
                } elseif (((CoreExtension::getAttribute($this->env, $this->source,                 // line 2069
(isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2069, $this->source); })()), "aarem", [], "any", false, false, false, 2069) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2069, $this->source); })()), "zone", [], "any", false, false, false, 2069) == "non"))) {
                    // line 2070
                    yield "                                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2070, $this->source); })()), "aaref", [], "any", false, false, false, 2070) == "oui")) {
                        // line 2071
                        yield "                                    <td COLSPAN=\"7\" align=\"right\">
                                        <b>SOUS-TOTAL: ";
                        // line 2072
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 2072, $this->source); })()), 2, ",", " "), "html", null, true);
                        yield "</b></td>
                                ";
                    } else {
                        // line 2074
                        yield "                                    <td COLSPAN=\"6\" align=\"right\">
                                        <b>SOUS-TOTAL: ";
                        // line 2075
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 2075, $this->source); })()), 2, ",", " "), "html", null, true);
                        yield "</b></td>
                                ";
                    }
                    // line 2077
                    yield "                            ";
                }
                // line 2078
                yield "
                        </tr>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2082
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["lignes"]) || array_key_exists("lignes", $context) ? $context["lignes"] : (function () { throw new RuntimeError('Variable "lignes" does not exist.', 2082, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["lign"]) {
                // line 2083
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "groupe", [], "any", false, false, false, 2083) == null)) {
                    // line 2084
                    yield "                            <tr>
                                ";
                    // line 2085
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2085, $this->source); })()), "aaref", [], "any", false, false, false, 2085) == "oui")) {
                        // line 2086
                        yield "                                    <td style=\"text-align: center\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "reference", [], "any", false, false, false, 2086), "html", null, true);
                        yield "</td>
                                ";
                    }
                    // line 2088
                    yield "                                <td>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "designation", [], "any", false, false, false, 2088);
                    yield "</td>
                                ";
                    // line 2089
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2089, $this->source); })()), "zone", [], "any", false, false, false, 2089) == "oui")) {
                        // line 2090
                        yield "                                    <td style=\"text-align: center\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "zone", [], "any", false, false, false, 2090), "html", null, true);
                        yield "</td>
                                ";
                    }
                    // line 2092
                    yield "                                <td style=\"text-align: center\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "unite", [], "any", false, false, false, 2092), "html", null, true);
                    yield "</td>
                                <td style=\"text-align: center\">";
                    // line 2093
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 2093), 2, ",", " "), "html", null, true);
                    yield "<br><span
                                            class=\"hider\">";
                    // line 2094
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 2094), 6, ",", " "), "html", null, true);
                    yield "</span></td>
                                <td style=\"text-align: right\">";
                    // line 2095
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 2095), 2, ",", " "), "html", null, true);
                    yield "<br><span
                                            class=\"hider\">";
                    // line 2096
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 2096), 4, ",", "."), "html", null, true);
                    yield "</span></td>
                                ";
                    // line 2097
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2097, $this->source); })()), "aarem", [], "any", false, false, false, 2097) == "oui")) {
                        // line 2098
                        yield "                                    <td style=\"text-align: center\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "remise", [], "any", false, false, false, 2098), "html", null, true);
                        yield "%</td>
                                ";
                    }
                    // line 2100
                    yield "                                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2100, $this->source); })()), "aarem", [], "any", false, false, false, 2100) == "non")) {
                        // line 2101
                        yield "                                    <td style=\"text-align: right\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 2101) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 2101)), 2, ",", " "), "html", null, true);
                        yield "
                                        <br><span
                                                class=\"hider\">";
                        // line 2103
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 2103) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 2103)), 4, ",", "."), "html", null, true);
                        yield "</span>
                                    </td>
                                ";
                    }
                    // line 2106
                    yield "                                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2106, $this->source); })()), "aarem", [], "any", false, false, false, 2106) != "non")) {
                        // line 2107
                        yield "                                    <td style=\"text-align: right\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 2107) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 2107)) * ((100 - CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "remise", [], "any", false, false, false, 2107)) / 100)), 2, ",", " "), "html", null, true);
                        yield "</td>
                                ";
                    }
                    // line 2109
                    yield "                            </tr>
                        ";
                }
                // line 2111
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['lign'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2112
            yield "
                    ";
            // line 2113
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2113, $this->source); })()), "aarem", [], "any", false, false, false, 2113) == "oui")) {
                // line 2114
                yield "                        <tr>
                            ";
                // line 2115
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2115, $this->source); })()), "aaref", [], "any", false, false, false, 2115) == "oui")) {
                    // line 2116
                    yield "                                <td class=\"bord\"></td>
                            ";
                }
                // line 2118
                yield "                            <td class=\"bord\"></td>
                            ";
                // line 2119
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2119, $this->source); })()), "zone", [], "any", false, false, false, 2119) == "oui")) {
                    // line 2120
                    yield "                                <td class=\"bord\"></td>
                            ";
                }
                // line 2122
                yield "                            <td class=\"bord\"></td>
                            ";
                // line 2123
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2123, $this->source); })()), "aarem", [], "any", false, false, false, 2123) == "oui")) {
                    // line 2124
                    yield "                                <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>REMISE</b></td>
                            ";
                } else {
                    // line 2126
                    yield "                                <td class=\"bord\" colspan=\"2\" style=\"text-align: right;\"><b>REMISE</b></td>
                            ";
                }
                // line 2128
                yield "                            <td align=\"right\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2128, $this->source); })()), "vremise", [], "any", false, false, false, 2128), 2, ",", " "), "html", null, true);
                yield "</td>
                        </tr>
                    ";
            }
            // line 2131
            yield "                    <tr>
                        ";
            // line 2132
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2132, $this->source); })()), "aaref", [], "any", false, false, false, 2132) == "oui")) {
                // line 2133
                yield "                            <td class=\"bord\"></td>
                        ";
            }
            // line 2135
            yield "                        <td class=\"bord\"></td>
                        ";
            // line 2136
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2136, $this->source); })()), "zone", [], "any", false, false, false, 2136) == "oui")) {
                // line 2137
                yield "                            <td class=\"bord\"></td>
                        ";
            }
            // line 2139
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2139, $this->source); })()), "aarem", [], "any", false, false, false, 2139) == "oui")) {
                // line 2140
                yield "                            <td colspan=\"4\" class=\"bord\" style=\"text-align: right;\"><b>DEVIS TOTAL HT</b></td>
                        ";
            } else {
                // line 2142
                yield "                            <td class=\"bord\" colspan=\"3\" style=\"text-align: right;\"><b>DEVIS TOTAL HT</b></td>
                        ";
            }
            // line 2144
            yield "                        <td align=\"right\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2144, $this->source); })()), "totalht", [], "any", false, false, false, 2144), 2, ",", " "), "html", null, true);
            yield "</td>
                    </tr>

                    <tr>
                        ";
            // line 2148
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2148, $this->source); })()), "aaref", [], "any", false, false, false, 2148) == "oui")) {
                // line 2149
                yield "                            <td class=\"bord\"></td>
                        ";
            }
            // line 2151
            yield "                        <td class=\"bord\"></td>
                        ";
            // line 2152
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2152, $this->source); })()), "zone", [], "any", false, false, false, 2152) == "oui")) {
                // line 2153
                yield "                            <td class=\"bord\"></td>
                        ";
            }
            // line 2155
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2155, $this->source); })()), "aarem", [], "any", false, false, false, 2155) == "oui")) {
                // line 2156
                yield "                            <td colspan=\"4\" class=\"bord\" style=\"text-align: right;\"><b>DÉDUCTION DES ACOMPTES</b></td>
                        ";
            } else {
                // line 2158
                yield "                            <td class=\"bord\" colspan=\"3\" style=\"text-align: right;\"><b>DÉDUCTION DES ACOMPTES</b></td>
                        ";
            }
            // line 2160
            yield "                        <td align=\"right\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalacomptes"]) || array_key_exists("totalacomptes", $context) ? $context["totalacomptes"] : (function () { throw new RuntimeError('Variable "totalacomptes" does not exist.', 2160, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</td>
                    </tr>

                    <tr>
                        ";
            // line 2164
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2164, $this->source); })()), "aaref", [], "any", false, false, false, 2164) == "oui")) {
                // line 2165
                yield "                            <td class=\"bord\"></td>
                        ";
            }
            // line 2167
            yield "                        <td class=\"bord\"></td>
                        ";
            // line 2168
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2168, $this->source); })()), "zone", [], "any", false, false, false, 2168) == "oui")) {
                // line 2169
                yield "                            <td class=\"bord\"></td>
                        ";
            }
            // line 2171
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2171, $this->source); })()), "aarem", [], "any", false, false, false, 2171) == "oui")) {
                // line 2172
                yield "                            <td colspan=\"4\" class=\"bord\" style=\"text-align: right;\"><b>DÉDUCTION DES DÉCOMPTES</b></td>
                        ";
            } else {
                // line 2174
                yield "                            <td class=\"bord\" colspan=\"3\" style=\"text-align: right;\"><b>DÉDUCTION DES DÉCOMPTES</b></td>
                        ";
            }
            // line 2176
            yield "                        <td align=\"right\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totaldecomptes"]) || array_key_exists("totaldecomptes", $context) ? $context["totaldecomptes"] : (function () { throw new RuntimeError('Variable "totaldecomptes" does not exist.', 2176, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</td>
                    </tr>

                    <tr>
                        ";
            // line 2180
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2180, $this->source); })()), "aaref", [], "any", false, false, false, 2180) == "oui")) {
                // line 2181
                yield "                            <td class=\"bord\"></td>
                        ";
            }
            // line 2183
            yield "
                        ";
            // line 2184
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2184, $this->source); })()), "zone", [], "any", false, false, false, 2184) == "oui")) {
                // line 2185
                yield "                            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2185, $this->source); })()), "aarem", [], "any", false, false, false, 2185) == "oui")) {
                    // line 2186
                    yield "                                <td colspan=\"6\" class=\"bord\" style=\"text-align: right;\"><b>ADDITION DES
                                        RETENUES(FINITION-GARANTIE-PRORATA-TRC)</b></td>
                            ";
                } else {
                    // line 2189
                    yield "                                <td class=\"bord\" colspan=\"5\" style=\"text-align: right;\"><b>ADDITION DES
                                        RETENUES(FINITION-GARANTIE-PRORATA-TRC)</b></td>
                            ";
                }
                // line 2192
                yield "                        ";
            }
            // line 2193
            yield "
                        ";
            // line 2194
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2194, $this->source); })()), "zone", [], "any", false, false, false, 2194) != "oui")) {
                // line 2195
                yield "                            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2195, $this->source); })()), "aarem", [], "any", false, false, false, 2195) == "oui")) {
                    // line 2196
                    yield "                                <td colspan=\"5\" class=\"bord\" style=\"text-align: right;\"><b>ADDITION DES
                                        RETENUES(FINITION-GARANTIE-PRORATA-TRC)</b></td>
                            ";
                } else {
                    // line 2199
                    yield "                                <td class=\"bord\" colspan=\"4\" style=\"text-align: right;\"><b>ADDITION DES
                                        RETENUES(FINITION-GARANTIE-PRORATA-TRC)</b></td>
                            ";
                }
                // line 2202
                yield "                        ";
            }
            // line 2203
            yield "
                        <td align=\"right\">";
            // line 2204
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totaldecomptes"]) || array_key_exists("totaldecomptes", $context) ? $context["totaldecomptes"] : (function () { throw new RuntimeError('Variable "totaldecomptes" does not exist.', 2204, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</td>
                    </tr>

                    <tr>
                        ";
            // line 2208
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2208, $this->source); })()), "aaref", [], "any", false, false, false, 2208) == "oui")) {
                // line 2209
                yield "                            <td class=\"bord\"></td>
                        ";
            }
            // line 2211
            yield "                        <td class=\"bord\"></td>
                        ";
            // line 2212
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2212, $this->source); })()), "zone", [], "any", false, false, false, 2212) == "oui")) {
                // line 2213
                yield "                            <td class=\"bord\"></td>
                        ";
            }
            // line 2215
            yield "                        <td class=\"bord\"></td>
                        ";
            // line 2216
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2216, $this->source); })()), "aarem", [], "any", false, false, false, 2216) == "oui")) {
                // line 2217
                yield "                            <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT</b></td>
                        ";
            } else {
                // line 2219
                yield "                            <td class=\"bord\" colspan=\"2\" style=\"text-align: right;\"><b>TOTAL HT</b></td>
                        ";
            }
            // line 2221
            yield "                        <td align=\"right\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalhtsolde"]) || array_key_exists("totalhtsolde", $context) ? $context["totalhtsolde"] : (function () { throw new RuntimeError('Variable "totalhtsolde" does not exist.', 2221, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</td>
                    </tr>

                    ";
            // line 2224
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2224, $this->source); })()), "abasetva", [], "any", false, false, false, 2224) == "oui")) {
                // line 2225
                yield "                        <tr>
                            ";
                // line 2226
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2226, $this->source); })()), "aaref", [], "any", false, false, false, 2226) == "oui")) {
                    // line 2227
                    yield "                                <td class=\"bord\"></td>
                            ";
                }
                // line 2229
                yield "                            <td class=\"bord\"></td>
                            ";
                // line 2230
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2230, $this->source); })()), "zone", [], "any", false, false, false, 2230) == "oui")) {
                    // line 2231
                    yield "                                <td class=\"bord\"></td>
                            ";
                }
                // line 2233
                yield "                            <td class=\"bord\"></td>
                            ";
                // line 2234
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2234, $this->source); })()), "aarem", [], "any", false, false, false, 2234) == "oui")) {
                    // line 2235
                    yield "                                <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>BASE
                                        TVA";
                    // line 2236
                    if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2236, $this->source); })()), "code", [], "any", false, false, false, 2236))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "(";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2236, $this->source); })()), "code", [], "any", false, false, false, 2236), "html", null, true);
                        yield ")";
                    }
                    yield "</b></td>
                            ";
                } else {
                    // line 2238
                    yield "                                <td class=\"bord\" colspan=\"2\" style=\"text-align: right;\"><b>BASE
                                        TVA";
                    // line 2239
                    if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2239, $this->source); })()), "code", [], "any", false, false, false, 2239))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "(";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2239, $this->source); })()), "code", [], "any", false, false, false, 2239), "html", null, true);
                        yield ")";
                    }
                    yield "</b></td>
                            ";
                }
                // line 2241
                yield "                            <td align=\"right\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2241, $this->source); })()), "basetva", [], "any", false, false, false, 2241), 2, ",", " "), "html", null, true);
                yield "</td>
                        </tr>
                    ";
            }
            // line 2244
            yield "                    <tr>
                        ";
            // line 2245
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2245, $this->source); })()), "aaref", [], "any", false, false, false, 2245) == "oui")) {
                // line 2246
                yield "                            <td class=\"bord\"></td>
                        ";
            }
            // line 2248
            yield "                        <td class=\"bord\"></td>
                        ";
            // line 2249
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2249, $this->source); })()), "zone", [], "any", false, false, false, 2249) == "oui")) {
                // line 2250
                yield "                            <td class=\"bord\"></td>
                        ";
            }
            // line 2252
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2252, $this->source); })()), "aarem", [], "any", false, false, false, 2252) == "oui")) {
                // line 2253
                yield "                            <td colspan=\"4\" class=\"bord\" style=\"text-align: right;\"><b>TVA ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2253, $this->source); })()), "tva", [], "any", false, false, false, 2253), "html", null, true);
                yield "
                                    % ";
                // line 2254
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2254, $this->source); })()), "ptva", [], "any", false, false, false, 2254) == "non")) {
                    yield "(non facturée)";
                }
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2254, $this->source); })()), "ptva", [], "any", false, false, false, 2254) == "susp")) {
                    yield "(suspendue)";
                }
                yield "</b></td>
                        ";
            } else {
                // line 2256
                yield "                            <td class=\"bord\" colspan=\"3\" style=\"text-align: right;\"><b>TVA ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2256, $this->source); })()), "tva", [], "any", false, false, false, 2256), "html", null, true);
                yield "
                                    % ";
                // line 2257
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2257, $this->source); })()), "ptva", [], "any", false, false, false, 2257) == "non")) {
                    yield "(non facturée)";
                }
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2257, $this->source); })()), "ptva", [], "any", false, false, false, 2257) == "non")) {
                    yield "(suspendue)";
                }
                yield "</b></td>
                        ";
            }
            // line 2259
            yield "                        <td align=\"right\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totaltva"]) || array_key_exists("totaltva", $context) ? $context["totaltva"] : (function () { throw new RuntimeError('Variable "totaltva" does not exist.', 2259, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</td>
                    </tr>

                    <tr>
                        ";
            // line 2263
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2263, $this->source); })()), "aaref", [], "any", false, false, false, 2263) == "oui")) {
                // line 2264
                yield "                            <td class=\"bord\"></td>
                        ";
            }
            // line 2266
            yield "                        <td class=\"bord\"></td>
                        ";
            // line 2267
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2267, $this->source); })()), "zone", [], "any", false, false, false, 2267) == "oui")) {
                // line 2268
                yield "                            <td class=\"bord\"></td>
                        ";
            }
            // line 2270
            yield "                        <td class=\"bord\"></td>
                        ";
            // line 2271
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2271, $this->source); })()), "aarem", [], "any", false, false, false, 2271) == "oui")) {
                // line 2272
                yield "                            <td colspan=\"3\" class=\"bord\"
                                style=\"color: #4e73df; border-bottom: 1px solid #D3D3D3 !important;\">
                                <b>NET À PAYER</b></td>
                        ";
            } else {
                // line 2276
                yield "                            <td colspan=\"2\" class=\"bord\"
                                style=\"color: #4e73df; border-bottom: 1px solid #D3D3D3 !important;\">
                                <b>NET À PAYER</b></td>
                        ";
            }
            // line 2280
            yield "                        <td align=\"right\" style=\"color: #4e73df;\">
                            ";
            // line 2281
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalttcsolde"]) || array_key_exists("totalttcsolde", $context) ? $context["totalttcsolde"] : (function () { throw new RuntimeError('Variable "totalttcsolde" does not exist.', 2281, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "<br><span
                                    class=\"hider\">";
            // line 2282
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalttcsolde"]) || array_key_exists("totalttcsolde", $context) ? $context["totalttcsolde"] : (function () { throw new RuntimeError('Variable "totalttcsolde" does not exist.', 2282, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</span></td>
                    </tr>
                </table>
                <p style=\"clear: both\"></p>
                <p style=\"text-align: left\">
                    Arrêté la présente facture à la somme de:<br>
                    <span><b>";
            // line 2288
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Craue\TwigExtensionsBundle\Twig\Extension\FormatNumberExtension']->formatSpelledOutNumber((isset($context["totalttcsolde"]) || array_key_exists("totalttcsolde", $context) ? $context["totalttcsolde"] : (function () { throw new RuntimeError('Variable "totalttcsolde" does not exist.', 2288, $this->source); })())), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2288, $this->source); })()), "monnaie", [], "any", false, false, false, 2288), "code", [], "any", false, false, false, 2288), "html", null, true);
            yield "</b></span>
                </p>
                <p style=\"clear: both\"></p>
                ";
            // line 2291
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 2291, $this->source); })()), "information", [], "any", false, false, false, 2291))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 2292
                yield "                    <br>
                    <p style=\"float: left; color: #4e73df;\"><u>INFORMATIONS ADDITIONNELLES</u></p>
                    <p style=\"clear: both\"></p>
                    <p style=\"color: #000000;\">";
                // line 2295
                yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 2295, $this->source); })()), "information", [], "any", false, false, false, 2295);
                yield "</p>
                ";
            }
            // line 2297
            yield "            </div>
        </div>
    </div>
";
        }
        // line 2301
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 2301, $this->source); })()) == "facturedecompte")) {
            // line 2302
            yield "    <div class=\"bood\">
        <div>
            <div>
                <table style=\"margin-top:";
            // line 2305
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 2305, $this->source); })()), "headerHeight", [], "any", false, false, false, 2305), "html", null, true);
            yield "cm; float: right; width: 100%\">
                    <tr>
                        <td style=\"border: none !important; padding-left: 500px; text-align: center\">
                            <b style=\"font-size: 14px; text-align: center\">";
            // line 2308
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2308, $this->source); })()), "client", [], "any", false, false, false, 2308), "nomclient", [], "any", false, false, false, 2308)), "html", null, true);
            yield "</b><br>
                            ";
            // line 2309
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2309, $this->source); })()), "client", [], "any", false, false, false, 2309), "contribuable", [], "any", false, false, false, 2309))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 2310
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2310, $this->source); })()), "client", [], "any", false, false, false, 2310), "contribuable", [], "any", false, false, false, 2310), "html", null, true);
                yield "<br>
                            ";
            }
            // line 2312
            yield "
                            ";
            // line 2313
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2313, $this->source); })()), "client", [], "any", false, false, false, 2313), "adresse", [], "any", false, false, false, 2313))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 2314
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2314, $this->source); })()), "client", [], "any", false, false, false, 2314), "adresse", [], "any", false, false, false, 2314), "html", null, true);
                yield "<br>
                            ";
            }
            // line 2316
            yield "
                            ";
            // line 2317
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2317, $this->source); })()), "client", [], "any", false, false, false, 2317), "mail", [], "any", false, false, false, 2317))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 2318
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2318, $this->source); })()), "client", [], "any", false, false, false, 2318), "mail", [], "any", false, false, false, 2318), "html", null, true);
                yield "<br>
                            ";
            }
            // line 2320
            yield "
                        </td>
                    </tr>
                </table>
                <p style=\"clear: both\"></p>
                <div>
                    <table style=\"width:80%;\">
                        <tr>
                            <td class=\"bordz\"><b><u>DATE:</u></b> ";
            // line 2328
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 2328, $this->source); })()), "date", [], "any", false, false, false, 2328), "d/m/y"), "html", null, true);
            yield "</td>
                        </tr>
                        <tr>
                            <td class=\"bordz\"><b><u>RÉFÉRENCE:</u></b><br>FACTURE SUR DÉCOMPTE <br> ";
            // line 2331
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 2331, $this->source); })()), "factreference", [], "any", false, false, false, 2331);
            yield "
                        </tr>
                    </table>
                </div>
            </div>
            <div>
                <table style=\"width: 100%;\">
                    <tr class=\"printer\" style=\"text-align: left !important;\">
                        <td colspan=\"5\"><b>1. DÉPENSES ENGAGÉES</b></td>
                    </tr>
                    <tr>
                        <td colspan=\"3\" style=\"text-align: right\">MONTANT TOTAL HT</td>
                        <td colspan=\"2\" style=\"text-align: right\"><b>";
            // line 2343
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2343, $this->source); })()), "totalht", [], "any", false, false, false, 2343), 2, ",", " "), "html", null, true);
            yield "</b>
                        </td>
                    </tr>
                    <tr class=\"printer\" style=\"text-align: left !important;\">
                        <td colspan=\"5\"><b>2. MODALITÉS DE RÈGLEMENT</b></td>
                    </tr>
                    <tr>
                        <td colspan=\"3\"
                            style=\"text-align: left; padding-left: 20px; color: ";
            // line 2351
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 2351, $this->source); })()), "decolor", [], "any", false, false, false, 2351), "html", null, true);
            yield "!important;\"><b>AVANCEMENT
                                DES TRAVAUX</b></td>
                        <td style=\"text-align: right;\"><b>";
            // line 2353
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["decompte"]) || array_key_exists("decompte", $context) ? $context["decompte"] : (function () { throw new RuntimeError('Variable "decompte" does not exist.', 2353, $this->source); })()), "avancement", [], "any", false, false, false, 2353), 2, ",", " "), "html", null, true);
            yield "%</b></td>
                        <td style=\"text-align: right\"><b>";
            // line 2354
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["decompte"]) || array_key_exists("decompte", $context) ? $context["decompte"] : (function () { throw new RuntimeError('Variable "decompte" does not exist.', 2354, $this->source); })()), "valeur", [], "any", false, false, false, 2354), 2, ",", " "), "html", null, true);
            yield "</b></td>
                    </tr>
                    <tr>
                        <td colspan=\"5\"
                            style=\"text-align: left; padding-left: 20px; color: ";
            // line 2358
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 2358, $this->source); })()), "decolor", [], "any", false, false, false, 2358), "html", null, true);
            yield "!important;\"><b>À
                                DÉDUIRE</b></td>
                    </tr>
                    <tr>
                        <td colspan=\"3\" style=\"text-align: right;\">DÉDUCTION ACOMPTE DE DEMARRAGE</td>
                        <td style=\"text-align: right\"><b>";
            // line 2363
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["decompte"]) || array_key_exists("decompte", $context) ? $context["decompte"] : (function () { throw new RuntimeError('Variable "decompte" does not exist.', 2363, $this->source); })()), "acompte", [], "any", false, false, false, 2363), 2, ",", " "), "html", null, true);
            yield "%</b></td>
                        <td style=\"text-align: right\">
                            ";
            // line 2365
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["decompte"]) || array_key_exists("decompte", $context) ? $context["decompte"] : (function () { throw new RuntimeError('Variable "decompte" does not exist.', 2365, $this->source); })()), "deduction", [], "any", false, false, false, 2365) == "partielle")) {
                // line 2366
                yield "                                <b>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["decompte"]) || array_key_exists("decompte", $context) ? $context["decompte"] : (function () { throw new RuntimeError('Variable "decompte" does not exist.', 2366, $this->source); })()), "valeur", [], "any", false, false, false, 2366) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["decompte"]) || array_key_exists("decompte", $context) ? $context["decompte"] : (function () { throw new RuntimeError('Variable "decompte" does not exist.', 2366, $this->source); })()), "acompte", [], "any", false, false, false, 2366)) / 100), 2, ",", " "), "html", null, true);
                yield "</b>
                            ";
            }
            // line 2368
            yield "                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["decompte"]) || array_key_exists("decompte", $context) ? $context["decompte"] : (function () { throw new RuntimeError('Variable "decompte" does not exist.', 2368, $this->source); })()), "deduction", [], "any", false, false, false, 2368) == "complete")) {
                // line 2369
                yield "                                <b>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["decompte"]) || array_key_exists("decompte", $context) ? $context["decompte"] : (function () { throw new RuntimeError('Variable "decompte" does not exist.', 2369, $this->source); })()), "totalht", [], "any", false, false, false, 2369) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["decompte"]) || array_key_exists("decompte", $context) ? $context["decompte"] : (function () { throw new RuntimeError('Variable "decompte" does not exist.', 2369, $this->source); })()), "acompte", [], "any", false, false, false, 2369)) / 100), 2, ",", " "), "html", null, true);
                yield "</b>
                            ";
            }
            // line 2371
            yield "                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["decompte"]) || array_key_exists("decompte", $context) ? $context["decompte"] : (function () { throw new RuntimeError('Variable "decompte" does not exist.', 2371, $this->source); })()), "deduction", [], "any", false, false, false, 2371) == "aucune")) {
                // line 2372
                yield "                                <b>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(0, 2, ",", " "), "html", null, true);
                yield "</b>
                            ";
            }
            // line 2374
            yield "
                        </td>
                    </tr>
                    <tr>
                        <td colspan=\"3\" style=\"text-align: right;\">DÉDUCTION RETENUE GARANTIE</td>
                        <td style=\"text-align: right\">";
            // line 2379
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["decompte"]) || array_key_exists("decompte", $context) ? $context["decompte"] : (function () { throw new RuntimeError('Variable "decompte" does not exist.', 2379, $this->source); })()), "garantie", [], "any", false, false, false, 2379), 2, ",", " "), "html", null, true);
            yield "%</td>
                        <td style=\"text-align: right\">";
            // line 2380
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["decompte"]) || array_key_exists("decompte", $context) ? $context["decompte"] : (function () { throw new RuntimeError('Variable "decompte" does not exist.', 2380, $this->source); })()), "valeur", [], "any", false, false, false, 2380) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["decompte"]) || array_key_exists("decompte", $context) ? $context["decompte"] : (function () { throw new RuntimeError('Variable "decompte" does not exist.', 2380, $this->source); })()), "garantie", [], "any", false, false, false, 2380)) / 100), 2, ",", " "), "html", null, true);
            yield "</td>
                    </tr>
                    <tr>
                        <td colspan=\"3\" style=\"text-align: right;\">DÉDUCTION RETENUE ASSURANCE TRC</td>
                        <td style=\"text-align: right\">";
            // line 2384
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["decompte"]) || array_key_exists("decompte", $context) ? $context["decompte"] : (function () { throw new RuntimeError('Variable "decompte" does not exist.', 2384, $this->source); })()), "trc", [], "any", false, false, false, 2384), 2, ",", " "), "html", null, true);
            yield "%</td>
                        <td style=\"text-align: right\">";
            // line 2385
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["decompte"]) || array_key_exists("decompte", $context) ? $context["decompte"] : (function () { throw new RuntimeError('Variable "decompte" does not exist.', 2385, $this->source); })()), "valeur", [], "any", false, false, false, 2385) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["decompte"]) || array_key_exists("decompte", $context) ? $context["decompte"] : (function () { throw new RuntimeError('Variable "decompte" does not exist.', 2385, $this->source); })()), "tr", [], "any", false, false, false, 2385)) / 100), 2, ",", " "), "html", null, true);
            yield "</td>
                    </tr>
                    <tr>
                        <td colspan=\"3\" style=\"text-align: right;\">DÉDUCTION RETENUE DE FINITION</td>
                        <td style=\"text-align: right\">";
            // line 2389
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["decompte"]) || array_key_exists("decompte", $context) ? $context["decompte"] : (function () { throw new RuntimeError('Variable "decompte" does not exist.', 2389, $this->source); })()), "finition", [], "any", false, false, false, 2389), 2, ",", " "), "html", null, true);
            yield "%</td>
                        <td style=\"text-align: right\">";
            // line 2390
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["decompte"]) || array_key_exists("decompte", $context) ? $context["decompte"] : (function () { throw new RuntimeError('Variable "decompte" does not exist.', 2390, $this->source); })()), "valeur", [], "any", false, false, false, 2390) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["decompte"]) || array_key_exists("decompte", $context) ? $context["decompte"] : (function () { throw new RuntimeError('Variable "decompte" does not exist.', 2390, $this->source); })()), "finition", [], "any", false, false, false, 2390)) / 100), 2, ",", " "), "html", null, true);
            yield "</td>
                    </tr>
                    <tr>
                        <td colspan=\"3\" style=\"text-align: right;\">DÉDUCTION COMPTE PRORATA</td>
                        <td style=\"text-align: right\">";
            // line 2394
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["decompte"]) || array_key_exists("decompte", $context) ? $context["decompte"] : (function () { throw new RuntimeError('Variable "decompte" does not exist.', 2394, $this->source); })()), "prorata", [], "any", false, false, false, 2394), 2, ",", " "), "html", null, true);
            yield "%</td>
                        <td style=\"text-align: right\">";
            // line 2395
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["decompte"]) || array_key_exists("decompte", $context) ? $context["decompte"] : (function () { throw new RuntimeError('Variable "decompte" does not exist.', 2395, $this->source); })()), "valeur", [], "any", false, false, false, 2395) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["decompte"]) || array_key_exists("decompte", $context) ? $context["decompte"] : (function () { throw new RuntimeError('Variable "decompte" does not exist.', 2395, $this->source); })()), "prorata", [], "any", false, false, false, 2395)) / 100), 2, ",", " "), "html", null, true);
            yield "</td>
                    </tr>
                    <tr>
                        <td colspan=\"3\" style=\"text-align: right;\">DÉDUCTION DES DÉCOMPTES</td>
                        <td style=\"text-align: right\"></td>
                        <td style=\"text-align: right\">";
            // line 2400
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["decompte"]) || array_key_exists("decompte", $context) ? $context["decompte"] : (function () { throw new RuntimeError('Variable "decompte" does not exist.', 2400, $this->source); })()), "countdecompe", [], "any", false, false, false, 2400), 2, ",", " "), "html", null, true);
            yield "</td>
                    </tr>
                    <tr>
                        <td colspan=\"5\"
                            style=\"text-align: left; padding-left: 20px; color: ";
            // line 2404
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 2404, $this->source); })()), "decolor", [], "any", false, false, false, 2404), "html", null, true);
            yield "!important;\">
                            <b>SOIT</b></td>
                    </tr>
                    <tr>
                        <td colspan=\"3\" style=\"text-align: right;\">MONTANT DE LA SITUATION À DÉLIVRER HT</td>
                        <td style=\"text-align: right\"></td>
                        <td style=\"text-align: right\">";
            // line 2410
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["decompte"]) || array_key_exists("decompte", $context) ? $context["decompte"] : (function () { throw new RuntimeError('Variable "decompte" does not exist.', 2410, $this->source); })()), "apayer", [], "any", false, false, false, 2410), 2, ",", " "), "html", null, true);
            yield "</td>
                    </tr>
                    <tr>
                        <td colspan=\"3\" style=\"text-align: right;\">TVA ";
            // line 2413
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["decompte"]) || array_key_exists("decompte", $context) ? $context["decompte"] : (function () { throw new RuntimeError('Variable "decompte" does not exist.', 2413, $this->source); })()), "devis", [], "any", false, false, false, 2413), "tva", [], "any", false, false, false, 2413), "html", null, true);
            yield "%</td>
                        <td style=\"text-align: right\"></td>
                        <td style=\"text-align: right\">";
            // line 2415
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["decompte"]) || array_key_exists("decompte", $context) ? $context["decompte"] : (function () { throw new RuntimeError('Variable "decompte" does not exist.', 2415, $this->source); })()), "apayer", [], "any", false, false, false, 2415) * CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["decompte"]) || array_key_exists("decompte", $context) ? $context["decompte"] : (function () { throw new RuntimeError('Variable "decompte" does not exist.', 2415, $this->source); })()), "devis", [], "any", false, false, false, 2415), "tva", [], "any", false, false, false, 2415)) / 100), 2, ",", " "), "html", null, true);
            yield "</td>
                    </tr>
                    <tr>
                        <td colspan=\"3\" style=\"text-align: right; color: ";
            // line 2418
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 2418, $this->source); })()), "decolor", [], "any", false, false, false, 2418), "html", null, true);
            yield "!important;\"><b>MONTANT DE
                                LA SITUATION
                                À DÉLIVRER TTC</b></td>
                        <td style=\"text-align: right\"></td>
                        <td style=\"text-align: right; color: ";
            // line 2422
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 2422, $this->source); })()), "decolor", [], "any", false, false, false, 2422), "html", null, true);
            yield "!important;\">
                            <b>";
            // line 2423
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["decompte"]) || array_key_exists("decompte", $context) ? $context["decompte"] : (function () { throw new RuntimeError('Variable "decompte" does not exist.', 2423, $this->source); })()), "ttc", [], "any", false, false, false, 2423), 2, ",", " "), "html", null, true);
            yield "</b>
                        </td>
                    </tr>
                </table>
                <p style=\"clear: both\"></p>
                <br>
                <p style=\"text-align: left\">
                    Arrêté la présente facture à la somme de:<br>
                    <span><b>";
            // line 2431
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Craue\TwigExtensionsBundle\Twig\Extension\FormatNumberExtension']->formatSpelledOutNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["decompte"]) || array_key_exists("decompte", $context) ? $context["decompte"] : (function () { throw new RuntimeError('Variable "decompte" does not exist.', 2431, $this->source); })()), "ttc", [], "any", false, false, false, 2431)), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2431, $this->source); })()), "monnaie", [], "any", false, false, false, 2431), "code", [], "any", false, false, false, 2431), "html", null, true);
            yield "</b></span>
                </p><br>
                <p style=\"float: right; text-decoration: underline\">SIGNATURE AUTORISÉE</p><br><br><br>
                ";
            // line 2434
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 2434, $this->source); })()), "information", [], "any", false, false, false, 2434))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 2435
                yield "                    <p style=\"float: left; color: #4e73df;\"><u>INFORMATIONS ADDITIONNELLES</u></p>
                    <p style=\"clear: both\"></p>
                    <p style=\"color: #000000;\">";
                // line 2437
                yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 2437, $this->source); })()), "information", [], "any", false, false, false, 2437);
                yield "</p>
                ";
            }
            // line 2439
            yield "            </div>
        </div>
    </div>
";
        }
        // line 2443
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 2443, $this->source); })()) == "factureacompte")) {
            // line 2444
            yield "    <div class=\"bood\">
        <div>
            <div>
                <table style=\"margin-top:";
            // line 2447
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 2447, $this->source); })()), "teteDB", [], "any", false, false, false, 2447) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 2447, $this->source); })()), "headerHeight", [], "any", false, false, false, 2447)), "html", null, true);
            yield "cm; float: right; width: 100%\">
                    <tr>
                        <td style=\"border: none !important; padding-left: 500px; text-align: center\">
                            <b style=\"font-size: 14px; text-align: center\">";
            // line 2450
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2450, $this->source); })()), "client", [], "any", false, false, false, 2450), "nomclient", [], "any", false, false, false, 2450)), "html", null, true);
            yield "</b><br>

                            ";
            // line 2452
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2452, $this->source); })()), "client", [], "any", false, false, false, 2452), "contribuable", [], "any", false, false, false, 2452))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 2453
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2453, $this->source); })()), "client", [], "any", false, false, false, 2453), "contribuable", [], "any", false, false, false, 2453), "html", null, true);
                yield "<br>
                            ";
            }
            // line 2455
            yield "
                            ";
            // line 2456
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2456, $this->source); })()), "client", [], "any", false, false, false, 2456), "adresse", [], "any", false, false, false, 2456))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 2457
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2457, $this->source); })()), "client", [], "any", false, false, false, 2457), "adresse", [], "any", false, false, false, 2457), "html", null, true);
                yield "<br>
                            ";
            }
            // line 2459
            yield "
                            ";
            // line 2460
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2460, $this->source); })()), "client", [], "any", false, false, false, 2460), "mail", [], "any", false, false, false, 2460))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 2461
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2461, $this->source); })()), "client", [], "any", false, false, false, 2461), "mail", [], "any", false, false, false, 2461), "html", null, true);
                yield "<br>
                            ";
            }
            // line 2463
            yield "
                        </td>
                    </tr>
                </table>
                <p style=\"clear: both\"></p>
                <div>
                    <table style=\"width:80%;\">
                        <tr>
                            <td class=\"bordz\"><b><u>DATE:</u></b> ";
            // line 2471
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 2471, $this->source); })()), "date", [], "any", false, false, false, 2471), "d/m/y"), "html", null, true);
            yield "</td>
                        </tr>
                        <tr>
                            <td class=\"bordz\"><b><u>RÉFÉRENCE:</u></b><br/>
                                FACTURE D'ACOMPTE<br/>
                                ";
            // line 2476
            yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 2476, $this->source); })()), "factreference", [], "any", false, false, false, 2476));
            yield " selon
                                <span style=\"font-weight: bold\">Devis N° ";
            // line 2477
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2477, $this->source); })()), "iddevis", [], "any", false, false, false, 2477), "html", null, true);
            yield "</span></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div>
                <table style=\"width: 100%;\">
                    <tr class=\"printer\">
                        ";
            // line 2485
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2485, $this->source); })()), "aaref", [], "any", false, false, false, 2485) == "oui")) {
                // line 2486
                yield "                            <th style=\"text-align: center\">RÉF</th>
                        ";
            }
            // line 2488
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2488, $this->source); })()), "modele", [], "any", false, false, false, 2488) == 2)) {
                // line 2489
                yield "                            <th style=\"max-width:500px !important; min-width: 250px !important; text-align: left\">
                                DESCRIPTION
                            </th>
                        ";
            } else {
                // line 2493
                yield "                            <th style=\"max-width:500px !important; min-width: 250px !important; text-align: left\">
                                DÉSIGNATION
                            </th>
                        ";
            }
            // line 2497
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2497, $this->source); })()), "zone", [], "any", false, false, false, 2497) == "oui")) {
                // line 2498
                yield "                            <th style=\"text-align: center\">SECTION</th>
                        ";
            }
            // line 2500
            yield "                        <th style=\"text-align: center\">UNITÉ</th>
                        <th style=\"text-align: center\">QTÉ</th>
                        <th style=\"text-align: center\">PRIX&nbsp;U.</th>
                        ";
            // line 2503
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2503, $this->source); })()), "aarem", [], "any", false, false, false, 2503) == "oui")) {
                // line 2504
                yield "                            <th style=\" text-align: center\">REMISE</th>
                        ";
            }
            // line 2506
            yield "                        <th style=\"text-align: center\">MONTANT&nbsp;HT</th>
                    </tr>

                    ";
            // line 2509
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["listGroup"]) || array_key_exists("listGroup", $context) ? $context["listGroup"] : (function () { throw new RuntimeError('Variable "listGroup" does not exist.', 2509, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 2510
                yield "                        <tr class=\"togo\">
                            ";
                // line 2511
                if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2511, $this->source); })()), "zone", [], "any", false, false, false, 2511) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2511, $this->source); })()), "aarem", [], "any", false, false, false, 2511) == "oui"))) {
                    // line 2512
                    yield "                                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2512, $this->source); })()), "aaref", [], "any", false, false, false, 2512) == "oui")) {
                        // line 2513
                        yield "                                    <td class=\"text-center\"><b>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "reference", [], "any", false, false, false, 2513), "html", null, true);
                        yield "</b></td>
                                ";
                    }
                    // line 2515
                    yield "                                <td COLSPAN=\"7\"><b>";
                    yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "groupe", [], "any", false, false, false, 2515));
                    yield "</b></td>

                            ";
                } elseif (((CoreExtension::getAttribute($this->env, $this->source,                 // line 2517
(isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2517, $this->source); })()), "zone", [], "any", false, false, false, 2517) == "non") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2517, $this->source); })()), "aarem", [], "any", false, false, false, 2517) == "non"))) {
                    // line 2518
                    yield "                                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2518, $this->source); })()), "aaref", [], "any", false, false, false, 2518) == "oui")) {
                        // line 2519
                        yield "                                    <td class=\"text-center\"><b>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "reference", [], "any", false, false, false, 2519), "html", null, true);
                        yield "</b></td>
                                ";
                    }
                    // line 2521
                    yield "                                <td colspan=\"5\"><b>";
                    yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "groupe", [], "any", false, false, false, 2521));
                    yield "</b></td>

                            ";
                } elseif (((CoreExtension::getAttribute($this->env, $this->source,                 // line 2523
(isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2523, $this->source); })()), "zone", [], "any", false, false, false, 2523) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2523, $this->source); })()), "aarem", [], "any", false, false, false, 2523) == "non"))) {
                    // line 2524
                    yield "                                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2524, $this->source); })()), "aaref", [], "any", false, false, false, 2524) == "oui")) {
                        // line 2525
                        yield "                                    <td class=\"text-center\"><b>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "reference", [], "any", false, false, false, 2525), "html", null, true);
                        yield "</b></td>
                                ";
                    }
                    // line 2527
                    yield "                                <td colspan=\"6\"><b>";
                    yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "groupe", [], "any", false, false, false, 2527));
                    yield "</b></td>

                            ";
                } elseif (((CoreExtension::getAttribute($this->env, $this->source,                 // line 2529
(isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2529, $this->source); })()), "aarem", [], "any", false, false, false, 2529) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2529, $this->source); })()), "zone", [], "any", false, false, false, 2529) == "non"))) {
                    // line 2530
                    yield "                                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2530, $this->source); })()), "aaref", [], "any", false, false, false, 2530) == "oui")) {
                        // line 2531
                        yield "                                    <td class=\"text-center\"><b>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "reference", [], "any", false, false, false, 2531), "html", null, true);
                        yield "</b></td>
                                ";
                    }
                    // line 2533
                    yield "                                <td colspan=\"6\"><b>";
                    yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "groupe", [], "any", false, false, false, 2533));
                    yield "</b></td>
                            ";
                }
                // line 2535
                yield "                        </tr>
                        ";
                // line 2536
                $context["st"] = 0;
                // line 2537
                yield "
                        ";
                // line 2538
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "lignes", [], "any", false, false, false, 2538));
                foreach ($context['_seq'] as $context["_key"] => $context["lign"]) {
                    // line 2539
                    yield "                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "devis", [], "any", false, false, false, 2539) != null)) {
                        // line 2540
                        yield "                                <tr>
                                    ";
                        // line 2541
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2541, $this->source); })()), "aaref", [], "any", false, false, false, 2541) == "oui")) {
                            // line 2542
                            yield "                                        <td style=\"text-align: center\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "reference", [], "any", false, false, false, 2542), "html", null, true);
                            yield "</td>
                                    ";
                        }
                        // line 2544
                        yield "                                    <td align=\"left\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "designation", [], "any", false, false, false, 2544);
                        yield "</td>
                                    ";
                        // line 2545
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2545, $this->source); })()), "zone", [], "any", false, false, false, 2545) == "oui")) {
                            // line 2546
                            yield "                                        <td style=\"text-align: center\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "zone", [], "any", false, false, false, 2546), "html", null, true);
                            yield "</td>
                                    ";
                        }
                        // line 2548
                        yield "                                    <td style=\"text-align: center\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "unite", [], "any", false, false, false, 2548), "html", null, true);
                        yield "</td>
                                    <td style=\"text-align: center\">";
                        // line 2549
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 2549), 2, ",", " "), "html", null, true);
                        yield "
                                        <br><span
                                                class=\"hider\">";
                        // line 2551
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 2551), 6, ",", "."), "html", null, true);
                        yield "</span></td>
                                    <td style=\"text-align: right\">";
                        // line 2552
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 2552), 2, ",", " "), "html", null, true);
                        yield "<br><span
                                                class=\"hider\">";
                        // line 2553
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 2553), 5, ",", "."), "html", null, true);
                        yield "</span></td>
                                    ";
                        // line 2554
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2554, $this->source); })()), "aarem", [], "any", false, false, false, 2554) == "oui")) {
                            // line 2555
                            yield "                                        <td style=\"text-align: center\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "remise", [], "any", false, false, false, 2555), "html", null, true);
                            yield "%</td>
                                    ";
                        }
                        // line 2557
                        yield "                                    ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2557, $this->source); })()), "aarem", [], "any", false, false, false, 2557) == "non")) {
                            // line 2558
                            yield "                                        <td style=\"text-align: right\">";
                            $context["st"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 2558) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 2558)) + (isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 2558, $this->source); })()));
                            yield " ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 2558) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 2558)), 2, ",", " "), "html", null, true);
                            yield "
                                            <br><span
                                                    class=\"hider\">";
                            // line 2560
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 2560) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 2560)), 4, ",", "."), "html", null, true);
                            yield "</span>
                                        </td>
                                    ";
                        } else {
                            // line 2563
                            yield "                                        <td style=\"text-align: right\">";
                            $context["st"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 2563) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 2563)) * ((100 - CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "remise", [], "any", false, false, false, 2563)) / 100)) + (isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 2563, $this->source); })()));
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 2563) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 2563)) * ((100 - CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "remise", [], "any", false, false, false, 2563)) / 100)), 2, ",", " "), "html", null, true);
                            yield "</td>
                                    ";
                        }
                        // line 2565
                        yield "                                    </td>
                                </tr>
                            ";
                    }
                    // line 2568
                    yield "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['lign'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 2569
                yield "                        <tr class=\"togo\">
                            ";
                // line 2570
                if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2570, $this->source); })()), "zone", [], "any", false, false, false, 2570) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2570, $this->source); })()), "aarem", [], "any", false, false, false, 2570) == "oui"))) {
                    // line 2571
                    yield "                                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2571, $this->source); })()), "aaref", [], "any", false, false, false, 2571) == "oui")) {
                        // line 2572
                        yield "                                    <td COLSPAN=\"8\" align=\"right\">
                                        <b>SOUS-TOTAL: ";
                        // line 2573
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 2573, $this->source); })()), 2, ",", " "), "html", null, true);
                        yield "</b></td>
                                ";
                    } else {
                        // line 2575
                        yield "                                    <td COLSPAN=\"7\" align=\"right\">
                                        <b>SOUS-TOTAL: ";
                        // line 2576
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 2576, $this->source); })()), 2, ",", " "), "html", null, true);
                        yield "</b></td>
                                ";
                    }
                    // line 2578
                    yield "                            ";
                } elseif (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2578, $this->source); })()), "zone", [], "any", false, false, false, 2578) == "non") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2578, $this->source); })()), "aarem", [], "any", false, false, false, 2578) == "non"))) {
                    // line 2579
                    yield "                                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2579, $this->source); })()), "aaref", [], "any", false, false, false, 2579) == "oui")) {
                        // line 2580
                        yield "                                    <td COLSPAN=\"6\" align=\"right\">
                                        <b>SOUS-TOTAL: ";
                        // line 2581
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 2581, $this->source); })()), 2, ",", " "), "html", null, true);
                        yield "</b></td>
                                ";
                    } else {
                        // line 2583
                        yield "                                    <td COLSPAN=\"5\" align=\"right\">
                                        <b>SOUS-TOTAL: ";
                        // line 2584
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 2584, $this->source); })()), 2, ",", " "), "html", null, true);
                        yield "</b></td>
                                ";
                    }
                    // line 2586
                    yield "
                            ";
                } elseif (((CoreExtension::getAttribute($this->env, $this->source,                 // line 2587
(isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2587, $this->source); })()), "zone", [], "any", false, false, false, 2587) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2587, $this->source); })()), "aarem", [], "any", false, false, false, 2587) == "non"))) {
                    // line 2588
                    yield "                                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2588, $this->source); })()), "aaref", [], "any", false, false, false, 2588) == "oui")) {
                        // line 2589
                        yield "                                    <td COLSPAN=\"7\" align=\"right\">
                                        <b>SOUS-TOTAL: ";
                        // line 2590
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 2590, $this->source); })()), 2, ",", " "), "html", null, true);
                        yield "</b></td>
                                ";
                    } else {
                        // line 2592
                        yield "                                    <td COLSPAN=\"6\" align=\"right\">
                                        <b>SOUS-TOTAL: ";
                        // line 2593
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 2593, $this->source); })()), 2, ",", " "), "html", null, true);
                        yield "</b></td>
                                ";
                    }
                    // line 2595
                    yield "
                            ";
                } elseif (((CoreExtension::getAttribute($this->env, $this->source,                 // line 2596
(isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2596, $this->source); })()), "aarem", [], "any", false, false, false, 2596) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2596, $this->source); })()), "zone", [], "any", false, false, false, 2596) == "non"))) {
                    // line 2597
                    yield "                                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2597, $this->source); })()), "aaref", [], "any", false, false, false, 2597) == "oui")) {
                        // line 2598
                        yield "                                    <td COLSPAN=\"7\" align=\"right\">
                                        <b>SOUS-TOTAL: ";
                        // line 2599
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 2599, $this->source); })()), 2, ",", " "), "html", null, true);
                        yield "</b></td>
                                ";
                    } else {
                        // line 2601
                        yield "                                    <td COLSPAN=\"6\" align=\"right\">
                                        <b>SOUS-TOTAL: ";
                        // line 2602
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 2602, $this->source); })()), 2, ",", " "), "html", null, true);
                        yield "</b></td>
                                ";
                    }
                    // line 2604
                    yield "                            ";
                }
                // line 2605
                yield "
                        </tr>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2609
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["lignes"]) || array_key_exists("lignes", $context) ? $context["lignes"] : (function () { throw new RuntimeError('Variable "lignes" does not exist.', 2609, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["lign"]) {
                // line 2610
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "groupe", [], "any", false, false, false, 2610) == null)) {
                    // line 2611
                    yield "                            <tr>
                                ";
                    // line 2612
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2612, $this->source); })()), "aaref", [], "any", false, false, false, 2612) == "oui")) {
                        // line 2613
                        yield "                                    <td style=\"text-align: center\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "reference", [], "any", false, false, false, 2613), "html", null, true);
                        yield "</td>
                                ";
                    }
                    // line 2615
                    yield "                                <td>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "designation", [], "any", false, false, false, 2615);
                    yield "</td>
                                ";
                    // line 2616
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2616, $this->source); })()), "zone", [], "any", false, false, false, 2616) == "oui")) {
                        // line 2617
                        yield "                                    <td style=\"text-align: center\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "zone", [], "any", false, false, false, 2617), "html", null, true);
                        yield "</td>
                                ";
                    }
                    // line 2619
                    yield "                                <td style=\"text-align: center\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "unite", [], "any", false, false, false, 2619), "html", null, true);
                    yield "</td>
                                <td style=\"text-align: center\">";
                    // line 2620
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 2620), 2, ",", " "), "html", null, true);
                    yield "<br><span
                                            class=\"hider\">";
                    // line 2621
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 2621), 6, ",", " "), "html", null, true);
                    yield "</span></td>
                                <td style=\"text-align: right\">";
                    // line 2622
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 2622), 2, ",", " "), "html", null, true);
                    yield "<br><span
                                            class=\"hider\">";
                    // line 2623
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 2623), 4, ",", "."), "html", null, true);
                    yield "</span></td>
                                ";
                    // line 2624
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2624, $this->source); })()), "aarem", [], "any", false, false, false, 2624) == "oui")) {
                        // line 2625
                        yield "                                    <td style=\"text-align: center\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "remise", [], "any", false, false, false, 2625), "html", null, true);
                        yield "%</td>
                                ";
                    }
                    // line 2627
                    yield "                                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2627, $this->source); })()), "aarem", [], "any", false, false, false, 2627) == "non")) {
                        // line 2628
                        yield "                                    <td style=\"text-align: right\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 2628) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 2628)), 2, ",", " "), "html", null, true);
                        yield "
                                        <br><span
                                                class=\"hider\">";
                        // line 2630
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 2630) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 2630)), 4, ",", "."), "html", null, true);
                        yield "</span>
                                    </td>
                                ";
                    }
                    // line 2633
                    yield "                                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2633, $this->source); })()), "aarem", [], "any", false, false, false, 2633) != "non")) {
                        // line 2634
                        yield "                                    <td style=\"text-align: right\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 2634) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 2634)) * ((100 - CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "remise", [], "any", false, false, false, 2634)) / 100)), 2, ",", " "), "html", null, true);
                        yield "</td>
                                ";
                    }
                    // line 2636
                    yield "                            </tr>
                        ";
                }
                // line 2638
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['lign'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2639
            yield "

                    <tr>
                        ";
            // line 2642
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2642, $this->source); })()), "aaref", [], "any", false, false, false, 2642) == "oui")) {
                // line 2643
                yield "                            <td class=\"bord\"></td>
                        ";
            }
            // line 2645
            yield "                        <td class=\"bord\"></td>
                        ";
            // line 2646
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2646, $this->source); })()), "zone", [], "any", false, false, false, 2646) == "oui")) {
                // line 2647
                yield "                            <td class=\"bord\"></td>
                        ";
            }
            // line 2649
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2649, $this->source); })()), "aarem", [], "any", false, false, false, 2649) == "oui")) {
                // line 2650
                yield "                            <td colspan=\"4\" class=\"bord\" style=\"text-align: right;\"><b>DEVIS TOTAL HT</b></td>
                        ";
            } else {
                // line 2652
                yield "                            <td class=\"bord\" colspan=\"3\" style=\"text-align: right;\"><b>DEVIS TOTAL HT</b></td>
                        ";
            }
            // line 2654
            yield "                        <td align=\"right\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2654, $this->source); })()), "totalht", [], "any", false, false, false, 2654), 2, ",", " "), "html", null, true);
            yield "</td>
                    </tr>
                    ";
            // line 2656
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2656, $this->source); })()), "aarem", [], "any", false, false, false, 2656) == "oui")) {
                // line 2657
                yield "                        <tr>
                            ";
                // line 2658
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2658, $this->source); })()), "aaref", [], "any", false, false, false, 2658) == "oui")) {
                    // line 2659
                    yield "                                <td class=\"bord\"></td>
                            ";
                }
                // line 2661
                yield "                            <td class=\"bord\"></td>
                            ";
                // line 2662
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2662, $this->source); })()), "zone", [], "any", false, false, false, 2662) == "oui")) {
                    // line 2663
                    yield "                                <td class=\"bord\"></td>
                            ";
                }
                // line 2665
                yield "                            <td class=\"bord\"></td>
                            ";
                // line 2666
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2666, $this->source); })()), "aarem", [], "any", false, false, false, 2666) == "oui")) {
                    // line 2667
                    yield "                                <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>REMISE TOTALE</b></td>
                            ";
                } else {
                    // line 2669
                    yield "                                <td class=\"bord\" colspan=\"2\" style=\"text-align: right;\"><b>REMISE TOTALE </b></td>
                            ";
                }
                // line 2671
                yield "                            <td align=\"right\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2671, $this->source); })()), "vremise", [], "any", false, false, false, 2671), 2, ",", " "), "html", null, true);
                yield "</td>
                        </tr>
                    ";
            }
            // line 2674
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2674, $this->source); })()), "aarem", [], "any", false, false, false, 2674) != "non")) {
                // line 2675
                yield "                        <tr>
                            ";
                // line 2676
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2676, $this->source); })()), "aaref", [], "any", false, false, false, 2676) == "oui")) {
                    // line 2677
                    yield "                                <td class=\"bord\"></td>
                            ";
                }
                // line 2679
                yield "                            <td class=\"bord\"></td>
                            ";
                // line 2680
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2680, $this->source); })()), "zone", [], "any", false, false, false, 2680) == "oui")) {
                    // line 2681
                    yield "                                <td class=\"bord\"></td>
                            ";
                }
                // line 2683
                yield "                            <td class=\"bord\"></td>
                            ";
                // line 2684
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2684, $this->source); })()), "aarem", [], "any", false, false, false, 2684) == "oui")) {
                    // line 2685
                    yield "                                <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT REMISÉ</b></td>
                            ";
                } else {
                    // line 2687
                    yield "                                <td class=\"bord\" colspan=\"2\" style=\"text-align: right;\"><b>TOTAL HT REMISÉ</b></td>
                            ";
                }
                // line 2689
                yield "                            <td align=\"right\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalhtsolde"]) || array_key_exists("totalhtsolde", $context) ? $context["totalhtsolde"] : (function () { throw new RuntimeError('Variable "totalhtsolde" does not exist.', 2689, $this->source); })()), 2, ",", " "), "html", null, true);
                yield "</td>
                        </tr>
                    ";
            }
            // line 2692
            yield "                    <tr>
                        ";
            // line 2693
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2693, $this->source); })()), "aaref", [], "any", false, false, false, 2693) == "oui")) {
                // line 2694
                yield "                            <td class=\"bord\"></td>
                        ";
            }
            // line 2696
            yield "                        <td class=\"bord\"></td>
                        ";
            // line 2697
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2697, $this->source); })()), "zone", [], "any", false, false, false, 2697) == "oui")) {
                // line 2698
                yield "                            <td class=\"bord\"></td>
                        ";
            }
            // line 2700
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2700, $this->source); })()), "aarem", [], "any", false, false, false, 2700) == "oui")) {
                // line 2701
                yield "                            <td colspan=\"4\" class=\"bord\" style=\"text-align: right;\">
                                <b>ACOMPTE ";
                // line 2702
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 2702, $this->source); })()), "acompte", [], "any", false, false, false, 2702), "pourcentage", [], "any", false, false, false, 2702), 2, ",", " "), "html", null, true);
                yield "% HT</b></td>
                        ";
            } else {
                // line 2704
                yield "                            <td class=\"bord\" colspan=\"3\" style=\"text-align: right;\">
                                <b>ACOMPTE ";
                // line 2705
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 2705, $this->source); })()), "acompte", [], "any", false, false, false, 2705), "pourcentage", [], "any", false, false, false, 2705), 2, ",", " "), "html", null, true);
                yield "% HT</b></td>
                        ";
            }
            // line 2707
            yield "                        <td align=\"right\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 2707, $this->source); })()), "totalht", [], "any", false, false, false, 2707), 2, ",", " "), "html", null, true);
            yield "</td>
                    </tr>
                    ";
            // line 2709
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2709, $this->source); })()), "abasetva", [], "any", false, false, false, 2709) == "oui")) {
                // line 2710
                yield "                        <tr>
                            ";
                // line 2711
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2711, $this->source); })()), "aaref", [], "any", false, false, false, 2711) == "oui")) {
                    // line 2712
                    yield "                                <td class=\"bord\"></td>
                            ";
                }
                // line 2714
                yield "                            <td class=\"bord\"></td>
                            ";
                // line 2715
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2715, $this->source); })()), "zone", [], "any", false, false, false, 2715) == "oui")) {
                    // line 2716
                    yield "                                <td class=\"bord\"></td>
                            ";
                }
                // line 2718
                yield "                            <td class=\"bord\"></td>
                            ";
                // line 2719
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2719, $this->source); })()), "aarem", [], "any", false, false, false, 2719) == "oui")) {
                    // line 2720
                    yield "                                <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>BASE
                                        TVA";
                    // line 2721
                    if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2721, $this->source); })()), "code", [], "any", false, false, false, 2721))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "(";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2721, $this->source); })()), "code", [], "any", false, false, false, 2721), "html", null, true);
                        yield ")";
                    }
                    yield "</b></td>
                            ";
                } else {
                    // line 2723
                    yield "                                <td class=\"bord\" colspan=\"2\" style=\"text-align: right;\"><b>BASE
                                        TVA";
                    // line 2724
                    if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2724, $this->source); })()), "code", [], "any", false, false, false, 2724))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "(";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2724, $this->source); })()), "code", [], "any", false, false, false, 2724), "html", null, true);
                        yield ")";
                    }
                    yield "</b></td>
                            ";
                }
                // line 2726
                yield "                            <td align=\"right\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2726, $this->source); })()), "basetva", [], "any", false, false, false, 2726), 2, ",", " "), "html", null, true);
                yield "</td>
                        </tr>
                    ";
            }
            // line 2729
            yield "                    <tr>
                        ";
            // line 2730
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2730, $this->source); })()), "aaref", [], "any", false, false, false, 2730) == "oui")) {
                // line 2731
                yield "                            <td class=\"bord\"></td>
                        ";
            }
            // line 2733
            yield "                        <td class=\"bord\"></td>
                        ";
            // line 2734
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2734, $this->source); })()), "zone", [], "any", false, false, false, 2734) == "oui")) {
                // line 2735
                yield "                            <td class=\"bord\"></td>
                        ";
            }
            // line 2737
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2737, $this->source); })()), "aarem", [], "any", false, false, false, 2737) == "oui")) {
                // line 2738
                yield "                        <td colspan=\"4\" class=\"bord\" style=\"text-align: right;\"><b>TVA ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2738, $this->source); })()), "tva", [], "any", false, false, false, 2738), "html", null, true);
                yield "
                                % ";
                // line 2739
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2739, $this->source); })()), "ptva", [], "any", false, false, false, 2739) == "non")) {
                    yield "(non facturée)";
                }
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2739, $this->source); })()), "ptva", [], "any", false, false, false, 2739) == "susp")) {
                    yield "(suspendue)";
                }
                // line 2740
                yield "                            </b></td>
                        ";
            } else {
                // line 2742
                yield "                        <td class=\"bord\" colspan=\"3\" style=\"text-align: right;\"><b>TVA ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2742, $this->source); })()), "tva", [], "any", false, false, false, 2742), "html", null, true);
                yield "
                                % ";
                // line 2743
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2743, $this->source); })()), "ptva", [], "any", false, false, false, 2743) == "non")) {
                    yield "(non facturée)";
                }
            }
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2743, $this->source); })()), "ptva", [], "any", false, false, false, 2743) == "susp")) {
                yield "(suspendue)";
            }
            // line 2744
            yield "                            </b></td>
                        <td align=\"right\">";
            // line 2745
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 2745, $this->source); })()), "vtva", [], "any", false, false, false, 2745), 2, ",", " "), "html", null, true);
            yield "</td>
                    </tr>
                    <tr>
                        ";
            // line 2748
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2748, $this->source); })()), "aaref", [], "any", false, false, false, 2748) == "oui")) {
                // line 2749
                yield "                            <td class=\"bord\"></td>
                        ";
            }
            // line 2751
            yield "                        <td class=\"bord\"></td>
                        ";
            // line 2752
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2752, $this->source); })()), "zone", [], "any", false, false, false, 2752) == "oui")) {
                // line 2753
                yield "                            <td class=\"bord\"></td>
                        ";
            }
            // line 2755
            yield "                        <td class=\"bord\"></td>
                        ";
            // line 2756
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2756, $this->source); })()), "aarem", [], "any", false, false, false, 2756) == "oui")) {
                // line 2757
                yield "                            <td colspan=\"3\" class=\"bord\"
                                style=\"color: #4e73df; border-bottom: 1px solid #D3D3D3 !important;\">
                                <b>NET À PAYER</b></td>
                        ";
            } else {
                // line 2761
                yield "                            <td colspan=\"2\" class=\"bord\"
                                style=\"color: #4e73df; border-bottom: 1px solid #D3D3D3 !important;\">
                                <b>NET À PAYER</b></td>
                        ";
            }
            // line 2765
            yield "                        <td align=\"right\" style=\"color: #4e73df;\">
                            ";
            // line 2766
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 2766, $this->source); })()), "totalttc", [], "any", false, false, false, 2766), 2, ",", "."), "html", null, true);
            yield "<br><span
                                    class=\"hider\">";
            // line 2767
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 2767, $this->source); })()), "totalttc", [], "any", false, false, false, 2767), 4, ",", "."), "html", null, true);
            yield "</span></td>
                    </tr>

                </table>
                <p style=\"clear: both\"></p>
                <p style=\"text-align: left\">
                    Arrêté la présente facture à la somme de:<br>
                    <span><b>";
            // line 2774
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Craue\TwigExtensionsBundle\Twig\Extension\FormatNumberExtension']->formatSpelledOutNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 2774, $this->source); })()), "totalttc", [], "any", false, false, false, 2774)), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2774, $this->source); })()), "monnaie", [], "any", false, false, false, 2774), "code", [], "any", false, false, false, 2774), "html", null, true);
            yield "</b></span>
                </p>
                ";
            // line 2776
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 2776, $this->source); })()), "information", [], "any", false, false, false, 2776))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 2777
                yield "                    <p style=\"float: left; color: #4e73df;\"><u>CONDITIONS ET MODALITÉS DE PAIEMENT</u></p>
                    <p style=\"clear: both\"></p>
                    <p style=\"color: #000000;\">";
                // line 2779
                yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 2779, $this->source); })()), "information", [], "any", false, false, false, 2779);
                yield "</p>
                ";
            }
            // line 2781
            yield "            </div>
        </div>
    </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "content/attachedoc_excel.html.twig";
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
        return array (  6837 => 2781,  6832 => 2779,  6828 => 2777,  6826 => 2776,  6819 => 2774,  6809 => 2767,  6805 => 2766,  6802 => 2765,  6796 => 2761,  6790 => 2757,  6788 => 2756,  6785 => 2755,  6781 => 2753,  6779 => 2752,  6776 => 2751,  6772 => 2749,  6770 => 2748,  6764 => 2745,  6761 => 2744,  6753 => 2743,  6748 => 2742,  6744 => 2740,  6737 => 2739,  6732 => 2738,  6729 => 2737,  6725 => 2735,  6723 => 2734,  6720 => 2733,  6716 => 2731,  6714 => 2730,  6711 => 2729,  6704 => 2726,  6695 => 2724,  6692 => 2723,  6683 => 2721,  6680 => 2720,  6678 => 2719,  6675 => 2718,  6671 => 2716,  6669 => 2715,  6666 => 2714,  6662 => 2712,  6660 => 2711,  6657 => 2710,  6655 => 2709,  6649 => 2707,  6644 => 2705,  6641 => 2704,  6636 => 2702,  6633 => 2701,  6630 => 2700,  6626 => 2698,  6624 => 2697,  6621 => 2696,  6617 => 2694,  6615 => 2693,  6612 => 2692,  6605 => 2689,  6601 => 2687,  6597 => 2685,  6595 => 2684,  6592 => 2683,  6588 => 2681,  6586 => 2680,  6583 => 2679,  6579 => 2677,  6577 => 2676,  6574 => 2675,  6571 => 2674,  6564 => 2671,  6560 => 2669,  6556 => 2667,  6554 => 2666,  6551 => 2665,  6547 => 2663,  6545 => 2662,  6542 => 2661,  6538 => 2659,  6536 => 2658,  6533 => 2657,  6531 => 2656,  6525 => 2654,  6521 => 2652,  6517 => 2650,  6514 => 2649,  6510 => 2647,  6508 => 2646,  6505 => 2645,  6501 => 2643,  6499 => 2642,  6494 => 2639,  6488 => 2638,  6484 => 2636,  6478 => 2634,  6475 => 2633,  6469 => 2630,  6463 => 2628,  6460 => 2627,  6454 => 2625,  6452 => 2624,  6448 => 2623,  6444 => 2622,  6440 => 2621,  6436 => 2620,  6431 => 2619,  6425 => 2617,  6423 => 2616,  6418 => 2615,  6412 => 2613,  6410 => 2612,  6407 => 2611,  6404 => 2610,  6399 => 2609,  6390 => 2605,  6387 => 2604,  6382 => 2602,  6379 => 2601,  6374 => 2599,  6371 => 2598,  6368 => 2597,  6366 => 2596,  6363 => 2595,  6358 => 2593,  6355 => 2592,  6350 => 2590,  6347 => 2589,  6344 => 2588,  6342 => 2587,  6339 => 2586,  6334 => 2584,  6331 => 2583,  6326 => 2581,  6323 => 2580,  6320 => 2579,  6317 => 2578,  6312 => 2576,  6309 => 2575,  6304 => 2573,  6301 => 2572,  6298 => 2571,  6296 => 2570,  6293 => 2569,  6287 => 2568,  6282 => 2565,  6275 => 2563,  6269 => 2560,  6261 => 2558,  6258 => 2557,  6252 => 2555,  6250 => 2554,  6246 => 2553,  6242 => 2552,  6238 => 2551,  6233 => 2549,  6228 => 2548,  6222 => 2546,  6220 => 2545,  6215 => 2544,  6209 => 2542,  6207 => 2541,  6204 => 2540,  6201 => 2539,  6197 => 2538,  6194 => 2537,  6192 => 2536,  6189 => 2535,  6183 => 2533,  6177 => 2531,  6174 => 2530,  6172 => 2529,  6166 => 2527,  6160 => 2525,  6157 => 2524,  6155 => 2523,  6149 => 2521,  6143 => 2519,  6140 => 2518,  6138 => 2517,  6132 => 2515,  6126 => 2513,  6123 => 2512,  6121 => 2511,  6118 => 2510,  6114 => 2509,  6109 => 2506,  6105 => 2504,  6103 => 2503,  6098 => 2500,  6094 => 2498,  6091 => 2497,  6085 => 2493,  6079 => 2489,  6076 => 2488,  6072 => 2486,  6070 => 2485,  6059 => 2477,  6055 => 2476,  6047 => 2471,  6037 => 2463,  6031 => 2461,  6029 => 2460,  6026 => 2459,  6020 => 2457,  6018 => 2456,  6015 => 2455,  6009 => 2453,  6007 => 2452,  6002 => 2450,  5996 => 2447,  5991 => 2444,  5989 => 2443,  5983 => 2439,  5978 => 2437,  5974 => 2435,  5972 => 2434,  5964 => 2431,  5953 => 2423,  5949 => 2422,  5942 => 2418,  5936 => 2415,  5931 => 2413,  5925 => 2410,  5916 => 2404,  5909 => 2400,  5901 => 2395,  5897 => 2394,  5890 => 2390,  5886 => 2389,  5879 => 2385,  5875 => 2384,  5868 => 2380,  5864 => 2379,  5857 => 2374,  5851 => 2372,  5848 => 2371,  5842 => 2369,  5839 => 2368,  5833 => 2366,  5831 => 2365,  5826 => 2363,  5818 => 2358,  5811 => 2354,  5807 => 2353,  5802 => 2351,  5791 => 2343,  5776 => 2331,  5770 => 2328,  5760 => 2320,  5754 => 2318,  5752 => 2317,  5749 => 2316,  5743 => 2314,  5741 => 2313,  5738 => 2312,  5732 => 2310,  5730 => 2309,  5726 => 2308,  5720 => 2305,  5715 => 2302,  5713 => 2301,  5707 => 2297,  5702 => 2295,  5697 => 2292,  5695 => 2291,  5687 => 2288,  5678 => 2282,  5674 => 2281,  5671 => 2280,  5665 => 2276,  5659 => 2272,  5657 => 2271,  5654 => 2270,  5650 => 2268,  5648 => 2267,  5645 => 2266,  5641 => 2264,  5639 => 2263,  5631 => 2259,  5621 => 2257,  5616 => 2256,  5606 => 2254,  5601 => 2253,  5598 => 2252,  5594 => 2250,  5592 => 2249,  5589 => 2248,  5585 => 2246,  5583 => 2245,  5580 => 2244,  5573 => 2241,  5564 => 2239,  5561 => 2238,  5552 => 2236,  5549 => 2235,  5547 => 2234,  5544 => 2233,  5540 => 2231,  5538 => 2230,  5535 => 2229,  5531 => 2227,  5529 => 2226,  5526 => 2225,  5524 => 2224,  5517 => 2221,  5513 => 2219,  5509 => 2217,  5507 => 2216,  5504 => 2215,  5500 => 2213,  5498 => 2212,  5495 => 2211,  5491 => 2209,  5489 => 2208,  5482 => 2204,  5479 => 2203,  5476 => 2202,  5471 => 2199,  5466 => 2196,  5463 => 2195,  5461 => 2194,  5458 => 2193,  5455 => 2192,  5450 => 2189,  5445 => 2186,  5442 => 2185,  5440 => 2184,  5437 => 2183,  5433 => 2181,  5431 => 2180,  5423 => 2176,  5419 => 2174,  5415 => 2172,  5412 => 2171,  5408 => 2169,  5406 => 2168,  5403 => 2167,  5399 => 2165,  5397 => 2164,  5389 => 2160,  5385 => 2158,  5381 => 2156,  5378 => 2155,  5374 => 2153,  5372 => 2152,  5369 => 2151,  5365 => 2149,  5363 => 2148,  5355 => 2144,  5351 => 2142,  5347 => 2140,  5344 => 2139,  5340 => 2137,  5338 => 2136,  5335 => 2135,  5331 => 2133,  5329 => 2132,  5326 => 2131,  5319 => 2128,  5315 => 2126,  5311 => 2124,  5309 => 2123,  5306 => 2122,  5302 => 2120,  5300 => 2119,  5297 => 2118,  5293 => 2116,  5291 => 2115,  5288 => 2114,  5286 => 2113,  5283 => 2112,  5277 => 2111,  5273 => 2109,  5267 => 2107,  5264 => 2106,  5258 => 2103,  5252 => 2101,  5249 => 2100,  5243 => 2098,  5241 => 2097,  5237 => 2096,  5233 => 2095,  5229 => 2094,  5225 => 2093,  5220 => 2092,  5214 => 2090,  5212 => 2089,  5207 => 2088,  5201 => 2086,  5199 => 2085,  5196 => 2084,  5193 => 2083,  5188 => 2082,  5179 => 2078,  5176 => 2077,  5171 => 2075,  5168 => 2074,  5163 => 2072,  5160 => 2071,  5157 => 2070,  5155 => 2069,  5152 => 2068,  5147 => 2066,  5144 => 2065,  5139 => 2063,  5136 => 2062,  5133 => 2061,  5131 => 2060,  5128 => 2059,  5123 => 2057,  5120 => 2056,  5115 => 2054,  5112 => 2053,  5109 => 2052,  5106 => 2051,  5101 => 2049,  5098 => 2048,  5093 => 2046,  5090 => 2045,  5087 => 2044,  5085 => 2043,  5082 => 2042,  5076 => 2041,  5071 => 2038,  5064 => 2036,  5058 => 2033,  5050 => 2031,  5047 => 2030,  5041 => 2028,  5039 => 2027,  5035 => 2026,  5031 => 2025,  5027 => 2024,  5022 => 2022,  5017 => 2021,  5011 => 2019,  5009 => 2018,  5004 => 2017,  4998 => 2015,  4996 => 2014,  4993 => 2013,  4990 => 2012,  4986 => 2011,  4983 => 2010,  4981 => 2009,  4978 => 2008,  4972 => 2006,  4966 => 2004,  4963 => 2003,  4961 => 2002,  4955 => 2000,  4949 => 1998,  4946 => 1997,  4944 => 1996,  4938 => 1994,  4932 => 1992,  4929 => 1991,  4927 => 1990,  4921 => 1988,  4915 => 1986,  4912 => 1985,  4910 => 1984,  4907 => 1983,  4903 => 1982,  4897 => 1978,  4893 => 1976,  4891 => 1975,  4886 => 1972,  4882 => 1970,  4879 => 1969,  4873 => 1965,  4867 => 1961,  4864 => 1960,  4860 => 1958,  4858 => 1957,  4847 => 1949,  4843 => 1948,  4835 => 1943,  4825 => 1935,  4819 => 1933,  4817 => 1932,  4814 => 1931,  4808 => 1929,  4806 => 1928,  4803 => 1927,  4797 => 1925,  4795 => 1924,  4790 => 1922,  4784 => 1919,  4779 => 1916,  4777 => 1915,  4771 => 1911,  4766 => 1909,  4762 => 1907,  4759 => 1906,  4750 => 1902,  4746 => 1900,  4743 => 1899,  4727 => 1885,  4724 => 1884,  4717 => 1880,  4713 => 1879,  4697 => 1866,  4692 => 1865,  4686 => 1863,  4684 => 1862,  4680 => 1861,  4672 => 1856,  4669 => 1855,  4664 => 1852,  4662 => 1851,  4656 => 1847,  4649 => 1843,  4644 => 1842,  4638 => 1840,  4636 => 1839,  4632 => 1838,  4624 => 1833,  4621 => 1832,  4616 => 1829,  4614 => 1828,  4608 => 1824,  4605 => 1823,  4602 => 1822,  4595 => 1818,  4590 => 1817,  4584 => 1815,  4582 => 1814,  4578 => 1813,  4570 => 1808,  4567 => 1807,  4562 => 1804,  4560 => 1803,  4554 => 1799,  4547 => 1795,  4543 => 1794,  4535 => 1788,  4532 => 1787,  4530 => 1786,  4526 => 1784,  4523 => 1783,  4520 => 1782,  4517 => 1781,  4514 => 1780,  4511 => 1779,  4505 => 1778,  4500 => 1775,  4498 => 1774,  4494 => 1773,  4487 => 1769,  4483 => 1768,  4480 => 1767,  4477 => 1766,  4472 => 1765,  4470 => 1764,  4464 => 1760,  4461 => 1759,  4458 => 1758,  4452 => 1757,  4447 => 1754,  4445 => 1753,  4441 => 1752,  4434 => 1748,  4430 => 1747,  4427 => 1746,  4424 => 1745,  4419 => 1744,  4417 => 1743,  4411 => 1739,  4408 => 1738,  4405 => 1737,  4402 => 1736,  4399 => 1735,  4393 => 1734,  4388 => 1731,  4386 => 1730,  4382 => 1729,  4375 => 1725,  4371 => 1724,  4368 => 1723,  4365 => 1722,  4360 => 1721,  4358 => 1720,  4352 => 1716,  4349 => 1715,  4346 => 1714,  4340 => 1713,  4335 => 1710,  4333 => 1709,  4329 => 1708,  4322 => 1704,  4318 => 1703,  4315 => 1702,  4312 => 1701,  4307 => 1700,  4305 => 1699,  4298 => 1694,  4295 => 1693,  4292 => 1692,  4289 => 1691,  4286 => 1690,  4284 => 1689,  4281 => 1688,  4275 => 1687,  4271 => 1685,  4268 => 1684,  4262 => 1682,  4259 => 1681,  4253 => 1679,  4250 => 1678,  4244 => 1676,  4242 => 1675,  4238 => 1674,  4233 => 1673,  4230 => 1672,  4225 => 1670,  4219 => 1668,  4216 => 1667,  4213 => 1666,  4208 => 1664,  4202 => 1662,  4197 => 1660,  4192 => 1658,  4188 => 1657,  4184 => 1656,  4180 => 1655,  4175 => 1653,  4170 => 1651,  4164 => 1649,  4161 => 1648,  4158 => 1647,  4153 => 1645,  4149 => 1644,  4144 => 1642,  4139 => 1640,  4134 => 1638,  4128 => 1636,  4126 => 1635,  4121 => 1633,  4116 => 1632,  4110 => 1630,  4108 => 1629,  4105 => 1628,  4102 => 1627,  4098 => 1626,  4095 => 1625,  4086 => 1621,  4080 => 1618,  4077 => 1617,  4074 => 1616,  4068 => 1613,  4065 => 1612,  4062 => 1611,  4056 => 1608,  4053 => 1607,  4050 => 1606,  4044 => 1603,  4041 => 1602,  4039 => 1601,  4035 => 1599,  4027 => 1596,  4024 => 1595,  4017 => 1593,  4009 => 1591,  4006 => 1590,  4000 => 1588,  3998 => 1587,  3993 => 1585,  3989 => 1584,  3986 => 1583,  3984 => 1582,  3980 => 1581,  3976 => 1580,  3972 => 1579,  3967 => 1578,  3961 => 1576,  3959 => 1575,  3956 => 1574,  3952 => 1573,  3949 => 1572,  3947 => 1571,  3942 => 1568,  3936 => 1566,  3933 => 1565,  3928 => 1563,  3923 => 1562,  3920 => 1561,  3914 => 1559,  3911 => 1558,  3906 => 1556,  3901 => 1555,  3899 => 1554,  3896 => 1553,  3892 => 1552,  3885 => 1547,  3881 => 1545,  3879 => 1544,  3876 => 1543,  3872 => 1541,  3869 => 1540,  3866 => 1539,  3862 => 1537,  3855 => 1532,  3852 => 1531,  3849 => 1530,  3843 => 1526,  3840 => 1525,  3836 => 1523,  3834 => 1522,  3827 => 1517,  3823 => 1515,  3821 => 1514,  3811 => 1507,  3808 => 1506,  3803 => 1505,  3798 => 1504,  3794 => 1503,  3788 => 1499,  3785 => 1498,  3782 => 1497,  3778 => 1495,  3772 => 1493,  3769 => 1492,  3766 => 1491,  3764 => 1490,  3760 => 1488,  3754 => 1486,  3752 => 1485,  3749 => 1484,  3741 => 1482,  3739 => 1481,  3735 => 1480,  3731 => 1479,  3726 => 1476,  3722 => 1474,  3720 => 1473,  3717 => 1472,  3713 => 1470,  3711 => 1469,  3707 => 1467,  3703 => 1465,  3701 => 1464,  3698 => 1463,  3694 => 1461,  3690 => 1459,  3688 => 1458,  3680 => 1452,  3676 => 1450,  3673 => 1449,  3669 => 1447,  3666 => 1446,  3662 => 1444,  3659 => 1443,  3655 => 1441,  3652 => 1440,  3648 => 1438,  3645 => 1437,  3641 => 1435,  3639 => 1434,  3629 => 1427,  3625 => 1426,  3619 => 1423,  3615 => 1421,  3613 => 1420,  3609 => 1418,  3606 => 1417,  3601 => 1415,  3597 => 1413,  3595 => 1412,  3587 => 1409,  3581 => 1405,  3578 => 1404,  3574 => 1402,  3571 => 1401,  3565 => 1400,  3559 => 1399,  3553 => 1396,  3549 => 1395,  3545 => 1394,  3541 => 1393,  3537 => 1392,  3533 => 1391,  3530 => 1390,  3527 => 1389,  3523 => 1388,  3507 => 1375,  3503 => 1374,  3499 => 1373,  3494 => 1371,  3489 => 1369,  3486 => 1368,  3481 => 1367,  3475 => 1366,  3469 => 1365,  3463 => 1362,  3459 => 1361,  3455 => 1360,  3451 => 1359,  3447 => 1358,  3443 => 1357,  3440 => 1356,  3437 => 1355,  3433 => 1354,  3417 => 1341,  3413 => 1340,  3409 => 1339,  3404 => 1337,  3399 => 1335,  3396 => 1334,  3392 => 1333,  3379 => 1322,  3376 => 1321,  3370 => 1318,  3365 => 1317,  3359 => 1313,  3353 => 1309,  3351 => 1308,  3348 => 1307,  3344 => 1305,  3342 => 1304,  3339 => 1303,  3335 => 1301,  3333 => 1300,  3330 => 1299,  3323 => 1296,  3319 => 1294,  3313 => 1292,  3310 => 1291,  3304 => 1289,  3301 => 1288,  3295 => 1286,  3293 => 1285,  3290 => 1284,  3286 => 1282,  3280 => 1280,  3277 => 1279,  3271 => 1277,  3268 => 1276,  3262 => 1274,  3260 => 1273,  3257 => 1272,  3255 => 1271,  3252 => 1270,  3248 => 1268,  3246 => 1267,  3243 => 1266,  3239 => 1264,  3237 => 1263,  3234 => 1262,  3231 => 1261,  3224 => 1258,  3215 => 1256,  3212 => 1255,  3203 => 1253,  3200 => 1252,  3198 => 1251,  3195 => 1250,  3191 => 1248,  3189 => 1247,  3186 => 1246,  3182 => 1244,  3180 => 1243,  3177 => 1242,  3174 => 1241,  3167 => 1238,  3162 => 1236,  3159 => 1235,  3154 => 1233,  3151 => 1232,  3149 => 1231,  3146 => 1230,  3142 => 1228,  3140 => 1227,  3137 => 1226,  3133 => 1224,  3131 => 1223,  3125 => 1220,  3122 => 1219,  3119 => 1218,  3116 => 1217,  3111 => 1214,  3106 => 1211,  3103 => 1210,  3099 => 1208,  3096 => 1207,  3093 => 1206,  3090 => 1205,  3085 => 1202,  3080 => 1199,  3077 => 1198,  3073 => 1196,  3070 => 1195,  3068 => 1194,  3065 => 1193,  3061 => 1191,  3059 => 1190,  3056 => 1189,  3052 => 1187,  3050 => 1186,  3047 => 1185,  3044 => 1184,  3037 => 1181,  3033 => 1179,  3029 => 1177,  3027 => 1176,  3024 => 1175,  3020 => 1173,  3018 => 1172,  3015 => 1171,  3011 => 1169,  3009 => 1168,  3006 => 1167,  3004 => 1166,  3001 => 1165,  2995 => 1163,  2989 => 1161,  2986 => 1160,  2983 => 1159,  2980 => 1158,  2976 => 1156,  2972 => 1154,  2969 => 1153,  2965 => 1151,  2962 => 1150,  2959 => 1149,  2956 => 1148,  2952 => 1146,  2948 => 1144,  2945 => 1143,  2941 => 1141,  2938 => 1140,  2936 => 1139,  2933 => 1138,  2929 => 1136,  2927 => 1135,  2924 => 1134,  2920 => 1132,  2918 => 1131,  2915 => 1130,  2909 => 1129,  2905 => 1127,  2899 => 1125,  2896 => 1124,  2890 => 1121,  2884 => 1119,  2881 => 1118,  2875 => 1116,  2873 => 1115,  2869 => 1114,  2865 => 1113,  2861 => 1112,  2857 => 1111,  2852 => 1110,  2846 => 1108,  2844 => 1107,  2839 => 1106,  2833 => 1104,  2831 => 1103,  2828 => 1102,  2825 => 1101,  2820 => 1100,  2811 => 1096,  2808 => 1095,  2803 => 1093,  2800 => 1092,  2795 => 1090,  2792 => 1089,  2789 => 1088,  2787 => 1087,  2784 => 1086,  2779 => 1084,  2776 => 1083,  2771 => 1081,  2768 => 1080,  2765 => 1079,  2763 => 1078,  2760 => 1077,  2755 => 1075,  2752 => 1074,  2747 => 1072,  2744 => 1071,  2741 => 1070,  2738 => 1069,  2733 => 1067,  2730 => 1066,  2725 => 1064,  2722 => 1063,  2719 => 1062,  2717 => 1061,  2713 => 1059,  2705 => 1056,  2698 => 1054,  2692 => 1051,  2684 => 1049,  2681 => 1048,  2675 => 1046,  2673 => 1045,  2669 => 1044,  2665 => 1043,  2661 => 1042,  2657 => 1041,  2652 => 1040,  2646 => 1038,  2644 => 1037,  2639 => 1036,  2633 => 1034,  2631 => 1033,  2628 => 1032,  2624 => 1031,  2621 => 1030,  2619 => 1029,  2616 => 1028,  2610 => 1026,  2604 => 1024,  2601 => 1023,  2599 => 1022,  2593 => 1020,  2587 => 1018,  2584 => 1017,  2582 => 1016,  2576 => 1014,  2570 => 1012,  2567 => 1011,  2565 => 1010,  2559 => 1008,  2553 => 1006,  2550 => 1005,  2548 => 1004,  2545 => 1003,  2541 => 1002,  2537 => 1000,  2533 => 998,  2531 => 997,  2526 => 994,  2522 => 992,  2520 => 991,  2515 => 988,  2511 => 986,  2509 => 985,  2506 => 984,  2504 => 983,  2494 => 976,  2490 => 975,  2486 => 974,  2482 => 973,  2474 => 968,  2468 => 965,  2464 => 964,  2460 => 963,  2455 => 961,  2449 => 957,  2446 => 956,  2442 => 954,  2439 => 953,  2433 => 952,  2427 => 951,  2421 => 948,  2417 => 947,  2413 => 946,  2409 => 945,  2405 => 944,  2401 => 943,  2398 => 942,  2395 => 941,  2391 => 940,  2375 => 927,  2371 => 926,  2367 => 925,  2362 => 923,  2357 => 921,  2354 => 920,  2349 => 919,  2343 => 918,  2337 => 917,  2331 => 914,  2327 => 913,  2323 => 912,  2319 => 911,  2315 => 910,  2311 => 909,  2308 => 908,  2305 => 907,  2301 => 906,  2285 => 893,  2281 => 892,  2277 => 891,  2272 => 889,  2267 => 887,  2264 => 886,  2260 => 885,  2247 => 874,  2244 => 873,  2238 => 870,  2233 => 869,  2227 => 865,  2221 => 861,  2219 => 860,  2216 => 859,  2212 => 857,  2210 => 856,  2207 => 855,  2203 => 853,  2201 => 852,  2198 => 851,  2191 => 848,  2187 => 846,  2181 => 844,  2178 => 843,  2172 => 841,  2169 => 840,  2163 => 838,  2161 => 837,  2158 => 836,  2154 => 834,  2148 => 832,  2145 => 831,  2139 => 829,  2136 => 828,  2130 => 826,  2128 => 825,  2125 => 824,  2123 => 823,  2120 => 822,  2116 => 820,  2114 => 819,  2111 => 818,  2107 => 816,  2105 => 815,  2102 => 814,  2099 => 813,  2092 => 810,  2083 => 808,  2080 => 807,  2071 => 805,  2068 => 804,  2066 => 803,  2063 => 802,  2059 => 800,  2057 => 799,  2054 => 798,  2050 => 796,  2048 => 795,  2045 => 794,  2042 => 793,  2035 => 790,  2030 => 788,  2027 => 787,  2022 => 785,  2019 => 784,  2017 => 783,  2014 => 782,  2010 => 780,  2008 => 779,  2005 => 778,  2001 => 776,  1999 => 775,  1993 => 772,  1990 => 771,  1987 => 770,  1984 => 769,  1979 => 766,  1974 => 763,  1971 => 762,  1967 => 760,  1964 => 759,  1961 => 758,  1958 => 757,  1953 => 754,  1948 => 751,  1945 => 750,  1941 => 748,  1938 => 747,  1936 => 746,  1933 => 745,  1929 => 743,  1927 => 742,  1924 => 741,  1920 => 739,  1918 => 738,  1915 => 737,  1912 => 736,  1905 => 733,  1901 => 731,  1897 => 729,  1895 => 728,  1892 => 727,  1888 => 725,  1886 => 724,  1883 => 723,  1879 => 721,  1877 => 720,  1874 => 719,  1872 => 718,  1869 => 717,  1863 => 715,  1857 => 713,  1854 => 712,  1851 => 711,  1848 => 710,  1844 => 708,  1840 => 706,  1837 => 705,  1833 => 703,  1830 => 702,  1827 => 701,  1824 => 700,  1820 => 698,  1816 => 696,  1813 => 695,  1809 => 693,  1806 => 692,  1804 => 691,  1801 => 690,  1797 => 688,  1795 => 687,  1792 => 686,  1788 => 684,  1786 => 683,  1783 => 682,  1777 => 681,  1773 => 679,  1767 => 677,  1764 => 676,  1758 => 673,  1752 => 671,  1749 => 670,  1743 => 668,  1741 => 667,  1737 => 666,  1733 => 665,  1729 => 664,  1725 => 663,  1720 => 662,  1714 => 660,  1712 => 659,  1707 => 658,  1701 => 656,  1699 => 655,  1696 => 654,  1693 => 653,  1688 => 652,  1679 => 648,  1676 => 647,  1671 => 645,  1668 => 644,  1663 => 642,  1660 => 641,  1657 => 640,  1655 => 639,  1652 => 638,  1647 => 636,  1644 => 635,  1639 => 633,  1636 => 632,  1633 => 631,  1631 => 630,  1628 => 629,  1623 => 627,  1620 => 626,  1615 => 624,  1612 => 623,  1609 => 622,  1606 => 621,  1601 => 619,  1598 => 618,  1593 => 616,  1590 => 615,  1587 => 614,  1585 => 613,  1581 => 611,  1573 => 608,  1566 => 606,  1560 => 603,  1552 => 601,  1549 => 600,  1543 => 598,  1541 => 597,  1537 => 596,  1533 => 595,  1529 => 594,  1525 => 593,  1520 => 592,  1514 => 590,  1512 => 589,  1507 => 588,  1501 => 586,  1499 => 585,  1496 => 584,  1492 => 583,  1489 => 582,  1487 => 581,  1484 => 580,  1478 => 578,  1472 => 576,  1469 => 575,  1467 => 574,  1461 => 572,  1455 => 570,  1452 => 569,  1450 => 568,  1444 => 566,  1438 => 564,  1435 => 563,  1433 => 562,  1427 => 560,  1421 => 558,  1418 => 557,  1416 => 556,  1413 => 555,  1409 => 554,  1405 => 552,  1401 => 550,  1399 => 549,  1394 => 546,  1390 => 544,  1388 => 543,  1383 => 540,  1379 => 538,  1377 => 537,  1374 => 536,  1372 => 535,  1361 => 527,  1357 => 526,  1353 => 525,  1349 => 524,  1345 => 523,  1339 => 520,  1335 => 519,  1331 => 518,  1326 => 516,  1321 => 514,  1314 => 509,  1311 => 508,  1307 => 506,  1304 => 505,  1298 => 504,  1292 => 503,  1286 => 500,  1282 => 499,  1278 => 498,  1274 => 497,  1270 => 496,  1266 => 495,  1263 => 494,  1260 => 493,  1256 => 492,  1240 => 479,  1236 => 478,  1232 => 477,  1227 => 475,  1222 => 473,  1219 => 472,  1214 => 471,  1208 => 470,  1202 => 469,  1196 => 466,  1192 => 465,  1188 => 464,  1184 => 463,  1180 => 462,  1176 => 461,  1173 => 460,  1170 => 459,  1166 => 458,  1150 => 445,  1146 => 444,  1142 => 443,  1137 => 441,  1132 => 439,  1129 => 438,  1125 => 437,  1112 => 426,  1110 => 425,  1107 => 424,  1101 => 421,  1096 => 420,  1090 => 416,  1084 => 412,  1082 => 411,  1079 => 410,  1075 => 408,  1073 => 407,  1070 => 406,  1066 => 404,  1064 => 403,  1061 => 402,  1054 => 399,  1050 => 397,  1044 => 395,  1041 => 394,  1035 => 392,  1032 => 391,  1026 => 389,  1024 => 388,  1021 => 387,  1017 => 385,  1011 => 383,  1008 => 382,  1002 => 380,  999 => 379,  993 => 377,  991 => 376,  988 => 375,  986 => 374,  983 => 373,  979 => 371,  977 => 370,  974 => 369,  970 => 367,  968 => 366,  965 => 365,  962 => 364,  955 => 361,  946 => 359,  943 => 358,  934 => 356,  931 => 355,  929 => 354,  926 => 353,  922 => 351,  920 => 350,  917 => 349,  913 => 347,  911 => 346,  908 => 345,  905 => 344,  898 => 341,  893 => 339,  890 => 338,  885 => 336,  882 => 335,  880 => 334,  877 => 333,  873 => 331,  871 => 330,  868 => 329,  864 => 327,  862 => 326,  855 => 323,  852 => 322,  849 => 321,  844 => 318,  839 => 315,  836 => 314,  832 => 312,  829 => 311,  826 => 310,  823 => 309,  818 => 306,  813 => 303,  810 => 302,  806 => 300,  803 => 299,  801 => 298,  798 => 297,  794 => 295,  792 => 294,  789 => 293,  785 => 291,  783 => 290,  780 => 289,  778 => 288,  775 => 287,  769 => 285,  763 => 283,  760 => 282,  757 => 281,  754 => 280,  750 => 278,  746 => 276,  743 => 275,  739 => 273,  736 => 272,  733 => 271,  730 => 270,  726 => 268,  722 => 266,  719 => 265,  715 => 263,  712 => 262,  710 => 261,  707 => 260,  703 => 258,  701 => 257,  698 => 256,  694 => 254,  692 => 253,  689 => 252,  682 => 249,  678 => 247,  674 => 245,  672 => 244,  669 => 243,  665 => 241,  663 => 240,  660 => 239,  656 => 237,  654 => 236,  647 => 233,  644 => 232,  641 => 231,  636 => 228,  631 => 225,  628 => 224,  624 => 222,  621 => 221,  618 => 220,  615 => 219,  612 => 218,  607 => 215,  602 => 212,  599 => 211,  596 => 210,  592 => 208,  589 => 207,  587 => 206,  584 => 205,  580 => 203,  578 => 202,  575 => 201,  571 => 199,  569 => 198,  566 => 197,  563 => 196,  557 => 195,  553 => 193,  547 => 191,  544 => 190,  538 => 187,  532 => 185,  529 => 184,  523 => 182,  521 => 181,  517 => 180,  513 => 179,  509 => 178,  505 => 177,  500 => 176,  494 => 174,  492 => 173,  487 => 172,  481 => 170,  479 => 169,  476 => 168,  473 => 167,  468 => 166,  459 => 162,  456 => 161,  451 => 159,  448 => 158,  443 => 156,  440 => 155,  437 => 154,  435 => 153,  432 => 152,  427 => 150,  424 => 149,  419 => 147,  416 => 146,  413 => 145,  411 => 144,  408 => 143,  403 => 141,  400 => 140,  395 => 138,  392 => 137,  389 => 136,  386 => 135,  381 => 133,  378 => 132,  373 => 130,  370 => 129,  367 => 128,  365 => 127,  361 => 125,  353 => 122,  346 => 120,  340 => 117,  332 => 115,  329 => 114,  323 => 112,  321 => 111,  317 => 110,  313 => 109,  309 => 108,  305 => 107,  300 => 106,  294 => 104,  292 => 103,  287 => 102,  281 => 100,  279 => 99,  276 => 98,  272 => 97,  269 => 96,  267 => 95,  264 => 94,  258 => 92,  252 => 90,  249 => 89,  247 => 88,  241 => 86,  235 => 84,  232 => 83,  230 => 82,  224 => 80,  218 => 78,  215 => 77,  213 => 76,  207 => 74,  201 => 72,  198 => 71,  196 => 70,  193 => 69,  189 => 68,  185 => 66,  181 => 64,  179 => 63,  174 => 60,  170 => 58,  168 => 57,  163 => 54,  159 => 52,  157 => 51,  154 => 50,  152 => 49,  142 => 42,  134 => 41,  130 => 39,  125 => 37,  122 => 36,  120 => 35,  116 => 34,  112 => 33,  108 => 31,  103 => 28,  101 => 27,  95 => 23,  91 => 21,  89 => 20,  83 => 16,  77 => 14,  74 => 13,  68 => 11,  66 => 10,  62 => 9,  56 => 5,  54 => 4,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if type == 'devis' %}
    <p style=\"clear: both\"></p>
    <div class=\"bood\">
        {% if devis.modele == 1 %}
            <div>
                <table style=\"line-height: 1.5;float: right;\">
                    <tr>
                        <td style=\"border: none !important;text-align: center;  ;\">
                            <b>{{ devis.client.nomclient|upper }}</b><br>
                            {% if devis.client.adresse  == \" \" %}
                                {{ devis.client.adresse }}<br>
                            {% endif %}
                            {% if devis.client.code is not null %}
                                <b>N° DE CLIENTS:</b> {{ devis.client.code }}
                            {% endif %}
                        </td>
                    </tr>
                </table>
                <p style=\"clear: both\"></p>
                {% if devis.type == \"esti\" %}
                    <h3 class=\"font-bold m-t--10 col-blue\">DEVIS ESTIMATIF</h3>
                {% endif %}
                <table>
                    <tr style=\"background-color: #f8f9fa !important; font-weight: 700;width: 45%\">
                        <td class=\"align-center\">DATE</td>
                        <td class=\"align-center\">N° DEVIS</td>
                        {% if devis.type != \"cps\" %}
                            <td class=\"align-center\">AFFAIRE SUIVIE PAR</td>
                            <td class=\"align-center\">VALIDITÉ</td>
                        {% endif %}
                    </tr>
                    <tr>
                        <td class=\"align-center\">{{ devis.date|date('d/m/Y') }}</td>
                        <td class=\"align-center\">{{ devis.iddevis }}</td>
                        {% if devis.type != \"cps\" %}
                            <td class=\"align-center\"></td>
                            <td class=\"align-center\">{{ devis.validit }}</td>
                        {% endif %}
                    </tr>
                    <tr>
                        <td {% if devis.type != \"cps\" %} colspan=\"4\" {% else %} colspan=\"2\" {% endif %}>
                            <span style=\"text-decoration: underline; line-height: 1.5; font-weight: bold\">RÉFÉRENCE</span><br>{{ devis.devreference|raw }}
                        </td>
                    </tr>
                </table>
            </div>
            <br>
            <table style=\"width: 100%;\">
                {% if devis.type != \"cps\" %}
                    <tr class=\"printer\">
                        {% if devis.aaref == 'oui' %}
                            <th style=\"text-align: center\">RÉF</th>
                        {% endif %}
                        <th style=\"max-width:500px !important; min-width: 250px !important; text-align: left\">
                            DÉSIGNATION
                        </th>
                        {% if devis.zone == 'oui' %}
                            <th style=\"text-align: center\">SECTION</th>
                        {% endif %}
                        <th style=\"text-align: center\">UNITÉ</th>
                        <th style=\"text-align: center\">QTÉ</th>
                        <th style=\"text-align: center\">PRIX&nbsp;U.</th>
                        {% if devis.aarem == 'oui' %}
                            <th style=\" text-align: center\">%REM</th>
                        {% endif %}
                        <th style=\"text-align: center\">MONTANT&nbsp;HT</th>
                    </tr>
                    {% for group in listGroup %}
                        <tr class=\"togo\">
                            {% if devis.zone == 'oui' and devis.aarem == 'oui' %}
                                {% if devis.aaref == 'oui' %}
                                    <td align=\"center\"><b>{{ group.reference }}</b></td>
                                {% endif %}
                                <td COLSPAN=\"7\"><b>{{ group.groupe|striptags|raw }}</b></td>

                            {% elseif devis.zone == 'non' and devis.aarem == 'non' %}
                                {% if devis.aaref == 'oui' %}
                                    <td align=\"center\"><b>{{ group.reference }}</b></td>
                                {% endif %}
                                <td colspan=\"5\"><b>{{ group.groupe|striptags|raw }}</b></td>

                            {% elseif devis.zone == 'oui' and devis.aarem == 'non' %}
                                {% if devis.aaref == 'oui' %}
                                    <td align=\"center\"><b>{{ group.reference }}</b></td>
                                {% endif %}
                                <td colspan=\"6\"><b>{{ group.groupe|striptags|raw }}</b></td>

                            {% elseif devis.aarem == 'oui' and devis.zone == 'non' %}
                                {% if devis.aaref == 'oui' %}
                                    <td align=\"center\"><b>{{ group.reference }}</b></td>
                                {% endif %}
                                <td colspan=\"6\"><b>{{ group.groupe|striptags|raw }}</b></td>
                            {% endif %}
                        </tr>
                        {% set st = 0 %}

                        {% for lign in group.lignes %}
                            <tr>
                                {% if devis.aaref == 'oui' %}
                                    <td style=\"text-align: center\">{{ lign.reference }}</td>
                                {% endif %}
                                <td align=\"left\">{{ lign.designation|raw }}</td>
                                {% if devis.zone == 'oui' %}
                                    <td style=\"text-align: center\">{{ lign.zone }}</td>
                                {% endif %}
                                <td style=\"text-align: center\">{{ lign.unite }}</td>
                                <td style=\"text-align: center\">{{ lign.quantite|number_format(2, ',', ' ') }}<br><span
                                            class=\"hider\">{{ lign.quantite|number_format(6, ',', '.') }}</span></td>
                                <td style=\"text-align: right\">{{ lign.pu|number_format(2, ',', ' ') }}<br><span
                                            class=\"hider\">{{ lign.pu|number_format(5, ',', '.') }}</span></td>
                                {% if devis.aarem == 'oui' %}
                                    <td style=\"text-align: center\">{{ lign.remise }}%</td>
                                {% endif %}
                                {% if devis.aarem == 'non' %}
                                    <td style=\"text-align: right\">{% set st = (lign.pu * lign.quantite) + st %} {{ (lign.pu * lign.quantite)|number_format(2, ',', ' ') }}
                                        <br><span
                                                class=\"hider\">{{ (lign.pu * lign.quantite)|number_format(4, ',', '.') }}</span>
                                    </td>
                                {% else %}
                                    <td style=\"text-align: right\">{% set st = ((lign.pu * lign.quantite)*((100 - lign.remise)/100)) + st %}{{ ((lign.pu * lign.quantite)*((100 - lign.remise)/100))|number_format(2, ',', ' ') }}</td>
                                {% endif %}
                                </td>
                            </tr>
                        {% endfor %}

                        <tr class=\"togo\">
                            {% if devis.zone == 'oui' and devis.aarem == 'oui' %}
                                {% if devis.aaref == 'oui' %}
                                    <td COLSPAN=\"8\" align=\"right\">
                                        <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b></td>
                                {% else %}
                                    <td COLSPAN=\"7\" align=\"right\">
                                        <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b></td>
                                {% endif %}
                            {% elseif devis.zone == 'non' and devis.aarem == 'non' %}
                                {% if devis.aaref == 'oui' %}
                                    <td COLSPAN=\"6\" align=\"right\">
                                        <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b></td>
                                {% else %}
                                    <td COLSPAN=\"5\" align=\"right\">
                                        <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b></td>
                                {% endif %}

                            {% elseif devis.zone == 'oui' and devis.aarem == 'non' %}
                                {% if devis.aaref == 'oui' %}
                                    <td COLSPAN=\"7\" align=\"right\">
                                        <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b></td>
                                {% else %}
                                    <td COLSPAN=\"6\" align=\"right\">
                                        <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b></td>
                                {% endif %}

                            {% elseif devis.aarem == 'oui' and devis.zone == 'non' %}
                                {% if devis.aaref == 'oui' %}
                                    <td COLSPAN=\"7\" align=\"right\">
                                        <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b></td>
                                {% else %}
                                    <td COLSPAN=\"6\" align=\"right\">
                                        <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b></td>
                                {% endif %}
                            {% endif %}

                        </tr>

                    {% endfor %}
                    {% for lign in lignes %}
                        {% if lign.groupe == null %}
                            <tr>
                                {% if devis.aaref == 'oui' %}
                                    <td style=\"text-align: center\">{{ lign.reference }}</td>
                                {% endif %}
                                <td>{{ lign.designation|raw }}</td>
                                {% if devis.zone == 'oui' %}
                                    <td style=\"text-align: center\">{{ lign.zone }}</td>
                                {% endif %}
                                <td style=\"text-align: center\">{{ lign.unite }}</td>
                                <td style=\"text-align: center\">{{ lign.quantite|number_format(2, ',', ' ') }}<br><span
                                            class=\"hider\">{{ lign.quantite|number_format(6, ',', ' ') }}</span></td>
                                <td style=\"text-align: right\">{{ lign.pu|number_format(2, ',', ' ') }}<br><span
                                            class=\"hider\">{{ lign.pu|number_format(4, ',', '.') }}</span></td>
                                {% if devis.aarem == 'oui' %}
                                    <td style=\"text-align: center\">{{ lign.remise }}%</td>
                                {% endif %}
                                {% if devis.aarem == 'non' %}
                                    <td style=\"text-align: right\">{{ (lign.pu * lign.quantite)|number_format(2, ',', ' ') }}
                                        <br><span
                                                class=\"hider\">{{ (lign.pu * lign.quantite)|number_format(4, ',', '.') }}</span>
                                    </td>
                                {% endif %}
                                {% if devis.aarem != 'non' %}
                                    <td style=\"text-align: right\">{{ ((lign.pu * lign.quantite)*((100 - lign.remise)/100))|number_format(2, ',', ' ') }}</td>
                                {% endif %}
                            </tr>
                        {% endif %}
                    {% endfor %}
                    {% if devis.aarem == 'oui' %}
                        <tr>
                            {% if devis.aaref == 'oui' %}
                                <td class=\"bord\"></td>
                            {% endif %}
                            <td class=\"bord\"></td>
                            {% if devis.zone == 'oui' %}
                                <td class=\"bord\"></td>
                            {% endif %}
                            <td class=\"bord\"></td>
                            {% if devis.aarem == 'oui' %}
                                {% if devis.ptva == 'oui' or devis.ptva == 'susp' %}
                                    <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT SANS REMISE</b></td>
                                {% else %}
                                    {% if devis.ptva == 'oui' or devis.ptva == 'susp' %}
                                        {% if devis.model == 1 %}
                                            <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT SANS REMISE</b>
                                            </td>
                                        {% else %}
                                            <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT SANS REMISE</b>
                                            </td>
                                        {% endif %}
                                    {% endif %}
                                {% endif %}
                            {% else %}
                                {% if devis.ptva == 'oui' or devis.ptva == 'susp' %}
                                    <td colspan=\"2\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT SANS REMISE</b></td>
                                {% else %}
                                    {% if devis.model == 1 %}
                                        <td colspan=\"2\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT SANS REMISE</b>
                                        </td>
                                    {% else %}
                                        <td colspan=\"2\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT SANS REMISE</b>
                                        </td>
                                    {% endif %}
                                {% endif %}
                            {% endif %}
                            <td style=\"text-align: right\">{{ (devis.totalht + devis.vremise)|number_format(2, ',', ' ') }}</td>
                        </tr>
                        <tr>
                            {% if devis.aaref == 'oui' %}
                                <td class=\"bord\"></td>
                            {% endif %}
                            <td class=\"bord\"></td>
                            {% if devis.zone == 'oui' %}
                                <td class=\"bord\"></td>
                            {% endif %}
                            <td class=\"bord\"></td>
                            {% if devis.aarem == 'oui' %}
                                <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>REMISE</b></td>
                            {% else %}
                                <td class=\"bord\" colspan=\"2\" style=\"text-align: right;\"><b>REMISE</b></td>
                            {% endif %}
                            <td style=\"text-align: right\">{{ devis.vremise|number_format(2, ',', ' ') }}</td>
                        </tr>
                    {% endif %}
                    <tr>
                        {% if devis.aaref == 'oui' %}
                            <td class=\"bord\"></td>
                        {% endif %}
                        <td class=\"bord\"></td>
                        {% if devis.zone == 'oui' %}
                            <td class=\"bord\"></td>
                        {% endif %}
                        <td class=\"bord\"></td>
                        {% if devis.aarem == 'oui' %}
                            {% if devis.ptva == 'oui' or devis.ptva == 'susp' %}
                                <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT</b></td>
                            {% else %}
                                {% if devis.model == 1 %}
                                    <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT</b></td>
                                {% else %}
                                    <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL TTC</b></td>
                                {% endif %}
                            {% endif %}
                        {% else %}
                            {% if devis.ptva == 'oui' or devis.ptva == 'susp' %}
                                <td colspan=\"2\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT</b></td>
                            {% else %}
                                {% if devis.model == 1 %}
                                    <td colspan=\"2\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT</b></td>
                                {% else %}
                                    <td colspan=\"2\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL TTC</b></td>
                                {% endif %}
                            {% endif %}
                        {% endif %}
                        {% if devis.aarem == 'tht' %}
                            <td style=\"text-align: right\">{{ (devis.totalht + devis.vremise)|number_format(2, ',', ' ') }}</td>
                        {% else %}
                            <td style=\"text-align: right\">{{ devis.totalht|number_format(2, ',', ' ') }}</td>
                        {% endif %}
                    </tr>
                    {% if devis.aarem == 'tht' %}
                        <tr>
                            {% if devis.aaref == 'oui' %}
                                <td class=\"bord\"></td>
                            {% endif %}
                            <td class=\"bord\"></td>
                            {% if devis.zone == 'oui' %}
                                <td class=\"bord\"></td>
                            {% endif %}
                            <td class=\"bord\"></td>
                            {% if devis.aarem == 'oui' %}
                                {% if devis.ptva == 'oui' or devis.ptva == 'susp' %}
                                    <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT REMISÉ</b></td>
                                {% else %}
                                    {% if devis.model == 1 %}
                                        <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT REMISÉ</b>
                                        </td>
                                    {% else %}
                                        <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL TTC REMISÉ</b>
                                        </td>
                                    {% endif %}
                                {% endif %}
                            {% else %}
                                {% if devis.ptva == 'oui' or devis.ptva == 'susp' %}
                                    <td colspan=\"2\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT REMISÉ</b></td>
                                {% else %}
                                    {% if devis.model == 1 %}
                                        <td colspan=\"2\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT REMISÉ</b>
                                        </td>
                                    {% else %}
                                        <td colspan=\"2\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL TTC REMISÉ</b>
                                        </td>
                                    {% endif %}
                                {% endif %}
                            {% endif %}
                            <td style=\"text-align: right\">{{ devis.totalht|number_format(2, ',', ' ') }}</td>
                        </tr>
                        <tr>
                            {% if devis.aaref == 'oui' %}
                                <td class=\"bord\"></td>
                            {% endif %}
                            <td class=\"bord\"></td>
                            {% if devis.zone == 'oui' %}
                                <td class=\"bord\"></td>
                            {% endif %}
                            <td class=\"bord\"></td>
                            {% if devis.aarem == 'oui' %}
                                <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\">
                                    <b>REMISE {{ devis.remtht|number_format(0, ',', ' ') }}%</b></td>
                            {% else %}
                                <td class=\"bord\" colspan=\"2\" style=\"text-align: right;\">
                                    <b>REMISE {{ devis.remtht|number_format(0, ',', ' ') }}% </b></td>
                            {% endif %}
                            <td align=\"right\">{{ devis.vremise|number_format(2, ',', ' ') }}</td>
                        </tr>
                    {% endif %}
                    {% if devis.abasetva == 'oui' %}
                        <tr>
                            {% if devis.aaref == 'oui' %}
                                <td class=\"bord\"></td>
                            {% endif %}
                            <td class=\"bord\"></td>
                            {% if devis.zone == 'oui' %}
                                <td class=\"bord\"></td>
                            {% endif %}
                            <td class=\"bord\"></td>
                            {% if devis.aarem == 'oui' %}
                                <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>BASE
                                        TVA{% if devis.code is not null %}({{ devis.code }}){% endif %}</b></td>
                            {% else %}
                                <td class=\"bord\" colspan=\"2\" style=\"text-align: right;\"><b>BASE
                                        TVA{% if devis.code is not null %}({{ devis.code }}){% endif %}</b></td>
                            {% endif %}
                            <td align=\"right\">{{ devis.basetva|number_format(2, ',', ' ') }}</td>
                        </tr>
                    {% endif %}
                    {% if devis.model == 1 %}
                        <tr>
                            {% if devis.aaref == 'oui' %}
                                <td class=\"bord\"></td>
                            {% endif %}
                            <td class=\"bord\"></td>
                            {% if devis.zone == 'oui' %}
                                <td class=\"bord\"></td>
                            {% endif %}
                            <td class=\"bord\"></td>
                            {% if devis.aarem == 'oui' %}
                                <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\">
                                    {% if devis.ptva == 'oui' %}
                                        <b>TVA {{ devis.tva }}%</b>
                                    {% endif %}
                                    {% if devis.ptva == 'susp' %}
                                        <b>TVA SUSPENDUE {{ devis.tva }}%</b>
                                    {% endif %}
                                    {% if devis.ptva == 'non' %}
                                        <b>TVA NON FACTURÉE {{ devis.tva }}%</b>
                                    {% endif %}
                                </td>
                            {% else %}
                                <td class=\"bord\" colspan=\"2\" style=\"text-align: right;\">
                                    {% if devis.ptva == 'oui' %}
                                        <b>TVA {{ devis.tva }}%</b>
                                    {% endif %}
                                    {% if devis.ptva == 'susp' %}
                                        <b>TVA SUSPENDUE {{ devis.tva }}%</b>
                                    {% endif %}
                                    {% if devis.ptva == 'non' %}
                                        <b>TVA NON FACTURÉE {{ devis.tva }}%</b>
                                    {% endif %}
                                </td>
                            {% endif %}
                            <td align=\"right\">{{ devis.vtva|number_format(2, ',', ' ') }}</td>
                        </tr>
                    {% endif %}
                    <tr>
                        {% if devis.aaref == 'oui' %}
                            <td class=\"bord\"></td>
                        {% endif %}
                        <td class=\"bord\"></td>
                        {% if devis.zone == 'oui' %}
                            <td class=\"bord\"></td>
                        {% endif %}
                        <td class=\"bord\"></td>
                        {% if devis.aarem == 'oui' %}
                            <td colspan=\"3\" class=\"bord\"
                                style=\"color: #000;border-bottom: 1px solid #D3D3D3 !important;font-weight: 700\">
                                <b>TOTAL TTC</b></td>
                        {% else %}
                            <td colspan=\"2\" class=\"bord\"
                                style=\"color: #000; border-bottom: 1px solid #D3D3D3 !important;font-weight: 700\">
                                <b>TOTAL TTC</b></td>
                        {% endif %}
                        <td style=\"text-align: right\"><b>{{ devis.totalttc|number_format(2, ',', ' ') }}</b><br><span
                                    class=\"hider\">{{ devis.totalttc|number_format(4, ',', '.') }}</span></td>
                    </tr>
                {% endif %}

                {% if devis.type == \"cps\" %}
                    <tr class=\"printer\">
                        <th style=\"text-align: center\">Nº COMMANDE</th>
                        <th style=\"max-width:500px !important; min-width: 250px !important; text-align: left\"
                            colspan=\"2\">
                            DÉSIGNATION
                        </th>
                        }
                        <th style=\"text-align: center; min-width: 80px !important;\">RÉF</th>
                        <th style=\"text-align: center\">UNITÉ</th>
                        <th style=\"text-align: center; min-width: 120px !important;\">PRIX&nbsp;U.</th>
                    </tr>
                    {% for bon in devis.bons %}
                        <tr>
                            <td style=\"text-align: center; min-width: 120px !important;\">Bon Nº {{ bon.numbon }}</td>
                            <td style=\"max-width:500px !important; min-width: 250px !important; text-align: left\"
                                colspan=\"2\">{{ bon.articlecomposer.designation }}</td>
                            }
                            <td style=\"text-align: center; min-width: 80px !important;\">{{ bon.articlecomposer.reference }}</td>
                            <td style=\"text-align: center\">{{ bon.articlecomposer.unite }}</td>
                            <td style=\"text-align: center; min-width: 120px !important;\">{{ bon.articlecomposer.pu|number_format(2, ',', ' ') }}</td>
                        </tr>
                        <tr style=\"background-color:#f8f9fa; font-weight: 700\">
                            <th style=\"text-align: center\">RÉF</th>
                            <th style=\"max-width:500px !important; min-width: 200px !important; text-align: left\">
                                DÉSIGNATION
                            </th>
                            }
                            <th style=\"text-align: center\">UNITÉ</th>
                            <th style=\"text-align: center\">QTÉ</th>
                            <th style=\"text-align: center; min-width: 120px !important;\">PRIX&nbsp;U.</th>
                            <th style=\"text-align: center; min-width: 120px !important;\">MONTANT HT</th>
                        </tr>
                        {% for lign in bon.lignes %}
                            {% if lign.groupe == null %}
                                <tr>
                                    <td style=\"text-align: center\">{{ lign.reference }}</td>
                                    <td>{{ lign.designation|raw }}</td>
                                    <td style=\"text-align: center\">{{ lign.unite }}</td>
                                    <td style=\"text-align: center\">{{ lign.quantite|number_format(2, ',', ' ') }}</td>
                                    <td style=\"text-align: center\">{{ lign.pu|number_format(2, ',', ' ') }}</td>
                                    <td style=\"text-align: center\">{{ (lign.pu * lign.quantite)|number_format(2, ',', ' ') }}</td>
                                </tr>
                            {% endif %}
                        {% endfor %}
                    {% endfor %}
                    {% for bon in devis.bons %}
                        <tr>
                            <td style=\"text-align: center; min-width: 120px !important;\">Bon Nº {{ bon.numbon }}</td>
                            <td style=\"max-width:500px !important; min-width: 250px !important; text-align: left\"
                                colspan=\"2\">{{ bon.articlecomposer.designation }}</td>
                            }
                            <td style=\"text-align: center; min-width: 80px !important;\">{{ bon.articlecomposer.reference }}</td>
                            <td style=\"text-align: center\">{{ bon.articlecomposer.unite }}</td>
                            <td style=\"text-align: center; min-width: 120px !important;\">{{ bon.articlecomposer.pu|number_format(2, ',', ' ') }}</td>
                        </tr>
                        <tr style=\"background-color:#f8f9fa; font-weight: 700\">
                            <th style=\"text-align: center\">RÉF</th>
                            <th style=\"max-width:500px !important; min-width: 200px !important; text-align: left\">
                                DÉSIGNATION
                            </th>
                            }
                            <th style=\"text-align: center\">UNITÉ</th>
                            <th style=\"text-align: center\">QTÉ</th>
                            <th style=\"text-align: center; min-width: 120px !important;\">PRIX&nbsp;U.</th>
                            <th style=\"text-align: center; min-width: 120px !important;\">MONTANT HT</th>
                        </tr>
                        {% for lign in bon.lignes %}
                            {% if lign.groupe == null %}
                                <tr>
                                    <td style=\"text-align: center\">{{ lign.reference }}</td>
                                    <td>{{ lign.designation|raw }}</td>
                                    <td style=\"text-align: center\">{{ lign.unite }}</td>
                                    <td style=\"text-align: center\">{{ lign.quantite|number_format(2, ',', ' ') }}</td>
                                    <td style=\"text-align: center\">{{ lign.pu|number_format(2, ',', ' ') }}</td>
                                    <td style=\"text-align: center\">{{ (lign.pu * lign.quantite)|number_format(2, ',', ' ') }}</td>
                                </tr>
                            {% endif %}
                        {% endfor %}
                    {% endfor %}
                {% endif %}
            </table>
        {% endif %}
        {% if devis.modele == 2 %}
            <p style=\"clear: both\"></p>
            <div>
                <table style=\"width: 100% ; margin-top: 20px; border: 1px solid #D3D3D3\">
                    <tr>
                        <td style=\"width: 60%;  border-style: none\">
                            <p style=\"padding-left:10px\">Titre du projet: <b>{{ devis.chantier.nomchantier }}</b></p>
                            <p style=\"padding-left:10px\">Référence/Oblet:</p>
                            <p style=\"padding-left:20px;\"><b>{{ devis.devreference|raw }}</b></p>
                            </br>
                            <p style=\"padding-left:10px\">Date: <b>{{ devis.date|date('d/m/Y') }}</b></p>
                            <p style=\"padding-left:10px\">Validité du devis: <b>{{ devis.validit }}</b></p>
                            <p style=\"padding-left:10px\">Affaire suivie par: {{ devis.contact.contact }}</p>
                        </td>
                        <td style=\"width: 40% ; border-style: none\">
                            <h3>DEVIS Nº: {{ devis.iddevis }}</h3></br>
                            <p>Client: <b>{{ devis.chantier.client.nomclient }}</b></p>
                            <p>Nº Client: <b>{{ devis.chantier.client.code }}</b></p>
                            <p>Adresse: <b>{{ devis.chantier.client.adresse }}</b></p>
                            <p>Téléphone: <b>{{ devis.chantier.client.contact }}</b></p>
                        </td>
                    </tr>
                </table>
                <p style=\"clear: both\"></p>
            </div>
            <br>
            <table style=\"width: 100%;\">
                {% if devis.type != \"cps\" %}
                    <tr class=\"printer\">
                        {% if devis.aaref == 'oui' %}
                            <th style=\"text-align: center\">RÉF</th>
                        {% endif %}
                        <th style=\"max-width:500px !important; min-width: 250px !important; text-align: left\">
                            DÉSIGNATION
                        </th>
                        {% if devis.zone == 'oui' %}
                            <th style=\"text-align: center\">SECTION</th>
                        {% endif %}
                        <th style=\"text-align: center\">UNITÉ</th>
                        <th style=\"text-align: center\">QTÉ</th>
                        <th style=\"text-align: center\">PRIX&nbsp;U.</th>
                        {% if devis.aarem == 'oui' %}
                            <th style=\" text-align: center\">REMISE</th>
                        {% endif %}
                        <th style=\"text-align: center\">MONTANT&nbsp;HT</th>
                    </tr>
                    {% for group in listGroup %}
                        <tr class=\"togo\">
                            {% if devis.zone == 'oui' and devis.aarem == 'oui' %}
                                {% if devis.aaref == 'oui' %}
                                    <td align=\"center\"><b>{{ group.reference }}</b></td>
                                {% endif %}
                                <td COLSPAN=\"7\"><b>{{ group.groupe|striptags|raw }}</b></td>

                            {% elseif devis.zone == 'non' and devis.aarem == 'non' %}
                                {% if devis.aaref == 'oui' %}
                                    <td align=\"center\"><b>{{ group.reference }}</b></td>
                                {% endif %}
                                <td colspan=\"5\"><b>{{ group.groupe|striptags|raw }}</b></td>

                            {% elseif devis.zone == 'oui' and devis.aarem == 'non' %}
                                {% if devis.aaref == 'oui' %}
                                    <td align=\"center\"><b>{{ group.reference }}</b></td>
                                {% endif %}
                                <td colspan=\"6\"><b>{{ group.groupe|striptags|raw }}</b></td>

                            {% elseif devis.aarem == 'oui' and devis.zone == 'non' %}
                                {% if devis.aaref == 'oui' %}
                                    <td align=\"center\"><b>{{ group.reference }}</b></td>
                                {% endif %}
                                <td colspan=\"6\"><b>{{ group.groupe|striptags|raw }}</b></td>
                            {% endif %}
                        </tr>
                        {% set st = 0 %}

                        {% for lign in group.lignes %}
                            <tr>
                                {% if devis.aaref == 'oui' %}
                                    <td style=\"text-align: center\">{{ lign.reference }}</td>
                                {% endif %}
                                <td align=\"left\">{{ lign.designation|raw }}</td>
                                {% if devis.zone == 'oui' %}
                                    <td style=\"text-align: center\">{{ lign.zone }}</td>
                                {% endif %}
                                <td style=\"text-align: center\">{{ lign.unite }}</td>
                                <td style=\"text-align: center\">{{ lign.quantite|number_format(2, ',', ' ') }}<br><span
                                            class=\"hider\">{{ lign.quantite|number_format(6, ',', '.') }}</span></td>
                                <td style=\"text-align: right\">{{ lign.pu|number_format(2, ',', ' ') }}<br><span
                                            class=\"hider\">{{ lign.pu|number_format(5, ',', '.') }}</span></td>
                                {% if devis.aarem == 'oui' %}
                                    <td style=\"text-align: center\">{{ lign.remise }}%</td>
                                {% endif %}
                                {% if devis.aarem == 'non' %}
                                    <td style=\"text-align: right\">{% set st = (lign.pu * lign.quantite) + st %} {{ (lign.pu * lign.quantite)|number_format(2, ',', ' ') }}
                                        <br><span
                                                class=\"hider\">{{ (lign.pu * lign.quantite)|number_format(4, ',', '.') }}</span>
                                    </td>
                                {% else %}
                                    <td style=\"text-align: right\">{% set st = ((lign.pu * lign.quantite)*((100 - lign.remise)/100)) + st %}{{ ((lign.pu * lign.quantite)*((100 - lign.remise)/100))|number_format(2, ',', ' ') }}</td>
                                {% endif %}
                                </td>
                            </tr>
                        {% endfor %}

                        <tr class=\"togo\">
                            {% if devis.zone == 'oui' and devis.aarem == 'oui' %}
                                {% if devis.aaref == 'oui' %}
                                    <td COLSPAN=\"8\" align=\"right\">
                                        <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b></td>
                                {% else %}
                                    <td COLSPAN=\"7\" align=\"right\">
                                        <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b></td>
                                {% endif %}
                            {% elseif devis.zone == 'non' and devis.aarem == 'non' %}
                                {% if devis.aaref == 'oui' %}
                                    <td COLSPAN=\"6\" align=\"right\">
                                        <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b></td>
                                {% else %}
                                    <td COLSPAN=\"5\" align=\"right\">
                                        <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b></td>
                                {% endif %}

                            {% elseif devis.zone == 'oui' and devis.aarem == 'non' %}
                                {% if devis.aaref == 'oui' %}
                                    <td COLSPAN=\"7\" align=\"right\">
                                        <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b></td>
                                {% else %}
                                    <td COLSPAN=\"6\" align=\"right\">
                                        <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b></td>
                                {% endif %}

                            {% elseif devis.aarem == 'oui' and devis.zone == 'non' %}
                                {% if devis.aaref == 'oui' %}
                                    <td COLSPAN=\"7\" align=\"right\">
                                        <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b></td>
                                {% else %}
                                    <td COLSPAN=\"6\" align=\"right\">
                                        <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b></td>
                                {% endif %}
                            {% endif %}

                        </tr>

                    {% endfor %}
                    {% for lign in lignes %}
                        {% if lign.groupe == null %}
                            <tr>
                                {% if devis.aaref == 'oui' %}
                                    <td style=\"text-align: center\">{{ lign.reference }}</td>
                                {% endif %}
                                <td>{{ lign.designation|raw }}</td>
                                {% if devis.zone == 'oui' %}
                                    <td style=\"text-align: center\">{{ lign.zone }}</td>
                                {% endif %}
                                <td style=\"text-align: center\">{{ lign.unite }}</td>
                                <td style=\"text-align: center\">{{ lign.quantite|number_format(2, ',', ' ') }}<br><span
                                            class=\"hider\">{{ lign.quantite|number_format(6, ',', ' ') }}</span></td>
                                <td style=\"text-align: right\">{{ lign.pu|number_format(2, ',', ' ') }}<br><span
                                            class=\"hider\">{{ lign.pu|number_format(4, ',', '.') }}</span></td>
                                {% if devis.aarem == 'oui' %}
                                    <td style=\"text-align: center\">{{ lign.remise }}%</td>
                                {% endif %}
                                {% if devis.aarem == 'non' %}
                                    <td style=\"text-align: right\">{{ (lign.pu * lign.quantite)|number_format(2, ',', ' ') }}
                                        <br><span
                                                class=\"hider\">{{ (lign.pu * lign.quantite)|number_format(4, ',', '.') }}</span>
                                    </td>
                                {% endif %}
                                {% if devis.aarem != 'non' %}
                                    <td style=\"text-align: right\">{{ ((lign.pu * lign.quantite)*((100 - lign.remise)/100))|number_format(2, ',', ' ') }}</td>
                                {% endif %}
                            </tr>
                        {% endif %}
                    {% endfor %}
                    <tr>
                        {% if devis.aaref == 'oui' %}
                            <td class=\"bord\"></td>
                        {% endif %}
                        <td class=\"bord\"></td>
                        {% if devis.zone == 'oui' %}
                            <td class=\"bord\"></td>
                        {% endif %}
                        <td class=\"bord\"></td>
                        {% if devis.aarem == 'oui' %}
                            {% if devis.ptva == 'oui' or devis.ptva == 'susp' %}
                                <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT</b></td>
                            {% else %}
                                {% if devis.model == 1 %}
                                    <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT</b></td>
                                {% else %}
                                    <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL TTC</b></td>
                                {% endif %}
                            {% endif %}
                        {% else %}
                            {% if devis.ptva == 'oui' or devis.ptva == 'susp' %}
                                <td colspan=\"2\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT</b></td>
                            {% else %}
                                {% if devis.model == 1 %}
                                    <td colspan=\"2\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT</b></td>
                                {% else %}
                                    <td colspan=\"2\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL TTC</b></td>
                                {% endif %}
                            {% endif %}
                        {% endif %}
                        {% if devis.aarem == 'tht' %}
                            <td style=\"text-align: right\">{{ (devis.totalht + devis.vremise)|number_format(2, ',', ' ') }}</td>
                        {% else %}
                            <td style=\"text-align: right\">{{ devis.totalht|number_format(2, ',', ' ') }}</td>
                        {% endif %}
                    </tr>
                    {% if devis.aarem == 'oui' %}
                        <tr>
                            {% if devis.aaref == 'oui' %}
                                <td class=\"bord\"></td>
                            {% endif %}
                            <td class=\"bord\"></td>
                            {% if devis.zone == 'oui' %}
                                <td class=\"bord\"></td>
                            {% endif %}
                            <td class=\"bord\"></td>
                            {% if devis.aarem == 'oui' %}
                                <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>REMISE</b></td>
                            {% else %}
                                <td class=\"bord\" colspan=\"2\" style=\"text-align: right;\"><b>REMISE</b></td>
                            {% endif %}
                            <td style=\"text-align: right\">{{ devis.vremise|number_format(2, ',', ' ') }}</td>
                        </tr>
                    {% endif %}
                    {% if devis.aarem == 'tht' %}
                        <tr>
                            {% if devis.aaref == 'oui' %}
                                <td class=\"bord\"></td>
                            {% endif %}
                            <td class=\"bord\"></td>
                            {% if devis.zone == 'oui' %}
                                <td class=\"bord\"></td>
                            {% endif %}
                            <td class=\"bord\"></td>
                            {% if devis.aarem == 'oui' %}
                                {% if devis.ptva == 'oui' or devis.ptva == 'susp' %}
                                    <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT REMISÉ</b></td>
                                {% else %}
                                    {% if devis.model == 1 %}
                                        <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT REMISÉ</b>
                                        </td>
                                    {% else %}
                                        <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL TTC REMISÉ</b>
                                        </td>
                                    {% endif %}
                                {% endif %}
                            {% else %}
                                {% if devis.ptva == 'oui' or devis.ptva == 'susp' %}
                                    <td colspan=\"2\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT REMISÉ</b></td>
                                {% else %}
                                    {% if devis.model == 1 %}
                                        <td colspan=\"2\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT REMISÉ</b>
                                        </td>
                                    {% else %}
                                        <td colspan=\"2\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL TTC REMISÉ</b>
                                        </td>
                                    {% endif %}
                                {% endif %}
                            {% endif %}

                            <td style=\"text-align: right\">{{ devis.totalht|number_format(2, ',', ' ') }}</td>
                        </tr>
                        <tr>
                            {% if devis.aaref == 'oui' %}
                                <td class=\"bord\"></td>
                            {% endif %}
                            <td class=\"bord\"></td>
                            {% if devis.zone == 'oui' %}
                                <td class=\"bord\"></td>
                            {% endif %}
                            <td class=\"bord\"></td>
                            {% if devis.aarem == 'oui' %}
                                <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\">
                                    <b>REMISE {{ devis.remtht|number_format(0, ',', ' ') }}%</b></td>
                            {% else %}
                                <td class=\"bord\" colspan=\"2\" style=\"text-align: right;\">
                                    <b>REMISE {{ devis.remtht|number_format(0, ',', ' ') }}% </b></td>
                            {% endif %}
                            <td align=\"right\">{{ devis.vremise|number_format(2, ',', ' ') }}</td>
                        </tr>
                    {% endif %}
                    {% if devis.abasetva == 'oui' %}
                        <tr>
                            {% if devis.aaref == 'oui' %}
                                <td class=\"bord\"></td>
                            {% endif %}
                            <td class=\"bord\"></td>
                            {% if devis.zone == 'oui' %}
                                <td class=\"bord\"></td>
                            {% endif %}
                            <td class=\"bord\"></td>
                            {% if devis.aarem == 'oui' %}
                                <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>BASE
                                        TVA{% if devis.code is not null %}({{ devis.code }}){% endif %}</b></td>
                            {% else %}
                                <td class=\"bord\" colspan=\"2\" style=\"text-align: right;\"><b>BASE
                                        TVA{% if devis.code is not null %}({{ devis.code }}){% endif %}</b></td>
                            {% endif %}
                            <td align=\"right\">{{ devis.basetva|number_format(2, ',', ' ') }}</td>
                        </tr>
                    {% endif %}
                    {% if devis.model == 1 %}
                        <tr>
                            {% if devis.aaref == 'oui' %}
                                <td class=\"bord\"></td>
                            {% endif %}
                            <td class=\"bord\"></td>
                            {% if devis.zone == 'oui' %}
                                <td class=\"bord\"></td>
                            {% endif %}
                            <td class=\"bord\"></td>
                            {% if devis.aarem == 'oui' %}
                                <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\">
                                    {% if devis.ptva == 'oui' %}
                                        <b>TVA {{ devis.tva }}%</b>
                                    {% endif %}
                                    {% if devis.ptva == 'susp' %}
                                        <b>TVA SUSPENDUE {{ devis.tva }}%</b>
                                    {% endif %}
                                    {% if devis.ptva == 'non' %}
                                        <b>TVA NON FACTURÉE {{ devis.tva }}%</b>
                                    {% endif %}
                                </td>
                            {% else %}
                                <td class=\"bord\" colspan=\"2\" style=\"text-align: right;\">
                                    {% if devis.ptva == 'oui' %}
                                        <b>TVA {{ devis.tva }}%</b>
                                    {% endif %}
                                    {% if devis.ptva == 'susp' %}
                                        <b>TVA SUSPENDUE {{ devis.tva }}%</b>
                                    {% endif %}
                                    {% if devis.ptva == 'non' %}
                                        <b>TVA NON FACTURÉE {{ devis.tva }}%</b>
                                    {% endif %}
                                </td>
                            {% endif %}
                            <td align=\"right\">{{ devis.vtva|number_format(2, ',', ' ') }}</td>
                        </tr>
                    {% endif %}
                    <tr>
                        {% if devis.aaref == 'oui' %}
                            <td class=\"bord\"></td>
                        {% endif %}
                        <td class=\"bord\"></td>
                        {% if devis.zone == 'oui' %}
                            <td class=\"bord\"></td>
                        {% endif %}
                        <td class=\"bord\"></td>
                        {% if devis.aarem == 'oui' %}
                            <td colspan=\"3\" class=\"bord\"
                                style=\"color: #4e73df;border-bottom: 1px solid #D3D3D3 !important;\">
                                <b>TOTAL TTC</b></td>
                        {% else %}
                            <td colspan=\"2\" class=\"bord\"
                                style=\"color: #4e73df; border-bottom: 1px solid #D3D3D3 !important;\">
                                <b>TOTAL TTC</b></td>
                        {% endif %}
                        <td align=\"right\"><b>{{ devis.totalttc|number_format(2, ',', ' ') }}</b><br><span
                                    class=\"hider\">{{ devis.totalttc|number_format(4, ',', '.') }}</span></td>
                    </tr>
                {% endif %}
                {% if devis.type == \"cps\" %}
                    <tr class=\"printer\">
                        <th style=\"text-align: center\">Nº COMMANDE</th>
                        <th style=\"max-width:500px !important; min-width: 250px !important; text-align: left\"
                            colspan=\"2\">
                            DÉSIGNATION
                        </th>
                        }
                        <th style=\"text-align: center; min-width: 80px !important;\">RÉF</th>
                        <th style=\"text-align: center\">UNITÉ</th>
                        <th style=\"text-align: center; min-width: 120px !important;\">PRIX&nbsp;U.</th>
                    </tr>
                    {% for bon in devis.bons %}
                        <tr>
                            <td style=\"text-align: center; min-width: 120px !important;\">Bon Nº {{ bon.numbon }}</td>
                            <td style=\"max-width:500px !important; min-width: 250px !important; text-align: left\"
                                colspan=\"2\">{{ bon.articlecomposer.designation }}</td>
                            }
                            <td style=\"text-align: center; min-width: 80px !important;\">{{ bon.articlecomposer.reference }}</td>
                            <td style=\"text-align: center\">{{ bon.articlecomposer.unite }}</td>
                            <td style=\"text-align: center; min-width: 120px !important;\">{{ bon.articlecomposer.pu|number_format(2, ',', ' ') }}</td>
                        </tr>
                        <tr style=\"background-color:#f8f9fa; font-weight: 700\">
                            <th style=\"text-align: center\">RÉF</th>
                            <th style=\"max-width:500px !important; min-width: 200px !important; text-align: left\">
                                DÉSIGNATION
                            </th>
                            }
                            <th style=\"text-align: center\">UNITÉ</th>
                            <th style=\"text-align: center\">QTÉ</th>
                            <th style=\"text-align: center; min-width: 120px !important;\">PRIX&nbsp;U.</th>
                            <th style=\"text-align: center; min-width: 120px !important;\">MONTANT HT</th>
                        </tr>
                        {% for lign in bon.lignes %}
                            {% if lign.groupe == null %}
                                <tr>
                                    <td style=\"text-align: center\">{{ lign.reference }}</td>
                                    <td>{{ lign.designation|raw }}</td>
                                    <td style=\"text-align: center\">{{ lign.unite }}</td>
                                    <td style=\"text-align: center\">{{ lign.quantite|number_format(2, ',', ' ') }}</td>
                                    <td style=\"text-align: center\">{{ lign.pu|number_format(2, ',', ' ') }}</td>
                                    <td style=\"text-align: center\">{{ (lign.pu * lign.quantite)|number_format(2, ',', ' ') }}</td>
                                </tr>
                            {% endif %}
                        {% endfor %}
                    {% endfor %}
                    {% for bon in devis.bons %}
                        <tr>
                            <td style=\"text-align: center; min-width: 120px !important;\">Bon Nº {{ bon.numbon }}</td>
                            <td style=\"max-width:500px !important; min-width: 250px !important; text-align: left\"
                                colspan=\"2\">{{ bon.articlecomposer.designation }}</td>
                            }
                            <td style=\"text-align: center; min-width: 80px !important;\">{{ bon.articlecomposer.reference }}</td>
                            <td style=\"text-align: center\">{{ bon.articlecomposer.unite }}</td>
                            <td style=\"text-align: center; min-width: 120px !important;\">{{ bon.articlecomposer.pu|number_format(2, ',', ' ') }}</td>
                        </tr>
                        <tr style=\"background-color:#f8f9fa; font-weight: 700\">
                            <th style=\"text-align: center\">RÉF</th>
                            <th style=\"max-width:500px !important; min-width: 200px !important; text-align: left\">
                                DÉSIGNATION
                            </th>
                            }
                            <th style=\"text-align: center\">UNITÉ</th>
                            <th style=\"text-align: center\">QTÉ</th>
                            <th style=\"text-align: center; min-width: 120px !important;\">PRIX&nbsp;U.</th>
                            <th style=\"text-align: center; min-width: 120px !important;\">MONTANT HT</th>
                        </tr>
                        {% for lign in bon.lignes %}
                            {% if lign.groupe == null %}
                                <tr>
                                    <td style=\"text-align: center\">{{ lign.reference }}</td>
                                    <td>{{ lign.designation|raw }}</td>
                                    <td style=\"text-align: center\">{{ lign.unite }}</td>
                                    <td style=\"text-align: center\">{{ lign.quantite|number_format(2, ',', ' ') }}</td>
                                    <td style=\"text-align: center\">{{ lign.pu|number_format(2, ',', ' ') }}</td>
                                    <td style=\"text-align: center\">{{ (lign.pu * lign.quantite)|number_format(2, ',', ' ') }}</td>
                                </tr>
                            {% endif %}
                        {% endfor %}
                    {% endfor %}
                {% endif %}
            </table>
        {% endif %}
        {% if devis.modele == 3 %}
            <div>
                <table style=\"width: 19cm; margin-top: 50px\">
                    <tr>
                        <td style=\"width:70%; border-style: none !important;\">
                            <h1 style=\"font-weight: bold\">{{ usa.societe|upper }}</h1>
                            <p style=\"text-align:left\" }>
                                Mail: <b>{{ usa.username }}</b><br/>
                                Téléphone: <b>{{ usa.contact }}</b><br/>
                                Adresse: <b>{{ usa.adresse }}</b>
                            </p>
                            <p style=\"text-align:left\"><b><u>Référence/Objet:</u></b><br/>
                                <span>{{ devis.devreference|raw }}</span>
                            </p>
                        </td>
                        <td style=\"width: 30% ; text-align:right; border-style: none !important;\">
                            <p style=\"text-align:center ; float: right ; padding:10px ; border:1px solid #D3D3D3 ; border-radius:20px\">
                                Client: <b>{{ devis.chantier.client.nomclient }}</b><br/>
                                Nº Client: <b>{{ devis.chantier.client.code }}</b><br/>
                                Adresse: <b>{{ devis.chantier.client.adresse }}</b><br/>
                                Téléphone: <b>{{ devis.chantier.client.contact }}</b></p>
                        </td>
                    </tr>
                </table>
            </div>
            <br>
            <table style=\"width: 100%;\">
                {% if devis.type != \"cps\" %}
                    <tr class=\"printer\">
                        {% if devis.aaref == 'oui' %}
                            <th style=\"text-align: center\">RÉF</th>
                        {% endif %}
                        <th style=\"max-width:500px !important; min-width: 250px !important; text-align: left\">
                            DÉSIGNATION
                        </th>
                        {% if devis.zone == 'oui' %}
                            <th style=\"text-align: center\">SECTION</th>
                        {% endif %}
                        <th style=\"text-align: center\">UNITÉ</th>
                        <th style=\"text-align: center\">QTÉ</th>
                        <th style=\"text-align: center\">PRIX&nbsp;U.</th>
                        {% if devis.aarem == 'oui' %}
                            <th style=\" text-align: center\">REMISE</th>
                        {% endif %}
                        <th style=\"text-align: center\">MONTANT&nbsp;HT</th>
                    </tr>
                    {% for group in listGroup %}
                        <tr class=\"togo\">
                            {% if devis.zone == 'oui' and devis.aarem == 'oui' %}
                                {% if devis.aaref == 'oui' %}
                                    <td align=\"center\"><b>{{ group.reference }}</b></td>
                                {% endif %}
                                <td COLSPAN=\"7\"><b>{{ group.groupe|striptags|raw }}</b></td>

                            {% elseif devis.zone == 'non' and devis.aarem == 'non' %}
                                {% if devis.aaref == 'oui' %}
                                    <td align=\"center\"><b>{{ group.reference }}</b></td>
                                {% endif %}
                                <td colspan=\"5\"><b>{{ group.groupe|striptags|raw }}</b></td>

                            {% elseif devis.zone == 'oui' and devis.aarem == 'non' %}
                                {% if devis.aaref == 'oui' %}
                                    <td align=\"center\"><b>{{ group.reference }}</b></td>
                                {% endif %}
                                <td colspan=\"6\"><b>{{ group.groupe|striptags|raw }}</b></td>

                            {% elseif devis.aarem == 'oui' and devis.zone == 'non' %}
                                {% if devis.aaref == 'oui' %}
                                    <td align=\"center\"><b>{{ group.reference }}</b></td>
                                {% endif %}
                                <td colspan=\"6\"><b>{{ group.groupe|striptags|raw }}</b></td>
                            {% endif %}
                        </tr>
                        {% set st = 0 %}

                        {% for lign in group.lignes %}
                            <tr>
                                {% if devis.aaref == 'oui' %}
                                    <td style=\"text-align: center\">{{ lign.reference }}</td>
                                {% endif %}
                                <td align=\"left\">{{ lign.designation|raw }}</td>
                                {% if devis.zone == 'oui' %}
                                    <td style=\"text-align: center\">{{ lign.zone }}</td>
                                {% endif %}
                                <td style=\"text-align: center\">{{ lign.unite }}</td>
                                <td style=\"text-align: center\">{{ lign.quantite|number_format(2, ',', ' ') }}<br><span
                                            class=\"hider\">{{ lign.quantite|number_format(6, ',', '.') }}</span></td>
                                <td style=\"text-align: right\">{{ lign.pu|number_format(2, ',', ' ') }}<br><span
                                            class=\"hider\">{{ lign.pu|number_format(5, ',', '.') }}</span></td>
                                {% if devis.aarem == 'oui' %}
                                    <td style=\"text-align: center\">{{ lign.remise }}%</td>
                                {% endif %}
                                {% if devis.aarem == 'non' %}
                                    <td style=\"text-align: right\">{% set st = (lign.pu * lign.quantite) + st %} {{ (lign.pu * lign.quantite)|number_format(2, ',', ' ') }}
                                        <br><span
                                                class=\"hider\">{{ (lign.pu * lign.quantite)|number_format(4, ',', '.') }}</span>
                                    </td>
                                {% else %}
                                    <td style=\"text-align: right\">{% set st = ((lign.pu * lign.quantite)*((100 - lign.remise)/100)) + st %}{{ ((lign.pu * lign.quantite)*((100 - lign.remise)/100))|number_format(2, ',', ' ') }}</td>
                                {% endif %}
                                </td>
                            </tr>
                        {% endfor %}

                        <tr class=\"togo\">
                            {% if devis.zone == 'oui' and devis.aarem == 'oui' %}
                                {% if devis.aaref == 'oui' %}
                                    <td COLSPAN=\"8\" align=\"right\">
                                        <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b></td>
                                {% else %}
                                    <td COLSPAN=\"7\" align=\"right\">
                                        <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b></td>
                                {% endif %}
                            {% elseif devis.zone == 'non' and devis.aarem == 'non' %}
                                {% if devis.aaref == 'oui' %}
                                    <td COLSPAN=\"6\" align=\"right\">
                                        <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b></td>
                                {% else %}
                                    <td COLSPAN=\"5\" align=\"right\">
                                        <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b></td>
                                {% endif %}

                            {% elseif devis.zone == 'oui' and devis.aarem == 'non' %}
                                {% if devis.aaref == 'oui' %}
                                    <td COLSPAN=\"7\" align=\"right\">
                                        <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b></td>
                                {% else %}
                                    <td COLSPAN=\"6\" align=\"right\">
                                        <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b></td>
                                {% endif %}

                            {% elseif devis.aarem == 'oui' and devis.zone == 'non' %}
                                {% if devis.aaref == 'oui' %}
                                    <td COLSPAN=\"7\" align=\"right\">
                                        <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b></td>
                                {% else %}
                                    <td COLSPAN=\"6\" align=\"right\">
                                        <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b></td>
                                {% endif %}
                            {% endif %}

                        </tr>

                    {% endfor %}
                    {% for lign in lignes %}
                        {% if lign.groupe == null %}
                            <tr>
                                {% if devis.aaref == 'oui' %}
                                    <td style=\"text-align: center\">{{ lign.reference }}</td>
                                {% endif %}
                                <td>{{ lign.designation|raw }}</td>
                                {% if devis.zone == 'oui' %}
                                    <td style=\"text-align: center\">{{ lign.zone }}</td>
                                {% endif %}
                                <td style=\"text-align: center\">{{ lign.unite }}</td>
                                <td style=\"text-align: center\">{{ lign.quantite|number_format(2, ',', ' ') }}<br><span
                                            class=\"hider\">{{ lign.quantite|number_format(6, ',', ' ') }}</span></td>
                                <td style=\"text-align: right\">{{ lign.pu|number_format(2, ',', ' ') }}<br><span
                                            class=\"hider\">{{ lign.pu|number_format(4, ',', '.') }}</span></td>
                                {% if devis.aarem == 'oui' %}
                                    <td style=\"text-align: center\">{{ lign.remise }}%</td>
                                {% endif %}
                                {% if devis.aarem == 'non' %}
                                    <td style=\"text-align: right\">{{ (lign.pu * lign.quantite)|number_format(2, ',', ' ') }}
                                        <br><span
                                                class=\"hider\">{{ (lign.pu * lign.quantite)|number_format(4, ',', '.') }}</span>
                                    </td>
                                {% endif %}
                                {% if devis.aarem != 'non' %}
                                    <td style=\"text-align: right\">{{ ((lign.pu * lign.quantite)*((100 - lign.remise)/100))|number_format(2, ',', ' ') }}</td>
                                {% endif %}
                            </tr>
                        {% endif %}
                    {% endfor %}
                    <tr>
                        {% if devis.aaref == 'oui' %}
                            <td class=\"bord\"></td>
                        {% endif %}
                        <td class=\"bord\"></td>
                        {% if devis.zone == 'oui' %}
                            <td class=\"bord\"></td>
                        {% endif %}
                        <td class=\"bord\"></td>
                        {% if devis.aarem == 'oui' %}
                            {% if devis.ptva == 'oui' or devis.ptva == 'susp' %}
                                <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT</b></td>
                            {% else %}
                                {% if devis.model == 1 %}
                                    <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT</b></td>
                                {% else %}
                                    <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL TTC</b></td>
                                {% endif %}
                            {% endif %}
                        {% else %}
                            {% if devis.ptva == 'oui' or devis.ptva == 'susp' %}
                                <td colspan=\"2\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT</b></td>
                            {% else %}
                                {% if devis.model == 1 %}
                                    <td colspan=\"2\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT</b></td>
                                {% else %}
                                    <td colspan=\"2\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL TTC</b></td>
                                {% endif %}
                            {% endif %}
                        {% endif %}
                        {% if devis.aarem == 'tht' %}
                            <td style=\"text-align: right\">{{ (devis.totalht + devis.vremise)|number_format(2, ',', ' ') }}</td>
                        {% else %}
                            <td style=\"text-align: right\">{{ devis.totalht|number_format(2, ',', ' ') }}</td>
                        {% endif %}
                    </tr>
                    {% if devis.aarem == 'oui' %}
                        <tr>
                            {% if devis.aaref == 'oui' %}
                                <td class=\"bord\"></td>
                            {% endif %}
                            <td class=\"bord\"></td>
                            {% if devis.zone == 'oui' %}
                                <td class=\"bord\"></td>
                            {% endif %}
                            <td class=\"bord\"></td>
                            {% if devis.aarem == 'oui' %}
                                <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>REMISE</b></td>
                            {% else %}
                                <td class=\"bord\" colspan=\"2\" style=\"text-align: right;\"><b>REMISE</b></td>
                            {% endif %}
                            <td style=\"text-align: right\">{{ devis.vremise|number_format(2, ',', ' ') }}</td>
                        </tr>
                    {% endif %}
                    {% if devis.aarem == 'tht' %}
                        <tr>
                            {% if devis.aaref == 'oui' %}
                                <td class=\"bord\"></td>
                            {% endif %}
                            <td class=\"bord\"></td>
                            {% if devis.zone == 'oui' %}
                                <td class=\"bord\"></td>
                            {% endif %}
                            <td class=\"bord\"></td>
                            {% if devis.aarem == 'oui' %}
                                {% if devis.ptva == 'oui' or devis.ptva == 'susp' %}
                                    <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT REMISÉ</b></td>
                                {% else %}
                                    {% if devis.model == 1 %}
                                        <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT REMISÉ</b>
                                        </td>
                                    {% else %}
                                        <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL TTC REMISÉ</b>
                                        </td>
                                    {% endif %}
                                {% endif %}
                            {% else %}
                                {% if devis.ptva == 'oui' or devis.ptva == 'susp' %}
                                    <td colspan=\"2\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT REMISÉ</b></td>
                                {% else %}
                                    {% if devis.model == 1 %}
                                        <td colspan=\"2\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT REMISÉ</b>
                                        </td>
                                    {% else %}
                                        <td colspan=\"2\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL TTC REMISÉ</b>
                                        </td>
                                    {% endif %}
                                {% endif %}
                            {% endif %}

                            <td style=\"text-align: right\">{{ devis.totalht|number_format(2, ',', ' ') }}</td>
                        </tr>
                        <tr>
                            {% if devis.aaref == 'oui' %}
                                <td class=\"bord\"></td>
                            {% endif %}
                            <td class=\"bord\"></td>
                            {% if devis.zone == 'oui' %}
                                <td class=\"bord\"></td>
                            {% endif %}
                            <td class=\"bord\"></td>
                            {% if devis.aarem == 'oui' %}
                                <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\">
                                    <b>REMISE {{ devis.remtht|number_format(0, ',', ' ') }}%</b></td>
                            {% else %}
                                <td class=\"bord\" colspan=\"2\" style=\"text-align: right;\">
                                    <b>REMISE {{ devis.remtht|number_format(0, ',', ' ') }}% </b></td>
                            {% endif %}
                            <td align=\"right\">{{ devis.vremise|number_format(2, ',', ' ') }}</td>
                        </tr>
                    {% endif %}
                    {% if devis.abasetva == 'oui' %}
                        <tr>
                            {% if devis.aaref == 'oui' %}
                                <td class=\"bord\"></td>
                            {% endif %}
                            <td class=\"bord\"></td>
                            {% if devis.zone == 'oui' %}
                                <td class=\"bord\"></td>
                            {% endif %}
                            <td class=\"bord\"></td>
                            {% if devis.aarem == 'oui' %}
                                <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>BASE
                                        TVA{% if devis.code is not null %}({{ devis.code }}){% endif %}</b></td>
                            {% else %}
                                <td class=\"bord\" colspan=\"2\" style=\"text-align: right;\"><b>BASE
                                        TVA{% if devis.code is not null %}({{ devis.code }}){% endif %}</b></td>
                            {% endif %}
                            <td align=\"right\">{{ devis.basetva|number_format(2, ',', ' ') }}</td>
                        </tr>
                    {% endif %}
                    {% if devis.model == 1 %}
                        <tr>
                            {% if devis.aaref == 'oui' %}
                                <td class=\"bord\"></td>
                            {% endif %}
                            <td class=\"bord\"></td>
                            {% if devis.zone == 'oui' %}
                                <td class=\"bord\"></td>
                            {% endif %}
                            <td class=\"bord\"></td>
                            {% if devis.aarem == 'oui' %}
                                <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\">
                                    {% if devis.ptva == 'oui' %}
                                        <b>TVA {{ devis.tva }}%</b>
                                    {% endif %}
                                    {% if devis.ptva == 'susp' %}
                                        <b>TVA SUSPENDUE {{ devis.tva }}%</b>
                                    {% endif %}
                                    {% if devis.ptva == 'non' %}
                                        <b>TVA NON FACTURÉE {{ devis.tva }}%</b>
                                    {% endif %}
                                </td>
                            {% else %}
                                <td class=\"bord\" colspan=\"2\" style=\"text-align: right;\">
                                    {% if devis.ptva == 'oui' %}
                                        <b>TVA {{ devis.tva }}%</b>
                                    {% endif %}
                                    {% if devis.ptva == 'susp' %}
                                        <b>TVA SUSPENDUE {{ devis.tva }}%</b>
                                    {% endif %}
                                    {% if devis.ptva == 'non' %}
                                        <b>TVA NON FACTURÉE {{ devis.tva }}%</b>
                                    {% endif %}
                                </td>
                            {% endif %}
                            <td align=\"right\">{{ devis.vtva|number_format(2, ',', ' ') }}</td>
                        </tr>
                    {% endif %}
                    <tr>
                        {% if devis.aaref == 'oui' %}
                            <td class=\"bord\"></td>
                        {% endif %}
                        <td class=\"bord\"></td>
                        {% if devis.zone == 'oui' %}
                            <td class=\"bord\"></td>
                        {% endif %}
                        <td class=\"bord\"></td>
                        {% if devis.aarem == 'oui' %}
                            <td colspan=\"3\" class=\"bord\"
                                style=\"color: #4e73df;border-bottom: 1px solid #D3D3D3 !important;\">
                                <b>TOTAL TTC</b></td>
                        {% else %}
                            <td colspan=\"2\" class=\"bord\"
                                style=\"color: #4e73df; border-bottom: 1px solid #D3D3D3 !important;\">
                                <b>TOTAL TTC</b></td>
                        {% endif %}
                        <td align=\"right\"><b>{{ devis.totalttc|number_format(2, ',', ' ') }}</b><br><span
                                    class=\"hider\">{{ devis.totalttc|number_format(4, ',', '.') }}</span></td>
                    </tr>
                {% endif %}
                {% if devis.type == \"cps\" %}
                    <tr class=\"printer\">
                        <th style=\"text-align: center\">Nº COMMANDE</th>
                        <th style=\"max-width:500px !important; min-width: 250px !important; text-align: left\"
                            colspan=\"2\">
                            DÉSIGNATION
                        </th>
                        }}
                        <th style=\"text-align: center; min-width: 80px !important;\">RÉF</th>
                        <th style=\"text-align: center\">UNITÉ</th>
                        <th style=\"text-align: center; min-width: 120px !important;\">PRIX&nbsp;U.</th>
                    </tr>
                    {% for bon in devis.bons %}
                        <tr>
                            <td style=\"text-align: center; min-width: 120px !important;\">Bon Nº {{ bon.numbon }}</td>
                            <td style=\"max-width:500px !important; min-width: 250px !important; text-align: left\"
                                colspan=\"2\">{{ bon.articlecomposer.designation }}</td>
                            }
                            <td style=\"text-align: center; min-width: 80px !important;\">{{ bon.articlecomposer.reference }}</td>
                            <td style=\"text-align: center\">{{ bon.articlecomposer.unite }}</td>
                            <td style=\"text-align: center; min-width: 120px !important;\">{{ bon.articlecomposer.pu|number_format(2, ',', ' ') }}</td>
                        </tr>
                        <tr style=\"background-color:#f8f9fa; font-weight: 700\">
                            <th style=\"text-align: center\">RÉF</th>
                            <th style=\"max-width:500px !important; min-width: 200px !important; text-align: left\">
                                DÉSIGNATION
                            </th>
                            }
                            <th style=\"text-align: center\">UNITÉ</th>
                            <th style=\"text-align: center\">QTÉ</th>
                            <th style=\"text-align: center; min-width: 120px !important;\">PRIX&nbsp;U.</th>
                            <th style=\"text-align: center; min-width: 120px !important;\">MONTANT HT</th>
                        </tr>
                        {% for lign in bon.lignes %}
                            {% if lign.groupe == null %}
                                <tr>
                                    <td style=\"text-align: center\">{{ lign.reference }}</td>
                                    <td>{{ lign.designation|raw }}</td>
                                    <td style=\"text-align: center\">{{ lign.unite }}</td>
                                    <td style=\"text-align: center\">{{ lign.quantite|number_format(2, ',', ' ') }}</td>
                                    <td style=\"text-align: center\">{{ lign.pu|number_format(2, ',', ' ') }}</td>
                                    <td style=\"text-align: center\">{{ (lign.pu * lign.quantite)|number_format(2, ',', ' ') }}</td>
                                </tr>
                            {% endif %}
                        {% endfor %}
                    {% endfor %}
                    {% for bon in devis.bons %}
                        <tr>
                            <td style=\"text-align: center; min-width: 120px !important;\">Bon Nº {{ bon.numbon }}</td>
                            <td style=\"max-width:500px !important; min-width: 250px !important; text-align: left\"
                                colspan=\"2\">{{ bon.articlecomposer.designation }}</td>
                            }
                            <td style=\"text-align: center; min-width: 80px !important;\">{{ bon.articlecomposer.reference }}</td>
                            <td style=\"text-align: center\">{{ bon.articlecomposer.unite }}</td>
                            <td style=\"text-align: center; min-width: 120px !important;\">{{ bon.articlecomposer.pu|number_format(2, ',', ' ') }}</td>
                        </tr>
                        <tr style=\"background-color:#f8f9fa; font-weight: 700\">
                            <th style=\"text-align: center\">RÉF</th>
                            <th style=\"max-width:500px !important; min-width: 200px !important; text-align: left\">
                                DÉSIGNATION
                            </th>
                            }
                            <th style=\"text-align: center\">UNITÉ</th>
                            <th style=\"text-align: center\">QTÉ</th>
                            <th style=\"text-align: center; min-width: 120px !important;\">PRIX&nbsp;U.</th>
                            <th style=\"text-align: center; min-width: 120px !important;\">MONTANT HT</th>
                        </tr>
                        {% for lign in bon.lignes %}
                            {% if lign.groupe == null %}
                                <tr>
                                    <td style=\"text-align: center\">{{ lign.reference }}</td>
                                    <td>{{ lign.designation|raw }}</td>
                                    <td style=\"text-align: center\">{{ lign.unite }}</td>
                                    <td style=\"text-align: center\">{{ lign.quantite|number_format(2, ',', ' ') }}</td>
                                    <td style=\"text-align: center\">{{ lign.pu|number_format(2, ',', ' ') }}</td>
                                    <td style=\"text-align: center\">{{ (lign.pu * lign.quantite)|number_format(2, ',', ' ') }}</td>
                                </tr>
                            {% endif %}
                        {% endfor %}
                    {% endfor %}
                {% endif %}
            </table>
        {% endif %}
        {% if devis.type != \"cps\" %}
            <p style=\"clear: both\"></p>
            <br>
            <p style=\"text-align: left\">
                Arrêté le présent devis à la somme de:<br>
                <span><b>{{ devis.totalttc|craue_spellout('fr-FR') }} {{ devis.monnaie.code }}</b></span>
            </p><br>
            <p style=\"float: right; text-decoration: underline\">SIGNATURE AUTORISÉE</p><br><br><br>
            {% if devis.conditions is not null %}
                <p style=\"float: left; color: #4e73df;\"><u>INFORMATIONS ADDITIONNELLES</u></p>
                <p style=\"clear: both\"></p>
                <p style=\"color: #000000;\">{{ devis.conditions|raw }}</p>
            {% endif %}
        {% endif %}
    </div>
{% endif %}
{% if type == 'bon' %}
    <div class=\"bood\">

            <table style=\"margin-top: {{ formes.teteDB }}px !important; float: right\">
                <tr>
                    <td style=\"border: none !important; text-align: center\">
                        <b>{{ bon.client.nomclient|upper }}</b> <br>
                        {{ bon.client.adresse }} <br>
                    </td>
                </tr>
            </table>
            <table style=\"text-align: left\">
                <tr>
                    <td style=\"border: none !important; font-size: 25px\">
                        {% if bon.type == \"oui\" %}
                            <b>BON DE COMMANDE - FOURNISSEUR</b>
                        {% endif %}
                        {% if bon.type == \"non\" %}
                            <b>BON DE RETOUR DE COMMANDE - FOURNISSEUR</b>
                        {% endif %}
                        {% if bon.type == \"none\" %}
                            <b>BON DE LIVRAISON</b>
                        {% endif %}
                        {% if bon.type == \"pst\" %}
                            <b>BON DE COMMANDE - PRESTATAIRE</b>
                        {% endif %}
                        {% if bon.type == \"cps\" %}
                            <b>PRÉVISION ARTICLE COMPOSÉ</b>
                        {% endif %}
                        {% if bon.type == \"prepa\" %}
                            <b>BON DE SUIVI DE COMMANDE</b>
                        {% endif %}
                    </td>
                </tr>
            </table>
            <table>
                <tr style=\"background-color: #f8f9fa !important; font-weight: 700\">
                    <td class=\"text-center\">DATE</td>
                    {% if bon.type == \"prepa\" %}
                        <td class=\"text-center\">N° DE BON DE SUIVI</td>
                    {% else %}
                        <td class=\"text-center\">N° DE BON</td>
                    {% endif %}

                    {% if bon.type == \"oui\" or bon.type == \"none\" %}
                        <td class=\"text-center\">N° DE BON DE SUIVI</td>
                    {% endif %}
                    <td class=\"text-center\">SELON DEVIS N°</td>

                    {% if bon.type == \"pst\" %}
                        <td class=\"text-center\">PRESTATAIRE</td>
                    {% endif %}

                    {% if bon.type == \"none\" or bon.type == \"oui\" %}
                        <td class=\"text-center\">FOURNISSEUR</td>
                    {% endif %}

                </tr>
                <tr>
                    <td class=\"text-center\">{{ bon.date|date('d/m/y') }}</td>
                    <td class=\"text-center\">{{ bon.numbon }}</td>
                    {% if bon.type == \"oui\" or bon.type == \"non\" %}
                        <td class=\"text-center\">{% if bon.preparation is not null %}{{ bon.preparation.numbon }}{% endif %}</td>
                    {% endif %}
                    <td class=\"text-center\">
                        {% if bon.devis is not null %}
                            {{ bon.devis.iddevis }}
                        {% endif %}
                    </td>

                    {% if bon.type != \"prepa\" %}
                        {% if bon.type != \"none\" or bon.type != \"cps\" %}
                            {% if bon.fournisseur is not null %}
                                <td class=\"text-center\">{{ bon.fournisseur.fournisseur|upper }}</td>
                            {% else %}
                                <td class=\"text-center\"></td>
                            {% endif %}
                        {% endif %}
                    {% endif %}

                </tr>
                <tr>
                    <td
                            {% if bon.type == \"none\" or bon.type == \"cps\" %} colspan=\"3\" {% endif %}
                            {% if bon.type == \"prepa\" or bon.type == \"pst\" %} colspan=\"4\" {% endif %}
                            {% if bon.type == \"oui\" or bon.type == \"non\" %} colspan=\"5\" {% endif %}
                    >
                        <span style=\"text-decoration: underline; font-weight: bold\">RÉFÉRENCE</span><br>{{ bon.bonreference|raw }}
                    </td>
                </tr>
            </table>

            <table style=\"width: 100%;\">
                <tr class=\"printer\">
                    {% if bon.aaref == 'oui' %}
                        <th style=\"text-align: center\">RÉF</th>
                    {% endif %}
                    <th style=\"max-width:500px !important; min-width: 250px !important; text-align: left\">
                        DÉSIGNATION
                    </th>
                    <th style=\"text-align: center\">UNITÉ</th>

                    {% if bon.type == \"none\" %}
                        <th style=\"text-align: center\">QUANTITÉ LIVRÉE</th>
                    {% endif %}
                    {% if bon.type == \"prepa\" %}
                        <th style=\"text-align: center\">QTÉ<br>PRÉVUE</th>
                        <th style=\"text-align: center\">QTÉ<br>LIVRÉE</th>
                        <th style=\"text-align: center\">RESTE&nbsp;À <br>LIVRER</th>
                    {% endif %}
                    {% if bon.type == \"oui\" or bon.type == \"non\" %}
                        {% if bon.preparation is not null %}
                            <th style=\"text-align: center\">QTÉ<br>PRÉVUE</th>
                            <th style=\"text-align: center\">QTÉ<br>LIVRÉE</th>
                            <th style=\"text-align: center\">RESTE&nbsp;À <br>LIVRER</th>
                            <th style=\"text-align: center\"> QTÉ<br>DEMANDÉE</th>
                        {% else %}
                            <th style=\"text-align: center\"> QTÉ</th>
                        {% endif %}
                    {% endif %}
                    {% if bon.type == \"cps\" or bon.type == \"pst\" %}
                        <th style=\"text-align: center\"> QTÉ</th>
                    {% endif %}
                    <th style=\"text-align: center\">PRIX U.</th>
                    {% if bon.aarem == 'oui' %}
                        <th style=\" text-align: center\">REMISE</th>
                    {% endif %}
                    <th style=\"text-align: center\">MONTANT&nbsp;HT</th>

                </tr>


                {% for group in listGroup %}
                    <tr class=\"togo\">
                        {% if bon.aaref == 'oui' and bon.aarem == 'oui' %}
                            <td class=\"text-center\">{{ group.reference }}</td>
                            <td colspan=\"7\" style=\"font-weight: bold\">{{ group.groupe|striptags|raw }}</td>
                        {% endif %}
                        {% if bon.aaref == 'non' and bon.aarem == 'non' %}
                            <td colspan=\"5\" style=\"font-weight: bold\">{{ group.groupe|striptags|raw }}</td>
                        {% endif %}
                        {% if bon.aaref == 'oui' and bon.aarem == 'non' %}
                            <td class=\"text-center\">{{ group.reference }}</td>
                            <td colspan=\"6\" style=\"font-weight: bold\">{{ group.groupe|striptags|raw }}</td>
                        {% endif %}
                        {% if bon.aaref == 'non' and bon.aarem == 'oui' %}
                            <td colspan=\"6\" style=\"font-weight: bold\">{{ group.groupe|striptags|raw }}</td>
                        {% endif %}

                    </tr>

                    {% set st = 0 %}

                    {% for lign in group.lignes %}
                        <tr>
                            {% if bon.aaref == 'oui' %}
                                <td style=\"text-align: center\">{{ lign.reference }}</td>
                            {% endif %}
                            <td class=\"text-left\">{{ lign.designation|raw }}</td>
                            <td style=\"text-align: center\">{{ lign.unite }}</td>
                            <td style=\"text-align: center\">{{ lign.quantite|number_format(2, ',', ' ') }}<br><span
                                        class=\"hider\">{{ lign.quantite|number_format(5, '', '') }}</span></td>
                            {% if bon.type != \"none\" %}
                                <td style=\"text-align: right\">
                                    {{ lign.pu|number_format(2, ',', ' ') }}<br>
                                    <span class=\"hider\">{{ lign.pu|number_format(6, '', '') }}</span>
                                </td>
                                {% if bon.aarem == 'oui' %}
                                    <td style=\"text-align: center\">{{ lign.remise }}%</td>
                                {% endif %}
                                {% if bon.aarem == 'non' %}
                                    <td style=\"text-align: right\">{% set st = (lign.pu * lign.quantite) + st %} {{ (lign.pu * lign.quantite)|number_format(2, ',', ' ') }}</td>
                                {% else %}
                                    <td style=\"text-align: right\">{% set st = ((lign.pu * lign.quantite)*((100 - lign.remise)/100)) + st %}{{ ((lign.pu * lign.quantite)*((100 - lign.remise)/100))|number_format(2, ',', ' ') }}</td>
                                {% endif %}
                            {% endif %}
                            </td>
                        </tr>
                    {% endfor %}

                    <tr class=\"togo\">
                        {% if bon.aaref == 'oui' and bon.aarem == 'oui' %}
                            <td colspan=\"7\" style=\"text-align: right\">
                                <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b>
                            </td>
                        {% endif %}
                        {% if bon.aaref == 'non' and bon.aarem == 'non' %}
                            <td colspan=\"5\" style=\"text-align: right\">
                                <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b>
                            </td>
                        {% endif %}
                        {% if bon.aaref == 'oui' and bon.aarem == 'non' %}
                            <td colspan=\"6\" style=\"text-align: right\">
                                <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b>
                            </td>
                        {% endif %}
                        {% if bon.aaref == 'non' and bon.aarem == 'oui' %}
                            <td colspan=\"6\" style=\"text-align: right\">
                                <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b>
                            </td>
                        {% endif %}

                    </tr>

                {% endfor %}

                {% for lign in lignes %}
                    {% if lign.groupe == null %}
                        <tr>
                            {% if bon.aaref == 'oui' %}
                                <td style=\"text-align: center\">{{ lign.reference }}</td>
                            {% endif %}
                            <td>{{ lign.designation|raw }}</td>
                            <td style=\"text-align: center\">{{ lign.unite }}</td>

                            {% if bon.type == \"prepa\" %}
                                <td style=\"text-align: center\">{{ lign.quantite|number_format(2, ',', ' ') }}
                                    <br><span
                                            class=\"hider\">{{ lign.quantite|number_format(5, '', '') }}</span></td>

                                <td style=\"text-align: center\">{{ lign.livrer|number_format(2, ',', ' ') }}
                                    <br><span
                                            class=\"hider\">{{ lign.livrer|number_format(5, '', '') }}</span></td>

                                <td style=\"text-align: center\">{{ lign.reste|number_format(2, ',', ' ') }}<br><span
                                            class=\"hider\">{{ lign.reste|number_format(5, '', '') }}</span></td>
                            {% endif %}
                            {% if bon.type == \"oui\" or bon.type == \"non\" %}
                                {% if bon.preparation is not null %}
                                    <td style=\"text-align: center\">{{ (lign.livrer + lign.reste)|number_format(2, ',', ' ') }}
                                        <br><span
                                                class=\"hider\">{{ (lign.livrer + lign.reste)|number_format(5, '', '') }}</span>
                                    </td>
                                    <td style=\"text-align: center\">{{ lign.livrer|number_format(2, ',', ' ') }}
                                        <br><span
                                                class=\"hider\">{{ lign.livrer|number_format(5, '', '') }}</span></td>
                                    <td style=\"text-align: center\">{{ lign.reste|number_format(2, ',', ' ') }}<br><span
                                                class=\"hider\">{{ lign.reste|number_format(5, '', '') }}</span></td>
                                    <td style=\"text-align: center\">{{ lign.quantite|number_format(2, ',', ' ') }}
                                        <br><span
                                                class=\"hider\">{{ lign.quantite|number_format(5, '', '') }}</span></td>
                                {% else %}
                                    <td style=\"text-align: center\">{{ lign.quantite|number_format(2, ',', ' ') }}
                                        <br><span
                                                class=\"hider\">{{ lign.quantite|number_format(5, '', '') }}</span></td>
                                {% endif %}
                            {% endif %}
                            {% if bon.type == \"cps\" or bon.type == \"pst\" %}
                                <td style=\"text-align: center\">{{ lign.quantite|number_format(2, ',', ' ') }}
                                    <br><span
                                            class=\"hider\">{{ lign.quantite|number_format(5, '', '') }}</span></td>
                            {% endif %}
                            {% if bon.type is not same as \"none\" %}
                                <td style=\"text-align: right\">{{ lign.pu|number_format(2, ',', ' ') }}<br><span
                                            class=\"hider\">{{ lign.pu|number_format(6, '', '') }}</span></td>
                                {% if bon.aarem == 'oui' %}
                                    <td style=\"text-align: center\">{{ lign.remise }}%</td>
                                {% endif %}
                                {% if bon.aarem == 'non' %}
                                    <td style=\"text-align: right\">{{ (lign.pu * lign.quantite)|number_format(2, ',', ' ') }}</td>
                                {% endif %}
                                {% if bon.aarem != 'non' %}
                                    <td style=\"text-align: right\">{{ ((lign.pu * lign.quantite)*((100 - lign.remise)/100))|number_format(2, ',', ' ') }}</td>
                                {% endif %}
                            {% endif %}
                        </tr>
                    {% endif %}
                {% endfor %}

                {% if bon.type != \"none\" and bon.type != \"cps\" %}
                    {% if bon.type != \"pst\" %}
                        {% if bon.caisses is not null %}
                            {% if bon.aaref is same as 'oui' %}
                                {% if bon.aarem is same as 'oui' %}
                                    <tr>
                                        <td colSpan=\"10\" class=\"borde\" style=\"color: red\"><b>HISTORIQUE DES
                                                PAIEMENTS</b>
                                        </td>
                                    </tr>
                                    {% set recu = 0 %}
                                    {% for caisse in bon.caisses %}
                                        {% if caisse.etat == 'valide' %}
                                            <tr>
                                                <td colSpan=\"9\">{{ caisse.date|date('d/m/y') }} |
                                                    <span>N° Bon: {{ caisse.numcaisse }}</span> |
                                                    Somme reçue
                                                </td>
                                                <td>
                                                    {{ caisse.montant|number_format(2, ',', ' ') }}
                                                    {% set recu = caisse.montant + recu %}
                                                </td>
                                            </tr>
                                        {% endif %}
                                    {% endfor %}
                                {% endif %}
                                {% if bon.aarem is not same as 'oui' %}
                                    <tr>
                                        <td colSpan=\"9\" class=\"borde\" style=\"color: red\"><b>HISTORIQUE DES PAIEMENTS</b>
                                        </td>
                                    </tr>
                                    {% set recu = 0 %}
                                    {% for caisse in bon.caisses %}
                                        {% if caisse.etat == 'valide' %}
                                            <tr>
                                                <td colSpan=\"5\">{{ caisse.date|date('d/m/y') }} |
                                                    <span>N° Bon: {{ caisse.numcaisse }}</span> |
                                                    Somme reçue
                                                </td>
                                                <td>
                                                    {{ caisse.montant|number_format(2, ',', ' ') }}
                                                    {% set recu = caisse.montant + recu %}
                                                </td>
                                            </tr>
                                        {% endif %}
                                    {% endfor %}
                                {% endif %}
                            {% endif %}
                            {% if bon.aaref is not same as 'oui' %}
                                {% if bon.aarem is same as 'oui' %}
                                    <tr>
                                        <td colSpan=\"9\" class=\"borde\" style=\"color: red\"><b>HISTORIQUE DES PAIEMENTS</b>
                                        </td>
                                    </tr>
                                    {% set recu = 0 %}
                                    {% for caisse in bon.caisses %}
                                        {% if caisse.etat == 'valide' %}
                                            <tr>
                                                <td colSpan=\"6\">{{ caisse.date|date('d/m/y') }} |
                                                    <span>N° Bon: {{ caisse.numcaisse }}</span> |
                                                    Somme reçue
                                                </td>
                                                <td>
                                                    {{ caisse.montant|number_format(2, ',', ' ') }}
                                                    {% set recu = caisse.montant + recu %}
                                                </td>
                                            </tr>
                                        {% endif %}
                                    {% endfor %}
                                {% endif %}
                                {% if bon.aarem != 'oui' %}
                                    <tr>
                                        <td colSpan=\"8\" class=\"borde\" style=\"color: red\"><b>HISTORIQUE DES PAIEMENTS</b>
                                        </td>
                                    </tr>
                                    {% set recu = 0 %}
                                    {% for caisse in bon.caisses %}
                                        {% if caisse.etat == 'valide' %}
                                            <tr>
                                                <td colSpan=\"4\">{{ caisse.date|date('d/m/y') }} |
                                                    <span>N° Bon: {{ caisse.numcaisse }}</span> |
                                                    Somme reçue
                                                </td>
                                                <td>
                                                    {{ caisse.montant|number_format(2, ',', ' ') }}
                                                    {% set recu = caisse.montant + recu %}
                                                </td>
                                            </tr>
                                        {% endif %}
                                    {% endfor %}
                                {% endif %}
                            {% endif %}
                        {% endif %}
                    {% endif %}
                {% endif %}

            </table>
            {% if bon.type is not same as \"pst\" and bon.type is not same as 'none' %}
                {% if bon.type is not same as \"prepa\" %}
                    <table class=\"table-bordered\" style=\"float: right; width: 60% ; margin-top: 10px\">
                        <tr style=\"font-weight: 600\">
                            <td style=\"text-align: center ; background-color: #f8f9fa\"><b>SOMME PERÇUE</b></td>
                            <td style=\"text-align: center ; background-color: #f8f9fa\"><b>RESTE À PAYER</b></td>
                        </tr>
                        <tr>
                            <td style=\"text-align: center\">{{ bon.recu|number_format(2, ',', ' ') }}</td>
                            <td style=\"text-align: center\">{{ bon.reste|number_format(2, ',', ' ') }}</td>
                        </tr>
                    </table>
                {% endif %}
                <table class=\"table-bordered\" style=\"float: right; width: 60% ; margin-top: 10px\">
                    <tr style=\"font-weight: 600\">
                        <td style=\"text-align: center ; background-color: #f8f9fa\"><b>TOTAL
                                HT</b></td>
                        {% if bon.aarem == 'oui' and  bon.type != \"none\" %}
                            <td style=\"text-align: center ; background-color: #f8f9fa\">
                                <b>REMISE</b></td>
                        {% endif %}
                        <td style=\"text-align: center ; background-color: #f8f9fa\">
                            <b>TVA {{ bon.tva }}%</b></td>
                        <td style=\"text-align: center ; background-color: #f8f9fa\"><b>NET À
                                PAYER</b></td>
                    </tr>
                    <tr>
                        <td style=\"text-align: center\">{{ bon.totalht|number_format(2, ',', ' ') }}</td>
                        {% if bon.aarem == 'oui' and  bon.type != \"none\" %}
                            <td style=\"text-align: center\">{{ bon.vremise|number_format(2, ',', ' ') }}</td>
                        {% endif %}
                        <td style=\"text-align: center\">{{ bon.vtva|number_format(2, ',', ' ') }}</td>
                        <td style=\"text-align: center\">{{ bon.totalttc|number_format(2, ',', ' ') }}</td>
                    </tr>
                </table>
            {% endif %}
            {% if bon.type == \"pst\" %}
                {% if bon.type == \"none\" %}
                    <table class=\"table-bordered\" style=\"float: left; width: 60% ; margin-top: 10px\">
                        <tr style=\"font-weight: 600\">
                            <td style=\"text-align: center ; background-color: #f8f9fa\"><b>TOTAL
                                    HT</b></td>
                            {% if bon.aarem == 'oui' and  bon.type != \"none\" %}
                                <td style=\"text-align: center ; background-color: #f8f9fa\">
                                    <b>REMISE</b></td>
                            {% endif %}
                            <td style=\"text-align: center ; background-color: #f8f9fa\">
                                <b>TVA {{ bon.tva }}%</b></td>
                            <td style=\"text-align: center ; background-color: #f8f9fa\"><b>NET À
                                    PAYER</b></td>
                        </tr>
                        <tr>
                            <td style=\"text-align: center\">{{ bon.totalht|number_format(2, ',', ' ') }}</td>
                            {% if bon.aarem == 'oui' and  bon.type != \"none\" %}
                                <td style=\"text-align: center\">{{ bon.vremise|number_format(2, ',', ' ') }}</td>
                            {% endif %}
                            <td style=\"text-align: center\">{{ bon.vtva|number_format(2, ',', ' ') }}</td>
                            <td style=\"text-align: center\">{{ bon.totalttc|number_format(2, ',', ' ') }}</td>
                        </tr>
                    </table>
                {% endif %}
                <table class=\"table-bordered\" style=\"float: left; width: 60% ; margin-top: 10px\">
                    <tr style=\"font-weight: 600\">
                        <td style=\"text-align: center ; background-color: #f8f9fa\"><b>TOTAL
                                HT</b></td>
                        {% if bon.aarem == 'oui' and  bon.type != \"none\" %}
                            <td style=\"text-align: center ; background-color: #f8f9fa\">
                                <b>REMISE</b></td>
                        {% endif %}
                        <td style=\"text-align: center ; background-color: #f8f9fa\">
                            <b>TVA {{ bon.tva }}%</b></td>
                        <td style=\"text-align: center ; background-color: #f8f9fa\"><b>NET À
                                PAYER</b></td>
                    </tr>
                    <tr>
                        <td style=\"text-align: center\">{{ bon.totalht|number_format(2, ',', ' ') }}</td>
                        {% if bon.aarem == 'oui' and  bon.type != \"none\" %}
                            <td style=\"text-align: center\">{{ bon.vremise|number_format(2, ',', ' ') }}</td>
                        {% endif %}
                        <td style=\"text-align: center\">{{ bon.vtva|number_format(2, ',', ' ') }}</td>
                        <td style=\"text-align: center\">{{ bon.totalttc|number_format(2, ',', ' ') }}</td>
                    </tr>
                </table>
                <table class=\"table-bordered\" style=\"float: right; width: 38% ; margin-top: 10px\">
                    <tr style=\"font-weight: 600\">
                        <td style=\"text-align: center ;  background-color: #f8f9fa; font-weight: 700\">SOMME
                            RECUE
                        </td>
                        <td style=\"text-align: center ; background-color: #f8f9fa; font-weight: 700\">RESTE À
                            PAYER
                        </td>
                    </tr>
                    <tr>
                        <td style=\"text-align: center\">{{ bon.recu|number_format(2, ',', ' ') }}</td>
                        <td style=\"text-align: center\">{{ bon.reste|number_format(2, ',', ' ') }}</td>
                    </tr>
                </table>
            {% endif %}
            {% if bon.type == \"none\" %}
                <table style=\"width: 100%; margin-Top: 5px;\">
                    <tr>
                        <td style=\"text-align: left ; text-decoration: underline; border: none !important;\">VISA
                            CHEF CHANTIER
                        </td>
                        <td style=\"text-align: center ; text-decoration: underline; border: none !important;\">VISA
                            CHEF DÉPÔT
                        </td>
                        <td style=\"text-align: right ; text-decoration: underline; border: none !important;\">VISA
                            DIRECTION
                        </td>
                    </tr>
                </table>
            {% endif %}
            {% if bon.type != \"none\" %}
                <p style=\"font-weight: 700; color: #111010; text-align: left\">
                    Arrêté le présent bon à la somme de: <br><span
                            style=\"color: dimgray\"> {{ bon.totalttc|craue_spellout() }} {{ bon.monnaie.code }}</span>
                </p><br>
                <p style=\"float: right\"><u>SIGNATURE AUTORISÉE</u></p><br><br><br>
            {% endif %}
            {% if bon.conditions is not null %}
                <p style=\"float: left; color: #4e73df;\"><u>INFORMATIONS ADDITIONNELLES</u></p>
                <p style=\"clear: both\"></p>
                <p style=\"color: #000000;\">{{ bon.conditions|raw }}</p>
            {% endif %}


    </div>
{% endif %}
{% if type == 'facture' %}
    <div class=\"bood\">
        <div>
            <div>
                <table style=\"margin-top:{{ formes.teteDB + formes.headerHeight }}cm; float: right; width: 100%\">
                    <tr>
                        <td style=\"border: none !important; padding-left: 500px; text-align: center\">
                            <b style=\"font-size: 14px; text-align: center\">{{ devis.client.nomclient|upper }}</b><br>

                            {% if devis.client.contribuable is not null %}
                                {{ devis.client.contribuable }}<br>
                            {% endif %}

                            {% if devis.client.adresse is not null %}
                                {{ devis.client.adresse }}<br>
                            {% endif %}

                            {% if devis.client.mail is not null %}
                                {{ devis.client.mail }}<br>
                            {% endif %}

                        </td>
                    </tr>
                </table>
                <p style=\"clear: both\"></p>
                <div>
                    <table style=\"width:80%;\">
                        <tr>
                            <td class=\"bordz\"><b><u>DATE:</u></b> {{ facture.date|date('d/m/y') }}</td>
                        </tr>
                        <tr>
                            <td class=\"bordz\"><b><u>RÉFÉRENCE:</u></b><br/>
                                FACTURE DE SOLDE<br/>
                                {{ facture.factreference|striptags|raw }} selon
                                <span style=\"font-weight: bold\">Devis N° {{ devis.iddevis }}</span></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div>
                <table style=\"width: 100%;\">
                    <tr class=\"printer\">
                        {% if devis.aaref == 'oui' %}
                            <th style=\"text-align: center\">RÉF</th>
                        {% endif %}
                        {% if devis.modele == 2 %}
                            <th style=\"max-width:500px !important; min-width: 250px !important; text-align: left\">
                                DESCRIPTION
                            </th>
                        {% else %}
                            <th style=\"max-width:500px !important; min-width: 250px !important; text-align: left\">
                                DÉSIGNATION
                            </th>
                        {% endif %}
                        {% if devis.zone == 'oui' %}
                            <th style=\"text-align: center\">SECTION</th>
                        {% endif %}
                        <th style=\"text-align: center\">UNITÉ</th>
                        <th style=\"text-align: center\">QTÉ</th>
                        <th style=\"text-align: center\">PRIX&nbsp;U.</th>
                        {% if devis.aarem == 'oui' %}
                            <th style=\" text-align: center\">REMISE</th>
                        {% endif %}
                        <th style=\"text-align: center\">MONTANT&nbsp;HT</th>
                    </tr>


                    {% for group in listGroup %}
                        <tr class=\"togo\">
                            {% if devis.zone == 'oui' and devis.aarem == 'oui' %}
                                {% if devis.aaref == 'oui' %}
                                    <td class=\"text-center\"><b>{{ group.reference }}</b></td>
                                {% endif %}
                                <td COLSPAN=\"7\"><b>{{ group.groupe|striptags|raw }}</b></td>

                            {% elseif devis.zone == 'non' and devis.aarem == 'non' %}
                                {% if devis.aaref == 'oui' %}
                                    <td class=\"text-center\"><b>{{ group.reference }}</b></td>
                                {% endif %}
                                <td colspan=\"5\"><b>{{ group.groupe|striptags|raw }}</b></td>

                            {% elseif devis.zone == 'oui' and devis.aarem == 'non' %}
                                {% if devis.aaref == 'oui' %}
                                    <td class=\"text-center\"><b>{{ group.reference }}</b></td>
                                {% endif %}
                                <td colspan=\"6\"><b>{{ group.groupe|striptags|raw }}</b></td>

                            {% elseif devis.aarem == 'oui' and devis.zone == 'non' %}
                                {% if devis.aaref == 'oui' %}
                                    <td class=\"text-center\"><b>{{ group.reference }}</b></td>
                                {% endif %}
                                <td colspan=\"6\"><b>{{ group.groupe|striptags|raw }}</b></td>
                            {% endif %}
                        </tr>
                        {% set st = 0 %}

                        {% for lign in group.lignes %}
                            {% if lign.devis !=  null %}
                                <tr>
                                    {% if devis.aaref == 'oui' %}
                                        <td style=\"text-align: center\">{{ lign.reference }}</td>
                                    {% endif %}
                                    <td align=\"left\">{{ lign.designation|raw }}</td>
                                    {% if devis.zone == 'oui' %}
                                        <td style=\"text-align: center\">{{ lign.zone }}</td>
                                    {% endif %}
                                    <td style=\"text-align: center\">{{ lign.unite }}</td>
                                    <td style=\"text-align: center\">{{ lign.quantite|number_format(2, ',', ' ') }}
                                        <br><span
                                                class=\"hider\">{{ lign.quantite|number_format(6, ',', '.') }}</span></td>
                                    <td style=\"text-align: right\">{{ lign.pu|number_format(2, ',', ' ') }}<br><span
                                                class=\"hider\">{{ lign.pu|number_format(5, ',', '.') }}</span></td>
                                    {% if devis.aarem == 'oui' %}
                                        <td style=\"text-align: center\">{{ lign.remise }}%</td>
                                    {% endif %}
                                    {% if devis.aarem == 'non' %}
                                        <td style=\"text-align: right\">{% set st = (lign.pu * lign.quantite) + st %} {{ (lign.pu * lign.quantite)|number_format(2, ',', ' ') }}
                                            <br><span
                                                    class=\"hider\">{{ (lign.pu * lign.quantite)|number_format(4, ',', '.') }}</span>
                                        </td>
                                    {% else %}
                                        <td style=\"text-align: right\">{% set st = ((lign.pu * lign.quantite)*((100 - lign.remise)/100)) + st %}{{ ((lign.pu * lign.quantite)*((100 - lign.remise)/100))|number_format(2, ',', ' ') }}</td>
                                    {% endif %}
                                    </td>
                                </tr>
                            {% endif %}
                        {% endfor %}
                        <tr class=\"togo\">
                            {% if devis.zone == 'oui' and devis.aarem == 'oui' %}
                                {% if devis.aaref == 'oui' %}
                                    <td COLSPAN=\"8\" align=\"right\">
                                        <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b></td>
                                {% else %}
                                    <td COLSPAN=\"7\" align=\"right\">
                                        <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b></td>
                                {% endif %}
                            {% elseif devis.zone == 'non' and devis.aarem == 'non' %}
                                {% if devis.aaref == 'oui' %}
                                    <td COLSPAN=\"6\" align=\"right\">
                                        <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b></td>
                                {% else %}
                                    <td COLSPAN=\"5\" align=\"right\">
                                        <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b></td>
                                {% endif %}

                            {% elseif devis.zone == 'oui' and devis.aarem == 'non' %}
                                {% if devis.aaref == 'oui' %}
                                    <td COLSPAN=\"7\" align=\"right\">
                                        <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b></td>
                                {% else %}
                                    <td COLSPAN=\"6\" align=\"right\">
                                        <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b></td>
                                {% endif %}

                            {% elseif devis.aarem == 'oui' and devis.zone == 'non' %}
                                {% if devis.aaref == 'oui' %}
                                    <td COLSPAN=\"7\" align=\"right\">
                                        <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b></td>
                                {% else %}
                                    <td COLSPAN=\"6\" align=\"right\">
                                        <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b></td>
                                {% endif %}
                            {% endif %}

                        </tr>

                    {% endfor %}
                    {% for lign in lignes %}
                        {% if lign.groupe == null %}
                            <tr>
                                {% if devis.aaref == 'oui' %}
                                    <td style=\"text-align: center\">{{ lign.reference }}</td>
                                {% endif %}
                                <td>{{ lign.designation|raw }}</td>
                                {% if devis.zone == 'oui' %}
                                    <td style=\"text-align: center\">{{ lign.zone }}</td>
                                {% endif %}
                                <td style=\"text-align: center\">{{ lign.unite }}</td>
                                <td style=\"text-align: center\">{{ lign.quantite|number_format(2, ',', ' ') }}<br><span
                                            class=\"hider\">{{ lign.quantite|number_format(6, ',', ' ') }}</span></td>
                                <td style=\"text-align: right\">{{ lign.pu|number_format(2, ',', ' ') }}<br><span
                                            class=\"hider\">{{ lign.pu|number_format(4, ',', '.') }}</span></td>
                                {% if devis.aarem == 'oui' %}
                                    <td style=\"text-align: center\">{{ lign.remise }}%</td>
                                {% endif %}
                                {% if devis.aarem == 'non' %}
                                    <td style=\"text-align: right\">{{ (lign.pu * lign.quantite)|number_format(2, ',', ' ') }}
                                        <br><span
                                                class=\"hider\">{{ (lign.pu * lign.quantite)|number_format(4, ',', '.') }}</span>
                                    </td>
                                {% endif %}
                                {% if devis.aarem != 'non' %}
                                    <td style=\"text-align: right\">{{ ((lign.pu * lign.quantite)*((100 - lign.remise)/100))|number_format(2, ',', ' ') }}</td>
                                {% endif %}
                            </tr>
                        {% endif %}
                    {% endfor %}

                    {% if devis.aarem == 'oui' %}
                        <tr>
                            {% if devis.aaref == 'oui' %}
                                <td class=\"bord\"></td>
                            {% endif %}
                            <td class=\"bord\"></td>
                            {% if devis.zone == 'oui' %}
                                <td class=\"bord\"></td>
                            {% endif %}
                            <td class=\"bord\"></td>
                            {% if devis.aarem == 'oui' %}
                                <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>REMISE</b></td>
                            {% else %}
                                <td class=\"bord\" colspan=\"2\" style=\"text-align: right;\"><b>REMISE</b></td>
                            {% endif %}
                            <td align=\"right\">{{ devis.vremise|number_format(2, ',', ' ') }}</td>
                        </tr>
                    {% endif %}
                    <tr>
                        {% if devis.aaref == 'oui' %}
                            <td class=\"bord\"></td>
                        {% endif %}
                        <td class=\"bord\"></td>
                        {% if devis.zone == 'oui' %}
                            <td class=\"bord\"></td>
                        {% endif %}
                        {% if devis.aarem == 'oui' %}
                            <td colspan=\"4\" class=\"bord\" style=\"text-align: right;\"><b>DEVIS TOTAL HT</b></td>
                        {% else %}
                            <td class=\"bord\" colspan=\"3\" style=\"text-align: right;\"><b>DEVIS TOTAL HT</b></td>
                        {% endif %}
                        <td align=\"right\">{{ devis.totalht|number_format(2, ',', ' ') }}</td>
                    </tr>

                    <tr>
                        {% if devis.aaref == 'oui' %}
                            <td class=\"bord\"></td>
                        {% endif %}
                        <td class=\"bord\"></td>
                        {% if devis.zone == 'oui' %}
                            <td class=\"bord\"></td>
                        {% endif %}
                        {% if devis.aarem == 'oui' %}
                            <td colspan=\"4\" class=\"bord\" style=\"text-align: right;\"><b>DÉDUCTION DES ACOMPTES</b></td>
                        {% else %}
                            <td class=\"bord\" colspan=\"3\" style=\"text-align: right;\"><b>DÉDUCTION DES ACOMPTES</b></td>
                        {% endif %}
                        <td align=\"right\">{{ totalacomptes|number_format(2, ',', ' ') }}</td>
                    </tr>

                    <tr>
                        {% if devis.aaref == 'oui' %}
                            <td class=\"bord\"></td>
                        {% endif %}
                        <td class=\"bord\"></td>
                        {% if devis.zone == 'oui' %}
                            <td class=\"bord\"></td>
                        {% endif %}
                        {% if devis.aarem == 'oui' %}
                            <td colspan=\"4\" class=\"bord\" style=\"text-align: right;\"><b>DÉDUCTION DES DÉCOMPTES</b></td>
                        {% else %}
                            <td class=\"bord\" colspan=\"3\" style=\"text-align: right;\"><b>DÉDUCTION DES DÉCOMPTES</b></td>
                        {% endif %}
                        <td align=\"right\">{{ totaldecomptes|number_format(2, ',', ' ') }}</td>
                    </tr>

                    <tr>
                        {% if devis.aaref == 'oui' %}
                            <td class=\"bord\"></td>
                        {% endif %}

                        {% if devis.zone == 'oui' %}
                            {% if devis.aarem == 'oui' %}
                                <td colspan=\"6\" class=\"bord\" style=\"text-align: right;\"><b>ADDITION DES
                                        RETENUES(FINITION-GARANTIE-PRORATA-TRC)</b></td>
                            {% else %}
                                <td class=\"bord\" colspan=\"5\" style=\"text-align: right;\"><b>ADDITION DES
                                        RETENUES(FINITION-GARANTIE-PRORATA-TRC)</b></td>
                            {% endif %}
                        {% endif %}

                        {% if devis.zone != 'oui' %}
                            {% if devis.aarem == 'oui' %}
                                <td colspan=\"5\" class=\"bord\" style=\"text-align: right;\"><b>ADDITION DES
                                        RETENUES(FINITION-GARANTIE-PRORATA-TRC)</b></td>
                            {% else %}
                                <td class=\"bord\" colspan=\"4\" style=\"text-align: right;\"><b>ADDITION DES
                                        RETENUES(FINITION-GARANTIE-PRORATA-TRC)</b></td>
                            {% endif %}
                        {% endif %}

                        <td align=\"right\">{{ totaldecomptes|number_format(2, ',', ' ') }}</td>
                    </tr>

                    <tr>
                        {% if devis.aaref == 'oui' %}
                            <td class=\"bord\"></td>
                        {% endif %}
                        <td class=\"bord\"></td>
                        {% if devis.zone == 'oui' %}
                            <td class=\"bord\"></td>
                        {% endif %}
                        <td class=\"bord\"></td>
                        {% if devis.aarem == 'oui' %}
                            <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT</b></td>
                        {% else %}
                            <td class=\"bord\" colspan=\"2\" style=\"text-align: right;\"><b>TOTAL HT</b></td>
                        {% endif %}
                        <td align=\"right\">{{ totalhtsolde|number_format(2, ',', ' ') }}</td>
                    </tr>

                    {% if devis.abasetva == 'oui' %}
                        <tr>
                            {% if devis.aaref == 'oui' %}
                                <td class=\"bord\"></td>
                            {% endif %}
                            <td class=\"bord\"></td>
                            {% if devis.zone == 'oui' %}
                                <td class=\"bord\"></td>
                            {% endif %}
                            <td class=\"bord\"></td>
                            {% if devis.aarem == 'oui' %}
                                <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>BASE
                                        TVA{% if devis.code is not null %}({{ devis.code }}){% endif %}</b></td>
                            {% else %}
                                <td class=\"bord\" colspan=\"2\" style=\"text-align: right;\"><b>BASE
                                        TVA{% if devis.code is not null %}({{ devis.code }}){% endif %}</b></td>
                            {% endif %}
                            <td align=\"right\">{{ devis.basetva|number_format(2, ',', ' ') }}</td>
                        </tr>
                    {% endif %}
                    <tr>
                        {% if devis.aaref == 'oui' %}
                            <td class=\"bord\"></td>
                        {% endif %}
                        <td class=\"bord\"></td>
                        {% if devis.zone == 'oui' %}
                            <td class=\"bord\"></td>
                        {% endif %}
                        {% if devis.aarem == 'oui' %}
                            <td colspan=\"4\" class=\"bord\" style=\"text-align: right;\"><b>TVA {{ devis.tva }}
                                    % {% if devis.ptva == 'non' %}(non facturée){% endif %}{% if devis.ptva == 'susp' %}(suspendue){% endif %}</b></td>
                        {% else %}
                            <td class=\"bord\" colspan=\"3\" style=\"text-align: right;\"><b>TVA {{ devis.tva }}
                                    % {% if devis.ptva == 'non' %}(non facturée){% endif %}{% if devis.ptva == 'non' %}(suspendue){% endif %}</b></td>
                        {% endif %}
                        <td align=\"right\">{{ totaltva|number_format(2, ',', ' ') }}</td>
                    </tr>

                    <tr>
                        {% if devis.aaref == 'oui' %}
                            <td class=\"bord\"></td>
                        {% endif %}
                        <td class=\"bord\"></td>
                        {% if devis.zone == 'oui' %}
                            <td class=\"bord\"></td>
                        {% endif %}
                        <td class=\"bord\"></td>
                        {% if devis.aarem == 'oui' %}
                            <td colspan=\"3\" class=\"bord\"
                                style=\"color: #4e73df; border-bottom: 1px solid #D3D3D3 !important;\">
                                <b>NET À PAYER</b></td>
                        {% else %}
                            <td colspan=\"2\" class=\"bord\"
                                style=\"color: #4e73df; border-bottom: 1px solid #D3D3D3 !important;\">
                                <b>NET À PAYER</b></td>
                        {% endif %}
                        <td align=\"right\" style=\"color: #4e73df;\">
                            {{ totalttcsolde|number_format(2, ',', ' ') }}<br><span
                                    class=\"hider\">{{ totalttcsolde|number_format(2, ',', ' ') }}</span></td>
                    </tr>
                </table>
                <p style=\"clear: both\"></p>
                <p style=\"text-align: left\">
                    Arrêté la présente facture à la somme de:<br>
                    <span><b>{{ totalttcsolde|craue_spellout() }} {{ devis.monnaie.code }}</b></span>
                </p>
                <p style=\"clear: both\"></p>
                {% if facture.information is not null %}
                    <br>
                    <p style=\"float: left; color: #4e73df;\"><u>INFORMATIONS ADDITIONNELLES</u></p>
                    <p style=\"clear: both\"></p>
                    <p style=\"color: #000000;\">{{ facture.information|raw }}</p>
                {% endif %}
            </div>
        </div>
    </div>
{% endif %}
{% if type == 'facturedecompte' %}
    <div class=\"bood\">
        <div>
            <div>
                <table style=\"margin-top:{{ formes.headerHeight }}cm; float: right; width: 100%\">
                    <tr>
                        <td style=\"border: none !important; padding-left: 500px; text-align: center\">
                            <b style=\"font-size: 14px; text-align: center\">{{ devis.client.nomclient|upper }}</b><br>
                            {% if devis.client.contribuable is not null %}
                                {{ devis.client.contribuable }}<br>
                            {% endif %}

                            {% if devis.client.adresse is not null %}
                                {{ devis.client.adresse }}<br>
                            {% endif %}

                            {% if devis.client.mail is not null %}
                                {{ devis.client.mail }}<br>
                            {% endif %}

                        </td>
                    </tr>
                </table>
                <p style=\"clear: both\"></p>
                <div>
                    <table style=\"width:80%;\">
                        <tr>
                            <td class=\"bordz\"><b><u>DATE:</u></b> {{ facture.date|date('d/m/y') }}</td>
                        </tr>
                        <tr>
                            <td class=\"bordz\"><b><u>RÉFÉRENCE:</u></b><br>FACTURE SUR DÉCOMPTE <br> {{ facture.factreference|raw }}
                        </tr>
                    </table>
                </div>
            </div>
            <div>
                <table style=\"width: 100%;\">
                    <tr class=\"printer\" style=\"text-align: left !important;\">
                        <td colspan=\"5\"><b>1. DÉPENSES ENGAGÉES</b></td>
                    </tr>
                    <tr>
                        <td colspan=\"3\" style=\"text-align: right\">MONTANT TOTAL HT</td>
                        <td colspan=\"2\" style=\"text-align: right\"><b>{{ devis.totalht|number_format(2, ',', ' ') }}</b>
                        </td>
                    </tr>
                    <tr class=\"printer\" style=\"text-align: left !important;\">
                        <td colspan=\"5\"><b>2. MODALITÉS DE RÈGLEMENT</b></td>
                    </tr>
                    <tr>
                        <td colspan=\"3\"
                            style=\"text-align: left; padding-left: 20px; color: {{ formes.decolor }}!important;\"><b>AVANCEMENT
                                DES TRAVAUX</b></td>
                        <td style=\"text-align: right;\"><b>{{ decompte.avancement|number_format(2, ',', ' ') }}%</b></td>
                        <td style=\"text-align: right\"><b>{{ decompte.valeur|number_format(2, ',', ' ') }}</b></td>
                    </tr>
                    <tr>
                        <td colspan=\"5\"
                            style=\"text-align: left; padding-left: 20px; color: {{ formes.decolor }}!important;\"><b>À
                                DÉDUIRE</b></td>
                    </tr>
                    <tr>
                        <td colspan=\"3\" style=\"text-align: right;\">DÉDUCTION ACOMPTE DE DEMARRAGE</td>
                        <td style=\"text-align: right\"><b>{{ decompte.acompte|number_format(2, ',', ' ') }}%</b></td>
                        <td style=\"text-align: right\">
                            {% if decompte.deduction == \"partielle\" %}
                                <b>{{ ((decompte.valeur * decompte.acompte)/100)|number_format(2, ',', ' ') }}</b>
                            {% endif %}
                            {% if decompte.deduction == \"complete\" %}
                                <b>{{ ((decompte.totalht * decompte.acompte)/100)|number_format(2, ',', ' ') }}</b>
                            {% endif %}
                            {% if decompte.deduction == \"aucune\" %}
                                <b>{{ 0|number_format(2, ',', ' ') }}</b>
                            {% endif %}

                        </td>
                    </tr>
                    <tr>
                        <td colspan=\"3\" style=\"text-align: right;\">DÉDUCTION RETENUE GARANTIE</td>
                        <td style=\"text-align: right\">{{ decompte.garantie|number_format(2, ',', ' ') }}%</td>
                        <td style=\"text-align: right\">{{ ((decompte.valeur * decompte.garantie)/100)|number_format(2, ',', ' ') }}</td>
                    </tr>
                    <tr>
                        <td colspan=\"3\" style=\"text-align: right;\">DÉDUCTION RETENUE ASSURANCE TRC</td>
                        <td style=\"text-align: right\">{{ decompte.trc|number_format(2, ',', ' ') }}%</td>
                        <td style=\"text-align: right\">{{ ((decompte.valeur * decompte.tr)/100)|number_format(2, ',', ' ') }}</td>
                    </tr>
                    <tr>
                        <td colspan=\"3\" style=\"text-align: right;\">DÉDUCTION RETENUE DE FINITION</td>
                        <td style=\"text-align: right\">{{ decompte.finition|number_format(2, ',', ' ') }}%</td>
                        <td style=\"text-align: right\">{{ ((decompte.valeur * decompte.finition)/100)|number_format(2, ',', ' ') }}</td>
                    </tr>
                    <tr>
                        <td colspan=\"3\" style=\"text-align: right;\">DÉDUCTION COMPTE PRORATA</td>
                        <td style=\"text-align: right\">{{ decompte.prorata|number_format(2, ',', ' ') }}%</td>
                        <td style=\"text-align: right\">{{ ((decompte.valeur * decompte.prorata)/100)|number_format(2, ',', ' ') }}</td>
                    </tr>
                    <tr>
                        <td colspan=\"3\" style=\"text-align: right;\">DÉDUCTION DES DÉCOMPTES</td>
                        <td style=\"text-align: right\"></td>
                        <td style=\"text-align: right\">{{ decompte.countdecompe|number_format(2, ',', ' ') }}</td>
                    </tr>
                    <tr>
                        <td colspan=\"5\"
                            style=\"text-align: left; padding-left: 20px; color: {{ formes.decolor }}!important;\">
                            <b>SOIT</b></td>
                    </tr>
                    <tr>
                        <td colspan=\"3\" style=\"text-align: right;\">MONTANT DE LA SITUATION À DÉLIVRER HT</td>
                        <td style=\"text-align: right\"></td>
                        <td style=\"text-align: right\">{{ decompte.apayer|number_format(2, ',', ' ') }}</td>
                    </tr>
                    <tr>
                        <td colspan=\"3\" style=\"text-align: right;\">TVA {{ decompte.devis.tva }}%</td>
                        <td style=\"text-align: right\"></td>
                        <td style=\"text-align: right\">{{ ((decompte.apayer * decompte.devis.tva)/100)|number_format(2, ',', ' ') }}</td>
                    </tr>
                    <tr>
                        <td colspan=\"3\" style=\"text-align: right; color: {{ formes.decolor }}!important;\"><b>MONTANT DE
                                LA SITUATION
                                À DÉLIVRER TTC</b></td>
                        <td style=\"text-align: right\"></td>
                        <td style=\"text-align: right; color: {{ formes.decolor }}!important;\">
                            <b>{{ (decompte.ttc)|number_format(2, ',', ' ') }}</b>
                        </td>
                    </tr>
                </table>
                <p style=\"clear: both\"></p>
                <br>
                <p style=\"text-align: left\">
                    Arrêté la présente facture à la somme de:<br>
                    <span><b>{{ decompte.ttc|craue_spellout() }} {{ devis.monnaie.code }}</b></span>
                </p><br>
                <p style=\"float: right; text-decoration: underline\">SIGNATURE AUTORISÉE</p><br><br><br>
                {% if facture.information is not null %}
                    <p style=\"float: left; color: #4e73df;\"><u>INFORMATIONS ADDITIONNELLES</u></p>
                    <p style=\"clear: both\"></p>
                    <p style=\"color: #000000;\">{{ facture.information|raw }}</p>
                {% endif %}
            </div>
        </div>
    </div>
{% endif %}
{% if type == 'factureacompte' %}
    <div class=\"bood\">
        <div>
            <div>
                <table style=\"margin-top:{{ formes.teteDB + formes.headerHeight }}cm; float: right; width: 100%\">
                    <tr>
                        <td style=\"border: none !important; padding-left: 500px; text-align: center\">
                            <b style=\"font-size: 14px; text-align: center\">{{ devis.client.nomclient|upper }}</b><br>

                            {% if devis.client.contribuable is not null %}
                                {{ devis.client.contribuable }}<br>
                            {% endif %}

                            {% if devis.client.adresse is not null %}
                                {{ devis.client.adresse }}<br>
                            {% endif %}

                            {% if devis.client.mail is not null %}
                                {{ devis.client.mail }}<br>
                            {% endif %}

                        </td>
                    </tr>
                </table>
                <p style=\"clear: both\"></p>
                <div>
                    <table style=\"width:80%;\">
                        <tr>
                            <td class=\"bordz\"><b><u>DATE:</u></b> {{ facture.date|date('d/m/y') }}</td>
                        </tr>
                        <tr>
                            <td class=\"bordz\"><b><u>RÉFÉRENCE:</u></b><br/>
                                FACTURE D'ACOMPTE<br/>
                                {{ facture.factreference|striptags|raw }} selon
                                <span style=\"font-weight: bold\">Devis N° {{ devis.iddevis }}</span></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div>
                <table style=\"width: 100%;\">
                    <tr class=\"printer\">
                        {% if devis.aaref == 'oui' %}
                            <th style=\"text-align: center\">RÉF</th>
                        {% endif %}
                        {% if devis.modele == 2 %}
                            <th style=\"max-width:500px !important; min-width: 250px !important; text-align: left\">
                                DESCRIPTION
                            </th>
                        {% else %}
                            <th style=\"max-width:500px !important; min-width: 250px !important; text-align: left\">
                                DÉSIGNATION
                            </th>
                        {% endif %}
                        {% if devis.zone == 'oui' %}
                            <th style=\"text-align: center\">SECTION</th>
                        {% endif %}
                        <th style=\"text-align: center\">UNITÉ</th>
                        <th style=\"text-align: center\">QTÉ</th>
                        <th style=\"text-align: center\">PRIX&nbsp;U.</th>
                        {% if devis.aarem == 'oui' %}
                            <th style=\" text-align: center\">REMISE</th>
                        {% endif %}
                        <th style=\"text-align: center\">MONTANT&nbsp;HT</th>
                    </tr>

                    {% for group in listGroup %}
                        <tr class=\"togo\">
                            {% if devis.zone == 'oui' and devis.aarem == 'oui' %}
                                {% if devis.aaref == 'oui' %}
                                    <td class=\"text-center\"><b>{{ group.reference }}</b></td>
                                {% endif %}
                                <td COLSPAN=\"7\"><b>{{ group.groupe|striptags|raw }}</b></td>

                            {% elseif devis.zone == 'non' and devis.aarem == 'non' %}
                                {% if devis.aaref == 'oui' %}
                                    <td class=\"text-center\"><b>{{ group.reference }}</b></td>
                                {% endif %}
                                <td colspan=\"5\"><b>{{ group.groupe|striptags|raw }}</b></td>

                            {% elseif devis.zone == 'oui' and devis.aarem == 'non' %}
                                {% if devis.aaref == 'oui' %}
                                    <td class=\"text-center\"><b>{{ group.reference }}</b></td>
                                {% endif %}
                                <td colspan=\"6\"><b>{{ group.groupe|striptags|raw }}</b></td>

                            {% elseif devis.aarem == 'oui' and devis.zone == 'non' %}
                                {% if devis.aaref == 'oui' %}
                                    <td class=\"text-center\"><b>{{ group.reference }}</b></td>
                                {% endif %}
                                <td colspan=\"6\"><b>{{ group.groupe|striptags|raw }}</b></td>
                            {% endif %}
                        </tr>
                        {% set st = 0 %}

                        {% for lign in group.lignes %}
                            {% if lign.devis !=  null %}
                                <tr>
                                    {% if devis.aaref == 'oui' %}
                                        <td style=\"text-align: center\">{{ lign.reference }}</td>
                                    {% endif %}
                                    <td align=\"left\">{{ lign.designation|raw }}</td>
                                    {% if devis.zone == 'oui' %}
                                        <td style=\"text-align: center\">{{ lign.zone }}</td>
                                    {% endif %}
                                    <td style=\"text-align: center\">{{ lign.unite }}</td>
                                    <td style=\"text-align: center\">{{ lign.quantite|number_format(2, ',', ' ') }}
                                        <br><span
                                                class=\"hider\">{{ lign.quantite|number_format(6, ',', '.') }}</span></td>
                                    <td style=\"text-align: right\">{{ lign.pu|number_format(2, ',', ' ') }}<br><span
                                                class=\"hider\">{{ lign.pu|number_format(5, ',', '.') }}</span></td>
                                    {% if devis.aarem == 'oui' %}
                                        <td style=\"text-align: center\">{{ lign.remise }}%</td>
                                    {% endif %}
                                    {% if devis.aarem == 'non' %}
                                        <td style=\"text-align: right\">{% set st = (lign.pu * lign.quantite) + st %} {{ (lign.pu * lign.quantite)|number_format(2, ',', ' ') }}
                                            <br><span
                                                    class=\"hider\">{{ (lign.pu * lign.quantite)|number_format(4, ',', '.') }}</span>
                                        </td>
                                    {% else %}
                                        <td style=\"text-align: right\">{% set st = ((lign.pu * lign.quantite)*((100 - lign.remise)/100)) + st %}{{ ((lign.pu * lign.quantite)*((100 - lign.remise)/100))|number_format(2, ',', ' ') }}</td>
                                    {% endif %}
                                    </td>
                                </tr>
                            {% endif %}
                        {% endfor %}
                        <tr class=\"togo\">
                            {% if devis.zone == 'oui' and devis.aarem == 'oui' %}
                                {% if devis.aaref == 'oui' %}
                                    <td COLSPAN=\"8\" align=\"right\">
                                        <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b></td>
                                {% else %}
                                    <td COLSPAN=\"7\" align=\"right\">
                                        <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b></td>
                                {% endif %}
                            {% elseif devis.zone == 'non' and devis.aarem == 'non' %}
                                {% if devis.aaref == 'oui' %}
                                    <td COLSPAN=\"6\" align=\"right\">
                                        <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b></td>
                                {% else %}
                                    <td COLSPAN=\"5\" align=\"right\">
                                        <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b></td>
                                {% endif %}

                            {% elseif devis.zone == 'oui' and devis.aarem == 'non' %}
                                {% if devis.aaref == 'oui' %}
                                    <td COLSPAN=\"7\" align=\"right\">
                                        <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b></td>
                                {% else %}
                                    <td COLSPAN=\"6\" align=\"right\">
                                        <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b></td>
                                {% endif %}

                            {% elseif devis.aarem == 'oui' and devis.zone == 'non' %}
                                {% if devis.aaref == 'oui' %}
                                    <td COLSPAN=\"7\" align=\"right\">
                                        <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b></td>
                                {% else %}
                                    <td COLSPAN=\"6\" align=\"right\">
                                        <b>SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</b></td>
                                {% endif %}
                            {% endif %}

                        </tr>

                    {% endfor %}
                    {% for lign in lignes %}
                        {% if lign.groupe == null %}
                            <tr>
                                {% if devis.aaref == 'oui' %}
                                    <td style=\"text-align: center\">{{ lign.reference }}</td>
                                {% endif %}
                                <td>{{ lign.designation|raw }}</td>
                                {% if devis.zone == 'oui' %}
                                    <td style=\"text-align: center\">{{ lign.zone }}</td>
                                {% endif %}
                                <td style=\"text-align: center\">{{ lign.unite }}</td>
                                <td style=\"text-align: center\">{{ lign.quantite|number_format(2, ',', ' ') }}<br><span
                                            class=\"hider\">{{ lign.quantite|number_format(6, ',', ' ') }}</span></td>
                                <td style=\"text-align: right\">{{ lign.pu|number_format(2, ',', ' ') }}<br><span
                                            class=\"hider\">{{ lign.pu|number_format(4, ',', '.') }}</span></td>
                                {% if devis.aarem == 'oui' %}
                                    <td style=\"text-align: center\">{{ lign.remise }}%</td>
                                {% endif %}
                                {% if devis.aarem == 'non' %}
                                    <td style=\"text-align: right\">{{ (lign.pu * lign.quantite)|number_format(2, ',', ' ') }}
                                        <br><span
                                                class=\"hider\">{{ (lign.pu * lign.quantite)|number_format(4, ',', '.') }}</span>
                                    </td>
                                {% endif %}
                                {% if devis.aarem != 'non' %}
                                    <td style=\"text-align: right\">{{ ((lign.pu * lign.quantite)*((100 - lign.remise)/100))|number_format(2, ',', ' ') }}</td>
                                {% endif %}
                            </tr>
                        {% endif %}
                    {% endfor %}


                    <tr>
                        {% if devis.aaref == 'oui' %}
                            <td class=\"bord\"></td>
                        {% endif %}
                        <td class=\"bord\"></td>
                        {% if devis.zone == 'oui' %}
                            <td class=\"bord\"></td>
                        {% endif %}
                        {% if devis.aarem == 'oui' %}
                            <td colspan=\"4\" class=\"bord\" style=\"text-align: right;\"><b>DEVIS TOTAL HT</b></td>
                        {% else %}
                            <td class=\"bord\" colspan=\"3\" style=\"text-align: right;\"><b>DEVIS TOTAL HT</b></td>
                        {% endif %}
                        <td align=\"right\">{{ devis.totalht|number_format(2, ',', ' ') }}</td>
                    </tr>
                    {% if devis.aarem == 'oui' %}
                        <tr>
                            {% if devis.aaref == 'oui' %}
                                <td class=\"bord\"></td>
                            {% endif %}
                            <td class=\"bord\"></td>
                            {% if devis.zone == 'oui' %}
                                <td class=\"bord\"></td>
                            {% endif %}
                            <td class=\"bord\"></td>
                            {% if devis.aarem == 'oui' %}
                                <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>REMISE TOTALE</b></td>
                            {% else %}
                                <td class=\"bord\" colspan=\"2\" style=\"text-align: right;\"><b>REMISE TOTALE </b></td>
                            {% endif %}
                            <td align=\"right\">{{ devis.vremise|number_format(2, ',', ' ') }}</td>
                        </tr>
                    {% endif %}
                    {% if devis.aarem != 'non' %}
                        <tr>
                            {% if devis.aaref == 'oui' %}
                                <td class=\"bord\"></td>
                            {% endif %}
                            <td class=\"bord\"></td>
                            {% if devis.zone == 'oui' %}
                                <td class=\"bord\"></td>
                            {% endif %}
                            <td class=\"bord\"></td>
                            {% if devis.aarem == 'oui' %}
                                <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>TOTAL HT REMISÉ</b></td>
                            {% else %}
                                <td class=\"bord\" colspan=\"2\" style=\"text-align: right;\"><b>TOTAL HT REMISÉ</b></td>
                            {% endif %}
                            <td align=\"right\">{{ totalhtsolde|number_format(2, ',', ' ') }}</td>
                        </tr>
                    {% endif %}
                    <tr>
                        {% if devis.aaref == 'oui' %}
                            <td class=\"bord\"></td>
                        {% endif %}
                        <td class=\"bord\"></td>
                        {% if devis.zone == 'oui' %}
                            <td class=\"bord\"></td>
                        {% endif %}
                        {% if devis.aarem == 'oui' %}
                            <td colspan=\"4\" class=\"bord\" style=\"text-align: right;\">
                                <b>ACOMPTE {{ facture.acompte.pourcentage|number_format(2, ',', ' ') }}% HT</b></td>
                        {% else %}
                            <td class=\"bord\" colspan=\"3\" style=\"text-align: right;\">
                                <b>ACOMPTE {{ facture.acompte.pourcentage|number_format(2, ',', ' ') }}% HT</b></td>
                        {% endif %}
                        <td align=\"right\">{{ facture.totalht|number_format(2, ',', ' ') }}</td>
                    </tr>
                    {% if devis.abasetva == 'oui' %}
                        <tr>
                            {% if devis.aaref == 'oui' %}
                                <td class=\"bord\"></td>
                            {% endif %}
                            <td class=\"bord\"></td>
                            {% if devis.zone == 'oui' %}
                                <td class=\"bord\"></td>
                            {% endif %}
                            <td class=\"bord\"></td>
                            {% if devis.aarem == 'oui' %}
                                <td colspan=\"3\" class=\"bord\" style=\"text-align: right;\"><b>BASE
                                        TVA{% if devis.code is not null %}({{ devis.code }}){% endif %}</b></td>
                            {% else %}
                                <td class=\"bord\" colspan=\"2\" style=\"text-align: right;\"><b>BASE
                                        TVA{% if devis.code is not null %}({{ devis.code }}){% endif %}</b></td>
                            {% endif %}
                            <td align=\"right\">{{ devis.basetva|number_format(2, ',', ' ') }}</td>
                        </tr>
                    {% endif %}
                    <tr>
                        {% if devis.aaref == 'oui' %}
                            <td class=\"bord\"></td>
                        {% endif %}
                        <td class=\"bord\"></td>
                        {% if devis.zone == 'oui' %}
                            <td class=\"bord\"></td>
                        {% endif %}
                        {% if devis.aarem == 'oui' %}
                        <td colspan=\"4\" class=\"bord\" style=\"text-align: right;\"><b>TVA {{ devis.tva }}
                                % {% if devis.ptva == 'non' %}(non facturée){% endif %}{% if devis.ptva == 'susp' %}(suspendue){% endif %}
                            </b></td>
                        {% else %}
                        <td class=\"bord\" colspan=\"3\" style=\"text-align: right;\"><b>TVA {{ devis.tva }}
                                % {% if devis.ptva == 'non' %}(non facturée){% endif %}{% endif %}{% if devis.ptva == 'susp' %}(suspendue){% endif %}
                            </b></td>
                        <td align=\"right\">{{ facture.vtva|number_format(2, ',', ' ') }}</td>
                    </tr>
                    <tr>
                        {% if devis.aaref == 'oui' %}
                            <td class=\"bord\"></td>
                        {% endif %}
                        <td class=\"bord\"></td>
                        {% if devis.zone == 'oui' %}
                            <td class=\"bord\"></td>
                        {% endif %}
                        <td class=\"bord\"></td>
                        {% if devis.aarem == 'oui' %}
                            <td colspan=\"3\" class=\"bord\"
                                style=\"color: #4e73df; border-bottom: 1px solid #D3D3D3 !important;\">
                                <b>NET À PAYER</b></td>
                        {% else %}
                            <td colspan=\"2\" class=\"bord\"
                                style=\"color: #4e73df; border-bottom: 1px solid #D3D3D3 !important;\">
                                <b>NET À PAYER</b></td>
                        {% endif %}
                        <td align=\"right\" style=\"color: #4e73df;\">
                            {{ facture.totalttc|number_format(2, ',', '.') }}<br><span
                                    class=\"hider\">{{ facture.totalttc|number_format(4, ',', '.') }}</span></td>
                    </tr>

                </table>
                <p style=\"clear: both\"></p>
                <p style=\"text-align: left\">
                    Arrêté la présente facture à la somme de:<br>
                    <span><b>{{ facture.totalttc|craue_spellout() }} {{ devis.monnaie.code }}</b></span>
                </p>
                {% if facture.information is not null %}
                    <p style=\"float: left; color: #4e73df;\"><u>CONDITIONS ET MODALITÉS DE PAIEMENT</u></p>
                    <p style=\"clear: both\"></p>
                    <p style=\"color: #000000;\">{{ facture.information|raw }}</p>
                {% endif %}
            </div>
        </div>
    </div>
{% endif %}", "content/attachedoc_excel.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\attachedoc_excel.html.twig");
    }
}
