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

/* content/facture.html.twig */
class __TwigTemplate_58c7f09cc3357a093860afe8b24e8449 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/facture.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/facture.html.twig"));

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
          content=\"carlinbleu, carlin bleu, carlin, gestion , projet, chantier, comptabilité, gestion technique, suivi , gestion de matériel, gestion de chantiersgestionnaire de projets, articles , showroom , matériels\">
    <meta name=\"author\" content=\"carlinGroup\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"https://www.carlinbleu.com/img/Icon-96.png\">

    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css\"/>

    ";
        // line 22
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("apfactures");
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
    p {
        margin-left: 0 !important;
    }

    .bood {
        position: relative;
        width: 100%;
        height: ";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((30 - CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 264, $this->source); })()), "headerHeight", [], "any", false, false, false, 264)) - CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 264, $this->source); })()), "footerHeight", [], "any", false, false, false, 264)), "html", null, true);
        yield "cm;
        padding-left: 1cm;
        padding-right: 1cm;
        overflow-y: scroll;
    }

    .footer {
        height: ";
        // line 271
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 271, $this->source); })()), "footerHeight", [], "any", false, false, false, 271), "html", null, true);
        yield "cm;
        bottom: 0;
    }

    .header {
        height: ";
        // line 276
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 276, $this->source); })()), "headerHeight", [], "any", false, false, false, 276), "html", null, true);
        yield "cm;
        -webkit-print-color-adjust: exact;
        top: 0;
    }

    @media print {
        .footer-space {
            height: ";
        // line 283
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 283, $this->source); })()), "footerHeight", [], "any", false, false, false, 283), "html", null, true);
        yield "cm;
        }

        .header-space {
            height: ";
        // line 287
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 287, $this->source); })()), "headerHeight", [], "any", false, false, false, 287), "html", null, true);
        yield "cm;
            margin-top: ";
        // line 288
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 288, $this->source); })()), "teteDH", [], "any", false, false, false, 288), "html", null, true);
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
        // line 311
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 311, $this->source); })()), "dsize", [], "any", false, false, false, 311), "html", null, true);
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
        // line 325
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 325, $this->source); })()), "dsize", [], "any", false, false, false, 325), "html", null, true);
        yield "px;
        font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
    }

    .togo {
        background-color: #EAEDED !important;
        font-size: ";
        // line 331
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 331, $this->source); })()), "dsize", [], "any", false, false, false, 331), "html", null, true);
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
        // line 405
        if ((($tmp =  !array_key_exists("libre", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 406
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 406, $this->source); })()), "user", [], "any", false, false, false, 406)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 407
                yield "                        <li class=\"col-yellow h4 bolo600 m-l-20\">
                            ";
                // line 408
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 408, $this->source); })()), "user", [], "any", false, false, false, 408), "nom", [], "any", false, false, false, 408)), "html", null, true);
                yield "
                            ";
                // line 409
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 409, $this->source); })()), "user", [], "any", false, false, false, 409), "prenoms", [], "any", false, false, false, 409)), "html", null, true);
                yield "
                        </li>
                    ";
            }
            // line 412
            yield "                ";
        }
        // line 413
        yield "
                ";
        // line 414
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 414, $this->source); })()), "user", [], "any", false, false, false, 414)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 415
            yield "                    ";
            if (( !array_key_exists("libre", $context) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 415, $this->source); })()), "user", [], "any", false, false, false, 415))) {
                // line 416
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
                // line 437
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["history"]);
                foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                    // line 438
                    yield "                                        <li>
                                            <a href=\"javascript:void(0);\">
                                                <div class=\"menu-info\">
                                                    <h5 class=\"col-indigo font-weight-bold\">";
                    // line 441
                    yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["history"], "action", [], "any", false, false, false, 441));
                    yield "</h5>
                                                    <h5 class=\"col-pink font-weight-bold\">
                                                        Par: ";
                    // line 443
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["history"], "dobyuser", [], "any", false, false, false, 443), "nom", [], "any", false, false, false, 443)), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["history"], "dobyuser", [], "any", false, false, false, 443), "prenoms", [], "any", false, false, false, 443)), "html", null, true);
                    yield "</h5>
                                                    <p class=\"col-black\">
                                                        <i class=\"material-icons\">access_time</i> <span
                                                                style=\"font-size: 14px\">";
                    // line 446
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["history"], "date", [], "any", false, false, false, 446), "d.m.Y H.m"), "html", null, true);
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
                // line 452
                yield "                                </ul>
                            </li>
                            <li class=\"footer bg-blue col-white\">
                                <a href=\"";
                // line 455
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historique");
                yield "\" class=\"bolo text-white\" style=\"font-size: 16px\">
                                    Voir toutes les actions
                                </a>
                            </li>
                        </ul>
                    ";
            }
            // line 461
            yield "
                    <li class=\"hidere\">
                        <a data-toggle=\"modal\" data-target=\"#ModalSearch\">
                            <i class=\"material-icons\">search</i>
                        </a>
                    </li>
                ";
        }
        // line 468
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
        // line 481
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logoy.png"), "html", null, true);
        yield "\" style=\"float: left; width: 200px !important;margin-top: 10px\"/>
        </div>
        <div class=\"menu\">
            <ul class=\"list\">
                <li class=\"active\">
                    ";
        // line 486
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 486, $this->source); })()) == "page"))) {
            // line 487
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("welcome");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">home</i>
                            <span class=\"col-yellow\">ACCUEIL</span>
                        </a>
                    ";
        } else {
            // line 492
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("welcome");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">home</i>
                            <span class=\"text-white\">Accueil</span>
                        </a>
                    ";
        }
        // line 497
        yield "                </li>
                ";
        // line 498
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 498, $this->source); })()), "user", [], "any", false, false, false, 498)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 499
            yield "                    <li class=\"active\">
                        ";
            // line 500
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 500, $this->source); })()) == "message"))) {
                // line 501
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">email</i>
                                <span class=\"col-yellow\">MESSAGERIE</span>
                            </a>
                        ";
            } else {
                // line 506
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">email</i>
                                <span class=\"text-white\">Messagerie</span>
                            </a>
                        ";
            }
            // line 511
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 513
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 513, $this->source); })()) == "article"))) {
                // line 514
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">content_copy</i>
                                <span class=\"col-yellow\">GESTION DES ARTICLES</span>
                            </a>
                        ";
            } else {
                // line 519
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">content_copy</i>
                                <span class=\"text-white\">Gestion des articles</span>
                            </a>
                        ";
            }
            // line 524
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 526
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 526, $this->source); })()) == "listeclient"))) {
                // line 527
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeclient");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">content_copy</i>
                                <span class=\"col-yellow\">LISTE DES CLIENTS</span>
                            </a>
                        ";
            } else {
                // line 532
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeclient");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">content_copy</i>
                                <span class=\"text-white\">Liste des clients</span>
                            </a>
                        ";
            }
            // line 537
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 539
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 539, $this->source); })()) == "chanetude"))) {
                // line 540
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chanetude");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">content_copy</i>
                                <span class=\"col-yellow\">CHANTIERS EN ÉTUDE</span>
                            </a>
                        ";
            } else {
                // line 545
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chanetude");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">content_copy</i>
                                <span class=\"text-white\">Chantiers en étude</span>
                            </a>
                        ";
            }
            // line 550
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 552
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 552, $this->source); })()) == "chancours"))) {
                // line 553
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chancours");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">widgets</i>
                                <span class=\"col-yellow\">CHANTIERS EN COURS</span>
                            </a>
                        ";
            } else {
                // line 558
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chancours");
                yield "\">
                                <i class=\"material-icons text-white\">widgets</i>
                                <span class=\"text-white\">Chantiers en cours</span>
                            </a>
                        ";
            }
            // line 563
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 565
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 565, $this->source); })()) == "chanechouer"))) {
                // line 566
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chanechouer");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">widgets</i>
                                <span class=\"col-yellow\">CHANTIERS ÉCHOUÉS</span>
                            </a>
                        ";
            } else {
                // line 571
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chanechouer");
                yield "\">
                                <i class=\"material-icons text-white\">widgets</i>
                                <span class=\"text-white\">Chantiers échoués</span>
                            </a>
                        ";
            }
            // line 576
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 578
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 578, $this->source); })()) == "chanclotures"))) {
                // line 579
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chanclotures");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">widgets</i>
                                <span class=\"col-yellow\">CHANTIERS CLÔTURÉS</span>
                            </a>
                        ";
            } else {
                // line 584
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chanclotures");
                yield "\">
                                <i class=\"material-icons text-white\">widgets</i>
                                <span class=\"text-white\">Chantiers clôturés</span>
                            </a>
                        ";
            }
            // line 589
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 591
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 591, $this->source); })()) == "chantermines"))) {
                // line 592
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantermines");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">widgets</i>
                                <span class=\"col-yellow\">CHANTIERS TERMINÉS</span>
                            </a>
                        ";
            } else {
                // line 597
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantermines");
                yield "\">
                                <i class=\"material-icons text-white\">widgets</i>
                                <span class=\"text-white\">Chantiers terminés</span>
                            </a>
                        ";
            }
            // line 602
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 604
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 604, $this->source); })()) == "technique"))) {
                // line 605
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technique");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">open_with</i>
                                <span class=\"col-yellow\">GESTION TECHNIQUE</span>
                            </a>
                        ";
            } else {
                // line 610
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technique");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">open_with</i>
                                <span class=\"text-white\">Gestion technique</span>
                            </a>
                        ";
            }
            // line 615
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 617
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 617, $this->source); })()) == "materiel"))) {
                // line 618
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("materiel");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">bubble_chart</i>
                                <span class=\"col-yellow\">GESTION DU MATÉRIEL</span>
                            </a>
                        ";
            } else {
                // line 623
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("materiel");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">bubble_chart</i>
                                <span class=\"text-white\">Gestion du matériel</span>
                            </a>
                        ";
            }
            // line 628
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 630
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 630, $this->source); })()) == "personnel"))) {
                // line 631
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnel");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">people_outline</i>
                                <span class=\"col-yellow\">GESTION DU PERSONNEL</span>
                            </a>
                        ";
            } else {
                // line 636
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnel");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">people_outline</i>
                                <span class=\"text-white\">Gestion du personnel</span>
                            </a>
                        ";
            }
            // line 641
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 643
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 643, $this->source); })()) == "paie"))) {
                // line 644
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paie");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">toll</i>
                                <span class=\"col-yellow\">POINTS DE PAIE</span>
                            </a>
                        ";
            } else {
                // line 649
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paie");
                yield "\">
                                <i class=\"material-icons text-white\">toll</i>
                                <span class=\"text-white\">Points de paie</span>
                            </a>
                        ";
            }
            // line 654
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 656
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 656, $this->source); })()) == "parametre"))) {
                // line 657
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parametre");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">center_focus_weak</i>
                                <span class=\"col-yellow\">PARAMÈTRES</span>
                            </a>
                        ";
            } else {
                // line 662
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parametre");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">center_focus_weak</i>
                                <span class=\"text-white\">Paramètres</span>
                            </a>
                        ";
            }
            // line 667
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 669
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 669, $this->source); })()) == "historique"))) {
                // line 670
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historique");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">history</i>
                                <span class=\"col-yellow\">HISTORIQUE</span>
                            </a>
                        ";
            } else {
                // line 675
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historique");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">history</i>
                                <span class=\"text-white\">Historique</span>
                            </a>
                        ";
            }
            // line 680
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 682
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 682, $this->source); })()) == "corbeille"))) {
                // line 683
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("corbeille");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">delete</i>
                                <span class=\"col-yellow\">CORBEILLE</span>
                            </a>
                        ";
            } else {
                // line 688
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("corbeille");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">delete</i>
                                <span class=\"text-white\">Corbeille</span>
                            </a>
                        ";
            }
            // line 693
            yield "                    </li>
                ";
        }
        // line 695
        yield "            </ul>
        </div>


    </aside>
    <aside id=\"rightsidebars\" class=\"right-sidebars m-t--25 p-t-10\" style=\"overflow: scroll\">
        <div class=\"tab-content\">
            <div role=\"tabpanel\" class=\"tab-pane fade in active in active\" id=\"chantier\">
                <div class=\"table-responsive\" style=\"padding: 10px !important;\">
                    ";
        // line 704
        if ((($tmp =  !array_key_exists("libre", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 705
            yield "                        ";
            $context["q"] = 0;
            // line 706
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 706, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 707
                yield "                            ";
                $context["p"] = 0;
                // line 708
                yield "                            ";
                if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 708)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 708), "count", [], "any", false, false, false, 708) > 0))) {
                    // line 709
                    yield "                                ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 709))) {
                        // line 710
                        yield "                                    <table class=\"table-bordered shadow\" style=\" overflow: scroll; width: 100%\">
                                        ";
                        // line 711
                        if (((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 711, $this->source); })()) == 0)) {
                            // line 712
                            yield "                                            <tr>
                                                <td colspan=\"2\" class=\"bg-purple text-white\"
                                                    style=\"padding-left: 5px;\">CHANTIERS EN ÉTUDE
                                                </td>
                                            </tr>
                                        ";
                        }
                        // line 718
                        yield "                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 718));
                        foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                            // line 719
                            yield "                                            ";
                            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 719))) {
                                // line 720
                                yield "                                                ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 720) == "etude")) {
                                    // line 721
                                    yield "                                                    ";
                                    if (((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 721, $this->source); })()) == 0)) {
                                        // line 722
                                        yield "                                                        <tr>
                                                            <td colspan=\"2\" class=\"bg-blue text-white\"
                                                                style=\"padding-left: 5px;\">
                                                                <a href=\"";
                                        // line 725
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 725)]), "html", null, true);
                                        yield "\"
                                                                   class=\"text-white\" title=\"";
                                        // line 726
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 726), "html", null, true);
                                        yield "\">
                                                                    -
                                                                    ";
                                        // line 728
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 728), "html", null, true);
                                        yield "
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    ";
                                    }
                                    // line 733
                                    yield "                                                    <tr>
                                                        <td style=\"padding-left: 5px\" colspan=\"2\" class=\"bg-light\">
                                                            <a href=\"";
                                    // line 735
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source,                                     // line 738
$context["chantier"], "id", [], "any", false, false, false, 738)]), "html", null, true);
                                    // line 740
                                    yield "\" class=\"text-pri\" title=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 740), "html", null, true);
                                    yield "\">
                                                                # ";
                                    // line 741
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 741), 0, 55)), "html", null, true);
                                    yield "
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    ";
                                    // line 745
                                    $context["p"] = ((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 745, $this->source); })()) + 1);
                                    // line 746
                                    yield "                                                ";
                                }
                                // line 747
                                yield "                                            ";
                            }
                            // line 748
                            yield "                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 749
                        yield "                                    </table>
                                    ";
                        // line 750
                        $context["q"] = ((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 750, $this->source); })()) + 1);
                        // line 751
                        yield "                                ";
                    }
                    // line 752
                    yield "                            ";
                }
                // line 753
                yield "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 755
            yield "                    ";
        }
        // line 756
        yield "                </div>
            </div>
        </div>
    </aside>
    <aside id=\"rightsidebar\" class=\"right-sidebar m-t--25 p-t-10\" style=\"overflow: scroll\">
        <div class=\"tab-content\">
            <div role=\"tabpanel\" class=\"tab-pane fade in active in active\" id=\"chantier\">
                <div class=\"table-responsive\" style=\"padding: 10px !important;\">
                    ";
        // line 764
        if ((($tmp =  !array_key_exists("libre", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 765
            yield "                        ";
            $context["q"] = 0;
            // line 766
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 766, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 767
                yield "                            ";
                $context["p"] = 0;
                // line 768
                yield "                            ";
                if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 768)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 768), "count", [], "any", false, false, false, 768) > 0))) {
                    // line 769
                    yield "                                ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 769))) {
                        // line 770
                        yield "                                    <table class=\"table-bordered shadow\" style=\" overflow: scroll; width: 100%\">
                                        ";
                        // line 771
                        if (((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 771, $this->source); })()) == 0)) {
                            // line 772
                            yield "                                            <tr>
                                                <td colspan=\"2\" class=\"bg-pink text-white\"
                                                    style=\"padding-left: 5px;\">CHANTIERS EN COURS
                                                </td>
                                            </tr>
                                        ";
                        }
                        // line 778
                        yield "                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 778));
                        foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                            // line 779
                            yield "                                            ";
                            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 779))) {
                                // line 780
                                yield "                                                ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 780) == "encours")) {
                                    // line 781
                                    yield "                                                    ";
                                    if (((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 781, $this->source); })()) == 0)) {
                                        // line 782
                                        yield "                                                        <tr>
                                                            <td colspan=\"2\" class=\"bg-blue text-white\"
                                                                style=\"padding-left: 5px;\">
                                                                <a href=\"";
                                        // line 785
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 785)]), "html", null, true);
                                        yield "\"
                                                                   class=\"text-white\" title=\"";
                                        // line 786
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 786), "html", null, true);
                                        yield "\">
                                                                    -
                                                                    ";
                                        // line 788
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 788), "html", null, true);
                                        yield "
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    ";
                                    }
                                    // line 793
                                    yield "                                                    <tr>
                                                        <td style=\"padding-left: 5px\" colspan=\"2\" class=\"bg-light\">
                                                            <a href=\"";
                                    // line 795
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source,                                     // line 798
$context["chantier"], "id", [], "any", false, false, false, 798)]), "html", null, true);
                                    // line 800
                                    yield "\" class=\"text-pri\" title=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 800), "html", null, true);
                                    yield "\">
                                                                # ";
                                    // line 801
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 801), 0, 55)), "html", null, true);
                                    yield "
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    ";
                                    // line 805
                                    $context["p"] = ((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 805, $this->source); })()) + 1);
                                    // line 806
                                    yield "                                                ";
                                }
                                // line 807
                                yield "                                            ";
                            }
                            // line 808
                            yield "                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 809
                        yield "                                    </table>
                                    ";
                        // line 810
                        $context["q"] = ((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 810, $this->source); })()) + 1);
                        // line 811
                        yield "                                ";
                    }
                    // line 812
                    yield "                            ";
                }
                // line 813
                yield "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 815
            yield "                    ";
        }
        // line 816
        yield "                </div>
            </div>
        </div>
    </aside>
