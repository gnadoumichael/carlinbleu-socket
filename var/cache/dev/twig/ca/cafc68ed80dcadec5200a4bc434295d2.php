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

/* content/planning.html.twig */
class __TwigTemplate_0a3f308d0585cdd4d6c4006b8c421946 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/planning.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/planning.html.twig"));

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


    <script crossorigin=\"anonymous\" integrity=\"sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f\"
            src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>


    <link href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("datetimepicker/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
    <link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\"/>
    <script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
    <script src=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("datetimepicker/momentjs/moment.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("datetimepicker/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("datetimepicker/js/demo.js"), "html", null, true);
        yield "\"></script>


    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"https://www.carlinbleu.com/img/Icon-96.png\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css\"/>

    <link href=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/chat.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>

    ";
        // line 39
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
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

<div class=\"modal fade right\" id=\"mdModalPlanning\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header text-white bg-green p-l-20 hide\" id=\"plfa\">
                <h3 class=\"modal-title\" id=\"defaultModalLabel\">MODIFIER UN PLANNING</h3>
            </div>

            <div class=\"modal-header text-white bg-pri p-l-20\" id=\"plfb\">
                <h3 class=\"modal-title\" id=\"defaultModalLabel\">CRÉER UN PLANNING</h3>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    ";
        // line 138
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPlan"]) || array_key_exists("formPlan", $context) ? $context["formPlan"] : (function () { throw new RuntimeError('Variable "formPlan" does not exist.', 138, $this->source); })()), 'form_start', ["attr" => ["id" => "addPlanningForm"]]);
        yield "
                    <input type=\"hidden\" name=\"token\" value=\"";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addPlanToken"), "html", null, true);
        yield "\"/>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label col-blue bolo\">CHANTIER<span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    ";
        // line 146
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPlan"]) || array_key_exists("formPlan", $context) ? $context["formPlan"] : (function () { throw new RuntimeError('Variable "formPlan" does not exist.', 146, $this->source); })()), "chantier", [], "any", false, false, false, 146), 'widget', ["id" => "chantier", "attr" => ["class" => "form-control clos"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label col-blue bolo\">PLANNING<span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    ";
        // line 157
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPlan"]) || array_key_exists("formPlan", $context) ? $context["formPlan"] : (function () { throw new RuntimeError('Variable "formPlan" does not exist.', 157, $this->source); })()), "planning", [], "any", false, false, false, 157), 'widget', ["id" => "plany", "attr" => ["class" => "form-control clos"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <div class=\"hide\" id=\"divupdplan\">
                            <input type=\"submit\" id=\"updPlanning\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect text-white bg-green\">
                            <a href=\"\" id=\"closePlanning\"
                               class=\"btn btn-link waves-effect text-white bg-pink\">
                                ANNULER
                            </a>
                        </div>
                        <div id=\"divaddplan\">
                            <input type=\"submit\" id=\"addePlanning\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-pri\">
                            <div type=\"button\" id=\"closePlanning\"
                                 class=\"btn btn-link waves-effect text-white bg-pink\" data-dismiss=\"modal\">
                                FERMER
                            </div>
                        </div>
                        <img src=\"";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadPlanning\">
                    </div>
                    ";
        // line 182
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPlan"]) || array_key_exists("formPlan", $context) ? $context["formPlan"] : (function () { throw new RuntimeError('Variable "formPlan" does not exist.', 182, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"mdModalSection\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">>
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">

            <div class=\"modal-header text-white bg-green p-l-20 hide\" id=\"slfa\">
                <h3 class=\"modal-title\" id=\"defaultModalLabel\">MODIFIER UNE ZONE</h3>
            </div>

            <div class=\"modal-header text-white bg-pri p-l-20\" id=\"slfb\">
                <h3 class=\"modal-title\" id=\"defaultModalLabel\">AJOUTER UNE SECTION</h3>
            </div>

            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    ";
        // line 203
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSection"]) || array_key_exists("formSection", $context) ? $context["formSection"] : (function () { throw new RuntimeError('Variable "formSection" does not exist.', 203, $this->source); })()), 'form_start', ["attr" => ["id" => "addSectionForm"]]);
        yield "
                    <input type=\"hidden\" name=\"token\" value=\"";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addSectionToken"), "html", null, true);
        yield "\"/>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label col-blue bolo\">CHOISIR UN PLANNING<span
                                        class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    <select class=\"form-control selplanning clost\" name=\"planning\"
                                            id=\"planning\"></select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label col-blue bolo\">SECTION<span class=\"col-red\">*</span>&nbsp;
                            </label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    ";
        // line 224
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formSection"]) || array_key_exists("formSection", $context) ? $context["formSection"] : (function () { throw new RuntimeError('Variable "formSection" does not exist.', 224, $this->source); })()), "libelle", [], "any", false, false, false, 224), 'widget', ["id" => "secty", "attr" => ["class" => "form-control clost"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"text-center\">
                        <div class=\"hide\" id=\"divupdSection\">
                            <input type=\"submit\" id=\"updSection\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect text-white bg-green\">
                            <a href=\"\" id=\"closeSection\"
                               class=\"btn btn-link waves-effect text-white bg-pink\">
                                ANNULER
                            </a>
                        </div>
                        <div id=\"divaddSection\">
                            <input type=\"submit\" id=\"addeSection\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-pri\">
                            <div type=\"button\" id=\"closeSection\"
                                 class=\"btn btn-link waves-effect text-white bg-pink\" data-dismiss=\"modal\">
                                FERMER
                            </div>
                        </div>

                        <img src=\"";
        // line 248
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadSection\">
                    </div>
                    <br><br><br>
                    ";
        // line 252
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSection"]) || array_key_exists("formSection", $context) ? $context["formSection"] : (function () { throw new RuntimeError('Variable "formSection" does not exist.', 252, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"mdModalTache\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header text-white bg-green p-l-20 hide\" id=\"tlfa\">
                <h3 class=\"modal-title\" id=\"defaultModalLabel\">MODIFIER UNE TACHE</h3>
            </div>

            <div class=\"modal-header text-white bg-pri p-l-20\" id=\"tlfb\">
                <h3 class=\"modal-title\" id=\"defaultModalLabel\">AJOUTER UNE TACHE</h3>
            </div>

            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    ";
        // line 272
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formTache"]) || array_key_exists("formTache", $context) ? $context["formTache"] : (function () { throw new RuntimeError('Variable "formTache" does not exist.', 272, $this->source); })()), 'form_start', ["attr" => ["id" => "addTacheForm"]]);
        yield "
                    <input type=\"hidden\" name=\"token\" value=\"";
        // line 273
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addTacheToken"), "html", null, true);
        yield "\"/>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label col-blue bolo\">SECTION
                                <span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    <select class=\"form-control selsection toc\" name=\"section\"
                                            id=\"tsection\"></select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label col-blue bolo\">ÉTAT
                                <span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    ";
        // line 294
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formTache"]) || array_key_exists("formTache", $context) ? $context["formTache"] : (function () { throw new RuntimeError('Variable "formTache" does not exist.', 294, $this->source); })()), "etat", [], "any", false, false, false, 294), 'widget', ["id" => "tetat", "attr" => ["class" => "form-control toc "]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label col-blue bolo\">ORDRE
                                <span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                   ";
        // line 304
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formTache"]) || array_key_exists("formTache", $context) ? $context["formTache"] : (function () { throw new RuntimeError('Variable "formTache" does not exist.', 304, $this->source); })()), "ordre", [], "any", false, false, false, 304), 'widget', ["attr" => ["class" => "form-control toc"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label col-blue bolo\">TACHE<span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    ";
        // line 316
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formTache"]) || array_key_exists("formTache", $context) ? $context["formTache"] : (function () { throw new RuntimeError('Variable "formTache" does not exist.', 316, $this->source); })()), "libelle", [], "any", false, false, false, 316), 'widget', ["id" => "tache", "attr" => ["class" => "form-control toc"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label col-blue bolo\">DATE DE DÉBUT<span class=\"col-red\">*</span></label>
                            <div class=\"input-group date\" id=\"id_0\">
                                <input type=\"text\" placeholder=\"Date...\" id=\"ddebut\" name=\"ddebut\"
                                       style=\"border-bottom: 1px solid #000\" class=\"form-control toc\" required/>
                                <div class=\"input-group-addon input-group-append\">
                                    <div class=\"input-group-text\">
                                        <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label col-blue bolo\">DATE DE FIN<span class=\"col-red\">*</span></label>
                            <div class=\"input-group date\" id=\"id_1\">
                                <input type=\"text\" placeholder=\"Date...\" id=\"dfin\" name=\"dfin\"
                                       style=\"border-bottom: 1px solid #000\" class=\"form-control toc\" required/>
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
                            <label class=\"form-label col-blue bolo\">Superviseur</label>
                            <div class=\"form-group m-t--5\">
                                <select class=\"js-example-basic-multiple\" name=\"personnel[]\" multiple=\"multiple\"
                                        id=\"supertache\"
                                        style=\"width: 100%\">
                                    ";
        // line 355
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["personnels"]) || array_key_exists("personnels", $context) ? $context["personnels"] : (function () { throw new RuntimeError('Variable "personnels" does not exist.', 355, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["personnel"]) {
            // line 356
            yield "                                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "id", [], "any", false, false, false, 356), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "noms", [], "any", false, false, false, 356)), "html", null, true);
            yield "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['personnel'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 358
        yield "                                </select>
                            </div>
                        </div>
                    </div>

                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label col-blue bolo\">Equipes</label>
                            <div class=\"form-group m-t--5\">
                                <select class=\"js-example-basic-multiple selequipe \" name=\"equipe[]\" multiple=\"multiple\"
                                        id=\"equpipetache\" style=\"width: 100%\">
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class=\"text-center m-t-10\">
                        <div class=\"hide\" id=\"divupdTache\">
                            <input type=\"submit\" id=\"updTache\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect text-white bg-green\">
                            <a href=\"\" id=\"closeTache\"
                               class=\"btn btn-link waves-effect text-white bg-pink\">
                                ANNULER
                            </a>
                        </div>
                        <div id=\"divaddTache\">
                            <input type=\"submit\" id=\"addeTache\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-pri\">
                            <div type=\"button\" id=\"closeTache\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
                        </div>
                        <img src=\"";
        // line 391
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadTache\">
                    </div>
                    <br><br><br><br>
                    ";
        // line 395
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formTache"]) || array_key_exists("formTache", $context) ? $context["formTache"] : (function () { throw new RuntimeError('Variable "formTache" does not exist.', 395, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"mdModalEquipe\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header text-white bg-green p-l-20 hide\" id=\"tlfa\">
                <h3 class=\"modal-title\" id=\"defaultModalLabel\">MODIFIER UNE EQUIPE</h3>
            </div>

            <div class=\"modal-header text-white bg-pri p-l-20\" id=\"tlfb\">
                <h3 class=\"modal-title\" id=\"defaultModalLabel\">AJOUTER UNE EQUIPE</h3>
            </div>

            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    ";
        // line 415
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formEquipe"]) || array_key_exists("formEquipe", $context) ? $context["formEquipe"] : (function () { throw new RuntimeError('Variable "formEquipe" does not exist.', 415, $this->source); })()), 'form_start', ["attr" => ["id" => "addEquipeForm"]]);
        yield "
                    <input type=\"hidden\" name=\"token\" value=\"";
        // line 416
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addEquipeToken"), "html", null, true);
        yield "\"/>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label col-blue bolo\">ÉQUIPE<span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    ";
        // line 423
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formEquipe"]) || array_key_exists("formEquipe", $context) ? $context["formEquipe"] : (function () { throw new RuntimeError('Variable "formEquipe" does not exist.', 423, $this->source); })()), "designation", [], "any", false, false, false, 423), 'widget', ["id" => "edesign", "attr" => ["class" => "form-control equi"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">CHANTIERS</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    <select class=\"form-control show-tick\" name=\"chantier\" >
                                        ";
        // line 435
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 435, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cli"]) {
            // line 436
            yield "                                            ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["cli"], "type", [], "any", false, false, false, 436))) {
                // line 437
                yield "                                                ";
                $context["count"] = 0;
                // line 438
                yield "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["cli"], "chantiers", [], "any", false, false, false, 438));
                foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                    // line 439
                    yield "                                                    ";
                    if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["pro"], "corbeille", [], "any", false, false, false, 439)) && (CoreExtension::getAttribute($this->env, $this->source, $context["pro"], "archiver", [], "any", false, false, false, 439) != "oui"))) {
                        // line 440
                        yield "                                                        ";
                        $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 440, $this->source); })()) + 1);
                        // line 441
                        yield "                                                    ";
                    }
                    // line 442
                    yield "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['pro'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 443
                yield "                                                ";
                if (((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 443, $this->source); })()) > 0)) {
                    // line 444
                    yield "                                                    <optgroup label=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cli"], "nomclient", [], "any", false, false, false, 444), "html", null, true);
                    yield "\" class=\" bolo700 col-pink\">
                                                        ";
                    // line 445
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["cli"], "chantiers", [], "any", false, false, false, 445));
                    foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                        // line 446
                        yield "                                                            ";
                        if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["pro"], "corbeille", [], "any", false, false, false, 446)) && (CoreExtension::getAttribute($this->env, $this->source, $context["pro"], "archiver", [], "any", false, false, false, 446) != "oui"))) {
                            // line 447
                            yield "                                                                <option value=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pro"], "id", [], "any", false, false, false, 447), "html", null, true);
                            yield "\"
                                                                        title=\"";
                            // line 448
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pro"], "nomchantier", [], "any", false, false, false, 448), "html", null, true);
                            yield "\"
                                                                        style=\"font-weight: 500 !important; font-size: 15px !important;\">";
                            // line 449
                            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["pro"], "nomchantier", [], "any", false, false, false, 449)) > 40)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["pro"], "nomchantier", [], "any", false, false, false, 449), 0, 40)) . "…"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["pro"], "nomchantier", [], "any", false, false, false, 449)), "html", null, true)));
                            yield "</option>
                                                            ";
                        }
                        // line 451
                        yield "                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['pro'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 452
                    yield "                                                    </optgroup>
                                                ";
                }
                // line 454
                yield "                                            ";
            }
            // line 455
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cli'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 456
        yield "                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label col-blue bolo\">Chef d'équipe</label>
                            <div class=\"form-group m-t--5\">
                                <select class=\"js-example-basic-single\" name=\"chef\"
                                        id=\"chef\"
                                        style=\"width: 100%\">
                                    <option>Aucun</option>
                                    ";
        // line 470
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["personnels"]) || array_key_exists("personnels", $context) ? $context["personnels"] : (function () { throw new RuntimeError('Variable "personnels" does not exist.', 470, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["personnel"]) {
            // line 471
            yield "                                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "id", [], "any", false, false, false, 471), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "noms", [], "any", false, false, false, 471)), "html", null, true);
            yield "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['personnel'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 473
        yield "                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label col-blue bolo\">Membre</label>
                            <div class=\"form-group m-t--5\">
                                <select class=\"js-example-basic-multiple\" name=\"membre[]\" multiple=\"multiple\"
                                        id=\"membre\"
                                        style=\"width: 100%\">
                                    ";
        // line 484
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["personnels"]) || array_key_exists("personnels", $context) ? $context["personnels"] : (function () { throw new RuntimeError('Variable "personnels" does not exist.', 484, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["personnel"]) {
            // line 485
            yield "                                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "id", [], "any", false, false, false, 485), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "noms", [], "any", false, false, false, 485)), "html", null, true);
            yield "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['personnel'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 487
        yield "                                </select>
                            </div>
                        </div>
                    </div>

                    <div class=\"text-center m-t-10\">
                        <div class=\"hide\" id=\"divupdEquipe\">
                            <input type=\"submit\" id=\"updEquipe\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect text-white bg-green\">
                            <a href=\"\" id=\"closeEquipe\"
                               class=\"btn btn-link waves-effect text-white bg-pink\">
                                ANNULER
                            </a>
                        </div>
                        <div id=\"divaddTEquipe\">
                            <input type=\"submit\" id=\"addeEquipe\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-pri\">
                            <div type=\"button\" id=\"closeEquipe\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
                        </div>
                        <img src=\"";
        // line 509
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadEquipe\">
                    </div>
                    <br><br><br><br>
                    ";
        // line 513
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formEquipe"]) || array_key_exists("formEquipe", $context) ? $context["formEquipe"] : (function () { throw new RuntimeError('Variable "formEquipe" does not exist.', 513, $this->source); })()), 'form_end');
        yield "
                </div>
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
        // line 529
        if ((($tmp =  !array_key_exists("libre", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 530
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 530, $this->source); })()), "user", [], "any", false, false, false, 530)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 531
                yield "                        <li class=\"col-yellow h4 bolo600 m-l-20\">
                            ";
                // line 532
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 532, $this->source); })()), "user", [], "any", false, false, false, 532), "nom", [], "any", false, false, false, 532)), "html", null, true);
                yield "
                            ";
                // line 533
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 533, $this->source); })()), "user", [], "any", false, false, false, 533), "prenoms", [], "any", false, false, false, 533)), "html", null, true);
                yield "
                        </li>
                    ";
            }
            // line 536
            yield "                ";
        }
        // line 537
        yield "
                ";
        // line 538
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 538, $this->source); })()), "user", [], "any", false, false, false, 538)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 539
            yield "                    ";
            if (( !array_key_exists("libre", $context) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 539, $this->source); })()), "user", [], "any", false, false, false, 539))) {
                // line 540
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
                // line 555
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["history"]);
                foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                    // line 556
                    yield "                                            <li>
                                                <a href=\"javascript:void(0);\">
                                                    <div class=\"menu-info\">
                                                        <h5 class=\"col-indigo font-weight-bold\">";
                    // line 559
                    yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["history"], "action", [], "any", false, false, false, 559));
                    yield "</h5>
                                                        <h5 class=\"col-pink font-weight-bold\">
                                                            Par: ";
                    // line 561
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["history"], "dobyuser", [], "any", false, false, false, 561), "nom", [], "any", false, false, false, 561)), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["history"], "dobyuser", [], "any", false, false, false, 561), "prenoms", [], "any", false, false, false, 561)), "html", null, true);
                    yield "</h5>
                                                        <p class=\"col-black\">
                                                            <i class=\"material-icons\">access_time</i> <span
                                                                    style=\"font-size: 14px\">";
                    // line 564
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["history"], "date", [], "any", false, false, false, 564), "d.m.Y H.m"), "html", null, true);
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
                // line 570
                yield "                                    </ul>
                                </li>
                                <li class=\"footer bg-blue col-white\">
                                    <a href=\"#\" style=\"color: white; font-size: 16px\" onclick=\"shashar('historique');\">Voir
                                        toutes les actions</a>
                                </li>
                            </ul>
                        </li>
                    ";
            }
            // line 579
            yield "                    <li class=\"hidere\">
                        <a data-toggle=\"modal\" data-target=\"#ModalSearch\">
                            <i class=\"material-icons\">search</i>
                        </a>
                    </li>
                ";
        }
        // line 585
        yield "            </ul>
        </div>
    </div>
