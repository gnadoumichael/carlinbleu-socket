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

/* content/tache.html.twig */
class __TwigTemplate_b8721c9f79306f9f37d84acb24e0d980 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/tache.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/tache.html.twig"));

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
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        yield "
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
        // line 37
        if ((($tmp =  !array_key_exists("libre", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 38
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 39
                yield "                        <li class=\"col-yellow h4 bolo600 m-l-20\">
                            ";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "nom", [], "any", false, false, false, 40)), "html", null, true);
                yield "
                            ";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "prenoms", [], "any", false, false, false, 41)), "html", null, true);
                yield "
                        </li>
                    ";
            }
            // line 44
            yield "                ";
        }
        // line 45
        yield "
                ";
        // line 46
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 47
            yield "                    ";
            if (( !array_key_exists("libre", $context) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47))) {
                // line 48
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
                        <ul class=\"dropdown-menu bg-light\" style=\"width: 370px !important\">
                            <li class=\"header col-pink\" style=\"font-size: 16px\">ACTIONS</li>
                            <li class=\"body\">
                                <ul class=\"menu\" style=\"width: 340px !important\">
                                    ";
                // line 63
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["history"]);
                foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                    // line 64
                    yield "                                        <li>
                                            <a href=\"javascript:void(0);\">
                                                <div class=\"menu-info\">
                                                    <h5 class=\"col-indigo font-weight-bold\">";
                    // line 67
                    yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["history"], "action", [], "any", false, false, false, 67));
                    yield "</h5>
                                                    <h5 class=\"col-pink font-weight-bold\">Par: ";
                    // line 68
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["history"], "dobyuser", [], "any", false, false, false, 68), "nom", [], "any", false, false, false, 68)), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["history"], "dobyuser", [], "any", false, false, false, 68), "prenoms", [], "any", false, false, false, 68)), "html", null, true);
                    yield "</h5>
                                                    <p class=\"col-black\">
                                                        <i class=\"material-icons\">access_time</i> <span style=\"font-size: 14px\">";
                    // line 70
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["history"], "date", [], "any", false, false, false, 70), "d.m.Y H.m"), "html", null, true);
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
                // line 76
                yield "                                </ul>
                            </li>
                            <li class=\"footer bg-blue col-white\">
                                <a href=\"#\" style=\"color: white; font-size: 16px\" onclick=\"shashar('historique');\">Voir toutes les actions</a>
                            </li>
                        </ul>
                    ";
            }
            // line 83
            yield "                    <li class=\"hidere\">
                        <a data-toggle=\"modal\" data-target=\"#ModalSearch\">
                            <i class=\"material-icons\">search</i>
                        </a>
                    </li>
                ";
        }
        // line 89
        yield "            </ul>
        </div>
    </div>
