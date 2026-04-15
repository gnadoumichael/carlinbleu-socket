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

/* content/ecaisse.html.twig */
class __TwigTemplate_1a1396664d6411eeb91884b2c2aa931d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/ecaisse.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/ecaisse.html.twig"));

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
                                    <select class=\"form-control\" id=\"targetcaisse\">
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
                        <div class=\"table-responsive\" style=\"overflow-x: scroll\">
                            <table class=\"table-bordered display nowrap\" style=\"width: 100%\"
                                   id=\"dataCAISSE\">
                                <thead>
                                <tr class=\"text-center bg-light\">
                                    <th style=\"width: 10px !important;\"></th>
                                    <th style=\"width: 80px\">DATE</th>
                                    <th>N° BON</th>
                                    <th>FACTURÉ À</th>
                                    <th>RÉFÉRENCE</th>
                                    <th>MONTANT</th>
                                    <th style=\"background-color: #E8E8E8 !important;\" >CREÉ PAR</th>
                                </tr>
                                </thead>
                                <tbody>

                                ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 64, $this->source); })()), "caisses", [], "any", false, false, false, 64));
        foreach ($context['_seq'] as $context["_key"] => $context["caisse"]) {
            // line 65
            yield "                                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "etat", [], "any", false, false, false, 65) == "valide")) {
                // line 66
                yield "                                        <tr>
                                            <td class=\"text-center\">
                                                <input type=\"checkbox\" data-toggle=\"toggle\"
                                                       class=\"CAYSS\"
                                                       value=\"";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "id", [], "any", false, false, false, 70), "html", null, true);
                yield "\"></td>

                                            <td>";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "date", [], "any", false, false, false, 72), "Y.m.d H.i.s"), "html", null, true);
                yield "</td>
                                            <td><a
                                                        href=\"";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editcaisse", ["idcaisse" => CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "id", [], "any", false, false, false, 74), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 74, $this->source); })()), "id", [], "any", false, false, false, 74)]), "html", null, true);
                yield "\"><span
                                                            class=\"badge badge-pill badge-primary\">V</span> Caisse N° ";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "numcaisse", [], "any", false, false, false, 75), "html", null, true);
                yield "
                                                </a>
                                            </td>
                                            <td title=\"";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "intervenant", [], "any", false, false, false, 78), "nom", [], "any", false, false, false, 78)), "html", null, true);
                yield "\">
                                                ";
                // line 79
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "intervenant", [], "any", false, false, false, 79), "reste", [], "any", false, false, false, 79) <= 0)) {
                    // line 80
                    yield "                                                    <span class=\"text-dangerr\">SOLDÉ</span> | ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "intervenant", [], "any", false, false, false, 80), "nom", [], "any", false, false, false, 80)), "html", null, true);
                    yield "
                                                    <br>
                                                ";
                } else {
                    // line 83
                    yield "                                                    <span class=\"text-success\">NON SOLDÉ</span> | ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "intervenant", [], "any", false, false, false, 83), "nom", [], "any", false, false, false, 83)), "html", null, true);
                    yield "
                                                    <br>
                                                ";
                }
                // line 86
                yield "
                                                ";
                // line 87
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "intervenant", [], "any", false, false, false, 87), "reste", [], "any", false, false, false, 87) <= 0)) {
                    // line 88
                    yield "                                                    <span class=\"text-black-50\">
                                                                MONTANT À RECEVOIR : ";
                    // line 89
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "intervenant", [], "any", false, false, false, 89), "payer", [], "any", false, false, false, 89), 2, ",", " "), "html", null, true);
                    yield "<br>
                                                                MONTANT RECU : ";
                    // line 90
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "intervenant", [], "any", false, false, false, 90), "recu", [], "any", false, false, false, 90), 2, ",", " "), "html", null, true);
                    yield "<br>
                                                                <u class=\"text-success\">RESTE À PAYER : ";
                    // line 91
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "intervenant", [], "any", false, false, false, 91), "reste", [], "any", false, false, false, 91), 2, ",", " "), "html", null, true);
                    yield "</u><br>
                                                            </span>
                                                ";
                } else {
                    // line 94
                    yield "                                                    <span class=\"text-black-50\">
                                                                MONTANT À RECEVOIR : ";
                    // line 95
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "intervenant", [], "any", false, false, false, 95), "payer", [], "any", false, false, false, 95), 2, ",", " "), "html", null, true);
                    yield "<br>
                                                                MONTANT RECU : ";
                    // line 96
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "intervenant", [], "any", false, false, false, 96), "recu", [], "any", false, false, false, 96), 2, ",", " "), "html", null, true);
                    yield "<br>
                                                                <u class=\"text-danger\">RESTE À PAYER : ";
                    // line 97
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "intervenant", [], "any", false, false, false, 97), "reste", [], "any", false, false, false, 97), 2, ",", " "), "html", null, true);
                    yield "</u><br>
                                                            </span>
                                                ";
                }
                // line 100
                yield "                                            </td>
                                            <td title=\"";
                // line 101
                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "reference", [], "any", false, false, false, 101));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "reference", [], "any", false, false, false, 101)), "html", null, true);
                yield "</td>
                                            <td class=\"text-right\">";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "montant", [], "any", false, false, false, 102), 2, ",", " "), "html", null, true);
                yield "</td>
                                            <td class=\"text-left text-pri bolderrer\" style=\"background-color: #E8E8E8 !important;\"><i class=\"fa fa-user text-pri\"></i>&nbsp;";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "dobyuser", [], "any", false, false, false, 103), "nom", [], "any", false, false, false, 103)), "html", null, true);
                yield "&nbsp;";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "dobyuser", [], "any", false, false, false, 103), "prenoms", [], "any", false, false, false, 103)), "html", null, true);
                yield "</td>

                                        </tr>
                                    ";
            }
            // line 107
            yield "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['caisse'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        yield "                                </tbody>
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
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 128, $this->source); })()), "caisses", [], "any", false, false, false, 128));
        foreach ($context['_seq'] as $context["_key"] => $context["caisse"]) {
            // line 129
            yield "                                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "etat", [], "any", false, false, false, 129) == "save")) {
                // line 130
                yield "                                        <tr>
                                            <td class=\"text-center\">
                                                <input type=\"checkbox\" data-toggle=\"toggle\"
                                                       class=\"CAYSS2\"
                                                       value=\"";
                // line 134
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "id", [], "any", false, false, false, 134), "html", null, true);
                yield "\"></td>

                                            <td>";
                // line 136
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "date", [], "any", false, false, false, 136), "Y.m.d H.i.s"), "html", null, true);
                yield "</td>
                                            <td><a
                                                        href=\"";
                // line 138
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editcaisse", ["idcaisse" => CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "id", [], "any", false, false, false, 138), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 138, $this->source); })()), "id", [], "any", false, false, false, 138)]), "html", null, true);
                yield "\"><span
                                                            class=\"badge badge-pill badge-secondary\">V</span> Caisse N° ";
                // line 139
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "numcaisse", [], "any", false, false, false, 139), "html", null, true);
                yield "
                                                </a>
                                            </td>
                                            <td>BONS DE CAISSE NON VALIDÉS</td>
                                            <td title=\"";
                // line 143
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "intervenant", [], "any", false, false, false, 143), "nom", [], "any", false, false, false, 143)), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "intervenant", [], "any", false, false, false, 143), "nom", [], "any", false, false, false, 143)), "html", null, true);
                yield "
                                            </td>
                                            <td title=\"";
                // line 145
                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "reference", [], "any", false, false, false, 145));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "reference", [], "any", false, false, false, 145)), "html", null, true);
                yield "</td>
                                            <td class=\"text-right\">";
                // line 146
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "montant", [], "any", false, false, false, 146), 2, ",", " "), "html", null, true);
                yield "</td>
                                            <td class=\"text-left text-pri bolderrer\" style=\"background-color: #E8E8E8 !important;\"><i class=\"fa fa-user text-pri\"></i>&nbsp;";
                // line 147
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "dobyuser", [], "any", false, false, false, 147), "nom", [], "any", false, false, false, 147)), "html", null, true);
                yield "&nbsp;";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "dobyuser", [], "any", false, false, false, 147), "prenoms", [], "any", false, false, false, 147)), "html", null, true);
                yield "</td>

                                        </tr>
                                    ";
            }
            // line 151
            yield "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['caisse'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        yield "                                </tbody>
                            </table>
                            <br>

                            ";
        // line 156
        $context["vcth"] = 0;
        // line 157
        yield "                            ";
        $context["ncth"] = 0;
        // line 158
        yield "
                            ";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 159, $this->source); })()), "caisses", [], "any", false, false, false, 159));
        foreach ($context['_seq'] as $context["_key"] => $context["caisse"]) {
            // line 160
            yield "                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "etat", [], "any", false, false, false, 160) == "valide")) {
                // line 161
                yield "                                    ";
                $context["vcth"] = (CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "montant", [], "any", false, false, false, 161) + (isset($context["vcth"]) || array_key_exists("vcth", $context) ? $context["vcth"] : (function () { throw new RuntimeError('Variable "vcth" does not exist.', 161, $this->source); })()));
                // line 162
                yield "                                ";
            }
            // line 163
            yield "                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "etat", [], "any", false, false, false, 163) == "save")) {
                // line 164
                yield "                                    ";
                $context["ncth"] = (CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "montant", [], "any", false, false, false, 164) + (isset($context["ncth"]) || array_key_exists("ncth", $context) ? $context["ncth"] : (function () { throw new RuntimeError('Variable "ncth" does not exist.', 164, $this->source); })()));
                // line 165
                yield "                                ";
            }
            // line 166
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['caisse'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        yield "                            <table class=\"table-bordered d reduire\" style=\"float: right\">
                                <tr style=\"background-color: slategrey; color: white;\">
                                    <td colspan=\"2\" class=\"text-right\">
                                        VALIDÉS
                                    </td>
                                    <td class=\"text-right\">";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["vcth"]) || array_key_exists("vcth", $context) ? $context["vcth"] : (function () { throw new RuntimeError('Variable "vcth" does not exist.', 172, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</td>
                                </tr>
                                <tr style=\"background-color: indianred; color: white\">
                                    <td colspan=\"2\" class=\"text-right\">
                                        NON VALIDÉS
                                    </td>
                                    <td class=\"text-right\">";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["ncth"]) || array_key_exists("ncth", $context) ? $context["ncth"] : (function () { throw new RuntimeError('Variable "ncth" does not exist.', 178, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</td>
                                </tr>
                                <tr class=\"bg-pri text-white\">
                                    <td colspan=\"2\" class=\"text-right\">
                                        TOTAUX
                                    </td>
                                    <td class=\"text-right\">";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((isset($context["ncth"]) || array_key_exists("ncth", $context) ? $context["ncth"] : (function () { throw new RuntimeError('Variable "ncth" does not exist.', 184, $this->source); })()) + (isset($context["vcth"]) || array_key_exists("vcth", $context) ? $context["vcth"] : (function () { throw new RuntimeError('Variable "vcth" does not exist.', 184, $this->source); })())), 2, ",", " "), "html", null, true);
        yield "</td>
                                </tr>

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
        return "content/ecaisse.html.twig";
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
        return array (  466 => 184,  457 => 178,  448 => 172,  441 => 167,  435 => 166,  432 => 165,  429 => 164,  426 => 163,  423 => 162,  420 => 161,  417 => 160,  413 => 159,  410 => 158,  407 => 157,  405 => 156,  399 => 152,  393 => 151,  384 => 147,  380 => 146,  374 => 145,  367 => 143,  360 => 139,  356 => 138,  351 => 136,  346 => 134,  340 => 130,  337 => 129,  333 => 128,  311 => 108,  305 => 107,  296 => 103,  292 => 102,  286 => 101,  283 => 100,  277 => 97,  273 => 96,  269 => 95,  266 => 94,  260 => 91,  256 => 90,  252 => 89,  249 => 88,  247 => 87,  244 => 86,  237 => 83,  230 => 80,  228 => 79,  224 => 78,  218 => 75,  214 => 74,  209 => 72,  204 => 70,  198 => 66,  195 => 65,  191 => 64,  168 => 43,  161 => 37,  155 => 36,  149 => 35,  139 => 33,  136 => 32,  131 => 31,  127 => 30,  106 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
                                    <select class=\"form-control\" id=\"targetcaisse\">
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
                        <div class=\"table-responsive\" style=\"overflow-x: scroll\">
                            <table class=\"table-bordered display nowrap\" style=\"width: 100%\"
                                   id=\"dataCAISSE\">
                                <thead>
                                <tr class=\"text-center bg-light\">
                                    <th style=\"width: 10px !important;\"></th>
                                    <th style=\"width: 80px\">DATE</th>
                                    <th>N° BON</th>
                                    <th>FACTURÉ À</th>
                                    <th>RÉFÉRENCE</th>
                                    <th>MONTANT</th>
                                    <th style=\"background-color: #E8E8E8 !important;\" >CREÉ PAR</th>
                                </tr>
                                </thead>
                                <tbody>

                                {% for caisse in chantier.caisses %}
                                    {% if caisse.etat == 'valide' %}
                                        <tr>
                                            <td class=\"text-center\">
                                                <input type=\"checkbox\" data-toggle=\"toggle\"
                                                       class=\"CAYSS\"
                                                       value=\"{{ caisse.id }}\"></td>

                                            <td>{{ caisse.date|date('Y.m.d H.i.s') }}</td>
                                            <td><a
                                                        href=\"{{ path('editcaisse',{'idcaisse':caisse.id,'idchantier':chantier.id}) }}\"><span
                                                            class=\"badge badge-pill badge-primary\">V</span> Caisse N° {{ caisse.numcaisse }}
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
                                            <td title=\"{{ caisse.reference|striptags|raw }}\">{{ caisse.reference|striptags }}</td>
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
                                {% for caisse in chantier.caisses %}
                                    {% if caisse.etat == 'save' %}
                                        <tr>
                                            <td class=\"text-center\">
                                                <input type=\"checkbox\" data-toggle=\"toggle\"
                                                       class=\"CAYSS2\"
                                                       value=\"{{ caisse.id }}\"></td>

                                            <td>{{ caisse.date|date('Y.m.d H.i.s') }}</td>
                                            <td><a
                                                        href=\"{{ path('editcaisse',{'idcaisse':caisse.id,'idchantier':chantier.id}) }}\"><span
                                                            class=\"badge badge-pill badge-secondary\">V</span> Caisse N° {{ caisse.numcaisse }}
                                                </a>
                                            </td>
                                            <td>BONS DE CAISSE NON VALIDÉS</td>
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
                            <br>

                            {% set vcth = 0 %}
                            {% set ncth = 0 %}

                            {% for caisse in chantier.caisses %}
                                {% if caisse.etat == 'valide' %}
                                    {% set vcth = caisse.montant + vcth %}
                                {% endif %}
                                {% if caisse.etat == 'save' %}
                                    {% set ncth = caisse.montant + ncth %}
                                {% endif %}
                            {% endfor %}
                            <table class=\"table-bordered d reduire\" style=\"float: right\">
                                <tr style=\"background-color: slategrey; color: white;\">
                                    <td colspan=\"2\" class=\"text-right\">
                                        VALIDÉS
                                    </td>
                                    <td class=\"text-right\">{{ vcth|number_format(2,',',' ') }}</td>
                                </tr>
                                <tr style=\"background-color: indianred; color: white\">
                                    <td colspan=\"2\" class=\"text-right\">
                                        NON VALIDÉS
                                    </td>
                                    <td class=\"text-right\">{{ ncth|number_format(2,',',' ') }}</td>
                                </tr>
                                <tr class=\"bg-pri text-white\">
                                    <td colspan=\"2\" class=\"text-right\">
                                        TOTAUX
                                    </td>
                                    <td class=\"text-right\">{{ (ncth+vcth)|number_format(2,',',' ') }}</td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



{% endblock %}
", "content/ecaisse.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\ecaisse.html.twig");
    }
}
