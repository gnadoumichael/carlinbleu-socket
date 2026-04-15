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

/* content/devis.html.twig */
class __TwigTemplate_737e19ad05f24b4e60a5235675ada383 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/devis.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/devis.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html ; charset=utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Carlinbleu | Gestion et Suivi de Chantier</title>
    <meta content=\"no-cache, no-store, must-revalidate, post-check=0, pre-check=0\"/>
    <meta name=\"description\"
          content=\"Votre application multi-utilisateurs de gestion de chantiers: Comptabilité, Gestion technique, Suivi et gestion de matériel,Gestion des articles, Planning, Gestionnaire de stock, etc.\">
    <meta name=\"keywords\"
          content=\"carlinbleu, carlin bleu, carlin, gestion , projet, chantier, comptabilité, gestion technique, suivi , gestion de matériel, gestion de chantiersgestionnaire de projets, articles , showroom , matériels\">
    <meta name=\"author\" content=\"carlinGroup\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"https://www.carlinbleu.com/img/Icon-96.png\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css\"/>

    ";
        // line 20
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("apdevis");
        yield "

</head>
<body class=\"theme-red\" style=\"background-color: #d1d3e2 !important;\" id=\"bod\">
<style>
    .bood {
        position: relative;
        width: 100%;
        height: ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((30 - CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 28, $this->source); })()), "headerHeight", [], "any", false, false, false, 28)) - CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 28, $this->source); })()), "footerHeight", [], "any", false, false, false, 28)), "html", null, true);
        yield "cm;
        padding-left: 1cm;
        padding-right: 1cm;
        overflow-y: scroll;
    }

    .footer {
        height: ";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 35, $this->source); })()), "footerHeight", [], "any", false, false, false, 35), "html", null, true);
        yield "cm;
        bottom: 0;
    }

    .header {
        height: ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 40, $this->source); })()), "headerHeight", [], "any", false, false, false, 40), "html", null, true);
        yield "cm;
        -webkit-print-color-adjust: exact;
        top: 0;
    }

    @media print {
        .footer-space {
            height: ";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 47, $this->source); })()), "footerHeight", [], "any", false, false, false, 47), "html", null, true);
        yield "cm;
        }

        .header-space {
            height: ";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 51, $this->source); })()), "headerHeight", [], "any", false, false, false, 51), "html", null, true);
        yield "cm;
            margin-top: ";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 52, $this->source); })()), "teteDH", [], "any", false, false, false, 52), "html", null, true);
        yield "cm;
            -webkit-print-color-adjust: exact;
        }

        .header {
            position: fixed;
            top: 0;
            -webkit-print-color-adjust: exact;
        }

        .footer {
            position: fixed;
            bottom: 0;
        }

        th {
            background-color: ";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 68, $this->source); })()), "decolor", [], "any", false, false, false, 68), "html", null, true);
        yield " !important;
            color: ";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 69, $this->source); })()), "decolortex", [], "any", false, false, false, 69), "html", null, true);
        yield " !important;
        }

        table {
            border-spacing: 0;
            border-collapse: collapse;
            font-size: ";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 75, $this->source); })()), "dsize", [], "any", false, false, false, 75), "html", null, true);
        yield "px;
            font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
        }

    }
</style>
<style>
    .kop {
        font-weight: 700
    }

    table {
        border-spacing: 0;
        border-collapse: collapse;
        font-size: ";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 89, $this->source); })()), "dsize", [], "any", false, false, false, 89), "html", null, true);
        yield "px;
        font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
    }

    .togo {
        background-color: #EAEDED !important;
        font-size: ";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 95, $this->source); })()), "dsize", [], "any", false, false, false, 95), "html", null, true);
        yield "px;
        font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
    }

    td.borde {
        border-spacing: 0;
        border-collapse: collapse;
        border: solid #D3D3D3;
        border-width: 1px 1px 1px 1px !important;
        padding: 4px !important;
        font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
    }

    td.barder {
        border-spacing: 0;
        border-collapse: collapse;
        border: solid #D3D3D3;
        border-width: 0 1px 1px 0 !important;
        padding: 4px !important;
        font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
    }

    tr.printer {
        background-color: ";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 118, $this->source); })()), "decolor", [], "any", false, false, false, 118), "html", null, true);
        yield " !important;
        color: ";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 119, $this->source); })()), "decolortex", [], "any", false, false, false, 119), "html", null, true);
        yield " !important;
        text-align: center;
    }

    tr.printa {
        background-color: ";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 124, $this->source); })()), "decolor", [], "any", false, false, false, 124), "html", null, true);
        yield " !important;
        color: ";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 125, $this->source); })()), "decolortex", [], "any", false, false, false, 125), "html", null, true);
        yield " !important;
        text-align: center;
    }

    th.borde {
        border: solid #D3D3D3;
        border-width: 1px 1px 1px 1px;
        padding: 5px 15px 5px 15px;
    }

    th.barde {
        border: solid #D3D3D3;
        border-width: 0 1px 0 0;
        padding: 5px;
    }

    th.bor {
        border: solid #D3D3D3;
        border-width: 1px 1px 1px 1px;
        padding: 5px;
    }

    td.bordz {
        border: 0 solid #FFFFFF !important;
        padding: 0 0 0 5px !important;
    }

    #modif td {
        border: none !important;
    }

    .pp100 {
        padding: 10px !important;
    }

</style>

<div class=\"modal fade\" id=\"ModalSearch\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title text-center\" id=\"defaultModalLabel\">RECHERCHER<br>
                    <span class=\"col-pink\" style=\"font-size: 14px; \">Chantier- Devis - Bon de commande - Bon de livraison - Facture - Bon de caisse</span>
                </h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher...\" id=\"richi\"
                           style=\"border: 2px solid dodgerblue; padding: 10px\"/>
                </div>
                <div id=\"ressult\" style=\"width: 100%; align-content: start\" class=\"text-left\"></div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-link waves-effect\" data-dismiss=\"modal\">FERMER</button>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"ModalErreur\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-sm modal-notify\" role=\"document\">
        <div class=\"modal-content text-center\">
            <div class=\"modal-header d-flex justify-content-center bg-pink\">
                <h4 class=\"bolo700\">
                    ERREUR
                </h4>
            </div>
            <div class=\"modal-body\" style=\"height: 120px !important;\">
                <i class=\"fas fa-exclamation-triangle fa-4x animated rotateIn col-pink\"></i>
                <h4 class=\"col-black\">
                    IMPOSSIBLE DE TRAITER VOTRE REQUÊTE
                </h4>
            </div>
            <div class=\"text-center\">
                <div type=\"button\" id=\"closeLier\" class=\"btn btn-link waves-effect text-white bg-pink\"
                     data-dismiss=\"modal\">
                    FERMER
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"ModalErrCai\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-sm modal-notify\" role=\"document\">
        <div class=\"modal-content text-center\">
            <div class=\"modal-header d-flex justify-content-center bg-pink\">
                <h4 class=\"bolo700\">
                    ERREUR
                </h4>
            </div>
            <div class=\"modal-body\">
                <i class=\"fas fa-exclamation-triangle fa-4x animated rotateIn col-pink\"></i>
                <h4 class=\"col-black\">
                    VEUILLEZ SVP SUPPRIMER LES BONS DE CAISSE CRÉES
                </h4>
            </div>
            <div class=\"text-center\">
                <div type=\"button\" id=\"closeLier\" class=\"btn btn-link waves-effect text-white bg-pink\"
                     data-dismiss=\"modal\">
                    FERMER
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"ModalErrInterve\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-sm modal-notify\" role=\"document\">
        <div class=\"modal-content text-center\">
            <div class=\"modal-header d-flex justify-content-center bg-pink\">
                <h4 class=\"bolo700\">
                    ERREUR
                </h4>
            </div>
            <div class=\"modal-body\">
                <i class=\"fas fa-exclamation-triangle fa-4x animated rotateIn col-pink\"></i>
                <h4 class=\"col-black\">
                    MONTANT À PAYER INFÉRIEUR AU MONTANT DÉJÀ RECU.
                </h4>
            </div>
            <div class=\"text-center\">
                <div type=\"button\" id=\"closeLier\" class=\"btn btn-link waves-effect text-white bg-pink\"
                     data-dismiss=\"modal\">
                    FERMER
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"ModalErreurDEVIS\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-sm modal-notify\" role=\"document\">
        <div class=\"modal-content text-center\">
            <div class=\"modal-header d-flex justify-content-center bg-pink\">
                <h4 class=\"bolo700\">
                    ERREUR
                </h4>
            </div>
            <div class=\"modal-body\">
                <i class=\"fa fa-exclamation-circle fa-4x animated rotateIn col-pink\"></i>
                <h4 class=\"col-pink\">
                    DES OPÉRATIONS ONT ÉTÉ FAITS SUR CE DEVIS. VEUILLEZ SVP LES DÉVALIDER ÉGALEMENT.
                </h4>
            </div>
            <div class=\"text-center\">
                <div type=\"button\" id=\"closeLier\" class=\"btn btn-link waves-effect text-white bg-pink\"
                     data-dismiss=\"modal\">
                    FERMER
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"ModalSucces\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-sm modal-notify\" role=\"document\">
        <div class=\"modal-content text-center\">
            <div class=\"modal-header d-flex justify-content-center bg-green\">
                <h4>
                    REQUÊTE ACCEPTÉE
                </h4>
            </div>
            <div class=\"modal-body\">
                <i class=\"fas fa-check-circle fa-4x animated rotateIn col-green\"></i>
                <h4 class=\"col-green\">
                    VALIDATION EN COURS ....
                </h4>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"Traitement\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-sm modal-notify\" role=\"document\">
        <div class=\"modal-content text-center\">
            <div class=\"modal-header d-flex justify-content-center bg-primary\">
                <h4 class=\"font-bold\">
                    TRAITEMENT
                </h4>
            </div>
            <div class=\"modal-body p-t-25\" style=\"height: 100px !important;\">
                <div class=\"preloader\">
                    <div class=\"spinner-layer pl-blue\">
                        <div class=\"circle-clipper left\">
                            <div class=\"circle\"></div>
                        </div>
                        <div class=\"circle-clipper right\">
                            <div class=\"circle\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"ConfirmDelete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-sm modal-notify\" role=\"document\">
        <div class=\"modal-content text-center\">
            <div class=\"modal-header d-flex justify-content-center bg-pink\">
                <h4 class=\"bolo700\">
                    ÊTES VOUS SUR ?
                </h4>
            </div>
            <div class=\"modal-body\" style=\"height: 100px !important;\">
                <i class=\"fas fa-times fa-4x animated rotateIn col-pink\"></i>
            </div>
            <div class=\"text-center\">
                <div type=\"button\" id=\"accept\" class=\"btn btn-link waves-effect text-white bg-primary\">
                    OUI
                </div>
                <div type=\"button\" id=\"closeLier\" class=\"btn btn-link waves-effect text-white bg-pink\"
                     data-dismiss=\"modal\">
                    NON
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"ConfirmDevaDevis\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-sm modal-notify\" role=\"document\">
        <div class=\"modal-content text-center\">
            <div class=\"modal-header d-flex justify-content-center bg-blue\">
                <h4>DES OPÉRATIONS PEUVENT ÊTRE LIÉES À CE DEVIS.</h4>
                <h4>CONTINUER ?</h4>
            </div>
            <div class=\"modal-body\">
                <i class=\"fa fa-exclamation-circle col-deep-orange\" style=\"font-size: 50px\"></i>
            </div>
            <div class=\"text-center\">
                <div type=\"button\" id=\"acceptDeva\" class=\"btn btn-link waves-effect text-white bg-primary\">
                    OUI
                </div>
                <div type=\"button\" id=\"closeDeva\" class=\"btn btn-link waves-effect text-white bg-pink\"
                     data-dismiss=\"modal\">
                    NON
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"large\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"shadow bg-white devtohide\"
                 style=\"height:29.7cm; margin: auto; padding: 0.6cm;\" id=\"shacontent\">
                <iframe id=\"frame\" src=\"\" style=\"width: 100%; height: 100%; border: none;\"></iframe>
            </div>
        </div>
    </div>
</div>

<nav class=\"navbar bg-blue\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <a href=\"javascript:void(0);\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
               data-target=\"#navbar-collapse\" aria-expanded=\"false\"></a>
            <a href=\"javascript:void(0);\" class=\"bars\"></a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"navbar-collapse\">
            <ul class=\"nav navbar-nav navbar-right m-t-5\">
                ";
        // line 389
        if ((($tmp =  !array_key_exists("libre", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 390
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 390, $this->source); })()), "user", [], "any", false, false, false, 390)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 391
                yield "                        <li class=\"col-yellow h4 bolo600 m-l-20\">
                            ";
                // line 392
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 392, $this->source); })()), "user", [], "any", false, false, false, 392), "nom", [], "any", false, false, false, 392)), "html", null, true);
                yield "
                            ";
                // line 393
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 393, $this->source); })()), "user", [], "any", false, false, false, 393), "prenoms", [], "any", false, false, false, 393)), "html", null, true);
                yield "
                        </li>
                    ";
            }
            // line 396
            yield "                ";
        }
        // line 397
        yield "
                ";
        // line 398
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 398, $this->source); })()), "user", [], "any", false, false, false, 398)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 399
            yield "                    ";
            if (( !array_key_exists("libre", $context) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 399, $this->source); })()), "user", [], "any", false, false, false, 399))) {
                // line 400
                yield "                        <li class=\"hidere\"><a href=\"javascript:void(0);\" data-close=\"true\">
                           <span class=\"js-right-sidebars badge bg-purple\">CHANTIERS EN ÉTUDE</span></a>
                        </li>
                        <li class=\"hidere\"><a href=\"javascript:void(0);\" data-close=\"true\">
                           <span class=\"js-right-sidebar badge bg-pink\">CHANTIERS EN COURS</span></a>
                        </li>
                        <li class=\"dropdown\">
                        <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\">
                            <i class=\"material-icons\">notifications</i>
                        </a>
                        <ul class=\"dropdown-menu bg-light\" style=\"width: 370px !important\">
                            <li class=\"header col-pink\" style=\"font-size: 16px\">ACTIONS</li>
                            <li class=\"body\">
                                <ul class=\"menu\" style=\"width: 340px !important\">
                                    ";
                // line 414
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["history"]);
                foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                    // line 415
                    yield "                                        <li>
                                            <a href=\"javascript:void(0);\">
                                                <div class=\"menu-info\">
                                                    <h5 class=\"col-indigo font-weight-bold\">";
                    // line 418
                    yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["history"], "action", [], "any", false, false, false, 418));
                    yield "</h5>
                                                    <h5 class=\"col-pink font-weight-bold\">
                                                        Par: ";
                    // line 420
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["history"], "dobyuser", [], "any", false, false, false, 420), "nom", [], "any", false, false, false, 420)), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["history"], "dobyuser", [], "any", false, false, false, 420), "prenoms", [], "any", false, false, false, 420)), "html", null, true);
                    yield "</h5>
                                                    <p class=\"col-black\">
                                                        <i class=\"material-icons\">access_time</i> <span
                                                                style=\"font-size: 14px\">";
                    // line 423
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["history"], "date", [], "any", false, false, false, 423), "d.m.Y H.m"), "html", null, true);
                    yield "</span>
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['history'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 429
                yield "                                </ul>
                            </li>
                            <li class=\"footer bg-blue col-white\">
                                <a href=\"";
                // line 432
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historique");
                yield "\" class=\"bolo text-white\" style=\"font-size: 16px\">
                                    Voir toutes les actions
                                </a>
                            </li>
                        </ul>
                    ";
            }
            // line 438
            yield "
                    <li class=\"hidere\">
                        <a data-toggle=\"modal\" data-target=\"#ModalSearch\">
                            <i class=\"material-icons\">search</i>
                        </a>
                    </li>
                ";
        }
        // line 445
        yield "                <li>
                    <a href=\"#\" id=\"tgol\" title=\"Page d'acceuil\">
                        <i class=\"material-icons\">exit_to_app</i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section>
    <aside id=\"leftsidebar\" class=\"sidebar text-center bg-pri\"
           style=\"z-index: 1000 !important; margin-top: -70px; width: 240px; height: 100%\">
        <div class=\"user-info\" style=\"height: 150px !important;\">
            <img src=\"";
        // line 459
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logoy.png"), "html", null, true);
        yield "\" style=\"float: left; width: 200px !important;margin-top: 10px\"/>
        </div>
        <div class=\"menu\">
            <ul class=\"list\">
                <li class=\"active\">
                    ";
        // line 464
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 464, $this->source); })()) == "page"))) {
            // line 465
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("welcome");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">home</i>
                            <span class=\"col-yellow\">ACCUEIL</span>
                        </a>
                    ";
        } else {
            // line 470
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("welcome");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">home</i>
                            <span class=\"text-white\">Accueil</span>
                        </a>
                    ";
        }
        // line 475
        yield "                </li>
                ";
        // line 476
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 476, $this->source); })()), "user", [], "any", false, false, false, 476)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 477
            yield "                    <li class=\"active\">
                        ";
            // line 478
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 478, $this->source); })()) == "message"))) {
                // line 479
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">email</i>
                                <span class=\"col-yellow\">MESSAGERIE</span>
                            </a>
                        ";
            } else {
                // line 484
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">email</i>
                                <span class=\"text-white\">Messagerie</span>
                            </a>
                        ";
            }
            // line 489
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 491
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 491, $this->source); })()) == "article"))) {
                // line 492
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">content_copy</i>
                                <span class=\"col-yellow\">GESTION DES ARTICLES</span>
                            </a>
                        ";
            } else {
                // line 497
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">content_copy</i>
                                <span class=\"text-white\">Gestion des articles</span>
                            </a>
                        ";
            }
            // line 502
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 504
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 504, $this->source); })()) == "listeclient"))) {
                // line 505
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeclient");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">content_copy</i>
                                <span class=\"col-yellow\">LISTE DES CLIENTS</span>
                            </a>
                        ";
            } else {
                // line 510
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeclient");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">content_copy</i>
                                <span class=\"text-white\">Liste des clients</span>
                            </a>
                        ";
            }
            // line 515
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 517
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 517, $this->source); })()) == "chanetude"))) {
                // line 518
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chanetude");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">content_copy</i>
                                <span class=\"col-yellow\">CHANTIERS EN ÉTUDE</span>
                            </a>
                        ";
            } else {
                // line 523
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chanetude");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">content_copy</i>
                                <span class=\"text-white\">Chantiers en étude</span>
                            </a>
                        ";
            }
            // line 528
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 530
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 530, $this->source); })()) == "chancours"))) {
                // line 531
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chancours");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">widgets</i>
                                <span class=\"col-yellow\">CHANTIERS EN COURS</span>
                            </a>
                        ";
            } else {
                // line 536
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chancours");
                yield "\">
                                <i class=\"material-icons text-white\">widgets</i>
                                <span class=\"text-white\">Chantiers en cours</span>
                            </a>
                        ";
            }
            // line 541
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 543
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 543, $this->source); })()) == "chanechouer"))) {
                // line 544
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chanechouer");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">widgets</i>
                                <span class=\"col-yellow\">CHANTIERS ÉCHOUÉS</span>
                            </a>
                        ";
            } else {
                // line 549
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chanechouer");
                yield "\">
                                <i class=\"material-icons text-white\">widgets</i>
                                <span class=\"text-white\">Chantiers échoués</span>
                            </a>
                        ";
            }
            // line 554
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 556
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 556, $this->source); })()) == "chanclotures"))) {
                // line 557
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chanclotures");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">widgets</i>
                                <span class=\"col-yellow\">CHANTIERS CLÔTURÉS</span>
                            </a>
                        ";
            } else {
                // line 562
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chanclotures");
                yield "\">
                                <i class=\"material-icons text-white\">widgets</i>
                                <span class=\"text-white\">Chantiers clôturés</span>
                            </a>
                        ";
            }
            // line 567
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 569
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 569, $this->source); })()) == "chantermines"))) {
                // line 570
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantermines");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">widgets</i>
                                <span class=\"col-yellow\">CHANTIERS TERMINÉS</span>
                            </a>
                        ";
            } else {
                // line 575
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantermines");
                yield "\">
                                <i class=\"material-icons text-white\">widgets</i>
                                <span class=\"text-white\">Chantiers terminés</span>
                            </a>
                        ";
            }
            // line 580
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 582
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 582, $this->source); })()) == "technique"))) {
                // line 583
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technique");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">open_with</i>
                                <span class=\"col-yellow\">GESTION TECHNIQUE</span>
                            </a>
                        ";
            } else {
                // line 588
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technique");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">open_with</i>
                                <span class=\"text-white\">Gestion technique</span>
                            </a>
                        ";
            }
            // line 593
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 595
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 595, $this->source); })()) == "materiel"))) {
                // line 596
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("materiel");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">bubble_chart</i>
                                <span class=\"col-yellow\">GESTION DU MATÉRIEL</span>
                            </a>
                        ";
            } else {
                // line 601
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("materiel");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">bubble_chart</i>
                                <span class=\"text-white\">Gestion du matériel</span>
                            </a>
                        ";
            }
            // line 606
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 608
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 608, $this->source); })()) == "personnel"))) {
                // line 609
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnel");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">people_outline</i>
                                <span class=\"col-yellow\">GESTION DU PERSONNEL</span>
                            </a>
                        ";
            } else {
                // line 614
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnel");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">people_outline</i>
                                <span class=\"text-white\">Gestion du personnel</span>
                            </a>
                        ";
            }
            // line 619
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 621
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 621, $this->source); })()) == "paie"))) {
                // line 622
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paie");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">toll</i>
                                <span class=\"col-yellow\">POINTS DE PAIE</span>
                            </a>
                        ";
            } else {
                // line 627
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paie");
                yield "\">
                                <i class=\"material-icons text-white\">toll</i>
                                <span class=\"text-white\">Points de paie</span>
                            </a>
                        ";
            }
            // line 632
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 634
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 634, $this->source); })()) == "parametre"))) {
                // line 635
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parametre");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">center_focus_weak</i>
                                <span class=\"col-yellow\">PARAMÈTRES</span>
                            </a>
                        ";
            } else {
                // line 640
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parametre");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">center_focus_weak</i>
                                <span class=\"text-white\">Paramètres</span>
                            </a>
                        ";
            }
            // line 645
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 647
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 647, $this->source); })()) == "historique"))) {
                // line 648
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historique");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">history</i>
                                <span class=\"col-yellow\">HISTORIQUE</span>
                            </a>
                        ";
            } else {
                // line 653
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historique");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">history</i>
                                <span class=\"text-white\">Historique</span>
                            </a>
                        ";
            }
            // line 658
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 660
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 660, $this->source); })()) == "corbeille"))) {
                // line 661
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("corbeille");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">delete</i>
                                <span class=\"col-yellow\">CORBEILLE</span>
                            </a>
                        ";
            } else {
                // line 666
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("corbeille");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">delete</i>
                                <span class=\"text-white\">Corbeille</span>
                            </a>
                        ";
            }
            // line 671
            yield "                    </li>
                ";
        }
        // line 673
        yield "            </ul>
        </div>


    </aside>
    <aside id=\"rightsidebars\" class=\"right-sidebars m-t--25 p-t-10\" style=\"overflow: scroll\">
        <div class=\"tab-content\">
            <div role=\"tabpanel\" class=\"tab-pane fade in active in active\" id=\"chantier\">
                <div class=\"table-responsive\" style=\"padding: 10px !important;\">
                    ";
        // line 682
        if ((($tmp =  !array_key_exists("libre", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 683
            yield "                        ";
            $context["q"] = 0;
            // line 684
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 684, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 685
                yield "                            ";
                $context["p"] = 0;
                // line 686
                yield "                            ";
                if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 686)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 686), "count", [], "any", false, false, false, 686) > 0))) {
                    // line 687
                    yield "                                ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 687))) {
                        // line 688
                        yield "                                    <table class=\"table-bordered shadow\" style=\" overflow: scroll; width: 100%\">
                                        ";
                        // line 689
                        if (((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 689, $this->source); })()) == 0)) {
                            // line 690
                            yield "                                            <tr>
                                                <td colspan=\"2\" class=\"bg-purple text-white\"
                                                    style=\"padding-left: 5px;\">CHANTIERS EN ÉTUDE
                                                </td>
                                            </tr>
                                        ";
                        }
                        // line 696
                        yield "                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 696));
                        foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                            // line 697
                            yield "                                            ";
                            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 697))) {
                                // line 698
                                yield "                                                ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 698) == "etude")) {
                                    // line 699
                                    yield "                                                    ";
                                    if (((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 699, $this->source); })()) == 0)) {
                                        // line 700
                                        yield "                                                        <tr>
                                                            <td colspan=\"2\" class=\"bg-blue text-white\"
                                                                style=\"padding-left: 5px;\">
                                                                <a href=\"";
                                        // line 703
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 703)]), "html", null, true);
                                        yield "\"
                                                                   class=\"text-white\" title=\"";
                                        // line 704
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 704), "html", null, true);
                                        yield "\">
                                                                    -
                                                                    ";
                                        // line 706
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 706), "html", null, true);
                                        yield "
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    ";
                                    }
                                    // line 711
                                    yield "                                                    <tr>
                                                        <td style=\"padding-left: 5px\" colspan=\"2\" class=\"bg-light\">
                                                            <a href=\"";
                                    // line 713
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source,                                     // line 716
$context["chantier"], "id", [], "any", false, false, false, 716)]), "html", null, true);
                                    // line 718
                                    yield "\" class=\"text-pri\" title=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 718), "html", null, true);
                                    yield "\">
                                                                # ";
                                    // line 719
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 719), 0, 55)), "html", null, true);
                                    yield "
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    ";
                                    // line 723
                                    $context["p"] = ((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 723, $this->source); })()) + 1);
                                    // line 724
                                    yield "                                                ";
                                }
                                // line 725
                                yield "                                            ";
                            }
                            // line 726
                            yield "                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 727
                        yield "                                    </table>
                                    ";
                        // line 728
                        $context["q"] = ((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 728, $this->source); })()) + 1);
                        // line 729
                        yield "                                ";
                    }
                    // line 730
                    yield "                            ";
                }
                // line 731
                yield "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 733
            yield "                    ";
        }
        // line 734
        yield "                </div>
            </div>
        </div>
    </aside>
    <aside id=\"rightsidebar\" class=\"right-sidebar m-t--25 p-t-10\" style=\"overflow: scroll\">
        <div class=\"tab-content\">
            <div role=\"tabpanel\" class=\"tab-pane fade in active in active\" id=\"chantier\">
                <div class=\"table-responsive\" style=\"padding: 10px !important;\">
                    ";
        // line 742
        if ((($tmp =  !array_key_exists("libre", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 743
            yield "                        ";
            $context["q"] = 0;
            // line 744
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 744, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 745
                yield "                            ";
                $context["p"] = 0;
                // line 746
                yield "                            ";
                if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 746)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 746), "count", [], "any", false, false, false, 746) > 0))) {
                    // line 747
                    yield "                                ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 747))) {
                        // line 748
                        yield "                                    <table class=\"table-bordered shadow\" style=\" overflow: scroll; width: 100%\">
                                        ";
                        // line 749
                        if (((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 749, $this->source); })()) == 0)) {
                            // line 750
                            yield "                                            <tr>
                                                <td colspan=\"2\" class=\"bg-pink text-white\"
                                                    style=\"padding-left: 5px;\">CHANTIERS EN COURS
                                                </td>
                                            </tr>
                                        ";
                        }
                        // line 756
                        yield "                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 756));
                        foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                            // line 757
                            yield "                                            ";
                            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 757))) {
                                // line 758
                                yield "                                                ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 758) == "encours")) {
                                    // line 759
                                    yield "                                                    ";
                                    if (((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 759, $this->source); })()) == 0)) {
                                        // line 760
                                        yield "                                                        <tr>
                                                            <td colspan=\"2\" class=\"bg-blue text-white\"
                                                                style=\"padding-left: 5px;\">
                                                                <a href=\"";
                                        // line 763
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 763)]), "html", null, true);
                                        yield "\"
                                                                   class=\"text-white\" title=\"";
                                        // line 764
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 764), "html", null, true);
                                        yield "\">
                                                                    -
                                                                    ";
                                        // line 766
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 766), "html", null, true);
                                        yield "
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    ";
                                    }
                                    // line 771
                                    yield "                                                    <tr>
                                                        <td style=\"padding-left: 5px\" colspan=\"2\" class=\"bg-light\">
                                                            <a href=\"";
                                    // line 773
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source,                                     // line 776
$context["chantier"], "id", [], "any", false, false, false, 776)]), "html", null, true);
                                    // line 778
                                    yield "\" class=\"text-pri\" title=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 778), "html", null, true);
                                    yield "\">
                                                                # ";
                                    // line 779
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 779), 0, 55)), "html", null, true);
                                    yield "
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    ";
                                    // line 783
                                    $context["p"] = ((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 783, $this->source); })()) + 1);
                                    // line 784
                                    yield "                                                ";
                                }
                                // line 785
                                yield "                                            ";
                            }
                            // line 786
                            yield "                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 787
                        yield "                                    </table>
                                    ";
                        // line 788
                        $context["q"] = ((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 788, $this->source); })()) + 1);
                        // line 789
                        yield "                                ";
                    }
                    // line 790
                    yield "                            ";
                }
                // line 791
                yield "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 793
            yield "                    ";
        }
        // line 794
        yield "                </div>
            </div>
        </div>
    </aside>