</nav>
<section>
    <aside id=\"leftsidebar\" class=\"sidebar text-center bg-pri\"
           style=\"z-index: 1000 !important; margin-top: -70px; width: 240px; height: 100%\">
        <div class=\"user-info\" style=\"height: 150px !important;\">
            <img src=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logoy.png"), "html", null, true);
        yield "\" style=\"float: left; width: 200px !important;margin-top: 10px\"/>
        </div>
        <div class=\"menu\">
            <ul class=\"list\">
                <li class=\"active\">
                    ";
        // line 102
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 102, $this->source); })()) == "page"))) {
            // line 103
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">home</i>
                            <span class=\"col-yellow\">ACCUEIL</span>
                        </a>
                    ";
        } else {
            // line 108
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">home</i>
                            <span class=\"text-white\">Accueil</span>
                        </a>
                    ";
        }
        // line 113
        yield "                </li>
                <li class=\"active\">
                    <a href=\"";
        // line 115
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("content");
        yield "\" class=\"bolo\">
                        <i class=\"material-icons col-white\">add_shopping_cart</i>
                        <span class=\"col-white\">SHOWROOMS</span>
                    </a>
                </li>
                <li class=\"active\">
                    ";
        // line 121
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 121, $this->source); })()) == "message"))) {
            // line 122
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">email</i>
                            <span class=\"col-yellow\">MESSAGERIE</span>
                        </a>
                    ";
        } else {
            // line 127
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">email</i>
                            <span class=\"text-white\">Messagerie</span>
                        </a>
                    ";
        }
        // line 132
        yield "                </li>
                <li class=\"active\">
                    ";
        // line 134
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 134, $this->source); })()) == "article"))) {
            // line 135
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">content_copy</i>
                            <span class=\"col-yellow\">MES ARTICLES</span>
                        </a>
                    ";
        } else {
            // line 140
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">content_copy</i>
                            <span class=\"text-white\">Mes articles</span>
                        </a>
                    ";
        }
        // line 145
        yield "                </li>
                <li class=\"active\">
                    ";
        // line 147
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 147, $this->source); })()) == "comptable"))) {
            // line 148
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantiers");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">widgets</i>
                            <span class=\"col-yellow\">COMPTABILITÉ</span>
                        </a>
                    ";
        } else {
            // line 153
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantiers");
            yield "\">
                            <i class=\"material-icons text-white\">widgets</i>
                            <span class=\"text-white\">Comptabilité</span>
                        </a>
                    ";
        }
        // line 158
        yield "                </li>
                <li class=\"active\">
                    ";
        // line 160
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 160, $this->source); })()) == "paie"))) {
            // line 161
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paie");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">toll</i>
                            <span class=\"col-yellow\">POINTS DE PAIE</span>
                        </a>
                    ";
        } else {
            // line 166
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paie");
            yield "\">
                            <i class=\"material-icons text-white\">toll</i>
                            <span class=\"text-white\">Points de paie</span>
                        </a>
                    ";
        }
        // line 171
        yield "                </li>
                <li class=\"active\">
                    ";
        // line 173
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 173, $this->source); })()) == "technique"))) {
            // line 174
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technique");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">open_with</i>
                            <span class=\"col-yellow\">GESTION TECHNIQUE</span>
                        </a>
                    ";
        } else {
            // line 179
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technique");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">open_with</i>
                            <span class=\"text-white\">Gestion technique</span>
                        </a>
                    ";
        }
        // line 184
        yield "                </li>
                <li class=\"active\">
                    ";
        // line 186
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 186, $this->source); })()) == "materiel"))) {
            // line 187
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("materiel");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">bubble_chart</i>
                            <span class=\"col-yellow\">GESTION DU MATÉRIEL</span>
                        </a>
                    ";
        } else {
            // line 192
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("materiel");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">bubble_chart</i>
                            <span class=\"text-white\">Gestion du matériel</span>
                        </a>
                    ";
        }
        // line 197
        yield "                </li>
                <li class=\"active\">
                    ";
        // line 199
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 199, $this->source); })()) == "personnel"))) {
            // line 200
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnel");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">people_outline</i>
                            <span class=\"col-yellow\">GESTION DU PERSONNEL</span>
                        </a>
                    ";
        } else {
            // line 205
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnel");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">people_outline</i>
                            <span class=\"text-white\">Gestion du personnel</span>
                        </a>
                    ";
        }
        // line 210
        yield "                </li>
                <li class=\"active\">
                    ";
        // line 212
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 212, $this->source); })()) == "parametre"))) {
            // line 213
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parametre");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">center_focus_weak</i>
                            <span class=\"col-yellow\">PARAMÈTRES</span>
                        </a>
                    ";
        } else {
            // line 218
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parametre");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">center_focus_weak</i>
                            <span class=\"text-white\">Paramètres</span>
                        </a>
                    ";
        }
        // line 223
        yield "                </li>
                <li class=\"active\">
                    ";
        // line 225
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 225, $this->source); })()) == "historique"))) {
            // line 226
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historique");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">history</i>
                            <span class=\"col-yellow\">HISTORIQUE</span>
                        </a>
                    ";
        } else {
            // line 231
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historique");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">history</i>
                            <span class=\"text-white\">Historique</span>
                        </a>
                    ";
        }
        // line 236
        yield "                </li>
                <li class=\"active\">
                    ";
        // line 238
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 238, $this->source); })()) == "corbeille"))) {
            // line 239
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("corbeille");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">delete</i>
                            <span class=\"col-yellow\">CORBEILLE</span>
                        </a>
                    ";
        } else {
            // line 244
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("corbeille");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">delete</i>
                            <span class=\"text-white\">Corbeille</span>
                        </a>
                    ";
        }
        // line 249
        yield "                </li>

            </ul>
        </div>


    </aside>
    <aside id=\"rightsidebars\" class=\"right-sidebars m-t--25 p-t-10\" style=\"overflow: scroll\">
        <div class=\"tab-content\">
            <div role=\"tabpanel\" class=\"tab-pane fade in active in active\" id=\"chantier\">
                <div class=\"table-responsive\" style=\"padding: 10px !important;\">
                    ";
        // line 260
        if ((($tmp =  !array_key_exists("libre", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 261
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 261, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 262
                yield "                            ";
                $context["p"] = 0;
                // line 263
                yield "                            ";
                if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 263)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 263), "count", [], "any", false, false, false, 263) > 0))) {
                    // line 264
                    yield "                                ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 264))) {
                        // line 265
                        yield "                                    <table class=\"table-bordered shadow\" width=\"100%\" style=\" overflow: scroll;\">
                                        ";
                        // line 266
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 266));
                        foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                            // line 267
                            yield "                                            ";
                            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 267)) && (CoreExtension::getAttribute($this->env, $this->source,                             // line 268
$context["chantier"], "archiver", [], "any", false, false, false, 268) != "oui"))) {
                                // line 269
                                yield "                                                ";
                                if (((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 269, $this->source); })()) == 0)) {
                                    // line 270
                                    yield "                                                    <tr>
                                                        <td colspan=\"2\" class=\"bg-blue text-white\"
                                                            style=\"padding-left: 5px;\">
                                                            <a href=\"";
                                    // line 273
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 273)]), "html", null, true);
                                    yield "\"
                                                               class=\"text-white\" title=\"";
                                    // line 274
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 274), "html", null, true);
                                    yield "\">
                                                                -
                                                                ";
                                    // line 276
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 276), "html", null, true);
                                    yield "
                                                            </a>
                                                        </td>
                                                    </tr>
                                                ";
                                }
                                // line 281
                                yield "                                                <tr>
                                                    <td style=\"padding-left: 5px\" colspan=\"2\" class=\"bg-light\">
                                                        <a href=\"";
                                // line 283
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source,                                 // line 286
$context["chantier"], "id", [], "any", false, false, false, 286)]), "html", null, true);
                                // line 288
                                yield "\" class=\"text-pri\" title=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 288), "html", null, true);
                                yield "\">
                                                            ";
                                // line 289
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 289), 0, 55)), "html", null, true);
                                yield "
                                                        </a>
                                                    </td>
                                                </tr>
                                                ";
                                // line 293
                                $context["p"] = ((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 293, $this->source); })()) + 1);
                                // line 294
                                yield "                                            ";
                            }
                            // line 295
                            yield "                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 296
                        yield "                                    </table>
                                ";
                    }
                    // line 298
                    yield "                            ";
                }
                // line 299
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 300
            yield "                    ";
        }
        // line 301
        yield "                </div>
            </div>
        </div>
    </aside>
