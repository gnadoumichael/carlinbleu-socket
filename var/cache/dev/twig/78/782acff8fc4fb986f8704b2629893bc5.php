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

/* content/chat.html.twig */
class __TwigTemplate_11323ab80a4008933c0f876205f1350e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/chat.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/chat.html.twig"));

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
    <meta charset=\"utf-8\" />
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
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/chat.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>

    ";
        // line 27
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        yield "

    <style>
        .ql-container{
            background-color: #FFF !important;
        }
    </style>
</head>

<body class=\"theme-red\" style=\"background-color: #d1d3e2 !important;\" id=\"bod\">
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
        // line 46
        if ((($tmp =  !array_key_exists("libre", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 47
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 48
                yield "                        <li class=\"col-yellow h4 bolo600 m-l-20\">
                            ";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), "nom", [], "any", false, false, false, 49)), "html", null, true);
                yield "
                            ";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "prenoms", [], "any", false, false, false, 50)), "html", null, true);
                yield "
                        </li>
                    ";
            }
            // line 53
            yield "                ";
        }
        // line 54
        yield "
                ";
        // line 55
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 56
            yield "                    ";
            if (( !array_key_exists("libre", $context) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56))) {
                // line 57
                yield "                        <li class=\"hidere\">
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
                            <ul class=\"dropdown-menu\" style=\"width: 370px; height: 350px; padding: 0 20px; overflow-y: scroll\">
                                <li class=\"header col-pink\" style=\"font-size: 16px\">ACTIONS</li>
                                <li class=\"body\">
                                    ";
                // line 71
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["history"]);
                foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                    // line 72
                    yield "                                        <div class=\"menu-info\">
                                            <p class=\"col-black bolo700\">";
                    // line 73
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["history"], "date", [], "any", false, false, false, 73), "d.m.Y H.m"), "html", null, true);
                    yield "</p>
                                            <h5 class=\"col-indigo font-weight-bold\">";
                    // line 74
                    yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["history"], "action", [], "any", false, false, false, 74));
                    yield "<br>
                                            <span class=\"col-pink font-weight-bold font-12\" >
                                                Par: ";
                    // line 76
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["history"], "dobyuser", [], "any", false, false, false, 76), "nom", [], "any", false, false, false, 76)), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["history"], "dobyuser", [], "any", false, false, false, 76), "prenoms", [], "any", false, false, false, 76)), "html", null, true);
                    yield "</span></h5>
                                            <hr>
                                        </div>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['history'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
                yield "                                </li>
                                <li class=\"footer bg-blue col-white\">
                                    <a href=\"#\" style=\"color: white; font-size: 16px\" onclick=\"shashar('historique');\">Voir
                                        toutes les actions</a>
                                </li>
                            </ul>
                        </li>
                    ";
            }
            // line 88
            yield "                    <li class=\"hidere\">
                        <a data-toggle=\"modal\" data-target=\"#ModalSearch\">
                            <i class=\"material-icons\">search</i>
                        </a>
                    </li>
                ";
        }
        // line 94
        yield "            </ul>
        </div>
    </div>
