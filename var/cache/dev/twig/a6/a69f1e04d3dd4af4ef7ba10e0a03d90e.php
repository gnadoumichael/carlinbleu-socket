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

/* content/personnel.html.twig */
class __TwigTemplate_301f6b0f0e315d31c226cf996676e6d1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/personnel.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/personnel.html.twig"));

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
        yield "    <style>
        .pp20{
            padding-right: 20px !important;
        }
    </style>

    <input type=\"text\" class=\"hide\" id=\"pager\" value=\"personnel\"/>
    <input type=\"text\" class=\"hide\" id=\"idservice\" value=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        yield "\">
    <input type=\"text\" class=\"hide\" id=\"idperson\" value=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        yield "\">


    <div class=\"modal fade right\" id=\"modalPersonnel\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                ";
        // line 21
        if ((($tmp = (isset($context["editPer"]) || array_key_exists("editPer", $context) ? $context["editPer"] : (function () { throw new RuntimeError('Variable "editPer" does not exist.', 21, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "                    <div class=\"modal-header bg-green col-white p-l-20\">
                        <h4 class=\"modal-title\" id=\"defaultModalLabel\">MODIFIER UNE PERSONNE</h4>
                    </div>
                ";
        } else {
            // line 26
            yield "                    <div class=\"modal-header bg-pri col-white p-l-20\">
                        <h4 class=\"modal-title\" id=\"defaultModalLabel\">AJOUTER UNE PERSONNE</h4>
                    </div>
                ";
        }
        // line 30
        yield "                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
        // line 32
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 32, $this->source); })()), 'form_start', ["attr" => ["id" => "addPersonnelForm"]]);
        yield "
                        ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 33, $this->source); })()), "_token", [], "any", false, false, false, 33), 'row');
        yield "
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">NOM & PRÉNOMS<span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        ";
        // line 40
        if ((($tmp = (isset($context["editPer"]) || array_key_exists("editPer", $context) ? $context["editPer"] : (function () { throw new RuntimeError('Variable "editPer" does not exist.', 40, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 41
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 41, $this->source); })()), "noms", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control col-pink "]]);
            yield "
                                        ";
        } else {
            // line 43
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 43, $this->source); })()), "noms", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                        ";
        }
        // line 45
        yield "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">SERVICE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        ";
        // line 54
        if ((($tmp = (isset($context["editPer"]) || array_key_exists("editPer", $context) ? $context["editPer"] : (function () { throw new RuntimeError('Variable "editPer" does not exist.', 54, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 55
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 55, $this->source); })()), "service", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control col-pink "]]);
            yield "
                                        ";
        } else {
            // line 57
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 57, $this->source); })()), "service", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                        ";
        }
        // line 59
        yield "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">FONCTION</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        ";
        // line 68
        if ((($tmp = (isset($context["editPer"]) || array_key_exists("editPer", $context) ? $context["editPer"] : (function () { throw new RuntimeError('Variable "editPer" does not exist.', 68, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 69
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 69, $this->source); })()), "fonction", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-control col-pink "]]);
            yield "
                                        ";
        } else {
            // line 71
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 71, $this->source); })()), "fonction", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                        ";
        }
        // line 73
        yield "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">SALAIRE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        ";
        // line 82
        if ((($tmp = (isset($context["editPer"]) || array_key_exists("editPer", $context) ? $context["editPer"] : (function () { throw new RuntimeError('Variable "editPer" does not exist.', 82, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 83
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 83, $this->source); })()), "salaire", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "form-control col-pink "]]);
            yield "
                                        ";
        } else {
            // line 85
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 85, $this->source); })()), "salaire", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                        ";
        }
        // line 87
        yield "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">TYPE DE CONTRAT</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        ";
        // line 96
        if ((($tmp = (isset($context["editPer"]) || array_key_exists("editPer", $context) ? $context["editPer"] : (function () { throw new RuntimeError('Variable "editPer" does not exist.', 96, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 97
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 97, $this->source); })()), "contrat", [], "any", false, false, false, 97), 'widget', ["attr" => ["class" => "form-control col-pink "]]);
            yield "
                                        ";
        } else {
            // line 99
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 99, $this->source); })()), "contrat", [], "any", false, false, false, 99), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                        ";
        }
        // line 101
        yield "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">EMAIL</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        ";
        // line 110
        if ((($tmp = (isset($context["editPer"]) || array_key_exists("editPer", $context) ? $context["editPer"] : (function () { throw new RuntimeError('Variable "editPer" does not exist.', 110, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 111
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 111, $this->source); })()), "mail", [], "any", false, false, false, 111), 'widget', ["attr" => ["class" => "form-control col-pink "]]);
            yield "
                                        ";
        } else {
            // line 113
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 113, $this->source); })()), "mail", [], "any", false, false, false, 113), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                        ";
        }
        // line 115
        yield "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">CONTACTS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        ";
        // line 124
        if ((($tmp = (isset($context["editPer"]) || array_key_exists("editPer", $context) ? $context["editPer"] : (function () { throw new RuntimeError('Variable "editPer" does not exist.', 124, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 125
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 125, $this->source); })()), "contact", [], "any", false, false, false, 125), 'widget', ["attr" => ["class" => "form-control col-pink "]]);
            yield "
                                        ";
        } else {
            // line 127
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 127, $this->source); })()), "contact", [], "any", false, false, false, 127), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                        ";
        }
        // line 129
        yield "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            ";
        // line 134
        if ((($tmp = (isset($context["editPer"]) || array_key_exists("editPer", $context) ? $context["editPer"] : (function () { throw new RuntimeError('Variable "editPer" does not exist.', 134, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 135
            yield "                                <input type=\"text\" class=\"hide\" id=\"idperson\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 135, $this->source); })()), "id", [], "any", false, false, false, 135), "html", null, true);
            yield "\"/>
                                <input type=\"submit\" id=\"updatePers\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect col-white bg-green\">
                            ";
        } else {
            // line 139
            yield "                                <input type=\"submit\" id=\"addPers\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect col-white bg-blue\">
                            ";
        }
        // line 142
        yield "
                            <a href=\"";
        // line 143
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnel");
        yield "\" type=\"button\" id=\"closePers\" class=\"btn btn-link waves-effect col-white bg-pink\">
                                FERMER
                            </a>
                            <img src=\"";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadPers\"></div>
                        <br>
                        <br>
                        <br>
                        ";
        // line 151
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 151, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalService\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                ";
        // line 161
        if ((($tmp = (isset($context["editSer"]) || array_key_exists("editSer", $context) ? $context["editSer"] : (function () { throw new RuntimeError('Variable "editSer" does not exist.', 161, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 162
            yield "                    <div class=\"modal-header bg-green col-white p-l-20\">
                        <h4 class=\"modal-title\" id=\"defaultModalLabel\">MODIFIER UN SERVICE</h4>
                    </div>
                ";
        } else {
            // line 166
            yield "                    <div class=\"modal-header bg-pri col-white p-l-20\">
                        <h4 class=\"modal-title\" id=\"defaultModalLabel\">AJOUTER UN SERVICE</h4>
                    </div>
                ";
        }
        // line 170
        yield "                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
        // line 172
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formService"]) || array_key_exists("formService", $context) ? $context["formService"] : (function () { throw new RuntimeError('Variable "formService" does not exist.', 172, $this->source); })()), 'form_start', ["attr" => ["id" => "addServiceForm"]]);
        yield "
                        ";
        // line 173
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formService"]) || array_key_exists("formService", $context) ? $context["formService"] : (function () { throw new RuntimeError('Variable "formService" does not exist.', 173, $this->source); })()), "_token", [], "any", false, false, false, 173), 'row');
        yield "
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">RANG<span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        ";
        // line 180
        if ((($tmp = (isset($context["editSer"]) || array_key_exists("editSer", $context) ? $context["editSer"] : (function () { throw new RuntimeError('Variable "editSer" does not exist.', 180, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 181
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formService"]) || array_key_exists("formService", $context) ? $context["formService"] : (function () { throw new RuntimeError('Variable "formService" does not exist.', 181, $this->source); })()), "rang", [], "any", false, false, false, 181), 'widget', ["attr" => ["class" => "form-control col-pink "]]);
            yield "
                                        ";
        } else {
            // line 183
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formService"]) || array_key_exists("formService", $context) ? $context["formService"] : (function () { throw new RuntimeError('Variable "formService" does not exist.', 183, $this->source); })()), "rang", [], "any", false, false, false, 183), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                        ";
        }
        // line 185
        yield "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">SERVICE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        ";
        // line 194
        if ((($tmp = (isset($context["editSer"]) || array_key_exists("editSer", $context) ? $context["editSer"] : (function () { throw new RuntimeError('Variable "editSer" does not exist.', 194, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 195
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formService"]) || array_key_exists("formService", $context) ? $context["formService"] : (function () { throw new RuntimeError('Variable "formService" does not exist.', 195, $this->source); })()), "service", [], "any", false, false, false, 195), 'widget', ["attr" => ["class" => "form-control col-pink "]]);
            yield "
                                        ";
        } else {
            // line 197
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formService"]) || array_key_exists("formService", $context) ? $context["formService"] : (function () { throw new RuntimeError('Variable "formService" does not exist.', 197, $this->source); })()), "service", [], "any", false, false, false, 197), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                        ";
        }
        // line 199
        yield "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            ";
        // line 204
        if ((($tmp = (isset($context["editSer"]) || array_key_exists("editSer", $context) ? $context["editSer"] : (function () { throw new RuntimeError('Variable "editSer" does not exist.', 204, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 205
            yield "                                <input type=\"text\" class=\"hide\" id=\"idservice\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 205, $this->source); })()), "id", [], "any", false, false, false, 205), "html", null, true);
            yield "\"/>
                                <input type=\"submit\" id=\"updateSer\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect col-white bg-green\">
                            ";
        } else {
            // line 209
            yield "                                <input type=\"submit\" id=\"addSer\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect col-white bg-blue\">
                            ";
        }
        // line 212
        yield "
                            <div type=\"button\" id=\"closeSer\" class=\"btn btn-link waves-effect col-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"";
        // line 217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadSer\"></div>
                        <br>
                        <br>
                        <br>
                        ";
        // line 222
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formService"]) || array_key_exists("formService", $context) ? $context["formService"] : (function () { throw new RuntimeError('Variable "formService" does not exist.', 222, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalImager\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header text-white bg-blue p-l-20\">
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">AJOUTER UNE IMAGE</h3>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        <form enctype=\"multipart/form-data\" id=\"addImagerForm\">
                            <input type=\"hidden\" name=\"token\" value=\"";
        // line 238
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addImagerToken"), "html", null, true);
        yield "\"/>

                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label m-b--30 pri bolo\">IMPORTER UNE IMAGE</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line col-pink\">
                                            <input type=\"file\" id=\"nomfichie\" name=\"image\" required=\"required\"
                                                   class=\"form-control\">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"text-center\">
                                <input type=\"submit\" id=\"addImagePer\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-pri\">
                                <div type=\"button\" id=\"closeImagePer\"
                                     class=\"btn btn-link waves-effect text-white bg-pink\" data-dismiss=\"modal\">
                                    FERMER
                                </div>
                                <img src=\"";
        // line 259
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                     class=\"align-justify\" id=\"loadImagePer\">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalEquipe\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
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
        // line 283
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formEquipe"]) || array_key_exists("formEquipe", $context) ? $context["formEquipe"] : (function () { throw new RuntimeError('Variable "formEquipe" does not exist.', 283, $this->source); })()), 'form_start', ["attr" => ["id" => "addEquipeForm"]]);
        yield "
                        <input type=\"hidden\" name=\"token\" value=\"";
        // line 284
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addEquipeToken"), "html", null, true);
        yield "\"/>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label col-blue bolo\">Équipe<span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        ";
        // line 291
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formEquipe"]) || array_key_exists("formEquipe", $context) ? $context["formEquipe"] : (function () { throw new RuntimeError('Variable "formEquipe" does not exist.', 291, $this->source); })()), "designation", [], "any", false, false, false, 291), 'widget', ["id" => "edesign", "attr" => ["class" => "form-control equi"]]);
        yield "
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
        // line 304
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["personnels"]) || array_key_exists("personnels", $context) ? $context["personnels"] : (function () { throw new RuntimeError('Variable "personnels" does not exist.', 304, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["personnel"]) {
            // line 305
            yield "                                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "id", [], "any", false, false, false, 305), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "noms", [], "any", false, false, false, 305)), "html", null, true);
            yield "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['personnel'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 307
        yield "                                    </select>
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
        // line 318
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["personnels"]) || array_key_exists("personnels", $context) ? $context["personnels"] : (function () { throw new RuntimeError('Variable "personnels" does not exist.', 318, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["personnel"]) {
            // line 319
            yield "                                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "id", [], "any", false, false, false, 319), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "noms", [], "any", false, false, false, 319)), "html", null, true);
            yield "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['personnel'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 321
        yield "                                    </select>
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
                            <div id=\"divaddequipe\">
                                <input type=\"submit\" id=\"addEquipe\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-pri\">
                                <div type=\"button\" id=\"closeEquipe\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                     data-dismiss=\"modal\">
                                    FERMER
                                </div>
                            </div>
                            <img src=\"";
        // line 342
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadEquipe\">
                        </div>
                        <br><br><br><br>
                        ";
        // line 346
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formEquipe"]) || array_key_exists("formEquipe", $context) ? $context["formEquipe"] : (function () { throw new RuntimeError('Variable "formEquipe" does not exist.', 346, $this->source); })()), 'form_end');
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
                    <div class=\"col-xs-12 col-sm-12 \">
                        <h3 class=\"col-pink bolo700 text-center\">GESTION DU PERSONNEL</h3>

                        ";
        // line 360
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitAdmin"]) || array_key_exists("droitAdmin", $context) ? $context["droitAdmin"] : (function () { throw new RuntimeError('Variable "droitAdmin" does not exist.', 360, $this->source); })()), "actions", [], "any", false, false, false, 360) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitComptable"]) || array_key_exists("droitComptable", $context) ? $context["droitComptable"] : (function () { throw new RuntimeError('Variable "droitComptable" does not exist.', 360, $this->source); })()), "actions", [], "any", false, false, false, 360) == "oui"))) {
            // line 361
            yield "                        <div class=\"button-demo text-center\" style=\"margin:15px\">
                            <button type=\"button\" data-color=\"blue\"
                                    class=\"btn bg-blue col-white text-center waves-effect\"
                                    data-toggle=\"modal\" data-target=\"#modalService\">AJOUTER UN
                                SERVICE
                            </button>
                            <button type=\"button\" data-color=\"blue\"
                                    class=\"btn bg-blue col-white text-center waves-effect\"
                                    data-toggle=\"modal\" data-target=\"#modalPersonnel\">AJOUTER UNE
                                PERSONNE
                            </button>
                            <button type=\"button\" data-color=\"blue\"
                                    class=\"btn bg-blue col-white text-center waves-effect\"
                                    data-toggle=\"modal\" data-target=\"#modalEquipe\">AJOUTER UNE EQUIPE
                            </button>
                        </div>
                        ";
        }
        // line 378
        yield "
                        <div class=\"panel-group\" id=\"accordion_1\" role=\"tablist\" aria-multiselectable=\"true\">
                            ";
        // line 380
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitAdmin"]) || array_key_exists("droitAdmin", $context) ? $context["droitAdmin"] : (function () { throw new RuntimeError('Variable "droitAdmin" does not exist.', 380, $this->source); })()), "actions", [], "any", false, false, false, 380) == "oui") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitComptable"]) || array_key_exists("droitComptable", $context) ? $context["droitComptable"] : (function () { throw new RuntimeError('Variable "droitComptable" does not exist.', 380, $this->source); })()), "actions", [], "any", false, false, false, 380) == "oui"))) {
            // line 381
            yield "                            <div class=\"panel panel-pri shadow m-t-5\">
                                <div class=\"panel-heading\" role=\"tab\" id=\"headingPers\">
                                    <h4 class=\"panel-title\">
                                        <a class=\"collapsed  outai col-white\" role=\"button\" data-toggle=\"collapse\"
                                           data-parent=\"#accordionPers\" href=\"#collapsePers\" aria-expanded=\"false\"
                                           aria-controls=\"collapsePers\">
                                            <i class=\"material-icons col-white\"
                                               style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Personnel & Services
                                        </a>
                                    </h4>
                                </div>
                                <div id=\"collapsePers\" class=\"panel-collapse  collapse\" role=\"tabpanel\"
                                     aria-labelledby=\"headingPers\">
                                    <div class=\"panel-body\"
                                         style=\"overflow: scroll;background-color: #dbdfef; padding: 2px !important\">
                                        <div class=\"table-responsive shadow\">
                                            <div class=\"table-responsive shadow bg-white\"
                                                 style=\"padding: 10px 10px 50px 10px; color:#555; overflow: scroll\">
                                                <h4 class=\"bolo700 col-blue\">SERVICES</h4>
                                                <table class=\"table-striped table-bordered display nowrap\"
                                                       id=\"dataSERVICE\" style=\"width: 100%;\">
                                                    <thead>
                                                    <tr class=\"text-center\">
                                                        <th class=\"text-center\"></th>
                                                        <th class=\"text-center\">RANG</th>
                                                        <th>SERVICES</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    ";
            // line 410
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 410, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                // line 411
                yield "                                                        <tr>
                                                            <td class=\"text-center\"><input type=\"checkbox\" data-toggle=\"toggle\" class=\"SER\" value=\"";
                // line 412
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 412), "html", null, true);
                yield "\"></td>
                                                            <td class=\"text-center\">";
                // line 413
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "rang", [], "any", false, false, false, 413), "html", null, true);
                yield "</td>
                                                            <td class=\"text-left bolo700\" style=\"width: 80%\">";
                // line 414
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["service"], "service", [], "any", false, false, false, 414)), "html", null, true);
                yield "</td>
                                                        </tr>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['service'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 417
            yield "                                                    </tbody>
                                                </table>
                                                <h4 class=\"bolo700 col-blue\" style=\"margin-top: 50px\">Le Personnel</h4>
                                                <table class=\"table-striped table-bordered display nowrap\"
                                                       style=\"width: 100%;\" id=\"dataPERSONNEL\">
                                                    <thead>
                                                    <tr class=\"text-center\">
                                                        <th class=\"mw30\"></th>
                                                        <th>NOM & PRÉNOMS</th>
                                                        <th>PROFESSION</th>
                                                        <th>SERVICE</th>
                                                        <th>CONTACTS</th>
                                                        <th>EMAIL</th>
                                                        ";
            // line 430
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 430, $this->source); })()), "user", [], "any", false, false, false, 430), "compte", [], "any", false, false, false, 430) == null)) {
                // line 431
                yield "                                                        <th>SALAIRE</th>
                                                        ";
            }
            // line 433
            yield "                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    ";
            // line 436
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["personnels"]) || array_key_exists("personnels", $context) ? $context["personnels"] : (function () { throw new RuntimeError('Variable "personnels" does not exist.', 436, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
                // line 437
                yield "                                                        ";
                if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["person"], "corbeille", [], "any", false, false, false, 437)) && (CoreExtension::getAttribute($this->env, $this->source, $context["person"], "type", [], "any", false, false, false, 437) == "personnelle"))) {
                    // line 438
                    yield "                                                            <tr>
                                                                <td class=\"text-center\">
                                                                    <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                           class=\"PERSON\"
                                                                           value=\"";
                    // line 442
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "id", [], "any", false, false, false, 442), "html", null, true);
                    yield "\"></td>

                                                                <td class=\"text-left col-blue\">";
                    // line 444
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["person"], "noms", [], "any", false, false, false, 444)), "html", null, true);
                    yield "</td>
                                                                <td class=\"text-left\">";
                    // line 445
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["person"], "fonction", [], "any", false, false, false, 445)), "html", null, true);
                    yield "</td>
                                                                <td class=\"text-left\"> ";
                    // line 446
                    if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["person"], "service", [], "any", false, false, false, 446))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["person"], "service", [], "any", false, false, false, 446), "service", [], "any", false, false, false, 446)), "html", null, true);
                        yield "  ";
                    }
                    yield "</td>
                                                                <td>";
                    // line 447
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "contact", [], "any", false, false, false, 447), "html", null, true);
                    yield "</td>
                                                                <td>";
                    // line 448
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "mail", [], "any", false, false, false, 448), "html", null, true);
                    yield "</td>
                                                        ";
                    // line 449
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 449, $this->source); })()), "user", [], "any", false, false, false, 449), "compte", [], "any", false, false, false, 449) == null)) {
                        // line 450
                        yield "                                                                <td class=\"text-right\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "salaire", [], "any", false, false, false, 450), 2, ",", " "), "html", null, true);
                        yield "</td>
                                                        ";
                    }
                    // line 452
                    yield "                                                            </tr>
                                                        ";
                }
                // line 454
                yield "
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['person'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 456
            yield "                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ";
        }
        // line 464
        yield "                            <div class=\"panel panel-pri shadow m-t-5\">
                                <div class=\"panel-heading\" role=\"tab\" id=\"headingPersPho\">
                                    <h4 class=\"panel-title\">
                                        <a class=\"collapsed  outai col-white\" role=\"button\" data-toggle=\"collapse\"
                                           data-parent=\"#accordionPersPho\" href=\"#collapsePersPho\" aria-expanded=\"false\"
                                           aria-controls=\"collapsePersPho\">
                                            <i class=\"material-icons col-white\"
                                               style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Le Personnel
                                        </a>
                                    </h4>
                                </div>
                                <div id=\"collapsePersPho\" class=\"panel-collapse  collapse\" role=\"tabpanel\"
                                     aria-labelledby=\"headingPersPho\">
                                    <div class=\"panel-body\"
                                         style=\"overflow: scroll;background-color: #dbdfef; padding: 2px !important\">
                                        <div class=\"table-responsive shadow\">
                                            <div class=\"table-responsive shadow bg-white\"
                                                 style=\"padding: 10px 10px 50px 10px; color:#555; overflow: scroll\">
                                                ";
        // line 482
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 482, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 483
            yield "                                                    <h4 class=\"bolo700\"><u>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "rang", [], "any", false, false, false, 483), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["service"], "service", [], "any", false, false, false, 483)), "html", null, true);
            yield "</u></h4>
                                                    <div class=\"row\">
                                                        ";
            // line 485
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "personnel", [], "any", false, false, false, 485));
            foreach ($context['_seq'] as $context["_key"] => $context["personne"]) {
                // line 486
                yield "                                                            ";
                if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["personne"], "corbeille", [], "any", false, false, false, 486)) && (CoreExtension::getAttribute($this->env, $this->source, $context["personne"], "type", [], "any", false, false, false, 486) == "personnelle"))) {
                    // line 487
                    yield "                                                            <div class=\"col-md-2 mb-4\">
                                                                <div class=\"text-center\">
                                                                    ";
                    // line 489
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["personne"], "photo", [], "any", false, false, false, 489))) {
                        // line 490
                        yield "                                                                        <a href=\"#\"  ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["droitAdmin"]) || array_key_exists("droitAdmin", $context) ? $context["droitAdmin"] : (function () { throw new RuntimeError('Variable "droitAdmin" does not exist.', 490, $this->source); })()), "actions", [], "any", false, false, false, 490) == "oui")) {
                            yield "class=\"addPersa\" id=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["personne"], "id", [], "any", false, false, false, 490), "html", null, true);
                            yield "\"   ";
                        }
                        yield ">
                                                                            <img src=\"/images/personnel/user.png\" class=\"img-circle\" style=\"width: 100%\">
                                                                        </a>
                                                                    ";
                    } else {
                        // line 494
                        yield "                                                                        <a href=\"#\" class=\"addPersa\" id=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["personne"], "id", [], "any", false, false, false, 494), "html", null, true);
                        yield "\">
                                                                            <img src=\"/images/personnel/";
                        // line 495
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["personne"], "photo", [], "any", false, false, false, 495), "html", null, true);
                        yield "\" class=\"img-circle\" style=\"width: 100%\">
                                                                        </a>
                                                                    ";
                    }
                    // line 498
                    yield "                                                                    <h5 class=\"mt-4 font-weight-medium mb-0 bolo600\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["personne"], "noms", [], "any", false, false, false, 498)), "html", null, true);
                    yield "</h5>
                                                                    <h6 class=\"subtitle mb-3\" style=\"margin-top: -10px\">";
                    // line 499
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["personne"], "fonction", [], "any", false, false, false, 499)), "html", null, true);
                    yield "</h6>
                                                                </div>
                                                            </div>
                                                            ";
                }
                // line 503
                yield "                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['personne'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 504
            yield "                                                    </div>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['service'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 506
        yield "                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"panel panel-pri shadow m-t-5\">
                                <div class=\"panel-heading\" role=\"tab\" id=\"headingEquipes\">
                                    <h4 class=\"panel-title\">
                                        <a class=\"collapsed  outai col-white\" role=\"button\" data-toggle=\"collapse\"
                                           data-parent=\"#accordionEquipes\" href=\"#collapseEquipes\" aria-expanded=\"false\"
                                           aria-controls=\"collapseEquipes\">
                                            <i class=\"material-icons col-white\"
                                               style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Gestion des équipes
                                        </a>
                                    </h4>
                                </div>
                                <div id=\"collapseEquipes\" class=\"panel-collapse  collapse\" role=\"tabpanel\"
                                     aria-labelledby=\"headingEquipes\">
                                    <div class=\"panel-body\"
                                         style=\"overflow: scroll;background-color: #dbdfef; padding: 2px !important\">
                                        <div class=\"table-responsive shadow\">
                                            <div class=\"table-responsive shadow bg-white\"
                                                 style=\"padding: 10px 10px 50px 10px; color:#555; overflow: scroll\">

                                                <div class=\"row\">
                                                    ";
        // line 531
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["equipes"]) || array_key_exists("equipes", $context) ? $context["equipes"] : (function () { throw new RuntimeError('Variable "equipes" does not exist.', 531, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["equipe"]) {
            // line 532
            yield "                                                        <div class=\"col-lg-4 col-md-4\">
                                                            <div style=\"width: 100%; height: 300px; border-left: 3px solid #4e73df; border-right: 3px solid #4e73df; border-radius: 20px; background-color: #fffdfd; padding: 20px\">
                                                                <h5>";
            // line 534
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["equipe"], "designation", [], "any", false, false, false, 534)), "html", null, true);
            yield "</h5>
                                                                <span class='badge badge-pill bg-blue col-white' style='font-size: 11px'>Satut: Libre</span>
                                                            </div>
                                                        </div>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['equipe'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 539
        yield "
                                                </div>
                                            </div>
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
        return "content/personnel.html.twig";
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
        return array (  990 => 539,  979 => 534,  975 => 532,  971 => 531,  944 => 506,  937 => 504,  931 => 503,  924 => 499,  919 => 498,  913 => 495,  908 => 494,  896 => 490,  894 => 489,  890 => 487,  887 => 486,  883 => 485,  875 => 483,  871 => 482,  851 => 464,  841 => 456,  834 => 454,  830 => 452,  824 => 450,  822 => 449,  818 => 448,  814 => 447,  807 => 446,  803 => 445,  799 => 444,  794 => 442,  788 => 438,  785 => 437,  781 => 436,  776 => 433,  772 => 431,  770 => 430,  755 => 417,  746 => 414,  742 => 413,  738 => 412,  735 => 411,  731 => 410,  700 => 381,  698 => 380,  694 => 378,  675 => 361,  673 => 360,  656 => 346,  649 => 342,  626 => 321,  615 => 319,  611 => 318,  598 => 307,  587 => 305,  583 => 304,  567 => 291,  557 => 284,  553 => 283,  526 => 259,  502 => 238,  483 => 222,  475 => 217,  468 => 212,  463 => 209,  455 => 205,  453 => 204,  446 => 199,  440 => 197,  434 => 195,  432 => 194,  421 => 185,  415 => 183,  409 => 181,  407 => 180,  397 => 173,  393 => 172,  389 => 170,  383 => 166,  377 => 162,  375 => 161,  362 => 151,  354 => 146,  348 => 143,  345 => 142,  340 => 139,  332 => 135,  330 => 134,  323 => 129,  317 => 127,  311 => 125,  309 => 124,  298 => 115,  292 => 113,  286 => 111,  284 => 110,  273 => 101,  267 => 99,  261 => 97,  259 => 96,  248 => 87,  242 => 85,  236 => 83,  234 => 82,  223 => 73,  217 => 71,  211 => 69,  209 => 68,  198 => 59,  192 => 57,  186 => 55,  184 => 54,  173 => 45,  167 => 43,  161 => 41,  159 => 40,  149 => 33,  145 => 32,  141 => 30,  135 => 26,  129 => 22,  127 => 21,  117 => 14,  113 => 13,  104 => 6,  91 => 5,  77 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    {{ title }}
{% endblock %}
{% block body %}
    <style>
        .pp20{
            padding-right: 20px !important;
        }
    </style>

    <input type=\"text\" class=\"hide\" id=\"pager\" value=\"personnel\"/>
    <input type=\"text\" class=\"hide\" id=\"idservice\" value=\"{{ service.id }}\">
    <input type=\"text\" class=\"hide\" id=\"idperson\" value=\"{{ person.id }}\">


    <div class=\"modal fade right\" id=\"modalPersonnel\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                {% if editPer %}
                    <div class=\"modal-header bg-green col-white p-l-20\">
                        <h4 class=\"modal-title\" id=\"defaultModalLabel\">MODIFIER UNE PERSONNE</h4>
                    </div>
                {% else %}
                    <div class=\"modal-header bg-pri col-white p-l-20\">
                        <h4 class=\"modal-title\" id=\"defaultModalLabel\">AJOUTER UNE PERSONNE</h4>
                    </div>
                {% endif %}
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        {{ form_start(formPersonnel, {'attr': {'id':'addPersonnelForm' }}) }}
                        {{ form_row(formPersonnel._token) }}
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">NOM & PRÉNOMS<span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        {% if editPer %}
                                            {{ form_widget(formPersonnel.noms,{'attr':{'class':'form-control col-pink ' }}) }}
                                        {% else %}
                                            {{ form_widget(formPersonnel.noms,{'attr':{'class':'form-control' }}) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">SERVICE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        {% if editPer %}
                                            {{ form_widget(formPersonnel.service,{'attr':{'class':'form-control col-pink ' }}) }}
                                        {% else %}
                                            {{ form_widget(formPersonnel.service,{'attr':{'class':'form-control' }}) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">FONCTION</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        {% if editPer %}
                                            {{ form_widget(formPersonnel.fonction,{'attr':{'class':'form-control col-pink ' }}) }}
                                        {% else %}
                                            {{ form_widget(formPersonnel.fonction,{'attr':{'class':'form-control' }}) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">SALAIRE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        {% if editPer %}
                                            {{ form_widget(formPersonnel.salaire,{'attr':{'class':'form-control col-pink ' }}) }}
                                        {% else %}
                                            {{ form_widget(formPersonnel.salaire,{'attr':{'class':'form-control' }}) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">TYPE DE CONTRAT</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        {% if editPer %}
                                            {{ form_widget(formPersonnel.contrat,{'attr':{'class':'form-control col-pink ' }}) }}
                                        {% else %}
                                            {{ form_widget(formPersonnel.contrat,{'attr':{'class':'form-control' }}) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">EMAIL</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        {% if editPer %}
                                            {{ form_widget(formPersonnel.mail,{'attr':{'class':'form-control col-pink ' }}) }}
                                        {% else %}
                                            {{ form_widget(formPersonnel.mail,{'attr':{'class':'form-control' }}) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">CONTACTS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        {% if editPer %}
                                            {{ form_widget(formPersonnel.contact,{'attr':{'class':'form-control col-pink ' }}) }}
                                        {% else %}
                                            {{ form_widget(formPersonnel.contact,{'attr':{'class':'form-control' }}) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            {% if editPer %}
                                <input type=\"text\" class=\"hide\" id=\"idperson\" value=\"{{ person.id }}\"/>
                                <input type=\"submit\" id=\"updatePers\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect col-white bg-green\">
                            {% else %}
                                <input type=\"submit\" id=\"addPers\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect col-white bg-blue\">
                            {% endif %}

                            <a href=\"{{ path('personnel') }}\" type=\"button\" id=\"closePers\" class=\"btn btn-link waves-effect col-white bg-pink\">
                                FERMER
                            </a>
                            <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadPers\"></div>
                        <br>
                        <br>
                        <br>
                        {{ form_end(formPersonnel) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalService\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                {% if editSer %}
                    <div class=\"modal-header bg-green col-white p-l-20\">
                        <h4 class=\"modal-title\" id=\"defaultModalLabel\">MODIFIER UN SERVICE</h4>
                    </div>
                {% else %}
                    <div class=\"modal-header bg-pri col-white p-l-20\">
                        <h4 class=\"modal-title\" id=\"defaultModalLabel\">AJOUTER UN SERVICE</h4>
                    </div>
                {% endif %}
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        {{ form_start(formService, {'attr': {'id':'addServiceForm' }}) }}
                        {{ form_row(formService._token) }}
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">RANG<span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        {% if editSer %}
                                            {{ form_widget(formService.rang,{'attr':{'class':'form-control col-pink ' }}) }}
                                        {% else %}
                                            {{ form_widget(formService.rang,{'attr':{'class':'form-control' }}) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">SERVICE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        {% if editSer %}
                                            {{ form_widget(formService.service,{'attr':{'class':'form-control col-pink ' }}) }}
                                        {% else %}
                                            {{ form_widget(formService.service,{'attr':{'class':'form-control' }}) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            {% if editSer %}
                                <input type=\"text\" class=\"hide\" id=\"idservice\" value=\"{{ service.id }}\"/>
                                <input type=\"submit\" id=\"updateSer\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect col-white bg-green\">
                            {% else %}
                                <input type=\"submit\" id=\"addSer\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect col-white bg-blue\">
                            {% endif %}

                            <div type=\"button\" id=\"closeSer\" class=\"btn btn-link waves-effect col-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadSer\"></div>
                        <br>
                        <br>
                        <br>
                        {{ form_end(formService) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalImager\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header text-white bg-blue p-l-20\">
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">AJOUTER UNE IMAGE</h3>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        <form enctype=\"multipart/form-data\" id=\"addImagerForm\">
                            <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addImagerToken') }}\"/>

                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label m-b--30 pri bolo\">IMPORTER UNE IMAGE</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line col-pink\">
                                            <input type=\"file\" id=\"nomfichie\" name=\"image\" required=\"required\"
                                                   class=\"form-control\">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"text-center\">
                                <input type=\"submit\" id=\"addImagePer\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-pri\">
                                <div type=\"button\" id=\"closeImagePer\"
                                     class=\"btn btn-link waves-effect text-white bg-pink\" data-dismiss=\"modal\">
                                    FERMER
                                </div>
                                <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                     class=\"align-justify\" id=\"loadImagePer\">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalEquipe\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
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
                                <label class=\"form-label col-blue bolo\">Équipe<span class=\"col-red\">*</span>
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
                            <div id=\"divaddequipe\">
                                <input type=\"submit\" id=\"addEquipe\" value=\"ENREGISTRER\"
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

    <section class=\"content\" style=\"margin-top: 80px !important;\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row clearfix m-t-20 p-b-5\">
                    <div class=\"col-xs-12 col-sm-12 \">
                        <h3 class=\"col-pink bolo700 text-center\">GESTION DU PERSONNEL</h3>

                        {% if droitAdmin.actions == \"oui\" or droitComptable.actions == \"oui\" %}
                        <div class=\"button-demo text-center\" style=\"margin:15px\">
                            <button type=\"button\" data-color=\"blue\"
                                    class=\"btn bg-blue col-white text-center waves-effect\"
                                    data-toggle=\"modal\" data-target=\"#modalService\">AJOUTER UN
                                SERVICE
                            </button>
                            <button type=\"button\" data-color=\"blue\"
                                    class=\"btn bg-blue col-white text-center waves-effect\"
                                    data-toggle=\"modal\" data-target=\"#modalPersonnel\">AJOUTER UNE
                                PERSONNE
                            </button>
                            <button type=\"button\" data-color=\"blue\"
                                    class=\"btn bg-blue col-white text-center waves-effect\"
                                    data-toggle=\"modal\" data-target=\"#modalEquipe\">AJOUTER UNE EQUIPE
                            </button>
                        </div>
                        {% endif %}

                        <div class=\"panel-group\" id=\"accordion_1\" role=\"tablist\" aria-multiselectable=\"true\">
                            {% if droitAdmin.actions == \"oui\" or droitComptable.actions == \"oui\" %}
                            <div class=\"panel panel-pri shadow m-t-5\">
                                <div class=\"panel-heading\" role=\"tab\" id=\"headingPers\">
                                    <h4 class=\"panel-title\">
                                        <a class=\"collapsed  outai col-white\" role=\"button\" data-toggle=\"collapse\"
                                           data-parent=\"#accordionPers\" href=\"#collapsePers\" aria-expanded=\"false\"
                                           aria-controls=\"collapsePers\">
                                            <i class=\"material-icons col-white\"
                                               style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Personnel & Services
                                        </a>
                                    </h4>
                                </div>
                                <div id=\"collapsePers\" class=\"panel-collapse  collapse\" role=\"tabpanel\"
                                     aria-labelledby=\"headingPers\">
                                    <div class=\"panel-body\"
                                         style=\"overflow: scroll;background-color: #dbdfef; padding: 2px !important\">
                                        <div class=\"table-responsive shadow\">
                                            <div class=\"table-responsive shadow bg-white\"
                                                 style=\"padding: 10px 10px 50px 10px; color:#555; overflow: scroll\">
                                                <h4 class=\"bolo700 col-blue\">SERVICES</h4>
                                                <table class=\"table-striped table-bordered display nowrap\"
                                                       id=\"dataSERVICE\" style=\"width: 100%;\">
                                                    <thead>
                                                    <tr class=\"text-center\">
                                                        <th class=\"text-center\"></th>
                                                        <th class=\"text-center\">RANG</th>
                                                        <th>SERVICES</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    {% for service in services %}
                                                        <tr>
                                                            <td class=\"text-center\"><input type=\"checkbox\" data-toggle=\"toggle\" class=\"SER\" value=\"{{ service.id }}\"></td>
                                                            <td class=\"text-center\">{{ service.rang }}</td>
                                                            <td class=\"text-left bolo700\" style=\"width: 80%\">{{ service.service|upper }}</td>
                                                        </tr>
                                                    {% endfor %}
                                                    </tbody>
                                                </table>
                                                <h4 class=\"bolo700 col-blue\" style=\"margin-top: 50px\">Le Personnel</h4>
                                                <table class=\"table-striped table-bordered display nowrap\"
                                                       style=\"width: 100%;\" id=\"dataPERSONNEL\">
                                                    <thead>
                                                    <tr class=\"text-center\">
                                                        <th class=\"mw30\"></th>
                                                        <th>NOM & PRÉNOMS</th>
                                                        <th>PROFESSION</th>
                                                        <th>SERVICE</th>
                                                        <th>CONTACTS</th>
                                                        <th>EMAIL</th>
                                                        {% if app.user.compte == null %}
                                                        <th>SALAIRE</th>
                                                        {% endif %}
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    {% for person in personnels %}
                                                        {% if person.corbeille is null and person.type == \"personnelle\" %}
                                                            <tr>
                                                                <td class=\"text-center\">
                                                                    <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                           class=\"PERSON\"
                                                                           value=\"{{ person.id }}\"></td>

                                                                <td class=\"text-left col-blue\">{{ person.noms|upper }}</td>
                                                                <td class=\"text-left\">{{ person.fonction|upper }}</td>
                                                                <td class=\"text-left\"> {% if person.service is not null %}{{ person.service.service|upper }}  {% endif %}</td>
                                                                <td>{{ person.contact }}</td>
                                                                <td>{{ person.mail }}</td>
                                                        {% if app.user.compte == null %}
                                                                <td class=\"text-right\">{{ person.salaire|number_format(2,',',' ') }}</td>
                                                        {% endif %}
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
                            {% endif %}
                            <div class=\"panel panel-pri shadow m-t-5\">
                                <div class=\"panel-heading\" role=\"tab\" id=\"headingPersPho\">
                                    <h4 class=\"panel-title\">
                                        <a class=\"collapsed  outai col-white\" role=\"button\" data-toggle=\"collapse\"
                                           data-parent=\"#accordionPersPho\" href=\"#collapsePersPho\" aria-expanded=\"false\"
                                           aria-controls=\"collapsePersPho\">
                                            <i class=\"material-icons col-white\"
                                               style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Le Personnel
                                        </a>
                                    </h4>
                                </div>
                                <div id=\"collapsePersPho\" class=\"panel-collapse  collapse\" role=\"tabpanel\"
                                     aria-labelledby=\"headingPersPho\">
                                    <div class=\"panel-body\"
                                         style=\"overflow: scroll;background-color: #dbdfef; padding: 2px !important\">
                                        <div class=\"table-responsive shadow\">
                                            <div class=\"table-responsive shadow bg-white\"
                                                 style=\"padding: 10px 10px 50px 10px; color:#555; overflow: scroll\">
                                                {% for service in services %}
                                                    <h4 class=\"bolo700\"><u>{{ service.rang }} - {{ service.service|upper }}</u></h4>
                                                    <div class=\"row\">
                                                        {% for personne in service.personnel %}
                                                            {% if personne.corbeille is null and personne.type == \"personnelle\" %}
                                                            <div class=\"col-md-2 mb-4\">
                                                                <div class=\"text-center\">
                                                                    {% if personne.photo is null %}
                                                                        <a href=\"#\"  {% if droitAdmin.actions == \"oui\" %}class=\"addPersa\" id=\"{{ personne.id }}\"   {% endif %}>
                                                                            <img src=\"/images/personnel/user.png\" class=\"img-circle\" style=\"width: 100%\">
                                                                        </a>
                                                                    {% else%}
                                                                        <a href=\"#\" class=\"addPersa\" id=\"{{ personne.id }}\">
                                                                            <img src=\"/images/personnel/{{ personne.photo }}\" class=\"img-circle\" style=\"width: 100%\">
                                                                        </a>
                                                                    {% endif %}
                                                                    <h5 class=\"mt-4 font-weight-medium mb-0 bolo600\">{{ personne.noms|upper }}</h5>
                                                                    <h6 class=\"subtitle mb-3\" style=\"margin-top: -10px\">{{ personne.fonction|capitalize }}</h6>
                                                                </div>
                                                            </div>
                                                            {% endif %}
                                                        {% endfor %}
                                                    </div>
                                                {% endfor %}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"panel panel-pri shadow m-t-5\">
                                <div class=\"panel-heading\" role=\"tab\" id=\"headingEquipes\">
                                    <h4 class=\"panel-title\">
                                        <a class=\"collapsed  outai col-white\" role=\"button\" data-toggle=\"collapse\"
                                           data-parent=\"#accordionEquipes\" href=\"#collapseEquipes\" aria-expanded=\"false\"
                                           aria-controls=\"collapseEquipes\">
                                            <i class=\"material-icons col-white\"
                                               style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Gestion des équipes
                                        </a>
                                    </h4>
                                </div>
                                <div id=\"collapseEquipes\" class=\"panel-collapse  collapse\" role=\"tabpanel\"
                                     aria-labelledby=\"headingEquipes\">
                                    <div class=\"panel-body\"
                                         style=\"overflow: scroll;background-color: #dbdfef; padding: 2px !important\">
                                        <div class=\"table-responsive shadow\">
                                            <div class=\"table-responsive shadow bg-white\"
                                                 style=\"padding: 10px 10px 50px 10px; color:#555; overflow: scroll\">

                                                <div class=\"row\">
                                                    {% for equipe in equipes %}
                                                        <div class=\"col-lg-4 col-md-4\">
                                                            <div style=\"width: 100%; height: 300px; border-left: 3px solid #4e73df; border-right: 3px solid #4e73df; border-radius: 20px; background-color: #fffdfd; padding: 20px\">
                                                                <h5>{{ equipe.designation|upper }}</h5>
                                                                <span class='badge badge-pill bg-blue col-white' style='font-size: 11px'>Satut: Libre</span>
                                                            </div>
                                                        </div>
                                                    {% endfor %}

                                                </div>
                                            </div>
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

{% endblock %}", "content/personnel.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\personnel.html.twig");
    }
}
