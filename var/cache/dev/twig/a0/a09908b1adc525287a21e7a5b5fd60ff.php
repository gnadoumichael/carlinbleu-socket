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

/* content/attachepyth.html.twig */
class __TwigTemplate_cf885ae5456b1f4310d6351eabad9108 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/attachepyth.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/attachepyth.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html ; charset=utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Carlinbleu | Gestion et Suivi de Chantier</title>
    <meta content=\"no-cache, no-store, must-revalidate, post-check=0, pre-check=0\"/>
    <meta name=\"description\" content=\"Votre application multi-utilisateurs de gestion de chantiers: Comptabilité, Gestion technique, Suivi et gestion de matériel,
         Gestion des articles, Planning, Gestionnaire de stock, etc.\">
    <meta name=\"keywords\"
          content=\"carlinbleu, carlin bleu, carlin, gestion , projet, chantier, comptabilité, gestion technique, suivi , gestion de matériel, gestion de chantiersgestionnaire de projets, articles , matériels\">
    <meta name=\"author\" content=\"carlinGroup\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"https://www.carlinbleu.com/img/Icon-96.png\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css\"/>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

</head>
<body>
<style>
    body {
        font-size: 12px !important;
        background-color: #FFF;
    }

    td, th {
        padding: 5px !important;
    }

</style>


";
        // line 37
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 37, $this->source); })()) == "clients")) {
            // line 38
            yield "    <p style=\"font-size: 16px; font-weight: bold; color: #4e73df\">CLIENTS</p>
    <table class=\"table-bordered display nowrape\" style=\"width: 100%;\">
        <thead>
        <tr style=\"background-color: #cfe2f3\">
            <th>CLIENTS</th>
            <th>EMAIL</th>
            <th>ADRESSE</th>
            <th>CONTACTS</th>
            <th>COMPTE&nbsp;CONTRIBUABLE</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 50, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 51
                yield "            ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 51))) {
                    // line 52
                    yield "                ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 52))) {
                        // line 53
                        yield "                    <tr>
                        <td>";
                        // line 54
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 54)), "html", null, true);
                        yield "</td>
                        <td style=\"max-width:200px; white-space: nowrap\">";
                        // line 55
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "mail", [], "any", false, false, false, 55), "html", null, true);
                        yield "</td>
                        <td style=\"max-width:150px\">";
                        // line 56
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "adresse", [], "any", false, false, false, 56), "html", null, true);
                        yield "</td>
                        <td style=\"max-width:150px;\">";
                        // line 57
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "contact", [], "any", false, false, false, 57), "html", null, true);
                        yield "</td>
                        <td style=\"max-width:150px; white-space: nowrap\">";
                        // line 58
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "contribuable", [], "any", false, false, false, 58), "html", null, true);
                        yield "</td>
                    </tr>
                ";
                    }
                    // line 61
                    yield "            ";
                }
                // line 62
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            yield "        </tbody>
    </table>
";
        }
        // line 66
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 66, $this->source); })()) == "contacts")) {
            // line 67
            yield "    <p style=\"font-size: 16px; font-weight: bold; color: #4e73df\">CONTACTS</p>
    <table class=\"table-bordered display nowrape\" style=\"width: 100%;\">
        <thead>
        <tr style=\"background-color: #cfe2f3\">
            <th>CLIENTS</th>
            <th>CONTACTS</th>
            <th>FONCTION</th>
            <th>EMAIL</th>
            <th>TÉLÉPHONE MOBILE</th>
            <th>TÉLÉPHONE BUREAU</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 80, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                // line 81
                yield "            <tr>
                <td class=\"bolo700 col-blue\">";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "client", [], "any", false, false, false, 82), "nomClient", [], "any", false, false, false, 82)), "html", null, true);
                yield "</td>
                <td>";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "contact", [], "any", false, false, false, 83), "html", null, true);
                yield "</td>
                <td>";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "fonction", [], "any", false, false, false, 84), "html", null, true);
                yield "</td>
                <td>";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "mail", [], "any", false, false, false, 85), "html", null, true);
                yield "</td>
                <td>";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "phone", [], "any", false, false, false, 86), "html", null, true);
                yield "</td>
                <td>";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "bureau", [], "any", false, false, false, 87), "html", null, true);
                yield "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['contact'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            yield "        </tbody>
    </table>
