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

/* content/provider.html.twig */
class __TwigTemplate_9440228e781d5c6c5049fc0ae491b0f0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/provider.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/provider.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 4, $this->source); })()), "html", null, true);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield "
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-sm-4\">
                <div class=\"card shadow mb-4 bg-white\" style=\" padding:10px\">
                    <table class=\"table-bordered\" style=\"width: 100%\" id=\"dataPARTAGE3\">
                        <thead>
                        <tr style=\"color: dimgray !important;\">
                            <th>SHOWROOMS</th>
                            <th>LETTRE</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 23
            yield "                            <tr>
                                <td class=\"text-pri\">
                                    ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "galeries", [], "any", false, false, false, 25));
            foreach ($context['_seq'] as $context["_key"] => $context["gale"]) {
                // line 26
                yield "                                        ";
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["gale"], "position", [], "any", false, false, false, 26) == 0) && (CoreExtension::getAttribute($this->env, $this->source, $context["gale"], "info", [], "any", false, false, false, 26) == "oui"))) {
                    // line 27
                    yield "                                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("provider", ["iduser" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 27)]), "html", null, true);
                    yield "\"><img
                                                        src=\"";
                    // line 28
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("gallery/"), "html", null, true);
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["gale"], "link", [], "any", false, false, false, 28), "html", null, true);
                    yield "\"
                                                        style=\"float: left; margin-right: 5px; width: 80px; height: 80px\"
                                                        class=\"shadow\"></a>
                                        ";
                }
                // line 32
                yield "                                        ";
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["gale"], "position", [], "any", false, false, false, 32) == 0) && (CoreExtension::getAttribute($this->env, $this->source, $context["gale"], "info", [], "any", false, false, false, 32) == "non"))) {
                    // line 33
                    yield "                                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("gallery/not.png"), "html", null, true);
                    yield "\"
                                                 style=\"float: left; margin-right: 5px; width: 80px; height: 80px\"
                                                 class=\"shadow\">
                                        ";
                }
                // line 37
                yield "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['gale'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            yield "                                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("provider", ["iduser" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            yield "\"><b class=\"text-pri\"
                                                                                             style=\"font-size: large\">";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "societe", [], "any", false, false, false, 39)), "html", null, true);
            yield "</b></a><br>
                                    <b class=\"text-danger\" style=\"font-size: small\">";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "contact", [], "any", false, false, false, 40), "html", null, true);
            yield "</b><br>
                                    ";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "adresse", [], "any", false, false, false, 41), "html", null, true);
            yield "</p>
                                </td>

                                <td>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "societe", [], "any", false, false, false, 44))), "html", null, true);
            yield "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "                        </tbody>
                    </table>
                </div>
                ";
        // line 50
        if ((($tmp = (isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 50, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 51, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 52
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "vente", [], "any", false, false, false, 52) == "oui")) {
                    // line 53
                    yield "                            <!-- Modal -->
                            <div class=\"modal fade\" id=\"article";
                    // line 54
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 54), "html", null, true);
                    yield "\" tabindex=\"-1\" role=\"dialog\"
                                 aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                                <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Description de
                                                l'article</h5>
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"
                                                    aria-label=\"Close\">
                                                <span aria-hidden=\"true\">&times;</span>
                                            </button>
                                        </div>
                                        <div class=\"modal-body\">
                                            <img src=\"";
                    // line 67
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "info1", [], "any", false, false, false, 67) == "oui")) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("articles/"), "html", null, true);
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "link1", [], "any", false, false, false, 67), "html", null, true);
                    }
                    yield "\"
                                                 style=\"width:100%;border: 1px solid #000\">
                                            <div class=\"card shadow mb-4\" style=\"height:auto; padding: 15px\">
                                                <h5>";
                    // line 70
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "designation", [], "any", false, false, false, 70), "html", null, true);
                    yield "</h5>
                                                <h4 class=\"text-danger\">";
                    // line 71
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "pu", [], "any", false, false, false, 71), 2, ",", " "), "html", null, true);
                    yield "
                                                    ";
                    // line 72
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "monnaies", [], "any", false, false, false, 72), "code", [], "any", false, false, false, 72), "html", null, true);
                    yield "</h4>
                                                <table class=\"table-striped border\" style=\"font-size: 1rem\">
                                                    ";
                    // line 74
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "code", [], "any", false, false, false, 74) != null)) {
                        // line 75
                        yield "                                                        <tr>
                                                            <td>Code Article</td>
                                                            <td class=\"text-pri\">";
                        // line 77
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "code", [], "any", false, false, false, 77), "html", null, true);
                        yield "</td>
                                                        </tr>
                                                    ";
                    }
                    // line 80
                    yield "                                                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "marque", [], "any", false, false, false, 80) != null)) {
                        // line 81
                        yield "                                                        <tr>
                                                            <td>Marque</td>
                                                            <td class=\"text-pri\">";
                        // line 83
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "marque", [], "any", false, false, false, 83), "html", null, true);
                        yield "</td>
                                                        </tr>
                                                    ";
                    }
                    // line 86
                    yield "                                                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "reference", [], "any", false, false, false, 86) != null)) {
                        // line 87
                        yield "                                                        <tr>
                                                            <td>Référence</td>
                                                            <td class=\"text-pri\">";
                        // line 89
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "reference", [], "any", false, false, false, 89), "html", null, true);
                        yield "</td>
                                                        </tr>
                                                    ";
                    }
                    // line 92
                    yield "                                                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "unite", [], "any", false, false, false, 92) != null)) {
                        // line 93
                        yield "                                                        <tr>
                                                            <td>Vendu en</td>
                                                            <td class=\"text-pri\">";
                        // line 95
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "unite", [], "any", false, false, false, 95), "html", null, true);
                        yield "</td>
                                                        </tr>
                                                    ";
                    }
                    // line 98
                    yield "                                                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 98) != null)) {
                        // line 99
                        yield "                                                        <tr>
                                                            <td>Description</td>
                                                            <td class=\"text-pri\">";
                        // line 101
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 101), "html", null, true);
                        yield "</td>
                                                        </tr>
                                                    ";
                    }
                    // line 104
                    yield "                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
                }
                // line 111
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            yield "                ";
        }
        // line 113
        yield "            </div>
            <div class=\"col-sm-8\">
                ";
        // line 115
        if ((($tmp = (isset($context["editmode"]) || array_key_exists("editmode", $context) ? $context["editmode"] : (function () { throw new RuntimeError('Variable "editmode" does not exist.', 115, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 116
            yield "                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"card shadow mb-4 bg-white\" style=\" padding:15px\">
                                <div class=\"card-body\">
                                    <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\" style=\"float: left; width: 40%\">
                                        <ol class=\"carousel-indicators\">
                                            <li class=\"active\" data-slide-to=\"0\"
                                                data-target=\"#carouselExampleIndicators\"></li>
                                            <li data-slide-to=\"1\" data-target=\"#carouselExampleIndicators\"></li>
                                            <li data-slide-to=\"2\" data-target=\"#carouselExampleIndicators\"></li>
                                            <li data-slide-to=\"3\" data-target=\"#carouselExampleIndicators\"></li>
                                            <li data-slide-to=\"4\" data-target=\"#carouselExampleIndicators\"></li>
                                        </ol>
                                        <div class=\"carousel-inner\">
                                            ";
            // line 130
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 130, $this->source); })()), "galeries", [], "any", false, false, false, 130));
            foreach ($context['_seq'] as $context["_key"] => $context["gale"]) {
                // line 131
                yield "                                                ";
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["gale"], "info", [], "any", false, false, false, 131) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, $context["gale"], "position", [], "any", false, false, false, 131) != 0))) {
                    // line 132
                    yield "                                                    <div class=\"carousel-item ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["gale"], "position", [], "any", false, false, false, 132) == 1)) {
                        yield "active";
                    }
                    yield " \">
                                                        <img class=\"d-block w-100\"
                                                             src=\"";
                    // line 134
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("gallery/"), "html", null, true);
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["gale"], "link", [], "any", false, false, false, 134), "html", null, true);
                    yield "\"
                                                             style=\"width: 450px; height: 450px\">
                                                    </div>
                                                ";
                } else {
                    // line 138
                    yield "                                                    <div class=\"carousel-item ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["gale"], "position", [], "any", false, false, false, 138) == 1)) {
                        yield "active";
                    }
                    yield "\">
                                                        <img class=\"d-block w-100\" src=\"";
                    // line 139
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("gallery/not.png"), "html", null, true);
                    yield "\"
                                                             style=\"width: 450px; height: 450px\">
                                                    </div>
                                                ";
                }
                // line 143
                yield "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['gale'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            yield "                                        </div>
                                        <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\"
                                           data-slide=\"prev\">
                                            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                            <span class=\"sr-only\">Previous</span>
                                        </a>
                                        <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\"
                                           data-slide=\"next\">
                                            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                            <span class=\"sr-only\">Next</span>
                                        </a>
                                    </div>
                                    <br><br>
                                            <table class=\"table-bordered\" id=\"dataPARTAGE\">
                                        <thead>
                                        <tr style=\"color: dimgray !important;\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th>ARTICLE</th>
                                            <th>FAMILLE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
            // line 166
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 166, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 167
                yield "                                            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "vente", [], "any", false, false, false, 167) == "oui")) {
                    // line 168
                    yield "                                                <tr>
                                                    <td class=\"text-center\"><input type=\"checkbox\" data-toggle=\"toggle\"
                                                                                   class=\"PARTAR\"
                                                                                   value=\"";
                    // line 171
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 171), "html", null, true);
                    yield "\"></td>
                                                    <td class=\"text-pri\">
                                                        <a href=\"#\" data-toggle=\"modal\"
                                                           data-target=\"#article";
                    // line 174
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 174), "html", null, true);
                    yield "\"
                                                           title=\"";
                    // line 175
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["article"], "designation", [], "any", false, false, false, 175)), "html", null, true);
                    yield "\"
                                                           class=\"font-weight-bold\">
                                                            ";
                    // line 177
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["article"], "designation", [], "any", false, false, false, 177)), "html", null, true);
                    yield "</a>
                                                        <br>
                                                        <span class=\"text-dangerr\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 180
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "pu", [], "any", false, false, false, 180), 2, ",", " "), "html", null, true);
                    yield "
                                                            ";
                    // line 181
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "monnaies", [], "any", false, false, false, 181), "code", [], "any", false, false, false, 181), "html", null, true);
                    yield "/";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "unite", [], "any", false, false, false, 181), "html", null, true);
                    yield "
