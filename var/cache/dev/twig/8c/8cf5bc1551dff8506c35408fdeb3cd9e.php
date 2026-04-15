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

/* content/chantiers.html.twig */
class __TwigTemplate_bf132900f2512e1c9d244daef52a6516 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/chantiers.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/chantiers.html.twig"));

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
        yield "
    <input type=\"text\" class=\"hide\" id=\"idclient\" value=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "html", null, true);
        yield "\"/>
    ";
        // line 8
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["interve"]) || array_key_exists("interve", $context) ? $context["interve"] : (function () { throw new RuntimeError('Variable "interve" does not exist.', 8, $this->source); })()), "type", [], "any", false, false, false, 8) != "oper")) {
            // line 9
            yield "        <input type=\"text\" class=\"hide\" id=\"idinterve\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["interve"]) || array_key_exists("interve", $context) ? $context["interve"] : (function () { throw new RuntimeError('Variable "interve" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9), "html", null, true);
            yield "\"/>
    ";
        } else {
            // line 11
            yield "        <input type=\"text\" class=\"hide\" id=\"idinterne\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["interve"]) || array_key_exists("interve", $context) ? $context["interve"] : (function () { throw new RuntimeError('Variable "interve" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "html", null, true);
            yield "\"/>
    ";
        }
        // line 13
        yield "
    <input type=\"text\" class=\"hide\" id=\"idchantier\" value=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        yield "\"/>
    <input type=\"text\" class=\"hide\" id=\"prt\" value=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["prt"]) || array_key_exists("prt", $context) ? $context["prt"] : (function () { throw new RuntimeError('Variable "prt" does not exist.', 15, $this->source); })()), "html", null, true);
        yield "\"/>
    <input type=\"text\" class=\"hide\" id=\"prte\" value=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["prte"]) || array_key_exists("prte", $context) ? $context["prte"] : (function () { throw new RuntimeError('Variable "prte" does not exist.', 16, $this->source); })()), "html", null, true);
        yield "\"/>
    <input type=\"text\" class=\"hide\" id=\"pager\" value=\"chantiers\"/>
    <input type=\"text\" class=\"hide\" id=\"jsonclients\" value=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["jsonclients"]) || array_key_exists("jsonclients", $context) ? $context["jsonclients"] : (function () { throw new RuntimeError('Variable "jsonclients" does not exist.', 18, $this->source); })()), "html", null, true);
        yield "\">

    <section class=\"content fixed-top\">
        <div class=\"container-fluid\" style=\"margin: 0 14px 0 14px\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div id=\"ressult\" style=\"width: 100%; align-content: start\" class=\"text-left\"></div>
                </div>
            </div>
        </div>
    </section>

    <div class=\"modal fade right\" id=\"modalClient\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header col-white bg-green p-l-20 hide\" id=\"clfa\">
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                        <i class=\"icofont-minus-circle icofont-1x\"></i>
                        MODIFIER UN CLIENT</h3>
                </div>
                <div class=\"modal-header col-white bg-pri p-l-20\" id=\"clfb\">
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                        <i class=\"icofont-plus-circle icofont-1x\"></i>
                        AJOUTER UN CLIENT</h3>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
        // line 46
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 46, $this->source); })()), 'form_start', ["attr" => ["id" => "addClientForm"]]);
        yield "
                        ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 47, $this->source); })()), "_token", [], "any", false, false, false, 47), 'row');
        yield "
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label pri bolo\">CLIENT<span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 54, $this->source); })()), "nomclient", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control cls"]]);
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
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 64, $this->source); })()), "adresse", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control cls"]]);
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
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 74, $this->source); })()), "contact", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "form-control cls"]]);
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
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 84, $this->source); })()), "contribuable", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-control cls"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center hide\" id=\"divClienter\">
                            <input type=\"submit\" id=\"updateClient\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect col-white bg-green\"/>
                            <div type=\"button\" id=\"closeClient\" class=\"btn btn-link waves-effect col-white bg-pink\"
                                 data-dismiss=\"modal\">
                                ANNULER
                            </div>
                        </div>
                        <div class=\"text-center\" id=\"divClient\">
                            <input type=\"submit\" id=\"addClient\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect col-white bg-pri\">
                            <div type=\"button\" id=\"closeClient\" class=\"btn btn-link waves-effect col-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <img src=\"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadClient\"/>
                        </div>
                        ";
        // line 109
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 109, $this->source); })()), 'form_end');
        yield "
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalChantier\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">

                <div class=\"modal-header col-white bg-green p-l-20 hide\" id=\"chfa\">
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                        <i class=\"icofont-minus-circle icofont-1x\"></i>
                        MODIFIER UN CHANTIER</h3>
                </div>

                <div class=\"modal-header col-white bg-pri p-l-20\" id=\"chfb\">
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                        <i class=\"icofont-plus-circle icofont-1x\"></i>
                        AJOUTER UN CHANTIER</h3>
                </div>

                <div class=\"modal-body m-t-10 bien\">
                    ";
        // line 134
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 134, $this->source); })()), 'form_start', ["attr" => ["id" => "addChantierForm"]]);
        yield "
                    <input type=\"hidden\" name=\"token\" value=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addChantierToken"), "html", null, true);
        yield "\"/>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label pri bolo\">CLIENT<span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    <select class=\"form-control chrs supper selclient\" name=\"client\"
                                            id=\"client\"></select>
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
        // line 154
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 154, $this->source); })()), "nomchantier", [], "any", false, false, false, 154), 'widget', ["attr" => ["class" => "form-control chr"]]);
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
        // line 164
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 164, $this->source); })()), "contrat", [], "any", false, false, false, 164), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 174
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 174, $this->source); })()), "localisation", [], "any", false, false, false, 174), 'widget', ["attr" => ["class" => "form-control chr"]]);
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
        // line 184
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 184, $this->source); })()), "sous", [], "any", false, false, false, 184), 'widget', ["required" => "", "attr" => ["class" => "form-control chr"]]);
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
        // line 194
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 194, $this->source); })()), "description", [], "any", false, false, false, 194), 'widget', ["required" => "", "id" => "description", "attr" => ["class" => "form-control chr"]]);
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
                    <div class=\"text-center hide\" id=\"divChantiere\">
                        <input type=\"submit\" id=\"updateChr\" value=\"MODIFIER\"
                               class=\"btn btn-link waves-effect col-white bg-green\">
                        <div type=\"button\" id=\"closeChantier\" class=\"btn btn-link waves-effect col-white bg-pink\"
                             data-dismiss=\"modal\">
                            ANNULER
                        </div>
                    </div>
                    <div class=\"text-center\" id=\"divChantier\">
                        <input type=\"submit\" id=\"addChantier\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect col-white bg-pri\">
                        <div type=\"button\" id=\"closeChantier\" class=\"btn btn-link waves-effect col-white bg-pink\"
                             data-dismiss=\"modal\">
                            FERMER
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <img src=\"";
        // line 248
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadChantier\"></div>
                    ";
        // line 250
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 250, $this->source); })()), 'form_end');
        yield "

                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalDevis\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-blue col-white\">
                    <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">CRÉER UN DEVIS</h4>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
        // line 265
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 265, $this->source); })()), 'form_start', ["attr" => ["id" => "addDevisForm"]]);
        yield "
                        <input type=\"hidden\" name=\"token\" value=\"";
        // line 266
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addDevisToken"), "html", null, true);
        yield "\"/>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">CHANTIER</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        <select class=\"form-control selchantier\" name=\"chantier\" id=\"refchan\"></select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">

                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">DEVISE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 283
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 283, $this->source); })()), "monnaie", [], "any", false, false, false, 283), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 293
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 293, $this->source); })()), "devreference", [], "any", false, false, false, 293), 'widget', ["id" => "editor5", "attr" => ["class" => "form-control"]]);
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
        // line 303
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 303, $this->source); })()), "tva", [], "any", false, false, false, 303), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">DATE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 311
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 311, $this->source); })()), "date", [], "any", false, false, false, 311), 'widget', ["attr" => ["class" => "form-control datepicker"]]);
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
        // line 321
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 321, $this->source); })()), "ptva", [], "any", false, false, false, 321), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">AVEC BASE TVA?</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 329
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 329, $this->source); })()), "abasetva", [], "any", false, false, false, 329), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 340
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 340, $this->source); })()), "aarem", [], "any", false, false, false, 340), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">AVEC COLONNE ZONE?</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 348
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 348, $this->source); })()), "zone", [], "any", false, false, false, 348), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 358
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 358, $this->source); })()), "aaref", [], "any", false, false, false, 358), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">VALIDITÉ DU DEVIS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 366
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 366, $this->source); })()), "validit", [], "any", false, false, false, 366), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 376
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 376, $this->source); })()), "modele", [], "any", false, false, false, 376), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">MODÈLE DE RÉSULTATS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 384
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 384, $this->source); })()), "model", [], "any", false, false, false, 384), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 394
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 394, $this->source); })()), "conditions", [], "any", false, false, false, 394), 'widget', ["id" => "editor6", "attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"addeDevis\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect col-white bg-blue\">
                            <div type=\"button\" id=\"closeDevis\" class=\"btn btn-link waves-effect col-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"";
        // line 406
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadDevis\"></div>
                        ";
        // line 408
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formDevis"]) || array_key_exists("formDevis", $context) ? $context["formDevis"] : (function () { throw new RuntimeError('Variable "formDevis" does not exist.', 408, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalBon\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-blue col-white\">
                    <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">CRÉER UN BON DE COMMANDE</h4>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
        // line 423
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 423, $this->source); })()), 'form_start', ["attr" => ["id" => "addBonForm"]]);
        yield "
                        <input type=\"hidden\" name=\"token\" value=\"";
        // line 424
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addBonToken"), "html", null, true);
        yield "\"/>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">CHANTIER</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        <select class=\"form-control selchantier\" name=\"chantier\" id=\"bonchan\"></select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DEVIS VALIDÉS
                                    <span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 442
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 442, $this->source); })()), "devis", [], "any", false, false, false, 442), 'widget', ["id" => "bondevis", "attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                    <p class=\"h6 codev\"></p>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">TYPE DE BON<span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 452
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 452, $this->source); })()), "type", [], "any", false, false, false, 452), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">CONTACT</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 462
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 462, $this->source); })()), "contact", [], "any", false, false, false, 462), 'widget', ["id" => "comcon", "required" => "", "attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                    <p class=\"h6 cocon\"></p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">RÉFÉRENCE OU OBJET<span
                                            class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 475
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 475, $this->source); })()), "bonreference", [], "any", false, false, false, 475), 'widget', ["id" => "editor7", "attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">DEVISE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 486
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 486, $this->source); })()), "monnaie", [], "any", false, false, false, 486), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">TVA(%)</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 494
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 494, $this->source); })()), "tva", [], "any", false, false, false, 494), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 504
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 504, $this->source); })()), "ptva", [], "any", false, false, false, 504), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">BON AVEC REMISE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 512
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 512, $this->source); })()), "aarem", [], "any", false, false, false, 512), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">COLONNE RÉFÉRENCE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 522
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 522, $this->source); })()), "aaref", [], "any", false, false, false, 522), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">DATE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 530
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 530, $this->source); })()), "date", [], "any", false, false, false, 530), 'widget', ["attr" => ["class" => "form-control datepicker"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">INFORMATIONS SUR LE BON</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 540
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 540, $this->source); })()), "conditions", [], "any", false, false, false, 540), 'widget', ["id" => "editor8", "attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"addeBon\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect col-white bg-blue\">
                            <div type=\"button\" id=\"closeBon\" class=\"btn btn-link waves-effect col-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"";
        // line 552
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadBon\"></div>
                        <br>
                        <br>
                        <br>
                        ";
        // line 557
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 557, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"large\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"shadow bg-white devtohide\" style=\"height:29.7cm; margin: auto; padding: 0.6cm;\"
                     id=\"shacontent\">
                    <iframe id=\"frame\" src=\"\" style=\"width: 100%; height: 100%; border: none;\"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalDecompte\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-blue col-white\">
                    <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">CRÉER UN DÉCOMPTE</h4>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
        // line 583
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formDecompte"]) || array_key_exists("formDecompte", $context) ? $context["formDecompte"] : (function () { throw new RuntimeError('Variable "formDecompte" does not exist.', 583, $this->source); })()), 'form_start', ["attr" => ["id" => "addDecompteForm"]]);
        yield "
                        <input type=\"hidden\" name=\"token\" value=\"";
        // line 584
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("dectoken"), "html", null, true);
        yield "\"/>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-5\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DEVIS VALIDÉS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        <select id=\"devdec\" name=\"devdec\" class=\"form-control\">
                                            <option disabled=\"disabled\" selected=\"selected\">Choisir un devis</option>
                                            ";
        // line 592
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 592, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 593
            yield "                                                ";
            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 593)) && (null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 593)))) {
                // line 594
                yield "                                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 594));
                foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                    // line 595
                    yield "                                                        ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 595))) {
                        // line 596
                        yield "                                                            ";
                        $context["oop"] = 0;
                        // line 597
                        yield "                                                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "devis", [], "any", false, false, false, 597));
                        foreach ($context['_seq'] as $context["_key"] => $context["dev"]) {
                            // line 598
                            yield "                                                                ";
                            $context["op"] = 0;
                            // line 599
                            yield "                                                                ";
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "decomptes", [], "any", false, false, false, 599));
                            foreach ($context['_seq'] as $context["_key"] => $context["dec"]) {
                                // line 600
                                yield "                                                                    ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["dec"], "avancement", [], "any", false, false, false, 600) == 100)) {
                                    // line 601
                                    yield "                                                                        ";
                                    $context["op"] = ((isset($context["op"]) || array_key_exists("op", $context) ? $context["op"] : (function () { throw new RuntimeError('Variable "op" does not exist.', 601, $this->source); })()) + 1);
                                    // line 602
                                    yield "                                                                    ";
                                }
                                // line 603
                                yield "                                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['dec'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 604
                            yield "                                                                ";
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "etat", [], "any", false, false, false, 604) == "valide") && ((isset($context["op"]) || array_key_exists("op", $context) ? $context["op"] : (function () { throw new RuntimeError('Variable "op" does not exist.', 604, $this->source); })()) == 0))) {
                                // line 605
                                yield "                                                                    ";
                                $context["oop"] = ((isset($context["oop"]) || array_key_exists("oop", $context) ? $context["oop"] : (function () { throw new RuntimeError('Variable "oop" does not exist.', 605, $this->source); })()) + 1);
                                // line 606
                                yield "                                                                ";
                            }
                            // line 607
                            yield "                                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['dev'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 608
                        yield "
                                                            ";
                        // line 609
                        if (((isset($context["oop"]) || array_key_exists("oop", $context) ? $context["oop"] : (function () { throw new RuntimeError('Variable "oop" does not exist.', 609, $this->source); })()) > 0)) {
                            // line 610
                            yield "                                                                <optgroup
                                                                        label=\"";
                            // line 611
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 611)), "html", null, true);
                            yield " | ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 611)), "html", null, true);
                            yield "\">
                                                                    ";
                            // line 612
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "devis", [], "any", false, false, false, 612));
                            foreach ($context['_seq'] as $context["_key"] => $context["dev"]) {
                                // line 613
                                yield "                                                                        ";
                                $context["op"] = 0;
                                // line 614
                                yield "                                                                        ";
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "decomptes", [], "any", false, false, false, 614));
                                foreach ($context['_seq'] as $context["_key"] => $context["dec"]) {
                                    // line 615
                                    yield "                                                                            ";
                                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["dec"], "avancement", [], "any", false, false, false, 615) == 100)) {
                                        // line 616
                                        yield "                                                                                ";
                                        $context["op"] = ((isset($context["op"]) || array_key_exists("op", $context) ? $context["op"] : (function () { throw new RuntimeError('Variable "op" does not exist.', 616, $this->source); })()) + 1);
                                        // line 617
                                        yield "                                                                            ";
                                    }
                                    // line 618
                                    yield "                                                                        ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_key'], $context['dec'], $context['_parent']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 619
                                yield "                                                                        ";
                                if (((CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "etat", [], "any", false, false, false, 619) == "valide") && ((isset($context["op"]) || array_key_exists("op", $context) ? $context["op"] : (function () { throw new RuntimeError('Variable "op" does not exist.', 619, $this->source); })()) == 0))) {
                                    // line 620
                                    yield "                                                                            <option value=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "id", [], "any", false, false, false, 620), "html", null, true);
                                    yield "\"
                                                                                    class=\"";
                                    // line 621
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "id", [], "any", false, false, false, 621), "html", null, true);
                                    yield "\">";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "iddevis", [], "any", false, false, false, 621), "html", null, true);
                                    yield "</option>
                                                                        ";
                                }
                                // line 623
                                yield "                                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['dev'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 624
                            yield "                                                                </optgroup>
                                                            ";
                        }
                        // line 626
                        yield "                                                        ";
                    }
                    // line 627
                    yield "                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 628
                yield "                                                ";
            }
            // line 629
            yield "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 630
        yield "                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-7\">
                                <label class=\"form-label m-b--30 col-blue bolo\">ACOMPTE DE DEMARRAGE(%)</label>
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
        // line 649
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDecompte"]) || array_key_exists("formDecompte", $context) ? $context["formDecompte"] : (function () { throw new RuntimeError('Variable "formDecompte" does not exist.', 649, $this->source); })()), "garantie", [], "any", false, false, false, 649), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 658
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDecompte"]) || array_key_exists("formDecompte", $context) ? $context["formDecompte"] : (function () { throw new RuntimeError('Variable "formDecompte" does not exist.', 658, $this->source); })()), "finition", [], "any", false, false, false, 658), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 669
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDecompte"]) || array_key_exists("formDecompte", $context) ? $context["formDecompte"] : (function () { throw new RuntimeError('Variable "formDecompte" does not exist.', 669, $this->source); })()), "prorata", [], "any", false, false, false, 669), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 678
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formDecompte"]) || array_key_exists("formDecompte", $context) ? $context["formDecompte"] : (function () { throw new RuntimeError('Variable "formDecompte" does not exist.', 678, $this->source); })()), "date", [], "any", false, false, false, 678), 'widget', ["attr" => ["class" => "form-control datepicker"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"addeDecompte\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect col-white bg-blue\">
                            <div type=\"button\" id=\"closeDecompte\" class=\"btn btn-link waves-effect col-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"";
        // line 690
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadDecompte\"></div>
                        ";
        // line 692
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formDecompte"]) || array_key_exists("formDecompte", $context) ? $context["formDecompte"] : (function () { throw new RuntimeError('Variable "formDecompte" does not exist.', 692, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalFacture\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-blue col-white\">
                    <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">CRÉER UNE FACTURE</h4>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
        // line 707
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 707, $this->source); })()), 'form_start', ["attr" => ["id" => "addFactureForm"]]);
        yield "
                        ";
        // line 708
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 708, $this->source); })()), "_token", [], "any", false, false, false, 708), 'row');
        yield "
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DATE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 714
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 714, $this->source); })()), "date", [], "any", false, false, false, 714), 'widget', ["attr" => ["class" => "form-control datepicker"]]);
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
        // line 723
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 723, $this->source); })()), "type", [], "any", false, false, false, 723), 'widget', ["id" => "facselect", "attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DEVIS VALIDÉS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 733
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 733, $this->source); })()), "devis", [], "any", false, false, false, 733), 'widget', ["required" => "", "attr" => ["class" => "form-control devo"]]);
        yield "
                                    </div>
                                    <p class=\"col-pink h6 dvo\"></p>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DÉCOMPTES VALIDÉS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 742
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 742, $this->source); })()), "decompte", [], "any", false, false, false, 742), 'widget', ["required" => "", "attr" => ["class" => "form-control deco"]]);
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
        // line 753
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 753, $this->source); })()), "factreference", [], "any", false, false, false, 753), 'widget', ["id" => "editor3", "attr" => ["class" => "form-control"]]);
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
        // line 763
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 763, $this->source); })()), "information", [], "any", false, false, false, 763), 'widget', ["id" => "editor4", "attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"addeFacture\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect col-white bg-blue\">
                            <div type=\"button\" id=\"closeFacture\" class=\"btn btn-link waves-effect col-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"";
        // line 775
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadFacture\">
                        </div>
                        <br><br><br>
                        ";
        // line 779
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formFacture"]) || array_key_exists("formFacture", $context) ? $context["formFacture"] : (function () { throw new RuntimeError('Variable "formFacture" does not exist.', 779, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalContact\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header col-white bg-green p-l-20 hide\" id=\"cofa\">
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                        <i class=\"icofont-minus-circle icofont-1x\"></i>
                        MODIFIER UN CONTACT</h3>
                </div>

                <div class=\"modal-header col-white bg-pri p-l-20\" id=\"cofb\">
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                        <i class=\"icofont-plus-circle icofont-1x\"></i>
                        AJOUTER UN CONTACT</h3>
                </div>

                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
        // line 803
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 803, $this->source); })()), 'form_start', ["attr" => ["id" => "addContactForm"]]);
        yield "
                        <input type=\"hidden\" name=\"token\" value=\"";
        // line 804
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addContactToken"), "html", null, true);
        yield "\"/>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">CLIENTS<span
                                            class=\"col-red\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        <select class=\"form-control cohr supper selclient\" name=\"client\"
                                                id=\"client\"></select>
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
        // line 823
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 823, $this->source); })()), "contact", [], "any", false, false, false, 823), 'widget', ["attr" => ["class" => "form-control chors"]]);
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
        // line 833
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 833, $this->source); })()), "fonction", [], "any", false, false, false, 833), 'widget', ["attr" => ["class" => "form-control cohr"]]);
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
        // line 843
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 843, $this->source); })()), "mail", [], "any", false, false, false, 843), 'widget', ["attr" => ["class" => "form-control cohr"]]);
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
        // line 853
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 853, $this->source); })()), "phone", [], "any", false, false, false, 853), 'widget', ["attr" => ["class" => "form-control cohr"]]);
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
        // line 863
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 863, $this->source); })()), "bureau", [], "any", false, false, false, 863), 'widget', ["attr" => ["class" => "form-control cohr"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <div class=\"text-center hide\" id=\"divContacte\">
                                <input type=\"text\" class=\"hide\" id=\"idcontact\" value=\"";
        // line 870
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 870, $this->source); })()), "id", [], "any", false, false, false, 870), "html", null, true);
        yield "\">
                                <input type=\"submit\" id=\"updateContact\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect col-white bg-green\">
                                <div type=\"button\" id=\"closeContact\"
                                     class=\"btn btn-link waves-effect col-white bg-pink\"
                                     data-dismiss=\"modal\">
                                    ANNULER
                                </div>
                            </div>

                            <div class=\"text-center\" id=\"divContact\">
                                <input type=\"submit\" id=\"addeContact\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect col-white bg-blue\">
                                <div type=\"button\" id=\"closeContact\"
                                     class=\"btn btn-link waves-effect col-white bg-pink\"
                                     data-dismiss=\"modal\">
                                    FERMER
                                </div>
                            </div>
                            <img src=\"";
        // line 889
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadContact\">

                        </div>
                        ";
        // line 893
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 893, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class=\"content\" style=\"margin-top: -20px !important;\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row clearfix m-t-50\">
                    <div class=\"col-sm-12 \">
                        <h4 class=\"bolo700 col-deep-orange\">GESTION DES CHANTIERS</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"content\" id=\"setchantier\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row clearfix\">
                    <div class=\"col-sm-12 \">
                        <h4 class=\"bolo700\">
                            Clients - Chantiers - Contacts
                        </h4>
                    </div>
                </div>
                <div class=\"row clearfix p-b-5\">
                    <div class=\"col-sm-12\">
                        <div class=\"btn-group btn-group-sm\" role=\"group\" aria-label=\"Small button group\">
                            <button type=\"button\" data-toggle=\"modal\" data-target=\"#modalClient\"
                                    class=\"btn bg-purple text-white\" style=\"border:1px solid #dddfeb\">+ CLIENT
                            </button>
                            <button type=\"button\" data-toggle=\"modal\" data-target=\"#modalChantier\"
                                    class=\"btn bg-blue text-white\" style=\"border:1px solid #dddfeb\">+ CHANTIER
                            </button>
                            <button type=\"button\" data-toggle=\"modal\" data-target=\"#modalContact\"
                                    class=\"btn bg-blue-grey text-white\" style=\"border:1px solid #dddfeb\">+ CONTACT
                            </button>

                            ";
        // line 934
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["devis"]) || array_key_exists("devis", $context) ? $context["devis"] : (function () { throw new RuntimeError('Variable "devis" does not exist.', 934, $this->source); })()), "id", [], "any", false, false, false, 934))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 935
            yield "                                <button type=\"button\" data-toggle=\"modal\" data-target=\"#modalDevis\"
                                        class=\"btn btn-success\" style=\"border:1px solid #dddfeb\">- DEVIS D'ACHAT
                                </button>
                            ";
        } else {
            // line 939
            yield "                                <button type=\"button\" data-toggle=\"modal\" data-target=\"#modalDevis\"
                                        class=\"btn bg-pri text-white\" style=\"border:1px solid #dddfeb\">+ DEVIS D'ACHAT
                                </button>
                            ";
        }
        // line 943
        yield "

                            ";
        // line 945
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["decompte"]) || array_key_exists("decompte", $context) ? $context["decompte"] : (function () { throw new RuntimeError('Variable "decompte" does not exist.', 945, $this->source); })()), "id", [], "any", false, false, false, 945))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 946
            yield "                                <button type=\"button\" data-toggle=\"modal\" data-target=\"#modalDecompte\"
                                        class=\"btn btn-success\" style=\"border:1px solid #dddfeb\">- DÉCOMPTE
                                </button>
                            ";
        } else {
            // line 950
            yield "                                <button type=\"button\" data-toggle=\"modal\" data-target=\"#modalDecompte\"
                                        class=\"btn bg-deep-orange text-white\" style=\"border:1px solid #dddfeb\">+
                                    DÉCOMPTE
                                </button>
                            ";
        }
        // line 955
        yield "
                            ";
        // line 956
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 956, $this->source); })()), "id", [], "any", false, false, false, 956))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 957
            yield "                                <button type=\"button\" data-toggle=\"modal\" data-target=\"#modalFacture\"
                                        class=\"btn btn-success\" style=\"border:1px solid #dddfeb\">- FACTURE
                                </button>
                            ";
        } else {
            // line 961
            yield "                                <button type=\"button\" data-toggle=\"modal\" data-target=\"#modalFacture\"
                                        class=\"btn bg-blue-grey text-white\" style=\"border:1px solid #dddfeb\">+
                                    FACTURE
                                </button>
                            ";
        }
        // line 966
        yield "                        </div>
                    </div>
                </div>

                ";
        // line 970
        $context["countClient"] = 0;
        // line 971
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 971, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 972
            yield "                    ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 972))) {
                // line 973
                yield "                        ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 973))) {
                    // line 974
                    yield "                            ";
                    $context["countClient"] = ((isset($context["countClient"]) || array_key_exists("countClient", $context) ? $context["countClient"] : (function () { throw new RuntimeError('Variable "countClient" does not exist.', 974, $this->source); })()) + 1);
                    // line 975
                    yield "                        ";
                }
                // line 976
                yield "                    ";
            }
            // line 977
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 978
        yield "                <div class=\"panel-group\" id=\"accordion_1\" role=\"tablist\" aria-multiselectable=\"true\">
                    <div class=\"panel panel-pri shadow\" style=\"border-left: 2px solid #A9A9A9\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingOne_1\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed col-white outai\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_0\" href=\"#collapseOne_0\" aria-expanded=\"false\"
                                   aria-controls=\"collapseOne_0\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Clients<span
                                            class=\"badge bg-pink\"
                                            style=\"float: right !important;\">";
        // line 987
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["countClient"]) || array_key_exists("countClient", $context) ? $context["countClient"] : (function () { throw new RuntimeError('Variable "countClient" does not exist.', 987, $this->source); })()), "html", null, true);
        yield "</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseOne_0\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingOne_0\">
                            <div class=\"panel-body\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow:scroll\">
                                    <table class=\"table-striped table-bordered display nowrape\" style=\"width: 100%\"
                                           id=\"dataClients\">
                                        <thead>
                                        <tr>
                                            <th class=\"text-center\" style=\"Emin-width: 30px !important;\"></th>
                                            <th>CLIENTS</th>
                                            <th class=\"text-center\">ADRESSE</th>
                                            <th class=\"text-center\">CONTACTS</th>
                                            <th class=\"text-center\">COMPTE&nbsp;C.</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 1007
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 1007, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 1008
            yield "                                            ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 1008))) {
                // line 1009
                yield "                                                ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 1009))) {
                    // line 1010
                    yield "                                                    <tr>
                                                        <td class=\"text-center\">
                                                            <input type=\"checkbox\" data-toggle=\"toggle\" class=\"CLYE\"
                                                                   value=\"";
                    // line 1013
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 1013), "html", null, true);
                    yield "\"></td>
                                                        <td>
                                                            <a href=\"";
                    // line 1015
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 1015)]), "html", null, true);
                    yield "\"
                                                               class=\"col-blue bolo700\"
                                                               title=\"";
                    // line 1017
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 1017)), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 1017)), "html", null, true);
                    yield "</a>
                                                        </td>
                                                        <td class=\"text-center\">";
                    // line 1019
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "adresse", [], "any", false, false, false, 1019), "html", null, true);
                    yield "</td>
                                                        <td class=\"text-center\">";
                    // line 1020
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "contact", [], "any", false, false, false, 1020), "html", null, true);
                    yield "</td>
                                                        <td class=\"text-center\">";
                    // line 1021
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "contribuable", [], "any", false, false, false, 1021), "html", null, true);
                    yield "</td>
                                                    </tr>
                                                ";
                }
                // line 1024
                yield "                                            ";
            }
            // line 1025
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1026
        yield "                                        </tbody>
                                    </table>
                                    <br/>

                                </div>
                            </div>
                        </div>
                    </div>

                    ";
        // line 1035
        $context["countEtude"] = 0;
        // line 1036
        yield "                    ";
        $context["countEchouer"] = 0;
        // line 1037
        yield "                    ";
        $context["countEncours"] = 0;
        // line 1038
        yield "                    ";
        $context["countSous"] = 0;
        // line 1039
        yield "                    ";
        $context["countTerminer"] = 0;
        // line 1040
        yield "                    ";
        $context["countCloturer"] = 0;
        // line 1041
        yield "                    ";
        $context["countTout"] = 0;
        // line 1042
        yield "
                    ";
        // line 1043
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 1043, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 1044
            yield "                        ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 1044))) {
                // line 1045
                yield "                            ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 1045))) {
                    // line 1046
                    yield "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 1046));
                    foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                        // line 1047
                        yield "                                    ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 1047) == "etude") && (null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 1047)))) {
                            // line 1048
                            yield "                                        ";
                            $context["countEtude"] = ((isset($context["countEtude"]) || array_key_exists("countEtude", $context) ? $context["countEtude"] : (function () { throw new RuntimeError('Variable "countEtude" does not exist.', 1048, $this->source); })()) + 1);
                            // line 1049
                            yield "                                    ";
                        }
                        // line 1050
                        yield "                                    ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 1050) == "echouer") && (null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 1050)))) {
                            // line 1051
                            yield "                                        ";
                            $context["countEchouer"] = ((isset($context["countEchouer"]) || array_key_exists("countEchouer", $context) ? $context["countEchouer"] : (function () { throw new RuntimeError('Variable "countEchouer" does not exist.', 1051, $this->source); })()) + 1);
                            // line 1052
                            yield "                                    ";
                        }
                        // line 1053
                        yield "                                    ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 1053) == "encours") && (null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 1053)))) {
                            // line 1054
                            yield "                                        ";
                            $context["countEncours"] = ((isset($context["countEncours"]) || array_key_exists("countEncours", $context) ? $context["countEncours"] : (function () { throw new RuntimeError('Variable "countEncours" does not exist.', 1054, $this->source); })()) + 1);
                            // line 1055
                            yield "                                    ";
                        }
                        // line 1056
                        yield "                                    ";
                        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "sous", [], "any", false, false, false, 1056))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 1057
                            yield "                                        ";
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 1057) == "encours") && (null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 1057)))) {
                                // line 1058
                                yield "                                            ";
                                $context["countSous"] = ((isset($context["countSous"]) || array_key_exists("countSous", $context) ? $context["countSous"] : (function () { throw new RuntimeError('Variable "countSous" does not exist.', 1058, $this->source); })()) + 1);
                                // line 1059
                                yield "                                        ";
                            }
                            // line 1060
                            yield "                                    ";
                        }
                        // line 1061
                        yield "                                    ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 1061) == "archiver") && (null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 1061)))) {
                            // line 1062
                            yield "                                        ";
                            $context["countTerminer"] = ((isset($context["countTerminer"]) || array_key_exists("countTerminer", $context) ? $context["countTerminer"] : (function () { throw new RuntimeError('Variable "countTerminer" does not exist.', 1062, $this->source); })()) + 1);
                            // line 1063
                            yield "                                    ";
                        }
                        // line 1064
                        yield "                                    ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 1064) == "cloturer") && (null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 1064)))) {
                            // line 1065
                            yield "                                        ";
                            $context["countCloturer"] = ((isset($context["countCloturer"]) || array_key_exists("countCloturer", $context) ? $context["countCloturer"] : (function () { throw new RuntimeError('Variable "countCloturer" does not exist.', 1065, $this->source); })()) + 1);
                            // line 1066
                            yield "                                    ";
                        }
                        // line 1067
                        yield "                                    ";
                        if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 1067))) {
                            // line 1068
                            yield "                                        ";
                            $context["countTout"] = ((isset($context["countTout"]) || array_key_exists("countTout", $context) ? $context["countTout"] : (function () { throw new RuntimeError('Variable "countTout" does not exist.', 1068, $this->source); })()) + 1);
                            // line 1069
                            yield "                                    ";
                        }
                        // line 1070
                        yield "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1071
                    yield "                            ";
                }
                // line 1072
                yield "                        ";
            }
            // line 1073
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1074
        yield "
                    <div class=\"panel panel-pri shadow\"
                         style=\"border-left: 2px solid #6636f6; margin-top: 20px !important\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingEtu_1\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed outai col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseEtu_1p\" aria-expanded=\"false\"
                                   aria-controls=\"collapseEtu_1\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Chantiers
                                    en étude<span
                                            class=\"badge bg-pink\"
                                            style=\"float: right !important;\">";
        // line 1085
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["countEtude"]) || array_key_exists("countEtude", $context) ? $context["countEtude"] : (function () { throw new RuntimeError('Variable "countEtude" does not exist.', 1085, $this->source); })()), "html", null, true);
        yield "</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseEtu_1p\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingEtu_1\">
                            <div class=\"panel-body\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow: scroll\">
                                    <table class=\"table-striped table-bordered display nowrape\" id=\"dataEtude\"
                                           style=\"width:100%\">

                                        ";
        // line 1096
        $context["solde"] = 0;
        // line 1097
        yield "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 1097, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 1098
            yield "                                            ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 1098))) {
                // line 1099
                yield "                                                ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 1099))) {
                    // line 1100
                    yield "                                                    ";
                    $context["vp"] = 0;
                    // line 1101
                    yield "                                                    ";
                    $context["vr"] = 0;
                    // line 1102
                    yield "                                                    ";
                    $context["dp"] = 0;
                    // line 1103
                    yield "
                                                    ";
                    // line 1104
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 1104));
                    foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                        // line 1105
                        yield "                                                        ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 1105) == "etude") && (null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 1105)))) {
                            // line 1106
                            yield "                                                            ";
                            $context["vp"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 1106) + (isset($context["vp"]) || array_key_exists("vp", $context) ? $context["vp"] : (function () { throw new RuntimeError('Variable "vp" does not exist.', 1106, $this->source); })()));
                            // line 1107
                            yield "                                                            ";
                            $context["vr"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 1107) + (isset($context["vr"]) || array_key_exists("vr", $context) ? $context["vr"] : (function () { throw new RuntimeError('Variable "vr" does not exist.', 1107, $this->source); })()));
                            // line 1108
                            yield "                                                            ";
                            $context["dp"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 1108) + (isset($context["dp"]) || array_key_exists("dp", $context) ? $context["dp"] : (function () { throw new RuntimeError('Variable "dp" does not exist.', 1108, $this->source); })()));
                            // line 1109
                            yield "                                                        ";
                        }
                        // line 1110
                        yield "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1111
                    yield "
                                                ";
                }
                // line 1113
                yield "                                            ";
            }
            // line 1114
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1115
        yield "                                        <thead>
                                        <tr class=\"font-weight-normal\">
                                            <th style=\"min-width: 30px !important;\"></th>
                                            <th class=\"col-blue-grey\">CHANTIERS / CLIENT</th>
                                            <th class=\"text-center col-blue-grey\">CLIENT</th>
                                            <th class=\"text-center col-blue-grey\">COÛT PRÉVU</th>
                                            <th class=\"text-center col-blue-grey\">RÈGLEMENT</th>
                                            <th class=\"text-center col-blue-grey\">SOLDE</th>
                                            <th class=\"text-center col-blue-grey\">COMMANDES</th>
                                            <th class=\"text-center col-blue-grey\">BALANCE</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        ";
        // line 1129
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 1129, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 1130
            yield "                                            ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 1130))) {
                // line 1131
                yield "                                                ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 1131))) {
                    // line 1132
                    yield "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 1132));
                    foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                        // line 1133
                        yield "                                                        ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 1133) == "etude")) {
                            // line 1134
                            yield "                                                            ";
                            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 1134))) {
                                // line 1135
                                yield "                                                                ";
                                $context["solde"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 1135) - CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 1135));
                                // line 1136
                                yield "                                                                <tr>
                                                                    <td class=\"text-center\">
                                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                               class=\"PROETU\"
                                                                               value=\"";
                                // line 1140
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 1140), "html", null, true);
                                yield "\">
                                                                    </td>
                                                                    <td>
                                                                        <a href=\"";
                                // line 1143
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 1143)]), "html", null, true);
                                yield "\"
                                                                           title=\"";
                                // line 1144
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 1144), "html", null, true);
                                yield "\"
                                                                           class=\"bolo600\">
                                                                            ";
                                // line 1146
                                if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "sous", [], "any", false, false, false, 1146))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    // line 1147
                                    yield "                                                                                <span class=\"badge bg-orange\">SC</span>
                                                                            ";
                                }
                                // line 1149
                                yield "                                                                            ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 1149))), "truncate", [30, "...", false], "method", false, false, false, 1149), "html", null, true);
                                yield "
                                                                        </a>
                                                                    </td>
                                                                    <td class=\"bolo600\"><a
                                                                                href=\"";
                                // line 1153
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 1153)]), "html", null, true);
                                yield "\"
                                                                                class=\"col-white bolo700\">";
                                // line 1154
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 1154)), "html", null, true);
                                yield "</a>
                                                                    </td>
                                                                    <td class=\"text-right\">";
                                // line 1156
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 1156), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                    <td class=\"text-right\">";
                                // line 1157
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 1157), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                    <td style=\"text-align: right\">";
                                // line 1158
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["solde"]) || array_key_exists("solde", $context) ? $context["solde"] : (function () { throw new RuntimeError('Variable "solde" does not exist.', 1158, $this->source); })()), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                    <td style=\"text-align: right\">";
                                // line 1159
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 1159), 2, ",", " "), "html", null, true);
                                yield "</td>

                                                                    ";
                                // line 1161
                                $context["balance"] = ($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 1161), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 1161), 2, ".", ""));
                                // line 1162
                                yield "
                                                                    <td style=\"text-align: right\">";
                                // line 1163
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["balance"]) || array_key_exists("balance", $context) ? $context["balance"] : (function () { throw new RuntimeError('Variable "balance" does not exist.', 1163, $this->source); })()), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                </tr>
                                                            ";
                            }
                            // line 1166
                            yield "                                                        ";
                        }
                        // line 1167
                        yield "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1168
                    yield "                                                ";
                }
                // line 1169
                yield "                                            ";
            }
            // line 1170
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1171
        yield "
                                        </tbody>
                                        <tfoot>
                                        <tr class=\"font-weight-normal\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th></th>
                                            <th class=\"text-right bg-blue\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                    <br/>
                                    <p>
                                        <span class=\"col-orange\">&raquo; SC:</span>
                                        <span class=\"col-blue-grey\">SOUS-CHANTIER</span>
                                        <br></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-pri shadow\"
                         style=\"border-left: 2px solid #00BCD4;\">
                        <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingEcho_1\">
                            <h4 class=\"panel-title\">
                                <a class=\"collapsed outai col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseEcho_1\" aria-expanded=\"false\"
                                   aria-controls=\"collapseEcho_1\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Chantiers
                                    échoués<span
                                            class=\"badge bg-pink\"
                                            style=\"float: right !important;\">";
        // line 1205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["countEchouer"]) || array_key_exists("countEchouer", $context) ? $context["countEchouer"] : (function () { throw new RuntimeError('Variable "countEchouer" does not exist.', 1205, $this->source); })()), "html", null, true);
        yield "</span>
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapseEcho_1\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingEcho_1\">
                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px;\">
                                    <table class=\"table-striped table-bordered display nowrape\" id=\"dataEchoue\"
                                           style=\"width: 100%\">


                                        ";
        // line 1217
        $context["solde"] = 0;
        // line 1218
        yield "
                                        ";
        // line 1219
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 1219, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 1220
            yield "                                            ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 1220))) {
                // line 1221
                yield "                                                ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 1221))) {
                    // line 1222
                    yield "
                                                    ";
                    // line 1223
                    $context["vp"] = 0;
                    // line 1224
                    yield "                                                    ";
                    $context["vr"] = 0;
                    // line 1225
                    yield "                                                    ";
                    $context["dp"] = 0;
                    // line 1226
                    yield "
                                                    ";
                    // line 1227
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 1227));
                    foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                        // line 1228
                        yield "                                                        ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 1228) == "echouer") && (null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 1228)))) {
                            // line 1229
                            yield "                                                            ";
                            $context["vp"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 1229) + (isset($context["vp"]) || array_key_exists("vp", $context) ? $context["vp"] : (function () { throw new RuntimeError('Variable "vp" does not exist.', 1229, $this->source); })()));
                            // line 1230
                            yield "                                                            ";
                            $context["vr"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 1230) + (isset($context["vr"]) || array_key_exists("vr", $context) ? $context["vr"] : (function () { throw new RuntimeError('Variable "vr" does not exist.', 1230, $this->source); })()));
                            // line 1231
                            yield "                                                            ";
                            $context["dp"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 1231) + (isset($context["dp"]) || array_key_exists("dp", $context) ? $context["dp"] : (function () { throw new RuntimeError('Variable "dp" does not exist.', 1231, $this->source); })()));
                            // line 1232
                            yield "                                                        ";
                        }
                        // line 1233
                        yield "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1234
                    yield "
                                                ";
                }
                // line 1236
                yield "                                            ";
            }
            // line 1237
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1238
        yield "                                        <thead>
                                        <tr class=\"font-weight-normal\">
                                            <th style=\"min-width: 30px !important;\"></th>
                                            <th class=\"col-blue-grey\">CHANTIERS / CLIENT</th>
                                            <th class=\"text-center col-blue-grey\">COÛT</th>
                                            <th class=\"text-center col-blue-grey\">CLIENT</th>
                                            <th class=\"text-center col-blue-grey\">RÈGLEMENT</th>
                                            <th class=\"text-center col-blue-grey\">SOLDE</th>
                                            <th class=\"text-center col-blue-grey\">COMMANDES</th>
                                            <th class=\"text-center col-blue-grey\">BALANCE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 1251
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 1251, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 1252
            yield "                                            ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 1252))) {
                // line 1253
                yield "                                                ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 1253))) {
                    // line 1254
                    yield "                                                    ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 1254))) {
                        // line 1255
                        yield "                                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 1255));
                        foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                            // line 1256
                            yield "                                                            ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 1256) == "echouer")) {
                                // line 1257
                                yield "                                                                ";
                                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 1257))) {
                                    // line 1258
                                    yield "                                                                    ";
                                    $context["solde"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 1258) - CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 1258));
                                    // line 1259
                                    yield "                                                                    <tr>
                                                                        <td class=\"text-center\">
                                                                            <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                                   class=\"PROECHO\"
                                                                                   value=\"";
                                    // line 1263
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 1263), "html", null, true);
                                    yield "\">
                                                                        </td>
                                                                        <td>
                                                                            <a href=\"";
                                    // line 1266
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 1266)]), "html", null, true);
                                    yield "\"
                                                                               class=\"bolo600\"
                                                                               title=\"";
                                    // line 1268
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 1268), "html", null, true);
                                    yield "\">
                                                                                ";
                                    // line 1269
                                    if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "sous", [], "any", false, false, false, 1269))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                        // line 1270
                                        yield "                                                                                    <span class=\"badge bg-orange\">SC</span>
                                                                                ";
                                    }
                                    // line 1272
                                    yield "                                                                                ";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 1272))), "truncate", [30, "...", false], "method", false, false, false, 1272), "html", null, true);
                                    yield "
                                                                            </a>
                                                                        </td>
                                                                        <td class=\"text-right\">";
                                    // line 1275
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 1275), 2, ",", " "), "html", null, true);
                                    yield "</td>
                                                                        <td class=\"bolo600\">";
                                    // line 1276
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 1276)), "html", null, true);
                                    yield "</td>
                                                                        <td class=\"text-right\">";
                                    // line 1277
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 1277), 2, ",", " "), "html", null, true);
                                    yield "</td>
                                                                        <td style=\"text-align: right\">";
                                    // line 1278
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["solde"]) || array_key_exists("solde", $context) ? $context["solde"] : (function () { throw new RuntimeError('Variable "solde" does not exist.', 1278, $this->source); })()), 2, ",", " "), "html", null, true);
                                    yield "</td>
                                                                        <td style=\"text-align: right\">";
                                    // line 1279
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 1279), 2, ",", " "), "html", null, true);
                                    yield "</td>

                                                                        ";
                                    // line 1281
                                    $context["balance"] = ($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 1281), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 1281), 2, ".", ""));
                                    // line 1282
                                    yield "                                                                        <td style=\"text-align: right\">";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["balance"]) || array_key_exists("balance", $context) ? $context["balance"] : (function () { throw new RuntimeError('Variable "balance" does not exist.', 1282, $this->source); })()), 2, ",", " "), "html", null, true);
                                    yield "</td>
                                                                    </tr>
                                                                ";
                                }
                                // line 1285
                                yield "                                                            ";
                            }
                            // line 1286
                            yield "                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1287
                        yield "                                                    ";
                    }
                    // line 1288
                    yield "                                                ";
                }
                // line 1289
                yield "                                            ";
            }
            // line 1290
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1291
        yield "                                        </tbody>
                                        <tfoot>
                                        <tr class=\"font-weight-normal\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th></th>
                                            <th class=\"text-center bg-blue col-white\"></th>
                                            <th class=\"text-center bg-blue\"></th>
                                            <th class=\"text-center bg-blue col-white\"></th>
                                            <th class=\"text-center bg-blue col-white\"></th>
                                            <th class=\"text-center bg-blue col-white\"></th>
                                            <th class=\"text-center bg-blue col-white\"></th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"panel panel-pri shadow\"
                         style=\"border-left: 2px solid #E91E63; margin-top: 20px !important\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingOne_1\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed outai col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseOne_1p\" aria-expanded=\"false\"
                                   aria-controls=\"collapseOne_1\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Chantiers
                                    en cours<span class=\"badge bg-pink\"
                                                  style=\"float: right !important;\">";
        // line 1319
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["countEncours"]) || array_key_exists("countEncours", $context) ? $context["countEncours"] : (function () { throw new RuntimeError('Variable "countEncours" does not exist.', 1319, $this->source); })()), "html", null, true);
        yield "</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseOne_1p\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingOne_1\">
                            <div class=\"panel-body\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow: scroll\">
                                    <table class=\"table-striped table-bordered display nowrape\" id=\"dataCours\"
                                           style=\"width:100%\">


                                        ";
        // line 1331
        $context["solde"] = 0;
        // line 1332
        yield "
                                        ";
        // line 1333
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 1333, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 1334
            yield "                                            ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 1334))) {
                // line 1335
                yield "                                                ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 1335))) {
                    // line 1336
                    yield "
                                                    ";
                    // line 1337
                    $context["vp"] = 0;
                    // line 1338
                    yield "                                                    ";
                    $context["vr"] = 0;
                    // line 1339
                    yield "                                                    ";
                    $context["dp"] = 0;
                    // line 1340
                    yield "
                                                    ";
                    // line 1341
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 1341));
                    foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                        // line 1342
                        yield "                                                        ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 1342) == "encours") && (null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 1342)))) {
                            // line 1343
                            yield "                                                            ";
                            $context["vp"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 1343) + (isset($context["vp"]) || array_key_exists("vp", $context) ? $context["vp"] : (function () { throw new RuntimeError('Variable "vp" does not exist.', 1343, $this->source); })()));
                            // line 1344
                            yield "                                                            ";
                            $context["vr"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 1344) + (isset($context["vr"]) || array_key_exists("vr", $context) ? $context["vr"] : (function () { throw new RuntimeError('Variable "vr" does not exist.', 1344, $this->source); })()));
                            // line 1345
                            yield "                                                            ";
                            $context["dp"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 1345) + (isset($context["dp"]) || array_key_exists("dp", $context) ? $context["dp"] : (function () { throw new RuntimeError('Variable "dp" does not exist.', 1345, $this->source); })()));
                            // line 1346
                            yield "                                                        ";
                        }
                        // line 1347
                        yield "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1348
                    yield "
                                                ";
                }
                // line 1350
                yield "                                            ";
            }
            // line 1351
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1352
        yield "
                                        <thead>
                                        <tr class=\"font-weight-normal\">
                                            <th style=\"min-width: 30px !important;\"></th>
                                            <th style=\"min-width: 30px !important;\"></th>
                                            <th class=\"col-blue-grey\">CHANTIERS / CLIENT</th>
                                            <th class=\"text-center col-blue-grey\">CLIENT</th>
                                            <th class=\"text-center col-blue-grey\">COÛT</th>
                                            <th class=\"text-center col-blue-grey\">RÈGLEMENT</th>
                                            <th class=\"text-center col-blue-grey\">SOLDE</th>
                                            <th class=\"text-center col-blue-grey\">COMMANDES</th>
                                            <th class=\"text-center col-blue-grey\">BALANCE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 1367
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 1367, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 1368
            yield "                                            ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 1368))) {
                // line 1369
                yield "                                                ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 1369))) {
                    // line 1370
                    yield "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 1370));
                    foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                        // line 1371
                        yield "                                                        ";
                        if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 1371)) && (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 1371) == "encours"))) {
                            // line 1372
                            yield "                                                            ";
                            $context["solde"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 1372) - CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 1372));
                            // line 1373
                            yield "                                                            <tr>
                                                                <td class=\"text-center\">
                                                                    <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                           class=\"PROJY\" value=\"";
                            // line 1376
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 1376), "html", null, true);
                            yield "\">
                                                                </td>
                                                                <td style=\"text-align: center\"
                                                                    title=\"Avancement selon décomptes validés\">";
                            // line 1379
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "progression", [], "any", false, false, false, 1379), 2, ",", " "), "html", null, true);
                            yield "
                                                                    %
                                                                </td>
                                                                <td>
                                                                    <a href=\"";
                            // line 1383
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 1383)]), "html", null, true);
                            yield "\"
                                                                       title=\"";
                            // line 1384
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 1384), "html", null, true);
                            yield "\"
                                                                       class=\"bolo600\">
                                                                        ";
                            // line 1386
                            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "sous", [], "any", false, false, false, 1386))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 1387
                                yield "                                                                            <span class=\"badge bg-orange\">SC</span>
                                                                        ";
                            }
                            // line 1389
                            yield "                                                                        ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 1389))), "truncate", [30, "...", false], "method", false, false, false, 1389), "html", null, true);
                            yield "
                                                                    </a>
                                                                </td>
                                                                <td class=\"bolo600\"><a
                                                                            href=\"";
                            // line 1393
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 1393)]), "html", null, true);
                            yield "\"
                                                                            class=\"col-white bolo700\">";
                            // line 1394
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 1394)), "html", null, true);
                            yield "</a>
                                                                </td>
                                                                <td class=\"text-right\">";
                            // line 1396
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 1396), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                <td class=\"text-right\">";
                            // line 1397
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 1397), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                <td style=\"text-align: right\">";
                            // line 1398
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["solde"]) || array_key_exists("solde", $context) ? $context["solde"] : (function () { throw new RuntimeError('Variable "solde" does not exist.', 1398, $this->source); })()), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                <td style=\"text-align: right\">";
                            // line 1399
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 1399), 2, ",", " "), "html", null, true);
                            yield "</td>

                                                                ";
                            // line 1401
                            $context["balance"] = ($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 1401), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 1401), 2, ".", ""));
                            // line 1402
                            yield "
                                                                <td style=\"text-align: right\">";
                            // line 1403
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["balance"]) || array_key_exists("balance", $context) ? $context["balance"] : (function () { throw new RuntimeError('Variable "balance" does not exist.', 1403, $this->source); })()), 2, ",", " "), "html", null, true);
                            yield "</td>

                                                            </tr>
                                                        ";
                        }
                        // line 1407
                        yield "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1408
                    yield "                                                ";
                }
                // line 1409
                yield "                                            ";
            }
            // line 1410
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1411
        yield "                                        </tbody>
                                        <tfoot>
                                        <tr class=\"font-weight-normal\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th></th>
                                            <th></th>
                                            <th class=\"text-right bg-blue\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                    <br/>
                                    <p>
                                        <span class=\"col-orange\">&raquo; SC:</span>
                                        <span class=\"col-blue-grey\">SOUS-CHANTIER</span>
                                        <br></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-pri shadow\" style=\"border-left: 2px solid #FF9800\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingOne_1s\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed outai  col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1s\" href=\"#collapseOne_1s\" aria-expanded=\"false\"
                                   aria-controls=\"collapseOne_1s\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Chantiers
                                    | Sous-chantiers<span
                                            class=\"badge bg-pink\"
                                            style=\"float: right !important;\">";
        // line 1444
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["countSous"]) || array_key_exists("countSous", $context) ? $context["countSous"] : (function () { throw new RuntimeError('Variable "countSous" does not exist.', 1444, $this->source); })()), "html", null, true);
        yield "</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseOne_1s\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingOne_1s\">
                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px\">
                                    <table class=\"table-striped table-bordered display nowrape\" id=\"dataSous\"
                                           style=\"width: 100%\">

                                        ";
        // line 1455
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 1455, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 1456
            yield "
                                            ";
            // line 1457
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 1457))) {
                // line 1458
                yield "                                                ";
                $context["vp"] = 0;
                // line 1459
                yield "                                                ";
                $context["vr"] = 0;
                // line 1460
                yield "                                                ";
                $context["dp"] = 0;
                // line 1461
                yield "
                                                ";
                // line 1462
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 1462));
                foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                    // line 1463
                    yield "                                                    ";
                    if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "sous", [], "any", false, false, false, 1463))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 1464
                        yield "                                                        ";
                        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "sous", [], "any", false, false, false, 1464))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 1465
                            yield "                                                            ";
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 1465) == "encours") && (null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 1465)))) {
                                // line 1466
                                yield "                                                                ";
                                $context["vp"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 1466) + (isset($context["vp"]) || array_key_exists("vp", $context) ? $context["vp"] : (function () { throw new RuntimeError('Variable "vp" does not exist.', 1466, $this->source); })()));
                                // line 1467
                                yield "                                                                ";
                                $context["vr"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 1467) + (isset($context["vr"]) || array_key_exists("vr", $context) ? $context["vr"] : (function () { throw new RuntimeError('Variable "vr" does not exist.', 1467, $this->source); })()));
                                // line 1468
                                yield "                                                                ";
                                $context["dp"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 1468) + (isset($context["dp"]) || array_key_exists("dp", $context) ? $context["dp"] : (function () { throw new RuntimeError('Variable "dp" does not exist.', 1468, $this->source); })()));
                                // line 1469
                                yield "                                                            ";
                            }
                            // line 1470
                            yield "                                                        ";
                        }
                        // line 1471
                        yield "                                                    ";
                    }
                    // line 1472
                    yield "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1473
                yield "
                                            ";
            }
            // line 1475
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1476
        yield "                                        <thead>
                                        <tr class=\"font-weight-normal\">
                                            <th class=\"col-blue-grey\">CHANTIER/SOUS-CHANTIERS</th>
                                            <th class=\"text-center col-blue-grey\">COÛT</th>
                                            <th class=\"text-center col-blue-grey\">CHANTIER</th>
                                            <th class=\"text-center col-blue-grey\">RÈGLEMENT</th>
                                            <th class=\"text-center col-blue-grey\">SOLDE</th>
                                            <th class=\"text-center col-blue-grey\">COMMANDES</th>
                                            <th class=\"text-center col-blue-grey\">BALANCE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 1488
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 1488, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 1489
            yield "                                            ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 1489))) {
                // line 1490
                yield "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 1490));
                foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                    // line 1491
                    yield "                                                    ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 1491))) {
                        // line 1492
                        yield "                                                        ";
                        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "sous", [], "any", false, false, false, 1492))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 1493
                            yield "                                                            ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 1493) == "encours")) {
                                // line 1494
                                yield "                                                                <tr>
                                                                    <td>
                                                                        <a href=\"";
                                // line 1496
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 1496)]), "html", null, true);
                                yield "\"
                                                                           title=\"";
                                // line 1497
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 1497), "html", null, true);
                                yield "\"
                                                                           class=\"bolo600\">
                                                                            ";
                                // line 1499
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 1499)), "html", null, true);
                                yield "
                                                                        </a>

                                                                    </td>
                                                                    <td class=\"text-right\">";
                                // line 1503
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 1503), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                    <td>
                                                                        <a href=\"";
                                // line 1505
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "sous", [], "any", false, false, false, 1505), "id", [], "any", false, false, false, 1505)]), "html", null, true);
                                yield "\"
                                                                           title=\"";
                                // line 1506
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "sous", [], "any", false, false, false, 1506), "nomchantier", [], "any", false, false, false, 1506), "html", null, true);
                                yield "\"
                                                                           class=\"col-white bolo600\">
                                                                            ";
                                // line 1508
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "sous", [], "any", false, false, false, 1508), "nomchantier", [], "any", false, false, false, 1508))), "truncate", [30, "...", false], "method", false, false, false, 1508), "html", null, true);
                                yield "
                                                                    </td>
                                                                    <td class=\"text-right\">";
                                // line 1510
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 1510), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                    <td style=\"text-align: right\">";
                                // line 1511
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 1511), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 1511), 2, ".", "")), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                    <td style=\"text-align: right\">";
                                // line 1512
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 1512), 2, ",", " "), "html", null, true);
                                yield "</td>

                                                                    ";
                                // line 1514
                                $context["balance"] = ($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 1514), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 1514), 2, ".", ""));
                                // line 1515
                                yield "                                                                    <td style=\"text-align: right\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["balance"]) || array_key_exists("balance", $context) ? $context["balance"] : (function () { throw new RuntimeError('Variable "balance" does not exist.', 1515, $this->source); })()), 2, ",", " "), "html", null, true);
                                yield "</td>

                                                                </tr>
                                                            ";
                            }
                            // line 1519
                            yield "                                                        ";
                        }
                        // line 1520
                        yield "                                                    ";
                    }
                    // line 1521
                    yield "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1522
                yield "                                            ";
            }
            // line 1523
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1524
        yield "                                        </tbody>
                                        <tfoot>
                                        <tr class=\"font-weight-normal\">
                                            <th class=\"col-blue-grey\"></th>
                                            <th class=\"text-center bg-blue col-white\">0</th>
                                            <th class=\"text-center col-blue\">0</th>
                                            <th class=\"text-center bg-blue col-white\">0</th>
                                            <th class=\"text-center bg-blue col-white\">0</th>
                                            <th class=\"text-center bg-blue col-white\">0</th>
                                            <th class=\"text-center bg-blue col-white\">0</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"panel panel-pri shadow\"
                         style=\"border-left: 2px solid #2196F3; margin-top: 20px !important\">
                        <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingTwo_1\">
                            <h4 class=\"panel-title\">
                                <a class=\"collapsed outai col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseTwo_1\" aria-expanded=\"false\"
                                   aria-controls=\"collapseTwo_1\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Chantiers
                                    Terminés<span class=\"badge bg-pink\"
                                                  style=\"float: right !important;\">";
        // line 1551
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["countTerminer"]) || array_key_exists("countTerminer", $context) ? $context["countTerminer"] : (function () { throw new RuntimeError('Variable "countTerminer" does not exist.', 1551, $this->source); })()), "html", null, true);
        yield "</span>
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapseTwo_1\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingTwo_1\">
                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px;\">
                                    <table class=\"table-striped table-bordered display nowrape\" id=\"dataArchive\"
                                           style=\"width: 100%\">

                                        ";
        // line 1562
        $context["marge"] = 0;
        // line 1563
        yield "                                        ";
        $context["solde"] = 0;
        // line 1564
        yield "
                                        ";
        // line 1565
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 1565, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 1566
            yield "                                            ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 1566))) {
                // line 1567
                yield "                                                ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 1567))) {
                    // line 1568
                    yield "                                                    ";
                    $context["vp"] = 0;
                    // line 1569
                    yield "                                                    ";
                    $context["vr"] = 0;
                    // line 1570
                    yield "                                                    ";
                    $context["dp"] = 0;
                    // line 1571
                    yield "
                                                    ";
                    // line 1572
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 1572));
                    foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                        // line 1573
                        yield "                                                        ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 1573) == "archiver") && (null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 1573)))) {
                            // line 1574
                            yield "                                                            ";
                            $context["vp"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 1574) + (isset($context["vp"]) || array_key_exists("vp", $context) ? $context["vp"] : (function () { throw new RuntimeError('Variable "vp" does not exist.', 1574, $this->source); })()));
                            // line 1575
                            yield "                                                            ";
                            $context["vr"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 1575) + (isset($context["vr"]) || array_key_exists("vr", $context) ? $context["vr"] : (function () { throw new RuntimeError('Variable "vr" does not exist.', 1575, $this->source); })()));
                            // line 1576
                            yield "                                                            ";
                            $context["dp"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 1576) + (isset($context["dp"]) || array_key_exists("dp", $context) ? $context["dp"] : (function () { throw new RuntimeError('Variable "dp" does not exist.', 1576, $this->source); })()));
                            // line 1577
                            yield "                                                        ";
                        }
                        // line 1578
                        yield "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1579
                    yield "                                                ";
                }
                // line 1580
                yield "                                            ";
            }
            // line 1581
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1582
        yield "                                        <thead>
                                        <tr class=\"font-weight-normal\">
                                            <th style=\"min-width: 30px !important;\"></th>
                                            <th style=\"min-width: 30px !important;\"></th>
                                            <th class=\"col-blue-grey\">CHANTIERS / CLIENT</th>
                                            <th class=\"text-center col-blue-grey\">COÛT</th>
                                            <th class=\"text-center col-blue-grey\">CLIENT</th>
                                            <th class=\"text-center col-blue-grey\">RÈGLEMENT</th>
                                            <th class=\"text-center col-blue-grey\">SOLDE</th>
                                            <th class=\"text-center col-blue-grey\">COMMANDES</th>
                                            <th class=\"text-center col-blue-grey\">MARGES</th>
                                            <th class=\"text-center col-blue-grey\">BALANCE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 1597
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 1597, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 1598
            yield "                                            ";
            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 1598)) && (null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 1598)))) {
                // line 1599
                yield "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 1599));
                foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                    // line 1600
                    yield "                                                    ";
                    if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 1600)) && (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 1600) == "archiver"))) {
                        // line 1601
                        yield "                                                        ";
                        $context["solde"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 1601) - CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 1601));
                        // line 1602
                        yield "                                                        <tr>
                                                            <td class=\"text-center\">
                                                                <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                       class=\"PROJY2\"
                                                                       value=\"";
                        // line 1606
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 1606), "html", null, true);
                        yield "\">
                                                            </td>
                                                            <td style=\"text-align: center\"
                                                                title=\"Avancement selon décomptes validés\">";
                        // line 1609
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "progression", [], "any", false, false, false, 1609), 2, ",", " "), "html", null, true);
                        yield "
                                                                %
                                                            </td>
                                                            <td>
                                                                <a href=\"";
                        // line 1613
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 1613)]), "html", null, true);
                        yield "\"
                                                                   class=\"bolo600\"
                                                                   title=\"";
                        // line 1615
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 1615), "html", null, true);
                        yield "\">
                                                                    ";
                        // line 1616
                        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "sous", [], "any", false, false, false, 1616))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 1617
                            yield "                                                                        <span class=\"badge bg-orange\">SC</span>
                                                                    ";
                        }
                        // line 1619
                        yield "                                                                    ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 1619))), "truncate", [30, "...", false], "method", false, false, false, 1619), "html", null, true);
                        yield "
                                                                </a>
                                                            </td>
                                                            <td class=\"text-right\">";
                        // line 1622
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 1622), 2, ",", " "), "html", null, true);
                        yield "</td>
                                                            <td class=\"bolo600\">";
                        // line 1623
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 1623)), "html", null, true);
                        yield "</td>
                                                            <td class=\"text-right\">";
                        // line 1624
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 1624), 2, ",", " "), "html", null, true);
                        yield "</td>
                                                            <td style=\"text-align: right\">";
                        // line 1625
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["solde"]) || array_key_exists("solde", $context) ? $context["solde"] : (function () { throw new RuntimeError('Variable "solde" does not exist.', 1625, $this->source); })()), 2, ",", " "), "html", null, true);
                        yield "</td>
                                                            <td style=\"text-align: right\">";
                        // line 1626
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 1626), 2, ",", " "), "html", null, true);
                        yield "</td>
                                                            <td style=\"text-align: right\">";
                        // line 1627
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 1627), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 1627), 2, ".", "")), 2, ",", " "), "html", null, true);
                        yield "</td>

                                                            ";
                        // line 1629
                        $context["balance"] =  -(isset($context["solde"]) || array_key_exists("solde", $context) ? $context["solde"] : (function () { throw new RuntimeError('Variable "solde" does not exist.', 1629, $this->source); })());
                        // line 1630
                        yield "
                                                            <td style=\"text-align: right\">";
                        // line 1631
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["balance"]) || array_key_exists("balance", $context) ? $context["balance"] : (function () { throw new RuntimeError('Variable "balance" does not exist.', 1631, $this->source); })()), 2, ",", " "), "html", null, true);
                        yield "</td>
                                                        </tr>
                                                    ";
                    }
                    // line 1634
                    yield "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1635
                yield "                                            ";
            }
            // line 1636
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1637
        yield "                                        </tbody>
                                        <tfoot>
                                        <tr class=\"font-weight-normal\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th style=\"width: 10px !important;\"></th>
                                            <th></th>
                                            <th class=\"text-center bg-blue col-white\"></th>
                                            <th class=\"text-center bg-blue\"></th>
                                            <th class=\"text-center bg-blue col-white\"></th>
                                            <th class=\"text-center bg-blue col-white\"></th>
                                            <th class=\"text-center bg-blue col-white\"></th>
                                            <th class=\"text-center bg-blue col-white\"></th>
                                            <th class=\"text-center bg-blue col-white\"></th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-pri shadow\" style=\"border-left: 2px solid #00BCD4;\">
                        <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingClo_1\">
                            <h4 class=\"panel-title\">
                                <a class=\"collapsed outai col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseClo_1\" aria-expanded=\"false\"
                                   aria-controls=\"collapseClo_1\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Chantiers
                                    Clôturés<span class=\"badge bg-pink\"
                                                  style=\"float: right !important;\">";
        // line 1665
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["countCloturer"]) || array_key_exists("countCloturer", $context) ? $context["countCloturer"] : (function () { throw new RuntimeError('Variable "countCloturer" does not exist.', 1665, $this->source); })()), "html", null, true);
        yield "</span>
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapseClo_1\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingClo_1\">
                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px;\">
                                    <table class=\"table-striped table-bordered display nowrape\" id=\"dataClotures\"
                                           style=\"width: 100%\">

                                        ";
        // line 1676
        $context["solde"] = 0;
        // line 1677
        yield "
                                        ";
        // line 1678
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 1678, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 1679
            yield "                                            ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 1679))) {
                // line 1680
                yield "                                                ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 1680))) {
                    // line 1681
                    yield "                                                    ";
                    $context["vp"] = 0;
                    // line 1682
                    yield "                                                    ";
                    $context["vr"] = 0;
                    // line 1683
                    yield "                                                    ";
                    $context["dp"] = 0;
                    // line 1684
                    yield "
                                                    ";
                    // line 1685
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 1685));
                    foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                        // line 1686
                        yield "                                                        ";
                        if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 1686))) {
                            // line 1687
                            yield "                                                            ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 1687) == "cloturer")) {
                                // line 1688
                                yield "                                                                ";
                                $context["vp"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 1688) + (isset($context["vp"]) || array_key_exists("vp", $context) ? $context["vp"] : (function () { throw new RuntimeError('Variable "vp" does not exist.', 1688, $this->source); })()));
                                // line 1689
                                yield "                                                                ";
                                $context["vr"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 1689) + (isset($context["vr"]) || array_key_exists("vr", $context) ? $context["vr"] : (function () { throw new RuntimeError('Variable "vr" does not exist.', 1689, $this->source); })()));
                                // line 1690
                                yield "                                                                ";
                                $context["dp"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 1690) + (isset($context["dp"]) || array_key_exists("dp", $context) ? $context["dp"] : (function () { throw new RuntimeError('Variable "dp" does not exist.', 1690, $this->source); })()));
                                // line 1691
                                yield "                                                            ";
                            }
                            // line 1692
                            yield "                                                        ";
                        }
                        // line 1693
                        yield "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1694
                    yield "
                                                ";
                }
                // line 1696
                yield "                                            ";
            }
            // line 1697
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1698
        yield "                                        <thead>
                                        <tr class=\"font-weight-normal\">
                                            <th style=\"min-width: 30px !important;\"></th>
                                            <th class=\"col-blue-grey\">CHANTIERS / CLIENT</th>
                                            <th class=\"text-center col-blue-grey\">COÛT</th>
                                            <th class=\"text-center col-blue-grey\">CLIENT</th>
                                            <th class=\"text-center col-blue-grey\">RÈGLEMENT</th>
                                            <th class=\"text-center col-blue-grey\">SOLDE</th>
                                            <th class=\"text-center col-blue-grey\">COMMANDES</th>
                                            <th class=\"text-center col-blue-grey\">MARGES</th>
                                            <th class=\"text-center col-blue-grey\">BALANCE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 1712
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 1712, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 1713
            yield "                                            ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 1713))) {
                // line 1714
                yield "                                                ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 1714))) {
                    // line 1715
                    yield "                                                    ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 1715))) {
                        // line 1716
                        yield "                                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 1716));
                        foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                            // line 1717
                            yield "                                                            ";
                            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 1717))) {
                                // line 1718
                                yield "                                                                ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 1718) == "cloturer")) {
                                    // line 1719
                                    yield "                                                                    ";
                                    $context["solde"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 1719) - CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 1719));
                                    // line 1720
                                    yield "                                                                    <tr>
                                                                        <td class=\"text-center\">
                                                                            <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                                   class=\"PROCLO\"
                                                                                   value=\"";
                                    // line 1724
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 1724), "html", null, true);
                                    yield "\">
                                                                        </td>
                                                                        <td>
                                                                            <a href=\"";
                                    // line 1727
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 1727)]), "html", null, true);
                                    yield "\"
                                                                               class=\"bolo600\"
                                                                               title=\"";
                                    // line 1729
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 1729), "html", null, true);
                                    yield "\">
                                                                                ";
                                    // line 1730
                                    if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "sous", [], "any", false, false, false, 1730))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                        // line 1731
                                        yield "                                                                                    <span class=\"badge bg-orange\">SC</span>
                                                                                ";
                                    }
                                    // line 1733
                                    yield "                                                                                ";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 1733)), "html", null, true);
                                    yield "
                                                                            </a>
                                                                        </td>
                                                                        <td class=\"text-right\">";
                                    // line 1736
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 1736), 2, ",", " "), "html", null, true);
                                    yield "</td>
                                                                        <td class=\"bolo600\">";
                                    // line 1737
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 1737)), "html", null, true);
                                    yield "</td>
                                                                        <td class=\"text-right\">";
                                    // line 1738
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 1738), 2, ",", " "), "html", null, true);
                                    yield "</td>
                                                                        <td style=\"text-align: right\">";
                                    // line 1739
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["solde"]) || array_key_exists("solde", $context) ? $context["solde"] : (function () { throw new RuntimeError('Variable "solde" does not exist.', 1739, $this->source); })()), 2, ",", " "), "html", null, true);
                                    yield "</td>
                                                                        <td style=\"text-align: right\">";
                                    // line 1740
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 1740), 2, ",", " "), "html", null, true);
                                    yield "</td>
                                                                        <td style=\"text-align: right\">";
                                    // line 1741
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 1741), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 1741), 2, ".", "")), 2, ",", " "), "html", null, true);
                                    yield "</td>
                                                                        ";
                                    // line 1742
                                    $context["balance"] =  -(isset($context["solde"]) || array_key_exists("solde", $context) ? $context["solde"] : (function () { throw new RuntimeError('Variable "solde" does not exist.', 1742, $this->source); })());
                                    // line 1743
                                    yield "                                                                        <td style=\"text-align: right\">";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["balance"]) || array_key_exists("balance", $context) ? $context["balance"] : (function () { throw new RuntimeError('Variable "balance" does not exist.', 1743, $this->source); })()), 2, ",", " "), "html", null, true);
                                    yield "</td>
                                                                    </tr>
                                                                ";
                                }
                                // line 1746
                                yield "                                                            ";
                            }
                            // line 1747
                            yield "                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1748
                        yield "                                                    ";
                    }
                    // line 1749
                    yield "                                                ";
                }
                // line 1750
                yield "                                            ";
            }
            // line 1751
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1752
        yield "                                        </tbody>
                                        <tfoot>
                                        <tr class=\"font-weight-normal\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th></th>
                                            <th class=\"text-center bg-blue col-white\"></th>
                                            <th class=\"text-center bg-blue\"></th>
                                            <th class=\"text-center bg-blue col-white\"></th>
                                            <th class=\"text-center bg-blue col-white\"></th>
                                            <th class=\"text-center bg-blue col-white\"></th>
                                            <th class=\"text-center bg-blue col-white\"></th>
                                            <th class=\"text-center bg-blue col-white\"></th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"panel panel-pri shadow\"
                         style=\"border-left: 2px solid #79A807; margin-top: 20px !important\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingThree_1\">
                            <h4 class=\"panel-title\">
                                <a class=\"collapsed col-white outai\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseThree_1\" aria-expanded=\"false\"
                                   aria-controls=\"collapseThree_1\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Tous
                                    les chantiers<span class=\"badge bg-pink\"
                                                       style=\"float: right !important;\">";
        // line 1781
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["countTout"]) || array_key_exists("countTout", $context) ? $context["countTout"] : (function () { throw new RuntimeError('Variable "countTout" does not exist.', 1781, $this->source); })()), "html", null, true);
        yield "</span>
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapseThree_1\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingThree_1\">
                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px\">
                                    <table class=\"table-striped table-bordered display nowrape\" id=\"dataToChantiers\"
                                           style=\"width: 100%\">

                                        ";
        // line 1792
        $context["tcout"] = 0;
        // line 1793
        yield "                                        ";
        $context["treglement"] = 0;
        // line 1794
        yield "                                        ";
        $context["tdepense"] = 0;
        // line 1795
        yield "                                        ";
        $context["tbalance"] = 0;
        // line 1796
        yield "                                        ";
        $context["marge"] = 0;
        // line 1797
        yield "                                        ";
        $context["solde"] = 0;
        // line 1798
        yield "
                                        ";
        // line 1799
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 1799, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 1800
            yield "                                            ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 1800))) {
                // line 1801
                yield "                                                ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 1801))) {
                    // line 1802
                    yield "
                                                    ";
                    // line 1803
                    $context["vp"] = 0;
                    // line 1804
                    yield "                                                    ";
                    $context["vr"] = 0;
                    // line 1805
                    yield "                                                    ";
                    $context["dp"] = 0;
                    // line 1806
                    yield "
                                                    ";
                    // line 1807
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 1807));
                    foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                        // line 1808
                        yield "                                                        ";
                        if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 1808))) {
                            // line 1809
                            yield "                                                            ";
                            $context["vp"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 1809) + (isset($context["vp"]) || array_key_exists("vp", $context) ? $context["vp"] : (function () { throw new RuntimeError('Variable "vp" does not exist.', 1809, $this->source); })()));
                            // line 1810
                            yield "                                                            ";
                            $context["vr"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 1810) + (isset($context["vr"]) || array_key_exists("vr", $context) ? $context["vr"] : (function () { throw new RuntimeError('Variable "vr" does not exist.', 1810, $this->source); })()));
                            // line 1811
                            yield "                                                            ";
                            $context["dp"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 1811) + (isset($context["dp"]) || array_key_exists("dp", $context) ? $context["dp"] : (function () { throw new RuntimeError('Variable "dp" does not exist.', 1811, $this->source); })()));
                            // line 1812
                            yield "                                                        ";
                        }
                        // line 1813
                        yield "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1814
                    yield "
                                                    ";
                    // line 1815
                    $context["tcout"] = ((isset($context["vp"]) || array_key_exists("vp", $context) ? $context["vp"] : (function () { throw new RuntimeError('Variable "vp" does not exist.', 1815, $this->source); })()) + (isset($context["tcout"]) || array_key_exists("tcout", $context) ? $context["tcout"] : (function () { throw new RuntimeError('Variable "tcout" does not exist.', 1815, $this->source); })()));
                    // line 1816
                    yield "                                                    ";
                    $context["treglement"] = ((isset($context["vr"]) || array_key_exists("vr", $context) ? $context["vr"] : (function () { throw new RuntimeError('Variable "vr" does not exist.', 1816, $this->source); })()) + (isset($context["treglement"]) || array_key_exists("treglement", $context) ? $context["treglement"] : (function () { throw new RuntimeError('Variable "treglement" does not exist.', 1816, $this->source); })()));
                    // line 1817
                    yield "                                                    ";
                    $context["tdepense"] = ((isset($context["dp"]) || array_key_exists("dp", $context) ? $context["dp"] : (function () { throw new RuntimeError('Variable "dp" does not exist.', 1817, $this->source); })()) + (isset($context["tdepense"]) || array_key_exists("tdepense", $context) ? $context["tdepense"] : (function () { throw new RuntimeError('Variable "tdepense" does not exist.', 1817, $this->source); })()));
                    // line 1818
                    yield "
                                                ";
                }
                // line 1820
                yield "                                            ";
            }
            // line 1821
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1822
        yield "
                                        <thead>
                                        <tr class=\"font-weight-normal\">
                                            <th class=\"col-blue-grey\">CHANTIERS / CLIENT</th>
                                            <th class=\"text-center col-blue-grey\">COÛT&nbsp;DU&nbsp;CHANTIER</th>
                                            <th class=\"text-center col-blue-grey\">CLIENT</th>
                                            <th class=\"text-center col-blue-grey\">RÈGLEMENT</th>
                                            <th class=\"text-center col-blue-grey\">SOLDE</th>
                                            <th class=\"text-center col-blue-grey\">COMMANDES</th>
                                            <th class=\"text-center col-blue-grey\">MARGES</th>
                                            <th class=\"text-center col-blue-grey\">BALANCE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 1836
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 1836, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 1837
            yield "                                            ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 1837))) {
                // line 1838
                yield "                                                ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 1838))) {
                    // line 1839
                    yield "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 1839));
                    foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                        // line 1840
                        yield "                                                        ";
                        if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 1840))) {
                            // line 1841
                            yield "                                                            ";
                            $context["solde"] = (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 1841) - CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 1841));
                            // line 1842
                            yield "                                                            <tr>
                                                                <td>
                                                                    <a href=\"";
                            // line 1844
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 1844)]), "html", null, true);
                            yield "\"
                                                                       class=\"bolo600\"
                                                                       title=\"";
                            // line 1846
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 1846), "html", null, true);
                            yield "\">
                                                                        ";
                            // line 1847
                            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "sous", [], "any", false, false, false, 1847))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 1848
                                yield "                                                                            <span class=\"badge bg-orange\">SC</span>
                                                                        ";
                            }
                            // line 1850
                            yield "
                                                                        ";
                            // line 1851
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 1851)), "html", null, true);
                            yield "
                                                                    </a>
                                                                </td>
                                                                <td class=\"text-right\">";
                            // line 1854
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 1854), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                <td class=\"bolo600\">";
                            // line 1855
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 1855)), "html", null, true);
                            yield "</td>
                                                                <td class=\"text-right\">";
                            // line 1856
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 1856), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                <td style=\"text-align: right\">";
                            // line 1857
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["solde"]) || array_key_exists("solde", $context) ? $context["solde"] : (function () { throw new RuntimeError('Variable "solde" does not exist.', 1857, $this->source); })()), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                <td style=\"text-align: right\">";
                            // line 1858
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 1858), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                                ";
                            // line 1859
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "terminer", [], "any", false, false, false, 1859) == "oui")) {
                                // line 1860
                                yield "                                                                    <td style=\"text-align: right\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "cout", [], "any", false, false, false, 1860), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 1860), 2, ".", "")), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                ";
                            } else {
                                // line 1862
                                yield "                                                                    <td style=\"text-align: right\">0</td>
                                                                ";
                            }
                            // line 1864
                            yield "
                                                                ";
                            // line 1865
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "terminer", [], "any", false, false, false, 1865) == "oui")) {
                                // line 1866
                                yield "                                                                    ";
                                $context["balance"] =  -(isset($context["solde"]) || array_key_exists("solde", $context) ? $context["solde"] : (function () { throw new RuntimeError('Variable "solde" does not exist.', 1866, $this->source); })());
                                // line 1867
                                yield "                                                                ";
                            } else {
                                // line 1868
                                yield "                                                                    ";
                                $context["balance"] = ($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "reglement", [], "any", false, false, false, 1868), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "depense", [], "any", false, false, false, 1868), 2, ".", ""));
                                // line 1869
                                yield "                                                                ";
                            }
                            // line 1870
                            yield "                                                                <td style=\"text-align: right\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["balance"]) || array_key_exists("balance", $context) ? $context["balance"] : (function () { throw new RuntimeError('Variable "balance" does not exist.', 1870, $this->source); })()), 2, ",", " "), "html", null, true);
                            yield "</td>
                                                            </tr>
                                                        ";
                        }
                        // line 1873
                        yield "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1874
                    yield "                                                ";
                }
                // line 1875
                yield "                                            ";
            }
            // line 1876
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1877
        yield "                                        </tbody>
                                        <tfoot>
                                        <tr class=\"font-weight-normal\">
                                            <th></th>
                                            <th class=\"text-center bg-blue col-white\">";
        // line 1881
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tcout"]) || array_key_exists("tcout", $context) ? $context["tcout"] : (function () { throw new RuntimeError('Variable "tcout" does not exist.', 1881, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</th>
                                            <th class=\"text-center bg-blue\"></th>
                                            <th class=\"text-center bg-blue col-white\">";
        // line 1883
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["treglement"]) || array_key_exists("treglement", $context) ? $context["treglement"] : (function () { throw new RuntimeError('Variable "treglement" does not exist.', 1883, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</th>
                                            <th class=\"text-center bg-blue col-white\">";
        // line 1884
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tcout"]) || array_key_exists("tcout", $context) ? $context["tcout"] : (function () { throw new RuntimeError('Variable "tcout" does not exist.', 1884, $this->source); })()), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["treglement"]) || array_key_exists("treglement", $context) ? $context["treglement"] : (function () { throw new RuntimeError('Variable "treglement" does not exist.', 1884, $this->source); })()), 2, ".", "")), 2, ",", " "), "html", null, true);
        yield "</th>
                                            <th class=\"text-center bg-blue col-white\">";
        // line 1885
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tdepense"]) || array_key_exists("tdepense", $context) ? $context["tdepense"] : (function () { throw new RuntimeError('Variable "tdepense" does not exist.', 1885, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</th>
                                            <th class=\"text-center bg-blue col-white\">";
        // line 1886
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tcout"]) || array_key_exists("tcout", $context) ? $context["tcout"] : (function () { throw new RuntimeError('Variable "tcout" does not exist.', 1886, $this->source); })()), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tdepense"]) || array_key_exists("tdepense", $context) ? $context["tdepense"] : (function () { throw new RuntimeError('Variable "tdepense" does not exist.', 1886, $this->source); })()), 2, ".", "")), 2, ",", " "), "html", null, true);
        yield "</th>
                                            <th class=\"text-center bg-blue col-white\">";
        // line 1887
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["treglement"]) || array_key_exists("treglement", $context) ? $context["treglement"] : (function () { throw new RuntimeError('Variable "treglement" does not exist.', 1887, $this->source); })()), 2, ".", "") - $this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tdepense"]) || array_key_exists("tdepense", $context) ? $context["tdepense"] : (function () { throw new RuntimeError('Variable "tdepense" does not exist.', 1887, $this->source); })()), 2, ".", "")), 2, ",", " "), "html", null, true);
        yield "</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    ";
        // line 1896
        $context["countContact"] = 0;
        // line 1897
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 1897, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 1898
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "contacts", [], "any", false, false, false, 1898));
            foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                // line 1899
                yield "                            ";
                if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "corbeille", [], "any", false, false, false, 1899)) && (null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 1899)))) {
                    // line 1900
                    yield "                                ";
                    $context["countContact"] = ((isset($context["countContact"]) || array_key_exists("countContact", $context) ? $context["countContact"] : (function () { throw new RuntimeError('Variable "countContact" does not exist.', 1900, $this->source); })()) + 1);
                    // line 1901
                    yield "                            ";
                }
                // line 1902
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['contact'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1903
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1904
        yield "                    <div class=\"panel panel-pri shadow\" style=\"margin-top: 20px !important\">
                        <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingDeu\">
                            <h5 class=\"panel-title \">
                                <a class=\"collapsed outai col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseDeu\" aria-expanded=\"false\"
                                   aria-controls=\"collapseDeu\">
                                    <i class=\"material-icons col-white\" style=\"font-size:18px;float: left\">keyboard_arrow_down</i>Contacts<span
                                            class=\"badge bg-pink\"
                                            style=\"float: right !important;\">";
        // line 1912
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["countContact"]) || array_key_exists("countContact", $context) ? $context["countContact"] : (function () { throw new RuntimeError('Variable "countContact" does not exist.', 1912, $this->source); })()), "html", null, true);
        yield "</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseDeu\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingDeu\">
                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"table-responsive shadow\" style=\"padding: 10px\">
                                    <table class=\"table-striped table-bordered display nowrape\" style=\"width: 100%\"
                                           id=\"dataContacts\">
                                        <thead>
                                        <tr class=\"text-center\">
                                            <th style=\"min-width: 30px !important;\"></th>
                                            <th>CONTACT</th>
                                            <th>FONCTION</th>
                                            <th>EMAIL</th>
                                            <th>TÉLÉPHONE</th>
                                            <th>BUREAU</th>
                                            <th>CREÉ PAR</th>
                                            <th>CLIENT</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 1935
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 1935, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 1936
            yield "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "contacts", [], "any", false, false, false, 1936));
            foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                // line 1937
                yield "                                                ";
                if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "corbeille", [], "any", false, false, false, 1937)) && (null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 1937)))) {
                    // line 1938
                    yield "                                                    <tr>
                                                        <td class=\"text-center\">
                                                            <input type=\"checkbox\" data-toggle=\"toggle\" class=\"CONTAK\"
                                                                   value=\"";
                    // line 1941
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 1941), "html", null, true);
                    yield "\"></td>
                                                        <td class=\"bolo600\">";
                    // line 1942
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "contact", [], "any", false, false, false, 1942)), "html", null, true);
                    yield "</td>
                                                        <td>";
                    // line 1943
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "fonction", [], "any", false, false, false, 1943)), "html", null, true);
                    yield "</td>
                                                        <td>";
                    // line 1944
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "mail", [], "any", false, false, false, 1944), "html", null, true);
                    yield "</td>
                                                        <td>";
                    // line 1945
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "phone", [], "any", false, false, false, 1945), "html", null, true);
                    yield "</td>
                                                        <td>";
                    // line 1946
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "bureau", [], "any", false, false, false, 1946), "html", null, true);
                    yield "</td>
                                                        <td class=\"text-left col-blue bolo600\">
                                                            <i class=\"fa fa-user col-blue bolo600\"></i>&nbsp;
                                                            ";
                    // line 1949
                    if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "dobyuser", [], "any", false, false, false, 1949))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 1950
                        yield "                                                                ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "dobyuser", [], "any", false, false, false, 1950), "nom", [], "any", false, false, false, 1950)), "html", null, true);
                        yield "
                                                                &nbsp;";
                        // line 1951
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "dobyuser", [], "any", false, false, false, 1951), "prenoms", [], "any", false, false, false, 1951)), "html", null, true);
                        yield "
                                                            ";
                    }
                    // line 1953
                    yield "                                                        </td>
                                                        <td><b>";
                    // line 1954
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 1954), "html", null, true);
                    yield "</b></td>
                                                    </tr>
                                                ";
                }
                // line 1957
                yield "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['contact'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1958
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1959
        yield "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row clearfix\" style=\"margin-top:50px\">
                        <div class=\"col-sm-12 \">
                            <h4 class=\"bolo700\">
                                Devis - Décomptes - Factures
                            </h4>
                        </div>
                    </div>

                    ";
        // line 1975
        yield "                    ";
        $context["devjour"] = 0;
        // line 1976
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["deviss"]) || array_key_exists("deviss", $context) ? $context["deviss"] : (function () { throw new RuntimeError('Variable "deviss" does not exist.', 1976, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["devis"]) {
            // line 1977
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "client", [], "any", false, false, false, 1977), "corbeille", [], "any", false, false, false, 1977) == null)) {
                // line 1978
                yield "                            ";
                if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "corbeille", [], "any", false, false, false, 1978)) &&  !(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "type", [], "any", false, false, false, 1978) === "cps"))) {
                    // line 1979
                    yield "                                ";
                    if ((($tmp =  !(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "type", [], "any", false, false, false, 1979) === "esti")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 1980
                        yield "                                    ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "type", [], "any", false, false, false, 1980) != "esti")) {
                            // line 1981
                            yield "                                        ";
                            $context["devjour"] = ((isset($context["devjour"]) || array_key_exists("devjour", $context) ? $context["devjour"] : (function () { throw new RuntimeError('Variable "devjour" does not exist.', 1981, $this->source); })()) + 1);
                            // line 1982
                            yield "                                    ";
                        }
                        // line 1983
                        yield "                                ";
                    }
                    // line 1984
                    yield "                            ";
                }
                // line 1985
                yield "                        ";
            }
            // line 1986
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['devis'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1987
        yield "                    <div class=\"panel panel-pri shadow\" style=\"margin-top: 20px !important\">
                        <div class=\"panel-heading bg-col-blue-grey\" role=\"tab\" id=\"headingDev\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed  col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseDev\" aria-expanded=\"false\"
                                   aria-controls=\"collapseDev\" style=\"font-size: 16px!important\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>
                                    Devis du jour<span
                                            class=\"badge bg-pink\"
                                            style=\"float: right !important;\">";
        // line 1996
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["devjour"]) || array_key_exists("devjour", $context) ? $context["devjour"] : (function () { throw new RuntimeError('Variable "devjour" does not exist.', 1996, $this->source); })()), "html", null, true);
        yield "</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseDev\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingDev\">
                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"table-responsive shadow\" style=\"padding: 10px\">
                                    <table class=\"table-striped table-bordered display nowrape\" style=\"width: 100%\"
                                           id=\"dataDEVIS3\">
                                        <thead>
                                        <tr class=\"text-center bolderr\"
                                            style=\"background-color: #f9f9f9 !important;\">
                                            <th class=\"mw30\"></th>
                                            <th class=\"mw30\"></th>
                                            <th>DATE</th>
                                            <th>N° DEVIS</th>
                                            <th>TOTAL HT</th>
                                            <th>TOTAL TTC</th>
                                            <th>RÉFÉRENCE</th>
                                            <th>ETAT</th>
                                            <th>CREÉ PAR</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 2021
        $context["dtth"] = 0;
        // line 2022
        yield "                                        ";
        $context["dttc"] = 0;
        // line 2023
        yield "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["deviss"]) || array_key_exists("deviss", $context) ? $context["deviss"] : (function () { throw new RuntimeError('Variable "deviss" does not exist.', 2023, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["devis"]) {
            // line 2024
            yield "                                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "type", [], "any", false, false, false, 2024) != "esti")) {
                // line 2025
                yield "                                                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "client", [], "any", false, false, false, 2025), "corbeille", [], "any", false, false, false, 2025) == null)) {
                    // line 2026
                    yield "                                                    ";
                    if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "corbeille", [], "any", false, false, false, 2026)) &&  !(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "type", [], "any", false, false, false, 2026) === "cps"))) {
                        // line 2027
                        yield "                                                        <tr>
                                                            <td class=\"text-center\">
                                                                <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                       class=\"DEVYS3\"
                                                                       value=\"";
                        // line 2031
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "id", [], "any", false, false, false, 2031), "html", null, true);
                        yield "\"></td>
                                                            <td class=\"text-center\">
                                                                <a href=\"#\"
                                                                   onclick=\"shasha(";
                        // line 2034
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "id", [], "any", false, false, false, 2034), "html", null, true);
                        yield ",'imprimdevis');\"><i
                                                                            class=\"fa fa-eye col-green\"
                                                                            aria-hidden=\"true\"></i></a>
                                                            </td>
                                                            <td>";
                        // line 2038
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "date", [], "any", false, false, false, 2038), "y.m.d H:m"), "html", null, true);
                        yield "</td>
                                                            <td>
                                                                <a href=\"";
                        // line 2040
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "id", [], "any", false, false, false, 2040), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "chantier", [], "any", false, false, false, 2040), "id", [], "any", false, false, false, 2040)]), "html", null, true);
                        yield "\"
                                                                   class=\"bolo600\"
                                                                   style=\"color:dodgerblue\">
                                                                    ";
                        // line 2043
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "etat", [], "any", false, false, false, 2043) == "valide")) {
                            // line 2044
                            yield "                                                                    <span class=\"badge badge-pill badge-primary\"
                                                                          title=\"Validé par ";
                            // line 2045
                            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "vabyuser", [], "any", false, false, false, 2045))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 2046
                                yield "                                                               ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "vabyuser", [], "any", false, false, false, 2046), "prenoms", [], "any", false, false, false, 2046)), "html", null, true);
                            }
                            yield "\">V</span>
                                                                ";
                        } else {
                            // line 2048
                            yield "                                                                    <span class=\"badge badge-pill col-white\"
                                                                          title=\"Dévalidé par ";
                            // line 2049
                            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "vabyuser", [], "any", false, false, false, 2049))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 2050
                                yield "                                                              ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "vabyuser", [], "any", false, false, false, 2050), "prenoms", [], "any", false, false, false, 2050)), "html", null, true);
                            }
                            yield "\">V</span>
                                                                    ";
                        }
                        // line 2051
                        yield "&nbsp;DEVIS N° ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "iddevis", [], "any", false, false, false, 2051), "html", null, true);
                        yield "
                                                                </a>
                                                            </td>

                                                            <td class=\"text-right bolo600\">";
                        // line 2055
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalht", [], "any", false, false, false, 2055), 2, ",", " "), "html", null, true);
                        yield "</td>
                                                            <td class=\"text-right bolo600\">";
                        // line 2056
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalttc", [], "any", false, false, false, 2056), 2, ",", " "), "html", null, true);
                        yield "</td>
                                                            <td class=\"col-deep-orange\"
                                                                title=\"";
                        // line 2058
                        yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "devreference", [], "any", false, false, false, 2058));
                        yield "\">";
                        yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "devreference", [], "any", false, false, false, 2058));
                        yield "</td>
                                                            <td title=\"";
                        // line 2059
                        yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "devreference", [], "any", false, false, false, 2059));
                        yield "\"><a
                                                                        href=\"";
                        // line 2060
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "chantier", [], "any", false, false, false, 2060), "id", [], "any", false, false, false, 2060)]), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "client", [], "any", false, false, false, 2060), "nomclient", [], "any", false, false, false, 2060)), "html", null, true);
                        yield "
                                                                    |
                                                                    ";
                        // line 2062
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "chantier", [], "any", false, false, false, 2062), "nomchantier", [], "any", false, false, false, 2062)), "html", null, true);
                        yield "</a></td>

                                                            <td class=\"text-left col-blue bolo600\">
                                                                <i class=\"fa fa-user col-blue bolo600\"></i>&nbsp;";
                        // line 2065
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "dobyuser", [], "any", false, false, false, 2065), "nom", [], "any", false, false, false, 2065)), "html", null, true);
                        yield "
                                                                &nbsp;";
                        // line 2066
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "dobyuser", [], "any", false, false, false, 2066), "prenoms", [], "any", false, false, false, 2066)), "html", null, true);
                        yield "</td>
                                                        </tr>
                                                        ";
                        // line 2068
                        $context["dtth"] = (CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalht", [], "any", false, false, false, 2068) + (isset($context["dtth"]) || array_key_exists("dtth", $context) ? $context["dtth"] : (function () { throw new RuntimeError('Variable "dtth" does not exist.', 2068, $this->source); })()));
                        // line 2069
                        yield "                                                        ";
                        $context["dttc"] = (CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalttc", [], "any", false, false, false, 2069) + (isset($context["dttc"]) || array_key_exists("dttc", $context) ? $context["dttc"] : (function () { throw new RuntimeError('Variable "dttc" does not exist.', 2069, $this->source); })()));
                        // line 2070
                        yield "                                                    ";
                    }
                    // line 2071
                    yield "                                                ";
                }
                // line 2072
                yield "                                            ";
            }
            // line 2073
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['devis'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2074
        yield "                                        </tbody>
                                        <tfoot>
                                        <tr class=\"text-center bolderr\">
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th class=\"text-center bg-blue col-white\">";
        // line 2081
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["dtth"]) || array_key_exists("dtth", $context) ? $context["dtth"] : (function () { throw new RuntimeError('Variable "dtth" does not exist.', 2081, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</th>
                                            <th class=\"text-center bg-blue col-white\">";
        // line 2082
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["dttc"]) || array_key_exists("dttc", $context) ? $context["dttc"] : (function () { throw new RuntimeError('Variable "dttc" does not exist.', 2082, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                    <br></div>
                            </div>
                        </div>
                    </div>

                    ";
        // line 2094
        $context["devnv"] = 0;
        // line 2095
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 2095, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 2096
            yield "                        ";
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 2096) == null) && (null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 2096)))) {
                // line 2097
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "devis", [], "any", false, false, false, 2097));
                foreach ($context['_seq'] as $context["_key"] => $context["devis"]) {
                    // line 2098
                    yield "                                ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "chantier", [], "any", false, false, false, 2098), "etat", [], "any", false, false, false, 2098) != "archiver") && (null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "chantier", [], "any", false, false, false, 2098), "corbeille", [], "any", false, false, false, 2098)))) {
                        // line 2099
                        yield "                                    ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "etat", [], "any", false, false, false, 2099) == "save") && (CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "type", [], "any", false, false, false, 2099) != "esti"))) {
                            // line 2100
                            yield "                                        ";
                            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "corbeille", [], "any", false, false, false, 2100))) {
                                // line 2101
                                yield "                                            ";
                                $context["devnv"] = ((isset($context["devnv"]) || array_key_exists("devnv", $context) ? $context["devnv"] : (function () { throw new RuntimeError('Variable "devnv" does not exist.', 2101, $this->source); })()) + 1);
                                // line 2102
                                yield "                                        ";
                            }
                            // line 2103
                            yield "                                    ";
                        }
                        // line 2104
                        yield "                                ";
                    }
                    // line 2105
                    yield "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['devis'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 2106
                yield "                        ";
            }
            // line 2107
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2108
        yield "                    <div class=\"panel panel-pri shadow\">
                        <div class=\"panel-heading bg-col-blue-grey\" role=\"tab\" id=\"headingDeve\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed  col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseDeve\" aria-expanded=\"false\"
                                   aria-controls=\"collapseDeve\" style=\"font-size: 16px!important\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>
                                    Devis non validés<span
                                            class=\"badge bg-pink\"
                                            style=\"float: right !important;\">";
        // line 2117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["devnv"]) || array_key_exists("devnv", $context) ? $context["devnv"] : (function () { throw new RuntimeError('Variable "devnv" does not exist.', 2117, $this->source); })()), "html", null, true);
        yield "</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseDeve\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingDeve\">
                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"table-responsive shadow\" style=\"padding: 10px\">
                                    <table class=\"table-striped table-bordered display nowrap\" style=\"width: 100%\"
                                           id=\"dataDEVIS4\">
                                        <thead>
                                        <tr class=\"text-center bolderr\"
                                            style=\"background-color: #f9f9f9 !important;\">
                                            <th class=\"mw30\"></th>
                                            <th class=\"mw30\"></th>
                                            <th>DATE</th>
                                            <th>N° DEVIS</th>
                                            <th>TOTAL HT</th>
                                            <th>TOTAL TTC</th>
                                            <th>RÉFÉRENCE</th>
                                            <th>ETAT</th>
                                            <th>CREÉ PAR</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 2142
        $context["dtth"] = 0;
        // line 2143
        yield "                                        ";
        $context["dttc"] = 0;
        // line 2144
        yield "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 2144, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 2145
            yield "                                            ";
            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 2145)) && (null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 2145)))) {
                // line 2146
                yield "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "devis", [], "any", false, false, false, 2146));
                foreach ($context['_seq'] as $context["_key"] => $context["devis"]) {
                    // line 2147
                    yield "                                                    ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "chantier", [], "any", false, false, false, 2147), "etat", [], "any", false, false, false, 2147) != "archiver") && (null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "chantier", [], "any", false, false, false, 2147), "corbeille", [], "any", false, false, false, 2147)))) {
                        // line 2148
                        yield "                                                        ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "etat", [], "any", false, false, false, 2148) == "save") && (CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "type", [], "any", false, false, false, 2148) != "esti"))) {
                            // line 2149
                            yield "                                                            ";
                            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "corbeille", [], "any", false, false, false, 2149))) {
                                // line 2150
                                yield "                                                                <tr>
                                                                    <td class=\"text-center\">
                                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                               class=\"DEVYS4\"
                                                                               value=\"";
                                // line 2154
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "id", [], "any", false, false, false, 2154), "html", null, true);
                                yield "\"></td>
                                                                    <td class=\"text-center\">
                                                                        <a href=\"#\"
                                                                           onclick=\"shasha(";
                                // line 2157
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "id", [], "any", false, false, false, 2157), "html", null, true);
                                yield ",'imprimdevis');\">
                                                                            <i class=\"fa fa-eye col-green\"
                                                                               aria-hidden=\"true\"></i>
                                                                        </a>
                                                                    </td>
                                                                    <td>";
                                // line 2162
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "date", [], "any", false, false, false, 2162), "y.m.d H:m"), "html", null, true);
                                yield "</td>
                                                                    <td>
                                                                        <a href=\"";
                                // line 2164
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "id", [], "any", false, false, false, 2164), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "chantier", [], "any", false, false, false, 2164), "id", [], "any", false, false, false, 2164)]), "html", null, true);
                                yield "\"
                                                                           class=\"bolo600\"
                                                                           style=\"color:dodgerblue\">
                                                                            ";
                                // line 2167
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "etat", [], "any", false, false, false, 2167) == "valide")) {
                                    // line 2168
                                    yield "                                                                            <span class=\"badge badge-pill badge-primary\"
                                                                                  title=\"Validé par ";
                                    // line 2169
                                    if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "vabyuser", [], "any", false, false, false, 2169))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                        // line 2170
                                        yield "                                                                                  ";
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "vabyuser", [], "any", false, false, false, 2170), "prenoms", [], "any", false, false, false, 2170)), "html", null, true);
                                    }
                                    yield "\">V</span>
                                                                        ";
                                } else {
                                    // line 2172
                                    yield "                                                                            <span class=\"badge badge-pill col-white\"
                                                                                  title=\"Dévalidé par ";
                                    // line 2173
                                    if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "vabyuser", [], "any", false, false, false, 2173))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                        // line 2174
                                        yield "                                                                                   ";
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "vabyuser", [], "any", false, false, false, 2174), "prenoms", [], "any", false, false, false, 2174)), "html", null, true);
                                    }
                                    yield "\">V</span>
                                                                            ";
                                }
                                // line 2175
                                yield "&nbsp;DEVIS
                                                                            N°";
                                // line 2176
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "iddevis", [], "any", false, false, false, 2176), "html", null, true);
                                yield "
                                                                        </a>
                                                                    </td>

                                                                    <td class=\"text-right bolo600\">";
                                // line 2180
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalht", [], "any", false, false, false, 2180), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                    <td class=\"text-right bolo600\">";
                                // line 2181
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalttc", [], "any", false, false, false, 2181), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                    <td class=\"col-deep-orange\"
                                                                        title=\"";
                                // line 2183
                                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "devreference", [], "any", false, false, false, 2183));
                                yield "\">";
                                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "devreference", [], "any", false, false, false, 2183));
                                yield "</td>
                                                                    <td title=\"";
                                // line 2184
                                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "devreference", [], "any", false, false, false, 2184));
                                yield "\">
                                                                        <a href=\"";
                                // line 2185
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "chantier", [], "any", false, false, false, 2185), "id", [], "any", false, false, false, 2185)]), "html", null, true);
                                yield "\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "client", [], "any", false, false, false, 2185), "nomclient", [], "any", false, false, false, 2185)), "html", null, true);
                                yield "
                                                                            | ";
                                // line 2186
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "chantier", [], "any", false, false, false, 2186), "nomchantier", [], "any", false, false, false, 2186)), "html", null, true);
                                yield "</a>
                                                                    </td>

                                                                    <td class=\"text-left col-blue bolo600\">
                                                                        <i class=\"fa fa-user col-blue bolo600\"></i>&nbsp;";
                                // line 2190
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "dobyuser", [], "any", false, false, false, 2190), "nom", [], "any", false, false, false, 2190)), "html", null, true);
                                yield "
                                                                        &nbsp;";
                                // line 2191
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "dobyuser", [], "any", false, false, false, 2191), "prenoms", [], "any", false, false, false, 2191)), "html", null, true);
                                yield "
                                                                    </td>
                                                                </tr>
                                                                ";
                                // line 2194
                                $context["dtth"] = (CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalht", [], "any", false, false, false, 2194) + (isset($context["dtth"]) || array_key_exists("dtth", $context) ? $context["dtth"] : (function () { throw new RuntimeError('Variable "dtth" does not exist.', 2194, $this->source); })()));
                                // line 2195
                                yield "                                                                ";
                                $context["dttc"] = (CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "totalttc", [], "any", false, false, false, 2195) + (isset($context["dttc"]) || array_key_exists("dttc", $context) ? $context["dttc"] : (function () { throw new RuntimeError('Variable "dttc" does not exist.', 2195, $this->source); })()));
                                // line 2196
                                yield "                                                            ";
                            }
                            // line 2197
                            yield "                                                        ";
                        }
                        // line 2198
                        yield "                                                    ";
                    }
                    // line 2199
                    yield "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['devis'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 2200
                yield "                                            ";
            }
            // line 2201
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2202
        yield "                                        </tbody>
                                        <tfoot>
                                        <tr class=\"text-center bolderr\">
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th class=\"text-center bg-blue col-white\">";
        // line 2209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["dtth"]) || array_key_exists("dtth", $context) ? $context["dtth"] : (function () { throw new RuntimeError('Variable "dtth" does not exist.', 2209, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</th>
                                            <th class=\"text-center bg-blue col-white\">";
        // line 2210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["dttc"]) || array_key_exists("dttc", $context) ? $context["dttc"] : (function () { throw new RuntimeError('Variable "dttc" does not exist.', 2210, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 2222
        yield "


                    ";
        // line 2226
        yield "                    ";
        $context["decjour"] = 0;
        // line 2227
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["decomptes"]) || array_key_exists("decomptes", $context) ? $context["decomptes"] : (function () { throw new RuntimeError('Variable "decomptes" does not exist.', 2227, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["decompte"]) {
            // line 2228
            yield "                        ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "devis", [], "any", false, false, false, 2228), "client", [], "any", false, false, false, 2228), "corbeille", [], "any", false, false, false, 2228))) {
                // line 2229
                yield "                            ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "corbeille", [], "any", false, false, false, 2229))) {
                    // line 2230
                    yield "                                ";
                    $context["decjour"] = ((isset($context["decjour"]) || array_key_exists("decjour", $context) ? $context["decjour"] : (function () { throw new RuntimeError('Variable "decjour" does not exist.', 2230, $this->source); })()) + 1);
                    // line 2231
                    yield "                            ";
                }
                // line 2232
                yield "                        ";
            }
            // line 2233
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['decompte'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2234
        yield "                    <div class=\"panel panel-pri\" style=\"margin-top: 20px !important\">
                        <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingDecoJ\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseDecoJ\" aria-expanded=\"false\"
                                   aria-controls=\"collapseDecoJ\" style=\"font-size: 16px!important\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>
                                    Décomptes du jour<span
                                            class=\"badge bg-pink\"
                                            style=\"float: right !important;\">";
        // line 2243
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["decjour"]) || array_key_exists("decjour", $context) ? $context["decjour"] : (function () { throw new RuntimeError('Variable "decjour" does not exist.', 2243, $this->source); })()), "html", null, true);
        yield "</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseDecoJ\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingDecoJ\">
                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"table-responsive\">
                                    <table class=\"table-striped table-bordered display nowrap\" style=\"width: 100%\"
                                           id=\"dataDECOMPTE3\">
                                        <thead>
                                        <tr class=\"text-center bolderr\">
                                            <th class=\"mw30\"></th>
                                            <th class=\"mw30\"></th>
                                            <th>DATE</th>
                                            <th>N° DÉCOMPTE</th>
                                            <th>N° DEVIS</th>
                                            <th>N° FACTURE</th>
                                            <th>MONTANT TTC</th>
                                            <th>AVANCEMENT</th>
                                            <th>VALEUR TTC</th>
                                            <th>ETAT</th>
                                            <th>CREÉ PAR</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 2269
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["decomptes"]) || array_key_exists("decomptes", $context) ? $context["decomptes"] : (function () { throw new RuntimeError('Variable "decomptes" does not exist.', 2269, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["decompte"]) {
            // line 2270
            yield "                                            ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "corbeille", [], "any", false, false, false, 2270))) {
                // line 2271
                yield "                                                ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "devis", [], "any", false, false, false, 2271), "client", [], "any", false, false, false, 2271), "corbeille", [], "any", false, false, false, 2271))) {
                    // line 2272
                    yield "                                                    <tr>
                                                        <td class=\"text-center\">
                                                            <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                   class=\"DECO3\" value=\"";
                    // line 2275
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "id", [], "any", false, false, false, 2275), "html", null, true);
                    yield "\">
                                                        </td>
                                                        <td class=\"text-center\">
                                                            <a href=\"#\"
                                                               onclick=\"shasha(";
                    // line 2279
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "id", [], "any", false, false, false, 2279), "html", null, true);
                    yield ",'imprimdecompte');\">
                                                                <i class=\"fa fa-eye col-green\"
                                                                   aria-hidden=\"true\"></i>
                                                            </a>
                                                        </td>
                                                        <td>";
                    // line 2284
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "date", [], "any", false, false, false, 2284), "y.m.d H:m"), "html", null, true);
                    yield "</td>
                                                        <td>
                                                            <a href=\"";
                    // line 2286
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdecompte", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "id", [], "any", false, false, false, 2286), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "chantier", [], "any", false, false, false, 2286), "id", [], "any", false, false, false, 2286)]), "html", null, true);
                    yield "\"
                                                               class=\"bolo600\"
                                                               class=\"nowrap\"
                                                               style=\"color:dodgerblue\">
                                                                ";
                    // line 2290
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "etat", [], "any", false, false, false, 2290) == "valide")) {
                        // line 2291
                        yield "                                                                    <span class=\"badge badge-pill badge-primary\">V</span>
                                                                ";
                    } else {
                        // line 2293
                        yield "                                                                    <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                ";
                    }
                    // line 2295
                    yield "                                                                DÉCOMPTE&nbsp;N°";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "numdecompte", [], "any", false, false, false, 2295), "html", null, true);
                    yield "
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href=\"";
                    // line 2299
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "devis", [], "any", false, false, false, 2299), "id", [], "any", false, false, false, 2299), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "chantier", [], "any", false, false, false, 2299), "id", [], "any", false, false, false, 2299)]), "html", null, true);
                    yield "\"
                                                               class=\"bolo600\"
                                                               style=\"color:dodgerblue\">
                                                                ";
                    // line 2302
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "devis", [], "any", false, false, false, 2302), "etat", [], "any", false, false, false, 2302) == "valide")) {
                        // line 2303
                        yield "                                                                    <span class=\"badge badge-pill badge-primary\">V</span>
                                                                ";
                    } else {
                        // line 2305
                        yield "                                                                    <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                ";
                    }
                    // line 2307
                    yield "                                                                DEVIS&nbsp;N°";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "devis", [], "any", false, false, false, 2307), "iddevis", [], "any", false, false, false, 2307), "html", null, true);
                    yield "
                                                            </a>
                                                        </td>
                                                        <td>
                                                            ";
                    // line 2311
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "facture", [], "any", false, false, false, 2311)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 2312
                        yield "                                                                <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editfacture", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "facture", [], "any", false, false, false, 2312), "id", [], "any", false, false, false, 2312), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "chantier", [], "any", false, false, false, 2312), "id", [], "any", false, false, false, 2312)]), "html", null, true);
                        yield "\"
                                                                   class=\"bolo600\"
                                                                   style=\"color:dodgerblue\">
                                                                    ";
                        // line 2315
                        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "facture", [], "any", false, false, false, 2315), "etat", [], "any", false, false, false, 2315) == "valide")) {
                            // line 2316
                            yield "                                                                        <span class=\"badge badge-pill badge-primary\">V</span>
                                                                    ";
                        } else {
                            // line 2318
                            yield "                                                                        <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                    ";
                        }
                        // line 2320
                        yield "                                                                    FACTURE N°";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "facture", [], "any", false, false, false, 2320), "numfacture", [], "any", false, false, false, 2320), "html", null, true);
                        yield "
                                                                </a>
                                                            ";
                    }
                    // line 2323
                    yield "                                                        </td>
                                                        ";
                    // line 2324
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "devis", [], "any", false, false, false, 2324), "ptva", [], "any", false, false, false, 2324) == "non")) {
                        // line 2325
                        yield "                                                            <td class=\"text-right bolo600\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "totalht", [], "any", false, false, false, 2325), 2, ",", " "), "html", null, true);
                        yield "</td>
                                                        ";
                    } else {
                        // line 2327
                        yield "                                                            <td class=\"text-right bolo600\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "totalht", [], "any", false, false, false, 2327) + ((CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "totalht", [], "any", false, false, false, 2327) * CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "devis", [], "any", false, false, false, 2327), "tva", [], "any", false, false, false, 2327)) / 100)), 2, ",", " "), "html", null, true);
                        yield "</td>
                                                        ";
                    }
                    // line 2329
                    yield "                                                        <td class=\"text-center col-pink bolo600\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "avancement", [], "any", false, false, false, 2329), 2, ",", " "), "html", null, true);
                    yield "
                                                            %
                                                        </td>
                                                        ";
                    // line 2332
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "devis", [], "any", false, false, false, 2332), "ptva", [], "any", false, false, false, 2332) == "non")) {
                        // line 2333
                        yield "                                                            <td class=\"text-right bolo600\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "apayer", [], "any", false, false, false, 2333), 2, ",", " "), "html", null, true);
                        yield "</td>
                                                        ";
                    } else {
                        // line 2335
                        yield "                                                            <td class=\"text-right bolo600\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "apayer", [], "any", false, false, false, 2335) + ((CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "apayer", [], "any", false, false, false, 2335) * CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "devis", [], "any", false, false, false, 2335), "tva", [], "any", false, false, false, 2335)) / 100)), 2, ",", " "), "html", null, true);
                        yield "</td>
                                                        ";
                    }
                    // line 2337
                    yield "                                                        <td>
                                                            <a href=\"";
                    // line 2338
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "chantier", [], "any", false, false, false, 2338), "id", [], "any", false, false, false, 2338)]), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "client", [], "any", false, false, false, 2338), "nomclient", [], "any", false, false, false, 2338), "html", null, true);
                    yield "
                                                                |
                                                                ";
                    // line 2340
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "chantier", [], "any", false, false, false, 2340), "nomchantier", [], "any", false, false, false, 2340), "html", null, true);
                    yield "</a></td>
                                                        <td class=\"text-left col-blue bolo600\">
                                                            <i class=\"fa fa-user col-blue bolo600\"></i>&nbsp;
                                                            ";
                    // line 2343
                    if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "dobyuser", [], "any", false, false, false, 2343))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 2344
                        yield "                                                                ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "dobyuser", [], "any", false, false, false, 2344), "nom", [], "any", false, false, false, 2344)), "html", null, true);
                        yield "
                                                                &nbsp;";
                        // line 2345
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "dobyuser", [], "any", false, false, false, 2345), "prenoms", [], "any", false, false, false, 2345)), "html", null, true);
                        yield "
                                                            ";
                    }
                    // line 2347
                    yield "                                                        </td>
                                                    </tr>
                                                ";
                }
                // line 2350
                yield "                                            ";
            }
            // line 2351
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['decompte'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2352
        yield "                                        </tbody>
                                    </table>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>


                    ";
        // line 2361
        $context["decnv"] = 0;
        // line 2362
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["chantiers"]) || array_key_exists("chantiers", $context) ? $context["chantiers"] : (function () { throw new RuntimeError('Variable "chantiers" does not exist.', 2362, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
            // line 2363
            yield "                        ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 2363))) {
                // line 2364
                yield "                            ";
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 2364) == "archiver") && (null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 2364)))) {
                    // line 2365
                    yield "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "decomptes", [], "any", false, false, false, 2365));
                    foreach ($context['_seq'] as $context["_key"] => $context["decompte"]) {
                        // line 2366
                        yield "                                    ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "etat", [], "any", false, false, false, 2366) == "save")) {
                            // line 2367
                            yield "                                        ";
                            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "corbeille", [], "any", false, false, false, 2367))) {
                                // line 2368
                                yield "                                            ";
                                $context["decnv"] = ((isset($context["decnv"]) || array_key_exists("decnv", $context) ? $context["decnv"] : (function () { throw new RuntimeError('Variable "decnv" does not exist.', 2368, $this->source); })()) + 1);
                                // line 2369
                                yield "                                        ";
                            }
                            // line 2370
                            yield "                                    ";
                        }
                        // line 2371
                        yield "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['decompte'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 2372
                    yield "                            ";
                }
                // line 2373
                yield "                        ";
            }
            // line 2374
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2375
        yield "                    <div class=\"panel panel-pri\">
                        <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingDeco\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseDeco\" aria-expanded=\"false\"
                                   aria-controls=\"collapseDeco\" style=\"font-size: 16px!important\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>
                                    Décomptes non validés<span
                                            class=\"badge bg-pink\"
                                            style=\"float: right !important;\">";
        // line 2384
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["decnv"]) || array_key_exists("decnv", $context) ? $context["decnv"] : (function () { throw new RuntimeError('Variable "decnv" does not exist.', 2384, $this->source); })()), "html", null, true);
        yield "</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseDeco\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingDeco\">
                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"table-responsive\">
                                    <table class=\"table-striped table-bordered display nowrap\" style=\"width: 100%\"
                                           id=\"dataDECOMPTE4\">
                                        <thead>
                                        <tr class=\"text-center bolderr\">
                                            <th class=\"mw30\"></th>
                                            <th class=\"mw30\"></th>
                                            <th>DATE</th>
                                            <th>N° DÉCOMPTE</th>
                                            <th>N° DEVIS</th>
                                            <th>N° FACTURE</th>
                                            <th>MONTANT TTC</th>
                                            <th>AVANCEMENT</th>
                                            <th>VALEUR TTC</th>
                                            <th>ETAT</th>
                                            <th>CREÉ PAR</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 2410
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["chantiers"]) || array_key_exists("chantiers", $context) ? $context["chantiers"] : (function () { throw new RuntimeError('Variable "chantiers" does not exist.', 2410, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
            // line 2411
            yield "                                            ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 2411))) {
                // line 2412
                yield "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "decomptes", [], "any", false, false, false, 2412));
                foreach ($context['_seq'] as $context["_key"] => $context["decompte"]) {
                    // line 2413
                    yield "                                                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "etat", [], "any", false, false, false, 2413) == "save")) {
                        // line 2414
                        yield "                                                        ";
                        if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "corbeille", [], "any", false, false, false, 2414))) {
                            // line 2415
                            yield "                                                            <tr>
                                                                <td class=\"text-center\">
                                                                    <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                           class=\"DECO4\"
                                                                           value=\"";
                            // line 2419
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "id", [], "any", false, false, false, 2419), "html", null, true);
                            yield "\"></td>
                                                                <td class=\"text-center\">
                                                                    <a href=\"#\"
                                                                       onclick=\"shasha(";
                            // line 2422
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "id", [], "any", false, false, false, 2422), "html", null, true);
                            yield ",'imprimdecompte');\">
                                                                        <i class=\"fa fa-eye col-green\"
                                                                           aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </td>
                                                                <td>";
                            // line 2427
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "date", [], "any", false, false, false, 2427), "y.m.d H:m"), "html", null, true);
                            yield "</td>
                                                                <td>
                                                                    <a href=\"";
                            // line 2429
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdecompte", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "id", [], "any", false, false, false, 2429), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "chantier", [], "any", false, false, false, 2429), "id", [], "any", false, false, false, 2429)]), "html", null, true);
                            yield "\"
                                                                       class=\"bolo600\"
                                                                       style=\"color:dodgerblue\"><span
                                                                                class=\"badge badge-pill badge-blue-grey\">V</span>&nbsp;DÉCOMPTE&nbsp;N°";
                            // line 2432
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "numdecompte", [], "any", false, false, false, 2432), "html", null, true);
                            yield "
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a href=\"";
                            // line 2436
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "devis", [], "any", false, false, false, 2436), "id", [], "any", false, false, false, 2436), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "chantier", [], "any", false, false, false, 2436), "id", [], "any", false, false, false, 2436)]), "html", null, true);
                            yield "\"
                                                                       class=\"bolo600\"
                                                                       style=\"color:dodgerblue\">
                                                                        ";
                            // line 2439
                            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "devis", [], "any", false, false, false, 2439), "etat", [], "any", false, false, false, 2439) == "valide")) {
                                // line 2440
                                yield "                                                                            <span class=\"badge badge-pill badge-primary\">V</span>
                                                                        ";
                            } else {
                                // line 2442
                                yield "                                                                            <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                        ";
                            }
                            // line 2444
                            yield "                                                                        DEVIS&nbsp;N°&nbsp;";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "devis", [], "any", false, false, false, 2444), "iddevis", [], "any", false, false, false, 2444), "html", null, true);
                            yield "
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    ";
                            // line 2448
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "facture", [], "any", false, false, false, 2448)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 2449
                                yield "                                                                        <a href=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editfacture", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "facture", [], "any", false, false, false, 2449), "id", [], "any", false, false, false, 2449), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "chantier", [], "any", false, false, false, 2449), "id", [], "any", false, false, false, 2449)]), "html", null, true);
                                yield "\"
                                                                           class=\"bolo600\"
                                                                           class=\"col-pink\">
                                                                            ";
                                // line 2452
                                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "facture", [], "any", false, false, false, 2452), "etat", [], "any", false, false, false, 2452) == "valide")) {
                                    // line 2453
                                    yield "                                                                                <span class=\"badge badge-pill badge-primary\">V</span>
                                                                            ";
                                } else {
                                    // line 2455
                                    yield "                                                                                <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                            ";
                                }
                                // line 2457
                                yield "                                                                            FACTURE&nbsp;N°&nbsp;";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "facture", [], "any", false, false, false, 2457), "numfacture", [], "any", false, false, false, 2457), "html", null, true);
                                yield "
                                                                        </a>
                                                                    ";
                            }
                            // line 2460
                            yield "                                                                </td>
                                                                ";
                            // line 2461
                            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "devis", [], "any", false, false, false, 2461), "ptva", [], "any", false, false, false, 2461) == "non")) {
                                // line 2462
                                yield "                                                                    <td class=\"text-right bolo600\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "totalht", [], "any", false, false, false, 2462), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                ";
                            } else {
                                // line 2464
                                yield "                                                                    <td class=\"text-right bolo600\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "totalht", [], "any", false, false, false, 2464) + ((CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "totalht", [], "any", false, false, false, 2464) * CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "devis", [], "any", false, false, false, 2464), "tva", [], "any", false, false, false, 2464)) / 100)), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                ";
                            }
                            // line 2466
                            yield "
                                                                <td class=\"text-center col-pink bolo600\">";
                            // line 2467
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "avancement", [], "any", false, false, false, 2467), 2, ",", " "), "html", null, true);
                            yield "
                                                                    %
                                                                </td>

                                                                ";
                            // line 2471
                            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "devis", [], "any", false, false, false, 2471), "ptva", [], "any", false, false, false, 2471) == "non")) {
                                // line 2472
                                yield "                                                                    <td class=\"text-right bolo600\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "apayer", [], "any", false, false, false, 2472), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                ";
                            } else {
                                // line 2474
                                yield "                                                                    <td class=\"text-right bolo600\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "apayer", [], "any", false, false, false, 2474) + ((CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "apayer", [], "any", false, false, false, 2474) * CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "devis", [], "any", false, false, false, 2474), "tva", [], "any", false, false, false, 2474)) / 100)), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                ";
                            }
                            // line 2476
                            yield "
                                                                <td>
                                                                    <a href=\"";
                            // line 2478
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "chantier", [], "any", false, false, false, 2478), "id", [], "any", false, false, false, 2478)]), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "client", [], "any", false, false, false, 2478), "nomclient", [], "any", false, false, false, 2478), "html", null, true);
                            yield "
                                                                        |
                                                                        ";
                            // line 2480
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 2480), "html", null, true);
                            yield "</a></td>
                                                                <td class=\"text-left col-blue bolo600\">
                                                                    <i class=\"fa fa-user col-blue bolo600\"></i>&nbsp;
                                                                    ";
                            // line 2483
                            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "dobyuser", [], "any", false, false, false, 2483))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 2484
                                yield "                                                                        ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "dobyuser", [], "any", false, false, false, 2484), "nom", [], "any", false, false, false, 2484)), "html", null, true);
                                yield "&nbsp;";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["decompte"], "dobyuser", [], "any", false, false, false, 2484), "prenoms", [], "any", false, false, false, 2484)), "html", null, true);
                                yield "
                                                                    ";
                            }
                            // line 2486
                            yield "                                                                </td>
                                                            </tr>
                                                        ";
                        }
                        // line 2489
                        yield "                                                    ";
                    }
                    // line 2490
                    yield "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['decompte'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 2491
                yield "                                            ";
            }
            // line 2492
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2493
        yield "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 2500
        yield "
                    ";
        // line 2502
        yield "                    ";
        $context["facjour"] = 0;
        // line 2503
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["factures"]) || array_key_exists("factures", $context) ? $context["factures"] : (function () { throw new RuntimeError('Variable "factures" does not exist.', 2503, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 2504
            yield "                        ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "client", [], "any", false, false, false, 2504), "corbeille", [], "any", false, false, false, 2504))) {
                // line 2505
                yield "                            ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "corbeille", [], "any", false, false, false, 2505))) {
                    // line 2506
                    yield "                                ";
                    $context["facjour"] = ((isset($context["facjour"]) || array_key_exists("facjour", $context) ? $context["facjour"] : (function () { throw new RuntimeError('Variable "facjour" does not exist.', 2506, $this->source); })()) + 1);
                    // line 2507
                    yield "                            ";
                }
                // line 2508
                yield "                        ";
            }
            // line 2509
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['facture'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2510
        yield "                    <div class=\"panel panel-pri shadow\" style=\"margin-top: 20px !important\">
                        <div class=\"panel-heading bg-col-blue-grey\" role=\"tab\" id=\"headingFact\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed  col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseFact\" aria-expanded=\"false\"
                                   aria-controls=\"collapseFact\" style=\"font-size: 16px!important\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>
                                    Factures du jour<span
                                            class=\"badge bg-pink\"
                                            style=\"float: right !important;\">";
        // line 2519
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["facjour"]) || array_key_exists("facjour", $context) ? $context["facjour"] : (function () { throw new RuntimeError('Variable "facjour" does not exist.', 2519, $this->source); })()), "html", null, true);
        yield "</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseFact\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingFact\">
                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"card-body\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table-striped table-bordered display nowrap\"
                                               style=\"width: 100%\" id=\"dataFACTURE3\">
                                            <thead>
                                            <tr class=\"text-center\">
                                                <th class=\"mw30\"></th>
                                                <th class=\"mw30\"></th>
                                                <th>DATE</th>
                                                <th>N° FACTURE</th>
                                                <th>N° DEVIS</th>
                                                <th>N° DÉCOMPTE</th>
                                                <th>TOTAL HT</th>
                                                <th>TOTAL TTC</th>
                                                <th>RÉFÉRENCE</th>
                                                <th>ETAT</th>
                                                <th>CREÉ PAR</th>
                                            </tr>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 2547
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["factures"]) || array_key_exists("factures", $context) ? $context["factures"] : (function () { throw new RuntimeError('Variable "factures" does not exist.', 2547, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 2548
            yield "                                                ";
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "corbeille", [], "any", false, false, false, 2548) == null) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "client", [], "any", false, false, false, 2548), "corbeille", [], "any", false, false, false, 2548) == null))) {
                // line 2549
                yield "                                                    <tr>
                                                        <td class=\"text-center\">
                                                            <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                   class=\"FACTURE3\" value=\"";
                // line 2552
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "id", [], "any", false, false, false, 2552), "html", null, true);
                yield "\"></td>

                                                        <td class=\"text-center\">
                                                            <a href=\"#\"
                                                               onclick=\"shasha(";
                // line 2556
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "id", [], "any", false, false, false, 2556), "html", null, true);
                yield ",'imprimfacture');\">
                                                                <i class=\"fa fa-eye col-green\"
                                                                   aria-hidden=\"true\"></i>
                                                            </a>
                                                        </td>
                                                        <td>";
                // line 2561
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "date", [], "any", false, false, false, 2561), "y.m.d H:m"), "html", null, true);
                yield "</td>
                                                        <td>
                                                            ";
                // line 2563
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "type", [], "any", false, false, false, 2563) == "non")) {
                    // line 2564
                    yield "                                                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editfacture", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "id", [], "any", false, false, false, 2564), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 2564), "id", [], "any", false, false, false, 2564)]), "html", null, true);
                    yield "\"
                                                                   class=\"bolo600\">
                                                                    <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                    <span class=\"badge badge-pill badge-danger\">FA</span>FACTURE
                                                                    N°";
                    // line 2568
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "numfacture", [], "any", false, false, false, 2568), "html", null, true);
                    yield "
                                                                </a>
                                                            ";
                } else {
                    // line 2571
                    yield "                                                                <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                <a href=\"";
                    // line 2572
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editfacture", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "id", [], "any", false, false, false, 2572), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 2572), "id", [], "any", false, false, false, 2572)]), "html", null, true);
                    yield "\"
                                                                   class=\"bolo600\">FACTURE
                                                                    N°";
                    // line 2574
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "numfacture", [], "any", false, false, false, 2574), "html", null, true);
                    yield "</a>
                                                            ";
                }
                // line 2576
                yield "                                                        </td>
                                                        <td>
                                                            ";
                // line 2578
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "type", [], "any", false, false, false, 2578) == "simple")) {
                    // line 2579
                    yield "                                                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "devis", [], "any", false, false, false, 2579), "id", [], "any", false, false, false, 2579), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 2579), "id", [], "any", false, false, false, 2579)]), "html", null, true);
                    yield "\"
                                                                   class=\"bolo600\">
                                                                    ";
                    // line 2581
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "devis", [], "any", false, false, false, 2581), "etat", [], "any", false, false, false, 2581) == "valide")) {
                        // line 2582
                        yield "                                                                        <span class=\"badge badge-pill badge-primary\">V</span>
                                                                    ";
                    } else {
                        // line 2584
                        yield "                                                                        <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                    ";
                    }
                    // line 2586
                    yield "                                                                    DEVIS N°";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "devis", [], "any", false, false, false, 2586), "iddevis", [], "any", false, false, false, 2586), "html", null, true);
                    yield "</a>
                                                            ";
                }
                // line 2588
                yield "                                                            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "type", [], "any", false, false, false, 2588) == "devis")) {
                    // line 2589
                    yield "                                                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "devis", [], "any", false, false, false, 2589), "id", [], "any", false, false, false, 2589), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 2589), "id", [], "any", false, false, false, 2589)]), "html", null, true);
                    yield "\"
                                                                   class=\"bolo600\">
                                                                    ";
                    // line 2591
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "devis", [], "any", false, false, false, 2591), "etat", [], "any", false, false, false, 2591) == "valide")) {
                        // line 2592
                        yield "                                                                        <span class=\"badge badge-pill badge-primary\">V</span>
                                                                    ";
                    } else {
                        // line 2594
                        yield "                                                                        <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                    ";
                    }
                    // line 2596
                    yield "                                                                    DEVIS N°";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "devis", [], "any", false, false, false, 2596), "iddevis", [], "any", false, false, false, 2596), "html", null, true);
                    yield "</a>
                                                            ";
                }
                // line 2598
                yield "                                                            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "type", [], "any", false, false, false, 2598) == "acompte")) {
                    // line 2599
                    yield "                                                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "acompte", [], "any", false, false, false, 2599), "devis", [], "any", false, false, false, 2599), "id", [], "any", false, false, false, 2599), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 2599), "id", [], "any", false, false, false, 2599)]), "html", null, true);
                    yield "\"
                                                                   class=\"bolo600\">
                                                                    ";
                    // line 2601
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "acompte", [], "any", false, false, false, 2601), "devis", [], "any", false, false, false, 2601), "etat", [], "any", false, false, false, 2601) == "valide")) {
                        // line 2602
                        yield "                                                                        <span class=\"badge badge-pill badge-primary\">V</span>
                                                                    ";
                    } else {
                        // line 2604
                        yield "                                                                        <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                    ";
                    }
                    // line 2606
                    yield "                                                                    DEVIS N°";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "acompte", [], "any", false, false, false, 2606), "devis", [], "any", false, false, false, 2606), "iddevis", [], "any", false, false, false, 2606), "html", null, true);
                    yield "</a>
                                                            ";
                }
                // line 2608
                yield "                                                            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "type", [], "any", false, false, false, 2608) == "decompte")) {
                    // line 2609
                    yield "                                                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "decompte", [], "any", false, false, false, 2609), "devis", [], "any", false, false, false, 2609), "id", [], "any", false, false, false, 2609), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 2609), "id", [], "any", false, false, false, 2609)]), "html", null, true);
                    yield "\"
                                                                   class=\"bolo600\">
                                                                    ";
                    // line 2611
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "decompte", [], "any", false, false, false, 2611), "devis", [], "any", false, false, false, 2611), "etat", [], "any", false, false, false, 2611) == "valide")) {
                        // line 2612
                        yield "                                                                        <span class=\"badge badge-pill badge-primary\">V</span>
                                                                    ";
                    } else {
                        // line 2614
                        yield "                                                                        <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                    ";
                    }
                    // line 2616
                    yield "                                                                    DEVIS N°";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "decompte", [], "any", false, false, false, 2616), "devis", [], "any", false, false, false, 2616), "iddevis", [], "any", false, false, false, 2616), "html", null, true);
                    yield "</a>
                                                            ";
                }
                // line 2618
                yield "                                                        </td>
                                                        <td>
                                                            ";
                // line 2620
                if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "decompte", [], "any", false, false, false, 2620))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 2621
                    yield "                                                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdecompte", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "decompte", [], "any", false, false, false, 2621), "id", [], "any", false, false, false, 2621), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 2621), "id", [], "any", false, false, false, 2621)]), "html", null, true);
                    yield "\"
                                                                   class=\"bolo600\">
                                                                    ";
                    // line 2623
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "decompte", [], "any", false, false, false, 2623), "etat", [], "any", false, false, false, 2623) == "valide")) {
                        // line 2624
                        yield "                                                                        <span class=\"badge badge-pill badge-primary\">V</span>
                                                                    ";
                    } else {
                        // line 2626
                        yield "                                                                        <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                    ";
                    }
                    // line 2628
                    yield "                                                                    DÉCOMPTE N°";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "decompte", [], "any", false, false, false, 2628), "numdecompte", [], "any", false, false, false, 2628), "html", null, true);
                    yield "
                                                                </a>
                                                            ";
                }
                // line 2631
                yield "                                                        </td>
                                                        <td class=\"text-right bolo600\">";
                // line 2632
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "totalht", [], "any", false, false, false, 2632), 2, ",", " "), "html", null, true);
                yield "</td>
                                                        <td class=\"text-right bolo600\">";
                // line 2633
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "totalttc", [], "any", false, false, false, 2633), 2, ",", " "), "html", null, true);
                yield "</td>
                                                        <td title=\"";
                // line 2634
                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "factreference", [], "any", false, false, false, 2634));
                yield "\"
                                                            class=\"col-deep-orange\">";
                // line 2635
                yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "factreference", [], "any", false, false, false, 2635));
                yield "</td>
                                                        <td>
                                                            <a href=\"";
                // line 2637
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 2637), "id", [], "any", false, false, false, 2637)]), "html", null, true);
                yield "\">
                                                                ";
                // line 2638
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 2638), "nomchantier", [], "any", false, false, false, 2638), "html", null, true);
                yield "
                                                                | ";
                // line 2639
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 2639), "client", [], "any", false, false, false, 2639), "nomclient", [], "any", false, false, false, 2639), "html", null, true);
                yield "</a>


                                                        </td>
                                                        <td class=\"text-left col-blue bolo600\">
                                                            <i class=\"fa fa-user col-blue bolo600\"></i>&nbsp;
                                                            ";
                // line 2645
                if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "dobyuser", [], "any", false, false, false, 2645))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 2646
                    yield "                                                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "dobyuser", [], "any", false, false, false, 2646), "nom", [], "any", false, false, false, 2646)), "html", null, true);
                    yield "
                                                                &nbsp;";
                    // line 2647
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "dobyuser", [], "any", false, false, false, 2647), "prenoms", [], "any", false, false, false, 2647)), "html", null, true);
                    yield "
                                                            ";
                }
                // line 2649
                yield "                                                        </td>

                                                    </tr>
                                                ";
            }
            // line 2653
            yield "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['facture'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2654
        yield "                                            </tbody>
                                        </table>
                                        <br></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    ";
        // line 2662
        $context["facnv"] = 0;
        // line 2663
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["chantiers"]) || array_key_exists("chantiers", $context) ? $context["chantiers"] : (function () { throw new RuntimeError('Variable "chantiers" does not exist.', 2663, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
            // line 2664
            yield "                        ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 2664))) {
                // line 2665
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "factures", [], "any", false, false, false, 2665));
                foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
                    // line 2666
                    yield "                                ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "etat", [], "any", false, false, false, 2666) != "valide") && (null === CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "corbeille", [], "any", false, false, false, 2666)))) {
                        // line 2667
                        yield "                                    ";
                        if ((null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "client", [], "any", false, false, false, 2667), "corbeille", [], "any", false, false, false, 2667))) {
                            // line 2668
                            yield "                                        ";
                            $context["facnv"] = ((isset($context["facnv"]) || array_key_exists("facnv", $context) ? $context["facnv"] : (function () { throw new RuntimeError('Variable "facnv" does not exist.', 2668, $this->source); })()) + 1);
                            // line 2669
                            yield "                                    ";
                        }
                        // line 2670
                        yield "                                ";
                    }
                    // line 2671
                    yield "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['facture'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 2672
                yield "                        ";
            }
            // line 2673
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2674
        yield "                    <div class=\"panel panel-pri shadow\">
                        <div class=\"panel-heading bg-col-blue-grey\" role=\"tab\" id=\"headingFac\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed  col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseFac\" aria-expanded=\"false\"
                                   aria-controls=\"collapseFac\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>
                                    Factures non validées<span
                                            class=\"badge bg-pink\"
                                            style=\"float: right !important;\">";
        // line 2683
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["facnv"]) || array_key_exists("facnv", $context) ? $context["facnv"] : (function () { throw new RuntimeError('Variable "facnv" does not exist.', 2683, $this->source); })()), "html", null, true);
        yield "</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseFac\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingFac\">
                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"card-body\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table-striped table-bordered display nowrap\"
                                               style=\"width: 100%\" id=\"dataFACTURE4\">
                                            <thead>
                                            <tr class=\"text-center\">
                                                <th class=\"mw30\"></th>
                                                <th class=\"mw30\"></th>
                                                <th>DATE</th>
                                                <th>N° FACTURE</th>
                                                <th>N° DEVIS</th>
                                                <th>N° DÉCOMPTE</th>
                                                <th>TOTAL HT</th>
                                                <th>TOTAL TTC</th>
                                                <th>RÉFÉRENCE</th>
                                                <th>ETAT</th>
                                                <th>CREÉ PAR</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 2710
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["chantiers"]) || array_key_exists("chantiers", $context) ? $context["chantiers"] : (function () { throw new RuntimeError('Variable "chantiers" does not exist.', 2710, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
            // line 2711
            yield "                                                ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 2711))) {
                // line 2712
                yield "                                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "factures", [], "any", false, false, false, 2712));
                foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
                    // line 2713
                    yield "                                                        ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "etat", [], "any", false, false, false, 2713) != "valide") && (null === CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "corbeille", [], "any", false, false, false, 2713)))) {
                        // line 2714
                        yield "                                                            ";
                        if ((null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "client", [], "any", false, false, false, 2714), "corbeille", [], "any", false, false, false, 2714))) {
                            // line 2715
                            yield "                                                                <tr>
                                                                    <td class=\"text-center\">
                                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                               class=\"FACTURE4\"
                                                                               value=\"";
                            // line 2719
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "id", [], "any", false, false, false, 2719), "html", null, true);
                            yield "\">
                                                                    </td>

                                                                    <td class=\"text-center\">
                                                                        <a href=\"#\"
                                                                           onclick=\"shasha(";
                            // line 2724
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "id", [], "any", false, false, false, 2724), "html", null, true);
                            yield ",'imprimfacture');\">
                                                                            <i class=\"fa fa-eye col-green\"
                                                                               aria-hidden=\"true\"></i>
                                                                        </a>
                                                                    </td>
                                                                    <td>";
                            // line 2729
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "date", [], "any", false, false, false, 2729), "y.m.d H:m"), "html", null, true);
                            yield "</td>
                                                                    <td>
                                                                        ";
                            // line 2731
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "type", [], "any", false, false, false, 2731) == "non")) {
                                // line 2732
                                yield "                                                                            <a href=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editfacture", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "id", [], "any", false, false, false, 2732), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 2732), "id", [], "any", false, false, false, 2732)]), "html", null, true);
                                yield "\"
                                                                               class=\"bolo600\">
                                                                                <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                                <span class=\"badge badge-pill badge-danger\">FA</span>FACTURE
                                                                                N°";
                                // line 2736
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "numfacture", [], "any", false, false, false, 2736), "html", null, true);
                                yield "
                                                                            </a>
                                                                        ";
                            } else {
                                // line 2739
                                yield "                                                                            <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                            <a href=\"";
                                // line 2740
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editfacture", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "id", [], "any", false, false, false, 2740), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 2740), "id", [], "any", false, false, false, 2740)]), "html", null, true);
                                yield "\"
                                                                               class=\"bolo600\">FACTURE
                                                                                N° ";
                                // line 2742
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "numfacture", [], "any", false, false, false, 2742), "html", null, true);
                                yield "</a>
                                                                        ";
                            }
                            // line 2744
                            yield "                                                                    </td>
                                                                    <td>
                                                                        ";
                            // line 2746
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "type", [], "any", false, false, false, 2746) == "simple")) {
                                // line 2747
                                yield "                                                                            <a href=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "devis", [], "any", false, false, false, 2747), "id", [], "any", false, false, false, 2747), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 2747), "id", [], "any", false, false, false, 2747)]), "html", null, true);
                                yield "\"
                                                                               class=\"bolo600\">
                                                                                ";
                                // line 2749
                                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "devis", [], "any", false, false, false, 2749), "etat", [], "any", false, false, false, 2749) == "valide")) {
                                    // line 2750
                                    yield "                                                                                    <span class=\"badge badge-pill badge-primary\">V</span>
                                                                                ";
                                } else {
                                    // line 2752
                                    yield "                                                                                    <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                                ";
                                }
                                // line 2754
                                yield "                                                                                DEVIS N°";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "devis", [], "any", false, false, false, 2754), "iddevis", [], "any", false, false, false, 2754), "html", null, true);
                                yield "</a>
                                                                        ";
                            }
                            // line 2756
                            yield "                                                                        ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "type", [], "any", false, false, false, 2756) == "devis")) {
                                // line 2757
                                yield "                                                                            <a href=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "devis", [], "any", false, false, false, 2757), "id", [], "any", false, false, false, 2757), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 2757), "id", [], "any", false, false, false, 2757)]), "html", null, true);
                                yield "\"
                                                                               class=\"bolo600\">
                                                                                ";
                                // line 2759
                                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "devis", [], "any", false, false, false, 2759), "etat", [], "any", false, false, false, 2759) == "valide")) {
                                    // line 2760
                                    yield "                                                                                    <span class=\"badge badge-pill badge-primary\">V</span>
                                                                                ";
                                } else {
                                    // line 2762
                                    yield "                                                                                    <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                                ";
                                }
                                // line 2764
                                yield "                                                                                DEVIS N°";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "devis", [], "any", false, false, false, 2764), "iddevis", [], "any", false, false, false, 2764), "html", null, true);
                                yield "</a>
                                                                        ";
                            }
                            // line 2766
                            yield "                                                                        ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "type", [], "any", false, false, false, 2766) == "acompte")) {
                                // line 2767
                                yield "                                                                            <a href=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "acompte", [], "any", false, false, false, 2767), "devis", [], "any", false, false, false, 2767), "id", [], "any", false, false, false, 2767), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 2767), "id", [], "any", false, false, false, 2767)]), "html", null, true);
                                yield "\"
                                                                               class=\"bolo600\">
                                                                                ";
                                // line 2769
                                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "acompte", [], "any", false, false, false, 2769), "devis", [], "any", false, false, false, 2769), "etat", [], "any", false, false, false, 2769) == "valide")) {
                                    // line 2770
                                    yield "                                                                                    <span class=\"badge badge-pill badge-primary\">V</span>
                                                                                ";
                                } else {
                                    // line 2772
                                    yield "                                                                                    <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                                ";
                                }
                                // line 2774
                                yield "                                                                                DEVIS
                                                                                N°";
                                // line 2775
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "acompte", [], "any", false, false, false, 2775), "devis", [], "any", false, false, false, 2775), "iddevis", [], "any", false, false, false, 2775), "html", null, true);
                                yield "
                                                                            </a>
                                                                        ";
                            }
                            // line 2778
                            yield "                                                                        ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "type", [], "any", false, false, false, 2778) == "decompte")) {
                                // line 2779
                                yield "                                                                            <a href=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "decompte", [], "any", false, false, false, 2779), "devis", [], "any", false, false, false, 2779), "id", [], "any", false, false, false, 2779), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 2779), "id", [], "any", false, false, false, 2779)]), "html", null, true);
                                yield "\"
                                                                               class=\"bolo600\">
                                                                                ";
                                // line 2781
                                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "decompte", [], "any", false, false, false, 2781), "devis", [], "any", false, false, false, 2781), "etat", [], "any", false, false, false, 2781) == "valide")) {
                                    // line 2782
                                    yield "                                                                                    <span class=\"badge badge-pill badge-primary\">V</span>
                                                                                ";
                                } else {
                                    // line 2784
                                    yield "                                                                                    <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                                ";
                                }
                                // line 2786
                                yield "                                                                                DEVIS
                                                                                N°";
                                // line 2787
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "decompte", [], "any", false, false, false, 2787), "devis", [], "any", false, false, false, 2787), "iddevis", [], "any", false, false, false, 2787), "html", null, true);
                                yield "
                                                                            </a>
                                                                        ";
                            }
                            // line 2790
                            yield "                                                                    </td>
                                                                    <td>
                                                                        ";
                            // line 2792
                            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "decompte", [], "any", false, false, false, 2792))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 2793
                                yield "                                                                            <a href=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdecompte", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "decompte", [], "any", false, false, false, 2793), "id", [], "any", false, false, false, 2793), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 2793), "id", [], "any", false, false, false, 2793)]), "html", null, true);
                                yield "\"
                                                                               class=\"bolo600\">
                                                                                ";
                                // line 2795
                                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "decompte", [], "any", false, false, false, 2795), "etat", [], "any", false, false, false, 2795) == "valide")) {
                                    // line 2796
                                    yield "                                                                                    <span class=\"badge badge-pill badge-primary\">V</span>
                                                                                ";
                                } else {
                                    // line 2798
                                    yield "                                                                                    <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                                ";
                                }
                                // line 2800
                                yield "                                                                                DÉCOMPTE
                                                                                N° ";
                                // line 2801
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "decompte", [], "any", false, false, false, 2801), "numdecompte", [], "any", false, false, false, 2801), "html", null, true);
                                yield "
                                                                            </a>
                                                                        ";
                            }
                            // line 2804
                            yield "                                                                    </td>
                                                                    <td class=\"text-right bolo600\">
                                                                        ";
                            // line 2806
                            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "devis", [], "any", false, false, false, 2806))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 2807
                                yield "                                                                            ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "totalht", [], "any", false, false, false, 2807), 2, ",", " "), "html", null, true);
                                yield "
                                                                        ";
                            }
                            // line 2809
                            yield "
                                                                        ";
                            // line 2810
                            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "decompte", [], "any", false, false, false, 2810))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 2811
                                yield "                                                                            ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "totalht", [], "any", false, false, false, 2811), 2, ",", " "), "html", null, true);
                                yield "
                                                                        ";
                            }
                            // line 2813
                            yield "                                                                    </td>
                                                                    <td class=\"text-right bolo600\">
                                                                        ";
                            // line 2815
                            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "devis", [], "any", false, false, false, 2815))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 2816
                                yield "                                                                            ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "totalttc", [], "any", false, false, false, 2816), 2, ",", " "), "html", null, true);
                                yield "
                                                                        ";
                            }
                            // line 2818
                            yield "                                                                        ";
                            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "decompte", [], "any", false, false, false, 2818))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 2819
                                yield "                                                                            ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "totalttc", [], "any", false, false, false, 2819), 2, ",", " "), "html", null, true);
                                yield "
                                                                        ";
                            }
                            // line 2821
                            yield "                                                                    </td>
                                                                    <td title=\"";
                            // line 2822
                            yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "factreference", [], "any", false, false, false, 2822));
                            yield "\"
                                                                        class=\"col-deep-orange\">";
                            // line 2823
                            yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "factreference", [], "any", false, false, false, 2823));
                            yield "</td>
                                                                    <td>
                                                                        <a href=\"";
                            // line 2825
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "chantier", [], "any", false, false, false, 2825), "id", [], "any", false, false, false, 2825)]), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 2825), "html", null, true);
                            yield "
                                                                            | ";
                            // line 2826
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "client", [], "any", false, false, false, 2826), "nomclient", [], "any", false, false, false, 2826), "html", null, true);
                            yield "</a>
                                                                    </td>
                                                                    <td class=\"text-left col-blue bolo600\">
                                                                        <i class=\"fa fa-user col-blue bolo600\"></i>&nbsp;
                                                                        ";
                            // line 2830
                            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "dobyuser", [], "any", false, false, false, 2830))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 2831
                                yield "                                                                            ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "dobyuser", [], "any", false, false, false, 2831), "nom", [], "any", false, false, false, 2831)), "html", null, true);
                                yield "
                                                                            &nbsp;";
                                // line 2832
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["facture"], "dobyuser", [], "any", false, false, false, 2832), "prenoms", [], "any", false, false, false, 2832)), "html", null, true);
                                yield "
                                                                        ";
                            }
                            // line 2834
                            yield "                                                                    </td>
                                                                </tr>
                                                            ";
                        }
                        // line 2837
                        yield "                                                        ";
                    }
                    // line 2838
                    yield "                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['facture'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 2839
                yield "                                                ";
            }
            // line 2840
            yield "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2841
        yield "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 2849
        yield "

                </div>
            </div>
        </div>
    </section>
    <script>
        localStorage.setItem('reloadd', 'chantiers/');
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
        return "content/chantiers.html.twig";
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
        return array (  5483 => 2849,  5474 => 2841,  5468 => 2840,  5465 => 2839,  5459 => 2838,  5456 => 2837,  5451 => 2834,  5446 => 2832,  5441 => 2831,  5439 => 2830,  5432 => 2826,  5426 => 2825,  5421 => 2823,  5417 => 2822,  5414 => 2821,  5408 => 2819,  5405 => 2818,  5399 => 2816,  5397 => 2815,  5393 => 2813,  5387 => 2811,  5385 => 2810,  5382 => 2809,  5376 => 2807,  5374 => 2806,  5370 => 2804,  5364 => 2801,  5361 => 2800,  5357 => 2798,  5353 => 2796,  5351 => 2795,  5345 => 2793,  5343 => 2792,  5339 => 2790,  5333 => 2787,  5330 => 2786,  5326 => 2784,  5322 => 2782,  5320 => 2781,  5314 => 2779,  5311 => 2778,  5305 => 2775,  5302 => 2774,  5298 => 2772,  5294 => 2770,  5292 => 2769,  5286 => 2767,  5283 => 2766,  5277 => 2764,  5273 => 2762,  5269 => 2760,  5267 => 2759,  5261 => 2757,  5258 => 2756,  5252 => 2754,  5248 => 2752,  5244 => 2750,  5242 => 2749,  5236 => 2747,  5234 => 2746,  5230 => 2744,  5225 => 2742,  5220 => 2740,  5217 => 2739,  5211 => 2736,  5203 => 2732,  5201 => 2731,  5196 => 2729,  5188 => 2724,  5180 => 2719,  5174 => 2715,  5171 => 2714,  5168 => 2713,  5163 => 2712,  5160 => 2711,  5156 => 2710,  5126 => 2683,  5115 => 2674,  5109 => 2673,  5106 => 2672,  5100 => 2671,  5097 => 2670,  5094 => 2669,  5091 => 2668,  5088 => 2667,  5085 => 2666,  5080 => 2665,  5077 => 2664,  5072 => 2663,  5070 => 2662,  5060 => 2654,  5054 => 2653,  5048 => 2649,  5043 => 2647,  5038 => 2646,  5036 => 2645,  5027 => 2639,  5023 => 2638,  5019 => 2637,  5014 => 2635,  5010 => 2634,  5006 => 2633,  5002 => 2632,  4999 => 2631,  4992 => 2628,  4988 => 2626,  4984 => 2624,  4982 => 2623,  4976 => 2621,  4974 => 2620,  4970 => 2618,  4964 => 2616,  4960 => 2614,  4956 => 2612,  4954 => 2611,  4948 => 2609,  4945 => 2608,  4939 => 2606,  4935 => 2604,  4931 => 2602,  4929 => 2601,  4923 => 2599,  4920 => 2598,  4914 => 2596,  4910 => 2594,  4906 => 2592,  4904 => 2591,  4898 => 2589,  4895 => 2588,  4889 => 2586,  4885 => 2584,  4881 => 2582,  4879 => 2581,  4873 => 2579,  4871 => 2578,  4867 => 2576,  4862 => 2574,  4857 => 2572,  4854 => 2571,  4848 => 2568,  4840 => 2564,  4838 => 2563,  4833 => 2561,  4825 => 2556,  4818 => 2552,  4813 => 2549,  4810 => 2548,  4806 => 2547,  4775 => 2519,  4764 => 2510,  4758 => 2509,  4755 => 2508,  4752 => 2507,  4749 => 2506,  4746 => 2505,  4743 => 2504,  4738 => 2503,  4735 => 2502,  4732 => 2500,  4724 => 2493,  4718 => 2492,  4715 => 2491,  4709 => 2490,  4706 => 2489,  4701 => 2486,  4693 => 2484,  4691 => 2483,  4685 => 2480,  4678 => 2478,  4674 => 2476,  4668 => 2474,  4662 => 2472,  4660 => 2471,  4653 => 2467,  4650 => 2466,  4644 => 2464,  4638 => 2462,  4636 => 2461,  4633 => 2460,  4626 => 2457,  4622 => 2455,  4618 => 2453,  4616 => 2452,  4609 => 2449,  4607 => 2448,  4599 => 2444,  4595 => 2442,  4591 => 2440,  4589 => 2439,  4583 => 2436,  4576 => 2432,  4570 => 2429,  4565 => 2427,  4557 => 2422,  4551 => 2419,  4545 => 2415,  4542 => 2414,  4539 => 2413,  4534 => 2412,  4531 => 2411,  4527 => 2410,  4498 => 2384,  4487 => 2375,  4481 => 2374,  4478 => 2373,  4475 => 2372,  4469 => 2371,  4466 => 2370,  4463 => 2369,  4460 => 2368,  4457 => 2367,  4454 => 2366,  4449 => 2365,  4446 => 2364,  4443 => 2363,  4438 => 2362,  4436 => 2361,  4425 => 2352,  4419 => 2351,  4416 => 2350,  4411 => 2347,  4406 => 2345,  4401 => 2344,  4399 => 2343,  4393 => 2340,  4386 => 2338,  4383 => 2337,  4377 => 2335,  4371 => 2333,  4369 => 2332,  4362 => 2329,  4356 => 2327,  4350 => 2325,  4348 => 2324,  4345 => 2323,  4338 => 2320,  4334 => 2318,  4330 => 2316,  4328 => 2315,  4321 => 2312,  4319 => 2311,  4311 => 2307,  4307 => 2305,  4303 => 2303,  4301 => 2302,  4295 => 2299,  4287 => 2295,  4283 => 2293,  4279 => 2291,  4277 => 2290,  4270 => 2286,  4265 => 2284,  4257 => 2279,  4250 => 2275,  4245 => 2272,  4242 => 2271,  4239 => 2270,  4235 => 2269,  4206 => 2243,  4195 => 2234,  4189 => 2233,  4186 => 2232,  4183 => 2231,  4180 => 2230,  4177 => 2229,  4174 => 2228,  4169 => 2227,  4166 => 2226,  4161 => 2222,  4147 => 2210,  4143 => 2209,  4134 => 2202,  4128 => 2201,  4125 => 2200,  4119 => 2199,  4116 => 2198,  4113 => 2197,  4110 => 2196,  4107 => 2195,  4105 => 2194,  4099 => 2191,  4095 => 2190,  4088 => 2186,  4082 => 2185,  4078 => 2184,  4072 => 2183,  4067 => 2181,  4063 => 2180,  4056 => 2176,  4053 => 2175,  4046 => 2174,  4044 => 2173,  4041 => 2172,  4034 => 2170,  4032 => 2169,  4029 => 2168,  4027 => 2167,  4021 => 2164,  4016 => 2162,  4008 => 2157,  4002 => 2154,  3996 => 2150,  3993 => 2149,  3990 => 2148,  3987 => 2147,  3982 => 2146,  3979 => 2145,  3974 => 2144,  3971 => 2143,  3969 => 2142,  3941 => 2117,  3930 => 2108,  3924 => 2107,  3921 => 2106,  3915 => 2105,  3912 => 2104,  3909 => 2103,  3906 => 2102,  3903 => 2101,  3900 => 2100,  3897 => 2099,  3894 => 2098,  3889 => 2097,  3886 => 2096,  3881 => 2095,  3879 => 2094,  3864 => 2082,  3860 => 2081,  3851 => 2074,  3845 => 2073,  3842 => 2072,  3839 => 2071,  3836 => 2070,  3833 => 2069,  3831 => 2068,  3826 => 2066,  3822 => 2065,  3816 => 2062,  3809 => 2060,  3805 => 2059,  3799 => 2058,  3794 => 2056,  3790 => 2055,  3782 => 2051,  3775 => 2050,  3773 => 2049,  3770 => 2048,  3763 => 2046,  3761 => 2045,  3758 => 2044,  3756 => 2043,  3750 => 2040,  3745 => 2038,  3738 => 2034,  3732 => 2031,  3726 => 2027,  3723 => 2026,  3720 => 2025,  3717 => 2024,  3712 => 2023,  3709 => 2022,  3707 => 2021,  3679 => 1996,  3668 => 1987,  3662 => 1986,  3659 => 1985,  3656 => 1984,  3653 => 1983,  3650 => 1982,  3647 => 1981,  3644 => 1980,  3641 => 1979,  3638 => 1978,  3635 => 1977,  3630 => 1976,  3627 => 1975,  3610 => 1959,  3604 => 1958,  3598 => 1957,  3592 => 1954,  3589 => 1953,  3584 => 1951,  3579 => 1950,  3577 => 1949,  3571 => 1946,  3567 => 1945,  3563 => 1944,  3559 => 1943,  3555 => 1942,  3551 => 1941,  3546 => 1938,  3543 => 1937,  3538 => 1936,  3534 => 1935,  3508 => 1912,  3498 => 1904,  3492 => 1903,  3486 => 1902,  3483 => 1901,  3480 => 1900,  3477 => 1899,  3472 => 1898,  3467 => 1897,  3465 => 1896,  3453 => 1887,  3449 => 1886,  3445 => 1885,  3441 => 1884,  3437 => 1883,  3432 => 1881,  3426 => 1877,  3420 => 1876,  3417 => 1875,  3414 => 1874,  3408 => 1873,  3401 => 1870,  3398 => 1869,  3395 => 1868,  3392 => 1867,  3389 => 1866,  3387 => 1865,  3384 => 1864,  3380 => 1862,  3374 => 1860,  3372 => 1859,  3368 => 1858,  3364 => 1857,  3360 => 1856,  3356 => 1855,  3352 => 1854,  3346 => 1851,  3343 => 1850,  3339 => 1848,  3337 => 1847,  3333 => 1846,  3328 => 1844,  3324 => 1842,  3321 => 1841,  3318 => 1840,  3313 => 1839,  3310 => 1838,  3307 => 1837,  3303 => 1836,  3287 => 1822,  3281 => 1821,  3278 => 1820,  3274 => 1818,  3271 => 1817,  3268 => 1816,  3266 => 1815,  3263 => 1814,  3257 => 1813,  3254 => 1812,  3251 => 1811,  3248 => 1810,  3245 => 1809,  3242 => 1808,  3238 => 1807,  3235 => 1806,  3232 => 1805,  3229 => 1804,  3227 => 1803,  3224 => 1802,  3221 => 1801,  3218 => 1800,  3214 => 1799,  3211 => 1798,  3208 => 1797,  3205 => 1796,  3202 => 1795,  3199 => 1794,  3196 => 1793,  3194 => 1792,  3180 => 1781,  3149 => 1752,  3143 => 1751,  3140 => 1750,  3137 => 1749,  3134 => 1748,  3128 => 1747,  3125 => 1746,  3118 => 1743,  3116 => 1742,  3112 => 1741,  3108 => 1740,  3104 => 1739,  3100 => 1738,  3096 => 1737,  3092 => 1736,  3085 => 1733,  3081 => 1731,  3079 => 1730,  3075 => 1729,  3070 => 1727,  3064 => 1724,  3058 => 1720,  3055 => 1719,  3052 => 1718,  3049 => 1717,  3044 => 1716,  3041 => 1715,  3038 => 1714,  3035 => 1713,  3031 => 1712,  3015 => 1698,  3009 => 1697,  3006 => 1696,  3002 => 1694,  2996 => 1693,  2993 => 1692,  2990 => 1691,  2987 => 1690,  2984 => 1689,  2981 => 1688,  2978 => 1687,  2975 => 1686,  2971 => 1685,  2968 => 1684,  2965 => 1683,  2962 => 1682,  2959 => 1681,  2956 => 1680,  2953 => 1679,  2949 => 1678,  2946 => 1677,  2944 => 1676,  2930 => 1665,  2900 => 1637,  2894 => 1636,  2891 => 1635,  2885 => 1634,  2879 => 1631,  2876 => 1630,  2874 => 1629,  2869 => 1627,  2865 => 1626,  2861 => 1625,  2857 => 1624,  2853 => 1623,  2849 => 1622,  2842 => 1619,  2838 => 1617,  2836 => 1616,  2832 => 1615,  2827 => 1613,  2820 => 1609,  2814 => 1606,  2808 => 1602,  2805 => 1601,  2802 => 1600,  2797 => 1599,  2794 => 1598,  2790 => 1597,  2773 => 1582,  2767 => 1581,  2764 => 1580,  2761 => 1579,  2755 => 1578,  2752 => 1577,  2749 => 1576,  2746 => 1575,  2743 => 1574,  2740 => 1573,  2736 => 1572,  2733 => 1571,  2730 => 1570,  2727 => 1569,  2724 => 1568,  2721 => 1567,  2718 => 1566,  2714 => 1565,  2711 => 1564,  2708 => 1563,  2706 => 1562,  2692 => 1551,  2663 => 1524,  2657 => 1523,  2654 => 1522,  2648 => 1521,  2645 => 1520,  2642 => 1519,  2634 => 1515,  2632 => 1514,  2627 => 1512,  2623 => 1511,  2619 => 1510,  2614 => 1508,  2609 => 1506,  2605 => 1505,  2600 => 1503,  2593 => 1499,  2588 => 1497,  2584 => 1496,  2580 => 1494,  2577 => 1493,  2574 => 1492,  2571 => 1491,  2566 => 1490,  2563 => 1489,  2559 => 1488,  2545 => 1476,  2539 => 1475,  2535 => 1473,  2529 => 1472,  2526 => 1471,  2523 => 1470,  2520 => 1469,  2517 => 1468,  2514 => 1467,  2511 => 1466,  2508 => 1465,  2505 => 1464,  2502 => 1463,  2498 => 1462,  2495 => 1461,  2492 => 1460,  2489 => 1459,  2486 => 1458,  2484 => 1457,  2481 => 1456,  2477 => 1455,  2463 => 1444,  2428 => 1411,  2422 => 1410,  2419 => 1409,  2416 => 1408,  2410 => 1407,  2403 => 1403,  2400 => 1402,  2398 => 1401,  2393 => 1399,  2389 => 1398,  2385 => 1397,  2381 => 1396,  2376 => 1394,  2372 => 1393,  2364 => 1389,  2360 => 1387,  2358 => 1386,  2353 => 1384,  2349 => 1383,  2342 => 1379,  2336 => 1376,  2331 => 1373,  2328 => 1372,  2325 => 1371,  2320 => 1370,  2317 => 1369,  2314 => 1368,  2310 => 1367,  2293 => 1352,  2287 => 1351,  2284 => 1350,  2280 => 1348,  2274 => 1347,  2271 => 1346,  2268 => 1345,  2265 => 1344,  2262 => 1343,  2259 => 1342,  2255 => 1341,  2252 => 1340,  2249 => 1339,  2246 => 1338,  2244 => 1337,  2241 => 1336,  2238 => 1335,  2235 => 1334,  2231 => 1333,  2228 => 1332,  2226 => 1331,  2211 => 1319,  2181 => 1291,  2175 => 1290,  2172 => 1289,  2169 => 1288,  2166 => 1287,  2160 => 1286,  2157 => 1285,  2150 => 1282,  2148 => 1281,  2143 => 1279,  2139 => 1278,  2135 => 1277,  2131 => 1276,  2127 => 1275,  2120 => 1272,  2116 => 1270,  2114 => 1269,  2110 => 1268,  2105 => 1266,  2099 => 1263,  2093 => 1259,  2090 => 1258,  2087 => 1257,  2084 => 1256,  2079 => 1255,  2076 => 1254,  2073 => 1253,  2070 => 1252,  2066 => 1251,  2051 => 1238,  2045 => 1237,  2042 => 1236,  2038 => 1234,  2032 => 1233,  2029 => 1232,  2026 => 1231,  2023 => 1230,  2020 => 1229,  2017 => 1228,  2013 => 1227,  2010 => 1226,  2007 => 1225,  2004 => 1224,  2002 => 1223,  1999 => 1222,  1996 => 1221,  1993 => 1220,  1989 => 1219,  1986 => 1218,  1984 => 1217,  1969 => 1205,  1933 => 1171,  1927 => 1170,  1924 => 1169,  1921 => 1168,  1915 => 1167,  1912 => 1166,  1906 => 1163,  1903 => 1162,  1901 => 1161,  1896 => 1159,  1892 => 1158,  1888 => 1157,  1884 => 1156,  1879 => 1154,  1875 => 1153,  1867 => 1149,  1863 => 1147,  1861 => 1146,  1856 => 1144,  1852 => 1143,  1846 => 1140,  1840 => 1136,  1837 => 1135,  1834 => 1134,  1831 => 1133,  1826 => 1132,  1823 => 1131,  1820 => 1130,  1816 => 1129,  1800 => 1115,  1794 => 1114,  1791 => 1113,  1787 => 1111,  1781 => 1110,  1778 => 1109,  1775 => 1108,  1772 => 1107,  1769 => 1106,  1766 => 1105,  1762 => 1104,  1759 => 1103,  1756 => 1102,  1753 => 1101,  1750 => 1100,  1747 => 1099,  1744 => 1098,  1739 => 1097,  1737 => 1096,  1723 => 1085,  1710 => 1074,  1704 => 1073,  1701 => 1072,  1698 => 1071,  1692 => 1070,  1689 => 1069,  1686 => 1068,  1683 => 1067,  1680 => 1066,  1677 => 1065,  1674 => 1064,  1671 => 1063,  1668 => 1062,  1665 => 1061,  1662 => 1060,  1659 => 1059,  1656 => 1058,  1653 => 1057,  1650 => 1056,  1647 => 1055,  1644 => 1054,  1641 => 1053,  1638 => 1052,  1635 => 1051,  1632 => 1050,  1629 => 1049,  1626 => 1048,  1623 => 1047,  1618 => 1046,  1615 => 1045,  1612 => 1044,  1608 => 1043,  1605 => 1042,  1602 => 1041,  1599 => 1040,  1596 => 1039,  1593 => 1038,  1590 => 1037,  1587 => 1036,  1585 => 1035,  1574 => 1026,  1568 => 1025,  1565 => 1024,  1559 => 1021,  1555 => 1020,  1551 => 1019,  1544 => 1017,  1539 => 1015,  1534 => 1013,  1529 => 1010,  1526 => 1009,  1523 => 1008,  1519 => 1007,  1496 => 987,  1485 => 978,  1479 => 977,  1476 => 976,  1473 => 975,  1470 => 974,  1467 => 973,  1464 => 972,  1459 => 971,  1457 => 970,  1451 => 966,  1444 => 961,  1438 => 957,  1436 => 956,  1433 => 955,  1426 => 950,  1420 => 946,  1418 => 945,  1414 => 943,  1408 => 939,  1402 => 935,  1400 => 934,  1356 => 893,  1349 => 889,  1327 => 870,  1317 => 863,  1304 => 853,  1291 => 843,  1278 => 833,  1265 => 823,  1243 => 804,  1239 => 803,  1212 => 779,  1205 => 775,  1190 => 763,  1177 => 753,  1163 => 742,  1151 => 733,  1138 => 723,  1126 => 714,  1117 => 708,  1113 => 707,  1095 => 692,  1090 => 690,  1075 => 678,  1063 => 669,  1049 => 658,  1037 => 649,  1016 => 630,  1010 => 629,  1007 => 628,  1001 => 627,  998 => 626,  994 => 624,  988 => 623,  981 => 621,  976 => 620,  973 => 619,  967 => 618,  964 => 617,  961 => 616,  958 => 615,  953 => 614,  950 => 613,  946 => 612,  940 => 611,  937 => 610,  935 => 609,  932 => 608,  926 => 607,  923 => 606,  920 => 605,  917 => 604,  911 => 603,  908 => 602,  905 => 601,  902 => 600,  897 => 599,  894 => 598,  889 => 597,  886 => 596,  883 => 595,  878 => 594,  875 => 593,  871 => 592,  860 => 584,  856 => 583,  827 => 557,  819 => 552,  804 => 540,  791 => 530,  780 => 522,  767 => 512,  756 => 504,  743 => 494,  732 => 486,  718 => 475,  702 => 462,  689 => 452,  676 => 442,  655 => 424,  651 => 423,  633 => 408,  628 => 406,  613 => 394,  600 => 384,  589 => 376,  576 => 366,  565 => 358,  552 => 348,  541 => 340,  527 => 329,  516 => 321,  503 => 311,  492 => 303,  479 => 293,  466 => 283,  446 => 266,  442 => 265,  424 => 250,  419 => 248,  362 => 194,  349 => 184,  336 => 174,  323 => 164,  310 => 154,  288 => 135,  284 => 134,  256 => 109,  250 => 106,  225 => 84,  212 => 74,  199 => 64,  186 => 54,  176 => 47,  172 => 46,  141 => 18,  136 => 16,  132 => 15,  128 => 14,  125 => 13,  119 => 11,  113 => 9,  111 => 8,  107 => 7,  104 => 6,  91 => 5,  77 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    {{ title }}
{% endblock %}
{% block body %}

    <input type=\"text\" class=\"hide\" id=\"idclient\" value=\"{{ client.id }}\"/>
    {% if interve.type != \"oper\" %}
        <input type=\"text\" class=\"hide\" id=\"idinterve\" value=\"{{ interve.id }}\"/>
    {% else %}
        <input type=\"text\" class=\"hide\" id=\"idinterne\" value=\"{{ interve.id }}\"/>
    {% endif %}

    <input type=\"text\" class=\"hide\" id=\"idchantier\" value=\"{{ chantier.id }}\"/>
    <input type=\"text\" class=\"hide\" id=\"prt\" value=\"{{ prt }}\"/>
    <input type=\"text\" class=\"hide\" id=\"prte\" value=\"{{ prte }}\"/>
    <input type=\"text\" class=\"hide\" id=\"pager\" value=\"chantiers\"/>
    <input type=\"text\" class=\"hide\" id=\"jsonclients\" value=\"{{ jsonclients }}\">

    <section class=\"content fixed-top\">
        <div class=\"container-fluid\" style=\"margin: 0 14px 0 14px\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div id=\"ressult\" style=\"width: 100%; align-content: start\" class=\"text-left\"></div>
                </div>
            </div>
        </div>
    </section>

    <div class=\"modal fade right\" id=\"modalClient\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header col-white bg-green p-l-20 hide\" id=\"clfa\">
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                        <i class=\"icofont-minus-circle icofont-1x\"></i>
                        MODIFIER UN CLIENT</h3>
                </div>
                <div class=\"modal-header col-white bg-pri p-l-20\" id=\"clfb\">
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                        <i class=\"icofont-plus-circle icofont-1x\"></i>
                        AJOUTER UN CLIENT</h3>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
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
                        <div class=\"text-center hide\" id=\"divClienter\">
                            <input type=\"submit\" id=\"updateClient\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect col-white bg-green\"/>
                            <div type=\"button\" id=\"closeClient\" class=\"btn btn-link waves-effect col-white bg-pink\"
                                 data-dismiss=\"modal\">
                                ANNULER
                            </div>
                        </div>
                        <div class=\"text-center\" id=\"divClient\">
                            <input type=\"submit\" id=\"addClient\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect col-white bg-pri\">
                            <div type=\"button\" id=\"closeClient\" class=\"btn btn-link waves-effect col-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
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
    </div>
    <div class=\"modal fade right\" id=\"modalChantier\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">

                <div class=\"modal-header col-white bg-green p-l-20 hide\" id=\"chfa\">
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                        <i class=\"icofont-minus-circle icofont-1x\"></i>
                        MODIFIER UN CHANTIER</h3>
                </div>

                <div class=\"modal-header col-white bg-pri p-l-20\" id=\"chfb\">
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                        <i class=\"icofont-plus-circle icofont-1x\"></i>
                        AJOUTER UN CHANTIER</h3>
                </div>

                <div class=\"modal-body m-t-10 bien\">
                    {{ form_start(formChantier, {'attr': {'id':'addChantierForm' }}) }}
                    <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addChantierToken') }}\"/>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label pri bolo\">CLIENT<span class=\"col-red\">*</span>
                            </label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    <select class=\"form-control chrs supper selclient\" name=\"client\"
                                            id=\"client\"></select>
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
                                    {{ form_widget(formChantier.nomchantier,{'attr':{'class':'form-control chr'}}) }}
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
                    <div class=\"text-center hide\" id=\"divChantiere\">
                        <input type=\"submit\" id=\"updateChr\" value=\"MODIFIER\"
                               class=\"btn btn-link waves-effect col-white bg-green\">
                        <div type=\"button\" id=\"closeChantier\" class=\"btn btn-link waves-effect col-white bg-pink\"
                             data-dismiss=\"modal\">
                            ANNULER
                        </div>
                    </div>
                    <div class=\"text-center\" id=\"divChantier\">
                        <input type=\"submit\" id=\"addChantier\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect col-white bg-pri\">
                        <div type=\"button\" id=\"closeChantier\" class=\"btn btn-link waves-effect col-white bg-pink\"
                             data-dismiss=\"modal\">
                            FERMER
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadChantier\"></div>
                    {{ form_end(formChantier) }}

                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalDevis\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-blue col-white\">
                    <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">CRÉER UN DEVIS</h4>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        {{ form_start(formDevis, {'attr': {'id': 'addDevisForm' }}) }}
                        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addDevisToken') }}\"/>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">CHANTIER</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        <select class=\"form-control selchantier\" name=\"chantier\" id=\"refchan\"></select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">

                            <div class=\"col-sm-6\">
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
                                   class=\"btn btn-link waves-effect col-white bg-blue\">
                            <div type=\"button\" id=\"closeDevis\" class=\"btn btn-link waves-effect col-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadDevis\"></div>
                        {{ form_end(formDevis) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalBon\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-blue col-white\">
                    <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">CRÉER UN BON DE COMMANDE</h4>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        {{ form_start(formBon, {'attr': {'id': 'addBonForm' }}) }}
                        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addBonToken') }}\"/>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">CHANTIER</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        <select class=\"form-control selchantier\" name=\"chantier\" id=\"bonchan\"></select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DEVIS VALIDÉS
                                    <span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formBon.devis,{'id':'bondevis','attr':{'class':'form-control' }}) }}
                                    </div>
                                    <p class=\"h6 codev\"></p>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">TYPE DE BON<span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formBon.type,{'required':'','attr':{'class':'form-control' }}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">CONTACT</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formBon.contact,{'id':'comcon','required':'','attr':{'class':'form-control' }}) }}
                                    </div>
                                    <p class=\"h6 cocon\"></p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">RÉFÉRENCE OU OBJET<span
                                            class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formBon.bonreference,{'id': 'editor7','attr':{'class':'form-control' }}) }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">DEVISE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formBon.monnaie,{'attr':{'class':'form-control' }}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">TVA(%)</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formBon.tva,{'attr':{'class':'form-control' }}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">APPLIQUER LA TVA?</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formBon.ptva,{'attr':{'class':'form-control' }}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">BON AVEC REMISE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formBon.aarem,{'attr':{'class':'form-control' }}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">COLONNE RÉFÉRENCE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formBon.aaref,{'attr':{'class':'form-control' }}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">DATE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formBon.date,{'attr':{'class':'form-control datepicker' }}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">INFORMATIONS SUR LE BON</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formBon.conditions,{'id': 'editor8','attr':{'class':'form-control' }}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"addeBon\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect col-white bg-blue\">
                            <div type=\"button\" id=\"closeBon\" class=\"btn btn-link waves-effect col-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadBon\"></div>
                        <br>
                        <br>
                        <br>
                        {{ form_end(formBon) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"large\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"shadow bg-white devtohide\" style=\"height:29.7cm; margin: auto; padding: 0.6cm;\"
                     id=\"shacontent\">
                    <iframe id=\"frame\" src=\"\" style=\"width: 100%; height: 100%; border: none;\"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalDecompte\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-blue col-white\">
                    <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">CRÉER UN DÉCOMPTE</h4>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        {{ form_start(formDecompte, {'attr': {'id': 'addDecompteForm' }}) }}
                        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('dectoken') }}\"/>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-5\">
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
                                                                                    class=\"{{ dev.id }}\">{{ dev.iddevis }}</option>
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
                            <div class=\"col-sm-7\">
                                <label class=\"form-label m-b--30 col-blue bolo\">ACOMPTE DE DEMARRAGE(%)</label>
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
                                   class=\"btn btn-link waves-effect col-white bg-blue\">
                            <div type=\"button\" id=\"closeDecompte\" class=\"btn btn-link waves-effect col-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadDecompte\"></div>
                        {{ form_end(formDecompte) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalFacture\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-blue col-white\">
                    <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">CRÉER UNE FACTURE</h4>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
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
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DEVIS VALIDÉS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formFacture.devis,{'required':'','attr':{'class':'form-control devo'}}) }}
                                    </div>
                                    <p class=\"col-pink h6 dvo\"></p>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
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
                                   class=\"btn btn-link waves-effect col-white bg-blue\">
                            <div type=\"button\" id=\"closeFacture\" class=\"btn btn-link waves-effect col-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadFacture\">
                        </div>
                        <br><br><br>
                        {{ form_end(formFacture) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalContact\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header col-white bg-green p-l-20 hide\" id=\"cofa\">
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                        <i class=\"icofont-minus-circle icofont-1x\"></i>
                        MODIFIER UN CONTACT</h3>
                </div>

                <div class=\"modal-header col-white bg-pri p-l-20\" id=\"cofb\">
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                        <i class=\"icofont-plus-circle icofont-1x\"></i>
                        AJOUTER UN CONTACT</h3>
                </div>

                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        {{ form_start(formContact, {'attr': {'id': 'addContactForm'}}) }}
                        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addContactToken') }}\"/>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">CLIENTS<span
                                            class=\"col-red\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        <select class=\"form-control cohr supper selclient\" name=\"client\"
                                                id=\"client\"></select>
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
                            <div class=\"text-center hide\" id=\"divContacte\">
                                <input type=\"text\" class=\"hide\" id=\"idcontact\" value=\"{{ contact.id }}\">
                                <input type=\"submit\" id=\"updateContact\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect col-white bg-green\">
                                <div type=\"button\" id=\"closeContact\"
                                     class=\"btn btn-link waves-effect col-white bg-pink\"
                                     data-dismiss=\"modal\">
                                    ANNULER
                                </div>
                            </div>

                            <div class=\"text-center\" id=\"divContact\">
                                <input type=\"submit\" id=\"addeContact\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect col-white bg-blue\">
                                <div type=\"button\" id=\"closeContact\"
                                     class=\"btn btn-link waves-effect col-white bg-pink\"
                                     data-dismiss=\"modal\">
                                    FERMER
                                </div>
                            </div>
                            <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadContact\">

                        </div>
                        {{ form_end(formContact) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class=\"content\" style=\"margin-top: -20px !important;\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row clearfix m-t-50\">
                    <div class=\"col-sm-12 \">
                        <h4 class=\"bolo700 col-deep-orange\">GESTION DES CHANTIERS</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"content\" id=\"setchantier\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row clearfix\">
                    <div class=\"col-sm-12 \">
                        <h4 class=\"bolo700\">
                            Clients - Chantiers - Contacts
                        </h4>
                    </div>
                </div>
                <div class=\"row clearfix p-b-5\">
                    <div class=\"col-sm-12\">
                        <div class=\"btn-group btn-group-sm\" role=\"group\" aria-label=\"Small button group\">
                            <button type=\"button\" data-toggle=\"modal\" data-target=\"#modalClient\"
                                    class=\"btn bg-purple text-white\" style=\"border:1px solid #dddfeb\">+ CLIENT
                            </button>
                            <button type=\"button\" data-toggle=\"modal\" data-target=\"#modalChantier\"
                                    class=\"btn bg-blue text-white\" style=\"border:1px solid #dddfeb\">+ CHANTIER
                            </button>
                            <button type=\"button\" data-toggle=\"modal\" data-target=\"#modalContact\"
                                    class=\"btn bg-blue-grey text-white\" style=\"border:1px solid #dddfeb\">+ CONTACT
                            </button>

                            {% if devis.id is not null %}
                                <button type=\"button\" data-toggle=\"modal\" data-target=\"#modalDevis\"
                                        class=\"btn btn-success\" style=\"border:1px solid #dddfeb\">- DEVIS D'ACHAT
                                </button>
                            {% else %}
                                <button type=\"button\" data-toggle=\"modal\" data-target=\"#modalDevis\"
                                        class=\"btn bg-pri text-white\" style=\"border:1px solid #dddfeb\">+ DEVIS D'ACHAT
                                </button>
                            {% endif %}


                            {% if decompte.id is not null %}
                                <button type=\"button\" data-toggle=\"modal\" data-target=\"#modalDecompte\"
                                        class=\"btn btn-success\" style=\"border:1px solid #dddfeb\">- DÉCOMPTE
                                </button>
                            {% else %}
                                <button type=\"button\" data-toggle=\"modal\" data-target=\"#modalDecompte\"
                                        class=\"btn bg-deep-orange text-white\" style=\"border:1px solid #dddfeb\">+
                                    DÉCOMPTE
                                </button>
                            {% endif %}

                            {% if facture.id is not null %}
                                <button type=\"button\" data-toggle=\"modal\" data-target=\"#modalFacture\"
                                        class=\"btn btn-success\" style=\"border:1px solid #dddfeb\">- FACTURE
                                </button>
                            {% else %}
                                <button type=\"button\" data-toggle=\"modal\" data-target=\"#modalFacture\"
                                        class=\"btn bg-blue-grey text-white\" style=\"border:1px solid #dddfeb\">+
                                    FACTURE
                                </button>
                            {% endif %}
                        </div>
                    </div>
                </div>

                {% set countClient = 0 %}
                {% for client in clients %}
                    {% if client.type is null %}
                        {% if client.corbeille is null %}
                            {% set  countClient = countClient + 1 %}
                        {% endif %}
                    {% endif %}
                {% endfor %}
                <div class=\"panel-group\" id=\"accordion_1\" role=\"tablist\" aria-multiselectable=\"true\">
                    <div class=\"panel panel-pri shadow\" style=\"border-left: 2px solid #A9A9A9\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingOne_1\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed col-white outai\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_0\" href=\"#collapseOne_0\" aria-expanded=\"false\"
                                   aria-controls=\"collapseOne_0\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Clients<span
                                            class=\"badge bg-pink\"
                                            style=\"float: right !important;\">{{ countClient }}</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseOne_0\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingOne_0\">
                            <div class=\"panel-body\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow:scroll\">
                                    <table class=\"table-striped table-bordered display nowrape\" style=\"width: 100%\"
                                           id=\"dataClients\">
                                        <thead>
                                        <tr>
                                            <th class=\"text-center\" style=\"Emin-width: 30px !important;\"></th>
                                            <th>CLIENTS</th>
                                            <th class=\"text-center\">ADRESSE</th>
                                            <th class=\"text-center\">CONTACTS</th>
                                            <th class=\"text-center\">COMPTE&nbsp;C.</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for client in clients %}
                                            {% if client.type is null %}
                                                {% if client.corbeille is null %}
                                                    <tr>
                                                        <td class=\"text-center\">
                                                            <input type=\"checkbox\" data-toggle=\"toggle\" class=\"CLYE\"
                                                                   value=\"{{ client.id }}\"></td>
                                                        <td>
                                                            <a href=\"{{ path('client', {'id': client.id}) }}\"
                                                               class=\"col-blue bolo700\"
                                                               title=\"{{ client.nomclient|upper }}\">{{ client.nomclient|upper }}</a>
                                                        </td>
                                                        <td class=\"text-center\">{{ client.adresse }}</td>
                                                        <td class=\"text-center\">{{ client.contact }}</td>
                                                        <td class=\"text-center\">{{ client.contribuable }}</td>
                                                    </tr>
                                                {% endif %}
                                            {% endif %}
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                    <br/>

                                </div>
                            </div>
                        </div>
                    </div>

                    {% set countEtude = 0 %}
                    {% set countEchouer = 0 %}
                    {% set countEncours = 0 %}
                    {% set countSous = 0 %}
                    {% set countTerminer = 0 %}
                    {% set countCloturer = 0 %}
                    {% set countTout = 0 %}

                    {% for client in clients %}
                        {% if client.type is null %}
                            {% if client.corbeille is null %}
                                {% for chantier in client.chantiers %}
                                    {% if chantier.etat == \"etude\" and chantier.corbeille is null %}
                                        {% set countEtude = countEtude + 1 %}
                                    {% endif %}
                                    {% if chantier.etat == \"echouer\" and chantier.corbeille is null %}
                                        {% set countEchouer = countEchouer + 1 %}
                                    {% endif %}
                                    {% if chantier.etat == \"encours\" and chantier.corbeille is null %}
                                        {% set countEncours = countEncours + 1 %}
                                    {% endif %}
                                    {% if chantier.sous is not null %}
                                        {% if chantier.etat == \"encours\" and chantier.corbeille is null %}
                                            {% set countSous = countSous + 1 %}
                                        {% endif %}
                                    {% endif %}
                                    {% if chantier.etat == \"archiver\" and chantier.corbeille is null %}
                                        {% set countTerminer = countTerminer + 1 %}
                                    {% endif %}
                                    {% if chantier.etat == \"cloturer\" and chantier.corbeille is null %}
                                        {% set countCloturer = countCloturer + 1 %}
                                    {% endif %}
                                    {% if chantier.corbeille is null %}
                                        {% set countTout = countTout + 1 %}
                                    {% endif %}
                                {% endfor %}
                            {% endif %}
                        {% endif %}
                    {% endfor %}

                    <div class=\"panel panel-pri shadow\"
                         style=\"border-left: 2px solid #6636f6; margin-top: 20px !important\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingEtu_1\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed outai col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseEtu_1p\" aria-expanded=\"false\"
                                   aria-controls=\"collapseEtu_1\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Chantiers
                                    en étude<span
                                            class=\"badge bg-pink\"
                                            style=\"float: right !important;\">{{ countEtude }}</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseEtu_1p\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingEtu_1\">
                            <div class=\"panel-body\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow: scroll\">
                                    <table class=\"table-striped table-bordered display nowrape\" id=\"dataEtude\"
                                           style=\"width:100%\">

                                        {% set solde = 0 %}
                                        {% for client in clients %}
                                            {% if client.type is null %}
                                                {% if client.corbeille is null %}
                                                    {% set vp = 0 %}
                                                    {% set vr = 0 %}
                                                    {% set dp = 0 %}

                                                    {% for chantier in client.chantiers %}
                                                        {% if chantier.etat == \"etude\" and chantier.corbeille is null %}
                                                            {% set vp = chantier.cout + vp %}
                                                            {% set vr = chantier.reglement + vr %}
                                                            {% set dp = chantier.depense + dp %}
                                                        {% endif %}
                                                    {% endfor %}

                                                {% endif %}
                                            {% endif %}
                                        {% endfor %}
                                        <thead>
                                        <tr class=\"font-weight-normal\">
                                            <th style=\"min-width: 30px !important;\"></th>
                                            <th class=\"col-blue-grey\">CHANTIERS / CLIENT</th>
                                            <th class=\"text-center col-blue-grey\">CLIENT</th>
                                            <th class=\"text-center col-blue-grey\">COÛT PRÉVU</th>
                                            <th class=\"text-center col-blue-grey\">RÈGLEMENT</th>
                                            <th class=\"text-center col-blue-grey\">SOLDE</th>
                                            <th class=\"text-center col-blue-grey\">COMMANDES</th>
                                            <th class=\"text-center col-blue-grey\">BALANCE</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        {% for client in clients %}
                                            {% if client.type is null %}
                                                {% if client.corbeille is null %}
                                                    {% for chantier in client.chantiers %}
                                                        {% if chantier.etat == \"etude\" %}
                                                            {% if chantier.corbeille is null %}
                                                                {% set solde  = chantier.cout - chantier.reglement %}
                                                                <tr>
                                                                    <td class=\"text-center\">
                                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                               class=\"PROETU\"
                                                                               value=\"{{ chantier.id }}\">
                                                                    </td>
                                                                    <td>
                                                                        <a href=\"{{ path('chantier', {'id': chantier.id}) }}\"
                                                                           title=\"{{ chantier.nomchantier }}\"
                                                                           class=\"bolo600\">
                                                                            {% if chantier.sous is not null %}
                                                                                <span class=\"badge bg-orange\">SC</span>
                                                                            {% endif %}
                                                                            {{ chantier.nomchantier|upper|u.truncate(30, '...', false) }}
                                                                        </a>
                                                                    </td>
                                                                    <td class=\"bolo600\"><a
                                                                                href=\"{{ path('client', {'id': client.id}) }}\"
                                                                                class=\"col-white bolo700\">{{ client.nomclient|upper }}</a>
                                                                    </td>
                                                                    <td class=\"text-right\">{{ chantier.cout|number_format(2,',',' ') }}</td>
                                                                    <td class=\"text-right\">{{ chantier.reglement|number_format(2,',',' ') }}</td>
                                                                    <td style=\"text-align: right\">{{ solde|number_format(2,',',' ') }}</td>
                                                                    <td style=\"text-align: right\">{{ chantier.depense|number_format(2,',',' ') }}</td>

                                                                    {% set balance = chantier.reglement|number_format(2,'.','') -  chantier.depense|number_format(2,'.','') %}

                                                                    <td style=\"text-align: right\">{{ balance|number_format(2,',',' ') }}</td>
                                                                </tr>
                                                            {% endif %}
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endif %}
                                            {% endif %}
                                        {% endfor %}

                                        </tbody>
                                        <tfoot>
                                        <tr class=\"font-weight-normal\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th></th>
                                            <th class=\"text-right bg-blue\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                    <br/>
                                    <p>
                                        <span class=\"col-orange\">&raquo; SC:</span>
                                        <span class=\"col-blue-grey\">SOUS-CHANTIER</span>
                                        <br></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-pri shadow\"
                         style=\"border-left: 2px solid #00BCD4;\">
                        <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingEcho_1\">
                            <h4 class=\"panel-title\">
                                <a class=\"collapsed outai col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseEcho_1\" aria-expanded=\"false\"
                                   aria-controls=\"collapseEcho_1\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Chantiers
                                    échoués<span
                                            class=\"badge bg-pink\"
                                            style=\"float: right !important;\">{{ countEchouer }}</span>
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapseEcho_1\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingEcho_1\">
                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px;\">
                                    <table class=\"table-striped table-bordered display nowrape\" id=\"dataEchoue\"
                                           style=\"width: 100%\">


                                        {% set solde = 0 %}

                                        {% for client in clients %}
                                            {% if client.type is null %}
                                                {% if client.corbeille is null %}

                                                    {% set vp = 0 %}
                                                    {% set vr = 0 %}
                                                    {% set dp = 0 %}

                                                    {% for chantier in client.chantiers %}
                                                        {% if chantier.etat == \"echouer\" and chantier.corbeille is null %}
                                                            {% set vp = chantier.cout + vp %}
                                                            {% set vr = chantier.reglement + vr %}
                                                            {% set dp = chantier.depense + dp %}
                                                        {% endif %}
                                                    {% endfor %}

                                                {% endif %}
                                            {% endif %}
                                        {% endfor %}
                                        <thead>
                                        <tr class=\"font-weight-normal\">
                                            <th style=\"min-width: 30px !important;\"></th>
                                            <th class=\"col-blue-grey\">CHANTIERS / CLIENT</th>
                                            <th class=\"text-center col-blue-grey\">COÛT</th>
                                            <th class=\"text-center col-blue-grey\">CLIENT</th>
                                            <th class=\"text-center col-blue-grey\">RÈGLEMENT</th>
                                            <th class=\"text-center col-blue-grey\">SOLDE</th>
                                            <th class=\"text-center col-blue-grey\">COMMANDES</th>
                                            <th class=\"text-center col-blue-grey\">BALANCE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for client in clients %}
                                            {% if client.corbeille is null %}
                                                {% if client.type is null %}
                                                    {% if client.corbeille is null %}
                                                        {% for chantier in client.chantiers %}
                                                            {% if chantier.etat == \"echouer\" %}
                                                                {% if chantier.corbeille is null %}
                                                                    {% set solde  = chantier.cout - chantier.reglement %}
                                                                    <tr>
                                                                        <td class=\"text-center\">
                                                                            <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                                   class=\"PROECHO\"
                                                                                   value=\"{{ chantier.id }}\">
                                                                        </td>
                                                                        <td>
                                                                            <a href=\"{{ path('chantier', {'id': chantier.id}) }}\"
                                                                               class=\"bolo600\"
                                                                               title=\"{{ chantier.nomchantier }}\">
                                                                                {% if chantier.sous is not null %}
                                                                                    <span class=\"badge bg-orange\">SC</span>
                                                                                {% endif %}
                                                                                {{ chantier.nomchantier|upper|u.truncate(30, '...', false) }}
                                                                            </a>
                                                                        </td>
                                                                        <td class=\"text-right\">{{ chantier.cout|number_format(2,',',' ') }}</td>
                                                                        <td class=\"bolo600\">{{ client.nomclient|upper }}</td>
                                                                        <td class=\"text-right\">{{ chantier.reglement|number_format(2,',',' ') }}</td>
                                                                        <td style=\"text-align: right\">{{ solde|number_format(2,',',' ') }}</td>
                                                                        <td style=\"text-align: right\">{{ chantier.depense|number_format(2,',',' ') }}</td>

                                                                        {% set balance = chantier.reglement|number_format(2,'.','') -  chantier.depense|number_format(2,'.','') %}
                                                                        <td style=\"text-align: right\">{{ balance|number_format(2,',',' ') }}</td>
                                                                    </tr>
                                                                {% endif %}
                                                            {% endif %}
                                                        {% endfor %}
                                                    {% endif %}
                                                {% endif %}
                                            {% endif %}
                                        {% endfor %}
                                        </tbody>
                                        <tfoot>
                                        <tr class=\"font-weight-normal\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th></th>
                                            <th class=\"text-center bg-blue col-white\"></th>
                                            <th class=\"text-center bg-blue\"></th>
                                            <th class=\"text-center bg-blue col-white\"></th>
                                            <th class=\"text-center bg-blue col-white\"></th>
                                            <th class=\"text-center bg-blue col-white\"></th>
                                            <th class=\"text-center bg-blue col-white\"></th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"panel panel-pri shadow\"
                         style=\"border-left: 2px solid #E91E63; margin-top: 20px !important\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingOne_1\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed outai col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseOne_1p\" aria-expanded=\"false\"
                                   aria-controls=\"collapseOne_1\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Chantiers
                                    en cours<span class=\"badge bg-pink\"
                                                  style=\"float: right !important;\">{{ countEncours }}</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseOne_1p\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingOne_1\">
                            <div class=\"panel-body\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow: scroll\">
                                    <table class=\"table-striped table-bordered display nowrape\" id=\"dataCours\"
                                           style=\"width:100%\">


                                        {% set solde = 0 %}

                                        {% for client in clients %}
                                            {% if client.type is null %}
                                                {% if client.corbeille is null %}

                                                    {% set vp = 0 %}
                                                    {% set vr = 0 %}
                                                    {% set dp = 0 %}

                                                    {% for chantier in client.chantiers %}
                                                        {% if chantier.etat == \"encours\" and chantier.corbeille is null %}
                                                            {% set vp = chantier.cout + vp %}
                                                            {% set vr = chantier.reglement + vr %}
                                                            {% set dp = chantier.depense + dp %}
                                                        {% endif %}
                                                    {% endfor %}

                                                {% endif %}
                                            {% endif %}
                                        {% endfor %}

                                        <thead>
                                        <tr class=\"font-weight-normal\">
                                            <th style=\"min-width: 30px !important;\"></th>
                                            <th style=\"min-width: 30px !important;\"></th>
                                            <th class=\"col-blue-grey\">CHANTIERS / CLIENT</th>
                                            <th class=\"text-center col-blue-grey\">CLIENT</th>
                                            <th class=\"text-center col-blue-grey\">COÛT</th>
                                            <th class=\"text-center col-blue-grey\">RÈGLEMENT</th>
                                            <th class=\"text-center col-blue-grey\">SOLDE</th>
                                            <th class=\"text-center col-blue-grey\">COMMANDES</th>
                                            <th class=\"text-center col-blue-grey\">BALANCE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for client in clients %}
                                            {% if client.type is null %}
                                                {% if client.corbeille is null %}
                                                    {% for chantier in client.chantiers %}
                                                        {% if chantier.corbeille is null  and chantier.etat == \"encours\" %}
                                                            {% set solde  = chantier.cout - chantier.reglement %}
                                                            <tr>
                                                                <td class=\"text-center\">
                                                                    <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                           class=\"PROJY\" value=\"{{ chantier.id }}\">
                                                                </td>
                                                                <td style=\"text-align: center\"
                                                                    title=\"Avancement selon décomptes validés\">{{ chantier.progression|number_format(2,',',' ') }}
                                                                    %
                                                                </td>
                                                                <td>
                                                                    <a href=\"{{ path('chantier', {'id': chantier.id}) }}\"
                                                                       title=\"{{ chantier.nomchantier }}\"
                                                                       class=\"bolo600\">
                                                                        {% if chantier.sous is not null %}
                                                                            <span class=\"badge bg-orange\">SC</span>
                                                                        {% endif %}
                                                                        {{ chantier.nomchantier|upper|u.truncate(30, '...', false) }}
                                                                    </a>
                                                                </td>
                                                                <td class=\"bolo600\"><a
                                                                            href=\"{{ path('client', {'id': client.id}) }}\"
                                                                            class=\"col-white bolo700\">{{ client.nomclient|upper }}</a>
                                                                </td>
                                                                <td class=\"text-right\">{{ chantier.cout|number_format(2,',',' ') }}</td>
                                                                <td class=\"text-right\">{{ chantier.reglement|number_format(2,',',' ') }}</td>
                                                                <td style=\"text-align: right\">{{ solde|number_format(2,',',' ') }}</td>
                                                                <td style=\"text-align: right\">{{ chantier.depense|number_format(2,',',' ') }}</td>

                                                                {% set balance = chantier.reglement|number_format(2,'.','') -  chantier.depense|number_format(2,'.','') %}

                                                                <td style=\"text-align: right\">{{ balance|number_format(2,',',' ') }}</td>

                                                            </tr>
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endif %}
                                            {% endif %}
                                        {% endfor %}
                                        </tbody>
                                        <tfoot>
                                        <tr class=\"font-weight-normal\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th></th>
                                            <th></th>
                                            <th class=\"text-right bg-blue\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                            <th class=\"text-right bg-blue col-white\"></th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                    <br/>
                                    <p>
                                        <span class=\"col-orange\">&raquo; SC:</span>
                                        <span class=\"col-blue-grey\">SOUS-CHANTIER</span>
                                        <br></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-pri shadow\" style=\"border-left: 2px solid #FF9800\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingOne_1s\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed outai  col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1s\" href=\"#collapseOne_1s\" aria-expanded=\"false\"
                                   aria-controls=\"collapseOne_1s\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Chantiers
                                    | Sous-chantiers<span
                                            class=\"badge bg-pink\"
                                            style=\"float: right !important;\">{{ countSous }}</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseOne_1s\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingOne_1s\">
                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px\">
                                    <table class=\"table-striped table-bordered display nowrape\" id=\"dataSous\"
                                           style=\"width: 100%\">

                                        {% for client in clients %}

                                            {% if client.corbeille is null %}
                                                {% set vp = 0 %}
                                                {% set vr = 0 %}
                                                {% set dp = 0 %}

                                                {% for chantier in client.chantiers %}
                                                    {% if chantier.sous is not null %}
                                                        {% if chantier.sous is not null %}
                                                            {% if chantier.etat == 'encours' and chantier.corbeille is null %}
                                                                {% set vp = chantier.cout + vp %}
                                                                {% set vr = chantier.reglement + vr %}
                                                                {% set dp = chantier.depense + dp %}
                                                            {% endif %}
                                                        {% endif %}
                                                    {% endif %}
                                                {% endfor %}

                                            {% endif %}
                                        {% endfor %}
                                        <thead>
                                        <tr class=\"font-weight-normal\">
                                            <th class=\"col-blue-grey\">CHANTIER/SOUS-CHANTIERS</th>
                                            <th class=\"text-center col-blue-grey\">COÛT</th>
                                            <th class=\"text-center col-blue-grey\">CHANTIER</th>
                                            <th class=\"text-center col-blue-grey\">RÈGLEMENT</th>
                                            <th class=\"text-center col-blue-grey\">SOLDE</th>
                                            <th class=\"text-center col-blue-grey\">COMMANDES</th>
                                            <th class=\"text-center col-blue-grey\">BALANCE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for client in clients %}
                                            {% if client.corbeille is null %}
                                                {% for chantier in client.chantiers %}
                                                    {% if chantier.corbeille is null %}
                                                        {% if chantier.sous is not null %}
                                                            {% if chantier.etat == 'encours' %}
                                                                <tr>
                                                                    <td>
                                                                        <a href=\"{{ path('chantier', {'id': chantier.id}) }}\"
                                                                           title=\"{{ chantier.nomchantier }}\"
                                                                           class=\"bolo600\">
                                                                            {{ chantier.nomchantier|upper }}
                                                                        </a>

                                                                    </td>
                                                                    <td class=\"text-right\">{{ chantier.cout|number_format(2,',',' ') }}</td>
                                                                    <td>
                                                                        <a href=\"{{ path('chantier',{'id':chantier.sous.id}) }}\"
                                                                           title=\"{{ chantier.sous.nomchantier }}\"
                                                                           class=\"col-white bolo600\">
                                                                            {{ chantier.sous.nomchantier|upper|u.truncate(30, '...', false) }}
                                                                    </td>
                                                                    <td class=\"text-right\">{{ chantier.reglement|number_format(2,',',' ') }}</td>
                                                                    <td style=\"text-align: right\">{{ (chantier.cout|number_format(2,'.','') -  chantier.reglement|number_format(2,'.',''))|number_format(2,',',' ') }}</td>
                                                                    <td style=\"text-align: right\">{{ chantier.depense|number_format(2,',',' ') }}</td>

                                                                    {% set balance = chantier.reglement|number_format(2,'.','') -  chantier.depense|number_format(2,'.','') %}
                                                                    <td style=\"text-align: right\">{{ balance|number_format(2,',',' ') }}</td>

                                                                </tr>
                                                            {% endif %}
                                                        {% endif %}
                                                    {% endif %}
                                                {% endfor %}
                                            {% endif %}
                                        {% endfor %}
                                        </tbody>
                                        <tfoot>
                                        <tr class=\"font-weight-normal\">
                                            <th class=\"col-blue-grey\"></th>
                                            <th class=\"text-center bg-blue col-white\">0</th>
                                            <th class=\"text-center col-blue\">0</th>
                                            <th class=\"text-center bg-blue col-white\">0</th>
                                            <th class=\"text-center bg-blue col-white\">0</th>
                                            <th class=\"text-center bg-blue col-white\">0</th>
                                            <th class=\"text-center bg-blue col-white\">0</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"panel panel-pri shadow\"
                         style=\"border-left: 2px solid #2196F3; margin-top: 20px !important\">
                        <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingTwo_1\">
                            <h4 class=\"panel-title\">
                                <a class=\"collapsed outai col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseTwo_1\" aria-expanded=\"false\"
                                   aria-controls=\"collapseTwo_1\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Chantiers
                                    Terminés<span class=\"badge bg-pink\"
                                                  style=\"float: right !important;\">{{ countTerminer }}</span>
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapseTwo_1\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingTwo_1\">
                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px;\">
                                    <table class=\"table-striped table-bordered display nowrape\" id=\"dataArchive\"
                                           style=\"width: 100%\">

                                        {% set marge = 0 %}
                                        {% set solde = 0 %}

                                        {% for client in clients %}
                                            {% if client.type is null %}
                                                {% if client.corbeille is null %}
                                                    {% set vp = 0 %}
                                                    {% set vr = 0 %}
                                                    {% set dp = 0 %}

                                                    {% for chantier in client.chantiers %}
                                                        {% if chantier.etat == 'archiver' and chantier.corbeille is null %}
                                                            {% set vp = chantier.cout + vp %}
                                                            {% set vr = chantier.reglement + vr %}
                                                            {% set dp = chantier.depense + dp %}
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endif %}
                                            {% endif %}
                                        {% endfor %}
                                        <thead>
                                        <tr class=\"font-weight-normal\">
                                            <th style=\"min-width: 30px !important;\"></th>
                                            <th style=\"min-width: 30px !important;\"></th>
                                            <th class=\"col-blue-grey\">CHANTIERS / CLIENT</th>
                                            <th class=\"text-center col-blue-grey\">COÛT</th>
                                            <th class=\"text-center col-blue-grey\">CLIENT</th>
                                            <th class=\"text-center col-blue-grey\">RÈGLEMENT</th>
                                            <th class=\"text-center col-blue-grey\">SOLDE</th>
                                            <th class=\"text-center col-blue-grey\">COMMANDES</th>
                                            <th class=\"text-center col-blue-grey\">MARGES</th>
                                            <th class=\"text-center col-blue-grey\">BALANCE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for client in clients %}
                                            {% if client.corbeille is null and  client.type is null %}
                                                {% for chantier in client.chantiers %}
                                                    {% if chantier.corbeille is null and chantier.etat == 'archiver' %}
                                                        {% set solde  = chantier.cout - chantier.reglement %}
                                                        <tr>
                                                            <td class=\"text-center\">
                                                                <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                       class=\"PROJY2\"
                                                                       value=\"{{ chantier.id }}\">
                                                            </td>
                                                            <td style=\"text-align: center\"
                                                                title=\"Avancement selon décomptes validés\">{{ chantier.progression|number_format(2,',',' ') }}
                                                                %
                                                            </td>
                                                            <td>
                                                                <a href=\"{{ path('chantier', {'id': chantier.id}) }}\"
                                                                   class=\"bolo600\"
                                                                   title=\"{{ chantier.nomchantier }}\">
                                                                    {% if chantier.sous is not null %}
                                                                        <span class=\"badge bg-orange\">SC</span>
                                                                    {% endif %}
                                                                    {{ chantier.nomchantier|upper|u.truncate(30, '...', false) }}
                                                                </a>
                                                            </td>
                                                            <td class=\"text-right\">{{ chantier.cout|number_format(2,',',' ') }}</td>
                                                            <td class=\"bolo600\">{{ client.nomclient|upper }}</td>
                                                            <td class=\"text-right\">{{ chantier.reglement|number_format(2,',',' ') }}</td>
                                                            <td style=\"text-align: right\">{{ solde|number_format(2,',',' ') }}</td>
                                                            <td style=\"text-align: right\">{{ chantier.depense|number_format(2,',',' ') }}</td>
                                                            <td style=\"text-align: right\">{{ (chantier.cout|number_format(2,'.','') -  chantier.depense|number_format(2,'.',''))|number_format(2,',',' ') }}</td>

                                                            {% set balance =  -solde %}

                                                            <td style=\"text-align: right\">{{ balance|number_format(2,',',' ') }}</td>
                                                        </tr>
                                                    {% endif %}
                                                {% endfor %}
                                            {% endif %}
                                        {% endfor %}
                                        </tbody>
                                        <tfoot>
                                        <tr class=\"font-weight-normal\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th style=\"width: 10px !important;\"></th>
                                            <th></th>
                                            <th class=\"text-center bg-blue col-white\"></th>
                                            <th class=\"text-center bg-blue\"></th>
                                            <th class=\"text-center bg-blue col-white\"></th>
                                            <th class=\"text-center bg-blue col-white\"></th>
                                            <th class=\"text-center bg-blue col-white\"></th>
                                            <th class=\"text-center bg-blue col-white\"></th>
                                            <th class=\"text-center bg-blue col-white\"></th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-pri shadow\" style=\"border-left: 2px solid #00BCD4;\">
                        <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingClo_1\">
                            <h4 class=\"panel-title\">
                                <a class=\"collapsed outai col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseClo_1\" aria-expanded=\"false\"
                                   aria-controls=\"collapseClo_1\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Chantiers
                                    Clôturés<span class=\"badge bg-pink\"
                                                  style=\"float: right !important;\">{{ countCloturer }}</span>
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapseClo_1\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingClo_1\">
                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px;\">
                                    <table class=\"table-striped table-bordered display nowrape\" id=\"dataClotures\"
                                           style=\"width: 100%\">

                                        {% set solde = 0 %}

                                        {% for client in clients %}
                                            {% if client.type is null %}
                                                {% if client.corbeille is null %}
                                                    {% set vp = 0 %}
                                                    {% set vr = 0 %}
                                                    {% set dp = 0 %}

                                                    {% for chantier in client.chantiers %}
                                                        {% if chantier.corbeille is null %}
                                                            {% if chantier.etat == 'cloturer' %}
                                                                {% set vp = chantier.cout + vp %}
                                                                {% set vr = chantier.reglement + vr %}
                                                                {% set dp = chantier.depense + dp %}
                                                            {% endif %}
                                                        {% endif %}
                                                    {% endfor %}

                                                {% endif %}
                                            {% endif %}
                                        {% endfor %}
                                        <thead>
                                        <tr class=\"font-weight-normal\">
                                            <th style=\"min-width: 30px !important;\"></th>
                                            <th class=\"col-blue-grey\">CHANTIERS / CLIENT</th>
                                            <th class=\"text-center col-blue-grey\">COÛT</th>
                                            <th class=\"text-center col-blue-grey\">CLIENT</th>
                                            <th class=\"text-center col-blue-grey\">RÈGLEMENT</th>
                                            <th class=\"text-center col-blue-grey\">SOLDE</th>
                                            <th class=\"text-center col-blue-grey\">COMMANDES</th>
                                            <th class=\"text-center col-blue-grey\">MARGES</th>
                                            <th class=\"text-center col-blue-grey\">BALANCE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for client in clients %}
                                            {% if client.corbeille is null %}
                                                {% if client.type is null %}
                                                    {% if client.corbeille is null %}
                                                        {% for chantier in client.chantiers %}
                                                            {% if chantier.corbeille is null %}
                                                                {% if chantier.etat == 'cloturer' %}
                                                                    {% set solde  = chantier.cout - chantier.reglement %}
                                                                    <tr>
                                                                        <td class=\"text-center\">
                                                                            <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                                   class=\"PROCLO\"
                                                                                   value=\"{{ chantier.id }}\">
                                                                        </td>
                                                                        <td>
                                                                            <a href=\"{{ path('chantier', {'id': chantier.id}) }}\"
                                                                               class=\"bolo600\"
                                                                               title=\"{{ chantier.nomchantier }}\">
                                                                                {% if chantier.sous is not null %}
                                                                                    <span class=\"badge bg-orange\">SC</span>
                                                                                {% endif %}
                                                                                {{ chantier.nomchantier|upper }}
                                                                            </a>
                                                                        </td>
                                                                        <td class=\"text-right\">{{ chantier.cout|number_format(2,',',' ') }}</td>
                                                                        <td class=\"bolo600\">{{ client.nomclient|upper }}</td>
                                                                        <td class=\"text-right\">{{ chantier.reglement|number_format(2,',',' ') }}</td>
                                                                        <td style=\"text-align: right\">{{ solde|number_format(2,',',' ') }}</td>
                                                                        <td style=\"text-align: right\">{{ chantier.depense|number_format(2,',',' ') }}</td>
                                                                        <td style=\"text-align: right\">{{ (chantier.cout|number_format(2,'.','') -  chantier.depense|number_format(2,'.',''))|number_format(2,',',' ') }}</td>
                                                                        {% set balance =  -solde %}
                                                                        <td style=\"text-align: right\">{{ balance|number_format(2,',',' ') }}</td>
                                                                    </tr>
                                                                {% endif %}
                                                            {% endif %}
                                                        {% endfor %}
                                                    {% endif %}
                                                {% endif %}
                                            {% endif %}
                                        {% endfor %}
                                        </tbody>
                                        <tfoot>
                                        <tr class=\"font-weight-normal\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th></th>
                                            <th class=\"text-center bg-blue col-white\"></th>
                                            <th class=\"text-center bg-blue\"></th>
                                            <th class=\"text-center bg-blue col-white\"></th>
                                            <th class=\"text-center bg-blue col-white\"></th>
                                            <th class=\"text-center bg-blue col-white\"></th>
                                            <th class=\"text-center bg-blue col-white\"></th>
                                            <th class=\"text-center bg-blue col-white\"></th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"panel panel-pri shadow\"
                         style=\"border-left: 2px solid #79A807; margin-top: 20px !important\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingThree_1\">
                            <h4 class=\"panel-title\">
                                <a class=\"collapsed col-white outai\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseThree_1\" aria-expanded=\"false\"
                                   aria-controls=\"collapseThree_1\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Tous
                                    les chantiers<span class=\"badge bg-pink\"
                                                       style=\"float: right !important;\">{{ countTout }}</span>
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapseThree_1\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingThree_1\">
                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px\">
                                    <table class=\"table-striped table-bordered display nowrape\" id=\"dataToChantiers\"
                                           style=\"width: 100%\">

                                        {% set tcout = 0 %}
                                        {% set treglement = 0 %}
                                        {% set tdepense = 0 %}
                                        {% set tbalance = 0 %}
                                        {% set marge = 0 %}
                                        {% set solde = 0 %}

                                        {% for client in clients %}
                                            {% if client.type is null %}
                                                {% if client.corbeille is null %}

                                                    {% set vp = 0 %}
                                                    {% set vr = 0 %}
                                                    {% set dp = 0 %}

                                                    {% for chantier in client.chantiers %}
                                                        {% if chantier.corbeille is null %}
                                                            {% set vp = chantier.cout + vp %}
                                                            {% set vr = chantier.reglement + vr %}
                                                            {% set dp = chantier.depense + dp %}
                                                        {% endif %}
                                                    {% endfor %}

                                                    {% set tcout = vp + tcout %}
                                                    {% set treglement = vr + treglement %}
                                                    {% set tdepense = dp + tdepense %}

                                                {% endif %}
                                            {% endif %}
                                        {% endfor %}

                                        <thead>
                                        <tr class=\"font-weight-normal\">
                                            <th class=\"col-blue-grey\">CHANTIERS / CLIENT</th>
                                            <th class=\"text-center col-blue-grey\">COÛT&nbsp;DU&nbsp;CHANTIER</th>
                                            <th class=\"text-center col-blue-grey\">CLIENT</th>
                                            <th class=\"text-center col-blue-grey\">RÈGLEMENT</th>
                                            <th class=\"text-center col-blue-grey\">SOLDE</th>
                                            <th class=\"text-center col-blue-grey\">COMMANDES</th>
                                            <th class=\"text-center col-blue-grey\">MARGES</th>
                                            <th class=\"text-center col-blue-grey\">BALANCE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for client in clients %}
                                            {% if client.type is null %}
                                                {% if client.corbeille is null %}
                                                    {% for chantier in client.chantiers %}
                                                        {% if chantier.corbeille is null %}
                                                            {% set solde  = chantier.cout - chantier.reglement %}
                                                            <tr>
                                                                <td>
                                                                    <a href=\"{{ path('chantier', {'id': chantier.id}) }}\"
                                                                       class=\"bolo600\"
                                                                       title=\"{{ chantier.nomchantier }}\">
                                                                        {% if chantier.sous is not null %}
                                                                            <span class=\"badge bg-orange\">SC</span>
                                                                        {% endif %}

                                                                        {{ chantier.nomchantier|upper }}
                                                                    </a>
                                                                </td>
                                                                <td class=\"text-right\">{{ chantier.cout|number_format(2,',',' ') }}</td>
                                                                <td class=\"bolo600\">{{ client.nomclient|upper }}</td>
                                                                <td class=\"text-right\">{{ chantier.reglement|number_format(2,',',' ') }}</td>
                                                                <td style=\"text-align: right\">{{ solde|number_format(2,',',' ') }}</td>
                                                                <td style=\"text-align: right\">{{ chantier.depense|number_format(2,',',' ') }}</td>
                                                                {% if chantier.terminer == 'oui' %}
                                                                    <td style=\"text-align: right\">{{ (chantier.cout|number_format(2,'.','') -  chantier.depense|number_format(2,'.',''))|number_format(2,',',' ') }}</td>
                                                                {% else %}
                                                                    <td style=\"text-align: right\">0</td>
                                                                {% endif %}

                                                                {% if chantier.terminer == 'oui' %}
                                                                    {% set balance =  -solde %}
                                                                {% else %}
                                                                    {% set balance = chantier.reglement|number_format(2,'.','') -  chantier.depense|number_format(2,'.','') %}
                                                                {% endif %}
                                                                <td style=\"text-align: right\">{{ balance|number_format(2,',',' ') }}</td>
                                                            </tr>
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endif %}
                                            {% endif %}
                                        {% endfor %}
                                        </tbody>
                                        <tfoot>
                                        <tr class=\"font-weight-normal\">
                                            <th></th>
                                            <th class=\"text-center bg-blue col-white\">{{ tcout|number_format(2,',',' ') }}</th>
                                            <th class=\"text-center bg-blue\"></th>
                                            <th class=\"text-center bg-blue col-white\">{{ treglement|number_format(2,',',' ') }}</th>
                                            <th class=\"text-center bg-blue col-white\">{{ (tcout|number_format(2,'.','') -  treglement|number_format(2,'.',''))|number_format(2,',',' ') }}</th>
                                            <th class=\"text-center bg-blue col-white\">{{ tdepense|number_format(2,',',' ') }}</th>
                                            <th class=\"text-center bg-blue col-white\">{{ (tcout|number_format(2,'.','') -  tdepense|number_format(2,'.',''))|number_format(2,',',' ') }}</th>
                                            <th class=\"text-center bg-blue col-white\">{{ (treglement|number_format(2,'.','') -  tdepense|number_format(2,'.',''))|number_format(2,',',' ') }}</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    {% set countContact = 0 %}
                    {% for client in clients %}
                        {% for contact in client.contacts %}
                            {% if contact.corbeille is null and client.corbeille is null %}
                                {% set countContact = countContact + 1 %}
                            {% endif %}
                        {% endfor %}
                    {% endfor %}
                    <div class=\"panel panel-pri shadow\" style=\"margin-top: 20px !important\">
                        <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingDeu\">
                            <h5 class=\"panel-title \">
                                <a class=\"collapsed outai col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseDeu\" aria-expanded=\"false\"
                                   aria-controls=\"collapseDeu\">
                                    <i class=\"material-icons col-white\" style=\"font-size:18px;float: left\">keyboard_arrow_down</i>Contacts<span
                                            class=\"badge bg-pink\"
                                            style=\"float: right !important;\">{{ countContact }}</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseDeu\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingDeu\">
                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"table-responsive shadow\" style=\"padding: 10px\">
                                    <table class=\"table-striped table-bordered display nowrape\" style=\"width: 100%\"
                                           id=\"dataContacts\">
                                        <thead>
                                        <tr class=\"text-center\">
                                            <th style=\"min-width: 30px !important;\"></th>
                                            <th>CONTACT</th>
                                            <th>FONCTION</th>
                                            <th>EMAIL</th>
                                            <th>TÉLÉPHONE</th>
                                            <th>BUREAU</th>
                                            <th>CREÉ PAR</th>
                                            <th>CLIENT</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for client in clients %}
                                            {% for contact in client.contacts %}
                                                {% if contact.corbeille is null and client.corbeille is null %}
                                                    <tr>
                                                        <td class=\"text-center\">
                                                            <input type=\"checkbox\" data-toggle=\"toggle\" class=\"CONTAK\"
                                                                   value=\"{{ contact.id }}\"></td>
                                                        <td class=\"bolo600\">{{ contact.contact|upper }}</td>
                                                        <td>{{ contact.fonction|capitalize }}</td>
                                                        <td>{{ contact.mail }}</td>
                                                        <td>{{ contact.phone }}</td>
                                                        <td>{{ contact.bureau }}</td>
                                                        <td class=\"text-left col-blue bolo600\">
                                                            <i class=\"fa fa-user col-blue bolo600\"></i>&nbsp;
                                                            {% if contact.dobyuser is not null %}
                                                                {{ contact.dobyuser.nom|upper }}
                                                                &nbsp;{{ contact.dobyuser.prenoms|upper }}
                                                            {% endif %}
                                                        </td>
                                                        <td><b>{{ client.nomclient }}</b></td>
                                                    </tr>
                                                {% endif %}
                                            {% endfor %}
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row clearfix\" style=\"margin-top:50px\">
                        <div class=\"col-sm-12 \">
                            <h4 class=\"bolo700\">
                                Devis - Décomptes - Factures
                            </h4>
                        </div>
                    </div>

                    {# DEVIS #}
                    {% set devjour = 0 %}
                    {% for devis in deviss %}
                        {% if devis.client.corbeille == null %}
                            {% if devis.corbeille is null and devis.type is not same as 'cps' %}
                                {% if devis.type is not same as 'esti' %}
                                    {% if devis.type != \"esti\" %}
                                        {% set  devjour = devjour + 1 %}
                                    {% endif %}
                                {% endif %}
                            {% endif %}
                        {% endif %}
                    {% endfor %}
                    <div class=\"panel panel-pri shadow\" style=\"margin-top: 20px !important\">
                        <div class=\"panel-heading bg-col-blue-grey\" role=\"tab\" id=\"headingDev\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed  col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseDev\" aria-expanded=\"false\"
                                   aria-controls=\"collapseDev\" style=\"font-size: 16px!important\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>
                                    Devis du jour<span
                                            class=\"badge bg-pink\"
                                            style=\"float: right !important;\">{{ devjour }}</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseDev\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingDev\">
                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"table-responsive shadow\" style=\"padding: 10px\">
                                    <table class=\"table-striped table-bordered display nowrape\" style=\"width: 100%\"
                                           id=\"dataDEVIS3\">
                                        <thead>
                                        <tr class=\"text-center bolderr\"
                                            style=\"background-color: #f9f9f9 !important;\">
                                            <th class=\"mw30\"></th>
                                            <th class=\"mw30\"></th>
                                            <th>DATE</th>
                                            <th>N° DEVIS</th>
                                            <th>TOTAL HT</th>
                                            <th>TOTAL TTC</th>
                                            <th>RÉFÉRENCE</th>
                                            <th>ETAT</th>
                                            <th>CREÉ PAR</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% set dtth = 0 %}
                                        {% set dttc = 0 %}
                                        {% for devis in deviss %}
                                            {% if devis.type != \"esti\" %}
                                                {% if devis.client.corbeille == null %}
                                                    {% if devis.corbeille is null and devis.type is not same as 'cps' %}
                                                        <tr>
                                                            <td class=\"text-center\">
                                                                <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                       class=\"DEVYS3\"
                                                                       value=\"{{ devis.id }}\"></td>
                                                            <td class=\"text-center\">
                                                                <a href=\"#\"
                                                                   onclick=\"shasha({{ devis.id }},'imprimdevis');\"><i
                                                                            class=\"fa fa-eye col-green\"
                                                                            aria-hidden=\"true\"></i></a>
                                                            </td>
                                                            <td>{{ devis.date|date('y.m.d H:m') }}</td>
                                                            <td>
                                                                <a href=\"{{ path('editdevis',{'id':devis.id, 'idchantier':devis.chantier.id}) }}\"
                                                                   class=\"bolo600\"
                                                                   style=\"color:dodgerblue\">
                                                                    {% if devis.etat == \"valide\" %}
                                                                    <span class=\"badge badge-pill badge-primary\"
                                                                          title=\"Validé par {% if devis.vabyuser is not null %}
                                                               {{ devis.vabyuser.prenoms|upper }}{% endif %}\">V</span>
                                                                {% else %}
                                                                    <span class=\"badge badge-pill col-white\"
                                                                          title=\"Dévalidé par {% if devis.vabyuser is not null %}
                                                              {{ devis.vabyuser.prenoms|upper }}{% endif %}\">V</span>
                                                                    {% endif %}&nbsp;DEVIS N° {{ devis.iddevis }}
                                                                </a>
                                                            </td>

                                                            <td class=\"text-right bolo600\">{{ devis.totalht|number_format(2,',',' ') }}</td>
                                                            <td class=\"text-right bolo600\">{{ devis.totalttc|number_format(2,',',' ') }}</td>
                                                            <td class=\"col-deep-orange\"
                                                                title=\"{{ devis.devreference|striptags|raw }}\">{{ devis.devreference|striptags|raw }}</td>
                                                            <td title=\"{{ devis.devreference|striptags|raw }}\"><a
                                                                        href=\"{{ path('chantier',{'id':devis.chantier.id}) }}\">{{ devis.client.nomclient|upper }}
                                                                    |
                                                                    {{ devis.chantier.nomchantier|upper }}</a></td>

                                                            <td class=\"text-left col-blue bolo600\">
                                                                <i class=\"fa fa-user col-blue bolo600\"></i>&nbsp;{{ devis.dobyuser.nom|upper }}
                                                                &nbsp;{{ devis.dobyuser.prenoms|upper }}</td>
                                                        </tr>
                                                        {% set dtth = devis.totalht + dtth %}
                                                        {% set dttc = devis.totalttc + dttc %}
                                                    {% endif %}
                                                {% endif %}
                                            {% endif %}
                                        {% endfor %}
                                        </tbody>
                                        <tfoot>
                                        <tr class=\"text-center bolderr\">
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th class=\"text-center bg-blue col-white\">{{ dtth|number_format(2,',',' ') }}</th>
                                            <th class=\"text-center bg-blue col-white\">{{ dttc|number_format(2,',',' ') }}</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                    <br></div>
                            </div>
                        </div>
                    </div>

                    {% set devnv = 0 %}
                    {% for client in clients %}
                        {% if client.corbeille == null and client.type is null %}
                            {% for devis in client.devis %}
                                {% if devis.chantier.etat != 'archiver' and devis.chantier.corbeille  is null %}
                                    {% if devis.etat == 'save' and devis.type != \"esti\" %}
                                        {% if devis.corbeille is null %}
                                            {% set  devnv = devnv + 1 %}
                                        {% endif %}
                                    {% endif %}
                                {% endif %}
                            {% endfor %}
                        {% endif %}
                    {% endfor %}
                    <div class=\"panel panel-pri shadow\">
                        <div class=\"panel-heading bg-col-blue-grey\" role=\"tab\" id=\"headingDeve\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed  col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseDeve\" aria-expanded=\"false\"
                                   aria-controls=\"collapseDeve\" style=\"font-size: 16px!important\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>
                                    Devis non validés<span
                                            class=\"badge bg-pink\"
                                            style=\"float: right !important;\">{{ devnv }}</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseDeve\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingDeve\">
                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"table-responsive shadow\" style=\"padding: 10px\">
                                    <table class=\"table-striped table-bordered display nowrap\" style=\"width: 100%\"
                                           id=\"dataDEVIS4\">
                                        <thead>
                                        <tr class=\"text-center bolderr\"
                                            style=\"background-color: #f9f9f9 !important;\">
                                            <th class=\"mw30\"></th>
                                            <th class=\"mw30\"></th>
                                            <th>DATE</th>
                                            <th>N° DEVIS</th>
                                            <th>TOTAL HT</th>
                                            <th>TOTAL TTC</th>
                                            <th>RÉFÉRENCE</th>
                                            <th>ETAT</th>
                                            <th>CREÉ PAR</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% set dtth = 0 %}
                                        {% set dttc = 0 %}
                                        {% for client in clients %}
                                            {% if client.corbeille is null and client.type is null %}
                                                {% for devis in client.devis %}
                                                    {% if devis.chantier.etat != 'archiver' and devis.chantier.corbeille  is null %}
                                                        {% if devis.etat == 'save' and devis.type != \"esti\" %}
                                                            {% if devis.corbeille is null %}
                                                                <tr>
                                                                    <td class=\"text-center\">
                                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                               class=\"DEVYS4\"
                                                                               value=\"{{ devis.id }}\"></td>
                                                                    <td class=\"text-center\">
                                                                        <a href=\"#\"
                                                                           onclick=\"shasha({{ devis.id }},'imprimdevis');\">
                                                                            <i class=\"fa fa-eye col-green\"
                                                                               aria-hidden=\"true\"></i>
                                                                        </a>
                                                                    </td>
                                                                    <td>{{ devis.date|date('y.m.d H:m') }}</td>
                                                                    <td>
                                                                        <a href=\"{{ path('editdevis',{'id':devis.id, 'idchantier':devis.chantier.id}) }}\"
                                                                           class=\"bolo600\"
                                                                           style=\"color:dodgerblue\">
                                                                            {% if devis.etat == \"valide\" %}
                                                                            <span class=\"badge badge-pill badge-primary\"
                                                                                  title=\"Validé par {% if devis.vabyuser is not null %}
                                                                                  {{ devis.vabyuser.prenoms|upper }}{% endif %}\">V</span>
                                                                        {% else %}
                                                                            <span class=\"badge badge-pill col-white\"
                                                                                  title=\"Dévalidé par {% if devis.vabyuser is not null %}
                                                                                   {{ devis.vabyuser.prenoms|upper }}{% endif %}\">V</span>
                                                                            {% endif %}&nbsp;DEVIS
                                                                            N°{{ devis.iddevis }}
                                                                        </a>
                                                                    </td>

                                                                    <td class=\"text-right bolo600\">{{ devis.totalht|number_format(2,',',' ') }}</td>
                                                                    <td class=\"text-right bolo600\">{{ devis.totalttc|number_format(2,',',' ') }}</td>
                                                                    <td class=\"col-deep-orange\"
                                                                        title=\"{{ devis.devreference|striptags|raw }}\">{{ devis.devreference|striptags|raw }}</td>
                                                                    <td title=\"{{ devis.devreference|striptags|raw }}\">
                                                                        <a href=\"{{ path('chantier',{'id':devis.chantier.id}) }}\">{{ devis.client.nomclient|upper }}
                                                                            | {{ devis.chantier.nomchantier|upper }}</a>
                                                                    </td>

                                                                    <td class=\"text-left col-blue bolo600\">
                                                                        <i class=\"fa fa-user col-blue bolo600\"></i>&nbsp;{{ devis.dobyuser.nom|upper }}
                                                                        &nbsp;{{ devis.dobyuser.prenoms|upper }}
                                                                    </td>
                                                                </tr>
                                                                {% set dtth = devis.totalht + dtth %}
                                                                {% set dttc = devis.totalttc + dttc %}
                                                            {% endif %}
                                                        {% endif %}
                                                    {% endif %}
                                                {% endfor %}
                                            {% endif %}
                                        {% endfor %}
                                        </tbody>
                                        <tfoot>
                                        <tr class=\"text-center bolderr\">
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th class=\"text-center bg-blue col-white\">{{ dtth|number_format(2,',',' ') }}</th>
                                            <th class=\"text-center bg-blue col-white\">{{ dttc|number_format(2,',',' ') }}</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    {# FIN DEVIS #}



                    {# DECOMPTES #}
                    {% set decjour = 0 %}
                    {% for decompte in decomptes %}
                        {% if decompte.devis.client.corbeille is null %}
                            {% if decompte.corbeille is null %}
                                {% set  decjour = decjour + 1 %}
                            {% endif %}
                        {% endif %}
                    {% endfor %}
                    <div class=\"panel panel-pri\" style=\"margin-top: 20px !important\">
                        <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingDecoJ\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseDecoJ\" aria-expanded=\"false\"
                                   aria-controls=\"collapseDecoJ\" style=\"font-size: 16px!important\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>
                                    Décomptes du jour<span
                                            class=\"badge bg-pink\"
                                            style=\"float: right !important;\">{{ decjour }}</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseDecoJ\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingDecoJ\">
                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"table-responsive\">
                                    <table class=\"table-striped table-bordered display nowrap\" style=\"width: 100%\"
                                           id=\"dataDECOMPTE3\">
                                        <thead>
                                        <tr class=\"text-center bolderr\">
                                            <th class=\"mw30\"></th>
                                            <th class=\"mw30\"></th>
                                            <th>DATE</th>
                                            <th>N° DÉCOMPTE</th>
                                            <th>N° DEVIS</th>
                                            <th>N° FACTURE</th>
                                            <th>MONTANT TTC</th>
                                            <th>AVANCEMENT</th>
                                            <th>VALEUR TTC</th>
                                            <th>ETAT</th>
                                            <th>CREÉ PAR</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for decompte in decomptes %}
                                            {% if decompte.corbeille is null %}
                                                {% if decompte.devis.client.corbeille is null %}
                                                    <tr>
                                                        <td class=\"text-center\">
                                                            <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                   class=\"DECO3\" value=\"{{ decompte.id }}\">
                                                        </td>
                                                        <td class=\"text-center\">
                                                            <a href=\"#\"
                                                               onclick=\"shasha({{ decompte.id }},'imprimdecompte');\">
                                                                <i class=\"fa fa-eye col-green\"
                                                                   aria-hidden=\"true\"></i>
                                                            </a>
                                                        </td>
                                                        <td>{{ decompte.date|date('y.m.d H:m') }}</td>
                                                        <td>
                                                            <a href=\"{{ path('editdecompte',{'id':decompte.id, 'idchantier':decompte.chantier.id}) }}\"
                                                               class=\"bolo600\"
                                                               class=\"nowrap\"
                                                               style=\"color:dodgerblue\">
                                                                {% if decompte.etat == 'valide' %}
                                                                    <span class=\"badge badge-pill badge-primary\">V</span>
                                                                {% else %}
                                                                    <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                {% endif %}
                                                                DÉCOMPTE&nbsp;N°{{ decompte.numdecompte }}
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href=\"{{ path('editdevis',{'id':decompte.devis.id, 'idchantier':decompte.chantier.id}) }}\"
                                                               class=\"bolo600\"
                                                               style=\"color:dodgerblue\">
                                                                {% if decompte.devis.etat == 'valide' %}
                                                                    <span class=\"badge badge-pill badge-primary\">V</span>
                                                                {% else %}
                                                                    <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                {% endif %}
                                                                DEVIS&nbsp;N°{{ decompte.devis.iddevis }}
                                                            </a>
                                                        </td>
                                                        <td>
                                                            {% if decompte.facture %}
                                                                <a href=\"{{ path('editfacture',{'id':decompte.facture.id, 'idchantier':decompte.chantier.id}) }}\"
                                                                   class=\"bolo600\"
                                                                   style=\"color:dodgerblue\">
                                                                    {% if decompte.facture.etat == 'valide' %}
                                                                        <span class=\"badge badge-pill badge-primary\">V</span>
                                                                    {% else %}
                                                                        <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                    {% endif %}
                                                                    FACTURE N°{{ decompte.facture.numfacture }}
                                                                </a>
                                                            {% endif %}
                                                        </td>
                                                        {% if decompte.devis.ptva == 'non' %}
                                                            <td class=\"text-right bolo600\">{{ decompte.totalht|number_format(2,',',' ') }}</td>
                                                        {% else %}
                                                            <td class=\"text-right bolo600\">{{ (decompte.totalht + ((decompte.totalht * decompte.devis.tva)/100) )|number_format(2,',',' ') }}</td>
                                                        {% endif %}
                                                        <td class=\"text-center col-pink bolo600\">{{ decompte.avancement|number_format(2,',',' ') }}
                                                            %
                                                        </td>
                                                        {% if decompte.devis.ptva == 'non' %}
                                                            <td class=\"text-right bolo600\">{{ decompte.apayer|number_format(2,',',' ') }}</td>
                                                        {% else %}
                                                            <td class=\"text-right bolo600\">{{ (decompte.apayer + ((decompte.apayer * decompte.devis.tva)/100) )|number_format(2,',',' ') }}</td>
                                                        {% endif %}
                                                        <td>
                                                            <a href=\"{{ path('chantier',{'id':decompte.chantier.id}) }}\">{{ decompte.client.nomclient }}
                                                                |
                                                                {{ decompte.chantier.nomchantier }}</a></td>
                                                        <td class=\"text-left col-blue bolo600\">
                                                            <i class=\"fa fa-user col-blue bolo600\"></i>&nbsp;
                                                            {% if decompte.dobyuser is not null %}
                                                                {{ decompte.dobyuser.nom|upper }}
                                                                &nbsp;{{ decompte.dobyuser.prenoms|upper }}
                                                            {% endif %}
                                                        </td>
                                                    </tr>
                                                {% endif %}
                                            {% endif %}
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>


                    {% set decnv = 0 %}
                    {% for chantier in chantiers %}
                        {% if (chantier.corbeille is null) %}
                            {% if (chantier.etat == \"archiver\" and chantier.corbeille is null) %}
                                {% for decompte in chantier.decomptes %}
                                    {% if decompte.etat == 'save' %}
                                        {% if decompte.corbeille is null %}
                                            {% set  decnv = decnv + 1 %}
                                        {% endif %}
                                    {% endif %}
                                {% endfor %}
                            {% endif %}
                        {% endif %}
                    {% endfor %}
                    <div class=\"panel panel-pri\">
                        <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingDeco\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseDeco\" aria-expanded=\"false\"
                                   aria-controls=\"collapseDeco\" style=\"font-size: 16px!important\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>
                                    Décomptes non validés<span
                                            class=\"badge bg-pink\"
                                            style=\"float: right !important;\">{{ decnv }}</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseDeco\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingDeco\">
                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"table-responsive\">
                                    <table class=\"table-striped table-bordered display nowrap\" style=\"width: 100%\"
                                           id=\"dataDECOMPTE4\">
                                        <thead>
                                        <tr class=\"text-center bolderr\">
                                            <th class=\"mw30\"></th>
                                            <th class=\"mw30\"></th>
                                            <th>DATE</th>
                                            <th>N° DÉCOMPTE</th>
                                            <th>N° DEVIS</th>
                                            <th>N° FACTURE</th>
                                            <th>MONTANT TTC</th>
                                            <th>AVANCEMENT</th>
                                            <th>VALEUR TTC</th>
                                            <th>ETAT</th>
                                            <th>CREÉ PAR</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for chantier in chantiers %}
                                            {% if (chantier.corbeille is null) %}
                                                {% for decompte in chantier.decomptes %}
                                                    {% if decompte.etat == 'save' %}
                                                        {% if decompte.corbeille is null %}
                                                            <tr>
                                                                <td class=\"text-center\">
                                                                    <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                           class=\"DECO4\"
                                                                           value=\"{{ decompte.id }}\"></td>
                                                                <td class=\"text-center\">
                                                                    <a href=\"#\"
                                                                       onclick=\"shasha({{ decompte.id }},'imprimdecompte');\">
                                                                        <i class=\"fa fa-eye col-green\"
                                                                           aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </td>
                                                                <td>{{ decompte.date|date('y.m.d H:m') }}</td>
                                                                <td>
                                                                    <a href=\"{{ path('editdecompte',{'id':decompte.id, 'idchantier':decompte.chantier.id}) }}\"
                                                                       class=\"bolo600\"
                                                                       style=\"color:dodgerblue\"><span
                                                                                class=\"badge badge-pill badge-blue-grey\">V</span>&nbsp;DÉCOMPTE&nbsp;N°{{ decompte.numdecompte }}
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a href=\"{{ path('editdevis',{'id':decompte.devis.id, 'idchantier':decompte.chantier.id}) }}\"
                                                                       class=\"bolo600\"
                                                                       style=\"color:dodgerblue\">
                                                                        {% if decompte.devis.etat == 'valide' %}
                                                                            <span class=\"badge badge-pill badge-primary\">V</span>
                                                                        {% else %}
                                                                            <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                        {% endif %}
                                                                        DEVIS&nbsp;N°&nbsp;{{ decompte.devis.iddevis }}
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    {% if decompte.facture %}
                                                                        <a href=\"{{ path('editfacture', {'id': decompte.facture.id , 'idchantier':decompte.chantier.id}) }}\"
                                                                           class=\"bolo600\"
                                                                           class=\"col-pink\">
                                                                            {% if decompte.facture.etat == 'valide' %}
                                                                                <span class=\"badge badge-pill badge-primary\">V</span>
                                                                            {% else %}
                                                                                <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                            {% endif %}
                                                                            FACTURE&nbsp;N°&nbsp;{{ decompte.facture.numfacture }}
                                                                        </a>
                                                                    {% endif %}
                                                                </td>
                                                                {% if decompte.devis.ptva == 'non' %}
                                                                    <td class=\"text-right bolo600\">{{ decompte.totalht|number_format(2,',',' ') }}</td>
                                                                {% else %}
                                                                    <td class=\"text-right bolo600\">{{ (decompte.totalht + ((decompte.totalht * decompte.devis.tva)/100) )|number_format(2,',',' ') }}</td>
                                                                {% endif %}

                                                                <td class=\"text-center col-pink bolo600\">{{ decompte.avancement|number_format(2,',',' ') }}
                                                                    %
                                                                </td>

                                                                {% if decompte.devis.ptva == 'non' %}
                                                                    <td class=\"text-right bolo600\">{{ decompte.apayer|number_format(2,',',' ') }}</td>
                                                                {% else %}
                                                                    <td class=\"text-right bolo600\">{{ (decompte.apayer + ((decompte.apayer * decompte.devis.tva)/100) )|number_format(2,',',' ') }}</td>
                                                                {% endif %}

                                                                <td>
                                                                    <a href=\"{{ path('chantier',{'id':decompte.chantier.id}) }}\">{{ chantier.client.nomclient }}
                                                                        |
                                                                        {{ chantier.nomchantier }}</a></td>
                                                                <td class=\"text-left col-blue bolo600\">
                                                                    <i class=\"fa fa-user col-blue bolo600\"></i>&nbsp;
                                                                    {% if decompte.dobyuser is not null %}
                                                                        {{ decompte.dobyuser.nom|upper }}&nbsp;{{ decompte.dobyuser.prenoms|upper }}
                                                                    {% endif %}
                                                                </td>
                                                            </tr>
                                                        {% endif %}
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
                    {# DECOMPTE #}

                    {# FACTURE #}
                    {% set facjour = 0 %}
                    {% for facture in factures %}
                        {% if facture.client.corbeille is null %}
                            {% if facture.corbeille is null %}
                                {% set  facjour = facjour + 1 %}
                            {% endif %}
                        {% endif %}
                    {% endfor %}
                    <div class=\"panel panel-pri shadow\" style=\"margin-top: 20px !important\">
                        <div class=\"panel-heading bg-col-blue-grey\" role=\"tab\" id=\"headingFact\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed  col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseFact\" aria-expanded=\"false\"
                                   aria-controls=\"collapseFact\" style=\"font-size: 16px!important\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>
                                    Factures du jour<span
                                            class=\"badge bg-pink\"
                                            style=\"float: right !important;\">{{ facjour }}</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseFact\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingFact\">
                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"card-body\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table-striped table-bordered display nowrap\"
                                               style=\"width: 100%\" id=\"dataFACTURE3\">
                                            <thead>
                                            <tr class=\"text-center\">
                                                <th class=\"mw30\"></th>
                                                <th class=\"mw30\"></th>
                                                <th>DATE</th>
                                                <th>N° FACTURE</th>
                                                <th>N° DEVIS</th>
                                                <th>N° DÉCOMPTE</th>
                                                <th>TOTAL HT</th>
                                                <th>TOTAL TTC</th>
                                                <th>RÉFÉRENCE</th>
                                                <th>ETAT</th>
                                                <th>CREÉ PAR</th>
                                            </tr>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {% for facture in factures %}
                                                {% if facture.corbeille == null and facture.client.corbeille == null %}
                                                    <tr>
                                                        <td class=\"text-center\">
                                                            <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                   class=\"FACTURE3\" value=\"{{ facture.id }}\"></td>

                                                        <td class=\"text-center\">
                                                            <a href=\"#\"
                                                               onclick=\"shasha({{ facture.id }},'imprimfacture');\">
                                                                <i class=\"fa fa-eye col-green\"
                                                                   aria-hidden=\"true\"></i>
                                                            </a>
                                                        </td>
                                                        <td>{{ facture.date|date('y.m.d H:m') }}</td>
                                                        <td>
                                                            {% if facture.type == \"non\" %}
                                                                <a href=\"{{ path('editfacture', {'id': facture.id, 'idchantier':facture.chantier.id}) }}\"
                                                                   class=\"bolo600\">
                                                                    <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                    <span class=\"badge badge-pill badge-danger\">FA</span>FACTURE
                                                                    N°{{ facture.numfacture }}
                                                                </a>
                                                            {% else %}
                                                                <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                <a href=\"{{ path('editfacture',{'id':facture.id, 'idchantier':facture.chantier.id}) }}\"
                                                                   class=\"bolo600\">FACTURE
                                                                    N°{{ facture.numfacture }}</a>
                                                            {% endif %}
                                                        </td>
                                                        <td>
                                                            {% if facture.type == \"simple\" %}
                                                                <a href=\"{{ path('editdevis', {'id': facture.devis.id, 'idchantier':facture.chantier.id}) }}\"
                                                                   class=\"bolo600\">
                                                                    {% if facture.devis.etat == 'valide' %}
                                                                        <span class=\"badge badge-pill badge-primary\">V</span>
                                                                    {% else %}
                                                                        <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                    {% endif %}
                                                                    DEVIS N°{{ facture.devis.iddevis }}</a>
                                                            {% endif %}
                                                            {% if facture.type == \"devis\" %}
                                                                <a href=\"{{ path('editdevis', {'id': facture.devis.id, 'idchantier':facture.chantier.id}) }}\"
                                                                   class=\"bolo600\">
                                                                    {% if facture.devis.etat == 'valide' %}
                                                                        <span class=\"badge badge-pill badge-primary\">V</span>
                                                                    {% else %}
                                                                        <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                    {% endif %}
                                                                    DEVIS N°{{ facture.devis.iddevis }}</a>
                                                            {% endif %}
                                                            {% if facture.type == \"acompte\" %}
                                                                <a href=\"{{ path('editdevis', {'id': facture.acompte.devis.id, 'idchantier':facture.chantier.id}) }}\"
                                                                   class=\"bolo600\">
                                                                    {% if facture.acompte.devis.etat == 'valide' %}
                                                                        <span class=\"badge badge-pill badge-primary\">V</span>
                                                                    {% else %}
                                                                        <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                    {% endif %}
                                                                    DEVIS N°{{ facture.acompte.devis.iddevis }}</a>
                                                            {% endif %}
                                                            {% if facture.type == \"decompte\" %}
                                                                <a href=\"{{ path('editdevis', {'id': facture.decompte.devis.id, 'idchantier':facture.chantier.id}) }}\"
                                                                   class=\"bolo600\">
                                                                    {% if facture.decompte.devis.etat == 'valide' %}
                                                                        <span class=\"badge badge-pill badge-primary\">V</span>
                                                                    {% else %}
                                                                        <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                    {% endif %}
                                                                    DEVIS N°{{ facture.decompte.devis.iddevis }}</a>
                                                            {% endif %}
                                                        </td>
                                                        <td>
                                                            {% if facture.decompte is not null %}
                                                                <a href=\"{{ path('editdecompte', {'id': facture.decompte.id, 'idchantier':facture.chantier.id}) }}\"
                                                                   class=\"bolo600\">
                                                                    {% if facture.decompte.etat == 'valide' %}
                                                                        <span class=\"badge badge-pill badge-primary\">V</span>
                                                                    {% else %}
                                                                        <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                    {% endif %}
                                                                    DÉCOMPTE N°{{ facture.decompte.numdecompte }}
                                                                </a>
                                                            {% endif %}
                                                        </td>
                                                        <td class=\"text-right bolo600\">{{ facture.totalht|number_format(2, ',', ' ') }}</td>
                                                        <td class=\"text-right bolo600\">{{ facture.totalttc|number_format(2, ',', ' ') }}</td>
                                                        <td title=\"{{ facture.factreference|striptags|raw }}\"
                                                            class=\"col-deep-orange\">{{ facture.factreference|striptags|raw }}</td>
                                                        <td>
                                                            <a href=\"{{ path('chantier',{'id':facture.chantier.id}) }}\">
                                                                {{ facture.chantier.nomchantier }}
                                                                | {{ facture.chantier.client.nomclient }}</a>


                                                        </td>
                                                        <td class=\"text-left col-blue bolo600\">
                                                            <i class=\"fa fa-user col-blue bolo600\"></i>&nbsp;
                                                            {% if facture.dobyuser is not null %}
                                                                {{ facture.dobyuser.nom|upper }}
                                                                &nbsp;{{ facture.dobyuser.prenoms|upper }}
                                                            {% endif %}
                                                        </td>

                                                    </tr>
                                                {% endif %}
                                            {% endfor %}
                                            </tbody>
                                        </table>
                                        <br></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {% set facnv = 0 %}
                    {% for chantier in chantiers %}
                        {% if (chantier.corbeille is null) %}
                            {% for facture in chantier.factures %}
                                {% if facture.etat != 'valide' and facture.corbeille is null %}
                                    {% if (facture.client.corbeille is null) %}
                                        {% set facnv = facnv + 1 %}
                                    {% endif %}
                                {% endif %}
                            {% endfor %}
                        {% endif %}
                    {% endfor %}
                    <div class=\"panel panel-pri shadow\">
                        <div class=\"panel-heading bg-col-blue-grey\" role=\"tab\" id=\"headingFac\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed  col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseFac\" aria-expanded=\"false\"
                                   aria-controls=\"collapseFac\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>
                                    Factures non validées<span
                                            class=\"badge bg-pink\"
                                            style=\"float: right !important;\">{{ facnv }}</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseFac\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingFac\">
                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"card-body\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table-striped table-bordered display nowrap\"
                                               style=\"width: 100%\" id=\"dataFACTURE4\">
                                            <thead>
                                            <tr class=\"text-center\">
                                                <th class=\"mw30\"></th>
                                                <th class=\"mw30\"></th>
                                                <th>DATE</th>
                                                <th>N° FACTURE</th>
                                                <th>N° DEVIS</th>
                                                <th>N° DÉCOMPTE</th>
                                                <th>TOTAL HT</th>
                                                <th>TOTAL TTC</th>
                                                <th>RÉFÉRENCE</th>
                                                <th>ETAT</th>
                                                <th>CREÉ PAR</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {% for chantier in chantiers %}
                                                {% if (chantier.corbeille is null) %}
                                                    {% for facture in chantier.factures %}
                                                        {% if facture.etat != 'valide' and facture.corbeille is null %}
                                                            {% if (facture.client.corbeille is null) %}
                                                                <tr>
                                                                    <td class=\"text-center\">
                                                                        <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                               class=\"FACTURE4\"
                                                                               value=\"{{ facture.id }}\">
                                                                    </td>

                                                                    <td class=\"text-center\">
                                                                        <a href=\"#\"
                                                                           onclick=\"shasha({{ facture.id }},'imprimfacture');\">
                                                                            <i class=\"fa fa-eye col-green\"
                                                                               aria-hidden=\"true\"></i>
                                                                        </a>
                                                                    </td>
                                                                    <td>{{ facture.date|date('y.m.d H:m') }}</td>
                                                                    <td>
                                                                        {% if facture.type == \"non\" %}
                                                                            <a href=\"{{ path('editfacture', {'id': facture.id, 'idchantier':facture.chantier.id}) }}\"
                                                                               class=\"bolo600\">
                                                                                <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                                <span class=\"badge badge-pill badge-danger\">FA</span>FACTURE
                                                                                N°{{ facture.numfacture }}
                                                                            </a>
                                                                        {% else %}
                                                                            <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                            <a href=\"{{ path('editfacture',{'id':facture.id, 'idchantier':facture.chantier.id}) }}\"
                                                                               class=\"bolo600\">FACTURE
                                                                                N° {{ facture.numfacture }}</a>
                                                                        {% endif %}
                                                                    </td>
                                                                    <td>
                                                                        {% if facture.type == \"simple\" %}
                                                                            <a href=\"{{ path('editdevis', {'id': facture.devis.id, 'idchantier':facture.chantier.id}) }}\"
                                                                               class=\"bolo600\">
                                                                                {% if facture.devis.etat == 'valide' %}
                                                                                    <span class=\"badge badge-pill badge-primary\">V</span>
                                                                                {% else %}
                                                                                    <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                                {% endif %}
                                                                                DEVIS N°{{ facture.devis.iddevis }}</a>
                                                                        {% endif %}
                                                                        {% if facture.type == \"devis\" %}
                                                                            <a href=\"{{ path('editdevis', {'id': facture.devis.id, 'idchantier':facture.chantier.id}) }}\"
                                                                               class=\"bolo600\">
                                                                                {% if facture.devis.etat == 'valide' %}
                                                                                    <span class=\"badge badge-pill badge-primary\">V</span>
                                                                                {% else %}
                                                                                    <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                                {% endif %}
                                                                                DEVIS N°{{ facture.devis.iddevis }}</a>
                                                                        {% endif %}
                                                                        {% if facture.type == \"acompte\" %}
                                                                            <a href=\"{{ path('editdevis', {'id': facture.acompte.devis.id, 'idchantier':facture.chantier.id}) }}\"
                                                                               class=\"bolo600\">
                                                                                {% if facture.acompte.devis.etat == 'valide' %}
                                                                                    <span class=\"badge badge-pill badge-primary\">V</span>
                                                                                {% else %}
                                                                                    <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                                {% endif %}
                                                                                DEVIS
                                                                                N°{{ facture.acompte.devis.iddevis }}
                                                                            </a>
                                                                        {% endif %}
                                                                        {% if facture.type == \"decompte\" %}
                                                                            <a href=\"{{ path('editdevis', {'id': facture.decompte.devis.id, 'idchantier':facture.chantier.id}) }}\"
                                                                               class=\"bolo600\">
                                                                                {% if facture.decompte.devis.etat == 'valide' %}
                                                                                    <span class=\"badge badge-pill badge-primary\">V</span>
                                                                                {% else %}
                                                                                    <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                                {% endif %}
                                                                                DEVIS
                                                                                N°{{ facture.decompte.devis.iddevis }}
                                                                            </a>
                                                                        {% endif %}
                                                                    </td>
                                                                    <td>
                                                                        {% if facture.decompte is not null %}
                                                                            <a href=\"{{ path('editdecompte', {'id': facture.decompte.id, 'idchantier':facture.chantier.id}) }}\"
                                                                               class=\"bolo600\">
                                                                                {% if facture.decompte.etat == 'valide' %}
                                                                                    <span class=\"badge badge-pill badge-primary\">V</span>
                                                                                {% else %}
                                                                                    <span class=\"badge badge-pill badge-blue-grey\">V</span>
                                                                                {% endif %}
                                                                                DÉCOMPTE
                                                                                N° {{ facture.decompte.numdecompte }}
                                                                            </a>
                                                                        {% endif %}
                                                                    </td>
                                                                    <td class=\"text-right bolo600\">
                                                                        {% if facture.devis is not null %}
                                                                            {{ facture.totalht|number_format(2, ',', ' ') }}
                                                                        {% endif %}

                                                                        {% if facture.decompte is not null %}
                                                                            {{ facture.totalht|number_format(2, ',', ' ') }}
                                                                        {% endif %}
                                                                    </td>
                                                                    <td class=\"text-right bolo600\">
                                                                        {% if facture.devis is not null %}
                                                                            {{ facture.totalttc|number_format(2, ',', ' ') }}
                                                                        {% endif %}
                                                                        {% if facture.decompte is not null %}
                                                                            {{ facture.totalttc|number_format(2, ',', ' ') }}
                                                                        {% endif %}
                                                                    </td>
                                                                    <td title=\"{{ facture.factreference|striptags|raw }}\"
                                                                        class=\"col-deep-orange\">{{ facture.factreference|striptags|raw }}</td>
                                                                    <td>
                                                                        <a href=\"{{ path('chantier',{'id':facture.chantier.id}) }}\">{{ chantier.nomchantier }}
                                                                            | {{ chantier.client.nomclient }}</a>
                                                                    </td>
                                                                    <td class=\"text-left col-blue bolo600\">
                                                                        <i class=\"fa fa-user col-blue bolo600\"></i>&nbsp;
                                                                        {% if facture.dobyuser is not null %}
                                                                            {{ facture.dobyuser.nom|upper }}
                                                                            &nbsp;{{ facture.dobyuser.prenoms|upper }}
                                                                        {% endif %}
                                                                    </td>
                                                                </tr>
                                                            {% endif %}
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
                    {# FIN FACTURE #}


                </div>
            </div>
        </div>
    </section>
    <script>
        localStorage.setItem('reloadd', 'chantiers/');
    </script>

{% endblock %}
", "content/chantiers.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\chantiers.html.twig");
    }
}
