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

/* content/bon.html.twig */
class __TwigTemplate_84a9d498f639c998ce4e4f760f5b598a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/bon.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/bon.html.twig"));

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
        // line 21
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("apbons");
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
        // line 265
        if ((($tmp =  !array_key_exists("libre", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 266
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 266, $this->source); })()), "user", [], "any", false, false, false, 266)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 267
                yield "                        <li class=\"col-yellow h4 bolo600 m-l-20\">
                            ";
                // line 268
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 268, $this->source); })()), "user", [], "any", false, false, false, 268), "nom", [], "any", false, false, false, 268)), "html", null, true);
                yield "
                            ";
                // line 269
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 269, $this->source); })()), "user", [], "any", false, false, false, 269), "prenoms", [], "any", false, false, false, 269)), "html", null, true);
                yield "
                        </li>
                    ";
            }
            // line 272
            yield "                ";
        }
        // line 273
        yield "
                ";
        // line 274
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 274, $this->source); })()), "user", [], "any", false, false, false, 274)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 275
            yield "                    ";
            if (( !array_key_exists("libre", $context) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 275, $this->source); })()), "user", [], "any", false, false, false, 275))) {
                // line 276
                yield "                        <li class=\"hidere\">
                            <a href=\"javascript:void(0);\" data-close=\"true\">
                    <span class=\"js-right-sidebars badge bg-pink\">
                      CHANTIERS EN COURS
                    </span>
                            </a>
                        </li>
                    ";
            }
            // line 284
            yield "                    <li class=\"hidere\">
                        <a data-toggle=\"modal\" data-target=\"#ModalSearch\">
                            <i class=\"material-icons\">search</i>
                        </a>
                    </li>
                ";
        }
        // line 290
        yield "            </ul>
        </div>
    </div>
</nav>
<section>
    <aside id=\"leftsidebar\" class=\"sidebar text-center bg-pri\"
           style=\"z-index: 1000 !important; margin-top: -70px; width: 240px; height: 100%\">
        <div class=\"user-info\" style=\"height: 150px !important;\">
            <img src=\"";
        // line 298
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logoy.png"), "html", null, true);
        yield "\" style=\"float: left; width: 200px !important;margin-top: 10px\"/>
        </div>
        <div class=\"menu\">
            <ul class=\"list\">
                <li class=\"active\">
                    ";
        // line 303
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 303, $this->source); })()) == "page"))) {
            // line 304
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("welcome");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">home</i>
                            <span class=\"col-yellow\">ACCUEIL</span>
                        </a>
                    ";
        } else {
            // line 309
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("welcome");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">home</i>
                            <span class=\"text-white\">Accueil</span>
                        </a>
                    ";
        }
        // line 314
        yield "                </li>
                ";
        // line 315
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 315, $this->source); })()), "user", [], "any", false, false, false, 315)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 316
            yield "                    <li class=\"active\">
                        ";
            // line 317
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 317, $this->source); })()) == "message"))) {
                // line 318
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">email</i>
                                <span class=\"col-yellow\">MESSAGERIE</span>
                            </a>
                        ";
            } else {
                // line 323
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">email</i>
                                <span class=\"text-white\">Messagerie</span>
                            </a>
                        ";
            }
            // line 328
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 330
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 330, $this->source); })()) == "article"))) {
                // line 331
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">content_copy</i>
                                <span class=\"col-yellow\">GESTION DES ARTICLES</span>
                            </a>
                        ";
            } else {
                // line 336
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">content_copy</i>
                                <span class=\"text-white\">Gestion des articles</span>
                            </a>
                        ";
            }
            // line 341
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 343
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 343, $this->source); })()) == "listeclient"))) {
                // line 344
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeclient");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">content_copy</i>
                                <span class=\"col-yellow\">LISTE DES CLIENTS</span>
                            </a>
                        ";
            } else {
                // line 349
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeclient");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">content_copy</i>
                                <span class=\"text-white\">Liste des clients</span>
                            </a>
                        ";
            }
            // line 354
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 356
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 356, $this->source); })()) == "chanetude"))) {
                // line 357
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chanetude");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">content_copy</i>
                                <span class=\"col-yellow\">CHANTIERS EN ÉTUDE</span>
                            </a>
                        ";
            } else {
                // line 362
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chanetude");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">content_copy</i>
                                <span class=\"text-white\">Chantiers en étude</span>
                            </a>
                        ";
            }
            // line 367
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 369
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 369, $this->source); })()) == "chancours"))) {
                // line 370
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chancours");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">widgets</i>
                                <span class=\"col-yellow\">CHANTIERS EN COURS</span>
                            </a>
                        ";
            } else {
                // line 375
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chancours");
                yield "\">
                                <i class=\"material-icons text-white\">widgets</i>
                                <span class=\"text-white\">Chantiers en cours</span>
                            </a>
                        ";
            }
            // line 380
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 382
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 382, $this->source); })()) == "chanechouer"))) {
                // line 383
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chanechouer");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">widgets</i>
                                <span class=\"col-yellow\">CHANTIERS ÉCHOUÉS</span>
                            </a>
                        ";
            } else {
                // line 388
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chanechouer");
                yield "\">
                                <i class=\"material-icons text-white\">widgets</i>
                                <span class=\"text-white\">Chantiers échoués</span>
                            </a>
                        ";
            }
            // line 393
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 395
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 395, $this->source); })()) == "chanclotures"))) {
                // line 396
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chanclotures");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">widgets</i>
                                <span class=\"col-yellow\">CHANTIERS CLÔTURÉS</span>
                            </a>
                        ";
            } else {
                // line 401
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chanclotures");
                yield "\">
                                <i class=\"material-icons text-white\">widgets</i>
                                <span class=\"text-white\">Chantiers clôturés</span>
                            </a>
                        ";
            }
            // line 406
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 408
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 408, $this->source); })()) == "chantermines"))) {
                // line 409
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantermines");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">widgets</i>
                                <span class=\"col-yellow\">CHANTIERS TERMINÉS</span>
                            </a>
                        ";
            } else {
                // line 414
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantermines");
                yield "\">
                                <i class=\"material-icons text-white\">widgets</i>
                                <span class=\"text-white\">Chantiers terminés</span>
                            </a>
                        ";
            }
            // line 419
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 421
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 421, $this->source); })()) == "technique"))) {
                // line 422
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technique");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">open_with</i>
                                <span class=\"col-yellow\">GESTION TECHNIQUE</span>
                            </a>
                        ";
            } else {
                // line 427
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technique");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">open_with</i>
                                <span class=\"text-white\">Gestion technique</span>
                            </a>
                        ";
            }
            // line 432
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 434
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 434, $this->source); })()) == "materiel"))) {
                // line 435
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("materiel");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">bubble_chart</i>
                                <span class=\"col-yellow\">GESTION DU MATÉRIEL</span>
                            </a>
                        ";
            } else {
                // line 440
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("materiel");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">bubble_chart</i>
                                <span class=\"text-white\">Gestion du matériel</span>
                            </a>
                        ";
            }
            // line 445
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 447
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 447, $this->source); })()) == "personnel"))) {
                // line 448
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnel");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">people_outline</i>
                                <span class=\"col-yellow\">GESTION DU PERSONNEL</span>
                            </a>
                        ";
            } else {
                // line 453
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnel");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">people_outline</i>
                                <span class=\"text-white\">Gestion du personnel</span>
                            </a>
                        ";
            }
            // line 458
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 460
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 460, $this->source); })()) == "paie"))) {
                // line 461
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paie");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">toll</i>
                                <span class=\"col-yellow\">POINTS DE PAIE</span>
                            </a>
                        ";
            } else {
                // line 466
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paie");
                yield "\">
                                <i class=\"material-icons text-white\">toll</i>
                                <span class=\"text-white\">Points de paie</span>
                            </a>
                        ";
            }
            // line 471
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 473
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 473, $this->source); })()) == "parametre"))) {
                // line 474
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parametre");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">center_focus_weak</i>
                                <span class=\"col-yellow\">PARAMÈTRES</span>
                            </a>
                        ";
            } else {
                // line 479
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parametre");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">center_focus_weak</i>
                                <span class=\"text-white\">Paramètres</span>
                            </a>
                        ";
            }
            // line 484
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 486
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 486, $this->source); })()) == "historique"))) {
                // line 487
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historique");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">history</i>
                                <span class=\"col-yellow\">HISTORIQUE</span>
                            </a>
                        ";
            } else {
                // line 492
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historique");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">history</i>
                                <span class=\"text-white\">Historique</span>
                            </a>
                        ";
            }
            // line 497
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 499
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 499, $this->source); })()) == "corbeille"))) {
                // line 500
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("corbeille");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">delete</i>
                                <span class=\"col-yellow\">CORBEILLE</span>
                            </a>
                        ";
            } else {
                // line 505
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("corbeille");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">delete</i>
                                <span class=\"text-white\">Corbeille</span>
                            </a>
                        ";
            }
            // line 510
            yield "                    </li>
                ";
        }
        // line 512
        yield "            </ul>
        </div>


    </aside>
    <aside id=\"rightsidebars\" class=\"right-sidebars m-t--25 p-t-10\" style=\"overflow: scroll\">
        <div class=\"tab-content\">
            <div role=\"tabpanel\" class=\"tab-pane fade in active in active\" id=\"chantier\">
                <div class=\"table-responsive\" style=\"padding: 10px !important;\">
                    ";
        // line 521
        if ((($tmp =  !array_key_exists("libre", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 522
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 522, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 523
                yield "                            ";
                $context["p"] = 0;
                // line 524
                yield "                            ";
                if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 524)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 524), "count", [], "any", false, false, false, 524) > 0))) {
                    // line 525
                    yield "                                ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 525))) {
                        // line 526
                        yield "                                    <table class=\"table-bordered shadow\" width=\"100%\" style=\" overflow: scroll;\">
                                        ";
                        // line 527
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 527));
                        foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                            // line 528
                            yield "                                            ";
                            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 528)) && (CoreExtension::getAttribute($this->env, $this->source,                             // line 529
$context["chantier"], "archiver", [], "any", false, false, false, 529) != "oui"))) {
                                // line 530
                                yield "                                                ";
                                if (((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 530, $this->source); })()) == 0)) {
                                    // line 531
                                    yield "                                                    <tr>
                                                        <td colspan=\"2\" class=\"bg-blue text-white\"
                                                            style=\"padding-left: 5px;\">
                                                            <a href=\"";
                                    // line 534
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 534)]), "html", null, true);
                                    yield "\"
                                                               class=\"text-white\" title=\"";
                                    // line 535
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 535), "html", null, true);
                                    yield "\">
                                                                -
                                                                ";
                                    // line 537
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 537), "html", null, true);
                                    yield "
                                                            </a>
                                                        </td>
                                                    </tr>
                                                ";
                                }
                                // line 542
                                yield "                                                <tr>
                                                    <td style=\"padding-left: 5px\" colspan=\"2\" class=\"bg-light\">
                                                        <a href=\"";
                                // line 544
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source,                                 // line 547
$context["chantier"], "id", [], "any", false, false, false, 547)]), "html", null, true);
                                // line 549
                                yield "\" class=\"text-pri\" title=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 549), "html", null, true);
                                yield "\">
                                                            ";
                                // line 550
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 550), 0, 55)), "html", null, true);
                                yield "
                                                        </a>
                                                    </td>
                                                </tr>
                                                ";
                                // line 554
                                $context["p"] = ((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 554, $this->source); })()) + 1);
                                // line 555
                                yield "                                            ";
                            }
                            // line 556
                            yield "                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 557
                        yield "                                    </table>
                                ";
                    }
                    // line 559
                    yield "                            ";
                }
                // line 560
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 561
            yield "                    ";
        }
        // line 562
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
        // line 571
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((30 - CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 571, $this->source); })()), "headerHeight", [], "any", false, false, false, 571)) - CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 571, $this->source); })()), "footerHeight", [], "any", false, false, false, 571)), "html", null, true);
        yield "cm;
        padding-left: 1cm;
        padding-right: 1cm;
        overflow-y: scroll;
    }
    .footer {
        height: ";
        // line 577
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 577, $this->source); })()), "footerHeight", [], "any", false, false, false, 577), "html", null, true);
        yield "cm;
        bottom: 0;
    }
    .header {
        height: ";
        // line 581
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 581, $this->source); })()), "headerHeight", [], "any", false, false, false, 581), "html", null, true);
        yield "cm;
        -webkit-print-color-adjust: exact;
        top: 0;
    }
    @media print {
        .footer-space {
            height: ";
        // line 587
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 587, $this->source); })()), "footerHeight", [], "any", false, false, false, 587), "html", null, true);
        yield "cm;
        }

        .header-space {
            height: ";
        // line 591
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 591, $this->source); })()), "headerHeight", [], "any", false, false, false, 591), "html", null, true);
        yield "cm;
            margin-top: ";
        // line 592
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 592, $this->source); })()), "teteDH", [], "any", false, false, false, 592), "html", null, true);
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
        // line 608
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 608, $this->source); })()), "decolor", [], "any", false, false, false, 608), "html", null, true);
        yield " !important;
            color: ";
        // line 609
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 609, $this->source); })()), "decolortex", [], "any", false, false, false, 609), "html", null, true);
        yield " !important;
        }

        table {
            border-spacing: 0;
            border-collapse: collapse;
            font-size: ";
        // line 615
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 615, $this->source); })()), "dsize", [], "any", false, false, false, 615), "html", null, true);
        yield "px;
            font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
        }

    }
