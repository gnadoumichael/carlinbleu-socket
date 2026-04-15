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

/* content/bilan.html.twig */
class __TwigTemplate_64a350711be731eea6dcacfdc390b619 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/bilan.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/bilan.html.twig"));

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
          content=\"carlinbleu, carlin bleu, carlin, gestion , projet, chantier, comptabilité, gestion technique, suivi , gestion de matériel, gestion de chantiersgestionnaire de projets, articles , matériels\">
    <meta name=\"author\" content=\"carlinGroup\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"https://www.carlinbleu.com/img/Icon-96.png\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css\"/>

    <link href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/chat.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
    ";
        // line 22
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("apbilan");
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
        // line 35
        $context["countTodo"] = 0;
        // line 36
        yield "                ";
        if ((($tmp =  !array_key_exists("libre", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 38
                yield "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "todos", [], "any", false, false, false, 38));
                foreach ($context['_seq'] as $context["_key"] => $context["todo"]) {
                    // line 39
                    yield "                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["todo"], "status", [], "any", false, false, false, 39) == "lu")) {
                        // line 40
                        yield "                                ";
                        $context["countTodo"] = ((isset($context["countTodo"]) || array_key_exists("countTodo", $context) ? $context["countTodo"] : (function () { throw new RuntimeError('Variable "countTodo" does not exist.', 40, $this->source); })()) + 1);
                        // line 41
                        yield "                            ";
                    }
                    // line 42
                    yield "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['todo'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                yield "                    ";
            }
            // line 44
            yield "                ";
        }
        // line 45
        yield "
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
                        <li class=\"hidere\">
                            <a href=\"";
                // line 71
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page");
                yield "\">
                                <i class=\"material-icons\">calendar_month</i>
                                ";
                // line 73
                if (((isset($context["countTodo"]) || array_key_exists("countTodo", $context) ? $context["countTodo"] : (function () { throw new RuntimeError('Variable "countTodo" does not exist.', 73, $this->source); })()) > 0)) {
                    // line 74
                    yield "                                    <sup><span class=\"badge badge-danger\"
                                               style=\"border-radius: 50px; margin: -10px 0 0 -10px\">";
                    // line 75
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["countTodo"]) || array_key_exists("countTodo", $context) ? $context["countTodo"] : (function () { throw new RuntimeError('Variable "countTodo" does not exist.', 75, $this->source); })()), "html", null, true);
                    yield "</span></sup>
                                ";
                } else {
                    // line 77
                    yield "                                    <sup><span class=\"badge badge-success\"
                                               style=\"border-radius: 50px; margin: -10px 0 0 -10px\">";
                    // line 78
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["countTodo"]) || array_key_exists("countTodo", $context) ? $context["countTodo"] : (function () { throw new RuntimeError('Variable "countTodo" does not exist.', 78, $this->source); })()), "html", null, true);
                    yield "</span></sup>
                                ";
                }
                // line 80
                yield "                            </a>

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
                // line 91
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["history"]);
                foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                    // line 92
                    yield "                                        <li>
                                            <a href=\"javascript:void(0);\">
                                                <div class=\"menu-info\">
                                                    <h5 class=\"col-indigo font-weight-bold\">";
                    // line 95
                    yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["history"], "action", [], "any", false, false, false, 95));
                    yield "</h5>
                                                    <h5 class=\"col-pink font-weight-bold\">
                                                        Par: ";
                    // line 97
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["history"], "dobyuser", [], "any", false, false, false, 97), "nom", [], "any", false, false, false, 97)), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["history"], "dobyuser", [], "any", false, false, false, 97), "prenoms", [], "any", false, false, false, 97)), "html", null, true);
                    yield "</h5>
                                                    <p class=\"col-black\">
                                                        <i class=\"material-icons\">access_time</i> <span
                                                                style=\"font-size: 14px\">";
                    // line 100
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["history"], "date", [], "any", false, false, false, 100), "d.m.Y H.m"), "html", null, true);
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
                // line 106
                yield "                                </ul>
                            </li>
                            <li class=\"footer bg-blue col-white\">
                                <a href=\"";
                // line 109
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historique");
                yield "\" class=\"bolo text-white\" style=\"font-size: 16px\">
                                    Voir toutes les actions
                                </a>
                            </li>
                        </ul>
                    ";
            }
            // line 115
            yield "
                    <li class=\"hidere\">
                        <a data-toggle=\"modal\" data-target=\"#ModalSearch\">
                            <i class=\"material-icons\">search</i>
                        </a>
                    </li>
                ";
        }
        // line 122
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
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logoy.png"), "html", null, true);
        yield "\" style=\"float: left; width: 200px !important;margin-top: 10px\"/>
        </div>
        <div class=\"menu\">
            <ul class=\"list\">
                <li class=\"active\">
                    ";
        // line 141
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 141, $this->source); })()) == "page"))) {
            // line 142
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">home</i>
                            <span class=\"col-yellow\">ACCUEIL</span>
                        </a>
                    ";
        } else {
            // line 147
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">home</i>
                            <span class=\"text-white\">Accueil</span>
                        </a>
                    ";
        }
        // line 152
        yield "                </li>
                <li class=\"active\">
                    <a href=\"";
        // line 154
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("content");
        yield "\" class=\"bolo\">
                        <i class=\"material-icons col-white\">add_shopping_cart</i>
                        <span class=\"col-white\">SHOWROOMS</span>
                    </a>
                </li>
                <li class=\"active\">
                    ";
        // line 160
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 160, $this->source); })()) == "message"))) {
            // line 161
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">email</i>
                            <span class=\"col-yellow\">MESSAGERIE</span>
                        </a>
                    ";
        } else {
            // line 166
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">email</i>
                            <span class=\"text-white\">Messagerie</span>
                        </a>
                    ";
        }
        // line 171
        yield "                </li>
                <li class=\"active\">
                    ";
        // line 173
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 173, $this->source); })()) == "article"))) {
            // line 174
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">content_copy</i>
                            <span class=\"col-yellow\">GESTION DES ARTICLES</span>
                        </a>
                    ";
        } else {
            // line 179
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">content_copy</i>
                            <span class=\"text-white\">Gestion des articles</span>
                        </a>
                    ";
        }
        // line 184
        yield "                </li>
                <li class=\"active\">
                    ";
        // line 186
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 186, $this->source); })()) == "etat"))) {
            // line 187
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etat");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">swap_horiz</i>
                            <span class=\"col-yellow\">GESTION DES ÉTATS</span>
                        </a>
                    ";
        } else {
            // line 192
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etat");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">swap_horiz</i>
                            <span class=\"text-white\">Gestion des états</span>
                        </a>
                    ";
        }
        // line 197
        yield "                </li>
                <li class=\"active\">
                    ";
        // line 199
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 199, $this->source); })()) == "comptable"))) {
            // line 200
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantiers");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">widgets</i>
                            <span class=\"col-yellow\">GESTION DES CHANTIERS</span>
                        </a>
                    ";
        } else {
            // line 205
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantiers");
            yield "\">
                            <i class=\"material-icons text-white\">widgets</i>
                            <span class=\"text-white\">Gestion des chantiers</span>
                        </a>
                    ";
        }
        // line 210
        yield "                </li>
                <li class=\"active\">
                    ";
        // line 212
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 212, $this->source); })()) == "technique"))) {
            // line 213
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technique");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">open_with</i>
                            <span class=\"col-yellow\">GESTION TECHNIQUE</span>
                        </a>
                    ";
        } else {
            // line 218
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technique");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">open_with</i>
                            <span class=\"text-white\">Gestion technique</span>
                        </a>
                    ";
        }
        // line 223
        yield "                </li>
                <li class=\"active\">
                    ";
        // line 225
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 225, $this->source); })()) == "materiel"))) {
            // line 226
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("materiel");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">bubble_chart</i>
                            <span class=\"col-yellow\">GESTION DU MATÉRIEL</span>
                        </a>
                    ";
        } else {
            // line 231
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("materiel");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">bubble_chart</i>
                            <span class=\"text-white\">Gestion du matériel</span>
                        </a>
                    ";
        }
        // line 236
        yield "                </li>
                <li class=\"active\">
                    ";
        // line 238
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 238, $this->source); })()) == "personnel"))) {
            // line 239
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnel");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">people_outline</i>
                            <span class=\"col-yellow\">GESTION DU PERSONNEL</span>
                        </a>
                    ";
        } else {
            // line 244
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnel");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">people_outline</i>
                            <span class=\"text-white\">Gestion du personnel</span>
                        </a>
                    ";
        }
        // line 249
        yield "                </li>
                <li class=\"active\">
                    ";
        // line 251
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 251, $this->source); })()) == "paie"))) {
            // line 252
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paie");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">toll</i>
                            <span class=\"col-yellow\">POINTS DE PAIE</span>
                        </a>
                    ";
        } else {
            // line 257
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paie");
            yield "\">
                            <i class=\"material-icons text-white\">toll</i>
                            <span class=\"text-white\">Points de paie</span>
                        </a>
                    ";
        }
        // line 262
        yield "                </li>
                <li class=\"active\">
                    ";
        // line 264
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 264, $this->source); })()) == "parametre"))) {
            // line 265
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parametre");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">center_focus_weak</i>
                            <span class=\"col-yellow\">PARAMÈTRES</span>
                        </a>
                    ";
        } else {
            // line 270
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parametre");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">center_focus_weak</i>
                            <span class=\"text-white\">Paramètres</span>
                        </a>
                    ";
        }
        // line 275
        yield "                </li>
                <li class=\"active\">
                    ";
        // line 277
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 277, $this->source); })()) == "historique"))) {
            // line 278
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historique");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">history</i>
                            <span class=\"col-yellow\">HISTORIQUE</span>
                        </a>
                    ";
        } else {
            // line 283
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historique");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">history</i>
                            <span class=\"text-white\">Historique</span>
                        </a>
                    ";
        }
        // line 288
        yield "                </li>
                <li class=\"active\">
                    ";
        // line 290
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 290, $this->source); })()) == "corbeille"))) {
            // line 291
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("corbeille");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">delete</i>
                            <span class=\"col-yellow\">CORBEILLE</span>
                        </a>
                    ";
        } else {
            // line 296
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("corbeille");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">delete</i>
                            <span class=\"text-white\">Corbeille</span>
                        </a>
                    ";
        }
        // line 301
        yield "                </li>

            </ul>
        </div>


    </aside>
    <aside id=\"rightsidebars\" class=\"right-sidebars m-t--25 p-t-10\" style=\"overflow: scroll\">
        <div class=\"tab-content\">
            <div role=\"tabpanel\" class=\"tab-pane fade in active in active\" id=\"chantier\">
                <div class=\"table-responsive\" style=\"padding: 10px !important;\">
                    ";
        // line 312
        if ((($tmp =  !array_key_exists("libre", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 313
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 313, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 314
                yield "                            ";
                $context["p"] = 0;
                // line 315
                yield "                            ";
                if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 315)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 315), "count", [], "any", false, false, false, 315) > 0))) {
                    // line 316
                    yield "                                ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 316))) {
                        // line 317
                        yield "                                    <table class=\"table-bordered shadow\" width=\"100%\" style=\" overflow: scroll;\">
                                        ";
                        // line 318
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 318));
                        foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                            // line 319
                            yield "                                            ";
                            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 319)) && (CoreExtension::getAttribute($this->env, $this->source,                             // line 320
$context["chantier"], "archiver", [], "any", false, false, false, 320) != "oui"))) {
                                // line 321
                                yield "                                                ";
                                if (((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 321, $this->source); })()) == 0)) {
                                    // line 322
                                    yield "                                                    <tr>
                                                        <td colspan=\"2\" class=\"bg-blue text-white\"
                                                            style=\"padding-left: 5px;\">
                                                            <a href=\"";
                                    // line 325
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 325)]), "html", null, true);
                                    yield "\"
                                                               class=\"text-white\" title=\"";
                                    // line 326
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 326), "html", null, true);
                                    yield "\">
                                                                -
                                                                ";
                                    // line 328
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 328), "html", null, true);
                                    yield "
                                                            </a>
                                                        </td>
                                                    </tr>
                                                ";
                                }
                                // line 333
                                yield "                                                <tr>
                                                    <td style=\"padding-left: 5px\" colspan=\"2\" class=\"bg-light\">
                                                        <a href=\"";
                                // line 335
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source,                                 // line 338
$context["chantier"], "id", [], "any", false, false, false, 338)]), "html", null, true);
                                // line 340
                                yield "\" class=\"text-pri\" title=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 340), "html", null, true);
                                yield "\">
                                                            ";
                                // line 341
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 341), 0, 55)), "html", null, true);
                                yield "
                                                        </a>
                                                    </td>
                                                </tr>
                                                ";
                                // line 345
                                $context["p"] = ((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 345, $this->source); })()) + 1);
                                // line 346
                                yield "                                            ";
                            }
                            // line 347
                            yield "                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 348
                        yield "                                    </table>
                                ";
                    }
                    // line 350
                    yield "                            ";
                }
                // line 351
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 352
            yield "                    ";
        }
        // line 353
        yield "                </div>
            </div>
        </div>
    </aside>
