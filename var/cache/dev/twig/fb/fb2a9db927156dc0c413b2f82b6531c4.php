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

/* content/dnpaiesfournisseurs.html.twig */
class __TwigTemplate_ffacff5e09f778fd691d313cbfd61458 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/dnpaiesfournisseurs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/dnpaiesfournisseurs.html.twig"));

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
                        <h4 class=\"bolo700 col-deep-orange\">PAIES FOURNISSEURS NON VALIDÉES</h4>
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
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Paies
                                    fournisseurs non validées
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseOne_1p\" class=\"panel-collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingOne_1\">
                            <div class=\"panel-body \" style=\"overflow: scroll; background-color: #dbdfef\">
                                <div class=\"table-responsive shadow bg-white\"
                                     style=\"padding: 10px 10px 50px 10px;color:#555; overflow: scroll\">
                                    <table class=\"table-bordered display nowrape\" style=\"width: 100%\"
                                           id=\"dCAISSEP3\">
                                        <thead>
                                        <tr class=\"text-center\">
                                            <th>FOURNISSEURS</th>
                                            <th class=\"mw30\"></th>
                                            <th class=\"mw30\"></th>
                                            <th>DATE</th>
                                            <th>BON DE CAISSE</th>
                                            <th>MONTANT</th>
                                            <th>BONS</th>
                                            <th>CHANTIERS</th>
                                            <th>CREÉ PAR</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 58
            yield "                                            ";
            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 58)) && (null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 58)))) {
                // line 59
                yield "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "bons", [], "any", false, false, false, 59));
                foreach ($context['_seq'] as $context["_key"] => $context["bon"]) {
                    // line 60
                    yield "                                                    ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "chantier", [], "any", false, false, false, 60), "corbeille", [], "any", false, false, false, 60))) {
                        // line 61
                        yield "                                                        ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "chantier", [], "any", false, false, false, 61), "etat", [], "any", false, false, false, 61) == "encours") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "chantier", [], "any", false, false, false, 61), "etat", [], "any", false, false, false, 61) == "etude"))) {
                            // line 62
                            yield "                                                            ";
                            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "corbeille", [], "any", false, false, false, 62))) {
                                // line 63
                                yield "                                                                ";
                                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "corbeille", [], "any", false, false, false, 63))) {
                                    // line 64
                                    yield "                                                                    ";
                                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "type", [], "any", false, false, false, 64) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "type", [], "any", false, false, false, 64) == "non"))) {
                                        // line 65
                                        yield "                                                                        ";
                                        $context['_parent'] = $context;
                                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "caisses", [], "any", false, false, false, 65));
                                        foreach ($context['_seq'] as $context["_key"] => $context["caisse"]) {
                                            // line 66
                                            yield "                                                                            ";
                                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "etat", [], "any", false, false, false, 66) == "save")) {
                                                // line 67
                                                yield "                                                                                ";
                                                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "corbeille", [], "any", false, false, false, 67))) {
                                                    // line 68
                                                    yield "                                                                                    <tr>
                                                                                        <td class=\"bolo700\">";
                                                    // line 69
                                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "fournisseur", [], "any", false, false, false, 69), "fournisseur", [], "any", false, false, false, 69)), "html", null, true);
                                                    yield "
                                                                                            - ";
                                                    // line 70
                                                    if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "bon", [], "any", false, false, false, 70))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                                        yield "BON N° ";
                                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "numbon", [], "any", false, false, false, 70), "html", null, true);
                                                        yield "
                                                                                                <span class=\"col-black\">[ BON TTC: ";
                                                        // line 71
                                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalttc", [], "any", false, false, false, 71), 2, ",", " "), "html", null, true);
                                                        yield " ]</span>
                                                                                                <span class=\"col-pink\">[ SOLDE: ";
                                                        // line 72
                                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "reste", [], "any", false, false, false, 72), 2, ",", " "), "html", null, true);
                                                        yield " ]</span>
                                                                                            ";
                                                    }
                                                    // line 73
                                                    yield " </td>
                                                                                        <td class=\"text-center\">
                                                                                            <input type=\"checkbox\"
                                                                                                   data-toggle=\"toggle\"
                                                                                                   class=\"CSSE2\"
                                                                                                   value=\"";
                                                    // line 78
                                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "id", [], "any", false, false, false, 78), "html", null, true);
                                                    yield "\"></td>
                                                                                        <td class=\"text-center\"><a href=\"#\"
                                                                                                                   onclick=\"shasha(";
                                                    // line 80
                                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "id", [], "any", false, false, false, 80), "html", null, true);
                                                    yield ",'imprimcaisse');\"><i
                                                                                                        class=\"fa fa-eye col-green\"
                                                                                                        aria-hidden=\"true\"></i></a>
                                                                                        </td>
                                                                                        <td>";
                                                    // line 84
                                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "date", [], "any", false, false, false, 84), "Y.m.d"), "html", null, true);
                                                    yield "</td>
                                                                                        <td>
                                                                                            <a href=\"";
                                                    // line 86
                                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editcaisse", ["idcaisse" => CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "id", [], "any", false, false, false, 86), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "chantier", [], "any", false, false, false, 86), "id", [], "any", false, false, false, 86)]), "html", null, true);
                                                    yield "\"><span
                                                                                                        class=\"badge badge-pill bg-blue-grey text-white\"
                                                                                                        title=\"Dévalidé par ";
                                                    // line 88
                                                    if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "vabyuser", [], "any", false, false, false, 88))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "vabyuser", [], "any", false, false, false, 88), "prenoms", [], "any", false, false, false, 88)), "html", null, true);
                                                    }
                                                    yield "\">V</span>
                                                                                                ";
                                                    // line 89
                                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "numcaisse", [], "any", false, false, false, 89), "html", null, true);
                                                    if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "moyen", [], "any", false, false, false, 89))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                                        // line 90
                                                        yield "                                                                                                    <span class=\"col-blue-grey\">
                                                                                                    (";
                                                        // line 91
                                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "moyen", [], "any", false, false, false, 91), "html", null, true);
                                                        yield ")</span>";
                                                    }
                                                    // line 92
                                                    yield "                                                                                            </a>
                                                                                        </td>
                                                                                        <td class=\"text-right\">";
                                                    // line 94
                                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "montant", [], "any", false, false, false, 94), 2, ",", " "), "html", null, true);
                                                    yield "</td>
                                                                                        <td>";
                                                    // line 95
                                                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "etat", [], "any", false, false, false, 95) != "valide")) {
                                                        // line 96
                                                        yield "                                                                                                <span class=\"badge badge-pill badge-blue-grey\">V</span> ";
                                                    } else {
                                                        // line 97
                                                        yield "                                                                                                <span class=\"badge badge-pill badge-primary\">V</span>";
                                                    }
                                                    // line 98
                                                    yield "                                                                                            <a href=\"";
                                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editbon", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "id", [], "any", false, false, false, 98), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "chantier", [], "any", false, false, false, 98), "id", [], "any", false, false, false, 98)]), "html", null, true);
                                                    yield "\"
                                                                                               style=\"color:dodgerblue\">BON
                                                                                                N° ";
                                                    // line 100
                                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "numbon", [], "any", false, false, false, 100), "html", null, true);
                                                    yield "</a>
                                                                                        </td>
                                                                                        <td class=\"col-deep-orange\">
                                                                                            ";
                                                    // line 103
                                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "client", [], "any", false, false, false, 103), "nomclient", [], "any", false, false, false, 103)), "html", null, true);
                                                    yield " | ";
                                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "chantier", [], "any", false, false, false, 103), "nomchantier", [], "any", false, false, false, 103)), "html", null, true);
                                                    yield "
                                                                                        </td>

                                                                                        <td class=\"text-left col-blue bolo600\"><i
                                                                                                    class=\"fa fa-user col-blue\"></i>&nbsp; ";
                                                    // line 107
                                                    if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "dobyuser", [], "any", false, false, false, 107))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "dobyuser", [], "any", false, false, false, 107), "nom", [], "any", false, false, false, 107)), "html", null, true);
                                                        yield "
                                                                                                &nbsp;";
                                                        // line 108
                                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "dobyuser", [], "any", false, false, false, 108), "prenoms", [], "any", false, false, false, 108)), "html", null, true);
                                                        yield "  ";
                                                    }
                                                    // line 109
                                                    yield "                                                                                        </td>
                                                                                    </tr>
                                                                                ";
                                                }
                                                // line 112
                                                yield "                                                                            ";
                                            }
                                            // line 113
                                            yield "                                                                        ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_key'], $context['caisse'], $context['_parent']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 114
                                        yield "                                                                    ";
                                    }
                                    // line 115
                                    yield "                                                                ";
                                }
                                // line 116
                                yield "                                                            ";
                            }
                            // line 117
                            yield "                                                        ";
                        }
                        // line 118
                        yield "                                                    ";
                    }
                    // line 119
                    yield "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['bon'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 120
                yield "                                            ";
            }
            // line 121
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        yield "                                        </tbody>
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
        return "content/dnpaiesfournisseurs.html.twig";
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
        return array (  352 => 122,  346 => 121,  343 => 120,  337 => 119,  334 => 118,  331 => 117,  328 => 116,  325 => 115,  322 => 114,  316 => 113,  313 => 112,  308 => 109,  304 => 108,  299 => 107,  290 => 103,  284 => 100,  278 => 98,  275 => 97,  272 => 96,  270 => 95,  266 => 94,  262 => 92,  258 => 91,  255 => 90,  252 => 89,  246 => 88,  241 => 86,  236 => 84,  229 => 80,  224 => 78,  217 => 73,  212 => 72,  208 => 71,  202 => 70,  198 => 69,  195 => 68,  192 => 67,  189 => 66,  184 => 65,  181 => 64,  178 => 63,  175 => 62,  172 => 61,  169 => 60,  164 => 59,  161 => 58,  157 => 57,  104 => 6,  91 => 5,  77 => 3,  64 => 2,  41 => 1,);
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
                        <h4 class=\"bolo700 col-deep-orange\">PAIES FOURNISSEURS NON VALIDÉES</h4>
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
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Paies
                                    fournisseurs non validées
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseOne_1p\" class=\"panel-collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingOne_1\">
                            <div class=\"panel-body \" style=\"overflow: scroll; background-color: #dbdfef\">
                                <div class=\"table-responsive shadow bg-white\"
                                     style=\"padding: 10px 10px 50px 10px;color:#555; overflow: scroll\">
                                    <table class=\"table-bordered display nowrape\" style=\"width: 100%\"
                                           id=\"dCAISSEP3\">
                                        <thead>
                                        <tr class=\"text-center\">
                                            <th>FOURNISSEURS</th>
                                            <th class=\"mw30\"></th>
                                            <th class=\"mw30\"></th>
                                            <th>DATE</th>
                                            <th>BON DE CAISSE</th>
                                            <th>MONTANT</th>
                                            <th>BONS</th>
                                            <th>CHANTIERS</th>
                                            <th>CREÉ PAR</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for client in clients %}
                                            {% if client.corbeille is null and client.type is null %}
                                                {% for bon in client.bons %}
                                                    {% if bon.chantier.corbeille  is null %}
                                                        {% if bon.chantier.etat == 'encours' or bon.chantier.etat == 'etude' %}
                                                            {% if bon.corbeille is null %}
                                                                {% if bon.corbeille is null  %}
                                                                    {% if bon.type == \"oui\" or bon.type == \"non\" %}
                                                                        {% for caisse in bon.caisses %}
                                                                            {% if caisse.etat == 'save' %}
                                                                                {% if caisse.corbeille is null %}
                                                                                    <tr>
                                                                                        <td class=\"bolo700\">{{ bon.fournisseur.fournisseur|upper }}
                                                                                            - {% if caisse.bon is not null %}BON N° {{ bon.numbon }}
                                                                                                <span class=\"col-black\">[ BON TTC: {{ bon.totalttc|number_format(2,',',' ') }} ]</span>
                                                                                                <span class=\"col-pink\">[ SOLDE: {{ bon.reste|number_format(2,',',' ') }} ]</span>
                                                                                            {% endif %} </td>
                                                                                        <td class=\"text-center\">
                                                                                            <input type=\"checkbox\"
                                                                                                   data-toggle=\"toggle\"
                                                                                                   class=\"CSSE2\"
                                                                                                   value=\"{{ caisse.id }}\"></td>
                                                                                        <td class=\"text-center\"><a href=\"#\"
                                                                                                                   onclick=\"shasha({{ caisse.id }},'imprimcaisse');\"><i
                                                                                                        class=\"fa fa-eye col-green\"
                                                                                                        aria-hidden=\"true\"></i></a>
                                                                                        </td>
                                                                                        <td>{{ caisse.date|date('Y.m.d') }}</td>
                                                                                        <td>
                                                                                            <a href=\"{{ path('editcaisse',{'idcaisse':caisse.id, 'idchantier':caisse.chantier.id}) }}\"><span
                                                                                                        class=\"badge badge-pill bg-blue-grey text-white\"
                                                                                                        title=\"Dévalidé par {% if caisse.vabyuser is not null %}{{ caisse.vabyuser.prenoms|upper }}{% endif %}\">V</span>
                                                                                                {{ caisse.numcaisse }}{% if caisse.moyen is not null %}
                                                                                                    <span class=\"col-blue-grey\">
                                                                                                    ({{ caisse.moyen }})</span>{% endif %}
                                                                                            </a>
                                                                                        </td>
                                                                                        <td class=\"text-right\">{{ caisse.montant|number_format(2,',',' ') }}</td>
                                                                                        <td>{% if bon.etat != 'valide' %}
                                                                                                <span class=\"badge badge-pill badge-blue-grey\">V</span> {% else %}
                                                                                                <span class=\"badge badge-pill badge-primary\">V</span>{% endif %}
                                                                                            <a href=\"{{ path('editbon',{'id':bon.id ,'idchantier':bon.chantier.id}) }}\"
                                                                                               style=\"color:dodgerblue\">BON
                                                                                                N° {{ bon.numbon }}</a>
                                                                                        </td>
                                                                                        <td class=\"col-deep-orange\">
                                                                                            {{ caisse.client.nomclient|upper }} | {{ caisse.chantier.nomchantier|upper }}
                                                                                        </td>

                                                                                        <td class=\"text-left col-blue bolo600\"><i
                                                                                                    class=\"fa fa-user col-blue\"></i>&nbsp; {% if caisse.dobyuser is not null %}{{ caisse.dobyuser.nom|upper }}
                                                                                                &nbsp;{{ caisse.dobyuser.prenoms|upper }}  {% endif %}
                                                                                        </td>
                                                                                    </tr>
                                                                                {% endif %}
                                                                            {% endif %}
                                                                        {% endfor %}
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
", "content/dnpaiesfournisseurs.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\dnpaiesfournisseurs.html.twig");
    }
}
