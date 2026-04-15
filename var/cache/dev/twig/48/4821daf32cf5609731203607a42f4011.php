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

/* content/dndevis.html.twig */
class __TwigTemplate_36e82e6e1dc5a9deb08d26c6049ed3e1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/dndevis.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/dndevis.html.twig"));

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

        // line 3
        yield "    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 3, $this->source); })()), "html", null, true);
        yield "
";
        
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
        yield "
    <input type=\"text\" class=\"hide\" id=\"idchan\" value=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "html", null, true);
        yield "\"/>
    <input type=\"text\" class=\"hide\" id=\"page\" value=\"dndevis\"/>

    <section class=\"content\" style=\"margin-top: 50px !important;\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row clearfix m-t-50\">
                    <div class=\"col-sm-12 \">
                        <h4 class=\"bolo700 col-deep-orange\">DEVIS NON VALIDÉS</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"content\" id=\"setchantier\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"panel-group\" id=\"accordion_1\" role=\"tablist\" aria-multiselectable=\"true\">
                    <div class=\"panel panel-pri shadow\"
                         style=\"border-left: 2px solid #E91E63;\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingOne_1\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed outai col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseOne_1p\" aria-expanded=\"false\"
                                   aria-controls=\"collapseOne_1\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Devis non validés
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseOne_1p\" class=\"panel-collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingOne_1\">
                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"table-responsive shadow\" style=\"padding: 10px\">
                                    <table class=\"table-striped table-bordered display nowrap\" style=\"width: 100%\"
                                           id=\"dataDEVIS4\">
                                        <thead>
                                        <tr class=\"text-center bolderr\"
                                            style=\"background-color: #f9f9f9 !important;\">
                                            <th class=\"mw30\"></th>
                                            <th class=\"mw30\"></th>
                                            <th>DATE</th>
                                            <th>N° DEVIS</th>
                                            <th>TOTAL HT</th>
                                            <th>TOTAL TTC</th>
                                            <th>RÉFÉRENCE</th>
                                            <th>ETAT</th>
                                            <th>CREÉ PAR</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 57
        $context["dtth"] = 0;
        // line 58
        yield "                                        ";
        $context["dttc"] = 0;
        // line 59
        yield "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 59, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 60
            yield "                                            ";
            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 60)) && (null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 60)))) {
                // line 61
                yield "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "devis", [], "any", false, false, false, 61));
                foreach ($context['_seq'] as $context["_key"] => $context["devis"]) {
                    // line 62
                    yield "                                                    ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "chantier", [], "any", false, false, false, 62), "corbeille", [], "any", false, false, false, 62))) {
                        // line 63
                        yield "                                                    ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "chantier", [], "any", false, false, false, 63), "etat", [], "any", false, false, false, 63) == "encours") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "chantier", [], "any", false, false, false, 63), "etat", [], "any", false, false, false, 63) == "etude"))) {
                            // line 64
                            yield "                                                        ";
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "etat", [], "any", false, false, false, 64) == "save") && (CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "type", [], "any", false, false, false, 64) != "esti"))) {
                                // line 65
                                yield "                                                            ";
                                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "corbeille", [], "any", false, false, false, 65))) {
                                    // line 66
                                    yield "                                                                <tr>
                                                                    <td class=\"text-center\">
                                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                               class=\"DEVYS4\"
                                                                               value=\"";
                                    // line 70
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "id", [], "any", false, false, false, 70), "html", null, true);
                                    yield "\"></td>
                                                                    <td class=\"text-center\">
                                                                        <a href=\"#\"
                                                                           onclick=\"shasha(";
                                    // line 73
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "id", [], "any", false, false, false, 73), "html", null, true);
                                    yield ",'imprimdevis');\">
                                                                            <i class=\"fa fa-eye col-green\"
                                                                               aria-hidden=\"true\"></i>
                                                                        </a>
                                                                    </td>
                                                                    <td>";
                                    // line 78
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "date", [], "any", false, false, false, 78), "y.m.d H:m"), "html", null, true);
                                    yield "</td>
                                                                    <td>
                                                                        <a href=\"";
                                    // line 80
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "id", [], "any", false, false, false, 80), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "chantier", [], "any", false, false, false, 80), "id", [], "any", false, false, false, 80)]), "html", null, true);
                                    yield "\"
                                                                           class=\"bolo600\"
                                                                           style=\"color:dodgerblue\">
                                                                            ";
                                    // line 83
                                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "etat", [], "any", false, false, false, 83) == "valide")) {
                                        // line 84
                                        yield "                                                                            <span class=\"badge badge-pill badge-primary\"
                                                                                  title=\"Validé par ";
                                        // line 85
                                        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "vabyuser", [], "any", false, false, false, 85))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                            // line 86
                                            yield "                                                                                  ";
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "vabyuser", [], "any", false, false, false, 86), "prenoms", [], "any", false, false, false, 86)), "html", null, true);
                                        }
                                        yield "\">V</span>
                                                                        ";
                                    } else {
                                        // line 88
                                        yield "                                                                            <span class=\"badge badge-pill col-white\"
                                                                                  title=\"Dévalidé par ";
                                        // line 89
                                        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "vabyuser", [], "any", false, false, false, 89))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                            // line 90
                                            yield "                                                                                   ";
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "vabyuser", [], "any", false, false, false, 90), "prenoms", [], "any", false, false, false, 90)), "html", null, true);
                                        }
                                        yield "\">V</span>
                                                                            ";
                                    }
                                    // line 91
                                    yield "&nbsp;DEVIS
                                                                            N°";
                                    // line 92
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "iddevis", [], "any", false, false, false, 92), "html", null, true);
                                    yield "
                                                                        </a>
                                                                    </td>

                                                                    <td class=\"text-right bolo600\">";
                                    // line 96
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalht", [], "any", false, false, false, 96), 2, ",", " "), "html", null, true);
                                    yield "</td>
                                                                    <td class=\"text-right bolo600\">";
                                    // line 97
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalttc", [], "any", false, false, false, 97), 2, ",", " "), "html", null, true);
                                    yield "</td>
                                                                    <td class=\"col-deep-orange\"
                                                                        title=\"";
                                    // line 99
                                    yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "devreference", [], "any", false, false, false, 99));
                                    yield "\">
                                                                        ";
                                    // line 100
                                    yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "devreference", [], "any", false, false, false, 100))) > 30)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "devreference", [], "any", false, false, false, 100)), 0, 30)) . "…"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source,                                     // line 101