</section>

";
        // line 822
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 822, $this->source); })()), "type", [], "any", false, false, false, 822) == "decompte")) {
            // line 823
            yield "    <input type=\"text\" class=\"hide\" id=\"mocode\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 823, $this->source); })()), "decompte", [], "any", false, false, false, 823), "devis", [], "any", false, false, false, 823), "monnaie", [], "any", false, false, false, 823), "code", [], "any", false, false, false, 823), "html", null, true);
            yield "\">
";
        }
        // line 825
        yield "
<input type=\"text\" class=\"hide\" id=\"idchantier\" value=\"";
        // line 826
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 826, $this->source); })()), "id", [], "any", false, false, false, 826), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"idfacture\" value=\"";
        // line 827
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 827, $this->source); })()), "id", [], "any", false, false, false, 827), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"idgroupe\" value=\"";
        // line 828
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["idgroupe"]) || array_key_exists("idgroupe", $context) ? $context["idgroupe"] : (function () { throw new RuntimeError('Variable "idgroupe" does not exist.', 828, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"idligne\" value=\"";
        // line 829
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["idgligne"]) || array_key_exists("idgligne", $context) ? $context["idgligne"] : (function () { throw new RuntimeError('Variable "idgligne" does not exist.', 829, $this->source); })()), "html", null, true);
        yield "\">

<input type=\"text\" class=\"hide\" id=\"jsonfacture\" value=\"";
        // line 831
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["jsonfacture"]) || array_key_exists("jsonfacture", $context) ? $context["jsonfacture"] : (function () { throw new RuntimeError('Variable "jsonfacture" does not exist.', 831, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"jsonforme\" value=\"";
        // line 832
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["jsonforme"]) || array_key_exists("jsonforme", $context) ? $context["jsonforme"] : (function () { throw new RuntimeError('Variable "jsonforme" does not exist.', 832, $this->source); })()), "html", null, true);
        yield "\">

<input type=\"text\" class=\"hide\" id=\"jsondecomptes\" value=\"";
        // line 834
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["jsondecomptes"]) || array_key_exists("jsondecomptes", $context) ? $context["jsondecomptes"] : (function () { throw new RuntimeError('Variable "jsondecomptes" does not exist.', 834, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"totalacomptes\" value=\"";
        // line 835
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalacomptes"]) || array_key_exists("totalacomptes", $context) ? $context["totalacomptes"] : (function () { throw new RuntimeError('Variable "totalacomptes" does not exist.', 835, $this->source); })()), "html", null, true);
        yield "\">


<input type=\"text\" class=\"hide\" id=\"facdate\" value=\"";
        // line 838
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 838, $this->source); })()), "date", [], "any", false, false, false, 838), "d/m/Y"), "html", null, true);
        yield "\">