</section>

<input type=\"text\" class=\"hide\" id=\"taid\" value=\"";
        // line 307
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 307, $this->source); })()), "id", [], "any", false, false, false, 307), "html", null, true);
        yield "\"/>
<input type=\"text\" class=\"hide\" id=\"current\" value=\"";
        // line 308
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 308, $this->source); })()), "user", [], "any", false, false, false, 308), "id", [], "any", false, false, false, 308), "html", null, true);
        yield "\"/>

<div class=\"modal fade right\" id=\"modalFiche\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header text-white bg-green p-l-20\">
                <h3 class=\"modal-title\" id=\"defaultModalLabel\">AJOUTER DES FICHIERS / IMAGES</h3>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    ";
        // line 319
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUpload"]) || array_key_exists("formUpload", $context) ? $context["formUpload"] : (function () { throw new RuntimeError('Variable "formUpload" does not exist.', 319, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data", "attr" => ["id" => "addFileTacheForm"]]);
        yield "
                    ";
        // line 320
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUpload"]) || array_key_exists("formUpload", $context) ? $context["formUpload"] : (function () { throw new RuntimeError('Variable "formUpload" does not exist.', 320, $this->source); })()), "_token", [], "any", false, false, false, 320), 'row');
        yield "
                    <input type=\"hidden\" name=\"token\" value=\"";
        // line 321
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addFileTache"), "html", null, true);
        yield "\"/>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">IMPORTER DES FICHIERS/IMAGES</label>
                            <div class=\"form-group\">
                                <div class=\"form-line col-pink\">
                                    ";
        // line 327
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUpload"]) || array_key_exists("formUpload", $context) ? $context["formUpload"] : (function () { throw new RuntimeError('Variable "formUpload" does not exist.', 327, $this->source); })()), "nomfichier", [], "any", false, false, false, 327), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">CATÉGORIES</label>
                            <div class=\"form-group\">
                                <div class=\"form-line col-pink\">
                                    ";
        // line 337
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUpload"]) || array_key_exists("formUpload", $context) ? $context["formUpload"] : (function () { throw new RuntimeError('Variable "formUpload" does not exist.', 337, $this->source); })()), "categorie", [], "any", false, false, false, 337), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"addFileTache\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect text-white bg-pri\">
                        <div type=\"button\" id=\"closeFileTache\"
                             class=\"btn btn-link waves-effect text-white bg-pink\" data-dismiss=\"modal\">
                            FERMER
                        </div>
                        <img src=\"";
        // line 349
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadFileTache\">
                    </div>
                    ";
        // line 352
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUpload"]) || array_key_exists("formUpload", $context) ? $context["formUpload"] : (function () { throw new RuntimeError('Variable "formUpload" does not exist.', 352, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
<input type=\"submit\" id=\"addeTache\" value=\"ENREGISTRER\"
       class=\"btn btn-link waves-effect text-white bg-pri\">

