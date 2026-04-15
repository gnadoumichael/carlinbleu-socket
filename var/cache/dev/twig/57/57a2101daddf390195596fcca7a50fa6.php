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

/* content/technique.html.twig */
class __TwigTemplate_b105a6d2ec60623f01a75f1b9dd5c912 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/technique.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/technique.html.twig"));

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
    <input type=\"text\" class=\"hide\" id=\"pager\" value=\"technique\"/>
    <input type=\"text\" class=\"hide\" id=\"idclient\" value=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6), "html", null, true);
        yield "\"/>
    <input type=\"text\" class=\"hide\" id=\"idchantier\" value=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "html", null, true);
        yield "\"/>
    <input type=\"text\" class=\"hide\" id=\"pager\" value=\"techniques\"/>

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
        // line 28
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 28, $this->source); })()), 'form_start', ["attr" => ["id" => "addClientForm"]]);
        yield "
                        ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 29, $this->source); })()), "_token", [], "any", false, false, false, 29), 'row');
        yield "
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label pri bolo\">CLIENT<span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 36, $this->source); })()), "nomclient", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control cls"]]);
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
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 46, $this->source); })()), "adresse", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control cls"]]);
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
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 56, $this->source); })()), "contact", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control cls"]]);
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
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 66, $this->source); })()), "contribuable", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-control cls"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"text-center hide\" id=\"divClienter\">
                            <input type=\"submit\" id=\"updateClient\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect col-white bg-green\"/>
                            <div type=\"button\" id=\"closeCliente\" class=\"btn btn-link waves-effect col-white bg-pink\">
                                ANNULER
                            </div>
                        </div>


                        <div class=\"text-center\" id=\"divClient\">
                            <input type=\"submit\" id=\"addTechClient\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect col-white bg-pri\">
                            <div type=\"button\" id=\"closeClient\" class=\"btn btn-link waves-effect col-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
                        </div>

                        <div class=\"text-center\">
                            <img src=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadClient\"/>
                        </div>
                    </div>
                    ";
        // line 95
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 95, $this->source); })()), 'form_end');
        yield "
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
        // line 117
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 117, $this->source); })()), 'form_start', ["attr" => ["id" => "addChantierForm"]]);
        yield "
                    <input type=\"hidden\" name=\"token\" value=\"";
        // line 118
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
        // line 137
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 137, $this->source); })()), "nomchantier", [], "any", false, false, false, 137), 'widget', ["attr" => ["class" => "form-control chr"]]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row clearfix m-b-10\">
                        <div class=\"col-sm-12\">
                            <label class=\"form-label pri bolo\">RÉFÉRENCE CONTRAT
                            </label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    ";
        // line 148
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 148, $this->source); })()), "contrat", [], "any", false, false, false, 148), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
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
        // line 158
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 158, $this->source); })()), "localisation", [], "any", false, false, false, 158), 'widget', ["attr" => ["class" => "form-control chr"]]);
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
        // line 168
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 168, $this->source); })()), "sous", [], "any", false, false, false, 168), 'widget', ["required" => "", "attr" => ["class" => "form-control chr"]]);
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
        // line 178
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 178, $this->source); })()), "description", [], "any", false, false, false, 178), 'widget', ["required" => "", "id" => "description", "attr" => ["class" => "form-control chr"]]);
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
                        <input type=\"submit\" id=\"updateChan\" value=\"MODIFIER\"
                               class=\"btn btn-link waves-effect col-white bg-green\">
                        <div type=\"button\" id=\"closeChantiere\" class=\"btn btn-link waves-effect col-white bg-pink\"
                             data-dismiss=\"modal\">
                            ANNULER
                        </div>
                    </div>

                    <div class=\"text-center\" id=\"divChantier\">
                        <input type=\"submit\" id=\"adduChantier\" value=\"ENREGISTRER\"
                               class=\"btn btn-link waves-effect col-white bg-pri\">
                        <div type=\"button\" id=\"closeChantier\" class=\"btn btn-link waves-effect col-white bg-pink\"
                             data-dismiss=\"modal\">
                            FERMER
                        </div>
                    </div>


                    <div class=\"text-center\">
                        <img src=\"";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                             class=\"align-justify\" id=\"loadChantier\"></div>
                    ";
        // line 237
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formChantier"]) || array_key_exists("formChantier", $context) ? $context["formChantier"] : (function () { throw new RuntimeError('Variable "formChantier" does not exist.', 237, $this->source); })()), 'form_end');
        yield "

                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalPersonnel\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                ";
        // line 247
        if ((($tmp = (isset($context["editPer"]) || array_key_exists("editPer", $context) ? $context["editPer"] : (function () { throw new RuntimeError('Variable "editPer" does not exist.', 247, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 248
            yield "                    <div class=\"modal-header bg-green text-white p-l-20\">
                        <h4 class=\"modal-title\" id=\"defaultModalLabel\">MODIFIER UN PERSONNEL</h4>
                    </div>
                ";
        } else {
            // line 252
            yield "                    <div class=\"modal-header bg-pri text-white p-l-20\">
                        <h4 class=\"modal-title\" id=\"defaultModalLabel\">AJOUTER UN PERSONNEL</h4>
                    </div>
                ";
        }
        // line 256
        yield "                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
        // line 258
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 258, $this->source); })()), 'form_start', ["attr" => ["id" => "addPersonnelForm"]]);
        yield "
                        ";
        // line 259
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 259, $this->source); })()), "_token", [], "any", false, false, false, 259), 'row');
        yield "
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">NOM & PRÉNOMS<span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        ";
        // line 266
        if ((($tmp = (isset($context["editPer"]) || array_key_exists("editPer", $context) ? $context["editPer"] : (function () { throw new RuntimeError('Variable "editPer" does not exist.', 266, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 267
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 267, $this->source); })()), "noms", [], "any", false, false, false, 267), 'widget', ["attr" => ["class" => "form-control col-pink "]]);
            yield "
                                        ";
        } else {
            // line 269
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 269, $this->source); })()), "noms", [], "any", false, false, false, 269), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                        ";
        }
        // line 271
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
        // line 280
        if ((($tmp = (isset($context["editPer"]) || array_key_exists("editPer", $context) ? $context["editPer"] : (function () { throw new RuntimeError('Variable "editPer" does not exist.', 280, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 281
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPeronnel"]) || array_key_exists("formPeronnel", $context) ? $context["formPeronnel"] : (function () { throw new RuntimeError('Variable "formPeronnel" does not exist.', 281, $this->source); })()), "service", [], "any", false, false, false, 281), 'widget', ["attr" => ["class" => "form-control col-pink "]]);
            yield "
                                        ";
        } else {
            // line 283
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 283, $this->source); })()), "service", [], "any", false, false, false, 283), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                        ";
        }
        // line 285
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
        // line 294
        if ((($tmp = (isset($context["editPer"]) || array_key_exists("editPer", $context) ? $context["editPer"] : (function () { throw new RuntimeError('Variable "editPer" does not exist.', 294, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 295
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 295, $this->source); })()), "fonction", [], "any", false, false, false, 295), 'widget', ["attr" => ["class" => "form-control col-pink "]]);
            yield "
                                        ";
        } else {
            // line 297
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 297, $this->source); })()), "fonction", [], "any", false, false, false, 297), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                        ";
        }
        // line 299
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
        // line 308
        if ((($tmp = (isset($context["editPer"]) || array_key_exists("editPer", $context) ? $context["editPer"] : (function () { throw new RuntimeError('Variable "editPer" does not exist.', 308, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 309
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 309, $this->source); })()), "contrat", [], "any", false, false, false, 309), 'widget', ["attr" => ["class" => "form-control col-pink "]]);
            yield "
                                        ";
        } else {
            // line 311
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 311, $this->source); })()), "contrat", [], "any", false, false, false, 311), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                        ";
        }
        // line 313
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
        // line 322
        if ((($tmp = (isset($context["editPer"]) || array_key_exists("editPer", $context) ? $context["editPer"] : (function () { throw new RuntimeError('Variable "editPer" does not exist.', 322, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 323
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 323, $this->source); })()), "mail", [], "any", false, false, false, 323), 'widget', ["attr" => ["class" => "form-control col-pink "]]);
            yield "
                                        ";
        } else {
            // line 325
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 325, $this->source); })()), "mail", [], "any", false, false, false, 325), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                        ";
        }
        // line 327
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
        // line 336
        if ((($tmp = (isset($context["editPer"]) || array_key_exists("editPer", $context) ? $context["editPer"] : (function () { throw new RuntimeError('Variable "editPer" does not exist.', 336, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 337
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 337, $this->source); })()), "contact", [], "any", false, false, false, 337), 'widget', ["attr" => ["class" => "form-control col-pink "]]);
            yield "
                                        ";
        } else {
            // line 339
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 339, $this->source); })()), "contact", [], "any", false, false, false, 339), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                        ";
        }
        // line 341
        yield "                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <div class=\"text-center\">
                            ";
        // line 347
        if ((($tmp = (isset($context["editPer"]) || array_key_exists("editPer", $context) ? $context["editPer"] : (function () { throw new RuntimeError('Variable "editPer" does not exist.', 347, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 348
            yield "                                <input type=\"text\" class=\"hide\" id=\"idperson\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 348, $this->source); })()), "id", [], "any", false, false, false, 348), "html", null, true);
            yield "\"/>
                                <input type=\"submit\" id=\"updatePers\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect text-white bg-green\">
                            ";
        } else {
            // line 352
            yield "                                <input type=\"submit\" id=\"addPers\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-blue\">
                            ";
        }
        // line 355
        yield "
                            <div type=\"button\" id=\"closePers\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"";
        // line 360
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadPers\"></div>
                        <br>
                        <br>
                        <br>
                        ";
        // line 365
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPersonnel"]) || array_key_exists("formPersonnel", $context) ? $context["formPersonnel"] : (function () { throw new RuntimeError('Variable "formPersonnel" does not exist.', 365, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalSuperviseur\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" 8
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-pri text-white p-l-20\">
                    <h4 class=\"modal-title\" id=\"defaultModalLabel\">CHANTIER / SUPERVISEURS</h4>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        <form id=\"addSuperviseurForm\">
                            <input type=\"hidden\" name=\"token\" value=\"";
        // line 381
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addSuperviseurToken"), "html", null, true);
        yield "\"/>
                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label m-b--30 col-blue bolo\">CHANTIERS</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            <select class=\"js-example-basic-multiple\" name=\"chantiers[]\"
                                                    multiple=\"multiple\" style=\"width: 100%\" required>
                                                ";
        // line 389
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 389, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 390
            yield "                                                    ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 390))) {
                // line 391
                yield "                                                        ";
                $context["check"] = 0;
                // line 392
                yield "                                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 392));
                foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                    // line 393
                    yield "                                                            ";
                    if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 393)) && (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "archiver", [], "any", false, false, false, 393) != "oui"))) {
                        // line 394
                        yield "                                                                ";
                        $context["check"] = ((isset($context["check"]) || array_key_exists("check", $context) ? $context["check"] : (function () { throw new RuntimeError('Variable "check" does not exist.', 394, $this->source); })()) + 1);
                        // line 395
                        yield "                                                            ";
                    }
                    // line 396
                    yield "                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 397
                yield "                                                        ";
                if (((isset($context["check"]) || array_key_exists("check", $context) ? $context["check"] : (function () { throw new RuntimeError('Variable "check" does not exist.', 397, $this->source); })()) > 0)) {
                    // line 398
                    yield "                                                            <optgroup label=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 398)), "html", null, true);
                    yield "\">
                                                                ";
                    // line 399
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 399));
                    foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                        // line 400
                        yield "                                                                    ";
                        if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 400)) && (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "archiver", [], "any", false, false, false, 400) != "oui"))) {
                            // line 401
                            yield "                                                                        <option class=\"col-blue\"
                                                                                value=\"";
                            // line 402
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 402), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 402)), "html", null, true);
                            yield "</option>
                                                                    ";
                        }
                        // line 404
                        yield "                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 405
                    yield "                                                            </optgroup>

                                                        ";
                }
                // line 408
                yield "                                                    ";
            }
            // line 409
            yield "                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 410
        yield "                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label m-b--30 col-blue bolo\">SUPERVISEURS</label>
                                    <div class=\"form-group\">
                                        <select class=\"js-example-basic-multiple\" name=\"superviseurs[]\"
                                                multiple=\"multiple\" style=\"width: 100%\" required>
                                            ";
        // line 421
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["personnels"]) || array_key_exists("personnels", $context) ? $context["personnels"] : (function () { throw new RuntimeError('Variable "personnels" does not exist.', 421, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["personnel"]) {
            // line 422
            yield "                                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "id", [], "any", false, false, false, 422), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["personnel"], "noms", [], "any", false, false, false, 422)), "html", null, true);
            yield "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['personnel'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 424
        yield "                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class=\"text-center\">
                                <input type=\"submit\" id=\"addSuper\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-blue\">
                                <div type=\"button\" id=\"closeSuper\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                     data-dismiss=\"modal\">FERMER
                                </div>
                                <img src=\"";
        // line 434
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                     class=\"align-justify\" id=\"loadSuper\"></div>
                            <br>
                            <br>
                            <br>
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
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">LIER DES FICHIERS À UN CHANTIERS</h3>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
        // line 454
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUpload"]) || array_key_exists("formUpload", $context) ? $context["formUpload"] : (function () { throw new RuntimeError('Variable "formUpload" does not exist.', 454, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data", "attr" => ["id" => "addFileForm"]]);
        yield "
                        ";
        // line 455
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUpload"]) || array_key_exists("formUpload", $context) ? $context["formUpload"] : (function () { throw new RuntimeError('Variable "formUpload" does not exist.', 455, $this->source); })()), "_token", [], "any", false, false, false, 455), 'row');
        yield "
                        <input type=\"hidden\" name=\"token\" value=\"";
        // line 456
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addFileChantier"), "html", null, true);
        yield "\"/>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">IMPORTER DES FICHIERS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        ";
        // line 462
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUpload"]) || array_key_exists("formUpload", $context) ? $context["formUpload"] : (function () { throw new RuntimeError('Variable "formUpload" does not exist.', 462, $this->source); })()), "nomfichier", [], "any", false, false, false, 462), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 472
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUpload"]) || array_key_exists("formUpload", $context) ? $context["formUpload"] : (function () { throw new RuntimeError('Variable "formUpload" does not exist.', 472, $this->source); })()), "chantier", [], "any", false, false, false, 472), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 484
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadFileChantier\">
                        </div>
                        ";
        // line 487
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUpload"]) || array_key_exists("formUpload", $context) ? $context["formUpload"] : (function () { throw new RuntimeError('Variable "formUpload" does not exist.', 487, $this->source); })()), 'form_end');
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
        // line 502
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUploada"]) || array_key_exists("formUploada", $context) ? $context["formUploada"] : (function () { throw new RuntimeError('Variable "formUploada" does not exist.', 502, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data", "attr" => ["id" => "addFileTechniqueForm"]]);
        yield "
                        ";
        // line 503
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUploada"]) || array_key_exists("formUploada", $context) ? $context["formUploada"] : (function () { throw new RuntimeError('Variable "formUploada" does not exist.', 503, $this->source); })()), "_token", [], "any", false, false, false, 503), 'row');
        yield "
                        <input type=\"hidden\" name=\"token\" value=\"";
        // line 504
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addFileTech"), "html", null, true);
        yield "\"/>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">IMPORTER DES FICHIERS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        ";
        // line 510
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUploada"]) || array_key_exists("formUploada", $context) ? $context["formUploada"] : (function () { throw new RuntimeError('Variable "formUploada" does not exist.', 510, $this->source); })()), "nomfichier", [], "any", false, false, false, 510), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 520
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUploada"]) || array_key_exists("formUploada", $context) ? $context["formUploada"] : (function () { throw new RuntimeError('Variable "formUploada" does not exist.', 520, $this->source); })()), "categorie", [], "any", false, false, false, 520), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 532
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadFileTechnique\">
                        </div>
                        ";
        // line 535
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUploada"]) || array_key_exists("formUploada", $context) ? $context["formUploada"] : (function () { throw new RuntimeError('Variable "formUploada" does not exist.', 535, $this->source); })()), 'form_end');
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
        // line 550
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUploado"]) || array_key_exists("formUploado", $context) ? $context["formUploado"] : (function () { throw new RuntimeError('Variable "formUploado" does not exist.', 550, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data", "attr" => ["id" => "addFileDescForm"]]);
        yield "
                        ";
        // line 551
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUploado"]) || array_key_exists("formUploado", $context) ? $context["formUploado"] : (function () { throw new RuntimeError('Variable "formUploado" does not exist.', 551, $this->source); })()), "_token", [], "any", false, false, false, 551), 'row');
        yield "
                        <input type=\"hidden\" name=\"token\" value=\"";
        // line 552
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addFileDesc"), "html", null, true);
        yield "\"/>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">IMPORTER DES FICIERS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        ";
        // line 558
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUploado"]) || array_key_exists("formUploado", $context) ? $context["formUploado"] : (function () { throw new RuntimeError('Variable "formUploado" does not exist.', 558, $this->source); })()), "nomfichier", [], "any", false, false, false, 558), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 568
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUploado"]) || array_key_exists("formUploado", $context) ? $context["formUploado"] : (function () { throw new RuntimeError('Variable "formUploado" does not exist.', 568, $this->source); })()), "categorie", [], "any", false, false, false, 568), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 580
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadFileDesc\">
                        </div>
                        ";
        // line 583
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUploada"]) || array_key_exists("formUploada", $context) ? $context["formUploada"] : (function () { throw new RuntimeError('Variable "formUploada" does not exist.', 583, $this->source); })()), 'form_end');
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
        // line 609
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 609, $this->source); })()), 'form_start', ["attr" => ["id" => "addContactForm"]]);
        yield "
                        <input type=\"hidden\" name=\"token\" value=\"";
        // line 610
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
        // line 629
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 629, $this->source); })()), "contact", [], "any", false, false, false, 629), 'widget', ["attr" => ["class" => "form-control chors"]]);
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
        // line 639
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 639, $this->source); })()), "fonction", [], "any", false, false, false, 639), 'widget', ["attr" => ["class" => "form-control cohr"]]);
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
        // line 649
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 649, $this->source); })()), "mail", [], "any", false, false, false, 649), 'widget', ["attr" => ["class" => "form-control cohr"]]);
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
        // line 659
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 659, $this->source); })()), "phone", [], "any", false, false, false, 659), 'widget', ["attr" => ["class" => "form-control cohr"]]);
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
        // line 669
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 669, $this->source); })()), "bureau", [], "any", false, false, false, 669), 'widget', ["attr" => ["class" => "form-control cohr"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <div class=\"text-center hide\" id=\"divContacte\">
                                <input type=\"text\" class=\"hide\" id=\"idcontact\" value=\"";
        // line 676
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 676, $this->source); })()), "id", [], "any", false, false, false, 676), "html", null, true);
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
        // line 695
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadContact\">

                        </div>
                        ";
        // line 699
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 699, $this->source); })()), 'form_end');
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

    <section class=\"content\" style=\"margin-top: 20px !important;\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row clearfix m-t-50\">
                    <div class=\"col-sm-12 \">
                        <h4 class=\"bolo700 col-deep-orange\">GESTION TECHNIQUE</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"content\">
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
                        </div>
                    </div>
                </div>
                <div class=\"panel-group\" id=\"accordion_1\" role=\"tablist\" aria-multiselectable=\"true\">

                    ";
        // line 756
        $context["countClient"] = 0;
        // line 757
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 757, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 758
            yield "                        ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 758))) {
                // line 759
                yield "                            ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 759))) {
                    // line 760
                    yield "                                ";
                    $context["countClient"] = ((isset($context["countClient"]) || array_key_exists("countClient", $context) ? $context["countClient"] : (function () { throw new RuntimeError('Variable "countClient" does not exist.', 760, $this->source); })()) + 1);
                    // line 761
                    yield "                            ";
                }
                // line 762
                yield "                        ";
            }
            // line 763
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 764
        yield "                    <div class=\"panel panel-pri shadow\" style=\"border-left: 2px solid #A9A9A9\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingOne_1\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed col-white outai\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_0\" href=\"#collapseOne_0\" aria-expanded=\"false\"
                                   aria-controls=\"collapseOne_0\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Clients<span
                                            class=\"badge bg-pink\"
                                            style=\"float: right !important;\">";
        // line 772
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["countClient"]) || array_key_exists("countClient", $context) ? $context["countClient"] : (function () { throw new RuntimeError('Variable "countClient" does not exist.', 772, $this->source); })()), "html", null, true);
        yield "</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseOne_0\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingOne_0\">
                            <div class=\"panel-body\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow:scroll\">
                                    <table class=\"table-bordered  display nowrape\" style=\"width: 100%\" id=\"dataClientsTech\">
                                        <thead>
                                        <tr>
                                            <th>CLIENTS</th>
                                            <th>CODE CLIENT</th>
                                            <th class=\"text-center\">ADRESSE</th>
                                            <th class=\"text-center\">CONTACTS</th>
                                            <th class=\"text-center\">COMPTE&nbsp;C.</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 791
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 791, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 792
            yield "                                            ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 792))) {
                // line 793
                yield "                                                ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 793))) {
                    // line 794
                    yield "                                                    <tr>
                                                        <td class=\"bolo700 col-blue\">";
                    // line 795
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 795)), "html", null, true);
                    yield "</td>
                                                        <td class=\"text-left\">";
                    // line 796
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "code", [], "any", false, false, false, 796), "html", null, true);
                    yield "</td>
                                                        <td class=\"text-left\">";
                    // line 797
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "adresse", [], "any", false, false, false, 797), "html", null, true);
                    yield "</td>
                                                        <td class=\"text-left\">";
                    // line 798
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "contact", [], "any", false, false, false, 798), "html", null, true);
                    yield "</td>
                                                        <td class=\"text-left\">";
                    // line 799
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "contribuable", [], "any", false, false, false, 799), "html", null, true);
                    yield "</td>
                                                    </tr>
                                                ";
                }
                // line 802
                yield "                                            ";
            }
            // line 803
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 804
        yield "                                        </tbody>
                                    </table>
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>


                    ";
        // line 813
        $context["countEtude"] = 0;
        // line 814
        yield "                    ";
        $context["countEchouer"] = 0;
        // line 815
        yield "                    ";
        $context["countEncours"] = 0;
        // line 816
        yield "                    ";
        $context["countSous"] = 0;
        // line 817
        yield "                    ";
        $context["countTerminer"] = 0;
        // line 818
        yield "                    ";
        $context["countCloturer"] = 0;
        // line 819
        yield "                    ";
        $context["countTout"] = 0;
        // line 820
        yield "
                    ";
        // line 821
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 821, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 822
            yield "                        ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 822))) {
                // line 823
                yield "                            ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 823))) {
                    // line 824
                    yield "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 824));
                    foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                        // line 825
                        yield "                                    ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 825) == "etude") && (null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 825)))) {
                            // line 826
                            yield "                                        ";
                            $context["countEtude"] = ((isset($context["countEtude"]) || array_key_exists("countEtude", $context) ? $context["countEtude"] : (function () { throw new RuntimeError('Variable "countEtude" does not exist.', 826, $this->source); })()) + 1);
                            // line 827
                            yield "                                    ";
                        }
                        // line 828
                        yield "                                    ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 828) == "encours") && (null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 828)))) {
                            // line 829
                            yield "                                        ";
                            $context["countEncours"] = ((isset($context["countEncours"]) || array_key_exists("countEncours", $context) ? $context["countEncours"] : (function () { throw new RuntimeError('Variable "countEncours" does not exist.', 829, $this->source); })()) + 1);
                            // line 830
                            yield "                                    ";
                        }
                        // line 831
                        yield "                                    ";
                        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "sous", [], "any", false, false, false, 831))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 832
                            yield "                                        ";
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 832) == "encours") && (null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 832)))) {
                                // line 833
                                yield "                                            ";
                                $context["countSous"] = ((isset($context["countSous"]) || array_key_exists("countSous", $context) ? $context["countSous"] : (function () { throw new RuntimeError('Variable "countSous" does not exist.', 833, $this->source); })()) + 1);
                                // line 834
                                yield "                                        ";
                            }
                            // line 835
                            yield "                                    ";
                        }
                        // line 836
                        yield "                                    ";
                        if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 836))) {
                            // line 837
                            yield "                                        ";
                            $context["countTout"] = ((isset($context["countTout"]) || array_key_exists("countTout", $context) ? $context["countTout"] : (function () { throw new RuntimeError('Variable "countTout" does not exist.', 837, $this->source); })()) + 1);
                            // line 838
                            yield "                                    ";
                        }
                        // line 839
                        yield "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 840
                    yield "                            ";
                }
                // line 841
                yield "                        ";
            }
            // line 842
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 843
        yield "                    <div class=\"panel panel-pri shadow\" style=\"border-left: 2px solid #6636f6; margin-top: 20px !important\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingEtu_1\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed col-white outai\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordionEtu_1\" href=\"#collapseEtu_1\" aria-expanded=\"false\"
                                   aria-controls=\"collapseEtu_1\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Chantiers en étude<span
                                            class=\"badge bg-pink\"
                                            style=\"float: right !important;\">";
        // line 851
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["countEtude"]) || array_key_exists("countEtude", $context) ? $context["countEtude"] : (function () { throw new RuntimeError('Variable "countEtude" does not exist.', 851, $this->source); })()), "html", null, true);
        yield "</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseEtu_1\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingEtu_1\">
                            <div class=\"panel-body\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow: scroll\">
                                    <table class=\"table-bordered shadow display nowrape\" id=\"listeChantiers\"
                                           style=\"width:100%\">
                                        <thead>
                                        <tr class=\"text-gray-600 text-center\">
                                            <th class=\"col-blue-grey\">CHANTIERS / CLIENT</th>
                                            <th>CLIENT</th>
                                            <th class=\"text-center\">DÉBUT</th>
                                            <th class=\"text-center\">FIN</th>
                                            <th>SUPERVISEURS</th>
                                            <th class=\"text-center\">PROGRESSION</th>
                                            <th class=\"text-center\"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 873
        $context["check"] = 0;
        // line 874
        yield "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 874, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 875
            yield "                                            ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 875))) {
                // line 876
                yield "                                                ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 876))) {
                    // line 877
                    yield "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 877));
                    foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                        // line 878
                        yield "                                                        ";
                        if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 878)) && (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 878) == "etude"))) {
                            // line 879
                            yield "                                                            <tr>
                                                                <td style=\"padding-left: 20px !important;\">
                                                                    <a href=\"";
                            // line 881
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 881)]), "html", null, true);
                            yield "\"
                                                                       title=\"";
                            // line 882
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "client", [], "any", false, false, false, 882), "nomclient", [], "any", false, false, false, 882)), "html", null, true);
                            yield "|";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 882)), "html", null, true);
                            yield "\">
                                                                        ";
                            // line 883
                            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "sous", [], "any", false, false, false, 883))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 884
                                yield "                                                                            <span class=\"badge bg-orange\">SP</span>
                                                                        ";
                            }
                            // line 886
                            yield "                                                                        <span class=\"col-blue font-bold\"> ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 886)), "html", null, true);
                            yield "
                                                                    </a>
                                                                </td>
                                                                <td class=\"font-bold\">";
                            // line 889
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 889)), "html", null, true);
                            yield "</td>
                                                                <td class=\"text-center\">";
                            // line 890
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "ddebut", [], "any", false, false, false, 890), "d/m/Y"), "html", null, true);
                            yield "</td>
                                                                <td class=\"text-center\">";
                            // line 891
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "dfin", [], "any", false, false, false, 891), "d/m/Y"), "html", null, true);
                            yield "</td>
                                                                <td>
                                                                    ";
                            // line 893
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "superviseurs", [], "any", false, false, false, 893));
                            foreach ($context['_seq'] as $context["_key"] => $context["superviseur"]) {
                                // line 894
                                yield "                                                                        <span class=\"pri m-l-5\"><a
                                                                                    href=\"";
                                // line 895
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("upSuperviseur", ["idchantier" => CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 895), "idsup" => CoreExtension::getAttribute($this->env, $this->source, $context["superviseur"], "id", [], "any", false, false, false, 895)]), "html", null, true);
                                yield "\"
                                                                                    title=\"Supprimer\"
                                                                                    class=\"sholigne\"><i
                                                                                        class=\"material-icons col-pink\"
                                                                                        style=\"font-size: 18px;float: left\">highlight_off</i></a>";
                                // line 899
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["superviseur"], "noms", [], "any", false, false, false, 899), "html", null, true);
                                yield "</span>
                                                                        <br>
                                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['superviseur'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 902
                            yield "                                                                </td>
                                                                <td>
                                                                    <div class=\"progress\">
                                                                        <div class=\"progress-bar bg-green\"
                                                                             role=\"progressbar\"
                                                                             aria-valuenow=\" ";
                            // line 907
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "progression", [], "any", false, false, false, 907), 0, ",", " "), "html", null, true);
                            yield "\"
                                                                             aria-valuemin=\"0\" aria-valuemax=\"100\"
                                                                             style=\"width: ";
                            // line 909
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "progression", [], "any", false, false, false, 909), 0, ",", " "), "html", null, true);
                            yield "%\"></div>
                                                                    </div>
                                                                </td>

                                                                <td class=\"text-center\">";
                            // line 913
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "progression", [], "any", false, false, false, 913), 0, ",", " "), "html", null, true);
                            yield "
                                                                    %
                                                                </td>
                                                            </tr>
                                                        ";
                        }
                        // line 918
                        yield "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 919
                    yield "                                                ";
                }
                // line 920
                yield "                                            ";
            }
            // line 921
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 922
        yield "                                        </tbody>
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
        // line 944
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["countEchouer"]) || array_key_exists("countEchouer", $context) ? $context["countEchouer"] : (function () { throw new RuntimeError('Variable "countEchouer" does not exist.', 944, $this->source); })()), "html", null, true);
        yield "</span>
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapseEcho_1\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingEcho_1\">
                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px;\">
                                    <table class=\"table-striped table-bordered display nowrape\" id=\"listeChantiersEchouer\" style=\"width: 100%\">
                                        <thead>
                                        <tr class=\"text-gray-600 text-center\">
                                            <th class=\"col-blue-grey\">CHANTIERS / CLIENT</th>
                                            <th>CLIENT</th>
                                            <th class=\"text-center\">DÉBUT</th>
                                            <th class=\"text-center\">FIN</th>
                                            <th>SUPERVISEURS</th>
                                            <th class=\"text-center\">PROGRESSION</th>
                                            <th class=\"text-center\"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 965
        $context["check"] = 0;
        // line 966
        yield "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 966, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 967
            yield "                                            ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 967))) {
                // line 968
                yield "                                                ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 968))) {
                    // line 969
                    yield "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 969));
                    foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                        // line 970
                        yield "                                                        ";
                        if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 970)) && (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 970) == "echouer"))) {
                            // line 971
                            yield "                                                            <tr>
                                                                <td style=\"padding-left: 20px !important;\">
                                                                    <a href=\"";
                            // line 973
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 973)]), "html", null, true);
                            yield "\"
                                                                       title=\"";
                            // line 974
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "client", [], "any", false, false, false, 974), "nomclient", [], "any", false, false, false, 974)), "html", null, true);
                            yield "|";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 974)), "html", null, true);
                            yield "\">
                                                                        ";
                            // line 975
                            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "sous", [], "any", false, false, false, 975))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 976
                                yield "                                                                            <span class=\"badge bg-orange\">SP</span>
                                                                        ";
                            }
                            // line 978
                            yield "                                                                        <span class=\"col-blue font-bold\"> ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 978)), "html", null, true);
                            yield "
                                                                    </a>
                                                                </td>
                                                                <td class=\"font-bold\">";
                            // line 981
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 981)), "html", null, true);
                            yield "</td>
                                                                <td class=\"text-center\">";
                            // line 982
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "ddebut", [], "any", false, false, false, 982), "d/m/Y"), "html", null, true);
                            yield "</td>
                                                                <td class=\"text-center\">";
                            // line 983
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "dfin", [], "any", false, false, false, 983), "d/m/Y"), "html", null, true);
                            yield "</td>
                                                                <td>
                                                                    ";
                            // line 985
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "superviseurs", [], "any", false, false, false, 985));
                            foreach ($context['_seq'] as $context["_key"] => $context["superviseur"]) {
                                // line 986
                                yield "                                                                        <span class=\"pri m-l-5\"><a
                                                                                    href=\"";
                                // line 987
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("upSuperviseur", ["idchantier" => CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 987), "idsup" => CoreExtension::getAttribute($this->env, $this->source, $context["superviseur"], "id", [], "any", false, false, false, 987)]), "html", null, true);
                                yield "\"
                                                                                    title=\"Supprimer\"
                                                                                    class=\"sholigne\"><i
                                                                                        class=\"material-icons col-pink\"
                                                                                        style=\"font-size: 18px;float: left\">highlight_off</i></a>";
                                // line 991
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["superviseur"], "noms", [], "any", false, false, false, 991), "html", null, true);
                                yield "</span>
                                                                        <br>
                                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['superviseur'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 994
                            yield "                                                                </td>
                                                                <td>
                                                                    <div class=\"progress\">
                                                                        <div class=\"progress-bar bg-green\"
                                                                             role=\"progressbar\"
                                                                             aria-valuenow=\" ";
                            // line 999
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "progression", [], "any", false, false, false, 999), 0, ",", " "), "html", null, true);
                            yield "\"
                                                                             aria-valuemin=\"0\" aria-valuemax=\"100\"
                                                                             style=\"width: ";
                            // line 1001
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "progression", [], "any", false, false, false, 1001), 0, ",", " "), "html", null, true);
                            yield "%\"></div>
                                                                    </div>
                                                                </td>

                                                                <td class=\"text-center\">";
                            // line 1005
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "progression", [], "any", false, false, false, 1005), 0, ",", " "), "html", null, true);
                            yield "
                                                                    %
                                                                </td>
                                                            </tr>
                                                        ";
                        }
                        // line 1010
                        yield "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1011
                    yield "                                                ";
                }
                // line 1012
                yield "                                            ";
            }
            // line 1013
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1014
        yield "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-pri shadow\" style=\"border-left: 2px solid #E91E63\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingOne_1\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed col-white outai\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseOne_1\" aria-expanded=\"false\"
                                   aria-controls=\"collapseOne_1\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Chantiers
                                    en cours<span
                                            class=\"badge bg-pink\"
                                            style=\"float: right !important;\">";
        // line 1029
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["countEncours"]) || array_key_exists("countEncours", $context) ? $context["countEncours"] : (function () { throw new RuntimeError('Variable "countEncours" does not exist.', 1029, $this->source); })()), "html", null, true);
        yield "</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseOne_1\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingOne_1\">
                            <div class=\"panel-body\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow: scroll\">
                                    <table class=\"table-bordered shadow display nowrape\" id=\"listeChantiersCours\"
                                           style=\"width:100%\">
                                        <thead>
                                        <tr class=\"text-gray-600 text-center\">
                                            <th class=\"col-blue-grey\">CHANTIERS / CLIENT</th>
                                            <th>CLIENT</th>
                                            <th class=\"text-center\">DÉBUT</th>
                                            <th class=\"text-center\">FIN</th>
                                            <th>SUPERVISEURS</th>
                                            <th class=\"text-center\">PROGRESSION</th>
                                            <th class=\"text-center\"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 1051
        $context["check"] = 0;
        // line 1052
        yield "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 1052, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 1053
            yield "                                            ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 1053))) {
                // line 1054
                yield "                                                ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 1054))) {
                    // line 1055
                    yield "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 1055));
                    foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                        // line 1056
                        yield "                                                        ";
                        if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 1056)) && (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "etat", [], "any", false, false, false, 1056) == "encours"))) {
                            // line 1057
                            yield "                                                            <tr>
                                                                <td style=\"padding-left: 20px !important;\">
                                                                    <a href=\"";
                            // line 1059
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 1059)]), "html", null, true);
                            yield "\"
                                                                       title=\"";
                            // line 1060
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "client", [], "any", false, false, false, 1060), "nomclient", [], "any", false, false, false, 1060)), "html", null, true);
                            yield "|";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 1060)), "html", null, true);
                            yield "\">
                                                                        ";
                            // line 1061
                            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "sous", [], "any", false, false, false, 1061))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 1062
                                yield "                                                                            <span class=\"badge bg-orange\">SC</span>
                                                                        ";
                            }
                            // line 1064
                            yield "                                                                        <span class=\"col-blue font-bold\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 1064)), "html", null, true);
                            yield "
                                                                    </a>
                                                                </td>
                                                                <td class=\"font-bold\">";
                            // line 1067
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 1067)), "html", null, true);
                            yield "</td>
                                                                <td class=\"text-center\">";
                            // line 1068
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "ddebut", [], "any", false, false, false, 1068), "d/m/Y"), "html", null, true);
                            yield "</td>
                                                                <td class=\"text-center\">";
                            // line 1069
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "dfin", [], "any", false, false, false, 1069), "d/m/Y"), "html", null, true);
                            yield "</td>
                                                                <td>
                                                                    ";
                            // line 1071
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "superviseurs", [], "any", false, false, false, 1071));
                            foreach ($context['_seq'] as $context["_key"] => $context["superviseur"]) {
                                // line 1072
                                yield "                                                                        <span class=\"pri m-l-5\"><a
                                                                                    href=\"";
                                // line 1073
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("upSuperviseur", ["idchantier" => CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 1073), "idsup" => CoreExtension::getAttribute($this->env, $this->source, $context["superviseur"], "id", [], "any", false, false, false, 1073)]), "html", null, true);
                                yield "\"
                                                                                    title=\"Supprimer\"
                                                                                    class=\"sholigne\"><i
                                                                                        class=\"material-icons col-pink\"
                                                                                        style=\"font-size: 18px;float: left\">highlight_off</i></a>";
                                // line 1077
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["superviseur"], "noms", [], "any", false, false, false, 1077), "html", null, true);
                                yield "</span>
                                                                        <br>
                                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['superviseur'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 1080
                            yield "                                                                </td>
                                                                <td>
                                                                    <div class=\"progress\">
                                                                        <div class=\"progress-bar bg-green\"
                                                                             role=\"progressbar\"
                                                                             aria-valuenow=\" ";
                            // line 1085
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "progression", [], "any", false, false, false, 1085), 0, ",", " "), "html", null, true);
                            yield "\"
                                                                             aria-valuemin=\"0\" aria-valuemax=\"100\"
                                                                             style=\"width: ";
                            // line 1087
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "progression", [], "any", false, false, false, 1087), 0, ",", " "), "html", null, true);
                            yield "%\"></div>
                                                                    </div>
                                                                </td>

                                                                <td class=\"text-center\">";
                            // line 1091
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "progression", [], "any", false, false, false, 1091), 0, ",", " "), "html", null, true);
                            yield "
                                                                    %
                                                                </td>
                                                            </tr>
                                                        ";
                        }
                        // line 1096
                        yield "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1097
                    yield "                                                ";
                }
                // line 1098
                yield "                                            ";
            }
            // line 1099
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1100
        yield "                                        </tbody>
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
                    <div class=\"panel panel-pri shadow\" style=\"border-left: 2px solid #FF9800; margin-top: 20px !important\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingOneSS\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed outai  col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseOneSS\" aria-expanded=\"false\"
                                   aria-controls=\"collapseOne_1\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Chantiers
                                    | Sous-chantiers<span
                                            class=\"badge bg-pink\"
                                            style=\"float: right !important;\">";
        // line 1121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["countSous"]) || array_key_exists("countSous", $context) ? $context["countSous"] : (function () { throw new RuntimeError('Variable "countSous" does not exist.', 1121, $this->source); })()), "html", null, true);
        yield "</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseOneSS\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingOneSS\">
                            <div class=\"panel-body\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px\">
                                    <table class=\"table-bordered  display nowrape\" style=\"width: 100%\"
                                           id=\"listeSous\">
                                        <thead>
                                        <tr class=\"text-gray-600 text-center\">
                                            <th class=\"col-blue-grey\">CHANTIERS</th>
                                            <th>CLIENT</th>
                                            <th class=\"text-center\">DÉBUT</th>
                                            <th class=\"text-center\">FIN</th>
                                            <th>SUPERVISEURS</th>
                                            <th>ÉTAT</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 1143
        $context["check"] = 0;
        // line 1144
        yield "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 1144, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 1145
            yield "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 1145));
            foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                // line 1146
                yield "                                                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "archiver", [], "any", false, false, false, 1146) != "oui")) {
                    // line 1147
                    yield "                                                    ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "sous", [], "any", false, false, false, 1147))) {
                        // line 1148
                        yield "                                                        ";
                        if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 1148))) {
                            // line 1149
                            yield "                                                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "chantiers", [], "any", false, false, false, 1149));
                            foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                                // line 1150
                                yield "                                                                ";
                                $context["count"] = 0;
                                // line 1151
                                yield "                                                                ";
                                $context["progres"] = 0;
                                // line 1152
                                yield "                                                                ";
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["pro"], "plannings", [], "any", false, false, false, 1152));
                                foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
                                    // line 1153
                                    yield "                                                                    ";
                                    $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 1153, $this->source); })()) + 1);
                                    // line 1154
                                    yield "                                                                    ";
                                    $context["progres"] = ((isset($context["progres"]) || array_key_exists("progres", $context) ? $context["progres"] : (function () { throw new RuntimeError('Variable "progres" does not exist.', 1154, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "progression", [], "any", false, false, false, 1154));
                                    // line 1155
                                    yield "                                                                ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_key'], $context['planning'], $context['_parent']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 1156
                                yield "                                                                <tr>
                                                                    <td style=\"padding-left: 20px !important;\">
                                                                        <a href=\"";
                                // line 1158
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pro"], "id", [], "any", false, false, false, 1158)]), "html", null, true);
                                yield "\"
                                                                           class=\"font-bold\"
                                                                           title=\"";
                                // line 1160
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["pro"], "sous", [], "any", false, false, false, 1160), "nomchantier", [], "any", false, false, false, 1160)), "html", null, true);
                                yield "|";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["pro"], "nomchantier", [], "any", false, false, false, 1160)), "html", null, true);
                                yield "\">
                                                                            ";
                                // line 1161
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["pro"], "nomchantier", [], "any", false, false, false, 1161)), "html", null, true);
                                yield "
                                                                        </a>
                                                                    </td>
                                                                    <td>
                                                                        <a href=\"";
                                // line 1165
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 1165)]), "html", null, true);
                                yield "\"
                                                                           class=\"font-bold col-pink\">";
                                // line 1166
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 1166)), "html", null, true);
                                yield "
                                                                            | ";
                                // line 1167
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 1167)), "html", null, true);
                                yield "</a></td>

                                                                    <td class=\"text-center\">";
                                // line 1169
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["pro"], "ddebut", [], "any", false, false, false, 1169), "d/m/Y"), "html", null, true);
                                yield "</td>
                                                                    <td class=\"text-center\">";
                                // line 1170
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["pro"], "dfin", [], "any", false, false, false, 1170), "d/m/Y"), "html", null, true);
                                yield "</td>
                                                                    <td>
                                                                        ";
                                // line 1172
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["pro"], "superviseurs", [], "any", false, false, false, 1172));
                                foreach ($context['_seq'] as $context["_key"] => $context["superviseur"]) {
                                    // line 1173
                                    yield "                                                                            <span class=\"pri m-l-5\"><a
                                                                                        href=\"";
                                    // line 1174
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("upSuperviseur", ["idchantier" => CoreExtension::getAttribute($this->env, $this->source, $context["pro"], "id", [], "any", false, false, false, 1174), "idsup" => CoreExtension::getAttribute($this->env, $this->source, $context["superviseur"], "id", [], "any", false, false, false, 1174)]), "html", null, true);
                                    yield "\"
                                                                                        title=\"Supprimer\"
                                                                                        class=\"sholigne\"><i
                                                                                            class=\"material-icons col-pink\"
                                                                                            style=\"font-size: 18px;float: left\">highlight_off</i></a>";
                                    // line 1178
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["superviseur"], "noms", [], "any", false, false, false, 1178), "html", null, true);
                                    yield "</span>
                                                                            <br>
                                                                        ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_key'], $context['superviseur'], $context['_parent']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 1181
                                yield "                                                                    </td>
                                                                    <td>
                                                                        <div class=\"progress\">
                                                                            <div class=\"progress-bar bg-green\"
                                                                                 role=\"progressbar\"
                                                                                 aria-valuenow=\" ";
                                // line 1186
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "progression", [], "any", false, false, false, 1186), 0, ",", " "), "html", null, true);
                                yield "\"
                                                                                 aria-valuemin=\"0\" aria-valuemax=\"100\"
                                                                                 style=\"width: ";
                                // line 1188
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "progression", [], "any", false, false, false, 1188), 0, ",", " "), "html", null, true);
                                yield "%\"></div>
                                                                        </div>
                                                                    </td>

                                                                    <td class=\"text-center\">";
                                // line 1192
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "progression", [], "any", false, false, false, 1192), 0, ",", " "), "html", null, true);
                                yield "
                                                                        %
                                                                    </td>
                                                                </tr>
                                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['pro'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 1197
                            yield "                                                        ";
                        }
                        // line 1198
                        yield "                                                    ";
                    }
                    // line 1199
                    yield "                                                ";
                }
                // line 1200
                yield "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1201
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1202
        yield "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-pri shadow\"  style=\"border-left: 2px solid #79A807\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingOne_1\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed col-white outai\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseCHTT\" aria-expanded=\"false\"
                                   aria-controls=\"collapseCHTT\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Tous
                                    les chantiers<span
                                            class=\"badge bg-pink\"
                                            style=\"float: right !important;\">";
        // line 1217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["countTout"]) || array_key_exists("countTout", $context) ? $context["countTout"] : (function () { throw new RuntimeError('Variable "countTout" does not exist.', 1217, $this->source); })()), "html", null, true);
        yield "</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseCHTT\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingCHTT\">
                            <div class=\"panel-body\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px\">
                                    <table class=\"table-bordered  display nowrape\" style=\"width: 100%\"
                                           id=\"listeTout\">
                                        <thead>
                                        <tr class=\"text-gray-600 text-center\">
                                            <th class=\"col-blue-grey mw250\">CHANTIERS</th>
                                            <th>CLIENT</th>
                                            <th class=\"text-center\">DÉBUT</th>
                                            <th class=\"text-center\">FIN</th>
                                            <th>SUPERVISEURS</th>
                                            <th class=\"text-center\">ETAT</th>
                                            <th class=\"text-center\"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 1239
        $context["check"] = 0;
        // line 1240
        yield "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 1240, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 1241
            yield "                                            ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 1241))) {
                // line 1242
                yield "                                                ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 1242))) {
                    // line 1243
                    yield "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 1243));
                    foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                        // line 1244
                        yield "                                                        ";
                        $context["count"] = 0;
                        // line 1245
                        yield "                                                        ";
                        $context["progres"] = 0;
                        // line 1246
                        yield "                                                        ";
                        if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 1246))) {
                            // line 1247
                            yield "                                                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pro"]) || array_key_exists("pro", $context) ? $context["pro"] : (function () { throw new RuntimeError('Variable "pro" does not exist.', 1247, $this->source); })()), "plannings", [], "any", false, false, false, 1247));
                            foreach ($context['_seq'] as $context["_key"] => $context["planning"]) {
                                // line 1248
                                yield "                                                                ";
                                $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 1248, $this->source); })()) + 1);
                                // line 1249
                                yield "                                                                ";
                                $context["progres"] = ((isset($context["progres"]) || array_key_exists("progres", $context) ? $context["progres"] : (function () { throw new RuntimeError('Variable "progres" does not exist.', 1249, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["planning"], "progression", [], "any", false, false, false, 1249));
                                // line 1250
                                yield "                                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['planning'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 1251
                            yield "                                                            <tr>
                                                                <td style=\"padding-left: 20px !important;\">
                                                                    <a href=\"";
                            // line 1253
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 1253)]), "html", null, true);
                            yield "\"
                                                                       title=\"";
                            // line 1254
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "client", [], "any", false, false, false, 1254), "nomclient", [], "any", false, false, false, 1254)), "html", null, true);
                            yield "|";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 1254)), "html", null, true);
                            yield "\">
                                                                        ";
                            // line 1255
                            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "sous", [], "any", false, false, false, 1255))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 1256
                                yield "                                                                            <span class=\"badge bg-orange\">SC</span>
                                                                        ";
                            }
                            // line 1258
                            yield "                                                                        <span class=\"col-blue font-bold\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 1258)), "html", null, true);
                            yield "
                                                                    </a>
                                                                </td>
                                                                <td>";
                            // line 1261
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 1261)), "html", null, true);
                            yield "</td>
                                                                <td class=\"text-center\">";
                            // line 1262
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "ddebut", [], "any", false, false, false, 1262), "d/m/Y"), "html", null, true);
                            yield "</td>
                                                                <td class=\"text-center\">";
                            // line 1263
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "dfin", [], "any", false, false, false, 1263), "d/m/Y"), "html", null, true);
                            yield "</td>
                                                                <td>
                                                                    ";
                            // line 1265
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "superviseurs", [], "any", false, false, false, 1265));
                            foreach ($context['_seq'] as $context["_key"] => $context["superviseur"]) {
                                // line 1266
                                yield "                                                                        <span class=\"pri m-l-5\"><a
                                                                                    href=\"";
                                // line 1267
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("upSuperviseur", ["idchantier" => CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 1267), "idsup" => CoreExtension::getAttribute($this->env, $this->source, $context["superviseur"], "id", [], "any", false, false, false, 1267)]), "html", null, true);
                                yield "\"
                                                                                    title=\"Supprimer\"
                                                                                    class=\"sholigne\"><i
                                                                                        class=\"material-icons col-pink\"
                                                                                        style=\"font-size: 18px;float: left\">highlight_off</i></a>";
                                // line 1271
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["superviseur"], "noms", [], "any", false, false, false, 1271), "html", null, true);
                                yield "</span>
                                                                        <br>
                                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['superviseur'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 1274
                            yield "                                                                </td>
                                                                <td>
                                                                    <div class=\"progress\">
                                                                        <div class=\"progress-bar bg-green\"
                                                                             role=\"progressbar\"
                                                                             aria-valuenow=\" ";
                            // line 1279
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "progression", [], "any", false, false, false, 1279), 0, ",", " "), "html", null, true);
                            yield "\"
                                                                             aria-valuemin=\"0\" aria-valuemax=\"100\"
                                                                             style=\"width: ";
                            // line 1281
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "progression", [], "any", false, false, false, 1281), 0, ",", " "), "html", null, true);
                            yield "%\"></div>
                                                                    </div>
                                                                </td>

                                                                <td class=\"text-center\">";
                            // line 1285
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "progression", [], "any", false, false, false, 1285), 0, ",", " "), "html", null, true);
                            yield "
                                                                    %
                                                                </td>
                                                            </tr>
                                                        ";
                        }
                        // line 1290
                        yield "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1291
                    yield "                                                ";
                }
                // line 1292
                yield "                                            ";
            }
            // line 1293
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1294
        yield "                                        </tbody>
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

                    ";
        // line 1307
        $context["countContact"] = 0;
        // line 1308
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 1308, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 1309
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "contacts", [], "any", false, false, false, 1309));
            foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                // line 1310
                yield "                            ";
                if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "corbeille", [], "any", false, false, false, 1310)) && (null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 1310)))) {
                    // line 1311
                    yield "                                ";
                    $context["countContact"] = ((isset($context["countContact"]) || array_key_exists("countContact", $context) ? $context["countContact"] : (function () { throw new RuntimeError('Variable "countContact" does not exist.', 1311, $this->source); })()) + 1);
                    // line 1312
                    yield "                            ";
                }
                // line 1313
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['contact'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1314
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1315
        yield "
                    <div class=\"panel panel-pri shadow\" style=\"margin-top: 20px !important\">
                        <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingDeu\">
                            <h5 class=\"panel-title \">
                                <a class=\"collapsed col-white outai\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseDeu\" aria-expanded=\"false\"
                                   aria-controls=\"collapseDeu\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Contacts<span
                                            class=\"badge bg-pink\"
                                            style=\"float: right !important;\">";
        // line 1324
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["countContact"]) || array_key_exists("countContact", $context) ? $context["countContact"] : (function () { throw new RuntimeError('Variable "countContact" does not exist.', 1324, $this->source); })()), "html", null, true);
        yield "</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseDeu\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingDeu\">
                            <div class=\"panel-body\" style=\"overflow: scroll\">
                                <div class=\"table-responsive shadow\" style=\"padding: 10px\">
                                    <table class=\"table-striped table-bordered display nowrape\" style=\"width: 100%\"
                                           id=\"daCon\">
                                        <thead>
                                        <tr class=\"text-center\">
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
        // line 1346
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 1346, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 1347
            yield "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "contacts", [], "any", false, false, false, 1347));
            foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                // line 1348
                yield "                                                ";
                if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "corbeille", [], "any", false, false, false, 1348)) && (null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 1348)))) {
                    // line 1349
                    yield "                                                    <tr>
                                                        <td class=\"font-bold\" style=\"padding-left: 20px !important;\">";
                    // line 1350
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "contact", [], "any", false, false, false, 1350)), "html", null, true);
                    yield "</td>
                                                        <td>";
                    // line 1351
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "fonction", [], "any", false, false, false, 1351)), "html", null, true);
                    yield "</td>
                                                        <td>";
                    // line 1352
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "mail", [], "any", false, false, false, 1352), "html", null, true);
                    yield "</td>
                                                        <td>";
                    // line 1353
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "phone", [], "any", false, false, false, 1353), "html", null, true);
                    yield "</td>
                                                        <td>";
                    // line 1354
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "bureau", [], "any", false, false, false, 1354), "html", null, true);
                    yield "</td>
                                                        <td class=\"text-left col-blue bolo600\">
                                                            <i class=\"fa fa-user col-blue bolo600\"></i>&nbsp;
                                                            ";
                    // line 1357
                    if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "dobyuser", [], "any", false, false, false, 1357))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 1358
                        yield "                                                                ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "dobyuser", [], "any", false, false, false, 1358), "nom", [], "any", false, false, false, 1358)), "html", null, true);
                        yield "
                                                                &nbsp;";
                        // line 1359
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "dobyuser", [], "any", false, false, false, 1359), "prenoms", [], "any", false, false, false, 1359)), "html", null, true);
                        yield "
                                                            ";
                    }
                    // line 1361
                    yield "                                                        </td>
                                                        <td><b>";
                    // line 1362
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 1362), "html", null, true);
                    yield "</b></td>
                                                    </tr>
                                                ";
                }
                // line 1365
                yield "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['contact'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1366
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1367
        yield "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    ";
        // line 1374
        $context["countPers"] = 0;
        // line 1375
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["personnels"]) || array_key_exists("personnels", $context) ? $context["personnels"] : (function () { throw new RuntimeError('Variable "personnels" does not exist.', 1375, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
            // line 1376
            yield "                    ";
            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["person"], "corbeille", [], "any", false, false, false, 1376)) && (CoreExtension::getAttribute($this->env, $this->source, $context["person"], "type", [], "any", false, false, false, 1376) != "personnelle"))) {
                // line 1377
                yield "                        ";
                $context["countPers"] = ((isset($context["countPers"]) || array_key_exists("countPers", $context) ? $context["countPers"] : (function () { throw new RuntimeError('Variable "countPers" does not exist.', 1377, $this->source); })()) + 1);
                // line 1378
                yield "                    ";
            }
            // line 1379
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['person'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1380
        yield "                    <div class=\"panel panel-pri shadow m-t-5\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingPers\">
                            <h4 class=\"panel-title\">
                                <a class=\"collapsed col-white outai\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordionPers\" href=\"#collapsePers\" aria-expanded=\"false\"
                                   aria-controls=\"collapsePers\">
                                    <i class=\"material-icons text-white\"
                                       style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Le personnel<span
                                            class=\"badge bg-pink\"
                                            style=\"float: right !important;\">";
        // line 1389
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["countPers"]) || array_key_exists("countPers", $context) ? $context["countPers"] : (function () { throw new RuntimeError('Variable "countPers" does not exist.', 1389, $this->source); })()), "html", null, true);
        yield "</span>
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapsePers\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingPers\">
                            <div class=\"panel-body \" style=\"overflow: scroll;\">
                                <div class=\"button-demo\">

                                </div>
                                <div class=\"table-responsive shadow\" style=\"padding: 20px\">
                                    <div class=\"table-responsive shadow\">
                                                    <span id=\"projetvale\"
                                                          style=\"visibility: hidden\">";
        // line 1402
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 1402, $this->source); })()), "id", [], "any", false, false, false, 1402), "html", null, true);
        yield "</span>
                                        <h4 class=\"bolo700 col-blue\">LE PERSONNEL</h4>
                                        <table class=\"table-striped table-bordered display nowrap\"
                                               style=\"width: 100%;\" id=\"dataPersonTech\">
                                            <thead>
                                            <tr class=\"text-center\">
                                                <th>NOM & PRÉNOMS</th>
                                                <th>PROFESSION</th>
                                                <th>CONTACTS</th>
                                                <th>EMAIL</th>
                                                <th>SALAIRE</th>
                                                <th>AJOUTER PAR</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 1417
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["personnels"]) || array_key_exists("personnels", $context) ? $context["personnels"] : (function () { throw new RuntimeError('Variable "personnels" does not exist.', 1417, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
            // line 1418
            yield "                                                ";
            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["person"], "corbeille", [], "any", false, false, false, 1418)) && (CoreExtension::getAttribute($this->env, $this->source, $context["person"], "type", [], "any", false, false, false, 1418) != "personnelle"))) {
                // line 1419
                yield "                                                    <tr>
                                                        <td class=\"text-left font-bold mw300\">";
                // line 1420
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["person"], "noms", [], "any", false, false, false, 1420)), "html", null, true);
                yield "</td>
                                                        <td class=\"text-left\">";
                // line 1421
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["person"], "fonction", [], "any", false, false, false, 1421)), "html", null, true);
                yield "</td>
                                                        <td>";
                // line 1422
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "contact", [], "any", false, false, false, 1422), "html", null, true);
                yield "</td>
                                                        <td>";
                // line 1423
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "mail", [], "any", false, false, false, 1423), "html", null, true);
                yield "</td>
                                                        <td class=\"text-right\">";
                // line 1424
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "salaire", [], "any", false, false, false, 1424), 2, ",", " "), "html", null, true);
                yield "</td>
                                                        <td class=\"text-left col-blue\"><i
                                                                    class=\"fa fa-user col-blue\"></i>&nbsp;
                                                            ";
                // line 1427
                if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["person"], "dobyuser", [], "any", false, false, false, 1427))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 1428
                    yield "                                                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["person"], "dobyuser", [], "any", false, false, false, 1428), "nom", [], "any", false, false, false, 1428)), "html", null, true);
                    yield "
                                                                &nbsp;";
                    // line 1429
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["person"], "dobyuser", [], "any", false, false, false, 1429), "prenoms", [], "any", false, false, false, 1429)), "html", null, true);
                    yield "
                                                            ";
                }
                // line 1431
                yield "                                                        </td>
                                                    </tr>
                                                ";
            }
            // line 1434
            yield "                                                ";
            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["person"], "corbeille", [], "any", false, false, false, 1434)) && (CoreExtension::getAttribute($this->env, $this->source, $context["person"], "type", [], "any", false, false, false, 1434) == "personnelle"))) {
                // line 1435
                yield "                                                    <tr>
                                                        <td class=\"col-pink font-bold text-left mw300\">";
                // line 1436
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["person"], "noms", [], "any", false, false, false, 1436)), "html", null, true);
                yield "</td>
                                                        <td class=\"text-left mw250\">";
                // line 1437
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["person"], "fonction", [], "any", false, false, false, 1437)), "html", null, true);
                yield "</td>
                                                        <td class=\"mw150\">";
                // line 1438
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "contact", [], "any", false, false, false, 1438), "html", null, true);
                yield "</td>
                                                        <td class=\"mw150\">";
                // line 1439
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["person"], "mail", [], "any", false, false, false, 1439), "html", null, true);
                yield "</td>
                                                        <td class=\"text-right\">-</td>
                                                        <td class=\"text-left col-blue mw250\"><i
                                                                    class=\"fa fa-user col-blue\"></i>&nbsp;
                                                            ";
                // line 1443
                if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["person"], "dobyuser", [], "any", false, false, false, 1443))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 1444
                    yield "                                                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["person"], "dobyuser", [], "any", false, false, false, 1444), "nom", [], "any", false, false, false, 1444)), "html", null, true);
                    yield "
                                                                &nbsp;";
                    // line 1445
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["person"], "dobyuser", [], "any", false, false, false, 1445), "prenoms", [], "any", false, false, false, 1445)), "html", null, true);
                    yield "
                                                            ";
                }
                // line 1447
                yield "                                                        </td>
                                                    </tr>
                                                ";
            }
            // line 1450
            yield "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['person'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1451
        yield "                                            </tbody>
                                        </table>
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
        return "content/technique.html.twig";
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
        return array (  2635 => 1451,  2629 => 1450,  2624 => 1447,  2619 => 1445,  2614 => 1444,  2612 => 1443,  2605 => 1439,  2601 => 1438,  2597 => 1437,  2593 => 1436,  2590 => 1435,  2587 => 1434,  2582 => 1431,  2577 => 1429,  2572 => 1428,  2570 => 1427,  2564 => 1424,  2560 => 1423,  2556 => 1422,  2552 => 1421,  2548 => 1420,  2545 => 1419,  2542 => 1418,  2538 => 1417,  2520 => 1402,  2504 => 1389,  2493 => 1380,  2487 => 1379,  2484 => 1378,  2481 => 1377,  2478 => 1376,  2473 => 1375,  2471 => 1374,  2462 => 1367,  2456 => 1366,  2450 => 1365,  2444 => 1362,  2441 => 1361,  2436 => 1359,  2431 => 1358,  2429 => 1357,  2423 => 1354,  2419 => 1353,  2415 => 1352,  2411 => 1351,  2407 => 1350,  2404 => 1349,  2401 => 1348,  2396 => 1347,  2392 => 1346,  2367 => 1324,  2356 => 1315,  2350 => 1314,  2344 => 1313,  2341 => 1312,  2338 => 1311,  2335 => 1310,  2330 => 1309,  2325 => 1308,  2323 => 1307,  2308 => 1294,  2302 => 1293,  2299 => 1292,  2296 => 1291,  2290 => 1290,  2282 => 1285,  2275 => 1281,  2270 => 1279,  2263 => 1274,  2254 => 1271,  2247 => 1267,  2244 => 1266,  2240 => 1265,  2235 => 1263,  2231 => 1262,  2227 => 1261,  2220 => 1258,  2216 => 1256,  2214 => 1255,  2208 => 1254,  2204 => 1253,  2200 => 1251,  2194 => 1250,  2191 => 1249,  2188 => 1248,  2183 => 1247,  2180 => 1246,  2177 => 1245,  2174 => 1244,  2169 => 1243,  2166 => 1242,  2163 => 1241,  2158 => 1240,  2156 => 1239,  2131 => 1217,  2114 => 1202,  2108 => 1201,  2102 => 1200,  2099 => 1199,  2096 => 1198,  2093 => 1197,  2082 => 1192,  2075 => 1188,  2070 => 1186,  2063 => 1181,  2054 => 1178,  2047 => 1174,  2044 => 1173,  2040 => 1172,  2035 => 1170,  2031 => 1169,  2026 => 1167,  2022 => 1166,  2018 => 1165,  2011 => 1161,  2005 => 1160,  2000 => 1158,  1996 => 1156,  1990 => 1155,  1987 => 1154,  1984 => 1153,  1979 => 1152,  1976 => 1151,  1973 => 1150,  1968 => 1149,  1965 => 1148,  1962 => 1147,  1959 => 1146,  1954 => 1145,  1949 => 1144,  1947 => 1143,  1922 => 1121,  1899 => 1100,  1893 => 1099,  1890 => 1098,  1887 => 1097,  1881 => 1096,  1873 => 1091,  1866 => 1087,  1861 => 1085,  1854 => 1080,  1845 => 1077,  1838 => 1073,  1835 => 1072,  1831 => 1071,  1826 => 1069,  1822 => 1068,  1818 => 1067,  1811 => 1064,  1807 => 1062,  1805 => 1061,  1799 => 1060,  1795 => 1059,  1791 => 1057,  1788 => 1056,  1783 => 1055,  1780 => 1054,  1777 => 1053,  1772 => 1052,  1770 => 1051,  1745 => 1029,  1728 => 1014,  1722 => 1013,  1719 => 1012,  1716 => 1011,  1710 => 1010,  1702 => 1005,  1695 => 1001,  1690 => 999,  1683 => 994,  1674 => 991,  1667 => 987,  1664 => 986,  1660 => 985,  1655 => 983,  1651 => 982,  1647 => 981,  1640 => 978,  1636 => 976,  1634 => 975,  1628 => 974,  1624 => 973,  1620 => 971,  1617 => 970,  1612 => 969,  1609 => 968,  1606 => 967,  1601 => 966,  1599 => 965,  1575 => 944,  1551 => 922,  1545 => 921,  1542 => 920,  1539 => 919,  1533 => 918,  1525 => 913,  1518 => 909,  1513 => 907,  1506 => 902,  1497 => 899,  1490 => 895,  1487 => 894,  1483 => 893,  1478 => 891,  1474 => 890,  1470 => 889,  1463 => 886,  1459 => 884,  1457 => 883,  1451 => 882,  1447 => 881,  1443 => 879,  1440 => 878,  1435 => 877,  1432 => 876,  1429 => 875,  1424 => 874,  1422 => 873,  1397 => 851,  1387 => 843,  1381 => 842,  1378 => 841,  1375 => 840,  1369 => 839,  1366 => 838,  1363 => 837,  1360 => 836,  1357 => 835,  1354 => 834,  1351 => 833,  1348 => 832,  1345 => 831,  1342 => 830,  1339 => 829,  1336 => 828,  1333 => 827,  1330 => 826,  1327 => 825,  1322 => 824,  1319 => 823,  1316 => 822,  1312 => 821,  1309 => 820,  1306 => 819,  1303 => 818,  1300 => 817,  1297 => 816,  1294 => 815,  1291 => 814,  1289 => 813,  1278 => 804,  1272 => 803,  1269 => 802,  1263 => 799,  1259 => 798,  1255 => 797,  1251 => 796,  1247 => 795,  1244 => 794,  1241 => 793,  1238 => 792,  1234 => 791,  1212 => 772,  1202 => 764,  1196 => 763,  1193 => 762,  1190 => 761,  1187 => 760,  1184 => 759,  1181 => 758,  1176 => 757,  1174 => 756,  1114 => 699,  1107 => 695,  1085 => 676,  1075 => 669,  1062 => 659,  1049 => 649,  1036 => 639,  1023 => 629,  1001 => 610,  997 => 609,  968 => 583,  962 => 580,  947 => 568,  934 => 558,  925 => 552,  921 => 551,  917 => 550,  899 => 535,  893 => 532,  878 => 520,  865 => 510,  856 => 504,  852 => 503,  848 => 502,  830 => 487,  824 => 484,  809 => 472,  796 => 462,  787 => 456,  783 => 455,  779 => 454,  756 => 434,  744 => 424,  733 => 422,  729 => 421,  716 => 410,  710 => 409,  707 => 408,  702 => 405,  696 => 404,  689 => 402,  686 => 401,  683 => 400,  679 => 399,  674 => 398,  671 => 397,  665 => 396,  662 => 395,  659 => 394,  656 => 393,  651 => 392,  648 => 391,  645 => 390,  641 => 389,  630 => 381,  611 => 365,  603 => 360,  596 => 355,  591 => 352,  583 => 348,  581 => 347,  573 => 341,  567 => 339,  561 => 337,  559 => 336,  548 => 327,  542 => 325,  536 => 323,  534 => 322,  523 => 313,  517 => 311,  511 => 309,  509 => 308,  498 => 299,  492 => 297,  486 => 295,  484 => 294,  473 => 285,  467 => 283,  461 => 281,  459 => 280,  448 => 271,  442 => 269,  436 => 267,  434 => 266,  424 => 259,  420 => 258,  416 => 256,  410 => 252,  404 => 248,  402 => 247,  389 => 237,  384 => 235,  324 => 178,  311 => 168,  298 => 158,  285 => 148,  271 => 137,  249 => 118,  245 => 117,  220 => 95,  213 => 91,  185 => 66,  172 => 56,  159 => 46,  146 => 36,  136 => 29,  132 => 28,  108 => 7,  104 => 6,  100 => 4,  87 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baser.html.twig' %}
{% block title %}{{ title }}{% endblock %}
{% block body %}

    <input type=\"text\" class=\"hide\" id=\"pager\" value=\"technique\"/>
    <input type=\"text\" class=\"hide\" id=\"idclient\" value=\"{{ client.id }}\"/>
    <input type=\"text\" class=\"hide\" id=\"idchantier\" value=\"{{ chantier.id }}\"/>
    <input type=\"text\" class=\"hide\" id=\"pager\" value=\"techniques\"/>

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
                            <div type=\"button\" id=\"closeCliente\" class=\"btn btn-link waves-effect col-white bg-pink\">
                                ANNULER
                            </div>
                        </div>


                        <div class=\"text-center\" id=\"divClient\">
                            <input type=\"submit\" id=\"addTechClient\" value=\"ENREGISTRER\"
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
                    </div>
                    {{ form_end(formClient) }}
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
                            <label class=\"form-label pri bolo\">RÉFÉRENCE CONTRAT
                            </label>
                            <div class=\"form-group m-t--5\">
                                <div class=\"form-line\">
                                    {{ form_widget(formChantier.contrat,{'attr':{'class':'form-control col-pink'}}) }}
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
                        <input type=\"submit\" id=\"updateChan\" value=\"MODIFIER\"
                               class=\"btn btn-link waves-effect col-white bg-green\">
                        <div type=\"button\" id=\"closeChantiere\" class=\"btn btn-link waves-effect col-white bg-pink\"
                             data-dismiss=\"modal\">
                            ANNULER
                        </div>
                    </div>

                    <div class=\"text-center\" id=\"divChantier\">
                        <input type=\"submit\" id=\"adduChantier\" value=\"ENREGISTRER\"
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
    <div class=\"modal fade right\" id=\"modalPersonnel\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                {% if editPer %}
                    <div class=\"modal-header bg-green text-white p-l-20\">
                        <h4 class=\"modal-title\" id=\"defaultModalLabel\">MODIFIER UN PERSONNEL</h4>
                    </div>
                {% else %}
                    <div class=\"modal-header bg-pri text-white p-l-20\">
                        <h4 class=\"modal-title\" id=\"defaultModalLabel\">AJOUTER UN PERSONNEL</h4>
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
                                            {{ form_widget(formPeronnel.service,{'attr':{'class':'form-control col-pink ' }}) }}
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
                                       class=\"btn btn-link waves-effect text-white bg-green\">
                            {% else %}
                                <input type=\"submit\" id=\"addPers\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-blue\">
                            {% endif %}

                            <div type=\"button\" id=\"closePers\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
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
    <div class=\"modal fade right\" id=\"modalSuperviseur\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" 8
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-pri text-white p-l-20\">
                    <h4 class=\"modal-title\" id=\"defaultModalLabel\">CHANTIER / SUPERVISEURS</h4>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        <form id=\"addSuperviseurForm\">
                            <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addSuperviseurToken') }}\"/>
                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label m-b--30 col-blue bolo\">CHANTIERS</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            <select class=\"js-example-basic-multiple\" name=\"chantiers[]\"
                                                    multiple=\"multiple\" style=\"width: 100%\" required>
                                                {% for client in clients %}
                                                    {% if client.corbeille is null %}
                                                        {% set check = 0 %}
                                                        {% for chantier in client.chantiers %}
                                                            {% if chantier.corbeille is null and chantier.archiver != 'oui' %}
                                                                {% set check = check + 1 %}
                                                            {% endif %}
                                                        {% endfor %}
                                                        {% if check > 0 %}
                                                            <optgroup label=\"{{ client.nomclient|upper }}\">
                                                                {% for chantier in client.chantiers %}
                                                                    {% if chantier.corbeille is null and chantier.archiver != 'oui' %}
                                                                        <option class=\"col-blue\"
                                                                                value=\"{{ chantier.id }}\">{{ chantier.nomchantier|upper }}</option>
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
                                    <label class=\"form-label m-b--30 col-blue bolo\">SUPERVISEURS</label>
                                    <div class=\"form-group\">
                                        <select class=\"js-example-basic-multiple\" name=\"superviseurs[]\"
                                                multiple=\"multiple\" style=\"width: 100%\" required>
                                            {% for personnel in personnels %}
                                                <option value=\"{{ personnel.id }}\">{{ personnel.noms|upper }}</option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class=\"text-center\">
                                <input type=\"submit\" id=\"addSuper\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-blue\">
                                <div type=\"button\" id=\"closeSuper\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                     data-dismiss=\"modal\">FERMER
                                </div>
                                <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                     class=\"align-justify\" id=\"loadSuper\"></div>
                            <br>
                            <br>
                            <br>
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

    <section class=\"content fixed-top\">
        <div class=\"container-fluid\" style=\"margin: 0 14px 0 14px\">

            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div id=\"ressult\" style=\"width: 100%; align-content: start\" class=\"text-left\"></div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"content\" style=\"margin-top: 20px !important;\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row clearfix m-t-50\">
                    <div class=\"col-sm-12 \">
                        <h4 class=\"bolo700 col-deep-orange\">GESTION TECHNIQUE</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"content\">
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
                        </div>
                    </div>
                </div>
                <div class=\"panel-group\" id=\"accordion_1\" role=\"tablist\" aria-multiselectable=\"true\">

                    {% set countClient = 0 %}
                    {% for client in clients %}
                        {% if client.type is null %}
                            {% if client.corbeille is null %}
                                {% set  countClient = countClient + 1 %}
                            {% endif %}
                        {% endif %}
                    {% endfor %}
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
                                    <table class=\"table-bordered  display nowrape\" style=\"width: 100%\" id=\"dataClientsTech\">
                                        <thead>
                                        <tr>
                                            <th>CLIENTS</th>
                                            <th>CODE CLIENT</th>
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
                                                        <td class=\"bolo700 col-blue\">{{ client.nomclient|upper }}</td>
                                                        <td class=\"text-left\">{{ client.code }}</td>
                                                        <td class=\"text-left\">{{ client.adresse }}</td>
                                                        <td class=\"text-left\">{{ client.contact }}</td>
                                                        <td class=\"text-left\">{{ client.contribuable }}</td>
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
                                    {% if chantier.etat == \"encours\" and chantier.corbeille is null %}
                                        {% set countEncours = countEncours + 1 %}
                                    {% endif %}
                                    {% if chantier.sous is not null %}
                                        {% if chantier.etat == \"encours\" and chantier.corbeille is null %}
                                            {% set countSous = countSous + 1 %}
                                        {% endif %}
                                    {% endif %}
                                    {% if chantier.corbeille is null %}
                                        {% set countTout = countTout + 1 %}
                                    {% endif %}
                                {% endfor %}
                            {% endif %}
                        {% endif %}
                    {% endfor %}
                    <div class=\"panel panel-pri shadow\" style=\"border-left: 2px solid #6636f6; margin-top: 20px !important\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingEtu_1\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed col-white outai\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordionEtu_1\" href=\"#collapseEtu_1\" aria-expanded=\"false\"
                                   aria-controls=\"collapseEtu_1\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Chantiers en étude<span
                                            class=\"badge bg-pink\"
                                            style=\"float: right !important;\">{{ countEtude }}</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseEtu_1\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingEtu_1\">
                            <div class=\"panel-body\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow: scroll\">
                                    <table class=\"table-bordered shadow display nowrape\" id=\"listeChantiers\"
                                           style=\"width:100%\">
                                        <thead>
                                        <tr class=\"text-gray-600 text-center\">
                                            <th class=\"col-blue-grey\">CHANTIERS / CLIENT</th>
                                            <th>CLIENT</th>
                                            <th class=\"text-center\">DÉBUT</th>
                                            <th class=\"text-center\">FIN</th>
                                            <th>SUPERVISEURS</th>
                                            <th class=\"text-center\">PROGRESSION</th>
                                            <th class=\"text-center\"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% set check = 0 %}
                                        {% for client in clients %}
                                            {% if client.type is null %}
                                                {% if client.corbeille is null %}
                                                    {% for chantier in client.chantiers %}
                                                        {% if chantier.corbeille is null  and chantier.etat == \"etude\" %}
                                                            <tr>
                                                                <td style=\"padding-left: 20px !important;\">
                                                                    <a href=\"{{ path('gestion', {'id': chantier.id}) }}\"
                                                                       title=\"{{ chantier.client.nomclient|upper }}|{{ chantier.nomchantier|upper }}\">
                                                                        {% if chantier.sous is not null %}
                                                                            <span class=\"badge bg-orange\">SP</span>
                                                                        {% endif %}
                                                                        <span class=\"col-blue font-bold\"> {{ chantier.nomchantier|upper }}
                                                                    </a>
                                                                </td>
                                                                <td class=\"font-bold\">{{ client.nomclient|upper }}</td>
                                                                <td class=\"text-center\">{{ chantier.ddebut|date('d/m/Y') }}</td>
                                                                <td class=\"text-center\">{{ chantier.dfin|date('d/m/Y') }}</td>
                                                                <td>
                                                                    {% for superviseur in chantier.superviseurs %}
                                                                        <span class=\"pri m-l-5\"><a
                                                                                    href=\"{{ path('upSuperviseur', {'idchantier': chantier.id, 'idsup': superviseur.id}) }}\"
                                                                                    title=\"Supprimer\"
                                                                                    class=\"sholigne\"><i
                                                                                        class=\"material-icons col-pink\"
                                                                                        style=\"font-size: 18px;float: left\">highlight_off</i></a>{{ superviseur.noms }}</span>
                                                                        <br>
                                                                    {% endfor %}
                                                                </td>
                                                                <td>
                                                                    <div class=\"progress\">
                                                                        <div class=\"progress-bar bg-green\"
                                                                             role=\"progressbar\"
                                                                             aria-valuenow=\" {{ chantier.progression|number_format(0, ',', ' ') }}\"
                                                                             aria-valuemin=\"0\" aria-valuemax=\"100\"
                                                                             style=\"width: {{ chantier.progression|number_format(0, ',', ' ') }}%\"></div>
                                                                    </div>
                                                                </td>

                                                                <td class=\"text-center\">{{ chantier.progression|number_format(0, ',', ' ') }}
                                                                    %
                                                                </td>
                                                            </tr>
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endif %}
                                            {% endif %}
                                        {% endfor %}
                                        </tbody>
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
                                    <table class=\"table-striped table-bordered display nowrape\" id=\"listeChantiersEchouer\" style=\"width: 100%\">
                                        <thead>
                                        <tr class=\"text-gray-600 text-center\">
                                            <th class=\"col-blue-grey\">CHANTIERS / CLIENT</th>
                                            <th>CLIENT</th>
                                            <th class=\"text-center\">DÉBUT</th>
                                            <th class=\"text-center\">FIN</th>
                                            <th>SUPERVISEURS</th>
                                            <th class=\"text-center\">PROGRESSION</th>
                                            <th class=\"text-center\"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% set check = 0 %}
                                        {% for client in clients %}
                                            {% if client.type is null %}
                                                {% if client.corbeille is null %}
                                                    {% for chantier in client.chantiers %}
                                                        {% if chantier.corbeille is null  and chantier.etat == \"echouer\" %}
                                                            <tr>
                                                                <td style=\"padding-left: 20px !important;\">
                                                                    <a href=\"{{ path('gestion', {'id': chantier.id}) }}\"
                                                                       title=\"{{ chantier.client.nomclient|upper }}|{{ chantier.nomchantier|upper }}\">
                                                                        {% if chantier.sous is not null %}
                                                                            <span class=\"badge bg-orange\">SP</span>
                                                                        {% endif %}
                                                                        <span class=\"col-blue font-bold\"> {{ chantier.nomchantier|upper }}
                                                                    </a>
                                                                </td>
                                                                <td class=\"font-bold\">{{ client.nomclient|upper }}</td>
                                                                <td class=\"text-center\">{{ chantier.ddebut|date('d/m/Y') }}</td>
                                                                <td class=\"text-center\">{{ chantier.dfin|date('d/m/Y') }}</td>
                                                                <td>
                                                                    {% for superviseur in chantier.superviseurs %}
                                                                        <span class=\"pri m-l-5\"><a
                                                                                    href=\"{{ path('upSuperviseur', {'idchantier': chantier.id, 'idsup': superviseur.id}) }}\"
                                                                                    title=\"Supprimer\"
                                                                                    class=\"sholigne\"><i
                                                                                        class=\"material-icons col-pink\"
                                                                                        style=\"font-size: 18px;float: left\">highlight_off</i></a>{{ superviseur.noms }}</span>
                                                                        <br>
                                                                    {% endfor %}
                                                                </td>
                                                                <td>
                                                                    <div class=\"progress\">
                                                                        <div class=\"progress-bar bg-green\"
                                                                             role=\"progressbar\"
                                                                             aria-valuenow=\" {{ chantier.progression|number_format(0, ',', ' ') }}\"
                                                                             aria-valuemin=\"0\" aria-valuemax=\"100\"
                                                                             style=\"width: {{ chantier.progression|number_format(0, ',', ' ') }}%\"></div>
                                                                    </div>
                                                                </td>

                                                                <td class=\"text-center\">{{ chantier.progression|number_format(0, ',', ' ') }}
                                                                    %
                                                                </td>
                                                            </tr>
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endif %}
                                            {% endif %}
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-pri shadow\" style=\"border-left: 2px solid #E91E63\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingOne_1\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed col-white outai\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseOne_1\" aria-expanded=\"false\"
                                   aria-controls=\"collapseOne_1\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Chantiers
                                    en cours<span
                                            class=\"badge bg-pink\"
                                            style=\"float: right !important;\">{{ countEncours }}</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseOne_1\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingOne_1\">
                            <div class=\"panel-body\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow: scroll\">
                                    <table class=\"table-bordered shadow display nowrape\" id=\"listeChantiersCours\"
                                           style=\"width:100%\">
                                        <thead>
                                        <tr class=\"text-gray-600 text-center\">
                                            <th class=\"col-blue-grey\">CHANTIERS / CLIENT</th>
                                            <th>CLIENT</th>
                                            <th class=\"text-center\">DÉBUT</th>
                                            <th class=\"text-center\">FIN</th>
                                            <th>SUPERVISEURS</th>
                                            <th class=\"text-center\">PROGRESSION</th>
                                            <th class=\"text-center\"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% set check = 0 %}
                                        {% for client in clients %}
                                            {% if client.type is null %}
                                                {% if client.corbeille is null %}
                                                    {% for chantier in client.chantiers %}
                                                        {% if chantier.corbeille is null  and chantier.etat == \"encours\" %}
                                                            <tr>
                                                                <td style=\"padding-left: 20px !important;\">
                                                                    <a href=\"{{ path('gestion', {'id': chantier.id}) }}\"
                                                                       title=\"{{ chantier.client.nomclient|upper }}|{{ chantier.nomchantier|upper }}\">
                                                                        {% if chantier.sous is not null %}
                                                                            <span class=\"badge bg-orange\">SC</span>
                                                                        {% endif %}
                                                                        <span class=\"col-blue font-bold\">{{ chantier.nomchantier|upper }}
                                                                    </a>
                                                                </td>
                                                                <td class=\"font-bold\">{{ client.nomclient|upper }}</td>
                                                                <td class=\"text-center\">{{ chantier.ddebut|date('d/m/Y') }}</td>
                                                                <td class=\"text-center\">{{ chantier.dfin|date('d/m/Y') }}</td>
                                                                <td>
                                                                    {% for superviseur in chantier.superviseurs %}
                                                                        <span class=\"pri m-l-5\"><a
                                                                                    href=\"{{ path('upSuperviseur', {'idchantier': chantier.id, 'idsup': superviseur.id}) }}\"
                                                                                    title=\"Supprimer\"
                                                                                    class=\"sholigne\"><i
                                                                                        class=\"material-icons col-pink\"
                                                                                        style=\"font-size: 18px;float: left\">highlight_off</i></a>{{ superviseur.noms }}</span>
                                                                        <br>
                                                                    {% endfor %}
                                                                </td>
                                                                <td>
                                                                    <div class=\"progress\">
                                                                        <div class=\"progress-bar bg-green\"
                                                                             role=\"progressbar\"
                                                                             aria-valuenow=\" {{ chantier.progression|number_format(0, ',', ' ') }}\"
                                                                             aria-valuemin=\"0\" aria-valuemax=\"100\"
                                                                             style=\"width: {{ chantier.progression|number_format(0, ',', ' ') }}%\"></div>
                                                                    </div>
                                                                </td>

                                                                <td class=\"text-center\">{{ chantier.progression|number_format(0, ',', ' ') }}
                                                                    %
                                                                </td>
                                                            </tr>
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endif %}
                                            {% endif %}
                                        {% endfor %}
                                        </tbody>
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
                    <div class=\"panel panel-pri shadow\" style=\"border-left: 2px solid #FF9800; margin-top: 20px !important\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingOneSS\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed outai  col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseOneSS\" aria-expanded=\"false\"
                                   aria-controls=\"collapseOne_1\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Chantiers
                                    | Sous-chantiers<span
                                            class=\"badge bg-pink\"
                                            style=\"float: right !important;\">{{ countSous }}</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseOneSS\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingOneSS\">
                            <div class=\"panel-body\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px\">
                                    <table class=\"table-bordered  display nowrape\" style=\"width: 100%\"
                                           id=\"listeSous\">
                                        <thead>
                                        <tr class=\"text-gray-600 text-center\">
                                            <th class=\"col-blue-grey\">CHANTIERS</th>
                                            <th>CLIENT</th>
                                            <th class=\"text-center\">DÉBUT</th>
                                            <th class=\"text-center\">FIN</th>
                                            <th>SUPERVISEURS</th>
                                            <th>ÉTAT</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% set check = 0 %}
                                        {% for client in clients %}
                                            {% for chantier in client.chantiers %}
                                                {% if chantier.archiver != 'oui' %}
                                                    {% if chantier.sous is null %}
                                                        {% if chantier.corbeille is null %}
                                                            {% for pro in chantier.chantiers %}
                                                                {% set count = 0 %}
                                                                {% set progres = 0 %}
                                                                {% for planning in pro.plannings %}
                                                                    {% set count = count + 1 %}
                                                                    {% set progres = progres + planning.progression %}
                                                                {% endfor %}
                                                                <tr>
                                                                    <td style=\"padding-left: 20px !important;\">
                                                                        <a href=\"{{ path('gestion', {'id': pro.id}) }}\"
                                                                           class=\"font-bold\"
                                                                           title=\"{{ pro.sous.nomchantier|upper }}|{{ pro.nomchantier|upper }}\">
                                                                            {{ pro.nomchantier|upper }}
                                                                        </a>
                                                                    </td>
                                                                    <td>
                                                                        <a href=\"{{ path('gestion', {'id': chantier.id}) }}\"
                                                                           class=\"font-bold col-pink\">{{ client.nomclient|upper }}
                                                                            | {{ chantier.nomchantier|upper }}</a></td>

                                                                    <td class=\"text-center\">{{ pro.ddebut|date('d/m/Y') }}</td>
                                                                    <td class=\"text-center\">{{ pro.dfin|date('d/m/Y') }}</td>
                                                                    <td>
                                                                        {% for superviseur in pro.superviseurs %}
                                                                            <span class=\"pri m-l-5\"><a
                                                                                        href=\"{{ path('upSuperviseur', {'idchantier': pro.id, 'idsup': superviseur.id}) }}\"
                                                                                        title=\"Supprimer\"
                                                                                        class=\"sholigne\"><i
                                                                                            class=\"material-icons col-pink\"
                                                                                            style=\"font-size: 18px;float: left\">highlight_off</i></a>{{ superviseur.noms }}</span>
                                                                            <br>
                                                                        {% endfor %}
                                                                    </td>
                                                                    <td>
                                                                        <div class=\"progress\">
                                                                            <div class=\"progress-bar bg-green\"
                                                                                 role=\"progressbar\"
                                                                                 aria-valuenow=\" {{ chantier.progression|number_format(0, ',', ' ') }}\"
                                                                                 aria-valuemin=\"0\" aria-valuemax=\"100\"
                                                                                 style=\"width: {{ chantier.progression|number_format(0, ',', ' ') }}%\"></div>
                                                                        </div>
                                                                    </td>

                                                                    <td class=\"text-center\">{{ chantier.progression|number_format(0, ',', ' ') }}
                                                                        %
                                                                    </td>
                                                                </tr>
                                                            {% endfor %}
                                                        {% endif %}
                                                    {% endif %}
                                                {% endif %}
                                            {% endfor %}
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-pri shadow\"  style=\"border-left: 2px solid #79A807\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingOne_1\">
                            <h5 class=\"panel-title\">
                                <a class=\"collapsed col-white outai\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseCHTT\" aria-expanded=\"false\"
                                   aria-controls=\"collapseCHTT\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Tous
                                    les chantiers<span
                                            class=\"badge bg-pink\"
                                            style=\"float: right !important;\">{{ countTout }}</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseCHTT\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingCHTT\">
                            <div class=\"panel-body\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px\">
                                    <table class=\"table-bordered  display nowrape\" style=\"width: 100%\"
                                           id=\"listeTout\">
                                        <thead>
                                        <tr class=\"text-gray-600 text-center\">
                                            <th class=\"col-blue-grey mw250\">CHANTIERS</th>
                                            <th>CLIENT</th>
                                            <th class=\"text-center\">DÉBUT</th>
                                            <th class=\"text-center\">FIN</th>
                                            <th>SUPERVISEURS</th>
                                            <th class=\"text-center\">ETAT</th>
                                            <th class=\"text-center\"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% set check = 0 %}
                                        {% for client in clients %}
                                            {% if client.type is null %}
                                                {% if client.corbeille is null %}
                                                    {% for chantier in client.chantiers %}
                                                        {% set count = 0 %}
                                                        {% set progres = 0 %}
                                                        {% if chantier.corbeille is null %}
                                                            {% for planning in pro.plannings %}
                                                                {% set count = count + 1 %}
                                                                {% set progres = progres + planning.progression %}
                                                            {% endfor %}
                                                            <tr>
                                                                <td style=\"padding-left: 20px !important;\">
                                                                    <a href=\"{{ path('gestion', {'id': chantier.id}) }}\"
                                                                       title=\"{{ chantier.client.nomclient|upper }}|{{ chantier.nomchantier|upper }}\">
                                                                        {% if chantier.sous is not null %}
                                                                            <span class=\"badge bg-orange\">SC</span>
                                                                        {% endif %}
                                                                        <span class=\"col-blue font-bold\">{{ chantier.nomchantier|upper }}
                                                                    </a>
                                                                </td>
                                                                <td>{{ client.nomclient|upper }}</td>
                                                                <td class=\"text-center\">{{ chantier.ddebut|date('d/m/Y') }}</td>
                                                                <td class=\"text-center\">{{ chantier.dfin|date('d/m/Y') }}</td>
                                                                <td>
                                                                    {% for superviseur in chantier.superviseurs %}
                                                                        <span class=\"pri m-l-5\"><a
                                                                                    href=\"{{ path('upSuperviseur', {'idchantier': chantier.id, 'idsup': superviseur.id}) }}\"
                                                                                    title=\"Supprimer\"
                                                                                    class=\"sholigne\"><i
                                                                                        class=\"material-icons col-pink\"
                                                                                        style=\"font-size: 18px;float: left\">highlight_off</i></a>{{ superviseur.noms }}</span>
                                                                        <br>
                                                                    {% endfor %}
                                                                </td>
                                                                <td>
                                                                    <div class=\"progress\">
                                                                        <div class=\"progress-bar bg-green\"
                                                                             role=\"progressbar\"
                                                                             aria-valuenow=\" {{ chantier.progression|number_format(0, ',', ' ') }}\"
                                                                             aria-valuemin=\"0\" aria-valuemax=\"100\"
                                                                             style=\"width: {{ chantier.progression|number_format(0, ',', ' ') }}%\"></div>
                                                                    </div>
                                                                </td>

                                                                <td class=\"text-center\">{{ chantier.progression|number_format(0, ',', ' ') }}
                                                                    %
                                                                </td>
                                                            </tr>
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endif %}
                                            {% endif %}
                                        {% endfor %}
                                        </tbody>
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
                                <a class=\"collapsed col-white outai\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseDeu\" aria-expanded=\"false\"
                                   aria-controls=\"collapseDeu\">
                                    <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Contacts<span
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
                                           id=\"daCon\">
                                        <thead>
                                        <tr class=\"text-center\">
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
                                                        <td class=\"font-bold\" style=\"padding-left: 20px !important;\">{{ contact.contact|upper }}</td>
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

                    {% set countPers = 0 %}
                    {% for person in personnels %}
                    {% if person.corbeille is null and person.type != \"personnelle\" %}
                        {% set countPers = countPers + 1 %}
                    {% endif %}
                    {% endfor %}
                    <div class=\"panel panel-pri shadow m-t-5\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingPers\">
                            <h4 class=\"panel-title\">
                                <a class=\"collapsed col-white outai\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordionPers\" href=\"#collapsePers\" aria-expanded=\"false\"
                                   aria-controls=\"collapsePers\">
                                    <i class=\"material-icons text-white\"
                                       style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Le personnel<span
                                            class=\"badge bg-pink\"
                                            style=\"float: right !important;\">{{ countPers }}</span>
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapsePers\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingPers\">
                            <div class=\"panel-body \" style=\"overflow: scroll;\">
                                <div class=\"button-demo\">

                                </div>
                                <div class=\"table-responsive shadow\" style=\"padding: 20px\">
                                    <div class=\"table-responsive shadow\">
                                                    <span id=\"projetvale\"
                                                          style=\"visibility: hidden\">{{ chantier.id }}</span>
                                        <h4 class=\"bolo700 col-blue\">LE PERSONNEL</h4>
                                        <table class=\"table-striped table-bordered display nowrap\"
                                               style=\"width: 100%;\" id=\"dataPersonTech\">
                                            <thead>
                                            <tr class=\"text-center\">
                                                <th>NOM & PRÉNOMS</th>
                                                <th>PROFESSION</th>
                                                <th>CONTACTS</th>
                                                <th>EMAIL</th>
                                                <th>SALAIRE</th>
                                                <th>AJOUTER PAR</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {% for person in personnels %}
                                                {% if person.corbeille is null and person.type != \"personnelle\" %}
                                                    <tr>
                                                        <td class=\"text-left font-bold mw300\">{{ person.noms|upper }}</td>
                                                        <td class=\"text-left\">{{ person.fonction|upper }}</td>
                                                        <td>{{ person.contact }}</td>
                                                        <td>{{ person.mail }}</td>
                                                        <td class=\"text-right\">{{ person.salaire|number_format(2,',',' ') }}</td>
                                                        <td class=\"text-left col-blue\"><i
                                                                    class=\"fa fa-user col-blue\"></i>&nbsp;
                                                            {% if person.dobyuser is not null %}
                                                                {{ person.dobyuser.nom|upper }}
                                                                &nbsp;{{ person.dobyuser.prenoms|upper }}
                                                            {% endif %}
                                                        </td>
                                                    </tr>
                                                {% endif %}
                                                {% if person.corbeille is null and person.type == \"personnelle\" %}
                                                    <tr>
                                                        <td class=\"col-pink font-bold text-left mw300\">{{ person.noms|upper }}</td>
                                                        <td class=\"text-left mw250\">{{ person.fonction|upper }}</td>
                                                        <td class=\"mw150\">{{ person.contact }}</td>
                                                        <td class=\"mw150\">{{ person.mail }}</td>
                                                        <td class=\"text-right\">-</td>
                                                        <td class=\"text-left col-blue mw250\"><i
                                                                    class=\"fa fa-user col-blue\"></i>&nbsp;
                                                            {% if person.dobyuser is not null %}
                                                                {{ person.dobyuser.nom|upper }}
                                                                &nbsp;{{ person.dobyuser.prenoms|upper }}
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
                    </div>

                </div>
            </div>
        </div>
    </section>


{% endblock %}
", "content/technique.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\technique.html.twig");
    }
}
