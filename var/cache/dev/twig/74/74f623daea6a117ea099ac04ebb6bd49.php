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

/* content/gestion.html.twig */
class __TwigTemplate_2995c66bf227c3fdace19fb06fbd3b32 extends Template
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
        return "baser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/gestion.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/gestion.html.twig"));

        $this->parent = $this->load("baser.html.twig", 1);
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

        // line 3
        yield "    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 3, $this->source); })()), "html", null, true);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "
    <style>
        .pageage {
            padding-left: 0;
            max-width: 1024px;
            margin: auto;
            overflow-x: hidden;
        }
    </style>

    <input type=\"text\" class=\"hide\" id=\"idchantier\" value=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
        yield "\">
    <input type=\"text\" class=\"hide\" id=\"idplanning\" value=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["planning"]) || array_key_exists("planning", $context) ? $context["planning"] : (function () { throw new RuntimeError('Variable "planning" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17), "html", null, true);
        yield "\">
    <input type=\"text\" class=\"hide\" id=\"idtache\" value=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18), "html", null, true);
        yield "\">
    <input type=\"text\" class=\"hide\" id=\"idsection\" value=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19), "html", null, true);
        yield "\">

    <input type=\"text\" class=\"hide\" id=\"pager\" value=\"gestion\"/>

    <div class=\"modal fade right\" id=\"modalContact\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">

                ";
        // line 28
        if ((($tmp = (isset($context["editCont"]) || array_key_exists("editCont", $context) ? $context["editCont"] : (function () { throw new RuntimeError('Variable "editCont" does not exist.', 28, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 29
            yield "                    <div class=\"modal-header text-white bg-green p-l-20\">
                        <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                            <i class=\"icofont-minus-circle icofont-1x\"></i>
                            MODIFIER UN CONTACT</h3>
                    </div>
                ";
        } else {
            // line 35
            yield "                    <div class=\"modal-header text-white bg-pri p-l-20\">
                        <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                            <i class=\"icofont-plus-circle icofont-1x\"></i>
                            AJOUTER UN CONTACT</h3>
                    </div>
                ";
        }
        // line 41
        yield "                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">

                        ";
        // line 44
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 44, $this->source); })()), 'form_start', ["attr" => ["id" => "addContactForm"]]);
        yield "
                        ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 45, $this->source); })()), "_token", [], "any", false, false, false, 45), 'row');
        yield "
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">CONTACT<span
                                            class=\"col-red\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 52
        if ((($tmp = (isset($context["editCont"]) || array_key_exists("editCont", $context) ? $context["editCont"] : (function () { throw new RuntimeError('Variable "editCont" does not exist.', 52, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 53
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 53, $this->source); })()), "contact", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control  text-danger"]]);
            yield "
                                        ";
        } else {
            // line 55
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 55, $this->source); })()), "contact", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control "]]);
            yield "
                                        ";
        }
        // line 57
        yield "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">FONCTION</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 66
        if ((($tmp = (isset($context["editCont"]) || array_key_exists("editCont", $context) ? $context["editCont"] : (function () { throw new RuntimeError('Variable "editCont" does not exist.', 66, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 67
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 67, $this->source); })()), "fonction", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control  text-danger"]]);
            yield "
                                        ";
        } else {
            // line 69
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 69, $this->source); })()), "fonction", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-control "]]);
            yield "
                                        ";
        }
        // line 71
        yield "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">E-MAIL</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 80
        if ((($tmp = (isset($context["editCont"]) || array_key_exists("editCont", $context) ? $context["editCont"] : (function () { throw new RuntimeError('Variable "editCont" does not exist.', 80, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 81
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 81, $this->source); })()), "mail", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "form-control text-danger"]]);
            yield "
                                        ";
        } else {
            // line 83
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 83, $this->source); })()), "mail", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "form-control "]]);
            yield "
                                        ";
        }
        // line 85
        yield "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">TÉLÉPHONE MOBILE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 94
        if ((($tmp = (isset($context["editCont"]) || array_key_exists("editCont", $context) ? $context["editCont"] : (function () { throw new RuntimeError('Variable "editCont" does not exist.', 94, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 95
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 95, $this->source); })()), "phone", [], "any", false, false, false, 95), 'widget', ["attr" => ["class" => "form-control  text-danger"]]);
            yield "
                                        ";
        } else {
            // line 97
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 97, $this->source); })()), "phone", [], "any", false, false, false, 97), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                        ";
        }
        // line 99
        yield "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">TÉLÉPHONE BUREAU</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 108
        if ((($tmp = (isset($context["editCont"]) || array_key_exists("editCont", $context) ? $context["editCont"] : (function () { throw new RuntimeError('Variable "editCont" does not exist.', 108, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 109
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 109, $this->source); })()), "bureau", [], "any", false, false, false, 109), 'widget', ["attr" => ["class" => "form-control text-danger"]]);
            yield "
                                        ";
        } else {
            // line 111
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 111, $this->source); })()), "bureau", [], "any", false, false, false, 111), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                        ";
        }
        // line 113
        yield "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            ";
        // line 118
        if ((($tmp = (isset($context["editCont"]) || array_key_exists("editCont", $context) ? $context["editCont"] : (function () { throw new RuntimeError('Variable "editCont" does not exist.', 118, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 119
            yield "                                <input type=\"text\" class=\"hide\" id=\"idcontact\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 119, $this->source); })()), "id", [], "any", false, false, false, 119), "html", null, true);
            yield "\">
                                <input type=\"submit\" id=\"updateContact\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect text-white bg-green\">
                                <div id=\"closeContact\" class=\"btn btn-link waves-effect bg-pink\">
                                    <a href=\"";
            // line 123
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantiers");
            yield "\" class=\"text-white\"
                                       style=\"text-decoration: none !important;\">ANNULER</a>
                                </div>
                            ";
        } else {
            // line 127
            yield "                                <input type=\"submit\" id=\"addContact\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-blue\">
                                <div type=\"button\" id=\"closeContact\"
                                     class=\"btn btn-link waves-effect text-white bg-pink\"
                                     data-dismiss=\"modal\">
                                    FERMER
                                </div>
                            ";
        }
        // line 135
        yield "                            <img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadContact\">

                        </div>
                        ";
        // line 139
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 139, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"mdModalPlanning\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                ";
        // line 149
        if ((($tmp = (isset($context["editPlanning"]) || array_key_exists("editPlanning", $context) ? $context["editPlanning"] : (function () { throw new RuntimeError('Variable "editPlanning" does not exist.', 149, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 150
            yield "                    <div class=\"modal-header text-white bg-green p-l-20\">
                        <h3 class=\"modal-title\" id=\"defaultModalLabel\">MODIFIER UN PLANNING</h3>
                    </div>
                ";
        } else {
            // line 154
            yield "                    <div class=\"modal-header text-white bg-pri p-l-20\">
                        <h3 class=\"modal-title\" id=\"defaultModalLabel\">CRÉER UN PLANNING</h3>
                    </div>
                ";
        }
        // line 158
        yield "                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
        // line 160
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPlan"]) || array_key_exists("formPlan", $context) ? $context["formPlan"] : (function () { throw new RuntimeError('Variable "formPlan" does not exist.', 160, $this->source); })()), 'form_start', ["attr" => ["id" => "addPlanningForm"]]);
        yield "
                        ";
        // line 161
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPlan"]) || array_key_exists("formPlan", $context) ? $context["formPlan"] : (function () { throw new RuntimeError('Variable "formPlan" does not exist.', 161, $this->source); })()), "_token", [], "any", false, false, false, 161), 'row');
        yield "
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-4\">
                                <label class=\"form-label col-blue bolo\">ORDRE D'EXÉCUTION<span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        ";
        // line 168
        if ((($tmp = (isset($context["editPlanning"]) || array_key_exists("editPlanning", $context) ? $context["editPlanning"] : (function () { throw new RuntimeError('Variable "editPlanning" does not exist.', 168, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 169
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPlan"]) || array_key_exists("formPlan", $context) ? $context["formPlan"] : (function () { throw new RuntimeError('Variable "formPlan" does not exist.', 169, $this->source); })()), "rang", [], "any", false, false, false, 169), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
            yield "
                                        ";
        } else {
            // line 171
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPlan"]) || array_key_exists("formPlan", $context) ? $context["formPlan"] : (function () { throw new RuntimeError('Variable "formPlan" does not exist.', 171, $this->source); })()), "rang", [], "any", false, false, false, 171), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                        ";
        }
        // line 173
        yield "                                    </div>
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
        // line 183
        if ((($tmp = (isset($context["editPlanning"]) || array_key_exists("editPlanning", $context) ? $context["editPlanning"] : (function () { throw new RuntimeError('Variable "editPlanning" does not exist.', 183, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 184
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPlan"]) || array_key_exists("formPlan", $context) ? $context["formPlan"] : (function () { throw new RuntimeError('Variable "formPlan" does not exist.', 184, $this->source); })()), "planning", [], "any", false, false, false, 184), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
            yield "
                                        ";
        } else {
            // line 186
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPlan"]) || array_key_exists("formPlan", $context) ? $context["formPlan"] : (function () { throw new RuntimeError('Variable "formPlan" does not exist.', 186, $this->source); })()), "planning", [], "any", false, false, false, 186), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                        ";
        }
        // line 188
        yield "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            ";
        // line 193
        if ((($tmp = (isset($context["editPlanning"]) || array_key_exists("editPlanning", $context) ? $context["editPlanning"] : (function () { throw new RuntimeError('Variable "editPlanning" does not exist.', 193, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 194
            yield "                                <input type=\"submit\" id=\"updatePlanning\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect text-white bg-green\">
                                <a href=\"";
            // line 196
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 196, $this->source); })()), "id", [], "any", false, false, false, 196)]), "html", null, true);
            yield "\" id=\"closePlanning\"
                                   class=\"btn btn-link waves-effect text-white bg-pink\">
                                    ANNULER
                                </a>
                            ";
        } else {
            // line 201
            yield "                                <input type=\"submit\" id=\"addPlanning\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-pri\">
                                <div type=\"button\" id=\"closePlanning\"
                                     class=\"btn btn-link waves-effect text-white bg-pink\" data-dismiss=\"modal\">
                                    FERMER
                                </div>
                            ";
        }
        // line 208
        yield "                            <img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadPlanning\">
                        </div>
                        ";
        // line 211
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPlan"]) || array_key_exists("formPlan", $context) ? $context["formPlan"] : (function () { throw new RuntimeError('Variable "formPlan" does not exist.', 211, $this->source); })()), 'form_end');
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
                ";
        // line 221
        if ((($tmp = (isset($context["editSection"]) || array_key_exists("editSection", $context) ? $context["editSection"] : (function () { throw new RuntimeError('Variable "editSection" does not exist.', 221, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 222
            yield "                    <div class=\"modal-header text-white bg-green p-l-20\">
                        <h3 class=\"modal-title\" id=\"defaultModalLabel\">MODIFIER UNE ZONE</h3>
                    </div>
                ";
        } else {
            // line 226
            yield "                    <div class=\"modal-header text-white bg-pri p-l-20\">
                        <h3 class=\"modal-title\" id=\"defaultModalLabel\">AJOUTER UNE ZONE</h3>
                    </div>
                ";
        }
        // line 230
        yield "                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
        // line 232
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSection"]) || array_key_exists("formSection", $context) ? $context["formSection"] : (function () { throw new RuntimeError('Variable "formSection" does not exist.', 232, $this->source); })()), 'form_start', ["attr" => ["id" => "addSectionForm"]]);
        yield "
                        <input type=\"hidden\" name=\"token\" value=\"";
        // line 233
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addSectionToken"), "html", null, true);
        yield "\"/>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label col-blue bolo\">CHOISIR UN PLANNING<span
                                            class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        ";
        // line 241
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formSection"]) || array_key_exists("formSection", $context) ? $context["formSection"] : (function () { throw new RuntimeError('Variable "formSection" does not exist.', 241, $this->source); })()), "planning", [], "any", false, false, false, 241), 'widget', ["attr" => ["class" => "form-control "]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label col-blue bolo\">ZONE<span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        <input type=\"text\" name=\"libelle\"  value=\"";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 252, $this->source); })()), "libelle", [], "any", false, false, false, 252), "html", null, true);
        yield "\" class=\"form-control\">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label col-blue bolo\">RANG<span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        ";
        // line 263
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formSection"]) || array_key_exists("formSection", $context) ? $context["formSection"] : (function () { throw new RuntimeError('Variable "formSection" does not exist.', 263, $this->source); })()), "rang", [], "any", false, false, false, 263), 'widget', ["attr" => ["class" => "form-control "]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"text-center\">
                            ";
        // line 270
        if ((($tmp = (isset($context["editSection"]) || array_key_exists("editSection", $context) ? $context["editSection"] : (function () { throw new RuntimeError('Variable "editSection" does not exist.', 270, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 271
            yield "                                <input type=\"submit\" id=\"updaSection\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect text-white bg-green\">
                                <a href=\"";
            // line 273
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 273, $this->source); })()), "id", [], "any", false, false, false, 273)]), "html", null, true);
            yield "\" id=\"closeSection\"
                                   class=\"btn btn-link waves-effect text-white bg-pink\">
                                    ANNULER
                                </a>
                            ";
        } else {
            // line 278
            yield "                                <input type=\"submit\" id=\"addSection\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-pri\">
                                <div type=\"button\" id=\"closeSection\"
                                     class=\"btn btn-link waves-effect text-white bg-pink\" data-dismiss=\"modal\">
                                    FERMER
                                </div>
                            ";
        }
        // line 285
        yield "                            <img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadSection\">
                        </div>
                        <br><br><br>
                        ";
        // line 289
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSection"]) || array_key_exists("formSection", $context) ? $context["formSection"] : (function () { throw new RuntimeError('Variable "formSection" does not exist.', 289, $this->source); })()), 'form_end');
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
                ";
        // line 299
        if ((($tmp = (isset($context["editTache"]) || array_key_exists("editTache", $context) ? $context["editTache"] : (function () { throw new RuntimeError('Variable "editTache" does not exist.', 299, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 300
            yield "                    <div class=\"modal-header text-white bg-green p-l-20\">
                        <h3 class=\"modal-title\" id=\"defaultModalLabel\">MODIFIER UNE TACHE</h3>
                    </div>
                ";
        } else {
            // line 304
            yield "                    <div class=\"modal-header text-white bg-pri p-l-20\">
                        <h3 class=\"modal-title\" id=\"defaultModalLabel\">CRÉER UNE TACHE</h3>
                    </div>
                ";
        }
        // line 308
        yield "                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
        // line 310
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formTache"]) || array_key_exists("formTache", $context) ? $context["formTache"] : (function () { throw new RuntimeError('Variable "formTache" does not exist.', 310, $this->source); })()), 'form_start', ["attr" => ["id" => "addTacheForm"]]);
        yield "
                        <input type=\"hidden\" name=\"token\" value=\"";
        // line 311
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addTacheToken"), "html", null, true);
        yield "\"/>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label col-blue bolo\">ÉTAT
                                    <span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        ";
        // line 319
        if ((($tmp = (isset($context["editTache"]) || array_key_exists("editTache", $context) ? $context["editTache"] : (function () { throw new RuntimeError('Variable "editTache" does not exist.', 319, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 320
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formTache"]) || array_key_exists("formTache", $context) ? $context["formTache"] : (function () { throw new RuntimeError('Variable "formTache" does not exist.', 320, $this->source); })()), "etat", [], "any", false, false, false, 320), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
            yield "
                                        ";
        } else {
            // line 322
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formTache"]) || array_key_exists("formTache", $context) ? $context["formTache"] : (function () { throw new RuntimeError('Variable "formTache" does not exist.', 322, $this->source); })()), "etat", [], "any", false, false, false, 322), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                        ";
        }
        // line 324
        yield "                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label col-blue bolo\">ORDRE
                                    <span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        ";
        // line 333
        if ((($tmp = (isset($context["editTache"]) || array_key_exists("editTache", $context) ? $context["editTache"] : (function () { throw new RuntimeError('Variable "editTache" does not exist.', 333, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 334
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formTache"]) || array_key_exists("formTache", $context) ? $context["formTache"] : (function () { throw new RuntimeError('Variable "formTache" does not exist.', 334, $this->source); })()), "ordre", [], "any", false, false, false, 334), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
            yield "
                                        ";
        } else {
            // line 336
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formTache"]) || array_key_exists("formTache", $context) ? $context["formTache"] : (function () { throw new RuntimeError('Variable "formTache" does not exist.', 336, $this->source); })()), "ordre", [], "any", false, false, false, 336), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                        ";
        }
        // line 338
        yield "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label col-blue bolo\">SECTION
                                    <span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        ";
        // line 349
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formTache"]) || array_key_exists("formTache", $context) ? $context["formTache"] : (function () { throw new RuntimeError('Variable "formTache" does not exist.', 349, $this->source); })()), "section", [], "any", false, false, false, 349), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 360
        if ((($tmp = (isset($context["editTache"]) || array_key_exists("editTache", $context) ? $context["editTache"] : (function () { throw new RuntimeError('Variable "editTache" does not exist.', 360, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 361
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formTache"]) || array_key_exists("formTache", $context) ? $context["formTache"] : (function () { throw new RuntimeError('Variable "formTache" does not exist.', 361, $this->source); })()), "libelle", [], "any", false, false, false, 361), 'widget', ["required" => "required", "id" => "libelle", "attr" => ["class" => "form-control col-pink"]]);
            yield "
                                        ";
        } else {
            // line 363
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formTache"]) || array_key_exists("formTache", $context) ? $context["formTache"] : (function () { throw new RuntimeError('Variable "formTache" does not exist.', 363, $this->source); })()), "libelle", [], "any", false, false, false, 363), 'widget', ["required" => "required", "id" => "libelle", "attr" => ["class" => "form-control"]]);
            yield "
                                        ";
        }
        // line 365
        yield "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                ";
        // line 371
        if ((($tmp = (isset($context["editTache"]) || array_key_exists("editTache", $context) ? $context["editTache"] : (function () { throw new RuntimeError('Variable "editTache" does not exist.', 371, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 372
            yield "                                <label class=\"form-label col-blue bolo\">DATE DE DÉBUT<span
                                            class=\"col-red\">*</span></label>
                                <div class=\"input-group date\" id=\"id_0\">
                                    <input type=\"text\" placeholder=\"";
            // line 375
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 375, $this->source); })()), "debut", [], "any", false, false, false, 375), "d/m/Y H:i"), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 375, $this->source); })()), "debut", [], "any", false, false, false, 375), "d/m/Y H:i"), "html", null, true);
            yield "\" id=\"ddebut\" name=\"ddebut\"
                                           style=\"border-bottom: 1px solid #000\" class=\"form-control toc\" required/>
                                    <div class=\"input-group-addon input-group-append\">
                                        <div class=\"input-group-text\">
                                            <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>
                                        </div>
                                    </div>
                                </div>
                                ";
        } else {
            // line 384
            yield "                                    <label class=\"form-label col-blue bolo\">DATE DE DÉBUT<span
                                                class=\"col-red\">*</span></label>
                                    <div class=\"input-group date\" id=\"id_0\">
                                        <input type=\"text\" placeholder=\"Date...\" id=\"ddebut\" name=\"ddebut\"
                                               style=\"border-bottom: 1px solid #000\" class=\"form-control toc\" required/>
                                        <div class=\"input-group-addon input-group-append\">
                                            <div class=\"input-group-text\">
                                                <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        // line 396
        yield "                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label col-blue bolo\">DATE DE FIN<span
                                            class=\"col-red\">*</span></label>
                                <div class=\"input-group date\" id=\"id_1\">
                                    <input type=\"text\" placeholder=\"";
        // line 401
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 401, $this->source); })()), "fin", [], "any", false, false, false, 401), "d/m/Y H:i"), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tache"]) || array_key_exists("tache", $context) ? $context["tache"] : (function () { throw new RuntimeError('Variable "tache" does not exist.', 401, $this->source); })()), "fin", [], "any", false, false, false, 401), "d/m/Y H:i"), "html", null, true);
        yield "\" id=\"dfin\" name=\"dfin\"
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
                                <label class=\"form-label col-blue bolo\">EXÉCUTÉ PAR UNE PERSONNE<br>
                                <span style=\"font-size:12px;\" class=\"col-pink\">(Veuillez sélectionner la même personne pour supprimer.)</span></label>
                                <div class=\"form-group m-t--5\">
                                    <select class=\"js-example-basic-multiple\" name=\"personnel[]\" multiple=\"multiple\"
                                            style=\"width: 100%\">
                                        ";
        // line 418
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["personnels"]) || array_key_exists("personnels", $context) ? $context["personnels"] : (function () { throw new RuntimeError('Variable "personnels" does not exist.', 418, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["personnel"]) {
            // line 419
            yield "                                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "id", [], "any", false, false, false, 419), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "noms", [], "any", false, false, false, 419)), "html", null, true);
            yield "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['personnel'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 421
        yield "                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label col-blue bolo\">EXÉCUTÉ PAR UNE ÉQUIPE</label>
                                <div class=\"form-group m-t--5\">
                                    <select class=\"js-example-basic-multiple\" name=\"personnel[]\" multiple=\"multiple\"
                                            style=\"width: 100%\">
                                        ";
        // line 431
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["personnels"]) || array_key_exists("personnels", $context) ? $context["personnels"] : (function () { throw new RuntimeError('Variable "personnels" does not exist.', 431, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["personnel"]) {
            // line 432
            yield "                                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "id", [], "any", false, false, false, 432), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "noms", [], "any", false, false, false, 432)), "html", null, true);
            yield "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['personnel'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 434
        yield "                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class=\"text-center m-t-40\">
                            ";
        // line 440
        if ((($tmp = (isset($context["editTache"]) || array_key_exists("editTache", $context) ? $context["editTache"] : (function () { throw new RuntimeError('Variable "editTache" does not exist.', 440, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 441
            yield "                                <input type=\"submit\" id=\"updateTache\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect text-white bg-green\">
                                <a href=\"";
            // line 443
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 443, $this->source); })()), "id", [], "any", false, false, false, 443)]), "html", null, true);
            yield "\" id=\"closeTache\"
                                   class=\"btn btn-link waves-effect text-white bg-pink\">
                                    ANNULER
                                </a>
                            ";
        } else {
            // line 448
            yield "                                <input type=\"submit\" id=\"addTache\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-pri\">
                                <div type=\"button\" id=\"closeTache\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                     data-dismiss=\"modal\">
                                    FERMER
                                </div>
                            ";
        }
        // line 455
        yield "                            <img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadTache\">
                        </div>
                        <br><br><br><br>
                        ";
        // line 459
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formTache"]) || array_key_exists("formTache", $context) ? $context["formTache"] : (function () { throw new RuntimeError('Variable "formTache" does not exist.', 459, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalEquipe\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header text-white bg-green p-l-20\">
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">AJOUTER UNE ÉQUIPE</h3>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        <form id=\"addTeamForm\">
                            <input type=\"hidden\" name=\"token\" value=\"";
        // line 475
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addTeamToken"), "html", null, true);
        yield "\"/>
                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label col-blue bolo\">NOM DE L'ÉQUIPE</label>
                                    <div class=\"form-group m-t--5\">
                                        <div class=\"form-line\">
                                            ";
        // line 481
        if ((($tmp = (isset($context["editTeam"]) || array_key_exists("editTeam", $context) ? $context["editTeam"] : (function () { throw new RuntimeError('Variable "editTeam" does not exist.', 481, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 482
            yield "                                                <input type=\"text\" name=\"equipe\" class=\"form-control col-pink\"
                                                       value=\"";
            // line 483
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["equipe"]) || array_key_exists("equipe", $context) ? $context["equipe"] : (function () { throw new RuntimeError('Variable "equipe" does not exist.', 483, $this->source); })()), "designation", [], "any", false, false, false, 483), "html", null, true);
            yield "\">
                                            ";
        } else {
            // line 485
            yield "                                                <input type=\"text\" name=\"equipe\" class=\"form-control\">
                                            ";
        }
        // line 487
        yield "
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label col-blue bolo\">SUPERVISEUR</label>
                                    <div class=\"form-group m-t--5\">

                                        <select class=\"form-control ";
        // line 498
        if ((($tmp = (isset($context["editTeam"]) || array_key_exists("editTeam", $context) ? $context["editTeam"] : (function () { throw new RuntimeError('Variable "editTeam" does not exist.', 498, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "col-pink";
        }
        yield "\"
                                                name=\"superviseur\" style=\"width: 100%\">
                                            ";
        // line 500
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["personnels"]) || array_key_exists("personnels", $context) ? $context["personnels"] : (function () { throw new RuntimeError('Variable "personnels" does not exist.', 500, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["personnel"]) {
            // line 501
            yield "                                                ";
            if ((($tmp =  !(null === (isset($context["equipe"]) || array_key_exists("equipe", $context) ? $context["equipe"] : (function () { throw new RuntimeError('Variable "equipe" does not exist.', 501, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 502
                yield "                                                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["equipe"]) || array_key_exists("equipe", $context) ? $context["equipe"] : (function () { throw new RuntimeError('Variable "equipe" does not exist.', 502, $this->source); })()), "superviseur", [], "any", false, false, false, 502), "id", [], "any", false, false, false, 502) == CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "id", [], "any", false, false, false, 502))) {
                    // line 503
                    yield "                                                        <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "id", [], "any", false, false, false, 503), "html", null, true);
                    yield "\"
                                                                selected>";
                    // line 504
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "noms", [], "any", false, false, false, 504)), "html", null, true);
                    yield "</option>
                                                    ";
                }
                // line 506
                yield "                                                ";
            }
            // line 507
            yield "                                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "id", [], "any", false, false, false, 507), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "noms", [], "any", false, false, false, 507)), "html", null, true);
            yield "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['personnel'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 509
        yield "                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label col-blue bolo\">CHEF D'ÉQUIPE</label>
                                    <div class=\"form-group m-t--5\">
                                        <select class=\"form-control ";
        // line 518
        if ((($tmp = (isset($context["editTeam"]) || array_key_exists("editTeam", $context) ? $context["editTeam"] : (function () { throw new RuntimeError('Variable "editTeam" does not exist.', 518, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "col-pink";
        }
        yield "\" name=\"chef\"
                                                style=\"width: 100%\">
                                            ";
        // line 520
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["personnels"]) || array_key_exists("personnels", $context) ? $context["personnels"] : (function () { throw new RuntimeError('Variable "personnels" does not exist.', 520, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["personnel"]) {
            // line 521
            yield "                                                ";
            if ((($tmp =  !(null === (isset($context["equipe"]) || array_key_exists("equipe", $context) ? $context["equipe"] : (function () { throw new RuntimeError('Variable "equipe" does not exist.', 521, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 522
                yield "                                                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["equipe"]) || array_key_exists("equipe", $context) ? $context["equipe"] : (function () { throw new RuntimeError('Variable "equipe" does not exist.', 522, $this->source); })()), "chef", [], "any", false, false, false, 522), "id", [], "any", false, false, false, 522) == CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "id", [], "any", false, false, false, 522))) {
                    // line 523
                    yield "                                                        <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "id", [], "any", false, false, false, 523), "html", null, true);
                    yield "\"
                                                                selected>";
                    // line 524
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "noms", [], "any", false, false, false, 524)), "html", null, true);
                    yield "</option>
                                                    ";
                }
                // line 526
                yield "                                                ";
            }
            // line 527
            yield "                                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "id", [], "any", false, false, false, 527), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "noms", [], "any", false, false, false, 527)), "html", null, true);
            yield "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['personnel'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 529
        yield "                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label col-blue bolo\">MEMBRES</label>
                                    <div class=\"form-group m-t--5\">
                                        <select class=\"form-control ";
        // line 538
        if ((($tmp = (isset($context["editTeam"]) || array_key_exists("editTeam", $context) ? $context["editTeam"] : (function () { throw new RuntimeError('Variable "editTeam" does not exist.', 538, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "col-pink";
        }
        yield "\" name=\"chef\"
                                                style=\"width: 100%\">
                                            ";
        // line 540
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["personnels"]) || array_key_exists("personnels", $context) ? $context["personnels"] : (function () { throw new RuntimeError('Variable "personnels" does not exist.', 540, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["personnel"]) {
            // line 541
            yield "                                                ";
            if ((($tmp =  !(null === (isset($context["equipe"]) || array_key_exists("equipe", $context) ? $context["equipe"] : (function () { throw new RuntimeError('Variable "equipe" does not exist.', 541, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 542
                yield "                                                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["equipe"]) || array_key_exists("equipe", $context) ? $context["equipe"] : (function () { throw new RuntimeError('Variable "equipe" does not exist.', 542, $this->source); })()), "chef", [], "any", false, false, false, 542), "id", [], "any", false, false, false, 542) == CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "id", [], "any", false, false, false, 542))) {
                    // line 543
                    yield "                                                        <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "id", [], "any", false, false, false, 543), "html", null, true);
                    yield "\"
                                                                selected>";
                    // line 544
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "noms", [], "any", false, false, false, 544)), "html", null, true);
                    yield "</option>
                                                    ";
                }
                // line 546
                yield "                                                ";
            }
            // line 547
            yield "                                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "id", [], "any", false, false, false, 547), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "noms", [], "any", false, false, false, 547)), "html", null, true);
            yield "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['personnel'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 549
        yield "                                        </select>

                                        <select class=\"js-example-basic-multiple";
        // line 551
        if ((($tmp = (isset($context["editTeam"]) || array_key_exists("editTeam", $context) ? $context["editTeam"] : (function () { throw new RuntimeError('Variable "editTeam" does not exist.', 551, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "col-pink";
        }
        yield "\"
                                                name=\"membres[]\" multiple=\"multiple\"
                                                style=\"width: 100%\">
                                            ";
        // line 554
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["personnels"]) || array_key_exists("personnels", $context) ? $context["personnels"] : (function () { throw new RuntimeError('Variable "personnels" does not exist.', 554, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["personnel"]) {
            // line 555
            yield "                                                ";
            if ((($tmp =  !(null === (isset($context["equipe"]) || array_key_exists("equipe", $context) ? $context["equipe"] : (function () { throw new RuntimeError('Variable "equipe" does not exist.', 555, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 556
                yield "                                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["equipe"]) || array_key_exists("equipe", $context) ? $context["equipe"] : (function () { throw new RuntimeError('Variable "equipe" does not exist.', 556, $this->source); })()), "personnels", [], "any", false, false, false, 556));
                foreach ($context['_seq'] as $context["_key"] => $context["perso"]) {
                    // line 557
                    yield "                                                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["perso"], "id", [], "any", false, false, false, 557) == CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "id", [], "any", false, false, false, 557))) {
                        // line 558
                        yield "                                                            <option value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "id", [], "any", false, false, false, 558), "html", null, true);
                        yield "\"
                                                                    selected>";
                        // line 559
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "noms", [], "any", false, false, false, 559)), "html", null, true);
                        yield "</option>
                                                        ";
                    }
                    // line 561
                    yield "                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['perso'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 562
                yield "                                                ";
            }
            // line 563
            yield "                                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "id", [], "any", false, false, false, 563), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "noms", [], "any", false, false, false, 563)), "html", null, true);
            yield "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['personnel'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 565
        yield "                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label col-blue bolo\">TACHES</label>
                                    <div class=\"form-group m-t--5\">
                                        <select class=\"js-example-basic-multiple\" name=\"taches[]\" multiple=\"multiple\"
                                                style=\"width: 100%\">
                                            ";
        // line 576
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 576, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 577
            yield "                                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 577), "html", null, true);
            yield "\">";
            yield Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "libelle", [], "any", false, false, false, 577));
            yield "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tache'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 579
        yield "                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class=\"text-center m-t-40\">
                                ";
        // line 585
        if ((($tmp = (isset($context["editTache"]) || array_key_exists("editTache", $context) ? $context["editTache"] : (function () { throw new RuntimeError('Variable "editTache" does not exist.', 585, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 586
            yield "                                    <input type=\"submit\" id=\"updateTeam\" value=\"MODIFIER\"
                                           class=\"btn btn-link waves-effect text-white bg-green\">
                                    <a href=\"";
            // line 588
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 588, $this->source); })()), "id", [], "any", false, false, false, 588)]), "html", null, true);
            yield "\" id=\"closeTeam\"
                                       class=\"btn btn-link waves-effect text-white bg-pink\">
                                        ANNULER
                                    </a>
                                ";
        } else {
            // line 593
            yield "                                    <input type=\"submit\" id=\"addTeam\" value=\"ENREGISTRER\"
                                           class=\"btn btn-link waves-effect text-white bg-pri\">
                                    <div type=\"button\" id=\"closeTeam\"
                                         class=\"btn btn-link waves-effect text-white bg-pink\"
                                         data-dismiss=\"modal\">
                                        FERMER
                                    </div>
                                ";
        }
        // line 601
        yield "                                <img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                     class=\"align-justify\" id=\"loadTeam\">
                            </div>
                            <br><br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"mdModalDocument\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header text-white bg-green p-l-20\">
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">AJOUTER UN DOCUMENT</h3>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
        // line 620
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUpload"]) || array_key_exists("formUpload", $context) ? $context["formUpload"] : (function () { throw new RuntimeError('Variable "formUpload" does not exist.', 620, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data", "attr" => ["id" => "addFileForm"]]);
        yield "
                        ";
        // line 621
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUpload"]) || array_key_exists("formUpload", $context) ? $context["formUpload"] : (function () { throw new RuntimeError('Variable "formUpload" does not exist.', 621, $this->source); })()), "_token", [], "any", false, false, false, 621), 'row');
        yield "
                        <input type=\"hidden\" name=\"token\" value=\"";
        // line 622
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addFile"), "html", null, true);
        yield "\"/>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">Importer des fichiers</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        ";
        // line 628
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUpload"]) || array_key_exists("formUpload", $context) ? $context["formUpload"] : (function () { throw new RuntimeError('Variable "formUpload" does not exist.', 628, $this->source); })()), "nomfichier", [], "any", false, false, false, 628), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"addFile\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-pri\">
                            <div type=\"button\" id=\"closeFile\"
                                 class=\"btn btn-link waves-effect text-white bg-pink\" data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"";
        // line 640
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadFile\">
                        </div>
                        ";
        // line 643
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUpload"]) || array_key_exists("formUpload", $context) ? $context["formUpload"] : (function () { throw new RuntimeError('Variable "formUpload" does not exist.', 643, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"mdModalPrevision\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-blue text-white\">
                    <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">CRÉER UNE PRÉVISION</h4>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
        // line 658
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPrevision"]) || array_key_exists("formPrevision", $context) ? $context["formPrevision"] : (function () { throw new RuntimeError('Variable "formPrevision" does not exist.', 658, $this->source); })()), 'form_start', ["attr" => ["id" => "addPrevisionForm"]]);
        yield "
                        ";
        // line 659
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPrevision"]) || array_key_exists("formPrevision", $context) ? $context["formPrevision"] : (function () { throw new RuntimeError('Variable "formPrevision" does not exist.', 659, $this->source); })()), "_token", [], "any", false, false, false, 659), 'row');
        yield "
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 665
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPrevision"]) || array_key_exists("formPrevision", $context) ? $context["formPrevision"] : (function () { throw new RuntimeError('Variable "formPrevision" does not exist.', 665, $this->source); })()), "reference", [], "any", false, false, false, 665), 'widget', ["id" => "editor5", "attr" => ["class" => "form-control"]]);
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
        // line 675
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPrevision"]) || array_key_exists("formPrevision", $context) ? $context["formPrevision"] : (function () { throw new RuntimeError('Variable "formPrevision" does not exist.', 675, $this->source); })()), "ptva", [], "any", false, false, false, 675), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">TVA(%)</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 683
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPrevision"]) || array_key_exists("formPrevision", $context) ? $context["formPrevision"] : (function () { throw new RuntimeError('Variable "formPrevision" does not exist.', 683, $this->source); })()), "tva", [], "any", false, false, false, 683), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DATE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 693
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPrevision"]) || array_key_exists("formPrevision", $context) ? $context["formPrevision"] : (function () { throw new RuntimeError('Variable "formPrevision" does not exist.', 693, $this->source); })()), "date", [], "any", false, false, false, 693), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"addPrevision\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-blue\">
                            <div type=\"button\" id=\"closePrevision\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"";
        // line 706
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadPrevision\">
                        </div>
                        <br><br><br>
                        ";
        // line 710
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPrevision"]) || array_key_exists("formPrevision", $context) ? $context["formPrevision"] : (function () { throw new RuntimeError('Variable "formPrevision" does not exist.', 710, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalDevis\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-blue text-white\">
                    <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">CRÉER UN DEVIS</h4>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
        // line 726
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 726, $this->source); })()), 'form_start', ["attr" => ["id" => "addDevisForm"]]);
        yield "
                        ";
        // line 727
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 727, $this->source); })()), "_token", [], "any", false, false, false, 727), 'row');
        yield "
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DEVISE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 733
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 733, $this->source); })()), "monnaie", [], "any", false, false, false, 733), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">TVA(%)</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 743
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 743, $this->source); })()), "tva", [], "any", false, false, false, 743), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">VALIDITÉ DU DEVIS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 751
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 751, $this->source); })()), "validit", [], "any", false, false, false, 751), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE OU OBJET</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 761
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 761, $this->source); })()), "devreference", [], "any", false, false, false, 761), 'widget', ["id" => "editor", "attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">CODE ARTICLE?</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 771
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 771, $this->source); })()), "aaref", [], "any", false, false, false, 771), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 780
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 780, $this->source); })()), "date", [], "any", false, false, false, 780), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">APPLIQUER LA TVA?</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 790
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 790, $this->source); })()), "ptva", [], "any", false, false, false, 790), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">AVEC BASE TVA?</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 798
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 798, $this->source); })()), "abasetva", [], "any", false, false, false, 798), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                        <label class=\"form-label\"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">AVEC REMISE?</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 809
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 809, $this->source); })()), "aarem", [], "any", false, false, false, 809), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">AVEC COLONNE ZONE?</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 817
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 817, $this->source); })()), "zone", [], "any", false, false, false, 817), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">MODÈLE DE DEVIS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 827
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 827, $this->source); })()), "modele", [], "any", false, false, false, 827), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">MODÈLE DE RÉSULTAT</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 835
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 835, $this->source); })()), "model", [], "any", false, false, false, 835), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">INFORMATIONS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 845
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 845, $this->source); })()), "conditions", [], "any", false, false, false, 845), 'widget', ["required" => "", "id" => "editor2", "attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"addDevis\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-blue\">
                            <div type=\"button\" id=\"closeDevis\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"";
        // line 857
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width:50px; display:none;\"
                                 class=\"align-justify\" id=\"loadDevis\">
                        </div>
                        <br><br><br>
                        ";
        // line 861
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 861, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class=\"content\" style=\"margin-top: 80px !important;\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row clearfix m-t-20 p-b-5\">
                    <div class=\"pageage\">
                        <h3 class=\"font-bold col-pink text-center\">";
        // line 873
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 873, $this->source); })()), "nomchantier", [], "any", false, false, false, 873), "html", null, true);
        yield "</h3>
                        <h3 class=\"font-bold col-pink text-center m-t--10\">
                            <a href=\"";
        // line 875
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 875, $this->source); })()), "getId", [], "method", false, false, false, 875)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 875, $this->source); })()), "nomclient", [], "any", false, false, false, 875)), "html", null, true);
        yield "</a>
                        </h3><BR>
                        <div class=\"col-xs-12 col-sm-6 text-center\">
                            <div class=\"card\">
                                <div class=\"body\">
                                    <h4 class=\"font-bold col-blue-grey m-t--10\">DESCRIPTION:<br><span
                                                class=\"col-black h5\">";
        // line 881
        yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 881, $this->source); })()), "description", [], "any", false, false, false, 881));
        yield "<br></span>
                                    </h4><br>
                                    <h4 class=\"font-bold col-blue-grey m-t--10\">DÉBUT / FIN:<br>
                                        <span class=\"col-blue  bolo700 h5\">";
        // line 884
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 884, $this->source); })()), "ddebut", [], "any", false, false, false, 884), "d.m.Y"), "html", null, true);
        yield "

