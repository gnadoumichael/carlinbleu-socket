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

/* content/partage.html.twig */
class __TwigTemplate_342b11f9ec2dd44d6d2b1192104a85b8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/partage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/partage.html.twig"));

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
        yield "    <style>
        table td {
            max-width: 150px !important;
            white-space: nowrap;
            text-overflow: ellipsis;
            word-break: break-all;
            overflow: hidden;
            padding: 2px !important;
        }
    </style>
    <section class=\"content\" style=\"margin-top: 80px !important;\">
        <div class=\"container-fluid\">
            <div class=\"row clearfix\" style=\"margin-bottom: 20px\">
                <div class=\"col-sm-12 text-center\">
                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["met"]) || array_key_exists("met", $context) ? $context["met"] : (function () { throw new RuntimeError('Variable "met" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["me"]) {
            // line 19
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["me"], "id", [], "any", false, false, false, 19) == 9)) {
                // line 20
                yield "                            <br>
                        ";
            }
            // line 22
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partage", ["idpays" => 1, "metier" => CoreExtension::getAttribute($this->env, $this->source, $context["me"], "id", [], "any", false, false, false, 22)]), "html", null, true);
            yield "\" class=\"btn bg-blue
                         text-center waves-effect\">";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["me"], "nom", [], "any", false, false, false, 23), "html", null, true);
            yield "</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['me'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "                    <br>
                </div>
            </div>
            <div class=\"row clearfix\" style=\"margin-top: 30px\">
                <div class=\"col-sm-8\">
                    <div class=\"card shadow \">
                        <div class=\"card-body\" style=\"padding: 20px\">
                    <div class=\"table-responsive\" style=\"padding-bottom: 30px !important;\">
                        <h4 class=\"col-pink bolo700\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["metier"]) || array_key_exists("metier", $context) ? $context["metier"] : (function () { throw new RuntimeError('Variable "metier" does not exist.', 33, $this->source); })()), "nom", [], "any", false, false, false, 33)), "html", null, true);
        yield "</h4>
                        <table class=\"table-striped table-bordered display nowrap\" style=\"width: 100%\"
                               id=\"dataPARTAGER\">
                            <thead>
                            <tr style=\"color: dimgray !important;\">
                                <th style=\"width: 10px !important;\"></th>
                                <th class=\"text-left col-blue\" style=\"font-size:16px\">ARTICLES</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($context["partage"]);
        foreach ($context['_seq'] as $context["_key"] => $context["partage"]) {
            // line 44
            yield "                                ";
            $context["p"] = 0;
            // line 45
            yield "                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partage"], "metier", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["metier"]) || array_key_exists("metier", $context) ? $context["metier"] : (function () { throw new RuntimeError('Variable "metier" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45))) {
                // line 46
                yield "                                    <tr>
                                        <td class=\"text-center\"><input type=\"checkbox\" data-toggle=\"toggle\"
                                                                       class=\"PARTA\"
                                                                       value=\"";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partage"], "id", [], "any", false, false, false, 49), "html", null, true);
                yield "\"></td>
                                        <td class=\"pri\">
                                            <img src=\"";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("articles/"), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partage"], "article", [], "any", false, false, false, 51), "link1", [], "any", false, false, false, 51), "html", null, true);
                yield "\"
                                                 style=\"float: left; width: 100px; height: 100px;margin-right: 10px\">
                                            <a href=\"#\" data-toggle=\"modal\"
                                               data-target=\"#article";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partage"], "article", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54), "html", null, true);
                yield "\"
                                               title=\"";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partage"], "article", [], "any", false, false, false, 55), "designation", [], "any", false, false, false, 55)), "html", null, true);
                yield "\"
                                               style=\"font-size: 12px; font-weight: bold\">
                                                ";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partage"], "article", [], "any", false, false, false, 57), "designation", [], "any", false, false, false, 57)), "html", null, true);
                yield "</a>
                                            <br>
                                            <span class=\"col-pink\" style=\"font-size: 15px; font-weight: bold\">
                                                ";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partage"], "article", [], "any", false, false, false, 60), "pu", [], "any", false, false, false, 60), 2, ",", " "), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partage"], "article", [], "any", false, false, false, 60), "monnaies", [], "any", false, false, false, 60), "code", [], "any", false, false, false, 60), "html", null, true);
                yield "/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partage"], "article", [], "any", false, false, false, 60), "unite", [], "any", false, false, false, 60), "html", null, true);
                yield "
                                                </span><br>
                                            Par: ";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partage"], "user", [], "any", false, false, false, 62), "societe", [], "any", false, false, false, 62)), "html", null, true);
                yield " <br>
                                            <span class=\"col-grey\">Ajouté le: ";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["partage"], "date", [], "any", false, false, false, 63), "d/m/y H:m"), "html", null, true);
                yield "</span><br>
                                            ";
                // line 64
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "user", [], "any", false, false, false, 64)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 65
                    yield "                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 65, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                        // line 66
                        yield "                                                    ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "article", [], "any", false, false, false, 66) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "article", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partage"], "article", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66)))) {
                            // line 67
                            yield "                                                        <a href=\"#\" class=\"btn btn-sm bg-pink\"
                                                           style=\"font-size: 12px\"> <i
                                                                    class=\"fa fa-check text-white\"
                                                                    aria-hidden=\"true\"
                                                                    title=\"Article présent\"></i> ARTICLE DÉJÀ
                                                            DANS
                                                            VOTRE LISTE</a>
                                                        ";
                            // line 74
                            $context["p"] = 1;
                            // line 75
                            yield "                                                    ";
                        }
                        // line 76
                        yield "                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 77
                    yield "
                                                ";
                    // line 78
                    if (((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 78, $this->source); })()) == 0)) {
                        // line 79
                        yield "                                                    ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", [], "any", false, false, false, 79) == CoreExtension::getAttribute($this->env, $this->source, $context["partage"], "user", [], "any", false, false, false, 79))) {
                            // line 80
                            yield "                                                        <a href=\"#\" class=\"btn btn-sm bg-pink\"
                                                           style=\"font-size: 11px\"> <i
                                                                    class=\"fa fa-check text-white\"
                                                                    aria-hidden=\"true\"
                                                                    title=\"Article présent\"></i> ARTICLE DÉJÀ
                                                            DANS
                                                            VOTRE STOCK</a>
                                                    ";
                        } else {
                            // line 88
                            yield "                                                        <a href=\"#\" onclick=\"addparticle(";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partage"], "article", [], "any", false, false, false, 88), "id", [], "any", false, false, false, 88), "html", null, true);
                            yield ");\"
                                                           class=\"btn btn-sm bg-blue\"
                                                           style=\"font-size: 11px\" id=\"particle\">AJOUTER
                                                            CET
                                                            ARTICLE</a>
                                                    ";
                        }
                        // line 94
                        yield "                                                ";
                    }
                    // line 95
                    yield "                                            ";
                }
                // line 96
                yield "                                        </td>
                                    </tr>
                                ";
            }
            // line 99
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['partage'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        yield "                            </tbody>
                        </table>


                        ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($context["partage"]);
        foreach ($context['_seq'] as $context["_key"] => $context["partage"]) {
            // line 105
            yield "                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partage"], "metier", [], "any", false, false, false, 105), "id", [], "any", false, false, false, 105) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["metier"]) || array_key_exists("metier", $context) ? $context["metier"] : (function () { throw new RuntimeError('Variable "metier" does not exist.', 105, $this->source); })()), "id", [], "any", false, false, false, 105))) {
                // line 106
                yield "                                <!-- Modal -->
                                <div class=\"modal fade\" id=\"article";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partage"], "article", [], "any", false, false, false, 107), "id", [], "any", false, false, false, 107), "html", null, true);
                yield "\" tabindex=\"-1\"
                                     role=\"dialog\"
                                     aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <h5 class=\"modal-title\"
                                                    id=\"exampleModalLongTitle\">Description de l'article</h5>
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"
                                                        aria-label=\"Close\">
                                                    <span aria-hidden=\"true\">&times;</span>
                                                </button>
                                            </div>
                                            <div class=\"modal-body\">
                                                <img src=\"";
                // line 121
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partage"], "article", [], "any", false, false, false, 121), "info1", [], "any", false, false, false, 121) == "oui")) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("articles/"), "html", null, true);
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partage"], "article", [], "any", false, false, false, 121), "link1", [], "any", false, false, false, 121), "html", null, true);
                }
                yield "\"
                                                     style=\"width:100%;border: 1px solid #000\">
                                                <div class=\"card shadow mb-4\" style=\"height:auto; padding: 15px\">
                                                    <h4>";
                // line 124
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partage"], "article", [], "any", false, false, false, 124), "designation", [], "any", false, false, false, 124), "html", null, true);
                yield "</h4>
                                                    <h5 class=\"text-danger\">";
                // line 125
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partage"], "article", [], "any", false, false, false, 125), "pu", [], "any", false, false, false, 125), 2, ",", " "), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partage"], "article", [], "any", false, false, false, 125), "monnaies", [], "any", false, false, false, 125), "code", [], "any", false, false, false, 125), "html", null, true);
                yield "</h5>
                                                    <table class=\"table-striped border\" style=\"font-size: 1rem\">
                                                        ";
                // line 127
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partage"], "article", [], "any", false, false, false, 127), "code", [], "any", false, false, false, 127) != null)) {
                    // line 128
                    yield "                                                            <tr>
                                                                <td>Code Article</td>
                                                                <td class=\"text-pri\">";
                    // line 130
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partage"], "article", [], "any", false, false, false, 130), "code", [], "any", false, false, false, 130), "html", null, true);
                    yield "</td>
                                                            </tr>
                                                        ";
                }
                // line 133
                yield "                                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partage"], "article", [], "any", false, false, false, 133), "marque", [], "any", false, false, false, 133) != null)) {
                    // line 134
                    yield "                                                            <tr>
                                                                <td>Marque</td>
                                                                <td class=\"text-pri\">";
                    // line 136
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partage"], "article", [], "any", false, false, false, 136), "marque", [], "any", false, false, false, 136), "html", null, true);
                    yield "</td>
                                                            </tr>
                                                        ";
                }
                // line 139
                yield "                                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partage"], "article", [], "any", false, false, false, 139), "reference", [], "any", false, false, false, 139) != null)) {
                    // line 140
                    yield "                                                            <tr>
                                                                <td>Référence</td>
                                                                <td class=\"text-pri\">";
                    // line 142
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partage"], "article", [], "any", false, false, false, 142), "reference", [], "any", false, false, false, 142), "html", null, true);
                    yield "</td>
                                                            </tr>
                                                        ";
                }
                // line 145
                yield "                                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partage"], "article", [], "any", false, false, false, 145), "unite", [], "any", false, false, false, 145) != null)) {
                    // line 146
                    yield "                                                            <tr>
                                                                <td>Vendu en</td>
                                                                <td class=\"text-pri\">";
                    // line 148
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partage"], "article", [], "any", false, false, false, 148), "unite", [], "any", false, false, false, 148), "html", null, true);
                    yield "</td>
                                                            </tr>
                                                        ";
                }
                // line 151
                yield "                                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partage"], "article", [], "any", false, false, false, 151), "description", [], "any", false, false, false, 151) != null)) {
                    // line 152
                    yield "                                                            <tr>
                                                                <td>Description</td>
                                                                <td class=\"text-pri\">";
                    // line 154
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partage"], "article", [], "any", false, false, false, 154), "description", [], "any", false, false, false, 154), "html", null, true);
                    yield "</td>
                                                            </tr>
                                                        ";
                }
                // line 157
                yield "
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
            }
            // line 165
            yield "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['partage'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        yield "                    </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    <div class=\"card shadow \">
                        <div class=\"card-body\" style=\"padding: 20px\">

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
        return "content/partage.html.twig";
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
        return array (  430 => 166,  424 => 165,  414 => 157,  408 => 154,  404 => 152,  401 => 151,  395 => 148,  391 => 146,  388 => 145,  382 => 142,  378 => 140,  375 => 139,  369 => 136,  365 => 134,  362 => 133,  356 => 130,  352 => 128,  350 => 127,  343 => 125,  339 => 124,  330 => 121,  313 => 107,  310 => 106,  307 => 105,  303 => 104,  297 => 100,  291 => 99,  286 => 96,  283 => 95,  280 => 94,  270 => 88,  260 => 80,  257 => 79,  255 => 78,  252 => 77,  246 => 76,  243 => 75,  241 => 74,  232 => 67,  229 => 66,  224 => 65,  222 => 64,  218 => 63,  214 => 62,  205 => 60,  199 => 57,  194 => 55,  190 => 54,  183 => 51,  178 => 49,  173 => 46,  170 => 45,  167 => 44,  163 => 43,  150 => 33,  140 => 25,  132 => 23,  127 => 22,  123 => 20,  120 => 19,  116 => 18,  100 => 4,  87 => 3,  64 => 2,  41 => 1,);
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
    <section class=\"content\" style=\"margin-top: 80px !important;\">
        <div class=\"container-fluid\">
            <div class=\"row clearfix\" style=\"margin-bottom: 20px\">
                <div class=\"col-sm-12 text-center\">
                    {% for me in met %}
                        {% if me.id == 9 %}
                            <br>
                        {% endif %}
                        <a href=\"{{ path('partage', {'idpays': 1, 'metier': me.id}) }}\" class=\"btn bg-blue
                         text-center waves-effect\">{{ me.nom }}</a>
                    {% endfor %}
                    <br>
                </div>
            </div>
            <div class=\"row clearfix\" style=\"margin-top: 30px\">
                <div class=\"col-sm-8\">
                    <div class=\"card shadow \">
                        <div class=\"card-body\" style=\"padding: 20px\">
                    <div class=\"table-responsive\" style=\"padding-bottom: 30px !important;\">
                        <h4 class=\"col-pink bolo700\">{{ metier.nom|upper }}</h4>
                        <table class=\"table-striped table-bordered display nowrap\" style=\"width: 100%\"
                               id=\"dataPARTAGER\">
                            <thead>
                            <tr style=\"color: dimgray !important;\">
                                <th style=\"width: 10px !important;\"></th>
                                <th class=\"text-left col-blue\" style=\"font-size:16px\">ARTICLES</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for partage in partage %}
                                {% set p = 0 %}
                                {% if partage.metier.id == metier.id %}
                                    <tr>
                                        <td class=\"text-center\"><input type=\"checkbox\" data-toggle=\"toggle\"
                                                                       class=\"PARTA\"
                                                                       value=\"{{ partage.id }}\"></td>
                                        <td class=\"pri\">
                                            <img src=\"{{ asset('articles/') }}{{ partage.article.link1 }}\"
                                                 style=\"float: left; width: 100px; height: 100px;margin-right: 10px\">
                                            <a href=\"#\" data-toggle=\"modal\"
                                               data-target=\"#article{{ partage.article.id }}\"
                                               title=\"{{ partage.article.designation|upper }}\"
                                               style=\"font-size: 12px; font-weight: bold\">
                                                {{ partage.article.designation|upper }}</a>
                                            <br>
                                            <span class=\"col-pink\" style=\"font-size: 15px; font-weight: bold\">
                                                {{ partage.article.pu|number_format(2, ',', ' ') }} {{ partage.article.monnaies.code }}/{{ partage.article.unite }}
                                                </span><br>
                                            Par: {{ partage.user.societe|upper }} <br>
                                            <span class=\"col-grey\">Ajouté le: {{ partage.date|date('d/m/y H:m') }}</span><br>
                                            {% if app.user %}
                                                {% for article in articles %}
                                                    {% if article.article and article.article.id == partage.article.id %}
                                                        <a href=\"#\" class=\"btn btn-sm bg-pink\"
                                                           style=\"font-size: 12px\"> <i
                                                                    class=\"fa fa-check text-white\"
                                                                    aria-hidden=\"true\"
                                                                    title=\"Article présent\"></i> ARTICLE DÉJÀ
                                                            DANS
                                                            VOTRE LISTE</a>
                                                        {% set p = 1 %}
                                                    {% endif %}
                                                {% endfor %}

                                                {% if p == 0 %}
                                                    {% if app.user == partage.user %}
                                                        <a href=\"#\" class=\"btn btn-sm bg-pink\"
                                                           style=\"font-size: 11px\"> <i
                                                                    class=\"fa fa-check text-white\"
                                                                    aria-hidden=\"true\"
                                                                    title=\"Article présent\"></i> ARTICLE DÉJÀ
                                                            DANS
                                                            VOTRE STOCK</a>
                                                    {% else %}
                                                        <a href=\"#\" onclick=\"addparticle({{ partage.article.id }});\"
                                                           class=\"btn btn-sm bg-blue\"
                                                           style=\"font-size: 11px\" id=\"particle\">AJOUTER
                                                            CET
                                                            ARTICLE</a>
                                                    {% endif %}
                                                {% endif %}
                                            {% endif %}
                                        </td>
                                    </tr>
                                {% endif %}
                            {% endfor %}
                            </tbody>
                        </table>


                        {% for partage in partage %}
                            {% if partage.metier.id == metier.id %}
                                <!-- Modal -->
                                <div class=\"modal fade\" id=\"article{{ partage.article.id }}\" tabindex=\"-1\"
                                     role=\"dialog\"
                                     aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <h5 class=\"modal-title\"
                                                    id=\"exampleModalLongTitle\">Description de l'article</h5>
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"
                                                        aria-label=\"Close\">
                                                    <span aria-hidden=\"true\">&times;</span>
                                                </button>
                                            </div>
                                            <div class=\"modal-body\">
                                                <img src=\"{% if partage.article.info1 == 'oui' %}{{ asset('articles/') }}{{ partage.article.link1 }}{% endif %}\"
                                                     style=\"width:100%;border: 1px solid #000\">
                                                <div class=\"card shadow mb-4\" style=\"height:auto; padding: 15px\">
                                                    <h4>{{ partage.article.designation }}</h4>
                                                    <h5 class=\"text-danger\">{{ partage.article.pu|number_format(2, ',', ' ') }} {{ partage.article.monnaies.code }}</h5>
                                                    <table class=\"table-striped border\" style=\"font-size: 1rem\">
                                                        {% if partage.article.code != null %}
                                                            <tr>
                                                                <td>Code Article</td>
                                                                <td class=\"text-pri\">{{ partage.article.code }}</td>
                                                            </tr>
                                                        {% endif %}
                                                        {% if partage.article.marque != null %}
                                                            <tr>
                                                                <td>Marque</td>
                                                                <td class=\"text-pri\">{{ partage.article.marque }}</td>
                                                            </tr>
                                                        {% endif %}
                                                        {% if partage.article.reference != null %}
                                                            <tr>
                                                                <td>Référence</td>
                                                                <td class=\"text-pri\">{{ partage.article.reference }}</td>
                                                            </tr>
                                                        {% endif %}
                                                        {% if partage.article.unite != null %}
                                                            <tr>
                                                                <td>Vendu en</td>
                                                                <td class=\"text-pri\">{{ partage.article.unite }}</td>
                                                            </tr>
                                                        {% endif %}
                                                        {% if partage.article.description != null %}
                                                            <tr>
                                                                <td>Description</td>
                                                                <td class=\"text-pri\">{{ partage.article.description }}</td>
                                                            </tr>
                                                        {% endif %}

                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {% endif %}
                        {% endfor %}
                    </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    <div class=\"card shadow \">
                        <div class=\"card-body\" style=\"padding: 20px\">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}

", "content/partage.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\partage.html.twig");
    }
}
