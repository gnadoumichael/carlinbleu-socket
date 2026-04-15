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

/* registration/security/start.html.twig */
class __TwigTemplate_6a2aeca84c26f1169e2901ed38d2132d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/security/start.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/security/start.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html ; charset=utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta http-equiv=\"Expires\" content=\"Fri, 01 Jan 1990 00:00:00 GMT\">
    <meta http-equiv=\"Cache-Control\"
          content=\"private, no-store, max-age=0, no-cache, must-revalidate, post-check=0, pre-check=0\">
    <meta http-equiv=\"Pragma\" content=\"no-cache\">
    <title>Carlinbleu | Gestionnaire de Chantiers</title>
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
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
          integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">

    ";
        // line 25
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("admin");
        yield "

    <style>
        h6{font-size:13px !important;}
        a{color: #3d67d0; font-weight: bold
        }
    </style>

</head>

<body class=\"bg-gradient-primary\">

<div class=\"modal\" id=\"searcheur\" >
    <div class=\"modal-dialog\" style=\"max-width: 700px !important;\">
        <div class=\"modal-content\" >
            <div style=\"background-color:#dddfeb; padding:2px !important\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"btn material-icons float-lg-right col-pink\" id=\"closeframers\"
                   style=\"font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important;\">clear</i>
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
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:2px !important\">
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
<div class=\"modal\" id=\"modpara\" >
    <div class=\"modal-dialog\" style=\"max-width: 700px !important;\">
        <div class=\"modal-content\" >
            <div style=\"background-color:#dddfeb; padding:2px !important\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"btn material-icons float-lg-right col-pink\" id=\"closefra\"
                   style=\"font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important;\">clear</i>
                <h6 style=\"margin: 15px 0 0 10px; color: black; font-weight: bold\">NUMÉROTATION DES ENTITÉS</h6>
            </div>
            <div class=\"modal-body\" style=\"height:80vh;padding:20px !important; overflow-y: scroll\" id=\"shacompte\">
                ";
        // line 86
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 86, $this->source); })()), 'form_start', ["attr" => ["id" => "addFCompteForm"]]);
        yield "
                ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 87, $this->source); })()), "_token", [], "any", false, false, false, 87), 'row');
        yield "
                <div class=\"row clearfix m-b-10\" style=\"margin-top:20px\">
                    <div class=\"col-sm-4\">
                        <label class=\"form-label m-b--30 font-weight-bold\" style=\"color: #6666dc\">Nº Client<span
                                    class=\"col-red\">*</span></label>
                        <div class=\"form-group\">
                            <div class=\"form-line\">
                                ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 94, $this->source); })()), "coclient", [], "any", false, false, false, 94), 'widget', ["attr" => ["class" => "form-control text-paimary"]]);
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
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 103, $this->source); })()), "compteDevis", [], "any", false, false, false, 103), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 112, $this->source); })()), "compteReglement", [], "any", false, false, false, 112), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 123
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 123, $this->source); })()), "compteFournisseur", [], "any", false, false, false, 123), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 132
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 132, $this->source); })()), "comptePrestataire", [], "any", false, false, false, 132), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 141
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 141, $this->source); })()), "compteMateriel", [], "any", false, false, false, 141), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 152
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 152, $this->source); })()), "compteBonFournisseur", [], "any", false, false, false, 152), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 161
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 161, $this->source); })()), "compteBonPrestataire", [], "any", false, false, false, 161), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 170
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 170, $this->source); })()), "compteLivraison", [], "any", false, false, false, 170), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 181
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 181, $this->source); })()), "compteCaisse", [], "any", false, false, false, 181), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 190
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 190, $this->source); })()), "compteFacture", [], "any", false, false, false, 190), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 199
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 199, $this->source); })()), "compteDecompte", [], "any", false, false, false, 199), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 210
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 210, $this->source); })()), "compteFichier", [], "any", false, false, false, 210), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 219
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 219, $this->source); })()), "comptePlanning", [], "any", false, false, false, 219), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 228
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 228, $this->source); })()), "compteTache", [], "any", false, false, false, 228), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 239
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 239, $this->source); })()), "sigle", [], "any", false, false, false, 239), 'widget', ["attr" => ["class" => "form-control text-paimary"]]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center\" style=\"margin-top:30px\">
                    <input type=\"submit\" value=\"MODIFIER\" class=\"btn waves-effect text-white bg-success\">
                </div>
                ";
        // line 247
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCompte"]) || array_key_exists("formCompte", $context) ? $context["formCompte"] : (function () { throw new RuntimeError('Variable "formCompte" does not exist.', 247, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>

