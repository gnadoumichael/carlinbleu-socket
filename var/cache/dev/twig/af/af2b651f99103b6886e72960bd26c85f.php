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

/* content/parametre.html.twig */
class __TwigTemplate_e064f288fbb9a72d1c96d2950ef46b4c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/parametre.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/parametre.html.twig"));

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

    <div class=\"modal fade right\" id=\"modalImage\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header text-white bg-blue p-l-20\">
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">AJOUTER UNE IMAGE</h3>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        <form enctype=\"multipart/form-data\" id=\"addImageForm\">
                            <input type=\"hidden\" name=\"token\" value=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addImageToken"), "html", null, true);
        yield "\"/>

                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label m-b--30 pri bolo\">IMPORTER UNE IMAGE</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line col-pink\">
                                            <input type=\"file\" id=\"nomfichier\" name=\"image\" required=\"required\"
                                                   class=\"form-control\">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"text-center\">
                                <input type=\"submit\" id=\"addImageUser\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-pri\">
                                <div type=\"button\" id=\"closeImageUser\"
                                     class=\"btn btn-link waves-effect text-white bg-pink\" data-dismiss=\"modal\">
                                    FERMER
                                </div>
                                <img src=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                     class=\"align-justify\" id=\"loadImageUser\">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalUpdateUser\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header text-white bg-green p-l-20\">
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">MODIFIER MON COMPTE</h3>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
        // line 56
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), 'form_start', ["attr" => ["id" => "updateUsereForm"]]);
        yield "
                        ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "_token", [], "any", false, false, false, 57), 'row');
        yield "
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">Nom</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "nom", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control "]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">Prénoms</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "prenoms", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-control "]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">Entreprise</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "societe", [], "any", false, false, false, 82), 'widget', ["attr" => ["class" => "form-control "]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">Contacts</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "contact", [], "any", false, false, false, 93), 'widget', ["attr" => ["class" => "form-control "]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">E-Mail</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "username", [], "any", false, false, false, 101), 'widget', ["attr" => ["class" => "form-control "]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row clearfix m-b-10\">
                         <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">Adresse</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "adresse", [], "any", false, false, false, 112), 'widget', ["attr" => ["class" => "form-control "]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">Compte contribuable</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 120
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "contribuable", [], "any", false, false, false, 120), 'widget', ["attr" => ["class" => "form-control "]]);
        yield "
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"updateUsere\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect text-white bg-green\">
                            <div type=\"button\" id=\"closeUpdateUsere\"
                                 class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">FERMER
                            </div>
                            <img src=\"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadUpdateUsere\">
                        </div>
                        ";
        // line 137
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalSousCpte\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                ";
        // line 147
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["compte"]) || array_key_exists("compte", $context) ? $context["compte"] : (function () { throw new RuntimeError('Variable "compte" does not exist.', 147, $this->source); })()), "id", [], "any", false, false, false, 147)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 148
            yield "                    <div class=\"modal-header text-white bg-green p-l-20\">
                        <h3 class=\"modal-title\" id=\"defaultModalLabel\">MODIFIER UN SOUS-COMPTE</h3>
                    </div>
                ";
        } else {
            // line 152
            yield "
                    <div class=\"modal-header text-white bg-blue p-l-20\">
                        <h3 class=\"modal-title\" id=\"defaultModalLabel\">AJOUTER UN SOUS-COMPTE</h3>
                    </div>
                ";
        }
        // line 157
        yield "                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
        // line 159
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formcompte"]) || array_key_exists("formcompte", $context) ? $context["formcompte"] : (function () { throw new RuntimeError('Variable "formcompte" does not exist.', 159, $this->source); })()), 'form_start', ["attr" => ["id" => "addSoussForm"]]);
        yield "
                        <input type=\"hidden\" name=\"token\" value=\"";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addSousToken"), "html", null, true);
        yield "\"/>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">Nom</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 166
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formcompte"]) || array_key_exists("formcompte", $context) ? $context["formcompte"] : (function () { throw new RuntimeError('Variable "formcompte" does not exist.', 166, $this->source); })()), "nom", [], "any", false, false, false, 166), 'widget', ["attr" => ["class" => "form-control cpt"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">Prénoms</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 174
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formcompte"]) || array_key_exists("formcompte", $context) ? $context["formcompte"] : (function () { throw new RuntimeError('Variable "formcompte" does not exist.', 174, $this->source); })()), "prenoms", [], "any", false, false, false, 174), 'widget', ["attr" => ["class" => "form-control cpt"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">Email</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 185
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formcompte"]) || array_key_exists("formcompte", $context) ? $context["formcompte"] : (function () { throw new RuntimeError('Variable "formcompte" does not exist.', 185, $this->source); })()), "username", [], "any", false, false, false, 185), 'widget', ["attr" => ["class" => "form-control cpt"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">Contacts</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 196
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formcompte"]) || array_key_exists("formcompte", $context) ? $context["formcompte"] : (function () { throw new RuntimeError('Variable "formcompte" does not exist.', 196, $this->source); })()), "contact", [], "any", false, false, false, 196), 'widget', ["attr" => ["class" => "form-control cpt"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">Mot de passe</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 207
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formcompte"]) || array_key_exists("formcompte", $context) ? $context["formcompte"] : (function () { throw new RuntimeError('Variable "formcompte" does not exist.', 207, $this->source); })()), "password", [], "any", false, false, false, 207), 'widget', ["attr" => ["class" => "form-control cpt", "minlength" => "8"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">Confirmer le mot de passe</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 215
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formcompte"]) || array_key_exists("formcompte", $context) ? $context["formcompte"] : (function () { throw new RuntimeError('Variable "formcompte" does not exist.', 215, $this->source); })()), "confirm_passe", [], "any", false, false, false, 215), 'widget', ["attr" => ["class" => "form-control cpt", "minlength" => "8"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>

                        ";
        // line 221
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["compte"]) || array_key_exists("compte", $context) ? $context["compte"] : (function () { throw new RuntimeError('Variable "compte" does not exist.', 221, $this->source); })()), "id", [], "any", false, false, false, 221)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 222
            yield "                            <div class=\"text-center\">
                                <input type=\"submit\" id=\"updss\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect text-white bg-green\">
                                <div type=\"button\" id=\"closeupdss\"
                                     class=\"btn btn-link waves-effect text-white bg-pink\"
                                     data-dismiss=\"modal\">FERMER
                                </div>
                                <img src=\"";
            // line 229
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
            yield "\" style=\"width: 50px; display:none;\"
                                     class=\"align-justify\" id=\"loadupdss\">
                            </div>
                        ";
        } else {
            // line 233
            yield "                            <div class=\"text-center\">
                                <input type=\"submit\" id=\"addss\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-blue\">
                                <div type=\"button\" id=\"closeaddss\"
                                     class=\"btn btn-link waves-effect text-white bg-pink\"
                                     data-dismiss=\"modal\">FERMER
                                </div>
                                <img src=\"";
            // line 240
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
            yield "\" style=\"width: 50px; display:none;\"
                                     class=\"align-justify\" id=\"loadaddss\">
                            </div>
                        ";
        }
        // line 244
        yield "
                        ";
        // line 245
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formcompte"]) || array_key_exists("formcompte", $context) ? $context["formcompte"] : (function () { throw new RuntimeError('Variable "formcompte" does not exist.', 245, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>

    <input type=\"text\" class=\"hide\" id=\"sousid\" value=\"";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["compte"]) || array_key_exists("compte", $context) ? $context["compte"] : (function () { throw new RuntimeError('Variable "compte" does not exist.', 252, $this->source); })()), "id", [], "any", false, false, false, 252), "html", null, true);
        yield "\">
    <input type=\"text\" class=\"hide\" id=\"idcompte\" value=\"";
        // line 253
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["idcompte"]) || array_key_exists("idcompte", $context) ? $context["idcompte"] : (function () { throw new RuntimeError('Variable "idcompte" does not exist.', 253, $this->source); })()), "html", null, true);
        yield "\">

    <section class=\"content\" style=\"margin-top: 80px !important;\">
        <div class=\"container-fluid\">
            <div class=\"row clearfix\">
                <div class=\"col-md-8\">
                    <div class=\"card shadow mb-4 bg-white\" style=\" padding:10px\">
                        <h5 class=\"col-black bolo700\">MON COMPTE</h5>
                        <hr class=\"bg-pri\" style=\"width: 100%; margin-top: -5px\">
                        <table class=\"table-striped\" style=\"width: 100%\">
                            <tr>
                                <td colspan=\"2\" class=\"text-center\">
                                    ";
        // line 265
        if ((null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 265, $this->source); })()), "user", [], "any", false, false, false, 265), "photo", [], "any", false, false, false, 265))) {
            // line 266
            yield "                                        <a href=\"#\" id=\"addUsa\">
                                            <img src=\"/images/personnel/user.png\" class=\"img-circle\" width=\"150\"
                                                 height=\"150\">
                                        </a>
                                    ";
        } else {
            // line 271
            yield "                                        <a href=\"#\" id=\"addUsa\">
                                            <img src=\"/gallery/";
            // line 272
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 272, $this->source); })()), "user", [], "any", false, false, false, 272), "photo", [], "any", false, false, false, 272), "html", null, true);
            yield "\" width=\"150\" height=\"150\"
                                                 class=\"img-circle\">
                                        </a>
                                    ";
        }
        // line 276
        yield "                                </td>
                            </tr>
                            <tr>
                                <td class=\"pri\">Nom & Prénoms</td>
                                <td class=\"col-black\">";
        // line 280
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 280, $this->source); })()), "nom", [], "any", false, false, false, 280), "html", null, true);
        yield "
                                    ";
        // line 281
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 281, $this->source); })()), "prenoms", [], "any", false, false, false, 281), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <td class=\"pri\">Raison sociale</td>
                                <td class=\"col-black\">";
        // line 285
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 285, $this->source); })()), "societe", [], "any", false, false, false, 285), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <td class=\"pri\">Contact</td>
                                <td class=\"col-black\">";
        // line 289
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 289, $this->source); })()), "contact", [], "any", false, false, false, 289), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <td class=\"pri\">E-mail</td>
                                <td class=\"col-black\">";
        // line 293
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 293, $this->source); })()), "username", [], "any", false, false, false, 293), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <td class=\"pri\">Adresse</td>
                                <td class=\"col-black\">";
        // line 297
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 297, $this->source); })()), "adresse", [], "any", false, false, false, 297), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <td class=\"pri\">Pays</td>
                                <td class=\"col-black\">";
        // line 301
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 301, $this->source); })()), "pays", [], "any", false, false, false, 301)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 301, $this->source); })()), "pays", [], "any", false, false, false, 301), "nation", [], "any", false, false, false, 301), "html", null, true);
        }
        yield "</td>
                            </tr>
                            <tr>
                                <td class=\"pri\">C. contribuable</td>
                                <td class=\"col-black\">";
        // line 305
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 305, $this->source); })()), "contribuable", [], "any", false, false, false, 305), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <td colspan=\"2\" class=\"text-center\">
                                    <input type=\"submit\" id=\"updateUser\" value=\"MODIFIER\"
                                           class=\"btn btn-link waves-effect text-white bg-green\">
                                </td>
                            </tr>
                        </table>
                    </div>
                    ";
        // line 315
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 315, $this->source); })()), "user", [], "any", false, false, false, 315), "compte", [], "any", false, false, false, 315) == null)) {
            // line 316
            yield "                        <div class=\"card shadow mb-4 bg-white\" style=\" padding:10px\">
                            <h5 class=\"col-black bolo700\">DROITS D'ACCÈS DU COMPTE ";
            // line 317
            if ((($tmp =  !(null === (isset($context["userdroit"]) || array_key_exists("userdroit", $context) ? $context["userdroit"] : (function () { throw new RuntimeError('Variable "userdroit" does not exist.', 317, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "| <span class=\"col-pink\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["userdroit"]) || array_key_exists("userdroit", $context) ? $context["userdroit"] : (function () { throw new RuntimeError('Variable "userdroit" does not exist.', 317, $this->source); })()), "nom", [], "any", false, false, false, 317)), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["userdroit"]) || array_key_exists("userdroit", $context) ? $context["userdroit"] : (function () { throw new RuntimeError('Variable "userdroit" does not exist.', 317, $this->source); })()), "prenoms", [], "any", false, false, false, 317)), "html", null, true);
                yield "</span>";
            }
            yield "</h5>
                            ";
            // line 318
            if ((($tmp =  !(null === (isset($context["userdroit"]) || array_key_exists("userdroit", $context) ? $context["userdroit"] : (function () { throw new RuntimeError('Variable "userdroit" does not exist.', 318, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 319
                yield "                                <form id=\"addDroitUserForm\">
                                    <p style=\"text-align: center\"><input type=\"submit\" id=\"saveDroit\" value=\"VALIDER\" class=\"btn btn-link waves-effect text-white bg-blue\"></p>
                                    <input type=\"hidden\" name=\"token\" value=\"";
                // line 321
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addDroitUserToken"), "html", null, true);
                yield "\"/>
                                    <table class=\"table-bordered\" style=\"width: 100%\">
                                        <tr>
                                        <td  colspan=\"3\" class=\"col-pink bolo700 bg-light\">GESTION DES ADMINISTRATEURS</td>
                                        ";
                // line 325
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["droits"]) || array_key_exists("droits", $context) ? $context["droits"] : (function () { throw new RuntimeError('Variable "droits" does not exist.', 325, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["dre"]) {
                    // line 326
                    yield "
                                            ";
                    // line 327
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "ggroup", [], "any", false, false, false, 327) == "admin")) {
                        // line 328
                        yield "                                                <tr>
                                                    <td style=\"padding-left: 20px !important;\">
                                                        <label class=\"col-black\"
                                                               for=\"admin\">&raquo; ";
                        // line 331
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "afaire", [], "any", false, false, false, 331)), "html", null, true);
                        yield "</label>
                                                    </td>
                                                    <td class=\"col-blue-grey text-center\">
                                                        <select id=\"admin\" name=\"admin\" class=\"col-blue\">
                                                            <option value=\"oui\"
                                                                    ";
                        // line 336
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 336) == "oui")) {
                            yield "selected=\"selected\"";
                        }
                        yield ">
                                                                Oui
                                                            </option>
                                                            <option value=\"non\"
                                                                    ";
                        // line 340
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 340) == "non")) {
                            yield "selected=\"selected\"";
                        }
                        yield ">
                                                                Non
                                                            </option>
                                                        </select>
                                                    </td>
                                                    <td class=\"col-blue-grey\">
                                                        ";
                        // line 346
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 346) == "oui")) {
                            yield "Administrateur de compte";
                        }
                        // line 347
                        yield "                                                        ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 347) == "non")) {
                            yield "Pas administrateur de compte";
                        }
                        // line 348
                        yield "                                                    </td>
                                                </tr>
                                            ";
                    }
                    // line 351
                    yield "
                                            ";
                    // line 352
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "ggroup", [], "any", false, false, false, 352) == "comptable")) {
                        // line 353
                        yield "                                                <tr>
                                                    <td style=\"padding-left: 20px !important;\">
                                                        <label class=\"col-black\"
                                                               for=\"admin\">&raquo; ";
                        // line 356
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "afaire", [], "any", false, false, false, 356)), "html", null, true);
                        yield "</label>
                                                    </td>
                                                    <td class=\"col-blue-grey text-center\">
                                                        <select id=\"comptable\" name=\"comptable\" class=\"col-blue\">
                                                            <option value=\"oui\"
                                                                    ";
                        // line 361
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 361) == "oui")) {
                            yield "selected=\"selected\"";
                        }
                        yield ">
                                                                Oui
                                                            </option>
                                                            <option value=\"non\"
                                                                    ";
                        // line 365
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 365) == "non")) {
                            yield "selected=\"selected\"";
                        }
                        yield ">
                                                                Non
                                                            </option>
                                                        </select>
                                                    </td>
                                                    <td class=\"col-blue-grey\">
                                                        ";
                        // line 371
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 371) == "oui")) {
                            yield "Ce compte gère la comptabilté";
                        }
                        // line 372
                        yield "                                                        ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 372) == "non")) {
                            yield "Ce compte ne gère pas la comptabilté";
                        }
                        // line 373
                        yield "                                                    </td>
                                                </tr>
                                            ";
                    }
                    // line 376
                    yield "
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['dre'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 378
                yield "                                        </tr>
                                        <tr>
                                        <td  colspan=\"3\" class=\"col-pink bolo700 bg-light\">GESTION DES CLIENTS</td>
                                        ";
                // line 381
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["droits"]) || array_key_exists("droits", $context) ? $context["droits"] : (function () { throw new RuntimeError('Variable "droits" does not exist.', 381, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["dre"]) {
                    // line 382
                    yield "                                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "ggroup", [], "any", false, false, false, 382) == "client")) {
                        // line 383
                        yield "                                                <tr>
                                                    <td style=\"padding-left: 20px !important;\">
                                                        <label class=\"col-black\">&raquo; ";
                        // line 385
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "afaire", [], "any", false, false, false, 385)), "html", null, true);
                        yield "</label>
                                                    </td>
                                                    <td class=\"col-blue-grey text-center\">
                                                        <select id=";
                        // line 388
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 388), "html", null, true);
                        yield " name=";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 388), "html", null, true);
                        yield " class=\"col-blue\">
                                                            <option value=\"oui\"
                                                                    ";
                        // line 390
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 390) == "oui")) {
                            yield "selected=\"selected\"";
                        }
                        yield ">
                                                                Oui
                                                            </option>
                                                            <option value=\"non\"
                                                                    ";
                        // line 394
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 394) == "non")) {
                            yield "selected=\"selected\"";
                        }
                        yield ">
                                                                Non
                                                            </option>
                                                        </select>
                                                    </td>
                                                    <td class=\"col-blue-grey\">
                                                        ";
                        // line 400
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 400) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 400) == "add_client"))) {
                            yield "Ce compte peut ajouter un client";
                        }
                        // line 401
                        yield "                                                        ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 401) == "non") && (CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 401) == "add_client"))) {
                            yield "Ce compte ne peut pas ajouter un client";
                        }
                        // line 402
                        yield "
                                                        ";
                        // line 403
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 403) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 403) == "upd_client"))) {
                            yield "Ce compte peut modifier un client";
                        }
                        // line 404
                        yield "                                                        ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 404) == "non") && (CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 404) == "upd_client"))) {
                            yield "Ce compte ne peut pas modifier un client";
                        }
                        // line 405
                        yield "
                                                        ";
                        // line 406
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 406) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 406) == "del_client"))) {
                            yield "Ce compte peut supprimer un client";
                        }
                        // line 407
                        yield "                                                        ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 407) == "non") && (CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 407) == "del_client"))) {
                            yield "Ce compte ne peut pas supprimer un client";
                        }
                        // line 408
                        yield "
                                                    </td>
                                                </tr>
                                            ";
                    }
                    // line 412
                    yield "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['dre'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 413
                yield "                                        </tr>
                                        <tr>
                                        <td  colspan=\"3\" class=\"col-pink bolo700 bg-light\">GESTION DES CHANTIERS</td>
                                        ";
                // line 416
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["droits"]) || array_key_exists("droits", $context) ? $context["droits"] : (function () { throw new RuntimeError('Variable "droits" does not exist.', 416, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["dre"]) {
                    // line 417
                    yield "                                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "ggroup", [], "any", false, false, false, 417) == "chantier")) {
                        // line 418
                        yield "                                                <tr>
                                                    <td style=\"padding-left: 20px !important;\">
                                                        <label class=\"col-black\">&raquo; ";
                        // line 420
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "afaire", [], "any", false, false, false, 420)), "html", null, true);
                        yield "</label>
                                                    </td>
                                                    <td class=\"col-blue-grey text-center\">
                                                        <select id=";
                        // line 423
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 423), "html", null, true);
                        yield " name=";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 423), "html", null, true);
                        yield " class=\"col-blue\">
                                                            <option value=\"oui\"
                                                                    ";
                        // line 425
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 425) == "oui")) {
                            yield "selected=\"selected\"";
                        }
                        yield ">
                                                                Oui
                                                            </option>
                                                            <option value=\"non\"
                                                                    ";
                        // line 429
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 429) == "non")) {
                            yield "selected=\"selected\"";
                        }
                        yield ">
                                                                Non
                                                            </option>
                                                        </select>
                                                    </td>
                                                    <td class=\"col-blue-grey\">
                                                        ";
                        // line 435
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 435) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 435) == "add_chantier"))) {
                            yield "Ce compte peut ajouter un chantier";
                        }
                        // line 436
                        yield "                                                        ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 436) == "non") && (CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 436) == "add_chantier"))) {
                            yield "Ce compte ne peut pas ajouter un chantier";
                        }
                        // line 437
                        yield "
                                                        ";
                        // line 438
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 438) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 438) == "upd_chantier"))) {
                            yield "Ce compte peut modifier un chantier";
                        }
                        // line 439
                        yield "                                                        ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 439) == "non") && (CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 439) == "upd_chantier"))) {
                            yield "Ce compte ne peut pas modifier un chantier";
                        }
                        // line 440
                        yield "
                                                        ";
                        // line 441
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 441) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 441) == "del_chantier"))) {
                            yield "Ce compte peut supprimer un chantier";
                        }
                        // line 442
                        yield "                                                        ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 442) == "non") && (CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 442) == "del_chantier"))) {
                            yield "Ce compte ne peut pas supprimer un chantier";
                        }
                        // line 443
                        yield "

                                                        ";
                        // line 445
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 445) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 445) == "voir_page_chantier"))) {
                            yield "Ce compte peut consulter les chantiers ";
                        }
                        // line 446
                        yield "                                                        ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 446) == "non") && (CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 446) == "voir_page_chantier"))) {
                            yield "Ce compte ne peut pas consulter les chantiers ";
                        }
                        // line 447
                        yield "
                                                    </td>
                                                </tr>
                                            ";
                    }
                    // line 451
                    yield "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['dre'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 452
                yield "                                        </tr>
                                        <tr>
                                        <td  colspan=\"3\" class=\"col-pink bolo700 bg-light\">GESTION DES DEVIS</td>
                                        ";
                // line 455
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["droits"]) || array_key_exists("droits", $context) ? $context["droits"] : (function () { throw new RuntimeError('Variable "droits" does not exist.', 455, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["dre"]) {
                    // line 456
                    yield "                                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "ggroup", [], "any", false, false, false, 456) == "devis")) {
                        // line 457
                        yield "                                                <tr>
                                                    <td style=\"padding-left: 20px !important;\">
                                                        <label class=\"col-black\">&raquo; ";
                        // line 459
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "afaire", [], "any", false, false, false, 459)), "html", null, true);
                        yield "</label>
                                                    </td>
                                                    <td class=\"col-blue-grey text-center\">
                                                        <select id=";
                        // line 462
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 462), "html", null, true);
                        yield " name=";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 462), "html", null, true);
                        yield " class=\"col-blue\">
                                                            <option value=\"oui\"
                                                                    ";
                        // line 464
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 464) == "oui")) {
                            yield "selected=\"selected\"";
                        }
                        yield ">
                                                                Oui
                                                            </option>
                                                            <option value=\"non\"
                                                                    ";
                        // line 468
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 468) == "non")) {
                            yield "selected=\"selected\"";
                        }
                        yield ">
                                                                Non
                                                            </option>
                                                        </select>
                                                    </td>
                                                    <td class=\"col-blue-grey\">
                                                        ";
                        // line 474
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 474) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 474) == "add_devis"))) {
                            yield "Ce compte peut créer un devis";
                        }
                        // line 475
                        yield "                                                        ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 475) == "non") && (CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 475) == "add_devis"))) {
                            yield "Ce compte ne peut pas créer un devis";
                        }
                        // line 476
                        yield "
                                                        ";
                        // line 477
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 477) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 477) == "upd_devis"))) {
                            yield "Ce compte peut modifier un devis";
                        }
                        // line 478
                        yield "                                                        ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 478) == "non") && (CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 478) == "upd_devis"))) {
                            yield "Ce compte ne peut pas modifier un devis";
                        }
                        // line 479
                        yield "
                                                        ";
                        // line 480
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 480) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 480) == "del_devis"))) {
                            yield "Ce compte peut supprimer un devis";
                        }
                        // line 481
                        yield "                                                        ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 481) == "non") && (CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 481) == "del_devis"))) {
                            yield "Ce compte ne peut pas supprimer un devis";
                        }
                        // line 482
                        yield "
                                                        ";
                        // line 483
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 483) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 483) == "voir_devis"))) {
                            yield "Ce compte peut consulter un devis";
                        }
                        // line 484
                        yield "                                                        ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 484) == "non") && (CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 484) == "voir_devis"))) {
                            yield "Ce compte ne peut pas consulter un devis";
                        }
                        // line 485
                        yield "
                                                        ";
                        // line 486
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 486) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 486) == "valide_devis"))) {
                            yield "Ce compte peut valider un devis";
                        }
                        // line 487
                        yield "                                                        ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 487) == "non") && (CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 487) == "valide_devis"))) {
                            yield "Ce compte ne peut pas valider un devis";
                        }
                        // line 488
                        yield "
                                                        ";
                        // line 489
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 489) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 489) == "devalide_devis"))) {
                            yield "Ce compte peut dévalider un devis";
                        }
                        // line 490
                        yield "                                                        ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 490) == "non") && (CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 490) == "devalide_devis"))) {
                            yield "Ce compte ne peut pas dévalider un devis";
                        }
                        // line 491
                        yield "
                                                    </td>
                                                </tr>
                                            ";
                    }
                    // line 495
                    yield "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['dre'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 496
                yield "                                        </tr>
                                        <tr>
                                            <td  colspan=\"3\" class=\"col-pink bolo700 bg-light\">GESTION DES BESOINS</td>
                                            ";
                // line 499
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["droits"]) || array_key_exists("droits", $context) ? $context["droits"] : (function () { throw new RuntimeError('Variable "droits" does not exist.', 499, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["dre"]) {
                    // line 500
                    yield "                                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "ggroup", [], "any", false, false, false, 500) == "besoin")) {
                        // line 501
                        yield "                                        <tr>
                                            <td style=\"padding-left: 20px !important;\">
                                                <label class=\"col-black\">&raquo; ";
                        // line 503
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "afaire", [], "any", false, false, false, 503)), "html", null, true);
                        yield "</label>
                                            </td>
                                            <td class=\"col-blue-grey text-center\">
                                                <select id=";
                        // line 506
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 506), "html", null, true);
                        yield " name=";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 506), "html", null, true);
                        yield " class=\"col-blue\">
                                                    <option value=\"oui\"
                                                            ";
                        // line 508
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 508) == "oui")) {
                            yield "selected=\"selected\"";
                        }
                        yield ">
                                                        Oui
                                                    </option>
                                                    <option value=\"non\"
                                                            ";
                        // line 512
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 512) == "non")) {
                            yield "selected=\"selected\"";
                        }
                        yield ">
                                                        Non
                                                    </option>
                                                </select>
                                            </td>
                                            <td class=\"col-blue-grey\">
                                                ";
                        // line 518
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 518) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 518) == "add_besoin"))) {
                            yield "Ce compte peut ajouter des besoins";
                        }
                        // line 519
                        yield "                                                ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 519) == "non") && (CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 519) == "add_besoin"))) {
                            yield "Ce compte ne peut ajouter des besoins";
                        }
                        // line 520
                        yield "
                                                ";
                        // line 521
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 521) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 521) == "upd_besoin"))) {
                            yield "Ce compte peut modifier des besoins";
                        }
                        // line 522
                        yield "                                                ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 522) == "non") && (CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 522) == "upd_besoin"))) {
                            yield "Ce compte ne peut pas modifier des besoins";
                        }
                        // line 523
                        yield "
                                                ";
                        // line 524
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 524) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 524) == "del_besoin"))) {
                            yield "Ce compte peut supprimer des besoins";
                        }
                        // line 525
                        yield "                                                ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 525) == "non") && (CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 525) == "del_besoin"))) {
                            yield "Ce compte ne peut pas supprimer des besoins";
                        }
                        // line 526
                        yield "
                                                ";
                        // line 527
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 527) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 527) == "cloturer_besoin"))) {
                            yield "Ce compte peut clotûrer des besoins";
                        }
                        // line 528
                        yield "                                                ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 528) == "non") && (CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 528) == "cloturer_besoin"))) {
                            yield "Ce compte ne peut pas clotûrer des besoins";
                        }
                        // line 529
                        yield "
                                                ";
                        // line 530
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 530) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 530) == "commenter_besoin"))) {
                            yield "Ce compte peut commenter des besoins";
                        }
                        // line 531
                        yield "                                                ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "actions", [], "any", false, false, false, 531) == "non") && (CoreExtension::getAttribute($this->env, $this->source, $context["dre"], "lier", [], "any", false, false, false, 531) == "commenter_besoin"))) {
                            yield "Ce compte ne peut pas commenter des besoins";
                        }
                        // line 532
                        yield "                                            </td>
                                        </tr>
                                        ";
                    }
                    // line 535
                    yield "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['dre'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 536
                yield "                                        </tr>
                                    </table>
                                </form>
                            ";
            }
            // line 540
            yield "                        </div>
                    ";
        }
        // line 542
        yield "                </div>
                <div class=\"col-md-4\">
                    <div class=\"card shadow mb-4 bg-white\" style=\" padding:10px\">
                        <h5 class=\"col-black bolo700\">MODIFIER MON MOT DE PASSE</h5>
                        <hr class=\"bg-pri\" style=\"width: 100%; margin-top: -5px;\">
                        <h5 id=\"messar\" class=\"col-pink text-center bolo600\"></h5>
                        <form id=\"updPassForm\">
                            <input type=\"hidden\" name=\"token\" value=\"";
        // line 549
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("updPassToken"), "html", null, true);
        yield "\"/>

                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label pri m-b--30 bolo600\">ANCIEN MOT DE PASSE</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line col-pink\">
                                            <input type=\"password\" name=\"ancien\" required=\"required\"
                                                   class=\"form-control\">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label m-b--30 pri bolo600\">NOUVEAU MOT DE PASSE</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line col-pink\">
                                            <input type=\"password\" id=\"nouveau\" name=\"nouveau\"
                                                   pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}\" required=\"required\"
                                                   minlength=\"8\" class=\"form-control\">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label m-b--30 pri bolo600\">CONFIRMER NOUVEAU MOT DE PASSE</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line col-pink\">
                                            <input type=\"password\" id=\"confirmer\" name=\"confirmer\"
                                                   pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}\" required=\"required\"
                                                   minlength=\"8\" class=\"form-control\">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"text-center\">
                                <input type=\"submit\" id=\"updPasse\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect text-white bg-green\">
                                <img src=\"";
        // line 592
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                     class=\"align-justify\" id=\"loadUpdPasse\">
                            </div>

                        </form>
                    </div>
                    ";
        // line 598
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 598, $this->source); })()), "user", [], "any", false, false, false, 598), "compte", [], "any", false, false, false, 598) == null)) {
            // line 599
            yield "                        <div class=\"card shadow mb-4 bg-white\" style=\" padding:10px\">
                            <h5 class=\"col-black bolo700\">SOUS-COMPTES</h5>
                            <table class=\"table-bordered\"
                                   style=\"padding: 0; width: 100%\">
                                <tbody>
                                ";
            // line 604
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["comptes"]) || array_key_exists("comptes", $context) ? $context["comptes"] : (function () { throw new RuntimeError('Variable "comptes" does not exist.', 604, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["compte"]) {
                // line 605
                yield "                                    ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["compte"], "corbeille", [], "any", false, false, false, 605))) {
                    // line 606
                    yield "                                        <tr>
                                            <td class=\"col-black bolo600\"><a
                                                        href=\"";
                    // line 608
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("droitcompte", ["idcompte" => CoreExtension::getAttribute($this->env, $this->source, $context["compte"], "id", [], "any", false, false, false, 608)]), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["compte"], "nom", [], "any", false, false, false, 608)), "html", null, true);
                    yield "
                                                    &nbsp;";
                    // line 609
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["compte"], "prenoms", [], "any", false, false, false, 609)), "html", null, true);
                    yield "</a></td>
                                            <td class=\"text-center\"><a
                                                        href=\"";
                    // line 611
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editsouscompte", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["compte"], "id", [], "any", false, false, false, 611)]), "html", null, true);
                    yield "\"><i
                                                            class=\"fa fa fa-edit text-success\"></i></a></td>
                                            <td class=\"text-center\"><a href=\"#\" onclick=\"delcompte(";
                    // line 613
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["compte"], "id", [], "any", false, false, false, 613), "html", null, true);
                    yield ");\"><i
                                                            class=\"fa fa-trash col-pink\"></i></a></td>
                                        </tr>
                                    ";
                }
                // line 617
                yield "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['compte'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 618
            yield "                                <tr>
                                    <td colspan=\"3\" class=\"text-center\">
                                        <input type=\"submit\" id=\"addSousCpte\" value=\"AJOUTER\"
                                               class=\"btn btn-link waves-effect text-white bg-blue\">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    ";
        }
        // line 628
        yield "                </div>
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
        return "content/parametre.html.twig";
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
        return array (  1267 => 628,  1255 => 618,  1249 => 617,  1242 => 613,  1237 => 611,  1232 => 609,  1226 => 608,  1222 => 606,  1219 => 605,  1215 => 604,  1208 => 599,  1206 => 598,  1197 => 592,  1151 => 549,  1142 => 542,  1138 => 540,  1132 => 536,  1126 => 535,  1121 => 532,  1116 => 531,  1112 => 530,  1109 => 529,  1104 => 528,  1100 => 527,  1097 => 526,  1092 => 525,  1088 => 524,  1085 => 523,  1080 => 522,  1076 => 521,  1073 => 520,  1068 => 519,  1064 => 518,  1053 => 512,  1044 => 508,  1037 => 506,  1031 => 503,  1027 => 501,  1024 => 500,  1020 => 499,  1015 => 496,  1009 => 495,  1003 => 491,  998 => 490,  994 => 489,  991 => 488,  986 => 487,  982 => 486,  979 => 485,  974 => 484,  970 => 483,  967 => 482,  962 => 481,  958 => 480,  955 => 479,  950 => 478,  946 => 477,  943 => 476,  938 => 475,  934 => 474,  923 => 468,  914 => 464,  907 => 462,  901 => 459,  897 => 457,  894 => 456,  890 => 455,  885 => 452,  879 => 451,  873 => 447,  868 => 446,  864 => 445,  860 => 443,  855 => 442,  851 => 441,  848 => 440,  843 => 439,  839 => 438,  836 => 437,  831 => 436,  827 => 435,  816 => 429,  807 => 425,  800 => 423,  794 => 420,  790 => 418,  787 => 417,  783 => 416,  778 => 413,  772 => 412,  766 => 408,  761 => 407,  757 => 406,  754 => 405,  749 => 404,  745 => 403,  742 => 402,  737 => 401,  733 => 400,  722 => 394,  713 => 390,  706 => 388,  700 => 385,  696 => 383,  693 => 382,  689 => 381,  684 => 378,  677 => 376,  672 => 373,  667 => 372,  663 => 371,  652 => 365,  643 => 361,  635 => 356,  630 => 353,  628 => 352,  625 => 351,  620 => 348,  615 => 347,  611 => 346,  600 => 340,  591 => 336,  583 => 331,  578 => 328,  576 => 327,  573 => 326,  569 => 325,  562 => 321,  558 => 319,  556 => 318,  546 => 317,  543 => 316,  541 => 315,  528 => 305,  519 => 301,  512 => 297,  505 => 293,  498 => 289,  491 => 285,  484 => 281,  480 => 280,  474 => 276,  467 => 272,  464 => 271,  457 => 266,  455 => 265,  440 => 253,  436 => 252,  426 => 245,  423 => 244,  416 => 240,  407 => 233,  400 => 229,  391 => 222,  389 => 221,  380 => 215,  369 => 207,  355 => 196,  341 => 185,  327 => 174,  316 => 166,  307 => 160,  303 => 159,  299 => 157,  292 => 152,  286 => 148,  284 => 147,  271 => 137,  265 => 134,  248 => 120,  237 => 112,  223 => 101,  212 => 93,  198 => 82,  184 => 71,  173 => 63,  164 => 57,  160 => 56,  138 => 37,  114 => 16,  100 => 4,  87 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}{{ title }}{% endblock %}
{% block body %}


    <div class=\"modal fade right\" id=\"modalImage\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header text-white bg-blue p-l-20\">
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">AJOUTER UNE IMAGE</h3>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        <form enctype=\"multipart/form-data\" id=\"addImageForm\">
                            <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addImageToken') }}\"/>

                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label m-b--30 pri bolo\">IMPORTER UNE IMAGE</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line col-pink\">
                                            <input type=\"file\" id=\"nomfichier\" name=\"image\" required=\"required\"
                                                   class=\"form-control\">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"text-center\">
                                <input type=\"submit\" id=\"addImageUser\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-pri\">
                                <div type=\"button\" id=\"closeImageUser\"
                                     class=\"btn btn-link waves-effect text-white bg-pink\" data-dismiss=\"modal\">
                                    FERMER
                                </div>
                                <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                     class=\"align-justify\" id=\"loadImageUser\">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalUpdateUser\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header text-white bg-green p-l-20\">
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">MODIFIER MON COMPTE</h3>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        {{ form_start(form, {'attr': {'id': 'updateUsereForm'}}) }}
                        {{ form_row(form._token) }}
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">Nom</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(form.nom,{'attr':{'class':'form-control '}}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">Prénoms</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(form.prenoms,{'attr':{'class':'form-control '}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">Entreprise</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(form.societe,{'attr':{'class':'form-control '}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">Contacts</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(form.contact,{'attr':{'class':'form-control '}}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">E-Mail</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(form.username,{'attr':{'class':'form-control '}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row clearfix m-b-10\">
                         <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">Adresse</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(form.adresse,{'attr':{'class':'form-control '}}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">Compte contribuable</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(form.contribuable,{'attr':{'class':'form-control '}}) }}
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"updateUsere\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect text-white bg-green\">
                            <div type=\"button\" id=\"closeUpdateUsere\"
                                 class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">FERMER
                            </div>
                            <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadUpdateUsere\">
                        </div>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalSousCpte\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                {% if compte.id %}
                    <div class=\"modal-header text-white bg-green p-l-20\">
                        <h3 class=\"modal-title\" id=\"defaultModalLabel\">MODIFIER UN SOUS-COMPTE</h3>
                    </div>
                {% else %}

                    <div class=\"modal-header text-white bg-blue p-l-20\">
                        <h3 class=\"modal-title\" id=\"defaultModalLabel\">AJOUTER UN SOUS-COMPTE</h3>
                    </div>
                {% endif %}
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        {{ form_start(formcompte, {'attr': {'id': 'addSoussForm'}}) }}
                        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addSousToken') }}\"/>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">Nom</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formcompte.nom,{'attr':{'class':'form-control cpt'}}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">Prénoms</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formcompte.prenoms,{'attr':{'class':'form-control cpt'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">Email</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formcompte.username,{'attr':{'class':'form-control cpt'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">Contacts</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formcompte.contact,{'attr':{'class':'form-control cpt'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">Mot de passe</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formcompte.password,{'attr':{'class':'form-control cpt','minlength':'8'}}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">Confirmer le mot de passe</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formcompte.confirm_passe,{'attr':{'class':'form-control cpt','minlength':'8'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        {% if compte.id %}
                            <div class=\"text-center\">
                                <input type=\"submit\" id=\"updss\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect text-white bg-green\">
                                <div type=\"button\" id=\"closeupdss\"
                                     class=\"btn btn-link waves-effect text-white bg-pink\"
                                     data-dismiss=\"modal\">FERMER
                                </div>
                                <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                     class=\"align-justify\" id=\"loadupdss\">
                            </div>
                        {% else %}
                            <div class=\"text-center\">
                                <input type=\"submit\" id=\"addss\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-blue\">
                                <div type=\"button\" id=\"closeaddss\"
                                     class=\"btn btn-link waves-effect text-white bg-pink\"
                                     data-dismiss=\"modal\">FERMER
                                </div>
                                <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                     class=\"align-justify\" id=\"loadaddss\">
                            </div>
                        {% endif %}

                        {{ form_end(formcompte) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <input type=\"text\" class=\"hide\" id=\"sousid\" value=\"{{ compte.id }}\">
    <input type=\"text\" class=\"hide\" id=\"idcompte\" value=\"{{ idcompte }}\">

    <section class=\"content\" style=\"margin-top: 80px !important;\">
        <div class=\"container-fluid\">
            <div class=\"row clearfix\">
                <div class=\"col-md-8\">
                    <div class=\"card shadow mb-4 bg-white\" style=\" padding:10px\">
                        <h5 class=\"col-black bolo700\">MON COMPTE</h5>
                        <hr class=\"bg-pri\" style=\"width: 100%; margin-top: -5px\">
                        <table class=\"table-striped\" style=\"width: 100%\">
                            <tr>
                                <td colspan=\"2\" class=\"text-center\">
                                    {% if app.user.photo is null %}
                                        <a href=\"#\" id=\"addUsa\">
                                            <img src=\"/images/personnel/user.png\" class=\"img-circle\" width=\"150\"
                                                 height=\"150\">
                                        </a>
                                    {% else %}
                                        <a href=\"#\" id=\"addUsa\">
                                            <img src=\"/gallery/{{ app.user.photo }}\" width=\"150\" height=\"150\"
                                                 class=\"img-circle\">
                                        </a>
                                    {% endif %}
                                </td>
                            </tr>
                            <tr>
                                <td class=\"pri\">Nom & Prénoms</td>
                                <td class=\"col-black\">{{ user.nom }}
                                    {{ user.prenoms }}</td>
                            </tr>
                            <tr>
                                <td class=\"pri\">Raison sociale</td>
                                <td class=\"col-black\">{{ user.societe }}</td>
                            </tr>
                            <tr>
                                <td class=\"pri\">Contact</td>
                                <td class=\"col-black\">{{ user.contact }}</td>
                            </tr>
                            <tr>
                                <td class=\"pri\">E-mail</td>
                                <td class=\"col-black\">{{ user.username }}</td>
                            </tr>
                            <tr>
                                <td class=\"pri\">Adresse</td>
                                <td class=\"col-black\">{{ user.adresse }}</td>
                            </tr>
                            <tr>
                                <td class=\"pri\">Pays</td>
                                <td class=\"col-black\">{% if user.pays %}{{ user.pays.nation }}{% endif %}</td>
                            </tr>
                            <tr>
                                <td class=\"pri\">C. contribuable</td>
                                <td class=\"col-black\">{{ user.contribuable }}</td>
                            </tr>
                            <tr>
                                <td colspan=\"2\" class=\"text-center\">
                                    <input type=\"submit\" id=\"updateUser\" value=\"MODIFIER\"
                                           class=\"btn btn-link waves-effect text-white bg-green\">
                                </td>
                            </tr>
                        </table>
                    </div>
                    {% if app.user.compte == null %}
                        <div class=\"card shadow mb-4 bg-white\" style=\" padding:10px\">
                            <h5 class=\"col-black bolo700\">DROITS D'ACCÈS DU COMPTE {% if userdroit is not null %}| <span class=\"col-pink\">{{ userdroit.nom|upper }} {{ userdroit.prenoms|upper }}</span>{% endif %}</h5>
                            {% if userdroit is not null %}
                                <form id=\"addDroitUserForm\">
                                    <p style=\"text-align: center\"><input type=\"submit\" id=\"saveDroit\" value=\"VALIDER\" class=\"btn btn-link waves-effect text-white bg-blue\"></p>
                                    <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addDroitUserToken') }}\"/>
                                    <table class=\"table-bordered\" style=\"width: 100%\">
                                        <tr>
                                        <td  colspan=\"3\" class=\"col-pink bolo700 bg-light\">GESTION DES ADMINISTRATEURS</td>
                                        {% for dre in droits %}

                                            {% if dre.ggroup == \"admin\" %}
                                                <tr>
                                                    <td style=\"padding-left: 20px !important;\">
                                                        <label class=\"col-black\"
                                                               for=\"admin\">&raquo; {{ dre.afaire|capitalize }}</label>
                                                    </td>
                                                    <td class=\"col-blue-grey text-center\">
                                                        <select id=\"admin\" name=\"admin\" class=\"col-blue\">
                                                            <option value=\"oui\"
                                                                    {% if dre.actions == \"oui\" %}selected=\"selected\"{% endif %}>
                                                                Oui
                                                            </option>
                                                            <option value=\"non\"
                                                                    {% if dre.actions == \"non\" %}selected=\"selected\"{% endif %}>
                                                                Non
                                                            </option>
                                                        </select>
                                                    </td>
                                                    <td class=\"col-blue-grey\">
                                                        {% if dre.actions == \"oui\" %}Administrateur de compte{% endif %}
                                                        {% if dre.actions == \"non\" %}Pas administrateur de compte{% endif %}
                                                    </td>
                                                </tr>
                                            {% endif %}

                                            {% if dre.ggroup == \"comptable\" %}
                                                <tr>
                                                    <td style=\"padding-left: 20px !important;\">
                                                        <label class=\"col-black\"
                                                               for=\"admin\">&raquo; {{ dre.afaire|capitalize }}</label>
                                                    </td>
                                                    <td class=\"col-blue-grey text-center\">
                                                        <select id=\"comptable\" name=\"comptable\" class=\"col-blue\">
                                                            <option value=\"oui\"
                                                                    {% if dre.actions == \"oui\" %}selected=\"selected\"{% endif %}>
                                                                Oui
                                                            </option>
                                                            <option value=\"non\"
                                                                    {% if dre.actions == \"non\" %}selected=\"selected\"{% endif %}>
                                                                Non
                                                            </option>
                                                        </select>
                                                    </td>
                                                    <td class=\"col-blue-grey\">
                                                        {% if dre.actions == \"oui\" %}Ce compte gère la comptabilté{% endif %}
                                                        {% if dre.actions == \"non\" %}Ce compte ne gère pas la comptabilté{% endif %}
                                                    </td>
                                                </tr>
                                            {% endif %}

                                        {% endfor %}
                                        </tr>
                                        <tr>
                                        <td  colspan=\"3\" class=\"col-pink bolo700 bg-light\">GESTION DES CLIENTS</td>
                                        {% for dre in droits %}
                                            {% if dre.ggroup == \"client\" %}
                                                <tr>
                                                    <td style=\"padding-left: 20px !important;\">
                                                        <label class=\"col-black\">&raquo; {{ dre.afaire|capitalize }}</label>
                                                    </td>
                                                    <td class=\"col-blue-grey text-center\">
                                                        <select id={{ dre.lier }} name={{ dre.lier }} class=\"col-blue\">
                                                            <option value=\"oui\"
                                                                    {% if dre.actions == \"oui\" %}selected=\"selected\"{% endif %}>
                                                                Oui
                                                            </option>
                                                            <option value=\"non\"
                                                                    {% if dre.actions == \"non\" %}selected=\"selected\"{% endif %}>
                                                                Non
                                                            </option>
                                                        </select>
                                                    </td>
                                                    <td class=\"col-blue-grey\">
                                                        {% if dre.actions == \"oui\" and dre.lier == \"add_client\" %}Ce compte peut ajouter un client{% endif %}
                                                        {% if dre.actions == \"non\" and dre.lier == \"add_client\"%}Ce compte ne peut pas ajouter un client{% endif %}

                                                        {% if dre.actions == \"oui\" and dre.lier == \"upd_client\" %}Ce compte peut modifier un client{% endif %}
                                                        {% if dre.actions == \"non\" and dre.lier == \"upd_client\"%}Ce compte ne peut pas modifier un client{% endif %}

                                                        {% if dre.actions == \"oui\" and dre.lier == \"del_client\" %}Ce compte peut supprimer un client{% endif %}
                                                        {% if dre.actions == \"non\" and dre.lier == \"del_client\"%}Ce compte ne peut pas supprimer un client{% endif %}

                                                    </td>
                                                </tr>
                                            {% endif %}
                                        {% endfor %}
                                        </tr>
                                        <tr>
                                        <td  colspan=\"3\" class=\"col-pink bolo700 bg-light\">GESTION DES CHANTIERS</td>
                                        {% for dre in droits %}
                                            {% if dre.ggroup == \"chantier\" %}
                                                <tr>
                                                    <td style=\"padding-left: 20px !important;\">
                                                        <label class=\"col-black\">&raquo; {{ dre.afaire|capitalize }}</label>
                                                    </td>
                                                    <td class=\"col-blue-grey text-center\">
                                                        <select id={{ dre.lier }} name={{ dre.lier }} class=\"col-blue\">
                                                            <option value=\"oui\"
                                                                    {% if dre.actions == \"oui\" %}selected=\"selected\"{% endif %}>
                                                                Oui
                                                            </option>
                                                            <option value=\"non\"
                                                                    {% if dre.actions == \"non\" %}selected=\"selected\"{% endif %}>
                                                                Non
                                                            </option>
                                                        </select>
                                                    </td>
                                                    <td class=\"col-blue-grey\">
                                                        {% if dre.actions == \"oui\" and dre.lier == \"add_chantier\" %}Ce compte peut ajouter un chantier{% endif %}
                                                        {% if dre.actions == \"non\" and dre.lier == \"add_chantier\"%}Ce compte ne peut pas ajouter un chantier{% endif %}

                                                        {% if dre.actions == \"oui\" and dre.lier == \"upd_chantier\" %}Ce compte peut modifier un chantier{% endif %}
                                                        {% if dre.actions == \"non\" and dre.lier == \"upd_chantier\"%}Ce compte ne peut pas modifier un chantier{% endif %}

                                                        {% if dre.actions == \"oui\" and dre.lier == \"del_chantier\" %}Ce compte peut supprimer un chantier{% endif %}
                                                        {% if dre.actions == \"non\" and dre.lier == \"del_chantier\"%}Ce compte ne peut pas supprimer un chantier{% endif %}


                                                        {% if dre.actions == \"oui\" and dre.lier == \"voir_page_chantier\" %}Ce compte peut consulter les chantiers {% endif %}
                                                        {% if dre.actions == \"non\" and dre.lier == \"voir_page_chantier\"%}Ce compte ne peut pas consulter les chantiers {% endif %}

                                                    </td>
                                                </tr>
                                            {% endif %}
                                        {% endfor %}
                                        </tr>
                                        <tr>
                                        <td  colspan=\"3\" class=\"col-pink bolo700 bg-light\">GESTION DES DEVIS</td>
                                        {% for dre in droits %}
                                            {% if dre.ggroup == \"devis\" %}
                                                <tr>
                                                    <td style=\"padding-left: 20px !important;\">
                                                        <label class=\"col-black\">&raquo; {{ dre.afaire|capitalize }}</label>
                                                    </td>
                                                    <td class=\"col-blue-grey text-center\">
                                                        <select id={{ dre.lier }} name={{ dre.lier }} class=\"col-blue\">
                                                            <option value=\"oui\"
                                                                    {% if dre.actions == \"oui\" %}selected=\"selected\"{% endif %}>
                                                                Oui
                                                            </option>
                                                            <option value=\"non\"
                                                                    {% if dre.actions == \"non\" %}selected=\"selected\"{% endif %}>
                                                                Non
                                                            </option>
                                                        </select>
                                                    </td>
                                                    <td class=\"col-blue-grey\">
                                                        {% if dre.actions == \"oui\" and dre.lier == \"add_devis\" %}Ce compte peut créer un devis{% endif %}
                                                        {% if dre.actions == \"non\" and dre.lier == \"add_devis\"%}Ce compte ne peut pas créer un devis{% endif %}

                                                        {% if dre.actions == \"oui\" and dre.lier == \"upd_devis\" %}Ce compte peut modifier un devis{% endif %}
                                                        {% if dre.actions == \"non\" and dre.lier == \"upd_devis\"%}Ce compte ne peut pas modifier un devis{% endif %}

                                                        {% if dre.actions == \"oui\" and dre.lier == \"del_devis\" %}Ce compte peut supprimer un devis{% endif %}
                                                        {% if dre.actions == \"non\" and dre.lier == \"del_devis\"%}Ce compte ne peut pas supprimer un devis{% endif %}

                                                        {% if dre.actions == \"oui\" and dre.lier == \"voir_devis\" %}Ce compte peut consulter un devis{% endif %}
                                                        {% if dre.actions == \"non\" and dre.lier == \"voir_devis\"%}Ce compte ne peut pas consulter un devis{% endif %}

                                                        {% if dre.actions == \"oui\" and dre.lier == \"valide_devis\" %}Ce compte peut valider un devis{% endif %}
                                                        {% if dre.actions == \"non\" and dre.lier == \"valide_devis\"%}Ce compte ne peut pas valider un devis{% endif %}

                                                        {% if dre.actions == \"oui\" and dre.lier == \"devalide_devis\" %}Ce compte peut dévalider un devis{% endif %}
                                                        {% if dre.actions == \"non\" and dre.lier == \"devalide_devis\"%}Ce compte ne peut pas dévalider un devis{% endif %}

                                                    </td>
                                                </tr>
                                            {% endif %}
                                        {% endfor %}
                                        </tr>
                                        <tr>
                                            <td  colspan=\"3\" class=\"col-pink bolo700 bg-light\">GESTION DES BESOINS</td>
                                            {% for dre in droits %}
                                            {% if dre.ggroup == \"besoin\" %}
                                        <tr>
                                            <td style=\"padding-left: 20px !important;\">
                                                <label class=\"col-black\">&raquo; {{ dre.afaire|capitalize }}</label>
                                            </td>
                                            <td class=\"col-blue-grey text-center\">
                                                <select id={{ dre.lier }} name={{ dre.lier }} class=\"col-blue\">
                                                    <option value=\"oui\"
                                                            {% if dre.actions == \"oui\" %}selected=\"selected\"{% endif %}>
                                                        Oui
                                                    </option>
                                                    <option value=\"non\"
                                                            {% if dre.actions == \"non\" %}selected=\"selected\"{% endif %}>
                                                        Non
                                                    </option>
                                                </select>
                                            </td>
                                            <td class=\"col-blue-grey\">
                                                {% if dre.actions == \"oui\" and dre.lier == \"add_besoin\" %}Ce compte peut ajouter des besoins{% endif %}
                                                {% if dre.actions == \"non\" and dre.lier == \"add_besoin\"%}Ce compte ne peut ajouter des besoins{% endif %}

                                                {% if dre.actions == \"oui\" and dre.lier == \"upd_besoin\" %}Ce compte peut modifier des besoins{% endif %}
                                                {% if dre.actions == \"non\" and dre.lier == \"upd_besoin\"%}Ce compte ne peut pas modifier des besoins{% endif %}

                                                {% if dre.actions == \"oui\" and dre.lier == \"del_besoin\" %}Ce compte peut supprimer des besoins{% endif %}
                                                {% if dre.actions == \"non\" and dre.lier == \"del_besoin\"%}Ce compte ne peut pas supprimer des besoins{% endif %}

                                                {% if dre.actions == \"oui\" and dre.lier == \"cloturer_besoin\" %}Ce compte peut clotûrer des besoins{% endif %}
                                                {% if dre.actions == \"non\" and dre.lier == \"cloturer_besoin\"%}Ce compte ne peut pas clotûrer des besoins{% endif %}

                                                {% if dre.actions == \"oui\" and dre.lier == \"commenter_besoin\" %}Ce compte peut commenter des besoins{% endif %}
                                                {% if dre.actions == \"non\" and dre.lier == \"commenter_besoin\"%}Ce compte ne peut pas commenter des besoins{% endif %}
                                            </td>
                                        </tr>
                                        {% endif %}
                                        {% endfor %}
                                        </tr>
                                    </table>
                                </form>
                            {% endif %}
                        </div>
                    {% endif %}
                </div>
                <div class=\"col-md-4\">
                    <div class=\"card shadow mb-4 bg-white\" style=\" padding:10px\">
                        <h5 class=\"col-black bolo700\">MODIFIER MON MOT DE PASSE</h5>
                        <hr class=\"bg-pri\" style=\"width: 100%; margin-top: -5px;\">
                        <h5 id=\"messar\" class=\"col-pink text-center bolo600\"></h5>
                        <form id=\"updPassForm\">
                            <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('updPassToken') }}\"/>

                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label pri m-b--30 bolo600\">ANCIEN MOT DE PASSE</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line col-pink\">
                                            <input type=\"password\" name=\"ancien\" required=\"required\"
                                                   class=\"form-control\">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label m-b--30 pri bolo600\">NOUVEAU MOT DE PASSE</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line col-pink\">
                                            <input type=\"password\" id=\"nouveau\" name=\"nouveau\"
                                                   pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}\" required=\"required\"
                                                   minlength=\"8\" class=\"form-control\">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label m-b--30 pri bolo600\">CONFIRMER NOUVEAU MOT DE PASSE</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line col-pink\">
                                            <input type=\"password\" id=\"confirmer\" name=\"confirmer\"
                                                   pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}\" required=\"required\"
                                                   minlength=\"8\" class=\"form-control\">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"text-center\">
                                <input type=\"submit\" id=\"updPasse\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect text-white bg-green\">
                                <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                     class=\"align-justify\" id=\"loadUpdPasse\">
                            </div>

                        </form>
                    </div>
                    {% if app.user.compte == null %}
                        <div class=\"card shadow mb-4 bg-white\" style=\" padding:10px\">
                            <h5 class=\"col-black bolo700\">SOUS-COMPTES</h5>
                            <table class=\"table-bordered\"
                                   style=\"padding: 0; width: 100%\">
                                <tbody>
                                {% for compte in comptes %}
                                    {% if compte.corbeille is null %}
                                        <tr>
                                            <td class=\"col-black bolo600\"><a
                                                        href=\"{{ path('droitcompte', {'idcompte':compte.id}) }}\">{{ compte.nom|upper }}
                                                    &nbsp;{{ compte.prenoms|upper }}</a></td>
                                            <td class=\"text-center\"><a
                                                        href=\"{{ path('editsouscompte', {'id': compte.id}) }}\"><i
                                                            class=\"fa fa fa-edit text-success\"></i></a></td>
                                            <td class=\"text-center\"><a href=\"#\" onclick=\"delcompte({{ compte.id }});\"><i
                                                            class=\"fa fa-trash col-pink\"></i></a></td>
                                        </tr>
                                    {% endif %}
                                {% endfor %}
                                <tr>
                                    <td colspan=\"3\" class=\"text-center\">
                                        <input type=\"submit\" id=\"addSousCpte\" value=\"AJOUTER\"
                                               class=\"btn btn-link waves-effect text-white bg-blue\">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "content/parametre.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\parametre.html.twig");
    }
}
