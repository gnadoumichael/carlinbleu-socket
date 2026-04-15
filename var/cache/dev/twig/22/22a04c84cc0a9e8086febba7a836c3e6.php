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

/* content/dnchargeschantiers.html.twig */
class __TwigTemplate_bffc6748adaac44881405e98c67afa4a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/dnchargeschantiers.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/dnchargeschantiers.html.twig"));

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
    <input type=\"text\" class=\"hide\" id=\"page\" value=\"dnbonsprestataires\"/>

    <section class=\"content\" style=\"margin-top: 50px !important;\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row clearfix m-t-50\">
                    <div class=\"col-sm-12 \">
                        <h4 class=\"bolo700 col-deep-orange\">CHARGES CHANTIERS NON VALIDÉES</h4>
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
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Charges
                                    chantiers non validées
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseOne_1p\" class=\"panel-collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingOne_1\">
                            <div class=\"panel-body \" style=\"overflow: scroll; background-color: #dbdfef\">
                                <div class=\"table-responsive shadow bg-white\"
                                     style=\"padding: 10px 10px 50px 10px; margin-top: 30px; color:#555; overflow: scroll\">
                                    <table class=\"table-bordered display nowrape\" style=\"width: 100%\"
                                           id=\"dataCAISSE4\">
                                        <thead>
                                        <tr class=\"text-center\">
                                            <th class=\"mw30\"></th>
                                            <th class=\"mw30\"></th>
                                            <th>DATE</th>
                                            <th>N° BON</th>
                                            <th>N° DEVIS</th>
                                            <th>MONTANT</th>
                                            <th>RÉFÉRENCE</th>
                                            <th>CREÉ PAR</th>
                                            <th>ETAT</th>
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
                yield "                                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "caisses", [], "any", false, false, false, 59));
                foreach ($context['_seq'] as $context["_key"] => $context["caisse"]) {
                    // line 60
                    yield "                                                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "etat", [], "any", false, false, false, 60) == "save")) {
                        // line 61
                        yield "                                                            ";
                        if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "corbeille", [], "any", false, false, false, 61)) && (CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "type", [], "any", false, false, false, 61) == 3))) {
                            // line 62
                            yield "                                                                <tr>
                                                                    <td class=\"text-center\">
                                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                               class=\"CAYSS4\"
                                                                               value=\"";
                            // line 66
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "id", [], "any", false, false, false, 66), "html", null, true);
                            yield "\"></td>
                                                                    <td class=\"text-center\"><a href=\"#\"
                                                                                               onclick=\"shasha(";
                            // line 68
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "id", [], "any", false, false, false, 68), "html", null, true);
                            yield ",'imprimcaisse');\"><i
                                                                                    class=\"fa fa-eye col-green\"
                                                                                    aria-hidden=\"true\"></i></a></td>
                                                                    <td>";
                            // line 71
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "date", [], "any", false, false, false, 71), "Y-m-d"), "html", null, true);
                            yield "</td>
                                                                    <td>
                                                                        <a href=\"";
                            // line 73
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editcaisse", ["idcaisse" => CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "id", [], "any", false, false, false, 73), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "chantier", [], "any", false, false, false, 73), "id", [], "any", false, false, false, 73)]), "html", null, true);
                            yield "\"><span
                                                                                    class=\"badge badge-pill bg-blue-grey text-white\"
                                                                                    title=\"Dévalidé par ";
                            // line 75
                            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "vabyuser", [], "any", false, false, false, 75))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "vabyuser", [], "any", false, false, false, 75), "prenoms", [], "any", false, false, false, 75)), "html", null, true);
                            }
                            yield "\">V</span>
                                                                            ";
                            // line 76
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "numcaisse", [], "any", false, false, false, 76), "html", null, true);
                            yield " ";
                            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "moyen", [], "any", false, false, false, 76))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 77
                                yield "                                                                                <span class=\"col-pink\">
                                                                                (";
                                // line 78
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "moyen", [], "any", false, false, false, 78), "html", null, true);
                                yield ")</span>";
                            }
                            // line 79
                            yield "                                                                        </a>
                                                                    </td>
                                                                    <td> ";
                            // line 81
                            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "devis", [], "any", false, false, false, 81))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                yield "<a
                                                                                href=\"";
                                // line 82
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "devis", [], "any", false, false, false, 82), "id", [], "any", false, false, false, 82), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "devis", [], "any", false, false, false, 82), "chantier", [], "any", false, false, false, 82), "id", [], "any", false, false, false, 82)]), "html", null, true);
                                yield "\">DEVIS
                                                                            N°";
                                // line 83
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "devis", [], "any", false, false, false, 83), "iddevis", [], "any", false, false, false, 83), "html", null, true);
                                yield " ";
                            }
                            yield "</a>
                                                                    </td>

                                                                    <td class=\"text-right\">";
                            // line 86
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "montant", [], "any", false, false, false, 86), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                    <td class=\"col-deep-orange\"
                                                                        title=\"";
                            // line 88
                            yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "caissereference", [], "any", false, false, false, 88));
                            yield "\">
                                                                        ";
                            // line 89
                            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "caissereference", [], "any", false, false, false, 89))) > 30)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "caissereference", [], "any", false, false, false, 89)), 0, 30)) . "…"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source,                             // line 90