</style>
<style>
    .kop {
        font-weight: 700
    }

    td.kope {
        color: #E91E63 !important;
        font-weight: bold
    }

    table {
        border-spacing: 0;
        border-collapse: collapse;
        font-size: ";
        // line 634
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 634, $this->source); })()), "dsize", [], "any", false, false, false, 634), "html", null, true);
        yield "px;
        font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
    }

    .togo {
        background-color: #EAEDED !important;
        font-size: ";
        // line 640
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 640, $this->source); })()), "dsize", [], "any", false, false, false, 640), "html", null, true);
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
        // line 663
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 663, $this->source); })()), "decolor", [], "any", false, false, false, 663), "html", null, true);
        yield " !important;
        color: ";
        // line 664
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forte"]) || array_key_exists("forte", $context) ? $context["forte"] : (function () { throw new RuntimeError('Variable "forte" does not exist.', 664, $this->source); })()), "decolortex", [], "any", false, false, false, 664), "html", null, true);
        yield " !important;
        text-align: center;
    }

    tr.printo {
        background-color: #F0F0F0 !important;
        font-weight: 700 !important;
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
        // line 702
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 702, $this->source); })()), "id", [], "any", false, false, false, 702), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"idbon\" value=\"";
        // line 703
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 703, $this->source); })()), "id", [], "any", false, false, false, 703), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"idgroupe\" value=\"";
        // line 704
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["idgroupe"]) || array_key_exists("idgroupe", $context) ? $context["idgroupe"] : (function () { throw new RuntimeError('Variable "idgroupe" does not exist.', 704, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"idligne\" value=\"";
        // line 705
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["idligne"]) || array_key_exists("idligne", $context) ? $context["idligne"] : (function () { throw new RuntimeError('Variable "idligne" does not exist.', 705, $this->source); })()), "html", null, true);
        yield "\">

<input type=\"text\" class=\"hide\" id=\"jsonbon\" value=\"";
        // line 707
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["jsonbon"]) || array_key_exists("jsonbon", $context) ? $context["jsonbon"] : (function () { throw new RuntimeError('Variable "jsonbon" does not exist.', 707, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"jsonforme\" value=\"";
        // line 708
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["jsonforme"]) || array_key_exists("jsonforme", $context) ? $context["jsonforme"] : (function () { throw new RuntimeError('Variable "jsonforme" does not exist.', 708, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"jsonformes\" value=\"";
        // line 709
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["jsonformes"]) || array_key_exists("jsonformes", $context) ? $context["jsonformes"] : (function () { throw new RuntimeError('Variable "jsonformes" does not exist.', 709, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"bondate\" value=\"";
        // line 710
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 710, $this->source); })()), "date", [], "any", false, false, false, 710), "d/m/y"), "html", null, true);
        yield "\">