</nav>
<section>
    <aside id=\"leftsidebar\" class=\"sidebar text-center bg-pri\"
           style=\"z-index: 1000 !important; margin-top: -70px; width: 240px; height: 100%\">
        <div class=\"user-info\" style=\"height: 150px !important;\">
            <img src=\"";
        // line 593
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logoy.png"), "html", null, true);
        yield "\" style=\"float: left; width: 200px !important;margin-top: 10px\"/>
        </div>
        <div class=\"menu\">
            <ul class=\"list\">
                <li class=\"active\">
                    ";
        // line 598
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 598, $this->source); })()) == "page"))) {
            // line 599
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">home</i>
                            <span class=\"col-yellow\">ACCUEIL</span>
                        </a>
                    ";
        } else {
            // line 604
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">home</i>
                            <span class=\"text-white\">Accueil</span>
                        </a>
                    ";
        }
        // line 609
        yield "                </li>
                <li class=\"active\">
                    <a href=\"";
        // line 611
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("content");
        yield "\" class=\"bolo\">
                        <i class=\"material-icons col-white\">add_shopping_cart</i>
                        <span class=\"col-white\">SHOWROOMS</span>
                    </a>
                </li>
                <li class=\"active\">
                    ";
        // line 617
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 617, $this->source); })()) == "message"))) {
            // line 618
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">email</i>
                            <span class=\"col-yellow\">MESSAGERIE</span>
                        </a>
                    ";
        } else {
            // line 623
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">email</i>
                            <span class=\"text-white\">Messagerie</span>
                        </a>
                    ";
        }
        // line 628
        yield "                </li>
                <li class=\"active\">
                    ";
        // line 630
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 630, $this->source); })()) == "article"))) {
            // line 631
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">content_copy</i>
                            <span class=\"col-yellow\">MES ARTICLES</span>
                        </a>
                    ";
        } else {
            // line 636
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">content_copy</i>
                            <span class=\"text-white\">Mes articles</span>
                        </a>
                    ";
        }
        // line 641
        yield "                </li>
                <li class=\"active\">
                    ";
        // line 643
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 643, $this->source); })()) == "comptable"))) {
            // line 644
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantiers");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">widgets</i>
                            <span class=\"col-yellow\">COMPTABILITÉ</span>
                        </a>
                    ";
        } else {
            // line 649
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantiers");
            yield "\">
                            <i class=\"material-icons text-white\">widgets</i>
                            <span class=\"text-white\">Comptabilité</span>
                        </a>
                    ";
        }
        // line 654
        yield "                </li>
                <li class=\"active\">
                    ";
        // line 656
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 656, $this->source); })()) == "paie"))) {
            // line 657
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paie");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">toll</i>
                            <span class=\"col-yellow\">POINTS DE PAIE</span>
                        </a>
                    ";
        } else {
            // line 662
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paie");
            yield "\">
                            <i class=\"material-icons text-white\">toll</i>
                            <span class=\"text-white\">Points de paie</span>
                        </a>
                    ";
        }
        // line 667
        yield "                </li>
                <li class=\"active\">
                    ";
        // line 669
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 669, $this->source); })()) == "technique"))) {
            // line 670
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technique");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">open_with</i>
                            <span class=\"col-yellow\">GESTION TECHNIQUE</span>
                        </a>
                    ";
        } else {
            // line 675
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technique");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">open_with</i>
                            <span class=\"text-white\">Gestion technique</span>
                        </a>
                    ";
        }
        // line 680
        yield "                </li>
                <li class=\"active\">
                    ";
        // line 682
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 682, $this->source); })()) == "materiel"))) {
            // line 683
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("materiel");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">bubble_chart</i>
                            <span class=\"col-yellow\">GESTION DU MATÉRIEL</span>
                        </a>
                    ";
        } else {
            // line 688
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("materiel");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">bubble_chart</i>
                            <span class=\"text-white\">Gestion du matériel</span>
                        </a>
                    ";
        }
        // line 693
        yield "                </li>
                <li class=\"active\">
                    ";
        // line 695
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 695, $this->source); })()) == "personnel"))) {
            // line 696
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnel");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">people_outline</i>
                            <span class=\"col-yellow\">GESTION DU PERSONNEL</span>
                        </a>
                    ";
        } else {
            // line 701
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnel");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">people_outline</i>
                            <span class=\"text-white\">Gestion du personnel</span>
                        </a>
                    ";
        }
        // line 706
        yield "                </li>
                <li class=\"active\">
                    ";
        // line 708
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 708, $this->source); })()) == "parametre"))) {
            // line 709
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parametre");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">center_focus_weak</i>
                            <span class=\"col-yellow\">PARAMÈTRES</span>
                        </a>
                    ";
        } else {
            // line 714
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parametre");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">center_focus_weak</i>
                            <span class=\"text-white\">Paramètres</span>
                        </a>
                    ";
        }
        // line 719
        yield "                </li>
                <li class=\"active\">
                    ";
        // line 721
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 721, $this->source); })()) == "historique"))) {
            // line 722
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historique");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">history</i>
                            <span class=\"col-yellow\">HISTORIQUE</span>
                        </a>
                    ";
        } else {
            // line 727
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historique");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">history</i>
                            <span class=\"text-white\">Historique</span>
                        </a>
                    ";
        }
        // line 732
        yield "                </li>
                <li class=\"active\">
                    ";
        // line 734
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 734, $this->source); })()) == "corbeille"))) {
            // line 735
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("corbeille");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">delete</i>
                            <span class=\"col-yellow\">CORBEILLE</span>
                        </a>
                    ";
        } else {
            // line 740
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("corbeille");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">delete</i>
                            <span class=\"text-white\">Corbeille</span>
                        </a>
                    ";
        }
        // line 745
        yield "                </li>

            </ul>
        </div>


    </aside>
    <aside id=\"rightsidebars\" class=\"right-sidebars m-t--25 p-t-10\" style=\"overflow: scroll\">
        <div class=\"tab-content\">
            <div role=\"tabpanel\" class=\"tab-pane fade in active in active\" id=\"chantier\">
                <div class=\"table-responsive\" style=\"padding: 10px !important;\">
                    ";
        // line 756
        if ((($tmp =  !array_key_exists("libre", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 757
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 757, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 758
                yield "                            ";
                $context["p"] = 0;
                // line 759
                yield "                            ";
                if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 759)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 759), "count", [], "any", false, false, false, 759) > 0))) {
                    // line 760
                    yield "                                ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 760))) {
                        // line 761
                        yield "                                    <table class=\"table-bordered shadow\" width=\"100%\" style=\" overflow: scroll;\">
                                        ";
                        // line 762
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 762));
                        foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                            // line 763
                            yield "                                            ";
                            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 763)) && (CoreExtension::getAttribute($this->env, $this->source,                             // line 764
$context["chantier"], "archiver", [], "any", false, false, false, 764) != "oui"))) {
                                // line 765
                                yield "                                                ";
                                if (((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 765, $this->source); })()) == 0)) {
                                    // line 766
                                    yield "                                                    <tr>
                                                        <td colspan=\"2\" class=\"bg-blue text-white\"
                                                            style=\"padding-left: 5px;\">
                                                            <a href=\"";
                                    // line 769
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 769)]), "html", null, true);
                                    yield "\"
                                                               class=\"text-white\" title=\"";
                                    // line 770
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 770), "html", null, true);
                                    yield "\">
                                                                -
                                                                ";
                                    // line 772
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 772), "html", null, true);
                                    yield "
                                                            </a>
                                                        </td>
                                                    </tr>
                                                ";
                                }
                                // line 777
                                yield "                                                <tr>
                                                    <td style=\"padding-left: 5px\" colspan=\"2\" class=\"bg-light\">
                                                        <a href=\"";
                                // line 779
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source,                                 // line 782
$context["chantier"], "id", [], "any", false, false, false, 782)]), "html", null, true);
                                // line 784
                                yield "\" class=\"text-pri\" title=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 784), "html", null, true);
                                yield "\">
                                                            ";
                                // line 785
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 785), 0, 55)), "html", null, true);
                                yield "
                                                        </a>
                                                    </td>
                                                </tr>
                                                ";
                                // line 789
                                $context["p"] = ((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 789, $this->source); })()) + 1);
                                // line 790
                                yield "                                            ";
                            }
                            // line 791
                            yield "                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 792
                        yield "                                    </table>
                                ";
                    }
                    // line 794
                    yield "                            ";
                }
                // line 795
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 796
            yield "                    ";
        }
        // line 797
        yield "                </div>
            </div>
        </div>
    </aside>