</section>

<input type=\"text\" class=\"hide\" id=\"idchantier\" value=\"";
        // line 800
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 800, $this->source); })()), "id", [], "any", false, false, false, 800), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"iddevis\" value=\"";
        // line 801
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 801, $this->source); })()), "id", [], "any", false, false, false, 801), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"idgroupe\" value=\"";
        // line 802
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 802, $this->source); })()), "id", [], "any", false, false, false, 802), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"idgligne\" value=\"";
        // line 803
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["idgligne"]) || array_key_exists("idgligne", $context) ? $context["idgligne"] : (function () { throw new RuntimeError('Variable "idgligne" does not exist.', 803, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"idligne\" value=\"";
        // line 804
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ligne"]) || array_key_exists("ligne", $context) ? $context["ligne"] : (function () { throw new RuntimeError('Variable "ligne" does not exist.', 804, $this->source); })()), "id", [], "any", false, false, false, 804), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"devdate\" value=\"";
        // line 805
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 805, $this->source); })()), "date", [], "any", false, false, false, 805), "d/m/Y"), "html", null, true);
        yield "\">

<input type=\"text\" class=\"hide\" id=\"jsondevis\" value=\"";
        // line 807
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["jsondevis"]) || array_key_exists("jsondevis", $context) ? $context["jsondevis"] : (function () { throw new RuntimeError('Variable "jsondevis" does not exist.', 807, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"jsondede\" value=\"";
        // line 808
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["jsondede"]) || array_key_exists("jsondede", $context) ? $context["jsondede"] : (function () { throw new RuntimeError('Variable "jsondede" does not exist.', 808, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"jsonforme\" value=\"";
        // line 809
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["jsonforme"]) || array_key_exists("jsonforme", $context) ? $context["jsonforme"] : (function () { throw new RuntimeError('Variable "jsonforme" does not exist.', 809, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"jsonformes\" value=\"";
        // line 810
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["jsonformes"]) || array_key_exists("jsonformes", $context) ? $context["jsonformes"] : (function () { throw new RuntimeError('Variable "jsonformes" does not exist.', 810, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"jsonusers\" value=\"";
        // line 811
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["jsonusers"]) || array_key_exists("jsonusers", $context) ? $context["jsonusers"] : (function () { throw new RuntimeError('Variable "jsonusers" does not exist.', 811, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"idmaster\" value=\"";
        // line 812
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["idmaster"]) || array_key_exists("idmaster", $context) ? $context["idmaster"] : (function () { throw new RuntimeError('Variable "idmaster" does not exist.', 812, $this->source); })()), "html", null, true);
        yield "\">

<div class=\"modal fade right\" id=\"modalDevis\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-pri text-white\">
                <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">CRÉER UN NOUVEAU DEVIS</h4>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    ";
        // line 823
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formneDevis"]) || array_key_exists("formneDevis", $context) ? $context["formneDevis"] : (function () { throw new RuntimeError('Variable "formneDevis" does not exist.', 823, $this->source); })()), 'form_start', ["attr" => ["id" => "addDevisForm"]]);
        yield "
                    ";
        // line 824
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formneDevis"]) || array_key_exists("formneDevis", $context) ? $context["formneDevis"] : (function () { throw new RuntimeError('Variable "formneDevis" does not exist.', 824, $this->source); })()), "_token", [], "any", false, false, false, 824), 'row');
        yield "
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">DATE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 830
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formneDevis"]) || array_key_exists("formneDevis", $context) ? $context["formneDevis"] : (function () { throw new RuntimeError('Variable "formneDevis" does not exist.', 830, $this->source); })()), "date", [], "any", false, false, false, 830), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">AFFAIRE SUIVIE PAR:</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 838
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formneDevis"]) || array_key_exists("formneDevis", $context) ? $context["formneDevis"] : (function () { throw new RuntimeError('Variable "formneDevis" does not exist.', 838, $this->source); })()), "suivie", [], "any", false, false, false, 838), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">TVA(%)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 849
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formneDevis"]) || array_key_exists("formneDevis", $context) ? $context["formneDevis"] : (function () { throw new RuntimeError('Variable "formneDevis" does not exist.', 849, $this->source); })()), "tva", [], "any", false, false, false, 849), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">VALIDITÉ DU DEVIS</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 857
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formneDevis"]) || array_key_exists("formneDevis", $context) ? $context["formneDevis"] : (function () { throw new RuntimeError('Variable "formneDevis" does not exist.', 857, $this->source); })()), "validit", [], "any", false, false, false, 857), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE OU OBJET</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 867
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formneDevis"]) || array_key_exists("formneDevis", $context) ? $context["formneDevis"] : (function () { throw new RuntimeError('Variable "formneDevis" does not exist.', 867, $this->source); })()), "devreference", [], "any", false, false, false, 867), 'widget', ["required" => "", "id" => "editor", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DEVISE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 877
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formneDevis"]) || array_key_exists("formneDevis", $context) ? $context["formneDevis"] : (function () { throw new RuntimeError('Variable "formneDevis" does not exist.', 877, $this->source); })()), "monnaie", [], "any", false, false, false, 877), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">CODE ARTICLE?</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 885
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formneDevis"]) || array_key_exists("formneDevis", $context) ? $context["formneDevis"] : (function () { throw new RuntimeError('Variable "formneDevis" does not exist.', 885, $this->source); })()), "aaref", [], "any", false, false, false, 885), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">OPTION TVA</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 896
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formneDevis"]) || array_key_exists("formneDevis", $context) ? $context["formneDevis"] : (function () { throw new RuntimeError('Variable "formneDevis" does not exist.', 896, $this->source); })()), "ptva", [], "any", false, false, false, 896), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">AVEC BASE TVA?</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 904
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formneDevis"]) || array_key_exists("formneDevis", $context) ? $context["formneDevis"] : (function () { throw new RuntimeError('Variable "formneDevis" does not exist.', 904, $this->source); })()), "abasetva", [], "any", false, false, false, 904), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    <label class=\"form-label\"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">REMISE SUR LIGNES?</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 915
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formneDevis"]) || array_key_exists("formneDevis", $context) ? $context["formneDevis"] : (function () { throw new RuntimeError('Variable "formneDevis" does not exist.', 915, $this->source); })()), "aarem", [], "any", false, false, false, 915), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">AVEC COLONNE SECTION?</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 923
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formneDevis"]) || array_key_exists("formneDevis", $context) ? $context["formneDevis"] : (function () { throw new RuntimeError('Variable "formneDevis" does not exist.', 923, $this->source); })()), "zone", [], "any", false, false, false, 923), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">MODÈLE D'INFORMATIONS</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 933
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formneDevis"]) || array_key_exists("formneDevis", $context) ? $context["formneDevis"] : (function () { throw new RuntimeError('Variable "formneDevis" does not exist.', 933, $this->source); })()), "modele", [], "any", false, false, false, 933), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">MODÈLE DE RÉSULTAT</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 941
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formneDevis"]) || array_key_exists("formneDevis", $context) ? $context["formneDevis"] : (function () { throw new RuntimeError('Variable "formneDevis" does not exist.', 941, $this->source); })()), "model", [], "any", false, false, false, 941), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">INFORMATIONS</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 951
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formneDevis"]) || array_key_exists("formneDevis", $context) ? $context["formneDevis"] : (function () { throw new RuntimeError('Variable "formneDevis" does not exist.', 951, $this->source); })()), "conditions", [], "any", false, false, false, 951), 'widget', ["required" => "", "id" => "editor2", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"addDevis\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect text-white bg-pri\">
                        <div type=\"button\" id=\"closeDevis\" class=\"btn btn-link waves-effect text-white bg-pink\"
                             data-dismiss=\"modal\">
                            FERMER
                        </div>
                        <img src=\"";
        // line 963
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width:50px; display:none;\"
                             class=\"align-justify\" id=\"loadDevis\">
                    </div>
                    <br><br><br>
                    ";
        // line 967
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formneDevis"]) || array_key_exists("formneDevis", $context) ? $context["formneDevis"] : (function () { throw new RuntimeError('Variable "formneDevis" does not exist.', 967, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalInfo\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-pink text-white\">
                <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">INFORMATIONS SUR LE DEVIS</h4>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">

                    ";
        // line 983
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 983, $this->source); })()), "flashes", ["success"], "method", false, false, false, 983));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 984
            yield "                        <div class=\"alert alert-danger\">
                            ";
            // line 985
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 988
        yield "                    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 988, $this->source); })()), 'form_start', ["attr" => ["id" => "updateDevisForm"]]);
        yield "
                    ";
        // line 989
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 989, $this->source); })()), "_token", [], "any", false, false, false, 989), 'row');
        yield "
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">DATE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 995
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 995, $this->source); })()), "date", [], "any", false, false, false, 995), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">AFFAIRE SUIVIE PAR:</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1003
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 1003, $this->source); })()), "suivie", [], "any", false, false, false, 1003), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE OU OBJET DU DEVIS</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1013
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 1013, $this->source); })()), "devreference", [], "any", false, false, false, 1013), 'widget', ["id" => "editor3", "attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DEVISE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1023
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 1023, $this->source); })()), "monnaie", [], "any", false, false, false, 1023), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">TVA(%)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1031
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 1031, $this->source); })()), "tva", [], "any", false, false, false, 1031), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">OPTION TVA</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1041
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 1041, $this->source); })()), "ptva", [], "any", false, false, false, 1041), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">AVEC BASE TVA?</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1049
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 1049, $this->source); })()), "abasetva", [], "any", false, false, false, 1049), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">AVEC REMISE?</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1059
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 1059, $this->source); })()), "aarem", [], "any", false, false, false, 1059), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">AVEC COLONNE SECTION?</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1067
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 1067, $this->source); })()), "zone", [], "any", false, false, false, 1067), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">AVEC COLONNE RÉF?</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1077
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 1077, $this->source); })()), "aaref", [], "any", false, false, false, 1077), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DATE DE VALIDITÉ</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1085
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 1085, $this->source); })()), "validit", [], "any", false, false, false, 1085), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">INFORMATIONS</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1095
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 1095, $this->source); })()), "conditions", [], "any", false, false, false, 1095), 'widget', ["id" => "editor4", "required" => "", "attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">MODÈLE D'INFORMATIONS</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 1105, $this->source); })()), "modele", [], "any", false, false, false, 1105), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">MODÈLE DE RÉSULTATS</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1113
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 1113, $this->source); })()), "model", [], "any", false, false, false, 1113), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\" style=\"margin-bottom: 50px !important;\">
                        <input type=\"button\" id=\"updateDevis\" value=\"MODIFIER\"
                               class=\"btn btn-link waves-effect text-white bg-green\">
                        <div type=\"button\" id=\"closeupDevis\" class=\"btn btn-link waves-effect text-white bg-pink\"
                             data-dismiss=\"modal\">
                            FERMER
                        </div>
                        <img src=\"";
        // line 1125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadupDevis\">
                    </div>
                    ";
        // line 1128
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 1128, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalGroup\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            ";
        // line 1138
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 1138, $this->source); })()), "id", [], "any", false, false, false, 1138))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1139
            yield "                <div class=\"p-5 bg-pink\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">MODIFIER UN GROUPE</h4>
                    </div>
                </div>
            ";
        } else {
            // line 1145
            yield "                <div class=\"modal-header bg-pri\">
                    <div class=\"p-5 text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">CRÉER UN GROUPE</h4>
                    </div>
                </div>
            ";
        }
        // line 1151
        yield "            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    ";
        // line 1153
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formGroup"]) || array_key_exists("formGroup", $context) ? $context["formGroup"] : (function () { throw new RuntimeError('Variable "formGroup" does not exist.', 1153, $this->source); })()), 'form_start', ["attr" => ["id" => "addGroupeDevisForm"]]);
        yield "
                    ";
        // line 1154
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formGroup"]) || array_key_exists("formGroup", $context) ? $context["formGroup"] : (function () { throw new RuntimeError('Variable "formGroup" does not exist.', 1154, $this->source); })()), "_token", [], "any", false, false, false, 1154), 'row');
        yield "
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line  ";
        // line 1159
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1159, $this->source); })()), "aaref", [], "any", false, false, false, 1159) != "oui")) {
            yield "disabled";
        }
        yield "\">
                                    ";
        // line 1160
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1160, $this->source); })()), "aaref", [], "any", false, false, false, 1160) == "oui")) {
            // line 1161
            yield "                                        ";
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 1161, $this->source); })()), "id", [], "any", false, false, false, 1161))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1162
                yield "                                            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formGroup"]) || array_key_exists("formGroup", $context) ? $context["formGroup"] : (function () { throw new RuntimeError('Variable "formGroup" does not exist.', 1162, $this->source); })()), "reference", [], "any", false, false, false, 1162), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
                yield "
                                        ";
            } else {
                // line 1164
                yield "                                            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formGroup"]) || array_key_exists("formGroup", $context) ? $context["formGroup"] : (function () { throw new RuntimeError('Variable "formGroup" does not exist.', 1164, $this->source); })()), "reference", [], "any", false, false, false, 1164), 'widget', ["attr" => ["class" => "form-control"]]);
                yield "
                                        ";
            }
            // line 1166
            yield "                                    ";
        } else {
            // line 1167
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formGroup"]) || array_key_exists("formGroup", $context) ? $context["formGroup"] : (function () { throw new RuntimeError('Variable "formGroup" does not exist.', 1167, $this->source); })()), "reference", [], "any", false, false, false, 1167), 'widget', ["attr" => ["class" => "form-control col-pink", "placeholder" => "Désactivé"]]);
            yield "
                                    ";
        }
        // line 1169
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">GROUPE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1178
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 1178, $this->source); })()), "id", [], "any", false, false, false, 1178))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1179
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formGroup"]) || array_key_exists("formGroup", $context) ? $context["formGroup"] : (function () { throw new RuntimeError('Variable "formGroup" does not exist.', 1179, $this->source); })()), "groupe", [], "any", false, false, false, 1179), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
            yield "
                                    ";
        } else {
            // line 1181
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formGroup"]) || array_key_exists("formGroup", $context) ? $context["formGroup"] : (function () { throw new RuntimeError('Variable "formGroup" does not exist.', 1181, $this->source); })()), "groupe", [], "any", false, false, false, 1181), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                    ";
        }
        // line 1183
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        ";
        // line 1188
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe"]) || array_key_exists("groupe", $context) ? $context["groupe"] : (function () { throw new RuntimeError('Variable "groupe" does not exist.', 1188, $this->source); })()), "id", [], "any", false, false, false, 1188))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1189
            yield "                            <input type=\"submit\" id=\"updateGroupDev\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect text-white bg-green\">
                            <a href=\"";
            // line 1191
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1191, $this->source); })()), "id", [], "any", false, false, false, 1191), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1191, $this->source); })()), "chantier", [], "any", false, false, false, 1191), "id", [], "any", false, false, false, 1191)]), "html", null, true);
            yield "\"
                               id=\"closeGroup\" class=\"btn btn-link waves-effect text-white bg-pink\">FERMER
                            </a>
                        ";
        } else {
            // line 1195
            yield "                            <input type=\"submit\" id=\"addGroupDev\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-pri\">
                            <div type=\"button\" id=\"closeGroup\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">FERMER
                            </div>
                        ";
        }
        // line 1201
        yield "                        <img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadGroup\">
                    </div>
                    ";
        // line 1204
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formGroup"]) || array_key_exists("formGroup", $context) ? $context["formGroup"] : (function () { throw new RuntimeError('Variable "formGroup" does not exist.', 1204, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalLigne\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            ";
        // line 1214
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["ligne"]) || array_key_exists("ligne", $context) ? $context["ligne"] : (function () { throw new RuntimeError('Variable "ligne" does not exist.', 1214, $this->source); })()), "id", [], "any", false, false, false, 1214))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1215
            yield "                <div class=\"p-5 bg-pink\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">MODIFIER UNE LIGNE</h4>
                    </div>
                </div>
            ";
        } else {
            // line 1221
            yield "                <div class=\"p-5 bg-pri\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">AJOUTER UNE LIGNE</h4>
                    </div>
                </div>
            ";
        }
        // line 1227
        yield "            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    ";
        // line 1229
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1229, $this->source); })()), 'form_start', ["attr" => ["id" => "addLigneDevisForm"]]);
        yield "
                    ";
        // line 1230
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1230, $this->source); })()), "_token", [], "any", false, false, false, 1230), 'row');
        yield "
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">LOTS</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1236
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["ligne"]) || array_key_exists("ligne", $context) ? $context["ligne"] : (function () { throw new RuntimeError('Variable "ligne" does not exist.', 1236, $this->source); })()), "id", [], "any", false, false, false, 1236))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1237
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1237, $this->source); })()), "groupe", [], "any", false, false, false, 1237), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
            yield "
                                    ";
        } else {
            // line 1239
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1239, $this->source); })()), "groupe", [], "any", false, false, false, 1239), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                    ";
        }
        // line 1241
        yield "                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1248
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1248, $this->source); })()), "aaref", [], "any", false, false, false, 1248) == "oui")) {
            // line 1249
            yield "                                        ";
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["ligne"]) || array_key_exists("ligne", $context) ? $context["ligne"] : (function () { throw new RuntimeError('Variable "ligne" does not exist.', 1249, $this->source); })()), "id", [], "any", false, false, false, 1249))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1250
                yield "                                            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1250, $this->source); })()), "reference", [], "any", false, false, false, 1250), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
                yield "
                                        ";
            } else {
                // line 1252
                yield "                                            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1252, $this->source); })()), "reference", [], "any", false, false, false, 1252), 'widget', ["attr" => ["class" => "form-control"]]);
                yield "
                                        ";
            }
            // line 1254
            yield "                                    ";
        } else {
            // line 1255
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1255, $this->source); })()), "reference", [], "any", false, false, false, 1255), 'widget', ["attr" => ["class" => "form-control", "readonly" => "true", "placeholder" => "Désactivé"]]);
            yield "
                                    ";
        }
        // line 1257
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DÉSIGNATION<span
                                        class=\"col-pink\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1267
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["ligne"]) || array_key_exists("ligne", $context) ? $context["ligne"] : (function () { throw new RuntimeError('Variable "ligne" does not exist.', 1267, $this->source); })()), "id", [], "any", false, false, false, 1267))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1268
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1268, $this->source); })()), "designation", [], "any", false, false, false, 1268), 'widget', ["required" => "", "id" => "editor1", "attr" => ["class" => "form-control col-pink"]]);
            yield "
                                    ";
        } else {
            // line 1270
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1270, $this->source); })()), "designation", [], "any", false, false, false, 1270), 'widget', ["required" => "", "id" => "editor1", "attr" => ["class" => "form-control"]]);
            yield "
                                    ";
        }
        // line 1272
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">SECTION</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1281
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1281, $this->source); })()), "zone", [], "any", false, false, false, 1281) == "oui")) {
            // line 1282
            yield "                                        ";
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["ligne"]) || array_key_exists("ligne", $context) ? $context["ligne"] : (function () { throw new RuntimeError('Variable "ligne" does not exist.', 1282, $this->source); })()), "id", [], "any", false, false, false, 1282))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1283
                yield "                                            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1283, $this->source); })()), "zone", [], "any", false, false, false, 1283), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
                yield "
                                        ";
            } else {
                // line 1285
                yield "                                            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1285, $this->source); })()), "zone", [], "any", false, false, false, 1285), 'widget', ["attr" => ["class" => "form-control"]]);
                yield "
                                        ";
            }
            // line 1287
            yield "                                    ";
        } else {
            // line 1288
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1288, $this->source); })()), "zone", [], "any", false, false, false, 1288), 'widget', ["attr" => ["class" => "form-control form-control-user", "readonly" => "true", "placeholder" => "Désactivé"]]);
            yield "
                                    ";
        }
        // line 1290
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">UNITÉ<span
                                        class=\"col-pink\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1300
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["ligne"]) || array_key_exists("ligne", $context) ? $context["ligne"] : (function () { throw new RuntimeError('Variable "ligne" does not exist.', 1300, $this->source); })()), "id", [], "any", false, false, false, 1300))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1301
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1301, $this->source); })()), "unite", [], "any", false, false, false, 1301), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
            yield "
                                    ";
        } else {
            // line 1303
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1303, $this->source); })()), "unite", [], "any", false, false, false, 1303), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                    ";
        }
        // line 1305
        yield "                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">QUANTITÉ<span
                                        class=\"col-pink\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1313
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["ligne"]) || array_key_exists("ligne", $context) ? $context["ligne"] : (function () { throw new RuntimeError('Variable "ligne" does not exist.', 1313, $this->source); })()), "id", [], "any", false, false, false, 1313))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1314
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1314, $this->source); })()), "quantite", [], "any", false, false, false, 1314), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
            yield "
                                    ";
        } else {
            // line 1316
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1316, $this->source); })()), "quantite", [], "any", false, false, false, 1316), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                    ";
        }
        // line 1318
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">PRIX UNITAIRE<span
                                        class=\"col-pink\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1328
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["ligne"]) || array_key_exists("ligne", $context) ? $context["ligne"] : (function () { throw new RuntimeError('Variable "ligne" does not exist.', 1328, $this->source); })()), "id", [], "any", false, false, false, 1328))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1329
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1329, $this->source); })()), "pu", [], "any", false, false, false, 1329), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
            yield "
                                    ";
        } else {
            // line 1331
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1331, $this->source); })()), "pu", [], "any", false, false, false, 1331), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                    ";
        }
        // line 1333
        yield "                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">REMISE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1340
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1340, $this->source); })()), "aarem", [], "any", false, false, false, 1340) == "oui")) {
            // line 1341
            yield "                                        ";
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["ligne"]) || array_key_exists("ligne", $context) ? $context["ligne"] : (function () { throw new RuntimeError('Variable "ligne" does not exist.', 1341, $this->source); })()), "id", [], "any", false, false, false, 1341))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1342
                yield "                                            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1342, $this->source); })()), "remise", [], "any", false, false, false, 1342), 'widget', ["required" => "", "attr" => ["class" => "form-control col-pink", "type" => "number"]]);
                yield "
                                        ";
            } else {
                // line 1344
                yield "                                            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1344, $this->source); })()), "remise", [], "any", false, false, false, 1344), 'widget', ["required" => "", "attr" => ["class" => "form-control", "type" => "number"]]);
                yield "
                                        ";
            }
            // line 1346
            yield "                                    ";
        } else {
            // line 1347
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1347, $this->source); })()), "remise", [], "any", false, false, false, 1347), 'widget', ["required" => "", "attr" => ["class" => "form-control", "readonly" => "true", "placeholder" => "Désactivé"]]);
            yield "
                                    ";
        }
        // line 1349
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        ";
        // line 1354
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["ligne"]) || array_key_exists("ligne", $context) ? $context["ligne"] : (function () { throw new RuntimeError('Variable "ligne" does not exist.', 1354, $this->source); })()), "id", [], "any", false, false, false, 1354))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1355
            yield "                            <input type=\"submit\" id=\"updateLigneDevis\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect text-white bg-green\">
                            <a href=\"";
            // line 1357
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1357, $this->source); })()), "id", [], "any", false, false, false, 1357), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1357, $this->source); })()), "chantier", [], "any", false, false, false, 1357), "id", [], "any", false, false, false, 1357)]), "html", null, true);
            yield "\"
                               id=\"closeLigne\" class=\"btn btn-link waves-effect text-white bg-pink\">FERMER
                            </a>
                        ";
        } else {
            // line 1361
            yield "                            <input type=\"submit\" id=\"addLigneDevis\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-pri\">
                            <div type=\"button\" id=\"closeLigne\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">FERMER
                            </div>
                        ";
        }
        // line 1367
        yield "
                        <img src=\"";
        // line 1368
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadLigne\">
                    </div>
                    ";
        // line 1371
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1371, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalBase\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"p-5 bg-pri\">
                <div class=\"modal-header text-white\">
                    <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">BASE TVA</h4>
                </div>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">

                    ";
        // line 1389
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formba"]) || array_key_exists("formba", $context) ? $context["formba"] : (function () { throw new RuntimeError('Variable "formba" does not exist.', 1389, $this->source); })()), 'form_start', ["attr" => ["id" => "addBaseDevisForm"]]);
        yield "
                    ";
        // line 1390
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formba"]) || array_key_exists("formba", $context) ? $context["formba"] : (function () { throw new RuntimeError('Variable "formba" does not exist.', 1390, $this->source); })()), "_token", [], "any", false, false, false, 1390), 'row');
        yield "
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">Base TVA</label>
                            <div class=\"form-group\">
                                <div class=\"form-line ";
        // line 1395
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1395, $this->source); })()), "abasetva", [], "any", false, false, false, 1395) != "oui")) {
            yield "disabled";
        }
        yield "\">
                                    ";
        // line 1396
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1396, $this->source); })()), "abasetva", [], "any", false, false, false, 1396) == "oui")) {
            // line 1397
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formba"]) || array_key_exists("formba", $context) ? $context["formba"] : (function () { throw new RuntimeError('Variable "formba" does not exist.', 1397, $this->source); })()), "basetva", [], "any", false, false, false, 1397), 'widget', ["required" => "required", "type" => "number", "attr" => ["class" => "form-control"]]);
            yield "
                                    ";
        } else {
            // line 1399
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formba"]) || array_key_exists("formba", $context) ? $context["formba"] : (function () { throw new RuntimeError('Variable "formba" does not exist.', 1399, $this->source); })()), "basetva", [], "any", false, false, false, 1399), 'widget', ["required" => "required", "type" => "number", "attr" => ["class" => "form-control", "placeholder" => "Désactivé"]]);
            yield "
                                    ";
        }
        // line 1401
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"addBase\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect text-white bg-pri\">
                        <div type=\"button\" id=\"closeBase\" class=\"btn btn-link waves-effect text-white bg-pink\"
                             data-dismiss=\"modal\">FERMER
                        </div>
                        <img src=\"";
        // line 1411
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadBase\">
                    </div>
                    ";
        // line 1414
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formba"]) || array_key_exists("formba", $context) ? $context["formba"] : (function () { throw new RuntimeError('Variable "formba" does not exist.', 1414, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalRemise\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"p-5 bg-pri\">
                <div class=\"modal-header text-white\">
                    <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">REMISE SUR TOTAL HT</h4>
                </div>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">

                    ";
        // line 1432
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formrem"]) || array_key_exists("formrem", $context) ? $context["formrem"] : (function () { throw new RuntimeError('Variable "formrem" does not exist.', 1432, $this->source); })()), 'form_start', ["attr" => ["id" => "addRemiseThtForm"]]);
        yield "
                    ";
        // line 1433
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formrem"]) || array_key_exists("formrem", $context) ? $context["formrem"] : (function () { throw new RuntimeError('Variable "formrem" does not exist.', 1433, $this->source); })()), "_token", [], "any", false, false, false, 1433), 'row');
        yield "
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">REMISE SUR TOTAL HT (%)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line ";
        // line 1438
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1438, $this->source); })()), "aarem", [], "any", false, false, false, 1438) != "tht")) {
            yield "disabled";
        }
        yield "\">
                                    ";
        // line 1439
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1439, $this->source); })()), "aarem", [], "any", false, false, false, 1439) == "tht")) {
            // line 1440
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formrem"]) || array_key_exists("formrem", $context) ? $context["formrem"] : (function () { throw new RuntimeError('Variable "formrem" does not exist.', 1440, $this->source); })()), "remtht", [], "any", false, false, false, 1440), 'widget', ["required" => "required", "type" => "number", "attr" => ["class" => "form-control"]]);
            yield "
                                    ";
        } else {
            // line 1442
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formrem"]) || array_key_exists("formrem", $context) ? $context["formrem"] : (function () { throw new RuntimeError('Variable "formrem" does not exist.', 1442, $this->source); })()), "remtht", [], "any", false, false, false, 1442), 'widget', ["required" => "required", "type" => "number", "attr" => ["class" => "form-control", "placeholder" => "Désactivé"]]);
            yield "
                                    ";
        }
        // line 1444
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"addRem\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect text-white bg-pri\">
                        <div type=\"button\" id=\"closeRem\" class=\"btn btn-link waves-effect text-white bg-pink\"
                             data-dismiss=\"modal\">FERMER
                        </div>
                        <img src=\"";
        // line 1454
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadRem\">
                    </div>
                    ";
        // line 1457
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formrem"]) || array_key_exists("formrem", $context) ? $context["formrem"] : (function () { throw new RuntimeError('Variable "formrem" does not exist.', 1457, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalChoisir\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"p-5 bg-pri\">
                <div class=\"modal-header text-white\">
                    <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">CHOISIR UN BIEN / SERVICE</h4>
                </div>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    ";
        // line 1474
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formez"]) || array_key_exists("formez", $context) ? $context["formez"] : (function () { throw new RuntimeError('Variable "formez" does not exist.', 1474, $this->source); })()), 'form_start', ["attr" => ["id" => "addChoisirDevisForm"]]);
        yield "
                    ";
        // line 1475
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formez"]) || array_key_exists("formez", $context) ? $context["formez"] : (function () { throw new RuntimeError('Variable "formez" does not exist.', 1475, $this->source); })()), "_token", [], "any", false, false, false, 1475), 'row');
        yield "
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">RECHERCHER</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1481
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formez"]) || array_key_exists("formez", $context) ? $context["formez"] : (function () { throw new RuntimeError('Variable "formez" does not exist.', 1481, $this->source); })()), "code", [], "any", false, false, false, 1481), 'widget', ["id" => "refarticle", "required" => "", "attr" => ["class" => "form-control refarticle"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">CODE ARTICLE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1489
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formez"]) || array_key_exists("formez", $context) ? $context["formez"] : (function () { throw new RuntimeError('Variable "formez" does not exist.', 1489, $this->source); })()), "reference", [], "any", false, false, false, 1489), 'widget', ["required" => "", "attr" => ["class" => "form-control", "readonly" => "true", "placeholder" => "Désactivé"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">ARTICLE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1499
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formez"]) || array_key_exists("formez", $context) ? $context["formez"] : (function () { throw new RuntimeError('Variable "formez" does not exist.', 1499, $this->source); })()), "article", [], "any", false, false, false, 1499), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">LOT</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1509
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formez"]) || array_key_exists("formez", $context) ? $context["formez"] : (function () { throw new RuntimeError('Variable "formez" does not exist.', 1509, $this->source); })()), "groupe", [], "any", false, false, false, 1509), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">QUANTITÉ</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1517
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formez"]) || array_key_exists("formez", $context) ? $context["formez"] : (function () { throw new RuntimeError('Variable "formez" does not exist.', 1517, $this->source); })()), "quantite", [], "any", false, false, false, 1517), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">ZONE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1527
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1527, $this->source); })()), "zone", [], "any", false, false, false, 1527) == "oui")) {
            // line 1528
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formez"]) || array_key_exists("formez", $context) ? $context["formez"] : (function () { throw new RuntimeError('Variable "formez" does not exist.', 1528, $this->source); })()), "zone", [], "any", false, false, false, 1528), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
            yield "
                                    ";
        } else {
            // line 1530
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formez"]) || array_key_exists("formez", $context) ? $context["formez"] : (function () { throw new RuntimeError('Variable "formez" does not exist.', 1530, $this->source); })()), "zone", [], "any", false, false, false, 1530), 'widget', ["required" => "", "attr" => ["class" => "form-control", "readonly" => "true", "placeholder" => "Désactivé"]]);
            yield "
                                    ";
        }
        // line 1532
        yield "                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">REMISE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1539
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1539, $this->source); })()), "aarem", [], "any", false, false, false, 1539) == "oui")) {
            // line 1540
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formez"]) || array_key_exists("formez", $context) ? $context["formez"] : (function () { throw new RuntimeError('Variable "formez" does not exist.', 1540, $this->source); })()), "remise", [], "any", false, false, false, 1540), 'widget', ["required" => "", "type" => "number", "attr" => ["class" => "form-control"]]);
            yield "
                                    ";
        } else {
            // line 1542
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formez"]) || array_key_exists("formez", $context) ? $context["formez"] : (function () { throw new RuntimeError('Variable "formez" does not exist.', 1542, $this->source); })()), "remise", [], "any", false, false, false, 1542), 'widget', ["required" => "", "type" => "number", "attr" => ["class" => "form-control", "readonly" => "true", "placeholder" => "Désactivé"]]);
            yield "
                                    ";
        }
        // line 1544
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"addChoisirDevis\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect text-white bg-pri\">
                        <div type=\"button\" id=\"closeChoisirDevis\"
                             class=\"btn btn-link waves-effect text-white bg-pink\"
                             data-dismiss=\"modal\">FERMER
                        </div>
                        <img src=\"";
        // line 1555
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadChoisirDevis\">
                    </div>
                    ";
        // line 1558
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formez"]) || array_key_exists("formez", $context) ? $context["formez"] : (function () { throw new RuntimeError('Variable "formez" does not exist.', 1558, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalDeplacer\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"p-5 bg-pri\">
                <div class=\"modal-header text-white\">
                    <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">DÉPLACER VERS UN AUTRE CHANTIER</h4>
                </div>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    <select class=\"form-control show-tick\" id=\"deplacerDevis\"
                            style=\" width: 100%\">

                        ";
        // line 1578
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 1578, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 1579
            yield "                            ";
            $context["check"] = 0;
            // line 1580
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 1580));
            foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                // line 1581
                yield "                                ";
                if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 1581)) && (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "archiver", [], "any", false, false, false, 1581) == "non"))) {
                    // line 1582
                    yield "                                    ";
                    $context["check"] = ((isset($context["check"]) || array_key_exists("check", $context) ? $context["check"] : (function () { throw new RuntimeError('Variable "check" does not exist.', 1582, $this->source); })()) + 1);
                    // line 1583
                    yield "                                ";
                }
                // line 1584
                yield "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1585
            yield "                            ";
            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 1585)) && (null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 1585)))) {
                // line 1586
                yield "                                ";
                if (((isset($context["check"]) || array_key_exists("check", $context) ? $context["check"] : (function () { throw new RuntimeError('Variable "check" does not exist.', 1586, $this->source); })()) > 0)) {
                    // line 1587
                    yield "                                    <optgroup label=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 1587), "html", null, true);
                    yield "\">
                                        ";
                    // line 1588
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 1588));
                    foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                        // line 1589
                        yield "                                            ";
                        if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 1589)) && (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "archiver", [], "any", false, false, false, 1589) == "non"))) {
                            // line 1590
                            yield "                                                <option value=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 1590), "html", null, true);
                            yield "\"
                                                        class=\"font-weight-normal\">";
                            // line 1591
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 1591), "html", null, true);
                            yield "</option>
                                            ";
                        }
                        // line 1593
                        yield "                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1594
                    yield "                                    </optgroup>
                                ";
                }
                // line 1596
                yield "                                </table>
                            ";
            }
            // line 1598
            yield "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1599
        yield "                    </select>
                    <div class=\"text-center m-t-30\">
                        <input type=\"submit\" id=\"addDeplacerDevis\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect text-white bg-pri\">
                        <div type=\"button\" id=\"closeDeplacer\" class=\"btn btn-link waves-effect text-white bg-pink\"
                             data-dismiss=\"modal\">FERMER
                        </div>
                        <img src=\"";
        // line 1606
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadDeplacer\">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalMise\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"p-5 bg-pri\">
                <div class=\"modal-header text-white\">
                    <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">MISE EN FORME DU DEVIS</h4>
                </div>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    ";
        // line 1625
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1625, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data", "attr" => ["id" => "addforme"]]);
        yield "
                    ";
        // line 1626
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1626, $this->source); })()), "_token", [], "any", false, false, false, 1626), 'row');
        yield "
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <h5 class=\"col-black bolo600\">LIBELLÉ</h5>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1632
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1632, $this->source); })()), "intituler", [], "any", false, false, false, 1632), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <h5 class=\"col-black bolo600\">TYPE D'ENTÊTE</h5>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1642
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1642, $this->source); })()), "typeEntete", [], "any", false, false, false, 1642), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <h5 class=\"col-black bolo600\">TYPE DE PIED DE PAGE</h5>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1650
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1650, $this->source); })()), "typeFooter", [], "any", false, false, false, 1650), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-black bolo600\">ENTÊTE EN IMAGE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1658
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1658, $this->source); })()), "enteteImage", [], "any", false, false, false, 1658), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-black bolo600\">PIED DE PAGE EN IMAGE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1666
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1666, $this->source); })()), "footImage", [], "any", false, false, false, 1666), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-black bolo600\">ENTÊTE EN TEXTE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1676
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1676, $this->source); })()), "headerText", [], "any", false, false, false, 1676), 'widget', ["required" => "", "id" => "editor5", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-black bolo600\">PIED DE PAGE EN TEXTE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1684
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1684, $this->source); })()), "pied", [], "any", false, false, false, 1684), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-4\">
                            <h5 class=\"col-black bolo600\">POLICE(en pixel)</h5>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1694
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1694, $this->source); })()), "dsize", [], "any", false, false, false, 1694), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <h5 class=\"col-black bolo600\">FOND(Hexa)</h5>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1702
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1702, $this->source); })()), "decolor", [], "any", false, false, false, 1702), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <h5 class=\"col-black bolo600\">TEXTE(Hexa)</h5>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1710
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1710, $this->source); })()), "decolortex", [], "any", false, false, false, 1710), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-black bolo600\">LARGEUR ENTÊTE(cm)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1720
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1720, $this->source); })()), "headerWith", [], "any", false, false, false, 1720), 'widget', ["required" => "", "attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-black bolo600\">HAUTEUR ENTÊTE(cm)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1728
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1728, $this->source); })()), "headerHeight", [], "any", false, false, false, 1728), 'widget', ["required" => "", "attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-black bolo600\">HAUTEUR DU LOGO(cm)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1739
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1739, $this->source); })()), "teteY", [], "any", false, false, false, 1739), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-black bolo600\">LARGEUR DU LOGO(cm)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1747
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1747, $this->source); })()), "teteH", [], "any", false, false, false, 1747), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-black bolo600\">DÉCALAGE HAUT(cm)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1757
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1757, $this->source); })()), "teteDH", [], "any", false, false, false, 1757), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-black bolo600\">DÉCALAGE BAS(cm)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1765
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1765, $this->source); })()), "teteDB", [], "any", false, false, false, 1765), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-black bolo600\">DÉCALAGE À DROITE(cm)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1775
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1775, $this->source); })()), "teteDD", [], "any", false, false, false, 1775), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-black bolo600\">DÉCALAGE À GAUCHE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1783
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1783, $this->source); })()), "teteDG", [], "any", false, false, false, 1783), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-black bolo600\">TAILLE DU TEXTE DU PIED DE
                                PAGE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1794
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1794, $this->source); })()), "piedsize", [], "any", false, false, false, 1794), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-black bolo600\">HAUTEUR DU PIED DE PAGE(cm)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1802
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1802, $this->source); })()), "footerHeight", [], "any", false, false, false, 1802), 'widget', ["required" => "", "attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\" style=\"margin-bottom: 50px !important;\">
                        <input type=\"submit\" id=\"updateForme\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect text-white bg-blue\">
                        <img src=\"";
        // line 1810
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadupForme\">
                    </div>
                    ";
        // line 1813
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1813, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"modalOper\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-pri\">
                <h5 class=\"modal-title text-white\" id=\"exampleModalLabel\">OPÉRATIONS SUR LES LIGNES</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"table-responsive\">
                    <table class=\"d table-bordered\" width=\"100%\">
                        <tr class=\"bg-pri bolderrer text-white\">
                            <td colspan=\"2\">&raquo; OPÉRATIONS SUR TOUTES LES QUANTITÉS</td>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderrer\" width=\"50%\">AJOUTER</td>
                            <td width=\"50%\" align=\"center\">
                                <input type=\"number\" name=\"add\" id=\"addqte\" min=\"1\" max=\"10\"
                                       style=\"width: 10em;\">
                                <button class=\"btn btn-primary btn-sm\"
                                        onclick=\"gaoula('add','qte','addqte','devis',";
        // line 1840
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1840, $this->source); })()), "id", [], "any", false, false, false, 1840), "html", null, true);
        yield ");\">
                                    Valider
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderrer\" width=\"50%\">SOUSTRAIRE</td>
                            <td width=\"50%\" align=\"center\">
                                <input type=\"number\" name=\"add\" id=\"sousqte\" min=\"1\" max=\"10\"
                                       style=\"width: 10em;\">
                                <button class=\"btn btn-primary btn-sm\"
                                        onclick=\"gaoula('sous','qte','sousqte','devis',";
        // line 1851
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1851, $this->source); })()), "id", [], "any", false, false, false, 1851), "html", null, true);
        yield ");\">
                                    Valider
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderrer\" width=\"50%\">MULTIPLIER PAR</td>
                            <td width=\"50%\" align=\"center\">
                                <input type=\"number\" name=\"add\" id=\"multiqte\" min=\"1\" max=\"10\"
                                       style=\"width: 10em;\">
                                <button class=\"btn btn-primary btn-sm\"
                                        onclick=\"gaoula('multi','qte','multiqte','devis',";
        // line 1862
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1862, $this->source); })()), "id", [], "any", false, false, false, 1862), "html", null, true);
        yield ");\">
                                    Valider
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderrer\" width=\"50%\">DIVISER PAR</td>
                            <td width=\"50%\" align=\"center\">
                                <input type=\"number\" name=\"add\" id=\"diviseqte\" min=\"1\" max=\"10\"
                                       style=\"width: 10em;\">
                                <button class=\"btn btn-primary btn-sm\"
                                        onclick=\"gaoula('divi','qte','diviseqte','devis',";
        // line 1873
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1873, $this->source); })()), "id", [], "any", false, false, false, 1873), "html", null, true);
        yield ");\">
                                    Valider
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderrer\" width=\"50%\">PLUS UN POURCENTAGE DE</td>
                            <td width=\"50%\" align=\"center\">
                                <input type=\"number\" name=\"add\" id=\"pourcenteqte\" min=\"1\" max=\"10\"
                                       style=\"width: 10em;\">
                                <button class=\"btn btn-primary btn-sm\"
                                        onclick=\"gaoula('pourcentplus','qte','pourcenteqte','devis',";
        // line 1884
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1884, $this->source); })()), "id", [], "any", false, false, false, 1884), "html", null, true);
        yield ");\">
                                    Valider
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderrer\" width=\"50%\">MOINS UN POURCENTAGE DE</td>
                            <td width=\"50%\" align=\"center\">
                                <input type=\"number\" name=\"add\" id=\"pourcentesqte\" min=\"1\" max=\"10\"
                                       style=\"width: 10em;\">
                                <button class=\"btn btn-primary btn-sm\"
                                        onclick=\"gaoula('pourcentmoins','qte','pourcentesqte','devis',";
        // line 1895
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1895, $this->source); })()), "id", [], "any", false, false, false, 1895), "html", null, true);
        yield ");\">
                                    Valider
                                </button>
                            </td>
                        </tr>

                    </table>
                    <br><br>
                    <table class=\"d table-bordered\" width=\"100%\">
                        <tr class=\"bg-secondary bolderrer text-white\">
                            <td colspan=\"2\">&raquo; OPÉRATIONS SUR TOUS LES PRIX</td>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderrer\" width=\"50%\">AJOUTER</td>
                            <td width=\"50%\" align=\"center\">
                                <input type=\"number\" name=\"add\" id=\"addpri\" min=\"1\" max=\"10\"
                                       style=\"width: 10em;\">
                                <button class=\"btn btn-secondary btn-sm\"
                                        onclick=\"gaoula('add','pri','addpri','devis',";
        // line 1913
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1913, $this->source); })()), "id", [], "any", false, false, false, 1913), "html", null, true);
        yield ");\">
                                    Valider
                                </button>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderrer\" width=\"50%\">SOUSTRAIRE</td>
                            <td width=\"50%\" align=\"center\">
                                <input type=\"number\" name=\"add\" id=\"souspri\" min=\"1\" max=\"10\"
                                       style=\"width: 10em;\">
                                <button class=\"btn btn-secondary btn-sm\"
                                        onclick=\"gaoula('sous','pri','souspri','devis',";
        // line 1923
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1923, $this->source); })()), "id", [], "any", false, false, false, 1923), "html", null, true);
        yield ");\">
                                    Valider
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderrer\" width=\"50%\">MULTIPLIER PAR</td>
                            <td width=\"50%\" align=\"center\">
                                <input type=\"number\" name=\"add\" id=\"multipri\" min=\"1\" max=\"10\"
                                       style=\"width: 10em;\">
                                <button class=\"btn btn-secondary btn-sm\"
                                        onclick=\"gaoula('multi','pri','multipri','devis',";
        // line 1934
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1934, $this->source); })()), "id", [], "any", false, false, false, 1934), "html", null, true);
        yield ");\">
                                    Valider
                                </button>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderrer\" width=\"50%\">DIVISER PAR</td>
                            <td width=\"50%\" align=\"center\">
                                <input type=\"number\" name=\"add\" id=\"divisepri\" min=\"1\" max=\"10\"
                                       style=\"width: 10em;\">
                                <button class=\"btn btn-secondary btn-sm\"
                                        onclick=\"gaoula('divi','pri','divisepri','devis',";
        // line 1944
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1944, $this->source); })()), "id", [], "any", false, false, false, 1944), "html", null, true);
        yield ");\">
                                    Valider
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"bolderr text-pri bolderrer\">PLUS UN POURCENTAGE DE</td>
                            <td width=\"50%\" align=\"center\">
                                <input type=\"number\" name=\"add\" id=\"pourcentepri\"
                                       min=\"1\" max=\"10\" style=\"width: 10em;\">
                                <button class=\"btn btn-secondary btn-sm\"
                                        onclick=\"gaoula('pourcentplus','pri','pourcentepri','devis',";
        // line 1955
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1955, $this->source); })()), "id", [], "any", false, false, false, 1955), "html", null, true);
        yield ");\">
                                    Valider
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"bolderr text-pri bolderrer\" width=\"50%\">MOINS UN POURCENTAGE
                                DE
                            </td>
                            <td width=\"50%\" align=\"center\">
                                <input type=\"number\" name=\"add\" id=\"pourcentespri\"
                                       min=\"1\" max=\"10\" style=\"width: 10em;\">
                                <button class=\"btn btn-secondary btn-sm\"
                                        onclick=\"gaoula('pourcentmoins','pri','pourcentespri','devis',";
        // line 1968
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1968, $this->source); })()), "id", [], "any", false, false, false, 1968), "html", null, true);
        yield ");\">
                                    Valider
                                </button>
                            </td>
                        </tr>

                    </table>
                    <br><br>
                    ";
        // line 1976
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1976, $this->source); })()), "aarem", [], "any", false, false, false, 1976) == "oui")) {
            // line 1977
            yield "                        <table class=\"table-bordered\" width=\"100%\">
                            <tr class=\"bg-info bolderrer text-white\">
                                <td colspan=\"3\">&raquo; OPÉRATIONS SUR TOUS
                                    LES REMISES
                                </td>
                            </tr>
                            <tr>
                                <td class=\"bolderr text-pri bolderrer\">::. AJOUTER</td>
                                <td>
                                    <input type=\"number\" name=\"add\" id=\"addrem\" style=\"width: 50%\">
                                </td>
                                <td width=\"10%\">
                                    <button class=\"btn btn-info btn-sm\"
                                            onclick=\"gaoula('add','rem','addrem','devis',";
            // line 1990
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1990, $this->source); })()), "id", [], "any", false, false, false, 1990), "html", null, true);
            yield ");\">
                                        Valider
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class=\"bolderr text-pri bolderrer\">::. SOUSTRAIRE</td>
                                <td>
                                    <input type=\"number\" name=\"add\" id=\"sousrem\" style=\"width: 50%\">
                                </td>
                                <button class=\"btn btn-info btn-sm\"
                                        onclick=\"gaoula('sous','rem','sousrem','devis',";
            // line 2001
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2001, $this->source); })()), "id", [], "any", false, false, false, 2001), "html", null, true);
            yield ");\">
                                    Valider
                                </button>
                                </td>
                            </tr>
                            <tr>
                                <td class=\"bolderr text-pri bolderrer\">::. MULTIPLIER PAR</td>
                                <td>
                                    <input type=\"number\" name=\"add\" id=\"multirem\"
                                           style=\"width: 50%\">
                                </td>
                                <td width=\"10%\">
                                    <button class=\"btn btn-info btn-sm\"
                                            onclick=\"gaoula('multi','rem','multirem','devis',";
            // line 2014
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2014, $this->source); })()), "id", [], "any", false, false, false, 2014), "html", null, true);
            yield ");\">
                                        Valider
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class=\"bolderr text-pri bolderrer\">::. DIVISER PAR</td>
                                <td>
                                    <input type=\"number\" name=\"add\" id=\"diviserem\"
                                           style=\"width: 50%\">
                                </td>
                                <button class=\"btn btn-info btn-sm\"
                                        onclick=\"gaoula('divi','rem','diviserem','devis',";
            // line 2026
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2026, $this->source); })()), "id", [], "any", false, false, false, 2026), "html", null, true);
            yield ");\">
                                    Valider
                                </button>
                                </td>
                            </tr>
                            <tr>
                                <td class=\"bolderr text-pri bolderrer\">::. PLUS UN POURCENTAGE DE
                                </td>
                                <td>
                                    <input type=\"number\" name=\"add\" id=\"pourcenterem\"
                                           style=\"width: 50%\">
                                </td>
                                <button class=\"btn btn-info btn-sm\"
                                        onclick=\"gaoula('pourcentplus','rem','pourcenterem','devis',";
            // line 2039
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2039, $this->source); })()), "id", [], "any", false, false, false, 2039), "html", null, true);
            yield ");\">
                                    Valider
                                </button>
                                </td>
                            </tr>
                            <tr>
                                <td class=\"bolderr text-pri bolderrer\">::. MOINS UN POURCENTAGE DE
                                </td>
                                <td>
                                    <input type=\"number\" name=\"add\" id=\"pourcentesrem\"
                                           style=\"width: 50%\">
                                </td>
                                <button class=\"btn btn-info btn-sm\"
                                        onclick=\"gaoula('pourcentmoins','rem','pourcentesrem','devis',";
            // line 2052
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2052, $this->source); })()), "id", [], "any", false, false, false, 2052), "html", null, true);
            yield ");\">
                                    Valider
                                </button>
                                </td>
                            </tr>
                        </table>
                    ";
        }
        // line 2059
        yield "                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalDecompte\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-blue col-white\">
                <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">CRÉER UN DÉCOMPTE</h4>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    ";
        // line 2073
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formDecompte"]) || array_key_exists("formDecompte", $context) ? $context["formDecompte"] : (function () { throw new RuntimeError('Variable "formDecompte" does not exist.', 2073, $this->source); })()), 'form_start', ["attr" => ["id" => "addDecompteForm"]]);
        yield "
                    <input type=\"hidden\" name=\"token\" value=\"";
        // line 2074
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("dectoken"), "html", null, true);
        yield "\"/>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-5\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DEVIS VALIDÉS</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    <select id=\"devdec\" name=\"devdec\" class=\"form-control\">
                                        <option disabled=\"disabled\" selected=\"selected\">Choisir un devis</option>
                                        ";
        // line 2082
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 2082, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 2083
            yield "                                            ";
            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 2083)) && (null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 2083)))) {
                // line 2084
                yield "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 2084));
                foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                    // line 2085
                    yield "                                                    ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 2085))) {
                        // line 2086
                        yield "                                                        ";
                        $context["oop"] = 0;
                        // line 2087
                        yield "                                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "devis", [], "any", false, false, false, 2087));
                        foreach ($context['_seq'] as $context["_key"] => $context["dev"]) {
                            // line 2088
                            yield "                                                            ";
                            $context["op"] = 0;
                            // line 2089
                            yield "                                                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "decomptes", [], "any", false, false, false, 2089));
                            foreach ($context['_seq'] as $context["_key"] => $context["dec"]) {
                                // line 2090
                                yield "                                                                ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["dec"], "avancement", [], "any", false, false, false, 2090) == 100)) {
                                    // line 2091
                                    yield "                                                                    ";
                                    $context["op"] = ((isset($context["op"]) || array_key_exists("op", $context) ? $context["op"] : (function () { throw new RuntimeError('Variable "op" does not exist.', 2091, $this->source); })()) + 1);
                                    // line 2092
                                    yield "                                                                ";
                                }
                                // line 2093
                                yield "                                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['dec'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 2094
                            yield "                                                            ";
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "etat", [], "any", false, false, false, 2094) == "valide") && ((isset($context["op"]) || array_key_exists("op", $context) ? $context["op"] : (function () { throw new RuntimeError('Variable "op" does not exist.', 2094, $this->source); })()) == 0))) {
                                // line 2095
                                yield "                                                                ";
                                $context["oop"] = ((isset($context["oop"]) || array_key_exists("oop", $context) ? $context["oop"] : (function () { throw new RuntimeError('Variable "oop" does not exist.', 2095, $this->source); })()) + 1);
                                // line 2096
                                yield "                                                            ";
                            }
                            // line 2097
                            yield "                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['dev'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 2098
                        yield "
                                                        ";
                        // line 2099
                        if (((isset($context["oop"]) || array_key_exists("oop", $context) ? $context["oop"] : (function () { throw new RuntimeError('Variable "oop" does not exist.', 2099, $this->source); })()) > 0)) {
                            // line 2100
                            yield "                                                            <optgroup
                                                                    label=\"";
                            // line 2101
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 2101)), "html", null, true);
                            yield " | ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 2101)), "html", null, true);
                            yield "\">
                                                                ";
                            // line 2102
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "devis", [], "any", false, false, false, 2102));
                            foreach ($context['_seq'] as $context["_key"] => $context["dev"]) {
                                // line 2103
                                yield "                                                                    ";
                                $context["op"] = 0;
                                // line 2104
                                yield "                                                                    ";
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "decomptes", [], "any", false, false, false, 2104));
                                foreach ($context['_seq'] as $context["_key"] => $context["dec"]) {
                                    // line 2105
                                    yield "                                                                        ";
                                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["dec"], "avancement", [], "any", false, false, false, 2105) == 100)) {
                                        // line 2106
                                        yield "                                                                            ";
                                        $context["op"] = ((isset($context["op"]) || array_key_exists("op", $context) ? $context["op"] : (function () { throw new RuntimeError('Variable "op" does not exist.', 2106, $this->source); })()) + 1);
                                        // line 2107
                                        yield "                                                                        ";
                                    }
                                    // line 2108
                                    yield "                                                                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_key'], $context['dec'], $context['_parent']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 2109
                                yield "                                                                    ";
                                if (((CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "etat", [], "any", false, false, false, 2109) == "valide") && ((isset($context["op"]) || array_key_exists("op", $context) ? $context["op"] : (function () { throw new RuntimeError('Variable "op" does not exist.', 2109, $this->source); })()) == 0))) {
                                    // line 2110
                                    yield "                                                                        <option value=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "id", [], "any", false, false, false, 2110), "html", null, true);
                                    yield "\"
                                                                                class=\"";
                                    // line 2111
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "id", [], "any", false, false, false, 2111), "html", null, true);
                                    yield "\">";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "iddevis", [], "any", false, false, false, 2111), "html", null, true);
                                    yield "</option>
                                                                    ";
                                }
                                // line 2113
                                yield "                                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['dev'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 2114
                            yield "                                                            </optgroup>
                                                        ";
                        }
                        // line 2116
                        yield "                                                    ";
                    }
                    // line 2117
                    yield "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 2118
                yield "                                            ";
            }
            // line 2119
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2120
        yield "                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-7\">
                            <label class=\"form-label m-b--30 col-blue bolo\">ACOMPTE DE DEMARRAGE(%)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    <input type=\"text\" id=\"acomrage\" name=\"acompte\" class=\"form-control\" required>
                                </div>
                                <p class=\"h6 devcoy\"></p>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">RETENUE DE GARANTIE(%)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 2139
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDecompte"]) || array_key_exists("formDecompte", $context) ? $context["formDecompte"] : (function () { throw new RuntimeError('Variable "formDecompte" does not exist.', 2139, $this->source); })()), "garantie", [], "any", false, false, false, 2139), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                                <p class=\"h6 devcoy\"></p>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">RETENUE DE FINITION(%)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 2148
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDecompte"]) || array_key_exists("formDecompte", $context) ? $context["formDecompte"] : (function () { throw new RuntimeError('Variable "formDecompte" does not exist.', 2148, $this->source); })()), "finition", [], "any", false, false, false, 2148), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                                <p class=\"h6 devcoy\"></p>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">COMPTE PRORATA(%)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 2159
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDecompte"]) || array_key_exists("formDecompte", $context) ? $context["formDecompte"] : (function () { throw new RuntimeError('Variable "formDecompte" does not exist.', 2159, $this->source); })()), "prorata", [], "any", false, false, false, 2159), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                                <p class=\"h6 devcoy\"></p>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DATE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 2168
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDecompte"]) || array_key_exists("formDecompte", $context) ? $context["formDecompte"] : (function () { throw new RuntimeError('Variable "formDecompte" does not exist.', 2168, $this->source); })()), "date", [], "any", false, false, false, 2168), 'widget', ["attr" => ["class" => "form-control datepicker"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"addeDecompte\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect col-white bg-blue\">
                        <div type=\"button\" id=\"closeDecompte\" class=\"btn btn-link waves-effect col-white bg-pink\"
                             data-dismiss=\"modal\">
                            FERMER
                        </div>
                        <img src=\"";
        // line 2180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadDecompte\"></div>
                    <br>
                    <br>
                    <br>
                    ";
        // line 2185
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formDecompte"]) || array_key_exists("formDecompte", $context) ? $context["formDecompte"] : (function () { throw new RuntimeError('Variable "formDecompte" does not exist.', 2185, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalFacture\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-blue text-white\">
                <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">CRÉER UNE FACTURE</h4>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    ";
        // line 2200
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 2200, $this->source); })()), 'form_start', ["attr" => ["id" => "addFactureForm"]]);
        yield "
                    ";
        // line 2201
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 2201, $this->source); })()), "_token", [], "any", false, false, false, 2201), 'row');
        yield "
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DATE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 2207
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 2207, $this->source); })()), "date", [], "any", false, false, false, 2207), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">TYPE D'OPÉRATION<span
                                        class=\"col-red\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 2216
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 2216, $this->source); })()), "type", [], "any", false, false, false, 2216), 'widget', ["id" => "facselectez", "attr" => ["class" => "form-control", "id" => "facselect"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DEVIS VALIDÉS</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 2226
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 2226, $this->source); })()), "devis", [], "any", false, false, false, 2226), 'widget', ["required" => "", "attr" => ["class" => "form-control devo"]]);
        yield "
                                </div>
                                <p class=\"col-pink h6 dvo\"></p>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DÉCOMPTES VALIDÉS</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 2235
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 2235, $this->source); })()), "decompte", [], "any", false, false, false, 2235), 'widget', ["required" => "", "attr" => ["class" => "form-control deco"]]);
        yield "
                                </div>
                                <p class=\"col-pink h6 dco\"></p>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE OU OBJET</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 2246
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 2246, $this->source); })()), "factreference", [], "any", false, false, false, 2246), 'widget', ["id" => "editor3", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">INFORMATIONS SUR LA FACTURE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 2256
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 2256, $this->source); })()), "information", [], "any", false, false, false, 2256), 'widget', ["id" => "editor4", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"addFacture\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect text-white bg-blue\">
                        <div type=\"button\" id=\"closeFacture\" class=\"btn btn-link waves-effect text-white bg-pink\"
                             data-dismiss=\"modal\">
                            FERMER
                        </div>
                        <img src=\"";
        // line 2269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadFacture\">
                    </div>
                    <br><br><br>
                    ";
        // line 2273
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 2273, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalTechnique\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-pri text-white\">
                <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">OPÉRATIONS LIÉES</h4>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">

                    <h4 class=\"bolo700 col-blue\">DEVIS Nº ";
        // line 2289
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2289, $this->source); })()), "iddevis", [], "any", false, false, false, 2289), "html", null, true);
        yield " | <span
                                class=\"col-pink\">ÉTAT: ";
        // line 2290
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2290, $this->source); })()), "etat", [], "any", false, false, false, 2290) == "valide")) {
            yield " VALIDÉ ";
        }
        yield " ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2290, $this->source); })()), "etat", [], "any", false, false, false, 2290) == "save")) {
            yield " NON VALIDÉ ";
        }
        yield "</span>
                    </h4>
                    <br>
                    <table class=\"table table-striped\">
                        <tr>
                            <td colspan=\"4\" class=\"bolo700 text-left h5\">BONS DE COMMANDE ACHAT VALIDÉS</td>
                        </tr>
                        <tr>
                            <td>Bon Nº</td>
                            <td class=\"text-right\">Total HT</td>
                            <td class=\"text-right\">Total TTC</td>
                            <td class=\"text-right\">Fournisseur</td>
                        </tr>
                        ";
        // line 2303
        $context["thbon"] = 0;
        // line 2304
        yield "                        ";
        $context["ttcbon"] = 0;
        // line 2305
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2305, $this->source); })()), "bons", [], "any", false, false, false, 2305));
        foreach ($context['_seq'] as $context["_key"] => $context["bon"]) {
            // line 2306
            yield "                            ";
            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "corbeille", [], "any", false, false, false, 2306)) && (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "etat", [], "any", false, false, false, 2306) == "valide"))) {
                // line 2307
                yield "                                ";
                if (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "fournisseur", [], "any", false, false, false, 2307)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "fournisseur", [], "any", false, false, false, 2307), "type", [], "any", false, false, false, 2307) == 1))) {
                    // line 2308
                    yield "                                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "type", [], "any", false, false, false, 2308) != "non")) {
                        // line 2309
                        yield "                                        ";
                        $context["thbon"] = (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalht", [], "any", false, false, false, 2309) + (isset($context["thbon"]) || array_key_exists("thbon", $context) ? $context["thbon"] : (function () { throw new RuntimeError('Variable "thbon" does not exist.', 2309, $this->source); })()));
                        // line 2310
                        yield "                                        ";
                        $context["ttcbon"] = (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalttc", [], "any", false, false, false, 2310) + (isset($context["ttcbon"]) || array_key_exists("ttcbon", $context) ? $context["ttcbon"] : (function () { throw new RuntimeError('Variable "ttcbon" does not exist.', 2310, $this->source); })()));
                        // line 2311
                        yield "                                    ";
                    }
                    // line 2312
                    yield "                                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "type", [], "any", false, false, false, 2312) == "non")) {
                        // line 2313
                        yield "                                        ";
                        $context["thbon"] = (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalht", [], "any", false, false, false, 2313) - (isset($context["thbon"]) || array_key_exists("thbon", $context) ? $context["thbon"] : (function () { throw new RuntimeError('Variable "thbon" does not exist.', 2313, $this->source); })()));
                        // line 2314
                        yield "                                        ";
                        $context["ttcbon"] = (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalttc", [], "any", false, false, false, 2314) - (isset($context["ttcbon"]) || array_key_exists("ttcbon", $context) ? $context["ttcbon"] : (function () { throw new RuntimeError('Variable "ttcbon" does not exist.', 2314, $this->source); })()));
                        // line 2315
                        yield "                                    ";
                    }
                    // line 2316
                    yield "                                    <tr>
                                        <td><a href=\"#\" onclick=\"shasha(";
                    // line 2317
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "id", [], "any", false, false, false, 2317), "html", null, true);
                    yield ",'imprimbon');\">
                                                <i class=\"fa fa-eye col-green\"
                                                   aria-hidden=\"true\"></i>
                                            </a><a href=\"";
                    // line 2320
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editbon", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "id", [], "any", false, false, false, 2320), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "chantier", [], "any", false, false, false, 2320), "id", [], "any", false, false, false, 2320)]), "html", null, true);
                    yield "\"
                                                   class=\"col-indigo\">Nº ";
                    // line 2321
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "numbon", [], "any", false, false, false, 2321), "html", null, true);
                    yield "</a><br>
                                        </td>
                                        <td class=\"text-right\">";
                    // line 2323
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalht", [], "any", false, false, false, 2323), 2, ",", " "), "html", null, true);
                    yield "</td>
                                        <td class=\"text-right\">";
                    // line 2324
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalttc", [], "any", false, false, false, 2324), 2, ",", " "), "html", null, true);
                    yield "</td>
                                        <td class=\"text-left col-pink bolo600\" colspan=\"3\"
                                            style=\"margin-left: 60px !important;\">
                                            ";
                    // line 2327
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "fournisseur", [], "any", false, false, false, 2327)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 2328
                        yield "                                                ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "fournisseur", [], "any", false, false, false, 2328), "fournisseur", [], "any", false, false, false, 2328), "html", null, true);
                        yield "
                                            ";
                    }
                    // line 2330
                    yield "                                        </td>
                                    </tr>
                                ";
                }
                // line 2333
                yield "                                ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "fournisseur", [], "any", false, false, false, 2333))) {
                    // line 2334
                    yield "                                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "type", [], "any", false, false, false, 2334) != "non")) {
                        // line 2335
                        yield "                                        ";
                        $context["thbon"] = (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalht", [], "any", false, false, false, 2335) + (isset($context["thbon"]) || array_key_exists("thbon", $context) ? $context["thbon"] : (function () { throw new RuntimeError('Variable "thbon" does not exist.', 2335, $this->source); })()));
                        // line 2336
                        yield "                                        ";
                        $context["ttcbon"] = (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalttc", [], "any", false, false, false, 2336) + (isset($context["ttcbon"]) || array_key_exists("ttcbon", $context) ? $context["ttcbon"] : (function () { throw new RuntimeError('Variable "ttcbon" does not exist.', 2336, $this->source); })()));
                        // line 2337
                        yield "                                    ";
                    }
                    // line 2338
                    yield "                                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "type", [], "any", false, false, false, 2338) == "non")) {
                        // line 2339
                        yield "                                        ";
                        $context["thbon"] = (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalht", [], "any", false, false, false, 2339) - (isset($context["thbon"]) || array_key_exists("thbon", $context) ? $context["thbon"] : (function () { throw new RuntimeError('Variable "thbon" does not exist.', 2339, $this->source); })()));
                        // line 2340
                        yield "                                        ";
                        $context["ttcbon"] = (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalttc", [], "any", false, false, false, 2340) - (isset($context["ttcbon"]) || array_key_exists("ttcbon", $context) ? $context["ttcbon"] : (function () { throw new RuntimeError('Variable "ttcbon" does not exist.', 2340, $this->source); })()));
                        // line 2341
                        yield "                                    ";
                    }
                    // line 2342
                    yield "                                    <tr>
                                        <td><a href=\"#\" onclick=\"shasha(";
                    // line 2343
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "id", [], "any", false, false, false, 2343), "html", null, true);
                    yield ",'imprimbon');\">
                                                <i class=\"fa fa-eye col-green\"
                                                   aria-hidden=\"true\"></i>
                                            </a><a href=\"";
                    // line 2346
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editbon", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "id", [], "any", false, false, false, 2346), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "chantier", [], "any", false, false, false, 2346), "id", [], "any", false, false, false, 2346)]), "html", null, true);
                    yield "\"
                                                   class=\"col-indigo\">Nº ";
                    // line 2347
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "numbon", [], "any", false, false, false, 2347), "html", null, true);
                    yield "</a><br>
                                        </td>
                                        <td class=\"text-right\">";
                    // line 2349
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalht", [], "any", false, false, false, 2349), 2, ",", " "), "html", null, true);
                    yield "</td>
                                        <td class=\"text-right\">";
                    // line 2350
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalttc", [], "any", false, false, false, 2350), 2, ",", " "), "html", null, true);
                    yield "</td>
                                        <td class=\"text-right\"></td>
                                    </tr>
                                ";
                }
                // line 2354
                yield "                            ";
            }
            // line 2355
            yield "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['bon'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2356
        yield "                        <td class=\"bolo600 col-blue text-right\">TOTAUX</td>
                        <td class=\"text-right col-blue\">";
        // line 2357
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["thbon"]) || array_key_exists("thbon", $context) ? $context["thbon"] : (function () { throw new RuntimeError('Variable "thbon" does not exist.', 2357, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</td>
                        <td class=\"text-right col-blue\">";
        // line 2358
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["ttcbon"]) || array_key_exists("ttcbon", $context) ? $context["ttcbon"] : (function () { throw new RuntimeError('Variable "ttcbon" does not exist.', 2358, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</td>
                    </table>
                    <table class=\"table table-striped\">
                        <tr>
                            <td colspan=\"4\" class=\"bolo700 text-left h5\">BONS DE COMMANDE PRESTATAIRE VALIDÉS</td>
                        </tr>
                        <tr>
                            <td>Bon Nº</td>
                            <td class=\"text-right\">Total HT</td>
                            <td class=\"text-right\">Total TTC</td>
                            <td class=\"text-right\">Prestataire</td>
                        </tr>
                        ";
        // line 2370
        $context["thebon"] = 0;
        // line 2371
        yield "                        ";
        $context["ttecbon"] = 0;
        // line 2372
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2372, $this->source); })()), "bons", [], "any", false, false, false, 2372));
        foreach ($context['_seq'] as $context["_key"] => $context["bon"]) {
            // line 2373
            yield "                            ";
            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "corbeille", [], "any", false, false, false, 2373)) && (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "etat", [], "any", false, false, false, 2373) == "valide"))) {
                // line 2374
                yield "                                ";
                if (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "fournisseur", [], "any", false, false, false, 2374)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "fournisseur", [], "any", false, false, false, 2374), "type", [], "any", false, false, false, 2374) == 3))) {
                    // line 2375
                    yield "                                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "type", [], "any", false, false, false, 2375) != "non")) {
                        // line 2376
                        yield "                                        ";
                        $context["thebon"] = (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalht", [], "any", false, false, false, 2376) + (isset($context["thebon"]) || array_key_exists("thebon", $context) ? $context["thebon"] : (function () { throw new RuntimeError('Variable "thebon" does not exist.', 2376, $this->source); })()));
                        // line 2377
                        yield "                                        ";
                        $context["ttecbon"] = (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalttc", [], "any", false, false, false, 2377) + (isset($context["ttecbon"]) || array_key_exists("ttecbon", $context) ? $context["ttecbon"] : (function () { throw new RuntimeError('Variable "ttecbon" does not exist.', 2377, $this->source); })()));
                        // line 2378
                        yield "                                    ";
                    }
                    // line 2379
                    yield "                                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "type", [], "any", false, false, false, 2379) == "non")) {
                        // line 2380
                        yield "                                        ";
                        $context["thebon"] = (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalht", [], "any", false, false, false, 2380) - (isset($context["thebon"]) || array_key_exists("thebon", $context) ? $context["thebon"] : (function () { throw new RuntimeError('Variable "thebon" does not exist.', 2380, $this->source); })()));
                        // line 2381
                        yield "                                        ";
                        $context["ttecbon"] = (CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalttc", [], "any", false, false, false, 2381) - (isset($context["ttecbon"]) || array_key_exists("ttecbon", $context) ? $context["ttecbon"] : (function () { throw new RuntimeError('Variable "ttecbon" does not exist.', 2381, $this->source); })()));
                        // line 2382
                        yield "                                    ";
                    }
                    // line 2383
                    yield "                                    <tr>
                                        <td><a href=\"#\" onclick=\"shasha(";
                    // line 2384
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "id", [], "any", false, false, false, 2384), "html", null, true);
                    yield ",'imprimbon');\">
                                                <i class=\"fa fa-eye col-green\"
                                                   aria-hidden=\"true\"></i>
                                            </a><a href=\"";
                    // line 2387
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editbon", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "id", [], "any", false, false, false, 2387), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "chantier", [], "any", false, false, false, 2387), "id", [], "any", false, false, false, 2387)]), "html", null, true);
                    yield "\"
                                                   class=\"col-indigo\">Nº ";
                    // line 2388
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "numbon", [], "any", false, false, false, 2388), "html", null, true);
                    yield "</a><br>
                                        </td>
                                        <td class=\"text-right\">";
                    // line 2390
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalht", [], "any", false, false, false, 2390), 2, ",", " "), "html", null, true);
                    yield "</td>
                                        <td class=\"text-right\">";
                    // line 2391
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "totalttc", [], "any", false, false, false, 2391), 2, ",", " "), "html", null, true);
                    yield "</td>
                                        <td class=\"text-left col-pink bolo600\" colspan=\"3\"
                                            style=\"margin-left: 60px !important;\">
                                            ";
                    // line 2394
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "fournisseur", [], "any", false, false, false, 2394)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 2395
                        yield "                                                ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["bon"], "fournisseur", [], "any", false, false, false, 2395), "fournisseur", [], "any", false, false, false, 2395), "html", null, true);
                        yield "
                                            ";
                    }
                    // line 2397
                    yield "                                        </td>
                                    </tr>
                                ";
                }
                // line 2400
                yield "                            ";
            }
            // line 2401
            yield "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['bon'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2402
        yield "                        <td class=\"bolo600 col-blue text-right\">TOTAUX</td>
                        <td class=\"text-right col-blue\">";
        // line 2403
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["thebon"]) || array_key_exists("thebon", $context) ? $context["thebon"] : (function () { throw new RuntimeError('Variable "thebon" does not exist.', 2403, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</td>
                        <td class=\"text-right col-blue\">";
        // line 2404
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["ttecbon"]) || array_key_exists("ttecbon", $context) ? $context["ttecbon"] : (function () { throw new RuntimeError('Variable "ttecbon" does not exist.', 2404, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</td>
                        <td class=\"text-right col-blue\"></td>
                    </table>
                    <table class=\"table table-striped\">
                        <tr class=\"bg-light-green\">
                            <td class=\"bolo700 col-orange h5\"></td>
                            <td class=\"text-center col-white\">TOTAL HT</td>
                            <td class=\"text-center col-white\">TOTAL TTC</td>
                        </tr>
                        <tr class=\"bg-light\">
                            <td class=\"bolo700 col-blue-grey h5\">TOTAUX DEVIS</td>
                            <td class=\"text-right col-blue-grey bolo700\">";
        // line 2415
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2415, $this->source); })()), "totalht", [], "any", false, false, false, 2415), 2, ",", " "), "html", null, true);
        yield "</td>
                            <td class=\"text-right col-blue-grey bolo700\">";
        // line 2416
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2416, $this->source); })()), "totalttc", [], "any", false, false, false, 2416), 2, ",", " "), "html", null, true);
        yield "</td>
                        </tr>
                        <tr class=\"bg-light\">
                            <td class=\"bolo700 col-blue-grey h5\">TOTAUX BONS DE COMMANDE</td>
                            <td class=\"text-right col-blue-grey bolo700\">";
        // line 2420
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((isset($context["thbon"]) || array_key_exists("thbon", $context) ? $context["thbon"] : (function () { throw new RuntimeError('Variable "thbon" does not exist.', 2420, $this->source); })()) + (isset($context["thebon"]) || array_key_exists("thebon", $context) ? $context["thebon"] : (function () { throw new RuntimeError('Variable "thebon" does not exist.', 2420, $this->source); })())), 2, ",", " "), "html", null, true);
        yield "</td>
                            <td class=\"text-right col-blue-grey bolo700\">";
        // line 2421
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((isset($context["ttcbon"]) || array_key_exists("ttcbon", $context) ? $context["ttcbon"] : (function () { throw new RuntimeError('Variable "ttcbon" does not exist.', 2421, $this->source); })()) + (isset($context["ttecbon"]) || array_key_exists("ttecbon", $context) ? $context["ttecbon"] : (function () { throw new RuntimeError('Variable "ttecbon" does not exist.', 2421, $this->source); })())), 2, ",", " "), "html", null, true);
        yield "</td>
                        </tr>
                        <tr class=\"bg-light\">
                            <td class=\"bolo700 col-blue-grey h5\">MARGE</td>
                            <td class=\"text-right col-black bolo700\">";
        // line 2425
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2425, $this->source); })()), "totalht", [], "any", false, false, false, 2425) - ((isset($context["thbon"]) || array_key_exists("thbon", $context) ? $context["thbon"] : (function () { throw new RuntimeError('Variable "thbon" does not exist.', 2425, $this->source); })()) + (isset($context["thebon"]) || array_key_exists("thebon", $context) ? $context["thebon"] : (function () { throw new RuntimeError('Variable "thebon" does not exist.', 2425, $this->source); })()))), 2, ",", " "), "html", null, true);
        yield "</td>
                            <td class=\"text-right col-black bolo700\">";
        // line 2426
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2426, $this->source); })()), "totalttc", [], "any", false, false, false, 2426) - ((isset($context["ttcbon"]) || array_key_exists("ttcbon", $context) ? $context["ttcbon"] : (function () { throw new RuntimeError('Variable "ttcbon" does not exist.', 2426, $this->source); })()) + (isset($context["ttecbon"]) || array_key_exists("ttecbon", $context) ? $context["ttecbon"] : (function () { throw new RuntimeError('Variable "ttecbon" does not exist.', 2426, $this->source); })()))), 2, ",", " "), "html", null, true);
        yield "</td>
                        </tr>
                    </table>
                    <table class=\"table table-striped\">
                        <tr>
                            <td colspan=\"4\" class=\"bolo700 text-left h5\">DÉCOMPTES</td>
                        </tr>
                        <tr>
                            <td>Décompte Nº</td>
                            <td>Facture Nº</td>
                            <td class=\"text-right\">Total HT</td>
                            <td class=\"text-right\">Total TTC</td>
                            <td class=\"text-right\">État</td>
                        </tr>
                        ";
        // line 2440
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2440, $this->source); })()), "decomptes", [], "any", false, false, false, 2440));
        foreach ($context['_seq'] as $context["_key"] => $context["dec"]) {
            // line 2441
            yield "                            <tr>
                                <td>
                                    <a href=\"#\"
                                       onclick=\"shasha(";
            // line 2444
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dec"], "id", [], "any", false, false, false, 2444), "html", null, true);
            yield ",'imprimdecompte');\">
                                        <i class=\"fa fa-eye col-green\"
                                           aria-hidden=\"true\"></i>
                                    </a>
                                    <a href=\"";
            // line 2448
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdecompte", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["dec"], "id", [], "any", false, false, false, 2448), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["dec"], "chantier", [], "any", false, false, false, 2448), "id", [], "any", false, false, false, 2448)]), "html", null, true);
            yield "\"
                                       class=\"col-indigo\">Nº";
            // line 2449
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dec"], "numdecompte", [], "any", false, false, false, 2449), "html", null, true);
            yield "
                                    </a>
                                </td>
                                <td>";
            // line 2452
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["dec"], "facture", [], "any", false, false, false, 2452)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["dec"], "facture", [], "any", false, false, false, 2452), "numfacture", [], "any", false, false, false, 2452), "html", null, true);
            }
            yield "</td>
                                <td class=\"text-right col-blue\">";
            // line 2453
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["dec"], "apayer", [], "any", false, false, false, 2453), 2, ",", " "), "html", null, true);
            yield "</td>
                                <td class=\"text-right col-blue\">";
            // line 2454
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["dec"], "ttc", [], "any", false, false, false, 2454), 2, ",", " "), "html", null, true);
            yield "</td>
                                <td class=\"text-right col-blue\">";
            // line 2455
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["dec"], "etat", [], "any", false, false, false, 2455) == "valide")) {
                yield "Validé";
            }
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["dec"], "etat", [], "any", false, false, false, 2455) == "save")) {
                yield "Non validé";
            }
            yield "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['dec'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2458
        yield "                    </table>
                    <table class=\"table table-striped\">
                        <tr>
                            <td colspan=\"5\" class=\"bolo700 text-left h5\">FACTURES</td>
                        </tr>
                        <tr>
                            <td>Fac Nº</td>
                            <td>Déc Nº</td>
                            <td class=\"text-right\">Total HT</td>
                            <td class=\"text-right\">Total TTC</td>
                            <td class=\"text-right\">État</td>
                        </tr>
                        ";
        // line 2470
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2470, $this->source); })()), "chantier", [], "any", false, false, false, 2470), "factures", [], "any", false, false, false, 2470));
        foreach ($context['_seq'] as $context["_key"] => $context["fac"]) {
            // line 2471
            yield "                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "devis", [], "any", false, false, false, 2471) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "devis", [], "any", false, false, false, 2471), "id", [], "any", false, false, false, 2471) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2471, $this->source); })()), "id", [], "any", false, false, false, 2471)))) {
                // line 2472
                yield "                                <tr>
                                    <td>
                                        <a href=\"#\"
                                           onclick=\"shasha(";
                // line 2475
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "id", [], "any", false, false, false, 2475), "html", null, true);
                yield ",'imprimfacture');\">
                                            <i class=\"fa fa-eye col-green\"
                                               aria-hidden=\"true\"></i>
                                        </a>
                                        <a href=\"";
                // line 2479
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editfacture", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "id", [], "any", false, false, false, 2479), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "chantier", [], "any", false, false, false, 2479), "id", [], "any", false, false, false, 2479)]), "html", null, true);
                yield "\"
                                           class=\"col-indigo\">Nº ";
                // line 2480
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "numfacture", [], "any", false, false, false, 2480), "html", null, true);
                yield "
                                        </a>
                                    </td>
                                    <td>";
                // line 2483
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "decompte", [], "any", false, false, false, 2483)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "decompte", [], "any", false, false, false, 2483), "numdecompte", [], "any", false, false, false, 2483), "html", null, true);
                }
                yield "</td>
                                    <td class=\"text-right\">";
                // line 2484
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "totalht", [], "any", false, false, false, 2484), 2, ",", " "), "html", null, true);
                yield "</td>
                                    <td class=\"text-right\">";
                // line 2485
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "totalttc", [], "any", false, false, false, 2485), 2, ",", " "), "html", null, true);
                yield "</td>
                                    <td class=\"text-right\">";
                // line 2486
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "etat", [], "any", false, false, false, 2486) == "valide")) {
                    yield "<span
                                                class=\"col-blue\">Validée</span>";
                }
                // line 2487
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "etat", [], "any", false, false, false, 2487) == "save")) {
                    // line 2488
                    yield "                                            <span class=\"col-pink\">Non validée</span>";
                }
                yield "</td>
                                </tr>
                            ";
            }
            // line 2491
            yield "                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "acompte", [], "any", false, false, false, 2491) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "acompte", [], "any", false, false, false, 2491), "devis", [], "any", false, false, false, 2491), "id", [], "any", false, false, false, 2491) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2491, $this->source); })()), "id", [], "any", false, false, false, 2491)))) {
                // line 2492
                yield "                                <tr>
                                    <td>
                                        <a href=\"#\"
                                           onclick=\"shasha(";
                // line 2495
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "id", [], "any", false, false, false, 2495), "html", null, true);
                yield ",'imprimfacture');\">
                                            <i class=\"fa fa-eye col-green\"
                                               aria-hidden=\"true\"></i>
                                        </a>
                                        <a href=\"";
                // line 2499
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editfacture", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "id", [], "any", false, false, false, 2499), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "chantier", [], "any", false, false, false, 2499), "id", [], "any", false, false, false, 2499)]), "html", null, true);
                yield "\"
                                           class=\"col-indigo\">Nº ";
                // line 2500
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "numfacture", [], "any", false, false, false, 2500), "html", null, true);
                yield "
                                        </a>
                                    </td>
                                    <td>";
                // line 2503
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "decompte", [], "any", false, false, false, 2503)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "decompte", [], "any", false, false, false, 2503), "numdecompte", [], "any", false, false, false, 2503), "html", null, true);
                }
                yield "</td>
                                    <td class=\"text-right\">";
                // line 2504
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "totalht", [], "any", false, false, false, 2504), 2, ",", " "), "html", null, true);
                yield "</td>
                                    <td class=\"text-right\">";
                // line 2505
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "totalttc", [], "any", false, false, false, 2505), 2, ",", " "), "html", null, true);
                yield "</td>
                                    <td class=\"text-right\">";
                // line 2506
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "etat", [], "any", false, false, false, 2506) == "valide")) {
                    yield "<span
                                                class=\"col-blue\">Validée</span>";
                }
                // line 2507
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "etat", [], "any", false, false, false, 2507) == "save")) {
                    // line 2508
                    yield "                                            <span class=\"col-pink\">Non validée</span>";
                }
                yield "</td>
                                </tr>
                            ";
            }
            // line 2511
            yield "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['fac'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2512
        yield "                    </table>
                    <table class=\"table table-striped\">
                        <tr>
                            <td colspan=\"5\" class=\"bolo700 text-left h5\">RÈGLEMENTS EFFECTUÉS</td>
                        </tr>
                        <tr>
                            <td>Règlements</td>
                            <td>Facture Nº</td>
                            <td class=\"text-right\">FACTURÉE</td>
                            <td class=\"text-right\">VERSÉE</td>
                            <td class=\"text-right\">RESTE</td>
                        </tr>
                        ";
        // line 2524
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 2524, $this->source); })()), "relevers", [], "any", false, false, false, 2524));
        foreach ($context['_seq'] as $context["_key"] => $context["rele"]) {
            // line 2525
            yield "                            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["rele"], "facture", [], "any", false, false, false, 2525)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 2526
                yield "                                <tr>
                                    <td class=\"col-blue\">";
                // line 2527
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rele"], "versement", [], "any", false, false, false, 2527), "html", null, true);
                yield "</td>
                                    <td>";
                // line 2528
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rele"], "facture", [], "any", false, false, false, 2528), "numfacture", [], "any", false, false, false, 2528), "html", null, true);
                yield "</td>
                                    <td class=\"text-right\">";
                // line 2529
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rele"], "facture", [], "any", false, false, false, 2529), "totalttc", [], "any", false, false, false, 2529), 2, ",", " "), "html", null, true);
                yield "</td>
                                    <td class=\"text-right\">";
                // line 2530
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["rele"], "montant", [], "any", false, false, false, 2530), 2, ",", " "), "html", null, true);
                yield "</td>
                                    <td class=\"text-right\">";
                // line 2531
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rele"], "facture", [], "any", false, false, false, 2531), "totalttc", [], "any", false, false, false, 2531) - CoreExtension::getAttribute($this->env, $this->source, $context["rele"], "montant", [], "any", false, false, false, 2531)), 2, ",", " "), "html", null, true);
                yield "</td>
                                </tr>
                            ";
            }
            // line 2534
            yield "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['rele'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2535
        yield "                    </table>
                    <table class=\"table table-striped\">
                        <tr>
                            <td colspan=\"5\" class=\"bolo700 text-left h5\">ARTICLES COMPOSÉS</td>
                        </tr>
                    </table>
                    <br><br> <br><br> <br><br> <br><br>
                </div>
            </div>
        </div>
    </div>