</nav>
<div class=\"modal fade\" id=\"modaler\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-sm modal-notify\" role=\"document\">
        <!-- Content -->
        <div class=\"modal-content text-center\">
            <!-- Header -->
            <div class=\"modal-header d-flex justify-content-center bg-pri\">
                <h4 class=\"bolo600 col-white\">
                    ENVOYER DES FICHIERS
                </h4>
            </div>

            <!-- Body -->
            <div class=\"modal-body\">
                <h4 class=\"col-green\">
                    ";
        // line 113
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUploada"]) || array_key_exists("formUploada", $context) ? $context["formUploada"] : (function () { throw new RuntimeError('Variable "formUploada" does not exist.', 113, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data", "attr" => ["id" => "addFileChatForm"]]);
        yield "
                    ";
        // line 114
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUploada"]) || array_key_exists("formUploada", $context) ? $context["formUploada"] : (function () { throw new RuntimeError('Variable "formUploada" does not exist.', 114, $this->source); })()), "_token", [], "any", false, false, false, 114), 'row');
        yield "
                    <input type=\"hidden\" name=\"token\" value=\"";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addFileChat"), "html", null, true);
        yield "\"/>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <div class=\"form-group\">
                                <div class=\"form-line col-pink\">
                                    ";
        // line 120
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUploada"]) || array_key_exists("formUploada", $context) ? $context["formUploada"] : (function () { throw new RuntimeError('Variable "formUploada" does not exist.', 120, $this->source); })()), "nomfichier", [], "any", false, false, false, 120), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"addFileChat\" value=\"ENVOYER\"
                               class=\"btn btn-link waves-effect text-white bg-pri\">
                        <div type=\"button\" id=\"closeFileChat\" class=\"btn btn-link waves-effect text-white bg-pink\"
                             data-dismiss=\"modal\">FERMER
                        </div>
                        <img src=\"";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadFileChat\">
                    </div>
                    ";
        // line 134
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUploada"]) || array_key_exists("formUploada", $context) ? $context["formUploada"] : (function () { throw new RuntimeError('Variable "formUploada" does not exist.', 134, $this->source); })()), 'form_end');
        yield "
                </h4>
            </div>
        </div>
        <!-- /.Content -->
    </div>
