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

/* content/travaux.html.twig */
class __TwigTemplate_5f740390c76b2b04f3dfc25ad43bc01c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/travaux.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/travaux.html.twig"));

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

    // line 4
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

        // line 5
        yield "
    <div class=\"container-fluid\">
        <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
            <h5 style=\"color: red\">TRAVAUX DU JOUR</h5>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12 mb-4\">
                <div id=\"accordion\">
                    ";
        // line 14
        yield "                    <div class=\"card shadow mb-4\" style=\"margin-bottom: 20px\">
                        <div id=\"headingTr\">
                            <h5 class=\"mb-0\">
                                <a class=\"btn bg-pri text-left text-white\" data-toggle=\"collapse\"
                                   data-target=\"#collapseTr\"
                                   aria-expanded=\"true\" aria-controls=\"collapseTr\" style=\"width: 100%;\">
                                    1- DEVIS<span class=\"badge badge-light float-right\"
                                                  style=\"margin-top: 5px\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 21, $this->source); })()), "count", [], "any", false, false, false, 21), "html", null, true);
        yield "</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseTr\" class=\"collapse\" aria-labelledby=\"headingTr\"
                             data-parent=\"#accordion\">
                            <div class=\"card-body\">
                                <div class=\"table-responsive\">
                                    <table class=\"table-striped table-bordered display nowrap\"
                                           style=\"width: 100%\"
                                           id=\"dataDEVIS\">
                                        <thead>
                                        <tr class=\"text-center bolderr bg-light\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th style=\"width: 80px !important;\">DATE</th>
                                            <th>N° DEVIS</th>
                                            <th>RÉFÉRENCE</th>
                                            <th>TOTAL HT</th>
                                            <th>TOTAL TTC</th>
                                            <th>ETAT</th>
                                            <th style=\"background-color: #E8E8E8 !important;\" >CREÉ PAR</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 45
        $context["vdth"] = 0;
        // line 46
        yield "                                        ";
        $context["vdttc"] = 0;
        // line 47
        yield "                                        ";
        $context["ndth"] = 0;
        // line 48
        yield "                                        ";
        $context["ndttc"] = 0;
        // line 49
        yield "
                                        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["deviss"]) || array_key_exists("deviss", $context) ? $context["deviss"] : (function () { throw new RuntimeError('Variable "deviss" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["devis"]) {
            // line 51
            yield "
                                            ";
            // line 52
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "etat", [], "any", false, false, false, 52) == "valide")) {
                // line 53
                yield "                                                ";
                $context["vdth"] = (CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalht", [], "any", false, false, false, 53) + (isset($context["vdth"]) || array_key_exists("vdth", $context) ? $context["vdth"] : (function () { throw new RuntimeError('Variable "vdth" does not exist.', 53, $this->source); })()));
                // line 54
                yield "                                                ";
                $context["vdttc"] = (CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalttc", [], "any", false, false, false, 54) + (isset($context["vdttc"]) || array_key_exists("vdttc", $context) ? $context["vdttc"] : (function () { throw new RuntimeError('Variable "vdttc" does not exist.', 54, $this->source); })()));
                // line 55
                yield "                                            ";
            }
            // line 56
            yield "                                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "etat", [], "any", false, false, false, 56) == "save")) {
                // line 57
                yield "                                                ";
                $context["ndth"] = (CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalht", [], "any", false, false, false, 57) + (isset($context["ndth"]) || array_key_exists("ndth", $context) ? $context["ndth"] : (function () { throw new RuntimeError('Variable "ndth" does not exist.', 57, $this->source); })()));
                // line 58
                yield "                                                ";
                $context["ndttc"] = (CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalttc", [], "any", false, false, false, 58) + (isset($context["ndttc"]) || array_key_exists("ndttc", $context) ? $context["ndttc"] : (function () { throw new RuntimeError('Variable "ndttc" does not exist.', 58, $this->source); })()));
                // line 59
                yield "                                            ";
            }
            // line 60
            yield "                                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "etat", [], "any", false, false, false, 60) == "valide")) {
                // line 61
                yield "                                                <tr>

                                                    <td class=\"text-center\">
                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                               class=\"DEVYS\"
                                                               value=\"";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "id", [], "any", false, false, false, 66), "html", null, true);
                yield "\"></td>

                                                    <td>";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "date", [], "any", false, false, false, 68), "Y.m.d H.i.s"), "html", null, true);
                yield "</td>

                                                    <td>
                                                        <a href=\"";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "id", [], "any", false, false, false, 71), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "chantier", [], "any", false, false, false, 71), "id", [], "any", false, false, false, 71)]), "html", null, true);
                yield "\"
                                                           style=\"color:dodgerblue\"><span
                                                                    class=\"badge badge-pill badge-primary\">V</span> ";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "iddevis", [], "any", false, false, false, 73), "html", null, true);
                yield "
                                                        </a>
                                                    </td>

                                                    <td title=\"";
                // line 77
                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "reference", [], "any", false, false, false, 77));
                yield "\">";
                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "reference", [], "any", false, false, false, 77));
                yield "</td>

                                                    <td class=\"text-right\">";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalht", [], "any", false, false, false, 79), 2, ",", " "), "html", null, true);
                yield "</td>

                                                    <td class=\"text-right\">";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalttc", [], "any", false, false, false, 81), 2, ",", " "), "html", null, true);
                yield "</td>
                                                    <td>DEVIS VALIDÉS | <span style=\"color:#dc3545 !important;\">";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "client", [], "any", false, false, false, 82), "client", [], "any", false, false, false, 82), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "chantier", [], "any", false, false, false, 82), "chantier", [], "any", false, false, false, 82), "html", null, true);
                yield "</span></td>
                                                    <td class=\"text-left text-pri bolderrer\" style=\"background-color: #E8E8E8 !important;\"><i class=\"fa fa-user text-pri\"></i>&nbsp;";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "dobyuser", [], "any", false, false, false, 83), "nom", [], "any", false, false, false, 83)), "html", null, true);
                yield "&nbsp;";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "dobyuser", [], "any", false, false, false, 83), "prenoms", [], "any", false, false, false, 83)), "html", null, true);
                yield "</td>
                                                </tr>
                                            ";
            }
            // line 86
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['devis'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        yield "                                        </tbody>
                                    </table>
                                    <br>
                                    <hr style=\"width: 100%; height: 2px; background-color: darkgrey\">
                                    <br>
                                    <table class=\"table-striped table-bordered display nowrap\"
                                           style=\"width: 100%\"
                                           id=\"dataDEVIS2\">
                                        <thead>
                                        <tr class=\"text-center bolderr bg-light\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th style=\"width: 80px !important;\">DATE</th>
                                            <th>N° DEVIS</th>
                                            <th>RÉFÉRENCE</th>
                                            <th>TOTAL HT</th>
                                            <th>TOTAL TTC</th>
                                            <th>ETAT</th>
                                            <th style=\"background-color: #E8E8E8 !important;\" >CREÉ PAR</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["deviss"]) || array_key_exists("deviss", $context) ? $context["deviss"] : (function () { throw new RuntimeError('Variable "deviss" does not exist.', 108, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["devis"]) {
            // line 109
            yield "                                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "etat", [], "any", false, false, false, 109) == "save")) {
                // line 110
                yield "                                                <tr>
                                                    <td class=\"text-center\">
                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                               class=\"DEVYS2\"
                                                               value=\"";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "id", [], "any", false, false, false, 114), "html", null, true);
                yield "\"></td>

                                                    <td>";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "date", [], "any", false, false, false, 116), "Y.m.d H.i.s"), "html", null, true);
                yield "</td>

                                                    <td>
                                                        <a href=\"";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "id", [], "any", false, false, false, 119), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "chantier", [], "any", false, false, false, 119), "id", [], "any", false, false, false, 119)]), "html", null, true);
                yield "\"
                                                           style=\"color:dodgerblue\"><span
                                                                    class=\"badge badge-pill badge-secondary\">V</span> ";
                // line 121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "iddevis", [], "any", false, false, false, 121), "html", null, true);
                yield "
                                                        </a>
                                                    </td>

                                                    <td title=\"";
                // line 125
                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "reference", [], "any", false, false, false, 125));
                yield "\">";
                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "reference", [], "any", false, false, false, 125));
                yield "</td>
                                                    <td class=\"text-right\">";
                // line 126
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalht", [], "any", false, false, false, 126), 2, ",", " "), "html", null, true);
                yield "</td>
                                                    <td class=\"text-right\">";
                // line 127
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalttc", [], "any", false, false, false, 127), 2, ",", " "), "html", null, true);
                yield "</td>
                                                    <td>DEVIS NON VALIDÉS | <span style=\"color:#4e73df !important;\">";
                // line 128
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "client", [], "any", false, false, false, 128), "client", [], "any", false, false, false, 128), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "chantier", [], "any", false, false, false, 128), "chantier", [], "any", false, false, false, 128), "html", null, true);
                yield "</span></td>
                                                    <td class=\"text-left text-pri bolderrer\" style=\"background-color: #E8E8E8 !important;\"><i class=\"fa fa-user text-pri\"></i>&nbsp;";
                // line 129
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "dobyuser", [], "any", false, false, false, 129), "nom", [], "any", false, false, false, 129)), "html", null, true);
                yield "&nbsp;";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "dobyuser", [], "any", false, false, false, 129), "prenoms", [], "any", false, false, false, 129)), "html", null, true);
                yield "</td>
                                                </tr>
                                            ";
            }
            // line 132
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['devis'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        yield "                                        </tbody>
                                    </table>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 141
        yield "
                    ";
        // line 143
        yield "                    <div class=\"card shadow mb-4\" style=\"margin-bottom: 20px\">
                        <div id=\"headingQu\">
                            <h5 class=\"mb-0\">
                                <a class=\"btn bg-pri text-left text-white\" data-toggle=\"collapse\"
                                   data-target=\"#collapseQu\"
                                   aria-expanded=\"true\" aria-controls=\"collapseQu\" style=\"width: 100%;\">
                                    2- BONS DE COMMANDE<span class=\"badge badge-light float-right\"
                                                             style=\"margin-top: 5px\">";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 150, $this->source); })()), "bons", [], "any", false, false, false, 150), "count", [], "any", false, false, false, 150), "html", null, true);
        yield "</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseQu\" class=\"collapse\" aria-labelledby=\"headingQu\"
                             data-parent=\"#accordion\">
                            <div class=\"card-body\">
                                <div class=\"table-responsive\">
                                    ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 158, $this->source); })()), "flashes", ["errbon"], "method", false, false, false, 158));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 159
            yield "                                        <div class=\"alert alert-danger\">
                                            ";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        yield "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 163, $this->source); })()), "flashes", ["subon"], "method", false, false, false, 163));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 164
            yield "                                        <div class=\"alert alert-success\">
                                            ";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        yield "                                    <table class=\"table-striped table-bordered display nowrap\"
                                           style=\"width: 100%\" id=\"dataBON\">
                                        <thead>
                                        <tr class=\"text-center bg-light\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th style=\"width: 80px !important;\">DATE</th>
                                            <th>N° BON</th>
                                            <th>RÉFÉRENCE</th>
                                            <th>TOTAL HT</th>
                                            <th>TOTAL TTC</th>
                                            <th style=\"width: 10px !important;\">ETAT</th>
                                            <th style=\"background-color: #E8E8E8 !important;\" >CREÉ PAR</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["bons"]) || array_key_exists("bons", $context) ? $context["bons"] : (function () { throw new RuntimeError('Variable "bons" does not exist.', 184, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["bon"]) {
            // line 185
            yield "                                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "etat", [], "any", false, false, false, 185) == "valide")) {
                // line 186
                yield "                                                <tr>
                                                    <td class=\"text-center\">
                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                               class=\"BONNS\"
                                                               value=\"";
                // line 190
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "id", [], "any", false, false, false, 190), "html", null, true);
                yield "\"></td>
                                                    <td>";
                // line 191
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "date", [], "any", false, false, false, 191), "Y.m.d H.i.s"), "html", null, true);
                yield "</td>
                                                    <td>
                                                        ";
                // line 193
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "type", [], "any", false, false, false, 193) == "non")) {
                    // line 194
                    yield "                                                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editbon", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "id", [], "any", false, false, false, 194), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "chantier", [], "any", false, false, false, 194), "id", [], "any", false, false, false, 194)]), "html", null, true);
                    yield "\">
                                                                <span class=\"badge badge-pill badge-primary\">V</span>
                                                                <span class=\"badge badge-pill badge-danger\">BRC</span> ";
                    // line 196
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "numbon", [], "any", false, false, false, 196), "html", null, true);
                    yield "
                                                            </a>
                                                        ";
                } else {
                    // line 199
                    yield "                                                            <span
                                                                    class=\"badge badge-pill badge-primary\">V</span>
                                                            <a href=\"";
                    // line 201
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editbon", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "id", [], "any", false, false, false, 201), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "chantier", [], "any", false, false, false, 201), "id", [], "any", false, false, false, 201)]), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "numbon", [], "any", false, false, false, 201), "html", null, true);
                    yield "</a>
                                                        ";
                }
                // line 203
                yield "                                                    </td>
                                                    <td title=\"";
                // line 204
                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "reference", [], "any", false, false, false, 204));
                yield "\">";
                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "reference", [], "any", false, false, false, 204));
                yield "</td>
                                                    <td class=\"text-right\">";
                // line 205
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalht", [], "any", false, false, false, 205), 2, ",", " "), "html", null, true);
                yield "</td>
                                                    <td class=\"text-right\">";
                // line 206
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalttc", [], "any", false, false, false, 206), 2, ",", " "), "html", null, true);
                yield "</td>
                                                    <td>BONS DE COMMANDE VALIDÉS | <span style=\"color:#dc3545 !important;\">";
                // line 207
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "client", [], "any", false, false, false, 207), "client", [], "any", false, false, false, 207), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "chantier", [], "any", false, false, false, 207), "chantier", [], "any", false, false, false, 207), "html", null, true);
                yield "</span></td>
                                                    <td class=\"text-left text-pri bolderrer\" style=\"background-color: #E8E8E8 !important;\"><i class=\"fa fa-user text-pri\"></i>&nbsp;";
                // line 208
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "dobyuser", [], "any", false, false, false, 208), "nom", [], "any", false, false, false, 208)), "html", null, true);
                yield "&nbsp;";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "dobyuser", [], "any", false, false, false, 208), "prenoms", [], "any", false, false, false, 208)), "html", null, true);
                yield "</td>

                                                </tr>
                                            ";
            }
            // line 212
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['bon'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        yield "                                        </tbody>
                                    </table>
                                    <br>
                                    <hr style=\"width: 100%; height: 2px; background-color: darkgrey\">
                                    <br>
                                    <table class=\"table-striped table-bordered display nowrap\"
                                           style=\"width: 100%\" id=\"dataBON2\">
                                        <thead>
                                        <tr class=\"text-center bg-light\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th style=\"width: 80px !important;\">DATE</th>
                                            <th>N° BON</th>
                                            <th>RÉFÉRENCE</th>
                                            <th>TOTAL HT</th>
                                            <th>TOTAL TTC</th>
                                            <th style=\"width: 10px !important;\">ETAT</th>
                                            <th style=\"background-color: #E8E8E8 !important;\" >CREÉ PAR</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        ";
        // line 234
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["bons"]) || array_key_exists("bons", $context) ? $context["bons"] : (function () { throw new RuntimeError('Variable "bons" does not exist.', 234, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["bon"]) {
            // line 235
            yield "                                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "etat", [], "any", false, false, false, 235) == "save")) {
                // line 236
                yield "                                                <tr>
                                                    <td class=\"text-center\">
                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                               class=\"BONNS2\"
                                                               value=\"";
                // line 240
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "id", [], "any", false, false, false, 240), "html", null, true);
                yield "\"></td>
                                                    <td>";
                // line 241
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "date", [], "any", false, false, false, 241), "Y.m.d H.i.s"), "html", null, true);
                yield "</td>
                                                    <td>
                                                        ";
                // line 243
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "type", [], "any", false, false, false, 243) == "non")) {
                    // line 244
                    yield "                                                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editbon", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "id", [], "any", false, false, false, 244), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "chantier", [], "any", false, false, false, 244), "id", [], "any", false, false, false, 244)]), "html", null, true);
                    yield "\"><span
                                                                        class=\"badge badge-pill badge-secondary\">V</span>
                                                                <span
                                                                        class=\"badge badge-pill badge-danger\">BRC</span> ";
                    // line 247
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "numbon", [], "any", false, false, false, 247), "html", null, true);
                    yield "
                                                            </a>
                                                        ";
                } else {
                    // line 250
                    yield "                                                            <span
                                                                    class=\"badge badge-pill badge-secondary\">V</span>
                                                            <a href=\"";
                    // line 252
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editbon", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "id", [], "any", false, false, false, 252), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "chantier", [], "any", false, false, false, 252), "id", [], "any", false, false, false, 252)]), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "numbon", [], "any", false, false, false, 252), "html", null, true);
                    yield "</a>
                                                        ";
                }
                // line 254
                yield "                                                    </td>
                                                    <td title=\"";
                // line 255
                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "reference", [], "any", false, false, false, 255));
                yield "\">";
                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "reference", [], "any", false, false, false, 255));
                yield "</td>
                                                    <td class=\"text-right\">";
                // line 256
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalht", [], "any", false, false, false, 256), 2, ",", " "), "html", null, true);
                yield "</td>
                                                    <td class=\"text-right\">";
                // line 257
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalttc", [], "any", false, false, false, 257), 2, ",", " "), "html", null, true);
                yield "</td>
                                                    <td>BONS DE COMMANDE NON VALIDÉS |  <span style=\"color:#4e73df !important;\">";
                // line 258
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "client", [], "any", false, false, false, 258), "client", [], "any", false, false, false, 258), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "chantier", [], "any", false, false, false, 258), "chantier", [], "any", false, false, false, 258), "html", null, true);
                yield "</span></td>
                                                    <td class=\"text-left text-pri bolderrer\" style=\"background-color: #E8E8E8 !important;\"><i class=\"fa fa-user text-pri\"></i>&nbsp;";
                // line 259
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "dobyuser", [], "any", false, false, false, 259), "nom", [], "any", false, false, false, 259)), "html", null, true);
                yield "&nbsp;";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "dobyuser", [], "any", false, false, false, 259), "prenoms", [], "any", false, false, false, 259)), "html", null, true);
                yield "</td>

                                                </tr>
                                            ";
            }
            // line 263
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['bon'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 264
        yield "                                        </tbody>
                                    </table>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 272
        yield "
                    ";
        // line 274
        yield "                    <div class=\"card shadow mb-4\" style=\"margin-bottom: 20px\">
                        <div id=\"headingCi\">
                            <h5 class=\"mb-0\">
                                <a class=\"btn bg-pri text-left text-white\" data-toggle=\"collapse\"
                                   data-target=\"#collapseCi\"
                                   aria-expanded=\"true\" aria-controls=\"collapseCi\" style=\"width: 100%;\">
                                    3- BON DE CAISSE<span class=\"badge badge-light float-right\"
                                                          style=\"margin-top: 5px\">";
        // line 281
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caisses"]) || array_key_exists("caisses", $context) ? $context["caisses"] : (function () { throw new RuntimeError('Variable "caisses" does not exist.', 281, $this->source); })()), "count", [], "any", false, false, false, 281), "html", null, true);
        yield "</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseCi\" class=\"collapse\" aria-labelledby=\"headingCi\"
                             data-parent=\"#accordion\">
                            <div class=\"card-body\">
                                <div class=\"table-responsive\" style=\"overflow-x: scroll\">
                                    <table class=\"table-bordered display nowrap\" style=\"width: 100%\"
                                           id=\"dataCAISSE\">
                                        <thead>
                                        <tr class=\"text-center bg-light\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th style=\"width: 80px\">DATE</th>
                                            <th>N° BON</th>
                                            <th>FACTURÉ À</th>
                                            <th>CLIENT | PROJET</th>
                                            <th>MONTANT</th>
                                            <th style=\"background-color: #E8E8E8 !important;\" >CREÉ PAR</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        ";
        // line 304
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["caisses"]) || array_key_exists("caisses", $context) ? $context["caisses"] : (function () { throw new RuntimeError('Variable "caisses" does not exist.', 304, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["caisse"]) {
            // line 305
            yield "                                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "etat", [], "any", false, false, false, 305) == "valide")) {
                // line 306
                yield "                                                <tr>
                                                    <td class=\"text-center\">
                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                               class=\"CAYSS\"
                                                               value=\"";
                // line 310
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "id", [], "any", false, false, false, 310), "html", null, true);
                yield "\"></td>

                                                    <td>";
                // line 312
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "date", [], "any", false, false, false, 312), "Y.m.d H.i.s"), "html", null, true);
                yield "</td>
                                                    <td><a
                                                                href=\"";
                // line 314
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editcaisse", ["idcaisse" => CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "id", [], "any", false, false, false, 314), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "chantier", [], "any", false, false, false, 314), "id", [], "any", false, false, false, 314)]), "html", null, true);
                yield "\"><span
                                                                    class=\"badge badge-pill badge-primary\">V</span> ";
                // line 315
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "numcaisse", [], "any", false, false, false, 315), "html", null, true);
                yield "
                                                        </a>
                                                    </td>
                                                    <td title=\"";
                // line 318
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "intervenant", [], "any", false, false, false, 318), "nom", [], "any", false, false, false, 318)), "html", null, true);
                yield "\">
                                                        ";
                // line 319
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "intervenant", [], "any", false, false, false, 319), "reste", [], "any", false, false, false, 319) <= 0)) {
                    // line 320
                    yield "                                                            <span class=\"text-dangerr\">SOLDÉ</span> | ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "intervenant", [], "any", false, false, false, 320), "nom", [], "any", false, false, false, 320)), "html", null, true);
                    yield "
                                                            <br>
                                                        ";
                } else {
                    // line 323
                    yield "                                                            <span class=\"text-success\">NON SOLDÉ</span> | ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "intervenant", [], "any", false, false, false, 323), "nom", [], "any", false, false, false, 323)), "html", null, true);
                    yield "
                                                            <br>
                                                        ";
                }
                // line 326
                yield "
                                                        ";
                // line 327
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "intervenant", [], "any", false, false, false, 327), "reste", [], "any", false, false, false, 327) <= 0)) {
                    // line 328
                    yield "                                                            <span class=\"text-black-50\">
                                                                MONTANT À RECEVOIR : ";
                    // line 329
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "intervenant", [], "any", false, false, false, 329), "payer", [], "any", false, false, false, 329), 2, ",", " "), "html", null, true);
                    yield "<br>
                                                                MONTANT RECU : ";
                    // line 330
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "intervenant", [], "any", false, false, false, 330), "recu", [], "any", false, false, false, 330), 2, ",", " "), "html", null, true);
                    yield "<br>
                                                                <u class=\"text-success\">RESTE À PAYER : ";
                    // line 331
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "intervenant", [], "any", false, false, false, 331), "reste", [], "any", false, false, false, 331), 2, ",", " "), "html", null, true);
                    yield "</u><br>
                                                            </span>
                                                        ";
                } else {
                    // line 334
                    yield "                                                            <span class=\"text-black-50\">
                                                                MONTANT À RECEVOIR : ";
                    // line 335
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "intervenant", [], "any", false, false, false, 335), "payer", [], "any", false, false, false, 335), 2, ",", " "), "html", null, true);
                    yield "<br>
                                                                MONTANT RECU : ";
                    // line 336
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "intervenant", [], "any", false, false, false, 336), "recu", [], "any", false, false, false, 336), 2, ",", " "), "html", null, true);
                    yield "<br>
                                                                <u class=\"text-danger\">RESTE À PAYER : ";
                    // line 337
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "intervenant", [], "any", false, false, false, 337), "reste", [], "any", false, false, false, 337), 2, ",", " "), "html", null, true);
                    yield "</u><br>
                                                            </span>
                                                        ";
                }
                // line 340
                yield "                                                    </td>
                                                    <td title=\"";
                // line 341
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "client", [], "any", false, false, false, 341), "client", [], "any", false, false, false, 341), "html", null, true);
                yield " | ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "chantier", [], "any", false, false, false, 341), "chantier", [], "any", false, false, false, 341), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "client", [], "any", false, false, false, 341), "client", [], "any", false, false, false, 341), "html", null, true);
                yield " | ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "chantier", [], "any", false, false, false, 341), "chantier", [], "any", false, false, false, 341), "html", null, true);
                yield "</td>
                                                    <td class=\"text-right\">";
                // line 342
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "montant", [], "any", false, false, false, 342), 2, ",", " "), "html", null, true);
                yield "</td>
                                                    <td class=\"text-left text-pri bolderrer\" style=\"background-color: #E8E8E8 !important;\"><i class=\"fa fa-user text-pri\"></i>&nbsp;";
                // line 343
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "dobyuser", [], "any", false, false, false, 343), "nom", [], "any", false, false, false, 343)), "html", null, true);
                yield "&nbsp;";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "dobyuser", [], "any", false, false, false, 343), "prenoms", [], "any", false, false, false, 343)), "html", null, true);
                yield "</td>

                                                </tr>
                                            ";
            }
            // line 347
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['caisse'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 348
        yield "                                        </tbody>
                                    </table>
                                    <br>
                                    <hr style=\"width: 100%; height: 2px; background-color: darkgrey\">
                                    <br>
                                    <table class=\"table-bordered display nowrap\" style=\"width: 100%\"
                                           id=\"dataCAISSE2\">
                                        <thead>
                                        <tr class=\"text-center bg-light\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th style=\"width: 80px\">DATE</th>
                                            <th>N° BON</th>
                                            <th>ETAT</th>
                                            <th>FACTURÉ À</th>
                                            <th>RÉFÉRENCE</th>
                                            <th>MONTANT</th>
                                            <th style=\"background-color: #E8E8E8 !important;\" >CREÉ PAR</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 368
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["caisses"]) || array_key_exists("caisses", $context) ? $context["caisses"] : (function () { throw new RuntimeError('Variable "caisses" does not exist.', 368, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["caisse"]) {
            // line 369
            yield "                                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "etat", [], "any", false, false, false, 369) == "save")) {
                // line 370
                yield "                                                <tr>
                                                    <td class=\"text-center\">
                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                               class=\"CAYSS2\"
                                                               value=\"";
                // line 374
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "id", [], "any", false, false, false, 374), "html", null, true);
                yield "\"></td>

                                                    <td>";
                // line 376
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "date", [], "any", false, false, false, 376), "Y.m.d H.i.s"), "html", null, true);
                yield "</td>
                                                    <td><a
                                                                href=\"";
                // line 378
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editcaisse", ["idcaisse" => CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "id", [], "any", false, false, false, 378), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "chantier", [], "any", false, false, false, 378), "id", [], "any", false, false, false, 378)]), "html", null, true);
                yield "\"><span
                                                                    class=\"badge badge-pill badge-secondary\">V</span> ";
                // line 379
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "numcaisse", [], "any", false, false, false, 379), "html", null, true);
                yield "
                                                        </a>
                                                    </td>
                                                    <td>BONS DE CAISSE NON VALIDÉS | <span style=\"color:#4e73df !important;\">";
                // line 382
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "client", [], "any", false, false, false, 382), "client", [], "any", false, false, false, 382), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "chantier", [], "any", false, false, false, 382), "chantier", [], "any", false, false, false, 382), "html", null, true);
                yield "</span></td>
                                                    <td title=\"";
                // line 383
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "intervenant", [], "any", false, false, false, 383), "nom", [], "any", false, false, false, 383)), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "intervenant", [], "any", false, false, false, 383), "nom", [], "any", false, false, false, 383)), "html", null, true);
                yield "
                                                    </td>
                                                    <td title=\"";
                // line 385
                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "reference", [], "any", false, false, false, 385));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "reference", [], "any", false, false, false, 385)), "html", null, true);
                yield "</td>
                                                    <td class=\"text-right\">";
                // line 386
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "montant", [], "any", false, false, false, 386), 2, ",", " "), "html", null, true);
                yield "</td>
                                                    <td class=\"text-left text-pri bolderrer\" style=\"background-color: #E8E8E8 !important;\"><i class=\"fa fa-user text-pri\"></i>&nbsp;";
                // line 387
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "dobyuser", [], "any", false, false, false, 387), "nom", [], "any", false, false, false, 387)), "html", null, true);
                yield "&nbsp;";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "dobyuser", [], "any", false, false, false, 387), "prenoms", [], "any", false, false, false, 387)), "html", null, true);
                yield "</td>
                                                </tr>
                                            ";
            }
            // line 390
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['caisse'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 391
        yield "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 398
        yield "
                    ";
        // line 400
        yield "                    <div class=\"card shadow mb-4\" style=\"margin-bottom: 20px\">
                        <div id=\"headingSepT\">
                            <h5 class=\"mb-0\">
                                <a class=\"btn bg-pri text-left text-white\" data-toggle=\"collapse\"
                                   data-target=\"#collapseSepT\"
                                   aria-expanded=\"true\" aria-controls=\"collapseSepT\" style=\"width: 100%;\">
                                    4- BONS DE LIVRAISON<span class=\"badge badge-light float-right\"
                                                              style=\"margin-top: 5px\">";
        // line 407
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 407, $this->source); })()), "livraisons", [], "any", false, false, false, 407), "count", [], "any", false, false, false, 407), "html", null, true);
        yield "</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseSepT\" class=\"collapse\" aria-labelledby=\"headingSepT\"
                             data-parent=\"#accordion\">
                            <div class=\"card-body\">
                                <div class=\"table-responsive\">

                                    ";
        // line 416
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 416, $this->source); })()), "flashes", ["errlivraison"], "method", false, false, false, 416));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 417
            yield "                                        <div class=\"alert alert-danger\">
                                            ";
            // line 418
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 421
        yield "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 421, $this->source); })()), "flashes", ["sulivraison"], "method", false, false, false, 421));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 422
            yield "                                        <div class=\"alert alert-success\">
                                            ";
            // line 423
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 426
        yield "
                                    <table class=\"table-striped table-bordered display nowrap\"
                                           style=\"width: 100%\" id=\"dataLIVRAISON\">
                                        <thead>
                                        <tr class=\"text-center bg-light\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th style=\"width: 80px !important;\">DATE</th>
                                            <th style=\"width: 150px\">N° BON DE LIVRAISON</th>
                                            <th style=\"width: 160px\">INTERVENANT</th>
                                            <th style=\"width: 300px\">RÉFÉRENCE</th>
                                            <th style=\"width: 10px !important;\">ETAT</th>
                                            <th style=\"background-color: #E8E8E8 !important;\" >CREÉ PAR</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 441
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["livraisons"]) || array_key_exists("livraisons", $context) ? $context["livraisons"] : (function () { throw new RuntimeError('Variable "livraisons" does not exist.', 441, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
            // line 442
            yield "                                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "etat", [], "any", false, false, false, 442) == "valide")) {
                // line 443
                yield "                                                <tr>
                                                    <td class=\"text-center\">
                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                               class=\"LIVRES\"
                                                               value=\"";
                // line 447
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "id", [], "any", false, false, false, 447), "html", null, true);
                yield "\"></td>
                                                    <td>";
                // line 448
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "date", [], "any", false, false, false, 448), "Y.m.d H.i.s"), "html", null, true);
                yield "</td>
                                                    <td>
                                                        <a href=\"";
                // line 450
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editlivraison", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "id", [], "any", false, false, false, 450), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "chantier", [], "any", false, false, false, 450), "id", [], "any", false, false, false, 450)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "numlivre", [], "any", false, false, false, 450), "html", null, true);
                yield "</a>
                                                    </td>
                                                    <td>";
                // line 452
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "intervenant", [], "any", false, false, false, 452), "nom", [], "any", false, false, false, 452), "html", null, true);
                yield "</td>
                                                    <td title=\"";
                // line 453
                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "reference", [], "any", false, false, false, 453));
                yield "\">";
                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "reference", [], "any", false, false, false, 453));
                yield "</td>
                                                    <td>BONS DE LIVRAISON VALIDÉS | <span style=\"color:#dc3545 !important;\">";
                // line 454
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "client", [], "any", false, false, false, 454), "client", [], "any", false, false, false, 454), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "chantier", [], "any", false, false, false, 454), "chantier", [], "any", false, false, false, 454), "html", null, true);
                yield "</span></td>
                                                    <td class=\"text-left text-pri bolderrer\" style=\"background-color: #E8E8E8 !important;\"><i class=\"fa fa-user text-pri\"></i>&nbsp;";
                // line 455
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "dobyuser", [], "any", false, false, false, 455), "nom", [], "any", false, false, false, 455)), "html", null, true);
                yield "&nbsp;";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "dobyuser", [], "any", false, false, false, 455), "prenoms", [], "any", false, false, false, 455)), "html", null, true);
                yield "</td>

                                                </tr>
                                            ";
            }
            // line 459
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['livre'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 460
        yield "                                        </tbody>

                                    </table>
                                    <br>
                                    <hr style=\"width: 100%; height: 2px; background-color: darkgrey\">
                                    <br>
                                    <table class=\"table-striped table-bordered display nowrap\"
                                           style=\"width: 100%\" id=\"dataLIVRAISON2\">
                                        <thead>
                                        <tr class=\"text-center bg-light\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th style=\"width: 80px !important;\">DATE</th>
                                            <th>N° BON DE LIVRAISON</th>
                                            <th>INTERVENANT</th>
                                            <th>RÉFÉRENCE</th>
                                            <th>ETAT</th>
                                            <th style=\"background-color: #E8E8E8 !important;\" >CREÉ PAR</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 480
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 480, $this->source); })()), "livraisons", [], "any", false, false, false, 480));
        foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
            // line 481
            yield "                                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "etat", [], "any", false, false, false, 481) == "save")) {
                // line 482
                yield "                                                <tr>
                                                    <td class=\"text-center\">
                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                               class=\"LIVRES2\"
                                                               value=\"";
                // line 486
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "id", [], "any", false, false, false, 486), "html", null, true);
                yield "\"></td>
                                                    <td>";
                // line 487
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "date", [], "any", false, false, false, 487), "Y.m.d H.i.s"), "html", null, true);
                yield "</td>
                                                    <td>
                                                        <a href=\"";
                // line 489
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editlivraison", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "id", [], "any", false, false, false, 489), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "chantier", [], "any", false, false, false, 489), "id", [], "any", false, false, false, 489)]), "html", null, true);
                yield "\"
                                                           style=\"color: #dc3545 !important;\">";
                // line 490
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "numlivre", [], "any", false, false, false, 490), "html", null, true);
                yield "</a>
                                                    </td>
                                                    <td style=\"color: #dc3545 !important;\">";
                // line 492
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "intervenant", [], "any", false, false, false, 492), "nom", [], "any", false, false, false, 492)), "html", null, true);
                yield "</td>
                                                    <td title=\"";
                // line 493
                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "reference", [], "any", false, false, false, 493));
                yield "\">";
                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "reference", [], "any", false, false, false, 493));
                yield "</td>
                                                    <td>BONS DE LIVRAISON NON VALIDÉS <span style=\"color:#4e73df !important;\">";
                // line 494
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "client", [], "any", false, false, false, 494), "client", [], "any", false, false, false, 494), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "chantier", [], "any", false, false, false, 494), "chantier", [], "any", false, false, false, 494), "html", null, true);
                yield "</span></td>
                                                    <td class=\"text-left text-pri bolderrer\" style=\"background-color: #E8E8E8 !important;\"><i class=\"fa fa-user text-pri\"></i>&nbsp;";
                // line 495
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "dobyuser", [], "any", false, false, false, 495), "nom", [], "any", false, false, false, 495)), "html", null, true);
                yield "&nbsp;";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "dobyuser", [], "any", false, false, false, 495), "prenoms", [], "any", false, false, false, 495)), "html", null, true);
                yield "</td>
                                                </tr>
                                            ";
            }
            // line 498
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['livre'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 499
        yield "                                        </tbody>

                                    </table>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 508
        yield "
                    ";
        // line 510
        yield "                    <div class=\"card shadow mb-4\" style=\"margin-bottom: 20px\">
                        <div id=\"headingSep\">
                            <h5 class=\"mb-0\">
                                <a class=\"btn bg-pri text-left text-white\" data-toggle=\"collapse\"
                                   data-target=\"#collapseSep\"
                                   aria-expanded=\"true\" aria-controls=\"collapseSep\" style=\"width: 100%;\">
                                    5- FACTURES<span class=\"badge badge-light float-right\"
                                                     style=\"margin-top: 5px\">";
        // line 517
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 517, $this->source); })()), "factures", [], "any", false, false, false, 517), "count", [], "any", false, false, false, 517), "html", null, true);
        yield "</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseSep\" class=\"collapse\" aria-labelledby=\"headingSep\"
                             data-parent=\"#accordion\">
                            <div class=\"card-body\">
                                <div class=\"table-responsive\">
                                    ";
        // line 525
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 525, $this->source); })()), "flashes", ["errfact"], "method", false, false, false, 525));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 526
            yield "                                        <div class=\"alert alert-danger\">
                                            ";
            // line 527
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 530
        yield "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 530, $this->source); })()), "flashes", ["sufact"], "method", false, false, false, 530));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 531
            yield "                                        <div class=\"alert alert-success\">
                                            ";
            // line 532
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 535
        yield "                                    <table class=\"table-striped table-bordered display nowrap\"
                                           style=\"width: 100%\" id=\"dataFACTURE\">
                                        <thead>
                                        <tr class=\"text-center bg-light\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th style=\"width: 80px !important;\">DATE</th>
                                            <th>N° FACTURE</th>
                                            <th>N° DEVIS</th>
                                            <th>RÉFÉRENCE</th>
                                            <th>TOTAL HT</th>
                                            <th>TOTAL TTC</th>
                                            <th style=\"width: 10px !important;\">ETAT</th>
                                            <th style=\"background-color: #E8E8E8 !important;\" >CREÉ PAR</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        ";
        // line 552
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["factures"]) || array_key_exists("factures", $context) ? $context["factures"] : (function () { throw new RuntimeError('Variable "factures" does not exist.', 552, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 553
            yield "                                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "etat", [], "any", false, false, false, 553) == "valide")) {
                // line 554
                yield "                                                <tr>
                                                    <td class=\"text-center\">
                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                               class=\"FACTURE\"
                                                               value=\"";
                // line 558
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "id", [], "any", false, false, false, 558), "html", null, true);
                yield "\"></td>
                                                    <td>";
                // line 559
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "date", [], "any", false, false, false, 559), "Y.m.d H.i.s"), "html", null, true);
                yield "</td>
                                                    <td>
                                                        ";
                // line 561
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "type", [], "any", false, false, false, 561) == "non")) {
                    // line 562
                    yield "                                                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editfacture", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "id", [], "any", false, false, false, 562), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 562), "id", [], "any", false, false, false, 562)]), "html", null, true);
                    yield "\">
                                                                <span class=\"badge badge-pill badge-primary\">V</span>
                                                                <span class=\"badge badge-pill badge-danger\">FA</span> ";
                    // line 564
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "numfacture", [], "any", false, false, false, 564), "html", null, true);
                    yield "
                                                            </a>
                                                        ";
                } else {
                    // line 567
                    yield "                                                            <span
                                                                    class=\"badge badge-pill badge-primary\">V</span>
                                                            <a href=\"";
                    // line 569
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editfacture", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "id", [], "any", false, false, false, 569), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 569, $this->source); })()), "id", [], "any", false, false, false, 569)]), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "numfacture", [], "any", false, false, false, 569), "html", null, true);
                    yield "</a>
                                                        ";
                }
                // line 571
                yield "                                                    </td>
                                                    <td><a href=\"";
                // line 572
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "devis", [], "any", false, false, false, 572), "id", [], "any", false, false, false, 572), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 572), "id", [], "any", false, false, false, 572)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "devis", [], "any", false, false, false, 572), "iddevis", [], "any", false, false, false, 572), "html", null, true);
                yield "</a></td>
                                                    <td title=\"";
                // line 573
                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "reference", [], "any", false, false, false, 573));
                yield "\">";
                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "reference", [], "any", false, false, false, 573));
                yield "</td>
                                                    <td class=\"text-right\">";
                // line 574
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "devis", [], "any", false, false, false, 574), "totalht", [], "any", false, false, false, 574), 2, ",", " "), "html", null, true);
                yield "</td>
                                                    <td class=\"text-right\">";
                // line 575
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "devis", [], "any", false, false, false, 575), "totalttc", [], "any", false, false, false, 575), 2, ",", " "), "html", null, true);
                yield "</td>
                                                    <td>FACTURES VALIDÉÉS | <span style=\"color:#dc3545 !important;\">";
                // line 576
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "client", [], "any", false, false, false, 576), "client", [], "any", false, false, false, 576), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 576), "chantier", [], "any", false, false, false, 576), "html", null, true);
                yield "</td>
                                                    <td class=\"text-left text-pri bolderrer\" style=\"background-color: #E8E8E8 !important;\"><i class=\"fa fa-user text-pri\"></i>&nbsp;";
                // line 577
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "dobyuser", [], "any", false, false, false, 577), "nom", [], "any", false, false, false, 577)), "html", null, true);
                yield "&nbsp;";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "dobyuser", [], "any", false, false, false, 577), "prenoms", [], "any", false, false, false, 577)), "html", null, true);
                yield "</td>

                                                </tr>
                                            ";
            }
            // line 581
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['facture'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 582
        yield "                                        </tbody>
                                    </table>
                                    <br>
                                    <hr style=\"width: 100%; height: 2px; background-color: darkgrey\">
                                    <br>
                                    <table class=\"table-striped table-bordered display nowrap\"
                                           style=\"width: 100%\" id=\"dataFACTURE2\">
                                        <thead>
                                        <tr class=\"text-center bg-light\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th style=\"width: 80px !important;\">DATE</th>
                                            <th>N° FACTURE</th>
                                            <th>N° DEVIS</th>
                                            <th>RÉFÉRENCE</th>
                                            <th>TOTAL HT</th>
                                            <th>TOTAL TTC</th>
                                            <th style=\"width: 10px !important;\">ETAT</th>
                                            <th style=\"background-color: #E8E8E8 !important;\" >CREÉ PAR</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        ";
        // line 604
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 604, $this->source); })()), "factures", [], "any", false, false, false, 604));
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 605
            yield "                                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "etat", [], "any", false, false, false, 605) == "save")) {
                // line 606
                yield "                                                <tr>
                                                    <td class=\"text-center\">
                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                               class=\"FACTURE2\"
                                                               value=\"";
                // line 610
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "id", [], "any", false, false, false, 610), "html", null, true);
                yield "\"></td>
                                                    <td>";
                // line 611
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "date", [], "any", false, false, false, 611), "Y.m.d H.i.s"), "html", null, true);
                yield "</td>
                                                    <td>
                                                        ";
                // line 613
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "type", [], "any", false, false, false, 613) == "non")) {
                    // line 614
                    yield "                                                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editfacture", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "id", [], "any", false, false, false, 614), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 614), "id", [], "any", false, false, false, 614)]), "html", null, true);
                    yield "\">
                                                                <span class=\"badge badge-pill badge-secondary\">V</span>
                                                                <span class=\"badge badge-pill badge-danger\">FA</span> ";
                    // line 616
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "numfacture", [], "any", false, false, false, 616), "html", null, true);
                    yield "
                                                            </a>
                                                        ";
                } else {
                    // line 619
                    yield "                                                            <span
                                                                    class=\"badge badge-pill badge-secondary\">V</span>
                                                            <a href=\"";
                    // line 621
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editfacture", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "id", [], "any", false, false, false, 621), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 621, $this->source); })()), "id", [], "any", false, false, false, 621)]), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "numfacture", [], "any", false, false, false, 621), "html", null, true);
                    yield "</a>
                                                        ";
                }
                // line 623
                yield "                                                    </td>
                                                    <td><a href=\"";
                // line 624
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "devis", [], "any", false, false, false, 624), "id", [], "any", false, false, false, 624), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 624), "id", [], "any", false, false, false, 624)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "devis", [], "any", false, false, false, 624), "iddevis", [], "any", false, false, false, 624), "html", null, true);
                yield "</a></td>
                                                    <td title=\"";
                // line 625
                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "reference", [], "any", false, false, false, 625));
                yield "\">";
                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "reference", [], "any", false, false, false, 625));
                yield "</td>
                                                    <td class=\"text-right\">";
                // line 626
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "devis", [], "any", false, false, false, 626), "totalht", [], "any", false, false, false, 626), 2, ",", " "), "html", null, true);
                yield "</td>
                                                    <td class=\"text-right\">";
                // line 627
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "devis", [], "any", false, false, false, 627), "totalttc", [], "any", false, false, false, 627), 2, ",", " "), "html", null, true);
                yield "</td>
                                                    <td>FACTURES NON VALIDÉÉS | <span style=\"color:#4e73df !important;\">";
                // line 628
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "client", [], "any", false, false, false, 628), "client", [], "any", false, false, false, 628), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 628), "chantier", [], "any", false, false, false, 628), "html", null, true);
                yield "</td>
                                                    <td class=\"text-left text-pri bolderrer\" style=\"background-color: #E8E8E8 !important;\"><i class=\"fa fa-user text-pri\"></i>&nbsp;";
                // line 629
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "dobyuser", [], "any", false, false, false, 629), "nom", [], "any", false, false, false, 629)), "html", null, true);
                yield "&nbsp;";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "dobyuser", [], "any", false, false, false, 629), "prenoms", [], "any", false, false, false, 629)), "html", null, true);
                yield "</td>

                                                </tr>
                                            ";
            }
            // line 633
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['facture'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 634
        yield "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 641
        yield "
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
        return "content/travaux.html.twig";
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
        return array (  1416 => 641,  1408 => 634,  1402 => 633,  1393 => 629,  1387 => 628,  1383 => 627,  1379 => 626,  1373 => 625,  1367 => 624,  1364 => 623,  1357 => 621,  1353 => 619,  1347 => 616,  1341 => 614,  1339 => 613,  1334 => 611,  1330 => 610,  1324 => 606,  1321 => 605,  1317 => 604,  1293 => 582,  1287 => 581,  1278 => 577,  1272 => 576,  1268 => 575,  1264 => 574,  1258 => 573,  1252 => 572,  1249 => 571,  1242 => 569,  1238 => 567,  1232 => 564,  1226 => 562,  1224 => 561,  1219 => 559,  1215 => 558,  1209 => 554,  1206 => 553,  1202 => 552,  1183 => 535,  1174 => 532,  1171 => 531,  1166 => 530,  1157 => 527,  1154 => 526,  1150 => 525,  1139 => 517,  1130 => 510,  1127 => 508,  1117 => 499,  1111 => 498,  1103 => 495,  1097 => 494,  1091 => 493,  1087 => 492,  1082 => 490,  1078 => 489,  1073 => 487,  1069 => 486,  1063 => 482,  1060 => 481,  1056 => 480,  1034 => 460,  1028 => 459,  1019 => 455,  1013 => 454,  1007 => 453,  1003 => 452,  996 => 450,  991 => 448,  987 => 447,  981 => 443,  978 => 442,  974 => 441,  957 => 426,  948 => 423,  945 => 422,  940 => 421,  931 => 418,  928 => 417,  924 => 416,  912 => 407,  903 => 400,  900 => 398,  892 => 391,  886 => 390,  878 => 387,  874 => 386,  868 => 385,  861 => 383,  855 => 382,  849 => 379,  845 => 378,  840 => 376,  835 => 374,  829 => 370,  826 => 369,  822 => 368,  800 => 348,  794 => 347,  785 => 343,  781 => 342,  771 => 341,  768 => 340,  762 => 337,  758 => 336,  754 => 335,  751 => 334,  745 => 331,  741 => 330,  737 => 329,  734 => 328,  732 => 327,  729 => 326,  722 => 323,  715 => 320,  713 => 319,  709 => 318,  703 => 315,  699 => 314,  694 => 312,  689 => 310,  683 => 306,  680 => 305,  676 => 304,  650 => 281,  641 => 274,  638 => 272,  629 => 264,  623 => 263,  614 => 259,  608 => 258,  604 => 257,  600 => 256,  594 => 255,  591 => 254,  584 => 252,  580 => 250,  574 => 247,  567 => 244,  565 => 243,  560 => 241,  556 => 240,  550 => 236,  547 => 235,  543 => 234,  520 => 213,  514 => 212,  505 => 208,  499 => 207,  495 => 206,  491 => 205,  485 => 204,  482 => 203,  475 => 201,  471 => 199,  465 => 196,  459 => 194,  457 => 193,  452 => 191,  448 => 190,  442 => 186,  439 => 185,  435 => 184,  417 => 168,  408 => 165,  405 => 164,  400 => 163,  391 => 160,  388 => 159,  384 => 158,  373 => 150,  364 => 143,  361 => 141,  352 => 133,  346 => 132,  338 => 129,  332 => 128,  328 => 127,  324 => 126,  318 => 125,  311 => 121,  306 => 119,  300 => 116,  295 => 114,  289 => 110,  286 => 109,  282 => 108,  259 => 87,  253 => 86,  245 => 83,  239 => 82,  235 => 81,  230 => 79,  223 => 77,  216 => 73,  211 => 71,  205 => 68,  200 => 66,  193 => 61,  190 => 60,  187 => 59,  184 => 58,  181 => 57,  178 => 56,  175 => 55,  172 => 54,  169 => 53,  167 => 52,  164 => 51,  160 => 50,  157 => 49,  154 => 48,  151 => 47,  148 => 46,  146 => 45,  119 => 21,  110 => 14,  100 => 5,  87 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ title }}{% endblock %}
{% block body %}

    <div class=\"container-fluid\">
        <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
            <h5 style=\"color: red\">TRAVAUX DU JOUR</h5>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12 mb-4\">
                <div id=\"accordion\">
                    {# DEVIS #}
                    <div class=\"card shadow mb-4\" style=\"margin-bottom: 20px\">
                        <div id=\"headingTr\">
                            <h5 class=\"mb-0\">
                                <a class=\"btn bg-pri text-left text-white\" data-toggle=\"collapse\"
                                   data-target=\"#collapseTr\"
                                   aria-expanded=\"true\" aria-controls=\"collapseTr\" style=\"width: 100%;\">
                                    1- DEVIS<span class=\"badge badge-light float-right\"
                                                  style=\"margin-top: 5px\">{{ devis.count }}</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseTr\" class=\"collapse\" aria-labelledby=\"headingTr\"
                             data-parent=\"#accordion\">
                            <div class=\"card-body\">
                                <div class=\"table-responsive\">
                                    <table class=\"table-striped table-bordered display nowrap\"
                                           style=\"width: 100%\"
                                           id=\"dataDEVIS\">
                                        <thead>
                                        <tr class=\"text-center bolderr bg-light\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th style=\"width: 80px !important;\">DATE</th>
                                            <th>N° DEVIS</th>
                                            <th>RÉFÉRENCE</th>
                                            <th>TOTAL HT</th>
                                            <th>TOTAL TTC</th>
                                            <th>ETAT</th>
                                            <th style=\"background-color: #E8E8E8 !important;\" >CREÉ PAR</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% set vdth = 0 %}
                                        {% set vdttc = 0 %}
                                        {% set ndth = 0 %}
                                        {% set ndttc = 0 %}

                                        {% for devis in deviss %}

                                            {% if devis.etat == 'valide' %}
                                                {% set vdth = devis.totalht + vdth %}
                                                {% set vdttc = devis.totalttc + vdttc %}
                                            {% endif %}
                                            {% if devis.etat == 'save' %}
                                                {% set ndth = devis.totalht + ndth %}
                                                {% set ndttc = devis.totalttc + ndttc %}
                                            {% endif %}
                                            {% if devis.etat == 'valide' %}
                                                <tr>

                                                    <td class=\"text-center\">
                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                               class=\"DEVYS\"
                                                               value=\"{{ devis.id }}\"></td>

                                                    <td>{{ devis.date|date('Y.m.d H.i.s') }}</td>

                                                    <td>
                                                        <a href=\"{{ path('editdevis', {'id': devis.id, 'idchantier': devis.chantier.id}) }}\"
                                                           style=\"color:dodgerblue\"><span
                                                                    class=\"badge badge-pill badge-primary\">V</span> {{ devis.iddevis }}
                                                        </a>
                                                    </td>

                                                    <td title=\"{{ devis.reference|striptags|raw }}\">{{ devis.reference|striptags|raw }}</td>

                                                    <td class=\"text-right\">{{ devis.totalht|number_format(2,',',' ') }}</td>

                                                    <td class=\"text-right\">{{ devis.totalttc|number_format(2,',',' ') }}</td>
                                                    <td>DEVIS VALIDÉS | <span style=\"color:#dc3545 !important;\">{{ devis.client.client}} - {{ devis.chantier.chantier }}</span></td>
                                                    <td class=\"text-left text-pri bolderrer\" style=\"background-color: #E8E8E8 !important;\"><i class=\"fa fa-user text-pri\"></i>&nbsp;{{ devis.dobyuser.nom|upper }}&nbsp;{{ devis.dobyuser.prenoms|upper }}</td>
                                                </tr>
                                            {% endif %}
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                    <br>
                                    <hr style=\"width: 100%; height: 2px; background-color: darkgrey\">
                                    <br>
                                    <table class=\"table-striped table-bordered display nowrap\"
                                           style=\"width: 100%\"
                                           id=\"dataDEVIS2\">
                                        <thead>
                                        <tr class=\"text-center bolderr bg-light\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th style=\"width: 80px !important;\">DATE</th>
                                            <th>N° DEVIS</th>
                                            <th>RÉFÉRENCE</th>
                                            <th>TOTAL HT</th>
                                            <th>TOTAL TTC</th>
                                            <th>ETAT</th>
                                            <th style=\"background-color: #E8E8E8 !important;\" >CREÉ PAR</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for devis in deviss %}
                                            {% if devis.etat == 'save' %}
                                                <tr>
                                                    <td class=\"text-center\">
                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                               class=\"DEVYS2\"
                                                               value=\"{{ devis.id }}\"></td>

                                                    <td>{{ devis.date|date('Y.m.d H.i.s') }}</td>

                                                    <td>
                                                        <a href=\"{{ path('editdevis', {'id': devis.id, 'idchantier': devis.chantier.id}) }}\"
                                                           style=\"color:dodgerblue\"><span
                                                                    class=\"badge badge-pill badge-secondary\">V</span> {{ devis.iddevis }}
                                                        </a>
                                                    </td>

                                                    <td title=\"{{ devis.reference|striptags|raw }}\">{{ devis.reference|striptags|raw }}</td>
                                                    <td class=\"text-right\">{{ devis.totalht|number_format(2,',',' ') }}</td>
                                                    <td class=\"text-right\">{{ devis.totalttc|number_format(2,',',' ') }}</td>
                                                    <td>DEVIS NON VALIDÉS | <span style=\"color:#4e73df !important;\">{{ devis.client.client}} - {{ devis.chantier.chantier }}</span></td>
                                                    <td class=\"text-left text-pri bolderrer\" style=\"background-color: #E8E8E8 !important;\"><i class=\"fa fa-user text-pri\"></i>&nbsp;{{ devis.dobyuser.nom|upper }}&nbsp;{{ devis.dobyuser.prenoms|upper }}</td>
                                                </tr>
                                            {% endif %}
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    {# FIN DEVIS #}

                    {# BON DE COMMANDE #}
                    <div class=\"card shadow mb-4\" style=\"margin-bottom: 20px\">
                        <div id=\"headingQu\">
                            <h5 class=\"mb-0\">
                                <a class=\"btn bg-pri text-left text-white\" data-toggle=\"collapse\"
                                   data-target=\"#collapseQu\"
                                   aria-expanded=\"true\" aria-controls=\"collapseQu\" style=\"width: 100%;\">
                                    2- BONS DE COMMANDE<span class=\"badge badge-light float-right\"
                                                             style=\"margin-top: 5px\">{{ chantier.bons.count }}</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseQu\" class=\"collapse\" aria-labelledby=\"headingQu\"
                             data-parent=\"#accordion\">
                            <div class=\"card-body\">
                                <div class=\"table-responsive\">
                                    {% for message in app.flashes('errbon') %}
                                        <div class=\"alert alert-danger\">
                                            {{ message }}
                                        </div>
                                    {% endfor %}
                                    {% for message in app.flashes('subon') %}
                                        <div class=\"alert alert-success\">
                                            {{ message }}
                                        </div>
                                    {% endfor %}
                                    <table class=\"table-striped table-bordered display nowrap\"
                                           style=\"width: 100%\" id=\"dataBON\">
                                        <thead>
                                        <tr class=\"text-center bg-light\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th style=\"width: 80px !important;\">DATE</th>
                                            <th>N° BON</th>
                                            <th>RÉFÉRENCE</th>
                                            <th>TOTAL HT</th>
                                            <th>TOTAL TTC</th>
                                            <th style=\"width: 10px !important;\">ETAT</th>
                                            <th style=\"background-color: #E8E8E8 !important;\" >CREÉ PAR</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        {% for bon in bons %}
                                            {% if bon.etat == 'valide' %}
                                                <tr>
                                                    <td class=\"text-center\">
                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                               class=\"BONNS\"
                                                               value=\"{{ bon.id }}\"></td>
                                                    <td>{{ bon.date|date('Y.m.d H.i.s') }}</td>
                                                    <td>
                                                        {% if bon.type == \"non\" %}
                                                            <a href=\"{{ path('editbon', {'id': bon.id, 'idchantier': bon.chantier.id}) }}\">
                                                                <span class=\"badge badge-pill badge-primary\">V</span>
                                                                <span class=\"badge badge-pill badge-danger\">BRC</span> {{ bon.numbon }}
                                                            </a>
                                                        {% else %}
                                                            <span
                                                                    class=\"badge badge-pill badge-primary\">V</span>
                                                            <a href=\"{{ path('editbon', {'id': bon.id, 'idchantier': bon.chantier.id}) }}\">{{ bon.numbon }}</a>
                                                        {% endif %}
                                                    </td>
                                                    <td title=\"{{ bon.reference|striptags|raw }}\">{{ bon.reference|striptags|raw }}</td>
                                                    <td class=\"text-right\">{{ bon.totalht|number_format(2, ',', ' ') }}</td>
                                                    <td class=\"text-right\">{{ bon.totalttc|number_format(2, ',', ' ') }}</td>
                                                    <td>BONS DE COMMANDE VALIDÉS | <span style=\"color:#dc3545 !important;\">{{ bon.client.client}} - {{ bon.chantier.chantier }}</span></td>
                                                    <td class=\"text-left text-pri bolderrer\" style=\"background-color: #E8E8E8 !important;\"><i class=\"fa fa-user text-pri\"></i>&nbsp;{{ bon.dobyuser.nom|upper }}&nbsp;{{ bon.dobyuser.prenoms|upper }}</td>

                                                </tr>
                                            {% endif %}
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                    <br>
                                    <hr style=\"width: 100%; height: 2px; background-color: darkgrey\">
                                    <br>
                                    <table class=\"table-striped table-bordered display nowrap\"
                                           style=\"width: 100%\" id=\"dataBON2\">
                                        <thead>
                                        <tr class=\"text-center bg-light\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th style=\"width: 80px !important;\">DATE</th>
                                            <th>N° BON</th>
                                            <th>RÉFÉRENCE</th>
                                            <th>TOTAL HT</th>
                                            <th>TOTAL TTC</th>
                                            <th style=\"width: 10px !important;\">ETAT</th>
                                            <th style=\"background-color: #E8E8E8 !important;\" >CREÉ PAR</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        {% for bon in bons %}
                                            {% if bon.etat == 'save' %}
                                                <tr>
                                                    <td class=\"text-center\">
                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                               class=\"BONNS2\"
                                                               value=\"{{ bon.id }}\"></td>
                                                    <td>{{ bon.date|date('Y.m.d H.i.s') }}</td>
                                                    <td>
                                                        {% if bon.type == \"non\" %}
                                                            <a href=\"{{ path('editbon', {'id': bon.id, 'idchantier': bon.chantier.id}) }}\"><span
                                                                        class=\"badge badge-pill badge-secondary\">V</span>
                                                                <span
                                                                        class=\"badge badge-pill badge-danger\">BRC</span> {{ bon.numbon }}
                                                            </a>
                                                        {% else %}
                                                            <span
                                                                    class=\"badge badge-pill badge-secondary\">V</span>
                                                            <a href=\"{{ path('editbon', {'id': bon.id, 'idchantier': bon.chantier.id}) }}\">{{ bon.numbon }}</a>
                                                        {% endif %}
                                                    </td>
                                                    <td title=\"{{ bon.reference|striptags|raw }}\">{{ bon.reference|striptags|raw }}</td>
                                                    <td class=\"text-right\">{{ bon.totalht|number_format(2, ',', ' ') }}</td>
                                                    <td class=\"text-right\">{{ bon.totalttc|number_format(2, ',', ' ') }}</td>
                                                    <td>BONS DE COMMANDE NON VALIDÉS |  <span style=\"color:#4e73df !important;\">{{ bon.client.client}} - {{ bon.chantier.chantier }}</span></td>
                                                    <td class=\"text-left text-pri bolderrer\" style=\"background-color: #E8E8E8 !important;\"><i class=\"fa fa-user text-pri\"></i>&nbsp;{{ bon.dobyuser.nom|upper }}&nbsp;{{ bon.dobyuser.prenoms|upper }}</td>

                                                </tr>
                                            {% endif %}
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    {# END BON DE COMMANDE#}

                    {# CAISSES #}
                    <div class=\"card shadow mb-4\" style=\"margin-bottom: 20px\">
                        <div id=\"headingCi\">
                            <h5 class=\"mb-0\">
                                <a class=\"btn bg-pri text-left text-white\" data-toggle=\"collapse\"
                                   data-target=\"#collapseCi\"
                                   aria-expanded=\"true\" aria-controls=\"collapseCi\" style=\"width: 100%;\">
                                    3- BON DE CAISSE<span class=\"badge badge-light float-right\"
                                                          style=\"margin-top: 5px\">{{ caisses.count }}</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseCi\" class=\"collapse\" aria-labelledby=\"headingCi\"
                             data-parent=\"#accordion\">
                            <div class=\"card-body\">
                                <div class=\"table-responsive\" style=\"overflow-x: scroll\">
                                    <table class=\"table-bordered display nowrap\" style=\"width: 100%\"
                                           id=\"dataCAISSE\">
                                        <thead>
                                        <tr class=\"text-center bg-light\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th style=\"width: 80px\">DATE</th>
                                            <th>N° BON</th>
                                            <th>FACTURÉ À</th>
                                            <th>CLIENT | PROJET</th>
                                            <th>MONTANT</th>
                                            <th style=\"background-color: #E8E8E8 !important;\" >CREÉ PAR</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        {% for caisse in caisses %}
                                            {% if caisse.etat == 'valide' %}
                                                <tr>
                                                    <td class=\"text-center\">
                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                               class=\"CAYSS\"
                                                               value=\"{{ caisse.id }}\"></td>

                                                    <td>{{ caisse.date|date('Y.m.d H.i.s') }}</td>
                                                    <td><a
                                                                href=\"{{ path('editcaisse', {'idcaisse': caisse.id, 'idchantier': caisse.chantier.id}) }}\"><span
                                                                    class=\"badge badge-pill badge-primary\">V</span> {{ caisse.numcaisse }}
                                                        </a>
                                                    </td>
                                                    <td title=\"{{ caisse.intervenant.nom|upper }}\">
                                                        {% if caisse.intervenant.reste <= 0 %}
                                                            <span class=\"text-dangerr\">SOLDÉ</span> | {{ caisse.intervenant.nom|upper }}
                                                            <br>
                                                        {% else %}
                                                            <span class=\"text-success\">NON SOLDÉ</span> | {{ caisse.intervenant.nom|upper }}
                                                            <br>
                                                        {% endif %}

                                                        {% if caisse.intervenant.reste <= 0 %}
                                                            <span class=\"text-black-50\">
                                                                MONTANT À RECEVOIR : {{ caisse.intervenant.payer|number_format(2,',',' ') }}<br>
                                                                MONTANT RECU : {{ caisse.intervenant.recu|number_format(2,',',' ') }}<br>
                                                                <u class=\"text-success\">RESTE À PAYER : {{ caisse.intervenant.reste|number_format(2,',',' ') }}</u><br>
                                                            </span>
                                                        {% else %}
                                                            <span class=\"text-black-50\">
                                                                MONTANT À RECEVOIR : {{ caisse.intervenant.payer|number_format(2,',',' ') }}<br>
                                                                MONTANT RECU : {{ caisse.intervenant.recu|number_format(2,',',' ') }}<br>
                                                                <u class=\"text-danger\">RESTE À PAYER : {{ caisse.intervenant.reste|number_format(2,',',' ') }}</u><br>
                                                            </span>
                                                        {% endif %}
                                                    </td>
                                                    <td title=\"{{ caisse.client.client}} | {{ caisse.chantier.chantier }}\">{{ caisse.client.client}} | {{ caisse.chantier.chantier }}</td>
                                                    <td class=\"text-right\">{{ caisse.montant|number_format(2,',',' ') }}</td>
                                                    <td class=\"text-left text-pri bolderrer\" style=\"background-color: #E8E8E8 !important;\"><i class=\"fa fa-user text-pri\"></i>&nbsp;{{ caisse.dobyuser.nom|upper }}&nbsp;{{ caisse.dobyuser.prenoms|upper }}</td>

                                                </tr>
                                            {% endif %}
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                    <br>
                                    <hr style=\"width: 100%; height: 2px; background-color: darkgrey\">
                                    <br>
                                    <table class=\"table-bordered display nowrap\" style=\"width: 100%\"
                                           id=\"dataCAISSE2\">
                                        <thead>
                                        <tr class=\"text-center bg-light\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th style=\"width: 80px\">DATE</th>
                                            <th>N° BON</th>
                                            <th>ETAT</th>
                                            <th>FACTURÉ À</th>
                                            <th>RÉFÉRENCE</th>
                                            <th>MONTANT</th>
                                            <th style=\"background-color: #E8E8E8 !important;\" >CREÉ PAR</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for caisse in caisses %}
                                            {% if caisse.etat == 'save' %}
                                                <tr>
                                                    <td class=\"text-center\">
                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                               class=\"CAYSS2\"
                                                               value=\"{{ caisse.id }}\"></td>

                                                    <td>{{ caisse.date|date('Y.m.d H.i.s') }}</td>
                                                    <td><a
                                                                href=\"{{ path('editcaisse', {'idcaisse': caisse.id, 'idchantier': caisse.chantier.id}) }}\"><span
                                                                    class=\"badge badge-pill badge-secondary\">V</span> {{ caisse.numcaisse }}
                                                        </a>
                                                    </td>
                                                    <td>BONS DE CAISSE NON VALIDÉS | <span style=\"color:#4e73df !important;\">{{ caisse.client.client}} - {{ caisse.chantier.chantier }}</span></td>
                                                    <td title=\"{{ caisse.intervenant.nom|upper }}\">{{ caisse.intervenant.nom|upper }}
                                                    </td>
                                                    <td title=\"{{ caisse.reference|striptags|raw }}\">{{ caisse.reference|striptags }}</td>
                                                    <td class=\"text-right\">{{ caisse.montant|number_format(2,',',' ') }}</td>
                                                    <td class=\"text-left text-pri bolderrer\" style=\"background-color: #E8E8E8 !important;\"><i class=\"fa fa-user text-pri\"></i>&nbsp;{{ caisse.dobyuser.nom|upper }}&nbsp;{{ caisse.dobyuser.prenoms|upper }}</td>
                                                </tr>
                                            {% endif %}
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    {# END CAISSE #}

                    {# BONS DE LIVRAISON #}
                    <div class=\"card shadow mb-4\" style=\"margin-bottom: 20px\">
                        <div id=\"headingSepT\">
                            <h5 class=\"mb-0\">
                                <a class=\"btn bg-pri text-left text-white\" data-toggle=\"collapse\"
                                   data-target=\"#collapseSepT\"
                                   aria-expanded=\"true\" aria-controls=\"collapseSepT\" style=\"width: 100%;\">
                                    4- BONS DE LIVRAISON<span class=\"badge badge-light float-right\"
                                                              style=\"margin-top: 5px\">{{ chantier.livraisons.count }}</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseSepT\" class=\"collapse\" aria-labelledby=\"headingSepT\"
                             data-parent=\"#accordion\">
                            <div class=\"card-body\">
                                <div class=\"table-responsive\">

                                    {% for message in app.flashes('errlivraison') %}
                                        <div class=\"alert alert-danger\">
                                            {{ message }}
                                        </div>
                                    {% endfor %}
                                    {% for message in app.flashes('sulivraison') %}
                                        <div class=\"alert alert-success\">
                                            {{ message }}
                                        </div>
                                    {% endfor %}

                                    <table class=\"table-striped table-bordered display nowrap\"
                                           style=\"width: 100%\" id=\"dataLIVRAISON\">
                                        <thead>
                                        <tr class=\"text-center bg-light\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th style=\"width: 80px !important;\">DATE</th>
                                            <th style=\"width: 150px\">N° BON DE LIVRAISON</th>
                                            <th style=\"width: 160px\">INTERVENANT</th>
                                            <th style=\"width: 300px\">RÉFÉRENCE</th>
                                            <th style=\"width: 10px !important;\">ETAT</th>
                                            <th style=\"background-color: #E8E8E8 !important;\" >CREÉ PAR</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for livre in livraisons %}
                                            {% if livre.etat == \"valide\" %}
                                                <tr>
                                                    <td class=\"text-center\">
                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                               class=\"LIVRES\"
                                                               value=\"{{ livre.id }}\"></td>
                                                    <td>{{ livre.date|date('Y.m.d H.i.s') }}</td>
                                                    <td>
                                                        <a href=\"{{ path('editlivraison', {'id': livre.id, 'idchantier': livre.chantier.id}) }}\">{{ livre.numlivre }}</a>
                                                    </td>
                                                    <td>{{ livre.intervenant.nom }}</td>
                                                    <td title=\"{{ livre.reference|striptags|raw }}\">{{ livre.reference|striptags|raw }}</td>
                                                    <td>BONS DE LIVRAISON VALIDÉS | <span style=\"color:#dc3545 !important;\">{{ livre.client.client}} - {{ livre.chantier.chantier }}</span></td>
                                                    <td class=\"text-left text-pri bolderrer\" style=\"background-color: #E8E8E8 !important;\"><i class=\"fa fa-user text-pri\"></i>&nbsp;{{ livre.dobyuser.nom|upper }}&nbsp;{{ livre.dobyuser.prenoms|upper }}</td>

                                                </tr>
                                            {% endif %}
                                        {% endfor %}
                                        </tbody>

                                    </table>
                                    <br>
                                    <hr style=\"width: 100%; height: 2px; background-color: darkgrey\">
                                    <br>
                                    <table class=\"table-striped table-bordered display nowrap\"
                                           style=\"width: 100%\" id=\"dataLIVRAISON2\">
                                        <thead>
                                        <tr class=\"text-center bg-light\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th style=\"width: 80px !important;\">DATE</th>
                                            <th>N° BON DE LIVRAISON</th>
                                            <th>INTERVENANT</th>
                                            <th>RÉFÉRENCE</th>
                                            <th>ETAT</th>
                                            <th style=\"background-color: #E8E8E8 !important;\" >CREÉ PAR</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for livre in chantier.livraisons %}
                                            {% if livre.etat == \"save\" %}
                                                <tr>
                                                    <td class=\"text-center\">
                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                               class=\"LIVRES2\"
                                                               value=\"{{ livre.id }}\"></td>
                                                    <td>{{ livre.date|date('Y.m.d H.i.s') }}</td>
                                                    <td>
                                                        <a href=\"{{ path('editlivraison', {'id': livre.id, 'idchantier': livre.chantier.id}) }}\"
                                                           style=\"color: #dc3545 !important;\">{{ livre.numlivre }}</a>
                                                    </td>
                                                    <td style=\"color: #dc3545 !important;\">{{ livre.intervenant.nom|upper }}</td>
                                                    <td title=\"{{ livre.reference|striptags|raw }}\">{{ livre.reference|striptags|raw }}</td>
                                                    <td>BONS DE LIVRAISON NON VALIDÉS <span style=\"color:#4e73df !important;\">{{ livre.client.client}} - {{ livre.chantier.chantier }}</span></td>
                                                    <td class=\"text-left text-pri bolderrer\" style=\"background-color: #E8E8E8 !important;\"><i class=\"fa fa-user text-pri\"></i>&nbsp;{{ livre.dobyuser.nom|upper }}&nbsp;{{ livre.dobyuser.prenoms|upper }}</td>
                                                </tr>
                                            {% endif %}
                                        {% endfor %}
                                        </tbody>

                                    </table>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    {# FIN BON DE LIVRAISON #}

                    {# FACTURES #}
                    <div class=\"card shadow mb-4\" style=\"margin-bottom: 20px\">
                        <div id=\"headingSep\">
                            <h5 class=\"mb-0\">
                                <a class=\"btn bg-pri text-left text-white\" data-toggle=\"collapse\"
                                   data-target=\"#collapseSep\"
                                   aria-expanded=\"true\" aria-controls=\"collapseSep\" style=\"width: 100%;\">
                                    5- FACTURES<span class=\"badge badge-light float-right\"
                                                     style=\"margin-top: 5px\">{{ chantier.factures.count }}</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseSep\" class=\"collapse\" aria-labelledby=\"headingSep\"
                             data-parent=\"#accordion\">
                            <div class=\"card-body\">
                                <div class=\"table-responsive\">
                                    {% for message in app.flashes('errfact') %}
                                        <div class=\"alert alert-danger\">
                                            {{ message }}
                                        </div>
                                    {% endfor %}
                                    {% for message in app.flashes('sufact') %}
                                        <div class=\"alert alert-success\">
                                            {{ message }}
                                        </div>
                                    {% endfor %}
                                    <table class=\"table-striped table-bordered display nowrap\"
                                           style=\"width: 100%\" id=\"dataFACTURE\">
                                        <thead>
                                        <tr class=\"text-center bg-light\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th style=\"width: 80px !important;\">DATE</th>
                                            <th>N° FACTURE</th>
                                            <th>N° DEVIS</th>
                                            <th>RÉFÉRENCE</th>
                                            <th>TOTAL HT</th>
                                            <th>TOTAL TTC</th>
                                            <th style=\"width: 10px !important;\">ETAT</th>
                                            <th style=\"background-color: #E8E8E8 !important;\" >CREÉ PAR</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        {% for facture in factures %}
                                            {% if facture.etat == 'valide' %}
                                                <tr>
                                                    <td class=\"text-center\">
                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                               class=\"FACTURE\"
                                                               value=\"{{ facture.id }}\"></td>
                                                    <td>{{ facture.date|date('Y.m.d H.i.s') }}</td>
                                                    <td>
                                                        {% if facture.type == \"non\" %}
                                                            <a href=\"{{ path('editfacture', {'id': facture.id, 'idchantier': facture.chantier.id}) }}\">
                                                                <span class=\"badge badge-pill badge-primary\">V</span>
                                                                <span class=\"badge badge-pill badge-danger\">FA</span> {{ facture.numfacture }}
                                                            </a>
                                                        {% else %}
                                                            <span
                                                                    class=\"badge badge-pill badge-primary\">V</span>
                                                            <a href=\"{{ path('editfacture',{'id':facture.id,'idchantier':chantier.id}) }}\">{{ facture.numfacture }}</a>
                                                        {% endif %}
                                                    </td>
                                                    <td><a href=\"{{ path('editdevis', {'id': facture.devis.id, 'idchantier': facture.chantier.id}) }}\">{{ facture.devis.iddevis }}</a></td>
                                                    <td title=\"{{ facture.reference|striptags|raw }}\">{{ facture.reference|striptags|raw }}</td>
                                                    <td class=\"text-right\">{{ facture.devis.totalht|number_format(2, ',', ' ') }}</td>
                                                    <td class=\"text-right\">{{ facture.devis.totalttc|number_format(2, ',', ' ') }}</td>
                                                    <td>FACTURES VALIDÉÉS | <span style=\"color:#dc3545 !important;\">{{ facture.client.client}} - {{ facture.chantier.chantier }}</td>
                                                    <td class=\"text-left text-pri bolderrer\" style=\"background-color: #E8E8E8 !important;\"><i class=\"fa fa-user text-pri\"></i>&nbsp;{{ facture.dobyuser.nom|upper }}&nbsp;{{ facture.dobyuser.prenoms|upper }}</td>

                                                </tr>
                                            {% endif %}
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                    <br>
                                    <hr style=\"width: 100%; height: 2px; background-color: darkgrey\">
                                    <br>
                                    <table class=\"table-striped table-bordered display nowrap\"
                                           style=\"width: 100%\" id=\"dataFACTURE2\">
                                        <thead>
                                        <tr class=\"text-center bg-light\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th style=\"width: 80px !important;\">DATE</th>
                                            <th>N° FACTURE</th>
                                            <th>N° DEVIS</th>
                                            <th>RÉFÉRENCE</th>
                                            <th>TOTAL HT</th>
                                            <th>TOTAL TTC</th>
                                            <th style=\"width: 10px !important;\">ETAT</th>
                                            <th style=\"background-color: #E8E8E8 !important;\" >CREÉ PAR</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        {% for facture in chantier.factures %}
                                            {% if facture.etat == 'save' %}
                                                <tr>
                                                    <td class=\"text-center\">
                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                               class=\"FACTURE2\"
                                                               value=\"{{ facture.id }}\"></td>
                                                    <td>{{ facture.date|date('Y.m.d H.i.s') }}</td>
                                                    <td>
                                                        {% if facture.type == \"non\" %}
                                                            <a href=\"{{ path('editfacture', {'id': facture.id, 'idchantier': facture.chantier.id}) }}\">
                                                                <span class=\"badge badge-pill badge-secondary\">V</span>
                                                                <span class=\"badge badge-pill badge-danger\">FA</span> {{ facture.numfacture }}
                                                            </a>
                                                        {% else %}
                                                            <span
                                                                    class=\"badge badge-pill badge-secondary\">V</span>
                                                            <a href=\"{{ path('editfacture',{'id':facture.id,'idchantier':chantier.id}) }}\">{{ facture.numfacture }}</a>
                                                        {% endif %}
                                                    </td>
                                                    <td><a href=\"{{ path('editdevis', {'id': facture.devis.id, 'idchantier': facture.chantier.id}) }}\">{{ facture.devis.iddevis }}</a></td>
                                                    <td title=\"{{ facture.reference|striptags|raw }}\">{{ facture.reference|striptags|raw }}</td>
                                                    <td class=\"text-right\">{{ facture.devis.totalht|number_format(2, ',', ' ') }}</td>
                                                    <td class=\"text-right\">{{ facture.devis.totalttc|number_format(2, ',', ' ') }}</td>
                                                    <td>FACTURES NON VALIDÉÉS | <span style=\"color:#4e73df !important;\">{{ facture.client.client}} - {{ facture.chantier.chantier }}</td>
                                                    <td class=\"text-left text-pri bolderrer\" style=\"background-color: #E8E8E8 !important;\"><i class=\"fa fa-user text-pri\"></i>&nbsp;{{ facture.dobyuser.nom|upper }}&nbsp;{{ facture.dobyuser.prenoms|upper }}</td>

                                                </tr>
                                            {% endif %}
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    {# FIN FACTURES #}

                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "content/travaux.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\travaux.html.twig");
    }
}
