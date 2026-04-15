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

/* content/etat.html.twig */
class __TwigTemplate_28727a23ecdb2c5026fa3b81e842fd87 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/etat.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/etat.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>États des comptes | Carlinbleu</title>
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

    <link href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/chat.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
    ";
        // line 21
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("apetats");
        yield "

</head>

<body class=\"theme-red\" style=\"background-color: #d1d3e2 !important;\" id=\"bod\">
<div class=\"page-loader-wrapper\">
    <div class=\"loader\">
        <div class=\"preloader\">
            <div class=\"spinner-layer pl-red\">
                <div class=\"circle-clipper left\">
                    <div class=\"circle\"></div>
                </div>
                <div class=\"circle-clipper right\">
                    <div class=\"circle\"></div>
                </div>
            </div>
        </div>
        <p> Téléchargement de vos données...</p>
    </div>
</div>
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
            <div class=\"modal-body\">
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
    body {
        font-size: 16px;
        font-family: Verdana, sans-serif;
    }

    table {
        border-collapse: collapse;
    }

    th, td {
        box-sizing: border-box;
        border: 1px solid #e9eae8;
        padding: 8px 20px;
    }

    th {
        cursor: pointer;
    }

</style>
<style>
    p {
        margin: 0 !important
    }

    .upper {
        text-transform: uppercase !important;
    }

    td.borde {
        border-spacing: 0;
        border-collapse: collapse;
        border: solid #D3D3D3;
        border-width: 1px 1px 1px 1px !important;
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
        // line 318
        if ((($tmp =  !array_key_exists("libre", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 319
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 319, $this->source); })()), "user", [], "any", false, false, false, 319)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 320
                yield "                        <li class=\"col-yellow h4 bolo600 m-l-20\">
                            ";
                // line 321
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 321, $this->source); })()), "user", [], "any", false, false, false, 321), "nom", [], "any", false, false, false, 321)), "html", null, true);
                yield "
                            ";
                // line 322
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 322, $this->source); })()), "user", [], "any", false, false, false, 322), "prenoms", [], "any", false, false, false, 322)), "html", null, true);
                yield "
                        </li>
                    ";
            }
            // line 325
            yield "                ";
        }
        // line 326
        yield "
                ";
        // line 327
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 327, $this->source); })()), "user", [], "any", false, false, false, 327)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 328
            yield "                    ";
            if (( !array_key_exists("libre", $context) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 328, $this->source); })()), "user", [], "any", false, false, false, 328))) {
                // line 329
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
                // line 350
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["history"]);
                foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                    // line 351
                    yield "                                        <li>
                                            <a href=\"javascript:void(0);\">
                                                <div class=\"menu-info\">
                                                    <h5 class=\"col-indigo font-weight-bold\">";
                    // line 354
                    yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["history"], "action", [], "any", false, false, false, 354));
                    yield "</h5>
                                                    <h5 class=\"col-pink font-weight-bold\">
                                                        Par: ";
                    // line 356
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["history"], "dobyuser", [], "any", false, false, false, 356), "nom", [], "any", false, false, false, 356)), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["history"], "dobyuser", [], "any", false, false, false, 356), "prenoms", [], "any", false, false, false, 356)), "html", null, true);
                    yield "</h5>
                                                    <p class=\"col-black\">
                                                        <i class=\"material-icons\">access_time</i> <span
                                                                style=\"font-size: 14px\">";
                    // line 359
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["history"], "date", [], "any", false, false, false, 359), "d.m.Y H.m"), "html", null, true);
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
                // line 365
                yield "                                </ul>
                            </li>
                            <li class=\"footer bg-blue col-white\">
                                <a href=\"";
                // line 368
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historique");
                yield "\" class=\"bolo text-white\" style=\"font-size: 16px\">
                                    Voir toutes les actions
                                </a>
                            </li>
                        </ul>
                    ";
            }
            // line 374
            yield "
                    <li class=\"hidere\">
                        <a data-toggle=\"modal\" data-target=\"#ModalSearch\">
                            <i class=\"material-icons\">search</i>
                        </a>
                    </li>
                ";
        }
        // line 381
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
        // line 394
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logoy.png"), "html", null, true);
        yield "\" style=\"float: left; width: 200px !important;margin-top: 10px\"/>
        </div>
        <div class=\"menu\">
            <ul class=\"list\">
                <li class=\"active\">
                    ";
        // line 399
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 399, $this->source); })()) == "page"))) {
            // line 400
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("welcome");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">home</i>
                            <span class=\"col-yellow\">ACCUEIL</span>
                        </a>
                    ";
        } else {
            // line 405
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("welcomel");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">home</i>
                            <span class=\"text-white\">Accueil</span>
                        </a>
                    ";
        }
        // line 410
        yield "                </li>
                <li class=\"active\">
                    <a href=\"";
        // line 412
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("content");
        yield "\" class=\"bolo\">
                        <i class=\"material-icons col-white\">add_shopping_cart</i>
                        <span class=\"col-white\">SHOWROOMS</span>
                    </a>
                </li>

                ";
        // line 418
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 418, $this->source); })()), "user", [], "any", false, false, false, 418)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 419
            yield "                    <li class=\"active\">
                        ";
            // line 420
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 420, $this->source); })()) == "message"))) {
                // line 421
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">email</i>
                                <span class=\"col-yellow\">MESSAGERIE</span>
                            </a>
                        ";
            } else {
                // line 426
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">email</i>
                                <span class=\"text-white\">Messagerie</span>
                            </a>
                        ";
            }
            // line 431
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 433
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 433, $this->source); })()) == "article"))) {
                // line 434
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">content_copy</i>
                                <span class=\"col-yellow\">MES ARTICLES</span>
                            </a>
                        ";
            } else {
                // line 439
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">content_copy</i>
                                <span class=\"text-white\">Mes articles</span>
                            </a>
                        ";
            }
            // line 444
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 446
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 446, $this->source); })()) == "etat"))) {
                // line 447
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etat");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">swap_horiz</i>
                                <span class=\"col-yellow\">GESTION DES ÉTATS</span>
                            </a>
                        ";
            } else {
                // line 452
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etat");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">swap_horiz</i>
                                <span class=\"text-white\">Gestion des états</span>
                            </a>
                        ";
            }
            // line 457
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 459
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 459, $this->source); })()) == "comptable"))) {
                // line 460
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantiers");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">widgets</i>
                                <span class=\"col-yellow\">GESTION DES CHANTIERS</span>
                            </a>
                        ";
            } else {
                // line 465
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantiers");
                yield "\">
                                <i class=\"material-icons text-white\">widgets</i>
                                <span class=\"text-white\">Gestion des chantiers</span>
                            </a>
                        ";
            }
            // line 470
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 472
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 472, $this->source); })()) == "paie"))) {
                // line 473
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paie");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">toll</i>
                                <span class=\"col-yellow\">POINTS DE PAIE</span>
                            </a>
                        ";
            } else {
                // line 478
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paie");
                yield "\">
                                <i class=\"material-icons text-white\">toll</i>
                                <span class=\"text-white\">Points de paie</span>
                            </a>
                        ";
            }
            // line 483
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 485
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 485, $this->source); })()) == "technique"))) {
                // line 486
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technique");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">open_with</i>
                                <span class=\"col-yellow\">GESTION TECHNIQUE</span>
                            </a>
                        ";
            } else {
                // line 491
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technique");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">open_with</i>
                                <span class=\"text-white\">Gestion technique</span>
                            </a>
                        ";
            }
            // line 496
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 498
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 498, $this->source); })()) == "materiel"))) {
                // line 499
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("materiel");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">bubble_chart</i>
                                <span class=\"col-yellow\">GESTION DU MATÉRIEL</span>
                            </a>
                        ";
            } else {
                // line 504
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("materiel");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">bubble_chart</i>
                                <span class=\"text-white\">Gestion du matériel</span>
                            </a>
                        ";
            }
            // line 509
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 511
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 511, $this->source); })()) == "personnel"))) {
                // line 512
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnel");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">people_outline</i>
                                <span class=\"col-yellow\">GESTION DU PERSONNEL</span>
                            </a>
                        ";
            } else {
                // line 517
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnel");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">people_outline</i>
                                <span class=\"text-white\">Gestion du personnel</span>
                            </a>
                        ";
            }
            // line 522
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 524
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 524, $this->source); })()) == "parametre"))) {
                // line 525
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parametre");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">center_focus_weak</i>
                                <span class=\"col-yellow\">PARAMÈTRES</span>
                            </a>
                        ";
            } else {
                // line 530
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parametre");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">center_focus_weak</i>
                                <span class=\"text-white\">Paramètres</span>
                            </a>
                        ";
            }
            // line 535
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 537
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 537, $this->source); })()) == "historique"))) {
                // line 538
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historique");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">history</i>
                                <span class=\"col-yellow\">HISTORIQUE</span>
                            </a>
                        ";
            } else {
                // line 543
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historique");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">history</i>
                                <span class=\"text-white\">Historique</span>
                            </a>
                        ";
            }
            // line 548
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 550
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 550, $this->source); })()) == "corbeille"))) {
                // line 551
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("corbeille");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">delete</i>
                                <span class=\"col-yellow\">CORBEILLE</span>
                            </a>
                        ";
            } else {
                // line 556
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("corbeille");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">delete</i>
                                <span class=\"text-white\">Corbeille</span>
                            </a>
                        ";
            }
            // line 561
            yield "                    </li>
                ";
        }
        // line 563
        yield "            </ul>
        </div>
    </aside>
    <aside id=\"rightsidebars\" class=\"right-sidebars m-t--25 p-t-10\" style=\"overflow: scroll\">
        <div class=\"tab-content\">
            <div role=\"tabpanel\" class=\"tab-pane fade in active in active\" id=\"chantier\">
                <div class=\"table-responsive\" style=\"padding: 10px !important;\">
                    ";
        // line 570
        if ((($tmp =  !array_key_exists("libre", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 571
            yield "                        ";
            $context["q"] = 0;
            // line 572
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 572, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 573
                yield "                            ";
                $context["p"] = 0;
                // line 574
                yield "                            ";
                if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 574)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 574), "count", [], "any", false, false, false, 574) > 0))) {
                    // line 575
                    yield "                                ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 575))) {
                        // line 576
                        yield "                                    <table class=\"table-bordered shadow\" style=\" overflow: scroll; width: 100%\">
                                        ";
                        // line 577
                        if (((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 577, $this->source); })()) == 0)) {
                            // line 578
                            yield "                                            <tr>
                                                <td colspan=\"2\" class=\"bg-purple text-white\"
                                                    style=\"padding-left: 5px;\">CHANTIERS EN ÉTUDE
                                                </td>
                                            </tr>
                                        ";
                        }
                        // line 584
                        yield "                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 584));
                        foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                            // line 585
                            yield "                                            ";
                            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 585))) {
                                // line 586
                                yield "                                                ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 586) == "etude")) {
                                    // line 587
                                    yield "                                                    ";
                                    if (((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 587, $this->source); })()) == 0)) {
                                        // line 588
                                        yield "                                                        <tr>
                                                            <td colspan=\"2\" class=\"bg-blue text-white\"
                                                                style=\"padding-left: 5px;\">
                                                                <a href=\"";
                                        // line 591
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 591)]), "html", null, true);
                                        yield "\"
                                                                   class=\"text-white\" title=\"";
                                        // line 592
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 592)), "html", null, true);
                                        yield "\">
                                                                    -
                                                                    ";
                                        // line 594
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 594)), "html", null, true);
                                        yield "
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    ";
                                    }
                                    // line 599
                                    yield "                                                    <tr>
                                                        <td style=\"padding-left: 5px\" colspan=\"2\" class=\"bg-light\">
                                                            <a href=\"";
                                    // line 601
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source,                                     // line 604
$context["chantier"], "id", [], "any", false, false, false, 604)]), "html", null, true);
                                    // line 606
                                    yield "\" class=\"text-pri\" title=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 606), "html", null, true);
                                    yield "\">
                                                                # ";
                                    // line 607
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 607), 0, 55)), "html", null, true);
                                    yield "
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    ";
                                    // line 611
                                    $context["p"] = ((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 611, $this->source); })()) + 1);
                                    // line 612
                                    yield "                                                ";
                                }
                                // line 613
                                yield "                                            ";
                            }
                            // line 614
                            yield "                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 615
                        yield "                                    </table>
                                    ";
                        // line 616
                        $context["q"] = ((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 616, $this->source); })()) + 1);
                        // line 617
                        yield "                                ";
                    }
                    // line 618
                    yield "                            ";
                }
                // line 619
                yield "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 621
            yield "                    ";
        }
        // line 622
        yield "                </div>
            </div>
        </div>
    </aside>
    <aside id=\"rightsidebar\" class=\"right-sidebar m-t--25 p-t-10\" style=\"overflow: scroll\">
        <div class=\"tab-content\">
            <div role=\"tabpanel\" class=\"tab-pane fade in active in active\" id=\"chantier\">
                <div class=\"table-responsive\" style=\"padding: 10px !important;\">
                    ";
        // line 630
        if ((($tmp =  !array_key_exists("libre", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 631
            yield "                        ";
            $context["q"] = 0;
            // line 632
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 632, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 633
                yield "                            ";
                $context["p"] = 0;
                // line 634
                yield "                            ";
                if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 634)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 634), "count", [], "any", false, false, false, 634) > 0))) {
                    // line 635
                    yield "                                ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 635))) {
                        // line 636
                        yield "                                    <table class=\"table-bordered shadow\" style=\" overflow: scroll; width: 100%\">
                                        ";
                        // line 637
                        if (((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 637, $this->source); })()) == 0)) {
                            // line 638
                            yield "                                            <tr>
                                                <td colspan=\"2\" class=\"bg-pink text-white\"
                                                    style=\"padding-left: 5px;\">CHANTIERS EN COURS
                                                </td>
                                            </tr>
                                        ";
                        }
                        // line 644
                        yield "                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 644));
                        foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                            // line 645
                            yield "                                            ";
                            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 645))) {
                                // line 646
                                yield "                                                ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 646) == "encours")) {
                                    // line 647
                                    yield "                                                    ";
                                    if (((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 647, $this->source); })()) == 0)) {
                                        // line 648
                                        yield "                                                        <tr>
                                                            <td colspan=\"2\" class=\"bg-blue text-white\"
                                                                style=\"padding-left: 5px;\">
                                                                <a href=\"";
                                        // line 651
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 651)]), "html", null, true);
                                        yield "\"
                                                                   class=\"text-white\" title=\"";
                                        // line 652
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 652)), "html", null, true);
                                        yield "\">
                                                                    -
                                                                    ";
                                        // line 654
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 654)), "html", null, true);
                                        yield "
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    ";
                                    }
                                    // line 659
                                    yield "                                                    <tr>
                                                        <td style=\"padding-left: 5px\" colspan=\"2\" class=\"bg-light\">
                                                            <a href=\"";
                                    // line 661
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source,                                     // line 664
$context["chantier"], "id", [], "any", false, false, false, 664)]), "html", null, true);
                                    // line 666
                                    yield "\" class=\"text-pri\" title=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 666), "html", null, true);
                                    yield "\">
                                                                # ";
                                    // line 667
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 667), 0, 55)), "html", null, true);
                                    yield "
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    ";
                                    // line 671
                                    $context["p"] = ((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 671, $this->source); })()) + 1);
                                    // line 672
                                    yield "                                                ";
                                }
                                // line 673
                                yield "                                            ";
                            }
                            // line 674
                            yield "                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 675
                        yield "                                    </table>
                                    ";
                        // line 676
                        $context["q"] = ((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 676, $this->source); })()) + 1);
                        // line 677
                        yield "                                ";
                    }
                    // line 678
                    yield "                            ";
                }
                // line 679
                yield "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 681
            yield "                    ";
        }
        // line 682
        yield "                </div>
            </div>
        </div>
    </aside>