</div>

<section class=\"content fixed-top\">
    <div class=\"container-fluid\" style=\"margin: 0 14px 0 14px\">

        <div class=\"row\">
            <div class=\"col-md-12\">
                <div id=\"ressult\" style=\"width: 100%; align-content: start\" class=\"text-left\"></div>
            </div>
        </div>
    </div>
</section>

<section class=\"content\" style=\"margin-top: 100px !important;\">
    <div class=\"container-fluid\">
        <div class=\"row clearfix\">
            <div class=\"col-md-12\">
                <div class=\"mb-2 m-t--25\"
                     style=\"background-color: #d1d3e2 !important;\">
                    <div class=\"ont tohidbut\">
                        <div id=\"shacontentDevis\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    localStorage.setItem('reloadd', 'devis/' + document.getElementById('iddevis').value + '/' + document.getElementById('idchantier').value);
</script>
";
        // line 2578
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("apdevis");
        yield "
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
        return "content/devis.html.twig";
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
        return array (  4212 => 2578,  4167 => 2535,  4161 => 2534,  4155 => 2531,  4151 => 2530,  4147 => 2529,  4143 => 2528,  4139 => 2527,  4136 => 2526,  4133 => 2525,  4129 => 2524,  4115 => 2512,  4109 => 2511,  4102 => 2508,  4099 => 2507,  4094 => 2506,  4090 => 2505,  4086 => 2504,  4080 => 2503,  4074 => 2500,  4070 => 2499,  4063 => 2495,  4058 => 2492,  4055 => 2491,  4048 => 2488,  4045 => 2487,  4040 => 2486,  4036 => 2485,  4032 => 2484,  4026 => 2483,  4020 => 2480,  4016 => 2479,  4009 => 2475,  4004 => 2472,  4001 => 2471,  3997 => 2470,  3983 => 2458,  3968 => 2455,  3964 => 2454,  3960 => 2453,  3954 => 2452,  3948 => 2449,  3944 => 2448,  3937 => 2444,  3932 => 2441,  3928 => 2440,  3911 => 2426,  3907 => 2425,  3900 => 2421,  3896 => 2420,  3889 => 2416,  3885 => 2415,  3871 => 2404,  3867 => 2403,  3864 => 2402,  3858 => 2401,  3855 => 2400,  3850 => 2397,  3844 => 2395,  3842 => 2394,  3836 => 2391,  3832 => 2390,  3827 => 2388,  3823 => 2387,  3817 => 2384,  3814 => 2383,  3811 => 2382,  3808 => 2381,  3805 => 2380,  3802 => 2379,  3799 => 2378,  3796 => 2377,  3793 => 2376,  3790 => 2375,  3787 => 2374,  3784 => 2373,  3779 => 2372,  3776 => 2371,  3774 => 2370,  3759 => 2358,  3755 => 2357,  3752 => 2356,  3746 => 2355,  3743 => 2354,  3736 => 2350,  3732 => 2349,  3727 => 2347,  3723 => 2346,  3717 => 2343,  3714 => 2342,  3711 => 2341,  3708 => 2340,  3705 => 2339,  3702 => 2338,  3699 => 2337,  3696 => 2336,  3693 => 2335,  3690 => 2334,  3687 => 2333,  3682 => 2330,  3676 => 2328,  3674 => 2327,  3668 => 2324,  3664 => 2323,  3659 => 2321,  3655 => 2320,  3649 => 2317,  3646 => 2316,  3643 => 2315,  3640 => 2314,  3637 => 2313,  3634 => 2312,  3631 => 2311,  3628 => 2310,  3625 => 2309,  3622 => 2308,  3619 => 2307,  3616 => 2306,  3611 => 2305,  3608 => 2304,  3606 => 2303,  3584 => 2290,  3580 => 2289,  3561 => 2273,  3554 => 2269,  3538 => 2256,  3525 => 2246,  3511 => 2235,  3499 => 2226,  3486 => 2216,  3474 => 2207,  3465 => 2201,  3461 => 2200,  3443 => 2185,  3435 => 2180,  3420 => 2168,  3408 => 2159,  3394 => 2148,  3382 => 2139,  3361 => 2120,  3355 => 2119,  3352 => 2118,  3346 => 2117,  3343 => 2116,  3339 => 2114,  3333 => 2113,  3326 => 2111,  3321 => 2110,  3318 => 2109,  3312 => 2108,  3309 => 2107,  3306 => 2106,  3303 => 2105,  3298 => 2104,  3295 => 2103,  3291 => 2102,  3285 => 2101,  3282 => 2100,  3280 => 2099,  3277 => 2098,  3271 => 2097,  3268 => 2096,  3265 => 2095,  3262 => 2094,  3256 => 2093,  3253 => 2092,  3250 => 2091,  3247 => 2090,  3242 => 2089,  3239 => 2088,  3234 => 2087,  3231 => 2086,  3228 => 2085,  3223 => 2084,  3220 => 2083,  3216 => 2082,  3205 => 2074,  3201 => 2073,  3185 => 2059,  3175 => 2052,  3159 => 2039,  3143 => 2026,  3128 => 2014,  3112 => 2001,  3098 => 1990,  3083 => 1977,  3081 => 1976,  3070 => 1968,  3054 => 1955,  3040 => 1944,  3027 => 1934,  3013 => 1923,  3000 => 1913,  2979 => 1895,  2965 => 1884,  2951 => 1873,  2937 => 1862,  2923 => 1851,  2909 => 1840,  2879 => 1813,  2873 => 1810,  2862 => 1802,  2851 => 1794,  2837 => 1783,  2826 => 1775,  2813 => 1765,  2802 => 1757,  2789 => 1747,  2778 => 1739,  2764 => 1728,  2753 => 1720,  2740 => 1710,  2729 => 1702,  2718 => 1694,  2705 => 1684,  2694 => 1676,  2681 => 1666,  2670 => 1658,  2659 => 1650,  2648 => 1642,  2635 => 1632,  2626 => 1626,  2622 => 1625,  2600 => 1606,  2591 => 1599,  2585 => 1598,  2581 => 1596,  2577 => 1594,  2571 => 1593,  2566 => 1591,  2561 => 1590,  2558 => 1589,  2554 => 1588,  2549 => 1587,  2546 => 1586,  2543 => 1585,  2537 => 1584,  2534 => 1583,  2531 => 1582,  2528 => 1581,  2523 => 1580,  2520 => 1579,  2516 => 1578,  2493 => 1558,  2487 => 1555,  2474 => 1544,  2468 => 1542,  2462 => 1540,  2460 => 1539,  2451 => 1532,  2445 => 1530,  2439 => 1528,  2437 => 1527,  2424 => 1517,  2413 => 1509,  2400 => 1499,  2387 => 1489,  2376 => 1481,  2367 => 1475,  2363 => 1474,  2343 => 1457,  2337 => 1454,  2325 => 1444,  2319 => 1442,  2313 => 1440,  2311 => 1439,  2305 => 1438,  2297 => 1433,  2293 => 1432,  2272 => 1414,  2266 => 1411,  2254 => 1401,  2248 => 1399,  2242 => 1397,  2240 => 1396,  2234 => 1395,  2226 => 1390,  2222 => 1389,  2201 => 1371,  2195 => 1368,  2192 => 1367,  2184 => 1361,  2177 => 1357,  2173 => 1355,  2171 => 1354,  2164 => 1349,  2158 => 1347,  2155 => 1346,  2149 => 1344,  2143 => 1342,  2140 => 1341,  2138 => 1340,  2129 => 1333,  2123 => 1331,  2117 => 1329,  2115 => 1328,  2103 => 1318,  2097 => 1316,  2091 => 1314,  2089 => 1313,  2079 => 1305,  2073 => 1303,  2067 => 1301,  2065 => 1300,  2053 => 1290,  2047 => 1288,  2044 => 1287,  2038 => 1285,  2032 => 1283,  2029 => 1282,  2027 => 1281,  2016 => 1272,  2010 => 1270,  2004 => 1268,  2002 => 1267,  1990 => 1257,  1984 => 1255,  1981 => 1254,  1975 => 1252,  1969 => 1250,  1966 => 1249,  1964 => 1248,  1955 => 1241,  1949 => 1239,  1943 => 1237,  1941 => 1236,  1932 => 1230,  1928 => 1229,  1924 => 1227,  1916 => 1221,  1908 => 1215,  1906 => 1214,  1893 => 1204,  1886 => 1201,  1878 => 1195,  1871 => 1191,  1867 => 1189,  1865 => 1188,  1858 => 1183,  1852 => 1181,  1846 => 1179,  1844 => 1178,  1833 => 1169,  1827 => 1167,  1824 => 1166,  1818 => 1164,  1812 => 1162,  1809 => 1161,  1807 => 1160,  1801 => 1159,  1793 => 1154,  1789 => 1153,  1785 => 1151,  1777 => 1145,  1769 => 1139,  1767 => 1138,  1754 => 1128,  1748 => 1125,  1733 => 1113,  1722 => 1105,  1709 => 1095,  1696 => 1085,  1685 => 1077,  1672 => 1067,  1661 => 1059,  1648 => 1049,  1637 => 1041,  1624 => 1031,  1613 => 1023,  1600 => 1013,  1587 => 1003,  1576 => 995,  1567 => 989,  1562 => 988,  1553 => 985,  1550 => 984,  1546 => 983,  1527 => 967,  1520 => 963,  1505 => 951,  1492 => 941,  1481 => 933,  1468 => 923,  1457 => 915,  1443 => 904,  1432 => 896,  1418 => 885,  1407 => 877,  1394 => 867,  1381 => 857,  1370 => 849,  1356 => 838,  1345 => 830,  1336 => 824,  1332 => 823,  1318 => 812,  1314 => 811,  1310 => 810,  1306 => 809,  1302 => 808,  1298 => 807,  1293 => 805,  1289 => 804,  1285 => 803,  1281 => 802,  1277 => 801,  1273 => 800,  1265 => 794,  1262 => 793,  1255 => 791,  1252 => 790,  1249 => 789,  1247 => 788,  1244 => 787,  1238 => 786,  1235 => 785,  1232 => 784,  1230 => 783,  1223 => 779,  1218 => 778,  1216 => 776,  1215 => 773,  1211 => 771,  1203 => 766,  1198 => 764,  1194 => 763,  1189 => 760,  1186 => 759,  1183 => 758,  1180 => 757,  1175 => 756,  1167 => 750,  1165 => 749,  1162 => 748,  1159 => 747,  1156 => 746,  1153 => 745,  1148 => 744,  1145 => 743,  1143 => 742,  1133 => 734,  1130 => 733,  1123 => 731,  1120 => 730,  1117 => 729,  1115 => 728,  1112 => 727,  1106 => 726,  1103 => 725,  1100 => 724,  1098 => 723,  1091 => 719,  1086 => 718,  1084 => 716,  1083 => 713,  1079 => 711,  1071 => 706,  1066 => 704,  1062 => 703,  1057 => 700,  1054 => 699,  1051 => 698,  1048 => 697,  1043 => 696,  1035 => 690,  1033 => 689,  1030 => 688,  1027 => 687,  1024 => 686,  1021 => 685,  1016 => 684,  1013 => 683,  1011 => 682,  1000 => 673,  996 => 671,  987 => 666,  978 => 661,  976 => 660,  972 => 658,  963 => 653,  954 => 648,  952 => 647,  948 => 645,  939 => 640,  930 => 635,  928 => 634,  924 => 632,  915 => 627,  906 => 622,  904 => 621,  900 => 619,  891 => 614,  882 => 609,  880 => 608,  876 => 606,  867 => 601,  858 => 596,  856 => 595,  852 => 593,  843 => 588,  834 => 583,  832 => 582,  828 => 580,  819 => 575,  810 => 570,  808 => 569,  804 => 567,  795 => 562,  786 => 557,  784 => 556,  780 => 554,  771 => 549,  762 => 544,  760 => 543,  756 => 541,  747 => 536,  738 => 531,  736 => 530,  732 => 528,  723 => 523,  714 => 518,  712 => 517,  708 => 515,  699 => 510,  690 => 505,  688 => 504,  684 => 502,  675 => 497,  666 => 492,  664 => 491,  660 => 489,  651 => 484,  642 => 479,  640 => 478,  637 => 477,  635 => 476,  632 => 475,  623 => 470,  614 => 465,  612 => 464,  604 => 459,  588 => 445,  579 => 438,  570 => 432,  565 => 429,  553 => 423,  545 => 420,  540 => 418,  535 => 415,  531 => 414,  515 => 400,  512 => 399,  510 => 398,  507 => 397,  504 => 396,  498 => 393,  494 => 392,  491 => 391,  488 => 390,  486 => 389,  219 => 125,  215 => 124,  207 => 119,  203 => 118,  177 => 95,  168 => 89,  151 => 75,  142 => 69,  138 => 68,  119 => 52,  115 => 51,  108 => 47,  98 => 40,  90 => 35,  80 => 28,  69 => 20,  48 => 1,);
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
    <meta name=\"description\"
          content=\"Votre application multi-utilisateurs de gestion de chantiers: Comptabilité, Gestion technique, Suivi et gestion de matériel,Gestion des articles, Planning, Gestionnaire de stock, etc.\">
    <meta name=\"keywords\"
          content=\"carlinbleu, carlin bleu, carlin, gestion , projet, chantier, comptabilité, gestion technique, suivi , gestion de matériel, gestion de chantiersgestionnaire de projets, articles , showroom , matériels\">
    <meta name=\"author\" content=\"carlinGroup\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"https://www.carlinbleu.com/img/Icon-96.png\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css\"/>

    {{ encore_entry_link_tags('apdevis') }}

