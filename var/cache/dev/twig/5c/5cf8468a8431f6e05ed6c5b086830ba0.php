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

/* content/page.html.twig */
class __TwigTemplate_9875e9095c4e09f75eeafa3570dd48f6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/page.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/page.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html ; charset=utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta http-equiv=\"Expires\" CONTENT=\"Fri, 01 Jan 1990 00:00:00 GMT\">
        <meta http-equiv=\"Cache-Control\" content=\"max-age=200\" />
        <meta http-equiv=\"Pragma\" CONTENT=\"no-cache\">
        <title>Carlinbleu | Gestion et Suivi de Chantier</title>
        <meta charset=\"utf-8\">
        <meta content=\"no-cache, no-store, must-revalidate, post-check=0, pre-check=0\" />
        <meta name=\"description\" content=\"Votre application multi-utilisateurs de gestion de chantiers: Comptabilité, Gestion technique, Suivi et gestion de matériel,
         Gestion des articles, Planning, Gestionnaire de stock, etc.\">
        <meta name=\"keywords\" content=\"carlinbleu, carlin bleu, carlin, gestion , projet, chantier, comptabilité, gestion technique, suivi , gestion de matériel, gestion de chantiersgestionnaire de projets, articles , showroom , matériels\">
        <meta name=\"author\" content=\"carlinGroup\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        <script crossorigin=\"anonymous\" integrity=\"sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f\"
                src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>


        <link href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("datetimepicker/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
        <link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\"/>
        <script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
        <script src=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("datetimepicker/momentjs/moment.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("datetimepicker/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("datetimepicker/js/demo.js"), "html", null, true);
        yield "\"></script>


        <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" type=\"text/css\">
        <link rel=\"shortcut icon\" type=\"image/png\" href=\"https://www.carlinbleu.com/img/Icon-96.png\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css\"/>
        <link href=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/chat.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>

     ";
        // line 36
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        yield "
    </head>

    <body  class=\"theme-red\" style=\"background-color: #d1d3e2 !important;\" id=\"bod\">

    <style>
        .chat-window{
            position:fixed;
            float:right;
            margin-left:10px;
        }
        .chat-window > div > .panel{
            border-radius: 5px 5px 0 0;
        }
        .icon_minim{
            padding:2px 10px;
        }
        .msg_container_base{
            background: #e5e5e5;
            margin: 0;
            padding: 0 10px 10px;
            max-height:300px;
            overflow-x:hidden;
        }
        .top-bar {
            background: #666;
            color: white;
            padding: 10px;
            position: relative;
            overflow: hidden;
        }
        .msg_receive{
            padding-left:0;
            margin-left:0;
        }
        .msg_sent{
            padding-bottom:20px !important;
            margin-right:0;
        }
        .messages {
            background: white;
            padding: 10px;
            border-radius: 2px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
            max-width:100%;
        }
        .messages > p {
            font-size: 13px;
            margin: 0 0 0.2rem 0;
        }
        .messages > time {
            font-size: 11px;
            color: #ccc;
        }
        .msg_container {
            padding: 10px;
            overflow: hidden;
            display: flex;
        }
        img {
            display: block;
            width: 100%;
        }
        .avatar {
            position: relative;
        }
        .base_receive > .avatar:after {
            content: \"\";
            position: absolute;
            top: 0;
            right: 0;
            width: 0;
            height: 0;
            border: 5px solid #FFF;
            border-left-color: rgba(0, 0, 0, 0);
            border-bottom-color: rgba(0, 0, 0, 0);
        }

        .base_sent {
            justify-content: flex-end;
            align-items: flex-end;
        }
        .base_sent > .avatar:after {
            content: \"\";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 0;
            border: 5px solid white;
            border-right-color: transparent;
            border-top-color: transparent;
        }

        .msg_sent > time{
            float: right;
        }

        .msg_container_base::-webkit-scrollbar-track
        {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            background-color: #F5F5F5;
        }

        .msg_container_base::-webkit-scrollbar
        {
            width: 12px;
            background-color: #F5F5F5;
        }

        .msg_container_base::-webkit-scrollbar-thumb
        {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
            background-color: #555;
        }

        .btn-group.dropup{
            position:fixed;
            left:0px;
            bottom:0;
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
                <div class=\"modal-body\">
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
                <div class=\"modal-body p-t-25\">
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
        <div class=\"modal-dialog modal\">
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
        // line 375
        if ((($tmp =  !array_key_exists("libre", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 376
            yield "                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 376, $this->source); })()), "user", [], "any", false, false, false, 376)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 377
                yield "                            <li class=\"col-yellow h4 bolo600 m-l-20\">
                                ";
                // line 378
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 378, $this->source); })()), "user", [], "any", false, false, false, 378), "nom", [], "any", false, false, false, 378)), "html", null, true);
                yield "
                                ";
                // line 379
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 379, $this->source); })()), "user", [], "any", false, false, false, 379), "prenoms", [], "any", false, false, false, 379)), "html", null, true);
                yield "
                            </li>
                        ";
            }
            // line 382
            yield "                    ";
        }
        // line 383
        yield "
                    ";
        // line 384
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 384, $this->source); })()), "user", [], "any", false, false, false, 384)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 385
            yield "                        ";
            if (( !array_key_exists("libre", $context) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 385, $this->source); })()), "user", [], "any", false, false, false, 385))) {
                // line 386
                yield "                            <li class=\"hidere\">
                                <a href=\"javascript:void(0);\" data-close=\"true\">
                    <span class=\"js-right-sidebars badge bg-pink\">
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
                // line 402
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["history"]);
                foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                    // line 403
                    yield "                                            <li>
                                                <a href=\"javascript:void(0);\">
                                                    <div class=\"menu-info\">
                                                        <h5 class=\"col-indigo font-weight-bold\">";
                    // line 406
                    yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["history"], "action", [], "any", false, false, false, 406));
                    yield "</h5>
                                                        <h5 class=\"col-pink font-weight-bold\">Par: ";
                    // line 407
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["history"], "dobyuser", [], "any", false, false, false, 407), "nom", [], "any", false, false, false, 407)), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["history"], "dobyuser", [], "any", false, false, false, 407), "prenoms", [], "any", false, false, false, 407)), "html", null, true);
                    yield "</h5>
                                                        <p class=\"col-black\">
                                                            <i class=\"material-icons\">access_time</i> <span style=\"font-size: 14px\">";
                    // line 409
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["history"], "date", [], "any", false, false, false, 409), "d.m.Y H.m"), "html", null, true);
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
                // line 415
                yield "                                    </ul>
                                </li>
                                <li class=\"footer bg-blue col-white\">
                                    <a href=\"#\" style=\"color: white; font-size: 16px\" onclick=\"shashar('historique');\">Voir toutes les actions</a>
                                </li>
                            </ul>
                        ";
            }
            // line 422
            yield "
                    </li>
                        <li class=\"hidere\">
                            <a data-toggle=\"modal\" data-target=\"#ModalSearch\">
                                <i class=\"material-icons\">search</i>
                            </a>
                        </li>
                    ";
        }
        // line 430
        yield "                </ul>
            </div>
        </div>
    </nav>
    <section>
        <aside id=\"leftsidebar\" class=\"sidebar text-center bg-pri\"
               style=\"z-index: 1000 !important; margin-top: -70px; width: 240px; height: 100%\">
            <div class=\"user-info\" style=\"height: 150px !important;\">
                <img src=\"";
        // line 438
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logoy.png"), "html", null, true);
        yield "\" style=\"float: left; width: 200px !important;margin-top: 10px\"/>
            </div>
            <div class=\"menu\">
                <ul class=\"list\">
                    <li class=\"active\">
                        ";
        // line 443
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 443, $this->source); })()) == "page"))) {
            // line 444
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("welcome");
            yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">home</i>
                                <span class=\"col-yellow\">ACCUEIL</span>
                            </a>
                        ";
        } else {
            // line 449
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("welcome");
            yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">home</i>
                                <span class=\"text-white\">Accueil</span>
                            </a>
                        ";
        }
        // line 454
        yield "                    </li>
                    <li class=\"active\">
                        <a href=\"";
        // line 456
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("content");
        yield "\" class=\"bolo\">
                            <i class=\"material-icons col-white\">add_shopping_cart</i>
                            <span class=\"col-white\">SHOWROOMS</span>
                        </a>
                    </li>
                    <li class=\"active\">
                        ";
        // line 462
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 462, $this->source); })()) == "message"))) {
            // line 463
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message");
            yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">email</i>
                                <span class=\"col-yellow\">MESSAGERIE</span>
                            </a>
                        ";
        } else {
            // line 468
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message");
            yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">email</i>
                                <span class=\"text-white\">Messagerie</span>
                            </a>
                        ";
        }
        // line 473
        yield "                    </li>
                    <li class=\"active\">
                        ";
        // line 475
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 475, $this->source); })()) == "article"))) {
            // line 476
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
            yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">content_copy</i>
                                <span class=\"col-yellow\">MES ARTICLES</span>
                            </a>
                        ";
        } else {
            // line 481
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
            yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">content_copy</i>
                                <span class=\"text-white\">Mes articles</span>
                            </a>
                        ";
        }
        // line 486
        yield "                    </li>
                    <li class=\"active\">
                        ";
        // line 488
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 488, $this->source); })()) == "comptable"))) {
            // line 489
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantiers");
            yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">widgets</i>
                                <span class=\"col-yellow\">COMPTABILITÉ</span>
                            </a>
                        ";
        } else {
            // line 494
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantiers");
            yield "\">
                                <i class=\"material-icons text-white\">widgets</i>
                                <span class=\"text-white\">Comptabilité</span>
                            </a>
                        ";
        }
        // line 499
        yield "                    </li>
                    <li class=\"active\">
                        ";
        // line 501
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 501, $this->source); })()) == "paie"))) {
            // line 502
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paie");
            yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">toll</i>
                                <span class=\"col-yellow\">POINTS DE PAIE</span>
                            </a>
                        ";
        } else {
            // line 507
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paie");
            yield "\">
                                <i class=\"material-icons text-white\">toll</i>
                                <span class=\"text-white\">Points de paie</span>
                            </a>
                        ";
        }
        // line 512
        yield "                    </li>
                    <li class=\"active\">
                        ";
        // line 514
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 514, $this->source); })()) == "technique"))) {
            // line 515
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technique");
            yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">open_with</i>
                                <span class=\"col-yellow\">GESTION TECHNIQUE</span>
                            </a>
                        ";
        } else {
            // line 520
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technique");
            yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">open_with</i>
                                <span class=\"text-white\">Gestion technique</span>
                            </a>
                        ";
        }
        // line 525
        yield "                    </li>
                    <li class=\"active\">
                        ";
        // line 527
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 527, $this->source); })()) == "materiel"))) {
            // line 528
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("materiel");
            yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">bubble_chart</i>
                                <span class=\"col-yellow\">GESTION DU MATÉRIEL</span>
                            </a>
                        ";
        } else {
            // line 533
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("materiel");
            yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">bubble_chart</i>
                                <span class=\"text-white\">Gestion du matériel</span>
                            </a>
                        ";
        }
        // line 538
        yield "                    </li>
                    <li class=\"active\">
                        ";
        // line 540
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 540, $this->source); })()) == "personnel"))) {
            // line 541
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnel");
            yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">people_outline</i>
                                <span class=\"col-yellow\">GESTION DU PERSONNEL</span>
                            </a>
                        ";
        } else {
            // line 546
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnel");
            yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">people_outline</i>
                                <span class=\"text-white\">Gestion du personnel</span>
                            </a>
                        ";
        }
        // line 551
        yield "                    </li>
                    <li class=\"active\">
                        ";
        // line 553
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 553, $this->source); })()) == "parametre"))) {
            // line 554
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parametre");
            yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">center_focus_weak</i>
                                <span class=\"col-yellow\">PARAMÈTRES</span>
                            </a>
                        ";
        } else {
            // line 559
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parametre");
            yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">center_focus_weak</i>
                                <span class=\"text-white\">Paramètres</span>
                            </a>
                        ";
        }
        // line 564
        yield "                    </li>
                    <li class=\"active\">
                        ";
        // line 566
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 566, $this->source); })()) == "historique"))) {
            // line 567
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historique");
            yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">history</i>
                                <span class=\"col-yellow\">HISTORIQUE</span>
                            </a>
                        ";
        } else {
            // line 572
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historique");
            yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">history</i>
                                <span class=\"text-white\">Historique</span>
                            </a>
                        ";
        }
        // line 577
        yield "                    </li>
                    <li class=\"active\">
                        ";
        // line 579
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 579, $this->source); })()) == "corbeille"))) {
            // line 580
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("corbeille");
            yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">delete</i>
                                <span class=\"col-yellow\">CORBEILLE</span>
                            </a>
                        ";
        } else {
            // line 585
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("corbeille");
            yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">delete</i>
                                <span class=\"text-white\">Corbeille</span>
                            </a>
                        ";
        }
        // line 590
        yield "                    </li>

                </ul>
            </div>


        </aside>
        <aside id=\"rightsidebars\" class=\"right-sidebars m-t--25 p-t-10\" style=\"overflow: scroll\">
            <div class=\"tab-content\">
                <div role=\"tabpanel\" class=\"tab-pane fade in active in active\" id=\"chantier\">
                    <div class=\"table-responsive\" style=\"padding: 10px !important;\">
                        ";
        // line 601
        if ((($tmp =  !array_key_exists("libre", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 602
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 602, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 603
                yield "                                ";
                $context["p"] = 0;
                // line 604
                yield "                                ";
                if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 604)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 604), "count", [], "any", false, false, false, 604) > 0))) {
                    // line 605
                    yield "                                    ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 605))) {
                        // line 606
                        yield "                                        <table class=\"table-bordered shadow\" width=\"100%\" style=\" overflow: scroll;\">
                                            ";
                        // line 607
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 607));
                        foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                            // line 608
                            yield "                                                ";
                            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 608)) && (CoreExtension::getAttribute($this->env, $this->source,                             // line 609
$context["chantier"], "archiver", [], "any", false, false, false, 609) != "oui"))) {
                                // line 610
                                yield "                                                    ";
                                if (((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 610, $this->source); })()) == 0)) {
                                    // line 611
                                    yield "                                                        <tr>
                                                            <td colspan=\"2\" class=\"bg-blue text-white\"
                                                                style=\"padding-left: 5px;\">
                                                                <a href=\"";
                                    // line 614
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 614)]), "html", null, true);
                                    yield "\"
                                                                   class=\"text-white\" title=\"";
                                    // line 615
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 615), "html", null, true);
                                    yield "\">
                                                                    -
                                                                    ";
                                    // line 617
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 617), "html", null, true);
                                    yield "
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    ";
                                }
                                // line 622
                                yield "                                                    <tr>
                                                        <td style=\"padding-left: 5px\" colspan=\"2\" class=\"bg-light\">
                                                            <a href=\"";
                                // line 624
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source,                                 // line 627
$context["chantier"], "id", [], "any", false, false, false, 627)]), "html", null, true);
                                // line 629
                                yield "\" class=\"text-pri\" title=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 629), "html", null, true);
                                yield "\">
                                                                ";
                                // line 630
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 630), 0, 55)), "html", null, true);
                                yield "
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    ";
                                // line 634
                                $context["p"] = ((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 634, $this->source); })()) + 1);
                                // line 635
                                yield "                                                ";
                            }
                            // line 636
                            yield "                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 637
                        yield "                                        </table>
                                    ";
                    }
                    // line 639
                    yield "                                ";
                }
                // line 640
                yield "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 641
            yield "                        ";
        }
        // line 642
        yield "                    </div>
                </div>
            </div>
        </aside>
    </section>

    <input type=\"text\" class=\"hide\" id=\"idclient\" value=\"";
        // line 648
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 648, $this->source); })()), "id", [], "any", false, false, false, 648), "html", null, true);
        yield "\"/>
    <input type=\"text\" class=\"hide\" id=\"idtodo\" value=\"";
        // line 649
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["idtodo"]) || array_key_exists("idtodo", $context) ? $context["idtodo"] : (function () { throw new RuntimeError('Variable "idtodo" does not exist.', 649, $this->source); })()), "html", null, true);
        yield "\"/>
    <input type=\"text\" class=\"hide\" id=\"dateTodo\" value=\"";
        // line 650
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dateTodo"]) || array_key_exists("dateTodo", $context) ? $context["dateTodo"] : (function () { throw new RuntimeError('Variable "dateTodo" does not exist.', 650, $this->source); })()), "html", null, true);
        yield "\"/>
    <input type=\"text\" class=\"hide\" id=\"page\" value=\"";
        // line 651
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 651, $this->source); })()), "html", null, true);
        yield "\"/>
    <input type=\"text\" class=\"hide\" id=\"current\" value=\"";
        // line 652
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 652, $this->source); })()), "user", [], "any", false, false, false, 652), "id", [], "any", false, false, false, 652), "html", null, true);
        yield "\"/>

    <input type=\"text\" class=\"hide\" id=\"mon\" value=\"";
        // line 654
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["mon"]) || array_key_exists("mon", $context) ? $context["mon"] : (function () { throw new RuntimeError('Variable "mon" does not exist.', 654, $this->source); })()), "html", null, true);
        yield "\"/>
    <input type=\"text\" class=\"hide\" id=\"tue\" value=\"";
        // line 655
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tue"]) || array_key_exists("tue", $context) ? $context["tue"] : (function () { throw new RuntimeError('Variable "tue" does not exist.', 655, $this->source); })()), "html", null, true);
        yield "\"/>
    <input type=\"text\" class=\"hide\" id=\"wes\" value=\"";
        // line 656
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["wes"]) || array_key_exists("wes", $context) ? $context["wes"] : (function () { throw new RuntimeError('Variable "wes" does not exist.', 656, $this->source); })()), "html", null, true);
        yield "\"/>
    <input type=\"text\" class=\"hide\" id=\"thu\" value=\"";
        // line 657
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["thu"]) || array_key_exists("thu", $context) ? $context["thu"] : (function () { throw new RuntimeError('Variable "thu" does not exist.', 657, $this->source); })()), "html", null, true);
        yield "\"/>
    <input type=\"text\" class=\"hide\" id=\"fri\" value=\"";
        // line 658
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["fri"]) || array_key_exists("fri", $context) ? $context["fri"] : (function () { throw new RuntimeError('Variable "fri" does not exist.', 658, $this->source); })()), "html", null, true);
        yield "\"/>
    <input type=\"text\" class=\"hide\" id=\"sat\" value=\"";
        // line 659
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sat"]) || array_key_exists("sat", $context) ? $context["sat"] : (function () { throw new RuntimeError('Variable "sat" does not exist.', 659, $this->source); })()), "html", null, true);
        yield "\"/>
    <input type=\"text\" class=\"hide\" id=\"sun\" value=\"";
        // line 660
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sun"]) || array_key_exists("sun", $context) ? $context["sun"] : (function () { throw new RuntimeError('Variable "sun" does not exist.', 660, $this->source); })()), "html", null, true);
        yield "\"/>

    <input type=\"text\" class=\"hide\" id=\"mon2\" value=\"";
        // line 662
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["mon2"]) || array_key_exists("mon2", $context) ? $context["mon2"] : (function () { throw new RuntimeError('Variable "mon2" does not exist.', 662, $this->source); })()), "html", null, true);
        yield "\"/>
    <input type=\"text\" class=\"hide\" id=\"tue2\" value=\"";
        // line 663
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tue2"]) || array_key_exists("tue2", $context) ? $context["tue2"] : (function () { throw new RuntimeError('Variable "tue2" does not exist.', 663, $this->source); })()), "html", null, true);
        yield "\"/>
    <input type=\"text\" class=\"hide\" id=\"wes2\" value=\"";
        // line 664
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["wes2"]) || array_key_exists("wes2", $context) ? $context["wes2"] : (function () { throw new RuntimeError('Variable "wes2" does not exist.', 664, $this->source); })()), "html", null, true);
        yield "\"/>
    <input type=\"text\" class=\"hide\" id=\"thu2\" value=\"";
        // line 665
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["thu2"]) || array_key_exists("thu2", $context) ? $context["thu2"] : (function () { throw new RuntimeError('Variable "thu2" does not exist.', 665, $this->source); })()), "html", null, true);
        yield "\"/>
    <input type=\"text\" class=\"hide\" id=\"fri2\" value=\"";
        // line 666
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["fri2"]) || array_key_exists("fri2", $context) ? $context["fri2"] : (function () { throw new RuntimeError('Variable "fri2" does not exist.', 666, $this->source); })()), "html", null, true);
        yield "\"/>
    <input type=\"text\" class=\"hide\" id=\"sat2\" value=\"";
        // line 667
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sat2"]) || array_key_exists("sat2", $context) ? $context["sat2"] : (function () { throw new RuntimeError('Variable "sat2" does not exist.', 667, $this->source); })()), "html", null, true);
        yield "\"/>
    <input type=\"text\" class=\"hide\" id=\"sun2\" value=\"";
        // line 668
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sun2"]) || array_key_exists("sun2", $context) ? $context["sun2"] : (function () { throw new RuntimeError('Variable "sun2" does not exist.', 668, $this->source); })()), "html", null, true);
        yield "\"/>

    <input type=\"text\" class=\"hide\" id=\"todei\" value=\"";
        // line 670
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["todei"]) || array_key_exists("todei", $context) ? $context["todei"] : (function () { throw new RuntimeError('Variable "todei" does not exist.', 670, $this->source); })()), "html", null, true);
        yield "\"/>

    <div class=\"modal fade right\" id=\"smallTache\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header col-white bg-green p-l-20 hide\" id=\"chtodoedit\">
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                        <i class=\"icofont-minus-circle icofont-1x\"></i>
                        MODIFIER UNE TACHE</h3>
                </div>

                <div class=\"modal-header col-white bg-pri p-l-20\" id=\"chtodoadd\">
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                        <i class=\"icofont-plus-circle icofont-1x\"></i>
                        AJOUTER UNE NOTE DANS L' AGENDA</h3>
                </div>

                <div class=\"modal-body m-t-10 bien\">
                    ";
        // line 689
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formTodo"]) || array_key_exists("formTodo", $context) ? $context["formTodo"] : (function () { throw new RuntimeError('Variable "formTodo" does not exist.', 689, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data", "attr" => ["id" => "addTodoForm"]]);
        yield "
                    <input type=\"hidden\" name=\"token\" value=\"";
        // line 690
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addTodoToken"), "html", null, true);
        yield "\"/>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label col-blue bolo\">DATE<span class=\"col-red\">*</span></label>
                            <div class=\"input-group date\" id=\"id_0\">
                                <input type=\"text\" placeholder=\"Date...\" id=\"ddtodo\" name=\"ddtodo\"
                                       style=\"border-bottom: 1px solid #000\" class=\"form-control dtod\" required/>
                                <div class=\"input-group-addon input-group-append\">
                                    <div class=\"input-group-text\">
                                        <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label pri bolo\">NOTE<span class=\"col-red\">*</span></label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    ";
        // line 710
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formTodo"]) || array_key_exists("formTodo", $context) ? $context["formTodo"] : (function () { throw new RuntimeError('Variable "formTodo" does not exist.', 710, $this->source); })()), "todo", [], "any", false, false, false, 710), 'widget', ["required" => "required", "id" => "todo", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label pri bolo\">PRIORITÉ
                            </label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    ";
        // line 721
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formTodo"]) || array_key_exists("formTodo", $context) ? $context["formTodo"] : (function () { throw new RuntimeError('Variable "formTodo" does not exist.', 721, $this->source); })()), "priorite", [], "any", false, false, false, 721), 'widget', ["id" => "priorite", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">IMPORTER DES FICHIERS</label>
                            <div class=\"form-group\">
                                <div class=\"form-line col-pink\">
                                    ";
        // line 731
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formTodo"]) || array_key_exists("formTodo", $context) ? $context["formTodo"] : (function () { throw new RuntimeError('Variable "formTodo" does not exist.', 731, $this->source); })()), "fichiers", [], "any", false, false, false, 731), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                       <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label pri bolo\">ENVOYÉ CETTE NOTE À
                            </label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                <select class=\"js-example-basic-multiple\" name=\"usetodo\"
                                                multiple=\"multiple\" style=\"width: 100%; height: 200px\">
                                    <option value=\"tout\" class=\"col-blue-grey\"> - Envoyer à tous les utilisateurs</option>
                                    ";
        // line 745
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["comptes"]) || array_key_exists("comptes", $context) ? $context["comptes"] : (function () { throw new RuntimeError('Variable "comptes" does not exist.', 745, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["compte"]) {
            // line 746
            yield "                                                  ";
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["compte"], "id", [], "any", false, false, false, 746) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 746, $this->source); })()), "user", [], "any", false, false, false, 746), "id", [], "any", false, false, false, 746)) && (CoreExtension::getAttribute($this->env, $this->source, $context["compte"], "status", [], "any", false, false, false, 746) != "desactiver"))) {
                // line 747
                yield "                                                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["compte"], "id", [], "any", false, false, false, 747), "html", null, true);
                yield "\"> - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["compte"], "nom", [], "any", false, false, false, 747)), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["compte"], "prenoms", [], "any", false, false, false, 747)), "html", null, true);
                yield "</option>
                                                   ";
            }
            // line 748
            yield "   
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['compte'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 750
        yield "                                </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\" id=\"divTodo\">
                        <input type=\"submit\" id=\"addTodo\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect col-white bg-pri\">
                        <div type=\"button\" id=\"closeTodo\" class=\"btn btn-link waves-effect col-white bg-pink\"
                             data-dismiss=\"modal\">
                            FERMER
                        </div>
                    </div>
                    <div class=\"text-center hide\" id=\"divTodor\">
                        <input type=\"submit\" id=\"updTodo\" value=\"MODIFIER\"
                               class=\"btn btn-link waves-effect col-white bg-green\">
                        <div type=\"button\" id=\"closeTodo\" class=\"btn btn-link waves-effect col-white bg-pink\"
                             data-dismiss=\"modal\">
                            FERMER
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <img src=\"";
        // line 772
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadTodo\"></div>
                    ";
        // line 774
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formTodo"]) || array_key_exists("formTodo", $context) ? $context["formTodo"] : (function () { throw new RuntimeError('Variable "formTodo" does not exist.', 774, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div></div>

    <section class=\"content\" style=\"margin-top: 20px !important;\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row clearfix m-t-50\">
                    <div class=\"col-sm-12 \">
                        <h3 class=\"bolo700\">Bonjour ";
        // line 785
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 785, $this->source); })()), "user", [], "any", false, false, false, 785), "prenoms", [], "any", false, false, false, 785)), "html", null, true);
        yield " !</h3>
                        <h4 class=\"bolo700 col-deep-orange\">Votre agenda</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"content\" id=\"datafirst\"></section>


 ";
        // line 795
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
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
        return "content/page.html.twig";
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
        return array (  1198 => 795,  1185 => 785,  1171 => 774,  1166 => 772,  1142 => 750,  1135 => 748,  1125 => 747,  1122 => 746,  1118 => 745,  1101 => 731,  1088 => 721,  1074 => 710,  1051 => 690,  1047 => 689,  1025 => 670,  1020 => 668,  1016 => 667,  1012 => 666,  1008 => 665,  1004 => 664,  1000 => 663,  996 => 662,  991 => 660,  987 => 659,  983 => 658,  979 => 657,  975 => 656,  971 => 655,  967 => 654,  962 => 652,  958 => 651,  954 => 650,  950 => 649,  946 => 648,  938 => 642,  935 => 641,  929 => 640,  926 => 639,  922 => 637,  916 => 636,  913 => 635,  911 => 634,  904 => 630,  899 => 629,  897 => 627,  896 => 624,  892 => 622,  884 => 617,  879 => 615,  875 => 614,  870 => 611,  867 => 610,  865 => 609,  863 => 608,  859 => 607,  856 => 606,  853 => 605,  850 => 604,  847 => 603,  842 => 602,  840 => 601,  827 => 590,  818 => 585,  809 => 580,  807 => 579,  803 => 577,  794 => 572,  785 => 567,  783 => 566,  779 => 564,  770 => 559,  761 => 554,  759 => 553,  755 => 551,  746 => 546,  737 => 541,  735 => 540,  731 => 538,  722 => 533,  713 => 528,  711 => 527,  707 => 525,  698 => 520,  689 => 515,  687 => 514,  683 => 512,  674 => 507,  665 => 502,  663 => 501,  659 => 499,  650 => 494,  641 => 489,  639 => 488,  635 => 486,  626 => 481,  617 => 476,  615 => 475,  611 => 473,  602 => 468,  593 => 463,  591 => 462,  582 => 456,  578 => 454,  569 => 449,  560 => 444,  558 => 443,  550 => 438,  540 => 430,  530 => 422,  521 => 415,  509 => 409,  502 => 407,  498 => 406,  493 => 403,  489 => 402,  471 => 386,  468 => 385,  466 => 384,  463 => 383,  460 => 382,  454 => 379,  450 => 378,  447 => 377,  444 => 376,  442 => 375,  100 => 36,  95 => 34,  85 => 27,  81 => 26,  77 => 25,  71 => 22,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html ; charset=utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta http-equiv=\"Expires\" CONTENT=\"Fri, 01 Jan 1990 00:00:00 GMT\">
        <meta http-equiv=\"Cache-Control\" content=\"max-age=200\" />
        <meta http-equiv=\"Pragma\" CONTENT=\"no-cache\">
        <title>Carlinbleu | Gestion et Suivi de Chantier</title>
        <meta charset=\"utf-8\">
        <meta content=\"no-cache, no-store, must-revalidate, post-check=0, pre-check=0\" />
        <meta name=\"description\" content=\"Votre application multi-utilisateurs de gestion de chantiers: Comptabilité, Gestion technique, Suivi et gestion de matériel,
         Gestion des articles, Planning, Gestionnaire de stock, etc.\">
        <meta name=\"keywords\" content=\"carlinbleu, carlin bleu, carlin, gestion , projet, chantier, comptabilité, gestion technique, suivi , gestion de matériel, gestion de chantiersgestionnaire de projets, articles , showroom , matériels\">
        <meta name=\"author\" content=\"carlinGroup\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        <script crossorigin=\"anonymous\" integrity=\"sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f\"
                src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>


        <link href=\"{{ asset('datetimepicker/css/bootstrap-datetimepicker.min.css') }}\" rel=\"stylesheet\"/>
        <link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\"/>
        <script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
        <script src=\"{{ asset('datetimepicker/momentjs/moment.js') }}\"></script>
        <script src=\"{{ asset('datetimepicker/js/bootstrap-datetimepicker.min.js') }}\"></script>
        <script src=\"{{ asset('datetimepicker/js/demo.js') }}\"></script>


        <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" type=\"text/css\">
        <link rel=\"shortcut icon\" type=\"image/png\" href=\"https://www.carlinbleu.com/img/Icon-96.png\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css\"/>
        <link href=\"{{ asset('css/chat.css') }}\" rel=\"stylesheet\"/>

     {{ encore_entry_link_tags('app') }}
    </head>

    <body  class=\"theme-red\" style=\"background-color: #d1d3e2 !important;\" id=\"bod\">

    <style>
        .chat-window{
            position:fixed;
            float:right;
            margin-left:10px;
        }
        .chat-window > div > .panel{
            border-radius: 5px 5px 0 0;
        }
        .icon_minim{
            padding:2px 10px;
        }
        .msg_container_base{
            background: #e5e5e5;
            margin: 0;
            padding: 0 10px 10px;
            max-height:300px;
            overflow-x:hidden;
        }
        .top-bar {
            background: #666;
            color: white;
            padding: 10px;
            position: relative;
            overflow: hidden;
        }
        .msg_receive{
            padding-left:0;
            margin-left:0;
        }
        .msg_sent{
            padding-bottom:20px !important;
            margin-right:0;
        }
        .messages {
            background: white;
            padding: 10px;
            border-radius: 2px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
            max-width:100%;
        }
        .messages > p {
            font-size: 13px;
            margin: 0 0 0.2rem 0;
        }
        .messages > time {
            font-size: 11px;
            color: #ccc;
        }
        .msg_container {
            padding: 10px;
            overflow: hidden;
            display: flex;
        }
        img {
            display: block;
            width: 100%;
        }
        .avatar {
            position: relative;
        }
        .base_receive > .avatar:after {
            content: \"\";
            position: absolute;
            top: 0;
            right: 0;
            width: 0;
            height: 0;
            border: 5px solid #FFF;
            border-left-color: rgba(0, 0, 0, 0);
            border-bottom-color: rgba(0, 0, 0, 0);
        }

        .base_sent {
            justify-content: flex-end;
            align-items: flex-end;
        }
        .base_sent > .avatar:after {
            content: \"\";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 0;
            border: 5px solid white;
            border-right-color: transparent;
            border-top-color: transparent;
        }

        .msg_sent > time{
            float: right;
        }

        .msg_container_base::-webkit-scrollbar-track
        {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            background-color: #F5F5F5;
        }

        .msg_container_base::-webkit-scrollbar
        {
            width: 12px;
            background-color: #F5F5F5;
        }

        .msg_container_base::-webkit-scrollbar-thumb
        {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
            background-color: #555;
        }

        .btn-group.dropup{
            position:fixed;
            left:0px;
            bottom:0;
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
                <div class=\"modal-body\">
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
                <div class=\"modal-body p-t-25\">
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
        <div class=\"modal-dialog modal\">
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
                                                        <h5 class=\"col-pink font-weight-bold\">Par: {{ history.dobyuser.nom|upper }} {{ history.dobyuser.prenoms|upper }}</h5>
                                                        <p class=\"col-black\">
                                                            <i class=\"material-icons\">access_time</i> <span style=\"font-size: 14px\">{{ history.date|date('d.m.Y H.m') }}</span>
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                        {% endfor %}
                                    </ul>
                                </li>
                                <li class=\"footer bg-blue col-white\">
                                    <a href=\"#\" style=\"color: white; font-size: 16px\" onclick=\"shashar('historique');\">Voir toutes les actions</a>
                                </li>
                            </ul>
                        {% endif %}

                    </li>
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
                    <li class=\"active\">
                        <a href=\"{{ path('content') }}\" class=\"bolo\">
                            <i class=\"material-icons col-white\">add_shopping_cart</i>
                            <span class=\"col-white\">SHOWROOMS</span>
                        </a>
                    </li>
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
                        {% if page is defined and page == 'comptable' %}
                            <a href=\"{{ path('chantiers') }}\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">widgets</i>
                                <span class=\"col-yellow\">COMPTABILITÉ</span>
                            </a>
                        {% else %}
                            <a href=\"{{ path('chantiers') }}\">
                                <i class=\"material-icons text-white\">widgets</i>
                                <span class=\"text-white\">Comptabilité</span>
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

    <input type=\"text\" class=\"hide\" id=\"idclient\" value=\"{{ client.id }}\"/>
    <input type=\"text\" class=\"hide\" id=\"idtodo\" value=\"{{ idtodo }}\"/>
    <input type=\"text\" class=\"hide\" id=\"dateTodo\" value=\"{{ dateTodo }}\"/>
    <input type=\"text\" class=\"hide\" id=\"page\" value=\"{{ page }}\"/>
    <input type=\"text\" class=\"hide\" id=\"current\" value=\"{{ app.user.id }}\"/>

    <input type=\"text\" class=\"hide\" id=\"mon\" value=\"{{ mon }}\"/>
    <input type=\"text\" class=\"hide\" id=\"tue\" value=\"{{ tue }}\"/>
    <input type=\"text\" class=\"hide\" id=\"wes\" value=\"{{ wes }}\"/>
    <input type=\"text\" class=\"hide\" id=\"thu\" value=\"{{ thu }}\"/>
    <input type=\"text\" class=\"hide\" id=\"fri\" value=\"{{ fri }}\"/>
    <input type=\"text\" class=\"hide\" id=\"sat\" value=\"{{ sat}}\"/>
    <input type=\"text\" class=\"hide\" id=\"sun\" value=\"{{ sun }}\"/>

    <input type=\"text\" class=\"hide\" id=\"mon2\" value=\"{{ mon2 }}\"/>
    <input type=\"text\" class=\"hide\" id=\"tue2\" value=\"{{ tue2 }}\"/>
    <input type=\"text\" class=\"hide\" id=\"wes2\" value=\"{{ wes2 }}\"/>
    <input type=\"text\" class=\"hide\" id=\"thu2\" value=\"{{ thu2 }}\"/>
    <input type=\"text\" class=\"hide\" id=\"fri2\" value=\"{{ fri2 }}\"/>
    <input type=\"text\" class=\"hide\" id=\"sat2\" value=\"{{ sat2 }}\"/>
    <input type=\"text\" class=\"hide\" id=\"sun2\" value=\"{{ sun2 }}\"/>

    <input type=\"text\" class=\"hide\" id=\"todei\" value=\"{{ todei }}\"/>

    <div class=\"modal fade right\" id=\"smallTache\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header col-white bg-green p-l-20 hide\" id=\"chtodoedit\">
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                        <i class=\"icofont-minus-circle icofont-1x\"></i>
                        MODIFIER UNE TACHE</h3>
                </div>

                <div class=\"modal-header col-white bg-pri p-l-20\" id=\"chtodoadd\">
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                        <i class=\"icofont-plus-circle icofont-1x\"></i>
                        AJOUTER UNE NOTE DANS L' AGENDA</h3>
                </div>

                <div class=\"modal-body m-t-10 bien\">
                    {{ form_start(formTodo, {'enctype':'multipart/form-data','attr': {'id': 'addTodoForm'}}) }}
                    <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addTodoToken') }}\"/>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label col-blue bolo\">DATE<span class=\"col-red\">*</span></label>
                            <div class=\"input-group date\" id=\"id_0\">
                                <input type=\"text\" placeholder=\"Date...\" id=\"ddtodo\" name=\"ddtodo\"
                                       style=\"border-bottom: 1px solid #000\" class=\"form-control dtod\" required/>
                                <div class=\"input-group-addon input-group-append\">
                                    <div class=\"input-group-text\">
                                        <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label pri bolo\">NOTE<span class=\"col-red\">*</span></label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    {{ form_widget(formTodo.todo,{'required':'required','id':'todo','attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label pri bolo\">PRIORITÉ
                            </label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    {{ form_widget(formTodo.priorite,{'id':'priorite','attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">IMPORTER DES FICHIERS</label>
                            <div class=\"form-group\">
                                <div class=\"form-line col-pink\">
                                    {{ form_widget(formTodo.fichiers,{'required':'','attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                       <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label pri bolo\">ENVOYÉ CETTE NOTE À
                            </label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                <select class=\"js-example-basic-multiple\" name=\"usetodo\"
                                                multiple=\"multiple\" style=\"width: 100%; height: 200px\">
                                    <option value=\"tout\" class=\"col-blue-grey\"> - Envoyer à tous les utilisateurs</option>
                                    {% for compte in comptes %}
                                                  {% if compte.id != app.user.id and compte.status != 'desactiver' %}
                                                <option value=\"{{ compte.id }}\"> - {{ compte.nom|upper }} {{ compte.prenoms|upper }}</option>
                                                   {% endif %}   
                                            {% endfor %}
                                </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\" id=\"divTodo\">
                        <input type=\"submit\" id=\"addTodo\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect col-white bg-pri\">
                        <div type=\"button\" id=\"closeTodo\" class=\"btn btn-link waves-effect col-white bg-pink\"
                             data-dismiss=\"modal\">
                            FERMER
                        </div>
                    </div>
                    <div class=\"text-center hide\" id=\"divTodor\">
                        <input type=\"submit\" id=\"updTodo\" value=\"MODIFIER\"
                               class=\"btn btn-link waves-effect col-white bg-green\">
                        <div type=\"button\" id=\"closeTodo\" class=\"btn btn-link waves-effect col-white bg-pink\"
                             data-dismiss=\"modal\">
                            FERMER
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadTodo\"></div>
                    {{ form_end(formTodo) }}
                </div>
            </div>
        </div>
    </div></div>

    <section class=\"content\" style=\"margin-top: 20px !important;\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row clearfix m-t-50\">
                    <div class=\"col-sm-12 \">
                        <h3 class=\"bolo700\">Bonjour {{ app.user.prenoms|upper }} !</h3>
                        <h4 class=\"bolo700 col-deep-orange\">Votre agenda</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"content\" id=\"datafirst\"></section>


 {{ encore_entry_script_tags('app') }}
</body>
</html>


", "content/page.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\page.html.twig");
    }
}
