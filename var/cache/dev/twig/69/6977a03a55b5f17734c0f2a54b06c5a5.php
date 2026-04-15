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

/* content/budget.html.twig */
class __TwigTemplate_b2cd931cc56b211171b1d2d28844a6c5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/budget.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/budget.html.twig"));

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
        yield "    <section class=\"content\" style=\"margin-top: 50px !important;\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-12\" style=\"padding: 10px\">
                    <div class=\"card shadow mb-4\" id=\"client\">
                        <h4 class=\"text-left bg-pri col-white bolo600 bolderrer\" style=\"width: 100%; padding: 20px\">
                            CHARGES PRÉVISIONNELLES
                        </h4>
                        <div class=\"table-responsive\" style=\"padding: 30px; overflow-x: scroll\">
                            <h4 class=\"col-blue bolo700\">Chantiers</h4>
                            <select id=\"chanchane\">
                                ";
        // line 17
        if ((null === (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 17, $this->source); })()))) {
            // line 18
            yield "                                    <option value=\"\" disabled selected>Veuillez Choisir un Chantier svp !</option>
                                ";
        } else {
            // line 20
            yield "                                    <optgroup label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 20, $this->source); })()), "client", [], "any", false, false, false, 20), "nomclient", [], "any", false, false, false, 20)), "html", null, true);
            yield "\">
                                        <option value=\"";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), "html", null, true);
            yield "\"
                                                selected>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 22, $this->source); })()), "nomchantier", [], "any", false, false, false, 22)), "html", null, true);
            yield "</option>
                                    </optgroup>
                                ";
        }
        // line 25
        yield "
                                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 27
            yield "                                    ";
            $context["chantiers"] = CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 27);
            // line 28
            yield "                                    ";
            $context["cc"] = 0;
            // line 29
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["chantiers"]) || array_key_exists("chantiers", $context) ? $context["chantiers"] : (function () { throw new RuntimeError('Variable "chantiers" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["chan"]) {
                // line 30
                yield "                                        ";
                if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["chan"], "corbeille", [], "any", false, false, false, 30)) && (null === CoreExtension::getAttribute($this->env, $this->source, $context["chan"], "type", [], "any", false, false, false, 30)))) {
                    // line 31
                    yield "                                            ";
                    $context["cc"] = ((isset($context["cc"]) || array_key_exists("cc", $context) ? $context["cc"] : (function () { throw new RuntimeError('Variable "cc" does not exist.', 31, $this->source); })()) + 1);
                    // line 32
                    yield "                                        ";
                }
                // line 33
                yield "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['chan'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            yield "                                    ";
            if (((isset($context["cc"]) || array_key_exists("cc", $context) ? $context["cc"] : (function () { throw new RuntimeError('Variable "cc" does not exist.', 34, $this->source); })()) > 0)) {
                // line 35
                yield "                                        <optgroup label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 35)), "html", null, true);
                yield "\">
                                            ";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["chantiers"]) || array_key_exists("chantiers", $context) ? $context["chantiers"] : (function () { throw new RuntimeError('Variable "chantiers" does not exist.', 36, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["chan"]) {
                    // line 37
                    yield "                                                ";
                    if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["chan"], "corbeille", [], "any", false, false, false, 37)) && (null === CoreExtension::getAttribute($this->env, $this->source, $context["chan"], "type", [], "any", false, false, false, 37)))) {
                        // line 38
                        yield "                                                    <option value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chan"], "id", [], "any", false, false, false, 38), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chan"], "nomchantier", [], "any", false, false, false, 38)), "html", null, true);
                        yield "</option>
                                                ";
                    }
                    // line 40
                    yield "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['chan'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                yield "                                        </optgroup>
                                    ";
            }
            // line 43
            yield "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "
                            </select>
                            <br/>
                            <h4 class=\"col-blue bolo700\">Devis</h4>
                            <select id=\"chdevis\">
                                <option value=\"\" disabled selected>Veuillez Choisir un Devis svp !</option>
                                ";
        // line 50
        if ((($tmp =  !(null === (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 50, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["deviss"]) || array_key_exists("deviss", $context) ? $context["deviss"] : (function () { throw new RuntimeError('Variable "deviss" does not exist.', 51, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["dev"]) {
                // line 52
                yield "                                        ";
                if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "corbeille", [], "any", false, false, false, 52)) && (null === CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "type", [], "any", false, false, false, 52)))) {
                    // line 53
                    yield "                                            <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "id", [], "any", false, false, false, 53), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "iddevis", [], "any", false, false, false, 53)), "html", null, true);
                    yield "</option>
                                        ";
                }
                // line 55
                yield "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['dev'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            yield "                                ";
        }
        // line 57
        yield "                            </select>
                            <br/><br/><br/>

                            <div class=\"col-sm-12 text-center\">
                                <h4 class=\"bolo700 col-blue\">  ";
        // line 61
        if ((($tmp = (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 61, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 61, $this->source); })()), "client", [], "any", false, false, false, 61), "nomclient", [], "any", false, false, false, 61), "html", null, true);
            yield "  ";
        }
        yield "</h4>
                                <h4 class=\"bolo700 col-pink\">";
        // line 62
        if ((($tmp = (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 62, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 62, $this->source); })()), "chantier", [], "any", false, false, false, 62), "nomchantier", [], "any", false, false, false, 62), "html", null, true);
        }
        yield "</h4>
                                <h4 class=\"bolo700 col-blue-grey\">VUE DES CHARGES PRÉVISIONNELLES SUR
                                    ";
        // line 64
        if ((($tmp = (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 64, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "DEVIS N° ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 64, $this->source); })()), "iddevis", [], "any", false, false, false, 64), "html", null, true);
        }
        yield "</h4>
                            </div>
                            <br/>
                            <table class=\"table-striped table-bordered display nowrap\" style=\"width:100%\"
                                   id=\"dataBudget\">
                                <thead>
                                <tr>
                                    <th> RÉF</th>
                                    <th> CATÉGORIES</th>
                                    <th style=\"text-align:right !important;\">PREVISION (HT)</th>
                                    <th style=\"text-align:right !important;\"> RÉALISÉ</th>
                                    <th style=\"text-align:right !important;\">ECART(+/-)</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 79
        if ((($tmp = (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 79, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 80
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 80, $this->source); })()), "lignes", [], "any", false, false, false, 80));
            foreach ($context['_seq'] as $context["_key"] => $context["lign"]) {
                // line 81
                yield "                                        ";
                $context["too"] = 0;
                // line 82
                yield "                                        ";
                if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 82, $this->source); })()), "ptva", [], "any", false, false, false, 82) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 82, $this->source); })()), "ptva", [], "any", false, false, false, 82) == "susp"))) {
                    // line 83
                    yield "                                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 83, $this->source); })()), "aarem", [], "any", false, false, false, 83) == "non")) {
                        // line 84
                        yield "                                                ";
                        $context["too"] = (CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 84) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 84));
                        // line 85
                        yield "                                                ";
                        $context["too"] = ((isset($context["too"]) || array_key_exists("too", $context) ? $context["too"] : (function () { throw new RuntimeError('Variable "too" does not exist.', 85, $this->source); })()) * (1 + (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 85, $this->source); })()), "tva", [], "any", false, false, false, 85) / 100)));
                        // line 86
                        yield "                                            ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 86, $this->source); })()), "aarem", [], "any", false, false, false, 86) == "oui")) {
                        // line 87
                        yield "                                                ";
                        $context["too"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 87) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 87)) * (100 - CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "remise", [], "any", false, false, false, 87)));
                        // line 88
                        yield "                                                ";
                        $context["too"] = ((isset($context["too"]) || array_key_exists("too", $context) ? $context["too"] : (function () { throw new RuntimeError('Variable "too" does not exist.', 88, $this->source); })()) + (1 * (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 88, $this->source); })()), "tva", [], "any", false, false, false, 88) / 100)));
                        // line 89
                        yield "                                            ";
                    }
                    // line 90
                    yield "                                        ";
                }
                // line 91
                yield "                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 91, $this->source); })()), "ptva", [], "any", false, false, false, 91) == "non")) {
                    // line 92
                    yield "                                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 92, $this->source); })()), "aarem", [], "any", false, false, false, 92) == "non")) {
                        // line 93
                        yield "                                                ";
                        $context["too"] = (CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 93) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 93));
                        // line 94
                        yield "                                            ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 94, $this->source); })()), "aarem", [], "any", false, false, false, 94) == "oui")) {
                        // line 95
                        yield "                                                ";
                        $context["too"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 95) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 95)) * (100 - CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "remise", [], "any", false, false, false, 95)));
                        // line 96
                        yield "                                            ";
                    }
                    // line 97
                    yield "                                        ";
                }
                // line 98
                yield "
                                        <tr>
                                            <td>";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "reference", [], "any", false, false, false, 100), "html", null, true);
                yield "</td>
                                            <td class=\"col-blue bolo600\">";
                // line 101
                yield CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "designation", [], "any", false, false, false, 101);
                yield "</td>
                                            <td style=\"text-align:right !important;\"
                                                class=\"bolo600 col-blue-grey\">";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["too"]) || array_key_exists("too", $context) ? $context["too"] : (function () { throw new RuntimeError('Variable "too" does not exist.', 103, $this->source); })()), 2, ",", " "), "html", null, true);
                yield "</td>
                                            <td class=\"text-right bolo600 col-blue-grey\">";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "realiser", [], "any", false, false, false, 104), 2, ",", " "), "html", null, true);
                yield "</td>
                                            <td class=\"text-right bolo600 col-blue-grey\">
                                                ";
                // line 106
                if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "realiser", [], "any", false, false, false, 106))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 107
                    yield "                                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((isset($context["too"]) || array_key_exists("too", $context) ? $context["too"] : (function () { throw new RuntimeError('Variable "too" does not exist.', 107, $this->source); })()) - CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "realiser", [], "any", false, false, false, 107)), 2, ",", " "), "html", null, true);
                    yield "</td>
                                            ";
                } else {
                    // line 109
                    yield "                                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((0 - (isset($context["too"]) || array_key_exists("too", $context) ? $context["too"] : (function () { throw new RuntimeError('Variable "too" does not exist.', 109, $this->source); })())), 2, ",", " "), "html", null, true);
                    yield "</td>
                                            ";
                }
                // line 111
                yield "                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['lign'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            yield "                                ";
        }
        // line 114
        yield "                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <div class=\"col-md-12\" style=\"padding: 10px\">
                    <div class=\"card shadow mb-4\" id=\"client\">
                        <h4 class=\"text-left bg-pri col-white bolo600 bolderrer\" style=\"width: 100%; padding: 20px\">
                            JOURNAL DES DÉPENSES
                        </h4>
                        <div class=\"table-responsive\" style=\"padding: 20px; overflow-x: scroll\">
                            <table class=\"table-striped table-bordered display nowrap\"
                                   style=\"width: 100%\"
                                   id=\"dataJOURNALE\">
                                <thead>
                                <tr class=\"text-center bolderr\">
                                    <th>DATE</th>
                                    <th>DÉSIGNATION</th>
                                    <th>N° CAISSE</th>
                                    <th>MONTANT</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 138
        if ((($tmp = (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 138, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 139
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["journals"]) || array_key_exists("journals", $context) ? $context["journals"] : (function () { throw new RuntimeError('Variable "journals" does not exist.', 139, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["journal"]) {
                // line 140
                yield "                                <tr>
                                        <td>";
                // line 141
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["journal"], "caisse", [], "any", false, false, false, 141), "date", [], "any", false, false, false, 141), "d.m.Y"), "html", null, true);
                yield "</td>
                                        <td>";
                // line 142
                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["journal"], "ligne", [], "any", false, false, false, 142), "designation", [], "any", false, false, false, 142));
                yield "</td>
                                        <td><a href=\"#\">Paie ";
                // line 143
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["journal"], "caisse", [], "any", false, false, false, 143), "numcaisse", [], "any", false, false, false, 143), "html", null, true);
                yield "</a></td>
                                        <td class=\"text-right bolo600\">";
                // line 144
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["journal"], "caisse", [], "any", false, false, false, 144), "montant", [], "any", false, false, false, 144), "html", null, true);
                yield "</td>
                                </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['journal'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            yield "                                ";
        }
        // line 148
        yield "                                </tbody>
                                <tfoot>
                                <tr class=\"text-center bolderr\">
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th class=\"text-right bg-blue col-white\"></th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        localStorage.setItem('reloadd', 'budget');
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
        return "content/budget.html.twig";
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
        return array (  446 => 148,  443 => 147,  434 => 144,  430 => 143,  426 => 142,  422 => 141,  419 => 140,  414 => 139,  412 => 138,  386 => 114,  383 => 113,  376 => 111,  370 => 109,  364 => 107,  362 => 106,  357 => 104,  353 => 103,  348 => 101,  344 => 100,  340 => 98,  337 => 97,  334 => 96,  331 => 95,  328 => 94,  325 => 93,  322 => 92,  319 => 91,  316 => 90,  313 => 89,  310 => 88,  307 => 87,  304 => 86,  301 => 85,  298 => 84,  295 => 83,  292 => 82,  289 => 81,  284 => 80,  282 => 79,  261 => 64,  254 => 62,  247 => 61,  241 => 57,  238 => 56,  232 => 55,  224 => 53,  221 => 52,  216 => 51,  214 => 50,  206 => 44,  200 => 43,  196 => 41,  190 => 40,  182 => 38,  179 => 37,  175 => 36,  170 => 35,  167 => 34,  161 => 33,  158 => 32,  155 => 31,  152 => 30,  147 => 29,  144 => 28,  141 => 27,  137 => 26,  134 => 25,  128 => 22,  124 => 21,  119 => 20,  115 => 18,  113 => 17,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ title }}{% endblock %}

