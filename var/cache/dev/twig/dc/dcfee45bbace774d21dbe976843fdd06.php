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

/* content/materiel.html.twig */
class __TwigTemplate_081ec9531cef62c0b063e83a445fe630 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/materiel.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/materiel.html.twig"));

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
        yield "    <input type=\"text\" class=\"hide\" id=\"idfamille\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["famille"]) || array_key_exists("famille", $context) ? $context["famille"] : (function () { throw new RuntimeError('Variable "famille" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6), "html", null, true);
        yield "\"/>
    <input type=\"text\" class=\"hide\" id=\"idfourn\" value=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "html", null, true);
        yield "\"/>
    <input type=\"text\" class=\"hide\" id=\"idmateriel\" value=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8), "html", null, true);
        yield "\"/>
    <input type=\"text\" class=\"hide\" id=\"idbenef\" value=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["beneficiaire"]) || array_key_exists("beneficiaire", $context) ? $context["beneficiaire"] : (function () { throw new RuntimeError('Variable "beneficiaire" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9), "html", null, true);
        yield "\"/>

    <div class=\"modal fade right\" id=\"ajouterMATERIEL\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                ";
        // line 16
        if ((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16))) {
            // line 17
            yield "                    <div class=\"modal-header bg-blue text-white\">
                        <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">AJOUTER UN MATÉRIEL</h4>
                    </div>
                ";
        } else {
            // line 21
            yield "                    <div class=\"modal-header bg-green text-white\">
                        <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">MODIFIER UN MATÉRIEL</h4>
                    </div>
                ";
        }
        // line 25
        yield "                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
        // line 27
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formMateriel"]) || array_key_exists("formMateriel", $context) ? $context["formMateriel"] : (function () { throw new RuntimeError('Variable "formMateriel" does not exist.', 27, $this->source); })()), 'form_start', ["attr" => ["id" => "addMaterielForm"]]);
        yield "
                        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formMateriel"]) || array_key_exists("formMateriel", $context) ? $context["formMateriel"] : (function () { throw new RuntimeError('Variable "formMateriel" does not exist.', 28, $this->source); })()), "_token", [], "any", false, false, false, 28), 'row');
        yield "

                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">Matériel<span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        ";
        // line 36
        if ((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36))) {
            // line 37
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formMateriel"]) || array_key_exists("formMateriel", $context) ? $context["formMateriel"] : (function () { throw new RuntimeError('Variable "formMateriel" does not exist.', 37, $this->source); })()), "materiel", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                        ";
        } else {
            // line 39
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formMateriel"]) || array_key_exists("formMateriel", $context) ? $context["formMateriel"] : (function () { throw new RuntimeError('Variable "formMateriel" does not exist.', 39, $this->source); })()), "materiel", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
            yield "
                                        ";
        }
        // line 41
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">Famille</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">

                                        ";
        // line 52
        if ((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 52, $this->source); })()), "id", [], "any", false, false, false, 52))) {
            // line 53
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formMateriel"]) || array_key_exists("formMateriel", $context) ? $context["formMateriel"] : (function () { throw new RuntimeError('Variable "formMateriel" does not exist.', 53, $this->source); })()), "famille", [], "any", false, false, false, 53), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
            yield "
                                        ";
        } else {
            // line 55
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formMateriel"]) || array_key_exists("formMateriel", $context) ? $context["formMateriel"] : (function () { throw new RuntimeError('Variable "formMateriel" does not exist.', 55, $this->source); })()), "famille", [], "any", false, false, false, 55), 'widget', ["required" => "", "attr" => ["class" => "form-control col-pink"]]);
            yield "
                                        ";
        }
        // line 57
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">Fournisseur</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 67
        if ((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 67, $this->source); })()), "id", [], "any", false, false, false, 67))) {
            // line 68
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formMateriel"]) || array_key_exists("formMateriel", $context) ? $context["formMateriel"] : (function () { throw new RuntimeError('Variable "formMateriel" does not exist.', 68, $this->source); })()), "fournisseur", [], "any", false, false, false, 68), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
            yield "
                                        ";
        } else {
            // line 70
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formMateriel"]) || array_key_exists("formMateriel", $context) ? $context["formMateriel"] : (function () { throw new RuntimeError('Variable "formMateriel" does not exist.', 70, $this->source); })()), "fournisseur", [], "any", false, false, false, 70), 'widget', ["required" => "", "attr" => ["class" => "form-control col-pink"]]);
            yield "
                                        ";
        }
        // line 72
        yield "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">Code du matériel<span
                                            class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 83
        if ((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 83, $this->source); })()), "id", [], "any", false, false, false, 83))) {
            // line 84
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formMateriel"]) || array_key_exists("formMateriel", $context) ? $context["formMateriel"] : (function () { throw new RuntimeError('Variable "formMateriel" does not exist.', 84, $this->source); })()), "code", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                        ";
        } else {
            // line 86
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formMateriel"]) || array_key_exists("formMateriel", $context) ? $context["formMateriel"] : (function () { throw new RuntimeError('Variable "formMateriel" does not exist.', 86, $this->source); })()), "code", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
            yield "
                                        ";
        }
        // line 88
        yield "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-4\">
                                <label class=\"form-label m-b--30 pri bolo\">Quantité</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 97
        if ((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 97, $this->source); })()), "id", [], "any", false, false, false, 97))) {
            // line 98
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formMateriel"]) || array_key_exists("formMateriel", $context) ? $context["formMateriel"] : (function () { throw new RuntimeError('Variable "formMateriel" does not exist.', 98, $this->source); })()), "stock", [], "any", false, false, false, 98), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                        ";
        } else {
            // line 100
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formMateriel"]) || array_key_exists("formMateriel", $context) ? $context["formMateriel"] : (function () { throw new RuntimeError('Variable "formMateriel" does not exist.', 100, $this->source); })()), "stock", [], "any", false, false, false, 100), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
            yield "
                                        ";
        }
        // line 102
        yield "                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-8\">
                                <label class=\"form-label m-b--30 pri bolo\">Date d'acquisition</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 109
        if ((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 109, $this->source); })()), "id", [], "any", false, false, false, 109))) {
            // line 110
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formMateriel"]) || array_key_exists("formMateriel", $context) ? $context["formMateriel"] : (function () { throw new RuntimeError('Variable "formMateriel" does not exist.', 110, $this->source); })()), "date", [], "any", false, false, false, 110), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
            yield "
                                        ";
        } else {
            // line 112
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formMateriel"]) || array_key_exists("formMateriel", $context) ? $context["formMateriel"] : (function () { throw new RuntimeError('Variable "formMateriel" does not exist.', 112, $this->source); })()), "date", [], "any", false, false, false, 112), 'widget', ["required" => "", "attr" => ["class" => "form-control col-pink"]]);
            yield "
                                        ";
        }
        // line 114
        yield "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            ";
        // line 119
        if ((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 119, $this->source); })()), "id", [], "any", false, false, false, 119))) {
            // line 120
            yield "                                <input type=\"submit\" id=\"addMateriel\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-blue\">
                            ";
        } else {
            // line 123
            yield "                                <input type=\"submit\" id=\"updateMateriel\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect text-white bg-green\">
                            ";
        }
        // line 126
        yield "

                            <div type=\"button\" id=\"closeMateriel\" class=\"btn btn-link waves-effect text-white bg-pink\" data-dismiss=\"modal\">FERMER</div>
                            <img src=\"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadMateriel\"></div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        ";
        // line 137
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formMateriel"]) || array_key_exists("formMateriel", $context) ? $context["formMateriel"] : (function () { throw new RuntimeError('Variable "formMateriel" does not exist.', 137, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"affecterMATERIEL\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"p-5 bg-pri\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">
                            AFFECTER SUR UN CHANTIER
                        </h4>
                    </div>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        <form id=\"affMatChantierForm\">
                            <input type=\"hidden\" name=\"token\" value=\"";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("affmatchantier"), "html", null, true);
        yield "\"/>
                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label m-b--30 col-blue bolo\">MATERIELS</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            <select class=\"form-control show-tick\" name=\"mate\">
                                                ";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["materiels"]) || array_key_exists("materiels", $context) ? $context["materiels"] : (function () { throw new RuntimeError('Variable "materiels" does not exist.', 163, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["materiel"]) {
            // line 164
            yield "                                                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "etat", [], "any", false, false, false, 164) != "occupe")) {
                // line 165
                yield "                                                        <optgroup label=\"\" class=\" bolo700 col-pink\">
                                                            <option value=\"";
                // line 166
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 166), "html", null, true);
                yield "\"
                                                                    title=\"";
                // line 167
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "materiel", [], "any", false, false, false, 167), "html", null, true);
                yield "\"
                                                                    class=\"col-blue-grey\"
                                                                    style=\"font-weight: 500 !important; font-size: 15px !important;\">";
                // line 169
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "materiel", [], "any", false, false, false, 169), "html", null, true);
                yield "</option>
                                                        </optgroup>
                                                    ";
            }
            // line 172
            yield "                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['materiel'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        yield "                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label m-b--30 col-blue bolo\">QUANTITÉ</label>
                                    <div class=\"form-group form-float\">
                                        <div class=\"form-line\">
                                            <input type=\"number\" class=\"form-control\" name=\"qte\"></div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label m-b--30 col-blue bolo\">CHANTIERS</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            <select class=\"form-control show-tick\" name=\"chantier\">
                                                ";
        // line 193
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 193, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cli"]) {
            // line 194
            yield "                                                    ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["cli"], "type", [], "any", false, false, false, 194))) {
                // line 195
                yield "                                                    ";
                $context["count"] = 0;
                // line 196
                yield "                                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["cli"], "chantiers", [], "any", false, false, false, 196));
                foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                    // line 197
                    yield "                                                        ";
                    if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["pro"], "corbeille", [], "any", false, false, false, 197)) && (CoreExtension::getAttribute($this->env, $this->source, $context["pro"], "archiver", [], "any", false, false, false, 197) != "oui"))) {
                        // line 198
                        yield "                                                            ";
                        $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 198, $this->source); })()) + 1);
                        // line 199
                        yield "                                                        ";
                    }
                    // line 200
                    yield "                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['pro'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 201
                yield "                                                    ";
                if (((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 201, $this->source); })()) > 0)) {
                    // line 202
                    yield "                                                        <optgroup label=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cli"], "nomclient", [], "any", false, false, false, 202), "html", null, true);
                    yield "\" class=\" bolo700 col-pink\">
                                                            ";
                    // line 203
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["cli"], "chantiers", [], "any", false, false, false, 203));
                    foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                        // line 204
                        yield "                                                                ";
                        if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["pro"], "corbeille", [], "any", false, false, false, 204)) && (CoreExtension::getAttribute($this->env, $this->source, $context["pro"], "archiver", [], "any", false, false, false, 204) != "oui"))) {
                            // line 205
                            yield "                                                                    <option value=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pro"], "id", [], "any", false, false, false, 205), "html", null, true);
                            yield "\"
                                                                            title=\"";
                            // line 206
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pro"], "nomchantier", [], "any", false, false, false, 206), "html", null, true);
                            yield "\"
                                                                            class=\"col-blue\"
                                                                            style=\"font-weight: 500 !important; font-size: 15px !important;\">";
                            // line 208
                            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["pro"], "nomchantier", [], "any", false, false, false, 208)) > 40)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["pro"], "nomchantier", [], "any", false, false, false, 208), 0, 40)) . "…"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["pro"], "nomchantier", [], "any", false, false, false, 208)), "html", null, true)));
                            yield "</option>
                                                                ";
                        }
                        // line 210
                        yield "                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['pro'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 211
                    yield "                                                        </optgroup>
                                                     ";
                }
                // line 213
                yield "                                                    ";
            }
            // line 214
            yield "                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cli'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        yield "                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"text-center\">
                                <input type=\"submit\" id=\"affMatChantier\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-blue\">
                                <div type=\"button\" id=\"closeAffMatChantier\"
                                     class=\"btn btn-link waves-effect text-white bg-pink\" data-dismiss=\"modal\">
                                    FERMER
                                </div>
                                <img src=\"";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                     class=\"align-justify\" id=\"loadAffMatChantier\"></div>
                            <br>
                            <br>
                            <br></form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"addBENEFICIAIRE\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"p-5 bg-pri\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">
                            AJOUTER UN BÉNÉFICIAIRE
                        </h4>
                    </div>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
        // line 249
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formBeneficiaire"]) || array_key_exists("formBeneficiaire", $context) ? $context["formBeneficiaire"] : (function () { throw new RuntimeError('Variable "formBeneficiaire" does not exist.', 249, $this->source); })()), 'form_start', ["attr" => ["id" => "addBenefForm"]]);
        yield "
                        ";
        // line 250
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBeneficiaire"]) || array_key_exists("formBeneficiaire", $context) ? $context["formBeneficiaire"] : (function () { throw new RuntimeError('Variable "formBeneficiaire" does not exist.', 250, $this->source); })()), "_token", [], "any", false, false, false, 250), 'row');
        yield "
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">NOM & PRÉNOMS<span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        ";
        // line 257
        if ((($tmp = (isset($context["editBenef"]) || array_key_exists("editBenef", $context) ? $context["editBenef"] : (function () { throw new RuntimeError('Variable "editBenef" does not exist.', 257, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 258
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBeneficiaire"]) || array_key_exists("formBeneficiaire", $context) ? $context["formBeneficiaire"] : (function () { throw new RuntimeError('Variable "formBeneficiaire" does not exist.', 258, $this->source); })()), "noms", [], "any", false, false, false, 258), 'widget', ["attr" => ["class" => "form-control col-pink "]]);
            yield "
                                        ";
        } else {
            // line 260
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBeneficiaire"]) || array_key_exists("formBeneficiaire", $context) ? $context["formBeneficiaire"] : (function () { throw new RuntimeError('Variable "formBeneficiaire" does not exist.', 260, $this->source); })()), "noms", [], "any", false, false, false, 260), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                        ";
        }
        // line 262
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
        // line 271
        if ((($tmp = (isset($context["editBenef"]) || array_key_exists("editBenef", $context) ? $context["editBenef"] : (function () { throw new RuntimeError('Variable "editBenef" does not exist.', 271, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 272
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBeneficiaire"]) || array_key_exists("formBeneficiaire", $context) ? $context["formBeneficiaire"] : (function () { throw new RuntimeError('Variable "formBeneficiaire" does not exist.', 272, $this->source); })()), "fonction", [], "any", false, false, false, 272), 'widget', ["attr" => ["class" => "form-control col-pink "]]);
            yield "
                                        ";
        } else {
            // line 274
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBeneficiaire"]) || array_key_exists("formBeneficiaire", $context) ? $context["formBeneficiaire"] : (function () { throw new RuntimeError('Variable "formBeneficiaire" does not exist.', 274, $this->source); })()), "fonction", [], "any", false, false, false, 274), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                        ";
        }
        // line 276
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
        // line 285
        if ((($tmp = (isset($context["editBenef"]) || array_key_exists("editBenef", $context) ? $context["editBenef"] : (function () { throw new RuntimeError('Variable "editBenef" does not exist.', 285, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 286
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBeneficiaire"]) || array_key_exists("formBeneficiaire", $context) ? $context["formBeneficiaire"] : (function () { throw new RuntimeError('Variable "formBeneficiaire" does not exist.', 286, $this->source); })()), "contacts", [], "any", false, false, false, 286), 'widget', ["attr" => ["class" => "form-control col-pink "]]);
            yield "
                                        ";
        } else {
            // line 288
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBeneficiaire"]) || array_key_exists("formBeneficiaire", $context) ? $context["formBeneficiaire"] : (function () { throw new RuntimeError('Variable "formBeneficiaire" does not exist.', 288, $this->source); })()), "contacts", [], "any", false, false, false, 288), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                        ";
        }
        // line 290
        yield "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            ";
        // line 295
        if ((($tmp = (isset($context["editBenef"]) || array_key_exists("editBenef", $context) ? $context["editBenef"] : (function () { throw new RuntimeError('Variable "editBenef" does not exist.', 295, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 296
            yield "                                <input type=\"submit\" id=\"updBenef\" value=\"MODIFIER\" class=\"btn btn-link waves-effect text-white bg-green\">
                            ";
        } else {
            // line 298
            yield "                                <input type=\"submit\" id=\"addBenef\" value=\"ENREGISTRER\" class=\"btn btn-link waves-effect text-white bg-blue\">
                            ";
        }
        // line 300
        yield "

                            <div type=\"button\" id=\"closeBenef\" class=\"btn btn-link waves-effect text-white bg-pink\" data-dismiss=\"modal\">FERMER
                            </div><img src=\"";
        // line 303
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\" class=\"align-justify\" id=\"loadBenef\"></div>
                        <br>
                        <br>
                        <br>
                        ";
        // line 307
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formBeneficiaire"]) || array_key_exists("formBeneficiaire", $context) ? $context["formBeneficiaire"] : (function () { throw new RuntimeError('Variable "formBeneficiaire" does not exist.', 307, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"attribuerBENEFICIAIRE\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"p-5 bg-pri\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">
                            ATTRIBUER DES MATÉRIELS À UN BÉNÉFICIAIRE
                        </h4>
                    </div>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        <form id=\"attribuerMatBenefForm\">
                            <input type=\"hidden\" name=\"token\" value=\"";
        // line 327
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("attribuerMatBenef"), "html", null, true);
        yield "\"/>

                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label m-b--30 col-blue bolo\">MATÉRIELS</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            <select class=\"form-control show-tick\" name=\"mate\">
                                                ";
        // line 335
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["materiels"]) || array_key_exists("materiels", $context) ? $context["materiels"] : (function () { throw new RuntimeError('Variable "materiels" does not exist.', 335, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["materiel"]) {
            // line 336
            yield "                                                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "etat", [], "any", false, false, false, 336) != "occupe")) {
                // line 337
                yield "                                                        <optgroup label=\"\" class=\" bolo700 col-pink\">
                                                            <option value=\"";
                // line 338
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 338), "html", null, true);
                yield "\"
                                                                    title=\"";
                // line 339
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "materiel", [], "any", false, false, false, 339), "html", null, true);
                yield "\"
                                                                    class=\"col-blue-grey\"
                                                                    style=\"font-weight: 500 !important; font-size: 15px !important;\">";
                // line 341
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "materiel", [], "any", false, false, false, 341), "html", null, true);
                yield "</option>
                                                        </optgroup>
                                                    ";
            }
            // line 344
            yield "                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['materiel'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 345
        yield "                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label m-b--30 col-blue bolo\">QUANTITÉ</label>
                                    <div class=\"form-group form-float\">
                                        <div class=\"form-line\">
                                            <input type=\"number\" class=\"form-control\" name=\"qte\"></div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label m-b--30 col-blue bolo\">BÉNÉFICIAIRES</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            <select class=\"form-control show-tick\" name=\"benef\">
                                                ";
        // line 365
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["beneficiaires"]) || array_key_exists("beneficiaires", $context) ? $context["beneficiaires"] : (function () { throw new RuntimeError('Variable "beneficiaires" does not exist.', 365, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["benef"]) {
            // line 366
            yield "                                                    <optgroup label=\"\" class=\" bolo700 col-pink\">
                                                        <option value=\"";
            // line 367
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["benef"], "id", [], "any", false, false, false, 367), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["benef"], "noms", [], "any", false, false, false, 367), "html", null, true);
            yield "\"
                                                                class=\"col-blue-grey\"
                                                                style=\"font-weight: 500 !important; font-size: 15px !important;\">";
            // line 369
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["benef"], "noms", [], "any", false, false, false, 369)) > 40)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["benef"], "noms", [], "any", false, false, false, 369), 0, 40)) . "…"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["benef"], "noms", [], "any", false, false, false, 369)), "html", null, true)));
            yield "</option>
                                                    </optgroup>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['benef'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 372
        yield "                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"text-center\">
                                <input type=\"submit\" id=\"attrMatBenef\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-blue\">
                                <div type=\"button\" id=\"closeAttriMatBenef\"
                                     class=\"btn btn-link waves-effect text-white bg-pink\" data-dismiss=\"modal\">
                                    FERMER
                                </div>
                                <img src=\"";
        // line 384
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                     class=\"align-justify\" id=\"loadAttribuerMatBenef\"></div>
                            <br>
                            <br>
                            <br></form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"restituerBenef\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"p-5 bg-pri\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">
                            MATÉRIELS ATTRIBUÉS
                        </h4>
                    </div>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        <form id=\"restituerBenefForm\">
                            <input type=\"hidden\" name=\"token\" value=\"";
        // line 408
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("restBenef"), "html", null, true);
        yield "\"/>

                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label m-b--30 col-blue bolo\">MATÉRIELS</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            <select class=\"form-control\" name=\"mate\">
                                                ";
        // line 416
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["matBeneficiaire"]) || array_key_exists("matBeneficiaire", $context) ? $context["matBeneficiaire"] : (function () { throw new RuntimeError('Variable "matBeneficiaire" does not exist.', 416, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mate"]) {
            // line 417
            yield "                                                        <optgroup label=\"\" class=\" bolo700 col-pink\">
                                                            <option value=\"";
            // line 418
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mate"], "id", [], "any", false, false, false, 418), "html", null, true);
            yield "\"
                                                                    title=\"";
            // line 419
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["mate"], "materiel", [], "any", false, false, false, 419), "materiel", [], "any", false, false, false, 419), "html", null, true);
            yield "\"
                                                                    class=\"col-blue-grey\"
                                                                    style=\"font-weight: 500 !important; font-size: 15px !important;\">";
            // line 421
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["mate"], "materiel", [], "any", false, false, false, 421), "materiel", [], "any", false, false, false, 421), "html", null, true);
            yield "</option>
                                                        </optgroup>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['mate'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 424
        yield "                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label m-b--30 col-blue bolo\">QUANTITÉ</label>
                                    <div class=\"form-group form-float\">
                                        <div class=\"form-line\">
                                            <input type=\"number\" class=\"form-control\" name=\"qte\"></div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"text-center\">
                                <input type=\"submit\" id=\"restBenef\" value=\"RESTITUER\"
                                       class=\"btn btn-link waves-effect text-white bg-blue\">
                                <div type=\"button\" id=\"closeRestBenef\"
                                     class=\"btn btn-link waves-effect text-white bg-pink\" data-dismiss=\"modal\">
                                    FERMER
                                </div>
                                <img src=\"";
        // line 445
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                     class=\"align-justify\" id=\"loadRestBenef\"></div>
                            <br>
                            <br>
                            <br></form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"restituerChantier\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"p-5 bg-pri\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">
                            MATÉRIELS ATTRIBUÉS
                        </h4>
                    </div>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        <form id=\"restituerChantierForm\">
                            <input type=\"hidden\" name=\"token\" value=\"";
        // line 469
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("restChantier"), "html", null, true);
        yield "\"/>
                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label m-b--30 col-blue bolo\">MATÉRIELS</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            <select class=\"form-control\" name=\"mat\">
                                                ";
        // line 476
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["matChantier"]) || array_key_exists("matChantier", $context) ? $context["matChantier"] : (function () { throw new RuntimeError('Variable "matChantier" does not exist.', 476, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mater"]) {
            // line 477
            yield "                                                    <optgroup label=\"\" class=\" bolo700 col-pink\">
                                                        <option value=\"";
            // line 478
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mater"], "id", [], "any", false, false, false, 478), "html", null, true);
            yield "\"
                                                                title=\"";
            // line 479
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["mater"], "materiel", [], "any", false, false, false, 479), "materiel", [], "any", false, false, false, 479), "html", null, true);
            yield "\"
                                                                class=\"col-blue-grey\"
                                                                style=\"font-weight: 500 !important; font-size: 15px !important;\">";
            // line 481
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["mater"], "materiel", [], "any", false, false, false, 481), "materiel", [], "any", false, false, false, 481), "html", null, true);
            yield "</option>
                                                    </optgroup>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['mater'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 484
        yield "                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label m-b--30 col-blue bolo\">QUANTITÉ</label>
                                    <div class=\"form-group form-float\">
                                        <div class=\"form-line\">
                                            <input type=\"number\" class=\"form-control\" name=\"qte\"></div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"text-center\">
                                <input type=\"submit\" id=\"restChantier\" value=\"RESTITUER\"
                                       class=\"btn btn-link waves-effect text-white bg-blue\">
                                <div type=\"button\" id=\"closeRestChantier\"
                                     class=\"btn btn-link waves-effect text-white bg-pink\" data-dismiss=\"modal\">
                                    FERMER
                                </div>
                                <img src=\"";
        // line 505
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                     class=\"align-justify\" id=\"loadRestChantier\"></div>
                            <br>
                            <br>
                            <br></form>
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
                        <h3 class=\"col-pink bolo700 text-center\">MATÉRIEL</h3>

                        <div class=\" row clearfix text-center m-t-20 p-b-5\">
                            <div class=\"col-sm-12\">
                                <div class=\"btn-group btn-group-sm \" style=\"margin: auto\"  role=\"group\" aria-label=\"Small button group\">


                                    ";
        // line 528
        if ((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 528, $this->source); })()), "id", [], "any", false, false, false, 528))) {
            // line 529
            yield "                                        <button type=\"button\" data-toggle=\"modal\" data-target=\"#ajouterMATERIEL\"
                                                class=\"btn bg-blue text-white\" style=\"border:1px solid #dddfeb\">+ MATÉRIEL
                                        </button>
                                    ";
        } else {
            // line 533
            yield "                                        <button type=\"button\" data-toggle=\"modal\" data-target=\"#ajouterMATERIEL\"
                                                class=\"btn bg-green text-white\" style=\"border:1px solid #dddfeb\">- MATÉRIEL
                                        </button>
                                    ";
        }
        // line 537
        yield "                                    <button type=\"button\" data-toggle=\"modal\" data-target=\"#addBENEFICIAIRE\"
                                            class=\"btn bg-blue text-white\" style=\"border:1px solid #dddfeb\">+ BÉNÉFICIAIRE
                                    </button>

                                </div>
                                <div class=\"btn-group btn-group-sm \" style=\"margin: auto\"  role=\"group\" aria-label=\"Small button group\">
                                    <button type=\"button\" data-toggle=\"modal\" data-target=\"#affecterMATERIEL\"
                                            class=\"btn bg-blue text-white\" style=\"border:1px solid #dddfeb\"> AFFECTER SUR UN CHANTIER
                                    </button>

                                    <button type=\"button\" data-toggle=\"modal\" data-target=\"#attribuerBENEFICIAIRE\"
                                            class=\"btn bg-blue text-white\" style=\"border:1px solid #dddfeb\"> ATTRIBUER À UN BÉNÉFICIAIRE
                                    </button>

                                    <button type=\"button\" data-toggle=\"modal\" data-target=\"#restituerBenef\"
                                            class=\"btn bg-blue text-white\" style=\"border:1px solid #dddfeb\">RESTITUTION D'UN BÉNÉFICIAIRE
                                    </button>

                                    <button type=\"button\" data-toggle=\"modal\" data-target=\"#restituerChantier\"
                                            class=\"btn bg-blue text-white\" style=\"border:1px solid #dddfeb\">RESTITUTION DU CHANTIER
                                    </button>

                                </div>
                            </div>
                        </div>

                        <div class=\"row clearfix\">
                            <div class=\"col-sm-6\">
                                <div class=\"card shadow \">
                                    <div class=\"card-body\" style=\"padding: 20px\">
                                        <div class=\"table-responsive\" style=\"padding-bottom: 30px\">
                                            <h4 class=\"pri  bolo700\">FAMILLES</h4>
                                            <hr class=\"m-t--10\">
                                            <table class=\"table-bordered\" id=\"dataFAMILLEMAT\"
                                                   style=\"padding: 0; width: 100%\">
                                                <thead class=\"bg-blue\">
                                                <th style=\"width: 10px !important;\" class=\"col-white\"></th>
                                                <th class=\"col-white\">FAMILLES</th>
                                                <th></th>
                                                </thead>
                                                <tbody>
                                                ";
        // line 578
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 578, $this->source); })()), "user", [], "any", false, false, false, 578), "famille", [], "any", false, false, false, 578));
        foreach ($context['_seq'] as $context["_key"] => $context["famille"]) {
            // line 579
            yield "                                                    ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["famille"], "corbeille", [], "any", false, false, false, 579))) {
                // line 580
                yield "                                                        <tr>
                                                            <td align=\"center\">
                                                                <input type=\"checkbox\" data-toggle=\"toggle\" class=\"FAMY\"
                                                                       value=\"";
                // line 583
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["famille"], "id", [], "any", false, false, false, 583), "html", null, true);
                yield "\"></td>

                                                            <td class=\"col-black bolo600\">";
                // line 585
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["famille"], "famille", [], "any", false, false, false, 585)), "html", null, true);
                yield "</td>
                                                            <td class=\"col-blue-grey bolo600 text-center\">";
                // line 586
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["famille"], "articles", [], "any", false, false, false, 586), "count", [], "any", false, false, false, 586), "html", null, true);
                yield "</td>
                                                        </tr>
                                                    ";
            }
            // line 589
            yield "                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['famille'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 590
        yield "                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                             
                            </div>
                            <div class=\"col-sm-6\">
                                  <div class=\"card shadow \">
                                    <div class=\"card-body\" style=\"padding: 20px\">
                                        <div class=\"card-body\">
                                            <div class=\"table-responsive\" style=\"padding-bottom: 30px\">
                                                <h4 class=\"pri  bolo700\">FOURNISSEURS</h4>
                                                <hr class=\"m-t--10\">
                                                <table class=\"table-bordered\" id=\"dataFOURNISSEURMAT\"
                                                       style=\"padding: 0; width: 100%\">
                                                    <thead class=\"bg-blue\">
                                                    <th style=\"width: 10px !important;\" class=\"col-white\"></th>
                                                    <th class=\"col-white\">FOURNISSEURS</th>
                                                    </thead>
                                                    <tbody>
                                                    ";
        // line 611
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 611, $this->source); })()), "user", [], "any", false, false, false, 611), "fournisseurs", [], "any", false, false, false, 611));
        foreach ($context['_seq'] as $context["_key"] => $context["fourn"]) {
            // line 612
            yield "                                                            <tr>
                                                                <td class=\"text-center\">
                                                                    <input type=\"checkbox\" data-toggle=\"toggle\" class=\"FOUR\"
                                                                           value=\"";
            // line 615
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fourn"], "id", [], "any", false, false, false, 615), "html", null, true);
            yield "\"></td>

                                                                <td class=\"col-black bolo600\">";
            // line 617
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["fourn"], "fournisseur", [], "any", false, false, false, 617)), "html", null, true);
            yield "</td>
                                                            </tr>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['fourn'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 620
        yield "                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                           <div class=\"row clearfix\">
                            <div class=\"col-sm-12\">
                                <div class=\"card shadow\">
                                    <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow: scroll\">
                                            <h4 class=\"bolo700 col-blue\">BÉNÉFICIAIRES</h4>
                                            <table class=\"table-striped table-bordered display nowrap\"
                                                   style=\"width: 100%;\" id=\"dataBenef\">
                                                <thead>
                                                <tr class=\"text-center\">
                                                    <th class=\"mw10\"></th>
                                                    <th class=\"mw200\">NOM & PRÉNOMS</th>
                                                    <th class=\"mw150\">PROFESSION</th>
                                                    <th class=\"mw100\">CONTACTS</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                ";
        // line 645
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["beneficiaires"]) || array_key_exists("beneficiaires", $context) ? $context["beneficiaires"] : (function () { throw new RuntimeError('Variable "beneficiaires" does not exist.', 645, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["benef"]) {
            // line 646
            yield "
                                                        <tr>
                                                            <td class=\"text-center\">
                                                                <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                       class=\"BENEF\"
                                                                       value=\"";
            // line 651
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["benef"], "id", [], "any", false, false, false, 651), "html", null, true);
            yield "\"></td>

                                                            <td class=\"col-blue bolo600 text-left\">";
            // line 653
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["benef"], "noms", [], "any", false, false, false, 653)), "html", null, true);
            yield "</td>
                                                            <td class=\"text-left bolo600\">";
            // line 654
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["benef"], "fonction", [], "any", false, false, false, 654)), "html", null, true);
            yield "</td>
                                                            <td class=\"bolo600\">";
            // line 655
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["benef"], "contacts", [], "any", false, false, false, 655), "html", null, true);
            yield "</td>
                                                        </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['benef'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 658
        yield "                                                </tbody>
                                            </table>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class=\"row clearfix\">
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                <div class=\"card shadow\">
                                    <div style=\"padding: 20px\">
                                        <h4 class=\"pri  bolo700\">CHANTIERS / MATERIELS</h4>
                                        <hr>
                                    </div>
                                    <div class=\"card-body\" style=\"padding:20px\">
                                        <div class=\"table-responsive\" style=\"margin-top: -40px; overflow: scroll\">
                                            <table class=\"table table-hover dashboard-task-infos\">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Date d'attribution</th>
                                                    <th>Code</th>
                                                    <th>Matériels</th>
                                                    <th>Chantier</th>
                                                    <th>Qté</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                ";
        // line 687
        $context["i"] = 0;
        // line 688
        yield "                                                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["matChantier"]) || array_key_exists("matChantier", $context) ? $context["matChantier"] : (function () { throw new RuntimeError('Variable "matChantier" does not exist.', 688, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mat"]) {
            // line 689
            yield "                                                    ";
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 689, $this->source); })()) + 1);
            // line 690
            yield "                                                    <tr>
                                                        <td>";
            // line 691
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 691, $this->source); })()), "html", null, true);
            yield "</td>
                                                        <td><span class=\"label bg-orange font-12\">";
            // line 692
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["mat"], "date", [], "any", false, false, false, 692), "Y.m.d H.i"), "html", null, true);
            yield "</span></td>
                                                        <td><span class=\"label bg-light-blue font-12\">";
            // line 693
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["mat"], "materiel", [], "any", false, false, false, 693), "code", [], "any", false, false, false, 693), "html", null, true);
            yield "</span></td>
                                                        <td><span class=\"label bg-pink font-12\">";
            // line 694
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["mat"], "materiel", [], "any", false, false, false, 694), "materiel", [], "any", false, false, false, 694), "html", null, true);
            yield "</span></td>
                                                        <td><span class=\"label bg-green font-12\">";
            // line 695
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["mat"], "chantier", [], "any", false, false, false, 695), "nomchantier", [], "any", false, false, false, 695), "html", null, true);
            yield "</span></td>
                                                        <td class=\"text-center\"><span class=\"label bg-blue font-12\">";
            // line 696
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mat"], "quantite", [], "any", false, false, false, 696), "html", null, true);
            yield "</span></td>
                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['mat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 699
        yield "                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"card shadow\">
                                    <div style=\"padding: 20px\">
                                        <h4 class=\"pri bolo700\">BÉNÉFICIAIRES / MATÉRIELS</h4>
                                        <hr>
                                    </div>
                                    <div class=\"card-body\" style=\"padding:20px\">
                                        <div class=\"table-responsive\" style=\"margin-top: -40px; overflow: scroll\">
                                            <table class=\"table table-hover dashboard-task-infos\">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Date d'attribution</th>
                                                    <th>Code</th>
                                                    <th>Matériels</th>
                                                    <th>Bénéficiaires</th>
                                                    <th>Qté</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                ";
        // line 723
        $context["i"] = 0;
        // line 724
        yield "                                                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["matBeneficiaire"]) || array_key_exists("matBeneficiaire", $context) ? $context["matBeneficiaire"] : (function () { throw new RuntimeError('Variable "matBeneficiaire" does not exist.', 724, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["matt"]) {
            // line 725
            yield "                                                    ";
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 725, $this->source); })()) + 1);
            // line 726
            yield "                                                    <tr>
                                                        <td>";
            // line 727
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 727, $this->source); })()), "html", null, true);
            yield "</td>
                                                        <td>
                                                            <span class=\"label bg-orange font-12\">";
            // line 729
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["matt"], "date", [], "any", false, false, false, 729), "Y.m.d H.i"), "html", null, true);
            yield "</span>
                                                        </td>
                                                        <td>
                                                            <span class=\"label bg-light-blue font-12\">";
            // line 732
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["matt"], "materiel", [], "any", false, false, false, 732), "code", [], "any", false, false, false, 732), "html", null, true);
            yield "</span>
                                                        </td>
                                                        <td>
                                                            <span class=\"label bg-pink font-12\">";
            // line 735
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["matt"], "materiel", [], "any", false, false, false, 735), "materiel", [], "any", false, false, false, 735), "html", null, true);
            yield "</span>
                                                        </td>
                                                        <td>
                                                            <span class=\"label bg-green font-12\">";
            // line 738
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["matt"], "beneficiaire", [], "any", false, false, false, 738), "noms", [], "any", false, false, false, 738)), "html", null, true);
            yield "</span>
                                                        </td>
                                                        <td class=\"text-center\">
                                                            <span class=\"label bg-blue font-12\">";
            // line 741
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matt"], "quantite", [], "any", false, false, false, 741), "html", null, true);
            yield "</span>
                                                        </td>
                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['matt'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 745
        yield "                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"card\">
                                    <div class=\"header\" style=\"padding:10px !important\">
                                        <h4 style=\"color:#4e73df !important; font-weight: bold \">LISTE COMPLÈTE DU MATÉRIEL</h4>
                                    </div>
                                    <div class=\"body\">
                                        <div class=\"table-responsive\" style=\"padding-bottom:20px\">
                                            <table class=\"table-striped table-bordered display nowrap\"
                                                   style=\"width: 100%\" id=\"dataMateriel2\">
                                                <thead>
                                                <tr class=\"text-center\">
                                                    <th style=\"width: 10px !important;\"></th>
                                                    <th style=\"min-width: 100px !important;\">DATE&nbsp;D'AJOUT</th>
                                                    <th class=\"text-center\">CODE</th>
                                                    <th>MATÉRIEL</th>
                                                    <th class=\"text-center\">QUANTITÉ</th>
                                                    <th>FAMILLES</th>
                                                    <th class=\"text-center\">ETAT</th>
                                                    <th class=\"text-center\">AFFECTÉ</th>
                                                    <th class=\"text-center\">RESTE</th>
                                                    <th class=\"text-center\">FOURNISSEUR</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                ";
        // line 773
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["materiels"]) || array_key_exists("materiels", $context) ? $context["materiels"] : (function () { throw new RuntimeError('Variable "materiels" does not exist.', 773, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["materiel"]) {
            // line 774
            yield "                                                    <tr>
                                                        <td class=\"text-center\">
                                                            <input type=\"checkbox\" data-toggle=\"toggle\" class=\"MATS\"
                                                                   value=\"";
            // line 777
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 777), "html", null, true);
            yield "\"></td>
                                                        <td>";
            // line 778
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "date", [], "any", false, false, false, 778), "Y.m.d H.m"), "html", null, true);
            yield "</td>
                                                        <td title=\"";
            // line 779
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "code", [], "any", false, false, false, 779), "html", null, true);
            yield "\"
                                                            class=\"bolo600 text-center\">";
            // line 780
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "code", [], "any", false, false, false, 780), "html", null, true);
            yield "</td>
                                                        <td title=\"";
            // line 781
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "materiel", [], "any", false, false, false, 781), "html", null, true);
            yield "\"
                                                            class=\"col-blue bolo600\">";
            // line 782
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "materiel", [], "any", false, false, false, 782), "html", null, true);
            yield "</td>
                                                        <td title=\"";
            // line 783
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "stock", [], "any", false, false, false, 783), "html", null, true);
            yield "\" class=\"col-blue bolo600 text-center\">
                                                            <span class=\"label bg-green font-12\">";
            // line 784
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "stock", [], "any", false, false, false, 784), "html", null, true);
            yield "</span></td>
                                                        <td>
                                                            ";
            // line 786
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "famille", [], "any", false, false, false, 786)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 787
                yield "                                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "famille", [], "any", false, false, false, 787), "famille", [], "any", false, false, false, 787)), "html", null, true);
                yield "
                                                            ";
            }
            // line 789
            yield "                                                        </td>
                                                        <td class=\"text-center bolo600\">
                                                            ";
            // line 791
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "etat", [], "any", false, false, false, 791) == "libre")) {
                // line 792
                yield "                                                                <span class=\"label bg-green font-12\">Libre</span>
                                                            ";
            } else {
                // line 794
                yield "                                                                <span class=\"label bg-pink font-12\">Utilisé</span>
                                                            ";
            }
            // line 796
            yield "                                                        </td>
                                                        <td class=\"text-center\">
                                                            <span class=\"label bg-blue font-12\">";
            // line 798
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "stock", [], "any", false, false, false, 798) - CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "reste", [], "any", false, false, false, 798)), "html", null, true);
            yield "</span>
                                                        </td>
                                                        <td class=\"text-center\">
                                                            <span class=\"label bg-pink font-12\">";
            // line 801
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "reste", [], "any", false, false, false, 801), "html", null, true);
            yield "</span>
                                                        </td>
                                                        <td class=\"bolo600\">
                                                            ";
            // line 804
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "fournisseur", [], "any", false, false, false, 804)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 805
                yield "                                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "fournisseur", [], "any", false, false, false, 805), "fournisseur", [], "any", false, false, false, 805)), "html", null, true);
                yield "
                                                            ";
            }
            // line 807
            yield "                                                        </td>
                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['materiel'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 810
        yield "                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"card\">
                                    <div class=\"header\" style=\"padding:10px !important\">
                                        <h4 style=\"color:#4e73df !important; font-weight: bold\">HISTORIQUE DES
                                            MOUVEMENTS</h4>
                                    </div>
                                    <div class=\"body\">
                                        <div class=\"table-responsive\" style=\"margin-bottom:30px\">
                                            <table class=\"table-striped table-bordered display nowrap\"
                                                   style=\"width: 100%\" id=\"dataMateriel\">
                                                <thead>
                                                <tr class=\"text-center\">
                                                    <th style=\"width: 80px !important;\">ENREGISTRÉ&nbsp;LE</th>
                                                    <th>CODE</th>
                                                    <th>MATÉRIEL</th>
                                                    <th>CHANTIERS OU BÉNÉFICIAIRES</th>
                                                    <th class=\"text-center\">MOUVEMENT</th>
                                                    <th class=\"text-center\">QUANTITÉ</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                ";
        // line 836
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["matHistorique"]) || array_key_exists("matHistorique", $context) ? $context["matHistorique"] : (function () { throw new RuntimeError('Variable "matHistorique" does not exist.', 836, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["matpr"]) {
            // line 837
            yield "                                                    <tr>
                                                        <td>";
            // line 838
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["matpr"], "date", [], "any", false, false, false, 838), "Y.m.d H.i.s"), "html", null, true);
            yield "</td>
                                                        <td title=\"";
            // line 839
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matpr"], "code", [], "any", false, false, false, 839), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matpr"], "code", [], "any", false, false, false, 839), "html", null, true);
            yield "</td>
                                                        <td title=\"";
            // line 840
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matpr"], "materiel", [], "any", false, false, false, 840), "html", null, true);
            yield "\"
                                                            class=\"col-blue bolo600\">";
            // line 841
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matpr"], "materiel", [], "any", false, false, false, 841), "html", null, true);
            yield "</td>
                                                        <td title=\"";
            // line 842
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["matpr"], "receveur", [], "any", false, false, false, 842)), "html", null, true);
            yield "\"
                                                            class=\"col-pink bolo600\">";
            // line 843
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["matpr"], "receveur", [], "any", false, false, false, 843)), "html", null, true);
            yield "</td>
                                                        <td class=\"text-center bolo600\"
                                                            title=\"";
            // line 845
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["matpr"], "mouvement", [], "any", false, false, false, 845)), "html", null, true);
            yield "\">
                                                            ";
            // line 846
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["matpr"], "mouvement", [], "any", false, false, false, 846) == "attribution")) {
                // line 847
                yield "                                                                <span class=\"label bg-green font-12\"> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["matpr"], "mouvement", [], "any", false, false, false, 847)), "html", null, true);
                yield "</span>
                                                            ";
            } else {
                // line 849
                yield "                                                                <span class=\"label bg-pink font-12\"> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["matpr"], "mouvement", [], "any", false, false, false, 849)), "html", null, true);
                yield "</span>
                                                            ";
            }
            // line 851
            yield "                                                        </td>
                                                        <td class=\"text-center bolo600\"><span class=\"label bg-green font-12\">";
            // line 852
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matpr"], "quantite", [], "any", false, false, false, 852), "html", null, true);
            yield "</span></td>
                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['matpr'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 855
        yield "                                                </tbody>
                                            </table>
                                            <br></div>
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
        return "content/materiel.html.twig";
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
        return array (  1533 => 855,  1524 => 852,  1521 => 851,  1515 => 849,  1509 => 847,  1507 => 846,  1503 => 845,  1498 => 843,  1494 => 842,  1490 => 841,  1486 => 840,  1480 => 839,  1476 => 838,  1473 => 837,  1469 => 836,  1441 => 810,  1433 => 807,  1427 => 805,  1425 => 804,  1419 => 801,  1413 => 798,  1409 => 796,  1405 => 794,  1401 => 792,  1399 => 791,  1395 => 789,  1389 => 787,  1387 => 786,  1382 => 784,  1378 => 783,  1374 => 782,  1370 => 781,  1366 => 780,  1362 => 779,  1358 => 778,  1354 => 777,  1349 => 774,  1345 => 773,  1315 => 745,  1305 => 741,  1299 => 738,  1293 => 735,  1287 => 732,  1281 => 729,  1276 => 727,  1273 => 726,  1270 => 725,  1265 => 724,  1263 => 723,  1237 => 699,  1228 => 696,  1224 => 695,  1220 => 694,  1216 => 693,  1212 => 692,  1208 => 691,  1205 => 690,  1202 => 689,  1197 => 688,  1195 => 687,  1164 => 658,  1155 => 655,  1151 => 654,  1147 => 653,  1142 => 651,  1135 => 646,  1131 => 645,  1104 => 620,  1095 => 617,  1090 => 615,  1085 => 612,  1081 => 611,  1058 => 590,  1052 => 589,  1046 => 586,  1042 => 585,  1037 => 583,  1032 => 580,  1029 => 579,  1025 => 578,  982 => 537,  976 => 533,  970 => 529,  968 => 528,  942 => 505,  919 => 484,  910 => 481,  905 => 479,  901 => 478,  898 => 477,  894 => 476,  884 => 469,  857 => 445,  834 => 424,  825 => 421,  820 => 419,  816 => 418,  813 => 417,  809 => 416,  798 => 408,  771 => 384,  757 => 372,  748 => 369,  741 => 367,  738 => 366,  734 => 365,  712 => 345,  706 => 344,  700 => 341,  695 => 339,  691 => 338,  688 => 337,  685 => 336,  681 => 335,  670 => 327,  647 => 307,  640 => 303,  635 => 300,  631 => 298,  627 => 296,  625 => 295,  618 => 290,  612 => 288,  606 => 286,  604 => 285,  593 => 276,  587 => 274,  581 => 272,  579 => 271,  568 => 262,  562 => 260,  556 => 258,  554 => 257,  544 => 250,  540 => 249,  515 => 227,  501 => 215,  495 => 214,  492 => 213,  488 => 211,  482 => 210,  477 => 208,  472 => 206,  467 => 205,  464 => 204,  460 => 203,  455 => 202,  452 => 201,  446 => 200,  443 => 199,  440 => 198,  437 => 197,  432 => 196,  429 => 195,  426 => 194,  422 => 193,  400 => 173,  394 => 172,  388 => 169,  383 => 167,  379 => 166,  376 => 165,  373 => 164,  369 => 163,  359 => 156,  337 => 137,  326 => 129,  321 => 126,  316 => 123,  311 => 120,  309 => 119,  302 => 114,  296 => 112,  290 => 110,  288 => 109,  279 => 102,  273 => 100,  267 => 98,  265 => 97,  254 => 88,  248 => 86,  242 => 84,  240 => 83,  227 => 72,  221 => 70,  215 => 68,  213 => 67,  201 => 57,  195 => 55,  189 => 53,  187 => 52,  174 => 41,  168 => 39,  162 => 37,  160 => 36,  149 => 28,  145 => 27,  141 => 25,  135 => 21,  129 => 17,  127 => 16,  117 => 9,  113 => 8,  109 => 7,  104 => 6,  91 => 5,  77 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    {{ title }}
{% endblock %}
{% block body %}
    <input type=\"text\" class=\"hide\" id=\"idfamille\" value=\"{{ famille.id }}\"/>
    <input type=\"text\" class=\"hide\" id=\"idfourn\" value=\"{{ fournisseur.id }}\"/>
    <input type=\"text\" class=\"hide\" id=\"idmateriel\" value=\"{{ materiel.id }}\"/>
    <input type=\"text\" class=\"hide\" id=\"idbenef\" value=\"{{ beneficiaire.id }}\"/>

    <div class=\"modal fade right\" id=\"ajouterMATERIEL\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                {% if materiel.id is null %}
                    <div class=\"modal-header bg-blue text-white\">
                        <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">AJOUTER UN MATÉRIEL</h4>
                    </div>
                {% else %}
                    <div class=\"modal-header bg-green text-white\">
                        <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">MODIFIER UN MATÉRIEL</h4>
                    </div>
                {% endif %}
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        {{ form_start(formMateriel, {'attr': {'id': 'addMaterielForm' }}) }}
                        {{ form_row(formMateriel._token) }}

                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">Matériel<span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        {% if materiel.id is null %}
                                            {{ form_widget(formMateriel.materiel,{'attr':{'class':'form-control' }}) }}
                                        {% else %}
                                            {{ form_widget(formMateriel.materiel,{'attr':{'class':'form-control col-pink' }}) }}
                                        {% endif %}

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">Famille</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">

                                        {% if materiel.id is null %}
                                            {{ form_widget(formMateriel.famille,{'required':'','attr':{'class':'form-control' }}) }}
                                        {% else %}
                                            {{ form_widget(formMateriel.famille,{'required':'','attr':{'class':'form-control col-pink' }}) }}
                                        {% endif %}

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">Fournisseur</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {% if materiel.id is null %}
                                            {{ form_widget(formMateriel.fournisseur,{'required':'','attr':{'class':'form-control' }}) }}
                                        {% else %}
                                            {{ form_widget(formMateriel.fournisseur,{'required':'','attr':{'class':'form-control col-pink' }}) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">Code du matériel<span
                                            class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {% if materiel.id is null %}
                                            {{ form_widget(formMateriel.code,{'attr':{'class':'form-control' }}) }}
                                        {% else %}
                                            {{ form_widget(formMateriel.code,{'attr':{'class':'form-control col-pink' }}) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-4\">
                                <label class=\"form-label m-b--30 pri bolo\">Quantité</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {% if materiel.id is null %}
                                            {{ form_widget(formMateriel.stock,{'attr':{'class':'form-control' }}) }}
                                        {% else %}
                                            {{ form_widget(formMateriel.stock,{'attr':{'class':'form-control col-pink' }}) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-8\">
                                <label class=\"form-label m-b--30 pri bolo\">Date d'acquisition</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {% if materiel.id is null %}
                                            {{ form_widget(formMateriel.date,{'required':'','attr':{'class':'form-control' }}) }}
                                        {% else %}
                                            {{ form_widget(formMateriel.date,{'required':'','attr':{'class':'form-control col-pink' }}) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            {% if materiel.id is null %}
                                <input type=\"submit\" id=\"addMateriel\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-blue\">
                            {% else %}
                                <input type=\"submit\" id=\"updateMateriel\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect text-white bg-green\">
                            {% endif %}


                            <div type=\"button\" id=\"closeMateriel\" class=\"btn btn-link waves-effect text-white bg-pink\" data-dismiss=\"modal\">FERMER</div>
                            <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadMateriel\"></div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        {{ form_end(formMateriel) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"affecterMATERIEL\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"p-5 bg-pri\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">
                            AFFECTER SUR UN CHANTIER
                        </h4>
                    </div>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        <form id=\"affMatChantierForm\">
                            <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('affmatchantier') }}\"/>
                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label m-b--30 col-blue bolo\">MATERIELS</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            <select class=\"form-control show-tick\" name=\"mate\">
                                                {% for materiel in materiels %}
                                                    {% if materiel.etat != 'occupe' %}
                                                        <optgroup label=\"\" class=\" bolo700 col-pink\">
                                                            <option value=\"{{ materiel.id }}\"
                                                                    title=\"{{ materiel.materiel }}\"
                                                                    class=\"col-blue-grey\"
                                                                    style=\"font-weight: 500 !important; font-size: 15px !important;\">{{ materiel.materiel }}</option>
                                                        </optgroup>
                                                    {% endif %}
                                                {% endfor %}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label m-b--30 col-blue bolo\">QUANTITÉ</label>
                                    <div class=\"form-group form-float\">
                                        <div class=\"form-line\">
                                            <input type=\"number\" class=\"form-control\" name=\"qte\"></div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label m-b--30 col-blue bolo\">CHANTIERS</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            <select class=\"form-control show-tick\" name=\"chantier\">
                                                {% for cli in clients %}
                                                    {% if cli.type is null %}
                                                    {% set count = 0 %}
                                                    {% for pro in cli.chantiers %}
                                                        {% if pro.corbeille is null and pro.archiver != 'oui' %}
                                                            {% set count = count + 1 %}
                                                        {% endif %}
                                                    {% endfor %}
                                                    {% if count > 0 %}
                                                        <optgroup label=\"{{ cli.nomclient }}\" class=\" bolo700 col-pink\">
                                                            {% for pro in cli.chantiers %}
                                                                {% if pro.corbeille is null and pro.archiver != 'oui' %}
                                                                    <option value=\"{{ pro.id }}\"
                                                                            title=\"{{ pro.nomchantier }}\"
                                                                            class=\"col-blue\"
                                                                            style=\"font-weight: 500 !important; font-size: 15px !important;\">{{ pro.nomchantier|length > 40 ? pro.nomchantier|slice(0, 40)|upper ~ '…' : pro.nomchantier|upper }}</option>
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
                            <div class=\"text-center\">
                                <input type=\"submit\" id=\"affMatChantier\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-blue\">
                                <div type=\"button\" id=\"closeAffMatChantier\"
                                     class=\"btn btn-link waves-effect text-white bg-pink\" data-dismiss=\"modal\">
                                    FERMER
                                </div>
                                <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                     class=\"align-justify\" id=\"loadAffMatChantier\"></div>
                            <br>
                            <br>
                            <br></form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"addBENEFICIAIRE\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"p-5 bg-pri\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">
                            AJOUTER UN BÉNÉFICIAIRE
                        </h4>
                    </div>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        {{ form_start(formBeneficiaire, {'attr': {'id':'addBenefForm' }}) }}
                        {{ form_row(formBeneficiaire._token) }}
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">NOM & PRÉNOMS<span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        {% if editBenef %}
                                            {{ form_widget(formBeneficiaire.noms,{'attr':{'class':'form-control col-pink ' }}) }}
                                        {% else %}
                                            {{ form_widget(formBeneficiaire.noms,{'attr':{'class':'form-control' }}) }}
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
                                        {% if editBenef %}
                                            {{ form_widget(formBeneficiaire.fonction,{'attr':{'class':'form-control col-pink ' }}) }}
                                        {% else %}
                                            {{ form_widget(formBeneficiaire.fonction,{'attr':{'class':'form-control' }}) }}
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
                                        {% if editBenef %}
                                            {{ form_widget(formBeneficiaire.contacts,{'attr':{'class':'form-control col-pink ' }}) }}
                                        {% else %}
                                            {{ form_widget(formBeneficiaire.contacts,{'attr':{'class':'form-control' }}) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            {% if editBenef %}
                                <input type=\"submit\" id=\"updBenef\" value=\"MODIFIER\" class=\"btn btn-link waves-effect text-white bg-green\">
                            {% else %}
                                <input type=\"submit\" id=\"addBenef\" value=\"ENREGISTRER\" class=\"btn btn-link waves-effect text-white bg-blue\">
                            {% endif %}


                            <div type=\"button\" id=\"closeBenef\" class=\"btn btn-link waves-effect text-white bg-pink\" data-dismiss=\"modal\">FERMER
                            </div><img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\" class=\"align-justify\" id=\"loadBenef\"></div>
                        <br>
                        <br>
                        <br>
                        {{ form_end(formBeneficiaire) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"attribuerBENEFICIAIRE\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"p-5 bg-pri\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">
                            ATTRIBUER DES MATÉRIELS À UN BÉNÉFICIAIRE
                        </h4>
                    </div>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        <form id=\"attribuerMatBenefForm\">
                            <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('attribuerMatBenef') }}\"/>

                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label m-b--30 col-blue bolo\">MATÉRIELS</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            <select class=\"form-control show-tick\" name=\"mate\">
                                                {% for materiel in materiels %}
                                                    {% if materiel.etat != 'occupe' %}
                                                        <optgroup label=\"\" class=\" bolo700 col-pink\">
                                                            <option value=\"{{ materiel.id }}\"
                                                                    title=\"{{ materiel.materiel }}\"
                                                                    class=\"col-blue-grey\"
                                                                    style=\"font-weight: 500 !important; font-size: 15px !important;\">{{ materiel.materiel }}</option>
                                                        </optgroup>
                                                    {% endif %}
                                                {% endfor %}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label m-b--30 col-blue bolo\">QUANTITÉ</label>
                                    <div class=\"form-group form-float\">
                                        <div class=\"form-line\">
                                            <input type=\"number\" class=\"form-control\" name=\"qte\"></div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label m-b--30 col-blue bolo\">BÉNÉFICIAIRES</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            <select class=\"form-control show-tick\" name=\"benef\">
                                                {% for benef in beneficiaires %}
                                                    <optgroup label=\"\" class=\" bolo700 col-pink\">
                                                        <option value=\"{{ benef.id }}\" title=\"{{ benef.noms }}\"
                                                                class=\"col-blue-grey\"
                                                                style=\"font-weight: 500 !important; font-size: 15px !important;\">{{ benef.noms|length > 40 ? benef.noms|slice(0, 40)|upper ~ '…' : benef.noms|upper }}</option>
                                                    </optgroup>
                                                {% endfor %}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"text-center\">
                                <input type=\"submit\" id=\"attrMatBenef\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-blue\">
                                <div type=\"button\" id=\"closeAttriMatBenef\"
                                     class=\"btn btn-link waves-effect text-white bg-pink\" data-dismiss=\"modal\">
                                    FERMER
                                </div>
                                <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                     class=\"align-justify\" id=\"loadAttribuerMatBenef\"></div>
                            <br>
                            <br>
                            <br></form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"restituerBenef\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"p-5 bg-pri\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">
                            MATÉRIELS ATTRIBUÉS
                        </h4>
                    </div>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        <form id=\"restituerBenefForm\">
                            <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('restBenef') }}\"/>

                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label m-b--30 col-blue bolo\">MATÉRIELS</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            <select class=\"form-control\" name=\"mate\">
                                                {% for mate in matBeneficiaire %}
                                                        <optgroup label=\"\" class=\" bolo700 col-pink\">
                                                            <option value=\"{{ mate.id }}\"
                                                                    title=\"{{ mate.materiel.materiel }}\"
                                                                    class=\"col-blue-grey\"
                                                                    style=\"font-weight: 500 !important; font-size: 15px !important;\">{{ mate.materiel.materiel }}</option>
                                                        </optgroup>
                                                {% endfor %}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label m-b--30 col-blue bolo\">QUANTITÉ</label>
                                    <div class=\"form-group form-float\">
                                        <div class=\"form-line\">
                                            <input type=\"number\" class=\"form-control\" name=\"qte\"></div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"text-center\">
                                <input type=\"submit\" id=\"restBenef\" value=\"RESTITUER\"
                                       class=\"btn btn-link waves-effect text-white bg-blue\">
                                <div type=\"button\" id=\"closeRestBenef\"
                                     class=\"btn btn-link waves-effect text-white bg-pink\" data-dismiss=\"modal\">
                                    FERMER
                                </div>
                                <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                     class=\"align-justify\" id=\"loadRestBenef\"></div>
                            <br>
                            <br>
                            <br></form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"restituerChantier\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"p-5 bg-pri\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">
                            MATÉRIELS ATTRIBUÉS
                        </h4>
                    </div>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        <form id=\"restituerChantierForm\">
                            <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('restChantier') }}\"/>
                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label m-b--30 col-blue bolo\">MATÉRIELS</label>
                                    <div class=\"form-group\">
                                        <div class=\"form-line\">
                                            <select class=\"form-control\" name=\"mat\">
                                                {% for mater in matChantier %}
                                                    <optgroup label=\"\" class=\" bolo700 col-pink\">
                                                        <option value=\"{{ mater.id }}\"
                                                                title=\"{{ mater.materiel.materiel }}\"
                                                                class=\"col-blue-grey\"
                                                                style=\"font-weight: 500 !important; font-size: 15px !important;\">{{ mater.materiel.materiel }}</option>
                                                    </optgroup>
                                                {% endfor %}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row clearfix m-b-10\">
                                <div class=\"col-sm-12\">
                                    <label class=\"form-label m-b--30 col-blue bolo\">QUANTITÉ</label>
                                    <div class=\"form-group form-float\">
                                        <div class=\"form-line\">
                                            <input type=\"number\" class=\"form-control\" name=\"qte\"></div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"text-center\">
                                <input type=\"submit\" id=\"restChantier\" value=\"RESTITUER\"
                                       class=\"btn btn-link waves-effect text-white bg-blue\">
                                <div type=\"button\" id=\"closeRestChantier\"
                                     class=\"btn btn-link waves-effect text-white bg-pink\" data-dismiss=\"modal\">
                                    FERMER
                                </div>
                                <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                     class=\"align-justify\" id=\"loadRestChantier\"></div>
                            <br>
                            <br>
                            <br></form>
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
                        <h3 class=\"col-pink bolo700 text-center\">MATÉRIEL</h3>

                        <div class=\" row clearfix text-center m-t-20 p-b-5\">
                            <div class=\"col-sm-12\">
                                <div class=\"btn-group btn-group-sm \" style=\"margin: auto\"  role=\"group\" aria-label=\"Small button group\">


                                    {% if materiel.id is null %}
                                        <button type=\"button\" data-toggle=\"modal\" data-target=\"#ajouterMATERIEL\"
                                                class=\"btn bg-blue text-white\" style=\"border:1px solid #dddfeb\">+ MATÉRIEL
                                        </button>
                                    {% else %}
                                        <button type=\"button\" data-toggle=\"modal\" data-target=\"#ajouterMATERIEL\"
                                                class=\"btn bg-green text-white\" style=\"border:1px solid #dddfeb\">- MATÉRIEL
                                        </button>
                                    {% endif %}
                                    <button type=\"button\" data-toggle=\"modal\" data-target=\"#addBENEFICIAIRE\"
                                            class=\"btn bg-blue text-white\" style=\"border:1px solid #dddfeb\">+ BÉNÉFICIAIRE
                                    </button>

                                </div>
                                <div class=\"btn-group btn-group-sm \" style=\"margin: auto\"  role=\"group\" aria-label=\"Small button group\">
                                    <button type=\"button\" data-toggle=\"modal\" data-target=\"#affecterMATERIEL\"
                                            class=\"btn bg-blue text-white\" style=\"border:1px solid #dddfeb\"> AFFECTER SUR UN CHANTIER
                                    </button>

                                    <button type=\"button\" data-toggle=\"modal\" data-target=\"#attribuerBENEFICIAIRE\"
                                            class=\"btn bg-blue text-white\" style=\"border:1px solid #dddfeb\"> ATTRIBUER À UN BÉNÉFICIAIRE
                                    </button>

                                    <button type=\"button\" data-toggle=\"modal\" data-target=\"#restituerBenef\"
                                            class=\"btn bg-blue text-white\" style=\"border:1px solid #dddfeb\">RESTITUTION D'UN BÉNÉFICIAIRE
                                    </button>

                                    <button type=\"button\" data-toggle=\"modal\" data-target=\"#restituerChantier\"
                                            class=\"btn bg-blue text-white\" style=\"border:1px solid #dddfeb\">RESTITUTION DU CHANTIER
                                    </button>

                                </div>
                            </div>
                        </div>

                        <div class=\"row clearfix\">
                            <div class=\"col-sm-6\">
                                <div class=\"card shadow \">
                                    <div class=\"card-body\" style=\"padding: 20px\">
                                        <div class=\"table-responsive\" style=\"padding-bottom: 30px\">
                                            <h4 class=\"pri  bolo700\">FAMILLES</h4>
                                            <hr class=\"m-t--10\">
                                            <table class=\"table-bordered\" id=\"dataFAMILLEMAT\"
                                                   style=\"padding: 0; width: 100%\">
                                                <thead class=\"bg-blue\">
                                                <th style=\"width: 10px !important;\" class=\"col-white\"></th>
                                                <th class=\"col-white\">FAMILLES</th>
                                                <th></th>
                                                </thead>
                                                <tbody>
                                                {% for famille in app.user.famille %}
                                                    {% if famille.corbeille is null %}
                                                        <tr>
                                                            <td align=\"center\">
                                                                <input type=\"checkbox\" data-toggle=\"toggle\" class=\"FAMY\"
                                                                       value=\"{{ famille.id }}\"></td>

                                                            <td class=\"col-black bolo600\">{{ famille.famille|upper }}</td>
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
                                        <div class=\"card-body\">
                                            <div class=\"table-responsive\" style=\"padding-bottom: 30px\">
                                                <h4 class=\"pri  bolo700\">FOURNISSEURS</h4>
                                                <hr class=\"m-t--10\">
                                                <table class=\"table-bordered\" id=\"dataFOURNISSEURMAT\"
                                                       style=\"padding: 0; width: 100%\">
                                                    <thead class=\"bg-blue\">
                                                    <th style=\"width: 10px !important;\" class=\"col-white\"></th>
                                                    <th class=\"col-white\">FOURNISSEURS</th>
                                                    </thead>
                                                    <tbody>
                                                    {% for fourn in app.user.fournisseurs %}
                                                            <tr>
                                                                <td class=\"text-center\">
                                                                    <input type=\"checkbox\" data-toggle=\"toggle\" class=\"FOUR\"
                                                                           value=\"{{ fourn.id }}\"></td>

                                                                <td class=\"col-black bolo600\">{{ fourn.fournisseur|upper }}</td>
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

                           <div class=\"row clearfix\">
                            <div class=\"col-sm-12\">
                                <div class=\"card shadow\">
                                    <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow: scroll\">
                                            <h4 class=\"bolo700 col-blue\">BÉNÉFICIAIRES</h4>
                                            <table class=\"table-striped table-bordered display nowrap\"
                                                   style=\"width: 100%;\" id=\"dataBenef\">
                                                <thead>
                                                <tr class=\"text-center\">
                                                    <th class=\"mw10\"></th>
                                                    <th class=\"mw200\">NOM & PRÉNOMS</th>
                                                    <th class=\"mw150\">PROFESSION</th>
                                                    <th class=\"mw100\">CONTACTS</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                {% for benef in beneficiaires %}

                                                        <tr>
                                                            <td class=\"text-center\">
                                                                <input type=\"checkbox\" data-toggle=\"toggle\"
                                                                       class=\"BENEF\"
                                                                       value=\"{{ benef.id }}\"></td>

                                                            <td class=\"col-blue bolo600 text-left\">{{ benef.noms|upper }}</td>
                                                            <td class=\"text-left bolo600\">{{ benef.fonction|upper }}</td>
                                                            <td class=\"bolo600\">{{ benef.contacts }}</td>
                                                        </tr>
                                                {% endfor %}
                                                </tbody>
                                            </table>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class=\"row clearfix\">
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                <div class=\"card shadow\">
                                    <div style=\"padding: 20px\">
                                        <h4 class=\"pri  bolo700\">CHANTIERS / MATERIELS</h4>
                                        <hr>
                                    </div>
                                    <div class=\"card-body\" style=\"padding:20px\">
                                        <div class=\"table-responsive\" style=\"margin-top: -40px; overflow: scroll\">
                                            <table class=\"table table-hover dashboard-task-infos\">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Date d'attribution</th>
                                                    <th>Code</th>
                                                    <th>Matériels</th>
                                                    <th>Chantier</th>
                                                    <th>Qté</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                {% set i = 0 %}
                                                {% for mat in matChantier %}
                                                    {% set i = i + 1 %}
                                                    <tr>
                                                        <td>{{ i }}</td>
                                                        <td><span class=\"label bg-orange font-12\">{{ mat.date|date('Y.m.d H.i') }}</span></td>
                                                        <td><span class=\"label bg-light-blue font-12\">{{ mat.materiel.code }}</span></td>
                                                        <td><span class=\"label bg-pink font-12\">{{ mat.materiel.materiel }}</span></td>
                                                        <td><span class=\"label bg-green font-12\">{{ mat.chantier.nomchantier }}</span></td>
                                                        <td class=\"text-center\"><span class=\"label bg-blue font-12\">{{ mat.quantite }}</span></td>
                                                    </tr>
                                                {% endfor %}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"card shadow\">
                                    <div style=\"padding: 20px\">
                                        <h4 class=\"pri bolo700\">BÉNÉFICIAIRES / MATÉRIELS</h4>
                                        <hr>
                                    </div>
                                    <div class=\"card-body\" style=\"padding:20px\">
                                        <div class=\"table-responsive\" style=\"margin-top: -40px; overflow: scroll\">
                                            <table class=\"table table-hover dashboard-task-infos\">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Date d'attribution</th>
                                                    <th>Code</th>
                                                    <th>Matériels</th>
                                                    <th>Bénéficiaires</th>
                                                    <th>Qté</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                {% set i = 0 %}
                                                {% for matt in matBeneficiaire %}
                                                    {% set i = i + 1 %}
                                                    <tr>
                                                        <td>{{ i }}</td>
                                                        <td>
                                                            <span class=\"label bg-orange font-12\">{{ matt.date|date('Y.m.d H.i') }}</span>
                                                        </td>
                                                        <td>
                                                            <span class=\"label bg-light-blue font-12\">{{ matt.materiel.code }}</span>
                                                        </td>
                                                        <td>
                                                            <span class=\"label bg-pink font-12\">{{ matt.materiel.materiel }}</span>
                                                        </td>
                                                        <td>
                                                            <span class=\"label bg-green font-12\">{{ matt.beneficiaire.noms|upper }}</span>
                                                        </td>
                                                        <td class=\"text-center\">
                                                            <span class=\"label bg-blue font-12\">{{ matt.quantite }}</span>
                                                        </td>
                                                    </tr>
                                                {% endfor %}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"card\">
                                    <div class=\"header\" style=\"padding:10px !important\">
                                        <h4 style=\"color:#4e73df !important; font-weight: bold \">LISTE COMPLÈTE DU MATÉRIEL</h4>
                                    </div>
                                    <div class=\"body\">
                                        <div class=\"table-responsive\" style=\"padding-bottom:20px\">
                                            <table class=\"table-striped table-bordered display nowrap\"
                                                   style=\"width: 100%\" id=\"dataMateriel2\">
                                                <thead>
                                                <tr class=\"text-center\">
                                                    <th style=\"width: 10px !important;\"></th>
                                                    <th style=\"min-width: 100px !important;\">DATE&nbsp;D'AJOUT</th>
                                                    <th class=\"text-center\">CODE</th>
                                                    <th>MATÉRIEL</th>
                                                    <th class=\"text-center\">QUANTITÉ</th>
                                                    <th>FAMILLES</th>
                                                    <th class=\"text-center\">ETAT</th>
                                                    <th class=\"text-center\">AFFECTÉ</th>
                                                    <th class=\"text-center\">RESTE</th>
                                                    <th class=\"text-center\">FOURNISSEUR</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                {% for materiel in materiels %}
                                                    <tr>
                                                        <td class=\"text-center\">
                                                            <input type=\"checkbox\" data-toggle=\"toggle\" class=\"MATS\"
                                                                   value=\"{{ materiel.id }}\"></td>
                                                        <td>{{ materiel.date|date('Y.m.d H.m') }}</td>
                                                        <td title=\"{{ materiel.code }}\"
                                                            class=\"bolo600 text-center\">{{ materiel.code }}</td>
                                                        <td title=\"{{ materiel.materiel }}\"
                                                            class=\"col-blue bolo600\">{{ materiel.materiel }}</td>
                                                        <td title=\"{{ materiel.stock }}\" class=\"col-blue bolo600 text-center\">
                                                            <span class=\"label bg-green font-12\">{{ materiel.stock }}</span></td>
                                                        <td>
                                                            {% if materiel.famille %}
                                                            {{ materiel.famille.famille|upper }}
                                                            {% endif %}
                                                        </td>
                                                        <td class=\"text-center bolo600\">
                                                            {% if materiel.etat == 'libre' %}
                                                                <span class=\"label bg-green font-12\">Libre</span>
                                                            {% else %}
                                                                <span class=\"label bg-pink font-12\">Utilisé</span>
                                                            {% endif %}
                                                        </td>
                                                        <td class=\"text-center\">
                                                            <span class=\"label bg-blue font-12\">{{ materiel.stock - materiel.reste }}</span>
                                                        </td>
                                                        <td class=\"text-center\">
                                                            <span class=\"label bg-pink font-12\">{{ materiel.reste }}</span>
                                                        </td>
                                                        <td class=\"bolo600\">
                                                            {% if materiel.fournisseur %}
                                                            {{ materiel.fournisseur.fournisseur|upper }}
                                                            {% endif %}
                                                        </td>
                                                    </tr>
                                                {% endfor %}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"card\">
                                    <div class=\"header\" style=\"padding:10px !important\">
                                        <h4 style=\"color:#4e73df !important; font-weight: bold\">HISTORIQUE DES
                                            MOUVEMENTS</h4>
                                    </div>
                                    <div class=\"body\">
                                        <div class=\"table-responsive\" style=\"margin-bottom:30px\">
                                            <table class=\"table-striped table-bordered display nowrap\"
                                                   style=\"width: 100%\" id=\"dataMateriel\">
                                                <thead>
                                                <tr class=\"text-center\">
                                                    <th style=\"width: 80px !important;\">ENREGISTRÉ&nbsp;LE</th>
                                                    <th>CODE</th>
                                                    <th>MATÉRIEL</th>
                                                    <th>CHANTIERS OU BÉNÉFICIAIRES</th>
                                                    <th class=\"text-center\">MOUVEMENT</th>
                                                    <th class=\"text-center\">QUANTITÉ</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                {% for matpr in matHistorique %}
                                                    <tr>
                                                        <td>{{ matpr.date|date('Y.m.d H.i.s') }}</td>
                                                        <td title=\"{{ matpr.code }}\">{{ matpr.code }}</td>
                                                        <td title=\"{{ matpr.materiel }}\"
                                                            class=\"col-blue bolo600\">{{ matpr.materiel }}</td>
                                                        <td title=\"{{ matpr.receveur|upper }}\"
                                                            class=\"col-pink bolo600\">{{ matpr.receveur|upper }}</td>
                                                        <td class=\"text-center bolo600\"
                                                            title=\"{{ matpr.mouvement|capitalize }}\">
                                                            {% if matpr.mouvement == 'attribution' %}
                                                                <span class=\"label bg-green font-12\"> {{ matpr.mouvement|upper }}</span>
                                                            {% else %}
                                                                <span class=\"label bg-pink font-12\"> {{ matpr.mouvement|upper }}</span>
                                                            {% endif %}
                                                        </td>
                                                        <td class=\"text-center bolo600\"><span class=\"label bg-green font-12\">{{ matpr.quantite }}</span></td>
                                                    </tr>
                                                {% endfor %}
                                                </tbody>
                                            </table>
                                            <br></div>
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
", "content/materiel.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\materiel.html.twig");
    }
}