\t\t\t\t\t\t\t\t\t\t\t\t</span><br>
                                                        Réf:
                                                        ";
                    // line 184
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "reference", [], "any", false, false, false, 184), "html", null, true);
                    yield "
                                                    </td>
                                                    <td>";
                    // line 186
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "typeArticle", [], "any", false, false, false, 186), "type", [], "any", false, false, false, 186)), "html", null, true);
                    yield "
                                                        |
                                                        ";
                    // line 188
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "biblio", [], "any", false, false, false, 188), "section", [], "any", false, false, false, 188)), "html", null, true);
                    yield "</td>
                                                </tr>
                                            ";
                }
                // line 191
                yield "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 192
            yield "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id=\"accordion\">
                        ";
            // line 199
            $context["p"] = 0;
            // line 200
            yield "                        ";
            // line 201
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 201, $this->source); })()), "getTypearticle", [], "any", false, false, false, 201));
            foreach ($context['_seq'] as $context["_key"] => $context["typ"]) {
                // line 202
                yield "                            <div class=\"card shadow mb-4 bg-light \" style=\"margin-bottom: 20px; padding: 10px\">
                                <div id=\"heading";
                // line 203
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 203, $this->source); })()), "html", null, true);
                yield "\">
                                    <h5 class=\"mb-0\">
                                        <a class=\"btn bg-pri text-left text-white pan\" data-toggle=\"collapse\"
                                           data-target=\"#collapse";
                // line 206
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 206, $this->source); })()), "html", null, true);
                yield "\" aria-expanded=\"true\"
                                           aria-controls=\"collapse";
                // line 207
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 207, $this->source); })()), "html", null, true);
                yield "\" style=\"width: 100%;\">
                                            ";
                // line 208
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["typ"], "type", [], "any", false, false, false, 208)), "html", null, true);
                yield "
                                            ";
                // line 209
                $context["q"] = 0;
                // line 210
                yield "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 210, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    // line 211
                    yield "                                                ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "vente", [], "any", false, false, false, 211) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, $context["article"], "typeArticle", [], "any", false, false, false, 211) == $context["typ"]))) {
                        // line 212
                        yield "                                                    ";
                        $context["q"] = ((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 212, $this->source); })()) + 1);
                        // line 213
                        yield "                                                ";
                    }
                    // line 214
                    yield "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 215
                yield "                                            <span class=\"badge badge-light float-right\"
                                                  style=\"margin-top: 6px\">";
                // line 216
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 216, $this->source); })()), "html", null, true);
                yield "</span>
                                        </a>
                                    </h5>
                                </div>
                                <div id=\"collapse";
                // line 220
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 220, $this->source); })()), "html", null, true);
                yield "\"
                                     class=\"";
                // line 221
                if (((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 221, $this->source); })()) == 0)) {
                    yield "collapse show";
                } else {
                    yield "collapse";
                }
                yield "\"
                                     aria-labelledby=\"heading";
                // line 222
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 222, $this->source); })()), "html", null, true);
                yield "\" data-parent=\"#accordion\">
                                    <div class=\"card-body\">

                                        <div class=\"mb-4\">
                                            <div class=\"row\">
                                                <div id=\"carouselExample\" class=\"carousel slide\" data-ride=\"carousel\">
                                                    <div class=\"button-placement\" style=\"margin-bottom: 5px\">
                                                        <a class=\"btn btn-sm btn-primary\" href=\"#carouselExample\"
                                                           role=\"button\" data-slide=\"prev\">
                                                            <i class=\"fas fa-chevron-circle-left\"></i>
                                                        </a>
                                                        <a class=\"btn btn-sm btn-primary\" href=\"#carouselExample\"
                                                           role=\"button\" data-slide=\"next\">
                                                            <i class=\"fas fa-chevron-circle-right\"></i>
                                                        </a>
                                                    </div>

                                                    <div id=\"carouselExample\" class=\"carousel slide\"
                                                         data-ride=\"carousel\">
                                                        <div class=\"carousel-inner\">
                                                            <div class=\"carousel-item active\">
                                                                <div class=\"row\">
                                                                    ";
                // line 244
                $context["i"] = 1;
                // line 245
                yield "                                                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 245, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    // line 246
                    yield "                                                                    ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "vente", [], "any", false, false, false, 246) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, $context["article"], "typeArticle", [], "any", false, false, false, 246) == $context["typ"]))) {
                        // line 247
                        yield "                                                                    <div class=\"col-md-4 col-sm-12\" style=\" padding: 15px\">
                                                                        <div class=\"shadow\"
                                                                             style=\"border: 1px solid gainsboro; padding: 5px\"
                                                                             alt=\"Product\">
                                                                            <a href=\"#\" data-toggle=\"modal\"
                                                                               data-target=\"#article";
                        // line 252
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 252), "html", null, true);
                        yield "\"
                                                                               title=\"";
                        // line 253
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["article"], "designation", [], "any", false, false, false, 253)), "html", null, true);
                        yield "\">
                                                                                <img src=\"";
                        // line 254
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "info1", [], "any", false, false, false, 254) == "oui")) {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("articles/" . CoreExtension::getAttribute($this->env, $this->source, $context["article"], "link1", [], "any", false, false, false, 254))), "html", null, true);
                        } else {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("gallery/not.png"), "html", null, true);
                        }
                        yield "\"
                                                                                     width=\"100%\"></a>

                                                                            <h6>";
                        // line 257
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["article"], "designation", [], "any", false, false, false, 257), 0, 35)), "html", null, true);
                        yield "</h6>
                                                                            <medium>Réf:
                                                                                ";
                        // line 259
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "reference", [], "any", false, false, false, 259), "html", null, true);
                        yield "</medium>
                                                                            <h6 class=\"text-dangerr\"
                                                                                style=\"font-size: 14px\">Prix:
                                                                                ";
                        // line 262
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "pu", [], "any", false, false, false, 262), 2, ".", " "), "html", null, true);
                        yield "
                                                                                ";
                        // line 263
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "monnaies", [], "any", false, false, false, 263), "code", [], "any", false, false, false, 263), "html", null, true);
                        yield "
                                                                                /";
                        // line 264
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "unite", [], "any", false, false, false, 264), "html", null, true);
                        yield "</h6>

                                                                            ";
                        // line 266
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 266, $this->source); })()), "user", [], "any", false, false, false, 266)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 267
                            yield "                                                                                ";
                            $context["k"] = 0;
                            // line 268
                            yield "                                                                                ";
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["artik"]) || array_key_exists("artik", $context) ? $context["artik"] : (function () { throw new RuntimeError('Variable "artik" does not exist.', 268, $this->source); })()));
                            foreach ($context['_seq'] as $context["_key"] => $context["arti"]) {
                                // line 269
                                yield "                                                                                    ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 269, $this->source); })()), "user", [], "any", false, false, false, 269) != (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 269, $this->source); })()))) {
                                    // line 270
                                    yield "                                                                                        ";
                                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 270) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["arti"], "article", [], "any", false, false, false, 270), "id", [], "any", false, false, false, 270)) && ((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 270, $this->source); })()) == 0))) {
                                        // line 271
                                        yield "                                                                                            <button class=\"btn btn-sm btn-danger\"
                                                                                                    id=\"";
                                        // line 272
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "getId", [], "method", false, false, false, 272), "html", null, true);
                                        yield "\"
                                                                                                    style=\"width: 100%\"
                                                                                                    onclick=\"aamigrate(";
                                        // line 274
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "getId", [], "method", false, false, false, 274), "html", null, true);
                                        yield ")\">
                                                                                                Article déjà ajouté
                                                                                            </button>
                                                                                            ";
                                        // line 277
                                        $context["k"] = ((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 277, $this->source); })()) + 1);
                                        // line 278
                                        yield "                                                                                        ";
                                    }
                                    // line 279
                                    yield "                                                                                    ";
                                }
                                // line 280
                                yield "                                                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['arti'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 281
                            yield "                                                                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 281, $this->source); })()), "user", [], "any", false, false, false, 281) != (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 281, $this->source); })()))) {
                                // line 282
                                yield "                                                                                    ";
                                if (((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 282, $this->source); })()) == 0)) {
                                    // line 283
                                    yield "                                                                                        <button class=\"btn btn-sm btn-primary\"
                                                                                                id=\"";
                                    // line 284
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "getId", [], "method", false, false, false, 284), "html", null, true);
                                    yield "\"
                                                                                                style=\"width: 100%\"
                                                                                                onclick=\"aamigrate(";
                                    // line 286
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "getId", [], "method", false, false, false, 286), "html", null, true);
                                    yield ")\">
                                                                                            Ajouter à mes articles
                                                                                        </button>
                                                                                    ";
                                }
                                // line 290
                                yield "                                                                                    <button class=\"btn btn-sm btn-warning\"
                                                                                            style=\"width: 100%\">
                                                                                        Commander
                                                                                    </button>
                                                                                ";
                            }
                            // line 295
                            yield "                                                                            ";
                        }
                        // line 296
                        yield "
                                                                        </div>
                                                                    </div>
                                                                    ";
                        // line 299
                        $context["m"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 299, $this->source); })()) % 3);
                        // line 300
                        yield "                                                                    ";
                        if ((((isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 300, $this->source); })()) == 0) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 300, $this->source); })())) > 3))) {
                            // line 301
                            yield "                                                                </div>
                                                            </div>
                                                            <div class=\"carousel-item\">
                                                                <div class=\"row\">
                                                                    ";
                        }
                        // line 306
                        yield "                                                                    ";
                        $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 306, $this->source); })()) + 1);
                        // line 307
                        yield "                                                                    ";
                    }
                    // line 308
                    yield "                                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 309
                yield "                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            ";
                // line 323
                $context["p"] = ((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 323, $this->source); })()) + 1);
                // line 324
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['typ'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 325
            yield "                    </div>
                ";
        }
        // line 327
        yield "            </div>

        </div>
    </div>
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
        return "content/provider.html.twig";
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
        return array (  785 => 327,  781 => 325,  775 => 324,  773 => 323,  757 => 309,  751 => 308,  748 => 307,  745 => 306,  738 => 301,  735 => 300,  733 => 299,  728 => 296,  725 => 295,  718 => 290,  711 => 286,  706 => 284,  703 => 283,  700 => 282,  697 => 281,  691 => 280,  688 => 279,  685 => 278,  683 => 277,  677 => 274,  672 => 272,  669 => 271,  666 => 270,  663 => 269,  658 => 268,  655 => 267,  653 => 266,  648 => 264,  644 => 263,  640 => 262,  634 => 259,  629 => 257,  619 => 254,  615 => 253,  611 => 252,  604 => 247,  601 => 246,  596 => 245,  594 => 244,  569 => 222,  561 => 221,  557 => 220,  550 => 216,  547 => 215,  541 => 214,  538 => 213,  535 => 212,  532 => 211,  527 => 210,  525 => 209,  521 => 208,  517 => 207,  513 => 206,  507 => 203,  504 => 202,  499 => 201,  497 => 200,  495 => 199,  486 => 192,  480 => 191,  474 => 188,  469 => 186,  464 => 184,  456 => 181,  452 => 180,  446 => 177,  441 => 175,  437 => 174,  431 => 171,  426 => 168,  423 => 167,  419 => 166,  395 => 144,  389 => 143,  382 => 139,  375 => 138,  367 => 134,  359 => 132,  356 => 131,  352 => 130,  336 => 116,  334 => 115,  330 => 113,  327 => 112,  321 => 111,  312 => 104,  306 => 101,  302 => 99,  299 => 98,  293 => 95,  289 => 93,  286 => 92,  280 => 89,  276 => 87,  273 => 86,  267 => 83,  263 => 81,  260 => 80,  254 => 77,  250 => 75,  248 => 74,  243 => 72,  239 => 71,  235 => 70,  226 => 67,  210 => 54,  207 => 53,  204 => 52,  199 => 51,  197 => 50,  192 => 47,  183 => 44,  177 => 41,  173 => 40,  169 => 39,  164 => 38,  158 => 37,  150 => 33,  147 => 32,  139 => 28,  134 => 27,  131 => 26,  127 => 25,  123 => 23,  119 => 22,  104 => 9,  91 => 8,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    {{ title }}
{% endblock %}


{% block body %}

    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-sm-4\">
                <div class=\"card shadow mb-4 bg-white\" style=\" padding:10px\">
                    <table class=\"table-bordered\" style=\"width: 100%\" id=\"dataPARTAGE3\">
                        <thead>
                        <tr style=\"color: dimgray !important;\">
                            <th>SHOWROOMS</th>
                            <th>LETTRE</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for user in users %}
                            <tr>
                                <td class=\"text-pri\">
                                    {% for gale in user.galeries %}
                                        {% if gale.position == 0 and gale.info == 'oui' %}
                                            <a href=\"{{ path('provider', {'iduser': user.id}) }}\"><img
                                                        src=\"{{ asset('gallery/') }}{{ gale.link }}\"
                                                        style=\"float: left; margin-right: 5px; width: 80px; height: 80px\"
                                                        class=\"shadow\"></a>
                                        {% endif %}
                                        {% if gale.position == 0 and gale.info == 'non' %}
                                            <img src=\"{{ asset('gallery/not.png') }}\"
                                                 style=\"float: left; margin-right: 5px; width: 80px; height: 80px\"
                                                 class=\"shadow\">
                                        {% endif %}
                                    {% endfor %}
                                    <a href=\"{{ path('provider', {'iduser': user.id}) }}\"><b class=\"text-pri\"
                                                                                             style=\"font-size: large\">{{ user.societe|upper }}</b></a><br>
                                    <b class=\"text-danger\" style=\"font-size: small\">{{ user.contact }}</b><br>
                                    {{ user.adresse }}</p>
                                </td>

                                <td>{{ user.societe|first|upper }}</td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
                {% if editmode %}
                    {% for article in articles %}
                        {% if article.vente == 'oui' %}
                            <!-- Modal -->
                            <div class=\"modal fade\" id=\"article{{ article.id }}\" tabindex=\"-1\" role=\"dialog\"
                                 aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                                <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Description de
                                                l'article</h5>
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"
                                                    aria-label=\"Close\">
                                                <span aria-hidden=\"true\">&times;</span>
                                            </button>
                                        </div>
                                        <div class=\"modal-body\">
                                            <img src=\"{% if article.info1 == 'oui' %}{{ asset('articles/') }}{{ article.link1 }}{% endif %}\"
                                                 style=\"width:100%;border: 1px solid #000\">
                                            <div class=\"card shadow mb-4\" style=\"height:auto; padding: 15px\">
                                                <h5>{{ article.designation }}</h5>
                                                <h4 class=\"text-danger\">{{ article.pu|number_format(2, ',', ' ') }}
                                                    {{ article.monnaies.code }}</h4>
                                                <table class=\"table-striped border\" style=\"font-size: 1rem\">
                                                    {% if article.code != null %}
                                                        <tr>
                                                            <td>Code Article</td>
                                                            <td class=\"text-pri\">{{ article.code }}</td>
                                                        </tr>
                                                    {% endif %}
                                                    {% if article.marque != null %}
                                                        <tr>
                                                            <td>Marque</td>
                                                            <td class=\"text-pri\">{{ article.marque }}</td>
                                                        </tr>
                                                    {% endif %}
                                                    {% if article.reference != null %}
                                                        <tr>
                                                            <td>Référence</td>
                                                            <td class=\"text-pri\">{{ article.reference }}</td>
                                                        </tr>
                                                    {% endif %}
                                                    {% if article.unite != null %}
                                                        <tr>
                                                            <td>Vendu en</td>
                                                            <td class=\"text-pri\">{{ article.unite }}</td>
                                                        </tr>
                                                    {% endif %}
                                                    {% if article.description != null %}
                                                        <tr>
                                                            <td>Description</td>
                                                            <td class=\"text-pri\">{{ article.description }}</td>
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
                {% endif %}
            </div>
            <div class=\"col-sm-8\">
                {% if editmode %}
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"card shadow mb-4 bg-white\" style=\" padding:15px\">
                                <div class=\"card-body\">
                                    <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\" style=\"float: left; width: 40%\">
                                        <ol class=\"carousel-indicators\">
                                            <li class=\"active\" data-slide-to=\"0\"
                                                data-target=\"#carouselExampleIndicators\"></li>
                                            <li data-slide-to=\"1\" data-target=\"#carouselExampleIndicators\"></li>
                                            <li data-slide-to=\"2\" data-target=\"#carouselExampleIndicators\"></li>
                                            <li data-slide-to=\"3\" data-target=\"#carouselExampleIndicators\"></li>
                                            <li data-slide-to=\"4\" data-target=\"#carouselExampleIndicators\"></li>
                                        </ol>
                                        <div class=\"carousel-inner\">
                                            {% for gale in user.galeries %}
                                                {% if gale.info == 'oui' and gale.position != 0 %}
                                                    <div class=\"carousel-item {% if gale.position == 1 %}active{% endif %} \">
                                                        <img class=\"d-block w-100\"
                                                             src=\"{{ asset('gallery/') }}{{ gale.link }}\"
                                                             style=\"width: 450px; height: 450px\">
                                                    </div>
                                                {% else %}
                                                    <div class=\"carousel-item {% if gale.position == 1 %}active{% endif %}\">
                                                        <img class=\"d-block w-100\" src=\"{{ asset('gallery/not.png') }}\"
                                                             style=\"width: 450px; height: 450px\">
                                                    </div>
                                                {% endif %}
                                            {% endfor %}
                                        </div>
                                        <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\"
                                           data-slide=\"prev\">
                                            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                            <span class=\"sr-only\">Previous</span>
                                        </a>
                                        <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\"
                                           data-slide=\"next\">
                                            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                            <span class=\"sr-only\">Next</span>
                                        </a>
                                    </div>
                                    <br><br>
                                            <table class=\"table-bordered\" id=\"dataPARTAGE\">
                                        <thead>
                                        <tr style=\"color: dimgray !important;\">
                                            <th style=\"width: 10px !important;\"></th>
                                            <th>ARTICLE</th>
                                            <th>FAMILLE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for article in articles %}
                                            {% if article.vente == 'oui' %}
                                                <tr>
                                                    <td class=\"text-center\"><input type=\"checkbox\" data-toggle=\"toggle\"
                                                                                   class=\"PARTAR\"
                                                                                   value=\"{{ article.id }}\"></td>
                                                    <td class=\"text-pri\">
                                                        <a href=\"#\" data-toggle=\"modal\"
                                                           data-target=\"#article{{ article.id }}\"
                                                           title=\"{{ article.designation|upper }}\"
                                                           class=\"font-weight-bold\">
                                                            {{ article.designation|upper }}</a>
                                                        <br>
                                                        <span class=\"text-dangerr\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ article.pu|number_format(2, ',', ' ') }}
                                                            {{ article.monnaies.code }}/{{ article.unite }}
