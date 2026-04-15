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

/* content/dndecomptes.html.twig */
class __TwigTemplate_1c6c1d49e7eedecdddea196dda2908f9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/dndecomptes.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/dndecomptes.html.twig"));

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
    <input type=\"text\" class=\"hide\" id=\"page\" value=\"dndecomptes\"/>

    <section class=\"content\" style=\"margin-top: 50px !important;\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row clearfix m-t-50\">
                    <div class=\"col-sm-12 \">
                        <h4 class=\"bolo700 col-deep-orange\">DÉCOMPTES NON VALIDÉS</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"content\" id=\"setchantier\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"panel-group\" id=\"accordion_1\" role=\"tablist\" aria-multiselectable=\"true\">


                    ";
        // line 27
        $context["decnv"] = 0;
        // line 28
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 29
            yield "                        ";
            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 29)) && (null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 29)))) {
                // line 30
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 30));
                foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                    // line 31
                    yield "                                ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 31))) {
                        // line 32
                        yield "                                    ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 32) == "encours") || (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 32) == "etude"))) {
                            // line 33
                            yield "                                        ";
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "decomptes", [], "any", false, false, false, 33));
                            foreach ($context['_seq'] as $context["_key"] => $context["decompte"]) {
                                // line 34
                                yield "                                            ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "etat", [], "any", false, false, false, 34) == "save")) {
                                    // line 35
                                    yield "                                                ";
                                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "corbeille", [], "any", false, false, false, 35))) {
                                        // line 36
                                        yield "                                                    ";
                                        $context["decnv"] = ((isset($context["decnv"]) || array_key_exists("decnv", $context) ? $context["decnv"] : (function () { throw new RuntimeError('Variable "decnv" does not exist.', 36, $this->source); })()) + 1);
                                        // line 37
                                        yield "                                                ";
                                    }
                                    // line 38
                                    yield "                                            ";
                                }
                                // line 39
                                yield "                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['decompte'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 40
                            yield "                                    ";
                        }
                        // line 41
                        yield "                                ";
                    }
                    // line 42
                    yield "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                yield "                        ";
            }
            // line 44
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "                    <div class=\"panel panel-pri\">
                        <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingDeco\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseDeco\" aria-expanded=\"false\"
                                   aria-controls=\"collapseDeco\" style=\"font-size: 16px!important\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>
                                    Décomptes non validés<span
                                            class=\"badge bg-pink\"
                                            style=\"float: right !important;\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["decnv"]) || array_key_exists("decnv", $context) ? $context["decnv"] : (function () { throw new RuntimeError('Variable "decnv" does not exist.', 54, $this->source); })()), "html", null, true);
        yield "</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseDeco\" class=\"panel-collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingDeco\">
                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"table-responsive\">
                                    <table class=\"table-striped table-bordered display nowrap\" style=\"width: 100%\"
                                           id=\"dataDECOMPTE4\">
                                        <thead>
                                        <tr class=\"text-center bolderr\">
                                            <th class=\"mw30\"></th>
                                            <th class=\"mw30\"></th>
                                            <th>DATE</th>
                                            <th>N° DÉCOMPTE</th>
                                            <th>N° DEVIS</th>
                                            <th>N° FACTURE</th>
                                            <th>MONTANT TTC</th>
                                            <th>AVANCEMENT</th>
                                            <th>VALEUR TTC</th>
                                            <th>ETAT</th>
                                            <th>CREÉ PAR</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 80, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 81
            yield "                                            ";
            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 81)) && (null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 81)))) {
                // line 82
                yield "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 82));
                foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                    // line 83
                    yield "                                                    ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 83))) {
                        // line 84
                        yield "                                                        ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 84) == "encours") || (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 84) == "etude"))) {
                            // line 85
                            yield "                                                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "decomptes", [], "any", false, false, false, 85));
                            foreach ($context['_seq'] as $context["_key"] => $context["decompte"]) {
                                // line 86
                                yield "                                                                ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "etat", [], "any", false, false, false, 86) == "save")) {
                                    // line 87
                                    yield "                                                                    ";
                                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "corbeille", [], "any", false, false, false, 87))) {
                                        // line 88
                                        yield "                                                                        <tr>
                                                                            <td class=\"text-center\">
                                                                                <input type=\"checkbox\"
                                                                                       data-toggle=\"toggle\"
                                                                                       class=\"DECO4\"
                                                                                       value=\"";
                                        // line 93
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "id", [], "any", false, false, false, 93), "html", null, true);
                                        yield "\"></td>
                                                                            <td class=\"text-center\">
                                                                                <a href=\"#\"
                                                                                   onclick=\"shasha(";
                                        // line 96
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "id", [], "any", false, false, false, 96), "html", null, true);
                                        yield ",'imprimdecompte');\">
                                                                                    <i class=\"fa fa-eye col-green\"
                                                                                       aria-hidden=\"true\"></i>
                                                                                </a>
                                                                            </td>
                                                                            <td>";
                                        // line 101
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "date", [], "any", false, false, false, 101), "y.m.d H:m"), "html", null, true);
                                        yield "</td>
                                                                            <td>
                                                                                <a href=\"";
                                        // line 103
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdecompte", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "id", [], "any", false, false, false, 103), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "chantier", [], "any", false, false, false, 103), "id", [], "any", false, false, false, 103)]), "html", null, true);
                                        yield "\"
                                                                                   class=\"bolo600\"
                                                                                   style=\"color:dodgerblue\"><span
                                                                                            class=\"badge badge-pill badge-blue-grey\">V</span>&nbsp;DÉCOMPTE&nbsp;N°";
                                        // line 106
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "numdecompte", [], "any", false, false, false, 106), "html", null, true);
                                        yield "
                                                                                </a>
                                                                            </td>
                                                                            <td>
                                                                                <a href=\"";
                                        // line 110
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "devis", [], "any", false, false, false, 110), "id", [], "any", false, false, false, 110), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "chantier", [], "any", false, false, false, 110), "id", [], "any", false, false, false, 110)]), "html", null, true);
                                        yield "\"
                                                                                   class=\"bolo600\"
                                                                                   style=\"color:dodgerblue\">
                                                                                    ";
                                        // line 113
                                        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "devis", [], "any", false, false, false, 113), "etat", [], "any", false, false, false, 113) == "valide")) {
                                            // line 114
                                            yield "                                                                                        <span class=\"badge badge-pill badge-primary\">V</span>
                                                                                    ";
                                        } else {
                                            // line 116
                                            yield "                                                                                        <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                                    ";
                                        }
                                        // line 118
                                        yield "                                                                                    DEVIS&nbsp;N°&nbsp;";
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "devis", [], "any", false, false, false, 118), "iddevis", [], "any", false, false, false, 118), "html", null, true);
                                        yield "
                                                                                </a>
                                                                            </td>
                                                                            <td>
                                                                                ";
                                        // line 122
                                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "facture", [], "any", false, false, false, 122)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                            // line 123
                                            yield "                                                                                    <a href=\"";
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editfacture", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "facture", [], "any", false, false, false, 123), "id", [], "any", false, false, false, 123), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "chantier", [], "any", false, false, false, 123), "id", [], "any", false, false, false, 123)]), "html", null, true);
                                            yield "\"
                                                                                       class=\"bolo600\"
                                                                                       class=\"col-pink\">
                                                                                        ";
                                            // line 126
                                            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "facture", [], "any", false, false, false, 126), "etat", [], "any", false, false, false, 126) == "valide")) {
                                                // line 127
                                                yield "                                                                                            <span class=\"badge badge-pill badge-primary\">V</span>
                                                                                        ";
                                            } else {
                                                // line 129
                                                yield "                                                                                            <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                                        ";
                                            }
                                            // line 131
                                            yield "                                                                                        FACTURE&nbsp;N°&nbsp;";
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "facture", [], "any", false, false, false, 131), "numfacture", [], "any", false, false, false, 131), "html", null, true);
                                            yield "
                                                                                    </a>
                                                                                ";
                                        }
                                        // line 134
                                        yield "                                                                            </td>
                                                                            ";
                                        // line 135
                                        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "devis", [], "any", false, false, false, 135), "ptva", [], "any", false, false, false, 135) == "non")) {
                                            // line 136
                                            yield "                                                                                <td class=\"text-right bolo600\">";
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "totalht", [], "any", false, false, false, 136), 2, ",", " "), "html", null, true);
                                            yield "</td>
                                                                            ";
                                        } else {
                                            // line 138
                                            yield "                                                                                <td class=\"text-right bolo600\">";
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "totalht", [], "any", false, false, false, 138) + ((CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "totalht", [], "any", false, false, false, 138) * CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "devis", [], "any", false, false, false, 138), "tva", [], "any", false, false, false, 138)) / 100)), 2, ",", " "), "html", null, true);
                                            yield "</td>
                                                                            ";
                                        }
                                        // line 140
                                        yield "
                                                                            <td class=\"text-center col-pink bolo600\">";
                                        // line 141
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "avancement", [], "any", false, false, false, 141), 2, ",", " "), "html", null, true);
                                        yield "
                                                                                %
                                                                            </td>

                                                                            ";
                                        // line 145
                                        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "devis", [], "any", false, false, false, 145), "ptva", [], "any", false, false, false, 145) == "non")) {
                                            // line 146
                                            yield "                                                                                <td class=\"text-right bolo600\">";
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "apayer", [], "any", false, false, false, 146), 2, ",", " "), "html", null, true);
                                            yield "</td>
                                                                            ";
                                        } else {
                                            // line 148
                                            yield "                                                                                <td class=\"text-right bolo600\">";
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "apayer", [], "any", false, false, false, 148) + ((CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "apayer", [], "any", false, false, false, 148) * CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "devis", [], "any", false, false, false, 148), "tva", [], "any", false, false, false, 148)) / 100)), 2, ",", " "), "html", null, true);
                                            yield "</td>
                                                                            ";
                                        }
                                        // line 150
                                        yield "
                                                                            <td>
                                                                                <a href=\"";
                                        // line 152
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "chantier", [], "any", false, false, false, 152), "id", [], "any", false, false, false, 152)]), "html", null, true);
                                        yield "\">";
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "client", [], "any", false, false, false, 152), "nomclient", [], "any", false, false, false, 152), "html", null, true);
                                        yield "
                                                                                    |
                                                                                    ";
                                        // line 154
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 154), "html", null, true);
                                        yield "</a></td>
                                                                            <td class=\"text-left col-blue bolo600\">
                                                                                <i class=\"fa fa-user col-blue bolo600\"></i>&nbsp;
                                                                                ";
                                        // line 157
                                        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "dobyuser", [], "any", false, false, false, 157))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                            // line 158
                                            yield "                                                                                    ";
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "dobyuser", [], "any", false, false, false, 158), "nom", [], "any", false, false, false, 158)), "html", null, true);
                                            yield "&nbsp;";
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "dobyuser", [], "any", false, false, false, 158), "prenoms", [], "any", false, false, false, 158)), "html", null, true);
                                            yield "
                                                                                ";
                                        }
                                        // line 160
                                        yield "                                                                            </td>
                                                                        </tr>
                                                                    ";
                                    }
                                    // line 163
                                    yield "                                                                ";
                                }
                                // line 164
                                yield "                                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['decompte'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 165
                            yield "                                                        ";
                        }
                        // line 166
                        yield "                                                    ";
                    }
                    // line 167
                    yield "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 168
                yield "                                            ";
            }
            // line 169
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        yield "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 177
        yield "
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
        return "content/dndecomptes.html.twig";
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
        return array (  467 => 177,  459 => 170,  453 => 169,  450 => 168,  444 => 167,  441 => 166,  438 => 165,  432 => 164,  429 => 163,  424 => 160,  416 => 158,  414 => 157,  408 => 154,  401 => 152,  397 => 150,  391 => 148,  385 => 146,  383 => 145,  376 => 141,  373 => 140,  367 => 138,  361 => 136,  359 => 135,  356 => 134,  349 => 131,  345 => 129,  341 => 127,  339 => 126,  332 => 123,  330 => 122,  322 => 118,  318 => 116,  314 => 114,  312 => 113,  306 => 110,  299 => 106,  293 => 103,  288 => 101,  280 => 96,  274 => 93,  267 => 88,  264 => 87,  261 => 86,  256 => 85,  253 => 84,  250 => 83,  245 => 82,  242 => 81,  238 => 80,  209 => 54,  198 => 45,  192 => 44,  189 => 43,  183 => 42,  180 => 41,  177 => 40,  171 => 39,  168 => 38,  165 => 37,  162 => 36,  159 => 35,  156 => 34,  151 => 33,  148 => 32,  145 => 31,  140 => 30,  137 => 29,  132 => 28,  130 => 27,  107 => 7,  104 => 6,  91 => 5,  77 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    {{ title }}
{% endblock %}
{% block body %}

    <input type=\"text\" class=\"hide\" id=\"idchan\" value=\"{{ chantier.id }}\"/>
    <input type=\"text\" class=\"hide\" id=\"page\" value=\"dndecomptes\"/>

    <section class=\"content\" style=\"margin-top: 50px !important;\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row clearfix m-t-50\">
                    <div class=\"col-sm-12 \">
                        <h4 class=\"bolo700 col-deep-orange\">DÉCOMPTES NON VALIDÉS</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"content\" id=\"setchantier\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"panel-group\" id=\"accordion_1\" role=\"tablist\" aria-multiselectable=\"true\">


                    {% set decnv = 0 %}
                    {% for client in clients %}
                        {% if client.type is null and  client.corbeille is null %}
                            {% for chantier in client.chantiers %}
                                {% if (chantier.corbeille is null) %}
                                    {% if (chantier.etat == \"encours\" or chantier.etat == \"etude\" ) %}
                                        {% for decompte in chantier.decomptes %}
                                            {% if decompte.etat == 'save' %}
                                                {% if decompte.corbeille is null %}
                                                    {% set  decnv = decnv + 1 %}
                                                {% endif %}
                                            {% endif %}
                                        {% endfor %}
                                    {% endif %}
                                {% endif %}
                            {% endfor %}
                        {% endif %}
                    {% endfor %}
                    <div class=\"panel panel-pri\">
                        <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingDeco\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseDeco\" aria-expanded=\"false\"
                                   aria-controls=\"collapseDeco\" style=\"font-size: 16px!important\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>
                                    Décomptes non validés<span
                                            class=\"badge bg-pink\"
                                            style=\"float: right !important;\">{{ decnv }}</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseDeco\" class=\"panel-collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingDeco\">
                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"table-responsive\">
                                    <table class=\"table-striped table-bordered display nowrap\" style=\"width: 100%\"
                                           id=\"dataDECOMPTE4\">
                                        <thead>
                                        <tr class=\"text-center bolderr\">
                                            <th class=\"mw30\"></th>
                                            <th class=\"mw30\"></th>
                                            <th>DATE</th>
                                            <th>N° DÉCOMPTE</th>
                                            <th>N° DEVIS</th>
                                            <th>N° FACTURE</th>
                                            <th>MONTANT TTC</th>
                                            <th>AVANCEMENT</th>
                                            <th>VALEUR TTC</th>
                                            <th>ETAT</th>
                                            <th>CREÉ PAR</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for client in clients %}
                                            {% if client.type is null and  client.corbeille is null %}
                                                {% for chantier in client.chantiers %}
                                                    {% if (chantier.corbeille is null) %}
                                                        {% if (chantier.etat == \"encours\" or chantier.etat == \"etude\" ) %}
                                                            {% for decompte in chantier.decomptes %}
                                                                {% if decompte.etat == 'save' %}
                                                                    {% if decompte.corbeille is null %}
                                                                        <tr>
                                                                            <td class=\"text-center\">
                                                                                <input type=\"checkbox\"
                                                                                       data-toggle=\"toggle\"
                                                                                       class=\"DECO4\"
                                                                                       value=\"{{ decompte.id }}\"></td>
                                                                            <td class=\"text-center\">
                                                                                <a href=\"#\"
                                                                                   onclick=\"shasha({{ decompte.id }},'imprimdecompte');\">
                                                                                    <i class=\"fa fa-eye col-green\"
                                                                                       aria-hidden=\"true\"></i>
                                                                                </a>
                                                                            </td>
                                                                            <td>{{ decompte.date|date('y.m.d H:m') }}</td>
                                                                            <td>
                                                                                <a href=\"{{ path('editdecompte',{'id':decompte.id, 'idchantier':decompte.chantier.id}) }}\"
                                                                                   class=\"bolo600\"
                                                                                   style=\"color:dodgerblue\"><span
                                                                                            class=\"badge badge-pill badge-blue-grey\">V</span>&nbsp;DÉCOMPTE&nbsp;N°{{ decompte.numdecompte }}
                                                                                </a>
                                                                            </td>
                                                                            <td>
                                                                                <a href=\"{{ path('editdevis',{'id':decompte.devis.id, 'idchantier':decompte.chantier.id}) }}\"
                                                                                   class=\"bolo600\"
                                                                                   style=\"color:dodgerblue\">
                                                                                    {% if decompte.devis.etat == 'valide' %}
                                                                                        <span class=\"badge badge-pill badge-primary\">V</span>
                                                                                    {% else %}
                                                                                        <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                                    {% endif %}
                                                                                    DEVIS&nbsp;N°&nbsp;{{ decompte.devis.iddevis }}
                                                                                </a>
                                                                            </td>
                                                                            <td>
                                                                                {% if decompte.facture %}
                                                                                    <a href=\"{{ path('editfacture', {'id': decompte.facture.id , 'idchantier':decompte.chantier.id}) }}\"
                                                                                       class=\"bolo600\"
                                                                                       class=\"col-pink\">
                                                                                        {% if decompte.facture.etat == 'valide' %}
                                                                                            <span class=\"badge badge-pill badge-primary\">V</span>
                                                                                        {% else %}
                                                                                            <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                                        {% endif %}
                                                                                        FACTURE&nbsp;N°&nbsp;{{ decompte.facture.numfacture }}
                                                                                    </a>
                                                                                {% endif %}
                                                                            </td>
                                                                            {% if decompte.devis.ptva == 'non' %}
                                                                                <td class=\"text-right bolo600\">{{ decompte.totalht|number_format(2,',',' ') }}</td>
                                                                            {% else %}
                                                                                <td class=\"text-right bolo600\">{{ (decompte.totalht + ((decompte.totalht * decompte.devis.tva)/100) )|number_format(2,',',' ') }}</td>
                                                                            {% endif %}

                                                                            <td class=\"text-center col-pink bolo600\">{{ decompte.avancement|number_format(2,',',' ') }}
                                                                                %
                                                                            </td>

                                                                            {% if decompte.devis.ptva == 'non' %}
                                                                                <td class=\"text-right bolo600\">{{ decompte.apayer|number_format(2,',',' ') }}</td>
                                                                            {% else %}
                                                                                <td class=\"text-right bolo600\">{{ (decompte.apayer + ((decompte.apayer * decompte.devis.tva)/100) )|number_format(2,',',' ') }}</td>
                                                                            {% endif %}

                                                                            <td>
                                                                                <a href=\"{{ path('chantier',{'id':decompte.chantier.id}) }}\">{{ chantier.client.nomclient }}
                                                                                    |
                                                                                    {{ chantier.nomchantier }}</a></td>
                                                                            <td class=\"text-left col-blue bolo600\">
                                                                                <i class=\"fa fa-user col-blue bolo600\"></i>&nbsp;
                                                                                {% if decompte.dobyuser is not null %}
                                                                                    {{ decompte.dobyuser.nom|upper }}&nbsp;{{ decompte.dobyuser.prenoms|upper }}
                                                                                {% endif %}
                                                                            </td>
                                                                        </tr>
                                                                    {% endif %}
                                                                {% endif %}
                                                            {% endfor %}
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
                    {# DECOMPTE #}

                </div>
            </div>
        </div>
    </section>

{% endblock %}
", "content/dndecomptes.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\dndecomptes.html.twig");
    }
}
