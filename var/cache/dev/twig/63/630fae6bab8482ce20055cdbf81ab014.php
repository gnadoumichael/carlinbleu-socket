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

/* content/caisse.html.twig */
class __TwigTemplate_4dba1786879354be2a9d7625e58bdca6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/caisse.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/caisse.html.twig"));

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
        // line 24
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("apcaisses");
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
        // line 267
        if ((($tmp =  !array_key_exists("libre", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 268
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 268, $this->source); })()), "user", [], "any", false, false, false, 268)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 269
                yield "                        <li class=\"col-yellow h4 bolo600 m-l-20\">
                            ";
                // line 270
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 270, $this->source); })()), "user", [], "any", false, false, false, 270), "nom", [], "any", false, false, false, 270)), "html", null, true);
                yield "
                            ";
                // line 271
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 271, $this->source); })()), "user", [], "any", false, false, false, 271), "prenoms", [], "any", false, false, false, 271)), "html", null, true);
                yield "
                        </li>
                    ";
            }
            // line 274
            yield "                ";
        }
        // line 275
        yield "
                ";
        // line 276
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 276, $this->source); })()), "user", [], "any", false, false, false, 276)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 277
            yield "                    ";
            if (( !array_key_exists("libre", $context) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 277, $this->source); })()), "user", [], "any", false, false, false, 277))) {
                // line 278
                yield "                        <li class=\"hidere\">
                            <a href=\"javascript:void(0);\" data-close=\"true\">
                    <span class=\"js-right-sidebars badge bg-pink\">
                      CHANTIERS EN COURS
                    </span>
                            </a>
                        </li>
                    ";
            }
            // line 286
            yield "                    <li class=\"hidere\">
                        <a data-toggle=\"modal\" data-target=\"#ModalSearch\">
                            <i class=\"material-icons\">search</i>
                        </a>
                    </li>
                ";
        }
        // line 292
        yield "            </ul>
        </div>
    </div>
</nav>
<section>
    <aside id=\"leftsidebar\" class=\"sidebar text-center bg-pri\"
           style=\"z-index: 1000 !important; margin-top: -70px; width: 240px; height: 100%\">
        <div class=\"user-info\" style=\"height: 150px !important;\">
            <img src=\"";
        // line 300
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logoy.png"), "html", null, true);
        yield "\" style=\"float: left; width: 200px !important;margin-top: 10px\"/>
        </div>
        <div class=\"menu\">
            <ul class=\"list\">
                <li class=\"active\">
                    ";
        // line 305
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 305, $this->source); })()) == "page"))) {
            // line 306
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("welcome");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">home</i>
                            <span class=\"col-yellow\">ACCUEIL</span>
                        </a>
                    ";
        } else {
            // line 311
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("welcome");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">home</i>
                            <span class=\"text-white\">Accueil</span>
                        </a>
                    ";
        }
        // line 316
        yield "                </li>
                ";
        // line 317
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 317, $this->source); })()), "user", [], "any", false, false, false, 317)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 318
            yield "                    <li class=\"active\">
                        ";
            // line 319
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 319, $this->source); })()) == "message"))) {
                // line 320
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">email</i>
                                <span class=\"col-yellow\">MESSAGERIE</span>
                            </a>
                        ";
            } else {
                // line 325
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">email</i>
                                <span class=\"text-white\">Messagerie</span>
                            </a>
                        ";
            }
            // line 330
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 332
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 332, $this->source); })()) == "article"))) {
                // line 333
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">content_copy</i>
                                <span class=\"col-yellow\">GESTION DES ARTICLES</span>
                            </a>
                        ";
            } else {
                // line 338
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">content_copy</i>
                                <span class=\"text-white\">Gestion des articles</span>
                            </a>
                        ";
            }
            // line 343
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 345
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 345, $this->source); })()) == "listeclient"))) {
                // line 346
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeclient");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">content_copy</i>
                                <span class=\"col-yellow\">LISTE DES CLIENTS</span>
                            </a>
                        ";
            } else {
                // line 351
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeclient");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">content_copy</i>
                                <span class=\"text-white\">Liste des clients</span>
                            </a>
                        ";
            }
            // line 356
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 358
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 358, $this->source); })()) == "chanetude"))) {
                // line 359
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chanetude");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">content_copy</i>
                                <span class=\"col-yellow\">CHANTIERS EN ÉTUDE</span>
                            </a>
                        ";
            } else {
                // line 364
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chanetude");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">content_copy</i>
                                <span class=\"text-white\">Chantiers en étude</span>
                            </a>
                        ";
            }
            // line 369
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 371
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 371, $this->source); })()) == "chancours"))) {
                // line 372
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chancours");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">widgets</i>
                                <span class=\"col-yellow\">CHANTIERS EN COURS</span>
                            </a>
                        ";
            } else {
                // line 377
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chancours");
                yield "\">
                                <i class=\"material-icons text-white\">widgets</i>
                                <span class=\"text-white\">Chantiers en cours</span>
                            </a>
                        ";
            }
            // line 382
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 384
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 384, $this->source); })()) == "chanechouer"))) {
                // line 385
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chanechouer");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">widgets</i>
                                <span class=\"col-yellow\">CHANTIERS ÉCHOUÉS</span>
                            </a>
                        ";
            } else {
                // line 390
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chanechouer");
                yield "\">
                                <i class=\"material-icons text-white\">widgets</i>
                                <span class=\"text-white\">Chantiers échoués</span>
                            </a>
                        ";
            }
            // line 395
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 397
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 397, $this->source); })()) == "chanclotures"))) {
                // line 398
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chanclotures");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">widgets</i>
                                <span class=\"col-yellow\">CHANTIERS CLÔTURÉS</span>
                            </a>
                        ";
            } else {
                // line 403
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chanclotures");
                yield "\">
                                <i class=\"material-icons text-white\">widgets</i>
                                <span class=\"text-white\">Chantiers clôturés</span>
                            </a>
                        ";
            }
            // line 408
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 410
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 410, $this->source); })()) == "chantermines"))) {
                // line 411
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantermines");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">widgets</i>
                                <span class=\"col-yellow\">CHANTIERS TERMINÉS</span>
                            </a>
                        ";
            } else {
                // line 416
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantermines");
                yield "\">
                                <i class=\"material-icons text-white\">widgets</i>
                                <span class=\"text-white\">Chantiers terminés</span>
                            </a>
                        ";
            }
            // line 421
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 423
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 423, $this->source); })()) == "technique"))) {
                // line 424
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technique");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">open_with</i>
                                <span class=\"col-yellow\">GESTION TECHNIQUE</span>
                            </a>
                        ";
            } else {
                // line 429
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technique");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">open_with</i>
                                <span class=\"text-white\">Gestion technique</span>
                            </a>
                        ";
            }
            // line 434
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 436
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 436, $this->source); })()) == "materiel"))) {
                // line 437
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("materiel");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">bubble_chart</i>
                                <span class=\"col-yellow\">GESTION DU MATÉRIEL</span>
                            </a>
                        ";
            } else {
                // line 442
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("materiel");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">bubble_chart</i>
                                <span class=\"text-white\">Gestion du matériel</span>
                            </a>
                        ";
            }
            // line 447
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 449
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 449, $this->source); })()) == "personnel"))) {
                // line 450
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnel");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">people_outline</i>
                                <span class=\"col-yellow\">GESTION DU PERSONNEL</span>
                            </a>
                        ";
            } else {
                // line 455
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnel");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">people_outline</i>
                                <span class=\"text-white\">Gestion du personnel</span>
                            </a>
                        ";
            }
            // line 460
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 462
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 462, $this->source); })()) == "paie"))) {
                // line 463
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paie");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">toll</i>
                                <span class=\"col-yellow\">POINTS DE PAIE</span>
                            </a>
                        ";
            } else {
                // line 468
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paie");
                yield "\">
                                <i class=\"material-icons text-white\">toll</i>
                                <span class=\"text-white\">Points de paie</span>
                            </a>
                        ";
            }
            // line 473
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 475
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 475, $this->source); })()) == "parametre"))) {
                // line 476
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parametre");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">center_focus_weak</i>
                                <span class=\"col-yellow\">PARAMÈTRES</span>
                            </a>
                        ";
            } else {
                // line 481
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parametre");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">center_focus_weak</i>
                                <span class=\"text-white\">Paramètres</span>
                            </a>
                        ";
            }
            // line 486
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 488
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 488, $this->source); })()) == "historique"))) {
                // line 489
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historique");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">history</i>
                                <span class=\"col-yellow\">HISTORIQUE</span>
                            </a>
                        ";
            } else {
                // line 494
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historique");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">history</i>
                                <span class=\"text-white\">Historique</span>
                            </a>
                        ";
            }
            // line 499
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 501
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 501, $this->source); })()) == "corbeille"))) {
                // line 502
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("corbeille");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">delete</i>
                                <span class=\"col-yellow\">CORBEILLE</span>
                            </a>
                        ";
            } else {
                // line 507
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("corbeille");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">delete</i>
                                <span class=\"text-white\">Corbeille</span>
                            </a>
                        ";
            }
            // line 512
            yield "                    </li>
                ";
        }
        // line 514
        yield "            </ul>
        </div>


    </aside>
    <aside id=\"rightsidebars\" class=\"right-sidebars m-t--25 p-t-10\" style=\"overflow: scroll\">
        <div class=\"tab-content\">
            <div role=\"tabpanel\" class=\"tab-pane fade in active in active\" id=\"chantier\">
                <div class=\"table-responsive\" style=\"padding: 10px !important;\">
                    ";
        // line 523
        if ((($tmp =  !array_key_exists("libre", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 524
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 524, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 525
                yield "                            ";
                $context["p"] = 0;
                // line 526
                yield "                            ";
                if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 526)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 526), "count", [], "any", false, false, false, 526) > 0))) {
                    // line 527
                    yield "                                ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 527))) {
                        // line 528
                        yield "                                    <table class=\"table-bordered shadow\" width=\"100%\" style=\" overflow: scroll;\">
                                        ";
                        // line 529
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 529));
                        foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                            // line 530
                            yield "                                            ";
                            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 530)) && (CoreExtension::getAttribute($this->env, $this->source,                             // line 531
$context["chantier"], "archiver", [], "any", false, false, false, 531) != "oui"))) {
                                // line 532
                                yield "                                                ";
                                if (((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 532, $this->source); })()) == 0)) {
                                    // line 533
                                    yield "                                                    <tr>
                                                        <td colspan=\"2\" class=\"bg-blue text-white\"
                                                            style=\"padding-left: 5px;\">
                                                            <a href=\"";
                                    // line 536
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 536)]), "html", null, true);
                                    yield "\"
                                                               class=\"text-white\" title=\"";
                                    // line 537
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 537), "html", null, true);
                                    yield "\">
                                                                -
                                                                ";
                                    // line 539
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 539), "html", null, true);
                                    yield "
                                                            </a>
                                                        </td>
                                                    </tr>
                                                ";
                                }
                                // line 544
                                yield "                                                <tr>
                                                    <td style=\"padding-left: 5px\" colspan=\"2\" class=\"bg-light\">
                                                        <a href=\"";
                                // line 546
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source,                                 // line 549
$context["chantier"], "id", [], "any", false, false, false, 549)]), "html", null, true);
                                // line 551
                                yield "\" class=\"text-pri\" title=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 551), "html", null, true);
                                yield "\">
                                                            ";
                                // line 552
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 552), 0, 55)), "html", null, true);
                                yield "
                                                        </a>
                                                    </td>
                                                </tr>
                                                ";
                                // line 556
                                $context["p"] = ((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 556, $this->source); })()) + 1);
                                // line 557
                                yield "                                            ";
                            }
                            // line 558
                            yield "                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 559
                        yield "                                    </table>
                                ";
                    }
                    // line 561
                    yield "                            ";
                }
                // line 562
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 563
            yield "                    ";
        }
        // line 564
        yield "                </div>
            </div>
        </div>
    </aside>