$context["caisse"], "caissereference", [], "any", false, false, false, 90))), "html", null, true)));
                            yield "
                                                                    </td>

                                                                    <td class=\"text-left col-blue bolo600\"><i
                                                                                class=\"fa fa-user col-blue\"></i>&nbsp; ";
                            // line 94
                            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "dobyuser", [], "any", false, false, false, 94))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "dobyuser", [], "any", false, false, false, 94), "nom", [], "any", false, false, false, 94)), "html", null, true);
                                yield "
                                                                            &nbsp;";
                                // line 95
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "dobyuser", [], "any", false, false, false, 95), "prenoms", [], "any", false, false, false, 95)), "html", null, true);
                                yield "  ";
                            }
                            // line 96
                            yield "                                                                    </td>
                                                                    <td>";
                            // line 97
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "client", [], "any", false, false, false, 97), "nomclient", [], "any", false, false, false, 97)), "html", null, true);
                            yield " | ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "chantier", [], "any", false, false, false, 97), "nomchantier", [], "any", false, false, false, 97)), "html", null, true);
                            yield "</td>
                                                                </tr>
                                                            ";
                        }
                        // line 100
                        yield "                                                        ";
                    }
                    // line 101
                    yield "                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['caisse'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 102
                yield "                                            ";
            }
            // line 103
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        yield "                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class=\"text-right bg-blue bolo700 col-white\"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
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
        return "content/dnchargeschantiers.html.twig";
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
        return array (  294 => 104,  288 => 103,  285 => 102,  279 => 101,  276 => 100,  268 => 97,  265 => 96,  261 => 95,  256 => 94,  249 => 90,  248 => 89,  244 => 88,  239 => 86,  231 => 83,  227 => 82,  223 => 81,  219 => 79,  215 => 78,  212 => 77,  208 => 76,  202 => 75,  197 => 73,  192 => 71,  186 => 68,  181 => 66,  175 => 62,  172 => 61,  169 => 60,  164 => 59,  161 => 58,  157 => 57,  104 => 6,  91 => 5,  77 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    {{ title }}
{% endblock %}
{% block body %}

    <input type=\"text\" class=\"hide\" id=\"page\" value=\"dnbonsprestataires\"/>

    <section class=\"content\" style=\"margin-top: 50px !important;\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row clearfix m-t-50\">
                    <div class=\"col-sm-12 \">
                        <h4 class=\"bolo700 col-deep-orange\">CHARGES CHANTIERS NON VALIDÉES</h4>
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
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Charges
                                    chantiers non validées
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseOne_1p\" class=\"panel-collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingOne_1\">
                            <div class=\"panel-body \" style=\"overflow: scroll; background-color: #dbdfef\">
                                <div class=\"table-responsive shadow bg-white\"
                                     style=\"padding: 10px 10px 50px 10px; margin-top: 30px; color:#555; overflow: scroll\">
                                    <table class=\"table-bordered display nowrape\" style=\"width: 100%\"
                                           id=\"dataCAISSE4\">
                                        <thead>
                                        <tr class=\"text-center\">
                                            <th class=\"mw30\"></th>
                                            <th class=\"mw30\"></th>
                                            <th>DATE</th>
                                            <th>N° BON</th>
                                            <th>N° DEVIS</th>
                                            <th>MONTANT</th>
                                            <th>RÉFÉRENCE</th>
                                            <th>CREÉ PAR</th>
                                            <th>ETAT</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for client in clients %}
                                            {% if client.corbeille is null and client.type is null %}
                                                    {% for caisse in client.caisses %}
                                                        {% if caisse.etat == 'save' %}
                                                            {% if caisse.corbeille is null and caisse.type == 3 %}
                                                                <tr>
                                                                    <td class=\"text-center\">
                                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                               class=\"CAYSS4\"
                                                                               value=\"{{ caisse.id }}\"></td>
                                                                    <td class=\"text-center\"><a href=\"#\"
                                                                                               onclick=\"shasha({{ caisse.id }},'imprimcaisse');\"><i
                                                                                    class=\"fa fa-eye col-green\"
                                                                                    aria-hidden=\"true\"></i></a></td>
                                                                    <td>{{ caisse.date|date('Y-m-d') }}</td>
                                                                    <td>
                                                                        <a href=\"{{ path('editcaisse',{'idcaisse':caisse.id, 'idchantier':caisse.chantier.id}) }}\"><span
                                                                                    class=\"badge badge-pill bg-blue-grey text-white\"
                                                                                    title=\"Dévalidé par {% if caisse.vabyuser is not null %}{{ caisse.vabyuser.prenoms|upper }}{% endif %}\">V</span>
                                                                            {{ caisse.numcaisse }} {% if caisse.moyen is not null %}
                                                                                <span class=\"col-pink\">
                                                                                ({{ caisse.moyen }})</span>{% endif %}
                                                                        </a>
                                                                    </td>
                                                                    <td> {% if caisse.devis is not null %}<a
                                                                                href=\"{{ path('editdevis',{'id':caisse.devis.id, 'idchantier':caisse.devis.chantier.id}) }}\">DEVIS
                                                                            N°{{ caisse.devis.iddevis }} {% endif %}</a>
                                                                    </td>

                                                                    <td class=\"text-right\">{{ caisse.montant|number_format(2,',',' ') }}</td>
                                                                    <td class=\"col-deep-orange\"
                                                                        title=\"{{ caisse.caissereference|striptags|raw }}\">
                                                                        {{ caisse.caissereference|striptags|length > 30 ? caisse.caissereference|striptags|slice(0, 30)|capitalize ~ '…' :
                                                                        caisse.caissereference|striptags|capitalize }}
                                                                    </td>

                                                                    <td class=\"text-left col-blue bolo600\"><i
                                                                                class=\"fa fa-user col-blue\"></i>&nbsp; {% if caisse.dobyuser is not null %}{{ caisse.dobyuser.nom|upper }}
                                                                            &nbsp;{{ caisse.dobyuser.prenoms|upper }}  {% endif %}
                                                                    </td>
                                                                    <td>{{ caisse.client.nomclient|upper }} | {{ caisse.chantier.nomchantier|upper }}</td>
                                                                </tr>
                                                            {% endif %}
                                                        {% endif %}
                                                    {% endfor %}
                                            {% endif %}
                                        {% endfor %}
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class=\"text-right bg-blue bolo700 col-white\"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
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
", "content/dnchargeschantiers.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\dnchargeschantiers.html.twig");
    }
}
