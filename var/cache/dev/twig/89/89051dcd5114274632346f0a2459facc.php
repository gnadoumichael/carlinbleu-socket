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

/* content/showroom.html.twig */
class __TwigTemplate_5e043e5c7a4679685c07bfbb995785f7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/showroom.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/showroom.html.twig"));

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
        yield "    <script>
        function printFrame() {
            var frm = document.getElementById('frame').contentWindow;
            frm.focus();// focus on contentWindow is needed on some ie versions
            frm.print();
            return false;
        }
    </script>
    <style>
        .btn {
            text-align: left !important;
        }
        .floater {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #FF5722;
            color: #FFF;
            font-weight: 600;
            border-radius: 50px;
            text-align: center;
            box-shadow: 2px 2px 3px #999;
            z-index: 1000;
            animation: bot-to-top 2s ease-out;
        }

    </style>
    <input type=\"text\" class=\"hide\" id=\"idchantier\" value=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33), "html", null, true);
        yield "\">
    <input type=\"text\" class=\"hide\" id=\"idbon\" value=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34), "html", null, true);
        yield "\">
    <input type=\"text\" class=\"hide\" id=\"idgroupe\" value=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["idgroupe"]) || array_key_exists("idgroupe", $context) ? $context["idgroupe"] : (function () { throw new RuntimeError('Variable "idgroupe" does not exist.', 35, $this->source); })()), "html", null, true);
        yield "\">
    <input type=\"text\" class=\"hide\" id=\"idligne\" value=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["idligne"]) || array_key_exists("idligne", $context) ? $context["idligne"] : (function () { throw new RuntimeError('Variable "idligne" does not exist.', 36, $this->source); })()), "html", null, true);
        yield "\">

    <button type=\"button\"
            class=\"btn bg-pink btn-circle-lg waves-effect waves-circle waves-float floater fonter text-white\"
            data-toggle=\"modal\" data-target=\"#sideModalTR\">
        FAIRE
    </button>

    <div class=\"modal fade right\" id=\"modalList\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-green text-white\">
                    <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">MODIFIER LES LIGNES</h4>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        <style>
                            .hider {
                                float: right;
                                margin-top: -17px;
                                visibility: hidden;
                            }

                            p {
                                margin: 2px;
                                font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
                            }

                            #borde td, th {
                                border: solid #D3D3D3;
                                border-width: 1px 1px 1px 1px;
                                padding: 5px;
                            }


                            td.bord {
                                border: 0 solid #FFFFFF !important;
                                padding: 5px;
                                text-align: right;
                                font-weight: 600;
                            }

                            td.bordz {
                                border: 0 solid #FFFFFF !important;
                                padding: 0 0 0 5px !important;
                            }

                            h3 {
                                font-weight: 500;
                                font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
                            }
                        </style>

                        <div class=\"table-responsive\">
                            <table id=\"borde\" cellspacing=\"0\" cellpadding=\"5\" style=\"width:100%;\">
                                ";
        // line 94
        yield "                                <tr style=\"background-color:#4e73df; color: #FFFFFF !important; \">
                                    ";
        // line 95
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 95, $this->source); })()), "aaref", [], "any", false, false, false, 95) == "oui")) {
            // line 96
            yield "                                        <th style=\"text-align: center\">RÉF</th>
                                    ";
        }
        // line 98
        yield "                                    <th style=\"text-align: left !important;\">
                                        DÉSIGNATION
                                    </th>
                                    ";
        // line 101
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 101, $this->source); })()), "etat", [], "any", false, false, false, 101) == "save")) {
            // line 102
            yield "                                        <th id=\"dis\" style=\"width:50px !important;\"></th>
                                    ";
        }
        // line 104
        yield "                                </tr>
                                ";
        // line 105
        if ((($tmp = (isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 105, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 106
            yield "                                    ";
            // line 107
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["listGroup"]) || array_key_exists("listGroup", $context) ? $context["listGroup"] : (function () { throw new RuntimeError('Variable "listGroup" does not exist.', 107, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 108
                yield "                                        <tr class=\"bg-gray-200 bolderrer\">
                                            ";
                // line 109
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 109, $this->source); })()), "aaref", [], "any", false, false, false, 109) == "oui")) {
                    // line 110
                    yield "                                                <td align=\"center\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "reference", [], "any", false, false, false, 110), "html", null, true);
                    yield "</td>
                                            ";
                }
                // line 112
                yield "                                            <td>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["group"], "groupe", [], "any", false, false, false, 112);
                yield "</td>
                                            <td class=\"text-center\" style=\"padding: 2px\">
                                                <a href=\"";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bongroupe", ["idgroupe" => CoreExtension::getAttribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 114), "id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 114, $this->source); })()), "id", [], "any", false, false, false, 114), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 114, $this->source); })()), "getchantier", [], "any", false, false, false, 114), "id", [], "any", false, false, false, 114)]), "html", null, true);
                yield "#groupe\">
                                                    <i class=\"fa fa-edit col-green\" aria-hidden=\"true\"
                                                       title=\"Modifier\"></i>
                                                </a>
                                                <a href=\"";
                // line 118
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supgroupe", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 118, $this->source); })()), "id", [], "any", false, false, false, 118), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 118, $this->source); })()), "getchantier", [], "any", false, false, false, 118), "id", [], "any", false, false, false, 118), "idgroupe" => CoreExtension::getAttribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 118), "type" => "bon"]), "html", null, true);
                yield "\"
                                                   class=\"sholigne\">
                                                    <i class=\"fa fa-trash col-pink\" aria-hidden=\"true\"
                                                       title=\"Supprimer\"></i>
                                                </a>
                                            </td>
                                        </tr>


                                        ";
                // line 127
                $context["st"] = 0;
                // line 128
                yield "
                                        ";
                // line 129
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "lignes", [], "any", false, false, false, 129));
                foreach ($context['_seq'] as $context["_key"] => $context["lign"]) {
                    // line 130
                    yield "                                            <tr>
                                                ";
                    // line 131
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 131, $this->source); })()), "aaref", [], "any", false, false, false, 131) == "oui")) {
                        // line 132
                        yield "                                                    <td style=\"text-align: center\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "reference", [], "any", false, false, false, 132), "html", null, true);
                        yield "</td>
                                                ";
                    }
                    // line 134
                    yield "                                                <td>
                                                    <span class=\"pri font-bold\">";
                    // line 135
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "designation", [], "any", false, false, false, 135);
                    yield "</span><br>
                                                    <table style=\"width: 100%; margin-top: 10px\" border=\"0\"
                                                           cellspacing=\"0\"
                                                           cellpadding=\"0\">
                                                        <tr>
                                                            <td class=\"text-right bordz\">Unité:</td>
                                                            <td class=\"text-left bordz font-bold text-black\"> ";
                    // line 141
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "unite", [], "any", false, false, false, 141), "html", null, true);
                    yield "</td>
                                                        </tr>
                                                        <tr>
                                                            <td class=\"text-right bordz\">Quantité:</td>
                                                            <td class=\"text-left bordz font-bold text-black\"> ";
                    // line 145
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 145), 2, ",", " "), "html", null, true);
                    yield "</td>
                                                        </tr>
                                                        <tr>
                                                            <td class=\"text-right bordz\">Prix unitaire:</td>
                                                            <td class=\"text-left bordz font-bold text-black\"> ";
                    // line 149
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 149), 2, ",", " "), "html", null, true);
                    yield "</td>
                                                        </tr>
                                                        ";
                    // line 151
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 151, $this->source); })()), "aarem", [], "any", false, false, false, 151) == "oui")) {
                        // line 152
                        yield "                                                            <tr>
                                                                <td class=\"text-right bordz\">Remise:</td>
                                                                <td class=\"text-left bordz font-bold text-black\"> ";
                        // line 154
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "remise", [], "any", false, false, false, 154), "html", null, true);
                        yield "
                                                                    %
                                                                </td>
                                                            </tr>
                                                        ";
                    }
                    // line 159
                    yield "                                                        <tr>
                                                            <td class=\"text-right bordz\">Montant HT:</td>
                                                            <td class=\"text-left bordz font-bold text-black\">
                                                                ";
                    // line 162
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 162, $this->source); })()), "aarem", [], "any", false, false, false, 162) == "non")) {
                        // line 163
                        yield "                                                                    ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 163) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 163)), 2, ",", " "), "html", null, true);
                        yield "
                                                                ";
                    } else {
                        // line 165
                        yield "                                                                    ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 165) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 165)) * ((100 - CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "remise", [], "any", false, false, false, 165)) / 100)), 2, ",", " "), "html", null, true);
                        yield "
                                                                ";
                    }
                    // line 167
                    yield "                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                ";
                    // line 172
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 172, $this->source); })()), "etat", [], "any", false, false, false, 172) == "save")) {
                        // line 173
                        yield "                                                    <td class=\"text-center\" style=\"padding: 2px\">
                                                        <a href=\"";
                        // line 174
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editlignebon", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 174, $this->source); })()), "id", [], "any", false, false, false, 174), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 174, $this->source); })()), "getchantier", [], "any", false, false, false, 174), "id", [], "any", false, false, false, 174), "idligne" => CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "id", [], "any", false, false, false, 174)]), "html", null, true);
                        yield "\">
                                                            <i class=\"fa fa-edit text-success\"
                                                               aria-hidden=\"true\"
                                                               title=\"Modifier\"></i>
                                                        </a>
                                                        <a href=\"";
                        // line 179
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supligne", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 179, $this->source); })()), "id", [], "any", false, false, false, 179), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 179, $this->source); })()), "getchantier", [], "any", false, false, false, 179), "id", [], "any", false, false, false, 179), "idligne" => CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "id", [], "any", false, false, false, 179), "type" => "bon"]), "html", null, true);
                        yield "\"
                                                           class=\"sholigne\">
                                                            <i class=\"fa fa-trash text-del\" aria-hidden=\"true\"
                                                               title=\"Supprimer\"></i>
                                                        </a></td>
                                                ";
                    }
                    // line 185
                    yield "                                            </tr>
                                            ";
                    // line 186
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 186, $this->source); })()), "aarem", [], "any", false, false, false, 186) == "non")) {
                        // line 187
                        yield "                                                ";
                        $context["st"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 187) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 187)) + (isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 187, $this->source); })()));
                        // line 188
                        yield "                                            ";
                    } else {
                        // line 189
                        yield "                                                ";
                        $context["st"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 189) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 189)) * ((100 - CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "remise", [], "any", false, false, false, 189)) / 100)) + (isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 189, $this->source); })()));
                        // line 190
                        yield "                                            ";
                    }
                    // line 191
                    yield "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['lign'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 192
                yield "
                                        <tr class=\"bg-gray-200\" style=\"font-weight: 600\">
                                            <td></td>
                                            <td COLSPAN=\"2\" align=\"right\">
                                                SOUS-TOTAL: ";
                // line 196
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 196, $this->source); })()), 2, ",", " "), "html", null, true);
                yield "</td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 199
            yield "                                    ";
            // line 200
            yield "
                                    ";
            // line 202
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["lignes"]) || array_key_exists("lignes", $context) ? $context["lignes"] : (function () { throw new RuntimeError('Variable "lignes" does not exist.', 202, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["lign"]) {
                // line 203
                yield "                                        ";
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "groupe", [], "any", false, false, false, 203))) {
                    // line 204
                    yield "                                            <tr>
                                                ";
                    // line 205
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 205, $this->source); })()), "aaref", [], "any", false, false, false, 205) == "oui")) {
                        // line 206
                        yield "                                                    <td style=\"text-align: center\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "reference", [], "any", false, false, false, 206), "html", null, true);
                        yield "</td>
                                                ";
                    }
                    // line 208
                    yield "                                                <td>
                                                    <span class=\"pri font-bold\">";
                    // line 209
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "designation", [], "any", false, false, false, 209);
                    yield "</span><br>
                                                    <table style=\"width: 100%; margin-top: 10px\" border=\"0\" cellspacing=\"0\"
                                                           cellpadding=\"0\">
                                                        <tr>
                                                            <td class=\"text-right bordz\">Unité:</td>
                                                            <td class=\"text-left bordz font-bold text-black\"> ";
                    // line 214
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "unite", [], "any", false, false, false, 214), "html", null, true);
                    yield "</td>
                                                        </tr>
                                                        <tr>
                                                            <td class=\"text-right bordz\">Quantité:</td>
                                                            <td class=\"text-left bordz font-bold text-black\"> ";
                    // line 218
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 218), 2, ",", " "), "html", null, true);
                    yield "</td>
                                                        </tr>
                                                        <tr>
                                                            <td class=\"text-right bordz\">Prix unitaire:</td>
                                                            <td class=\"text-left bordz font-bold text-black\"> ";
                    // line 222
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 222), 2, ",", " "), "html", null, true);
                    yield "</td>
                                                        </tr>
                                                        ";
                    // line 224
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 224, $this->source); })()), "aarem", [], "any", false, false, false, 224) == "oui")) {
                        // line 225
                        yield "                                                            <tr>
                                                                <td class=\"text-right bordz\">Remise:</td>
                                                                <td class=\"text-left bordz font-bold text-black\"> ";
                        // line 227
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "remise", [], "any", false, false, false, 227), "html", null, true);
                        yield "
                                                                    %
                                                                </td>
                                                            </tr>
                                                        ";
                    }
                    // line 232
                    yield "                                                        <tr>
                                                            <td class=\"text-right bordz\">Montant HT:</td>
                                                            <td class=\"text-left bordz font-bold text-black\">
                                                                ";
                    // line 235
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 235, $this->source); })()), "aarem", [], "any", false, false, false, 235) == "non")) {
                        // line 236
                        yield "                                                                    ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 236) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 236)), 2, ",", " "), "html", null, true);
                        yield "
                                                                ";
                    } else {
                        // line 238
                        yield "                                                                    ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "pu", [], "any", false, false, false, 238) * CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "quantite", [], "any", false, false, false, 238)) * ((100 - CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "remise", [], "any", false, false, false, 238)) / 100)), 2, ",", " "), "html", null, true);
                        yield "
                                                                ";
                    }
                    // line 240
                    yield "                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                ";
                    // line 245
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 245, $this->source); })()), "etat", [], "any", false, false, false, 245) == "save")) {
                        // line 246
                        yield "                                                    <td class=\"text-center\" style=\"padding: 2px\">
                                                        <a href=\"";
                        // line 247
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editlignebon", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 247, $this->source); })()), "id", [], "any", false, false, false, 247), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 247, $this->source); })()), "getchantier", [], "any", false, false, false, 247), "id", [], "any", false, false, false, 247), "idligne" => CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "id", [], "any", false, false, false, 247)]), "html", null, true);
                        yield "\">
                                                            <i class=\"fa fa-edit col-green\"
                                                               aria-hidden=\"true\"
                                                               title=\"Modifier\"></i>
                                                        </a>
                                                        <a href=\"";
                        // line 252
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supligne", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 252, $this->source); })()), "id", [], "any", false, false, false, 252), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 252, $this->source); })()), "getchantier", [], "any", false, false, false, 252), "id", [], "any", false, false, false, 252), "idligne" => CoreExtension::getAttribute($this->env, $this->source, $context["lign"], "id", [], "any", false, false, false, 252), "type" => "bon"]), "html", null, true);
                        yield "\"
                                                           class=\"sholigne\">
                                                            <i class=\"fa fa-trash col-pink\" aria-hidden=\"true\"
                                                               title=\"Supprimer\"></i>
                                                        </a></td>
                                                ";
                    }
                    // line 258
                    yield "                                            </tr>
                                        ";
                }
                // line 260
                yield "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['lign'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 261
            yield "

                                ";
        }
        // line 264
        yield "                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalInfo\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-green text-white\">
                    <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">1- MODIFIER LES INFORMATIONS</h4>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
        // line 280
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 280, $this->source); })()), 'form_start', ["attr" => ["id" => "form1"]]);
        yield "
                        ";
        // line 281
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 281, $this->source); })()), "_token", [], "any", false, false, false, 281), 'row');
        yield "
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">N° DU BON <span class=\"col-red\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 287
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 287, $this->source); })()), "numbon", [], "any", false, false, false, 287), 'widget', ["attr" => ["class" => "form-control col-green"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">TYPE DE BON<span class=\"col-red\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 295
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 295, $this->source); })()), "type", [], "any", false, false, false, 295), 'widget', ["required" => "", "attr" => ["class" => "form-control col-green"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">CONTACT</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 305
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 305, $this->source); })()), "contact", [], "any", false, false, false, 305), 'widget', ["attr" => ["class" => "form-control col-green"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">OBJET OU RÉFÉRENCE<span class=\"col-red\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 315
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 315, $this->source); })()), "reference", [], "any", false, false, false, 315), 'widget', ["id" => "editor1", "attr" => ["class" => "form-control col-green"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DEVISE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 326
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 326, $this->source); })()), "monnaie", [], "any", false, false, false, 326), 'widget', ["attr" => ["class" => "form-control col-green"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">TVA(%)</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 334
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 334, $this->source); })()), "tva", [], "any", false, false, false, 334), 'widget', ["attr" => ["class" => "form-control col-green"]]);
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
        // line 344
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 344, $this->source); })()), "ptva", [], "any", false, false, false, 344), 'widget', ["attr" => ["class" => "form-control col-green"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">BON AVEC REMISE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 352
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 352, $this->source); })()), "aarem", [], "any", false, false, false, 352), 'widget', ["attr" => ["class" => "form-control col-green"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">BON AVEC RÉF?</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 362
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 362, $this->source); })()), "aaref", [], "any", false, false, false, 362), 'widget', ["attr" => ["class" => "form-control col-green"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DATE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 370
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 370, $this->source); })()), "date", [], "any", false, false, false, 370), 'widget', ["attr" => ["class" => "form-control col-green"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">INFORMATIONS SUR LE BON</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 380
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 380, $this->source); })()), "conditions", [], "any", false, false, false, 380), 'widget', ["id" => "editor2", "attr" => ["class" => "form-control col-green"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"updateBon\" value=\"MODIFIER\" class=\"btn btn-link waves-effect text-white bg-green\">
                            <div type=\"button\" id=\"closeBon\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"";
        // line 391
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\" class=\"align-justify\" id=\"loadBon\">
                        </div>
                        <br><br><br>
                        ";
        // line 394
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formBon"]) || array_key_exists("formBon", $context) ? $context["formBon"] : (function () { throw new RuntimeError('Variable "formBon" does not exist.', 394, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalGroup\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                ";
        // line 405
        if ((($tmp = (isset($context["editGrou"]) || array_key_exists("editGrou", $context) ? $context["editGrou"] : (function () { throw new RuntimeError('Variable "editGrou" does not exist.', 405, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 406
            yield "                    <div class=\"p-5 bg-pink\">
                        <div class=\"modal-header text-white\">
                            <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">2- MODIFIER UN GROUPE</h4>
                        </div>
                    </div>
                ";
        } else {
            // line 412
            yield "                    <div class=\"modal-header bg-pri\">
                        <div class=\"p-5 text-white\">
                            <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">2- CRÉER UN GROUPE</h4>
                        </div>
                    </div>
                ";
        }
        // line 418
        yield "                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
        // line 420
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formGroup"]) || array_key_exists("formGroup", $context) ? $context["formGroup"] : (function () { throw new RuntimeError('Variable "formGroup" does not exist.', 420, $this->source); })()), 'form_start', ["attr" => ["id" => "form2"]]);
        yield "
                        ";
        // line 421
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formGroup"]) || array_key_exists("formGroup", $context) ? $context["formGroup"] : (function () { throw new RuntimeError('Variable "formGroup" does not exist.', 421, $this->source); })()), "_token", [], "any", false, false, false, 421), 'row');
        yield "
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">RÉFÉRENCE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line  ";
        // line 426
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 426, $this->source); })()), "aaref", [], "any", false, false, false, 426) != "oui")) {
            yield "disabled";
        }
        yield "\">
                                        ";
        // line 427
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 427, $this->source); })()), "aaref", [], "any", false, false, false, 427) == "oui")) {
            // line 428
            yield "                                            ";
            if ((($tmp = (isset($context["editGrou"]) || array_key_exists("editGrou", $context) ? $context["editGrou"] : (function () { throw new RuntimeError('Variable "editGrou" does not exist.', 428, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 429
                yield "                                                ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formGroup"]) || array_key_exists("formGroup", $context) ? $context["formGroup"] : (function () { throw new RuntimeError('Variable "formGroup" does not exist.', 429, $this->source); })()), "reference", [], "any", false, false, false, 429), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
                yield "
                                            ";
            } else {
                // line 431
                yield "                                                ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formGroup"]) || array_key_exists("formGroup", $context) ? $context["formGroup"] : (function () { throw new RuntimeError('Variable "formGroup" does not exist.', 431, $this->source); })()), "reference", [], "any", false, false, false, 431), 'widget', ["attr" => ["class" => "form-control"]]);
                yield "
                                            ";
            }
            // line 433
            yield "                                        ";
        } else {
            // line 434
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formGroup"]) || array_key_exists("formGroup", $context) ? $context["formGroup"] : (function () { throw new RuntimeError('Variable "formGroup" does not exist.', 434, $this->source); })()), "reference", [], "any", false, false, false, 434), 'widget', ["attr" => ["class" => "form-control col-pink", "placeholder" => "Désactivé"]]);
            yield "
                                        ";
        }
        // line 436
        yield "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">GROUPE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 445
        if ((($tmp = (isset($context["editGrou"]) || array_key_exists("editGrou", $context) ? $context["editGrou"] : (function () { throw new RuntimeError('Variable "editGrou" does not exist.', 445, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 446
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formGroup"]) || array_key_exists("formGroup", $context) ? $context["formGroup"] : (function () { throw new RuntimeError('Variable "formGroup" does not exist.', 446, $this->source); })()), "groupe", [], "any", false, false, false, 446), 'widget', ["attr" => ["class" => "form-control col-pink"]]);
            yield "
                                        ";
        } else {
            // line 448
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formGroup"]) || array_key_exists("formGroup", $context) ? $context["formGroup"] : (function () { throw new RuntimeError('Variable "formGroup" does not exist.', 448, $this->source); })()), "groupe", [], "any", false, false, false, 448), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                        ";
        }
        // line 450
        yield "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            ";
        // line 455
        if ((($tmp = (isset($context["editGrou"]) || array_key_exists("editGrou", $context) ? $context["editGrou"] : (function () { throw new RuntimeError('Variable "editGrou" does not exist.', 455, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 456
            yield "                                <input type=\"submit\" id=\"updateGroupBon\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect text-white bg-green\">
                                <a href=\"";
            // line 458
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editbon", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 458, $this->source); })()), "id", [], "any", false, false, false, 458), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 458, $this->source); })()), "chantier", [], "any", false, false, false, 458), "id", [], "any", false, false, false, 458)]), "html", null, true);
            yield "\"  id=\"closeGroup\" class=\"btn btn-link waves-effect text-white bg-pink\">FERMER
                                </a>
                            ";
        } else {
            // line 461
            yield "                                <input type=\"submit\" id=\"addGroupBon\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-pri\">
                                <div type=\"button\" id=\"closeGroup\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                     data-dismiss=\"modal\">FERMER
                                </div>
                            ";
        }
        // line 467
        yield "                            <img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadGroup\">
                        </div>
                        ";
        // line 470
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formGroup"]) || array_key_exists("formGroup", $context) ? $context["formGroup"] : (function () { throw new RuntimeError('Variable "formGroup" does not exist.', 470, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalLigne\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                ";
        // line 481
        if ((($tmp = (isset($context["editMod"]) || array_key_exists("editMod", $context) ? $context["editMod"] : (function () { throw new RuntimeError('Variable "editMod" does not exist.', 481, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 482
            yield "                    <div class=\"p-5 bg-green\">
                        <div class=\"modal-header text-white\">
                            <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">4- MODIFIER UNE DÉSIGNATION</h4>
                        </div>
                    </div>
                ";
        } else {
            // line 488
            yield "                    <div class=\"p-5 bg-pri\">
                        <div class=\"modal-header text-white\">
                            <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">4- AJOUTER UNE DÉSIGNATION</h4>
                        </div>
                    </div>
                ";
        }
        // line 494
        yield "                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
        // line 496
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 496, $this->source); })()), 'form_start', ["attr" => ["id" => "form3"]]);
        yield "
                        ";
        // line 497
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 497, $this->source); })()), "_token", [], "any", false, false, false, 497), 'row');
        yield "
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">GROUPE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 503
        if ((($tmp = (isset($context["editMod"]) || array_key_exists("editMod", $context) ? $context["editMod"] : (function () { throw new RuntimeError('Variable "editMod" does not exist.', 503, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 504
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 504, $this->source); })()), "groupe", [], "any", false, false, false, 504), 'widget', ["attr" => ["class" => "form-control col-green"]]);
            yield "
                                        ";
        } else {
            // line 506
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 506, $this->source); })()), "groupe", [], "any", false, false, false, 506), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                        ";
        }
        // line 508
        yield "                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">RÉFÉRENCE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">


                                        ";
        // line 517
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 517, $this->source); })()), "aaref", [], "any", false, false, false, 517) == "oui")) {
            // line 518
            yield "                                            ";
            if ((($tmp = (isset($context["editMod"]) || array_key_exists("editMod", $context) ? $context["editMod"] : (function () { throw new RuntimeError('Variable "editMod" does not exist.', 518, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 519
                yield "                                                ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 519, $this->source); })()), "reference", [], "any", false, false, false, 519), 'widget', ["attr" => ["class" => "form-control col-green"]]);
                yield "
                                            ";
            } else {
                // line 521
                yield "                                                ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 521, $this->source); })()), "reference", [], "any", false, false, false, 521), 'widget', ["attr" => ["class" => "form-control"]]);
                yield "
                                            ";
            }
            // line 523
            yield "                                        ";
        } else {
            // line 524
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 524, $this->source); })()), "reference", [], "any", false, false, false, 524), 'widget', ["attr" => ["class" => "form-control", "readonly" => "true", "placeholder" => "Désactivé"]]);
            yield "
                                        ";
        }
        // line 526
        yield "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">DÉSIGNATION<span
                                            class=\"col-pink\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 536
        if ((($tmp = (isset($context["editMod"]) || array_key_exists("editMod", $context) ? $context["editMod"] : (function () { throw new RuntimeError('Variable "editMod" does not exist.', 536, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 537
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 537, $this->source); })()), "designation", [], "any", false, false, false, 537), 'widget', ["id" => "editor4", "attr" => ["class" => "form-control col-green"]]);
            yield "
                                        ";
        } else {
            // line 539
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 539, $this->source); })()), "designation", [], "any", false, false, false, 539), 'widget', ["id" => "editor4", "attr" => ["class" => "form-control"]]);
            yield "
                                        ";
        }
        // line 541
        yield "                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">UNITÉ<span
                                            class=\"col-pink\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 552
        if ((($tmp = (isset($context["editMod"]) || array_key_exists("editMod", $context) ? $context["editMod"] : (function () { throw new RuntimeError('Variable "editMod" does not exist.', 552, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 553
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 553, $this->source); })()), "unite", [], "any", false, false, false, 553), 'widget', ["attr" => ["class" => "form-control col-green"]]);
            yield "
                                        ";
        } else {
            // line 555
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 555, $this->source); })()), "unite", [], "any", false, false, false, 555), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                        ";
        }
        // line 557
        yield "                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">QUANTITÉ<span
                                            class=\"col-pink\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 565
        if ((($tmp = (isset($context["editMod"]) || array_key_exists("editMod", $context) ? $context["editMod"] : (function () { throw new RuntimeError('Variable "editMod" does not exist.', 565, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 566
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 566, $this->source); })()), "quantite", [], "any", false, false, false, 566), 'widget', ["type" => "number", "attr" => ["class" => "form-control col-green"]]);
            yield "
                                        ";
        } else {
            // line 568
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 568, $this->source); })()), "quantite", [], "any", false, false, false, 568), 'widget', ["type" => "number", "attr" => ["class" => "form-control"]]);
            yield "
                                        ";
        }
        // line 570
        yield "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">PRIX UNITAIRE<span
                                            class=\"col-pink\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 580
        if ((($tmp = (isset($context["editMod"]) || array_key_exists("editMod", $context) ? $context["editMod"] : (function () { throw new RuntimeError('Variable "editMod" does not exist.', 580, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 581
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 581, $this->source); })()), "pu", [], "any", false, false, false, 581), 'widget', ["type" => "number", "attr" => ["class" => "form-control col-green"]]);
            yield "
                                        ";
        } else {
            // line 583
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 583, $this->source); })()), "pu", [], "any", false, false, false, 583), 'widget', ["type" => "number", "attr" => ["class" => "form-control"]]);
            yield "
                                        ";
        }
        // line 585
        yield "                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">REMISE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 592
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 592, $this->source); })()), "aarem", [], "any", false, false, false, 592) == "oui")) {
            // line 593
            yield "                                            ";
            if ((($tmp = (isset($context["editMod"]) || array_key_exists("editMod", $context) ? $context["editMod"] : (function () { throw new RuntimeError('Variable "editMod" does not exist.', 593, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 594
                yield "                                                ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 594, $this->source); })()), "remise", [], "any", false, false, false, 594), 'widget', ["required" => "required", "attr" => ["class" => "form-control col-green", "type" => "number"]]);
                yield "
                                            ";
            } else {
                // line 596
                yield "                                                ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 596, $this->source); })()), "remise", [], "any", false, false, false, 596), 'widget', ["required" => "required", "attr" => ["class" => "form-control", "type" => "number"]]);
                yield "
                                            ";
            }
            // line 598
            yield "                                        ";
        } else {
            // line 599
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 599, $this->source); })()), "remise", [], "any", false, false, false, 599), 'widget', ["attr" => ["class" => "form-control", "readonly" => "true", "placeholder" => "Désactivé"]]);
            yield "
                                        ";
        }
        // line 601
        yield "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            ";
        // line 606
        if ((($tmp = (isset($context["editMod"]) || array_key_exists("editMod", $context) ? $context["editMod"] : (function () { throw new RuntimeError('Variable "editMod" does not exist.', 606, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 607
            yield "                                <input type=\"submit\" id=\"updateLigneBon\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect text-white bg-green\">
                                <a href=\"";
            // line 609
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editbon", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 609, $this->source); })()), "id", [], "any", false, false, false, 609), "idchantier" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 609, $this->source); })()), "chantier", [], "any", false, false, false, 609), "id", [], "any", false, false, false, 609)]), "html", null, true);
            yield "\"  id=\"closeLigne\"  class=\"btn btn-link waves-effect text-white bg-pink\">FERMER
                                </a>
                            ";
        } else {
            // line 612
            yield "                                <input type=\"submit\" id=\"addLigneBon\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-pri\">
                                <div type=\"button\" id=\"closeLigne\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                     data-dismiss=\"modal\">FERMER
                                </div>
                            ";
        }
        // line 618
        yield "
                            <img src=\"";
        // line 619
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadLigne\">
                        </div>
                        ";
        // line 622
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 622, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalChoisir\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"p-5 bg-pri\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">3- CHOISIR UN BIEN / SERVICE</h4>
                    </div>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
        // line 640
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formez"]) || array_key_exists("formez", $context) ? $context["formez"] : (function () { throw new RuntimeError('Variable "formez" does not exist.', 640, $this->source); })()), 'form_start', ["attr" => ["id" => "form5"]]);
        yield "
                        ";
        // line 641
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formez"]) || array_key_exists("formez", $context) ? $context["formez"] : (function () { throw new RuntimeError('Variable "formez" does not exist.', 641, $this->source); })()), "_token", [], "any", false, false, false, 641), 'row');
        yield "
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">Rechercher une désignation</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 647
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formez"]) || array_key_exists("formez", $context) ? $context["formez"] : (function () { throw new RuntimeError('Variable "formez" does not exist.', 647, $this->source); })()), "code", [], "any", false, false, false, 647), 'widget', ["required" => "", "attr" => ["class" => "form-control refarticle"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 655
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 655, $this->source); })()), "aaref", [], "any", false, false, false, 655) == "oui")) {
            // line 656
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formez"]) || array_key_exists("formez", $context) ? $context["formez"] : (function () { throw new RuntimeError('Variable "formez" does not exist.', 656, $this->source); })()), "reference", [], "any", false, false, false, 656), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
            yield "
                                        ";
        } else {
            // line 658
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formez"]) || array_key_exists("formez", $context) ? $context["formez"] : (function () { throw new RuntimeError('Variable "formez" does not exist.', 658, $this->source); })()), "reference", [], "any", false, false, false, 658), 'widget', ["required" => "", "attr" => ["class" => "form-control", "readonly" => "true", "placeholder" => "Désactivé"]]);
            yield "
                                        ";
        }
        // line 660
        yield "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">ARTICLE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 669
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formez"]) || array_key_exists("formez", $context) ? $context["formez"] : (function () { throw new RuntimeError('Variable "formez" does not exist.', 669, $this->source); })()), "article", [], "any", false, false, false, 669), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">GROUPE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 679
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formez"]) || array_key_exists("formez", $context) ? $context["formez"] : (function () { throw new RuntimeError('Variable "formez" does not exist.', 679, $this->source); })()), "groupe", [], "any", false, false, false, 679), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">QUANTITÉ</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 689
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formez"]) || array_key_exists("formez", $context) ? $context["formez"] : (function () { throw new RuntimeError('Variable "formez" does not exist.', 689, $this->source); })()), "quantite", [], "any", false, false, false, 689), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">REMISE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 697
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 697, $this->source); })()), "aarem", [], "any", false, false, false, 697) == "oui")) {
            // line 698
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formez"]) || array_key_exists("formez", $context) ? $context["formez"] : (function () { throw new RuntimeError('Variable "formez" does not exist.', 698, $this->source); })()), "remise", [], "any", false, false, false, 698), 'widget', ["required" => "required", "type" => "number", "attr" => ["class" => "form-control"]]);
            yield "
                                        ";
        } else {
            // line 700
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formez"]) || array_key_exists("formez", $context) ? $context["formez"] : (function () { throw new RuntimeError('Variable "formez" does not exist.', 700, $this->source); })()), "remise", [], "any", false, false, false, 700), 'widget', ["required" => "", "type" => "number", "attr" => ["class" => "form-control", "readonly" => "true", "placeholder" => "Désactivé"]]);
            yield "
                                        ";
        }
        // line 702
        yield "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"addChoisirBon\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-pri\">
                            <div type=\"button\" id=\"closeChoisir\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">FERMER
                            </div>
                            <img src=\"";
        // line 712
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadChoisir\">
                        </div>
                        ";
        // line 715
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formez"]) || array_key_exists("formez", $context) ? $context["formez"] : (function () { throw new RuntimeError('Variable "formez" does not exist.', 715, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"mdModalBon\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-blue text-white\">
                    <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">CRÉER UN NOUVEAU BON</h4>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        ";
        // line 731
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formneBon"]) || array_key_exists("formneBon", $context) ? $context["formneBon"] : (function () { throw new RuntimeError('Variable "formneBon" does not exist.', 731, $this->source); })()), 'form_start', ["attr" => ["id" => "addBonForm"]]);
        yield "
                        ";
        // line 732
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formneBon"]) || array_key_exists("formneBon", $context) ? $context["formneBon"] : (function () { throw new RuntimeError('Variable "formneBon" does not exist.', 732, $this->source); })()), "_token", [], "any", false, false, false, 732), 'row');
        yield "
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DERNIER N° DE BON DE COMMANDE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        ";
        // line 738
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["lastbon"]) || array_key_exists("lastbon", $context) ? $context["lastbon"] : (function () { throw new RuntimeError('Variable "lastbon" does not exist.', 738, $this->source); })()), "html", null, true);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">N° DU BON <span class=\"col-red\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 748
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formneBon"]) || array_key_exists("formneBon", $context) ? $context["formneBon"] : (function () { throw new RuntimeError('Variable "formneBon" does not exist.', 748, $this->source); })()), "numbon", [], "any", false, false, false, 748), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">TYPE DE BON<span class=\"col-red\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 756
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formneBon"]) || array_key_exists("formneBon", $context) ? $context["formneBon"] : (function () { throw new RuntimeError('Variable "formneBon" does not exist.', 756, $this->source); })()), "type", [], "any", false, false, false, 756), 'widget', ["required" => "", "attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">CONTACT</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 766
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formneBon"]) || array_key_exists("formneBon", $context) ? $context["formneBon"] : (function () { throw new RuntimeError('Variable "formneBon" does not exist.', 766, $this->source); })()), "contact", [], "any", false, false, false, 766), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE OU OBJET<span class=\"col-red\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 776
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formneBon"]) || array_key_exists("formneBon", $context) ? $context["formneBon"] : (function () { throw new RuntimeError('Variable "formneBon" does not exist.', 776, $this->source); })()), "reference", [], "any", false, false, false, 776), 'widget', ["id" => "editor6", "attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DEVISE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 787
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formneBon"]) || array_key_exists("formneBon", $context) ? $context["formneBon"] : (function () { throw new RuntimeError('Variable "formneBon" does not exist.', 787, $this->source); })()), "monnaie", [], "any", false, false, false, 787), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">TVA(%)</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 795
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formneBon"]) || array_key_exists("formneBon", $context) ? $context["formneBon"] : (function () { throw new RuntimeError('Variable "formneBon" does not exist.', 795, $this->source); })()), "tva", [], "any", false, false, false, 795), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 805
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formneBon"]) || array_key_exists("formneBon", $context) ? $context["formneBon"] : (function () { throw new RuntimeError('Variable "formneBon" does not exist.', 805, $this->source); })()), "ptva", [], "any", false, false, false, 805), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">AVEC REMISE ?</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 813
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formneBon"]) || array_key_exists("formneBon", $context) ? $context["formneBon"] : (function () { throw new RuntimeError('Variable "formneBon" does not exist.', 813, $this->source); })()), "aarem", [], "any", false, false, false, 813), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">AVEC COLONNE RÉF?</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 823
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formneBon"]) || array_key_exists("formneBon", $context) ? $context["formneBon"] : (function () { throw new RuntimeError('Variable "formneBon" does not exist.', 823, $this->source); })()), "aaref", [], "any", false, false, false, 823), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DATE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 831
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formneBon"]) || array_key_exists("formneBon", $context) ? $context["formneBon"] : (function () { throw new RuntimeError('Variable "formneBon" does not exist.', 831, $this->source); })()), "date", [], "any", false, false, false, 831), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">INFORMATIONS SUR LE BON</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 841
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formneBon"]) || array_key_exists("formneBon", $context) ? $context["formneBon"] : (function () { throw new RuntimeError('Variable "formneBon" does not exist.', 841, $this->source); })()), "conditions", [], "any", false, false, false, 841), 'widget', ["id" => "editor7", "attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"addBon\" value=\"ENREGISTRER\" class=\"btn btn-link waves-effect text-white bg-blue\">
                            <div type=\"button\" id=\"closeneBon\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"";
        // line 852
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/loading.gif"), "html", null, true);
        yield "\" style=\"width: 50px; display:none;\" class=\"align-justify\" id=\"loadneBon\">
                        </div>
                        <br><br><br>
                        ";
        // line 855
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formneBon"]) || array_key_exists("formneBon", $context) ? $context["formneBon"] : (function () { throw new RuntimeError('Variable "formneBon" does not exist.', 855, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class=\"content\" style=\"margin-top: 80px !important;\">
        <div class=\"container-fluid\">
            <div class=\"row clearfix\">
                <div class=\"col-sm-12\">
                    <div class=\"mb-2 m-t--25 \"
                         style=\"padding:20px; background-color: #d1d3e2 !important;\">
                        <div class=\"ont tohidbut\">
                            <div class=\"row clearfix \" style=\" padding: 0.1cm;\">
                                <div class=\"col-sm-12 text-center\">
                                    <h3 class=\"font-bold col-pink\">";
        // line 872
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 872, $this->source); })()), "chantier", [], "any", false, false, false, 872), "html", null, true);
        yield "</h3>
                                    <h3 class=\"font-bold m-t--10 pri\">BON N°: ";
        // line 873
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 873, $this->source); })()), "numbon", [], "any", false, false, false, 873), "html", null, true);
        yield "</h3>
                                    ";
        // line 874
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 874, $this->source); })()), "etat", [], "any", false, false, false, 874) == "valide")) {
            // line 875
            yield "                                        <h4 class=\"font-bold col-black\">CE BON EST VALIDÉ - <a href=\"#\" id=\"devabon\">DÉVALIDER</a></h4>
                                    ";
        }
        // line 877
        yield "                                    <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chantier", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 877, $this->source); })()), "chantier", [], "any", false, false, false, 877), "id", [], "any", false, false, false, 877)]), "html", null, true);
        yield "\" class=\"btn bg-green  align-left m-b-10 text-white waves-effect \">
                                        ACCÉDER AU PROJET</a>
                                    <button type=\"button\"  class=\"btn bg-blue  align-left m-b-10 text-white waves-effect\"
                                            data-toggle=\"modal\" data-target=\"#mdModalBon\">CRÉER UN NOUVEAU BON
                                    </button>
                                    <div class=\"modal fade right\" id=\"sideModalTR\" tabindex=\"-1\" role=\"dialog\"
                                         aria-labelledby=\"myModalLabel\"
                                         aria-hidden=\"true\" style=\"z-index: 1050;\">
                                        <!-- Add class .modal-side and then add class .modal-top-right (or other classes from list above) to set a position to the modal -->
                                        <div class=\"modal-dialog modal-side modal-bottom-right\" role=\"document\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-body bien\" style=\"padding:20px 10px 20px 20px!important\">
                                                    ";
        // line 889
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 889, $this->source); })()), "etat", [], "any", false, false, false, 889) == "save")) {
            // line 890
            yield "                                                        <button type=\"button\"
                                                                class=\"btn btn-labeled bg-pink btn-sm text-white\"
                                                                data-toggle=\"modal\"
                                                                data-target=\"#modalInfo\" style=\"width: 100%;\" id=\"bouton1\">1
                                                            - MODIFIER LES
                                                            INFORMATIONS
                                                        </button>
                                                        ";
            // line 898
            yield "                                                        ";
            if ((($tmp = (isset($context["editGrou"]) || array_key_exists("editGrou", $context) ? $context["editGrou"] : (function () { throw new RuntimeError('Variable "editGrou" does not exist.', 898, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 899
                yield "                                                            <button type=\"button\" class=\"btn btn-labeled btn-danger btn-sm\"
                                                                    data-toggle=\"modal\" data-target=\"#modalGroup\"
                                                                    style=\"width: 100%;\" id=\"bouton2\">2- MODIFIER
                                                                UN GROUPE D'ARTICLES
                                                            </button><br>
                                                        ";
            } else {
                // line 905
                yield "                                                            <button type=\"button\" class=\"btn btn-labeled btn-primary btn-sm\"
                                                                    data-toggle=\"modal\" data-target=\"#modalGroup\"
                                                                    style=\"width: 100%;\" id=\"bouton2\">2 - AJOUTER
                                                                UN GROUPE D'ARTICLES
                                                            </button>
                                                        ";
            }
            // line 911
            yield "                                                        ";
            // line 912
            yield "
                                                        ";
            // line 914
            yield "                                                        <button type=\"button\" class=\"btn btn-labeled btn-primary btn-sm\"
                                                                data-toggle=\"modal\" data-target=\"#modalChoisir\"
                                                                style=\"width: 100%;\" id=\"bouton3\">3 - CHOISIR UN
                                                            BIEN / SERVICE
                                                        </button>
                                                        ";
            // line 920
            yield "
                                                        ";
            // line 922
            yield "                                                        ";
            if ((($tmp = (isset($context["editMod"]) || array_key_exists("editMod", $context) ? $context["editMod"] : (function () { throw new RuntimeError('Variable "editMod" does not exist.', 922, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 923
                yield "                                                            <button type=\"button\" class=\"btn btn-labeled btn-danger btn-sm\"
                                                                    data-toggle=\"modal\" data-target=\"#modalLigne\"
                                                                    style=\"width: 100%;\" id=\"bouton4\">4 - MODIFIER
                                                                UNE DÉSIGNATION
                                                            </button>
                                                        ";
            } else {
                // line 929
                yield "                                                            <button type=\"button\" class=\"btn btn-labeled btn-primary btn-sm\"
                                                                    data-toggle=\"modal\" data-target=\"#modalLigne\"
                                                                    style=\"width: 100%;\" id=\"bouton4\">4 - AJOUTER
                                                                UNE DÉSIGNATION
                                                            </button>
                                                        ";
            }
            // line 935
            yield "                                                        ";
            // line 936
            yield "

                                                        ";
            // line 939
            yield "                                                        <button type=\"button\" class=\"btn btn-labeled btn-primary btn-sm\"
                                                                data-toggle=\"modal\" data-target=\"#modalDeplacer\"
                                                                style=\"width: 100%;\" id=\"bouton6\">5
                                                            - DÉPLACER VERS UN AUTRE PROJET
                                                        </button>
                                                        ";
            // line 945
            yield "
                                                        ";
            // line 947
            yield "                                                        <button type=\"button\" class=\"btn btn-labeled btn-primary btn-sm\"
                                                                data-toggle=\"modal\" data-target=\"#modalDupliquer\"
                                                                style=\"width: 100%;\" id=\"bouton7\">6 - DUPLIQUER CE
                                                            BON
                                                        </button>
                                                        ";
            // line 953
            yield "                                                        <br><br>
                                                        <button type=\"button\"
                                                                class=\"btn btn-labeled bg-green text-white btn-sm\"
                                                                data-toggle=\"modal\"
                                                                data-target=\"#modalList\" style=\"width: 100%\"
                                                                id=\"bouton8\"> - MODIFIER LES LIGNES ET GROUPES
                                                        </button>
                                                        <button type=\"button\" class=\"btn btn-labeled bg-pri text-white btn-sm\"
                                                                data-toggle=\"modal\"
                                                                data-target=\"#ModalOper\" style=\"width: 100%\"
                                                                id=\"bouton9\">+ OPÉRATIONS SUR LES LIGNES
                                                        </button>

                                                        <button type=\"button\" class=\"btn btn-labeled bg-pri text-white btn-sm\"
                                                                data-toggle=\"modal\"
                                                                data-target=\"#ModalInfo\" style=\"width: 100%\"
                                                                id=\"bouton10\">+ MISE EN FORME DU BON
                                                        </button>

                                                        <button type=\"button\" class=\"btn btn-labeled bg-pri text-white btn-sm\"
                                                                style=\"width: 100%;\"
                                                                id=\"valideBon\">+ VALIDER LE BON
                                                        </button>
                                                    ";
        }
        // line 977
        yield "                                                    <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("attacher", ["charger" => "oui", "id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 977, $this->source); })()), "id", [], "any", false, false, false, 977), "type" => "bon"]), "html", null, true);
        yield "\"
                                                       class=\"btn btn-labeled bg-pri text-white btn-sm\"
                                                       style=\"width: 100%;\" id=\"bouton12\">+ OBTENIR UN FICHIER
                                                        PDF</a><br>
                                                    <a href=\"";
        // line 981
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("attacher", ["charger" => "oui", "id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 981, $this->source); })()), "id", [], "any", false, false, false, 981), "type" => "bon"]), "html", null, true);
        yield "\"
                                                       class=\"btn btn-labeled bg-pri text-white btn-sm\"
                                                       style=\"width: 100%;\" id=\"bouton13\">+ OBTENIR UN FICHIER
                                                        EXCEL</a><br>
                                                    <a href=\"";
        // line 985
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("attacher", ["charger" => "oui", "id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 985, $this->source); })()), "id", [], "any", false, false, false, 985), "type" => "bonord"]), "html", null, true);
        yield "\"
                                                       class=\"btn btn-labeled bg-pri text-white btn-sm\"
                                                       style=\"width: 100%;\" id=\"bouton14\">+ OBTENIR UN FICHIER
                                                        WORD</a><br>

                                                    <button type=\"button\" class=\"btn btn-labeled bg-pri text-white btn-sm\"
                                                            style=\"width: 100%;\"
                                                            onclick='printFrame();' id=\"bouton15\">+ IMPRIMER
                                                    </button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class=\"shadow bg-white devtohide\"
                                 style=\"width: 21cm; height:29.7cm; margin: auto; padding: 0.6cm;\">
                                <iframe id=\"frame\"
                                        src=\"";
        // line 1005
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("attacher", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["bon"]) || array_key_exists("bon", $context) ? $context["bon"] : (function () { throw new RuntimeError('Variable "bon" does not exist.', 1005, $this->source); })()), "id", [], "any", false, false, false, 1005), "type" => "imprimbon", "charger" => "oui"]), "html", null, true);
        yield "\"
                                        style=\"width: 100%; height: 100%; border: none;\"></iframe>
                            </div>
                            <br><br><br><br>
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
        return "content/showroom.html.twig";
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
        return array (  1668 => 1005,  1645 => 985,  1638 => 981,  1630 => 977,  1604 => 953,  1597 => 947,  1594 => 945,  1587 => 939,  1583 => 936,  1581 => 935,  1573 => 929,  1565 => 923,  1562 => 922,  1559 => 920,  1552 => 914,  1549 => 912,  1547 => 911,  1539 => 905,  1531 => 899,  1528 => 898,  1519 => 890,  1517 => 889,  1501 => 877,  1497 => 875,  1495 => 874,  1491 => 873,  1487 => 872,  1467 => 855,  1461 => 852,  1447 => 841,  1434 => 831,  1423 => 823,  1410 => 813,  1399 => 805,  1386 => 795,  1375 => 787,  1361 => 776,  1348 => 766,  1335 => 756,  1324 => 748,  1311 => 738,  1302 => 732,  1298 => 731,  1279 => 715,  1273 => 712,  1261 => 702,  1255 => 700,  1249 => 698,  1247 => 697,  1236 => 689,  1223 => 679,  1210 => 669,  1199 => 660,  1193 => 658,  1187 => 656,  1185 => 655,  1174 => 647,  1165 => 641,  1161 => 640,  1140 => 622,  1134 => 619,  1131 => 618,  1123 => 612,  1117 => 609,  1113 => 607,  1111 => 606,  1104 => 601,  1098 => 599,  1095 => 598,  1089 => 596,  1083 => 594,  1080 => 593,  1078 => 592,  1069 => 585,  1063 => 583,  1057 => 581,  1055 => 580,  1043 => 570,  1037 => 568,  1031 => 566,  1029 => 565,  1019 => 557,  1013 => 555,  1007 => 553,  1005 => 552,  992 => 541,  986 => 539,  980 => 537,  978 => 536,  966 => 526,  960 => 524,  957 => 523,  951 => 521,  945 => 519,  942 => 518,  940 => 517,  929 => 508,  923 => 506,  917 => 504,  915 => 503,  906 => 497,  902 => 496,  898 => 494,  890 => 488,  882 => 482,  880 => 481,  866 => 470,  859 => 467,  851 => 461,  845 => 458,  841 => 456,  839 => 455,  832 => 450,  826 => 448,  820 => 446,  818 => 445,  807 => 436,  801 => 434,  798 => 433,  792 => 431,  786 => 429,  783 => 428,  781 => 427,  775 => 426,  767 => 421,  763 => 420,  759 => 418,  751 => 412,  743 => 406,  741 => 405,  727 => 394,  721 => 391,  707 => 380,  694 => 370,  683 => 362,  670 => 352,  659 => 344,  646 => 334,  635 => 326,  621 => 315,  608 => 305,  595 => 295,  584 => 287,  575 => 281,  571 => 280,  553 => 264,  548 => 261,  542 => 260,  538 => 258,  529 => 252,  521 => 247,  518 => 246,  516 => 245,  509 => 240,  503 => 238,  497 => 236,  495 => 235,  490 => 232,  482 => 227,  478 => 225,  476 => 224,  471 => 222,  464 => 218,  457 => 214,  449 => 209,  446 => 208,  440 => 206,  438 => 205,  435 => 204,  432 => 203,  427 => 202,  424 => 200,  422 => 199,  413 => 196,  407 => 192,  401 => 191,  398 => 190,  395 => 189,  392 => 188,  389 => 187,  387 => 186,  384 => 185,  375 => 179,  367 => 174,  364 => 173,  362 => 172,  355 => 167,  349 => 165,  343 => 163,  341 => 162,  336 => 159,  328 => 154,  324 => 152,  322 => 151,  317 => 149,  310 => 145,  303 => 141,  294 => 135,  291 => 134,  285 => 132,  283 => 131,  280 => 130,  276 => 129,  273 => 128,  271 => 127,  259 => 118,  252 => 114,  246 => 112,  240 => 110,  238 => 109,  235 => 108,  230 => 107,  228 => 106,  226 => 105,  223 => 104,  219 => 102,  217 => 101,  212 => 98,  208 => 96,  206 => 95,  203 => 94,  143 => 36,  139 => 35,  135 => 34,  131 => 33,  100 => 4,  87 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}{{ title }}{% endblock %}
{% block body %}
    <script>
        function printFrame() {
            var frm = document.getElementById('frame').contentWindow;
            frm.focus();// focus on contentWindow is needed on some ie versions
            frm.print();
            return false;
        }
    </script>
    <style>
        .btn {
            text-align: left !important;
        }
        .floater {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #FF5722;
            color: #FFF;
            font-weight: 600;
            border-radius: 50px;
            text-align: center;
            box-shadow: 2px 2px 3px #999;
            z-index: 1000;
            animation: bot-to-top 2s ease-out;
        }

    </style>
    <input type=\"text\" class=\"hide\" id=\"idchantier\" value=\"{{ chantier.id }}\">
    <input type=\"text\" class=\"hide\" id=\"idbon\" value=\"{{ bon.id }}\">
    <input type=\"text\" class=\"hide\" id=\"idgroupe\" value=\"{{ idgroupe }}\">
    <input type=\"text\" class=\"hide\" id=\"idligne\" value=\"{{ idligne }}\">

    <button type=\"button\"
            class=\"btn bg-pink btn-circle-lg waves-effect waves-circle waves-float floater fonter text-white\"
            data-toggle=\"modal\" data-target=\"#sideModalTR\">
        FAIRE
    </button>

    <div class=\"modal fade right\" id=\"modalList\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-green text-white\">
                    <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">MODIFIER LES LIGNES</h4>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        <style>
                            .hider {
                                float: right;
                                margin-top: -17px;
                                visibility: hidden;
                            }

                            p {
                                margin: 2px;
                                font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
                            }

                            #borde td, th {
                                border: solid #D3D3D3;
                                border-width: 1px 1px 1px 1px;
                                padding: 5px;
                            }


                            td.bord {
                                border: 0 solid #FFFFFF !important;
                                padding: 5px;
                                text-align: right;
                                font-weight: 600;
                            }

                            td.bordz {
                                border: 0 solid #FFFFFF !important;
                                padding: 0 0 0 5px !important;
                            }

                            h3 {
                                font-weight: 500;
                                font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
                            }
                        </style>

                        <div class=\"table-responsive\">
                            <table id=\"borde\" cellspacing=\"0\" cellpadding=\"5\" style=\"width:100%;\">
                                {# ENTETE DU TABLEAU#}
                                <tr style=\"background-color:#4e73df; color: #FFFFFF !important; \">
                                    {% if bon.aaref == 'oui' %}
                                        <th style=\"text-align: center\">RÉF</th>
                                    {% endif %}
                                    <th style=\"text-align: left !important;\">
                                        DÉSIGNATION
                                    </th>
                                    {% if bon.etat == 'save' %}
                                        <th id=\"dis\" style=\"width:50px !important;\"></th>
                                    {% endif %}
                                </tr>
                                {% if editMode %}
                                    {# GROUPE ET LIGNE A GROUPE #}
                                    {% for group in listGroup %}
                                        <tr class=\"bg-gray-200 bolderrer\">
                                            {% if bon.aaref == 'oui' %}
                                                <td align=\"center\">{{ group.reference }}</td>
                                            {% endif %}
                                            <td>{{ group.groupe|raw }}</td>
                                            <td class=\"text-center\" style=\"padding: 2px\">
                                                <a href=\"{{ path('bongroupe',{'idgroupe':group.id,'id':bon.id,'idchantier':bon.getchantier.id}) }}#groupe\">
                                                    <i class=\"fa fa-edit col-green\" aria-hidden=\"true\"
                                                       title=\"Modifier\"></i>
                                                </a>
                                                <a href=\"{{ path('supgroupe',{'id':bon.id,  'idchantier':bon.getchantier.id,   'idgroupe':group.id, 'type':'bon'}) }}\"
                                                   class=\"sholigne\">
                                                    <i class=\"fa fa-trash col-pink\" aria-hidden=\"true\"
                                                       title=\"Supprimer\"></i>
                                                </a>
                                            </td>
                                        </tr>


                                        {% set st = 0 %}

                                        {% for lign in group.lignes %}
                                            <tr>
                                                {% if bon.aaref == 'oui' %}
                                                    <td style=\"text-align: center\">{{ lign.reference }}</td>
                                                {% endif %}
                                                <td>
                                                    <span class=\"pri font-bold\">{{ lign.designation|raw }}</span><br>
                                                    <table style=\"width: 100%; margin-top: 10px\" border=\"0\"
                                                           cellspacing=\"0\"
                                                           cellpadding=\"0\">
                                                        <tr>
                                                            <td class=\"text-right bordz\">Unité:</td>
                                                            <td class=\"text-left bordz font-bold text-black\"> {{ lign.unite }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class=\"text-right bordz\">Quantité:</td>
                                                            <td class=\"text-left bordz font-bold text-black\"> {{ lign.quantite|number_format(2, ',', ' ') }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class=\"text-right bordz\">Prix unitaire:</td>
                                                            <td class=\"text-left bordz font-bold text-black\"> {{ lign.pu|number_format(2, ',', ' ') }}</td>
                                                        </tr>
                                                        {% if bon.aarem == 'oui' %}
                                                            <tr>
                                                                <td class=\"text-right bordz\">Remise:</td>
                                                                <td class=\"text-left bordz font-bold text-black\"> {{ lign.remise }}
                                                                    %
                                                                </td>
                                                            </tr>
                                                        {% endif %}
                                                        <tr>
                                                            <td class=\"text-right bordz\">Montant HT:</td>
                                                            <td class=\"text-left bordz font-bold text-black\">
                                                                {% if bon.aarem == 'non' %}
                                                                    {{ (lign.pu * lign.quantite)|number_format(2, ',', ' ') }}
                                                                {% else %}
                                                                    {{ ((lign.pu * lign.quantite)*((100 - lign.remise)/100))|number_format(2, ',', ' ') }}
                                                                {% endif %}
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                {% if bon.etat == 'save' %}
                                                    <td class=\"text-center\" style=\"padding: 2px\">
                                                        <a href=\"{{ path('editlignebon',{'id':bon.id,  'idchantier':bon.getchantier.id,   'idligne':lign.id}) }}\">
                                                            <i class=\"fa fa-edit text-success\"
                                                               aria-hidden=\"true\"
                                                               title=\"Modifier\"></i>
                                                        </a>
                                                        <a href=\"{{ path('supligne',{'id':bon.id,  'idchantier':bon.getchantier.id,   'idligne':lign.id,  'type':'bon'}) }}\"
                                                           class=\"sholigne\">
                                                            <i class=\"fa fa-trash text-del\" aria-hidden=\"true\"
                                                               title=\"Supprimer\"></i>
                                                        </a></td>
                                                {% endif %}
                                            </tr>
                                            {% if bon.aarem == 'non' %}
                                                {% set st = (lign.pu * lign.quantite)+ st %}
                                            {% else %}
                                                {% set st = ((lign.pu * lign.quantite)*((100 - lign.remise)/100)) + st %}
                                            {% endif %}
                                        {% endfor %}

                                        <tr class=\"bg-gray-200\" style=\"font-weight: 600\">
                                            <td></td>
                                            <td COLSPAN=\"2\" align=\"right\">
                                                SOUS-TOTAL: {{ st|number_format(2, ',', ' ') }}</td>
                                        </tr>
                                    {% endfor %}
                                    {# FIN GROUPE ET LIGNE #}

                                    {# LIGNE SANS GROUPE  #}
                                    {% for lign in lignes %}
                                        {% if lign.groupe is null %}
                                            <tr>
                                                {% if bon.aaref == 'oui' %}
                                                    <td style=\"text-align: center\">{{ lign.reference }}</td>
                                                {% endif %}
                                                <td>
                                                    <span class=\"pri font-bold\">{{ lign.designation|raw }}</span><br>
                                                    <table style=\"width: 100%; margin-top: 10px\" border=\"0\" cellspacing=\"0\"
                                                           cellpadding=\"0\">
                                                        <tr>
                                                            <td class=\"text-right bordz\">Unité:</td>
                                                            <td class=\"text-left bordz font-bold text-black\"> {{ lign.unite }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class=\"text-right bordz\">Quantité:</td>
                                                            <td class=\"text-left bordz font-bold text-black\"> {{ lign.quantite|number_format(2, ',', ' ') }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class=\"text-right bordz\">Prix unitaire:</td>
                                                            <td class=\"text-left bordz font-bold text-black\"> {{ lign.pu|number_format(2, ',', ' ') }}</td>
                                                        </tr>
                                                        {% if bon.aarem == 'oui' %}
                                                            <tr>
                                                                <td class=\"text-right bordz\">Remise:</td>
                                                                <td class=\"text-left bordz font-bold text-black\"> {{ lign.remise }}
                                                                    %
                                                                </td>
                                                            </tr>
                                                        {% endif %}
                                                        <tr>
                                                            <td class=\"text-right bordz\">Montant HT:</td>
                                                            <td class=\"text-left bordz font-bold text-black\">
                                                                {% if bon.aarem == 'non' %}
                                                                    {{ (lign.pu * lign.quantite)|number_format(2, ',', ' ') }}
                                                                {% else %}
                                                                    {{ ((lign.pu * lign.quantite)*((100 - lign.remise)/100))|number_format(2, ',', ' ') }}
                                                                {% endif %}
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                {% if bon.etat == 'save' %}
                                                    <td class=\"text-center\" style=\"padding: 2px\">
                                                        <a href=\"{{ path('editlignebon',{'id':bon.id,  'idchantier':bon.getchantier.id,   'idligne':lign.id}) }}\">
                                                            <i class=\"fa fa-edit col-green\"
                                                               aria-hidden=\"true\"
                                                               title=\"Modifier\"></i>
                                                        </a>
                                                        <a href=\"{{ path('supligne',{'id':bon.id,  'idchantier':bon.getchantier.id,   'idligne':lign.id,  'type':'bon'}) }}\"
                                                           class=\"sholigne\">
                                                            <i class=\"fa fa-trash col-pink\" aria-hidden=\"true\"
                                                               title=\"Supprimer\"></i>
                                                        </a></td>
                                                {% endif %}
                                            </tr>
                                        {% endif %}
                                    {% endfor %}


                                {% endif %}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalInfo\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-green text-white\">
                    <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">1- MODIFIER LES INFORMATIONS</h4>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        {{ form_start(formBon, {'attr': {'id': 'form1'}}) }}
                        {{ form_row(formBon._token) }}
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">N° DU BON <span class=\"col-red\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formBon.numbon,{'attr':{'class':'form-control col-green'}}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">TYPE DE BON<span class=\"col-red\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formBon.type,{'required':'','attr':{'class':'form-control col-green'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">CONTACT</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formBon.contact,{'attr':{'class':'form-control col-green'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">OBJET OU RÉFÉRENCE<span class=\"col-red\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formBon.reference,{'id':'editor1','attr':{'class':'form-control col-green'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DEVISE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formBon.monnaie,{'attr':{'class':'form-control col-green'}}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">TVA(%)</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formBon.tva,{'attr':{'class':'form-control col-green'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">APPLIQUER LA TVA?</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formBon.ptva,{'attr':{'class':'form-control col-green'}}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">BON AVEC REMISE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formBon.aarem,{'attr':{'class':'form-control col-green'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">BON AVEC RÉF?</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formBon.aaref,{'attr':{'class':'form-control col-green'}}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DATE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formBon.date,{'attr':{'class':'form-control col-green'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">INFORMATIONS SUR LE BON</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formBon.conditions,{'id':'editor2','attr':{'class':'form-control col-green'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"updateBon\" value=\"MODIFIER\" class=\"btn btn-link waves-effect text-white bg-green\">
                            <div type=\"button\" id=\"closeBon\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\" class=\"align-justify\" id=\"loadBon\">
                        </div>
                        <br><br><br>
                        {{ form_end(formBon) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalGroup\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                {% if editGrou %}
                    <div class=\"p-5 bg-pink\">
                        <div class=\"modal-header text-white\">
                            <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">2- MODIFIER UN GROUPE</h4>
                        </div>
                    </div>
                {% else %}
                    <div class=\"modal-header bg-pri\">
                        <div class=\"p-5 text-white\">
                            <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">2- CRÉER UN GROUPE</h4>
                        </div>
                    </div>
                {% endif %}
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        {{ form_start(formGroup, {'attr': {'id': 'form2'}}) }}
                        {{ form_row(formGroup._token) }}
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">RÉFÉRENCE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line  {% if bon.aaref != 'oui' %}disabled{% endif %}\">
                                        {% if bon.aaref == 'oui' %}
                                            {% if editGrou %}
                                                {{ form_widget(formGroup.reference,{'attr':{'class':'form-control col-pink'}}) }}
                                            {% else %}
                                                {{ form_widget(formGroup.reference,{'attr':{'class':'form-control'}}) }}
                                            {% endif %}
                                        {% else %}
                                            {{ form_widget(formGroup.reference,{'attr':{'class':'form-control col-pink','placeholder':'Désactivé'}}) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">GROUPE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {% if editGrou %}
                                            {{ form_widget(formGroup.groupe,{'attr':{'class':'form-control col-pink'}}) }}
                                        {% else %}
                                            {{ form_widget(formGroup.groupe,{'attr':{'class':'form-control'}}) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            {% if editGrou %}
                                <input type=\"submit\" id=\"updateGroupBon\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect text-white bg-green\">
                                <a href=\"{{ path('editbon', {'id': bon.id, 'idchantier': bon.chantier.id}) }}\"  id=\"closeGroup\" class=\"btn btn-link waves-effect text-white bg-pink\">FERMER
                                </a>
                            {% else %}
                                <input type=\"submit\" id=\"addGroupBon\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-pri\">
                                <div type=\"button\" id=\"closeGroup\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                     data-dismiss=\"modal\">FERMER
                                </div>
                            {% endif %}
                            <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadGroup\">
                        </div>
                        {{ form_end(formGroup) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalLigne\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                {% if editMod %}
                    <div class=\"p-5 bg-green\">
                        <div class=\"modal-header text-white\">
                            <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">4- MODIFIER UNE DÉSIGNATION</h4>
                        </div>
                    </div>
                {% else %}
                    <div class=\"p-5 bg-pri\">
                        <div class=\"modal-header text-white\">
                            <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">4- AJOUTER UNE DÉSIGNATION</h4>
                        </div>
                    </div>
                {% endif %}
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        {{ form_start(forme, {'attr': {'id': 'form3'}}) }}
                        {{ form_row(forme._token) }}
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">GROUPE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {% if editMod %}
                                            {{ form_widget(forme.groupe,{'attr':{'class':'form-control col-green'}}) }}
                                        {% else %}
                                            {{ form_widget(forme.groupe,{'attr':{'class':'form-control'}}) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">RÉFÉRENCE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">


                                        {% if bon.aaref == 'oui' %}
                                            {% if editMod %}
                                                {{ form_widget(forme.reference,{'attr':{'class':'form-control col-green'}}) }}
                                            {% else %}
                                                {{ form_widget(forme.reference,{'attr':{'class':'form-control'}}) }}
                                            {% endif %}
                                        {% else %}
                                            {{ form_widget(forme.reference,{'attr':{'class':'form-control','readonly':'true','placeholder':'Désactivé'}}) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 pri bolo\">DÉSIGNATION<span
                                            class=\"col-pink\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {% if editMod %}
                                            {{ form_widget(forme.designation,{'id':'editor4','attr':{'class':'form-control col-green'}}) }}
                                        {% else %}
                                            {{ form_widget(forme.designation,{'id':'editor4','attr':{'class':'form-control'}}) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">UNITÉ<span
                                            class=\"col-pink\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {% if editMod %}
                                            {{ form_widget(forme.unite,{'attr':{'class':'form-control col-green'}}) }}
                                        {% else %}
                                            {{ form_widget(forme.unite,{'attr':{'class':'form-control'}}) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">QUANTITÉ<span
                                            class=\"col-pink\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {% if editMod %}
                                            {{ form_widget(forme.quantite,{'type':'number','attr':{'class':'form-control col-green'}}) }}
                                        {% else %}
                                            {{ form_widget(forme.quantite,{'type':'number','attr':{'class':'form-control'}}) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">PRIX UNITAIRE<span
                                            class=\"col-pink\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {% if editMod %}
                                            {{ form_widget(forme.pu,{'type':'number','attr':{'class':'form-control col-green'}}) }}
                                        {% else %}
                                            {{ form_widget(forme.pu,{'type':'number','attr':{'class':'form-control'}}) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 pri bolo\">REMISE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {% if bon.aarem== 'oui' %}
                                            {% if editMod %}
                                                {{ form_widget(forme.remise,{'required':'required','attr':{'class':'form-control col-green','type':'number'}}) }}
                                            {% else %}
                                                {{ form_widget(forme.remise,{'required':'required','attr':{'class':'form-control','type':'number'}}) }}
                                            {% endif %}
                                        {% else %}
                                            {{ form_widget(forme.remise,{'attr':{'class':'form-control','readonly':'true','placeholder':'Désactivé'}}) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            {% if editMod %}
                                <input type=\"submit\" id=\"updateLigneBon\" value=\"MODIFIER\"
                                       class=\"btn btn-link waves-effect text-white bg-green\">
                                <a href=\"{{ path('editbon', {'id': bon.id, 'idchantier': bon.chantier.id}) }}\"  id=\"closeLigne\"  class=\"btn btn-link waves-effect text-white bg-pink\">FERMER
                                </a>
                            {% else %}
                                <input type=\"submit\" id=\"addLigneBon\" value=\"ENREGISTRER\"
                                       class=\"btn btn-link waves-effect text-white bg-pri\">
                                <div type=\"button\" id=\"closeLigne\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                     data-dismiss=\"modal\">FERMER
                                </div>
                            {% endif %}

                            <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadLigne\">
                        </div>
                        {{ form_end(forme) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"modalChoisir\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"p-5 bg-pri\">
                    <div class=\"modal-header text-white\">
                        <h4 class=\"modal-title text-white\" id=\"defaultModalLabel\">3- CHOISIR UN BIEN / SERVICE</h4>
                    </div>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        {{ form_start(formez,{'attr': {'id': 'form5'}}) }}
                        {{ form_row(formez._token) }}
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">Rechercher une désignation</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formez.code,{'required':'','attr':{'class':'form-control refarticle'}}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {% if bon.aaref == 'oui' %}
                                            {{ form_widget(formez.reference,{'required':'','attr':{'class':'form-control'}}) }}
                                        {% else %}
                                            {{ form_widget(formez.reference,{'required':'','attr':{'class':'form-control','readonly':'true','placeholder':'Désactivé'}}) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">ARTICLE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formez.article,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">GROUPE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formez.groupe,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">QUANTITÉ</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formez.quantite,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">REMISE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {% if bon.aarem == 'oui' %}
                                            {{ form_widget(formez.remise,{'required':'required','type':'number','attr':{'class':'form-control'}}) }}
                                        {% else %}
                                            {{ form_widget(formez.remise,{'required':'','type':'number','attr':{'class':'form-control','readonly':'true','placeholder':'Désactivé'}}) }}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"addChoisirBon\" value=\"ENREGISTRER\"
                                   class=\"btn btn-link waves-effect text-white bg-pri\">
                            <div type=\"button\" id=\"closeChoisir\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">FERMER
                            </div>
                            <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\"
                                 class=\"align-justify\" id=\"loadChoisir\">
                        </div>
                        {{ form_end(formez) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade right\" id=\"mdModalBon\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
        <div class=\"modal-dialog modal-full-height modal-right\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-blue text-white\">
                    <h4 class=\"modal-title\" id=\"defaultModalLabel p-l-20\">CRÉER UN NOUVEAU BON</h4>
                </div>
                <div class=\"modal-body m-t-10 bien\">
                    <div class=\"body\">
                        {{ form_start(formneBon, {'attr': {'id': 'addBonForm'}}) }}
                        {{ form_row(formneBon._token) }}
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DERNIER N° DE BON DE COMMANDE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line col-pink\">
                                        {{ lastbon }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">N° DU BON <span class=\"col-red\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formneBon.numbon,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">TYPE DE BON<span class=\"col-red\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formneBon.type,{'required':'','attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">CONTACT</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formneBon.contact,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">RÉFÉRENCE OU OBJET<span class=\"col-red\">*</span></label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formneBon.reference,{'id':'editor6','attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DEVISE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formneBon.monnaie,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">TVA(%)</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formneBon.tva,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">APPLIQUR LA TVA?</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formneBon.ptva,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">AVEC REMISE ?</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formneBon.aarem,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">AVEC COLONNE RÉF?</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formneBon.aaref,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <label class=\"form-label m-b--30 col-blue bolo\">DATE</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formneBon.date,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row clearfix m-b-10\">
                            <div class=\"col-sm-12\">
                                <label class=\"form-label m-b--30 col-blue bolo\">INFORMATIONS SUR LE BON</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(formneBon.conditions,{'id':'editor7','attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <input type=\"submit\" id=\"addBon\" value=\"ENREGISTRER\" class=\"btn btn-link waves-effect text-white bg-blue\">
                            <div type=\"button\" id=\"closeneBon\" class=\"btn btn-link waves-effect text-white bg-pink\"
                                 data-dismiss=\"modal\">
                                FERMER
                            </div>
                            <img src=\"{{ asset('img/loading.gif') }}\" style=\"width: 50px; display:none;\" class=\"align-justify\" id=\"loadneBon\">
                        </div>
                        <br><br><br>
                        {{ form_end(formneBon) }}
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class=\"content\" style=\"margin-top: 80px !important;\">
        <div class=\"container-fluid\">
            <div class=\"row clearfix\">
                <div class=\"col-sm-12\">
                    <div class=\"mb-2 m-t--25 \"
                         style=\"padding:20px; background-color: #d1d3e2 !important;\">
                        <div class=\"ont tohidbut\">
                            <div class=\"row clearfix \" style=\" padding: 0.1cm;\">
                                <div class=\"col-sm-12 text-center\">
                                    <h3 class=\"font-bold col-pink\">{{ chantier.chantier }}</h3>
                                    <h3 class=\"font-bold m-t--10 pri\">BON N°: {{ bon.numbon }}</h3>
                                    {% if bon.etat == \"valide\" %}
                                        <h4 class=\"font-bold col-black\">CE BON EST VALIDÉ - <a href=\"#\" id=\"devabon\">DÉVALIDER</a></h4>
                                    {% endif %}
                                    <a href=\"{{ path('chantier', {'id': bon.chantier.id}) }}\" class=\"btn bg-green  align-left m-b-10 text-white waves-effect \">
                                        ACCÉDER AU PROJET</a>
                                    <button type=\"button\"  class=\"btn bg-blue  align-left m-b-10 text-white waves-effect\"
                                            data-toggle=\"modal\" data-target=\"#mdModalBon\">CRÉER UN NOUVEAU BON
                                    </button>
                                    <div class=\"modal fade right\" id=\"sideModalTR\" tabindex=\"-1\" role=\"dialog\"
                                         aria-labelledby=\"myModalLabel\"
                                         aria-hidden=\"true\" style=\"z-index: 1050;\">
                                        <!-- Add class .modal-side and then add class .modal-top-right (or other classes from list above) to set a position to the modal -->
                                        <div class=\"modal-dialog modal-side modal-bottom-right\" role=\"document\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-body bien\" style=\"padding:20px 10px 20px 20px!important\">
                                                    {% if bon.etat == \"save\" %}
                                                        <button type=\"button\"
                                                                class=\"btn btn-labeled bg-pink btn-sm text-white\"
                                                                data-toggle=\"modal\"
                                                                data-target=\"#modalInfo\" style=\"width: 100%;\" id=\"bouton1\">1
                                                            - MODIFIER LES
                                                            INFORMATIONS
                                                        </button>
                                                        {# AJOUTER UN GROUPE #}
                                                        {% if editGrou %}
                                                            <button type=\"button\" class=\"btn btn-labeled btn-danger btn-sm\"
                                                                    data-toggle=\"modal\" data-target=\"#modalGroup\"
                                                                    style=\"width: 100%;\" id=\"bouton2\">2- MODIFIER
                                                                UN GROUPE D'ARTICLES
                                                            </button><br>
                                                        {% else %}
                                                            <button type=\"button\" class=\"btn btn-labeled btn-primary btn-sm\"
                                                                    data-toggle=\"modal\" data-target=\"#modalGroup\"
                                                                    style=\"width: 100%;\" id=\"bouton2\">2 - AJOUTER
                                                                UN GROUPE D'ARTICLES
                                                            </button>
                                                        {% endif %}
                                                        {# FIN  AJOUTER UN GROUPE #}

                                                        {# CHOISIR #}
                                                        <button type=\"button\" class=\"btn btn-labeled btn-primary btn-sm\"
                                                                data-toggle=\"modal\" data-target=\"#modalChoisir\"
                                                                style=\"width: 100%;\" id=\"bouton3\">3 - CHOISIR UN
                                                            BIEN / SERVICE
                                                        </button>
                                                        {# FIN CHOISIR #}

                                                        {# AJOUTER UNE DESIGNATION #}
                                                        {% if editMod %}
                                                            <button type=\"button\" class=\"btn btn-labeled btn-danger btn-sm\"
                                                                    data-toggle=\"modal\" data-target=\"#modalLigne\"
                                                                    style=\"width: 100%;\" id=\"bouton4\">4 - MODIFIER
                                                                UNE DÉSIGNATION
                                                            </button>
                                                        {% else %}
                                                            <button type=\"button\" class=\"btn btn-labeled btn-primary btn-sm\"
                                                                    data-toggle=\"modal\" data-target=\"#modalLigne\"
                                                                    style=\"width: 100%;\" id=\"bouton4\">4 - AJOUTER
                                                                UNE DÉSIGNATION
                                                            </button>
                                                        {% endif %}
                                                        {# FIN DESIGNATION #}


                                                        {# DEPLACER #}
                                                        <button type=\"button\" class=\"btn btn-labeled btn-primary btn-sm\"
                                                                data-toggle=\"modal\" data-target=\"#modalDeplacer\"
                                                                style=\"width: 100%;\" id=\"bouton6\">5
                                                            - DÉPLACER VERS UN AUTRE PROJET
                                                        </button>
                                                        {# FIN DEPLACER #}

                                                        {# DUPLIQUER #}
                                                        <button type=\"button\" class=\"btn btn-labeled btn-primary btn-sm\"
                                                                data-toggle=\"modal\" data-target=\"#modalDupliquer\"
                                                                style=\"width: 100%;\" id=\"bouton7\">6 - DUPLIQUER CE
                                                            BON
                                                        </button>
                                                        {# FIN DUPLIQUER #}
                                                        <br><br>
                                                        <button type=\"button\"
                                                                class=\"btn btn-labeled bg-green text-white btn-sm\"
                                                                data-toggle=\"modal\"
                                                                data-target=\"#modalList\" style=\"width: 100%\"
                                                                id=\"bouton8\"> - MODIFIER LES LIGNES ET GROUPES
                                                        </button>
                                                        <button type=\"button\" class=\"btn btn-labeled bg-pri text-white btn-sm\"
                                                                data-toggle=\"modal\"
                                                                data-target=\"#ModalOper\" style=\"width: 100%\"
                                                                id=\"bouton9\">+ OPÉRATIONS SUR LES LIGNES
                                                        </button>

                                                        <button type=\"button\" class=\"btn btn-labeled bg-pri text-white btn-sm\"
                                                                data-toggle=\"modal\"
                                                                data-target=\"#ModalInfo\" style=\"width: 100%\"
                                                                id=\"bouton10\">+ MISE EN FORME DU BON
                                                        </button>

                                                        <button type=\"button\" class=\"btn btn-labeled bg-pri text-white btn-sm\"
                                                                style=\"width: 100%;\"
                                                                id=\"valideBon\">+ VALIDER LE BON
                                                        </button>
                                                    {% endif %}
                                                    <a href=\"{{ path('attacher', {'charger': 'oui', 'id': bon.id, 'type': 'bon'}) }}\"
                                                       class=\"btn btn-labeled bg-pri text-white btn-sm\"
                                                       style=\"width: 100%;\" id=\"bouton12\">+ OBTENIR UN FICHIER
                                                        PDF</a><br>
                                                    <a href=\"{{ path('attacher', {'charger': 'oui', 'id': bon.id, 'type': 'bon'}) }}\"
                                                       class=\"btn btn-labeled bg-pri text-white btn-sm\"
                                                       style=\"width: 100%;\" id=\"bouton13\">+ OBTENIR UN FICHIER
                                                        EXCEL</a><br>
                                                    <a href=\"{{ path('attacher', {'charger': 'oui', 'id': bon.id, 'type': 'bonord'}) }}\"
                                                       class=\"btn btn-labeled bg-pri text-white btn-sm\"
                                                       style=\"width: 100%;\" id=\"bouton14\">+ OBTENIR UN FICHIER
                                                        WORD</a><br>

                                                    <button type=\"button\" class=\"btn btn-labeled bg-pri text-white btn-sm\"
                                                            style=\"width: 100%;\"
                                                            onclick='printFrame();' id=\"bouton15\">+ IMPRIMER
                                                    </button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class=\"shadow bg-white devtohide\"
                                 style=\"width: 21cm; height:29.7cm; margin: auto; padding: 0.6cm;\">
                                <iframe id=\"frame\"
                                        src=\"{{ path('attacher',{'id':bon.id, 'type':'imprimbon', 'charger':'oui'}) }}\"
                                        style=\"width: 100%; height: 100%; border: none;\"></iframe>
                            </div>
                            <br><br><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{% endblock %}
", "content/showroom.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\showroom.html.twig");
    }
}
