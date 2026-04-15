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

/* security/starte.html.twig */
class __TwigTemplate_37a4d0896dc3b4a3965ff3b7d091e4c7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/starte.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/starte.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html ; charset=utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Carlinbleu | Gestionnaire de Chantiers</title>
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

</head>

<body style=\"background-color:#3b3b3b\">
<div class=\"modal\" id=\"app_exercices\">
    <div class=\"modal-dialog\" style=\"max-width: 550px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_exercices\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">CRÉER UN
                    EXERCICE COMPTABLE</p>
            </div>
            <div class=\"modal-body\" style=\"height:50vh; width:100%; overflow-y: scroll\">
                ";
        // line 63
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formExercices"]) || array_key_exists("formExercices", $context) ? $context["formExercices"] : (function () { throw new RuntimeError('Variable "formExercices" does not exist.', 63, $this->source); })()), 'form_start', ["attr" => ["id" => "addExercicesForm"]]);
        yield "
                <input type=\"hidden\" name=\"token\" value=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addExercicesToken"), "html", null, true);
        yield "\"/>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">EXERCICE COMPTABLE
                            <span class=\"col-pink\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formExercices"]) || array_key_exists("formExercices", $context) ? $context["formExercices"] : (function () { throw new RuntimeError('Variable "formExercices" does not exist.', 71, $this->source); })()), "exercice", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-control"]]);
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
                    <input type=\"submit\" id=\"addExercices\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect text-white bg-pri\">

                    <img src=\"";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadExercices\">
                </div>
                ";
        // line 113
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formExercices"]) || array_key_exists("formExercices", $context) ? $context["formExercices"] : (function () { throw new RuntimeError('Variable "formExercices" does not exist.', 113, $this->source); })()), 'form_end');
        yield "
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
        // line 129
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 129, $this->source); })()), 'form_start', ["attr" => ["id" => "addClientForm"]]);
        yield "
                ";
        // line 130
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 130, $this->source); })()), "_token", [], "any", false, false, false, 130), 'row');
        yield "
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label pri bolo\">CLIENT<span class=\"col-red\">*</span>
                        </label>
                        <div class=\"form-group m-t--5\">
                            <div class=\"form-line\">
                                ";
        // line 137
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 137, $this->source); })()), "nomclient", [], "any", false, false, false, 137), 'widget', ["attr" => ["class" => "form-control cls"]]);
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
        // line 147
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 147, $this->source); })()), "adresse", [], "any", false, false, false, 147), 'widget', ["attr" => ["class" => "form-control cls"]]);
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
        // line 157
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 157, $this->source); })()), "contact", [], "any", false, false, false, 157), 'widget', ["attr" => ["class" => "form-control cls"]]);
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
        // line 167
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 167, $this->source); })()), "contribuable", [], "any", false, false, false, 167), 'widget', ["attr" => ["class" => "form-control cls"]]);
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
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadClient\"/>
                </div>
                ";
        // line 181
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 181, $this->source); })()), 'form_end');
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
        // line 197
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 197, $this->source); })()), 'form_start', ["attr" => ["id" => "addChantierForm"]]);
        yield "
                <input type=\"hidden\" name=\"token\" value=\"";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addChantierToken"), "html", null, true);
        yield "\"/>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label pri bolo\">CLIENT<span class=\"col-red\">*</span>
                        </label>
                        <div class=\"form-group m-t--5\">
                            <div class=\"form-line\">
                                ";
        // line 205
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 205, $this->source); })()), "client", [], "any", false, false, false, 205), 'widget', ["attr" => ["class" => "form-control chr"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label pri bolo\">NOM DU CHANTIER<span class=\"col-red\">*</span>
                        </label>
                        <div class=\"form-group m-t--5\">
                            <div class=\"form-line\">
                                ";
        // line 216
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 216, $this->source); })()), "nomchantier", [], "any", false, false, false, 216), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 226
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 226, $this->source); })()), "contrat", [], "any", false, false, false, 226), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 236
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 236, $this->source); })()), "localisation", [], "any", false, false, false, 236), 'widget', ["attr" => ["class" => "form-control chr"]]);
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
        // line 246
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 246, $this->source); })()), "sous", [], "any", false, false, false, 246), 'widget', ["required" => "", "attr" => ["class" => "form-control chr"]]);
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
        // line 256
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 256, $this->source); })()), "description", [], "any", false, false, false, 256), 'widget', ["required" => "", "id" => "description", "attr" => ["class" => "form-control chr"]]);
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
                                <input type=\"text\" placeholder=\"Date...\" id=\"dfin\" name=\"dfin\"
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
                <div class=\"text-center\" id=\"divChantier\">
                    <input type=\"submit\" id=\"addChantier\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect col-white bg-pri\">
                </div>
                <div class=\"text-center\">
                    <img src=\"";
        // line 298
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadChantier\"></div>
                ";
        // line 300
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 300, $this->source); })()), 'form_end');
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
        // line 316
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 316, $this->source); })()), 'form_start', ["attr" => ["id" => "addDevisForm"]]);
        yield "
                <input type=\"hidden\" name=\"token\" value=\"";
        // line 317
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addDevisToken"), "html", null, true);
        yield "\"/>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 pri bolo\">CHANTIER</label>
                        <div class=\"form-group\">
                            <div class=\"form-line col-pink\">
                                ";
        // line 323
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 323, $this->source); })()), "chantier", [], "any", false, false, false, 323), 'widget', ["required" => "required", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 pri bolo\">RÉFÉRENCE OU OBJET DU DEVIS</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 333
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 333, $this->source); })()), "devreference", [], "any", false, false, false, 333), 'widget', ["id" => "editor5", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">TVA(%)</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 343
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 343, $this->source); })()), "tva", [], "any", false, false, false, 343), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">DATE</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 351
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 351, $this->source); })()), "date", [], "any", false, false, false, 351), 'widget', ["attr" => ["class" => "form-control datepicker"]]);
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
        // line 361
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 361, $this->source); })()), "ptva", [], "any", false, false, false, 361), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">AVEC BASE TVA?</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 369
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 369, $this->source); })()), "abasetva", [], "any", false, false, false, 369), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                <label class=\"form-label\"></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">AVEC REMISE?</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 380
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 380, $this->source); })()), "aarem", [], "any", false, false, false, 380), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">AVEC COLONNE ZONE?</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 388
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 388, $this->source); })()), "zone", [], "any", false, false, false, 388), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">AVEC COLONNE RÉF?</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 398
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 398, $this->source); })()), "aaref", [], "any", false, false, false, 398), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">VALIDITÉ DU DEVIS</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 406
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 406, $this->source); })()), "validit", [], "any", false, false, false, 406), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">MODÈLE D'INFORMATION</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 416
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 416, $this->source); })()), "modele", [], "any", false, false, false, 416), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">MODÈLE DE RÉSULTATS</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 424
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 424, $this->source); })()), "model", [], "any", false, false, false, 424), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 pri bolo\">DEVISE</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 434
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 434, $this->source); })()), "monnaie", [], "any", false, false, false, 434), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 pri bolo\">INFORMATIONS SUR LE DEVIS</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 444
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 444, $this->source); })()), "conditions", [], "any", false, false, false, 444), 'widget', ["id" => "editor6", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    <input type=\"submit\" id=\"addeDevis\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect col-white bg-blue\">
                    <img src=\"";
        // line 452
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadDevis\"></div>
                ";
        // line 454
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 454, $this->source); })()), 'form_end');
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
        // line 470
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formDecompte"]) || array_key_exists("formDecompte", $context) ? $context["formDecompte"] : (function () { throw new RuntimeError('Variable "formDecompte" does not exist.', 470, $this->source); })()), 'form_start', ["attr" => ["id" => "addDecompteForm"]]);
        yield "
                <input type=\"hidden\" name=\"token\" value=\"";
        // line 471
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("dectoken"), "html", null, true);
        yield "\"/>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-7\">
                        <label class=\"form-label m-b--30 col-blue bolo\">DEVIS VALIDÉS</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                <select id=\"devdec\" name=\"devdec\" class=\"form-control\">
                                    <option disabled=\"disabled\" selected=\"selected\">Choisir un devis</option>
                                    ";
        // line 479
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 479, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 480
            yield "                                        ";
            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 480)) && (null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 480)))) {
                // line 481
                yield "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 481));
                foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                    // line 482
                    yield "                                                ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 482))) {
                        // line 483
                        yield "                                                    ";
                        $context["oop"] = 0;
                        // line 484
                        yield "                                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "devis", [], "any", false, false, false, 484));
                        foreach ($context['_seq'] as $context["_key"] => $context["dev"]) {
                            // line 485
                            yield "                                                        ";
                            $context["op"] = 0;
                            // line 486
                            yield "                                                        ";
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "decomptes", [], "any", false, false, false, 486));
                            foreach ($context['_seq'] as $context["_key"] => $context["dec"]) {
                                // line 487
                                yield "                                                            ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["dec"], "avancement", [], "any", false, false, false, 487) == 100)) {
                                    // line 488
                                    yield "                                                                ";
                                    $context["op"] = ((isset($context["op"]) || array_key_exists("op", $context) ? $context["op"] : (function () { throw new RuntimeError('Variable "op" does not exist.', 488, $this->source); })()) + 1);
                                    // line 489
                                    yield "                                                            ";
                                }
                                // line 490
                                yield "                                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['dec'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 491
                            yield "                                                        ";
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "etat", [], "any", false, false, false, 491) == "valide") && ((isset($context["op"]) || array_key_exists("op", $context) ? $context["op"] : (function () { throw new RuntimeError('Variable "op" does not exist.', 491, $this->source); })()) == 0))) {
                                // line 492
                                yield "                                                            ";
                                $context["oop"] = ((isset($context["oop"]) || array_key_exists("oop", $context) ? $context["oop"] : (function () { throw new RuntimeError('Variable "oop" does not exist.', 492, $this->source); })()) + 1);
                                // line 493
                                yield "                                                        ";
                            }
                            // line 494
                            yield "                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['dev'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 495
                        yield "
                                                    ";
                        // line 496
                        if (((isset($context["oop"]) || array_key_exists("oop", $context) ? $context["oop"] : (function () { throw new RuntimeError('Variable "oop" does not exist.', 496, $this->source); })()) > 0)) {
                            // line 497
                            yield "                                                        <optgroup
                                                                label=\"";
                            // line 498
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 498)), "html", null, true);
                            yield " | ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 498)), "html", null, true);
                            yield "\">
                                                            ";
                            // line 499
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "devis", [], "any", false, false, false, 499));
                            foreach ($context['_seq'] as $context["_key"] => $context["dev"]) {
                                // line 500
                                yield "                                                                ";
                                $context["op"] = 0;
                                // line 501
                                yield "                                                                ";
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "decomptes", [], "any", false, false, false, 501));
                                foreach ($context['_seq'] as $context["_key"] => $context["dec"]) {
                                    // line 502
                                    yield "                                                                    ";
                                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["dec"], "avancement", [], "any", false, false, false, 502) == 100)) {
                                        // line 503
                                        yield "                                                                        ";
                                        $context["op"] = ((isset($context["op"]) || array_key_exists("op", $context) ? $context["op"] : (function () { throw new RuntimeError('Variable "op" does not exist.', 503, $this->source); })()) + 1);
                                        // line 504
                                        yield "                                                                    ";
                                    }
                                    // line 505
                                    yield "                                                                ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_key'], $context['dec'], $context['_parent']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 506
                                yield "                                                                ";
                                if (((CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "etat", [], "any", false, false, false, 506) == "valide") && ((isset($context["op"]) || array_key_exists("op", $context) ? $context["op"] : (function () { throw new RuntimeError('Variable "op" does not exist.', 506, $this->source); })()) == 0))) {
                                    // line 507
                                    yield "                                                                    <option value=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "id", [], "any", false, false, false, 507), "html", null, true);
                                    yield "\"
                                                                            class=\"";
                                    // line 508
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "id", [], "any", false, false, false, 508), "html", null, true);
                                    yield "\">";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "iddevis", [], "any", false, false, false, 508), "html", null, true);
                                    yield " |
                                                                        TTC: ";
                                    // line 509
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "totalttc", [], "any", false, false, false, 509), 2, ".", " "), "html", null, true);
                                    yield "</option>
                                                                ";
                                }
                                // line 511
                                yield "                                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['dev'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 512
                            yield "                                                        </optgroup>
                                                    ";
                        }
                        // line 514
                        yield "                                                ";
                    }
                    // line 515
                    yield "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 516
                yield "                                        ";
            }
            // line 517
            yield "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 518
        yield "                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-5\">
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
        // line 537
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDecompte"]) || array_key_exists("formDecompte", $context) ? $context["formDecompte"] : (function () { throw new RuntimeError('Variable "formDecompte" does not exist.', 537, $this->source); })()), "garantie", [], "any", false, false, false, 537), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 546
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDecompte"]) || array_key_exists("formDecompte", $context) ? $context["formDecompte"] : (function () { throw new RuntimeError('Variable "formDecompte" does not exist.', 546, $this->source); })()), "finition", [], "any", false, false, false, 546), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 557
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDecompte"]) || array_key_exists("formDecompte", $context) ? $context["formDecompte"] : (function () { throw new RuntimeError('Variable "formDecompte" does not exist.', 557, $this->source); })()), "prorata", [], "any", false, false, false, 557), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 566
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDecompte"]) || array_key_exists("formDecompte", $context) ? $context["formDecompte"] : (function () { throw new RuntimeError('Variable "formDecompte" does not exist.', 566, $this->source); })()), "date", [], "any", false, false, false, 566), 'widget', ["attr" => ["class" => "form-control datepicker"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    <input type=\"submit\" id=\"addeDecompte\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect col-white bg-blue\">

                    <img src=\"";
        // line 575
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadDecompte\"></div>
                ";
        // line 577
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formDecompte"]) || array_key_exists("formDecompte", $context) ? $context["formDecompte"] : (function () { throw new RuntimeError('Variable "formDecompte" does not exist.', 577, $this->source); })()), 'form_end');
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
        // line 593
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 593, $this->source); })()), 'form_start', ["attr" => ["id" => "addFactureForm"]]);
        yield "
                ";
        // line 594
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 594, $this->source); })()), "_token", [], "any", false, false, false, 594), 'row');
        yield "
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">DATE</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 600
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 600, $this->source); })()), "date", [], "any", false, false, false, 600), 'widget', ["attr" => ["class" => "form-control datepicker"]]);
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
        // line 609
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 609, $this->source); })()), "type", [], "any", false, false, false, 609), 'widget', ["id" => "facselect", "attr" => ["class" => "form-control"]]);
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
        // line 619
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 619, $this->source); })()), "devis", [], "any", false, false, false, 619), 'widget', ["required" => "", "attr" => ["class" => "form-control devo"]]);
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
        // line 630
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 630, $this->source); })()), "decompte", [], "any", false, false, false, 630), 'widget', ["required" => "", "attr" => ["class" => "form-control deco"]]);
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
        // line 641
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 641, $this->source); })()), "factreference", [], "any", false, false, false, 641), 'widget', ["id" => "editor3", "attr" => ["class" => "form-control"]]);
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
        // line 651
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 651, $this->source); })()), "information", [], "any", false, false, false, 651), 'widget', ["id" => "editor4", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    <input type=\"submit\" id=\"addeFacture\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect col-white bg-blue\">
                    <img src=\"";
        // line 659
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadFacture\">
                </div>
                ";
        // line 662
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 662, $this->source); })()), 'form_end');
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
        // line 678
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formpresta"]) || array_key_exists("formpresta", $context) ? $context["formpresta"] : (function () { throw new RuntimeError('Variable "formpresta" does not exist.', 678, $this->source); })()), 'form_start', ["attr" => ["id" => "addPrestataireForm"]]);
        yield "
                ";
        // line 679
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formpresta"]) || array_key_exists("formpresta", $context) ? $context["formpresta"] : (function () { throw new RuntimeError('Variable "formpresta" does not exist.', 679, $this->source); })()), "_token", [], "any", false, false, false, 679), 'row');
        yield "
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">PRESTATAIRE
                            <span class=\"col-pink\">*</span></label>

                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 687
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formpresta"]) || array_key_exists("formpresta", $context) ? $context["formpresta"] : (function () { throw new RuntimeError('Variable "formpresta" does not exist.', 687, $this->source); })()), "fournisseur", [], "any", false, false, false, 687), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 697
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formpresta"]) || array_key_exists("formpresta", $context) ? $context["formpresta"] : (function () { throw new RuntimeError('Variable "formpresta" does not exist.', 697, $this->source); })()), "fonction", [], "any", false, false, false, 697), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">CONTACTS</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 705
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formpresta"]) || array_key_exists("formpresta", $context) ? $context["formpresta"] : (function () { throw new RuntimeError('Variable "formpresta" does not exist.', 705, $this->source); })()), "mobile", [], "any", false, false, false, 705), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 715
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formpresta"]) || array_key_exists("formpresta", $context) ? $context["formpresta"] : (function () { throw new RuntimeError('Variable "formpresta" does not exist.', 715, $this->source); })()), "mail", [], "any", false, false, false, 715), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">ADRESSE</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 723
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formpresta"]) || array_key_exists("formpresta", $context) ? $context["formpresta"] : (function () { throw new RuntimeError('Variable "formpresta" does not exist.', 723, $this->source); })()), "adresse", [], "any", false, false, false, 723), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    <input type=\"submit\" id=\"addPresta\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect text-white bg-pri\">

                    <img src=\"";
        // line 732
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadPresta\">
                </div>
                ";
        // line 735
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formpresta"]) || array_key_exists("formpresta", $context) ? $context["formpresta"] : (function () { throw new RuntimeError('Variable "formpresta" does not exist.', 735, $this->source); })()), 'form_end');
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
        // line 751
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formfourn"]) || array_key_exists("formfourn", $context) ? $context["formfourn"] : (function () { throw new RuntimeError('Variable "formfourn" does not exist.', 751, $this->source); })()), 'form_start', ["attr" => ["id" => "addFournisseurForm"]]);
        yield "
                ";
        // line 752
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formfourn"]) || array_key_exists("formfourn", $context) ? $context["formfourn"] : (function () { throw new RuntimeError('Variable "formfourn" does not exist.', 752, $this->source); })()), "_token", [], "any", false, false, false, 752), 'row');
        yield "
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">FOURNISSEUR
                            <span class=\"col-pink\">*</span></label>

                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 760
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formfourn"]) || array_key_exists("formfourn", $context) ? $context["formfourn"] : (function () { throw new RuntimeError('Variable "formfourn" does not exist.', 760, $this->source); })()), "fournisseur", [], "any", false, false, false, 760), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 770
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formfourn"]) || array_key_exists("formfourn", $context) ? $context["formfourn"] : (function () { throw new RuntimeError('Variable "formfourn" does not exist.', 770, $this->source); })()), "mobile", [], "any", false, false, false, 770), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">E-MAIL</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 778
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formfourn"]) || array_key_exists("formfourn", $context) ? $context["formfourn"] : (function () { throw new RuntimeError('Variable "formfourn" does not exist.', 778, $this->source); })()), "mail", [], "any", false, false, false, 778), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 788
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formfourn"]) || array_key_exists("formfourn", $context) ? $context["formfourn"] : (function () { throw new RuntimeError('Variable "formfourn" does not exist.', 788, $this->source); })()), "adresse", [], "any", false, false, false, 788), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    <input type=\"submit\" id=\"addFourn\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect text-white bg-pri\">
                    <img src=\"";
        // line 796
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadFourn\">
                </div>
                ";
        // line 799
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formfourn"]) || array_key_exists("formfourn", $context) ? $context["formfourn"] : (function () { throw new RuntimeError('Variable "formfourn" does not exist.', 799, $this->source); })()), 'form_end');
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
        // line 815
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 815, $this->source); })()), 'form_start', ["attr" => ["id" => "addContactForm"]]);
        yield "
                <input type=\"hidden\" name=\"token\" value=\"";
        // line 816
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addContactToken"), "html", null, true);
        yield "\"/>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label pri bolo\">CLIENT<span class=\"col-red\">*</span>
                        </label>
                        <div class=\"form-group m-t--5\">
                            <div class=\"form-line\">
                                ";
        // line 823
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 823, $this->source); })()), "client", [], "any", false, false, false, 823), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 834
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 834, $this->source); })()), "contact", [], "any", false, false, false, 834), 'widget', ["attr" => ["class" => "form-control chors"]]);
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
        // line 844
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 844, $this->source); })()), "fonction", [], "any", false, false, false, 844), 'widget', ["attr" => ["class" => "form-control cohr"]]);
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
        // line 854
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 854, $this->source); })()), "mail", [], "any", false, false, false, 854), 'widget', ["attr" => ["class" => "form-control cohr"]]);
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
        // line 864
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 864, $this->source); })()), "phone", [], "any", false, false, false, 864), 'widget', ["attr" => ["class" => "form-control cohr"]]);
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
        // line 874
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 874, $this->source); })()), "bureau", [], "any", false, false, false, 874), 'widget', ["attr" => ["class" => "form-control cohr"]]);
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
        // line 886
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadContact\">

                </div>
                ";
        // line 890
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 890, $this->source); })()), 'form_end');
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
        // line 906
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 906, $this->source); })()), 'form_start', ["attr" => ["id" => "addPersonnelForm"]]);
        yield "
                ";
        // line 907
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 907, $this->source); })()), "_token", [], "any", false, false, false, 907), 'row');
        yield "
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 pri bolo\">NOM & PRÉNOMS<span class=\"col-red\">*</span>
                        </label>
                        <div class=\"form-group\">
                            <div class=\"form-line col-pink\">
                                ";
        // line 914
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 914, $this->source); })()), "noms", [], "any", false, false, false, 914), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 924
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 924, $this->source); })()), "service", [], "any", false, false, false, 924), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 934
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 934, $this->source); })()), "fonction", [], "any", false, false, false, 934), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
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
        // line 944
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 944, $this->source); })()), "contrat", [], "any", false, false, false, 944), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">EMAIL</label>
                        <div class=\"form-group\">
                            <div class=\"form-line col-pink\">
                                ";
        // line 952
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 952, $this->source); })()), "mail", [], "any", false, false, false, 952), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 962
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 962, $this->source); })()), "contact", [], "any", false, false, false, 962), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">SALAIRE</label>
                        <div class=\"form-group\">
                            <div class=\"form-line col-pink\">
                                ";
        // line 970
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 970, $this->source); })()), "salaire", [], "any", false, false, false, 970), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    <input type=\"submit\" id=\"addPers\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect col-white bg-blue\">
                    <img src=\"";
        // line 978
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadPers\"></div>
                <br>
                ";
        // line 981
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 981, $this->source); })()), 'form_end');
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
        // line 997
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formeRegle"]) || array_key_exists("formeRegle", $context) ? $context["formeRegle"] : (function () { throw new RuntimeError('Variable "formeRegle" does not exist.', 997, $this->source); })()), 'form_start', ["attr" => ["id" => "addReglementForm"]]);
        yield "
                <input type=\"hidden\" name=\"token\" value=\"";
        // line 998
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
        // line 1006
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 1006, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 1007
            yield "                                        ";
            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 1007)) && (null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 1007)))) {
                // line 1008
                yield "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 1008));
                foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                    // line 1009
                    yield "                                                ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 1009))) {
                        // line 1010
                        yield "                                                    ";
                        $context["tt"] = 0;
                        // line 1011
                        yield "                                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "factures", [], "any", false, false, false, 1011));
                        foreach ($context['_seq'] as $context["_key"] => $context["fac"]) {
                            // line 1012
                            yield "                                                        ";
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "etat", [], "any", false, false, false, 1012) == "save") && (null === CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "corbeille", [], "any", false, false, false, 1012)))) {
                                // line 1013
                                yield "                                                            ";
                                $context["tt"] = ((isset($context["tt"]) || array_key_exists("tt", $context) ? $context["tt"] : (function () { throw new RuntimeError('Variable "tt" does not exist.', 1013, $this->source); })()) + 1);
                                // line 1014
                                yield "                                                        ";
                            }
                            // line 1015
                            yield "                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['fac'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1016
                        yield "                                                    ";
                        if (((isset($context["tt"]) || array_key_exists("tt", $context) ? $context["tt"] : (function () { throw new RuntimeError('Variable "tt" does not exist.', 1016, $this->source); })()) > 0)) {
                            // line 1017
                            yield "                                                        <optgroup
                                                                label=\"";
                            // line 1018
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 1018)), "html", null, true);
                            yield " | ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 1018)), "html", null, true);
                            yield "\">
                                                            ";
                            // line 1019
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "factures", [], "any", false, false, false, 1019));
                            foreach ($context['_seq'] as $context["_key"] => $context["fac"]) {
                                // line 1020
                                yield "                                                                ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "etat", [], "any", false, false, false, 1020) == "save")) {
                                    // line 1021
                                    yield "                                                                    <option value=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "id", [], "any", false, false, false, 1021), "html", null, true);
                                    yield "\"
                                                                            class=\"";
                                    // line 1022
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "id", [], "any", false, false, false, 1022), "html", null, true);
                                    yield "\">FACTURE
                                                                        Nº";
                                    // line 1023
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "numfacture", [], "any", false, false, false, 1023), "html", null, true);
                                    yield "</option>
                                                                ";
                                }
                                // line 1025
                                yield "                                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['fac'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 1026
                            yield "                                                        </optgroup>
                                                    ";
                        }
                        // line 1028
                        yield "                                                ";
                    }
                    // line 1029
                    yield "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1030
                yield "                                        ";
            }
            // line 1031
            yield "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1032
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
        // line 1046
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeRegle"]) || array_key_exists("formeRegle", $context) ? $context["formeRegle"] : (function () { throw new RuntimeError('Variable "formeRegle" does not exist.', 1046, $this->source); })()), "montant", [], "any", false, false, false, 1046), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 1057
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeRegle"]) || array_key_exists("formeRegle", $context) ? $context["formeRegle"] : (function () { throw new RuntimeError('Variable "formeRegle" does not exist.', 1057, $this->source); })()), "moyen", [], "any", false, false, false, 1057), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    <input type=\"submit\" id=\"addReglementChantiers\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect col-white bg-blue\">
                    <img src=\"";
        // line 1065
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadReglement\">
                </div>
                <br><br><br>
                ";
        // line 1069
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formeRegle"]) || array_key_exists("formeRegle", $context) ? $context["formeRegle"] : (function () { throw new RuntimeError('Variable "formeRegle" does not exist.', 1069, $this->source); })()), 'form_end');
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
        // line 1085
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1085, $this->source); })()), 'form_start', ["attr" => ["id" => "addCaisseForm"]]);
        yield "
                <input type=\"hidden\" name=\"token\" value=\"";
        // line 1086
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addCaisseToken"), "html", null, true);
        yield "\"/>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">N° DE DEVIS <span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1093
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1093, $this->source); })()), "devis", [], "any", false, false, false, 1093), 'widget', ["required" => "", "id" => "veligne", "attr" => ["class" => "form-control "]]);
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
        // line 1102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1102, $this->source); })()), "date", [], "any", false, false, false, 1102), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
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
        // line 1125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1125, $this->source); })()), "paie", [], "any", false, false, false, 1125), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
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
        // line 1137
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1137, $this->source); })()), "caissereference", [], "any", false, false, false, 1137), 'widget', ["id" => "editor", "attr" => ["class" => "form-control"]]);
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
        // line 1147
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1147, $this->source); })()), "montant", [], "any", false, false, false, 1147), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-5\">
                        <label class=\"form-label m-b--30 col-blue bolo\">MOYEN DE PAIEMENT</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1155
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1155, $this->source); })()), "moyen", [], "any", false, false, false, 1155), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
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
        // line 1165
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1165, $this->source); })()), "monnaie", [], "any", false, false, false, 1165), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">TYPE D'OPÉRATION</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1173
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1173, $this->source); })()), "operation", [], "any", false, false, false, 1173), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    <input type=\"submit\" id=\"addeeCaisse\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect text-white bg-blue\">
                    <img src=\"";
        // line 1181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadeeCaisse\">
                </div>
                ";
        // line 1184
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCaisse"]) || array_key_exists("formCaisse", $context) ? $context["formCaisse"] : (function () { throw new RuntimeError('Variable "formCaisse" does not exist.', 1184, $this->source); })()), 'form_end');
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
        // line 1200
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formeBon"]) || array_key_exists("formeBon", $context) ? $context["formeBon"] : (function () { throw new RuntimeError('Variable "formeBon" does not exist.', 1200, $this->source); })()), 'form_start', ["attr" => ["id" => "adduBonForm"]]);
        yield "
                <input type=\"hidden\" name=\"token\" value=\"";
        // line 1201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("adduBonToken"), "html", null, true);
        yield "\"/>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-5\">
                        <label class=\"form-label m-b--30 col-blue bolo\">N° DE DEVIS <span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1208
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeBon"]) || array_key_exists("formeBon", $context) ? $context["formeBon"] : (function () { throw new RuntimeError('Variable "formeBon" does not exist.', 1208, $this->source); })()), "devis", [], "any", false, false, false, 1208), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 1217
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeBon"]) || array_key_exists("formeBon", $context) ? $context["formeBon"] : (function () { throw new RuntimeError('Variable "formeBon" does not exist.', 1217, $this->source); })()), "fournisseur", [], "any", false, false, false, 1217), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 1227
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeBon"]) || array_key_exists("formeBon", $context) ? $context["formeBon"] : (function () { throw new RuntimeError('Variable "formeBon" does not exist.', 1227, $this->source); })()), "bonreference", [], "any", false, false, false, 1227), 'widget', ["id" => "editor10", "attr" => ["class" => "form-control"]]);
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
        // line 1237
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeBon"]) || array_key_exists("formeBon", $context) ? $context["formeBon"] : (function () { throw new RuntimeError('Variable "formeBon" does not exist.', 1237, $this->source); })()), "monnaie", [], "any", false, false, false, 1237), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">TVA(%)</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1245
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeBon"]) || array_key_exists("formeBon", $context) ? $context["formeBon"] : (function () { throw new RuntimeError('Variable "formeBon" does not exist.', 1245, $this->source); })()), "tva", [], "any", false, false, false, 1245), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 1255
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeBon"]) || array_key_exists("formeBon", $context) ? $context["formeBon"] : (function () { throw new RuntimeError('Variable "formeBon" does not exist.', 1255, $this->source); })()), "ptva", [], "any", false, false, false, 1255), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">AVEC REMISE ?</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1263
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeBon"]) || array_key_exists("formeBon", $context) ? $context["formeBon"] : (function () { throw new RuntimeError('Variable "formeBon" does not exist.', 1263, $this->source); })()), "aarem", [], "any", false, false, false, 1263), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 1273
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeBon"]) || array_key_exists("formeBon", $context) ? $context["formeBon"] : (function () { throw new RuntimeError('Variable "formeBon" does not exist.', 1273, $this->source); })()), "aaref", [], "any", false, false, false, 1273), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">DATE</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1281
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeBon"]) || array_key_exists("formeBon", $context) ? $context["formeBon"] : (function () { throw new RuntimeError('Variable "formeBon" does not exist.', 1281, $this->source); })()), "date", [], "any", false, false, false, 1281), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 1291
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeBon"]) || array_key_exists("formeBon", $context) ? $context["formeBon"] : (function () { throw new RuntimeError('Variable "formeBon" does not exist.', 1291, $this->source); })()), "conditions", [], "any", false, false, false, 1291), 'widget', ["required" => "", "id" => "editor11", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    <input type=\"submit\" id=\"adduBon\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect text-white bg-blue\">

                    <img src=\"";
        // line 1300
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loaduBon\">
                </div>
                <br><br><br>
                ";
        // line 1304
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formeBon"]) || array_key_exists("formeBon", $context) ? $context["formeBon"] : (function () { throw new RuntimeError('Variable "formeBon" does not exist.', 1304, $this->source); })()), 'form_end');
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
        // line 1320
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1320, $this->source); })()), 'form_start', ["attr" => ["id" => "addBonForm"]]);
        yield "
                ";
        // line 1321
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1321, $this->source); })()), "_token", [], "any", false, false, false, 1321), 'row');
        yield "
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">N° DE DEVIS <span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1328
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1328, $this->source); })()), "devis", [], "any", false, false, false, 1328), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 1337
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1337, $this->source); })()), "type", [], "any", false, false, false, 1337), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">FOURNISSEUR<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1348
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1348, $this->source); })()), "fournisseur", [], "any", false, false, false, 1348), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 1358
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1358, $this->source); })()), "bonreference", [], "any", false, false, false, 1358), 'widget', ["id" => "editor2", "attr" => ["class" => "form-control"]]);
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
        // line 1368
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1368, $this->source); })()), "monnaie", [], "any", false, false, false, 1368), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">TVA(%)</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1376
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1376, $this->source); })()), "tva", [], "any", false, false, false, 1376), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 1386
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1386, $this->source); })()), "ptva", [], "any", false, false, false, 1386), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">AVEC REMISE ?</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1394
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1394, $this->source); })()), "aarem", [], "any", false, false, false, 1394), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 1404
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1404, $this->source); })()), "aaref", [], "any", false, false, false, 1404), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">DATE</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1412
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1412, $this->source); })()), "date", [], "any", false, false, false, 1412), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 1422
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1422, $this->source); })()), "conditions", [], "any", false, false, false, 1422), 'widget', ["required" => "", "id" => "editor7", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    <input type=\"submit\" id=\"addiBon\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect text-white bg-blue\">

                    <img src=\"";
        // line 1431
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadBon\">
                </div>
                ";
        // line 1434
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 1434, $this->source); })()), 'form_end');
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
        // line 1450
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formerCaisse"]) || array_key_exists("formerCaisse", $context) ? $context["formerCaisse"] : (function () { throw new RuntimeError('Variable "formerCaisse" does not exist.', 1450, $this->source); })()), 'form_start', ["attr" => ["id" => "addCaissePrestataireForm"]]);
        yield "
                <input type=\"hidden\" name=\"token\" value=\"";
        // line 1451
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addCaissePrestataireToken"), "html", null, true);
        yield "\"/>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">PRESTATAIRES<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1458
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formerCaisse"]) || array_key_exists("formerCaisse", $context) ? $context["formerCaisse"] : (function () { throw new RuntimeError('Variable "formerCaisse" does not exist.', 1458, $this->source); })()), "fournisseur", [], "any", false, false, false, 1458), 'widget', ["id" => "sefoner", "attr" => ["class" => "form-control ploce"]]);
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
                                <select class=\"form-control selboner\" name=\"bon\"></select>
                            </div>
                            <p class=\"h6 diboner\" style=\"margin-top:5px !important\"></p>
                        </div>

                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">LIGNES DU DEVIS POUR CHARGE
                            PREVISIONNELLE</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                <select id=\"libudgetFoure\" class=\"form-control form-select\">
                                    <option value=\"\">-- Faites votre choix svp !--</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-7\">
                        <label class=\"form-label m-b--30 col-blue bolo\">POINTS DE PAIE</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1495
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formerCaisse"]) || array_key_exists("formerCaisse", $context) ? $context["formerCaisse"] : (function () { throw new RuntimeError('Variable "formerCaisse" does not exist.', 1495, $this->source); })()), "paie", [], "any", false, false, false, 1495), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
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
        // line 1504
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formerCaisse"]) || array_key_exists("formerCaisse", $context) ? $context["formerCaisse"] : (function () { throw new RuntimeError('Variable "formerCaisse" does not exist.', 1504, $this->source); })()), "date", [], "any", false, false, false, 1504), 'widget', ["required" => "", "attr" => ["class" => "form-control datepicker"]]);
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
        // line 1514
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formerCaisse"]) || array_key_exists("formerCaisse", $context) ? $context["formerCaisse"] : (function () { throw new RuntimeError('Variable "formerCaisse" does not exist.', 1514, $this->source); })()), "moyen", [], "any", false, false, false, 1514), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
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
        // line 1524
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formerCaisse"]) || array_key_exists("formerCaisse", $context) ? $context["formerCaisse"] : (function () { throw new RuntimeError('Variable "formerCaisse" does not exist.', 1524, $this->source); })()), "monnaie", [], "any", false, false, false, 1524), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">TYPE D'OPÉRATION</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1532
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formerCaisse"]) || array_key_exists("formerCaisse", $context) ? $context["formerCaisse"] : (function () { throw new RuntimeError('Variable "formerCaisse" does not exist.', 1532, $this->source); })()), "operation", [], "any", false, false, false, 1532), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 1543
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formerCaisse"]) || array_key_exists("formerCaisse", $context) ? $context["formerCaisse"] : (function () { throw new RuntimeError('Variable "formerCaisse" does not exist.', 1543, $this->source); })()), "caissereference", [], "any", false, false, false, 1543), 'widget', ["id" => "editor15", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    <input type=\"submit\" id=\"adduuCaisse\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect col-white bg-blue\">
                    <img src=\"";
        // line 1551
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loaduuCaisse\">
                </div>
                ";
        // line 1554
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formerCaisse"]) || array_key_exists("formerCaisse", $context) ? $context["formerCaisse"] : (function () { throw new RuntimeError('Variable "formerCaisse" does not exist.', 1554, $this->source); })()), 'form_end');
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
        // line 1570
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formeCaisse"]) || array_key_exists("formeCaisse", $context) ? $context["formeCaisse"] : (function () { throw new RuntimeError('Variable "formeCaisse" does not exist.', 1570, $this->source); })()), 'form_start', ["attr" => ["id" => "addCaisseFournisseurForm"]]);
        yield "
                <input type=\"hidden\" name=\"token\" value=\"";
        // line 1571
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addCaisseFournisseurToken"), "html", null, true);
        yield "\"/>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">FOURNISSEUR<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1578
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeCaisse"]) || array_key_exists("formeCaisse", $context) ? $context["formeCaisse"] : (function () { throw new RuntimeError('Variable "formeCaisse" does not exist.', 1578, $this->source); })()), "fournisseur", [], "any", false, false, false, 1578), 'widget', ["id" => "sefone", "attr" => ["class" => "form-control ploc"]]);
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
                        <label class=\"form-label m-b--30 col-blue bolo\">LIGNES DU DEVIS POUR CHARGE
                            PREVISIONNELLE</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                <select id=\"libudgetFour\" class=\"form-control form-select\">
                                    <option value=\"\">-- Faites votre choix svp !--</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-7\">
                        <label class=\"form-label m-b--30 col-blue bolo\">POINTS DE PAIE</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1615
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeCaisse"]) || array_key_exists("formeCaisse", $context) ? $context["formeCaisse"] : (function () { throw new RuntimeError('Variable "formeCaisse" does not exist.', 1615, $this->source); })()), "paie", [], "any", false, false, false, 1615), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
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
        // line 1624
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeCaisse"]) || array_key_exists("formeCaisse", $context) ? $context["formeCaisse"] : (function () { throw new RuntimeError('Variable "formeCaisse" does not exist.', 1624, $this->source); })()), "date", [], "any", false, false, false, 1624), 'widget', ["required" => "", "attr" => ["class" => "form-control datepicker"]]);
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
        // line 1634
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeCaisse"]) || array_key_exists("formeCaisse", $context) ? $context["formeCaisse"] : (function () { throw new RuntimeError('Variable "formeCaisse" does not exist.', 1634, $this->source); })()), "moyen", [], "any", false, false, false, 1634), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
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
        // line 1644
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeCaisse"]) || array_key_exists("formeCaisse", $context) ? $context["formeCaisse"] : (function () { throw new RuntimeError('Variable "formeCaisse" does not exist.', 1644, $this->source); })()), "monnaie", [], "any", false, false, false, 1644), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">TYPE D'OPÉRATION</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1652
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeCaisse"]) || array_key_exists("formeCaisse", $context) ? $context["formeCaisse"] : (function () { throw new RuntimeError('Variable "formeCaisse" does not exist.', 1652, $this->source); })()), "operation", [], "any", false, false, false, 1652), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 1663
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeCaisse"]) || array_key_exists("formeCaisse", $context) ? $context["formeCaisse"] : (function () { throw new RuntimeError('Variable "formeCaisse" does not exist.', 1663, $this->source); })()), "caissereference", [], "any", false, false, false, 1663), 'widget', ["id" => "editor16", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    <input type=\"submit\" id=\"addxCaisse\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect col-white bg-blue\">
                    <img src=\"";
        // line 1671
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadxCaisse\"></div>
                ";
        // line 1673
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formeCaisse"]) || array_key_exists("formeCaisse", $context) ? $context["formeCaisse"] : (function () { throw new RuntimeError('Variable "formeCaisse" does not exist.', 1673, $this->source); })()), 'form_end');
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
        // line 1705
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 1705, $this->source); })()), 'form_start', ["attr" => ["id" => "addCaissePersonnelForm"]]);
        yield "
                ";
        // line 1706
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 1706, $this->source); })()), "_token", [], "any", false, false, false, 1706), 'row');
        yield "
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-4\">
                        <label class=\"form-label m-b--30 col-blue bolo\">DATE<span class=\"col-red\">*</span>
                        </label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1713
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 1713, $this->source); })()), "date", [], "any", false, false, false, 1713), 'widget', ["required" => "", "attr" => ["class" => "form-control datepicker"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-8\">
                        <label class=\"form-label m-b--30 col-blue bolo\">POINTS DE PAIE</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1721
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 1721, $this->source); })()), "paie", [], "any", false, false, false, 1721), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
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
        // line 1731
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 1731, $this->source); })()), "moyen", [], "any", false, false, false, 1731), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
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
        // line 1741
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 1741, $this->source); })()), "personnel", [], "any", false, false, false, 1741), 'widget', ["required" => "required", "attr" => ["class" => "form-control"]]);
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
        // line 1751
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 1751, $this->source); })()), "monnaie", [], "any", false, false, false, 1751), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">TYPE D'OPÉRATION</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1759
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 1759, $this->source); })()), "operation", [], "any", false, false, false, 1759), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 1769
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 1769, $this->source); })()), "genre", [], "any", false, false, false, 1769), 'widget', ["required" => "required", "attr" => ["class" => "form-control"]]);
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
        // line 1780
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 1780, $this->source); })()), "caissereference", [], "any", false, false, false, 1780), 'widget', ["id" => "editor20", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    <input type=\"submit\" id=\"addarCaissePersonnel\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect col-white bg-blue\">
                    <img src=\"";
        // line 1788
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadarCaissePersonnel\"></div>
                ";
        // line 1790
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCaissePerso"]) || array_key_exists("formCaissePerso", $context) ? $context["formCaissePerso"] : (function () { throw new RuntimeError('Variable "formCaissePerso" does not exist.', 1790, $this->source); })()), 'form_end');
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
        // line 1806
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formInterne"]) || array_key_exists("formInterne", $context) ? $context["formInterne"] : (function () { throw new RuntimeError('Variable "formInterne" does not exist.', 1806, $this->source); })()), 'form_start', ["attr" => ["id" => "addInterForm"]]);
        yield "
                ";
        // line 1807
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formInterne"]) || array_key_exists("formInterne", $context) ? $context["formInterne"] : (function () { throw new RuntimeError('Variable "formInterne" does not exist.', 1807, $this->source); })()), "_token", [], "any", false, false, false, 1807), 'row');
        yield "
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 pri bolo\">CHARGE INTERNE<span class=\"col-red\">*</span>
                        </label>
                        <div class=\"form-group\">
                            <div class=\"form-line col-pink\">
                                ";
        // line 1814
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formInterne"]) || array_key_exists("formInterne", $context) ? $context["formInterne"] : (function () { throw new RuntimeError('Variable "formInterne" does not exist.', 1814, $this->source); })()), "noms", [], "any", false, false, false, 1814), 'widget', ["required" => "required", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    <input type=\"submit\" id=\"addInter\" value=\"ENREGISTRER\" class=\"btn waves-effect col-white bg-blue\">
                    <img src=\"";
        // line 1821
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadInter\"></div>
                ";
        // line 1823
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formInterne"]) || array_key_exists("formInterne", $context) ? $context["formInterne"] : (function () { throw new RuntimeError('Variable "formInterne" does not exist.', 1823, $this->source); })()), 'form_end');
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
        // line 1839
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCaisseCharge"]) || array_key_exists("formCaisseCharge", $context) ? $context["formCaisseCharge"] : (function () { throw new RuntimeError('Variable "formCaisseCharge" does not exist.', 1839, $this->source); })()), 'form_start', ["attr" => ["id" => "addCaisseChargeForm"]]);
        yield "
                ";
        // line 1840
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisseCharge"]) || array_key_exists("formCaisseCharge", $context) ? $context["formCaisseCharge"] : (function () { throw new RuntimeError('Variable "formCaisseCharge" does not exist.', 1840, $this->source); })()), "_token", [], "any", false, false, false, 1840), 'row');
        yield "
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-4\">
                        <label class=\"form-label m-b--30 col-blue bolo\">DATE<span class=\"col-red\">*</span>
                        </label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1847
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisseCharge"]) || array_key_exists("formCaisseCharge", $context) ? $context["formCaisseCharge"] : (function () { throw new RuntimeError('Variable "formCaisseCharge" does not exist.', 1847, $this->source); })()), "date", [], "any", false, false, false, 1847), 'widget', ["required" => "", "attr" => ["class" => "form-control datepicker"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-8\">
                        <label class=\"form-label m-b--30 col-blue bolo\">POINTS DE PAIE</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1855
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisseCharge"]) || array_key_exists("formCaisseCharge", $context) ? $context["formCaisseCharge"] : (function () { throw new RuntimeError('Variable "formCaisseCharge" does not exist.', 1855, $this->source); })()), "paie", [], "any", false, false, false, 1855), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
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
        // line 1865
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisseCharge"]) || array_key_exists("formCaisseCharge", $context) ? $context["formCaisseCharge"] : (function () { throw new RuntimeError('Variable "formCaisseCharge" does not exist.', 1865, $this->source); })()), "moyen", [], "any", false, false, false, 1865), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
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
        // line 1875
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisseCharge"]) || array_key_exists("formCaisseCharge", $context) ? $context["formCaisseCharge"] : (function () { throw new RuntimeError('Variable "formCaisseCharge" does not exist.', 1875, $this->source); })()), "personnel", [], "any", false, false, false, 1875), 'widget', ["required" => "required", "attr" => ["class" => "form-control"]]);
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
        // line 1885
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisseCharge"]) || array_key_exists("formCaisseCharge", $context) ? $context["formCaisseCharge"] : (function () { throw new RuntimeError('Variable "formCaisseCharge" does not exist.', 1885, $this->source); })()), "monnaie", [], "any", false, false, false, 1885), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">TYPE D'OPÉRATION</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1893
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisseCharge"]) || array_key_exists("formCaisseCharge", $context) ? $context["formCaisseCharge"] : (function () { throw new RuntimeError('Variable "formCaisseCharge" does not exist.', 1893, $this->source); })()), "operation", [], "any", false, false, false, 1893), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 1904
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisseCharge"]) || array_key_exists("formCaisseCharge", $context) ? $context["formCaisseCharge"] : (function () { throw new RuntimeError('Variable "formCaisseCharge" does not exist.', 1904, $this->source); })()), "caissereference", [], "any", false, false, false, 1904), 'widget', ["id" => "editor19", "attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\">
                    <input type=\"submit\" id=\"addiosCaisse\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect col-white bg-blue\">
                    <img src=\"";
        // line 1912
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadiosCaisse\"></div>
                ";
        // line 1914
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCaisseCharge"]) || array_key_exists("formCaisseCharge", $context) ? $context["formCaisseCharge"] : (function () { throw new RuntimeError('Variable "formCaisseCharge" does not exist.', 1914, $this->source); })()), 'form_end');
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
                <i class=\"btn material-icons float-lg-right col-pink\" id=\"closefra\"
                   style=\"font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important;\">clear</i>
                <h6 style=\"margin: 15px 0 0 10px; color: black; font-weight: bold\">NUMÉROTATION DES ENTITÉS</h6>
            </div>
            <div class=\"modal-body\" style=\"height:80vh;padding:20px !important; overflow-y: scroll\" id=\"shacompte\">
                ";
        // line 1968
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 1968, $this->source); })()), 'form_start', ["attr" => ["id" => "addFCompteForm"]]);
        yield "
                ";
        // line 1969
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 1969, $this->source); })()), "_token", [], "any", false, false, false, 1969), 'row');
        yield "
                <div class=\"row clearfix m-b-10\" style=\"margin-top:20px\">
                    <div class=\"col-sm-4\">
                        <label class=\"form-label m-b--30 font-weight-bold\" style=\"color: #6666dc\">Nº Client<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 1976
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 1976, $this->source); })()), "coclient", [], "any", false, false, false, 1976), 'widget', ["attr" => ["class" => "form-control text-paimary"]]);
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
        // line 1985
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 1985, $this->source); })()), "compteDevis", [], "any", false, false, false, 1985), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 1994
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 1994, $this->source); })()), "compteReglement", [], "any", false, false, false, 1994), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 2005
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 2005, $this->source); })()), "compteFournisseur", [], "any", false, false, false, 2005), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 2014
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 2014, $this->source); })()), "comptePrestataire", [], "any", false, false, false, 2014), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 2023
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 2023, $this->source); })()), "compteMateriel", [], "any", false, false, false, 2023), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 2034
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 2034, $this->source); })()), "compteBonFournisseur", [], "any", false, false, false, 2034), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 2043
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 2043, $this->source); })()), "compteBonPrestataire", [], "any", false, false, false, 2043), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 2052
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 2052, $this->source); })()), "compteLivraison", [], "any", false, false, false, 2052), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 2063
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 2063, $this->source); })()), "compteCaisse", [], "any", false, false, false, 2063), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 2072
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 2072, $this->source); })()), "compteFacture", [], "any", false, false, false, 2072), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 2081
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 2081, $this->source); })()), "compteDecompte", [], "any", false, false, false, 2081), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 2092
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 2092, $this->source); })()), "compteFichier", [], "any", false, false, false, 2092), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 2101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 2101, $this->source); })()), "comptePlanning", [], "any", false, false, false, 2101), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 2110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 2110, $this->source); })()), "compteTache", [], "any", false, false, false, 2110), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 2121
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 2121, $this->source); })()), "sigle", [], "any", false, false, false, 2121), 'widget', ["attr" => ["class" => "form-control text-paimary"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\" style=\"margin-top:30px\">
                    <input type=\"submit\" value=\"MODIFIER\" class=\"btn waves-effect text-white bg-success\">
                </div>
                ";
        // line 2129
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 2129, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>
<div class=\"container\">
    <div class=\"row justify-content-center\" style=\"margin-top:60px\">
        <div class=\"col-xl-9 col-md-9\">
            <h3 class=\"tet text-white text-center font-weight-bold\">CARLINBLEU - OPTION GESTION TECHNIQUE</h3>
            <h5 class=\"text-center\" style=\"color:#efd807; \">
                BIENVENUE ";
        // line 2139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2139, $this->source); })()), "user", [], "any", false, false, false, 2139), "nom", [], "any", false, false, false, 2139)), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2139, $this->source); })()), "user", [], "any", false, false, false, 2139), "prenoms", [], "any", false, false, false, 2139)), "html", null, true);
        yield " </h5>


            <section class=\"features-icons  text-center\" style=\"padding: 0 !important; margin-top: 30px\">
                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\" style=\"margin-top: 10px !important\">
                    <a href=\"";
        // line 2144
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
        // line 2153
        if ((($tmp =  !(isset($context["ismobile"]) || array_key_exists("ismobile", $context) ? $context["ismobile"] : (function () { throw new RuntimeError('Variable "ismobile" does not exist.', 2153, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2154
            yield "                        <div class=\"row\" style='margin:10px 0 15px 0;'>
                            <div class=\"d-grid gap-2 col-3 mx-auto\">
                                <button onclick=\"modalClient();\" class=\"btn\" type=\"button\"
                                        style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">AJOUTER UN
                                    CLIENT
                                </button>
                                <button onclick=\"modalDevis();\" class=\"btn\" type=\"button\"
                                        style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">CRÉER UN DEVIS
                                </button>
                                <button onclick=\"modalPrestataire();\" class=\"btn\" type=\"button\"
                                        style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">AJOUTER UN
                                    PRESTATAIRE
                                </button>
                            </div>
                            <div class=\"d-grid gap-2 col-3 mx-auto\">
                                <button onclick=\"modalChantier();\" class=\"btn\" type=\"button\"
                                        style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">AJOUTER UN
                                    CHANTIER
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
                                <button onclick=\"modalBonFournisseur();\" class=\"btn\" type=\"button\"
                                        style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">BON
                                    FOURNISSEURS
                                </button>
                            </div>
                        </div>
                    ";
        }
        // line 2200
        yield "                    ";
        if ((($tmp = (isset($context["ismobile"]) || array_key_exists("ismobile", $context) ? $context["ismobile"] : (function () { throw new RuntimeError('Variable "ismobile" does not exist.', 2200, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2201
            yield "                        <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\">
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
        // line 2287
        yield "                    <h5 class=\"text-center\"
                        style=\"color:#82e3a6;font-weight: bold; margin-top: 60px; font-size: 16px  \">CONSULTER DES
                        ENREGISTREMENTS</h5>

                    <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\" style=\"margin-top: 10px !important\">
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
                            SOLDE DE COMPTE
                        </button>
                        <button onclick=\"shashar('rapportchantier');\" class=\"btn\"
                                style=\"background-color: #e86c20; color: #FFF; margin-left: 5px\">
                            SUIVI DE CHANTIERS
                        </button>
                    </div>
                    <div class=\"row\" style='margin:10px 0 15px 0;'>
                        ";
        // line 2310
        if ((($tmp =  !(isset($context["ismobile"]) || array_key_exists("ismobile", $context) ? $context["ismobile"] : (function () { throw new RuntimeError('Variable "ismobile" does not exist.', 2310, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2311
            yield "                            <div class=\"row\" style='margin:10px 0 15px 0;'>
                                <div class=\"d-grid gap-2 col-3 mx-auto\">
                                    <button onclick=\"shashar('listeclient');\" class=\"btn\" type=\"button\"
                                            style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">LISTE DES
                                        CLIENTS
                                    </button>
                                    <button onclick=\"shashar('souschantier');\" class=\"btn\" type=\"button\"
                                            style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">SOUS
                                        CHANTIERS
                                    </button>
                                    <button onclick=\"shashar('chantieretude');\" class=\"btn\" type=\"button\"
                                            style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">CHANTIERS EN
                                        ÉTUDE
                                    </button>
                                    <button onclick=\"shashar('chantiersclotures');\" class=\"btn\" type=\"button\"
                                            style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">CHANTIERS
                                        CLÔTURÉS
                                    </button>
                                    <button onclick=\"shashar('parametre');\" class=\"btn\" type=\"button\"
                                            style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">PARAMÈTRES
                                    </button>
                                    <button onclick=\"shashar('message');\" class=\"btn\" type=\"button\"
                                            style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">MESSAGERIE
                                    </button>
                                </div>
                                <div class=\"d-grid gap-2 col-3 mx-auto\">
                                    <button onclick=\"shashar('chantiercours');\" class=\"btn\" type=\"button\"
                                            style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">CHANTIERS EN
                                        COURS
                                    </button>
                                    <button onclick=\"shashar('chantierstermines');\" class=\"btn\" type=\"button\"
                                            style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">CHANTIERS
                                        TERMINÉS
                                    </button>
                                    <button onclick=\"shashar('chantierechouer');\" class=\"btn\" type=\"button\"
                                            style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">CHANTIERS
                                        ÉCHOUÉS
                                    </button>
                                    <button onclick=\"shashar('chantierstous');\" class=\"btn\" type=\"button\"
                                            style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">TOUS LES
                                        CHANTIERS
                                    </button>
                                    <button onclick=\"shashar('historique');\" class=\"btn\" type=\"button\"
                                            style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">HISTORIQUE
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
                                            style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">LISTE DES
                                        FOURNISSEURS
                                    </button>
                                    <button onclick=\"shashar('chargespersonnelles');\" class=\"btn\" type=\"button\"
                                            style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">CHARGES DU
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
                                            style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">LISTE DES
                                        CONTACTS
                                    </button>
                                    <button onclick=\"shashar('prestataire');\" class=\"btn\" type=\"button\"
                                            style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">LISTE DES
                                        PRESTATAIRES
                                    </button>
                                    <button onclick=\"shashar('chargesinternes');\" class=\"btn\" type=\"button\"
                                            style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">CHARGES
                                        INTERNES
                                    </button>
                                    <button onclick=\"shashar('tresorerie');\" class=\"btn\" type=\"button\"
                                            style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">GESTION DE
                                        TRÉSORERIE
                                    </button>
                                    <button onclick=\"shashar('corbeille');\" class=\"btn\" type=\"button\"
                                            style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">CORBEILLE
                                    </button>
                                    <a href=\"";
            // line 2406
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            yield "\" class=\"btn bg-pink col-white\" type=\"button\"
                                       style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">SE DÉCONNECTER
                                    </a>
                                </div>
                            </div>
                        ";
        }
        // line 2412
        yield "                    </div>
                    ";
        // line 2413
        if ((($tmp = (isset($context["ismobile"]) || array_key_exists("ismobile", $context) ? $context["ismobile"] : (function () { throw new RuntimeError('Variable "ismobile" does not exist.', 2413, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2414
            yield "                        <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\">
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
            // line 2526
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            yield "\" class=\"btn bg-pink\"
                               style=\" color: #FFF; font-size: 11px;border: 1px solid #989898;width: 115px; margin-left: 5px\">
                                SE DÉCONNECTER
                            </a>
                        </div>
                    ";
        }
        // line 2532
        yield "                    <div class=\"row\" style='margin:10px 0 15px 0;'>
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
        // line 2571
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["exercices"]) || array_key_exists("exercices", $context) ? $context["exercices"] : (function () { throw new RuntimeError('Variable "exercices" does not exist.', 2571, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["exer"]) {
            // line 2572
            yield "                                <tr>
                                    <td><a href=\"#\" onclick=\"shashar('exercices/";
            // line 2573
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["exer"], "id", [], "any", false, false, false, 2573), "html", null, true);
            yield "');\"
                                           style=\"font-size:15px !important; font-weight:normal\"
                                           class=\"col-black\"># ";
            // line 2575
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["exer"], "exercice", [], "any", false, false, false, 2575), "html", null, true);
            yield "</a>
                                        <br>
                                        <span>
                                            <a href=\"#\" onclick=\"shashar('exercices/";
            // line 2578
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["exer"], "id", [], "any", false, false, false, 2578), "html", null, true);
            yield "');\"
                                               style=\"font-size:14px !important; font-weight:normal\"
                                               class=\"col-pink bolo600\">
                                                ( Du: ";
            // line 2581
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["exer"], "debut", [], "any", false, false, false, 2581), "d-m-Y"), "html", null, true);
            yield " | Au: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["exer"], "fin", [], "any", false, false, false, 2581), "d-m-Y"), "html", null, true);
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
        // line 2591
        yield "                        </table>
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
        // line 2603
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["chans"]) || array_key_exists("chans", $context) ? $context["chans"] : (function () { throw new RuntimeError('Variable "chans" does not exist.', 2603, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["chan"]) {
            // line 2604
            yield "                            ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chan"], "corbeille", [], "any", false, false, false, 2604))) {
                // line 2605
                yield "                                <tr>
                                    <td colspan=\"2\" class=\"bg-blue text-white\"
                                        style=\"padding-left: 5px;\">
                                        <a href=\"";
                // line 2608
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["chan"], "client", [], "any", false, false, false, 2608), "id", [], "any", false, false, false, 2608)]), "html", null, true);
                yield "\"
                                           class=\"text-white\"
                                           title=\"";
                // line 2610
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["chan"], "client", [], "any", false, false, false, 2610), "nomclient", [], "any", false, false, false, 2610)), "html", null, true);
                yield "\">
                                            -
                                            ";
                // line 2612
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["chan"], "client", [], "any", false, false, false, 2612), "nomclient", [], "any", false, false, false, 2612)), "html", null, true);
                yield "
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style=\"padding-left: 5px\" colspan=\"2\" class=\"bg-light\">
                                        <a href=\"#\" onclick=\"shashar('chantier/";
                // line 2618
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chan"], "id", [], "any", false, false, false, 2618), "html", null, true);
                yield "');\" class=\"text-pri\"
                                           title=\"";
                // line 2619
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chan"], "nomchantier", [], "any", false, false, false, 2619)), "html", null, true);
                yield "\">
                                            # ";
                // line 2620
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chan"], "nomchantier", [], "any", false, false, false, 2620)), "html", null, true);
                yield "
                                        </a>
                                    </td>
                                </tr>
                            ";
            }
            // line 2625
            yield "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['chan'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2626
        yield "                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/locale/fr.min.js\"></script>


<script src=\"";
        // line 2639
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.slimscroll.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 2640
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.validate.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 2641
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-notify.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 2642
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/waves.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 2643
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/demo.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 2644
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/sortable-nestable.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 2645
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.nestable.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 2646
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.tableToExcel.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 2647
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/select2.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 2648
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/lightgallery-all.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 2649
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/image-gallery.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 2650
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/notifications.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 2651
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/autosize.js"), "html", null, true);
        yield "\"></script>

<script src=\"";
        // line 2653
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/admin.js"), "html", null, true);
        yield "\"></script>
<link href=\"";
        // line 2654
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("datetimepicker/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
<script src=\"";
        // line 2655
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("momentjs/moment.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 2656
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-material-datetimepicker.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 2657
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("datetimepicker/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 2658
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("datetimepicker/js/demo.js"), "html", null, true);
        yield "\"></script>

<script src=\"";
        // line 2660
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/datascript.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 2661
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("start/article.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 2662
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("start/contact.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 2663
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("start/decompte.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 2664
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("start/facture.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 2665
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("start/personnel.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 2666
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("start/caisse.js"), "html", null, true);
        yield "\"></script>
<script>
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
                window.location.href = '/crm/welcome/'
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
            window.location.href = '/crm/welcome/'
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
                    window.location.href = '/crm/welcome/'
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
    document.getElementById('close_add_exercices').onclick = function () {
        const modal = document.getElementById(\"app_exercices\");
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
    document.getElementById('closeframer').onclick = function () {
        const modal = document.getElementById(\"myModale\");
        modal.style.display = \"none\";
    }
    document.getElementById('closeframers').onclick = function () {
        const modal = document.getElementById(\"searcheur\");
        modal.style.display = \"none\";
    }
    document.getElementById('closefra').onclick = function () {
        \$('.modal').modal('hide');
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
        return "security/starte.html.twig";
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
        return array (  3729 => 2666,  3725 => 2665,  3721 => 2664,  3717 => 2663,  3713 => 2662,  3709 => 2661,  3705 => 2660,  3700 => 2658,  3696 => 2657,  3692 => 2656,  3688 => 2655,  3684 => 2654,  3680 => 2653,  3675 => 2651,  3671 => 2650,  3667 => 2649,  3663 => 2648,  3659 => 2647,  3655 => 2646,  3651 => 2645,  3647 => 2644,  3643 => 2643,  3639 => 2642,  3635 => 2641,  3631 => 2640,  3627 => 2639,  3612 => 2626,  3606 => 2625,  3598 => 2620,  3594 => 2619,  3590 => 2618,  3581 => 2612,  3576 => 2610,  3571 => 2608,  3566 => 2605,  3563 => 2604,  3559 => 2603,  3545 => 2591,  3527 => 2581,  3521 => 2578,  3515 => 2575,  3510 => 2573,  3507 => 2572,  3503 => 2571,  3462 => 2532,  3453 => 2526,  3339 => 2414,  3337 => 2413,  3334 => 2412,  3325 => 2406,  3228 => 2311,  3226 => 2310,  3201 => 2287,  3113 => 2201,  3110 => 2200,  3062 => 2154,  3060 => 2153,  3048 => 2144,  3038 => 2139,  3025 => 2129,  3014 => 2121,  3000 => 2110,  2988 => 2101,  2976 => 2092,  2962 => 2081,  2950 => 2072,  2938 => 2063,  2924 => 2052,  2912 => 2043,  2900 => 2034,  2886 => 2023,  2874 => 2014,  2862 => 2005,  2848 => 1994,  2836 => 1985,  2824 => 1976,  2814 => 1969,  2810 => 1968,  2753 => 1914,  2748 => 1912,  2737 => 1904,  2723 => 1893,  2712 => 1885,  2699 => 1875,  2686 => 1865,  2673 => 1855,  2662 => 1847,  2652 => 1840,  2648 => 1839,  2629 => 1823,  2624 => 1821,  2614 => 1814,  2604 => 1807,  2600 => 1806,  2581 => 1790,  2576 => 1788,  2565 => 1780,  2551 => 1769,  2538 => 1759,  2527 => 1751,  2514 => 1741,  2501 => 1731,  2488 => 1721,  2477 => 1713,  2467 => 1706,  2463 => 1705,  2428 => 1673,  2423 => 1671,  2412 => 1663,  2398 => 1652,  2387 => 1644,  2374 => 1634,  2361 => 1624,  2349 => 1615,  2309 => 1578,  2299 => 1571,  2295 => 1570,  2276 => 1554,  2270 => 1551,  2259 => 1543,  2245 => 1532,  2234 => 1524,  2221 => 1514,  2208 => 1504,  2196 => 1495,  2156 => 1458,  2146 => 1451,  2142 => 1450,  2123 => 1434,  2117 => 1431,  2105 => 1422,  2092 => 1412,  2081 => 1404,  2068 => 1394,  2057 => 1386,  2044 => 1376,  2033 => 1368,  2020 => 1358,  2007 => 1348,  1993 => 1337,  1981 => 1328,  1971 => 1321,  1967 => 1320,  1948 => 1304,  1941 => 1300,  1929 => 1291,  1916 => 1281,  1905 => 1273,  1892 => 1263,  1881 => 1255,  1868 => 1245,  1857 => 1237,  1844 => 1227,  1831 => 1217,  1819 => 1208,  1809 => 1201,  1805 => 1200,  1786 => 1184,  1780 => 1181,  1769 => 1173,  1758 => 1165,  1745 => 1155,  1734 => 1147,  1721 => 1137,  1706 => 1125,  1680 => 1102,  1668 => 1093,  1658 => 1086,  1654 => 1085,  1635 => 1069,  1628 => 1065,  1617 => 1057,  1603 => 1046,  1587 => 1032,  1581 => 1031,  1578 => 1030,  1572 => 1029,  1569 => 1028,  1565 => 1026,  1559 => 1025,  1554 => 1023,  1550 => 1022,  1545 => 1021,  1542 => 1020,  1538 => 1019,  1532 => 1018,  1529 => 1017,  1526 => 1016,  1520 => 1015,  1517 => 1014,  1514 => 1013,  1511 => 1012,  1506 => 1011,  1503 => 1010,  1500 => 1009,  1495 => 1008,  1492 => 1007,  1488 => 1006,  1477 => 998,  1473 => 997,  1454 => 981,  1448 => 978,  1437 => 970,  1426 => 962,  1413 => 952,  1402 => 944,  1389 => 934,  1376 => 924,  1363 => 914,  1353 => 907,  1349 => 906,  1330 => 890,  1323 => 886,  1308 => 874,  1295 => 864,  1282 => 854,  1269 => 844,  1256 => 834,  1242 => 823,  1232 => 816,  1228 => 815,  1209 => 799,  1203 => 796,  1192 => 788,  1179 => 778,  1168 => 770,  1155 => 760,  1144 => 752,  1140 => 751,  1121 => 735,  1115 => 732,  1103 => 723,  1092 => 715,  1079 => 705,  1068 => 697,  1055 => 687,  1044 => 679,  1040 => 678,  1021 => 662,  1015 => 659,  1004 => 651,  991 => 641,  977 => 630,  963 => 619,  950 => 609,  938 => 600,  929 => 594,  925 => 593,  906 => 577,  901 => 575,  889 => 566,  877 => 557,  863 => 546,  851 => 537,  830 => 518,  824 => 517,  821 => 516,  815 => 515,  812 => 514,  808 => 512,  802 => 511,  797 => 509,  791 => 508,  786 => 507,  783 => 506,  777 => 505,  774 => 504,  771 => 503,  768 => 502,  763 => 501,  760 => 500,  756 => 499,  750 => 498,  747 => 497,  745 => 496,  742 => 495,  736 => 494,  733 => 493,  730 => 492,  727 => 491,  721 => 490,  718 => 489,  715 => 488,  712 => 487,  707 => 486,  704 => 485,  699 => 484,  696 => 483,  693 => 482,  688 => 481,  685 => 480,  681 => 479,  670 => 471,  666 => 470,  647 => 454,  642 => 452,  631 => 444,  618 => 434,  605 => 424,  594 => 416,  581 => 406,  570 => 398,  557 => 388,  546 => 380,  532 => 369,  521 => 361,  508 => 351,  497 => 343,  484 => 333,  471 => 323,  462 => 317,  458 => 316,  439 => 300,  434 => 298,  389 => 256,  376 => 246,  363 => 236,  350 => 226,  337 => 216,  323 => 205,  313 => 198,  309 => 197,  290 => 181,  284 => 178,  270 => 167,  257 => 157,  244 => 147,  231 => 137,  221 => 130,  217 => 129,  198 => 113,  192 => 110,  150 => 71,  140 => 64,  136 => 63,  101 => 31,  97 => 30,  93 => 29,  89 => 28,  85 => 27,  81 => 26,  77 => 25,  73 => 24,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html ; charset=utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Carlinbleu | Gestionnaire de Chantiers</title>
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

</head>

<body style=\"background-color:#3b3b3b\">
<div class=\"modal\" id=\"app_exercices\">
    <div class=\"modal-dialog\" style=\"max-width: 550px !important;\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:15px !important;\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"material-icons col-pink\" id=\"close_add_exercices\"
                   style=\"cursor:pointer;font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important; float: right\">clear</i>
                <p style=\"margin: 15px 0 10px 10px; color: #4e73df; font-weight: bold; font-size: 16px\">CRÉER UN
                    EXERCICE COMPTABLE</p>
            </div>
            <div class=\"modal-body\" style=\"height:50vh; width:100%; overflow-y: scroll\">
                {{ form_start(formExercices, {'attr': {'id': 'addExercicesForm'}}) }}
                <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addExercicesToken') }}\"/>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">EXERCICE COMPTABLE
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
                    <input type=\"submit\" id=\"addExercices\" value=\"ENREGISTRER\"
                           class=\"btn waves-effect text-white bg-pri\">

                    <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                         class=\"align-justify\" id=\"loadExercices\">
                </div>
                {{ form_end(formExercices) }}
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
                        <label class=\"form-label pri bolo\">CLIENT<span class=\"col-red\">*</span>
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
                        <label class=\"form-label pri bolo\">NOM DU CHANTIER<span class=\"col-red\">*</span>
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
                                {{ form_widget(formChantier.localisation,{'attr':{'class':'form-control chr'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label pri bolo\">SOUS-CHANTIER DU CHANTIER</label>
                        <div class=\"form-group m-t--5\">
                            <div class=\"form-line\">
                                {{ form_widget(formChantier.sous,{'required':'','attr':{'class':'form-control chr' }}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label pri bolo\">DESCRIPTION</label>
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
                                <input type=\"text\" placeholder=\"Date...\" id=\"dfin\" name=\"dfin\"
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
                        <label class=\"form-label m-b--30 pri bolo\">CHANTIER</label>
                        <div class=\"form-group\">
                            <div class=\"form-line col-pink\">
                                {{ form_widget(formDevis.chantier,{'required':'required','attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 pri bolo\">RÉFÉRENCE OU OBJET DU DEVIS</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formDevis.devreference,{'id': 'editor5','attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">TVA(%)</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formDevis.tva,{'attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">DATE</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formDevis.date,{'attr':{'class':'form-control datepicker' }}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">APPLIQUER LA TVA?</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formDevis.ptva,{'attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">AVEC BASE TVA?</label>
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
                        <label class=\"form-label m-b--30 pri bolo\">AVEC REMISE?</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formDevis.aarem,{'attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">AVEC COLONNE ZONE?</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formDevis.zone,{'attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">AVEC COLONNE RÉF?</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formDevis.aaref,{'attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">VALIDITÉ DU DEVIS</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formDevis.validit,{'attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">MODÈLE D'INFORMATION</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formDevis.modele,{'attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 pri bolo\">MODÈLE DE RÉSULTATS</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formDevis.model,{'attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 pri bolo\">DEVISE</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formDevis.monnaie,{'attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 pri bolo\">INFORMATIONS SUR LE DEVIS</label>
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
                    <div class=\"col-sm-7\">
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
                    <div class=\"col-sm-5\">
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
                    <div class=\"col-sm-12\">
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
                <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addCaissePrestataireToken') }}\"/>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">PRESTATAIRES<span
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
                        <label class=\"form-label m-b--30 col-blue bolo\">BON VALIDÉS
                            <span class=\"col-red\">*</span>
                        </label>
                        <div class=\"form-group\">
                            <div class=\"form-line col-pink\">
                                <select class=\"form-control selboner\" name=\"bon\"></select>
                            </div>
                            <p class=\"h6 diboner\" style=\"margin-top:5px !important\"></p>
                        </div>

                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">LIGNES DU DEVIS POUR CHARGE
                            PREVISIONNELLE</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                <select id=\"libudgetFoure\" class=\"form-control form-select\">
                                    <option value=\"\">-- Faites votre choix svp !--</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-7\">
                        <label class=\"form-label m-b--30 col-blue bolo\">POINTS DE PAIE</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formerCaisse.paie,{'required':'','attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-5\">
                        <label class=\"form-label m-b--30 col-blue bolo\">DATE<span class=\"col-red\">*</span>
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
                        <label class=\"form-label m-b--30 col-blue bolo\">MOYEN DE PAIEMENT</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formerCaisse.moyen,{'required':'','attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">DEVISE</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formerCaisse.monnaie,{'attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">TYPE D'OPÉRATION</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formerCaisse.operation,{'attr':{'class':'form-control' }}) }}
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
                                {{ form_widget(formerCaisse.caissereference,{'id':'editor15','attr':{'class':'form-control' }}) }}
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
                <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addCaisseFournisseurToken') }}\"/>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label m-b--30 col-blue bolo\">FOURNISSEUR<span
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
                        <label class=\"form-label m-b--30 col-blue bolo\">LIGNES DU DEVIS POUR CHARGE
                            PREVISIONNELLE</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                <select id=\"libudgetFour\" class=\"form-control form-select\">
                                    <option value=\"\">-- Faites votre choix svp !--</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-7\">
                        <label class=\"form-label m-b--30 col-blue bolo\">POINTS DE PAIE</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formeCaisse.paie,{'required':'','attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-5\">
                        <label class=\"form-label m-b--30 col-blue bolo\">DATE<span class=\"col-red\">*</span>
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
                        <label class=\"form-label m-b--30 col-blue bolo\">MOYEN DE PAIEMENT</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formeCaisse.moyen,{'required':'','attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row clearfix m-b-10\">
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">DEVISE</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formeCaisse.monnaie,{'attr':{'class':'form-control' }}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"form-label m-b--30 col-blue bolo\">TYPE D'OPÉRATION</label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                {{ form_widget(formeCaisse.operation,{'attr':{'class':'form-control' }}) }}
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
                                {{ form_widget(formeCaisse.caissereference,{'id':'editor16','attr':{'class':'form-control' }}) }}
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
                <i class=\"btn material-icons float-lg-right col-pink\" id=\"closefra\"
                   style=\"font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important;\">clear</i>
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
<div class=\"container\">
    <div class=\"row justify-content-center\" style=\"margin-top:60px\">
        <div class=\"col-xl-9 col-md-9\">
            <h3 class=\"tet text-white text-center font-weight-bold\">CARLINBLEU - OPTION GESTION TECHNIQUE</h3>
            <h5 class=\"text-center\" style=\"color:#efd807; \">
                BIENVENUE {{ app.user.nom|upper }} {{ app.user.prenoms|upper }} </h5>


            <section class=\"features-icons  text-center\" style=\"padding: 0 !important; margin-top: 30px\">
                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\" style=\"margin-top: 10px !important\">
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
                                        style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">CRÉER UN DEVIS
                                </button>
                                <button onclick=\"modalPrestataire();\" class=\"btn\" type=\"button\"
                                        style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">AJOUTER UN
                                    PRESTATAIRE
                                </button>
                            </div>
                            <div class=\"d-grid gap-2 col-3 mx-auto\">
                                <button onclick=\"modalChantier();\" class=\"btn\" type=\"button\"
                                        style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">AJOUTER UN
                                    CHANTIER
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
                                <button onclick=\"modalBonFournisseur();\" class=\"btn\" type=\"button\"
                                        style=\"background-color: #4e73df;color: #d9d9d9; font-size: 13px\">BON
                                    FOURNISSEURS
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

                    <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\" style=\"margin-top: 10px !important\">
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
                            SOLDE DE COMPTE
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
                                            style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">LISTE DES
                                        CLIENTS
                                    </button>
                                    <button onclick=\"shashar('souschantier');\" class=\"btn\" type=\"button\"
                                            style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">SOUS
                                        CHANTIERS
                                    </button>
                                    <button onclick=\"shashar('chantieretude');\" class=\"btn\" type=\"button\"
                                            style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">CHANTIERS EN
                                        ÉTUDE
                                    </button>
                                    <button onclick=\"shashar('chantiersclotures');\" class=\"btn\" type=\"button\"
                                            style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">CHANTIERS
                                        CLÔTURÉS
                                    </button>
                                    <button onclick=\"shashar('parametre');\" class=\"btn\" type=\"button\"
                                            style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">PARAMÈTRES
                                    </button>
                                    <button onclick=\"shashar('message');\" class=\"btn\" type=\"button\"
                                            style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">MESSAGERIE
                                    </button>
                                </div>
                                <div class=\"d-grid gap-2 col-3 mx-auto\">
                                    <button onclick=\"shashar('chantiercours');\" class=\"btn\" type=\"button\"
                                            style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">CHANTIERS EN
                                        COURS
                                    </button>
                                    <button onclick=\"shashar('chantierstermines');\" class=\"btn\" type=\"button\"
                                            style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">CHANTIERS
                                        TERMINÉS
                                    </button>
                                    <button onclick=\"shashar('chantierechouer');\" class=\"btn\" type=\"button\"
                                            style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">CHANTIERS
                                        ÉCHOUÉS
                                    </button>
                                    <button onclick=\"shashar('chantierstous');\" class=\"btn\" type=\"button\"
                                            style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">TOUS LES
                                        CHANTIERS
                                    </button>
                                    <button onclick=\"shashar('historique');\" class=\"btn\" type=\"button\"
                                            style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">HISTORIQUE
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
                                            style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">LISTE DES
                                        FOURNISSEURS
                                    </button>
                                    <button onclick=\"shashar('chargespersonnelles');\" class=\"btn\" type=\"button\"
                                            style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">CHARGES DU
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
                                            style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">LISTE DES
                                        CONTACTS
                                    </button>
                                    <button onclick=\"shashar('prestataire');\" class=\"btn\" type=\"button\"
                                            style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">LISTE DES
                                        PRESTATAIRES
                                    </button>
                                    <button onclick=\"shashar('chargesinternes');\" class=\"btn\" type=\"button\"
                                            style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">CHARGES
                                        INTERNES
                                    </button>
                                    <button onclick=\"shashar('tresorerie');\" class=\"btn\" type=\"button\"
                                            style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">GESTION DE
                                        TRÉSORERIE
                                    </button>
                                    <button onclick=\"shashar('corbeille');\" class=\"btn\" type=\"button\"
                                            style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">CORBEILLE
                                    </button>
                                    <a href=\"{{ path('logout') }}\" class=\"btn bg-pink col-white\" type=\"button\"
                                       style=\"color: #FFF; font-size: 13px; border: 1px solid #989898\">SE DÉCONNECTER
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
</body>
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
                window.location.href = '/crm/welcome/'
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
            window.location.href = '/crm/welcome/'
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
                    window.location.href = '/crm/welcome/'
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
    document.getElementById('close_add_exercices').onclick = function () {
        const modal = document.getElementById(\"app_exercices\");
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
    document.getElementById('closeframer').onclick = function () {
        const modal = document.getElementById(\"myModale\");
        modal.style.display = \"none\";
    }
    document.getElementById('closeframers').onclick = function () {
        const modal = document.getElementById(\"searcheur\");
        modal.style.display = \"none\";
    }
    document.getElementById('closefra').onclick = function () {
        \$('.modal').modal('hide');
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
", "security/starte.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\security\\starte.html.twig");
    }
}