</head>
<body class=\"theme-red\" style=\"background-color: #d1d3e2 !important;\" id=\"bod\">
<style>
    .bood {
        position: relative;
        width: 100%;
        height: {{ 30 - forte.headerHeight - forte.footerHeight }}cm;
        padding-left: 1cm;
        padding-right: 1cm;
        overflow-y: scroll;
    }

    .footer {
        height: {{forte.footerHeight}}cm;
        bottom: 0;
    }

    .header {
        height: {{ forte.headerHeight }}cm;
        -webkit-print-color-adjust: exact;
        top: 0;
    }

    @media print {
        .footer-space {
            height: {{forte.footerHeight}}cm;
        }

        .header-space {
            height: {{ forte.headerHeight }}cm;
            margin-top: {{ forte.teteDH }}cm;
            -webkit-print-color-adjust: exact;
        }

        .header {
            position: fixed;
            top: 0;
            -webkit-print-color-adjust: exact;
        }

        .footer {
            position: fixed;
            bottom: 0;
        }

        th {
            background-color: {{ forte.decolor }} !important;
            color: {{ forte.decolortex }} !important;
        }

        table {
            border-spacing: 0;
            border-collapse: collapse;
            font-size: {{forte.dsize}}px;
            font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
        }

    }
</style>
<style>
    .kop {
        font-weight: 700
    }

    table {
        border-spacing: 0;
        border-collapse: collapse;
        font-size: {{forte.dsize}}px;
        font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
    }

    .togo {
        background-color: #EAEDED !important;
        font-size: {{forte.dsize}}px;
        font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
    }

    td.borde {
        border-spacing: 0;
        border-collapse: collapse;
        border: solid #D3D3D3;
        border-width: 1px 1px 1px 1px !important;
        padding: 4px !important;
        font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
    }

    td.barder {
        border-spacing: 0;
        border-collapse: collapse;
        border: solid #D3D3D3;
        border-width: 0 1px 1px 0 !important;
        padding: 4px !important;
        font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
    }

    tr.printer {
        background-color: {{ forte.decolor }} !important;
        color: {{ forte.decolortex }} !important;
        text-align: center;
    }

    tr.printa {
        background-color: {{forte.decolor}} !important;
        color: {{ forte.decolortex }} !important;
        text-align: center;
    }

    th.borde {
        border: solid #D3D3D3;
        border-width: 1px 1px 1px 1px;
        padding: 5px 15px 5px 15px;
    }

    th.barde {
        border: solid #D3D3D3;
        border-width: 0 1px 0 0;
        padding: 5px;
    }

    th.bor {
        border: solid #D3D3D3;
        border-width: 1px 1px 1px 1px;
        padding: 5px;
    }

    td.bordz {
        border: 0 solid #FFFFFF !important;
        padding: 0 0 0 5px !important;
    }

    #modif td {
        border: none !important;
    }

    .pp100 {
        padding: 10px !important;
    }