</div>
<section>
    <aside id=\"leftsidebar\" class=\"sidebar text-center bg-pri\"
           style=\"z-index: 1000 !important; margin-top: -70px; width: 240px; height: 100%\">
        <div class=\"user-info\" style=\"height: 150px !important;\">
            <img src=\"";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logoy.png"), "html", null, true);
        yield "\" style=\"float: left; width: 200px !important;margin-top: 10px\"/>
        </div>
        <div class=\"menu\">
            <ul class=\"list\">
                <li class=\"active\">
                    ";
        // line 150
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 150, $this->source); })()) == "page"))) {
            // line 151
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">home</i>
                            <span class=\"col-yellow\">ACCUEIL</span>
                        </a>
                    ";
        } else {
            // line 156
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">home</i>
                            <span class=\"text-white\">Accueil</span>
                        </a>
                    ";
        }
        // line 161
        yield "                </li>
                <li class=\"active\">
                    <a href=\"";
        // line 163
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("content");
        yield "\" class=\"bolo\">
                        <i class=\"material-icons col-white\">add_shopping_cart</i>
                        <span class=\"col-white\">SHOWROOMS</span>
                    </a>
                </li>
                <li class=\"active\">
                    ";
        // line 169
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 169, $this->source); })()) == "message"))) {
            // line 170
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">email</i>
                            <span class=\"col-yellow\">MESSAGERIE</span>
                        </a>
                    ";
        } else {
            // line 175
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">email</i>
                            <span class=\"text-white\">Messagerie</span>
                        </a>
                    ";
        }
        // line 180
        yield "                </li>
                <li class=\"active\">
                    ";
        // line 182
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 182, $this->source); })()) == "article"))) {
            // line 183
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">content_copy</i>
                            <span class=\"col-yellow\">MES ARTICLES</span>
                        </a>
                    ";
        } else {
            // line 188
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">content_copy</i>
                            <span class=\"text-white\">Mes articles</span>
                        </a>
                    ";
        }
        // line 193
        yield "                </li>
                <li class=\"active\">
                    ";
        // line 195
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 195, $this->source); })()) == "comptable"))) {
            // line 196
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantiers");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">widgets</i>
                            <span class=\"col-yellow\">COMPTABILITÉ</span>
                        </a>
                    ";
        } else {
            // line 201
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantiers");
            yield "\">
                            <i class=\"material-icons text-white\">widgets</i>
                            <span class=\"text-white\">Comptabilité</span>
                        </a>
                    ";
        }
        // line 206
        yield "                </li>
                <li class=\"active\">
                    ";
        // line 208
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 208, $this->source); })()) == "paie"))) {
            // line 209
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paie");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">toll</i>
                            <span class=\"col-yellow\">POINTS DE PAIE</span>
                        </a>
                    ";
        } else {
            // line 214
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paie");
            yield "\">
                            <i class=\"material-icons text-white\">toll</i>
                            <span class=\"text-white\">Points de paie</span>
                        </a>
                    ";
        }
        // line 219
        yield "                </li>
                <li class=\"active\">
                    ";
        // line 221
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 221, $this->source); })()) == "technique"))) {
            // line 222
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technique");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">open_with</i>
                            <span class=\"col-yellow\">GESTION TECHNIQUE</span>
                        </a>
                    ";
        } else {
            // line 227
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technique");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">open_with</i>
                            <span class=\"text-white\">Gestion technique</span>
                        </a>
                    ";
        }
        // line 232
        yield "                </li>
                <li class=\"active\">
                    ";
        // line 234
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 234, $this->source); })()) == "materiel"))) {
            // line 235
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("materiel");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">bubble_chart</i>
                            <span class=\"col-yellow\">GESTION DU MATÉRIEL</span>
                        </a>
                    ";
        } else {
            // line 240
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("materiel");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">bubble_chart</i>
                            <span class=\"text-white\">Gestion du matériel</span>
                        </a>
                    ";
        }
        // line 245
        yield "                </li>
                <li class=\"active\">
                    ";
        // line 247
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 247, $this->source); })()) == "personnel"))) {
            // line 248
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnel");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">people_outline</i>
                            <span class=\"col-yellow\">GESTION DU PERSONNEL</span>
                        </a>
                    ";
        } else {
            // line 253
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnel");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">people_outline</i>
                            <span class=\"text-white\">Gestion du personnel</span>
                        </a>
                    ";
        }
        // line 258
        yield "                </li>
                <li class=\"active\">
                    ";
        // line 260
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 260, $this->source); })()) == "parametre"))) {
            // line 261
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parametre");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">center_focus_weak</i>
                            <span class=\"col-yellow\">PARAMÈTRES</span>
                        </a>
                    ";
        } else {
            // line 266
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parametre");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">center_focus_weak</i>
                            <span class=\"text-white\">Paramètres</span>
                        </a>
                    ";
        }
        // line 271
        yield "                </li>
                <li class=\"active\">
                    ";
        // line 273
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 273, $this->source); })()) == "historique"))) {
            // line 274
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historique");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">history</i>
                            <span class=\"col-yellow\">HISTORIQUE</span>
                        </a>
                    ";
        } else {
            // line 279
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historique");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">history</i>
                            <span class=\"text-white\">Historique</span>
                        </a>
                    ";
        }
        // line 284
        yield "                </li>
                <li class=\"active\">
                    ";
        // line 286
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 286, $this->source); })()) == "corbeille"))) {
            // line 287
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("corbeille");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">delete</i>
                            <span class=\"col-yellow\">CORBEILLE</span>
                        </a>
                    ";
        } else {
            // line 292
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("corbeille");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">delete</i>
                            <span class=\"text-white\">Corbeille</span>
                        </a>
                    ";
        }
        // line 297
        yield "                </li>

            </ul>
        </div>


    </aside>
    <aside id=\"rightsidebars\" class=\"right-sidebars m-t--25 p-t-10\" style=\"overflow: scroll\">
        <div class=\"tab-content\">
            <div role=\"tabpanel\" class=\"tab-pane fade in active in active\" id=\"chantier\">
                <div class=\"table-responsive\" style=\"padding: 10px !important;\">
                    ";
        // line 308
        if ((($tmp =  !array_key_exists("libre", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 309
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 309, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 310
                yield "                            ";
                $context["p"] = 0;
                // line 311
                yield "                            ";
                if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 311)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 311), "count", [], "any", false, false, false, 311) > 0))) {
                    // line 312
                    yield "                                ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 312))) {
                        // line 313
                        yield "                                    <table class=\"table-bordered shadow\" width=\"100%\" style=\" overflow: scroll;\">
                                        ";
                        // line 314
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 314));
                        foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                            // line 315
                            yield "                                            ";
                            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 315)) && (CoreExtension::getAttribute($this->env, $this->source,                             // line 316
$context["chantier"], "archiver", [], "any", false, false, false, 316) != "oui"))) {
                                // line 317
                                yield "                                                ";
                                if (((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 317, $this->source); })()) == 0)) {
                                    // line 318
                                    yield "                                                    <tr>
                                                        <td colspan=\"2\" class=\"bg-blue text-white\"
                                                            style=\"padding-left: 5px;\">
                                                            <a href=\"";
                                    // line 321
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 321)]), "html", null, true);
                                    yield "\"
                                                               class=\"text-white\" title=\"";
                                    // line 322
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 322), "html", null, true);
                                    yield "\">
                                                                -
                                                                ";
                                    // line 324
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 324), "html", null, true);
                                    yield "
                                                            </a>
                                                        </td>
                                                    </tr>
                                                ";
                                }
                                // line 329
                                yield "                                                <tr>
                                                    <td style=\"padding-left: 5px\" colspan=\"2\" class=\"bg-light\">
                                                        <a href=\"";
                                // line 331
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source,                                 // line 334
$context["chantier"], "id", [], "any", false, false, false, 334)]), "html", null, true);
                                // line 336
                                yield "\" class=\"text-pri\" title=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 336), "html", null, true);
                                yield "\">
                                                            ";
                                // line 337
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 337), 0, 55)), "html", null, true);
                                yield "
                                                        </a>
                                                    </td>
                                                </tr>
                                                ";
                                // line 341
                                $context["p"] = ((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 341, $this->source); })()) + 1);
                                // line 342
                                yield "                                            ";
                            }
                            // line 343
                            yield "                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 344
                        yield "                                    </table>
                                ";
                    }
                    // line 346
                    yield "                            ";
                }
                // line 347
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 348
            yield "                    ";
        }
        // line 349
        yield "                </div>
            </div>
        </div>
    </aside>
