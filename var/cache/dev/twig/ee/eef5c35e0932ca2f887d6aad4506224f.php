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

/* content/client.html.twig */
class __TwigTemplate_3ae090504f588a17a402b8f0a02660c6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/client.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/client.html.twig"));

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
    <style>
        table td {
            max-width: 150px !important;
            white-space: nowrap;
            text-overflow: ellipsis;
            word-break: break-all;
            overflow: hidden;
            padding: 2px !important;
        }
    </style>

    <input type=\"text\" class=\"hide\" id=\"idclient\" value=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
        yield "\">
    <input type=\"text\" class=\"hide\" id=\"pager\" value=\"client\"/>

    <div class=\"modal fade right\" id=\"mdModalRegle\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-blue text-white\">
                    <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">AJOUTER UN RÈGLEMENT</h4>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
        // line 29
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formeRegle"]) || array_key_exists("formeRegle", $context) ? $context["formeRegle"] : (function () { throw new RuntimeError('Variable "formeRegle" does not exist.', 29, $this->source); })()), 'form_start', ["attr" => ["id" => "addReglementForm"]]);
        yield "
                        <input type=\"hidden\" name=\"token\" value=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addReglementToken"), "html", null, true);
        yield "\"/>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">FACTURES NON VALIDÉES</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        <select id=\"facfac\" name=\"facfac\" class=\"form-control\">
                                            <option value=\"\" disabled selected>Faites votre choix</option>
                                            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 39
            yield "                                                ";
            if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 39)) && (null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 39)))) {
                // line 40
                yield "                                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "chantiers", [], "any", false, false, false, 40));
                foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
                    // line 41
                    yield "                                                        ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "corbeille", [], "any", false, false, false, 41))) {
                        // line 42
                        yield "                                                            ";
                        $context["tt"] = 0;
                        // line 43
                        yield "
                                                            ";
                        // line 44
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "factures", [], "any", false, false, false, 44));
                        foreach ($context['_seq'] as $context["_key"] => $context["fac"]) {
                            // line 45
                            yield "                                                                ";
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "etat", [], "any", false, false, false, 45) == "save") && (null === CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "corbeille", [], "any", false, false, false, 45)))) {
                                // line 46
                                yield "                                                                    ";
                                $context["tt"] = ((isset($context["tt"]) || array_key_exists("tt", $context) ? $context["tt"] : (function () { throw new RuntimeError('Variable "tt" does not exist.', 46, $this->source); })()) + 1);
                                // line 47
                                yield "                                                                ";
                            }
                            // line 48
                            yield "                                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['fac'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 49
                        yield "
                                                            ";
                        // line 50
                        if (((isset($context["tt"]) || array_key_exists("tt", $context) ? $context["tt"] : (function () { throw new RuntimeError('Variable "tt" does not exist.', 50, $this->source); })()) > 0)) {
                            // line 51
                            yield "                                                                <optgroup
                                                                        label=\"";
                            // line 52
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 52)), "html", null, true);
                            yield " | ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nomchantier", [], "any", false, false, false, 52)), "html", null, true);
                            yield "\">
                                                                    ";
                            // line 53
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "factures", [], "any", false, false, false, 53));
                            foreach ($context['_seq'] as $context["_key"] => $context["fac"]) {
                                // line 54
                                yield "                                                                        ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "etat", [], "any", false, false, false, 54) == "save")) {
                                    // line 55
                                    yield "                                                                            <option value=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "id", [], "any", false, false, false, 55), "html", null, true);
                                    yield "\"
                                                                                    class=\"";
                                    // line 56
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "id", [], "any", false, false, false, 56), "html", null, true);
                                    yield "\">FACTURE
                                                                                Nº";
                                    // line 57
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fac"], "numfacture", [], "any", false, false, false, 57), "html", null, true);
                                    yield "</option>
                                                                        ";
                                }
                                // line 59
                                yield "                                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['fac'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 60
                            yield "                                                                </optgroup>
                                                            ";
                        }
                        // line 62
                        yield "
                                                        ";
                    }
                    // line 64
                    yield "                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                yield "                                                ";
            }
            // line 66
            yield "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "                                        </select>
                                    </div>
                                    <p class=\"h6 dvfac\"></p>
                                    <p class=\"h6 dvface\"></p>
                                    <p class=\"h6 dvfaces\"></p>
                                    <p class=\"h6 resta hide\"></p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">MONTANT<span
                                            class=\"col-red\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeRegle"]) || array_key_exists("formeRegle", $context) ? $context["formeRegle"] : (function () { throw new RuntimeError('Variable "formeRegle" does not exist.', 82, $this->source); })()), "montant", [], "any", false, false, false, 82), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                    <p class=\"h6 restu col-pink\"></p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">MOYEN DE PAIEMENTS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formeRegle"]) || array_key_exists("formeRegle", $context) ? $context["formeRegle"] : (function () { throw new RuntimeError('Variable "formeRegle" does not exist.', 93, $this->source); })()), "moyen", [], "any", false, false, false, 93), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"addReglementChantiers\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect col-white bg-blue\">
                            <div type=\"button\" id=\"closeReglement\" class=\"btn btn-link waves-effect col-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadReglement\">
                        </div>
                        <br><br><br>
                        ";
        // line 109
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formeRegle"]) || array_key_exists("formeRegle", $context) ? $context["formeRegle"] : (function () { throw new RuntimeError('Variable "formeRegle" does not exist.', 109, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"mdModalClient\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">

        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header text-white bg-green p-l-20\">
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">MODIFIER UN CLIENT</h3>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
        // line 125
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 125, $this->source); })()), 'form_start', ["attr" => ["id" => "addClientForm"]]);
        yield "
                        ";
        // line 126
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 126, $this->source); })()), "_token", [], "any", false, false, false, 126), 'row');
        yield "
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label pri bolo\">CLIENT<span class=\"col-red\">*</span></label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        ";
        // line 132
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 132, $this->source); })()), "nomclient", [], "any", false, false, false, 132), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
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
        // line 142
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 142, $this->source); })()), "adresse", [], "any", false, false, false, 142), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
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
        // line 152
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 152, $this->source); })()), "contact", [], "any", false, false, false, 152), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
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
        // line 162
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 162, $this->source); })()), "contribuable", [], "any", false, false, false, 162), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"text\" class=\"hide\" id=\"idclient\" value=\"";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 168, $this->source); })()), "id", [], "any", false, false, false, 168), "html", null, true);
        yield "\">
                            <input type=\"submit\" id=\"updClient\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect text-white bg-green\">
                            <img src=\"";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadClient\">
                        </div>
                        ";
        // line 174
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 174, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class=\"content\" style=\"margin-top: 80px !important;\">
        <div class=\"container-fluid\">
            <div class=\"row clearfix\">
                <div class=\"col-sm-5\">
                    <div class=\"panel-body bg-white shadow\" style=\"height: 200px\">
                        <div class=\"table-responsive\">
                            <h3 class=\"bolo700\" style=\"color: red\"> ";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 187, $this->source); })()), "nomclient", [], "any", false, false, false, 187), "html", null, true);
        yield "</h3>
                            <table class=\"table-striped\" style=\"width: 100%\">
                                <tr>
                                    <td class=\"pri\">CODE CLIENT</td>
                                    <td class=\"col-black\">";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 191, $this->source); })()), "code", [], "any", false, false, false, 191), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <td class=\"pri\">COMPTE CONTRIBUABLE</td>
                                    <td class=\"col-black\">";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 195, $this->source); })()), "contribuable", [], "any", false, false, false, 195), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <td class=\"pri\">ADRESSE</td>
                                    <td class=\"col-black\">";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 199, $this->source); })()), "adresse", [], "any", false, false, false, 199), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <td class=\"pri\">CONTACTS</td>
                                    <td class=\"col-black\">";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 203, $this->source); })()), "contact", [], "any", false, false, false, 203), "html", null, true);
        yield "</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    <div class=\"panel-body bg-white shadow\" style=\"height: 200px\">
                        <h4 class=\"pri bolo600\">COMPTE CLIENT</h4>
                        ";
        // line 212
        $context["d"] = 0;
        // line 213
        yield "                        ";
        $context["v"] = 0;
        // line 214
        yield "                        ";
        $context["f"] = 0;
        // line 215
        yield "                        ";
        $context["sf"] = 0;
        // line 216
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 216, $this->source); })()), "releves", [], "any", false, false, false, 216));
        foreach ($context['_seq'] as $context["_key"] => $context["releve"]) {
            // line 217
            yield "                            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["releve"], "devis", [], "any", false, false, false, 217)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 218
                yield "                                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["releve"], "devis", [], "any", false, false, false, 218), "etat", [], "any", false, false, false, 218) == "valide")) {
                    // line 219
                    yield "                                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["releve"], "type", [], "any", false, false, false, 219) == 2)) {
                        $context["f"] = (CoreExtension::getAttribute($this->env, $this->source, $context["releve"], "montant", [], "any", false, false, false, 219) + (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 219, $this->source); })()));
                    }
                    // line 220
                    yield "                                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["releve"], "type", [], "any", false, false, false, 220) == 3)) {
                        $context["v"] = (CoreExtension::getAttribute($this->env, $this->source, $context["releve"], "montant", [], "any", false, false, false, 220) + (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 220, $this->source); })()));
                    }
                    // line 221
                    yield "                                ";
                }
                // line 222
                yield "                            ";
            }
            // line 223
            yield "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['releve'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 224
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 224, $this->source); })()), "devis", [], "any", false, false, false, 224));
        foreach ($context['_seq'] as $context["_key"] => $context["dev"]) {
            // line 225
            yield "                            ";
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "etat", [], "any", false, false, false, 225) == "valide") && (CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "corbeille", [], "any", false, false, false, 225) == null))) {
                // line 226
                yield "                                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "type", [], "any", false, false, false, 226) != "esti")) {
                    // line 227
                    yield "                                    ";
                    $context["d"] = ((isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new RuntimeError('Variable "d" does not exist.', 227, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "totalttc", [], "any", false, false, false, 227));
                    // line 228
                    yield "                                ";
                }
                // line 229
                yield "                            ";
            }
            // line 230
            yield "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['dev'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 231
        yield "                        <table class=\"table-bordered\" style=\"width: 100%\">
                            <tr>
                                <td class=\"bg-lig col-blue-grey bolo700\">TOTAL DEVIS VALIDÉS</td>
                                <td class=\"text-right col-pink\"
                                    style=\"font-size: 16px; font-weight: 600\">";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new RuntimeError('Variable "d" does not exist.', 235, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</td>
                            </tr>

                            <tr>
                                <td class=\"bg-lig col-blue-grey bolo700\">TOTAL RÈGLEMENT</td>
                                <td class=\"text-right col-pink\"
                                    style=\"font-size: 16px; font-weight: 600\">";
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 241, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <td class=\"bg-lig col-blue-grey bolo700\">SOLDE</td>
                                <td class=\"text-right col-pink\"
                                    style=\"font-size: 16px; font-weight: 600\">";
        // line 246
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new RuntimeError('Variable "d" does not exist.', 246, $this->source); })()) - (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 246, $this->source); })())), 2, ",", " "), "html", null, true);
        yield "</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class=\"col-sm-3\" style=\"height: 150px\">
                    <div class=\"button-demo\">

                        <button type=\"button\" class=\"btn bg-green align-left m-b-10 text-white waves-effect\"
                                data-toggle=\"modal\" data-target=\"#mdModalClient\" style=\"width: 100%;\">MODIFIER LE CLIENT
                        </button>
                        <button type=\"button\" class=\"btn bg-blue  align-left m-b-10 text-white waves-effect\"
                                data-toggle=\"modal\" data-target=\"#mdModalRegle\" style=\"width: 100%;\">AJOUTER UN
                            RÈGLEMENT
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"content\" style=\"margin-top: 20px !important;\">
        <div class=\"container-fluid\">
            <div class=\"row clearfix\">
                <div class=\"col-sm-12\">
                    <div class=\"card shadow \">
                        <div class=\"card-body\" style=\"padding: 20px\">
                            <div class=\"table-responsive\">
                                <h4 class=\"pri bolo600\">RELEVÉ DE COMPTE</h4>
                                <hr class=\"m-t--5 bg-pri\" style=\"height: 1px\">
                                <div class=\"table-responsive\" style=\"margin-bottom: 30px\">
                                    <table class=\"table-striped table-bordered display nowrap\" id=\"dataRELEVE\"
                                           style=\"margin-top: 50px; width: 100%\">
                                        <thead>
                                        <tr class=\"bolo600\">
                                            <th style=\"text-align:center; width: 80px !important;\">DATE</th>
                                            <th style=\"text-align:center;\" class=\"mw400\">ENREGISTREMENT</th>
                                            <th style=\"text-align:center;\">MONTANT</th>
                                            <th style=\"text-align:center;\">SOLDE</th>
                                            <th style=\"text-align:center;\">CHANTIER</th>
                                            <th style=\"text-align:center; width: 10px !important\"></th>
                                        </tr>
                                        </thead>
                                        <tbody>


                                        ";
        // line 291
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 291, $this->source); })()), "chantiers", [], "any", false, false, false, 291));
        foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
            // line 292
            yield "                                            ";
            $context["solde"] = 0;
            // line 293
            yield "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "releves", [], "any", false, false, false, 293));
            foreach ($context['_seq'] as $context["_key"] => $context["releve"]) {
                // line 294
                yield "                                                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["releve"], "devis", [], "any", false, false, false, 294) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["releve"], "devis", [], "any", false, false, false, 294), "etat", [], "any", false, false, false, 294) == "valide"))) {
                    // line 295
                    yield "                                                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["releve"], "type", [], "any", false, false, false, 295) == 1)) {
                        // line 296
                        yield "                                                        ";
                        $context["solde"] = (CoreExtension::getAttribute($this->env, $this->source, $context["releve"], "montant", [], "any", false, false, false, 296) + (isset($context["solde"]) || array_key_exists("solde", $context) ? $context["solde"] : (function () { throw new RuntimeError('Variable "solde" does not exist.', 296, $this->source); })()));
                        // line 297
                        yield "                                                        <tr>
                                                            <td>";
                        // line 298
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["releve"], "date", [], "any", false, false, false, 298), "Y.m.d H.i.s"), "html", null, true);
                        yield "</td>
                                                            <td>
                                                                <a href=\"";
                        // line 300
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["releve"], "devis", [], "any", false, false, false, 300), "id", [], "any", false, false, false, 300), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["releve"], "devis", [], "any", false, false, false, 300), "chantier", [], "any", false, false, false, 300), "id", [], "any", false, false, false, 300)]), "html", null, true);
                        yield "\"
                                                                   title=\"DEVIS N° ";
                        // line 301
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["releve"], "devis", [], "any", false, false, false, 301), "iddevis", [], "any", false, false, false, 301), "html", null, true);
                        yield "
                                                            | ";
                        // line 302
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["releve"], "devis", [], "any", false, false, false, 302), "chantier", [], "any", false, false, false, 302), "nomchantier", [], "any", false, false, false, 302), "html", null, true);
                        yield "\" class=\"bolo700\">DEVIS
                                                                    N° ";
                        // line 303
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["releve"], "devis", [], "any", false, false, false, 303), "iddevis", [], "any", false, false, false, 303), "html", null, true);
                        yield "</a>
                                                            </td>
                                                            <td class=\"text-right bolo700\">";
                        // line 305
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["releve"], "montant", [], "any", false, false, false, 305), 2, ",", " "), "html", null, true);
                        yield "</td>
                                                            <td class=\"text-right bolo700\"> ";
                        // line 306
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["solde"]) || array_key_exists("solde", $context) ? $context["solde"] : (function () { throw new RuntimeError('Variable "solde" does not exist.', 306, $this->source); })()), 2, ",", " "), "html", null, true);
                        yield "</td>
                                                            <td>
                                                                <a href=\"";
                        // line 308
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["releve"], "devis", [], "any", false, false, false, 308), "chantier", [], "any", false, false, false, 308), "id", [], "any", false, false, false, 308)]), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["releve"], "devis", [], "any", false, false, false, 308), "chantier", [], "any", false, false, false, 308), "nomchantier", [], "any", false, false, false, 308)), "html", null, true);
                        yield "</a>
                                                            </td>
                                                            <td class=\"text-center\"><a class=\"devaldevis\"
                                                                                       id=\"";
                        // line 311
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["releve"], "devis", [], "any", false, false, false, 311), "id", [], "any", false, false, false, 311), "html", null, true);
                        yield "\"><i
                                                                            class=\"fa fa-trash col-pink\"
                                                                            aria-hidden=\"true\"
                                                                            title=\"Supprimer\"></i></a></td>
                                                        </tr>
                                                        ";
                        // line 316
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "releves", [], "any", false, false, false, 316));
                        foreach ($context['_seq'] as $context["_key"] => $context["rele"]) {
                            // line 317
                            yield "                                                            ";
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["rele"], "type", [], "any", false, false, false, 317) == 3) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["releve"], "devis", [], "any", false, false, false, 317), "id", [], "any", false, false, false, 317) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rele"], "devis", [], "any", false, false, false, 317), "id", [], "any", false, false, false, 317)))) {
                                // line 318
                                yield "                                                                ";
                                $context["solde"] = ((isset($context["solde"]) || array_key_exists("solde", $context) ? $context["solde"] : (function () { throw new RuntimeError('Variable "solde" does not exist.', 318, $this->source); })()) - CoreExtension::getAttribute($this->env, $this->source, $context["rele"], "montant", [], "any", false, false, false, 318));
                                // line 319
                                yield "                                                                <tr>
                                                                    <td>";
                                // line 320
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["rele"], "date", [], "any", false, false, false, 320), "Y.m.d H.i.s"), "html", null, true);
                                yield "</td>
                                                                    <td class=\"col-pink bolo600\">";
                                // line 321
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rele"], "versement", [], "any", false, false, false, 321), "html", null, true);
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["rele"], "moyen", [], "any", false, false, false, 321)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    yield "(";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rele"], "moyen", [], "any", false, false, false, 321), "html", null, true);
                                    yield ")";
                                }
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["rele"], "facture", [], "any", false, false, false, 321)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    yield " |
                                                                        <a href=\"";
                                    // line 322
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editfacture", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rele"], "facture", [], "any", false, false, false, 322), "id", [], "any", false, false, false, 322), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rele"], "devis", [], "any", false, false, false, 322), "chantier", [], "any", false, false, false, 322), "id", [], "any", false, false, false, 322)]), "html", null, true);
                                    yield "\"
                                                                           class=\"col-blue-grey\"> Facture
                                                                            N° ";
                                    // line 324
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rele"], "facture", [], "any", false, false, false, 324), "numfacture", [], "any", false, false, false, 324), "html", null, true);
                                    yield "
                                                                            (";
                                    // line 325
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rele"], "facture", [], "any", false, false, false, 325), "totalttc", [], "any", false, false, false, 325), 2, ",", " "), "html", null, true);
                                    yield "
                                                                            )</a>";
                                }
                                // line 326
                                yield "</td>
                                                                    <td class=\"text-right\">";
                                // line 327
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["rele"], "montant", [], "any", false, false, false, 327), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                    <td class=\"text-right\">";
                                // line 328
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["solde"]) || array_key_exists("solde", $context) ? $context["solde"] : (function () { throw new RuntimeError('Variable "solde" does not exist.', 328, $this->source); })()), 2, ",", " "), "html", null, true);
                                yield "</td>
                                                                    <td>
                                                                        <a href=\"";
                                // line 330
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["releve"], "devis", [], "any", false, false, false, 330), "chantier", [], "any", false, false, false, 330), "id", [], "any", false, false, false, 330)]), "html", null, true);
                                yield "\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["releve"], "devis", [], "any", false, false, false, 330), "chantier", [], "any", false, false, false, 330), "nomchantier", [], "any", false, false, false, 330)), "html", null, true);
                                yield "</a>
                                                                    </td>
                                                                    <td class=\"text-center\">
                                                                        ";
                                // line 333
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["rele"], "type", [], "any", false, false, false, 333) == 1)) {
                                    // line 334
                                    yield "                                                                            <a onclick=\"devaliderdevis('";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rele"], "devis", [], "any", false, false, false, 334), "id", [], "any", false, false, false, 334), "html", null, true);
                                    yield "');\"><i
                                                                                        class=\"fa fa-trash col-pink\"
                                                                                        aria-hidden=\"true\"
                                                                                        title=\"Supprimer\"></i></a>
                                                                        ";
                                }
                                // line 339
                                yield "                                                                        ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["rele"], "type", [], "any", false, false, false, 339) == 3)) {
                                    // line 340
                                    yield "                                                                            <a class=\"delreglement\"
                                                                               id=\"";
                                    // line 341
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rele"], "id", [], "any", false, false, false, 341), "html", null, true);
                                    yield "\"><i
                                                                                        class=\"fa fa-trash col-pink\"
                                                                                        aria-hidden=\"true\"
                                                                                        title=\"Supprimer\"></i></a>
                                                                        ";
                                }
                                // line 346
                                yield "                                                                    </td>
                                                                </tr>
                                                            ";
                            }
                            // line 349
                            yield "                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['rele'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 350
                        yield "                                                    ";
                    }
                    // line 351
                    yield "                                                ";
                }
                // line 352
                yield "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['releve'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 353
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 354
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

    <script>
        localStorage.setItem('reloadd', 'client/' + document.getElementById('idclient').value);
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
        return "content/client.html.twig";
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
        return array (  777 => 354,  771 => 353,  765 => 352,  762 => 351,  759 => 350,  753 => 349,  748 => 346,  740 => 341,  737 => 340,  734 => 339,  725 => 334,  723 => 333,  715 => 330,  710 => 328,  706 => 327,  703 => 326,  698 => 325,  694 => 324,  689 => 322,  679 => 321,  675 => 320,  672 => 319,  669 => 318,  666 => 317,  662 => 316,  654 => 311,  646 => 308,  641 => 306,  637 => 305,  632 => 303,  628 => 302,  624 => 301,  620 => 300,  615 => 298,  612 => 297,  609 => 296,  606 => 295,  603 => 294,  598 => 293,  595 => 292,  591 => 291,  543 => 246,  535 => 241,  526 => 235,  520 => 231,  514 => 230,  511 => 229,  508 => 228,  505 => 227,  502 => 226,  499 => 225,  494 => 224,  488 => 223,  485 => 222,  482 => 221,  477 => 220,  472 => 219,  469 => 218,  466 => 217,  461 => 216,  458 => 215,  455 => 214,  452 => 213,  450 => 212,  438 => 203,  431 => 199,  424 => 195,  417 => 191,  410 => 187,  394 => 174,  388 => 171,  382 => 168,  373 => 162,  360 => 152,  347 => 142,  334 => 132,  325 => 126,  321 => 125,  302 => 109,  295 => 105,  280 => 93,  266 => 82,  249 => 67,  243 => 66,  240 => 65,  234 => 64,  230 => 62,  226 => 60,  220 => 59,  215 => 57,  211 => 56,  206 => 55,  203 => 54,  199 => 53,  193 => 52,  190 => 51,  188 => 50,  185 => 49,  179 => 48,  176 => 47,  173 => 46,  170 => 45,  166 => 44,  163 => 43,  160 => 42,  157 => 41,  152 => 40,  149 => 39,  145 => 38,  134 => 30,  130 => 29,  114 => 16,  100 => 4,  87 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}{{ title }}{% endblock %}
{% block body %}

    <style>
        table td {
            max-width: 150px !important;
            white-space: nowrap;
            text-overflow: ellipsis;
            word-break: break-all;
            overflow: hidden;
            padding: 2px !important;
        }
    </style>

    <input type=\"text\" class=\"hide\" id=\"idclient\" value=\"{{ client.id }}\">
    <input type=\"text\" class=\"hide\" id=\"pager\" value=\"client\"/>

    <div class=\"modal fade right\" id=\"mdModalRegle\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-blue text-white\">
                    <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">AJOUTER UN RÈGLEMENT</h4>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        {{ form_start(formeRegle, {'attr': {'id': 'addReglementForm'}}) }}
                        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('addReglementToken') }}\"/>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">FACTURES NON VALIDÉES</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        <select id=\"facfac\" name=\"facfac\" class=\"form-control\">
                                            <option value=\"\" disabled selected>Faites votre choix</option>
                                            {% for client in clients %}
                                                {% if client.corbeille is null and client.type is null %}
                                                    {% for chantier in client.chantiers %}
                                                        {% if chantier.corbeille is null %}
                                                            {% set tt = 0 %}

                                                            {% for fac in chantier.factures %}
                                                                {% if fac.etat == \"save\" and fac.corbeille is null %}
                                                                    {% set tt = tt + 1 %}
                                                                {% endif %}
                                                            {% endfor %}

                                                            {% if  tt > 0 %}
                                                                <optgroup
                                                                        label=\"{{ client.nomclient|upper }} | {{ chantier.nomchantier|upper }}\">
                                                                    {% for fac in chantier.factures %}
                                                                        {% if fac.etat == \"save\" %}
                                                                            <option value=\"{{ fac.id }}\"
                                                                                    class=\"{{ fac.id }}\">FACTURE
                                                                                Nº{{ fac.numfacture }}</option>
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
                                    <p class=\"h6 dvfac\"></p>
                                    <p class=\"h6 dvface\"></p>
                                    <p class=\"h6 dvfaces\"></p>
                                    <p class=\"h6 resta hide\"></p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">MONTANT<span
                                            class=\"col-red\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formeRegle.montant,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                    <p class=\"h6 restu col-pink\"></p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">MOYEN DE PAIEMENTS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formeRegle.moyen,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"addReglementChantiers\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect col-white bg-blue\">
                            <div type=\"button\" id=\"closeReglement\" class=\"btn btn-link waves-effect col-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadReglement\">
                        </div>
                        <br><br><br>
                        {{ form_end(formeRegle) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"mdModalClient\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">

        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header text-white bg-green p-l-20\">
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">MODIFIER UN CLIENT</h3>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        {{ form_start(formClient, {'attr': {'id':'addClientForm'}}) }}
                        {{ form_row(formClient._token) }}
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label pri bolo\">CLIENT<span class=\"col-red\">*</span></label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formClient.nomclient,{'attr':{'class':'form-control col-pink'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label pri bolo\">ADRESSE</label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formClient.adresse,{'attr':{'class':'form-control col-pink'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label pri bolo\">CONTACTS</label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formClient.contact,{'attr':{'class':'form-control col-pink'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label pri bolo\">COMPTE CONTRIBUABLE</label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formClient.contribuable,{'attr':{'class':'form-control col-pink'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"text\" class=\"hide\" id=\"idclient\" value=\"{{ client.id }}\">
                            <input type=\"submit\" id=\"updClient\" value=\"MODIFIER\"
                                   class=\"btn btn-link waves-effect text-white bg-green\">
                            <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadClient\">
                        </div>
                        {{ form_end(formClient) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class=\"content\" style=\"margin-top: 80px !important;\">
        <div class=\"container-fluid\">
            <div class=\"row clearfix\">
                <div class=\"col-sm-5\">
                    <div class=\"panel-body bg-white shadow\" style=\"height: 200px\">
                        <div class=\"table-responsive\">
                            <h3 class=\"bolo700\" style=\"color: red\"> {{ client.nomclient }}</h3>
                            <table class=\"table-striped\" style=\"width: 100%\">
                                <tr>
                                    <td class=\"pri\">CODE CLIENT</td>
                                    <td class=\"col-black\">{{ client.code }}</td>
                                </tr>
                                <tr>
                                    <td class=\"pri\">COMPTE CONTRIBUABLE</td>
                                    <td class=\"col-black\">{{ client.contribuable }}</td>
                                </tr>
                                <tr>
                                    <td class=\"pri\">ADRESSE</td>
                                    <td class=\"col-black\">{{ client.adresse }}</td>
                                </tr>
                                <tr>
                                    <td class=\"pri\">CONTACTS</td>
                                    <td class=\"col-black\">{{ client.contact }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    <div class=\"panel-body bg-white shadow\" style=\"height: 200px\">
                        <h4 class=\"pri bolo600\">COMPTE CLIENT</h4>
                        {% set d = 0 %}
                        {% set v = 0 %}
                        {% set f = 0 %}
                        {% set sf = 0 %}
                        {% for releve in client.releves %}
                            {% if releve.devis %}
                                {% if releve.devis.etat == 'valide' %}
                                    {% if releve.type == 2 %}{% set f = releve.montant + f %}{% endif %}
                                    {% if releve.type == 3 %}{% set v = releve.montant + v %}{% endif %}
                                {% endif %}
                            {% endif %}
                        {% endfor %}
                        {% for dev in client.devis %}
                            {% if dev.etat == 'valide' and dev.corbeille == null %}
                                {% if dev.type != 'esti'  %}
                                    {% set d = d + dev.totalttc %}
                                {% endif %}
                            {% endif %}
                        {% endfor %}
                        <table class=\"table-bordered\" style=\"width: 100%\">
                            <tr>
                                <td class=\"bg-lig col-blue-grey bolo700\">TOTAL DEVIS VALIDÉS</td>
                                <td class=\"text-right col-pink\"
                                    style=\"font-size: 16px; font-weight: 600\">{{ d|number_format(2, ',', ' ') }}</td>
                            </tr>

                            <tr>
                                <td class=\"bg-lig col-blue-grey bolo700\">TOTAL RÈGLEMENT</td>
                                <td class=\"text-right col-pink\"
                                    style=\"font-size: 16px; font-weight: 600\">{{ v|number_format(2, ',', ' ') }}</td>
                            </tr>
                            <tr>
                                <td class=\"bg-lig col-blue-grey bolo700\">SOLDE</td>
                                <td class=\"text-right col-pink\"
                                    style=\"font-size: 16px; font-weight: 600\">{{ (d-v)|number_format(2, ',', ' ') }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class=\"col-sm-3\" style=\"height: 150px\">
                    <div class=\"button-demo\">

                        <button type=\"button\" class=\"btn bg-green align-left m-b-10 text-white waves-effect\"
                                data-toggle=\"modal\" data-target=\"#mdModalClient\" style=\"width: 100%;\">MODIFIER LE CLIENT
                        </button>
                        <button type=\"button\" class=\"btn bg-blue  align-left m-b-10 text-white waves-effect\"
                                data-toggle=\"modal\" data-target=\"#mdModalRegle\" style=\"width: 100%;\">AJOUTER UN
                            RÈGLEMENT
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"content\" style=\"margin-top: 20px !important;\">
        <div class=\"container-fluid\">
            <div class=\"row clearfix\">
                <div class=\"col-sm-12\">
                    <div class=\"card shadow \">
                        <div class=\"card-body\" style=\"padding: 20px\">
                            <div class=\"table-responsive\">
                                <h4 class=\"pri bolo600\">RELEVÉ DE COMPTE</h4>
                                <hr class=\"m-t--5 bg-pri\" style=\"height: 1px\">
                                <div class=\"table-responsive\" style=\"margin-bottom: 30px\">
                                    <table class=\"table-striped table-bordered display nowrap\" id=\"dataRELEVE\"
                                           style=\"margin-top: 50px; width: 100%\">
                                        <thead>
                                        <tr class=\"bolo600\">
                                            <th style=\"text-align:center; width: 80px !important;\">DATE</th>
                                            <th style=\"text-align:center;\" class=\"mw400\">ENREGISTREMENT</th>
                                            <th style=\"text-align:center;\">MONTANT</th>
                                            <th style=\"text-align:center;\">SOLDE</th>
                                            <th style=\"text-align:center;\">CHANTIER</th>
                                            <th style=\"text-align:center; width: 10px !important\"></th>
                                        </tr>
                                        </thead>
                                        <tbody>


                                        {% for chantier in client.chantiers %}
                                            {% set solde = 0 %}
                                            {% for releve in chantier.releves %}
                                                {% if releve.devis and  releve.devis.etat == 'valide' %}
                                                    {% if releve.type == 1 %}
                                                        {% set solde = releve.montant + solde %}
                                                        <tr>
                                                            <td>{{ releve.date|date('Y.m.d H.i.s') }}</td>
                                                            <td>
                                                                <a href=\"{{ path('editdevis', {'id': releve.devis.id,'idchantier':releve.devis.chantier.id}) }}\"
                                                                   title=\"DEVIS N° {{ releve.devis.iddevis }}
                                                            | {{ releve.devis.chantier.nomchantier }}\" class=\"bolo700\">DEVIS
                                                                    N° {{ releve.devis.iddevis }}</a>
                                                            </td>
                                                            <td class=\"text-right bolo700\">{{ releve.montant|number_format(2, ',', ' ') }}</td>
                                                            <td class=\"text-right bolo700\"> {{ solde|number_format(2, ',', ' ') }}</td>
                                                            <td>
                                                                <a href=\"{{ path('chantier', {'id': releve.devis.chantier.id}) }}\">{{ releve.devis.chantier.nomchantier|upper }}</a>
                                                            </td>
                                                            <td class=\"text-center\"><a class=\"devaldevis\"
                                                                                       id=\"{{ releve.devis.id }}\"><i
                                                                            class=\"fa fa-trash col-pink\"
                                                                            aria-hidden=\"true\"
                                                                            title=\"Supprimer\"></i></a></td>
                                                        </tr>
                                                        {% for rele in chantier.releves %}
                                                            {% if rele.type == 3 and  releve.devis.id == rele.devis.id %}
                                                                {% set solde = solde - rele.montant %}
                                                                <tr>
                                                                    <td>{{ rele.date|date('Y.m.d H.i.s') }}</td>
                                                                    <td class=\"col-pink bolo600\">{{ rele.versement }}{% if rele.moyen %}({{ rele.moyen }}){% endif %}{% if rele.facture %} |
                                                                        <a href=\"{{ path('editfacture', {'id': rele.facture.id, 'idchantier':rele.devis.chantier.id}) }}\"
                                                                           class=\"col-blue-grey\"> Facture
                                                                            N° {{ rele.facture.numfacture }}
                                                                            ({{ rele.facture.totalttc|number_format(2, ',', ' ') }}
                                                                            )</a>{% endif %}</td>
                                                                    <td class=\"text-right\">{{ rele.montant|number_format(2, ',', ' ') }}</td>
                                                                    <td class=\"text-right\">{{ solde|number_format(2, ',', ' ') }}</td>
                                                                    <td>
                                                                        <a href=\"{{ path('chantier', {'id': releve.devis.chantier.id}) }}\">{{ releve.devis.chantier.nomchantier|upper }}</a>
                                                                    </td>
                                                                    <td class=\"text-center\">
                                                                        {% if rele.type == 1 %}
                                                                            <a onclick=\"devaliderdevis('{{ rele.devis.id }}');\"><i
                                                                                        class=\"fa fa-trash col-pink\"
                                                                                        aria-hidden=\"true\"
                                                                                        title=\"Supprimer\"></i></a>
                                                                        {% endif %}
                                                                        {% if rele.type == 3 %}
                                                                            <a class=\"delreglement\"
                                                                               id=\"{{ rele.id }}\"><i
                                                                                        class=\"fa fa-trash col-pink\"
                                                                                        aria-hidden=\"true\"
                                                                                        title=\"Supprimer\"></i></a>
                                                                        {% endif %}
                                                                    </td>
                                                                </tr>
                                                            {% endif %}
                                                        {% endfor %}
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
                </div>
            </div>
        </div>
    </section>

    <script>
        localStorage.setItem('reloadd', 'client/' + document.getElementById('idclient').value);
    </script>

{% endblock %}
", "content/client.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\client.html.twig");
    }
}