</style>

<div class=\"modal fade\" id=\"ModalSearch\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title text-center\" id=\"defaultModalLabel\">RECHERCHER<br>
                    <span class=\"col-pink\" style=\"font-size: 14px; \">Chantier- Devis - Bon de commande - Bon de livraison - Facture - Bon de caisse</span>
                </h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher...\" id=\"richi\"
                           style=\"border: 2px solid dodgerblue; padding: 10px\"/>
                </div>
                <div id=\"ressult\" style=\"width: 100%; align-content: start\" class=\"text-left\"></div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-link waves-effect\" data-dismiss=\"modal\">FERMER</button>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"ModalErreur\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-sm modal-notify\" role=\"document\">
        <div class=\"modal-content text-center\">
            <div class=\"modal-header d-flex justify-content-center bg-pink\">
                <h4 class=\"bolo700\">
                    ERREUR
                </h4>
            </div>
            <div class=\"modal-body\" style=\"height: 120px !important;\">
                <i class=\"fas fa-exclamation-triangle fa-4x animated rotateIn col-pink\"></i>
                <h4 class=\"col-black\">
                    IMPOSSIBLE DE TRAITER VOTRE REQUÊTE
                </h4>
            </div>
            <div class=\"text-center\">
                <div type=\"button\" id=\"closeLier\" class=\"btn btn-link waves-effect text-white bg-pink\"
                     data-dismiss=\"modal\">
                    FERMER
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"ModalErrCai\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-sm modal-notify\" role=\"document\">
        <div class=\"modal-content text-center\">
            <div class=\"modal-header d-flex justify-content-center bg-pink\">
                <h4 class=\"bolo700\">
                    ERREUR
                </h4>
            </div>
            <div class=\"modal-body\">
                <i class=\"fas fa-exclamation-triangle fa-4x animated rotateIn col-pink\"></i>
                <h4 class=\"col-black\">
                    VEUILLEZ SVP SUPPRIMER LES BONS DE CAISSE CRÉES
                </h4>
            </div>
            <div class=\"text-center\">
                <div type=\"button\" id=\"closeLier\" class=\"btn btn-link waves-effect text-white bg-pink\"
                     data-dismiss=\"modal\">
                    FERMER
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"ModalErrInterve\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-sm modal-notify\" role=\"document\">
        <div class=\"modal-content text-center\">
            <div class=\"modal-header d-flex justify-content-center bg-pink\">
                <h4 class=\"bolo700\">
                    ERREUR
                </h4>
            </div>
            <div class=\"modal-body\">
                <i class=\"fas fa-exclamation-triangle fa-4x animated rotateIn col-pink\"></i>
                <h4 class=\"col-black\">
                    MONTANT À PAYER INFÉRIEUR AU MONTANT DÉJÀ RECU.
                </h4>
            </div>
            <div class=\"text-center\">
                <div type=\"button\" id=\"closeLier\" class=\"btn btn-link waves-effect text-white bg-pink\"
                     data-dismiss=\"modal\">
                    FERMER
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"ModalErreurDEVIS\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-sm modal-notify\" role=\"document\">
        <div class=\"modal-content text-center\">
            <div class=\"modal-header d-flex justify-content-center bg-pink\">
                <h4 class=\"bolo700\">
                    ERREUR
                </h4>
            </div>
            <div class=\"modal-body\">
                <i class=\"fa fa-exclamation-circle fa-4x animated rotateIn col-pink\"></i>
                <h4 class=\"col-pink\">
                    DES OPÉRATIONS ONT ÉTÉ FAITS SUR CE DEVIS. VEUILLEZ SVP LES DÉVALIDER ÉGALEMENT.
                </h4>
            </div>
            <div class=\"text-center\">
                <div type=\"button\" id=\"closeLier\" class=\"btn btn-link waves-effect text-white bg-pink\"
                     data-dismiss=\"modal\">
                    FERMER
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"ModalSucces\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-sm modal-notify\" role=\"document\">
        <div class=\"modal-content text-center\">
            <div class=\"modal-header d-flex justify-content-center bg-green\">
                <h4>
                    REQUÊTE ACCEPTÉE
                </h4>
            </div>
            <div class=\"modal-body\">
                <i class=\"fas fa-check-circle fa-4x animated rotateIn col-green\"></i>
                <h4 class=\"col-green\">
                    VALIDATION EN COURS ....
                </h4>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"Traitement\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-sm modal-notify\" role=\"document\">
        <div class=\"modal-content text-center\">
            <div class=\"modal-header d-flex justify-content-center bg-primary\">
                <h4 class=\"font-bold\">
                    TRAITEMENT
                </h4>
            </div>
            <div class=\"modal-body p-t-25\" style=\"height: 100px !important;\">
                <div class=\"preloader\">
                    <div class=\"spinner-layer pl-blue\">
                        <div class=\"circle-clipper left\">
                            <div class=\"circle\"></div>
                        </div>
                        <div class=\"circle-clipper right\">
                            <div class=\"circle\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"ConfirmDelete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-sm modal-notify\" role=\"document\">
        <div class=\"modal-content text-center\">
            <div class=\"modal-header d-flex justify-content-center bg-pink\">
                <h4 class=\"bolo700\">
                    ÊTES VOUS SUR ?
                </h4>
            </div>
            <div class=\"modal-body\" style=\"height: 100px !important;\">
                <i class=\"fas fa-times fa-4x animated rotateIn col-pink\"></i>
            </div>
            <div class=\"text-center\">
                <div type=\"button\" id=\"accept\" class=\"btn btn-link waves-effect text-white bg-primary\">
                    OUI
                </div>
                <div type=\"button\" id=\"closeLier\" class=\"btn btn-link waves-effect text-white bg-pink\"
                     data-dismiss=\"modal\">
                    NON
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"ConfirmDevaDevis\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-sm modal-notify\" role=\"document\">
        <div class=\"modal-content text-center\">
            <div class=\"modal-header d-flex justify-content-center bg-blue\">
                <h4>DES OPÉRATIONS PEUVENT ÊTRE LIÉES À CE DEVIS.</h4>
                <h4>CONTINUER ?</h4>
            </div>
            <div class=\"modal-body\">
                <i class=\"fa fa-exclamation-circle col-deep-orange\" style=\"font-size: 50px\"></i>
            </div>
            <div class=\"text-center\">
                <div type=\"button\" id=\"acceptDeva\" class=\"btn btn-link waves-effect text-white bg-primary\">
                    OUI
                </div>
                <div type=\"button\" id=\"closeDeva\" class=\"btn btn-link waves-effect text-white bg-pink\"
                     data-dismiss=\"modal\">
                    NON
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"large\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"shadow bg-white devtohide\"
                 style=\"height:29.7cm; margin: auto; padding: 0.6cm;\" id=\"shacontent\">
                <iframe id=\"frame\" src=\"\" style=\"width: 100%; height: 100%; border: none;\"></iframe>
            </div>
        </div>
    </div>