</section>
<style>
    .bood {
        position: relative;
        width: 100%;
        height: ";
        // line 573
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((30 - CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 573, $this->source); })()), "headerHeight", [], "any", false, false, false, 573)) - CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 573, $this->source); })()), "footerHeight", [], "any", false, false, false, 573)), "html", null, true);
        yield "cm;
        padding-left: 1cm;
        padding-right: 1cm;
        overflow-y: scroll;
    }

    .footer {
        height: ";
        // line 580
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 580, $this->source); })()), "footerHeight", [], "any", false, false, false, 580), "html", null, true);
        yield "cm;
        bottom: 0;
    }

    .header {
        height: ";
        // line 585
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 585, $this->source); })()), "headerHeight", [], "any", false, false, false, 585), "html", null, true);
        yield "cm;
        -webkit-print-color-adjust: exact;
        top: 0;
    }

    @media print {
        .footer-space {
            height: ";
        // line 592
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 592, $this->source); })()), "footerHeight", [], "any", false, false, false, 592), "html", null, true);
        yield "cm;
        }

        .header-space {
            height: ";
        // line 596
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 596, $this->source); })()), "headerHeight", [], "any", false, false, false, 596), "html", null, true);
        yield "cm;
            margin-top: ";
        // line 597
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 597, $this->source); })()), "teteDH", [], "any", false, false, false, 597), "html", null, true);
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
        // line 620
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 620, $this->source); })()), "dsize", [], "any", false, false, false, 620), "html", null, true);
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

    td.kope {
        color: #E91E63 !important;
        font-weight: bold
    }


    table {
        border-spacing: 0;
        border-collapse: collapse;
        font-size: ";
        // line 641
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 641, $this->source); })()), "dsize", [], "any", false, false, false, 641), "html", null, true);
        yield "px;
        font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
    }

    .togo {
        background-color: #EAEDED !important;
        font-size: ";
        // line 647
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 647, $this->source); })()), "dsize", [], "any", false, false, false, 647), "html", null, true);
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

<input type=\"text\" class=\"hide\" id=\"idchantier\" value=\"";
        // line 704
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 704, $this->source); })()), "id", [], "any", false, false, false, 704), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"idcaisse\" value=\"";
        // line 705
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caisse"]) || array_key_exists("caisse", $context) ? $context["caisse"] : (function () { throw new RuntimeError('Variable "caisse" does not exist.', 705, $this->source); })()), "id", [], "any", false, false, false, 705), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"idligne\" value=\"";
        // line 706
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["idligne"]) || array_key_exists("idligne", $context) ? $context["idligne"] : (function () { throw new RuntimeError('Variable "idligne" does not exist.', 706, $this->source); })()), "html", null, true);
        yield "\">

