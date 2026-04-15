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

/* content/listefournisseurs.html.twig */
class __TwigTemplate_66bedac97ae83b19351423d7702a5452 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/listefournisseurs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/listefournisseurs.html.twig"));

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
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("apfournisseurs");
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
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("welcome");
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


<input type=\"text\" class=\"hide\" id=\"jsonfournes\" value=\"";
        // line 689
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["jsonfournes"]) || array_key_exists("jsonfournes", $context) ? $context["jsonfournes"] : (function () { throw new RuntimeError('Variable "jsonfournes" does not exist.', 689, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"fournes\" value=\"";
        // line 690
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["aa"]) || array_key_exists("aa", $context) ? $context["aa"] : (function () { throw new RuntimeError('Variable "aa" does not exist.', 690, $this->source); })()), "html", null, true);
        yield "\">

<div class=\"modal fade right\" id=\"modalFournisseur\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            ";
        // line 697
        if ((($tmp = (isset($context["editFourn"]) || array_key_exists("editFourn", $context) ? $context["editFourn"] : (function () { throw new RuntimeError('Variable "editFourn" does not exist.', 697, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 698
            yield "                <div class=\"p-5 bg-green\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">MODIFIER UN FOURNISSEUR</h4>
                    </div>
                </div>
            ";
        } else {
            // line 704
            yield "                <div class=\"p-5 bg-pri\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">AJOUTER UN FOURNISSEUR</h4>
                    </div>
                </div>
            ";
        }
        // line 710
        yield "            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">

                    ";
        // line 713
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formfourn"]) || array_key_exists("formfourn", $context) ? $context["formfourn"] : (function () { throw new RuntimeError('Variable "formfourn" does not exist.', 713, $this->source); })()), 'form_start', ["attr" => ["id" => "addFournisseurForm"]]);
        yield "
                    ";
        // line 714
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formfourn"]) || array_key_exists("formfourn", $context) ? $context["formfourn"] : (function () { throw new RuntimeError('Variable "formfourn" does not exist.', 714, $this->source); })()), "_token", [], "any", false, false, false, 714), 'row');
        yield "
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo h5\">Fournisseur
                                <span class=\"col-pink\">*</span></label>

                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 722
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formfourn"]) || array_key_exists("formfourn", $context) ? $context["formfourn"] : (function () { throw new RuntimeError('Variable "formfourn" does not exist.', 722, $this->source); })()), "fournisseur", [], "any", false, false, false, 722), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo h5\">Contacts</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 732
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formfourn"]) || array_key_exists("formfourn", $context) ? $context["formfourn"] : (function () { throw new RuntimeError('Variable "formfourn" does not exist.', 732, $this->source); })()), "mobile", [], "any", false, false, false, 732), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo h5\">E-mail</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 740
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formfourn"]) || array_key_exists("formfourn", $context) ? $context["formfourn"] : (function () { throw new RuntimeError('Variable "formfourn" does not exist.', 740, $this->source); })()), "mail", [], "any", false, false, false, 740), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo h5\">Adresse</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 750
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formfourn"]) || array_key_exists("formfourn", $context) ? $context["formfourn"] : (function () { throw new RuntimeError('Variable "formfourn" does not exist.', 750, $this->source); })()), "adresse", [], "any", false, false, false, 750), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        ";
        // line 756
        if ((($tmp = (isset($context["editFourn"]) || array_key_exists("editFourn", $context) ? $context["editFourn"] : (function () { throw new RuntimeError('Variable "editFourn" does not exist.', 756, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 757
            yield "                            <input type=\"submit\" id=\"updateFourn\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect text-white bg-green\">
                        ";
        } else {
            // line 760
            yield "                            <input type=\"submit\" id=\"addFourn\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-pri\">
                        ";
        }
        // line 763
        yield "
                        <div type=\"button\" id=\"closeFourn\" class=\"btn btn-link waves-effect text-white bg-pink\"
                             data-dismiss=\"modal\">FERMER
                        </div>
                        <img src=\"";
        // line 767
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadFourn\">
                    </div>
                    ";
        // line 770
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formfourn"]) || array_key_exists("formfourn", $context) ? $context["formfourn"] : (function () { throw new RuntimeError('Variable "formfourn" does not exist.', 770, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalBon\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-blue text-white\">
                <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">CRÉER UN BON DE COMMANDE/RETOUR</h4>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    ";
        // line 786
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 786, $this->source); })()), 'form_start', ["attr" => ["id" => "addBonForm"]]);
        yield "
                    ";
        // line 787
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 787, $this->source); })()), "_token", [], "any", false, false, false, 787), 'row');
        yield "
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">N° DE DEVIS <span
                                        class=\"col-red\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 794
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 794, $this->source); })()), "devis", [], "any", false, false, false, 794), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">TYPE DE BON<span
                                        class=\"col-red\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 803
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 803, $this->source); })()), "type", [], "any", false, false, false, 803), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">BON DE SUIVI <span
                                        class=\"col-red\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 814
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 814, $this->source); })()), "preparation", [], "any", false, false, false, 814), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">FOURNISSEUR<span
                                        class=\"col-red\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 823
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 823, $this->source); })()), "fournisseur", [], "any", false, false, false, 823), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE OU OBJET<span
                                        class=\"col-red\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 834
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 834, $this->source); })()), "bonreference", [], "any", false, false, false, 834), 'widget', ["id" => "editor6", "attr" => ["class" => "form-control"]]);
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
        // line 845
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 845, $this->source); })()), "monnaie", [], "any", false, false, false, 845), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">TVA(%)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 853
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 853, $this->source); })()), "tva", [], "any", false, false, false, 853), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">APPLIQUR LA TVA?</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 863
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 863, $this->source); })()), "ptva", [], "any", false, false, false, 863), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">AVEC REMISE ?</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 871
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 871, $this->source); })()), "aarem", [], "any", false, false, false, 871), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 881
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 881, $this->source); })()), "aaref", [], "any", false, false, false, 881), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DATE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 889
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 889, $this->source); })()), "date", [], "any", false, false, false, 889), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">INFORMATIONS SUR LE BON</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 899
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 899, $this->source); })()), "conditions", [], "any", false, false, false, 899), 'widget', ["required" => "", "id" => "editor7", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"addiBon\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect text-white bg-blue\">
                        <div type=\"button\" id=\"closeBon\" class=\"btn btn-link waves-effect text-white bg-pink\"
                             data-dismiss=\"modal\">
                            FERMER
                        </div>
                        <img src=\"";
        // line 911
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadBon\">
                    </div>
                    <br><br><br>
                    ";
        // line 915
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 915, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>

<section class=\"content\" style=\"margin-top: 50px !important;\">
    <div class=\"container-fluid\">
        <div class=\"block-header\">
            <div class=\"row clearfix m-t-50\">
                <div class=\"col-sm-12 \">
                    <h4 class=\"bolo700 col-deep-orange\">FOURNISSEURS D'ARTICLES</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"content\" id=\"setfournisseurs\"></section>
<script>
    localStorage.setItem('reloadd', 'fournisseur');
</script>

";
        // line 938
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("apfournisseurs");
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
        return "content/listefournisseurs.html.twig";
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
        return array (  1420 => 938,  1394 => 915,  1387 => 911,  1372 => 899,  1359 => 889,  1348 => 881,  1335 => 871,  1324 => 863,  1311 => 853,  1300 => 845,  1286 => 834,  1272 => 823,  1260 => 814,  1246 => 803,  1234 => 794,  1224 => 787,  1220 => 786,  1201 => 770,  1195 => 767,  1189 => 763,  1184 => 760,  1179 => 757,  1177 => 756,  1168 => 750,  1155 => 740,  1144 => 732,  1131 => 722,  1120 => 714,  1116 => 713,  1111 => 710,  1103 => 704,  1095 => 698,  1093 => 697,  1083 => 690,  1079 => 689,  1070 => 682,  1067 => 681,  1060 => 679,  1057 => 678,  1054 => 677,  1052 => 676,  1049 => 675,  1043 => 674,  1040 => 673,  1037 => 672,  1035 => 671,  1028 => 667,  1023 => 666,  1021 => 664,  1020 => 661,  1016 => 659,  1008 => 654,  1003 => 652,  999 => 651,  994 => 648,  991 => 647,  988 => 646,  985 => 645,  980 => 644,  972 => 638,  970 => 637,  967 => 636,  964 => 635,  961 => 634,  958 => 633,  953 => 632,  950 => 631,  948 => 630,  938 => 622,  935 => 621,  928 => 619,  925 => 618,  922 => 617,  920 => 616,  917 => 615,  911 => 614,  908 => 613,  905 => 612,  903 => 611,  896 => 607,  891 => 606,  889 => 604,  888 => 601,  884 => 599,  876 => 594,  871 => 592,  867 => 591,  862 => 588,  859 => 587,  856 => 586,  853 => 585,  848 => 584,  840 => 578,  838 => 577,  835 => 576,  832 => 575,  829 => 574,  826 => 573,  821 => 572,  818 => 571,  816 => 570,  807 => 563,  803 => 561,  794 => 556,  785 => 551,  783 => 550,  779 => 548,  770 => 543,  761 => 538,  759 => 537,  755 => 535,  746 => 530,  737 => 525,  735 => 524,  731 => 522,  722 => 517,  713 => 512,  711 => 511,  707 => 509,  698 => 504,  689 => 499,  687 => 498,  683 => 496,  674 => 491,  665 => 486,  663 => 485,  659 => 483,  650 => 478,  641 => 473,  639 => 472,  635 => 470,  626 => 465,  617 => 460,  615 => 459,  611 => 457,  602 => 452,  593 => 447,  591 => 446,  587 => 444,  578 => 439,  569 => 434,  567 => 433,  563 => 431,  554 => 426,  545 => 421,  543 => 420,  540 => 419,  538 => 418,  529 => 412,  525 => 410,  516 => 405,  507 => 400,  505 => 399,  497 => 394,  482 => 381,  473 => 374,  464 => 368,  459 => 365,  447 => 359,  439 => 356,  434 => 354,  429 => 351,  425 => 350,  402 => 329,  399 => 328,  397 => 327,  394 => 326,  391 => 325,  385 => 322,  381 => 321,  378 => 320,  375 => 319,  373 => 318,  73 => 21,  69 => 20,  48 => 1,);
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
    {{ encore_entry_link_tags('apfournisseurs') }}

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
                        <a href=\"{{ path('welcome') }}\" class=\"bolo\">
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


<input type=\"text\" class=\"hide\" id=\"jsonfournes\" value=\"{{ jsonfournes }}\">
<input type=\"text\" class=\"hide\" id=\"fournes\" value=\"{{ aa }}\">

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
                            <label class=\"form-label m-b--30 col-blue bolo h5\">Fournisseur
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
                            <label class=\"form-label m-b--30 col-blue bolo h5\">Contacts</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formfourn.mobile,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo h5\">E-mail</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formfourn.mail,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo h5\">Adresse</label>
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
<div class=\"modal fade right\" id=\"modalBon\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-blue text-white\">
                <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">CRÉER UN BON DE COMMANDE/RETOUR</h4>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    {{ form_start(formBon, {'attr': {'id': 'addBonForm'}}) }}
                    {{ form_row(formBon._token) }}
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">N° DE DEVIS <span
                                        class=\"col-red\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formBon.devis,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">TYPE DE BON<span
                                        class=\"col-red\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formBon.type,{'required':'','attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">BON DE SUIVI <span
                                        class=\"col-red\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formBon.preparation,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">FOURNISSEUR<span
                                        class=\"col-red\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formBon.fournisseur,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE OU OBJET<span
                                        class=\"col-red\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formBon.bonreference,{'id':'editor6','attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DEVISE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formBon.monnaie,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">TVA(%)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formBon.tva,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">APPLIQUR LA TVA?</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formBon.ptva,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">AVEC REMISE ?</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formBon.aarem,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">AVEC COLONNE RÉF?</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formBon.aaref,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DATE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formBon.date,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">INFORMATIONS SUR LE BON</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formBon.conditions,{'required':'','id':'editor7','attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"addiBon\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect text-white bg-blue\">
                        <div type=\"button\" id=\"closeBon\" class=\"btn btn-link waves-effect text-white bg-pink\"
                             data-dismiss=\"modal\">
                            FERMER
                        </div>
                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadBon\">
                    </div>
                    <br><br><br>
                    {{ form_end(formBon) }}
                </div>
            </div>
        </div>
    </div>
</div>

<section class=\"content\" style=\"margin-top: 50px !important;\">
    <div class=\"container-fluid\">
        <div class=\"block-header\">
            <div class=\"row clearfix m-t-50\">
                <div class=\"col-sm-12 \">
                    <h4 class=\"bolo700 col-deep-orange\">FOURNISSEURS D'ARTICLES</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"content\" id=\"setfournisseurs\"></section>
<script>
    localStorage.setItem('reloadd', 'fournisseur');
</script>

{{ encore_entry_script_tags('apfournisseurs') }}

</body>
</html>


", "content/listefournisseurs.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\listefournisseurs.html.twig");
    }
}
