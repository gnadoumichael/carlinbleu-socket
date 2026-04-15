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

/* content/document.html.twig */
class __TwigTemplate_d31d516de6c0c8301b74a00274381e88 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/document.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/document.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 2, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "

    <div class=\"modal fade right\" id=\"mdModalDocument\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header text-white bg-green p-l-20\">
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">LIER DES FICHIERS À UN CHANTIERS</h3>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
        // line 15
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUpload"]) || array_key_exists("formUpload", $context) ? $context["formUpload"] : (function () { throw new RuntimeError('Variable "formUpload" does not exist.', 15, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data", "attr" => ["id" => "addFileForm"]]);
        yield "
                        ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUpload"]) || array_key_exists("formUpload", $context) ? $context["formUpload"] : (function () { throw new RuntimeError('Variable "formUpload" does not exist.', 16, $this->source); })()), "_token", [], "any", false, false, false, 16), 'row');
        yield "
                        <input type=\"hidden\" name=\"token\" value=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addFileChantier"), "html", null, true);
        yield "\"/>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">IMPORTER DES FICHIERS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUpload"]) || array_key_exists("formUpload", $context) ? $context["formUpload"] : (function () { throw new RuntimeError('Variable "formUpload" does not exist.', 23, $this->source); })()), "nomfichier", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">CHANTIERS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUpload"]) || array_key_exists("formUpload", $context) ? $context["formUpload"] : (function () { throw new RuntimeError('Variable "formUpload" does not exist.', 33, $this->source); })()), "chantier", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"addFileChantier\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-pri\">
                            <div type=\"button\" id=\"closeFileChantier\"
                                 class=\"btn btn-link waves-effect text-white bg-pink\" data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadFileChantier\">
                        </div>
                        ";
        // line 48
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUpload"]) || array_key_exists("formUpload", $context) ? $context["formUpload"] : (function () { throw new RuntimeError('Variable "formUpload" does not exist.', 48, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"mdModalFiche\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header text-white bg-green p-l-20\">
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">AJOUTER DES FICHIERS TECHNIQUES</h3>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
        // line 63
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUploada"]) || array_key_exists("formUploada", $context) ? $context["formUploada"] : (function () { throw new RuntimeError('Variable "formUploada" does not exist.', 63, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data", "attr" => ["id" => "addFileTechniqueForm"]]);
        yield "
                        ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUploada"]) || array_key_exists("formUploada", $context) ? $context["formUploada"] : (function () { throw new RuntimeError('Variable "formUploada" does not exist.', 64, $this->source); })()), "_token", [], "any", false, false, false, 64), 'row');
        yield "
                        <input type=\"hidden\" name=\"token\" value=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addFileTech"), "html", null, true);
        yield "\"/>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">IMPORTER DES FICHIERS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUploada"]) || array_key_exists("formUploada", $context) ? $context["formUploada"] : (function () { throw new RuntimeError('Variable "formUploada" does not exist.', 71, $this->source); })()), "nomfichier", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUploada"]) || array_key_exists("formUploada", $context) ? $context["formUploada"] : (function () { throw new RuntimeError('Variable "formUploada" does not exist.', 81, $this->source); })()), "categorie", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"addFileTechnique\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-pri\">
                            <div type=\"button\" id=\"closeFileTechnique\"
                                 class=\"btn btn-link waves-effect text-white bg-pink\" data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadFileTechnique\">
                        </div>
                        ";
        // line 96
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUploada"]) || array_key_exists("formUploada", $context) ? $context["formUploada"] : (function () { throw new RuntimeError('Variable "formUploada" does not exist.', 96, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"mdModalFicheDesc\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header text-white bg-green p-l-20\">
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">AJOUTER DES DESCRIPTIFS TECHNIQUES</h3>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
        // line 111
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUploado"]) || array_key_exists("formUploado", $context) ? $context["formUploado"] : (function () { throw new RuntimeError('Variable "formUploado" does not exist.', 111, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data", "attr" => ["id" => "addFileDescForm"]]);
        yield "
                        ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUploado"]) || array_key_exists("formUploado", $context) ? $context["formUploado"] : (function () { throw new RuntimeError('Variable "formUploado" does not exist.', 112, $this->source); })()), "_token", [], "any", false, false, false, 112), 'row');
        yield "
                        <input type=\"hidden\" name=\"token\" value=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addFileDesc"), "html", null, true);
        yield "\"/>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">IMPORTER DES FICIERS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUploado"]) || array_key_exists("formUploado", $context) ? $context["formUploado"] : (function () { throw new RuntimeError('Variable "formUploado" does not exist.', 119, $this->source); })()), "nomfichier", [], "any", false, false, false, 119), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 129
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUploado"]) || array_key_exists("formUploado", $context) ? $context["formUploado"] : (function () { throw new RuntimeError('Variable "formUploado" does not exist.', 129, $this->source); })()), "categorie", [], "any", false, false, false, 129), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"addFileDesc\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-pri\">
                            <div type=\"button\" id=\"closeFileDesc\"
                                 class=\"btn btn-link waves-effect text-white bg-pink\" data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadFileDesc\">
                        </div>
                        ";
        // line 144
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUploada"]) || array_key_exists("formUploada", $context) ? $context["formUploada"] : (function () { throw new RuntimeError('Variable "formUploada" does not exist.', 144, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class=\"content\" style=\"margin-top: 30px\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"panel-group\" id=\"accordion_1\" role=\"tablist\" aria-multiselectable=\"true\">

                    <div class=\"row clearfix m-t-40\">
                        <div class=\"col-sm-12 col-md-12\">
                            <h4 class=\"col-pink fontez\"><u>GESTION DES FICHIERS</u></h4><br>
                            <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\"
                                    data-target=\"#mdModalDocument\">
                                LIER DES FICHIERS À UN CHANTIER
                            </button>

                            <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\"
                                    data-target=\"#mdModalFiche\">
                                AJOUTER DES FICHES TECHNIQUES
                            </button>

                            <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\"
                                    data-target=\"#mdModalFicheDesc\">
                                AJOUTER DES DESCRIPTIFS TECHNIQUES
                            </button>

                        </div>
                    </div>


                    ";
        // line 179
        yield "                    <div class=\"panel panel-pri\" style=\"margin-top:10px\">
                        <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingFich\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed col-white outai\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseFich\" aria-expanded=\"false\"
                                   aria-controls=\"collapseFich\">
                                    <i class=\"material-icons text-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>
                                    Fichiers des différents chantiers
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseFich\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingFich\">
                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"table-responsive shadow\" style=\"padding: 10px\">
                                    <table class=\"table-striped table-bordered display nowrap\" id=\"dataFichies\"
                                           style=\"width: 100%\">
                                        <thead>
                                        <tr class=\"text-center\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th class=\"mw100\">DATE D'AJOUT</th>
                                            <th>DOCUMENTS</th>
                                            <th>CHANTIER</th>
                                            <th class=\"text-center\">TAILLE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 206
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 206, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 207
            yield "                                            ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 207))) {
                // line 208
                yield "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 208));
                foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                    // line 209
                    yield "                                                    ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 209))) {
                        // line 210
                        yield "                                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "fichiers", [], "any", false, false, false, 210));
                        foreach ($context['_seq'] as $context["_key"] => $context["fichier"]) {
                            // line 211
                            yield "                                                            <tr>
                                                                <td class=\"text-center\">
                                                                    <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                           class=\"FICHIES\"
                                                                           value=\"";
                            // line 215
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "id", [], "any", false, false, false, 215), "html", null, true);
                            yield "\"></td>
                                                                <td>";
                            // line 216
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "date", [], "any", false, false, false, 216), "Y.m.d H.i.s"), "html", null, true);
                            yield "</td>
                                                                <td style=\"padding: 2px !important;\">
                                                                    <a href=\"/";
                            // line 218
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "folde", [], "any", false, false, false, 218), "html", null, true);
                            yield "/";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "nomfichier", [], "any", false, false, false, 218), "html", null, true);
                            yield "\"
                                                                       class=\"col-blue\" style=\"font-weight: 600\"
                                                                       target=\"_blank\">";
                            // line 220
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "nomfichier", [], "any", false, false, false, 220), "html", null, true);
                            yield "</a>
                                                                </td>
                                                                <td>
                                                                    <a href=\"";
                            // line 223
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 223)]), "html", null, true);
                            yield "\"
                                                                       title=\"";
                            // line 224
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 224), "html", null, true);
                            yield "\"
                                                                       class=\"col-blue\">";
                            // line 225
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "client", [], "any", false, false, false, 225), "nomclient", [], "any", false, false, false, 225)), "html", null, true);
                            yield "
                                                                        | ";
                            // line 226
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 226)), "html", null, true);
                            yield "</a>
                                                                </td>
                                                                <td class=\"text-center\"
                                                                    style=\"padding: 2px !important\">";
                            // line 229
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "taille", [], "any", false, false, false, 229) / 1000000), 2, ",", " "), "html", null, true);
                            yield "
                                                                    Mo
                                                                </td>
                                                            </tr>
                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['fichier'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 234
                        yield "                                                    ";
                    }
                    // line 235
                    yield "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 236
                yield "                                            ";
            }
            // line 237
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 238
        yield "                                        </tbody>
                                    </table>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 246
        yield "
                    ";
        // line 248
        yield "                    <div class=\"panel panel-pri\">
                        <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingFichi\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed col-white outai\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseFichi\" aria-expanded=\"false\"
                                   aria-controls=\"collapseFichi\">
                                    <i class=\"material-icons text-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>
                                    Fiches techniques
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseFichi\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingFichi\">
                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"table-responsive shadow\" style=\"padding: 10px\">
                                    <table class=\"table-striped table-bordered display nowrap\"
                                           id=\"dataFichiesTech\" style=\"width: 100%\">
                                        <thead>
                                        <tr class=\"text-center\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th class=\"mw100\">DATE D'AJOUT</th>
                                            <th>DOCUMENTS</th>
                                            <th>CATÉGORIE</th>
                                            <th class=\"text-center\">TAILLE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 275
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fichies"]) || array_key_exists("fichies", $context) ? $context["fichies"] : (function () { throw new RuntimeError('Variable "fichies" does not exist.', 275, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fichier"]) {
            // line 276
            yield "                                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "type", [], "any", false, false, false, 276) == "technique")) {
                // line 277
                yield "                                            <tr>
                                                <td class=\"text-center\">
                                                    <input type=\"checkbox\" data-toggle=\"toggle\"
                                                           class=\"FICHIESTECH\"
                                                           value=\"";
                // line 281
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "id", [], "any", false, false, false, 281), "html", null, true);
                yield "\"></td>
                                                <td>";
                // line 282
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "date", [], "any", false, false, false, 282), "Y.m.d H.i.s"), "html", null, true);
                yield "</td>
                                                <td style=\"padding: 2px !important;\">
                                                    <a href=\"/";
                // line 284
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "folde", [], "any", false, false, false, 284), "html", null, true);
                yield "/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "nomfichier", [], "any", false, false, false, 284), "html", null, true);
                yield "\"
                                                       class=\"col-blue\" style=\"font-weight: 600\"
                                                       target=\"_blank\">";
                // line 286
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "nomfichier", [], "any", false, false, false, 286), "html", null, true);
                yield "</a>
                                                </td>
                                                <td>";
                // line 288
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "categorie", [], "any", false, false, false, 288)), "html", null, true);
                yield "
                                                </td>
                                                <td class=\"text-center\"
                                                    style=\"padding: 2px !important\">";
                // line 291
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "taille", [], "any", false, false, false, 291) / 1000000), 2, ",", " "), "html", null, true);
                yield "
                                                    Mo
                                                </td>
                                            </tr>
                                        ";
            }
            // line 296
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['fichier'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 297
        yield "                                        </tbody>
                                    </table>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 305
        yield "
                    ";
        // line 307
        yield "                    <div class=\"panel panel-pri\">
                        <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingFichidesc\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed col-white outai\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseFichidesc\" aria-expanded=\"false\"
                                   aria-controls=\"collapseFichi\">
                                    <i class=\"material-icons text-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>
                                    Descriptifs techniques
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseFichidesc\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingFichidesc\">
                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"table-responsive shadow\" style=\"padding: 10px\">
                                    <table class=\"table-striped table-bordered display nowrap\" style=\"width: 100%\"
                                           id=\"dataFichiesDesc\">
                                        <thead>
                                        <tr class=\"text-center\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th>DATE D'AJOUT</th>
                                            <th>DOCUMENTS</th>
                                            <th>CATÉGORIE</th>
                                            <th class=\"text-center\">TAILLE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 334
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fichidesc"]) || array_key_exists("fichidesc", $context) ? $context["fichidesc"] : (function () { throw new RuntimeError('Variable "fichidesc" does not exist.', 334, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fichier"]) {
            // line 335
            yield "                                            <tr>
                                                <td class=\"text-center\">
                                                    <input type=\"checkbox\" data-toggle=\"toggle\"
                                                           class=\"FICHIESDESC\"
                                                           value=\"";
            // line 339
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "id", [], "any", false, false, false, 339), "html", null, true);
            yield "\"></td>
                                                <td>";
            // line 340
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "date", [], "any", false, false, false, 340), "Y.m.d H.i.s"), "html", null, true);
            yield "</td>
                                                <td style=\"padding: 2px !important;\">
                                                    <a href=\"/";
            // line 342
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "folde", [], "any", false, false, false, 342), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "nomfichier", [], "any", false, false, false, 342), "html", null, true);
            yield "\"
                                                       class=\"col-blue\" style=\"font-weight: 600\"
                                                       target=\"_blank\">";
            // line 344
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "nomfichier", [], "any", false, false, false, 344), "html", null, true);
            yield "</a>
                                                </td>
                                                <td>";
            // line 346
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "categorie", [], "any", false, false, false, 346)), "html", null, true);
            yield "</td>
                                                <td class=\"text-center\"
                                                    style=\"padding: 2px !important\">";
            // line 348
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "taille", [], "any", false, false, false, 348) / 1000000), 2, ",", " "), "html", null, true);
            yield "
                                                    Mo
                                                </td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['fichier'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 353
        yield "                                        </tbody>
                                    </table>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 361
        yield "
                </div>
            </div>
        </div>
    </section>

    <div class=\"modal fade right\" id=\"modalFicheLoading\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header text-white bg-green p-l-20\">
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">ENREGISTREMENT UN FICHIER</h3>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
        // line 376
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSave"]) || array_key_exists("formSave", $context) ? $context["formSave"] : (function () { throw new RuntimeError('Variable "formSave" does not exist.', 376, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data", "attr" => ["id" => "addFileLoadingForm"]]);
        yield "
                        ";
        // line 377
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formSave"]) || array_key_exists("formSave", $context) ? $context["formSave"] : (function () { throw new RuntimeError('Variable "formSave" does not exist.', 377, $this->source); })()), "_token", [], "any", false, false, false, 377), 'row');
        yield "
                        <input type=\"hidden\" name=\"token\" value=\"";
        // line 378
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addFileLoad"), "html", null, true);
        yield "\"/>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">IMPORTER UN FICHIER</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        ";
        // line 384
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formSave"]) || array_key_exists("formSave", $context) ? $context["formSave"] : (function () { throw new RuntimeError('Variable "formSave" does not exist.', 384, $this->source); })()), "nomfichier", [], "any", false, false, false, 384), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 394
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formSave"]) || array_key_exists("formSave", $context) ? $context["formSave"] : (function () { throw new RuntimeError('Variable "formSave" does not exist.', 394, $this->source); })()), "categorie", [], "any", false, false, false, 394), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"addFileLoading\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-pri\">
                            <div type=\"button\" id=\"closeFileLoading\"
                                 class=\"btn btn-link waves-effect text-white bg-pink\" data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"";
        // line 406
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadFileLoading\">
                        </div>
                        ";
        // line 409
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSave"]) || array_key_exists("formSave", $context) ? $context["formSave"] : (function () { throw new RuntimeError('Variable "formSave" does not exist.', 409, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class=\"content\" style=\"margin-top: 30px\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"panel-group\" id=\"accordion_1\" role=\"tablist\" aria-multiselectable=\"true\">
                    <div class=\"row clearfix m-t-40\">
                        <div class=\"col-sm-12 col-md-12\">
                            <h4 class=\"col-black fontez\"><u>ENREGISTREMENT DES DONNÉES DANS LA BASE DE DONNÉES</u></h4>
                            <br>
                            <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\"
                                    data-target=\"#modalFicheLoading\">
                                IMPORTER UN FICHIER
                            </button>
                        </div>
                    </div>

                    ";
        // line 431
        yield "                    <div class=\"panel panel-pri\">
                        <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingFichiLoad\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed col-white outai\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseFichiLoad\" aria-expanded=\"false\"
                                   aria-controls=\"collapseFichiLoad\">
                                    <i class=\"material-icons text-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>
                                    Fichiers de données enregistrés
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseFichiLoad\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingFichiLoad\">
                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"table-responsive shadow\" style=\"padding: 10px\">
                                    <table class=\"table-striped table-bordered display nowrap\"
                                           id=\"dataFichesLoading\" style=\"width: 100%\">
                                        <thead>
                                        <tr class=\"text-center\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th class=\"mw100\">DATE D'AJOUT</th>
                                            <th>DOCUMENTS</th>
                                            <th>CATÉGORIE</th>
                                            <th class=\"text-center\">TAILLE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 458
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fichos"]) || array_key_exists("fichos", $context) ? $context["fichos"] : (function () { throw new RuntimeError('Variable "fichos" does not exist.', 458, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fichier"]) {
            // line 459
            yield "                                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "type", [], "any", false, false, false, 459) == "save")) {
                // line 460
                yield "                                                <tr>
                                                    <td class=\"text-center\">
                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                               class=\"FILOAD\"
                                                               value=\"";
                // line 464
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "id", [], "any", false, false, false, 464), "html", null, true);
                yield "\"></td>
                                                    <td>";
                // line 465
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "date", [], "any", false, false, false, 465), "Y.m.d H.i.s"), "html", null, true);
                yield "</td>
                                                    <td style=\"padding: 2px !important;\">
                                                        <a href=\"/";
                // line 467
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "folde", [], "any", false, false, false, 467), "html", null, true);
                yield "/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "nomfichier", [], "any", false, false, false, 467), "html", null, true);
                yield "\"
                                                           class=\"col-blue\" style=\"font-weight: 600\"
                                                           target=\"_blank\">";
                // line 469
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "nomfichier", [], "any", false, false, false, 469), "html", null, true);
                yield "</a>
                                                    </td>
                                                    <td>";
                // line 471
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "categorie", [], "any", false, false, false, 471)), "html", null, true);
                yield "
                                                    </td>
                                                    <td class=\"text-center\"
                                                        style=\"padding: 2px !important\">";
                // line 474
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "taille", [], "any", false, false, false, 474) / 1000000), 2, ",", " "), "html", null, true);
                yield "
                                                        Mo
                                                    </td>
                                                </tr>
                                            ";
            }
            // line 479
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['fichier'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 480
        yield "                                        </tbody>
                                    </table>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 488
        yield "
                </div>
            </div>
        </div>
    </section>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "content/document.html.twig";
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
        return array (  839 => 488,  830 => 480,  824 => 479,  816 => 474,  810 => 471,  805 => 469,  798 => 467,  793 => 465,  789 => 464,  783 => 460,  780 => 459,  776 => 458,  747 => 431,  723 => 409,  717 => 406,  702 => 394,  689 => 384,  680 => 378,  676 => 377,  672 => 376,  655 => 361,  646 => 353,  635 => 348,  630 => 346,  625 => 344,  618 => 342,  613 => 340,  609 => 339,  603 => 335,  599 => 334,  570 => 307,  567 => 305,  558 => 297,  552 => 296,  544 => 291,  538 => 288,  533 => 286,  526 => 284,  521 => 282,  517 => 281,  511 => 277,  508 => 276,  504 => 275,  475 => 248,  472 => 246,  463 => 238,  457 => 237,  454 => 236,  448 => 235,  445 => 234,  434 => 229,  428 => 226,  424 => 225,  420 => 224,  416 => 223,  410 => 220,  403 => 218,  398 => 216,  394 => 215,  388 => 211,  383 => 210,  380 => 209,  375 => 208,  372 => 207,  368 => 206,  339 => 179,  302 => 144,  296 => 141,  281 => 129,  268 => 119,  259 => 113,  255 => 112,  251 => 111,  233 => 96,  227 => 93,  212 => 81,  199 => 71,  190 => 65,  186 => 64,  182 => 63,  164 => 48,  158 => 45,  143 => 33,  130 => 23,  121 => 17,  117 => 16,  113 => 15,  100 => 4,  87 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}{{ title }}{% endblock %}
{% block body %}


    <div class=\"modal fade right\" id=\"mdModalDocument\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header text-white bg-green p-l-20\">
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">LIER DES FICHIERS À UN CHANTIERS</h3>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        {{ form_start(formUpload, {'enctype':'multipart/form-data','attr': {'id': 'addFileForm'}}) }}
                        {{ form_row(formUpload._token) }}
                        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addFileChantier') }}\"/>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">IMPORTER DES FICHIERS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        {{ form_widget(formUpload.nomfichier,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">CHANTIERS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        {{ form_widget(formUpload.chantier,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"addFileChantier\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-pri\">
                            <div type=\"button\" id=\"closeFileChantier\"
                                 class=\"btn btn-link waves-effect text-white bg-pink\" data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadFileChantier\">
                        </div>
                        {{ form_end(formUpload) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"mdModalFiche\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header text-white bg-green p-l-20\">
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">AJOUTER DES FICHIERS TECHNIQUES</h3>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        {{ form_start(formUploada, {'enctype':'multipart/form-data','attr': {'id': 'addFileTechniqueForm'}}) }}
                        {{ form_row(formUploada._token) }}
                        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addFileTech') }}\"/>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">IMPORTER DES FICHIERS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        {{ form_widget(formUploada.nomfichier,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">CATÉGORIES</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        {{ form_widget(formUploada.categorie,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"addFileTechnique\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-pri\">
                            <div type=\"button\" id=\"closeFileTechnique\"
                                 class=\"btn btn-link waves-effect text-white bg-pink\" data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadFileTechnique\">
                        </div>
                        {{ form_end(formUploada) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"mdModalFicheDesc\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header text-white bg-green p-l-20\">
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">AJOUTER DES DESCRIPTIFS TECHNIQUES</h3>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        {{ form_start(formUploado, {'enctype':'multipart/form-data','attr': {'id': 'addFileDescForm'}}) }}
                        {{ form_row(formUploado._token) }}
                        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addFileDesc') }}\"/>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">IMPORTER DES FICIERS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        {{ form_widget(formUploado.nomfichier,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">CATÉGORIES</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        {{ form_widget(formUploado.categorie,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"addFileDesc\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-pri\">
                            <div type=\"button\" id=\"closeFileDesc\"
                                 class=\"btn btn-link waves-effect text-white bg-pink\" data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadFileDesc\">
                        </div>
                        {{ form_end(formUploada) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class=\"content\" style=\"margin-top: 30px\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"panel-group\" id=\"accordion_1\" role=\"tablist\" aria-multiselectable=\"true\">

                    <div class=\"row clearfix m-t-40\">
                        <div class=\"col-sm-12 col-md-12\">
                            <h4 class=\"col-pink fontez\"><u>GESTION DES FICHIERS</u></h4><br>
                            <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\"
                                    data-target=\"#mdModalDocument\">
                                LIER DES FICHIERS À UN CHANTIER
                            </button>

                            <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\"
                                    data-target=\"#mdModalFiche\">
                                AJOUTER DES FICHES TECHNIQUES
                            </button>

                            <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\"
                                    data-target=\"#mdModalFicheDesc\">
                                AJOUTER DES DESCRIPTIFS TECHNIQUES
                            </button>

                        </div>
                    </div>


                    {# FICHIER #}
                    <div class=\"panel panel-pri\" style=\"margin-top:10px\">
                        <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingFich\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed col-white outai\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseFich\" aria-expanded=\"false\"
                                   aria-controls=\"collapseFich\">
                                    <i class=\"material-icons text-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>
                                    Fichiers des différents chantiers
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseFich\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingFich\">
                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"table-responsive shadow\" style=\"padding: 10px\">
                                    <table class=\"table-striped table-bordered display nowrap\" id=\"dataFichies\"
                                           style=\"width: 100%\">
                                        <thead>
                                        <tr class=\"text-center\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th class=\"mw100\">DATE D'AJOUT</th>
                                            <th>DOCUMENTS</th>
                                            <th>CHANTIER</th>
                                            <th class=\"text-center\">TAILLE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for client in clients %}
                                            {% if client.corbeille is null %}
                                                {% for chantier in client.chantiers %}
                                                    {% if chantier.corbeille is null %}
                                                        {% for fichier in chantier.fichiers %}
                                                            <tr>
                                                                <td class=\"text-center\">
                                                                    <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                           class=\"FICHIES\"
                                                                           value=\"{{ fichier.id }}\"></td>
                                                                <td>{{ fichier.date|date('Y.m.d H.i.s') }}</td>
                                                                <td style=\"padding: 2px !important;\">
                                                                    <a href=\"/{{ fichier.folde }}/{{ fichier.nomfichier }}\"
                                                                       class=\"col-blue\" style=\"font-weight: 600\"
                                                                       target=\"_blank\">{{ fichier.nomfichier }}</a>
                                                                </td>
                                                                <td>
                                                                    <a href=\"{{ path('chantier', {'id': chantier.id}) }}\"
                                                                       title=\"{{ chantier.nomchantier }}\"
                                                                       class=\"col-blue\">{{ chantier.client.nomclient|upper }}
                                                                        | {{ chantier.nomchantier|upper }}</a>
                                                                </td>
                                                                <td class=\"text-center\"
                                                                    style=\"padding: 2px !important\">{{ (fichier.taille/1000000)|number_format(2, ',', ' ') }}
                                                                    Mo
                                                                </td>
                                                            </tr>
                                                        {% endfor %}
                                                    {% endif %}
                                                {% endfor %}
                                            {% endif %}
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    {# FIN FICHER #}

                    {# FICHES TECHNIQUES #}
                    <div class=\"panel panel-pri\">
                        <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingFichi\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed col-white outai\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseFichi\" aria-expanded=\"false\"
                                   aria-controls=\"collapseFichi\">
                                    <i class=\"material-icons text-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>
                                    Fiches techniques
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseFichi\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingFichi\">
                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"table-responsive shadow\" style=\"padding: 10px\">
                                    <table class=\"table-striped table-bordered display nowrap\"
                                           id=\"dataFichiesTech\" style=\"width: 100%\">
                                        <thead>
                                        <tr class=\"text-center\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th class=\"mw100\">DATE D'AJOUT</th>
                                            <th>DOCUMENTS</th>
                                            <th>CATÉGORIE</th>
                                            <th class=\"text-center\">TAILLE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for fichier in fichies %}
                                            {% if fichier.type == \"technique\" %}
                                            <tr>
                                                <td class=\"text-center\">
                                                    <input type=\"checkbox\" data-toggle=\"toggle\"
                                                           class=\"FICHIESTECH\"
                                                           value=\"{{ fichier.id }}\"></td>
                                                <td>{{ fichier.date|date('Y.m.d H.i.s') }}</td>
                                                <td style=\"padding: 2px !important;\">
                                                    <a href=\"/{{ fichier.folde }}/{{ fichier.nomfichier }}\"
                                                       class=\"col-blue\" style=\"font-weight: 600\"
                                                       target=\"_blank\">{{ fichier.nomfichier }}</a>
                                                </td>
                                                <td>{{ fichier.categorie|capitalize }}
                                                </td>
                                                <td class=\"text-center\"
                                                    style=\"padding: 2px !important\">{{ (fichier.taille/1000000)|number_format(2, ',', ' ') }}
                                                    Mo
                                                </td>
                                            </tr>
                                        {% endif %}
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    {# FIN FICHES #}

                    {# DESCRIPTIFS TECHNIQUES #}
                    <div class=\"panel panel-pri\">
                        <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingFichidesc\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed col-white outai\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseFichidesc\" aria-expanded=\"false\"
                                   aria-controls=\"collapseFichi\">
                                    <i class=\"material-icons text-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>
                                    Descriptifs techniques
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseFichidesc\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingFichidesc\">
                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"table-responsive shadow\" style=\"padding: 10px\">
                                    <table class=\"table-striped table-bordered display nowrap\" style=\"width: 100%\"
                                           id=\"dataFichiesDesc\">
                                        <thead>
                                        <tr class=\"text-center\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th>DATE D'AJOUT</th>
                                            <th>DOCUMENTS</th>
                                            <th>CATÉGORIE</th>
                                            <th class=\"text-center\">TAILLE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for fichier in fichidesc %}
                                            <tr>
                                                <td class=\"text-center\">
                                                    <input type=\"checkbox\" data-toggle=\"toggle\"
                                                           class=\"FICHIESDESC\"
                                                           value=\"{{ fichier.id }}\"></td>
                                                <td>{{ fichier.date|date('Y.m.d H.i.s') }}</td>
                                                <td style=\"padding: 2px !important;\">
                                                    <a href=\"/{{ fichier.folde }}/{{ fichier.nomfichier }}\"
                                                       class=\"col-blue\" style=\"font-weight: 600\"
                                                       target=\"_blank\">{{ fichier.nomfichier }}</a>
                                                </td>
                                                <td>{{ fichier.categorie|capitalize }}</td>
                                                <td class=\"text-center\"
                                                    style=\"padding: 2px !important\">{{ (fichier.taille/1000000)|number_format(2, ',', ' ') }}
                                                    Mo
                                                </td>
                                            </tr>
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    {# FIN FICHES #}

                </div>
            </div>
        </div>
    </section>

    <div class=\"modal fade right\" id=\"modalFicheLoading\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header text-white bg-green p-l-20\">
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">ENREGISTREMENT UN FICHIER</h3>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        {{ form_start(formSave, {'enctype':'multipart/form-data','attr': {'id': 'addFileLoadingForm'}}) }}
                        {{ form_row(formSave._token) }}
                        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addFileLoad') }}\"/>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">IMPORTER UN FICHIER</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        {{ form_widget(formSave.nomfichier,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">CATÉGORIES</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        {{ form_widget(formSave.categorie,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"addFileLoading\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-pri\">
                            <div type=\"button\" id=\"closeFileLoading\"
                                 class=\"btn btn-link waves-effect text-white bg-pink\" data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadFileLoading\">
                        </div>
                        {{ form_end(formSave) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class=\"content\" style=\"margin-top: 30px\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"panel-group\" id=\"accordion_1\" role=\"tablist\" aria-multiselectable=\"true\">
                    <div class=\"row clearfix m-t-40\">
                        <div class=\"col-sm-12 col-md-12\">
                            <h4 class=\"col-black fontez\"><u>ENREGISTREMENT DES DONNÉES DANS LA BASE DE DONNÉES</u></h4>
                            <br>
                            <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\"
                                    data-target=\"#modalFicheLoading\">
                                IMPORTER UN FICHIER
                            </button>
                        </div>
                    </div>

                    {# FICHES TECHNIQUES #}
                    <div class=\"panel panel-pri\">
                        <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingFichiLoad\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed col-white outai\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseFichiLoad\" aria-expanded=\"false\"
                                   aria-controls=\"collapseFichiLoad\">
                                    <i class=\"material-icons text-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>
                                    Fichiers de données enregistrés
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseFichiLoad\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingFichiLoad\">
                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"table-responsive shadow\" style=\"padding: 10px\">
                                    <table class=\"table-striped table-bordered display nowrap\"
                                           id=\"dataFichesLoading\" style=\"width: 100%\">
                                        <thead>
                                        <tr class=\"text-center\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th class=\"mw100\">DATE D'AJOUT</th>
                                            <th>DOCUMENTS</th>
                                            <th>CATÉGORIE</th>
                                            <th class=\"text-center\">TAILLE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for fichier in fichos %}
                                            {% if fichier.type == \"save\" %}
                                                <tr>
                                                    <td class=\"text-center\">
                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                               class=\"FILOAD\"
                                                               value=\"{{ fichier.id }}\"></td>
                                                    <td>{{ fichier.date|date('Y.m.d H.i.s') }}</td>
                                                    <td style=\"padding: 2px !important;\">
                                                        <a href=\"/{{ fichier.folde }}/{{ fichier.nomfichier }}\"
                                                           class=\"col-blue\" style=\"font-weight: 600\"
                                                           target=\"_blank\">{{ fichier.nomfichier }}</a>
                                                    </td>
                                                    <td>{{ fichier.categorie|capitalize }}
                                                    </td>
                                                    <td class=\"text-center\"
                                                        style=\"padding: 2px !important\">{{ (fichier.taille/1000000)|number_format(2, ',', ' ') }}
                                                        Mo
                                                    </td>
                                                </tr>
                                            {% endif %}
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    {# FIN FICHES #}

                </div>
            </div>
        </div>
    </section>


{% endblock %}
", "content/document.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\document.html.twig");
    }
}
