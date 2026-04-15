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

/* content/tresorerie.html.twig */
class __TwigTemplate_fa776f0f9d8bee9131b223a577a7224c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/tresorerie.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/tresorerie.html.twig"));

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
    <section class=\"content fixed-top\">
        <div class=\"container-fluid\" style=\"margin: 0 14px 0 14px\">

            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div id=\"ressult\" style=\"width: 100%; align-content: start\" class=\"text-left\"></div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"content\" style=\"margin-top: 50px !important;\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row clearfix m-t-50\">
                    <div class=\"col-sm-12 \">
                        <h4 class=\"bolo700 col-deep-orange\">SUIVI DE VOTRE TRÉSORERIE</h4>
                        <div class=\"panel-group\" id=\"accordion_1\" role=\"tablist\" aria-multiselectable=\"true\">
                            <div class=\"panel panel-pri shadow\" style=\"border-left: 2px solid #A9A9A9\">
                                <div class=\"panel-heading\" role=\"tab\" id=\"headingOne_1\">
                                    <h5 class=\"panel-title\">
                                        <a class=\"collapsed col-white outai\" role=\"button\" data-toggle=\"collapse\"
                                           data-parent=\"#accordion_0\" href=\"#collapseOne_0\" aria-expanded=\"false\"
                                           aria-controls=\"collapseOne_0\">
                                            <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Dépenses
                                        </a>
                                    </h5>
                                </div>
                                <div id=\"collapseOne_0\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                     aria-labelledby=\"headingOne_0\">
                                    <div class=\"panel-body\">
                                        <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow:scroll\">
                                            <table class=\"table-striped table-bordered display nowrape\"
                                                   style=\"width: 100%\"
                                                   id=\"dataDepenses\">
                                                <thead>
                                                <tr>
                                                    <th>DATE</th>
                                                    <th class=\"text-center\">REF. PIÈCES</th>
                                                    <th class=\"text-center\">MONTANT</th>
                                                    <th class=\"text-center\">MODE</th>
                                                    <th class=\"text-center\">BÉNÉFICIAIRE</th>
                                                    <th class=\"text-center\">TYPE</th>
                                                    <th class=\"text-center\">RÉFÉRENCE</th>
                                                    <th class=\"text-center\">CLIENT/CHANTIER</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td class=\"text-right bg-blue bolo700 col-white\"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                </tfoot>
                                            </table>
                                            <br/>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"panel panel-pri shadow\" style=\"border-left: 2px solid #A9A9A9\">
                                <div class=\"panel-heading\" role=\"tab\" id=\"headingOne_2\">
                                    <h5 class=\"panel-title\">
                                        <a class=\"collapsed col-white outai\" role=\"button\" data-toggle=\"collapse\"
                                           data-parent=\"#accordion_2\" href=\"#collapseOne_2\" aria-expanded=\"false\"
                                           aria-controls=\"collapseOne_2\">
                                            <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Revenus
                                        </a>
                                    </h5>
                                </div>
                                <div id=\"collapseOne_2\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                     aria-labelledby=\"headingOne_2\">
                                    <div class=\"panel-body\">
                                        <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow:scroll\">
                                            <table class=\"table-striped table-bordered display nowrap\" id=\"dataCredit\"
                                                   style=\"margin-top: 50px; width: 100%\">
                                                <thead>
                                                <tr class=\"bolo600\">
                                                    <th>DATE</th>
                                                    <th>DEVIS</th>
                                                    <th>ENREGISTREMENT</th>
                                                    <th style=\"text-align:center;\">MONTANT</th>
                                                    <th style=\"text-align:center;\">MODE</th>
                                                    <th style=\"text-align:center;\">CLIENT | CHANTIER</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                                <tfoot>
                                                <tr class=\"bolo600\">
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td class=\"text-right bg-blue bolo700 col-white\"></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"panel panel-pri shadow\" style=\"border-left: 2px solid #A9A9A9\">
                                <div class=\"panel-heading\" role=\"tab\" id=\"headingCaiss_1\">
                                    <h5 class=\"panel-title\">
                                        <a class=\"collapsed col-white outai\" role=\"button\" data-toggle=\"collapse\"
                                           data-parent=\"#accordion_0\" href=\"#collapseCaiss_1\" aria-expanded=\"false\"
                                           aria-controls=\"collapseCaiss_1\">
                                            <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Caisse
                                        </a>
                                    </h5>
                                </div>
                                <div id=\"collapseCaiss_1\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                     aria-labelledby=\"headingCaiss_1\">
                                    <div class=\"panel-body\">
                                        <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow:scroll\">
                                            <table class=\"table-striped table-bordered display nowrape\"
                                                   style=\"width: 100%\"
                                                   id=\"dataCaissers\">
                                                <thead>
                                                <tr>
                                                    <th>DATE</th>
                                                    <th class=\"text-center\">REF. PIÈCES</th>
                                                    <th class=\"text-center\">SORTIE DE CAISSE</th>
                                                    <th class=\"text-center\">ENTRÉE DE CAISSE</th>
                                                    <th class=\"text-center\">MODE</th>
                                                    <th class=\"text-center\">BÉNÉFICIAIRE</th>
                                                    <th class=\"text-center\">TYPE</th>
                                                    <th class=\"text-center\">RÉFÉRENCE</th>
                                                    <th class=\"text-center\">CLIENT/CHANTIER</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td class=\"text-right bg-blue bolo700 col-white\"></td>
                                                    <td class=\"text-right bg-blue bolo700 col-white\"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                </tfoot>
                                            </table>
                                            <br/>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"panel panel-pri shadow\" style=\"border-left: 2px solid #A9A9A9\">
                                <div class=\"panel-heading\" role=\"tab\" id=\"headingOne_3\">
                                    <h5 class=\"panel-title\">
                                        <a class=\"collapsed col-white outai\" role=\"button\" data-toggle=\"collapse\"
                                           data-parent=\"#accordion_3\" href=\"#collapseOne_3\" aria-expanded=\"false\"
                                           aria-controls=\"collapseOne_3\">
                                            <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Trésorerie
                                        </a>
                                    </h5>
                                </div>
                                <div id=\"collapseOne_3\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                     aria-labelledby=\"headingOne_3\">
                                    <div class=\"panel-body\">
                                        <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow:scroll\">
                                            <table class=\"table-striped table-bordered display nowrap\" id=\"dataTresor\"
                                                   style=\"margin-top: 50px; width: 100%\">
                                                <thead>
                                                <tr class=\"bolo600\">
                                                    <th class=\"text-right col-pink bolo700 h5\">TRÉSORERIE<br>";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["an"]) || array_key_exists("an", $context) ? $context["an"] : (function () { throw new RuntimeError('Variable "an" does not exist.', 188, $this->source); })()), "html", null, true);
        yield "</th>
                                                    <th class=\"text-right col-pink bolo700 h5\">ANNÉES<br>PRÉCÉDENTES</th>
                                                    <th>Janvier</th>
                                                    <th>Février</th>
                                                    <th>Mars</th>
                                                    <th>Avril</th>
                                                    <th>Mai</th>
                                                    <th>Juin</th>
                                                    <th>Juillet</th>
                                                    <th>Août</th>
                                                    <th>Septembre</th>
                                                    <th>Octobre</th>
                                                    <th>Novembre</th>
                                                    <th>Décembre</th>
                                                    <th>TOTAUX</th>
                                                </tr>
                                                </thead>
                                                <tbody>

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
        return "content/tresorerie.html.twig";
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
        return array (  286 => 188,  100 => 4,  87 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}{{ title }}{% endblock %}
{% block body %}

    <section class=\"content fixed-top\">
        <div class=\"container-fluid\" style=\"margin: 0 14px 0 14px\">

            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div id=\"ressult\" style=\"width: 100%; align-content: start\" class=\"text-left\"></div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"content\" style=\"margin-top: 50px !important;\">
        <div class=\"container-fluid\">
            <div class=\"block-header\">
                <div class=\"row clearfix m-t-50\">
                    <div class=\"col-sm-12 \">
                        <h4 class=\"bolo700 col-deep-orange\">SUIVI DE VOTRE TRÉSORERIE</h4>
                        <div class=\"panel-group\" id=\"accordion_1\" role=\"tablist\" aria-multiselectable=\"true\">
                            <div class=\"panel panel-pri shadow\" style=\"border-left: 2px solid #A9A9A9\">
                                <div class=\"panel-heading\" role=\"tab\" id=\"headingOne_1\">
                                    <h5 class=\"panel-title\">
                                        <a class=\"collapsed col-white outai\" role=\"button\" data-toggle=\"collapse\"
                                           data-parent=\"#accordion_0\" href=\"#collapseOne_0\" aria-expanded=\"false\"
                                           aria-controls=\"collapseOne_0\">
                                            <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Dépenses
                                        </a>
                                    </h5>
                                </div>
                                <div id=\"collapseOne_0\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                     aria-labelledby=\"headingOne_0\">
                                    <div class=\"panel-body\">
                                        <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow:scroll\">
                                            <table class=\"table-striped table-bordered display nowrape\"
                                                   style=\"width: 100%\"
                                                   id=\"dataDepenses\">
                                                <thead>
                                                <tr>
                                                    <th>DATE</th>
                                                    <th class=\"text-center\">REF. PIÈCES</th>
                                                    <th class=\"text-center\">MONTANT</th>
                                                    <th class=\"text-center\">MODE</th>
                                                    <th class=\"text-center\">BÉNÉFICIAIRE</th>
                                                    <th class=\"text-center\">TYPE</th>
                                                    <th class=\"text-center\">RÉFÉRENCE</th>
                                                    <th class=\"text-center\">CLIENT/CHANTIER</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td class=\"text-right bg-blue bolo700 col-white\"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                </tfoot>
                                            </table>
                                            <br/>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"panel panel-pri shadow\" style=\"border-left: 2px solid #A9A9A9\">
                                <div class=\"panel-heading\" role=\"tab\" id=\"headingOne_2\">
                                    <h5 class=\"panel-title\">
                                        <a class=\"collapsed col-white outai\" role=\"button\" data-toggle=\"collapse\"
                                           data-parent=\"#accordion_2\" href=\"#collapseOne_2\" aria-expanded=\"false\"
                                           aria-controls=\"collapseOne_2\">
                                            <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Revenus
                                        </a>
                                    </h5>
                                </div>
                                <div id=\"collapseOne_2\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                     aria-labelledby=\"headingOne_2\">
                                    <div class=\"panel-body\">
                                        <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow:scroll\">
                                            <table class=\"table-striped table-bordered display nowrap\" id=\"dataCredit\"
                                                   style=\"margin-top: 50px; width: 100%\">
                                                <thead>
                                                <tr class=\"bolo600\">
                                                    <th>DATE</th>
                                                    <th>DEVIS</th>
                                                    <th>ENREGISTREMENT</th>
                                                    <th style=\"text-align:center;\">MONTANT</th>
                                                    <th style=\"text-align:center;\">MODE</th>
                                                    <th style=\"text-align:center;\">CLIENT | CHANTIER</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                                <tfoot>
                                                <tr class=\"bolo600\">
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td class=\"text-right bg-blue bolo700 col-white\"></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"panel panel-pri shadow\" style=\"border-left: 2px solid #A9A9A9\">
                                <div class=\"panel-heading\" role=\"tab\" id=\"headingCaiss_1\">
                                    <h5 class=\"panel-title\">
                                        <a class=\"collapsed col-white outai\" role=\"button\" data-toggle=\"collapse\"
                                           data-parent=\"#accordion_0\" href=\"#collapseCaiss_1\" aria-expanded=\"false\"
                                           aria-controls=\"collapseCaiss_1\">
                                            <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Caisse
                                        </a>
                                    </h5>
                                </div>
                                <div id=\"collapseCaiss_1\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                     aria-labelledby=\"headingCaiss_1\">
                                    <div class=\"panel-body\">
                                        <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow:scroll\">
                                            <table class=\"table-striped table-bordered display nowrape\"
                                                   style=\"width: 100%\"
                                                   id=\"dataCaissers\">
                                                <thead>
                                                <tr>
                                                    <th>DATE</th>
                                                    <th class=\"text-center\">REF. PIÈCES</th>
                                                    <th class=\"text-center\">SORTIE DE CAISSE</th>
                                                    <th class=\"text-center\">ENTRÉE DE CAISSE</th>
                                                    <th class=\"text-center\">MODE</th>
                                                    <th class=\"text-center\">BÉNÉFICIAIRE</th>
                                                    <th class=\"text-center\">TYPE</th>
                                                    <th class=\"text-center\">RÉFÉRENCE</th>
                                                    <th class=\"text-center\">CLIENT/CHANTIER</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td class=\"text-right bg-blue bolo700 col-white\"></td>
                                                    <td class=\"text-right bg-blue bolo700 col-white\"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                </tfoot>
                                            </table>
                                            <br/>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"panel panel-pri shadow\" style=\"border-left: 2px solid #A9A9A9\">
                                <div class=\"panel-heading\" role=\"tab\" id=\"headingOne_3\">
                                    <h5 class=\"panel-title\">
                                        <a class=\"collapsed col-white outai\" role=\"button\" data-toggle=\"collapse\"
                                           data-parent=\"#accordion_3\" href=\"#collapseOne_3\" aria-expanded=\"false\"
                                           aria-controls=\"collapseOne_3\">
                                            <i class=\"material-icons col-white\" style=\"font-size: 18px;float: left\">keyboard_arrow_down</i>Trésorerie
                                        </a>
                                    </h5>
                                </div>
                                <div id=\"collapseOne_3\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                                     aria-labelledby=\"headingOne_3\">
                                    <div class=\"panel-body\">
                                        <div class=\"table-responsive shadow\" style=\"padding: 20px; overflow:scroll\">
                                            <table class=\"table-striped table-bordered display nowrap\" id=\"dataTresor\"
                                                   style=\"margin-top: 50px; width: 100%\">
                                                <thead>
                                                <tr class=\"bolo600\">
                                                    <th class=\"text-right col-pink bolo700 h5\">TRÉSORERIE<br>{{ an }}</th>
                                                    <th class=\"text-right col-pink bolo700 h5\">ANNÉES<br>PRÉCÉDENTES</th>
                                                    <th>Janvier</th>
                                                    <th>Février</th>
                                                    <th>Mars</th>
                                                    <th>Avril</th>
                                                    <th>Mai</th>
                                                    <th>Juin</th>
                                                    <th>Juillet</th>
                                                    <th>Août</th>
                                                    <th>Septembre</th>
                                                    <th>Octobre</th>
                                                    <th>Novembre</th>
                                                    <th>Décembre</th>
                                                    <th>TOTAUX</th>
                                                </tr>
                                                </thead>
                                                <tbody>

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
", "content/tresorerie.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\tresorerie.html.twig");
    }
}
