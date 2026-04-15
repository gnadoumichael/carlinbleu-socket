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

/* content/dnfactures.html.twig */
class __TwigTemplate_8246d97a12e6a14e837035bf8acf1881 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/dnfactures.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/dnfactures.html.twig"));

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
    <input type=\"text\" class=\"hide\" id=\"page\" value=\"dnfactures\"/>

    <section class=\"content\" style=\"margin-top: 50px !important;\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row clearfix m-t-50\">
                    <div class=\"col-sm-12 \">
                        <h4 class=\"bolo700 col-deep-orange\">FACTURES NON VALIDÉES</h4>
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
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Factures
                                    non validées
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseOne_1p\" class=\"panel-collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingOne_1\">

                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"card-body\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table-striped table-bordered display nowrap\"
                                               style=\"width: 100%\" id=\"dataFACTURE4\">
                                            <thead>
                                            <tr class=\"text-center\">
                                                <th class=\"mw30\"></th>
                                                <th class=\"mw30\"></th>
                                                <th>DATE</th>
                                                <th>N° FACTURE</th>
                                                <th>N° DEVIS</th>
                                                <th>N° DÉCOMPTE</th>
                                                <th>TOTAL HT</th>
                                                <th>TOTAL TTC</th>
                                                <th>RÉFÉRENCE</th>
                                                <th>ETAT</th>
                                                <th>CREÉ PAR</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 62
            yield "                                                ";
            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 62)) && (null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 62)))) {
                // line 63
                yield "                                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 63));
                foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                    // line 64
                    yield "                                                        ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 64) == "encours") || (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 64) == "etude"))) {
                        // line 65
                        yield "                                                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "factures", [], "any", false, false, false, 65));
                        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
                            // line 66
                            yield "                                                                ";
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "etat", [], "any", false, false, false, 66) != "valide") && (null === CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "corbeille", [], "any", false, false, false, 66)))) {
                                // line 67
                                yield "                                                                    ";
                                if ((null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "client", [], "any", false, false, false, 67), "corbeille", [], "any", false, false, false, 67))) {
                                    // line 68
                                    yield "                                                                        <tr>
                                                                            <td class=\"text-center\">
                                                                                <input type=\"checkbox\"
                                                                                       data-toggle=\"toggle\"
                                                                                       class=\"FACTURE4\"
                                                                                       value=\"";
                                    // line 73
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "id", [], "any", false, false, false, 73), "html", null, true);
                                    yield "\">
                                                                            </td>

                                                                            <td class=\"text-center\">
                                                                                <a href=\"#\"
                                                                                   onclick=\"shasha(";
                                    // line 78
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "id", [], "any", false, false, false, 78), "html", null, true);
                                    yield ",'imprimfacture');\">
                                                                                    <i class=\"fa fa-eye col-green\"
                                                                                       aria-hidden=\"true\"></i>
                                                                                </a>
                                                                            </td>
                                                                            <td>";
                                    // line 83
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "date", [], "any", false, false, false, 83), "y.m.d H:m"), "html", null, true);
                                    yield "</td>
                                                                            <td>
                                                                                ";
                                    // line 85
                                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "type", [], "any", false, false, false, 85) == "non")) {
                                        // line 86
                                        yield "                                                                                    <a href=\"";
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editfacture", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "id", [], "any", false, false, false, 86), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 86), "id", [], "any", false, false, false, 86)]), "html", null, true);
                                        yield "\"
                                                                                       class=\"bolo600\">
                                                                                        <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                                        <span class=\"badge badge-pill badge-danger\">FA</span>FACTURE
                                                                                        N°";
                                        // line 90
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "numfacture", [], "any", false, false, false, 90), "html", null, true);
                                        yield "
                                                                                    </a>
                                                                                ";
                                    } else {
                                        // line 93
                                        yield "                                                                                    <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                                    <a href=\"";
                                        // line 94
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editfacture", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "id", [], "any", false, false, false, 94), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 94), "id", [], "any", false, false, false, 94)]), "html", null, true);
                                        yield "\"
                                                                                       class=\"bolo600\">FACTURE
                                                                                        N° ";
                                        // line 96
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "numfacture", [], "any", false, false, false, 96), "html", null, true);
                                        yield "</a>
                                                                                ";
                                    }
                                    // line 98
                                    yield "                                                                            </td>
                                                                            <td>
                                                                                ";
                                    // line 100
                                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "type", [], "any", false, false, false, 100) == "simple")) {
                                        // line 101
                                        yield "                                                                                    <a href=\"";
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "devis", [], "any", false, false, false, 101), "id", [], "any", false, false, false, 101), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 101), "id", [], "any", false, false, false, 101)]), "html", null, true);
                                        yield "\"
                                                                                       class=\"bolo600\">
                                                                                        ";
                                        // line 103
                                        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "devis", [], "any", false, false, false, 103), "etat", [], "any", false, false, false, 103) == "valide")) {
                                            // line 104
                                            yield "                                                                                            <span class=\"badge badge-pill badge-primary\">V</span>
                                                                                        ";
                                        } else {
                                            // line 106
                                            yield "                                                                                            <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                                        ";
                                        }
                                        // line 108
                                        yield "                                                                                        DEVIS
                                                                                        N°";
                                        // line 109
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "devis", [], "any", false, false, false, 109), "iddevis", [], "any", false, false, false, 109), "html", null, true);
                                        yield "
                                                                                    </a>
                                                                                ";
                                    }
                                    // line 112
                                    yield "                                                                                ";
                                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "type", [], "any", false, false, false, 112) == "devis")) {
                                        // line 113
                                        yield "                                                                                    <a href=\"";
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "devis", [], "any", false, false, false, 113), "id", [], "any", false, false, false, 113), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 113), "id", [], "any", false, false, false, 113)]), "html", null, true);
                                        yield "\"
                                                                                       class=\"bolo600\">
                                                                                        ";
                                        // line 115
                                        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "devis", [], "any", false, false, false, 115), "etat", [], "any", false, false, false, 115) == "valide")) {
                                            // line 116
                                            yield "                                                                                            <span class=\"badge badge-pill badge-primary\">V</span>
                                                                                        ";
                                        } else {
                                            // line 118
                                            yield "                                                                                            <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                                        ";
                                        }
                                        // line 120
                                        yield "                                                                                        DEVIS
                                                                                        N°";
                                        // line 121
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "devis", [], "any", false, false, false, 121), "iddevis", [], "any", false, false, false, 121), "html", null, true);
                                        yield "
                                                                                    </a>
                                                                                ";
                                    }
                                    // line 124
                                    yield "                                                                                ";
                                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "type", [], "any", false, false, false, 124) == "acompte")) {
                                        // line 125
                                        yield "                                                                                    <a href=\"";
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "acompte", [], "any", false, false, false, 125), "devis", [], "any", false, false, false, 125), "id", [], "any", false, false, false, 125), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 125), "id", [], "any", false, false, false, 125)]), "html", null, true);
                                        yield "\"
                                                                                       class=\"bolo600\">
                                                                                        ";
                                        // line 127
                                        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "acompte", [], "any", false, false, false, 127), "devis", [], "any", false, false, false, 127), "etat", [], "any", false, false, false, 127) == "valide")) {
                                            // line 128
                                            yield "                                                                                            <span class=\"badge badge-pill badge-primary\">V</span>
                                                                                        ";
                                        } else {
                                            // line 130
                                            yield "                                                                                            <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                                        ";
                                        }
                                        // line 132
                                        yield "                                                                                        DEVIS
                                                                                        N°";
                                        // line 133
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "acompte", [], "any", false, false, false, 133), "devis", [], "any", false, false, false, 133), "iddevis", [], "any", false, false, false, 133), "html", null, true);
                                        yield "
                                                                                    </a>
                                                                                ";
                                    }
                                    // line 136
                                    yield "                                                                                ";
                                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "type", [], "any", false, false, false, 136) == "decompte")) {
                                        // line 137
                                        yield "                                                                                    <a href=\"";
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "decompte", [], "any", false, false, false, 137), "devis", [], "any", false, false, false, 137), "id", [], "any", false, false, false, 137), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 137), "id", [], "any", false, false, false, 137)]), "html", null, true);
                                        yield "\"
                                                                                       class=\"bolo600\">
                                                                                        ";
                                        // line 139
                                        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "decompte", [], "any", false, false, false, 139), "devis", [], "any", false, false, false, 139), "etat", [], "any", false, false, false, 139) == "valide")) {
                                            // line 140
                                            yield "                                                                                            <span class=\"badge badge-pill badge-primary\">V</span>
                                                                                        ";
                                        } else {
                                            // line 142
                                            yield "                                                                                            <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                                        ";
                                        }
                                        // line 144
                                        yield "                                                                                        DEVIS
                                                                                        N°";
                                        // line 145
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "decompte", [], "any", false, false, false, 145), "devis", [], "any", false, false, false, 145), "iddevis", [], "any", false, false, false, 145), "html", null, true);
                                        yield "
                                                                                    </a>
                                                                                ";
                                    }
                                    // line 148
                                    yield "                                                                            </td>
                                                                            <td>
                                                                                ";
                                    // line 150
                                    if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "decompte", [], "any", false, false, false, 150))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                        // line 151
                                        yield "                                                                                    <a href=\"";
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdecompte", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "decompte", [], "any", false, false, false, 151), "id", [], "any", false, false, false, 151), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 151), "id", [], "any", false, false, false, 151)]), "html", null, true);
                                        yield "\"
                                                                                       class=\"bolo600\">
                                                                                        ";
                                        // line 153
                                        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "decompte", [], "any", false, false, false, 153), "etat", [], "any", false, false, false, 153) == "valide")) {
                                            // line 154
                                            yield "                                                                                            <span class=\"badge badge-pill badge-primary\">V</span>
                                                                                        ";
                                        } else {
                                            // line 156
                                            yield "                                                                                            <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                                        ";
                                        }
                                        // line 158
                                        yield "                                                                                        DÉCOMPTE
                                                                                        N° ";
                                        // line 159
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "decompte", [], "any", false, false, false, 159), "numdecompte", [], "any", false, false, false, 159), "html", null, true);
                                        yield "
                                                                                    </a>
                                                                                ";
                                    }
                                    // line 162
                                    yield "                                                                            </td>
                                                                            <td class=\"text-right bolo600\">
                                                                                ";
                                    // line 164
                                    if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "devis", [], "any", false, false, false, 164))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                        // line 165
                                        yield "                                                                                    ";
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "totalht", [], "any", false, false, false, 165), 2, ",", " "), "html", null, true);
                                        yield "
                                                                                ";
                                    }
                                    // line 167
                                    yield "
                                                                                ";
                                    // line 168
                                    if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "decompte", [], "any", false, false, false, 168))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                        // line 169
                                        yield "                                                                                    ";
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "totalht", [], "any", false, false, false, 169), 2, ",", " "), "html", null, true);
                                        yield "
                                                                                ";
                                    }
                                    // line 171
                                    yield "                                                                            </td>
                                                                            <td class=\"text-right bolo600\">
                                                                                ";
                                    // line 173
                                    if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "devis", [], "any", false, false, false, 173))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                        // line 174
                                        yield "                                                                                    ";
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "totalttc", [], "any", false, false, false, 174), 2, ",", " "), "html", null, true);
                                        yield "
                                                                                ";
                                    }
                                    // line 176
                                    yield "                                                                                ";
                                    if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "decompte", [], "any", false, false, false, 176))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                        // line 177
                                        yield "                                                                                    ";
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "totalttc", [], "any", false, false, false, 177), 2, ",", " "), "html", null, true);
                                        yield "
                                                                                ";
                                    }
                                    // line 179
                                    yield "                                                                            </td>
                                                                            <td title=\"";
                                    // line 180
                                    yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "factreference", [], "any", false, false, false, 180));
                                    yield "\"
                                                                                class=\"col-deep-orange\">";
                                    // line 181
                                    yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "factreference", [], "any", false, false, false, 181));
                                    yield "</td>
                                                                            <td>
                                                                                <a href=\"";
                                    // line 183
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 183), "id", [], "any", false, false, false, 183)]), "html", null, true);
                                    yield "\">";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 183), "html", null, true);
                                    yield "
                                                                                    | ";
                                    // line 184
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "client", [], "any", false, false, false, 184), "nomclient", [], "any", false, false, false, 184), "html", null, true);
                                    yield "</a>
                                                                            </td>
                                                                            <td class=\"text-left col-blue bolo600\">
                                                                                <i class=\"fa fa-user col-blue bolo600\"></i>&nbsp;
                                                                                ";
                                    // line 188
                                    if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "dobyuser", [], "any", false, false, false, 188))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                        // line 189
                                        yield "                                                                                    ";
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "dobyuser", [], "any", false, false, false, 189), "nom", [], "any", false, false, false, 189)), "html", null, true);
                                        yield "
                                                                                    &nbsp;";
                                        // line 190
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "dobyuser", [], "any", false, false, false, 190), "prenoms", [], "any", false, false, false, 190)), "html", null, true);
                                        yield "
                                                                                ";
                                    }
                                    // line 192
                                    yield "                                                                            </td>
                                                                        </tr>
                                                                    ";
                                }
                                // line 195
                                yield "                                                                ";
                            }
                            // line 196
                            yield "                                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['facture'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 197
                        yield "                                                        ";
                    }
                    // line 198
                    yield "                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 199
                yield "                                                ";
            }
            // line 200
            yield "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
        yield "                                            </tbody>
                                        </table>
                                    </div>
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
        return "content/dnfactures.html.twig";
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
        return array (  506 => 201,  500 => 200,  497 => 199,  491 => 198,  488 => 197,  482 => 196,  479 => 195,  474 => 192,  469 => 190,  464 => 189,  462 => 188,  455 => 184,  449 => 183,  444 => 181,  440 => 180,  437 => 179,  431 => 177,  428 => 176,  422 => 174,  420 => 173,  416 => 171,  410 => 169,  408 => 168,  405 => 167,  399 => 165,  397 => 164,  393 => 162,  387 => 159,  384 => 158,  380 => 156,  376 => 154,  374 => 153,  368 => 151,  366 => 150,  362 => 148,  356 => 145,  353 => 144,  349 => 142,  345 => 140,  343 => 139,  337 => 137,  334 => 136,  328 => 133,  325 => 132,  321 => 130,  317 => 128,  315 => 127,  309 => 125,  306 => 124,  300 => 121,  297 => 120,  293 => 118,  289 => 116,  287 => 115,  281 => 113,  278 => 112,  272 => 109,  269 => 108,  265 => 106,  261 => 104,  259 => 103,  253 => 101,  251 => 100,  247 => 98,  242 => 96,  237 => 94,  234 => 93,  228 => 90,  220 => 86,  218 => 85,  213 => 83,  205 => 78,  197 => 73,  190 => 68,  187 => 67,  184 => 66,  179 => 65,  176 => 64,  171 => 63,  168 => 62,  164 => 61,  107 => 7,  104 => 6,  91 => 5,  77 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    {{ title }}
{% endblock %}
{% block body %}

    <input type=\"text\" class=\"hide\" id=\"idchan\" value=\"{{ chantier.id }}\"/>
    <input type=\"text\" class=\"hide\" id=\"page\" value=\"dnfactures\"/>

    <section class=\"content\" style=\"margin-top: 50px !important;\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row clearfix m-t-50\">
                    <div class=\"col-sm-12 \">
                        <h4 class=\"bolo700 col-deep-orange\">FACTURES NON VALIDÉES</h4>
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
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Factures
                                    non validées
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseOne_1p\" class=\"panel-collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingOne_1\">

                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"card-body\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table-striped table-bordered display nowrap\"
                                               style=\"width: 100%\" id=\"dataFACTURE4\">
                                            <thead>
                                            <tr class=\"text-center\">
                                                <th class=\"mw30\"></th>
                                                <th class=\"mw30\"></th>
                                                <th>DATE</th>
                                                <th>N° FACTURE</th>
                                                <th>N° DEVIS</th>
                                                <th>N° DÉCOMPTE</th>
                                                <th>TOTAL HT</th>
                                                <th>TOTAL TTC</th>
                                                <th>RÉFÉRENCE</th>
                                                <th>ETAT</th>
                                                <th>CREÉ PAR</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {% for client in clients %}
                                                {% if client.type is null and  client.corbeille is null %}
                                                    {% for chantier in client.chantiers %}
                                                        {% if (chantier.etat == \"encours\" or chantier.etat == \"etude\" ) %}
                                                            {% for facture in chantier.factures %}
                                                                {% if facture.etat != 'valide' and facture.corbeille is null %}
                                                                    {% if (facture.client.corbeille is null) %}
                                                                        <tr>
                                                                            <td class=\"text-center\">
                                                                                <input type=\"checkbox\"
                                                                                       data-toggle=\"toggle\"
                                                                                       class=\"FACTURE4\"
                                                                                       value=\"{{ facture.id }}\">
                                                                            </td>

                                                                            <td class=\"text-center\">
                                                                                <a href=\"#\"
                                                                                   onclick=\"shasha({{ facture.id }},'imprimfacture');\">
                                                                                    <i class=\"fa fa-eye col-green\"
                                                                                       aria-hidden=\"true\"></i>
                                                                                </a>
                                                                            </td>
                                                                            <td>{{ facture.date|date('y.m.d H:m') }}</td>
                                                                            <td>
                                                                                {% if facture.type == \"non\" %}
                                                                                    <a href=\"{{ path('editfacture', {'id': facture.id, 'idchantier':facture.chantier.id}) }}\"
                                                                                       class=\"bolo600\">
                                                                                        <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                                        <span class=\"badge badge-pill badge-danger\">FA</span>FACTURE
                                                                                        N°{{ facture.numfacture }}
                                                                                    </a>
                                                                                {% else %}
                                                                                    <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                                    <a href=\"{{ path('editfacture',{'id':facture.id, 'idchantier':facture.chantier.id}) }}\"
                                                                                       class=\"bolo600\">FACTURE
                                                                                        N° {{ facture.numfacture }}</a>
                                                                                {% endif %}
                                                                            </td>
                                                                            <td>
                                                                                {% if facture.type == \"simple\" %}
                                                                                    <a href=\"{{ path('editdevis', {'id': facture.devis.id, 'idchantier':facture.chantier.id}) }}\"
                                                                                       class=\"bolo600\">
                                                                                        {% if facture.devis.etat == 'valide' %}
                                                                                            <span class=\"badge badge-pill badge-primary\">V</span>
                                                                                        {% else %}
                                                                                            <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                                        {% endif %}
                                                                                        DEVIS
                                                                                        N°{{ facture.devis.iddevis }}
                                                                                    </a>
                                                                                {% endif %}
                                                                                {% if facture.type == \"devis\" %}
                                                                                    <a href=\"{{ path('editdevis', {'id': facture.devis.id, 'idchantier':facture.chantier.id}) }}\"
                                                                                       class=\"bolo600\">
                                                                                        {% if facture.devis.etat == 'valide' %}
                                                                                            <span class=\"badge badge-pill badge-primary\">V</span>
                                                                                        {% else %}
                                                                                            <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                                        {% endif %}
                                                                                        DEVIS
                                                                                        N°{{ facture.devis.iddevis }}
                                                                                    </a>
                                                                                {% endif %}
                                                                                {% if facture.type == \"acompte\" %}
                                                                                    <a href=\"{{ path('editdevis', {'id': facture.acompte.devis.id, 'idchantier':facture.chantier.id}) }}\"
                                                                                       class=\"bolo600\">
                                                                                        {% if facture.acompte.devis.etat == 'valide' %}
                                                                                            <span class=\"badge badge-pill badge-primary\">V</span>
                                                                                        {% else %}
                                                                                            <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                                        {% endif %}
                                                                                        DEVIS
                                                                                        N°{{ facture.acompte.devis.iddevis }}
                                                                                    </a>
                                                                                {% endif %}
                                                                                {% if facture.type == \"decompte\" %}
                                                                                    <a href=\"{{ path('editdevis', {'id': facture.decompte.devis.id, 'idchantier':facture.chantier.id}) }}\"
                                                                                       class=\"bolo600\">
                                                                                        {% if facture.decompte.devis.etat == 'valide' %}
                                                                                            <span class=\"badge badge-pill badge-primary\">V</span>
                                                                                        {% else %}
                                                                                            <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                                        {% endif %}
                                                                                        DEVIS
                                                                                        N°{{ facture.decompte.devis.iddevis }}
                                                                                    </a>
                                                                                {% endif %}
                                                                            </td>
                                                                            <td>
                                                                                {% if facture.decompte is not null %}
                                                                                    <a href=\"{{ path('editdecompte', {'id': facture.decompte.id, 'idchantier':facture.chantier.id}) }}\"
                                                                                       class=\"bolo600\">
                                                                                        {% if facture.decompte.etat == 'valide' %}
                                                                                            <span class=\"badge badge-pill badge-primary\">V</span>
                                                                                        {% else %}
                                                                                            <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                                        {% endif %}
                                                                                        DÉCOMPTE
                                                                                        N° {{ facture.decompte.numdecompte }}
                                                                                    </a>
                                                                                {% endif %}
                                                                            </td>
                                                                            <td class=\"text-right bolo600\">
                                                                                {% if facture.devis is not null %}
                                                                                    {{ facture.totalht|number_format(2, ',', ' ') }}
                                                                                {% endif %}

                                                                                {% if facture.decompte is not null %}
                                                                                    {{ facture.totalht|number_format(2, ',', ' ') }}
                                                                                {% endif %}
                                                                            </td>
                                                                            <td class=\"text-right bolo600\">
                                                                                {% if facture.devis is not null %}
                                                                                    {{ facture.totalttc|number_format(2, ',', ' ') }}
                                                                                {% endif %}
                                                                                {% if facture.decompte is not null %}
                                                                                    {{ facture.totalttc|number_format(2, ',', ' ') }}
                                                                                {% endif %}
                                                                            </td>
                                                                            <td title=\"{{ facture.factreference|striptags|raw }}\"
                                                                                class=\"col-deep-orange\">{{ facture.factreference|striptags|raw }}</td>
                                                                            <td>
                                                                                <a href=\"{{ path('chantier',{'id':facture.chantier.id}) }}\">{{ chantier.nomchantier }}
                                                                                    | {{ chantier.client.nomclient }}</a>
                                                                            </td>
                                                                            <td class=\"text-left col-blue bolo600\">
                                                                                <i class=\"fa fa-user col-blue bolo600\"></i>&nbsp;
                                                                                {% if facture.dobyuser is not null %}
                                                                                    {{ facture.dobyuser.nom|upper }}
                                                                                    &nbsp;{{ facture.dobyuser.prenoms|upper }}
                                                                                {% endif %}
                                                                            </td>
                                                                        </tr>
                                                                    {% endif %}
                                                                {% endif %}
                                                            {% endfor %}
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
        </div>
    </section>

{% endblock %}
", "content/dnfactures.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\dnfactures.html.twig");
    }
}
