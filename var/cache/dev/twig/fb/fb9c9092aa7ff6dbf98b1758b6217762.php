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

/* content/decompte.html.twig */
class __TwigTemplate_2de3c5f2e2339b6de6610785604f1bd9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/decompte.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/decompte.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html ; charset=utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta http-equiv=\"Expires\" CONTENT=\"Fri, 01 Jan 1990 00:00:00 GMT\">
    <meta http-equiv=\"Cache-Control\" content=\"max-age=200\"/>
    <meta http-equiv=\"Pragma\" CONTENT=\"no-cache\">
    <title>Carlinbleu | Gestion et Suivi de Chantier</title>
    <meta content=\"no-cache, no-store, must-revalidate, post-check=0, pre-check=0\"/>
    <meta name=\"description\" content=\"Votre application multi-utilisateurs de gestion de chantiers: Comptabilité, Gestion technique, Suivi et gestion de matériel,
         Gestion des articles, Planning, Gestionnaire de stock, etc.\">
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
        // line 25
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("apdecomptes");
        yield "
</head>
<body class=\"theme-red\" style=\"background-color: #d1d3e2 !important;\" id=\"bod\">
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
        <!-- Content -->
        <div class=\"modal-content text-center\">
            <!-- Header -->
            <div class=\"modal-header d-flex justify-content-center bg-pink\">
                <h4 class=\"bolo700\">
                    ERREUR
                </h4>
            </div>

            <!-- Body -->
            <div class=\"modal-body\">
                <i class=\"fas fa-exclamation-triangle fa-4x animated rotateIn col-pink\"></i>
                <h4 class=\"col-pink\">
                    DES OPÉRATIONS ONT ÉTÉ FAITS SUR CE DEVIS. VEUILLEZ SVP LES DÉVALIDER ÉGALEMENT.
                </h4>
            </div>

            <!-- Footer -->
            <div class=\"text-center\">
                <div type=\"button\" id=\"closeLier\" class=\"btn btn-link waves-effect text-white bg-pink\"
                     data-dismiss=\"modal\">
                    FERMER
                </div>
            </div>
        </div>
        <!-- /.Content -->
    </div>
</div>
<div class=\"modal fade\" id=\"ModalSucces\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-sm modal-notify\" role=\"document\">
        <!-- Content -->
        <div class=\"modal-content text-center\">
            <!-- Header -->
            <div class=\"modal-header d-flex justify-content-center bg-green\">
                <h4>
                    REQUÊTE ACCEPTÉE
                </h4>
            </div>

            <!-- Body -->
            <div class=\"modal-body\">
                <i class=\"fas fa-check-circle fa-4x animated rotateIn col-green\"></i>
                <h4 class=\"col-green\">
                    VALIDATION EN COURS ....
                </h4>
            </div>
        </div>
        <!-- /.Content -->
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
            <div class=\"modal-body p-t-25\" style=\"height: 100px !important;\" >
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
        <!-- /.Content -->
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
            <div class=\"modal-header d-flex justify-content-center bg-deep-orange\">
                <h4>DES OPÉRATIONS PEUVENT ÊTRE LIÉES À CE DEVIS.</h4>
                <h4>VEUILLEZ SVP LES DÉVALIDER ÉGALEMENT.</h4>
                <h4>CONTINUER ?</h4>
            </div>
            <div class=\"modal-body\">
                <i class=\"far fa-exclamation-circle col-deep-orange\" style=\"font-size: 50px\"></i>
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
<style>
    .bood {
        position: relative;
        width: 100%;
        height: ";
        // line 262
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((30 - CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 262, $this->source); })()), "headerHeight", [], "any", false, false, false, 262)) - CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 262, $this->source); })()), "footerHeight", [], "any", false, false, false, 262)), "html", null, true);
        yield "cm;
        padding-left: 1cm;
        padding-right: 1cm;
        overflow-y: scroll;
    }

    .footer {
        height: ";
        // line 269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 269, $this->source); })()), "footerHeight", [], "any", false, false, false, 269), "html", null, true);
        yield "cm;
        bottom: 0;
    }

    .header {
        height: ";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 274, $this->source); })()), "headerHeight", [], "any", false, false, false, 274), "html", null, true);
        yield "cm;
        -webkit-print-color-adjust: exact;
        top: 0;
    }

    @media print {
        .footer-space {
            height: ";
        // line 281
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 281, $this->source); })()), "footerHeight", [], "any", false, false, false, 281), "html", null, true);
        yield "cm;
        }

        .header-space {
            height: ";
        // line 285
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 285, $this->source); })()), "headerHeight", [], "any", false, false, false, 285), "html", null, true);
        yield "cm;
            margin-top: ";
        // line 286
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 286, $this->source); })()), "teteDH", [], "any", false, false, false, 286), "html", null, true);
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
            background-color: #4e73df !important;
            color: #FFFFFF !important;
        }

        table {
            border-spacing: 0;
            border-collapse: collapse;
            font-size: ";
        // line 309
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 309, $this->source); })()), "dsize", [], "any", false, false, false, 309), "html", null, true);
        yield "px;
            font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
        }

    }
