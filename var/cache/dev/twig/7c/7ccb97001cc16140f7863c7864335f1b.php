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

/* content/chargesinternes.html.twig */
class __TwigTemplate_88e14230fcd1e9e66483d19a5df6a6da extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/chargesinternes.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/chargesinternes.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>États des comptes | Carlinbleu</title>
    <meta content=\"no-cache, no-store, must-revalidate, post-check=0, pre-check=0\"/>
    <meta name=\"description\"
          content=\"Votre application multi-utilisateurs de gestion de chantiers: Comptabilité, Gestion technique, Suivi et gestion de matériel,Gestion des articles, Planning, Gestionnaire de stock, etc.\">
    <meta name=\"keywords\"
          content=\"carlinbleu, carlin bleu, carlin, gestion , projet, chantier, comptabilité, gestion technique, suivi , gestion de matériel, gestion de chantiersgestionnaire de projets, articles , showroom , matériels\">
    <meta name=\"author\" content=\"carlinGroup\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"https://www.carlinbleu.com/img/Icon-96.png\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css\"/>

    <link href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/chat.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
    ";
        // line 21
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("apfournisseurs");
        yield "

</head>

<body class=\"theme-red\" style=\"background-color: #d1d3e2 !important;\" id=\"bod\">
<div class=\"page-loader-wrapper\">
    <div class=\"loader\">
        <div class=\"preloader\">
            <div class=\"spinner-layer pl-red\">
                <div class=\"circle-clipper left\">
                    <div class=\"circle\"></div>
                </div>
                <div class=\"circle-clipper right\">
                    <div class=\"circle\"></div>
                </div>
            </div>
        </div>
        <p> Téléchargement de vos données...</p>
    </div>
</div>
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
            <div class=\"modal-body\">
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