<input type=\"text\" class=\"hide\" id=\"jsoncaisse\" value=\"";
        // line 708
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["jsoncaisse"]) || array_key_exists("jsoncaisse", $context) ? $context["jsoncaisse"] : (function () { throw new RuntimeError('Variable "jsoncaisse" does not exist.', 708, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"jsonbon\" value=\"";
        // line 709
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["jsonbon"]) || array_key_exists("jsonbon", $context) ? $context["jsonbon"] : (function () { throw new RuntimeError('Variable "jsonbon" does not exist.', 709, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"jsonforme\" value=\"";
        // line 710
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["jsonforme"]) || array_key_exists("jsonforme", $context) ? $context["jsonforme"] : (function () { throw new RuntimeError('Variable "jsonforme" does not exist.', 710, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"jsonformes\" value=\"";
        // line 711
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["jsonformes"]) || array_key_exists("jsonformes", $context) ? $context["jsonformes"] : (function () { throw new RuntimeError('Variable "jsonformes" does not exist.', 711, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"caissedate\" value=\"";
        // line 712
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caisse"]) || array_key_exists("caisse", $context) ? $context["caisse"] : (function () { throw new RuntimeError('Variable "caisse" does not exist.', 712, $this->source); })()), "date", [], "any", false, false, false, 712), "d/m/Y"), "html", null, true);
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
                        <table class=\"table-bordered\">
                            <tr class=\"bg-pri text-white\">
                                <th>DÉSIGNATION</th>
                                <th class=\"text-center\" style=\" width: 15%\">MONTANT</th>
                                ";
        // line 765
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["caisse"]) || array_key_exists("caisse", $context) ? $context["caisse"] : (function () { throw new RuntimeError('Variable "caisse" does not exist.', 765, $this->source); })()), "etat", [], "any", false, false, false, 765) != "valide")) {
            // line 766
            yield "                                    <th id=\"dis\" style=\"width:7%; padding: 0\"></th>
                                ";
        }
        // line 768
        yield "                            </tr>

                            ";
        // line 770
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caisse"]) || array_key_exists("caisse", $context) ? $context["caisse"] : (function () { throw new RuntimeError('Variable "caisse" does not exist.', 770, $this->source); })()), "lignes", [], "any", false, false, false, 770));
        foreach ($context['_seq'] as $context["_key"] => $context["lign"]) {
            // line 771
            yield "                                <tr>
                                    <td style=\"width:70%;\" align=\"left\">";
            // line 772
            yield CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "designation", [], "any", false, false, false, 772);
            yield "</td>
                                    <td align=\"right\">";
            // line 773
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 773), 2, ",", " "), "html", null, true);
            yield "</td>
                                    ";
            // line 774
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["caisse"]) || array_key_exists("caisse", $context) ? $context["caisse"] : (function () { throw new RuntimeError('Variable "caisse" does not exist.', 774, $this->source); })()), "etat", [], "any", false, false, false, 774) != "valide")) {
                // line 775
                yield "                                        <td align=\"center\">
                                            <a href=\"";
                // line 776
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editlignecaisse", ["idcaisse" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["caisse"]) || array_key_exists("caisse", $context) ? $context["caisse"] : (function () { throw new RuntimeError('Variable "caisse" does not exist.', 776, $this->source); })()), "id", [], "any", false, false, false, 776), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["caisse"]) || array_key_exists("caisse", $context) ? $context["caisse"] : (function () { throw new RuntimeError('Variable "caisse" does not exist.', 776, $this->source); })()), "getchantier", [], "any", false, false, false, 776), "id", [], "any", false, false, false, 776), "idligne" => CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "id", [], "any", false, false, false, 776)]), "html", null, true);
                yield "\">
                                                <i class=\"fa fa-edit col-green\" aria-hidden=\"true\"
                                                   title=\"Modifier\"></i></a>
                                            <a href=\"";
                // line 779
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supligne", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["caisse"]) || array_key_exists("caisse", $context) ? $context["caisse"] : (function () { throw new RuntimeError('Variable "caisse" does not exist.', 779, $this->source); })()), "id", [], "any", false, false, false, 779), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["caisse"]) || array_key_exists("caisse", $context) ? $context["caisse"] : (function () { throw new RuntimeError('Variable "caisse" does not exist.', 779, $this->source); })()), "getchantier", [], "any", false, false, false, 779), "id", [], "any", false, false, false, 779), "idligne" => CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "id", [], "any", false, false, false, 779), "type" => "caisse"]), "html", null, true);
                yield "\"
                                               class=\"sholigne\">
                                                <i class=\"fa fa-trash col-pink\" aria-hidden=\"true\"
                                                   title=\"Supprimer\"></i></a>
                                        </td>
                                    ";
            }
            // line 785
            yield "                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['lign'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 787
        yield "                        </table>
                    </div>
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
        // line 799
        if ((($tmp = (isset($context["editMod"]) || array_key_exists("editMod", $context) ? $context["editMod"] : (function () { throw new RuntimeError('Variable "editMod" does not exist.', 799, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 800
            yield "                <div class=\"p-5 bg-green\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">MODIFIER UNE DÉSIGNATION</h4>
                    </div>
                </div>
            ";
        } else {
            // line 806
            yield "                <div class=\"p-5 bg-pri\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">AJOUTER UNE DÉSIGNATION</h4>
                    </div>
                </div>
            ";
        }
        // line 812
        yield "            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    ";
        // line 814
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 814, $this->source); })()), 'form_start', ["attr" => ["id" => "addLigneCaisseForm"]]);
        yield "
                    ";
        // line 815
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 815, $this->source); })()), "_token", [], "any", false, false, false, 815), 'row');
        yield "

                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DÉSIGNATION<span
                                        class=\"col-pink\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 823
        if ((($tmp = (isset($context["editMod"]) || array_key_exists("editMod", $context) ? $context["editMod"] : (function () { throw new RuntimeError('Variable "editMod" does not exist.', 823, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 824
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 824, $this->source); })()), "designation", [], "any", false, false, false, 824), 'widget', ["id" => "editor2", "attr" => ["class" => "form-control col-green"]]);
            yield "
                                    ";
        } else {
            // line 826
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 826, $this->source); })()), "designation", [], "any", false, false, false, 826), 'widget', ["id" => "editor2", "attr" => ["class" => "form-control"]]);
            yield "
                                    ";
        }
        // line 828
        yield "                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">MONTANT<span
                                        class=\"col-pink\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 839
        if ((($tmp = (isset($context["editMod"]) || array_key_exists("editMod", $context) ? $context["editMod"] : (function () { throw new RuntimeError('Variable "editMod" does not exist.', 839, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 840
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 840, $this->source); })()), "pu", [], "any", false, false, false, 840), 'widget', ["attr" => ["class" => "form-control", "type" => "number"]]);
            yield "
                                    ";
        } else {
            // line 842
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 842, $this->source); })()), "pu", [], "any", false, false, false, 842), 'widget', ["attr" => ["class" => "form-control", "type" => "number"]]);
            yield "
                                    ";
        }
        // line 844
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        ";
        // line 849
        if ((($tmp = (isset($context["editMod"]) || array_key_exists("editMod", $context) ? $context["editMod"] : (function () { throw new RuntimeError('Variable "editMod" does not exist.', 849, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 850
            yield "                            <input type=\"submit\" id=\"updateLigneCaisse\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect text-white bg-green\">
                            <a href=\"";
            // line 852
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editlignecaisse", ["idcaisse" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["caisse"]) || array_key_exists("caisse", $context) ? $context["caisse"] : (function () { throw new RuntimeError('Variable "caisse" does not exist.', 852, $this->source); })()), "id", [], "any", false, false, false, 852), "idligne" => (isset($context["idligne"]) || array_key_exists("idligne", $context) ? $context["idligne"] : (function () { throw new RuntimeError('Variable "idligne" does not exist.', 852, $this->source); })()), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 852, $this->source); })()), "id", [], "any", false, false, false, 852)]), "html", null, true);
            yield "\"
                               id=\"closeLignecaisse\" class=\"btn btn-link waves-effect text-white bg-pink\">FERMER
                            </a>
                        ";
        } else {
            // line 856
            yield "                            <input type=\"submit\" id=\"addLigneCaisse\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-pri\">
                            <div type=\"button\" id=\"closeLignecaisse\"
                                 class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">FERMER
                            </div>
                        ";
        }
        // line 863
        yield "
                        <img src=\"";
        // line 864
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadLignecaisse\">
                    </div>
                    ";
        // line 867
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 867, $this->source); })()), 'form_end');
        yield "
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
                    <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">MONTANT À PAYER</h4>
                </div>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    ";
        // line 884
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["former"]) || array_key_exists("former", $context) ? $context["former"] : (function () { throw new RuntimeError('Variable "former" does not exist.', 884, $this->source); })()), 'form_start', ["attr" => ["id" => "addMontantForm"]]);
        yield "
                    ";
        // line 885
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["former"]) || array_key_exists("former", $context) ? $context["former"] : (function () { throw new RuntimeError('Variable "former" does not exist.', 885, $this->source); })()), "_token", [], "any", false, false, false, 885), 'row');
        yield "

                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">MONTANT À PAYER<span
                                        class=\"col-pink\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 893
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["former"]) || array_key_exists("former", $context) ? $context["former"] : (function () { throw new RuntimeError('Variable "former" does not exist.', 893, $this->source); })()), "montant", [], "any", false, false, false, 893), 'widget', ["attr" => ["class" => "form-control form-control-user", "type" => "number"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">

                        <input type=\"submit\" id=\"addMontant\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect text-white bg-pri\">
                        <div type=\"button\" id=\"closeMontant\" class=\"btn btn-link waves-effect text-white bg-pink\"
                             data-dismiss=\"modal\">FERMER
                        </div>

                        <img src=\"";
        // line 906
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadMontant\">
                    </div>
                    ";
        // line 909
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["former"]) || array_key_exists("former", $context) ? $context["former"] : (function () { throw new RuntimeError('Variable "former" does not exist.', 909, $this->source); })()), 'form_end');
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
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <select class=\"form-control show-tick\" id=\"deplacerCaisse\" style=\"width:100%\">
                                ";
        // line 929
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 929, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 930
            yield "                                    ";
            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 930)) && (null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 930)))) {
                // line 931
                yield "                                        ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 931)) > 0)) {
                    // line 932
                    yield "                                            <optgroup label=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 932), "html", null, true);
                    yield "\">
                                                ";
                    // line 933
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 933));
                    foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                        // line 934
                        yield "                                                    ";
                        if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 934)) && (null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "type", [], "any", false, false, false, 934)))) {
                            // line 935
                            yield "                                                        <option value=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 935), "html", null, true);
                            yield "\"
                                                                class=\"pri font-weight-normal\">";
                            // line 936
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 936), 0, 55)), "html", null, true);
                            yield "</option>
                                                    ";
                        }
                        // line 938
                        yield "                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 939
                    yield "                                            </optgroup>
                                        ";
                }
                // line 941
                yield "                                    ";
            }
            // line 942
            yield "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 943
        yield "                            </select>
                        </div>
                    </div>
                    <div class=\"text-center m-t-30\">
                        <input type=\"submit\" id=\"deplacerCaisse\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect text-white bg-pri\">
                        <div type=\"button\" id=\"closeDeplacer\" class=\"btn btn-link waves-effect text-white bg-pink\"
                             data-dismiss=\"modal\">FERMER
                        </div>
                        <img src=\"";
        // line 952
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
        // line 971
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 971, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data", "attr" => ["id" => "addforme"]]);
        yield "
                    ";
        // line 972
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 972, $this->source); })()), "_token", [], "any", false, false, false, 972), 'row');
        yield "
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <h5 class=\"col-black bolo600\">LIBELLÉ</h5>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 978
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 978, $this->source); })()), "intituler", [], "any", false, false, false, 978), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
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
        // line 989
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 989, $this->source); })()), "typeEntete", [], "any", false, false, false, 989), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <h5 class=\"col-black bolo600\">TYPE DE PIED DE PAGE</h5>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 997
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 997, $this->source); })()), "typeFooter", [], "any", false, false, false, 997), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-black bolo600\">ENTÊTE EN IMAGE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1005
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1005, $this->source); })()), "enteteImage", [], "any", false, false, false, 1005), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-black bolo600\">PIED DE PAGE EN IMAGE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1013
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1013, $this->source); })()), "footImage", [], "any", false, false, false, 1013), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
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
        // line 1023
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1023, $this->source); })()), "headerText", [], "any", false, false, false, 1023), 'widget', ["required" => "", "id" => "editor5", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-black bolo600\">PIED DE PAGE EN TEXTE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1031
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1031, $this->source); })()), "pied", [], "any", false, false, false, 1031), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
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
        // line 1041
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1041, $this->source); })()), "dsize", [], "any", false, false, false, 1041), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
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
        // line 1051
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1051, $this->source); })()), "headerWith", [], "any", false, false, false, 1051), 'widget', ["required" => "", "attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-black bolo600\">HAUTEUR ENTÊTE(cm)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1059
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1059, $this->source); })()), "headerHeight", [], "any", false, false, false, 1059), 'widget', ["required" => "", "attr" => ["class" => "form-control col-pink"]]);
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
        // line 1070
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1070, $this->source); })()), "teteY", [], "any", false, false, false, 1070), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-black bolo600\">LARGEUR DU LOGO(cm)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1078
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1078, $this->source); })()), "teteH", [], "any", false, false, false, 1078), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
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
        // line 1088
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1088, $this->source); })()), "teteDH", [], "any", false, false, false, 1088), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-black bolo600\">DÉCALAGE BAS(cm)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1096
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1096, $this->source); })()), "teteDB", [], "any", false, false, false, 1096), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
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
        // line 1106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1106, $this->source); })()), "teteDD", [], "any", false, false, false, 1106), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-black bolo600\">DÉCALAGE À GAUCHE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1114
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1114, $this->source); })()), "teteDG", [], "any", false, false, false, 1114), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
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
        // line 1125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1125, $this->source); })()), "piedsize", [], "any", false, false, false, 1125), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-black bolo600\">HAUTEUR DU PIED DE PAGE(cm)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1133
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1133, $this->source); })()), "footerHeight", [], "any", false, false, false, 1133), 'widget', ["required" => "", "attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\" style=\"margin-bottom: 50px !important;\">
                        <input type=\"submit\" id=\"updateForme\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect text-white bg-blue\">
                        <img src=\"";
        // line 1141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadupForme\">
                    </div>
                    ";
        // line 1144
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1144, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 1151
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["caisse"]) || array_key_exists("caisse", $context) ? $context["caisse"] : (function () { throw new RuntimeError('Variable "caisse" does not exist.', 1151, $this->source); })()), "type", [], "any", false, false, false, 1151) == 3)) {
            // line 1152
            yield "    <div class=\"modal fade right\" id=\"updCaisseCharg\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-blue text-white\">
                    <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">CRÉER UN BON DE CAISSE</h4>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
            // line 1162
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1162, $this->source); })()), 'form_start', ["attr" => ["id" => "upddCaisseForm"]]);
            yield "
                        ";
            // line 1163
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1163, $this->source); })()), "_token", [], "any", false, false, false, 1163), 'row');
            yield "
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">N° DE DEVIS <span
                                            class=\"col-red\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
            // line 1170
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1170, $this->source); })()), "devis", [], "any", false, false, false, 1170), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
            yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DATE<span
                                            class=\"col-red\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
            // line 1179
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1179, $this->source); })()), "date", [], "any", false, false, false, 1179), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
            yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">POINTS DE PAIE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
            // line 1189
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1189, $this->source); })()), "paie", [], "any", false, false, false, 1189), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
            yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE<span class=\"col-red\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
            // line 1199
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1199, $this->source); })()), "caissereference", [], "any", false, false, false, 1199), 'widget', ["id" => "editor19", "attr" => ["class" => "form-control"]]);
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
            // line 1210
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1210, $this->source); })()), "monnaie", [], "any", false, false, false, 1210), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">TYPE D'OPÉRATION</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
            // line 1218
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1218, $this->source); })()), "operation", [], "any", false, false, false, 1218), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"updInterneCaiss\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect text-white bg-blue\">
                            <div type=\"button\" id=\"cloCaisse\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"";
            // line 1230
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
            yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loCaisse\">
                        </div>
                        <br><br><br>
                        ";
            // line 1234
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1234, $this->source); })()), 'form_end');
            yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        } else {
            // line 1241
            yield "    ";
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["caisse"]) || array_key_exists("caisse", $context) ? $context["caisse"] : (function () { throw new RuntimeError('Variable "caisse" does not exist.', 1241, $this->source); })()), "bon", [], "any", false, false, false, 1241))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1242
                yield "        <div class=\"modal fade right\" id=\"modalInfo\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
             aria-hidden=\"true\">
            <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header bg-green col-white\">
                        <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">BON DE CAISSE</h4>
                    </div>
                    <div class=\"modal-body m-t-10 bien\">
                        <div class=\"body\">
                            ";
                // line 1251
                yield                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1251, $this->source); })()), 'form_start', ["attr" => ["id" => "updCaisseForm"]]);
                yield "
                            <input type=\"hidden\" name=\"token\" value=\"";
                // line 1252
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("updCaisseToken"), "html", null, true);
                yield "\"/>
                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label m-b--30 col-blue bolo\">FOURNISSEUR<span
                                                class=\"col-red\">*</span></label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            ";
                // line 1259
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1259, $this->source); })()), "fournisseur", [], "any", false, false, false, 1259), 'widget', ["id" => "sefone", "attr" => ["class" => "form-control ploc"]]);
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
                // line 1283
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1283, $this->source); })()), "paie", [], "any", false, false, false, 1283), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
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
                // line 1292
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1292, $this->source); })()), "date", [], "any", false, false, false, 1292), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
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
                // line 1302
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1302, $this->source); })()), "monnaie", [], "any", false, false, false, 1302), 'widget', ["attr" => ["class" => "form-control"]]);
                yield "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-6\">
                                    <label class=\"form-label m-b--30 col-blue bolo\">TYPE D'OPÉRATION</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            ";
                // line 1310
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1310, $this->source); })()), "operation", [], "any", false, false, false, 1310), 'widget', ["attr" => ["class" => "form-control"]]);
                yield "
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE<span
                                                class=\"col-red\">*</span>
                                    </label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            ";
                // line 1322
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1322, $this->source); })()), "caissereference", [], "any", false, false, false, 1322), 'widget', ["id" => "editor15", "attr" => ["class" => "form-control"]]);
                yield "
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"text-center\">
                                <input type=\"submit\" id=\"updCaisse\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect col-white bg-green\">
                                <div type=\"button\" id=\"closeUpdCaisse\"
                                     class=\"btn btn-link waves-effect col-white bg-pink\"
                                     data-dismiss=\"modal\">
                                    FERMER
                                </div>
                                <img src=\"";
                // line 1335
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
                yield "\" style=\"width: 50px; display:none;\"
                                     class=\"align-justify\" id=\"loadUpdCaisse\"></div>
                            <br>
                            <br>
                            <br>
                            ";
                // line 1340
                yield                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1340, $this->source); })()), 'form_end');
                yield "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
            } else {
                // line 1347
                yield "        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["caisse"]) || array_key_exists("caisse", $context) ? $context["caisse"] : (function () { throw new RuntimeError('Variable "caisse" does not exist.', 1347, $this->source); })()), "personnel", [], "any", false, false, false, 1347), "type", [], "any", false, false, false, 1347) == "interne")) {
                    // line 1348
                    yield "            <div class=\"modal fade right\" id=\"updCaisseCharg\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
                 aria-hidden=\"true\">
                <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header bg-green col-white\">
                            <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">MODIFIER LE BON INTERNE</h4>
                        </div>
                        <div class=\"modal-body m-t-10 bien\">
                            <div class=\"body\">
                                ";
                    // line 1357
                    yield                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCaisseUpdCharge"]) || array_key_exists("formCaisseUpdCharge", $context) ? $context["formCaisseUpdCharge"] : (function () { throw new RuntimeError('Variable "formCaisseUpdCharge" does not exist.', 1357, $this->source); })()), 'form_start', ["attr" => ["id" => "updCaisseChargeForm"]]);
                    yield "
                                ";
                    // line 1358
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisseUpdCharge"]) || array_key_exists("formCaisseUpdCharge", $context) ? $context["formCaisseUpdCharge"] : (function () { throw new RuntimeError('Variable "formCaisseUpdCharge" does not exist.', 1358, $this->source); })()), "_token", [], "any", false, false, false, 1358), 'row');
                    yield "
                                <div class=\"row clearfix m-b-10\">
                                    <div class=\"col-sm-4\">
                                        <label class=\"form-label m-b--30 col-blue bolo\">DATE<span
                                                    class=\"col-red\">*</span>
                                        </label>
                                        <div class=\"form-group\">
                                            <div class=\"form-line\">
                                                ";
                    // line 1366
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisseUpdCharge"]) || array_key_exists("formCaisseUpdCharge", $context) ? $context["formCaisseUpdCharge"] : (function () { throw new RuntimeError('Variable "formCaisseUpdCharge" does not exist.', 1366, $this->source); })()), "date", [], "any", false, false, false, 1366), 'widget', ["required" => "", "attr" => ["class" => "form-control col-pink"]]);
                    yield "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-8\">
                                        <label class=\"form-label m-b--30 col-blue bolo\">POINTS DE PAIE</label>
                                        <div class=\"form-group\">
                                            <div class=\"form-line\">
                                                ";
                    // line 1374
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisseUpdCharge"]) || array_key_exists("formCaisseUpdCharge", $context) ? $context["formCaisseUpdCharge"] : (function () { throw new RuntimeError('Variable "formCaisseUpdCharge" does not exist.', 1374, $this->source); })()), "paie", [], "any", false, false, false, 1374), 'widget', ["required" => "", "attr" => ["class" => "form-control col-pink"]]);
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
                    // line 1384
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisseUpdCharge"]) || array_key_exists("formCaisseUpdCharge", $context) ? $context["formCaisseUpdCharge"] : (function () { throw new RuntimeError('Variable "formCaisseUpdCharge" does not exist.', 1384, $this->source); })()), "personnel", [], "any", false, false, false, 1384), 'widget', ["required" => "required", "attr" => ["class" => "form-control col-pink"]]);
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
                    // line 1394
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisseUpdCharge"]) || array_key_exists("formCaisseUpdCharge", $context) ? $context["formCaisseUpdCharge"] : (function () { throw new RuntimeError('Variable "formCaisseUpdCharge" does not exist.', 1394, $this->source); })()), "monnaie", [], "any", false, false, false, 1394), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
                    yield "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <label class=\"form-label m-b--30 col-blue bolo\">TYPE D'OPÉRATION</label>
                                        <div class=\"form-group\">
                                            <div class=\"form-line\">
                                                ";
                    // line 1402
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisseUpdCharge"]) || array_key_exists("formCaisseUpdCharge", $context) ? $context["formCaisseUpdCharge"] : (function () { throw new RuntimeError('Variable "formCaisseUpdCharge" does not exist.', 1402, $this->source); })()), "operation", [], "any", false, false, false, 1402), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
                    yield "
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row clearfix m-b-10\">
                                    <div class=\"col-sm-12\">
                                        <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE<span
                                                    class=\"col-red\">*</span>
                                        </label>
                                        <div class=\"form-group\">
                                            <div class=\"form-line\">
                                                ";
                    // line 1414
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisseUpdCharge"]) || array_key_exists("formCaisseUpdCharge", $context) ? $context["formCaisseUpdCharge"] : (function () { throw new RuntimeError('Variable "formCaisseUpdCharge" does not exist.', 1414, $this->source); })()), "caissereference", [], "any", false, false, false, 1414), 'widget', ["id" => "editor19", "attr" => ["class" => "form-control col-pink"]]);
                    yield "
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"text-center\">
                                    <input type=\"submit\" id=\"updInterneCaisse\" value=\"MODIFIER\"
                                           class=\"btn btn-link waves-effect col-white bg-green\">
                                    <div type=\"button\" id=\"closerUpdInterneCaisse\"
                                         class=\"btn btn-link waves-effect col-white bg-pink\"
                                         data-dismiss=\"modal\">FERMER
                                    </div>
                                    <img src=\"";
                    // line 1426
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
                    yield "\" style=\"width: 50px; display:none;\"
                                         class=\"align-justify\" id=\"loaderUpdinterneCaisse\"></div>
                                <br>
                                <br>
                                <br>
                                ";
                    // line 1431
                    yield                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCaisseUpdCharge"]) || array_key_exists("formCaisseUpdCharge", $context) ? $context["formCaisseUpdCharge"] : (function () { throw new RuntimeError('Variable "formCaisseUpdCharge" does not exist.', 1431, $this->source); })()), 'form_end');
                    yield "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
                }
                // line 1438
                yield "        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["caisse"]) || array_key_exists("caisse", $context) ? $context["caisse"] : (function () { throw new RuntimeError('Variable "caisse" does not exist.', 1438, $this->source); })()), "personnel", [], "any", false, false, false, 1438), "type", [], "any", false, false, false, 1438) == "personnelle")) {
                    // line 1439
                    yield "            <div class=\"modal fade right\" id=\"updCaisseCharg\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
                 aria-hidden=\"true\">
                <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header bg-green col-white\">
                            <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">MODIFIER LE BON PERSONNEL</h4>
                        </div>
                        <div class=\"modal-body m-t-10 bien\">
                            <div class=\"body\">
                                ";
                    // line 1448
                    yield                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 1448, $this->source); })()), 'form_start', ["attr" => ["id" => "updCaissePersonnelForm"]]);
                    yield "
                                ";
                    // line 1449
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 1449, $this->source); })()), "_token", [], "any", false, false, false, 1449), 'row');
                    yield "
                                <div class=\"row clearfix m-b-10\">
                                    <div class=\"col-sm-4\">
                                        <label class=\"form-label m-b--30 col-blue bolo\">DATE<span class=\"col-red\">*</span>
                                        </label>
                                        <div class=\"form-group\">
                                            <div class=\"form-line\">
                                                ";
                    // line 1456
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 1456, $this->source); })()), "date", [], "any", false, false, false, 1456), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
                    yield "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-8\">
                                        <label class=\"form-label m-b--30 col-blue bolo\">POINTS DE PAIE</label>
                                        <div class=\"form-group\">
                                            <div class=\"form-line\">
                                                ";
                    // line 1464
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 1464, $this->source); })()), "paie", [], "any", false, false, false, 1464), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
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
                    // line 1474
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 1474, $this->source); })()), "personnel", [], "any", false, false, false, 1474), 'widget', ["required" => "required", "attr" => ["class" => "form-control"]]);
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
                    // line 1484
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 1484, $this->source); })()), "monnaie", [], "any", false, false, false, 1484), 'widget', ["attr" => ["class" => "form-control"]]);
                    yield "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <label class=\"form-label m-b--30 col-blue bolo\">TYPE D'OPÉRATION</label>
                                        <div class=\"form-group\">
                                            <div class=\"form-line\">
                                                ";
                    // line 1492
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 1492, $this->source); })()), "operation", [], "any", false, false, false, 1492), 'widget', ["attr" => ["class" => "form-control"]]);
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
                    // line 1502
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 1502, $this->source); })()), "genre", [], "any", false, false, false, 1502), 'widget', ["required" => "required", "attr" => ["class" => "form-control"]]);
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
                    // line 1513
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 1513, $this->source); })()), "caissereference", [], "any", false, false, false, 1513), 'widget', ["id" => "editor20", "attr" => ["class" => "form-control"]]);
                    yield "
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"text-center\">
                                    <input type=\"submit\" id=\"updCaissePersonnel\" value=\"MODIFIER\"
                                           class=\"btn btn-link waves-effect col-white bg-green\">
                                    <div type=\"button\" id=\"closerCaissePersonnel\"
                                         class=\"btn btn-link waves-effect col-white bg-pink\"
                                         data-dismiss=\"modal\">FERMER
                                    </div>
                                    <img src=\"";
                    // line 1525
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
                    yield "\" style=\"width: 50px; display:none;\"
                                         class=\"align-justify\" id=\"loaderCaissePersonnel\"></div>
                                <br>
                                <br>
                                <br>
                                ";
                    // line 1530
                    yield                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 1530, $this->source); })()), 'form_end');
                    yield "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
                }
                // line 1537
                yield "    ";
            }
        }
        // line 1539
        yield "