</section>

<input type=\"text\" class=\"hide\" id=\"jsonclients\" value=\"";
        // line 688
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["jsonclients"]) || array_key_exists("jsonclients", $context) ? $context["jsonclients"] : (function () { throw new RuntimeError('Variable "jsonclients" does not exist.', 688, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"jsonprestas\" value=\"";
        // line 689
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["jsonprestas"]) || array_key_exists("jsonprestas", $context) ? $context["jsonprestas"] : (function () { throw new RuntimeError('Variable "jsonprestas" does not exist.', 689, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"jsonfournes\" value=\"";
        // line 690
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["jsonfournes"]) || array_key_exists("jsonfournes", $context) ? $context["jsonfournes"] : (function () { throw new RuntimeError('Variable "jsonfournes" does not exist.', 690, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"jsonpersos\" value=\"";
        // line 691
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["jsonpersos"]) || array_key_exists("jsonpersos", $context) ? $context["jsonpersos"] : (function () { throw new RuntimeError('Variable "jsonpersos" does not exist.', 691, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"caisseinterne\" value=\"";
        // line 692
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["caisseinterne"]) || array_key_exists("caisseinterne", $context) ? $context["caisseinterne"] : (function () { throw new RuntimeError('Variable "caisseinterne" does not exist.', 692, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"caisseperso\" value=\"";
        // line 693
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["caisseperso"]) || array_key_exists("caisseperso", $context) ? $context["caisseperso"] : (function () { throw new RuntimeError('Variable "caisseperso" does not exist.', 693, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"fournes\" value=\"";
        // line 694
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["aa"]) || array_key_exists("aa", $context) ? $context["aa"] : (function () { throw new RuntimeError('Variable "aa" does not exist.', 694, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"prestas\" value=\"";
        // line 695
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["bb"]) || array_key_exists("bb", $context) ? $context["bb"] : (function () { throw new RuntimeError('Variable "bb" does not exist.', 695, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"sumDepense\" value=\"";
        // line 696
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sumDepense"]) || array_key_exists("sumDepense", $context) ? $context["sumDepense"] : (function () { throw new RuntimeError('Variable "sumDepense" does not exist.', 696, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"sumRegle\" value=\"";
        // line 697
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sumRegle"]) || array_key_exists("sumRegle", $context) ? $context["sumRegle"] : (function () { throw new RuntimeError('Variable "sumRegle" does not exist.', 697, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"moshow\" value=\"";
        // line 698
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["moshow"]) || array_key_exists("moshow", $context) ? $context["moshow"] : (function () { throw new RuntimeError('Variable "moshow" does not exist.', 698, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"idperson\" value=\"";
        // line 699
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 699, $this->source); })()), "id", [], "any", false, false, false, 699), "html", null, true);
        yield "\">

<input type=\"text\" class=\"hide\" id=\"jsondevis\" value=\"";
        // line 701
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["jsondev"]) || array_key_exists("jsondev", $context) ? $context["jsondev"] : (function () { throw new RuntimeError('Variable "jsondev" does not exist.', 701, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"jsonbon\" value=\"";
        // line 702
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["jsonbon"]) || array_key_exists("jsonbon", $context) ? $context["jsonbon"] : (function () { throw new RuntimeError('Variable "jsonbon" does not exist.', 702, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"jsoncaisse\" value=\"";
        // line 703
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["jsoncaisse"]) || array_key_exists("jsoncaisse", $context) ? $context["jsoncaisse"] : (function () { throw new RuntimeError('Variable "jsoncaisse" does not exist.', 703, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"jsondec\" value=\"";
        // line 704
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["jsondec"]) || array_key_exists("jsondec", $context) ? $context["jsondec"] : (function () { throw new RuntimeError('Variable "jsondec" does not exist.', 704, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"jsonfac\" value=\"";
        // line 705
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["jsonfac"]) || array_key_exists("jsonfac", $context) ? $context["jsonfac"] : (function () { throw new RuntimeError('Variable "jsonfac" does not exist.', 705, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"jsoninventes\" value=\"";
        // line 706
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["jsoninventes"]) || array_key_exists("jsoninventes", $context) ? $context["jsoninventes"] : (function () { throw new RuntimeError('Variable "jsoninventes" does not exist.', 706, $this->source); })()), "html", null, true);
        yield "\">

<div class=\"modal fade right\" id=\"modalClient\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header col-white bg-green p-l-20 hide\" id=\"clfa\">
                <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                    <i class=\"icofont-minus-circle icofont-1x\"></i>
                    MODIFIER UN CLIENT</h3>
            </div>
            <div class=\"modal-header col-white bg-pri p-l-20\" id=\"clfb\">
                <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                    <i class=\"icofont-plus-circle icofont-1x\"></i>
                    AJOUTER UN CLIENT</h3>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    ";
        // line 724
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 724, $this->source); })()), 'form_start', ["attr" => ["id" => "addClientForm"]]);
        yield "
                    ";
        // line 725
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 725, $this->source); })()), "_token", [], "any", false, false, false, 725), 'row');
        yield "
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label pri bolo\">CLIENT<span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    ";
        // line 732
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 732, $this->source); })()), "nomclient", [], "any", false, false, false, 732), 'widget', ["attr" => ["class" => "form-control cls"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label pri bolo\">ADRESSE</label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    ";
        // line 742
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 742, $this->source); })()), "adresse", [], "any", false, false, false, 742), 'widget', ["attr" => ["class" => "form-control cls"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label pri bolo\">CONTACTS</label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    ";
        // line 752
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 752, $this->source); })()), "contact", [], "any", false, false, false, 752), 'widget', ["attr" => ["class" => "form-control cls"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label pri bolo\">COMPTE CONTRIBUABLE</label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    ";
        // line 762
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 762, $this->source); })()), "contribuable", [], "any", false, false, false, 762), 'widget', ["attr" => ["class" => "form-control cls"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"text-center hide\" id=\"divClienter\">
                        <input type=\"submit\" id=\"updateClient\" value=\"MODIFIER\"
                               class=\"btn btn-link waves-effect col-white bg-green\"/>
                        <div type=\"button\" id=\"closeClient\" class=\"btn btn-link waves-effect col-white bg-pink\"
                             data-dismiss=\"modal\">
                            ANNULER
                        </div>
                    </div>


                    <div class=\"text-center\" id=\"divClient\">
                        <input type=\"submit\" id=\"addClient\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect col-white bg-pri\">
                        <div type=\"button\" id=\"closeClient\" class=\"btn btn-link waves-effect col-white bg-pink\"
                             data-dismiss=\"modal\">
                            FERMER
                        </div>
                    </div>

                    <div class=\"text-center\">
                        <img src=\"";
        // line 788
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadClient\"/>
                    </div>
                </div>
                ";
        // line 792
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 792, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalChantier\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header col-white bg-green p-l-20 hide\" id=\"chfa\">
                <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                    <i class=\"icofont-minus-circle icofont-1x\"></i>
                    MODIFIER UN CHANTIER</h3>
            </div>

            <div class=\"modal-header col-white bg-pri p-l-20\" id=\"chfb\">
                <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                    <i class=\"icofont-plus-circle icofont-1x\"></i>
                    AJOUTER UN CHANTIER</h3>
            </div>

            <div class=\"modal-body m-t-10 bien\">
                ";
        // line 814
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 814, $this->source); })()), 'form_start', ["attr" => ["id" => "addChantierForm"]]);
        yield "
                <input type=\"hidden\" name=\"token\" value=\"";
        // line 815
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addChantierToken"), "html", null, true);
        yield "\"/>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label pri bolo\">CLIENT<span class=\"col-red\">*</span>
                        </label>
                        <div class=\"form-group m-t--5\">
                            <div class=\"form-line\">
                                ";
        // line 822
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 822, $this->source); })()), "client", [], "any", false, false, false, 822), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label pri bolo\">NOM DU CHANTIER<span class=\"col-red\">*</span></label>
                        <div class=\"form-group m-t--5\">
                            <div class=\"form-line\">
                                ";
        // line 832
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 832, $this->source); })()), "nomchantier", [], "any", false, false, false, 832), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label pri bolo\">RÉFÉRENCE CONTRAT</label>
                        <div class=\"form-group m-t--5\">
                            <div class=\"form-line\">
                                ";
        // line 842
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 842, $this->source); })()), "contrat", [], "any", false, false, false, 842), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label pri bolo\">SITUATION GÉOGRAPHIQUE</label>
                        <div class=\"form-group m-t--5\">
                            <div class=\"form-line\">
                                ";
        // line 852
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 852, $this->source); })()), "localisation", [], "any", false, false, false, 852), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label pri bolo\">SOUS-CHANTIER DU CHANTIER</label>
                        <div class=\"form-group m-t--5\">
                            <div class=\"form-line\">
                                ";
        // line 862
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 862, $this->source); })()), "sous", [], "any", false, false, false, 862), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label pri bolo\">DESCRIPTION</label>
                        <div class=\"form-group m-t--5\">
                            <div class=\"form-line\">
                                ";
        // line 872
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 872, $this->source); })()), "description", [], "any", false, false, false, 872), 'widget', ["required" => "", "id" => "editor", "attr" => ["class" => "form-control chr"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">

                    <div class=\"col-sm-6\">
                        <div class=\"form-group m-t--5\">
                            <label class=\"form-label pri bolo\">DÉBUTE LE</label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    ";
        // line 884
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 884, $this->source); })()), "ddebut", [], "any", false, false, false, 884), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <div class=\"form-group m-t--5\">
                            <label class=\"form-label pri bolo\">TERMINE LE</label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    ";
        // line 894
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 894, $this->source); })()), "dfin", [], "any", false, false, false, 894), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class=\"text-center hide\" id=\"divChantiere\">
                    <input type=\"submit\" id=\"updateChr\" value=\"MODIFIER\"
                           class=\"btn btn-link waves-effect col-white bg-green\">
                    <div type=\"button\" id=\"closeChantier\" class=\"btn btn-link waves-effect col-white bg-pink\"
                         data-dismiss=\"modal\">
                        ANNULER
                    </div>
                </div>

                <div class=\"text-center\" id=\"divChantier\">
                    <input type=\"submit\" id=\"addChantier\" value=\"ENREGISTRER\"
                           class=\"btn btn-link waves-effect col-white bg-pri\">
                    <div type=\"button\" id=\"closeChantier\" class=\"btn btn-link waves-effect col-white bg-pink\"
                         data-dismiss=\"modal\">
                        FERMER
                    </div>
                </div>

                <div class=\"text-center\">
                    <img src=\"";
        // line 921
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadChantier\"></div>

                ";
        // line 924
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 924, $this->source); })()), 'form_end');
        yield "

            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalFournisseur\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            ";
        // line 935
        if ((($tmp = (isset($context["editFourn"]) || array_key_exists("editFourn", $context) ? $context["editFourn"] : (function () { throw new RuntimeError('Variable "editFourn" does not exist.', 935, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 936
            yield "                <div class=\"p-5 bg-green\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">MODIFIER UN FOURNISSEUR</h4>
                    </div>
                </div>
            ";
        } else {
            // line 942
            yield "                <div class=\"p-5 bg-pri\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">AJOUTER UN FOURNISSEUR</h4>
                    </div>
                </div>
            ";
        }
        // line 948
        yield "            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">

                    ";
        // line 951
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formfourn"]) || array_key_exists("formfourn", $context) ? $context["formfourn"] : (function () { throw new RuntimeError('Variable "formfourn" does not exist.', 951, $this->source); })()), 'form_start', ["attr" => ["id" => "addFournisseurForm"]]);
        yield "
                    ";
        // line 952
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formfourn"]) || array_key_exists("formfourn", $context) ? $context["formfourn"] : (function () { throw new RuntimeError('Variable "formfourn" does not exist.', 952, $this->source); })()), "_token", [], "any", false, false, false, 952), 'row');
        yield "
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">FOURNISSEUR
                                <span class=\"col-pink\">*</span></label>

                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 960
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formfourn"]) || array_key_exists("formfourn", $context) ? $context["formfourn"] : (function () { throw new RuntimeError('Variable "formfourn" does not exist.', 960, $this->source); })()), "fournisseur", [], "any", false, false, false, 960), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">CONTACTS</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 970
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formfourn"]) || array_key_exists("formfourn", $context) ? $context["formfourn"] : (function () { throw new RuntimeError('Variable "formfourn" does not exist.', 970, $this->source); })()), "mobile", [], "any", false, false, false, 970), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">E-MAIL</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 978
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formfourn"]) || array_key_exists("formfourn", $context) ? $context["formfourn"] : (function () { throw new RuntimeError('Variable "formfourn" does not exist.', 978, $this->source); })()), "mail", [], "any", false, false, false, 978), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">ADRESSE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 988
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formfourn"]) || array_key_exists("formfourn", $context) ? $context["formfourn"] : (function () { throw new RuntimeError('Variable "formfourn" does not exist.', 988, $this->source); })()), "adresse", [], "any", false, false, false, 988), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        ";
        // line 994
        if ((($tmp = (isset($context["editFourn"]) || array_key_exists("editFourn", $context) ? $context["editFourn"] : (function () { throw new RuntimeError('Variable "editFourn" does not exist.', 994, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 995
            yield "                            <input type=\"submit\" id=\"updateFourn\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect text-white bg-green\">
                        ";
        } else {
            // line 998
            yield "                            <input type=\"submit\" id=\"addFourn\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-pri\">
                        ";
        }
        // line 1001
        yield "
                        <div type=\"button\" id=\"closeFourn\" class=\"btn btn-link waves-effect text-white bg-pink\"
                             data-dismiss=\"modal\">FERMER
                        </div>
                        <img src=\"";
        // line 1005
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadFourn\">
                    </div>
                    ";
        // line 1008
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formfourn"]) || array_key_exists("formfourn", $context) ? $context["formfourn"] : (function () { throw new RuntimeError('Variable "formfourn" does not exist.', 1008, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalPrestataire\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            ";
        // line 1018
        if ((($tmp = (isset($context["editPresta"]) || array_key_exists("editPresta", $context) ? $context["editPresta"] : (function () { throw new RuntimeError('Variable "editPresta" does not exist.', 1018, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1019
            yield "                <div class=\"p-5 bg-green\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">MODIFIER UN PRESTATAIRE</h4>
                    </div>
                </div>
            ";
        } else {
            // line 1025
            yield "                <div class=\"p-5 bg-pri\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">AJOUTER UN PRESTATAIRE</h4>
                    </div>
                </div>
            ";
        }
        // line 1031
        yield "            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">

                    ";
        // line 1034
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formpresta"]) || array_key_exists("formpresta", $context) ? $context["formpresta"] : (function () { throw new RuntimeError('Variable "formpresta" does not exist.', 1034, $this->source); })()), 'form_start', ["attr" => ["id" => "addPrestataireForm"]]);
        yield "
                    ";
        // line 1035
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formpresta"]) || array_key_exists("formpresta", $context) ? $context["formpresta"] : (function () { throw new RuntimeError('Variable "formpresta" does not exist.', 1035, $this->source); })()), "_token", [], "any", false, false, false, 1035), 'row');
        yield "
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">PRESTATAIRE
                                <span class=\"col-pink\">*</span></label>

                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1043
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formpresta"]) || array_key_exists("formpresta", $context) ? $context["formpresta"] : (function () { throw new RuntimeError('Variable "formpresta" does not exist.', 1043, $this->source); })()), "fournisseur", [], "any", false, false, false, 1043), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">Titre</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1053
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formpresta"]) || array_key_exists("formpresta", $context) ? $context["formpresta"] : (function () { throw new RuntimeError('Variable "formpresta" does not exist.', 1053, $this->source); })()), "fonction", [], "any", false, false, false, 1053), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">CONTACTS</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1061
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formpresta"]) || array_key_exists("formpresta", $context) ? $context["formpresta"] : (function () { throw new RuntimeError('Variable "formpresta" does not exist.', 1061, $this->source); })()), "mobile", [], "any", false, false, false, 1061), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">E-MAIL</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1071
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formpresta"]) || array_key_exists("formpresta", $context) ? $context["formpresta"] : (function () { throw new RuntimeError('Variable "formpresta" does not exist.', 1071, $this->source); })()), "mail", [], "any", false, false, false, 1071), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">ADRESSE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1079
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formpresta"]) || array_key_exists("formpresta", $context) ? $context["formpresta"] : (function () { throw new RuntimeError('Variable "formpresta" does not exist.', 1079, $this->source); })()), "adresse", [], "any", false, false, false, 1079), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        ";
        // line 1085
        if ((($tmp = (isset($context["editPresta"]) || array_key_exists("editPresta", $context) ? $context["editPresta"] : (function () { throw new RuntimeError('Variable "editPresta" does not exist.', 1085, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1086
            yield "                            <input type=\"submit\" id=\"updatePresta\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect text-white bg-green\">
                        ";
        } else {
            // line 1089
            yield "                            <input type=\"submit\" id=\"addPresta\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-pri\">
                        ";
        }
        // line 1092
        yield "
                        <div type=\"button\" id=\"closePresta\" class=\"btn btn-link waves-effect text-white bg-pink\"
                             data-dismiss=\"modal\">FERMER
                        </div>
                        <img src=\"";
        // line 1096
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadPresta\">
                    </div>
                    ";
        // line 1099
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formfourn"]) || array_key_exists("formfourn", $context) ? $context["formfourn"] : (function () { throw new RuntimeError('Variable "formfourn" does not exist.', 1099, $this->source); })()), 'form_end');
        yield "

                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalBonPresta\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-blue col-white\">
                <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">BON PRESTATAIRE</h4>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    ";
        // line 1115
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1115, $this->source); })()), 'form_start', ["attr" => ["id" => "addBonPrestaForm"]]);
        yield "
                    <input type=\"hidden\" name=\"token\" value=\"";
        // line 1116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addBonPrestaToken"), "html", null, true);
        yield "\"/>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">CHANTIER</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1122
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1122, $this->source); })()), "chantier", [], "any", false, false, false, 1122), 'widget', ["id" => "sechane", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DEVIS
                                <span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group\">
                                <div class=\"form-line col-pink\">
                                    <select class=\"form-control seldevis\" name=\"devis\"></select>
                                </div>
                                <p class=\"h6 didev\" style=\"margin-top:5px !important\"></p>
                            </div>

                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">PRESTATAIRE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1146
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1146, $this->source); })()), "fournisseur", [], "any", false, false, false, 1146), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">RÉFÉRENCE OU OBJET<span
                                        class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1158
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1158, $this->source); })()), "bonreference", [], "any", false, false, false, 1158), 'widget', ["id" => "editor7", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">DEVISE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1169
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1169, $this->source); })()), "monnaie", [], "any", false, false, false, 1169), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">TVA(%)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1177
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1177, $this->source); })()), "tva", [], "any", false, false, false, 1177), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">APPLIQUER LA TVA?</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1187
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1187, $this->source); })()), "ptva", [], "any", false, false, false, 1187), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">BON AVEC REMISE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1195
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1195, $this->source); })()), "aarem", [], "any", false, false, false, 1195), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">COLONNE RÉFÉRENCE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1205
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1205, $this->source); })()), "aaref", [], "any", false, false, false, 1205), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">DATE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1213
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1213, $this->source); })()), "date", [], "any", false, false, false, 1213), 'widget', ["attr" => ["class" => "form-control datepicker"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">INFORMATIONS SUR LE BON</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1223
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1223, $this->source); })()), "conditions", [], "any", false, false, false, 1223), 'widget', ["id" => "editor8", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"addBonPresta\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect col-white bg-blue\">
                        <div type=\"button\" id=\"closeBonPresta\" class=\"btn btn-link waves-effect col-white bg-pink\"
                             data-dismiss=\"modal\">
                            FERMER
                        </div>
                        <img src=\"";
        // line 1235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadBonPresta\"></div>
                    <br>
                    <br>
                    <br>
                    ";
        // line 1240
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1240, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalBonFourn\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-blue col-white\">
                <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">BON FOURNISSEUR</h4>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    ";
        // line 1255
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formeBon"]) || array_key_exists("formeBon", $context) ? $context["formeBon"] : (function () { throw new RuntimeError('Variable "formeBon" does not exist.', 1255, $this->source); })()), 'form_start', ["attr" => ["id" => "addBonFournForm"]]);
        yield "
                    <input type=\"hidden\" name=\"token\" value=\"";
        // line 1256
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addBonFournToken"), "html", null, true);
        yield "\"/>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">TYPE DE BON</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1262
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeBon"]) || array_key_exists("formeBon", $context) ? $context["formeBon"] : (function () { throw new RuntimeError('Variable "formeBon" does not exist.', 1262, $this->source); })()), "type", [], "any", false, false, false, 1262), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                                <p class=\"h6 cocon\"></p>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">CHANTIER</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1273
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeBon"]) || array_key_exists("formeBon", $context) ? $context["formeBon"] : (function () { throw new RuntimeError('Variable "formeBon" does not exist.', 1273, $this->source); })()), "chantier", [], "any", false, false, false, 1273), 'widget', ["id" => "secha", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DEVIS
                                <span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group\">
                                <div class=\"form-line col-pink\">
                                    <select class=\"form-control seldev\" name=\"devis\"></select>
                                </div>
                                <p class=\"h6 dide\" style=\"margin-top:5px !important\"></p>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">BON DE SUIVI</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1294
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeBon"]) || array_key_exists("formeBon", $context) ? $context["formeBon"] : (function () { throw new RuntimeError('Variable "formeBon" does not exist.', 1294, $this->source); })()), "preparation", [], "any", false, false, false, 1294), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">FOURNISSEUR</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1304
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeBon"]) || array_key_exists("formeBon", $context) ? $context["formeBon"] : (function () { throw new RuntimeError('Variable "formeBon" does not exist.', 1304, $this->source); })()), "fournisseur", [], "any", false, false, false, 1304), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">RÉFÉRENCE OU OBJET<span
                                        class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1317
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeBon"]) || array_key_exists("formeBon", $context) ? $context["formeBon"] : (function () { throw new RuntimeError('Variable "formeBon" does not exist.', 1317, $this->source); })()), "bonreference", [], "any", false, false, false, 1317), 'widget', ["id" => "editor9", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">DEVISE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1328
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeBon"]) || array_key_exists("formeBon", $context) ? $context["formeBon"] : (function () { throw new RuntimeError('Variable "formeBon" does not exist.', 1328, $this->source); })()), "monnaie", [], "any", false, false, false, 1328), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">TVA(%)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1336
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeBon"]) || array_key_exists("formeBon", $context) ? $context["formeBon"] : (function () { throw new RuntimeError('Variable "formeBon" does not exist.', 1336, $this->source); })()), "tva", [], "any", false, false, false, 1336), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">APPLIQUER LA TVA?</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1346
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeBon"]) || array_key_exists("formeBon", $context) ? $context["formeBon"] : (function () { throw new RuntimeError('Variable "formeBon" does not exist.', 1346, $this->source); })()), "ptva", [], "any", false, false, false, 1346), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">BON AVEC REMISE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1354
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeBon"]) || array_key_exists("formeBon", $context) ? $context["formeBon"] : (function () { throw new RuntimeError('Variable "formeBon" does not exist.', 1354, $this->source); })()), "aarem", [], "any", false, false, false, 1354), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">COLONNE RÉFÉRENCE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1364
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeBon"]) || array_key_exists("formeBon", $context) ? $context["formeBon"] : (function () { throw new RuntimeError('Variable "formeBon" does not exist.', 1364, $this->source); })()), "aaref", [], "any", false, false, false, 1364), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">DATE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1372
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeBon"]) || array_key_exists("formeBon", $context) ? $context["formeBon"] : (function () { throw new RuntimeError('Variable "formeBon" does not exist.', 1372, $this->source); })()), "date", [], "any", false, false, false, 1372), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">MODÈLE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1382
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeBon"]) || array_key_exists("formeBon", $context) ? $context["formeBon"] : (function () { throw new RuntimeError('Variable "formeBon" does not exist.', 1382, $this->source); })()), "modele", [], "any", false, false, false, 1382), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">AVEC LIGNE TVA</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1390
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeBon"]) || array_key_exists("formeBon", $context) ? $context["formeBon"] : (function () { throw new RuntimeError('Variable "formeBon" does not exist.', 1390, $this->source); })()), "model", [], "any", false, false, false, 1390), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">INFORMATIONS SUR LE BON</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1400
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeBon"]) || array_key_exists("formeBon", $context) ? $context["formeBon"] : (function () { throw new RuntimeError('Variable "formeBon" does not exist.', 1400, $this->source); })()), "conditions", [], "any", false, false, false, 1400), 'widget', ["id" => "editor10", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"addBonFourn\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect col-white bg-blue\">
                        <div type=\"button\" id=\"closeBonFourn\" class=\"btn btn-link waves-effect col-white bg-pink\"
                             data-dismiss=\"modal\">
                            FERMER
                        </div>
                        <img src=\"";
        // line 1412
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadBonFourn\"></div>
                    <br>
                    <br>
                    <br>
                    ";
        // line 1417
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formeBon"]) || array_key_exists("formeBon", $context) ? $context["formeBon"] : (function () { throw new RuntimeError('Variable "formeBon" does not exist.', 1417, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalRegleBon\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-teal text-white\">
                <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">AJOUTER UN RÈGLEMENT SUR BON</h4>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    ";
        // line 1432
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formRegleBon"]) || array_key_exists("formRegleBon", $context) ? $context["formRegleBon"] : (function () { throw new RuntimeError('Variable "formRegleBon" does not exist.', 1432, $this->source); })()), 'form_start', ["attr" => ["id" => "addformRegleBonForm"]]);
        yield "
                    <input type=\"hidden\" name=\"token\" value=\"";
        // line 1433
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addformRegleBonToken"), "html", null, true);
        yield "\"/>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">FOURNISSEUR<span
                                        class=\"col-red\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1440
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formRegleBon"]) || array_key_exists("formRegleBon", $context) ? $context["formRegleBon"] : (function () { throw new RuntimeError('Variable "formRegleBon" does not exist.', 1440, $this->source); })()), "fournisseur", [], "any", false, false, false, 1440), 'widget', ["attr" => ["class" => "form-control ploc"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">BON VALIDÉS
                                <span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group\">
                                <div class=\"form-line col-pink\">
                                    <select class=\"form-control selbon\" name=\"bon\"></select>
                                </div>
                                <p class=\"h6 dibon\" style=\"margin-top:5px !important\"></p>
                            </div>

                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">PAIE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1464
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formRegleBon"]) || array_key_exists("formRegleBon", $context) ? $context["formRegleBon"] : (function () { throw new RuntimeError('Variable "formRegleBon" does not exist.', 1464, $this->source); })()), "paie", [], "any", false, false, false, 1464), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"addRegleBon\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect text-white bg-teal\">
                        <div type=\"button\" id=\"closeRegleBon\" class=\"btn btn-link waves-effect text-white bg-pink\"
                             data-dismiss=\"modal\">
                            FERMER
                        </div>
                        <img src=\"";
        // line 1476
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadRegleBon\">
                    </div>
                    <br><br><br>
                    ";
        // line 1480
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formRegleBon"]) || array_key_exists("formRegleBon", $context) ? $context["formRegleBon"] : (function () { throw new RuntimeError('Variable "formRegleBon" does not exist.', 1480, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalCaisse\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-blue col-white\">
                <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">BON DE CAISSE</h4>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    ";
        // line 1495
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1495, $this->source); })()), 'form_start', ["attr" => ["id" => "addCaisseForm"]]);
        yield "
                    <input type=\"hidden\" name=\"token\" value=\"";
        // line 1496
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addCaisseToken"), "html", null, true);
        yield "\"/>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">FOURNISSEURS D'ARTICLES ET PRESTATAIRES<span
                                        class=\"col-red\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1503
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1503, $this->source); })()), "fournisseur", [], "any", false, false, false, 1503), 'widget', ["id" => "sefone", "attr" => ["class" => "form-control ploc"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">BON VALIDÉS
                                <span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group\">
                                <div class=\"form-line col-pink\">
                                    <select class=\"form-control selbon\" name=\"bon\"></select>
                                </div>
                                <p class=\"h6 dibon\" style=\"margin-top:5px !important\"></p>
                            </div>

                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-7\">
                            <label class=\"form-label m-b--30 col-blue bolo\">POINTS DE PAIE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1527
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1527, $this->source); })()), "paie", [], "any", false, false, false, 1527), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-5\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DATE<span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1536
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1536, $this->source); })()), "date", [], "any", false, false, false, 1536), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">MOYEN DE PAIEMENT</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1546
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1546, $this->source); })()), "moyen", [], "any", false, false, false, 1546), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
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
        // line 1556
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1556, $this->source); })()), "monnaie", [], "any", false, false, false, 1556), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">TYPE D'OPÉRATION</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1564
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1564, $this->source); })()), "operation", [], "any", false, false, false, 1564), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE<span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1575
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1575, $this->source); })()), "caissereference", [], "any", false, false, false, 1575), 'widget', ["id" => "editor15", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"addeCaisse\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect col-white bg-blue\">
                        <div type=\"button\" id=\"closeCaisse\" class=\"btn btn-link waves-effect col-white bg-pink\"
                             data-dismiss=\"modal\">
                            FERMER
                        </div>
                        <img src=\"";
        // line 1587
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadCaisse\"></div>
                    <br>
                    <br>
                    <br>
                    ";
        // line 1592
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1592, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalReglement\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-blue col-white\">
                <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">AJOUTER UN RÈGLEMENT</h4>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    ";
        // line 1607
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formeRegle"]) || array_key_exists("formeRegle", $context) ? $context["formeRegle"] : (function () { throw new RuntimeError('Variable "formeRegle" does not exist.', 1607, $this->source); })()), 'form_start', ["attr" => ["id" => "addReglementForm"]]);
        yield "
                    <input type=\"hidden\" name=\"token\" value=\"";
        // line 1608
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addReglementToken"), "html", null, true);
        yield "\"/>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">FACTURES NON VALIDÉES</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    <select id=\"facfac\" name=\"facfac\" class=\"form-control\">
                                        <option value=\"\" disabled selected>Faites votre choix</option>
                                        ";
        // line 1616
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 1616, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 1617
            yield "                                            ";
            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 1617)) && (null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 1617)))) {
                // line 1618
                yield "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 1618));
                foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                    // line 1619
                    yield "                                                    ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 1619))) {
                        // line 1620
                        yield "                                                        ";
                        $context["tt"] = 0;
                        // line 1621
                        yield "
                                                        ";
                        // line 1622
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "factures", [], "any", false, false, false, 1622));
                        foreach ($context['_seq'] as $context["_key"] => $context["fac"]) {
                            // line 1623
                            yield "                                                            ";
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "etat", [], "any", false, false, false, 1623) == "save") && (null === CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "corbeille", [], "any", false, false, false, 1623)))) {
                                // line 1624
                                yield "                                                                ";
                                $context["tt"] = ((isset($context["tt"]) || array_key_exists("tt", $context) ? $context["tt"] : (function () { throw new RuntimeError('Variable "tt" does not exist.', 1624, $this->source); })()) + 1);
                                // line 1625
                                yield "                                                            ";
                            }
                            // line 1626
                            yield "                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['fac'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1627
                        yield "
                                                        ";
                        // line 1628
                        if (((isset($context["tt"]) || array_key_exists("tt", $context) ? $context["tt"] : (function () { throw new RuntimeError('Variable "tt" does not exist.', 1628, $this->source); })()) > 0)) {
                            // line 1629
                            yield "                                                            <optgroup
                                                                    label=\"";
                            // line 1630
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 1630)), "html", null, true);
                            yield " | ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 1630)), "html", null, true);
                            yield "\">
                                                                ";
                            // line 1631
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "factures", [], "any", false, false, false, 1631));
                            foreach ($context['_seq'] as $context["_key"] => $context["fac"]) {
                                // line 1632
                                yield "                                                                    ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "etat", [], "any", false, false, false, 1632) == "save")) {
                                    // line 1633
                                    yield "                                                                        <option value=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "id", [], "any", false, false, false, 1633), "html", null, true);
                                    yield "\"
                                                                                class=\"";
                                    // line 1634
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "id", [], "any", false, false, false, 1634), "html", null, true);
                                    yield "\">FACTURE
                                                                            Nº";
                                    // line 1635
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "numfacture", [], "any", false, false, false, 1635), "html", null, true);
                                    yield "</option>
                                                                    ";
                                }
                                // line 1637
                                yield "                                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['fac'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 1638
                            yield "                                                            </optgroup>
                                                        ";
                        }
                        // line 1640
                        yield "
                                                    ";
                    }
                    // line 1642
                    yield "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1643
                yield "                                            ";
            }
            // line 1644
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1645
        yield "                                    </select>
                                </div>
                                <p class=\"h6 dvfac\"></p>
                                <p class=\"h6 dvface\"></p>
                                <p class=\"h6 dvfaces\"></p>
                                <p class=\"h6 resta hide\"></p>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">MONTANT<span
                                        class=\"col-red\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1660
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeRegle"]) || array_key_exists("formeRegle", $context) ? $context["formeRegle"] : (function () { throw new RuntimeError('Variable "formeRegle" does not exist.', 1660, $this->source); })()), "montant", [], "any", false, false, false, 1660), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                                <p class=\"h6 restu col-pink\"></p>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">MOYEN DE PAIEMENTS</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1671
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeRegle"]) || array_key_exists("formeRegle", $context) ? $context["formeRegle"] : (function () { throw new RuntimeError('Variable "formeRegle" does not exist.', 1671, $this->source); })()), "moyen", [], "any", false, false, false, 1671), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"addReglementChantiers\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect col-white bg-blue\">
                        <div type=\"button\" id=\"closeReglement\" class=\"btn btn-link waves-effect col-white bg-pink\"
                             data-dismiss=\"modal\">
                            FERMER
                        </div>
                        <img src=\"";
        // line 1683
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadReglement\">
                    </div>
                    <br><br><br>
                    ";
        // line 1687
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formeRegle"]) || array_key_exists("formeRegle", $context) ? $context["formeRegle"] : (function () { throw new RuntimeError('Variable "formeRegle" does not exist.', 1687, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade right\" id=\"modalInterne\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            ";
        // line 1698
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 1698, $this->source); })()), "id", [], "any", false, false, false, 1698))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1699
            yield "                <div class=\"modal-header bg-green col-white p-l-20\">
                    <h4 class=\"modal-title\" id=\"defaultModalLabel\">MODIFIER UNE CHARGE INTERNE</h4>
                </div>
            ";
        } else {
            // line 1703
            yield "                <div class=\"modal-header bg-pri col-white p-l-20\">
                    <h4 class=\"modal-title\" id=\"defaultModalLabel\">AJOUTER UNE CHARGE INTERNE</h4>
                </div>
            ";
        }
        // line 1707
        yield "            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    ";
        // line 1709
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formInterne"]) || array_key_exists("formInterne", $context) ? $context["formInterne"] : (function () { throw new RuntimeError('Variable "formInterne" does not exist.', 1709, $this->source); })()), 'form_start', ["attr" => ["id" => "addInterForm"]]);
        yield "
                    ";
        // line 1710
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formInterne"]) || array_key_exists("formInterne", $context) ? $context["formInterne"] : (function () { throw new RuntimeError('Variable "formInterne" does not exist.', 1710, $this->source); })()), "_token", [], "any", false, false, false, 1710), 'row');
        yield "
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">CHARGE INTERNE<span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group\">
                                <div class=\"form-line col-pink\">
                                    ";
        // line 1717
        if ((($tmp = (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 1717, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1718
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formInterne"]) || array_key_exists("formInterne", $context) ? $context["formInterne"] : (function () { throw new RuntimeError('Variable "formInterne" does not exist.', 1718, $this->source); })()), "noms", [], "any", false, false, false, 1718), 'widget', ["required" => "required", "attr" => ["class" => "form-control "]]);
            yield "
                                    ";
        } else {
            // line 1720
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formInterne"]) || array_key_exists("formInterne", $context) ? $context["formInterne"] : (function () { throw new RuntimeError('Variable "formInterne" does not exist.', 1720, $this->source); })()), "noms", [], "any", false, false, false, 1720), 'widget', ["required" => "required", "attr" => ["class" => "form-control"]]);
            yield "
                                    ";
        }
        // line 1722
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        ";
        // line 1727
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 1727, $this->source); })()), "id", [], "any", false, false, false, 1727))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1728
            yield "                            <input type=\"submit\" id=\"updInter\" value=\"MODIFIER\" class=\"btn btn-link waves-effect col-white bg-green\">
                        ";
        } else {
            // line 1730
            yield "                            <input type=\"submit\" id=\"addInter\" value=\"ENREGISTRER\" class=\"btn btn-link waves-effect col-white bg-blue\">
                        ";
        }
        // line 1732
        yield "
                        <a href=\"";
        // line 1733
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etat");
        yield "\" id=\"closeInter\"
                           class=\"btn btn-link waves-effect col-white bg-pink\">
                            FERMER
                        </a>
                        <img src=\"";
        // line 1737
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadInter\"></div>
                    <br>
                    <br>
                    <br>
                    ";
        // line 1742
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formInterne"]) || array_key_exists("formInterne", $context) ? $context["formInterne"] : (function () { throw new RuntimeError('Variable "formInterne" does not exist.', 1742, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalPerso\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            ";
        // line 1752
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 1752, $this->source); })()), "id", [], "any", false, false, false, 1752))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1753
            yield "                <div class=\"modal-header bg-green col-white p-l-20\">
                    <h4 class=\"modal-title\" id=\"defaultModalLabel\">MODIFIER UN PERSONNEL</h4>
                </div>
            ";
        } else {
            // line 1757
            yield "                <div class=\"modal-header bg-pri col-white p-l-20\">
                    <h4 class=\"modal-title\" id=\"defaultModalLabel\">AJOUTER UN PERSONNEL</h4>
                </div>
            ";
        }
        // line 1761
        yield "            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    ";
        // line 1763
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 1763, $this->source); })()), 'form_start', ["attr" => ["id" => "addPersonnelForm"]]);
        yield "
                    ";
        // line 1764
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 1764, $this->source); })()), "_token", [], "any", false, false, false, 1764), 'row');
        yield "
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">NOM & PRÉNOMS<span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group\">
                                <div class=\"form-line col-pink\">
                                    ";
        // line 1771
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 1771, $this->source); })()), "id", [], "any", false, false, false, 1771))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1772
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 1772, $this->source); })()), "noms", [], "any", false, false, false, 1772), 'widget', ["attr" => ["class" => "form-control col-pink "]]);
            yield "
                                    ";
        } else {
            // line 1774
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 1774, $this->source); })()), "noms", [], "any", false, false, false, 1774), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                    ";
        }
        // line 1776
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">SERVICE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line col-pink\">
                                    ";
        // line 1785
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 1785, $this->source); })()), "id", [], "any", false, false, false, 1785))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1786
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 1786, $this->source); })()), "service", [], "any", false, false, false, 1786), 'widget', ["attr" => ["class" => "form-control col-pink "]]);
            yield "
                                    ";
        } else {
            // line 1788
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 1788, $this->source); })()), "service", [], "any", false, false, false, 1788), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                    ";
        }
        // line 1790
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">FONCTION</label>
                            <div class=\"form-group\">
                                <div class=\"form-line col-pink\">
                                    ";
        // line 1799
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 1799, $this->source); })()), "id", [], "any", false, false, false, 1799))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1800
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 1800, $this->source); })()), "fonction", [], "any", false, false, false, 1800), 'widget', ["required" => "", "attr" => ["class" => "form-control col-pink "]]);
            yield "
                                    ";
        } else {
            // line 1802
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 1802, $this->source); })()), "fonction", [], "any", false, false, false, 1802), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
            yield "
                                    ";
        }
        // line 1804
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">TYPE DE CONTRAT</label>
                            <div class=\"form-group\">
                                <div class=\"form-line col-pink\">
                                    ";
        // line 1813
        if ((($tmp = (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 1813, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1814
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 1814, $this->source); })()), "contrat", [], "any", false, false, false, 1814), 'widget', ["attr" => ["class" => "form-control col-pink "]]);
            yield "
                                    ";
        } else {
            // line 1816
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 1816, $this->source); })()), "contrat", [], "any", false, false, false, 1816), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                    ";
        }
        // line 1818
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">EMAIL</label>
                            <div class=\"form-group\">
                                <div class=\"form-line col-pink\">
                                    ";
        // line 1827
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 1827, $this->source); })()), "id", [], "any", false, false, false, 1827))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1828
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 1828, $this->source); })()), "mail", [], "any", false, false, false, 1828), 'widget', ["attr" => ["class" => "form-control col-pink "]]);
            yield "
                                    ";
        } else {
            // line 1830
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 1830, $this->source); })()), "mail", [], "any", false, false, false, 1830), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                    ";
        }
        // line 1832
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">CONTACTS</label>
                            <div class=\"form-group\">
                                <div class=\"form-line col-pink\">
                                    ";
        // line 1841
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 1841, $this->source); })()), "id", [], "any", false, false, false, 1841))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1842
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 1842, $this->source); })()), "contact", [], "any", false, false, false, 1842), 'widget', ["attr" => ["class" => "form-control col-pink "]]);
            yield "
                                    ";
        } else {
            // line 1844
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 1844, $this->source); })()), "contact", [], "any", false, false, false, 1844), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                    ";
        }
        // line 1846
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        ";
        // line 1851
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 1851, $this->source); })()), "id", [], "any", false, false, false, 1851))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1852
            yield "                            <input type=\"submit\" id=\"updatePers\" value=\"MODIFIER\" class=\"btn btn-link waves-effect col-white bg-green\">
                        ";
        } else {
            // line 1854
            yield "                            <input type=\"submit\" id=\"addPers\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect col-white bg-blue\">
                        ";
        }
        // line 1857
        yield "
                        <a href=\"";
        // line 1858
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etat");
        yield "\" id=\"closePers\" class=\"btn btn-link waves-effect col-white bg-pink\">FERMER</a>
                        <img src=\"";
        // line 1859
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadPers\"></div>
                    <br>
                    ";
        // line 1862
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 1862, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalCaisseCharge\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-blue col-white\">
                <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">BON DE CAISSE CHARGE INTERNE</h4>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    ";
        // line 1877
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCaisseCharge"]) || array_key_exists("formCaisseCharge", $context) ? $context["formCaisseCharge"] : (function () { throw new RuntimeError('Variable "formCaisseCharge" does not exist.', 1877, $this->source); })()), 'form_start', ["attr" => ["id" => "addCaisseChargeForm"]]);
        yield "
                    ";
        // line 1878
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisseCharge"]) || array_key_exists("formCaisseCharge", $context) ? $context["formCaisseCharge"] : (function () { throw new RuntimeError('Variable "formCaisseCharge" does not exist.', 1878, $this->source); })()), "_token", [], "any", false, false, false, 1878), 'row');
        yield "
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-4\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DATE<span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1885
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisseCharge"]) || array_key_exists("formCaisseCharge", $context) ? $context["formCaisseCharge"] : (function () { throw new RuntimeError('Variable "formCaisseCharge" does not exist.', 1885, $this->source); })()), "date", [], "any", false, false, false, 1885), 'widget', ["required" => "", "attr" => ["class" => "form-control datepicker"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-8\">
                            <label class=\"form-label m-b--30 col-blue bolo\">POINTS DE PAIE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1893
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisseCharge"]) || array_key_exists("formCaisseCharge", $context) ? $context["formCaisseCharge"] : (function () { throw new RuntimeError('Variable "formCaisseCharge" does not exist.', 1893, $this->source); })()), "paie", [], "any", false, false, false, 1893), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">MOYEN DE PAIEMENT</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1903
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisseCharge"]) || array_key_exists("formCaisseCharge", $context) ? $context["formCaisseCharge"] : (function () { throw new RuntimeError('Variable "formCaisseCharge" does not exist.', 1903, $this->source); })()), "moyen", [], "any", false, false, false, 1903), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">CHARGE INTERNE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1913
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisseCharge"]) || array_key_exists("formCaisseCharge", $context) ? $context["formCaisseCharge"] : (function () { throw new RuntimeError('Variable "formCaisseCharge" does not exist.', 1913, $this->source); })()), "personnel", [], "any", false, false, false, 1913), 'widget', ["required" => "required", "attr" => ["class" => "form-control"]]);
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
        // line 1923
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisseCharge"]) || array_key_exists("formCaisseCharge", $context) ? $context["formCaisseCharge"] : (function () { throw new RuntimeError('Variable "formCaisseCharge" does not exist.', 1923, $this->source); })()), "monnaie", [], "any", false, false, false, 1923), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">TYPE D'OPÉRATION</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1931
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisseCharge"]) || array_key_exists("formCaisseCharge", $context) ? $context["formCaisseCharge"] : (function () { throw new RuntimeError('Variable "formCaisseCharge" does not exist.', 1931, $this->source); })()), "operation", [], "any", false, false, false, 1931), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE<span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1942
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisseCharge"]) || array_key_exists("formCaisseCharge", $context) ? $context["formCaisseCharge"] : (function () { throw new RuntimeError('Variable "formCaisseCharge" does not exist.', 1942, $this->source); })()), "caissereference", [], "any", false, false, false, 1942), 'widget', ["id" => "editor19", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"adderCaisse\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect col-white bg-blue\">
                        <div type=\"button\" id=\"closerCaisse\" class=\"btn btn-link waves-effect col-white bg-pink\"
                             data-dismiss=\"modal\">FERMER
                        </div>
                        <img src=\"";
        // line 1953
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loaderCaisse\"></div>
                    <br>
                    <br>
                    <br>
                    ";
        // line 1958
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCaisseCharge"]) || array_key_exists("formCaisseCharge", $context) ? $context["formCaisseCharge"] : (function () { throw new RuntimeError('Variable "formCaisseCharge" does not exist.', 1958, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalCaissePerso\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-blue col-white\">
                <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">BON DE CAISSE POUR LE PERSONNEL</h4>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    ";
        // line 1973
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 1973, $this->source); })()), 'form_start', ["attr" => ["id" => "addCaissePersonnelForm"]]);
        yield "
                    ";
        // line 1974
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 1974, $this->source); })()), "_token", [], "any", false, false, false, 1974), 'row');
        yield "
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-4\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DATE<span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1981
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 1981, $this->source); })()), "date", [], "any", false, false, false, 1981), 'widget', ["required" => "", "attr" => ["class" => "form-control datepicker"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-8\">
                            <label class=\"form-label m-b--30 col-blue bolo\">POINTS DE PAIE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1989
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 1989, $this->source); })()), "paie", [], "any", false, false, false, 1989), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">MOYEN DE PAIEMENT</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1999
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 1999, $this->source); })()), "moyen", [], "any", false, false, false, 1999), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">LE PERSONNEL</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 2009
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 2009, $this->source); })()), "personnel", [], "any", false, false, false, 2009), 'widget', ["required" => "required", "attr" => ["class" => "form-control"]]);
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
        // line 2019
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 2019, $this->source); })()), "monnaie", [], "any", false, false, false, 2019), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">TYPE D'OPÉRATION</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 2027
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 2027, $this->source); })()), "operation", [], "any", false, false, false, 2027), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">POUR</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 2037
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 2037, $this->source); })()), "genre", [], "any", false, false, false, 2037), 'widget', ["required" => "required", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE<span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 2048
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 2048, $this->source); })()), "caissereference", [], "any", false, false, false, 2048), 'widget', ["id" => "editor20", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"adderCaissePersonnel\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect col-white bg-blue\">
                        <div type=\"button\" id=\"closerCaissePersonnel\"
                             class=\"btn btn-link waves-effect col-white bg-pink\"
                             data-dismiss=\"modal\">FERMER
                        </div>
                        <img src=\"";
        // line 2060
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loaderCaissePersonnel\"></div>
                    <br>
                    <br>
                    <br>
                    ";
        // line 2065
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 2065, $this->source); })()), 'form_end');
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

