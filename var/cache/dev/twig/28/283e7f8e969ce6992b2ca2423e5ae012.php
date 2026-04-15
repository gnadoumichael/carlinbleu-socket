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

/* content/listeclient.html.twig */
class __TwigTemplate_930be277462f0364b9d3c92c03c13a1e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/listeclient.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/listeclient.html.twig"));

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
        yield "    <input type=\"text\" id=\"ddclient\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["ddclient"]) || array_key_exists("ddclient", $context) ? $context["ddclient"] : (function () { throw new RuntimeError('Variable "ddclient" does not exist.', 6, $this->source); })()), "html", null, true);
        yield "\"/>

    <div class=\"modal fade right\" id=\"modalClient\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                ";
        // line 12
        if ((($tmp = (isset($context["ddclient"]) || array_key_exists("ddclient", $context) ? $context["ddclient"] : (function () { throw new RuntimeError('Variable "ddclient" does not exist.', 12, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 13
            yield "                <div class=\"modal-header col-white bg-green p-l-20\">
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                        <i class=\"icofont-minus-circle icofont-1x\"></i>
                        MODIFIER UN CLIENT";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["ddclient"]) || array_key_exists("ddclient", $context) ? $context["ddclient"] : (function () { throw new RuntimeError('Variable "ddclient" does not exist.', 16, $this->source); })()), "html", null, true);
            yield "</h3>
                </div>
                ";
        } else {
            // line 19
            yield "                    <div class=\"modal-header col-white bg-blue p-l-20\">
                        <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                            <i class=\"icofont-minus-circle icofont-1x\"></i>
                            AJOUTER UN CLIENT";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["ddclient"]) || array_key_exists("ddclient", $context) ? $context["ddclient"] : (function () { throw new RuntimeError('Variable "ddclient" does not exist.', 22, $this->source); })()), "html", null, true);
            yield "</h3>
                    </div>
                ";
        }
        // line 25
        yield "                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
        // line 27
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 27, $this->source); })()), 'form_start', ["attr" => ["id" => "addClientForm"]]);
        yield "
                        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 28, $this->source); })()), "_token", [], "any", false, false, false, 28), 'row');
        yield "
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label pri bolo h5\">Client<span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 35, $this->source); })()), "nomclient", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label pri bolo h5\">Adresse</label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 45, $this->source); })()), "adresse", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label pri bolo h5\">Contacts</label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 55, $this->source); })()), "contact", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control cls"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label pri bolo h5\">Compte contribuable</label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 65, $this->source); })()), "contribuable", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "form-control cls"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\" id=\"divClient\">
                            ";
        // line 71
        if ((($tmp = (isset($context["ddclient"]) || array_key_exists("ddclient", $context) ? $context["ddclient"] : (function () { throw new RuntimeError('Variable "ddclient" does not exist.', 71, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 72
            yield "                                <input type=\"submit\" id=\"updateClient\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect col-white bg-green\"/>
                            ";
        } else {
            // line 75
            yield "                                <input type=\"submit\" id=\"addClient\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect col-white bg-blue\"/>
                            ";
        }
        // line 78
        yield "                            <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeclient");
        yield "\" type=\"button\" id=\"closeClient\" class=\"btn btn-link waves-effect col-white bg-pink\"
                                 data-dismiss=\"modal\">
                                ANNULER
                            </a>
                        </div>
                        <div class=\"text-center\">
                            <img src=\"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadClient\"/>
                        </div>
                        ";
        // line 87
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 87, $this->source); })()), 'form_end');
        yield "
                    </div>

                </div>
            </div>
        </div>
    </div>
    <section class=\"content\" style=\"margin-top: 50px !important;\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row clearfix m-t-20\">
                    <div class=\"col-sm-12 \">
                        <h4 class=\"bolo700 col-deep-orange\">GESTION DE CLIENTS</h4>
                        <button type=\"button\" data-toggle=\"modal\" data-target=\"#modalClient\"
                                class=\"btn bg-blue-grey text-white\" style=\"border:1px solid #dddfeb\">+ CLIENT
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"content\" >
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                ";
        // line 111
        $context["countClient"] = 0;
        // line 112
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 112, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 113
            yield "                    ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 113))) {
                // line 114
                yield "                        ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 114))) {
                    // line 115
                    yield "                            ";
                    $context["countClient"] = ((isset($context["countClient"]) || array_key_exists("countClient", $context) ? $context["countClient"] : (function () { throw new RuntimeError('Variable "countClient" does not exist.', 115, $this->source); })()) + 1);
                    // line 116
                    yield "                        ";
                }
                // line 117
                yield "                    ";
            }
            // line 118
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
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
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["countClient"]) || array_key_exists("countClient", $context) ? $context["countClient"] : (function () { throw new RuntimeError('Variable "countClient" does not exist.', 128, $this->source); })()), "html", null, true);
        yield "</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseOne_0\" class=\"panel-collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingOne_0\">
                            <div class=\"panel-body\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow:scroll\">
                                    <table class=\"table-striped table-bordered display nowrape\" style=\"width: 100%\"
                                           id=\"dddClients\">
                                        <thead>
                                        <tr>
                                            <th class=\"text-center\" style=\"min-width: 30px !important;\"></th>
                                            <th>CLIENTS</th>
                                            <th class=\"text-left\">ADRESSE</th>
                                            <th class=\"text-left\">CONTACTS</th>
                                            <th class=\"text-left\">COMPTE&nbsp;C.</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 148, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 149
            yield "                                            ";
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "type", [], "any", false, false, false, 149))) {
                // line 150
                yield "                                                ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 150))) {
                    // line 151
                    yield "                                                    <tr>
                                                        <td class=\"text-center\">
                                                            <input type=\"checkbox\" data-toggle=\"toggle\" class=\"CLYES\"
                                                                   value=\"";
                    // line 154
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 154), "html", null, true);
                    yield "\"></td>
                                                        <td>
                                                            <a href=\"";
                    // line 156
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 156)]), "html", null, true);
                    yield "\"
                                                               class=\"col-blue bolo700\"
                                                               title=\"";
                    // line 158
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 158)), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 158)), "html", null, true);
                    yield "</a>
                                                        </td>
                                                        <td class=\"text-left\">";
                    // line 160
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "adresse", [], "any", false, false, false, 160), "html", null, true);
                    yield "</td>
                                                        <td class=\"text-left\">";
                    // line 161
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "contact", [], "any", false, false, false, 161), "html", null, true);
                    yield "</td>
                                                        <td class=\"text-left\">";
                    // line 162
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "contribuable", [], "any", false, false, false, 162), "html", null, true);
                    yield "</td>
                                                    </tr>
                                                ";
                }
                // line 165
                yield "                                            ";
            }
            // line 166
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        yield "                                        </tbody>
                                    </table>
                                    <br/>
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
        return "content/listeclient.html.twig";
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
        return array (  376 => 167,  370 => 166,  367 => 165,  361 => 162,  357 => 161,  353 => 160,  346 => 158,  341 => 156,  336 => 154,  331 => 151,  328 => 150,  325 => 149,  321 => 148,  298 => 128,  287 => 119,  281 => 118,  278 => 117,  275 => 116,  272 => 115,  269 => 114,  266 => 113,  261 => 112,  259 => 111,  232 => 87,  226 => 84,  216 => 78,  211 => 75,  206 => 72,  204 => 71,  195 => 65,  182 => 55,  169 => 45,  156 => 35,  146 => 28,  142 => 27,  138 => 25,  132 => 22,  127 => 19,  121 => 16,  116 => 13,  114 => 12,  104 => 6,  91 => 5,  77 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    {{ title }}
{% endblock %}
{% block body %}
    <input type=\"text\" id=\"ddclient\" value=\"{{ ddclient }}\"/>

    <div class=\"modal fade right\" id=\"modalClient\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                {% if ddclient %}
                <div class=\"modal-header col-white bg-green p-l-20\">
                    <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                        <i class=\"icofont-minus-circle icofont-1x\"></i>
                        MODIFIER UN CLIENT{{ ddclient }}</h3>
                </div>
                {% else %}
                    <div class=\"modal-header col-white bg-blue p-l-20\">
                        <h3 class=\"modal-title\" id=\"defaultModalLabel\">
                            <i class=\"icofont-minus-circle icofont-1x\"></i>
                            AJOUTER UN CLIENT{{ ddclient }}</h3>
                    </div>
                {% endif %}
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        {{ form_start(formClient, {'attr': {'id':'addClientForm' }}) }}
                        {{ form_row(formClient._token) }}
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label pri bolo h5\">Client<span class=\"col-red\">*</span>
                                </label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formClient.nomclient,{'attr':{'class':'form-control' }}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label pri bolo h5\">Adresse</label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formClient.adresse,{'attr':{'class':'form-control' }}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label pri bolo h5\">Contacts</label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formClient.contact,{'attr':{'class':'form-control cls' }}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label pri bolo h5\">Compte contribuable</label>
                                <div class=\"form-group m-t--5\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formClient.contribuable,{'attr':{'class':'form-control cls' }}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\" id=\"divClient\">
                            {% if ddclient %}
                                <input type=\"submit\" id=\"updateClient\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect col-white bg-green\"/>
                            {% else %}
                                <input type=\"submit\" id=\"addClient\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect col-white bg-blue\"/>
                            {% endif %}
                            <a href=\"{{ path(\"listeclient\") }}\" type=\"button\" id=\"closeClient\" class=\"btn btn-link waves-effect col-white bg-pink\"
                                 data-dismiss=\"modal\">
                                ANNULER
                            </a>
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
    <section class=\"content\" style=\"margin-top: 50px !important;\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row clearfix m-t-20\">
                    <div class=\"col-sm-12 \">
                        <h4 class=\"bolo700 col-deep-orange\">GESTION DE CLIENTS</h4>
                        <button type=\"button\" data-toggle=\"modal\" data-target=\"#modalClient\"
                                class=\"btn bg-blue-grey text-white\" style=\"border:1px solid #dddfeb\">+ CLIENT
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"content\" >
        <div class=\"container-fluid\">
            <div class=\"block-header\">
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
                        <div id=\"collapseOne_0\" class=\"panel-collapse\" role=\"tabpanel\"
                             aria-labelledby=\"headingOne_0\">
                            <div class=\"panel-body\">
                                <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow:scroll\">
                                    <table class=\"table-striped table-bordered display nowrape\" style=\"width: 100%\"
                                           id=\"dddClients\">
                                        <thead>
                                        <tr>
                                            <th class=\"text-center\" style=\"min-width: 30px !important;\"></th>
                                            <th>CLIENTS</th>
                                            <th class=\"text-left\">ADRESSE</th>
                                            <th class=\"text-left\">CONTACTS</th>
                                            <th class=\"text-left\">COMPTE&nbsp;C.</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for client in clients %}
                                            {% if client.type is null %}
                                                {% if client.corbeille is null %}
                                                    <tr>
                                                        <td class=\"text-center\">
                                                            <input type=\"checkbox\" data-toggle=\"toggle\" class=\"CLYES\"
                                                                   value=\"{{ client.id }}\"></td>
                                                        <td>
                                                            <a href=\"{{ path('client', {'id': client.id}) }}\"
                                                               class=\"col-blue bolo700\"
                                                               title=\"{{ client.nomclient|upper }}\">{{ client.nomclient|upper }}</a>
                                                        </td>
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

                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "content/listeclient.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\listeclient.html.twig");
    }
}
