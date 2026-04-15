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

/* security/start.html.twig */
class __TwigTemplate_4c4c3daf57de47d24331cbfb121711c8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/start.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/start.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html ; charset=utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Carlinble | Gestionnaire de Chantiers</title>
    <meta content=\"no-cache, no-store, must-revalidate, post-check=0, pre-check=0\"/>
    <meta name=\"description\" content=\"Votre application multi-utilisateurs de gestion de chantiers: Comptabilité, Gestion technique, Suivi et gestion de matériel,
         Gestion des articles, Planning, Gestionnaire de stock, etc.\">
    <meta name=\"keywords\"
          content=\"carlinbleu, carlin bleu, carlin, gestion , projet, chantier, comptabilité, gestion technique, suivi , gestion de matériel, gestion de chantiersgestionnaire de projets, articles, matériels\">
    <meta name=\"author\" content=\"carlinGroup\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"https://www.carlinbleu.com/img/Icon-96.png\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
          integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">

    <link rel=\"shortcut icon\" type=\"image/png\" href=\"https://www.carlinbleu.com/img/Icon-96.png\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css\"/>

    <link href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/mdb.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/waves.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap-material-datetimepicker.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap-datepicker.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/select2.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/all-themes.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/sidebars.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
    <style>
        h6 {
            font-size: 13px !important;
        }

        a {
            color: #3d67d0;
            font-weight: bold
        }

        @media (min-width: 992px) {
            .modal-lg, .modal-xl {
                max-width: 1100px !important;
            }
        }
    </style>
    <style>
        strong {
            font-weight: 700 !important;
        }

        b {
            font-weight: 700 !important;
        }

        .notification {
            width: 360px;
            padding: 15px;
            background-color: white;
            border-radius: 16px;
            position: fixed;
            top: 50px;
            left: 15px;
            animation: shake 0.5s;
            animation-iteration-count: infinite;
        }

        @keyframes shake {
            0% {
                transform: translate(1px, 1px) rotate(0deg);
            }

            40% {
                transform: translate(1px, -1px) rotate(1deg);
            }

            80% {
                transform: translate(-1px, -1px) rotate(1deg);
            }

            100% {
                transform: translate(1px, -2px) rotate(-1deg);
            }
        }

        .notification-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .notification-title {
            font-size: 16px;
            font-weight: 500;
            text-transform: capitalize;
        }

        .notification-close {
            cursor: pointer;
            width: 30px;
            height: 30px;
            border-radius: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #F0F2F5;
            font-size: 14px;
        }

        .notification-container {
            display: flex;
            align-items: flex-start;
        }

        .notification-media {
            position: relative;
        }

        .notification-user-avatar {
            width: 60px;
            height: 60px;
            margin-top: -20px;
            border-radius: 60px;
            -o-object-fit: cover;
            object-fit: cover;
        }

        .notification-content {
            width: calc(100% - 60px);
            padding-left: 20px;
            line-height: 1.2;
            text-align: left;
            font-size: 12px !important;
        }

        .hider {
            display: none;
        }
    </style>
</head>

<body style=\"background-color:#3b3b3b\">
<div class=\"modal fade\" id=\"Traitement\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-sm modal-notify\" role=\"document\">
        <div class=\"modal-content text-center\">
            <div class=\"modal-header d-flex justify-content-center bg-blue\">
                <h4 class=\"font-bold col-white\">
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
<div class=\"modal\" id=\"app_exercices\">
    <div class=\"modal-dialog\" style=\"max-width: 550px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_exercices\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                ";
        // line 177
        if ((($tmp = (isset($context["idexer"]) || array_key_exists("idexer", $context) ? $context["idexer"] : (function () { throw new RuntimeError('Variable "idexer" does not exist.', 177, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 178
            yield "                    <p style=\"margin: 15px 0 10px 10px; color: #649a3f; font-weight: bold; font-size: 16px\">MODIFIER UN
                        EXERCICE COMPTABLE</p>
                ";
        } else {
            // line 181
            yield "                    <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">CRÉER UN
                        EXERCICE COMPTABLE</p>
                ";
        }
        // line 184
        yield "
            </div>
            <div class=\"modal-body\" style=\"height:50vh; width:100%; overflow-y: scroll\">
                ";
        // line 187
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formExercices"]) || array_key_exists("formExercices", $context) ? $context["formExercices"] : (function () { throw new RuntimeError('Variable "formExercices" does not exist.', 187, $this->source); })()), 'form_start', ["attr" => ["id" => "addExercicesForm"]]);
        yield "
                <input type=\"hidden\" name=\"token\" value=\"";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addExercicesToken"), "html", null, true);
        yield "\"/>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label pri bolo\">EXERCICE COMPTABLE
                            <span class=\"col-pink\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 195
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formExercices"]) || array_key_exists("formExercices", $context) ? $context["formExercices"] : (function () { throw new RuntimeError('Variable "formExercices" does not exist.', 195, $this->source); })()), "exercice", [], "any", false, false, false, 195), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <div class=\"form-group m-t--5\">
                            <label class=\"form-label pri bolo\">DÉBUTE LE</label>
                            <div class=\"input-group date\" id=\"id_0\">
                                <input type=\"text\" placeholder=\"Date...\" id=\"debut\" name=\"debut\"
                                       style=\"border-bottom: 1px solid #000\" class=\"form-control chr\"/>
                                <div class=\"input-group-addon input-group-append\">
                                    <div class=\"input-group-text\">
                                        <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <div class=\"form-group m-t--5\">
                            <label class=\"form-label pri bolo\">TERMINE LE</label>
                            <div class=\"input-group date\" id=\"id_1\">
                                <input type=\"text\" placeholder=\"Date...\" id=\"fin\" name=\"fin\"
                                       style=\"border-bottom: 1px solid #000\" class=\"form-control chr\"/>
                                <div class=\"input-group-addon input-group-append\">
                                    <div class=\"input-group-text\">
                                        <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    ";
        // line 231
        if ((($tmp = (isset($context["idexer"]) || array_key_exists("idexer", $context) ? $context["idexer"] : (function () { throw new RuntimeError('Variable "idexer" does not exist.', 231, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 232
            yield "                        <input type=\"submit\" id=\"updExercices\" value=\"MODIFIER\"
                               class=\"btn waves-effect text-white bg-green\">
                    ";
        } else {
            // line 235
            yield "                        <input type=\"submit\" id=\"addExercices\" value=\"ENREGISTRER\"
                               class=\"btn waves-effect text-white bg-pri\">
                    ";
        }
        // line 238
        yield "
                    <img src=\"";
        // line 239
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadExercices\">
                </div>
                ";
        // line 242
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formExercices"]) || array_key_exists("formExercices", $context) ? $context["formExercices"] : (function () { throw new RuntimeError('Variable "formExercices" does not exist.', 242, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"app_besoins\">
    <div class=\"modal-dialog\" style=\"max-width: 450px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_besoins\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                ";
        // line 254
        if ((($tmp = (isset($context["idbeso"]) || array_key_exists("idbeso", $context) ? $context["idbeso"] : (function () { throw new RuntimeError('Variable "idbeso" does not exist.', 254, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 255
            yield "                    <p style=\"margin: 15px 0 10px 10px; color: #447814; font-weight: bold; font-size: 16px\">MODIFIER UN
                        BESOIN</p>
                ";
        } else {
            // line 258
            yield "                    <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">SAISIR UN
                        BESOIN</p>
                ";
        }
        // line 261
        yield "            </div>
            <div class=\"modal-body\" style=\"height:65vh; width:100%; overflow-y: scroll\">
                ";
        // line 263
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formBesoins"]) || array_key_exists("formBesoins", $context) ? $context["formBesoins"] : (function () { throw new RuntimeError('Variable "formBesoins" does not exist.', 263, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data", "id" => "addBesoinsForm"]]);
        yield "
                <input type=\"hidden\" name=\"token\" value=\"";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addBesoinsToken"), "html", null, true);
        yield "\"/>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Fichiers</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 270
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBesoins"]) || array_key_exists("formBesoins", $context) ? $context["formBesoins"] : (function () { throw new RuntimeError('Variable "formBesoins" does not exist.', 270, $this->source); })()), "fichiers", [], "any", false, false, false, 270), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Chantiers<span class=\"col-pink\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 280
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBesoins"]) || array_key_exists("formBesoins", $context) ? $context["formBesoins"] : (function () { throw new RuntimeError('Variable "formBesoins" does not exist.', 280, $this->source); })()), "chantier", [], "any", false, false, false, 280), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Besoins
                            <span class=\"col-pink\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 291
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBesoins"]) || array_key_exists("formBesoins", $context) ? $context["formBesoins"] : (function () { throw new RuntimeError('Variable "formBesoins" does not exist.', 291, $this->source); })()), "besoin", [], "any", false, false, false, 291), 'widget', ["id" => "editor12", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">État
                            <span class=\"col-pink\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 302
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBesoins"]) || array_key_exists("formBesoins", $context) ? $context["formBesoins"] : (function () { throw new RuntimeError('Variable "formBesoins" does not exist.', 302, $this->source); })()), "etat", [], "any", false, false, false, 302), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    ";
        // line 308
        if ((($tmp = (isset($context["idbeso"]) || array_key_exists("idbeso", $context) ? $context["idbeso"] : (function () { throw new RuntimeError('Variable "idbeso" does not exist.', 308, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 309
            yield "                        <input type=\"submit\" id=\"updBesoins\" value=\"MODIFIER\"
                               class=\"btn waves-effect text-white bg-green\">
                    ";
        } else {
            // line 312
            yield "                        <input type=\"submit\" id=\"addBesoins\" value=\"ENREGISTRER\"
                               class=\"btn waves-effect text-white bg-pri\">
                    ";
        }
        // line 315
        yield "                    <img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadBesoins\">
                </div>
                ";
        // line 318
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formBesoins"]) || array_key_exists("formBesoins", $context) ? $context["formBesoins"] : (function () { throw new RuntimeError('Variable "formBesoins" does not exist.', 318, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"chat_besoins\">
    <div class=\"modal-dialog\" style=\"max-width: 450px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_chat_besoins\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">BESOIN -
                    CHAT</p>
            </div>
            <div id=\"chatbesoin\" style=\"height:70vh; width:100%;\">

            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"app_add_client\">
    <div class=\"modal-dialog\" style=\"max-width: 450px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_client\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">AJOUTER UN
                    CLIENT</p>
            </div>
            <div class=\"modal-body\" style=\"height:50vh; width:100%; overflow-y: scroll\">
                ";
        // line 350
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 350, $this->source); })()), 'form_start', ["attr" => ["id" => "addClientForm"]]);
        yield "
                ";
        // line 351
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 351, $this->source); })()), "_token", [], "any", false, false, false, 351), 'row');
        yield "
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label pri bolo\">Client<span class=\"col-red\">*</span>
                        </label>
                        <div class=\"form-group m-t--5\">
                            <div class=\"form-line\">
                                ";
        // line 358
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 358, $this->source); })()), "nomclient", [], "any", false, false, false, 358), 'widget', ["attr" => ["class" => "form-control cls"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label pri bolo\">Adresse</label>
                        <div class=\"form-group m-t--5\">
                            <div class=\"form-line\">
                                ";
        // line 368
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 368, $this->source); })()), "adresse", [], "any", false, false, false, 368), 'widget', ["attr" => ["class" => "form-control cls"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label pri bolo\">Contacts</label>
                        <div class=\"form-group m-t--5\">
                            <div class=\"form-line\">
                                ";
        // line 378
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 378, $this->source); })()), "contact", [], "any", false, false, false, 378), 'widget', ["attr" => ["class" => "form-control cls"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label pri bolo\">Compte contribuable</label>
                        <div class=\"form-group m-t--5\">
                            <div class=\"form-line\">
                                ";
        // line 388
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 388, $this->source); })()), "contribuable", [], "any", false, false, false, 388), 'widget', ["attr" => ["class" => "form-control cls"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"text-center\" id=\"divClient\">
                    <input type=\"submit\" id=\"addClient\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect col-white bg-pri\">
                </div>
                <div class=\"text-center\">
                    <img src=\"";
        // line 399
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadClient\"/>
                </div>
                ";
        // line 402
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 402, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"app_add_chantier\">
    <div class=\"modal-dialog\" style=\"max-width: 550px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_chantier\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">AJOUTER UN
                    CHANTIER</p>
            </div>
            <div class=\"modal-body\" style=\"height:80vh; width:100%; overflow-y: scroll\">
                ";
        // line 418
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 418, $this->source); })()), 'form_start', ["attr" => ["id" => "addChantierForm"]]);
        yield "
                <input type=\"hidden\" name=\"token\" value=\"";
        // line 419
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addChantierToken"), "html", null, true);
        yield "\"/>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label pri bolo\">Client<span class=\"col-red\">*</span>
                        </label>
                        <div class=\"form-group m-t--5\">
                            <div class=\"form-line\">
                                ";
        // line 426
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 426, $this->source); })()), "client", [], "any", false, false, false, 426), 'widget', ["attr" => ["class" => "form-control chr"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label pri bolo\">Nom du chantier<span class=\"col-red\">*</span>
                        </label>
                        <div class=\"form-group m-t--5\">
                            <div class=\"form-line\">
                                ";
        // line 437
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 437, $this->source); })()), "nomchantier", [], "any", false, false, false, 437), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label pri bolo\">Référence Contrat</label>
                        <div class=\"form-group m-t--5\">
                            <div class=\"form-line\">
                                ";
        // line 447
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 447, $this->source); })()), "contrat", [], "any", false, false, false, 447), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label pri bolo\">Situation Géographique</label>
                        <div class=\"form-group m-t--5\">
                            <div class=\"form-line\">
                                ";
        // line 457
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 457, $this->source); })()), "localisation", [], "any", false, false, false, 457), 'widget', ["attr" => ["class" => "form-control chr"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label pri bolo\">Sous-chantier du chantier</label>
                        <div class=\"form-group m-t--5\">
                            <div class=\"form-line\">
                                ";
        // line 467
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 467, $this->source); })()), "sous", [], "any", false, false, false, 467), 'widget', ["required" => "", "attr" => ["class" => "form-control chr"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label pri bolo\">Description</label>
                        <div class=\"form-group m-t--5\">
                            <div class=\"form-line\">
                                ";
        // line 477
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 477, $this->source); })()), "description", [], "any", false, false, false, 477), 'widget', ["required" => "", "id" => "description", "attr" => ["class" => "form-control chr"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <div class=\"form-group m-t--5\">
                            <label class=\"form-label pri bolo\">DÉBUTE LE</label>
                            <div class=\"input-group date\" id=\"id_0\">
                                <input type=\"text\" placeholder=\"Date...\" id=\"ddebut\" name=\"ddebut\"
                                       style=\"border-bottom: 1px solid #000\" class=\"form-control chr\"/>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <div class=\"form-group m-t--5\">
                            <label class=\"form-label pri bolo\">TERMINE LE</label>
                            <div class=\"input-group date\" id=\"id_1\">
                                <input type=\"text\" placeholder=\"Date...\" id=\"dfin\" name=\"dfin\"
                                       style=\"border-bottom: 1px solid #000\" class=\"form-control chr\"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\" id=\"divChantier\">
                    <input type=\"submit\" id=\"addChantier\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect col-white bg-pri\">
                </div>
                <div class=\"text-center\">
                    <img src=\"";
        // line 507
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadChantier\"></div>
                ";
        // line 509
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 509, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"app_add_devis\">
    <div class=\"modal-dialog\" style=\"max-width: 550px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_devis\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">CRÉER UN
                    DEVIS</p>
            </div>
            <div class=\"modal-body\" style=\"height:80vh; width:100%; overflow-y: scroll\">
                ";
        // line 525
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 525, $this->source); })()), 'form_start', ["attr" => ["id" => "addDevisForm"]]);
        yield "
                <input type=\"hidden\" name=\"token\" value=\"";
        // line 526
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addDevisToken"), "html", null, true);
        yield "\"/>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 pri bolo\">Chantier</label>
                        <div class=\"form-group\">
                            <div class=\"form-line col-pink\">
                                ";
        // line 532
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 532, $this->source); })()), "chantier", [], "any", false, false, false, 532), 'widget', ["required" => "required", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 pri bolo\">Affaire suivie par:</label>
                        <div class=\"form-group\">
                            <div class=\"form-line col-pink\">
                                ";
        // line 542
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 542, $this->source); })()), "suivie", [], "any", false, false, false, 542), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 pri bolo\">Référence ou Objet du Devis</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 552
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 552, $this->source); })()), "devreference", [], "any", false, false, false, 552), 'widget', ["id" => "editor5", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">Tva(%)</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 562
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 562, $this->source); })()), "tva", [], "any", false, false, false, 562), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">Date</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 570
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 570, $this->source); })()), "date", [], "any", false, false, false, 570), 'widget', ["attr" => ["class" => "form-control datepicker"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">Option Tva</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 580
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 580, $this->source); })()), "ptva", [], "any", false, false, false, 580), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">Avec Base Tva?</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 588
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 588, $this->source); })()), "abasetva", [], "any", false, false, false, 588), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                <label class=\"form-label\"></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">Avec Remise?</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 599
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 599, $this->source); })()), "aarem", [], "any", false, false, false, 599), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">Avec Colonne Section</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 607
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 607, $this->source); })()), "zone", [], "any", false, false, false, 607), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">Avec Colonne Section?</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 617
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 617, $this->source); })()), "aaref", [], "any", false, false, false, 617), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">Validité du Devis</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 625
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 625, $this->source); })()), "validit", [], "any", false, false, false, 625), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">Modèle d'information</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 635
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 635, $this->source); })()), "modele", [], "any", false, false, false, 635), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">Modèle de Résultats</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 643
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 643, $this->source); })()), "model", [], "any", false, false, false, 643), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 pri bolo\">Devise</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 653
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 653, $this->source); })()), "monnaie", [], "any", false, false, false, 653), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 pri bolo\">Informations sur le Devis</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 663
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 663, $this->source); })()), "conditions", [], "any", false, false, false, 663), 'widget', ["id" => "editor6", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    <input type=\"submit\" id=\"addeDevis\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect col-white bg-blue\">
                    <img src=\"";
        // line 671
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadDevis\"></div>
                ";
        // line 673
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 673, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"app_add_decompte\">
    <div class=\"modal-dialog\" style=\"max-width: 550px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_decompte\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">CRÉER UN
                    DÉCOMPTE</p>
            </div>
            <div class=\"modal-body\" style=\"height:45vh; width:100%; overflow-y: scroll\">
                ";
        // line 689
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formDecompte"]) || array_key_exists("formDecompte", $context) ? $context["formDecompte"] : (function () { throw new RuntimeError('Variable "formDecompte" does not exist.', 689, $this->source); })()), 'form_start', ["attr" => ["id" => "addDecompteForm"]]);
        yield "
                <input type=\"hidden\" name=\"token\" value=\"";
        // line 690
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("dectoken"), "html", null, true);
        yield "\"/>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">DEVIS VALIDÉS</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                <select id=\"devdec\" name=\"devdec\" class=\"form-control\">
                                    <option disabled=\"disabled\" selected=\"selected\">Choisir un devis</option>
                                    ";
        // line 698
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 698, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 699
            yield "                                        ";
            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 699)) && (null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 699)))) {
                // line 700
                yield "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 700));
                foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                    // line 701
                    yield "                                                ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 701))) {
                        // line 702
                        yield "                                                    ";
                        $context["oop"] = 0;
                        // line 703
                        yield "                                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "devis", [], "any", false, false, false, 703));
                        foreach ($context['_seq'] as $context["_key"] => $context["dev"]) {
                            // line 704
                            yield "                                                        ";
                            $context["op"] = 0;
                            // line 705
                            yield "                                                        ";
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "decomptes", [], "any", false, false, false, 705));
                            foreach ($context['_seq'] as $context["_key"] => $context["dec"]) {
                                // line 706
                                yield "                                                            ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["dec"], "avancement", [], "any", false, false, false, 706) == 100)) {
                                    // line 707
                                    yield "                                                                ";
                                    $context["op"] = ((isset($context["op"]) || array_key_exists("op", $context) ? $context["op"] : (function () { throw new RuntimeError('Variable "op" does not exist.', 707, $this->source); })()) + 1);
                                    // line 708
                                    yield "                                                            ";
                                }
                                // line 709
                                yield "                                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['dec'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 710
                            yield "                                                        ";
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "etat", [], "any", false, false, false, 710) == "valide") && ((isset($context["op"]) || array_key_exists("op", $context) ? $context["op"] : (function () { throw new RuntimeError('Variable "op" does not exist.', 710, $this->source); })()) == 0))) {
                                // line 711
                                yield "                                                            ";
                                $context["oop"] = ((isset($context["oop"]) || array_key_exists("oop", $context) ? $context["oop"] : (function () { throw new RuntimeError('Variable "oop" does not exist.', 711, $this->source); })()) + 1);
                                // line 712
                                yield "                                                        ";
                            }
                            // line 713
                            yield "                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['dev'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 714
                        yield "
                                                    ";
                        // line 715
                        if (((isset($context["oop"]) || array_key_exists("oop", $context) ? $context["oop"] : (function () { throw new RuntimeError('Variable "oop" does not exist.', 715, $this->source); })()) > 0)) {
                            // line 716
                            yield "                                                        <optgroup
                                                                label=\"";
                            // line 717
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 717)), "html", null, true);
                            yield " | ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 717)), "html", null, true);
                            yield "\">
                                                            ";
                            // line 718
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "devis", [], "any", false, false, false, 718));
                            foreach ($context['_seq'] as $context["_key"] => $context["dev"]) {
                                // line 719
                                yield "                                                                ";
                                $context["op"] = 0;
                                // line 720
                                yield "                                                                ";
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "decomptes", [], "any", false, false, false, 720));
                                foreach ($context['_seq'] as $context["_key"] => $context["dec"]) {
                                    // line 721
                                    yield "                                                                    ";
                                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["dec"], "avancement", [], "any", false, false, false, 721) == 100)) {
                                        // line 722
                                        yield "                                                                        ";
                                        $context["op"] = ((isset($context["op"]) || array_key_exists("op", $context) ? $context["op"] : (function () { throw new RuntimeError('Variable "op" does not exist.', 722, $this->source); })()) + 1);
                                        // line 723
                                        yield "                                                                    ";
                                    }
                                    // line 724
                                    yield "                                                                ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_key'], $context['dec'], $context['_parent']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 725
                                yield "                                                                ";
                                if (((CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "etat", [], "any", false, false, false, 725) == "valide") && ((isset($context["op"]) || array_key_exists("op", $context) ? $context["op"] : (function () { throw new RuntimeError('Variable "op" does not exist.', 725, $this->source); })()) == 0))) {
                                    // line 726
                                    yield "                                                                    <option value=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "id", [], "any", false, false, false, 726), "html", null, true);
                                    yield "\"
                                                                            class=\"";
                                    // line 727
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "id", [], "any", false, false, false, 727), "html", null, true);
                                    yield "\">";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "iddevis", [], "any", false, false, false, 727), "html", null, true);
                                    yield " |
                                                                        TTC: ";
                                    // line 728
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "totalttc", [], "any", false, false, false, 728), 2, ".", " "), "html", null, true);
                                    yield "</option>
                                                                ";
                                }
                                // line 730
                                yield "                                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['dev'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 731
                            yield "                                                        </optgroup>
                                                    ";
                        }
                        // line 733
                        yield "                                                ";
                    }
                    // line 734
                    yield "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 735
                yield "                                        ";
            }
            // line 736
            yield "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 737
        yield "                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">RETENUE TRC(%)</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 747
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDecompte"]) || array_key_exists("formDecompte", $context) ? $context["formDecompte"] : (function () { throw new RuntimeError('Variable "formDecompte" does not exist.', 747, $this->source); })()), "trc", [], "any", false, false, false, 747), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">ACOMPTE(%)</label>
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
        // line 766
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDecompte"]) || array_key_exists("formDecompte", $context) ? $context["formDecompte"] : (function () { throw new RuntimeError('Variable "formDecompte" does not exist.', 766, $this->source); })()), "garantie", [], "any", false, false, false, 766), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 775
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDecompte"]) || array_key_exists("formDecompte", $context) ? $context["formDecompte"] : (function () { throw new RuntimeError('Variable "formDecompte" does not exist.', 775, $this->source); })()), "finition", [], "any", false, false, false, 775), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 786
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDecompte"]) || array_key_exists("formDecompte", $context) ? $context["formDecompte"] : (function () { throw new RuntimeError('Variable "formDecompte" does not exist.', 786, $this->source); })()), "prorata", [], "any", false, false, false, 786), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 795
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDecompte"]) || array_key_exists("formDecompte", $context) ? $context["formDecompte"] : (function () { throw new RuntimeError('Variable "formDecompte" does not exist.', 795, $this->source); })()), "date", [], "any", false, false, false, 795), 'widget', ["attr" => ["class" => "form-control datepicker"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    <input type=\"submit\" id=\"addeDecompte\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect col-white bg-blue\">

                    <img src=\"";
        // line 804
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadDecompte\"></div>
                ";
        // line 806
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formDecompte"]) || array_key_exists("formDecompte", $context) ? $context["formDecompte"] : (function () { throw new RuntimeError('Variable "formDecompte" does not exist.', 806, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"app_add_facture\">
    <div class=\"modal-dialog\" style=\"max-width: 550px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_facture\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">CRÉER UNE
                    FACTURE</p>
            </div>
            <div class=\"modal-body\" style=\"height:80vh; width:100%; overflow-y: scroll\">
                ";
        // line 822
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 822, $this->source); })()), 'form_start', ["attr" => ["id" => "addFactureForm"]]);
        yield "
                ";
        // line 823
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 823, $this->source); })()), "_token", [], "any", false, false, false, 823), 'row');
        yield "
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">DATE</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 829
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 829, $this->source); })()), "date", [], "any", false, false, false, 829), 'widget', ["attr" => ["class" => "form-control datepicker"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">TYPE D'OPÉRATION<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 838
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 838, $this->source); })()), "type", [], "any", false, false, false, 838), 'widget', ["id" => "facselect", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">DEVIS VALIDÉS</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 848
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 848, $this->source); })()), "devis", [], "any", false, false, false, 848), 'widget', ["required" => "", "attr" => ["class" => "form-control devo"]]);
        yield "
                            </div>
                            <p class=\"col-pink h6 dvo\"></p>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">DÉCOMPTES VALIDÉS</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 859
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 859, $this->source); })()), "decompte", [], "any", false, false, false, 859), 'widget', ["required" => "", "attr" => ["class" => "form-control deco"]]);
        yield "
                            </div>
                            <p class=\"col-pink h6 dco\"></p>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE OU OBJET</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 870
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 870, $this->source); })()), "factreference", [], "any", false, false, false, 870), 'widget', ["id" => "editor3", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">INFORMATIONS SUR LA FACTURE</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 880
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 880, $this->source); })()), "information", [], "any", false, false, false, 880), 'widget', ["id" => "editor4", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    <input type=\"submit\" id=\"addeFacture\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect col-white bg-blue\">
                    <img src=\"";
        // line 888
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadFacture\">
                </div>
                ";
        // line 891
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 891, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"app_add_prestataire\">
    <div class=\"modal-dialog\" style=\"max-width: 550px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_prestataire\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">AJOUTER UN
                    PRESTATAIRE DE SERVICE</p>
            </div>
            <div class=\"modal-body\" style=\"height:50vh; width:100%; overflow-y: scroll\">
                ";
        // line 907
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formpresta"]) || array_key_exists("formpresta", $context) ? $context["formpresta"] : (function () { throw new RuntimeError('Variable "formpresta" does not exist.', 907, $this->source); })()), 'form_start', ["attr" => ["id" => "addPrestataireForm"]]);
        yield "
                ";
        // line 908
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formpresta"]) || array_key_exists("formpresta", $context) ? $context["formpresta"] : (function () { throw new RuntimeError('Variable "formpresta" does not exist.', 908, $this->source); })()), "_token", [], "any", false, false, false, 908), 'row');
        yield "
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">PRESTATAIRE
                            <span class=\"col-pink\">*</span></label>

                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 916
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formpresta"]) || array_key_exists("formpresta", $context) ? $context["formpresta"] : (function () { throw new RuntimeError('Variable "formpresta" does not exist.', 916, $this->source); })()), "fournisseur", [], "any", false, false, false, 916), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 926
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formpresta"]) || array_key_exists("formpresta", $context) ? $context["formpresta"] : (function () { throw new RuntimeError('Variable "formpresta" does not exist.', 926, $this->source); })()), "fonction", [], "any", false, false, false, 926), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">CONTACTS</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 934
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formpresta"]) || array_key_exists("formpresta", $context) ? $context["formpresta"] : (function () { throw new RuntimeError('Variable "formpresta" does not exist.', 934, $this->source); })()), "mobile", [], "any", false, false, false, 934), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 944
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formpresta"]) || array_key_exists("formpresta", $context) ? $context["formpresta"] : (function () { throw new RuntimeError('Variable "formpresta" does not exist.', 944, $this->source); })()), "mail", [], "any", false, false, false, 944), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">ADRESSE</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 952
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formpresta"]) || array_key_exists("formpresta", $context) ? $context["formpresta"] : (function () { throw new RuntimeError('Variable "formpresta" does not exist.', 952, $this->source); })()), "adresse", [], "any", false, false, false, 952), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    <input type=\"submit\" id=\"addPresta\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect text-white bg-pri\">

                    <img src=\"";
        // line 961
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadPresta\">
                </div>
                ";
        // line 964
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formpresta"]) || array_key_exists("formpresta", $context) ? $context["formpresta"] : (function () { throw new RuntimeError('Variable "formpresta" does not exist.', 964, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"app_add_fournisseur\">
    <div class=\"modal-dialog\" style=\"max-width: 550px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_fournisseur\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">AJOUTER UN
                    FOURNISSEUR D'ARTICLE</p>
            </div>
            <div class=\"modal-body\" style=\"height:50vh; width:100%; overflow-y: scroll\">
                ";
        // line 980
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formfourn"]) || array_key_exists("formfourn", $context) ? $context["formfourn"] : (function () { throw new RuntimeError('Variable "formfourn" does not exist.', 980, $this->source); })()), 'form_start', ["attr" => ["id" => "addFournisseurForm"]]);
        yield "
                ";
        // line 981
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formfourn"]) || array_key_exists("formfourn", $context) ? $context["formfourn"] : (function () { throw new RuntimeError('Variable "formfourn" does not exist.', 981, $this->source); })()), "_token", [], "any", false, false, false, 981), 'row');
        yield "
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">FOURNISSEUR
                            <span class=\"col-pink\">*</span></label>

                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 989
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formfourn"]) || array_key_exists("formfourn", $context) ? $context["formfourn"] : (function () { throw new RuntimeError('Variable "formfourn" does not exist.', 989, $this->source); })()), "fournisseur", [], "any", false, false, false, 989), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 999
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formfourn"]) || array_key_exists("formfourn", $context) ? $context["formfourn"] : (function () { throw new RuntimeError('Variable "formfourn" does not exist.', 999, $this->source); })()), "mobile", [], "any", false, false, false, 999), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">E-MAIL</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1007
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formfourn"]) || array_key_exists("formfourn", $context) ? $context["formfourn"] : (function () { throw new RuntimeError('Variable "formfourn" does not exist.', 1007, $this->source); })()), "mail", [], "any", false, false, false, 1007), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 1017
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formfourn"]) || array_key_exists("formfourn", $context) ? $context["formfourn"] : (function () { throw new RuntimeError('Variable "formfourn" does not exist.', 1017, $this->source); })()), "adresse", [], "any", false, false, false, 1017), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    <input type=\"submit\" id=\"addFourn\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect text-white bg-pri\">
                    <img src=\"";
        // line 1025
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadFourn\">
                </div>
                ";
        // line 1028
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formfourn"]) || array_key_exists("formfourn", $context) ? $context["formfourn"] : (function () { throw new RuntimeError('Variable "formfourn" does not exist.', 1028, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"app_add_contact\">
    <div class=\"modal-dialog\" style=\"max-width: 550px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_contact\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">AJOUTER UN
                    CONTACT</p>
            </div>
            <div class=\"modal-body\" style=\"height:70vh; width:100%; overflow-y: scroll\">
                ";
        // line 1044
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 1044, $this->source); })()), 'form_start', ["attr" => ["id" => "addContactForm"]]);
        yield "
                <input type=\"hidden\" name=\"token\" value=\"";
        // line 1045
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addContactToken"), "html", null, true);
        yield "\"/>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label pri bolo\">CLIENT<span class=\"col-red\">*</span>
                        </label>
                        <div class=\"form-group m-t--5\">
                            <div class=\"form-line\">
                                ";
        // line 1052
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 1052, $this->source); })()), "client", [], "any", false, false, false, 1052), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">NOM & PRÉNOMS<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1063
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 1063, $this->source); })()), "contact", [], "any", false, false, false, 1063), 'widget', ["attr" => ["class" => "form-control chors"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">FONCTION</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1073
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 1073, $this->source); })()), "fonction", [], "any", false, false, false, 1073), 'widget', ["attr" => ["class" => "form-control cohr"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">E-MAIL</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1083
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 1083, $this->source); })()), "mail", [], "any", false, false, false, 1083), 'widget', ["attr" => ["class" => "form-control cohr"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">TÉLÉPHONE MOBILE</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1093
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 1093, $this->source); })()), "phone", [], "any", false, false, false, 1093), 'widget', ["attr" => ["class" => "form-control cohr"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">TÉLÉPHONE BUREAU</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 1103, $this->source); })()), "bureau", [], "any", false, false, false, 1103), 'widget', ["attr" => ["class" => "form-control cohr"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">


                    <div class=\"text-center\" id=\"divContact\">
                        <input type=\"submit\" id=\"addeContact\" value=\"ENREGISTRER\"
                               class=\"btn waves-effect col-white bg-blue\">
                    </div>
                    <img src=\"";
        // line 1115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadContact\">

                </div>
                ";
        // line 1119
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 1119, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"app_add_personnel\">
    <div class=\"modal-dialog\" style=\"max-width: 550px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_personnel\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">AJOUTER UN
                    PERSONNEL</p>
            </div>
            <div class=\"modal-body\" style=\"height:60vh; width:100%; overflow-y: scroll\">
                ";
        // line 1135
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 1135, $this->source); })()), 'form_start', ["attr" => ["id" => "addPersonnelForm"]]);
        yield "
                ";
        // line 1136
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 1136, $this->source); })()), "_token", [], "any", false, false, false, 1136), 'row');
        yield "
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 pri bolo\">NOM & PRÉNOMS<span class=\"col-red\">*</span>
                        </label>
                        <div class=\"form-group\">
                            <div class=\"form-line col-pink\">
                                ";
        // line 1143
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 1143, $this->source); })()), "noms", [], "any", false, false, false, 1143), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 pri bolo\">SERVICE</label>
                        <div class=\"form-group\">
                            <div class=\"form-line col-pink\">
                                ";
        // line 1153
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 1153, $this->source); })()), "service", [], "any", false, false, false, 1153), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 pri bolo\">FONCTION</label>
                        <div class=\"form-group\">
                            <div class=\"form-line col-pink\">
                                ";
        // line 1163
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 1163, $this->source); })()), "fonction", [], "any", false, false, false, 1163), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">TYPE DE CONTRAT</label>
                        <div class=\"form-group\">
                            <div class=\"form-line col-pink\">
                                ";
        // line 1173
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 1173, $this->source); })()), "contrat", [], "any", false, false, false, 1173), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">EMAIL</label>
                        <div class=\"form-group\">
                            <div class=\"form-line col-pink\">
                                ";
        // line 1181
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 1181, $this->source); })()), "mail", [], "any", false, false, false, 1181), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">CONTACTS</label>
                        <div class=\"form-group\">
                            <div class=\"form-line col-pink\">
                                ";
        // line 1191
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 1191, $this->source); })()), "contact", [], "any", false, false, false, 1191), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">SALAIRE</label>
                        <div class=\"form-group\">
                            <div class=\"form-line col-pink\">
                                ";
        // line 1199
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 1199, $this->source); })()), "salaire", [], "any", false, false, false, 1199), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    <input type=\"submit\" id=\"addPers\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect col-white bg-blue\">
                    <img src=\"";
        // line 1207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadPers\"></div>
                <br>
                ";
        // line 1210
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 1210, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"app_add_reglement\">
    <div class=\"modal-dialog\" style=\"max-width: 550px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_reglement\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">ENREGISTRER UN
                    RÈGLEMENT CLIENT</p>
            </div>
            <div class=\"modal-body\" style=\"height:45vh; width:100%; overflow-y: scroll\">
                ";
        // line 1226
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formeRegle"]) || array_key_exists("formeRegle", $context) ? $context["formeRegle"] : (function () { throw new RuntimeError('Variable "formeRegle" does not exist.', 1226, $this->source); })()), 'form_start', ["attr" => ["id" => "addReglementForm"]]);
        yield "
                <input type=\"hidden\" name=\"token\" value=\"";
        // line 1227
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
        // line 1235
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 1235, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 1236
            yield "                                        ";
            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 1236)) && (null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 1236)))) {
                // line 1237
                yield "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 1237));
                foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                    // line 1238
                    yield "                                                ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 1238))) {
                        // line 1239
                        yield "                                                    ";
                        $context["tt"] = 0;
                        // line 1240
                        yield "                                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "factures", [], "any", false, false, false, 1240));
                        foreach ($context['_seq'] as $context["_key"] => $context["fac"]) {
                            // line 1241
                            yield "                                                        ";
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "etat", [], "any", false, false, false, 1241) == "save") && (null === CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "corbeille", [], "any", false, false, false, 1241)))) {
                                // line 1242
                                yield "                                                            ";
                                $context["tt"] = ((isset($context["tt"]) || array_key_exists("tt", $context) ? $context["tt"] : (function () { throw new RuntimeError('Variable "tt" does not exist.', 1242, $this->source); })()) + 1);
                                // line 1243
                                yield "                                                        ";
                            }
                            // line 1244
                            yield "                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['fac'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1245
                        yield "                                                    ";
                        if (((isset($context["tt"]) || array_key_exists("tt", $context) ? $context["tt"] : (function () { throw new RuntimeError('Variable "tt" does not exist.', 1245, $this->source); })()) > 0)) {
                            // line 1246
                            yield "                                                        <optgroup
                                                                label=\"";
                            // line 1247
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 1247)), "html", null, true);
                            yield " | ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 1247)), "html", null, true);
                            yield "\">
                                                            ";
                            // line 1248
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "factures", [], "any", false, false, false, 1248));
                            foreach ($context['_seq'] as $context["_key"] => $context["fac"]) {
                                // line 1249
                                yield "                                                                ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "etat", [], "any", false, false, false, 1249) == "save")) {
                                    // line 1250
                                    yield "                                                                    <option value=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "id", [], "any", false, false, false, 1250), "html", null, true);
                                    yield "\"
                                                                            class=\"";
                                    // line 1251
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "id", [], "any", false, false, false, 1251), "html", null, true);
                                    yield "\">FACTURE
                                                                        Nº";
                                    // line 1252
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "numfacture", [], "any", false, false, false, 1252), "html", null, true);
                                    yield "</option>
                                                                ";
                                }
                                // line 1254
                                yield "                                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['fac'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 1255
                            yield "                                                        </optgroup>
                                                    ";
                        }
                        // line 1257
                        yield "                                                ";
                    }
                    // line 1258
                    yield "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1259
                yield "                                        ";
            }
            // line 1260
            yield "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1261
        yield "                                </select>
                            </div>
                            <p class=\"h6 dvfac\"></p>
                            <p class=\"h6 dvface\"></p>
                            <p class=\"h6 dvfaces\"></p>
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
        // line 1275
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeRegle"]) || array_key_exists("formeRegle", $context) ? $context["formeRegle"] : (function () { throw new RuntimeError('Variable "formeRegle" does not exist.', 1275, $this->source); })()), "montant", [], "any", false, false, false, 1275), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 1286
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeRegle"]) || array_key_exists("formeRegle", $context) ? $context["formeRegle"] : (function () { throw new RuntimeError('Variable "formeRegle" does not exist.', 1286, $this->source); })()), "moyen", [], "any", false, false, false, 1286), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    <input type=\"submit\" id=\"addReglementChantiers\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect col-white bg-blue\">
                    <img src=\"";
        // line 1294
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadReglement\">
                </div>
                <br><br><br>
                ";
        // line 1298
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formeRegle"]) || array_key_exists("formeRegle", $context) ? $context["formeRegle"] : (function () { throw new RuntimeError('Variable "formeRegle" does not exist.', 1298, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"app_add_chargechantier\">
    <div class=\"modal-dialog\" style=\"max-width: 550px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_chargechantier\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">CHARGES
                    CHANTIERS</p>
            </div>
            <div class=\"modal-body\" style=\"height:80vh; width:100%; overflow-y: scroll\">
                ";
        // line 1314
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1314, $this->source); })()), 'form_start', ["attr" => ["id" => "addCaisseForm"]]);
        yield "
                <input type=\"hidden\" name=\"token\" value=\"";
        // line 1315
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addCaisseToken"), "html", null, true);
        yield "\"/>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">N° DE DEVIS <span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1322
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1322, $this->source); })()), "devis", [], "any", false, false, false, 1322), 'widget', ["required" => "", "id" => "veligne", "attr" => ["class" => "form-control "]]);
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
        // line 1331
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1331, $this->source); })()), "date", [], "any", false, false, false, 1331), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">LIGNES DU DEVIS POUR CHARGE
                            PREVISIONNELLE</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                <select id=\"prevcaiss\" name=\"prevcaiss\" required class=\"form-control form-select\">
                                    <option value=\"\">Faites votre choix</option>
                                </select>
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
        // line 1354
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1354, $this->source); })()), "paie", [], "any", false, false, false, 1354), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">DÉSIGNATION<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1366
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1366, $this->source); })()), "caissereference", [], "any", false, false, false, 1366), 'widget', ["id" => "editor", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-7\">
                        <label class=\"form-label m-b--30 col-blue bolo\">MONTANT<span class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1376
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1376, $this->source); })()), "montant", [], "any", false, false, false, 1376), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-5\">
                        <label class=\"form-label m-b--30 col-blue bolo\">MOYEN DE PAIEMENT</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1384
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1384, $this->source); })()), "moyen", [], "any", false, false, false, 1384), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1394, $this->source); })()), "monnaie", [], "any", false, false, false, 1394), 'widget', ["attr" => ["class" => "form-control"]]);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1402, $this->source); })()), "operation", [], "any", false, false, false, 1402), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    <input type=\"submit\" id=\"addeeCaisse\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect text-white bg-blue\">
                    <img src=\"";
        // line 1410
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadeeCaisse\">
                </div>
                ";
        // line 1413
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1413, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"app_add_bonprestataire\">
    <div class=\"modal-dialog\" style=\"max-width: 550px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_bonprestataire\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">BON DE COMMANDE
                    PRESTATAIRE</p>
            </div>
            <div class=\"modal-body\" style=\"height:80vh; width:100%; overflow-y: scroll\">
                ";
        // line 1429
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formeBon"]) || array_key_exists("formeBon", $context) ? $context["formeBon"] : (function () { throw new RuntimeError('Variable "formeBon" does not exist.', 1429, $this->source); })()), 'form_start', ["attr" => ["id" => "adduBonForm"]]);
        yield "
                <input type=\"hidden\" name=\"token\" value=\"";
        // line 1430
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("adduBonToken"), "html", null, true);
        yield "\"/>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-5\">
                        <label class=\"form-label m-b--30 col-blue bolo\">N° DE DEVIS <span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1437
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeBon"]) || array_key_exists("formeBon", $context) ? $context["formeBon"] : (function () { throw new RuntimeError('Variable "formeBon" does not exist.', 1437, $this->source); })()), "devis", [], "any", false, false, false, 1437), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-7\">
                        <label class=\"form-label m-b--30 col-blue bolo\">PRESTATAIRES<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1446
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeBon"]) || array_key_exists("formeBon", $context) ? $context["formeBon"] : (function () { throw new RuntimeError('Variable "formeBon" does not exist.', 1446, $this->source); })()), "fournisseur", [], "any", false, false, false, 1446), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE OU OBJET<span class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1456
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeBon"]) || array_key_exists("formeBon", $context) ? $context["formeBon"] : (function () { throw new RuntimeError('Variable "formeBon" does not exist.', 1456, $this->source); })()), "bonreference", [], "any", false, false, false, 1456), 'widget', ["id" => "editor10", "attr" => ["class" => "form-control"]]);
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
        // line 1466
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeBon"]) || array_key_exists("formeBon", $context) ? $context["formeBon"] : (function () { throw new RuntimeError('Variable "formeBon" does not exist.', 1466, $this->source); })()), "monnaie", [], "any", false, false, false, 1466), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">TVA(%)</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1474
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeBon"]) || array_key_exists("formeBon", $context) ? $context["formeBon"] : (function () { throw new RuntimeError('Variable "formeBon" does not exist.', 1474, $this->source); })()), "tva", [], "any", false, false, false, 1474), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 1484
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeBon"]) || array_key_exists("formeBon", $context) ? $context["formeBon"] : (function () { throw new RuntimeError('Variable "formeBon" does not exist.', 1484, $this->source); })()), "ptva", [], "any", false, false, false, 1484), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">AVEC REMISE ?</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1492
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeBon"]) || array_key_exists("formeBon", $context) ? $context["formeBon"] : (function () { throw new RuntimeError('Variable "formeBon" does not exist.', 1492, $this->source); })()), "aarem", [], "any", false, false, false, 1492), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 1502
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeBon"]) || array_key_exists("formeBon", $context) ? $context["formeBon"] : (function () { throw new RuntimeError('Variable "formeBon" does not exist.', 1502, $this->source); })()), "aaref", [], "any", false, false, false, 1502), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">DATE</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1510
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeBon"]) || array_key_exists("formeBon", $context) ? $context["formeBon"] : (function () { throw new RuntimeError('Variable "formeBon" does not exist.', 1510, $this->source); })()), "date", [], "any", false, false, false, 1510), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 1520
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeBon"]) || array_key_exists("formeBon", $context) ? $context["formeBon"] : (function () { throw new RuntimeError('Variable "formeBon" does not exist.', 1520, $this->source); })()), "conditions", [], "any", false, false, false, 1520), 'widget', ["required" => "", "id" => "editor11", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    <input type=\"submit\" id=\"adduBon\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect text-white bg-blue\">

                    <img src=\"";
        // line 1529
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loaduBon\">
                </div>
                <br><br><br>
                ";
        // line 1533
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formeBon"]) || array_key_exists("formeBon", $context) ? $context["formeBon"] : (function () { throw new RuntimeError('Variable "formeBon" does not exist.', 1533, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"app_add_bonfournisseur\">
    <div class=\"modal-dialog\" style=\"max-width: 550px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_bonfournisseur\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">BON DE COMMANDE
                    FOURNISSEUR</p>
            </div>
            <div class=\"modal-body\" style=\"height:80vh; width:100%; overflow-y: scroll\">
                ";
        // line 1549
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1549, $this->source); })()), 'form_start', ["attr" => ["id" => "addBonForm"]]);
        yield "
                ";
        // line 1550
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1550, $this->source); })()), "_token", [], "any", false, false, false, 1550), 'row');
        yield "
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">N° DE DEVIS <span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1557
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1557, $this->source); })()), "devis", [], "any", false, false, false, 1557), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 1566
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1566, $this->source); })()), "type", [], "any", false, false, false, 1566), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">FOURNISSEUR<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1577
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1577, $this->source); })()), "fournisseur", [], "any", false, false, false, 1577), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">BON DE SUIVI <span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1586
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1586, $this->source); })()), "preparation", [], "any", false, false, false, 1586), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE OU OBJET<span class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1596
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1596, $this->source); })()), "bonreference", [], "any", false, false, false, 1596), 'widget', ["id" => "editor2", "attr" => ["class" => "form-control"]]);
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
        // line 1606
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1606, $this->source); })()), "monnaie", [], "any", false, false, false, 1606), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">TVA(%)</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1614
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1614, $this->source); })()), "tva", [], "any", false, false, false, 1614), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 1624
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1624, $this->source); })()), "ptva", [], "any", false, false, false, 1624), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">AVEC REMISE ?</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1632
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1632, $this->source); })()), "aarem", [], "any", false, false, false, 1632), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 1642
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1642, $this->source); })()), "aaref", [], "any", false, false, false, 1642), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">DATE</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1650
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1650, $this->source); })()), "date", [], "any", false, false, false, 1650), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 1660
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1660, $this->source); })()), "conditions", [], "any", false, false, false, 1660), 'widget', ["required" => "", "id" => "editor7", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    <input type=\"submit\" id=\"addiBon\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect text-white bg-blue\">

                    <img src=\"";
        // line 1669
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadBon\">
                </div>
                ";
        // line 1672
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1672, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"app_add_paieprestataire\">
    <div class=\"modal-dialog\" style=\"max-width: 550px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_paieprestataire\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">BON DE CAISSE
                    PRESTATAIRE</p>
            </div>
            <div class=\"modal-body\" style=\"height:80vh; width:100%; overflow-y: scroll\">
                ";
        // line 1688
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formerCaisse"]) || array_key_exists("formerCaisse", $context) ? $context["formerCaisse"] : (function () { throw new RuntimeError('Variable "formerCaisse" does not exist.', 1688, $this->source); })()), 'form_start', ["attr" => ["id" => "addCaissePrestataireForm"]]);
        yield "
                <input type=\"hidden\" name=\"token\" value=\"";
        // line 1689
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addCaissePrestaToken"), "html", null, true);
        yield "\"/>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Prestataire<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1696
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formerCaisse"]) || array_key_exists("formerCaisse", $context) ? $context["formerCaisse"] : (function () { throw new RuntimeError('Variable "formerCaisse" does not exist.', 1696, $this->source); })()), "fournisseur", [], "any", false, false, false, 1696), 'widget', ["id" => "sefoner", "attr" => ["class" => "form-control ploce"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Bons validés
                            <span class=\"col-red\">*</span>
                        </label>
                        <div class=\"form-group\">
                            <div class=\"form-line col-pink\">
                                <select class=\"form-control selboner\" id=\"selboxa\" name=\"bon\"></select>
                            </div>
                            <p class=\"h6 diboner\" style=\"margin-top:5px !important\"></p>
                        </div>

                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Lignes du Devis pour Charges
                            prévisionnelles</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                <select id=\"prevpresta\" name=\"prevpresta\" class=\"form-control form-select\">
                                    <option value=\"\">-- Faites votre choix svp !--</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-7\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Point de Paie</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1733
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formerCaisse"]) || array_key_exists("formerCaisse", $context) ? $context["formerCaisse"] : (function () { throw new RuntimeError('Variable "formerCaisse" does not exist.', 1733, $this->source); })()), "paie", [], "any", false, false, false, 1733), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-5\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Date<span class=\"col-red\">*</span>
                        </label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1742
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formerCaisse"]) || array_key_exists("formerCaisse", $context) ? $context["formerCaisse"] : (function () { throw new RuntimeError('Variable "formerCaisse" does not exist.', 1742, $this->source); })()), "date", [], "any", false, false, false, 1742), 'widget', ["required" => "", "attr" => ["class" => "form-control datepicker"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Moyen de Paiement</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1752
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formerCaisse"]) || array_key_exists("formerCaisse", $context) ? $context["formerCaisse"] : (function () { throw new RuntimeError('Variable "formerCaisse" does not exist.', 1752, $this->source); })()), "moyen", [], "any", false, false, false, 1752), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Devise</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1762
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formerCaisse"]) || array_key_exists("formerCaisse", $context) ? $context["formerCaisse"] : (function () { throw new RuntimeError('Variable "formerCaisse" does not exist.', 1762, $this->source); })()), "monnaie", [], "any", false, false, false, 1762), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Type d'opération</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1770
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formerCaisse"]) || array_key_exists("formerCaisse", $context) ? $context["formerCaisse"] : (function () { throw new RuntimeError('Variable "formerCaisse" does not exist.', 1770, $this->source); })()), "operation", [], "any", false, false, false, 1770), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Référence<span class=\"col-red\">*</span>
                        </label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1781
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formerCaisse"]) || array_key_exists("formerCaisse", $context) ? $context["formerCaisse"] : (function () { throw new RuntimeError('Variable "formerCaisse" does not exist.', 1781, $this->source); })()), "caissereference", [], "any", false, false, false, 1781), 'widget', ["id" => "editor15", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">DÉSIGNATION<span class=\"col-red\">*</span>
                        </label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1792
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formerCaisse"]) || array_key_exists("formerCaisse", $context) ? $context["formerCaisse"] : (function () { throw new RuntimeError('Variable "formerCaisse" does not exist.', 1792, $this->source); })()), "desi", [], "any", false, false, false, 1792), 'widget', ["id" => "editor17", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Montant à enregistrer<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1803
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formerCaisse"]) || array_key_exists("formerCaisse", $context) ? $context["formerCaisse"] : (function () { throw new RuntimeError('Variable "formerCaisse" does not exist.', 1803, $this->source); })()), "montant", [], "any", false, false, false, 1803), 'widget', ["attr" => ["class" => "form-control ploce"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    <input type=\"submit\" id=\"adduuCaisse\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect col-white bg-blue\">
                    <img src=\"";
        // line 1811
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loaduuCaisse\">
                </div>
                ";
        // line 1814
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formerCaisse"]) || array_key_exists("formerCaisse", $context) ? $context["formerCaisse"] : (function () { throw new RuntimeError('Variable "formerCaisse" does not exist.', 1814, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"app_add_paiefournisseur\">
    <div class=\"modal-dialog\" style=\"max-width: 550px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_paiefournisseur\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">BON DE CAISSE
                    FOURNISSEUR</p>
            </div>
            <div class=\"modal-body\" style=\"height:80vh; width:100%; overflow-y: scroll\">
                ";
        // line 1830
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formeCaisse"]) || array_key_exists("formeCaisse", $context) ? $context["formeCaisse"] : (function () { throw new RuntimeError('Variable "formeCaisse" does not exist.', 1830, $this->source); })()), 'form_start', ["attr" => ["id" => "addCaisseFournisseurForm"]]);
        yield "
                <input type=\"hidden\" name=\"token\" value=\"";
        // line 1831
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addCaisseFournToken"), "html", null, true);
        yield "\"/>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Fournisseur<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1838
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeCaisse"]) || array_key_exists("formeCaisse", $context) ? $context["formeCaisse"] : (function () { throw new RuntimeError('Variable "formeCaisse" does not exist.', 1838, $this->source); })()), "fournisseur", [], "any", false, false, false, 1838), 'widget', ["id" => "sefone", "attr" => ["class" => "form-control ploc"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Bons validés
                            <span class=\"col-red\">*</span>
                        </label>
                        <div class=\"form-group\">
                            <div class=\"form-line col-pink\">
                                <select class=\"form-control selbon\" id=\"selbox\" name=\"bon\"></select>
                            </div>
                            <p class=\"h6 dibon\" style=\"margin-top:5px !important\"></p>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Lignes du Devis pour Charges
                            prévisionnelles</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                <select id=\"prevfour\" name=\"prevfourni\" class=\"form-control form-select\">
                                    <option value=\"\">-- Faites votre choix svp !--</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-7\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Point de paie</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1874
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeCaisse"]) || array_key_exists("formeCaisse", $context) ? $context["formeCaisse"] : (function () { throw new RuntimeError('Variable "formeCaisse" does not exist.', 1874, $this->source); })()), "paie", [], "any", false, false, false, 1874), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-5\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Date<span class=\"col-red\">*</span>
                        </label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1883
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeCaisse"]) || array_key_exists("formeCaisse", $context) ? $context["formeCaisse"] : (function () { throw new RuntimeError('Variable "formeCaisse" does not exist.', 1883, $this->source); })()), "date", [], "any", false, false, false, 1883), 'widget', ["required" => "", "attr" => ["class" => "form-control datepicker"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Moyen de paiement</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1893
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeCaisse"]) || array_key_exists("formeCaisse", $context) ? $context["formeCaisse"] : (function () { throw new RuntimeError('Variable "formeCaisse" does not exist.', 1893, $this->source); })()), "moyen", [], "any", false, false, false, 1893), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Devise</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1903
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeCaisse"]) || array_key_exists("formeCaisse", $context) ? $context["formeCaisse"] : (function () { throw new RuntimeError('Variable "formeCaisse" does not exist.', 1903, $this->source); })()), "monnaie", [], "any", false, false, false, 1903), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Type d'opération</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1911
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeCaisse"]) || array_key_exists("formeCaisse", $context) ? $context["formeCaisse"] : (function () { throw new RuntimeError('Variable "formeCaisse" does not exist.', 1911, $this->source); })()), "operation", [], "any", false, false, false, 1911), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Référence<span class=\"col-red\">*</span>
                        </label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1922
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeCaisse"]) || array_key_exists("formeCaisse", $context) ? $context["formeCaisse"] : (function () { throw new RuntimeError('Variable "formeCaisse" does not exist.', 1922, $this->source); })()), "caissereference", [], "any", false, false, false, 1922), 'widget', ["id" => "editor16", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">DÉSIGNATION<span class=\"col-red\">*</span>
                        </label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1933
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeCaisse"]) || array_key_exists("formeCaisse", $context) ? $context["formeCaisse"] : (function () { throw new RuntimeError('Variable "formeCaisse" does not exist.', 1933, $this->source); })()), "desi", [], "any", false, false, false, 1933), 'widget', ["id" => "editor18", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Montant à enregistrer<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1944
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeCaisse"]) || array_key_exists("formeCaisse", $context) ? $context["formeCaisse"] : (function () { throw new RuntimeError('Variable "formeCaisse" does not exist.', 1944, $this->source); })()), "montant", [], "any", false, false, false, 1944), 'widget', ["attr" => ["class" => "form-control ploce"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    <input type=\"submit\" id=\"addxCaisse\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect col-white bg-blue\">
                    <img src=\"";
        // line 1952
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadxCaisse\"></div>
                ";
        // line 1954
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formeCaisse"]) || array_key_exists("formeCaisse", $context) ? $context["formeCaisse"] : (function () { throw new RuntimeError('Variable "formeCaisse" does not exist.', 1954, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"app_add_bonsuivi\">
    <div class=\"modal-dialog\" style=\"max-width: 550px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_bonsuivi\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">BON DE SUIVI DE
                    COMMANDE</p>
            </div>
            <div class=\"modal-body\" style=\"height:80vh; width:100%; overflow-y: scroll\">

            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"app_add_paiepersonnel\">
    <div class=\"modal-dialog\" style=\"max-width: 550px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_paiepersonnel\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">BON DE CAISSE
                    POUR LE PERSONNEL</p>
            </div>
            <div class=\"modal-body\" style=\"height:80vh; width:100%; overflow-y: scroll\">
                ";
        // line 1986
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 1986, $this->source); })()), 'form_start', ["attr" => ["id" => "addCaissePersonnelForm"]]);
        yield "
                ";
        // line 1987
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 1987, $this->source); })()), "_token", [], "any", false, false, false, 1987), 'row');
        yield "
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-4\">
                        <label class=\"form-label m-b--30 col-blue bolo\">DATE<span class=\"col-red\">*</span>
                        </label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1994
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 1994, $this->source); })()), "date", [], "any", false, false, false, 1994), 'widget', ["required" => "", "attr" => ["class" => "form-control datepicker"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-8\">
                        <label class=\"form-label m-b--30 col-blue bolo\">POINTS DE PAIE</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 2002
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 2002, $this->source); })()), "paie", [], "any", false, false, false, 2002), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
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
        // line 2012
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 2012, $this->source); })()), "moyen", [], "any", false, false, false, 2012), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
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
        // line 2022
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 2022, $this->source); })()), "personnel", [], "any", false, false, false, 2022), 'widget', ["required" => "required", "attr" => ["class" => "form-control"]]);
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
        // line 2032
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 2032, $this->source); })()), "monnaie", [], "any", false, false, false, 2032), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">TYPE D'OPÉRATION</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 2040
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 2040, $this->source); })()), "operation", [], "any", false, false, false, 2040), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 2050
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 2050, $this->source); })()), "genre", [], "any", false, false, false, 2050), 'widget', ["required" => "required", "attr" => ["class" => "form-control"]]);
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
        // line 2061
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 2061, $this->source); })()), "caissereference", [], "any", false, false, false, 2061), 'widget', ["id" => "editor20", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"text-center\">
                    <input type=\"submit\" id=\"addarCaissePersonnel\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect col-white bg-blue\">
                    <img src=\"";
        // line 2070
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadarCaissePersonnel\"></div>
                ";
        // line 2072
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 2072, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"app_add_chargesinternes\">
    <div class=\"modal-dialog\" style=\"max-width: 550px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_chargesinternes\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">CHARGES
                    INTERNES</p>
            </div>
            <div class=\"modal-body\" style=\"height:30vh; width:100%; overflow-y: scroll\">
                ";
        // line 2088
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formInterne"]) || array_key_exists("formInterne", $context) ? $context["formInterne"] : (function () { throw new RuntimeError('Variable "formInterne" does not exist.', 2088, $this->source); })()), 'form_start', ["attr" => ["id" => "addInterForm"]]);
        yield "
                ";
        // line 2089
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formInterne"]) || array_key_exists("formInterne", $context) ? $context["formInterne"] : (function () { throw new RuntimeError('Variable "formInterne" does not exist.', 2089, $this->source); })()), "_token", [], "any", false, false, false, 2089), 'row');
        yield "
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 pri bolo\">CHARGE INTERNE<span class=\"col-red\">*</span>
                        </label>
                        <div class=\"form-group\">
                            <div class=\"form-line col-pink\">
                                ";
        // line 2096
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formInterne"]) || array_key_exists("formInterne", $context) ? $context["formInterne"] : (function () { throw new RuntimeError('Variable "formInterne" does not exist.', 2096, $this->source); })()), "noms", [], "any", false, false, false, 2096), 'widget', ["required" => "required", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    <input type=\"submit\" id=\"addInter\" value=\"ENREGISTRER\" class=\"btn waves-effect col-white bg-blue\">
                    <img src=\"";
        // line 2103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadInter\"></div>
                ";
        // line 2105
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formInterne"]) || array_key_exists("formInterne", $context) ? $context["formInterne"] : (function () { throw new RuntimeError('Variable "formInterne" does not exist.', 2105, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"app_add_bonschargesinternes\">
    <div class=\"modal-dialog\" style=\"max-width: 550px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_bonschargesinternes\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">BON DE CAISSE
                    CHARGES INTERNES</p>
            </div>
            <div class=\"modal-body\" style=\"height:85vh; width:100%; overflow-y: scroll\">
                ";
        // line 2121
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCaisseCharge"]) || array_key_exists("formCaisseCharge", $context) ? $context["formCaisseCharge"] : (function () { throw new RuntimeError('Variable "formCaisseCharge" does not exist.', 2121, $this->source); })()), 'form_start', ["attr" => ["id" => "addCaisseChargeForm"]]);
        yield "
                ";
        // line 2122
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisseCharge"]) || array_key_exists("formCaisseCharge", $context) ? $context["formCaisseCharge"] : (function () { throw new RuntimeError('Variable "formCaisseCharge" does not exist.', 2122, $this->source); })()), "_token", [], "any", false, false, false, 2122), 'row');
        yield "
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-4\">
                        <label class=\"form-label m-b--30 col-blue bolo\">DATE<span class=\"col-red\">*</span>
                        </label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 2129
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisseCharge"]) || array_key_exists("formCaisseCharge", $context) ? $context["formCaisseCharge"] : (function () { throw new RuntimeError('Variable "formCaisseCharge" does not exist.', 2129, $this->source); })()), "date", [], "any", false, false, false, 2129), 'widget', ["required" => "", "attr" => ["class" => "form-control datepicker"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-8\">
                        <label class=\"form-label m-b--30 col-blue bolo\">POINTS DE PAIE</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 2137
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisseCharge"]) || array_key_exists("formCaisseCharge", $context) ? $context["formCaisseCharge"] : (function () { throw new RuntimeError('Variable "formCaisseCharge" does not exist.', 2137, $this->source); })()), "paie", [], "any", false, false, false, 2137), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
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
        // line 2147
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisseCharge"]) || array_key_exists("formCaisseCharge", $context) ? $context["formCaisseCharge"] : (function () { throw new RuntimeError('Variable "formCaisseCharge" does not exist.', 2147, $this->source); })()), "moyen", [], "any", false, false, false, 2147), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">CHARGES INTERNES</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 2157
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisseCharge"]) || array_key_exists("formCaisseCharge", $context) ? $context["formCaisseCharge"] : (function () { throw new RuntimeError('Variable "formCaisseCharge" does not exist.', 2157, $this->source); })()), "personnel", [], "any", false, false, false, 2157), 'widget', ["required" => "required", "attr" => ["class" => "form-control"]]);
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
        // line 2167
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisseCharge"]) || array_key_exists("formCaisseCharge", $context) ? $context["formCaisseCharge"] : (function () { throw new RuntimeError('Variable "formCaisseCharge" does not exist.', 2167, $this->source); })()), "monnaie", [], "any", false, false, false, 2167), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">TYPE D'OPÉRATION</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 2175
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisseCharge"]) || array_key_exists("formCaisseCharge", $context) ? $context["formCaisseCharge"] : (function () { throw new RuntimeError('Variable "formCaisseCharge" does not exist.', 2175, $this->source); })()), "operation", [], "any", false, false, false, 2175), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 2186
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisseCharge"]) || array_key_exists("formCaisseCharge", $context) ? $context["formCaisseCharge"] : (function () { throw new RuntimeError('Variable "formCaisseCharge" does not exist.', 2186, $this->source); })()), "caissereference", [], "any", false, false, false, 2186), 'widget', ["id" => "editor19", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    <input type=\"submit\" id=\"addiosCaisse\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect col-white bg-blue\">
                    <img src=\"";
        // line 2194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadiosCaisse\"></div>
                ";
        // line 2196
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCaisseCharge"]) || array_key_exists("formCaisseCharge", $context) ? $context["formCaisseCharge"] : (function () { throw new RuntimeError('Variable "formCaisseCharge" does not exist.', 2196, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"searcheur\">
    <div class=\"modal-dialog\" style=\"max-width: 700px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:2px !important\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"btn material-icons col-pink\" id=\"closeframers\"
                   style=\"font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <h6 style=\"margin: 15px 0 0 10px; color: black; font-weight: bold\">RECHERCHER</h6>
            </div>
            <div class=\"modal-body\" style=\"height:75vh;padding:20px !important;  overflow-y: scroll\" id=\"shaacontente\">
                <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher...\" id=\"richis\"
                           style=\"border: 2px solid dodgerblue; padding: 10px\"/>
                </div>
                <div id=\"ressulte\" style=\"width: 100%; color:black; padding-top: 20px;\" class=\"text-left\"></div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"myModale\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:2px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"btn material-icons float-lg-right col-pink\" id=\"closeframer\"
                   style=\"font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important;\">clear</i>
                <i class=\"btn material-icons float-left col-blue\" id=\"goback\"
                   style=\"font-size: 20px !important;color: #2196F3 !important; font-weight: bold !important;\">arrow_back</i>
                <i class=\"btn material-icons float-left col-blue\" id=\"goforward\"
                   style=\"font-size: 20px !important;color: #2196F3 !important; font-weight: bold !important;\">arrow_forward</i>
                <i class=\"btn material-icons float-left col-blue\" id=\"reloadframer\"
                   style=\"font-size: 20px !important;color: #2b982b !important; font-weight: bold !important;\">refresh</i>
            </div>
            <div class=\"modal-body\" style=\"height:95vh;width:100%;padding:0 !important\" id=\"shaacontent\">
                <iframe id=\"framer\" src=\"\"></iframe>
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"modpara\">
    <div class=\"modal-dialog\" style=\"max-width: 700px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:2px !important\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"btn material-icons col-pink\" id=\"closeNumeroter\"
                   style=\"font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <h6 style=\"margin: 15px 0 0 10px; color: black; font-weight: bold\">NUMÉROTATION DES ENTITÉS</h6>
            </div>
            <div class=\"modal-body\" style=\"height:80vh;padding:20px !important; overflow-y: scroll\" id=\"shacompte\">
                ";
        // line 2250
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 2250, $this->source); })()), 'form_start', ["attr" => ["id" => "addFCompteForm"]]);
        yield "
                ";
        // line 2251
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 2251, $this->source); })()), "_token", [], "any", false, false, false, 2251), 'row');
        yield "
                <div class=\"row clearfix m-b-10\" style=\"margin-top:20px\">
                    <div class=\"col-sm-4\">
                        <label class=\"form-label m-b--30 font-weight-bold\" style=\"color: #6666dc\">Nº Client<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 2258
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 2258, $this->source); })()), "coclient", [], "any", false, false, false, 2258), 'widget', ["attr" => ["class" => "form-control text-paimary"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <label class=\"form-label m-b--30 font-weight-bold\" style=\"color: #6666dc\">Devis<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 2267
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 2267, $this->source); })()), "compteDevis", [], "any", false, false, false, 2267), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <label class=\"form-label m-b--30 font-weight-bold\" style=\"color: #6666dc\">Règlement<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 2276
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 2276, $this->source); })()), "compteReglement", [], "any", false, false, false, 2276), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\" style=\"margin-top:20px\">
                    <div class=\"col-sm-4\">
                        <label class=\"form-label m-b--30 font-weight-bold\" style=\"color: #6666dc\">Fournisseur<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 2287
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 2287, $this->source); })()), "compteFournisseur", [], "any", false, false, false, 2287), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <label class=\"form-label m-b--30 font-weight-bold\" style=\"color: #6666dc\">Prestataire<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 2296
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 2296, $this->source); })()), "comptePrestataire", [], "any", false, false, false, 2296), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <label class=\"form-label m-b--30 font-weight-bold\" style=\"color: #6666dc\">Matériel<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 2305
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 2305, $this->source); })()), "compteMateriel", [], "any", false, false, false, 2305), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\" style=\"margin-top:20px\">
                    <div class=\"col-sm-4\">
                        <label class=\"form-label m-b--30 font-weight-bold\" style=\"color: #6666dc\">Bon Fournisseur<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 2316
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 2316, $this->source); })()), "compteBonFournisseur", [], "any", false, false, false, 2316), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <label class=\"form-label m-b--30 font-weight-bold\" style=\"color: #6666dc\">Bon Prestataire<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 2325
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 2325, $this->source); })()), "compteBonPrestataire", [], "any", false, false, false, 2325), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <label class=\"form-label m-b--30 font-weight-bold\" style=\"color: #6666dc\">Bon de Livraison<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 2334
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 2334, $this->source); })()), "compteLivraison", [], "any", false, false, false, 2334), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\" style=\"margin-top:20px\">
                    <div class=\"col-sm-4\">
                        <label class=\"form-label m-b--30 font-weight-bold\" style=\"color: #6666dc\">Bon de Caisse<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 2345
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 2345, $this->source); })()), "compteCaisse", [], "any", false, false, false, 2345), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <label class=\"form-label m-b--30 font-weight-bold\" style=\"color: #6666dc\">Facture<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 2354
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 2354, $this->source); })()), "compteFacture", [], "any", false, false, false, 2354), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <label class=\"form-label m-b--30 font-weight-bold\" style=\"color: #6666dc\">Décompte<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 2363
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 2363, $this->source); })()), "compteDecompte", [], "any", false, false, false, 2363), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\" style=\"margin-top:20px\">
                    <div class=\"col-sm-4\">
                        <label class=\"form-label m-b--30 font-weight-bold\" style=\"color: #6666dc\">Fichier<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 2374
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 2374, $this->source); })()), "compteFichier", [], "any", false, false, false, 2374), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <label class=\"form-label m-b--30 font-weight-bold\" style=\"color: #6666dc\">Planning<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 2383
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 2383, $this->source); })()), "comptePlanning", [], "any", false, false, false, 2383), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <label class=\"form-label m-b--30 font-weight-bold\" style=\"color: #6666dc\">Tache<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 2392
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 2392, $this->source); })()), "compteTache", [], "any", false, false, false, 2392), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\" style=\"margin-top:20px\">
                    <div class=\"col-sm-4\">
                        <label class=\"form-label m-b--30 font-weight-bold\" style=\"color: #6666dc\">Sigle<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 2403
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 2403, $this->source); })()), "sigle", [], "any", false, false, false, 2403), 'widget', ["attr" => ["class" => "form-control text-paimary"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\" style=\"margin-top:30px\">
                    <input type=\"submit\" value=\"MODIFIER\" class=\"btn waves-effect text-white bg-success\">
                </div>
                ";
        // line 2411
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 2411, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>

<input type=\"text\" style=\"visibility: hidden\" id=\"pychantiers\" value=\"";
        // line 2417
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pychantiers"]) || array_key_exists("pychantiers", $context) ? $context["pychantiers"] : (function () { throw new RuntimeError('Variable "pychantiers" does not exist.', 2417, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" style=\"visibility: hidden\" id=\"idbeso\" value=\"";
        // line 2418
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["idbeso"]) || array_key_exists("idbeso", $context) ? $context["idbeso"] : (function () { throw new RuntimeError('Variable "idbeso" does not exist.', 2418, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" style=\"visibility: hidden\" id=\"idexer\" value=\"";
        // line 2419
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["idexer"]) || array_key_exists("idexer", $context) ? $context["idexer"] : (function () { throw new RuntimeError('Variable "idexer" does not exist.', 2419, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" style=\"visibility: hidden\" id=\"iduser\" value=\"";
        // line 2420
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["usere"]) || array_key_exists("usere", $context) ? $context["usere"] : (function () { throw new RuntimeError('Variable "usere" does not exist.', 2420, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" style=\"visibility: hidden\" id=\"tabb\" value=\"";
        // line 2421
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () { throw new RuntimeError('Variable "tableau" does not exist.', 2421, $this->source); })()), "html", null, true);
        yield "\">

";
        // line 2423
        if (((isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () { throw new RuntimeError('Variable "tableau" does not exist.', 2423, $this->source); })()) == "A")) {
            // line 2424
            yield "    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-9 col-md-9\">
                <h3 class=\"tet text-white text-center font-weight-bold\">CARLINBLEU - GESTION DES CHANTIERS</h3>
                <h5 class=\"text-center\" style=\"color:#efd807; \">
                    Bienvenue ";
            // line 2429
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2429, $this->source); })()), "user", [], "any", false, false, false, 2429), "nom", [], "any", false, false, false, 2429)), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2429, $this->source); })()), "user", [], "any", false, false, false, 2429), "prenoms", [], "any", false, false, false, 2429)), "html", null, true);
            yield " </h5>

                <p class=\"text-center hide\" style=\"font-size: 16px\"><a href=\"/android/carlinbleu.apk\" style=\"color: #03A9F4; display: none\" download>Télécharger l'application pour <br>tablette et téléphone android.</a></p>
                <section class=\"features-icons  text-center\" style=\"padding: 0 !important; margin-top: 30px\">

                    <div id=\"notif\" class=\"notification hider\">
                        <div class=\"notification-header\">
                            <h3 class=\"notification-title col-pink bolo700\"><u id=\"atitre\"></u></h3>
                        </div>
                        <div class=\"notification-container\">
                            <div class=\"notification-media\">
                                <i class=\"btn material-icons notification-user-avatar\"
                                   style=\"font-size: 60px !important; color: #E91E63 !important; font-weight: bold !important;\">report</i>
                            </div>
                            <div class=\"notification-content\" id=\"acontent\"></div>
                            <br>
                        </div>
                    </div>

                    <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\" style=\"margin-top: 10px !important\">
                        <a href=\"";
            // line 2449
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tableaudebord", ["tab" => "A"]);
            yield "\" class=\"btn\"
                           style=\"background-color: #fff; color: #000; margin-right: 5px\">
                            TABLEAU DE BORD A
                        </a>
                        <a href=\"";
            // line 2453
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tableaudebord", ["tab" => "B"]);
            yield "\" class=\"btn\"
                           style=\"background-color: #fff; color: #000;\">
                            TABLEAU DE BORD B
                        </a>
                    </div>
                    <br>

                    <div aria-label=\"Basic examples\" style=\"margin-top: 10px !important\">
                        <button type=\"button\" ";
            // line 2461
            if (((isset($context["checkMaster"]) || array_key_exists("checkMaster", $context) ? $context["checkMaster"] : (function () { throw new RuntimeError('Variable "checkMaster" does not exist.', 2461, $this->source); })()) == "oui")) {
                yield " onclick=\"shasharo();\" ";
            }
            // line 2462
            yield "                                class=\"btn\"
                                style=\"background-color: #754cea; color: #FFF; margin-right: 5px; width: 150px\">
                            NUMÉROTATIONS
                        </button>
                        <button onclick=\"shashares();\" class=\"btn\"
                                style=\"background-color: #e86c20; color: #FFF; width: 150px\">
                            RECHERCHER
                        </button>
                        <button onclick=\"shashar('travauxjour');\" class=\"btn\"
                                style=\"background-color: #03A9F4FF; color: #FFF;  margin-right: 5px; width: 150px\">
                            TRAVAUX DU JOUR
                        </button>
                        <a href=\"";
            // line 2474
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            yield "\" class=\"btn\"
                           style=\"background-color: #d63232; color: #FFF; width: 150px\">
                            SE DÉCONNECTER
                        </a>
                    </div>
                    ";
            // line 2479
            if (((isset($context["besa"]) || array_key_exists("besa", $context) ? $context["besa"] : (function () { throw new RuntimeError('Variable "besa" does not exist.', 2479, $this->source); })()) == null)) {
                // line 2480
                yield "                        <div class=\"container\" style=\"padding: 0 !important;\">
                            <div class=\"row\" style='margin:10px 0 15px 0;'>
                                ";
                // line 2482
                if ((($tmp =  !(isset($context["ismobile"]) || array_key_exists("ismobile", $context) ? $context["ismobile"] : (function () { throw new RuntimeError('Variable "ismobile" does not exist.', 2482, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 2483
                    yield "                                    <div class=\"row\" style='margin:10px 0 15px 0;'>
                                        <div class=\"d-grid gap-2 col-3 mx-auto\">
                                            <div style=\"color: #FFF; font-size: 13px; border: 1px solid #989898;height: 120px; padding:5px\">
                                                <span style=\"float: right;font-weight: bold;color:#efd807;\">GESTION DU PERSONNEL</span><br>
                                                <a onclick=\"shashar('personnel');\"
                                                   style=\"float: left; font-weight: normal\">&raquo
                                                    Personnel & Equipes</a>
                                                ";
                    // line 2490
                    if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitAdmin"]) || array_key_exists("droitAdmin", $context) ? $context["droitAdmin"] : (function () { throw new RuntimeError('Variable "droitAdmin" does not exist.', 2490, $this->source); })()), "actions", [], "any", false, false, false, 2490) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitComptable"]) || array_key_exists("droitComptable", $context) ? $context["droitComptable"] : (function () { throw new RuntimeError('Variable "droitComptable" does not exist.', 2490, $this->source); })()), "actions", [], "any", false, false, false, 2490) == "oui"))) {
                        // line 2491
                        yield "                                                    <br>
                                                    <a onclick=\"shashar('chargespersonnelles');\"
                                                       style=\"float: left; font-weight: normal\">&raquo Charges du
                                                        Personnel</a><br>
                                                    <a onclick=\"shashar('chargesinternes');\"
                                                       style=\"float: left; font-weight: normal\">&raquo Charges
                                                        Internes</a><br>
                                                ";
                    } else {
                        // line 2499
                        yield "                                                    <a href=\"#\" class=\"col-blue-grey\"
                                                       style=\"float: left; font-weight: normal\">&raquo Charges du
                                                        Personnel</a><br>
                                                    <a href=\"#\" class=\"col-blue-grey\"
                                                       style=\"float: left; font-weight: normal\">&raquo Charges
                                                        Internes</a><br>
                                                ";
                    }
                    // line 2506
                    yield "                                            </div>
                                            <button onclick=\"shashar('documents');\" class=\"btn\" type=\"button\"
                                                    style=\" color: #FFF; font-size: 13px; border: 1px solid #989898;height: 50px\">
                                                GESTION DES FICHIERS
                                            </button>
                                            <button onclick=\"shashar('start');\" class=\"btn\" type=\"button\"
                                                    style=\" color: #FFF; font-size: 13px; border: 1px solid #989898;height: 50px\">
                                                AGENDA
                                            </button>
                                        </div>
                                        <div class=\"d-grid gap-2 col-3 mx-auto\">
                                            <div style=\"color: #FFF; font-size: 13px; border: 1px solid #989898;height: 120px; padding:5px\">
                                                <span style=\"float: right;font-weight: bold;color:#efd807;\">RELATIONS TIERS</span><br>
                                                <a onclick=\"shashar('listeclient');\"
                                                   style=\"float: left; font-weight: normal\">&raquo La liste des
                                                    clients</a><br>
                                                <a onclick=\"shashar('fournisseur');\"
                                                   style=\"float: left; font-weight: normal\">&raquo Gestion des
                                                    fournisseurs</a><br>
                                                <a onclick=\"shashar('prestataire');\"
                                                   style=\"float: left; font-weight: normal\">&raquo Gestion des
                                                    prestataires</a><br>
                                                ";
                    // line 2528
                    if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitAdmin"]) || array_key_exists("droitAdmin", $context) ? $context["droitAdmin"] : (function () { throw new RuntimeError('Variable "droitAdmin" does not exist.', 2528, $this->source); })()), "actions", [], "any", false, false, false, 2528) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitComptable"]) || array_key_exists("droitComptable", $context) ? $context["droitComptable"] : (function () { throw new RuntimeError('Variable "droitComptable" does not exist.', 2528, $this->source); })()), "actions", [], "any", false, false, false, 2528) == "oui"))) {
                        // line 2529
                        yield "                                                    <a onclick=\"shashar('comptesclients');\"
                                                       style=\"float: left; font-weight: normal\">&raquo Créances
                                                        clients</a><br>
                                                ";
                    } else {
                        // line 2533
                        yield "                                                    <a href=\"#\" class=\"col-blue-grey\"
                                                       style=\"float: left; font-weight: normal\">&raquo Créances
                                                        clients</a><br>
                                                ";
                    }
                    // line 2537
                    yield "                                            </div>
                                            <button onclick=\"shashar('planning');\" class=\"btn\" type=\"button\"
                                                    style=\"color: #FFF; font-size: 13px; border: 1px solid #989898;height: 50px\">
                                                PLANNING
                                            </button>
                                            <button onclick=\"shashar('parametre');\" class=\"btn\" type=\"button\"
                                                    style=\"color: #FFF; font-size: 13px; border: 1px solid #989898;height: 50px\">
                                                PARAMÈTRES
                                            </button>
                                        </div>
                                        <div class=\"d-grid gap-2 col-3 mx-auto\">
                                            <div style=\"color: #FFF; font-size: 13px; border: 1px solid #989898;height: 120px; padding:5px\">
                                                <span style=\"float: right;font-weight: bold;color:#efd807;\">RECAP DES CHANTIERS</span><br>
                                                ";
                    // line 2550
                    if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitAdmin"]) || array_key_exists("droitAdmin", $context) ? $context["droitAdmin"] : (function () { throw new RuntimeError('Variable "droitAdmin" does not exist.', 2550, $this->source); })()), "actions", [], "any", false, false, false, 2550) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitComptable"]) || array_key_exists("droitComptable", $context) ? $context["droitComptable"] : (function () { throw new RuntimeError('Variable "droitComptable" does not exist.', 2550, $this->source); })()), "actions", [], "any", false, false, false, 2550) == "oui"))) {
                        // line 2551
                        yield "                                                    <a onclick=\"shashar('budget');\"
                                                       style=\"float: left; font-weight: normal\">&raquo
                                                        Charges
                                                        prévisionnelles</a><br>
                                                    <a onclick=\"shashar('tresorerie');\"
                                                       style=\"float: left; font-weight: normal\">&raquo Trésorerie</a>
                                                    <br>
                                                    <a onclick=\"shashar('soldecompte');\"
                                                       style=\"float: left; font-weight: normal\">&raquo Etats financiers</a><br>
                                                    <a onclick=\"shashar('rapportchantier');\"
                                                       style=\"float: left; font-weight: normal\">&raquo Suivi de
                                                        chantiers</a><br>
                                                ";
                    } else {
                        // line 2564
                        yield "                                                    <a href=\"#\" class=\"col-blue-grey\"
                                                       style=\"float: left; font-weight: normal\">&raquo
                                                        Charges
                                                        prévisionnelles</a><br>
                                                    <a href=\"#\" class=\"col-blue-grey\"
                                                       style=\"float: left; font-weight: normal\">&raquo
                                                        Gestion de trésorerie</a><br>
                                                    <a href=\"#\" class=\"col-blue-grey\"
                                                       style=\"float: left; font-weight: normal\">&raquo
                                                        Etats financiers</a><br>
                                                    <a href=\"#\" class=\"col-blue-grey\"
                                                       style=\"float: left; font-weight: normal\">&raquo
                                                        Suivi de
                                                        chantiers</a><br>
                                                ";
                    }
                    // line 2579
                    yield "                                            </div>
                                            <button onclick=\"shashar('message');\" class=\"btn\" type=\"button\"
                                                    style=\"color: #FFF; font-size: 13px; border: 1px solid #989898;height: 50px\">
                                                MESSAGERIE
                                            </button>
                                            <button onclick=\"shashar('historique');\" class=\"btn\" type=\"button\"
                                                    style=\"color: #FFF; font-size: 13px; border: 1px solid #989898;height: 50px\">
                                                HISTORIQUE
                                            </button>
                                        </div>
                                        <div class=\"d-grid gap-2 col-3 mx-auto\">
                                            <div style=\"color: #FFF; font-size: 13px; border: 1px solid #989898;height: 120px; padding:5px\">
                                                <span style=\"float: right;font-weight: bold;color:#efd807;\">MATÉRIAUX / MATÉRIELS</span><br>
                                                <a onclick=\"shashar('article');\"
                                                   style=\"float: left; font-weight: normal\">&raquo
                                                    Matériels & matériaux</a><br>
                                                <a onclick=\"shashar('materiel');\"
                                                   style=\"float: left; font-weight: normal\">&raquo
                                                    Suivi du matériel</a><br>
                                            </div>
                                            <button onclick=\"shashar('chat');\" class=\"btn\" type=\"button\"
                                                    style=\"color: #FFF; font-size: 13px; border: 1px solid #989898;height: 50px\">
                                                CHAT
                                            </button>
                                            <button onclick=\"shashar('corbeille');\" class=\"btn\" type=\"button\"
                                                    style=\"color: #FFF; font-size: 13px; border: 1px solid #989898;height: 50px\">
                                                CORBEILLE
                                            </button>
                                        </div>
                                    </div>
                                ";
                }
                // line 2610
                yield "                            </div>
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\"
                                 style=\"margin-top: 10px !important\">
                                ";
                // line 2613
                if ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitAdmin"]) || array_key_exists("droitAdmin", $context) ? $context["droitAdmin"] : (function () { throw new RuntimeError('Variable "droitAdmin" does not exist.', 2613, $this->source); })()), "actions", [], "any", false, false, false, 2613) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitComptable"]) || array_key_exists("droitComptable", $context) ? $context["droitComptable"] : (function () { throw new RuntimeError('Variable "droitComptable" does not exist.', 2613, $this->source); })()), "actions", [], "any", false, false, false, 2613) == "oui")) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitAddClient"]) || array_key_exists("droitAddClient", $context) ? $context["droitAddClient"] : (function () { throw new RuntimeError('Variable "droitAddClient" does not exist.', 2613, $this->source); })()), "actions", [], "any", false, false, false, 2613) == "oui"))) {
                    // line 2614
                    yield "                                    <button onclick=\"modalClient();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px; margin-right:5px\">
                                        AJOUTER UN CLIENT
                                    </button>
                                ";
                } else {
                    // line 2619
                    yield "                                    <button class=\"btn bg-blue-grey col-white\" type=\"button\"
                                            style=\"font-size: 13px; margin-right:10px\">AJOUTER UN CLIENT
                                    </button>
                                ";
                }
                // line 2623
                yield "                                ";
                if ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitAdmin"]) || array_key_exists("droitAdmin", $context) ? $context["droitAdmin"] : (function () { throw new RuntimeError('Variable "droitAdmin" does not exist.', 2623, $this->source); })()), "actions", [], "any", false, false, false, 2623) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitComptable"]) || array_key_exists("droitComptable", $context) ? $context["droitComptable"] : (function () { throw new RuntimeError('Variable "droitComptable" does not exist.', 2623, $this->source); })()), "actions", [], "any", false, false, false, 2623) == "oui")) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitAddChantier"]) || array_key_exists("droitAddChantier", $context) ? $context["droitAddChantier"] : (function () { throw new RuntimeError('Variable "droitAddChantier" does not exist.', 2623, $this->source); })()), "actions", [], "any", false, false, false, 2623) == "oui"))) {
                    // line 2624
                    yield "                                    <button onclick=\"modalChantier();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">AJOUTER UN
                                        CHANTIER
                                    </button>
                                ";
                } else {
                    // line 2629
                    yield "                                    <button class=\"btn bg-blue-grey col-white\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">AJOUTER UN
                                        CHANTIER
                                    </button>
                                ";
                }
                // line 2634
                yield "                            </div>
                            ";
                // line 2635
                if ((($tmp =  !(isset($context["ismobile"]) || array_key_exists("ismobile", $context) ? $context["ismobile"] : (function () { throw new RuntimeError('Variable "ismobile" does not exist.', 2635, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 2636
                    yield "                                <br><br>
                                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\">
                                    <input type=\"text\" id=\"recheclient\" placeholder=\"Rechercher un Client\"
                                           style=\"color: #FFF\">
                                </div>

                                <br><br>
                                <div class=\"row\" style='margin:10px 0 15px 0;' id=\"chantierdiv\">

                                </div>

                                <div class=\"row\" style='margin:10px 0 15px 0;'>
                                    <h6 style=\"float: left; color: #fff; margin-top:20px\">©Carlinbleu. All rights
                                        reserved.</h6>
                                    <h6 style=\"float: right; margin-top:20px\">
                                        <a href=\"https://www.facebook.com/profile.php?id=100088340186112\"
                                           style=\"color: #fff\">facebook</a> |
                                        <a href=\"https://www.linkedin.com/company/carlinbleu\" style=\"color: #fff\">linkedin</a>
                                    </h6>
                                </div>
                            ";
                }
                // line 2657
                yield "                        </div>
                    ";
            } else {
                // line 2659
                yield "                        <div class=\"container\" style=\"margin-top: 20px\">
                            <div class=\"row\">
                                ";
                // line 2661
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["besoins"]) || array_key_exists("besoins", $context) ? $context["besoins"] : (function () { throw new RuntimeError('Variable "besoins" does not exist.', 2661, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["beso"]) {
                    // line 2662
                    yield "                                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "etat", [], "any", false, false, false, 2662) != "archiver")) {
                        // line 2663
                        yield "                                        <div class=\"shadow bg-body rounded col-md-4\"
                                                ";
                        // line 2664
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "etat", [], "any", false, false, false, 2664) == "valider")) {
                            yield " style=\"border:2px solid #3d7318 !important; margin-bottom: 10px\"";
                        }
                        // line 2665
                        yield "                                                ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "etat", [], "any", false, false, false, 2665) == "urgent")) {
                            yield " style=\"border:2px solid #f00 !important; margin-bottom: 10px\"";
                        }
                        // line 2666
                        yield "                                                ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "etat", [], "any", false, false, false, 2666) == "rappel")) {
                            yield " style=\"border:2px solid #86bfe3 !important; margin-bottom: 10px\"";
                        }
                        // line 2667
                        yield "                                                ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "etat", [], "any", false, false, false, 2667) == "cloturer")) {
                            yield " style=\"border:2px solid #a1adb5 !important; margin-bottom: 10px\"";
                        }
                        // line 2668
                        yield "                                        >
                                            <div style=\"text-align: left !important; padding: 5px; background-color: #d9dfe6; margin-top: 10px\">
                                                <span class=\"col-black bolo700\">De: ";
                        // line 2670
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "dobyuser", [], "any", false, false, false, 2670), "nom", [], "any", false, false, false, 2670), "html", null, true);
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "dobyuser", [], "any", false, false, false, 2670), "prenoms", [], "any", false, false, false, 2670), "html", null, true);
                        yield "</span>
                                            </div>
                                            <br><br>
                                            <h6 style=\"float: right; margin-top: -30px\">Statut:
                                                ";
                        // line 2674
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "etat", [], "any", false, false, false, 2674) == "urgent")) {
                            yield "<span
                                                        class=\"col-pink bolo700\">[ URGENT ] </span>";
                        }
                        // line 2676
                        yield "                                                ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "etat", [], "any", false, false, false, 2676) == "valider")) {
                            yield "<span
                                                        class=\"bolo700 col-green\">[ À VALIDER ]</span>";
                        }
                        // line 2678
                        yield "                                                ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "etat", [], "any", false, false, false, 2678) == "rappel")) {
                            yield "<span
                                                        class=\"bolo700 col-blue\">[ RAPPEL ]</span>";
                        }
                        // line 2680
                        yield "                                                ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "etat", [], "any", false, false, false, 2680) == "cloturer")) {
                            yield "<span
                                                        class=\"bolo700 col-blue-grey\">[ CLÔTURER ]</span>";
                        }
                        // line 2682
                        yield "                                            </h6>
                                            <h6 style=\"text-align: left\">
                                                <b><u>Client:</u> </b> ";
                        // line 2684
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "chantier", [], "any", false, false, false, 2684), "client", [], "any", false, false, false, 2684), "nomclient", [], "any", false, false, false, 2684), "html", null, true);
                        yield "<br>
                                                <b><u>Chantier:</u> </b> ";
                        // line 2685
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "chantier", [], "any", false, false, false, 2685), "nomchantier", [], "any", false, false, false, 2685), "html", null, true);
                        yield "<br>
                                                <b><u>Fichiers:</u> </b><br>
                                                ";
                        // line 2687
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "fichiers", [], "any", false, false, false, 2687));
                        foreach ($context['_seq'] as $context["_key"] => $context["fichier"]) {
                            // line 2688
                            yield "                                                    # <a href=\"/";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "folde", [], "any", false, false, false, 2688), "html", null, true);
                            yield "/";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "nomfichier", [], "any", false, false, false, 2688), "html", null, true);
                            yield "\"
                                                         class=\"col-blue\" style=\"font-weight: 600\"
                                                         target=\"_blank\">";
                            // line 2690
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "nomfichier", [], "any", false, false, false, 2690), "html", null, true);
                            yield "</a><br>
                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['fichier'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 2692
                        yield "                                                <br>
                                                ";
                        // line 2693
                        yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "besoin", [], "any", false, false, false, 2693));
                        yield "<br><br>
                                                Fait
                                                le: ";
                        // line 2695
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "date", [], "any", false, false, false, 2695), "d-m-Y H:i"), "html", null, true);
                        yield "
                                            </h6>


                                            ";
                        // line 2699
                        if ((((isset($context["estmaster"]) || array_key_exists("estmaster", $context) ? $context["estmaster"] : (function () { throw new RuntimeError('Variable "estmaster" does not exist.', 2699, $this->source); })()) == false) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitAdmin"]) || array_key_exists("droitAdmin", $context) ? $context["droitAdmin"] : (function () { throw new RuntimeError('Variable "droitAdmin" does not exist.', 2699, $this->source); })()), "actions", [], "any", false, false, false, 2699) == "non"))) {
                            // line 2700
                            yield "                                                <div style=\"float: right; margin-top: 10px\">
                                                    ";
                            // line 2701
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitCommenterBesoin"]) || array_key_exists("droitCommenterBesoin", $context) ? $context["droitCommenterBesoin"] : (function () { throw new RuntimeError('Variable "droitCommenterBesoin" does not exist.', 2701, $this->source); })()), "actions", [], "any", false, false, false, 2701) == "oui")) {
                                // line 2702
                                yield "                                                        <a href=\"#\" class=\"besomessage\" id=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "id", [], "any", false, false, false, 2702), "html", null, true);
                                yield "\"
                                                           title=\"MESSAGE\"
                                                           style=\"margin-right: 5px\"><i
                                                                    class=\"fa fa-message col-orange\"></i></a>
                                                    ";
                            }
                            // line 2707
                            yield "                                                    ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitCloturerBesoin"]) || array_key_exists("droitCloturerBesoin", $context) ? $context["droitCloturerBesoin"] : (function () { throw new RuntimeError('Variable "droitCloturerBesoin" does not exist.', 2707, $this->source); })()), "actions", [], "any", false, false, false, 2707) == "oui")) {
                                // line 2708
                                yield "                                                        <a href=\"#\" class=\"besocloturer\" id=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "id", [], "any", false, false, false, 2708), "html", null, true);
                                yield "\"
                                                           title=\"CLÔTURER\"
                                                           style=\"margin-right: 5px\"><i
                                                                    class=\"fa fa-check-square col-blue\"></i></a>
                                                    ";
                            }
                            // line 2713
                            yield "                                                    ";
                            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitModifierBesoin"]) || array_key_exists("droitModifierBesoin", $context) ? $context["droitModifierBesoin"] : (function () { throw new RuntimeError('Variable "droitModifierBesoin" does not exist.', 2713, $this->source); })()), "actions", [], "any", false, false, false, 2713) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2713, $this->source); })()), "user", [], "any", false, false, false, 2713), "id", [], "any", false, false, false, 2713) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "dobyuser", [], "any", false, false, false, 2713), "id", [], "any", false, false, false, 2713)))) {
                                // line 2714
                                yield "                                                        <a href=\"#\" class=\"besoedit\" id=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "id", [], "any", false, false, false, 2714), "html", null, true);
                                yield "\" title=\"MODIFIER\"
                                                           style=\"margin-right: 5px\"><i
                                                                    class=\"fa fa-edit col-green\"></i></a>
                                                    ";
                            }
                            // line 2718
                            yield "                                                    ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitSupprimerBesoin"]) || array_key_exists("droitSupprimerBesoin", $context) ? $context["droitSupprimerBesoin"] : (function () { throw new RuntimeError('Variable "droitSupprimerBesoin" does not exist.', 2718, $this->source); })()), "actions", [], "any", false, false, false, 2718) == "oui")) {
                                // line 2719
                                yield "                                                        <a href=\"#\" class=\"besodel\" id=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "id", [], "any", false, false, false, 2719), "html", null, true);
                                yield "\"
                                                           title=\"SUPPRIMER\"><i
                                                                    class=\"fa fa-trash col-pink\"></i></a>
                                                    ";
                            }
                            // line 2723
                            yield "                                                </div>
                                            ";
                        }
                        // line 2725
                        yield "                                            ";
                        if ((((isset($context["estmaster"]) || array_key_exists("estmaster", $context) ? $context["estmaster"] : (function () { throw new RuntimeError('Variable "estmaster" does not exist.', 2725, $this->source); })()) == true) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitAdmin"]) || array_key_exists("droitAdmin", $context) ? $context["droitAdmin"] : (function () { throw new RuntimeError('Variable "droitAdmin" does not exist.', 2725, $this->source); })()), "actions", [], "any", false, false, false, 2725) == "oui"))) {
                            // line 2726
                            yield "                                                <div style=\"float: right; margin-top: 10px\">
                                                    <a href=\"#\" class=\"besomessage\" id=\"";
                            // line 2727
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "id", [], "any", false, false, false, 2727), "html", null, true);
                            yield "\" title=\"MESSAGE\"
                                                       style=\"margin-right: 5px\"><i
                                                                class=\"fa fa-message col-orange\"></i></a>
                                                    <a href=\"#\" class=\"besocloturer\" id=\"";
                            // line 2730
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "id", [], "any", false, false, false, 2730), "html", null, true);
                            yield "\" title=\"CLÔTURER\"
                                                       style=\"margin-right: 5px\"><i
                                                                class=\"fa fa-check-square col-blue\"></i></a>
                                                    <a href=\"#\" class=\"besoedit\" id=\"";
                            // line 2733
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "id", [], "any", false, false, false, 2733), "html", null, true);
                            yield "\" title=\"MODIFIER\"
                                                       style=\"margin-right: 5px\"><i
                                                                class=\"fa fa-edit col-green\"></i></a>
                                                    <a href=\"#\" class=\"besoarchiver\" id=\"";
                            // line 2736
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "id", [], "any", false, false, false, 2736), "html", null, true);
                            yield "\" title=\"ARCHIVER\"
                                                       style=\"margin-right: 5px\"><i
                                                                class=\"fa fa-folder col-blue-grey\"></i></a>
                                                    <a href=\"#\" class=\"besodel\" id=\"";
                            // line 2739
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "id", [], "any", false, false, false, 2739), "html", null, true);
                            yield "\" title=\"SUPPRIMER\"><i
                                                                class=\"fa fa-trash col-pink\"></i></a>
                                                </div>
                                            ";
                        }
                        // line 2743
                        yield "                                            <br><br>
                                        </div>
                                    ";
                    }
                    // line 2746
                    yield "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['beso'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 2747
                yield "                            </div>
                        </div>
                    ";
            }
            // line 2750
            yield "                </section>
            </div>
            <div class=\"col-xl-3 col-md-3\">
                ";
            // line 2753
            if ((($tmp =  !(isset($context["ismobile"]) || array_key_exists("ismobile", $context) ? $context["ismobile"] : (function () { throw new RuntimeError('Variable "ismobile" does not exist.', 2753, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 2754
                yield "                    <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\" style=\"width: 100%\">
                        <button class=\"btn bg-blue-grey text-white\" style=\"color: #000;\">
                            GUIDE D'UTILISATION DE L'APPLICATION
                        </button>
                    </div>
                ";
            } else {
                // line 2760
                yield "                    <br><br>
                ";
            }
            // line 2762
            yield "
                <div class=\"card shadow mb-4\" id=\"client\">
                    <h6 class=\"text-left bg-pri col-white bolo600 bolderrer\"
                        style=\"width: 100%; padding: 10px; font-size:14px !important;\">ACTIONS RAPIDES
                    </h6>
                    <div class=\"table-responsive\" style=\"padding: 10px; overflow-x: scroll; text-align:left\">
                        <p><a onclick=\"shashar('chantieretude');\" class=\"col-black\"
                              style=\"font-weight: 500 !important;\">&raquo;
                                Chantiers en étude</a></p>
                        <p><a onclick=\"shashar('chantiercours');\" class=\"col-black\"
                              style=\"font-weight: 500 !important;\">&raquo;
                                Chantiers en cours</a></p>
                        <p><a onclick=\"shashar('chantierechouer');\" class=\"col-black\"
                              style=\"font-weight: 500 !important;\">&raquo;
                                Chantiers échoués</a></p>
                        <p><a onclick=\"shashar('chantiersclotures');\" class=\"col-black\"
                              style=\"font-weight: 500 !important;\">&raquo; Chantiers clôturés</a></p>
                        <p><a onclick=\"shashar('chantierstermines');\" class=\"col-black\"
                              style=\"font-weight: 500 !important;\">&raquo; Chantiers terminés</a></p>
                        <hr>
                        <p>
                            ";
            // line 2783
            if ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitAdmin"]) || array_key_exists("droitAdmin", $context) ? $context["droitAdmin"] : (function () { throw new RuntimeError('Variable "droitAdmin" does not exist.', 2783, $this->source); })()), "actions", [], "any", false, false, false, 2783) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitComptable"]) || array_key_exists("droitComptable", $context) ? $context["droitComptable"] : (function () { throw new RuntimeError('Variable "droitComptable" does not exist.', 2783, $this->source); })()), "actions", [], "any", false, false, false, 2783) == "oui")) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitAddDevis"]) || array_key_exists("droitAddDevis", $context) ? $context["droitAddDevis"] : (function () { throw new RuntimeError('Variable "droitAddDevis" does not exist.', 2783, $this->source); })()), "actions", [], "any", false, false, false, 2783) == "oui"))) {
                // line 2784
                yield "                                <a href=\"#\" onclick=\"modalDevis();\" class=\"col-black\"
                                   style=\"font-weight: 500 !important;\">&raquo;
                                    Créer un Devis</a>
                            ";
            } else {
                // line 2788
                yield "                                <a class=\"col-blue-grey\" style=\"font-weight: 500 !important;\">&raquo; Créer un Devis</a>
                            ";
            }
            // line 2790
            yield "                        </p>
                        <p><a onclick=\"modalDecompte();\" class=\"col-black\" style=\"font-weight: 500 !important;\">&raquo;
                                Créer un Décompte</a></p>
                        <p><a onclick=\"modalFacture();\" class=\"col-black\" style=\"font-weight: 500 !important;\">&raquo;
                                Créer
                                une Facture</a></p>
                        <p><a onclick=\"modalReglement();\" class=\"col-black\" style=\"font-weight: 500 !important;\">&raquo;
                                Faire un Règlement</a></p>
                        <hr>
                        <p><a onclick=\"modalPrestataire();\" class=\"col-black\" style=\"font-weight: 500 !important;\">&raquo;
                                Ajouter un Prestataire</a></p>
                        <p><a onclick=\"modalFournisseur();\" class=\"col-black\" style=\"font-weight: 500 !important;\">&raquo;
                                Ajouter un Fournisseur</a></p>
                        <p><a onclick=\"modalBonPrestataire();\" class=\"col-black\" style=\"font-weight: 500 !important;\">&raquo;
                                Créer un Bon Prestataire</a></p>
                        <p><a onclick=\"modalBonFournisseur();\" class=\"col-black\" style=\"font-weight: 500 !important;\">&raquo;
                                Faire un Bon Fournisseur</a></p>
                        <p><a onclick=\"modalPaiePrestataire();\" class=\"col-black\" style=\"font-weight: 500 !important;\">&raquo;
                                Paie Prestataire</a></p>
                        <p><a onclick=\"modalPaieFournisseur();\" class=\"col-black\" style=\"font-weight: 500 !important;\">&raquo;
                                Paie Fournisseur</a></p>
                        <hr>
                        <p class=\"bolo700 col-blue\">CHANTIERS EN ÉTUDE/COURS DOCUMENTS NON VALIDÉS </p>
                        <p><a onclick=\"shashar('dndevis');\" class=\"col-pink\" style=\"font-weight: 700 !important;\">&raquo;
                                Devis non validés</a></p>
                        <p><a onclick=\"shashar('dnbonsfournisseurs');\" class=\"col-pink\" style=\"font-weight: 700 !important;\">&raquo;
                                Bons fournisseurs non validés</a></p>
                        <p><a onclick=\"shashar('dnbonsprestataires');\"  class=\"col-pink\" style=\"font-weight: 700 !important;\">&raquo;
                                Bons prestataires non validés</a></p>
                        <p><a onclick=\"shashar('dnpaiesfournisseurs');\" class=\"col-pink\" style=\"font-weight: 700 !important;\">&raquo;
                                Paies fournisseurs non validées</a></p>
                        <p><a onclick=\"shashar('dnpaiesprestataires');\" class=\"col-pink\" style=\"font-weight: 700 !important;\">&raquo;
                                Paies prestataires non validées</a></p>
                        <p><a onclick=\"shashar('dnchargeschantiers');\" class=\"col-pink\" style=\"font-weight: 700 !important;\">&raquo;
                                Charges chantiers non validées</a></p>
                        <p><a onclick=\"shashar('dndecomptes');\" class=\"col-pink\" style=\"font-weight: 700 !important;\">&raquo;
                                Décomptes non validés</a></p>
                        <p><a onclick=\"shashar('dnfactures');\" class=\"col-pink\" style=\"font-weight: 700 !important;\">&raquo;
                                Factures non validées</a></p>
                    </div>

                </div>
                <div class=\"card shadow mb-4\" id=\"client\" style=\"height: 120px\">
                    <h6 class=\"text-left bg-pri col-white bolo600 bolderrer\"
                        style=\"width: 100%; padding: 10px; font-size:14px !important;\">BESOINS POUR CHANTIERS
                    </h6>
                    ";
            // line 2836
            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitAdmin"]) || array_key_exists("droitAdmin", $context) ? $context["droitAdmin"] : (function () { throw new RuntimeError('Variable "droitAdmin" does not exist.', 2836, $this->source); })()), "actions", [], "any", false, false, false, 2836) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitAddBesoin"]) || array_key_exists("droitAddBesoin", $context) ? $context["droitAddBesoin"] : (function () { throw new RuntimeError('Variable "droitAddBesoin" does not exist.', 2836, $this->source); })()), "actions", [], "any", false, false, false, 2836) == "oui"))) {
                // line 2837
                yield "                        <div style=\"text-align:center\">
                            <button onclick=\"modalBesoins();\" class=\"btn\" type=\"button\"
                                    style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\"> Saisir des
                                besoins
                                pour chantiers
                            </button>
                            <a href=\"";
                // line 2843
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listerbesoin", ["beso" => "oui", "tab" => (isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () { throw new RuntimeError('Variable "tableau" does not exist.', 2843, $this->source); })())]), "html", null, true);
                yield "\"
                               class=\"btn align-items-center rounded col-blue bolo600\" style=\"font-size: 14px\"># Liste
                                des besoins</a><br>

                        </div>
                    ";
            }
            // line 2849
            yield "
                </div>
                <div class=\"card shadow mb-4\" id=\"client\">
                    <h6 class=\"text-left bg-pri col-white bolo600 bolderrer\"
                        style=\"width: 100%; padding: 10px; font-size:14px !important;\">EXCERCICES COMPTABLES
                    </h6>
                    <div class=\"table-responsive\" style=\"padding: 10px; overflow-x: scroll; text-align:center\">
                        <button onclick=\"modalExercices();\" class=\"btn\" type=\"button\"
                                style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\"> Créer des exercices
                            comptables
                        </button>
                    </div>
                    <div style=\"padding-left: 10px; overflow-x: scroll; text-align:left\">
                        <h6 class=\"text-left\">
                            <table style=\"width: 100%\">
                                ";
            // line 2864
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["exercices"]) || array_key_exists("exercices", $context) ? $context["exercices"] : (function () { throw new RuntimeError('Variable "exercices" does not exist.', 2864, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["exer"]) {
                // line 2865
                yield "                                    ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["exer"], "corbeille", [], "any", false, false, false, 2865))) {
                    // line 2866
                    yield "                                        <tr>
                                            <td><a href=\"#\" onclick=\"shashar('exercices/";
                    // line 2867
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["exer"], "id", [], "any", false, false, false, 2867), "html", null, true);
                    yield "');\"
                                                   style=\"font-size:15px !important; font-weight:normal\"
                                                   class=\"col-black\"># ";
                    // line 2869
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["exer"], "exercice", [], "any", false, false, false, 2869), "html", null, true);
                    yield "</a>
                                                <br>
                                                <span>
                                            <a href=\"#\" onclick=\"shashar('exercices/";
                    // line 2872
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["exer"], "id", [], "any", false, false, false, 2872), "html", null, true);
                    yield "');\"
                                               style=\"font-size:14px !important; font-weight:normal\"
                                               class=\"col-pink bolo600\">
                                                ( Du: ";
                    // line 2875
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["exer"], "debut", [], "any", false, false, false, 2875), "d-m-Y"), "html", null, true);
                    yield " | Au: ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["exer"], "fin", [], "any", false, false, false, 2875), "d-m-Y"), "html", null, true);
                    yield " )
                                            </a>
                                        </span>
                                            </td>
                                            <td class=\"text-right\">
                                                <a href=\"#\" class=\"editexer\" id=\"";
                    // line 2880
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["exer"], "id", [], "any", false, false, false, 2880), "html", null, true);
                    yield "\"><i
                                                            class=\"fa fa-edit col-green\"
                                                            style=\"font-size: 16px\"></i></a>
                                                <a href=\"#\" class=\"delexer\" id=\"";
                    // line 2883
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["exer"], "id", [], "any", false, false, false, 2883), "html", null, true);
                    yield "\"><i
                                                            class=\"fa fa-trash col-pink\"
                                                            style=\"font-size: 16px\"></i></a>
                                            </td>
                                        </tr>
                                    ";
                }
                // line 2889
                yield "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['exer'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2890
            yield "                            </table>
                        </h6>
                    </div>
                </div>
                <div class=\"card shadow mb-4\" id=\"client\" style=\"height: 400px\">
                    <h6 class=\"text-left bg-pri col-white bolo600 bolderrer\"
                        style=\"width: 100%; padding: 10px; font-size:14px !important;\">BESOINS ARCHIVÉS
                    </h6>
                    <div style=\"padding: 10px; overflow-x: scroll;\">
                        ";
            // line 2899
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["besoins"]) || array_key_exists("besoins", $context) ? $context["besoins"] : (function () { throw new RuntimeError('Variable "besoins" does not exist.', 2899, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["beso"]) {
                // line 2900
                yield "                            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "etat", [], "any", false, false, false, 2900) == "archiver")) {
                    // line 2901
                    yield "                                <div class=\"shadow p-3 bg-body rounded\">
                                    <h6>
                                        <span class=\"col-black bolo700\">De: ";
                    // line 2903
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "dobyuser", [], "any", false, false, false, 2903), "nom", [], "any", false, false, false, 2903), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "dobyuser", [], "any", false, false, false, 2903), "prenoms", [], "any", false, false, false, 2903), "html", null, true);
                    yield "</span>
                                    </h6>
                                    <hr style=\"margin-top: -10px\">
                                    <h6 class=\"text-left\">
                                        <b><u>Client:</u> </b> ";
                    // line 2907
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "chantier", [], "any", false, false, false, 2907), "client", [], "any", false, false, false, 2907), "nomclient", [], "any", false, false, false, 2907), "html", null, true);
                    yield "<br>
                                        <b><u>Chantier:</u> </b> ";
                    // line 2908
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "chantier", [], "any", false, false, false, 2908), "nomchantier", [], "any", false, false, false, 2908), "html", null, true);
                    yield "<br>
                                        <b><u>Fichiers:</u> </b><br>
                                        ";
                    // line 2910
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "fichiers", [], "any", false, false, false, 2910));
                    foreach ($context['_seq'] as $context["_key"] => $context["fichier"]) {
                        // line 2911
                        yield "                                            # <a href=\"/";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "folde", [], "any", false, false, false, 2911), "html", null, true);
                        yield "/";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "nomfichier", [], "any", false, false, false, 2911), "html", null, true);
                        yield "\"
                                                 class=\"col-blue\" style=\"font-weight: 600\"
                                                 target=\"_blank\">";
                        // line 2913
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "nomfichier", [], "any", false, false, false, 2913), "html", null, true);
                        yield "</a><br>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['fichier'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 2915
                    yield "                                        <br>
                                        ";
                    // line 2916
                    yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "besoin", [], "any", false, false, false, 2916));
                    yield "<br><br>
                                        Fait
                                        le: ";
                    // line 2918
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "date", [], "any", false, false, false, 2918), "d-m-Y H:i"), "html", null, true);
                    yield "
                                    </h6>
                                    ";
                    // line 2920
                    if ((((isset($context["estmaster"]) || array_key_exists("estmaster", $context) ? $context["estmaster"] : (function () { throw new RuntimeError('Variable "estmaster" does not exist.', 2920, $this->source); })()) == true) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitAdmin"]) || array_key_exists("droitAdmin", $context) ? $context["droitAdmin"] : (function () { throw new RuntimeError('Variable "droitAdmin" does not exist.', 2920, $this->source); })()), "actions", [], "any", false, false, false, 2920) == "oui"))) {
                        // line 2921
                        yield "                                        <div style=\"float: right; margin-top: 10px\">
                                            <a href=\"#\" class=\"besomessage\" id=\"";
                        // line 2922
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "id", [], "any", false, false, false, 2922), "html", null, true);
                        yield "\" title=\"MESSAGE\"
                                               style=\"margin-right: 5px\"><i class=\"fa fa-message col-orange\"></i></a>
                                            <a href=\"#\" class=\"besorelancer\" id=\"";
                        // line 2924
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "id", [], "any", false, false, false, 2924), "html", null, true);
                        yield "\" title=\"RELANCER\"><i
                                                        class=\"fa fa-repeat col-blue\"></i></a>
                                        </div>
                                    ";
                    }
                    // line 2928
                    yield "                                    <br><br>
                                </div>
                            ";
                }
                // line 2931
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['beso'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2932
            yield "                    </div>
                </div>
                ";
            // line 2934
            if ((($tmp = (isset($context["ismobile"]) || array_key_exists("ismobile", $context) ? $context["ismobile"] : (function () { throw new RuntimeError('Variable "ismobile" does not exist.', 2934, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 2935
                yield "                    <div class=\"row\" style='margin:10px 0 15px 0;'>
                        <h6 style=\"float: left; color: #fff; margin-top:20px\">©Carlinbleu. All rights reserved.</h6>
                        <h6 style=\"float: right; margin-top:20px\">
                            <a href=\"https://www.facebook.com/profile.php?id=100088340186112\"
                               style=\"color: #fff\">facebook</a> |
                            <a href=\"https://www.linkedin.com/company/carlinbleu\" style=\"color: #fff\">linkedin</a>
                        </h6>
                    </div>
                ";
            }
            // line 2944
            yield "            </div>
        </div>
    </div>
";
        }
        // line 2948
        yield "
";
        // line 2949
        if (((isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () { throw new RuntimeError('Variable "tableau" does not exist.', 2949, $this->source); })()) == "B")) {
            // line 2950
            yield "    <div class=\"container\">
        <div class=\"row justify-content-center\" style=\"margin-top:60px\">
            ";
            // line 2952
            if ((($tmp =  !(isset($context["ismobile"]) || array_key_exists("ismobile", $context) ? $context["ismobile"] : (function () { throw new RuntimeError('Variable "ismobile" does not exist.', 2952, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 2953
                yield "                <div class=\"col-xl-3 col-md-3\">
                    <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\" style=\"width: 100%\">
                        <button class=\"btn bg-blue-grey text-white\"
                                style=\"color: #000;\">
                            GUIDE D'UTILISATION DE L'APPLICATION
                        </button>
                    </div>
                    <div class=\"card shadow mb-4\" id=\"client\" style=\"margin-top: 10px\">
                        <h6 class=\"text-left bg-pri col-white bolo600 bolderrer\"
                            style=\"width: 100%; padding: 10px; font-size:14px !important;\">MENU
                        </h6>
                        <div class=\"flex-shrink-0 p-3 bg-white\">
                            ";
                // line 2965
                if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitAdmin"]) || array_key_exists("droitAdmin", $context) ? $context["droitAdmin"] : (function () { throw new RuntimeError('Variable "droitAdmin" does not exist.', 2965, $this->source); })()), "actions", [], "any", false, false, false, 2965) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitAddBesoin"]) || array_key_exists("droitAddBesoin", $context) ? $context["droitAddBesoin"] : (function () { throw new RuntimeError('Variable "droitAddBesoin" does not exist.', 2965, $this->source); })()), "actions", [], "any", false, false, false, 2965) == "oui"))) {
                    // line 2966
                    yield "                                <div style=\"text-align:center\">
                                    <button onclick=\"modalBesoins();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\"> Saisir
                                        des besoins
                                    </button>
                                </div>
                            ";
                }
                // line 2973
                yield "                            <hr style=\"color: black\">
                            <ul class=\"list-unstyled ps-0\">
                                <li class=\"mb-1\">
                                    <button class=\"btn align-items-center rounded collapsed  col-black\"
                                            data-bs-toggle=\"collapse\" data-bs-target=\"#perso\" aria-expanded=\"false\"
                                            style=\"font-size: 14px\">
                                        <i class=\"fa fa-folder-open col-blue\" style=\"font-size: 14px\"></i> Gestion du
                                        Personnel
                                    </button>
                                    <div class=\"collapse\" id=\"perso\" style=\"\">
                                        <ul class=\"btn-toggle-nav list-unstyled fw-normal pb-1 small\">
                                            <li><a href=\"#\" onclick=\"shashar('personnel');\" class=\"link-dark rounded\"
                                                   style=\"font-size: 14px\">- Le Personnel</a></li>
                                            <li><a href=\"#\" onclick=\"shashar('chargespersonnelles');\"
                                                   class=\"link-dark rounded\" style=\"font-size: 14px\">- Charges du
                                                    Personnel</a></li>
                                            <li><a href=\"#\" onclick=\"shashar('chargesinternes');\"
                                                   class=\"link-dark rounded\" style=\"font-size: 14px\">- Charges
                                                    Internes</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class=\"mb-1\">
                                    <button class=\"btn align-items-center rounded collapsed  col-black\"
                                            data-bs-toggle=\"collapse\" data-bs-target=\"#tiers\" aria-expanded=\"false\"
                                            style=\"font-size: 14px\">
                                        <i class=\"fa fa-folder-open col-blue\" style=\"font-size: 14px\"></i> Relations
                                        Tiers
                                    </button>
                                    <div class=\"collapse\" id=\"tiers\">
                                        <ul class=\"btn-toggle-nav list-unstyled fw-normal pb-1 small\">
                                            <li><a href=\"#\" onclick=\"shashar('listeclient');\" class=\"link-dark rounded\"
                                                   style=\"font-size: 14px\">- La liste des clients</a></li>
                                            <li><a href=\"#\" onclick=\"shashar('fournisseur');\" class=\"link-dark rounded\"
                                                   style=\"font-size: 14px\">- Gestion des fournisseurs</a></li>
                                            <li><a href=\"#\" onclick=\"shashar('prestataire');\" class=\"link-dark rounded\"
                                                   style=\"font-size: 14px\">- Gestion des prestataires</a></li>
                                            <li><a href=\"#\" onclick=\"shashar('comptesclients');\"
                                                   class=\"link-dark rounded\" style=\"font-size: 14px\">- Créances
                                                    clients</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class=\"mb-1\">
                                    <button class=\"btn align-items-center rounded collapsed  col-black\"
                                            data-bs-toggle=\"collapse\" data-bs-target=\"#recap\" aria-expanded=\"false\"
                                            style=\"font-size: 14px\">
                                        <i class=\"fa fa-folder-open col-blue\" style=\"font-size: 14px\"></i> Recap des
                                        Chantiers
                                    </button>
                                    <div class=\"collapse\" id=\"recap\">
                                        <ul class=\"btn-toggle-nav list-unstyled fw-normal pb-1 small\">
                                            <li><a href=\"#\" onclick=\"shashar('budget');\" class=\"link-dark rounded\"
                                                   style=\"font-size: 14px\">- Charges prévisionnelles</a></li>
                                            <li><a href=\"#\" onclick=\"shashar('tresorerie');\" class=\"link-dark rounded\"
                                                   style=\"font-size: 14px\">- Trésorerie</a></li>
                                            <li><a href=\"#\" onclick=\"shashar('soldecompte');\" class=\"link-dark rounded\"
                                                   style=\"font-size: 14px\">- Etats financiers</a></li>
                                            <li><a href=\"#\" onclick=\"shashar('rapportchantier');\"
                                                   class=\"link-dark rounded\" style=\"font-size: 14px\">- Suivi de
                                                    chantiers</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class=\"mb-1\">
                                    <button class=\"btn align-items-center rounded collapsed col-black\"
                                            data-bs-toggle=\"collapse\" data-bs-target=\"#mato\" aria-expanded=\"false\"
                                            style=\"font-size: 14px\">
                                        <i class=\"fa fa-folder-open col-blue\" style=\"font-size: 14px\"></i> Matériels /
                                        Matériaux
                                    </button>
                                    <div class=\"collapse\" id=\"mato\">
                                        <ul class=\"btn-toggle-nav list-unstyled fw-normal pb-1 small\">
                                            <li><a href=\"#\" onclick=\"shashar('article');\" class=\"link-dark rounded\"
                                                   style=\"font-size: 14px\">- Matériels & matériaux</a></li>
                                            <li><a href=\"#\" onclick=\"shashar('materiel');\" class=\"link-dark rounded\"
                                                   style=\"font-size: 14px\">- Suivi du matériel</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class=\"border-top my-3\"></li>
                                <a href=\"";
                // line 3054
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listerbesoin", ["beso" => "oui", "tab" => (isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () { throw new RuntimeError('Variable "tableau" does not exist.', 3054, $this->source); })())]), "html", null, true);
                yield "\"
                                   class=\"btn align-items-center rounded col-blue bolo600\" style=\"font-size: 14px\">#
                                    Liste des besoins</a><br>
                                <a href=\"#\" onclick=\"shashar('documents');\"
                                   class=\"btn align-items-center rounded col-blue bolo600\"
                                   style=\"font-size: 14px; margin-top: -15px\"># Gestion des fichiers</a><br>
                                <a href=\"#\" onclick=\"shashar('planning');\"
                                   class=\"btn align-items-center rounded col-blue bolo600\"
                                   style=\"font-size: 14px; margin-top: -15px\"># Planning</a><br>
                                <a href=\"#\" onclick=\"shashar('message');\"
                                   class=\"btn align-items-center rounded col-blue bolo600\"
                                   style=\"font-size: 14px; margin-top: -15px\"># Messagerie</a><br>
                                <a href=\"#\" onclick=\"shashar('chat');\"
                                   class=\"btn align-items-center rounded col-blue bolo600\"
                                   style=\"font-size: 14px; margin-top: -15px\"># Chat</a><br>
                                <a href=\"#\" onclick=\"shashar('start');\"
                                   class=\"btn align-items-center rounded col-blue bolo600\"
                                   style=\"font-size: 14px; margin-top: -15px\"># Agenda</a><br>
                                <a href=\"#\" onclick=\"shashar('parametre');\"
                                   class=\"btn align-items-center rounded col-blue bolo600\"
                                   style=\"font-size: 14px; margin-top: -15px\"># Paramètres</a><br>
                                <a href=\"#\" onclick=\"shashar('historique');\"
                                   class=\"btn align-items-center rounded col-blue bolo600\"
                                   style=\"font-size: 14px; margin-top: -15px\"># Historique</a><br>
                                <a href=\"#\" onclick=\"shashar('corbeille');\"
                                   class=\"btn align-items-center rounded col-blue bolo600\"
                                   style=\"font-size: 14px; margin-top: -15px\"># Corbeille</a><br>
                            </ul>
                        </div>

                    </div>
                    <div class=\"card shadow mb-4\" id=\"client\">
                        <h6 class=\"text-left bg-pri col-white bolo600 bolderrer\"
                            style=\"width: 100%; padding: 10px; font-size:14px !important; margin-top: -10px\">ACTIONS
                            RAPIDES
                        </h6>
                        <div class=\"table-responsive\" style=\"padding: 10px; overflow-x: scroll; text-align:left\">
                            <p><a onclick=\"shashar('chantieretude');\" class=\"col-black\"
                                  style=\"font-weight: 500 !important;\">&raquo;
                                    Chantiers en étude</a></p>
                            <p><a onclick=\"shashar('chantiercours');\" class=\"col-black\"
                                  style=\"font-weight: 500 !important;\">&raquo;
                                    Chantiers en cours</a></p>
                            <p><a onclick=\"shashar('chantierechouer');\" class=\"col-black\"
                                  style=\"font-weight: 500 !important;\">&raquo;
                                    Chantiers échoués</a></p>
                            <p><a onclick=\"shashar('chantiersclotures');\" class=\"col-black\"
                                  style=\"font-weight: 500 !important;\">&raquo; Chantiers clôturés</a></p>
                            <p><a onclick=\"shashar('chantierstermines');\" class=\"col-black\"
                                  style=\"font-weight: 500 !important;\">&raquo; Chantiers terminés</a></p>
                            <hr>
                            <p>
                                ";
                // line 3106
                if ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitAdmin"]) || array_key_exists("droitAdmin", $context) ? $context["droitAdmin"] : (function () { throw new RuntimeError('Variable "droitAdmin" does not exist.', 3106, $this->source); })()), "actions", [], "any", false, false, false, 3106) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitComptable"]) || array_key_exists("droitComptable", $context) ? $context["droitComptable"] : (function () { throw new RuntimeError('Variable "droitComptable" does not exist.', 3106, $this->source); })()), "actions", [], "any", false, false, false, 3106) == "oui")) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitAddDevis"]) || array_key_exists("droitAddDevis", $context) ? $context["droitAddDevis"] : (function () { throw new RuntimeError('Variable "droitAddDevis" does not exist.', 3106, $this->source); })()), "actions", [], "any", false, false, false, 3106) == "oui"))) {
                    // line 3107
                    yield "                                    <a href=\"#\" onclick=\"modalDevis();\" class=\"col-black\"
                                       style=\"font-weight: 500 !important;\">&raquo;
                                        Créer un Devis</a>
                                ";
                } else {
                    // line 3111
                    yield "                                    <a class=\"col-blue-grey\" style=\"font-weight: 500 !important;\">&raquo; Créer un
                                        Devis</a>
                                ";
                }
                // line 3114
                yield "                            </p>
                            <p><a onclick=\"modalDecompte();\" class=\"col-black\" style=\"font-weight: 500 !important;\">&raquo;
                                    Créer un Décompte</a></p>
                            <p><a onclick=\"modalFacture();\" class=\"col-black\" style=\"font-weight: 500 !important;\">&raquo;
                                    Créer
                                    une Facture</a></p>
                            <p><a onclick=\"modalReglement();\" class=\"col-black\" style=\"font-weight: 500 !important;\">&raquo;
                                    Faire un Règlement</a></p>
                            <hr>
                            <p><a onclick=\"modalPrestataire();\" class=\"col-black\" style=\"font-weight: 500 !important;\">&raquo;
                                    Ajouter un Prestataire</a></p>
                            <p><a onclick=\"modalFournisseur();\" class=\"col-black\" style=\"font-weight: 500 !important;\">&raquo;
                                    Ajouter un Fournisseur</a></p>
                            <p><a onclick=\"modalBonPrestataire();\" class=\"col-black\"
                                  style=\"font-weight: 500 !important;\">&raquo;
                                    Créer un Bon Prestataire</a></p>
                            <p><a onclick=\"modalBonFournisseur();\" class=\"col-black\"
                                  style=\"font-weight: 500 !important;\">&raquo;
                                    Faire un Bon Fournisseur</a></p>
                            <p><a onclick=\"modalPaiePrestataire();\" class=\"col-black\"
                                  style=\"font-weight: 500 !important;\">&raquo;
                                    Paie Prestataire</a></p>
                            <p><a onclick=\"modalPaieFournisseur();\" class=\"col-black\"
                                  style=\"font-weight: 500 !important;\">&raquo;
                                    Paie Fournisseur</a></p>
                        </div>

                    </div>
                    <div class=\"card shadow mb-4\" id=\"client\">
                        <h6 class=\"text-left bg-pri col-white bolo600 bolderrer\"
                            style=\"width: 100%; padding: 10px; font-size:14px !important;\">EXCERCICES COMPTABLES
                        </h6>
                        <div class=\"table-responsive\" style=\"padding: 10px; overflow-x: scroll; text-align:center\">
                            <button onclick=\"modalExercices();\" class=\"btn\" type=\"button\"
                                    style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\"> Créer des
                                exercices comptables
                            </button>
                        </div>
                        <div style=\"padding-left: 10px; overflow-x: scroll; text-align:left\">
                            <h6 class=\"text-left\">
                                <table style=\"width: 100%\">
                                    ";
                // line 3155
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["exercices"]) || array_key_exists("exercices", $context) ? $context["exercices"] : (function () { throw new RuntimeError('Variable "exercices" does not exist.', 3155, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["exer"]) {
                    // line 3156
                    yield "                                        ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["exer"], "corbeille", [], "any", false, false, false, 3156))) {
                        // line 3157
                        yield "                                            <tr>
                                                <td><a href=\"#\" onclick=\"shashar('exercices/";
                        // line 3158
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["exer"], "id", [], "any", false, false, false, 3158), "html", null, true);
                        yield "');\"
                                                       style=\"font-size:15px !important; font-weight:normal\"
                                                       class=\"col-black\"># ";
                        // line 3160
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["exer"], "exercice", [], "any", false, false, false, 3160), "html", null, true);
                        yield "</a>
                                                    <br>
                                                    <span>
                                            <a href=\"#\" onclick=\"shashar('exercices/";
                        // line 3163
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["exer"], "id", [], "any", false, false, false, 3163), "html", null, true);
                        yield "');\"
                                               style=\"font-size:14px !important; font-weight:normal\"
                                               class=\"col-pink bolo600\">Du: ";
                        // line 3165
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["exer"], "debut", [], "any", false, false, false, 3165), "d-m-Y"), "html", null, true);
                        yield " | Au: ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["exer"], "fin", [], "any", false, false, false, 3165), "d-m-Y"), "html", null, true);
                        yield "
                                            </a>
                                        </span>
                                                </td>
                                                <td class=\"text-right nowrape\">
                                                    <button style=\"border-color: #b2becc; border-style: none\"
                                                            class=\"editexer\" id=\"";
                        // line 3171
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["exer"], "id", [], "any", false, false, false, 3171), "html", null, true);
                        yield "\"><i
                                                                class=\"fa fa-edit col-green\"
                                                                style=\"font-size: 16px\"></i></button>
                                                    <button style=\"border-color: #b2becc ; border-style: none\"
                                                            class=\"delexer\" id=\"";
                        // line 3175
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["exer"], "id", [], "any", false, false, false, 3175), "html", null, true);
                        yield "\"><i
                                                                class=\"fa fa-trash col-pink\"
                                                                style=\"font-size: 16px\"></i></button>
                                                </td>
                                            </tr>
                                        ";
                    }
                    // line 3181
                    yield "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['exer'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 3182
                yield "                                </table>
                            </h6>
                        </div>
                    </div>
                    <div class=\"card shadow mb-4\" id=\"client\" style=\"height: 400px\">
                        <h6 class=\"text-left bg-pri col-white bolo600 bolderrer\"
                            style=\"width: 100%; padding: 10px; font-size:14px !important;\">BESOINS ARCHIVÉS
                        </h6>
                        <div style=\"padding: 10px; overflow-x: scroll;\">
                            ";
                // line 3191
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["besoins"]) || array_key_exists("besoins", $context) ? $context["besoins"] : (function () { throw new RuntimeError('Variable "besoins" does not exist.', 3191, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["beso"]) {
                    // line 3192
                    yield "                                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "etat", [], "any", false, false, false, 3192) == "archiver")) {
                        // line 3193
                        yield "                                    <div class=\"shadow p-3 bg-body rounded\">
                                        <h6>
                                            <span class=\"col-black bolo700\">De: ";
                        // line 3195
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "dobyuser", [], "any", false, false, false, 3195), "nom", [], "any", false, false, false, 3195), "html", null, true);
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "dobyuser", [], "any", false, false, false, 3195), "prenoms", [], "any", false, false, false, 3195), "html", null, true);
                        yield "</span>
                                        </h6>
                                        <hr style=\"margin-top: -10px\">
                                        <h6 class=\"text-left\">
                                            <b><u>Client:</u> </b> ";
                        // line 3199
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "chantier", [], "any", false, false, false, 3199), "client", [], "any", false, false, false, 3199), "nomclient", [], "any", false, false, false, 3199), "html", null, true);
                        yield "<br>
                                            <b><u>Chantier:</u> </b> ";
                        // line 3200
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "chantier", [], "any", false, false, false, 3200), "nomchantier", [], "any", false, false, false, 3200), "html", null, true);
                        yield "<br>
                                            <b><u>Fichiers:</u> </b><br>
                                            ";
                        // line 3202
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "fichiers", [], "any", false, false, false, 3202));
                        foreach ($context['_seq'] as $context["_key"] => $context["fichier"]) {
                            // line 3203
                            yield "                                                # <a href=\"/";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "folde", [], "any", false, false, false, 3203), "html", null, true);
                            yield "/";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "nomfichier", [], "any", false, false, false, 3203), "html", null, true);
                            yield "\"
                                                     class=\"col-blue\" style=\"font-weight: 600\"
                                                     target=\"_blank\">";
                            // line 3205
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "nomfichier", [], "any", false, false, false, 3205), "html", null, true);
                            yield "</a><br>
                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['fichier'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 3207
                        yield "                                            <br>
                                            ";
                        // line 3208
                        yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "besoin", [], "any", false, false, false, 3208));
                        yield "<br><br>
                                            Fait
                                            le: ";
                        // line 3210
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "date", [], "any", false, false, false, 3210), "d-m-Y H:i"), "html", null, true);
                        yield "
                                        </h6>
                                        ";
                        // line 3212
                        if ((((isset($context["estmaster"]) || array_key_exists("estmaster", $context) ? $context["estmaster"] : (function () { throw new RuntimeError('Variable "estmaster" does not exist.', 3212, $this->source); })()) == true) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitAdmin"]) || array_key_exists("droitAdmin", $context) ? $context["droitAdmin"] : (function () { throw new RuntimeError('Variable "droitAdmin" does not exist.', 3212, $this->source); })()), "actions", [], "any", false, false, false, 3212) == "oui"))) {
                            // line 3213
                            yield "                                            <div style=\"float: right; margin-top: 10px\">
                                                <a href=\"#\" class=\"besomessage\" id=\"";
                            // line 3214
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "id", [], "any", false, false, false, 3214), "html", null, true);
                            yield "\" title=\"MESSAGE\"
                                                   style=\"margin-right: 5px\"><i
                                                            class=\"fa fa-message col-orange\"></i></a>
                                                <a href=\"#\" class=\"besorelancer\" id=\"";
                            // line 3217
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "id", [], "any", false, false, false, 3217), "html", null, true);
                            yield "\" title=\"RELANCER\"><i
                                                            class=\"fa fa-repeat col-blue\"></i></a>
                                            </div>
                                        ";
                        }
                        // line 3221
                        yield "                                        <br><br>
                                    </div>
                                ";
                    }
                    // line 3224
                    yield "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['beso'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 3225
                yield "                        </div>
                    </div>
                </div>
                <div class=\"col-xl-9 col-md-9\">
                    <h3 class=\"tet text-white text-center font-weight-bold\">CARLINBLEU - GESTION DES CHANTIERS</h3>
                    <h5 class=\"text-center\" style=\"color:#efd807; \">
                        Bienvenue ";
                // line 3231
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3231, $this->source); })()), "user", [], "any", false, false, false, 3231), "nom", [], "any", false, false, false, 3231)), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3231, $this->source); })()), "user", [], "any", false, false, false, 3231), "prenoms", [], "any", false, false, false, 3231)), "html", null, true);
                yield " </h5>
                    <section class=\"features-icons  text-center\" style=\"padding: 0 !important; margin-top: 30px\">

                        <div id=\"notif\" class=\"notification hider\">
                            <div class=\"notification-header\">
                                <h3 class=\"notification-title col-pink bolo700\"><u id=\"atitre\"></u></h3>
                            </div>
                            <div class=\"notification-container\">
                                <div class=\"notification-media\">
                                    <i class=\"btn material-icons notification-user-avatar\"
                                       style=\"font-size: 60px !important; color: #E91E63 !important; font-weight: bold !important;\">report</i>
                                </div>
                                <div class=\"notification-content\" id=\"acontent\"></div>
                                <br>
                            </div>
                        </div>

                        <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\"
                             style=\"margin-top: 10px !important\">
                            <a href=\"";
                // line 3250
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tableaudebord", ["tab" => "A"]);
                yield "\" class=\"btn\"
                               style=\"background-color: #fff; color: #000; margin-right: 10px\">
                                TABLEAU DE BORD A
                            </a>
                            <a href=\"";
                // line 3254
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tableaudebord", ["tab" => "B"]);
                yield "\" class=\"btn\"
                               style=\"background-color: #fff; color: #000;\">
                                TABLEAU DE BORD B
                            </a>
                        </div>
                        <br>
                        ";
                // line 3260
                if (((isset($context["besa"]) || array_key_exists("besa", $context) ? $context["besa"] : (function () { throw new RuntimeError('Variable "besa" does not exist.', 3260, $this->source); })()) == null)) {
                    // line 3261
                    yield "                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\"
                                 style=\"margin-top: 10px !important\">
                                <button type=\"button\" ";
                    // line 3263
                    if (((isset($context["checkMaster"]) || array_key_exists("checkMaster", $context) ? $context["checkMaster"] : (function () { throw new RuntimeError('Variable "checkMaster" does not exist.', 3263, $this->source); })()) == "oui")) {
                        yield " onclick=\"shasharo();\" ";
                    }
                    // line 3264
                    yield "                                        class=\"btn\"
                                        style=\"background-color: #754cea; color: #FFF; margin-right: 5px\">
                                    NUMÉROTATIONS
                                </button>
                                <button onclick=\"shashares();\" class=\"btn\" ∑
                                        style=\"background-color: #e86c20; color: #FFF; margin-right: 5px \">
                                    RECHERCHER
                                </button>
                                <button onclick=\"shashar('travauxjour');\" class=\"btn\"
                                        style=\"background-color: #03A9F4FF; color: #FFF; margin-right: 5px \">
                                    TRAVAUX DU JOUR
                                </button>
                                <a href=\"";
                    // line 3276
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
                    yield "\" class=\"btn\"
                                   style=\"background-color: #d63232; color: #FFF\">
                                    SE DÉCONNECTER
                                </a>
                            </div>
                            <div class=\"container\" style=\"padding: 0 !important;\">
                                <br>
                                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\"
                                     style=\"margin-top: 10px !important\">
                                    ";
                    // line 3285
                    if ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitAdmin"]) || array_key_exists("droitAdmin", $context) ? $context["droitAdmin"] : (function () { throw new RuntimeError('Variable "droitAdmin" does not exist.', 3285, $this->source); })()), "actions", [], "any", false, false, false, 3285) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitComptable"]) || array_key_exists("droitComptable", $context) ? $context["droitComptable"] : (function () { throw new RuntimeError('Variable "droitComptable" does not exist.', 3285, $this->source); })()), "actions", [], "any", false, false, false, 3285) == "oui")) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitAddClient"]) || array_key_exists("droitAddClient", $context) ? $context["droitAddClient"] : (function () { throw new RuntimeError('Variable "droitAddClient" does not exist.', 3285, $this->source); })()), "actions", [], "any", false, false, false, 3285) == "oui"))) {
                        // line 3286
                        yield "                                        <button onclick=\"modalClient();\" class=\"btn\" type=\"button\"
                                                style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px; margin-right:10px\">
                                            AJOUTER UN CLIENT
                                        </button>
                                    ";
                    } else {
                        // line 3291
                        yield "                                        <button class=\"btn bg-blue-grey col-white\" type=\"button\"
                                                style=\"font-size: 13px; margin-right:10px\">
                                            AJOUTER UN CLIENT
                                        </button>
                                    ";
                    }
                    // line 3296
                    yield "                                    ";
                    if ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitAdmin"]) || array_key_exists("droitAdmin", $context) ? $context["droitAdmin"] : (function () { throw new RuntimeError('Variable "droitAdmin" does not exist.', 3296, $this->source); })()), "actions", [], "any", false, false, false, 3296) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitComptable"]) || array_key_exists("droitComptable", $context) ? $context["droitComptable"] : (function () { throw new RuntimeError('Variable "droitComptable" does not exist.', 3296, $this->source); })()), "actions", [], "any", false, false, false, 3296) == "oui")) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitAddChantier"]) || array_key_exists("droitAddChantier", $context) ? $context["droitAddChantier"] : (function () { throw new RuntimeError('Variable "droitAddChantier" does not exist.', 3296, $this->source); })()), "actions", [], "any", false, false, false, 3296) == "oui"))) {
                        // line 3297
                        yield "                                        <button onclick=\"modalChantier();\" class=\"btn\" type=\"button\"
                                                style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">
                                            AJOUTER UN CHANTIER
                                        </button>
                                    ";
                    } else {
                        // line 3302
                        yield "                                        <button class=\"btn bg-blue-grey col-white\" type=\"button\"
                                                style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">
                                            AJOUTER UN CHANTIER
                                        </button>
                                    ";
                    }
                    // line 3307
                    yield "                                </div>
                                <br>
                                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\">
                                    <input type=\"text\" id=\"recheclient\" placeholder=\"Rechercher un Client\"
                                           style=\"color: #FFF\">
                                </div>
                                <br><br>
                                <div class=\"row\" style='margin:10px 0 15px 0;' id=\"chantierdiv\">

                                </div>
                                <div class=\"row\" style='margin:10px 0 15px 0;'>
                                    <h6 style=\"float: left; color: #fff; margin-top:20px\">©Carlinbleu. All rights
                                        reserved.</h6>
                                    <h6 style=\"float: right; margin-top:20px\">
                                        <a href=\"https://www.facebook.com/profile.php?id=100088340186112\"
                                           style=\"color: #fff\">facebook</a> |
                                        <a href=\"https://www.linkedin.com/company/carlinbleu\" style=\"color: #fff\">linkedin</a>
                                    </h6>
                                </div>
                            </div>
                        ";
                } else {
                    // line 3328
                    yield "                            <div class=\"container\" style=\"margin-top: 20px\">
                                <div class=\"row\">
                                    ";
                    // line 3330
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["besoins"]) || array_key_exists("besoins", $context) ? $context["besoins"] : (function () { throw new RuntimeError('Variable "besoins" does not exist.', 3330, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["beso"]) {
                        // line 3331
                        yield "                                        ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "etat", [], "any", false, false, false, 3331) != "archiver")) {
                            // line 3332
                            yield "                                            <div class=\"shadow bg-body rounded col-md-4\"
                                                    ";
                            // line 3333
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "etat", [], "any", false, false, false, 3333) == "valider")) {
                                yield " style=\"border:2px solid #3d7318 !important; margin-bottom: 10px\"";
                            }
                            // line 3334
                            yield "                                                    ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "etat", [], "any", false, false, false, 3334) == "urgent")) {
                                yield " style=\"border:2px solid #f00 !important; margin-bottom: 10px\"";
                            }
                            // line 3335
                            yield "                                                    ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "etat", [], "any", false, false, false, 3335) == "rappel")) {
                                yield " style=\"border:2px solid #86bfe3 !important; margin-bottom: 10px\"";
                            }
                            // line 3336
                            yield "                                                    ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "etat", [], "any", false, false, false, 3336) == "cloturer")) {
                                yield " style=\"border:2px solid #a1adb5 !important; margin-bottom: 10px\"";
                            }
                            // line 3337
                            yield "                                            >
                                                <div style=\"text-align: left !important; padding: 5px; background-color: #d9dfe6; margin-top: 10px\">
                                                    <span class=\"col-black bolo700\">De: ";
                            // line 3339
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "dobyuser", [], "any", false, false, false, 3339), "nom", [], "any", false, false, false, 3339), "html", null, true);
                            yield " ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "dobyuser", [], "any", false, false, false, 3339), "prenoms", [], "any", false, false, false, 3339), "html", null, true);
                            yield "</span>
                                                </div>
                                                <br><br>
                                                <h6 style=\"float: right; margin-top: -30px\">Statut:
                                                    ";
                            // line 3343
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "etat", [], "any", false, false, false, 3343) == "urgent")) {
                                yield "<span
                                                            class=\"col-pink bolo700\">[ URGENT ] </span>";
                            }
                            // line 3345
                            yield "                                                    ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "etat", [], "any", false, false, false, 3345) == "valider")) {
                                yield "<span
                                                            class=\"bolo700 col-green\">[ À VALIDER ]</span>";
                            }
                            // line 3347
                            yield "                                                    ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "etat", [], "any", false, false, false, 3347) == "rappel")) {
                                yield "<span
                                                            class=\"bolo700 col-blue\">[ RAPPEL ]</span>";
                            }
                            // line 3349
                            yield "                                                    ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "etat", [], "any", false, false, false, 3349) == "cloturer")) {
                                yield "<span
                                                            class=\"bolo700 col-blue-grey\">[ CLÔTURER ]</span>";
                            }
                            // line 3351
                            yield "                                                </h6>
                                                <h6 style=\"text-align: left\">
                                                    <b><u>Client:</u> </b> ";
                            // line 3353
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "chantier", [], "any", false, false, false, 3353), "client", [], "any", false, false, false, 3353), "nomclient", [], "any", false, false, false, 3353), "html", null, true);
                            yield "<br>
                                                    <b><u>Chantier:</u> </b> ";
                            // line 3354
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "chantier", [], "any", false, false, false, 3354), "nomchantier", [], "any", false, false, false, 3354), "html", null, true);
                            yield "<br>
                                                    <b><u>Fichiers:</u> </b><br>
                                                    ";
                            // line 3356
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "fichiers", [], "any", false, false, false, 3356));
                            foreach ($context['_seq'] as $context["_key"] => $context["fichier"]) {
                                // line 3357
                                yield "                                                        # <a href=\"/";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "folde", [], "any", false, false, false, 3357), "html", null, true);
                                yield "/";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "nomfichier", [], "any", false, false, false, 3357), "html", null, true);
                                yield "\"
                                                             class=\"col-blue\" style=\"font-weight: 600\"
                                                             target=\"_blank\">";
                                // line 3359
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "nomfichier", [], "any", false, false, false, 3359), "html", null, true);
                                yield "</a><br>
                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['fichier'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 3361
                            yield "                                                    <br>
                                                    ";
                            // line 3362
                            yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "besoin", [], "any", false, false, false, 3362));
                            yield "<br><br>
                                                    Fait
                                                    le: ";
                            // line 3364
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "date", [], "any", false, false, false, 3364), "d-m-Y H:i"), "html", null, true);
                            yield "
                                                </h6>


                                                ";
                            // line 3368
                            if ((((isset($context["estmaster"]) || array_key_exists("estmaster", $context) ? $context["estmaster"] : (function () { throw new RuntimeError('Variable "estmaster" does not exist.', 3368, $this->source); })()) == false) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitAdmin"]) || array_key_exists("droitAdmin", $context) ? $context["droitAdmin"] : (function () { throw new RuntimeError('Variable "droitAdmin" does not exist.', 3368, $this->source); })()), "actions", [], "any", false, false, false, 3368) == "non"))) {
                                // line 3369
                                yield "                                                    <div style=\"float: right; margin-top: 10px\">
                                                        ";
                                // line 3370
                                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitCommenterBesoin"]) || array_key_exists("droitCommenterBesoin", $context) ? $context["droitCommenterBesoin"] : (function () { throw new RuntimeError('Variable "droitCommenterBesoin" does not exist.', 3370, $this->source); })()), "actions", [], "any", false, false, false, 3370) == "oui")) {
                                    // line 3371
                                    yield "                                                            <a href=\"#\" class=\"besomessage\" id=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "id", [], "any", false, false, false, 3371), "html", null, true);
                                    yield "\"
                                                               title=\"MESSAGE\"
                                                               style=\"margin-right: 5px\"><i
                                                                        class=\"fa fa-message col-orange\"></i></a>
                                                        ";
                                }
                                // line 3376
                                yield "                                                        ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitCloturerBesoin"]) || array_key_exists("droitCloturerBesoin", $context) ? $context["droitCloturerBesoin"] : (function () { throw new RuntimeError('Variable "droitCloturerBesoin" does not exist.', 3376, $this->source); })()), "actions", [], "any", false, false, false, 3376) == "oui")) {
                                    // line 3377
                                    yield "                                                            <a href=\"#\" class=\"besocloturer\" id=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "id", [], "any", false, false, false, 3377), "html", null, true);
                                    yield "\"
                                                               title=\"CLÔTURER\"
                                                               style=\"margin-right: 5px\"><i
                                                                        class=\"fa fa-check-square col-blue\"></i></a>
                                                        ";
                                }
                                // line 3382
                                yield "                                                        ";
                                if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitModifierBesoin"]) || array_key_exists("droitModifierBesoin", $context) ? $context["droitModifierBesoin"] : (function () { throw new RuntimeError('Variable "droitModifierBesoin" does not exist.', 3382, $this->source); })()), "actions", [], "any", false, false, false, 3382) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3382, $this->source); })()), "user", [], "any", false, false, false, 3382), "id", [], "any", false, false, false, 3382) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "dobyuser", [], "any", false, false, false, 3382), "id", [], "any", false, false, false, 3382)))) {
                                    // line 3383
                                    yield "                                                            <a href=\"#\" class=\"besoedit\" id=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "id", [], "any", false, false, false, 3383), "html", null, true);
                                    yield "\"
                                                               title=\"MODIFIER\"
                                                               style=\"margin-right: 5px\"><i
                                                                        class=\"fa fa-edit col-green\"></i></a>
                                                        ";
                                }
                                // line 3388
                                yield "                                                        ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitSupprimerBesoin"]) || array_key_exists("droitSupprimerBesoin", $context) ? $context["droitSupprimerBesoin"] : (function () { throw new RuntimeError('Variable "droitSupprimerBesoin" does not exist.', 3388, $this->source); })()), "actions", [], "any", false, false, false, 3388) == "oui")) {
                                    // line 3389
                                    yield "                                                            <a href=\"#\" class=\"besodel\" id=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "id", [], "any", false, false, false, 3389), "html", null, true);
                                    yield "\"
                                                               title=\"SUPPRIMER\"><i
                                                                        class=\"fa fa-trash col-pink\"></i></a>
                                                        ";
                                }
                                // line 3393
                                yield "                                                    </div>
                                                ";
                            }
                            // line 3395
                            yield "                                                ";
                            if ((((isset($context["estmaster"]) || array_key_exists("estmaster", $context) ? $context["estmaster"] : (function () { throw new RuntimeError('Variable "estmaster" does not exist.', 3395, $this->source); })()) == true) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitAdmin"]) || array_key_exists("droitAdmin", $context) ? $context["droitAdmin"] : (function () { throw new RuntimeError('Variable "droitAdmin" does not exist.', 3395, $this->source); })()), "actions", [], "any", false, false, false, 3395) == "oui"))) {
                                // line 3396
                                yield "                                                    <div style=\"float: right; margin-top: 10px\">
                                                        <a href=\"#\" class=\"besomessage\" id=\"";
                                // line 3397
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "id", [], "any", false, false, false, 3397), "html", null, true);
                                yield "\"
                                                           title=\"MESSAGE\"
                                                           style=\"margin-right: 5px\"><i
                                                                    class=\"fa fa-message col-orange\"></i></a>
                                                        <a href=\"#\" class=\"besocloturer\" id=\"";
                                // line 3401
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "id", [], "any", false, false, false, 3401), "html", null, true);
                                yield "\"
                                                           title=\"CLÔTURER\"
                                                           style=\"margin-right: 5px\"><i
                                                                    class=\"fa fa-check-square col-blue\"></i></a>
                                                        <a href=\"#\" class=\"besoedit\" id=\"";
                                // line 3405
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "id", [], "any", false, false, false, 3405), "html", null, true);
                                yield "\" title=\"MODIFIER\"
                                                           style=\"margin-right: 5px\"><i
                                                                    class=\"fa fa-edit col-green\"></i></a>
                                                        <a href=\"#\" class=\"besoarchiver\" id=\"";
                                // line 3408
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "id", [], "any", false, false, false, 3408), "html", null, true);
                                yield "\"
                                                           title=\"ARCHIVER\"
                                                           style=\"margin-right: 5px\"><i
                                                                    class=\"fa fa-folder col-blue-grey\"></i></a>
                                                        <a href=\"#\" class=\"besodel\" id=\"";
                                // line 3412
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "id", [], "any", false, false, false, 3412), "html", null, true);
                                yield "\"
                                                           title=\"SUPPRIMER\"><i
                                                                    class=\"fa fa-trash col-pink\"></i></a>
                                                    </div>
                                                ";
                            }
                            // line 3417
                            yield "                                                <br><br>
                                            </div>
                                        ";
                        }
                        // line 3420
                        yield "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['beso'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 3421
                    yield "                                </div>
                            </div>
                        ";
                }
                // line 3424
                yield "                    </section>
                </div>
            ";
            } else {
                // line 3427
                yield "                <div class=\"col-xl-9 col-md-9\">
                    <h3 class=\"tet text-white text-center font-weight-bold\">CARLINBLEU - GESTION DES CHANTIERS</h3>
                    <h5 class=\"text-center\" style=\"color:#efd807; \">
                        Bienvenue ";
                // line 3430
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3430, $this->source); })()), "user", [], "any", false, false, false, 3430), "nom", [], "any", false, false, false, 3430)), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3430, $this->source); })()), "user", [], "any", false, false, false, 3430), "prenoms", [], "any", false, false, false, 3430)), "html", null, true);
                yield " </h5>
                    <section class=\"features-icons  text-center\" style=\"padding: 0 !important; margin-top: 30px\">

                        <div id=\"notif\" class=\"notification hider\">
                            <div class=\"notification-header\">
                                <h3 class=\"notification-title col-pink bolo700\"><u id=\"atitre\"></u></h3>
                            </div>
                            <div class=\"notification-container\">
                                <div class=\"notification-media\">
                                    <i class=\"btn material-icons notification-user-avatar\"
                                       style=\"font-size: 60px !important; color: #E91E63 !important; font-weight: bold !important;\">report</i>
                                </div>
                                <div class=\"notification-content\" id=\"acontent\"></div>
                                <br>
                            </div>
                        </div>

                        <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\"
                             style=\"margin-top: 10px !important\">
                            <a href=\"";
                // line 3449
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tableaudebord", ["tab" => "A"]);
                yield "\" class=\"btn\"
                               style=\"background-color: #fff; color: #000; margin-right: 5px\">
                                TABLEAU DE BORD A
                            </a>
                            <a href=\"";
                // line 3453
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tableaudebord", ["tab" => "B"]);
                yield "\" class=\"btn\"
                               style=\"background-color: #fff; color: #000;\">
                                TABLEAU DE BORD B
                            </a>
                        </div>
                        <br>
                        ";
                // line 3459
                if (((isset($context["besa"]) || array_key_exists("besa", $context) ? $context["besa"] : (function () { throw new RuntimeError('Variable "besa" does not exist.', 3459, $this->source); })()) == null)) {
                    // line 3460
                    yield "                            <div aria-label=\"Basic examples\" style=\"margin-top: 10px !important\">
                                <button type=\"button\" ";
                    // line 3461
                    if (((isset($context["checkMaster"]) || array_key_exists("checkMaster", $context) ? $context["checkMaster"] : (function () { throw new RuntimeError('Variable "checkMaster" does not exist.', 3461, $this->source); })()) == "oui")) {
                        yield " onclick=\"shasharo();\" ";
                    }
                    // line 3462
                    yield "                                        class=\"btn\"
                                        style=\"background-color: #754cea; color: #FFF; margin-right: 5px; width: 150px\">
                                    NUMÉROTATIONS
                                </button>
                                <button onclick=\"shashares();\" class=\"btn\"
                                        style=\"background-color: #e86c20; color: #FFF; width: 150px\">
                                    RECHERCHER
                                </button>
                                <button onclick=\"shashar('travauxjour');\" class=\"btn\"
                                        style=\"background-color: #03A9F4FF; color: #FFF;  margin-right: 5px; width: 150px\">
                                    TRAVAUX DU JOUR
                                </button>
                                <a href=\"";
                    // line 3474
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
                    yield "\" class=\"btn\"
                                   style=\"background-color: #d63232; color: #FFF; width: 150px\">
                                    SE DÉCONNECTER
                                </a>
                            </div>
                            <div class=\"container\" style=\"padding: 0 !important;\">
                                <br>
                                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\"
                                     style=\"margin-top: 10px !important\">
                                    ";
                    // line 3483
                    if ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitAdmin"]) || array_key_exists("droitAdmin", $context) ? $context["droitAdmin"] : (function () { throw new RuntimeError('Variable "droitAdmin" does not exist.', 3483, $this->source); })()), "actions", [], "any", false, false, false, 3483) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitComptable"]) || array_key_exists("droitComptable", $context) ? $context["droitComptable"] : (function () { throw new RuntimeError('Variable "droitComptable" does not exist.', 3483, $this->source); })()), "actions", [], "any", false, false, false, 3483) == "oui")) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitAddClient"]) || array_key_exists("droitAddClient", $context) ? $context["droitAddClient"] : (function () { throw new RuntimeError('Variable "droitAddClient" does not exist.', 3483, $this->source); })()), "actions", [], "any", false, false, false, 3483) == "oui"))) {
                        // line 3484
                        yield "                                        <button onclick=\"modalClient();\" class=\"btn\" type=\"button\"
                                                style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px; margin-right:10px\">
                                            AJOUTER UN CLIENT
                                        </button>
                                    ";
                    } else {
                        // line 3489
                        yield "                                        <button class=\"btn bg-blue-grey col-white\" type=\"button\"
                                                style=\"font-size: 13px; margin-right:10px\">
                                            AJOUTER UN CLIENT
                                        </button>
                                    ";
                    }
                    // line 3494
                    yield "                                    ";
                    if ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitAdmin"]) || array_key_exists("droitAdmin", $context) ? $context["droitAdmin"] : (function () { throw new RuntimeError('Variable "droitAdmin" does not exist.', 3494, $this->source); })()), "actions", [], "any", false, false, false, 3494) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitComptable"]) || array_key_exists("droitComptable", $context) ? $context["droitComptable"] : (function () { throw new RuntimeError('Variable "droitComptable" does not exist.', 3494, $this->source); })()), "actions", [], "any", false, false, false, 3494) == "oui")) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitAddChantier"]) || array_key_exists("droitAddChantier", $context) ? $context["droitAddChantier"] : (function () { throw new RuntimeError('Variable "droitAddChantier" does not exist.', 3494, $this->source); })()), "actions", [], "any", false, false, false, 3494) == "oui"))) {
                        // line 3495
                        yield "                                        <button onclick=\"modalChantier();\" class=\"btn\" type=\"button\"
                                                style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">
                                            AJOUTER UN CHANTIER
                                        </button>
                                    ";
                    } else {
                        // line 3500
                        yield "                                        <button class=\"btn bg-blue-grey col-white\" type=\"button\"
                                                style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">
                                            AJOUTER UN CHANTIER
                                        </button>
                                    ";
                    }
                    // line 3505
                    yield "                                </div>
                                <br>
                                ";
                    // line 3507
                    if ((($tmp =  !(isset($context["ismobile"]) || array_key_exists("ismobile", $context) ? $context["ismobile"] : (function () { throw new RuntimeError('Variable "ismobile" does not exist.', 3507, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 3508
                        yield "                                    <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\">
                                        <input type=\"text\" id=\"recheclient\" placeholder=\"Rechercher un Client\"
                                               style=\"color: #FFF\">
                                    </div>
                                    <br><br>
                                    <div class=\"row\" style='margin:10px 0 15px 0;' id=\"chantierdiv\">

                                    </div>
                                    <div class=\"row\" style='margin:10px 0 15px 0;'>
                                        <h6 style=\"float: left; color: #fff; margin-top:20px\">©Carlinbleu. All rights
                                            reserved.</h6>
                                        <h6 style=\"float: right; margin-top:20px\">
                                            <a href=\"https://www.facebook.com/profile.php?id=100088340186112\"
                                               style=\"color: #fff\">facebook</a> |
                                            <a href=\"https://www.linkedin.com/company/carlinbleu\" style=\"color: #fff\">linkedin</a>
                                        </h6>
                                    </div>
                                ";
                    }
                    // line 3526
                    yield "                            </div>
                        ";
                } else {
                    // line 3528
                    yield "                            <div class=\"container\" style=\"margin-top: 20px\">
                                <div class=\"row\">
                                    ";
                    // line 3530
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["besoins"]) || array_key_exists("besoins", $context) ? $context["besoins"] : (function () { throw new RuntimeError('Variable "besoins" does not exist.', 3530, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["beso"]) {
                        // line 3531
                        yield "                                        ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "etat", [], "any", false, false, false, 3531) != "archiver")) {
                            // line 3532
                            yield "                                            <div class=\"shadow bg-body rounded col-md-4\"
                                                    ";
                            // line 3533
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "etat", [], "any", false, false, false, 3533) == "valider")) {
                                yield " style=\"border:2px solid #3d7318 !important; margin-bottom: 10px\"";
                            }
                            // line 3534
                            yield "                                                    ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "etat", [], "any", false, false, false, 3534) == "urgent")) {
                                yield " style=\"border:2px solid #f00 !important; margin-bottom: 10px\"";
                            }
                            // line 3535
                            yield "                                                    ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "etat", [], "any", false, false, false, 3535) == "rappel")) {
                                yield " style=\"border:2px solid #86bfe3 !important; margin-bottom: 10px\"";
                            }
                            // line 3536
                            yield "                                                    ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "etat", [], "any", false, false, false, 3536) == "cloturer")) {
                                yield " style=\"border:2px solid #a1adb5 !important; margin-bottom: 10px\"";
                            }
                            // line 3537
                            yield "                                            >
                                                <div style=\"text-align: left !important; padding: 5px; background-color: #d9dfe6; margin-top: 10px\">
                                                    <span class=\"col-black bolo700\">De: ";
                            // line 3539
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "dobyuser", [], "any", false, false, false, 3539), "nom", [], "any", false, false, false, 3539), "html", null, true);
                            yield " ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "dobyuser", [], "any", false, false, false, 3539), "prenoms", [], "any", false, false, false, 3539), "html", null, true);
                            yield "</span>
                                                </div>
                                                <br><br>
                                                <h6 style=\"float: right; margin-top: -30px\">Statut:
                                                    ";
                            // line 3543
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "etat", [], "any", false, false, false, 3543) == "urgent")) {
                                yield "<span
                                                            class=\"col-pink bolo700\">[ URGENT ] </span>";
                            }
                            // line 3545
                            yield "                                                    ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "etat", [], "any", false, false, false, 3545) == "valider")) {
                                yield "<span
                                                            class=\"bolo700 col-green\">[ À VALIDER ]</span>";
                            }
                            // line 3547
                            yield "                                                    ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "etat", [], "any", false, false, false, 3547) == "rappel")) {
                                yield "<span
                                                            class=\"bolo700 col-blue\">[ RAPPEL ]</span>";
                            }
                            // line 3549
                            yield "                                                    ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "etat", [], "any", false, false, false, 3549) == "cloturer")) {
                                yield "<span
                                                            class=\"bolo700 col-blue-grey\">[ CLÔTURER ]</span>";
                            }
                            // line 3551
                            yield "                                                </h6>
                                                <h6 style=\"text-align: left\">
                                                    <b><u>Client:</u> </b> ";
                            // line 3553
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "chantier", [], "any", false, false, false, 3553), "client", [], "any", false, false, false, 3553), "nomclient", [], "any", false, false, false, 3553), "html", null, true);
                            yield "<br>
                                                    <b><u>Chantier:</u> </b> ";
                            // line 3554
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "chantier", [], "any", false, false, false, 3554), "nomchantier", [], "any", false, false, false, 3554), "html", null, true);
                            yield "<br>
                                                    <b><u>Fichiers:</u> </b><br>
                                                    ";
                            // line 3556
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "fichiers", [], "any", false, false, false, 3556));
                            foreach ($context['_seq'] as $context["_key"] => $context["fichier"]) {
                                // line 3557
                                yield "                                                        # <a href=\"/";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "folde", [], "any", false, false, false, 3557), "html", null, true);
                                yield "/";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "nomfichier", [], "any", false, false, false, 3557), "html", null, true);
                                yield "\"
                                                             class=\"col-blue\" style=\"font-weight: 600\"
                                                             target=\"_blank\">";
                                // line 3559
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "nomfichier", [], "any", false, false, false, 3559), "html", null, true);
                                yield "</a><br>
                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['fichier'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 3561
                            yield "                                                    <br>
                                                    ";
                            // line 3562
                            yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "besoin", [], "any", false, false, false, 3562));
                            yield "<br><br>
                                                    Fait
                                                    le: ";
                            // line 3564
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "date", [], "any", false, false, false, 3564), "d-m-Y H:i"), "html", null, true);
                            yield "
                                                </h6>


                                                ";
                            // line 3568
                            if ((((isset($context["estmaster"]) || array_key_exists("estmaster", $context) ? $context["estmaster"] : (function () { throw new RuntimeError('Variable "estmaster" does not exist.', 3568, $this->source); })()) == false) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitAdmin"]) || array_key_exists("droitAdmin", $context) ? $context["droitAdmin"] : (function () { throw new RuntimeError('Variable "droitAdmin" does not exist.', 3568, $this->source); })()), "actions", [], "any", false, false, false, 3568) == "non"))) {
                                // line 3569
                                yield "                                                    <div style=\"float: right; margin-top: 10px\">
                                                        ";
                                // line 3570
                                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitCommenterBesoin"]) || array_key_exists("droitCommenterBesoin", $context) ? $context["droitCommenterBesoin"] : (function () { throw new RuntimeError('Variable "droitCommenterBesoin" does not exist.', 3570, $this->source); })()), "actions", [], "any", false, false, false, 3570) == "oui")) {
                                    // line 3571
                                    yield "                                                            <a href=\"#\" class=\"besomessage\" id=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "id", [], "any", false, false, false, 3571), "html", null, true);
                                    yield "\"
                                                               title=\"MESSAGE\"
                                                               style=\"margin-right: 5px\"><i
                                                                        class=\"fa fa-message col-orange\"></i></a>
                                                        ";
                                }
                                // line 3576
                                yield "                                                        ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitCloturerBesoin"]) || array_key_exists("droitCloturerBesoin", $context) ? $context["droitCloturerBesoin"] : (function () { throw new RuntimeError('Variable "droitCloturerBesoin" does not exist.', 3576, $this->source); })()), "actions", [], "any", false, false, false, 3576) == "oui")) {
                                    // line 3577
                                    yield "                                                            <a href=\"#\" class=\"besocloturer\" id=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "id", [], "any", false, false, false, 3577), "html", null, true);
                                    yield "\"
                                                               title=\"CLÔTURER\"
                                                               style=\"margin-right: 5px\"><i
                                                                        class=\"fa fa-check-square col-blue\"></i></a>
                                                        ";
                                }
                                // line 3582
                                yield "                                                        ";
                                if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitModifierBesoin"]) || array_key_exists("droitModifierBesoin", $context) ? $context["droitModifierBesoin"] : (function () { throw new RuntimeError('Variable "droitModifierBesoin" does not exist.', 3582, $this->source); })()), "actions", [], "any", false, false, false, 3582) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3582, $this->source); })()), "user", [], "any", false, false, false, 3582), "id", [], "any", false, false, false, 3582) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "dobyuser", [], "any", false, false, false, 3582), "id", [], "any", false, false, false, 3582)))) {
                                    // line 3583
                                    yield "                                                            <a href=\"#\" class=\"besoedit\" id=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "id", [], "any", false, false, false, 3583), "html", null, true);
                                    yield "\"
                                                               title=\"MODIFIER\"
                                                               style=\"margin-right: 5px\"><i
                                                                        class=\"fa fa-edit col-green\"></i></a>
                                                        ";
                                }
                                // line 3588
                                yield "                                                        ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitSupprimerBesoin"]) || array_key_exists("droitSupprimerBesoin", $context) ? $context["droitSupprimerBesoin"] : (function () { throw new RuntimeError('Variable "droitSupprimerBesoin" does not exist.', 3588, $this->source); })()), "actions", [], "any", false, false, false, 3588) == "oui")) {
                                    // line 3589
                                    yield "                                                            <a href=\"#\" class=\"besodel\" id=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "id", [], "any", false, false, false, 3589), "html", null, true);
                                    yield "\"
                                                               title=\"SUPPRIMER\"><i
                                                                        class=\"fa fa-trash col-pink\"></i></a>
                                                        ";
                                }
                                // line 3593
                                yield "                                                    </div>
                                                ";
                            }
                            // line 3595
                            yield "                                                ";
                            if ((((isset($context["estmaster"]) || array_key_exists("estmaster", $context) ? $context["estmaster"] : (function () { throw new RuntimeError('Variable "estmaster" does not exist.', 3595, $this->source); })()) == true) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitAdmin"]) || array_key_exists("droitAdmin", $context) ? $context["droitAdmin"] : (function () { throw new RuntimeError('Variable "droitAdmin" does not exist.', 3595, $this->source); })()), "actions", [], "any", false, false, false, 3595) == "oui"))) {
                                // line 3596
                                yield "                                                    <div style=\"float: right; margin-top: 10px\">
                                                        <a href=\"#\" class=\"besomessage\" id=\"";
                                // line 3597
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "id", [], "any", false, false, false, 3597), "html", null, true);
                                yield "\"
                                                           title=\"MESSAGE\"
                                                           style=\"margin-right: 5px\"><i
                                                                    class=\"fa fa-message col-orange\"></i></a>
                                                        <a href=\"#\" class=\"besocloturer\" id=\"";
                                // line 3601
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "id", [], "any", false, false, false, 3601), "html", null, true);
                                yield "\"
                                                           title=\"CLÔTURER\"
                                                           style=\"margin-right: 5px\"><i
                                                                    class=\"fa fa-check-square col-blue\"></i></a>
                                                        <a href=\"#\" class=\"besoedit\" id=\"";
                                // line 3605
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "id", [], "any", false, false, false, 3605), "html", null, true);
                                yield "\" title=\"MODIFIER\"
                                                           style=\"margin-right: 5px\"><i
                                                                    class=\"fa fa-edit col-green\"></i></a>
                                                        <a href=\"#\" class=\"besoarchiver\" id=\"";
                                // line 3608
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "id", [], "any", false, false, false, 3608), "html", null, true);
                                yield "\"
                                                           title=\"ARCHIVER\"
                                                           style=\"margin-right: 5px\"><i
                                                                    class=\"fa fa-folder col-blue-grey\"></i></a>
                                                        <a href=\"#\" class=\"besodel\" id=\"";
                                // line 3612
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "id", [], "any", false, false, false, 3612), "html", null, true);
                                yield "\"
                                                           title=\"SUPPRIMER\"><i
                                                                    class=\"fa fa-trash col-pink\"></i></a>
                                                    </div>
                                                ";
                            }
                            // line 3617
                            yield "                                                <br><br>
                                            </div>
                                        ";
                        }
                        // line 3620
                        yield "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['beso'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 3621
                    yield "                                </div>
                            </div>
                        ";
                }
                // line 3624
                yield "                    </section>
                </div>
                <div class=\"col-xl-3 col-md-3\">
                    ";
                // line 3627
                if ((($tmp =  !(isset($context["ismobile"]) || array_key_exists("ismobile", $context) ? $context["ismobile"] : (function () { throw new RuntimeError('Variable "ismobile" does not exist.', 3627, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 3628
                    yield "                        <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\" style=\"width: 100%\">
                            <button class=\"btn bg-blue-grey text-white\"
                                    style=\"color: #000;\">
                                GUIDE D'UTILISATION DE L'APPLICATION
                            </button>
                        </div>
                    ";
                } else {
                    // line 3635
                    yield "                        <br><br>
                    ";
                }
                // line 3637
                yield "                    <div class=\"card shadow mb-4\" id=\"client\" style=\"margin-top: 10px\">
                        <h6 class=\"text-left bg-pri col-white bolo600 bolderrer\"
                            style=\"width: 100%; padding: 10px; font-size:14px !important;\">MENU
                        </h6>
                        <div class=\"flex-shrink-0 p-3 bg-white\">
                            ";
                // line 3642
                if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitAdmin"]) || array_key_exists("droitAdmin", $context) ? $context["droitAdmin"] : (function () { throw new RuntimeError('Variable "droitAdmin" does not exist.', 3642, $this->source); })()), "actions", [], "any", false, false, false, 3642) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitAddBesoin"]) || array_key_exists("droitAddBesoin", $context) ? $context["droitAddBesoin"] : (function () { throw new RuntimeError('Variable "droitAddBesoin" does not exist.', 3642, $this->source); })()), "actions", [], "any", false, false, false, 3642) == "oui"))) {
                    // line 3643
                    yield "                                <div style=\"text-align:center\">
                                    <button onclick=\"modalBesoins();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\"> Saisir
                                        des besoins
                                    </button>
                                </div>
                            ";
                }
                // line 3650
                yield "                            <hr style=\"color: black\">
                            <ul class=\"list-unstyled ps-0\">
                                <li class=\"mb-1\">
                                    <button class=\"btn align-items-center rounded collapsed  col-black\"
                                            data-bs-toggle=\"collapse\" data-bs-target=\"#perso\" aria-expanded=\"false\"
                                            style=\"font-size: 14px\">
                                        <i class=\"fa fa-folder-open col-blue\" style=\"font-size: 14px\"></i> Gestion du
                                        Personnel
                                    </button>
                                    <div class=\"collapse\" id=\"perso\" style=\"\">
                                        <ul class=\"btn-toggle-nav list-unstyled fw-normal pb-1 small\">
                                            <li><a href=\"#\" onclick=\"shashar('personnel');\" class=\"link-dark rounded\"
                                                   style=\"font-size: 14px\">- Le Personnel</a></li>
                                            <li><a href=\"#\" onclick=\"shashar('chargespersonnelles');\"
                                                   class=\"link-dark rounded\" style=\"font-size: 14px\">- Charges du
                                                    Personnel</a></li>
                                            <li><a href=\"#\" onclick=\"shashar('chargesinternes');\"
                                                   class=\"link-dark rounded\" style=\"font-size: 14px\">- Charges
                                                    Internes</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class=\"mb-1\">
                                    <button class=\"btn align-items-center rounded collapsed  col-black\"
                                            data-bs-toggle=\"collapse\" data-bs-target=\"#tiers\" aria-expanded=\"false\"
                                            style=\"font-size: 14px\">
                                        <i class=\"fa fa-folder-open col-blue\" style=\"font-size: 14px\"></i> Relations
                                        Tiers
                                    </button>
                                    <div class=\"collapse\" id=\"tiers\">
                                        <ul class=\"btn-toggle-nav list-unstyled fw-normal pb-1 small\">
                                            <li><a href=\"#\" onclick=\"shashar('listeclient');\" class=\"link-dark rounded\"
                                                   style=\"font-size: 14px\">- La liste des clients</a></li>
                                            <li><a href=\"#\" onclick=\"shashar('fournisseur');\" class=\"link-dark rounded\"
                                                   style=\"font-size: 14px\">- Gestion des fournisseurs</a></li>
                                            <li><a href=\"#\" onclick=\"shashar('prestataire');\" class=\"link-dark rounded\"
                                                   style=\"font-size: 14px\">- Gestion des prestataires</a></li>
                                            <li><a href=\"#\" onclick=\"shashar('comptesclients');\"
                                                   class=\"link-dark rounded\" style=\"font-size: 14px\">- Créances
                                                    clients</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class=\"mb-1\">
                                    <button class=\"btn align-items-center rounded collapsed  col-black\"
                                            data-bs-toggle=\"collapse\" data-bs-target=\"#recap\" aria-expanded=\"false\"
                                            style=\"font-size: 14px\">
                                        <i class=\"fa fa-folder-open col-blue\" style=\"font-size: 14px\"></i> Recap des
                                        Chantiers
                                    </button>
                                    <div class=\"collapse\" id=\"recap\">
                                        <ul class=\"btn-toggle-nav list-unstyled fw-normal pb-1 small\">
                                            <li><a href=\"#\" onclick=\"shashar('budget');\" class=\"link-dark rounded\"
                                                   style=\"font-size: 14px\">- Charges prévisionnelles</a></li>
                                            <li><a href=\"#\" onclick=\"shashar('tresorerie');\" class=\"link-dark rounded\"
                                                   style=\"font-size: 14px\">- Trésorerie</a></li>
                                            <li><a href=\"#\" onclick=\"shashar('soldecompte');\" class=\"link-dark rounded\"
                                                   style=\"font-size: 14px\">- Etats financiers</a></li>
                                            <li><a href=\"#\" onclick=\"shashar('rapportchantier');\"
                                                   class=\"link-dark rounded\" style=\"font-size: 14px\">- Suivi de
                                                    chantiers</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class=\"mb-1\">
                                    <button class=\"btn align-items-center rounded collapsed col-black\"
                                            data-bs-toggle=\"collapse\" data-bs-target=\"#mato\" aria-expanded=\"false\"
                                            style=\"font-size: 14px\">
                                        <i class=\"fa fa-folder-open col-blue\" style=\"font-size: 14px\"></i> Matériels /
                                        Matériaux
                                    </button>
                                    <div class=\"collapse\" id=\"mato\">
                                        <ul class=\"btn-toggle-nav list-unstyled fw-normal pb-1 small\">
                                            <li><a href=\"#\" onclick=\"shashar('article');\" class=\"link-dark rounded\"
                                                   style=\"font-size: 14px\">- Matériels & matériaux</a></li>
                                            <li><a href=\"#\" onclick=\"shashar('materiel');\" class=\"link-dark rounded\"
                                                   style=\"font-size: 14px\">- Suivi du matériel</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class=\"border-top my-3\"></li>
                                <a href=\"";
                // line 3731
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listerbesoin", ["beso" => "oui", "tab" => (isset($context["tableau"]) || array_key_exists("tableau", $context) ? $context["tableau"] : (function () { throw new RuntimeError('Variable "tableau" does not exist.', 3731, $this->source); })())]), "html", null, true);
                yield "\"
                                   class=\"btn align-items-center rounded col-blue bolo600\" style=\"font-size: 14px\">#
                                    Liste des besoins</a><br>
                                <a href=\"#\" onclick=\"shashar('documents');\"
                                   class=\"btn align-items-center rounded col-blue bolo600\"
                                   style=\"font-size: 14px; margin-top: -15px\"># Gestion des fichiers</a><br>
                                <a href=\"#\" onclick=\"shashar('planning');\"
                                   class=\"btn align-items-center rounded col-blue bolo600\"
                                   style=\"font-size: 14px; margin-top: -15px\"># Planning</a><br>
                                <a href=\"#\" onclick=\"shashar('message');\"
                                   class=\"btn align-items-center rounded col-blue bolo600\"
                                   style=\"font-size: 14px; margin-top: -15px\"># Messagerie</a><br>
                                <a href=\"#\" onclick=\"shashar('chat');\"
                                   class=\"btn align-items-center rounded col-blue bolo600\"
                                   style=\"font-size: 14px; margin-top: -15px\"># Chat</a><br>
                                <a href=\"#\" onclick=\"shashar('start');\"
                                   class=\"btn align-items-center rounded col-blue bolo600\"
                                   style=\"font-size: 14px; margin-top: -15px\"># Agenda</a><br>
                                <a href=\"#\" onclick=\"shashar('parametre');\"
                                   class=\"btn align-items-center rounded col-blue bolo600\"
                                   style=\"font-size: 14px; margin-top: -15px\"># Paramètres</a><br>
                                <a href=\"#\" onclick=\"shashar('historique');\"
                                   class=\"btn align-items-center rounded col-blue bolo600\"
                                   style=\"font-size: 14px; margin-top: -15px\"># Historique</a><br>
                                <a href=\"#\" onclick=\"shashar('corbeille');\"
                                   class=\"btn align-items-center rounded col-blue bolo600\"
                                   style=\"font-size: 14px; margin-top: -15px\"># Corbeille</a><br>
                            </ul>
                        </div>

                    </div>
                    <div class=\"card shadow mb-4\" id=\"client\">
                        <h6 class=\"text-left bg-pri col-white bolo600 bolderrer\"
                            style=\"width: 100%; padding: 10px; font-size:14px !important; margin-top: -10px\">ACTIONS
                            RAPIDES
                        </h6>
                        <div class=\"table-responsive\" style=\"padding: 10px; overflow-x: scroll; text-align:left\">
                            <p><a onclick=\"shashar('chantieretude');\" class=\"col-black\"
                                  style=\"font-weight: 500 !important;\">&raquo;
                                    Chantiers en étude</a></p>
                            <p><a onclick=\"shashar('chantiercours');\" class=\"col-black\"
                                  style=\"font-weight: 500 !important;\">&raquo;
                                    Chantiers en cours</a></p>
                            <p><a onclick=\"shashar('chantierechouer');\" class=\"col-black\"
                                  style=\"font-weight: 500 !important;\">&raquo;
                                    Chantiers échoués</a></p>
                            <p><a onclick=\"shashar('chantiersclotures');\" class=\"col-black\"
                                  style=\"font-weight: 500 !important;\">&raquo; Chantiers clôturés</a></p>
                            <p><a onclick=\"shashar('chantierstermines');\" class=\"col-black\"
                                  style=\"font-weight: 500 !important;\">&raquo; Chantiers terminés</a></p>
                            <hr>
                            <p>
                                ";
                // line 3783
                if ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitAdmin"]) || array_key_exists("droitAdmin", $context) ? $context["droitAdmin"] : (function () { throw new RuntimeError('Variable "droitAdmin" does not exist.', 3783, $this->source); })()), "actions", [], "any", false, false, false, 3783) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitComptable"]) || array_key_exists("droitComptable", $context) ? $context["droitComptable"] : (function () { throw new RuntimeError('Variable "droitComptable" does not exist.', 3783, $this->source); })()), "actions", [], "any", false, false, false, 3783) == "oui")) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitAddDevis"]) || array_key_exists("droitAddDevis", $context) ? $context["droitAddDevis"] : (function () { throw new RuntimeError('Variable "droitAddDevis" does not exist.', 3783, $this->source); })()), "actions", [], "any", false, false, false, 3783) == "oui"))) {
                    // line 3784
                    yield "                                    <a href=\"#\" onclick=\"modalDevis();\" class=\"col-black\"
                                       style=\"font-weight: 500 !important;\">&raquo;
                                        Créer un Devis</a>
                                ";
                } else {
                    // line 3788
                    yield "                                    <a class=\"col-blue-grey\" style=\"font-weight: 500 !important;\">&raquo; Créer un
                                        Devis</a>
                                ";
                }
                // line 3791
                yield "                            </p>
                            <p><a onclick=\"modalDecompte();\" class=\"col-black\" style=\"font-weight: 500 !important;\">&raquo;
                                    Créer un Décompte</a></p>
                            <p><a onclick=\"modalFacture();\" class=\"col-black\" style=\"font-weight: 500 !important;\">&raquo;
                                    Créer
                                    une Facture</a></p>
                            <p><a onclick=\"modalReglement();\" class=\"col-black\" style=\"font-weight: 500 !important;\">&raquo;
                                    Faire un Règlement</a></p>
                            <hr>
                            <p><a onclick=\"modalPrestataire();\" class=\"col-black\" style=\"font-weight: 500 !important;\">&raquo;
                                    Ajouter un Prestataire</a></p>
                            <p><a onclick=\"modalFournisseur();\" class=\"col-black\" style=\"font-weight: 500 !important;\">&raquo;
                                    Ajouter un Fournisseur</a></p>
                            <p><a onclick=\"modalBonPrestataire();\" class=\"col-black\"
                                  style=\"font-weight: 500 !important;\">&raquo;
                                    Créer un Bon Prestataire</a></p>
                            <p><a onclick=\"modalBonFournisseur();\" class=\"col-black\"
                                  style=\"font-weight: 500 !important;\">&raquo;
                                    Faire un Bon Fournisseur</a></p>
                            <p><a onclick=\"modalPaiePrestataire();\" class=\"col-black\"
                                  style=\"font-weight: 500 !important;\">&raquo;
                                    Paie Prestataire</a></p>
                            <p><a onclick=\"modalPaieFournisseur();\" class=\"col-black\"
                                  style=\"font-weight: 500 !important;\">&raquo;
                                    Paie Fournisseur</a></p>
                        </div>

                    </div>
                    <div class=\"card shadow mb-4\" id=\"client\">
                        <h6 class=\"text-left bg-pri col-white bolo600 bolderrer\"
                            style=\"width: 100%; padding: 10px; font-size:14px !important;\">EXCERCICES COMPTABLES
                        </h6>
                        <div class=\"table-responsive\" style=\"padding: 10px; overflow-x: scroll; text-align:center\">
                            <button onclick=\"modalExercices();\" class=\"btn\" type=\"button\"
                                    style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\"> Créer des
                                exercices comptables
                            </button>
                        </div>
                        <div style=\"padding-left: 10px; overflow-x: scroll; text-align:left\">
                            <h6 class=\"text-left\">
                                <table style=\"width: 100%\">
                                    ";
                // line 3832
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["exercices"]) || array_key_exists("exercices", $context) ? $context["exercices"] : (function () { throw new RuntimeError('Variable "exercices" does not exist.', 3832, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["exer"]) {
                    // line 3833
                    yield "                                        ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["exer"], "corbeille", [], "any", false, false, false, 3833))) {
                        // line 3834
                        yield "                                            <tr>
                                                <td><a href=\"#\" onclick=\"shashar('exercices/";
                        // line 3835
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["exer"], "id", [], "any", false, false, false, 3835), "html", null, true);
                        yield "');\"
                                                       style=\"font-size:15px !important; font-weight:normal\"
                                                       class=\"col-black\"># ";
                        // line 3837
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["exer"], "exercice", [], "any", false, false, false, 3837), "html", null, true);
                        yield "</a>
                                                    <br>
                                                    <span>
                                            <a href=\"#\" onclick=\"shashar('exercices/";
                        // line 3840
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["exer"], "id", [], "any", false, false, false, 3840), "html", null, true);
                        yield "');\"
                                               style=\"font-size:14px !important; font-weight:normal\"
                                               class=\"col-pink bolo600\">Du: ";
                        // line 3842
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["exer"], "debut", [], "any", false, false, false, 3842), "d-m-Y"), "html", null, true);
                        yield " | Au: ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["exer"], "fin", [], "any", false, false, false, 3842), "d-m-Y"), "html", null, true);
                        yield "
                                            </a>
                                        </span>
                                                </td>
                                                <td class=\"text-right nowrape\">
                                                    <button style=\"border-color: #b2becc; border-style: none\"
                                                            class=\"editexer\" id=\"";
                        // line 3848
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["exer"], "id", [], "any", false, false, false, 3848), "html", null, true);
                        yield "\"><i
                                                                class=\"fa fa-edit col-green\"
                                                                style=\"font-size: 16px\"></i></button>
                                                    <button style=\"border-color: #b2becc ; border-style: none\"
                                                            class=\"delexer\" id=\"";
                        // line 3852
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["exer"], "id", [], "any", false, false, false, 3852), "html", null, true);
                        yield "\"><i
                                                                class=\"fa fa-trash col-pink\"
                                                                style=\"font-size: 16px\"></i></button>
                                                </td>
                                            </tr>
                                        ";
                    }
                    // line 3858
                    yield "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['exer'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 3859
                yield "                                </table>
                            </h6>
                        </div>
                    </div>
                    <div class=\"card shadow mb-4\" id=\"client\" style=\"height: 400px\">
                        <h6 class=\"text-left bg-pri col-white bolo600 bolderrer\"
                            style=\"width: 100%; padding: 10px; font-size:14px !important;\">BESOINS ARCHIVÉS
                        </h6>
                        <div style=\"padding: 10px; overflow-x: scroll;\">
                            ";
                // line 3868
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["besoins"]) || array_key_exists("besoins", $context) ? $context["besoins"] : (function () { throw new RuntimeError('Variable "besoins" does not exist.', 3868, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["beso"]) {
                    // line 3869
                    yield "                                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "etat", [], "any", false, false, false, 3869) == "archiver")) {
                        // line 3870
                        yield "                                    <div class=\"shadow p-3 bg-body rounded\">
                                        <h6>
                                            <span class=\"col-black bolo700\">De: ";
                        // line 3872
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "dobyuser", [], "any", false, false, false, 3872), "nom", [], "any", false, false, false, 3872), "html", null, true);
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "dobyuser", [], "any", false, false, false, 3872), "prenoms", [], "any", false, false, false, 3872), "html", null, true);
                        yield "</span>
                                        </h6>
                                        <hr style=\"margin-top: -10px\">
                                        <h6 class=\"text-left\">
                                            <b><u>Client:</u> </b> ";
                        // line 3876
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "chantier", [], "any", false, false, false, 3876), "client", [], "any", false, false, false, 3876), "nomclient", [], "any", false, false, false, 3876), "html", null, true);
                        yield "<br>
                                            <b><u>Chantier:</u> </b> ";
                        // line 3877
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "chantier", [], "any", false, false, false, 3877), "nomchantier", [], "any", false, false, false, 3877), "html", null, true);
                        yield "<br>
                                            <b><u>Fichiers:</u> </b><br>
                                            ";
                        // line 3879
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "fichiers", [], "any", false, false, false, 3879));
                        foreach ($context['_seq'] as $context["_key"] => $context["fichier"]) {
                            // line 3880
                            yield "                                                # <a href=\"/";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "folde", [], "any", false, false, false, 3880), "html", null, true);
                            yield "/";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "nomfichier", [], "any", false, false, false, 3880), "html", null, true);
                            yield "\"
                                                     class=\"col-blue\" style=\"font-weight: 600\"
                                                     target=\"_blank\">";
                            // line 3882
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "nomfichier", [], "any", false, false, false, 3882), "html", null, true);
                            yield "</a><br>
                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['fichier'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 3884
                        yield "                                            <br>
                                            ";
                        // line 3885
                        yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "besoin", [], "any", false, false, false, 3885));
                        yield "<br><br>
                                            Fait
                                            le: ";
                        // line 3887
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "date", [], "any", false, false, false, 3887), "d-m-Y H:i"), "html", null, true);
                        yield "
                                        </h6>
                                        ";
                        // line 3889
                        if ((((isset($context["estmaster"]) || array_key_exists("estmaster", $context) ? $context["estmaster"] : (function () { throw new RuntimeError('Variable "estmaster" does not exist.', 3889, $this->source); })()) == true) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitAdmin"]) || array_key_exists("droitAdmin", $context) ? $context["droitAdmin"] : (function () { throw new RuntimeError('Variable "droitAdmin" does not exist.', 3889, $this->source); })()), "actions", [], "any", false, false, false, 3889) == "oui"))) {
                            // line 3890
                            yield "                                            <div style=\"float: right; margin-top: 10px\">
                                                <a href=\"#\" class=\"besomessage\" id=\"";
                            // line 3891
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "id", [], "any", false, false, false, 3891), "html", null, true);
                            yield "\" title=\"MESSAGE\"
                                                   style=\"margin-right: 5px\"><i
                                                            class=\"fa fa-message col-orange\"></i></a>
                                                <a href=\"#\" class=\"besorelancer\" id=\"";
                            // line 3894
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["beso"], "id", [], "any", false, false, false, 3894), "html", null, true);
                            yield "\" title=\"RELANCER\"><i
                                                            class=\"fa fa-repeat col-blue\"></i></a>
                                            </div>
                                        ";
                        }
                        // line 3898
                        yield "                                        <br><br>
                                    </div>
                                ";
                    }
                    // line 3901
                    yield "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['beso'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 3902
                yield "                        </div>
                    </div>
                </div>
            ";
            }
            // line 3906
            yield "        </div>
    </div>
";
        }
        // line 3909
        yield "
";
        // line 3910
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["vue"]) || array_key_exists("vue", $context) ? $context["vue"] : (function () { throw new RuntimeError('Variable "vue" does not exist.', 3910, $this->source); })()), "vue", [], "any", false, false, false, 3910) == "vuebbbb")) {
            // line 3911
            yield "    <div class=\"container\">
        <div class=\"row justify-content-center\" style=\"margin-top:60px\">
            <div class=\"col-xl-9 col-md-9\">
                <h3 class=\"tet text-white text-center font-weight-bold\">CARLINBLEU - OPTION COMPTABILITÉ</h3>
                <h5 class=\"text-center\" style=\"color:#efd807; \">
                    BIENVENUE ";
            // line 3916
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3916, $this->source); })()), "user", [], "any", false, false, false, 3916), "nom", [], "any", false, false, false, 3916)), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3916, $this->source); })()), "user", [], "any", false, false, false, 3916), "prenoms", [], "any", false, false, false, 3916)), "html", null, true);
            yield " </h5>

                <section class=\"features-icons  text-center\" style=\"padding: 0 !important; margin-top: 30px\">
                    <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\" style=\"margin-top: 10px !important\">
                        <button type=\"button\" ";
            // line 3920
            if (((isset($context["checkMaster"]) || array_key_exists("checkMaster", $context) ? $context["checkMaster"] : (function () { throw new RuntimeError('Variable "checkMaster" does not exist.', 3920, $this->source); })()) == "oui")) {
                yield " onclick=\"shasharo();\" ";
            }
            // line 3921
            yield "                                class=\"btn\"
                                style=\"background-color: #754cea; color: #FFF; margin-right: 10px\">
                            NUMÉROTATIONS
                        </button>
                        <a href=\"";
            // line 3925
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
            yield "\" class=\"btn\"
                           style=\"background-color: #1cb0a4; color: #FFF; \">
                            RETOUR À PAGE D'ACCUEIL
                        </a>
                    </div>
                    <h5 class=\"text-center\" style=\"color:#82e3a6;font-weight: bold; margin-top: 40px; font-size: 16px \">
                        EFFECTUER DES
                        ENREGISTREMENTS</h5>
                    <div class=\"container\" style=\"padding: 0 !important;\">
                        ";
            // line 3934
            if ((($tmp =  !(isset($context["ismobile"]) || array_key_exists("ismobile", $context) ? $context["ismobile"] : (function () { throw new RuntimeError('Variable "ismobile" does not exist.', 3934, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 3935
                yield "                            <div class=\"row\" style='margin:10px 0 15px 0;'>
                                <div class=\"d-grid gap-2 col-3 mx-auto\">
                                    <button onclick=\"modalClient();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">AJOUTER UN
                                        CLIENT
                                    </button>
                                    <button onclick=\"modalDevis();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">CRÉER UN
                                        DEVIS
                                    </button>
                                    <button onclick=\"modalPrestataire();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">AJOUTER UN
                                        PRESTATAIRE
                                    </button>
                                    <button onclick=\"modalChargesInternes();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">CHARGES
                                        INTERNES
                                    </button>
                                    <button onclick=\"modalBonPrestataire();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">BON
                                        PRESTATAIRE
                                    </button>
                                </div>
                                <div class=\"d-grid gap-2 col-3 mx-auto\">
                                    <button onclick=\"modalChantier();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">AJOUTER UN
                                        CHANTIER
                                    </button>
                                    <button onclick=\"modalDecompte();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">CRÉER UN
                                        DÉCOMPTE
                                    </button>
                                    <button onclick=\"modalPerso();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">AJOUTER UN
                                        PERSONNEL
                                    </button>
                                    <button onclick=\"modalBonsChargesInternes();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">BON
                                        CHARGES
                                        INTERNES
                                    </button>
                                    <button onclick=\"modalPaieFournisseur();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">PAIE
                                        FOURNISSEURS
                                    </button>
                                </div>
                                <div class=\"d-grid gap-2 col-3 mx-auto\">
                                    <button onclick=\"modalContact();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">AJOUTER UN
                                        CONTACT
                                    </button>
                                    <button onclick=\"modalFacture();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">CRÉER UN
                                        FACTURE
                                    </button>
                                    <button onclick=\"modalReglement();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">RÈGLEMENTS
                                        CLIENTS
                                    </button>
                                    <button onclick=\"modalBonSuivi();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">CRÉER UN
                                        BON
                                        DE SUIVI
                                    </button>

                                    <button onclick=\"modalPaiePrestataire();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">PAIE
                                        PRESTATAIRES
                                    </button>
                                </div>
                                <div class=\"d-grid gap-2 col-3 mx-auto\">
                                    <button onclick=\"shashar('article');\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">AJOUTER UN
                                        ARTICLE
                                    </button>
                                    <button onclick=\"modalFournisseur();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">AJOUTER UN
                                        FOURNISSEUR
                                    </button>
                                    <button onclick=\"modalChargeChantier();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">CHARGES
                                        CHANTIERS
                                    </button>
                                    <button onclick=\"modalBonFournisseur();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">BON
                                        FOURNISSEURS
                                    </button>
                                    <button onclick=\"modalPaiePersonnel();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">PAIE
                                        PERSONNEL
                                    </button>
                                </div>
                            </div>
                        ";
            }
            // line 4029
            yield "                        ";
            if ((($tmp = (isset($context["ismobile"]) || array_key_exists("ismobile", $context) ? $context["ismobile"] : (function () { throw new RuntimeError('Variable "ismobile" does not exist.', 4029, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 4030
                yield "                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\">
                                <button onclick=\"modalClient();\" class=\"btn\"
                                        style=\"font-size: 11px; background-color: #4e73df; color: #FFF; width: 115px\">
                                    AJOUTER UN CLIENT
                                </button>
                                <button onclick=\"modalChantier();\" class=\"btn\"
                                        style=\"font-size: 11px; width: 115px;  background-color: #4e73df; color: #FFF; margin-left: 5px\">
                                    AJOUTER UN CHANTIER
                                </button>
                                <button onclick=\"modalContact();\" class=\"btn\"
                                        style=\"font-size: 11px;  width: 115px; background-color: #4e73df; color: #FFF; margin-left: 5px\">
                                    AJOUTER UN CONTACT
                                </button>
                            </div>
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\">
                                <button onclick=\"modalDevis();\" class=\"btn\"
                                        style=\"font-size: 11px; background-color: #4e73df; color: #FFF; width: 115px\">
                                    CRÉER UN DEVIS
                                </button>
                                <button onclick=\"modalDecompte();\" class=\"btn\"
                                        style=\"font-size: 11px;  width: 115px; background-color: #4e73df; color: #FFF; margin-left: 5px\">
                                    CRÉER UN DÉCOMPTE
                                </button>
                                <button onclick=\"modalFacture();\" class=\"btn\"
                                        style=\"font-size: 11px;  width: 115px; background-color: #4e73df; color: #FFF; margin-left: 5px\">
                                    CRÉER UNE FACTURE
                                </button>
                            </div>
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\">
                                <button onclick=\"modalPrestataire();\" class=\"btn\"
                                        style=\"font-size: 11px; background-color:#4e73df; color: #FFF; width: 115px\">
                                    AJOUTER UN PRESTATAIRE
                                </button>
                                <button onclick=\"modalPerso();\" class=\"btn\"
                                        style=\"font-size: 11px; width: 115px; background-color: #4e73df; color: #FFF; margin-left: 5px\">
                                    AJOUTER UN PERSONNEL
                                </button>
                                <button onclick=\"modalReglement();\" class=\"btn\"
                                        style=\"font-size: 11px; width: 115px; background-color: #4e73df; color: #FFF; margin-left: 5px\">
                                    FAIRE UN RÈGLEMENT
                                </button>
                            </div>
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\">
                                <button onclick=\"modalChargesInternes();\" class=\"btn\"
                                        style=\"font-size: 11px; background-color:#4e73df; color: #FFF; width: 115px\">
                                    CHARGES INTERNES
                                </button>
                                <button onclick=\"modalBonsChargesInternes();\" class=\"btn\"
                                        style=\"font-size: 11px; width: 115px; background-color: #4e73df; color: #FFF; margin-left: 5px\">
                                    BON CHARGES INTERNES
                                </button>
                                <button onclick=\"modalBonSuivi();\" class=\"btn\"
                                        style=\"font-size: 11px; width: 115px; background-color: #4e73df; color: #FFF; margin-left: 5px\">
                                    CRÉER UN BON DE SUIVI
                                </button>
                            </div>
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\">
                                <button onclick=\"modalBonPrestataire();\" class=\"btn\"
                                        style=\"font-size: 11px; background-color:#4e73df; color: #FFF; width: 115px\">
                                    BON PRESTATAIRE
                                </button>
                                <button onclick=\"modalBonFournisseur();\" class=\"btn\"
                                        style=\"font-size: 11px; width: 115px; background-color: #4e73df; color: #FFF; margin-left: 5px\">
                                    BON FOURNISSEUR
                                </button>
                                <button onclick=\"modalPaiePrestataire();\" class=\"btn\"
                                        style=\"font-size: 11px; width: 115px; background-color: #4e73df; color: #FFF; margin-left: 5px\">
                                    PAIE PRESTATAIRE
                                </button>
                            </div>
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\">
                                <button onclick=\"modalPaieFournisseur();\" class=\"btn\"
                                        style=\"font-size: 11px; background-color:#4e73df; color: #FFF; width: 115px\">
                                    PAIE FOURNISSEUR
                                </button>
                                <button onclick=\"modalPaiePersonnel();\" class=\"btn\"
                                        style=\"font-size: 11px; width: 115px; background-color: #4e73df; color: #FFF; margin-left: 5px\">
                                    PAIE PERSONNEL
                                </button>
                                <button onclick=\"modalChargeChantier();\" class=\"btn\"
                                        style=\"font-size: 11px; width: 115px; background-color: #4e73df; color: #FFF; margin-left: 5px\">
                                    CHARGES CHANTIERS
                                </button>
                            </div>

                        ";
            }
            // line 4116
            yield "                        <h5 class=\"text-center\"
                            style=\"color:#82e3a6;font-weight: bold; margin-top: 60px; font-size: 16px  \">CONSULTER DES
                            ENREGISTREMENTS</h5>

                        <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\"
                             style=\"margin-top: 10px !important\">
                            <button onclick=\"shashares();\" class=\"btn\" ∑
                                    style=\"background-color: #89c57e; color: #FFF; \">
                                RECHERCHER
                            </button>
                            <button onclick=\"shashar('travauxjour');\" class=\"btn\"
                                    style=\"background-color: #03A9F4FF; color: #FFF; margin-left: 5px\">
                                TRAVAUX DU JOUR
                            </button>
                            <button onclick=\"shashar('soldecompte');\" class=\"btn\"
                                    style=\"background-color: #9247b7; color: #FFF; margin-left: 5px\">
                                ETATS FINANCIERS
                            </button>
                            <button onclick=\"shashar('rapportchantier');\" class=\"btn\"
                                    style=\"background-color: #e86c20; color: #FFF; margin-left: 5px\">
                                SUIVI DE CHANTIERS
                            </button>
                        </div>
                        <div class=\"row\" style='margin:10px 0 15px 0;'>
                            ";
            // line 4140
            if ((($tmp =  !(isset($context["ismobile"]) || array_key_exists("ismobile", $context) ? $context["ismobile"] : (function () { throw new RuntimeError('Variable "ismobile" does not exist.', 4140, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 4141
                yield "                                <div class=\"row\" style='margin:10px 0 15px 0;'>
                                    <div class=\"d-grid gap-2 col-3 mx-auto\">
                                        <button onclick=\"shashar('listeclient');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">LISTE
                                            DES
                                            CLIENTS
                                        </button>
                                        <button onclick=\"shashar('souschantier');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">SOUS
                                            CHANTIERS
                                        </button>
                                        <button onclick=\"shashar('chantieretude');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">
                                            CHANTIERS EN
                                            ÉTUDE
                                        </button>
                                        <button onclick=\"shashar('chantiersclotures');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">
                                            CHANTIERS
                                            CLÔTURÉS
                                        </button>
                                        <button onclick=\"shashar('parametre');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">
                                            PARAMÈTRES
                                        </button>
                                        <button onclick=\"shashar('message');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">
                                            MESSAGERIE
                                        </button>
                                    </div>
                                    <div class=\"d-grid gap-2 col-3 mx-auto\">
                                        <button onclick=\"shashar('chantiercours');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">
                                            CHANTIERS EN
                                            COURS
                                        </button>
                                        <button onclick=\"shashar('chantierstermines');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">
                                            CHANTIERS
                                            TERMINÉS
                                        </button>
                                        <button onclick=\"shashar('chantierechouer');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">
                                            CHANTIERS
                                            ÉCHOUÉS
                                        </button>
                                        <button onclick=\"shashar('chantierstous');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">TOUS LES
                                            CHANTIERS
                                        </button>
                                        <button onclick=\"shashar('historique');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">
                                            HISTORIQUE
                                        </button>
                                        <button onclick=\"shashar('chat');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">CHAT
                                        </button>
                                    </div>
                                    <div class=\"d-grid gap-2 col-3 mx-auto\">

                                        <button onclick=\"shashar('comptesclients');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">COMPTES
                                            CLIENTS
                                        </button>
                                        <button onclick=\"shashar('fournisseur');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">LISTE
                                            DES
                                            FOURNISSEURS
                                        </button>
                                        <button onclick=\"shashar('chargespersonnelles');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">CHARGES
                                            DU
                                            PERSONNEL
                                        </button>
                                        <button onclick=\"shashar('budget');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">CHARGES
                                            PREVISIONNELLES
                                        </button>
                                        <button onclick=\"shashar('start');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">AGENDA
                                        </button>
                                        <button onclick=\"shashar('paie');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">PAIE
                                        </button>
                                    </div>
                                    <div class=\"d-grid gap-2 col-3 mx-auto\">

                                        <button onclick=\"shashar('contact');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">LISTE
                                            DES
                                            CONTACTS
                                        </button>
                                        <button onclick=\"shashar('prestataire');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">LISTE
                                            DES
                                            PRESTATAIRES
                                        </button>
                                        <button onclick=\"shashar('chargesinternes');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">CHARGES
                                            INTERNES
                                        </button>
                                        <button onclick=\"shashar('tresorerie');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">GESTION
                                            DE
                                            TRÉSORERIE
                                        </button>
                                        <button onclick=\"shashar('corbeille');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">
                                            CORBEILLE
                                        </button>
                                        <a href=\"";
                // line 4251
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
                yield "\" class=\"btn bg-pink col-white\" type=\"button\"
                                           style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">SE
                                            DÉCONNECTER
                                        </a>
                                    </div>
                                </div>
                            ";
            }
            // line 4258
            yield "                        </div>
                        ";
            // line 4259
            if ((($tmp = (isset($context["ismobile"]) || array_key_exists("ismobile", $context) ? $context["ismobile"] : (function () { throw new RuntimeError('Variable "ismobile" does not exist.', 4259, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 4260
                yield "                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\">
                                <button onclick=\"shashar('listeclient');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px;\">
                                    LISTE DES CLIENTS
                                </button>
                                <button onclick=\"shashar('chantieretude');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px; margin-left: 5px\">
                                    CHANTIERS EN ÉTUDE
                                </button>
                                <button onclick=\"shashar('chantiercours');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px; margin-left: 5px\">
                                    CHANTIERS EN COURS
                                </button>

                            </div>
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\">
                                <button onclick=\"shashar('souschantier');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px;\">
                                    SOUS CHANTIERS
                                </button>
                                <button onclick=\"shashar('chantiersclotures');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px; margin-left: 5px\">
                                    CHANTIERS CLÔTURÉS
                                </button>
                                <button onclick=\"shashar('chantierechouer');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px; margin-left: 5px\">
                                    CHANTIERS ÉCHOUÉS
                                </button>

                            </div>
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\">
                                <button onclick=\"shashar('chantierstermines');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px;\">
                                    CHANTIERS TERMINÉS
                                </button>
                                <button onclick=\"shashar('chantierstous');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px; margin-left: 5px\">
                                    TOUS LES CHANTIERS
                                </button>
                                <button onclick=\"shashar('comptesclients');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px; margin-left: 5px\">
                                    COMPTES CLIENTS
                                </button>
                            </div>
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\">
                                <button onclick=\"shashar('contact');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px;\">
                                    LISTE DES
                                    CONTACTS
                                </button>
                                <button onclick=\"shashar('prestataire');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px; margin-left: 5px\">
                                    LISTE DES
                                    PRESTATAIRES
                                </button>
                                <button onclick=\"shashar('chargesinternes');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px; margin-left: 5px\">
                                    CHARGES INTERNES
                                </button>
                            </div>
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\">
                                <button onclick=\"shashar('chargespersonnelles');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px;\">
                                    CHARGES DU PERSONNEL
                                </button>
                                <button onclick=\"shashar('budget');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px; margin-left: 5px\">
                                    CHARGES PREVISIONNELLES
                                </button>
                                <button onclick=\"shashar('fournisseur');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px; margin-left: 5px\">
                                    LISTE DES
                                    FOURNISSEURS
                                </button>
                            </div>
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\">
                                <button onclick=\"shashar('chat');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px;\">
                                    CHAT
                                </button>
                                <button onclick=\"shashar('start');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px; margin-left: 5px\">
                                    AGENDA
                                </button>
                                <button onclick=\"shashar('paie');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px; margin-left: 5px\">
                                    PAIE
                                </button>
                            </div>
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\">
                                <button onclick=\"shashar('parametre');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px;\">
                                    PARAMÈTRES
                                </button>
                                <button onclick=\"shashar('message');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px; margin-left: 5px\">
                                    MESSAGERIE
                                </button>
                                <button onclick=\"shashar('historique');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px; margin-left: 5px\">
                                    HISTORIQUE
                                </button>
                            </div>
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\">
                                <button onclick=\"shashar('tresorerie');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px;\">
                                    GESTION DE TRÉSORERIE
                                </button>
                                <button onclick=\"shashar('corbeille');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px; margin-left: 5px\">
                                    CORBEILLE
                                </button>
                                <a href=\"";
                // line 4372
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
                yield "\" class=\"btn bg-pink\"
                                   style=\" color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px; margin-left: 5px\">
                                    SE DÉCONNECTER
                                </a>
                            </div>
                        ";
            }
            // line 4378
            yield "                        <div class=\"row\" style='margin:10px 0 15px 0;'>
                            <h6 style=\"float: left; color: #fff; margin-top:20px\">©Carlinbleu. All rights reserved.</h6>
                            <h6 style=\"float: right; margin-top:20px\">
                                <a href=\"https://www.facebook.com/profile.php?id=100088340186112\"
                                   style=\"color: #fff\">facebook</a> |
                                <a href=\"https://www.linkedin.com/company/carlinbleu\" style=\"color: #fff\">linkedin</a>
                            </h6>
                        </div>
                    </div>
                </section>
            </div>
            <div class=\"col-xl-3 col-md-3\">

                <div class=\"card shadow mb-4\" id=\"client\">
                    <h6 class=\"text-left bg-pri col-white bolo600 bolderrer\"
                        style=\"width: 100%; padding: 10px; font-size:14px !important;\">DIVERS
                    </h6>
                    <div class=\"table-responsive\" style=\"padding: 10px; overflow-x: scroll\">
                        <h6 class=\"text-left\" style=\"font-size:15px !important;\"># Guide Carlinbleu <span
                                    class=\"bolo600 col-blue\">( Option Comptabilité )</span></h6>
                        <h6 class=\"text-left\" style=\"font-size:15px !important;\"># Concept de gestion de chantiers</h6>
                    </div>
                </div>

                <div class=\"card shadow mb-4\" id=\"client\">
                    <h6 class=\"text-left bg-pri col-white bolo600 bolderrer\"
                        style=\"width: 100%; padding: 10px; font-size:14px !important;\">EXCERCICES COMPTABLES
                    </h6>
                    <div class=\"table-responsive\" style=\"padding: 10px; overflow-x: scroll; text-align:center\">
                        <button onclick=\"modalExercices();\" class=\"btn\" type=\"button\"
                                style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\"> Créer des exercices
                            comptables
                        </button>
                    </div>
                    <div style=\"padding-left: 10px; overflow-x: scroll; text-align:left\">
                        <h6 class=\"text-left\">
                            <table style=\"width: 100%\">
                                ";
            // line 4415
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["exercices"]) || array_key_exists("exercices", $context) ? $context["exercices"] : (function () { throw new RuntimeError('Variable "exercices" does not exist.', 4415, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["exer"]) {
                // line 4416
                yield "                                    <tr>
                                        <td><a href=\"#\" onclick=\"shashar('exercices/";
                // line 4417
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["exer"], "id", [], "any", false, false, false, 4417), "html", null, true);
                yield "');\"
                                               style=\"font-size:15px !important; font-weight:normal\"
                                               class=\"col-black\"># ";
                // line 4419
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["exer"], "exercice", [], "any", false, false, false, 4419), "html", null, true);
                yield "</a>
                                            <br>
                                            <span>
                                            <a href=\"#\" onclick=\"shashar('exercices/";
                // line 4422
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["exer"], "id", [], "any", false, false, false, 4422), "html", null, true);
                yield "');\"
                                               style=\"font-size:14px !important; font-weight:normal\"
                                               class=\"col-pink bolo600\">
                                                ( Du: ";
                // line 4425
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["exer"], "debut", [], "any", false, false, false, 4425), "d-m-Y"), "html", null, true);
                yield " | Au: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["exer"], "fin", [], "any", false, false, false, 4425), "d-m-Y"), "html", null, true);
                yield " )
                                            </a>
                                        </span>
                                        </td>
                                        <td class=\"text-right\">
                                            <a href=\"#\"><i class=\"fa fa-edit col-green\"></i></a>
                                            <a href=\"#\"><i class=\"fa fa-trash col-pink\"></i></a>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['exer'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 4435
            yield "                            </table>
                        </h6>

                    </div>
                </div>

                <div class=\"card shadow mb-4\" id=\"client\">
                    <h6 class=\"text-left bg-pri col-white bolo600 bolderrer\"
                        style=\"width: 100%; padding: 10px; font-size:14px !important;\">TOP 10 CHANTIERS PLUS UTILISÉS
                    </h6>
                    <div class=\"table-responsive\" style=\"padding: 10px; overflow-x: scroll\">
                        <table class=\"table-bordered shadow\" style=\" overflow: scroll; width: 100%; font-size: 12px\">
                            ";
            // line 4447
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["chans"]) || array_key_exists("chans", $context) ? $context["chans"] : (function () { throw new RuntimeError('Variable "chans" does not exist.', 4447, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["chan"]) {
                // line 4448
                yield "                                ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chan"], "corbeille", [], "any", false, false, false, 4448))) {
                    // line 4449
                    yield "                                    <tr>
                                        <td colspan=\"2\" class=\"bg-blue text-white\"
                                            style=\"padding-left: 5px;\">
                                            <a href=\"";
                    // line 4452
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["chan"], "client", [], "any", false, false, false, 4452), "id", [], "any", false, false, false, 4452)]), "html", null, true);
                    yield "\"
                                               class=\"text-white\"
                                               title=\"";
                    // line 4454
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["chan"], "client", [], "any", false, false, false, 4454), "nomclient", [], "any", false, false, false, 4454)), "html", null, true);
                    yield "\">
                                                -
                                                ";
                    // line 4456
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["chan"], "client", [], "any", false, false, false, 4456), "nomclient", [], "any", false, false, false, 4456)), "html", null, true);
                    yield "
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"padding-left: 5px\" colspan=\"2\" class=\"bg-light\">
                                            <a href=\"#\" onclick=\"shashar('chantier/";
                    // line 4462
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chan"], "id", [], "any", false, false, false, 4462), "html", null, true);
                    yield "');\" class=\"text-pri\"
                                               title=\"";
                    // line 4463
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chan"], "nomchantier", [], "any", false, false, false, 4463)), "html", null, true);
                    yield "\">
                                                # ";
                    // line 4464
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chan"], "nomchantier", [], "any", false, false, false, 4464)), "html", null, true);
                    yield "
                                            </a>
                                        </td>
                                    </tr>
                                ";
                }
                // line 4469
                yield "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['chan'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 4470
            yield "                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        }
        // line 4477
        yield "
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/locale/fr.min.js\"></script>


<script src=\"";
        // line 4484
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.slimscroll.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 4485
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.validate.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 4486
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-notify.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 4487
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/waves.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 4488
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/demo.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 4489
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/sortable-nestable.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 4490
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.nestable.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 4491
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.tableToExcel.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 4492
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/select2.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 4493
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/lightgallery-all.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 4494
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/image-gallery.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 4495
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/notifications.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 4496
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/autosize.js"), "html", null, true);
        yield "\"></script>

<script src=\"";
        // line 4498
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/admin.js"), "html", null, true);
        yield "\"></script>
<link href=\"";
        // line 4499
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("datetimepicker/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
<script src=\"";
        // line 4500
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("momentjs/moment.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 4501
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-material-datetimepicker.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 4502
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("datetimepicker/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 4503
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("datetimepicker/js/demo.js"), "html", null, true);
        yield "\"></script>

<script src=\"";
        // line 4505
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/datascript.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 4506
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("start/article.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 4507
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("start/contact.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 4508
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("start/decompte.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 4509
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("start/facture.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 4510
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("start/personnel.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 4511
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("start/caisse.js"), "html", null, true);
        yield "\"></script>
<script>

        const formatNumber = (num, precision, separator) => {
        let parts;
        num = Number(num);
        num = (typeof precision !== 'undefined' ? num.toFixed(precision) : num).toString();
        parts = num.split('.');
        parts[0] = parts[0].toString().replace(/(\\d)(?=(\\d{3})+(?!\\d))/g, '\$1' + (separator));
        return parts.join(',');
    }

    document.getElementById('close_add_exercices').onclick = function () {
        window.location.href = '/crm/welcome/tableau/' + \$(\"#tabb\").val();
    }

    \$('#updExercices').off().on(\"click\", function (event) {
        event.preventDefault()
        if (\$(this).closest('form').valid()) {
            \$('#updExercices').hide()
            \$('#loadExercices').css('display', '')
            \$.ajax({
                type: 'POST',
                url: '/crm/welcome/exercices/upd/' + \$(\"#idexer\").val(),
                data: JSON.stringify(\$('#addExercicesForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    window.location.href = '/crm/welcome/tableau/' + \$(\"#tabb\").val();
                },
                error: function (xhr, resp, text) {
                    \$('#ModalErreur').modal('show')
                },
            })
        }
    })

    \$('#addExercices').off().on(\"click\", function (event) {
        event.preventDefault()
        if (\$(this).closest('form').valid()) {
            \$('#addExercices').hide()
            \$('#loadExercices').css('display', '')
            \$.ajax({
                type: 'POST',
                url: '/crm/welcome/exercices/add',
                data: JSON.stringify(\$('#addExercicesForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    window.location.href = '/crm/welcome/tableau/' + \$(\"#tabb\").val();
                },
                error: function (xhr, resp, text) {
                    \$('#ModalErreur').modal('show')
                },
            })
        }
    })

    if (\$(\"#idexer\").val()) {
        const modal = document.getElementById(\"app_exercices\");
        modal.style.display = \"block\";
    }

    \$(\".editexer\").off().on('click', function (event) {
        \$('#Traitement').modal('show');
        window.location.href = '/crm/welcome/exercices/' + this.id + '/' + \$(\"#tabb\").val();
    });

    \$(\".delexer\").off().on('click', function (event) {
        \$('#Traitement').modal('show');
        axios({
            method: 'DELETE',
            url: '/crm/welcome/exercices/delete/' + this.id,
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
        }).then(function (response) {
            window.location.href = '/crm/welcome/tableau/' + \$(\"#tabb\").val();
        }).catch(function (error) {
            \$('#Traitement').modal('hide');
            \$('#ModalErreur').modal('show');
        });
    });

    setInterval(function () {

        \$.ajax({
            type: 'POST',
            url: '/crm/welcome/alertes/get',
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                const data = respdata[0];
                if (data != null || data != undefined) {
                    const atitre = document.getElementById('atitre');
                    const acontent = document.getElementById('acontent');

                    atitre.innerHTML = \"\";
                    atitre.innerHTML = data[\"titre\"];

                    acontent.innerHTML = \"\";
                    acontent.innerHTML = data[\"alerte\"];

                    const notif = document.getElementById('notif');
                    if (notif.style.display === 'block')
                        notif.style.display = 'none';
                    else
                        notif.style.display = 'block';

                    \$.ajax({
                        type: 'POST',
                        url: '/crm/welcome/alerte/delete/' + data[\"id\"],
                        contentType: 'application/json; charset=utf-8',
                        dataType: 'json',
                        success: function (respdata, textStatus, jqXHR) {

                        },
                        error: function (xhr, resp, text) {
                            \$('#ModalErreur').modal('show')
                        },
                    })
                } else {
                    notif.style.display = 'none';
                }

            },
            error: function (xhr, resp, text) {
                \$('#ModalErreur').modal('show')
            },
        })
    }, 30000);

    \$(\".besomessage\").off().on('click', function (event) {

        const elt = document.getElementById('chatbesoin');
        elt.innerHTML = \"\";
        elt.className = '';

        const momo = document.getElementById(\"chatbesoin\");
        momo.classList.add(this.id)

        const modal = document.getElementById(\"chat_besoins\");
        modal.style.display = \"block\";
        const div = document.createElement(\"div\");
        const divinfo = document.createElement(\"div\");
        const divchat = document.createElement(\"div\");

        const client = document.createElement(\"p\");
        const clispan = document.createElement(\"span\");
        const clispan2 = document.createElement(\"span\");
        const chantier = document.createElement(\"p\");
        const chanspan = document.createElement(\"span\");
        const chanspan2 = document.createElement(\"span\");
        const besospan = document.createElement(\"span\");
        const besospan2 = document.createElement(\"span\");
        const beso = document.createElement(\"p\");

        div.classList.add(\"mainer\");
        divinfo.classList.add(\"divinfo\");
        divchat.classList.add(\"divchat\");

        clispan.classList.add(\"clispan\");
        clispan2.classList.add(\"clispann\");

        chanspan.classList.add(\"clispan\");
        chanspan2.classList.add(\"clispann\");

        clispan.innerHTML = 'CLIENT: ';

        \$.ajax({
            type: 'POST',
            url: '/crm/welcome/chatbesoins/get/' + this.id,
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {

                let clip = respdata[0][\"besoin\"][\"chantier\"][\"client\"][\"nomclient\"];
                let clap = respdata[0][\"besoin\"][\"chantier\"][\"nomchantier\"];
                clispan2.innerHTML = clip.toUpperCase();
                client.append(clispan);
                client.append(clispan2);

                chanspan.innerHTML = 'CHANTIER: ';
                chanspan2.innerHTML = clap.toUpperCase();
                chantier.append(chanspan);
                chantier.append(chanspan2);

                besospan.classList.add(\"clispan\");

                besospan.innerHTML = 'BESOIN: ';
                besospan2.innerHTML = respdata[0][\"besoin\"][\"besoin\"];

                beso.append(besospan);
                beso.append(besospan2);

                divinfo.append(client);
                divinfo.append(chantier);
                divinfo.append(beso);

                div.append(divinfo);

                var usere = document.getElementById(\"iduser\").value;


                for (let i = 0; i < respdata.length; i++) {
                    const divmess = document.createElement(\"div\");
                    const sender = document.createElement(\"p\");
                    const mess = document.createElement(\"p\");
                    const datte = document.createElement(\"p\");

                    sender.innerHTML = respdata[i][\"sender\"][\"nom\"] + \" \" + respdata[i][\"sender\"][\"prenoms\"];
                    mess.innerHTML = respdata[i][\"message\"];
                    datte.innerHTML = moment(respdata[i][\"date\"]).locale(\"fr\").format('LLL');

                    sender.classList.add(\"pop\");
                    sender.classList.add(\"sender\");
                    mess.classList.add(\"pop\");
                    datte.classList.add(\"pop\");
                    datte.classList.add(\"datte\");
                    mess.classList.add(\"mess\");

                    if (parseInt(respdata[i][\"sender\"][\"id\"]) === parseInt(usere)) {
                        divmess.classList.add(\"divmessright\");
                    } else {
                        divmess.classList.add(\"divmessleft\");
                    }

                    divmess.append(sender);
                    divmess.append(mess);
                    divmess.append(datte);
                    divchat.append(divmess);
                }
                div.append(divchat);
                elt.append(div);

            },
            error: function (xhr, resp, text) {
                \$('#ModalErreur').modal('show')
            },
        })

        const footer = document.createElement(\"div\");
        footer.classList.add(\"footer\");
        const textarea = document.createElement(\"textarea\");
        textarea.placeholder = \" Votre message !\";
        textarea.setAttribute(\"id\", \"chattext\");
        textarea.classList.add(\"texta\");
        footer.append(textarea);
        const send = document.createElement(\"button\");
        send.textContent = 'ENVOYER';
        send.classList.add(\"butta\");
        send.onclick = function () {
            const li = document.getElementById('chatbesoin');
            id = li.className;
            let msn = \"\";
            if (document.getElementById(\"chattext\").value !== \"\") {
                msn = document.getElementById(\"chattext\").value;
            }
            \$.ajax({
                type: 'POST',
                url: '/crm/welcome/besoins/chat/' + id + \"/\" + msn,
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    divchat.innerHTML = \"\";
                    var usere = document.getElementById(\"iduser\").value;
                    for (let i = 0; i < respdata.length; i++) {
                        const divmess = document.createElement(\"div\");
                        const sender = document.createElement(\"p\");
                        const mess = document.createElement(\"p\");
                        const datte = document.createElement(\"p\");

                        sender.innerHTML = respdata[i][\"sender\"][\"nom\"] + \" \" + respdata[i][\"sender\"][\"prenoms\"];
                        mess.innerHTML = respdata[i][\"message\"];
                        datte.innerHTML = moment(respdata[i][\"date\"]).locale(\"fr\").format('LLL');

                        sender.classList.add(\"pop\");
                        sender.classList.add(\"sender\");
                        mess.classList.add(\"pop\");
                        datte.classList.add(\"pop\");
                        datte.classList.add(\"datte\");
                        mess.classList.add(\"mess\");

                        if (parseInt(respdata[i][\"sender\"][\"id\"]) === parseInt(usere)) {
                            divmess.classList.add(\"divmessright\");
                        } else {
                            divmess.classList.add(\"divmessleft\");
                        }

                        divmess.append(sender);
                        divmess.append(mess);
                        divmess.append(datte);
                        divchat.append(divmess);
                    }
                },
                error: function (xhr, resp, text) {
                    \$('#ModalErreur').modal('show')
                },
            })
        }
        setInterval(function () {
            const li = document.getElementById('chatbesoin');
            id = li.className;
            let msn = \"\";
            if (document.getElementById(\"chattext\").value !== \"\") {
                msn = document.getElementById(\"chattext\").value;
            }
            \$.ajax({
                type: 'POST',
                url: '/crm/welcome/chatbesoins/get/' + id,
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    divchat.innerHTML = \"\";
                    var usere = document.getElementById(\"iduser\").value;
                    for (let i = 0; i < respdata.length; i++) {
                        const divmess = document.createElement(\"div\");
                        const sender = document.createElement(\"p\");
                        const mess = document.createElement(\"p\");
                        const datte = document.createElement(\"p\");

                        sender.innerHTML = respdata[i][\"sender\"][\"nom\"] + \" \" + respdata[i][\"sender\"][\"prenoms\"];
                        mess.innerHTML = respdata[i][\"message\"];
                        datte.innerHTML = moment(respdata[i][\"date\"]).locale(\"fr\").format('LLL');

                        sender.classList.add(\"pop\");
                        sender.classList.add(\"sender\");
                        mess.classList.add(\"pop\");
                        datte.classList.add(\"pop\");
                        datte.classList.add(\"datte\");
                        mess.classList.add(\"mess\");

                        if (parseInt(respdata[i][\"sender\"][\"id\"]) === parseInt(usere)) {
                            divmess.classList.add(\"divmessright\");
                        } else {
                            divmess.classList.add(\"divmessleft\");
                        }

                        divmess.append(sender);
                        divmess.append(mess);
                        divmess.append(datte);
                        divchat.append(divmess);
                    }
                },
                error: function (xhr, resp, text) {
                    \$('#ModalErreur').modal('show')
                },
            })
        }, 10000);
        footer.append(send);
        momo.append(footer);

    });

    document.getElementById('close_chat_besoins').onclick = function () {
        const modal = document.getElementById(\"chat_besoins\");
        modal.style.display = \"none\";
    }

    \$(\".besoedit\").off().on('click', function (event) {
        \$('#Traitement').modal('show');
        window.location.href = '/crm/welcome/besoin/' + this.id;
    });

    \$(\".besodel\").off().on('click', function (event) {
        \$('#Traitement').modal('show');
        axios({
            method: 'DELETE',
            url: '/crm/welcome/besoins/del/' + this.id,
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
        }).then(function (response) {
            window.location.href = '/crm/welcome/tableau/' + \$(\"#tabb\").val();
        }).catch(function (error) {
            \$('#Traitement').modal('hide');
            \$('#ModalErreur').modal('show');
        });
    });

    \$(\".besocloturer\").off().on('click', function (event) {
        \$('#Traitement').modal('show');
        axios({
            method: 'POST',
            url: '/crm/welcome/besoins/cloturer/' + this.id,
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
        }).then(function (response) {
            window.location.href = '/crm/welcome/tableau/' + \$(\"#tabb\").val();
        }).catch(function (error) {
            \$('#Traitement').modal('hide');
            \$('#ModalErreur').modal('show');
        });
    });

    \$(\".besoarchiver\").off().on('click', function (event) {
        \$('#Traitement').modal('show');
        axios({
            method: 'POST',
            url: '/crm/welcome/besoins/archiver/' + this.id,
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
        }).then(function (response) {
            window.location.href = '/crm/welcome/tableau/' + \$(\"#tabb\").val();
        }).catch(function (error) {
            \$('#Traitement').modal('hide');
            \$('#ModalErreur').modal('show');
        });
    });

    \$(\".besorelancer\").off().on('click', function (event) {
        \$('#Traitement').modal('show');
        axios({
            method: 'POST',
            url: '/crm/welcome/besoins/relancer/' + this.id,
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
        }).then(function (response) {
            window.location.href = '/crm/welcome/tableau/' + \$(\"#tabb\").val();
        }).catch(function (error) {
            \$('#Traitement').modal('hide');
            \$('#ModalErreur').modal('show');
        });
    });

    if (\$(\"#idbeso\").val()) {
        const modal = document.getElementById(\"app_besoins\");
        modal.style.display = \"block\";
    }

    const chantiers = JSON.parse(\$('#pychantiers').val());

    \$(\"#recheclient\").on('change keyup paste', function () {
        if (this.value.length > 2) {
            axios({
                method: 'POST',
                url: '/crm/welcome/chantiers/' + this.value,
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
            }).then(function (response) {
                const pp = JSON.parse(response.data[\"result\"]);

                \$('#chantierdiv').html('');
                pp.map((chan) => {
                    if (chan.etat === \"encours\" || chan.etat === \"etude\") {
                        let typer = \"\";
                        let color = \"\";
                        let loca = \"\";
                        let supers = \" \";

                        if (chan.etat === \"encours\") {
                            typer = \"En cours\";
                            color = \"#4e73df\";
                        }
                        if (chan.etat === \"etude\") {
                            typer = \"En étude\";
                            color = \"#899093\";
                        }
                        if (chan.localisation !== null) {
                            loca = \"<br><b class='material-icons col-blue-grey' style='font-size: 14px'>place</b> <b class='col-blue-grey' style='font-size: 12px'>\"+loca+\"</b>\";
                        }else{
                            loca = \"<br><b class='material-icons col-blue-grey' style='font-size: 14px'>place</b><b class='col-blue-grey' style='font-size: 12px'> Non-défini</b>\";
                        }
                        let difpresta = chan.bonprestataires - chan.paieprestataires;
                        let diffourni  = chan.bonfournisseurs - chan.paiefournisseurs;
                        let difcharge  = chan.chargechantiers - chan.chargepaiechantiers;

                        let sumy  = chan.paieprestataires + chan.paiefournisseurs + chan.chargepaiechantiers;
                        let purcent  = (sumy/chan.cout)*100;

                        if(chan.superviseurs.length > 0){
                            for(let i = 0; i < chan.superviseurs.length; i++){
                                supers = \"- \"+chan.superviseurs[i][\"noms\"] + \"<br>\" + supers;
                            }
                        }else{
                            supers = \" - Non-défini\"
                        }

                        \$(\"#chantierdiv\").append(
                            \"<div class='col-md-4'>\" +
                            \"<button onclick=shasharr('chantier',\" + chan.id + \") class='btn' type='button' style='color: #000;background-color: #FFF; font-size: 13px; border-right: 3px solid \"+color+\"; border-left: 3px solid \"+color+\"; height: 200px; width: 100%; font-weight: bold; border-radius: 10px'>\"
                            + \"<span class='badge badge-pill' style='float: right; font-size: 11px; background-color: \"+color+\"'>\"+typer+\"</span><br>\" +
                            \"<p style='text-align: left !important;'><b class='col-pink'>\" + chan.client.nomclient.toUpperCase() + \"</b><br><b style='color: #4e73df; font-size: 12px'>\" + chan.nomchantier.toUpperCase() + \"</b>\" +
                            \"\"+loca+\"<br></p>\"+
                            \"<table style='width: 100%; font-weight: normal; font-size: 10px'>\" +
                            \"<tr><td colspan='3' style='font-size: 12px; text-align:left !important;'><b><u>Chefs du chantier: </u></b><br>\"+supers+\"</td></tr>\" +
                            \"<tr><td colspan='3' style='font-size: 11px; text-align:left !important;'><b><u>Budget utilisé:</u>    \"+formatNumber(purcent,2, ' ')+\"% </b><br> \"+formatNumber(sumy,2, ' ')+\" sur \"+formatNumber(chan.cout, 2, ' ')+\"</td></tr>\" +
                            \"</table>\" +
                            \"</button>\" +
                            \"</div>\");
                    }
                });
            }).catch(function (error) {
                \$('#ModalErreur').modal('show');
            });
        }

        if (this.value.length === 0) {
            chantiers.map((chan) => {
                if (chan.etat === \"encours\" || chan.etat === \"etude\") {
                    let typer = \"\";
                    let color = \"\";
                    let loca = \"\";
                    let supers = \" \";

                    if (chan.etat === \"encours\") {
                        typer = \"En cours\";
                        color = \"#4e73df\";
                    }
                    if (chan.etat === \"etude\") {
                        typer = \"En étude\";
                        color = \"#899093\";
                    }
                    if (chan.localisation !== null) {
                        loca = \"<br><b class='material-icons col-blue-grey' style='font-size: 14px'>place</b> <b class='col-blue-grey' style='font-size: 12px'>\"+loca+\"</b>\";
                    }else{
                        loca = \"<br><b class='material-icons col-blue-grey' style='font-size: 14px'>place</b><b class='col-blue-grey' style='font-size: 12px'> Non-défini</b>\";
                    }
                    let difpresta = chan.bonprestataires - chan.paieprestataires;
                    let diffourni  = chan.bonfournisseurs - chan.paiefournisseurs;
                    let difcharge  = chan.chargechantiers - chan.chargepaiechantiers;

                    let sumy  = chan.paieprestataires + chan.paiefournisseurs + chan.chargepaiechantiers;
                    let purcent  = (sumy/chan.cout)*100;

                    if(chan.superviseurs.length > 0){
                        for(let i = 0; i < chan.superviseurs.length; i++){
                            supers = \"- \"+chan.superviseurs[i][\"noms\"] + \"<br>\" + supers;
                        }
                    }else{
                        supers = \" - Non-défini\"
                    }

                    \$(\"#chantierdiv\").append(
                        \"<div class='col-md-4'>\" +
                        \"<button onclick=shasharr('chantier',\" + chan.id + \") class='btn' type='button' style='color: #000;background-color: #FFF; font-size: 13px; border-right: 3px solid \"+color+\"; border-left: 3px solid \"+color+\"; height: 200px; width: 100%; font-weight: bold; border-radius: 10px'>\"
                        + \"<span class='badge badge-pill' style='float: right; font-size: 11px; background-color: \"+color+\"'>\"+typer+\"</span><br>\" +
                        \"<p style='text-align: left !important;'><b class='col-pink'>\" + chan.client.nomclient.toUpperCase() + \"</b><br><b style='color: #4e73df; font-size: 12px'>\" + chan.nomchantier.toUpperCase() + \"</b>\" +
                        \"\"+loca+\"<br></p>\"+
                        \"<table style='width: 100%; font-weight: normal; font-size: 10px'>\" +
                        \"<tr><td colspan='3' style='font-size: 12px; text-align:left !important;'><b><u>Chefs du chantier: </u></b><br>\"+supers+\"</td></tr>\" +
                        \"<tr><td colspan='3' style='font-size: 11px; text-align:left !important;'><b><u>Budget utilisé:</u>    \"+formatNumber(purcent,2, ' ')+\"% </b><br> \"+formatNumber(sumy,2, ' ')+\" sur \"+formatNumber(chan.cout, 2, ' ')+\"</td></tr>\" +
                        \"</table>\" +
                        \"</button>\" +
                        \"</div>\");
                }
            });
        }

    });

    chantiers.map((chan) => {
        if (chan.etat === \"encours\" || chan.etat === \"etude\") {
            let typer = \"\";
            let color = \"\";
            let loca = \"\";
            let supers = \" \";

            if (chan.etat === \"encours\") {
                typer = \"En cours\";
                color = \"#4e73df\";
            }
            if (chan.etat === \"etude\") {
                typer = \"En étude\";
                color = \"#899093\";
            }
            if (chan.localisation !== null) {
               loca = \"<br><b class='material-icons col-blue-grey' style='font-size: 14px'>place</b> <b class='col-blue-grey' style='font-size: 12px'>\"+loca+\"</b>\";
            }else{
                loca = \"<br><b class='material-icons col-blue-grey' style='font-size: 14px'>place</b><b class='col-blue-grey' style='font-size: 12px'> Non-défini</b>\";
            }
            let difpresta = chan.bonprestataires - chan.paieprestataires;
            let diffourni  = chan.bonfournisseurs - chan.paiefournisseurs;
            let difcharge  = chan.chargechantiers - chan.chargepaiechantiers;

            let sumy  = chan.paieprestataires + chan.paiefournisseurs + chan.chargepaiechantiers;
            let purcent  = (sumy/chan.cout)*100;

            if(chan.superviseurs.length > 0){
                for(let i = 0; i < chan.superviseurs.length; i++){
                    supers = \"- \"+chan.superviseurs[i][\"noms\"] + \"<br>\" + supers;
                }
            }else{
                supers = \" - Non-défini\"
            }

            \$(\"#chantierdiv\").append(
                \"<div class='col-md-4'>\" +
                \"<button onclick=shasharr('chantier',\" + chan.id + \") class='btn' type='button' style='color: #000;background-color: #FFF; font-size: 13px; border-right: 3px solid \"+color+\"; border-left: 3px solid \"+color+\"; height: 200px; width: 100%; font-weight: bold; border-radius: 10px'>\"
                + \"<span class='badge badge-pill' style='float: right; font-size: 11px; background-color: \"+color+\"'>\"+typer+\"</span><br>\" +
                \"<p style='text-align: left !important;'><b class='col-pink'>\" + chan.client.nomclient.toUpperCase() + \"</b><br><b style='color: #4e73df; font-size: 12px'>\" + chan.nomchantier.toUpperCase() + \"</b>\" +
                \"\"+loca+\"<br></p>\"+
                \"<table style='width: 100%; font-weight: normal; font-size: 10px'>\" +
                \"<tr><td colspan='3' style='font-size: 12px; text-align:left !important;'><b><u>Chefs du chantier: </u></b><br>\"+supers+\"</td></tr>\" +
                \"<tr><td colspan='3' style='font-size: 11px; text-align:left !important;'><b><u>Budget utilisé:</u>    \"+formatNumber(purcent,2, ' ')+\"% </b><br> \"+formatNumber(sumy,2, ' ')+\" sur \"+formatNumber(chan.cout, 2, ' ')+\"</td></tr>\" +
                \"</table>\" +
                \"</button>\" +
                \"</div>\");
        }
    });

    \$('#selboxa').on('change', function () {
        let id = this.value;
        \$('#prevpresta').html('');
        \$.ajax({
            type: 'GET',
            url: '/crm/budget/bon/lignes/' + id,
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                let lignes = respdata;
                lignes.map((lign) => {
                    \$('#prevpresta').append('<option value=' + lign.id + '>' + lign.designation + '</option>');
                });
                let nomchantier = respdata[0].chantier[\"nomchantier\"];
                let nomclient = respdata[0].chantier[\"client\"][\"nomclient\"];
                let aq = nomclient + \" | \" + nomchantier;
                CKEDITOR.instances[\"editor15\"].setData(aq);
            },
            error: function (xhr, resp, text) {
                \$('#ModalErreur').modal('show')
            },
        })
    });
    \$('#selbox').on('change', function () {
        let id = this.value;
        \$('#prevfour').html('');
        \$.ajax({
            type: 'GET',
            url: '/crm/budget/bon/lignes/' + id,
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                let lignes = respdata;
                lignes.map((lign) => {
                    \$('#prevfour').append('<option value=' + lign.id + '>' + lign.designation + '</option>');
                });
                let nomchantier = respdata[0].chantier[\"nomchantier\"];
                let nomclient = respdata[0].chantier[\"client\"][\"nomclient\"];
                let aq = nomclient + \" | \" + nomchantier;
                CKEDITOR.instances[\"editor16\"].setData(aq);
            },
            error: function (xhr, resp, text) {
                \$('#ModalErreur').modal('show')
            },
        })
    });

    \$('#addClient').off().on(\"click\", function (event) {
        event.preventDefault()
        if (\$(this).closest('form').valid()) {
            \$('#divClient').hide();
            \$('#loadClient').css('display', '');
            axios({
                method: 'POST',
                url: '/crm/client/add',
                data: JSON.stringify(\$('#addClientForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
            }).then(function (response) {
                window.location.href = '/crm/welcome/tableau/' + \$(\"#tabb\").val();
            }).catch(function (error) {
                \$('#Traitement').modal('hide');
                \$('#ModalErreur').modal('show');
            });
        }
    })
    \$('#addBesoins').off().on(\"click\", function (event) {
        event.preventDefault()
        if (\$(this).closest('form').valid()) {
            \$('#addBesoins').hide();
            \$('#loadBesoins').css('display', '');
            \$('#editor12').val(CKEDITOR.instances['editor12'].getData())
            axios({
                method: 'POST',
                url: '/crm/welcome/besoins/add',
                data: new FormData(\$('#addBesoinsForm')[0]),
                contentType: false,
                processData: false,
                cache: false,
                dataType: 'json',
            }).then(function (response) {
                window.location.href = '/crm/welcome/tableau/' + \$(\"#tabb\").val();
            }).catch(function (error) {
                \$('#Traitement').modal('hide');
                \$('#ModalErreur').modal('show');
            });
        }
    })
    \$('#updBesoins').off().on(\"click\", function (event) {
        event.preventDefault()
        if (\$(this).closest('form').valid()) {
            \$('#updBesoins').hide();
            \$('#loadBesoins').css('display', '');
            \$('#editor12').val(CKEDITOR.instances['editor12'].getData())
            axios({
                method: 'POST',
                url: '/crm/welcome/besoins/upd/' + \$(\"#idbeso\").val(),
                data: JSON.stringify(\$('#addBesoinsForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
            }).then(function (response) {
                window.location.href = '/crm/welcome/tableau/' + \$(\"#tabb\").val();
            }).catch(function (error) {
                \$('#Traitement').modal('hide');
                \$('#ModalErreur').modal('show');
            });
        }
    })
    \$('#addChantier').on(\"click\", async function (event) {
        event.preventDefault()
        if (\$(this).closest('form').valid())
            \$('#divChantier').hide()
        \$('#loadChantier').css('display', '')
        \$('#description').val(CKEDITOR.instances['description'].getData());
        await axios({
            method: 'POST',
            url: '/crm/chantiers/add',
            data: JSON.stringify(\$('#addChantierForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
        }).then(function (response) {
            window.location.href = '/crm/welcome/tableau/' + \$(\"#tabb\").val();
        }).catch(function (error) {
            \$('#Traitement').modal('hide');
            \$('#ModalErreur').modal('show');
        });
    });
    \$('#addeDevis').on(\"click\", function (event) {
        event.preventDefault()
        if (\$(this).closest('form').valid()) {
            \$('#addeDevis').hide()
            \$('#closeDevis').hide()
            \$('#loadDevis').css('display', '')
            \$('#editor5').val(CKEDITOR.instances['editor5'].getData())
            \$('#editor6').val(CKEDITOR.instances['editor6'].getData())
            \$.ajax({
                type: 'POST',
                url: '/crm/devis/adde',
                data: JSON.stringify(\$('#addDevisForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    if (jqXHR.status == '201') {
                        \$('#mdModalDevis').modal('toggle')
                        window.location.href = '/crm/devis/' + respdata['result'][0]['iddevis'] + '/' + respdata['result'][0]['idchantier'];
                    }
                },
                error: function (xhr, resp, text) {
                    \$('#mdModalDevis').modal('toggle')
                    \$('#ModalErreur').modal('show')
                },
            })
        }
    })
    \$(\"#facfac\").off().on(\"change\", async function () {
        const id = \$('select[name=\"facfac\"] :selected').attr('class');

        \$(\".dvface\").empty();
        \$(\".dvface\").append('<span class=\"col-pink\">Règlements effectués:... </span> <img src=\"/img/loading.gif\" style=\"width: 20px\">');
        \$(\".dvfac\").empty();
        \$(\".dvfac\").append('<span class=\"col-pink\">Facture Total TTC:... </span> <img src=\"/img/loading.gif\" style=\"width: 20px\">');
        \$(\".dvfaces\").empty();
        \$(\".dvfaces\").append('<span class=\"col-pink\">Reste à régler:... </span> <img src=\"/img/loading.gif\" style=\"width: 20px\">');
        await axios({
            method: 'GET', url: '/crm/facture/getreste/' + id, dataType: 'json',
        }).then(function (response) {
            let data = response.data;
            \$(\"#montant\").val(data[\"reste\"].replaceAll(' ', ''));
            \$(\".dvfac\").empty();
            \$(\".dvfac\").append('<span class=\"col-blue-grey bolo700\">Facture Total TTC:</span><span class=\"col-pink bolo700\"> ' + data[\"ttc\"] + '</span>');
            \$(\".dvface\").empty();
            \$(\".dvface\").append('<span class=\"col-blue-grey bolo700\">Règlements effectués:</span><span class=\"col-pink bolo700\"> ' + data[\"regler\"] + '</span>');
            \$(\".dvfaces\").empty();
            \$(\".dvfaces\").append('<span class=\"col-blue-grey bolo700\">Reste à régler:</span><span class=\"col-green bolo700\"> ' + data[\"reste\"] + '</span>');
            \$(\".resta\").append(data[\"reste\"]);
        });

    })
    \$('#addReglementChantiers').off().on(\"click\", function (event) {
        event.preventDefault();
        if (\$(this).closest('form').valid()) {
            let rest = \$('.resta').html().replaceAll(' ', '');
            \$(\".restu\").append(\" \");
            if (parseFloat(\$(\"#montant\").val()) <= parseFloat(rest)) {
                \$('#addReglementChantiers').hide()
                \$('#closeReglement').hide()
                \$('#loadReglement').css('display', '')
                \$.ajax({
                    type: 'POST',
                    url: '/crm/chantiers/reglement/chantiers/add',
                    data: JSON.stringify(\$('#addReglementForm').serializeObject()),
                    contentType: 'application/json; charset=utf-8',
                    dataType: 'json',
                    success: function (respdata, textStatus, jqXHR) {
                        if (jqXHR.status == '201') {
                            \$('#modalReglement').modal('toggle')
                            window.location.href = '/crm/client/' + respdata['result'];
                        }
                    },
                    error: function (xhr, resp, text) {
                        \$('#modalReglement').modal('toggle')
                        \$('#ModalErreur').modal('show')
                        \$('#addReglementChantiers').show()
                        \$('#closeReglement').show()
                        \$('#loadReglement').css('display', 'none')
                    },
                })
            } else {
                \$(\".restu\").append(\"Montant supérieur à la somme restante.\");
            }
        }
    })
    \$('#veligne').on('change', function () {
        let id = \$('#addCaisseForm option:selected').val();
        \$.ajax({
            type: 'GET',
            url: '/crm/budget/devis/lignes/' + id,
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                let lignes = respdata;
                lignes.map((lign) => {
                    \$('#prevcaiss').append('<option value=' + lign.id + '>' + lign.designation + '</option>');
                });
            },
            error: function (xhr, resp, text) {
                \$('#ModalErreur').modal('show')
            },
        })
    });
    \$('#addeeCaisse').on(\"click\", function (event) {
        event.preventDefault()
        if (\$(this).closest('form').valid()) {
            \$('#addeeCaisse').hide()
            \$('#closeeCaisse').hide()
            \$('#loadeeCaisse').css('display', '')
            \$('#editor').val(CKEDITOR.instances['editor'].getData())
            \$.ajax({
                type: 'POST',
                url: '/crm/caisse/adda',
                data: JSON.stringify(\$('#addCaisseForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    if (jqXHR.status == '201') {
                        \$('#mdModalCaisse').modal('toggle')
                        window.location.href =
                            '/crm/caisse/' +
                            respdata['result'][0]['numcaisse'] +
                            '/' +
                            respdata['result'][0]['idchantier']
                    }
                },
                error: function (xhr, resp, text) {
                    \$('#mdModalCaisse').modal('toggle')
                    \$('#ModalErreur').modal('show')
                },
            })
        }
    })
    \$('#adduBon').on(\"click\", function (event) {
        event.preventDefault()
        if (\$(this).closest('form').valid()) {
            \$('#adduBon').hide()
            \$('#closuBon').hide()
            \$('#loaduBon').css('display', '')
            \$('#editor10').val(CKEDITOR.instances['editor10'].getData())
            \$('#editor11').val(CKEDITOR.instances['editor11'].getData())
            \$.ajax({
                type: 'POST',
                url: '/crm/bon/chanpresta/adda',
                data: JSON.stringify(\$('#adduBonForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    if (jqXHR.status == '201') {
                        \$('#mdModalBon').modal('toggle')
                        window.location.href =
                            '/crm/bon/' +
                            respdata['result'][0]['numbon'] +
                            '/' +
                            respdata['result'][0]['idchantier']
                    }
                },
                error: function (xhr, resp, text) {
                    \$('#mdModalBon').modal('toggle')
                    \$('#ModalErreur').modal('show')
                },
            })
        }
    })
    \$('#addiBon').on(\"click\", function (event) {
        event.preventDefault()
        if (\$(this).closest('form').valid()) {
            \$('#addiBon').hide()
            \$('#closeBon').hide()
            \$('#loadBon').css('display', '')
            \$('#editor7').val(CKEDITOR.instances['editor7'].getData())
            \$('#editor2').val(CKEDITOR.instances['editor2'].getData())
            \$.ajax({
                type: 'POST',
                url: '/crm/bon/addi',
                data: JSON.stringify(\$('#addBonForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    if (jqXHR.status == '201') {
                        \$('#mdModalBon').modal('toggle')
                        window.location.href =
                            '/crm/bon/' +
                            respdata['result'][0]['numbon'] +
                            '/' +
                            respdata['result'][0]['idchantier']
                    }
                },
                error: function (xhr, resp, text) {
                    \$('#mdModalBon').modal('toggle')
                    \$('#ModalErreur').modal('show')
                },
            })
        }
    })
    \$('#addarCaissePersonnel').off().on(\"click\", function (event) {
        event.preventDefault()
        if (\$(this).closest('form').valid()) {
            \$('#addarCaissePersonnel').hide()
            \$('#closarCaissePersonnel').hide()
            \$('#loadarCaissePersonnel').css('display', '')
            \$('#editor20').val(CKEDITOR.instances['editor20'].getData())
            \$.ajax({
                type: 'POST',
                url: '/crm/caisse/personnel/add',
                data: JSON.stringify(\$('#addCaissePersonnelForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    if (jqXHR.status == '201') {
                        \$('#modalCaissePerso').modal('toggle');
                        window.location.href = '/crm/caisse/' + respdata['result'][0]['numcaisse'] + '/' + respdata['result'][0]['idchantier']
                    }
                },
                error: function (xhr, resp, text) {
                    \$('#modalCaissePerso').modal('toggle')
                    \$('#ModalErreur').modal('show')
                },
            })
        }
    })
    \$('#addiosCaisse').off().on(\"click\", function (event) {
        event.preventDefault()
        if (\$(this).closest('form').valid()) {
            \$('#addiosCaisse').hide()
            \$('#loadiosCaisse').css('display', '')
            \$('#editor19').val(CKEDITOR.instances['editor19'].getData())
            \$.ajax({
                type: 'POST',
                url: '/crm/caisse/frais/add',
                data: JSON.stringify(\$('#addCaisseChargeForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    if (jqXHR.status == '201') {
                        \$('#mdModalCaisse').modal('toggle');
                        window.location.href = '/crm/caisse/' + respdata['result'][0]['numcaisse'] + '/' + respdata['result'][0]['idchantier']
                    }
                },
                error: function (xhr, resp, text) {
                    \$('#mdModalCaisse').modal('toggle')
                    \$('#ModalErreur').modal('show')
                },
            })
        }
    })

    window.modalExercices = function modalExercices() {
        const modal = document.getElementById(\"app_exercices\");
        document.getElementById(\"app_exercices\").style.display = \"block\";
        modal.style.display = \"block\";
    }

    window.modalBesoins = function modalBesoins() {
        const modal = document.getElementById(\"app_besoins\");
        document.getElementById(\"app_besoins\").style.display = \"block\";
        modal.style.display = \"block\";
    }
    document.getElementById('close_add_besoins').onclick = function () {
        const modal = document.getElementById(\"app_besoins\");
        modal.style.display = \"none\";
    }

    window.modalClient = function modalClient() {
        const modal = document.getElementById(\"app_add_client\");
        document.getElementById(\"app_add_client\").style.display = \"block\";
        modal.style.display = \"block\";
    }
    document.getElementById('close_add_client').onclick = function () {
        const modal = document.getElementById(\"app_add_client\");
        modal.style.display = \"none\";
    }

    window.modalChantier = function modalChantier() {
        const modal = document.getElementById(\"app_add_chantier\");
        document.getElementById(\"app_add_chantier\").style.display = \"block\";
        modal.style.display = \"block\";
    }
    document.getElementById('close_add_chantier').onclick = function () {
        const modal = document.getElementById(\"app_add_chantier\");
        modal.style.display = \"none\";
    }

    window.modalDevis = function modalDevis() {
        const modal = document.getElementById(\"app_add_devis\");
        document.getElementById(\"app_add_devis\").style.display = \"block\";
        modal.style.display = \"block\";
    }
    document.getElementById('close_add_devis').onclick = function () {
        const modal = document.getElementById(\"app_add_devis\");
        modal.style.display = \"none\";
    }

    window.modalDecompte = function modalDecompte() {
        const modal = document.getElementById(\"app_add_decompte\");
        document.getElementById(\"app_add_decompte\").style.display = \"block\";
        modal.style.display = \"block\";
    }
    document.getElementById('close_add_decompte').onclick = function () {
        const modal = document.getElementById(\"app_add_decompte\");
        modal.style.display = \"none\";
    }

    window.modalFacture = function modalFacture() {
        const modal = document.getElementById(\"app_add_facture\");
        document.getElementById(\"app_add_facture\").style.display = \"block\";
        modal.style.display = \"block\";
    }
    document.getElementById('close_add_facture').onclick = function () {
        const modal = document.getElementById(\"app_add_facture\");
        modal.style.display = \"none\";
    }

    window.modalPrestataire = function modalPrestataire() {
        const modal = document.getElementById(\"app_add_prestataire\");
        document.getElementById(\"app_add_prestataire\").style.display = \"block\";
        modal.style.display = \"block\";
    }
    document.getElementById('close_add_prestataire').onclick = function () {
        const modal = document.getElementById(\"app_add_prestataire\");
        modal.style.display = \"none\";
    }

    window.modalContact = function modalContact() {
        const modal = document.getElementById(\"app_add_contact\");
        document.getElementById(\"app_add_contact\").style.display = \"block\";
        modal.style.display = \"block\";
    }
    document.getElementById('close_add_contact').onclick = function () {
        const modal = document.getElementById(\"app_add_contact\");
        modal.style.display = \"none\";
    }

    window.modalFournisseur = function modalFournisseur() {
        const modal = document.getElementById(\"app_add_fournisseur\");
        document.getElementById(\"app_add_fournisseur\").style.display = \"block\";
        modal.style.display = \"block\";
    }

    document.getElementById('close_add_fournisseur').onclick = function () {
        const modal = document.getElementById(\"app_add_fournisseur\");
        modal.style.display = \"none\";
    }

    window.modalPerso = function modalPerso() {
        const modal = document.getElementById(\"app_add_personnel\");
        document.getElementById(\"app_add_personnel\").style.display = \"block\";
        modal.style.display = \"block\";
    }
    document.getElementById('close_add_personnel').onclick = function () {
        const modal = document.getElementById(\"app_add_personnel\");
        modal.style.display = \"none\";
    }

    window.modalReglement = function modalReglement() {
        const modal = document.getElementById(\"app_add_reglement\");
        document.getElementById(\"app_add_reglement\").style.display = \"block\";
        modal.style.display = \"block\";
    }
    document.getElementById('close_add_reglement').onclick = function () {
        const modal = document.getElementById(\"app_add_reglement\");
        modal.style.display = \"none\";
    }

    window.modalChargeChantier = function modalChargeChantier() {
        const modal = document.getElementById(\"app_add_chargechantier\");
        document.getElementById(\"app_add_chargechantier\").style.display = \"block\";
        modal.style.display = \"block\";
    }
    document.getElementById('close_add_chargechantier').onclick = function () {
        const modal = document.getElementById(\"app_add_chargechantier\");
        modal.style.display = \"none\";
    }

    window.modalBonFournisseur = function modalBonFournisseur() {
        const modal = document.getElementById(\"app_add_bonfournisseur\");
        document.getElementById(\"app_add_bonfournisseur\").style.display = \"block\";
        modal.style.display = \"block\";
    }
    document.getElementById('close_add_bonfournisseur').onclick = function () {
        const modal = document.getElementById(\"app_add_bonfournisseur\");
        modal.style.display = \"none\";
    }

    window.modalPaieFournisseur = function modalPaieFournisseur() {
        const modal = document.getElementById(\"app_add_paiefournisseur\");
        document.getElementById(\"app_add_paiefournisseur\").style.display = \"block\";
        modal.style.display = \"block\";
    }
    document.getElementById('close_add_paiefournisseur').onclick = function () {
        const modal = document.getElementById(\"app_add_paiefournisseur\");
        modal.style.display = \"none\";
    }

    window.modalBonPrestataire = function modalBonPrestataire() {
        const modal = document.getElementById(\"app_add_bonprestataire\");
        document.getElementById(\"app_add_bonprestataire\").style.display = \"block\";
        modal.style.display = \"block\";
    }
    document.getElementById('close_add_bonprestataire').onclick = function () {
        const modal = document.getElementById(\"app_add_bonprestataire\");
        modal.style.display = \"none\";
    }

    window.modalPaiePrestataire = function modalPaiePrestataire() {
        const modal = document.getElementById(\"app_add_paieprestataire\");
        document.getElementById(\"app_add_paieprestataire\").style.display = \"block\";
        modal.style.display = \"block\";
    }
    document.getElementById('close_add_paieprestataire').onclick = function () {
        const modal = document.getElementById(\"app_add_paieprestataire\");
        modal.style.display = \"none\";
    }

    window.modalBonSuivi = function modalBonSuivi() {
        const modal = document.getElementById(\"app_add_bonsuivi\");
        document.getElementById(\"app_add_bonsuivi\").style.display = \"block\";
        modal.style.display = \"block\";
    }
    document.getElementById('close_add_bonsuivi').onclick = function () {
        const modal = document.getElementById(\"app_add_bonsuivi\");
        modal.style.display = \"none\";
    }

    window.modalPaiePersonnel = function modalPaiePersonnel() {
        const modal = document.getElementById(\"app_add_paiepersonnel\");
        document.getElementById(\"app_add_paiepersonnel\").style.display = \"block\";
        modal.style.display = \"block\";
    }
    document.getElementById('close_add_paiepersonnel').onclick = function () {
        const modal = document.getElementById(\"app_add_paiepersonnel\");
        modal.style.display = \"none\";
    }

    window.modalChargesInternes = function modalChargesInternes() {
        const modal = document.getElementById(\"app_add_chargesinternes\");
        document.getElementById(\"app_add_chargesinternes\").style.display = \"block\";
        modal.style.display = \"block\";
    }
    document.getElementById('close_add_chargesinternes').onclick = function () {
        const modal = document.getElementById(\"app_add_chargesinternes\");
        modal.style.display = \"none\";
    }

    window.modalBonsChargesInternes = function modalBonsChargesInternes() {
        const modal = document.getElementById(\"app_add_bonschargesinternes\");
        document.getElementById(\"app_add_bonschargesinternes\").style.display = \"block\";
        modal.style.display = \"block\";
    }
    document.getElementById('close_add_bonschargesinternes').onclick = function () {
        const modal = document.getElementById(\"app_add_bonschargesinternes\");
        modal.style.display = \"none\";
    }

    window.shashares = function shashares() {
        const modal = document.getElementById(\"searcheur\");
        modal.style.display = \"block\";
    }
    window.shasharo = function shasharo() {
        const modal = document.getElementById(\"modpara\");
        modal.style.display = \"block\";
    }
    window.shashar = function shashar(a) {
        event.preventDefault();
        localStorage.setItem('reloadd', a);
        document.getElementById('shaacontent').innerText = ' ';
        const frame = document.createElement(\"IFRAME\");
        frame.setAttribute(\"style\", 'width: 100%; height: 100%; border: none;');
        frame.setAttribute(\"id\", 'framer');
        frame.setAttribute(\"src\", '/crm/' + a);
        document.getElementById('shaacontent').appendChild(frame);
        const modal = document.getElementById(\"myModale\");
        modal.style.display = \"block\";
    }

    window.shasharr = function shasharr(a, b) {
        event.preventDefault();
        localStorage.setItem('reloadd', a);
        document.getElementById('shaacontent').innerText = ' ';
        const frame = document.createElement(\"IFRAME\");
        frame.setAttribute(\"style\", 'width: 100%; height: 100%; border: none;');
        frame.setAttribute(\"id\", 'framer');
        frame.setAttribute(\"src\", '/crm/' + a + \"/\" + b);
        document.getElementById('shaacontent').appendChild(frame);
        const modal = document.getElementById(\"myModale\");
        modal.style.display = \"block\";
    }

    document.getElementById('closeframer').onclick = function () {
        const modal = document.getElementById(\"myModale\");
        modal.style.display = \"none\";
    }
    document.getElementById('closeframers').onclick = function () {
        const modal = document.getElementById(\"searcheur\");
        modal.style.display = \"none\";
    }
    document.getElementById('closeNumeroter').onclick = function () {
        const modal = document.getElementById(\"modpara\");
        modal.style.display = \"none\";
    }
    document.getElementById('reloadframer').onclick = function () {
        const aa = localStorage.getItem('reloadd');
        const modal = document.getElementById(\"myModale\");
        document.getElementById('shaacontent').innerText = ' ';
        const frame = document.createElement(\"IFRAME\");
        frame.setAttribute(\"style\", 'width: 100%; height: 100%; border: none;');
        frame.setAttribute(\"id\", 'framer');
        frame.setAttribute(\"src\", '/crm/' + aa);
        document.getElementById('shaacontent').appendChild(frame);
        modal.style.display = \"block\";
    }
    document.getElementById('goback').onclick = function () {
        window.history.back();
    }
    document.getElementById('goforward').onclick = function () {
        window.history.forward();
    }


</script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\"
        integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\"
        crossorigin=\"anonymous\"></script>
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
        return "security/start.html.twig";
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
        return array (  6580 => 4511,  6576 => 4510,  6572 => 4509,  6568 => 4508,  6564 => 4507,  6560 => 4506,  6556 => 4505,  6551 => 4503,  6547 => 4502,  6543 => 4501,  6539 => 4500,  6535 => 4499,  6531 => 4498,  6526 => 4496,  6522 => 4495,  6518 => 4494,  6514 => 4493,  6510 => 4492,  6506 => 4491,  6502 => 4490,  6498 => 4489,  6494 => 4488,  6490 => 4487,  6486 => 4486,  6482 => 4485,  6478 => 4484,  6469 => 4477,  6460 => 4470,  6454 => 4469,  6446 => 4464,  6442 => 4463,  6438 => 4462,  6429 => 4456,  6424 => 4454,  6419 => 4452,  6414 => 4449,  6411 => 4448,  6407 => 4447,  6393 => 4435,  6375 => 4425,  6369 => 4422,  6363 => 4419,  6358 => 4417,  6355 => 4416,  6351 => 4415,  6312 => 4378,  6303 => 4372,  6189 => 4260,  6187 => 4259,  6184 => 4258,  6174 => 4251,  6062 => 4141,  6060 => 4140,  6034 => 4116,  5946 => 4030,  5943 => 4029,  5847 => 3935,  5845 => 3934,  5833 => 3925,  5827 => 3921,  5823 => 3920,  5814 => 3916,  5807 => 3911,  5805 => 3910,  5802 => 3909,  5797 => 3906,  5791 => 3902,  5785 => 3901,  5780 => 3898,  5773 => 3894,  5767 => 3891,  5764 => 3890,  5762 => 3889,  5757 => 3887,  5752 => 3885,  5749 => 3884,  5741 => 3882,  5733 => 3880,  5729 => 3879,  5724 => 3877,  5720 => 3876,  5711 => 3872,  5707 => 3870,  5704 => 3869,  5700 => 3868,  5689 => 3859,  5683 => 3858,  5674 => 3852,  5667 => 3848,  5656 => 3842,  5651 => 3840,  5645 => 3837,  5640 => 3835,  5637 => 3834,  5634 => 3833,  5630 => 3832,  5587 => 3791,  5582 => 3788,  5576 => 3784,  5574 => 3783,  5519 => 3731,  5436 => 3650,  5427 => 3643,  5425 => 3642,  5418 => 3637,  5414 => 3635,  5405 => 3628,  5403 => 3627,  5398 => 3624,  5393 => 3621,  5387 => 3620,  5382 => 3617,  5374 => 3612,  5367 => 3608,  5361 => 3605,  5354 => 3601,  5347 => 3597,  5344 => 3596,  5341 => 3595,  5337 => 3593,  5329 => 3589,  5326 => 3588,  5317 => 3583,  5314 => 3582,  5305 => 3577,  5302 => 3576,  5293 => 3571,  5291 => 3570,  5288 => 3569,  5286 => 3568,  5279 => 3564,  5274 => 3562,  5271 => 3561,  5263 => 3559,  5255 => 3557,  5251 => 3556,  5246 => 3554,  5242 => 3553,  5238 => 3551,  5232 => 3549,  5226 => 3547,  5220 => 3545,  5215 => 3543,  5206 => 3539,  5202 => 3537,  5197 => 3536,  5192 => 3535,  5187 => 3534,  5183 => 3533,  5180 => 3532,  5177 => 3531,  5173 => 3530,  5169 => 3528,  5165 => 3526,  5145 => 3508,  5143 => 3507,  5139 => 3505,  5132 => 3500,  5125 => 3495,  5122 => 3494,  5115 => 3489,  5108 => 3484,  5106 => 3483,  5094 => 3474,  5080 => 3462,  5076 => 3461,  5073 => 3460,  5071 => 3459,  5062 => 3453,  5055 => 3449,  5031 => 3430,  5026 => 3427,  5021 => 3424,  5016 => 3421,  5010 => 3420,  5005 => 3417,  4997 => 3412,  4990 => 3408,  4984 => 3405,  4977 => 3401,  4970 => 3397,  4967 => 3396,  4964 => 3395,  4960 => 3393,  4952 => 3389,  4949 => 3388,  4940 => 3383,  4937 => 3382,  4928 => 3377,  4925 => 3376,  4916 => 3371,  4914 => 3370,  4911 => 3369,  4909 => 3368,  4902 => 3364,  4897 => 3362,  4894 => 3361,  4886 => 3359,  4878 => 3357,  4874 => 3356,  4869 => 3354,  4865 => 3353,  4861 => 3351,  4855 => 3349,  4849 => 3347,  4843 => 3345,  4838 => 3343,  4829 => 3339,  4825 => 3337,  4820 => 3336,  4815 => 3335,  4810 => 3334,  4806 => 3333,  4803 => 3332,  4800 => 3331,  4796 => 3330,  4792 => 3328,  4769 => 3307,  4762 => 3302,  4755 => 3297,  4752 => 3296,  4745 => 3291,  4738 => 3286,  4736 => 3285,  4724 => 3276,  4710 => 3264,  4706 => 3263,  4702 => 3261,  4700 => 3260,  4691 => 3254,  4684 => 3250,  4660 => 3231,  4652 => 3225,  4646 => 3224,  4641 => 3221,  4634 => 3217,  4628 => 3214,  4625 => 3213,  4623 => 3212,  4618 => 3210,  4613 => 3208,  4610 => 3207,  4602 => 3205,  4594 => 3203,  4590 => 3202,  4585 => 3200,  4581 => 3199,  4572 => 3195,  4568 => 3193,  4565 => 3192,  4561 => 3191,  4550 => 3182,  4544 => 3181,  4535 => 3175,  4528 => 3171,  4517 => 3165,  4512 => 3163,  4506 => 3160,  4501 => 3158,  4498 => 3157,  4495 => 3156,  4491 => 3155,  4448 => 3114,  4443 => 3111,  4437 => 3107,  4435 => 3106,  4380 => 3054,  4297 => 2973,  4288 => 2966,  4286 => 2965,  4272 => 2953,  4270 => 2952,  4266 => 2950,  4264 => 2949,  4261 => 2948,  4255 => 2944,  4244 => 2935,  4242 => 2934,  4238 => 2932,  4232 => 2931,  4227 => 2928,  4220 => 2924,  4215 => 2922,  4212 => 2921,  4210 => 2920,  4205 => 2918,  4200 => 2916,  4197 => 2915,  4189 => 2913,  4181 => 2911,  4177 => 2910,  4172 => 2908,  4168 => 2907,  4159 => 2903,  4155 => 2901,  4152 => 2900,  4148 => 2899,  4137 => 2890,  4131 => 2889,  4122 => 2883,  4116 => 2880,  4106 => 2875,  4100 => 2872,  4094 => 2869,  4089 => 2867,  4086 => 2866,  4083 => 2865,  4079 => 2864,  4062 => 2849,  4053 => 2843,  4045 => 2837,  4043 => 2836,  3995 => 2790,  3991 => 2788,  3985 => 2784,  3983 => 2783,  3960 => 2762,  3956 => 2760,  3948 => 2754,  3946 => 2753,  3941 => 2750,  3936 => 2747,  3930 => 2746,  3925 => 2743,  3918 => 2739,  3912 => 2736,  3906 => 2733,  3900 => 2730,  3894 => 2727,  3891 => 2726,  3888 => 2725,  3884 => 2723,  3876 => 2719,  3873 => 2718,  3865 => 2714,  3862 => 2713,  3853 => 2708,  3850 => 2707,  3841 => 2702,  3839 => 2701,  3836 => 2700,  3834 => 2699,  3827 => 2695,  3822 => 2693,  3819 => 2692,  3811 => 2690,  3803 => 2688,  3799 => 2687,  3794 => 2685,  3790 => 2684,  3786 => 2682,  3780 => 2680,  3774 => 2678,  3768 => 2676,  3763 => 2674,  3754 => 2670,  3750 => 2668,  3745 => 2667,  3740 => 2666,  3735 => 2665,  3731 => 2664,  3728 => 2663,  3725 => 2662,  3721 => 2661,  3717 => 2659,  3713 => 2657,  3690 => 2636,  3688 => 2635,  3685 => 2634,  3678 => 2629,  3671 => 2624,  3668 => 2623,  3662 => 2619,  3655 => 2614,  3653 => 2613,  3648 => 2610,  3615 => 2579,  3598 => 2564,  3583 => 2551,  3581 => 2550,  3566 => 2537,  3560 => 2533,  3554 => 2529,  3552 => 2528,  3528 => 2506,  3519 => 2499,  3509 => 2491,  3507 => 2490,  3498 => 2483,  3496 => 2482,  3492 => 2480,  3490 => 2479,  3482 => 2474,  3468 => 2462,  3464 => 2461,  3453 => 2453,  3446 => 2449,  3421 => 2429,  3414 => 2424,  3412 => 2423,  3407 => 2421,  3403 => 2420,  3399 => 2419,  3395 => 2418,  3391 => 2417,  3382 => 2411,  3371 => 2403,  3357 => 2392,  3345 => 2383,  3333 => 2374,  3319 => 2363,  3307 => 2354,  3295 => 2345,  3281 => 2334,  3269 => 2325,  3257 => 2316,  3243 => 2305,  3231 => 2296,  3219 => 2287,  3205 => 2276,  3193 => 2267,  3181 => 2258,  3171 => 2251,  3167 => 2250,  3110 => 2196,  3105 => 2194,  3094 => 2186,  3080 => 2175,  3069 => 2167,  3056 => 2157,  3043 => 2147,  3030 => 2137,  3019 => 2129,  3009 => 2122,  3005 => 2121,  2986 => 2105,  2981 => 2103,  2971 => 2096,  2961 => 2089,  2957 => 2088,  2938 => 2072,  2933 => 2070,  2921 => 2061,  2907 => 2050,  2894 => 2040,  2883 => 2032,  2870 => 2022,  2857 => 2012,  2844 => 2002,  2833 => 1994,  2823 => 1987,  2819 => 1986,  2784 => 1954,  2779 => 1952,  2768 => 1944,  2754 => 1933,  2740 => 1922,  2726 => 1911,  2715 => 1903,  2702 => 1893,  2689 => 1883,  2677 => 1874,  2638 => 1838,  2628 => 1831,  2624 => 1830,  2605 => 1814,  2599 => 1811,  2588 => 1803,  2574 => 1792,  2560 => 1781,  2546 => 1770,  2535 => 1762,  2522 => 1752,  2509 => 1742,  2497 => 1733,  2457 => 1696,  2447 => 1689,  2443 => 1688,  2424 => 1672,  2418 => 1669,  2406 => 1660,  2393 => 1650,  2382 => 1642,  2369 => 1632,  2358 => 1624,  2345 => 1614,  2334 => 1606,  2321 => 1596,  2308 => 1586,  2296 => 1577,  2282 => 1566,  2270 => 1557,  2260 => 1550,  2256 => 1549,  2237 => 1533,  2230 => 1529,  2218 => 1520,  2205 => 1510,  2194 => 1502,  2181 => 1492,  2170 => 1484,  2157 => 1474,  2146 => 1466,  2133 => 1456,  2120 => 1446,  2108 => 1437,  2098 => 1430,  2094 => 1429,  2075 => 1413,  2069 => 1410,  2058 => 1402,  2047 => 1394,  2034 => 1384,  2023 => 1376,  2010 => 1366,  1995 => 1354,  1969 => 1331,  1957 => 1322,  1947 => 1315,  1943 => 1314,  1924 => 1298,  1917 => 1294,  1906 => 1286,  1892 => 1275,  1876 => 1261,  1870 => 1260,  1867 => 1259,  1861 => 1258,  1858 => 1257,  1854 => 1255,  1848 => 1254,  1843 => 1252,  1839 => 1251,  1834 => 1250,  1831 => 1249,  1827 => 1248,  1821 => 1247,  1818 => 1246,  1815 => 1245,  1809 => 1244,  1806 => 1243,  1803 => 1242,  1800 => 1241,  1795 => 1240,  1792 => 1239,  1789 => 1238,  1784 => 1237,  1781 => 1236,  1777 => 1235,  1766 => 1227,  1762 => 1226,  1743 => 1210,  1737 => 1207,  1726 => 1199,  1715 => 1191,  1702 => 1181,  1691 => 1173,  1678 => 1163,  1665 => 1153,  1652 => 1143,  1642 => 1136,  1638 => 1135,  1619 => 1119,  1612 => 1115,  1597 => 1103,  1584 => 1093,  1571 => 1083,  1558 => 1073,  1545 => 1063,  1531 => 1052,  1521 => 1045,  1517 => 1044,  1498 => 1028,  1492 => 1025,  1481 => 1017,  1468 => 1007,  1457 => 999,  1444 => 989,  1433 => 981,  1429 => 980,  1410 => 964,  1404 => 961,  1392 => 952,  1381 => 944,  1368 => 934,  1357 => 926,  1344 => 916,  1333 => 908,  1329 => 907,  1310 => 891,  1304 => 888,  1293 => 880,  1280 => 870,  1266 => 859,  1252 => 848,  1239 => 838,  1227 => 829,  1218 => 823,  1214 => 822,  1195 => 806,  1190 => 804,  1178 => 795,  1166 => 786,  1152 => 775,  1140 => 766,  1118 => 747,  1106 => 737,  1100 => 736,  1097 => 735,  1091 => 734,  1088 => 733,  1084 => 731,  1078 => 730,  1073 => 728,  1067 => 727,  1062 => 726,  1059 => 725,  1053 => 724,  1050 => 723,  1047 => 722,  1044 => 721,  1039 => 720,  1036 => 719,  1032 => 718,  1026 => 717,  1023 => 716,  1021 => 715,  1018 => 714,  1012 => 713,  1009 => 712,  1006 => 711,  1003 => 710,  997 => 709,  994 => 708,  991 => 707,  988 => 706,  983 => 705,  980 => 704,  975 => 703,  972 => 702,  969 => 701,  964 => 700,  961 => 699,  957 => 698,  946 => 690,  942 => 689,  923 => 673,  918 => 671,  907 => 663,  894 => 653,  881 => 643,  870 => 635,  857 => 625,  846 => 617,  833 => 607,  822 => 599,  808 => 588,  797 => 580,  784 => 570,  773 => 562,  760 => 552,  747 => 542,  734 => 532,  725 => 526,  721 => 525,  702 => 509,  697 => 507,  664 => 477,  651 => 467,  638 => 457,  625 => 447,  612 => 437,  598 => 426,  588 => 419,  584 => 418,  565 => 402,  559 => 399,  545 => 388,  532 => 378,  519 => 368,  506 => 358,  496 => 351,  492 => 350,  457 => 318,  450 => 315,  445 => 312,  440 => 309,  438 => 308,  429 => 302,  415 => 291,  401 => 280,  388 => 270,  379 => 264,  375 => 263,  371 => 261,  366 => 258,  361 => 255,  359 => 254,  344 => 242,  338 => 239,  335 => 238,  330 => 235,  325 => 232,  323 => 231,  284 => 195,  274 => 188,  270 => 187,  265 => 184,  260 => 181,  255 => 178,  253 => 177,  105 => 32,  101 => 31,  97 => 30,  93 => 29,  89 => 28,  85 => 27,  81 => 26,  77 => 25,  73 => 24,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html ; charset=utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Carlinble | Gestionnaire de Chantiers</title>
    <meta content=\"no-cache, no-store, must-revalidate, post-check=0, pre-check=0\"/>
    <meta name=\"description\" content=\"Votre application multi-utilisateurs de gestion de chantiers: Comptabilité, Gestion technique, Suivi et gestion de matériel,
         Gestion des articles, Planning, Gestionnaire de stock, etc.\">
    <meta name=\"keywords\"
          content=\"carlinbleu, carlin bleu, carlin, gestion , projet, chantier, comptabilité, gestion technique, suivi , gestion de matériel, gestion de chantiersgestionnaire de projets, articles, matériels\">
    <meta name=\"author\" content=\"carlinGroup\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"https://www.carlinbleu.com/img/Icon-96.png\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
          integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">

    <link rel=\"shortcut icon\" type=\"image/png\" href=\"https://www.carlinbleu.com/img/Icon-96.png\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css\"/>

    <link href=\"{{ asset('css/mdb.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('css/waves.min.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('css/animate.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('css/bootstrap-material-datetimepicker.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('css/bootstrap-datepicker.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('css/select2.min.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('css/all-themes.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('css/sidebars.css') }}\" rel=\"stylesheet\"/>
    <style>
        h6 {
            font-size: 13px !important;
        }

        a {
            color: #3d67d0;
            font-weight: bold
        }

        @media (min-width: 992px) {
            .modal-lg, .modal-xl {
                max-width: 1100px !important;
            }
        }
    </style>
    <style>
        strong {
            font-weight: 700 !important;
        }

        b {
            font-weight: 700 !important;
        }

        .notification {
            width: 360px;
            padding: 15px;
            background-color: white;
            border-radius: 16px;
            position: fixed;
            top: 50px;
            left: 15px;
            animation: shake 0.5s;
            animation-iteration-count: infinite;
        }

        @keyframes shake {
            0% {
                transform: translate(1px, 1px) rotate(0deg);
            }

            40% {
                transform: translate(1px, -1px) rotate(1deg);
            }

            80% {
                transform: translate(-1px, -1px) rotate(1deg);
            }

            100% {
                transform: translate(1px, -2px) rotate(-1deg);
            }
        }

        .notification-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .notification-title {
            font-size: 16px;
            font-weight: 500;
            text-transform: capitalize;
        }

        .notification-close {
            cursor: pointer;
            width: 30px;
            height: 30px;
            border-radius: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #F0F2F5;
            font-size: 14px;
        }

        .notification-container {
            display: flex;
            align-items: flex-start;
        }

        .notification-media {
            position: relative;
        }

        .notification-user-avatar {
            width: 60px;
            height: 60px;
            margin-top: -20px;
            border-radius: 60px;
            -o-object-fit: cover;
            object-fit: cover;
        }

        .notification-content {
            width: calc(100% - 60px);
            padding-left: 20px;
            line-height: 1.2;
            text-align: left;
            font-size: 12px !important;
        }

        .hider {
            display: none;
        }
    </style>
</head>

<body style=\"background-color:#3b3b3b\">
<div class=\"modal fade\" id=\"Traitement\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-sm modal-notify\" role=\"document\">
        <div class=\"modal-content text-center\">
            <div class=\"modal-header d-flex justify-content-center bg-blue\">
                <h4 class=\"font-bold col-white\">
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
<div class=\"modal\" id=\"app_exercices\">
    <div class=\"modal-dialog\" style=\"max-width: 550px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_exercices\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                {% if idexer %}
                    <p style=\"margin: 15px 0 10px 10px; color: #649a3f; font-weight: bold; font-size: 16px\">MODIFIER UN
                        EXERCICE COMPTABLE</p>
                {% else %}
                    <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">CRÉER UN
                        EXERCICE COMPTABLE</p>
                {% endif %}

            </div>
            <div class=\"modal-body\" style=\"height:50vh; width:100%; overflow-y: scroll\">
                {{ form_start(formExercices, {'attr': {'id': 'addExercicesForm'}}) }}
                <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addExercicesToken') }}\"/>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label pri bolo\">EXERCICE COMPTABLE
                            <span class=\"col-pink\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formExercices.exercice,{'attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <div class=\"form-group m-t--5\">
                            <label class=\"form-label pri bolo\">DÉBUTE LE</label>
                            <div class=\"input-group date\" id=\"id_0\">
                                <input type=\"text\" placeholder=\"Date...\" id=\"debut\" name=\"debut\"
                                       style=\"border-bottom: 1px solid #000\" class=\"form-control chr\"/>
                                <div class=\"input-group-addon input-group-append\">
                                    <div class=\"input-group-text\">
                                        <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <div class=\"form-group m-t--5\">
                            <label class=\"form-label pri bolo\">TERMINE LE</label>
                            <div class=\"input-group date\" id=\"id_1\">
                                <input type=\"text\" placeholder=\"Date...\" id=\"fin\" name=\"fin\"
                                       style=\"border-bottom: 1px solid #000\" class=\"form-control chr\"/>
                                <div class=\"input-group-addon input-group-append\">
                                    <div class=\"input-group-text\">
                                        <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    {% if idexer %}
                        <input type=\"submit\" id=\"updExercices\" value=\"MODIFIER\"
                               class=\"btn waves-effect text-white bg-green\">
                    {% else %}
                        <input type=\"submit\" id=\"addExercices\" value=\"ENREGISTRER\"
                               class=\"btn waves-effect text-white bg-pri\">
                    {% endif %}

                    <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadExercices\">
                </div>
                {{ form_end(formExercices) }}
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"app_besoins\">
    <div class=\"modal-dialog\" style=\"max-width: 450px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_besoins\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                {% if idbeso %}
                    <p style=\"margin: 15px 0 10px 10px; color: #447814; font-weight: bold; font-size: 16px\">MODIFIER UN
                        BESOIN</p>
                {% else %}
                    <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">SAISIR UN
                        BESOIN</p>
                {% endif %}
            </div>
            <div class=\"modal-body\" style=\"height:65vh; width:100%; overflow-y: scroll\">
                {{ form_start(formBesoins, {'attr': {'enctype':'multipart/form-data','id': 'addBesoinsForm'}}) }}
                <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addBesoinsToken') }}\"/>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Fichiers</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formBesoins.fichiers,{'required':'','attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Chantiers<span class=\"col-pink\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formBesoins.chantier,{'attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Besoins
                            <span class=\"col-pink\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formBesoins.besoin,{'id': 'editor12','attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">État
                            <span class=\"col-pink\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formBesoins.etat,{'attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    {% if idbeso %}
                        <input type=\"submit\" id=\"updBesoins\" value=\"MODIFIER\"
                               class=\"btn waves-effect text-white bg-green\">
                    {% else %}
                        <input type=\"submit\" id=\"addBesoins\" value=\"ENREGISTRER\"
                               class=\"btn waves-effect text-white bg-pri\">
                    {% endif %}
                    <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadBesoins\">
                </div>
                {{ form_end(formBesoins) }}
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"chat_besoins\">
    <div class=\"modal-dialog\" style=\"max-width: 450px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_chat_besoins\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">BESOIN -
                    CHAT</p>
            </div>
            <div id=\"chatbesoin\" style=\"height:70vh; width:100%;\">

            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"app_add_client\">
    <div class=\"modal-dialog\" style=\"max-width: 450px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_client\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">AJOUTER UN
                    CLIENT</p>
            </div>
            <div class=\"modal-body\" style=\"height:50vh; width:100%; overflow-y: scroll\">
                {{ form_start(formClient, {'attr': {'id':'addClientForm' }}) }}
                {{ form_row(formClient._token) }}
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label pri bolo\">Client<span class=\"col-red\">*</span>
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
                        <label class=\"form-label pri bolo\">Adresse</label>
                        <div class=\"form-group m-t--5\">
                            <div class=\"form-line\">
                                {{ form_widget(formClient.adresse,{'attr':{'class':'form-control cls' }}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label pri bolo\">Contacts</label>
                        <div class=\"form-group m-t--5\">
                            <div class=\"form-line\">
                                {{ form_widget(formClient.contact,{'attr':{'class':'form-control cls' }}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label pri bolo\">Compte contribuable</label>
                        <div class=\"form-group m-t--5\">
                            <div class=\"form-line\">
                                {{ form_widget(formClient.contribuable,{'attr':{'class':'form-control cls' }}) }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"text-center\" id=\"divClient\">
                    <input type=\"submit\" id=\"addClient\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect col-white bg-pri\">
                </div>
                <div class=\"text-center\">
                    <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadClient\"/>
                </div>
                {{ form_end(formClient) }}
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"app_add_chantier\">
    <div class=\"modal-dialog\" style=\"max-width: 550px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_chantier\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">AJOUTER UN
                    CHANTIER</p>
            </div>
            <div class=\"modal-body\" style=\"height:80vh; width:100%; overflow-y: scroll\">
                {{ form_start(formChantier, {'attr': {'id':'addChantierForm' }}) }}
                <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addChantierToken') }}\"/>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label pri bolo\">Client<span class=\"col-red\">*</span>
                        </label>
                        <div class=\"form-group m-t--5\">
                            <div class=\"form-line\">
                                {{ form_widget(formChantier.client,{'attr':{'class':'form-control chr'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label pri bolo\">Nom du chantier<span class=\"col-red\">*</span>
                        </label>
                        <div class=\"form-group m-t--5\">
                            <div class=\"form-line\">
                                {{ form_widget(formChantier.nomchantier,{'attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label pri bolo\">Référence Contrat</label>
                        <div class=\"form-group m-t--5\">
                            <div class=\"form-line\">
                                {{ form_widget(formChantier.contrat,{'attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label pri bolo\">Situation Géographique</label>
                        <div class=\"form-group m-t--5\">
                            <div class=\"form-line\">
                                {{ form_widget(formChantier.localisation,{'attr':{'class':'form-control chr'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label pri bolo\">Sous-chantier du chantier</label>
                        <div class=\"form-group m-t--5\">
                            <div class=\"form-line\">
                                {{ form_widget(formChantier.sous,{'required':'','attr':{'class':'form-control chr' }}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label pri bolo\">Description</label>
                        <div class=\"form-group m-t--5\">
                            <div class=\"form-line\">
                                {{ form_widget(formChantier.description,{'required':'','id':'description','attr':{'class':'form-control chr'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <div class=\"form-group m-t--5\">
                            <label class=\"form-label pri bolo\">DÉBUTE LE</label>
                            <div class=\"input-group date\" id=\"id_0\">
                                <input type=\"text\" placeholder=\"Date...\" id=\"ddebut\" name=\"ddebut\"
                                       style=\"border-bottom: 1px solid #000\" class=\"form-control chr\"/>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <div class=\"form-group m-t--5\">
                            <label class=\"form-label pri bolo\">TERMINE LE</label>
                            <div class=\"input-group date\" id=\"id_1\">
                                <input type=\"text\" placeholder=\"Date...\" id=\"dfin\" name=\"dfin\"
                                       style=\"border-bottom: 1px solid #000\" class=\"form-control chr\"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\" id=\"divChantier\">
                    <input type=\"submit\" id=\"addChantier\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect col-white bg-pri\">
                </div>
                <div class=\"text-center\">
                    <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadChantier\"></div>
                {{ form_end(formChantier) }}
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"app_add_devis\">
    <div class=\"modal-dialog\" style=\"max-width: 550px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_devis\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">CRÉER UN
                    DEVIS</p>
            </div>
            <div class=\"modal-body\" style=\"height:80vh; width:100%; overflow-y: scroll\">
                {{ form_start(formDevis, {'attr': {'id': 'addDevisForm' }}) }}
                <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addDevisToken') }}\"/>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 pri bolo\">Chantier</label>
                        <div class=\"form-group\">
                            <div class=\"form-line col-pink\">
                                {{ form_widget(formDevis.chantier,{'required':'required','attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 pri bolo\">Affaire suivie par:</label>
                        <div class=\"form-group\">
                            <div class=\"form-line col-pink\">
                                {{ form_widget(formDevis.suivie,{'attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 pri bolo\">Référence ou Objet du Devis</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formDevis.devreference,{'id': 'editor5','attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">Tva(%)</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formDevis.tva,{'attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">Date</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formDevis.date,{'attr':{'class':'form-control datepicker' }}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">Option Tva</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formDevis.ptva,{'attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">Avec Base Tva?</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formDevis.abasetva,{'attr':{'class':'form-control' }}) }}
                                <label class=\"form-label\"></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">Avec Remise?</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formDevis.aarem,{'attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">Avec Colonne Section</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formDevis.zone,{'attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">Avec Colonne Section?</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formDevis.aaref,{'attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">Validité du Devis</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formDevis.validit,{'attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">Modèle d'information</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formDevis.modele,{'attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">Modèle de Résultats</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formDevis.model,{'attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 pri bolo\">Devise</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formDevis.monnaie,{'attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 pri bolo\">Informations sur le Devis</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formDevis.conditions,{'id': 'editor6','attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    <input type=\"submit\" id=\"addeDevis\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect col-white bg-blue\">
                    <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadDevis\"></div>
                {{ form_end(formDevis) }}
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"app_add_decompte\">
    <div class=\"modal-dialog\" style=\"max-width: 550px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_decompte\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">CRÉER UN
                    DÉCOMPTE</p>
            </div>
            <div class=\"modal-body\" style=\"height:45vh; width:100%; overflow-y: scroll\">
                {{ form_start(formDecompte, {'attr': {'id': 'addDecompteForm' }}) }}
                <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('dectoken') }}\"/>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
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
                                                                            class=\"{{ dev.id }}\">{{ dev.iddevis }} |
                                                                        TTC: {{ dev.totalttc|number_format(2,'.',' ') }}</option>
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
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">RETENUE TRC(%)</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formDecompte.trc,{'attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">ACOMPTE(%)</label>
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
                                {{ form_widget(formDecompte.garantie,{'attr':{'class':'form-control'}}) }}
                            </div>
                            <p class=\"h6 devcoy\"></p>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">RETENUE DE FINITION(%)</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formDecompte.finition,{'attr':{'class':'form-control'}}) }}
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
                                {{ form_widget(formDecompte.prorata,{'attr':{'class':'form-control'}}) }}
                            </div>
                            <p class=\"h6 devcoy\"></p>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">DATE</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formDecompte.date,{'attr':{'class':'form-control datepicker' }}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    <input type=\"submit\" id=\"addeDecompte\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect col-white bg-blue\">

                    <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadDecompte\"></div>
                {{ form_end(formDecompte) }}
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"app_add_facture\">
    <div class=\"modal-dialog\" style=\"max-width: 550px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_facture\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">CRÉER UNE
                    FACTURE</p>
            </div>
            <div class=\"modal-body\" style=\"height:80vh; width:100%; overflow-y: scroll\">
                {{ form_start(formFacture, {'attr': {'id': 'addFactureForm'}}) }}
                {{ form_row(formFacture._token) }}
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">DATE</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formFacture.date,{'attr':{'class':'form-control datepicker'}}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">TYPE D'OPÉRATION<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formFacture.type,{'id':'facselect','attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">DEVIS VALIDÉS</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formFacture.devis,{'required':'','attr':{'class':'form-control devo'}}) }}
                            </div>
                            <p class=\"col-pink h6 dvo\"></p>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">DÉCOMPTES VALIDÉS</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formFacture.decompte,{'required':'','attr':{'class':'form-control deco'}}) }}
                            </div>
                            <p class=\"col-pink h6 dco\"></p>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE OU OBJET</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formFacture.factreference,{'id': 'editor3','attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">INFORMATIONS SUR LA FACTURE</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formFacture.information,{'id': 'editor4','attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    <input type=\"submit\" id=\"addeFacture\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect col-white bg-blue\">
                    <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadFacture\">
                </div>
                {{ form_end(formFacture) }}
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"app_add_prestataire\">
    <div class=\"modal-dialog\" style=\"max-width: 550px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_prestataire\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">AJOUTER UN
                    PRESTATAIRE DE SERVICE</p>
            </div>
            <div class=\"modal-body\" style=\"height:50vh; width:100%; overflow-y: scroll\">
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
                    <input type=\"submit\" id=\"addPresta\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect text-white bg-pri\">

                    <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadPresta\">
                </div>
                {{ form_end(formpresta) }}
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"app_add_fournisseur\">
    <div class=\"modal-dialog\" style=\"max-width: 550px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_fournisseur\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">AJOUTER UN
                    FOURNISSEUR D'ARTICLE</p>
            </div>
            <div class=\"modal-body\" style=\"height:50vh; width:100%; overflow-y: scroll\">
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
                    <input type=\"submit\" id=\"addFourn\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect text-white bg-pri\">
                    <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadFourn\">
                </div>
                {{ form_end(formfourn) }}
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"app_add_contact\">
    <div class=\"modal-dialog\" style=\"max-width: 550px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_contact\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">AJOUTER UN
                    CONTACT</p>
            </div>
            <div class=\"modal-body\" style=\"height:70vh; width:100%; overflow-y: scroll\">
                {{ form_start(formContact, {'attr': {'id': 'addContactForm'}}) }}
                <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addContactToken') }}\"/>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label pri bolo\">CLIENT<span class=\"col-red\">*</span>
                        </label>
                        <div class=\"form-group m-t--5\">
                            <div class=\"form-line\">
                                {{ form_widget(formContact.client,{'attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">NOM & PRÉNOMS<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formContact.contact,{'attr':{'class':'form-control chors'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">FONCTION</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formContact.fonction,{'attr':{'class':'form-control cohr'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">E-MAIL</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formContact.mail,{'attr':{'class':'form-control cohr'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">TÉLÉPHONE MOBILE</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formContact.phone,{'attr':{'class':'form-control cohr'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">TÉLÉPHONE BUREAU</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formContact.bureau,{'attr':{'class':'form-control cohr'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">


                    <div class=\"text-center\" id=\"divContact\">
                        <input type=\"submit\" id=\"addeContact\" value=\"ENREGISTRER\"
                               class=\"btn waves-effect col-white bg-blue\">
                    </div>
                    <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadContact\">

                </div>
                {{ form_end(formContact) }}
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"app_add_personnel\">
    <div class=\"modal-dialog\" style=\"max-width: 550px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_personnel\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">AJOUTER UN
                    PERSONNEL</p>
            </div>
            <div class=\"modal-body\" style=\"height:60vh; width:100%; overflow-y: scroll\">
                {{ form_start(formPersonnel, {'attr': {'id':'addPersonnelForm' }}) }}
                {{ form_row(formPersonnel._token) }}
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 pri bolo\">NOM & PRÉNOMS<span class=\"col-red\">*</span>
                        </label>
                        <div class=\"form-group\">
                            <div class=\"form-line col-pink\">
                                {{ form_widget(formPersonnel.noms,{'attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 pri bolo\">SERVICE</label>
                        <div class=\"form-group\">
                            <div class=\"form-line col-pink\">
                                {{ form_widget(formPersonnel.service,{'attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 pri bolo\">FONCTION</label>
                        <div class=\"form-group\">
                            <div class=\"form-line col-pink\">
                                {{ form_widget(formPersonnel.fonction,{'required':'','attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">TYPE DE CONTRAT</label>
                        <div class=\"form-group\">
                            <div class=\"form-line col-pink\">
                                {{ form_widget(formPersonnel.contrat,{'attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">EMAIL</label>
                        <div class=\"form-group\">
                            <div class=\"form-line col-pink\">
                                {{ form_widget(formPersonnel.mail,{'attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">CONTACTS</label>
                        <div class=\"form-group\">
                            <div class=\"form-line col-pink\">
                                {{ form_widget(formPersonnel.contact,{'attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">SALAIRE</label>
                        <div class=\"form-group\">
                            <div class=\"form-line col-pink\">
                                {{ form_widget(formPersonnel.salaire,{'attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    <input type=\"submit\" id=\"addPers\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect col-white bg-blue\">
                    <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadPers\"></div>
                <br>
                {{ form_end(formPersonnel) }}
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"app_add_reglement\">
    <div class=\"modal-dialog\" style=\"max-width: 550px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_reglement\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">ENREGISTRER UN
                    RÈGLEMENT CLIENT</p>
            </div>
            <div class=\"modal-body\" style=\"height:45vh; width:100%; overflow-y: scroll\">
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
                           class=\"btn waves-effect col-white bg-blue\">
                    <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadReglement\">
                </div>
                <br><br><br>
                {{ form_end(formeRegle) }}
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"app_add_chargechantier\">
    <div class=\"modal-dialog\" style=\"max-width: 550px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_chargechantier\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">CHARGES
                    CHANTIERS</p>
            </div>
            <div class=\"modal-body\" style=\"height:80vh; width:100%; overflow-y: scroll\">
                {{ form_start(formCaisse, {'attr': {'id': 'addCaisseForm'}}) }}
                <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addCaisseToken') }}\"/>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">N° DE DEVIS <span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formCaisse.devis,{'required':'','id':'veligne','attr':{'class':'form-control '}}) }}
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
                        <label class=\"form-label m-b--30 col-blue bolo\">LIGNES DU DEVIS POUR CHARGE
                            PREVISIONNELLE</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                <select id=\"prevcaiss\" name=\"prevcaiss\" required class=\"form-control form-select\">
                                    <option value=\"\">Faites votre choix</option>
                                </select>
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
                        <label class=\"form-label m-b--30 col-blue bolo\">DÉSIGNATION<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formCaisse.caissereference,{'id':'editor','attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-7\">
                        <label class=\"form-label m-b--30 col-blue bolo\">MONTANT<span class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formCaisse.montant,{'attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-5\">
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
                    <input type=\"submit\" id=\"addeeCaisse\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect text-white bg-blue\">
                    <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadeeCaisse\">
                </div>
                {{ form_end(formCaisse) }}
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"app_add_bonprestataire\">
    <div class=\"modal-dialog\" style=\"max-width: 550px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_bonprestataire\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">BON DE COMMANDE
                    PRESTATAIRE</p>
            </div>
            <div class=\"modal-body\" style=\"height:80vh; width:100%; overflow-y: scroll\">
                {{ form_start(formeBon, {'attr': {'id': 'adduBonForm'}}) }}
                <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('adduBonToken') }}\"/>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-5\">
                        <label class=\"form-label m-b--30 col-blue bolo\">N° DE DEVIS <span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formeBon.devis,{'attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-7\">
                        <label class=\"form-label m-b--30 col-blue bolo\">PRESTATAIRES<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formeBon.fournisseur,{'attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE OU OBJET<span class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formeBon.bonreference,{'id':'editor10','attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">DEVISE</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formeBon.monnaie,{'attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">TVA(%)</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formeBon.tva,{'attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">APPLIQUR LA TVA?</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formeBon.ptva,{'attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">AVEC REMISE ?</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formeBon.aarem,{'attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">AVEC COLONNE RÉF?</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formeBon.aaref,{'attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">DATE</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formeBon.date,{'attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">INFORMATIONS SUR LE BON</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formeBon.conditions,{'required':'','id':'editor11','attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    <input type=\"submit\" id=\"adduBon\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect text-white bg-blue\">

                    <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loaduBon\">
                </div>
                <br><br><br>
                {{ form_end(formeBon) }}
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"app_add_bonfournisseur\">
    <div class=\"modal-dialog\" style=\"max-width: 550px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_bonfournisseur\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">BON DE COMMANDE
                    FOURNISSEUR</p>
            </div>
            <div class=\"modal-body\" style=\"height:80vh; width:100%; overflow-y: scroll\">
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
                        <label class=\"form-label m-b--30 col-blue bolo\">FOURNISSEUR<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formBon.fournisseur,{'attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">BON DE SUIVI <span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formBon.preparation,{'attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE OU OBJET<span class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formBon.bonreference,{'id':'editor2','attr':{'class':'form-control'}}) }}
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
                           class=\"btn waves-effect text-white bg-blue\">

                    <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadBon\">
                </div>
                {{ form_end(formBon) }}
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"app_add_paieprestataire\">
    <div class=\"modal-dialog\" style=\"max-width: 550px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_paieprestataire\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">BON DE CAISSE
                    PRESTATAIRE</p>
            </div>
            <div class=\"modal-body\" style=\"height:80vh; width:100%; overflow-y: scroll\">
                {{ form_start(formerCaisse, {'attr': {'id': 'addCaissePrestataireForm' }}) }}
                <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addCaissePrestaToken') }}\"/>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Prestataire<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formerCaisse.fournisseur,{'id':'sefoner','attr':{'class':'form-control ploce'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Bons validés
                            <span class=\"col-red\">*</span>
                        </label>
                        <div class=\"form-group\">
                            <div class=\"form-line col-pink\">
                                <select class=\"form-control selboner\" id=\"selboxa\" name=\"bon\"></select>
                            </div>
                            <p class=\"h6 diboner\" style=\"margin-top:5px !important\"></p>
                        </div>

                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Lignes du Devis pour Charges
                            prévisionnelles</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                <select id=\"prevpresta\" name=\"prevpresta\" class=\"form-control form-select\">
                                    <option value=\"\">-- Faites votre choix svp !--</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-7\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Point de Paie</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formerCaisse.paie,{'required':'','attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-5\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Date<span class=\"col-red\">*</span>
                        </label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formerCaisse.date,{'required':'','attr':{'class':'form-control datepicker' }}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Moyen de Paiement</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formerCaisse.moyen,{'required':'','attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Devise</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formerCaisse.monnaie,{'attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Type d'opération</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formerCaisse.operation,{'attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Référence<span class=\"col-red\">*</span>
                        </label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formerCaisse.caissereference,{'id':'editor15','attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">DÉSIGNATION<span class=\"col-red\">*</span>
                        </label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formerCaisse.desi,{'id':'editor17','attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Montant à enregistrer<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formerCaisse.montant,{'attr':{'class':'form-control ploce'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    <input type=\"submit\" id=\"adduuCaisse\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect col-white bg-blue\">
                    <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loaduuCaisse\">
                </div>
                {{ form_end(formerCaisse) }}
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"app_add_paiefournisseur\">
    <div class=\"modal-dialog\" style=\"max-width: 550px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_paiefournisseur\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">BON DE CAISSE
                    FOURNISSEUR</p>
            </div>
            <div class=\"modal-body\" style=\"height:80vh; width:100%; overflow-y: scroll\">
                {{ form_start(formeCaisse, {'attr': {'id': 'addCaisseFournisseurForm' }}) }}
                <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addCaisseFournToken') }}\"/>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Fournisseur<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formeCaisse.fournisseur,{'id':'sefone','attr':{'class':'form-control ploc'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Bons validés
                            <span class=\"col-red\">*</span>
                        </label>
                        <div class=\"form-group\">
                            <div class=\"form-line col-pink\">
                                <select class=\"form-control selbon\" id=\"selbox\" name=\"bon\"></select>
                            </div>
                            <p class=\"h6 dibon\" style=\"margin-top:5px !important\"></p>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Lignes du Devis pour Charges
                            prévisionnelles</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                <select id=\"prevfour\" name=\"prevfourni\" class=\"form-control form-select\">
                                    <option value=\"\">-- Faites votre choix svp !--</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-7\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Point de paie</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formeCaisse.paie,{'required':'','attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-5\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Date<span class=\"col-red\">*</span>
                        </label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formeCaisse.date,{'required':'','attr':{'class':'form-control datepicker' }}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Moyen de paiement</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formeCaisse.moyen,{'required':'','attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Devise</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formeCaisse.monnaie,{'attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Type d'opération</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formeCaisse.operation,{'attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Référence<span class=\"col-red\">*</span>
                        </label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formeCaisse.caissereference,{'id':'editor16','attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">DÉSIGNATION<span class=\"col-red\">*</span>
                        </label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formeCaisse.desi,{'id':'editor18','attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">Montant à enregistrer<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formeCaisse.montant,{'attr':{'class':'form-control ploce'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    <input type=\"submit\" id=\"addxCaisse\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect col-white bg-blue\">
                    <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadxCaisse\"></div>
                {{ form_end(formeCaisse) }}
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"app_add_bonsuivi\">
    <div class=\"modal-dialog\" style=\"max-width: 550px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_bonsuivi\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">BON DE SUIVI DE
                    COMMANDE</p>
            </div>
            <div class=\"modal-body\" style=\"height:80vh; width:100%; overflow-y: scroll\">

            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"app_add_paiepersonnel\">
    <div class=\"modal-dialog\" style=\"max-width: 550px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_paiepersonnel\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">BON DE CAISSE
                    POUR LE PERSONNEL</p>
            </div>
            <div class=\"modal-body\" style=\"height:80vh; width:100%; overflow-y: scroll\">
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
                    <input type=\"submit\" id=\"addarCaissePersonnel\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect col-white bg-blue\">
                    <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadarCaissePersonnel\"></div>
                {{ form_end(formCaissePerso) }}
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"app_add_chargesinternes\">
    <div class=\"modal-dialog\" style=\"max-width: 550px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_chargesinternes\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">CHARGES
                    INTERNES</p>
            </div>
            <div class=\"modal-body\" style=\"height:30vh; width:100%; overflow-y: scroll\">
                {{ form_start(formInterne, {'attr': {'id':'addInterForm' }}) }}
                {{ form_row(formInterne._token) }}
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 pri bolo\">CHARGE INTERNE<span class=\"col-red\">*</span>
                        </label>
                        <div class=\"form-group\">
                            <div class=\"form-line col-pink\">
                                {{ form_widget(formInterne.noms,{'required':'required','attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    <input type=\"submit\" id=\"addInter\" value=\"ENREGISTRER\" class=\"btn waves-effect col-white bg-blue\">
                    <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadInter\"></div>
                {{ form_end(formInterne) }}
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"app_add_bonschargesinternes\">
    <div class=\"modal-dialog\" style=\"max-width: 550px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_bonschargesinternes\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">BON DE CAISSE
                    CHARGES INTERNES</p>
            </div>
            <div class=\"modal-body\" style=\"height:85vh; width:100%; overflow-y: scroll\">
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
                        <label class=\"form-label m-b--30 col-blue bolo\">CHARGES INTERNES</label>
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
                    <input type=\"submit\" id=\"addiosCaisse\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect col-white bg-blue\">
                    <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadiosCaisse\"></div>
                {{ form_end(formCaisseCharge) }}
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"searcheur\">
    <div class=\"modal-dialog\" style=\"max-width: 700px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:2px !important\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"btn material-icons col-pink\" id=\"closeframers\"
                   style=\"font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <h6 style=\"margin: 15px 0 0 10px; color: black; font-weight: bold\">RECHERCHER</h6>
            </div>
            <div class=\"modal-body\" style=\"height:75vh;padding:20px !important;  overflow-y: scroll\" id=\"shaacontente\">
                <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher...\" id=\"richis\"
                           style=\"border: 2px solid dodgerblue; padding: 10px\"/>
                </div>
                <div id=\"ressulte\" style=\"width: 100%; color:black; padding-top: 20px;\" class=\"text-left\"></div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"myModale\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:2px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"btn material-icons float-lg-right col-pink\" id=\"closeframer\"
                   style=\"font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important;\">clear</i>
                <i class=\"btn material-icons float-left col-blue\" id=\"goback\"
                   style=\"font-size: 20px !important;color: #2196F3 !important; font-weight: bold !important;\">arrow_back</i>
                <i class=\"btn material-icons float-left col-blue\" id=\"goforward\"
                   style=\"font-size: 20px !important;color: #2196F3 !important; font-weight: bold !important;\">arrow_forward</i>
                <i class=\"btn material-icons float-left col-blue\" id=\"reloadframer\"
                   style=\"font-size: 20px !important;color: #2b982b !important; font-weight: bold !important;\">refresh</i>
            </div>
            <div class=\"modal-body\" style=\"height:95vh;width:100%;padding:0 !important\" id=\"shaacontent\">
                <iframe id=\"framer\" src=\"\"></iframe>
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"modpara\">
    <div class=\"modal-dialog\" style=\"max-width: 700px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:2px !important\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"btn material-icons col-pink\" id=\"closeNumeroter\"
                   style=\"font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <h6 style=\"margin: 15px 0 0 10px; color: black; font-weight: bold\">NUMÉROTATION DES ENTITÉS</h6>
            </div>
            <div class=\"modal-body\" style=\"height:80vh;padding:20px !important; overflow-y: scroll\" id=\"shacompte\">
                {{ form_start(formCompte, {'attr': {'id': 'addFCompteForm'}}) }}
                {{ form_row(formCompte._token) }}
                <div class=\"row clearfix m-b-10\" style=\"margin-top:20px\">
                    <div class=\"col-sm-4\">
                        <label class=\"form-label m-b--30 font-weight-bold\" style=\"color: #6666dc\">Nº Client<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formCompte.coclient,{'attr':{'class':'form-control text-paimary'}}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <label class=\"form-label m-b--30 font-weight-bold\" style=\"color: #6666dc\">Devis<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formCompte.compteDevis,{'attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <label class=\"form-label m-b--30 font-weight-bold\" style=\"color: #6666dc\">Règlement<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formCompte.compteReglement,{'attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\" style=\"margin-top:20px\">
                    <div class=\"col-sm-4\">
                        <label class=\"form-label m-b--30 font-weight-bold\" style=\"color: #6666dc\">Fournisseur<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formCompte.compteFournisseur,{'attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <label class=\"form-label m-b--30 font-weight-bold\" style=\"color: #6666dc\">Prestataire<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formCompte.comptePrestataire,{'attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <label class=\"form-label m-b--30 font-weight-bold\" style=\"color: #6666dc\">Matériel<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formCompte.compteMateriel,{'attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\" style=\"margin-top:20px\">
                    <div class=\"col-sm-4\">
                        <label class=\"form-label m-b--30 font-weight-bold\" style=\"color: #6666dc\">Bon Fournisseur<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formCompte.compteBonFournisseur,{'attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <label class=\"form-label m-b--30 font-weight-bold\" style=\"color: #6666dc\">Bon Prestataire<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formCompte.compteBonPrestataire,{'attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <label class=\"form-label m-b--30 font-weight-bold\" style=\"color: #6666dc\">Bon de Livraison<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formCompte.compteLivraison,{'attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\" style=\"margin-top:20px\">
                    <div class=\"col-sm-4\">
                        <label class=\"form-label m-b--30 font-weight-bold\" style=\"color: #6666dc\">Bon de Caisse<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formCompte.compteCaisse,{'attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <label class=\"form-label m-b--30 font-weight-bold\" style=\"color: #6666dc\">Facture<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formCompte.compteFacture,{'attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <label class=\"form-label m-b--30 font-weight-bold\" style=\"color: #6666dc\">Décompte<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formCompte.compteDecompte,{'attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\" style=\"margin-top:20px\">
                    <div class=\"col-sm-4\">
                        <label class=\"form-label m-b--30 font-weight-bold\" style=\"color: #6666dc\">Fichier<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formCompte.compteFichier,{'attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <label class=\"form-label m-b--30 font-weight-bold\" style=\"color: #6666dc\">Planning<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formCompte.comptePlanning,{'attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <label class=\"form-label m-b--30 font-weight-bold\" style=\"color: #6666dc\">Tache<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formCompte.compteTache,{'attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\" style=\"margin-top:20px\">
                    <div class=\"col-sm-4\">
                        <label class=\"form-label m-b--30 font-weight-bold\" style=\"color: #6666dc\">Sigle<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formCompte.sigle,{'attr':{'class':'form-control text-paimary'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\" style=\"margin-top:30px\">
                    <input type=\"submit\" value=\"MODIFIER\" class=\"btn waves-effect text-white bg-success\">
                </div>
                {{ form_end(formCompte) }}
            </div>
        </div>
    </div>
</div>

<input type=\"text\" style=\"visibility: hidden\" id=\"pychantiers\" value=\"{{ pychantiers }}\">
<input type=\"text\" style=\"visibility: hidden\" id=\"idbeso\" value=\"{{ idbeso }}\">
<input type=\"text\" style=\"visibility: hidden\" id=\"idexer\" value=\"{{ idexer }}\">
<input type=\"text\" style=\"visibility: hidden\" id=\"iduser\" value=\"{{ usere }}\">
<input type=\"text\" style=\"visibility: hidden\" id=\"tabb\" value=\"{{ tableau }}\">

{% if tableau == \"A\" %}
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-9 col-md-9\">
                <h3 class=\"tet text-white text-center font-weight-bold\">CARLINBLEU - GESTION DES CHANTIERS</h3>
                <h5 class=\"text-center\" style=\"color:#efd807; \">
                    Bienvenue {{ app.user.nom|upper }} {{ app.user.prenoms|upper }} </h5>

                <p class=\"text-center hide\" style=\"font-size: 16px\"><a href=\"/android/carlinbleu.apk\" style=\"color: #03A9F4; display: none\" download>Télécharger l'application pour <br>tablette et téléphone android.</a></p>
                <section class=\"features-icons  text-center\" style=\"padding: 0 !important; margin-top: 30px\">

                    <div id=\"notif\" class=\"notification hider\">
                        <div class=\"notification-header\">
                            <h3 class=\"notification-title col-pink bolo700\"><u id=\"atitre\"></u></h3>
                        </div>
                        <div class=\"notification-container\">
                            <div class=\"notification-media\">
                                <i class=\"btn material-icons notification-user-avatar\"
                                   style=\"font-size: 60px !important; color: #E91E63 !important; font-weight: bold !important;\">report</i>
                            </div>
                            <div class=\"notification-content\" id=\"acontent\"></div>
                            <br>
                        </div>
                    </div>

                    <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\" style=\"margin-top: 10px !important\">
                        <a href=\"{{ path('tableaudebord', {'tab': \"A\"}) }}\" class=\"btn\"
                           style=\"background-color: #fff; color: #000; margin-right: 5px\">
                            TABLEAU DE BORD A
                        </a>
                        <a href=\"{{ path('tableaudebord', {'tab': \"B\"}) }}\" class=\"btn\"
                           style=\"background-color: #fff; color: #000;\">
                            TABLEAU DE BORD B
                        </a>
                    </div>
                    <br>

                    <div aria-label=\"Basic examples\" style=\"margin-top: 10px !important\">
                        <button type=\"button\" {% if checkMaster == \"oui\" %} onclick=\"shasharo();\" {% endif %}
                                class=\"btn\"
                                style=\"background-color: #754cea; color: #FFF; margin-right: 5px; width: 150px\">
                            NUMÉROTATIONS
                        </button>
                        <button onclick=\"shashares();\" class=\"btn\"
                                style=\"background-color: #e86c20; color: #FFF; width: 150px\">
                            RECHERCHER
                        </button>
                        <button onclick=\"shashar('travauxjour');\" class=\"btn\"
                                style=\"background-color: #03A9F4FF; color: #FFF;  margin-right: 5px; width: 150px\">
                            TRAVAUX DU JOUR
                        </button>
                        <a href=\"{{ path('logout') }}\" class=\"btn\"
                           style=\"background-color: #d63232; color: #FFF; width: 150px\">
                            SE DÉCONNECTER
                        </a>
                    </div>
                    {% if besa == null %}
                        <div class=\"container\" style=\"padding: 0 !important;\">
                            <div class=\"row\" style='margin:10px 0 15px 0;'>
                                {% if not ismobile %}
                                    <div class=\"row\" style='margin:10px 0 15px 0;'>
                                        <div class=\"d-grid gap-2 col-3 mx-auto\">
                                            <div style=\"color: #FFF; font-size: 13px; border: 1px solid #989898;height: 120px; padding:5px\">
                                                <span style=\"float: right;font-weight: bold;color:#efd807;\">GESTION DU PERSONNEL</span><br>
                                                <a onclick=\"shashar('personnel');\"
                                                   style=\"float: left; font-weight: normal\">&raquo
                                                    Personnel & Equipes</a>
                                                {% if droitAdmin.actions == \"oui\" or droitComptable.actions == \"oui\" %}
                                                    <br>
                                                    <a onclick=\"shashar('chargespersonnelles');\"
                                                       style=\"float: left; font-weight: normal\">&raquo Charges du
                                                        Personnel</a><br>
                                                    <a onclick=\"shashar('chargesinternes');\"
                                                       style=\"float: left; font-weight: normal\">&raquo Charges
                                                        Internes</a><br>
                                                {% else %}
                                                    <a href=\"#\" class=\"col-blue-grey\"
                                                       style=\"float: left; font-weight: normal\">&raquo Charges du
                                                        Personnel</a><br>
                                                    <a href=\"#\" class=\"col-blue-grey\"
                                                       style=\"float: left; font-weight: normal\">&raquo Charges
                                                        Internes</a><br>
                                                {% endif %}
                                            </div>
                                            <button onclick=\"shashar('documents');\" class=\"btn\" type=\"button\"
                                                    style=\" color: #FFF; font-size: 13px; border: 1px solid #989898;height: 50px\">
                                                GESTION DES FICHIERS
                                            </button>
                                            <button onclick=\"shashar('start');\" class=\"btn\" type=\"button\"
                                                    style=\" color: #FFF; font-size: 13px; border: 1px solid #989898;height: 50px\">
                                                AGENDA
                                            </button>
                                        </div>
                                        <div class=\"d-grid gap-2 col-3 mx-auto\">
                                            <div style=\"color: #FFF; font-size: 13px; border: 1px solid #989898;height: 120px; padding:5px\">
                                                <span style=\"float: right;font-weight: bold;color:#efd807;\">RELATIONS TIERS</span><br>
                                                <a onclick=\"shashar('listeclient');\"
                                                   style=\"float: left; font-weight: normal\">&raquo La liste des
                                                    clients</a><br>
                                                <a onclick=\"shashar('fournisseur');\"
                                                   style=\"float: left; font-weight: normal\">&raquo Gestion des
                                                    fournisseurs</a><br>
                                                <a onclick=\"shashar('prestataire');\"
                                                   style=\"float: left; font-weight: normal\">&raquo Gestion des
                                                    prestataires</a><br>
                                                {% if droitAdmin.actions == \"oui\" or droitComptable.actions == \"oui\" %}
                                                    <a onclick=\"shashar('comptesclients');\"
                                                       style=\"float: left; font-weight: normal\">&raquo Créances
                                                        clients</a><br>
                                                {% else %}
                                                    <a href=\"#\" class=\"col-blue-grey\"
                                                       style=\"float: left; font-weight: normal\">&raquo Créances
                                                        clients</a><br>
                                                {% endif %}
                                            </div>
                                            <button onclick=\"shashar('planning');\" class=\"btn\" type=\"button\"
                                                    style=\"color: #FFF; font-size: 13px; border: 1px solid #989898;height: 50px\">
                                                PLANNING
                                            </button>
                                            <button onclick=\"shashar('parametre');\" class=\"btn\" type=\"button\"
                                                    style=\"color: #FFF; font-size: 13px; border: 1px solid #989898;height: 50px\">
                                                PARAMÈTRES
                                            </button>
                                        </div>
                                        <div class=\"d-grid gap-2 col-3 mx-auto\">
                                            <div style=\"color: #FFF; font-size: 13px; border: 1px solid #989898;height: 120px; padding:5px\">
                                                <span style=\"float: right;font-weight: bold;color:#efd807;\">RECAP DES CHANTIERS</span><br>
                                                {% if droitAdmin.actions == \"oui\" or droitComptable.actions == \"oui\" %}
                                                    <a onclick=\"shashar('budget');\"
                                                       style=\"float: left; font-weight: normal\">&raquo
                                                        Charges
                                                        prévisionnelles</a><br>
                                                    <a onclick=\"shashar('tresorerie');\"
                                                       style=\"float: left; font-weight: normal\">&raquo Trésorerie</a>
                                                    <br>
                                                    <a onclick=\"shashar('soldecompte');\"
                                                       style=\"float: left; font-weight: normal\">&raquo Etats financiers</a><br>
                                                    <a onclick=\"shashar('rapportchantier');\"
                                                       style=\"float: left; font-weight: normal\">&raquo Suivi de
                                                        chantiers</a><br>
                                                {% else %}
                                                    <a href=\"#\" class=\"col-blue-grey\"
                                                       style=\"float: left; font-weight: normal\">&raquo
                                                        Charges
                                                        prévisionnelles</a><br>
                                                    <a href=\"#\" class=\"col-blue-grey\"
                                                       style=\"float: left; font-weight: normal\">&raquo
                                                        Gestion de trésorerie</a><br>
                                                    <a href=\"#\" class=\"col-blue-grey\"
                                                       style=\"float: left; font-weight: normal\">&raquo
                                                        Etats financiers</a><br>
                                                    <a href=\"#\" class=\"col-blue-grey\"
                                                       style=\"float: left; font-weight: normal\">&raquo
                                                        Suivi de
                                                        chantiers</a><br>
                                                {% endif %}
                                            </div>
                                            <button onclick=\"shashar('message');\" class=\"btn\" type=\"button\"
                                                    style=\"color: #FFF; font-size: 13px; border: 1px solid #989898;height: 50px\">
                                                MESSAGERIE
                                            </button>
                                            <button onclick=\"shashar('historique');\" class=\"btn\" type=\"button\"
                                                    style=\"color: #FFF; font-size: 13px; border: 1px solid #989898;height: 50px\">
                                                HISTORIQUE
                                            </button>
                                        </div>
                                        <div class=\"d-grid gap-2 col-3 mx-auto\">
                                            <div style=\"color: #FFF; font-size: 13px; border: 1px solid #989898;height: 120px; padding:5px\">
                                                <span style=\"float: right;font-weight: bold;color:#efd807;\">MATÉRIAUX / MATÉRIELS</span><br>
                                                <a onclick=\"shashar('article');\"
                                                   style=\"float: left; font-weight: normal\">&raquo
                                                    Matériels & matériaux</a><br>
                                                <a onclick=\"shashar('materiel');\"
                                                   style=\"float: left; font-weight: normal\">&raquo
                                                    Suivi du matériel</a><br>
                                            </div>
                                            <button onclick=\"shashar('chat');\" class=\"btn\" type=\"button\"
                                                    style=\"color: #FFF; font-size: 13px; border: 1px solid #989898;height: 50px\">
                                                CHAT
                                            </button>
                                            <button onclick=\"shashar('corbeille');\" class=\"btn\" type=\"button\"
                                                    style=\"color: #FFF; font-size: 13px; border: 1px solid #989898;height: 50px\">
                                                CORBEILLE
                                            </button>
                                        </div>
                                    </div>
                                {% endif %}
                            </div>
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\"
                                 style=\"margin-top: 10px !important\">
                                {% if droitAdmin.actions == \"oui\" or droitComptable.actions == \"oui\" or droitAddClient.actions == \"oui\" %}
                                    <button onclick=\"modalClient();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px; margin-right:5px\">
                                        AJOUTER UN CLIENT
                                    </button>
                                {% else %}
                                    <button class=\"btn bg-blue-grey col-white\" type=\"button\"
                                            style=\"font-size: 13px; margin-right:10px\">AJOUTER UN CLIENT
                                    </button>
                                {% endif %}
                                {% if droitAdmin.actions == \"oui\" or droitComptable.actions == \"oui\" or droitAddChantier.actions == \"oui\" %}
                                    <button onclick=\"modalChantier();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">AJOUTER UN
                                        CHANTIER
                                    </button>
                                {% else %}
                                    <button class=\"btn bg-blue-grey col-white\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">AJOUTER UN
                                        CHANTIER
                                    </button>
                                {% endif %}
                            </div>
                            {% if not ismobile %}
                                <br><br>
                                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\">
                                    <input type=\"text\" id=\"recheclient\" placeholder=\"Rechercher un Client\"
                                           style=\"color: #FFF\">
                                </div>

                                <br><br>
                                <div class=\"row\" style='margin:10px 0 15px 0;' id=\"chantierdiv\">

                                </div>

                                <div class=\"row\" style='margin:10px 0 15px 0;'>
                                    <h6 style=\"float: left; color: #fff; margin-top:20px\">©Carlinbleu. All rights
                                        reserved.</h6>
                                    <h6 style=\"float: right; margin-top:20px\">
                                        <a href=\"https://www.facebook.com/profile.php?id=100088340186112\"
                                           style=\"color: #fff\">facebook</a> |
                                        <a href=\"https://www.linkedin.com/company/carlinbleu\" style=\"color: #fff\">linkedin</a>
                                    </h6>
                                </div>
                            {% endif %}
                        </div>
                    {% else %}
                        <div class=\"container\" style=\"margin-top: 20px\">
                            <div class=\"row\">
                                {% for beso in besoins %}
                                    {% if beso.etat != \"archiver\" %}
                                        <div class=\"shadow bg-body rounded col-md-4\"
                                                {% if beso.etat == \"valider\" %} style=\"border:2px solid #3d7318 !important; margin-bottom: 10px\"{% endif %}
                                                {% if beso.etat == \"urgent\" %} style=\"border:2px solid #f00 !important; margin-bottom: 10px\"{% endif %}
                                                {% if beso.etat == \"rappel\" %} style=\"border:2px solid #86bfe3 !important; margin-bottom: 10px\"{% endif %}
                                                {% if beso.etat == \"cloturer\" %} style=\"border:2px solid #a1adb5 !important; margin-bottom: 10px\"{% endif %}
                                        >
                                            <div style=\"text-align: left !important; padding: 5px; background-color: #d9dfe6; margin-top: 10px\">
                                                <span class=\"col-black bolo700\">De: {{ beso.dobyuser.nom }} {{ beso.dobyuser.prenoms }}</span>
                                            </div>
                                            <br><br>
                                            <h6 style=\"float: right; margin-top: -30px\">Statut:
                                                {% if beso.etat == \"urgent\" %}<span
                                                        class=\"col-pink bolo700\">[ URGENT ] </span>{% endif %}
                                                {% if beso.etat == \"valider\" %}<span
                                                        class=\"bolo700 col-green\">[ À VALIDER ]</span>{% endif %}
                                                {% if beso.etat == \"rappel\" %}<span
                                                        class=\"bolo700 col-blue\">[ RAPPEL ]</span>{% endif %}
                                                {% if beso.etat == \"cloturer\" %}<span
                                                        class=\"bolo700 col-blue-grey\">[ CLÔTURER ]</span>{% endif %}
                                            </h6>
                                            <h6 style=\"text-align: left\">
                                                <b><u>Client:</u> </b> {{ beso.chantier.client.nomclient }}<br>
                                                <b><u>Chantier:</u> </b> {{ beso.chantier.nomchantier }}<br>
                                                <b><u>Fichiers:</u> </b><br>
                                                {% for fichier in beso.fichiers %}
                                                    # <a href=\"/{{ fichier.folde }}/{{ fichier.nomfichier }}\"
                                                         class=\"col-blue\" style=\"font-weight: 600\"
                                                         target=\"_blank\">{{ fichier.nomfichier }}</a><br>
                                                {% endfor %}
                                                <br>
                                                {{ beso.besoin|striptags|raw }}<br><br>
                                                Fait
                                                le: {{ beso.date|date('d-m-Y H:i') }}
                                            </h6>


                                            {% if estmaster == false and droitAdmin.actions == \"non\" %}
                                                <div style=\"float: right; margin-top: 10px\">
                                                    {% if droitCommenterBesoin.actions == \"oui\" %}
                                                        <a href=\"#\" class=\"besomessage\" id=\"{{ beso.id }}\"
                                                           title=\"MESSAGE\"
                                                           style=\"margin-right: 5px\"><i
                                                                    class=\"fa fa-message col-orange\"></i></a>
                                                    {% endif %}
                                                    {% if droitCloturerBesoin.actions == \"oui\" %}
                                                        <a href=\"#\" class=\"besocloturer\" id=\"{{ beso.id }}\"
                                                           title=\"CLÔTURER\"
                                                           style=\"margin-right: 5px\"><i
                                                                    class=\"fa fa-check-square col-blue\"></i></a>
                                                    {% endif %}
                                                    {% if droitModifierBesoin.actions == \"oui\" or app.user.id == beso.dobyuser.id %}
                                                        <a href=\"#\" class=\"besoedit\" id=\"{{ beso.id }}\" title=\"MODIFIER\"
                                                           style=\"margin-right: 5px\"><i
                                                                    class=\"fa fa-edit col-green\"></i></a>
                                                    {% endif %}
                                                    {% if droitSupprimerBesoin.actions == \"oui\" %}
                                                        <a href=\"#\" class=\"besodel\" id=\"{{ beso.id }}\"
                                                           title=\"SUPPRIMER\"><i
                                                                    class=\"fa fa-trash col-pink\"></i></a>
                                                    {% endif %}
                                                </div>
                                            {% endif %}
                                            {% if estmaster == true or droitAdmin.actions == \"oui\" %}
                                                <div style=\"float: right; margin-top: 10px\">
                                                    <a href=\"#\" class=\"besomessage\" id=\"{{ beso.id }}\" title=\"MESSAGE\"
                                                       style=\"margin-right: 5px\"><i
                                                                class=\"fa fa-message col-orange\"></i></a>
                                                    <a href=\"#\" class=\"besocloturer\" id=\"{{ beso.id }}\" title=\"CLÔTURER\"
                                                       style=\"margin-right: 5px\"><i
                                                                class=\"fa fa-check-square col-blue\"></i></a>
                                                    <a href=\"#\" class=\"besoedit\" id=\"{{ beso.id }}\" title=\"MODIFIER\"
                                                       style=\"margin-right: 5px\"><i
                                                                class=\"fa fa-edit col-green\"></i></a>
                                                    <a href=\"#\" class=\"besoarchiver\" id=\"{{ beso.id }}\" title=\"ARCHIVER\"
                                                       style=\"margin-right: 5px\"><i
                                                                class=\"fa fa-folder col-blue-grey\"></i></a>
                                                    <a href=\"#\" class=\"besodel\" id=\"{{ beso.id }}\" title=\"SUPPRIMER\"><i
                                                                class=\"fa fa-trash col-pink\"></i></a>
                                                </div>
                                            {% endif %}
                                            <br><br>
                                        </div>
                                    {% endif %}
                                {% endfor %}
                            </div>
                        </div>
                    {% endif %}
                </section>
            </div>
            <div class=\"col-xl-3 col-md-3\">
                {% if not ismobile %}
                    <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\" style=\"width: 100%\">
                        <button class=\"btn bg-blue-grey text-white\" style=\"color: #000;\">
                            GUIDE D'UTILISATION DE L'APPLICATION
                        </button>
                    </div>
                {% else %}
                    <br><br>
                {% endif %}

                <div class=\"card shadow mb-4\" id=\"client\">
                    <h6 class=\"text-left bg-pri col-white bolo600 bolderrer\"
                        style=\"width: 100%; padding: 10px; font-size:14px !important;\">ACTIONS RAPIDES
                    </h6>
                    <div class=\"table-responsive\" style=\"padding: 10px; overflow-x: scroll; text-align:left\">
                        <p><a onclick=\"shashar('chantieretude');\" class=\"col-black\"
                              style=\"font-weight: 500 !important;\">&raquo;
                                Chantiers en étude</a></p>
                        <p><a onclick=\"shashar('chantiercours');\" class=\"col-black\"
                              style=\"font-weight: 500 !important;\">&raquo;
                                Chantiers en cours</a></p>
                        <p><a onclick=\"shashar('chantierechouer');\" class=\"col-black\"
                              style=\"font-weight: 500 !important;\">&raquo;
                                Chantiers échoués</a></p>
                        <p><a onclick=\"shashar('chantiersclotures');\" class=\"col-black\"
                              style=\"font-weight: 500 !important;\">&raquo; Chantiers clôturés</a></p>
                        <p><a onclick=\"shashar('chantierstermines');\" class=\"col-black\"
                              style=\"font-weight: 500 !important;\">&raquo; Chantiers terminés</a></p>
                        <hr>
                        <p>
                            {% if droitAdmin.actions == \"oui\" or droitComptable.actions == \"oui\" or droitAddDevis.actions == \"oui\" %}
                                <a href=\"#\" onclick=\"modalDevis();\" class=\"col-black\"
                                   style=\"font-weight: 500 !important;\">&raquo;
                                    Créer un Devis</a>
                            {% else %}
                                <a class=\"col-blue-grey\" style=\"font-weight: 500 !important;\">&raquo; Créer un Devis</a>
                            {% endif %}
                        </p>
                        <p><a onclick=\"modalDecompte();\" class=\"col-black\" style=\"font-weight: 500 !important;\">&raquo;
                                Créer un Décompte</a></p>
                        <p><a onclick=\"modalFacture();\" class=\"col-black\" style=\"font-weight: 500 !important;\">&raquo;
                                Créer
                                une Facture</a></p>
                        <p><a onclick=\"modalReglement();\" class=\"col-black\" style=\"font-weight: 500 !important;\">&raquo;
                                Faire un Règlement</a></p>
                        <hr>
                        <p><a onclick=\"modalPrestataire();\" class=\"col-black\" style=\"font-weight: 500 !important;\">&raquo;
                                Ajouter un Prestataire</a></p>
                        <p><a onclick=\"modalFournisseur();\" class=\"col-black\" style=\"font-weight: 500 !important;\">&raquo;
                                Ajouter un Fournisseur</a></p>
                        <p><a onclick=\"modalBonPrestataire();\" class=\"col-black\" style=\"font-weight: 500 !important;\">&raquo;
                                Créer un Bon Prestataire</a></p>
                        <p><a onclick=\"modalBonFournisseur();\" class=\"col-black\" style=\"font-weight: 500 !important;\">&raquo;
                                Faire un Bon Fournisseur</a></p>
                        <p><a onclick=\"modalPaiePrestataire();\" class=\"col-black\" style=\"font-weight: 500 !important;\">&raquo;
                                Paie Prestataire</a></p>
                        <p><a onclick=\"modalPaieFournisseur();\" class=\"col-black\" style=\"font-weight: 500 !important;\">&raquo;
                                Paie Fournisseur</a></p>
                        <hr>
                        <p class=\"bolo700 col-blue\">CHANTIERS EN ÉTUDE/COURS DOCUMENTS NON VALIDÉS </p>
                        <p><a onclick=\"shashar('dndevis');\" class=\"col-pink\" style=\"font-weight: 700 !important;\">&raquo;
                                Devis non validés</a></p>
                        <p><a onclick=\"shashar('dnbonsfournisseurs');\" class=\"col-pink\" style=\"font-weight: 700 !important;\">&raquo;
                                Bons fournisseurs non validés</a></p>
                        <p><a onclick=\"shashar('dnbonsprestataires');\"  class=\"col-pink\" style=\"font-weight: 700 !important;\">&raquo;
                                Bons prestataires non validés</a></p>
                        <p><a onclick=\"shashar('dnpaiesfournisseurs');\" class=\"col-pink\" style=\"font-weight: 700 !important;\">&raquo;
                                Paies fournisseurs non validées</a></p>
                        <p><a onclick=\"shashar('dnpaiesprestataires');\" class=\"col-pink\" style=\"font-weight: 700 !important;\">&raquo;
                                Paies prestataires non validées</a></p>
                        <p><a onclick=\"shashar('dnchargeschantiers');\" class=\"col-pink\" style=\"font-weight: 700 !important;\">&raquo;
                                Charges chantiers non validées</a></p>
                        <p><a onclick=\"shashar('dndecomptes');\" class=\"col-pink\" style=\"font-weight: 700 !important;\">&raquo;
                                Décomptes non validés</a></p>
                        <p><a onclick=\"shashar('dnfactures');\" class=\"col-pink\" style=\"font-weight: 700 !important;\">&raquo;
                                Factures non validées</a></p>
                    </div>

                </div>
                <div class=\"card shadow mb-4\" id=\"client\" style=\"height: 120px\">
                    <h6 class=\"text-left bg-pri col-white bolo600 bolderrer\"
                        style=\"width: 100%; padding: 10px; font-size:14px !important;\">BESOINS POUR CHANTIERS
                    </h6>
                    {% if droitAdmin.actions == \"oui\" or droitAddBesoin.actions == \"oui\" %}
                        <div style=\"text-align:center\">
                            <button onclick=\"modalBesoins();\" class=\"btn\" type=\"button\"
                                    style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\"> Saisir des
                                besoins
                                pour chantiers
                            </button>
                            <a href=\"{{ path('listerbesoin', {'beso':  \"oui\", 'tab':tableau }) }}\"
                               class=\"btn align-items-center rounded col-blue bolo600\" style=\"font-size: 14px\"># Liste
                                des besoins</a><br>

                        </div>
                    {% endif %}

                </div>
                <div class=\"card shadow mb-4\" id=\"client\">
                    <h6 class=\"text-left bg-pri col-white bolo600 bolderrer\"
                        style=\"width: 100%; padding: 10px; font-size:14px !important;\">EXCERCICES COMPTABLES
                    </h6>
                    <div class=\"table-responsive\" style=\"padding: 10px; overflow-x: scroll; text-align:center\">
                        <button onclick=\"modalExercices();\" class=\"btn\" type=\"button\"
                                style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\"> Créer des exercices
                            comptables
                        </button>
                    </div>
                    <div style=\"padding-left: 10px; overflow-x: scroll; text-align:left\">
                        <h6 class=\"text-left\">
                            <table style=\"width: 100%\">
                                {% for exer in exercices %}
                                    {% if exer.corbeille is null %}
                                        <tr>
                                            <td><a href=\"#\" onclick=\"shashar('exercices/{{ exer.id }}');\"
                                                   style=\"font-size:15px !important; font-weight:normal\"
                                                   class=\"col-black\"># {{ exer.exercice }}</a>
                                                <br>
                                                <span>
                                            <a href=\"#\" onclick=\"shashar('exercices/{{ exer.id }}');\"
                                               style=\"font-size:14px !important; font-weight:normal\"
                                               class=\"col-pink bolo600\">
                                                ( Du: {{ exer.debut|date('d-m-Y') }} | Au: {{ exer.fin|date('d-m-Y') }} )
                                            </a>
                                        </span>
                                            </td>
                                            <td class=\"text-right\">
                                                <a href=\"#\" class=\"editexer\" id=\"{{ exer.id }}\"><i
                                                            class=\"fa fa-edit col-green\"
                                                            style=\"font-size: 16px\"></i></a>
                                                <a href=\"#\" class=\"delexer\" id=\"{{ exer.id }}\"><i
                                                            class=\"fa fa-trash col-pink\"
                                                            style=\"font-size: 16px\"></i></a>
                                            </td>
                                        </tr>
                                    {% endif %}
                                {% endfor %}
                            </table>
                        </h6>
                    </div>
                </div>
                <div class=\"card shadow mb-4\" id=\"client\" style=\"height: 400px\">
                    <h6 class=\"text-left bg-pri col-white bolo600 bolderrer\"
                        style=\"width: 100%; padding: 10px; font-size:14px !important;\">BESOINS ARCHIVÉS
                    </h6>
                    <div style=\"padding: 10px; overflow-x: scroll;\">
                        {% for beso in besoins %}
                            {% if beso.etat == \"archiver\" %}
                                <div class=\"shadow p-3 bg-body rounded\">
                                    <h6>
                                        <span class=\"col-black bolo700\">De: {{ beso.dobyuser.nom }} {{ beso.dobyuser.prenoms }}</span>
                                    </h6>
                                    <hr style=\"margin-top: -10px\">
                                    <h6 class=\"text-left\">
                                        <b><u>Client:</u> </b> {{ beso.chantier.client.nomclient }}<br>
                                        <b><u>Chantier:</u> </b> {{ beso.chantier.nomchantier }}<br>
                                        <b><u>Fichiers:</u> </b><br>
                                        {% for fichier in beso.fichiers %}
                                            # <a href=\"/{{ fichier.folde }}/{{ fichier.nomfichier }}\"
                                                 class=\"col-blue\" style=\"font-weight: 600\"
                                                 target=\"_blank\">{{ fichier.nomfichier }}</a><br>
                                        {% endfor %}
                                        <br>
                                        {{ beso.besoin|striptags|raw }}<br><br>
                                        Fait
                                        le: {{ beso.date|date('d-m-Y H:i') }}
                                    </h6>
                                    {% if estmaster == true or droitAdmin.actions == \"oui\" %}
                                        <div style=\"float: right; margin-top: 10px\">
                                            <a href=\"#\" class=\"besomessage\" id=\"{{ beso.id }}\" title=\"MESSAGE\"
                                               style=\"margin-right: 5px\"><i class=\"fa fa-message col-orange\"></i></a>
                                            <a href=\"#\" class=\"besorelancer\" id=\"{{ beso.id }}\" title=\"RELANCER\"><i
                                                        class=\"fa fa-repeat col-blue\"></i></a>
                                        </div>
                                    {% endif %}
                                    <br><br>
                                </div>
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
                {% if ismobile %}
                    <div class=\"row\" style='margin:10px 0 15px 0;'>
                        <h6 style=\"float: left; color: #fff; margin-top:20px\">©Carlinbleu. All rights reserved.</h6>
                        <h6 style=\"float: right; margin-top:20px\">
                            <a href=\"https://www.facebook.com/profile.php?id=100088340186112\"
                               style=\"color: #fff\">facebook</a> |
                            <a href=\"https://www.linkedin.com/company/carlinbleu\" style=\"color: #fff\">linkedin</a>
                        </h6>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
{% endif %}

{% if tableau == \"B\" %}
    <div class=\"container\">
        <div class=\"row justify-content-center\" style=\"margin-top:60px\">
            {% if not ismobile %}
                <div class=\"col-xl-3 col-md-3\">
                    <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\" style=\"width: 100%\">
                        <button class=\"btn bg-blue-grey text-white\"
                                style=\"color: #000;\">
                            GUIDE D'UTILISATION DE L'APPLICATION
                        </button>
                    </div>
                    <div class=\"card shadow mb-4\" id=\"client\" style=\"margin-top: 10px\">
                        <h6 class=\"text-left bg-pri col-white bolo600 bolderrer\"
                            style=\"width: 100%; padding: 10px; font-size:14px !important;\">MENU
                        </h6>
                        <div class=\"flex-shrink-0 p-3 bg-white\">
                            {% if droitAdmin.actions == \"oui\" or droitAddBesoin.actions == \"oui\" %}
                                <div style=\"text-align:center\">
                                    <button onclick=\"modalBesoins();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\"> Saisir
                                        des besoins
                                    </button>
                                </div>
                            {% endif %}
                            <hr style=\"color: black\">
                            <ul class=\"list-unstyled ps-0\">
                                <li class=\"mb-1\">
                                    <button class=\"btn align-items-center rounded collapsed  col-black\"
                                            data-bs-toggle=\"collapse\" data-bs-target=\"#perso\" aria-expanded=\"false\"
                                            style=\"font-size: 14px\">
                                        <i class=\"fa fa-folder-open col-blue\" style=\"font-size: 14px\"></i> Gestion du
                                        Personnel
                                    </button>
                                    <div class=\"collapse\" id=\"perso\" style=\"\">
                                        <ul class=\"btn-toggle-nav list-unstyled fw-normal pb-1 small\">
                                            <li><a href=\"#\" onclick=\"shashar('personnel');\" class=\"link-dark rounded\"
                                                   style=\"font-size: 14px\">- Le Personnel</a></li>
                                            <li><a href=\"#\" onclick=\"shashar('chargespersonnelles');\"
                                                   class=\"link-dark rounded\" style=\"font-size: 14px\">- Charges du
                                                    Personnel</a></li>
                                            <li><a href=\"#\" onclick=\"shashar('chargesinternes');\"
                                                   class=\"link-dark rounded\" style=\"font-size: 14px\">- Charges
                                                    Internes</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class=\"mb-1\">
                                    <button class=\"btn align-items-center rounded collapsed  col-black\"
                                            data-bs-toggle=\"collapse\" data-bs-target=\"#tiers\" aria-expanded=\"false\"
                                            style=\"font-size: 14px\">
                                        <i class=\"fa fa-folder-open col-blue\" style=\"font-size: 14px\"></i> Relations
                                        Tiers
                                    </button>
                                    <div class=\"collapse\" id=\"tiers\">
                                        <ul class=\"btn-toggle-nav list-unstyled fw-normal pb-1 small\">
                                            <li><a href=\"#\" onclick=\"shashar('listeclient');\" class=\"link-dark rounded\"
                                                   style=\"font-size: 14px\">- La liste des clients</a></li>
                                            <li><a href=\"#\" onclick=\"shashar('fournisseur');\" class=\"link-dark rounded\"
                                                   style=\"font-size: 14px\">- Gestion des fournisseurs</a></li>
                                            <li><a href=\"#\" onclick=\"shashar('prestataire');\" class=\"link-dark rounded\"
                                                   style=\"font-size: 14px\">- Gestion des prestataires</a></li>
                                            <li><a href=\"#\" onclick=\"shashar('comptesclients');\"
                                                   class=\"link-dark rounded\" style=\"font-size: 14px\">- Créances
                                                    clients</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class=\"mb-1\">
                                    <button class=\"btn align-items-center rounded collapsed  col-black\"
                                            data-bs-toggle=\"collapse\" data-bs-target=\"#recap\" aria-expanded=\"false\"
                                            style=\"font-size: 14px\">
                                        <i class=\"fa fa-folder-open col-blue\" style=\"font-size: 14px\"></i> Recap des
                                        Chantiers
                                    </button>
                                    <div class=\"collapse\" id=\"recap\">
                                        <ul class=\"btn-toggle-nav list-unstyled fw-normal pb-1 small\">
                                            <li><a href=\"#\" onclick=\"shashar('budget');\" class=\"link-dark rounded\"
                                                   style=\"font-size: 14px\">- Charges prévisionnelles</a></li>
                                            <li><a href=\"#\" onclick=\"shashar('tresorerie');\" class=\"link-dark rounded\"
                                                   style=\"font-size: 14px\">- Trésorerie</a></li>
                                            <li><a href=\"#\" onclick=\"shashar('soldecompte');\" class=\"link-dark rounded\"
                                                   style=\"font-size: 14px\">- Etats financiers</a></li>
                                            <li><a href=\"#\" onclick=\"shashar('rapportchantier');\"
                                                   class=\"link-dark rounded\" style=\"font-size: 14px\">- Suivi de
                                                    chantiers</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class=\"mb-1\">
                                    <button class=\"btn align-items-center rounded collapsed col-black\"
                                            data-bs-toggle=\"collapse\" data-bs-target=\"#mato\" aria-expanded=\"false\"
                                            style=\"font-size: 14px\">
                                        <i class=\"fa fa-folder-open col-blue\" style=\"font-size: 14px\"></i> Matériels /
                                        Matériaux
                                    </button>
                                    <div class=\"collapse\" id=\"mato\">
                                        <ul class=\"btn-toggle-nav list-unstyled fw-normal pb-1 small\">
                                            <li><a href=\"#\" onclick=\"shashar('article');\" class=\"link-dark rounded\"
                                                   style=\"font-size: 14px\">- Matériels & matériaux</a></li>
                                            <li><a href=\"#\" onclick=\"shashar('materiel');\" class=\"link-dark rounded\"
                                                   style=\"font-size: 14px\">- Suivi du matériel</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class=\"border-top my-3\"></li>
                                <a href=\"{{ path('listerbesoin', {'beso':  \"oui\", 'tab':tableau }) }}\"
                                   class=\"btn align-items-center rounded col-blue bolo600\" style=\"font-size: 14px\">#
                                    Liste des besoins</a><br>
                                <a href=\"#\" onclick=\"shashar('documents');\"
                                   class=\"btn align-items-center rounded col-blue bolo600\"
                                   style=\"font-size: 14px; margin-top: -15px\"># Gestion des fichiers</a><br>
                                <a href=\"#\" onclick=\"shashar('planning');\"
                                   class=\"btn align-items-center rounded col-blue bolo600\"
                                   style=\"font-size: 14px; margin-top: -15px\"># Planning</a><br>
                                <a href=\"#\" onclick=\"shashar('message');\"
                                   class=\"btn align-items-center rounded col-blue bolo600\"
                                   style=\"font-size: 14px; margin-top: -15px\"># Messagerie</a><br>
                                <a href=\"#\" onclick=\"shashar('chat');\"
                                   class=\"btn align-items-center rounded col-blue bolo600\"
                                   style=\"font-size: 14px; margin-top: -15px\"># Chat</a><br>
                                <a href=\"#\" onclick=\"shashar('start');\"
                                   class=\"btn align-items-center rounded col-blue bolo600\"
                                   style=\"font-size: 14px; margin-top: -15px\"># Agenda</a><br>
                                <a href=\"#\" onclick=\"shashar('parametre');\"
                                   class=\"btn align-items-center rounded col-blue bolo600\"
                                   style=\"font-size: 14px; margin-top: -15px\"># Paramètres</a><br>
                                <a href=\"#\" onclick=\"shashar('historique');\"
                                   class=\"btn align-items-center rounded col-blue bolo600\"
                                   style=\"font-size: 14px; margin-top: -15px\"># Historique</a><br>
                                <a href=\"#\" onclick=\"shashar('corbeille');\"
                                   class=\"btn align-items-center rounded col-blue bolo600\"
                                   style=\"font-size: 14px; margin-top: -15px\"># Corbeille</a><br>
                            </ul>
                        </div>

                    </div>
                    <div class=\"card shadow mb-4\" id=\"client\">
                        <h6 class=\"text-left bg-pri col-white bolo600 bolderrer\"
                            style=\"width: 100%; padding: 10px; font-size:14px !important; margin-top: -10px\">ACTIONS
                            RAPIDES
                        </h6>
                        <div class=\"table-responsive\" style=\"padding: 10px; overflow-x: scroll; text-align:left\">
                            <p><a onclick=\"shashar('chantieretude');\" class=\"col-black\"
                                  style=\"font-weight: 500 !important;\">&raquo;
                                    Chantiers en étude</a></p>
                            <p><a onclick=\"shashar('chantiercours');\" class=\"col-black\"
                                  style=\"font-weight: 500 !important;\">&raquo;
                                    Chantiers en cours</a></p>
                            <p><a onclick=\"shashar('chantierechouer');\" class=\"col-black\"
                                  style=\"font-weight: 500 !important;\">&raquo;
                                    Chantiers échoués</a></p>
                            <p><a onclick=\"shashar('chantiersclotures');\" class=\"col-black\"
                                  style=\"font-weight: 500 !important;\">&raquo; Chantiers clôturés</a></p>
                            <p><a onclick=\"shashar('chantierstermines');\" class=\"col-black\"
                                  style=\"font-weight: 500 !important;\">&raquo; Chantiers terminés</a></p>
                            <hr>
                            <p>
                                {% if droitAdmin.actions == \"oui\" or droitComptable.actions == \"oui\" or droitAddDevis.actions == \"oui\" %}
                                    <a href=\"#\" onclick=\"modalDevis();\" class=\"col-black\"
                                       style=\"font-weight: 500 !important;\">&raquo;
                                        Créer un Devis</a>
                                {% else %}
                                    <a class=\"col-blue-grey\" style=\"font-weight: 500 !important;\">&raquo; Créer un
                                        Devis</a>
                                {% endif %}
                            </p>
                            <p><a onclick=\"modalDecompte();\" class=\"col-black\" style=\"font-weight: 500 !important;\">&raquo;
                                    Créer un Décompte</a></p>
                            <p><a onclick=\"modalFacture();\" class=\"col-black\" style=\"font-weight: 500 !important;\">&raquo;
                                    Créer
                                    une Facture</a></p>
                            <p><a onclick=\"modalReglement();\" class=\"col-black\" style=\"font-weight: 500 !important;\">&raquo;
                                    Faire un Règlement</a></p>
                            <hr>
                            <p><a onclick=\"modalPrestataire();\" class=\"col-black\" style=\"font-weight: 500 !important;\">&raquo;
                                    Ajouter un Prestataire</a></p>
                            <p><a onclick=\"modalFournisseur();\" class=\"col-black\" style=\"font-weight: 500 !important;\">&raquo;
                                    Ajouter un Fournisseur</a></p>
                            <p><a onclick=\"modalBonPrestataire();\" class=\"col-black\"
                                  style=\"font-weight: 500 !important;\">&raquo;
                                    Créer un Bon Prestataire</a></p>
                            <p><a onclick=\"modalBonFournisseur();\" class=\"col-black\"
                                  style=\"font-weight: 500 !important;\">&raquo;
                                    Faire un Bon Fournisseur</a></p>
                            <p><a onclick=\"modalPaiePrestataire();\" class=\"col-black\"
                                  style=\"font-weight: 500 !important;\">&raquo;
                                    Paie Prestataire</a></p>
                            <p><a onclick=\"modalPaieFournisseur();\" class=\"col-black\"
                                  style=\"font-weight: 500 !important;\">&raquo;
                                    Paie Fournisseur</a></p>
                        </div>

                    </div>
                    <div class=\"card shadow mb-4\" id=\"client\">
                        <h6 class=\"text-left bg-pri col-white bolo600 bolderrer\"
                            style=\"width: 100%; padding: 10px; font-size:14px !important;\">EXCERCICES COMPTABLES
                        </h6>
                        <div class=\"table-responsive\" style=\"padding: 10px; overflow-x: scroll; text-align:center\">
                            <button onclick=\"modalExercices();\" class=\"btn\" type=\"button\"
                                    style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\"> Créer des
                                exercices comptables
                            </button>
                        </div>
                        <div style=\"padding-left: 10px; overflow-x: scroll; text-align:left\">
                            <h6 class=\"text-left\">
                                <table style=\"width: 100%\">
                                    {% for exer in exercices %}
                                        {% if exer.corbeille is null %}
                                            <tr>
                                                <td><a href=\"#\" onclick=\"shashar('exercices/{{ exer.id }}');\"
                                                       style=\"font-size:15px !important; font-weight:normal\"
                                                       class=\"col-black\"># {{ exer.exercice }}</a>
                                                    <br>
                                                    <span>
                                            <a href=\"#\" onclick=\"shashar('exercices/{{ exer.id }}');\"
                                               style=\"font-size:14px !important; font-weight:normal\"
                                               class=\"col-pink bolo600\">Du: {{ exer.debut|date('d-m-Y') }} | Au: {{ exer.fin|date('d-m-Y') }}
                                            </a>
                                        </span>
                                                </td>
                                                <td class=\"text-right nowrape\">
                                                    <button style=\"border-color: #b2becc; border-style: none\"
                                                            class=\"editexer\" id=\"{{ exer.id }}\"><i
                                                                class=\"fa fa-edit col-green\"
                                                                style=\"font-size: 16px\"></i></button>
                                                    <button style=\"border-color: #b2becc ; border-style: none\"
                                                            class=\"delexer\" id=\"{{ exer.id }}\"><i
                                                                class=\"fa fa-trash col-pink\"
                                                                style=\"font-size: 16px\"></i></button>
                                                </td>
                                            </tr>
                                        {% endif %}
                                    {% endfor %}
                                </table>
                            </h6>
                        </div>
                    </div>
                    <div class=\"card shadow mb-4\" id=\"client\" style=\"height: 400px\">
                        <h6 class=\"text-left bg-pri col-white bolo600 bolderrer\"
                            style=\"width: 100%; padding: 10px; font-size:14px !important;\">BESOINS ARCHIVÉS
                        </h6>
                        <div style=\"padding: 10px; overflow-x: scroll;\">
                            {% for beso in besoins %}
                                {% if beso.etat == \"archiver\" %}
                                    <div class=\"shadow p-3 bg-body rounded\">
                                        <h6>
                                            <span class=\"col-black bolo700\">De: {{ beso.dobyuser.nom }} {{ beso.dobyuser.prenoms }}</span>
                                        </h6>
                                        <hr style=\"margin-top: -10px\">
                                        <h6 class=\"text-left\">
                                            <b><u>Client:</u> </b> {{ beso.chantier.client.nomclient }}<br>
                                            <b><u>Chantier:</u> </b> {{ beso.chantier.nomchantier }}<br>
                                            <b><u>Fichiers:</u> </b><br>
                                            {% for fichier in beso.fichiers %}
                                                # <a href=\"/{{ fichier.folde }}/{{ fichier.nomfichier }}\"
                                                     class=\"col-blue\" style=\"font-weight: 600\"
                                                     target=\"_blank\">{{ fichier.nomfichier }}</a><br>
                                            {% endfor %}
                                            <br>
                                            {{ beso.besoin|striptags|raw }}<br><br>
                                            Fait
                                            le: {{ beso.date|date('d-m-Y H:i') }}
                                        </h6>
                                        {% if estmaster == true or droitAdmin.actions == \"oui\" %}
                                            <div style=\"float: right; margin-top: 10px\">
                                                <a href=\"#\" class=\"besomessage\" id=\"{{ beso.id }}\" title=\"MESSAGE\"
                                                   style=\"margin-right: 5px\"><i
                                                            class=\"fa fa-message col-orange\"></i></a>
                                                <a href=\"#\" class=\"besorelancer\" id=\"{{ beso.id }}\" title=\"RELANCER\"><i
                                                            class=\"fa fa-repeat col-blue\"></i></a>
                                            </div>
                                        {% endif %}
                                        <br><br>
                                    </div>
                                {% endif %}
                            {% endfor %}
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-9 col-md-9\">
                    <h3 class=\"tet text-white text-center font-weight-bold\">CARLINBLEU - GESTION DES CHANTIERS</h3>
                    <h5 class=\"text-center\" style=\"color:#efd807; \">
                        Bienvenue {{ app.user.nom|upper }} {{ app.user.prenoms|upper }} </h5>
                    <section class=\"features-icons  text-center\" style=\"padding: 0 !important; margin-top: 30px\">

                        <div id=\"notif\" class=\"notification hider\">
                            <div class=\"notification-header\">
                                <h3 class=\"notification-title col-pink bolo700\"><u id=\"atitre\"></u></h3>
                            </div>
                            <div class=\"notification-container\">
                                <div class=\"notification-media\">
                                    <i class=\"btn material-icons notification-user-avatar\"
                                       style=\"font-size: 60px !important; color: #E91E63 !important; font-weight: bold !important;\">report</i>
                                </div>
                                <div class=\"notification-content\" id=\"acontent\"></div>
                                <br>
                            </div>
                        </div>

                        <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\"
                             style=\"margin-top: 10px !important\">
                            <a href=\"{{ path('tableaudebord', {'tab': \"A\"}) }}\" class=\"btn\"
                               style=\"background-color: #fff; color: #000; margin-right: 10px\">
                                TABLEAU DE BORD A
                            </a>
                            <a href=\"{{ path('tableaudebord', {'tab': \"B\"}) }}\" class=\"btn\"
                               style=\"background-color: #fff; color: #000;\">
                                TABLEAU DE BORD B
                            </a>
                        </div>
                        <br>
                        {% if besa == null %}
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\"
                                 style=\"margin-top: 10px !important\">
                                <button type=\"button\" {% if checkMaster == \"oui\" %} onclick=\"shasharo();\" {% endif %}
                                        class=\"btn\"
                                        style=\"background-color: #754cea; color: #FFF; margin-right: 5px\">
                                    NUMÉROTATIONS
                                </button>
                                <button onclick=\"shashares();\" class=\"btn\" ∑
                                        style=\"background-color: #e86c20; color: #FFF; margin-right: 5px \">
                                    RECHERCHER
                                </button>
                                <button onclick=\"shashar('travauxjour');\" class=\"btn\"
                                        style=\"background-color: #03A9F4FF; color: #FFF; margin-right: 5px \">
                                    TRAVAUX DU JOUR
                                </button>
                                <a href=\"{{ path('logout') }}\" class=\"btn\"
                                   style=\"background-color: #d63232; color: #FFF\">
                                    SE DÉCONNECTER
                                </a>
                            </div>
                            <div class=\"container\" style=\"padding: 0 !important;\">
                                <br>
                                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\"
                                     style=\"margin-top: 10px !important\">
                                    {% if droitAdmin.actions == \"oui\" or droitComptable.actions == \"oui\" or droitAddClient.actions == \"oui\" %}
                                        <button onclick=\"modalClient();\" class=\"btn\" type=\"button\"
                                                style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px; margin-right:10px\">
                                            AJOUTER UN CLIENT
                                        </button>
                                    {% else %}
                                        <button class=\"btn bg-blue-grey col-white\" type=\"button\"
                                                style=\"font-size: 13px; margin-right:10px\">
                                            AJOUTER UN CLIENT
                                        </button>
                                    {% endif %}
                                    {% if droitAdmin.actions == \"oui\" or droitComptable.actions == \"oui\" or droitAddChantier.actions == \"oui\" %}
                                        <button onclick=\"modalChantier();\" class=\"btn\" type=\"button\"
                                                style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">
                                            AJOUTER UN CHANTIER
                                        </button>
                                    {% else %}
                                        <button class=\"btn bg-blue-grey col-white\" type=\"button\"
                                                style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">
                                            AJOUTER UN CHANTIER
                                        </button>
                                    {% endif %}
                                </div>
                                <br>
                                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\">
                                    <input type=\"text\" id=\"recheclient\" placeholder=\"Rechercher un Client\"
                                           style=\"color: #FFF\">
                                </div>
                                <br><br>
                                <div class=\"row\" style='margin:10px 0 15px 0;' id=\"chantierdiv\">

                                </div>
                                <div class=\"row\" style='margin:10px 0 15px 0;'>
                                    <h6 style=\"float: left; color: #fff; margin-top:20px\">©Carlinbleu. All rights
                                        reserved.</h6>
                                    <h6 style=\"float: right; margin-top:20px\">
                                        <a href=\"https://www.facebook.com/profile.php?id=100088340186112\"
                                           style=\"color: #fff\">facebook</a> |
                                        <a href=\"https://www.linkedin.com/company/carlinbleu\" style=\"color: #fff\">linkedin</a>
                                    </h6>
                                </div>
                            </div>
                        {% else %}
                            <div class=\"container\" style=\"margin-top: 20px\">
                                <div class=\"row\">
                                    {% for beso in besoins %}
                                        {% if beso.etat != \"archiver\" %}
                                            <div class=\"shadow bg-body rounded col-md-4\"
                                                    {% if beso.etat == \"valider\" %} style=\"border:2px solid #3d7318 !important; margin-bottom: 10px\"{% endif %}
                                                    {% if beso.etat == \"urgent\" %} style=\"border:2px solid #f00 !important; margin-bottom: 10px\"{% endif %}
                                                    {% if beso.etat == \"rappel\" %} style=\"border:2px solid #86bfe3 !important; margin-bottom: 10px\"{% endif %}
                                                    {% if beso.etat == \"cloturer\" %} style=\"border:2px solid #a1adb5 !important; margin-bottom: 10px\"{% endif %}
                                            >
                                                <div style=\"text-align: left !important; padding: 5px; background-color: #d9dfe6; margin-top: 10px\">
                                                    <span class=\"col-black bolo700\">De: {{ beso.dobyuser.nom }} {{ beso.dobyuser.prenoms }}</span>
                                                </div>
                                                <br><br>
                                                <h6 style=\"float: right; margin-top: -30px\">Statut:
                                                    {% if beso.etat == \"urgent\" %}<span
                                                            class=\"col-pink bolo700\">[ URGENT ] </span>{% endif %}
                                                    {% if beso.etat == \"valider\" %}<span
                                                            class=\"bolo700 col-green\">[ À VALIDER ]</span>{% endif %}
                                                    {% if beso.etat == \"rappel\" %}<span
                                                            class=\"bolo700 col-blue\">[ RAPPEL ]</span>{% endif %}
                                                    {% if beso.etat == \"cloturer\" %}<span
                                                            class=\"bolo700 col-blue-grey\">[ CLÔTURER ]</span>{% endif %}
                                                </h6>
                                                <h6 style=\"text-align: left\">
                                                    <b><u>Client:</u> </b> {{ beso.chantier.client.nomclient }}<br>
                                                    <b><u>Chantier:</u> </b> {{ beso.chantier.nomchantier }}<br>
                                                    <b><u>Fichiers:</u> </b><br>
                                                    {% for fichier in beso.fichiers %}
                                                        # <a href=\"/{{ fichier.folde }}/{{ fichier.nomfichier }}\"
                                                             class=\"col-blue\" style=\"font-weight: 600\"
                                                             target=\"_blank\">{{ fichier.nomfichier }}</a><br>
                                                    {% endfor %}
                                                    <br>
                                                    {{ beso.besoin|striptags|raw }}<br><br>
                                                    Fait
                                                    le: {{ beso.date|date('d-m-Y H:i') }}
                                                </h6>


                                                {% if estmaster == false and droitAdmin.actions == \"non\" %}
                                                    <div style=\"float: right; margin-top: 10px\">
                                                        {% if droitCommenterBesoin.actions == \"oui\" %}
                                                            <a href=\"#\" class=\"besomessage\" id=\"{{ beso.id }}\"
                                                               title=\"MESSAGE\"
                                                               style=\"margin-right: 5px\"><i
                                                                        class=\"fa fa-message col-orange\"></i></a>
                                                        {% endif %}
                                                        {% if droitCloturerBesoin.actions == \"oui\" %}
                                                            <a href=\"#\" class=\"besocloturer\" id=\"{{ beso.id }}\"
                                                               title=\"CLÔTURER\"
                                                               style=\"margin-right: 5px\"><i
                                                                        class=\"fa fa-check-square col-blue\"></i></a>
                                                        {% endif %}
                                                        {% if droitModifierBesoin.actions == \"oui\" or app.user.id == beso.dobyuser.id %}
                                                            <a href=\"#\" class=\"besoedit\" id=\"{{ beso.id }}\"
                                                               title=\"MODIFIER\"
                                                               style=\"margin-right: 5px\"><i
                                                                        class=\"fa fa-edit col-green\"></i></a>
                                                        {% endif %}
                                                        {% if droitSupprimerBesoin.actions == \"oui\" %}
                                                            <a href=\"#\" class=\"besodel\" id=\"{{ beso.id }}\"
                                                               title=\"SUPPRIMER\"><i
                                                                        class=\"fa fa-trash col-pink\"></i></a>
                                                        {% endif %}
                                                    </div>
                                                {% endif %}
                                                {% if estmaster == true or droitAdmin.actions == \"oui\" %}
                                                    <div style=\"float: right; margin-top: 10px\">
                                                        <a href=\"#\" class=\"besomessage\" id=\"{{ beso.id }}\"
                                                           title=\"MESSAGE\"
                                                           style=\"margin-right: 5px\"><i
                                                                    class=\"fa fa-message col-orange\"></i></a>
                                                        <a href=\"#\" class=\"besocloturer\" id=\"{{ beso.id }}\"
                                                           title=\"CLÔTURER\"
                                                           style=\"margin-right: 5px\"><i
                                                                    class=\"fa fa-check-square col-blue\"></i></a>
                                                        <a href=\"#\" class=\"besoedit\" id=\"{{ beso.id }}\" title=\"MODIFIER\"
                                                           style=\"margin-right: 5px\"><i
                                                                    class=\"fa fa-edit col-green\"></i></a>
                                                        <a href=\"#\" class=\"besoarchiver\" id=\"{{ beso.id }}\"
                                                           title=\"ARCHIVER\"
                                                           style=\"margin-right: 5px\"><i
                                                                    class=\"fa fa-folder col-blue-grey\"></i></a>
                                                        <a href=\"#\" class=\"besodel\" id=\"{{ beso.id }}\"
                                                           title=\"SUPPRIMER\"><i
                                                                    class=\"fa fa-trash col-pink\"></i></a>
                                                    </div>
                                                {% endif %}
                                                <br><br>
                                            </div>
                                        {% endif %}
                                    {% endfor %}
                                </div>
                            </div>
                        {% endif %}
                    </section>
                </div>
            {% else %}
                <div class=\"col-xl-9 col-md-9\">
                    <h3 class=\"tet text-white text-center font-weight-bold\">CARLINBLEU - GESTION DES CHANTIERS</h3>
                    <h5 class=\"text-center\" style=\"color:#efd807; \">
                        Bienvenue {{ app.user.nom|upper }} {{ app.user.prenoms|upper }} </h5>
                    <section class=\"features-icons  text-center\" style=\"padding: 0 !important; margin-top: 30px\">

                        <div id=\"notif\" class=\"notification hider\">
                            <div class=\"notification-header\">
                                <h3 class=\"notification-title col-pink bolo700\"><u id=\"atitre\"></u></h3>
                            </div>
                            <div class=\"notification-container\">
                                <div class=\"notification-media\">
                                    <i class=\"btn material-icons notification-user-avatar\"
                                       style=\"font-size: 60px !important; color: #E91E63 !important; font-weight: bold !important;\">report</i>
                                </div>
                                <div class=\"notification-content\" id=\"acontent\"></div>
                                <br>
                            </div>
                        </div>

                        <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\"
                             style=\"margin-top: 10px !important\">
                            <a href=\"{{ path('tableaudebord', {'tab': \"A\"}) }}\" class=\"btn\"
                               style=\"background-color: #fff; color: #000; margin-right: 5px\">
                                TABLEAU DE BORD A
                            </a>
                            <a href=\"{{ path('tableaudebord', {'tab': \"B\"}) }}\" class=\"btn\"
                               style=\"background-color: #fff; color: #000;\">
                                TABLEAU DE BORD B
                            </a>
                        </div>
                        <br>
                        {% if besa == null %}
                            <div aria-label=\"Basic examples\" style=\"margin-top: 10px !important\">
                                <button type=\"button\" {% if checkMaster == \"oui\" %} onclick=\"shasharo();\" {% endif %}
                                        class=\"btn\"
                                        style=\"background-color: #754cea; color: #FFF; margin-right: 5px; width: 150px\">
                                    NUMÉROTATIONS
                                </button>
                                <button onclick=\"shashares();\" class=\"btn\"
                                        style=\"background-color: #e86c20; color: #FFF; width: 150px\">
                                    RECHERCHER
                                </button>
                                <button onclick=\"shashar('travauxjour');\" class=\"btn\"
                                        style=\"background-color: #03A9F4FF; color: #FFF;  margin-right: 5px; width: 150px\">
                                    TRAVAUX DU JOUR
                                </button>
                                <a href=\"{{ path('logout') }}\" class=\"btn\"
                                   style=\"background-color: #d63232; color: #FFF; width: 150px\">
                                    SE DÉCONNECTER
                                </a>
                            </div>
                            <div class=\"container\" style=\"padding: 0 !important;\">
                                <br>
                                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\"
                                     style=\"margin-top: 10px !important\">
                                    {% if droitAdmin.actions == \"oui\" or droitComptable.actions == \"oui\" or droitAddClient.actions == \"oui\" %}
                                        <button onclick=\"modalClient();\" class=\"btn\" type=\"button\"
                                                style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px; margin-right:10px\">
                                            AJOUTER UN CLIENT
                                        </button>
                                    {% else %}
                                        <button class=\"btn bg-blue-grey col-white\" type=\"button\"
                                                style=\"font-size: 13px; margin-right:10px\">
                                            AJOUTER UN CLIENT
                                        </button>
                                    {% endif %}
                                    {% if droitAdmin.actions == \"oui\" or droitComptable.actions == \"oui\" or droitAddChantier.actions == \"oui\" %}
                                        <button onclick=\"modalChantier();\" class=\"btn\" type=\"button\"
                                                style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">
                                            AJOUTER UN CHANTIER
                                        </button>
                                    {% else %}
                                        <button class=\"btn bg-blue-grey col-white\" type=\"button\"
                                                style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">
                                            AJOUTER UN CHANTIER
                                        </button>
                                    {% endif %}
                                </div>
                                <br>
                                {% if not ismobile %}
                                    <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\">
                                        <input type=\"text\" id=\"recheclient\" placeholder=\"Rechercher un Client\"
                                               style=\"color: #FFF\">
                                    </div>
                                    <br><br>
                                    <div class=\"row\" style='margin:10px 0 15px 0;' id=\"chantierdiv\">

                                    </div>
                                    <div class=\"row\" style='margin:10px 0 15px 0;'>
                                        <h6 style=\"float: left; color: #fff; margin-top:20px\">©Carlinbleu. All rights
                                            reserved.</h6>
                                        <h6 style=\"float: right; margin-top:20px\">
                                            <a href=\"https://www.facebook.com/profile.php?id=100088340186112\"
                                               style=\"color: #fff\">facebook</a> |
                                            <a href=\"https://www.linkedin.com/company/carlinbleu\" style=\"color: #fff\">linkedin</a>
                                        </h6>
                                    </div>
                                {% endif %}
                            </div>
                        {% else %}
                            <div class=\"container\" style=\"margin-top: 20px\">
                                <div class=\"row\">
                                    {% for beso in besoins %}
                                        {% if beso.etat != \"archiver\" %}
                                            <div class=\"shadow bg-body rounded col-md-4\"
                                                    {% if beso.etat == \"valider\" %} style=\"border:2px solid #3d7318 !important; margin-bottom: 10px\"{% endif %}
                                                    {% if beso.etat == \"urgent\" %} style=\"border:2px solid #f00 !important; margin-bottom: 10px\"{% endif %}
                                                    {% if beso.etat == \"rappel\" %} style=\"border:2px solid #86bfe3 !important; margin-bottom: 10px\"{% endif %}
                                                    {% if beso.etat == \"cloturer\" %} style=\"border:2px solid #a1adb5 !important; margin-bottom: 10px\"{% endif %}
                                            >
                                                <div style=\"text-align: left !important; padding: 5px; background-color: #d9dfe6; margin-top: 10px\">
                                                    <span class=\"col-black bolo700\">De: {{ beso.dobyuser.nom }} {{ beso.dobyuser.prenoms }}</span>
                                                </div>
                                                <br><br>
                                                <h6 style=\"float: right; margin-top: -30px\">Statut:
                                                    {% if beso.etat == \"urgent\" %}<span
                                                            class=\"col-pink bolo700\">[ URGENT ] </span>{% endif %}
                                                    {% if beso.etat == \"valider\" %}<span
                                                            class=\"bolo700 col-green\">[ À VALIDER ]</span>{% endif %}
                                                    {% if beso.etat == \"rappel\" %}<span
                                                            class=\"bolo700 col-blue\">[ RAPPEL ]</span>{% endif %}
                                                    {% if beso.etat == \"cloturer\" %}<span
                                                            class=\"bolo700 col-blue-grey\">[ CLÔTURER ]</span>{% endif %}
                                                </h6>
                                                <h6 style=\"text-align: left\">
                                                    <b><u>Client:</u> </b> {{ beso.chantier.client.nomclient }}<br>
                                                    <b><u>Chantier:</u> </b> {{ beso.chantier.nomchantier }}<br>
                                                    <b><u>Fichiers:</u> </b><br>
                                                    {% for fichier in beso.fichiers %}
                                                        # <a href=\"/{{ fichier.folde }}/{{ fichier.nomfichier }}\"
                                                             class=\"col-blue\" style=\"font-weight: 600\"
                                                             target=\"_blank\">{{ fichier.nomfichier }}</a><br>
                                                    {% endfor %}
                                                    <br>
                                                    {{ beso.besoin|striptags|raw }}<br><br>
                                                    Fait
                                                    le: {{ beso.date|date('d-m-Y H:i') }}
                                                </h6>


                                                {% if estmaster == false and droitAdmin.actions == \"non\" %}
                                                    <div style=\"float: right; margin-top: 10px\">
                                                        {% if droitCommenterBesoin.actions == \"oui\" %}
                                                            <a href=\"#\" class=\"besomessage\" id=\"{{ beso.id }}\"
                                                               title=\"MESSAGE\"
                                                               style=\"margin-right: 5px\"><i
                                                                        class=\"fa fa-message col-orange\"></i></a>
                                                        {% endif %}
                                                        {% if droitCloturerBesoin.actions == \"oui\" %}
                                                            <a href=\"#\" class=\"besocloturer\" id=\"{{ beso.id }}\"
                                                               title=\"CLÔTURER\"
                                                               style=\"margin-right: 5px\"><i
                                                                        class=\"fa fa-check-square col-blue\"></i></a>
                                                        {% endif %}
                                                        {% if droitModifierBesoin.actions == \"oui\" or app.user.id == beso.dobyuser.id %}
                                                            <a href=\"#\" class=\"besoedit\" id=\"{{ beso.id }}\"
                                                               title=\"MODIFIER\"
                                                               style=\"margin-right: 5px\"><i
                                                                        class=\"fa fa-edit col-green\"></i></a>
                                                        {% endif %}
                                                        {% if droitSupprimerBesoin.actions == \"oui\" %}
                                                            <a href=\"#\" class=\"besodel\" id=\"{{ beso.id }}\"
                                                               title=\"SUPPRIMER\"><i
                                                                        class=\"fa fa-trash col-pink\"></i></a>
                                                        {% endif %}
                                                    </div>
                                                {% endif %}
                                                {% if estmaster == true or droitAdmin.actions == \"oui\" %}
                                                    <div style=\"float: right; margin-top: 10px\">
                                                        <a href=\"#\" class=\"besomessage\" id=\"{{ beso.id }}\"
                                                           title=\"MESSAGE\"
                                                           style=\"margin-right: 5px\"><i
                                                                    class=\"fa fa-message col-orange\"></i></a>
                                                        <a href=\"#\" class=\"besocloturer\" id=\"{{ beso.id }}\"
                                                           title=\"CLÔTURER\"
                                                           style=\"margin-right: 5px\"><i
                                                                    class=\"fa fa-check-square col-blue\"></i></a>
                                                        <a href=\"#\" class=\"besoedit\" id=\"{{ beso.id }}\" title=\"MODIFIER\"
                                                           style=\"margin-right: 5px\"><i
                                                                    class=\"fa fa-edit col-green\"></i></a>
                                                        <a href=\"#\" class=\"besoarchiver\" id=\"{{ beso.id }}\"
                                                           title=\"ARCHIVER\"
                                                           style=\"margin-right: 5px\"><i
                                                                    class=\"fa fa-folder col-blue-grey\"></i></a>
                                                        <a href=\"#\" class=\"besodel\" id=\"{{ beso.id }}\"
                                                           title=\"SUPPRIMER\"><i
                                                                    class=\"fa fa-trash col-pink\"></i></a>
                                                    </div>
                                                {% endif %}
                                                <br><br>
                                            </div>
                                        {% endif %}
                                    {% endfor %}
                                </div>
                            </div>
                        {% endif %}
                    </section>
                </div>
                <div class=\"col-xl-3 col-md-3\">
                    {% if not ismobile %}
                        <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\" style=\"width: 100%\">
                            <button class=\"btn bg-blue-grey text-white\"
                                    style=\"color: #000;\">
                                GUIDE D'UTILISATION DE L'APPLICATION
                            </button>
                        </div>
                    {% else %}
                        <br><br>
                    {% endif %}
                    <div class=\"card shadow mb-4\" id=\"client\" style=\"margin-top: 10px\">
                        <h6 class=\"text-left bg-pri col-white bolo600 bolderrer\"
                            style=\"width: 100%; padding: 10px; font-size:14px !important;\">MENU
                        </h6>
                        <div class=\"flex-shrink-0 p-3 bg-white\">
                            {% if droitAdmin.actions == \"oui\" or droitAddBesoin.actions == \"oui\" %}
                                <div style=\"text-align:center\">
                                    <button onclick=\"modalBesoins();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\"> Saisir
                                        des besoins
                                    </button>
                                </div>
                            {% endif %}
                            <hr style=\"color: black\">
                            <ul class=\"list-unstyled ps-0\">
                                <li class=\"mb-1\">
                                    <button class=\"btn align-items-center rounded collapsed  col-black\"
                                            data-bs-toggle=\"collapse\" data-bs-target=\"#perso\" aria-expanded=\"false\"
                                            style=\"font-size: 14px\">
                                        <i class=\"fa fa-folder-open col-blue\" style=\"font-size: 14px\"></i> Gestion du
                                        Personnel
                                    </button>
                                    <div class=\"collapse\" id=\"perso\" style=\"\">
                                        <ul class=\"btn-toggle-nav list-unstyled fw-normal pb-1 small\">
                                            <li><a href=\"#\" onclick=\"shashar('personnel');\" class=\"link-dark rounded\"
                                                   style=\"font-size: 14px\">- Le Personnel</a></li>
                                            <li><a href=\"#\" onclick=\"shashar('chargespersonnelles');\"
                                                   class=\"link-dark rounded\" style=\"font-size: 14px\">- Charges du
                                                    Personnel</a></li>
                                            <li><a href=\"#\" onclick=\"shashar('chargesinternes');\"
                                                   class=\"link-dark rounded\" style=\"font-size: 14px\">- Charges
                                                    Internes</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class=\"mb-1\">
                                    <button class=\"btn align-items-center rounded collapsed  col-black\"
                                            data-bs-toggle=\"collapse\" data-bs-target=\"#tiers\" aria-expanded=\"false\"
                                            style=\"font-size: 14px\">
                                        <i class=\"fa fa-folder-open col-blue\" style=\"font-size: 14px\"></i> Relations
                                        Tiers
                                    </button>
                                    <div class=\"collapse\" id=\"tiers\">
                                        <ul class=\"btn-toggle-nav list-unstyled fw-normal pb-1 small\">
                                            <li><a href=\"#\" onclick=\"shashar('listeclient');\" class=\"link-dark rounded\"
                                                   style=\"font-size: 14px\">- La liste des clients</a></li>
                                            <li><a href=\"#\" onclick=\"shashar('fournisseur');\" class=\"link-dark rounded\"
                                                   style=\"font-size: 14px\">- Gestion des fournisseurs</a></li>
                                            <li><a href=\"#\" onclick=\"shashar('prestataire');\" class=\"link-dark rounded\"
                                                   style=\"font-size: 14px\">- Gestion des prestataires</a></li>
                                            <li><a href=\"#\" onclick=\"shashar('comptesclients');\"
                                                   class=\"link-dark rounded\" style=\"font-size: 14px\">- Créances
                                                    clients</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class=\"mb-1\">
                                    <button class=\"btn align-items-center rounded collapsed  col-black\"
                                            data-bs-toggle=\"collapse\" data-bs-target=\"#recap\" aria-expanded=\"false\"
                                            style=\"font-size: 14px\">
                                        <i class=\"fa fa-folder-open col-blue\" style=\"font-size: 14px\"></i> Recap des
                                        Chantiers
                                    </button>
                                    <div class=\"collapse\" id=\"recap\">
                                        <ul class=\"btn-toggle-nav list-unstyled fw-normal pb-1 small\">
                                            <li><a href=\"#\" onclick=\"shashar('budget');\" class=\"link-dark rounded\"
                                                   style=\"font-size: 14px\">- Charges prévisionnelles</a></li>
                                            <li><a href=\"#\" onclick=\"shashar('tresorerie');\" class=\"link-dark rounded\"
                                                   style=\"font-size: 14px\">- Trésorerie</a></li>
                                            <li><a href=\"#\" onclick=\"shashar('soldecompte');\" class=\"link-dark rounded\"
                                                   style=\"font-size: 14px\">- Etats financiers</a></li>
                                            <li><a href=\"#\" onclick=\"shashar('rapportchantier');\"
                                                   class=\"link-dark rounded\" style=\"font-size: 14px\">- Suivi de
                                                    chantiers</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class=\"mb-1\">
                                    <button class=\"btn align-items-center rounded collapsed col-black\"
                                            data-bs-toggle=\"collapse\" data-bs-target=\"#mato\" aria-expanded=\"false\"
                                            style=\"font-size: 14px\">
                                        <i class=\"fa fa-folder-open col-blue\" style=\"font-size: 14px\"></i> Matériels /
                                        Matériaux
                                    </button>
                                    <div class=\"collapse\" id=\"mato\">
                                        <ul class=\"btn-toggle-nav list-unstyled fw-normal pb-1 small\">
                                            <li><a href=\"#\" onclick=\"shashar('article');\" class=\"link-dark rounded\"
                                                   style=\"font-size: 14px\">- Matériels & matériaux</a></li>
                                            <li><a href=\"#\" onclick=\"shashar('materiel');\" class=\"link-dark rounded\"
                                                   style=\"font-size: 14px\">- Suivi du matériel</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class=\"border-top my-3\"></li>
                                <a href=\"{{ path('listerbesoin', {'beso':  \"oui\", 'tab':tableau }) }}\"
                                   class=\"btn align-items-center rounded col-blue bolo600\" style=\"font-size: 14px\">#
                                    Liste des besoins</a><br>
                                <a href=\"#\" onclick=\"shashar('documents');\"
                                   class=\"btn align-items-center rounded col-blue bolo600\"
                                   style=\"font-size: 14px; margin-top: -15px\"># Gestion des fichiers</a><br>
                                <a href=\"#\" onclick=\"shashar('planning');\"
                                   class=\"btn align-items-center rounded col-blue bolo600\"
                                   style=\"font-size: 14px; margin-top: -15px\"># Planning</a><br>
                                <a href=\"#\" onclick=\"shashar('message');\"
                                   class=\"btn align-items-center rounded col-blue bolo600\"
                                   style=\"font-size: 14px; margin-top: -15px\"># Messagerie</a><br>
                                <a href=\"#\" onclick=\"shashar('chat');\"
                                   class=\"btn align-items-center rounded col-blue bolo600\"
                                   style=\"font-size: 14px; margin-top: -15px\"># Chat</a><br>
                                <a href=\"#\" onclick=\"shashar('start');\"
                                   class=\"btn align-items-center rounded col-blue bolo600\"
                                   style=\"font-size: 14px; margin-top: -15px\"># Agenda</a><br>
                                <a href=\"#\" onclick=\"shashar('parametre');\"
                                   class=\"btn align-items-center rounded col-blue bolo600\"
                                   style=\"font-size: 14px; margin-top: -15px\"># Paramètres</a><br>
                                <a href=\"#\" onclick=\"shashar('historique');\"
                                   class=\"btn align-items-center rounded col-blue bolo600\"
                                   style=\"font-size: 14px; margin-top: -15px\"># Historique</a><br>
                                <a href=\"#\" onclick=\"shashar('corbeille');\"
                                   class=\"btn align-items-center rounded col-blue bolo600\"
                                   style=\"font-size: 14px; margin-top: -15px\"># Corbeille</a><br>
                            </ul>
                        </div>

                    </div>
                    <div class=\"card shadow mb-4\" id=\"client\">
                        <h6 class=\"text-left bg-pri col-white bolo600 bolderrer\"
                            style=\"width: 100%; padding: 10px; font-size:14px !important; margin-top: -10px\">ACTIONS
                            RAPIDES
                        </h6>
                        <div class=\"table-responsive\" style=\"padding: 10px; overflow-x: scroll; text-align:left\">
                            <p><a onclick=\"shashar('chantieretude');\" class=\"col-black\"
                                  style=\"font-weight: 500 !important;\">&raquo;
                                    Chantiers en étude</a></p>
                            <p><a onclick=\"shashar('chantiercours');\" class=\"col-black\"
                                  style=\"font-weight: 500 !important;\">&raquo;
                                    Chantiers en cours</a></p>
                            <p><a onclick=\"shashar('chantierechouer');\" class=\"col-black\"
                                  style=\"font-weight: 500 !important;\">&raquo;
                                    Chantiers échoués</a></p>
                            <p><a onclick=\"shashar('chantiersclotures');\" class=\"col-black\"
                                  style=\"font-weight: 500 !important;\">&raquo; Chantiers clôturés</a></p>
                            <p><a onclick=\"shashar('chantierstermines');\" class=\"col-black\"
                                  style=\"font-weight: 500 !important;\">&raquo; Chantiers terminés</a></p>
                            <hr>
                            <p>
                                {% if droitAdmin.actions == \"oui\" or droitComptable.actions == \"oui\" or droitAddDevis.actions == \"oui\" %}
                                    <a href=\"#\" onclick=\"modalDevis();\" class=\"col-black\"
                                       style=\"font-weight: 500 !important;\">&raquo;
                                        Créer un Devis</a>
                                {% else %}
                                    <a class=\"col-blue-grey\" style=\"font-weight: 500 !important;\">&raquo; Créer un
                                        Devis</a>
                                {% endif %}
                            </p>
                            <p><a onclick=\"modalDecompte();\" class=\"col-black\" style=\"font-weight: 500 !important;\">&raquo;
                                    Créer un Décompte</a></p>
                            <p><a onclick=\"modalFacture();\" class=\"col-black\" style=\"font-weight: 500 !important;\">&raquo;
                                    Créer
                                    une Facture</a></p>
                            <p><a onclick=\"modalReglement();\" class=\"col-black\" style=\"font-weight: 500 !important;\">&raquo;
                                    Faire un Règlement</a></p>
                            <hr>
                            <p><a onclick=\"modalPrestataire();\" class=\"col-black\" style=\"font-weight: 500 !important;\">&raquo;
                                    Ajouter un Prestataire</a></p>
                            <p><a onclick=\"modalFournisseur();\" class=\"col-black\" style=\"font-weight: 500 !important;\">&raquo;
                                    Ajouter un Fournisseur</a></p>
                            <p><a onclick=\"modalBonPrestataire();\" class=\"col-black\"
                                  style=\"font-weight: 500 !important;\">&raquo;
                                    Créer un Bon Prestataire</a></p>
                            <p><a onclick=\"modalBonFournisseur();\" class=\"col-black\"
                                  style=\"font-weight: 500 !important;\">&raquo;
                                    Faire un Bon Fournisseur</a></p>
                            <p><a onclick=\"modalPaiePrestataire();\" class=\"col-black\"
                                  style=\"font-weight: 500 !important;\">&raquo;
                                    Paie Prestataire</a></p>
                            <p><a onclick=\"modalPaieFournisseur();\" class=\"col-black\"
                                  style=\"font-weight: 500 !important;\">&raquo;
                                    Paie Fournisseur</a></p>
                        </div>

                    </div>
                    <div class=\"card shadow mb-4\" id=\"client\">
                        <h6 class=\"text-left bg-pri col-white bolo600 bolderrer\"
                            style=\"width: 100%; padding: 10px; font-size:14px !important;\">EXCERCICES COMPTABLES
                        </h6>
                        <div class=\"table-responsive\" style=\"padding: 10px; overflow-x: scroll; text-align:center\">
                            <button onclick=\"modalExercices();\" class=\"btn\" type=\"button\"
                                    style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\"> Créer des
                                exercices comptables
                            </button>
                        </div>
                        <div style=\"padding-left: 10px; overflow-x: scroll; text-align:left\">
                            <h6 class=\"text-left\">
                                <table style=\"width: 100%\">
                                    {% for exer in exercices %}
                                        {% if exer.corbeille is null %}
                                            <tr>
                                                <td><a href=\"#\" onclick=\"shashar('exercices/{{ exer.id }}');\"
                                                       style=\"font-size:15px !important; font-weight:normal\"
                                                       class=\"col-black\"># {{ exer.exercice }}</a>
                                                    <br>
                                                    <span>
                                            <a href=\"#\" onclick=\"shashar('exercices/{{ exer.id }}');\"
                                               style=\"font-size:14px !important; font-weight:normal\"
                                               class=\"col-pink bolo600\">Du: {{ exer.debut|date('d-m-Y') }} | Au: {{ exer.fin|date('d-m-Y') }}
                                            </a>
                                        </span>
                                                </td>
                                                <td class=\"text-right nowrape\">
                                                    <button style=\"border-color: #b2becc; border-style: none\"
                                                            class=\"editexer\" id=\"{{ exer.id }}\"><i
                                                                class=\"fa fa-edit col-green\"
                                                                style=\"font-size: 16px\"></i></button>
                                                    <button style=\"border-color: #b2becc ; border-style: none\"
                                                            class=\"delexer\" id=\"{{ exer.id }}\"><i
                                                                class=\"fa fa-trash col-pink\"
                                                                style=\"font-size: 16px\"></i></button>
                                                </td>
                                            </tr>
                                        {% endif %}
                                    {% endfor %}
                                </table>
                            </h6>
                        </div>
                    </div>
                    <div class=\"card shadow mb-4\" id=\"client\" style=\"height: 400px\">
                        <h6 class=\"text-left bg-pri col-white bolo600 bolderrer\"
                            style=\"width: 100%; padding: 10px; font-size:14px !important;\">BESOINS ARCHIVÉS
                        </h6>
                        <div style=\"padding: 10px; overflow-x: scroll;\">
                            {% for beso in besoins %}
                                {% if beso.etat == \"archiver\" %}
                                    <div class=\"shadow p-3 bg-body rounded\">
                                        <h6>
                                            <span class=\"col-black bolo700\">De: {{ beso.dobyuser.nom }} {{ beso.dobyuser.prenoms }}</span>
                                        </h6>
                                        <hr style=\"margin-top: -10px\">
                                        <h6 class=\"text-left\">
                                            <b><u>Client:</u> </b> {{ beso.chantier.client.nomclient }}<br>
                                            <b><u>Chantier:</u> </b> {{ beso.chantier.nomchantier }}<br>
                                            <b><u>Fichiers:</u> </b><br>
                                            {% for fichier in beso.fichiers %}
                                                # <a href=\"/{{ fichier.folde }}/{{ fichier.nomfichier }}\"
                                                     class=\"col-blue\" style=\"font-weight: 600\"
                                                     target=\"_blank\">{{ fichier.nomfichier }}</a><br>
                                            {% endfor %}
                                            <br>
                                            {{ beso.besoin|striptags|raw }}<br><br>
                                            Fait
                                            le: {{ beso.date|date('d-m-Y H:i') }}
                                        </h6>
                                        {% if estmaster == true or droitAdmin.actions == \"oui\" %}
                                            <div style=\"float: right; margin-top: 10px\">
                                                <a href=\"#\" class=\"besomessage\" id=\"{{ beso.id }}\" title=\"MESSAGE\"
                                                   style=\"margin-right: 5px\"><i
                                                            class=\"fa fa-message col-orange\"></i></a>
                                                <a href=\"#\" class=\"besorelancer\" id=\"{{ beso.id }}\" title=\"RELANCER\"><i
                                                            class=\"fa fa-repeat col-blue\"></i></a>
                                            </div>
                                        {% endif %}
                                        <br><br>
                                    </div>
                                {% endif %}
                            {% endfor %}
                        </div>
                    </div>
                </div>
            {% endif %}
        </div>
    </div>
{% endif %}

{% if vue.vue == \"vuebbbb\" %}
    <div class=\"container\">
        <div class=\"row justify-content-center\" style=\"margin-top:60px\">
            <div class=\"col-xl-9 col-md-9\">
                <h3 class=\"tet text-white text-center font-weight-bold\">CARLINBLEU - OPTION COMPTABILITÉ</h3>
                <h5 class=\"text-center\" style=\"color:#efd807; \">
                    BIENVENUE {{ app.user.nom|upper }} {{ app.user.prenoms|upper }} </h5>

                <section class=\"features-icons  text-center\" style=\"padding: 0 !important; margin-top: 30px\">
                    <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\" style=\"margin-top: 10px !important\">
                        <button type=\"button\" {% if checkMaster == \"oui\" %} onclick=\"shasharo();\" {% endif %}
                                class=\"btn\"
                                style=\"background-color: #754cea; color: #FFF; margin-right: 10px\">
                            NUMÉROTATIONS
                        </button>
                        <a href=\"{{ path('app_accueil') }}\" class=\"btn\"
                           style=\"background-color: #1cb0a4; color: #FFF; \">
                            RETOUR À PAGE D'ACCUEIL
                        </a>
                    </div>
                    <h5 class=\"text-center\" style=\"color:#82e3a6;font-weight: bold; margin-top: 40px; font-size: 16px \">
                        EFFECTUER DES
                        ENREGISTREMENTS</h5>
                    <div class=\"container\" style=\"padding: 0 !important;\">
                        {% if not ismobile %}
                            <div class=\"row\" style='margin:10px 0 15px 0;'>
                                <div class=\"d-grid gap-2 col-3 mx-auto\">
                                    <button onclick=\"modalClient();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">AJOUTER UN
                                        CLIENT
                                    </button>
                                    <button onclick=\"modalDevis();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">CRÉER UN
                                        DEVIS
                                    </button>
                                    <button onclick=\"modalPrestataire();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">AJOUTER UN
                                        PRESTATAIRE
                                    </button>
                                    <button onclick=\"modalChargesInternes();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">CHARGES
                                        INTERNES
                                    </button>
                                    <button onclick=\"modalBonPrestataire();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">BON
                                        PRESTATAIRE
                                    </button>
                                </div>
                                <div class=\"d-grid gap-2 col-3 mx-auto\">
                                    <button onclick=\"modalChantier();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">AJOUTER UN
                                        CHANTIER
                                    </button>
                                    <button onclick=\"modalDecompte();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">CRÉER UN
                                        DÉCOMPTE
                                    </button>
                                    <button onclick=\"modalPerso();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">AJOUTER UN
                                        PERSONNEL
                                    </button>
                                    <button onclick=\"modalBonsChargesInternes();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">BON
                                        CHARGES
                                        INTERNES
                                    </button>
                                    <button onclick=\"modalPaieFournisseur();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">PAIE
                                        FOURNISSEURS
                                    </button>
                                </div>
                                <div class=\"d-grid gap-2 col-3 mx-auto\">
                                    <button onclick=\"modalContact();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">AJOUTER UN
                                        CONTACT
                                    </button>
                                    <button onclick=\"modalFacture();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">CRÉER UN
                                        FACTURE
                                    </button>
                                    <button onclick=\"modalReglement();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">RÈGLEMENTS
                                        CLIENTS
                                    </button>
                                    <button onclick=\"modalBonSuivi();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">CRÉER UN
                                        BON
                                        DE SUIVI
                                    </button>

                                    <button onclick=\"modalPaiePrestataire();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">PAIE
                                        PRESTATAIRES
                                    </button>
                                </div>
                                <div class=\"d-grid gap-2 col-3 mx-auto\">
                                    <button onclick=\"shashar('article');\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">AJOUTER UN
                                        ARTICLE
                                    </button>
                                    <button onclick=\"modalFournisseur();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">AJOUTER UN
                                        FOURNISSEUR
                                    </button>
                                    <button onclick=\"modalChargeChantier();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">CHARGES
                                        CHANTIERS
                                    </button>
                                    <button onclick=\"modalBonFournisseur();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">BON
                                        FOURNISSEURS
                                    </button>
                                    <button onclick=\"modalPaiePersonnel();\" class=\"btn\" type=\"button\"
                                            style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">PAIE
                                        PERSONNEL
                                    </button>
                                </div>
                            </div>
                        {% endif %}
                        {% if ismobile %}
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\">
                                <button onclick=\"modalClient();\" class=\"btn\"
                                        style=\"font-size: 11px; background-color: #4e73df; color: #FFF; width: 115px\">
                                    AJOUTER UN CLIENT
                                </button>
                                <button onclick=\"modalChantier();\" class=\"btn\"
                                        style=\"font-size: 11px; width: 115px;  background-color: #4e73df; color: #FFF; margin-left: 5px\">
                                    AJOUTER UN CHANTIER
                                </button>
                                <button onclick=\"modalContact();\" class=\"btn\"
                                        style=\"font-size: 11px;  width: 115px; background-color: #4e73df; color: #FFF; margin-left: 5px\">
                                    AJOUTER UN CONTACT
                                </button>
                            </div>
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\">
                                <button onclick=\"modalDevis();\" class=\"btn\"
                                        style=\"font-size: 11px; background-color: #4e73df; color: #FFF; width: 115px\">
                                    CRÉER UN DEVIS
                                </button>
                                <button onclick=\"modalDecompte();\" class=\"btn\"
                                        style=\"font-size: 11px;  width: 115px; background-color: #4e73df; color: #FFF; margin-left: 5px\">
                                    CRÉER UN DÉCOMPTE
                                </button>
                                <button onclick=\"modalFacture();\" class=\"btn\"
                                        style=\"font-size: 11px;  width: 115px; background-color: #4e73df; color: #FFF; margin-left: 5px\">
                                    CRÉER UNE FACTURE
                                </button>
                            </div>
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\">
                                <button onclick=\"modalPrestataire();\" class=\"btn\"
                                        style=\"font-size: 11px; background-color:#4e73df; color: #FFF; width: 115px\">
                                    AJOUTER UN PRESTATAIRE
                                </button>
                                <button onclick=\"modalPerso();\" class=\"btn\"
                                        style=\"font-size: 11px; width: 115px; background-color: #4e73df; color: #FFF; margin-left: 5px\">
                                    AJOUTER UN PERSONNEL
                                </button>
                                <button onclick=\"modalReglement();\" class=\"btn\"
                                        style=\"font-size: 11px; width: 115px; background-color: #4e73df; color: #FFF; margin-left: 5px\">
                                    FAIRE UN RÈGLEMENT
                                </button>
                            </div>
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\">
                                <button onclick=\"modalChargesInternes();\" class=\"btn\"
                                        style=\"font-size: 11px; background-color:#4e73df; color: #FFF; width: 115px\">
                                    CHARGES INTERNES
                                </button>
                                <button onclick=\"modalBonsChargesInternes();\" class=\"btn\"
                                        style=\"font-size: 11px; width: 115px; background-color: #4e73df; color: #FFF; margin-left: 5px\">
                                    BON CHARGES INTERNES
                                </button>
                                <button onclick=\"modalBonSuivi();\" class=\"btn\"
                                        style=\"font-size: 11px; width: 115px; background-color: #4e73df; color: #FFF; margin-left: 5px\">
                                    CRÉER UN BON DE SUIVI
                                </button>
                            </div>
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\">
                                <button onclick=\"modalBonPrestataire();\" class=\"btn\"
                                        style=\"font-size: 11px; background-color:#4e73df; color: #FFF; width: 115px\">
                                    BON PRESTATAIRE
                                </button>
                                <button onclick=\"modalBonFournisseur();\" class=\"btn\"
                                        style=\"font-size: 11px; width: 115px; background-color: #4e73df; color: #FFF; margin-left: 5px\">
                                    BON FOURNISSEUR
                                </button>
                                <button onclick=\"modalPaiePrestataire();\" class=\"btn\"
                                        style=\"font-size: 11px; width: 115px; background-color: #4e73df; color: #FFF; margin-left: 5px\">
                                    PAIE PRESTATAIRE
                                </button>
                            </div>
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\">
                                <button onclick=\"modalPaieFournisseur();\" class=\"btn\"
                                        style=\"font-size: 11px; background-color:#4e73df; color: #FFF; width: 115px\">
                                    PAIE FOURNISSEUR
                                </button>
                                <button onclick=\"modalPaiePersonnel();\" class=\"btn\"
                                        style=\"font-size: 11px; width: 115px; background-color: #4e73df; color: #FFF; margin-left: 5px\">
                                    PAIE PERSONNEL
                                </button>
                                <button onclick=\"modalChargeChantier();\" class=\"btn\"
                                        style=\"font-size: 11px; width: 115px; background-color: #4e73df; color: #FFF; margin-left: 5px\">
                                    CHARGES CHANTIERS
                                </button>
                            </div>

                        {% endif %}
                        <h5 class=\"text-center\"
                            style=\"color:#82e3a6;font-weight: bold; margin-top: 60px; font-size: 16px  \">CONSULTER DES
                            ENREGISTREMENTS</h5>

                        <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\"
                             style=\"margin-top: 10px !important\">
                            <button onclick=\"shashares();\" class=\"btn\" ∑
                                    style=\"background-color: #89c57e; color: #FFF; \">
                                RECHERCHER
                            </button>
                            <button onclick=\"shashar('travauxjour');\" class=\"btn\"
                                    style=\"background-color: #03A9F4FF; color: #FFF; margin-left: 5px\">
                                TRAVAUX DU JOUR
                            </button>
                            <button onclick=\"shashar('soldecompte');\" class=\"btn\"
                                    style=\"background-color: #9247b7; color: #FFF; margin-left: 5px\">
                                ETATS FINANCIERS
                            </button>
                            <button onclick=\"shashar('rapportchantier');\" class=\"btn\"
                                    style=\"background-color: #e86c20; color: #FFF; margin-left: 5px\">
                                SUIVI DE CHANTIERS
                            </button>
                        </div>
                        <div class=\"row\" style='margin:10px 0 15px 0;'>
                            {% if not ismobile %}
                                <div class=\"row\" style='margin:10px 0 15px 0;'>
                                    <div class=\"d-grid gap-2 col-3 mx-auto\">
                                        <button onclick=\"shashar('listeclient');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">LISTE
                                            DES
                                            CLIENTS
                                        </button>
                                        <button onclick=\"shashar('souschantier');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">SOUS
                                            CHANTIERS
                                        </button>
                                        <button onclick=\"shashar('chantieretude');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">
                                            CHANTIERS EN
                                            ÉTUDE
                                        </button>
                                        <button onclick=\"shashar('chantiersclotures');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">
                                            CHANTIERS
                                            CLÔTURÉS
                                        </button>
                                        <button onclick=\"shashar('parametre');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">
                                            PARAMÈTRES
                                        </button>
                                        <button onclick=\"shashar('message');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">
                                            MESSAGERIE
                                        </button>
                                    </div>
                                    <div class=\"d-grid gap-2 col-3 mx-auto\">
                                        <button onclick=\"shashar('chantiercours');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">
                                            CHANTIERS EN
                                            COURS
                                        </button>
                                        <button onclick=\"shashar('chantierstermines');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">
                                            CHANTIERS
                                            TERMINÉS
                                        </button>
                                        <button onclick=\"shashar('chantierechouer');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">
                                            CHANTIERS
                                            ÉCHOUÉS
                                        </button>
                                        <button onclick=\"shashar('chantierstous');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">TOUS LES
                                            CHANTIERS
                                        </button>
                                        <button onclick=\"shashar('historique');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">
                                            HISTORIQUE
                                        </button>
                                        <button onclick=\"shashar('chat');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">CHAT
                                        </button>
                                    </div>
                                    <div class=\"d-grid gap-2 col-3 mx-auto\">

                                        <button onclick=\"shashar('comptesclients');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">COMPTES
                                            CLIENTS
                                        </button>
                                        <button onclick=\"shashar('fournisseur');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">LISTE
                                            DES
                                            FOURNISSEURS
                                        </button>
                                        <button onclick=\"shashar('chargespersonnelles');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">CHARGES
                                            DU
                                            PERSONNEL
                                        </button>
                                        <button onclick=\"shashar('budget');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">CHARGES
                                            PREVISIONNELLES
                                        </button>
                                        <button onclick=\"shashar('start');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">AGENDA
                                        </button>
                                        <button onclick=\"shashar('paie');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">PAIE
                                        </button>
                                    </div>
                                    <div class=\"d-grid gap-2 col-3 mx-auto\">

                                        <button onclick=\"shashar('contact');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">LISTE
                                            DES
                                            CONTACTS
                                        </button>
                                        <button onclick=\"shashar('prestataire');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">LISTE
                                            DES
                                            PRESTATAIRES
                                        </button>
                                        <button onclick=\"shashar('chargesinternes');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">CHARGES
                                            INTERNES
                                        </button>
                                        <button onclick=\"shashar('tresorerie');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">GESTION
                                            DE
                                            TRÉSORERIE
                                        </button>
                                        <button onclick=\"shashar('corbeille');\" class=\"btn\" type=\"button\"
                                                style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">
                                            CORBEILLE
                                        </button>
                                        <a href=\"{{ path('logout') }}\" class=\"btn bg-pink col-white\" type=\"button\"
                                           style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">SE
                                            DÉCONNECTER
                                        </a>
                                    </div>
                                </div>
                            {% endif %}
                        </div>
                        {% if ismobile %}
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\">
                                <button onclick=\"shashar('listeclient');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px;\">
                                    LISTE DES CLIENTS
                                </button>
                                <button onclick=\"shashar('chantieretude');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px; margin-left: 5px\">
                                    CHANTIERS EN ÉTUDE
                                </button>
                                <button onclick=\"shashar('chantiercours');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px; margin-left: 5px\">
                                    CHANTIERS EN COURS
                                </button>

                            </div>
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\">
                                <button onclick=\"shashar('souschantier');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px;\">
                                    SOUS CHANTIERS
                                </button>
                                <button onclick=\"shashar('chantiersclotures');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px; margin-left: 5px\">
                                    CHANTIERS CLÔTURÉS
                                </button>
                                <button onclick=\"shashar('chantierechouer');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px; margin-left: 5px\">
                                    CHANTIERS ÉCHOUÉS
                                </button>

                            </div>
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\">
                                <button onclick=\"shashar('chantierstermines');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px;\">
                                    CHANTIERS TERMINÉS
                                </button>
                                <button onclick=\"shashar('chantierstous');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px; margin-left: 5px\">
                                    TOUS LES CHANTIERS
                                </button>
                                <button onclick=\"shashar('comptesclients');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px; margin-left: 5px\">
                                    COMPTES CLIENTS
                                </button>
                            </div>
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\">
                                <button onclick=\"shashar('contact');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px;\">
                                    LISTE DES
                                    CONTACTS
                                </button>
                                <button onclick=\"shashar('prestataire');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px; margin-left: 5px\">
                                    LISTE DES
                                    PRESTATAIRES
                                </button>
                                <button onclick=\"shashar('chargesinternes');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px; margin-left: 5px\">
                                    CHARGES INTERNES
                                </button>
                            </div>
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\">
                                <button onclick=\"shashar('chargespersonnelles');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px;\">
                                    CHARGES DU PERSONNEL
                                </button>
                                <button onclick=\"shashar('budget');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px; margin-left: 5px\">
                                    CHARGES PREVISIONNELLES
                                </button>
                                <button onclick=\"shashar('fournisseur');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px; margin-left: 5px\">
                                    LISTE DES
                                    FOURNISSEURS
                                </button>
                            </div>
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\">
                                <button onclick=\"shashar('chat');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px;\">
                                    CHAT
                                </button>
                                <button onclick=\"shashar('start');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px; margin-left: 5px\">
                                    AGENDA
                                </button>
                                <button onclick=\"shashar('paie');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px; margin-left: 5px\">
                                    PAIE
                                </button>
                            </div>
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\">
                                <button onclick=\"shashar('parametre');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px;\">
                                    PARAMÈTRES
                                </button>
                                <button onclick=\"shashar('message');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px; margin-left: 5px\">
                                    MESSAGERIE
                                </button>
                                <button onclick=\"shashar('historique');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px; margin-left: 5px\">
                                    HISTORIQUE
                                </button>
                            </div>
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\">
                                <button onclick=\"shashar('tresorerie');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px;\">
                                    GESTION DE TRÉSORERIE
                                </button>
                                <button onclick=\"shashar('corbeille');\" class=\"btn\"
                                        style=\"color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px; margin-left: 5px\">
                                    CORBEILLE
                                </button>
                                <a href=\"{{ path('logout') }}\" class=\"btn bg-pink\"
                                   style=\" color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px; margin-left: 5px\">
                                    SE DÉCONNECTER
                                </a>
                            </div>
                        {% endif %}
                        <div class=\"row\" style='margin:10px 0 15px 0;'>
                            <h6 style=\"float: left; color: #fff; margin-top:20px\">©Carlinbleu. All rights reserved.</h6>
                            <h6 style=\"float: right; margin-top:20px\">
                                <a href=\"https://www.facebook.com/profile.php?id=100088340186112\"
                                   style=\"color: #fff\">facebook</a> |
                                <a href=\"https://www.linkedin.com/company/carlinbleu\" style=\"color: #fff\">linkedin</a>
                            </h6>
                        </div>
                    </div>
                </section>
            </div>
            <div class=\"col-xl-3 col-md-3\">

                <div class=\"card shadow mb-4\" id=\"client\">
                    <h6 class=\"text-left bg-pri col-white bolo600 bolderrer\"
                        style=\"width: 100%; padding: 10px; font-size:14px !important;\">DIVERS
                    </h6>
                    <div class=\"table-responsive\" style=\"padding: 10px; overflow-x: scroll\">
                        <h6 class=\"text-left\" style=\"font-size:15px !important;\"># Guide Carlinbleu <span
                                    class=\"bolo600 col-blue\">( Option Comptabilité )</span></h6>
                        <h6 class=\"text-left\" style=\"font-size:15px !important;\"># Concept de gestion de chantiers</h6>
                    </div>
                </div>

                <div class=\"card shadow mb-4\" id=\"client\">
                    <h6 class=\"text-left bg-pri col-white bolo600 bolderrer\"
                        style=\"width: 100%; padding: 10px; font-size:14px !important;\">EXCERCICES COMPTABLES
                    </h6>
                    <div class=\"table-responsive\" style=\"padding: 10px; overflow-x: scroll; text-align:center\">
                        <button onclick=\"modalExercices();\" class=\"btn\" type=\"button\"
                                style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\"> Créer des exercices
                            comptables
                        </button>
                    </div>
                    <div style=\"padding-left: 10px; overflow-x: scroll; text-align:left\">
                        <h6 class=\"text-left\">
                            <table style=\"width: 100%\">
                                {% for exer in exercices %}
                                    <tr>
                                        <td><a href=\"#\" onclick=\"shashar('exercices/{{ exer.id }}');\"
                                               style=\"font-size:15px !important; font-weight:normal\"
                                               class=\"col-black\"># {{ exer.exercice }}</a>
                                            <br>
                                            <span>
                                            <a href=\"#\" onclick=\"shashar('exercices/{{ exer.id }}');\"
                                               style=\"font-size:14px !important; font-weight:normal\"
                                               class=\"col-pink bolo600\">
                                                ( Du: {{ exer.debut|date('d-m-Y') }} | Au: {{ exer.fin|date('d-m-Y') }} )
                                            </a>
                                        </span>
                                        </td>
                                        <td class=\"text-right\">
                                            <a href=\"#\"><i class=\"fa fa-edit col-green\"></i></a>
                                            <a href=\"#\"><i class=\"fa fa-trash col-pink\"></i></a>
                                        </td>
                                    </tr>
                                {% endfor %}
                            </table>
                        </h6>

                    </div>
                </div>

                <div class=\"card shadow mb-4\" id=\"client\">
                    <h6 class=\"text-left bg-pri col-white bolo600 bolderrer\"
                        style=\"width: 100%; padding: 10px; font-size:14px !important;\">TOP 10 CHANTIERS PLUS UTILISÉS
                    </h6>
                    <div class=\"table-responsive\" style=\"padding: 10px; overflow-x: scroll\">
                        <table class=\"table-bordered shadow\" style=\" overflow: scroll; width: 100%; font-size: 12px\">
                            {% for chan in chans %}
                                {% if chan.corbeille is null %}
                                    <tr>
                                        <td colspan=\"2\" class=\"bg-blue text-white\"
                                            style=\"padding-left: 5px;\">
                                            <a href=\"{{ path('client',{id: chan.client.id}) }}\"
                                               class=\"text-white\"
                                               title=\"{{ chan.client.nomclient|upper }}\">
                                                -
                                                {{ chan.client.nomclient|upper }}
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=\"padding-left: 5px\" colspan=\"2\" class=\"bg-light\">
                                            <a href=\"#\" onclick=\"shashar('chantier/{{ chan.id }}');\" class=\"text-pri\"
                                               title=\"{{ chan.nomchantier|upper }}\">
                                                # {{ chan.nomchantier|upper }}
                                            </a>
                                        </td>
                                    </tr>
                                {% endif %}
                            {% endfor %}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endif %}

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/locale/fr.min.js\"></script>


<script src=\"{{ asset('js/jquery.slimscroll.js') }}\"></script>
<script src=\"{{ asset('js/jquery.validate.js') }}\"></script>
<script src=\"{{ asset('js/bootstrap-notify.js') }}\"></script>
<script src=\"{{ asset('js/waves.js') }}\"></script>
<script src=\"{{ asset('js/demo.js') }}\"></script>
<script src=\"{{ asset('js/sortable-nestable.js') }}\"></script>
<script src=\"{{ asset('js/jquery.nestable.js') }}\"></script>
<script src=\"{{ asset('js/jquery.tableToExcel.js') }}\"></script>
<script src=\"{{ asset('js/select2.min.js') }}\"></script>
<script src=\"{{ asset('js/lightgallery-all.js') }}\"></script>
<script src=\"{{ asset('js/image-gallery.js') }}\"></script>
<script src=\"{{ asset('js/notifications.js') }}\"></script>
<script src=\"{{ asset('js/autosize.js') }}\"></script>

<script src=\"{{ asset('js/admin.js') }}\"></script>
<link href=\"{{ asset('datetimepicker/css/bootstrap-datetimepicker.min.css') }}\" rel=\"stylesheet\"/>
<script src=\"{{ asset('momentjs/moment.js') }}\"></script>
<script src=\"{{ asset('js/bootstrap-material-datetimepicker.js') }}\"></script>
<script src=\"{{ asset('datetimepicker/js/bootstrap-datetimepicker.min.js') }}\"></script>
<script src=\"{{ asset('datetimepicker/js/demo.js') }}\"></script>

<script src=\"{{ asset('js/datascript.js') }}\"></script>
<script src=\"{{ asset('start/article.js') }}\"></script>
<script src=\"{{ asset('start/contact.js') }}\"></script>
<script src=\"{{ asset('start/decompte.js') }}\"></script>
<script src=\"{{ asset('start/facture.js') }}\"></script>
<script src=\"{{ asset('start/personnel.js') }}\"></script>
<script src=\"{{ asset('start/caisse.js') }}\"></script>
<script>

        const formatNumber = (num, precision, separator) => {
        let parts;
        num = Number(num);
        num = (typeof precision !== 'undefined' ? num.toFixed(precision) : num).toString();
        parts = num.split('.');
        parts[0] = parts[0].toString().replace(/(\\d)(?=(\\d{3})+(?!\\d))/g, '\$1' + (separator));
        return parts.join(',');
    }

    document.getElementById('close_add_exercices').onclick = function () {
        window.location.href = '/crm/welcome/tableau/' + \$(\"#tabb\").val();
    }

    \$('#updExercices').off().on(\"click\", function (event) {
        event.preventDefault()
        if (\$(this).closest('form').valid()) {
            \$('#updExercices').hide()
            \$('#loadExercices').css('display', '')
            \$.ajax({
                type: 'POST',
                url: '/crm/welcome/exercices/upd/' + \$(\"#idexer\").val(),
                data: JSON.stringify(\$('#addExercicesForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    window.location.href = '/crm/welcome/tableau/' + \$(\"#tabb\").val();
                },
                error: function (xhr, resp, text) {
                    \$('#ModalErreur').modal('show')
                },
            })
        }
    })

    \$('#addExercices').off().on(\"click\", function (event) {
        event.preventDefault()
        if (\$(this).closest('form').valid()) {
            \$('#addExercices').hide()
            \$('#loadExercices').css('display', '')
            \$.ajax({
                type: 'POST',
                url: '/crm/welcome/exercices/add',
                data: JSON.stringify(\$('#addExercicesForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    window.location.href = '/crm/welcome/tableau/' + \$(\"#tabb\").val();
                },
                error: function (xhr, resp, text) {
                    \$('#ModalErreur').modal('show')
                },
            })
        }
    })

    if (\$(\"#idexer\").val()) {
        const modal = document.getElementById(\"app_exercices\");
        modal.style.display = \"block\";
    }

    \$(\".editexer\").off().on('click', function (event) {
        \$('#Traitement').modal('show');
        window.location.href = '/crm/welcome/exercices/' + this.id + '/' + \$(\"#tabb\").val();
    });

    \$(\".delexer\").off().on('click', function (event) {
        \$('#Traitement').modal('show');
        axios({
            method: 'DELETE',
            url: '/crm/welcome/exercices/delete/' + this.id,
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
        }).then(function (response) {
            window.location.href = '/crm/welcome/tableau/' + \$(\"#tabb\").val();
        }).catch(function (error) {
            \$('#Traitement').modal('hide');
            \$('#ModalErreur').modal('show');
        });
    });

    setInterval(function () {

        \$.ajax({
            type: 'POST',
            url: '/crm/welcome/alertes/get',
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                const data = respdata[0];
                if (data != null || data != undefined) {
                    const atitre = document.getElementById('atitre');
                    const acontent = document.getElementById('acontent');

                    atitre.innerHTML = \"\";
                    atitre.innerHTML = data[\"titre\"];

                    acontent.innerHTML = \"\";
                    acontent.innerHTML = data[\"alerte\"];

                    const notif = document.getElementById('notif');
                    if (notif.style.display === 'block')
                        notif.style.display = 'none';
                    else
                        notif.style.display = 'block';

                    \$.ajax({
                        type: 'POST',
                        url: '/crm/welcome/alerte/delete/' + data[\"id\"],
                        contentType: 'application/json; charset=utf-8',
                        dataType: 'json',
                        success: function (respdata, textStatus, jqXHR) {

                        },
                        error: function (xhr, resp, text) {
                            \$('#ModalErreur').modal('show')
                        },
                    })
                } else {
                    notif.style.display = 'none';
                }

            },
            error: function (xhr, resp, text) {
                \$('#ModalErreur').modal('show')
            },
        })
    }, 30000);

    \$(\".besomessage\").off().on('click', function (event) {

        const elt = document.getElementById('chatbesoin');
        elt.innerHTML = \"\";
        elt.className = '';

        const momo = document.getElementById(\"chatbesoin\");
        momo.classList.add(this.id)

        const modal = document.getElementById(\"chat_besoins\");
        modal.style.display = \"block\";
        const div = document.createElement(\"div\");
        const divinfo = document.createElement(\"div\");
        const divchat = document.createElement(\"div\");

        const client = document.createElement(\"p\");
        const clispan = document.createElement(\"span\");
        const clispan2 = document.createElement(\"span\");
        const chantier = document.createElement(\"p\");
        const chanspan = document.createElement(\"span\");
        const chanspan2 = document.createElement(\"span\");
        const besospan = document.createElement(\"span\");
        const besospan2 = document.createElement(\"span\");
        const beso = document.createElement(\"p\");

        div.classList.add(\"mainer\");
        divinfo.classList.add(\"divinfo\");
        divchat.classList.add(\"divchat\");

        clispan.classList.add(\"clispan\");
        clispan2.classList.add(\"clispann\");

        chanspan.classList.add(\"clispan\");
        chanspan2.classList.add(\"clispann\");

        clispan.innerHTML = 'CLIENT: ';

        \$.ajax({
            type: 'POST',
            url: '/crm/welcome/chatbesoins/get/' + this.id,
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {

                let clip = respdata[0][\"besoin\"][\"chantier\"][\"client\"][\"nomclient\"];
                let clap = respdata[0][\"besoin\"][\"chantier\"][\"nomchantier\"];
                clispan2.innerHTML = clip.toUpperCase();
                client.append(clispan);
                client.append(clispan2);

                chanspan.innerHTML = 'CHANTIER: ';
                chanspan2.innerHTML = clap.toUpperCase();
                chantier.append(chanspan);
                chantier.append(chanspan2);

                besospan.classList.add(\"clispan\");

                besospan.innerHTML = 'BESOIN: ';
                besospan2.innerHTML = respdata[0][\"besoin\"][\"besoin\"];

                beso.append(besospan);
                beso.append(besospan2);

                divinfo.append(client);
                divinfo.append(chantier);
                divinfo.append(beso);

                div.append(divinfo);

                var usere = document.getElementById(\"iduser\").value;


                for (let i = 0; i < respdata.length; i++) {
                    const divmess = document.createElement(\"div\");
                    const sender = document.createElement(\"p\");
                    const mess = document.createElement(\"p\");
                    const datte = document.createElement(\"p\");

                    sender.innerHTML = respdata[i][\"sender\"][\"nom\"] + \" \" + respdata[i][\"sender\"][\"prenoms\"];
                    mess.innerHTML = respdata[i][\"message\"];
                    datte.innerHTML = moment(respdata[i][\"date\"]).locale(\"fr\").format('LLL');

                    sender.classList.add(\"pop\");
                    sender.classList.add(\"sender\");
                    mess.classList.add(\"pop\");
                    datte.classList.add(\"pop\");
                    datte.classList.add(\"datte\");
                    mess.classList.add(\"mess\");

                    if (parseInt(respdata[i][\"sender\"][\"id\"]) === parseInt(usere)) {
                        divmess.classList.add(\"divmessright\");
                    } else {
                        divmess.classList.add(\"divmessleft\");
                    }

                    divmess.append(sender);
                    divmess.append(mess);
                    divmess.append(datte);
                    divchat.append(divmess);
                }
                div.append(divchat);
                elt.append(div);

            },
            error: function (xhr, resp, text) {
                \$('#ModalErreur').modal('show')
            },
        })

        const footer = document.createElement(\"div\");
        footer.classList.add(\"footer\");
        const textarea = document.createElement(\"textarea\");
        textarea.placeholder = \" Votre message !\";
        textarea.setAttribute(\"id\", \"chattext\");
        textarea.classList.add(\"texta\");
        footer.append(textarea);
        const send = document.createElement(\"button\");
        send.textContent = 'ENVOYER';
        send.classList.add(\"butta\");
        send.onclick = function () {
            const li = document.getElementById('chatbesoin');
            id = li.className;
            let msn = \"\";
            if (document.getElementById(\"chattext\").value !== \"\") {
                msn = document.getElementById(\"chattext\").value;
            }
            \$.ajax({
                type: 'POST',
                url: '/crm/welcome/besoins/chat/' + id + \"/\" + msn,
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    divchat.innerHTML = \"\";
                    var usere = document.getElementById(\"iduser\").value;
                    for (let i = 0; i < respdata.length; i++) {
                        const divmess = document.createElement(\"div\");
                        const sender = document.createElement(\"p\");
                        const mess = document.createElement(\"p\");
                        const datte = document.createElement(\"p\");

                        sender.innerHTML = respdata[i][\"sender\"][\"nom\"] + \" \" + respdata[i][\"sender\"][\"prenoms\"];
                        mess.innerHTML = respdata[i][\"message\"];
                        datte.innerHTML = moment(respdata[i][\"date\"]).locale(\"fr\").format('LLL');

                        sender.classList.add(\"pop\");
                        sender.classList.add(\"sender\");
                        mess.classList.add(\"pop\");
                        datte.classList.add(\"pop\");
                        datte.classList.add(\"datte\");
                        mess.classList.add(\"mess\");

                        if (parseInt(respdata[i][\"sender\"][\"id\"]) === parseInt(usere)) {
                            divmess.classList.add(\"divmessright\");
                        } else {
                            divmess.classList.add(\"divmessleft\");
                        }

                        divmess.append(sender);
                        divmess.append(mess);
                        divmess.append(datte);
                        divchat.append(divmess);
                    }
                },
                error: function (xhr, resp, text) {
                    \$('#ModalErreur').modal('show')
                },
            })
        }
        setInterval(function () {
            const li = document.getElementById('chatbesoin');
            id = li.className;
            let msn = \"\";
            if (document.getElementById(\"chattext\").value !== \"\") {
                msn = document.getElementById(\"chattext\").value;
            }
            \$.ajax({
                type: 'POST',
                url: '/crm/welcome/chatbesoins/get/' + id,
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    divchat.innerHTML = \"\";
                    var usere = document.getElementById(\"iduser\").value;
                    for (let i = 0; i < respdata.length; i++) {
                        const divmess = document.createElement(\"div\");
                        const sender = document.createElement(\"p\");
                        const mess = document.createElement(\"p\");
                        const datte = document.createElement(\"p\");

                        sender.innerHTML = respdata[i][\"sender\"][\"nom\"] + \" \" + respdata[i][\"sender\"][\"prenoms\"];
                        mess.innerHTML = respdata[i][\"message\"];
                        datte.innerHTML = moment(respdata[i][\"date\"]).locale(\"fr\").format('LLL');

                        sender.classList.add(\"pop\");
                        sender.classList.add(\"sender\");
                        mess.classList.add(\"pop\");
                        datte.classList.add(\"pop\");
                        datte.classList.add(\"datte\");
                        mess.classList.add(\"mess\");

                        if (parseInt(respdata[i][\"sender\"][\"id\"]) === parseInt(usere)) {
                            divmess.classList.add(\"divmessright\");
                        } else {
                            divmess.classList.add(\"divmessleft\");
                        }

                        divmess.append(sender);
                        divmess.append(mess);
                        divmess.append(datte);
                        divchat.append(divmess);
                    }
                },
                error: function (xhr, resp, text) {
                    \$('#ModalErreur').modal('show')
                },
            })
        }, 10000);
        footer.append(send);
        momo.append(footer);

    });

    document.getElementById('close_chat_besoins').onclick = function () {
        const modal = document.getElementById(\"chat_besoins\");
        modal.style.display = \"none\";
    }

    \$(\".besoedit\").off().on('click', function (event) {
        \$('#Traitement').modal('show');
        window.location.href = '/crm/welcome/besoin/' + this.id;
    });

    \$(\".besodel\").off().on('click', function (event) {
        \$('#Traitement').modal('show');
        axios({
            method: 'DELETE',
            url: '/crm/welcome/besoins/del/' + this.id,
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
        }).then(function (response) {
            window.location.href = '/crm/welcome/tableau/' + \$(\"#tabb\").val();
        }).catch(function (error) {
            \$('#Traitement').modal('hide');
            \$('#ModalErreur').modal('show');
        });
    });

    \$(\".besocloturer\").off().on('click', function (event) {
        \$('#Traitement').modal('show');
        axios({
            method: 'POST',
            url: '/crm/welcome/besoins/cloturer/' + this.id,
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
        }).then(function (response) {
            window.location.href = '/crm/welcome/tableau/' + \$(\"#tabb\").val();
        }).catch(function (error) {
            \$('#Traitement').modal('hide');
            \$('#ModalErreur').modal('show');
        });
    });

    \$(\".besoarchiver\").off().on('click', function (event) {
        \$('#Traitement').modal('show');
        axios({
            method: 'POST',
            url: '/crm/welcome/besoins/archiver/' + this.id,
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
        }).then(function (response) {
            window.location.href = '/crm/welcome/tableau/' + \$(\"#tabb\").val();
        }).catch(function (error) {
            \$('#Traitement').modal('hide');
            \$('#ModalErreur').modal('show');
        });
    });

    \$(\".besorelancer\").off().on('click', function (event) {
        \$('#Traitement').modal('show');
        axios({
            method: 'POST',
            url: '/crm/welcome/besoins/relancer/' + this.id,
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
        }).then(function (response) {
            window.location.href = '/crm/welcome/tableau/' + \$(\"#tabb\").val();
        }).catch(function (error) {
            \$('#Traitement').modal('hide');
            \$('#ModalErreur').modal('show');
        });
    });

    if (\$(\"#idbeso\").val()) {
        const modal = document.getElementById(\"app_besoins\");
        modal.style.display = \"block\";
    }

    const chantiers = JSON.parse(\$('#pychantiers').val());

    \$(\"#recheclient\").on('change keyup paste', function () {
        if (this.value.length > 2) {
            axios({
                method: 'POST',
                url: '/crm/welcome/chantiers/' + this.value,
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
            }).then(function (response) {
                const pp = JSON.parse(response.data[\"result\"]);

                \$('#chantierdiv').html('');
                pp.map((chan) => {
                    if (chan.etat === \"encours\" || chan.etat === \"etude\") {
                        let typer = \"\";
                        let color = \"\";
                        let loca = \"\";
                        let supers = \" \";

                        if (chan.etat === \"encours\") {
                            typer = \"En cours\";
                            color = \"#4e73df\";
                        }
                        if (chan.etat === \"etude\") {
                            typer = \"En étude\";
                            color = \"#899093\";
                        }
                        if (chan.localisation !== null) {
                            loca = \"<br><b class='material-icons col-blue-grey' style='font-size: 14px'>place</b> <b class='col-blue-grey' style='font-size: 12px'>\"+loca+\"</b>\";
                        }else{
                            loca = \"<br><b class='material-icons col-blue-grey' style='font-size: 14px'>place</b><b class='col-blue-grey' style='font-size: 12px'> Non-défini</b>\";
                        }
                        let difpresta = chan.bonprestataires - chan.paieprestataires;
                        let diffourni  = chan.bonfournisseurs - chan.paiefournisseurs;
                        let difcharge  = chan.chargechantiers - chan.chargepaiechantiers;

                        let sumy  = chan.paieprestataires + chan.paiefournisseurs + chan.chargepaiechantiers;
                        let purcent  = (sumy/chan.cout)*100;

                        if(chan.superviseurs.length > 0){
                            for(let i = 0; i < chan.superviseurs.length; i++){
                                supers = \"- \"+chan.superviseurs[i][\"noms\"] + \"<br>\" + supers;
                            }
                        }else{
                            supers = \" - Non-défini\"
                        }

                        \$(\"#chantierdiv\").append(
                            \"<div class='col-md-4'>\" +
                            \"<button onclick=shasharr('chantier',\" + chan.id + \") class='btn' type='button' style='color: #000;background-color: #FFF; font-size: 13px; border-right: 3px solid \"+color+\"; border-left: 3px solid \"+color+\"; height: 200px; width: 100%; font-weight: bold; border-radius: 10px'>\"
                            + \"<span class='badge badge-pill' style='float: right; font-size: 11px; background-color: \"+color+\"'>\"+typer+\"</span><br>\" +
                            \"<p style='text-align: left !important;'><b class='col-pink'>\" + chan.client.nomclient.toUpperCase() + \"</b><br><b style='color: #4e73df; font-size: 12px'>\" + chan.nomchantier.toUpperCase() + \"</b>\" +
                            \"\"+loca+\"<br></p>\"+
                            \"<table style='width: 100%; font-weight: normal; font-size: 10px'>\" +
                            \"<tr><td colspan='3' style='font-size: 12px; text-align:left !important;'><b><u>Chefs du chantier: </u></b><br>\"+supers+\"</td></tr>\" +
                            \"<tr><td colspan='3' style='font-size: 11px; text-align:left !important;'><b><u>Budget utilisé:</u>    \"+formatNumber(purcent,2, ' ')+\"% </b><br> \"+formatNumber(sumy,2, ' ')+\" sur \"+formatNumber(chan.cout, 2, ' ')+\"</td></tr>\" +
                            \"</table>\" +
                            \"</button>\" +
                            \"</div>\");
                    }
                });
            }).catch(function (error) {
                \$('#ModalErreur').modal('show');
            });
        }

        if (this.value.length === 0) {
            chantiers.map((chan) => {
                if (chan.etat === \"encours\" || chan.etat === \"etude\") {
                    let typer = \"\";
                    let color = \"\";
                    let loca = \"\";
                    let supers = \" \";

                    if (chan.etat === \"encours\") {
                        typer = \"En cours\";
                        color = \"#4e73df\";
                    }
                    if (chan.etat === \"etude\") {
                        typer = \"En étude\";
                        color = \"#899093\";
                    }
                    if (chan.localisation !== null) {
                        loca = \"<br><b class='material-icons col-blue-grey' style='font-size: 14px'>place</b> <b class='col-blue-grey' style='font-size: 12px'>\"+loca+\"</b>\";
                    }else{
                        loca = \"<br><b class='material-icons col-blue-grey' style='font-size: 14px'>place</b><b class='col-blue-grey' style='font-size: 12px'> Non-défini</b>\";
                    }
                    let difpresta = chan.bonprestataires - chan.paieprestataires;
                    let diffourni  = chan.bonfournisseurs - chan.paiefournisseurs;
                    let difcharge  = chan.chargechantiers - chan.chargepaiechantiers;

                    let sumy  = chan.paieprestataires + chan.paiefournisseurs + chan.chargepaiechantiers;
                    let purcent  = (sumy/chan.cout)*100;

                    if(chan.superviseurs.length > 0){
                        for(let i = 0; i < chan.superviseurs.length; i++){
                            supers = \"- \"+chan.superviseurs[i][\"noms\"] + \"<br>\" + supers;
                        }
                    }else{
                        supers = \" - Non-défini\"
                    }

                    \$(\"#chantierdiv\").append(
                        \"<div class='col-md-4'>\" +
                        \"<button onclick=shasharr('chantier',\" + chan.id + \") class='btn' type='button' style='color: #000;background-color: #FFF; font-size: 13px; border-right: 3px solid \"+color+\"; border-left: 3px solid \"+color+\"; height: 200px; width: 100%; font-weight: bold; border-radius: 10px'>\"
                        + \"<span class='badge badge-pill' style='float: right; font-size: 11px; background-color: \"+color+\"'>\"+typer+\"</span><br>\" +
                        \"<p style='text-align: left !important;'><b class='col-pink'>\" + chan.client.nomclient.toUpperCase() + \"</b><br><b style='color: #4e73df; font-size: 12px'>\" + chan.nomchantier.toUpperCase() + \"</b>\" +
                        \"\"+loca+\"<br></p>\"+
                        \"<table style='width: 100%; font-weight: normal; font-size: 10px'>\" +
                        \"<tr><td colspan='3' style='font-size: 12px; text-align:left !important;'><b><u>Chefs du chantier: </u></b><br>\"+supers+\"</td></tr>\" +
                        \"<tr><td colspan='3' style='font-size: 11px; text-align:left !important;'><b><u>Budget utilisé:</u>    \"+formatNumber(purcent,2, ' ')+\"% </b><br> \"+formatNumber(sumy,2, ' ')+\" sur \"+formatNumber(chan.cout, 2, ' ')+\"</td></tr>\" +
                        \"</table>\" +
                        \"</button>\" +
                        \"</div>\");
                }
            });
        }

    });

    chantiers.map((chan) => {
        if (chan.etat === \"encours\" || chan.etat === \"etude\") {
            let typer = \"\";
            let color = \"\";
            let loca = \"\";
            let supers = \" \";

            if (chan.etat === \"encours\") {
                typer = \"En cours\";
                color = \"#4e73df\";
            }
            if (chan.etat === \"etude\") {
                typer = \"En étude\";
                color = \"#899093\";
            }
            if (chan.localisation !== null) {
               loca = \"<br><b class='material-icons col-blue-grey' style='font-size: 14px'>place</b> <b class='col-blue-grey' style='font-size: 12px'>\"+loca+\"</b>\";
            }else{
                loca = \"<br><b class='material-icons col-blue-grey' style='font-size: 14px'>place</b><b class='col-blue-grey' style='font-size: 12px'> Non-défini</b>\";
            }
            let difpresta = chan.bonprestataires - chan.paieprestataires;
            let diffourni  = chan.bonfournisseurs - chan.paiefournisseurs;
            let difcharge  = chan.chargechantiers - chan.chargepaiechantiers;

            let sumy  = chan.paieprestataires + chan.paiefournisseurs + chan.chargepaiechantiers;
            let purcent  = (sumy/chan.cout)*100;

            if(chan.superviseurs.length > 0){
                for(let i = 0; i < chan.superviseurs.length; i++){
                    supers = \"- \"+chan.superviseurs[i][\"noms\"] + \"<br>\" + supers;
                }
            }else{
                supers = \" - Non-défini\"
            }

            \$(\"#chantierdiv\").append(
                \"<div class='col-md-4'>\" +
                \"<button onclick=shasharr('chantier',\" + chan.id + \") class='btn' type='button' style='color: #000;background-color: #FFF; font-size: 13px; border-right: 3px solid \"+color+\"; border-left: 3px solid \"+color+\"; height: 200px; width: 100%; font-weight: bold; border-radius: 10px'>\"
                + \"<span class='badge badge-pill' style='float: right; font-size: 11px; background-color: \"+color+\"'>\"+typer+\"</span><br>\" +
                \"<p style='text-align: left !important;'><b class='col-pink'>\" + chan.client.nomclient.toUpperCase() + \"</b><br><b style='color: #4e73df; font-size: 12px'>\" + chan.nomchantier.toUpperCase() + \"</b>\" +
                \"\"+loca+\"<br></p>\"+
                \"<table style='width: 100%; font-weight: normal; font-size: 10px'>\" +
                \"<tr><td colspan='3' style='font-size: 12px; text-align:left !important;'><b><u>Chefs du chantier: </u></b><br>\"+supers+\"</td></tr>\" +
                \"<tr><td colspan='3' style='font-size: 11px; text-align:left !important;'><b><u>Budget utilisé:</u>    \"+formatNumber(purcent,2, ' ')+\"% </b><br> \"+formatNumber(sumy,2, ' ')+\" sur \"+formatNumber(chan.cout, 2, ' ')+\"</td></tr>\" +
                \"</table>\" +
                \"</button>\" +
                \"</div>\");
        }
    });

    \$('#selboxa').on('change', function () {
        let id = this.value;
        \$('#prevpresta').html('');
        \$.ajax({
            type: 'GET',
            url: '/crm/budget/bon/lignes/' + id,
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                let lignes = respdata;
                lignes.map((lign) => {
                    \$('#prevpresta').append('<option value=' + lign.id + '>' + lign.designation + '</option>');
                });
                let nomchantier = respdata[0].chantier[\"nomchantier\"];
                let nomclient = respdata[0].chantier[\"client\"][\"nomclient\"];
                let aq = nomclient + \" | \" + nomchantier;
                CKEDITOR.instances[\"editor15\"].setData(aq);
            },
            error: function (xhr, resp, text) {
                \$('#ModalErreur').modal('show')
            },
        })
    });
    \$('#selbox').on('change', function () {
        let id = this.value;
        \$('#prevfour').html('');
        \$.ajax({
            type: 'GET',
            url: '/crm/budget/bon/lignes/' + id,
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                let lignes = respdata;
                lignes.map((lign) => {
                    \$('#prevfour').append('<option value=' + lign.id + '>' + lign.designation + '</option>');
                });
                let nomchantier = respdata[0].chantier[\"nomchantier\"];
                let nomclient = respdata[0].chantier[\"client\"][\"nomclient\"];
                let aq = nomclient + \" | \" + nomchantier;
                CKEDITOR.instances[\"editor16\"].setData(aq);
            },
            error: function (xhr, resp, text) {
                \$('#ModalErreur').modal('show')
            },
        })
    });

    \$('#addClient').off().on(\"click\", function (event) {
        event.preventDefault()
        if (\$(this).closest('form').valid()) {
            \$('#divClient').hide();
            \$('#loadClient').css('display', '');
            axios({
                method: 'POST',
                url: '/crm/client/add',
                data: JSON.stringify(\$('#addClientForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
            }).then(function (response) {
                window.location.href = '/crm/welcome/tableau/' + \$(\"#tabb\").val();
            }).catch(function (error) {
                \$('#Traitement').modal('hide');
                \$('#ModalErreur').modal('show');
            });
        }
    })
    \$('#addBesoins').off().on(\"click\", function (event) {
        event.preventDefault()
        if (\$(this).closest('form').valid()) {
            \$('#addBesoins').hide();
            \$('#loadBesoins').css('display', '');
            \$('#editor12').val(CKEDITOR.instances['editor12'].getData())
            axios({
                method: 'POST',
                url: '/crm/welcome/besoins/add',
                data: new FormData(\$('#addBesoinsForm')[0]),
                contentType: false,
                processData: false,
                cache: false,
                dataType: 'json',
            }).then(function (response) {
                window.location.href = '/crm/welcome/tableau/' + \$(\"#tabb\").val();
            }).catch(function (error) {
                \$('#Traitement').modal('hide');
                \$('#ModalErreur').modal('show');
            });
        }
    })
    \$('#updBesoins').off().on(\"click\", function (event) {
        event.preventDefault()
        if (\$(this).closest('form').valid()) {
            \$('#updBesoins').hide();
            \$('#loadBesoins').css('display', '');
            \$('#editor12').val(CKEDITOR.instances['editor12'].getData())
            axios({
                method: 'POST',
                url: '/crm/welcome/besoins/upd/' + \$(\"#idbeso\").val(),
                data: JSON.stringify(\$('#addBesoinsForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
            }).then(function (response) {
                window.location.href = '/crm/welcome/tableau/' + \$(\"#tabb\").val();
            }).catch(function (error) {
                \$('#Traitement').modal('hide');
                \$('#ModalErreur').modal('show');
            });
        }
    })
    \$('#addChantier').on(\"click\", async function (event) {
        event.preventDefault()
        if (\$(this).closest('form').valid())
            \$('#divChantier').hide()
        \$('#loadChantier').css('display', '')
        \$('#description').val(CKEDITOR.instances['description'].getData());
        await axios({
            method: 'POST',
            url: '/crm/chantiers/add',
            data: JSON.stringify(\$('#addChantierForm').serializeObject()),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
        }).then(function (response) {
            window.location.href = '/crm/welcome/tableau/' + \$(\"#tabb\").val();
        }).catch(function (error) {
            \$('#Traitement').modal('hide');
            \$('#ModalErreur').modal('show');
        });
    });
    \$('#addeDevis').on(\"click\", function (event) {
        event.preventDefault()
        if (\$(this).closest('form').valid()) {
            \$('#addeDevis').hide()
            \$('#closeDevis').hide()
            \$('#loadDevis').css('display', '')
            \$('#editor5').val(CKEDITOR.instances['editor5'].getData())
            \$('#editor6').val(CKEDITOR.instances['editor6'].getData())
            \$.ajax({
                type: 'POST',
                url: '/crm/devis/adde',
                data: JSON.stringify(\$('#addDevisForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    if (jqXHR.status == '201') {
                        \$('#mdModalDevis').modal('toggle')
                        window.location.href = '/crm/devis/' + respdata['result'][0]['iddevis'] + '/' + respdata['result'][0]['idchantier'];
                    }
                },
                error: function (xhr, resp, text) {
                    \$('#mdModalDevis').modal('toggle')
                    \$('#ModalErreur').modal('show')
                },
            })
        }
    })
    \$(\"#facfac\").off().on(\"change\", async function () {
        const id = \$('select[name=\"facfac\"] :selected').attr('class');

        \$(\".dvface\").empty();
        \$(\".dvface\").append('<span class=\"col-pink\">Règlements effectués:... </span> <img src=\"/img/loading.gif\" style=\"width: 20px\">');
        \$(\".dvfac\").empty();
        \$(\".dvfac\").append('<span class=\"col-pink\">Facture Total TTC:... </span> <img src=\"/img/loading.gif\" style=\"width: 20px\">');
        \$(\".dvfaces\").empty();
        \$(\".dvfaces\").append('<span class=\"col-pink\">Reste à régler:... </span> <img src=\"/img/loading.gif\" style=\"width: 20px\">');
        await axios({
            method: 'GET', url: '/crm/facture/getreste/' + id, dataType: 'json',
        }).then(function (response) {
            let data = response.data;
            \$(\"#montant\").val(data[\"reste\"].replaceAll(' ', ''));
            \$(\".dvfac\").empty();
            \$(\".dvfac\").append('<span class=\"col-blue-grey bolo700\">Facture Total TTC:</span><span class=\"col-pink bolo700\"> ' + data[\"ttc\"] + '</span>');
            \$(\".dvface\").empty();
            \$(\".dvface\").append('<span class=\"col-blue-grey bolo700\">Règlements effectués:</span><span class=\"col-pink bolo700\"> ' + data[\"regler\"] + '</span>');
            \$(\".dvfaces\").empty();
            \$(\".dvfaces\").append('<span class=\"col-blue-grey bolo700\">Reste à régler:</span><span class=\"col-green bolo700\"> ' + data[\"reste\"] + '</span>');
            \$(\".resta\").append(data[\"reste\"]);
        });

    })
    \$('#addReglementChantiers').off().on(\"click\", function (event) {
        event.preventDefault();
        if (\$(this).closest('form').valid()) {
            let rest = \$('.resta').html().replaceAll(' ', '');
            \$(\".restu\").append(\" \");
            if (parseFloat(\$(\"#montant\").val()) <= parseFloat(rest)) {
                \$('#addReglementChantiers').hide()
                \$('#closeReglement').hide()
                \$('#loadReglement').css('display', '')
                \$.ajax({
                    type: 'POST',
                    url: '/crm/chantiers/reglement/chantiers/add',
                    data: JSON.stringify(\$('#addReglementForm').serializeObject()),
                    contentType: 'application/json; charset=utf-8',
                    dataType: 'json',
                    success: function (respdata, textStatus, jqXHR) {
                        if (jqXHR.status == '201') {
                            \$('#modalReglement').modal('toggle')
                            window.location.href = '/crm/client/' + respdata['result'];
                        }
                    },
                    error: function (xhr, resp, text) {
                        \$('#modalReglement').modal('toggle')
                        \$('#ModalErreur').modal('show')
                        \$('#addReglementChantiers').show()
                        \$('#closeReglement').show()
                        \$('#loadReglement').css('display', 'none')
                    },
                })
            } else {
                \$(\".restu\").append(\"Montant supérieur à la somme restante.\");
            }
        }
    })
    \$('#veligne').on('change', function () {
        let id = \$('#addCaisseForm option:selected').val();
        \$.ajax({
            type: 'GET',
            url: '/crm/budget/devis/lignes/' + id,
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function (respdata, textStatus, jqXHR) {
                let lignes = respdata;
                lignes.map((lign) => {
                    \$('#prevcaiss').append('<option value=' + lign.id + '>' + lign.designation + '</option>');
                });
            },
            error: function (xhr, resp, text) {
                \$('#ModalErreur').modal('show')
            },
        })
    });
    \$('#addeeCaisse').on(\"click\", function (event) {
        event.preventDefault()
        if (\$(this).closest('form').valid()) {
            \$('#addeeCaisse').hide()
            \$('#closeeCaisse').hide()
            \$('#loadeeCaisse').css('display', '')
            \$('#editor').val(CKEDITOR.instances['editor'].getData())
            \$.ajax({
                type: 'POST',
                url: '/crm/caisse/adda',
                data: JSON.stringify(\$('#addCaisseForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    if (jqXHR.status == '201') {
                        \$('#mdModalCaisse').modal('toggle')
                        window.location.href =
                            '/crm/caisse/' +
                            respdata['result'][0]['numcaisse'] +
                            '/' +
                            respdata['result'][0]['idchantier']
                    }
                },
                error: function (xhr, resp, text) {
                    \$('#mdModalCaisse').modal('toggle')
                    \$('#ModalErreur').modal('show')
                },
            })
        }
    })
    \$('#adduBon').on(\"click\", function (event) {
        event.preventDefault()
        if (\$(this).closest('form').valid()) {
            \$('#adduBon').hide()
            \$('#closuBon').hide()
            \$('#loaduBon').css('display', '')
            \$('#editor10').val(CKEDITOR.instances['editor10'].getData())
            \$('#editor11').val(CKEDITOR.instances['editor11'].getData())
            \$.ajax({
                type: 'POST',
                url: '/crm/bon/chanpresta/adda',
                data: JSON.stringify(\$('#adduBonForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    if (jqXHR.status == '201') {
                        \$('#mdModalBon').modal('toggle')
                        window.location.href =
                            '/crm/bon/' +
                            respdata['result'][0]['numbon'] +
                            '/' +
                            respdata['result'][0]['idchantier']
                    }
                },
                error: function (xhr, resp, text) {
                    \$('#mdModalBon').modal('toggle')
                    \$('#ModalErreur').modal('show')
                },
            })
        }
    })
    \$('#addiBon').on(\"click\", function (event) {
        event.preventDefault()
        if (\$(this).closest('form').valid()) {
            \$('#addiBon').hide()
            \$('#closeBon').hide()
            \$('#loadBon').css('display', '')
            \$('#editor7').val(CKEDITOR.instances['editor7'].getData())
            \$('#editor2').val(CKEDITOR.instances['editor2'].getData())
            \$.ajax({
                type: 'POST',
                url: '/crm/bon/addi',
                data: JSON.stringify(\$('#addBonForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    if (jqXHR.status == '201') {
                        \$('#mdModalBon').modal('toggle')
                        window.location.href =
                            '/crm/bon/' +
                            respdata['result'][0]['numbon'] +
                            '/' +
                            respdata['result'][0]['idchantier']
                    }
                },
                error: function (xhr, resp, text) {
                    \$('#mdModalBon').modal('toggle')
                    \$('#ModalErreur').modal('show')
                },
            })
        }
    })
    \$('#addarCaissePersonnel').off().on(\"click\", function (event) {
        event.preventDefault()
        if (\$(this).closest('form').valid()) {
            \$('#addarCaissePersonnel').hide()
            \$('#closarCaissePersonnel').hide()
            \$('#loadarCaissePersonnel').css('display', '')
            \$('#editor20').val(CKEDITOR.instances['editor20'].getData())
            \$.ajax({
                type: 'POST',
                url: '/crm/caisse/personnel/add',
                data: JSON.stringify(\$('#addCaissePersonnelForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    if (jqXHR.status == '201') {
                        \$('#modalCaissePerso').modal('toggle');
                        window.location.href = '/crm/caisse/' + respdata['result'][0]['numcaisse'] + '/' + respdata['result'][0]['idchantier']
                    }
                },
                error: function (xhr, resp, text) {
                    \$('#modalCaissePerso').modal('toggle')
                    \$('#ModalErreur').modal('show')
                },
            })
        }
    })
    \$('#addiosCaisse').off().on(\"click\", function (event) {
        event.preventDefault()
        if (\$(this).closest('form').valid()) {
            \$('#addiosCaisse').hide()
            \$('#loadiosCaisse').css('display', '')
            \$('#editor19').val(CKEDITOR.instances['editor19'].getData())
            \$.ajax({
                type: 'POST',
                url: '/crm/caisse/frais/add',
                data: JSON.stringify(\$('#addCaisseChargeForm').serializeObject()),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (respdata, textStatus, jqXHR) {
                    if (jqXHR.status == '201') {
                        \$('#mdModalCaisse').modal('toggle');
                        window.location.href = '/crm/caisse/' + respdata['result'][0]['numcaisse'] + '/' + respdata['result'][0]['idchantier']
                    }
                },
                error: function (xhr, resp, text) {
                    \$('#mdModalCaisse').modal('toggle')
                    \$('#ModalErreur').modal('show')
                },
            })
        }
    })

    window.modalExercices = function modalExercices() {
        const modal = document.getElementById(\"app_exercices\");
        document.getElementById(\"app_exercices\").style.display = \"block\";
        modal.style.display = \"block\";
    }

    window.modalBesoins = function modalBesoins() {
        const modal = document.getElementById(\"app_besoins\");
        document.getElementById(\"app_besoins\").style.display = \"block\";
        modal.style.display = \"block\";
    }
    document.getElementById('close_add_besoins').onclick = function () {
        const modal = document.getElementById(\"app_besoins\");
        modal.style.display = \"none\";
    }

    window.modalClient = function modalClient() {
        const modal = document.getElementById(\"app_add_client\");
        document.getElementById(\"app_add_client\").style.display = \"block\";
        modal.style.display = \"block\";
    }
    document.getElementById('close_add_client').onclick = function () {
        const modal = document.getElementById(\"app_add_client\");
        modal.style.display = \"none\";
    }

    window.modalChantier = function modalChantier() {
        const modal = document.getElementById(\"app_add_chantier\");
        document.getElementById(\"app_add_chantier\").style.display = \"block\";
        modal.style.display = \"block\";
    }
    document.getElementById('close_add_chantier').onclick = function () {
        const modal = document.getElementById(\"app_add_chantier\");
        modal.style.display = \"none\";
    }

    window.modalDevis = function modalDevis() {
        const modal = document.getElementById(\"app_add_devis\");
        document.getElementById(\"app_add_devis\").style.display = \"block\";
        modal.style.display = \"block\";
    }
    document.getElementById('close_add_devis').onclick = function () {
        const modal = document.getElementById(\"app_add_devis\");
        modal.style.display = \"none\";
    }

    window.modalDecompte = function modalDecompte() {
        const modal = document.getElementById(\"app_add_decompte\");
        document.getElementById(\"app_add_decompte\").style.display = \"block\";
        modal.style.display = \"block\";
    }
    document.getElementById('close_add_decompte').onclick = function () {
        const modal = document.getElementById(\"app_add_decompte\");
        modal.style.display = \"none\";
    }

    window.modalFacture = function modalFacture() {
        const modal = document.getElementById(\"app_add_facture\");
        document.getElementById(\"app_add_facture\").style.display = \"block\";
        modal.style.display = \"block\";
    }
    document.getElementById('close_add_facture').onclick = function () {
        const modal = document.getElementById(\"app_add_facture\");
        modal.style.display = \"none\";
    }

    window.modalPrestataire = function modalPrestataire() {
        const modal = document.getElementById(\"app_add_prestataire\");
        document.getElementById(\"app_add_prestataire\").style.display = \"block\";
        modal.style.display = \"block\";
    }
    document.getElementById('close_add_prestataire').onclick = function () {
        const modal = document.getElementById(\"app_add_prestataire\");
        modal.style.display = \"none\";
    }

    window.modalContact = function modalContact() {
        const modal = document.getElementById(\"app_add_contact\");
        document.getElementById(\"app_add_contact\").style.display = \"block\";
        modal.style.display = \"block\";
    }
    document.getElementById('close_add_contact').onclick = function () {
        const modal = document.getElementById(\"app_add_contact\");
        modal.style.display = \"none\";
    }

    window.modalFournisseur = function modalFournisseur() {
        const modal = document.getElementById(\"app_add_fournisseur\");
        document.getElementById(\"app_add_fournisseur\").style.display = \"block\";
        modal.style.display = \"block\";
    }

    document.getElementById('close_add_fournisseur').onclick = function () {
        const modal = document.getElementById(\"app_add_fournisseur\");
        modal.style.display = \"none\";
    }

    window.modalPerso = function modalPerso() {
        const modal = document.getElementById(\"app_add_personnel\");
        document.getElementById(\"app_add_personnel\").style.display = \"block\";
        modal.style.display = \"block\";
    }
    document.getElementById('close_add_personnel').onclick = function () {
        const modal = document.getElementById(\"app_add_personnel\");
        modal.style.display = \"none\";
    }

    window.modalReglement = function modalReglement() {
        const modal = document.getElementById(\"app_add_reglement\");
        document.getElementById(\"app_add_reglement\").style.display = \"block\";
        modal.style.display = \"block\";
    }
    document.getElementById('close_add_reglement').onclick = function () {
        const modal = document.getElementById(\"app_add_reglement\");
        modal.style.display = \"none\";
    }

    window.modalChargeChantier = function modalChargeChantier() {
        const modal = document.getElementById(\"app_add_chargechantier\");
        document.getElementById(\"app_add_chargechantier\").style.display = \"block\";
        modal.style.display = \"block\";
    }
    document.getElementById('close_add_chargechantier').onclick = function () {
        const modal = document.getElementById(\"app_add_chargechantier\");
        modal.style.display = \"none\";
    }

    window.modalBonFournisseur = function modalBonFournisseur() {
        const modal = document.getElementById(\"app_add_bonfournisseur\");
        document.getElementById(\"app_add_bonfournisseur\").style.display = \"block\";
        modal.style.display = \"block\";
    }
    document.getElementById('close_add_bonfournisseur').onclick = function () {
        const modal = document.getElementById(\"app_add_bonfournisseur\");
        modal.style.display = \"none\";
    }

    window.modalPaieFournisseur = function modalPaieFournisseur() {
        const modal = document.getElementById(\"app_add_paiefournisseur\");
        document.getElementById(\"app_add_paiefournisseur\").style.display = \"block\";
        modal.style.display = \"block\";
    }
    document.getElementById('close_add_paiefournisseur').onclick = function () {
        const modal = document.getElementById(\"app_add_paiefournisseur\");
        modal.style.display = \"none\";
    }

    window.modalBonPrestataire = function modalBonPrestataire() {
        const modal = document.getElementById(\"app_add_bonprestataire\");
        document.getElementById(\"app_add_bonprestataire\").style.display = \"block\";
        modal.style.display = \"block\";
    }
    document.getElementById('close_add_bonprestataire').onclick = function () {
        const modal = document.getElementById(\"app_add_bonprestataire\");
        modal.style.display = \"none\";
    }

    window.modalPaiePrestataire = function modalPaiePrestataire() {
        const modal = document.getElementById(\"app_add_paieprestataire\");
        document.getElementById(\"app_add_paieprestataire\").style.display = \"block\";
        modal.style.display = \"block\";
    }
    document.getElementById('close_add_paieprestataire').onclick = function () {
        const modal = document.getElementById(\"app_add_paieprestataire\");
        modal.style.display = \"none\";
    }

    window.modalBonSuivi = function modalBonSuivi() {
        const modal = document.getElementById(\"app_add_bonsuivi\");
        document.getElementById(\"app_add_bonsuivi\").style.display = \"block\";
        modal.style.display = \"block\";
    }
    document.getElementById('close_add_bonsuivi').onclick = function () {
        const modal = document.getElementById(\"app_add_bonsuivi\");
        modal.style.display = \"none\";
    }

    window.modalPaiePersonnel = function modalPaiePersonnel() {
        const modal = document.getElementById(\"app_add_paiepersonnel\");
        document.getElementById(\"app_add_paiepersonnel\").style.display = \"block\";
        modal.style.display = \"block\";
    }
    document.getElementById('close_add_paiepersonnel').onclick = function () {
        const modal = document.getElementById(\"app_add_paiepersonnel\");
        modal.style.display = \"none\";
    }

    window.modalChargesInternes = function modalChargesInternes() {
        const modal = document.getElementById(\"app_add_chargesinternes\");
        document.getElementById(\"app_add_chargesinternes\").style.display = \"block\";
        modal.style.display = \"block\";
    }
    document.getElementById('close_add_chargesinternes').onclick = function () {
        const modal = document.getElementById(\"app_add_chargesinternes\");
        modal.style.display = \"none\";
    }

    window.modalBonsChargesInternes = function modalBonsChargesInternes() {
        const modal = document.getElementById(\"app_add_bonschargesinternes\");
        document.getElementById(\"app_add_bonschargesinternes\").style.display = \"block\";
        modal.style.display = \"block\";
    }
    document.getElementById('close_add_bonschargesinternes').onclick = function () {
        const modal = document.getElementById(\"app_add_bonschargesinternes\");
        modal.style.display = \"none\";
    }

    window.shashares = function shashares() {
        const modal = document.getElementById(\"searcheur\");
        modal.style.display = \"block\";
    }
    window.shasharo = function shasharo() {
        const modal = document.getElementById(\"modpara\");
        modal.style.display = \"block\";
    }
    window.shashar = function shashar(a) {
        event.preventDefault();
        localStorage.setItem('reloadd', a);
        document.getElementById('shaacontent').innerText = ' ';
        const frame = document.createElement(\"IFRAME\");
        frame.setAttribute(\"style\", 'width: 100%; height: 100%; border: none;');
        frame.setAttribute(\"id\", 'framer');
        frame.setAttribute(\"src\", '/crm/' + a);
        document.getElementById('shaacontent').appendChild(frame);
        const modal = document.getElementById(\"myModale\");
        modal.style.display = \"block\";
    }

    window.shasharr = function shasharr(a, b) {
        event.preventDefault();
        localStorage.setItem('reloadd', a);
        document.getElementById('shaacontent').innerText = ' ';
        const frame = document.createElement(\"IFRAME\");
        frame.setAttribute(\"style\", 'width: 100%; height: 100%; border: none;');
        frame.setAttribute(\"id\", 'framer');
        frame.setAttribute(\"src\", '/crm/' + a + \"/\" + b);
        document.getElementById('shaacontent').appendChild(frame);
        const modal = document.getElementById(\"myModale\");
        modal.style.display = \"block\";
    }

    document.getElementById('closeframer').onclick = function () {
        const modal = document.getElementById(\"myModale\");
        modal.style.display = \"none\";
    }
    document.getElementById('closeframers').onclick = function () {
        const modal = document.getElementById(\"searcheur\");
        modal.style.display = \"none\";
    }
    document.getElementById('closeNumeroter').onclick = function () {
        const modal = document.getElementById(\"modpara\");
        modal.style.display = \"none\";
    }
    document.getElementById('reloadframer').onclick = function () {
        const aa = localStorage.getItem('reloadd');
        const modal = document.getElementById(\"myModale\");
        document.getElementById('shaacontent').innerText = ' ';
        const frame = document.createElement(\"IFRAME\");
        frame.setAttribute(\"style\", 'width: 100%; height: 100%; border: none;');
        frame.setAttribute(\"id\", 'framer');
        frame.setAttribute(\"src\", '/crm/' + aa);
        document.getElementById('shaacontent').appendChild(frame);
        modal.style.display = \"block\";
    }
    document.getElementById('goback').onclick = function () {
        window.history.back();
    }
    document.getElementById('goforward').onclick = function () {
        window.history.forward();
    }


</script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\"
        integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\"
        crossorigin=\"anonymous\"></script>
</body>
</html>
", "security/start.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\security\\start.html.twig");
    }
}
