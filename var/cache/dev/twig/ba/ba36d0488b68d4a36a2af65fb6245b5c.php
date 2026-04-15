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

/* content/ecommande.html.twig */
class __TwigTemplate_f606a8022005eba9250121fa53a4cc5e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/ecommande.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/ecommande.html.twig"));

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
                                    <select class=\"form-control\" id=\"targetbon\">
                                        <option>CHOISIR UN PROJET</option>
                                        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 31
            yield "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["chantiers"]) || array_key_exists("chantiers", $context) ? $context["chantiers"] : (function () { throw new RuntimeError('Variable "chantiers" does not exist.', 31, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                // line 32
                yield "                                            ";
                if (($context["client"] == CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "client", [], "any", false, false, false, 32))) {
                    // line 33
                    yield "                                        <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 33), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "client", [], "any", false, false, false, 33), "html", null, true);
                    yield " || ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "chantier", [], "any", false, false, false, 33), "html", null, true);
                    yield "</option>
                                            ";
                }
                // line 35
                yield "                                        ";
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
                            ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "flashes", ["errbon"], "method", false, false, false, 49));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 50
            yield "                                <div class=\"alert alert-danger\">
                                    ";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "flashes", ["subon"], "method", false, false, false, 54));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 55
            yield "                                <div class=\"alert alert-success\">
                                    ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "                            <table class=\"table-striped table-bordered display nowrap\"
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
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 75, $this->source); })()), "bons", [], "any", false, false, false, 75));
        foreach ($context['_seq'] as $context["_key"] => $context["bon"]) {
            // line 76
            yield "                                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "etat", [], "any", false, false, false, 76) == "valide")) {
                // line 77
                yield "                                        <tr>
                                            <td class=\"text-center\">
                                                <input type=\"checkbox\" data-toggle=\"toggle\"
                                                       class=\"BONNS\"
                                                       value=\"";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "id", [], "any", false, false, false, 81), "html", null, true);
                yield "\"></td>
                                            <td>";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "date", [], "any", false, false, false, 82), "Y.m.d H.i.s"), "html", null, true);
                yield "</td>
                                            <td>
                                                ";
                // line 84
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "type", [], "any", false, false, false, 84) == "non")) {
                    // line 85
                    yield "                                                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editbon", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "id", [], "any", false, false, false, 85), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 85, $this->source); })()), "id", [], "any", false, false, false, 85)]), "html", null, true);
                    yield "\">
                                                        <span class=\"badge badge-pill badge-primary\">V</span>
                                                        <span class=\"badge badge-pill badge-danger\">BRC</span> Commande N° ";
                    // line 87
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "numbon", [], "any", false, false, false, 87), "html", null, true);
                    yield "
                                                    </a>
                                                ";
                } else {
                    // line 90
                    yield "                                                    <span
                                                            class=\"badge badge-pill badge-primary\">V</span>
                                                    <a href=\"";
                    // line 92
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editbon", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "id", [], "any", false, false, false, 92), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 92, $this->source); })()), "id", [], "any", false, false, false, 92)]), "html", null, true);
                    yield "\"> Commande N° ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "numbon", [], "any", false, false, false, 92), "html", null, true);
                    yield "</a>
                                                ";
                }
                // line 94
                yield "                                            </td>
                                            <td title=\"";
                // line 95
                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "reference", [], "any", false, false, false, 95));
                yield "\">";
                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "reference", [], "any", false, false, false, 95));
                yield "</td>
                                            <td class=\"text-right\">";
                // line 96
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalht", [], "any", false, false, false, 96), 2, ",", " "), "html", null, true);
                yield "</td>
                                            <td class=\"text-right\">";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalttc", [], "any", false, false, false, 97), 2, ",", " "), "html", null, true);
                yield "</td>
                                            <td>BONS DE COMMANDE VALIDÉS</td>
                                            <td class=\"text-left text-pri bolderrer\" style=\"background-color: #E8E8E8 !important;\"><i class=\"fa fa-user text-pri\"></i>&nbsp;";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "dobyuser", [], "any", false, false, false, 99), "nom", [], "any", false, false, false, 99)), "html", null, true);
                yield "&nbsp;";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "dobyuser", [], "any", false, false, false, 99), "prenoms", [], "any", false, false, false, 99)), "html", null, true);
                yield "</td>

                                        </tr>
                                    ";
            }
            // line 103
            yield "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['bon'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        yield "                                </tbody>
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
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 125, $this->source); })()), "bons", [], "any", false, false, false, 125));
        foreach ($context['_seq'] as $context["_key"] => $context["bon"]) {
            // line 126
            yield "                                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "etat", [], "any", false, false, false, 126) == "save")) {
                // line 127
                yield "                                        <tr>
                                            <td class=\"text-center\">
                                                <input type=\"checkbox\" data-toggle=\"toggle\"
                                                       class=\"BONNS2\"
                                                       value=\"";
                // line 131
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "id", [], "any", false, false, false, 131), "html", null, true);
                yield "\"></td>
                                            <td>";
                // line 132
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "date", [], "any", false, false, false, 132), "Y.m.d H.i.s"), "html", null, true);
                yield "</td>
                                            <td>
                                                ";
                // line 134
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "type", [], "any", false, false, false, 134) == "non")) {
                    // line 135
                    yield "                                                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editbon", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "id", [], "any", false, false, false, 135), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 135, $this->source); })()), "id", [], "any", false, false, false, 135)]), "html", null, true);
                    yield "\"><span
                                                                class=\"badge badge-pill badge-secondary\">V</span>
                                                        <span
                                                                class=\"badge badge-pill badge-danger\">BRC</span> Commande N° ";
                    // line 138
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "numbon", [], "any", false, false, false, 138), "html", null, true);
                    yield "
                                                    </a>
                                                ";
                } else {
                    // line 141
                    yield "                                                    <span
                                                            class=\"badge badge-pill badge-secondary\">V</span>
                                                    <a href=\"";
                    // line 143
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editbon", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "id", [], "any", false, false, false, 143), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 143, $this->source); })()), "id", [], "any", false, false, false, 143)]), "html", null, true);
                    yield "\"> Commande N°";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "numbon", [], "any", false, false, false, 143), "html", null, true);
                    yield "</a>
                                                ";
                }
                // line 145
                yield "                                            </td>
                                            <td title=\"";
                // line 146
                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "reference", [], "any", false, false, false, 146));
                yield "\">";
                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "reference", [], "any", false, false, false, 146));
                yield "</td>
                                            <td class=\"text-right\">";
                // line 147
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalht", [], "any", false, false, false, 147), 2, ",", " "), "html", null, true);
                yield "</td>
                                            <td class=\"text-right\">";
                // line 148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalttc", [], "any", false, false, false, 148), 2, ",", " "), "html", null, true);
                yield "</td>
                                            <td>BONS DE COMMANDE NON VALIDÉS</td>
                                            <td class=\"text-left text-pri bolderrer\" style=\"background-color: #E8E8E8 !important;\"><i class=\"fa fa-user text-pri\"></i>&nbsp;";
                // line 150
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "dobyuser", [], "any", false, false, false, 150), "nom", [], "any", false, false, false, 150)), "html", null, true);
                yield "&nbsp;";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "dobyuser", [], "any", false, false, false, 150), "prenoms", [], "any", false, false, false, 150)), "html", null, true);
                yield "</td>
                                        </tr>
                                    ";
            }
            // line 153
            yield "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['bon'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        yield "                                </tbody>
                            </table>
                            <br>
                            ";
        // line 157
        $context["vbth"] = 0;
        // line 158
        yield "                            ";
        $context["vbttc"] = 0;
        // line 159
        yield "
                            ";
        // line 160
        $context["nbth"] = 0;
        // line 161
        yield "                            ";
        $context["nbttc"] = 0;
        // line 162
        yield "
                            ";
        // line 163
        $context["brht"] = 0;
        // line 164
        yield "                            ";
        $context["brttc"] = 0;
        // line 165
        yield "
                            ";
        // line 166
        $context["brnht"] = 0;
        // line 167
        yield "                            ";
        $context["brnttc"] = 0;
        // line 168
        yield "
                            ";
        // line 169
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 169, $this->source); })()), "bons", [], "any", false, false, false, 169));
        foreach ($context['_seq'] as $context["_key"] => $context["bon"]) {
            // line 170
            yield "
                                ";
            // line 171
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "etat", [], "any", false, false, false, 171) == "valide") && (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "type", [], "any", false, false, false, 171) != "non"))) {
                // line 172
                yield "                                    ";
                $context["vbth"] = (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalht", [], "any", false, false, false, 172) + (isset($context["vbth"]) || array_key_exists("vbth", $context) ? $context["vbth"] : (function () { throw new RuntimeError('Variable "vbth" does not exist.', 172, $this->source); })()));
                // line 173
                yield "                                    ";
                $context["vbttc"] = (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalttc", [], "any", false, false, false, 173) + (isset($context["vbttc"]) || array_key_exists("vbttc", $context) ? $context["vbttc"] : (function () { throw new RuntimeError('Variable "vbttc" does not exist.', 173, $this->source); })()));
                // line 174
                yield "                                ";
            }
            // line 175
            yield "
                                ";
            // line 176
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "etat", [], "any", false, false, false, 176) == "save") && (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "type", [], "any", false, false, false, 176) != "non"))) {
                // line 177
                yield "                                    ";
                $context["nbth"] = (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalht", [], "any", false, false, false, 177) + (isset($context["nbth"]) || array_key_exists("nbth", $context) ? $context["nbth"] : (function () { throw new RuntimeError('Variable "nbth" does not exist.', 177, $this->source); })()));
                // line 178
                yield "                                    ";
                $context["nbttc"] = (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalttc", [], "any", false, false, false, 178) + (isset($context["nbttc"]) || array_key_exists("nbttc", $context) ? $context["nbttc"] : (function () { throw new RuntimeError('Variable "nbttc" does not exist.', 178, $this->source); })()));
                // line 179
                yield "                                ";
            }
            // line 180
            yield "
                                ";
            // line 181
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "etat", [], "any", false, false, false, 181) == "valide") && (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "type", [], "any", false, false, false, 181) == "non"))) {
                // line 182
                yield "                                    ";
                $context["brht"] = (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalht", [], "any", false, false, false, 182) + (isset($context["brht"]) || array_key_exists("brht", $context) ? $context["brht"] : (function () { throw new RuntimeError('Variable "brht" does not exist.', 182, $this->source); })()));
                // line 183
                yield "                                    ";
                $context["brttc"] = (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalttc", [], "any", false, false, false, 183) + (isset($context["brttc"]) || array_key_exists("brttc", $context) ? $context["brttc"] : (function () { throw new RuntimeError('Variable "brttc" does not exist.', 183, $this->source); })()));
                // line 184
                yield "                                ";
            }
            // line 185
            yield "
                                ";
            // line 186
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "etat", [], "any", false, false, false, 186) == "save") && (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "type", [], "any", false, false, false, 186) == "non"))) {
                // line 187
                yield "                                    ";
                $context["brnht"] = (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalht", [], "any", false, false, false, 187) + (isset($context["brnht"]) || array_key_exists("brnht", $context) ? $context["brnht"] : (function () { throw new RuntimeError('Variable "brnht" does not exist.', 187, $this->source); })()));
                // line 188
                yield "                                    ";
                $context["brnttc"] = (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalttc", [], "any", false, false, false, 188) + (isset($context["brnttc"]) || array_key_exists("brnttc", $context) ? $context["brnttc"] : (function () { throw new RuntimeError('Variable "brnttc" does not exist.', 188, $this->source); })()));
                // line 189
                yield "                                ";
            }
            // line 190
            yield "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['bon'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        yield "

                            <table class=\"table-bordered d reduire\" style=\"float: right\">
                                <tr style=\"background-color: slategrey; color: white\">
                                    <th class=\"text-center\"></th>
                                    <th class=\"text-center\">TOTAL HT</th>
                                    <th class=\"text-center\">TOTAL TTC</th>
                                </tr>
                                <tr style=\"background-color: slategrey; color: white\">
                                    <td class=\"text-right\">VALIDÉS</td>
                                    <td class=\"text-right\">";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["vbth"]) || array_key_exists("vbth", $context) ? $context["vbth"] : (function () { throw new RuntimeError('Variable "vbth" does not exist.', 202, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</td>
                                    <td class=\"text-right\">";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["vbttc"]) || array_key_exists("vbttc", $context) ? $context["vbttc"] : (function () { throw new RuntimeError('Variable "vbttc" does not exist.', 203, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</td>
                                </tr>
                                <tr style=\"background-color: slategrey; color: white\">
                                    <td class=\"text-right\">BONS DE RETOUR VALIDÉS</td>
                                    <td class=\"text-right\">";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["brht"]) || array_key_exists("brht", $context) ? $context["brht"] : (function () { throw new RuntimeError('Variable "brht" does not exist.', 207, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</td>
                                    <td class=\"text-right\">";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["brttc"]) || array_key_exists("brttc", $context) ? $context["brttc"] : (function () { throw new RuntimeError('Variable "brttc" does not exist.', 208, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</td>
                                </tr>
                                <tr style=\"background-color: indianred; color: white\">
                                    <td class=\"text-right\">NON VALIDÉS</td>
                                    <td class=\"text-right\">";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["nbth"]) || array_key_exists("nbth", $context) ? $context["nbth"] : (function () { throw new RuntimeError('Variable "nbth" does not exist.', 212, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</td>
                                    <td class=\"text-right\">";
        // line 213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["nbttc"]) || array_key_exists("nbttc", $context) ? $context["nbttc"] : (function () { throw new RuntimeError('Variable "nbttc" does not exist.', 213, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</td>
                                </tr>

                                <tr style=\"background-color: indianred; color: white\">
                                    <td class=\"text-right\">BONS DE RETOUR NON VALIDÉS</td>
                                    <td class=\"text-right\">";
        // line 218
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["brnht"]) || array_key_exists("brnht", $context) ? $context["brnht"] : (function () { throw new RuntimeError('Variable "brnht" does not exist.', 218, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</td>
                                    <td class=\"text-right\">";
        // line 219
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["brnttc"]) || array_key_exists("brnttc", $context) ? $context["brnttc"] : (function () { throw new RuntimeError('Variable "brnttc" does not exist.', 219, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</td>
                                </tr>
                                <tr class=\"bg-pri text-white\">
                                    <td class=\"text-right\">TOTAUX</td>
                                    <td class=\"text-right\">";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((isset($context["vbth"]) || array_key_exists("vbth", $context) ? $context["vbth"] : (function () { throw new RuntimeError('Variable "vbth" does not exist.', 223, $this->source); })()) - (isset($context["brht"]) || array_key_exists("brht", $context) ? $context["brht"] : (function () { throw new RuntimeError('Variable "brht" does not exist.', 223, $this->source); })())) + ((isset($context["nbth"]) || array_key_exists("nbth", $context) ? $context["nbth"] : (function () { throw new RuntimeError('Variable "nbth" does not exist.', 223, $this->source); })()) - (isset($context["brnht"]) || array_key_exists("brnht", $context) ? $context["brnht"] : (function () { throw new RuntimeError('Variable "brnht" does not exist.', 223, $this->source); })()))), 2, ",", " "), "html", null, true);
        yield "</td>
                                    <td class=\"text-right\">";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((isset($context["vbttc"]) || array_key_exists("vbttc", $context) ? $context["vbttc"] : (function () { throw new RuntimeError('Variable "vbttc" does not exist.', 224, $this->source); })()) - (isset($context["brttc"]) || array_key_exists("brttc", $context) ? $context["brttc"] : (function () { throw new RuntimeError('Variable "brttc" does not exist.', 224, $this->source); })())) + ((isset($context["nbttc"]) || array_key_exists("nbttc", $context) ? $context["nbttc"] : (function () { throw new RuntimeError('Variable "nbttc" does not exist.', 224, $this->source); })()) - (isset($context["brnttc"]) || array_key_exists("brnttc", $context) ? $context["brnttc"] : (function () { throw new RuntimeError('Variable "brnttc" does not exist.', 224, $this->source); })()))), 2, ",", " "), "html", null, true);
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
        return "content/ecommande.html.twig";
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
        return array (  575 => 224,  571 => 223,  564 => 219,  560 => 218,  552 => 213,  548 => 212,  541 => 208,  537 => 207,  530 => 203,  526 => 202,  514 => 192,  507 => 190,  504 => 189,  501 => 188,  498 => 187,  496 => 186,  493 => 185,  490 => 184,  487 => 183,  484 => 182,  482 => 181,  479 => 180,  476 => 179,  473 => 178,  470 => 177,  468 => 176,  465 => 175,  462 => 174,  459 => 173,  456 => 172,  454 => 171,  451 => 170,  447 => 169,  444 => 168,  441 => 167,  439 => 166,  436 => 165,  433 => 164,  431 => 163,  428 => 162,  425 => 161,  423 => 160,  420 => 159,  417 => 158,  415 => 157,  410 => 154,  404 => 153,  396 => 150,  391 => 148,  387 => 147,  381 => 146,  378 => 145,  371 => 143,  367 => 141,  361 => 138,  354 => 135,  352 => 134,  347 => 132,  343 => 131,  337 => 127,  334 => 126,  330 => 125,  307 => 104,  301 => 103,  292 => 99,  287 => 97,  283 => 96,  277 => 95,  274 => 94,  267 => 92,  263 => 90,  257 => 87,  251 => 85,  249 => 84,  244 => 82,  240 => 81,  234 => 77,  231 => 76,  227 => 75,  209 => 59,  200 => 56,  197 => 55,  192 => 54,  183 => 51,  180 => 50,  176 => 49,  168 => 43,  161 => 37,  155 => 36,  149 => 35,  139 => 33,  136 => 32,  131 => 31,  127 => 30,  106 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
                                    <select class=\"form-control\" id=\"targetbon\">
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

                                {% for bon in chantier.bons %}
                                    {% if bon.etat == 'valide' %}
                                        <tr>
                                            <td class=\"text-center\">
                                                <input type=\"checkbox\" data-toggle=\"toggle\"
                                                       class=\"BONNS\"
                                                       value=\"{{ bon.id }}\"></td>
                                            <td>{{ bon.date|date('Y.m.d H.i.s') }}</td>
                                            <td>
                                                {% if bon.type == \"non\" %}
                                                    <a href=\"{{ path('editbon',{'id':bon.id,'idchantier':chantier.id}) }}\">
                                                        <span class=\"badge badge-pill badge-primary\">V</span>
                                                        <span class=\"badge badge-pill badge-danger\">BRC</span> Commande N° {{ bon.numbon }}
                                                    </a>
                                                {% else %}
                                                    <span
                                                            class=\"badge badge-pill badge-primary\">V</span>
                                                    <a href=\"{{ path('editbon',{'id':bon.id,'idchantier':chantier.id}) }}\"> Commande N° {{ bon.numbon }}</a>
                                                {% endif %}
                                            </td>
                                            <td title=\"{{ bon.reference|striptags|raw }}\">{{ bon.reference|striptags|raw }}</td>
                                            <td class=\"text-right\">{{ bon.totalht|number_format(2, ',', ' ') }}</td>
                                            <td class=\"text-right\">{{ bon.totalttc|number_format(2, ',', ' ') }}</td>
                                            <td>BONS DE COMMANDE VALIDÉS</td>
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

                                {% for bon in chantier.bons %}
                                    {% if bon.etat == 'save' %}
                                        <tr>
                                            <td class=\"text-center\">
                                                <input type=\"checkbox\" data-toggle=\"toggle\"
                                                       class=\"BONNS2\"
                                                       value=\"{{ bon.id }}\"></td>
                                            <td>{{ bon.date|date('Y.m.d H.i.s') }}</td>
                                            <td>
                                                {% if bon.type == \"non\" %}
                                                    <a href=\"{{ path('editbon',{'id':bon.id,'idchantier':chantier.id}) }}\"><span
                                                                class=\"badge badge-pill badge-secondary\">V</span>
                                                        <span
                                                                class=\"badge badge-pill badge-danger\">BRC</span> Commande N° {{ bon.numbon }}
                                                    </a>
                                                {% else %}
                                                    <span
                                                            class=\"badge badge-pill badge-secondary\">V</span>
                                                    <a href=\"{{ path('editbon',{'id':bon.id,'idchantier':chantier.id}) }}\"> Commande N°{{ bon.numbon }}</a>
                                                {% endif %}
                                            </td>
                                            <td title=\"{{ bon.reference|striptags|raw }}\">{{ bon.reference|striptags|raw }}</td>
                                            <td class=\"text-right\">{{ bon.totalht|number_format(2, ',', ' ') }}</td>
                                            <td class=\"text-right\">{{ bon.totalttc|number_format(2, ',', ' ') }}</td>
                                            <td>BONS DE COMMANDE NON VALIDÉS</td>
                                            <td class=\"text-left text-pri bolderrer\" style=\"background-color: #E8E8E8 !important;\"><i class=\"fa fa-user text-pri\"></i>&nbsp;{{ bon.dobyuser.nom|upper }}&nbsp;{{ bon.dobyuser.prenoms|upper }}</td>
                                        </tr>
                                    {% endif %}
                                {% endfor %}
                                </tbody>
                            </table>
                            <br>
                            {% set vbth = 0 %}
                            {% set vbttc = 0 %}

                            {% set nbth = 0 %}
                            {% set nbttc = 0 %}

                            {% set brht = 0 %}
                            {% set brttc = 0 %}

                            {% set brnht = 0 %}
                            {% set brnttc = 0 %}

                            {% for bon in chantier.bons %}

                                {% if bon.etat == 'valide' and bon.type != \"non\" %}
                                    {% set vbth = bon.totalht + vbth %}
                                    {% set vbttc = bon.totalttc + vbttc %}
                                {% endif %}

                                {% if bon.etat == 'save' and bon.type != \"non\" %}
                                    {% set nbth = bon.totalht + nbth %}
                                    {% set nbttc = bon.totalttc + nbttc %}
                                {% endif %}

                                {% if bon.etat == 'valide' and bon.type == \"non\" %}
                                    {% set brht = bon.totalht + brht %}
                                    {% set brttc = bon.totalttc + brttc %}
                                {% endif %}

                                {% if bon.etat == 'save' and bon.type == \"non\" %}
                                    {% set brnht = bon.totalht + brnht %}
                                    {% set brnttc = bon.totalttc + brnttc %}
                                {% endif %}

                            {% endfor %}


                            <table class=\"table-bordered d reduire\" style=\"float: right\">
                                <tr style=\"background-color: slategrey; color: white\">
                                    <th class=\"text-center\"></th>
                                    <th class=\"text-center\">TOTAL HT</th>
                                    <th class=\"text-center\">TOTAL TTC</th>
                                </tr>
                                <tr style=\"background-color: slategrey; color: white\">
                                    <td class=\"text-right\">VALIDÉS</td>
                                    <td class=\"text-right\">{{ vbth|number_format(2,',', ' ') }}</td>
                                    <td class=\"text-right\">{{ vbttc|number_format(2,',',' ') }}</td>
                                </tr>
                                <tr style=\"background-color: slategrey; color: white\">
                                    <td class=\"text-right\">BONS DE RETOUR VALIDÉS</td>
                                    <td class=\"text-right\">{{ brht|number_format(2, ',', ' ') }}</td>
                                    <td class=\"text-right\">{{ brttc|number_format(2,',',' ') }}</td>
                                </tr>
                                <tr style=\"background-color: indianred; color: white\">
                                    <td class=\"text-right\">NON VALIDÉS</td>
                                    <td class=\"text-right\">{{ nbth|number_format(2, ',', ' ') }}</td>
                                    <td class=\"text-right\">{{ nbttc|number_format(2,',',' ') }}</td>
                                </tr>

                                <tr style=\"background-color: indianred; color: white\">
                                    <td class=\"text-right\">BONS DE RETOUR NON VALIDÉS</td>
                                    <td class=\"text-right\">{{ brnht|number_format(2, ',', ' ') }}</td>
                                    <td class=\"text-right\">{{ brnttc|number_format(2,',',' ') }}</td>
                                </tr>
                                <tr class=\"bg-pri text-white\">
                                    <td class=\"text-right\">TOTAUX</td>
                                    <td class=\"text-right\">{{ ((vbth-brht)+(nbth-brnht))|number_format(2, ',', ' ') }}</td>
                                    <td class=\"text-right\">{{ ((vbttc-brttc)+(nbttc-brnttc))|number_format(2,',',' ') }}</td>

                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



{% endblock %}
", "content/ecommande.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\ecommande.html.twig");
    }
}