</div>

<nav class=\"navbar bg-blue\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <a href=\"javascript:void(0);\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
               data-target=\"#navbar-collapse\" aria-expanded=\"false\"></a>
            <a href=\"javascript:void(0);\" class=\"bars\"></a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"navbar-collapse\">
            <ul class=\"nav navbar-nav navbar-right m-t-5\">
                {% if libre is not defined %}
                    {% if app.user %}
                        <li class=\"col-yellow h4 bolo600 m-l-20\">
                            {{ app.user.nom|upper }}
                            {{ app.user.prenoms|upper }}
                        </li>
                    {% endif %}
                {% endif %}

                {% if app.user %}
                    {% if libre is not defined and app.user %}
                        <li class=\"hidere\"><a href=\"javascript:void(0);\" data-close=\"true\">
                           <span class=\"js-right-sidebars badge bg-purple\">CHANTIERS EN ÉTUDE</span></a>
                        </li>
                        <li class=\"hidere\"><a href=\"javascript:void(0);\" data-close=\"true\">
                           <span class=\"js-right-sidebar badge bg-pink\">CHANTIERS EN COURS</span></a>
                        </li>
                        <li class=\"dropdown\">
                        <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\">
                            <i class=\"material-icons\">notifications</i>
                        </a>
                        <ul class=\"dropdown-menu bg-light\" style=\"width: 370px !important\">
                            <li class=\"header col-pink\" style=\"font-size: 16px\">ACTIONS</li>
                            <li class=\"body\">
                                <ul class=\"menu\" style=\"width: 340px !important\">
                                    {% for history in history %}
                                        <li>
                                            <a href=\"javascript:void(0);\">
                                                <div class=\"menu-info\">
                                                    <h5 class=\"col-indigo font-weight-bold\">{{ history.action|striptags|raw }}</h5>
                                                    <h5 class=\"col-pink font-weight-bold\">
                                                        Par: {{ history.dobyuser.nom|upper }} {{ history.dobyuser.prenoms|upper }}</h5>
                                                    <p class=\"col-black\">
                                                        <i class=\"material-icons\">access_time</i> <span
                                                                style=\"font-size: 14px\">{{ history.date|date('d.m.Y H.m') }}</span>
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                    {% endfor %}
                                </ul>
                            </li>
                            <li class=\"footer bg-blue col-white\">
                                <a href=\"{{ path('historique') }}\" class=\"bolo text-white\" style=\"font-size: 16px\">
                                    Voir toutes les actions
                                </a>
                            </li>
                        </ul>
                    {% endif %}

                    <li class=\"hidere\">
                        <a data-toggle=\"modal\" data-target=\"#ModalSearch\">
                            <i class=\"material-icons\">search</i>
                        </a>
                    </li>
                {% endif %}
                <li>
                    <a href=\"#\" id=\"tgol\" title=\"Page d'acceuil\">
                        <i class=\"material-icons\">exit_to_app</i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section>
    <aside id=\"leftsidebar\" class=\"sidebar text-center bg-pri\"
           style=\"z-index: 1000 !important; margin-top: -70px; width: 240px; height: 100%\">
        <div class=\"user-info\" style=\"height: 150px !important;\">
            <img src=\"{{ asset('img/logoy.png') }}\" style=\"float: left; width: 200px !important;margin-top: 10px\"/>
        </div>
        <div class=\"menu\">
            <ul class=\"list\">
                <li class=\"active\">
                    {% if page is defined and page == 'page' %}
                        <a href=\"{{ path('welcome') }}\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">home</i>
                            <span class=\"col-yellow\">ACCUEIL</span>
                        </a>
                    {% else %}
                        <a href=\"{{ path('welcome') }}\" class=\"bolo\">
                            <i class=\"material-icons text-white\">home</i>
                            <span class=\"text-white\">Accueil</span>
                        </a>
                    {% endif %}
                </li>
                {% if app.user %}
                    <li class=\"active\">
                        {% if page is defined and page == 'message' %}
                            <a href=\"{{ path('message') }}\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">email</i>
                                <span class=\"col-yellow\">MESSAGERIE</span>
                            </a>
                        {% else %}
                            <a href=\"{{ path('message') }}\" class=\"bolo\">
                                <i class=\"material-icons text-white\">email</i>
                                <span class=\"text-white\">Messagerie</span>
                            </a>
                        {% endif %}
                    </li>
                    <li class=\"active\">
                        {% if page is defined and page == 'article' %}
                            <a href=\"{{ path('article') }}\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">content_copy</i>
                                <span class=\"col-yellow\">GESTION DES ARTICLES</span>
                            </a>
                        {% else %}
                            <a href=\"{{ path('article') }}\" class=\"bolo\">
                                <i class=\"material-icons text-white\">content_copy</i>
                                <span class=\"text-white\">Gestion des articles</span>
                            </a>
                        {% endif %}
                    </li>
                    <li class=\"active\">
                        {% if page is defined and page == 'listeclient' %}
                            <a href=\"{{ path('listeclient') }}\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">content_copy</i>
                                <span class=\"col-yellow\">LISTE DES CLIENTS</span>
                            </a>
                        {% else %}
                            <a href=\"{{ path('listeclient') }}\" class=\"bolo\">
                                <i class=\"material-icons text-white\">content_copy</i>
                                <span class=\"text-white\">Liste des clients</span>
                            </a>
                        {% endif %}
                    </li>
                    <li class=\"active\">
                        {% if page is defined and page == 'chanetude' %}
                            <a href=\"{{ path('chanetude') }}\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">content_copy</i>
                                <span class=\"col-yellow\">CHANTIERS EN ÉTUDE</span>
                            </a>
                        {% else %}
                            <a href=\"{{ path('chanetude') }}\" class=\"bolo\">
                                <i class=\"material-icons text-white\">content_copy</i>
                                <span class=\"text-white\">Chantiers en étude</span>
                            </a>
                        {% endif %}
                    </li>
                    <li class=\"active\">
                        {% if page is defined and page == 'chancours' %}
                            <a href=\"{{ path('chancours') }}\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">widgets</i>
                                <span class=\"col-yellow\">CHANTIERS EN COURS</span>
                            </a>
                        {% else %}
                            <a href=\"{{ path('chancours') }}\">
                                <i class=\"material-icons text-white\">widgets</i>
                                <span class=\"text-white\">Chantiers en cours</span>
                            </a>
                        {% endif %}
                    </li>
                    <li class=\"active\">
                        {% if page is defined and page == 'chanechouer' %}
                            <a href=\"{{ path('chanechouer') }}\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">widgets</i>
                                <span class=\"col-yellow\">CHANTIERS ÉCHOUÉS</span>
                            </a>
                        {% else %}
                            <a href=\"{{ path('chanechouer') }}\">
                                <i class=\"material-icons text-white\">widgets</i>
                                <span class=\"text-white\">Chantiers échoués</span>
                            </a>
                        {% endif %}
                    </li>
                    <li class=\"active\">
                        {% if page is defined and page == 'chanclotures' %}
                            <a href=\"{{ path('chanclotures') }}\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">widgets</i>
                                <span class=\"col-yellow\">CHANTIERS CLÔTURÉS</span>
                            </a>
                        {% else %}
                            <a href=\"{{ path('chanclotures') }}\">
                                <i class=\"material-icons text-white\">widgets</i>
                                <span class=\"text-white\">Chantiers clôturés</span>
                            </a>
                        {% endif %}
                    </li>
                    <li class=\"active\">
                        {% if page is defined and page == 'chantermines' %}
                            <a href=\"{{ path('chantermines') }}\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">widgets</i>
                                <span class=\"col-yellow\">CHANTIERS TERMINÉS</span>
                            </a>
                        {% else %}
                            <a href=\"{{ path('chantermines') }}\">
                                <i class=\"material-icons text-white\">widgets</i>
                                <span class=\"text-white\">Chantiers terminés</span>
                            </a>
                        {% endif %}
                    </li>
                    <li class=\"active\">
                        {% if page is defined and page == 'technique' %}
                            <a href=\"{{ path('technique') }}\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">open_with</i>
                                <span class=\"col-yellow\">GESTION TECHNIQUE</span>
                            </a>
                        {% else %}
                            <a href=\"{{ path('technique') }}\" class=\"bolo\">
                                <i class=\"material-icons text-white\">open_with</i>
                                <span class=\"text-white\">Gestion technique</span>
                            </a>
                        {% endif %}
                    </li>
                    <li class=\"active\">
                        {% if page is defined and page == 'materiel' %}
                            <a href=\"{{ path('materiel') }}\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">bubble_chart</i>
                                <span class=\"col-yellow\">GESTION DU MATÉRIEL</span>
                            </a>
                        {% else %}
                            <a href=\"{{ path('materiel') }}\" class=\"bolo\">
                                <i class=\"material-icons text-white\">bubble_chart</i>
                                <span class=\"text-white\">Gestion du matériel</span>
                            </a>
                        {% endif %}
                    </li>
                    <li class=\"active\">
                        {% if page is defined and page == 'personnel' %}
                            <a href=\"{{ path('personnel') }}\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">people_outline</i>
                                <span class=\"col-yellow\">GESTION DU PERSONNEL</span>
                            </a>
                        {% else %}
                            <a href=\"{{ path('personnel') }}\" class=\"bolo\">
                                <i class=\"material-icons text-white\">people_outline</i>
                                <span class=\"text-white\">Gestion du personnel</span>
                            </a>
                        {% endif %}
                    </li>
                    <li class=\"active\">
                        {% if page is defined and page == 'paie' %}
                            <a href=\"{{ path('paie') }}\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">toll</i>
                                <span class=\"col-yellow\">POINTS DE PAIE</span>
                            </a>
                        {% else %}
                            <a href=\"{{ path('paie') }}\">
                                <i class=\"material-icons text-white\">toll</i>
                                <span class=\"text-white\">Points de paie</span>
                            </a>
                        {% endif %}
                    </li>
                    <li class=\"active\">
                        {% if page is defined and page == 'parametre' %}
                            <a href=\"{{ path('parametre') }}\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">center_focus_weak</i>
                                <span class=\"col-yellow\">PARAMÈTRES</span>
                            </a>
                        {% else %}
                            <a href=\"{{ path('parametre') }}\" class=\"bolo\">
                                <i class=\"material-icons text-white\">center_focus_weak</i>
                                <span class=\"text-white\">Paramètres</span>
                            </a>
                        {% endif %}
                    </li>
                    <li class=\"active\">
                        {% if page is defined and page == 'historique' %}
                            <a href=\"{{ path('historique') }}\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">history</i>
                                <span class=\"col-yellow\">HISTORIQUE</span>
                            </a>
                        {% else %}
                            <a href=\"{{ path('historique') }}\" class=\"bolo\">
                                <i class=\"material-icons text-white\">history</i>
                                <span class=\"text-white\">Historique</span>
                            </a>
                        {% endif %}
                    </li>
                    <li class=\"active\">
                        {% if page is defined and page == 'corbeille' %}
                            <a href=\"{{ path('corbeille') }}\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">delete</i>
                                <span class=\"col-yellow\">CORBEILLE</span>
                            </a>
                        {% else %}
                            <a href=\"{{ path('corbeille') }}\" class=\"bolo\">
                                <i class=\"material-icons text-white\">delete</i>
                                <span class=\"text-white\">Corbeille</span>
                            </a>
                        {% endif %}
                    </li>
                {% endif %}
            </ul>
        </div>


    </aside>
    <aside id=\"rightsidebars\" class=\"right-sidebars m-t--25 p-t-10\" style=\"overflow: scroll\">
        <div class=\"tab-content\">
            <div role=\"tabpanel\" class=\"tab-pane fade in active in active\" id=\"chantier\">
                <div class=\"table-responsive\" style=\"padding: 10px !important;\">
                    {% if libre is not defined %}
                        {% set q = 0 %}
                        {% for client in clients %}
                            {% set p = 0 %}
                            {% if client.corbeille is null and client.chantiers.count > 0 %}
                                {% if client.type is null %}
                                    <table class=\"table-bordered shadow\" style=\" overflow: scroll; width: 100%\">
                                        {% if q == 0 %}
                                            <tr>
                                                <td colspan=\"2\" class=\"bg-purple text-white\"
                                                    style=\"padding-left: 5px;\">CHANTIERS EN ÉTUDE
                                                </td>
                                            </tr>
                                        {% endif %}
                                        {% for chantier in client.chantiers %}
                                            {% if chantier.corbeille is null %}
                                                {% if chantier.etat == \"etude\" %}
                                                    {% if p == 0 %}
                                                        <tr>
                                                            <td colspan=\"2\" class=\"bg-blue text-white\"
                                                                style=\"padding-left: 5px;\">
                                                                <a href=\"{{ path('client',{id: client.id}) }}\"
                                                                   class=\"text-white\" title=\"{{ client.nomclient }}\">
                                                                    -
                                                                    {{ client.nomclient }}
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    {% endif %}
                                                    <tr>
                                                        <td style=\"padding-left: 5px\" colspan=\"2\" class=\"bg-light\">
                                                            <a href=\"{{ path(
                                                                'chantier',
                                                                {
                                                                    id: chantier.id
                                                                }
                                                            ) }}\" class=\"text-pri\" title=\"{{ chantier.nomchantier }}\">
                                                                # {{ chantier.nomchantier[0:55]|upper }}
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    {% set p = p + 1 %}
                                                {% endif %}
                                            {% endif %}
                                        {% endfor %}
                                    </table>
                                    {% set q = q + 1 %}
                                {% endif %}
                            {% endif %}

                        {% endfor %}
                    {% endif %}
                </div>
            </div>
        </div>
    </aside>
    <aside id=\"rightsidebar\" class=\"right-sidebar m-t--25 p-t-10\" style=\"overflow: scroll\">
        <div class=\"tab-content\">
            <div role=\"tabpanel\" class=\"tab-pane fade in active in active\" id=\"chantier\">
                <div class=\"table-responsive\" style=\"padding: 10px !important;\">
                    {% if libre is not defined %}
                        {% set q = 0 %}
                        {% for client in clients %}
                            {% set p = 0 %}
                            {% if client.corbeille is null and client.chantiers.count > 0 %}
                                {% if client.type is null %}
                                    <table class=\"table-bordered shadow\" style=\" overflow: scroll; width: 100%\">
                                        {% if q == 0 %}
                                            <tr>
                                                <td colspan=\"2\" class=\"bg-pink text-white\"
                                                    style=\"padding-left: 5px;\">CHANTIERS EN COURS
                                                </td>
                                            </tr>
                                        {% endif %}
                                        {% for chantier in client.chantiers %}
                                            {% if chantier.corbeille is null %}
                                                {% if chantier.etat == \"encours\" %}
                                                    {% if p == 0 %}
                                                        <tr>
                                                            <td colspan=\"2\" class=\"bg-blue text-white\"
                                                                style=\"padding-left: 5px;\">
                                                                <a href=\"{{ path('client',{id: client.id}) }}\"
                                                                   class=\"text-white\" title=\"{{ client.nomclient }}\">
                                                                    -
                                                                    {{ client.nomclient }}
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    {% endif %}
                                                    <tr>
                                                        <td style=\"padding-left: 5px\" colspan=\"2\" class=\"bg-light\">
                                                            <a href=\"{{ path(
                                                                'chantier',
                                                                {
                                                                    id: chantier.id
                                                                }
                                                            ) }}\" class=\"text-pri\" title=\"{{ chantier.nomchantier }}\">
                                                                # {{ chantier.nomchantier[0:55]|upper }}
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    {% set p = p + 1 %}
                                                {% endif %}
                                            {% endif %}
                                        {% endfor %}
                                    </table>
                                    {% set q = q + 1 %}
                                {% endif %}
                            {% endif %}

                        {% endfor %}
                    {% endif %}
                </div>
            </div>
        </div>
    </aside>