\t\t\t\t\t\t\t\t\t\t\t\t</span><br>
                                                        Réf:
                                                        {{ article.reference }}
                                                    </td>
                                                    <td>{{ article.typeArticle.type|upper }}
                                                        |
                                                        {{ article.biblio.section|upper }}</td>
                                                </tr>
                                            {% endif %}
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id=\"accordion\">
                        {% set p = 0 %}
                        {#  CATEGORIES D'ARTICLES #}
                        {% for typ in user.getTypearticle %}
                            <div class=\"card shadow mb-4 bg-light \" style=\"margin-bottom: 20px; padding: 10px\">
                                <div id=\"heading{{ p }}\">
                                    <h5 class=\"mb-0\">
                                        <a class=\"btn bg-pri text-left text-white pan\" data-toggle=\"collapse\"
                                           data-target=\"#collapse{{ p }}\" aria-expanded=\"true\"
                                           aria-controls=\"collapse{{ p }}\" style=\"width: 100%;\">
                                            {{ typ.type|upper }}
                                            {% set q = 0 %}
                                            {% for article in articles %}
                                                {% if article.vente == 'oui' and article.typeArticle == typ %}
                                                    {% set q = q + 1 %}
                                                {% endif %}
                                            {% endfor %}
                                            <span class=\"badge badge-light float-right\"
                                                  style=\"margin-top: 6px\">{{ q }}</span>
                                        </a>
                                    </h5>
                                </div>
                                <div id=\"collapse{{ p }}\"
                                     class=\"{% if p == 0 %}collapse show{% else %}collapse{% endif %}\"
                                     aria-labelledby=\"heading{{ p }}\" data-parent=\"#accordion\">
                                    <div class=\"card-body\">

                                        <div class=\"mb-4\">
                                            <div class=\"row\">
                                                <div id=\"carouselExample\" class=\"carousel slide\" data-ride=\"carousel\">
                                                    <div class=\"button-placement\" style=\"margin-bottom: 5px\">
                                                        <a class=\"btn btn-sm btn-primary\" href=\"#carouselExample\"
                                                           role=\"button\" data-slide=\"prev\">
                                                            <i class=\"fas fa-chevron-circle-left\"></i>
                                                        </a>
                                                        <a class=\"btn btn-sm btn-primary\" href=\"#carouselExample\"
                                                           role=\"button\" data-slide=\"next\">
                                                            <i class=\"fas fa-chevron-circle-right\"></i>
                                                        </a>
                                                    </div>

                                                    <div id=\"carouselExample\" class=\"carousel slide\"
                                                         data-ride=\"carousel\">
                                                        <div class=\"carousel-inner\">
                                                            <div class=\"carousel-item active\">
                                                                <div class=\"row\">
                                                                    {% set i = 1 %}
                                                                    {% for article in articles %}
                                                                    {% if article.vente == 'oui' and article.typeArticle == typ %}
                                                                    <div class=\"col-md-4 col-sm-12\" style=\" padding: 15px\">
                                                                        <div class=\"shadow\"
                                                                             style=\"border: 1px solid gainsboro; padding: 5px\"
                                                                             alt=\"Product\">
                                                                            <a href=\"#\" data-toggle=\"modal\"
                                                                               data-target=\"#article{{ article.id }}\"
                                                                               title=\"{{ article.designation|upper }}\">
                                                                                <img src=\"{% if article.info1 == 'oui' %}{{ asset('articles/'~article.link1) }}{% else %}{{ asset('gallery/not.png') }}{% endif %}\"
                                                                                     width=\"100%\"></a>

                                                                            <h6>{{ article.designation[0:35]|capitalize }}</h6>
                                                                            <medium>Réf:
                                                                                {{ article.reference }}</medium>
                                                                            <h6 class=\"text-dangerr\"
                                                                                style=\"font-size: 14px\">Prix:
                                                                                {{ article.pu|number_format(2, '.', ' ') }}
                                                                                {{ article.monnaies.code }}
                                                                                /{{ article.unite }}</h6>

                                                                            {% if(app.user) %}
                                                                                {% set k = 0 %}
                                                                                {% for arti in artik %}
                                                                                    {% if(app.user != user) %}
                                                                                        {% if article.id == arti.article.id and k == 0 %}
                                                                                            <button class=\"btn btn-sm btn-danger\"
                                                                                                    id=\"{{ article.getId() }}\"
                                                                                                    style=\"width: 100%\"
                                                                                                    onclick=\"aamigrate({{ article.getId() }})\">
                                                                                                Article déjà ajouté
                                                                                            </button>
                                                                                            {% set k = k + 1 %}
                                                                                        {% endif %}
                                                                                    {% endif %}
                                                                                {% endfor %}
                                                                                {% if(app.user != user) %}
                                                                                    {% if k == 0 %}
                                                                                        <button class=\"btn btn-sm btn-primary\"
                                                                                                id=\"{{ article.getId() }}\"
                                                                                                style=\"width: 100%\"
                                                                                                onclick=\"aamigrate({{ article.getId() }})\">
                                                                                            Ajouter à mes articles
                                                                                        </button>
                                                                                    {% endif %}
                                                                                    <button class=\"btn btn-sm btn-warning\"
                                                                                            style=\"width: 100%\">
                                                                                        Commander
                                                                                    </button>
                                                                                {% endif %}
                                                                            {% endif %}

                                                                        </div>
                                                                    </div>
                                                                    {% set m = i%3 %}
                                                                    {% if m == 0 and articles|length > 3 %}
                                                                </div>
                                                            </div>
                                                            <div class=\"carousel-item\">
                                                                <div class=\"row\">
                                                                    {% endif %}
                                                                    {% set i = i + 1 %}
                                                                    {% endif %}
                                                                    {% endfor %}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            {% set p = p + 1 %}
                        {% endfor %}
                    </div>
                {% endif %}
            </div>

        </div>
    </div>
{% endblock %}
", "content/provider.html.twig", "C:\\wamp64\\www\\carlinbleu\\templates\\content\\provider.html.twig");
    }
}