<div class=\"modal fade right\" id=\"modalInterne\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            ";
        // line 276
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 276, $this->source); })()), "id", [], "any", false, false, false, 276))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 277
            yield "                <div class=\"modal-header bg-green col-white p-l-20\">
                    <h4 class=\"modal-title\" id=\"defaultModalLabel\">MODIFIER UNE CHARGE INTERNE</h4>
                </div>
            ";
        } else {
            // line 281
            yield "                <div class=\"modal-header bg-pri col-white p-l-20\">
                    <h4 class=\"modal-title\" id=\"defaultModalLabel\">AJOUTER UNE CHARGE INTERNE</h4>
                </div>
            ";
        }
        // line 285
        yield "            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    ";
        // line 287
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formInterne"]) || array_key_exists("formInterne", $context) ? $context["formInterne"] : (function () { throw new RuntimeError('Variable "formInterne" does not exist.', 287, $this->source); })()), 'form_start', ["attr" => ["id" => "addInterForm"]]);
        yield "
                    ";
        // line 288
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formInterne"]) || array_key_exists("formInterne", $context) ? $context["formInterne"] : (function () { throw new RuntimeError('Variable "formInterne" does not exist.', 288, $this->source); })()), "_token", [], "any", false, false, false, 288), 'row');
        yield "
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">CHARGE INTERNE<span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group\">
                                <div class=\"form-line col-pink\">
                                    ";
        // line 295
        if ((($tmp = (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 295, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 296
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formInterne"]) || array_key_exists("formInterne", $context) ? $context["formInterne"] : (function () { throw new RuntimeError('Variable "formInterne" does not exist.', 296, $this->source); })()), "noms", [], "any", false, false, false, 296), 'widget', ["required" => "required", "attr" => ["class" => "form-control "]]);
            yield "
                                    ";
        } else {
            // line 298
            yield "                                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formInterne"]) || array_key_exists("formInterne", $context) ? $context["formInterne"] : (function () { throw new RuntimeError('Variable "formInterne" does not exist.', 298, $this->source); })()), "noms", [], "any", false, false, false, 298), 'widget', ["required" => "required", "attr" => ["class" => "form-control"]]);
            yield "
                                    ";
        }
        // line 300
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">

                        ";
        // line 306
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 306, $this->source); })()), "id", [], "any", false, false, false, 306))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 307
            yield "                            <input type=\"submit\" id=\"updInter\" value=\"MODIFIER\" class=\"btn btn-link waves-effect col-white bg-green\">
                        ";
        } else {
            // line 309
            yield "                            <input type=\"submit\" id=\"addInter\" value=\"ENREGISTRER\" class=\"btn btn-link waves-effect col-white bg-blue\">
                        ";
        }
        // line 311
        yield "
                        <div type=\"button\" id=\"closerChargeInterne\"
                             class=\"btn btn-link waves-effect col-white bg-pink\"
                             data-dismiss=\"modal\">FERMER
                        </div>
                        <img src=\"";
        // line 316
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\" class=\"align-justify\" id=\"loadInter\"></div>
                    <br>
                    <br>
                    <br>
                    ";
        // line 320
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formInterne"]) || array_key_exists("formInterne", $context) ? $context["formInterne"] : (function () { throw new RuntimeError('Variable "formInterne" does not exist.', 320, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalCaisseCharge\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-blue col-white\">
                <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">BON DE CAISSE CHARGE INTERNE</h4>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    ";
        // line 335
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCaisseCharge"]) || array_key_exists("formCaisseCharge", $context) ? $context["formCaisseCharge"] : (function () { throw new RuntimeError('Variable "formCaisseCharge" does not exist.', 335, $this->source); })()), 'form_start', ["attr" => ["id" => "addCaisseChargeForm"]]);
        yield "
                    ";
        // line 336
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisseCharge"]) || array_key_exists("formCaisseCharge", $context) ? $context["formCaisseCharge"] : (function () { throw new RuntimeError('Variable "formCaisseCharge" does not exist.', 336, $this->source); })()), "_token", [], "any", false, false, false, 336), 'row');
        yield "
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-4\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DATE<span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 343
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisseCharge"]) || array_key_exists("formCaisseCharge", $context) ? $context["formCaisseCharge"] : (function () { throw new RuntimeError('Variable "formCaisseCharge" does not exist.', 343, $this->source); })()), "date", [], "any", false, false, false, 343), 'widget', ["required" => "", "attr" => ["class" => "form-control datepicker"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-8\">
                            <label class=\"form-label m-b--30 col-blue bolo\">POINTS DE PAIE</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 351
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisseCharge"]) || array_key_exists("formCaisseCharge", $context) ? $context["formCaisseCharge"] : (function () { throw new RuntimeError('Variable "formCaisseCharge" does not exist.', 351, $this->source); })()), "paie", [], "any", false, false, false, 351), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
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
        // line 361
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisseCharge"]) || array_key_exists("formCaisseCharge", $context) ? $context["formCaisseCharge"] : (function () { throw new RuntimeError('Variable "formCaisseCharge" does not exist.', 361, $this->source); })()), "moyen", [], "any", false, false, false, 361), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
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
        // line 371
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisseCharge"]) || array_key_exists("formCaisseCharge", $context) ? $context["formCaisseCharge"] : (function () { throw new RuntimeError('Variable "formCaisseCharge" does not exist.', 371, $this->source); })()), "personnel", [], "any", false, false, false, 371), 'widget', ["required" => "required", "attr" => ["class" => "form-control"]]);
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
        // line 381
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisseCharge"]) || array_key_exists("formCaisseCharge", $context) ? $context["formCaisseCharge"] : (function () { throw new RuntimeError('Variable "formCaisseCharge" does not exist.', 381, $this->source); })()), "monnaie", [], "any", false, false, false, 381), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <label class=\"form-label m-b--30 col-blue bolo\">TYPE D'OPÉRATION</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 389
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisseCharge"]) || array_key_exists("formCaisseCharge", $context) ? $context["formCaisseCharge"] : (function () { throw new RuntimeError('Variable "formCaisseCharge" does not exist.', 389, $this->source); })()), "operation", [], "any", false, false, false, 389), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 400
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisseCharge"]) || array_key_exists("formCaisseCharge", $context) ? $context["formCaisseCharge"] : (function () { throw new RuntimeError('Variable "formCaisseCharge" does not exist.', 400, $this->source); })()), "caissereference", [], "any", false, false, false, 400), 'widget', ["id" => "editor19", "attr" => ["class" => "form-control"]]);
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
        // line 411
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisseCharge"]) || array_key_exists("formCaisseCharge", $context) ? $context["formCaisseCharge"] : (function () { throw new RuntimeError('Variable "formCaisseCharge" does not exist.', 411, $this->source); })()), "desi", [], "any", false, false, false, 411), 'widget', ["id" => "editor20", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">MONTANT À ENREGISTRER<span class=\"col-red\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 421
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCaisseCharge"]) || array_key_exists("formCaisseCharge", $context) ? $context["formCaisseCharge"] : (function () { throw new RuntimeError('Variable "formCaisseCharge" does not exist.', 421, $this->source); })()), "montant", [], "any", false, false, false, 421), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"adderCaisse\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect col-white bg-blue\">
                        <div type=\"button\" id=\"closerCaisse\" class=\"btn btn-link waves-effect col-white bg-pink\"
                             data-dismiss=\"modal\">FERMER
                        </div>
                        <img src=\"";
        // line 432
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loaderCaisse\"></div>
                    <br>
                    <br>
                    <br>
                    ";
        // line 437
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCaisseCharge"]) || array_key_exists("formCaisseCharge", $context) ? $context["formCaisseCharge"] : (function () { throw new RuntimeError('Variable "formCaisseCharge" does not exist.', 437, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    body {
        font-size: 16px;
        font-family: Verdana, sans-serif;
    }

    table {
        border-collapse: collapse;
    }

    th, td {
        box-sizing: border-box;
        border: 1px solid #e9eae8;
        padding: 8px 20px;
    }

    th {
        cursor: pointer;
    }

</style>
<style>
    p {
        margin: 0 !important
    }

    .upper {
        text-transform: uppercase !important;
    }

    td.borde {
        border-spacing: 0;
        border-collapse: collapse;
        border: solid #D3D3D3;
        border-width: 1px 1px 1px 1px !important;
    }