</section>

<input type=\"text\" class=\"hide\" id=\"idchantier\" value=\"{{ chantier.id }}\">
<input type=\"text\" class=\"hide\" id=\"iddevis\" value=\"{{ devis.id }}\">
<input type=\"text\" class=\"hide\" id=\"idgroupe\" value=\"{{ groupe.id }}\">
<input type=\"text\" class=\"hide\" id=\"idgligne\" value=\"{{ idgligne }}\">
<input type=\"text\" class=\"hide\" id=\"idligne\" value=\"{{ ligne.id }}\">
<input type=\"text\" class=\"hide\" id=\"devdate\" value=\"{{ devis.date|date('d/m/Y') }}\">

<input type=\"text\" class=\"hide\" id=\"jsondevis\" value=\"{{ jsondevis }}\">
<input type=\"text\" class=\"hide\" id=\"jsondede\" value=\"{{ jsondede }}\">
<input type=\"text\" class=\"hide\" id=\"jsonforme\" value=\"{{ jsonforme }}\">
<input type=\"text\" class=\"hide\" id=\"jsonformes\" value=\"{{ jsonformes }}\">
<input type=\"text\" class=\"hide\" id=\"jsonusers\" value=\"{{ jsonusers }}\">
<input type=\"text\" class=\"hide\" id=\"idmaster\" value=\"{{ idmaster }}\">

