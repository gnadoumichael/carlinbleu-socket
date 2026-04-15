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

/* content/paie.html.twig */
class __TwigTemplate_4e7b8f40853ebac19e3bbefb4d9f9d93 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/paie.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/paie.html.twig"));

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

    <input type=\"text\" class=\"hide\" id=\"idjourna\" value=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["idjournalier"]) || array_key_exists("idjournalier", $context) ? $context["idjournalier"] : (function () { throw new RuntimeError('Variable "idjournalier" does not exist.', 6, $this->source); })()), "html", null, true);
        yield "\">
    <input type=\"text\" class=\"hide\" id=\"idfiche\" value=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["idfiche"]) || array_key_exists("idfiche", $context) ? $context["idfiche"] : (function () { throw new RuntimeError('Variable "idfiche" does not exist.', 7, $this->source); })()), "html", null, true);
        yield "\">

    <div class=\"modal fade right\" id=\"modalJOURNAS\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                ";
        // line 13
        if ((($tmp = (isset($context["editJournalier"]) || array_key_exists("editJournalier", $context) ? $context["editJournalier"] : (function () { throw new RuntimeError('Variable "editJournalier" does not exist.', 13, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 14
            yield "                    <div class=\"modal-header col-white bg-green p-l-20\" id=\"clfa\">
                        <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                            <i class=\"icofont-minus-circle icofont-1x\"></i>
                            MODIFIER UN JOURNALIER</h3>
                    </div>
                ";
        } else {
            // line 20
            yield "                    <div class=\"modal-header col-white bg-pri p-l-20\" id=\"clfb\">
                        <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                            <i class=\"icofont-plus-circle icofont-1x\"></i>
                            AJOUTER UN JOURNALIER</h3>
                    </div>
                ";
        }
        // line 26
        yield "                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
        // line 28
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formJournalier"]) || array_key_exists("formJournalier", $context) ? $context["formJournalier"] : (function () { throw new RuntimeError('Variable "formJournalier" does not exist.', 28, $this->source); })()), 'form_start', ["attr" => ["id" => "addJournalierForm"]]);
        yield "
                        ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formJournalier"]) || array_key_exists("formJournalier", $context) ? $context["formJournalier"] : (function () { throw new RuntimeError('Variable "formJournalier" does not exist.', 29, $this->source); })()), "_token", [], "any", false, false, false, 29), 'row');
        yield "
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label pri bolo\">NOM ET PRÉNOMS<span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formJournalier"]) || array_key_exists("formJournalier", $context) ? $context["formJournalier"] : (function () { throw new RuntimeError('Variable "formJournalier" does not exist.', 36, $this->source); })()), "noms", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control cls"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label pri bolo\">PROFESSION
                                </label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formJournalier"]) || array_key_exists("formJournalier", $context) ? $context["formJournalier"] : (function () { throw new RuntimeError('Variable "formJournalier" does not exist.', 47, $this->source); })()), "fonction", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control cls"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label pri bolo\">CONTACTS
                                </label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formJournalier"]) || array_key_exists("formJournalier", $context) ? $context["formJournalier"] : (function () { throw new RuntimeError('Variable "formJournalier" does not exist.', 58, $this->source); })()), "mobile", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control cls"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            ";
        // line 64
        if ((($tmp = (isset($context["editJournalier"]) || array_key_exists("editJournalier", $context) ? $context["editJournalier"] : (function () { throw new RuntimeError('Variable "editJournalier" does not exist.', 64, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 65
            yield "                                <input type=\"submit\" id=\"updateJournalier\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect text-white bg-green\">
                                <a href=\"";
            // line 67
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paie");
            yield "\"
                                   id=\"closeJournalier\" class=\"btn btn-link waves-effect text-white bg-pink\">FERMER
                                </a>
                            ";
        } else {
            // line 71
            yield "                                <input type=\"submit\" id=\"addJournalier\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-pri\">
                                <div type=\"button\" id=\"closeJournalier\"
                                     class=\"btn btn-link waves-effect text-white bg-pink\"
                                     data-dismiss=\"modal\">FERMER
                                </div>
                            ";
        }
        // line 78
        yield "                            <img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadJournalier\">
                        </div>
                        ";
        // line 81
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formJournalier"]) || array_key_exists("formJournalier", $context) ? $context["formJournalier"] : (function () { throw new RuntimeError('Variable "formJournalier" does not exist.', 81, $this->source); })()), 'form_end');
        yield "
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalPaie\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header col-white bg-pri p-l-20\" id=\"clfb\">
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                        <i class=\"icofont-plus-circle icofont-1x\"></i>
                        AJOUTER UN POINT PAIE </h3>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
        // line 99
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPaie"]) || array_key_exists("formPaie", $context) ? $context["formPaie"] : (function () { throw new RuntimeError('Variable "formPaie" does not exist.', 99, $this->source); })()), 'form_start', ["attr" => ["id" => "addPaieForm"]]);
        yield "
                        ";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPaie"]) || array_key_exists("formPaie", $context) ? $context["formPaie"] : (function () { throw new RuntimeError('Variable "formPaie" does not exist.', 100, $this->source); })()), "_token", [], "any", false, false, false, 100), 'row');
        yield "
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label pri bolo\">POINT DE PAIE<span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPaie"]) || array_key_exists("formPaie", $context) ? $context["formPaie"] : (function () { throw new RuntimeError('Variable "formPaie" does not exist.', 107, $this->source); })()), "libelle", [], "any", false, false, false, 107), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"addPaie\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-pri\">
                            <div type=\"button\" id=\"closePaie\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">FERMER
                            </div>
                            <img src=\"";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadPaie\">
                        </div>
                        ";
        // line 121
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPaie"]) || array_key_exists("formPaie", $context) ? $context["formPaie"] : (function () { throw new RuntimeError('Variable "formPaie" does not exist.', 121, $this->source); })()), 'form_end');
        yield "
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalFiche\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">

                ";
        // line 133
        if ((($tmp = (isset($context["idfiche"]) || array_key_exists("idfiche", $context) ? $context["idfiche"] : (function () { throw new RuntimeError('Variable "idfiche" does not exist.', 133, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 134
            yield "                    <div class=\"modal-header col-white bg-green p-l-20\" id=\"clfa\">
                        <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                            <i class=\"icofont-minus-circle icofont-1x\"></i>
                            MODIFIER UNE FICHE DE PAIE</h3>
                    </div>
                ";
        } else {
            // line 140
            yield "                    <div class=\"modal-header col-white bg-pri p-l-20\" id=\"clfb\">
                        <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                            <i class=\"icofont-plus-circle icofont-1x\"></i>
                            AJOUTER UNE FICHE DE PAIE</h3>
                    </div>
                ";
        }
        // line 146
        yield "                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
        // line 148
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formFiche"]) || array_key_exists("formFiche", $context) ? $context["formFiche"] : (function () { throw new RuntimeError('Variable "formFiche" does not exist.', 148, $this->source); })()), 'form_start', ["attr" => ["id" => "addFichePaieForm"]]);
        yield "
                        ";
        // line 149
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFiche"]) || array_key_exists("formFiche", $context) ? $context["formFiche"] : (function () { throw new RuntimeError('Variable "formFiche" does not exist.', 149, $this->source); })()), "_token", [], "any", false, false, false, 149), 'row');
        yield "
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label pri bolo\">JOURNALIERS<span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        ";
        // line 156
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFiche"]) || array_key_exists("formFiche", $context) ? $context["formFiche"] : (function () { throw new RuntimeError('Variable "formFiche" does not exist.', 156, $this->source); })()), "journalier", [], "any", false, false, false, 156), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-4\">
                                <label class=\"form-label pri bolo\">DATE<span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        ";
        // line 167
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFiche"]) || array_key_exists("formFiche", $context) ? $context["formFiche"] : (function () { throw new RuntimeError('Variable "formFiche" does not exist.', 167, $this->source); })()), "date", [], "any", false, false, false, 167), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-4\">
                                <label class=\"form-label pri bolo\">UNITÉ<span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        ";
        // line 176
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFiche"]) || array_key_exists("formFiche", $context) ? $context["formFiche"] : (function () { throw new RuntimeError('Variable "formFiche" does not exist.', 176, $this->source); })()), "unite", [], "any", false, false, false, 176), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-4\">
                                <label class=\"form-label pri bolo\">TOTAL<span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        ";
        // line 185
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFiche"]) || array_key_exists("formFiche", $context) ? $context["formFiche"] : (function () { throw new RuntimeError('Variable "formFiche" does not exist.', 185, $this->source); })()), "heure", [], "any", false, false, false, 185), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label pri bolo\">MONTANT PAR UNITÉ<span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        ";
        // line 196
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFiche"]) || array_key_exists("formFiche", $context) ? $context["formFiche"] : (function () { throw new RuntimeError('Variable "formFiche" does not exist.', 196, $this->source); })()), "prix", [], "any", false, false, false, 196), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label pri bolo\">AVANCE DEMANDÉE
                                </label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        ";
        // line 205
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFiche"]) || array_key_exists("formFiche", $context) ? $context["formFiche"] : (function () { throw new RuntimeError('Variable "formFiche" does not exist.', 205, $this->source); })()), "avance", [], "any", false, false, false, 205), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label pri bolo\">CHANTIERS<span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        ";
        // line 216
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFiche"]) || array_key_exists("formFiche", $context) ? $context["formFiche"] : (function () { throw new RuntimeError('Variable "formFiche" does not exist.', 216, $this->source); })()), "chantier", [], "any", false, false, false, 216), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label pri bolo\">POINT DE PAIE<span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        ";
        // line 227
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFiche"]) || array_key_exists("formFiche", $context) ? $context["formFiche"] : (function () { throw new RuntimeError('Variable "formFiche" does not exist.', 227, $this->source); })()), "paie", [], "any", false, false, false, 227), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"text-center\">
                            ";
        // line 234
        if ((($tmp = (isset($context["idfiche"]) || array_key_exists("idfiche", $context) ? $context["idfiche"] : (function () { throw new RuntimeError('Variable "idfiche" does not exist.', 234, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 235
            yield "                                <input type=\"submit\" id=\"updateFichePaie\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect text-white bg-green\">
                                <a href=\"";
            // line 237
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paie");
            yield "\"
                                   id=\"closeFichePaie\" class=\"btn btn-link waves-effect text-white bg-pink\">FERMER
                                </a>
                            ";
        } else {
            // line 241
            yield "                                <input type=\"submit\" id=\"addFichePaie\" value=\"ENREGISTRER ET CRÉER L'ORDRE DE PAIEMENT\"
                                       class=\"btn btn-link waves-effect text-white bg-pri\">
                                <div type=\"button\" id=\"closeFichePaie\"
                                     class=\"btn btn-link waves-effect text-white bg-pink\"
                                     data-dismiss=\"modal\">FERMER
                                </div>
                            ";
        }
        // line 248
        yield "                            <img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadFichePaie\">
                        </div>
                        ";
        // line 251
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formFiche"]) || array_key_exists("formFiche", $context) ? $context["formFiche"] : (function () { throw new RuntimeError('Variable "formFiche" does not exist.', 251, $this->source); })()), 'form_end');
        yield "
                    </div>

                </div>
            </div>
        </div>
    </div>

    <section class=\"content\" style=\"margin-top: 20px !important;\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row clearfix m-t-50\">
                    <div class=\"col-sm-12 \">
                        <h3 class=\"bolo700\">Bonjour ";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 264, $this->source); })()), "user", [], "any", false, false, false, 264), "prenoms", [], "any", false, false, false, 264)), "html", null, true);
        yield " !</h3>
                        <h4 class=\"bolo700 col-deep-orange\">Gestion de la paie</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row clearfix p-b-5\">
            <div class=\"col-sm-12\">
                <div class=\"btn-group btn-group-sm\" role=\"group\" aria-label=\"Small button group\">
                    <button type=\"button\" data-toggle=\"modal\" data-target=\"#modalJOURNAS\"
                            class=\"btn bg-purple text-white\" style=\"border:1px solid #dddfeb\">+ JOURNALIER
                    </button>
                    <button type=\"button\" data-toggle=\"modal\" data-target=\"#modalPaie\"
                            class=\"btn bg-blue text-white\" style=\"border:1px solid #dddfeb\">+ POINT DE PAIE
                    </button>
                    <button type=\"button\" data-toggle=\"modal\" data-target=\"#modalFiche\"
                            class=\"btn bg-blue-grey text-white\" style=\"border:1px solid #dddfeb\">+ FICHE DE PAIE
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class=\"content\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row clearfix m-t-20\">
                    <div class=\"col-sm-12 \">

                        <div class=\"panel-group\" id=\"accordion_1\" role=\"tablist\" aria-multiselectable=\"true\">
                            <div class=\"panel panel-pri shadow\">
                                <div class=\"panel-heading\" role=\"tab\" id=\"headingOne_1\">
                                    <h5 class=\"panel-title\">
                                        <a class=\"collapsed col-white outai\" role=\"button\" data-toggle=\"collapse\"
                                           data-parent=\"#accordion_0\" href=\"#collapseOne_0\" aria-expanded=\"false\"
                                           aria-controls=\"collapseOne_0\">
                                            <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Journaliers<span
                                                    class=\"badge bg-pink\"
                                                    style=\"float: right !important;\"></span>
                                        </a>
                                    </h5>
                                </div>
                                <div id=\"collapseOne_0\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                     aria-labelledby=\"headingOne_0\">
                                    <div class=\"panel-body\">
                                        <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow:scroll\">
                                            <table class=\"table-striped table-bordered display nowrape\"
                                                   style=\"width: 100%\"
                                                   id=\"dataJOURNALIER\">
                                                <thead>
                                                <tr>
                                                    <th class=\"text-center\" style=\"Emin-width: 30px !important;\"></th>
                                                    <th>JOURNALIERS</th>
                                                    <th>PROFESSION</th>
                                                    <th>CONTACTS</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                ";
        // line 321
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["journaliers"]) || array_key_exists("journaliers", $context) ? $context["journaliers"] : (function () { throw new RuntimeError('Variable "journaliers" does not exist.', 321, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["journa"]) {
            // line 322
            yield "                                                    <tr>
                                                        <td class=\"text-center\">
                                                            <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                   class=\"JOURNA\"
                                                                   value=\"";
            // line 326
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["journa"], "id", [], "any", false, false, false, 326), "html", null, true);
            yield "\"></td>
                                                        <td class=\"col-blue\">";
            // line 327
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["journa"], "noms", [], "any", false, false, false, 327)), "html", null, true);
            yield "</td>
                                                        <td>";
            // line 328
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["journa"], "fonction", [], "any", false, false, false, 328)), "html", null, true);
            yield "</td>
                                                        <td>";
            // line 329
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["journa"], "mobile", [], "any", false, false, false, 329), "html", null, true);
            yield "</td>
                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['journa'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 332
        yield "                                                </tbody>
                                            </table>
                                            <br/>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"panel panel-pri shadow\">
                                <div class=\"panel-heading\" role=\"tab\" id=\"headingPaie\">
                                    <h5 class=\"panel-title\">
                                        <a class=\"collapsed col-white outai\" role=\"button\" data-toggle=\"collapse\"
                                           data-parent=\"#accordion_0\" href=\"#collapsePaie\" aria-expanded=\"false\"
                                           aria-controls=\"collapsePaie\">
                                            <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">
                                                keyboard_arrow_down</i>Fiches de paie pour les journaliers<span
                                                    class=\"badge bg-pink\"
                                                    style=\"float: right !important;\"></span>
                                        </a>
                                    </h5>
                                </div>
                                <div id=\"collapsePaie\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                     aria-labelledby=\"headingPaie\">
                                    <div class=\"panel-body\">
                                        <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow:scroll\">
                                            <table class=\"table-bordered display nowrap\" style=\"width: 100%\"
                                                   id=\"dataFichePaie\">
                                                <thead>
                                                <tr class=\"text-center\">
                                                    <th style=\"width: 10px !important;\"></th>
                                                    <th>DATE</th>
                                                    <th>POINT DE PAIE</th>
                                                    <th>JOURNALIERS</th>
                                                    <th>TOTAL</th>
                                                    <th class=\"text-center\">UNITÉ</th>
                                                    <th>MONTANT</th>
                                                    <th>AVANCE</th>
                                                    <th>NET À PAYER</th>
                                                    <th>N° D'ORDRE</th>
                                                    <th>CLIENT</th>
                                                    <th>CHANTIER</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                ";
        // line 376
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 376, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 377
            yield "                                                    <tr>
                                                        <td class=\"text-center\">
                                                            <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                   class=\"FICHA\"
                                                                   value=\"";
            // line 381
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "id", [], "any", false, false, false, 381), "html", null, true);
            yield "\"></td>
                                                        <td>";
            // line 382
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "date", [], "any", false, false, false, 382), "y.m.d"), "html", null, true);
            yield "</td>
                                                        <td class=\"col-blue\">";
            // line 383
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "paie", [], "any", false, false, false, 383), "libelle", [], "any", false, false, false, 383), "html", null, true);
            yield "</td>
                                                        <td>";
            // line 384
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "journalier", [], "any", false, false, false, 384), "noms", [], "any", false, false, false, 384), "html", null, true);
            yield "</td>
                                                        <td class=\"text-center\">";
            // line 385
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "heure", [], "any", false, false, false, 385), "html", null, true);
            yield "</td>
                                                        <td class=\"text-center\">";
            // line 386
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "unite", [], "any", false, false, false, 386)), "html", null, true);
            yield "</td>
                                                        <td class=\"text-right\">";
            // line 387
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "prix", [], "any", false, false, false, 387), 2, ",", " "), "html", null, true);
            yield "</td>
                                                        <td class=\"text-right\">";
            // line 388
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "avance", [], "any", false, false, false, 388), 2, ",", " "), "html", null, true);
            yield "</td>
                                                        <td class=\"text-right\">";
            // line 389
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "heure", [], "any", false, false, false, 389) * CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "prix", [], "any", false, false, false, 389)) - CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "avance", [], "any", false, false, false, 389)), 2, ",", " "), "html", null, true);
            yield "</td>
                                                        <td class=\"text-left\">";
            // line 390
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "caisse", [], "any", false, false, false, 390)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<a
                                                                    href=\"";
                // line 391
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editcaisse", ["idcaisse" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "caisse", [], "any", false, false, false, 391), "id", [], "any", false, false, false, 391), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "chantier", [], "any", false, false, false, 391), "id", [], "any", false, false, false, 391)]), "html", null, true);
                yield "\">ORDRE
                                                                N° ";
                // line 392
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "caisse", [], "any", false, false, false, 392), "numcaisse", [], "any", false, false, false, 392), "html", null, true);
                yield "</a>";
            }
            yield "</td>
                                                        <td class=\"col-pink\">";
            // line 393
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "chantier", [], "any", false, false, false, 393), "client", [], "any", false, false, false, 393), "nomclient", [], "any", false, false, false, 393)), "html", null, true);
            yield "</td>
                                                        <td>";
            // line 394
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "chantier", [], "any", false, false, false, 394), "nomchantier", [], "any", false, false, false, 394)), "html", null, true);
            yield "</td>
                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['fiche'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 397
        yield "                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"panel panel-pri shadow\">
                                <div class=\"panel-heading\" role=\"tab\" id=\"headingPaiePoint\">
                                    <h5 class=\"panel-title\">
                                        <a class=\"collapsed col-white outai\" role=\"button\" data-toggle=\"collapse\"
                                           data-parent=\"#accordion_0\" href=\"#collapsePaiePoint\" aria-expanded=\"false\"
                                           aria-controls=\"collapsePaiePoint\">
                                            <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">
                                                keyboard_arrow_down</i>Points de paie<span
                                                    class=\"badge bg-pink\"
                                                    style=\"float: right !important;\"></span>
                                        </a>
                                    </h5>
                                </div>
                                <div id=\"collapsePaiePoint\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                     aria-labelledby=\"headingPaiePoint\">
                                    <div class=\"panel-body\">
                                        <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow:scroll\">
                                            <table class=\"table-bordered display nowrap\" style=\"width: 100%\"
                                                   id=\"dataPAIE\">
                                                <thead>
                                                <tr class=\"text-center\">
                                                    <th class=\"mw100\">DATE</th>
                                                    <th class=\"mw150\">N° ORDRE</th>
                                                    <th class=\"mw150\">N° DE BON</th>
                                                    <th>ETAT</th>
                                                    <th class=\"mw200\">FACTURÉ À</th>
                                                    <th class=\"mw200\">CLIENT/CHANTIER</th>
                                                    <th class=\"mw150\">MONTANT</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                ";
        // line 435
        $context["ctth"] = 0;
        // line 436
        yield "                                                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cassa"]) || array_key_exists("cassa", $context) ? $context["cassa"] : (function () { throw new RuntimeError('Variable "cassa" does not exist.', 436, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["caisse"]) {
            // line 437
            yield "                                                    ";
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "paie", [], "any", false, false, false, 437))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 438
                yield "                                                        ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "corbeille", [], "any", false, false, false, 438))) {
                    // line 439
                    yield "                                                            <tr>
                                                                <td>";
                    // line 440
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "date", [], "any", false, false, false, 440), "y.m.d"), "html", null, true);
                    yield "</td>

                                                                <td><a
                                                                            href=\"";
                    // line 443
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editcaisse", ["idcaisse" => CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "id", [], "any", false, false, false, 443), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "chantier", [], "any", false, false, false, 443), "id", [], "any", false, false, false, 443)]), "html", null, true);
                    yield "\"
                                                                            title=\"";
                    // line 444
                    yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "caissereference", [], "any", false, false, false, 444));
                    yield "\">
                                                                        ORDRE N° ";
                    // line 445
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "numcaisse", [], "any", false, false, false, 445), "html", null, true);
                    yield "
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    ";
                    // line 449
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "bon", [], "any", false, false, false, 449)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 450
                        yield "                                                                        <a
                                                                                href=\"";
                        // line 451
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editbon", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "bon", [], "any", false, false, false, 451), "id", [], "any", false, false, false, 451), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "chantier", [], "any", false, false, false, 451), "id", [], "any", false, false, false, 451)]), "html", null, true);
                        yield "\">
                                                                            BON N° ";
                        // line 452
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "bon", [], "any", false, false, false, 452), "numbon", [], "any", false, false, false, 452), "html", null, true);
                        yield "
                                                                        </a>
                                                                    ";
                    }
                    // line 455
                    yield "                                                                </td>

                                                                <td class=\"col-blue\">";
                    // line 457
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "paie", [], "any", false, false, false, 457), "libelle", [], "any", false, false, false, 457), "html", null, true);
                    yield "</td>
                                                                <td>
                                                                    ";
                    // line 459
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "personnel", [], "any", false, false, false, 459)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 460
                        yield "                                                                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "personnel", [], "any", false, false, false, 460), "noms", [], "any", false, false, false, 460)), "html", null, true);
                        yield "
                                                                    ";
                    }
                    // line 462
                    yield "                                                                    ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "intervenant", [], "any", false, false, false, 462)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 463
                        yield "                                                                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "intervenant", [], "any", false, false, false, 463), "nom", [], "any", false, false, false, 463)), "html", null, true);
                        yield "
                                                                    ";
                    }
                    // line 465
                    yield "                                                                    ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "fournisseur", [], "any", false, false, false, 465)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 466
                        yield "                                                                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "fournisseur", [], "any", false, false, false, 466), "fournisseur", [], "any", false, false, false, 466)), "html", null, true);
                        yield "
                                                                    ";
                    }
                    // line 468
                    yield "                                                                </td>
                                                                <td>";
                    // line 469
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "client", [], "any", false, false, false, 469), "nomclient", [], "any", false, false, false, 469)) . " ") . Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "chantier", [], "any", false, false, false, 469), "nomchantier", [], "any", false, false, false, 469))), "html", null, true);
                    yield "</td>
                                                                <td class=\"text-right\">";
                    // line 470
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["caisse"], "montant", [], "any", false, false, false, 470), 2, ",", " "), "html", null, true);
                    yield "</td>
                                                            </tr>
                                                        ";
                }
                // line 473
                yield "                                                    ";
            }
            // line 474
            yield "                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['caisse'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 475
        yield "                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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
        return "content/paie.html.twig";
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
        return array (  831 => 475,  825 => 474,  822 => 473,  816 => 470,  812 => 469,  809 => 468,  803 => 466,  800 => 465,  794 => 463,  791 => 462,  785 => 460,  783 => 459,  778 => 457,  774 => 455,  768 => 452,  764 => 451,  761 => 450,  759 => 449,  752 => 445,  748 => 444,  744 => 443,  738 => 440,  735 => 439,  732 => 438,  729 => 437,  724 => 436,  722 => 435,  682 => 397,  673 => 394,  669 => 393,  663 => 392,  659 => 391,  655 => 390,  651 => 389,  647 => 388,  643 => 387,  639 => 386,  635 => 385,  631 => 384,  627 => 383,  623 => 382,  619 => 381,  613 => 377,  609 => 376,  563 => 332,  554 => 329,  550 => 328,  546 => 327,  542 => 326,  536 => 322,  532 => 321,  472 => 264,  456 => 251,  449 => 248,  440 => 241,  433 => 237,  429 => 235,  427 => 234,  417 => 227,  403 => 216,  389 => 205,  377 => 196,  363 => 185,  351 => 176,  339 => 167,  325 => 156,  315 => 149,  311 => 148,  307 => 146,  299 => 140,  291 => 134,  289 => 133,  274 => 121,  268 => 118,  254 => 107,  244 => 100,  240 => 99,  219 => 81,  212 => 78,  203 => 71,  196 => 67,  192 => 65,  190 => 64,  181 => 58,  167 => 47,  153 => 36,  143 => 29,  139 => 28,  135 => 26,  127 => 20,  119 => 14,  117 => 13,  108 => 7,  104 => 6,  100 => 4,  87 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}{{ title }}{% endblock %}
{% block body %}


    <input type=\"text\" class=\"hide\" id=\"idjourna\" value=\"{{ idjournalier }}\">
    <input type=\"text\" class=\"hide\" id=\"idfiche\" value=\"{{ idfiche }}\">

    <div class=\"modal fade right\" id=\"modalJOURNAS\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                {% if editJournalier %}
                    <div class=\"modal-header col-white bg-green p-l-20\" id=\"clfa\">
                        <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                            <i class=\"icofont-minus-circle icofont-1x\"></i>
                            MODIFIER UN JOURNALIER</h3>
                    </div>
                {% else %}
                    <div class=\"modal-header col-white bg-pri p-l-20\" id=\"clfb\">
                        <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                            <i class=\"icofont-plus-circle icofont-1x\"></i>
                            AJOUTER UN JOURNALIER</h3>
                    </div>
                {% endif %}
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        {{ form_start(formJournalier, {'attr': {'id':'addJournalierForm' }}) }}
                        {{ form_row(formJournalier._token) }}
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label pri bolo\">NOM ET PRÉNOMS<span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formJournalier.noms,{'attr':{'class':'form-control cls' }}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label pri bolo\">PROFESSION
                                </label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formJournalier.fonction,{'attr':{'class':'form-control cls' }}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label pri bolo\">CONTACTS
                                </label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formJournalier.mobile,{'attr':{'class':'form-control cls' }}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            {% if editJournalier %}
                                <input type=\"submit\" id=\"updateJournalier\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect text-white bg-green\">
                                <a href=\"{{ path('paie') }}\"
                                   id=\"closeJournalier\" class=\"btn btn-link waves-effect text-white bg-pink\">FERMER
                                </a>
                            {% else %}
                                <input type=\"submit\" id=\"addJournalier\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-pri\">
                                <div type=\"button\" id=\"closeJournalier\"
                                     class=\"btn btn-link waves-effect text-white bg-pink\"
                                     data-dismiss=\"modal\">FERMER
                                </div>
                            {% endif %}
                            <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadJournalier\">
                        </div>
                        {{ form_end(formJournalier) }}
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalPaie\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header col-white bg-pri p-l-20\" id=\"clfb\">
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                        <i class=\"icofont-plus-circle icofont-1x\"></i>
                        AJOUTER UN POINT PAIE </h3>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        {{ form_start(formPaie, {'attr': {'id':'addPaieForm' }}) }}
                        {{ form_row(formPaie._token) }}
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label pri bolo\">POINT DE PAIE<span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formPaie.libelle,{'attr':{'class':'form-control' }}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"addPaie\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-pri\">
                            <div type=\"button\" id=\"closePaie\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">FERMER
                            </div>
                            <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadPaie\">
                        </div>
                        {{ form_end(formPaie) }}
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalFiche\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">

                {% if idfiche %}
                    <div class=\"modal-header col-white bg-green p-l-20\" id=\"clfa\">
                        <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                            <i class=\"icofont-minus-circle icofont-1x\"></i>
                            MODIFIER UNE FICHE DE PAIE</h3>
                    </div>
                {% else %}
                    <div class=\"modal-header col-white bg-pri p-l-20\" id=\"clfb\">
                        <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                            <i class=\"icofont-plus-circle icofont-1x\"></i>
                            AJOUTER UNE FICHE DE PAIE</h3>
                    </div>
                {% endif %}
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        {{ form_start(formFiche, {'attr': {'id':'addFichePaieForm' }}) }}
                        {{ form_row(formFiche._token) }}
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label pri bolo\">JOURNALIERS<span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formFiche.journalier,{'attr':{'class':'form-control' }}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-4\">
                                <label class=\"form-label pri bolo\">DATE<span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formFiche.date,{'attr':{'class':'form-control' }}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-4\">
                                <label class=\"form-label pri bolo\">UNITÉ<span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formFiche.unite,{'attr':{'class':'form-control' }}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-4\">
                                <label class=\"form-label pri bolo\">TOTAL<span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formFiche.heure,{'attr':{'class':'form-control' }}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label pri bolo\">MONTANT PAR UNITÉ<span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formFiche.prix,{'attr':{'class':'form-control' }}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label pri bolo\">AVANCE DEMANDÉE
                                </label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formFiche.avance,{'attr':{'class':'form-control' }}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label pri bolo\">CHANTIERS<span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formFiche.chantier,{'attr':{'class':'form-control' }}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label pri bolo\">POINT DE PAIE<span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formFiche.paie,{'attr':{'class':'form-control' }}) }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"text-center\">
                            {% if idfiche %}
                                <input type=\"submit\" id=\"updateFichePaie\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect text-white bg-green\">
                                <a href=\"{{ path('paie') }}\"
                                   id=\"closeFichePaie\" class=\"btn btn-link waves-effect text-white bg-pink\">FERMER
                                </a>
                            {% else %}
                                <input type=\"submit\" id=\"addFichePaie\" value=\"ENREGISTRER ET CRÉER L'ORDRE DE PAIEMENT\"
                                       class=\"btn btn-link waves-effect text-white bg-pri\">
                                <div type=\"button\" id=\"closeFichePaie\"
                                     class=\"btn btn-link waves-effect text-white bg-pink\"
                                     data-dismiss=\"modal\">FERMER
                                </div>
                            {% endif %}
                            <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadFichePaie\">
                        </div>
                        {{ form_end(formFiche) }}
                    </div>

                </div>
            </div>
        </div>
    </div>

    <section class=\"content\" style=\"margin-top: 20px !important;\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row clearfix m-t-50\">
                    <div class=\"col-sm-12 \">
                        <h3 class=\"bolo700\">Bonjour {{ app.user.prenoms|upper }} !</h3>
                        <h4 class=\"bolo700 col-deep-orange\">Gestion de la paie</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row clearfix p-b-5\">
            <div class=\"col-sm-12\">
                <div class=\"btn-group btn-group-sm\" role=\"group\" aria-label=\"Small button group\">
                    <button type=\"button\" data-toggle=\"modal\" data-target=\"#modalJOURNAS\"
                            class=\"btn bg-purple text-white\" style=\"border:1px solid #dddfeb\">+ JOURNALIER
                    </button>
                    <button type=\"button\" data-toggle=\"modal\" data-target=\"#modalPaie\"
                            class=\"btn bg-blue text-white\" style=\"border:1px solid #dddfeb\">+ POINT DE PAIE
                    </button>
                    <button type=\"button\" data-toggle=\"modal\" data-target=\"#modalFiche\"
                            class=\"btn bg-blue-grey text-white\" style=\"border:1px solid #dddfeb\">+ FICHE DE PAIE
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class=\"content\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row clearfix m-t-20\">
                    <div class=\"col-sm-12 \">

                        <div class=\"panel-group\" id=\"accordion_1\" role=\"tablist\" aria-multiselectable=\"true\">
                            <div class=\"panel panel-pri shadow\">
                                <div class=\"panel-heading\" role=\"tab\" id=\"headingOne_1\">
                                    <h5 class=\"panel-title\">
                                        <a class=\"collapsed col-white outai\" role=\"button\" data-toggle=\"collapse\"
                                           data-parent=\"#accordion_0\" href=\"#collapseOne_0\" aria-expanded=\"false\"
                                           aria-controls=\"collapseOne_0\">
                                            <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Journaliers<span
                                                    class=\"badge bg-pink\"
                                                    style=\"float: right !important;\"></span>
                                        </a>
                                    </h5>
                                </div>
                                <div id=\"collapseOne_0\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                     aria-labelledby=\"headingOne_0\">
                                    <div class=\"panel-body\">
                                        <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow:scroll\">
                                            <table class=\"table-striped table-bordered display nowrape\"
                                                   style=\"width: 100%\"
                                                   id=\"dataJOURNALIER\">
                                                <thead>
                                                <tr>
                                                    <th class=\"text-center\" style=\"Emin-width: 30px !important;\"></th>
                                                    <th>JOURNALIERS</th>
                                                    <th>PROFESSION</th>
                                                    <th>CONTACTS</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                {% for journa in journaliers %}
                                                    <tr>
                                                        <td class=\"text-center\">
                                                            <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                   class=\"JOURNA\"
                                                                   value=\"{{ journa.id }}\"></td>
                                                        <td class=\"col-blue\">{{ journa.noms|upper }}</td>
                                                        <td>{{ journa.fonction|upper }}</td>
                                                        <td>{{ journa.mobile }}</td>
                                                    </tr>
                                                {% endfor %}
                                                </tbody>
                                            </table>
                                            <br/>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"panel panel-pri shadow\">
                                <div class=\"panel-heading\" role=\"tab\" id=\"headingPaie\">
                                    <h5 class=\"panel-title\">
                                        <a class=\"collapsed col-white outai\" role=\"button\" data-toggle=\"collapse\"
                                           data-parent=\"#accordion_0\" href=\"#collapsePaie\" aria-expanded=\"false\"
                                           aria-controls=\"collapsePaie\">
                                            <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">
                                                keyboard_arrow_down</i>Fiches de paie pour les journaliers<span
                                                    class=\"badge bg-pink\"
                                                    style=\"float: right !important;\"></span>
                                        </a>
                                    </h5>
                                </div>
                                <div id=\"collapsePaie\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                     aria-labelledby=\"headingPaie\">
                                    <div class=\"panel-body\">
                                        <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow:scroll\">
                                            <table class=\"table-bordered display nowrap\" style=\"width: 100%\"
                                                   id=\"dataFichePaie\">
                                                <thead>
                                                <tr class=\"text-center\">
                                                    <th style=\"width: 10px !important;\"></th>
                                                    <th>DATE</th>
                                                    <th>POINT DE PAIE</th>
                                                    <th>JOURNALIERS</th>
                                                    <th>TOTAL</th>
                                                    <th class=\"text-center\">UNITÉ</th>
                                                    <th>MONTANT</th>
                                                    <th>AVANCE</th>
                                                    <th>NET À PAYER</th>
                                                    <th>N° D'ORDRE</th>
                                                    <th>CLIENT</th>
                                                    <th>CHANTIER</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                {% for fiche in fiches %}
                                                    <tr>
                                                        <td class=\"text-center\">
                                                            <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                   class=\"FICHA\"
                                                                   value=\"{{ fiche.id }}\"></td>
                                                        <td>{{ fiche.date|date('y.m.d') }}</td>
                                                        <td class=\"col-blue\">{{ fiche.paie.libelle }}</td>
                                                        <td>{{ fiche.journalier.noms }}</td>
                                                        <td class=\"text-center\">{{ fiche.heure }}</td>
                                                        <td class=\"text-center\">{{ fiche.unite|upper }}</td>
                                                        <td class=\"text-right\">{{ fiche.prix|number_format(2,',',' ') }}</td>
                                                        <td class=\"text-right\">{{ fiche.avance|number_format(2,',',' ') }}</td>
                                                        <td class=\"text-right\">{{ ((fiche.heure * fiche.prix)-fiche.avance)|number_format(2,',',' ') }}</td>
                                                        <td class=\"text-left\">{% if fiche.caisse %}<a
                                                                    href=\"{{ path('editcaisse',{'idcaisse':fiche.caisse.id, 'idchantier':fiche.chantier.id}) }}\">ORDRE
                                                                N° {{ fiche.caisse.numcaisse }}</a>{% endif %}</td>
                                                        <td class=\"col-pink\">{{ fiche.chantier.client.nomclient|upper }}</td>
                                                        <td>{{ fiche.chantier.nomchantier|upper }}</td>
                                                    </tr>
                                                {% endfor %}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"panel panel-pri shadow\">
                                <div class=\"panel-heading\" role=\"tab\" id=\"headingPaiePoint\">
                                    <h5 class=\"panel-title\">
                                        <a class=\"collapsed col-white outai\" role=\"button\" data-toggle=\"collapse\"
                                           data-parent=\"#accordion_0\" href=\"#collapsePaiePoint\" aria-expanded=\"false\"
                                           aria-controls=\"collapsePaiePoint\">
                                            <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">
                                                keyboard_arrow_down</i>Points de paie<span
                                                    class=\"badge bg-pink\"
                                                    style=\"float: right !important;\"></span>
                                        </a>
                                    </h5>
                                </div>
                                <div id=\"collapsePaiePoint\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                     aria-labelledby=\"headingPaiePoint\">
                                    <div class=\"panel-body\">
                                        <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow:scroll\">
                                            <table class=\"table-bordered display nowrap\" style=\"width: 100%\"
                                                   id=\"dataPAIE\">
                                                <thead>
                                                <tr class=\"text-center\">
                                                    <th class=\"mw100\">DATE</th>
                                                    <th class=\"mw150\">N° ORDRE</th>
                                                    <th class=\"mw150\">N° DE BON</th>
                                                    <th>ETAT</th>
                                                    <th class=\"mw200\">FACTURÉ À</th>
                                                    <th class=\"mw200\">CLIENT/CHANTIER</th>
                                                    <th class=\"mw150\">MONTANT</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                {% set ctth = 0 %}
                                                {% for caisse in cassa %}
                                                    {% if caisse.paie is not null %}
                                                        {% if caisse.corbeille is null %}
                                                            <tr>
                                                                <td>{{ caisse.date|date('y.m.d') }}</td>

                                                                <td><a
                                                                            href=\"{{ path('editcaisse',{'idcaisse':caisse.id , 'idchantier':caisse.chantier.id}) }}\"
                                                                            title=\"{{ caisse.caissereference|striptags|raw }}\">
                                                                        ORDRE N° {{ caisse.numcaisse }}
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    {% if caisse.bon %}
                                                                        <a
                                                                                href=\"{{ path('editbon', {'id': caisse.bon.id, 'idchantier': caisse.chantier.id}) }}\">
                                                                            BON N° {{ caisse.bon.numbon }}
                                                                        </a>
                                                                    {% endif %}
                                                                </td>

                                                                <td class=\"col-blue\">{{ caisse.paie.libelle }}</td>
                                                                <td>
                                                                    {% if caisse.personnel %}
                                                                        {{ caisse.personnel.noms|upper }}
                                                                    {% endif %}
                                                                    {% if caisse.intervenant %}
                                                                        {{ caisse.intervenant.nom|upper }}
                                                                    {% endif %}
                                                                    {% if caisse.fournisseur %}
                                                                        {{ caisse.fournisseur.fournisseur|upper }}
                                                                    {% endif %}
                                                                </td>
                                                                <td>{{ caisse.client.nomclient|upper ~' '~ caisse.chantier.nomchantier|upper }}</td>
                                                                <td class=\"text-right\">{{ caisse.montant|number_format(2,',',' ') }}</td>
                                                            </tr>
                                                        {% endif %}
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
            </div>
        </div>
    </section>

{% endblock %}

", "content/paie.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\paie.html.twig");
    }
}
