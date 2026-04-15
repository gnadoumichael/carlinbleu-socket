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

/* content/contact.html.twig */
class __TwigTemplate_48f2a3056c58d41e5a9869d608caf0d5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/contact.html.twig"));

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

    <section class=\"content\" style=\"margin-top: 50px !important;\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row clearfix m-t-50\">
                    <div class=\"col-sm-12 \">
                        <h4 class=\"bolo700 col-deep-orange\">CONTACTS CLIENT</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"content\" id=\"setchantier\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"panel-group\" id=\"accordion_1\" role=\"tablist\" aria-multiselectable=\"true\">
                    ";
        // line 23
        $context["countContact"] = 0;
        // line 24
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 25
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "contacts", [], "any", false, false, false, 25));
            foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                // line 26
                yield "                            ";
                if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "corbeille", [], "any", false, false, false, 26)) && (null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 26)))) {
                    // line 27
                    yield "                                ";
                    $context["countContact"] = ((isset($context["countContact"]) || array_key_exists("countContact", $context) ? $context["countContact"] : (function () { throw new RuntimeError('Variable "countContact" does not exist.', 27, $this->source); })()) + 1);
                    // line 28
                    yield "                            ";
                }
                // line 29
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['contact'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "                    <div class=\"panel panel-pri shadow\" style=\"margin-top: 20px !important\">
                        <div class=\"panel-heading bg-pri\" role=\"tab\" id=\"headingDeu\">
                            <h5 class=\"panel-title \">
                                <a class=\"collapsed outai col-white\" role=\"button\" data-toggle=\"collapse\"
                                   data-parent=\"#accordion_1\" href=\"#collapseDeu\" aria-expanded=\"false\"
                                   aria-controls=\"collapseDeu\">
                                    <i class=\"material-icons col-white\" style=\"font-size:18px;float: left\">keyboard_arrow_down</i>Contacts<span
                                            class=\"badge bg-pink\"
                                            style=\"float: right !important;\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["countContact"]) || array_key_exists("countContact", $context) ? $context["countContact"] : (function () { throw new RuntimeError('Variable "countContact" does not exist.', 39, $this->source); })()), "html", null, true);
        yield "</span>
                                </a>
                            </h5>
                        </div>
                        <div id=\"collapseDeu\" class=\"panel-collapse \" role=\"tabpanel\"
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
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 62, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 63
            yield "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "contacts", [], "any", false, false, false, 63));
            foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                // line 64
                yield "                                                ";
                if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "corbeille", [], "any", false, false, false, 64)) && (null === CoreExtension::getAttribute($this->env, $this->source, $context["client"], "corbeille", [], "any", false, false, false, 64)))) {
                    // line 65
                    yield "                                                    <tr>
                                                        <td class=\"text-center\">
                                                            <input type=\"checkbox\" data-toggle=\"toggle\" class=\"CONTAK\"
                                                                   value=\"";
                    // line 68
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 68), "html", null, true);
                    yield "\"></td>
                                                        <td class=\"bolo600\">";
                    // line 69
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "contact", [], "any", false, false, false, 69)), "html", null, true);
                    yield "</td>
                                                        <td>";
                    // line 70
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "fonction", [], "any", false, false, false, 70)), "html", null, true);
                    yield "</td>
                                                        <td>";
                    // line 71
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "mail", [], "any", false, false, false, 71), "html", null, true);
                    yield "</td>
                                                        <td>";
                    // line 72
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "phone", [], "any", false, false, false, 72), "html", null, true);
                    yield "</td>
                                                        <td>";
                    // line 73
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "bureau", [], "any", false, false, false, 73), "html", null, true);
                    yield "</td>
                                                        <td class=\"text-left col-blue bolo600\">
                                                            <i class=\"fa fa-user col-blue bolo600\"></i>&nbsp;
                                                            ";
                    // line 76
                    if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "dobyuser", [], "any", false, false, false, 76))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 77
                        yield "                                                                ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "dobyuser", [], "any", false, false, false, 77), "nom", [], "any", false, false, false, 77)), "html", null, true);
                        yield "
                                                                &nbsp;";
                        // line 78
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "dobyuser", [], "any", false, false, false, 78), "prenoms", [], "any", false, false, false, 78)), "html", null, true);
                        yield "
                                                            ";
                    }
                    // line 80
                    yield "                                                        </td>
                                                        <td><b>";
                    // line 81
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "nomclient", [], "any", false, false, false, 81), "html", null, true);
                    yield "</b></td>
                                                    </tr>
                                                ";
                }
                // line 84
                yield "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['contact'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
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
        return "content/contact.html.twig";
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
        return array (  268 => 86,  262 => 85,  256 => 84,  250 => 81,  247 => 80,  242 => 78,  237 => 77,  235 => 76,  229 => 73,  225 => 72,  221 => 71,  217 => 70,  213 => 69,  209 => 68,  204 => 65,  201 => 64,  196 => 63,  192 => 62,  166 => 39,  156 => 31,  150 => 30,  144 => 29,  141 => 28,  138 => 27,  135 => 26,  130 => 25,  125 => 24,  123 => 23,  104 => 6,  91 => 5,  77 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    {{ title }}
{% endblock %}
{% block body %}


    <section class=\"content\" style=\"margin-top: 50px !important;\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row clearfix m-t-50\">
                    <div class=\"col-sm-12 \">
                        <h4 class=\"bolo700 col-deep-orange\">CONTACTS CLIENT</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"content\" id=\"setchantier\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"panel-group\" id=\"accordion_1\" role=\"tablist\" aria-multiselectable=\"true\">
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
                        <div id=\"collapseDeu\" class=\"panel-collapse \" role=\"tabpanel\"
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
                </div>
            </div>
        </div>
    </section>

{% endblock %}
", "content/contact.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\contact.html.twig");
    }
}