</section>
<input type=\"text\" class=\"hide\" id=\"current\" value=\"";
        // line 354
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 354, $this->source); })()), "user", [], "any", false, false, false, 354), "id", [], "any", false, false, false, 354), "html", null, true);
        yield "\"/>
<section class=\"content\" style=\"margin-top: 20px !important;\">
    <div class=\"container-fluid\">
        <div class=\"block-header\">
            <div class=\"row clearfix m-t-50\">
                <div class=\"col-sm-12 \">
                    <h3 class=\"bolo700\">Bonjour ";
        // line 360
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 360, $this->source); })()), "user", [], "any", false, false, false, 360), "prenoms", [], "any", false, false, false, 360)), "html", null, true);
        yield " !</h3>
                    <h4 class=\"bolo700 col-deep-orange\">Échanger avec vos collègues</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"content\" id=\"chatter\"></section>

";
        // line 369
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
        return "content/chat.html.twig";
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
        return array (  679 => 369,  667 => 360,  658 => 354,  651 => 349,  648 => 348,  642 => 347,  639 => 346,  635 => 344,  629 => 343,  626 => 342,  624 => 341,  617 => 337,  612 => 336,  610 => 334,  609 => 331,  605 => 329,  597 => 324,  592 => 322,  588 => 321,  583 => 318,  580 => 317,  578 => 316,  576 => 315,  572 => 314,  569 => 313,  566 => 312,  563 => 311,  560 => 310,  555 => 309,  553 => 308,  540 => 297,  531 => 292,  522 => 287,  520 => 286,  516 => 284,  507 => 279,  498 => 274,  496 => 273,  492 => 271,  483 => 266,  474 => 261,  472 => 260,  468 => 258,  459 => 253,  450 => 248,  448 => 247,  444 => 245,  435 => 240,  426 => 235,  424 => 234,  420 => 232,  411 => 227,  402 => 222,  400 => 221,  396 => 219,  387 => 214,  378 => 209,  376 => 208,  372 => 206,  363 => 201,  354 => 196,  352 => 195,  348 => 193,  339 => 188,  330 => 183,  328 => 182,  324 => 180,  315 => 175,  306 => 170,  304 => 169,  295 => 163,  291 => 161,  282 => 156,  273 => 151,  271 => 150,  263 => 145,  249 => 134,  243 => 131,  229 => 120,  221 => 115,  217 => 114,  213 => 113,  192 => 94,  184 => 88,  174 => 80,  162 => 76,  157 => 74,  153 => 73,  150 => 72,  146 => 71,  130 => 57,  127 => 56,  125 => 55,  122 => 54,  119 => 53,  113 => 50,  109 => 49,  106 => 48,  103 => 47,  101 => 46,  79 => 27,  74 => 25,  48 => 1,);
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
    <meta charset=\"utf-8\" />
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
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('css/chat.css') }}\" rel=\"stylesheet\"/>

    {{ encore_entry_link_tags('app') }}

    <style>
        .ql-container{
            background-color: #FFF !important;
        }
    </style>