</section>

<input type=\"text\" class=\"hide\" id=\"jsonchantiers\" value=\"";
        // line 359
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["jsonchantiers"]) || array_key_exists("jsonchantiers", $context) ? $context["jsonchantiers"] : (function () { throw new RuntimeError('Variable "jsonchantiers" does not exist.', 359, $this->source); })()), "html", null, true);
        yield "\">

<section class=\"content\" style=\"margin-top: -20px !important;\">
    <div class=\"container-fluid\">
        <div class=\"block-header\">
            <div class=\"row clearfix m-t-50\">
                <div class=\"col-sm-12 \">
                    <h3 class=\"bolo700\">Bonjour ";
        // line 366
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 366, $this->source); })()), "user", [], "any", false, false, false, 366), "prenoms", [], "any", false, false, false, 366)), "html", null, true);
        yield " !</h3>
                    <h4 class=\"bolo700 col-deep-orange\">BILAN ANNUEL</h4>
                </div>
                <div class=\"col-md-12\" id=\"setBilan\">

                </div>
            </div>
            <div class=\"row\" id=\"setBilan\">

            </div>
        </div>
    </div>
</section>
<script>
    localStorage.setItem('reloadd', 'bilan');
</script>
";
        // line 382
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("apbilan");
        yield "
</body>
<html>

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
        return "content/bilan.html.twig";
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
        return array (  730 => 382,  711 => 366,  701 => 359,  693 => 353,  690 => 352,  684 => 351,  681 => 350,  677 => 348,  671 => 347,  668 => 346,  666 => 345,  659 => 341,  654 => 340,  652 => 338,  651 => 335,  647 => 333,  639 => 328,  634 => 326,  630 => 325,  625 => 322,  622 => 321,  620 => 320,  618 => 319,  614 => 318,  611 => 317,  608 => 316,  605 => 315,  602 => 314,  597 => 313,  595 => 312,  582 => 301,  573 => 296,  564 => 291,  562 => 290,  558 => 288,  549 => 283,  540 => 278,  538 => 277,  534 => 275,  525 => 270,  516 => 265,  514 => 264,  510 => 262,  501 => 257,  492 => 252,  490 => 251,  486 => 249,  477 => 244,  468 => 239,  466 => 238,  462 => 236,  453 => 231,  444 => 226,  442 => 225,  438 => 223,  429 => 218,  420 => 213,  418 => 212,  414 => 210,  405 => 205,  396 => 200,  394 => 199,  390 => 197,  381 => 192,  372 => 187,  370 => 186,  366 => 184,  357 => 179,  348 => 174,  346 => 173,  342 => 171,  333 => 166,  324 => 161,  322 => 160,  313 => 154,  309 => 152,  300 => 147,  291 => 142,  289 => 141,  281 => 136,  265 => 122,  256 => 115,  247 => 109,  242 => 106,  230 => 100,  222 => 97,  217 => 95,  212 => 92,  208 => 91,  195 => 80,  190 => 78,  187 => 77,  182 => 75,  179 => 74,  177 => 73,  172 => 71,  156 => 57,  153 => 56,  151 => 55,  148 => 54,  145 => 53,  139 => 50,  135 => 49,  132 => 48,  129 => 47,  127 => 46,  124 => 45,  121 => 44,  118 => 43,  112 => 42,  109 => 41,  106 => 40,  103 => 39,  98 => 38,  95 => 37,  92 => 36,  90 => 35,  74 => 22,  70 => 21,  48 => 1,);
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
          content=\"carlinbleu, carlin bleu, carlin, gestion , projet, chantier, comptabilité, gestion technique, suivi , gestion de matériel, gestion de chantiersgestionnaire de projets, articles , matériels\">
    <meta name=\"author\" content=\"carlinGroup\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"https://www.carlinbleu.com/img/Icon-96.png\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css\"/>

    <link href=\"{{ asset('css/chat.css') }}\" rel=\"stylesheet\"/>
    {{ encore_entry_link_tags('apbilan') }}
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

                {% set countTodo = 0 %}
                {% if libre is not defined %}
                    {% if app.user %}
                        {% for todo  in app.user.todos %}
                            {% if todo.status == \"lu\" %}
                                {% set countTodo = countTodo + 1 %}
                            {% endif %}
                        {% endfor %}
                    {% endif %}
                {% endif %}

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
                        <li class=\"hidere\">
                            <a href=\"{{ path('page') }}\">
                                <i class=\"material-icons\">calendar_month</i>
                                {% if countTodo > 0 %}
                                    <sup><span class=\"badge badge-danger\"
                                               style=\"border-radius: 50px; margin: -10px 0 0 -10px\">{{ countTodo }}</span></sup>
                                {% else %}
                                    <sup><span class=\"badge badge-success\"
                                               style=\"border-radius: 50px; margin: -10px 0 0 -10px\">{{ countTodo }}</span></sup>
                                {% endif %}
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

<input type=\"text\" class=\"hide\" id=\"jsonchantiers\" value=\"{{ jsonchantiers }}\">

<section class=\"content\" style=\"margin-top: -20px !important;\">
    <div class=\"container-fluid\">
        <div class=\"block-header\">
            <div class=\"row clearfix m-t-50\">
                <div class=\"col-sm-12 \">
                    <h3 class=\"bolo700\">Bonjour {{ app.user.prenoms|capitalize }} !</h3>
                    <h4 class=\"bolo700 col-deep-orange\">BILAN ANNUEL</h4>
                </div>
                <div class=\"col-md-12\" id=\"setBilan\">

                </div>
            </div>
            <div class=\"row\" id=\"setBilan\">

            </div>
        </div>
    </div>
</section>
<script>
    localStorage.setItem('reloadd', 'bilan');
</script>
{{ encore_entry_script_tags('apbilan') }}
</body>
<html>

", "content/bilan.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\bilan.html.twig");
    }
}