";
        // line 712
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 712, $this->source); })()), "type", [], "any", false, false, false, 712) == "pst")) {
            // line 713
            yield "    <div class=\"modal fade right\" id=\"modalBon\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-green col-white\">
                    <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">MODIFIER UN BON PRESTATAIRE</h4>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
            // line 722
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 722, $this->source); })()), 'form_start', ["attr" => ["id" => "updBonPrestaForm"]]);
            yield "
                        <input type=\"hidden\" name=\"token\" value=\"";
            // line 723
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("updBonPrestaToken"), "html", null, true);
            yield "\"/>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">CHANTIER</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
            // line 729
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 729, $this->source); })()), "chantier", [], "any", false, false, false, 729), 'widget', ["id" => "sechane", "attr" => ["class" => "form-control col-pink"]]);
            yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DEVIS VALIDÉS
                                    <span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        <select class=\"form-control seldevis col-pink\" name=\"devis\"></select>
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
            // line 753
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 753, $this->source); })()), "fournisseur", [], "any", false, false, false, 753), 'widget', ["required" => "", "attr" => ["class" => "form-control col-pink"]]);
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
            // line 765
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 765, $this->source); })()), "bonreference", [], "any", false, false, false, 765), 'widget', ["required" => "required", "id" => "editor", "attr" => ["class" => "form-control col-pink"]]);
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
            // line 776
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 776, $this->source); })()), "monnaie", [], "any", false, false, false, 776), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
            yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">TVA(%)</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
            // line 784
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 784, $this->source); })()), "tva", [], "any", false, false, false, 784), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
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
            // line 794
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 794, $this->source); })()), "ptva", [], "any", false, false, false, 794), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
            yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">BON AVEC REMISE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
            // line 802
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 802, $this->source); })()), "aarem", [], "any", false, false, false, 802), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
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
            // line 812
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 812, $this->source); })()), "aaref", [], "any", false, false, false, 812), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
            yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">DATE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
            // line 820
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 820, $this->source); })()), "date", [], "any", false, false, false, 820), 'widget', ["attr" => ["class" => "form-control datepicker col-pink"]]);
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
            // line 830
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 830, $this->source); })()), "conditions", [], "any", false, false, false, 830), 'widget', ["id" => "editor2", "attr" => ["class" => "form-control col-pink"]]);
            yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"updBonPresta\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect col-white bg-green\">
                            <div type=\"button\" id=\"closeUpdBonPresta\" class=\"btn btn-link waves-effect col-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"";
            // line 842
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
            yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadUpdBonPresta\"></div>
                        <br>
                        <br>
                        <br>
                        ";
            // line 847
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 847, $this->source); })()), 'form_end');
            yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        } else {
            // line 854
            yield "    <div class=\"modal fade right\" id=\"modalBon\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-green col-white\">
                    <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">MODIFIER UN BON FOURNISSEUR</h4>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
            // line 863
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 863, $this->source); })()), 'form_start', ["attr" => ["id" => "updBonFournForm"]]);
            yield "
                        <input type=\"hidden\" name=\"token\" value=\"";
            // line 864
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("updBonFournToken"), "html", null, true);
            yield "\"/>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DEVIS VALIDÉS
                                    <span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        <select class=\"form-control seldeu col-pink\" name=\"devis\"></select>
                                    </div>
                                    <p class=\"h6 didu\" style=\"margin-top:5px !important\"></p>
                                </div>

                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">BON DE SUIVI</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
            // line 882
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 882, $this->source); })()), "preparation", [], "any", false, false, false, 882), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
            yield "
                                    </div>
                                    <p class=\"h6 cocon\"></p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">TYPE DE BON</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
            // line 893
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 893, $this->source); })()), "type", [], "any", false, false, false, 893), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
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
            // line 904
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 904, $this->source); })()), "chantier", [], "any", false, false, false, 904), 'widget', ["id" => "sechau", "attr" => ["class" => "form-control col-pink"]]);
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
            // line 914
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 914, $this->source); })()), "fournisseur", [], "any", false, false, false, 914), 'widget', ["required" => "", "attr" => ["class" => "form-control col-pink"]]);
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
            // line 927
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 927, $this->source); })()), "bonreference", [], "any", false, false, false, 927), 'widget', ["id" => "editor", "attr" => ["class" => "form-control col-pink"]]);
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
            // line 938
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 938, $this->source); })()), "monnaie", [], "any", false, false, false, 938), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
            yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">TVA(%)</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
            // line 946
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 946, $this->source); })()), "tva", [], "any", false, false, false, 946), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
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
            // line 956
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 956, $this->source); })()), "ptva", [], "any", false, false, false, 956), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
            yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">BON AVEC REMISE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
            // line 964
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 964, $this->source); })()), "aarem", [], "any", false, false, false, 964), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
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
            // line 974
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 974, $this->source); })()), "aaref", [], "any", false, false, false, 974), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
            yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">DATE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
            // line 982
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 982, $this->source); })()), "date", [], "any", false, false, false, 982), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
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
            // line 992
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 992, $this->source); })()), "modele", [], "any", false, false, false, 992), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">MODÈLE DE RÉSULTAT</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
            // line 1000
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1000, $this->source); })()), "model", [], "any", false, false, false, 1000), 'widget', ["attr" => ["class" => "form-control"]]);
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
            // line 1010
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1010, $this->source); })()), "conditions", [], "any", false, false, false, 1010), 'widget', ["id" => "editor2", "attr" => ["class" => "form-control col-pink"]]);
            yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"updBonFourn\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect col-white bg-green\">
                            <div type=\"button\" id=\"closeUpdBonFourn\" class=\"btn btn-link waves-effect col-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"";
            // line 1022
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
            yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadUpdBonFourn\"></div>
                        <br>
                        <br>
                        <br>
                        ";
            // line 1027
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1027, $this->source); })()), 'form_end');
            yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        }
        // line 1034
        yield "
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
        // line 1044
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formBonPresta"]) || array_key_exists("formBonPresta", $context) ? $context["formBonPresta"] : (function () { throw new RuntimeError('Variable "formBonPresta" does not exist.', 1044, $this->source); })()), 'form_start', ["attr" => ["id" => "addBonPrestaForm"]]);
        yield "
                    <input type=\"hidden\" name=\"token\" value=\"";
        // line 1045
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addBonPrestaToken"), "html", null, true);
        yield "\"/>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">CHANTIER</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1051
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBonPresta"]) || array_key_exists("formBonPresta", $context) ? $context["formBonPresta"] : (function () { throw new RuntimeError('Variable "formBonPresta" does not exist.', 1051, $this->source); })()), "chantier", [], "any", false, false, false, 1051), 'widget', ["id" => "secha", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DEVIS VALIDÉS
                                <span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group\">
                                <div class=\"form-line col-pink\">
                                    <select class=\"form-control sedevis\" name=\"devis\"></select>
                                </div>
                                <p class=\"h6 dido\" style=\"margin-top:5px !important\"></p>
                            </div>

                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">PRESTATAIRE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1075
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBonPresta"]) || array_key_exists("formBonPresta", $context) ? $context["formBonPresta"] : (function () { throw new RuntimeError('Variable "formBonPresta" does not exist.', 1075, $this->source); })()), "fournisseur", [], "any", false, false, false, 1075), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
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
        // line 1087
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBonPresta"]) || array_key_exists("formBonPresta", $context) ? $context["formBonPresta"] : (function () { throw new RuntimeError('Variable "formBonPresta" does not exist.', 1087, $this->source); })()), "bonreference", [], "any", false, false, false, 1087), 'widget', ["id" => "editor3", "attr" => ["class" => "form-control"]]);
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
        // line 1098
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBonPresta"]) || array_key_exists("formBonPresta", $context) ? $context["formBonPresta"] : (function () { throw new RuntimeError('Variable "formBonPresta" does not exist.', 1098, $this->source); })()), "monnaie", [], "any", false, false, false, 1098), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">TVA(%)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBonPresta"]) || array_key_exists("formBonPresta", $context) ? $context["formBonPresta"] : (function () { throw new RuntimeError('Variable "formBonPresta" does not exist.', 1106, $this->source); })()), "tva", [], "any", false, false, false, 1106), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 1116
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBonPresta"]) || array_key_exists("formBonPresta", $context) ? $context["formBonPresta"] : (function () { throw new RuntimeError('Variable "formBonPresta" does not exist.', 1116, $this->source); })()), "ptva", [], "any", false, false, false, 1116), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">BON AVEC REMISE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1124
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBonPresta"]) || array_key_exists("formBonPresta", $context) ? $context["formBonPresta"] : (function () { throw new RuntimeError('Variable "formBonPresta" does not exist.', 1124, $this->source); })()), "aarem", [], "any", false, false, false, 1124), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 1134
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBonPresta"]) || array_key_exists("formBonPresta", $context) ? $context["formBonPresta"] : (function () { throw new RuntimeError('Variable "formBonPresta" does not exist.', 1134, $this->source); })()), "aaref", [], "any", false, false, false, 1134), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">DATE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1142
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBonPresta"]) || array_key_exists("formBonPresta", $context) ? $context["formBonPresta"] : (function () { throw new RuntimeError('Variable "formBonPresta" does not exist.', 1142, $this->source); })()), "date", [], "any", false, false, false, 1142), 'widget', ["attr" => ["class" => "form-control datepicker"]]);
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
        // line 1152
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBonPresta"]) || array_key_exists("formBonPresta", $context) ? $context["formBonPresta"] : (function () { throw new RuntimeError('Variable "formBonPresta" does not exist.', 1152, $this->source); })()), "conditions", [], "any", false, false, false, 1152), 'widget', ["id" => "editor6", "attr" => ["class" => "form-control"]]);
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
        // line 1164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadBonPresta\"></div>
                    <br>
                    <br>
                    <br>
                    ";
        // line 1169
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formBonPresta"]) || array_key_exists("formBonPresta", $context) ? $context["formBonPresta"] : (function () { throw new RuntimeError('Variable "formBonPresta" does not exist.', 1169, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalBonFourne\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-blue col-white\">
                <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">BON FOURNISSEUR</h4>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    ";
        // line 1184
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formBonFourne"]) || array_key_exists("formBonFourne", $context) ? $context["formBonFourne"] : (function () { throw new RuntimeError('Variable "formBonFourne" does not exist.', 1184, $this->source); })()), 'form_start', ["attr" => ["id" => "addBonFournForm"]]);
        yield "
                    <input type=\"hidden\" name=\"token\" value=\"";
        // line 1185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addBonFournToken"), "html", null, true);
        yield "\"/>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">TYPE DE BON</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1191
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBonFourne"]) || array_key_exists("formBonFourne", $context) ? $context["formBonFourne"] : (function () { throw new RuntimeError('Variable "formBonFourne" does not exist.', 1191, $this->source); })()), "type", [], "any", false, false, false, 1191), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 1202
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBonFourne"]) || array_key_exists("formBonFourne", $context) ? $context["formBonFourne"] : (function () { throw new RuntimeError('Variable "formBonFourne" does not exist.', 1202, $this->source); })()), "chantier", [], "any", false, false, false, 1202), 'widget', ["id" => "sechas", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DEVIS VALIDÉS
                                <span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group\">
                                <div class=\"form-line col-pink\">
                                    <select class=\"form-control seldevs\" name=\"devis\"></select>
                                </div>
                                <p class=\"h6 dides\" style=\"margin-top:5px !important\"></p>
                            </div>

                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">FOURNISSEUR</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1226
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBonFourne"]) || array_key_exists("formBonFourne", $context) ? $context["formBonFourne"] : (function () { throw new RuntimeError('Variable "formBonFourne" does not exist.', 1226, $this->source); })()), "fournisseur", [], "any", false, false, false, 1226), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
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
        // line 1239
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBonFourne"]) || array_key_exists("formBonFourne", $context) ? $context["formBonFourne"] : (function () { throw new RuntimeError('Variable "formBonFourne" does not exist.', 1239, $this->source); })()), "bonreference", [], "any", false, false, false, 1239), 'widget', ["id" => "editor7", "attr" => ["class" => "form-control"]]);
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
        // line 1250
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBonFourne"]) || array_key_exists("formBonFourne", $context) ? $context["formBonFourne"] : (function () { throw new RuntimeError('Variable "formBonFourne" does not exist.', 1250, $this->source); })()), "monnaie", [], "any", false, false, false, 1250), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">TVA(%)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1258
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBonFourne"]) || array_key_exists("formBonFourne", $context) ? $context["formBonFourne"] : (function () { throw new RuntimeError('Variable "formBonFourne" does not exist.', 1258, $this->source); })()), "tva", [], "any", false, false, false, 1258), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 1268
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBonFourne"]) || array_key_exists("formBonFourne", $context) ? $context["formBonFourne"] : (function () { throw new RuntimeError('Variable "formBonFourne" does not exist.', 1268, $this->source); })()), "ptva", [], "any", false, false, false, 1268), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">BON AVEC REMISE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1276
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBonFourne"]) || array_key_exists("formBonFourne", $context) ? $context["formBonFourne"] : (function () { throw new RuntimeError('Variable "formBonFourne" does not exist.', 1276, $this->source); })()), "aarem", [], "any", false, false, false, 1276), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 1286
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBonFourne"]) || array_key_exists("formBonFourne", $context) ? $context["formBonFourne"] : (function () { throw new RuntimeError('Variable "formBonFourne" does not exist.', 1286, $this->source); })()), "aaref", [], "any", false, false, false, 1286), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">DATE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1294
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBonFourne"]) || array_key_exists("formBonFourne", $context) ? $context["formBonFourne"] : (function () { throw new RuntimeError('Variable "formBonFourne" does not exist.', 1294, $this->source); })()), "date", [], "any", false, false, false, 1294), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 1304
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBonFourne"]) || array_key_exists("formBonFourne", $context) ? $context["formBonFourne"] : (function () { throw new RuntimeError('Variable "formBonFourne" does not exist.', 1304, $this->source); })()), "modele", [], "any", false, false, false, 1304), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">MODÈLE DE RÉSULTAT</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1312
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBonFourne"]) || array_key_exists("formBonFourne", $context) ? $context["formBonFourne"] : (function () { throw new RuntimeError('Variable "formBonFourne" does not exist.', 1312, $this->source); })()), "model", [], "any", false, false, false, 1312), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 1322
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBonFourne"]) || array_key_exists("formBonFourne", $context) ? $context["formBonFourne"] : (function () { throw new RuntimeError('Variable "formBonFourne" does not exist.', 1322, $this->source); })()), "conditions", [], "any", false, false, false, 1322), 'widget', ["id" => "editor8", "attr" => ["class" => "form-control"]]);
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
        // line 1334
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadBonFourn\"></div>
                    <br>
                    <br>
                    <br>
                    ";
        // line 1339
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formBonFourne"]) || array_key_exists("formBonFourne", $context) ? $context["formBonFourne"] : (function () { throw new RuntimeError('Variable "formBonFourne" does not exist.', 1339, $this->source); })()), 'form_end');
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
        // line 1349
        if ((($tmp = (isset($context["editGrou"]) || array_key_exists("editGrou", $context) ? $context["editGrou"] : (function () { throw new RuntimeError('Variable "editGrou" does not exist.', 1349, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1350
            yield "                <div class=\"p-5 bg-green\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">MODIFIER UN LOT</h4>
                    </div>
                </div>
            ";
        } else {
            // line 1356
            yield "                <div class=\"modal-header bg-pri\">
                    <div class=\"p-5 text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">CRÉER UN LOT</h4>
                    </div>
                </div>
            ";
        }
        // line 1362
        yield "            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    ";
        // line 1364
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formGroup"]) || array_key_exists("formGroup", $context) ? $context["formGroup"] : (function () { throw new RuntimeError('Variable "formGroup" does not exist.', 1364, $this->source); })()), 'form_start', ["attr" => ["id" => "addGroupeBonForm"]]);
        yield "
                    ";
        // line 1365
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formGroup"]) || array_key_exists("formGroup", $context) ? $context["formGroup"] : (function () { throw new RuntimeError('Variable "formGroup" does not exist.', 1365, $this->source); })()), "_token", [], "any", false, false, false, 1365), 'row');
        yield "
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">RÉFÉRENCE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line  ";
        // line 1370
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1370, $this->source); })()), "aaref", [], "any", false, false, false, 1370) != "oui")) {
            yield "disabled";
        }
        yield "\">
                                    ";
        // line 1371
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1371, $this->source); })()), "aaref", [], "any", false, false, false, 1371) == "oui")) {
            // line 1372
            yield "                                        ";
            if ((($tmp = (isset($context["editGrou"]) || array_key_exists("editGrou", $context) ? $context["editGrou"] : (function () { throw new RuntimeError('Variable "editGrou" does not exist.', 1372, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1373
                yield "                                            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formGroup"]) || array_key_exists("formGroup", $context) ? $context["formGroup"] : (function () { throw new RuntimeError('Variable "formGroup" does not exist.', 1373, $this->source); })()), "reference", [], "any", false, false, false, 1373), 'widget', ["attr" => ["class" => "form-control col-green"]]);
                yield "
                                        ";
            } else {
                // line 1375
                yield "                                            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formGroup"]) || array_key_exists("formGroup", $context) ? $context["formGroup"] : (function () { throw new RuntimeError('Variable "formGroup" does not exist.', 1375, $this->source); })()), "reference", [], "any", false, false, false, 1375), 'widget', ["attr" => ["class" => "form-control"]]);
                yield "
                                        ";
            }
            // line 1377
            yield "                                    ";
        } else {
            // line 1378
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formGroup"]) || array_key_exists("formGroup", $context) ? $context["formGroup"] : (function () { throw new RuntimeError('Variable "formGroup" does not exist.', 1378, $this->source); })()), "reference", [], "any", false, false, false, 1378), 'widget', ["attr" => ["class" => "form-control col-pink", "placeholder" => "Désactivé"]]);
            yield "
                                    ";
        }
        // line 1380
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">LOT</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1389
        if ((($tmp = (isset($context["editGrou"]) || array_key_exists("editGrou", $context) ? $context["editGrou"] : (function () { throw new RuntimeError('Variable "editGrou" does not exist.', 1389, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1390
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formGroup"]) || array_key_exists("formGroup", $context) ? $context["formGroup"] : (function () { throw new RuntimeError('Variable "formGroup" does not exist.', 1390, $this->source); })()), "groupe", [], "any", false, false, false, 1390), 'widget', ["attr" => ["class" => "form-control col-green"]]);
            yield "
                                    ";
        } else {
            // line 1392
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formGroup"]) || array_key_exists("formGroup", $context) ? $context["formGroup"] : (function () { throw new RuntimeError('Variable "formGroup" does not exist.', 1392, $this->source); })()), "groupe", [], "any", false, false, false, 1392), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                    ";
        }
        // line 1394
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        ";
        // line 1399
        if ((($tmp = (isset($context["editGrou"]) || array_key_exists("editGrou", $context) ? $context["editGrou"] : (function () { throw new RuntimeError('Variable "editGrou" does not exist.', 1399, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1400
            yield "                            <input type=\"submit\" id=\"updateGroupBon\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect text-white bg-green\">
                            <a href=\"";
            // line 1402
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editbon", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1402, $this->source); })()), "id", [], "any", false, false, false, 1402), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1402, $this->source); })()), "chantier", [], "any", false, false, false, 1402), "id", [], "any", false, false, false, 1402)]), "html", null, true);
            yield "\"
                               id=\"closeGroup\" class=\"btn btn-link waves-effect text-white bg-pink\">FERMER
                            </a>
                        ";
        } else {
            // line 1406
            yield "                            <input type=\"submit\" id=\"addGroupBon\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-pri\">
                            <div type=\"button\" id=\"closeGroup\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">FERMER
                            </div>
                        ";
        }
        // line 1412
        yield "                        <img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadGroup\">
                    </div>
                    ";
        // line 1415
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formGroup"]) || array_key_exists("formGroup", $context) ? $context["formGroup"] : (function () { throw new RuntimeError('Variable "formGroup" does not exist.', 1415, $this->source); })()), 'form_end');
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
        // line 1425
        if ((($tmp = (isset($context["editMod"]) || array_key_exists("editMod", $context) ? $context["editMod"] : (function () { throw new RuntimeError('Variable "editMod" does not exist.', 1425, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1426
            yield "                <div class=\"p-5 bg-pink\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">MODIFIER UNE LIGNE</h4>
                    </div>
                </div>
            ";
        } else {
            // line 1432
            yield "                <div class=\"p-5 bg-pri\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">AJOUTER UNE LIGNE</h4>
                    </div>
                </div>
            ";
        }
        // line 1438
        yield "            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    ";
        // line 1440
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1440, $this->source); })()), 'form_start', ["attr" => ["id" => "addLigneBonForm"]]);
        yield "
                    ";
        // line 1441
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1441, $this->source); })()), "_token", [], "any", false, false, false, 1441), 'row');
        yield "
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">LOT</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1447
        if ((($tmp = (isset($context["editMod"]) || array_key_exists("editMod", $context) ? $context["editMod"] : (function () { throw new RuntimeError('Variable "editMod" does not exist.', 1447, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1448
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1448, $this->source); })()), "groupe", [], "any", false, false, false, 1448), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
            yield "
                                    ";
        } else {
            // line 1450
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1450, $this->source); })()), "groupe", [], "any", false, false, false, 1450), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                    ";
        }
        // line 1452
        yield "                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">RÉFÉRENCE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1459
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1459, $this->source); })()), "aaref", [], "any", false, false, false, 1459) == "oui")) {
            // line 1460
            yield "                                        ";
            if ((($tmp = (isset($context["editMod"]) || array_key_exists("editMod", $context) ? $context["editMod"] : (function () { throw new RuntimeError('Variable "editMod" does not exist.', 1460, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1461
                yield "                                            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1461, $this->source); })()), "reference", [], "any", false, false, false, 1461), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
                yield "
                                        ";
            } else {
                // line 1463
                yield "                                            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1463, $this->source); })()), "reference", [], "any", false, false, false, 1463), 'widget', ["attr" => ["class" => "form-control"]]);
                yield "
                                        ";
            }
            // line 1465
            yield "                                    ";
        } else {
            // line 1466
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1466, $this->source); })()), "reference", [], "any", false, false, false, 1466), 'widget', ["attr" => ["class" => "form-control", "readonly" => "true", "placeholder" => "Désactivé"]]);
            yield "
                                    ";
        }
        // line 1468
        yield "                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">DÉSIGNATION<span
                                        class=\"col-pink\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1479
        if ((($tmp = (isset($context["editMod"]) || array_key_exists("editMod", $context) ? $context["editMod"] : (function () { throw new RuntimeError('Variable "editMod" does not exist.', 1479, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1480
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1480, $this->source); })()), "designation", [], "any", false, false, false, 1480), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
            yield "
                                    ";
        } else {
            // line 1482
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1482, $this->source); })()), "designation", [], "any", false, false, false, 1482), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                    ";
        }
        // line 1484
        yield "                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">UNITÉ<span
                                        class=\"col-pink\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1495
        if ((($tmp = (isset($context["editMod"]) || array_key_exists("editMod", $context) ? $context["editMod"] : (function () { throw new RuntimeError('Variable "editMod" does not exist.', 1495, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1496
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1496, $this->source); })()), "unite", [], "any", false, false, false, 1496), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
            yield "
                                    ";
        } else {
            // line 1498
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1498, $this->source); })()), "unite", [], "any", false, false, false, 1498), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                    ";
        }
        // line 1500
        yield "                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">QUANTITÉ<span
                                        class=\"col-pink\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1508
        if ((($tmp = (isset($context["editMod"]) || array_key_exists("editMod", $context) ? $context["editMod"] : (function () { throw new RuntimeError('Variable "editMod" does not exist.', 1508, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1509
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1509, $this->source); })()), "quantite", [], "any", false, false, false, 1509), 'widget', ["type" => "number", "attr" => ["class" => "form-control col-pink"]]);
            yield "
                                    ";
        } else {
            // line 1511
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1511, $this->source); })()), "quantite", [], "any", false, false, false, 1511), 'widget', ["type" => "number", "attr" => ["class" => "form-control"]]);
            yield "
                                    ";
        }
        // line 1513
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">PRIX UNITAIRE<span
                                        class=\"col-pink\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1523
        if ((($tmp = (isset($context["editMod"]) || array_key_exists("editMod", $context) ? $context["editMod"] : (function () { throw new RuntimeError('Variable "editMod" does not exist.', 1523, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1524
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1524, $this->source); })()), "pu", [], "any", false, false, false, 1524), 'widget', ["type" => "number", "attr" => ["class" => "form-control col-pink"]]);
            yield "
                                    ";
        } else {
            // line 1526
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1526, $this->source); })()), "pu", [], "any", false, false, false, 1526), 'widget', ["type" => "number", "attr" => ["class" => "form-control"]]);
            yield "
                                    ";
        }
        // line 1528
        yield "                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">REMISE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1535
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1535, $this->source); })()), "aarem", [], "any", false, false, false, 1535) == "oui")) {
            // line 1536
            yield "                                        ";
            if ((($tmp = (isset($context["editMod"]) || array_key_exists("editMod", $context) ? $context["editMod"] : (function () { throw new RuntimeError('Variable "editMod" does not exist.', 1536, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1537
                yield "                                            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1537, $this->source); })()), "remise", [], "any", false, false, false, 1537), 'widget', ["required" => "", "attr" => ["class" => "form-control col-pink", "type" => "number"]]);
                yield "
                                        ";
            } else {
                // line 1539
                yield "                                            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1539, $this->source); })()), "remise", [], "any", false, false, false, 1539), 'widget', ["required" => "", "attr" => ["class" => "form-control", "type" => "number"]]);
                yield "
                                        ";
            }
            // line 1541
            yield "                                    ";
        } else {
            // line 1542
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1542, $this->source); })()), "remise", [], "any", false, false, false, 1542), 'widget', ["required" => "", "attr" => ["class" => "form-control", "readonly" => "true", "placeholder" => "Désactivé"]]);
            yield "
                                    ";
        }
        // line 1544
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        ";
        // line 1549
        if ((($tmp = (isset($context["editMod"]) || array_key_exists("editMod", $context) ? $context["editMod"] : (function () { throw new RuntimeError('Variable "editMod" does not exist.', 1549, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1550
            yield "                            <input type=\"submit\" id=\"updateLigneBon\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect text-white bg-green\">
                            <a href=\"";
            // line 1552
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editbon", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1552, $this->source); })()), "id", [], "any", false, false, false, 1552), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1552, $this->source); })()), "chantier", [], "any", false, false, false, 1552), "id", [], "any", false, false, false, 1552)]), "html", null, true);
            yield "\"
                               id=\"closeLigne\" class=\"btn btn-link waves-effect text-white bg-pink\">FERMER
                            </a>
                        ";
        } else {
            // line 1556
            yield "                            <input type=\"submit\" id=\"addLigneBon\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-pri\">
                            <div type=\"button\" id=\"closeLigne\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">FERMER
                            </div>
                        ";
        }
        // line 1562
        yield "
                        <img src=\"";
        // line 1563
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadLigne\">
                    </div>
                    ";
        // line 1566
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 1566, $this->source); })()), 'form_end');
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
        // line 1583
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formez"]) || array_key_exists("formez", $context) ? $context["formez"] : (function () { throw new RuntimeError('Variable "formez" does not exist.', 1583, $this->source); })()), 'form_start', ["attr" => ["id" => "addChoisirBonForm"]]);
        yield "
                    ";
        // line 1584
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formez"]) || array_key_exists("formez", $context) ? $context["formez"] : (function () { throw new RuntimeError('Variable "formez" does not exist.', 1584, $this->source); })()), "_token", [], "any", false, false, false, 1584), 'row');
        yield "
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">RECHERCHER</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1590
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formez"]) || array_key_exists("formez", $context) ? $context["formez"] : (function () { throw new RuntimeError('Variable "formez" does not exist.', 1590, $this->source); })()), "code", [], "any", false, false, false, 1590), 'widget', ["id" => "refarticle", "required" => "", "attr" => ["class" => "form-control refarticle"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1598
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formez"]) || array_key_exists("formez", $context) ? $context["formez"] : (function () { throw new RuntimeError('Variable "formez" does not exist.', 1598, $this->source); })()), "reference", [], "any", false, false, false, 1598), 'widget', ["required" => "", "attr" => ["class" => "form-control", "readonly" => "true", "placeholder" => "Désactivé"]]);
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
        // line 1608
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formez"]) || array_key_exists("formez", $context) ? $context["formez"] : (function () { throw new RuntimeError('Variable "formez" does not exist.', 1608, $this->source); })()), "article", [], "any", false, false, false, 1608), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 1613
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1613, $this->source); })()), "type", [], "any", false, false, false, 1613) != "cps")) {
            // line 1614
            yield "                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">LOT</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
            // line 1619
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formez"]) || array_key_exists("formez", $context) ? $context["formez"] : (function () { throw new RuntimeError('Variable "formez" does not exist.', 1619, $this->source); })()), "groupe", [], "any", false, false, false, 1619), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        } else {
            // line 1625
            yield "                    <div class=\"row clearfix m-b-10 hide\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">LOT</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
            // line 1630
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formez"]) || array_key_exists("formez", $context) ? $context["formez"] : (function () { throw new RuntimeError('Variable "formez" does not exist.', 1630, $this->source); })()), "groupe", [], "any", false, false, false, 1630), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 1636
        yield "                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">QUANTITÉ</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1641
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formez"]) || array_key_exists("formez", $context) ? $context["formez"] : (function () { throw new RuntimeError('Variable "formez" does not exist.', 1641, $this->source); })()), "quantite", [], "any", false, false, false, 1641), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">REMISE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1649
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1649, $this->source); })()), "aarem", [], "any", false, false, false, 1649) == "oui")) {
            // line 1650
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formez"]) || array_key_exists("formez", $context) ? $context["formez"] : (function () { throw new RuntimeError('Variable "formez" does not exist.', 1650, $this->source); })()), "remise", [], "any", false, false, false, 1650), 'widget', ["required" => "required", "type" => "number", "attr" => ["class" => "form-control"]]);
            yield "
                                    ";
        } else {
            // line 1652
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formez"]) || array_key_exists("formez", $context) ? $context["formez"] : (function () { throw new RuntimeError('Variable "formez" does not exist.', 1652, $this->source); })()), "remise", [], "any", false, false, false, 1652), 'widget', ["required" => "", "type" => "number", "attr" => ["class" => "form-control", "readonly" => "true", "placeholder" => "Désactivé"]]);
            yield "
                                    ";
        }
        // line 1654
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"addChoisirBon\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect text-white bg-pri\">

                        <div type=\"button\" id=\"closeChoisirBon\" class=\"btn btn-link waves-effect text-white bg-pink\"
                             data-dismiss=\"modal\">FERMER
                        </div>

                        <img src=\"";
        // line 1666
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadChoisirBon\">
                    </div>
                    ";
        // line 1669
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formez"]) || array_key_exists("formez", $context) ? $context["formez"] : (function () { throw new RuntimeError('Variable "formez" does not exist.', 1669, $this->source); })()), 'form_end');
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
                    <h5 class=\"text-center col-pink bolo700\">Veuillez vous assurer que le devis est bien déplacé avant
                        !</h5>
                    <select class=\"form-control show-tick\" id=\"deplacerBon\">
                        ";
        // line 1689
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 1689, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 1690
            yield "                            ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 1690))) {
                // line 1691
                yield "                                <optgroup label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 1691), "html", null, true);
                yield "\">
                                    ";
                // line 1692
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 1692));
                foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                    // line 1693
                    yield "                                        ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 1693))) {
                        // line 1694
                        yield "                                            <option value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 1694), "html", null, true);
                        yield "\"
                                                    class=\"pri font-weight-normal\">";
                        // line 1695
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 1695), 0, 55)), "html", null, true);
                        yield "</option>
                                        ";
                    }
                    // line 1697
                    yield "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1698
                yield "                                </optgroup>
                                </table>
                            ";
            }
            // line 1701
            yield "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1702
        yield "                    </select>
                    <div class=\"text-center m-t-30\">
                        <input type=\"submit\" id=\"addDeplacerBon\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect text-white bg-pri\">
                        <div type=\"button\" id=\"closeDeplacer\" class=\"btn btn-link waves-effect text-white bg-pink\"
                             data-dismiss=\"modal\">FERMER
                        </div>
                        <img src=\"";
        // line 1709
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
                    <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">MISE EN FORME</h4>
                </div>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    ";
        // line 1728
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1728, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data", "attr" => ["id" => "addforme"]]);
        yield "
                    ";
        // line 1729
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1729, $this->source); })()), "_token", [], "any", false, false, false, 1729), 'row');
        yield "
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <h5 class=\"col-black bolo600\">LIBELLÉ</h5>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1735
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1735, $this->source); })()), "intituler", [], "any", false, false, false, 1735), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
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
        // line 1745
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1745, $this->source); })()), "typeEntete", [], "any", false, false, false, 1745), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <h5 class=\"col-black bolo600\">TYPE DE PIED DE PAGE</h5>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1753
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1753, $this->source); })()), "typeFooter", [], "any", false, false, false, 1753), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-black bolo600\">ENTÊTE EN IMAGE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1761
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1761, $this->source); })()), "enteteImage", [], "any", false, false, false, 1761), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-black bolo600\">PIED DE PAGE EN IMAGE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1769
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1769, $this->source); })()), "footImage", [], "any", false, false, false, 1769), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
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
        // line 1779
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1779, $this->source); })()), "headerText", [], "any", false, false, false, 1779), 'widget', ["required" => "", "id" => "editor5", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-black bolo600\">PIED DE PAGE EN TEXTE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1787
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1787, $this->source); })()), "pied", [], "any", false, false, false, 1787), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
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
        // line 1797
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1797, $this->source); })()), "dsize", [], "any", false, false, false, 1797), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <h5 class=\"col-black bolo600\">FOND(Hexa)</h5>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1805
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1805, $this->source); })()), "decolor", [], "any", false, false, false, 1805), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <h5 class=\"col-black bolo600\">TEXTE(Hexa)</h5>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1813
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1813, $this->source); })()), "decolortex", [], "any", false, false, false, 1813), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
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
        // line 1823
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1823, $this->source); })()), "headerWith", [], "any", false, false, false, 1823), 'widget', ["required" => "", "attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-black bolo600\">HAUTEUR ENTÊTE(cm)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1831
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1831, $this->source); })()), "headerHeight", [], "any", false, false, false, 1831), 'widget', ["required" => "", "attr" => ["class" => "form-control col-pink"]]);
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
        // line 1842
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1842, $this->source); })()), "teteY", [], "any", false, false, false, 1842), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-black bolo600\">LARGEUR DU LOGO(cm)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1850
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1850, $this->source); })()), "teteH", [], "any", false, false, false, 1850), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
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
        // line 1860
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1860, $this->source); })()), "teteDH", [], "any", false, false, false, 1860), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-black bolo600\">DÉCALAGE BAS(cm)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1868
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1868, $this->source); })()), "teteDB", [], "any", false, false, false, 1868), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
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
        // line 1878
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1878, $this->source); })()), "teteDD", [], "any", false, false, false, 1878), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-black bolo600\">DÉCALAGE À GAUCHE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1886
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1886, $this->source); })()), "teteDG", [], "any", false, false, false, 1886), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
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
        // line 1897
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1897, $this->source); })()), "piedsize", [], "any", false, false, false, 1897), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-black bolo600\">HAUTEUR DU PIED DE PAGE(cm)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 1905
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1905, $this->source); })()), "footerHeight", [], "any", false, false, false, 1905), 'widget', ["required" => "", "attr" => ["class" => "form-control col-pink"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\" style=\"margin-bottom: 50px !important;\">
                        <input type=\"submit\" id=\"updateForme\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect text-white bg-blue\">
                        <img src=\"";
        // line 1913
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadupForme\">
                    </div>
                    ";
        // line 1916
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 1916, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalSolder\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"p-5 bg-pri\">
                <div class=\"modal-header text-white\">
                    <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">SOLDER CE BON DE COMMANDE</h4>
                </div>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    <h5 class=\"text-center col-pink bolo700\">LIGNES DU DEVIS POUR CHARGE PREVISIONNELLE</h5>
                    <select class=\"form-control show-tick\" id=\"soldeBon\" style=\"width: 100%\">
                        ";
        // line 1935
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1935, $this->source); })()), "devis", [], "any", false, false, false, 1935), "lignes", [], "any", false, false, false, 1935));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 1936
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "id", [], "any", false, false, false, 1936), "html", null, true);
            yield "\" class=\"pri font-weight-normal\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "designation", [], "any", false, false, false, 1936);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ligne'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1938
        yield "                    </select>
                    <div class=\"text-center m-t-30\">
                        <input type=\"submit\" id=\"solderBon\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect text-white bg-pri\">
                        <div type=\"button\" id=\"closeSolder\" class=\"btn btn-link waves-effect text-white bg-pink\"
                             data-dismiss=\"modal\">FERMER
                        </div>
                        <img src=\"";
        // line 1945
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadSolder\">
                    </div>
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
                        <div id=\"shacontentCommande\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    localStorage.setItem('reloadd', 'bon/' + document.getElementById('idbon').value + '/' + document.getElementById('idchantier').value);