</style>
<style>
    .kop {
        color: #4e73df !important;
        font-weight: bold
    }

    table {
        border-spacing: 0;
        border-collapse: collapse;
        font-size: ";
        // line 324
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 324, $this->source); })()), "dsize", [], "any", false, false, false, 324), "html", null, true);
        yield "px;
        font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
    }

    .togo {
        background-color: #EAEDED !important;
        font-size: ";
        // line 330
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 330, $this->source); })()), "dsize", [], "any", false, false, false, 330), "html", null, true);
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

    td.bordeu {
        border-spacing: 0;
        border-collapse: collapse;
        border: solid #D3D3D3;
        border-width: 1px 1px 1px 0 !important;
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
        background-color: #4e73df !important;
        color: #FFFFFF !important;
        text-align: center;
    }

    tr.printa {
        background-color: #e0e0e5 !important;
        color: #000 !important;
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

    input.bop{
        padding:0 !important;
    }

</style>
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
        // line 413
        if ((($tmp =  !array_key_exists("libre", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 414
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 414, $this->source); })()), "user", [], "any", false, false, false, 414)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 415
                yield "                        <li class=\"col-yellow h4 bolo600 m-l-20\">
                            ";
                // line 416
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 416, $this->source); })()), "user", [], "any", false, false, false, 416), "nom", [], "any", false, false, false, 416)), "html", null, true);
                yield "
                            ";
                // line 417
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 417, $this->source); })()), "user", [], "any", false, false, false, 417), "prenoms", [], "any", false, false, false, 417)), "html", null, true);
                yield "
                        </li>
                    ";
            }
            // line 420
            yield "                ";
        }
        // line 421
        yield "
                ";
        // line 422
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 422, $this->source); })()), "user", [], "any", false, false, false, 422)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 423
            yield "                    ";
            if (( !array_key_exists("libre", $context) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 423, $this->source); })()), "user", [], "any", false, false, false, 423))) {
                // line 424
                yield "                        <li class=\"hidere\"><a href=\"javascript:void(0);\" data-close=\"true\">
                    <span class=\"js-right-sidebars badge bg-purple\">
                      CHANTIERS EN ÉTUDE
                    </span>
                            </a>
                        </li>
                        <li class=\"hidere\">
                            <a href=\"javascript:void(0);\" data-close=\"true\">
                    <span class=\"js-right-sidebar badge bg-pink\">
                      CHANTIERS EN COURS
                    </span>
                            </a>
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
                // line 445
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["history"]);
                foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                    // line 446
                    yield "                                        <li>
                                            <a href=\"javascript:void(0);\">
                                                <div class=\"menu-info\">
                                                    <h5 class=\"col-indigo font-weight-bold\">";
                    // line 449
                    yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["history"], "action", [], "any", false, false, false, 449));
                    yield "</h5>
                                                    <h5 class=\"col-pink font-weight-bold\">
                                                        Par: ";
                    // line 451
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["history"], "dobyuser", [], "any", false, false, false, 451), "nom", [], "any", false, false, false, 451)), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["history"], "dobyuser", [], "any", false, false, false, 451), "prenoms", [], "any", false, false, false, 451)), "html", null, true);
                    yield "</h5>
                                                    <p class=\"col-black\">
                                                        <i class=\"material-icons\">access_time</i> <span
                                                                style=\"font-size: 14px\">";
                    // line 454
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["history"], "date", [], "any", false, false, false, 454), "d.m.Y H.m"), "html", null, true);
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
                // line 460
                yield "                                </ul>
                            </li>
                            <li class=\"footer bg-blue col-white\">
                                <a href=\"";
                // line 463
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historique");
                yield "\" class=\"bolo text-white\" style=\"font-size: 16px\">
                                    Voir toutes les actions
                                </a>
                            </li>
                        </ul>
                    ";
            }
            // line 469
            yield "
                    <li class=\"hidere\">
                        <a data-toggle=\"modal\" data-target=\"#ModalSearch\">
                            <i class=\"material-icons\">search</i>
                        </a>
                    </li>
                ";
        }
        // line 476
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
        // line 489
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logoy.png"), "html", null, true);
        yield "\" style=\"float: left; width: 200px !important;margin-top: 10px\"/>
        </div>
        <div class=\"menu\">
            <ul class=\"list\">
                <li class=\"active\">
                    ";
        // line 494
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 494, $this->source); })()) == "page"))) {
            // line 495
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("welcome");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">home</i>
                            <span class=\"col-yellow\">ACCUEIL</span>
                        </a>
                    ";
        } else {
            // line 500
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("welcome");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">home</i>
                            <span class=\"text-white\">Accueil</span>
                        </a>
                    ";
        }
        // line 505
        yield "                </li>
                ";
        // line 506
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 506, $this->source); })()), "user", [], "any", false, false, false, 506)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 507
            yield "                    <li class=\"active\">
                        ";
            // line 508
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 508, $this->source); })()) == "message"))) {
                // line 509
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">email</i>
                                <span class=\"col-yellow\">MESSAGERIE</span>
                            </a>
                        ";
            } else {
                // line 514
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">email</i>
                                <span class=\"text-white\">Messagerie</span>
                            </a>
                        ";
            }
            // line 519
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 521
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 521, $this->source); })()) == "article"))) {
                // line 522
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">content_copy</i>
                                <span class=\"col-yellow\">GESTION DES ARTICLES</span>
                            </a>
                        ";
            } else {
                // line 527
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">content_copy</i>
                                <span class=\"text-white\">Gestion des articles</span>
                            </a>
                        ";
            }
            // line 532
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 534
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 534, $this->source); })()) == "listeclient"))) {
                // line 535
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeclient");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">content_copy</i>
                                <span class=\"col-yellow\">LISTE DES CLIENTS</span>
                            </a>
                        ";
            } else {
                // line 540
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeclient");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">content_copy</i>
                                <span class=\"text-white\">Liste des clients</span>
                            </a>
                        ";
            }
            // line 545
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 547
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 547, $this->source); })()) == "chanetude"))) {
                // line 548
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chanetude");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">content_copy</i>
                                <span class=\"col-yellow\">CHANTIERS EN ÉTUDE</span>
                            </a>
                        ";
            } else {
                // line 553
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chanetude");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">content_copy</i>
                                <span class=\"text-white\">Chantiers en étude</span>
                            </a>
                        ";
            }
            // line 558
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 560
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 560, $this->source); })()) == "chancours"))) {
                // line 561
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chancours");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">widgets</i>
                                <span class=\"col-yellow\">CHANTIERS EN COURS</span>
                            </a>
                        ";
            } else {
                // line 566
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chancours");
                yield "\">
                                <i class=\"material-icons text-white\">widgets</i>
                                <span class=\"text-white\">Chantiers en cours</span>
                            </a>
                        ";
            }
            // line 571
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 573
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 573, $this->source); })()) == "chanechouer"))) {
                // line 574
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chanechouer");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">widgets</i>
                                <span class=\"col-yellow\">CHANTIERS ÉCHOUÉS</span>
                            </a>
                        ";
            } else {
                // line 579
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chanechouer");
                yield "\">
                                <i class=\"material-icons text-white\">widgets</i>
                                <span class=\"text-white\">Chantiers échoués</span>
                            </a>
                        ";
            }
            // line 584
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 586
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 586, $this->source); })()) == "chanclotures"))) {
                // line 587
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chanclotures");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">widgets</i>
                                <span class=\"col-yellow\">CHANTIERS CLÔTURÉS</span>
                            </a>
                        ";
            } else {
                // line 592
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chanclotures");
                yield "\">
                                <i class=\"material-icons text-white\">widgets</i>
                                <span class=\"text-white\">Chantiers clôturés</span>
                            </a>
                        ";
            }
            // line 597
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 599
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 599, $this->source); })()) == "chantermines"))) {
                // line 600
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantermines");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">widgets</i>
                                <span class=\"col-yellow\">CHANTIERS TERMINÉS</span>
                            </a>
                        ";
            } else {
                // line 605
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantermines");
                yield "\">
                                <i class=\"material-icons text-white\">widgets</i>
                                <span class=\"text-white\">Chantiers terminés</span>
                            </a>
                        ";
            }
            // line 610
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 612
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 612, $this->source); })()) == "technique"))) {
                // line 613
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technique");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">open_with</i>
                                <span class=\"col-yellow\">GESTION TECHNIQUE</span>
                            </a>
                        ";
            } else {
                // line 618
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technique");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">open_with</i>
                                <span class=\"text-white\">Gestion technique</span>
                            </a>
                        ";
            }
            // line 623
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 625
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 625, $this->source); })()) == "materiel"))) {
                // line 626
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("materiel");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">bubble_chart</i>
                                <span class=\"col-yellow\">GESTION DU MATÉRIEL</span>
                            </a>
                        ";
            } else {
                // line 631
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("materiel");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">bubble_chart</i>
                                <span class=\"text-white\">Gestion du matériel</span>
                            </a>
                        ";
            }
            // line 636
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 638
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 638, $this->source); })()) == "personnel"))) {
                // line 639
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnel");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">people_outline</i>
                                <span class=\"col-yellow\">GESTION DU PERSONNEL</span>
                            </a>
                        ";
            } else {
                // line 644
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnel");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">people_outline</i>
                                <span class=\"text-white\">Gestion du personnel</span>
                            </a>
                        ";
            }
            // line 649
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 651
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 651, $this->source); })()) == "paie"))) {
                // line 652
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paie");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">toll</i>
                                <span class=\"col-yellow\">POINTS DE PAIE</span>
                            </a>
                        ";
            } else {
                // line 657
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paie");
                yield "\">
                                <i class=\"material-icons text-white\">toll</i>
                                <span class=\"text-white\">Points de paie</span>
                            </a>
                        ";
            }
            // line 662
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 664
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 664, $this->source); })()) == "parametre"))) {
                // line 665
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parametre");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">center_focus_weak</i>
                                <span class=\"col-yellow\">PARAMÈTRES</span>
                            </a>
                        ";
            } else {
                // line 670
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parametre");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">center_focus_weak</i>
                                <span class=\"text-white\">Paramètres</span>
                            </a>
                        ";
            }
            // line 675
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 677
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 677, $this->source); })()) == "historique"))) {
                // line 678
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historique");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">history</i>
                                <span class=\"col-yellow\">HISTORIQUE</span>
                            </a>
                        ";
            } else {
                // line 683
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historique");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">history</i>
                                <span class=\"text-white\">Historique</span>
                            </a>
                        ";
            }
            // line 688
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 690
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 690, $this->source); })()) == "corbeille"))) {
                // line 691
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("corbeille");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">delete</i>
                                <span class=\"col-yellow\">CORBEILLE</span>
                            </a>
                        ";
            } else {
                // line 696
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("corbeille");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">delete</i>
                                <span class=\"text-white\">Corbeille</span>
                            </a>
                        ";
            }
            // line 701
            yield "                    </li>
                ";
        }
        // line 703
        yield "            </ul>
        </div>


    </aside>
    <aside id=\"rightsidebars\" class=\"right-sidebars m-t--25 p-t-10\" style=\"overflow: scroll\">
        <div class=\"tab-content\">
            <div role=\"tabpanel\" class=\"tab-pane fade in active in active\" id=\"chantier\">
                <div class=\"table-responsive\" style=\"padding: 10px !important;\">
                    ";
        // line 712
        if ((($tmp =  !array_key_exists("libre", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 713
            yield "                        ";
            $context["q"] = 0;
            // line 714
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 714, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 715
                yield "                            ";
                $context["p"] = 0;
                // line 716
                yield "                            ";
                if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 716)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 716), "count", [], "any", false, false, false, 716) > 0))) {
                    // line 717
                    yield "                                ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 717))) {
                        // line 718
                        yield "                                    <table class=\"table-bordered shadow\" style=\" overflow: scroll; width: 100%\">
                                        ";
                        // line 719
                        if (((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 719, $this->source); })()) == 0)) {
                            // line 720
                            yield "                                            <tr>
                                                <td colspan=\"2\" class=\"bg-purple text-white\"
                                                    style=\"padding-left: 5px;\">CHANTIERS EN ÉTUDE
                                                </td>
                                            </tr>
                                        ";
                        }
                        // line 726
                        yield "                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 726));
                        foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                            // line 727
                            yield "                                            ";
                            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 727))) {
                                // line 728
                                yield "                                                ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 728) == "etude")) {
                                    // line 729
                                    yield "                                                    ";
                                    if (((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 729, $this->source); })()) == 0)) {
                                        // line 730
                                        yield "                                                        <tr>
                                                            <td colspan=\"2\" class=\"bg-blue text-white\"
                                                                style=\"padding-left: 5px;\">
                                                                <a href=\"";
                                        // line 733
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 733)]), "html", null, true);
                                        yield "\"
                                                                   class=\"text-white\" title=\"";
                                        // line 734
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 734), "html", null, true);
                                        yield "\">
                                                                    -
                                                                    ";
                                        // line 736
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 736), "html", null, true);
                                        yield "
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    ";
                                    }
                                    // line 741
                                    yield "                                                    <tr>
                                                        <td style=\"padding-left: 5px\" colspan=\"2\" class=\"bg-light\">
                                                            <a href=\"";
                                    // line 743
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source,                                     // line 746
$context["chantier"], "id", [], "any", false, false, false, 746)]), "html", null, true);
                                    // line 748
                                    yield "\" class=\"text-pri\" title=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 748), "html", null, true);
                                    yield "\">
                                                                # ";
                                    // line 749
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 749), 0, 55)), "html", null, true);
                                    yield "
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    ";
                                    // line 753
                                    $context["p"] = ((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 753, $this->source); })()) + 1);
                                    // line 754
                                    yield "                                                ";
                                }
                                // line 755
                                yield "                                            ";
                            }
                            // line 756
                            yield "                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 757
                        yield "                                    </table>
                                    ";
                        // line 758
                        $context["q"] = ((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 758, $this->source); })()) + 1);
                        // line 759
                        yield "                                ";
                    }
                    // line 760
                    yield "                            ";
                }
                // line 761
                yield "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 763
            yield "                    ";
        }
        // line 764
        yield "                </div>
            </div>
        </div>
    </aside>
    <aside id=\"rightsidebar\" class=\"right-sidebar m-t--25 p-t-10\" style=\"overflow: scroll\">
        <div class=\"tab-content\">
            <div role=\"tabpanel\" class=\"tab-pane fade in active in active\" id=\"chantier\">
                <div class=\"table-responsive\" style=\"padding: 10px !important;\">
                    ";
        // line 772
        if ((($tmp =  !array_key_exists("libre", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 773
            yield "                        ";
            $context["q"] = 0;
            // line 774
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 774, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 775
                yield "                            ";
                $context["p"] = 0;
                // line 776
                yield "                            ";
                if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 776)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 776), "count", [], "any", false, false, false, 776) > 0))) {
                    // line 777
                    yield "                                ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 777))) {
                        // line 778
                        yield "                                    <table class=\"table-bordered shadow\" style=\" overflow: scroll; width: 100%\">
                                        ";
                        // line 779
                        if (((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 779, $this->source); })()) == 0)) {
                            // line 780
                            yield "                                            <tr>
                                                <td colspan=\"2\" class=\"bg-pink text-white\"
                                                    style=\"padding-left: 5px;\">CHANTIERS EN COURS
                                                </td>
                                            </tr>
                                        ";
                        }
                        // line 786
                        yield "                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 786));
                        foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                            // line 787
                            yield "                                            ";
                            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 787))) {
                                // line 788
                                yield "                                                ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 788) == "encours")) {
                                    // line 789
                                    yield "                                                    ";
                                    if (((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 789, $this->source); })()) == 0)) {
                                        // line 790
                                        yield "                                                        <tr>
                                                            <td colspan=\"2\" class=\"bg-blue text-white\"
                                                                style=\"padding-left: 5px;\">
                                                                <a href=\"";
                                        // line 793
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 793)]), "html", null, true);
                                        yield "\"
                                                                   class=\"text-white\" title=\"";
                                        // line 794
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 794), "html", null, true);
                                        yield "\">
                                                                    -
                                                                    ";
                                        // line 796
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 796), "html", null, true);
                                        yield "
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    ";
                                    }
                                    // line 801
                                    yield "                                                    <tr>
                                                        <td style=\"padding-left: 5px\" colspan=\"2\" class=\"bg-light\">
                                                            <a href=\"";
                                    // line 803
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source,                                     // line 806
$context["chantier"], "id", [], "any", false, false, false, 806)]), "html", null, true);
                                    // line 808
                                    yield "\" class=\"text-pri\" title=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 808), "html", null, true);
                                    yield "\">
                                                                # ";
                                    // line 809
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 809), 0, 55)), "html", null, true);
                                    yield "
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    ";
                                    // line 813
                                    $context["p"] = ((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 813, $this->source); })()) + 1);
                                    // line 814
                                    yield "                                                ";
                                }
                                // line 815
                                yield "                                            ";
                            }
                            // line 816
                            yield "                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 817
                        yield "                                    </table>
                                    ";
                        // line 818
                        $context["q"] = ((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 818, $this->source); })()) + 1);
                        // line 819
                        yield "                                ";
                    }
                    // line 820
                    yield "                            ";
                }
                // line 821
                yield "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 823
            yield "                    ";
        }
        // line 824
        yield "                </div>
            </div>
        </div>
    </aside>