<section class=\"content\" style=\"margin-top: -20px !important;\">
    <div class=\"container-fluid\">
        <div class=\"block-header\">
            <div class=\"row clearfix m-t-50\">
                <div class=\"col-sm-12 \">
                    <h3 class=\"bolo700\">Bonjour ";
        // line 2088
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2088, $this->source); })()), "user", [], "any", false, false, false, 2088), "prenoms", [], "any", false, false, false, 2088)), "html", null, true);
        yield " !</h3>
                    <h4 class=\"bolo700 col-deep-orange\">Gestion des comptes</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"content\" id=\"setchantier\"></section>
<script>
    localStorage.setItem('reloadd', 'etat');
</script>

";
        // line 2100
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("apetats");
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
        return "content/etat.html.twig";
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
        return array (  3132 => 2100,  3117 => 2088,  3091 => 2065,  3083 => 2060,  3068 => 2048,  3054 => 2037,  3041 => 2027,  3030 => 2019,  3017 => 2009,  3004 => 1999,  2991 => 1989,  2980 => 1981,  2970 => 1974,  2966 => 1973,  2948 => 1958,  2940 => 1953,  2926 => 1942,  2912 => 1931,  2901 => 1923,  2888 => 1913,  2875 => 1903,  2862 => 1893,  2851 => 1885,  2841 => 1878,  2837 => 1877,  2819 => 1862,  2813 => 1859,  2809 => 1858,  2806 => 1857,  2801 => 1854,  2797 => 1852,  2795 => 1851,  2788 => 1846,  2782 => 1844,  2776 => 1842,  2774 => 1841,  2763 => 1832,  2757 => 1830,  2751 => 1828,  2749 => 1827,  2738 => 1818,  2732 => 1816,  2726 => 1814,  2724 => 1813,  2713 => 1804,  2707 => 1802,  2701 => 1800,  2699 => 1799,  2688 => 1790,  2682 => 1788,  2676 => 1786,  2674 => 1785,  2663 => 1776,  2657 => 1774,  2651 => 1772,  2649 => 1771,  2639 => 1764,  2635 => 1763,  2631 => 1761,  2625 => 1757,  2619 => 1753,  2617 => 1752,  2604 => 1742,  2596 => 1737,  2589 => 1733,  2586 => 1732,  2582 => 1730,  2578 => 1728,  2576 => 1727,  2569 => 1722,  2563 => 1720,  2557 => 1718,  2555 => 1717,  2545 => 1710,  2541 => 1709,  2537 => 1707,  2531 => 1703,  2525 => 1699,  2523 => 1698,  2509 => 1687,  2502 => 1683,  2487 => 1671,  2473 => 1660,  2456 => 1645,  2450 => 1644,  2447 => 1643,  2441 => 1642,  2437 => 1640,  2433 => 1638,  2427 => 1637,  2422 => 1635,  2418 => 1634,  2413 => 1633,  2410 => 1632,  2406 => 1631,  2400 => 1630,  2397 => 1629,  2395 => 1628,  2392 => 1627,  2386 => 1626,  2383 => 1625,  2380 => 1624,  2377 => 1623,  2373 => 1622,  2370 => 1621,  2367 => 1620,  2364 => 1619,  2359 => 1618,  2356 => 1617,  2352 => 1616,  2341 => 1608,  2337 => 1607,  2319 => 1592,  2311 => 1587,  2296 => 1575,  2282 => 1564,  2271 => 1556,  2258 => 1546,  2245 => 1536,  2233 => 1527,  2206 => 1503,  2196 => 1496,  2192 => 1495,  2174 => 1480,  2167 => 1476,  2152 => 1464,  2125 => 1440,  2115 => 1433,  2111 => 1432,  2093 => 1417,  2085 => 1412,  2070 => 1400,  2057 => 1390,  2046 => 1382,  2033 => 1372,  2022 => 1364,  2009 => 1354,  1998 => 1346,  1985 => 1336,  1974 => 1328,  1960 => 1317,  1944 => 1304,  1931 => 1294,  1907 => 1273,  1893 => 1262,  1884 => 1256,  1880 => 1255,  1862 => 1240,  1854 => 1235,  1839 => 1223,  1826 => 1213,  1815 => 1205,  1802 => 1195,  1791 => 1187,  1778 => 1177,  1767 => 1169,  1753 => 1158,  1738 => 1146,  1711 => 1122,  1702 => 1116,  1698 => 1115,  1679 => 1099,  1673 => 1096,  1667 => 1092,  1662 => 1089,  1657 => 1086,  1655 => 1085,  1646 => 1079,  1635 => 1071,  1622 => 1061,  1611 => 1053,  1598 => 1043,  1587 => 1035,  1583 => 1034,  1578 => 1031,  1570 => 1025,  1562 => 1019,  1560 => 1018,  1547 => 1008,  1541 => 1005,  1535 => 1001,  1530 => 998,  1525 => 995,  1523 => 994,  1514 => 988,  1501 => 978,  1490 => 970,  1477 => 960,  1466 => 952,  1462 => 951,  1457 => 948,  1449 => 942,  1441 => 936,  1439 => 935,  1425 => 924,  1419 => 921,  1389 => 894,  1376 => 884,  1361 => 872,  1348 => 862,  1335 => 852,  1322 => 842,  1309 => 832,  1296 => 822,  1286 => 815,  1282 => 814,  1257 => 792,  1250 => 788,  1221 => 762,  1208 => 752,  1195 => 742,  1182 => 732,  1172 => 725,  1168 => 724,  1147 => 706,  1143 => 705,  1139 => 704,  1135 => 703,  1131 => 702,  1127 => 701,  1122 => 699,  1118 => 698,  1114 => 697,  1110 => 696,  1106 => 695,  1102 => 694,  1098 => 693,  1094 => 692,  1090 => 691,  1086 => 690,  1082 => 689,  1078 => 688,  1070 => 682,  1067 => 681,  1060 => 679,  1057 => 678,  1054 => 677,  1052 => 676,  1049 => 675,  1043 => 674,  1040 => 673,  1037 => 672,  1035 => 671,  1028 => 667,  1023 => 666,  1021 => 664,  1020 => 661,  1016 => 659,  1008 => 654,  1003 => 652,  999 => 651,  994 => 648,  991 => 647,  988 => 646,  985 => 645,  980 => 644,  972 => 638,  970 => 637,  967 => 636,  964 => 635,  961 => 634,  958 => 633,  953 => 632,  950 => 631,  948 => 630,  938 => 622,  935 => 621,  928 => 619,  925 => 618,  922 => 617,  920 => 616,  917 => 615,  911 => 614,  908 => 613,  905 => 612,  903 => 611,  896 => 607,  891 => 606,  889 => 604,  888 => 601,  884 => 599,  876 => 594,  871 => 592,  867 => 591,  862 => 588,  859 => 587,  856 => 586,  853 => 585,  848 => 584,  840 => 578,  838 => 577,  835 => 576,  832 => 575,  829 => 574,  826 => 573,  821 => 572,  818 => 571,  816 => 570,  807 => 563,  803 => 561,  794 => 556,  785 => 551,  783 => 550,  779 => 548,  770 => 543,  761 => 538,  759 => 537,  755 => 535,  746 => 530,  737 => 525,  735 => 524,  731 => 522,  722 => 517,  713 => 512,  711 => 511,  707 => 509,  698 => 504,  689 => 499,  687 => 498,  683 => 496,  674 => 491,  665 => 486,  663 => 485,  659 => 483,  650 => 478,  641 => 473,  639 => 472,  635 => 470,  626 => 465,  617 => 460,  615 => 459,  611 => 457,  602 => 452,  593 => 447,  591 => 446,  587 => 444,  578 => 439,  569 => 434,  567 => 433,  563 => 431,  554 => 426,  545 => 421,  543 => 420,  540 => 419,  538 => 418,  529 => 412,  525 => 410,  516 => 405,  507 => 400,  505 => 399,  497 => 394,  482 => 381,  473 => 374,  464 => 368,  459 => 365,  447 => 359,  439 => 356,  434 => 354,  429 => 351,  425 => 350,  402 => 329,  399 => 328,  397 => 327,  394 => 326,  391 => 325,  385 => 322,  381 => 321,  378 => 320,  375 => 319,  373 => 318,  73 => 21,  69 => 20,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>États des comptes | Carlinbleu</title>
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

    <link href=\"{{ asset('css/chat.css') }}\" rel=\"stylesheet\"/>
    {{ encore_entry_link_tags('apetats') }}

</head>

<body class=\"theme-red\" style=\"background-color: #d1d3e2 !important;\" id=\"bod\">
<div class=\"page-loader-wrapper\">
    <div class=\"loader\">
        <div class=\"preloader\">
            <div class=\"spinner-layer pl-red\">
                <div class=\"circle-clipper left\">
                    <div class=\"circle\"></div>
                </div>
                <div class=\"circle-clipper right\">
                    <div class=\"circle\"></div>
                </div>
            </div>
        </div>
        <p> Téléchargement de vos données...</p>
    </div>
</div>
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
            <div class=\"modal-body\">
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
    body {
        font-size: 16px;
        font-family: Verdana, sans-serif;
    }

    table {
        border-collapse: collapse;
    }

    th, td {
        box-sizing: border-box;
        border: 1px solid #e9eae8;
        padding: 8px 20px;
    }

    th {
        cursor: pointer;
    }

</style>
<style>
    p {
        margin: 0 !important
    }

    .upper {
        text-transform: uppercase !important;
    }

    td.borde {
        border-spacing: 0;
        border-collapse: collapse;
        border: solid #D3D3D3;
        border-width: 1px 1px 1px 1px !important;
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
                        <a href=\"{{ path('welcomel') }}\" class=\"bolo\">
                            <i class=\"material-icons text-white\">home</i>
                            <span class=\"text-white\">Accueil</span>
                        </a>
                    {% endif %}
                </li>
                <li class=\"active\">
                    <a href=\"{{ path('content') }}\" class=\"bolo\">
                        <i class=\"material-icons col-white\">add_shopping_cart</i>
                        <span class=\"col-white\">SHOWROOMS</span>
                    </a>
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
                                <span class=\"col-yellow\">MES ARTICLES</span>
                            </a>
                        {% else %}
                            <a href=\"{{ path('article') }}\" class=\"bolo\">
                                <i class=\"material-icons text-white\">content_copy</i>
                                <span class=\"text-white\">Mes articles</span>
                            </a>
                        {% endif %}
                    </li>
                    <li class=\"active\">
                        {% if page is defined and page == 'etat' %}
                            <a href=\"{{ path('etat') }}\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">swap_horiz</i>
                                <span class=\"col-yellow\">GESTION DES ÉTATS</span>
                            </a>
                        {% else %}
                            <a href=\"{{ path('etat') }}\" class=\"bolo\">
                                <i class=\"material-icons text-white\">swap_horiz</i>
                                <span class=\"text-white\">Gestion des états</span>
                            </a>
                        {% endif %}
                    </li>
                    <li class=\"active\">
                        {% if page is defined and page == 'comptable' %}
                            <a href=\"{{ path('chantiers') }}\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">widgets</i>
                                <span class=\"col-yellow\">GESTION DES CHANTIERS</span>
                            </a>
                        {% else %}
                            <a href=\"{{ path('chantiers') }}\">
                                <i class=\"material-icons text-white\">widgets</i>
                                <span class=\"text-white\">Gestion des chantiers</span>
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
                                                                   class=\"text-white\" title=\"{{ client.nomclient|upper }}\">
                                                                    -
                                                                    {{ client.nomclient|upper }}
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
                                                                   class=\"text-white\" title=\"{{ client.nomclient|upper }}\">
                                                                    -
                                                                    {{ client.nomclient|upper }}
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

<input type=\"text\" class=\"hide\" id=\"jsonclients\" value=\"{{ jsonclients }}\">
<input type=\"text\" class=\"hide\" id=\"jsonprestas\" value=\"{{ jsonprestas }}\">
<input type=\"text\" class=\"hide\" id=\"jsonfournes\" value=\"{{ jsonfournes }}\">
<input type=\"text\" class=\"hide\" id=\"jsonpersos\" value=\"{{ jsonpersos }}\">
<input type=\"text\" class=\"hide\" id=\"caisseinterne\" value=\"{{ caisseinterne }}\">
<input type=\"text\" class=\"hide\" id=\"caisseperso\" value=\"{{ caisseperso }}\">
<input type=\"text\" class=\"hide\" id=\"fournes\" value=\"{{ aa }}\">
<input type=\"text\" class=\"hide\" id=\"prestas\" value=\"{{ bb }}\">
<input type=\"text\" class=\"hide\" id=\"sumDepense\" value=\"{{ sumDepense }}\">
<input type=\"text\" class=\"hide\" id=\"sumRegle\" value=\"{{ sumRegle }}\">
<input type=\"text\" class=\"hide\" id=\"moshow\" value=\"{{ moshow }}\">
<input type=\"text\" class=\"hide\" id=\"idperson\" value=\"{{ person.id }}\">

<input type=\"text\" class=\"hide\" id=\"jsondevis\" value=\"{{ jsondev }}\">
<input type=\"text\" class=\"hide\" id=\"jsonbon\" value=\"{{ jsonbon }}\">
<input type=\"text\" class=\"hide\" id=\"jsoncaisse\" value=\"{{ jsoncaisse }}\">
<input type=\"text\" class=\"hide\" id=\"jsondec\" value=\"{{ jsondec }}\">
<input type=\"text\" class=\"hide\" id=\"jsonfac\" value=\"{{ jsonfac }}\">
<input type=\"text\" class=\"hide\" id=\"jsoninventes\" value=\"{{ jsoninventes }}\">

<div class=\"modal fade right\" id=\"modalClient\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header col-white bg-green p-l-20 hide\" id=\"clfa\">
                <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                    <i class=\"icofont-minus-circle icofont-1x\"></i>
                    MODIFIER UN CLIENT</h3>
            </div>
            <div class=\"modal-header col-white bg-pri p-l-20\" id=\"clfb\">
                <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                    <i class=\"icofont-plus-circle icofont-1x\"></i>
                    AJOUTER UN CLIENT</h3>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    {{ form_start(formClient, {'attr': {'id':'addClientForm' }}) }}
                    {{ form_row(formClient._token) }}
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label pri bolo\">CLIENT<span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    {{ form_widget(formClient.nomclient,{'attr':{'class':'form-control cls' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label pri bolo\">ADRESSE</label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    {{ form_widget(formClient.adresse,{'attr':{'class':'form-control cls' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label pri bolo\">CONTACTS</label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    {{ form_widget(formClient.contact,{'attr':{'class':'form-control cls' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label pri bolo\">COMPTE CONTRIBUABLE</label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    {{ form_widget(formClient.contribuable,{'attr':{'class':'form-control cls' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"text-center hide\" id=\"divClienter\">
                        <input type=\"submit\" id=\"updateClient\" value=\"MODIFIER\"
                               class=\"btn btn-link waves-effect col-white bg-green\"/>
                        <div type=\"button\" id=\"closeClient\" class=\"btn btn-link waves-effect col-white bg-pink\"
                             data-dismiss=\"modal\">
                            ANNULER
                        </div>
                    </div>


                    <div class=\"text-center\" id=\"divClient\">
                        <input type=\"submit\" id=\"addClient\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect col-white bg-pri\">
                        <div type=\"button\" id=\"closeClient\" class=\"btn btn-link waves-effect col-white bg-pink\"
                             data-dismiss=\"modal\">
                            FERMER
                        </div>
                    </div>

                    <div class=\"text-center\">
                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadClient\"/>
                    </div>
                </div>
                {{ form_end(formClient) }}
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalChantier\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header col-white bg-green p-l-20 hide\" id=\"chfa\">
                <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                    <i class=\"icofont-minus-circle icofont-1x\"></i>
                    MODIFIER UN CHANTIER</h3>
            </div>

            <div class=\"modal-header col-white bg-pri p-l-20\" id=\"chfb\">
                <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                    <i class=\"icofont-plus-circle icofont-1x\"></i>
                    AJOUTER UN CHANTIER</h3>
            </div>

            <div class=\"modal-body m-t-10 bien\">
                {{ form_start(formChantier, {'attr': {'id':'addChantierForm' }}) }}
                <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addChantierToken') }}\"/>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label pri bolo\">CLIENT<span class=\"col-red\">*</span>
                        </label>
                        <div class=\"form-group m-t--5\">
                            <div class=\"form-line\">
                                {{ form_widget(formChantier.client,{'attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label pri bolo\">NOM DU CHANTIER<span class=\"col-red\">*</span></label>
                        <div class=\"form-group m-t--5\">
                            <div class=\"form-line\">
                                {{ form_widget(formChantier.nomchantier,{'attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label pri bolo\">RÉFÉRENCE CONTRAT</label>
                        <div class=\"form-group m-t--5\">
                            <div class=\"form-line\">
                                {{ form_widget(formChantier.contrat,{'attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label pri bolo\">SITUATION GÉOGRAPHIQUE</label>
                        <div class=\"form-group m-t--5\">
                            <div class=\"form-line\">
                                {{ form_widget(formChantier.localisation,{'attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label pri bolo\">SOUS-CHANTIER DU CHANTIER</label>
                        <div class=\"form-group m-t--5\">
                            <div class=\"form-line\">
                                {{ form_widget(formChantier.sous,{'required':'','attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label pri bolo\">DESCRIPTION</label>
                        <div class=\"form-group m-t--5\">
                            <div class=\"form-line\">
                                {{ form_widget(formChantier.description,{'required':'','id':'editor','attr':{'class':'form-control chr'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">

                    <div class=\"col-sm-6\">
                        <div class=\"form-group m-t--5\">
                            <label class=\"form-label pri bolo\">DÉBUTE LE</label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    {{ form_widget(formChantier.ddebut,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <div class=\"form-group m-t--5\">
                            <label class=\"form-label pri bolo\">TERMINE LE</label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    {{ form_widget(formChantier.dfin,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class=\"text-center hide\" id=\"divChantiere\">
                    <input type=\"submit\" id=\"updateChr\" value=\"MODIFIER\"
                           class=\"btn btn-link waves-effect col-white bg-green\">
                    <div type=\"button\" id=\"closeChantier\" class=\"btn btn-link waves-effect col-white bg-pink\"
                         data-dismiss=\"modal\">
                        ANNULER
                    </div>
                </div>

                <div class=\"text-center\" id=\"divChantier\">
                    <input type=\"submit\" id=\"addChantier\" value=\"ENREGISTRER\"
                           class=\"btn btn-link waves-effect col-white bg-pri\">
                    <div type=\"button\" id=\"closeChantier\" class=\"btn btn-link waves-effect col-white bg-pink\"
                         data-dismiss=\"modal\">
                        FERMER
                    </div>
                </div>

                <div class=\"text-center\">
                    <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadChantier\"></div>

                {{ form_end(formChantier) }}

            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalFournisseur\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            {% if editFourn %}
                <div class=\"p-5 bg-green\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">MODIFIER UN FOURNISSEUR</h4>
                    </div>
                </div>
            {% else %}
                <div class=\"p-5 bg-pri\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">AJOUTER UN FOURNISSEUR</h4>
                    </div>
                </div>
            {% endif %}
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">

                    {{ form_start(formfourn, {'attr': {'id': 'addFournisseurForm'}}) }}
                    {{ form_row(formfourn._token) }}
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">FOURNISSEUR
                                <span class=\"col-pink\">*</span></label>

                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formfourn.fournisseur,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">CONTACTS</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formfourn.mobile,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">E-MAIL</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formfourn.mail,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">ADRESSE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formfourn.adresse,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        {% if editFourn %}
                            <input type=\"submit\" id=\"updateFourn\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect text-white bg-green\">
                        {% else %}
                            <input type=\"submit\" id=\"addFourn\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-pri\">
                        {% endif %}

                        <div type=\"button\" id=\"closeFourn\" class=\"btn btn-link waves-effect text-white bg-pink\"
                             data-dismiss=\"modal\">FERMER
                        </div>
                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadFourn\">
                    </div>
                    {{ form_end(formfourn) }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalPrestataire\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            {% if editPresta %}
                <div class=\"p-5 bg-green\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">MODIFIER UN PRESTATAIRE</h4>
                    </div>
                </div>
            {% else %}
                <div class=\"p-5 bg-pri\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">AJOUTER UN PRESTATAIRE</h4>
                    </div>
                </div>
            {% endif %}
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">

                    {{ form_start(formpresta, {'attr': {'id': 'addPrestataireForm'}}) }}
                    {{ form_row(formpresta._token) }}
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">PRESTATAIRE
                                <span class=\"col-pink\">*</span></label>

                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formpresta.fournisseur,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">Titre</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formpresta.fonction,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">CONTACTS</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formpresta.mobile,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">E-MAIL</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formpresta.mail,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">ADRESSE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formpresta.adresse,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        {% if editPresta %}
                            <input type=\"submit\" id=\"updatePresta\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect text-white bg-green\">
                        {% else %}
                            <input type=\"submit\" id=\"addPresta\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-pri\">
                        {% endif %}

                        <div type=\"button\" id=\"closePresta\" class=\"btn btn-link waves-effect text-white bg-pink\"
                             data-dismiss=\"modal\">FERMER
                        </div>
                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadPresta\">
                    </div>
                    {{ form_end(formfourn) }}

                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalBonPresta\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-blue col-white\">
                <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">BON PRESTATAIRE</h4>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    {{ form_start(formBon, {'attr': {'id': 'addBonPrestaForm' }}) }}
                    <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addBonPrestaToken') }}\"/>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">CHANTIER</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formBon.chantier,{'id':'sechane','attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DEVIS
                                <span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group\">
                                <div class=\"form-line col-pink\">
                                    <select class=\"form-control seldevis\" name=\"devis\"></select>
                                </div>
                                <p class=\"h6 didev\" style=\"margin-top:5px !important\"></p>
                            </div>

                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">PRESTATAIRE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formBon.fournisseur,{'required':'','attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">RÉFÉRENCE OU OBJET<span
                                        class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formBon.bonreference,{'id': 'editor7','attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">DEVISE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formBon.monnaie,{'attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">TVA(%)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formBon.tva,{'attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">APPLIQUER LA TVA?</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formBon.ptva,{'attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">BON AVEC REMISE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formBon.aarem,{'attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">COLONNE RÉFÉRENCE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formBon.aaref,{'attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">DATE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formBon.date,{'attr':{'class':'form-control datepicker' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">INFORMATIONS SUR LE BON</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formBon.conditions,{'id': 'editor8','attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"addBonPresta\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect col-white bg-blue\">
                        <div type=\"button\" id=\"closeBonPresta\" class=\"btn btn-link waves-effect col-white bg-pink\"
                             data-dismiss=\"modal\">
                            FERMER
                        </div>
                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadBonPresta\"></div>
                    <br>
                    <br>
                    <br>
                    {{ form_end(formBon) }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalBonFourn\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-blue col-white\">
                <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">BON FOURNISSEUR</h4>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    {{ form_start(formeBon, {'attr': {'id': 'addBonFournForm' }}) }}
                    <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addBonFournToken') }}\"/>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">TYPE DE BON</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formeBon.type,{'attr':{'class':'form-control' }}) }}
                                </div>
                                <p class=\"h6 cocon\"></p>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">CHANTIER</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formeBon.chantier,{'id':'secha','attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DEVIS
                                <span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group\">
                                <div class=\"form-line col-pink\">
                                    <select class=\"form-control seldev\" name=\"devis\"></select>
                                </div>
                                <p class=\"h6 dide\" style=\"margin-top:5px !important\"></p>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">BON DE SUIVI</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formeBon.preparation,{'required':'','attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">FOURNISSEUR</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formeBon.fournisseur,{'required':'','attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">RÉFÉRENCE OU OBJET<span
                                        class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formeBon.bonreference,{'id': 'editor9','attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">DEVISE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formeBon.monnaie,{'attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">TVA(%)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formeBon.tva,{'attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">APPLIQUER LA TVA?</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formeBon.ptva,{'attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">BON AVEC REMISE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formeBon.aarem,{'attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">COLONNE RÉFÉRENCE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formeBon.aaref,{'attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">DATE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formeBon.date,{'attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">MODÈLE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formeBon.modele,{'attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">AVEC LIGNE TVA</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formeBon.model,{'attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">INFORMATIONS SUR LE BON</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formeBon.conditions,{'id': 'editor10','attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"addBonFourn\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect col-white bg-blue\">
                        <div type=\"button\" id=\"closeBonFourn\" class=\"btn btn-link waves-effect col-white bg-pink\"
                             data-dismiss=\"modal\">
                            FERMER
                        </div>
                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadBonFourn\"></div>
                    <br>
                    <br>
                    <br>
                    {{ form_end(formeBon) }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalRegleBon\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-teal text-white\">
                <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">AJOUTER UN RÈGLEMENT SUR BON</h4>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    {{ form_start(formRegleBon, {'attr': {'id': 'addformRegleBonForm'}}) }}
                    <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addformRegleBonToken') }}\"/>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">FOURNISSEUR<span
                                        class=\"col-red\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formRegleBon.fournisseur,{'attr':{'class':'form-control ploc'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">BON VALIDÉS
                                <span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group\">
                                <div class=\"form-line col-pink\">
                                    <select class=\"form-control selbon\" name=\"bon\"></select>
                                </div>
                                <p class=\"h6 dibon\" style=\"margin-top:5px !important\"></p>
                            </div>

                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">PAIE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formRegleBon.paie,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"addRegleBon\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect text-white bg-teal\">
                        <div type=\"button\" id=\"closeRegleBon\" class=\"btn btn-link waves-effect text-white bg-pink\"
                             data-dismiss=\"modal\">
                            FERMER
                        </div>
                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadRegleBon\">
                    </div>
                    <br><br><br>
                    {{ form_end(formRegleBon) }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalCaisse\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-blue col-white\">
                <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">BON DE CAISSE</h4>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    {{ form_start(formCaisse, {'attr': {'id': 'addCaisseForm' }}) }}
                    <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addCaisseToken') }}\"/>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">FOURNISSEURS D'ARTICLES ET PRESTATAIRES<span
                                        class=\"col-red\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formCaisse.fournisseur,{'id':'sefone','attr':{'class':'form-control ploc'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">BON VALIDÉS
                                <span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group\">
                                <div class=\"form-line col-pink\">
                                    <select class=\"form-control selbon\" name=\"bon\"></select>
                                </div>
                                <p class=\"h6 dibon\" style=\"margin-top:5px !important\"></p>
                            </div>

                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-7\">
                            <label class=\"form-label m-b--30 col-blue bolo\">POINTS DE PAIE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formCaisse.paie,{'required':'','attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-5\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DATE<span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formCaisse.date,{'attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">MOYEN DE PAIEMENT</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formCaisse.moyen,{'required':'','attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DEVISE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formCaisse.monnaie,{'attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">TYPE D'OPÉRATION</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formCaisse.operation,{'attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE<span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formCaisse.caissereference,{'id':'editor15','attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"addeCaisse\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect col-white bg-blue\">
                        <div type=\"button\" id=\"closeCaisse\" class=\"btn btn-link waves-effect col-white bg-pink\"
                             data-dismiss=\"modal\">
                            FERMER
                        </div>
                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadCaisse\"></div>
                    <br>
                    <br>
                    <br>
                    {{ form_end(formCaisse) }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalReglement\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-blue col-white\">
                <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">AJOUTER UN RÈGLEMENT</h4>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    {{ form_start(formeRegle, {'attr': {'id': 'addReglementForm'}}) }}
                    <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addReglementToken') }}\"/>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">FACTURES NON VALIDÉES</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    <select id=\"facfac\" name=\"facfac\" class=\"form-control\">
                                        <option value=\"\" disabled selected>Faites votre choix</option>
                                        {% for client in clients %}
                                            {% if client.corbeille is null and client.type is null %}
                                                {% for chantier in client.chantiers %}
                                                    {% if chantier.corbeille is null %}
                                                        {% set tt = 0 %}

                                                        {% for fac in chantier.factures %}
                                                            {% if fac.etat == \"save\" and fac.corbeille is null %}
                                                                {% set tt = tt + 1 %}
                                                            {% endif %}
                                                        {% endfor %}

                                                        {% if  tt > 0 %}
                                                            <optgroup
                                                                    label=\"{{ client.nomclient|upper }} | {{ chantier.nomchantier|upper }}\">
                                                                {% for fac in chantier.factures %}
                                                                    {% if fac.etat == \"save\" %}
                                                                        <option value=\"{{ fac.id }}\"
                                                                                class=\"{{ fac.id }}\">FACTURE
                                                                            Nº{{ fac.numfacture }}</option>
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
                                <p class=\"h6 dvfac\"></p>
                                <p class=\"h6 dvface\"></p>
                                <p class=\"h6 dvfaces\"></p>
                                <p class=\"h6 resta hide\"></p>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">MONTANT<span
                                        class=\"col-red\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formeRegle.montant,{'attr':{'class':'form-control'}}) }}
                                </div>
                                <p class=\"h6 restu col-pink\"></p>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">MOYEN DE PAIEMENTS</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formeRegle.moyen,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"addReglementChantiers\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect col-white bg-blue\">
                        <div type=\"button\" id=\"closeReglement\" class=\"btn btn-link waves-effect col-white bg-pink\"
                             data-dismiss=\"modal\">
                            FERMER
                        </div>
                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadReglement\">
                    </div>
                    <br><br><br>
                    {{ form_end(formeRegle) }}
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade right\" id=\"modalInterne\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            {% if person.id is not null %}
                <div class=\"modal-header bg-green col-white p-l-20\">
                    <h4 class=\"modal-title\" id=\"defaultModalLabel\">MODIFIER UNE CHARGE INTERNE</h4>
                </div>
            {% else %}
                <div class=\"modal-header bg-pri col-white p-l-20\">
                    <h4 class=\"modal-title\" id=\"defaultModalLabel\">AJOUTER UNE CHARGE INTERNE</h4>
                </div>
            {% endif %}
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    {{ form_start(formInterne, {'attr': {'id':'addInterForm' }}) }}
                    {{ form_row(formInterne._token) }}
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">CHARGE INTERNE<span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group\">
                                <div class=\"form-line col-pink\">
                                    {% if person %}
                                        {{ form_widget(formInterne.noms,{'required':'required','attr':{'class':'form-control ' }}) }}
                                    {% else %}
                                        {{ form_widget(formInterne.noms,{'required':'required','attr':{'class':'form-control' }}) }}
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        {% if person.id is not null %}
                            <input type=\"submit\" id=\"updInter\" value=\"MODIFIER\" class=\"btn btn-link waves-effect col-white bg-green\">
                        {% else %}
                            <input type=\"submit\" id=\"addInter\" value=\"ENREGISTRER\" class=\"btn btn-link waves-effect col-white bg-blue\">
                        {% endif %}

                        <a href=\"{{ path('etat') }}\" id=\"closeInter\"
                           class=\"btn btn-link waves-effect col-white bg-pink\">
                            FERMER
                        </a>
                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadInter\"></div>
                    <br>
                    <br>
                    <br>
                    {{ form_end(formInterne) }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalPerso\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            {% if person.id is not null %}
                <div class=\"modal-header bg-green col-white p-l-20\">
                    <h4 class=\"modal-title\" id=\"defaultModalLabel\">MODIFIER UN PERSONNEL</h4>
                </div>
            {% else %}
                <div class=\"modal-header bg-pri col-white p-l-20\">
                    <h4 class=\"modal-title\" id=\"defaultModalLabel\">AJOUTER UN PERSONNEL</h4>
                </div>
            {% endif %}
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    {{ form_start(formPersonnel, {'attr': {'id':'addPersonnelForm' }}) }}
                    {{ form_row(formPersonnel._token) }}
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">NOM & PRÉNOMS<span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group\">
                                <div class=\"form-line col-pink\">
                                    {% if person.id is not null %}
                                        {{ form_widget(formPersonnel.noms,{'attr':{'class':'form-control col-pink ' }}) }}
                                    {% else %}
                                        {{ form_widget(formPersonnel.noms,{'attr':{'class':'form-control' }}) }}
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">SERVICE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line col-pink\">
                                    {% if person.id is not null %}
                                        {{ form_widget(formPersonnel.service,{'attr':{'class':'form-control col-pink ' }}) }}
                                    {% else %}
                                        {{ form_widget(formPersonnel.service,{'attr':{'class':'form-control' }}) }}
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">FONCTION</label>
                            <div class=\"form-group\">
                                <div class=\"form-line col-pink\">
                                    {% if person.id is not null %}
                                        {{ form_widget(formPersonnel.fonction,{'required':'','attr':{'class':'form-control col-pink ' }}) }}
                                    {% else %}
                                        {{ form_widget(formPersonnel.fonction,{'required':'','attr':{'class':'form-control' }}) }}
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">TYPE DE CONTRAT</label>
                            <div class=\"form-group\">
                                <div class=\"form-line col-pink\">
                                    {% if person %}
                                        {{ form_widget(formPersonnel.contrat,{'attr':{'class':'form-control col-pink ' }}) }}
                                    {% else %}
                                        {{ form_widget(formPersonnel.contrat,{'attr':{'class':'form-control' }}) }}
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">EMAIL</label>
                            <div class=\"form-group\">
                                <div class=\"form-line col-pink\">
                                    {% if person.id is not null %}
                                        {{ form_widget(formPersonnel.mail,{'attr':{'class':'form-control col-pink ' }}) }}
                                    {% else %}
                                        {{ form_widget(formPersonnel.mail,{'attr':{'class':'form-control' }}) }}
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">CONTACTS</label>
                            <div class=\"form-group\">
                                <div class=\"form-line col-pink\">
                                    {% if person.id is not null %}
                                        {{ form_widget(formPersonnel.contact,{'attr':{'class':'form-control col-pink ' }}) }}
                                    {% else %}
                                        {{ form_widget(formPersonnel.contact,{'attr':{'class':'form-control' }}) }}
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        {% if person.id is not null %}
                            <input type=\"submit\" id=\"updatePers\" value=\"MODIFIER\" class=\"btn btn-link waves-effect col-white bg-green\">
                        {% else %}
                            <input type=\"submit\" id=\"addPers\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect col-white bg-blue\">
                        {% endif %}

                        <a href=\"{{ path('etat') }}\" id=\"closePers\" class=\"btn btn-link waves-effect col-white bg-pink\">FERMER</a>
                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadPers\"></div>
                    <br>
                    {{ form_end(formPersonnel) }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalCaisseCharge\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-blue col-white\">
                <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">BON DE CAISSE CHARGE INTERNE</h4>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    {{ form_start(formCaisseCharge, {'attr': {'id': 'addCaisseChargeForm' }}) }}
                    {{ form_row(formCaisseCharge._token) }}
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-4\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DATE<span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formCaisseCharge.date,{'required':'','attr':{'class':'form-control datepicker' }}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-8\">
                            <label class=\"form-label m-b--30 col-blue bolo\">POINTS DE PAIE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formCaisseCharge.paie,{'required':'','attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">MOYEN DE PAIEMENT</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formCaisseCharge.moyen,{'required':'','attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">CHARGE INTERNE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formCaisseCharge.personnel,{'required':'required','attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DEVISE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formCaisseCharge.monnaie,{'attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">TYPE D'OPÉRATION</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formCaisseCharge.operation,{'attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE<span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formCaisseCharge.caissereference,{'id':'editor19','attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"adderCaisse\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect col-white bg-blue\">
                        <div type=\"button\" id=\"closerCaisse\" class=\"btn btn-link waves-effect col-white bg-pink\"
                             data-dismiss=\"modal\">FERMER
                        </div>
                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loaderCaisse\"></div>
                    <br>
                    <br>
                    <br>
                    {{ form_end(formCaisseCharge) }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalCaissePerso\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-blue col-white\">
                <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">BON DE CAISSE POUR LE PERSONNEL</h4>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    {{ form_start(formCaissePerso, {'attr': {'id': 'addCaissePersonnelForm' }}) }}
                    {{ form_row(formCaissePerso._token) }}
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-4\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DATE<span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formCaissePerso.date,{'required':'','attr':{'class':'form-control datepicker' }}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-8\">
                            <label class=\"form-label m-b--30 col-blue bolo\">POINTS DE PAIE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formCaissePerso.paie,{'required':'','attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">MOYEN DE PAIEMENT</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formCaissePerso.moyen,{'required':'','attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">LE PERSONNEL</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formCaissePerso.personnel,{'required':'required','attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DEVISE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formCaissePerso.monnaie,{'attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">TYPE D'OPÉRATION</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formCaissePerso.operation,{'attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">POUR</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formCaissePerso.genre,{'required':'required','attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE<span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formCaissePerso.caissereference,{'id':'editor20','attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"adderCaissePersonnel\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect col-white bg-blue\">
                        <div type=\"button\" id=\"closerCaissePersonnel\"
                             class=\"btn btn-link waves-effect col-white bg-pink\"
                             data-dismiss=\"modal\">FERMER
                        </div>
                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loaderCaissePersonnel\"></div>
                    <br>
                    <br>
                    <br>
                    {{ form_end(formCaissePerso) }}
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

<section class=\"content\" style=\"margin-top: -20px !important;\">
    <div class=\"container-fluid\">
        <div class=\"block-header\">
            <div class=\"row clearfix m-t-50\">
                <div class=\"col-sm-12 \">
                    <h3 class=\"bolo700\">Bonjour {{ app.user.prenoms|capitalize }} !</h3>
                    <h4 class=\"bolo700 col-deep-orange\">Gestion des comptes</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"content\" id=\"setchantier\"></section>
<script>
    localStorage.setItem('reloadd', 'etat');
</script>

{{ encore_entry_script_tags('apetats') }}

</body>
</html>


", "content/etat.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\etat.html.twig");
    }
}