";
        }
        // line 93
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 93, $this->source); })()) == "encours")) {
            // line 94
            yield "    <table class=\"table-striped table-bordered display nowrape\"
           style=\"width:100%\">


        ";
            // line 98
            $context["solde"] = 0;
            // line 99
            yield "        ";
            $context["tocout"] = 0;
            // line 100
            yield "        ";
            $context["toregle"] = 0;
            // line 101
            yield "        ";
            $context["tosolde"] = 0;
            // line 102
            yield "        ";
            $context["todepense"] = 0;
            // line 103
            yield "        ";
            $context["tobalance"] = 0;
            // line 104
            yield "        <thead>
        <tr class=\"font-weight-normal\">
            <th style=\"min-width: 30px !important;\"></th>
            <th class=\"col-blue-grey\">CHANTIERS EN COURS</th>
            <th class=\"text-center col-blue-grey\">CLIENT</th>
            <th class=\"text-center col-blue-grey\">COÛT</th>
            <th class=\"text-center col-blue-grey\">RÈGLEMENT</th>
            <th class=\"text-center col-blue-grey\">SOLDE</th>
            <th class=\"text-center col-blue-grey\">COMMANDES</th>
            <th class=\"text-center col-blue-grey\">BALANCE</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 117, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 118
                yield "            ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 118))) {
                    // line 119
                    yield "                ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 119))) {
                        // line 120
                        yield "                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 120));
                        foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                            // line 121
                            yield "                        ";
                            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 121)) && (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 121) == "encours"))) {
                                // line 122
                                yield "                            <tr>
                                <td style=\"text-align: center; white-space: nowrap\">";
                                // line 123
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "progression", [], "any", false, false, false, 123), 2, ",", " "), "html", null, true);
                                yield "%</td>
                                <td style=\"max-width: 200px; font-weight: bold\">";
                                // line 124
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 124)), "html", null, true);
                                yield "</td>
                                <td style=\"max-width: 200px; font-weight: bold\">
                                    ";
                                // line 126
                                if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "sous", [], "any", false, false, false, 126))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    // line 127
                                    yield "                                        <span class=\"badge bg-orange\">SC</span>
                                    ";
                                }
                                // line 129
                                yield "                                    ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 129), "html", null, true);
                                yield "
                                </td>
                                <td style=\"text-align: right; white-space: nowrap\">";
                                // line 131
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 131), 2, ",", " "), "html", null, true);
                                yield "</td>
                                <td style=\"text-align: right; white-space: nowrap\">";
                                // line 132
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 132), 2, ",", " "), "html", null, true);
                                yield "</td>
                                <td style=\"text-align: right; white-space: nowrap\">";
                                // line 133
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["solde"]) || array_key_exists("solde", $context) ? $context["solde"] : (function () { throw new RuntimeError('Variable "solde" does not exist.', 133, $this->source); })()), 2, ",", " "), "html", null, true);
                                yield "</td>
                                <td style=\"text-align: right; white-space: nowrap\">";
                                // line 134
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 134), 2, ",", " "), "html", null, true);
                                yield "</td>
                                ";
                                // line 135
                                $context["balance"] = ($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 135), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 135), 2, ".", ""));
                                // line 136
                                yield "                                <td style=\"text-align: right; white-space: nowrap\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["balance"]) || array_key_exists("balance", $context) ? $context["balance"] : (function () { throw new RuntimeError('Variable "balance" does not exist.', 136, $this->source); })()), 2, ",", " "), "html", null, true);
                                yield "</td>

                                ";
                                // line 138
                                $context["solde"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 138) - CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 138));
                                // line 139
                                yield "                                ";
                                $context["tocout"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 139) + (isset($context["tocout"]) || array_key_exists("tocout", $context) ? $context["tocout"] : (function () { throw new RuntimeError('Variable "tocout" does not exist.', 139, $this->source); })()));
                                // line 140
                                yield "                                ";
                                $context["toregle"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 140) + (isset($context["toregle"]) || array_key_exists("toregle", $context) ? $context["toregle"] : (function () { throw new RuntimeError('Variable "toregle" does not exist.', 140, $this->source); })()));
                                // line 141
                                yield "                                ";
                                $context["tosolde"] = ((isset($context["solde"]) || array_key_exists("solde", $context) ? $context["solde"] : (function () { throw new RuntimeError('Variable "solde" does not exist.', 141, $this->source); })()) + (isset($context["tosolde"]) || array_key_exists("tosolde", $context) ? $context["tosolde"] : (function () { throw new RuntimeError('Variable "tosolde" does not exist.', 141, $this->source); })()));
                                // line 142
                                yield "                                ";
                                $context["todepense"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 142) + (isset($context["todepense"]) || array_key_exists("todepense", $context) ? $context["todepense"] : (function () { throw new RuntimeError('Variable "todepense" does not exist.', 142, $this->source); })()));
                                // line 143
                                yield "                                ";
                                $context["tobalance"] = ((isset($context["balance"]) || array_key_exists("balance", $context) ? $context["balance"] : (function () { throw new RuntimeError('Variable "balance" does not exist.', 143, $this->source); })()) + (isset($context["tobalance"]) || array_key_exists("tobalance", $context) ? $context["tobalance"] : (function () { throw new RuntimeError('Variable "tobalance" does not exist.', 143, $this->source); })()));
                                // line 144
                                yield "
                            </tr>
                        ";
                            }
                            // line 147
                            yield "                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 148
                        yield "                ";
                    }
                    // line 149
                    yield "            ";
                }
                // line 150
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            yield "        </tbody>
        <tfoot>
        <tr class=\"font-weight-normal\">
            <th></th>
            <th></th>
            <th></th>
            <th style=\"text-align: right; white-space: nowrap\">";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tocout"]) || array_key_exists("tocout", $context) ? $context["tocout"] : (function () { throw new RuntimeError('Variable "tocout" does not exist.', 157, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</th>
            <th style=\"text-align: right; white-space: nowrap\">";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["toregle"]) || array_key_exists("toregle", $context) ? $context["toregle"] : (function () { throw new RuntimeError('Variable "toregle" does not exist.', 158, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</th>
            <th style=\"text-align: right; white-space: nowrap\">";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tosolde"]) || array_key_exists("tosolde", $context) ? $context["tosolde"] : (function () { throw new RuntimeError('Variable "tosolde" does not exist.', 159, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</th>
            <th style=\"text-align: right; white-space: nowrap\">";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["todepense"]) || array_key_exists("todepense", $context) ? $context["todepense"] : (function () { throw new RuntimeError('Variable "todepense" does not exist.', 160, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</th>
            <th style=\"text-align: right; white-space: nowrap\">";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tobalance"]) || array_key_exists("tobalance", $context) ? $context["tobalance"] : (function () { throw new RuntimeError('Variable "tobalance" does not exist.', 161, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</th>
        </tr>
        </tfoot>
    </table>
";
        }
        // line 166
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 166, $this->source); })()) == "etude")) {
            // line 167
            yield "    <table class=\"table-striped table-bordered display nowrape\"
           style=\"width:100%\">


        ";
            // line 171
            $context["solde"] = 0;
            // line 172
            yield "        ";
            $context["tocout"] = 0;
            // line 173
            yield "        ";
            $context["toregle"] = 0;
            // line 174
            yield "        ";
            $context["tosolde"] = 0;
            // line 175
            yield "        ";
            $context["todepense"] = 0;
            // line 176
            yield "        ";
            $context["tobalance"] = 0;
            // line 177
            yield "        <thead>
        <tr class=\"font-weight-normal\">
            <th style=\"min-width: 30px !important;\"></th>
            <th class=\"col-blue-grey\">CHANTIERS EN ÉTUDE</th>
            <th class=\"text-center col-blue-grey\">CLIENT</th>
            <th class=\"text-center col-blue-grey\">COÛT</th>
            <th class=\"text-center col-blue-grey\">RÈGLEMENT</th>
            <th class=\"text-center col-blue-grey\">SOLDE</th>
            <th class=\"text-center col-blue-grey\">COMMANDES</th>
            <th class=\"text-center col-blue-grey\">BALANCE</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 190
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 190, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 191
                yield "            ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 191))) {
                    // line 192
                    yield "                ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 192))) {
                        // line 193
                        yield "                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 193));
                        foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                            // line 194
                            yield "                        ";
                            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 194)) && (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 194) == "etude"))) {
                                // line 195
                                yield "                            <tr>
                                <td style=\"text-align: center; white-space: nowrap\">";
                                // line 196
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "progression", [], "any", false, false, false, 196), 2, ",", " "), "html", null, true);
                                yield "%</td>
                                <td style=\"max-width: 200px; font-weight: bold\">";
                                // line 197
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 197)), "html", null, true);
                                yield "</td>
                                <td style=\"max-width: 200px; font-weight: bold\">
                                    ";
                                // line 199
                                if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "sous", [], "any", false, false, false, 199))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    // line 200
                                    yield "                                        <span class=\"badge bg-orange\">SC</span>
                                    ";
                                }
                                // line 202
                                yield "                                    ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 202), "html", null, true);
                                yield "
                                </td>
                                <td style=\"text-align: right; white-space: nowrap\">";
                                // line 204
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 204), 2, ",", " "), "html", null, true);
                                yield "</td>
                                <td style=\"text-align: right; white-space: nowrap\">";
                                // line 205
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 205), 2, ",", " "), "html", null, true);
                                yield "</td>
                                <td style=\"text-align: right; white-space: nowrap\">";
                                // line 206
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["solde"]) || array_key_exists("solde", $context) ? $context["solde"] : (function () { throw new RuntimeError('Variable "solde" does not exist.', 206, $this->source); })()), 2, ",", " "), "html", null, true);
                                yield "</td>
                                <td style=\"text-align: right; white-space: nowrap\">";
                                // line 207
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 207), 2, ",", " "), "html", null, true);
                                yield "</td>
                                ";
                                // line 208
                                $context["balance"] = ($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 208), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 208), 2, ".", ""));
                                // line 209
                                yield "                                <td style=\"text-align: right; white-space: nowrap\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["balance"]) || array_key_exists("balance", $context) ? $context["balance"] : (function () { throw new RuntimeError('Variable "balance" does not exist.', 209, $this->source); })()), 2, ",", " "), "html", null, true);
                                yield "</td>

                                ";
                                // line 211
                                $context["solde"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 211) - CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 211));
                                // line 212
                                yield "                                ";
                                $context["tocout"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 212) + (isset($context["tocout"]) || array_key_exists("tocout", $context) ? $context["tocout"] : (function () { throw new RuntimeError('Variable "tocout" does not exist.', 212, $this->source); })()));
                                // line 213
                                yield "                                ";
                                $context["toregle"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 213) + (isset($context["toregle"]) || array_key_exists("toregle", $context) ? $context["toregle"] : (function () { throw new RuntimeError('Variable "toregle" does not exist.', 213, $this->source); })()));
                                // line 214
                                yield "                                ";
                                $context["tosolde"] = ((isset($context["solde"]) || array_key_exists("solde", $context) ? $context["solde"] : (function () { throw new RuntimeError('Variable "solde" does not exist.', 214, $this->source); })()) + (isset($context["tosolde"]) || array_key_exists("tosolde", $context) ? $context["tosolde"] : (function () { throw new RuntimeError('Variable "tosolde" does not exist.', 214, $this->source); })()));
                                // line 215
                                yield "                                ";
                                $context["todepense"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 215) + (isset($context["todepense"]) || array_key_exists("todepense", $context) ? $context["todepense"] : (function () { throw new RuntimeError('Variable "todepense" does not exist.', 215, $this->source); })()));
                                // line 216
                                yield "                                ";
                                $context["tobalance"] = ((isset($context["balance"]) || array_key_exists("balance", $context) ? $context["balance"] : (function () { throw new RuntimeError('Variable "balance" does not exist.', 216, $this->source); })()) + (isset($context["tobalance"]) || array_key_exists("tobalance", $context) ? $context["tobalance"] : (function () { throw new RuntimeError('Variable "tobalance" does not exist.', 216, $this->source); })()));
                                // line 217
                                yield "
                            </tr>
                        ";
                            }
                            // line 220
                            yield "                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 221
                        yield "                ";
                    }
                    // line 222
                    yield "            ";
                }
                // line 223
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 224
            yield "        </tbody>
        <tfoot>
        <tr class=\"font-weight-normal\">
            <th></th>
            <th></th>
            <th></th>
            <th style=\"text-align: right; white-space: nowrap\">";
            // line 230
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tocout"]) || array_key_exists("tocout", $context) ? $context["tocout"] : (function () { throw new RuntimeError('Variable "tocout" does not exist.', 230, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</th>
            <th style=\"text-align: right; white-space: nowrap\">";
            // line 231
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["toregle"]) || array_key_exists("toregle", $context) ? $context["toregle"] : (function () { throw new RuntimeError('Variable "toregle" does not exist.', 231, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</th>
            <th style=\"text-align: right; white-space: nowrap\">";
            // line 232
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tosolde"]) || array_key_exists("tosolde", $context) ? $context["tosolde"] : (function () { throw new RuntimeError('Variable "tosolde" does not exist.', 232, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</th>
            <th style=\"text-align: right; white-space: nowrap\">";
            // line 233
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["todepense"]) || array_key_exists("todepense", $context) ? $context["todepense"] : (function () { throw new RuntimeError('Variable "todepense" does not exist.', 233, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</th>
            <th style=\"text-align: right; white-space: nowrap\">";
            // line 234
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tobalance"]) || array_key_exists("tobalance", $context) ? $context["tobalance"] : (function () { throw new RuntimeError('Variable "tobalance" does not exist.', 234, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</th>
        </tr>
        </tfoot>
    </table>
";
        }
        // line 239
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 239, $this->source); })()) == "echouer")) {
            // line 240
            yield "    <table class=\"table-striped table-bordered display nowrape\"
           style=\"width:100%\">


        ";
            // line 244
            $context["solde"] = 0;
            // line 245
            yield "        ";
            $context["tocout"] = 0;
            // line 246
            yield "        ";
            $context["toregle"] = 0;
            // line 247
            yield "        ";
            $context["tosolde"] = 0;
            // line 248
            yield "        ";
            $context["todepense"] = 0;
            // line 249
            yield "        ";
            $context["tobalance"] = 0;
            // line 250
            yield "

        <thead>
        <tr class=\"font-weight-normal\">
            <th style=\"min-width: 30px !important;\"></th>
            <th class=\"col-blue-grey\">CHANTIERS ÉCHOUÉS</th>
            <th class=\"text-center col-blue-grey\">CLIENT</th>
            <th class=\"text-center col-blue-grey\">COÛT</th>
            <th class=\"text-center col-blue-grey\">RÈGLEMENT</th>
            <th class=\"text-center col-blue-grey\">SOLDE</th>
            <th class=\"text-center col-blue-grey\">COMMANDES</th>
            <th class=\"text-center col-blue-grey\">BALANCE</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 265
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 265, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 266
                yield "            ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 266))) {
                    // line 267
                    yield "                ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 267))) {
                        // line 268
                        yield "                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 268));
                        foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                            // line 269
                            yield "                        ";
                            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 269)) && (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 269) == "echouer"))) {
                                // line 270
                                yield "                            <tr>
                                <td style=\"text-align: center; white-space: nowrap\">";
                                // line 271
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "progression", [], "any", false, false, false, 271), 2, ",", " "), "html", null, true);
                                yield "%</td>
                                <td style=\"max-width: 200px; font-weight: bold\">";
                                // line 272
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 272)), "html", null, true);
                                yield "</td>
                                <td style=\"max-width: 200px; font-weight: bold\">
                                    ";
                                // line 274
                                if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "sous", [], "any", false, false, false, 274))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    // line 275
                                    yield "                                        <span class=\"badge bg-orange\">SC</span>
                                    ";
                                }
                                // line 277
                                yield "                                    ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 277), "html", null, true);
                                yield "
                                </td>
                                <td style=\"text-align: right; white-space: nowrap\">";
                                // line 279
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 279), 2, ",", " "), "html", null, true);
                                yield "</td>
                                <td style=\"text-align: right; white-space: nowrap\">";
                                // line 280
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 280), 2, ",", " "), "html", null, true);
                                yield "</td>
                                <td style=\"text-align: right; white-space: nowrap\">";
                                // line 281
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["solde"]) || array_key_exists("solde", $context) ? $context["solde"] : (function () { throw new RuntimeError('Variable "solde" does not exist.', 281, $this->source); })()), 2, ",", " "), "html", null, true);
                                yield "</td>
                                <td style=\"text-align: right; white-space: nowrap\">";
                                // line 282
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 282), 2, ",", " "), "html", null, true);
                                yield "</td>
                                ";
                                // line 283
                                $context["balance"] = ($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 283), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 283), 2, ".", ""));
                                // line 284
                                yield "                                <td style=\"text-align: right; white-space: nowrap\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["balance"]) || array_key_exists("balance", $context) ? $context["balance"] : (function () { throw new RuntimeError('Variable "balance" does not exist.', 284, $this->source); })()), 2, ",", " "), "html", null, true);
                                yield "</td>

                                ";
                                // line 286
                                $context["solde"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 286) - CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 286));
                                // line 287
                                yield "                                ";
                                $context["tocout"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 287) + (isset($context["tocout"]) || array_key_exists("tocout", $context) ? $context["tocout"] : (function () { throw new RuntimeError('Variable "tocout" does not exist.', 287, $this->source); })()));
                                // line 288
                                yield "                                ";
                                $context["toregle"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 288) + (isset($context["toregle"]) || array_key_exists("toregle", $context) ? $context["toregle"] : (function () { throw new RuntimeError('Variable "toregle" does not exist.', 288, $this->source); })()));
                                // line 289
                                yield "                                ";
                                $context["tosolde"] = ((isset($context["solde"]) || array_key_exists("solde", $context) ? $context["solde"] : (function () { throw new RuntimeError('Variable "solde" does not exist.', 289, $this->source); })()) + (isset($context["tosolde"]) || array_key_exists("tosolde", $context) ? $context["tosolde"] : (function () { throw new RuntimeError('Variable "tosolde" does not exist.', 289, $this->source); })()));
                                // line 290
                                yield "                                ";
                                $context["todepense"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 290) + (isset($context["todepense"]) || array_key_exists("todepense", $context) ? $context["todepense"] : (function () { throw new RuntimeError('Variable "todepense" does not exist.', 290, $this->source); })()));
                                // line 291
                                yield "                                ";
                                $context["tobalance"] = ((isset($context["balance"]) || array_key_exists("balance", $context) ? $context["balance"] : (function () { throw new RuntimeError('Variable "balance" does not exist.', 291, $this->source); })()) + (isset($context["tobalance"]) || array_key_exists("tobalance", $context) ? $context["tobalance"] : (function () { throw new RuntimeError('Variable "tobalance" does not exist.', 291, $this->source); })()));
                                // line 292
                                yield "
                            </tr>
                        ";
                            }
                            // line 295
                            yield "                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 296
                        yield "                ";
                    }
                    // line 297
                    yield "            ";
                }
                // line 298
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 299
            yield "        </tbody>
        <tfoot>
        <tr class=\"font-weight-normal\">
            <th></th>
            <th></th>
            <th></th>
            <th style=\"text-align: right; white-space: nowrap\">";
            // line 305
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tocout"]) || array_key_exists("tocout", $context) ? $context["tocout"] : (function () { throw new RuntimeError('Variable "tocout" does not exist.', 305, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</th>
            <th style=\"text-align: right; white-space: nowrap\">";
            // line 306
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["toregle"]) || array_key_exists("toregle", $context) ? $context["toregle"] : (function () { throw new RuntimeError('Variable "toregle" does not exist.', 306, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</th>
            <th style=\"text-align: right; white-space: nowrap\">";
            // line 307
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tosolde"]) || array_key_exists("tosolde", $context) ? $context["tosolde"] : (function () { throw new RuntimeError('Variable "tosolde" does not exist.', 307, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</th>
            <th style=\"text-align: right; white-space: nowrap\">";
            // line 308
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["todepense"]) || array_key_exists("todepense", $context) ? $context["todepense"] : (function () { throw new RuntimeError('Variable "todepense" does not exist.', 308, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</th>
            <th style=\"text-align: right; white-space: nowrap\">";
            // line 309
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tobalance"]) || array_key_exists("tobalance", $context) ? $context["tobalance"] : (function () { throw new RuntimeError('Variable "tobalance" does not exist.', 309, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</th>
        </tr>
        </tfoot>
    </table>
";
        }
        // line 314
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 314, $this->source); })()) == "terminer")) {
            // line 315
            yield "    <table class=\"table-striped table-bordered display nowrape\"
           style=\"width:100%\">


        ";
            // line 319
            $context["solde"] = 0;
            // line 320
            yield "        ";
            $context["tocout"] = 0;
            // line 321
            yield "        ";
            $context["toregle"] = 0;
            // line 322
            yield "        ";
            $context["tosolde"] = 0;
            // line 323
            yield "        ";
            $context["todepense"] = 0;
            // line 324
            yield "        ";
            $context["tobalance"] = 0;
            // line 325
            yield "

        <thead>
        <tr class=\"font-weight-normal\">
            <th style=\"min-width: 30px !important;\"></th>
            <th class=\"col-blue-grey\">CHANTIERS TERMINÉS</th>
            <th class=\"text-center col-blue-grey\">CLIENT</th>
            <th class=\"text-center col-blue-grey\">COÛT</th>
            <th class=\"text-center col-blue-grey\">RÈGLEMENT</th>
            <th class=\"text-center col-blue-grey\">SOLDE</th>
            <th class=\"text-center col-blue-grey\">COMMANDES</th>
            <th class=\"text-center col-blue-grey\">BALANCE</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 340
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 340, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 341
                yield "            ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 341))) {
                    // line 342
                    yield "                ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 342))) {
                        // line 343
                        yield "                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 343));
                        foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                            // line 344
                            yield "                        ";
                            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 344)) && (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 344) == "archiver"))) {
                                // line 345
                                yield "                            <tr>
                                <td style=\"text-align: center; white-space: nowrap\">";
                                // line 346
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "progression", [], "any", false, false, false, 346), 2, ",", " "), "html", null, true);
                                yield "%</td>
                                <td style=\"max-width: 200px; font-weight: bold\">";
                                // line 347
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 347)), "html", null, true);
                                yield "</td>
                                <td style=\"max-width: 200px; font-weight: bold\">
                                    ";
                                // line 349
                                if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "sous", [], "any", false, false, false, 349))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    // line 350
                                    yield "                                        <span class=\"badge bg-orange\">SC</span>
                                    ";
                                }
                                // line 352
                                yield "                                    ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 352), "html", null, true);
                                yield "
                                </td>
                                <td style=\"text-align: right; white-space: nowrap\">";
                                // line 354
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 354), 2, ",", " "), "html", null, true);
                                yield "</td>
                                <td style=\"text-align: right; white-space: nowrap\">";
                                // line 355
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 355), 2, ",", " "), "html", null, true);
                                yield "</td>
                                <td style=\"text-align: right; white-space: nowrap\">";
                                // line 356
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["solde"]) || array_key_exists("solde", $context) ? $context["solde"] : (function () { throw new RuntimeError('Variable "solde" does not exist.', 356, $this->source); })()), 2, ",", " "), "html", null, true);
                                yield "</td>
                                <td style=\"text-align: right; white-space: nowrap\">";
                                // line 357
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 357), 2, ",", " "), "html", null, true);
                                yield "</td>
                                ";
                                // line 358
                                $context["balance"] = ($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 358), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 358), 2, ".", ""));
                                // line 359
                                yield "                                <td style=\"text-align: right; white-space: nowrap\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["balance"]) || array_key_exists("balance", $context) ? $context["balance"] : (function () { throw new RuntimeError('Variable "balance" does not exist.', 359, $this->source); })()), 2, ",", " "), "html", null, true);
                                yield "</td>

                                ";
                                // line 361
                                $context["solde"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 361) - CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 361));
                                // line 362
                                yield "                                ";
                                $context["tocout"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 362) + (isset($context["tocout"]) || array_key_exists("tocout", $context) ? $context["tocout"] : (function () { throw new RuntimeError('Variable "tocout" does not exist.', 362, $this->source); })()));
                                // line 363
                                yield "                                ";
                                $context["toregle"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 363) + (isset($context["toregle"]) || array_key_exists("toregle", $context) ? $context["toregle"] : (function () { throw new RuntimeError('Variable "toregle" does not exist.', 363, $this->source); })()));
                                // line 364
                                yield "                                ";
                                $context["tosolde"] = ((isset($context["solde"]) || array_key_exists("solde", $context) ? $context["solde"] : (function () { throw new RuntimeError('Variable "solde" does not exist.', 364, $this->source); })()) + (isset($context["tosolde"]) || array_key_exists("tosolde", $context) ? $context["tosolde"] : (function () { throw new RuntimeError('Variable "tosolde" does not exist.', 364, $this->source); })()));
                                // line 365
                                yield "                                ";
                                $context["todepense"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 365) + (isset($context["todepense"]) || array_key_exists("todepense", $context) ? $context["todepense"] : (function () { throw new RuntimeError('Variable "todepense" does not exist.', 365, $this->source); })()));
                                // line 366
                                yield "                                ";
                                $context["tobalance"] = ((isset($context["balance"]) || array_key_exists("balance", $context) ? $context["balance"] : (function () { throw new RuntimeError('Variable "balance" does not exist.', 366, $this->source); })()) + (isset($context["tobalance"]) || array_key_exists("tobalance", $context) ? $context["tobalance"] : (function () { throw new RuntimeError('Variable "tobalance" does not exist.', 366, $this->source); })()));
                                // line 367
                                yield "
                            </tr>
                        ";
                            }
                            // line 370
                            yield "                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 371
                        yield "                ";
                    }
                    // line 372
                    yield "            ";
                }
                // line 373
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 374
            yield "        </tbody>
        <tfoot>
        <tr class=\"font-weight-normal\">
            <th></th>
            <th></th>
            <th></th>
            <th style=\"text-align: right; white-space: nowrap\">";
            // line 380
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tocout"]) || array_key_exists("tocout", $context) ? $context["tocout"] : (function () { throw new RuntimeError('Variable "tocout" does not exist.', 380, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</th>
            <th style=\"text-align: right; white-space: nowrap\">";
            // line 381
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["toregle"]) || array_key_exists("toregle", $context) ? $context["toregle"] : (function () { throw new RuntimeError('Variable "toregle" does not exist.', 381, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</th>
            <th style=\"text-align: right; white-space: nowrap\">";
            // line 382
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tosolde"]) || array_key_exists("tosolde", $context) ? $context["tosolde"] : (function () { throw new RuntimeError('Variable "tosolde" does not exist.', 382, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</th>
            <th style=\"text-align: right; white-space: nowrap\">";
            // line 383
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["todepense"]) || array_key_exists("todepense", $context) ? $context["todepense"] : (function () { throw new RuntimeError('Variable "todepense" does not exist.', 383, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</th>
            <th style=\"text-align: right; white-space: nowrap\">";
            // line 384
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tobalance"]) || array_key_exists("tobalance", $context) ? $context["tobalance"] : (function () { throw new RuntimeError('Variable "tobalance" does not exist.', 384, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</th>
        </tr>
        </tfoot>
    </table>
";
        }
        // line 389
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 389, $this->source); })()) == "clotures")) {
            // line 390
            yield "    <table class=\"table-striped table-bordered display nowrape\"
           style=\"width:100%\">


        ";
            // line 394
            $context["solde"] = 0;
            // line 395
            yield "        ";
            $context["tocout"] = 0;
            // line 396
            yield "        ";
            $context["toregle"] = 0;
            // line 397
            yield "        ";
            $context["tosolde"] = 0;
            // line 398
            yield "        ";
            $context["todepense"] = 0;
            // line 399
            yield "        ";
            $context["tobalance"] = 0;
            // line 400
            yield "

        <thead>
        <tr class=\"font-weight-normal\">
            <th style=\"min-width: 30px !important;\"></th>
            <th class=\"col-blue-grey\">CHANTIERS CLÔTURÉS</th>
            <th class=\"text-center col-blue-grey\">CLIENT</th>
            <th class=\"text-center col-blue-grey\">COÛT</th>
            <th class=\"text-center col-blue-grey\">RÈGLEMENT</th>
            <th class=\"text-center col-blue-grey\">SOLDE</th>
            <th class=\"text-center col-blue-grey\">COMMANDES</th>
            <th class=\"text-center col-blue-grey\">BALANCE</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 415
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 415, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 416
                yield "            ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 416))) {
                    // line 417
                    yield "                ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 417))) {
                        // line 418
                        yield "                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 418));
                        foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                            // line 419
                            yield "                        ";
                            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 419)) && (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 419) == "cloturer"))) {
                                // line 420
                                yield "                            <tr>
                                <td style=\"text-align: center; white-space: nowrap\">";
                                // line 421
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "progression", [], "any", false, false, false, 421), 2, ",", " "), "html", null, true);
                                yield "%</td>
                                <td style=\"max-width: 200px; font-weight: bold\">";
                                // line 422
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 422)), "html", null, true);
                                yield "</td>
                                <td style=\"max-width: 200px; font-weight: bold\">
                                    ";
                                // line 424
                                if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "sous", [], "any", false, false, false, 424))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    // line 425
                                    yield "                                        <span class=\"badge bg-orange\">SC</span>
                                    ";
                                }
                                // line 427
                                yield "                                    ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 427), "html", null, true);
                                yield "
                                </td>
                                <td style=\"text-align: right; white-space: nowrap\">";
                                // line 429
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 429), 2, ",", " "), "html", null, true);
                                yield "</td>
                                <td style=\"text-align: right; white-space: nowrap\">";
                                // line 430
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 430), 2, ",", " "), "html", null, true);
                                yield "</td>
                                <td style=\"text-align: right; white-space: nowrap\">";
                                // line 431
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["solde"]) || array_key_exists("solde", $context) ? $context["solde"] : (function () { throw new RuntimeError('Variable "solde" does not exist.', 431, $this->source); })()), 2, ",", " "), "html", null, true);
                                yield "</td>
                                <td style=\"text-align: right; white-space: nowrap\">";
                                // line 432
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 432), 2, ",", " "), "html", null, true);
                                yield "</td>
                                ";
                                // line 433
                                $context["balance"] = ($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 433), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 433), 2, ".", ""));
                                // line 434
                                yield "                                <td style=\"text-align: right; white-space: nowrap\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["balance"]) || array_key_exists("balance", $context) ? $context["balance"] : (function () { throw new RuntimeError('Variable "balance" does not exist.', 434, $this->source); })()), 2, ",", " "), "html", null, true);
                                yield "</td>

                                ";
                                // line 436
                                $context["solde"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 436) - CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 436));
                                // line 437
                                yield "                                ";
                                $context["tocout"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 437) + (isset($context["tocout"]) || array_key_exists("tocout", $context) ? $context["tocout"] : (function () { throw new RuntimeError('Variable "tocout" does not exist.', 437, $this->source); })()));
                                // line 438
                                yield "                                ";
                                $context["toregle"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 438) + (isset($context["toregle"]) || array_key_exists("toregle", $context) ? $context["toregle"] : (function () { throw new RuntimeError('Variable "toregle" does not exist.', 438, $this->source); })()));
                                // line 439
                                yield "                                ";
                                $context["tosolde"] = ((isset($context["solde"]) || array_key_exists("solde", $context) ? $context["solde"] : (function () { throw new RuntimeError('Variable "solde" does not exist.', 439, $this->source); })()) + (isset($context["tosolde"]) || array_key_exists("tosolde", $context) ? $context["tosolde"] : (function () { throw new RuntimeError('Variable "tosolde" does not exist.', 439, $this->source); })()));
                                // line 440
                                yield "                                ";
                                $context["todepense"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 440) + (isset($context["todepense"]) || array_key_exists("todepense", $context) ? $context["todepense"] : (function () { throw new RuntimeError('Variable "todepense" does not exist.', 440, $this->source); })()));
                                // line 441
                                yield "                                ";
                                $context["tobalance"] = ((isset($context["balance"]) || array_key_exists("balance", $context) ? $context["balance"] : (function () { throw new RuntimeError('Variable "balance" does not exist.', 441, $this->source); })()) + (isset($context["tobalance"]) || array_key_exists("tobalance", $context) ? $context["tobalance"] : (function () { throw new RuntimeError('Variable "tobalance" does not exist.', 441, $this->source); })()));
                                // line 442
                                yield "
                            </tr>
                        ";
                            }
                            // line 445
                            yield "                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 446
                        yield "                ";
                    }
                    // line 447
                    yield "            ";
                }
                // line 448
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 449
            yield "        </tbody>
        <tfoot>
        <tr class=\"font-weight-normal\">
            <th></th>
            <th></th>
            <th></th>
            <th style=\"text-align: right; white-space: nowrap\">";
            // line 455
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tocout"]) || array_key_exists("tocout", $context) ? $context["tocout"] : (function () { throw new RuntimeError('Variable "tocout" does not exist.', 455, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</th>
            <th style=\"text-align: right; white-space: nowrap\">";
            // line 456
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["toregle"]) || array_key_exists("toregle", $context) ? $context["toregle"] : (function () { throw new RuntimeError('Variable "toregle" does not exist.', 456, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</th>
            <th style=\"text-align: right; white-space: nowrap\">";
            // line 457
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tosolde"]) || array_key_exists("tosolde", $context) ? $context["tosolde"] : (function () { throw new RuntimeError('Variable "tosolde" does not exist.', 457, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</th>
            <th style=\"text-align: right; white-space: nowrap\">";
            // line 458
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["todepense"]) || array_key_exists("todepense", $context) ? $context["todepense"] : (function () { throw new RuntimeError('Variable "todepense" does not exist.', 458, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</th>
            <th style=\"text-align: right; white-space: nowrap\">";
            // line 459
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tobalance"]) || array_key_exists("tobalance", $context) ? $context["tobalance"] : (function () { throw new RuntimeError('Variable "tobalance" does not exist.', 459, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</th>
        </tr>
        </tfoot>
    </table>
";
        }
        // line 464
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 464, $this->source); })()) == "presta")) {
            // line 465
            yield "    ";
            $context["sottc"] = 0;
            // line 466
            yield "    ";
            $context["sopercu"] = 0;
            // line 467
            yield "    ";
            $context["soreste"] = 0;
            // line 468
            yield "
    <table class=\"table-bordered display nowrape\" style=\"width: 100%;\">
        <thead>
        <tr style=\"background-color:#4e73df; color:#FFF\">
            <th>PRESTATAIRES</th>
            <th>TOTAL TTC</th>
            <th>PERÇUE</th>
            <th>SOLDE TTC</th>
            <th>FONCTION</th>
            <th>CONTACTS</th>
            <th>EMAIL</th>
            <th>ADRESSE</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 483
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["prestas"]) || array_key_exists("prestas", $context) ? $context["prestas"] : (function () { throw new RuntimeError('Variable "prestas" does not exist.', 483, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["four"]) {
                // line 484
                yield "            ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["four"], "corbeille", [], "any", false, false, false, 484))) {
                    // line 485
                    yield "                ";
                    $context["ttc"] = 0;
                    // line 486
                    yield "                ";
                    $context["percu"] = 0;
                    // line 487
                    yield "                ";
                    $context["reste"] = 0;
                    // line 488
                    yield "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["four"], "bons", [], "any", false, false, false, 488));
                    foreach ($context['_seq'] as $context["_key"] => $context["bon"]) {
                        // line 489
                        yield "                    ";
                        if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "corbeille", [], "any", false, false, false, 489))) {
                            // line 490
                            yield "                        ";
                            $context["ttc"] = (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalttc", [], "any", false, false, false, 490) + (isset($context["ttc"]) || array_key_exists("ttc", $context) ? $context["ttc"] : (function () { throw new RuntimeError('Variable "ttc" does not exist.', 490, $this->source); })()));
                            // line 491
                            yield "                        ";
                            $context["percu"] = (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "recu", [], "any", false, false, false, 491) + (isset($context["percu"]) || array_key_exists("percu", $context) ? $context["percu"] : (function () { throw new RuntimeError('Variable "percu" does not exist.', 491, $this->source); })()));
                            // line 492
                            yield "                        ";
                            $context["reste"] = (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "reste", [], "any", false, false, false, 492) + (isset($context["reste"]) || array_key_exists("reste", $context) ? $context["reste"] : (function () { throw new RuntimeError('Variable "reste" does not exist.', 492, $this->source); })()));
                            // line 493
                            yield "                    ";
                        }
                        // line 494
                        yield "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['bon'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 495
                    yield "                <tr>
                    <td>";
                    // line 496
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["four"], "fournisseur", [], "any", false, false, false, 496)), "html", null, true);
                    yield "</td>
                    <td style=\"text-align: right; white-space: nowrap\">";
                    // line 497
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["ttc"]) || array_key_exists("ttc", $context) ? $context["ttc"] : (function () { throw new RuntimeError('Variable "ttc" does not exist.', 497, $this->source); })()), 2, ",", " "), "html", null, true);
                    yield "</td>
                    <td style=\"text-align: right; white-space: nowrap\">";
                    // line 498
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["percu"]) || array_key_exists("percu", $context) ? $context["percu"] : (function () { throw new RuntimeError('Variable "percu" does not exist.', 498, $this->source); })()), 2, ",", " "), "html", null, true);
                    yield "</td>
                    <td style=\"text-align: right; white-space: nowrap\">";
                    // line 499
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["reste"]) || array_key_exists("reste", $context) ? $context["reste"] : (function () { throw new RuntimeError('Variable "reste" does not exist.', 499, $this->source); })()), 2, ",", " "), "html", null, true);
                    yield "</td>
                    <td style=\"max-width:150px\">";
                    // line 500
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["four"], "fonction", [], "any", false, false, false, 500), "html", null, true);
                    yield "</td>
                    <td style=\"max-width:150px\">";
                    // line 501
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["four"], "adresse", [], "any", false, false, false, 501), "html", null, true);
                    yield "</td>
                    <td style=\"max-width:150px;\">";
                    // line 502
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["four"], "mobile", [], "any", false, false, false, 502), "html", null, true);
                    yield "</td>
                    <td style=\"max-width:150px; white-space: nowrap\">";
                    // line 503
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["four"], "mail", [], "any", false, false, false, 503), "html", null, true);
                    yield "</td>
                </tr>
                ";
                    // line 505
                    $context["sottc"] = ((isset($context["ttc"]) || array_key_exists("ttc", $context) ? $context["ttc"] : (function () { throw new RuntimeError('Variable "ttc" does not exist.', 505, $this->source); })()) + (isset($context["sottc"]) || array_key_exists("sottc", $context) ? $context["sottc"] : (function () { throw new RuntimeError('Variable "sottc" does not exist.', 505, $this->source); })()));
                    // line 506
                    yield "                ";
                    $context["sopercu"] = ((isset($context["percu"]) || array_key_exists("percu", $context) ? $context["percu"] : (function () { throw new RuntimeError('Variable "percu" does not exist.', 506, $this->source); })()) + (isset($context["sopercu"]) || array_key_exists("sopercu", $context) ? $context["sopercu"] : (function () { throw new RuntimeError('Variable "sopercu" does not exist.', 506, $this->source); })()));
                    // line 507
                    yield "                ";
                    $context["soreste"] = ((isset($context["reste"]) || array_key_exists("reste", $context) ? $context["reste"] : (function () { throw new RuntimeError('Variable "reste" does not exist.', 507, $this->source); })()) + (isset($context["soreste"]) || array_key_exists("soreste", $context) ? $context["soreste"] : (function () { throw new RuntimeError('Variable "soreste" does not exist.', 507, $this->source); })()));
                    // line 508
                    yield "            ";
                }
                // line 509
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['four'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 510
            yield "        </tbody>
        <tfoot>
        <tr>
            <th></th>
            <th style=\"text-align: right; white-space: nowrap\">";
            // line 514
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["sottc"]) || array_key_exists("sottc", $context) ? $context["sottc"] : (function () { throw new RuntimeError('Variable "sottc" does not exist.', 514, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</th>
            <th style=\"text-align: right; white-space: nowrap\">";
            // line 515
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["sopercu"]) || array_key_exists("sopercu", $context) ? $context["sopercu"] : (function () { throw new RuntimeError('Variable "sopercu" does not exist.', 515, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</th>
            <th style=\"text-align: right; white-space: nowrap\">";
            // line 516
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["soreste"]) || array_key_exists("soreste", $context) ? $context["soreste"] : (function () { throw new RuntimeError('Variable "soreste" does not exist.', 516, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        </tfoot>
    </table>
";
        }
        // line 525
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "content/attachepyth.html.twig";
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
        return array (  1254 => 525,  1242 => 516,  1238 => 515,  1234 => 514,  1228 => 510,  1222 => 509,  1219 => 508,  1216 => 507,  1213 => 506,  1211 => 505,  1206 => 503,  1202 => 502,  1198 => 501,  1194 => 500,  1190 => 499,  1186 => 498,  1182 => 497,  1178 => 496,  1175 => 495,  1169 => 494,  1166 => 493,  1163 => 492,  1160 => 491,  1157 => 490,  1154 => 489,  1149 => 488,  1146 => 487,  1143 => 486,  1140 => 485,  1137 => 484,  1133 => 483,  1116 => 468,  1113 => 467,  1110 => 466,  1107 => 465,  1105 => 464,  1097 => 459,  1093 => 458,  1089 => 457,  1085 => 456,  1081 => 455,  1073 => 449,  1067 => 448,  1064 => 447,  1061 => 446,  1055 => 445,  1050 => 442,  1047 => 441,  1044 => 440,  1041 => 439,  1038 => 438,  1035 => 437,  1033 => 436,  1027 => 434,  1025 => 433,  1021 => 432,  1017 => 431,  1013 => 430,  1009 => 429,  1003 => 427,  999 => 425,  997 => 424,  992 => 422,  988 => 421,  985 => 420,  982 => 419,  977 => 418,  974 => 417,  971 => 416,  967 => 415,  950 => 400,  947 => 399,  944 => 398,  941 => 397,  938 => 396,  935 => 395,  933 => 394,  927 => 390,  925 => 389,  917 => 384,  913 => 383,  909 => 382,  905 => 381,  901 => 380,  893 => 374,  887 => 373,  884 => 372,  881 => 371,  875 => 370,  870 => 367,  867 => 366,  864 => 365,  861 => 364,  858 => 363,  855 => 362,  853 => 361,  847 => 359,  845 => 358,  841 => 357,  837 => 356,  833 => 355,  829 => 354,  823 => 352,  819 => 350,  817 => 349,  812 => 347,  808 => 346,  805 => 345,  802 => 344,  797 => 343,  794 => 342,  791 => 341,  787 => 340,  770 => 325,  767 => 324,  764 => 323,  761 => 322,  758 => 321,  755 => 320,  753 => 319,  747 => 315,  745 => 314,  737 => 309,  733 => 308,  729 => 307,  725 => 306,  721 => 305,  713 => 299,  707 => 298,  704 => 297,  701 => 296,  695 => 295,  690 => 292,  687 => 291,  684 => 290,  681 => 289,  678 => 288,  675 => 287,  673 => 286,  667 => 284,  665 => 283,  661 => 282,  657 => 281,  653 => 280,  649 => 279,  643 => 277,  639 => 275,  637 => 274,  632 => 272,  628 => 271,  625 => 270,  622 => 269,  617 => 268,  614 => 267,  611 => 266,  607 => 265,  590 => 250,  587 => 249,  584 => 248,  581 => 247,  578 => 246,  575 => 245,  573 => 244,  567 => 240,  565 => 239,  557 => 234,  553 => 233,  549 => 232,  545 => 231,  541 => 230,  533 => 224,  527 => 223,  524 => 222,  521 => 221,  515 => 220,  510 => 217,  507 => 216,  504 => 215,  501 => 214,  498 => 213,  495 => 212,  493 => 211,  487 => 209,  485 => 208,  481 => 207,  477 => 206,  473 => 205,  469 => 204,  463 => 202,  459 => 200,  457 => 199,  452 => 197,  448 => 196,  445 => 195,  442 => 194,  437 => 193,  434 => 192,  431 => 191,  427 => 190,  412 => 177,  409 => 176,  406 => 175,  403 => 174,  400 => 173,  397 => 172,  395 => 171,  389 => 167,  387 => 166,  379 => 161,  375 => 160,  371 => 159,  367 => 158,  363 => 157,  355 => 151,  349 => 150,  346 => 149,  343 => 148,  337 => 147,  332 => 144,  329 => 143,  326 => 142,  323 => 141,  320 => 140,  317 => 139,  315 => 138,  309 => 136,  307 => 135,  303 => 134,  299 => 133,  295 => 132,  291 => 131,  285 => 129,  281 => 127,  279 => 126,  274 => 124,  270 => 123,  267 => 122,  264 => 121,  259 => 120,  256 => 119,  253 => 118,  249 => 117,  234 => 104,  231 => 103,  228 => 102,  225 => 101,  222 => 100,  219 => 99,  217 => 98,  211 => 94,  209 => 93,  204 => 90,  195 => 87,  191 => 86,  187 => 85,  183 => 84,  179 => 83,  175 => 82,  172 => 81,  168 => 80,  153 => 67,  151 => 66,  146 => 63,  140 => 62,  137 => 61,  131 => 58,  127 => 57,  123 => 56,  119 => 55,  115 => 54,  112 => 53,  109 => 52,  106 => 51,  102 => 50,  88 => 38,  86 => 37,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html ; charset=utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Carlinbleu | Gestion et Suivi de Chantier</title>
    <meta content=\"no-cache, no-store, must-revalidate, post-check=0, pre-check=0\"/>
    <meta name=\"description\" content=\"Votre application multi-utilisateurs de gestion de chantiers: Comptabilité, Gestion technique, Suivi et gestion de matériel,
         Gestion des articles, Planning, Gestionnaire de stock, etc.\">
    <meta name=\"keywords\"
          content=\"carlinbleu, carlin bleu, carlin, gestion , projet, chantier, comptabilité, gestion technique, suivi , gestion de matériel, gestion de chantiersgestionnaire de projets, articles , matériels\">
    <meta name=\"author\" content=\"carlinGroup\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"https://www.carlinbleu.com/img/Icon-96.png\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css\"/>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

</head>
<body>
<style>
    body {
        font-size: 12px !important;
        background-color: #FFF;
    }

    td, th {
        padding: 5px !important;
    }

</style>


{% if type == 'clients' %}
    <p style=\"font-size: 16px; font-weight: bold; color: #4e73df\">CLIENTS</p>
    <table class=\"table-bordered display nowrape\" style=\"width: 100%;\">
        <thead>
        <tr style=\"background-color: #cfe2f3\">
            <th>CLIENTS</th>
            <th>EMAIL</th>
            <th>ADRESSE</th>
            <th>CONTACTS</th>
            <th>COMPTE&nbsp;CONTRIBUABLE</th>
        </tr>
        </thead>
        <tbody>
        {% for client in clients %}
            {% if client.type is null %}
                {% if client.corbeille is null %}
                    <tr>
                        <td>{{ client.nomclient|upper }}</td>
                        <td style=\"max-width:200px; white-space: nowrap\">{{ client.mail }}</td>
                        <td style=\"max-width:150px\">{{ client.adresse }}</td>
                        <td style=\"max-width:150px;\">{{ client.contact }}</td>
                        <td style=\"max-width:150px; white-space: nowrap\">{{ client.contribuable }}</td>
                    </tr>
                {% endif %}
            {% endif %}
        {% endfor %}
        </tbody>
    </table>
{% endif %}
{% if type == 'contacts' %}
    <p style=\"font-size: 16px; font-weight: bold; color: #4e73df\">CONTACTS</p>
    <table class=\"table-bordered display nowrape\" style=\"width: 100%;\">
        <thead>
        <tr style=\"background-color: #cfe2f3\">
            <th>CLIENTS</th>
            <th>CONTACTS</th>
            <th>FONCTION</th>
            <th>EMAIL</th>
            <th>TÉLÉPHONE MOBILE</th>
            <th>TÉLÉPHONE BUREAU</th>
        </tr>
        </thead>
        <tbody>
        {% for contact in contacts %}
            <tr>
                <td class=\"bolo700 col-blue\">{{ contact.client.nomClient|upper }}</td>
                <td>{{ contact.contact }}</td>
                <td>{{ contact.fonction }}</td>
                <td>{{ contact.mail }}</td>
                <td>{{ contact.phone }}</td>
                <td>{{ contact.bureau }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endif %}
{% if type == 'encours' %}
    <table class=\"table-striped table-bordered display nowrape\"
           style=\"width:100%\">


        {% set solde = 0 %}
        {% set tocout = 0 %}
        {% set toregle = 0 %}
        {% set tosolde = 0 %}
        {% set todepense = 0 %}
        {% set tobalance = 0 %}
        <thead>
        <tr class=\"font-weight-normal\">
            <th style=\"min-width: 30px !important;\"></th>
            <th class=\"col-blue-grey\">CHANTIERS EN COURS</th>
            <th class=\"text-center col-blue-grey\">CLIENT</th>
            <th class=\"text-center col-blue-grey\">COÛT</th>
            <th class=\"text-center col-blue-grey\">RÈGLEMENT</th>
            <th class=\"text-center col-blue-grey\">SOLDE</th>
            <th class=\"text-center col-blue-grey\">COMMANDES</th>
            <th class=\"text-center col-blue-grey\">BALANCE</th>
        </tr>
        </thead>
        <tbody>
        {% for client in clients %}
            {% if client.type is null %}
                {% if client.corbeille is null %}
                    {% for chantier in client.chantiers %}
                        {% if chantier.corbeille is null  and chantier.etat == \"encours\" %}
                            <tr>
                                <td style=\"text-align: center; white-space: nowrap\">{{ chantier.progression|number_format(2,',',' ') }}%</td>
                                <td style=\"max-width: 200px; font-weight: bold\">{{ client.nomclient|upper }}</td>
                                <td style=\"max-width: 200px; font-weight: bold\">
                                    {% if chantier.sous is not null %}
                                        <span class=\"badge bg-orange\">SC</span>
                                    {% endif %}
                                    {{ chantier.nomchantier }}
                                </td>
                                <td style=\"text-align: right; white-space: nowrap\">{{ chantier.cout|number_format(2,',',' ') }}</td>
                                <td style=\"text-align: right; white-space: nowrap\">{{ chantier.reglement|number_format(2,',',' ') }}</td>
                                <td style=\"text-align: right; white-space: nowrap\">{{ solde|number_format(2,',',' ') }}</td>
                                <td style=\"text-align: right; white-space: nowrap\">{{ chantier.depense|number_format(2,',',' ') }}</td>
                                {% set balance = chantier.reglement|number_format(2,'.','') -  chantier.depense|number_format(2,'.','') %}
                                <td style=\"text-align: right; white-space: nowrap\">{{ balance|number_format(2,',',' ') }}</td>

                                {% set solde  = chantier.cout - chantier.reglement %}
                                {% set tocout  = chantier.cout + tocout %}
                                {% set toregle  = chantier.reglement + toregle %}
                                {% set tosolde  = solde + tosolde %}
                                {% set todepense  = chantier.depense + todepense %}
                                {% set tobalance  = balance + tobalance %}

                            </tr>
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
            <th style=\"text-align: right; white-space: nowrap\">{{ tocout|number_format(2,',',' ') }}</th>
            <th style=\"text-align: right; white-space: nowrap\">{{ toregle|number_format(2,',',' ') }}</th>
            <th style=\"text-align: right; white-space: nowrap\">{{ tosolde|number_format(2,',',' ') }}</th>
            <th style=\"text-align: right; white-space: nowrap\">{{ todepense|number_format(2,',',' ') }}</th>
            <th style=\"text-align: right; white-space: nowrap\">{{ tobalance|number_format(2,',',' ') }}</th>
        </tr>
        </tfoot>
    </table>
{% endif %}
{% if type == 'etude' %}
    <table class=\"table-striped table-bordered display nowrape\"
           style=\"width:100%\">


        {% set solde = 0 %}
        {% set tocout = 0 %}
        {% set toregle = 0 %}
        {% set tosolde = 0 %}
        {% set todepense = 0 %}
        {% set tobalance = 0 %}
        <thead>
        <tr class=\"font-weight-normal\">
            <th style=\"min-width: 30px !important;\"></th>
            <th class=\"col-blue-grey\">CHANTIERS EN ÉTUDE</th>
            <th class=\"text-center col-blue-grey\">CLIENT</th>
            <th class=\"text-center col-blue-grey\">COÛT</th>
            <th class=\"text-center col-blue-grey\">RÈGLEMENT</th>
            <th class=\"text-center col-blue-grey\">SOLDE</th>
            <th class=\"text-center col-blue-grey\">COMMANDES</th>
            <th class=\"text-center col-blue-grey\">BALANCE</th>
        </tr>
        </thead>
        <tbody>
        {% for client in clients %}
            {% if client.type is null %}
                {% if client.corbeille is null %}
                    {% for chantier in client.chantiers %}
                        {% if chantier.corbeille is null  and chantier.etat == \"etude\" %}
                            <tr>
                                <td style=\"text-align: center; white-space: nowrap\">{{ chantier.progression|number_format(2,',',' ') }}%</td>
                                <td style=\"max-width: 200px; font-weight: bold\">{{ client.nomclient|upper }}</td>
                                <td style=\"max-width: 200px; font-weight: bold\">
                                    {% if chantier.sous is not null %}
                                        <span class=\"badge bg-orange\">SC</span>
                                    {% endif %}
                                    {{ chantier.nomchantier }}
                                </td>
                                <td style=\"text-align: right; white-space: nowrap\">{{ chantier.cout|number_format(2,',',' ') }}</td>
                                <td style=\"text-align: right; white-space: nowrap\">{{ chantier.reglement|number_format(2,',',' ') }}</td>
                                <td style=\"text-align: right; white-space: nowrap\">{{ solde|number_format(2,',',' ') }}</td>
                                <td style=\"text-align: right; white-space: nowrap\">{{ chantier.depense|number_format(2,',',' ') }}</td>
                                {% set balance = chantier.reglement|number_format(2,'.','') -  chantier.depense|number_format(2,'.','') %}
                                <td style=\"text-align: right; white-space: nowrap\">{{ balance|number_format(2,',',' ') }}</td>

                                {% set solde  = chantier.cout - chantier.reglement %}
                                {% set tocout  = chantier.cout + tocout %}
                                {% set toregle  = chantier.reglement + toregle %}
                                {% set tosolde  = solde + tosolde %}
                                {% set todepense  = chantier.depense + todepense %}
                                {% set tobalance  = balance + tobalance %}

                            </tr>
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
            <th style=\"text-align: right; white-space: nowrap\">{{ tocout|number_format(2,',',' ') }}</th>
            <th style=\"text-align: right; white-space: nowrap\">{{ toregle|number_format(2,',',' ') }}</th>
            <th style=\"text-align: right; white-space: nowrap\">{{ tosolde|number_format(2,',',' ') }}</th>
            <th style=\"text-align: right; white-space: nowrap\">{{ todepense|number_format(2,',',' ') }}</th>
            <th style=\"text-align: right; white-space: nowrap\">{{ tobalance|number_format(2,',',' ') }}</th>
        </tr>
        </tfoot>
    </table>
{% endif %}
{% if type == 'echouer' %}
    <table class=\"table-striped table-bordered display nowrape\"
           style=\"width:100%\">


        {% set solde = 0 %}
        {% set tocout = 0 %}
        {% set toregle = 0 %}
        {% set tosolde = 0 %}
        {% set todepense = 0 %}
        {% set tobalance = 0 %}


        <thead>
        <tr class=\"font-weight-normal\">
            <th style=\"min-width: 30px !important;\"></th>
            <th class=\"col-blue-grey\">CHANTIERS ÉCHOUÉS</th>
            <th class=\"text-center col-blue-grey\">CLIENT</th>
            <th class=\"text-center col-blue-grey\">COÛT</th>
            <th class=\"text-center col-blue-grey\">RÈGLEMENT</th>
            <th class=\"text-center col-blue-grey\">SOLDE</th>
            <th class=\"text-center col-blue-grey\">COMMANDES</th>
            <th class=\"text-center col-blue-grey\">BALANCE</th>
        </tr>
        </thead>
        <tbody>
        {% for client in clients %}
            {% if client.type is null %}
                {% if client.corbeille is null %}
                    {% for chantier in client.chantiers %}
                        {% if chantier.corbeille is null  and chantier.etat == \"echouer\" %}
                            <tr>
                                <td style=\"text-align: center; white-space: nowrap\">{{ chantier.progression|number_format(2,',',' ') }}%</td>
                                <td style=\"max-width: 200px; font-weight: bold\">{{ client.nomclient|upper }}</td>
                                <td style=\"max-width: 200px; font-weight: bold\">
                                    {% if chantier.sous is not null %}
                                        <span class=\"badge bg-orange\">SC</span>
                                    {% endif %}
                                    {{ chantier.nomchantier }}
                                </td>
                                <td style=\"text-align: right; white-space: nowrap\">{{ chantier.cout|number_format(2,',',' ') }}</td>
                                <td style=\"text-align: right; white-space: nowrap\">{{ chantier.reglement|number_format(2,',',' ') }}</td>
                                <td style=\"text-align: right; white-space: nowrap\">{{ solde|number_format(2,',',' ') }}</td>
                                <td style=\"text-align: right; white-space: nowrap\">{{ chantier.depense|number_format(2,',',' ') }}</td>
                                {% set balance = chantier.reglement|number_format(2,'.','') -  chantier.depense|number_format(2,'.','') %}
                                <td style=\"text-align: right; white-space: nowrap\">{{ balance|number_format(2,',',' ') }}</td>

                                {% set solde  = chantier.cout - chantier.reglement %}
                                {% set tocout  = chantier.cout + tocout %}
                                {% set toregle  = chantier.reglement + toregle %}
                                {% set tosolde  = solde + tosolde %}
                                {% set todepense  = chantier.depense + todepense %}
                                {% set tobalance  = balance + tobalance %}

                            </tr>
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
            <th style=\"text-align: right; white-space: nowrap\">{{ tocout|number_format(2,',',' ') }}</th>
            <th style=\"text-align: right; white-space: nowrap\">{{ toregle|number_format(2,',',' ') }}</th>
            <th style=\"text-align: right; white-space: nowrap\">{{ tosolde|number_format(2,',',' ') }}</th>
            <th style=\"text-align: right; white-space: nowrap\">{{ todepense|number_format(2,',',' ') }}</th>
            <th style=\"text-align: right; white-space: nowrap\">{{ tobalance|number_format(2,',',' ') }}</th>
        </tr>
        </tfoot>
    </table>
{% endif %}
{% if type == 'terminer' %}
    <table class=\"table-striped table-bordered display nowrape\"
           style=\"width:100%\">


        {% set solde = 0 %}
        {% set tocout = 0 %}
        {% set toregle = 0 %}
        {% set tosolde = 0 %}
        {% set todepense = 0 %}
        {% set tobalance = 0 %}


        <thead>
        <tr class=\"font-weight-normal\">
            <th style=\"min-width: 30px !important;\"></th>
            <th class=\"col-blue-grey\">CHANTIERS TERMINÉS</th>
            <th class=\"text-center col-blue-grey\">CLIENT</th>
            <th class=\"text-center col-blue-grey\">COÛT</th>
            <th class=\"text-center col-blue-grey\">RÈGLEMENT</th>
            <th class=\"text-center col-blue-grey\">SOLDE</th>
            <th class=\"text-center col-blue-grey\">COMMANDES</th>
            <th class=\"text-center col-blue-grey\">BALANCE</th>
        </tr>
        </thead>
        <tbody>
        {% for client in clients %}
            {% if client.type is null %}
                {% if client.corbeille is null %}
                    {% for chantier in client.chantiers %}
                        {% if chantier.corbeille is null  and chantier.etat == \"archiver\" %}
                            <tr>
                                <td style=\"text-align: center; white-space: nowrap\">{{ chantier.progression|number_format(2,',',' ') }}%</td>
                                <td style=\"max-width: 200px; font-weight: bold\">{{ client.nomclient|upper }}</td>
                                <td style=\"max-width: 200px; font-weight: bold\">
                                    {% if chantier.sous is not null %}
                                        <span class=\"badge bg-orange\">SC</span>
                                    {% endif %}
                                    {{ chantier.nomchantier }}
                                </td>
                                <td style=\"text-align: right; white-space: nowrap\">{{ chantier.cout|number_format(2,',',' ') }}</td>
                                <td style=\"text-align: right; white-space: nowrap\">{{ chantier.reglement|number_format(2,',',' ') }}</td>
                                <td style=\"text-align: right; white-space: nowrap\">{{ solde|number_format(2,',',' ') }}</td>
                                <td style=\"text-align: right; white-space: nowrap\">{{ chantier.depense|number_format(2,',',' ') }}</td>
                                {% set balance = chantier.reglement|number_format(2,'.','') -  chantier.depense|number_format(2,'.','') %}
                                <td style=\"text-align: right; white-space: nowrap\">{{ balance|number_format(2,',',' ') }}</td>

                                {% set solde  = chantier.cout - chantier.reglement %}
                                {% set tocout  = chantier.cout + tocout %}
                                {% set toregle  = chantier.reglement + toregle %}
                                {% set tosolde  = solde + tosolde %}
                                {% set todepense  = chantier.depense + todepense %}
                                {% set tobalance  = balance + tobalance %}

                            </tr>
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
            <th style=\"text-align: right; white-space: nowrap\">{{ tocout|number_format(2,',',' ') }}</th>
            <th style=\"text-align: right; white-space: nowrap\">{{ toregle|number_format(2,',',' ') }}</th>
            <th style=\"text-align: right; white-space: nowrap\">{{ tosolde|number_format(2,',',' ') }}</th>
            <th style=\"text-align: right; white-space: nowrap\">{{ todepense|number_format(2,',',' ') }}</th>
            <th style=\"text-align: right; white-space: nowrap\">{{ tobalance|number_format(2,',',' ') }}</th>
        </tr>
        </tfoot>
    </table>
{% endif %}
{% if type == 'clotures' %}
    <table class=\"table-striped table-bordered display nowrape\"
           style=\"width:100%\">


        {% set solde = 0 %}
        {% set tocout = 0 %}
        {% set toregle = 0 %}
        {% set tosolde = 0 %}
        {% set todepense = 0 %}
        {% set tobalance = 0 %}


        <thead>
        <tr class=\"font-weight-normal\">
            <th style=\"min-width: 30px !important;\"></th>
            <th class=\"col-blue-grey\">CHANTIERS CLÔTURÉS</th>
            <th class=\"text-center col-blue-grey\">CLIENT</th>
            <th class=\"text-center col-blue-grey\">COÛT</th>
            <th class=\"text-center col-blue-grey\">RÈGLEMENT</th>
            <th class=\"text-center col-blue-grey\">SOLDE</th>
            <th class=\"text-center col-blue-grey\">COMMANDES</th>
            <th class=\"text-center col-blue-grey\">BALANCE</th>
        </tr>
        </thead>
        <tbody>
        {% for client in clients %}
            {% if client.type is null %}
                {% if client.corbeille is null %}
                    {% for chantier in client.chantiers %}
                        {% if chantier.corbeille is null  and chantier.etat == \"cloturer\" %}
                            <tr>
                                <td style=\"text-align: center; white-space: nowrap\">{{ chantier.progression|number_format(2,',',' ') }}%</td>
                                <td style=\"max-width: 200px; font-weight: bold\">{{ client.nomclient|upper }}</td>
                                <td style=\"max-width: 200px; font-weight: bold\">
                                    {% if chantier.sous is not null %}
                                        <span class=\"badge bg-orange\">SC</span>
                                    {% endif %}
                                    {{ chantier.nomchantier }}
                                </td>
                                <td style=\"text-align: right; white-space: nowrap\">{{ chantier.cout|number_format(2,',',' ') }}</td>
                                <td style=\"text-align: right; white-space: nowrap\">{{ chantier.reglement|number_format(2,',',' ') }}</td>
                                <td style=\"text-align: right; white-space: nowrap\">{{ solde|number_format(2,',',' ') }}</td>
                                <td style=\"text-align: right; white-space: nowrap\">{{ chantier.depense|number_format(2,',',' ') }}</td>
                                {% set balance = chantier.reglement|number_format(2,'.','') -  chantier.depense|number_format(2,'.','') %}
                                <td style=\"text-align: right; white-space: nowrap\">{{ balance|number_format(2,',',' ') }}</td>

                                {% set solde  = chantier.cout - chantier.reglement %}
                                {% set tocout  = chantier.cout + tocout %}
                                {% set toregle  = chantier.reglement + toregle %}
                                {% set tosolde  = solde + tosolde %}
                                {% set todepense  = chantier.depense + todepense %}
                                {% set tobalance  = balance + tobalance %}

                            </tr>
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
            <th style=\"text-align: right; white-space: nowrap\">{{ tocout|number_format(2,',',' ') }}</th>
            <th style=\"text-align: right; white-space: nowrap\">{{ toregle|number_format(2,',',' ') }}</th>
            <th style=\"text-align: right; white-space: nowrap\">{{ tosolde|number_format(2,',',' ') }}</th>
            <th style=\"text-align: right; white-space: nowrap\">{{ todepense|number_format(2,',',' ') }}</th>
            <th style=\"text-align: right; white-space: nowrap\">{{ tobalance|number_format(2,',',' ') }}</th>
        </tr>
        </tfoot>
    </table>
{% endif %}
{% if type == 'presta' %}
    {% set sottc = 0 %}
    {% set sopercu = 0 %}
    {% set soreste = 0 %}

    <table class=\"table-bordered display nowrape\" style=\"width: 100%;\">
        <thead>
        <tr style=\"background-color:#4e73df; color:#FFF\">
            <th>PRESTATAIRES</th>
            <th>TOTAL TTC</th>
            <th>PERÇUE</th>
            <th>SOLDE TTC</th>
            <th>FONCTION</th>
            <th>CONTACTS</th>
            <th>EMAIL</th>
            <th>ADRESSE</th>
        </tr>
        </thead>
        <tbody>
        {% for four in prestas %}
            {% if four.corbeille is null %}
                {% set ttc = 0 %}
                {% set percu = 0 %}
                {% set reste = 0 %}
                {% for bon in four.bons %}
                    {% if bon.corbeille is null %}
                        {% set ttc = bon.totalttc + ttc %}
                        {% set percu = bon.recu + percu %}
                        {% set reste = bon.reste + reste %}
                    {% endif %}
                {% endfor %}
                <tr>
                    <td>{{ four.fournisseur|upper }}</td>
                    <td style=\"text-align: right; white-space: nowrap\">{{ ttc|number_format(2,',',' ') }}</td>
                    <td style=\"text-align: right; white-space: nowrap\">{{ percu|number_format(2,',',' ') }}</td>
                    <td style=\"text-align: right; white-space: nowrap\">{{ reste|number_format(2,',',' ') }}</td>
                    <td style=\"max-width:150px\">{{ four.fonction }}</td>
                    <td style=\"max-width:150px\">{{ four.adresse }}</td>
                    <td style=\"max-width:150px;\">{{ four.mobile }}</td>
                    <td style=\"max-width:150px; white-space: nowrap\">{{ four.mail }}</td>
                </tr>
                {% set sottc = ttc + sottc %}
                {% set sopercu = percu + sopercu %}
                {% set soreste = reste + soreste %}
            {% endif %}
        {% endfor %}
        </tbody>
        <tfoot>
        <tr>
            <th></th>
            <th style=\"text-align: right; white-space: nowrap\">{{ sottc|number_format(2,',',' ') }}</th>
            <th style=\"text-align: right; white-space: nowrap\">{{ sopercu|number_format(2,',',' ') }}</th>
            <th style=\"text-align: right; white-space: nowrap\">{{ soreste|number_format(2,',',' ') }}</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        </tfoot>
    </table>
{% endif %}

<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
</body>
</html>
", "content/attachepyth.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\attachepyth.html.twig");
    }
}