$context["devis"], "devreference", [], "any", false, false, false, 101))), "html", null, true)));
                                    yield "</td>
                                                                    <td title=\"";
                                    // line 102
                                    yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "devreference", [], "any", false, false, false, 102));
                                    yield "\">
                                                                        <a href=\"";
                                    // line 103
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "chantier", [], "any", false, false, false, 103), "id", [], "any", false, false, false, 103)]), "html", null, true);
                                    yield "\">";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "client", [], "any", false, false, false, 103), "nomclient", [], "any", false, false, false, 103)), "html", null, true);
                                    yield "
                                                                            | ";
                                    // line 104
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "chantier", [], "any", false, false, false, 104), "nomchantier", [], "any", false, false, false, 104)), "html", null, true);
                                    yield "</a>
                                                                    </td>

                                                                    <td class=\"text-left col-blue bolo600\">
                                                                        <i class=\"fa fa-user col-blue bolo600\"></i>&nbsp;";
                                    // line 108
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "dobyuser", [], "any", false, false, false, 108), "nom", [], "any", false, false, false, 108)), "html", null, true);
                                    yield "
                                                                        &nbsp;";
                                    // line 109
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "dobyuser", [], "any", false, false, false, 109), "prenoms", [], "any", false, false, false, 109)), "html", null, true);
                                    yield "
                                                                    </td>
                                                                </tr>
                                                                ";
                                    // line 112
                                    $context["dtth"] = (CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalht", [], "any", false, false, false, 112) + (isset($context["dtth"]) || array_key_exists("dtth", $context) ? $context["dtth"] : (function () { throw new RuntimeError('Variable "dtth" does not exist.', 112, $this->source); })()));
                                    // line 113
                                    yield "                                                                ";
                                    $context["dttc"] = (CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalttc", [], "any", false, false, false, 113) + (isset($context["dttc"]) || array_key_exists("dttc", $context) ? $context["dttc"] : (function () { throw new RuntimeError('Variable "dttc" does not exist.', 113, $this->source); })()));
                                    // line 114
                                    yield "                                                            ";
                                }
                                // line 115
                                yield "                                                        ";
                            }
                            // line 116
                            yield "                                                    ";
                        }
                        // line 117
                        yield "                                                    ";
                    }
                    // line 118
                    yield "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['devis'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 119
                yield "                                            ";
            }
            // line 120
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        yield "                                        </tbody>
                                        <tfoot>
                                        <tr class=\"text-center bolderr\">
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th class=\"text-center bg-blue col-white\">";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["dtth"]) || array_key_exists("dtth", $context) ? $context["dtth"] : (function () { throw new RuntimeError('Variable "dtth" does not exist.', 128, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</th>
                                            <th class=\"text-center bg-blue col-white\">";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["dttc"]) || array_key_exists("dttc", $context) ? $context["dttc"] : (function () { throw new RuntimeError('Variable "dttc" does not exist.', 129, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        </tfoot>
                                    </table>
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
        return "content/dndevis.html.twig";
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
        return array (  347 => 129,  343 => 128,  334 => 121,  328 => 120,  325 => 119,  319 => 118,  316 => 117,  313 => 116,  310 => 115,  307 => 114,  304 => 113,  302 => 112,  296 => 109,  292 => 108,  285 => 104,  279 => 103,  275 => 102,  271 => 101,  270 => 100,  266 => 99,  261 => 97,  257 => 96,  250 => 92,  247 => 91,  240 => 90,  238 => 89,  235 => 88,  228 => 86,  226 => 85,  223 => 84,  221 => 83,  215 => 80,  210 => 78,  202 => 73,  196 => 70,  190 => 66,  187 => 65,  184 => 64,  181 => 63,  178 => 62,  173 => 61,  170 => 60,  165 => 59,  162 => 58,  160 => 57,  107 => 7,  104 => 6,  91 => 5,  77 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    {{ title }}
{% endblock %}
{% block body %}

    <input type=\"text\" class=\"hide\" id=\"idchan\" value=\"{{ chantier.id }}\"/>
    <input type=\"text\" class=\"hide\" id=\"page\" value=\"dndevis\"/>

    <section class=\"content\" style=\"margin-top: 50px !important;\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row clearfix m-t-50\">
                    <div class=\"col-sm-12 \">
                        <h4 class=\"bolo700 col-deep-orange\">DEVIS NON VALIDÉS</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"content\" id=\"setchantier\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"panel-group\" id=\"accordion_1\" role=\"tablist\" aria-multiselectable=\"true\">
                    <div class=\"panel panel-pri shadow\"
                         style=\"border-left: 2px solid #E91E63;\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingOne_1\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed outai col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseOne_1p\" aria-expanded=\"false\"
                                   aria-controls=\"collapseOne_1\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Devis non validés
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseOne_1p\" class=\"panel-collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingOne_1\">
                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"table-responsive shadow\" style=\"padding: 10px\">
                                    <table class=\"table-striped table-bordered display nowrap\" style=\"width: 100%\"
                                           id=\"dataDEVIS4\">
                                        <thead>
                                        <tr class=\"text-center bolderr\"
                                            style=\"background-color: #f9f9f9 !important;\">
                                            <th class=\"mw30\"></th>
                                            <th class=\"mw30\"></th>
                                            <th>DATE</th>
                                            <th>N° DEVIS</th>
                                            <th>TOTAL HT</th>
                                            <th>TOTAL TTC</th>
                                            <th>RÉFÉRENCE</th>
                                            <th>ETAT</th>
                                            <th>CREÉ PAR</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% set dtth = 0 %}
                                        {% set dttc = 0 %}
                                        {% for client in clients %}
                                            {% if client.corbeille is null and client.type is null %}
                                                {% for devis in client.devis %}
                                                    {% if devis.chantier.corbeille  is null %}
                                                    {% if devis.chantier.etat == 'encours' or devis.chantier.etat == 'etude' %}
                                                        {% if devis.etat == 'save' and devis.type != \"esti\" %}
                                                            {% if devis.corbeille is null %}
                                                                <tr>
                                                                    <td class=\"text-center\">
                                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                               class=\"DEVYS4\"
                                                                               value=\"{{ devis.id }}\"></td>
                                                                    <td class=\"text-center\">
                                                                        <a href=\"#\"
                                                                           onclick=\"shasha({{ devis.id }},'imprimdevis');\">
                                                                            <i class=\"fa fa-eye col-green\"
                                                                               aria-hidden=\"true\"></i>
                                                                        </a>
                                                                    </td>
                                                                    <td>{{ devis.date|date('y.m.d H:m') }}</td>
                                                                    <td>
                                                                        <a href=\"{{ path('editdevis',{'id':devis.id, 'idchantier':devis.chantier.id}) }}\"
                                                                           class=\"bolo600\"
                                                                           style=\"color:dodgerblue\">
                                                                            {% if devis.etat == \"valide\" %}
                                                                            <span class=\"badge badge-pill badge-primary\"
                                                                                  title=\"Validé par {% if devis.vabyuser is not null %}
                                                                                  {{ devis.vabyuser.prenoms|upper }}{% endif %}\">V</span>
                                                                        {% else %}
                                                                            <span class=\"badge badge-pill col-white\"
                                                                                  title=\"Dévalidé par {% if devis.vabyuser is not null %}
                                                                                   {{ devis.vabyuser.prenoms|upper }}{% endif %}\">V</span>
                                                                            {% endif %}&nbsp;DEVIS
                                                                            N°{{ devis.iddevis }}
                                                                        </a>
                                                                    </td>

                                                                    <td class=\"text-right bolo600\">{{ devis.totalht|number_format(2,',',' ') }}</td>
                                                                    <td class=\"text-right bolo600\">{{ devis.totalttc|number_format(2,',',' ') }}</td>
                                                                    <td class=\"col-deep-orange\"
                                                                        title=\"{{ devis.devreference|striptags|raw }}\">
                                                                        {{ devis.devreference|striptags|length > 30 ? devis.devreference|striptags|slice(0, 30)|capitalize ~ '…' :
                                                                        devis.devreference|striptags|capitalize }}</td>
                                                                    <td title=\"{{ devis.devreference|striptags|raw }}\">
                                                                        <a href=\"{{ path('chantier',{'id':devis.chantier.id}) }}\">{{ devis.client.nomclient|upper }}
                                                                            | {{ devis.chantier.nomchantier|upper }}</a>
                                                                    </td>

                                                                    <td class=\"text-left col-blue bolo600\">
                                                                        <i class=\"fa fa-user col-blue bolo600\"></i>&nbsp;{{ devis.dobyuser.nom|upper }}
                                                                        &nbsp;{{ devis.dobyuser.prenoms|upper }}
                                                                    </td>
                                                                </tr>
                                                                {% set dtth = devis.totalht + dtth %}
                                                                {% set dttc = devis.totalttc + dttc %}
                                                            {% endif %}
                                                        {% endif %}
                                                    {% endif %}
                                                    {% endif %}
                                                {% endfor %}
                                            {% endif %}
                                        {% endfor %}
                                        </tbody>
                                        <tfoot>
                                        <tr class=\"text-center bolderr\">
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th class=\"text-center bg-blue col-white\">{{ dtth|number_format(2,',',' ') }}</th>
                                            <th class=\"text-center bg-blue col-white\">{{ dttc|number_format(2,',',' ') }}</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{% endblock %}
", "content/dndevis.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\dndevis.html.twig");
    }
}