<div class=\"modal fade right\" id=\"modalDevis\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-pri text-white\">
                <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">CRÉER UN NOUVEAU DEVIS</h4>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    {{ form_start(formneDevis, {'attr': {'id': 'addDevisForm'}}) }}
                    {{ form_row(formneDevis._token) }}
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">DATE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formneDevis.date,{'attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">AFFAIRE SUIVIE PAR:</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formneDevis.suivie,{'attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">TVA(%)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formneDevis.tva,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">VALIDITÉ DU DEVIS</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formneDevis.validit,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE OU OBJET</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formneDevis.devreference,{'required':'','id': 'editor','attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DEVISE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formneDevis.monnaie,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">CODE ARTICLE?</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formneDevis.aaref,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">OPTION TVA</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formneDevis.ptva,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">AVEC BASE TVA?</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formneDevis.abasetva,{'attr':{'class':'form-control'}}) }}
                                    <label class=\"form-label\"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">REMISE SUR LIGNES?</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formneDevis.aarem,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">AVEC COLONNE SECTION?</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formneDevis.zone,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">MODÈLE D'INFORMATIONS</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formneDevis.modele,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">MODÈLE DE RÉSULTAT</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formneDevis.model,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">INFORMATIONS</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formneDevis.conditions,{'required':'','id': 'editor2','attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"addDevis\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect text-white bg-pri\">
                        <div type=\"button\" id=\"closeDevis\" class=\"btn btn-link waves-effect text-white bg-pink\"
                             data-dismiss=\"modal\">
                            FERMER
                        </div>
                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width:50px; display:none;\"
                             class=\"align-justify\" id=\"loadDevis\">
                    </div>
                    <br><br><br>
                    {{ form_end(formneDevis) }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalInfo\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-pink text-white\">
                <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">INFORMATIONS SUR LE DEVIS</h4>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">

                    {% for message in app.flashes('success') %}
                        <div class=\"alert alert-danger\">
                            {{ message }}
                        </div>
                    {% endfor %}
                    {{ form_start(formDevis, {'attr': {'id': 'updateDevisForm'}}) }}
                    {{ form_row(formDevis._token) }}
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">DATE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formDevis.date,{'attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">AFFAIRE SUIVIE PAR:</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formDevis.suivie,{'attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE OU OBJET DU DEVIS</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formDevis.devreference,{'id': 'editor3','attr':{'class':'form-control col-pink'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DEVISE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formDevis.monnaie,{'attr':{'class':'form-control col-pink'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">TVA(%)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formDevis.tva,{'attr':{'class':'form-control col-pink'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">OPTION TVA</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formDevis.ptva,{'attr':{'class':'form-control col-pink'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">AVEC BASE TVA?</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formDevis.abasetva,{'attr':{'class':'form-control col-pink'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">AVEC REMISE?</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formDevis.aarem,{'attr':{'class':'form-control col-pink' }}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">AVEC COLONNE SECTION?</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formDevis.zone,{'attr':{'class':'form-control col-pink'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">AVEC COLONNE RÉF?</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formDevis.aaref,{'attr':{'class':'form-control col-pink'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DATE DE VALIDITÉ</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formDevis.validit,{'attr':{'class':'form-control col-pink'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">INFORMATIONS</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formDevis.conditions,{'id': 'editor4','required':'','attr':{'class':'form-control col-pink'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">MODÈLE D'INFORMATIONS</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formDevis.modele,{'attr':{'class':'form-control col-pink'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">MODÈLE DE RÉSULTATS</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formDevis.model,{'attr':{'class':'form-control col-pink'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\" style=\"margin-bottom: 50px !important;\">
                        <input type=\"button\" id=\"updateDevis\" value=\"MODIFIER\"
                               class=\"btn btn-link waves-effect text-white bg-green\">
                        <div type=\"button\" id=\"closeupDevis\" class=\"btn btn-link waves-effect text-white bg-pink\"
                             data-dismiss=\"modal\">
                            FERMER
                        </div>
                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadupDevis\">
                    </div>
                    {{ form_end(formDevis) }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalGroup\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            {% if groupe.id is not null %}
                <div class=\"p-5 bg-pink\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">MODIFIER UN GROUPE</h4>
                    </div>
                </div>
            {% else %}
                <div class=\"modal-header bg-pri\">
                    <div class=\"p-5 text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">CRÉER UN GROUPE</h4>
                    </div>
                </div>
            {% endif %}
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    {{ form_start(formGroup, {'attr': {'id': 'addGroupeDevisForm'}}) }}
                    {{ form_row(formGroup._token) }}
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line  {% if devis.aaref != 'oui' %}disabled{% endif %}\">
                                    {% if devis.aaref == 'oui' %}
                                        {% if groupe.id is not null %}
                                            {{ form_widget(formGroup.reference,{'attr':{'class':'form-control col-pink'}}) }}
                                        {% else %}
                                            {{ form_widget(formGroup.reference,{'attr':{'class':'form-control'}}) }}
                                        {% endif %}
                                    {% else %}
                                        {{ form_widget(formGroup.reference,{'attr':{'class':'form-control col-pink','placeholder':'Désactivé'}}) }}
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">GROUPE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {% if groupe.id is not null %}
                                        {{ form_widget(formGroup.groupe,{'attr':{'class':'form-control col-pink'}}) }}
                                    {% else %}
                                        {{ form_widget(formGroup.groupe,{'attr':{'class':'form-control'}}) }}
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        {% if groupe.id is not null %}
                            <input type=\"submit\" id=\"updateGroupDev\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect text-white bg-green\">
                            <a href=\"{{ path('editdevis', {'id': devis.id,'idchantier':devis.chantier.id}) }}\"
                               id=\"closeGroup\" class=\"btn btn-link waves-effect text-white bg-pink\">FERMER
                            </a>
                        {% else %}
                            <input type=\"submit\" id=\"addGroupDev\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-pri\">
                            <div type=\"button\" id=\"closeGroup\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">FERMER
                            </div>
                        {% endif %}
                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadGroup\">
                    </div>
                    {{ form_end(formGroup) }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalLigne\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            {% if ligne.id is not null %}
                <div class=\"p-5 bg-pink\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">MODIFIER UNE LIGNE</h4>
                    </div>
                </div>
            {% else %}
                <div class=\"p-5 bg-pri\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">AJOUTER UNE LIGNE</h4>
                    </div>
                </div>
            {% endif %}
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    {{ form_start(forme, {'attr': {'id': 'addLigneDevisForm'}}) }}
                    {{ form_row(forme._token) }}
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">LOTS</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {% if ligne.id is not null %}
                                        {{ form_widget(forme.groupe,{'attr':{'class':'form-control col-pink'}}) }}
                                    {% else %}
                                        {{ form_widget(forme.groupe,{'attr':{'class':'form-control'}}) }}
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {% if devis.aaref == 'oui' %}
                                        {% if ligne.id is not null %}
                                            {{ form_widget(forme.reference,{'attr':{'class':'form-control col-pink'}}) }}
                                        {% else %}
                                            {{ form_widget(forme.reference,{'attr':{'class':'form-control'}}) }}
                                        {% endif %}
                                    {% else %}
                                        {{ form_widget(forme.reference,{'attr':{'class':'form-control','readonly':'true','placeholder':'Désactivé'}}) }}
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DÉSIGNATION<span
                                        class=\"col-pink\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {% if ligne.id is not null %}
                                        {{ form_widget(forme.designation,{'required':'','id':'editor1','attr':{'class':'form-control col-pink'}}) }}
                                    {% else %}
                                        {{ form_widget(forme.designation,{'required':'','id':'editor1','attr':{'class':'form-control'}}) }}
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">SECTION</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {% if devis.zone == 'oui' %}
                                        {% if ligne.id is not null %}
                                            {{ form_widget(forme.zone,{'attr':{'class':'form-control col-pink'}}) }}
                                        {% else %}
                                            {{ form_widget(forme.zone,{'attr':{'class':'form-control'}}) }}
                                        {% endif %}
                                    {% else %}
                                        {{ form_widget(forme.zone,{'attr':{'class':'form-control form-control-user','readonly':'true','placeholder':'Désactivé'}}) }}
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">UNITÉ<span
                                        class=\"col-pink\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {% if ligne.id is not null %}
                                        {{ form_widget(forme.unite,{'attr':{'class':'form-control col-pink'}}) }}
                                    {% else %}
                                        {{ form_widget(forme.unite,{'attr':{'class':'form-control'}}) }}
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">QUANTITÉ<span
                                        class=\"col-pink\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {% if ligne.id is not null %}
                                        {{ form_widget(forme.quantite,{'attr':{'class':'form-control col-pink'}}) }}
                                    {% else %}
                                        {{ form_widget(forme.quantite,{'attr':{'class':'form-control'}}) }}
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">PRIX UNITAIRE<span
                                        class=\"col-pink\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {% if ligne.id is not null %}
                                        {{ form_widget(forme.pu,{'attr':{'class':'form-control col-pink'}}) }}
                                    {% else %}
                                        {{ form_widget(forme.pu,{'attr':{'class':'form-control'}}) }}
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">REMISE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {% if devis.aarem== 'oui' %}
                                        {% if ligne.id is not null %}
                                            {{ form_widget(forme.remise,{'required':'','attr':{'class':'form-control col-pink','type':'number'}}) }}
                                        {% else %}
                                            {{ form_widget(forme.remise,{'required':'','attr':{'class':'form-control','type':'number'}}) }}
                                        {% endif %}
                                    {% else %}
                                        {{ form_widget(forme.remise,{'required':'','attr':{'class':'form-control','readonly':'true','placeholder':'Désactivé'}}) }}
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        {% if ligne.id is not null %}
                            <input type=\"submit\" id=\"updateLigneDevis\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect text-white bg-green\">
                            <a href=\"{{ path('editdevis', {'id': devis.id,'idchantier':devis.chantier.id}) }}\"
                               id=\"closeLigne\" class=\"btn btn-link waves-effect text-white bg-pink\">FERMER
                            </a>
                        {% else %}
                            <input type=\"submit\" id=\"addLigneDevis\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-pri\">
                            <div type=\"button\" id=\"closeLigne\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">FERMER
                            </div>
                        {% endif %}

                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadLigne\">
                    </div>
                    {{ form_end(forme) }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalBase\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"p-5 bg-pri\">
                <div class=\"modal-header text-white\">
                    <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">BASE TVA</h4>
                </div>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">

                    {{ form_start(formba, {'attr': {'id': 'addBaseDevisForm'}}) }}
                    {{ form_row(formba._token) }}
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">Base TVA</label>
                            <div class=\"form-group\">
                                <div class=\"form-line {% if devis.abasetva != 'oui' %}disabled{% endif %}\">
                                    {% if devis.abasetva == 'oui' %}
                                        {{ form_widget(formba.basetva,{'required':'required','type':'number','attr':{'class':'form-control'}}) }}
                                    {% else %}
                                        {{ form_widget(formba.basetva,{'required':'required','type':'number', 'attr':{'class':'form-control','placeholder':'Désactivé'}}) }}
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"addBase\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect text-white bg-pri\">
                        <div type=\"button\" id=\"closeBase\" class=\"btn btn-link waves-effect text-white bg-pink\"
                             data-dismiss=\"modal\">FERMER
                        </div>
                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadBase\">
                    </div>
                    {{ form_end(formba) }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalRemise\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"p-5 bg-pri\">
                <div class=\"modal-header text-white\">
                    <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">REMISE SUR TOTAL HT</h4>
                </div>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">

                    {{ form_start(formrem, {'attr': {'id': 'addRemiseThtForm'}}) }}
                    {{ form_row(formrem._token) }}
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">REMISE SUR TOTAL HT (%)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line {% if devis.aarem != 'tht' %}disabled{% endif %}\">
                                    {% if devis.aarem == 'tht' %}
                                        {{ form_widget(formrem.remtht,{'required':'required','type':'number','attr':{'class':'form-control'}}) }}
                                    {% else %}
                                        {{ form_widget(formrem.remtht,{'required':'required','type':'number', 'attr':{'class':'form-control','placeholder':'Désactivé'}}) }}
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"addRem\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect text-white bg-pri\">
                        <div type=\"button\" id=\"closeRem\" class=\"btn btn-link waves-effect text-white bg-pink\"
                             data-dismiss=\"modal\">FERMER
                        </div>
                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadRem\">
                    </div>
                    {{ form_end(formrem) }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalChoisir\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"p-5 bg-pri\">
                <div class=\"modal-header text-white\">
                    <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">CHOISIR UN BIEN / SERVICE</h4>
                </div>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    {{ form_start(formez,{'attr': {'id': 'addChoisirDevisForm'}}) }}
                    {{ form_row(formez._token) }}
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">RECHERCHER</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formez.code,{'id':'refarticle','required':'','attr':{'class':'form-control refarticle'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">CODE ARTICLE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formez.reference,{'required':'','attr':{'class':'form-control','readonly':'true','placeholder':'Désactivé'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">ARTICLE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formez.article,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">LOT</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formez.groupe,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">QUANTITÉ</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formez.quantite,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">ZONE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {% if devis.zone == 'oui' %}
                                        {{ form_widget(formez.zone,{'required':'','attr':{'class':'form-control'}}) }}
                                    {% else %}
                                        {{ form_widget(formez.zone,{'required':'','attr':{'class':'form-control','readonly':'true','placeholder':'Désactivé'}}) }}
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">REMISE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {% if devis.aarem == 'oui' %}
                                        {{ form_widget(formez.remise,{'required':'','type':'number','attr':{'class':'form-control'}}) }}
                                    {% else %}
                                        {{ form_widget(formez.remise,{'required':'','type':'number','attr':{'class':'form-control','readonly':'true','placeholder':'Désactivé'}}) }}
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"addChoisirDevis\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect text-white bg-pri\">
                        <div type=\"button\" id=\"closeChoisirDevis\"
                             class=\"btn btn-link waves-effect text-white bg-pink\"
                             data-dismiss=\"modal\">FERMER
                        </div>
                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadChoisirDevis\">
                    </div>
                    {{ form_end(formez) }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalDeplacer\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"p-5 bg-pri\">
                <div class=\"modal-header text-white\">
                    <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">DÉPLACER VERS UN AUTRE CHANTIER</h4>
                </div>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    <select class=\"form-control show-tick\" id=\"deplacerDevis\"
                            style=\" width: 100%\">

                        {% for client in clients %}
                            {% set check  = 0 %}
                            {% for chantier in client.chantiers %}
                                {% if chantier.corbeille is null and chantier.archiver == \"non\" %}
                                    {% set check = check + 1 %}
                                {% endif %}
                            {% endfor %}
                            {% if client.corbeille is null and client.type is null %}
                                {% if check  > 0 %}
                                    <optgroup label=\"{{ client.nomclient }}\">
                                        {% for chantier in client.chantiers %}
                                            {% if chantier.corbeille is null and chantier.archiver == \"non\" %}
                                                <option value=\"{{ chantier.id }}\"
                                                        class=\"font-weight-normal\">{{ chantier.nomchantier }}</option>
                                            {% endif %}
                                        {% endfor %}
                                    </optgroup>
                                {% endif %}
                                </table>
                            {% endif %}
                        {% endfor %}
                    </select>
                    <div class=\"text-center m-t-30\">
                        <input type=\"submit\" id=\"addDeplacerDevis\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect text-white bg-pri\">
                        <div type=\"button\" id=\"closeDeplacer\" class=\"btn btn-link waves-effect text-white bg-pink\"
                             data-dismiss=\"modal\">FERMER
                        </div>
                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadDeplacer\">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalMise\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"p-5 bg-pri\">
                <div class=\"modal-header text-white\">
                    <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">MISE EN FORME DU DEVIS</h4>
                </div>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    {{ form_start(formes, {'enctype':'multipart/form-data','attr': {'id': 'addforme'}}) }}
                    {{ form_row(formes._token) }}
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <h5 class=\"col-black bolo600\">LIBELLÉ</h5>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formes.intituler,{'attr':{'class':'form-control col-pink'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <h5 class=\"col-black bolo600\">TYPE D'ENTÊTE</h5>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formes.typeEntete,{'attr':{'class':'form-control col-pink'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <h5 class=\"col-black bolo600\">TYPE DE PIED DE PAGE</h5>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formes.typeFooter,{'attr':{'class':'form-control col-pink'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-black bolo600\">ENTÊTE EN IMAGE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formes.enteteImage,{'required':'','attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-black bolo600\">PIED DE PAGE EN IMAGE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formes.footImage,{'required':'','attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-black bolo600\">ENTÊTE EN TEXTE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formes.headerText,{'required':'','id':'editor5','attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-black bolo600\">PIED DE PAGE EN TEXTE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formes.pied,{'required':'','attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-4\">
                            <h5 class=\"col-black bolo600\">POLICE(en pixel)</h5>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formes.dsize,{'attr':{'class':'form-control col-pink'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <h5 class=\"col-black bolo600\">FOND(Hexa)</h5>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formes.decolor,{'attr':{'class':'form-control col-pink'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <h5 class=\"col-black bolo600\">TEXTE(Hexa)</h5>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formes.decolortex,{'attr':{'class':'form-control col-pink'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-black bolo600\">LARGEUR ENTÊTE(cm)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formes.headerWith,{'required':'','attr':{'class':'form-control col-pink'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-black bolo600\">HAUTEUR ENTÊTE(cm)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formes.headerHeight,{'required':'','attr':{'class':'form-control col-pink'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-black bolo600\">HAUTEUR DU LOGO(cm)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formes.teteY,{'attr':{'class':'form-control col-pink'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-black bolo600\">LARGEUR DU LOGO(cm)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formes.teteH,{'attr':{'class':'form-control col-pink'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-black bolo600\">DÉCALAGE HAUT(cm)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formes.teteDH,{'attr':{'class':'form-control col-pink'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-black bolo600\">DÉCALAGE BAS(cm)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formes.teteDB,{'attr':{'class':'form-control col-pink'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-black bolo600\">DÉCALAGE À DROITE(cm)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formes.teteDD,{'attr':{'class':'form-control col-pink'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-black bolo600\">DÉCALAGE À GAUCHE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formes.teteDG,{'attr':{'class':'form-control col-pink'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-black bolo600\">TAILLE DU TEXTE DU PIED DE
                                PAGE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formes.piedsize,{'attr':{'class':'form-control col-pink'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-black bolo600\">HAUTEUR DU PIED DE PAGE(cm)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formes.footerHeight,{'required':'','attr':{'class':'form-control col-pink'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\" style=\"margin-bottom: 50px !important;\">
                        <input type=\"submit\" id=\"updateForme\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect text-white bg-blue\">
                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadupForme\">
                    </div>
                    {{ form_end(formes) }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"modalOper\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-pri\">
                <h5 class=\"modal-title text-white\" id=\"exampleModalLabel\">OPÉRATIONS SUR LES LIGNES</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"table-responsive\">
                    <table class=\"d table-bordered\" width=\"100%\">
                        <tr class=\"bg-pri bolderrer text-white\">
                            <td colspan=\"2\">&raquo; OPÉRATIONS SUR TOUTES LES QUANTITÉS</td>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderrer\" width=\"50%\">AJOUTER</td>
                            <td width=\"50%\" align=\"center\">
                                <input type=\"number\" name=\"add\" id=\"addqte\" min=\"1\" max=\"10\"
                                       style=\"width: 10em;\">
                                <button class=\"btn btn-primary btn-sm\"
                                        onclick=\"gaoula('add','qte','addqte','devis',{{ devis.id }});\">
                                    Valider
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderrer\" width=\"50%\">SOUSTRAIRE</td>
                            <td width=\"50%\" align=\"center\">
                                <input type=\"number\" name=\"add\" id=\"sousqte\" min=\"1\" max=\"10\"
                                       style=\"width: 10em;\">
                                <button class=\"btn btn-primary btn-sm\"
                                        onclick=\"gaoula('sous','qte','sousqte','devis',{{ devis.id }});\">
                                    Valider
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderrer\" width=\"50%\">MULTIPLIER PAR</td>
                            <td width=\"50%\" align=\"center\">
                                <input type=\"number\" name=\"add\" id=\"multiqte\" min=\"1\" max=\"10\"
                                       style=\"width: 10em;\">
                                <button class=\"btn btn-primary btn-sm\"
                                        onclick=\"gaoula('multi','qte','multiqte','devis',{{ devis.id }});\">
                                    Valider
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderrer\" width=\"50%\">DIVISER PAR</td>
                            <td width=\"50%\" align=\"center\">
                                <input type=\"number\" name=\"add\" id=\"diviseqte\" min=\"1\" max=\"10\"
                                       style=\"width: 10em;\">
                                <button class=\"btn btn-primary btn-sm\"
                                        onclick=\"gaoula('divi','qte','diviseqte','devis',{{ devis.id }});\">
                                    Valider
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderrer\" width=\"50%\">PLUS UN POURCENTAGE DE</td>
                            <td width=\"50%\" align=\"center\">
                                <input type=\"number\" name=\"add\" id=\"pourcenteqte\" min=\"1\" max=\"10\"
                                       style=\"width: 10em;\">
                                <button class=\"btn btn-primary btn-sm\"
                                        onclick=\"gaoula('pourcentplus','qte','pourcenteqte','devis',{{ devis.id }});\">
                                    Valider
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderrer\" width=\"50%\">MOINS UN POURCENTAGE DE</td>
                            <td width=\"50%\" align=\"center\">
                                <input type=\"number\" name=\"add\" id=\"pourcentesqte\" min=\"1\" max=\"10\"
                                       style=\"width: 10em;\">
                                <button class=\"btn btn-primary btn-sm\"
                                        onclick=\"gaoula('pourcentmoins','qte','pourcentesqte','devis',{{ devis.id }});\">
                                    Valider
                                </button>
                            </td>
                        </tr>

                    </table>
                    <br><br>
                    <table class=\"d table-bordered\" width=\"100%\">
                        <tr class=\"bg-secondary bolderrer text-white\">
                            <td colspan=\"2\">&raquo; OPÉRATIONS SUR TOUS LES PRIX</td>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderrer\" width=\"50%\">AJOUTER</td>
                            <td width=\"50%\" align=\"center\">
                                <input type=\"number\" name=\"add\" id=\"addpri\" min=\"1\" max=\"10\"
                                       style=\"width: 10em;\">
                                <button class=\"btn btn-secondary btn-sm\"
                                        onclick=\"gaoula('add','pri','addpri','devis',{{ devis.id }});\">
                                    Valider
                                </button>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderrer\" width=\"50%\">SOUSTRAIRE</td>
                            <td width=\"50%\" align=\"center\">
                                <input type=\"number\" name=\"add\" id=\"souspri\" min=\"1\" max=\"10\"
                                       style=\"width: 10em;\">
                                <button class=\"btn btn-secondary btn-sm\"
                                        onclick=\"gaoula('sous','pri','souspri','devis',{{ devis.id }});\">
                                    Valider
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderrer\" width=\"50%\">MULTIPLIER PAR</td>
                            <td width=\"50%\" align=\"center\">
                                <input type=\"number\" name=\"add\" id=\"multipri\" min=\"1\" max=\"10\"
                                       style=\"width: 10em;\">
                                <button class=\"btn btn-secondary btn-sm\"
                                        onclick=\"gaoula('multi','pri','multipri','devis',{{ devis.id }});\">
                                    Valider
                                </button>
                        </tr>
                        <tr>
                            <td class=\"text-pri bolderrer\" width=\"50%\">DIVISER PAR</td>
                            <td width=\"50%\" align=\"center\">
                                <input type=\"number\" name=\"add\" id=\"divisepri\" min=\"1\" max=\"10\"
                                       style=\"width: 10em;\">
                                <button class=\"btn btn-secondary btn-sm\"
                                        onclick=\"gaoula('divi','pri','divisepri','devis',{{ devis.id }});\">
                                    Valider
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"bolderr text-pri bolderrer\">PLUS UN POURCENTAGE DE</td>
                            <td width=\"50%\" align=\"center\">
                                <input type=\"number\" name=\"add\" id=\"pourcentepri\"
                                       min=\"1\" max=\"10\" style=\"width: 10em;\">
                                <button class=\"btn btn-secondary btn-sm\"
                                        onclick=\"gaoula('pourcentplus','pri','pourcentepri','devis',{{ devis.id }});\">
                                    Valider
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"bolderr text-pri bolderrer\" width=\"50%\">MOINS UN POURCENTAGE
                                DE
                            </td>
                            <td width=\"50%\" align=\"center\">
                                <input type=\"number\" name=\"add\" id=\"pourcentespri\"
                                       min=\"1\" max=\"10\" style=\"width: 10em;\">
                                <button class=\"btn btn-secondary btn-sm\"
                                        onclick=\"gaoula('pourcentmoins','pri','pourcentespri','devis',{{ devis.id }});\">
                                    Valider
                                </button>
                            </td>
                        </tr>

                    </table>
                    <br><br>
                    {% if devis.aarem== 'oui' %}
                        <table class=\"table-bordered\" width=\"100%\">
                            <tr class=\"bg-info bolderrer text-white\">
                                <td colspan=\"3\">&raquo; OPÉRATIONS SUR TOUS
                                    LES REMISES
                                </td>
                            </tr>
                            <tr>
                                <td class=\"bolderr text-pri bolderrer\">::. AJOUTER</td>
                                <td>
                                    <input type=\"number\" name=\"add\" id=\"addrem\" style=\"width: 50%\">
                                </td>
                                <td width=\"10%\">
                                    <button class=\"btn btn-info btn-sm\"
                                            onclick=\"gaoula('add','rem','addrem','devis',{{ devis.id }});\">
                                        Valider
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class=\"bolderr text-pri bolderrer\">::. SOUSTRAIRE</td>
                                <td>
                                    <input type=\"number\" name=\"add\" id=\"sousrem\" style=\"width: 50%\">
                                </td>
                                <button class=\"btn btn-info btn-sm\"
                                        onclick=\"gaoula('sous','rem','sousrem','devis',{{ devis.id }});\">
                                    Valider
                                </button>
                                </td>
                            </tr>
                            <tr>
                                <td class=\"bolderr text-pri bolderrer\">::. MULTIPLIER PAR</td>
                                <td>
                                    <input type=\"number\" name=\"add\" id=\"multirem\"
                                           style=\"width: 50%\">
                                </td>
                                <td width=\"10%\">
                                    <button class=\"btn btn-info btn-sm\"
                                            onclick=\"gaoula('multi','rem','multirem','devis',{{ devis.id }});\">
                                        Valider
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class=\"bolderr text-pri bolderrer\">::. DIVISER PAR</td>
                                <td>
                                    <input type=\"number\" name=\"add\" id=\"diviserem\"
                                           style=\"width: 50%\">
                                </td>
                                <button class=\"btn btn-info btn-sm\"
                                        onclick=\"gaoula('divi','rem','diviserem','devis',{{ devis.id }});\">
                                    Valider
                                </button>
                                </td>
                            </tr>
                            <tr>
                                <td class=\"bolderr text-pri bolderrer\">::. PLUS UN POURCENTAGE DE
                                </td>
                                <td>
                                    <input type=\"number\" name=\"add\" id=\"pourcenterem\"
                                           style=\"width: 50%\">
                                </td>
                                <button class=\"btn btn-info btn-sm\"
                                        onclick=\"gaoula('pourcentplus','rem','pourcenterem','devis',{{ devis.id }});\">
                                    Valider
                                </button>
                                </td>
                            </tr>
                            <tr>
                                <td class=\"bolderr text-pri bolderrer\">::. MOINS UN POURCENTAGE DE
                                </td>
                                <td>
                                    <input type=\"number\" name=\"add\" id=\"pourcentesrem\"
                                           style=\"width: 50%\">
                                </td>
                                <button class=\"btn btn-info btn-sm\"
                                        onclick=\"gaoula('pourcentmoins','rem','pourcentesrem','devis',{{ devis.id }});\">
                                    Valider
                                </button>
                                </td>
                            </tr>
                        </table>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalDecompte\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-blue col-white\">
                <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">CRÉER UN DÉCOMPTE</h4>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    {{ form_start(formDecompte, {'attr': {'id': 'addDecompteForm' }}) }}
                    <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('dectoken') }}\"/>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-5\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DEVIS VALIDÉS</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    <select id=\"devdec\" name=\"devdec\" class=\"form-control\">
                                        <option disabled=\"disabled\" selected=\"selected\">Choisir un devis</option>
                                        {% for client in clients %}
                                            {% if client.type is null and  client.corbeille is null %}
                                                {% for chantier in client.chantiers %}
                                                    {% if chantier.corbeille is null %}
                                                        {% set oop = 0 %}
                                                        {% for dev in chantier.devis %}
                                                            {% set op = 0 %}
                                                            {% for dec in dev.decomptes %}
                                                                {% if dec.avancement == 100 %}
                                                                    {% set op = op + 1 %}
                                                                {% endif %}
                                                            {% endfor %}
                                                            {% if dev.etat == \"valide\" and op == 0 %}
                                                                {% set oop = oop + 1 %}
                                                            {% endif %}
                                                        {% endfor %}

                                                        {% if oop > 0 %}
                                                            <optgroup
                                                                    label=\"{{ client.nomclient|upper }} | {{ chantier.nomchantier|upper }}\">
                                                                {% for dev in chantier.devis %}
                                                                    {% set op = 0 %}
                                                                    {% for dec in dev.decomptes %}
                                                                        {% if dec.avancement == 100 %}
                                                                            {% set op = op + 1 %}
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                    {% if dev.etat == \"valide\" and op == 0 %}
                                                                        <option value=\"{{ dev.id }}\"
                                                                                class=\"{{ dev.id }}\">{{ dev.iddevis }}</option>
                                                                    {% endif %}
                                                                {% endfor %}
                                                            </optgroup>
                                                        {% endif %}
                                                    {% endif %}
                                                {% endfor %}
                                            {% endif %}
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-7\">
                            <label class=\"form-label m-b--30 col-blue bolo\">ACOMPTE DE DEMARRAGE(%)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    <input type=\"text\" id=\"acomrage\" name=\"acompte\" class=\"form-control\" required>
                                </div>
                                <p class=\"h6 devcoy\"></p>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">RETENUE DE GARANTIE(%)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formDecompte.garantie,{'attr':{'class':'form-control'}}) }}
                                </div>
                                <p class=\"h6 devcoy\"></p>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">RETENUE DE FINITION(%)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formDecompte.finition,{'attr':{'class':'form-control'}}) }}
                                </div>
                                <p class=\"h6 devcoy\"></p>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">COMPTE PRORATA(%)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formDecompte.prorata,{'attr':{'class':'form-control'}}) }}
                                </div>
                                <p class=\"h6 devcoy\"></p>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DATE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formDecompte.date,{'attr':{'class':'form-control datepicker' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"addeDecompte\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect col-white bg-blue\">
                        <div type=\"button\" id=\"closeDecompte\" class=\"btn btn-link waves-effect col-white bg-pink\"
                             data-dismiss=\"modal\">
                            FERMER
                        </div>
                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadDecompte\"></div>
                    <br>
                    <br>
                    <br>
                    {{ form_end(formDecompte) }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalFacture\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-blue text-white\">
                <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">CRÉER UNE FACTURE</h4>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    {{ form_start(formFacture, {'attr': {'id': 'addFactureForm'}}) }}
                    {{ form_row(formFacture._token) }}
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DATE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formFacture.date,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">TYPE D'OPÉRATION<span
                                        class=\"col-red\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formFacture.type,{'id':'facselectez','attr':{'class':'form-control', 'id':'facselect'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DEVIS VALIDÉS</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formFacture.devis,{'required':'','attr':{'class':'form-control devo'}}) }}
                                </div>
                                <p class=\"col-pink h6 dvo\"></p>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DÉCOMPTES VALIDÉS</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formFacture.decompte,{'required':'','attr':{'class':'form-control deco'}}) }}
                                </div>
                                <p class=\"col-pink h6 dco\"></p>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE OU OBJET</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formFacture.factreference,{'id': 'editor3','attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">INFORMATIONS SUR LA FACTURE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formFacture.information,{'id': 'editor4','attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"addFacture\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect text-white bg-blue\">
                        <div type=\"button\" id=\"closeFacture\" class=\"btn btn-link waves-effect text-white bg-pink\"
                             data-dismiss=\"modal\">
                            FERMER
                        </div>
                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadFacture\">
                    </div>
                    <br><br><br>
                    {{ form_end(formFacture) }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalTechnique\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-pri text-white\">
                <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">OPÉRATIONS LIÉES</h4>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">

                    <h4 class=\"bolo700 col-blue\">DEVIS Nº {{ devis.iddevis }} | <span
                                class=\"col-pink\">ÉTAT: {% if devis.etat == \"valide\" %} VALIDÉ {% endif %} {% if devis.etat == \"save\" %} NON VALIDÉ {% endif %}</span>
                    </h4>
                    <br>
                    <table class=\"table table-striped\">
                        <tr>
                            <td colspan=\"4\" class=\"bolo700 text-left h5\">BONS DE COMMANDE ACHAT VALIDÉS</td>
                        </tr>
                        <tr>
                            <td>Bon Nº</td>
                            <td class=\"text-right\">Total HT</td>
                            <td class=\"text-right\">Total TTC</td>
                            <td class=\"text-right\">Fournisseur</td>
                        </tr>
                        {% set thbon = 0 %}
                        {% set ttcbon = 0 %}
                        {% for bon in devis.bons %}
                            {% if bon.corbeille is null and bon.etat == \"valide\" %}
                                {% if bon.fournisseur is not null and bon.fournisseur.type == 1 %}
                                    {% if bon.type != \"non\" %}
                                        {% set thbon = bon.totalht + thbon %}
                                        {% set ttcbon = bon.totalttc + ttcbon %}
                                    {% endif %}
                                    {% if bon.type == \"non\" %}
                                        {% set thbon = bon.totalht - thbon %}
                                        {% set ttcbon = bon.totalttc - ttcbon %}
                                    {% endif %}
                                    <tr>
                                        <td><a href=\"#\" onclick=\"shasha({{ bon.id }},'imprimbon');\">
                                                <i class=\"fa fa-eye col-green\"
                                                   aria-hidden=\"true\"></i>
                                            </a><a href=\"{{ path('editbon',{'id':bon.id , 'idchantier': bon.chantier.id}) }}\"
                                                   class=\"col-indigo\">Nº {{ bon.numbon }}</a><br>
                                        </td>
                                        <td class=\"text-right\">{{ bon.totalht|number_format(2, ',', ' ') }}</td>
                                        <td class=\"text-right\">{{ bon.totalttc|number_format(2, ',', ' ') }}</td>
                                        <td class=\"text-left col-pink bolo600\" colspan=\"3\"
                                            style=\"margin-left: 60px !important;\">
                                            {% if bon.fournisseur %}
                                                {{ bon.fournisseur.fournisseur }}
                                            {% endif %}
                                        </td>
                                    </tr>
                                {% endif %}
                                {% if bon.fournisseur is null %}
                                    {% if bon.type != \"non\" %}
                                        {% set thbon = bon.totalht + thbon %}
                                        {% set ttcbon = bon.totalttc + ttcbon %}
                                    {% endif %}
                                    {% if bon.type == \"non\" %}
                                        {% set thbon = bon.totalht - thbon %}
                                        {% set ttcbon = bon.totalttc - ttcbon %}
                                    {% endif %}
                                    <tr>
                                        <td><a href=\"#\" onclick=\"shasha({{ bon.id }},'imprimbon');\">
                                                <i class=\"fa fa-eye col-green\"
                                                   aria-hidden=\"true\"></i>
                                            </a><a href=\"{{ path('editbon',{'id':bon.id , 'idchantier': bon.chantier.id}) }}\"
                                                   class=\"col-indigo\">Nº {{ bon.numbon }}</a><br>
                                        </td>
                                        <td class=\"text-right\">{{ bon.totalht|number_format(2, ',', ' ') }}</td>
                                        <td class=\"text-right\">{{ bon.totalttc|number_format(2, ',', ' ') }}</td>
                                        <td class=\"text-right\"></td>
                                    </tr>
                                {% endif %}
                            {% endif %}
                        {% endfor %}
                        <td class=\"bolo600 col-blue text-right\">TOTAUX</td>
                        <td class=\"text-right col-blue\">{{ thbon|number_format(2, ',', ' ') }}</td>
                        <td class=\"text-right col-blue\">{{ ttcbon|number_format(2, ',', ' ') }}</td>
                    </table>
                    <table class=\"table table-striped\">
                        <tr>
                            <td colspan=\"4\" class=\"bolo700 text-left h5\">BONS DE COMMANDE PRESTATAIRE VALIDÉS</td>
                        </tr>
                        <tr>
                            <td>Bon Nº</td>
                            <td class=\"text-right\">Total HT</td>
                            <td class=\"text-right\">Total TTC</td>
                            <td class=\"text-right\">Prestataire</td>
                        </tr>
                        {% set thebon = 0 %}
                        {% set ttecbon = 0 %}
                        {% for bon in devis.bons %}
                            {% if bon.corbeille is null and bon.etat == \"valide\" %}
                                {% if bon.fournisseur is not null and bon.fournisseur.type == 3 %}
                                    {% if bon.type != \"non\" %}
                                        {% set thebon = bon.totalht + thebon %}
                                        {% set ttecbon = bon.totalttc + ttecbon %}
                                    {% endif %}
                                    {% if bon.type == \"non\" %}
                                        {% set thebon = bon.totalht - thebon %}
                                        {% set ttecbon = bon.totalttc - ttecbon %}
                                    {% endif %}
                                    <tr>
                                        <td><a href=\"#\" onclick=\"shasha({{ bon.id }},'imprimbon');\">
                                                <i class=\"fa fa-eye col-green\"
                                                   aria-hidden=\"true\"></i>
                                            </a><a href=\"{{ path('editbon',{'id':bon.id , 'idchantier': bon.chantier.id}) }}\"
                                                   class=\"col-indigo\">Nº {{ bon.numbon }}</a><br>
                                        </td>
                                        <td class=\"text-right\">{{ bon.totalht|number_format(2, ',', ' ') }}</td>
                                        <td class=\"text-right\">{{ bon.totalttc|number_format(2, ',', ' ') }}</td>
                                        <td class=\"text-left col-pink bolo600\" colspan=\"3\"
                                            style=\"margin-left: 60px !important;\">
                                            {% if bon.fournisseur %}
                                                {{ bon.fournisseur.fournisseur }}
                                            {% endif %}
                                        </td>
                                    </tr>
                                {% endif %}
                            {% endif %}
                        {% endfor %}
                        <td class=\"bolo600 col-blue text-right\">TOTAUX</td>
                        <td class=\"text-right col-blue\">{{ thebon|number_format(2, ',', ' ') }}</td>
                        <td class=\"text-right col-blue\">{{ ttecbon|number_format(2, ',', ' ') }}</td>
                        <td class=\"text-right col-blue\"></td>
                    </table>
                    <table class=\"table table-striped\">
                        <tr class=\"bg-light-green\">
                            <td class=\"bolo700 col-orange h5\"></td>
                            <td class=\"text-center col-white\">TOTAL HT</td>
                            <td class=\"text-center col-white\">TOTAL TTC</td>
                        </tr>
                        <tr class=\"bg-light\">
                            <td class=\"bolo700 col-blue-grey h5\">TOTAUX DEVIS</td>
                            <td class=\"text-right col-blue-grey bolo700\">{{ devis.totalht|number_format(2, ',', ' ') }}</td>
                            <td class=\"text-right col-blue-grey bolo700\">{{ devis.totalttc|number_format(2, ',', ' ') }}</td>
                        </tr>
                        <tr class=\"bg-light\">
                            <td class=\"bolo700 col-blue-grey h5\">TOTAUX BONS DE COMMANDE</td>
                            <td class=\"text-right col-blue-grey bolo700\">{{ (thbon + thebon)|number_format(2, ',', ' ') }}</td>
                            <td class=\"text-right col-blue-grey bolo700\">{{ (ttcbon + ttecbon)|number_format(2, ',', ' ') }}</td>
                        </tr>
                        <tr class=\"bg-light\">
                            <td class=\"bolo700 col-blue-grey h5\">MARGE</td>
                            <td class=\"text-right col-black bolo700\">{{ (devis.totalht - (thbon + thebon))|number_format(2, ',', ' ') }}</td>
                            <td class=\"text-right col-black bolo700\">{{ (devis.totalttc - (ttcbon + ttecbon))|number_format(2, ',', ' ') }}</td>
                        </tr>
                    </table>
                    <table class=\"table table-striped\">
                        <tr>
                            <td colspan=\"4\" class=\"bolo700 text-left h5\">DÉCOMPTES</td>
                        </tr>
                        <tr>
                            <td>Décompte Nº</td>
                            <td>Facture Nº</td>
                            <td class=\"text-right\">Total HT</td>
                            <td class=\"text-right\">Total TTC</td>
                            <td class=\"text-right\">État</td>
                        </tr>
                        {% for dec in devis.decomptes %}
                            <tr>
                                <td>
                                    <a href=\"#\"
                                       onclick=\"shasha({{ dec.id }},'imprimdecompte');\">
                                        <i class=\"fa fa-eye col-green\"
                                           aria-hidden=\"true\"></i>
                                    </a>
                                    <a href=\"{{ path('editdecompte',{'id':dec.id , 'idchantier': dec.chantier.id}) }}\"
                                       class=\"col-indigo\">Nº{{ dec.numdecompte }}
                                    </a>
                                </td>
                                <td>{% if dec.facture %}{{ dec.facture.numfacture }}{% endif %}</td>
                                <td class=\"text-right col-blue\">{{ dec.apayer|number_format(2, ',', ' ') }}</td>
                                <td class=\"text-right col-blue\">{{ dec.ttc|number_format(2, ',', ' ') }}</td>
                                <td class=\"text-right col-blue\">{% if dec.etat == \"valide\" %}Validé{% endif %} {% if dec.etat == \"save\" %}Non validé{% endif %}</td>
                            </tr>
                        {% endfor %}
                    </table>
                    <table class=\"table table-striped\">
                        <tr>
                            <td colspan=\"5\" class=\"bolo700 text-left h5\">FACTURES</td>
                        </tr>
                        <tr>
                            <td>Fac Nº</td>
                            <td>Déc Nº</td>
                            <td class=\"text-right\">Total HT</td>
                            <td class=\"text-right\">Total TTC</td>
                            <td class=\"text-right\">État</td>
                        </tr>
                        {% for fac in devis.chantier.factures %}
                            {% if fac.devis and fac.devis.id  == devis.id %}
                                <tr>
                                    <td>
                                        <a href=\"#\"
                                           onclick=\"shasha({{ fac.id }},'imprimfacture');\">
                                            <i class=\"fa fa-eye col-green\"
                                               aria-hidden=\"true\"></i>
                                        </a>
                                        <a href=\"{{ path('editfacture',{'id':fac.id , 'idchantier': fac.chantier.id}) }}\"
                                           class=\"col-indigo\">Nº {{ fac.numfacture }}
                                        </a>
                                    </td>
                                    <td>{% if fac.decompte %}{{ fac.decompte.numdecompte }}{% endif %}</td>
                                    <td class=\"text-right\">{{ fac.totalht|number_format(2, ',', ' ') }}</td>
                                    <td class=\"text-right\">{{ fac.totalttc|number_format(2, ',', ' ') }}</td>
                                    <td class=\"text-right\">{% if fac.etat == \"valide\" %}<span
                                                class=\"col-blue\">Validée</span>{% endif %} {% if fac.etat == \"save\" %}
                                            <span class=\"col-pink\">Non validée</span>{% endif %}</td>
                                </tr>
                            {% endif %}
                            {% if fac.acompte and fac.acompte.devis.id  == devis.id %}
                                <tr>
                                    <td>
                                        <a href=\"#\"
                                           onclick=\"shasha({{ fac.id }},'imprimfacture');\">
                                            <i class=\"fa fa-eye col-green\"
                                               aria-hidden=\"true\"></i>
                                        </a>
                                        <a href=\"{{ path('editfacture',{'id':fac.id , 'idchantier': fac.chantier.id}) }}\"
                                           class=\"col-indigo\">Nº {{ fac.numfacture }}
                                        </a>
                                    </td>
                                    <td>{% if fac.decompte %}{{ fac.decompte.numdecompte }}{% endif %}</td>
                                    <td class=\"text-right\">{{ fac.totalht|number_format(2, ',', ' ') }}</td>
                                    <td class=\"text-right\">{{ fac.totalttc|number_format(2, ',', ' ') }}</td>
                                    <td class=\"text-right\">{% if fac.etat == \"valide\" %}<span
                                                class=\"col-blue\">Validée</span>{% endif %} {% if fac.etat == \"save\" %}
                                            <span class=\"col-pink\">Non validée</span>{% endif %}</td>
                                </tr>
                            {% endif %}
                        {% endfor %}
                    </table>
                    <table class=\"table table-striped\">
                        <tr>
                            <td colspan=\"5\" class=\"bolo700 text-left h5\">RÈGLEMENTS EFFECTUÉS</td>
                        </tr>
                        <tr>
                            <td>Règlements</td>
                            <td>Facture Nº</td>
                            <td class=\"text-right\">FACTURÉE</td>
                            <td class=\"text-right\">VERSÉE</td>
                            <td class=\"text-right\">RESTE</td>
                        </tr>
                        {% for rele in devis.relevers %}
                            {% if rele.facture %}
                                <tr>
                                    <td class=\"col-blue\">{{ rele.versement }}</td>
                                    <td>{{ rele.facture.numfacture }}</td>
                                    <td class=\"text-right\">{{ rele.facture.totalttc|number_format(2, ',', ' ') }}</td>
                                    <td class=\"text-right\">{{ rele.montant|number_format(2, ',', ' ') }}</td>
                                    <td class=\"text-right\">{{ (rele.facture.totalttc - rele.montant)|number_format(2, ',', ' ') }}</td>
                                </tr>
                            {% endif %}
                        {% endfor %}
                    </table>
                    <table class=\"table table-striped\">
                        <tr>
                            <td colspan=\"5\" class=\"bolo700 text-left h5\">ARTICLES COMPOSÉS</td>
                        </tr>
                    </table>
                    <br><br> <br><br> <br><br> <br><br>
                </div>
            </div>
        </div>
    </div>
</div>

<section class=\"content fixed-top\">
    <div class=\"container-fluid\" style=\"margin: 0 14px 0 14px\">

        <div class=\"row\">
            <div class=\"col-md-12\">
                <div id=\"ressult\" style=\"width: 100%; align-content: start\" class=\"text-left\"></div>
            </div>
        </div>
    </div>
</section>

<section class=\"content\" style=\"margin-top: 100px !important;\">
    <div class=\"container-fluid\">
        <div class=\"row clearfix\">
            <div class=\"col-md-12\">
                <div class=\"mb-2 m-t--25\"
                     style=\"background-color: #d1d3e2 !important;\">
                    <div class=\"ont tohidbut\">
                        <div id=\"shacontentDevis\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    localStorage.setItem('reloadd', 'devis/' + document.getElementById('iddevis').value + '/' + document.getElementById('idchantier').value);
</script>
{{ encore_entry_script_tags('apdevis') }}
</body>
</html>

", "content/devis.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\devis.html.twig");
    }
}