</section>

<input type=\"text\" class=\"hide\" id=\"idchantier\" value=\"";
        // line 830
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 830, $this->source); })()), "id", [], "any", false, false, false, 830), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"iddecompte\" value=\"";
        // line 831
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["decompte"]) || array_key_exists("decompte", $context) ? $context["decompte"] : (function () { throw new RuntimeError('Variable "decompte" does not exist.', 831, $this->source); })()), "id", [], "any", false, false, false, 831), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"decdate\" value=\"";
        // line 832
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["decompte"]) || array_key_exists("decompte", $context) ? $context["decompte"] : (function () { throw new RuntimeError('Variable "decompte" does not exist.', 832, $this->source); })()), "date", [], "any", false, false, false, 832), "d/m/Y"), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"mocode\" value=\"";
        // line 833
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["decompte"]) || array_key_exists("decompte", $context) ? $context["decompte"] : (function () { throw new RuntimeError('Variable "decompte" does not exist.', 833, $this->source); })()), "devis", [], "any", false, false, false, 833), "monnaie", [], "any", false, false, false, 833), "code", [], "any", false, false, false, 833), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"isfirst\" value=\"";
        // line 834
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["isfirst"]) || array_key_exists("isfirst", $context) ? $context["isfirst"] : (function () { throw new RuntimeError('Variable "isfirst" does not exist.', 834, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"vava\" value=\"";
        // line 835
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["vava"]) || array_key_exists("vava", $context) ? $context["vava"] : (function () { throw new RuntimeError('Variable "vava" does not exist.', 835, $this->source); })()), "html", null, true);
        yield "\">