{% block body %}
    <section class=\"content\" style=\"margin-top: 50px !important;\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-12\" style=\"padding: 10px\">
                    <div class=\"card shadow mb-4\" id=\"client\">
                        <h4 class=\"text-left bg-pri col-white bolo600 bolderrer\" style=\"width: 100%; padding: 20px\">
                            CHARGES PRÉVISIONNELLES
                        </h4>
                        <div class=\"table-responsive\" style=\"padding: 30px; overflow-x: scroll\">
                            <h4 class=\"col-blue bolo700\">Chantiers</h4>
                            <select id=\"chanchane\">
                                {% if chantier  is null %}
                                    <option value=\"\" disabled selected>Veuillez Choisir un Chantier svp !</option>
                                {% else %}
                                    <optgroup label=\"{{ chantier.client.nomclient|upper }}\">
                                        <option value=\"{{ chantier.id }}\"
                                                selected>{{ chantier.nomchantier|upper }}</option>
                                    </optgroup>
                                {% endif %}

                                {% for client in clients %}
                                    {% set chantiers = client.chantiers %}
                                    {% set cc = 0 %}
                                    {% for chan in chantiers %}
                                        {% if chan.corbeille is null and chan.type is null %}
                                            {% set cc = cc + 1 %}
                                        {% endif %}
                                    {% endfor %}
                                    {% if cc > 0 %}
                                        <optgroup label=\"{{ client.nomclient|upper }}\">
                                            {% for chan in chantiers %}
                                                {% if chan.corbeille is null and chan.type is null %}
                                                    <option value=\"{{ chan.id }}\">{{ chan.nomchantier|upper }}</option>
                                                {% endif %}
                                            {% endfor %}
                                        </optgroup>
                                    {% endif %}
                                {% endfor %}

                            </select>
                            <br/>
                            <h4 class=\"col-blue bolo700\">Devis</h4>
                            <select id=\"chdevis\">
                                <option value=\"\" disabled selected>Veuillez Choisir un Devis svp !</option>
                                {% if chantier is not null %}
                                    {% for dev in deviss %}
                                        {% if dev.corbeille is null and dev.type is null %}
                                            <option value=\"{{ dev.id }}\">{{ dev.iddevis|upper }}</option>
                                        {% endif %}
                                    {% endfor %}
                                {% endif %}
                            </select>
                            <br/><br/><br/>

                            <div class=\"col-sm-12 text-center\">
                                <h4 class=\"bolo700 col-blue\">  {% if devis %}{{ devis.client.nomclient }}  {% endif %}</h4>
                                <h4 class=\"bolo700 col-pink\">{% if devis %}{{ devis.chantier.nomchantier }}{% endif %}</h4>
                                <h4 class=\"bolo700 col-blue-grey\">VUE DES CHARGES PRÉVISIONNELLES SUR
                                    {% if devis %}DEVIS N° {{ devis.iddevis }}{% endif %}</h4>
                            </div>
                            <br/>
                            <table class=\"table-striped table-bordered display nowrap\" style=\"width:100%\"
                                   id=\"dataBudget\">
                                <thead>
                                <tr>
                                    <th> RÉF</th>
                                    <th> CATÉGORIES</th>
                                    <th style=\"text-align:right !important;\">PREVISION (HT)</th>
                                    <th style=\"text-align:right !important;\"> RÉALISÉ</th>
                                    <th style=\"text-align:right !important;\">ECART(+/-)</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% if devis %}
                                    {% for lign in devis.lignes %}
                                        {% set too = 0 %}
                                        {% if devis.ptva == \"oui\" or devis.ptva == 'susp' %}
                                            {% if devis.aarem == \"non\" %}
                                                {% set too = lign.pu * lign.quantite %}
                                                {% set too = too * (1 + (devis.tva/100)) %}
                                            {% elseif devis.aarem == \"oui\" %}
                                                {% set too = lign.pu * lign.quantite * (100 - lign.remise) %}
                                                {% set too = too + (1 * (devis.tva/100)) %}
                                            {% endif %}
                                        {% endif %}
                                        {% if devis.ptva == \"non\" %}
                                            {% if devis.aarem == \"non\" %}
                                                {% set too = lign.pu * lign.quantite %}
                                            {% elseif devis.aarem == \"oui\" %}
                                                {% set too = lign.pu * lign.quantite * (100 - lign.remise) %}
                                            {% endif %}
                                        {% endif %}

                                        <tr>
                                            <td>{{ lign.reference }}</td>
                                            <td class=\"col-blue bolo600\">{{ lign.designation|raw }}</td>
                                            <td style=\"text-align:right !important;\"
                                                class=\"bolo600 col-blue-grey\">{{ too|number_format(2,',',' ') }}</td>
                                            <td class=\"text-right bolo600 col-blue-grey\">{{ lign.realiser|number_format(2,',',' ') }}</td>
                                            <td class=\"text-right bolo600 col-blue-grey\">
                                                {% if lign.realiser is not null %}
                                                {{ (too - lign.realiser )|number_format(2,',',' ') }}</td>
                                            {% else %}
                                                {{ (0 - too)|number_format(2,',',' ') }}</td>
                                            {% endif %}
                                        </tr>
                                    {% endfor %}
                                {% endif %}
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <div class=\"col-md-12\" style=\"padding: 10px\">
                    <div class=\"card shadow mb-4\" id=\"client\">
                        <h4 class=\"text-left bg-pri col-white bolo600 bolderrer\" style=\"width: 100%; padding: 20px\">
                            JOURNAL DES DÉPENSES
                        </h4>
                        <div class=\"table-responsive\" style=\"padding: 20px; overflow-x: scroll\">
                            <table class=\"table-striped table-bordered display nowrap\"
                                   style=\"width: 100%\"
                                   id=\"dataJOURNALE\">
                                <thead>
                                <tr class=\"text-center bolderr\">
                                    <th>DATE</th>
                                    <th>DÉSIGNATION</th>
                                    <th>N° CAISSE</th>
                                    <th>MONTANT</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% if devis %}
                                    {% for journal in journals %}
                                <tr>
                                        <td>{{ journal.caisse.date|date('d.m.Y') }}</td>
                                        <td>{{ journal.ligne.designation|striptags|raw }}</td>
                                        <td><a href=\"#\">Paie {{ journal.caisse.numcaisse }}</a></td>
                                        <td class=\"text-right bolo600\">{{ journal.caisse.montant }}</td>
                                </tr>
                                    {% endfor %}
                                {% endif %}
                                </tbody>
                                <tfoot>
                                <tr class=\"text-center bolderr\">
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th class=\"text-right bg-blue col-white\"></th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        localStorage.setItem('reloadd', 'budget');
    </script>
{% endblock %}
", "content/budget.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\budget.html.twig");
    }
}