\t\t\t\t\t\t\t\t";
        // line 886
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 886, $this->source); })()), "dfin", [], "any", false, false, false, 886), "d.m.Y"), "html", null, true);
        yield "</span>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xs-12 col-sm-6 text-center\">
                            <div class=\"card\">
                                <div class=\"body\">
                                    <h4 class=\"font-bold col-blue-grey\">SUPERVISEURS <br>
                                        ";
        // line 895
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 895, $this->source); })()), "superviseurs", [], "any", false, false, false, 895));
        foreach ($context['_seq'] as $context["_key"] => $context["superviseur"]) {
            // line 896
            yield "                                            <span class=\"col-blue m-l-10\"># ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["superviseur"], "noms", [], "any", false, false, false, 896), "html", null, true);
            yield "</span><br>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['superviseur'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 898
        yield "                                    </h4>
                                    <h4 class=\"font-bold col-blue-grey\">PROGRESSION DU CHANTIER:<br>
                                        ";
        // line 900
        $context["count"] = 0;
        // line 901
        yield "                                        ";
        $context["progres"] = 0;
        // line 902
        yield "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 902, $this->source); })()), "plannings", [], "any", false, false, false, 902));
        foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
            // line 903
            yield "                                            ";
            $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 903, $this->source); })()) + 1);
            // line 904
            yield "                                            ";
            $context["progres"] = ((isset($context["progres"]) || array_key_exists("progres", $context) ? $context["progres"] : (function () { throw new RuntimeError('Variable "progres" does not exist.', 904, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "progression", [], "any", false, false, false, 904));
            // line 905
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['planning'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 906
        yield "                                        <span class=\"col-pink m-l-10\">";
        if (((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 906, $this->source); })()) > 0)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((isset($context["progres"]) || array_key_exists("progres", $context) ? $context["progres"] : (function () { throw new RuntimeError('Variable "progres" does not exist.', 906, $this->source); })()) / (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 906, $this->source); })())), 0, ",", " "), "html", null, true);
            yield "%";
        } else {
            yield "0%";
        }
        yield "</span><br>
                                    </h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class=\"btn-group btn-group-sm\" role=\"group\" aria-label=\"Small button group\">
                    ";
        // line 915
        if ((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["planning"]) || array_key_exists("planning", $context) ? $context["planning"] : (function () { throw new RuntimeError('Variable "planning" does not exist.', 915, $this->source); })()), "id", [], "any", false, false, false, 915))) {
            // line 916
            yield "                        <button type=\"button\" data-toggle=\"modal\" data-target=\"#mdModalPlanning\"
                                class=\"btn bg-purple text-white\" style=\"border:1px solid #dddfeb\">+ PLANNING
                        </button>
                    ";
        } else {
            // line 920
            yield "                        <button type=\"button\" data-toggle=\"modal\" data-target=\"#mdModalPlanning\"
                                class=\"btn bg-green text-white\" style=\"border:1px solid #dddfeb\">- PLANNING
                        </button>
                    ";
        }
        // line 924
        yield "                    ";
        if ((($tmp = (isset($context["editSection"]) || array_key_exists("editSection", $context) ? $context["editSection"] : (function () { throw new RuntimeError('Variable "editSection" does not exist.', 924, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 925
            yield "                        <button type=\"button\" data-toggle=\"modal\" data-target=\"#mdModalSection\"
                                class=\"btn bg-green text-white\" style=\"border:1px solid #dddfeb\">- SECTION
                        </button>
                    ";
        } else {
            // line 929
            yield "                        <button type=\"button\" data-toggle=\"modal\" data-target=\"#mdModalSection\"
                                class=\"btn bg-blue text-white\" style=\"border:1px solid #dddfeb\">+ SECTION
                        </button>
                    ";
        }
        // line 933
        yield "                    ";
        if ((($tmp = (isset($context["editTache"]) || array_key_exists("editTache", $context) ? $context["editTache"] : (function () { throw new RuntimeError('Variable "editTache" does not exist.', 933, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 934
            yield "                        <button type=\"button\" data-toggle=\"modal\" data-target=\"#mdModalTache\"
                                class=\"btn bg-green text-white\" style=\"border:1px solid #dddfeb\">- TACHE
                        </button>

                    ";
        } else {
            // line 939
            yield "                        <button type=\"button\" data-toggle=\"modal\" data-target=\"#mdModalTache\"
                                class=\"btn bg-blue-grey text-white\" style=\"border:1px solid #dddfeb\">+ TACHE
                        </button>
                    ";
        }
        // line 943
        yield "                    ";
        if ((($tmp = (isset($context["editTeam"]) || array_key_exists("editTeam", $context) ? $context["editTeam"] : (function () { throw new RuntimeError('Variable "editTeam" does not exist.', 943, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 944
            yield "                        <button type=\"button\" data-toggle=\"modal\" data-target=\"#modalEquipe\"
                                class=\"btn bg-green text-white\" style=\"border:1px solid #dddfeb\">+ ÉQUIPE
                        </button>
                    ";
        } else {
            // line 948
            yield "                        <button type=\"button\" data-toggle=\"modal\" data-target=\"#modalEquipe\"
                                class=\"btn bg-deep-orange text-white\" style=\"border:1px solid #dddfeb\">+ ÉQUIPE
                        </button>

                    ";
        }
        // line 953
        yield "                </div>

                <div class=\"row clearfix m-t--10 p-b-5\">
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">&nbsp;
                        <div class=\"panel-group\" id=\"accordion_2\" role=\"tablist\" aria-multiselectable=\"true\">
                            <div class=\"panel panel-pri\">
                                <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingPla\">
                                    <h5 class=\"panel-title \">

                                        <a class=\"collapsed text-white\" role=\"button\" data-toggle=\"collapse\"
                                           data-parent=\"#accordion_2\"
                                           href=\"#collapsePla\" aria-expanded=\"false\" aria-controls=\"collapsePla\"
                                           style=\"font-size: 14px!important; font-weight: 500\">
                                            PLANNING</a>
                                    </h5>
                                </div>
                                <div id=\"collapsePla\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                     aria-labelledby=\"headingPla\">
                                    <div class=\"panel-body\" style=\"overflow: scroll\">
                                        <div class=\"body\">
                                            <div class=\"table-responsive\">
                                                <button class=\"btn btn-success float-right\" id=\"tablee\">Exporter en
                                                    EXCEL
                                                </button>
                                                <table class=\"table table-striped dashboard-task-infos\" id=\"table2excel\"
                                                       style=\"width: 100%;\">
                                                    <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th class=\"mw250\">PLANNING | SECTION | TACHES</th>
                                                        <th class=\"text-center mw80\">DÉBUT</th>
                                                        <th class=\"text-center mw80\">FIN</th>
                                                        <th class=\"text-center\">STATUS</th>
                                                        <th>SUPERVISEURS</th>
                                                        <th>ÉQUIPES</th>
                                                        <th>PROGRESSION</th>
                                                        <th class=\"mw60\"></th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    ";
        // line 997
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allplanning"]) || array_key_exists("allplanning", $context) ? $context["allplanning"] : (function () { throw new RuntimeError('Variable "allplanning" does not exist.', 997, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["plann"]) {
            // line 998
            yield "                                                        ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["plann"], "corbeille", [], "any", false, false, false, 998))) {
                // line 999
                yield "                                                            <tr style=\"background-color: #dbdfef\">
                                                                <td class=\"text-center\">";
                // line 1000
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plann"], "rang", [], "any", false, false, false, 1000), "html", null, true);
                yield "</td>
                                                                <td class=\"text-center\"></td>
                                                                <td class=\"text-center\"></td>
                                                                <td class=\"bolo600 col-blue\" colspan=\"6\">";
                // line 1003
                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["plann"], "planning", [], "any", false, false, false, 1003));
                yield "</td>
                                                                <td>
                                                                    <div class=\"progress\">
                                                                        <div class=\"progress-bar bg-green\"
                                                                             role=\"progressbar\"
                                                                             aria-valuenow=\"";
                // line 1008
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plann"], "progression", [], "any", false, false, false, 1008), "html", null, true);
                yield "\"
                                                                             aria-valuemin=\"0\"
                                                                             aria-valuemax=\"100\"
                                                                             style=\"width: ";
                // line 1011
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plann"], "progression", [], "any", false, false, false, 1011), "html", null, true);
                yield "%\"></div>
                                                                    </div>
                                                                </td>
                                                                <td class=\"bolo600 text-center\">";
                // line 1014
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["plann"], "progression", [], "any", false, false, false, 1014), 0, ",", " "), "html", null, true);
                yield "%</td>
                                                                <td>
                                                                    <a href=\"";
                // line 1016
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editPlanning", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 1016, $this->source); })()), "id", [], "any", false, false, false, 1016), "idplanning" => CoreExtension::getAttribute($this->env, $this->source, $context["plann"], "id", [], "any", false, false, false, 1016)]), "html", null, true);
                yield "\">
                                                                        <i class=\"fa fa-edit col-green\"></i>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a href=\"";
                // line 1021
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delePlanning", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["plann"], "id", [], "any", false, false, false, 1021)]), "html", null, true);
                yield "\"
                                                                       class=\"sholigne\">
                                                                        <i class=\"fa fa-trash col-pink\"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>

                                                            ";
                // line 1028
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["plann"], "section", [], "any", false, false, false, 1028));
                foreach ($context['_seq'] as $context["_key"] => $context["sec"]) {
                    // line 1029
                    yield "                                                                ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["sec"], "corbeille", [], "any", false, false, false, 1029))) {
                        // line 1030
                        yield "                                                                    <tr>
                                                                        <td></td>
                                                                        <td class=\"text-center bg-blue-grey\">";
                        // line 1032
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sec"], "rang", [], "any", false, false, false, 1032), "html", null, true);
                        yield "</td>
                                                                        <td></td>
                                                                        <td colspan=\"6\" title=\"";
                        // line 1034
                        yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["sec"], "libelle", [], "any", false, false, false, 1034));
                        yield "\" class=\"col-pink\"><i class=\"fa fa-folder-open\"></i>&nbsp;";
                        yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["sec"], "libelle", [], "any", false, false, false, 1034));
                        yield "</td>
                                                                        <td>
                                                                            <div class=\"progress\">
                                                                                <div class=\"progress-bar bg-green\"
                                                                                     role=\"progressbar\"
                                                                                     aria-valuenow=\"";
                        // line 1039
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["sec"], "etat", [], "any", false, false, false, 1039), 0, ",", " "), "html", null, true);
                        yield "\"
                                                                                     aria-valuemin=\"0\"
                                                                                     aria-valuemax=\"100\"
                                                                                     style=\"width: ";
                        // line 1042
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["sec"], "etat", [], "any", false, false, false, 1042), 0, ",", " "), "html", null, true);
                        yield "%\"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class=\"bolo600 text-center\">";
                        // line 1045
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["sec"], "etat", [], "any", false, false, false, 1045), 0, ",", " "), "html", null, true);
                        yield "
                                                                            %
                                                                        </td>
                                                                        <td>
                                                                            <a href=\"";
                        // line 1049
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editSection", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 1049, $this->source); })()), "id", [], "any", false, false, false, 1049), "idsection" => CoreExtension::getAttribute($this->env, $this->source, $context["sec"], "id", [], "any", false, false, false, 1049)]), "html", null, true);
                        yield "\">
                                                                                <i class=\"fa fa-edit col-green\"></i>
                                                                            </a>
                                                                        </td>
                                                                        <td>
                                                                            <a href=\"";
                        // line 1054
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delSection", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["sec"], "id", [], "any", false, false, false, 1054)]), "html", null, true);
                        yield "\"
                                                                               class=\"sholigne\">
                                                                                <i class=\"fa fa-trash col-pink\"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    ";
                        // line 1060
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 1060, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
                            // line 1061
                            yield "                                                                        ";
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "section", [], "any", false, false, false, 1061) == $context["sec"]) && (null === CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "corbeille", [], "any", false, false, false, 1061)))) {
                                // line 1062
                                yield "                                                                            <tr>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td class=\"text-center bg-blue\">";
                                // line 1065
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "ordre", [], "any", false, false, false, 1065), "html", null, true);
                                yield "</td>
                                                                                <td>";
                                // line 1066
                                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "libelle", [], "any", false, false, false, 1066));
                                yield "</td>
                                                                                <td class=\"text-center\">";
                                // line 1067
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "debut", [], "any", false, false, false, 1067), "d/m/Y H.i"), "html", null, true);
                                yield "</td>
                                                                                <td class=\"text-center\">";
                                // line 1068
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "fin", [], "any", false, false, false, 1068), "d/m/Y H.i"), "html", null, true);
                                yield "</td>
                                                                                <td style=\"vertical-align: middle\" class=\"text-center\">
                                                                                    ";
                                // line 1070
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "etat", [], "any", false, false, false, 1070) == "À faire")) {
                                    // line 1071
                                    yield "                                                                                        <span class=\"label bg-green font-12\">";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "etat", [], "any", false, false, false, 1071), "html", null, true);
                                    yield "</span>
                                                                                    ";
                                }
                                // line 1073
                                yield "                                                                                    ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "etat", [], "any", false, false, false, 1073) == "Achevée")) {
                                    // line 1074
                                    yield "                                                                                        <span class=\"label bg-pink font-12\">Achevé</span>
                                                                                    ";
                                }
                                // line 1076
                                yield "                                                                                    ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "etat", [], "any", false, false, false, 1076) == "En cours")) {
                                    // line 1077
                                    yield "                                                                                        <span class=\"label bg-blue font-12\">";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "etat", [], "any", false, false, false, 1077), "html", null, true);
                                    yield "</span>
                                                                                    ";
                                }
                                // line 1079
                                yield "                                                                                    ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "etat", [], "any", false, false, false, 1079) == "En attente")) {
                                    // line 1080
                                    yield "                                                                                        <span class=\"label bg-orange font-12\">";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "etat", [], "any", false, false, false, 1080), "html", null, true);
                                    yield "</span>
                                                                                    ";
                                }
                                // line 1082
                                yield "                                                                                </td>
                                                                                <td>
                                                                                    ";
                                // line 1084
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "personnel", [], "any", false, false, false, 1084));
                                foreach ($context['_seq'] as $context["_key"] => $context["pers"]) {
                                    // line 1085
                                    yield "                                                                                        <span class=\"col-black bolo6\">&raquo; ";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pers"], "noms", [], "any", false, false, false, 1085), "html", null, true);
                                    yield "</span>
                                                                                        <br>
                                                                                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_key'], $context['pers'], $context['_parent']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 1088
                                yield "                                                                                </td>
                                                                                <td>
                                                                                    ";
                                // line 1090
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "equipes", [], "any", false, false, false, 1090));
                                foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                                    // line 1091
                                    yield "                                                                                        <span class=\"col-black bolo6\">&raquo; ";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["team"], "designation", [], "any", false, false, false, 1091)), "html", null, true);
                                    yield "</span>
                                                                                        <br>
                                                                                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_key'], $context['team'], $context['_parent']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 1094
                                yield "                                                                                </td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td>
                                                                                    <a href=\"";
                                // line 1098
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gesteditTache", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 1098, $this->source); })()), "id", [], "any", false, false, false, 1098), "idtache" => CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 1098)]), "html", null, true);
                                yield "\">
                                                                                        <i class=\"fa fa-edit col-green font-12\"></i>
                                                                                    </a>
                                                                                </td>
                                                                                <td>
                                                                                    <a href=\"";
                                // line 1103
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delta", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 1103)]), "html", null, true);
                                yield "\"
                                                                                       class=\"sholigne\"><i
                                                                                                class=\"fa fa-trash col-pink font-12\"></i>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                        ";
                            }
                            // line 1110
                            yield "                                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['tache'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1111
                        yield "                                                                ";
                    }
                    // line 1112
                    yield "
                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['sec'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1114
                yield "                                                        ";
            }
            // line 1115
            yield "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['plann'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1116
        yield "                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"panel panel-pri\">
                                <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingEqui\">
                                    <h5 class=\"panel-title \">
                                        <a class=\"collapsed text-white\" role=\"button\" data-toggle=\"collapse\"
                                           data-parent=\"#accordion_2\"
                                           href=\"#collapseEqui\" aria-expanded=\"false\" aria-controls=\"collapseEqui\"
                                           style=\"font-size: 14px!important; font-weight: 500\">
                                            GESTION DES ÉQUIPES</a>
                                    </h5>
                                </div>
                                <div id=\"collapseEqui\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                     aria-labelledby=\"headingEqui\">
                                    <div class=\"panel-body\" style=\"overflow: scroll\">
                                        <div class=\"body\">
                                            <div class=\"table-responsive\">
                                                <button class=\"btn btn-success float-right\" id=\"tablez\">Exporter en
                                                    EXCEL
                                                </button>
                                                <table class=\"table table-striped dashboard-task-infos\" id=\"table3excel\"
                                                       style=\"width: 100%;\">
                                                    <thead>
                                                    <tr>
                                                        <th>ÉQUIPES</th>
                                                        <th>CHEF D'ÉQUIPE</th>
                                                        <th>MEMBRES</th>
                                                        <th class=\"mw300\">TACHES</th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    ";
        // line 1156
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["equipes"]) || array_key_exists("equipes", $context) ? $context["equipes"] : (function () { throw new RuntimeError('Variable "equipes" does not exist.', 1156, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 1157
            yield "                                                        <tr>
                                                            <td class=\"text-left col-blue bolo600\">";
            // line 1158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "designation", [], "any", false, false, false, 1158), "html", null, true);
            yield "</td>
                                                            <td class=\"text-left col-deep-purple bolo700\">
                                                                ";
            // line 1160
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["team"], "chef", [], "any", false, false, false, 1160))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1161
                yield "                                                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["team"], "chef", [], "any", false, false, false, 1161), "noms", [], "any", false, false, false, 1161)), "html", null, true);
                yield "
                                                                ";
            }
            // line 1163
            yield "                                                            </td>
                                                            <td class=\"text-left bolo600\">
                                                                ";
            // line 1165
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "personnels", [], "any", false, false, false, 1165));
            foreach ($context['_seq'] as $context["_key"] => $context["pers"]) {
                // line 1166
                yield "                                                                    &raquo; ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["pers"], "noms", [], "any", false, false, false, 1166)), "html", null, true);
                yield " | ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["pers"], "fonction", [], "any", false, false, false, 1166)), "html", null, true);
                yield "
                                                                    <br>
                                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['pers'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1169
            yield "                                                            </td>
                                                            <td class=\"text-left bolo600\">
                                                                ";
            // line 1171
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "taches", [], "any", false, false, false, 1171));
            foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
                // line 1172
                yield "                                                                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "etat", [], "any", false, false, false, 1172) == "À faire")) {
                    // line 1173
                    yield "                                                                        <span class=\"label bg-green font-12\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "etat", [], "any", false, false, false, 1173), "html", null, true);
                    yield "</span>
                                                                    ";
                }
                // line 1175
                yield "                                                                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "etat", [], "any", false, false, false, 1175) == "Achevée")) {
                    // line 1176
                    yield "                                                                        <span class=\"label bg-pink font-12\">Achevé</span>
                                                                    ";
                }
                // line 1178
                yield "                                                                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "etat", [], "any", false, false, false, 1178) == "En cours")) {
                    // line 1179
                    yield "                                                                        <span class=\"label bg-blue font-12\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "etat", [], "any", false, false, false, 1179), "html", null, true);
                    yield "</span>
                                                                    ";
                }
                // line 1181
                yield "                                                                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "etat", [], "any", false, false, false, 1181) == "En attente")) {
                    // line 1182
                    yield "                                                                        <span class=\"label bg-orange font-12\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "etat", [], "any", false, false, false, 1182), "html", null, true);
                    yield "</span>
                                                                    ";
                }
                // line 1184
                yield "                                                                    &raquo; ";
                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["tache"], "libelle", [], "any", false, false, false, 1184));
                yield "
                                                                    <hr style=\"margin: 0 -15px 0 -15px \">
                                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tache'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1187
            yield "                                                            </td>
                                                            <td>
                                                                <a href=\"";
            // line 1189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gesteam", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 1189, $this->source); })()), "id", [], "any", false, false, false, 1189), "idteam" => CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 1189)]), "html", null, true);
            yield "\">
                                                                    <i class=\"fa fa-edit col-green\"></i>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <a href=\"\"
                                                                   class=\"sholigne\">
                                                                    <i class=\"fa fa-trash col-pink\"></i>
                                                                </a>
                                                            </td>
                                                        </tr>

                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['team'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1202
        yield "                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"button-demo\">
                    ";
        // line 1214
        if ((($tmp = (isset($context["editCont"]) || array_key_exists("editCont", $context) ? $context["editCont"] : (function () { throw new RuntimeError('Variable "editCont" does not exist.', 1214, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1215
            yield "                        <button type=\"button\" data-color=\"blue\" class=\"btn bg-green text-center waves-effect\"
                                data-toggle=\"modal\" data-target=\"#modalContact\">MODIFIER UN DEVIS
                        </button>
                    ";
        } else {
            // line 1219
            yield "                        <button type=\"button\" data-color=\"blue\" class=\"btn bg-indigo text-white waves-effect\"
                                data-toggle=\"modal\" data-target=\"#modalDevis\">AJOUTER UN DEVIS
                        </button>
                    ";
        }
        // line 1223
        yield "                    ";
        if ((($tmp = (isset($context["editCont"]) || array_key_exists("editCont", $context) ? $context["editCont"] : (function () { throw new RuntimeError('Variable "editCont" does not exist.', 1223, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1224
            yield "                        <button type=\"button\" data-color=\"blue\" class=\"btn bg-green text-center waves-effect\"
                                data-toggle=\"modal\" data-target=\"#modalContact\">MODIFIER UN CONTACT
                        </button>
                    ";
        } else {
            // line 1228
            yield "                        <button type=\"button\" data-color=\"blue\" class=\"btn bg-indigo text-white waves-effect\"
                                data-toggle=\"modal\" data-target=\"#modalContact\">AJOUTER UN CONTACT
                        </button>
                    ";
        }
        // line 1232
        yield "

                    ";
        // line 1234
        if ((($tmp = (isset($context["editTache"]) || array_key_exists("editTache", $context) ? $context["editTache"] : (function () { throw new RuntimeError('Variable "editTache" does not exist.', 1234, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1235
            yield "                        <button type=\"button\" class=\"btn bg-indigo text-white waves-effect\" data-toggle=\"modal\"
                                data-target=\"#mdModalPrevision\">MODIFIER UNE PRÉVISION
                        </button>
                    ";
        } else {
            // line 1239
            yield "                        <button type=\"button\" class=\"btn bg-indigo text-white waves-effect\" data-toggle=\"modal\"
                                data-target=\"#mdModalPrevision\">CRÉER UNE PRÉVISION
                        </button>
                    ";
        }
        // line 1243
        yield "                    <button type=\"button\" data-color=\"blue\" class=\"btn bg-indigo text-white waves-effect\"
                            data-toggle=\"modal\" data-target=\"#mdModalDocument\">JOINDRE
                        DES DOCUMENTS
                    </button>
                </div>
                <div class=\"row clearfix\">
                    <div class=\"col-xs-12 col-sm-12\">
                        <div class=\"panel-group\" id=\"accordion_1\" role=\"tablist\" aria-multiselectable=\"true\">


                            ";
        // line 1254
        yield "                            <div class=\"panel panel-primary\">
                                <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingDeu\">
                                    <h5 class=\"panel-title \">
                                        <a class=\"collapsed text-white\" role=\"button\" data-toggle=\"collapse\"
                                           data-parent=\"#accordion_1\"
                                           href=\"#collapseDeu\" aria-expanded=\"false\"
                                           aria-controls=\"collapseDeu\"
                                           style=\"font-size: 14px!important; font-weight: 500\">
                                            1- CONTACTS<span class=\"badge bg-pink\"
                                                             style=\"float: right !important;\">";
        // line 1263
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 1263, $this->source); })()), "contacts", [], "any", false, false, false, 1263), "count", [], "any", false, false, false, 1263), "html", null, true);
        yield "</span>
                                        </a>
                                    </h5>
                                </div>
                                <div id=\"collapseDeu\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                     aria-labelledby=\"headingDeu\">
                                    <div class=\"panel-body\" style=\"overflow: scroll\">
                                        <div class=\"table-responsive shadow\" style=\"padding: 10px\">
                                            <table class=\"table-striped table-bordered display nowrap\"
                                                   style=\"width: 100%\" id=\"dataContact\">
                                                <thead>
                                                <tr class=\"text-center\">
                                                    <th style=\"width: 10px !important;\"></th>
                                                    <th>CONTACT</th>
                                                    <th>FONCTION</th>
                                                    <th>EMAIL</th>
                                                    <th>TÉLÉPHONE</th>
                                                    <th>BUREAU</th>
                                                    <th>CREÉ PAR
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                ";
        // line 1286
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 1286, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 1287
            yield "                                                    ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "corbeille", [], "any", false, false, false, 1287))) {
                // line 1288
                yield "                                                        <tr class=\"text-center\">
                                                            <td class=\"text-center\">
                                                                <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                       class=\"CONTAK\"
                                                                       value=\"";
                // line 1292
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 1292), "html", null, true);
                yield "\"></td>
                                                            <td class=\"col-blue text-left\">";
                // line 1293
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "contact", [], "any", false, false, false, 1293)), "html", null, true);
                yield "</td>
                                                            <td class=\"text-left\">";
                // line 1294
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "fonction", [], "any", false, false, false, 1294), "html", null, true);
                yield "</td>
                                                            <td class=\"text-left\">";
                // line 1295
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "mail", [], "any", false, false, false, 1295)), "html", null, true);
                yield "</td>
                                                            <td>";
                // line 1296
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "phone", [], "any", false, false, false, 1296)), "html", null, true);
                yield "</td>
                                                            <td>";
                // line 1297
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "bureau", [], "any", false, false, false, 1297)), "html", null, true);
                yield "</td>
                                                            <td class=\"text-left col-blue\"><i
                                                                        class=\"fa fa-user col-blue\"></i>&nbsp;
                                                                ";
                // line 1300
                if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "dobyuser", [], "any", false, false, false, 1300))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 1301
                    yield "                                                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "dobyuser", [], "any", false, false, false, 1301), "nom", [], "any", false, false, false, 1301)), "html", null, true);
                    yield "
                                                                    &nbsp;";
                    // line 1302
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "dobyuser", [], "any", false, false, false, 1302), "prenoms", [], "any", false, false, false, 1302)), "html", null, true);
                    yield "
                                                                ";
                }
                // line 1304
                yield "                                                            </td>
                                                        </tr>
                                                    ";
            }
            // line 1307
            yield "                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['contact'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1308
        yield "                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ";
        // line 1315
        yield "
                            ";
        // line 1317
        yield "                            <div class=\"panel panel-primary\">
                                <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingCin\">
                                    <h5 class=\"panel-title\">
                                        <a class=\"collapsed outai text-white\" role=\"button\" data-toggle=\"collapse\"
                                           data-parent=\"#accordion_1\"
                                           href=\"#collapseCin\" aria-expanded=\"false\"
                                           aria-controls=\"collapseCin\">
                                            2- Devis
                                        </a>
                                    </h5>
                                </div>
                                <div id=\"collapseCin\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                     aria-labelledby=\"headingCin\">
                                    <div class=\"panel-body \" style=\"overflow: scroll; background-color: #dbdfef\">
                                        <div class=\"table-responsive shadow bg-white\"
                                             style=\"padding: 10px 10px 50px 10px;color:#555; overflow: scroll\">
                                            <table class=\"table-striped table-bordered display nowrape\"
                                                   style=\"width: 100%\"
                                                   id=\"dataDEVIS\">
                                                <thead>
                                                <tr class=\"text-center bolderr\">
                                                    <th class=\"mw30\"></th>
                                                    <th class=\"mw30\"></th>
                                                    <th class=\"mw30\"></th>
                                                    <th>DATE</th>
                                                    <th>N° DEVIS</th>
                                                    <th>TOTAL HT</th>
                                                    <th>TOTAL TTC</th>
                                                    <th>RÉGLÉ</th>
                                                    <th>SOLDE</th>
                                                    <th>RÉFÉRENCE</th>
                                                    <th>ETAT</th>
                                                    <th>CREÉ PAR</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                ";
        // line 1353
        $context["vdth"] = 0;
        // line 1354
        yield "                                                ";
        $context["vdttc"] = 0;
        // line 1355
        yield "                                                ";
        $context["ndth"] = 0;
        // line 1356
        yield "                                                ";
        $context["ndttc"] = 0;
        // line 1357
        yield "
                                                ";
        // line 1358
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 1358, $this->source); })()), "devis", [], "any", false, false, false, 1358));
        foreach ($context['_seq'] as $context["_key"] => $context["devis"]) {
            // line 1359
            yield "                                                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "type", [], "any", false, false, false, 1359) != "esti")) {
                // line 1360
                yield "                                                        ";
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "etat", [], "any", false, false, false, 1360) == "valide") && (null === CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "corbeille", [], "any", false, false, false, 1360)))) {
                    // line 1361
                    yield "                                                            ";
                    $context["vdth"] = (CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalht", [], "any", false, false, false, 1361) + (isset($context["vdth"]) || array_key_exists("vdth", $context) ? $context["vdth"] : (function () { throw new RuntimeError('Variable "vdth" does not exist.', 1361, $this->source); })()));
                    // line 1362
                    yield "                                                            ";
                    $context["vdttc"] = (CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalttc", [], "any", false, false, false, 1362) + (isset($context["vdttc"]) || array_key_exists("vdttc", $context) ? $context["vdttc"] : (function () { throw new RuntimeError('Variable "vdttc" does not exist.', 1362, $this->source); })()));
                    // line 1363
                    yield "                                                        ";
                }
                // line 1364
                yield "                                                        ";
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "etat", [], "any", false, false, false, 1364) == "save") && (null === CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "corbeille", [], "any", false, false, false, 1364)))) {
                    // line 1365
                    yield "                                                            ";
                    $context["ndth"] = (CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalht", [], "any", false, false, false, 1365) + (isset($context["ndth"]) || array_key_exists("ndth", $context) ? $context["ndth"] : (function () { throw new RuntimeError('Variable "ndth" does not exist.', 1365, $this->source); })()));
                    // line 1366
                    yield "                                                            ";
                    $context["ndttc"] = (CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalttc", [], "any", false, false, false, 1366) + (isset($context["ndttc"]) || array_key_exists("ndttc", $context) ? $context["ndttc"] : (function () { throw new RuntimeError('Variable "ndttc" does not exist.', 1366, $this->source); })()));
                    // line 1367
                    yield "                                                        ";
                }
                // line 1368
                yield "                                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "etat", [], "any", false, false, false, 1368) == "valide")) {
                    // line 1369
                    yield "                                                            ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "corbeille", [], "any", false, false, false, 1369))) {
                        // line 1370
                        yield "                                                                ";
                        $context["regler"] = 0;
                        // line 1371
                        yield "                                                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "relevers", [], "any", false, false, false, 1371));
                        foreach ($context['_seq'] as $context["_key"] => $context["rele"]) {
                            // line 1372
                            yield "                                                                    ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["rele"], "type", [], "any", false, false, false, 1372) == 3)) {
                                // line 1373
                                yield "                                                                        ";
                                $context["regler"] = ((isset($context["regler"]) || array_key_exists("regler", $context) ? $context["regler"] : (function () { throw new RuntimeError('Variable "regler" does not exist.', 1373, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["rele"], "montant", [], "any", false, false, false, 1373));
                                // line 1374
                                yield "                                                                    ";
                            }
                            // line 1375
                            yield "                                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['rele'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1376
                        yield "                                                                <tr>

                                                                    <td class=\"text-center\"><input type=\"checkbox\"
                                                                                                   data-toggle=\"toggle\"
                                                                                                   class=\"DEVYS\"
                                                                                                   value=\"";
                        // line 1381
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "id", [], "any", false, false, false, 1381), "html", null, true);
                        yield "\">
                                                                    </td>
                                                                    <td class=\"text-center\">
                                                                        <a href=\"#\"
                                                                           onclick=\"shasha(";
                        // line 1385
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "id", [], "any", false, false, false, 1385), "html", null, true);
                        yield ",'imprimdevis');\"><i
                                                                                    class=\"fa fa-eye col-green\"
                                                                                    aria-hidden=\"true\"></i></a></td>
                                                                    <td class=\"text-center\"><a href=\"#\"
                                                                                               onclick=\"shushu(";
                        // line 1389
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "id", [], "any", false, false, false, 1389), "html", null, true);
                        yield ",'shushu');\"
                                                                                               title=\"Opérations liées\"><i
                                                                                    class=\"fa fa-plug col-pink bolo700\"
                                                                                    aria-hidden=\"true\"></i></a></td>
                                                                    <td>";
                        // line 1393
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "date", [], "any", false, false, false, 1393), "Y-m-d"), "html", null, true);
                        yield "</td>
                                                                    <td>
                                                                        <a href=\"";
                        // line 1395
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "id", [], "any", false, false, false, 1395), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "chantier", [], "any", false, false, false, 1395), "id", [], "any", false, false, false, 1395)]), "html", null, true);
                        yield "\"
                                                                           style=\"color:dodgerblue\">
                                                                       <span class=\"badge badge-pill badge-primary\"
                                                                             title=\"Validé par ";
                        // line 1398
                        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "vabyuser", [], "any", false, false, false, 1398))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "vabyuser", [], "any", false, false, false, 1398), "prenoms", [], "any", false, false, false, 1398)), "html", null, true);
                        }
                        yield "\">V</span>
                                                                            DEVIS N° ";
                        // line 1399
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "iddevis", [], "any", false, false, false, 1399), "html", null, true);
                        yield "</a>
                                                                    </td>


                                                                    <td class=\"text-right\">";
                        // line 1403
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalht", [], "any", false, false, false, 1403), 2, ",", " "), "html", null, true);
                        yield "</td>
                                                                    <td class=\"text-right\">";
                        // line 1404
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalttc", [], "any", false, false, false, 1404), 2, ",", " "), "html", null, true);
                        yield "</td>
                                                                    <td class=\"text-right\">";
                        // line 1405
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["regler"]) || array_key_exists("regler", $context) ? $context["regler"] : (function () { throw new RuntimeError('Variable "regler" does not exist.', 1405, $this->source); })()), 2, ",", " "), "html", null, true);
                        yield "</td>
                                                                    <td class=\"text-right\">";
                        // line 1406
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalttc", [], "any", false, false, false, 1406) - (isset($context["regler"]) || array_key_exists("regler", $context) ? $context["regler"] : (function () { throw new RuntimeError('Variable "regler" does not exist.', 1406, $this->source); })())), 2, ",", " "), "html", null, true);
                        yield "</td>
                                                                    <td class=\"col-deep-orange\"
                                                                        title=\"";
                        // line 1408
                        yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "devreference", [], "any", false, false, false, 1408));
                        yield "\">
                                                                        ";
                        // line 1409
                        yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "devreference", [], "any", false, false, false, 1409));
                        yield "
                                                                    </td>
                                                                    <td>DEVIS VALIDÉS</td>

                                                                    <td class=\"text-left col-blue bolo600\"><i
                                                                                class=\"fa fa-user col-blue bolo600\"></i>&nbsp;
                                                                        ";
                        // line 1415
                        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "dobyuser", [], "any", false, false, false, 1415))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 1416
                            yield "                                                                            ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "dobyuser", [], "any", false, false, false, 1416), "nom", [], "any", false, false, false, 1416)), "html", null, true);
                            yield "
                                                                            &nbsp;";
                            // line 1417
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "dobyuser", [], "any", false, false, false, 1417), "prenoms", [], "any", false, false, false, 1417)), "html", null, true);
                            yield "
                                                                        ";
                        }
                        // line 1419
                        yield "                                                                    </td>
                                                                </tr>
                                                            ";
                    }
                    // line 1422
                    yield "                                                        ";
                }
                // line 1423
                yield "                                                    ";
            }
            // line 1424
            yield "                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['devis'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1425
        yield "                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td class=\"text-right bg-blue bolo700 col-white\"></td>
                                                    <td class=\"text-right bg-blue bolo700 col-white\"></td>
                                                    <td class=\"text-right bg-blue bolo700 col-white\"></td>
                                                    <td class=\"text-right bg-blue bolo700 col-white\"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <div class=\"table-responsive shadow bg-white\"
                                             style=\"padding: 10px 10px 50px 10px; margin-top: 30px; color:#555; overflow: scroll\">
                                            <table class=\"table-striped table-bordered display nowrap\"
                                                   style=\"width: 100%\"
                                                   id=\"dataDEVIS2\">
                                                <thead>
                                                <tr class=\"text-center bolderr\">
                                                    <th class=\"mw30\"></th>
                                                    <th class=\"mw30\"></th>
                                                    <th>DATE</th>
                                                    <th>N° DEVIS</th>
                                                    <th>TOTAL HT</th>
                                                    <th>TOTAL TTC
                                                    </th>
                                                    <th>RÉFÉRENCE</th>
                                                    <th>ETAT</th>
                                                    <th>CREÉ PAR</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                ";
        // line 1464
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 1464, $this->source); })()), "devis", [], "any", false, false, false, 1464));
        foreach ($context['_seq'] as $context["_key"] => $context["devis"]) {
            // line 1465
            yield "                                                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "etat", [], "any", false, false, false, 1465) == "save")) {
                // line 1466
                yield "                                                        ";
                if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "corbeille", [], "any", false, false, false, 1466)) && (CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "type", [], "any", false, false, false, 1466) != "esti"))) {
                    // line 1467
                    yield "                                                            <tr>
                                                                <td class=\"text-center\">
                                                                    <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                           class=\"DEVYS2\"
                                                                           value=\"";
                    // line 1471
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "id", [], "any", false, false, false, 1471), "html", null, true);
                    yield "\"></td>
                                                                <td class=\"text-center\"><a href=\"#\"
                                                                                           onclick=\"shasha(";
                    // line 1473
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "id", [], "any", false, false, false, 1473), "html", null, true);
                    yield ",'imprimdevis');\"><i
                                                                                class=\"fa fa-eye col-green\"
                                                                                aria-hidden=\"true\"></i></a></td>
                                                                <td>";
                    // line 1476
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "date", [], "any", false, false, false, 1476), "Y-m-d"), "html", null, true);
                    yield "</td>
                                                                <td>
                                                                    <a href=\"";
                    // line 1478
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "id", [], "any", false, false, false, 1478), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "chantier", [], "any", false, false, false, 1478), "id", [], "any", false, false, false, 1478)]), "html", null, true);
                    yield "\"
                                                                       style=\"color:dodgerblue\">
                                                                        <span class=\"badge badge-pill badge-blue-grey\"
                                                                              title=\"Dévalidé par ";
                    // line 1481
                    if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "vabyuser", [], "any", false, false, false, 1481))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "vabyuser", [], "any", false, false, false, 1481), "prenoms", [], "any", false, false, false, 1481)), "html", null, true);
                    }
                    yield "\">V</span>
                                                                        DEVIS
                                                                        N° ";
                    // line 1483
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "iddevis", [], "any", false, false, false, 1483), "html", null, true);
                    yield "
                                                                    </a>
                                                                </td>
                                                                <td class=\"text-right\">";
                    // line 1486
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalht", [], "any", false, false, false, 1486), 2, ",", " "), "html", null, true);
                    yield "</td>
                                                                <td class=\"text-right\">";
                    // line 1487
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalttc", [], "any", false, false, false, 1487), 2, ",", " "), "html", null, true);
                    yield "</td>
                                                                <td class=\"col-deep-orange\"
                                                                    title=\"";
                    // line 1489
                    yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "devreference", [], "any", false, false, false, 1489));
                    yield "\">
                                                                    ";
                    // line 1490
                    yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "devreference", [], "any", false, false, false, 1490));
                    yield "
                                                                </td>
                                                                <td>DEVIS NON VALIDÉS</td>
                                                                <td class=\"text-left col-blue bolo600\"><i
                                                                            class=\"fa fa-user col-blue bolo600\"></i>&nbsp;
                                                                    ";
                    // line 1495
                    if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "dobyuser", [], "any", false, false, false, 1495))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 1496
                        yield "                                                                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "dobyuser", [], "any", false, false, false, 1496), "nom", [], "any", false, false, false, 1496)), "html", null, true);
                        yield "
                                                                        &nbsp;";
                        // line 1497
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "dobyuser", [], "any", false, false, false, 1497), "prenoms", [], "any", false, false, false, 1497)), "html", null, true);
                    }
                    // line 1498
                    yield "                                                                </td>
                                                            </tr>
                                                        ";
                }
                // line 1501
                yield "                                                    ";
            }
            // line 1502
            yield "                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['devis'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1503
        yield "                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td class=\"text-right bg-blue bolo700 col-white\"></td>
                                                    <td class=\"text-right bg-blue bolo700 col-white\"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>

                                        <table class=\"table-bordered d reduire\" style=\"float: right; margin-top: 20px\">
                                            <tr style=\"background-color: slategrey; color: white\">
                                                <th class=\"text-center\"></th>
                                                <th class=\"text-center\">TOTAL HT</th>
                                                <th class=\"text-center\">TOTAL TTC</th>
                                            </tr>
                                            <tr style=\"background-color: slategrey; color: white\">
                                                <td class=\"text-right\">VALIDÉS</td>
                                                <td class=\"text-right\">";
        // line 1528
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["vdth"]) || array_key_exists("vdth", $context) ? $context["vdth"] : (function () { throw new RuntimeError('Variable "vdth" does not exist.', 1528, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</td>
                                                <td class=\"text-right\">";
        // line 1529
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["vdttc"]) || array_key_exists("vdttc", $context) ? $context["vdttc"] : (function () { throw new RuntimeError('Variable "vdttc" does not exist.', 1529, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</td>
                                            </tr>
                                            <tr style=\"background-color: indianred; color: white\">
                                                <td class=\"text-right\">NON VALIDÉS</td>
                                                <td class=\"text-right\">";
        // line 1533
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["ndth"]) || array_key_exists("ndth", $context) ? $context["ndth"] : (function () { throw new RuntimeError('Variable "ndth" does not exist.', 1533, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</td>
                                                <td class=\"text-right\">";
        // line 1534
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["ndttc"]) || array_key_exists("ndttc", $context) ? $context["ndttc"] : (function () { throw new RuntimeError('Variable "ndttc" does not exist.', 1534, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</td>
                                            </tr>
                                            <tr class=\"bg-pri text-white\">
                                                <td class=\"text-right\">TOTAUX</td>
                                                <td class=\"text-right\">";
        // line 1538
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((isset($context["ndth"]) || array_key_exists("ndth", $context) ? $context["ndth"] : (function () { throw new RuntimeError('Variable "ndth" does not exist.', 1538, $this->source); })()) + (isset($context["vdth"]) || array_key_exists("vdth", $context) ? $context["vdth"] : (function () { throw new RuntimeError('Variable "vdth" does not exist.', 1538, $this->source); })())), 2, ",", " "), "html", null, true);
        yield "</td>
                                                <td class=\"text-right\">";
        // line 1539
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((isset($context["ndttc"]) || array_key_exists("ndttc", $context) ? $context["ndttc"] : (function () { throw new RuntimeError('Variable "ndttc" does not exist.', 1539, $this->source); })()) + (isset($context["vdttc"]) || array_key_exists("vdttc", $context) ? $context["vdttc"] : (function () { throw new RuntimeError('Variable "vdttc" does not exist.', 1539, $this->source); })())), 2, ",", " "), "html", null, true);
        yield "</td>
                                            </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                            ";
        // line 1548
        yield "
                            ";
        // line 1550
        yield "                            <div class=\"panel panel-primary\">
                                <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingCin\">
                                    <h5 class=\"panel-title \">
                                        <a class=\"collapsed text-white\" role=\"button\" data-toggle=\"collapse\"
                                           data-parent=\"#accordion_1\" href=\"#collapseCin\" aria-expanded=\"false\"
                                           aria-controls=\"collapseCin\"
                                           style=\"font-size: 14px!important; font-weight: 500\">
                                            3- PRÉVISION<span class=\"badge bg-pink\"
                                                              style=\"float: right !important;\">";
        // line 1558
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 1558, $this->source); })()), "livraisons", [], "any", false, false, false, 1558), "count", [], "any", false, false, false, 1558), "html", null, true);
        yield "</span>
                                        </a>
                                    </h5>
                                </div>
                                <div id=\"collapseCin\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                     aria-labelledby=\"headingCin\">
                                    <div class=\"panel-body\">
                                        <div class=\"table-responsive shadow\" style=\"padding: 10px\">
                                            <table class=\"table-striped table-bordered display nowrap\"
                                                   style=\"width: 100%\"
                                                   id=\"dataDEVIS\">
                                                <thead>
                                                <tr class=\"text-center bolderr\">
                                                    <th style=\"width: 10px !important;\"></th>
                                                    <th style=\"width: 80px !important;\">DATE</th>
                                                    <th>N° DE PRÉVISION</th>
                                                    <th>RÉFÉRENCE</th>
                                                    <th class=\"text-center\">TOTAL HT</th>
                                                    <th class=\"text-center\">TOTAL TTC</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                ";
        // line 1580
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allprevision"]) || array_key_exists("allprevision", $context) ? $context["allprevision"] : (function () { throw new RuntimeError('Variable "allprevision" does not exist.', 1580, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pre"]) {
            // line 1581
            yield "                                                    <tr>
                                                        <td></td>
                                                        <td>";
            // line 1583
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["pre"], "date", [], "any", false, false, false, 1583), "Y.m.d H.i.s"), "html", null, true);
            yield "</td>
                                                        <td>
                                                            <a href=\"";
            // line 1585
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editprevision", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pre"], "id", [], "any", false, false, false, 1585), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 1585, $this->source); })()), "id", [], "any", false, false, false, 1585)]), "html", null, true);
            yield "\">
                                                                ";
            // line 1586
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pre"], "numprevision", [], "any", false, false, false, 1586), "html", null, true);
            yield "</a></td>
                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['pre'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1589
        yield "                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ";
        // line 1596
        yield "

                            ";
        // line 1599
        yield "                            <div class=\"panel panel-primary\">
                                <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingSep\">
                                    <h5 class=\"panel-title \">
                                        <a class=\"collapsed text-white\" role=\"button\" data-toggle=\"collapse\"
                                           data-parent=\"#accordion_1\" href=\"#collapseSep\" aria-expanded=\"false\"
                                           aria-controls=\"collapseSep\"
                                           style=\"font-size: 14px!important; font-weight: 500\">
                                            4- BONS DE LIVRAISON<span class=\"badge bg-pink\"
                                                                      style=\"float: right !important;\">";
        // line 1607
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 1607, $this->source); })()), "livraisons", [], "any", false, false, false, 1607), "count", [], "any", false, false, false, 1607), "html", null, true);
        yield "</span>
                                        </a>
                                    </h5>
                                </div>
                                <div id=\"collapseSep\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                     aria-labelledby=\"headingSep\">
                                    <div class=\"panel-body\">
                                        <div class=\"table-responsive shadow\" style=\"padding: 10px\">
                                            <table class=\"table-striped table-bordered display nowrap\"
                                                   style=\"width: 100%\"
                                                   id=\"dataLIVRAISON\">
                                                <thead>
                                                <tr class=\"text-center bg-light\">
                                                    <th style=\"width: 10px !important;\"></th>
                                                    <th style=\"width: 80px !important;\">DATE</th>
                                                    <th style=\"width: 150px\">N° BON DE LIVRAISON</th>
                                                    <th style=\"width: 160px\">LIVRÉ À L'INTERVENANT</th>
                                                    <th style=\"width: 300px\">RÉFÉRENCE</th>
                                                    <th style=\"width: 10px !important;\">ETAT</th>
                                                    <th style=\"background-color: #E8E8E8 !important;\">CREÉ PAR
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                ";
        // line 1631
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 1631, $this->source); })()), "livraisons", [], "any", false, false, false, 1631));
        foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
            // line 1632
            yield "                                                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "etat", [], "any", false, false, false, 1632) == "valide")) {
                // line 1633
                yield "                                                        <tr>
                                                            <td class=\"text-center\">
                                                                <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                       class=\"LIVRES\"
                                                                       value=\"";
                // line 1637
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "id", [], "any", false, false, false, 1637), "html", null, true);
                yield "\"></td>
                                                            <td>";
                // line 1638
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "date", [], "any", false, false, false, 1638), "Y.m.d H.i.s"), "html", null, true);
                yield "</td>
                                                            <td>
                                                                <a href=\"";
                // line 1640
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editlivraison", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "id", [], "any", false, false, false, 1640), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 1640, $this->source); })()), "id", [], "any", false, false, false, 1640)]), "html", null, true);
                yield "\">Livraison
                                                                    N°
                                                                    ";
                // line 1642
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "numlivre", [], "any", false, false, false, 1642), "html", null, true);
                yield "</a>
                                                            </td>
                                                            <td></td>
                                                            <td title=\"";
                // line 1645
                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "livrereference", [], "any", false, false, false, 1645));
                yield "\">";
                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "livrereference", [], "any", false, false, false, 1645));
                yield "</td>
                                                            <td>BONS DE LIVRAISON VALIDÉS</td>
                                                            <td class=\"text-left text-pri bolderrer\"
                                                                style=\"background-color: #E8E8E8 !important;\">
                                                                <i class=\"fa fa-user text-pri\"></i>&nbsp;";
                // line 1649
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "dobyuser", [], "any", false, false, false, 1649), "nom", [], "any", false, false, false, 1649)), "html", null, true);
                yield "
                                                                &nbsp;";
                // line 1650
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "dobyuser", [], "any", false, false, false, 1650), "prenoms", [], "any", false, false, false, 1650)), "html", null, true);
                yield "</td>
                                                        </tr>
                                                    ";
            }
            // line 1653
            yield "                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['livre'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1654
        yield "                                                </tbody>

                                            </table>
                                            <br>
                                            <hr style=\"width: 100%; height: 2px; background-color: darkgrey\">
                                            <br>
                                            <table class=\"table-striped table-bordered display nowrap\"
                                                   style=\"width: 100%\"
                                                   id=\"dataLIVRAISON2\">
                                                <thead>
                                                <tr class=\"text-center bg-light\">
                                                    <th style=\"width: 10px !important;\"></th>
                                                    <th style=\"width: 80px !important;\">DATE</th>
                                                    <th>N° BON DE LIVRAISON</th>
                                                    <th>INTERVENANT</th>
                                                    <th>RÉFÉRENCE</th>
                                                    <th>ETAT</th>
                                                    <th style=\"background-color: #E8E8E8 !important;\">CREÉ PAR
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                ";
        // line 1676
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 1676, $this->source); })()), "livraisons", [], "any", false, false, false, 1676));
        foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
            // line 1677
            yield "                                                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "etat", [], "any", false, false, false, 1677) == "save")) {
                // line 1678
                yield "                                                        <tr>
                                                            <td class=\"text-center\">
                                                                <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                       class=\"LIVRES2\"
                                                                       value=\"";
                // line 1682
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "id", [], "any", false, false, false, 1682), "html", null, true);
                yield "\"></td>
                                                            <td>";
                // line 1683
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "date", [], "any", false, false, false, 1683), "Y.m.d H.i.s"), "html", null, true);
                yield "</td>
                                                            <td>
                                                                <a href=\"";
                // line 1685
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editlivraison", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "id", [], "any", false, false, false, 1685), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 1685, $this->source); })()), "id", [], "any", false, false, false, 1685)]), "html", null, true);
                yield "\"
                                                                   style=\"color: #dc3545 !important;\">Livraison
                                                                    N°
                                                                    ";
                // line 1688
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "numlivre", [], "any", false, false, false, 1688), "html", null, true);
                yield "</a>
                                                            </td>
                                                            <td style=\"color: #dc3545 !important;\"></td>
                                                            <td title=\"";
                // line 1691
                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "livrereference", [], "any", false, false, false, 1691));
                yield "\">";
                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "livrereference", [], "any", false, false, false, 1691));
                yield "</td>
                                                            <td>BONS DE LIVRAISON NON VALIDÉS</td>
                                                            <td class=\"text-left text-pri bolderrer\"
                                                                style=\"background-color: #E8E8E8 !important;\">
                                                                <i class=\"fa fa-user text-pri\"></i>&nbsp;";
                // line 1695
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "dobyuser", [], "any", false, false, false, 1695), "nom", [], "any", false, false, false, 1695)), "html", null, true);
                yield "
                                                                &nbsp;";
                // line 1696
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "dobyuser", [], "any", false, false, false, 1696), "prenoms", [], "any", false, false, false, 1696)), "html", null, true);
                yield "</td>
                                                        </tr>
                                                    ";
            }
            // line 1699
            yield "                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['livre'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1700
        yield "                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ";
        // line 1708
        yield "
                            ";
        // line 1710
        yield "                            <div class=\"panel panel-primary\">
                                <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingNine\">
                                    <h5 class=\"panel-title \">
                                        <a class=\"collapsed text-white\" role=\"button\" data-toggle=\"collapse\"
                                           data-parent=\"#accordion_1\" href=\"#collapseNine\" aria-expanded=\"false\"
                                           aria-controls=\"collapseNine\"
                                           style=\"font-size: 14px!important; font-weight: 500\">
                                            5- GESTION DE STOCK
                                        </a>
                                    </h5>
                                </div>
                                <div id=\"collapseNine\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                     aria-labelledby=\"headingNine\">
                                    <div class=\"panel-body\">
                                        <div class=\"table-responsive shadow\" style=\"padding: 10px\">
                                            <table class=\"table-striped table-bordered display nowrap\" width=\"100%\"
                                                   cellpadding=\"2\" id=\"dataRECAP\">
                                                <thead>
                                                <tr class=\"text-center bg-light\">
                                                    <th>ARTICLES</th>
                                                    <th>BONS DE COMMANDE VALIDÉS</th>
                                                    <th>QUANTITÉ</th>
                                                    <th>PU</th>
                                                    <th>MONTANT HT</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                ";
        // line 1737
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["invente"]) || array_key_exists("invente", $context) ? $context["invente"] : (function () { throw new RuntimeError('Variable "invente" does not exist.', 1737, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 1738
            yield "                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 1738, $this->source); })()), "recaps", [], "any", false, false, false, 1738));
            foreach ($context['_seq'] as $context["_key"] => $context["recap"]) {
                // line 1739
                yield "                                                        ";
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "bon", [], "any", false, false, false, 1739), "etat", [], "any", false, false, false, 1739) == "valide") && (CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "article", [], "any", false, false, false, 1739) == CoreExtension::getAttribute($this->env, $this->source, $context["recap"], "article", [], "any", false, false, false, 1739)))) {
                    // line 1740
                    yield "
                                                            <tr>
                                                                <td style=\"padding: 2px !important;\">";
                    // line 1742
                    yield Twig\Extension\CoreExtension::striptags(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "designation", [], "any", false, false, false, 1742)));
                    yield "
                                                                    | (<span class=\"text-danger\">QUANTITÉ À UTILISER:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 1744
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recap"], "quantite", [], "any", false, false, false, 1744), "html", null, true);
                    yield "</span>)
                                                                </td>
                                                                <td>
                                                                    <a href=\"";
                    // line 1747
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editbon", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "bon", [], "any", false, false, false, 1747), "id", [], "any", false, false, false, 1747), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "chantier", [], "any", false, false, false, 1747), "id", [], "any", false, false, false, 1747)]), "html", null, true);
                    yield "\"
                                                                       style=\"color: #1b1b1b !important;\">&raquo;
                                                                        BON
                                                                        N°
                                                                        ";
                    // line 1751
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "bon", [], "any", false, false, false, 1751), "numbon", [], "any", false, false, false, 1751), "html", null, true);
                    yield "</a>
                                                                </td>
                                                                <td style=\"padding: 2px !important; text-align: right\">";
                    // line 1753
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "quantite", [], "any", false, false, false, 1753), "html", null, true);
                    yield "</td>
                                                                <td style=\"padding: 2px !important; text-align: right\">";
                    // line 1754
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "pu", [], "any", false, false, false, 1754), 2, ",", " "), "html", null, true);
                    yield "</td>
                                                                <td style=\"padding: 2px !important; text-align: right\">";
                    // line 1755
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "quantite", [], "any", false, false, false, 1755) * CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "pu", [], "any", false, false, false, 1755)), 2, ",", " "), "html", null, true);
                    yield "</td>
                                                            </tr>
                                                        ";
                }
                // line 1758
                yield "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['recap'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1759
            yield "                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ligne'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1760
        yield "                                                </tbody>
                                            </table>
                                            <table class=\"table-striped table-bordered display nowrap\" width=\"100%\"
                                                   cellpadding=\"2\" id=\"dataINVENTE\">
                                                <thead>
                                                <tr class=\"text-center bg-light\">
                                                    <th>ARTICLES</th>
                                                    <th>BONS DE COMMANDE VALIDÉS</th>
                                                    <th>QUANTITÉ</th>
                                                    <th>PU</th>
                                                    <th>MONTANT HT</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                ";
        // line 1774
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["invente"]) || array_key_exists("invente", $context) ? $context["invente"] : (function () { throw new RuntimeError('Variable "invente" does not exist.', 1774, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 1775
            yield "                                                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "bon", [], "any", false, false, false, 1775)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1776
                yield "                                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "bon", [], "any", false, false, false, 1776), "etat", [], "any", false, false, false, 1776) == "valide")) {
                    // line 1777
                    yield "                                                            <tr>
                                                                <td style=\"padding: 2px !important;\">";
                    // line 1778
                    yield Twig\Extension\CoreExtension::striptags(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "designation", [], "any", false, false, false, 1778)));
                    yield "</td>
                                                                <td>
                                                                    <a href=\"";
                    // line 1780
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editbon", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "bon", [], "any", false, false, false, 1780), "id", [], "any", false, false, false, 1780), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "chantier", [], "any", false, false, false, 1780), "id", [], "any", false, false, false, 1780)]), "html", null, true);
                    yield "\"
                                                                       style=\"color: #1b1b1b !important;\">&raquo;
                                                                        BON
                                                                        N°
                                                                        ";
                    // line 1784
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "bon", [], "any", false, false, false, 1784), "numbon", [], "any", false, false, false, 1784), "html", null, true);
                    yield "</a>
                                                                </td>
                                                                <td style=\"padding: 2px !important; text-align: right\">";
                    // line 1786
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "quantite", [], "any", false, false, false, 1786), "html", null, true);
                    yield "</td>
                                                                <td style=\"padding: 2px !important; text-align: right\">";
                    // line 1787
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "pu", [], "any", false, false, false, 1787), 2, ",", " "), "html", null, true);
                    yield "</td>
                                                                <td style=\"padding: 2px !important; text-align: right\">";
                    // line 1788
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "quantite", [], "any", false, false, false, 1788) * CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "pu", [], "any", false, false, false, 1788)), 2, ",", " "), "html", null, true);
                    yield "</td>
                                                            </tr>
                                                        ";
                }
                // line 1791
                yield "                                                    ";
            }
            // line 1792
            yield "                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ligne'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1793
        yield "                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ";
        // line 1800
        yield "
                            ";
        // line 1802
        yield "                            <div class=\"panel panel-primary\">
                                <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingTen\">
                                    <h5 class=\"panel-title \">
                                        <a class=\"collapsed text-white\" role=\"button\" data-toggle=\"collapse\"
                                           data-parent=\"#accordion_1\" href=\"#collapseTen\" aria-expanded=\"false\"
                                           aria-controls=\"collapseTen\"
                                           style=\"font-size: 14px!important; font-weight: 500\">
                                            6- GESTION DES DOCUMENTS
                                        </a>
                                    </h5>
                                </div>
                                <div id=\"collapseTen\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                     aria-labelledby=\"headingTen\">
                                    <div class=\"panel-body\">
                                        <div class=\"table-responsive shadow\" style=\"padding: 10px\">
                                            <table class=\"table-striped table-bordered display nowrap\" width=\"100%\"
                                                   cellpadding=\"2\" id=\"dataFichies\">
                                                <thead>
                                                <tr class=\"text-center\">
                                                    <th style=\"width: 10px !important;\"></th>
                                                    <th>DATE D'AJOUT</th>
                                                    <th>DOCUMENTS</th>
                                                    <th class=\"text-center\">TAILLE</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                ";
        // line 1828
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 1828, $this->source); })()), "fichiers", [], "any", false, false, false, 1828));
        foreach ($context['_seq'] as $context["_key"] => $context["fichier"]) {
            // line 1829
            yield "                                                    <tr>
                                                        <td class=\"text-center\">
                                                            <input type=\"checkbox\" data-toggle=\"toggle\" class=\"FICHIES\"
                                                                   value=\"";
            // line 1832
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "id", [], "any", false, false, false, 1832), "html", null, true);
            yield "\"></td>
                                                        <td>";
            // line 1833
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "date", [], "any", false, false, false, 1833), "Y.m.d H.i.s"), "html", null, true);
            yield "</td>
                                                        <td style=\"padding: 2px !important;\">
                                                            <a href=\"https://carlinbleu.com/eagles/public/upload/";
            // line 1835
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "nomfichier", [], "any", false, false, false, 1835), "html", null, true);
            yield "\"
                                                               download>";
            // line 1836
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "nomfichier", [], "any", false, false, false, 1836), "html", null, true);
            yield "</a>
                                                        </td>
                                                        <td class=\"text-center\"
                                                            style=\"padding: 2px !important\">";
            // line 1839
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["fichier"], "taille", [], "any", false, false, false, 1839) / 1000000), 2, ",", " "), "html", null, true);
            yield "
                                                            Mo
                                                        </td>
                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['fichier'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1844
        yield "                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ";
        // line 1851
        yield "
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <script>
        localStorage.setItem('reloadd', 'gestion/' + document.getElementById('idchantier').value);
    </script>

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
        return "content/gestion.html.twig";
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
        return array (  3285 => 1851,  3277 => 1844,  3266 => 1839,  3260 => 1836,  3256 => 1835,  3251 => 1833,  3247 => 1832,  3242 => 1829,  3238 => 1828,  3210 => 1802,  3207 => 1800,  3199 => 1793,  3193 => 1792,  3190 => 1791,  3184 => 1788,  3180 => 1787,  3176 => 1786,  3171 => 1784,  3164 => 1780,  3159 => 1778,  3156 => 1777,  3153 => 1776,  3150 => 1775,  3146 => 1774,  3130 => 1760,  3124 => 1759,  3118 => 1758,  3112 => 1755,  3108 => 1754,  3104 => 1753,  3099 => 1751,  3092 => 1747,  3086 => 1744,  3081 => 1742,  3077 => 1740,  3074 => 1739,  3069 => 1738,  3065 => 1737,  3036 => 1710,  3033 => 1708,  3024 => 1700,  3018 => 1699,  3012 => 1696,  3008 => 1695,  2999 => 1691,  2993 => 1688,  2987 => 1685,  2982 => 1683,  2978 => 1682,  2972 => 1678,  2969 => 1677,  2965 => 1676,  2941 => 1654,  2935 => 1653,  2929 => 1650,  2925 => 1649,  2916 => 1645,  2910 => 1642,  2905 => 1640,  2900 => 1638,  2896 => 1637,  2890 => 1633,  2887 => 1632,  2883 => 1631,  2856 => 1607,  2846 => 1599,  2842 => 1596,  2834 => 1589,  2825 => 1586,  2821 => 1585,  2816 => 1583,  2812 => 1581,  2808 => 1580,  2783 => 1558,  2773 => 1550,  2770 => 1548,  2759 => 1539,  2755 => 1538,  2748 => 1534,  2744 => 1533,  2737 => 1529,  2733 => 1528,  2706 => 1503,  2700 => 1502,  2697 => 1501,  2692 => 1498,  2689 => 1497,  2684 => 1496,  2682 => 1495,  2674 => 1490,  2670 => 1489,  2665 => 1487,  2661 => 1486,  2655 => 1483,  2648 => 1481,  2642 => 1478,  2637 => 1476,  2631 => 1473,  2626 => 1471,  2620 => 1467,  2617 => 1466,  2614 => 1465,  2610 => 1464,  2569 => 1425,  2563 => 1424,  2560 => 1423,  2557 => 1422,  2552 => 1419,  2547 => 1417,  2542 => 1416,  2540 => 1415,  2531 => 1409,  2527 => 1408,  2522 => 1406,  2518 => 1405,  2514 => 1404,  2510 => 1403,  2503 => 1399,  2497 => 1398,  2491 => 1395,  2486 => 1393,  2479 => 1389,  2472 => 1385,  2465 => 1381,  2458 => 1376,  2452 => 1375,  2449 => 1374,  2446 => 1373,  2443 => 1372,  2438 => 1371,  2435 => 1370,  2432 => 1369,  2429 => 1368,  2426 => 1367,  2423 => 1366,  2420 => 1365,  2417 => 1364,  2414 => 1363,  2411 => 1362,  2408 => 1361,  2405 => 1360,  2402 => 1359,  2398 => 1358,  2395 => 1357,  2392 => 1356,  2389 => 1355,  2386 => 1354,  2384 => 1353,  2346 => 1317,  2343 => 1315,  2335 => 1308,  2329 => 1307,  2324 => 1304,  2319 => 1302,  2314 => 1301,  2312 => 1300,  2306 => 1297,  2302 => 1296,  2298 => 1295,  2294 => 1294,  2290 => 1293,  2286 => 1292,  2280 => 1288,  2277 => 1287,  2273 => 1286,  2247 => 1263,  2236 => 1254,  2224 => 1243,  2218 => 1239,  2212 => 1235,  2210 => 1234,  2206 => 1232,  2200 => 1228,  2194 => 1224,  2191 => 1223,  2185 => 1219,  2179 => 1215,  2177 => 1214,  2163 => 1202,  2144 => 1189,  2140 => 1187,  2130 => 1184,  2124 => 1182,  2121 => 1181,  2115 => 1179,  2112 => 1178,  2108 => 1176,  2105 => 1175,  2099 => 1173,  2096 => 1172,  2092 => 1171,  2088 => 1169,  2076 => 1166,  2072 => 1165,  2068 => 1163,  2062 => 1161,  2060 => 1160,  2055 => 1158,  2052 => 1157,  2048 => 1156,  2006 => 1116,  2000 => 1115,  1997 => 1114,  1990 => 1112,  1987 => 1111,  1981 => 1110,  1971 => 1103,  1963 => 1098,  1957 => 1094,  1947 => 1091,  1943 => 1090,  1939 => 1088,  1929 => 1085,  1925 => 1084,  1921 => 1082,  1915 => 1080,  1912 => 1079,  1906 => 1077,  1903 => 1076,  1899 => 1074,  1896 => 1073,  1890 => 1071,  1888 => 1070,  1883 => 1068,  1879 => 1067,  1875 => 1066,  1871 => 1065,  1866 => 1062,  1863 => 1061,  1859 => 1060,  1850 => 1054,  1842 => 1049,  1835 => 1045,  1829 => 1042,  1823 => 1039,  1813 => 1034,  1808 => 1032,  1804 => 1030,  1801 => 1029,  1797 => 1028,  1787 => 1021,  1779 => 1016,  1774 => 1014,  1768 => 1011,  1762 => 1008,  1754 => 1003,  1748 => 1000,  1745 => 999,  1742 => 998,  1738 => 997,  1692 => 953,  1685 => 948,  1679 => 944,  1676 => 943,  1670 => 939,  1663 => 934,  1660 => 933,  1654 => 929,  1648 => 925,  1645 => 924,  1639 => 920,  1633 => 916,  1631 => 915,  1613 => 906,  1607 => 905,  1604 => 904,  1601 => 903,  1596 => 902,  1593 => 901,  1591 => 900,  1587 => 898,  1578 => 896,  1574 => 895,  1562 => 886,  1557 => 884,  1551 => 881,  1540 => 875,  1535 => 873,  1520 => 861,  1513 => 857,  1498 => 845,  1485 => 835,  1474 => 827,  1461 => 817,  1450 => 809,  1436 => 798,  1425 => 790,  1412 => 780,  1400 => 771,  1387 => 761,  1374 => 751,  1363 => 743,  1350 => 733,  1341 => 727,  1337 => 726,  1318 => 710,  1311 => 706,  1295 => 693,  1282 => 683,  1271 => 675,  1258 => 665,  1249 => 659,  1245 => 658,  1227 => 643,  1221 => 640,  1206 => 628,  1197 => 622,  1193 => 621,  1189 => 620,  1166 => 601,  1156 => 593,  1148 => 588,  1144 => 586,  1142 => 585,  1134 => 579,  1123 => 577,  1119 => 576,  1106 => 565,  1095 => 563,  1092 => 562,  1086 => 561,  1081 => 559,  1076 => 558,  1073 => 557,  1068 => 556,  1065 => 555,  1061 => 554,  1053 => 551,  1049 => 549,  1038 => 547,  1035 => 546,  1030 => 544,  1025 => 543,  1022 => 542,  1019 => 541,  1015 => 540,  1008 => 538,  997 => 529,  986 => 527,  983 => 526,  978 => 524,  973 => 523,  970 => 522,  967 => 521,  963 => 520,  956 => 518,  945 => 509,  934 => 507,  931 => 506,  926 => 504,  921 => 503,  918 => 502,  915 => 501,  911 => 500,  904 => 498,  891 => 487,  887 => 485,  882 => 483,  879 => 482,  877 => 481,  868 => 475,  849 => 459,  841 => 455,  832 => 448,  824 => 443,  820 => 441,  818 => 440,  810 => 434,  799 => 432,  795 => 431,  783 => 421,  772 => 419,  768 => 418,  746 => 401,  739 => 396,  725 => 384,  711 => 375,  706 => 372,  704 => 371,  696 => 365,  690 => 363,  684 => 361,  682 => 360,  668 => 349,  655 => 338,  649 => 336,  643 => 334,  641 => 333,  630 => 324,  624 => 322,  618 => 320,  616 => 319,  605 => 311,  601 => 310,  597 => 308,  591 => 304,  585 => 300,  583 => 299,  570 => 289,  562 => 285,  553 => 278,  545 => 273,  541 => 271,  539 => 270,  529 => 263,  515 => 252,  501 => 241,  490 => 233,  486 => 232,  482 => 230,  476 => 226,  470 => 222,  468 => 221,  455 => 211,  448 => 208,  439 => 201,  431 => 196,  427 => 194,  425 => 193,  418 => 188,  412 => 186,  406 => 184,  404 => 183,  392 => 173,  386 => 171,  380 => 169,  378 => 168,  368 => 161,  364 => 160,  360 => 158,  354 => 154,  348 => 150,  346 => 149,  333 => 139,  325 => 135,  315 => 127,  308 => 123,  300 => 119,  298 => 118,  291 => 113,  285 => 111,  279 => 109,  277 => 108,  266 => 99,  260 => 97,  254 => 95,  252 => 94,  241 => 85,  235 => 83,  229 => 81,  227 => 80,  216 => 71,  210 => 69,  204 => 67,  202 => 66,  191 => 57,  185 => 55,  179 => 53,  177 => 52,  167 => 45,  163 => 44,  158 => 41,  150 => 35,  142 => 29,  140 => 28,  128 => 19,  124 => 18,  120 => 17,  116 => 16,  104 => 6,  91 => 5,  77 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baser.html.twig' %}
{% block title %}
    {{ title }}
{% endblock %}
{% block body %}

    <style>
        .pageage {
            padding-left: 0;
            max-width: 1024px;
            margin: auto;
            overflow-x: hidden;
        }
    </style>

    <input type=\"text\" class=\"hide\" id=\"idchantier\" value=\"{{ chantier.id }}\">
    <input type=\"text\" class=\"hide\" id=\"idplanning\" value=\"{{ planning.id }}\">
    <input type=\"text\" class=\"hide\" id=\"idtache\" value=\"{{ tache.id }}\">
    <input type=\"text\" class=\"hide\" id=\"idsection\" value=\"{{ section.id }}\">

    <input type=\"text\" class=\"hide\" id=\"pager\" value=\"gestion\"/>

    <div class=\"modal fade right\" id=\"modalContact\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">

                {% if editCont %}
                    <div class=\"modal-header text-white bg-green p-l-20\">
                        <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                            <i class=\"icofont-minus-circle icofont-1x\"></i>
                            MODIFIER UN CONTACT</h3>
                    </div>
                {% else %}
                    <div class=\"modal-header text-white bg-pri p-l-20\">
                        <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                            <i class=\"icofont-plus-circle icofont-1x\"></i>
                            AJOUTER UN CONTACT</h3>
                    </div>
                {% endif %}
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">

                        {{ form_start(formContact, {'attr': {'id': 'addContactForm'}}) }}
                        {{ form_row(formContact._token) }}
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">CONTACT<span
                                            class=\"col-red\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {% if editCont %}
                                            {{ form_widget(formContact.contact,{'attr':{'class':'form-control  text-danger'}}) }}
                                        {% else %}
                                            {{ form_widget(formContact.contact,{'attr':{'class':'form-control '}}) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">FONCTION</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {% if editCont %}
                                            {{ form_widget(formContact.fonction,{'attr':{'class':'form-control  text-danger'}}) }}
                                        {% else %}
                                            {{ form_widget(formContact.fonction,{'attr':{'class':'form-control '}}) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">E-MAIL</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {% if editCont %}
                                            {{ form_widget(formContact.mail,{'attr':{'class':'form-control text-danger'}}) }}
                                        {% else %}
                                            {{ form_widget(formContact.mail,{'attr':{'class':'form-control '}}) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">TÉLÉPHONE MOBILE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {% if editCont %}
                                            {{ form_widget(formContact.phone,{'attr':{'class':'form-control  text-danger'}}) }}
                                        {% else %}
                                            {{ form_widget(formContact.phone,{'attr':{'class':'form-control'}}) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">TÉLÉPHONE BUREAU</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {% if editCont %}
                                            {{ form_widget(formContact.bureau,{'attr':{'class':'form-control text-danger'}}) }}
                                        {% else %}
                                            {{ form_widget(formContact.bureau,{'attr':{'class':'form-control'}}) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            {% if editCont %}
                                <input type=\"text\" class=\"hide\" id=\"idcontact\" value=\"{{ contact.id }}\">
                                <input type=\"submit\" id=\"updateContact\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect text-white bg-green\">
                                <div id=\"closeContact\" class=\"btn btn-link waves-effect bg-pink\">
                                    <a href=\"{{ path('chantiers') }}\" class=\"text-white\"
                                       style=\"text-decoration: none !important;\">ANNULER</a>
                                </div>
                            {% else %}
                                <input type=\"submit\" id=\"addContact\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-blue\">
                                <div type=\"button\" id=\"closeContact\"
                                     class=\"btn btn-link waves-effect text-white bg-pink\"
                                     data-dismiss=\"modal\">
                                    FERMER
                                </div>
                            {% endif %}
                            <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadContact\">

                        </div>
                        {{ form_end(formContact) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"mdModalPlanning\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                {% if editPlanning %}
                    <div class=\"modal-header text-white bg-green p-l-20\">
                        <h3 class=\"modal-title\" id=\"defaultModalLabel\">MODIFIER UN PLANNING</h3>
                    </div>
                {% else %}
                    <div class=\"modal-header text-white bg-pri p-l-20\">
                        <h3 class=\"modal-title\" id=\"defaultModalLabel\">CRÉER UN PLANNING</h3>
                    </div>
                {% endif %}
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        {{ form_start(formPlan, {'attr': {'id':'addPlanningForm'}}) }}
                        {{ form_row(formPlan._token) }}
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-4\">
                                <label class=\"form-label col-blue bolo\">ORDRE D'EXÉCUTION<span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        {% if editPlanning %}
                                            {{ form_widget(formPlan.rang,{'attr':{'class':'form-control col-pink'}}) }}
                                        {% else %}
                                            {{ form_widget(formPlan.rang,{'attr':{'class':'form-control'}}) }}
                                        {% endif %}
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
                                        {% if editPlanning %}
                                            {{ form_widget(formPlan.planning,{'attr':{'class':'form-control col-pink'}}) }}
                                        {% else %}
                                            {{ form_widget(formPlan.planning,{'attr':{'class':'form-control'}}) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            {% if editPlanning %}
                                <input type=\"submit\" id=\"updatePlanning\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect text-white bg-green\">
                                <a href=\"{{ path('gestion',{'id':chantier.id}) }}\" id=\"closePlanning\"
                                   class=\"btn btn-link waves-effect text-white bg-pink\">
                                    ANNULER
                                </a>
                            {% else %}
                                <input type=\"submit\" id=\"addPlanning\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-pri\">
                                <div type=\"button\" id=\"closePlanning\"
                                     class=\"btn btn-link waves-effect text-white bg-pink\" data-dismiss=\"modal\">
                                    FERMER
                                </div>
                            {% endif %}
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
                {% if editSection %}
                    <div class=\"modal-header text-white bg-green p-l-20\">
                        <h3 class=\"modal-title\" id=\"defaultModalLabel\">MODIFIER UNE ZONE</h3>
                    </div>
                {% else %}
                    <div class=\"modal-header text-white bg-pri p-l-20\">
                        <h3 class=\"modal-title\" id=\"defaultModalLabel\">AJOUTER UNE ZONE</h3>
                    </div>
                {% endif %}
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
                                        {{ form_widget(formSection.planning,{'attr':{'class':'form-control '}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label col-blue bolo\">ZONE<span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        <input type=\"text\" name=\"libelle\"  value=\"{{ section.libelle }}\" class=\"form-control\">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label col-blue bolo\">RANG<span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formSection.rang,{'attr':{'class':'form-control '}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"text-center\">
                            {% if editSection %}
                                <input type=\"submit\" id=\"updaSection\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect text-white bg-green\">
                                <a href=\"{{ path('gestion',{'id':chantier.id}) }}\" id=\"closeSection\"
                                   class=\"btn btn-link waves-effect text-white bg-pink\">
                                    ANNULER
                                </a>
                            {% else %}
                                <input type=\"submit\" id=\"addSection\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-pri\">
                                <div type=\"button\" id=\"closeSection\"
                                     class=\"btn btn-link waves-effect text-white bg-pink\" data-dismiss=\"modal\">
                                    FERMER
                                </div>
                            {% endif %}
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
                {% if editTache %}
                    <div class=\"modal-header text-white bg-green p-l-20\">
                        <h3 class=\"modal-title\" id=\"defaultModalLabel\">MODIFIER UNE TACHE</h3>
                    </div>
                {% else %}
                    <div class=\"modal-header text-white bg-pri p-l-20\">
                        <h3 class=\"modal-title\" id=\"defaultModalLabel\">CRÉER UNE TACHE</h3>
                    </div>
                {% endif %}
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        {{ form_start(formTache, {'attr': {'id':'addTacheForm'}}) }}
                        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addTacheToken') }}\"/>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label col-blue bolo\">ÉTAT
                                    <span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        {% if editTache %}
                                            {{ form_widget(formTache.etat,{'attr':{'class':'form-control col-pink'}}) }}
                                        {% else %}
                                            {{ form_widget(formTache.etat,{'attr':{'class':'form-control'}}) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label col-blue bolo\">ORDRE
                                    <span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        {% if editTache %}
                                            {{ form_widget(formTache.ordre,{'attr':{'class':'form-control col-pink'}}) }}
                                        {% else %}
                                            {{ form_widget(formTache.ordre,{'attr':{'class':'form-control'}}) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label col-blue bolo\">SECTION
                                    <span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formTache.section,{'attr':{'class':'form-control'}}) }}
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
                                        {% if editTache %}
                                            {{ form_widget(formTache.libelle,{'required':'required','id':'libelle','attr':{'class':'form-control col-pink'}}) }}
                                        {% else %}
                                            {{ form_widget(formTache.libelle,{'required':'required','id':'libelle','attr':{'class':'form-control'}}) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                {% if editTache %}
                                <label class=\"form-label col-blue bolo\">DATE DE DÉBUT<span
                                            class=\"col-red\">*</span></label>
                                <div class=\"input-group date\" id=\"id_0\">
                                    <input type=\"text\" placeholder=\"{{ tache.debut|date('d/m/Y H:i') }}\" value=\"{{ tache.debut|date('d/m/Y H:i') }}\" id=\"ddebut\" name=\"ddebut\"
                                           style=\"border-bottom: 1px solid #000\" class=\"form-control toc\" required/>
                                    <div class=\"input-group-addon input-group-append\">
                                        <div class=\"input-group-text\">
                                            <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>
                                        </div>
                                    </div>
                                </div>
                                {% else %}
                                    <label class=\"form-label col-blue bolo\">DATE DE DÉBUT<span
                                                class=\"col-red\">*</span></label>
                                    <div class=\"input-group date\" id=\"id_0\">
                                        <input type=\"text\" placeholder=\"Date...\" id=\"ddebut\" name=\"ddebut\"
                                               style=\"border-bottom: 1px solid #000\" class=\"form-control toc\" required/>
                                        <div class=\"input-group-addon input-group-append\">
                                            <div class=\"input-group-text\">
                                                <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>
                                            </div>
                                        </div>
                                    </div>
                                {% endif %}
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label col-blue bolo\">DATE DE FIN<span
                                            class=\"col-red\">*</span></label>
                                <div class=\"input-group date\" id=\"id_1\">
                                    <input type=\"text\" placeholder=\"{{ tache.fin|date('d/m/Y H:i') }}\" value=\"{{ tache.fin|date('d/m/Y H:i') }}\" id=\"dfin\" name=\"dfin\"
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
                                <label class=\"form-label col-blue bolo\">EXÉCUTÉ PAR UNE PERSONNE<br>
                                <span style=\"font-size:12px;\" class=\"col-pink\">(Veuillez sélectionner la même personne pour supprimer.)</span></label>
                                <div class=\"form-group m-t--5\">
                                    <select class=\"js-example-basic-multiple\" name=\"personnel[]\" multiple=\"multiple\"
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
                                <label class=\"form-label col-blue bolo\">EXÉCUTÉ PAR UNE ÉQUIPE</label>
                                <div class=\"form-group m-t--5\">
                                    <select class=\"js-example-basic-multiple\" name=\"personnel[]\" multiple=\"multiple\"
                                            style=\"width: 100%\">
                                        {% for personnel in personnels %}
                                            <option value=\"{{ personnel.id }}\">{{ personnel.noms|upper }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class=\"text-center m-t-40\">
                            {% if editTache %}
                                <input type=\"submit\" id=\"updateTache\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect text-white bg-green\">
                                <a href=\"{{ path('gestion',{'id':chantier.id}) }}\" id=\"closeTache\"
                                   class=\"btn btn-link waves-effect text-white bg-pink\">
                                    ANNULER
                                </a>
                            {% else %}
                                <input type=\"submit\" id=\"addTache\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-pri\">
                                <div type=\"button\" id=\"closeTache\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                     data-dismiss=\"modal\">
                                    FERMER
                                </div>
                            {% endif %}
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
    <div class=\"modal fade right\" id=\"modalEquipe\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header text-white bg-green p-l-20\">
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">AJOUTER UNE ÉQUIPE</h3>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        <form id=\"addTeamForm\">
                            <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addTeamToken') }}\"/>
                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label col-blue bolo\">NOM DE L'ÉQUIPE</label>
                                    <div class=\"form-group m-t--5\">
                                        <div class=\"form-line\">
                                            {% if editTeam %}
                                                <input type=\"text\" name=\"equipe\" class=\"form-control col-pink\"
                                                       value=\"{{ equipe.designation }}\">
                                            {% else %}
                                                <input type=\"text\" name=\"equipe\" class=\"form-control\">
                                            {% endif %}

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label col-blue bolo\">SUPERVISEUR</label>
                                    <div class=\"form-group m-t--5\">

                                        <select class=\"form-control {% if editTeam %}col-pink{% endif %}\"
                                                name=\"superviseur\" style=\"width: 100%\">
                                            {% for personnel in personnels %}
                                                {% if equipe is not null %}
                                                    {% if equipe.superviseur.id == personnel.id %}
                                                        <option value=\"{{ personnel.id }}\"
                                                                selected>{{ personnel.noms|upper }}</option>
                                                    {% endif %}
                                                {% endif %}
                                                <option value=\"{{ personnel.id }}\">{{ personnel.noms|upper }}</option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label col-blue bolo\">CHEF D'ÉQUIPE</label>
                                    <div class=\"form-group m-t--5\">
                                        <select class=\"form-control {% if editTeam %}col-pink{% endif %}\" name=\"chef\"
                                                style=\"width: 100%\">
                                            {% for personnel in personnels %}
                                                {% if equipe is not null %}
                                                    {% if equipe.chef.id == personnel.id %}
                                                        <option value=\"{{ personnel.id }}\"
                                                                selected>{{ personnel.noms|upper }}</option>
                                                    {% endif %}
                                                {% endif %}
                                                <option value=\"{{ personnel.id }}\">{{ personnel.noms|upper }}</option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label col-blue bolo\">MEMBRES</label>
                                    <div class=\"form-group m-t--5\">
                                        <select class=\"form-control {% if editTeam %}col-pink{% endif %}\" name=\"chef\"
                                                style=\"width: 100%\">
                                            {% for personnel in personnels %}
                                                {% if equipe is not null %}
                                                    {% if equipe.chef.id == personnel.id %}
                                                        <option value=\"{{ personnel.id }}\"
                                                                selected>{{ personnel.noms|upper }}</option>
                                                    {% endif %}
                                                {% endif %}
                                                <option value=\"{{ personnel.id }}\">{{ personnel.noms|upper }}</option>
                                            {% endfor %}
                                        </select>

                                        <select class=\"js-example-basic-multiple{% if editTeam %}col-pink{% endif %}\"
                                                name=\"membres[]\" multiple=\"multiple\"
                                                style=\"width: 100%\">
                                            {% for personnel in personnels %}
                                                {% if equipe is not null %}
                                                    {% for perso in equipe.personnels %}
                                                        {% if perso.id == personnel.id %}
                                                            <option value=\"{{ personnel.id }}\"
                                                                    selected>{{ personnel.noms|upper }}</option>
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endif %}
                                                <option value=\"{{ personnel.id }}\">{{ personnel.noms|upper }}</option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label col-blue bolo\">TACHES</label>
                                    <div class=\"form-group m-t--5\">
                                        <select class=\"js-example-basic-multiple\" name=\"taches[]\" multiple=\"multiple\"
                                                style=\"width: 100%\">
                                            {% for tache in taches %}
                                                <option value=\"{{ tache.id }}\">{{ tache.libelle|capitalize|raw }}</option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class=\"text-center m-t-40\">
                                {% if editTache %}
                                    <input type=\"submit\" id=\"updateTeam\" value=\"MODIFIER\"
                                           class=\"btn btn-link waves-effect text-white bg-green\">
                                    <a href=\"{{ path('gestion',{'id':chantier.id}) }}\" id=\"closeTeam\"
                                       class=\"btn btn-link waves-effect text-white bg-pink\">
                                        ANNULER
                                    </a>
                                {% else %}
                                    <input type=\"submit\" id=\"addTeam\" value=\"ENREGISTRER\"
                                           class=\"btn btn-link waves-effect text-white bg-pri\">
                                    <div type=\"button\" id=\"closeTeam\"
                                         class=\"btn btn-link waves-effect text-white bg-pink\"
                                         data-dismiss=\"modal\">
                                        FERMER
                                    </div>
                                {% endif %}
                                <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                     class=\"align-justify\" id=\"loadTeam\">
                            </div>
                            <br><br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"mdModalDocument\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header text-white bg-green p-l-20\">
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">AJOUTER UN DOCUMENT</h3>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        {{ form_start(formUpload, {'enctype':'multipart/form-data','attr': {'id': 'addFileForm'}}) }}
                        {{ form_row(formUpload._token) }}
                        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addFile') }}\"/>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">Importer des fichiers</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        {{ form_widget(formUpload.nomfichier,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"addFile\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-pri\">
                            <div type=\"button\" id=\"closeFile\"
                                 class=\"btn btn-link waves-effect text-white bg-pink\" data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadFile\">
                        </div>
                        {{ form_end(formUpload) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"mdModalPrevision\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-blue text-white\">
                    <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">CRÉER UNE PRÉVISION</h4>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        {{ form_start(formPrevision, {'attr': {'id': 'addPrevisionForm'}}) }}
                        {{ form_row(formPrevision._token) }}
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formPrevision.reference,{'id':'editor5','attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">APPLIQUR LA TVA?</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formPrevision.ptva,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">TVA(%)</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formPrevision.tva,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DATE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formPrevision.date,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"addPrevision\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-blue\">
                            <div type=\"button\" id=\"closePrevision\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadPrevision\">
                        </div>
                        <br><br><br>
                        {{ form_end(formPrevision) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalDevis\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-blue text-white\">
                    <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">CRÉER UN DEVIS</h4>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        {{ form_start(formDevis, {'attr': {'id': 'addDevisForm'}}) }}
                        {{ form_row(formDevis._token) }}
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DEVISE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formDevis.monnaie,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">TVA(%)</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formDevis.tva,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">VALIDITÉ DU DEVIS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formDevis.validit,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE OU OBJET</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formDevis.devreference,{'id': 'editor','attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">CODE ARTICLE?</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formDevis.aaref,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DATE<span
                                            class=\"col-red\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formDevis.date,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">APPLIQUER LA TVA?</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formDevis.ptva,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">AVEC BASE TVA?</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formDevis.abasetva,{'attr':{'class':'form-control'}}) }}
                                        <label class=\"form-label\"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">AVEC REMISE?</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formDevis.aarem,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">AVEC COLONNE ZONE?</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formDevis.zone,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">MODÈLE DE DEVIS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formDevis.modele,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">MODÈLE DE RÉSULTAT</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formDevis.model,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">INFORMATIONS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formDevis.conditions,{'required':'','id': 'editor2','attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"addDevis\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-blue\">
                            <div type=\"button\" id=\"closeDevis\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"{{ asset('img/loading.gif') }}\" style=\"width:50px; display:none;\"
                                 class=\"align-justify\" id=\"loadDevis\">
                        </div>
                        <br><br><br>
                        {{ form_end(formDevis) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class=\"content\" style=\"margin-top: 80px !important;\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row clearfix m-t-20 p-b-5\">
                    <div class=\"pageage\">
                        <h3 class=\"font-bold col-pink text-center\">{{ chantier.nomchantier }}</h3>
                        <h3 class=\"font-bold col-pink text-center m-t--10\">
                            <a href=\"{{ path('client',{'id':client.getId()} ) }}\">{{ client.nomclient|upper }}</a>
                        </h3><BR>
                        <div class=\"col-xs-12 col-sm-6 text-center\">
                            <div class=\"card\">
                                <div class=\"body\">
                                    <h4 class=\"font-bold col-blue-grey m-t--10\">DESCRIPTION:<br><span
                                                class=\"col-black h5\">{{ chantier.description|striptags|raw }}<br></span>
                                    </h4><br>
                                    <h4 class=\"font-bold col-blue-grey m-t--10\">DÉBUT / FIN:<br>
                                        <span class=\"col-blue  bolo700 h5\">{{ chantier.ddebut|date('d.m.Y') }}

\t\t\t\t\t\t\t\t{{ chantier.dfin|date('d.m.Y') }}</span>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xs-12 col-sm-6 text-center\">
                            <div class=\"card\">
                                <div class=\"body\">
                                    <h4 class=\"font-bold col-blue-grey\">SUPERVISEURS <br>
                                        {% for superviseur in chantier.superviseurs %}
                                            <span class=\"col-blue m-l-10\"># {{ superviseur.noms }}</span><br>
                                        {% endfor %}
                                    </h4>
                                    <h4 class=\"font-bold col-blue-grey\">PROGRESSION DU CHANTIER:<br>
                                        {% set count = 0 %}
                                        {% set progres = 0 %}
                                        {% for planning in chantier.plannings %}
                                            {% set count = count + 1 %}
                                            {% set progres = progres + planning.progression %}
                                        {% endfor %}
                                        <span class=\"col-pink m-l-10\">{% if count > 0 %}{{ (progres/count)|number_format(0, ',', ' ') }}%{% else %}0%{% endif %}</span><br>
                                    </h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class=\"btn-group btn-group-sm\" role=\"group\" aria-label=\"Small button group\">
                    {% if planning.id is null %}
                        <button type=\"button\" data-toggle=\"modal\" data-target=\"#mdModalPlanning\"
                                class=\"btn bg-purple text-white\" style=\"border:1px solid #dddfeb\">+ PLANNING
                        </button>
                    {% else %}
                        <button type=\"button\" data-toggle=\"modal\" data-target=\"#mdModalPlanning\"
                                class=\"btn bg-green text-white\" style=\"border:1px solid #dddfeb\">- PLANNING
                        </button>
                    {% endif %}
                    {% if editSection %}
                        <button type=\"button\" data-toggle=\"modal\" data-target=\"#mdModalSection\"
                                class=\"btn bg-green text-white\" style=\"border:1px solid #dddfeb\">- SECTION
                        </button>
                    {% else %}
                        <button type=\"button\" data-toggle=\"modal\" data-target=\"#mdModalSection\"
                                class=\"btn bg-blue text-white\" style=\"border:1px solid #dddfeb\">+ SECTION
                        </button>
                    {% endif %}
                    {% if editTache %}
                        <button type=\"button\" data-toggle=\"modal\" data-target=\"#mdModalTache\"
                                class=\"btn bg-green text-white\" style=\"border:1px solid #dddfeb\">- TACHE
                        </button>

                    {% else %}
                        <button type=\"button\" data-toggle=\"modal\" data-target=\"#mdModalTache\"
                                class=\"btn bg-blue-grey text-white\" style=\"border:1px solid #dddfeb\">+ TACHE
                        </button>
                    {% endif %}
                    {% if editTeam %}
                        <button type=\"button\" data-toggle=\"modal\" data-target=\"#modalEquipe\"
                                class=\"btn bg-green text-white\" style=\"border:1px solid #dddfeb\">+ ÉQUIPE
                        </button>
                    {% else %}
                        <button type=\"button\" data-toggle=\"modal\" data-target=\"#modalEquipe\"
                                class=\"btn bg-deep-orange text-white\" style=\"border:1px solid #dddfeb\">+ ÉQUIPE
                        </button>

                    {% endif %}
                </div>

                <div class=\"row clearfix m-t--10 p-b-5\">
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">&nbsp;
                        <div class=\"panel-group\" id=\"accordion_2\" role=\"tablist\" aria-multiselectable=\"true\">
                            <div class=\"panel panel-pri\">
                                <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingPla\">
                                    <h5 class=\"panel-title \">

                                        <a class=\"collapsed text-white\" role=\"button\" data-toggle=\"collapse\"
                                           data-parent=\"#accordion_2\"
                                           href=\"#collapsePla\" aria-expanded=\"false\" aria-controls=\"collapsePla\"
                                           style=\"font-size: 14px!important; font-weight: 500\">
                                            PLANNING</a>
                                    </h5>
                                </div>
                                <div id=\"collapsePla\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                     aria-labelledby=\"headingPla\">
                                    <div class=\"panel-body\" style=\"overflow: scroll\">
                                        <div class=\"body\">
                                            <div class=\"table-responsive\">
                                                <button class=\"btn btn-success float-right\" id=\"tablee\">Exporter en
                                                    EXCEL
                                                </button>
                                                <table class=\"table table-striped dashboard-task-infos\" id=\"table2excel\"
                                                       style=\"width: 100%;\">
                                                    <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th class=\"mw250\">PLANNING | SECTION | TACHES</th>
                                                        <th class=\"text-center mw80\">DÉBUT</th>
                                                        <th class=\"text-center mw80\">FIN</th>
                                                        <th class=\"text-center\">STATUS</th>
                                                        <th>SUPERVISEURS</th>
                                                        <th>ÉQUIPES</th>
                                                        <th>PROGRESSION</th>
                                                        <th class=\"mw60\"></th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    {% for plann in allplanning %}
                                                        {% if plann.corbeille is null %}
                                                            <tr style=\"background-color: #dbdfef\">
                                                                <td class=\"text-center\">{{ plann.rang }}</td>
                                                                <td class=\"text-center\"></td>
                                                                <td class=\"text-center\"></td>
                                                                <td class=\"bolo600 col-blue\" colspan=\"6\">{{ plann.planning|striptags|raw }}</td>
                                                                <td>
                                                                    <div class=\"progress\">
                                                                        <div class=\"progress-bar bg-green\"
                                                                             role=\"progressbar\"
                                                                             aria-valuenow=\"{{ plann.progression }}\"
                                                                             aria-valuemin=\"0\"
                                                                             aria-valuemax=\"100\"
                                                                             style=\"width: {{ plann.progression }}%\"></div>
                                                                    </div>
                                                                </td>
                                                                <td class=\"bolo600 text-center\">{{ plann.progression|number_format(0, ',', ' ') }}%</td>
                                                                <td>
                                                                    <a href=\"{{ path('editPlanning', {'id': chantier.id, 'idplanning': plann.id}) }}\">
                                                                        <i class=\"fa fa-edit col-green\"></i>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a href=\"{{ path('delePlanning', {'id': plann.id}) }}\"
                                                                       class=\"sholigne\">
                                                                        <i class=\"fa fa-trash col-pink\"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>

                                                            {% for sec in plann.section %}
                                                                {% if sec.corbeille is null %}
                                                                    <tr>
                                                                        <td></td>
                                                                        <td class=\"text-center bg-blue-grey\">{{ sec.rang }}</td>
                                                                        <td></td>
                                                                        <td colspan=\"6\" title=\"{{ sec.libelle|striptags|raw }}\" class=\"col-pink\"><i class=\"fa fa-folder-open\"></i>&nbsp;{{ sec.libelle|striptags|raw }}</td>
                                                                        <td>
                                                                            <div class=\"progress\">
                                                                                <div class=\"progress-bar bg-green\"
                                                                                     role=\"progressbar\"
                                                                                     aria-valuenow=\"{{ sec.etat|number_format(0, ',', ' ') }}\"
                                                                                     aria-valuemin=\"0\"
                                                                                     aria-valuemax=\"100\"
                                                                                     style=\"width: {{ sec.etat|number_format(0, ',', ' ') }}%\"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class=\"bolo600 text-center\">{{ sec.etat|number_format(0, ',', ' ') }}
                                                                            %
                                                                        </td>
                                                                        <td>
                                                                            <a href=\"{{ path('editSection', {'id': chantier.id, 'idsection': sec.id}) }}\">
                                                                                <i class=\"fa fa-edit col-green\"></i>
                                                                            </a>
                                                                        </td>
                                                                        <td>
                                                                            <a href=\"{{ path('delSection', {'id': sec.id}) }}\"
                                                                               class=\"sholigne\">
                                                                                <i class=\"fa fa-trash col-pink\"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    {% for tache in taches %}
                                                                        {% if tache.section == sec and tache.corbeille is null %}
                                                                            <tr>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td class=\"text-center bg-blue\">{{ tache.ordre }}</td>
                                                                                <td>{{ tache.libelle|striptags|raw }}</td>
                                                                                <td class=\"text-center\">{{ tache.debut|date('d/m/Y H.i') }}</td>
                                                                                <td class=\"text-center\">{{ tache.fin|date('d/m/Y H.i') }}</td>
                                                                                <td style=\"vertical-align: middle\" class=\"text-center\">
                                                                                    {% if tache.etat == \"À faire\" %}
                                                                                        <span class=\"label bg-green font-12\">{{ tache.etat }}</span>
                                                                                    {% endif %}
                                                                                    {% if tache.etat == \"Achevée\" %}
                                                                                        <span class=\"label bg-pink font-12\">Achevé</span>
                                                                                    {% endif %}
                                                                                    {% if tache.etat == \"En cours\" %}
                                                                                        <span class=\"label bg-blue font-12\">{{ tache.etat }}</span>
                                                                                    {% endif %}
                                                                                    {% if tache.etat == \"En attente\" %}
                                                                                        <span class=\"label bg-orange font-12\">{{ tache.etat }}</span>
                                                                                    {% endif %}
                                                                                </td>
                                                                                <td>
                                                                                    {% for pers in tache.personnel %}
                                                                                        <span class=\"col-black bolo6\">&raquo; {{ pers.noms }}</span>
                                                                                        <br>
                                                                                    {% endfor %}
                                                                                </td>
                                                                                <td>
                                                                                    {% for team in tache.equipes %}
                                                                                        <span class=\"col-black bolo6\">&raquo; {{ team.designation|upper }}</span>
                                                                                        <br>
                                                                                    {% endfor %}
                                                                                </td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td>
                                                                                    <a href=\"{{ path('gesteditTache', {'id': chantier.id, 'idtache': tache.id}) }}\">
                                                                                        <i class=\"fa fa-edit col-green font-12\"></i>
                                                                                    </a>
                                                                                </td>
                                                                                <td>
                                                                                    <a href=\"{{ path('delta', {'id': tache.id}) }}\"
                                                                                       class=\"sholigne\"><i
                                                                                                class=\"fa fa-trash col-pink font-12\"></i>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% endif %}

                                                            {% endfor %}
                                                        {% endif %}
                                                    {% endfor %}
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"panel panel-pri\">
                                <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingEqui\">
                                    <h5 class=\"panel-title \">
                                        <a class=\"collapsed text-white\" role=\"button\" data-toggle=\"collapse\"
                                           data-parent=\"#accordion_2\"
                                           href=\"#collapseEqui\" aria-expanded=\"false\" aria-controls=\"collapseEqui\"
                                           style=\"font-size: 14px!important; font-weight: 500\">
                                            GESTION DES ÉQUIPES</a>
                                    </h5>
                                </div>
                                <div id=\"collapseEqui\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                     aria-labelledby=\"headingEqui\">
                                    <div class=\"panel-body\" style=\"overflow: scroll\">
                                        <div class=\"body\">
                                            <div class=\"table-responsive\">
                                                <button class=\"btn btn-success float-right\" id=\"tablez\">Exporter en
                                                    EXCEL
                                                </button>
                                                <table class=\"table table-striped dashboard-task-infos\" id=\"table3excel\"
                                                       style=\"width: 100%;\">
                                                    <thead>
                                                    <tr>
                                                        <th>ÉQUIPES</th>
                                                        <th>CHEF D'ÉQUIPE</th>
                                                        <th>MEMBRES</th>
                                                        <th class=\"mw300\">TACHES</th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    {% for team in equipes %}
                                                        <tr>
                                                            <td class=\"text-left col-blue bolo600\">{{ team.designation }}</td>
                                                            <td class=\"text-left col-deep-purple bolo700\">
                                                                {% if team.chef is not null %}
                                                                    {{ team.chef.noms|upper }}
                                                                {% endif %}
                                                            </td>
                                                            <td class=\"text-left bolo600\">
                                                                {% for pers in team.personnels %}
                                                                    &raquo; {{ pers.noms|upper }} | {{ pers.fonction|upper }}
                                                                    <br>
                                                                {% endfor %}
                                                            </td>
                                                            <td class=\"text-left bolo600\">
                                                                {% for tache in team.taches %}
                                                                    {% if tache.etat == \"À faire\" %}
                                                                        <span class=\"label bg-green font-12\">{{ tache.etat }}</span>
                                                                    {% endif %}
                                                                    {% if tache.etat == \"Achevée\" %}
                                                                        <span class=\"label bg-pink font-12\">Achevé</span>
                                                                    {% endif %}
                                                                    {% if tache.etat == \"En cours\" %}
                                                                        <span class=\"label bg-blue font-12\">{{ tache.etat }}</span>
                                                                    {% endif %}
                                                                    {% if tache.etat == \"En attente\" %}
                                                                        <span class=\"label bg-orange font-12\">{{ tache.etat }}</span>
                                                                    {% endif %}
                                                                    &raquo; {{ tache.libelle|striptags|raw }}
                                                                    <hr style=\"margin: 0 -15px 0 -15px \">
                                                                {% endfor %}
                                                            </td>
                                                            <td>
                                                                <a href=\"{{ path('gesteam', {'id': chantier.id, 'idteam': team.id}) }}\">
                                                                    <i class=\"fa fa-edit col-green\"></i>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <a href=\"\"
                                                                   class=\"sholigne\">
                                                                    <i class=\"fa fa-trash col-pink\"></i>
                                                                </a>
                                                            </td>
                                                        </tr>

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
                <div class=\"button-demo\">
                    {% if editCont %}
                        <button type=\"button\" data-color=\"blue\" class=\"btn bg-green text-center waves-effect\"
                                data-toggle=\"modal\" data-target=\"#modalContact\">MODIFIER UN DEVIS
                        </button>
                    {% else %}
                        <button type=\"button\" data-color=\"blue\" class=\"btn bg-indigo text-white waves-effect\"
                                data-toggle=\"modal\" data-target=\"#modalDevis\">AJOUTER UN DEVIS
                        </button>
                    {% endif %}
                    {% if editCont %}
                        <button type=\"button\" data-color=\"blue\" class=\"btn bg-green text-center waves-effect\"
                                data-toggle=\"modal\" data-target=\"#modalContact\">MODIFIER UN CONTACT
                        </button>
                    {% else %}
                        <button type=\"button\" data-color=\"blue\" class=\"btn bg-indigo text-white waves-effect\"
                                data-toggle=\"modal\" data-target=\"#modalContact\">AJOUTER UN CONTACT
                        </button>
                    {% endif %}


                    {% if editTache %}
                        <button type=\"button\" class=\"btn bg-indigo text-white waves-effect\" data-toggle=\"modal\"
                                data-target=\"#mdModalPrevision\">MODIFIER UNE PRÉVISION
                        </button>
                    {% else %}
                        <button type=\"button\" class=\"btn bg-indigo text-white waves-effect\" data-toggle=\"modal\"
                                data-target=\"#mdModalPrevision\">CRÉER UNE PRÉVISION
                        </button>
                    {% endif %}
                    <button type=\"button\" data-color=\"blue\" class=\"btn bg-indigo text-white waves-effect\"
                            data-toggle=\"modal\" data-target=\"#mdModalDocument\">JOINDRE
                        DES DOCUMENTS
                    </button>
                </div>
                <div class=\"row clearfix\">
                    <div class=\"col-xs-12 col-sm-12\">
                        <div class=\"panel-group\" id=\"accordion_1\" role=\"tablist\" aria-multiselectable=\"true\">


                            {# CONTACTS #}
                            <div class=\"panel panel-primary\">
                                <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingDeu\">
                                    <h5 class=\"panel-title \">
                                        <a class=\"collapsed text-white\" role=\"button\" data-toggle=\"collapse\"
                                           data-parent=\"#accordion_1\"
                                           href=\"#collapseDeu\" aria-expanded=\"false\"
                                           aria-controls=\"collapseDeu\"
                                           style=\"font-size: 14px!important; font-weight: 500\">
                                            1- CONTACTS<span class=\"badge bg-pink\"
                                                             style=\"float: right !important;\">{{ client.contacts.count }}</span>
                                        </a>
                                    </h5>
                                </div>
                                <div id=\"collapseDeu\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                     aria-labelledby=\"headingDeu\">
                                    <div class=\"panel-body\" style=\"overflow: scroll\">
                                        <div class=\"table-responsive shadow\" style=\"padding: 10px\">
                                            <table class=\"table-striped table-bordered display nowrap\"
                                                   style=\"width: 100%\" id=\"dataContact\">
                                                <thead>
                                                <tr class=\"text-center\">
                                                    <th style=\"width: 10px !important;\"></th>
                                                    <th>CONTACT</th>
                                                    <th>FONCTION</th>
                                                    <th>EMAIL</th>
                                                    <th>TÉLÉPHONE</th>
                                                    <th>BUREAU</th>
                                                    <th>CREÉ PAR
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                {% for contact in contacts %}
                                                    {% if contact.corbeille is null %}
                                                        <tr class=\"text-center\">
                                                            <td class=\"text-center\">
                                                                <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                       class=\"CONTAK\"
                                                                       value=\"{{ contact.id }}\"></td>
                                                            <td class=\"col-blue text-left\">{{ contact.contact|upper }}</td>
                                                            <td class=\"text-left\">{{ contact.fonction }}</td>
                                                            <td class=\"text-left\">{{ contact.mail|capitalize }}</td>
                                                            <td>{{ contact.phone|capitalize }}</td>
                                                            <td>{{ contact.bureau|capitalize }}</td>
                                                            <td class=\"text-left col-blue\"><i
                                                                        class=\"fa fa-user col-blue\"></i>&nbsp;
                                                                {% if contact.dobyuser is not null %}
                                                                    {{ contact.dobyuser.nom|upper }}
                                                                    &nbsp;{{ contact.dobyuser.prenoms|upper }}
                                                                {% endif %}
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
                            {# FIN CONTACT #}

                            {# DEVIS #}
                            <div class=\"panel panel-primary\">
                                <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingCin\">
                                    <h5 class=\"panel-title\">
                                        <a class=\"collapsed outai text-white\" role=\"button\" data-toggle=\"collapse\"
                                           data-parent=\"#accordion_1\"
                                           href=\"#collapseCin\" aria-expanded=\"false\"
                                           aria-controls=\"collapseCin\">
                                            2- Devis
                                        </a>
                                    </h5>
                                </div>
                                <div id=\"collapseCin\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                     aria-labelledby=\"headingCin\">
                                    <div class=\"panel-body \" style=\"overflow: scroll; background-color: #dbdfef\">
                                        <div class=\"table-responsive shadow bg-white\"
                                             style=\"padding: 10px 10px 50px 10px;color:#555; overflow: scroll\">
                                            <table class=\"table-striped table-bordered display nowrape\"
                                                   style=\"width: 100%\"
                                                   id=\"dataDEVIS\">
                                                <thead>
                                                <tr class=\"text-center bolderr\">
                                                    <th class=\"mw30\"></th>
                                                    <th class=\"mw30\"></th>
                                                    <th class=\"mw30\"></th>
                                                    <th>DATE</th>
                                                    <th>N° DEVIS</th>
                                                    <th>TOTAL HT</th>
                                                    <th>TOTAL TTC</th>
                                                    <th>RÉGLÉ</th>
                                                    <th>SOLDE</th>
                                                    <th>RÉFÉRENCE</th>
                                                    <th>ETAT</th>
                                                    <th>CREÉ PAR</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                {% set vdth = 0 %}
                                                {% set vdttc = 0 %}
                                                {% set ndth = 0 %}
                                                {% set ndttc = 0 %}

                                                {% for devis in chantier.devis %}
                                                    {% if devis.type != \"esti\" %}
                                                        {% if devis.etat == 'valide' and devis.corbeille is null %}
                                                            {% set vdth = devis.totalht + vdth %}
                                                            {% set vdttc = devis.totalttc + vdttc %}
                                                        {% endif %}
                                                        {% if devis.etat == 'save' and devis.corbeille is null %}
                                                            {% set ndth = devis.totalht + ndth %}
                                                            {% set ndttc = devis.totalttc + ndttc %}
                                                        {% endif %}
                                                        {% if devis.etat == 'valide' %}
                                                            {% if devis.corbeille is null %}
                                                                {% set regler = 0 %}
                                                                {% for rele  in devis.relevers %}
                                                                    {% if rele.type == 3 %}
                                                                        {% set regler = regler + rele.montant %}
                                                                    {% endif %}
                                                                {% endfor %}
                                                                <tr>

                                                                    <td class=\"text-center\"><input type=\"checkbox\"
                                                                                                   data-toggle=\"toggle\"
                                                                                                   class=\"DEVYS\"
                                                                                                   value=\"{{ devis.id }}\">
                                                                    </td>
                                                                    <td class=\"text-center\">
                                                                        <a href=\"#\"
                                                                           onclick=\"shasha({{ devis.id }},'imprimdevis');\"><i
                                                                                    class=\"fa fa-eye col-green\"
                                                                                    aria-hidden=\"true\"></i></a></td>
                                                                    <td class=\"text-center\"><a href=\"#\"
                                                                                               onclick=\"shushu({{ devis.id }},'shushu');\"
                                                                                               title=\"Opérations liées\"><i
                                                                                    class=\"fa fa-plug col-pink bolo700\"
                                                                                    aria-hidden=\"true\"></i></a></td>
                                                                    <td>{{ devis.date|date('Y-m-d') }}</td>
                                                                    <td>
                                                                        <a href=\"{{ path('editdevis',{'id':devis.id ,'idchantier':devis.chantier.id}) }}\"
                                                                           style=\"color:dodgerblue\">
                                                                       <span class=\"badge badge-pill badge-primary\"
                                                                             title=\"Validé par {% if devis.vabyuser is not null %}{{ devis.vabyuser.prenoms|upper }}{% endif %}\">V</span>
                                                                            DEVIS N° {{ devis.iddevis }}</a>
                                                                    </td>


                                                                    <td class=\"text-right\">{{ devis.totalht|number_format(2,',',' ') }}</td>
                                                                    <td class=\"text-right\">{{ devis.totalttc|number_format(2,',',' ') }}</td>
                                                                    <td class=\"text-right\">{{ regler|number_format(2,',',' ') }}</td>
                                                                    <td class=\"text-right\">{{ (devis.totalttc - regler)|number_format(2,',',' ') }}</td>
                                                                    <td class=\"col-deep-orange\"
                                                                        title=\"{{ devis.devreference|striptags|raw }}\">
                                                                        {{ devis.devreference|striptags|raw }}
                                                                    </td>
                                                                    <td>DEVIS VALIDÉS</td>

                                                                    <td class=\"text-left col-blue bolo600\"><i
                                                                                class=\"fa fa-user col-blue bolo600\"></i>&nbsp;
                                                                        {% if devis.dobyuser is not null %}
                                                                            {{ devis.dobyuser.nom|upper }}
                                                                            &nbsp;{{ devis.dobyuser.prenoms|upper }}
                                                                        {% endif %}
                                                                    </td>
                                                                </tr>
                                                            {% endif %}
                                                        {% endif %}
                                                    {% endif %}
                                                {% endfor %}
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td class=\"text-right bg-blue bolo700 col-white\"></td>
                                                    <td class=\"text-right bg-blue bolo700 col-white\"></td>
                                                    <td class=\"text-right bg-blue bolo700 col-white\"></td>
                                                    <td class=\"text-right bg-blue bolo700 col-white\"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <div class=\"table-responsive shadow bg-white\"
                                             style=\"padding: 10px 10px 50px 10px; margin-top: 30px; color:#555; overflow: scroll\">
                                            <table class=\"table-striped table-bordered display nowrap\"
                                                   style=\"width: 100%\"
                                                   id=\"dataDEVIS2\">
                                                <thead>
                                                <tr class=\"text-center bolderr\">
                                                    <th class=\"mw30\"></th>
                                                    <th class=\"mw30\"></th>
                                                    <th>DATE</th>
                                                    <th>N° DEVIS</th>
                                                    <th>TOTAL HT</th>
                                                    <th>TOTAL TTC
                                                    </th>
                                                    <th>RÉFÉRENCE</th>
                                                    <th>ETAT</th>
                                                    <th>CREÉ PAR</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                {% for devis in chantier.devis %}
                                                    {% if devis.etat == 'save' %}
                                                        {% if devis.corbeille is null and devis.type != \"esti\" %}
                                                            <tr>
                                                                <td class=\"text-center\">
                                                                    <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                           class=\"DEVYS2\"
                                                                           value=\"{{ devis.id }}\"></td>
                                                                <td class=\"text-center\"><a href=\"#\"
                                                                                           onclick=\"shasha({{ devis.id }},'imprimdevis');\"><i
                                                                                class=\"fa fa-eye col-green\"
                                                                                aria-hidden=\"true\"></i></a></td>
                                                                <td>{{ devis.date|date('Y-m-d') }}</td>
                                                                <td>
                                                                    <a href=\"{{ path('editdevis',{'id':devis.id ,'idchantier':devis.chantier.id}) }}\"
                                                                       style=\"color:dodgerblue\">
                                                                        <span class=\"badge badge-pill badge-blue-grey\"
                                                                              title=\"Dévalidé par {% if devis.vabyuser is not null %}{{ devis.vabyuser.prenoms|upper }}{% endif %}\">V</span>
                                                                        DEVIS
                                                                        N° {{ devis.iddevis }}
                                                                    </a>
                                                                </td>
                                                                <td class=\"text-right\">{{ devis.totalht|number_format(2,',',' ') }}</td>
                                                                <td class=\"text-right\">{{ devis.totalttc|number_format(2,',',' ') }}</td>
                                                                <td class=\"col-deep-orange\"
                                                                    title=\"{{ devis.devreference|striptags|raw }}\">
                                                                    {{ devis.devreference|striptags|raw }}
                                                                </td>
                                                                <td>DEVIS NON VALIDÉS</td>
                                                                <td class=\"text-left col-blue bolo600\"><i
                                                                            class=\"fa fa-user col-blue bolo600\"></i>&nbsp;
                                                                    {% if devis.dobyuser is not null %}
                                                                        {{ devis.dobyuser.nom|upper }}
                                                                        &nbsp;{{ devis.dobyuser.prenoms|upper }}{% endif %}
                                                                </td>
                                                            </tr>
                                                        {% endif %}
                                                    {% endif %}
                                                {% endfor %}
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td class=\"text-right bg-blue bolo700 col-white\"></td>
                                                    <td class=\"text-right bg-blue bolo700 col-white\"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>

                                        <table class=\"table-bordered d reduire\" style=\"float: right; margin-top: 20px\">
                                            <tr style=\"background-color: slategrey; color: white\">
                                                <th class=\"text-center\"></th>
                                                <th class=\"text-center\">TOTAL HT</th>
                                                <th class=\"text-center\">TOTAL TTC</th>
                                            </tr>
                                            <tr style=\"background-color: slategrey; color: white\">
                                                <td class=\"text-right\">VALIDÉS</td>
                                                <td class=\"text-right\">{{ vdth|number_format(2, ',', ' ') }}</td>
                                                <td class=\"text-right\">{{ vdttc|number_format(2,',',' ') }}</td>
                                            </tr>
                                            <tr style=\"background-color: indianred; color: white\">
                                                <td class=\"text-right\">NON VALIDÉS</td>
                                                <td class=\"text-right\">{{ ndth|number_format(2,',', ' ') }}</td>
                                                <td class=\"text-right\">{{ ndttc|number_format(2,',',' ') }}</td>
                                            </tr>
                                            <tr class=\"bg-pri text-white\">
                                                <td class=\"text-right\">TOTAUX</td>
                                                <td class=\"text-right\">{{ (ndth+vdth)|number_format(2, ',', ' ') }}</td>
                                                <td class=\"text-right\">{{ (ndttc+vdttc)|number_format(2,',',' ') }}</td>
                                            </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                            {# FIN DEVIS #}

                            {# PREVISION #}
                            <div class=\"panel panel-primary\">
                                <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingCin\">
                                    <h5 class=\"panel-title \">
                                        <a class=\"collapsed text-white\" role=\"button\" data-toggle=\"collapse\"
                                           data-parent=\"#accordion_1\" href=\"#collapseCin\" aria-expanded=\"false\"
                                           aria-controls=\"collapseCin\"
                                           style=\"font-size: 14px!important; font-weight: 500\">
                                            3- PRÉVISION<span class=\"badge bg-pink\"
                                                              style=\"float: right !important;\">{{ chantier.livraisons.count }}</span>
                                        </a>
                                    </h5>
                                </div>
                                <div id=\"collapseCin\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                     aria-labelledby=\"headingCin\">
                                    <div class=\"panel-body\">
                                        <div class=\"table-responsive shadow\" style=\"padding: 10px\">
                                            <table class=\"table-striped table-bordered display nowrap\"
                                                   style=\"width: 100%\"
                                                   id=\"dataDEVIS\">
                                                <thead>
                                                <tr class=\"text-center bolderr\">
                                                    <th style=\"width: 10px !important;\"></th>
                                                    <th style=\"width: 80px !important;\">DATE</th>
                                                    <th>N° DE PRÉVISION</th>
                                                    <th>RÉFÉRENCE</th>
                                                    <th class=\"text-center\">TOTAL HT</th>
                                                    <th class=\"text-center\">TOTAL TTC</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                {% for pre in allprevision %}
                                                    <tr>
                                                        <td></td>
                                                        <td>{{ pre.date|date('Y.m.d H.i.s') }}</td>
                                                        <td>
                                                            <a href=\"{{ path('editprevision', {'id': pre.id, 'idchantier': chantier.id}) }}\">
                                                                {{ pre.numprevision }}</a></td>
                                                    </tr>
                                                {% endfor %}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {# FIN PREVISION #}


                            {# BONS DE LIVRAISON #}
                            <div class=\"panel panel-primary\">
                                <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingSep\">
                                    <h5 class=\"panel-title \">
                                        <a class=\"collapsed text-white\" role=\"button\" data-toggle=\"collapse\"
                                           data-parent=\"#accordion_1\" href=\"#collapseSep\" aria-expanded=\"false\"
                                           aria-controls=\"collapseSep\"
                                           style=\"font-size: 14px!important; font-weight: 500\">
                                            4- BONS DE LIVRAISON<span class=\"badge bg-pink\"
                                                                      style=\"float: right !important;\">{{ chantier.livraisons.count }}</span>
                                        </a>
                                    </h5>
                                </div>
                                <div id=\"collapseSep\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                     aria-labelledby=\"headingSep\">
                                    <div class=\"panel-body\">
                                        <div class=\"table-responsive shadow\" style=\"padding: 10px\">
                                            <table class=\"table-striped table-bordered display nowrap\"
                                                   style=\"width: 100%\"
                                                   id=\"dataLIVRAISON\">
                                                <thead>
                                                <tr class=\"text-center bg-light\">
                                                    <th style=\"width: 10px !important;\"></th>
                                                    <th style=\"width: 80px !important;\">DATE</th>
                                                    <th style=\"width: 150px\">N° BON DE LIVRAISON</th>
                                                    <th style=\"width: 160px\">LIVRÉ À L'INTERVENANT</th>
                                                    <th style=\"width: 300px\">RÉFÉRENCE</th>
                                                    <th style=\"width: 10px !important;\">ETAT</th>
                                                    <th style=\"background-color: #E8E8E8 !important;\">CREÉ PAR
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                {% for livre in chantier.livraisons %}
                                                    {% if livre.etat == \"valide\" %}
                                                        <tr>
                                                            <td class=\"text-center\">
                                                                <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                       class=\"LIVRES\"
                                                                       value=\"{{ livre.id }}\"></td>
                                                            <td>{{ livre.date|date('Y.m.d H.i.s') }}</td>
                                                            <td>
                                                                <a href=\"{{ path('editlivraison', {'id': livre.id, 'idchantier': chantier.id}) }}\">Livraison
                                                                    N°
                                                                    {{ livre.numlivre }}</a>
                                                            </td>
                                                            <td></td>
                                                            <td title=\"{{ livre.livrereference|striptags|raw }}\">{{ livre.livrereference|striptags|raw }}</td>
                                                            <td>BONS DE LIVRAISON VALIDÉS</td>
                                                            <td class=\"text-left text-pri bolderrer\"
                                                                style=\"background-color: #E8E8E8 !important;\">
                                                                <i class=\"fa fa-user text-pri\"></i>&nbsp;{{ livre.dobyuser.nom|upper }}
                                                                &nbsp;{{ livre.dobyuser.prenoms|upper }}</td>
                                                        </tr>
                                                    {% endif %}
                                                {% endfor %}
                                                </tbody>

                                            </table>
                                            <br>
                                            <hr style=\"width: 100%; height: 2px; background-color: darkgrey\">
                                            <br>
                                            <table class=\"table-striped table-bordered display nowrap\"
                                                   style=\"width: 100%\"
                                                   id=\"dataLIVRAISON2\">
                                                <thead>
                                                <tr class=\"text-center bg-light\">
                                                    <th style=\"width: 10px !important;\"></th>
                                                    <th style=\"width: 80px !important;\">DATE</th>
                                                    <th>N° BON DE LIVRAISON</th>
                                                    <th>INTERVENANT</th>
                                                    <th>RÉFÉRENCE</th>
                                                    <th>ETAT</th>
                                                    <th style=\"background-color: #E8E8E8 !important;\">CREÉ PAR
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                {% for livre in chantier.livraisons %}
                                                    {% if livre.etat == \"save\" %}
                                                        <tr>
                                                            <td class=\"text-center\">
                                                                <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                       class=\"LIVRES2\"
                                                                       value=\"{{ livre.id }}\"></td>
                                                            <td>{{ livre.date|date('Y.m.d H.i.s') }}</td>
                                                            <td>
                                                                <a href=\"{{ path('editlivraison', {'id': livre.id, 'idchantier': chantier.id}) }}\"
                                                                   style=\"color: #dc3545 !important;\">Livraison
                                                                    N°
                                                                    {{ livre.numlivre }}</a>
                                                            </td>
                                                            <td style=\"color: #dc3545 !important;\"></td>
                                                            <td title=\"{{ livre.livrereference|striptags|raw }}\">{{ livre.livrereference|striptags|raw }}</td>
                                                            <td>BONS DE LIVRAISON NON VALIDÉS</td>
                                                            <td class=\"text-left text-pri bolderrer\"
                                                                style=\"background-color: #E8E8E8 !important;\">
                                                                <i class=\"fa fa-user text-pri\"></i>&nbsp;{{ livre.dobyuser.nom|upper }}
                                                                &nbsp;{{ livre.dobyuser.prenoms|upper }}</td>
                                                        </tr>
                                                    {% endif %}
                                                {% endfor %}
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {# FIN BON DE LIVRAISON #}

                            {# STOCKS #}
                            <div class=\"panel panel-primary\">
                                <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingNine\">
                                    <h5 class=\"panel-title \">
                                        <a class=\"collapsed text-white\" role=\"button\" data-toggle=\"collapse\"
                                           data-parent=\"#accordion_1\" href=\"#collapseNine\" aria-expanded=\"false\"
                                           aria-controls=\"collapseNine\"
                                           style=\"font-size: 14px!important; font-weight: 500\">
                                            5- GESTION DE STOCK
                                        </a>
                                    </h5>
                                </div>
                                <div id=\"collapseNine\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                     aria-labelledby=\"headingNine\">
                                    <div class=\"panel-body\">
                                        <div class=\"table-responsive shadow\" style=\"padding: 10px\">
                                            <table class=\"table-striped table-bordered display nowrap\" width=\"100%\"
                                                   cellpadding=\"2\" id=\"dataRECAP\">
                                                <thead>
                                                <tr class=\"text-center bg-light\">
                                                    <th>ARTICLES</th>
                                                    <th>BONS DE COMMANDE VALIDÉS</th>
                                                    <th>QUANTITÉ</th>
                                                    <th>PU</th>
                                                    <th>MONTANT HT</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                {% for ligne in invente %}
                                                    {% for recap in chantier.recaps %}
                                                        {% if ligne.bon.etat == 'valide' and ligne.article == recap.article %}

                                                            <tr>
                                                                <td style=\"padding: 2px !important;\">{{ ligne.designation|upper|striptags|raw }}
                                                                    | (<span class=\"text-danger\">QUANTITÉ À UTILISER:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ recap.quantite }}</span>)
                                                                </td>
                                                                <td>
                                                                    <a href=\"{{ path('editbon', {'id': ligne.bon.id, 'idchantier': ligne.chantier.id}) }}\"
                                                                       style=\"color: #1b1b1b !important;\">&raquo;
                                                                        BON
                                                                        N°
                                                                        {{ ligne.bon.numbon }}</a>
                                                                </td>
                                                                <td style=\"padding: 2px !important; text-align: right\">{{ ligne.quantite }}</td>
                                                                <td style=\"padding: 2px !important; text-align: right\">{{ ligne.pu|number_format(2, ',', ' ') }}</td>
                                                                <td style=\"padding: 2px !important; text-align: right\">{{ (ligne.quantite * ligne.pu)|number_format(2, ',', ' ') }}</td>
                                                            </tr>
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endfor %}
                                                </tbody>
                                            </table>
                                            <table class=\"table-striped table-bordered display nowrap\" width=\"100%\"
                                                   cellpadding=\"2\" id=\"dataINVENTE\">
                                                <thead>
                                                <tr class=\"text-center bg-light\">
                                                    <th>ARTICLES</th>
                                                    <th>BONS DE COMMANDE VALIDÉS</th>
                                                    <th>QUANTITÉ</th>
                                                    <th>PU</th>
                                                    <th>MONTANT HT</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                {% for ligne in invente %}
                                                    {% if ligne.bon %}
                                                        {% if ligne.bon.etat == 'valide' %}
                                                            <tr>
                                                                <td style=\"padding: 2px !important;\">{{ ligne.designation|upper|striptags|raw }}</td>
                                                                <td>
                                                                    <a href=\"{{ path('editbon', {'id': ligne.bon.id, 'idchantier': ligne.chantier.id}) }}\"
                                                                       style=\"color: #1b1b1b !important;\">&raquo;
                                                                        BON
                                                                        N°
                                                                        {{ ligne.bon.numbon }}</a>
                                                                </td>
                                                                <td style=\"padding: 2px !important; text-align: right\">{{ ligne.quantite }}</td>
                                                                <td style=\"padding: 2px !important; text-align: right\">{{ ligne.pu|number_format(2, ',', ' ') }}</td>
                                                                <td style=\"padding: 2px !important; text-align: right\">{{ (ligne.quantite * ligne.pu)|number_format(2, ',', ' ') }}</td>
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
                            {# FIN STOCKS #}

                            {# DOCUMENTS #}
                            <div class=\"panel panel-primary\">
                                <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingTen\">
                                    <h5 class=\"panel-title \">
                                        <a class=\"collapsed text-white\" role=\"button\" data-toggle=\"collapse\"
                                           data-parent=\"#accordion_1\" href=\"#collapseTen\" aria-expanded=\"false\"
                                           aria-controls=\"collapseTen\"
                                           style=\"font-size: 14px!important; font-weight: 500\">
                                            6- GESTION DES DOCUMENTS
                                        </a>
                                    </h5>
                                </div>
                                <div id=\"collapseTen\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                     aria-labelledby=\"headingTen\">
                                    <div class=\"panel-body\">
                                        <div class=\"table-responsive shadow\" style=\"padding: 10px\">
                                            <table class=\"table-striped table-bordered display nowrap\" width=\"100%\"
                                                   cellpadding=\"2\" id=\"dataFichies\">
                                                <thead>
                                                <tr class=\"text-center\">
                                                    <th style=\"width: 10px !important;\"></th>
                                                    <th>DATE D'AJOUT</th>
                                                    <th>DOCUMENTS</th>
                                                    <th class=\"text-center\">TAILLE</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                {% for fichier in chantier.fichiers %}
                                                    <tr>
                                                        <td class=\"text-center\">
                                                            <input type=\"checkbox\" data-toggle=\"toggle\" class=\"FICHIES\"
                                                                   value=\"{{ fichier.id }}\"></td>
                                                        <td>{{ fichier.date|date('Y.m.d H.i.s') }}</td>
                                                        <td style=\"padding: 2px !important;\">
                                                            <a href=\"https://carlinbleu.com/eagles/public/upload/{{ fichier.nomfichier }}\"
                                                               download>{{ fichier.nomfichier }}</a>
                                                        </td>
                                                        <td class=\"text-center\"
                                                            style=\"padding: 2px !important\">{{ (fichier.taille/1000000)|number_format(2, ',', ' ') }}
                                                            Mo
                                                        </td>
                                                    </tr>
                                                {% endfor %}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {# FIN DOCUMENTS #}

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <script>
        localStorage.setItem('reloadd', 'gestion/' + document.getElementById('idchantier').value);
    </script>

{% endblock %}
", "content/gestion.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\gestion.html.twig");
    }
}