<div class=\"container\">
    <div class=\"row justify-content-center\" style=\"margin-top:60px\">
        <div class=\"col-xl-10 col-lg-12 col-md-9\">
            <h2 class=\"tet text-white text-center font-weight-bold\">CARLINBLEU</h2>
            <h5 class=\"text-center\" style=\"color:#efd807; \"> GESTIONNAIRE DE CHANTIERS</h5>
            <section class=\"features-icons  text-center\" style=\"padding: 0 !important\">
                <div class=\"container\" style=\"padding: 0 !important;\">


                    <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\" style=\"margin-top: 20px !important\">
                          <button  onclick=\"shashares();\" class=\"btn\" style=\"background-color: #03A9F4FF; color: #FFF\">Rechercher</button>
                    </div>
                    <br>
                    <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                        <button type=\"button\" ";
        // line 267
        if (((isset($context["checkMaster"]) || array_key_exists("checkMaster", $context) ? $context["checkMaster"] : (function () { throw new RuntimeError('Variable "checkMaster" does not exist.', 267, $this->source); })()) == "oui")) {
            yield " onclick=\"shasharo();\" ";
        }
        yield " class=\"btn btn-primary\"
                                style=\"background-color: #a5a5c0 !important; color:black; margin-top: 10px !important;\">
                            Numérotations
                        </button>
                        <button type=\"button\" ";
        // line 271
        if (((isset($context["arole"]) || array_key_exists("arole", $context) ? $context["arole"] : (function () { throw new RuntimeError('Variable "arole" does not exist.', 271, $this->source); })()) == "oui")) {
            yield " onclick=\"shashar('chantiers');\" ";
        }
        yield " class=\"btn btn-primary\"
                                style=\"background-color: #fff !important; color:black; margin-top: 10px !important;\">
                            Gestion des chantiers
                        </button>
                    </div>
                    <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                        <button type=\"button\" ";
        // line 277
        if (((isset($context["arole"]) || array_key_exists("arole", $context) ? $context["arole"] : (function () { throw new RuntimeError('Variable "arole" does not exist.', 277, $this->source); })()) == "oui")) {
            yield " onclick=\"shashar('etat');\" ";
        }
        yield " class=\"btn btn-primary\"
                                style=\"background-color: #a5a5c0 !important; color:black; margin-top: 10px !important;\">
                            Gestion des états
                        </button>
                        <button type=\"button\" onclick=\"shashar('technique');\" class=\"btn btn-primary\"
                                style=\"background-color: #fff !important; color:black; margin-top: 10px !important;\">
                            Gestion Technique
                        </button>
                    </div>

                    <div class=\"row\" style='margin:10px 0 15px 0;'>
                        <div class=\"d-grid gap-2 col-4 mx-auto\">
                            <button onclick=\"shashar('planning');\" class=\"btn btn-primary\" type=\"button\">Planning
                            </button>
                            <button onclick=\"shashar('parametre');\" class=\"btn btn-primary\" type=\"button\">Paramètre
                            </button>
                            <button onclick=\"shashar('historique');\" class=\"btn btn-primary\" type=\"button\">Historique
                            </button>
                        </div>
                        <div class=\"d-grid gap-2 col-4 mx-auto\">
                            <button onclick=\"shashar('start');\" class=\"btn btn-primary\" type=\"button\">Agenda</button>
                            <button onclick=\"shashar('corbeille');\" class=\"btn btn-primary\" type=\"button\">Corbeille
                            </button>
                            <button onclick=\"shashar('message');\" class=\"btn btn-primary\" type=\"button\">Messages
                            </button>
                        </div>
                        <div class=\"d-grid gap-2 col-4 mx-auto\">
                            <button onclick=\"shashar('chat');\" class=\"btn btn-primary\" type=\"button\">Chat</button>
                            <button onclick=\"shashar('paie');\" class=\"btn btn-primary\" type=\"button\">Paie</button>
                            <a href=\"";
        // line 306
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        yield "\" class=\"btn btn-danger\" type=\"button\">Quitter</a>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6 bg-light\"
                             style=\"border: 2px solid #4e73df; padding:20px; background-color:#03A9F4 !important\">
                            <a href=\"#\" onclick=\"shashar('materiel');\" style=\"text-decoration: none; color:#FFF\">
                                <div class=\"features-icons-item mx-auto\">
                                    <h5 class=\"text-pri\" style=\"margin-top: 20px\">GESTION DU MATÉRIEL</h5>
                                </div>
                            </a>
                        </div>
                        <div class=\"col-lg-6 bg-light\"
                             style=\"border: 2px solid #4e73df; padding:20px; background-color:#03A9F4 !important\">
                            <a href=\"#\" onclick=\"shashar('documents');\" style=\"text-decoration: none; color:#FFF\">
                                <div class=\"features-icons-item mx-auto\">
                                    <h5 class=\"text-pri\" style=\"margin-top: 20px\">GESTIONNAIRE DE FICHIERS</h5>
                                </div>
                            </a>
                        </div>
                        <div class=\"col-lg-6 bg-light\"
                             style=\"border: 2px solid #4e73df; padding:20px; background-color:#03A9F4 !important\">
                            <a href=\"#\" onclick=\"shashar('article');\" style=\"text-decoration: none; color:#FFF\">
                                <div class=\"features-icons-item mx-auto\">
                                    <h5 class=\"text-pri\" style=\"margin-top: 20px\">GESTION DES ARTICLES</h5>
                                </div>
                            </a>
                        </div>
                        <div class=\"col-lg-6 bg-light\"
                             style=\"border: 2px solid #4e73df; padding:20px; background-color:#03A9F4 !important\">
                            <a href=\"#\" onclick=\"shashar('personnel');\" style=\"text-decoration: none; color:#FFF\">
                                <div class=\"features-icons-item mx-auto\">
                                    <h5 class=\"text-pri\" style=\"margin-top: 20px\">GESTION DU PERSONNEL</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <h6 style=\"float: left; color: #fff; margin-top:20px\">©Carlinbleu. All rights reserved.</h6>
                    <h6 style=\"float: right; margin-top:20px\">
                        <a href=\"https://www.facebook.com/profile.php?id=100088340186112\"
                           style=\"color: #fff\">facebook</a> |
                        <a href=\"https://www.linkedin.com/company/carlinbleu\" style=\"color: #fff\">linkedin</a>
                    </h6>

                </div>
            </section>
        </div>
    </div>