</head>

<body class=\"theme-red\" style=\"background-color: #d1d3e2 !important;\" id=\"bod\">
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
                            <ul class=\"dropdown-menu\" style=\"width: 370px; height: 350px; padding: 0 20px; overflow-y: scroll\">
                                <li class=\"header col-pink\" style=\"font-size: 16px\">ACTIONS</li>
                                <li class=\"body\">
                                    {% for history in history %}
                                        <div class=\"menu-info\">
                                            <p class=\"col-black bolo700\">{{ history.date|date('d.m.Y H.m') }}</p>
                                            <h5 class=\"col-indigo font-weight-bold\">{{ history.action|striptags|raw }}<br>
                                            <span class=\"col-pink font-weight-bold font-12\" >
                                                Par: {{ history.dobyuser.nom|upper }} {{ history.dobyuser.prenoms|upper }}</span></h5>
                                            <hr>
                                        </div>
                                    {% endfor %}
                                </li>
                                <li class=\"footer bg-blue col-white\">
                                    <a href=\"#\" style=\"color: white; font-size: 16px\" onclick=\"shashar('historique');\">Voir
                                        toutes les actions</a>
                                </li>
                            </ul>
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
<div class=\"modal fade\" id=\"modaler\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-sm modal-notify\" role=\"document\">
        <!-- Content -->
        <div class=\"modal-content text-center\">
            <!-- Header -->
            <div class=\"modal-header d-flex justify-content-center bg-pri\">
                <h4 class=\"bolo600 col-white\">
                    ENVOYER DES FICHIERS
                </h4>
            </div>

            <!-- Body -->
            <div class=\"modal-body\">
                <h4 class=\"col-green\">
                    {{ form_start(formUploada, {'enctype':'multipart/form-data','attr': {'id': 'addFileChatForm'}}) }}
                    {{ form_row(formUploada._token) }}
                    <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addFileChat') }}\"/>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <div class=\"form-group\">
                                <div class=\"form-line col-pink\">
                                    {{ form_widget(formUploada.nomfichier,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"addFileChat\" value=\"ENVOYER\"
                               class=\"btn btn-link waves-effect text-white bg-pri\">
                        <div type=\"button\" id=\"closeFileChat\" class=\"btn btn-link waves-effect text-white bg-pink\"
                             data-dismiss=\"modal\">FERMER
                        </div>
                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadFileChat\">
                    </div>
                    {{ form_end(formUploada) }}
                </h4>
            </div>
        </div>
        <!-- /.Content -->
    </div>
</div>
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
                        <a href=\"{{ path('page') }}\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">home</i>
                            <span class=\"col-yellow\">ACCUEIL</span>
                        </a>
                    {% else %}
                        <a href=\"{{ path('page') }}\" class=\"bolo\">
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
<input type=\"text\" class=\"hide\" id=\"current\" value=\"{{ app.user.id }}\"/>
<section class=\"content\" style=\"margin-top: 20px !important;\">
    <div class=\"container-fluid\">
        <div class=\"block-header\">
            <div class=\"row clearfix m-t-50\">
                <div class=\"col-sm-12 \">
                    <h3 class=\"bolo700\">Bonjour {{ app.user.prenoms|upper }} !</h3>
                    <h4 class=\"bolo700 col-deep-orange\">Échanger avec vos collègues</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"content\" id=\"chatter\"></section>

{{ encore_entry_script_tags('app') }}

</body>
</html>
", "content/chat.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\chat.html.twig");
    }
}