<div class=\"modal fade right\" id=\"modalList\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-green text-white\">
                <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">MODIFIER LES LIGNES</h4>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    <style>
                        .hider {
                            float: right;
                            margin-top: -17px;
                            visibility: hidden;
                        }

                        p {
                            margin: 2px;
                            font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
                        }

                        #borde td, th {
                            border: solid #D3D3D3;
                            border-width: 1px 1px 1px 1px;
                            padding: 5px;
                        }


                        td.bord {
                            border: 0 solid #FFFFFF !important;
                            padding: 5px;
                            text-align: right;
                            font-weight: 600;
                        }

                        td.bordz {
                            border: 0 solid #FFFFFF !important;
                            padding: 0 0 0 5px !important;
                        }

                        h3 {
                            font-weight: 500;
                            font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
                        }
                    </style>

                    <div class=\"table-responsive\">
                        <table id=\"borde\" style=\"width:100%;\">
                            ";
        // line 890
        yield "                            <tr style=\"background-color:#4e73df; color: #FFFFFF !important; \">
                                <th style=\"text-align: left !important;\">
                                    DÉSIGNATION
                                </th>
                                ";
        // line 894
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 894, $this->source); })()), "etat", [], "any", false, false, false, 894) == "save")) {
            // line 895
            yield "                                    <th id=\"dis\" style=\"width:50px !important;\"></th>
                                ";
        }
        // line 897
        yield "                            </tr>
                            ";
        // line 898
        if ((($tmp = (isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 898, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 899
            yield "                                ";
            // line 900
            yield "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["listGroup"]) || array_key_exists("listGroup", $context) ? $context["listGroup"] : (function () { throw new RuntimeError('Variable "listGroup" does not exist.', 900, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 901
                yield "                                    <tr class=\"bg-gray-200 bolderrer\">
                                        <td>";
                // line 902
                yield CoreExtension::getAttribute($this->env, $this->source, $context["group"], "groupe", [], "any", false, false, false, 902);
                yield "</td>
                                        <td class=\"text-center\" style=\"padding: 2px\">
                                            <a href=\"";
                // line 904
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facturegroupe", ["idgroupe" => CoreExtension::getAttribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 904), "id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 904, $this->source); })()), "id", [], "any", false, false, false, 904), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 904, $this->source); })()), "chantier", [], "any", false, false, false, 904), "id", [], "any", false, false, false, 904)]), "html", null, true);
                yield "#groupe\">
                                                <i class=\"fa fa-edit col-green\" aria-hidden=\"true\"
                                                   title=\"Modifier\"></i>
                                            </a>
                                            <a href=\"";
                // line 908
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supgroupe", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 908, $this->source); })()), "id", [], "any", false, false, false, 908), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 908, $this->source); })()), "chantier", [], "any", false, false, false, 908), "id", [], "any", false, false, false, 908), "idgroupe" => CoreExtension::getAttribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 908), "type" => "facture"]), "html", null, true);
                yield "\"
                                               class=\"sholigne\">
                                                <i class=\"fa fa-trash col-pink\" aria-hidden=\"true\"
                                                   title=\"Supprimer\"></i>
                                            </a>
                                        </td>
                                    </tr>


                                    ";
                // line 917
                $context["st"] = 0;
                // line 918
                yield "
                                    ";
                // line 919
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "lignes", [], "any", false, false, false, 919));
                foreach ($context['_seq'] as $context["_key"] => $context["lign"]) {
                    // line 920
                    yield "                                        <tr>
                                            <td>
                                                <span class=\"pri font-bold\">";
                    // line 922
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "designation", [], "any", false, false, false, 922);
                    yield "</span><br>
                                                <table style=\"width: 100%; margin-top: 10px\">
                                                    <tr>
                                                        <td class=\"text-right bordz\">Unité:</td>
                                                        <td class=\"text-left bordz font-bold text-black\"> ";
                    // line 926
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "unite", [], "any", false, false, false, 926), "html", null, true);
                    yield "</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"text-right bordz\">Quantité:</td>
                                                        <td class=\"text-left bordz font-bold text-black\"> ";
                    // line 930
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 930), 2, ",", " "), "html", null, true);
                    yield "</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"text-right bordz\">Prix unitaire:</td>
                                                        <td class=\"text-left bordz font-bold text-black\"> ";
                    // line 934
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 934), 2, ",", " "), "html", null, true);
                    yield "</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"text-right bordz\">Montant HT:</td>
                                                        <td class=\"text-left bordz font-bold text-black\">
                                                            ";
                    // line 939
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 939) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 939)), 2, ",", " "), "html", null, true);
                    yield "
                                                        </td>
                                                    </tr>
                                                </table>

                                            </td>
                                            ";
                    // line 945
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 945, $this->source); })()), "etat", [], "any", false, false, false, 945) == "save")) {
                        // line 946
                        yield "                                                <td class=\"text-center\" style=\"padding: 2px\">
                                                    <a href=\"";
                        // line 947
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editlignefacture", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 947, $this->source); })()), "id", [], "any", false, false, false, 947), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 947, $this->source); })()), "chantier", [], "any", false, false, false, 947), "id", [], "any", false, false, false, 947), "idligne" => CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "id", [], "any", false, false, false, 947)]), "html", null, true);
                        yield "\">
                                                        <i class=\"fa fa-edit col-green\"
                                                           aria-hidden=\"true\"
                                                           title=\"Modifier\"></i>
                                                    </a>
                                                    <a href=\"";
                        // line 952
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supligne", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 952, $this->source); })()), "id", [], "any", false, false, false, 952), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 952, $this->source); })()), "chantier", [], "any", false, false, false, 952), "id", [], "any", false, false, false, 952), "idligne" => CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "id", [], "any", false, false, false, 952), "type" => "facture"]), "html", null, true);
                        yield "\"
                                                       class=\"sholigne\">
                                                        <i class=\"fa fa-trash col-pink\" aria-hidden=\"true\"
                                                           title=\"Supprimer\"></i>
                                                    </a></td>
                                            ";
                    }
                    // line 958
                    yield "                                        </tr>
                                        ";
                    // line 959
                    $context["st"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 959) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 959)) + (isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 959, $this->source); })()));
                    // line 960
                    yield "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['lign'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 961
                yield "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 962
            yield "                                ";
            // line 963
            yield "
                                ";
            // line 965
            yield "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["lignes"]) || array_key_exists("lignes", $context) ? $context["lignes"] : (function () { throw new RuntimeError('Variable "lignes" does not exist.', 965, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["lign"]) {
                // line 966
                yield "                                    ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "groupe", [], "any", false, false, false, 966))) {
                    // line 967
                    yield "                                        <tr>
                                            <td>
                                                <span class=\"pri font-bold\">";
                    // line 969
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "designation", [], "any", false, false, false, 969);
                    yield "</span><br>
                                                <table style=\"width: 100%; margin-top: 10px\">
                                                    <tr>
                                                        <td class=\"text-right bordz\">Unité:</td>
                                                        <td class=\"text-left bordz font-bold text-black\"> ";
                    // line 973
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "unite", [], "any", false, false, false, 973), "html", null, true);
                    yield "</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"text-right bordz\">Quantité:</td>
                                                        <td class=\"text-left bordz font-bold text-black\"> ";
                    // line 977
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 977), 2, ",", " "), "html", null, true);
                    yield "</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"text-right bordz\">Prix unitaire:</td>
                                                        <td class=\"text-left bordz font-bold text-black\"> ";
                    // line 981
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 981), 2, ",", " "), "html", null, true);
                    yield "</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"text-right bordz\">Montant HT:</td>
                                                        <td class=\"text-left bordz font-bold text-black\">
                                                            ";
                    // line 986
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 986) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 986)), 2, ",", " "), "html", null, true);
                    yield "
                                                        </td>
                                                    </tr>
                                                </table>

                                            </td>
                                            ";
                    // line 992
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 992, $this->source); })()), "etat", [], "any", false, false, false, 992) == "save")) {
                        // line 993
                        yield "                                                <td class=\"text-center\" style=\"padding: 2px\">
                                                    <a href=\"";
                        // line 994
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editlignefacture", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 994, $this->source); })()), "id", [], "any", false, false, false, 994), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 994, $this->source); })()), "chantier", [], "any", false, false, false, 994), "id", [], "any", false, false, false, 994), "idligne" => CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "id", [], "any", false, false, false, 994)]), "html", null, true);
                        yield "\">
                                                        <i class=\"fa fa-edit col-green\"
                                                           aria-hidden=\"true\"
                                                           title=\"Modifier\"></i>
                                                    </a>
                                                    <a href=\"";
                        // line 999
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supligne", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 999, $this->source); })()), "id", [], "any", false, false, false, 999), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 999, $this->source); })()), "chantier", [], "any", false, false, false, 999), "id", [], "any", false, false, false, 999), "idligne" => CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "id", [], "any", false, false, false, 999), "type" => "facture"]), "html", null, true);
                        yield "\"
                                                       class=\"sholigne\">
                                                        <i class=\"fa fa-trash col-pink\" aria-hidden=\"true\"
                                                           title=\"Supprimer\"></i>
                                                    </a></td>
                                            ";
                    }
                    // line 1005
                    yield "                                        </tr>
                                    ";
                }
                // line 1007
                yield "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['lign'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1008
            yield "

                            ";
        }
        // line 1011
        yield "                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalInfo\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-green text-white\">
                <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">MODIFIER LA FACTURE</h4>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    ";
        // line 1027
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 1027, $this->source); })()), 'form_start', ["attr" => ["id" => "updFactureForm"]]);
        yield "
                    ";
        // line 1028
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 1028, $this->source); })()), "_token", [], "any", false, false, false, 1028), 'row');
        yield "
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label  pri bolo\">DATE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1034
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 1034, $this->source); })()), "date", [], "any", false, false, false, 1034), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            ";
        // line 1041
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 1041, $this->source); })()), "type", [], "any", false, false, false, 1041) == "retenue")) {
            // line 1042
            yield "                                <label class=\"form-label  pri bolo\">TAUX BNPC</label>
                            ";
        }
        // line 1044
        yield "                            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 1044, $this->source); })()), "type", [], "any", false, false, false, 1044) == "acompte")) {
            // line 1045
            yield "                                <label class=\"form-label  pri bolo\">TVA</label>
                            ";
        }
        // line 1047
        yield "                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1049
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 1049, $this->source); })()), "tva", [], "any", false, false, false, 1049), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            ";
        // line 1054
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 1054, $this->source); })()), "type", [], "any", false, false, false, 1054) == "retenue")) {
            // line 1055
            yield "                                <label class=\"form-label  pri bolo\">RETENUE PROVISOIRE</label>
                            ";
        }
        // line 1057
        yield "                            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 1057, $this->source); })()), "type", [], "any", false, false, false, 1057) == "acompte")) {
            // line 1058
            yield "                                <label class=\"form-label  pri bolo\">REMISE</label>
                            ";
        }
        // line 1060
        yield "                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1062
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 1062, $this->source); })()), "remise", [], "any", false, false, false, 1062), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label  col-blue bolo\">RÉFÉRENCE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1072
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 1072, $this->source); })()), "factreference", [], "any", false, false, false, 1072), 'widget', ["id" => "editor2", "attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label  col-blue bolo\">INFORMATIONS SUR LA FACTURE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1082
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 1082, $this->source); })()), "information", [], "any", false, false, false, 1082), 'widget', ["id" => "editor3", "attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"updeFacture\" value=\"MODIFIER\"
                               class=\"btn btn-link waves-effect text-white bg-green\">
                        <div type=\"button\" id=\"closuFacture\" class=\"btn btn-link waves-effect text-white bg-pink\"
                             data-dismiss=\"modal\">
                            FERMER
                        </div>
                        <img src=\"";
        // line 1095
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loaduFacture\">
                    </div>
                    <br><br><br>
                    ";
        // line 1099
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 1099, $this->source); })()), 'form_end');
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
        // line 1114
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formFac"]) || array_key_exists("formFac", $context) ? $context["formFac"] : (function () { throw new RuntimeError('Variable "formFac" does not exist.', 1114, $this->source); })()), 'form_start', ["attr" => ["id" => "addFactureForm"]]);
        yield "
                    ";
        // line 1115
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFac"]) || array_key_exists("formFac", $context) ? $context["formFac"] : (function () { throw new RuntimeError('Variable "formFac" does not exist.', 1115, $this->source); })()), "_token", [], "any", false, false, false, 1115), 'row');
        yield "
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label  col-blue bolo\">DATE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1121
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFac"]) || array_key_exists("formFac", $context) ? $context["formFac"] : (function () { throw new RuntimeError('Variable "formFac" does not exist.', 1121, $this->source); })()), "date", [], "any", false, false, false, 1121), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label  col-blue bolo\">TYPE D'OPÉRATION<span
                                        class=\"col-red\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1130
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFac"]) || array_key_exists("formFac", $context) ? $context["formFac"] : (function () { throw new RuntimeError('Variable "formFac" does not exist.', 1130, $this->source); })()), "type", [], "any", false, false, false, 1130), 'widget', ["id" => "facselectez", "attr" => ["class" => "form-control", "id" => "facselect"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label  col-blue bolo\">DEVIS VALIDÉS</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1140
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFac"]) || array_key_exists("formFac", $context) ? $context["formFac"] : (function () { throw new RuntimeError('Variable "formFac" does not exist.', 1140, $this->source); })()), "devis", [], "any", false, false, false, 1140), 'widget', ["required" => "", "attr" => ["class" => "form-control devo"]]);
        yield "
                                </div>
                                <p class=\"col-pink h6 dvo\"></p>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label  col-blue bolo\">DÉCOMPTES VALIDÉS</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1149
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFac"]) || array_key_exists("formFac", $context) ? $context["formFac"] : (function () { throw new RuntimeError('Variable "formFac" does not exist.', 1149, $this->source); })()), "decompte", [], "any", false, false, false, 1149), 'widget', ["required" => "", "attr" => ["class" => "form-control deco"]]);
        yield "
                                </div>
                                <p class=\"col-pink h6 dco\"></p>
                            </div>
                        </div>
                    </div>

                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label  col-blue bolo\">RÉFÉRENCE OU OBJET</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1161
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFac"]) || array_key_exists("formFac", $context) ? $context["formFac"] : (function () { throw new RuntimeError('Variable "formFac" does not exist.', 1161, $this->source); })()), "factreference", [], "any", false, false, false, 1161), 'widget', ["id" => "editor3", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label  col-blue bolo\">INFORMATIONS SUR LA FACTURE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1171
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFac"]) || array_key_exists("formFac", $context) ? $context["formFac"] : (function () { throw new RuntimeError('Variable "formFac" does not exist.', 1171, $this->source); })()), "information", [], "any", false, false, false, 1171), 'widget', ["id" => "editor4", "attr" => ["class" => "form-control"]]);
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
        // line 1184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadFacture\">
                    </div>
                    <br><br><br>
                    ";
        // line 1188
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formFac"]) || array_key_exists("formFac", $context) ? $context["formFac"] : (function () { throw new RuntimeError('Variable "formFac" does not exist.', 1188, $this->source); })()), 'form_end');
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
                    <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">MISE EN FORME</h4>
                </div>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    ";
        // line 1205
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1205, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data", "attr" => ["id" => "addforme"]]);
        yield "
                    ";
        // line 1206
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1206, $this->source); })()), "_token", [], "any", false, false, false, 1206), 'row');
        yield "
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <h5 class=\"col-black bolo600\">LIBELLÉ</h5>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1212
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1212, $this->source); })()), "intituler", [], "any", false, false, false, 1212), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
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
        // line 1222
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1222, $this->source); })()), "typeEntete", [], "any", false, false, false, 1222), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <h5 class=\"col-black bolo600\">TYPE DE PIED DE PAGE</h5>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1230
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1230, $this->source); })()), "typeFooter", [], "any", false, false, false, 1230), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-black bolo600\">ENTÊTE EN IMAGE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1238
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1238, $this->source); })()), "enteteImage", [], "any", false, false, false, 1238), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-black bolo600\">PIED DE PAGE EN IMAGE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1246
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1246, $this->source); })()), "footImage", [], "any", false, false, false, 1246), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
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
        // line 1256
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1256, $this->source); })()), "headerText", [], "any", false, false, false, 1256), 'widget', ["required" => "", "id" => "editor5", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-black bolo600\">PIED DE PAGE EN TEXTE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1264
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1264, $this->source); })()), "pied", [], "any", false, false, false, 1264), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
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
        // line 1274
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1274, $this->source); })()), "dsize", [], "any", false, false, false, 1274), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <h5 class=\"col-black bolo600\">FOND(Hexa)</h5>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1282
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1282, $this->source); })()), "decolor", [], "any", false, false, false, 1282), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <h5 class=\"col-black bolo600\">TEXTE(Hexa)</h5>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1290
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1290, $this->source); })()), "decolortex", [], "any", false, false, false, 1290), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
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
        // line 1300
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1300, $this->source); })()), "headerWith", [], "any", false, false, false, 1300), 'widget', ["required" => "", "attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-black bolo600\">HAUTEUR ENTÊTE(cm)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1308
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1308, $this->source); })()), "headerHeight", [], "any", false, false, false, 1308), 'widget', ["required" => "", "attr" => ["class" => "form-control col-pink"]]);
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
        // line 1319
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1319, $this->source); })()), "teteY", [], "any", false, false, false, 1319), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-black bolo600\">LARGEUR DU LOGO(cm)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1327
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1327, $this->source); })()), "teteH", [], "any", false, false, false, 1327), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
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
        // line 1337
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1337, $this->source); })()), "teteDH", [], "any", false, false, false, 1337), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-black bolo600\">DÉCALAGE BAS(cm)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1345
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1345, $this->source); })()), "teteDB", [], "any", false, false, false, 1345), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
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
        // line 1355
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1355, $this->source); })()), "teteDD", [], "any", false, false, false, 1355), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-black bolo600\">DÉCALAGE À GAUCHE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1363
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1363, $this->source); })()), "teteDG", [], "any", false, false, false, 1363), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
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
        // line 1374
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1374, $this->source); })()), "piedsize", [], "any", false, false, false, 1374), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-black bolo600\">HAUTEUR DU PIED DE PAGE(cm)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1382
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1382, $this->source); })()), "footerHeight", [], "any", false, false, false, 1382), 'widget', ["required" => "", "attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\" style=\"margin-bottom: 50px !important;\">
                        <input type=\"submit\" id=\"updateForme\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect text-white bg-blue\">
                        <img src=\"";
        // line 1390
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadupForme\">
                    </div>
                    ";
        // line 1393
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1393, $this->source); })()), 'form_end');
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
        // line 1403
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["ligne"]) || array_key_exists("ligne", $context) ? $context["ligne"] : (function () { throw new RuntimeError('Variable "ligne" does not exist.', 1403, $this->source); })()), "id", [], "any", false, false, false, 1403))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1404
            yield "                <div class=\"p-5 bg-pink\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">MODIFIER UNE LIGNE</h4>
                    </div>
                </div>
            ";
        } else {
            // line 1410
            yield "                <div class=\"p-5 bg-pri\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">AJOUTER UNE LIGNE</h4>
                    </div>
                </div>
            ";
        }
        // line 1416
        yield "            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    ";
        // line 1418
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formeLigne"]) || array_key_exists("formeLigne", $context) ? $context["formeLigne"] : (function () { throw new RuntimeError('Variable "formeLigne" does not exist.', 1418, $this->source); })()), 'form_start', ["attr" => ["id" => "addLigneDevisForm"]]);
        yield "
                    ";
        // line 1419
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeLigne"]) || array_key_exists("formeLigne", $context) ? $context["formeLigne"] : (function () { throw new RuntimeError('Variable "formeLigne" does not exist.', 1419, $this->source); })()), "_token", [], "any", false, false, false, 1419), 'row');
        yield "
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label col-blue bolo\">DÉSIGNATION<span
                                        class=\"col-pink\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1426
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["ligne"]) || array_key_exists("ligne", $context) ? $context["ligne"] : (function () { throw new RuntimeError('Variable "ligne" does not exist.', 1426, $this->source); })()), "id", [], "any", false, false, false, 1426))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1427
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeLigne"]) || array_key_exists("formeLigne", $context) ? $context["formeLigne"] : (function () { throw new RuntimeError('Variable "formeLigne" does not exist.', 1427, $this->source); })()), "designation", [], "any", false, false, false, 1427), 'widget', ["required" => "", "id" => "editor1", "attr" => ["class" => "form-control col-pink"]]);
            yield "
                                    ";
        } else {
            // line 1429
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeLigne"]) || array_key_exists("formeLigne", $context) ? $context["formeLigne"] : (function () { throw new RuntimeError('Variable "formeLigne" does not exist.', 1429, $this->source); })()), "designation", [], "any", false, false, false, 1429), 'widget', ["required" => "", "id" => "editor1", "attr" => ["class" => "form-control"]]);
            yield "
                                    ";
        }
        // line 1431
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label col-blue bolo\">PRIX UNITAIRE<span
                                        class=\"col-pink\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1441
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["ligne"]) || array_key_exists("ligne", $context) ? $context["ligne"] : (function () { throw new RuntimeError('Variable "ligne" does not exist.', 1441, $this->source); })()), "id", [], "any", false, false, false, 1441))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1442
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeLigne"]) || array_key_exists("formeLigne", $context) ? $context["formeLigne"] : (function () { throw new RuntimeError('Variable "formeLigne" does not exist.', 1442, $this->source); })()), "pu", [], "any", false, false, false, 1442), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
            yield "
                                    ";
        } else {
            // line 1444
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeLigne"]) || array_key_exists("formeLigne", $context) ? $context["formeLigne"] : (function () { throw new RuntimeError('Variable "formeLigne" does not exist.', 1444, $this->source); })()), "pu", [], "any", false, false, false, 1444), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                    ";
        }
        // line 1446
        yield "                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label col-blue bolo\">RETENUE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1453
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1453, $this->source); })()), "aarem", [], "any", false, false, false, 1453) == "oui")) {
            // line 1454
            yield "                                        ";
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["ligne"]) || array_key_exists("ligne", $context) ? $context["ligne"] : (function () { throw new RuntimeError('Variable "ligne" does not exist.', 1454, $this->source); })()), "id", [], "any", false, false, false, 1454))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1455
                yield "                                            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeLigne"]) || array_key_exists("formeLigne", $context) ? $context["formeLigne"] : (function () { throw new RuntimeError('Variable "formeLigne" does not exist.', 1455, $this->source); })()), "remise", [], "any", false, false, false, 1455), 'widget', ["required" => "", "attr" => ["class" => "form-control col-pink", "type" => "number"]]);
                yield "
                                        ";
            } else {
                // line 1457
                yield "                                            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeLigne"]) || array_key_exists("formeLigne", $context) ? $context["formeLigne"] : (function () { throw new RuntimeError('Variable "formeLigne" does not exist.', 1457, $this->source); })()), "remise", [], "any", false, false, false, 1457), 'widget', ["required" => "", "attr" => ["class" => "form-control", "type" => "number"]]);
                yield "
                                        ";
            }
            // line 1459
            yield "                                    ";
        } else {
            // line 1460
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeLigne"]) || array_key_exists("formeLigne", $context) ? $context["formeLigne"] : (function () { throw new RuntimeError('Variable "formeLigne" does not exist.', 1460, $this->source); })()), "remise", [], "any", false, false, false, 1460), 'widget', ["required" => "", "attr" => ["class" => "form-control", "readonly" => "true", "placeholder" => "Désactivé"]]);
            yield "
                                    ";
        }
        // line 1462
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        ";
        // line 1467
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["ligne"]) || array_key_exists("ligne", $context) ? $context["ligne"] : (function () { throw new RuntimeError('Variable "ligne" does not exist.', 1467, $this->source); })()), "id", [], "any", false, false, false, 1467))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1468
            yield "                            <input type=\"submit\" id=\"updateLigneDevis\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect text-white bg-green\">
                            <a href=\"";
            // line 1470
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1470, $this->source); })()), "id", [], "any", false, false, false, 1470), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1470, $this->source); })()), "chantier", [], "any", false, false, false, 1470), "id", [], "any", false, false, false, 1470)]), "html", null, true);
            yield "\"
                               id=\"closeLigne\" class=\"btn btn-link waves-effect text-white bg-pink\">FERMER
                            </a>
                        ";
        } else {
            // line 1474
            yield "                            <input type=\"submit\" id=\"addLigneDevis\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-pri\">
                            <div type=\"button\" id=\"closeLigne\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">FERMER
                            </div>
                        ";
        }
        // line 1480
        yield "
                        <img src=\"";
        // line 1481
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadLigne\">
                    </div>
                    ";
        // line 1484
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formeLigne"]) || array_key_exists("formeLigne", $context) ? $context["formeLigne"] : (function () { throw new RuntimeError('Variable "formeLigne" does not exist.', 1484, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 1491
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 1491, $this->source); })()), "type", [], "any", false, false, false, 1491) == "retenue")) {
            // line 1492
            yield "    <div class=\"modal fade right\" id=\"modalPour\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"p-5 bg-pri\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">FACTURE SUR POURCENTAGE</h4>
                    </div>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        <form id=\"addPourcentageForm\">
                            <input type=\"hidden\" name=\"token\" value=\"";
            // line 1504
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addPour"), "html", null, true);
            yield "\"/>
                            <h5 class=\"bolo600\">DEVIS TOTAL HT: <span
                                        class=\"col-blue\">";
            // line 1506
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1506, $this->source); })()), "totalht", [], "any", false, false, false, 1506), 2, ",", " "), "html", null, true);
            yield "</span></h5>
                            <h5 class=\"bolo600\">DEVIS TOTAL TTC: <span
                                        class=\"col-blue\">";
            // line 1508
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1508, $this->source); })()), "totalttc", [], "any", false, false, false, 1508), 2, ",", " "), "html", null, true);
            yield "</span></h5>
                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12 col-md-12\">
                                    <label class=\"form-label  col-blue bolo\">POURCENTAGE SUR DEVIS TTC(%)</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            <input type=\"number\" name=\"pour\" class=\"form-control\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"text-center\" style=\"margin-bottom: 50px !important;\">
                                <input type=\"submit\" id=\"updateFa\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-blue\">
                                <div type=\"button\" id=\"closeFa\"
                                     class=\"btn btn-link waves-effect text-white bg-pink\"
                                     data-dismiss=\"modal\">
                                    FERMER
                                </div>
                                <img src=\"";
            // line 1527
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
            yield "\" style=\"width: 50px; display:none;\"
                                     class=\"align-justify\" id=\"loadFa\">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalMontant\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"p-5 bg-pri\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">FACTURE SUR MONTANT</h4>
                    </div>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        <form id=\"addMontantForm\">
                            <input type=\"hidden\" name=\"token\" value=\"";
            // line 1548
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addMontant"), "html", null, true);
            yield "\"/>

                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12 col-md-12\">
                                    <label class=\"form-label  col-blue bolo\">MONTANT À RÉGLER</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            <input type=\"number\" name=\"montant\" class=\"form-control\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"text-center\" style=\"margin-bottom: 50px !important;\">
                                <input type=\"submit\" id=\"updateMon\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-green\">
                                <div type=\"button\" id=\"closeMon\"
                                     class=\"btn btn-link waves-effect text-white bg-pink\"
                                     data-dismiss=\"modal\">
                                    FERMER
                                </div>
                                <img src=\"";
            // line 1568
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
            yield "\" style=\"width: 50px; display:none;\"
                                     class=\"align-justify\" id=\"loadMon\">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        }
        // line 1578
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 1578, $this->source); })()), "type", [], "any", false, false, false, 1578) == "acompte")) {
            // line 1579
            yield "    <div class=\"modal fade right\" id=\"modalPour\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"p-5 bg-pri\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">FACTURE SUR POURCENTAGE</h4>
                    </div>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        <form id=\"addPourcentageForm\">
                            <input type=\"hidden\" name=\"token\" value=\"";
            // line 1591
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addPour"), "html", null, true);
            yield "\"/>
                            <h5 class=\"bolo600\">DEVIS TOTAL HT: <span
                                        class=\"col-blue\">";
            // line 1593
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1593, $this->source); })()), "totalht", [], "any", false, false, false, 1593), 2, ",", " "), "html", null, true);
            yield "</span></h5>
                            <h5 class=\"bolo600\">DEVIS TOTAL TTC: <span
                                        class=\"col-blue\">";
            // line 1595
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1595, $this->source); })()), "totalttc", [], "any", false, false, false, 1595), 2, ",", " "), "html", null, true);
            yield "</span></h5>
                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12 col-md-12\">
                                    <label class=\"form-label  col-blue bolo\">POURCENTAGE SUR DEVIS TTC(%)</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            <input type=\"number\" name=\"pour\" class=\"form-control\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"text-center\" style=\"margin-bottom: 50px !important;\">
                                <input type=\"submit\" id=\"updateFa\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-blue\">
                                <div type=\"button\" id=\"closeFa\"
                                     class=\"btn btn-link waves-effect text-white bg-pink\"
                                     data-dismiss=\"modal\">
                                    FERMER
                                </div>
                                <img src=\"";
            // line 1614
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
            yield "\" style=\"width: 50px; display:none;\"
                                     class=\"align-justify\" id=\"loadFa\">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalMontant\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"p-5 bg-pri\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">FACTURE SUR MONTANT</h4>
                    </div>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        <form id=\"addMontantForm\">
                            <input type=\"hidden\" name=\"token\" value=\"";
            // line 1635
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addMontant"), "html", null, true);
            yield "\"/>

                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12 col-md-12\">
                                    <label class=\"form-label  col-blue bolo\">MONTANT À RÉGLER</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            <input type=\"number\" name=\"montant\" class=\"form-control\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"text-center\" style=\"margin-bottom: 50px !important;\">
                                <input type=\"submit\" id=\"updateMon\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-green\">
                                <div type=\"button\" id=\"closeMon\"
                                     class=\"btn btn-link waves-effect text-white bg-pink\"
                                     data-dismiss=\"modal\">
                                    FERMER
                                </div>
                                <img src=\"";
            // line 1655
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
            yield "\" style=\"width: 50px; display:none;\"
                                     class=\"align-justify\" id=\"loadMon\">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        }
        // line 1665
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 1665, $this->source); })()), "type", [], "any", false, false, false, 1665) != "retenue")) {
            // line 1666
            yield "    <div class=\"modal fade right\" id=\"modalGroup\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                ";
            // line 1670
            if ((($tmp = (isset($context["editGrou"]) || array_key_exists("editGrou", $context) ? $context["editGrou"] : (function () { throw new RuntimeError('Variable "editGrou" does not exist.', 1670, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1671
                yield "                    <div class=\"p-5 bg-green\">
                        <div class=\"modal-header text-white\">
                            <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">MODIFIER UN GROUPE</h4>
                        </div>
                    </div>
                ";
            } else {
                // line 1677
                yield "                    <div class=\"modal-header bg-pri\">
                        <div class=\"p-5 text-white\">
                            <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">CRÉER UN GROUPE</h4>
                        </div>
                    </div>
                ";
            }
            // line 1683
            yield "                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
            // line 1685
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formGroup"]) || array_key_exists("formGroup", $context) ? $context["formGroup"] : (function () { throw new RuntimeError('Variable "formGroup" does not exist.', 1685, $this->source); })()), 'form_start', ["attr" => ["id" => "addGroupFacForm"]]);
            yield "
                        ";
            // line 1686
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formGroup"]) || array_key_exists("formGroup", $context) ? $context["formGroup"] : (function () { throw new RuntimeError('Variable "formGroup" does not exist.', 1686, $this->source); })()), "_token", [], "any", false, false, false, 1686), 'row');
            yield "
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label  col-blue bolo\">RÉFÉRENCE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line  ";
            // line 1691
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1691, $this->source); })()), "aaref", [], "any", false, false, false, 1691) != "oui")) {
                yield "disabled";
            }
            yield "\">
                                        ";
            // line 1692
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 1692, $this->source); })()), "aaref", [], "any", false, false, false, 1692) == "oui")) {
                // line 1693
                yield "                                            ";
                if ((($tmp = (isset($context["editGrou"]) || array_key_exists("editGrou", $context) ? $context["editGrou"] : (function () { throw new RuntimeError('Variable "editGrou" does not exist.', 1693, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 1694
                    yield "                                                ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formGroup"]) || array_key_exists("formGroup", $context) ? $context["formGroup"] : (function () { throw new RuntimeError('Variable "formGroup" does not exist.', 1694, $this->source); })()), "reference", [], "any", false, false, false, 1694), 'widget', ["attr" => ["class" => "form-control col-green"]]);
                    yield "
                                            ";
                } else {
                    // line 1696
                    yield "                                                ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formGroup"]) || array_key_exists("formGroup", $context) ? $context["formGroup"] : (function () { throw new RuntimeError('Variable "formGroup" does not exist.', 1696, $this->source); })()), "reference", [], "any", false, false, false, 1696), 'widget', ["attr" => ["class" => "form-control"]]);
                    yield "
                                            ";
                }
                // line 1698
                yield "                                        ";
            } else {
                // line 1699
                yield "                                            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formGroup"]) || array_key_exists("formGroup", $context) ? $context["formGroup"] : (function () { throw new RuntimeError('Variable "formGroup" does not exist.', 1699, $this->source); })()), "reference", [], "any", false, false, false, 1699), 'widget', ["attr" => ["class" => "form-control col-pink", "placeholder" => "Désactivé"]]);
                yield "
                                        ";
            }
            // line 1701
            yield "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label  col-blue bolo\">GROUPE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
            // line 1710
            if ((($tmp = (isset($context["editGrou"]) || array_key_exists("editGrou", $context) ? $context["editGrou"] : (function () { throw new RuntimeError('Variable "editGrou" does not exist.', 1710, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1711
                yield "                                            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formGroup"]) || array_key_exists("formGroup", $context) ? $context["formGroup"] : (function () { throw new RuntimeError('Variable "formGroup" does not exist.', 1711, $this->source); })()), "groupe", [], "any", false, false, false, 1711), 'widget', ["attr" => ["class" => "form-control col-green"]]);
                yield "
                                        ";
            } else {
                // line 1713
                yield "                                            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formGroup"]) || array_key_exists("formGroup", $context) ? $context["formGroup"] : (function () { throw new RuntimeError('Variable "formGroup" does not exist.', 1713, $this->source); })()), "groupe", [], "any", false, false, false, 1713), 'widget', ["attr" => ["class" => "form-control"]]);
                yield "
                                        ";
            }
            // line 1715
            yield "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            ";
            // line 1720
            if ((($tmp = (isset($context["editGrou"]) || array_key_exists("editGrou", $context) ? $context["editGrou"] : (function () { throw new RuntimeError('Variable "editGrou" does not exist.', 1720, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1721
                yield "                                <input type=\"submit\" id=\"updateGroupFac\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect text-white bg-green\">
                                <a href=\"";
                // line 1723
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 1723, $this->source); })()), "devis", [], "any", false, false, false, 1723), "id", [], "any", false, false, false, 1723), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 1723, $this->source); })()), "chantier", [], "any", false, false, false, 1723), "id", [], "any", false, false, false, 1723)]), "html", null, true);
                yield "\"
                                   id=\"closeGroupFac\" class=\"btn btn-link waves-effect text-white bg-pink\">FERMER
                                </a>
                            ";
            } else {
                // line 1727
                yield "                                <input type=\"submit\" id=\"addGroupFac\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-pri\">
                                <div type=\"button\" id=\"closeGroupFac\"
                                     class=\"btn btn-link waves-effect text-white bg-pink\"
                                     data-dismiss=\"modal\">FERMER
                                </div>
                            ";
            }
            // line 1734
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
            yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadGroupFac\">
                        </div>
                        ";
            // line 1737
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formGroup"]) || array_key_exists("formGroup", $context) ? $context["formGroup"] : (function () { throw new RuntimeError('Variable "formGroup" does not exist.', 1737, $this->source); })()), 'form_end');
            yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalLigne\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                ";
            // line 1748
            if ((($tmp = (isset($context["editligne"]) || array_key_exists("editligne", $context) ? $context["editligne"] : (function () { throw new RuntimeError('Variable "editligne" does not exist.', 1748, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1749
                yield "                    <div class=\"p-5 bg-green\">
                        <div class=\"modal-header text-white\">
                            <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">MODIFIER UNE
                                DÉSIGNATION</h4>
                        </div>
                    </div>
                ";
            } else {
                // line 1756
                yield "                    <div class=\"p-5 bg-pri\">
                        <div class=\"modal-header text-white\">
                            <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">AJOUTER UNE
                                DÉSIGNATION</h4>
                        </div>
                    </div>
                ";
            }
            // line 1763
            yield "                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
            // line 1765
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1765, $this->source); })()), 'form_start', ["attr" => ["id" => "form3"]]);
            yield "
                        ";
            // line 1766
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1766, $this->source); })()), "_token", [], "any", false, false, false, 1766), 'row');
            yield "
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label  col-blue bolo\">DÉSIGNATION<span
                                            class=\"col-pink\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
            // line 1773
            if ((($tmp = (isset($context["editligne"]) || array_key_exists("editligne", $context) ? $context["editligne"] : (function () { throw new RuntimeError('Variable "editligne" does not exist.', 1773, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1774
                yield "                                            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1774, $this->source); })()), "designation", [], "any", false, false, false, 1774), 'widget', ["id" => "editor1", "attr" => ["class" => "form-control col-green"]]);
                yield "
                                        ";
            } else {
                // line 1776
                yield "                                            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1776, $this->source); })()), "designation", [], "any", false, false, false, 1776), 'widget', ["id" => "editor1", "attr" => ["class" => "form-control"]]);
                yield "
                                        ";
            }
            // line 1778
            yield "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label  col-blue bolo\">UNITÉ<span
                                            class=\"col-pink\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
            // line 1788
            if ((($tmp = (isset($context["editligne"]) || array_key_exists("editligne", $context) ? $context["editligne"] : (function () { throw new RuntimeError('Variable "editligne" does not exist.', 1788, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1789
                yield "                                            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1789, $this->source); })()), "unite", [], "any", false, false, false, 1789), 'widget', ["attr" => ["class" => "form-control col-green"]]);
                yield "
                                        ";
            } else {
                // line 1791
                yield "                                            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1791, $this->source); })()), "unite", [], "any", false, false, false, 1791), 'widget', ["attr" => ["class" => "form-control"]]);
                yield "
                                        ";
            }
            // line 1793
            yield "                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label  col-blue bolo\">QUANTITÉ<span
                                            class=\"col-pink\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
            // line 1801
            if ((($tmp = (isset($context["editligne"]) || array_key_exists("editligne", $context) ? $context["editligne"] : (function () { throw new RuntimeError('Variable "editligne" does not exist.', 1801, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1802
                yield "                                            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1802, $this->source); })()), "quantite", [], "any", false, false, false, 1802), 'widget', ["attr" => ["class" => "form-control col-green"]]);
                yield "
                                        ";
            } else {
                // line 1804
                yield "                                            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1804, $this->source); })()), "quantite", [], "any", false, false, false, 1804), 'widget', ["attr" => ["class" => "form-control"]]);
                yield "
                                        ";
            }
            // line 1806
            yield "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label  col-blue bolo\">PRIX UNITAIRE<span
                                            class=\"col-pink\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
            // line 1816
            if ((($tmp = (isset($context["editligne"]) || array_key_exists("editligne", $context) ? $context["editligne"] : (function () { throw new RuntimeError('Variable "editligne" does not exist.', 1816, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1817
                yield "                                            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1817, $this->source); })()), "pu", [], "any", false, false, false, 1817), 'widget', ["type" => "number", "attr" => ["class" => "form-control col-green"]]);
                yield "
                                        ";
            } else {
                // line 1819
                yield "                                            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1819, $this->source); })()), "pu", [], "any", false, false, false, 1819), 'widget', ["type" => "number", "attr" => ["class" => "form-control"]]);
                yield "
                                        ";
            }
            // line 1821
            yield "                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label  col-blue bolo\">GROUPE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
            // line 1828
            if ((($tmp = (isset($context["editligne"]) || array_key_exists("editligne", $context) ? $context["editligne"] : (function () { throw new RuntimeError('Variable "editligne" does not exist.', 1828, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1829
                yield "                                            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1829, $this->source); })()), "groupe", [], "any", false, false, false, 1829), 'widget', ["attr" => ["class" => "form-control col-green"]]);
                yield "
                                        ";
            } else {
                // line 1831
                yield "                                            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1831, $this->source); })()), "groupe", [], "any", false, false, false, 1831), 'widget', ["attr" => ["class" => "form-control"]]);
                yield "
                                        ";
            }
            // line 1833
            yield "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            ";
            // line 1838
            if ((($tmp = (isset($context["editligne"]) || array_key_exists("editligne", $context) ? $context["editligne"] : (function () { throw new RuntimeError('Variable "editligne" does not exist.', 1838, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1839
                yield "                                <input type=\"submit\" id=\"updateLigneFacture\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect text-white bg-green\">
                                <a href=\"";
                // line 1841
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editfacture", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 1841, $this->source); })()), "id", [], "any", false, false, false, 1841), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 1841, $this->source); })()), "id", [], "any", false, false, false, 1841)]), "html", null, true);
                yield "\"
                                   id=\"closeLigne\" class=\"btn btn-link waves-effect text-white bg-pink\">FERMER
                                </a>
                            ";
            } else {
                // line 1845
                yield "                                <input type=\"submit\" id=\"addLigneFacture\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-pri\">
                                <div type=\"button\" id=\"closeLigne\"
                                     class=\"btn btn-link waves-effect text-white bg-pink\"
                                     data-dismiss=\"modal\">FERMER
                                </div>
                            ";
            }
            // line 1852
            yield "
                            <img src=\"";
            // line 1853
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
            yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadLigne\">
                        </div>
                        ";
            // line 1856
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1856, $this->source); })()), 'form_end');
            yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        }
        // line 1863
        yield "
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
                        <div id=\"shacontentFacture\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    localStorage.setItem('reloadd', 'facture/' + document.getElementById('idfacture').value + '/' + document.getElementById('idchantier').value);
</script>

";
        // line 1894
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("apfactures");
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
        return "content/facture.html.twig";
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
        return array (  2907 => 1894,  2874 => 1863,  2864 => 1856,  2858 => 1853,  2855 => 1852,  2846 => 1845,  2839 => 1841,  2835 => 1839,  2833 => 1838,  2826 => 1833,  2820 => 1831,  2814 => 1829,  2812 => 1828,  2803 => 1821,  2797 => 1819,  2791 => 1817,  2789 => 1816,  2777 => 1806,  2771 => 1804,  2765 => 1802,  2763 => 1801,  2753 => 1793,  2747 => 1791,  2741 => 1789,  2739 => 1788,  2727 => 1778,  2721 => 1776,  2715 => 1774,  2713 => 1773,  2703 => 1766,  2699 => 1765,  2695 => 1763,  2686 => 1756,  2677 => 1749,  2675 => 1748,  2661 => 1737,  2654 => 1734,  2645 => 1727,  2638 => 1723,  2634 => 1721,  2632 => 1720,  2625 => 1715,  2619 => 1713,  2613 => 1711,  2611 => 1710,  2600 => 1701,  2594 => 1699,  2591 => 1698,  2585 => 1696,  2579 => 1694,  2576 => 1693,  2574 => 1692,  2568 => 1691,  2560 => 1686,  2556 => 1685,  2552 => 1683,  2544 => 1677,  2536 => 1671,  2534 => 1670,  2528 => 1666,  2526 => 1665,  2513 => 1655,  2490 => 1635,  2466 => 1614,  2444 => 1595,  2439 => 1593,  2434 => 1591,  2420 => 1579,  2418 => 1578,  2405 => 1568,  2382 => 1548,  2358 => 1527,  2336 => 1508,  2331 => 1506,  2326 => 1504,  2312 => 1492,  2310 => 1491,  2300 => 1484,  2294 => 1481,  2291 => 1480,  2283 => 1474,  2276 => 1470,  2272 => 1468,  2270 => 1467,  2263 => 1462,  2257 => 1460,  2254 => 1459,  2248 => 1457,  2242 => 1455,  2239 => 1454,  2237 => 1453,  2228 => 1446,  2222 => 1444,  2216 => 1442,  2214 => 1441,  2202 => 1431,  2196 => 1429,  2190 => 1427,  2188 => 1426,  2178 => 1419,  2174 => 1418,  2170 => 1416,  2162 => 1410,  2154 => 1404,  2152 => 1403,  2139 => 1393,  2133 => 1390,  2122 => 1382,  2111 => 1374,  2097 => 1363,  2086 => 1355,  2073 => 1345,  2062 => 1337,  2049 => 1327,  2038 => 1319,  2024 => 1308,  2013 => 1300,  2000 => 1290,  1989 => 1282,  1978 => 1274,  1965 => 1264,  1954 => 1256,  1941 => 1246,  1930 => 1238,  1919 => 1230,  1908 => 1222,  1895 => 1212,  1886 => 1206,  1882 => 1205,  1862 => 1188,  1855 => 1184,  1839 => 1171,  1826 => 1161,  1811 => 1149,  1799 => 1140,  1786 => 1130,  1774 => 1121,  1765 => 1115,  1761 => 1114,  1743 => 1099,  1736 => 1095,  1720 => 1082,  1707 => 1072,  1694 => 1062,  1690 => 1060,  1686 => 1058,  1683 => 1057,  1679 => 1055,  1677 => 1054,  1669 => 1049,  1665 => 1047,  1661 => 1045,  1658 => 1044,  1654 => 1042,  1652 => 1041,  1642 => 1034,  1633 => 1028,  1629 => 1027,  1611 => 1011,  1606 => 1008,  1600 => 1007,  1596 => 1005,  1587 => 999,  1579 => 994,  1576 => 993,  1574 => 992,  1565 => 986,  1557 => 981,  1550 => 977,  1543 => 973,  1536 => 969,  1532 => 967,  1529 => 966,  1524 => 965,  1521 => 963,  1519 => 962,  1513 => 961,  1507 => 960,  1505 => 959,  1502 => 958,  1493 => 952,  1485 => 947,  1482 => 946,  1480 => 945,  1471 => 939,  1463 => 934,  1456 => 930,  1449 => 926,  1442 => 922,  1438 => 920,  1434 => 919,  1431 => 918,  1429 => 917,  1417 => 908,  1410 => 904,  1405 => 902,  1402 => 901,  1397 => 900,  1395 => 899,  1393 => 898,  1390 => 897,  1386 => 895,  1384 => 894,  1378 => 890,  1324 => 838,  1318 => 835,  1314 => 834,  1309 => 832,  1305 => 831,  1300 => 829,  1296 => 828,  1292 => 827,  1288 => 826,  1285 => 825,  1279 => 823,  1277 => 822,  1269 => 816,  1266 => 815,  1259 => 813,  1256 => 812,  1253 => 811,  1251 => 810,  1248 => 809,  1242 => 808,  1239 => 807,  1236 => 806,  1234 => 805,  1227 => 801,  1222 => 800,  1220 => 798,  1219 => 795,  1215 => 793,  1207 => 788,  1202 => 786,  1198 => 785,  1193 => 782,  1190 => 781,  1187 => 780,  1184 => 779,  1179 => 778,  1171 => 772,  1169 => 771,  1166 => 770,  1163 => 769,  1160 => 768,  1157 => 767,  1152 => 766,  1149 => 765,  1147 => 764,  1137 => 756,  1134 => 755,  1127 => 753,  1124 => 752,  1121 => 751,  1119 => 750,  1116 => 749,  1110 => 748,  1107 => 747,  1104 => 746,  1102 => 745,  1095 => 741,  1090 => 740,  1088 => 738,  1087 => 735,  1083 => 733,  1075 => 728,  1070 => 726,  1066 => 725,  1061 => 722,  1058 => 721,  1055 => 720,  1052 => 719,  1047 => 718,  1039 => 712,  1037 => 711,  1034 => 710,  1031 => 709,  1028 => 708,  1025 => 707,  1020 => 706,  1017 => 705,  1015 => 704,  1004 => 695,  1000 => 693,  991 => 688,  982 => 683,  980 => 682,  976 => 680,  967 => 675,  958 => 670,  956 => 669,  952 => 667,  943 => 662,  934 => 657,  932 => 656,  928 => 654,  919 => 649,  910 => 644,  908 => 643,  904 => 641,  895 => 636,  886 => 631,  884 => 630,  880 => 628,  871 => 623,  862 => 618,  860 => 617,  856 => 615,  847 => 610,  838 => 605,  836 => 604,  832 => 602,  823 => 597,  814 => 592,  812 => 591,  808 => 589,  799 => 584,  790 => 579,  788 => 578,  784 => 576,  775 => 571,  766 => 566,  764 => 565,  760 => 563,  751 => 558,  742 => 553,  740 => 552,  736 => 550,  727 => 545,  718 => 540,  716 => 539,  712 => 537,  703 => 532,  694 => 527,  692 => 526,  688 => 524,  679 => 519,  670 => 514,  668 => 513,  664 => 511,  655 => 506,  646 => 501,  644 => 500,  641 => 499,  639 => 498,  636 => 497,  627 => 492,  618 => 487,  616 => 486,  608 => 481,  593 => 468,  584 => 461,  575 => 455,  570 => 452,  558 => 446,  550 => 443,  545 => 441,  540 => 438,  536 => 437,  513 => 416,  510 => 415,  508 => 414,  505 => 413,  502 => 412,  496 => 409,  492 => 408,  489 => 407,  486 => 406,  484 => 405,  407 => 331,  398 => 325,  381 => 311,  355 => 288,  351 => 287,  344 => 283,  334 => 276,  326 => 271,  316 => 264,  71 => 22,  48 => 1,);
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
          content=\"carlinbleu, carlin bleu, carlin, gestion , projet, chantier, comptabilité, gestion technique, suivi , gestion de matériel, gestion de chantiersgestionnaire de projets, articles , showroom , matériels\">
    <meta name=\"author\" content=\"carlinGroup\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"https://www.carlinbleu.com/img/Icon-96.png\">

    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css\"/>

    {{ encore_entry_link_tags('apfactures') }}
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
    p {
        margin-left: 0 !important;
    }

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

{% if facture.type == 'decompte' %}
    <input type=\"text\" class=\"hide\" id=\"mocode\" value=\"{{ facture.decompte.devis.monnaie.code }}\">
{% endif %}

<input type=\"text\" class=\"hide\" id=\"idchantier\" value=\"{{ chantier.id }}\">
<input type=\"text\" class=\"hide\" id=\"idfacture\" value=\"{{ facture.id }}\">
<input type=\"text\" class=\"hide\" id=\"idgroupe\" value=\"{{ idgroupe }}\">
<input type=\"text\" class=\"hide\" id=\"idligne\" value=\"{{ idgligne }}\">

<input type=\"text\" class=\"hide\" id=\"jsonfacture\" value=\"{{ jsonfacture }}\">
<input type=\"text\" class=\"hide\" id=\"jsonforme\" value=\"{{ jsonforme }}\">

<input type=\"text\" class=\"hide\" id=\"jsondecomptes\" value=\"{{ jsondecomptes }}\">
<input type=\"text\" class=\"hide\" id=\"totalacomptes\" value=\"{{ totalacomptes }}\">


<input type=\"text\" class=\"hide\" id=\"facdate\" value=\"{{ facture.date|date('d/m/Y') }}\">


<div class=\"modal fade right\" id=\"modalList\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-green text-white\">
                <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">MODIFIER LES LIGNES</h4>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    <style>
                        .hider {
                            float: right;
                            margin-top: -17px;
                            visibility: hidden;
                        }

                        p {
                            margin: 2px;
                            font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
                        }

                        #borde td, th {
                            border: solid #D3D3D3;
                            border-width: 1px 1px 1px 1px;
                            padding: 5px;
                        }


                        td.bord {
                            border: 0 solid #FFFFFF !important;
                            padding: 5px;
                            text-align: right;
                            font-weight: 600;
                        }

                        td.bordz {
                            border: 0 solid #FFFFFF !important;
                            padding: 0 0 0 5px !important;
                        }

                        h3 {
                            font-weight: 500;
                            font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
                        }
                    </style>

                    <div class=\"table-responsive\">
                        <table id=\"borde\" style=\"width:100%;\">
                            {# ENTETE DU TABLEAU #}
                            <tr style=\"background-color:#4e73df; color: #FFFFFF !important; \">
                                <th style=\"text-align: left !important;\">
                                    DÉSIGNATION
                                </th>
                                {% if facture.etat == 'save' %}
                                    <th id=\"dis\" style=\"width:50px !important;\"></th>
                                {% endif %}
                            </tr>
                            {% if editMode %}
                                {# GROUPE ET LIGNE A GROUPE #}
                                {% for group in listGroup %}
                                    <tr class=\"bg-gray-200 bolderrer\">
                                        <td>{{ group.groupe|raw }}</td>
                                        <td class=\"text-center\" style=\"padding: 2px\">
                                            <a href=\"{{ path('facturegroupe',{'idgroupe':group.id,'id':facture.id,'idchantier':facture.chantier.id}) }}#groupe\">
                                                <i class=\"fa fa-edit col-green\" aria-hidden=\"true\"
                                                   title=\"Modifier\"></i>
                                            </a>
                                            <a href=\"{{ path('supgroupe',{'id':facture.id,  'idchantier':facture.chantier.id,   'idgroupe':group.id, 'type':'facture'}) }}\"
                                               class=\"sholigne\">
                                                <i class=\"fa fa-trash col-pink\" aria-hidden=\"true\"
                                                   title=\"Supprimer\"></i>
                                            </a>
                                        </td>
                                    </tr>


                                    {% set st = 0 %}

                                    {% for lign in group.lignes %}
                                        <tr>
                                            <td>
                                                <span class=\"pri font-bold\">{{ lign.designation|raw }}</span><br>
                                                <table style=\"width: 100%; margin-top: 10px\">
                                                    <tr>
                                                        <td class=\"text-right bordz\">Unité:</td>
                                                        <td class=\"text-left bordz font-bold text-black\"> {{ lign.unite }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"text-right bordz\">Quantité:</td>
                                                        <td class=\"text-left bordz font-bold text-black\"> {{ lign.quantite|number_format(2, ',', ' ') }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"text-right bordz\">Prix unitaire:</td>
                                                        <td class=\"text-left bordz font-bold text-black\"> {{ lign.pu|number_format(2, ',', ' ') }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"text-right bordz\">Montant HT:</td>
                                                        <td class=\"text-left bordz font-bold text-black\">
                                                            {{ (lign.pu * lign.quantite)|number_format(2, ',', ' ') }}
                                                        </td>
                                                    </tr>
                                                </table>

                                            </td>
                                            {% if facture.etat == 'save' %}
                                                <td class=\"text-center\" style=\"padding: 2px\">
                                                    <a href=\"{{ path('editlignefacture',{'id':facture.id,  'idchantier':facture.chantier.id,   'idligne':lign.id}) }}\">
                                                        <i class=\"fa fa-edit col-green\"
                                                           aria-hidden=\"true\"
                                                           title=\"Modifier\"></i>
                                                    </a>
                                                    <a href=\"{{ path('supligne',{'id':facture.id,  'idchantier':facture.chantier.id,   'idligne':lign.id,  'type':'facture'}) }}\"
                                                       class=\"sholigne\">
                                                        <i class=\"fa fa-trash col-pink\" aria-hidden=\"true\"
                                                           title=\"Supprimer\"></i>
                                                    </a></td>
                                            {% endif %}
                                        </tr>
                                        {% set st = (lign.pu * lign.quantite)+ st %}
                                    {% endfor %}
                                {% endfor %}
                                {# FIN GROUPE ET LIGNE #}

                                {# LIGNE SANS GROUPE #}
                                {% for lign in lignes %}
                                    {% if lign.groupe is null %}
                                        <tr>
                                            <td>
                                                <span class=\"pri font-bold\">{{ lign.designation|raw }}</span><br>
                                                <table style=\"width: 100%; margin-top: 10px\">
                                                    <tr>
                                                        <td class=\"text-right bordz\">Unité:</td>
                                                        <td class=\"text-left bordz font-bold text-black\"> {{ lign.unite }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"text-right bordz\">Quantité:</td>
                                                        <td class=\"text-left bordz font-bold text-black\"> {{ lign.quantite|number_format(2, ',', ' ') }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"text-right bordz\">Prix unitaire:</td>
                                                        <td class=\"text-left bordz font-bold text-black\"> {{ lign.pu|number_format(2, ',', ' ') }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"text-right bordz\">Montant HT:</td>
                                                        <td class=\"text-left bordz font-bold text-black\">
                                                            {{ (lign.pu * lign.quantite)|number_format(2, ',', ' ') }}
                                                        </td>
                                                    </tr>
                                                </table>

                                            </td>
                                            {% if facture.etat == 'save' %}
                                                <td class=\"text-center\" style=\"padding: 2px\">
                                                    <a href=\"{{ path('editlignefacture',{'id':facture.id,  'idchantier':facture.chantier.id,   'idligne':lign.id}) }}\">
                                                        <i class=\"fa fa-edit col-green\"
                                                           aria-hidden=\"true\"
                                                           title=\"Modifier\"></i>
                                                    </a>
                                                    <a href=\"{{ path('supligne',{'id':facture.id,  'idchantier':facture.chantier.id,   'idligne':lign.id,  'type':'facture'}) }}\"
                                                       class=\"sholigne\">
                                                        <i class=\"fa fa-trash col-pink\" aria-hidden=\"true\"
                                                           title=\"Supprimer\"></i>
                                                    </a></td>
                                            {% endif %}
                                        </tr>
                                    {% endif %}
                                {% endfor %}


                            {% endif %}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalInfo\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-green text-white\">
                <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">MODIFIER LA FACTURE</h4>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    {{ form_start(formFacture, {'attr': {'id': 'updFactureForm'}}) }}
                    {{ form_row(formFacture._token) }}
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label  pri bolo\">DATE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formFacture.date,{'attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            {% if facture.type == \"retenue\" %}
                                <label class=\"form-label  pri bolo\">TAUX BNPC</label>
                            {% endif %}
                            {% if facture.type == \"acompte\" %}
                                <label class=\"form-label  pri bolo\">TVA</label>
                            {% endif %}
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formFacture.tva, {'attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            {% if facture.type == \"retenue\" %}
                                <label class=\"form-label  pri bolo\">RETENUE PROVISOIRE</label>
                            {% endif %}
                            {% if facture.type == \"acompte\" %}
                                <label class=\"form-label  pri bolo\">REMISE</label>
                            {% endif %}
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formFacture.remise,{'attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label  col-blue bolo\">RÉFÉRENCE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formFacture.factreference,{'id': 'editor2','attr':{'class':'form-control col-pink'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label  col-blue bolo\">INFORMATIONS SUR LA FACTURE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formFacture.information,{'id': 'editor3','attr':{'class':'form-control col-pink'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"updeFacture\" value=\"MODIFIER\"
                               class=\"btn btn-link waves-effect text-white bg-green\">
                        <div type=\"button\" id=\"closuFacture\" class=\"btn btn-link waves-effect text-white bg-pink\"
                             data-dismiss=\"modal\">
                            FERMER
                        </div>
                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loaduFacture\">
                    </div>
                    <br><br><br>
                    {{ form_end(formFacture) }}
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
                    {{ form_start(formFac, {'attr': {'id': 'addFactureForm'}}) }}
                    {{ form_row(formFac._token) }}
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label  col-blue bolo\">DATE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formFac.date,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label  col-blue bolo\">TYPE D'OPÉRATION<span
                                        class=\"col-red\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formFac.type,{'id':'facselectez','attr':{'class':'form-control', 'id':'facselect'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label  col-blue bolo\">DEVIS VALIDÉS</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formFac.devis,{'required':'','attr':{'class':'form-control devo'}}) }}
                                </div>
                                <p class=\"col-pink h6 dvo\"></p>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label  col-blue bolo\">DÉCOMPTES VALIDÉS</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formFac.decompte,{'required':'','attr':{'class':'form-control deco'}}) }}
                                </div>
                                <p class=\"col-pink h6 dco\"></p>
                            </div>
                        </div>
                    </div>

                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label  col-blue bolo\">RÉFÉRENCE OU OBJET</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formFac.factreference,{'id': 'editor3','attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label  col-blue bolo\">INFORMATIONS SUR LA FACTURE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formFac.information,{'id': 'editor4','attr':{'class':'form-control'}}) }}
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
                    {{ form_end(formFac) }}
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
                    <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">MISE EN FORME</h4>
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
                    {{ form_start(formeLigne, {'attr': {'id': 'addLigneDevisForm'}}) }}
                    {{ form_row(formeLigne._token) }}
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label col-blue bolo\">DÉSIGNATION<span
                                        class=\"col-pink\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {% if ligne.id is not null %}
                                        {{ form_widget(formeLigne.designation,{'required':'','id':'editor1','attr':{'class':'form-control col-pink'}}) }}
                                    {% else %}
                                        {{ form_widget(formeLigne.designation,{'required':'','id':'editor1','attr':{'class':'form-control'}}) }}
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label col-blue bolo\">PRIX UNITAIRE<span
                                        class=\"col-pink\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {% if ligne.id is not null %}
                                        {{ form_widget(formeLigne.pu,{'attr':{'class':'form-control col-pink'}}) }}
                                    {% else %}
                                        {{ form_widget(formeLigne.pu,{'attr':{'class':'form-control'}}) }}
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label col-blue bolo\">RETENUE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {% if devis.aarem== 'oui' %}
                                        {% if ligne.id is not null %}
                                            {{ form_widget(formeLigne.remise,{'required':'','attr':{'class':'form-control col-pink','type':'number'}}) }}
                                        {% else %}
                                            {{ form_widget(formeLigne.remise,{'required':'','attr':{'class':'form-control','type':'number'}}) }}
                                        {% endif %}
                                    {% else %}
                                        {{ form_widget(formeLigne.remise,{'required':'','attr':{'class':'form-control','readonly':'true','placeholder':'Désactivé'}}) }}
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
                    {{ form_end(formeLigne) }}
                </div>
            </div>
        </div>
    </div>
</div>

{% if facture.type == \"retenue\" %}
    <div class=\"modal fade right\" id=\"modalPour\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"p-5 bg-pri\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">FACTURE SUR POURCENTAGE</h4>
                    </div>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        <form id=\"addPourcentageForm\">
                            <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addPour') }}\"/>
                            <h5 class=\"bolo600\">DEVIS TOTAL HT: <span
                                        class=\"col-blue\">{{ devis.totalht|number_format(2, ',', ' ') }}</span></h5>
                            <h5 class=\"bolo600\">DEVIS TOTAL TTC: <span
                                        class=\"col-blue\">{{ devis.totalttc|number_format(2, ',', ' ') }}</span></h5>
                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12 col-md-12\">
                                    <label class=\"form-label  col-blue bolo\">POURCENTAGE SUR DEVIS TTC(%)</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            <input type=\"number\" name=\"pour\" class=\"form-control\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"text-center\" style=\"margin-bottom: 50px !important;\">
                                <input type=\"submit\" id=\"updateFa\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-blue\">
                                <div type=\"button\" id=\"closeFa\"
                                     class=\"btn btn-link waves-effect text-white bg-pink\"
                                     data-dismiss=\"modal\">
                                    FERMER
                                </div>
                                <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                     class=\"align-justify\" id=\"loadFa\">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalMontant\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"p-5 bg-pri\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">FACTURE SUR MONTANT</h4>
                    </div>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        <form id=\"addMontantForm\">
                            <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addMontant') }}\"/>

                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12 col-md-12\">
                                    <label class=\"form-label  col-blue bolo\">MONTANT À RÉGLER</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            <input type=\"number\" name=\"montant\" class=\"form-control\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"text-center\" style=\"margin-bottom: 50px !important;\">
                                <input type=\"submit\" id=\"updateMon\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-green\">
                                <div type=\"button\" id=\"closeMon\"
                                     class=\"btn btn-link waves-effect text-white bg-pink\"
                                     data-dismiss=\"modal\">
                                    FERMER
                                </div>
                                <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                     class=\"align-justify\" id=\"loadMon\">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endif %}
{% if facture.type == \"acompte\" %}
    <div class=\"modal fade right\" id=\"modalPour\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"p-5 bg-pri\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">FACTURE SUR POURCENTAGE</h4>
                    </div>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        <form id=\"addPourcentageForm\">
                            <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addPour') }}\"/>
                            <h5 class=\"bolo600\">DEVIS TOTAL HT: <span
                                        class=\"col-blue\">{{ devis.totalht|number_format(2, ',', ' ') }}</span></h5>
                            <h5 class=\"bolo600\">DEVIS TOTAL TTC: <span
                                        class=\"col-blue\">{{ devis.totalttc|number_format(2, ',', ' ') }}</span></h5>
                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12 col-md-12\">
                                    <label class=\"form-label  col-blue bolo\">POURCENTAGE SUR DEVIS TTC(%)</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            <input type=\"number\" name=\"pour\" class=\"form-control\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"text-center\" style=\"margin-bottom: 50px !important;\">
                                <input type=\"submit\" id=\"updateFa\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-blue\">
                                <div type=\"button\" id=\"closeFa\"
                                     class=\"btn btn-link waves-effect text-white bg-pink\"
                                     data-dismiss=\"modal\">
                                    FERMER
                                </div>
                                <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                     class=\"align-justify\" id=\"loadFa\">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalMontant\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"p-5 bg-pri\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">FACTURE SUR MONTANT</h4>
                    </div>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        <form id=\"addMontantForm\">
                            <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addMontant') }}\"/>

                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12 col-md-12\">
                                    <label class=\"form-label  col-blue bolo\">MONTANT À RÉGLER</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            <input type=\"number\" name=\"montant\" class=\"form-control\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"text-center\" style=\"margin-bottom: 50px !important;\">
                                <input type=\"submit\" id=\"updateMon\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-green\">
                                <div type=\"button\" id=\"closeMon\"
                                     class=\"btn btn-link waves-effect text-white bg-pink\"
                                     data-dismiss=\"modal\">
                                    FERMER
                                </div>
                                <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                     class=\"align-justify\" id=\"loadMon\">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endif %}
{% if facture.type != 'retenue' %}
    <div class=\"modal fade right\" id=\"modalGroup\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                {% if editGrou %}
                    <div class=\"p-5 bg-green\">
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
                        {{ form_start(formGroup, {'attr': {'id': 'addGroupFacForm'}}) }}
                        {{ form_row(formGroup._token) }}
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label  col-blue bolo\">RÉFÉRENCE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line  {% if devis.aaref != 'oui' %}disabled{% endif %}\">
                                        {% if devis.aaref == 'oui' %}
                                            {% if editGrou %}
                                                {{ form_widget(formGroup.reference,{'attr':{'class':'form-control col-green'}}) }}
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
                                <label class=\"form-label  col-blue bolo\">GROUPE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {% if editGrou %}
                                            {{ form_widget(formGroup.groupe,{'attr':{'class':'form-control col-green'}}) }}
                                        {% else %}
                                            {{ form_widget(formGroup.groupe,{'attr':{'class':'form-control'}}) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            {% if editGrou %}
                                <input type=\"submit\" id=\"updateGroupFac\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect text-white bg-green\">
                                <a href=\"{{ path('editdevis', {'id': facture.devis.id,'idchantier':facture.chantier.id}) }}\"
                                   id=\"closeGroupFac\" class=\"btn btn-link waves-effect text-white bg-pink\">FERMER
                                </a>
                            {% else %}
                                <input type=\"submit\" id=\"addGroupFac\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-pri\">
                                <div type=\"button\" id=\"closeGroupFac\"
                                     class=\"btn btn-link waves-effect text-white bg-pink\"
                                     data-dismiss=\"modal\">FERMER
                                </div>
                            {% endif %}
                            <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadGroupFac\">
                        </div>
                        {{ form_end(formGroup) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalLigne\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                {% if editligne %}
                    <div class=\"p-5 bg-green\">
                        <div class=\"modal-header text-white\">
                            <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">MODIFIER UNE
                                DÉSIGNATION</h4>
                        </div>
                    </div>
                {% else %}
                    <div class=\"p-5 bg-pri\">
                        <div class=\"modal-header text-white\">
                            <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">AJOUTER UNE
                                DÉSIGNATION</h4>
                        </div>
                    </div>
                {% endif %}
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        {{ form_start(forme, {'attr': {'id': 'form3'}}) }}
                        {{ form_row(forme._token) }}
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label  col-blue bolo\">DÉSIGNATION<span
                                            class=\"col-pink\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {% if editligne %}
                                            {{ form_widget(forme.designation,{'id':'editor1','attr':{'class':'form-control col-green'}}) }}
                                        {% else %}
                                            {{ form_widget(forme.designation,{'id':'editor1','attr':{'class':'form-control'}}) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label  col-blue bolo\">UNITÉ<span
                                            class=\"col-pink\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {% if editligne %}
                                            {{ form_widget(forme.unite,{'attr':{'class':'form-control col-green'}}) }}
                                        {% else %}
                                            {{ form_widget(forme.unite,{'attr':{'class':'form-control'}}) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label  col-blue bolo\">QUANTITÉ<span
                                            class=\"col-pink\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {% if editligne %}
                                            {{ form_widget(forme.quantite,{'attr':{'class':'form-control col-green'}}) }}
                                        {% else %}
                                            {{ form_widget(forme.quantite,{'attr':{'class':'form-control'}}) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label  col-blue bolo\">PRIX UNITAIRE<span
                                            class=\"col-pink\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {% if editligne %}
                                            {{ form_widget(forme.pu,{'type':'number','attr':{'class':'form-control col-green'}}) }}
                                        {% else %}
                                            {{ form_widget(forme.pu,{'type':'number','attr':{'class':'form-control'}}) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label  col-blue bolo\">GROUPE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {% if editligne %}
                                            {{ form_widget(forme.groupe,{'attr':{'class':'form-control col-green'}}) }}
                                        {% else %}
                                            {{ form_widget(forme.groupe,{'attr':{'class':'form-control'}}) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            {% if editligne %}
                                <input type=\"submit\" id=\"updateLigneFacture\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect text-white bg-green\">
                                <a href=\"{{ path('editfacture', {'id': facture.id, 'idchantier': chantier.id}) }}\"
                                   id=\"closeLigne\" class=\"btn btn-link waves-effect text-white bg-pink\">FERMER
                                </a>
                            {% else %}
                                <input type=\"submit\" id=\"addLigneFacture\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-pri\">
                                <div type=\"button\" id=\"closeLigne\"
                                     class=\"btn btn-link waves-effect text-white bg-pink\"
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
{% endif %}

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
                        <div id=\"shacontentFacture\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    localStorage.setItem('reloadd', 'facture/' + document.getElementById('idfacture').value + '/' + document.getElementById('idchantier').value);
</script>

{{ encore_entry_script_tags('apfactures') }}
</body>
</html>

", "content/facture.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\facture.html.twig");
    }
}