<input type=\"text\" class=\"hide\" id=\"jsondecompte\" value=\"";
        // line 837
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["jsondecompte"]) || array_key_exists("jsondecompte", $context) ? $context["jsondecompte"] : (function () { throw new RuntimeError('Variable "jsondecompte" does not exist.', 837, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"jsonforme\" value=\"";
        // line 838
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["jsonforme"]) || array_key_exists("jsonforme", $context) ? $context["jsonforme"] : (function () { throw new RuntimeError('Variable "jsonforme" does not exist.', 838, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"jsonformes\" value=\"";
        // line 839
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["jsonformes"]) || array_key_exists("jsonformes", $context) ? $context["jsonformes"] : (function () { throw new RuntimeError('Variable "jsonformes" does not exist.', 839, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"jsongroupes\" value=\"";
        // line 840
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["jsongroupes"]) || array_key_exists("jsongroupes", $context) ? $context["jsongroupes"] : (function () { throw new RuntimeError('Variable "jsongroupes" does not exist.', 840, $this->source); })()), "html", null, true);
        yield "\">

<div class=\"modal fade right\" id=\"modalInfo\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-pink text-white\">
                <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">MODIFIER LES INFORMATIONS</h4>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    ";
        // line 851
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formDecompte"]) || array_key_exists("formDecompte", $context) ? $context["formDecompte"] : (function () { throw new RuntimeError('Variable "formDecompte" does not exist.', 851, $this->source); })()), 'form_start', ["attr" => ["id" => "updateDecompteForm"]]);
        yield "
                    ";
        // line 852
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDecompte"]) || array_key_exists("formDecompte", $context) ? $context["formDecompte"] : (function () { throw new RuntimeError('Variable "formDecompte" does not exist.', 852, $this->source); })()), "_token", [], "any", false, false, false, 852), 'row');
        yield "
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DATE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 858
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDecompte"]) || array_key_exists("formDecompte", $context) ? $context["formDecompte"] : (function () { throw new RuntimeError('Variable "formDecompte" does not exist.', 858, $this->source); })()), "date", [], "any", false, false, false, 858), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">ACOMPTE(%)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 866
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDecompte"]) || array_key_exists("formDecompte", $context) ? $context["formDecompte"] : (function () { throw new RuntimeError('Variable "formDecompte" does not exist.', 866, $this->source); })()), "acompte", [], "any", false, false, false, 866), 'widget', ["attr" => ["class" => "form-control col-blue-grey disabled"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">COMPTE PRORATA(%)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 876
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDecompte"]) || array_key_exists("formDecompte", $context) ? $context["formDecompte"] : (function () { throw new RuntimeError('Variable "formDecompte" does not exist.', 876, $this->source); })()), "prorata", [], "any", false, false, false, 876), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">RETENUE TRC(%)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 884
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDecompte"]) || array_key_exists("formDecompte", $context) ? $context["formDecompte"] : (function () { throw new RuntimeError('Variable "formDecompte" does not exist.', 884, $this->source); })()), "trc", [], "any", false, false, false, 884), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">RETENUE DE FINITION(%)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 894
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDecompte"]) || array_key_exists("formDecompte", $context) ? $context["formDecompte"] : (function () { throw new RuntimeError('Variable "formDecompte" does not exist.', 894, $this->source); })()), "finition", [], "any", false, false, false, 894), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">RETENUE DE GARANTIE(%)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 902
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDecompte"]) || array_key_exists("formDecompte", $context) ? $context["formDecompte"] : (function () { throw new RuntimeError('Variable "formDecompte" does not exist.', 902, $this->source); })()), "garantie", [], "any", false, false, false, 902), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DÉDUCTION DE L'ACOMPTE DE DÉMARRAGE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 912
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDecompte"]) || array_key_exists("formDecompte", $context) ? $context["formDecompte"] : (function () { throw new RuntimeError('Variable "formDecompte" does not exist.', 912, $this->source); })()), "deduction", [], "any", false, false, false, 912), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"updateDecompte\" value=\"MODIFIER\"
                               class=\"btn btn-link waves-effect text-white bg-green\">
                        <div type=\"button\" id=\"closeUpDecompte\" class=\"btn btn-link waves-effect text-white bg-pink\"
                             data-dismiss=\"modal\">
                            FERMER
                        </div>
                        <img src=\"";
        // line 925
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadUpDecompte\">
                    </div>
                    <br><br><br>
                    ";
        // line 929
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formDecompte"]) || array_key_exists("formDecompte", $context) ? $context["formDecompte"] : (function () { throw new RuntimeError('Variable "formDecompte" does not exist.', 929, $this->source); })()), 'form_end');
        yield "
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
                    ";
        // line 944
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formeDecompte"]) || array_key_exists("formeDecompte", $context) ? $context["formeDecompte"] : (function () { throw new RuntimeError('Variable "formeDecompte" does not exist.', 944, $this->source); })()), 'form_start', ["attr" => ["id" => "addDecompteForm"]]);
        yield "
                    <input type=\"hidden\" name=\"token\" value=\"";
        // line 945
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
        // line 953
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 953, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 954
            yield "                                            ";
            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 954)) && (null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 954)))) {
                // line 955
                yield "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 955));
                foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                    // line 956
                    yield "                                                    ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 956))) {
                        // line 957
                        yield "                                                        ";
                        $context["oop"] = 0;
                        // line 958
                        yield "                                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "devis", [], "any", false, false, false, 958));
                        foreach ($context['_seq'] as $context["_key"] => $context["dev"]) {
                            // line 959
                            yield "                                                            ";
                            $context["op"] = 0;
                            // line 960
                            yield "                                                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "decomptes", [], "any", false, false, false, 960));
                            foreach ($context['_seq'] as $context["_key"] => $context["dec"]) {
                                // line 961
                                yield "                                                                ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["dec"], "avancement", [], "any", false, false, false, 961) == 100)) {
                                    // line 962
                                    yield "                                                                    ";
                                    $context["op"] = ((isset($context["op"]) || array_key_exists("op", $context) ? $context["op"] : (function () { throw new RuntimeError('Variable "op" does not exist.', 962, $this->source); })()) + 1);
                                    // line 963
                                    yield "                                                                ";
                                }
                                // line 964
                                yield "                                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['dec'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 965
                            yield "                                                            ";
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "etat", [], "any", false, false, false, 965) == "valide") && ((isset($context["op"]) || array_key_exists("op", $context) ? $context["op"] : (function () { throw new RuntimeError('Variable "op" does not exist.', 965, $this->source); })()) == 0))) {
                                // line 966
                                yield "                                                                ";
                                $context["oop"] = ((isset($context["oop"]) || array_key_exists("oop", $context) ? $context["oop"] : (function () { throw new RuntimeError('Variable "oop" does not exist.', 966, $this->source); })()) + 1);
                                // line 967
                                yield "                                                            ";
                            }
                            // line 968
                            yield "                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['dev'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 969
                        yield "
                                                        ";
                        // line 970
                        if (((isset($context["oop"]) || array_key_exists("oop", $context) ? $context["oop"] : (function () { throw new RuntimeError('Variable "oop" does not exist.', 970, $this->source); })()) > 0)) {
                            // line 971
                            yield "                                                            <optgroup
                                                                    label=\"";
                            // line 972
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 972)), "html", null, true);
                            yield " | ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 972)), "html", null, true);
                            yield "\">
                                                                ";
                            // line 973
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "devis", [], "any", false, false, false, 973));
                            foreach ($context['_seq'] as $context["_key"] => $context["dev"]) {
                                // line 974
                                yield "                                                                    ";
                                $context["op"] = 0;
                                // line 975
                                yield "                                                                    ";
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "decomptes", [], "any", false, false, false, 975));
                                foreach ($context['_seq'] as $context["_key"] => $context["dec"]) {
                                    // line 976
                                    yield "                                                                        ";
                                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["dec"], "avancement", [], "any", false, false, false, 976) == 100)) {
                                        // line 977
                                        yield "                                                                            ";
                                        $context["op"] = ((isset($context["op"]) || array_key_exists("op", $context) ? $context["op"] : (function () { throw new RuntimeError('Variable "op" does not exist.', 977, $this->source); })()) + 1);
                                        // line 978
                                        yield "                                                                        ";
                                    }
                                    // line 979
                                    yield "                                                                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_key'], $context['dec'], $context['_parent']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 980
                                yield "                                                                    ";
                                if (((CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "etat", [], "any", false, false, false, 980) == "valide") && ((isset($context["op"]) || array_key_exists("op", $context) ? $context["op"] : (function () { throw new RuntimeError('Variable "op" does not exist.', 980, $this->source); })()) == 0))) {
                                    // line 981
                                    yield "                                                                        <option value=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "id", [], "any", false, false, false, 981), "html", null, true);
                                    yield "\"
                                                                                class=\"";
                                    // line 982
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "id", [], "any", false, false, false, 982), "html", null, true);
                                    yield "\">";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "iddevis", [], "any", false, false, false, 982), "html", null, true);
                                    yield "</option>
                                                                    ";
                                }
                                // line 984
                                yield "                                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['dev'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 985
                            yield "                                                            </optgroup>
                                                        ";
                        }
                        // line 987
                        yield "                                                    ";
                    }
                    // line 988
                    yield "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 989
                yield "                                            ";
            }
            // line 990
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 991
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
        // line 1010
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeDecompte"]) || array_key_exists("formeDecompte", $context) ? $context["formeDecompte"] : (function () { throw new RuntimeError('Variable "formeDecompte" does not exist.', 1010, $this->source); })()), "garantie", [], "any", false, false, false, 1010), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 1019
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeDecompte"]) || array_key_exists("formeDecompte", $context) ? $context["formeDecompte"] : (function () { throw new RuntimeError('Variable "formeDecompte" does not exist.', 1019, $this->source); })()), "finition", [], "any", false, false, false, 1019), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 1030
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeDecompte"]) || array_key_exists("formeDecompte", $context) ? $context["formeDecompte"] : (function () { throw new RuntimeError('Variable "formeDecompte" does not exist.', 1030, $this->source); })()), "prorata", [], "any", false, false, false, 1030), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 1039
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeDecompte"]) || array_key_exists("formeDecompte", $context) ? $context["formeDecompte"] : (function () { throw new RuntimeError('Variable "formeDecompte" does not exist.', 1039, $this->source); })()), "date", [], "any", false, false, false, 1039), 'widget', ["attr" => ["class" => "form-control datepicker"]]);
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
        // line 1051
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadDecompte\"></div>
                    <br>
                    <br>
                    <br>
                    ";
        // line 1056
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formeDecompte"]) || array_key_exists("formeDecompte", $context) ? $context["formeDecompte"] : (function () { throw new RuntimeError('Variable "formeDecompte" does not exist.', 1056, $this->source); })()), 'form_end');
        yield "
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
        // line 1073
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1073, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data", "attr" => ["id" => "addforme"]]);
        yield "
                    ";
        // line 1074
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1074, $this->source); })()), "_token", [], "any", false, false, false, 1074), 'row');
        yield "
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <h5 class=\"col-black bolo600\">TYPE D'ENTÊTE</h5>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1080
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1080, $this->source); })()), "typeEntete", [], "any", false, false, false, 1080), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <h5 class=\"col-black bolo600\">TYPE DE PIED DE PAGE</h5>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1088
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1088, $this->source); })()), "typeFooter", [], "any", false, false, false, 1088), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-black bolo600\">ENTÊTE EN IMAGE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1096
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1096, $this->source); })()), "enteteImage", [], "any", false, false, false, 1096), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-black bolo600\">PIED DE PAGE EN IMAGE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1104, $this->source); })()), "footImage", [], "any", false, false, false, 1104), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
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
        // line 1114
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1114, $this->source); })()), "headerText", [], "any", false, false, false, 1114), 'widget', ["required" => "", "id" => "editor5", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-black bolo600\">PIED DE PAGE EN TEXTE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1122
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1122, $this->source); })()), "pied", [], "any", false, false, false, 1122), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <h5 class=\"col-black bolo600\">CORPS DU DEVIS(en pixel)</h5>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1132
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1132, $this->source); })()), "dsize", [], "any", false, false, false, 1132), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
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
        // line 1142
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1142, $this->source); })()), "headerWith", [], "any", false, false, false, 1142), 'widget', ["required" => "", "attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-black bolo600\">HAUTEUR ENTÊTE(cm)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1150
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1150, $this->source); })()), "headerHeight", [], "any", false, false, false, 1150), 'widget', ["required" => "", "attr" => ["class" => "form-control col-pink"]]);
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
        // line 1161
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1161, $this->source); })()), "teteY", [], "any", false, false, false, 1161), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-black bolo600\">LARGEUR DU LOGO(cm)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1169
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1169, $this->source); })()), "teteH", [], "any", false, false, false, 1169), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
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
        // line 1179
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1179, $this->source); })()), "teteDH", [], "any", false, false, false, 1179), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-black bolo600\">DÉCALAGE BAS(cm)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1187
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1187, $this->source); })()), "teteDB", [], "any", false, false, false, 1187), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
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
        // line 1197
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1197, $this->source); })()), "teteDD", [], "any", false, false, false, 1197), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-black bolo600\">DÉCALAGE À GAUCHE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1205
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1205, $this->source); })()), "teteDG", [], "any", false, false, false, 1205), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
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
        // line 1216
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1216, $this->source); })()), "piedsize", [], "any", false, false, false, 1216), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-black bolo600\">HAUTEUR DU PIED DE PAGE(cm)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1224
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1224, $this->source); })()), "footerHeight", [], "any", false, false, false, 1224), 'widget', ["required" => "", "attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\" style=\"margin-bottom: 50px !important;\">
                        <input type=\"submit\" id=\"updateForme\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect text-white bg-blue\">
                        <img src=\"";
        // line 1232
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadupForme\">
                    </div>
                    ";
        // line 1235
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1235, $this->source); })()), 'form_end');
        yield "
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
                        <div id=\"shacontentDecompte\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    localStorage.setItem('reloadd', 'decompte/' + document.getElementById('iddecompte').value + '/' + document.getElementById('idchantier').value);