</section>

<section class=\"content\" style=\"margin-top: 20px !important;\">
    <div class=\"container-fluid\">
        <div class=\"block-header\">
            <div class=\"row clearfix m-t-50\">
                <div class=\"col-sm-12 \">
                    <h3 class=\"bolo700\">Bonjour ";
        // line 808
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 808, $this->source); })()), "user", [], "any", false, false, false, 808), "prenoms", [], "any", false, false, false, 808)), "html", null, true);
        yield " !</h3>
                    <h4 class=\"bolo700 col-deep-orange\">Planning général des opérations</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"content\" id=\"planing\"></section>
<script type=\"text/javascript\">
    \$(document).ready(function () {
        \$(\".js-example-basic-multiple\").select2();
        \$(\".js-example-basic-single\").select2();
    });
</script>

";
        // line 823
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
        return "content/planning.html.twig";
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
        return array (  1294 => 823,  1276 => 808,  1263 => 797,  1260 => 796,  1254 => 795,  1251 => 794,  1247 => 792,  1241 => 791,  1238 => 790,  1236 => 789,  1229 => 785,  1224 => 784,  1222 => 782,  1221 => 779,  1217 => 777,  1209 => 772,  1204 => 770,  1200 => 769,  1195 => 766,  1192 => 765,  1190 => 764,  1188 => 763,  1184 => 762,  1181 => 761,  1178 => 760,  1175 => 759,  1172 => 758,  1167 => 757,  1165 => 756,  1152 => 745,  1143 => 740,  1134 => 735,  1132 => 734,  1128 => 732,  1119 => 727,  1110 => 722,  1108 => 721,  1104 => 719,  1095 => 714,  1086 => 709,  1084 => 708,  1080 => 706,  1071 => 701,  1062 => 696,  1060 => 695,  1056 => 693,  1047 => 688,  1038 => 683,  1036 => 682,  1032 => 680,  1023 => 675,  1014 => 670,  1012 => 669,  1008 => 667,  999 => 662,  990 => 657,  988 => 656,  984 => 654,  975 => 649,  966 => 644,  964 => 643,  960 => 641,  951 => 636,  942 => 631,  940 => 630,  936 => 628,  927 => 623,  918 => 618,  916 => 617,  907 => 611,  903 => 609,  894 => 604,  885 => 599,  883 => 598,  875 => 593,  865 => 585,  857 => 579,  846 => 570,  834 => 564,  826 => 561,  821 => 559,  816 => 556,  812 => 555,  795 => 540,  792 => 539,  790 => 538,  787 => 537,  784 => 536,  778 => 533,  774 => 532,  771 => 531,  768 => 530,  766 => 529,  747 => 513,  740 => 509,  716 => 487,  705 => 485,  701 => 484,  688 => 473,  677 => 471,  673 => 470,  657 => 456,  651 => 455,  648 => 454,  644 => 452,  638 => 451,  633 => 449,  629 => 448,  624 => 447,  621 => 446,  617 => 445,  612 => 444,  609 => 443,  603 => 442,  600 => 441,  597 => 440,  594 => 439,  589 => 438,  586 => 437,  583 => 436,  579 => 435,  564 => 423,  554 => 416,  550 => 415,  527 => 395,  520 => 391,  485 => 358,  474 => 356,  470 => 355,  428 => 316,  413 => 304,  400 => 294,  376 => 273,  372 => 272,  349 => 252,  342 => 248,  315 => 224,  292 => 204,  288 => 203,  264 => 182,  258 => 179,  233 => 157,  219 => 146,  209 => 139,  205 => 138,  103 => 39,  98 => 37,  86 => 28,  82 => 27,  78 => 26,  72 => 23,  48 => 1,);
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


    <script crossorigin=\"anonymous\" integrity=\"sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f\"
            src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>


    <link href=\"{{ asset('datetimepicker/css/bootstrap-datetimepicker.min.css') }}\" rel=\"stylesheet\"/>
    <link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\"/>
    <script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
    <script src=\"{{ asset('datetimepicker/momentjs/moment.js') }}\"></script>
    <script src=\"{{ asset('datetimepicker/js/bootstrap-datetimepicker.min.js') }}\"></script>
    <script src=\"{{ asset('datetimepicker/js/demo.js') }}\"></script>


    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"https://www.carlinbleu.com/img/Icon-96.png\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css\"/>

    <link href=\"{{ asset('css/chat.css') }}\" rel=\"stylesheet\"/>

    {{ encore_entry_link_tags('app') }}
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

<div class=\"modal fade right\" id=\"mdModalPlanning\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header text-white bg-green p-l-20 hide\" id=\"plfa\">
                <h3 class=\"modal-title\" id=\"defaultModalLabel\">MODIFIER UN PLANNING</h3>
            </div>

            <div class=\"modal-header text-white bg-pri p-l-20\" id=\"plfb\">
                <h3 class=\"modal-title\" id=\"defaultModalLabel\">CRÉER UN PLANNING</h3>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    {{ form_start(formPlan, {'attr': {'id':'addPlanningForm'}}) }}
                    <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addPlanToken') }}\"/>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label col-blue bolo\">CHANTIER<span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    {{ form_widget(formPlan.chantier,{'id':'chantier','attr':{'class':'form-control clos'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label col-blue bolo\">PLANNING<span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    {{ form_widget(formPlan.planning,{'id':'plany','attr':{'class':'form-control clos'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <div class=\"hide\" id=\"divupdplan\">
                            <input type=\"submit\" id=\"updPlanning\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect text-white bg-green\">
                            <a href=\"\" id=\"closePlanning\"
                               class=\"btn btn-link waves-effect text-white bg-pink\">
                                ANNULER
                            </a>
                        </div>
                        <div id=\"divaddplan\">
                            <input type=\"submit\" id=\"addePlanning\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-pri\">
                            <div type=\"button\" id=\"closePlanning\"
                                 class=\"btn btn-link waves-effect text-white bg-pink\" data-dismiss=\"modal\">
                                FERMER
                            </div>
                        </div>
                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadPlanning\">
                    </div>
                    {{ form_end(formPlan) }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"mdModalSection\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">>
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">

            <div class=\"modal-header text-white bg-green p-l-20 hide\" id=\"slfa\">
                <h3 class=\"modal-title\" id=\"defaultModalLabel\">MODIFIER UNE ZONE</h3>
            </div>

            <div class=\"modal-header text-white bg-pri p-l-20\" id=\"slfb\">
                <h3 class=\"modal-title\" id=\"defaultModalLabel\">AJOUTER UNE SECTION</h3>
            </div>

            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    {{ form_start(formSection, {'attr': {'id':'addSectionForm'}}) }}
                    <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addSectionToken') }}\"/>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label col-blue bolo\">CHOISIR UN PLANNING<span
                                        class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    <select class=\"form-control selplanning clost\" name=\"planning\"
                                            id=\"planning\"></select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label col-blue bolo\">SECTION<span class=\"col-red\">*</span>&nbsp;
                            </label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    {{ form_widget(formSection.libelle,{'id':'secty','attr':{'class':'form-control clost'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"text-center\">
                        <div class=\"hide\" id=\"divupdSection\">
                            <input type=\"submit\" id=\"updSection\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect text-white bg-green\">
                            <a href=\"\" id=\"closeSection\"
                               class=\"btn btn-link waves-effect text-white bg-pink\">
                                ANNULER
                            </a>
                        </div>
                        <div id=\"divaddSection\">
                            <input type=\"submit\" id=\"addeSection\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-pri\">
                            <div type=\"button\" id=\"closeSection\"
                                 class=\"btn btn-link waves-effect text-white bg-pink\" data-dismiss=\"modal\">
                                FERMER
                            </div>
                        </div>

                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadSection\">
                    </div>
                    <br><br><br>
                    {{ form_end(formSection) }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"mdModalTache\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header text-white bg-green p-l-20 hide\" id=\"tlfa\">
                <h3 class=\"modal-title\" id=\"defaultModalLabel\">MODIFIER UNE TACHE</h3>
            </div>

            <div class=\"modal-header text-white bg-pri p-l-20\" id=\"tlfb\">
                <h3 class=\"modal-title\" id=\"defaultModalLabel\">AJOUTER UNE TACHE</h3>
            </div>

            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    {{ form_start(formTache, {'attr': {'id':'addTacheForm'}}) }}
                    <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addTacheToken') }}\"/>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label col-blue bolo\">SECTION
                                <span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    <select class=\"form-control selsection toc\" name=\"section\"
                                            id=\"tsection\"></select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label col-blue bolo\">ÉTAT
                                <span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    {{ form_widget(formTache.etat,{'id':'tetat','attr':{'class':'form-control toc '}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label col-blue bolo\">ORDRE
                                <span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                   {{ form_widget(formTache.ordre,{'attr':{'class':'form-control toc'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label col-blue bolo\">TACHE<span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    {{ form_widget(formTache.libelle,{'id':'tache','attr':{'class':'form-control toc'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-6\">
                            <label class=\"form-label col-blue bolo\">DATE DE DÉBUT<span class=\"col-red\">*</span></label>
                            <div class=\"input-group date\" id=\"id_0\">
                                <input type=\"text\" placeholder=\"Date...\" id=\"ddebut\" name=\"ddebut\"
                                       style=\"border-bottom: 1px solid #000\" class=\"form-control toc\" required/>
                                <div class=\"input-group-addon input-group-append\">
                                    <div class=\"input-group-text\">
                                        <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label col-blue bolo\">DATE DE FIN<span class=\"col-red\">*</span></label>
                            <div class=\"input-group date\" id=\"id_1\">
                                <input type=\"text\" placeholder=\"Date...\" id=\"dfin\" name=\"dfin\"
                                       style=\"border-bottom: 1px solid #000\" class=\"form-control toc\" required/>
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
                            <label class=\"form-label col-blue bolo\">Superviseur</label>
                            <div class=\"form-group m-t--5\">
                                <select class=\"js-example-basic-multiple\" name=\"personnel[]\" multiple=\"multiple\"
                                        id=\"supertache\"
                                        style=\"width: 100%\">
                                    {% for personnel in personnels %}
                                        <option value=\"{{ personnel.id }}\">{{ personnel.noms|upper }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label col-blue bolo\">Equipes</label>
                            <div class=\"form-group m-t--5\">
                                <select class=\"js-example-basic-multiple selequipe \" name=\"equipe[]\" multiple=\"multiple\"
                                        id=\"equpipetache\" style=\"width: 100%\">
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class=\"text-center m-t-10\">
                        <div class=\"hide\" id=\"divupdTache\">
                            <input type=\"submit\" id=\"updTache\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect text-white bg-green\">
                            <a href=\"\" id=\"closeTache\"
                               class=\"btn btn-link waves-effect text-white bg-pink\">
                                ANNULER
                            </a>
                        </div>
                        <div id=\"divaddTache\">
                            <input type=\"submit\" id=\"addeTache\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-pri\">
                            <div type=\"button\" id=\"closeTache\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
                        </div>
                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadTache\">
                    </div>
                    <br><br><br><br>
                    {{ form_end(formTache) }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"mdModalEquipe\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header text-white bg-green p-l-20 hide\" id=\"tlfa\">
                <h3 class=\"modal-title\" id=\"defaultModalLabel\">MODIFIER UNE EQUIPE</h3>
            </div>

            <div class=\"modal-header text-white bg-pri p-l-20\" id=\"tlfb\">
                <h3 class=\"modal-title\" id=\"defaultModalLabel\">AJOUTER UNE EQUIPE</h3>
            </div>

            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    {{ form_start(formEquipe, {'attr': {'id':'addEquipeForm'}}) }}
                    <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addEquipeToken') }}\"/>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label col-blue bolo\">ÉQUIPE<span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    {{ form_widget(formEquipe.designation,{'id':'edesign','attr':{'class':'form-control equi'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">CHANTIERS</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    <select class=\"form-control show-tick\" name=\"chantier\" >
                                        {% for cli in clients %}
                                            {% if cli.type is null %}
                                                {% set count = 0 %}
                                                {% for pro in cli.chantiers %}
                                                    {% if pro.corbeille is null and pro.archiver != 'oui' %}
                                                        {% set count = count + 1 %}
                                                    {% endif %}
                                                {% endfor %}
                                                {% if count > 0 %}
                                                    <optgroup label=\"{{ cli.nomclient }}\" class=\" bolo700 col-pink\">
                                                        {% for pro in cli.chantiers %}
                                                            {% if pro.corbeille is null and pro.archiver != 'oui' %}
                                                                <option value=\"{{ pro.id }}\"
                                                                        title=\"{{ pro.nomchantier }}\"
                                                                        style=\"font-weight: 500 !important; font-size: 15px !important;\">{{ pro.nomchantier|length > 40 ? pro.nomchantier|slice(0, 40)|upper ~ '…' : pro.nomchantier|upper }}</option>
                                                            {% endif %}
                                                        {% endfor %}
                                                    </optgroup>
                                                {% endif %}
                                            {% endif %}
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label col-blue bolo\">Chef d'équipe</label>
                            <div class=\"form-group m-t--5\">
                                <select class=\"js-example-basic-single\" name=\"chef\"
                                        id=\"chef\"
                                        style=\"width: 100%\">
                                    <option>Aucun</option>
                                    {% for personnel in personnels %}
                                        <option value=\"{{ personnel.id }}\">{{ personnel.noms|upper }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label col-blue bolo\">Membre</label>
                            <div class=\"form-group m-t--5\">
                                <select class=\"js-example-basic-multiple\" name=\"membre[]\" multiple=\"multiple\"
                                        id=\"membre\"
                                        style=\"width: 100%\">
                                    {% for personnel in personnels %}
                                        <option value=\"{{ personnel.id }}\">{{ personnel.noms|upper }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class=\"text-center m-t-10\">
                        <div class=\"hide\" id=\"divupdEquipe\">
                            <input type=\"submit\" id=\"updEquipe\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect text-white bg-green\">
                            <a href=\"\" id=\"closeEquipe\"
                               class=\"btn btn-link waves-effect text-white bg-pink\">
                                ANNULER
                            </a>
                        </div>
                        <div id=\"divaddTEquipe\">
                            <input type=\"submit\" id=\"addeEquipe\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-pri\">
                            <div type=\"button\" id=\"closeEquipe\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
                        </div>
                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadEquipe\">
                    </div>
                    <br><br><br><br>
                    {{ form_end(formEquipe) }}
                </div>
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

<section class=\"content\" style=\"margin-top: 20px !important;\">
    <div class=\"container-fluid\">
        <div class=\"block-header\">
            <div class=\"row clearfix m-t-50\">
                <div class=\"col-sm-12 \">
                    <h3 class=\"bolo700\">Bonjour {{ app.user.prenoms|upper }} !</h3>
                    <h4 class=\"bolo700 col-deep-orange\">Planning général des opérations</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"content\" id=\"planing\"></section>
<script type=\"text/javascript\">
    \$(document).ready(function () {
        \$(\".js-example-basic-multiple\").select2();
        \$(\".js-example-basic-single\").select2();
    });
</script>

{{ encore_entry_script_tags('app') }}


</body>
</html>


", "content/planning.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\planning.html.twig");
    }
}