</style>
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
        // line 490
        if ((($tmp =  !array_key_exists("libre", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 491
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 491, $this->source); })()), "user", [], "any", false, false, false, 491)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 492
                yield "                        <li class=\"col-yellow h4 bolo600 m-l-20\">
                            ";
                // line 493
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 493, $this->source); })()), "user", [], "any", false, false, false, 493), "nom", [], "any", false, false, false, 493)), "html", null, true);
                yield "
                            ";
                // line 494
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 494, $this->source); })()), "user", [], "any", false, false, false, 494), "prenoms", [], "any", false, false, false, 494)), "html", null, true);
                yield "
                        </li>
                    ";
            }
            // line 497
            yield "                ";
        }
        // line 498
        yield "
                ";
        // line 499
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 499, $this->source); })()), "user", [], "any", false, false, false, 499)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 500
            yield "                    ";
            if (( !array_key_exists("libre", $context) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 500, $this->source); })()), "user", [], "any", false, false, false, 500))) {
                // line 501
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
                        <li class=\"dropdown\">
                        <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\">
                            <i class=\"material-icons\">notifications</i>
                        </a>
                        <ul class=\"dropdown-menu bg-light\" style=\"width: 370px !important\">
                            <li class=\"header col-pink\" style=\"font-size: 16px\">ACTIONS</li>
                            <li class=\"body\">
                                <ul class=\"menu\" style=\"width: 340px !important\">
                                    ";
                // line 522
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["history"]);
                foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                    // line 523
                    yield "                                        <li>
                                            <a href=\"javascript:void(0);\">
                                                <div class=\"menu-info\">
                                                    <h5 class=\"col-indigo font-weight-bold\">";
                    // line 526
                    yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["history"], "action", [], "any", false, false, false, 526));
                    yield "</h5>
                                                    <h5 class=\"col-pink font-weight-bold\">
                                                        Par: ";
                    // line 528
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["history"], "dobyuser", [], "any", false, false, false, 528), "nom", [], "any", false, false, false, 528)), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["history"], "dobyuser", [], "any", false, false, false, 528), "prenoms", [], "any", false, false, false, 528)), "html", null, true);
                    yield "</h5>
                                                    <p class=\"col-black\">
                                                        <i class=\"material-icons\">access_time</i> <span
                                                                style=\"font-size: 14px\">";
                    // line 531
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["history"], "date", [], "any", false, false, false, 531), "d.m.Y H.m"), "html", null, true);
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
                // line 537
                yield "                                </ul>
                            </li>
                            <li class=\"footer bg-blue col-white\">
                                <a href=\"";
                // line 540
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historique");
                yield "\" class=\"bolo text-white\" style=\"font-size: 16px\">
                                    Voir toutes les actions
                                </a>
                            </li>
                        </ul>
                    ";
            }
            // line 546
            yield "
                    <li class=\"hidere\">
                        <a data-toggle=\"modal\" data-target=\"#ModalSearch\">
                            <i class=\"material-icons\">search</i>
                        </a>
                    </li>
                ";
        }
        // line 553
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
        // line 566
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logoy.png"), "html", null, true);
        yield "\" style=\"float: left; width: 200px !important;margin-top: 10px\"/>
        </div>
        <div class=\"menu\">
            <ul class=\"list\">
                <li class=\"active\">
                    ";
        // line 571
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 571, $this->source); })()) == "page"))) {
            // line 572
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("welcome");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons col-yellow\">home</i>
                            <span class=\"col-yellow\">ACCUEIL</span>
                        </a>
                    ";
        } else {
            // line 577
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("welcome");
            yield "\" class=\"bolo\">
                            <i class=\"material-icons text-white\">home</i>
                            <span class=\"text-white\">Accueil</span>
                        </a>
                    ";
        }
        // line 582
        yield "                </li>
                <li class=\"active\">
                    <a href=\"";
        // line 584
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("content");
        yield "\" class=\"bolo\">
                        <i class=\"material-icons col-white\">add_shopping_cart</i>
                        <span class=\"col-white\">SHOWROOMS</span>
                    </a>
                </li>

                ";
        // line 590
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 590, $this->source); })()), "user", [], "any", false, false, false, 590)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 591
            yield "                    <li class=\"active\">
                        ";
            // line 592
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 592, $this->source); })()) == "message"))) {
                // line 593
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">email</i>
                                <span class=\"col-yellow\">MESSAGERIE</span>
                            </a>
                        ";
            } else {
                // line 598
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">email</i>
                                <span class=\"text-white\">Messagerie</span>
                            </a>
                        ";
            }
            // line 603
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 605
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 605, $this->source); })()) == "article"))) {
                // line 606
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">content_copy</i>
                                <span class=\"col-yellow\">MES ARTICLES</span>
                            </a>
                        ";
            } else {
                // line 611
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">content_copy</i>
                                <span class=\"text-white\">Mes articles</span>
                            </a>
                        ";
            }
            // line 616
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 618
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 618, $this->source); })()) == "etat"))) {
                // line 619
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etat");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">swap_horiz</i>
                                <span class=\"col-yellow\">GESTION DES ÉTATS</span>
                            </a>
                        ";
            } else {
                // line 624
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etat");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">swap_horiz</i>
                                <span class=\"text-white\">Gestion des états</span>
                            </a>
                        ";
            }
            // line 629
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 631
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 631, $this->source); })()) == "comptable"))) {
                // line 632
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantiers");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">widgets</i>
                                <span class=\"col-yellow\">GESTION DES CHANTIERS</span>
                            </a>
                        ";
            } else {
                // line 637
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantiers");
                yield "\">
                                <i class=\"material-icons text-white\">widgets</i>
                                <span class=\"text-white\">Gestion des chantiers</span>
                            </a>
                        ";
            }
            // line 642
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 644
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 644, $this->source); })()) == "paie"))) {
                // line 645
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paie");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">toll</i>
                                <span class=\"col-yellow\">POINTS DE PAIE</span>
                            </a>
                        ";
            } else {
                // line 650
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paie");
                yield "\">
                                <i class=\"material-icons text-white\">toll</i>
                                <span class=\"text-white\">Points de paie</span>
                            </a>
                        ";
            }
            // line 655
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 657
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 657, $this->source); })()) == "technique"))) {
                // line 658
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technique");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">open_with</i>
                                <span class=\"col-yellow\">GESTION TECHNIQUE</span>
                            </a>
                        ";
            } else {
                // line 663
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technique");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">open_with</i>
                                <span class=\"text-white\">Gestion technique</span>
                            </a>
                        ";
            }
            // line 668
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 670
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 670, $this->source); })()) == "materiel"))) {
                // line 671
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("materiel");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">bubble_chart</i>
                                <span class=\"col-yellow\">GESTION DU MATÉRIEL</span>
                            </a>
                        ";
            } else {
                // line 676
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("materiel");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">bubble_chart</i>
                                <span class=\"text-white\">Gestion du matériel</span>
                            </a>
                        ";
            }
            // line 681
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 683
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 683, $this->source); })()) == "personnel"))) {
                // line 684
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnel");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">people_outline</i>
                                <span class=\"col-yellow\">GESTION DU PERSONNEL</span>
                            </a>
                        ";
            } else {
                // line 689
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnel");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">people_outline</i>
                                <span class=\"text-white\">Gestion du personnel</span>
                            </a>
                        ";
            }
            // line 694
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 696
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 696, $this->source); })()) == "parametre"))) {
                // line 697
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parametre");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">center_focus_weak</i>
                                <span class=\"col-yellow\">PARAMÈTRES</span>
                            </a>
                        ";
            } else {
                // line 702
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parametre");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">center_focus_weak</i>
                                <span class=\"text-white\">Paramètres</span>
                            </a>
                        ";
            }
            // line 707
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 709
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 709, $this->source); })()) == "historique"))) {
                // line 710
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historique");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">history</i>
                                <span class=\"col-yellow\">HISTORIQUE</span>
                            </a>
                        ";
            } else {
                // line 715
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historique");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">history</i>
                                <span class=\"text-white\">Historique</span>
                            </a>
                        ";
            }
            // line 720
            yield "                    </li>
                    <li class=\"active\">
                        ";
            // line 722
            if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 722, $this->source); })()) == "corbeille"))) {
                // line 723
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("corbeille");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons col-yellow\">delete</i>
                                <span class=\"col-yellow\">CORBEILLE</span>
                            </a>
                        ";
            } else {
                // line 728
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("corbeille");
                yield "\" class=\"bolo\">
                                <i class=\"material-icons text-white\">delete</i>
                                <span class=\"text-white\">Corbeille</span>
                            </a>
                        ";
            }
            // line 733
            yield "                    </li>
                ";
        }
        // line 735
        yield "            </ul>
        </div>
    </aside>
    <aside id=\"rightsidebars\" class=\"right-sidebars m-t--25 p-t-10\" style=\"overflow: scroll\">
        <div class=\"tab-content\">
            <div role=\"tabpanel\" class=\"tab-pane fade in active in active\" id=\"chantier\">
                <div class=\"table-responsive\" style=\"padding: 10px !important;\">
                    ";
        // line 742
        if ((($tmp =  !array_key_exists("libre", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 743
            yield "                        ";
            $context["q"] = 0;
            // line 744
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 744, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 745
                yield "                            ";
                $context["p"] = 0;
                // line 746
                yield "                            ";
                if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 746)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 746), "count", [], "any", false, false, false, 746) > 0))) {
                    // line 747
                    yield "                                ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 747))) {
                        // line 748
                        yield "                                    <table class=\"table-bordered shadow\" style=\" overflow: scroll; width: 100%\">
                                        ";
                        // line 749
                        if (((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 749, $this->source); })()) == 0)) {
                            // line 750
                            yield "                                            <tr>
                                                <td colspan=\"2\" class=\"bg-purple text-white\"
                                                    style=\"padding-left: 5px;\">CHANTIERS EN ÉTUDE
                                                </td>
                                            </tr>
                                        ";
                        }
                        // line 756
                        yield "                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 756));
                        foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                            // line 757
                            yield "                                            ";
                            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 757))) {
                                // line 758
                                yield "                                                ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 758) == "etude")) {
                                    // line 759
                                    yield "                                                    ";
                                    if (((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 759, $this->source); })()) == 0)) {
                                        // line 760
                                        yield "                                                        <tr>
                                                            <td colspan=\"2\" class=\"bg-blue text-white\"
                                                                style=\"padding-left: 5px;\">
                                                                <a href=\"";
                                        // line 763
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 763)]), "html", null, true);
                                        yield "\"
                                                                   class=\"text-white\" title=\"";
                                        // line 764
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 764)), "html", null, true);
                                        yield "\">
                                                                    -
                                                                    ";
                                        // line 766
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 766)), "html", null, true);
                                        yield "
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    ";
                                    }
                                    // line 771
                                    yield "                                                    <tr>
                                                        <td style=\"padding-left: 5px\" colspan=\"2\" class=\"bg-light\">
                                                            <a href=\"";
                                    // line 773
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source,                                     // line 776
$context["chantier"], "id", [], "any", false, false, false, 776)]), "html", null, true);
                                    // line 778
                                    yield "\" class=\"text-pri\" title=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 778), "html", null, true);
                                    yield "\">
                                                                # ";
                                    // line 779
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 779), 0, 55)), "html", null, true);
                                    yield "
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    ";
                                    // line 783
                                    $context["p"] = ((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 783, $this->source); })()) + 1);
                                    // line 784
                                    yield "                                                ";
                                }
                                // line 785
                                yield "                                            ";
                            }
                            // line 786
                            yield "                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 787
                        yield "                                    </table>
                                    ";
                        // line 788
                        $context["q"] = ((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 788, $this->source); })()) + 1);
                        // line 789
                        yield "                                ";
                    }
                    // line 790
                    yield "                            ";
                }
                // line 791
                yield "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 793
            yield "                    ";
        }
        // line 794
        yield "                </div>
            </div>
        </div>
    </aside>
    <aside id=\"rightsidebar\" class=\"right-sidebar m-t--25 p-t-10\" style=\"overflow: scroll\">
        <div class=\"tab-content\">
            <div role=\"tabpanel\" class=\"tab-pane fade in active in active\" id=\"chantier\">
                <div class=\"table-responsive\" style=\"padding: 10px !important;\">
                    ";
        // line 802
        if ((($tmp =  !array_key_exists("libre", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 803
            yield "                        ";
            $context["q"] = 0;
            // line 804
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 804, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 805
                yield "                            ";
                $context["p"] = 0;
                // line 806
                yield "                            ";
                if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 806)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 806), "count", [], "any", false, false, false, 806) > 0))) {
                    // line 807
                    yield "                                ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 807))) {
                        // line 808
                        yield "                                    <table class=\"table-bordered shadow\" style=\" overflow: scroll; width: 100%\">
                                        ";
                        // line 809
                        if (((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 809, $this->source); })()) == 0)) {
                            // line 810
                            yield "                                            <tr>
                                                <td colspan=\"2\" class=\"bg-pink text-white\"
                                                    style=\"padding-left: 5px;\">CHANTIERS EN COURS
                                                </td>
                                            </tr>
                                        ";
                        }
                        // line 816
                        yield "                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 816));
                        foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                            // line 817
                            yield "                                            ";
                            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 817))) {
                                // line 818
                                yield "                                                ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 818) == "encours")) {
                                    // line 819
                                    yield "                                                    ";
                                    if (((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 819, $this->source); })()) == 0)) {
                                        // line 820
                                        yield "                                                        <tr>
                                                            <td colspan=\"2\" class=\"bg-blue text-white\"
                                                                style=\"padding-left: 5px;\">
                                                                <a href=\"";
                                        // line 823
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 823)]), "html", null, true);
                                        yield "\"
                                                                   class=\"text-white\" title=\"";
                                        // line 824
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 824)), "html", null, true);
                                        yield "\">
                                                                    -
                                                                    ";
                                        // line 826
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 826)), "html", null, true);
                                        yield "
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    ";
                                    }
                                    // line 831
                                    yield "                                                    <tr>
                                                        <td style=\"padding-left: 5px\" colspan=\"2\" class=\"bg-light\">
                                                            <a href=\"";
                                    // line 833
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source,                                     // line 836
$context["chantier"], "id", [], "any", false, false, false, 836)]), "html", null, true);
                                    // line 838
                                    yield "\" class=\"text-pri\" title=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 838), "html", null, true);
                                    yield "\">
                                                                # ";
                                    // line 839
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 839), 0, 55)), "html", null, true);
                                    yield "
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    ";
                                    // line 843
                                    $context["p"] = ((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 843, $this->source); })()) + 1);
                                    // line 844
                                    yield "                                                ";
                                }
                                // line 845
                                yield "                                            ";
                            }
                            // line 846
                            yield "                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 847
                        yield "                                    </table>
                                    ";
                        // line 848
                        $context["q"] = ((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 848, $this->source); })()) + 1);
                        // line 849
                        yield "                                ";
                    }
                    // line 850
                    yield "                            ";
                }
                // line 851
                yield "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 853
            yield "                    ";
        }
        // line 854
        yield "                </div>
            </div>
        </div>
    </aside>