<div class=\"modal fade right\" id=\"modalCaisse\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-blue col-white\">
                <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">BON DE CAISSE POUR FOURNISSEUR</h4>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    ";
        // line 1549
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formneCaisse"]) || array_key_exists("formneCaisse", $context) ? $context["formneCaisse"] : (function () { throw new RuntimeError('Variable "formneCaisse" does not exist.', 1549, $this->source); })()), 'form_start', ["attr" => ["id" => "addeCaisseForm"]]);
        yield "
                    <input type=\"hidden\" name=\"token\" value=\"";
        // line 1550
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addeCaisseToken"), "html", null, true);
        yield "\"/>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">FOURNISSEUR<span
                                        class=\"col-red\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1557
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formneCaisse"]) || array_key_exists("formneCaisse", $context) ? $context["formneCaisse"] : (function () { throw new RuntimeError('Variable "formneCaisse" does not exist.', 1557, $this->source); })()), "fournisseur", [], "any", false, false, false, 1557), 'widget', ["id" => "sefone", "attr" => ["class" => "form-control ploc"]]);
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
        // line 1581
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formneCaisse"]) || array_key_exists("formneCaisse", $context) ? $context["formneCaisse"] : (function () { throw new RuntimeError('Variable "formneCaisse" does not exist.', 1581, $this->source); })()), "paie", [], "any", false, false, false, 1581), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
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
        // line 1590
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formneCaisse"]) || array_key_exists("formneCaisse", $context) ? $context["formneCaisse"] : (function () { throw new RuntimeError('Variable "formneCaisse" does not exist.', 1590, $this->source); })()), "date", [], "any", false, false, false, 1590), 'widget', ["required" => "", "attr" => ["class" => "form-control datepicker"]]);
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
        // line 1600
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formneCaisse"]) || array_key_exists("formneCaisse", $context) ? $context["formneCaisse"] : (function () { throw new RuntimeError('Variable "formneCaisse" does not exist.', 1600, $this->source); })()), "monnaie", [], "any", false, false, false, 1600), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">TYPE D'OPÉRATION</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1608
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formneCaisse"]) || array_key_exists("formneCaisse", $context) ? $context["formneCaisse"] : (function () { throw new RuntimeError('Variable "formneCaisse" does not exist.', 1608, $this->source); })()), "operation", [], "any", false, false, false, 1608), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 1619
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formneCaisse"]) || array_key_exists("formneCaisse", $context) ? $context["formneCaisse"] : (function () { throw new RuntimeError('Variable "formneCaisse" does not exist.', 1619, $this->source); })()), "caissereference", [], "any", false, false, false, 1619), 'widget', ["id" => "editor15", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"adderCaisse\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect col-white bg-blue\">
                        <div type=\"button\" id=\"closerCaisse\" class=\"btn btn-link waves-effect col-white bg-pink\"
                             data-dismiss=\"modal\">
                            FERMER
                        </div>
                        <img src=\"";
        // line 1631
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loaderCaisse\">
                    </div>
                    <br>
                    <br>
                    <br>
                    ";
        // line 1637
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formneCaisse"]) || array_key_exists("formneCaisse", $context) ? $context["formneCaisse"] : (function () { throw new RuntimeError('Variable "formneCaisse" does not exist.', 1637, $this->source); })()), 'form_end');
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
            <div class=\"col-sm-12\">
                <div class=\"mb-2 m-t--25\"
                     style=\"background-color: #d1d3e2 !important;\">
                    <div class=\"ont tohidbut\">
                        <div id=\"shacontentCaisse\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    localStorage.setItem('reloadd', 'caisse/' + document.getElementById('idcaisse').value + '/' + document.getElementById('idchantier').value);