</script>

";
        // line 1274
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("apdecomptes");
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
        return "content/decompte.html.twig";
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
        return array (  1988 => 1274,  1946 => 1235,  1940 => 1232,  1929 => 1224,  1918 => 1216,  1904 => 1205,  1893 => 1197,  1880 => 1187,  1869 => 1179,  1856 => 1169,  1845 => 1161,  1831 => 1150,  1820 => 1142,  1807 => 1132,  1794 => 1122,  1783 => 1114,  1770 => 1104,  1759 => 1096,  1748 => 1088,  1737 => 1080,  1728 => 1074,  1724 => 1073,  1704 => 1056,  1696 => 1051,  1681 => 1039,  1669 => 1030,  1655 => 1019,  1643 => 1010,  1622 => 991,  1616 => 990,  1613 => 989,  1607 => 988,  1604 => 987,  1600 => 985,  1594 => 984,  1587 => 982,  1582 => 981,  1579 => 980,  1573 => 979,  1570 => 978,  1567 => 977,  1564 => 976,  1559 => 975,  1556 => 974,  1552 => 973,  1546 => 972,  1543 => 971,  1541 => 970,  1538 => 969,  1532 => 968,  1529 => 967,  1526 => 966,  1523 => 965,  1517 => 964,  1514 => 963,  1511 => 962,  1508 => 961,  1503 => 960,  1500 => 959,  1495 => 958,  1492 => 957,  1489 => 956,  1484 => 955,  1481 => 954,  1477 => 953,  1466 => 945,  1462 => 944,  1444 => 929,  1437 => 925,  1421 => 912,  1408 => 902,  1397 => 894,  1384 => 884,  1373 => 876,  1360 => 866,  1349 => 858,  1340 => 852,  1336 => 851,  1322 => 840,  1318 => 839,  1314 => 838,  1310 => 837,  1305 => 835,  1301 => 834,  1297 => 833,  1293 => 832,  1289 => 831,  1285 => 830,  1277 => 824,  1274 => 823,  1267 => 821,  1264 => 820,  1261 => 819,  1259 => 818,  1256 => 817,  1250 => 816,  1247 => 815,  1244 => 814,  1242 => 813,  1235 => 809,  1230 => 808,  1228 => 806,  1227 => 803,  1223 => 801,  1215 => 796,  1210 => 794,  1206 => 793,  1201 => 790,  1198 => 789,  1195 => 788,  1192 => 787,  1187 => 786,  1179 => 780,  1177 => 779,  1174 => 778,  1171 => 777,  1168 => 776,  1165 => 775,  1160 => 774,  1157 => 773,  1155 => 772,  1145 => 764,  1142 => 763,  1135 => 761,  1132 => 760,  1129 => 759,  1127 => 758,  1124 => 757,  1118 => 756,  1115 => 755,  1112 => 754,  1110 => 753,  1103 => 749,  1098 => 748,  1096 => 746,  1095 => 743,  1091 => 741,  1083 => 736,  1078 => 734,  1074 => 733,  1069 => 730,  1066 => 729,  1063 => 728,  1060 => 727,  1055 => 726,  1047 => 720,  1045 => 719,  1042 => 718,  1039 => 717,  1036 => 716,  1033 => 715,  1028 => 714,  1025 => 713,  1023 => 712,  1012 => 703,  1008 => 701,  999 => 696,  990 => 691,  988 => 690,  984 => 688,  975 => 683,  966 => 678,  964 => 677,  960 => 675,  951 => 670,  942 => 665,  940 => 664,  936 => 662,  927 => 657,  918 => 652,  916 => 651,  912 => 649,  903 => 644,  894 => 639,  892 => 638,  888 => 636,  879 => 631,  870 => 626,  868 => 625,  864 => 623,  855 => 618,  846 => 613,  844 => 612,  840 => 610,  831 => 605,  822 => 600,  820 => 599,  816 => 597,  807 => 592,  798 => 587,  796 => 586,  792 => 584,  783 => 579,  774 => 574,  772 => 573,  768 => 571,  759 => 566,  750 => 561,  748 => 560,  744 => 558,  735 => 553,  726 => 548,  724 => 547,  720 => 545,  711 => 540,  702 => 535,  700 => 534,  696 => 532,  687 => 527,  678 => 522,  676 => 521,  672 => 519,  663 => 514,  654 => 509,  652 => 508,  649 => 507,  647 => 506,  644 => 505,  635 => 500,  626 => 495,  624 => 494,  616 => 489,  601 => 476,  592 => 469,  583 => 463,  578 => 460,  566 => 454,  558 => 451,  553 => 449,  548 => 446,  544 => 445,  521 => 424,  518 => 423,  516 => 422,  513 => 421,  510 => 420,  504 => 417,  500 => 416,  497 => 415,  494 => 414,  492 => 413,  406 => 330,  397 => 324,  379 => 309,  353 => 286,  349 => 285,  342 => 281,  332 => 274,  324 => 269,  314 => 262,  74 => 25,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html ; charset=utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta http-equiv=\"Expires\" CONTENT=\"Fri, 01 Jan 1990 00:00:00 GMT\">
    <meta http-equiv=\"Cache-Control\" content=\"max-age=200\"/>
    <meta http-equiv=\"Pragma\" CONTENT=\"no-cache\">
    <title>Carlinbleu | Gestion et Suivi de Chantier</title>
    <meta content=\"no-cache, no-store, must-revalidate, post-check=0, pre-check=0\"/>
    <meta name=\"description\" content=\"Votre application multi-utilisateurs de gestion de chantiers: Comptabilité, Gestion technique, Suivi et gestion de matériel,
         Gestion des articles, Planning, Gestionnaire de stock, etc.\">
    <meta name=\"keywords\"
          content=\"carlinbleu, carlin bleu, carlin, gestion , projet, chantier, comptabilité, gestion technique, suivi , gestion de matériel, gestion de chantiersgestionnaire de projets, articles , showroom , matériels\">
    <meta name=\"author\" content=\"carlinGroup\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"https://www.carlinbleu.com/img/Icon-96.png\">

    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css\"/>

    {{ encore_entry_link_tags('apdecomptes') }}
</head>
<body class=\"theme-red\" style=\"background-color: #d1d3e2 !important;\" id=\"bod\">
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
        <!-- Content -->
        <div class=\"modal-content text-center\">
            <!-- Header -->
            <div class=\"modal-header d-flex justify-content-center bg-pink\">
                <h4 class=\"bolo700\">
                    ERREUR
                </h4>
            </div>

            <!-- Body -->
            <div class=\"modal-body\">
                <i class=\"fas fa-exclamation-triangle fa-4x animated rotateIn col-pink\"></i>
                <h4 class=\"col-pink\">
                    DES OPÉRATIONS ONT ÉTÉ FAITS SUR CE DEVIS. VEUILLEZ SVP LES DÉVALIDER ÉGALEMENT.
                </h4>
            </div>

            <!-- Footer -->
            <div class=\"text-center\">
                <div type=\"button\" id=\"closeLier\" class=\"btn btn-link waves-effect text-white bg-pink\"
                     data-dismiss=\"modal\">
                    FERMER
                </div>
            </div>
        </div>
        <!-- /.Content -->
    </div>
</div>
<div class=\"modal fade\" id=\"ModalSucces\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-sm modal-notify\" role=\"document\">
        <!-- Content -->
        <div class=\"modal-content text-center\">
            <!-- Header -->
            <div class=\"modal-header d-flex justify-content-center bg-green\">
                <h4>
                    REQUÊTE ACCEPTÉE
                </h4>
            </div>

            <!-- Body -->
            <div class=\"modal-body\">
                <i class=\"fas fa-check-circle fa-4x animated rotateIn col-green\"></i>
                <h4 class=\"col-green\">
                    VALIDATION EN COURS ....
                </h4>
            </div>
        </div>
        <!-- /.Content -->
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
            <div class=\"modal-body p-t-25\" style=\"height: 100px !important;\" >
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
        <!-- /.Content -->
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
            <div class=\"modal-header d-flex justify-content-center bg-deep-orange\">
                <h4>DES OPÉRATIONS PEUVENT ÊTRE LIÉES À CE DEVIS.</h4>
                <h4>VEUILLEZ SVP LES DÉVALIDER ÉGALEMENT.</h4>
                <h4>CONTINUER ?</h4>
            </div>
            <div class=\"modal-body\">
                <i class=\"far fa-exclamation-circle col-deep-orange\" style=\"font-size: 50px\"></i>
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
            background-color: #4e73df !important;
            color: #FFFFFF !important;
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
        color: #4e73df !important;
        font-weight: bold
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

    td.bordeu {
        border-spacing: 0;
        border-collapse: collapse;
        border: solid #D3D3D3;
        border-width: 1px 1px 1px 0 !important;
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
        background-color: #4e73df !important;
        color: #FFFFFF !important;
        text-align: center;
    }

    tr.printa {
        background-color: #e0e0e5 !important;
        color: #000 !important;
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

    input.bop{
        padding:0 !important;
    }

</style>
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
                    <span class=\"js-right-sidebars badge bg-purple\">
                      CHANTIERS EN ÉTUDE
                    </span>
                            </a>
                        </li>
                        <li class=\"hidere\">
                            <a href=\"javascript:void(0);\" data-close=\"true\">
                    <span class=\"js-right-sidebar badge bg-pink\">
                      CHANTIERS EN COURS
                    </span>
                            </a>
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
<input type=\"text\" class=\"hide\" id=\"iddecompte\" value=\"{{ decompte.id }}\">
<input type=\"text\" class=\"hide\" id=\"decdate\" value=\"{{ decompte.date|date('d/m/Y') }}\">
<input type=\"text\" class=\"hide\" id=\"mocode\" value=\"{{ decompte.devis.monnaie.code }}\">
<input type=\"text\" class=\"hide\" id=\"isfirst\" value=\"{{ isfirst }}\">
<input type=\"text\" class=\"hide\" id=\"vava\" value=\"{{ vava }}\">

<input type=\"text\" class=\"hide\" id=\"jsondecompte\" value=\"{{ jsondecompte }}\">
<input type=\"text\" class=\"hide\" id=\"jsonforme\" value=\"{{ jsonforme }}\">
<input type=\"text\" class=\"hide\" id=\"jsonformes\" value=\"{{ jsonformes }}\">
<input type=\"text\" class=\"hide\" id=\"jsongroupes\" value=\"{{ jsongroupes }}\">

<div class=\"modal fade right\" id=\"modalInfo\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-pink text-white\">
                <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">MODIFIER LES INFORMATIONS</h4>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    {{ form_start(formDecompte, {'attr': {'id': 'updateDecompteForm'}}) }}
                    {{ form_row(formDecompte._token) }}
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DATE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formDecompte.date,{'attr':{'class':'form-control col-pink'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">ACOMPTE(%)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formDecompte.acompte,{'attr':{'class':'form-control col-blue-grey disabled'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">COMPTE PRORATA(%)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formDecompte.prorata,{'attr':{'class':'form-control col-pink'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">RETENUE TRC(%)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formDecompte.trc,{'attr':{'class':'form-control col-pink'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">RETENUE DE FINITION(%)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formDecompte.finition,{'attr':{'class':'form-control col-pink'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">RETENUE DE GARANTIE(%)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formDecompte.garantie,{'attr':{'class':'form-control col-pink'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DÉDUCTION DE L'ACOMPTE DE DÉMARRAGE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formDecompte.deduction,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"updateDecompte\" value=\"MODIFIER\"
                               class=\"btn btn-link waves-effect text-white bg-green\">
                        <div type=\"button\" id=\"closeUpDecompte\" class=\"btn btn-link waves-effect text-white bg-pink\"
                             data-dismiss=\"modal\">
                            FERMER
                        </div>
                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadUpDecompte\">
                    </div>
                    <br><br><br>
                    {{ form_end(formDecompte) }}
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
                    {{ form_start(formeDecompte, {'attr': {'id': 'addDecompteForm' }}) }}
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
                                    {{ form_widget(formeDecompte.garantie,{'attr':{'class':'form-control'}}) }}
                                </div>
                                <p class=\"h6 devcoy\"></p>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">RETENUE DE FINITION(%)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formeDecompte.finition,{'attr':{'class':'form-control'}}) }}
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
                                    {{ form_widget(formeDecompte.prorata,{'attr':{'class':'form-control'}}) }}
                                </div>
                                <p class=\"h6 devcoy\"></p>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DATE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formeDecompte.date,{'attr':{'class':'form-control datepicker' }}) }}
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
                    {{ form_end(formeDecompte) }}
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
                        <div class=\"col-sm-12\">
                            <h5 class=\"col-black bolo600\">CORPS DU DEVIS(en pixel)</h5>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formes.dsize,{'attr':{'class':'form-control col-pink'}}) }}
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
                        <div id=\"shacontentDecompte\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    localStorage.setItem('reloadd', 'decompte/' + document.getElementById('iddecompte').value + '/' + document.getElementById('idchantier').value);
</script>

{{ encore_entry_script_tags('apdecomptes') }}
</body>
</html>
", "content/decompte.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\decompte.html.twig");
    }
}
