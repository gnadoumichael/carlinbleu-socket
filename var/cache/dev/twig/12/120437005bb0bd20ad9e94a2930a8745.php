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

/* content/article.html.twig */
class __TwigTemplate_cf652c3bb1d3c8fe05d0ce550fd40507 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/article.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/article.html.twig"));

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
        yield "    <style>
        .btn {
            text-align: left !important;
        }
    </style>

    <input type=\"text\" class=\"hide\" id=\"idfamille\" value=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["idfamille"]) || array_key_exists("idfamille", $context) ? $context["idfamille"] : (function () { throw new RuntimeError('Variable "idfamille" does not exist.', 10, $this->source); })()), "html", null, true);
        yield "\">
    <input type=\"text\" class=\"hide\" id=\"idfourn\" value=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["idfourn"]) || array_key_exists("idfourn", $context) ? $context["idfourn"] : (function () { throw new RuntimeError('Variable "idfourn" does not exist.', 11, $this->source); })()), "html", null, true);
        yield "\">
    <input type=\"text\" class=\"hide\" id=\"idarticle\" value=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["idarticle"]) || array_key_exists("idarticle", $context) ? $context["idarticle"] : (function () { throw new RuntimeError('Variable "idarticle" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "\">

    <div class=\"modal fade right\" id=\"modalFamille\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                ";
        // line 19
        if ((($tmp = (isset($context["editFamille"]) || array_key_exists("editFamille", $context) ? $context["editFamille"] : (function () { throw new RuntimeError('Variable "editFamille" does not exist.', 19, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 20
            yield "                    <div class=\"p-5 bg-green\">
                        <div class=\"modal-header text-white\">
                            <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">1- MODIFIER UNE FAMILLE</h4>
                        </div>
                    </div>
                ";
        } else {
            // line 26
            yield "                    <div class=\"p-5 bg-pri\">
                        <div class=\"modal-header text-white\">
                            <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">1- AJOUTER UNE FAMILLE</h4>
                        </div>
                    </div>
                ";
        }
        // line 32
        yield "                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
        // line 34
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 34, $this->source); })()), 'form_start', ["attr" => ["id" => "addFamilleForm"]]);
        yield "
                        ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 35, $this->source); })()), "_token", [], "any", false, false, false, 35), 'row');
        yield "
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">FAMILLE D'ARTICLES<span
                                            class=\"col-pink\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 42
        if ((($tmp = (isset($context["editFamille"]) || array_key_exists("editFamille", $context) ? $context["editFamille"] : (function () { throw new RuntimeError('Variable "editFamille" does not exist.', 42, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 43, $this->source); })()), "famille", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
            yield "
                                        ";
        } else {
            // line 45
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 45, $this->source); })()), "famille", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
            yield "
                                        ";
        }
        // line 47
        yield "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            ";
        // line 52
        if ((($tmp = (isset($context["editFamille"]) || array_key_exists("editFamille", $context) ? $context["editFamille"] : (function () { throw new RuntimeError('Variable "editFamille" does not exist.', 52, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 53
            yield "                                <input type=\"submit\" id=\"updateFamille\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect text-white bg-green\">
                            ";
        } else {
            // line 56
            yield "                                <input type=\"submit\" id=\"addFamille\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-pri\">
                            ";
        }
        // line 59
        yield "
                            <a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
        yield "\" type=\"button\" id=\"closeFamille\"
                               class=\"btn btn-link waves-effect text-white bg-pink\">FERMER
                            </a>
                            <img src=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadFamille\">
                        </div>
                        ";
        // line 66
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 66, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalFournisseur\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                ";
        // line 77
        if ((($tmp = (isset($context["editFourn"]) || array_key_exists("editFourn", $context) ? $context["editFourn"] : (function () { throw new RuntimeError('Variable "editFourn" does not exist.', 77, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 78
            yield "                    <div class=\"p-5 bg-green\">
                        <div class=\"modal-header text-white\">
                            <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">3- MODIFIER UN FOURNISSEUR</h4>
                        </div>
                    </div>
                ";
        } else {
            // line 84
            yield "                    <div class=\"p-5 bg-pri\">
                        <div class=\"modal-header text-white\">
                            <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">3- AJOUTER UN FOURNISSEUR</h4>
                        </div>
                    </div>
                ";
        }
        // line 90
        yield "                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">

                        ";
        // line 93
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formfourn"]) || array_key_exists("formfourn", $context) ? $context["formfourn"] : (function () { throw new RuntimeError('Variable "formfourn" does not exist.', 93, $this->source); })()), 'form_start', ["attr" => ["id" => "addFournisseurForm"]]);
        yield "
                        ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formfourn"]) || array_key_exists("formfourn", $context) ? $context["formfourn"] : (function () { throw new RuntimeError('Variable "formfourn" does not exist.', 94, $this->source); })()), "_token", [], "any", false, false, false, 94), 'row');
        yield "
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">FOURNISSUER
                                    <span class=\"col-pink\">*</span></label>

                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formfourn"]) || array_key_exists("formfourn", $context) ? $context["formfourn"] : (function () { throw new RuntimeError('Variable "formfourn" does not exist.', 102, $this->source); })()), "fournisseur", [], "any", false, false, false, 102), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">TÉLÉPHONE MOBILE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formfourn"]) || array_key_exists("formfourn", $context) ? $context["formfourn"] : (function () { throw new RuntimeError('Variable "formfourn" does not exist.', 112, $this->source); })()), "mobile", [], "any", false, false, false, 112), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">ADRESSE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 120
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formfourn"]) || array_key_exists("formfourn", $context) ? $context["formfourn"] : (function () { throw new RuntimeError('Variable "formfourn" does not exist.', 120, $this->source); })()), "adresse", [], "any", false, false, false, 120), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 130
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formfourn"]) || array_key_exists("formfourn", $context) ? $context["formfourn"] : (function () { throw new RuntimeError('Variable "formfourn" does not exist.', 130, $this->source); })()), "mail", [], "any", false, false, false, 130), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            ";
        // line 136
        if ((($tmp = (isset($context["editFourn"]) || array_key_exists("editFourn", $context) ? $context["editFourn"] : (function () { throw new RuntimeError('Variable "editFourn" does not exist.', 136, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 137
            yield "                                <input type=\"submit\" id=\"updateFourn\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect text-white bg-green\">
                            ";
        } else {
            // line 140
            yield "                                <input type=\"submit\" id=\"addFourn\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-pri\">
                            ";
        }
        // line 143
        yield "
                            <div type=\"button\" id=\"closeFourn\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">FERMER
                            </div>
                            <img src=\"";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadFourn\">
                        </div>
                        ";
        // line 150
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formfourn"]) || array_key_exists("formfourn", $context) ? $context["formfourn"] : (function () { throw new RuntimeError('Variable "formfourn" does not exist.', 150, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalArticle\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                ";
        // line 161
        if ((($tmp = (isset($context["editArticle"]) || array_key_exists("editArticle", $context) ? $context["editArticle"] : (function () { throw new RuntimeError('Variable "editArticle" does not exist.', 161, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 162
            yield "                    <div class=\"p-5 bg-green\">
                        <div class=\"modal-header text-white\">
                            <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">MODIFIER UN MATÉRIAU / MATÉRIEL</h4>
                        </div>
                    </div>
                ";
        } else {
            // line 168
            yield "                    <div class=\"p-5 bg-pri\">
                        <div class=\"modal-header text-white\">
                            <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">AJOUTER UN MATÉRIAU / MATÉRIEL</h4>
                        </div>
                    </div>
                ";
        }
        // line 174
        yield "                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
        // line 176
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), 'form_start', ["attr" => ["id" => "form4"]]);
        yield "
                        ";
        // line 177
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), "_token", [], "any", false, false, false, 177), 'row');
        yield "
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">FAMILLE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 183
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), "famille", [], "any", false, false, false, 183), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">TYPE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 191
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "typear", [], "any", false, false, false, 191), 'widget', ["id" => "typear", "attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">FOURNISSEUR</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 201
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 201, $this->source); })()), "fournisseur", [], "any", false, false, false, 201), 'widget', ["attr" => ["class" => "form-control four"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">UNITÉ<span
                                            class=\"col-pink\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 210
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 210, $this->source); })()), "unite", [], "any", false, false, false, 210), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DÉSIGNATION<span
                                            class=\"col-pink\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 221
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 221, $this->source); })()), "designation", [], "any", false, false, false, 221), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">MARQUE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 231
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 231, $this->source); })()), "marque", [], "any", false, false, false, 231), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 239
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 239, $this->source); })()), "reference", [], "any", false, false, false, 239), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 249
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 249, $this->source); })()), "monnaies", [], "any", false, false, false, 249), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">PRIX D'ACHAT<span
                                            class=\"col-pink\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 258
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 258, $this->source); })()), "pu", [], "any", false, false, false, 258), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">STOCK INITIAL</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 268
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 268, $this->source); })()), "stock", [], "any", false, false, false, 268), 'widget', ["type" => "number", "attr" => ["class" => "form-control stock"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DISPONIBILITÉ</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 276
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 276, $this->source); })()), "disponibilite", [], "any", false, false, false, 276), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DESCRIPTION TECHNIQUE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 286
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 286, $this->source); })()), "description", [], "any", false, false, false, 286), 'widget', ["id" => "editor", "attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            ";
        // line 292
        if ((($tmp = (isset($context["editArticle"]) || array_key_exists("editArticle", $context) ? $context["editArticle"] : (function () { throw new RuntimeError('Variable "editArticle" does not exist.', 292, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 293
            yield "                                <input type=\"text\" class=\"hide\" id=\"idarticle\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["idarticle"]) || array_key_exists("idarticle", $context) ? $context["idarticle"] : (function () { throw new RuntimeError('Variable "idarticle" does not exist.', 293, $this->source); })()), "html", null, true);
            yield "\">
                                <input type=\"submit\" id=\"updateArticle\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect text-white bg-green\">
                            ";
        } else {
            // line 297
            yield "                                <input type=\"submit\" id=\"addArticle\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-pri\">
                            ";
        }
        // line 300
        yield "
                            <a href=\"";
        // line 301
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
        yield "\" type=\"button\" id=\"closeArticle\"
                               class=\"btn btn-link waves-effect text-white bg-pink\"
                               data-dismiss=\"modal\">FERMER
                            </a>
                            <img src=\"";
        // line 305
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadArticle\">
                        </div>
                        ";
        // line 308
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 308, $this->source); })()), 'form_end');
        yield "
                        <br><br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalPartage\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-pri\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">5- PARTAGER VOS ARTICLES</h4>
                    </div>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">

                        ";
        // line 328
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formpart"]) || array_key_exists("formpart", $context) ? $context["formpart"] : (function () { throw new RuntimeError('Variable "formpart" does not exist.', 328, $this->source); })()), 'form_start', ["attr" => ["id" => "form5"]]);
        yield "
                        ";
        // line 329
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formpart"]) || array_key_exists("formpart", $context) ? $context["formpart"] : (function () { throw new RuntimeError('Variable "formpart" does not exist.', 329, $this->source); })()), "_token", [], "any", false, false, false, 329), 'row');
        yield "
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">Famille d'article
                                    <span class=\"col-pink\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 336
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formpart"]) || array_key_exists("formpart", $context) ? $context["formpart"] : (function () { throw new RuntimeError('Variable "formpart" does not exist.', 336, $this->source); })()), "metier", [], "any", false, false, false, 336), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">Article</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 346
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formpart"]) || array_key_exists("formpart", $context) ? $context["formpart"] : (function () { throw new RuntimeError('Variable "formpart" does not exist.', 346, $this->source); })()), "article", [], "any", false, false, false, 346), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"addArticle\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-pri\">
                            <div type=\"button\" id=\"closeArticle\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">FERMER
                            </div>
                            <img src=\"";
        // line 357
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 60px; display:none;\"
                                 class=\"align-justify\" id=\"loadArticle\">
                        </div>
                        ";
        // line 360
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formpart"]) || array_key_exists("formpart", $context) ? $context["formpart"] : (function () { throw new RuntimeError('Variable "formpart" does not exist.', 360, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class=\"content fixed-top\">
        <div class=\"container-fluid\" style=\"margin: 0 14px 0 14px\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div id=\"ressult\" style=\"width: 100%; align-content: start\" class=\"text-left\"></div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"content\" style=\"margin-top: 100px !important;\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0\"
                     style=\"background-color:#d1d3e2 !important;\">
                    <h3 class=\"col-pink bolo700 \">MATÉRIELS & MATÉRIAUX</h3>

                    <div class=\" row clearfix text-center m-t-20 p-b-5\">
                        <div class=\"col-sm-12\">
                            <div class=\"btn-group btn-group-sm \" style=\"margin: auto\" role=\"group\"
                                 aria-label=\"Small button group\">
                                <button type=\"button\" data-toggle=\"modal\" data-target=\"#modalFamille\"
                                        class=\"btn bg-pri text-white\" style=\"border:1px solid #dddfeb\">+ FAMILLE
                                </button>

                                <button type=\"button\" data-toggle=\"modal\" data-target=\"#modalFournisseur\"
                                        class=\"btn bg-pri text-white\" style=\"border:1px solid #dddfeb\">+ FOURNISSEUR
                                </button>

                                <button type=\"button\" data-toggle=\"modal\" data-target=\"#modalArticle\"
                                        class=\"btn bg-blue text-white\" style=\"border:1px solid #dddfeb\">+ MATÉRIAU / MATÉRIEL
                                </button>
                            </div>
                        </div>
                    </div>
                     <br>

                    <div class=\"row clearfix\">
                        <div class=\"col-sm-6\">
                            <div class=\"card shadow \">
                                <div class=\"card-body\" style=\"padding: 20px\">
                                    <div class=\"table-responsive\" style=\"padding-bottom: 20px\">
                                        <h4 class=\"pri bolo700\">FAMILLES</h4>
                                        <hr class=\"m-t--5\">
                                        <table class=\"table-bordered\" id=\"dataFAMILLE\"
                                               style=\"padding: 0; width: 100%\">
                                            <thead class=\"bg-blue\">
                                            <th style=\"width: 10px !important;\" class=\"col-white\"></th>
                                            <th class=\"col-white\">FAMILLES</th>
                                            <th></th>
                                            </thead>
                                            <tbody>
                                            ";
        // line 418
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 418, $this->source); })()), "user", [], "any", false, false, false, 418), "famille", [], "any", false, false, false, 418));
        foreach ($context['_seq'] as $context["_key"] => $context["famille"]) {
            // line 419
            yield "                                                ";
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["famille"], "type", [], "any", false, false, false, 419) == 1) && (null === CoreExtension::getAttribute($this->env, $this->source, $context["famille"], "corbeille", [], "any", false, false, false, 419)))) {
                // line 420
                yield "                                                    <tr>
                                                        <td align=\"center\">
                                                            <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                   class=\"FAMY\"
                                                                   value=\"";
                // line 424
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["famille"], "id", [], "any", false, false, false, 424), "html", null, true);
                yield "\"></td>
                                                        <td class=\"col-black bolo600\">";
                // line 425
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["famille"], "famille", [], "any", false, false, false, 425)), "html", null, true);
                yield "</td>
                                                        <td class=\"col-blue-grey bolo600 text-center\">";
                // line 426
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["famille"], "articles", [], "any", false, false, false, 426), "count", [], "any", false, false, false, 426), "html", null, true);
                yield "</td>
                                                    </tr>
                                                ";
            }
            // line 429
            yield "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['famille'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 430
        yield "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"card shadow \">
                                <div class=\"card-body\" style=\"padding: 20px\">
                                    <div class=\"table-responsive\" style=\"padding-bottom: 20px\">
                                        <h4 class=\"pri  bolo700\">FOURNISSEURS</h4>
                                        <hr class=\"m-t--5\">
                                        <table class=\"table-bordered\" id=\"dataFOURNISSEUR\"
                                               style=\"padding: 0; width: 100%\">
                                            <thead class=\"bg-blue\">
                                            <th style=\"width: 10px !important;\" class=\"col-white\"></th>
                                            <th class=\"col-white\">FOURNISSEURS</th>
                                            </thead>
                                            <tbody>
                                            ";
        // line 449
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 449, $this->source); })()), "user", [], "any", false, false, false, 449), "fournisseurs", [], "any", false, false, false, 449));
        foreach ($context['_seq'] as $context["_key"] => $context["fourn"]) {
            // line 450
            yield "                                                ";
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["fourn"], "type", [], "any", false, false, false, 450) == 1) && (CoreExtension::getAttribute($this->env, $this->source, $context["fourn"], "corbeille", [], "any", false, false, false, 450) == null))) {
                // line 451
                yield "                                                    <tr>
                                                        <td align=\"center\">
                                                            <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                   class=\"FOUR\"
                                                                   value=\"";
                // line 455
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fourn"], "id", [], "any", false, false, false, 455), "html", null, true);
                yield "\"></td>

                                                        <td class=\"bolo600\">
                                                            <span class=\"col-blue bolo600\">";
                // line 458
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["fourn"], "fournisseur", [], "any", false, false, false, 458)), "html", null, true);
                yield "</span><br>
                                                            Adresse: <span class=\"col-blue bolo600\">";
                // line 459
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fourn"], "adresse", [], "any", false, false, false, 459), "html", null, true);
                yield "</span><br>
                                                            E-mail: <span class=\"col-blue bolo600\">";
                // line 460
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fourn"], "mail", [], "any", false, false, false, 460), "html", null, true);
                yield "</span><br>
                                                            Mobile: <span class=\"col-blue bolo600\">";
                // line 461
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fourn"], "mobile", [], "any", false, false, false, 461), "html", null, true);
                yield "</span><br>
                                                            Téléphone: <span class=\"col-blue bolo600\">";
                // line 462
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fourn"], "telephone", [], "any", false, false, false, 462), "html", null, true);
                yield "</span>
                                                        </td>
                                                    </tr>
                                                ";
            }
            // line 466
            yield "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['fourn'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 467
        yield "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix\">
                        <div class=\"col-sm-12\">
                            ";
        // line 477
        yield "                            <div class=\"card shadow \">
                                <div class=\"card-body\" style=\"padding: 20px\">
                                    <div class=\"table-responsive\" style=\"padding-bottom: 30px\">
                                        <h4 class=\"pri  bolo700\">MATÉRIELS & MATÉRIAUX</h4>
                                        <hr class=\"m-t--5\">
                                        <table class=\"table-bordered\" id=\"dataARTICLES\"
                                               style=\"padding: 0; width: 100%\">
                                            <thead class=\"bg-blue\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th class=\"col-white\">FAMILLES </th>
                                            <th class=\"col-white mw250\">DÉSIGNATION</th>
                                            <th class=\"col-white\" style=\"text-align: center !important;\">
                                                P.&nbsp;D'ACHAT
                                            </th>
                                            <th class=\"col-white\" style=\"text-align: center !important;\">UNITÉ
                                            </th>
                                            <th class=\"col-white\" style=\"text-align: center !important;\">
                                                STOCK&nbsp;RÉEL
                                            </th>
                                            </thead>
                                            <tbody>
                                            ";
        // line 498
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 498, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 499
            yield "                                                ";
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "typear", [], "any", false, false, false, 499), "id", [], "any", false, false, false, 499) == 1) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "typear", [], "any", false, false, false, 499), "id", [], "any", false, false, false, 499) == 3))) {
                // line 500
                yield "                                                    <tr>
                                                        <td align=\"center\">
                                                            <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                   class=\"ARTYS\"
                                                                   value=\"";
                // line 504
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 504), "html", null, true);
                yield "\"></td>

                                                        <td class=\"bolo700 bg-light\">";
                // line 506
                if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["article"], "famille", [], "any", false, false, false, 506))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "famille", [], "any", false, false, false, 506), "famille", [], "any", false, false, false, 506)), "html", null, true);
                }
                yield "</td>

                                                        <td class=\"col-black bolo600\"
                                                            title=\"";
                // line 509
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 509)), "html", null, true);
                yield "\">
                                                            ";
                // line 510
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "designation", [], "any", false, false, false, 510), "html", null, true);
                yield "<br><span
                                                                    class=\"col-pink\">";
                // line 511
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "reference", [], "any", false, false, false, 511) != null)) {
                    yield "Réf:";
                }
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "reference", [], "any", false, false, false, 511), "html", null, true);
                yield "</span>
                                                        </td>

                                                        <td class=\"text-right bolo600\">";
                // line 514
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "pu", [], "any", false, false, false, 514), 2, ",", " "), "html", null, true);
                yield "
                                                            &nbsp;";
                // line 515
                if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["article"], "monnaies", [], "any", false, false, false, 515))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "monnaies", [], "any", false, false, false, 515), "code", [], "any", false, false, false, 515), "html", null, true);
                }
                yield "</td>
                                                        <td class=\"text-center bolo600\">";
                // line 516
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "unite", [], "any", false, false, false, 516), "html", null, true);
                yield "</td>
                                                        <td class=\"text-center bolo600\">";
                // line 517
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "stock", [], "any", false, false, false, 517), "html", null, true);
                yield "</td>
                                                    </tr>
                                                ";
            }
            // line 520
            yield "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 521
        yield "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            ";
        // line 527
        yield "                            <div class=\"card shadow\">
                                <div class=\"card-body\" style=\"padding: 20px 20px 50px 20px\">
                                    <h4 class=\"pri  bolo700\">SERVICES</h4>
                                    <table class=\"table-bordered\" id=\"dataARTY\"
                                           style=\"padding: 0; width: 100%\">
                                        <thead class=\"bg-blue\">
                                        <th style=\"width: 10px !important;\" class=\"col-white\"></th>
                                        <th class=\"col-white\">FAMILLES</th>
                                        <th class=\"col-white\">DÉSIGNATION</th>
                                        <th class=\"col-white\"
                                            style=\"text-align: center !important;width:150px !important\">PRIX&nbsp;DE&nbsp;VENTE
                                        </th>
                                        <th class=\"col-white\" style=\"text-align: center !important; \">UNITÉ</th>
                                        </thead>
                                        <tbody>
                                        ";
        // line 542
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 542, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 543
            yield "                                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "typear", [], "any", false, false, false, 543), "id", [], "any", false, false, false, 543) == 2)) {
                // line 544
                yield "                                                <tr>
                                                    <td class=\"text-center\">
                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                               class=\"ARTYS2\"
                                                               value=\"";
                // line 548
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 548), "html", null, true);
                yield "\"></td>

                                                    <td class=\"bolo600\">";
                // line 550
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "famille", [], "any", false, false, false, 550), "famille", [], "any", false, false, false, 550)), "html", null, true);
                yield "</td>

                                                    <td class=\"col-black bolo600\"
                                                        title=\"";
                // line 553
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["article"], "designation", [], "any", false, false, false, 553)), "html", null, true);
                yield "\">
                                                        <a href=\"";
                // line 554
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addBonArticle", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 554)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "designation", [], "any", false, false, false, 554), "html", null, true);
                yield "</a><br><span
                                                                class=\"col-pink\">";
                // line 555
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "reference", [], "any", false, false, false, 555) != null)) {
                    yield "Réf:";
                }
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "reference", [], "any", false, false, false, 555), "html", null, true);
                yield "</span>
                                                    </td>
                                                    <td class=\"text-right bolo600\">
                                                        ";
                // line 558
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "pu", [], "any", false, false, false, 558), 2, ",", " "), "html", null, true);
                yield "
                                                        &nbsp;";
                // line 559
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "monnaies", [], "any", false, false, false, 559), "code", [], "any", false, false, false, 559), "html", null, true);
                yield "</td>
                                                    <td class=\"text-center bolo600\">";
                // line 560
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "unite", [], "any", false, false, false, 560), "html", null, true);
                yield "</td>
                                                </tr>
                                            ";
            }
            // line 563
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 564
        yield "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
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
        return "content/article.html.twig";
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
        return array (  982 => 564,  976 => 563,  970 => 560,  966 => 559,  962 => 558,  952 => 555,  946 => 554,  942 => 553,  936 => 550,  931 => 548,  925 => 544,  922 => 543,  918 => 542,  901 => 527,  894 => 521,  888 => 520,  882 => 517,  878 => 516,  872 => 515,  868 => 514,  858 => 511,  854 => 510,  850 => 509,  842 => 506,  837 => 504,  831 => 500,  828 => 499,  824 => 498,  801 => 477,  790 => 467,  784 => 466,  777 => 462,  773 => 461,  769 => 460,  765 => 459,  761 => 458,  755 => 455,  749 => 451,  746 => 450,  742 => 449,  721 => 430,  715 => 429,  709 => 426,  705 => 425,  701 => 424,  695 => 420,  692 => 419,  688 => 418,  627 => 360,  621 => 357,  607 => 346,  594 => 336,  584 => 329,  580 => 328,  557 => 308,  551 => 305,  544 => 301,  541 => 300,  536 => 297,  528 => 293,  526 => 292,  517 => 286,  504 => 276,  493 => 268,  480 => 258,  468 => 249,  455 => 239,  444 => 231,  431 => 221,  417 => 210,  405 => 201,  392 => 191,  381 => 183,  372 => 177,  368 => 176,  364 => 174,  356 => 168,  348 => 162,  346 => 161,  332 => 150,  326 => 147,  320 => 143,  315 => 140,  310 => 137,  308 => 136,  299 => 130,  286 => 120,  275 => 112,  262 => 102,  251 => 94,  247 => 93,  242 => 90,  234 => 84,  226 => 78,  224 => 77,  210 => 66,  204 => 63,  198 => 60,  195 => 59,  190 => 56,  185 => 53,  183 => 52,  176 => 47,  170 => 45,  164 => 43,  162 => 42,  152 => 35,  148 => 34,  144 => 32,  136 => 26,  128 => 20,  126 => 19,  116 => 12,  112 => 11,  108 => 10,  100 => 4,  87 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}{{ title }}{% endblock %}
{% block body %}
    <style>
        .btn {
            text-align: left !important;
        }
    </style>

    <input type=\"text\" class=\"hide\" id=\"idfamille\" value=\"{{ idfamille }}\">
    <input type=\"text\" class=\"hide\" id=\"idfourn\" value=\"{{ idfourn }}\">
    <input type=\"text\" class=\"hide\" id=\"idarticle\" value=\"{{ idarticle }}\">

    <div class=\"modal fade right\" id=\"modalFamille\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                {% if editFamille %}
                    <div class=\"p-5 bg-green\">
                        <div class=\"modal-header text-white\">
                            <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">1- MODIFIER UNE FAMILLE</h4>
                        </div>
                    </div>
                {% else %}
                    <div class=\"p-5 bg-pri\">
                        <div class=\"modal-header text-white\">
                            <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">1- AJOUTER UNE FAMILLE</h4>
                        </div>
                    </div>
                {% endif %}
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        {{ form_start(forme, {'attr': {'id': 'addFamilleForm'}}) }}
                        {{ form_row(forme._token) }}
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">FAMILLE D'ARTICLES<span
                                            class=\"col-pink\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {% if editFamille %}
                                            {{ form_widget(forme.famille,{'attr':{'class':'form-control col-pink'}}) }}
                                        {% else %}
                                            {{ form_widget(forme.famille,{'attr':{'class':'form-control form-control-user'}}) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            {% if editFamille %}
                                <input type=\"submit\" id=\"updateFamille\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect text-white bg-green\">
                            {% else %}
                                <input type=\"submit\" id=\"addFamille\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-pri\">
                            {% endif %}

                            <a href=\"{{ path('article') }}\" type=\"button\" id=\"closeFamille\"
                               class=\"btn btn-link waves-effect text-white bg-pink\">FERMER
                            </a>
                            <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadFamille\">
                        </div>
                        {{ form_end(forme) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalFournisseur\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                {% if editFourn %}
                    <div class=\"p-5 bg-green\">
                        <div class=\"modal-header text-white\">
                            <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">3- MODIFIER UN FOURNISSEUR</h4>
                        </div>
                    </div>
                {% else %}
                    <div class=\"p-5 bg-pri\">
                        <div class=\"modal-header text-white\">
                            <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">3- AJOUTER UN FOURNISSEUR</h4>
                        </div>
                    </div>
                {% endif %}
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">

                        {{ form_start(formfourn, {'attr': {'id': 'addFournisseurForm'}}) }}
                        {{ form_row(formfourn._token) }}
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">FOURNISSUER
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
                                <label class=\"form-label m-b--30 col-blue bolo\">TÉLÉPHONE MOBILE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formfourn.mobile,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">ADRESSE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formfourn.adresse,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">E-MAIL</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formfourn.mail,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            {% if editFourn %}
                                <input type=\"submit\" id=\"updateFourn\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect text-white bg-green\">
                            {% else %}
                                <input type=\"submit\" id=\"addFourn\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-pri\">
                            {% endif %}

                            <div type=\"button\" id=\"closeFourn\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">FERMER
                            </div>
                            <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadFourn\">
                        </div>
                        {{ form_end(formfourn) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalArticle\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                {% if editArticle %}
                    <div class=\"p-5 bg-green\">
                        <div class=\"modal-header text-white\">
                            <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">MODIFIER UN MATÉRIAU / MATÉRIEL</h4>
                        </div>
                    </div>
                {% else %}
                    <div class=\"p-5 bg-pri\">
                        <div class=\"modal-header text-white\">
                            <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">AJOUTER UN MATÉRIAU / MATÉRIEL</h4>
                        </div>
                    </div>
                {% endif %}
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        {{ form_start(form, {'attr': {'id': 'form4'}}) }}
                        {{ form_row(form._token) }}
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">FAMILLE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(form.famille,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">TYPE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(form.typear,{'id':'typear','attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">FOURNISSEUR</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(form.fournisseur,{'attr':{'class':'form-control four'}}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">UNITÉ<span
                                            class=\"col-pink\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(form.unite,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DÉSIGNATION<span
                                            class=\"col-pink\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(form.designation,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">MARQUE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(form.marque,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(form.reference,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DEVISE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(form.monnaies,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">PRIX D'ACHAT<span
                                            class=\"col-pink\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(form.pu,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">STOCK INITIAL</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(form.stock,{'type':'number','attr':{'class':'form-control stock'}}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DISPONIBILITÉ</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(form.disponibilite,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DESCRIPTION TECHNIQUE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(form.description,{'id':'editor','attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            {% if editArticle %}
                                <input type=\"text\" class=\"hide\" id=\"idarticle\" value=\"{{ idarticle }}\">
                                <input type=\"submit\" id=\"updateArticle\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect text-white bg-green\">
                            {% else %}
                                <input type=\"submit\" id=\"addArticle\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-pri\">
                            {% endif %}

                            <a href=\"{{ path('article') }}\" type=\"button\" id=\"closeArticle\"
                               class=\"btn btn-link waves-effect text-white bg-pink\"
                               data-dismiss=\"modal\">FERMER
                            </a>
                            <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadArticle\">
                        </div>
                        {{ form_end(form) }}
                        <br><br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalPartage\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-pri\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">5- PARTAGER VOS ARTICLES</h4>
                    </div>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">

                        {{ form_start(formpart, {'attr': {'id': 'form5'}}) }}
                        {{ form_row(formpart._token) }}
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">Famille d'article
                                    <span class=\"col-pink\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formpart.metier,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">Article</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formpart.article,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"addArticle\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-pri\">
                            <div type=\"button\" id=\"closeArticle\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">FERMER
                            </div>
                            <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 60px; display:none;\"
                                 class=\"align-justify\" id=\"loadArticle\">
                        </div>
                        {{ form_end(formpart) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class=\"content fixed-top\">
        <div class=\"container-fluid\" style=\"margin: 0 14px 0 14px\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div id=\"ressult\" style=\"width: 100%; align-content: start\" class=\"text-left\"></div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"content\" style=\"margin-top: 100px !important;\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0\"
                     style=\"background-color:#d1d3e2 !important;\">
                    <h3 class=\"col-pink bolo700 \">MATÉRIELS & MATÉRIAUX</h3>

                    <div class=\" row clearfix text-center m-t-20 p-b-5\">
                        <div class=\"col-sm-12\">
                            <div class=\"btn-group btn-group-sm \" style=\"margin: auto\" role=\"group\"
                                 aria-label=\"Small button group\">
                                <button type=\"button\" data-toggle=\"modal\" data-target=\"#modalFamille\"
                                        class=\"btn bg-pri text-white\" style=\"border:1px solid #dddfeb\">+ FAMILLE
                                </button>

                                <button type=\"button\" data-toggle=\"modal\" data-target=\"#modalFournisseur\"
                                        class=\"btn bg-pri text-white\" style=\"border:1px solid #dddfeb\">+ FOURNISSEUR
                                </button>

                                <button type=\"button\" data-toggle=\"modal\" data-target=\"#modalArticle\"
                                        class=\"btn bg-blue text-white\" style=\"border:1px solid #dddfeb\">+ MATÉRIAU / MATÉRIEL
                                </button>
                            </div>
                        </div>
                    </div>
                     <br>

                    <div class=\"row clearfix\">
                        <div class=\"col-sm-6\">
                            <div class=\"card shadow \">
                                <div class=\"card-body\" style=\"padding: 20px\">
                                    <div class=\"table-responsive\" style=\"padding-bottom: 20px\">
                                        <h4 class=\"pri bolo700\">FAMILLES</h4>
                                        <hr class=\"m-t--5\">
                                        <table class=\"table-bordered\" id=\"dataFAMILLE\"
                                               style=\"padding: 0; width: 100%\">
                                            <thead class=\"bg-blue\">
                                            <th style=\"width: 10px !important;\" class=\"col-white\"></th>
                                            <th class=\"col-white\">FAMILLES</th>
                                            <th></th>
                                            </thead>
                                            <tbody>
                                            {% for famille in app.user.famille %}
                                                {% if famille.type == 1 and famille.corbeille is null %}
                                                    <tr>
                                                        <td align=\"center\">
                                                            <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                   class=\"FAMY\"
                                                                   value=\"{{ famille.id }}\"></td>
                                                        <td class=\"col-black bolo600\">{{ famille.famille|capitalize }}</td>
                                                        <td class=\"col-blue-grey bolo600 text-center\">{{ famille.articles.count }}</td>
                                                    </tr>
                                                {% endif %}
                                            {% endfor %}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"card shadow \">
                                <div class=\"card-body\" style=\"padding: 20px\">
                                    <div class=\"table-responsive\" style=\"padding-bottom: 20px\">
                                        <h4 class=\"pri  bolo700\">FOURNISSEURS</h4>
                                        <hr class=\"m-t--5\">
                                        <table class=\"table-bordered\" id=\"dataFOURNISSEUR\"
                                               style=\"padding: 0; width: 100%\">
                                            <thead class=\"bg-blue\">
                                            <th style=\"width: 10px !important;\" class=\"col-white\"></th>
                                            <th class=\"col-white\">FOURNISSEURS</th>
                                            </thead>
                                            <tbody>
                                            {% for fourn in app.user.fournisseurs %}
                                                {% if fourn.type == 1 and fourn.corbeille == null  %}
                                                    <tr>
                                                        <td align=\"center\">
                                                            <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                   class=\"FOUR\"
                                                                   value=\"{{ fourn.id }}\"></td>

                                                        <td class=\"bolo600\">
                                                            <span class=\"col-blue bolo600\">{{ fourn.fournisseur|upper }}</span><br>
                                                            Adresse: <span class=\"col-blue bolo600\">{{ fourn.adresse }}</span><br>
                                                            E-mail: <span class=\"col-blue bolo600\">{{ fourn.mail }}</span><br>
                                                            Mobile: <span class=\"col-blue bolo600\">{{ fourn.mobile }}</span><br>
                                                            Téléphone: <span class=\"col-blue bolo600\">{{ fourn.telephone }}</span>
                                                        </td>
                                                    </tr>
                                                {% endif %}
                                            {% endfor %}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix\">
                        <div class=\"col-sm-12\">
                            {# BIENS #}
                            <div class=\"card shadow \">
                                <div class=\"card-body\" style=\"padding: 20px\">
                                    <div class=\"table-responsive\" style=\"padding-bottom: 30px\">
                                        <h4 class=\"pri  bolo700\">MATÉRIELS & MATÉRIAUX</h4>
                                        <hr class=\"m-t--5\">
                                        <table class=\"table-bordered\" id=\"dataARTICLES\"
                                               style=\"padding: 0; width: 100%\">
                                            <thead class=\"bg-blue\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th class=\"col-white\">FAMILLES </th>
                                            <th class=\"col-white mw250\">DÉSIGNATION</th>
                                            <th class=\"col-white\" style=\"text-align: center !important;\">
                                                P.&nbsp;D'ACHAT
                                            </th>
                                            <th class=\"col-white\" style=\"text-align: center !important;\">UNITÉ
                                            </th>
                                            <th class=\"col-white\" style=\"text-align: center !important;\">
                                                STOCK&nbsp;RÉEL
                                            </th>
                                            </thead>
                                            <tbody>
                                            {% for article in articles %}
                                                {% if article.typear.id == 1  or article.typear.id == 3 %}
                                                    <tr>
                                                        <td align=\"center\">
                                                            <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                   class=\"ARTYS\"
                                                                   value=\"{{ article.id }}\"></td>

                                                        <td class=\"bolo700 bg-light\">{% if article.famille is not null %}{{ article.famille.famille|upper }}{% endif %}</td>

                                                        <td class=\"col-black bolo600\"
                                                            title=\"{{ article.description|capitalize }}\">
                                                            {{ article.designation }}<br><span
                                                                    class=\"col-pink\">{% if article.reference != null %}Réf:{% endif %} {{ article.reference }}</span>
                                                        </td>

                                                        <td class=\"text-right bolo600\">{{ article.pu|number_format(2, ',', ' ') }}
                                                            &nbsp;{% if article.monnaies is not null %}{{ article.monnaies.code }}{% endif %}</td>
                                                        <td class=\"text-center bolo600\">{{ article.unite }}</td>
                                                        <td class=\"text-center bolo600\">{{ article.stock }}</td>
                                                    </tr>
                                                {% endif %}
                                            {% endfor %}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            {# SERVICES #}
                            <div class=\"card shadow\">
                                <div class=\"card-body\" style=\"padding: 20px 20px 50px 20px\">
                                    <h4 class=\"pri  bolo700\">SERVICES</h4>
                                    <table class=\"table-bordered\" id=\"dataARTY\"
                                           style=\"padding: 0; width: 100%\">
                                        <thead class=\"bg-blue\">
                                        <th style=\"width: 10px !important;\" class=\"col-white\"></th>
                                        <th class=\"col-white\">FAMILLES</th>
                                        <th class=\"col-white\">DÉSIGNATION</th>
                                        <th class=\"col-white\"
                                            style=\"text-align: center !important;width:150px !important\">PRIX&nbsp;DE&nbsp;VENTE
                                        </th>
                                        <th class=\"col-white\" style=\"text-align: center !important; \">UNITÉ</th>
                                        </thead>
                                        <tbody>
                                        {% for article in articles %}
                                            {% if article.typear.id == 2 %}
                                                <tr>
                                                    <td class=\"text-center\">
                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                               class=\"ARTYS2\"
                                                               value=\"{{ article.id }}\"></td>

                                                    <td class=\"bolo600\">{{ article.famille.famille|upper }}</td>

                                                    <td class=\"col-black bolo600\"
                                                        title=\"{{ article.designation|capitalize }}\">
                                                        <a href=\"{{ path('addBonArticle',{'id':article.id}) }}\">{{ article.designation }}</a><br><span
                                                                class=\"col-pink\">{% if article.reference != null %}Réf:{% endif %} {{ article.reference }}</span>
                                                    </td>
                                                    <td class=\"text-right bolo600\">
                                                        {{ article.pu|number_format(2, ',', ' ') }}
                                                        &nbsp;{{ article.monnaies.code }}</td>
                                                    <td class=\"text-center bolo600\">{{ article.unite }}</td>
                                                </tr>
                                            {% endif %}
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{% endblock %}
", "content/article.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\article.html.twig");
    }
}