</script>
";
        // line 1982
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("apbons");
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
        return "content/bon.html.twig";
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
        return array (  2920 => 1982,  2880 => 1945,  2871 => 1938,  2860 => 1936,  2856 => 1935,  2834 => 1916,  2828 => 1913,  2817 => 1905,  2806 => 1897,  2792 => 1886,  2781 => 1878,  2768 => 1868,  2757 => 1860,  2744 => 1850,  2733 => 1842,  2719 => 1831,  2708 => 1823,  2695 => 1813,  2684 => 1805,  2673 => 1797,  2660 => 1787,  2649 => 1779,  2636 => 1769,  2625 => 1761,  2614 => 1753,  2603 => 1745,  2590 => 1735,  2581 => 1729,  2577 => 1728,  2555 => 1709,  2546 => 1702,  2540 => 1701,  2535 => 1698,  2529 => 1697,  2524 => 1695,  2519 => 1694,  2516 => 1693,  2512 => 1692,  2507 => 1691,  2504 => 1690,  2500 => 1689,  2477 => 1669,  2471 => 1666,  2457 => 1654,  2451 => 1652,  2445 => 1650,  2443 => 1649,  2432 => 1641,  2425 => 1636,  2416 => 1630,  2409 => 1625,  2400 => 1619,  2393 => 1614,  2391 => 1613,  2383 => 1608,  2370 => 1598,  2359 => 1590,  2350 => 1584,  2346 => 1583,  2326 => 1566,  2320 => 1563,  2317 => 1562,  2309 => 1556,  2302 => 1552,  2298 => 1550,  2296 => 1549,  2289 => 1544,  2283 => 1542,  2280 => 1541,  2274 => 1539,  2268 => 1537,  2265 => 1536,  2263 => 1535,  2254 => 1528,  2248 => 1526,  2242 => 1524,  2240 => 1523,  2228 => 1513,  2222 => 1511,  2216 => 1509,  2214 => 1508,  2204 => 1500,  2198 => 1498,  2192 => 1496,  2190 => 1495,  2177 => 1484,  2171 => 1482,  2165 => 1480,  2163 => 1479,  2150 => 1468,  2144 => 1466,  2141 => 1465,  2135 => 1463,  2129 => 1461,  2126 => 1460,  2124 => 1459,  2115 => 1452,  2109 => 1450,  2103 => 1448,  2101 => 1447,  2092 => 1441,  2088 => 1440,  2084 => 1438,  2076 => 1432,  2068 => 1426,  2066 => 1425,  2053 => 1415,  2046 => 1412,  2038 => 1406,  2031 => 1402,  2027 => 1400,  2025 => 1399,  2018 => 1394,  2012 => 1392,  2006 => 1390,  2004 => 1389,  1993 => 1380,  1987 => 1378,  1984 => 1377,  1978 => 1375,  1972 => 1373,  1969 => 1372,  1967 => 1371,  1961 => 1370,  1953 => 1365,  1949 => 1364,  1945 => 1362,  1937 => 1356,  1929 => 1350,  1927 => 1349,  1914 => 1339,  1906 => 1334,  1891 => 1322,  1878 => 1312,  1867 => 1304,  1854 => 1294,  1843 => 1286,  1830 => 1276,  1819 => 1268,  1806 => 1258,  1795 => 1250,  1781 => 1239,  1765 => 1226,  1738 => 1202,  1724 => 1191,  1715 => 1185,  1711 => 1184,  1693 => 1169,  1685 => 1164,  1670 => 1152,  1657 => 1142,  1646 => 1134,  1633 => 1124,  1622 => 1116,  1609 => 1106,  1598 => 1098,  1584 => 1087,  1569 => 1075,  1542 => 1051,  1533 => 1045,  1529 => 1044,  1517 => 1034,  1507 => 1027,  1499 => 1022,  1484 => 1010,  1471 => 1000,  1460 => 992,  1447 => 982,  1436 => 974,  1423 => 964,  1412 => 956,  1399 => 946,  1388 => 938,  1374 => 927,  1358 => 914,  1345 => 904,  1331 => 893,  1317 => 882,  1296 => 864,  1292 => 863,  1281 => 854,  1271 => 847,  1263 => 842,  1248 => 830,  1235 => 820,  1224 => 812,  1211 => 802,  1200 => 794,  1187 => 784,  1176 => 776,  1162 => 765,  1147 => 753,  1120 => 729,  1111 => 723,  1107 => 722,  1096 => 713,  1094 => 712,  1089 => 710,  1085 => 709,  1081 => 708,  1077 => 707,  1072 => 705,  1068 => 704,  1064 => 703,  1060 => 702,  1019 => 664,  1015 => 663,  989 => 640,  980 => 634,  958 => 615,  949 => 609,  945 => 608,  926 => 592,  922 => 591,  915 => 587,  906 => 581,  899 => 577,  890 => 571,  879 => 562,  876 => 561,  870 => 560,  867 => 559,  863 => 557,  857 => 556,  854 => 555,  852 => 554,  845 => 550,  840 => 549,  838 => 547,  837 => 544,  833 => 542,  825 => 537,  820 => 535,  816 => 534,  811 => 531,  808 => 530,  806 => 529,  804 => 528,  800 => 527,  797 => 526,  794 => 525,  791 => 524,  788 => 523,  783 => 522,  781 => 521,  770 => 512,  766 => 510,  757 => 505,  748 => 500,  746 => 499,  742 => 497,  733 => 492,  724 => 487,  722 => 486,  718 => 484,  709 => 479,  700 => 474,  698 => 473,  694 => 471,  685 => 466,  676 => 461,  674 => 460,  670 => 458,  661 => 453,  652 => 448,  650 => 447,  646 => 445,  637 => 440,  628 => 435,  626 => 434,  622 => 432,  613 => 427,  604 => 422,  602 => 421,  598 => 419,  589 => 414,  580 => 409,  578 => 408,  574 => 406,  565 => 401,  556 => 396,  554 => 395,  550 => 393,  541 => 388,  532 => 383,  530 => 382,  526 => 380,  517 => 375,  508 => 370,  506 => 369,  502 => 367,  493 => 362,  484 => 357,  482 => 356,  478 => 354,  469 => 349,  460 => 344,  458 => 343,  454 => 341,  445 => 336,  436 => 331,  434 => 330,  430 => 328,  421 => 323,  412 => 318,  410 => 317,  407 => 316,  405 => 315,  402 => 314,  393 => 309,  384 => 304,  382 => 303,  374 => 298,  364 => 290,  356 => 284,  346 => 276,  343 => 275,  341 => 274,  338 => 273,  335 => 272,  329 => 269,  325 => 268,  322 => 267,  319 => 266,  317 => 265,  70 => 21,  48 => 1,);
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

    {{ encore_entry_link_tags('apbons') }}

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
            background-color: {{forte.decolor}} !important;
            color: {{forte.decolortex}} !important;
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
        background-color: {{forte.decolor}} !important;
        color: {{forte.decolortex}} !important;
        text-align: center;
    }

    tr.printo {
        background-color: #F0F0F0 !important;
        font-weight: 700 !important;
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
<input type=\"text\" class=\"hide\" id=\"idbon\" value=\"{{ bon.id }}\">
<input type=\"text\" class=\"hide\" id=\"idgroupe\" value=\"{{ idgroupe }}\">
<input type=\"text\" class=\"hide\" id=\"idligne\" value=\"{{ idligne }}\">

<input type=\"text\" class=\"hide\" id=\"jsonbon\" value=\"{{ jsonbon }}\">
<input type=\"text\" class=\"hide\" id=\"jsonforme\" value=\"{{ jsonforme }}\">
<input type=\"text\" class=\"hide\" id=\"jsonformes\" value=\"{{ jsonformes }}\">
<input type=\"text\" class=\"hide\" id=\"bondate\" value=\"{{ bon.date|date('d/m/y') }}\">

{% if bon.type == \"pst\" %}
    <div class=\"modal fade right\" id=\"modalBon\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-green col-white\">
                    <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">MODIFIER UN BON PRESTATAIRE</h4>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        {{ form_start(formBon, {'attr': {'id': 'updBonPrestaForm' }}) }}
                        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('updBonPrestaToken') }}\"/>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">CHANTIER</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formBon.chantier,{'id':'sechane','attr':{'class':'form-control col-pink' }}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DEVIS VALIDÉS
                                    <span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        <select class=\"form-control seldevis col-pink\" name=\"devis\"></select>
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
                                        {{ form_widget(formBon.fournisseur,{'required':'','attr':{'class':'form-control col-pink' }}) }}
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
                                        {{ form_widget(formBon.bonreference,{'required':'required','id': 'editor','attr':{'class':'form-control col-pink' }}) }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">DEVISE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formBon.monnaie,{'attr':{'class':'form-control col-pink' }}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">TVA(%)</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formBon.tva,{'attr':{'class':'form-control col-pink' }}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">APPLIQUER LA TVA?</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formBon.ptva,{'attr':{'class':'form-control col-pink' }}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">BON AVEC REMISE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formBon.aarem,{'attr':{'class':'form-control col-pink' }}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">COLONNE RÉFÉRENCE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formBon.aaref,{'attr':{'class':'form-control col-pink' }}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">DATE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formBon.date,{'attr':{'class':'form-control datepicker col-pink' }}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">INFORMATIONS SUR LE BON</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formBon.conditions,{'id': 'editor2','attr':{'class':'form-control col-pink' }}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"updBonPresta\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect col-white bg-green\">
                            <div type=\"button\" id=\"closeUpdBonPresta\" class=\"btn btn-link waves-effect col-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadUpdBonPresta\"></div>
                        <br>
                        <br>
                        <br>
                        {{ form_end(formBon) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% else %}
    <div class=\"modal fade right\" id=\"modalBon\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-green col-white\">
                    <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">MODIFIER UN BON FOURNISSEUR</h4>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        {{ form_start(formBon, {'attr': {'id': 'updBonFournForm' }}) }}
                        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('updBonFournToken') }}\"/>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DEVIS VALIDÉS
                                    <span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        <select class=\"form-control seldeu col-pink\" name=\"devis\"></select>
                                    </div>
                                    <p class=\"h6 didu\" style=\"margin-top:5px !important\"></p>
                                </div>

                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">BON DE SUIVI</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formBon.preparation,{'attr':{'class':'form-control col-pink' }}) }}
                                    </div>
                                    <p class=\"h6 cocon\"></p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">TYPE DE BON</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formBon.type,{'attr':{'class':'form-control col-pink' }}) }}
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
                                        {{ form_widget(formBon.chantier,{'id':'sechau','attr':{'class':'form-control col-pink' }}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">FOURNISSEUR</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formBon.fournisseur,{'required':'','attr':{'class':'form-control col-pink' }}) }}
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
                                        {{ form_widget(formBon.bonreference,{'id': 'editor','attr':{'class':'form-control col-pink' }}) }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">DEVISE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formBon.monnaie,{'attr':{'class':'form-control col-pink' }}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">TVA(%)</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formBon.tva,{'attr':{'class':'form-control col-pink' }}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">APPLIQUER LA TVA?</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formBon.ptva,{'attr':{'class':'form-control col-pink' }}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">BON AVEC REMISE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formBon.aarem,{'attr':{'class':'form-control col-pink' }}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">COLONNE RÉFÉRENCE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formBon.aaref,{'attr':{'class':'form-control col-pink' }}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">DATE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formBon.date,{'attr':{'class':'form-control col-pink' }}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">MODÈLE D'INFORMATIONS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formBon.modele,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">MODÈLE DE RÉSULTAT</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formBon.model,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">INFORMATIONS SUR LE BON</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formBon.conditions,{'id': 'editor2','attr':{'class':'form-control col-pink' }}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"updBonFourn\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect col-white bg-green\">
                            <div type=\"button\" id=\"closeUpdBonFourn\" class=\"btn btn-link waves-effect col-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadUpdBonFourn\"></div>
                        <br>
                        <br>
                        <br>
                        {{ form_end(formBon) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endif %}

<div class=\"modal fade right\" id=\"modalBonPresta\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-blue col-white\">
                <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">BON PRESTATAIRE</h4>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    {{ form_start(formBonPresta, {'attr': {'id': 'addBonPrestaForm' }}) }}
                    <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addBonPrestaToken') }}\"/>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">CHANTIER</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formBonPresta.chantier,{'id':'secha','attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DEVIS VALIDÉS
                                <span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group\">
                                <div class=\"form-line col-pink\">
                                    <select class=\"form-control sedevis\" name=\"devis\"></select>
                                </div>
                                <p class=\"h6 dido\" style=\"margin-top:5px !important\"></p>
                            </div>

                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">PRESTATAIRE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formBonPresta.fournisseur,{'required':'','attr':{'class':'form-control' }}) }}
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
                                    {{ form_widget(formBonPresta.bonreference,{'id': 'editor3','attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">DEVISE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formBonPresta.monnaie,{'attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">TVA(%)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formBonPresta.tva,{'attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">APPLIQUER LA TVA?</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formBonPresta.ptva,{'attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">BON AVEC REMISE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formBonPresta.aarem,{'attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">COLONNE RÉFÉRENCE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formBonPresta.aaref,{'attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">DATE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formBonPresta.date,{'attr':{'class':'form-control datepicker' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">INFORMATIONS SUR LE BON</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formBonPresta.conditions,{'id': 'editor6','attr':{'class':'form-control' }}) }}
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
                    {{ form_end(formBonPresta) }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalBonFourne\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-blue col-white\">
                <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">BON FOURNISSEUR</h4>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    {{ form_start(formBonFourne, {'attr': {'id': 'addBonFournForm' }}) }}
                    <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addBonFournToken') }}\"/>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">TYPE DE BON</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formBonFourne.type,{'attr':{'class':'form-control' }}) }}
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
                                    {{ form_widget(formBonFourne.chantier,{'id':'sechas','attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DEVIS VALIDÉS
                                <span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group\">
                                <div class=\"form-line col-pink\">
                                    <select class=\"form-control seldevs\" name=\"devis\"></select>
                                </div>
                                <p class=\"h6 dides\" style=\"margin-top:5px !important\"></p>
                            </div>

                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">FOURNISSEUR</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formBonFourne.fournisseur,{'required':'','attr':{'class':'form-control' }}) }}
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
                                    {{ form_widget(formBonFourne.bonreference,{'id': 'editor7','attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">DEVISE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formBonFourne.monnaie,{'attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">TVA(%)</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formBonFourne.tva,{'attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">APPLIQUER LA TVA?</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formBonFourne.ptva,{'attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">BON AVEC REMISE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formBonFourne.aarem,{'attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">COLONNE RÉFÉRENCE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formBonFourne.aaref,{'attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">DATE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formBonFourne.date,{'attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">MODÈLE D'INFORMATIONS</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formBonFourne.modele,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">MODÈLE DE RÉSULTAT</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formBonFourne.model,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">INFORMATIONS SUR LE BON</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formBonFourne.conditions,{'id': 'editor8','attr':{'class':'form-control' }}) }}
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
                    {{ form_end(formBonFourne) }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalGroup\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            {% if editGrou %}
                <div class=\"p-5 bg-green\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">MODIFIER UN LOT</h4>
                    </div>
                </div>
            {% else %}
                <div class=\"modal-header bg-pri\">
                    <div class=\"p-5 text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">CRÉER UN LOT</h4>
                    </div>
                </div>
            {% endif %}
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    {{ form_start(formGroup, {'attr': {'id': 'addGroupeBonForm'}}) }}
                    {{ form_row(formGroup._token) }}
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">RÉFÉRENCE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line  {% if bon.aaref != 'oui' %}disabled{% endif %}\">
                                    {% if bon.aaref == 'oui' %}
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
                            <label class=\"form-label m-b--30 pri bolo\">LOT</label>
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
                            <input type=\"submit\" id=\"updateGroupBon\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect text-white bg-green\">
                            <a href=\"{{ path('editbon', {'id': bon.id , 'idchantier': bon.chantier.id}) }}\"
                               id=\"closeGroup\" class=\"btn btn-link waves-effect text-white bg-pink\">FERMER
                            </a>
                        {% else %}
                            <input type=\"submit\" id=\"addGroupBon\" value=\"ENREGISTRER\"
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
            {% if editMod %}
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
                    {{ form_start(forme, {'attr': {'id': 'addLigneBonForm'}}) }}
                    {{ form_row(forme._token) }}
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">LOT</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {% if editMod %}
                                        {{ form_widget(forme.groupe,{'attr':{'class':'form-control col-pink'}}) }}
                                    {% else %}
                                        {{ form_widget(forme.groupe,{'attr':{'class':'form-control'}}) }}
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">RÉFÉRENCE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {% if bon.aaref == 'oui' %}
                                        {% if editMod %}
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
                            <label class=\"form-label m-b--30 pri bolo\">DÉSIGNATION<span
                                        class=\"col-pink\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {% if editMod %}
                                        {{ form_widget(forme.designation,{'attr':{'class':'form-control col-pink'}}) }}
                                    {% else %}
                                        {{ form_widget(forme.designation,{'attr':{'class':'form-control'}}) }}
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">UNITÉ<span
                                        class=\"col-pink\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {% if editMod %}
                                        {{ form_widget(forme.unite,{'attr':{'class':'form-control col-pink'}}) }}
                                    {% else %}
                                        {{ form_widget(forme.unite,{'attr':{'class':'form-control'}}) }}
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">QUANTITÉ<span
                                        class=\"col-pink\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {% if editMod %}
                                        {{ form_widget(forme.quantite,{'type':'number','attr':{'class':'form-control col-pink'}}) }}
                                    {% else %}
                                        {{ form_widget(forme.quantite,{'type':'number','attr':{'class':'form-control'}}) }}
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">PRIX UNITAIRE<span
                                        class=\"col-pink\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {% if editMod %}
                                        {{ form_widget(forme.pu,{'type':'number','attr':{'class':'form-control col-pink'}}) }}
                                    {% else %}
                                        {{ form_widget(forme.pu,{'type':'number','attr':{'class':'form-control'}}) }}
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 pri bolo\">REMISE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {% if bon.aarem== 'oui' %}
                                        {% if editMod %}
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
                        {% if editMod %}
                            <input type=\"submit\" id=\"updateLigneBon\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect text-white bg-green\">
                            <a href=\"{{ path('editbon', {'id': bon.id , 'idchantier': bon.chantier.id}) }}\"
                               id=\"closeLigne\" class=\"btn btn-link waves-effect text-white bg-pink\">FERMER
                            </a>
                        {% else %}
                            <input type=\"submit\" id=\"addLigneBon\" value=\"ENREGISTRER\"
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
                    {{ form_start(formez,{'attr': {'id': 'addChoisirBonForm'}}) }}
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
                            <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE</label>
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
                    {% if bon.type != \"cps\" %}
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">LOT</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formez.groupe,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    {% else %}
                    <div class=\"row clearfix m-b-10 hide\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">LOT</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formez.groupe,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    {% endif %}
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">QUANTITÉ</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formez.quantite,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">REMISE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {% if bon.aarem == 'oui' %}
                                        {{ form_widget(formez.remise,{'required':'required','type':'number','attr':{'class':'form-control'}}) }}
                                    {% else %}
                                        {{ form_widget(formez.remise,{'required':'','type':'number','attr':{'class':'form-control','readonly':'true','placeholder':'Désactivé'}}) }}
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"addChoisirBon\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect text-white bg-pri\">

                        <div type=\"button\" id=\"closeChoisirBon\" class=\"btn btn-link waves-effect text-white bg-pink\"
                             data-dismiss=\"modal\">FERMER
                        </div>

                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadChoisirBon\">
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
                    <h5 class=\"text-center col-pink bolo700\">Veuillez vous assurer que le devis est bien déplacé avant
                        !</h5>
                    <select class=\"form-control show-tick\" id=\"deplacerBon\">
                        {% for client in clients %}
                            {% if client.corbeille is null %}
                                <optgroup label=\"{{ client.nomclient }}\">
                                    {% for chantier in client.chantiers %}
                                        {% if chantier.corbeille is null %}
                                            <option value=\"{{ chantier.id }}\"
                                                    class=\"pri font-weight-normal\">{{ chantier.nomchantier[0:55]|upper }}</option>
                                        {% endif %}
                                    {% endfor %}
                                </optgroup>
                                </table>
                            {% endif %}
                        {% endfor %}
                    </select>
                    <div class=\"text-center m-t-30\">
                        <input type=\"submit\" id=\"addDeplacerBon\" value=\"ENREGISTRER\"
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
<div class=\"modal fade right\" id=\"modalSolder\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"p-5 bg-pri\">
                <div class=\"modal-header text-white\">
                    <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">SOLDER CE BON DE COMMANDE</h4>
                </div>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    <h5 class=\"text-center col-pink bolo700\">LIGNES DU DEVIS POUR CHARGE PREVISIONNELLE</h5>
                    <select class=\"form-control show-tick\" id=\"soldeBon\" style=\"width: 100%\">
                        {% for ligne in bon.devis.lignes %}
                            <option value=\"{{ ligne.id }}\" class=\"pri font-weight-normal\">{{ ligne.designation|raw }}</option>
                        {% endfor %}
                    </select>
                    <div class=\"text-center m-t-30\">
                        <input type=\"submit\" id=\"solderBon\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect text-white bg-pri\">
                        <div type=\"button\" id=\"closeSolder\" class=\"btn btn-link waves-effect text-white bg-pink\"
                             data-dismiss=\"modal\">FERMER
                        </div>
                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadSolder\">
                    </div>
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
                        <div id=\"shacontentCommande\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    localStorage.setItem('reloadd', 'bon/' + document.getElementById('idbon').value + '/' + document.getElementById('idchantier').value);
</script>
{{ encore_entry_script_tags('apbons') }}
</body>
</html>

", "content/bon.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\bon.html.twig");
    }
}
