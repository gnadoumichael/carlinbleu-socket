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

/* content/edevis.html.twig */
class __TwigTemplate_2ef7e841926e73037b0f4c0d0880a669 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/edevis.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/edevis.html.twig"));

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
        <div class=\"row\">
            <div class=\"col-xl-3 col-lg-3\">
                <div id=\"accordion\">
                    ";
        // line 11
        yield "                    <div class=\"card shadow mb-4\" id=\"client\">
                        <div id=\"headingDe\">
                            <h5 class=\"mb-0\">
                                <a class=\"btn text-left text-white bg-pri bolderrer\" data-toggle=\"collapse\"
                                   data-target=\"#collapseDe\"
                                   aria-expanded=\"false\" aria-controls=\"collapseDe\"
                                   style=\"width: 100%; font-size: 14px\">
                                    1- CHOISIR UN PROJET
                                </a>
                            </h5>

                        </div>
                        <div id=\"collapseDe\" class=\"collapse show bg-light\"
                             aria-labelledby=\"headingDe\"
                             data-parent=\"#accordion\">
                            <div class=\"card-body\">
                                <div class=\"table-responsive\">
                                    <select class=\"form-control\" id=\"targetdevis\">
                                        <option>CHOISIR UN PROJET</option>
                                        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 31
            yield "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["chantiers"]) || array_key_exists("chantiers", $context) ? $context["chantiers"] : (function () { throw new RuntimeError('Variable "chantiers" does not exist.', 31, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                // line 32
                yield "                                                ";
                if (($context["client"] == CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "client", [], "any", false, false, false, 32))) {
                    // line 33
                    yield "                                                    <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 33), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "client", [], "any", false, false, false, 33), "html", null, true);
                    yield " || ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "chantier", [], "any", false, false, false, 33), "html", null, true);
                    yield "</option>
                                                ";
                }
                // line 35
                yield "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 43
        yield "                </div>
            </div>
            <div class=\"col-xl-9 col-lg-9\">
                <div class=\"card shadow mb-4\">
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
        // line 65
        $context["vdth"] = 0;
        // line 66
        yield "                                ";
        $context["vdttc"] = 0;
        // line 67
        yield "                                ";
        $context["ndth"] = 0;
        // line 68
        yield "                                ";
        $context["ndttc"] = 0;
        // line 69
        yield "
                                ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 70, $this->source); })()), "devis", [], "any", false, false, false, 70));
        foreach ($context['_seq'] as $context["_key"] => $context["devis"]) {
            // line 71
            yield "
                                    ";
            // line 72
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "etat", [], "any", false, false, false, 72) == "valide")) {
                // line 73
                yield "                                        ";
                $context["vdth"] = (CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalht", [], "any", false, false, false, 73) + (isset($context["vdth"]) || array_key_exists("vdth", $context) ? $context["vdth"] : (function () { throw new RuntimeError('Variable "vdth" does not exist.', 73, $this->source); })()));
                // line 74
                yield "                                        ";
                $context["vdttc"] = (CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalttc", [], "any", false, false, false, 74) + (isset($context["vdttc"]) || array_key_exists("vdttc", $context) ? $context["vdttc"] : (function () { throw new RuntimeError('Variable "vdttc" does not exist.', 74, $this->source); })()));
                // line 75
                yield "                                    ";
            }
            // line 76
            yield "                                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "etat", [], "any", false, false, false, 76) == "save")) {
                // line 77
                yield "                                        ";
                $context["ndth"] = (CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalht", [], "any", false, false, false, 77) + (isset($context["ndth"]) || array_key_exists("ndth", $context) ? $context["ndth"] : (function () { throw new RuntimeError('Variable "ndth" does not exist.', 77, $this->source); })()));
                // line 78
                yield "                                        ";
                $context["ndttc"] = (CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalttc", [], "any", false, false, false, 78) + (isset($context["ndttc"]) || array_key_exists("ndttc", $context) ? $context["ndttc"] : (function () { throw new RuntimeError('Variable "ndttc" does not exist.', 78, $this->source); })()));
                // line 79
                yield "                                    ";
            }
            // line 80
            yield "                                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "etat", [], "any", false, false, false, 80) == "valide")) {
                // line 81
                yield "                                        <tr>

                                            <td class=\"text-center\">
                                                <input type=\"checkbox\" data-toggle=\"toggle\"
                                                       class=\"DEVYS\"
                                                       value=\"";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "id", [], "any", false, false, false, 86), "html", null, true);
                yield "\"></td>

                                            <td>";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "date", [], "any", false, false, false, 88), "Y.m.d H.i.s"), "html", null, true);
                yield "</td>

                                            <td>
                                                <a href=\"";
                // line 91
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "id", [], "any", false, false, false, 91), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 91, $this->source); })()), "id", [], "any", false, false, false, 91)]), "html", null, true);
                yield "\"
                                                   style=\"color:dodgerblue\"><span
                                                            class=\"badge badge-pill badge-primary\">V</span> Devis N° ";
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "iddevis", [], "any", false, false, false, 93), "html", null, true);
                yield "
                                                </a>
                                            </td>

                                            <td title=\"";
                // line 97
                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "reference", [], "any", false, false, false, 97));
                yield "\">";
                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "reference", [], "any", false, false, false, 97));
                yield "</td>

                                            <td class=\"text-right\">";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalht", [], "any", false, false, false, 99), 2, ",", " "), "html", null, true);
                yield "</td>

                                            <td class=\"text-right\">";
                // line 101
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalttc", [], "any", false, false, false, 101), 2, ",", " "), "html", null, true);
                yield "</td>
                                            <td>DEVIS VALIDÉS</td>
                                            <td class=\"text-left text-pri bolderrer\" style=\"background-color: #E8E8E8 !important;\"><i class=\"fa fa-user text-pri\"></i>&nbsp;";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "dobyuser", [], "any", false, false, false, 103), "nom", [], "any", false, false, false, 103)), "html", null, true);
                yield "&nbsp;";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "dobyuser", [], "any", false, false, false, 103), "prenoms", [], "any", false, false, false, 103)), "html", null, true);
                yield "</td>
                                        </tr>
                                    ";
            }
            // line 106
            yield "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['devis'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        yield "                                </tbody>
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
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 128, $this->source); })()), "devis", [], "any", false, false, false, 128));
        foreach ($context['_seq'] as $context["_key"] => $context["devis"]) {
            // line 129
            yield "                                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "etat", [], "any", false, false, false, 129) == "save")) {
                // line 130
                yield "                                        <tr>
                                            <td class=\"text-center\">
                                                <input type=\"checkbox\" data-toggle=\"toggle\"
                                                       class=\"DEVYS2\"
                                                       value=\"";
                // line 134
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "id", [], "any", false, false, false, 134), "html", null, true);
                yield "\"></td>

                                            <td>";
                // line 136
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "date", [], "any", false, false, false, 136), "Y.m.d H.i.s"), "html", null, true);
                yield "</td>

                                            <td>
                                                <a href=\"";
                // line 139
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "id", [], "any", false, false, false, 139), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "chantier", [], "any", false, false, false, 139), "id", [], "any", false, false, false, 139)]), "html", null, true);
                yield "\"
                                                   style=\"color:dodgerblue\"><span
                                                            class=\"badge badge-pill badge-secondary\">V</span> Devis N° ";
                // line 141
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "iddevis", [], "any", false, false, false, 141), "html", null, true);
                yield "
                                                </a>
                                            </td>

                                            <td title=\"";
                // line 145
                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "reference", [], "any", false, false, false, 145));
                yield "\">";
                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "reference", [], "any", false, false, false, 145));
                yield "</td>

                                            <td class=\"text-right\">";
                // line 147
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalht", [], "any", false, false, false, 147), 2, ",", " "), "html", null, true);
                yield "</td>

                                            <td class=\"text-right\">";
                // line 149
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalttc", [], "any", false, false, false, 149), 2, ",", " "), "html", null, true);
                yield "</td>
                                            <td>DEVIS NON VALIDÉS</td>
                                            <td class=\"text-left text-pri bolderrer\" style=\"background-color: #E8E8E8 !important;\"><i class=\"fa fa-user text-pri\"></i>&nbsp;";
                // line 151
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "dobyuser", [], "any", false, false, false, 151), "nom", [], "any", false, false, false, 151)), "html", null, true);
                yield "&nbsp;";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "dobyuser", [], "any", false, false, false, 151), "prenoms", [], "any", false, false, false, 151)), "html", null, true);
                yield "</td>
                                        </tr>
                                    ";
            }
            // line 154
            yield "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['devis'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        yield "                                </tbody>
                            </table>
                            <br>

                            <table class=\"table-bordered d reduire\" style=\"float: right\">
                                <tr style=\"background-color: slategrey; color: white\">
                                    <th class=\"text-center\"></th>
                                    <th class=\"text-center\">TOTAL HT</th>
                                    <th class=\"text-center\">TOTAL TTC</th>
                                </tr>
                                <tr style=\"background-color: slategrey; color: white\">
                                    <td class=\"text-right\">VALIDÉS</td>
                                    <td class=\"text-right\">";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["vdth"]) || array_key_exists("vdth", $context) ? $context["vdth"] : (function () { throw new RuntimeError('Variable "vdth" does not exist.', 167, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</td>
                                    <td class=\"text-right\">";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["vdttc"]) || array_key_exists("vdttc", $context) ? $context["vdttc"] : (function () { throw new RuntimeError('Variable "vdttc" does not exist.', 168, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</td>
                                </tr>
                                <tr style=\"background-color: indianred; color: white\">
                                    <td class=\"text-right\">NON VALIDÉS</td>
                                    <td class=\"text-right\">";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["ndth"]) || array_key_exists("ndth", $context) ? $context["ndth"] : (function () { throw new RuntimeError('Variable "ndth" does not exist.', 172, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</td>
                                    <td class=\"text-right\">";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["ndttc"]) || array_key_exists("ndttc", $context) ? $context["ndttc"] : (function () { throw new RuntimeError('Variable "ndttc" does not exist.', 173, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</td>
                                </tr>
                                <tr class=\"bg-pri text-white\">
                                    <td class=\"text-right\">TOTAUX</td>
                                    <td class=\"text-right\">";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((isset($context["ndth"]) || array_key_exists("ndth", $context) ? $context["ndth"] : (function () { throw new RuntimeError('Variable "ndth" does not exist.', 177, $this->source); })()) + (isset($context["vdth"]) || array_key_exists("vdth", $context) ? $context["vdth"] : (function () { throw new RuntimeError('Variable "vdth" does not exist.', 177, $this->source); })())), 2, ",", " "), "html", null, true);
        yield "</td>
                                    <td class=\"text-right\">";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((isset($context["ndttc"]) || array_key_exists("ndttc", $context) ? $context["ndttc"] : (function () { throw new RuntimeError('Variable "ndttc" does not exist.', 178, $this->source); })()) + (isset($context["vdttc"]) || array_key_exists("vdttc", $context) ? $context["vdttc"] : (function () { throw new RuntimeError('Variable "vdttc" does not exist.', 178, $this->source); })())), 2, ",", " "), "html", null, true);
        yield "</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
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
        return "content/edevis.html.twig";
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
        return array (  430 => 178,  426 => 177,  419 => 173,  415 => 172,  408 => 168,  404 => 167,  390 => 155,  384 => 154,  376 => 151,  371 => 149,  366 => 147,  359 => 145,  352 => 141,  347 => 139,  341 => 136,  336 => 134,  330 => 130,  327 => 129,  323 => 128,  300 => 107,  294 => 106,  286 => 103,  281 => 101,  276 => 99,  269 => 97,  262 => 93,  257 => 91,  251 => 88,  246 => 86,  239 => 81,  236 => 80,  233 => 79,  230 => 78,  227 => 77,  224 => 76,  221 => 75,  218 => 74,  215 => 73,  213 => 72,  210 => 71,  206 => 70,  203 => 69,  200 => 68,  197 => 67,  194 => 66,  192 => 65,  168 => 43,  161 => 37,  155 => 36,  149 => 35,  139 => 33,  136 => 32,  131 => 31,  127 => 30,  106 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ title }}{% endblock %}

{% block body %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-xl-3 col-lg-3\">
                <div id=\"accordion\">
                    {# CRÉER  OU MODIFIER UN CLIENT #}
                    <div class=\"card shadow mb-4\" id=\"client\">
                        <div id=\"headingDe\">
                            <h5 class=\"mb-0\">
                                <a class=\"btn text-left text-white bg-pri bolderrer\" data-toggle=\"collapse\"
                                   data-target=\"#collapseDe\"
                                   aria-expanded=\"false\" aria-controls=\"collapseDe\"
                                   style=\"width: 100%; font-size: 14px\">
                                    1- CHOISIR UN PROJET
                                </a>
                            </h5>

                        </div>
                        <div id=\"collapseDe\" class=\"collapse show bg-light\"
                             aria-labelledby=\"headingDe\"
                             data-parent=\"#accordion\">
                            <div class=\"card-body\">
                                <div class=\"table-responsive\">
                                    <select class=\"form-control\" id=\"targetdevis\">
                                        <option>CHOISIR UN PROJET</option>
                                        {% for client in clients %}
                                            {% for chantier in chantiers %}
                                                {% if client == chantier.client %}
                                                    <option value=\"{{ chantier.id }}\">{{ client.client }} || {{ chantier.chantier }}</option>
                                                {% endif %}
                                            {%  endfor %}
                                        {%  endfor %}
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    {# FIN #}
                </div>
            </div>
            <div class=\"col-xl-9 col-lg-9\">
                <div class=\"card shadow mb-4\">
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

                                {% for devis in chantier.devis %}

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
                                                <a href=\"{{ path('editdevis',{'id':devis.id,'idchantier':chantier.id}) }}\"
                                                   style=\"color:dodgerblue\"><span
                                                            class=\"badge badge-pill badge-primary\">V</span> Devis N° {{ devis.iddevis }}
                                                </a>
                                            </td>

                                            <td title=\"{{ devis.reference|striptags|raw }}\">{{ devis.reference|striptags|raw }}</td>

                                            <td class=\"text-right\">{{ devis.totalht|number_format(2,',',' ') }}</td>

                                            <td class=\"text-right\">{{ devis.totalttc|number_format(2,',',' ') }}</td>
                                            <td>DEVIS VALIDÉS</td>
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
                                {% for devis in chantier.devis %}
                                    {% if devis.etat == 'save' %}
                                        <tr>
                                            <td class=\"text-center\">
                                                <input type=\"checkbox\" data-toggle=\"toggle\"
                                                       class=\"DEVYS2\"
                                                       value=\"{{ devis.id }}\"></td>

                                            <td>{{ devis.date|date('Y.m.d H.i.s') }}</td>

                                            <td>
                                                <a href=\"{{ path('editdevis',{'id':devis.id,'idchantier':devis.chantier.id}) }}\"
                                                   style=\"color:dodgerblue\"><span
                                                            class=\"badge badge-pill badge-secondary\">V</span> Devis N° {{ devis.iddevis }}
                                                </a>
                                            </td>

                                            <td title=\"{{ devis.reference|striptags|raw }}\">{{ devis.reference|striptags|raw }}</td>

                                            <td class=\"text-right\">{{ devis.totalht|number_format(2,',',' ') }}</td>

                                            <td class=\"text-right\">{{ devis.totalttc|number_format(2,',',' ') }}</td>
                                            <td>DEVIS NON VALIDÉS</td>
                                            <td class=\"text-left text-pri bolderrer\" style=\"background-color: #E8E8E8 !important;\"><i class=\"fa fa-user text-pri\"></i>&nbsp;{{ devis.dobyuser.nom|upper }}&nbsp;{{ devis.dobyuser.prenoms|upper }}</td>
                                        </tr>
                                    {% endif %}
                                {% endfor %}
                                </tbody>
                            </table>
                            <br>

                            <table class=\"table-bordered d reduire\" style=\"float: right\">
                                <tr style=\"background-color: slategrey; color: white\">
                                    <th class=\"text-center\"></th>
                                    <th class=\"text-center\">TOTAL HT</th>
                                    <th class=\"text-center\">TOTAL TTC</th>
                                </tr>
                                <tr style=\"background-color: slategrey; color: white\">
                                    <td class=\"text-right\">VALIDÉS</td>
                                    <td class=\"text-right\">{{ vdth|number_format(2, ',', ' ') }}</td>
                                    <td class=\"text-right\">{{ vdttc|number_format(2,',',' ') }}</td>
                                </tr>
                                <tr style=\"background-color: indianred; color: white\">
                                    <td class=\"text-right\">NON VALIDÉS</td>
                                    <td class=\"text-right\">{{ ndth|number_format(2,',', ' ') }}</td>
                                    <td class=\"text-right\">{{ ndttc|number_format(2,',',' ') }}</td>
                                </tr>
                                <tr class=\"bg-pri text-white\">
                                    <td class=\"text-right\">TOTAUX</td>
                                    <td class=\"text-right\">{{ (ndth+vdth)|number_format(2, ',', ' ') }}</td>
                                    <td class=\"text-right\">{{ (ndttc+vdttc)|number_format(2,',',' ') }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



{% endblock %}
", "content/edevis.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\edevis.html.twig");
    }
}