</div>
</body>

<script>

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
";
        // line 422
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("admin");
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
        return "registration/security/start.html.twig";
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
        return array (  549 => 422,  430 => 306,  396 => 277,  385 => 271,  376 => 267,  353 => 247,  342 => 239,  328 => 228,  316 => 219,  304 => 210,  290 => 199,  278 => 190,  266 => 181,  252 => 170,  240 => 161,  228 => 152,  214 => 141,  202 => 132,  190 => 123,  176 => 112,  164 => 103,  152 => 94,  142 => 87,  138 => 86,  74 => 25,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html ; charset=utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta http-equiv=\"Expires\" content=\"Fri, 01 Jan 1990 00:00:00 GMT\">
    <meta http-equiv=\"Cache-Control\"
          content=\"private, no-store, max-age=0, no-cache, must-revalidate, post-check=0, pre-check=0\">
    <meta http-equiv=\"Pragma\" content=\"no-cache\">
    <title>Carlinbleu | Gestionnaire de Chantiers</title>
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
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
          integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">

    {{ encore_entry_link_tags('admin') }}

    <style>
        h6{font-size:13px !important;}
        a{color: #3d67d0; font-weight: bold
        }
    </style>

</head>

<body class=\"bg-gradient-primary\">

<div class=\"modal\" id=\"searcheur\" >
    <div class=\"modal-dialog\" style=\"max-width: 700px !important;\">
        <div class=\"modal-content\" >
            <div style=\"background-color:#dddfeb; padding:2px !important\">
                <h4 class=\"modal-title\" id=\"Modaltitle\"></h4>
                <i class=\"btn material-icons float-lg-right col-pink\" id=\"closeframers\"
                   style=\"font-size: 20px !important; color: #E91E63 !important; font-weight: bold !important;\">clear</i>
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
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div style=\"background-color:#dddfeb; padding:2px !important\">
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
<div class=\"modal\" id=\"modpara\" >
    <div class=\"modal-dialog\" style=\"max-width: 700px !important;\">
        <div class=\"modal-content\" >
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
        <div class=\"col-xl-10 col-lg-12 col-md-9\">
            <h2 class=\"tet text-white text-center font-weight-bold\">CARLINBLEU</h2>
            <h5 class=\"text-center\" style=\"color:#efd807; \"> GESTIONNAIRE DE CHANTIERS</h5>
            <section class=\"features-icons  text-center\" style=\"padding: 0 !important\">
                <div class=\"container\" style=\"padding: 0 !important;\">


                    <div class=\"btn-group\" role=\"group\" aria-label=\"Basic examples\" style=\"margin-top: 20px !important\">
                          <button  onclick=\"shashares();\" class=\"btn\" style=\"background-color: #03A9F4FF; color: #FFF\">Rechercher</button>
                    </div>
                    <br>
                    <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                        <button type=\"button\" {% if checkMaster == \"oui\" %} onclick=\"shasharo();\" {% endif %} class=\"btn btn-primary\"
                                style=\"background-color: #a5a5c0 !important; color:black; margin-top: 10px !important;\">
                            Numérotations
                        </button>
                        <button type=\"button\" {% if arole == \"oui\" %} onclick=\"shashar('chantiers');\" {% endif %} class=\"btn btn-primary\"
                                style=\"background-color: #fff !important; color:black; margin-top: 10px !important;\">
                            Gestion des chantiers
                        </button>
                    </div>
                    <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                        <button type=\"button\" {% if arole == \"oui\" %} onclick=\"shashar('etat');\" {% endif %} class=\"btn btn-primary\"
                                style=\"background-color: #a5a5c0 !important; color:black; margin-top: 10px !important;\">
                            Gestion des états
                        </button>
                        <button type=\"button\" onclick=\"shashar('technique');\" class=\"btn btn-primary\"
                                style=\"background-color: #fff !important; color:black; margin-top: 10px !important;\">
                            Gestion Technique
                        </button>
                    </div>

                    <div class=\"row\" style='margin:10px 0 15px 0;'>
                        <div class=\"d-grid gap-2 col-4 mx-auto\">
                            <button onclick=\"shashar('planning');\" class=\"btn btn-primary\" type=\"button\">Planning
                            </button>
                            <button onclick=\"shashar('parametre');\" class=\"btn btn-primary\" type=\"button\">Paramètre
                            </button>
                            <button onclick=\"shashar('historique');\" class=\"btn btn-primary\" type=\"button\">Historique
                            </button>
                        </div>
                        <div class=\"d-grid gap-2 col-4 mx-auto\">
                            <button onclick=\"shashar('start');\" class=\"btn btn-primary\" type=\"button\">Agenda</button>
                            <button onclick=\"shashar('corbeille');\" class=\"btn btn-primary\" type=\"button\">Corbeille
                            </button>
                            <button onclick=\"shashar('message');\" class=\"btn btn-primary\" type=\"button\">Messages
                            </button>
                        </div>
                        <div class=\"d-grid gap-2 col-4 mx-auto\">
                            <button onclick=\"shashar('chat');\" class=\"btn btn-primary\" type=\"button\">Chat</button>
                            <button onclick=\"shashar('paie');\" class=\"btn btn-primary\" type=\"button\">Paie</button>
                            <a href=\"{{ path('logout') }}\" class=\"btn btn-danger\" type=\"button\">Quitter</a>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6 bg-light\"
                             style=\"border: 2px solid #4e73df; padding:20px; background-color:#03A9F4 !important\">
                            <a href=\"#\" onclick=\"shashar('materiel');\" style=\"text-decoration: none; color:#FFF\">
                                <div class=\"features-icons-item mx-auto\">
                                    <h5 class=\"text-pri\" style=\"margin-top: 20px\">GESTION DU MATÉRIEL</h5>
                                </div>
                            </a>
                        </div>
                        <div class=\"col-lg-6 bg-light\"
                             style=\"border: 2px solid #4e73df; padding:20px; background-color:#03A9F4 !important\">
                            <a href=\"#\" onclick=\"shashar('documents');\" style=\"text-decoration: none; color:#FFF\">
                                <div class=\"features-icons-item mx-auto\">
                                    <h5 class=\"text-pri\" style=\"margin-top: 20px\">GESTIONNAIRE DE FICHIERS</h5>
                                </div>
                            </a>
                        </div>
                        <div class=\"col-lg-6 bg-light\"
                             style=\"border: 2px solid #4e73df; padding:20px; background-color:#03A9F4 !important\">
                            <a href=\"#\" onclick=\"shashar('article');\" style=\"text-decoration: none; color:#FFF\">
                                <div class=\"features-icons-item mx-auto\">
                                    <h5 class=\"text-pri\" style=\"margin-top: 20px\">GESTION DES ARTICLES</h5>
                                </div>
                            </a>
                        </div>
                        <div class=\"col-lg-6 bg-light\"
                             style=\"border: 2px solid #4e73df; padding:20px; background-color:#03A9F4 !important\">
                            <a href=\"#\" onclick=\"shashar('personnel');\" style=\"text-decoration: none; color:#FFF\">
                                <div class=\"features-icons-item mx-auto\">
                                    <h5 class=\"text-pri\" style=\"margin-top: 20px\">GESTION DU PERSONNEL</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <h6 style=\"float: left; color: #fff; margin-top:20px\">©Carlinbleu. All rights reserved.</h6>
                    <h6 style=\"float: right; margin-top:20px\">
                        <a href=\"https://www.facebook.com/profile.php?id=100088340186112\"
                           style=\"color: #fff\">facebook</a> |
                        <a href=\"https://www.linkedin.com/company/carlinbleu\" style=\"color: #fff\">linkedin</a>
                    </h6>

                </div>
            </section>
        </div>
    </div>
</div>
</body>

<script>

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
{{ encore_entry_script_tags('admin') }}
</body>
</html>
", "registration/security/start.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\registration\\security\\start.html.twig");
    }
}
