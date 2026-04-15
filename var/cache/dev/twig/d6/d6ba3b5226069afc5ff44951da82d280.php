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

/* content/exercices.html.twig */
class __TwigTemplate_44ce1be2f5d680df885ffd44a3d6c631 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/exercices.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/exercices.html.twig"));

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
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
    <link rel=\"stylesheet\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/css/bootstrap-select.css\">
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/js/bootstrap-select.js\"></script>

    <style>
        .dropdown-menu {
            margin-left: 30px !important;
            margin-top: -6px !important;
        }

        .dropdown-header {
            font-size: 12px;
        }

        .dropdown-menu > li > a {
            font-size: 12px;
        }
    </style>

    <input type=\"text\" class=\"hide\" id=\"idexer\" value=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27), "html", null, true);
        yield "\"/>
    <input type=\"text\" class=\"hide\" id=\"page\" value=\"exercices\"/>

    <section class=\"content\" style=\"margin-top: 50px !important;\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row clearfix m-t-50\">
                    <div class=\"col-sm-12 \">
                        <h4 class=\"bolo700 col-deep-orange\">EXERCICES COMPTABLES</h4>
                        <select class=\"selectpicker\" id=\"multiple\" multiple data-live-search=\"true\"
                                style=\"font-size:12px !important\" data-none-selected-text=\"Joindre des chantiers...\">
                            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 39
            yield "                                ";
            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 39)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 39), "count", [], "any", false, false, false, 39) > 0))) {
                // line 40
                yield "                                    ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 40))) {
                    // line 41
                    yield "                                        <optgroup class=\"col-blue bolo600\" label=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 41)), "html", null, true);
                    yield "\"
                                                  style=\"padding-bottom: 20px;\">
                                            ";
                    // line 43
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 43));
                    foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                        // line 44
                        yield "                                                ";
                        if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 44))) {
                            // line 45
                            yield "                                                    <option class=\"col-black\"
                                                            value=\"";
                            // line 46
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 46), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 46), "html", null, true);
                            yield "</option>
                                                ";
                        }
                        // line 48
                        yield "                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 49
                    yield "                                        </optgroup>
                                    ";
                }
                // line 51
                yield "                                ";
            }
            // line 52
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "                        </select>
                        <button id=\"joindreChantiers\" class=\"btn\" type=\"button\"
                                style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">JOINDRE
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"content\" id=\"setchantier\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <h4 class=\"bolo600\">";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 66, $this->source); })()), "exercice", [], "any", false, false, false, 66)), "html", null, true);
        yield " ( Du ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 66, $this->source); })()), "debut", [], "any", false, false, false, 66), "d-m-Y"), "html", null, true);
        yield "
                    au ";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 67, $this->source); })()), "fin", [], "any", false, false, false, 67), "d-m-Y"), "html", null, true);
        yield " </span>)</h4>
                <div class=\"panel-group\" id=\"accordion_1\" role=\"tablist\" aria-multiselectable=\"true\">
                    <div class=\"panel panel-pri shadow\"
                         style=\"border-left: 2px solid #E91E63;\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingOne_1\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed outai col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseOne_1p\" aria-expanded=\"false\"
                                   aria-controls=\"collapseOne_1\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Chantiers
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseOne_1p\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingOne_1\">
                            <div class=\"panel-body\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow: scroll\">
                                    <h5>Cet exercice prend en compte tous les enregistrements(règlements et bons de
                                        caisse) <br>compris entre la date du ";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 85, $this->source); })()), "debut", [], "any", false, false, false, 85), "d-m-Y"), "html", null, true);
        yield "
                                        et ";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 86, $this->source); })()), "fin", [], "any", false, false, false, 86), "d-m-Y"), "html", null, true);
        yield "</h5>
                                    <table class=\"table-striped table-bordered display nowrape\" id=\"dataExercices\"
                                           style=\"width:100%\">

                                        <thead>
                                        <tr class=\"font-weight-normal\">
                                            <th style=\"min-width: 30px !important;\"></th>
                                            <th style=\"min-width: 30px !important;\"></th>
                                            <th class=\"text-center col-blue-grey\">CHANTIERS / CLIENT</th>
                                            <th class=\"text-center col-blue-grey\">CLIENT</th>
                                            <th class=\"text-center col-blue-grey\">COÛT</th>
                                            <th class=\"text-center col-blue-grey\">RÈGLEMENT</th>
                                            <th class=\"text-center col-blue-grey\">BONS <br> PRESTATAIRES</th>
                                            <th class=\"text-center col-blue-grey\">BONS <br> FOURNISSEURS</th>
                                            <th class=\"text-center col-blue-grey\">PAIES <br> PRESTATAIRES</th>
                                            <th class=\"text-center col-blue-grey\">PAIES <br> FOURNISSEURS</th>
                                            <th class=\"text-center col-blue-grey\">CHARGES <br> CHANTIERS</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 106, $this->source); })()), "clients", [], "any", false, false, false, 106));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 107
            yield "                                            ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 107))) {
                // line 108
                yield "                                                ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 108))) {
                    // line 109
                    yield "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 109, $this->source); })()), "chantiers", [], "any", false, false, false, 109));
                    foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                        // line 110
                        yield "                                                        ";
                        if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 110)) && (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "client", [], "any", false, false, false, 110) == $context["client"]))) {
                            // line 111
                            yield "                                                            ";
                            $context["solde"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 111) - CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 111));
                            // line 112
                            yield "                                                            ";
                            $context["cout"] = 0;
                            // line 113
                            yield "                                                            ";
                            $context["regle"] = 0;
                            // line 114
                            yield "                                                            ";
                            $context["bonpresta"] = 0;
                            // line 115
                            yield "                                                            ";
                            $context["bonfourni"] = 0;
                            // line 116
                            yield "                                                            ";
                            $context["presta"] = 0;
                            // line 117
                            yield "                                                            ";
                            $context["fourni"] = 0;
                            // line 118
                            yield "                                                            ";
                            $context["chargechantier"] = 0;
                            // line 119
                            yield "                                                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "releves", [], "any", false, false, false, 119));
                            foreach ($context['_seq'] as $context["_key"] => $context["relever"]) {
                                // line 120
                                yield "                                                                ";
                                if ((($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["relever"], "date", [], "any", false, false, false, 120), "Y-m-d") > $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 120, $this->source); })()), "debut", [], "any", false, false, false, 120), "Y-m-d")) && ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["relever"], "date", [], "any", false, false, false, 120), "Y-m-d") < $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 120, $this->source); })()), "fin", [], "any", false, false, false, 120), "Y-m-d")))) {
                                    // line 121
                                    yield "                                                                    ";
                                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["relever"], "type", [], "any", false, false, false, 121) == 3)) {
                                        // line 122
                                        yield "                                                                        ";
                                        $context["regle"] = ((isset($context["regle"]) || array_key_exists("regle", $context) ? $context["regle"] : (function () { throw new RuntimeError('Variable "regle" does not exist.', 122, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["relever"], "montant", [], "any", false, false, false, 122));
                                        // line 123
                                        yield "                                                                    ";
                                    }
                                    // line 124
                                    yield "                                                                ";
                                }
                                // line 125
                                yield "                                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['relever'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 126
                            yield "                                                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "bons", [], "any", false, false, false, 126));
                            foreach ($context['_seq'] as $context["_key"] => $context["bon"]) {
                                // line 127
                                yield "                                                                ";
                                if (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "fournisseur", [], "any", false, false, false, 127)) && (null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "fournisseur", [], "any", false, false, false, 127), "corbeille", [], "any", false, false, false, 127)))) {
                                    // line 128
                                    yield "                                                                    ";
                                    if ((($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "date", [], "any", false, false, false, 128), "Y-m-d") > $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 128, $this->source); })()), "debut", [], "any", false, false, false, 128), "Y-m-d")) && ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "date", [], "any", false, false, false, 128), "Y-m-d") < $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 128, $this->source); })()), "fin", [], "any", false, false, false, 128), "Y-m-d")))) {
                                        // line 129
                                        yield "                                                                        ";
                                        if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "corbeille", [], "any", false, false, false, 129)) && (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "type", [], "any", false, false, false, 129) == "pst"))) {
                                            // line 130
                                            yield "                                                                            ";
                                            $context['_parent'] = $context;
                                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "caisses", [], "any", false, false, false, 130));
                                            foreach ($context['_seq'] as $context["_key"] => $context["caisse"]) {
                                                // line 131
                                                yield "                                                                                ";
                                                if ((($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "date", [], "any", false, false, false, 131), "Y-m-d") > $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 131, $this->source); })()), "debut", [], "any", false, false, false, 131), "Y-m-d")) && ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "date", [], "any", false, false, false, 131), "Y-m-d") < $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 131, $this->source); })()), "fin", [], "any", false, false, false, 131), "Y-m-d")))) {
                                                    // line 132
                                                    yield "                                                                                    ";
                                                    $context["presta"] = ((isset($context["presta"]) || array_key_exists("presta", $context) ? $context["presta"] : (function () { throw new RuntimeError('Variable "presta" does not exist.', 132, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "montant", [], "any", false, false, false, 132));
                                                    // line 133
                                                    yield "                                                                                ";
                                                }
                                                // line 134
                                                yield "                                                                            ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_key'], $context['caisse'], $context['_parent']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 135
                                            yield "                                                                        ";
                                        }
                                        // line 136
                                        yield "                                                                        ";
                                        if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "corbeille", [], "any", false, false, false, 136)) && (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "type", [], "any", false, false, false, 136) == "oui"))) {
                                            // line 137
                                            yield "                                                                        ";
                                        }
                                        // line 138
                                        yield "                                                                        ";
                                        if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "corbeille", [], "any", false, false, false, 138)) && (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "type", [], "any", false, false, false, 138) == "non"))) {
                                            // line 139
                                            yield "                                                                            ";
                                            $context["bonfourni"] = ((isset($context["bonfourni"]) || array_key_exists("bonfourni", $context) ? $context["bonfourni"] : (function () { throw new RuntimeError('Variable "bonfourni" does not exist.', 139, $this->source); })()) - CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalttc", [], "any", false, false, false, 139));
                                            // line 140
                                            yield "                                                                        ";
                                        }
                                        // line 141
                                        yield "                                                                    ";
                                    }
                                    // line 142
                                    yield "                                                                ";
                                }
                                // line 143
                                yield "                                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['bon'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 144
                            yield "                                                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "bons", [], "any", false, false, false, 144));
                            foreach ($context['_seq'] as $context["_key"] => $context["bon"]) {
                                // line 145
                                yield "                                                                ";
                                if (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "fournisseur", [], "any", false, false, false, 145)) && (null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "fournisseur", [], "any", false, false, false, 145), "corbeille", [], "any", false, false, false, 145)))) {
                                    // line 146
                                    yield "                                                                    ";
                                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "etat", [], "any", false, false, false, 146) == "valide")) {
                                        // line 147
                                        yield "                                                                        ";
                                        if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "corbeille", [], "any", false, false, false, 147)) && (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "type", [], "any", false, false, false, 147) == "pst"))) {
                                            // line 148
                                            yield "                                                                            ";
                                            $context["bonpresta"] = ((isset($context["bonpresta"]) || array_key_exists("bonpresta", $context) ? $context["bonpresta"] : (function () { throw new RuntimeError('Variable "bonpresta" does not exist.', 148, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalttc", [], "any", false, false, false, 148));
                                            // line 149
                                            yield "                                                                            ";
                                            $context['_parent'] = $context;
                                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "caisses", [], "any", false, false, false, 149));
                                            foreach ($context['_seq'] as $context["_key"] => $context["caisse"]) {
                                                // line 150
                                                yield "                                                                                ";
                                                if ((($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "date", [], "any", false, false, false, 150), "Y-m-d") > $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 150, $this->source); })()), "debut", [], "any", false, false, false, 150), "Y-m-d")) && ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "date", [], "any", false, false, false, 150), "Y-m-d") < $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 150, $this->source); })()), "fin", [], "any", false, false, false, 150), "Y-m-d")))) {
                                                    // line 151
                                                    yield "                                                                                    ";
                                                    $context["presta"] = ((isset($context["presta"]) || array_key_exists("presta", $context) ? $context["presta"] : (function () { throw new RuntimeError('Variable "presta" does not exist.', 151, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "montant", [], "any", false, false, false, 151));
                                                    // line 152
                                                    yield "                                                                                ";
                                                }
                                                // line 153
                                                yield "                                                                            ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_key'], $context['caisse'], $context['_parent']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 154
                                            yield "                                                                        ";
                                        }
                                        // line 155
                                        yield "                                                                        ";
                                        if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "corbeille", [], "any", false, false, false, 155)) && (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "type", [], "any", false, false, false, 155) == "oui"))) {
                                            // line 156
                                            yield "                                                                            ";
                                            $context["bonfourni"] = ((isset($context["bonfourni"]) || array_key_exists("bonfourni", $context) ? $context["bonfourni"] : (function () { throw new RuntimeError('Variable "bonfourni" does not exist.', 156, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalttc", [], "any", false, false, false, 156));
                                            // line 157
                                            yield "                                                                        ";
                                        }
                                        // line 158
                                        yield "                                                                        ";
                                        if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "corbeille", [], "any", false, false, false, 158)) && (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "type", [], "any", false, false, false, 158) == "non"))) {
                                            // line 159
                                            yield "                                                                            ";
                                            $context["bonfourni"] = ((isset($context["bonfourni"]) || array_key_exists("bonfourni", $context) ? $context["bonfourni"] : (function () { throw new RuntimeError('Variable "bonfourni" does not exist.', 159, $this->source); })()) - CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalttc", [], "any", false, false, false, 159));
                                            // line 160
                                            yield "                                                                        ";
                                        }
                                        // line 161
                                        yield "                                                                    ";
                                    }
                                    // line 162
                                    yield "                                                                ";
                                }
                                // line 163
                                yield "                                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['bon'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 164
                            yield "                                                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "caisses", [], "any", false, false, false, 164));
                            foreach ($context['_seq'] as $context["_key"] => $context["caisse"]) {
                                // line 165
                                yield "                                                                ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "etat", [], "any", false, false, false, 165) == "valide")) {
                                    // line 166
                                    yield "                                                                    ";
                                    if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "corbeille", [], "any", false, false, false, 166)) && (CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "type", [], "any", false, false, false, 166) == 3))) {
                                        // line 167
                                        yield "                                                                        ";
                                        if ((($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "date", [], "any", false, false, false, 167), "Y-m-d") > $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 167, $this->source); })()), "debut", [], "any", false, false, false, 167), "Y-m-d")) && ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "date", [], "any", false, false, false, 167), "Y-m-d") < $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 167, $this->source); })()), "fin", [], "any", false, false, false, 167), "Y-m-d")))) {
                                            // line 168
                                            yield "                                                                            ";
                                            $context["chargechantier"] = ((isset($context["chargechantier"]) || array_key_exists("chargechantier", $context) ? $context["chargechantier"] : (function () { throw new RuntimeError('Variable "chargechantier" does not exist.', 168, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "montant", [], "any", false, false, false, 168));
                                            // line 169
                                            yield "                                                                        ";
                                        }
                                        // line 170
                                        yield "                                                                    ";
                                    }
                                    // line 171
                                    yield "                                                                ";
                                }
                                // line 172
                                yield "                                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['caisse'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 173
                            yield "                                                            <tr>
                                                                <td class=\"text-center\">
                                                                    <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                           class=\"PROJY\" value=\"";
                            // line 176
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 176), "html", null, true);
                            yield "\">
                                                                </td>
                                                                <td style=\"text-align: center\"
                                                                    title=\"Avancement selon décomptes validés\">";
                            // line 179
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "progression", [], "any", false, false, false, 179), 2, ",", " "), "html", null, true);
                            yield "
                                                                    %
                                                                </td>
                                                                <td>
                                                                    <a href=\"";
                            // line 183
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 183)]), "html", null, true);
                            yield "\"
                                                                       title=\"";
                            // line 184
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 184), "html", null, true);
                            yield "\"
                                                                       class=\"bolo600\">
                                                                        ";
                            // line 186
                            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "sous", [], "any", false, false, false, 186))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 187
                                yield "                                                                            <span class=\"badge bg-orange\">SC</span>
                                                                        ";
                            }
                            // line 189
                            yield "                                                                        ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 189))), "truncate", [30, "...", false], "method", false, false, false, 189), "html", null, true);
                            yield "
                                                                    </a>
                                                                </td>
                                                                <td class=\"bolo600\"><a
                                                                            href=\"";
                            // line 193
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 193)]), "html", null, true);
                            yield "\"
                                                                            class=\"col-white bolo700\">";
                            // line 194
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 194)), "html", null, true);
                            yield "</a>
                                                                </td>
                                                                <td class=\"text-right\">";
                            // line 196
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 196), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                <td class=\"text-right\">";
                            // line 197
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 197), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                <td style=\"text-align: right\">";
                            // line 198
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["bonpresta"]) || array_key_exists("bonpresta", $context) ? $context["bonpresta"] : (function () { throw new RuntimeError('Variable "bonpresta" does not exist.', 198, $this->source); })()), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                <td style=\"text-align: right\">";
                            // line 199
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["bonfourni"]) || array_key_exists("bonfourni", $context) ? $context["bonfourni"] : (function () { throw new RuntimeError('Variable "bonfourni" does not exist.', 199, $this->source); })()), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                <td style=\"text-align: right\">";
                            // line 200
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["presta"]) || array_key_exists("presta", $context) ? $context["presta"] : (function () { throw new RuntimeError('Variable "presta" does not exist.', 200, $this->source); })()), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                <td style=\"text-align: right\">";
                            // line 201
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["fourni"]) || array_key_exists("fourni", $context) ? $context["fourni"] : (function () { throw new RuntimeError('Variable "fourni" does not exist.', 201, $this->source); })()), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                <td style=\"text-align: right\">";
                            // line 202
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["chargechantier"]) || array_key_exists("chargechantier", $context) ? $context["chargechantier"] : (function () { throw new RuntimeError('Variable "chargechantier" does not exist.', 202, $this->source); })()), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                            </tr>
                                                        ";
                        }
                        // line 205
                        yield "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 206
                    yield "                                                ";
                }
                // line 207
                yield "                                            ";
            }
            // line 208
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        yield "                                        </tbody>
                                        <tfoot>
                                        <tr class=\"font-weight-normal\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th></th>
                                            <th></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                    <br/>
                                    <p>
                                        <span class=\"col-orange\">&raquo; SC:</span>
                                        <span class=\"col-blue-grey\">SOUS-CHANTIER</span>
                                        <br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-pri shadow\"
                         style=\"border-left: 2px solid #E91E63;\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingRegle\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed outai col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseRegle\" aria-expanded=\"false\"
                                   aria-controls=\"collapseRegle\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Règlements
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseRegle\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingRegle\">
                            <div class=\"panel-body\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow: scroll\">
                                    <table class=\"table-striped table-bordered display nowrap\" id=\"dataRELEVA\"
                                           style=\"margin-top: 50px; width: 100%\">
                                        <thead>
                                        <tr class=\"bolo600\">
                                            <th>DATE</th>
                                            <th></th>
                                            <th>ENREGISTREMENTS</th>
                                            <th>MONTANT</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 262
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 262, $this->source); })()), "chantiers", [], "any", false, false, false, 262));
        foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
            // line 263
            yield "                                            ";
            $context["solde"] = 0;
            // line 264
            yield "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "releves", [], "any", false, false, false, 264));
            foreach ($context['_seq'] as $context["_key"] => $context["releve"]) {
                // line 265
                yield "                                                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["releve"], "type", [], "any", false, false, false, 265) == 3)) {
                    // line 266
                    yield "                                                <tr>
                                                    <td>";
                    // line 267
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["releve"], "date", [], "any", false, false, false, 267), "Y.m.d"), "html", null, true);
                    yield "</td>
                                                    <td class=\"bolo700\">";
                    // line 268
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["releve"], "devis", [], "any", false, false, false, 268), "client", [], "any", false, false, false, 268), "nomclient", [], "any", false, false, false, 268), "html", null, true);
                    yield " | ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["releve"], "devis", [], "any", false, false, false, 268), "chantier", [], "any", false, false, false, 268), "nomchantier", [], "any", false, false, false, 268), "html", null, true);
                    yield "</td>
                                                    <td class=\"col-pink bolo600\">";
                    // line 269
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["releve"], "versement", [], "any", false, false, false, 269), "html", null, true);
                    yield "
                                                        ";
                    // line 270
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["releve"], "moyen", [], "any", false, false, false, 270)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "(";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["releve"], "moyen", [], "any", false, false, false, 270), "html", null, true);
                        yield ")";
                    }
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["releve"], "facture", [], "any", false, false, false, 270)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " |
                                                        <a href=\"";
                        // line 271
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editfacture", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["releve"], "facture", [], "any", false, false, false, 271), "id", [], "any", false, false, false, 271), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["releve"], "devis", [], "any", false, false, false, 271), "chantier", [], "any", false, false, false, 271), "id", [], "any", false, false, false, 271)]), "html", null, true);
                        yield "\"
                                                           class=\"col-blue-grey\"> Facture
                                                            N° ";
                        // line 273
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["releve"], "facture", [], "any", false, false, false, 273), "numfacture", [], "any", false, false, false, 273), "html", null, true);
                        yield "</a>
                                                        ";
                    }
                    // line 275
                    yield "                                                    </td>
                                                    <td class=\"text-right\">";
                    // line 276
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["releve"], "montant", [], "any", false, false, false, 276), 2, ",", " "), "html", null, true);
                    yield "</td>
                                                </tr>
                                            ";
                }
                // line 279
                yield "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['releve'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 281
        yield "                                        </tbody>
                                        <tfoot>
                                        <tr class=\"bolo600\">
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <td class=\"text-right bg-blue bolo700 col-white\"></td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-pri shadow\"
                         style=\"border-left: 2px solid #E91E63;\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingChchan\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed outai col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseChchan\" aria-expanded=\"false\"
                                   aria-controls=\"collapseChchan\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Charges
                                    chantiers
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseChchan\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingChchan\">
                            <div class=\"panel-body\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow: scroll\">
                                    <table class=\"table-striped table-bordered display nowrape\"
                                           id=\"dataChargy\"
                                           style=\"width:100%\">
                                        <thead>
                                        <tr class=\"font-weight-normal\">
                                            <th class=\"text-center col-blue-grey\">DATE</th>
                                            <th class=\"text-center col-blue-grey\">BON</th>
                                            <th class=\"text-center col-blue-grey\">CHANTIERS | CLIENT</th>
                                            <th class=\"text-center col-blue-grey\">DEVIS</th>
                                            <th class=\"text-center col-blue-grey\">MONTANT</th>
                                            <th class=\"text-center col-blue-grey\">REFERENCE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 325
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 325, $this->source); })()), "clients", [], "any", false, false, false, 325));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 326
            yield "                                            ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 326))) {
                // line 327
                yield "                                                ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 327))) {
                    // line 328
                    yield "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 328, $this->source); })()), "chantiers", [], "any", false, false, false, 328));
                    foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                        // line 329
                        yield "                                                        ";
                        if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 329)) && (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "client", [], "any", false, false, false, 329) == $context["client"]))) {
                            // line 330
                            yield "                                                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "caisses", [], "any", false, false, false, 330));
                            foreach ($context['_seq'] as $context["_key"] => $context["caisse"]) {
                                // line 331
                                yield "                                                                ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "etat", [], "any", false, false, false, 331) == "valide")) {
                                    // line 332
                                    yield "                                                                    ";
                                    if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "corbeille", [], "any", false, false, false, 332)) && (CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "type", [], "any", false, false, false, 332) == 3))) {
                                        // line 333
                                        yield "                                                                        ";
                                        if ((($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "date", [], "any", false, false, false, 333), "Y-m-d") > $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 333, $this->source); })()), "debut", [], "any", false, false, false, 333), "Y-m-d")) && ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "date", [], "any", false, false, false, 333), "Y-m-d") < $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 333, $this->source); })()), "fin", [], "any", false, false, false, 333), "Y-m-d")))) {
                                            // line 334
                                            yield "                                                                            <tr>
                                                                                <td class=\"nowrape\">";
                                            // line 335
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "date", [], "any", false, false, false, 335), "Y.m.d"), "html", null, true);
                                            yield "</td>
                                                                                <td class=\"nowrape bolo600\">
                                                                                    <a href=\"";
                                            // line 337
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editcaisse", ["idcaisse" => CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "id", [], "any", false, false, false, 337), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "chantier", [], "any", false, false, false, 337), "id", [], "any", false, false, false, 337)]), "html", null, true);
                                            yield "\">
                                                                                            ";
                                            // line 338
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "numcaisse", [], "any", false, false, false, 338), "html", null, true);
                                            yield "
                                                                                            <span class=\"col-pink\">
                                                                                            (";
                                            // line 340
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "moyen", [], "any", false, false, false, 340), "html", null, true);
                                            yield ")</span>
                                                                                    </a></td>
                                                                                <td class=\"bolo700\"> ";
                                            // line 342
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "client", [], "any", false, false, false, 342), "nomclient", [], "any", false, false, false, 342)), "html", null, true);
                                            yield " | ";
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "chantier", [], "any", false, false, false, 342), "nomchantier", [], "any", false, false, false, 342)), "html", null, true);
                                            yield "</td>
                                                                                <td class=\"nowrape bolo600\">";
                                            // line 343
                                            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "devis", [], "any", false, false, false, 343))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                                // line 344
                                                yield "                                                                                    <a href=\"";
                                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "devis", [], "any", false, false, false, 344), "id", [], "any", false, false, false, 344), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "devis", [], "any", false, false, false, 344), "chantier", [], "any", false, false, false, 344), "id", [], "any", false, false, false, 344)]), "html", null, true);
                                                yield "\">";
                                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "devis", [], "any", false, false, false, 344), "iddevis", [], "any", false, false, false, 344), "html", null, true);
                                                yield " ";
                                            }
                                            yield "</a>
                                                                                </td>
                                                                                <td class=\"text-right nowrape\">";
                                            // line 346
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "montant", [], "any", false, false, false, 346), 2, ",", " "), "html", null, true);
                                            yield "</td>
                                                                                <td class=\"col-deep-orange\"
                                                                                    title=\"";
                                            // line 348
                                            yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "caissereference", [], "any", false, false, false, 348));
                                            yield "\">";
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "caissereference", [], "any", false, false, false, 348)), "html", null, true);
                                            yield "</td>
                                                                            </tr>
                                                                        ";
                                        }
                                        // line 351
                                        yield "                                                                    ";
                                    }
                                    // line 352
                                    yield "                                                                ";
                                }
                                // line 353
                                yield "                                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['caisse'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 354
                            yield "                                                        ";
                        }
                        // line 355
                        yield "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 356
                    yield "                                                ";
                }
                // line 357
                yield "                                            ";
            }
            // line 358
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 359
        yield "                                        </tbody>
                                        <tfoot>
                                        <tr class=\"font-weight-normal\">
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th></th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-pri shadow\"
                         style=\"border-left: 2px solid #E91E63;\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingCharInt\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed outai col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseCharInt\" aria-expanded=\"false\"
                                   aria-controls=\"collapseCharInt\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Charges
                                    internes
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseCharInt\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingCharInt\">
                            <div class=\"panel-body\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow: scroll\">
                                    <table class=\"table-striped table-bordered display nowrape\"
                                           id=\"dataChargo\"
                                           style=\"width:100%\">
                                        <thead>
                                        <tr class=\"font-weight-normal\">
                                            <th class=\"col-blue-grey\">CHARGE INTERNE</th>
                                            <th class=\"col-blue-grey\">DATE</th>
                                            <th class=\"col-blue-grey\">BON DE CAISSE</th>
                                            <th class=\"col-blue-grey\">MONTANT</th>
                                            <th class=\"col-blue-grey\">RÉFÉRENCE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 405
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["caisseinterne"]) || array_key_exists("caisseinterne", $context) ? $context["caisseinterne"] : (function () { throw new RuntimeError('Variable "caisseinterne" does not exist.', 405, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["caisse"]) {
            // line 406
            yield "                                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "etat", [], "any", false, false, false, 406) == "valide")) {
                // line 407
                yield "                                                ";
                if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "corbeille", [], "any", false, false, false, 407)) && (CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "type", [], "any", false, false, false, 407) == 2))) {
                    // line 408
                    yield "                                                    ";
                    if ((($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "date", [], "any", false, false, false, 408), "Y-m-d") > $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 408, $this->source); })()), "debut", [], "any", false, false, false, 408), "Y-m-d")) && ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "date", [], "any", false, false, false, 408), "Y-m-d") < $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 408, $this->source); })()), "fin", [], "any", false, false, false, 408), "Y-m-d")))) {
                        // line 409
                        yield "                                                        <tr>
                                                            <td class=\"bolo700\">";
                        // line 410
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "personnel", [], "any", false, false, false, 410), "noms", [], "any", false, false, false, 410)), "html", null, true);
                        yield "</td>
                                                            <td class=\"nowrape\">";
                        // line 411
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "date", [], "any", false, false, false, 411), "Y.m.d"), "html", null, true);
                        yield "</td>
                                                            <td class=\"nowrape bolo600\">
                                                                <a href=\"";
                        // line 413
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editcaisse", ["idcaisse" => CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "id", [], "any", false, false, false, 413), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "chantier", [], "any", false, false, false, 413), "id", [], "any", false, false, false, 413)]), "html", null, true);
                        yield "\">
                                                                    ";
                        // line 414
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "numcaisse", [], "any", false, false, false, 414), "html", null, true);
                        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "moyen", [], "any", false, false, false, 414))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 415
                            yield "                                                                        ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "numcaisse", [], "any", false, false, false, 415), "html", null, true);
                            yield "
                                                                        <span class=\"col-pink\">
                                                                        (";
                            // line 417
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "moyen", [], "any", false, false, false, 417), "html", null, true);
                            yield ")</span>";
                        }
                        // line 418
                        yield "                                                                </a></td>
                                                            <td class=\"text-right nowrape\">";
                        // line 419
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "montant", [], "any", false, false, false, 419), 2, ",", " "), "html", null, true);
                        yield "</td>
                                                            <td class=\"col-deep-orange\"
                                                                title=\"";
                        // line 421
                        yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "caissereference", [], "any", false, false, false, 421));
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "caissereference", [], "any", false, false, false, 421)), ["&nbsp;" => ""]), "html", null, true);
                        yield "</td>
                                                        </tr>
                                                    ";
                    }
                    // line 424
                    yield "                                                ";
                }
                // line 425
                yield "                                            ";
            }
            // line 426
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['caisse'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 427
        yield "                                        </tbody>
                                        <tfoot>
                                        <tr class=\"font-weight-normal\">
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th></th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-pri shadow\"
                         style=\"border-left: 2px solid #E91E63;\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingCharPers\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed outai col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseCharPers\" aria-expanded=\"false\"
                                   aria-controls=\"collapseCharPers\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Charges
                                    personnelles
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseCharPers\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingCharPers\">
                            <div class=\"panel-body\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow: scroll\">
                                    <table class=\"table-striped table-bordered display nowrape\"
                                           id=\"dataChargoPerso\"
                                           style=\"width:100%\">
                                        <thead>
                                        <tr class=\"font-weight-normal\">
                                            <th class=\"col-blue-grey\">CHARGE INTERNE</th>
                                            <th class=\"col-blue-grey\">DATE</th>
                                            <th class=\"col-blue-grey\">BON DE CAISSE</th>
                                            <th class=\"col-blue-grey\">MONTANT</th>
                                            <th class=\"col-blue-grey\">RÉFÉRENCE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 472
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["caisseperso"]) || array_key_exists("caisseperso", $context) ? $context["caisseperso"] : (function () { throw new RuntimeError('Variable "caisseperso" does not exist.', 472, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["caisse"]) {
            // line 473
            yield "                                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "etat", [], "any", false, false, false, 473) == "valide")) {
                // line 474
                yield "                                                ";
                if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "corbeille", [], "any", false, false, false, 474)) && (CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "type", [], "any", false, false, false, 474) == 5))) {
                    // line 475
                    yield "                                                    ";
                    if ((($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "date", [], "any", false, false, false, 475), "Y-m-d") > $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 475, $this->source); })()), "debut", [], "any", false, false, false, 475), "Y-m-d")) && ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "date", [], "any", false, false, false, 475), "Y-m-d") < $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 475, $this->source); })()), "fin", [], "any", false, false, false, 475), "Y-m-d")))) {
                        // line 476
                        yield "                                                        <tr>
                                                            <td class=\"bolo700\">";
                        // line 477
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "personnel", [], "any", false, false, false, 477), "noms", [], "any", false, false, false, 477)), "html", null, true);
                        yield "</td>
                                                            <td class=\"nowrape\">";
                        // line 478
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "date", [], "any", false, false, false, 478), "Y.m.d"), "html", null, true);
                        yield "</td>
                                                            <td class=\"nowrape bolo600\">
                                                                <a href=\"";
                        // line 480
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editcaisse", ["idcaisse" => CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "id", [], "any", false, false, false, 480), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "chantier", [], "any", false, false, false, 480), "id", [], "any", false, false, false, 480)]), "html", null, true);
                        yield "\">
                                                                    ";
                        // line 481
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "numcaisse", [], "any", false, false, false, 481), "html", null, true);
                        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "moyen", [], "any", false, false, false, 481))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 482
                            yield "                                                                        ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "numcaisse", [], "any", false, false, false, 482), "html", null, true);
                            yield "
                                                                        <span class=\"col-pink\">
                                                                        (";
                            // line 484
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "moyen", [], "any", false, false, false, 484), "html", null, true);
                            yield ")</span>";
                        }
                        // line 485
                        yield "                                                                </a></td>
                                                            <td class=\"text-right nowrape\">";
                        // line 486
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "montant", [], "any", false, false, false, 486), 2, ",", " "), "html", null, true);
                        yield "</td>
                                                            <td class=\"col-deep-orange\"
                                                                title=\"";
                        // line 488
                        yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "caissereference", [], "any", false, false, false, 488));
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "caissereference", [], "any", false, false, false, 488)), ["&nbsp;" => ""]), "html", null, true);
                        yield "</td>
                                                        </tr>
                                                    ";
                    }
                    // line 491
                    yield "                                                ";
                }
                // line 492
                yield "                                            ";
            }
            // line 493
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['caisse'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 494
        yield "                                        </tbody>
                                        <tfoot>
                                        <tr class=\"font-weight-normal\">
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th></th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        \$('#joindreChantiers').off().on(\"click\", function (event) {
            event.preventDefault()
            \$('#multiple :selected').each(function (i, sel) {
                \$('#Traitement').modal('show');
                \$.ajax({
                    type: 'POST',
                    url: '/crm/exercices/joindre/' + \$(sel).val() + \"/\" + \$(\"#idexer\").val(),
                    contentType: 'application/json; charset=utf-8',
                    dataType: 'json',
                    success: function (respdata, textStatus, jqXHR) {
                        window.location.href = '/crm/exercices/' + \$(\"#idexer\").val()
                    },
                    error: function (xhr, resp, text) {
                        \$('#ModalErreur').modal('show')
                    },
                })
            });
        })
    </script>

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
        return "content/exercices.html.twig";
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
        return array (  1120 => 494,  1114 => 493,  1111 => 492,  1108 => 491,  1100 => 488,  1095 => 486,  1092 => 485,  1088 => 484,  1082 => 482,  1079 => 481,  1075 => 480,  1070 => 478,  1066 => 477,  1063 => 476,  1060 => 475,  1057 => 474,  1054 => 473,  1050 => 472,  1003 => 427,  997 => 426,  994 => 425,  991 => 424,  983 => 421,  978 => 419,  975 => 418,  971 => 417,  965 => 415,  962 => 414,  958 => 413,  953 => 411,  949 => 410,  946 => 409,  943 => 408,  940 => 407,  937 => 406,  933 => 405,  885 => 359,  879 => 358,  876 => 357,  873 => 356,  867 => 355,  864 => 354,  858 => 353,  855 => 352,  852 => 351,  844 => 348,  839 => 346,  829 => 344,  827 => 343,  821 => 342,  816 => 340,  811 => 338,  807 => 337,  802 => 335,  799 => 334,  796 => 333,  793 => 332,  790 => 331,  785 => 330,  782 => 329,  777 => 328,  774 => 327,  771 => 326,  767 => 325,  721 => 281,  715 => 280,  709 => 279,  703 => 276,  700 => 275,  695 => 273,  690 => 271,  681 => 270,  677 => 269,  671 => 268,  667 => 267,  664 => 266,  661 => 265,  656 => 264,  653 => 263,  649 => 262,  594 => 209,  588 => 208,  585 => 207,  582 => 206,  576 => 205,  570 => 202,  566 => 201,  562 => 200,  558 => 199,  554 => 198,  550 => 197,  546 => 196,  541 => 194,  537 => 193,  529 => 189,  525 => 187,  523 => 186,  518 => 184,  514 => 183,  507 => 179,  501 => 176,  496 => 173,  490 => 172,  487 => 171,  484 => 170,  481 => 169,  478 => 168,  475 => 167,  472 => 166,  469 => 165,  464 => 164,  458 => 163,  455 => 162,  452 => 161,  449 => 160,  446 => 159,  443 => 158,  440 => 157,  437 => 156,  434 => 155,  431 => 154,  425 => 153,  422 => 152,  419 => 151,  416 => 150,  411 => 149,  408 => 148,  405 => 147,  402 => 146,  399 => 145,  394 => 144,  388 => 143,  385 => 142,  382 => 141,  379 => 140,  376 => 139,  373 => 138,  370 => 137,  367 => 136,  364 => 135,  358 => 134,  355 => 133,  352 => 132,  349 => 131,  344 => 130,  341 => 129,  338 => 128,  335 => 127,  330 => 126,  324 => 125,  321 => 124,  318 => 123,  315 => 122,  312 => 121,  309 => 120,  304 => 119,  301 => 118,  298 => 117,  295 => 116,  292 => 115,  289 => 114,  286 => 113,  283 => 112,  280 => 111,  277 => 110,  272 => 109,  269 => 108,  266 => 107,  262 => 106,  239 => 86,  235 => 85,  214 => 67,  208 => 66,  193 => 53,  187 => 52,  184 => 51,  180 => 49,  174 => 48,  167 => 46,  164 => 45,  161 => 44,  157 => 43,  151 => 41,  148 => 40,  145 => 39,  141 => 38,  127 => 27,  104 => 6,  91 => 5,  77 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    {{ title }}
{% endblock %}
{% block body %}

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
    <link rel=\"stylesheet\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/css/bootstrap-select.css\">
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/js/bootstrap-select.js\"></script>

    <style>
        .dropdown-menu {
            margin-left: 30px !important;
            margin-top: -6px !important;
        }

        .dropdown-header {
            font-size: 12px;
        }

        .dropdown-menu > li > a {
            font-size: 12px;
        }
    </style>

    <input type=\"text\" class=\"hide\" id=\"idexer\" value=\"{{ exercice.id }}\"/>
    <input type=\"text\" class=\"hide\" id=\"page\" value=\"exercices\"/>

    <section class=\"content\" style=\"margin-top: 50px !important;\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row clearfix m-t-50\">
                    <div class=\"col-sm-12 \">
                        <h4 class=\"bolo700 col-deep-orange\">EXERCICES COMPTABLES</h4>
                        <select class=\"selectpicker\" id=\"multiple\" multiple data-live-search=\"true\"
                                style=\"font-size:12px !important\" data-none-selected-text=\"Joindre des chantiers...\">
                            {% for client in clients %}
                                {% if client.corbeille is null and client.chantiers.count > 0 %}
                                    {% if client.type is null %}
                                        <optgroup class=\"col-blue bolo600\" label=\"{{ client.nomclient|upper }}\"
                                                  style=\"padding-bottom: 20px;\">
                                            {% for chantier in client.chantiers %}
                                                {% if chantier.corbeille is null %}
                                                    <option class=\"col-black\"
                                                            value=\"{{ chantier.id }}\">{{ chantier.nomchantier }}</option>
                                                {% endif %}
                                            {% endfor %}
                                        </optgroup>
                                    {% endif %}
                                {% endif %}
                            {% endfor %}
                        </select>
                        <button id=\"joindreChantiers\" class=\"btn\" type=\"button\"
                                style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">JOINDRE
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"content\" id=\"setchantier\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <h4 class=\"bolo600\">{{ exercice.exercice|capitalize }} ( Du {{ exercice.debut|date('d-m-Y') }}
                    au {{ exercice.fin|date('d-m-Y') }} </span>)</h4>
                <div class=\"panel-group\" id=\"accordion_1\" role=\"tablist\" aria-multiselectable=\"true\">
                    <div class=\"panel panel-pri shadow\"
                         style=\"border-left: 2px solid #E91E63;\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingOne_1\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed outai col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseOne_1p\" aria-expanded=\"false\"
                                   aria-controls=\"collapseOne_1\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Chantiers
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseOne_1p\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingOne_1\">
                            <div class=\"panel-body\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow: scroll\">
                                    <h5>Cet exercice prend en compte tous les enregistrements(règlements et bons de
                                        caisse) <br>compris entre la date du {{ exercice.debut|date('d-m-Y') }}
                                        et {{ exercice.fin|date('d-m-Y') }}</h5>
                                    <table class=\"table-striped table-bordered display nowrape\" id=\"dataExercices\"
                                           style=\"width:100%\">

                                        <thead>
                                        <tr class=\"font-weight-normal\">
                                            <th style=\"min-width: 30px !important;\"></th>
                                            <th style=\"min-width: 30px !important;\"></th>
                                            <th class=\"text-center col-blue-grey\">CHANTIERS / CLIENT</th>
                                            <th class=\"text-center col-blue-grey\">CLIENT</th>
                                            <th class=\"text-center col-blue-grey\">COÛT</th>
                                            <th class=\"text-center col-blue-grey\">RÈGLEMENT</th>
                                            <th class=\"text-center col-blue-grey\">BONS <br> PRESTATAIRES</th>
                                            <th class=\"text-center col-blue-grey\">BONS <br> FOURNISSEURS</th>
                                            <th class=\"text-center col-blue-grey\">PAIES <br> PRESTATAIRES</th>
                                            <th class=\"text-center col-blue-grey\">PAIES <br> FOURNISSEURS</th>
                                            <th class=\"text-center col-blue-grey\">CHARGES <br> CHANTIERS</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for client in exercice.clients %}
                                            {% if client.type is null %}
                                                {% if client.corbeille is null %}
                                                    {% for chantier in exercice.chantiers %}
                                                        {% if chantier.corbeille is null and chantier.client == client %}
                                                            {% set solde  = chantier.cout - chantier.reglement %}
                                                            {% set cout = 0 %}
                                                            {% set regle = 0 %}
                                                            {% set bonpresta = 0 %}
                                                            {% set bonfourni = 0 %}
                                                            {% set presta = 0 %}
                                                            {% set fourni = 0 %}
                                                            {% set chargechantier = 0 %}
                                                            {% for relever in chantier.releves %}
                                                                {% if relever.date|date('Y-m-d') > exercice.debut|date('Y-m-d') and  relever.date|date('Y-m-d') < exercice.fin|date('Y-m-d') %}
                                                                    {% if relever.type == 3 %}
                                                                        {% set regle = regle + relever.montant %}
                                                                    {% endif %}
                                                                {% endif %}
                                                            {% endfor %}
                                                            {% for bon in chantier.bons %}
                                                                {% if bon.fournisseur is not null and bon.fournisseur.corbeille is null %}
                                                                    {% if bon.date|date('Y-m-d') > exercice.debut|date('Y-m-d') and bon.date|date('Y-m-d') < exercice.fin|date('Y-m-d') %}
                                                                        {% if bon.corbeille is null and bon.type == \"pst\" %}
                                                                            {% for caisse in bon.caisses %}
                                                                                {% if caisse.date|date('Y-m-d') > exercice.debut|date('Y-m-d') and caisse.date|date('Y-m-d') < exercice.fin|date('Y-m-d') %}
                                                                                    {% set presta = presta + caisse.montant %}
                                                                                {% endif %}
                                                                            {% endfor %}
                                                                        {% endif %}
                                                                        {% if bon.corbeille is null and bon.type == \"oui\" %}
                                                                        {% endif %}
                                                                        {% if bon.corbeille is null and bon.type == \"non\" %}
                                                                            {% set bonfourni = bonfourni - bon.totalttc %}
                                                                        {% endif %}
                                                                    {% endif %}
                                                                {% endif %}
                                                            {% endfor %}
                                                            {% for bon in chantier.bons %}
                                                                {% if bon.fournisseur is not null and bon.fournisseur.corbeille is null %}
                                                                    {% if bon.etat == \"valide\" %}
                                                                        {% if bon.corbeille is null and bon.type == \"pst\" %}
                                                                            {% set bonpresta = bonpresta + bon.totalttc %}
                                                                            {% for caisse in bon.caisses %}
                                                                                {% if caisse.date|date('Y-m-d') > exercice.debut|date('Y-m-d') and caisse.date|date('Y-m-d') < exercice.fin|date('Y-m-d') %}
                                                                                    {% set presta = presta + caisse.montant %}
                                                                                {% endif %}
                                                                            {% endfor %}
                                                                        {% endif %}
                                                                        {% if bon.corbeille is null and bon.type == \"oui\" %}
                                                                            {% set bonfourni = bonfourni + bon.totalttc %}
                                                                        {% endif %}
                                                                        {% if bon.corbeille is null and bon.type == \"non\" %}
                                                                            {% set bonfourni = bonfourni - bon.totalttc %}
                                                                        {% endif %}
                                                                    {% endif %}
                                                                {% endif %}
                                                            {% endfor %}
                                                            {% for caisse in chantier.caisses %}
                                                                {% if caisse.etat == \"valide\" %}
                                                                    {% if caisse.corbeille is null and caisse.type == 3 %}
                                                                        {% if caisse.date|date('Y-m-d') > exercice.debut|date('Y-m-d') and caisse.date|date('Y-m-d') < exercice.fin|date('Y-m-d') %}
                                                                            {% set chargechantier  = chargechantier  + caisse.montant %}
                                                                        {% endif %}
                                                                    {% endif %}
                                                                {% endif %}
                                                            {% endfor %}
                                                            <tr>
                                                                <td class=\"text-center\">
                                                                    <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                           class=\"PROJY\" value=\"{{ chantier.id }}\">
                                                                </td>
                                                                <td style=\"text-align: center\"
                                                                    title=\"Avancement selon décomptes validés\">{{ chantier.progression|number_format(2,',',' ') }}
                                                                    %
                                                                </td>
                                                                <td>
                                                                    <a href=\"{{ path('chantier', {'id': chantier.id}) }}\"
                                                                       title=\"{{ chantier.nomchantier }}\"
                                                                       class=\"bolo600\">
                                                                        {% if chantier.sous is not null %}
                                                                            <span class=\"badge bg-orange\">SC</span>
                                                                        {% endif %}
                                                                        {{ chantier.nomchantier|upper|u.truncate(30, '...', false) }}
                                                                    </a>
                                                                </td>
                                                                <td class=\"bolo600\"><a
                                                                            href=\"{{ path('client', {'id': client.id}) }}\"
                                                                            class=\"col-white bolo700\">{{ client.nomclient|upper }}</a>
                                                                </td>
                                                                <td class=\"text-right\">{{ chantier.cout|number_format(2,',',' ') }}</td>
                                                                <td class=\"text-right\">{{ chantier.reglement|number_format(2,',',' ') }}</td>
                                                                <td style=\"text-align: right\">{{ bonpresta|number_format(2,',',' ') }}</td>
                                                                <td style=\"text-align: right\">{{ bonfourni|number_format(2,',',' ') }}</td>
                                                                <td style=\"text-align: right\">{{ presta|number_format(2,',',' ') }}</td>
                                                                <td style=\"text-align: right\">{{ fourni|number_format(2,',',' ') }}</td>
                                                                <td style=\"text-align: right\">{{ chargechantier|number_format(2,',',' ') }}</td>
                                                            </tr>
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endif %}
                                            {% endif %}
                                        {% endfor %}
                                        </tbody>
                                        <tfoot>
                                        <tr class=\"font-weight-normal\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th></th>
                                            <th></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                    <br/>
                                    <p>
                                        <span class=\"col-orange\">&raquo; SC:</span>
                                        <span class=\"col-blue-grey\">SOUS-CHANTIER</span>
                                        <br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-pri shadow\"
                         style=\"border-left: 2px solid #E91E63;\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingRegle\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed outai col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseRegle\" aria-expanded=\"false\"
                                   aria-controls=\"collapseRegle\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Règlements
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseRegle\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingRegle\">
                            <div class=\"panel-body\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow: scroll\">
                                    <table class=\"table-striped table-bordered display nowrap\" id=\"dataRELEVA\"
                                           style=\"margin-top: 50px; width: 100%\">
                                        <thead>
                                        <tr class=\"bolo600\">
                                            <th>DATE</th>
                                            <th></th>
                                            <th>ENREGISTREMENTS</th>
                                            <th>MONTANT</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for chantier in exercice.chantiers %}
                                            {% set solde = 0 %}
                                            {% for releve in chantier.releves %}
                                                {% if releve.type == 3 %}
                                                <tr>
                                                    <td>{{ releve.date|date('Y.m.d') }}</td>
                                                    <td class=\"bolo700\">{{ releve.devis.client.nomclient }} | {{ releve.devis.chantier.nomchantier }}</td>
                                                    <td class=\"col-pink bolo600\">{{ releve.versement }}
                                                        {% if releve.moyen %}({{ releve.moyen }}){% endif %}{% if releve.facture %} |
                                                        <a href=\"{{ path('editfacture', {'id': releve.facture.id, 'idchantier':releve.devis.chantier.id}) }}\"
                                                           class=\"col-blue-grey\"> Facture
                                                            N° {{ releve.facture.numfacture }}</a>
                                                        {% endif %}
                                                    </td>
                                                    <td class=\"text-right\">{{ releve.montant|number_format(2, ',', ' ') }}</td>
                                                </tr>
                                            {% endif %}
                                            {% endfor %}
                                        {% endfor %}
                                        </tbody>
                                        <tfoot>
                                        <tr class=\"bolo600\">
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <td class=\"text-right bg-blue bolo700 col-white\"></td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-pri shadow\"
                         style=\"border-left: 2px solid #E91E63;\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingChchan\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed outai col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseChchan\" aria-expanded=\"false\"
                                   aria-controls=\"collapseChchan\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Charges
                                    chantiers
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseChchan\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingChchan\">
                            <div class=\"panel-body\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow: scroll\">
                                    <table class=\"table-striped table-bordered display nowrape\"
                                           id=\"dataChargy\"
                                           style=\"width:100%\">
                                        <thead>
                                        <tr class=\"font-weight-normal\">
                                            <th class=\"text-center col-blue-grey\">DATE</th>
                                            <th class=\"text-center col-blue-grey\">BON</th>
                                            <th class=\"text-center col-blue-grey\">CHANTIERS | CLIENT</th>
                                            <th class=\"text-center col-blue-grey\">DEVIS</th>
                                            <th class=\"text-center col-blue-grey\">MONTANT</th>
                                            <th class=\"text-center col-blue-grey\">REFERENCE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for client in exercice.clients %}
                                            {% if client.type is null %}
                                                {% if client.corbeille is null %}
                                                    {% for chantier in exercice.chantiers %}
                                                        {% if chantier.corbeille is null and chantier.client == client %}
                                                            {% for caisse in chantier.caisses %}
                                                                {% if caisse.etat == 'valide' %}
                                                                    {% if caisse.corbeille is null and caisse.type == 3 %}
                                                                        {% if caisse.date|date('Y-m-d') > exercice.debut|date('Y-m-d') and  caisse.date|date('Y-m-d') < exercice.fin|date('Y-m-d') %}
                                                                            <tr>
                                                                                <td class=\"nowrape\">{{ caisse.date|date('Y.m.d') }}</td>
                                                                                <td class=\"nowrape bolo600\">
                                                                                    <a href=\"{{ path('editcaisse',{'idcaisse':caisse.id, 'idchantier':caisse.chantier.id}) }}\">
                                                                                            {{ caisse.numcaisse }}
                                                                                            <span class=\"col-pink\">
                                                                                            ({{ caisse.moyen }})</span>
                                                                                    </a></td>
                                                                                <td class=\"bolo700\"> {{ caisse.client.nomclient|upper }} | {{ caisse.chantier.nomchantier|upper }}</td>
                                                                                <td class=\"nowrape bolo600\">{% if caisse.devis is not null %}
                                                                                    <a href=\"{{ path('editdevis',{'id':caisse.devis.id, 'idchantier':caisse.devis.chantier.id}) }}\">{{ caisse.devis.iddevis }} {% endif %}</a>
                                                                                </td>
                                                                                <td class=\"text-right nowrape\">{{ caisse.montant|number_format(2,',',' ') }}</td>
                                                                                <td class=\"col-deep-orange\"
                                                                                    title=\"{{ caisse.caissereference|striptags|raw }}\">{{ caisse.caissereference|striptags }}</td>
                                                                            </tr>
                                                                        {% endif %}
                                                                    {% endif %}
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endif %}
                                            {% endif %}
                                        {% endfor %}
                                        </tbody>
                                        <tfoot>
                                        <tr class=\"font-weight-normal\">
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th></th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-pri shadow\"
                         style=\"border-left: 2px solid #E91E63;\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingCharInt\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed outai col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseCharInt\" aria-expanded=\"false\"
                                   aria-controls=\"collapseCharInt\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Charges
                                    internes
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseCharInt\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingCharInt\">
                            <div class=\"panel-body\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow: scroll\">
                                    <table class=\"table-striped table-bordered display nowrape\"
                                           id=\"dataChargo\"
                                           style=\"width:100%\">
                                        <thead>
                                        <tr class=\"font-weight-normal\">
                                            <th class=\"col-blue-grey\">CHARGE INTERNE</th>
                                            <th class=\"col-blue-grey\">DATE</th>
                                            <th class=\"col-blue-grey\">BON DE CAISSE</th>
                                            <th class=\"col-blue-grey\">MONTANT</th>
                                            <th class=\"col-blue-grey\">RÉFÉRENCE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for caisse in caisseinterne %}
                                            {% if caisse.etat == 'valide' %}
                                                {% if caisse.corbeille is null and caisse.type == 2 %}
                                                    {% if caisse.date|date('Y-m-d') > exercice.debut|date('Y-m-d') and  caisse.date|date('Y-m-d') < exercice.fin|date('Y-m-d') %}
                                                        <tr>
                                                            <td class=\"bolo700\">{{ caisse.personnel.noms|upper }}</td>
                                                            <td class=\"nowrape\">{{ caisse.date|date('Y.m.d') }}</td>
                                                            <td class=\"nowrape bolo600\">
                                                                <a href=\"{{ path('editcaisse',{'idcaisse':caisse.id, 'idchantier':caisse.chantier.id}) }}\">
                                                                    {{ caisse.numcaisse }}{% if caisse.moyen is not null %}
                                                                        {{ caisse.numcaisse }}
                                                                        <span class=\"col-pink\">
                                                                        ({{ caisse.moyen }})</span>{% endif %}
                                                                </a></td>
                                                            <td class=\"text-right nowrape\">{{ caisse.montant|number_format(2,',',' ') }}</td>
                                                            <td class=\"col-deep-orange\"
                                                                title=\"{{ caisse.caissereference|striptags|raw }}\">{{ caisse.caissereference|striptags|replace({'&nbsp;': \"\"}) }}</td>
                                                        </tr>
                                                    {% endif %}
                                                {% endif %}
                                            {% endif %}
                                        {% endfor %}
                                        </tbody>
                                        <tfoot>
                                        <tr class=\"font-weight-normal\">
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th></th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-pri shadow\"
                         style=\"border-left: 2px solid #E91E63;\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingCharPers\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed outai col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseCharPers\" aria-expanded=\"false\"
                                   aria-controls=\"collapseCharPers\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Charges
                                    personnelles
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseCharPers\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingCharPers\">
                            <div class=\"panel-body\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow: scroll\">
                                    <table class=\"table-striped table-bordered display nowrape\"
                                           id=\"dataChargoPerso\"
                                           style=\"width:100%\">
                                        <thead>
                                        <tr class=\"font-weight-normal\">
                                            <th class=\"col-blue-grey\">CHARGE INTERNE</th>
                                            <th class=\"col-blue-grey\">DATE</th>
                                            <th class=\"col-blue-grey\">BON DE CAISSE</th>
                                            <th class=\"col-blue-grey\">MONTANT</th>
                                            <th class=\"col-blue-grey\">RÉFÉRENCE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for caisse in caisseperso %}
                                            {% if caisse.etat == 'valide' %}
                                                {% if caisse.corbeille is null and caisse.type == 5 %}
                                                    {% if caisse.date|date('Y-m-d') > exercice.debut|date('Y-m-d') and  caisse.date|date('Y-m-d') < exercice.fin|date('Y-m-d') %}
                                                        <tr>
                                                            <td class=\"bolo700\">{{ caisse.personnel.noms|upper }}</td>
                                                            <td class=\"nowrape\">{{ caisse.date|date('Y.m.d') }}</td>
                                                            <td class=\"nowrape bolo600\">
                                                                <a href=\"{{ path('editcaisse',{'idcaisse':caisse.id, 'idchantier':caisse.chantier.id}) }}\">
                                                                    {{ caisse.numcaisse }}{% if caisse.moyen is not null %}
                                                                        {{ caisse.numcaisse }}
                                                                        <span class=\"col-pink\">
                                                                        ({{ caisse.moyen }})</span>{% endif %}
                                                                </a></td>
                                                            <td class=\"text-right nowrape\">{{ caisse.montant|number_format(2,',',' ') }}</td>
                                                            <td class=\"col-deep-orange\"
                                                                title=\"{{ caisse.caissereference|striptags|raw }}\">{{ caisse.caissereference|striptags|replace({'&nbsp;': \"\"}) }}</td>
                                                        </tr>
                                                    {% endif %}
                                                {% endif %}
                                            {% endif %}
                                        {% endfor %}
                                        </tbody>
                                        <tfoot>
                                        <tr class=\"font-weight-normal\">
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th></th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        \$('#joindreChantiers').off().on(\"click\", function (event) {
            event.preventDefault()
            \$('#multiple :selected').each(function (i, sel) {
                \$('#Traitement').modal('show');
                \$.ajax({
                    type: 'POST',
                    url: '/crm/exercices/joindre/' + \$(sel).val() + \"/\" + \$(\"#idexer\").val(),
                    contentType: 'application/json; charset=utf-8',
                    dataType: 'json',
                    success: function (respdata, textStatus, jqXHR) {
                        window.location.href = '/crm/exercices/' + \$(\"#idexer\").val()
                    },
                    error: function (xhr, resp, text) {
                        \$('#ModalErreur').modal('show')
                    },
                })
            });
        })
    </script>

{% endblock %}
", "content/exercices.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\exercices.html.twig");
    }
}