</script>
";
        // line 1672
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("apcaisses");
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
        return "content/caisse.html.twig";
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
        return array (  2420 => 1672,  2382 => 1637,  2373 => 1631,  2358 => 1619,  2344 => 1608,  2333 => 1600,  2320 => 1590,  2308 => 1581,  2281 => 1557,  2271 => 1550,  2267 => 1549,  2255 => 1539,  2251 => 1537,  2241 => 1530,  2233 => 1525,  2218 => 1513,  2204 => 1502,  2191 => 1492,  2180 => 1484,  2167 => 1474,  2154 => 1464,  2143 => 1456,  2133 => 1449,  2129 => 1448,  2118 => 1439,  2115 => 1438,  2105 => 1431,  2097 => 1426,  2082 => 1414,  2067 => 1402,  2056 => 1394,  2043 => 1384,  2030 => 1374,  2019 => 1366,  2008 => 1358,  2004 => 1357,  1993 => 1348,  1990 => 1347,  1980 => 1340,  1972 => 1335,  1956 => 1322,  1941 => 1310,  1930 => 1302,  1917 => 1292,  1905 => 1283,  1878 => 1259,  1868 => 1252,  1864 => 1251,  1853 => 1242,  1850 => 1241,  1840 => 1234,  1833 => 1230,  1818 => 1218,  1807 => 1210,  1793 => 1199,  1780 => 1189,  1767 => 1179,  1755 => 1170,  1745 => 1163,  1741 => 1162,  1729 => 1152,  1727 => 1151,  1717 => 1144,  1711 => 1141,  1700 => 1133,  1689 => 1125,  1675 => 1114,  1664 => 1106,  1651 => 1096,  1640 => 1088,  1627 => 1078,  1616 => 1070,  1602 => 1059,  1591 => 1051,  1578 => 1041,  1565 => 1031,  1554 => 1023,  1541 => 1013,  1530 => 1005,  1519 => 997,  1508 => 989,  1494 => 978,  1485 => 972,  1481 => 971,  1459 => 952,  1448 => 943,  1442 => 942,  1439 => 941,  1435 => 939,  1429 => 938,  1424 => 936,  1419 => 935,  1416 => 934,  1412 => 933,  1407 => 932,  1404 => 931,  1401 => 930,  1397 => 929,  1374 => 909,  1368 => 906,  1352 => 893,  1341 => 885,  1337 => 884,  1317 => 867,  1311 => 864,  1308 => 863,  1299 => 856,  1292 => 852,  1288 => 850,  1286 => 849,  1279 => 844,  1273 => 842,  1267 => 840,  1265 => 839,  1252 => 828,  1246 => 826,  1240 => 824,  1238 => 823,  1227 => 815,  1223 => 814,  1219 => 812,  1211 => 806,  1203 => 800,  1201 => 799,  1187 => 787,  1180 => 785,  1171 => 779,  1165 => 776,  1162 => 775,  1160 => 774,  1156 => 773,  1152 => 772,  1149 => 771,  1145 => 770,  1141 => 768,  1137 => 766,  1135 => 765,  1079 => 712,  1075 => 711,  1071 => 710,  1067 => 709,  1063 => 708,  1058 => 706,  1054 => 705,  1050 => 704,  990 => 647,  981 => 641,  957 => 620,  931 => 597,  927 => 596,  920 => 592,  910 => 585,  902 => 580,  892 => 573,  881 => 564,  878 => 563,  872 => 562,  869 => 561,  865 => 559,  859 => 558,  856 => 557,  854 => 556,  847 => 552,  842 => 551,  840 => 549,  839 => 546,  835 => 544,  827 => 539,  822 => 537,  818 => 536,  813 => 533,  810 => 532,  808 => 531,  806 => 530,  802 => 529,  799 => 528,  796 => 527,  793 => 526,  790 => 525,  785 => 524,  783 => 523,  772 => 514,  768 => 512,  759 => 507,  750 => 502,  748 => 501,  744 => 499,  735 => 494,  726 => 489,  724 => 488,  720 => 486,  711 => 481,  702 => 476,  700 => 475,  696 => 473,  687 => 468,  678 => 463,  676 => 462,  672 => 460,  663 => 455,  654 => 450,  652 => 449,  648 => 447,  639 => 442,  630 => 437,  628 => 436,  624 => 434,  615 => 429,  606 => 424,  604 => 423,  600 => 421,  591 => 416,  582 => 411,  580 => 410,  576 => 408,  567 => 403,  558 => 398,  556 => 397,  552 => 395,  543 => 390,  534 => 385,  532 => 384,  528 => 382,  519 => 377,  510 => 372,  508 => 371,  504 => 369,  495 => 364,  486 => 359,  484 => 358,  480 => 356,  471 => 351,  462 => 346,  460 => 345,  456 => 343,  447 => 338,  438 => 333,  436 => 332,  432 => 330,  423 => 325,  414 => 320,  412 => 319,  409 => 318,  407 => 317,  404 => 316,  395 => 311,  386 => 306,  384 => 305,  376 => 300,  366 => 292,  358 => 286,  348 => 278,  345 => 277,  343 => 276,  340 => 275,  337 => 274,  331 => 271,  327 => 270,  324 => 269,  321 => 268,  319 => 267,  73 => 24,  48 => 1,);
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

    {{ encore_entry_link_tags('apcaisses') }}
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
                        <li class=\"hidere\">
                            <a href=\"javascript:void(0);\" data-close=\"true\">
                    <span class=\"js-right-sidebars badge bg-pink\">
                      CHANTIERS EN COURS
                    </span>
                            </a>
                        </li>
                    {% endif %}
                    <li class=\"hidere\">
                        <a data-toggle=\"modal\" data-target=\"#ModalSearch\">
                            <i class=\"material-icons\">search</i>
                        </a>
                    </li>
                {% endif %}
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
                        {% for client in clients %}
                            {% set p = 0 %}
                            {% if client.corbeille is null and client.chantiers.count > 0 %}
                                {% if client.type is null %}
                                    <table class=\"table-bordered shadow\" width=\"100%\" style=\" overflow: scroll;\">
                                        {% for chantier in client.chantiers %}
                                            {% if chantier.corbeille is null
                                                and chantier.archiver != 'oui' %}
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
                                                            {{ chantier.nomchantier[0:55]|upper }}
                                                        </a>
                                                    </td>
                                                </tr>
                                                {% set p = p + 1 %}
                                            {% endif %}
                                        {% endfor %}
                                    </table>
                                {% endif %}
                            {% endif %}
                        {% endfor %}
                    {% endif %}
                </div>
            </div>
        </div>
    </aside>
