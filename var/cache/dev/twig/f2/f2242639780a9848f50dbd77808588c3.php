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

/* content/dnbonsfournisseurs.html.twig */
class __TwigTemplate_20e7143a3f7ba319c2f7e712b7bc6cc1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/dnbonsfournisseurs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/dnbonsfournisseurs.html.twig"));

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

<input type=\"text\" class=\"hide\" id=\"page\" value=\"dnbonsfournisseurs\"/>

<section class=\"content\" style=\"margin-top: 50px !important;\">
    <div class=\"container-fluid\">
        <div class=\"block-header\">
            <div class=\"row clearfix m-t-50\">
                <div class=\"col-sm-12 \">
                    <h4 class=\"bolo700 col-deep-orange\">BONS FOURNISSEURS NON VALIDÉS</h4>
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
                                <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Bons
                                fournisseurs non validés
                            </a>
                        </h5>
                    </div>
                    <div id=\"collapseOne_1p\" class=\"panel-collapse\" role=\"tabpanel\"
                         aria-labelledby=\"headingOne_1\">
                        <div class=\"panel-body\" style=\"overflow: scroll\">
                            <div class=\"table-responsive shadow\" style=\"padding: 10px\">
                                <table class=\"table-striped table-bordered display nowrap\" style=\"width: 100%\"
                                       id=\"dataDNBONSFOURNES\">
                                    <thead>
                                    <tr class=\"text-center\">
                                        <th class=\"mw30\"></th>
                                        <th class=\"mw30\"></th>
                                        <th>DATE</th>
                                        <th>N° BON</th>
                                        <th>N° DE DEVIS</th>
                                        <th>TOTAL HT</th>
                                        <th>TOTAL TTC</th>
                                        <th>FOURNISSEURS</th>
                                        <th>RÉFÉRENCE</th>
                                        <th>ETAT</th>
                                        <th>CREÉ PAR</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 59
        $context["dtth"] = 0;
        // line 60
        yield "                                    ";
        $context["dttc"] = 0;
        // line 61
        yield "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 62
            yield "                                        ";
            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 62)) && (null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 62)))) {
                // line 63
                yield "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "bons", [], "any", false, false, false, 63));
                foreach ($context['_seq'] as $context["_key"] => $context["bon"]) {
                    // line 64
                    yield "                                            ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "chantier", [], "any", false, false, false, 64), "corbeille", [], "any", false, false, false, 64))) {
                        // line 65
                        yield "                                                ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "chantier", [], "any", false, false, false, 65), "etat", [], "any", false, false, false, 65) == "encours") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "chantier", [], "any", false, false, false, 65), "etat", [], "any", false, false, false, 65) == "etude"))) {
                            // line 66
                            yield "                                                    ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "etat", [], "any", false, false, false, 66) == "save")) {
                                // line 67
                                yield "                                                        ";
                                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "corbeille", [], "any", false, false, false, 67))) {
                                    // line 68
                                    yield "                                                                ";
                                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "type", [], "any", false, false, false, 68) == "non") || (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "type", [], "any", false, false, false, 68) == "oui"))) {
                                        // line 69
                                        yield "                                                                    <tr>
                                                                        <td class=\"text-center\">
                                                                            <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                                   class=\"BONNS2\"
                                                                                   value=\"";
                                        // line 73
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "id", [], "any", false, false, false, 73), "html", null, true);
                                        yield "\"></td>
                                                                        <td class=\"text-center\"><a href=\"#\"
                                                                                                   onclick=\"shasha(";
                                        // line 75
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "id", [], "any", false, false, false, 75), "html", null, true);
                                        yield ",'imprimbon');\"><i
                                                                                        class=\"fa fa-eye col-green\"
                                                                                        aria-hidden=\"true\"></i></a></td>
                                                                        <td>";
                                        // line 78
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "date", [], "any", false, false, false, 78), "Y-m-d"), "html", null, true);
                                        yield "</td>
                                                                        <td>
                                                                            ";
                                        // line 80
                                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "type", [], "any", false, false, false, 80) == "non")) {
                                            // line 81
                                            yield "                                                                                <a href=\"";
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editbon", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "id", [], "any", false, false, false, 81), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "chantier", [], "any", false, false, false, 81), "id", [], "any", false, false, false, 81)]), "html", null, true);
                                            yield "\">
                                                                            <span class=\"badge badge-pill bg-blue-grey text-white\"
                                                                                  title=\"Dévalidé par ";
                                            // line 83
                                            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "vabyuser", [], "any", false, false, false, 83))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "vabyuser", [], "any", false, false, false, 83), "prenoms", [], "any", false, false, false, 83)), "html", null, true);
                                            }
                                            yield "\">V</span>
                                                                                    <span
                                                                                            class=\"badge badvfjftuge-pill badge-danger text-white\">BRC</span>
                                                                                    BON
                                                                                    N° ";
                                            // line 87
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "numbon", [], "any", false, false, false, 87), "html", null, true);
                                            yield "
                                                                                </a>
                                                                            ";
                                        } else {
                                            // line 90
                                            yield "                                                                                <span
                                                                                        class=\"badge badge-pill bg-blue-grey text-white\">V</span>
                                                                                <a href=\"";
                                            // line 92
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editbon", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "id", [], "any", false, false, false, 92), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "chantier", [], "any", false, false, false, 92), "id", [], "any", false, false, false, 92)]), "html", null, true);
                                            yield "\">BON
                                                                                    N° ";
                                            // line 93
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "numbon", [], "any", false, false, false, 93), "html", null, true);
                                            yield "</a>
                                                                            ";
                                        }
                                        // line 95
                                        yield "                                                                        </td>
                                                                        <td> ";
                                        // line 96
                                        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "devis", [], "any", false, false, false, 96))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                            // line 97
                                            yield "                                                                                ";
                                            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "devis", [], "any", false, false, false, 97), "etat", [], "any", false, false, false, 97) != "valide")) {
                                                // line 98
                                                yield "                                                                                    <span class=\"badge badge-pill badge-blue-grey\">V</span> ";
                                            } else {
                                                // line 99
                                                yield "                                                                                    <span class=\"badge badge-pill badge-primary\">V</span>";
                                            }
                                            // line 100
                                            yield "                                                                                <a href=\"";
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "devis", [], "any", false, false, false, 100), "id", [], "any", false, false, false, 100), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "chantier", [], "any", false, false, false, 100), "id", [], "any", false, false, false, 100)]), "html", null, true);
                                            yield "\"
                                                                                   style=\"color:dodgerblue\">DEVIS
                                                                                    N° ";
                                            // line 102
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "devis", [], "any", false, false, false, 102), "iddevis", [], "any", false, false, false, 102), "html", null, true);
                                            yield "</a>
                                                                            ";
                                        }
                                        // line 103
                                        yield "</td>
                                                                        <td class=\"text-right\">";
                                        // line 104
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalht", [], "any", false, false, false, 104), 2, ",", " "), "html", null, true);
                                        yield "</td>
                                                                        <td class=\"text-right\">";
                                        // line 105
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalttc", [], "any", false, false, false, 105), 2, ",", " "), "html", null, true);
                                        yield "</td>
                                                                        <td>";
                                        // line 106
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "fournisseur", [], "any", false, false, false, 106), "fournisseur", [], "any", false, false, false, 106)), "html", null, true);
                                        yield "</td>
                                                                        <td class=\"col-deep-orange\"
                                                                            title=\"";
                                        // line 108
                                        yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "bonreference", [], "any", false, false, false, 108));
                                        yield "\">
                                                                            ";
                                        // line 109
                                        yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "bonreference", [], "any", false, false, false, 109));
                                        yield "
                                                                        </td>
                                                                        <td>";
                                        // line 111
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "client", [], "any", false, false, false, 111), "nomclient", [], "any", false, false, false, 111)), "html", null, true);
                                        yield " | ";
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "chantier", [], "any", false, false, false, 111), "nomchantier", [], "any", false, false, false, 111)), "html", null, true);
                                        yield "</td>
                                                                        <td class=\"text-left col-blue bolderrer\">";
                                        // line 112
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "dobyuser", [], "any", false, false, false, 112), "nom", [], "any", false, false, false, 112)), "html", null, true);
                                        yield "
                                                                            &nbsp;";
                                        // line 113
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "dobyuser", [], "any", false, false, false, 113), "prenoms", [], "any", false, false, false, 113)), "html", null, true);
                                        yield "</td>
                                                                    </tr>
                                                            ";
                                    }
                                    // line 116
                                    yield "                                                    ";
                                }
                                // line 117
                                yield "                                                ";
                            }
                            // line 118
                            yield "                                            ";
                        }
                        // line 119
                        yield "                                        ";
                    }
                    // line 120
                    yield "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['bon'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 121
                yield "                                    ";
            }
            // line 122
            yield "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        yield "                                    </tbody>
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
        return "content/dnbonsfournisseurs.html.twig";
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
        return array (  343 => 123,  337 => 122,  334 => 121,  328 => 120,  325 => 119,  322 => 118,  319 => 117,  316 => 116,  310 => 113,  306 => 112,  300 => 111,  295 => 109,  291 => 108,  286 => 106,  282 => 105,  278 => 104,  275 => 103,  270 => 102,  264 => 100,  261 => 99,  258 => 98,  255 => 97,  253 => 96,  250 => 95,  245 => 93,  241 => 92,  237 => 90,  231 => 87,  222 => 83,  216 => 81,  214 => 80,  209 => 78,  203 => 75,  198 => 73,  192 => 69,  189 => 68,  186 => 67,  183 => 66,  180 => 65,  177 => 64,  172 => 63,  169 => 62,  164 => 61,  161 => 60,  159 => 59,  104 => 6,  91 => 5,  77 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    {{ title }}
{% endblock %}
{% block body %}


<input type=\"text\" class=\"hide\" id=\"page\" value=\"dnbonsfournisseurs\"/>

<section class=\"content\" style=\"margin-top: 50px !important;\">
    <div class=\"container-fluid\">
        <div class=\"block-header\">
            <div class=\"row clearfix m-t-50\">
                <div class=\"col-sm-12 \">
                    <h4 class=\"bolo700 col-deep-orange\">BONS FOURNISSEURS NON VALIDÉS</h4>
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
                                <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Bons
                                fournisseurs non validés
                            </a>
                        </h5>
                    </div>
                    <div id=\"collapseOne_1p\" class=\"panel-collapse\" role=\"tabpanel\"
                         aria-labelledby=\"headingOne_1\">
                        <div class=\"panel-body\" style=\"overflow: scroll\">
                            <div class=\"table-responsive shadow\" style=\"padding: 10px\">
                                <table class=\"table-striped table-bordered display nowrap\" style=\"width: 100%\"
                                       id=\"dataDNBONSFOURNES\">
                                    <thead>
                                    <tr class=\"text-center\">
                                        <th class=\"mw30\"></th>
                                        <th class=\"mw30\"></th>
                                        <th>DATE</th>
                                        <th>N° BON</th>
                                        <th>N° DE DEVIS</th>
                                        <th>TOTAL HT</th>
                                        <th>TOTAL TTC</th>
                                        <th>FOURNISSEURS</th>
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
                                            {% for bon in client.bons %}
                                            {% if bon.chantier.corbeille  is null %}
                                                {% if bon.chantier.etat == 'encours' or bon.chantier.etat == 'etude' %}
                                                    {% if bon.etat == 'save' %}
                                                        {% if bon.corbeille is null %}
                                                                {% if  bon.type == 'non' or bon.type == 'oui' %}
                                                                    <tr>
                                                                        <td class=\"text-center\">
                                                                            <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                                   class=\"BONNS2\"
                                                                                   value=\"{{ bon.id }}\"></td>
                                                                        <td class=\"text-center\"><a href=\"#\"
                                                                                                   onclick=\"shasha({{ bon.id }},'imprimbon');\"><i
                                                                                        class=\"fa fa-eye col-green\"
                                                                                        aria-hidden=\"true\"></i></a></td>
                                                                        <td>{{ bon.date|date('Y-m-d') }}</td>
                                                                        <td>
                                                                            {% if bon.type == \"non\" %}
                                                                                <a href=\"{{ path('editbon',{'id':bon.id ,  'idchantier': bon.chantier.id}) }}\">
                                                                            <span class=\"badge badge-pill bg-blue-grey text-white\"
                                                                                  title=\"Dévalidé par {% if bon.vabyuser is not null %}{{ bon.vabyuser.prenoms|upper }}{% endif %}\">V</span>
                                                                                    <span
                                                                                            class=\"badge badvfjftuge-pill badge-danger text-white\">BRC</span>
                                                                                    BON
                                                                                    N° {{ bon.numbon }}
                                                                                </a>
                                                                            {% else %}
                                                                                <span
                                                                                        class=\"badge badge-pill bg-blue-grey text-white\">V</span>
                                                                                <a href=\"{{ path('editbon',{'id':bon.id ,  'idchantier': bon.chantier.id}) }}\">BON
                                                                                    N° {{ bon.numbon }}</a>
                                                                            {% endif %}
                                                                        </td>
                                                                        <td> {% if bon.devis is not null %}
                                                                                {% if bon.devis.etat != 'valide' %}
                                                                                    <span class=\"badge badge-pill badge-blue-grey\">V</span> {% else %}
                                                                                    <span class=\"badge badge-pill badge-primary\">V</span>{% endif %}
                                                                                <a href=\"{{ path('editdevis',{'id':bon.devis.id ,'idchantier':bon.chantier.id}) }}\"
                                                                                   style=\"color:dodgerblue\">DEVIS
                                                                                    N° {{ bon.devis.iddevis }}</a>
                                                                            {% endif %}</td>
                                                                        <td class=\"text-right\">{{ bon.totalht|number_format(2, ',', ' ') }}</td>
                                                                        <td class=\"text-right\">{{ bon.totalttc|number_format(2, ',', ' ') }}</td>
                                                                        <td>{{ bon.fournisseur.fournisseur|upper}}</td>
                                                                        <td class=\"col-deep-orange\"
                                                                            title=\"{{ bon.bonreference|striptags|raw }}\">
                                                                            {{ bon.bonreference|striptags|raw }}
                                                                        </td>
                                                                        <td>{{ bon.client.nomclient|upper  }} | {{ bon.chantier.nomchantier|upper  }}</td>
                                                                        <td class=\"text-left col-blue bolderrer\">{{ bon.dobyuser.nom|upper }}
                                                                            &nbsp;{{ bon.dobyuser.prenoms|upper }}</td>
                                                                    </tr>
                                                            {% endif %}
                                                    {% endif %}
                                                {% endif %}
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
            </div>
        </div>
    </div>
</section>

{% endblock %}
", "content/dnbonsfournisseurs.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\dnbonsfournisseurs.html.twig");
    }
}