<section class=\"content\" id=\"taching\" style=\"margin-top: 20px !important;\"></section>

";
        // line 363
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
        return "content/tache.html.twig";
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
        return array (  673 => 363,  659 => 352,  653 => 349,  638 => 337,  625 => 327,  616 => 321,  612 => 320,  608 => 319,  594 => 308,  590 => 307,  582 => 301,  579 => 300,  573 => 299,  570 => 298,  566 => 296,  560 => 295,  557 => 294,  555 => 293,  548 => 289,  543 => 288,  541 => 286,  540 => 283,  536 => 281,  528 => 276,  523 => 274,  519 => 273,  514 => 270,  511 => 269,  509 => 268,  507 => 267,  503 => 266,  500 => 265,  497 => 264,  494 => 263,  491 => 262,  486 => 261,  484 => 260,  471 => 249,  462 => 244,  453 => 239,  451 => 238,  447 => 236,  438 => 231,  429 => 226,  427 => 225,  423 => 223,  414 => 218,  405 => 213,  403 => 212,  399 => 210,  390 => 205,  381 => 200,  379 => 199,  375 => 197,  366 => 192,  357 => 187,  355 => 186,  351 => 184,  342 => 179,  333 => 174,  331 => 173,  327 => 171,  318 => 166,  309 => 161,  307 => 160,  303 => 158,  294 => 153,  285 => 148,  283 => 147,  279 => 145,  270 => 140,  261 => 135,  259 => 134,  255 => 132,  246 => 127,  237 => 122,  235 => 121,  226 => 115,  222 => 113,  213 => 108,  204 => 103,  202 => 102,  194 => 97,  184 => 89,  176 => 83,  167 => 76,  155 => 70,  148 => 68,  144 => 67,  139 => 64,  135 => 63,  118 => 48,  115 => 47,  113 => 46,  110 => 45,  107 => 44,  101 => 41,  97 => 40,  94 => 39,  91 => 38,  89 => 37,  73 => 24,  48 => 1,);
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

    {{ encore_entry_link_tags('app') }}
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

<input type=\"text\" class=\"hide\" id=\"taid\" value=\"{{ tache.id }}\"/>
<input type=\"text\" class=\"hide\" id=\"current\" value=\"{{ app.user.id }}\"/>

<div class=\"modal fade right\" id=\"modalFiche\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header text-white bg-green p-l-20\">
                <h3 class=\"modal-title\" id=\"defaultModalLabel\">AJOUTER DES FICHIERS / IMAGES</h3>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    {{ form_start(formUpload, {'enctype':'multipart/form-data','attr': {'id': 'addFileTacheForm'}}) }}
                    {{ form_row(formUpload._token) }}
                    <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addFileTache') }}\"/>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">IMPORTER DES FICHIERS/IMAGES</label>
                            <div class=\"form-group\">
                                <div class=\"form-line col-pink\">
                                    {{ form_widget(formUpload.nomfichier,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">CATÉGORIES</label>
                            <div class=\"form-group\">
                                <div class=\"form-line col-pink\">
                                    {{ form_widget(formUpload.categorie,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"addFileTache\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect text-white bg-pri\">
                        <div type=\"button\" id=\"closeFileTache\"
                             class=\"btn btn-link waves-effect text-white bg-pink\" data-dismiss=\"modal\">
                            FERMER
                        </div>
                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadFileTache\">
                    </div>
                    {{ form_end(formUpload) }}
                </div>
            </div>
        </div>
    </div>
</div>
<input type=\"submit\" id=\"addeTache\" value=\"ENREGISTRER\"
       class=\"btn btn-link waves-effect text-white bg-pri\">

<section class=\"content\" id=\"taching\" style=\"margin-top: 20px !important;\"></section>

{{ encore_entry_script_tags('app') }}
</body>
</html>


", "content/tache.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\tache.html.twig");
    }
}