</section>

<input type=\"text\" class=\"hide\" id=\"jsonpersos\" value=\"";
        // line 860
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["jsonpersos"]) || array_key_exists("jsonpersos", $context) ? $context["jsonpersos"] : (function () { throw new RuntimeError('Variable "jsonpersos" does not exist.', 860, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"caisseinterne\" value=\"";
        // line 861
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["caisseinterne"]) || array_key_exists("caisseinterne", $context) ? $context["caisseinterne"] : (function () { throw new RuntimeError('Variable "caisseinterne" does not exist.', 861, $this->source); })()), "html", null, true);
        yield "\">
<input type=\"text\" class=\"hide\" id=\"idcharge\" value=\"";
        // line 862
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 862, $this->source); })()), "id", [], "any", false, false, false, 862), "html", null, true);
        yield "\">

<section class=\"content\" style=\"margin-top: 50px !important;\">
    <div class=\"container-fluid\">
        <div class=\"block-header\">
            <div class=\"row clearfix m-t-50\">
                <div class=\"col-sm-12 \">
                    <h4 class=\"bolo700 col-deep-orange\">CHARGES INTERNES</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"content\" id=\"setchargesinternes\"></section>

<script>
    localStorage.setItem('reloadd', 'chargesinternes');
</script>
";
        // line 880
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("apchargesinternes");
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
        return "content/chargesinternes.html.twig";
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
        return array (  1355 => 880,  1334 => 862,  1330 => 861,  1326 => 860,  1318 => 854,  1315 => 853,  1308 => 851,  1305 => 850,  1302 => 849,  1300 => 848,  1297 => 847,  1291 => 846,  1288 => 845,  1285 => 844,  1283 => 843,  1276 => 839,  1271 => 838,  1269 => 836,  1268 => 833,  1264 => 831,  1256 => 826,  1251 => 824,  1247 => 823,  1242 => 820,  1239 => 819,  1236 => 818,  1233 => 817,  1228 => 816,  1220 => 810,  1218 => 809,  1215 => 808,  1212 => 807,  1209 => 806,  1206 => 805,  1201 => 804,  1198 => 803,  1196 => 802,  1186 => 794,  1183 => 793,  1176 => 791,  1173 => 790,  1170 => 789,  1168 => 788,  1165 => 787,  1159 => 786,  1156 => 785,  1153 => 784,  1151 => 783,  1144 => 779,  1139 => 778,  1137 => 776,  1136 => 773,  1132 => 771,  1124 => 766,  1119 => 764,  1115 => 763,  1110 => 760,  1107 => 759,  1104 => 758,  1101 => 757,  1096 => 756,  1088 => 750,  1086 => 749,  1083 => 748,  1080 => 747,  1077 => 746,  1074 => 745,  1069 => 744,  1066 => 743,  1064 => 742,  1055 => 735,  1051 => 733,  1042 => 728,  1033 => 723,  1031 => 722,  1027 => 720,  1018 => 715,  1009 => 710,  1007 => 709,  1003 => 707,  994 => 702,  985 => 697,  983 => 696,  979 => 694,  970 => 689,  961 => 684,  959 => 683,  955 => 681,  946 => 676,  937 => 671,  935 => 670,  931 => 668,  922 => 663,  913 => 658,  911 => 657,  907 => 655,  898 => 650,  889 => 645,  887 => 644,  883 => 642,  874 => 637,  865 => 632,  863 => 631,  859 => 629,  850 => 624,  841 => 619,  839 => 618,  835 => 616,  826 => 611,  817 => 606,  815 => 605,  811 => 603,  802 => 598,  793 => 593,  791 => 592,  788 => 591,  786 => 590,  777 => 584,  773 => 582,  764 => 577,  755 => 572,  753 => 571,  745 => 566,  730 => 553,  721 => 546,  712 => 540,  707 => 537,  695 => 531,  687 => 528,  682 => 526,  677 => 523,  673 => 522,  650 => 501,  647 => 500,  645 => 499,  642 => 498,  639 => 497,  633 => 494,  629 => 493,  626 => 492,  623 => 491,  621 => 490,  565 => 437,  557 => 432,  543 => 421,  530 => 411,  516 => 400,  502 => 389,  491 => 381,  478 => 371,  465 => 361,  452 => 351,  441 => 343,  431 => 336,  427 => 335,  409 => 320,  402 => 316,  395 => 311,  391 => 309,  387 => 307,  385 => 306,  377 => 300,  371 => 298,  365 => 296,  363 => 295,  353 => 288,  349 => 287,  345 => 285,  339 => 281,  333 => 277,  331 => 276,  73 => 21,  69 => 20,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>États des comptes | Carlinbleu</title>
    <meta content=\"no-cache, no-store, must-revalidate, post-check=0, pre-check=0\"/>
    <meta name=\"description\"
          content=\"Votre application multi-utilisateurs de gestion de chantiers: Comptabilité, Gestion technique, Suivi et gestion de matériel,Gestion des articles, Planning, Gestionnaire de stock, etc.\">
    <meta name=\"keywords\"
          content=\"carlinbleu, carlin bleu, carlin, gestion , projet, chantier, comptabilité, gestion technique, suivi , gestion de matériel, gestion de chantiersgestionnaire de projets, articles , showroom , matériels\">
    <meta name=\"author\" content=\"carlinGroup\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"https://www.carlinbleu.com/img/Icon-96.png\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css\"/>

    <link href=\"{{ asset('css/chat.css') }}\" rel=\"stylesheet\"/>
    {{ encore_entry_link_tags('apfournisseurs') }}

</head>

<body class=\"theme-red\" style=\"background-color: #d1d3e2 !important;\" id=\"bod\">
<div class=\"page-loader-wrapper\">
    <div class=\"loader\">
        <div class=\"preloader\">
            <div class=\"spinner-layer pl-red\">
                <div class=\"circle-clipper left\">
                    <div class=\"circle\"></div>
                </div>
                <div class=\"circle-clipper right\">
                    <div class=\"circle\"></div>
                </div>
            </div>
        </div>
        <p> Téléchargement de vos données...</p>
    </div>
</div>
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
            <div class=\"modal-body\">
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

<div class=\"modal fade right\" id=\"modalInterne\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            {% if person.id is not null %}
                <div class=\"modal-header bg-green col-white p-l-20\">
                    <h4 class=\"modal-title\" id=\"defaultModalLabel\">MODIFIER UNE CHARGE INTERNE</h4>
                </div>
            {% else %}
                <div class=\"modal-header bg-pri col-white p-l-20\">
                    <h4 class=\"modal-title\" id=\"defaultModalLabel\">AJOUTER UNE CHARGE INTERNE</h4>
                </div>
            {% endif %}
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
                    {{ form_start(formInterne, {'attr': {'id':'addInterForm' }}) }}
                    {{ form_row(formInterne._token) }}
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 pri bolo\">CHARGE INTERNE<span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group\">
                                <div class=\"form-line col-pink\">
                                    {% if person %}
                                        {{ form_widget(formInterne.noms,{'required':'required','attr':{'class':'form-control ' }}) }}
                                    {% else %}
                                        {{ form_widget(formInterne.noms,{'required':'required','attr':{'class':'form-control' }}) }}
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">

                        {% if person.id is not null %}
                            <input type=\"submit\" id=\"updInter\" value=\"MODIFIER\" class=\"btn btn-link waves-effect col-white bg-green\">
                        {% else %}
                            <input type=\"submit\" id=\"addInter\" value=\"ENREGISTRER\" class=\"btn btn-link waves-effect col-white bg-blue\">
                        {% endif %}

                        <div type=\"button\" id=\"closerChargeInterne\"
                             class=\"btn btn-link waves-effect col-white bg-pink\"
                             data-dismiss=\"modal\">FERMER
                        </div>
                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\" class=\"align-justify\" id=\"loadInter\"></div>
                    <br>
                    <br>
                    <br>
                    {{ form_end(formInterne) }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade right\" id=\"modalCaisseCharge\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-blue col-white\">
                <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">BON DE CAISSE CHARGE INTERNE</h4>
            </div>
            <div class=\"modal-body m-t-10 bien\">
                <div class=\"body\">
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
                            <label class=\"form-label m-b--30 col-blue bolo\">CHARGE INTERNE</label>
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
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">DÉSIGNATION<span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formCaisseCharge.desi,{'id':'editor20','attr':{'class':'form-control' }}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label m-b--30 col-blue bolo\">MONTANT À ENREGISTRER<span class=\"col-red\">*</span></label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(formCaisseCharge.montant,{'attr':{'class':'form-control'}}) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <input type=\"submit\" id=\"adderCaisse\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect col-white bg-blue\">
                        <div type=\"button\" id=\"closerCaisse\" class=\"btn btn-link waves-effect col-white bg-pink\"
                             data-dismiss=\"modal\">FERMER
                        </div>
                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loaderCaisse\"></div>
                    <br>
                    <br>
                    <br>
                    {{ form_end(formCaisseCharge) }}
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    body {
        font-size: 16px;
        font-family: Verdana, sans-serif;
    }

    table {
        border-collapse: collapse;
    }

    th, td {
        box-sizing: border-box;
        border: 1px solid #e9eae8;
        padding: 8px 20px;
    }

    th {
        cursor: pointer;
    }

</style>
<style>
    p {
        margin: 0 !important
    }

    .upper {
        text-transform: uppercase !important;
    }

    td.borde {
        border-spacing: 0;
        border-collapse: collapse;
        border: solid #D3D3D3;
        border-width: 1px 1px 1px 1px !important;
    }
</style>
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
                {% endif %}
            </ul>
        </div>
    </aside>
    <aside id=\"rightsidebars\" class=\"right-sidebars m-t--25 p-t-10\" style=\"overflow: scroll\">
        <div class=\"tab-content\">
            <div role=\"tabpanel\" class=\"tab-pane fade in active in active\" id=\"chantier\">
                <div class=\"table-responsive\" style=\"padding: 10px !important;\">
                    {% if libre is not defined %}
                        {% set q = 0 %}
                        {% for client in clients %}
                            {% set p = 0 %}
                            {% if client.corbeille is null and client.chantiers.count > 0 %}
                                {% if client.type is null %}
                                    <table class=\"table-bordered shadow\" style=\" overflow: scroll; width: 100%\">
                                        {% if q == 0 %}
                                            <tr>
                                                <td colspan=\"2\" class=\"bg-purple text-white\"
                                                    style=\"padding-left: 5px;\">CHANTIERS EN ÉTUDE
                                                </td>
                                            </tr>
                                        {% endif %}
                                        {% for chantier in client.chantiers %}
                                            {% if chantier.corbeille is null %}
                                                {% if chantier.etat == \"etude\" %}
                                                    {% if p == 0 %}
                                                        <tr>
                                                            <td colspan=\"2\" class=\"bg-blue text-white\"
                                                                style=\"padding-left: 5px;\">
                                                                <a href=\"{{ path('client',{id: client.id}) }}\"
                                                                   class=\"text-white\" title=\"{{ client.nomclient|upper }}\">
                                                                    -
                                                                    {{ client.nomclient|upper }}
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
                                                                # {{ chantier.nomchantier[0:55]|upper }}
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    {% set p = p + 1 %}
                                                {% endif %}
                                            {% endif %}
                                        {% endfor %}
                                    </table>
                                    {% set q = q + 1 %}
                                {% endif %}
                            {% endif %}

                        {% endfor %}
                    {% endif %}
                </div>
            </div>
        </div>
    </aside>
    <aside id=\"rightsidebar\" class=\"right-sidebar m-t--25 p-t-10\" style=\"overflow: scroll\">
        <div class=\"tab-content\">
            <div role=\"tabpanel\" class=\"tab-pane fade in active in active\" id=\"chantier\">
                <div class=\"table-responsive\" style=\"padding: 10px !important;\">
                    {% if libre is not defined %}
                        {% set q = 0 %}
                        {% for client in clients %}
                            {% set p = 0 %}
                            {% if client.corbeille is null and client.chantiers.count > 0 %}
                                {% if client.type is null %}
                                    <table class=\"table-bordered shadow\" style=\" overflow: scroll; width: 100%\">
                                        {% if q == 0 %}
                                            <tr>
                                                <td colspan=\"2\" class=\"bg-pink text-white\"
                                                    style=\"padding-left: 5px;\">CHANTIERS EN COURS
                                                </td>
                                            </tr>
                                        {% endif %}
                                        {% for chantier in client.chantiers %}
                                            {% if chantier.corbeille is null %}
                                                {% if chantier.etat == \"encours\" %}
                                                    {% if p == 0 %}
                                                        <tr>
                                                            <td colspan=\"2\" class=\"bg-blue text-white\"
                                                                style=\"padding-left: 5px;\">
                                                                <a href=\"{{ path('client',{id: client.id}) }}\"
                                                                   class=\"text-white\" title=\"{{ client.nomclient|upper }}\">
                                                                    -
                                                                    {{ client.nomclient|upper }}
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
                                                                # {{ chantier.nomchantier[0:55]|upper }}
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    {% set p = p + 1 %}
                                                {% endif %}
                                            {% endif %}
                                        {% endfor %}
                                    </table>
                                    {% set q = q + 1 %}
                                {% endif %}
                            {% endif %}

                        {% endfor %}
                    {% endif %}
                </div>
            </div>
        </div>
    </aside>
</section>

<input type=\"text\" class=\"hide\" id=\"jsonpersos\" value=\"{{ jsonpersos }}\">
<input type=\"text\" class=\"hide\" id=\"caisseinterne\" value=\"{{ caisseinterne }}\">
<input type=\"text\" class=\"hide\" id=\"idcharge\" value=\"{{ person.id }}\">

<section class=\"content\" style=\"margin-top: 50px !important;\">
    <div class=\"container-fluid\">
        <div class=\"block-header\">
            <div class=\"row clearfix m-t-50\">
                <div class=\"col-sm-12 \">
                    <h4 class=\"bolo700 col-deep-orange\">CHARGES INTERNES</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"content\" id=\"setchargesinternes\"></section>

<script>
    localStorage.setItem('reloadd', 'chargesinternes');
</script>
{{ encore_entry_script_tags('apchargesinternes') }}
</body>
</html>


", "content/chargesinternes.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\chargesinternes.html.twig");
    }
}