</section>
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

    td.kope {
        color: #E91E63 !important;
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

<input type=\"text\" class=\"hide\" id=\"idchantier\" value=\"{{ chantier.id }}\">
<input type=\"text\" class=\"hide\" id=\"idcaisse\" value=\"{{ caisse.id }}\">
<input type=\"text\" class=\"hide\" id=\"idligne\" value=\"{{ idligne }}\">

<input type=\"text\" class=\"hide\" id=\"jsoncaisse\" value=\"{{ jsoncaisse }}\">
<input type=\"text\" class=\"hide\" id=\"jsonbon\" value=\"{{ jsonbon }}\">
<input type=\"text\" class=\"hide\" id=\"jsonforme\" value=\"{{ jsonforme }}\">
<input type=\"text\" class=\"hide\" id=\"jsonformes\" value=\"{{ jsonformes }}\">
<input type=\"text\" class=\"hide\" id=\"caissedate\" value=\"{{ caisse.date|date('d/m/Y') }}\">

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
                        <table class=\"table-bordered\">
                            <tr class=\"bg-pri text-white\">
                                <th>DÉSIGNATION</th>
                                <th class=\"text-center\" style=\" width: 15%\">MONTANT</th>
                                {% if caisse.etat != 'valide' %}
                                    <th id=\"dis\" style=\"width:7%; padding: 0\"></th>
                                {% endif %}
                            </tr>

                            {% for lign in caisse.lignes %}
                                <tr>
                                    <td style=\"width:70%;\" align=\"left\">{{ lign.designation|raw }}</td>
                                    <td align=\"right\">{{ lign.pu|number_format(2, ',', ' ') }}</td>
                                    {% if caisse.etat != 'valide' %}
                                        <td align=\"center\">
                                            <a href=\"{{ path('editlignecaisse',{'idcaisse':caisse.id,  'idchantier':caisse.getchantier.id, 'idligne':lign.id}) }}\">
                                                <i class=\"fa fa-edit col-green\" aria-hidden=\"true\"
                                                   title=\"Modifier\"></i></a>
                                            <a href=\"{{ path('supligne',{'id':caisse.id,  'idchantier':caisse.getchantier.id,  'idligne':lign.id,  'type':'caisse'}) }}\"
                                               class=\"sholigne\">
                                                <i class=\"fa fa-trash col-pink\" aria-hidden=\"true\"
                                                   title=\"Supprimer\"></i></a>
                                        </td>
                                    {% endif %}
                                </tr>
                            {% endfor %}
                        </table>
                    </div>
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
            {% if editMod %}
                <div class=\"p-5 bg-green\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">MODIFIER UNE DÉSIGNATION</h4>
                    </div>
                </div>
            {% else %}
                <div class=\"p-5 bg-pri\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">AJOUTER UNE DÉSIGNATION</h4>
                    </div>
                </div>
            {% endif %}
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    {{ form_start(forme, {'attr': {'id': 'addLigneCaisseForm'}}) }}
                    {{ form_row(forme._token) }}

                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DÉSIGNATION<span
                                        class=\"col-pink\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {% if editMod %}
                                        {{ form_widget(forme.designation,{'id':'editor2','attr':{'class':'form-control col-green'}}) }}
                                    {% else %}
                                        {{ form_widget(forme.designation,{'id':'editor2','attr':{'class':'form-control'}}) }}
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">MONTANT<span
                                        class=\"col-pink\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {% if editMod %}
                                        {{ form_widget(forme.pu,{'attr':{'class':'form-control','type':'number'}}) }}
                                    {% else %}
                                        {{ form_widget(forme.pu,{'attr':{'class':'form-control','type':'number'}}) }}
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        {% if editMod %}
                            <input type=\"submit\" id=\"updateLigneCaisse\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect text-white bg-green\">
                            <a href=\"{{ path('editlignecaisse', {'idcaisse': caisse.id, 'idligne': idligne , 'idchantier': chantier.id}) }}\"
                               id=\"closeLignecaisse\" class=\"btn btn-link waves-effect text-white bg-pink\">FERMER
                            </a>
                        {% else %}
                            <input type=\"submit\" id=\"addLigneCaisse\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-pri\">
                            <div type=\"button\" id=\"closeLignecaisse\"
                                 class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">FERMER
                            </div>
                        {% endif %}

                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadLignecaisse\">
                    </div>
                    {{ form_end(forme) }}
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
                    <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">MONTANT À PAYER</h4>
                </div>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    {{ form_start(former, {'attr': {'id': 'addMontantForm'}}) }}
                    {{ form_row(former._token) }}

                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">MONTANT À PAYER<span
                                        class=\"col-pink\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(former.montant,{'attr':{'class':'form-control form-control-user','type':'number'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">

                        <input type=\"submit\" id=\"addMontant\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect text-white bg-pri\">
                        <div type=\"button\" id=\"closeMontant\" class=\"btn btn-link waves-effect text-white bg-pink\"
                             data-dismiss=\"modal\">FERMER
                        </div>

                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadMontant\">
                    </div>
                    {{ form_end(former) }}
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
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <select class=\"form-control show-tick\" id=\"deplacerCaisse\" style=\"width:100%\">
                                {% for client in clients %}
                                    {% if client.corbeille is null and client.type is null %}
                                        {% if client.chantiers|length > 0 %}
                                            <optgroup label=\"{{ client.nomclient }}\">
                                                {% for chantier in client.chantiers %}
                                                    {% if chantier.corbeille is null and chantier.type is null %}
                                                        <option value=\"{{ chantier.id }}\"
                                                                class=\"pri font-weight-normal\">{{ chantier.nomchantier[0:55]|upper }}</option>
                                                    {% endif %}
                                                {% endfor %}
                                            </optgroup>
                                        {% endif %}
                                    {% endif %}
                                {% endfor %}
                            </select>
                        </div>
                    </div>
                    <div class=\"text-center m-t-30\">
                        <input type=\"submit\" id=\"deplacerCaisse\" value=\"ENREGISTRER\"
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

{% if caisse.type == 3 %}
    <div class=\"modal fade right\" id=\"updCaisseCharg\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-blue text-white\">
                    <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">CRÉER UN BON DE CAISSE</h4>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        {{ form_start(formCaisse, {'attr': {'id': 'upddCaisseForm'}}) }}
                        {{ form_row(formCaisse._token) }}
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">N° DE DEVIS <span
                                            class=\"col-red\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formCaisse.devis,{'required':'','attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DATE<span
                                            class=\"col-red\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formCaisse.date,{'required':'','attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">POINTS DE PAIE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formCaisse.paie,{'required':'','attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE<span class=\"col-red\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formCaisse.caissereference,{'id':'editor19','attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DEVISE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formCaisse.monnaie,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">TYPE D'OPÉRATION</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formCaisse.operation,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"updInterneCaiss\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect text-white bg-blue\">
                            <div type=\"button\" id=\"cloCaisse\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loCaisse\">
                        </div>
                        <br><br><br>
                        {{ form_end(formCaisse) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% else %}
    {% if caisse.bon is not null %}
        <div class=\"modal fade right\" id=\"modalInfo\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
             aria-hidden=\"true\">
            <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header bg-green col-white\">
                        <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">BON DE CAISSE</h4>
                    </div>
                    <div class=\"modal-body m-t-10 bien\">
                        <div class=\"body\">
                            {{ form_start(formCaisse, {'attr': {'id': 'updCaisseForm' }}) }}
                            <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('updCaisseToken') }}\"/>
                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label m-b--30 col-blue bolo\">FOURNISSEUR<span
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
                                            {{ form_widget(formCaisse.date,{'required':'','attr':{'class':'form-control' }}) }}
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
                                    <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE<span
                                                class=\"col-red\">*</span>
                                    </label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            {{ form_widget(formCaisse.caissereference,{'id':'editor15','attr':{'class':'form-control' }}) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"text-center\">
                                <input type=\"submit\" id=\"updCaisse\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect col-white bg-green\">
                                <div type=\"button\" id=\"closeUpdCaisse\"
                                     class=\"btn btn-link waves-effect col-white bg-pink\"
                                     data-dismiss=\"modal\">
                                    FERMER
                                </div>
                                <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                     class=\"align-justify\" id=\"loadUpdCaisse\"></div>
                            <br>
                            <br>
                            <br>
                            {{ form_end(formCaisse) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {% else %}
        {% if caisse.personnel.type == \"interne\" %}
            <div class=\"modal fade right\" id=\"updCaisseCharg\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
                 aria-hidden=\"true\">
                <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header bg-green col-white\">
                            <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">MODIFIER LE BON INTERNE</h4>
                        </div>
                        <div class=\"modal-body m-t-10 bien\">
                            <div class=\"body\">
                                {{ form_start(formCaisseUpdCharge, {'attr': {'id': 'updCaisseChargeForm' }}) }}
                                {{ form_row(formCaisseUpdCharge._token) }}
                                <div class=\"row clearfix m-b-10\">
                                    <div class=\"col-sm-4\">
                                        <label class=\"form-label m-b--30 col-blue bolo\">DATE<span
                                                    class=\"col-red\">*</span>
                                        </label>
                                        <div class=\"form-group\">
                                            <div class=\"form-line\">
                                                {{ form_widget(formCaisseUpdCharge.date,{'required':'','attr':{'class':'form-control col-pink' }}) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-8\">
                                        <label class=\"form-label m-b--30 col-blue bolo\">POINTS DE PAIE</label>
                                        <div class=\"form-group\">
                                            <div class=\"form-line\">
                                                {{ form_widget(formCaisseUpdCharge.paie,{'required':'','attr':{'class':'form-control col-pink' }}) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row clearfix m-b-10\">
                                    <div class=\"col-sm-12\">
                                        <label class=\"form-label m-b--30 col-blue bolo\">CHARGE INTERNE</label>
                                        <div class=\"form-group\">
                                            <div class=\"form-line\">
                                                {{ form_widget(formCaisseUpdCharge.personnel,{'required':'required','attr':{'class':'form-control col-pink' }}) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row clearfix m-b-10\">
                                    <div class=\"col-sm-6\">
                                        <label class=\"form-label m-b--30 col-blue bolo\">DEVISE</label>
                                        <div class=\"form-group\">
                                            <div class=\"form-line\">
                                                {{ form_widget(formCaisseUpdCharge.monnaie,{'attr':{'class':'form-control col-pink' }}) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <label class=\"form-label m-b--30 col-blue bolo\">TYPE D'OPÉRATION</label>
                                        <div class=\"form-group\">
                                            <div class=\"form-line\">
                                                {{ form_widget(formCaisseUpdCharge.operation,{'attr':{'class':'form-control col-pink' }}) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row clearfix m-b-10\">
                                    <div class=\"col-sm-12\">
                                        <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE<span
                                                    class=\"col-red\">*</span>
                                        </label>
                                        <div class=\"form-group\">
                                            <div class=\"form-line\">
                                                {{ form_widget(formCaisseUpdCharge.caissereference,{'id':'editor19','attr':{'class':'form-control col-pink' }}) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"text-center\">
                                    <input type=\"submit\" id=\"updInterneCaisse\" value=\"MODIFIER\"
                                           class=\"btn btn-link waves-effect col-white bg-green\">
                                    <div type=\"button\" id=\"closerUpdInterneCaisse\"
                                         class=\"btn btn-link waves-effect col-white bg-pink\"
                                         data-dismiss=\"modal\">FERMER
                                    </div>
                                    <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                         class=\"align-justify\" id=\"loaderUpdinterneCaisse\"></div>
                                <br>
                                <br>
                                <br>
                                {{ form_end(formCaisseUpdCharge) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {% endif %}
        {% if caisse.personnel.type == \"personnelle\" %}
            <div class=\"modal fade right\" id=\"updCaisseCharg\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
                 aria-hidden=\"true\">
                <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header bg-green col-white\">
                            <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">MODIFIER LE BON PERSONNEL</h4>
                        </div>
                        <div class=\"modal-body m-t-10 bien\">
                            <div class=\"body\">
                                {{ form_start(formCaissePerso, {'attr': {'id': 'updCaissePersonnelForm' }}) }}
                                {{ form_row(formCaissePerso._token) }}
                                <div class=\"row clearfix m-b-10\">
                                    <div class=\"col-sm-4\">
                                        <label class=\"form-label m-b--30 col-blue bolo\">DATE<span class=\"col-red\">*</span>
                                        </label>
                                        <div class=\"form-group\">
                                            <div class=\"form-line\">
                                                {{ form_widget(formCaissePerso.date,{'required':'','attr':{'class':'form-control' }}) }}
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
                                    <input type=\"submit\" id=\"updCaissePersonnel\" value=\"MODIFIER\"
                                           class=\"btn btn-link waves-effect col-white bg-green\">
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
        {% endif %}
    {% endif %}
{% endif %}

<div class=\"modal fade right\" id=\"modalCaisse\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-blue col-white\">
                <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">BON DE CAISSE POUR FOURNISSEUR</h4>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    {{ form_start(formneCaisse, {'attr': {'id': 'addeCaisseForm' }}) }}
                    <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addeCaisseToken') }}\"/>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">FOURNISSEUR<span
                                        class=\"col-red\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formneCaisse.fournisseur,{'id':'sefone','attr':{'class':'form-control ploc'}}) }}
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
                                    {{ form_widget(formneCaisse.paie,{'required':'','attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-5\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DATE<span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formneCaisse.date,{'required':'','attr':{'class':'form-control datepicker' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DEVISE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formneCaisse.monnaie,{'attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">TYPE D'OPÉRATION</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formneCaisse.operation,{'attr':{'class':'form-control' }}) }}
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
                                    {{ form_widget(formneCaisse.caissereference,{'id':'editor15','attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"adderCaisse\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect col-white bg-blue\">
                        <div type=\"button\" id=\"closerCaisse\" class=\"btn btn-link waves-effect col-white bg-pink\"
                             data-dismiss=\"modal\">
                            FERMER
                        </div>
                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loaderCaisse\">
                    </div>
                    <br>
                    <br>
                    <br>
                    {{ form_end(formneCaisse) }}
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
            <div class=\"col-sm-12\">
                <div class=\"mb-2 m-t--25\"
                     style=\"background-color: #d1d3e2 !important;\">
                    <div class=\"ont tohidbut\">
                        <div id=\"shacontentCaisse\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    localStorage.setItem('reloadd', 'caisse/' + document.getElementById('idcaisse').value + '/' + document.getElementById('idchantier').value);
</script>
{{ encore_entry_script_tags('apcaisses') }}
</body>
</html>

", "content/caisse.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\caisse.html.twig");
    }
}
